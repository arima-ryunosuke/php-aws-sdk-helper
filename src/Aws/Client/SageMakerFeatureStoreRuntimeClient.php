<?php
namespace AWS\SageMakerFeatureStoreRuntime;

class SageMakerFeatureStoreRuntimeClient
{
    /**
     * @param array{Identifiers:array<array{FeatureGroupName:string, RecordIdentifiersValueAsString:array<string>, FeatureNames?:array<string>}>, ExpirationTimeResponse?:"Enabled"|"Disabled"} $args
     * @return \AWS\Result<array{Records:array<array{FeatureGroupName:string, RecordIdentifierValueAsString:string, Record:array<array{FeatureName:string, ValueAsString?:string, ValueAsStringList?:array<string>}>, ExpiresAt?:string}>, Errors:array<array{FeatureGroupName:string, RecordIdentifierValueAsString:string, ErrorCode:string, ErrorMessage:string}>, UnprocessedIdentifiers:array<array{FeatureGroupName:string, RecordIdentifiersValueAsString:array<string>, FeatureNames?:array<string>}>}>
     */
    public function batchGetRecord(array $args): \AWS\Result { }

    /**
     * @param array{Identifiers:array<array{FeatureGroupName:string, RecordIdentifiersValueAsString:array<string>, FeatureNames?:array<string>}>, ExpirationTimeResponse?:"Enabled"|"Disabled"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Records:array<array{FeatureGroupName:string, RecordIdentifierValueAsString:string, Record:array<array{FeatureName:string, ValueAsString?:string, ValueAsStringList?:array<string>}>, ExpiresAt?:string}>, Errors:array<array{FeatureGroupName:string, RecordIdentifierValueAsString:string, ErrorCode:string, ErrorMessage:string}>, UnprocessedIdentifiers:array<array{FeatureGroupName:string, RecordIdentifiersValueAsString:array<string>, FeatureNames?:array<string>}>}>
     */
    public function batchGetRecordAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FeatureGroupName:string, RecordIdentifierValueAsString:string, EventTime:string, TargetStores?:array<"OnlineStore"|"OfflineStore">, DeletionMode?:"SoftDelete"|"HardDelete"} $args
     * @return \AWS\Result<void>
     */
    public function deleteRecord(array $args): \AWS\Result { }

    /**
     * @param array{FeatureGroupName:string, RecordIdentifierValueAsString:string, EventTime:string, TargetStores?:array<"OnlineStore"|"OfflineStore">, DeletionMode?:"SoftDelete"|"HardDelete"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteRecordAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FeatureGroupName:string, RecordIdentifierValueAsString:string, FeatureNames?:array<string>, ExpirationTimeResponse?:"Enabled"|"Disabled"} $args
     * @return \AWS\Result<array{Record?:array<array{FeatureName:string, ValueAsString?:string, ValueAsStringList?:array<string>}>, ExpiresAt?:string}>
     */
    public function getRecord(array $args): \AWS\Result { }

    /**
     * @param array{FeatureGroupName:string, RecordIdentifierValueAsString:string, FeatureNames?:array<string>, ExpirationTimeResponse?:"Enabled"|"Disabled"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Record?:array<array{FeatureName:string, ValueAsString?:string, ValueAsStringList?:array<string>}>, ExpiresAt?:string}>
     */
    public function getRecordAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FeatureGroupName:string, Record:array<array{FeatureName:string, ValueAsString?:string, ValueAsStringList?:array<string>}>, TargetStores?:array<"OnlineStore"|"OfflineStore">, TtlDuration?:array{Unit:"Seconds"|"Minutes"|"Hours"|"Days"|"Weeks", Value:int}} $args
     * @return \AWS\Result<void>
     */
    public function putRecord(array $args): \AWS\Result { }

    /**
     * @param array{FeatureGroupName:string, Record:array<array{FeatureName:string, ValueAsString?:string, ValueAsStringList?:array<string>}>, TargetStores?:array<"OnlineStore"|"OfflineStore">, TtlDuration?:array{Unit:"Seconds"|"Minutes"|"Hours"|"Days"|"Weeks", Value:int}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putRecordAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
