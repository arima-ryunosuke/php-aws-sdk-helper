<?php
namespace AWS\CognitoSync;

class CognitoSyncClient
{
    /**
     * @param array{IdentityPoolId:string} $args
     * @return \AWS\Result<array{IdentityPoolId?:string}>
     */
    public function bulkPublish(array $args): \AWS\Result { }

    /**
     * @param array{IdentityPoolId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityPoolId?:string}>
     */
    public function bulkPublishAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityPoolId:string, IdentityId:string, DatasetName:string} $args
     * @return \AWS\Result<array{Dataset?:array{IdentityId?:string, DatasetName?:string, CreationDate?:int|string|\DateTimeInterface, LastModifiedDate?:int|string|\DateTimeInterface, LastModifiedBy?:string, DataStorage?:int, NumRecords?:int}}>
     */
    public function deleteDataset(array $args): \AWS\Result { }

    /**
     * @param array{IdentityPoolId:string, IdentityId:string, DatasetName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Dataset?:array{IdentityId?:string, DatasetName?:string, CreationDate?:int|string|\DateTimeInterface, LastModifiedDate?:int|string|\DateTimeInterface, LastModifiedBy?:string, DataStorage?:int, NumRecords?:int}}>
     */
    public function deleteDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityPoolId:string, IdentityId:string, DatasetName:string} $args
     * @return \AWS\Result<array{Dataset?:array{IdentityId?:string, DatasetName?:string, CreationDate?:int|string|\DateTimeInterface, LastModifiedDate?:int|string|\DateTimeInterface, LastModifiedBy?:string, DataStorage?:int, NumRecords?:int}}>
     */
    public function describeDataset(array $args): \AWS\Result { }

    /**
     * @param array{IdentityPoolId:string, IdentityId:string, DatasetName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Dataset?:array{IdentityId?:string, DatasetName?:string, CreationDate?:int|string|\DateTimeInterface, LastModifiedDate?:int|string|\DateTimeInterface, LastModifiedBy?:string, DataStorage?:int, NumRecords?:int}}>
     */
    public function describeDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityPoolId:string} $args
     * @return \AWS\Result<array{IdentityPoolUsage?:array{IdentityPoolId?:string, SyncSessionsCount?:int, DataStorage?:int, LastModifiedDate?:int|string|\DateTimeInterface}}>
     */
    public function describeIdentityPoolUsage(array $args): \AWS\Result { }

    /**
     * @param array{IdentityPoolId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityPoolUsage?:array{IdentityPoolId?:string, SyncSessionsCount?:int, DataStorage?:int, LastModifiedDate?:int|string|\DateTimeInterface}}>
     */
    public function describeIdentityPoolUsageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityPoolId:string, IdentityId:string} $args
     * @return \AWS\Result<array{IdentityUsage?:array{IdentityId?:string, IdentityPoolId?:string, LastModifiedDate?:int|string|\DateTimeInterface, DatasetCount?:int, DataStorage?:int}}>
     */
    public function describeIdentityUsage(array $args): \AWS\Result { }

    /**
     * @param array{IdentityPoolId:string, IdentityId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityUsage?:array{IdentityId?:string, IdentityPoolId?:string, LastModifiedDate?:int|string|\DateTimeInterface, DatasetCount?:int, DataStorage?:int}}>
     */
    public function describeIdentityUsageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityPoolId:string} $args
     * @return \AWS\Result<array{IdentityPoolId?:string, BulkPublishStartTime?:int|string|\DateTimeInterface, BulkPublishCompleteTime?:int|string|\DateTimeInterface, BulkPublishStatus?:"NOT_STARTED"|"IN_PROGRESS"|"FAILED"|"SUCCEEDED", FailureMessage?:string}>
     */
    public function getBulkPublishDetails(array $args): \AWS\Result { }

    /**
     * @param array{IdentityPoolId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityPoolId?:string, BulkPublishStartTime?:int|string|\DateTimeInterface, BulkPublishCompleteTime?:int|string|\DateTimeInterface, BulkPublishStatus?:"NOT_STARTED"|"IN_PROGRESS"|"FAILED"|"SUCCEEDED", FailureMessage?:string}>
     */
    public function getBulkPublishDetailsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityPoolId:string} $args
     * @return \AWS\Result<array{Events?:array<string, string>}>
     */
    public function getCognitoEvents(array $args): \AWS\Result { }

    /**
     * @param array{IdentityPoolId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Events?:array<string, string>}>
     */
    public function getCognitoEventsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityPoolId:string} $args
     * @return \AWS\Result<array{IdentityPoolId?:string, PushSync?:array{ApplicationArns?:array<string>, RoleArn?:string}, CognitoStreams?:array{StreamName?:string, RoleArn?:string, StreamingStatus?:"ENABLED"|"DISABLED"}}>
     */
    public function getIdentityPoolConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{IdentityPoolId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityPoolId?:string, PushSync?:array{ApplicationArns?:array<string>, RoleArn?:string}, CognitoStreams?:array{StreamName?:string, RoleArn?:string, StreamingStatus?:"ENABLED"|"DISABLED"}}>
     */
    public function getIdentityPoolConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityPoolId:string, IdentityId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Datasets?:array<array{IdentityId?:string, DatasetName?:string, CreationDate?:int|string|\DateTimeInterface, LastModifiedDate?:int|string|\DateTimeInterface, LastModifiedBy?:string, DataStorage?:int, NumRecords?:int}>, Count?:int, NextToken?:string}>
     */
    public function listDatasets(array $args): \AWS\Result { }

    /**
     * @param array{IdentityPoolId:string, IdentityId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Datasets?:array<array{IdentityId?:string, DatasetName?:string, CreationDate?:int|string|\DateTimeInterface, LastModifiedDate?:int|string|\DateTimeInterface, LastModifiedBy?:string, DataStorage?:int, NumRecords?:int}>, Count?:int, NextToken?:string}>
     */
    public function listDatasetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{IdentityPoolUsages?:array<array{IdentityPoolId?:string, SyncSessionsCount?:int, DataStorage?:int, LastModifiedDate?:int|string|\DateTimeInterface}>, MaxResults?:int, Count?:int, NextToken?:string}>
     */
    public function listIdentityPoolUsage(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityPoolUsages?:array<array{IdentityPoolId?:string, SyncSessionsCount?:int, DataStorage?:int, LastModifiedDate?:int|string|\DateTimeInterface}>, MaxResults?:int, Count?:int, NextToken?:string}>
     */
    public function listIdentityPoolUsageAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityPoolId:string, IdentityId:string, DatasetName:string, LastSyncCount?:int, NextToken?:string, MaxResults?:int, SyncSessionToken?:string} $args
     * @return \AWS\Result<array{Records?:array<array{Key?:string, Value?:string, SyncCount?:int, LastModifiedDate?:int|string|\DateTimeInterface, LastModifiedBy?:string, DeviceLastModifiedDate?:int|string|\DateTimeInterface}>, NextToken?:string, Count?:int, DatasetSyncCount?:int, LastModifiedBy?:string, MergedDatasetNames?:array<string>, DatasetExists?:bool, DatasetDeletedAfterRequestedSyncCount?:bool, SyncSessionToken?:string}>
     */
    public function listRecords(array $args): \AWS\Result { }

    /**
     * @param array{IdentityPoolId:string, IdentityId:string, DatasetName:string, LastSyncCount?:int, NextToken?:string, MaxResults?:int, SyncSessionToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Records?:array<array{Key?:string, Value?:string, SyncCount?:int, LastModifiedDate?:int|string|\DateTimeInterface, LastModifiedBy?:string, DeviceLastModifiedDate?:int|string|\DateTimeInterface}>, NextToken?:string, Count?:int, DatasetSyncCount?:int, LastModifiedBy?:string, MergedDatasetNames?:array<string>, DatasetExists?:bool, DatasetDeletedAfterRequestedSyncCount?:bool, SyncSessionToken?:string}>
     */
    public function listRecordsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityPoolId:string, IdentityId:string, Platform:"APNS"|"APNS_SANDBOX"|"GCM"|"ADM", Token:string} $args
     * @return \AWS\Result<array{DeviceId?:string}>
     */
    public function registerDevice(array $args): \AWS\Result { }

    /**
     * @param array{IdentityPoolId:string, IdentityId:string, Platform:"APNS"|"APNS_SANDBOX"|"GCM"|"ADM", Token:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DeviceId?:string}>
     */
    public function registerDeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityPoolId:string, Events:array<string, string>} $args
     * @return \AWS\Result<void>
     */
    public function setCognitoEvents(array $args): \AWS\Result { }

    /**
     * @param array{IdentityPoolId:string, Events:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function setCognitoEventsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityPoolId:string, PushSync?:array{ApplicationArns?:array<string>, RoleArn?:string}, CognitoStreams?:array{StreamName?:string, RoleArn?:string, StreamingStatus?:"ENABLED"|"DISABLED"}} $args
     * @return \AWS\Result<array{IdentityPoolId?:string, PushSync?:array{ApplicationArns?:array<string>, RoleArn?:string}, CognitoStreams?:array{StreamName?:string, RoleArn?:string, StreamingStatus?:"ENABLED"|"DISABLED"}}>
     */
    public function setIdentityPoolConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{IdentityPoolId:string, PushSync?:array{ApplicationArns?:array<string>, RoleArn?:string}, CognitoStreams?:array{StreamName?:string, RoleArn?:string, StreamingStatus?:"ENABLED"|"DISABLED"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityPoolId?:string, PushSync?:array{ApplicationArns?:array<string>, RoleArn?:string}, CognitoStreams?:array{StreamName?:string, RoleArn?:string, StreamingStatus?:"ENABLED"|"DISABLED"}}>
     */
    public function setIdentityPoolConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityPoolId:string, IdentityId:string, DatasetName:string, DeviceId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function subscribeToDataset(array $args): \AWS\Result { }

    /**
     * @param array{IdentityPoolId:string, IdentityId:string, DatasetName:string, DeviceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function subscribeToDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityPoolId:string, IdentityId:string, DatasetName:string, DeviceId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function unsubscribeFromDataset(array $args): \AWS\Result { }

    /**
     * @param array{IdentityPoolId:string, IdentityId:string, DatasetName:string, DeviceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function unsubscribeFromDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityPoolId:string, IdentityId:string, DatasetName:string, DeviceId?:string, RecordPatches?:array<array{Op:"replace"|"remove", Key:string, Value?:string, SyncCount:int, DeviceLastModifiedDate?:int|string|\DateTimeInterface}>, SyncSessionToken:string, ClientContext?:string} $args
     * @return \AWS\Result<array{Records?:array<array{Key?:string, Value?:string, SyncCount?:int, LastModifiedDate?:int|string|\DateTimeInterface, LastModifiedBy?:string, DeviceLastModifiedDate?:int|string|\DateTimeInterface}>}>
     */
    public function updateRecords(array $args): \AWS\Result { }

    /**
     * @param array{IdentityPoolId:string, IdentityId:string, DatasetName:string, DeviceId?:string, RecordPatches?:array<array{Op:"replace"|"remove", Key:string, Value?:string, SyncCount:int, DeviceLastModifiedDate?:int|string|\DateTimeInterface}>, SyncSessionToken:string, ClientContext?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Records?:array<array{Key?:string, Value?:string, SyncCount?:int, LastModifiedDate?:int|string|\DateTimeInterface, LastModifiedBy?:string, DeviceLastModifiedDate?:int|string|\DateTimeInterface}>}>
     */
    public function updateRecordsAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
