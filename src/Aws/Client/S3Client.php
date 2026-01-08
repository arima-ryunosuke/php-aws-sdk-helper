<?php
namespace AWS\S3;

class S3Client
{
    /**
     * @param array{Bucket:string, Key:string, UploadId:string, RequestPayer?:"requester", ExpectedBucketOwner?:string, IfMatchInitiatedTime?:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{RequestCharged?:"requester"}>
     */
    public function abortMultipartUpload(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, Key:string, UploadId:string, RequestPayer?:"requester", ExpectedBucketOwner?:string, IfMatchInitiatedTime?:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{RequestCharged?:"requester"}>
     */
    public function abortMultipartUploadAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, Key:string, MultipartUpload?:array{Parts?:array<array{ETag?:string, ChecksumCRC32?:string, ChecksumCRC32C?:string, ChecksumCRC64NVME?:string, ChecksumSHA1?:string, ChecksumSHA256?:string, PartNumber?:int}>}, UploadId:string, ChecksumCRC32?:string, ChecksumCRC32C?:string, ChecksumCRC64NVME?:string, ChecksumSHA1?:string, ChecksumSHA256?:string, ChecksumType?:"COMPOSITE"|"FULL_OBJECT", MpuObjectSize?:int, RequestPayer?:"requester", ExpectedBucketOwner?:string, IfMatch?:string, IfNoneMatch?:string, SSECustomerAlgorithm?:string, SSECustomerKey?:string, SSECustomerKeyMD5?:string} $args
     * @return \AWS\Result<array{Location?:string, Bucket?:string, Key?:string, Expiration?:string, ETag?:string, ChecksumCRC32?:string, ChecksumCRC32C?:string, ChecksumCRC64NVME?:string, ChecksumSHA1?:string, ChecksumSHA256?:string, ChecksumType?:"COMPOSITE"|"FULL_OBJECT", ServerSideEncryption?:"AES256"|"aws:kms"|"aws:kms:dsse", VersionId?:string, SSEKMSKeyId?:string, BucketKeyEnabled?:bool, RequestCharged?:"requester"}>
     */
    public function completeMultipartUpload(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, Key:string, MultipartUpload?:array{Parts?:array<array{ETag?:string, ChecksumCRC32?:string, ChecksumCRC32C?:string, ChecksumCRC64NVME?:string, ChecksumSHA1?:string, ChecksumSHA256?:string, PartNumber?:int}>}, UploadId:string, ChecksumCRC32?:string, ChecksumCRC32C?:string, ChecksumCRC64NVME?:string, ChecksumSHA1?:string, ChecksumSHA256?:string, ChecksumType?:"COMPOSITE"|"FULL_OBJECT", MpuObjectSize?:int, RequestPayer?:"requester", ExpectedBucketOwner?:string, IfMatch?:string, IfNoneMatch?:string, SSECustomerAlgorithm?:string, SSECustomerKey?:string, SSECustomerKeyMD5?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Location?:string, Bucket?:string, Key?:string, Expiration?:string, ETag?:string, ChecksumCRC32?:string, ChecksumCRC32C?:string, ChecksumCRC64NVME?:string, ChecksumSHA1?:string, ChecksumSHA256?:string, ChecksumType?:"COMPOSITE"|"FULL_OBJECT", ServerSideEncryption?:"AES256"|"aws:kms"|"aws:kms:dsse", VersionId?:string, SSEKMSKeyId?:string, BucketKeyEnabled?:bool, RequestCharged?:"requester"}>
     */
    public function completeMultipartUploadAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ACL?:"private"|"public-read"|"public-read-write"|"authenticated-read"|"aws-exec-read"|"bucket-owner-read"|"bucket-owner-full-control", Bucket:string, CacheControl?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", ContentDisposition?:string, ContentEncoding?:string, ContentLanguage?:string, ContentType?:string, CopySource:string, CopySourceIfMatch?:string, CopySourceIfModifiedSince?:int|string|\DateTimeInterface, CopySourceIfNoneMatch?:string, CopySourceIfUnmodifiedSince?:int|string|\DateTimeInterface, Expires?:int|string|\DateTimeInterface, GrantFullControl?:string, GrantRead?:string, GrantReadACP?:string, GrantWriteACP?:string, Key:string, Metadata?:array<string, string>, MetadataDirective?:"COPY"|"REPLACE", TaggingDirective?:"COPY"|"REPLACE", ServerSideEncryption?:"AES256"|"aws:kms"|"aws:kms:dsse", StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"|"SNOW"|"EXPRESS_ONEZONE", WebsiteRedirectLocation?:string, SSECustomerAlgorithm?:string, SSECustomerKey?:string, SSECustomerKeyMD5?:string, SSEKMSKeyId?:string, SSEKMSEncryptionContext?:string, BucketKeyEnabled?:bool, CopySourceSSECustomerAlgorithm?:string, CopySourceSSECustomerKey?:string, CopySourceSSECustomerKeyMD5?:string, RequestPayer?:"requester", Tagging?:string, ObjectLockMode?:"GOVERNANCE"|"COMPLIANCE", ObjectLockRetainUntilDate?:int|string|\DateTimeInterface, ObjectLockLegalHoldStatus?:"ON"|"OFF", ExpectedBucketOwner?:string, ExpectedSourceBucketOwner?:string} $args
     * @return \AWS\Result<array{CopyObjectResult?:array{ETag?:string, LastModified?:int|string|\DateTimeInterface, ChecksumType?:"COMPOSITE"|"FULL_OBJECT", ChecksumCRC32?:string, ChecksumCRC32C?:string, ChecksumCRC64NVME?:string, ChecksumSHA1?:string, ChecksumSHA256?:string}, Expiration?:string, CopySourceVersionId?:string, VersionId?:string, ServerSideEncryption?:"AES256"|"aws:kms"|"aws:kms:dsse", SSECustomerAlgorithm?:string, SSECustomerKeyMD5?:string, SSEKMSKeyId?:string, SSEKMSEncryptionContext?:string, BucketKeyEnabled?:bool, RequestCharged?:"requester"}>
     */
    public function copyObject(array $args): \AWS\Result { }

    /**
     * @param array{ACL?:"private"|"public-read"|"public-read-write"|"authenticated-read"|"aws-exec-read"|"bucket-owner-read"|"bucket-owner-full-control", Bucket:string, CacheControl?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", ContentDisposition?:string, ContentEncoding?:string, ContentLanguage?:string, ContentType?:string, CopySource:string, CopySourceIfMatch?:string, CopySourceIfModifiedSince?:int|string|\DateTimeInterface, CopySourceIfNoneMatch?:string, CopySourceIfUnmodifiedSince?:int|string|\DateTimeInterface, Expires?:int|string|\DateTimeInterface, GrantFullControl?:string, GrantRead?:string, GrantReadACP?:string, GrantWriteACP?:string, Key:string, Metadata?:array<string, string>, MetadataDirective?:"COPY"|"REPLACE", TaggingDirective?:"COPY"|"REPLACE", ServerSideEncryption?:"AES256"|"aws:kms"|"aws:kms:dsse", StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"|"SNOW"|"EXPRESS_ONEZONE", WebsiteRedirectLocation?:string, SSECustomerAlgorithm?:string, SSECustomerKey?:string, SSECustomerKeyMD5?:string, SSEKMSKeyId?:string, SSEKMSEncryptionContext?:string, BucketKeyEnabled?:bool, CopySourceSSECustomerAlgorithm?:string, CopySourceSSECustomerKey?:string, CopySourceSSECustomerKeyMD5?:string, RequestPayer?:"requester", Tagging?:string, ObjectLockMode?:"GOVERNANCE"|"COMPLIANCE", ObjectLockRetainUntilDate?:int|string|\DateTimeInterface, ObjectLockLegalHoldStatus?:"ON"|"OFF", ExpectedBucketOwner?:string, ExpectedSourceBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CopyObjectResult?:array{ETag?:string, LastModified?:int|string|\DateTimeInterface, ChecksumType?:"COMPOSITE"|"FULL_OBJECT", ChecksumCRC32?:string, ChecksumCRC32C?:string, ChecksumCRC64NVME?:string, ChecksumSHA1?:string, ChecksumSHA256?:string}, Expiration?:string, CopySourceVersionId?:string, VersionId?:string, ServerSideEncryption?:"AES256"|"aws:kms"|"aws:kms:dsse", SSECustomerAlgorithm?:string, SSECustomerKeyMD5?:string, SSEKMSKeyId?:string, SSEKMSEncryptionContext?:string, BucketKeyEnabled?:bool, RequestCharged?:"requester"}>
     */
    public function copyObjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ACL?:"private"|"public-read"|"public-read-write"|"authenticated-read", Bucket:string, CreateBucketConfiguration?:array{LocationConstraint?:"af-south-1"|"ap-east-1"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"ap-south-1"|"ap-south-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ca-central-1"|"cn-north-1"|"cn-northwest-1"|"EU"|"eu-central-1"|"eu-north-1"|"eu-south-1"|"eu-south-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"me-south-1"|"sa-east-1"|"us-east-2"|"us-gov-east-1"|"us-gov-west-1"|"us-west-1"|"us-west-2", Location?:array{Type?:"AvailabilityZone"|"LocalZone", Name?:string}, Bucket?:array{DataRedundancy?:"SingleAvailabilityZone"|"SingleLocalZone", Type?:"Directory"}}, GrantFullControl?:string, GrantRead?:string, GrantReadACP?:string, GrantWrite?:string, GrantWriteACP?:string, ObjectLockEnabledForBucket?:bool, ObjectOwnership?:"BucketOwnerPreferred"|"ObjectWriter"|"BucketOwnerEnforced"} $args
     * @return \AWS\Result<array{Location?:string}>
     */
    public function createBucket(array $args): \AWS\Result { }

    /**
     * @param array{ACL?:"private"|"public-read"|"public-read-write"|"authenticated-read", Bucket:string, CreateBucketConfiguration?:array{LocationConstraint?:"af-south-1"|"ap-east-1"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"ap-south-1"|"ap-south-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ca-central-1"|"cn-north-1"|"cn-northwest-1"|"EU"|"eu-central-1"|"eu-north-1"|"eu-south-1"|"eu-south-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"me-south-1"|"sa-east-1"|"us-east-2"|"us-gov-east-1"|"us-gov-west-1"|"us-west-1"|"us-west-2", Location?:array{Type?:"AvailabilityZone"|"LocalZone", Name?:string}, Bucket?:array{DataRedundancy?:"SingleAvailabilityZone"|"SingleLocalZone", Type?:"Directory"}}, GrantFullControl?:string, GrantRead?:string, GrantReadACP?:string, GrantWrite?:string, GrantWriteACP?:string, ObjectLockEnabledForBucket?:bool, ObjectOwnership?:"BucketOwnerPreferred"|"ObjectWriter"|"BucketOwnerEnforced"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Location?:string}>
     */
    public function createBucketAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", MetadataTableConfiguration:array{S3TablesDestination:array{TableBucketArn:string, TableName:string}}, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<void>
     */
    public function createBucketMetadataTableConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", MetadataTableConfiguration:array{S3TablesDestination:array{TableBucketArn:string, TableName:string}}, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function createBucketMetadataTableConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ACL?:"private"|"public-read"|"public-read-write"|"authenticated-read"|"aws-exec-read"|"bucket-owner-read"|"bucket-owner-full-control", Bucket:string, CacheControl?:string, ContentDisposition?:string, ContentEncoding?:string, ContentLanguage?:string, ContentType?:string, Expires?:int|string|\DateTimeInterface, GrantFullControl?:string, GrantRead?:string, GrantReadACP?:string, GrantWriteACP?:string, Key:string, Metadata?:array<string, string>, ServerSideEncryption?:"AES256"|"aws:kms"|"aws:kms:dsse", StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"|"SNOW"|"EXPRESS_ONEZONE", WebsiteRedirectLocation?:string, SSECustomerAlgorithm?:string, SSECustomerKey?:string, SSECustomerKeyMD5?:string, SSEKMSKeyId?:string, SSEKMSEncryptionContext?:string, BucketKeyEnabled?:bool, RequestPayer?:"requester", Tagging?:string, ObjectLockMode?:"GOVERNANCE"|"COMPLIANCE", ObjectLockRetainUntilDate?:int|string|\DateTimeInterface, ObjectLockLegalHoldStatus?:"ON"|"OFF", ExpectedBucketOwner?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", ChecksumType?:"COMPOSITE"|"FULL_OBJECT"} $args
     * @return \AWS\Result<array{AbortDate?:int|string|\DateTimeInterface, AbortRuleId?:string, Bucket?:string, Key?:string, UploadId?:string, ServerSideEncryption?:"AES256"|"aws:kms"|"aws:kms:dsse", SSECustomerAlgorithm?:string, SSECustomerKeyMD5?:string, SSEKMSKeyId?:string, SSEKMSEncryptionContext?:string, BucketKeyEnabled?:bool, RequestCharged?:"requester", ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", ChecksumType?:"COMPOSITE"|"FULL_OBJECT"}>
     */
    public function createMultipartUpload(array $args): \AWS\Result { }

    /**
     * @param array{ACL?:"private"|"public-read"|"public-read-write"|"authenticated-read"|"aws-exec-read"|"bucket-owner-read"|"bucket-owner-full-control", Bucket:string, CacheControl?:string, ContentDisposition?:string, ContentEncoding?:string, ContentLanguage?:string, ContentType?:string, Expires?:int|string|\DateTimeInterface, GrantFullControl?:string, GrantRead?:string, GrantReadACP?:string, GrantWriteACP?:string, Key:string, Metadata?:array<string, string>, ServerSideEncryption?:"AES256"|"aws:kms"|"aws:kms:dsse", StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"|"SNOW"|"EXPRESS_ONEZONE", WebsiteRedirectLocation?:string, SSECustomerAlgorithm?:string, SSECustomerKey?:string, SSECustomerKeyMD5?:string, SSEKMSKeyId?:string, SSEKMSEncryptionContext?:string, BucketKeyEnabled?:bool, RequestPayer?:"requester", Tagging?:string, ObjectLockMode?:"GOVERNANCE"|"COMPLIANCE", ObjectLockRetainUntilDate?:int|string|\DateTimeInterface, ObjectLockLegalHoldStatus?:"ON"|"OFF", ExpectedBucketOwner?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", ChecksumType?:"COMPOSITE"|"FULL_OBJECT"} $args
     * @return \GuzzleHttp\Promise\Promise<array{AbortDate?:int|string|\DateTimeInterface, AbortRuleId?:string, Bucket?:string, Key?:string, UploadId?:string, ServerSideEncryption?:"AES256"|"aws:kms"|"aws:kms:dsse", SSECustomerAlgorithm?:string, SSECustomerKeyMD5?:string, SSEKMSKeyId?:string, SSEKMSEncryptionContext?:string, BucketKeyEnabled?:bool, RequestCharged?:"requester", ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", ChecksumType?:"COMPOSITE"|"FULL_OBJECT"}>
     */
    public function createMultipartUploadAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SessionMode?:"ReadOnly"|"ReadWrite", Bucket:string, ServerSideEncryption?:"AES256"|"aws:kms"|"aws:kms:dsse", SSEKMSKeyId?:string, SSEKMSEncryptionContext?:string, BucketKeyEnabled?:bool} $args
     * @return \AWS\Result<array{ServerSideEncryption?:"AES256"|"aws:kms"|"aws:kms:dsse", SSEKMSKeyId?:string, SSEKMSEncryptionContext?:string, BucketKeyEnabled?:bool, Credentials:array{AccessKeyId:string, SecretAccessKey:string, SessionToken:string, Expiration:int|string|\DateTimeInterface}}>
     */
    public function createSession(array $args): \AWS\Result { }

    /**
     * @param array{SessionMode?:"ReadOnly"|"ReadWrite", Bucket:string, ServerSideEncryption?:"AES256"|"aws:kms"|"aws:kms:dsse", SSEKMSKeyId?:string, SSEKMSEncryptionContext?:string, BucketKeyEnabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServerSideEncryption?:"AES256"|"aws:kms"|"aws:kms:dsse", SSEKMSKeyId?:string, SSEKMSEncryptionContext?:string, BucketKeyEnabled?:bool, Credentials:array{AccessKeyId:string, SecretAccessKey:string, SessionToken:string, Expiration:int|string|\DateTimeInterface}}>
     */
    public function createSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteBucket(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteBucketAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, Id:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteBucketAnalyticsConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, Id:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteBucketAnalyticsConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteBucketCors(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteBucketCorsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteBucketEncryption(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteBucketEncryptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, Id:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteBucketIntelligentTieringConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteBucketIntelligentTieringConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, Id:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteBucketInventoryConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, Id:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteBucketInventoryConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteBucketLifecycle(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteBucketLifecycleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteBucketMetadataTableConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteBucketMetadataTableConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, Id:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteBucketMetricsConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, Id:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteBucketMetricsConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteBucketOwnershipControls(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteBucketOwnershipControlsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteBucketPolicy(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteBucketPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteBucketReplication(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteBucketReplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteBucketTagging(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteBucketTaggingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteBucketWebsite(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteBucketWebsiteAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, Key:string, MFA?:string, VersionId?:string, RequestPayer?:"requester", BypassGovernanceRetention?:bool, ExpectedBucketOwner?:string, IfMatch?:string, IfMatchLastModifiedTime?:int|string|\DateTimeInterface, IfMatchSize?:int} $args
     * @return \AWS\Result<array{DeleteMarker?:bool, VersionId?:string, RequestCharged?:"requester"}>
     */
    public function deleteObject(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, Key:string, MFA?:string, VersionId?:string, RequestPayer?:"requester", BypassGovernanceRetention?:bool, ExpectedBucketOwner?:string, IfMatch?:string, IfMatchLastModifiedTime?:int|string|\DateTimeInterface, IfMatchSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{DeleteMarker?:bool, VersionId?:string, RequestCharged?:"requester"}>
     */
    public function deleteObjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, Key:string, VersionId?:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{VersionId?:string}>
     */
    public function deleteObjectTagging(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, Key:string, VersionId?:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VersionId?:string}>
     */
    public function deleteObjectTaggingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, Delete:array{Objects:array<array{Key:string, VersionId?:string, ETag?:string, LastModifiedTime?:int|string|\DateTimeInterface, Size?:int}>, Quiet?:bool}, MFA?:string, RequestPayer?:"requester", BypassGovernanceRetention?:bool, ExpectedBucketOwner?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME"} $args
     * @return \AWS\Result<array{Deleted?:array<array{Key?:string, VersionId?:string, DeleteMarker?:bool, DeleteMarkerVersionId?:string}>, RequestCharged?:"requester", Errors?:array<array{Key?:string, VersionId?:string, Code?:string, Message?:string}>}>
     */
    public function deleteObjects(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, Delete:array{Objects:array<array{Key:string, VersionId?:string, ETag?:string, LastModifiedTime?:int|string|\DateTimeInterface, Size?:int}>, Quiet?:bool}, MFA?:string, RequestPayer?:"requester", BypassGovernanceRetention?:bool, ExpectedBucketOwner?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Deleted?:array<array{Key?:string, VersionId?:string, DeleteMarker?:bool, DeleteMarkerVersionId?:string}>, RequestCharged?:"requester", Errors?:array<array{Key?:string, VersionId?:string, Code?:string, Message?:string}>}>
     */
    public function deleteObjectsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<void>
     */
    public function deletePublicAccessBlock(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deletePublicAccessBlockAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string, RequestPayer?:"requester"} $args
     * @return \AWS\Result<array{Status?:"Enabled"|"Suspended", RequestCharged?:"requester"}>
     */
    public function getBucketAccelerateConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string, RequestPayer?:"requester"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status?:"Enabled"|"Suspended", RequestCharged?:"requester"}>
     */
    public function getBucketAccelerateConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{Owner?:array{DisplayName?:string, ID?:string}, Grants?:array<array{Grantee?:array{DisplayName?:string, EmailAddress?:string, ID?:string, Type:"CanonicalUser"|"AmazonCustomerByEmail"|"Group", URI?:string}, Permission?:"FULL_CONTROL"|"WRITE"|"WRITE_ACP"|"READ"|"READ_ACP"}>}>
     */
    public function getBucketAcl(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Owner?:array{DisplayName?:string, ID?:string}, Grants?:array<array{Grantee?:array{DisplayName?:string, EmailAddress?:string, ID?:string, Type:"CanonicalUser"|"AmazonCustomerByEmail"|"Group", URI?:string}, Permission?:"FULL_CONTROL"|"WRITE"|"WRITE_ACP"|"READ"|"READ_ACP"}>}>
     */
    public function getBucketAclAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, Id:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{AnalyticsConfiguration?:array{Id:string, Filter?:array{Prefix?:string, Tag?:array{Key:string, Value:string}, And?:array{Prefix?:string, Tags?:array<array{Key:string, Value:string}>}}, StorageClassAnalysis:array{DataExport?:array{OutputSchemaVersion:"V_1", Destination:array{S3BucketDestination:array{Format:"CSV", BucketAccountId?:string, Bucket:string, Prefix?:string}}}}}}>
     */
    public function getBucketAnalyticsConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, Id:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AnalyticsConfiguration?:array{Id:string, Filter?:array{Prefix?:string, Tag?:array{Key:string, Value:string}, And?:array{Prefix?:string, Tags?:array<array{Key:string, Value:string}>}}, StorageClassAnalysis:array{DataExport?:array{OutputSchemaVersion:"V_1", Destination:array{S3BucketDestination:array{Format:"CSV", BucketAccountId?:string, Bucket:string, Prefix?:string}}}}}}>
     */
    public function getBucketAnalyticsConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{CORSRules?:array<array{ID?:string, AllowedHeaders?:array<string>, AllowedMethods:array<string>, AllowedOrigins:array<string>, ExposeHeaders?:array<string>, MaxAgeSeconds?:int}>}>
     */
    public function getBucketCors(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CORSRules?:array<array{ID?:string, AllowedHeaders?:array<string>, AllowedMethods:array<string>, AllowedOrigins:array<string>, ExposeHeaders?:array<string>, MaxAgeSeconds?:int}>}>
     */
    public function getBucketCorsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{ServerSideEncryptionConfiguration?:array{Rules:array<array{ApplyServerSideEncryptionByDefault?:array{SSEAlgorithm:"AES256"|"aws:kms"|"aws:kms:dsse", KMSMasterKeyID?:string}, BucketKeyEnabled?:bool}>}}>
     */
    public function getBucketEncryption(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServerSideEncryptionConfiguration?:array{Rules:array<array{ApplyServerSideEncryptionByDefault?:array{SSEAlgorithm:"AES256"|"aws:kms"|"aws:kms:dsse", KMSMasterKeyID?:string}, BucketKeyEnabled?:bool}>}}>
     */
    public function getBucketEncryptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, Id:string} $args
     * @return \AWS\Result<array{IntelligentTieringConfiguration?:array{Id:string, Filter?:array{Prefix?:string, Tag?:array{Key:string, Value:string}, And?:array{Prefix?:string, Tags?:array<array{Key:string, Value:string}>}}, Status:"Enabled"|"Disabled", Tierings:array<array{Days:int, AccessTier:"ARCHIVE_ACCESS"|"DEEP_ARCHIVE_ACCESS"}>}}>
     */
    public function getBucketIntelligentTieringConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IntelligentTieringConfiguration?:array{Id:string, Filter?:array{Prefix?:string, Tag?:array{Key:string, Value:string}, And?:array{Prefix?:string, Tags?:array<array{Key:string, Value:string}>}}, Status:"Enabled"|"Disabled", Tierings:array<array{Days:int, AccessTier:"ARCHIVE_ACCESS"|"DEEP_ARCHIVE_ACCESS"}>}}>
     */
    public function getBucketIntelligentTieringConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, Id:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{InventoryConfiguration?:array{Destination:array{S3BucketDestination:array{AccountId?:string, Bucket:string, Format:"CSV"|"ORC"|"Parquet", Prefix?:string, Encryption?:array{SSES3?:array{}, SSEKMS?:array{KeyId:string}}}}, IsEnabled:bool, Filter?:array{Prefix:string}, Id:string, IncludedObjectVersions:"All"|"Current", OptionalFields?:array<"Size"|"LastModifiedDate"|"StorageClass"|"ETag"|"IsMultipartUploaded"|"ReplicationStatus"|"EncryptionStatus"|"ObjectLockRetainUntilDate"|"ObjectLockMode"|"ObjectLockLegalHoldStatus"|"IntelligentTieringAccessTier"|"BucketKeyStatus"|"ChecksumAlgorithm"|"ObjectAccessControlList"|"ObjectOwner">, Schedule:array{Frequency:"Daily"|"Weekly"}}}>
     */
    public function getBucketInventoryConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, Id:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{InventoryConfiguration?:array{Destination:array{S3BucketDestination:array{AccountId?:string, Bucket:string, Format:"CSV"|"ORC"|"Parquet", Prefix?:string, Encryption?:array{SSES3?:array{}, SSEKMS?:array{KeyId:string}}}}, IsEnabled:bool, Filter?:array{Prefix:string}, Id:string, IncludedObjectVersions:"All"|"Current", OptionalFields?:array<"Size"|"LastModifiedDate"|"StorageClass"|"ETag"|"IsMultipartUploaded"|"ReplicationStatus"|"EncryptionStatus"|"ObjectLockRetainUntilDate"|"ObjectLockMode"|"ObjectLockLegalHoldStatus"|"IntelligentTieringAccessTier"|"BucketKeyStatus"|"ChecksumAlgorithm"|"ObjectAccessControlList"|"ObjectOwner">, Schedule:array{Frequency:"Daily"|"Weekly"}}}>
     */
    public function getBucketInventoryConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{Rules?:array<array{Expiration?:array{Date?:int|string|\DateTimeInterface, Days?:int, ExpiredObjectDeleteMarker?:bool}, ID?:string, Prefix:string, Status:"Enabled"|"Disabled", Transition?:array{Date?:int|string|\DateTimeInterface, Days?:int, StorageClass?:"GLACIER"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"|"GLACIER_IR"}, NoncurrentVersionTransition?:array{NoncurrentDays?:int, StorageClass?:"GLACIER"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"|"GLACIER_IR", NewerNoncurrentVersions?:int}, NoncurrentVersionExpiration?:array{NoncurrentDays?:int, NewerNoncurrentVersions?:int}, AbortIncompleteMultipartUpload?:array{DaysAfterInitiation?:int}}>}>
     */
    public function getBucketLifecycle(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Rules?:array<array{Expiration?:array{Date?:int|string|\DateTimeInterface, Days?:int, ExpiredObjectDeleteMarker?:bool}, ID?:string, Prefix:string, Status:"Enabled"|"Disabled", Transition?:array{Date?:int|string|\DateTimeInterface, Days?:int, StorageClass?:"GLACIER"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"|"GLACIER_IR"}, NoncurrentVersionTransition?:array{NoncurrentDays?:int, StorageClass?:"GLACIER"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"|"GLACIER_IR", NewerNoncurrentVersions?:int}, NoncurrentVersionExpiration?:array{NoncurrentDays?:int, NewerNoncurrentVersions?:int}, AbortIncompleteMultipartUpload?:array{DaysAfterInitiation?:int}}>}>
     */
    public function getBucketLifecycleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{Rules?:array<array{Expiration?:array{Date?:int|string|\DateTimeInterface, Days?:int, ExpiredObjectDeleteMarker?:bool}, ID?:string, Prefix?:string, Filter?:array{Prefix?:string, Tag?:array{Key:string, Value:string}, ObjectSizeGreaterThan?:int, ObjectSizeLessThan?:int, And?:array{Prefix?:string, Tags?:array<array{Key:string, Value:string}>, ObjectSizeGreaterThan?:int, ObjectSizeLessThan?:int}}, Status:"Enabled"|"Disabled", Transitions?:array<array{Date?:int|string|\DateTimeInterface, Days?:int, StorageClass?:"GLACIER"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"|"GLACIER_IR"}>, NoncurrentVersionTransitions?:array<array{NoncurrentDays?:int, StorageClass?:"GLACIER"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"|"GLACIER_IR", NewerNoncurrentVersions?:int}>, NoncurrentVersionExpiration?:array{NoncurrentDays?:int, NewerNoncurrentVersions?:int}, AbortIncompleteMultipartUpload?:array{DaysAfterInitiation?:int}}>, TransitionDefaultMinimumObjectSize?:"varies_by_storage_class"|"all_storage_classes_128K"}>
     */
    public function getBucketLifecycleConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Rules?:array<array{Expiration?:array{Date?:int|string|\DateTimeInterface, Days?:int, ExpiredObjectDeleteMarker?:bool}, ID?:string, Prefix?:string, Filter?:array{Prefix?:string, Tag?:array{Key:string, Value:string}, ObjectSizeGreaterThan?:int, ObjectSizeLessThan?:int, And?:array{Prefix?:string, Tags?:array<array{Key:string, Value:string}>, ObjectSizeGreaterThan?:int, ObjectSizeLessThan?:int}}, Status:"Enabled"|"Disabled", Transitions?:array<array{Date?:int|string|\DateTimeInterface, Days?:int, StorageClass?:"GLACIER"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"|"GLACIER_IR"}>, NoncurrentVersionTransitions?:array<array{NoncurrentDays?:int, StorageClass?:"GLACIER"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"|"GLACIER_IR", NewerNoncurrentVersions?:int}>, NoncurrentVersionExpiration?:array{NoncurrentDays?:int, NewerNoncurrentVersions?:int}, AbortIncompleteMultipartUpload?:array{DaysAfterInitiation?:int}}>, TransitionDefaultMinimumObjectSize?:"varies_by_storage_class"|"all_storage_classes_128K"}>
     */
    public function getBucketLifecycleConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{LocationConstraint?:"af-south-1"|"ap-east-1"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"ap-south-1"|"ap-south-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ca-central-1"|"cn-north-1"|"cn-northwest-1"|"EU"|"eu-central-1"|"eu-north-1"|"eu-south-1"|"eu-south-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"me-south-1"|"sa-east-1"|"us-east-2"|"us-gov-east-1"|"us-gov-west-1"|"us-west-1"|"us-west-2"}>
     */
    public function getBucketLocation(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LocationConstraint?:"af-south-1"|"ap-east-1"|"ap-northeast-1"|"ap-northeast-2"|"ap-northeast-3"|"ap-south-1"|"ap-south-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-southeast-3"|"ca-central-1"|"cn-north-1"|"cn-northwest-1"|"EU"|"eu-central-1"|"eu-north-1"|"eu-south-1"|"eu-south-2"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"me-south-1"|"sa-east-1"|"us-east-2"|"us-gov-east-1"|"us-gov-west-1"|"us-west-1"|"us-west-2"}>
     */
    public function getBucketLocationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{LoggingEnabled?:array{TargetBucket:string, TargetGrants?:array<array{Grantee?:array{DisplayName?:string, EmailAddress?:string, ID?:string, Type:"CanonicalUser"|"AmazonCustomerByEmail"|"Group", URI?:string}, Permission?:"FULL_CONTROL"|"READ"|"WRITE"}>, TargetPrefix:string, TargetObjectKeyFormat?:array{SimplePrefix?:array{}, PartitionedPrefix?:array{PartitionDateSource?:"EventTime"|"DeliveryTime"}}}}>
     */
    public function getBucketLogging(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LoggingEnabled?:array{TargetBucket:string, TargetGrants?:array<array{Grantee?:array{DisplayName?:string, EmailAddress?:string, ID?:string, Type:"CanonicalUser"|"AmazonCustomerByEmail"|"Group", URI?:string}, Permission?:"FULL_CONTROL"|"READ"|"WRITE"}>, TargetPrefix:string, TargetObjectKeyFormat?:array{SimplePrefix?:array{}, PartitionedPrefix?:array{PartitionDateSource?:"EventTime"|"DeliveryTime"}}}}>
     */
    public function getBucketLoggingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{GetBucketMetadataTableConfigurationResult?:array{MetadataTableConfigurationResult:array{S3TablesDestinationResult:array{TableBucketArn:string, TableName:string, TableArn:string, TableNamespace:string}}, Status:string, Error?:array{ErrorCode?:string, ErrorMessage?:string}}}>
     */
    public function getBucketMetadataTableConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GetBucketMetadataTableConfigurationResult?:array{MetadataTableConfigurationResult:array{S3TablesDestinationResult:array{TableBucketArn:string, TableName:string, TableArn:string, TableNamespace:string}}, Status:string, Error?:array{ErrorCode?:string, ErrorMessage?:string}}}>
     */
    public function getBucketMetadataTableConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, Id:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{MetricsConfiguration?:array{Id:string, Filter?:array{Prefix?:string, Tag?:array{Key:string, Value:string}, AccessPointArn?:string, And?:array{Prefix?:string, Tags?:array<array{Key:string, Value:string}>, AccessPointArn?:string}}}}>
     */
    public function getBucketMetricsConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, Id:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MetricsConfiguration?:array{Id:string, Filter?:array{Prefix?:string, Tag?:array{Key:string, Value:string}, AccessPointArn?:string, And?:array{Prefix?:string, Tags?:array<array{Key:string, Value:string}>, AccessPointArn?:string}}}}>
     */
    public function getBucketMetricsConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{TopicConfiguration?:array{Id?:string, Events?:array<"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete">, Event?:"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete", Topic?:string}, QueueConfiguration?:array{Id?:string, Event?:"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete", Events?:array<"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete">, Queue?:string}, CloudFunctionConfiguration?:array{Id?:string, Event?:"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete", Events?:array<"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete">, CloudFunction?:string, InvocationRole?:string}}>
     */
    public function getBucketNotification(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TopicConfiguration?:array{Id?:string, Events?:array<"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete">, Event?:"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete", Topic?:string}, QueueConfiguration?:array{Id?:string, Event?:"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete", Events?:array<"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete">, Queue?:string}, CloudFunctionConfiguration?:array{Id?:string, Event?:"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete", Events?:array<"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete">, CloudFunction?:string, InvocationRole?:string}}>
     */
    public function getBucketNotificationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{TopicConfigurations?:array<array{Id?:string, TopicArn:string, Events:array<"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete">, Filter?:array{Key?:array{FilterRules?:array<array{Name?:"prefix"|"suffix", Value?:string}>}}}>, QueueConfigurations?:array<array{Id?:string, QueueArn:string, Events:array<"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete">, Filter?:array{Key?:array{FilterRules?:array<array{Name?:"prefix"|"suffix", Value?:string}>}}}>, LambdaFunctionConfigurations?:array<array{Id?:string, LambdaFunctionArn:string, Events:array<"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete">, Filter?:array{Key?:array{FilterRules?:array<array{Name?:"prefix"|"suffix", Value?:string}>}}}>, EventBridgeConfiguration?:array{}}>
     */
    public function getBucketNotificationConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TopicConfigurations?:array<array{Id?:string, TopicArn:string, Events:array<"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete">, Filter?:array{Key?:array{FilterRules?:array<array{Name?:"prefix"|"suffix", Value?:string}>}}}>, QueueConfigurations?:array<array{Id?:string, QueueArn:string, Events:array<"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete">, Filter?:array{Key?:array{FilterRules?:array<array{Name?:"prefix"|"suffix", Value?:string}>}}}>, LambdaFunctionConfigurations?:array<array{Id?:string, LambdaFunctionArn:string, Events:array<"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete">, Filter?:array{Key?:array{FilterRules?:array<array{Name?:"prefix"|"suffix", Value?:string}>}}}>, EventBridgeConfiguration?:array{}}>
     */
    public function getBucketNotificationConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{OwnershipControls?:array{Rules:array<array{ObjectOwnership:"BucketOwnerPreferred"|"ObjectWriter"|"BucketOwnerEnforced"}>}}>
     */
    public function getBucketOwnershipControls(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{OwnershipControls?:array{Rules:array<array{ObjectOwnership:"BucketOwnerPreferred"|"ObjectWriter"|"BucketOwnerEnforced"}>}}>
     */
    public function getBucketOwnershipControlsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{Policy?:string}>
     */
    public function getBucketPolicy(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:string}>
     */
    public function getBucketPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{PolicyStatus?:array{IsPublic?:bool}}>
     */
    public function getBucketPolicyStatus(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PolicyStatus?:array{IsPublic?:bool}}>
     */
    public function getBucketPolicyStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{ReplicationConfiguration?:array{Role:string, Rules:array<array{ID?:string, Priority?:int, Prefix?:string, Filter?:array{Prefix?:string, Tag?:array{Key:string, Value:string}, And?:array{Prefix?:string, Tags?:array<array{Key:string, Value:string}>}}, Status:"Enabled"|"Disabled", SourceSelectionCriteria?:array{SseKmsEncryptedObjects?:array{Status:"Enabled"|"Disabled"}, ReplicaModifications?:array{Status:"Enabled"|"Disabled"}}, ExistingObjectReplication?:array{Status:"Enabled"|"Disabled"}, Destination:array{Bucket:string, Account?:string, StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"|"SNOW"|"EXPRESS_ONEZONE", AccessControlTranslation?:array{Owner:"Destination"}, EncryptionConfiguration?:array{ReplicaKmsKeyID?:string}, ReplicationTime?:array{Status:"Enabled"|"Disabled", Time:array{Minutes?:int}}, Metrics?:array{Status:"Enabled"|"Disabled", EventThreshold?:array{Minutes?:int}}}, DeleteMarkerReplication?:array{Status?:"Enabled"|"Disabled"}}>}}>
     */
    public function getBucketReplication(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReplicationConfiguration?:array{Role:string, Rules:array<array{ID?:string, Priority?:int, Prefix?:string, Filter?:array{Prefix?:string, Tag?:array{Key:string, Value:string}, And?:array{Prefix?:string, Tags?:array<array{Key:string, Value:string}>}}, Status:"Enabled"|"Disabled", SourceSelectionCriteria?:array{SseKmsEncryptedObjects?:array{Status:"Enabled"|"Disabled"}, ReplicaModifications?:array{Status:"Enabled"|"Disabled"}}, ExistingObjectReplication?:array{Status:"Enabled"|"Disabled"}, Destination:array{Bucket:string, Account?:string, StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"|"SNOW"|"EXPRESS_ONEZONE", AccessControlTranslation?:array{Owner:"Destination"}, EncryptionConfiguration?:array{ReplicaKmsKeyID?:string}, ReplicationTime?:array{Status:"Enabled"|"Disabled", Time:array{Minutes?:int}}, Metrics?:array{Status:"Enabled"|"Disabled", EventThreshold?:array{Minutes?:int}}}, DeleteMarkerReplication?:array{Status?:"Enabled"|"Disabled"}}>}}>
     */
    public function getBucketReplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{Payer?:"Requester"|"BucketOwner"}>
     */
    public function getBucketRequestPayment(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Payer?:"Requester"|"BucketOwner"}>
     */
    public function getBucketRequestPaymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{TagSet:array<array{Key:string, Value:string}>}>
     */
    public function getBucketTagging(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TagSet:array<array{Key:string, Value:string}>}>
     */
    public function getBucketTaggingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{Status?:"Enabled"|"Suspended", MFADelete?:"Enabled"|"Disabled"}>
     */
    public function getBucketVersioning(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status?:"Enabled"|"Suspended", MFADelete?:"Enabled"|"Disabled"}>
     */
    public function getBucketVersioningAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{RedirectAllRequestsTo?:array{HostName:string, Protocol?:"http"|"https"}, IndexDocument?:array{Suffix:string}, ErrorDocument?:array{Key:string}, RoutingRules?:array<array{Condition?:array{HttpErrorCodeReturnedEquals?:string, KeyPrefixEquals?:string}, Redirect:array{HostName?:string, HttpRedirectCode?:string, Protocol?:"http"|"https", ReplaceKeyPrefixWith?:string, ReplaceKeyWith?:string}}>}>
     */
    public function getBucketWebsite(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RedirectAllRequestsTo?:array{HostName:string, Protocol?:"http"|"https"}, IndexDocument?:array{Suffix:string}, ErrorDocument?:array{Key:string}, RoutingRules?:array<array{Condition?:array{HttpErrorCodeReturnedEquals?:string, KeyPrefixEquals?:string}, Redirect:array{HostName?:string, HttpRedirectCode?:string, Protocol?:"http"|"https", ReplaceKeyPrefixWith?:string, ReplaceKeyWith?:string}}>}>
     */
    public function getBucketWebsiteAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, IfMatch?:string, IfModifiedSince?:int|string|\DateTimeInterface, IfNoneMatch?:string, IfUnmodifiedSince?:int|string|\DateTimeInterface, Key:string, Range?:string, ResponseCacheControl?:string, ResponseContentDisposition?:string, ResponseContentEncoding?:string, ResponseContentLanguage?:string, ResponseContentType?:string, ResponseExpires?:int|string|\DateTimeInterface, VersionId?:string, SSECustomerAlgorithm?:string, SSECustomerKey?:string, SSECustomerKeyMD5?:string, RequestPayer?:"requester", PartNumber?:int, ExpectedBucketOwner?:string, ChecksumMode?:"ENABLED"} $args
     * @return \AWS\Result<array{Body?:string|resource|\Psr\Http\Message\StreamInterface, DeleteMarker?:bool, AcceptRanges?:string, Expiration?:string, Restore?:string, LastModified?:int|string|\DateTimeInterface, ContentLength?:int, ETag?:string, ChecksumCRC32?:string, ChecksumCRC32C?:string, ChecksumCRC64NVME?:string, ChecksumSHA1?:string, ChecksumSHA256?:string, ChecksumType?:"COMPOSITE"|"FULL_OBJECT", MissingMeta?:int, VersionId?:string, CacheControl?:string, ContentDisposition?:string, ContentEncoding?:string, ContentLanguage?:string, ContentRange?:string, ContentType?:string, Expires?:int|string|\DateTimeInterface, WebsiteRedirectLocation?:string, ServerSideEncryption?:"AES256"|"aws:kms"|"aws:kms:dsse", Metadata?:array<string, string>, SSECustomerAlgorithm?:string, SSECustomerKeyMD5?:string, SSEKMSKeyId?:string, BucketKeyEnabled?:bool, StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"|"SNOW"|"EXPRESS_ONEZONE", RequestCharged?:"requester", ReplicationStatus?:"COMPLETE"|"PENDING"|"FAILED"|"REPLICA"|"COMPLETED", PartsCount?:int, TagCount?:int, ObjectLockMode?:"GOVERNANCE"|"COMPLIANCE", ObjectLockRetainUntilDate?:int|string|\DateTimeInterface, ObjectLockLegalHoldStatus?:"ON"|"OFF"}>
     */
    public function getObject(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, IfMatch?:string, IfModifiedSince?:int|string|\DateTimeInterface, IfNoneMatch?:string, IfUnmodifiedSince?:int|string|\DateTimeInterface, Key:string, Range?:string, ResponseCacheControl?:string, ResponseContentDisposition?:string, ResponseContentEncoding?:string, ResponseContentLanguage?:string, ResponseContentType?:string, ResponseExpires?:int|string|\DateTimeInterface, VersionId?:string, SSECustomerAlgorithm?:string, SSECustomerKey?:string, SSECustomerKeyMD5?:string, RequestPayer?:"requester", PartNumber?:int, ExpectedBucketOwner?:string, ChecksumMode?:"ENABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Body?:string|resource|\Psr\Http\Message\StreamInterface, DeleteMarker?:bool, AcceptRanges?:string, Expiration?:string, Restore?:string, LastModified?:int|string|\DateTimeInterface, ContentLength?:int, ETag?:string, ChecksumCRC32?:string, ChecksumCRC32C?:string, ChecksumCRC64NVME?:string, ChecksumSHA1?:string, ChecksumSHA256?:string, ChecksumType?:"COMPOSITE"|"FULL_OBJECT", MissingMeta?:int, VersionId?:string, CacheControl?:string, ContentDisposition?:string, ContentEncoding?:string, ContentLanguage?:string, ContentRange?:string, ContentType?:string, Expires?:int|string|\DateTimeInterface, WebsiteRedirectLocation?:string, ServerSideEncryption?:"AES256"|"aws:kms"|"aws:kms:dsse", Metadata?:array<string, string>, SSECustomerAlgorithm?:string, SSECustomerKeyMD5?:string, SSEKMSKeyId?:string, BucketKeyEnabled?:bool, StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"|"SNOW"|"EXPRESS_ONEZONE", RequestCharged?:"requester", ReplicationStatus?:"COMPLETE"|"PENDING"|"FAILED"|"REPLICA"|"COMPLETED", PartsCount?:int, TagCount?:int, ObjectLockMode?:"GOVERNANCE"|"COMPLIANCE", ObjectLockRetainUntilDate?:int|string|\DateTimeInterface, ObjectLockLegalHoldStatus?:"ON"|"OFF"}>
     */
    public function getObjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, Key:string, VersionId?:string, RequestPayer?:"requester", ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{Owner?:array{DisplayName?:string, ID?:string}, Grants?:array<array{Grantee?:array{DisplayName?:string, EmailAddress?:string, ID?:string, Type:"CanonicalUser"|"AmazonCustomerByEmail"|"Group", URI?:string}, Permission?:"FULL_CONTROL"|"WRITE"|"WRITE_ACP"|"READ"|"READ_ACP"}>, RequestCharged?:"requester"}>
     */
    public function getObjectAcl(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, Key:string, VersionId?:string, RequestPayer?:"requester", ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Owner?:array{DisplayName?:string, ID?:string}, Grants?:array<array{Grantee?:array{DisplayName?:string, EmailAddress?:string, ID?:string, Type:"CanonicalUser"|"AmazonCustomerByEmail"|"Group", URI?:string}, Permission?:"FULL_CONTROL"|"WRITE"|"WRITE_ACP"|"READ"|"READ_ACP"}>, RequestCharged?:"requester"}>
     */
    public function getObjectAclAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, Key:string, VersionId?:string, MaxParts?:int, PartNumberMarker?:int, SSECustomerAlgorithm?:string, SSECustomerKey?:string, SSECustomerKeyMD5?:string, RequestPayer?:"requester", ExpectedBucketOwner?:string, ObjectAttributes:array<"ETag"|"Checksum"|"ObjectParts"|"StorageClass"|"ObjectSize">} $args
     * @return \AWS\Result<array{DeleteMarker?:bool, LastModified?:int|string|\DateTimeInterface, VersionId?:string, RequestCharged?:"requester", ETag?:string, Checksum?:array{ChecksumCRC32?:string, ChecksumCRC32C?:string, ChecksumCRC64NVME?:string, ChecksumSHA1?:string, ChecksumSHA256?:string, ChecksumType?:"COMPOSITE"|"FULL_OBJECT"}, ObjectParts?:array{TotalPartsCount?:int, PartNumberMarker?:int, NextPartNumberMarker?:int, MaxParts?:int, IsTruncated?:bool, Parts?:array<array{PartNumber?:int, Size?:int, ChecksumCRC32?:string, ChecksumCRC32C?:string, ChecksumCRC64NVME?:string, ChecksumSHA1?:string, ChecksumSHA256?:string}>}, StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"|"SNOW"|"EXPRESS_ONEZONE", ObjectSize?:int}>
     */
    public function getObjectAttributes(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, Key:string, VersionId?:string, MaxParts?:int, PartNumberMarker?:int, SSECustomerAlgorithm?:string, SSECustomerKey?:string, SSECustomerKeyMD5?:string, RequestPayer?:"requester", ExpectedBucketOwner?:string, ObjectAttributes:array<"ETag"|"Checksum"|"ObjectParts"|"StorageClass"|"ObjectSize">} $args
     * @return \GuzzleHttp\Promise\Promise<array{DeleteMarker?:bool, LastModified?:int|string|\DateTimeInterface, VersionId?:string, RequestCharged?:"requester", ETag?:string, Checksum?:array{ChecksumCRC32?:string, ChecksumCRC32C?:string, ChecksumCRC64NVME?:string, ChecksumSHA1?:string, ChecksumSHA256?:string, ChecksumType?:"COMPOSITE"|"FULL_OBJECT"}, ObjectParts?:array{TotalPartsCount?:int, PartNumberMarker?:int, NextPartNumberMarker?:int, MaxParts?:int, IsTruncated?:bool, Parts?:array<array{PartNumber?:int, Size?:int, ChecksumCRC32?:string, ChecksumCRC32C?:string, ChecksumCRC64NVME?:string, ChecksumSHA1?:string, ChecksumSHA256?:string}>}, StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"|"SNOW"|"EXPRESS_ONEZONE", ObjectSize?:int}>
     */
    public function getObjectAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, Key:string, VersionId?:string, RequestPayer?:"requester", ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{LegalHold?:array{Status?:"ON"|"OFF"}}>
     */
    public function getObjectLegalHold(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, Key:string, VersionId?:string, RequestPayer?:"requester", ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LegalHold?:array{Status?:"ON"|"OFF"}}>
     */
    public function getObjectLegalHoldAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{ObjectLockConfiguration?:array{ObjectLockEnabled?:"Enabled", Rule?:array{DefaultRetention?:array{Mode?:"GOVERNANCE"|"COMPLIANCE", Days?:int, Years?:int}}}}>
     */
    public function getObjectLockConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ObjectLockConfiguration?:array{ObjectLockEnabled?:"Enabled", Rule?:array{DefaultRetention?:array{Mode?:"GOVERNANCE"|"COMPLIANCE", Days?:int, Years?:int}}}}>
     */
    public function getObjectLockConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, Key:string, VersionId?:string, RequestPayer?:"requester", ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{Retention?:array{Mode?:"GOVERNANCE"|"COMPLIANCE", RetainUntilDate?:int|string|\DateTimeInterface}}>
     */
    public function getObjectRetention(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, Key:string, VersionId?:string, RequestPayer?:"requester", ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Retention?:array{Mode?:"GOVERNANCE"|"COMPLIANCE", RetainUntilDate?:int|string|\DateTimeInterface}}>
     */
    public function getObjectRetentionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, Key:string, VersionId?:string, ExpectedBucketOwner?:string, RequestPayer?:"requester"} $args
     * @return \AWS\Result<array{VersionId?:string, TagSet:array<array{Key:string, Value:string}>}>
     */
    public function getObjectTagging(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, Key:string, VersionId?:string, ExpectedBucketOwner?:string, RequestPayer?:"requester"} $args
     * @return \GuzzleHttp\Promise\Promise<array{VersionId?:string, TagSet:array<array{Key:string, Value:string}>}>
     */
    public function getObjectTaggingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, Key:string, RequestPayer?:"requester", ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{Body?:string|resource|\Psr\Http\Message\StreamInterface, RequestCharged?:"requester"}>
     */
    public function getObjectTorrent(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, Key:string, RequestPayer?:"requester", ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Body?:string|resource|\Psr\Http\Message\StreamInterface, RequestCharged?:"requester"}>
     */
    public function getObjectTorrentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{PublicAccessBlockConfiguration?:array{BlockPublicAcls?:bool, IgnorePublicAcls?:bool, BlockPublicPolicy?:bool, RestrictPublicBuckets?:bool}}>
     */
    public function getPublicAccessBlock(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PublicAccessBlockConfiguration?:array{BlockPublicAcls?:bool, IgnorePublicAcls?:bool, BlockPublicPolicy?:bool, RestrictPublicBuckets?:bool}}>
     */
    public function getPublicAccessBlockAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{BucketLocationType?:"AvailabilityZone"|"LocalZone", BucketLocationName?:string, BucketRegion?:string, AccessPointAlias?:bool}>
     */
    public function headBucket(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BucketLocationType?:"AvailabilityZone"|"LocalZone", BucketLocationName?:string, BucketRegion?:string, AccessPointAlias?:bool}>
     */
    public function headBucketAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, IfMatch?:string, IfModifiedSince?:int|string|\DateTimeInterface, IfNoneMatch?:string, IfUnmodifiedSince?:int|string|\DateTimeInterface, Key:string, Range?:string, ResponseCacheControl?:string, ResponseContentDisposition?:string, ResponseContentEncoding?:string, ResponseContentLanguage?:string, ResponseContentType?:string, ResponseExpires?:int|string|\DateTimeInterface, VersionId?:string, SSECustomerAlgorithm?:string, SSECustomerKey?:string, SSECustomerKeyMD5?:string, RequestPayer?:"requester", PartNumber?:int, ExpectedBucketOwner?:string, ChecksumMode?:"ENABLED"} $args
     * @return \AWS\Result<array{DeleteMarker?:bool, AcceptRanges?:string, Expiration?:string, Restore?:string, ArchiveStatus?:"ARCHIVE_ACCESS"|"DEEP_ARCHIVE_ACCESS", LastModified?:int|string|\DateTimeInterface, ContentLength?:int, ChecksumCRC32?:string, ChecksumCRC32C?:string, ChecksumCRC64NVME?:string, ChecksumSHA1?:string, ChecksumSHA256?:string, ChecksumType?:"COMPOSITE"|"FULL_OBJECT", ETag?:string, MissingMeta?:int, VersionId?:string, CacheControl?:string, ContentDisposition?:string, ContentEncoding?:string, ContentLanguage?:string, ContentType?:string, Expires?:int|string|\DateTimeInterface, WebsiteRedirectLocation?:string, ServerSideEncryption?:"AES256"|"aws:kms"|"aws:kms:dsse", Metadata?:array<string, string>, SSECustomerAlgorithm?:string, SSECustomerKeyMD5?:string, SSEKMSKeyId?:string, BucketKeyEnabled?:bool, StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"|"SNOW"|"EXPRESS_ONEZONE", RequestCharged?:"requester", ReplicationStatus?:"COMPLETE"|"PENDING"|"FAILED"|"REPLICA"|"COMPLETED", PartsCount?:int, ObjectLockMode?:"GOVERNANCE"|"COMPLIANCE", ObjectLockRetainUntilDate?:int|string|\DateTimeInterface, ObjectLockLegalHoldStatus?:"ON"|"OFF"}>
     */
    public function headObject(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, IfMatch?:string, IfModifiedSince?:int|string|\DateTimeInterface, IfNoneMatch?:string, IfUnmodifiedSince?:int|string|\DateTimeInterface, Key:string, Range?:string, ResponseCacheControl?:string, ResponseContentDisposition?:string, ResponseContentEncoding?:string, ResponseContentLanguage?:string, ResponseContentType?:string, ResponseExpires?:int|string|\DateTimeInterface, VersionId?:string, SSECustomerAlgorithm?:string, SSECustomerKey?:string, SSECustomerKeyMD5?:string, RequestPayer?:"requester", PartNumber?:int, ExpectedBucketOwner?:string, ChecksumMode?:"ENABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{DeleteMarker?:bool, AcceptRanges?:string, Expiration?:string, Restore?:string, ArchiveStatus?:"ARCHIVE_ACCESS"|"DEEP_ARCHIVE_ACCESS", LastModified?:int|string|\DateTimeInterface, ContentLength?:int, ChecksumCRC32?:string, ChecksumCRC32C?:string, ChecksumCRC64NVME?:string, ChecksumSHA1?:string, ChecksumSHA256?:string, ChecksumType?:"COMPOSITE"|"FULL_OBJECT", ETag?:string, MissingMeta?:int, VersionId?:string, CacheControl?:string, ContentDisposition?:string, ContentEncoding?:string, ContentLanguage?:string, ContentType?:string, Expires?:int|string|\DateTimeInterface, WebsiteRedirectLocation?:string, ServerSideEncryption?:"AES256"|"aws:kms"|"aws:kms:dsse", Metadata?:array<string, string>, SSECustomerAlgorithm?:string, SSECustomerKeyMD5?:string, SSEKMSKeyId?:string, BucketKeyEnabled?:bool, StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"|"SNOW"|"EXPRESS_ONEZONE", RequestCharged?:"requester", ReplicationStatus?:"COMPLETE"|"PENDING"|"FAILED"|"REPLICA"|"COMPLETED", PartsCount?:int, ObjectLockMode?:"GOVERNANCE"|"COMPLIANCE", ObjectLockRetainUntilDate?:int|string|\DateTimeInterface, ObjectLockLegalHoldStatus?:"ON"|"OFF"}>
     */
    public function headObjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ContinuationToken?:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{IsTruncated?:bool, ContinuationToken?:string, NextContinuationToken?:string, AnalyticsConfigurationList?:array<array{Id:string, Filter?:array{Prefix?:string, Tag?:array{Key:string, Value:string}, And?:array{Prefix?:string, Tags?:array<array{Key:string, Value:string}>}}, StorageClassAnalysis:array{DataExport?:array{OutputSchemaVersion:"V_1", Destination:array{S3BucketDestination:array{Format:"CSV", BucketAccountId?:string, Bucket:string, Prefix?:string}}}}}>}>
     */
    public function listBucketAnalyticsConfigurations(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ContinuationToken?:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IsTruncated?:bool, ContinuationToken?:string, NextContinuationToken?:string, AnalyticsConfigurationList?:array<array{Id:string, Filter?:array{Prefix?:string, Tag?:array{Key:string, Value:string}, And?:array{Prefix?:string, Tags?:array<array{Key:string, Value:string}>}}, StorageClassAnalysis:array{DataExport?:array{OutputSchemaVersion:"V_1", Destination:array{S3BucketDestination:array{Format:"CSV", BucketAccountId?:string, Bucket:string, Prefix?:string}}}}}>}>
     */
    public function listBucketAnalyticsConfigurationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ContinuationToken?:string} $args
     * @return \AWS\Result<array{IsTruncated?:bool, ContinuationToken?:string, NextContinuationToken?:string, IntelligentTieringConfigurationList?:array<array{Id:string, Filter?:array{Prefix?:string, Tag?:array{Key:string, Value:string}, And?:array{Prefix?:string, Tags?:array<array{Key:string, Value:string}>}}, Status:"Enabled"|"Disabled", Tierings:array<array{Days:int, AccessTier:"ARCHIVE_ACCESS"|"DEEP_ARCHIVE_ACCESS"}>}>}>
     */
    public function listBucketIntelligentTieringConfigurations(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ContinuationToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IsTruncated?:bool, ContinuationToken?:string, NextContinuationToken?:string, IntelligentTieringConfigurationList?:array<array{Id:string, Filter?:array{Prefix?:string, Tag?:array{Key:string, Value:string}, And?:array{Prefix?:string, Tags?:array<array{Key:string, Value:string}>}}, Status:"Enabled"|"Disabled", Tierings:array<array{Days:int, AccessTier:"ARCHIVE_ACCESS"|"DEEP_ARCHIVE_ACCESS"}>}>}>
     */
    public function listBucketIntelligentTieringConfigurationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ContinuationToken?:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{ContinuationToken?:string, InventoryConfigurationList?:array<array{Destination:array{S3BucketDestination:array{AccountId?:string, Bucket:string, Format:"CSV"|"ORC"|"Parquet", Prefix?:string, Encryption?:array{SSES3?:array{}, SSEKMS?:array{KeyId:string}}}}, IsEnabled:bool, Filter?:array{Prefix:string}, Id:string, IncludedObjectVersions:"All"|"Current", OptionalFields?:array<"Size"|"LastModifiedDate"|"StorageClass"|"ETag"|"IsMultipartUploaded"|"ReplicationStatus"|"EncryptionStatus"|"ObjectLockRetainUntilDate"|"ObjectLockMode"|"ObjectLockLegalHoldStatus"|"IntelligentTieringAccessTier"|"BucketKeyStatus"|"ChecksumAlgorithm"|"ObjectAccessControlList"|"ObjectOwner">, Schedule:array{Frequency:"Daily"|"Weekly"}}>, IsTruncated?:bool, NextContinuationToken?:string}>
     */
    public function listBucketInventoryConfigurations(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ContinuationToken?:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContinuationToken?:string, InventoryConfigurationList?:array<array{Destination:array{S3BucketDestination:array{AccountId?:string, Bucket:string, Format:"CSV"|"ORC"|"Parquet", Prefix?:string, Encryption?:array{SSES3?:array{}, SSEKMS?:array{KeyId:string}}}}, IsEnabled:bool, Filter?:array{Prefix:string}, Id:string, IncludedObjectVersions:"All"|"Current", OptionalFields?:array<"Size"|"LastModifiedDate"|"StorageClass"|"ETag"|"IsMultipartUploaded"|"ReplicationStatus"|"EncryptionStatus"|"ObjectLockRetainUntilDate"|"ObjectLockMode"|"ObjectLockLegalHoldStatus"|"IntelligentTieringAccessTier"|"BucketKeyStatus"|"ChecksumAlgorithm"|"ObjectAccessControlList"|"ObjectOwner">, Schedule:array{Frequency:"Daily"|"Weekly"}}>, IsTruncated?:bool, NextContinuationToken?:string}>
     */
    public function listBucketInventoryConfigurationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ContinuationToken?:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{IsTruncated?:bool, ContinuationToken?:string, NextContinuationToken?:string, MetricsConfigurationList?:array<array{Id:string, Filter?:array{Prefix?:string, Tag?:array{Key:string, Value:string}, AccessPointArn?:string, And?:array{Prefix?:string, Tags?:array<array{Key:string, Value:string}>, AccessPointArn?:string}}}>}>
     */
    public function listBucketMetricsConfigurations(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ContinuationToken?:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IsTruncated?:bool, ContinuationToken?:string, NextContinuationToken?:string, MetricsConfigurationList?:array<array{Id:string, Filter?:array{Prefix?:string, Tag?:array{Key:string, Value:string}, AccessPointArn?:string, And?:array{Prefix?:string, Tags?:array<array{Key:string, Value:string}>, AccessPointArn?:string}}}>}>
     */
    public function listBucketMetricsConfigurationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxBuckets?:int, ContinuationToken?:string, Prefix?:string, BucketRegion?:string} $args
     * @return \AWS\Result<array{Buckets?:array<array{Name?:string, CreationDate?:int|string|\DateTimeInterface, BucketRegion?:string}>, Owner?:array{DisplayName?:string, ID?:string}, ContinuationToken?:string, Prefix?:string}>
     */
    public function listBuckets(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxBuckets?:int, ContinuationToken?:string, Prefix?:string, BucketRegion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Buckets?:array<array{Name?:string, CreationDate?:int|string|\DateTimeInterface, BucketRegion?:string}>, Owner?:array{DisplayName?:string, ID?:string}, ContinuationToken?:string, Prefix?:string}>
     */
    public function listBucketsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContinuationToken?:string, MaxDirectoryBuckets?:int} $args
     * @return \AWS\Result<array{Buckets?:array<array{Name?:string, CreationDate?:int|string|\DateTimeInterface, BucketRegion?:string}>, ContinuationToken?:string}>
     */
    public function listDirectoryBuckets(array $args = []): \AWS\Result { }

    /**
     * @param array{ContinuationToken?:string, MaxDirectoryBuckets?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Buckets?:array<array{Name?:string, CreationDate?:int|string|\DateTimeInterface, BucketRegion?:string}>, ContinuationToken?:string}>
     */
    public function listDirectoryBucketsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, Delimiter?:string, EncodingType?:"url", KeyMarker?:string, MaxUploads?:int, Prefix?:string, UploadIdMarker?:string, ExpectedBucketOwner?:string, RequestPayer?:"requester"} $args
     * @return \AWS\Result<array{Bucket?:string, KeyMarker?:string, UploadIdMarker?:string, NextKeyMarker?:string, Prefix?:string, Delimiter?:string, NextUploadIdMarker?:string, MaxUploads?:int, IsTruncated?:bool, Uploads?:array<array{UploadId?:string, Key?:string, Initiated?:int|string|\DateTimeInterface, StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"|"SNOW"|"EXPRESS_ONEZONE", Owner?:array{DisplayName?:string, ID?:string}, Initiator?:array{ID?:string, DisplayName?:string}, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", ChecksumType?:"COMPOSITE"|"FULL_OBJECT"}>, CommonPrefixes?:array<array{Prefix?:string}>, EncodingType?:"url", RequestCharged?:"requester"}>
     */
    public function listMultipartUploads(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, Delimiter?:string, EncodingType?:"url", KeyMarker?:string, MaxUploads?:int, Prefix?:string, UploadIdMarker?:string, ExpectedBucketOwner?:string, RequestPayer?:"requester"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Bucket?:string, KeyMarker?:string, UploadIdMarker?:string, NextKeyMarker?:string, Prefix?:string, Delimiter?:string, NextUploadIdMarker?:string, MaxUploads?:int, IsTruncated?:bool, Uploads?:array<array{UploadId?:string, Key?:string, Initiated?:int|string|\DateTimeInterface, StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"|"SNOW"|"EXPRESS_ONEZONE", Owner?:array{DisplayName?:string, ID?:string}, Initiator?:array{ID?:string, DisplayName?:string}, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", ChecksumType?:"COMPOSITE"|"FULL_OBJECT"}>, CommonPrefixes?:array<array{Prefix?:string}>, EncodingType?:"url", RequestCharged?:"requester"}>
     */
    public function listMultipartUploadsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, Delimiter?:string, EncodingType?:"url", KeyMarker?:string, MaxKeys?:int, Prefix?:string, VersionIdMarker?:string, ExpectedBucketOwner?:string, RequestPayer?:"requester", OptionalObjectAttributes?:array<"RestoreStatus">} $args
     * @return \AWS\Result<array{IsTruncated?:bool, KeyMarker?:string, VersionIdMarker?:string, NextKeyMarker?:string, NextVersionIdMarker?:string, Versions?:array<array{ETag?:string, ChecksumAlgorithm?:array<"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME">, ChecksumType?:"COMPOSITE"|"FULL_OBJECT", Size?:int, StorageClass?:"STANDARD", Key?:string, VersionId?:string, IsLatest?:bool, LastModified?:int|string|\DateTimeInterface, Owner?:array{DisplayName?:string, ID?:string}, RestoreStatus?:array{IsRestoreInProgress?:bool, RestoreExpiryDate?:int|string|\DateTimeInterface}}>, DeleteMarkers?:array<array{Owner?:array{DisplayName?:string, ID?:string}, Key?:string, VersionId?:string, IsLatest?:bool, LastModified?:int|string|\DateTimeInterface}>, Name?:string, Prefix?:string, Delimiter?:string, MaxKeys?:int, CommonPrefixes?:array<array{Prefix?:string}>, EncodingType?:"url", RequestCharged?:"requester"}>
     */
    public function listObjectVersions(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, Delimiter?:string, EncodingType?:"url", KeyMarker?:string, MaxKeys?:int, Prefix?:string, VersionIdMarker?:string, ExpectedBucketOwner?:string, RequestPayer?:"requester", OptionalObjectAttributes?:array<"RestoreStatus">} $args
     * @return \GuzzleHttp\Promise\Promise<array{IsTruncated?:bool, KeyMarker?:string, VersionIdMarker?:string, NextKeyMarker?:string, NextVersionIdMarker?:string, Versions?:array<array{ETag?:string, ChecksumAlgorithm?:array<"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME">, ChecksumType?:"COMPOSITE"|"FULL_OBJECT", Size?:int, StorageClass?:"STANDARD", Key?:string, VersionId?:string, IsLatest?:bool, LastModified?:int|string|\DateTimeInterface, Owner?:array{DisplayName?:string, ID?:string}, RestoreStatus?:array{IsRestoreInProgress?:bool, RestoreExpiryDate?:int|string|\DateTimeInterface}}>, DeleteMarkers?:array<array{Owner?:array{DisplayName?:string, ID?:string}, Key?:string, VersionId?:string, IsLatest?:bool, LastModified?:int|string|\DateTimeInterface}>, Name?:string, Prefix?:string, Delimiter?:string, MaxKeys?:int, CommonPrefixes?:array<array{Prefix?:string}>, EncodingType?:"url", RequestCharged?:"requester"}>
     */
    public function listObjectVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, Delimiter?:string, EncodingType?:"url", Marker?:string, MaxKeys?:int, Prefix?:string, RequestPayer?:"requester", ExpectedBucketOwner?:string, OptionalObjectAttributes?:array<"RestoreStatus">} $args
     * @return \AWS\Result<array{IsTruncated?:bool, Marker?:string, NextMarker?:string, Contents?:array<array{Key?:string, LastModified?:int|string|\DateTimeInterface, ETag?:string, ChecksumAlgorithm?:array<"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME">, ChecksumType?:"COMPOSITE"|"FULL_OBJECT", Size?:int, StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"GLACIER"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"|"SNOW"|"EXPRESS_ONEZONE", Owner?:array{DisplayName?:string, ID?:string}, RestoreStatus?:array{IsRestoreInProgress?:bool, RestoreExpiryDate?:int|string|\DateTimeInterface}}>, Name?:string, Prefix?:string, Delimiter?:string, MaxKeys?:int, CommonPrefixes?:array<array{Prefix?:string}>, EncodingType?:"url", RequestCharged?:"requester"}>
     */
    public function listObjects(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, Delimiter?:string, EncodingType?:"url", Marker?:string, MaxKeys?:int, Prefix?:string, RequestPayer?:"requester", ExpectedBucketOwner?:string, OptionalObjectAttributes?:array<"RestoreStatus">} $args
     * @return \GuzzleHttp\Promise\Promise<array{IsTruncated?:bool, Marker?:string, NextMarker?:string, Contents?:array<array{Key?:string, LastModified?:int|string|\DateTimeInterface, ETag?:string, ChecksumAlgorithm?:array<"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME">, ChecksumType?:"COMPOSITE"|"FULL_OBJECT", Size?:int, StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"GLACIER"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"|"SNOW"|"EXPRESS_ONEZONE", Owner?:array{DisplayName?:string, ID?:string}, RestoreStatus?:array{IsRestoreInProgress?:bool, RestoreExpiryDate?:int|string|\DateTimeInterface}}>, Name?:string, Prefix?:string, Delimiter?:string, MaxKeys?:int, CommonPrefixes?:array<array{Prefix?:string}>, EncodingType?:"url", RequestCharged?:"requester"}>
     */
    public function listObjectsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, Delimiter?:string, EncodingType?:"url", MaxKeys?:int, Prefix?:string, ContinuationToken?:string, FetchOwner?:bool, StartAfter?:string, RequestPayer?:"requester", ExpectedBucketOwner?:string, OptionalObjectAttributes?:array<"RestoreStatus">} $args
     * @return \AWS\Result<array{IsTruncated?:bool, Contents?:array<array{Key?:string, LastModified?:int|string|\DateTimeInterface, ETag?:string, ChecksumAlgorithm?:array<"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME">, ChecksumType?:"COMPOSITE"|"FULL_OBJECT", Size?:int, StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"GLACIER"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"|"SNOW"|"EXPRESS_ONEZONE", Owner?:array{DisplayName?:string, ID?:string}, RestoreStatus?:array{IsRestoreInProgress?:bool, RestoreExpiryDate?:int|string|\DateTimeInterface}}>, Name?:string, Prefix?:string, Delimiter?:string, MaxKeys?:int, CommonPrefixes?:array<array{Prefix?:string}>, EncodingType?:"url", KeyCount?:int, ContinuationToken?:string, NextContinuationToken?:string, StartAfter?:string, RequestCharged?:"requester"}>
     */
    public function listObjectsV2(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, Delimiter?:string, EncodingType?:"url", MaxKeys?:int, Prefix?:string, ContinuationToken?:string, FetchOwner?:bool, StartAfter?:string, RequestPayer?:"requester", ExpectedBucketOwner?:string, OptionalObjectAttributes?:array<"RestoreStatus">} $args
     * @return \GuzzleHttp\Promise\Promise<array{IsTruncated?:bool, Contents?:array<array{Key?:string, LastModified?:int|string|\DateTimeInterface, ETag?:string, ChecksumAlgorithm?:array<"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME">, ChecksumType?:"COMPOSITE"|"FULL_OBJECT", Size?:int, StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"GLACIER"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"|"SNOW"|"EXPRESS_ONEZONE", Owner?:array{DisplayName?:string, ID?:string}, RestoreStatus?:array{IsRestoreInProgress?:bool, RestoreExpiryDate?:int|string|\DateTimeInterface}}>, Name?:string, Prefix?:string, Delimiter?:string, MaxKeys?:int, CommonPrefixes?:array<array{Prefix?:string}>, EncodingType?:"url", KeyCount?:int, ContinuationToken?:string, NextContinuationToken?:string, StartAfter?:string, RequestCharged?:"requester"}>
     */
    public function listObjectsV2Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, Key:string, MaxParts?:int, PartNumberMarker?:int, UploadId:string, RequestPayer?:"requester", ExpectedBucketOwner?:string, SSECustomerAlgorithm?:string, SSECustomerKey?:string, SSECustomerKeyMD5?:string} $args
     * @return \AWS\Result<array{AbortDate?:int|string|\DateTimeInterface, AbortRuleId?:string, Bucket?:string, Key?:string, UploadId?:string, PartNumberMarker?:int, NextPartNumberMarker?:int, MaxParts?:int, IsTruncated?:bool, Parts?:array<array{PartNumber?:int, LastModified?:int|string|\DateTimeInterface, ETag?:string, Size?:int, ChecksumCRC32?:string, ChecksumCRC32C?:string, ChecksumCRC64NVME?:string, ChecksumSHA1?:string, ChecksumSHA256?:string}>, Initiator?:array{ID?:string, DisplayName?:string}, Owner?:array{DisplayName?:string, ID?:string}, StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"|"SNOW"|"EXPRESS_ONEZONE", RequestCharged?:"requester", ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", ChecksumType?:"COMPOSITE"|"FULL_OBJECT"}>
     */
    public function listParts(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, Key:string, MaxParts?:int, PartNumberMarker?:int, UploadId:string, RequestPayer?:"requester", ExpectedBucketOwner?:string, SSECustomerAlgorithm?:string, SSECustomerKey?:string, SSECustomerKeyMD5?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AbortDate?:int|string|\DateTimeInterface, AbortRuleId?:string, Bucket?:string, Key?:string, UploadId?:string, PartNumberMarker?:int, NextPartNumberMarker?:int, MaxParts?:int, IsTruncated?:bool, Parts?:array<array{PartNumber?:int, LastModified?:int|string|\DateTimeInterface, ETag?:string, Size?:int, ChecksumCRC32?:string, ChecksumCRC32C?:string, ChecksumCRC64NVME?:string, ChecksumSHA1?:string, ChecksumSHA256?:string}>, Initiator?:array{ID?:string, DisplayName?:string}, Owner?:array{DisplayName?:string, ID?:string}, StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"|"SNOW"|"EXPRESS_ONEZONE", RequestCharged?:"requester", ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", ChecksumType?:"COMPOSITE"|"FULL_OBJECT"}>
     */
    public function listPartsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, AccelerateConfiguration:array{Status?:"Enabled"|"Suspended"}, ExpectedBucketOwner?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME"} $args
     * @return \AWS\Result<void>
     */
    public function putBucketAccelerateConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, AccelerateConfiguration:array{Status?:"Enabled"|"Suspended"}, ExpectedBucketOwner?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putBucketAccelerateConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ACL?:"private"|"public-read"|"public-read-write"|"authenticated-read", AccessControlPolicy?:array{Grants?:array<array{Grantee?:array{DisplayName?:string, EmailAddress?:string, ID?:string, Type:"CanonicalUser"|"AmazonCustomerByEmail"|"Group", URI?:string}, Permission?:"FULL_CONTROL"|"WRITE"|"WRITE_ACP"|"READ"|"READ_ACP"}>, Owner?:array{DisplayName?:string, ID?:string}}, Bucket:string, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", GrantFullControl?:string, GrantRead?:string, GrantReadACP?:string, GrantWrite?:string, GrantWriteACP?:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<void>
     */
    public function putBucketAcl(array $args): \AWS\Result { }

    /**
     * @param array{ACL?:"private"|"public-read"|"public-read-write"|"authenticated-read", AccessControlPolicy?:array{Grants?:array<array{Grantee?:array{DisplayName?:string, EmailAddress?:string, ID?:string, Type:"CanonicalUser"|"AmazonCustomerByEmail"|"Group", URI?:string}, Permission?:"FULL_CONTROL"|"WRITE"|"WRITE_ACP"|"READ"|"READ_ACP"}>, Owner?:array{DisplayName?:string, ID?:string}}, Bucket:string, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", GrantFullControl?:string, GrantRead?:string, GrantReadACP?:string, GrantWrite?:string, GrantWriteACP?:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putBucketAclAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, Id:string, AnalyticsConfiguration:array{Id:string, Filter?:array{Prefix?:string, Tag?:array{Key:string, Value:string}, And?:array{Prefix?:string, Tags?:array<array{Key:string, Value:string}>}}, StorageClassAnalysis:array{DataExport?:array{OutputSchemaVersion:"V_1", Destination:array{S3BucketDestination:array{Format:"CSV", BucketAccountId?:string, Bucket:string, Prefix?:string}}}}}, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<void>
     */
    public function putBucketAnalyticsConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, Id:string, AnalyticsConfiguration:array{Id:string, Filter?:array{Prefix?:string, Tag?:array{Key:string, Value:string}, And?:array{Prefix?:string, Tags?:array<array{Key:string, Value:string}>}}, StorageClassAnalysis:array{DataExport?:array{OutputSchemaVersion:"V_1", Destination:array{S3BucketDestination:array{Format:"CSV", BucketAccountId?:string, Bucket:string, Prefix?:string}}}}}, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putBucketAnalyticsConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, CORSConfiguration:array{CORSRules:array<array{ID?:string, AllowedHeaders?:array<string>, AllowedMethods:array<string>, AllowedOrigins:array<string>, ExposeHeaders?:array<string>, MaxAgeSeconds?:int}>}, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<void>
     */
    public function putBucketCors(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, CORSConfiguration:array{CORSRules:array<array{ID?:string, AllowedHeaders?:array<string>, AllowedMethods:array<string>, AllowedOrigins:array<string>, ExposeHeaders?:array<string>, MaxAgeSeconds?:int}>}, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putBucketCorsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", ServerSideEncryptionConfiguration:array{Rules:array<array{ApplyServerSideEncryptionByDefault?:array{SSEAlgorithm:"AES256"|"aws:kms"|"aws:kms:dsse", KMSMasterKeyID?:string}, BucketKeyEnabled?:bool}>}, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<void>
     */
    public function putBucketEncryption(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", ServerSideEncryptionConfiguration:array{Rules:array<array{ApplyServerSideEncryptionByDefault?:array{SSEAlgorithm:"AES256"|"aws:kms"|"aws:kms:dsse", KMSMasterKeyID?:string}, BucketKeyEnabled?:bool}>}, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putBucketEncryptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, Id:string, IntelligentTieringConfiguration:array{Id:string, Filter?:array{Prefix?:string, Tag?:array{Key:string, Value:string}, And?:array{Prefix?:string, Tags?:array<array{Key:string, Value:string}>}}, Status:"Enabled"|"Disabled", Tierings:array<array{Days:int, AccessTier:"ARCHIVE_ACCESS"|"DEEP_ARCHIVE_ACCESS"}>}} $args
     * @return \AWS\Result<void>
     */
    public function putBucketIntelligentTieringConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, Id:string, IntelligentTieringConfiguration:array{Id:string, Filter?:array{Prefix?:string, Tag?:array{Key:string, Value:string}, And?:array{Prefix?:string, Tags?:array<array{Key:string, Value:string}>}}, Status:"Enabled"|"Disabled", Tierings:array<array{Days:int, AccessTier:"ARCHIVE_ACCESS"|"DEEP_ARCHIVE_ACCESS"}>}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putBucketIntelligentTieringConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, Id:string, InventoryConfiguration:array{Destination:array{S3BucketDestination:array{AccountId?:string, Bucket:string, Format:"CSV"|"ORC"|"Parquet", Prefix?:string, Encryption?:array{SSES3?:array{}, SSEKMS?:array{KeyId:string}}}}, IsEnabled:bool, Filter?:array{Prefix:string}, Id:string, IncludedObjectVersions:"All"|"Current", OptionalFields?:array<"Size"|"LastModifiedDate"|"StorageClass"|"ETag"|"IsMultipartUploaded"|"ReplicationStatus"|"EncryptionStatus"|"ObjectLockRetainUntilDate"|"ObjectLockMode"|"ObjectLockLegalHoldStatus"|"IntelligentTieringAccessTier"|"BucketKeyStatus"|"ChecksumAlgorithm"|"ObjectAccessControlList"|"ObjectOwner">, Schedule:array{Frequency:"Daily"|"Weekly"}}, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<void>
     */
    public function putBucketInventoryConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, Id:string, InventoryConfiguration:array{Destination:array{S3BucketDestination:array{AccountId?:string, Bucket:string, Format:"CSV"|"ORC"|"Parquet", Prefix?:string, Encryption?:array{SSES3?:array{}, SSEKMS?:array{KeyId:string}}}}, IsEnabled:bool, Filter?:array{Prefix:string}, Id:string, IncludedObjectVersions:"All"|"Current", OptionalFields?:array<"Size"|"LastModifiedDate"|"StorageClass"|"ETag"|"IsMultipartUploaded"|"ReplicationStatus"|"EncryptionStatus"|"ObjectLockRetainUntilDate"|"ObjectLockMode"|"ObjectLockLegalHoldStatus"|"IntelligentTieringAccessTier"|"BucketKeyStatus"|"ChecksumAlgorithm"|"ObjectAccessControlList"|"ObjectOwner">, Schedule:array{Frequency:"Daily"|"Weekly"}}, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putBucketInventoryConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", LifecycleConfiguration?:array{Rules:array<array{Expiration?:array{Date?:int|string|\DateTimeInterface, Days?:int, ExpiredObjectDeleteMarker?:bool}, ID?:string, Prefix:string, Status:"Enabled"|"Disabled", Transition?:array{Date?:int|string|\DateTimeInterface, Days?:int, StorageClass?:"GLACIER"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"|"GLACIER_IR"}, NoncurrentVersionTransition?:array{NoncurrentDays?:int, StorageClass?:"GLACIER"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"|"GLACIER_IR", NewerNoncurrentVersions?:int}, NoncurrentVersionExpiration?:array{NoncurrentDays?:int, NewerNoncurrentVersions?:int}, AbortIncompleteMultipartUpload?:array{DaysAfterInitiation?:int}}>}, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<void>
     */
    public function putBucketLifecycle(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", LifecycleConfiguration?:array{Rules:array<array{Expiration?:array{Date?:int|string|\DateTimeInterface, Days?:int, ExpiredObjectDeleteMarker?:bool}, ID?:string, Prefix:string, Status:"Enabled"|"Disabled", Transition?:array{Date?:int|string|\DateTimeInterface, Days?:int, StorageClass?:"GLACIER"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"|"GLACIER_IR"}, NoncurrentVersionTransition?:array{NoncurrentDays?:int, StorageClass?:"GLACIER"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"|"GLACIER_IR", NewerNoncurrentVersions?:int}, NoncurrentVersionExpiration?:array{NoncurrentDays?:int, NewerNoncurrentVersions?:int}, AbortIncompleteMultipartUpload?:array{DaysAfterInitiation?:int}}>}, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putBucketLifecycleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", LifecycleConfiguration?:array{Rules:array<array{Expiration?:array{Date?:int|string|\DateTimeInterface, Days?:int, ExpiredObjectDeleteMarker?:bool}, ID?:string, Prefix?:string, Filter?:array{Prefix?:string, Tag?:array{Key:string, Value:string}, ObjectSizeGreaterThan?:int, ObjectSizeLessThan?:int, And?:array{Prefix?:string, Tags?:array<array{Key:string, Value:string}>, ObjectSizeGreaterThan?:int, ObjectSizeLessThan?:int}}, Status:"Enabled"|"Disabled", Transitions?:array<array{Date?:int|string|\DateTimeInterface, Days?:int, StorageClass?:"GLACIER"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"|"GLACIER_IR"}>, NoncurrentVersionTransitions?:array<array{NoncurrentDays?:int, StorageClass?:"GLACIER"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"|"GLACIER_IR", NewerNoncurrentVersions?:int}>, NoncurrentVersionExpiration?:array{NoncurrentDays?:int, NewerNoncurrentVersions?:int}, AbortIncompleteMultipartUpload?:array{DaysAfterInitiation?:int}}>}, ExpectedBucketOwner?:string, TransitionDefaultMinimumObjectSize?:"varies_by_storage_class"|"all_storage_classes_128K"} $args
     * @return \AWS\Result<array{TransitionDefaultMinimumObjectSize?:"varies_by_storage_class"|"all_storage_classes_128K"}>
     */
    public function putBucketLifecycleConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", LifecycleConfiguration?:array{Rules:array<array{Expiration?:array{Date?:int|string|\DateTimeInterface, Days?:int, ExpiredObjectDeleteMarker?:bool}, ID?:string, Prefix?:string, Filter?:array{Prefix?:string, Tag?:array{Key:string, Value:string}, ObjectSizeGreaterThan?:int, ObjectSizeLessThan?:int, And?:array{Prefix?:string, Tags?:array<array{Key:string, Value:string}>, ObjectSizeGreaterThan?:int, ObjectSizeLessThan?:int}}, Status:"Enabled"|"Disabled", Transitions?:array<array{Date?:int|string|\DateTimeInterface, Days?:int, StorageClass?:"GLACIER"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"|"GLACIER_IR"}>, NoncurrentVersionTransitions?:array<array{NoncurrentDays?:int, StorageClass?:"GLACIER"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"|"GLACIER_IR", NewerNoncurrentVersions?:int}>, NoncurrentVersionExpiration?:array{NoncurrentDays?:int, NewerNoncurrentVersions?:int}, AbortIncompleteMultipartUpload?:array{DaysAfterInitiation?:int}}>}, ExpectedBucketOwner?:string, TransitionDefaultMinimumObjectSize?:"varies_by_storage_class"|"all_storage_classes_128K"} $args
     * @return \GuzzleHttp\Promise\Promise<array{TransitionDefaultMinimumObjectSize?:"varies_by_storage_class"|"all_storage_classes_128K"}>
     */
    public function putBucketLifecycleConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, BucketLoggingStatus:array{LoggingEnabled?:array{TargetBucket:string, TargetGrants?:array<array{Grantee?:array{DisplayName?:string, EmailAddress?:string, ID?:string, Type:"CanonicalUser"|"AmazonCustomerByEmail"|"Group", URI?:string}, Permission?:"FULL_CONTROL"|"READ"|"WRITE"}>, TargetPrefix:string, TargetObjectKeyFormat?:array{SimplePrefix?:array{}, PartitionedPrefix?:array{PartitionDateSource?:"EventTime"|"DeliveryTime"}}}}, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<void>
     */
    public function putBucketLogging(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, BucketLoggingStatus:array{LoggingEnabled?:array{TargetBucket:string, TargetGrants?:array<array{Grantee?:array{DisplayName?:string, EmailAddress?:string, ID?:string, Type:"CanonicalUser"|"AmazonCustomerByEmail"|"Group", URI?:string}, Permission?:"FULL_CONTROL"|"READ"|"WRITE"}>, TargetPrefix:string, TargetObjectKeyFormat?:array{SimplePrefix?:array{}, PartitionedPrefix?:array{PartitionDateSource?:"EventTime"|"DeliveryTime"}}}}, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putBucketLoggingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, Id:string, MetricsConfiguration:array{Id:string, Filter?:array{Prefix?:string, Tag?:array{Key:string, Value:string}, AccessPointArn?:string, And?:array{Prefix?:string, Tags?:array<array{Key:string, Value:string}>, AccessPointArn?:string}}}, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<void>
     */
    public function putBucketMetricsConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, Id:string, MetricsConfiguration:array{Id:string, Filter?:array{Prefix?:string, Tag?:array{Key:string, Value:string}, AccessPointArn?:string, And?:array{Prefix?:string, Tags?:array<array{Key:string, Value:string}>, AccessPointArn?:string}}}, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putBucketMetricsConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", NotificationConfiguration:array{TopicConfiguration?:array{Id?:string, Events?:array<"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete">, Event?:"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete", Topic?:string}, QueueConfiguration?:array{Id?:string, Event?:"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete", Events?:array<"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete">, Queue?:string}, CloudFunctionConfiguration?:array{Id?:string, Event?:"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete", Events?:array<"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete">, CloudFunction?:string, InvocationRole?:string}}, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<void>
     */
    public function putBucketNotification(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", NotificationConfiguration:array{TopicConfiguration?:array{Id?:string, Events?:array<"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete">, Event?:"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete", Topic?:string}, QueueConfiguration?:array{Id?:string, Event?:"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete", Events?:array<"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete">, Queue?:string}, CloudFunctionConfiguration?:array{Id?:string, Event?:"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete", Events?:array<"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete">, CloudFunction?:string, InvocationRole?:string}}, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putBucketNotificationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, NotificationConfiguration:array{TopicConfigurations?:array<array{Id?:string, TopicArn:string, Events:array<"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete">, Filter?:array{Key?:array{FilterRules?:array<array{Name?:"prefix"|"suffix", Value?:string}>}}}>, QueueConfigurations?:array<array{Id?:string, QueueArn:string, Events:array<"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete">, Filter?:array{Key?:array{FilterRules?:array<array{Name?:"prefix"|"suffix", Value?:string}>}}}>, LambdaFunctionConfigurations?:array<array{Id?:string, LambdaFunctionArn:string, Events:array<"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete">, Filter?:array{Key?:array{FilterRules?:array<array{Name?:"prefix"|"suffix", Value?:string}>}}}>, EventBridgeConfiguration?:array{}}, ExpectedBucketOwner?:string, SkipDestinationValidation?:bool} $args
     * @return \AWS\Result<void>
     */
    public function putBucketNotificationConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, NotificationConfiguration:array{TopicConfigurations?:array<array{Id?:string, TopicArn:string, Events:array<"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete">, Filter?:array{Key?:array{FilterRules?:array<array{Name?:"prefix"|"suffix", Value?:string}>}}}>, QueueConfigurations?:array<array{Id?:string, QueueArn:string, Events:array<"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete">, Filter?:array{Key?:array{FilterRules?:array<array{Name?:"prefix"|"suffix", Value?:string}>}}}>, LambdaFunctionConfigurations?:array<array{Id?:string, LambdaFunctionArn:string, Events:array<"s3:ReducedRedundancyLostObject"|"s3:ObjectCreated:*"|"s3:ObjectCreated:Put"|"s3:ObjectCreated:Post"|"s3:ObjectCreated:Copy"|"s3:ObjectCreated:CompleteMultipartUpload"|"s3:ObjectRemoved:*"|"s3:ObjectRemoved:Delete"|"s3:ObjectRemoved:DeleteMarkerCreated"|"s3:ObjectRestore:*"|"s3:ObjectRestore:Post"|"s3:ObjectRestore:Completed"|"s3:Replication:*"|"s3:Replication:OperationFailedReplication"|"s3:Replication:OperationNotTracked"|"s3:Replication:OperationMissedThreshold"|"s3:Replication:OperationReplicatedAfterThreshold"|"s3:ObjectRestore:Delete"|"s3:LifecycleTransition"|"s3:IntelligentTiering"|"s3:ObjectAcl:Put"|"s3:LifecycleExpiration:*"|"s3:LifecycleExpiration:Delete"|"s3:LifecycleExpiration:DeleteMarkerCreated"|"s3:ObjectTagging:*"|"s3:ObjectTagging:Put"|"s3:ObjectTagging:Delete">, Filter?:array{Key?:array{FilterRules?:array<array{Name?:"prefix"|"suffix", Value?:string}>}}}>, EventBridgeConfiguration?:array{}}, ExpectedBucketOwner?:string, SkipDestinationValidation?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putBucketNotificationConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ContentMD5?:string, ExpectedBucketOwner?:string, OwnershipControls:array{Rules:array<array{ObjectOwnership:"BucketOwnerPreferred"|"ObjectWriter"|"BucketOwnerEnforced"}>}} $args
     * @return \AWS\Result<void>
     */
    public function putBucketOwnershipControls(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ContentMD5?:string, ExpectedBucketOwner?:string, OwnershipControls:array{Rules:array<array{ObjectOwnership:"BucketOwnerPreferred"|"ObjectWriter"|"BucketOwnerEnforced"}>}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putBucketOwnershipControlsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", ConfirmRemoveSelfBucketAccess?:bool, Policy:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<void>
     */
    public function putBucketPolicy(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", ConfirmRemoveSelfBucketAccess?:bool, Policy:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putBucketPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", ReplicationConfiguration:array{Role:string, Rules:array<array{ID?:string, Priority?:int, Prefix?:string, Filter?:array{Prefix?:string, Tag?:array{Key:string, Value:string}, And?:array{Prefix?:string, Tags?:array<array{Key:string, Value:string}>}}, Status:"Enabled"|"Disabled", SourceSelectionCriteria?:array{SseKmsEncryptedObjects?:array{Status:"Enabled"|"Disabled"}, ReplicaModifications?:array{Status:"Enabled"|"Disabled"}}, ExistingObjectReplication?:array{Status:"Enabled"|"Disabled"}, Destination:array{Bucket:string, Account?:string, StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"|"SNOW"|"EXPRESS_ONEZONE", AccessControlTranslation?:array{Owner:"Destination"}, EncryptionConfiguration?:array{ReplicaKmsKeyID?:string}, ReplicationTime?:array{Status:"Enabled"|"Disabled", Time:array{Minutes?:int}}, Metrics?:array{Status:"Enabled"|"Disabled", EventThreshold?:array{Minutes?:int}}}, DeleteMarkerReplication?:array{Status?:"Enabled"|"Disabled"}}>}, Token?:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<void>
     */
    public function putBucketReplication(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", ReplicationConfiguration:array{Role:string, Rules:array<array{ID?:string, Priority?:int, Prefix?:string, Filter?:array{Prefix?:string, Tag?:array{Key:string, Value:string}, And?:array{Prefix?:string, Tags?:array<array{Key:string, Value:string}>}}, Status:"Enabled"|"Disabled", SourceSelectionCriteria?:array{SseKmsEncryptedObjects?:array{Status:"Enabled"|"Disabled"}, ReplicaModifications?:array{Status:"Enabled"|"Disabled"}}, ExistingObjectReplication?:array{Status:"Enabled"|"Disabled"}, Destination:array{Bucket:string, Account?:string, StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"|"SNOW"|"EXPRESS_ONEZONE", AccessControlTranslation?:array{Owner:"Destination"}, EncryptionConfiguration?:array{ReplicaKmsKeyID?:string}, ReplicationTime?:array{Status:"Enabled"|"Disabled", Time:array{Minutes?:int}}, Metrics?:array{Status:"Enabled"|"Disabled", EventThreshold?:array{Minutes?:int}}}, DeleteMarkerReplication?:array{Status?:"Enabled"|"Disabled"}}>}, Token?:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putBucketReplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", RequestPaymentConfiguration:array{Payer:"Requester"|"BucketOwner"}, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<void>
     */
    public function putBucketRequestPayment(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", RequestPaymentConfiguration:array{Payer:"Requester"|"BucketOwner"}, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putBucketRequestPaymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", Tagging:array{TagSet:array<array{Key:string, Value:string}>}, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<void>
     */
    public function putBucketTagging(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", Tagging:array{TagSet:array<array{Key:string, Value:string}>}, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putBucketTaggingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", MFA?:string, VersioningConfiguration:array{MFADelete?:"Enabled"|"Disabled", Status?:"Enabled"|"Suspended"}, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<void>
     */
    public function putBucketVersioning(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", MFA?:string, VersioningConfiguration:array{MFADelete?:"Enabled"|"Disabled", Status?:"Enabled"|"Suspended"}, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putBucketVersioningAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", WebsiteConfiguration:array{ErrorDocument?:array{Key:string}, IndexDocument?:array{Suffix:string}, RedirectAllRequestsTo?:array{HostName:string, Protocol?:"http"|"https"}, RoutingRules?:array<array{Condition?:array{HttpErrorCodeReturnedEquals?:string, KeyPrefixEquals?:string}, Redirect:array{HostName?:string, HttpRedirectCode?:string, Protocol?:"http"|"https", ReplaceKeyPrefixWith?:string, ReplaceKeyWith?:string}}>}, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<void>
     */
    public function putBucketWebsite(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", WebsiteConfiguration:array{ErrorDocument?:array{Key:string}, IndexDocument?:array{Suffix:string}, RedirectAllRequestsTo?:array{HostName:string, Protocol?:"http"|"https"}, RoutingRules?:array<array{Condition?:array{HttpErrorCodeReturnedEquals?:string, KeyPrefixEquals?:string}, Redirect:array{HostName?:string, HttpRedirectCode?:string, Protocol?:"http"|"https", ReplaceKeyPrefixWith?:string, ReplaceKeyWith?:string}}>}, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putBucketWebsiteAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ACL?:"private"|"public-read"|"public-read-write"|"authenticated-read"|"aws-exec-read"|"bucket-owner-read"|"bucket-owner-full-control", Body?:string|resource|\Psr\Http\Message\StreamInterface, Bucket:string, CacheControl?:string, ContentDisposition?:string, ContentEncoding?:string, ContentLanguage?:string, ContentLength?:int, ContentMD5?:string, ContentType?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", ChecksumCRC32?:string, ChecksumCRC32C?:string, ChecksumCRC64NVME?:string, ChecksumSHA1?:string, ChecksumSHA256?:string, Expires?:int|string|\DateTimeInterface, IfMatch?:string, IfNoneMatch?:string, GrantFullControl?:string, GrantRead?:string, GrantReadACP?:string, GrantWriteACP?:string, Key:string, WriteOffsetBytes?:int, Metadata?:array<string, string>, ServerSideEncryption?:"AES256"|"aws:kms"|"aws:kms:dsse", StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"|"SNOW"|"EXPRESS_ONEZONE", WebsiteRedirectLocation?:string, SSECustomerAlgorithm?:string, SSECustomerKey?:string, SSECustomerKeyMD5?:string, SSEKMSKeyId?:string, SSEKMSEncryptionContext?:string, BucketKeyEnabled?:bool, RequestPayer?:"requester", Tagging?:string, ObjectLockMode?:"GOVERNANCE"|"COMPLIANCE", ObjectLockRetainUntilDate?:int|string|\DateTimeInterface, ObjectLockLegalHoldStatus?:"ON"|"OFF", ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{Expiration?:string, ETag?:string, ChecksumCRC32?:string, ChecksumCRC32C?:string, ChecksumCRC64NVME?:string, ChecksumSHA1?:string, ChecksumSHA256?:string, ChecksumType?:"COMPOSITE"|"FULL_OBJECT", ServerSideEncryption?:"AES256"|"aws:kms"|"aws:kms:dsse", VersionId?:string, SSECustomerAlgorithm?:string, SSECustomerKeyMD5?:string, SSEKMSKeyId?:string, SSEKMSEncryptionContext?:string, BucketKeyEnabled?:bool, Size?:int, RequestCharged?:"requester"}>
     */
    public function putObject(array $args): \AWS\Result { }

    /**
     * @param array{ACL?:"private"|"public-read"|"public-read-write"|"authenticated-read"|"aws-exec-read"|"bucket-owner-read"|"bucket-owner-full-control", Body?:string|resource|\Psr\Http\Message\StreamInterface, Bucket:string, CacheControl?:string, ContentDisposition?:string, ContentEncoding?:string, ContentLanguage?:string, ContentLength?:int, ContentMD5?:string, ContentType?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", ChecksumCRC32?:string, ChecksumCRC32C?:string, ChecksumCRC64NVME?:string, ChecksumSHA1?:string, ChecksumSHA256?:string, Expires?:int|string|\DateTimeInterface, IfMatch?:string, IfNoneMatch?:string, GrantFullControl?:string, GrantRead?:string, GrantReadACP?:string, GrantWriteACP?:string, Key:string, WriteOffsetBytes?:int, Metadata?:array<string, string>, ServerSideEncryption?:"AES256"|"aws:kms"|"aws:kms:dsse", StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"|"SNOW"|"EXPRESS_ONEZONE", WebsiteRedirectLocation?:string, SSECustomerAlgorithm?:string, SSECustomerKey?:string, SSECustomerKeyMD5?:string, SSEKMSKeyId?:string, SSEKMSEncryptionContext?:string, BucketKeyEnabled?:bool, RequestPayer?:"requester", Tagging?:string, ObjectLockMode?:"GOVERNANCE"|"COMPLIANCE", ObjectLockRetainUntilDate?:int|string|\DateTimeInterface, ObjectLockLegalHoldStatus?:"ON"|"OFF", ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Expiration?:string, ETag?:string, ChecksumCRC32?:string, ChecksumCRC32C?:string, ChecksumCRC64NVME?:string, ChecksumSHA1?:string, ChecksumSHA256?:string, ChecksumType?:"COMPOSITE"|"FULL_OBJECT", ServerSideEncryption?:"AES256"|"aws:kms"|"aws:kms:dsse", VersionId?:string, SSECustomerAlgorithm?:string, SSECustomerKeyMD5?:string, SSEKMSKeyId?:string, SSEKMSEncryptionContext?:string, BucketKeyEnabled?:bool, Size?:int, RequestCharged?:"requester"}>
     */
    public function putObjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ACL?:"private"|"public-read"|"public-read-write"|"authenticated-read"|"aws-exec-read"|"bucket-owner-read"|"bucket-owner-full-control", AccessControlPolicy?:array{Grants?:array<array{Grantee?:array{DisplayName?:string, EmailAddress?:string, ID?:string, Type:"CanonicalUser"|"AmazonCustomerByEmail"|"Group", URI?:string}, Permission?:"FULL_CONTROL"|"WRITE"|"WRITE_ACP"|"READ"|"READ_ACP"}>, Owner?:array{DisplayName?:string, ID?:string}}, Bucket:string, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", GrantFullControl?:string, GrantRead?:string, GrantReadACP?:string, GrantWrite?:string, GrantWriteACP?:string, Key:string, RequestPayer?:"requester", VersionId?:string, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{RequestCharged?:"requester"}>
     */
    public function putObjectAcl(array $args): \AWS\Result { }

    /**
     * @param array{ACL?:"private"|"public-read"|"public-read-write"|"authenticated-read"|"aws-exec-read"|"bucket-owner-read"|"bucket-owner-full-control", AccessControlPolicy?:array{Grants?:array<array{Grantee?:array{DisplayName?:string, EmailAddress?:string, ID?:string, Type:"CanonicalUser"|"AmazonCustomerByEmail"|"Group", URI?:string}, Permission?:"FULL_CONTROL"|"WRITE"|"WRITE_ACP"|"READ"|"READ_ACP"}>, Owner?:array{DisplayName?:string, ID?:string}}, Bucket:string, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", GrantFullControl?:string, GrantRead?:string, GrantReadACP?:string, GrantWrite?:string, GrantWriteACP?:string, Key:string, RequestPayer?:"requester", VersionId?:string, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RequestCharged?:"requester"}>
     */
    public function putObjectAclAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, Key:string, LegalHold?:array{Status?:"ON"|"OFF"}, RequestPayer?:"requester", VersionId?:string, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{RequestCharged?:"requester"}>
     */
    public function putObjectLegalHold(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, Key:string, LegalHold?:array{Status?:"ON"|"OFF"}, RequestPayer?:"requester", VersionId?:string, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RequestCharged?:"requester"}>
     */
    public function putObjectLegalHoldAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ObjectLockConfiguration?:array{ObjectLockEnabled?:"Enabled", Rule?:array{DefaultRetention?:array{Mode?:"GOVERNANCE"|"COMPLIANCE", Days?:int, Years?:int}}}, RequestPayer?:"requester", Token?:string, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{RequestCharged?:"requester"}>
     */
    public function putObjectLockConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ObjectLockConfiguration?:array{ObjectLockEnabled?:"Enabled", Rule?:array{DefaultRetention?:array{Mode?:"GOVERNANCE"|"COMPLIANCE", Days?:int, Years?:int}}}, RequestPayer?:"requester", Token?:string, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RequestCharged?:"requester"}>
     */
    public function putObjectLockConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, Key:string, Retention?:array{Mode?:"GOVERNANCE"|"COMPLIANCE", RetainUntilDate?:int|string|\DateTimeInterface}, RequestPayer?:"requester", VersionId?:string, BypassGovernanceRetention?:bool, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{RequestCharged?:"requester"}>
     */
    public function putObjectRetention(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, Key:string, Retention?:array{Mode?:"GOVERNANCE"|"COMPLIANCE", RetainUntilDate?:int|string|\DateTimeInterface}, RequestPayer?:"requester", VersionId?:string, BypassGovernanceRetention?:bool, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RequestCharged?:"requester"}>
     */
    public function putObjectRetentionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, Key:string, VersionId?:string, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", Tagging:array{TagSet:array<array{Key:string, Value:string}>}, ExpectedBucketOwner?:string, RequestPayer?:"requester"} $args
     * @return \AWS\Result<array{VersionId?:string}>
     */
    public function putObjectTagging(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, Key:string, VersionId?:string, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", Tagging:array{TagSet:array<array{Key:string, Value:string}>}, ExpectedBucketOwner?:string, RequestPayer?:"requester"} $args
     * @return \GuzzleHttp\Promise\Promise<array{VersionId?:string}>
     */
    public function putObjectTaggingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", PublicAccessBlockConfiguration:array{BlockPublicAcls?:bool, IgnorePublicAcls?:bool, BlockPublicPolicy?:bool, RestrictPublicBuckets?:bool}, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<void>
     */
    public function putPublicAccessBlock(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", PublicAccessBlockConfiguration:array{BlockPublicAcls?:bool, IgnorePublicAcls?:bool, BlockPublicPolicy?:bool, RestrictPublicBuckets?:bool}, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putPublicAccessBlockAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, Key:string, VersionId?:string, RestoreRequest?:array{Days?:int, GlacierJobParameters?:array{Tier:"Standard"|"Bulk"|"Expedited"}, Type?:"SELECT", Tier?:"Standard"|"Bulk"|"Expedited", Description?:string, SelectParameters?:array{InputSerialization:array{CSV?:array{FileHeaderInfo?:"USE"|"IGNORE"|"NONE", Comments?:string, QuoteEscapeCharacter?:string, RecordDelimiter?:string, FieldDelimiter?:string, QuoteCharacter?:string, AllowQuotedRecordDelimiter?:bool}, CompressionType?:"NONE"|"GZIP"|"BZIP2", JSON?:array{Type?:"DOCUMENT"|"LINES"}, Parquet?:array{}}, ExpressionType:"SQL", Expression:string, OutputSerialization:array{CSV?:array{QuoteFields?:"ALWAYS"|"ASNEEDED", QuoteEscapeCharacter?:string, RecordDelimiter?:string, FieldDelimiter?:string, QuoteCharacter?:string}, JSON?:array{RecordDelimiter?:string}}}, OutputLocation?:array{S3?:array{BucketName:string, Prefix:string, Encryption?:array{EncryptionType:"AES256"|"aws:kms"|"aws:kms:dsse", KMSKeyId?:string, KMSContext?:string}, CannedACL?:"private"|"public-read"|"public-read-write"|"authenticated-read"|"aws-exec-read"|"bucket-owner-read"|"bucket-owner-full-control", AccessControlList?:array<array{Grantee?:array{DisplayName?:string, EmailAddress?:string, ID?:string, Type:"CanonicalUser"|"AmazonCustomerByEmail"|"Group", URI?:string}, Permission?:"FULL_CONTROL"|"WRITE"|"WRITE_ACP"|"READ"|"READ_ACP"}>, Tagging?:array{TagSet:array<array{Key:string, Value:string}>}, UserMetadata?:array<array{Name?:string, Value?:string}>, StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"|"SNOW"|"EXPRESS_ONEZONE"}}}, RequestPayer?:"requester", ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{RequestCharged?:"requester", RestoreOutputPath?:string}>
     */
    public function restoreObject(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, Key:string, VersionId?:string, RestoreRequest?:array{Days?:int, GlacierJobParameters?:array{Tier:"Standard"|"Bulk"|"Expedited"}, Type?:"SELECT", Tier?:"Standard"|"Bulk"|"Expedited", Description?:string, SelectParameters?:array{InputSerialization:array{CSV?:array{FileHeaderInfo?:"USE"|"IGNORE"|"NONE", Comments?:string, QuoteEscapeCharacter?:string, RecordDelimiter?:string, FieldDelimiter?:string, QuoteCharacter?:string, AllowQuotedRecordDelimiter?:bool}, CompressionType?:"NONE"|"GZIP"|"BZIP2", JSON?:array{Type?:"DOCUMENT"|"LINES"}, Parquet?:array{}}, ExpressionType:"SQL", Expression:string, OutputSerialization:array{CSV?:array{QuoteFields?:"ALWAYS"|"ASNEEDED", QuoteEscapeCharacter?:string, RecordDelimiter?:string, FieldDelimiter?:string, QuoteCharacter?:string}, JSON?:array{RecordDelimiter?:string}}}, OutputLocation?:array{S3?:array{BucketName:string, Prefix:string, Encryption?:array{EncryptionType:"AES256"|"aws:kms"|"aws:kms:dsse", KMSKeyId?:string, KMSContext?:string}, CannedACL?:"private"|"public-read"|"public-read-write"|"authenticated-read"|"aws-exec-read"|"bucket-owner-read"|"bucket-owner-full-control", AccessControlList?:array<array{Grantee?:array{DisplayName?:string, EmailAddress?:string, ID?:string, Type:"CanonicalUser"|"AmazonCustomerByEmail"|"Group", URI?:string}, Permission?:"FULL_CONTROL"|"WRITE"|"WRITE_ACP"|"READ"|"READ_ACP"}>, Tagging?:array{TagSet:array<array{Key:string, Value:string}>}, UserMetadata?:array<array{Name?:string, Value?:string}>, StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"|"SNOW"|"EXPRESS_ONEZONE"}}}, RequestPayer?:"requester", ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RequestCharged?:"requester", RestoreOutputPath?:string}>
     */
    public function restoreObjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, Key:string, SSECustomerAlgorithm?:string, SSECustomerKey?:string, SSECustomerKeyMD5?:string, Expression:string, ExpressionType:"SQL", RequestProgress?:array{Enabled?:bool}, InputSerialization:array{CSV?:array{FileHeaderInfo?:"USE"|"IGNORE"|"NONE", Comments?:string, QuoteEscapeCharacter?:string, RecordDelimiter?:string, FieldDelimiter?:string, QuoteCharacter?:string, AllowQuotedRecordDelimiter?:bool}, CompressionType?:"NONE"|"GZIP"|"BZIP2", JSON?:array{Type?:"DOCUMENT"|"LINES"}, Parquet?:array{}}, OutputSerialization:array{CSV?:array{QuoteFields?:"ALWAYS"|"ASNEEDED", QuoteEscapeCharacter?:string, RecordDelimiter?:string, FieldDelimiter?:string, QuoteCharacter?:string}, JSON?:array{RecordDelimiter?:string}}, ScanRange?:array{Start?:int, End?:int}, ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{Payload?:array{Records?:array{Payload?:mixed}, Stats?:array{Details?:array{BytesScanned?:int, BytesProcessed?:int, BytesReturned?:int}}, Progress?:array{Details?:array{BytesScanned?:int, BytesProcessed?:int, BytesReturned?:int}}, Cont?:array{}, End?:array{}}}>
     */
    public function selectObjectContent(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, Key:string, SSECustomerAlgorithm?:string, SSECustomerKey?:string, SSECustomerKeyMD5?:string, Expression:string, ExpressionType:"SQL", RequestProgress?:array{Enabled?:bool}, InputSerialization:array{CSV?:array{FileHeaderInfo?:"USE"|"IGNORE"|"NONE", Comments?:string, QuoteEscapeCharacter?:string, RecordDelimiter?:string, FieldDelimiter?:string, QuoteCharacter?:string, AllowQuotedRecordDelimiter?:bool}, CompressionType?:"NONE"|"GZIP"|"BZIP2", JSON?:array{Type?:"DOCUMENT"|"LINES"}, Parquet?:array{}}, OutputSerialization:array{CSV?:array{QuoteFields?:"ALWAYS"|"ASNEEDED", QuoteEscapeCharacter?:string, RecordDelimiter?:string, FieldDelimiter?:string, QuoteCharacter?:string}, JSON?:array{RecordDelimiter?:string}}, ScanRange?:array{Start?:int, End?:int}, ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Payload?:array{Records?:array{Payload?:mixed}, Stats?:array{Details?:array{BytesScanned?:int, BytesProcessed?:int, BytesReturned?:int}}, Progress?:array{Details?:array{BytesScanned?:int, BytesProcessed?:int, BytesReturned?:int}}, Cont?:array{}, End?:array{}}}>
     */
    public function selectObjectContentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Body?:string|resource|\Psr\Http\Message\StreamInterface, Bucket:string, ContentLength?:int, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", ChecksumCRC32?:string, ChecksumCRC32C?:string, ChecksumCRC64NVME?:string, ChecksumSHA1?:string, ChecksumSHA256?:string, Key:string, PartNumber:int, UploadId:string, SSECustomerAlgorithm?:string, SSECustomerKey?:string, SSECustomerKeyMD5?:string, RequestPayer?:"requester", ExpectedBucketOwner?:string} $args
     * @return \AWS\Result<array{ServerSideEncryption?:"AES256"|"aws:kms"|"aws:kms:dsse", ETag?:string, ChecksumCRC32?:string, ChecksumCRC32C?:string, ChecksumCRC64NVME?:string, ChecksumSHA1?:string, ChecksumSHA256?:string, SSECustomerAlgorithm?:string, SSECustomerKeyMD5?:string, SSEKMSKeyId?:string, BucketKeyEnabled?:bool, RequestCharged?:"requester"}>
     */
    public function uploadPart(array $args): \AWS\Result { }

    /**
     * @param array{Body?:string|resource|\Psr\Http\Message\StreamInterface, Bucket:string, ContentLength?:int, ContentMD5?:string, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME", ChecksumCRC32?:string, ChecksumCRC32C?:string, ChecksumCRC64NVME?:string, ChecksumSHA1?:string, ChecksumSHA256?:string, Key:string, PartNumber:int, UploadId:string, SSECustomerAlgorithm?:string, SSECustomerKey?:string, SSECustomerKeyMD5?:string, RequestPayer?:"requester", ExpectedBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServerSideEncryption?:"AES256"|"aws:kms"|"aws:kms:dsse", ETag?:string, ChecksumCRC32?:string, ChecksumCRC32C?:string, ChecksumCRC64NVME?:string, ChecksumSHA1?:string, ChecksumSHA256?:string, SSECustomerAlgorithm?:string, SSECustomerKeyMD5?:string, SSEKMSKeyId?:string, BucketKeyEnabled?:bool, RequestCharged?:"requester"}>
     */
    public function uploadPartAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Bucket:string, CopySource:string, CopySourceIfMatch?:string, CopySourceIfModifiedSince?:int|string|\DateTimeInterface, CopySourceIfNoneMatch?:string, CopySourceIfUnmodifiedSince?:int|string|\DateTimeInterface, CopySourceRange?:string, Key:string, PartNumber:int, UploadId:string, SSECustomerAlgorithm?:string, SSECustomerKey?:string, SSECustomerKeyMD5?:string, CopySourceSSECustomerAlgorithm?:string, CopySourceSSECustomerKey?:string, CopySourceSSECustomerKeyMD5?:string, RequestPayer?:"requester", ExpectedBucketOwner?:string, ExpectedSourceBucketOwner?:string} $args
     * @return \AWS\Result<array{CopySourceVersionId?:string, CopyPartResult?:array{ETag?:string, LastModified?:int|string|\DateTimeInterface, ChecksumCRC32?:string, ChecksumCRC32C?:string, ChecksumCRC64NVME?:string, ChecksumSHA1?:string, ChecksumSHA256?:string}, ServerSideEncryption?:"AES256"|"aws:kms"|"aws:kms:dsse", SSECustomerAlgorithm?:string, SSECustomerKeyMD5?:string, SSEKMSKeyId?:string, BucketKeyEnabled?:bool, RequestCharged?:"requester"}>
     */
    public function uploadPartCopy(array $args): \AWS\Result { }

    /**
     * @param array{Bucket:string, CopySource:string, CopySourceIfMatch?:string, CopySourceIfModifiedSince?:int|string|\DateTimeInterface, CopySourceIfNoneMatch?:string, CopySourceIfUnmodifiedSince?:int|string|\DateTimeInterface, CopySourceRange?:string, Key:string, PartNumber:int, UploadId:string, SSECustomerAlgorithm?:string, SSECustomerKey?:string, SSECustomerKeyMD5?:string, CopySourceSSECustomerAlgorithm?:string, CopySourceSSECustomerKey?:string, CopySourceSSECustomerKeyMD5?:string, RequestPayer?:"requester", ExpectedBucketOwner?:string, ExpectedSourceBucketOwner?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CopySourceVersionId?:string, CopyPartResult?:array{ETag?:string, LastModified?:int|string|\DateTimeInterface, ChecksumCRC32?:string, ChecksumCRC32C?:string, ChecksumCRC64NVME?:string, ChecksumSHA1?:string, ChecksumSHA256?:string}, ServerSideEncryption?:"AES256"|"aws:kms"|"aws:kms:dsse", SSECustomerAlgorithm?:string, SSECustomerKeyMD5?:string, SSEKMSKeyId?:string, BucketKeyEnabled?:bool, RequestCharged?:"requester"}>
     */
    public function uploadPartCopyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RequestRoute:string, RequestToken:string, Body?:string|resource|\Psr\Http\Message\StreamInterface, StatusCode?:int, ErrorCode?:string, ErrorMessage?:string, AcceptRanges?:string, CacheControl?:string, ContentDisposition?:string, ContentEncoding?:string, ContentLanguage?:string, ContentLength?:int, ContentRange?:string, ContentType?:string, ChecksumCRC32?:string, ChecksumCRC32C?:string, ChecksumCRC64NVME?:string, ChecksumSHA1?:string, ChecksumSHA256?:string, DeleteMarker?:bool, ETag?:string, Expires?:int|string|\DateTimeInterface, Expiration?:string, LastModified?:int|string|\DateTimeInterface, MissingMeta?:int, Metadata?:array<string, string>, ObjectLockMode?:"GOVERNANCE"|"COMPLIANCE", ObjectLockLegalHoldStatus?:"ON"|"OFF", ObjectLockRetainUntilDate?:int|string|\DateTimeInterface, PartsCount?:int, ReplicationStatus?:"COMPLETE"|"PENDING"|"FAILED"|"REPLICA"|"COMPLETED", RequestCharged?:"requester", Restore?:string, ServerSideEncryption?:"AES256"|"aws:kms"|"aws:kms:dsse", SSECustomerAlgorithm?:string, SSEKMSKeyId?:string, SSECustomerKeyMD5?:string, StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"|"SNOW"|"EXPRESS_ONEZONE", TagCount?:int, VersionId?:string, BucketKeyEnabled?:bool} $args
     * @return \AWS\Result<void>
     */
    public function writeGetObjectResponse(array $args): \AWS\Result { }

    /**
     * @param array{RequestRoute:string, RequestToken:string, Body?:string|resource|\Psr\Http\Message\StreamInterface, StatusCode?:int, ErrorCode?:string, ErrorMessage?:string, AcceptRanges?:string, CacheControl?:string, ContentDisposition?:string, ContentEncoding?:string, ContentLanguage?:string, ContentLength?:int, ContentRange?:string, ContentType?:string, ChecksumCRC32?:string, ChecksumCRC32C?:string, ChecksumCRC64NVME?:string, ChecksumSHA1?:string, ChecksumSHA256?:string, DeleteMarker?:bool, ETag?:string, Expires?:int|string|\DateTimeInterface, Expiration?:string, LastModified?:int|string|\DateTimeInterface, MissingMeta?:int, Metadata?:array<string, string>, ObjectLockMode?:"GOVERNANCE"|"COMPLIANCE", ObjectLockLegalHoldStatus?:"ON"|"OFF", ObjectLockRetainUntilDate?:int|string|\DateTimeInterface, PartsCount?:int, ReplicationStatus?:"COMPLETE"|"PENDING"|"FAILED"|"REPLICA"|"COMPLETED", RequestCharged?:"requester", Restore?:string, ServerSideEncryption?:"AES256"|"aws:kms"|"aws:kms:dsse", SSECustomerAlgorithm?:string, SSEKMSKeyId?:string, SSECustomerKeyMD5?:string, StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"|"SNOW"|"EXPRESS_ONEZONE", TagCount?:int, VersionId?:string, BucketKeyEnabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function writeGetObjectResponseAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
