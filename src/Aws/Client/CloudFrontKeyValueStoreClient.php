<?php
namespace AWS\CloudFrontKeyValueStore;

class CloudFrontKeyValueStoreClient
{
    /**
     * @param array{KvsARN:string, Key:string, IfMatch:string} $args
     * @return \AWS\Result<array{ItemCount:int, TotalSizeInBytes:int, ETag:string}>
     */
    public function deleteKey(array $args): \AWS\Result { }

    /**
     * @param array{KvsARN:string, Key:string, IfMatch:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ItemCount:int, TotalSizeInBytes:int, ETag:string}>
     */
    public function deleteKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KvsARN:string} $args
     * @return \AWS\Result<array{ItemCount:int, TotalSizeInBytes:int, KvsARN:string, Created:int|string|\DateTimeInterface, ETag:string, LastModified?:int|string|\DateTimeInterface, Status?:string, FailureReason?:string}>
     */
    public function describeKeyValueStore(array $args): \AWS\Result { }

    /**
     * @param array{KvsARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ItemCount:int, TotalSizeInBytes:int, KvsARN:string, Created:int|string|\DateTimeInterface, ETag:string, LastModified?:int|string|\DateTimeInterface, Status?:string, FailureReason?:string}>
     */
    public function describeKeyValueStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KvsARN:string, Key:string} $args
     * @return \AWS\Result<array{Key:string, Value:string, ItemCount:int, TotalSizeInBytes:int}>
     */
    public function getKey(array $args): \AWS\Result { }

    /**
     * @param array{KvsARN:string, Key:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Key:string, Value:string, ItemCount:int, TotalSizeInBytes:int}>
     */
    public function getKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KvsARN:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, Items?:array<array{Key:string, Value:string}>}>
     */
    public function listKeys(array $args): \AWS\Result { }

    /**
     * @param array{KvsARN:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Items?:array<array{Key:string, Value:string}>}>
     */
    public function listKeysAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Key:string, Value:string, KvsARN:string, IfMatch:string} $args
     * @return \AWS\Result<array{ItemCount:int, TotalSizeInBytes:int, ETag:string}>
     */
    public function putKey(array $args): \AWS\Result { }

    /**
     * @param array{Key:string, Value:string, KvsARN:string, IfMatch:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ItemCount:int, TotalSizeInBytes:int, ETag:string}>
     */
    public function putKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KvsARN:string, IfMatch:string, Puts?:array<array{Key:string, Value:string}>, Deletes?:array<array{Key:string}>} $args
     * @return \AWS\Result<array{ItemCount:int, TotalSizeInBytes:int, ETag:string}>
     */
    public function updateKeys(array $args): \AWS\Result { }

    /**
     * @param array{KvsARN:string, IfMatch:string, Puts?:array<array{Key:string, Value:string}>, Deletes?:array<array{Key:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ItemCount:int, TotalSizeInBytes:int, ETag:string}>
     */
    public function updateKeysAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
