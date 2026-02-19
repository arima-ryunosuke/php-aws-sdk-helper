<?php
namespace ryunosuke\Aws\Helper;

use ArrayIterator;
use Aws\ResultInterface;
use Aws\S3\S3ClientInterface;
use Closure;
use Fiber;
use Generator;
use GuzzleHttp\Promise\Each;

/**
 * S3Helper/Utility
 *
 * - location base operation
 *   - path/to/object same as {defaultBucket}path/to/object
 *   - //bucket/path/to/object same as s3://bucket/path/to/object
 * - generator base multiple operation
 */
class S3Helper
{
    public function __construct(
        private S3ClientInterface $client,
        private ?string           $defaultBucket = null,
        private int               $defaultConcurrency = 24,
        private bool              $throwsException = false,
    ) {
    }

    /**
     * @see \Aws\S3\S3Client::listObjectsV2()
     *
     * @psalm-import-type ListObjectsV2Request from \Aws\S3\S3Client
     * @psalm-import-type Object from \Aws\S3\S3Client
     *
     * @param string|array{
     *     Bucket?: string,
     *     Delimiter?: string,
     *     EncodingType?: "url",
     *     MaxKeys?: int,
     *     Prefix?: string,
     *     ContinuationToken?: string,
     *     FetchOwner?: bool,
     *     StartAfter?: string,
     *     RequestPayer?: "requester",
     *     ExpectedBucketOwner?: string,
     *     OptionalObjectAttributes?: array|list<"RestoreStatus">,
     *     "@url": string,
     * } ...$urls
     * @return Generator<string, array{
     *     Bucket: string,
     *     Key: string,
     *     LastModified?: int|string|\DateTimeInterface,
     *     ETag?: string,
     *     ChecksumAlgorithm?: array|list<"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME">,
     *     ChecksumType?: "COMPOSITE"|"FULL_OBJECT",
     *     Size?: int,
     *     StorageClass?: "STANDARD"|"REDUCED_REDUNDANCY"|"GLACIER"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"|"SNOW"|"EXPRESS_ONEZONE"|"FSX_OPENZFS"|"FSX_ONTAP",
     *     Owner?: array{
     *         DisplayName?: string,
     *         ID?: string,
     *     },
     *     RestoreStatus?: array{
     *         IsRestoreInProgress?: bool,
     *         RestoreExpiryDate?: int|string|\DateTimeInterface,
     *     },
     * }>
     */
    public function listObjects(string|array ...$urls): Generator
    {
        $count = 0;
        foreach ($urls as $url) {
            $args           = $this->normalizeUrl($url);
            $args['Prefix'] ??= $args['Key'];
            unset($args['Key']);

            foreach ($this->client->getIterator('ListObjectsV2', $args) as $object) {
                $count++;
                yield $object['Key'] => ['Bucket' => $args['Bucket']] + $object;
            }
        }
        return $count;
    }

    /**
     * @see \Aws\S3\S3Client::headObjectAsync()
     * @see \Aws\S3\S3Client::doesObjectExistV2()
     *
     * @psalm-import-type HeadObjectRequest from \Aws\S3\S3Client
     *
     * @param iterable<int|string, string|array{
     *     DeleteMarker?: bool,
     *     Bucket?: string,
     *     IfMatch?: string,
     *     IfModifiedSince?: int|string|\DateTimeInterface,
     *     IfNoneMatch?: string,
     *     IfUnmodifiedSince?: int|string|\DateTimeInterface,
     *     Key?: string,
     *     Range?: string,
     *     ResponseCacheControl?: string,
     *     ResponseContentDisposition?: string,
     *     ResponseContentEncoding?: string,
     *     ResponseContentLanguage?: string,
     *     ResponseContentType?: string,
     *     ResponseExpires?: int|string|\DateTimeInterface,
     *     VersionId?: string,
     *     SSECustomerAlgorithm?: string,
     *     SSECustomerKey?: string,
     *     SSECustomerKeyMD5?: string,
     *     RequestPayer?: "requester",
     *     PartNumber?: int,
     *     ExpectedBucketOwner?: string,
     *     ChecksumMode?: "ENABLED",
     *     "@url": string,
     * }> $urls
     * @return Generator<string, bool>
     */
    public function doObjectsExist(iterable $urls, ?int $concurrency = null): Generator
    {
        return $this->processPromises($this->simpleCommand('headObjectAsync',
            $urls,
            fn($key, $url) => $this->normalizeUrl($url) + ['Key' => $key],
            fn($result, $args) => true,
            function ($reason, $args) {
                $response = $reason->getResponse();
                if (($args['DeleteMarker'] ?? false) && !empty($response) && $response->getHeader('x-amz-delete-marker')) {
                    return true;
                }
                if ($reason->getStatusCode() === 404) {
                    return false;
                }
                throw $reason; // @codeCoverageIgnore
            },
        ), $concurrency, false);
    }

    /**
     * @see \Aws\S3\S3Client::headObjectAsync()
     *
     * @psalm-import-type HeadObjectRequest from \Aws\S3\S3Client
     * @psalm-import-type HeadObjectOutput from \Aws\S3\S3Client
     *
     * @param iterable<int|string, string|array{
     *     Bucket?: string,
     *     IfMatch?: string,
     *     IfModifiedSince?: int|string|\DateTimeInterface,
     *     IfNoneMatch?: string,
     *     IfUnmodifiedSince?: int|string|\DateTimeInterface,
     *     Key?: string,
     *     Range?: string,
     *     ResponseCacheControl?: string,
     *     ResponseContentDisposition?: string,
     *     ResponseContentEncoding?: string,
     *     ResponseContentLanguage?: string,
     *     ResponseContentType?: string,
     *     ResponseExpires?: int|string|\DateTimeInterface,
     *     VersionId?: string,
     *     SSECustomerAlgorithm?: string,
     *     SSECustomerKey?: string,
     *     SSECustomerKeyMD5?: string,
     *     RequestPayer?: "requester",
     *     PartNumber?: int,
     *     ExpectedBucketOwner?: string,
     *     ChecksumMode?: "ENABLED",
     *     "@url": string,
     * }> $urls
     * @return Generator<string, array{
     *     Bucket: string,
     *     Key: string,
     *     DeleteMarker?: bool,
     *     AcceptRanges?: string,
     *     Expiration?: string,
     *     Restore?: string,
     *     ArchiveStatus?: "ARCHIVE_ACCESS"|"DEEP_ARCHIVE_ACCESS",
     *     LastModified?: int|string|\DateTimeInterface,
     *     ContentLength?: int,
     *     ChecksumCRC32?: string,
     *     ChecksumCRC32C?: string,
     *     ChecksumCRC64NVME?: string,
     *     ChecksumSHA1?: string,
     *     ChecksumSHA256?: string,
     *     ChecksumType?: "COMPOSITE"|"FULL_OBJECT",
     *     ETag?: string,
     *     MissingMeta?: int,
     *     VersionId?: string,
     *     CacheControl?: string,
     *     ContentDisposition?: string,
     *     ContentEncoding?: string,
     *     ContentLanguage?: string,
     *     ContentType?: string,
     *     ContentRange?: string,
     *     Expires?: string,
     *     WebsiteRedirectLocation?: string,
     *     ServerSideEncryption?: "AES256"|"aws:fsx"|"aws:kms"|"aws:kms:dsse",
     *     Metadata?: array<string, string>,
     *     SSECustomerAlgorithm?: string,
     *     SSECustomerKeyMD5?: string,
     *     SSEKMSKeyId?: string,
     *     BucketKeyEnabled?: bool,
     *     StorageClass?: "STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"|"SNOW"|"EXPRESS_ONEZONE"|"FSX_OPENZFS"|"FSX_ONTAP",
     *     RequestCharged?: "requester",
     *     ReplicationStatus?: "COMPLETE"|"PENDING"|"FAILED"|"REPLICA"|"COMPLETED",
     *     PartsCount?: int,
     *     TagCount?: int,
     *     ObjectLockMode?: "GOVERNANCE"|"COMPLIANCE",
     *     ObjectLockRetainUntilDate?: int|string|\DateTimeInterface,
     *     ObjectLockLegalHoldStatus?: "ON"|"OFF",
     * }>
     */
    public function headObjects(iterable $urls, ?int $concurrency = null): Generator
    {
        return $this->processPromises($this->simpleCommand('headObjectAsync',
            $urls,
            fn($key, $url) => $this->normalizeUrl($url) + ['Key' => $key],
        ), $concurrency, null);
    }

    /**
     * @see \Aws\S3\S3Client::getObjectAsync()
     *
     * @psalm-import-type GetObjectRequest from \Aws\S3\S3Client
     * @psalm-import-type GetObjectOutput from \Aws\S3\S3Client
     *
     * @param iterable<int|string, string|array{
     *     Bucket?: string,
     *     IfMatch?: string,
     *     IfModifiedSince?: int|string|\DateTimeInterface,
     *     IfNoneMatch?: string,
     *     IfUnmodifiedSince?: int|string|\DateTimeInterface,
     *     Key?: string,
     *     Range?: string,
     *     ResponseCacheControl?: string,
     *     ResponseContentDisposition?: string,
     *     ResponseContentEncoding?: string,
     *     ResponseContentLanguage?: string,
     *     ResponseContentType?: string,
     *     ResponseExpires?: int|string|\DateTimeInterface,
     *     VersionId?: string,
     *     SSECustomerAlgorithm?: string,
     *     SSECustomerKey?: string,
     *     SSECustomerKeyMD5?: string,
     *     RequestPayer?: "requester",
     *     PartNumber?: int,
     *     ExpectedBucketOwner?: string,
     *     ChecksumMode?: "ENABLED",
     *     "@url": string,
     * }> $urls
     * @return Generator<string, array{
     *     Bucket: string,
     *     Key: string,
     *     Body?: string|resource|\Psr\Http\Message\StreamInterface,
     *     DeleteMarker?: bool,
     *     AcceptRanges?: string,
     *     Expiration?: string,
     *     Restore?: string,
     *     LastModified?: int|string|\DateTimeInterface,
     *     ContentLength?: int,
     *     ETag?: string,
     *     ChecksumCRC32?: string,
     *     ChecksumCRC32C?: string,
     *     ChecksumCRC64NVME?: string,
     *     ChecksumSHA1?: string,
     *     ChecksumSHA256?: string,
     *     ChecksumType?: "COMPOSITE"|"FULL_OBJECT",
     *     MissingMeta?: int,
     *     VersionId?: string,
     *     CacheControl?: string,
     *     ContentDisposition?: string,
     *     ContentEncoding?: string,
     *     ContentLanguage?: string,
     *     ContentRange?: string,
     *     ContentType?: string,
     *     Expires?: string,
     *     WebsiteRedirectLocation?: string,
     *     ServerSideEncryption?: "AES256"|"aws:fsx"|"aws:kms"|"aws:kms:dsse",
     *     Metadata?: array<string, string>,
     *     SSECustomerAlgorithm?: string,
     *     SSECustomerKeyMD5?: string,
     *     SSEKMSKeyId?: string,
     *     BucketKeyEnabled?: bool,
     *     StorageClass?: "STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"|"SNOW"|"EXPRESS_ONEZONE"|"FSX_OPENZFS"|"FSX_ONTAP",
     *     RequestCharged?: "requester",
     *     ReplicationStatus?: "COMPLETE"|"PENDING"|"FAILED"|"REPLICA"|"COMPLETED",
     *     PartsCount?: int,
     *     TagCount?: int,
     *     ObjectLockMode?: "GOVERNANCE"|"COMPLIANCE",
     *     ObjectLockRetainUntilDate?: int|string|\DateTimeInterface,
     *     ObjectLockLegalHoldStatus?: "ON"|"OFF",
     * }>
     */
    public function getObjects(iterable $urls, ?int $concurrency = null): Generator
    {
        return $this->processPromises($this->simpleCommand('getObjectAsync',
            $urls,
            fn($key, $url) => $this->normalizeUrl($url) + ['Key' => $key],
        ), $concurrency, null);
    }

    /**
     * @see \Aws\S3\S3Client::putObjectAsync()
     *
     * @psalm-import-type PutObjectRequest from \Aws\S3\S3Client
     * @psalm-import-type PutObjectOutput from \Aws\S3\S3Client
     *
     * @param iterable<string|resource|\Closure|\Psr\Http\Message\StreamInterface|array{
     *     ACL?: "private"|"public-read"|"public-read-write"|"authenticated-read"|"aws-exec-read"|"bucket-owner-read"|"bucket-owner-full-control",
     *     Body?: string|resource|\Psr\Http\Message\StreamInterface,
     *     Bucket?: string,
     *     CacheControl?: string,
     *     ContentDisposition?: string,
     *     ContentEncoding?: string,
     *     ContentLanguage?: string,
     *     ContentLength?: int,
     *     ContentMD5?: string,
     *     ContentType?: string,
     *     ChecksumAlgorithm?: "CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME",
     *     ChecksumCRC32?: string,
     *     ChecksumCRC32C?: string,
     *     ChecksumCRC64NVME?: string,
     *     ChecksumSHA1?: string,
     *     ChecksumSHA256?: string,
     *     Expires?: string,
     *     IfMatch?: string,
     *     IfNoneMatch?: string,
     *     GrantFullControl?: string,
     *     GrantRead?: string,
     *     GrantReadACP?: string,
     *     GrantWriteACP?: string,
     *     Key?: string,
     *     WriteOffsetBytes?: int,
     *     Metadata?: array<string, string>,
     *     ServerSideEncryption?: "AES256"|"aws:fsx"|"aws:kms"|"aws:kms:dsse",
     *     StorageClass?: "STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"|"SNOW"|"EXPRESS_ONEZONE"|"FSX_OPENZFS"|"FSX_ONTAP",
     *     WebsiteRedirectLocation?: string,
     *     SSECustomerAlgorithm?: string,
     *     SSECustomerKey?: string,
     *     SSECustomerKeyMD5?: string,
     *     SSEKMSKeyId?: string,
     *     SSEKMSEncryptionContext?: string,
     *     BucketKeyEnabled?: bool,
     *     RequestPayer?: "requester",
     *     Tagging?: string,
     *     ObjectLockMode?: "GOVERNANCE"|"COMPLIANCE",
     *     ObjectLockRetainUntilDate?: int|string|\DateTimeInterface,
     *     ObjectLockLegalHoldStatus?: "ON"|"OFF",
     *     ExpectedBucketOwner?: string,
     * }> $urlValues
     * @return Generator<string, array{
     *     Bucket: string,
     *     Key: string,
     *     Expiration?: string,
     *     ETag?: string,
     *     ChecksumCRC32?: string,
     *     ChecksumCRC32C?: string,
     *     ChecksumCRC64NVME?: string,
     *     ChecksumSHA1?: string,
     *     ChecksumSHA256?: string,
     *     ChecksumType?: "COMPOSITE"|"FULL_OBJECT",
     *     ServerSideEncryption?: "AES256"|"aws:fsx"|"aws:kms"|"aws:kms:dsse",
     *     VersionId?: string,
     *     SSECustomerAlgorithm?: string,
     *     SSECustomerKeyMD5?: string,
     *     SSEKMSKeyId?: string,
     *     SSEKMSEncryptionContext?: string,
     *     BucketKeyEnabled?: bool,
     *     Size?: int,
     *     RequestCharged?: "requester",
     * }>
     */
    public function putObjects(iterable $urlValues, ?int $concurrency = null): Generator
    {
        return $this->processPromises($this->simpleCommand('putObjectAsync',
            $urlValues,
            fn($url, $value) => $this->normalizeUrl($url) + $this->normalizeValue($value),
        ), $concurrency, null);
    }

    /**
     * @see \Aws\S3\S3Client::uploadAsync()
     *
     * @psalm-import-type PutObjectRequest from \Aws\S3\S3Client
     * @psalm-import-type PutObjectOutput from \Aws\S3\S3Client
     *
     * @param iterable<string|resource|\Closure|\Psr\Http\Message\StreamInterface|array{
     *     ACL?: "private"|"public-read"|"public-read-write"|"authenticated-read"|"aws-exec-read"|"bucket-owner-read"|"bucket-owner-full-control",
     *     Body?: string|resource|\Psr\Http\Message\StreamInterface,
     *     Bucket?: string,
     *     CacheControl?: string,
     *     ContentDisposition?: string,
     *     ContentEncoding?: string,
     *     ContentLanguage?: string,
     *     ContentLength?: int,
     *     ContentMD5?: string,
     *     ContentType?: string,
     *     ChecksumAlgorithm?: "CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME",
     *     ChecksumCRC32?: string,
     *     ChecksumCRC32C?: string,
     *     ChecksumCRC64NVME?: string,
     *     ChecksumSHA1?: string,
     *     ChecksumSHA256?: string,
     *     Expires?: string,
     *     IfMatch?: string,
     *     IfNoneMatch?: string,
     *     GrantFullControl?: string,
     *     GrantRead?: string,
     *     GrantReadACP?: string,
     *     GrantWriteACP?: string,
     *     Key?: string,
     *     WriteOffsetBytes?: int,
     *     Metadata?: array<string, string>,
     *     ServerSideEncryption?: "AES256"|"aws:fsx"|"aws:kms"|"aws:kms:dsse",
     *     StorageClass?: "STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"|"SNOW"|"EXPRESS_ONEZONE"|"FSX_OPENZFS"|"FSX_ONTAP",
     *     WebsiteRedirectLocation?: string,
     *     SSECustomerAlgorithm?: string,
     *     SSECustomerKey?: string,
     *     SSECustomerKeyMD5?: string,
     *     SSEKMSKeyId?: string,
     *     SSEKMSEncryptionContext?: string,
     *     BucketKeyEnabled?: bool,
     *     RequestPayer?: "requester",
     *     Tagging?: string,
     *     ObjectLockMode?: "GOVERNANCE"|"COMPLIANCE",
     *     ObjectLockRetainUntilDate?: int|string|\DateTimeInterface,
     *     ObjectLockLegalHoldStatus?: "ON"|"OFF",
     *     ExpectedBucketOwner?: string,
     *     "@url": string,
     *     "@options": array,
     * }> $urlValues
     * @return Generator<string, array{
     *     Bucket: string,
     *     Key: string,
     *     Expiration?: string,
     *     ETag?: string,
     *     ChecksumCRC32?: string,
     *     ChecksumCRC32C?: string,
     *     ChecksumCRC64NVME?: string,
     *     ChecksumSHA1?: string,
     *     ChecksumSHA256?: string,
     *     ChecksumType?: "COMPOSITE"|"FULL_OBJECT",
     *     ServerSideEncryption?: "AES256"|"aws:fsx"|"aws:kms"|"aws:kms:dsse",
     *     VersionId?: string,
     *     SSECustomerAlgorithm?: string,
     *     SSECustomerKeyMD5?: string,
     *     SSEKMSKeyId?: string,
     *     SSEKMSEncryptionContext?: string,
     *     BucketKeyEnabled?: bool,
     *     Size?: int,
     *     RequestCharged?: "requester",
     * }>
     */
    public function uploadObjects(iterable $urlValues, ?int $concurrency = null): Generator
    {
        return $this->processPromises((function () use ($urlValues) {
            foreach ($urlValues as $url => $value) {
                $args = $this->normalizeUrl($url);
                yield $args['Key'] => $this->client->uploadAsync(
                    $args['Bucket'],
                    $args['Key'],
                    $this->normalizeValue($value)['Body'],
                    $args['ACL'] ?? '',
                    $args['@options'] ?? [],
                )->then(fn(ResultInterface $result) => array_replace([
                    'Bucket' => $args['Bucket'],
                    'Key'    => $args['Key'],
                ], $result->toArray()));
            }
        })(), $concurrency, null);
    }

    /**
     * @see \Aws\S3\S3Client::copyAsync()
     *
     * @psalm-import-type CopyObjectResult from \Aws\S3\S3Client
     *
     * @param iterable<string|array{
     *     Bucket?: string,
     *     Key?: string,
     *     ACL?: "private"|"public-read"|"public-read-write"|"authenticated-read"|"aws-exec-read"|"bucket-owner-read"|"bucket-owner-full-control",
     *     "@url": string,
     *     "@options": array,
     * }> $fromTos
     * @return Generator<string, array{
     *     Bucket: string,
     *     Key: string,
     *     ETag?: string,
     *     LastModified?: int|string|\DateTimeInterface,
     *     ChecksumType?: "COMPOSITE"|"FULL_OBJECT",
     *     ChecksumCRC32?: string,
     *     ChecksumCRC32C?: string,
     *     ChecksumCRC64NVME?: string,
     *     ChecksumSHA1?: string,
     *     ChecksumSHA256?: string,
     * }>
     */
    public function copyObjects(iterable $fromTos, ?int $concurrency = null): Generator
    {
        return $this->processPromises((function () use ($fromTos) {
            foreach ($fromTos as $from => $to) {
                $fromArgs = $this->normalizeUrl($from);
                $toArgs   = $this->normalizeUrl($to);
                yield $fromArgs['Key'] => $this->client->copyAsync(
                    $fromArgs['Bucket'],
                    $fromArgs['Key'],
                    $toArgs['Bucket'],
                    $toArgs['Key'],
                    $toArgs['Acl'] ?? '',
                    $toArgs['@options'] ?? [],
                )->then(fn(ResultInterface $result) => array_replace([
                    'Bucket' => $toArgs['Bucket'],
                    'Key'    => $toArgs['Key'],
                ], $result->toArray()['CopyObjectResult']));
            }
        })(), $concurrency, null);
    }

    /**
     * @see \Aws\S3\S3Client::deleteObjects()
     *
     * @psalm-import-type ObjectIdentifier from \Aws\S3\S3Client
     * @psalm-import-type DeletedObject from \Aws\S3\S3Client
     *
     * @param iterable<string|array{
     *     Key?: string,
     *     VersionId?: string,
     *     ETag?: string,
     *     LastModifiedTime?: int|string|\DateTimeInterface,
     *     Size?: int,
     *     "@url": string,
     * }> $urls
     * @return Generator<string, array{
     *     Bucket: string,
     *     Key: string,
     *     VersionId?: string,
     *     DeleteMarker?: bool,
     *     DeleteMarkerVersionId?: string,
     * }>
     */
    public function deleteObjects(iterable $urls, ?int $concurrency = 1000): Generator
    {
        $urls        = is_array($urls) ? new ArrayIterator($urls) : $urls;
        $concurrency ??= $this->defaultConcurrency;

        $count = 0;
        while ($urls->valid()) {
            $buckets = [];
            for ($i = 0; $i < $concurrency && $urls->valid(); $i++) {
                $args                                   = $this->normalizeUrl($urls->current()) + ['Key' => $urls->key()];
                $buckets[$args['Bucket']][$args['Key']] = [
                    'Bucket' => $args['Bucket'],
                    'Key'    => $args['Key'],
                ];
                $urls->next();
            }

            foreach ($buckets as $bucket => $objects) {
                $results = $this->client->deleteObjects([
                    'Bucket' => $bucket,
                    'Delete' => [
                        'Objects' => (array) $objects,
                    ],
                ]);
                foreach ($results['Deleted'] as $object) {
                    $count++;
                    yield $object['Key'] => $objects[$object['Key']] + $object;
                }
            }
        }
        return $count;
    }

    /**
     * @see \Aws\S3\S3Client::getObjectTaggingAsync()
     *
     * @psalm-import-type GetObjectTaggingRequest from \Aws\S3\S3Client
     * @psalm-import-type GetObjectTaggingOutput from \Aws\S3\S3Client
     *
     * @param iterable<string|array{
     *     Bucket?: string,
     *     Key?: string,
     *     VersionId?: string,
     *     ExpectedBucketOwner?: string,
     *     RequestPayer?: "requester",
     *     "@url": string,
     * }> $urls
     * @return Generator<string, array{
     *     Bucket: string,
     *     Key: string,
     *     VersionId?: string,
     *     TagSet: array|list<array{
     *         Key: string,
     *         Value: string,
     *     }>,
     *     Tags: array,
     * }>
     */
    public function getObjectsTagging(iterable $urls, ?int $concurrency = null): Generator
    {
        return $this->processPromises($this->simpleCommand('getObjectTaggingAsync',
            $urls,
            fn($key, $url) => $this->normalizeUrl($url) + ['Key' => $key],
            function ($result, $args) {
                $resultArray         = $result->toArray();
                $resultArray['Tags'] = array_reduce($resultArray['TagSet'], fn($tags, $tag) => array_merge($tags, [$tag['Key'] => $tag['Value']]), []);
                return array_replace([
                    'Bucket' => $args['Bucket'],
                    'Key'    => $args['Key'],
                ], $resultArray);
            },
        ), $concurrency, null);
    }

    /**
     * @see \Aws\S3\S3Client::putObjectTaggingAsync()
     *
     * @psalm-import-type PutObjectTaggingRequest from \Aws\S3\S3Client
     * @psalm-import-type PutObjectTaggingOutput from \Aws\S3\S3Client
     *
     * @param iterable<string|array{
     *     Bucket?: string,
     *     Key?: string,
     *     VersionId?: string,
     *     ContentMD5?: string,
     *     ChecksumAlgorithm?: "CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME",
     *     Tagging: array{
     *         TagSet: array|list<array{
     *             Key: string,
     *             Value: string,
     *         }>,
     *     },
     *     ExpectedBucketOwner?: string,
     *     RequestPayer?: "requester",
     *     ...<string, mixed>,
     * }> $urlTags
     * @return Generator<string, array{
     *     Bucket: string,
     *     Key: string,
     *     VersionId?: string,
     * }>
     */
    public function putObjectsTagging(iterable $urlTags, ?int $concurrency = null): Generator
    {
        return $this->processPromises($this->simpleCommand('putObjectTaggingAsync',
            $urlTags,
            fn($url, $tags) => $this->normalizeUrl($url) + $this->normalizeTags($tags),
        ), $concurrency, null);
    }

    /**
     * @see \Aws\S3\S3Client::deleteObjectTaggingAsync()
     *
     * @psalm-import-type DeleteObjectTaggingRequest from \Aws\S3\S3Client
     * @psalm-import-type DeleteObjectTaggingOutput from \Aws\S3\S3Client
     *
     * @param iterable<string|array{
     *     Bucket?: string,
     *     Key?: string,
     *     VersionId?: string,
     *     ExpectedBucketOwner?: string,
     *     "@url": string,
     * }> $urls
     * @return Generator<string, array{
     *     Bucket: string,
     *     Key: string,
     *     VersionId?: string,
     * }>
     */
    public function deleteObjectsTagging(iterable $urls, ?int $concurrency = null): Generator
    {
        return $this->processPromises($this->simpleCommand('deleteObjectTaggingAsync',
            $urls,
            fn($key, $url) => $this->normalizeUrl($url) + ['Key' => $key],
        ), $concurrency, null);
    }

    private function normalizeUrl(string|array $url): array
    {
        if (is_array($url)) {
            if (isset($url['@url'])) {
                $url += $this->normalizeUrl($url['@url']);
                unset($url['@url']);
            }
            $url['Bucket'] ??= $this->defaultBucket;
            return $url;
        }

        $bucket = $this->defaultBucket;
        $region = null;

        $parts = parse_url($url);
        if (isset($parts['host'])) {
            [$bucket, $region] = explode('.', $parts['host']) + [1 => null];
        }

        return array_filter([
            '@region' => $region,
            'Bucket'  => $bucket,
            'Key'     => ltrim($parts['path'] ?? '', '/'),
        ], fn($v) => $v !== null);
    }

    private function normalizeValue(mixed $value): array
    {
        if ($value instanceof Closure) {
            $value = $value();
        }

        if (is_array($value)) {
            return $value;
        }

        return ['Body' => $value];
    }

    private function normalizeTags(string|array $tags): array
    {
        if (is_array($tags) && isset($tags['Tagging']['TagSet']) && is_array($tags['Tagging']['TagSet'])) {
            return $tags;
        }

        if (is_string($tags)) {
            $result = [];
            parse_str($tags, $result);
            $tags = $result;
        }

        $tagset = [];
        foreach ($tags as $k => $v) {
            if (is_array($v)) {
                $tagset[] = $v;
            }
            else {
                $tagset[] = ['Key' => $k, 'Value' => $v];
            }
        }

        return ['Tagging' => ['TagSet' => $tagset]];
    }

    private function simpleCommand(string $command, iterable $urls, callable $argumentor, ?callable $resulter = null, ?callable $reasoner = null): Generator
    {
        $resulter ??= fn($result, $args) => array_replace([
            'Bucket' => $args['Bucket'],
            'Key'    => $args['Key'],
        ], $result->toArray());
        $reasoner ??= fn($reason, $args) => throw $reason;

        foreach ($urls as $key => $url) {
            $args = $argumentor($key, $url);
            yield $args['Key'] => $this->client->$command($args)->then(fn($result) => $resulter($result, $args), fn($reason) => $reasoner($reason, $args));
        }
    }

    private function processPromises(iterable $promises, ?int $concurrency, ?bool $throwsException): Generator
    {
        $concurrency     ??= $this->defaultConcurrency;
        $throwsException ??= $this->throwsException;

        $fiber = new Fiber(function () use ($promises, $concurrency, $throwsException) {
            Each::ofLimit(
                $promises,
                $concurrency,
                fn($result, $idx) => Fiber::suspend([$result, $idx]),
                fn($reason, $idx) => $throwsException ? throw $reason : Fiber::suspend([$reason, $idx]),
            )->wait();
        });

        $count = 0;
        for ([$result, $idx] = $fiber->start(); !$fiber->isTerminated(); [$result, $idx] = $fiber->resume()) {
            $count++;
            yield $idx => $result;
        }
        return $count;
    }
}
