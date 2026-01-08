<?php
namespace AWS\Keyspaces;

class KeyspacesClient
{
    /**
     * @param array{keyspaceName:string, tags?:array<array{key:string, value:string}>, replicationSpecification?:array{replicationStrategy:"SINGLE_REGION"|"MULTI_REGION", regionList?:array<string>}} $args
     * @return \AWS\Result<array{resourceArn:string}>
     */
    public function createKeyspace(array $args): \AWS\Result { }

    /**
     * @param array{keyspaceName:string, tags?:array<array{key:string, value:string}>, replicationSpecification?:array{replicationStrategy:"SINGLE_REGION"|"MULTI_REGION", regionList?:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{resourceArn:string}>
     */
    public function createKeyspaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{keyspaceName:string, tableName:string, schemaDefinition:array{allColumns:array<array{name:string, type:string}>, partitionKeys:array<array{name:string}>, clusteringKeys?:array<array{name:string, orderBy:"ASC"|"DESC"}>, staticColumns?:array<array{name:string}>}, comment?:array{message:string}, capacitySpecification?:array{throughputMode:"PAY_PER_REQUEST"|"PROVISIONED", readCapacityUnits?:int, writeCapacityUnits?:int}, encryptionSpecification?:array{type:"CUSTOMER_MANAGED_KMS_KEY"|"AWS_OWNED_KMS_KEY", kmsKeyIdentifier?:string}, pointInTimeRecovery?:array{status:"ENABLED"|"DISABLED"}, ttl?:array{status:"ENABLED"}, defaultTimeToLive?:int, tags?:array<array{key:string, value:string}>, clientSideTimestamps?:array{status:"ENABLED"}, autoScalingSpecification?:array{writeCapacityAutoScaling?:array{autoScalingDisabled?:bool, minimumUnits?:int, maximumUnits?:int, scalingPolicy?:array{targetTrackingScalingPolicyConfiguration?:array{disableScaleIn?:bool, scaleInCooldown?:int, scaleOutCooldown?:int, targetValue:float}}}, readCapacityAutoScaling?:array{autoScalingDisabled?:bool, minimumUnits?:int, maximumUnits?:int, scalingPolicy?:array{targetTrackingScalingPolicyConfiguration?:array{disableScaleIn?:bool, scaleInCooldown?:int, scaleOutCooldown?:int, targetValue:float}}}}, replicaSpecifications?:array<array{region:string, readCapacityUnits?:int, readCapacityAutoScaling?:array{autoScalingDisabled?:bool, minimumUnits?:int, maximumUnits?:int, scalingPolicy?:array{targetTrackingScalingPolicyConfiguration?:array{disableScaleIn?:bool, scaleInCooldown?:int, scaleOutCooldown?:int, targetValue:float}}}}>} $args
     * @return \AWS\Result<array{resourceArn:string}>
     */
    public function createTable(array $args): \AWS\Result { }

    /**
     * @param array{keyspaceName:string, tableName:string, schemaDefinition:array{allColumns:array<array{name:string, type:string}>, partitionKeys:array<array{name:string}>, clusteringKeys?:array<array{name:string, orderBy:"ASC"|"DESC"}>, staticColumns?:array<array{name:string}>}, comment?:array{message:string}, capacitySpecification?:array{throughputMode:"PAY_PER_REQUEST"|"PROVISIONED", readCapacityUnits?:int, writeCapacityUnits?:int}, encryptionSpecification?:array{type:"CUSTOMER_MANAGED_KMS_KEY"|"AWS_OWNED_KMS_KEY", kmsKeyIdentifier?:string}, pointInTimeRecovery?:array{status:"ENABLED"|"DISABLED"}, ttl?:array{status:"ENABLED"}, defaultTimeToLive?:int, tags?:array<array{key:string, value:string}>, clientSideTimestamps?:array{status:"ENABLED"}, autoScalingSpecification?:array{writeCapacityAutoScaling?:array{autoScalingDisabled?:bool, minimumUnits?:int, maximumUnits?:int, scalingPolicy?:array{targetTrackingScalingPolicyConfiguration?:array{disableScaleIn?:bool, scaleInCooldown?:int, scaleOutCooldown?:int, targetValue:float}}}, readCapacityAutoScaling?:array{autoScalingDisabled?:bool, minimumUnits?:int, maximumUnits?:int, scalingPolicy?:array{targetTrackingScalingPolicyConfiguration?:array{disableScaleIn?:bool, scaleInCooldown?:int, scaleOutCooldown?:int, targetValue:float}}}}, replicaSpecifications?:array<array{region:string, readCapacityUnits?:int, readCapacityAutoScaling?:array{autoScalingDisabled?:bool, minimumUnits?:int, maximumUnits?:int, scalingPolicy?:array{targetTrackingScalingPolicyConfiguration?:array{disableScaleIn?:bool, scaleInCooldown?:int, scaleOutCooldown?:int, targetValue:float}}}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{resourceArn:string}>
     */
    public function createTableAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{keyspaceName:string, typeName:string, fieldDefinitions:array<array{name:string, type:string}>} $args
     * @return \AWS\Result<array{keyspaceArn:string, typeName:string}>
     */
    public function createType(array $args): \AWS\Result { }

    /**
     * @param array{keyspaceName:string, typeName:string, fieldDefinitions:array<array{name:string, type:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{keyspaceArn:string, typeName:string}>
     */
    public function createTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{keyspaceName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteKeyspace(array $args): \AWS\Result { }

    /**
     * @param array{keyspaceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteKeyspaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{keyspaceName:string, tableName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteTable(array $args): \AWS\Result { }

    /**
     * @param array{keyspaceName:string, tableName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteTableAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{keyspaceName:string, typeName:string} $args
     * @return \AWS\Result<array{keyspaceArn:string, typeName:string}>
     */
    public function deleteType(array $args): \AWS\Result { }

    /**
     * @param array{keyspaceName:string, typeName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{keyspaceArn:string, typeName:string}>
     */
    public function deleteTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{keyspaceName:string} $args
     * @return \AWS\Result<array{keyspaceName:string, resourceArn:string, replicationStrategy:"SINGLE_REGION"|"MULTI_REGION", replicationRegions?:array<string>, replicationGroupStatuses?:array<array{region:string, keyspaceStatus:"ACTIVE"|"CREATING"|"UPDATING"|"DELETING", tablesReplicationProgress?:string}>}>
     */
    public function getKeyspace(array $args): \AWS\Result { }

    /**
     * @param array{keyspaceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{keyspaceName:string, resourceArn:string, replicationStrategy:"SINGLE_REGION"|"MULTI_REGION", replicationRegions?:array<string>, replicationGroupStatuses?:array<array{region:string, keyspaceStatus:"ACTIVE"|"CREATING"|"UPDATING"|"DELETING", tablesReplicationProgress?:string}>}>
     */
    public function getKeyspaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{keyspaceName:string, tableName:string} $args
     * @return \AWS\Result<array{keyspaceName:string, tableName:string, resourceArn:string, creationTimestamp?:int|string|\DateTimeInterface, status?:"ACTIVE"|"CREATING"|"UPDATING"|"DELETING"|"DELETED"|"RESTORING"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS", schemaDefinition?:array{allColumns:array<array{name:string, type:string}>, partitionKeys:array<array{name:string}>, clusteringKeys?:array<array{name:string, orderBy:"ASC"|"DESC"}>, staticColumns?:array<array{name:string}>}, capacitySpecification?:array{throughputMode:"PAY_PER_REQUEST"|"PROVISIONED", readCapacityUnits?:int, writeCapacityUnits?:int, lastUpdateToPayPerRequestTimestamp?:int|string|\DateTimeInterface}, encryptionSpecification?:array{type:"CUSTOMER_MANAGED_KMS_KEY"|"AWS_OWNED_KMS_KEY", kmsKeyIdentifier?:string}, pointInTimeRecovery?:array{status:"ENABLED"|"DISABLED", earliestRestorableTimestamp?:int|string|\DateTimeInterface}, ttl?:array{status:"ENABLED"}, defaultTimeToLive?:int, comment?:array{message:string}, clientSideTimestamps?:array{status:"ENABLED"}, replicaSpecifications?:array<array{region?:string, status?:"ACTIVE"|"CREATING"|"UPDATING"|"DELETING"|"DELETED"|"RESTORING"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS", capacitySpecification?:array{throughputMode:"PAY_PER_REQUEST"|"PROVISIONED", readCapacityUnits?:int, writeCapacityUnits?:int, lastUpdateToPayPerRequestTimestamp?:int|string|\DateTimeInterface}}>}>
     */
    public function getTable(array $args): \AWS\Result { }

    /**
     * @param array{keyspaceName:string, tableName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{keyspaceName:string, tableName:string, resourceArn:string, creationTimestamp?:int|string|\DateTimeInterface, status?:"ACTIVE"|"CREATING"|"UPDATING"|"DELETING"|"DELETED"|"RESTORING"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS", schemaDefinition?:array{allColumns:array<array{name:string, type:string}>, partitionKeys:array<array{name:string}>, clusteringKeys?:array<array{name:string, orderBy:"ASC"|"DESC"}>, staticColumns?:array<array{name:string}>}, capacitySpecification?:array{throughputMode:"PAY_PER_REQUEST"|"PROVISIONED", readCapacityUnits?:int, writeCapacityUnits?:int, lastUpdateToPayPerRequestTimestamp?:int|string|\DateTimeInterface}, encryptionSpecification?:array{type:"CUSTOMER_MANAGED_KMS_KEY"|"AWS_OWNED_KMS_KEY", kmsKeyIdentifier?:string}, pointInTimeRecovery?:array{status:"ENABLED"|"DISABLED", earliestRestorableTimestamp?:int|string|\DateTimeInterface}, ttl?:array{status:"ENABLED"}, defaultTimeToLive?:int, comment?:array{message:string}, clientSideTimestamps?:array{status:"ENABLED"}, replicaSpecifications?:array<array{region?:string, status?:"ACTIVE"|"CREATING"|"UPDATING"|"DELETING"|"DELETED"|"RESTORING"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS", capacitySpecification?:array{throughputMode:"PAY_PER_REQUEST"|"PROVISIONED", readCapacityUnits?:int, writeCapacityUnits?:int, lastUpdateToPayPerRequestTimestamp?:int|string|\DateTimeInterface}}>}>
     */
    public function getTableAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{keyspaceName:string, tableName:string} $args
     * @return \AWS\Result<array{keyspaceName:string, tableName:string, resourceArn:string, autoScalingSpecification?:array{writeCapacityAutoScaling?:array{autoScalingDisabled?:bool, minimumUnits?:int, maximumUnits?:int, scalingPolicy?:array{targetTrackingScalingPolicyConfiguration?:array{disableScaleIn?:bool, scaleInCooldown?:int, scaleOutCooldown?:int, targetValue:float}}}, readCapacityAutoScaling?:array{autoScalingDisabled?:bool, minimumUnits?:int, maximumUnits?:int, scalingPolicy?:array{targetTrackingScalingPolicyConfiguration?:array{disableScaleIn?:bool, scaleInCooldown?:int, scaleOutCooldown?:int, targetValue:float}}}}, replicaSpecifications?:array<array{region?:string, autoScalingSpecification?:array{writeCapacityAutoScaling?:array{autoScalingDisabled?:bool, minimumUnits?:int, maximumUnits?:int, scalingPolicy?:array{targetTrackingScalingPolicyConfiguration?:array{disableScaleIn?:bool, scaleInCooldown?:int, scaleOutCooldown?:int, targetValue:float}}}, readCapacityAutoScaling?:array{autoScalingDisabled?:bool, minimumUnits?:int, maximumUnits?:int, scalingPolicy?:array{targetTrackingScalingPolicyConfiguration?:array{disableScaleIn?:bool, scaleInCooldown?:int, scaleOutCooldown?:int, targetValue:float}}}}}>}>
     */
    public function getTableAutoScalingSettings(array $args): \AWS\Result { }

    /**
     * @param array{keyspaceName:string, tableName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{keyspaceName:string, tableName:string, resourceArn:string, autoScalingSpecification?:array{writeCapacityAutoScaling?:array{autoScalingDisabled?:bool, minimumUnits?:int, maximumUnits?:int, scalingPolicy?:array{targetTrackingScalingPolicyConfiguration?:array{disableScaleIn?:bool, scaleInCooldown?:int, scaleOutCooldown?:int, targetValue:float}}}, readCapacityAutoScaling?:array{autoScalingDisabled?:bool, minimumUnits?:int, maximumUnits?:int, scalingPolicy?:array{targetTrackingScalingPolicyConfiguration?:array{disableScaleIn?:bool, scaleInCooldown?:int, scaleOutCooldown?:int, targetValue:float}}}}, replicaSpecifications?:array<array{region?:string, autoScalingSpecification?:array{writeCapacityAutoScaling?:array{autoScalingDisabled?:bool, minimumUnits?:int, maximumUnits?:int, scalingPolicy?:array{targetTrackingScalingPolicyConfiguration?:array{disableScaleIn?:bool, scaleInCooldown?:int, scaleOutCooldown?:int, targetValue:float}}}, readCapacityAutoScaling?:array{autoScalingDisabled?:bool, minimumUnits?:int, maximumUnits?:int, scalingPolicy?:array{targetTrackingScalingPolicyConfiguration?:array{disableScaleIn?:bool, scaleInCooldown?:int, scaleOutCooldown?:int, targetValue:float}}}}}>}>
     */
    public function getTableAutoScalingSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{keyspaceName:string, typeName:string} $args
     * @return \AWS\Result<array{keyspaceName:string, typeName:string, fieldDefinitions?:array<array{name:string, type:string}>, lastModifiedTimestamp?:int|string|\DateTimeInterface, status?:"ACTIVE"|"CREATING"|"DELETING"|"RESTORING", directReferringTables?:array<string>, directParentTypes?:array<string>, maxNestingDepth?:int, keyspaceArn:string}>
     */
    public function getType(array $args): \AWS\Result { }

    /**
     * @param array{keyspaceName:string, typeName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{keyspaceName:string, typeName:string, fieldDefinitions?:array<array{name:string, type:string}>, lastModifiedTimestamp?:int|string|\DateTimeInterface, status?:"ACTIVE"|"CREATING"|"DELETING"|"RESTORING", directReferringTables?:array<string>, directParentTypes?:array<string>, maxNestingDepth?:int, keyspaceArn:string}>
     */
    public function getTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{nextToken?:string, keyspaces:array<array{keyspaceName:string, resourceArn:string, replicationStrategy:"SINGLE_REGION"|"MULTI_REGION", replicationRegions?:array<string>}>}>
     */
    public function listKeyspaces(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, keyspaces:array<array{keyspaceName:string, resourceArn:string, replicationStrategy:"SINGLE_REGION"|"MULTI_REGION", replicationRegions?:array<string>}>}>
     */
    public function listKeyspacesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, keyspaceName:string} $args
     * @return \AWS\Result<array{nextToken?:string, tables?:array<array{keyspaceName:string, tableName:string, resourceArn:string}>}>
     */
    public function listTables(array $args): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, keyspaceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, tables?:array<array{keyspaceName:string, tableName:string, resourceArn:string}>}>
     */
    public function listTablesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{nextToken?:string, tags?:array<array{key:string, value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, tags?:array<array{key:string, value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, keyspaceName:string} $args
     * @return \AWS\Result<array{nextToken?:string, types:array<string>}>
     */
    public function listTypes(array $args): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, keyspaceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, types:array<string>}>
     */
    public function listTypesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sourceKeyspaceName:string, sourceTableName:string, targetKeyspaceName:string, targetTableName:string, restoreTimestamp?:int|string|\DateTimeInterface, capacitySpecificationOverride?:array{throughputMode:"PAY_PER_REQUEST"|"PROVISIONED", readCapacityUnits?:int, writeCapacityUnits?:int}, encryptionSpecificationOverride?:array{type:"CUSTOMER_MANAGED_KMS_KEY"|"AWS_OWNED_KMS_KEY", kmsKeyIdentifier?:string}, pointInTimeRecoveryOverride?:array{status:"ENABLED"|"DISABLED"}, tagsOverride?:array<array{key:string, value:string}>, autoScalingSpecification?:array{writeCapacityAutoScaling?:array{autoScalingDisabled?:bool, minimumUnits?:int, maximumUnits?:int, scalingPolicy?:array{targetTrackingScalingPolicyConfiguration?:array{disableScaleIn?:bool, scaleInCooldown?:int, scaleOutCooldown?:int, targetValue:float}}}, readCapacityAutoScaling?:array{autoScalingDisabled?:bool, minimumUnits?:int, maximumUnits?:int, scalingPolicy?:array{targetTrackingScalingPolicyConfiguration?:array{disableScaleIn?:bool, scaleInCooldown?:int, scaleOutCooldown?:int, targetValue:float}}}}, replicaSpecifications?:array<array{region:string, readCapacityUnits?:int, readCapacityAutoScaling?:array{autoScalingDisabled?:bool, minimumUnits?:int, maximumUnits?:int, scalingPolicy?:array{targetTrackingScalingPolicyConfiguration?:array{disableScaleIn?:bool, scaleInCooldown?:int, scaleOutCooldown?:int, targetValue:float}}}}>} $args
     * @return \AWS\Result<array{restoredTableARN:string}>
     */
    public function restoreTable(array $args): \AWS\Result { }

    /**
     * @param array{sourceKeyspaceName:string, sourceTableName:string, targetKeyspaceName:string, targetTableName:string, restoreTimestamp?:int|string|\DateTimeInterface, capacitySpecificationOverride?:array{throughputMode:"PAY_PER_REQUEST"|"PROVISIONED", readCapacityUnits?:int, writeCapacityUnits?:int}, encryptionSpecificationOverride?:array{type:"CUSTOMER_MANAGED_KMS_KEY"|"AWS_OWNED_KMS_KEY", kmsKeyIdentifier?:string}, pointInTimeRecoveryOverride?:array{status:"ENABLED"|"DISABLED"}, tagsOverride?:array<array{key:string, value:string}>, autoScalingSpecification?:array{writeCapacityAutoScaling?:array{autoScalingDisabled?:bool, minimumUnits?:int, maximumUnits?:int, scalingPolicy?:array{targetTrackingScalingPolicyConfiguration?:array{disableScaleIn?:bool, scaleInCooldown?:int, scaleOutCooldown?:int, targetValue:float}}}, readCapacityAutoScaling?:array{autoScalingDisabled?:bool, minimumUnits?:int, maximumUnits?:int, scalingPolicy?:array{targetTrackingScalingPolicyConfiguration?:array{disableScaleIn?:bool, scaleInCooldown?:int, scaleOutCooldown?:int, targetValue:float}}}}, replicaSpecifications?:array<array{region:string, readCapacityUnits?:int, readCapacityAutoScaling?:array{autoScalingDisabled?:bool, minimumUnits?:int, maximumUnits?:int, scalingPolicy?:array{targetTrackingScalingPolicyConfiguration?:array{disableScaleIn?:bool, scaleInCooldown?:int, scaleOutCooldown?:int, targetValue:float}}}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{restoredTableARN:string}>
     */
    public function restoreTableAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{keyspaceName:string, replicationSpecification:array{replicationStrategy:"SINGLE_REGION"|"MULTI_REGION", regionList?:array<string>}, clientSideTimestamps?:array{status:"ENABLED"}} $args
     * @return \AWS\Result<array{resourceArn:string}>
     */
    public function updateKeyspace(array $args): \AWS\Result { }

    /**
     * @param array{keyspaceName:string, replicationSpecification:array{replicationStrategy:"SINGLE_REGION"|"MULTI_REGION", regionList?:array<string>}, clientSideTimestamps?:array{status:"ENABLED"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{resourceArn:string}>
     */
    public function updateKeyspaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{keyspaceName:string, tableName:string, addColumns?:array<array{name:string, type:string}>, capacitySpecification?:array{throughputMode:"PAY_PER_REQUEST"|"PROVISIONED", readCapacityUnits?:int, writeCapacityUnits?:int}, encryptionSpecification?:array{type:"CUSTOMER_MANAGED_KMS_KEY"|"AWS_OWNED_KMS_KEY", kmsKeyIdentifier?:string}, pointInTimeRecovery?:array{status:"ENABLED"|"DISABLED"}, ttl?:array{status:"ENABLED"}, defaultTimeToLive?:int, clientSideTimestamps?:array{status:"ENABLED"}, autoScalingSpecification?:array{writeCapacityAutoScaling?:array{autoScalingDisabled?:bool, minimumUnits?:int, maximumUnits?:int, scalingPolicy?:array{targetTrackingScalingPolicyConfiguration?:array{disableScaleIn?:bool, scaleInCooldown?:int, scaleOutCooldown?:int, targetValue:float}}}, readCapacityAutoScaling?:array{autoScalingDisabled?:bool, minimumUnits?:int, maximumUnits?:int, scalingPolicy?:array{targetTrackingScalingPolicyConfiguration?:array{disableScaleIn?:bool, scaleInCooldown?:int, scaleOutCooldown?:int, targetValue:float}}}}, replicaSpecifications?:array<array{region:string, readCapacityUnits?:int, readCapacityAutoScaling?:array{autoScalingDisabled?:bool, minimumUnits?:int, maximumUnits?:int, scalingPolicy?:array{targetTrackingScalingPolicyConfiguration?:array{disableScaleIn?:bool, scaleInCooldown?:int, scaleOutCooldown?:int, targetValue:float}}}}>} $args
     * @return \AWS\Result<array{resourceArn:string}>
     */
    public function updateTable(array $args): \AWS\Result { }

    /**
     * @param array{keyspaceName:string, tableName:string, addColumns?:array<array{name:string, type:string}>, capacitySpecification?:array{throughputMode:"PAY_PER_REQUEST"|"PROVISIONED", readCapacityUnits?:int, writeCapacityUnits?:int}, encryptionSpecification?:array{type:"CUSTOMER_MANAGED_KMS_KEY"|"AWS_OWNED_KMS_KEY", kmsKeyIdentifier?:string}, pointInTimeRecovery?:array{status:"ENABLED"|"DISABLED"}, ttl?:array{status:"ENABLED"}, defaultTimeToLive?:int, clientSideTimestamps?:array{status:"ENABLED"}, autoScalingSpecification?:array{writeCapacityAutoScaling?:array{autoScalingDisabled?:bool, minimumUnits?:int, maximumUnits?:int, scalingPolicy?:array{targetTrackingScalingPolicyConfiguration?:array{disableScaleIn?:bool, scaleInCooldown?:int, scaleOutCooldown?:int, targetValue:float}}}, readCapacityAutoScaling?:array{autoScalingDisabled?:bool, minimumUnits?:int, maximumUnits?:int, scalingPolicy?:array{targetTrackingScalingPolicyConfiguration?:array{disableScaleIn?:bool, scaleInCooldown?:int, scaleOutCooldown?:int, targetValue:float}}}}, replicaSpecifications?:array<array{region:string, readCapacityUnits?:int, readCapacityAutoScaling?:array{autoScalingDisabled?:bool, minimumUnits?:int, maximumUnits?:int, scalingPolicy?:array{targetTrackingScalingPolicyConfiguration?:array{disableScaleIn?:bool, scaleInCooldown?:int, scaleOutCooldown?:int, targetValue:float}}}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{resourceArn:string}>
     */
    public function updateTableAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
