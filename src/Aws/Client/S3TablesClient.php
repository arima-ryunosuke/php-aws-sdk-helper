<?php
namespace AWS\S3Tables;

class S3TablesClient
{
    /**
     * @param array{tableBucketARN:string, namespace:array<string>} $args
     * @return \AWS\Result<array{tableBucketARN:string, namespace:array<string>}>
     */
    public function createNamespace(array $args): \AWS\Result { }

    /**
     * @param array{tableBucketARN:string, namespace:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{tableBucketARN:string, namespace:array<string>}>
     */
    public function createNamespaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{tableBucketARN:string, namespace:string, name:string, format:"ICEBERG"} $args
     * @return \AWS\Result<array{tableARN:string, versionToken:string}>
     */
    public function createTable(array $args): \AWS\Result { }

    /**
     * @param array{tableBucketARN:string, namespace:string, name:string, format:"ICEBERG"} $args
     * @return \GuzzleHttp\Promise\Promise<array{tableARN:string, versionToken:string}>
     */
    public function createTableAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{arn:string}>
     */
    public function createTableBucket(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string}>
     */
    public function createTableBucketAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{tableBucketARN:string, namespace:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteNamespace(array $args): \AWS\Result { }

    /**
     * @param array{tableBucketARN:string, namespace:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteNamespaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{tableBucketARN:string, namespace:string, name:string, versionToken?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteTable(array $args): \AWS\Result { }

    /**
     * @param array{tableBucketARN:string, namespace:string, name:string, versionToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteTableAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{tableBucketARN:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteTableBucket(array $args): \AWS\Result { }

    /**
     * @param array{tableBucketARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteTableBucketAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{tableBucketARN:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteTableBucketPolicy(array $args): \AWS\Result { }

    /**
     * @param array{tableBucketARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteTableBucketPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{tableBucketARN:string, namespace:string, name:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteTablePolicy(array $args): \AWS\Result { }

    /**
     * @param array{tableBucketARN:string, namespace:string, name:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteTablePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{tableBucketARN:string, namespace:string} $args
     * @return \AWS\Result<array{namespace:array<string>, createdAt:int|string|\DateTimeInterface, createdBy:string, ownerAccountId:string}>
     */
    public function getNamespace(array $args): \AWS\Result { }

    /**
     * @param array{tableBucketARN:string, namespace:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{namespace:array<string>, createdAt:int|string|\DateTimeInterface, createdBy:string, ownerAccountId:string}>
     */
    public function getNamespaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{tableBucketARN:string, namespace:string, name:string} $args
     * @return \AWS\Result<array{name:string, type:"customer"|"aws", tableARN:string, namespace:array<string>, versionToken:string, metadataLocation?:string, warehouseLocation:string, createdAt:int|string|\DateTimeInterface, createdBy:string, managedByService?:string, modifiedAt:int|string|\DateTimeInterface, modifiedBy:string, ownerAccountId:string, format:"ICEBERG"}>
     */
    public function getTable(array $args): \AWS\Result { }

    /**
     * @param array{tableBucketARN:string, namespace:string, name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name:string, type:"customer"|"aws", tableARN:string, namespace:array<string>, versionToken:string, metadataLocation?:string, warehouseLocation:string, createdAt:int|string|\DateTimeInterface, createdBy:string, managedByService?:string, modifiedAt:int|string|\DateTimeInterface, modifiedBy:string, ownerAccountId:string, format:"ICEBERG"}>
     */
    public function getTableAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{tableBucketARN:string} $args
     * @return \AWS\Result<array{arn:string, name:string, ownerAccountId:string, createdAt:int|string|\DateTimeInterface}>
     */
    public function getTableBucket(array $args): \AWS\Result { }

    /**
     * @param array{tableBucketARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, name:string, ownerAccountId:string, createdAt:int|string|\DateTimeInterface}>
     */
    public function getTableBucketAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{tableBucketARN:string} $args
     * @return \AWS\Result<array{tableBucketARN:string, configuration:array<"icebergUnreferencedFileRemoval", array{status?:"enabled"|"disabled", settings?:array{icebergUnreferencedFileRemoval?:array{unreferencedDays?:int, nonCurrentDays?:int}}}>}>
     */
    public function getTableBucketMaintenanceConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{tableBucketARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tableBucketARN:string, configuration:array<"icebergUnreferencedFileRemoval", array{status?:"enabled"|"disabled", settings?:array{icebergUnreferencedFileRemoval?:array{unreferencedDays?:int, nonCurrentDays?:int}}}>}>
     */
    public function getTableBucketMaintenanceConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{tableBucketARN:string} $args
     * @return \AWS\Result<array{resourcePolicy:string}>
     */
    public function getTableBucketPolicy(array $args): \AWS\Result { }

    /**
     * @param array{tableBucketARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{resourcePolicy:string}>
     */
    public function getTableBucketPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{tableBucketARN:string, namespace:string, name:string} $args
     * @return \AWS\Result<array{tableARN:string, configuration:array<"icebergCompaction"|"icebergSnapshotManagement", array{status?:"enabled"|"disabled", settings?:array{icebergCompaction?:array{targetFileSizeMB?:int}, icebergSnapshotManagement?:array{minSnapshotsToKeep?:int, maxSnapshotAgeHours?:int}}}>}>
     */
    public function getTableMaintenanceConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{tableBucketARN:string, namespace:string, name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tableARN:string, configuration:array<"icebergCompaction"|"icebergSnapshotManagement", array{status?:"enabled"|"disabled", settings?:array{icebergCompaction?:array{targetFileSizeMB?:int}, icebergSnapshotManagement?:array{minSnapshotsToKeep?:int, maxSnapshotAgeHours?:int}}}>}>
     */
    public function getTableMaintenanceConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{tableBucketARN:string, namespace:string, name:string} $args
     * @return \AWS\Result<array{tableARN:string, status:array<"icebergCompaction"|"icebergSnapshotManagement"|"icebergUnreferencedFileRemoval", array{status:mixed, lastRunTimestamp?:int|string|\DateTimeInterface, failureMessage?:string}>}>
     */
    public function getTableMaintenanceJobStatus(array $args): \AWS\Result { }

    /**
     * @param array{tableBucketARN:string, namespace:string, name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tableARN:string, status:array<"icebergCompaction"|"icebergSnapshotManagement"|"icebergUnreferencedFileRemoval", array{status:mixed, lastRunTimestamp?:int|string|\DateTimeInterface, failureMessage?:string}>}>
     */
    public function getTableMaintenanceJobStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{tableBucketARN:string, namespace:string, name:string} $args
     * @return \AWS\Result<array{versionToken:string, metadataLocation?:string, warehouseLocation:string}>
     */
    public function getTableMetadataLocation(array $args): \AWS\Result { }

    /**
     * @param array{tableBucketARN:string, namespace:string, name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{versionToken:string, metadataLocation?:string, warehouseLocation:string}>
     */
    public function getTableMetadataLocationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{tableBucketARN:string, namespace:string, name:string} $args
     * @return \AWS\Result<array{resourcePolicy:string}>
     */
    public function getTablePolicy(array $args): \AWS\Result { }

    /**
     * @param array{tableBucketARN:string, namespace:string, name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{resourcePolicy:string}>
     */
    public function getTablePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{tableBucketARN:string, prefix?:string, continuationToken?:string, maxNamespaces?:int} $args
     * @return \AWS\Result<array{namespaces:array<array{namespace:array<string>, createdAt:int|string|\DateTimeInterface, createdBy:string, ownerAccountId:string}>, continuationToken?:string}>
     */
    public function listNamespaces(array $args): \AWS\Result { }

    /**
     * @param array{tableBucketARN:string, prefix?:string, continuationToken?:string, maxNamespaces?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{namespaces:array<array{namespace:array<string>, createdAt:int|string|\DateTimeInterface, createdBy:string, ownerAccountId:string}>, continuationToken?:string}>
     */
    public function listNamespacesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{prefix?:string, continuationToken?:string, maxBuckets?:int} $args
     * @return \AWS\Result<array{tableBuckets:array<array{arn:string, name:string, ownerAccountId:string, createdAt:int|string|\DateTimeInterface}>, continuationToken?:string}>
     */
    public function listTableBuckets(array $args = []): \AWS\Result { }

    /**
     * @param array{prefix?:string, continuationToken?:string, maxBuckets?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{tableBuckets:array<array{arn:string, name:string, ownerAccountId:string, createdAt:int|string|\DateTimeInterface}>, continuationToken?:string}>
     */
    public function listTableBucketsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{tableBucketARN:string, namespace?:string, prefix?:string, continuationToken?:string, maxTables?:int} $args
     * @return \AWS\Result<array{tables:array<array{namespace:array<string>, name:string, type:"customer"|"aws", tableARN:string, createdAt:int|string|\DateTimeInterface, modifiedAt:int|string|\DateTimeInterface}>, continuationToken?:string}>
     */
    public function listTables(array $args): \AWS\Result { }

    /**
     * @param array{tableBucketARN:string, namespace?:string, prefix?:string, continuationToken?:string, maxTables?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{tables:array<array{namespace:array<string>, name:string, type:"customer"|"aws", tableARN:string, createdAt:int|string|\DateTimeInterface, modifiedAt:int|string|\DateTimeInterface}>, continuationToken?:string}>
     */
    public function listTablesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{tableBucketARN:string, type:"icebergUnreferencedFileRemoval", value:array{status?:"enabled"|"disabled", settings?:array{icebergUnreferencedFileRemoval?:array{unreferencedDays?:int, nonCurrentDays?:int}}}} $args
     * @return \AWS\Result<void>
     */
    public function putTableBucketMaintenanceConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{tableBucketARN:string, type:"icebergUnreferencedFileRemoval", value:array{status?:"enabled"|"disabled", settings?:array{icebergUnreferencedFileRemoval?:array{unreferencedDays?:int, nonCurrentDays?:int}}}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putTableBucketMaintenanceConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{tableBucketARN:string, resourcePolicy:string} $args
     * @return \AWS\Result<void>
     */
    public function putTableBucketPolicy(array $args): \AWS\Result { }

    /**
     * @param array{tableBucketARN:string, resourcePolicy:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putTableBucketPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{tableBucketARN:string, namespace:string, name:string, type:"icebergCompaction"|"icebergSnapshotManagement", value:array{status?:"enabled"|"disabled", settings?:array{icebergCompaction?:array{targetFileSizeMB?:int}, icebergSnapshotManagement?:array{minSnapshotsToKeep?:int, maxSnapshotAgeHours?:int}}}} $args
     * @return \AWS\Result<void>
     */
    public function putTableMaintenanceConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{tableBucketARN:string, namespace:string, name:string, type:"icebergCompaction"|"icebergSnapshotManagement", value:array{status?:"enabled"|"disabled", settings?:array{icebergCompaction?:array{targetFileSizeMB?:int}, icebergSnapshotManagement?:array{minSnapshotsToKeep?:int, maxSnapshotAgeHours?:int}}}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putTableMaintenanceConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{tableBucketARN:string, namespace:string, name:string, resourcePolicy:string} $args
     * @return \AWS\Result<void>
     */
    public function putTablePolicy(array $args): \AWS\Result { }

    /**
     * @param array{tableBucketARN:string, namespace:string, name:string, resourcePolicy:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putTablePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{tableBucketARN:string, namespace:string, name:string, newNamespaceName?:string, newName?:string, versionToken?:string} $args
     * @return \AWS\Result<void>
     */
    public function renameTable(array $args): \AWS\Result { }

    /**
     * @param array{tableBucketARN:string, namespace:string, name:string, newNamespaceName?:string, newName?:string, versionToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function renameTableAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{tableBucketARN:string, namespace:string, name:string, versionToken:string, metadataLocation:string} $args
     * @return \AWS\Result<array{name:string, tableARN:string, namespace:array<string>, versionToken:string, metadataLocation:string}>
     */
    public function updateTableMetadataLocation(array $args): \AWS\Result { }

    /**
     * @param array{tableBucketARN:string, namespace:string, name:string, versionToken:string, metadataLocation:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name:string, tableARN:string, namespace:array<string>, versionToken:string, metadataLocation:string}>
     */
    public function updateTableMetadataLocationAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
