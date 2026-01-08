<?php
namespace AWS\MediaStoreData;

class MediaStoreDataClient
{
    /**
     * @param array{Path:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteObject(array $args): \AWS\Result { }

    /**
     * @param array{Path:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteObjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Path:string} $args
     * @return \AWS\Result<array{ETag?:string, ContentType?:string, ContentLength?:int, CacheControl?:string, LastModified?:int|string|\DateTimeInterface}>
     */
    public function describeObject(array $args): \AWS\Result { }

    /**
     * @param array{Path:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ETag?:string, ContentType?:string, ContentLength?:int, CacheControl?:string, LastModified?:int|string|\DateTimeInterface}>
     */
    public function describeObjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Path:string, Range?:string} $args
     * @return \AWS\Result<array{Body?:string|resource|\Psr\Http\Message\StreamInterface, CacheControl?:string, ContentRange?:string, ContentLength?:int, ContentType?:string, ETag?:string, LastModified?:int|string|\DateTimeInterface, StatusCode:int}>
     */
    public function getObject(array $args): \AWS\Result { }

    /**
     * @param array{Path:string, Range?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Body?:string|resource|\Psr\Http\Message\StreamInterface, CacheControl?:string, ContentRange?:string, ContentLength?:int, ContentType?:string, ETag?:string, LastModified?:int|string|\DateTimeInterface, StatusCode:int}>
     */
    public function getObjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Path?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Items?:array<array{Name?:string, Type?:"OBJECT"|"FOLDER", ETag?:string, LastModified?:int|string|\DateTimeInterface, ContentType?:string, ContentLength?:int}>, NextToken?:string}>
     */
    public function listItems(array $args = []): \AWS\Result { }

    /**
     * @param array{Path?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{Name?:string, Type?:"OBJECT"|"FOLDER", ETag?:string, LastModified?:int|string|\DateTimeInterface, ContentType?:string, ContentLength?:int}>, NextToken?:string}>
     */
    public function listItemsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Body:string|resource|\Psr\Http\Message\StreamInterface, Path:string, ContentType?:string, CacheControl?:string, StorageClass?:"TEMPORAL", UploadAvailability?:"STANDARD"|"STREAMING"} $args
     * @return \AWS\Result<array{ContentSHA256?:string, ETag?:string, StorageClass?:"TEMPORAL"}>
     */
    public function putObject(array $args): \AWS\Result { }

    /**
     * @param array{Body:string|resource|\Psr\Http\Message\StreamInterface, Path:string, ContentType?:string, CacheControl?:string, StorageClass?:"TEMPORAL", UploadAvailability?:"STANDARD"|"STREAMING"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContentSHA256?:string, ETag?:string, StorageClass?:"TEMPORAL"}>
     */
    public function putObjectAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
