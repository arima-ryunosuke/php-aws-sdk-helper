<?php
namespace AWS\TimestreamInfluxDB;

class TimestreamInfluxDBClient
{
    /**
     * @param array{name:string, username?:string, password:string, organization?:string, bucket?:string, dbInstanceType:"db.influx.medium"|"db.influx.large"|"db.influx.xlarge"|"db.influx.2xlarge"|"db.influx.4xlarge"|"db.influx.8xlarge"|"db.influx.12xlarge"|"db.influx.16xlarge", vpcSubnetIds:array<string>, vpcSecurityGroupIds:array<string>, publiclyAccessible?:bool, dbStorageType?:"InfluxIOIncludedT1"|"InfluxIOIncludedT2"|"InfluxIOIncludedT3", allocatedStorage:int, dbParameterGroupIdentifier?:string, deploymentType?:"SINGLE_AZ"|"WITH_MULTIAZ_STANDBY", logDeliveryConfiguration?:array{s3Configuration:array{bucketName:string, enabled:bool}}, tags?:array<string, string>, port?:int, networkType?:"IPV4"|"DUAL"} $args
     * @return \AWS\Result<array{id:string, name:string, arn:string, status?:"CREATING"|"AVAILABLE"|"DELETING"|"MODIFYING"|"UPDATING"|"DELETED"|"FAILED"|"UPDATING_DEPLOYMENT_TYPE"|"UPDATING_INSTANCE_TYPE", endpoint?:string, port?:int, networkType?:"IPV4"|"DUAL", dbInstanceType?:"db.influx.medium"|"db.influx.large"|"db.influx.xlarge"|"db.influx.2xlarge"|"db.influx.4xlarge"|"db.influx.8xlarge"|"db.influx.12xlarge"|"db.influx.16xlarge", dbStorageType?:"InfluxIOIncludedT1"|"InfluxIOIncludedT2"|"InfluxIOIncludedT3", allocatedStorage?:int, deploymentType?:"SINGLE_AZ"|"WITH_MULTIAZ_STANDBY", vpcSubnetIds:array<string>, publiclyAccessible?:bool, vpcSecurityGroupIds?:array<string>, dbParameterGroupIdentifier?:string, availabilityZone?:string, secondaryAvailabilityZone?:string, logDeliveryConfiguration?:array{s3Configuration:array{bucketName:string, enabled:bool}}, influxAuthParametersSecretArn?:string}>
     */
    public function createDbInstance(array $args): \AWS\Result { }

    /**
     * @param array{name:string, username?:string, password:string, organization?:string, bucket?:string, dbInstanceType:"db.influx.medium"|"db.influx.large"|"db.influx.xlarge"|"db.influx.2xlarge"|"db.influx.4xlarge"|"db.influx.8xlarge"|"db.influx.12xlarge"|"db.influx.16xlarge", vpcSubnetIds:array<string>, vpcSecurityGroupIds:array<string>, publiclyAccessible?:bool, dbStorageType?:"InfluxIOIncludedT1"|"InfluxIOIncludedT2"|"InfluxIOIncludedT3", allocatedStorage:int, dbParameterGroupIdentifier?:string, deploymentType?:"SINGLE_AZ"|"WITH_MULTIAZ_STANDBY", logDeliveryConfiguration?:array{s3Configuration:array{bucketName:string, enabled:bool}}, tags?:array<string, string>, port?:int, networkType?:"IPV4"|"DUAL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, name:string, arn:string, status?:"CREATING"|"AVAILABLE"|"DELETING"|"MODIFYING"|"UPDATING"|"DELETED"|"FAILED"|"UPDATING_DEPLOYMENT_TYPE"|"UPDATING_INSTANCE_TYPE", endpoint?:string, port?:int, networkType?:"IPV4"|"DUAL", dbInstanceType?:"db.influx.medium"|"db.influx.large"|"db.influx.xlarge"|"db.influx.2xlarge"|"db.influx.4xlarge"|"db.influx.8xlarge"|"db.influx.12xlarge"|"db.influx.16xlarge", dbStorageType?:"InfluxIOIncludedT1"|"InfluxIOIncludedT2"|"InfluxIOIncludedT3", allocatedStorage?:int, deploymentType?:"SINGLE_AZ"|"WITH_MULTIAZ_STANDBY", vpcSubnetIds:array<string>, publiclyAccessible?:bool, vpcSecurityGroupIds?:array<string>, dbParameterGroupIdentifier?:string, availabilityZone?:string, secondaryAvailabilityZone?:string, logDeliveryConfiguration?:array{s3Configuration:array{bucketName:string, enabled:bool}}, influxAuthParametersSecretArn?:string}>
     */
    public function createDbInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, parameters?:array{InfluxDBv2?:array{fluxLogEnabled?:bool, logLevel?:"debug"|"info"|"error", noTasks?:bool, queryConcurrency?:int, queryQueueSize?:int, tracingType?:"log"|"jaeger", metricsDisabled?:bool, httpIdleTimeout?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, httpReadHeaderTimeout?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, httpReadTimeout?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, httpWriteTimeout?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, influxqlMaxSelectBuckets?:int, influxqlMaxSelectPoint?:int, influxqlMaxSelectSeries?:int, pprofDisabled?:bool, queryInitialMemoryBytes?:int, queryMaxMemoryBytes?:int, queryMemoryBytes?:int, sessionLength?:int, sessionRenewDisabled?:bool, storageCacheMaxMemorySize?:int, storageCacheSnapshotMemorySize?:int, storageCacheSnapshotWriteColdDuration?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, storageCompactFullWriteColdDuration?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, storageCompactThroughputBurst?:int, storageMaxConcurrentCompactions?:int, storageMaxIndexLogFileSize?:int, storageNoValidateFieldSize?:bool, storageRetentionCheckInterval?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, storageSeriesFileMaxConcurrentSnapshotCompactions?:int, storageSeriesIdSetCacheSize?:int, storageWalMaxConcurrentWrites?:int, storageWalMaxWriteDelay?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, uiDisabled?:bool}}, tags?:array<string, string>} $args
     * @return \AWS\Result<array{id:string, name:string, arn:string, description?:string, parameters?:array{InfluxDBv2?:array{fluxLogEnabled?:bool, logLevel?:"debug"|"info"|"error", noTasks?:bool, queryConcurrency?:int, queryQueueSize?:int, tracingType?:"log"|"jaeger", metricsDisabled?:bool, httpIdleTimeout?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, httpReadHeaderTimeout?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, httpReadTimeout?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, httpWriteTimeout?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, influxqlMaxSelectBuckets?:int, influxqlMaxSelectPoint?:int, influxqlMaxSelectSeries?:int, pprofDisabled?:bool, queryInitialMemoryBytes?:int, queryMaxMemoryBytes?:int, queryMemoryBytes?:int, sessionLength?:int, sessionRenewDisabled?:bool, storageCacheMaxMemorySize?:int, storageCacheSnapshotMemorySize?:int, storageCacheSnapshotWriteColdDuration?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, storageCompactFullWriteColdDuration?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, storageCompactThroughputBurst?:int, storageMaxConcurrentCompactions?:int, storageMaxIndexLogFileSize?:int, storageNoValidateFieldSize?:bool, storageRetentionCheckInterval?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, storageSeriesFileMaxConcurrentSnapshotCompactions?:int, storageSeriesIdSetCacheSize?:int, storageWalMaxConcurrentWrites?:int, storageWalMaxWriteDelay?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, uiDisabled?:bool}}}>
     */
    public function createDbParameterGroup(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, parameters?:array{InfluxDBv2?:array{fluxLogEnabled?:bool, logLevel?:"debug"|"info"|"error", noTasks?:bool, queryConcurrency?:int, queryQueueSize?:int, tracingType?:"log"|"jaeger", metricsDisabled?:bool, httpIdleTimeout?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, httpReadHeaderTimeout?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, httpReadTimeout?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, httpWriteTimeout?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, influxqlMaxSelectBuckets?:int, influxqlMaxSelectPoint?:int, influxqlMaxSelectSeries?:int, pprofDisabled?:bool, queryInitialMemoryBytes?:int, queryMaxMemoryBytes?:int, queryMemoryBytes?:int, sessionLength?:int, sessionRenewDisabled?:bool, storageCacheMaxMemorySize?:int, storageCacheSnapshotMemorySize?:int, storageCacheSnapshotWriteColdDuration?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, storageCompactFullWriteColdDuration?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, storageCompactThroughputBurst?:int, storageMaxConcurrentCompactions?:int, storageMaxIndexLogFileSize?:int, storageNoValidateFieldSize?:bool, storageRetentionCheckInterval?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, storageSeriesFileMaxConcurrentSnapshotCompactions?:int, storageSeriesIdSetCacheSize?:int, storageWalMaxConcurrentWrites?:int, storageWalMaxWriteDelay?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, uiDisabled?:bool}}, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, name:string, arn:string, description?:string, parameters?:array{InfluxDBv2?:array{fluxLogEnabled?:bool, logLevel?:"debug"|"info"|"error", noTasks?:bool, queryConcurrency?:int, queryQueueSize?:int, tracingType?:"log"|"jaeger", metricsDisabled?:bool, httpIdleTimeout?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, httpReadHeaderTimeout?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, httpReadTimeout?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, httpWriteTimeout?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, influxqlMaxSelectBuckets?:int, influxqlMaxSelectPoint?:int, influxqlMaxSelectSeries?:int, pprofDisabled?:bool, queryInitialMemoryBytes?:int, queryMaxMemoryBytes?:int, queryMemoryBytes?:int, sessionLength?:int, sessionRenewDisabled?:bool, storageCacheMaxMemorySize?:int, storageCacheSnapshotMemorySize?:int, storageCacheSnapshotWriteColdDuration?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, storageCompactFullWriteColdDuration?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, storageCompactThroughputBurst?:int, storageMaxConcurrentCompactions?:int, storageMaxIndexLogFileSize?:int, storageNoValidateFieldSize?:bool, storageRetentionCheckInterval?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, storageSeriesFileMaxConcurrentSnapshotCompactions?:int, storageSeriesIdSetCacheSize?:int, storageWalMaxConcurrentWrites?:int, storageWalMaxWriteDelay?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, uiDisabled?:bool}}}>
     */
    public function createDbParameterGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{identifier:string} $args
     * @return \AWS\Result<array{id:string, name:string, arn:string, status?:"CREATING"|"AVAILABLE"|"DELETING"|"MODIFYING"|"UPDATING"|"DELETED"|"FAILED"|"UPDATING_DEPLOYMENT_TYPE"|"UPDATING_INSTANCE_TYPE", endpoint?:string, port?:int, networkType?:"IPV4"|"DUAL", dbInstanceType?:"db.influx.medium"|"db.influx.large"|"db.influx.xlarge"|"db.influx.2xlarge"|"db.influx.4xlarge"|"db.influx.8xlarge"|"db.influx.12xlarge"|"db.influx.16xlarge", dbStorageType?:"InfluxIOIncludedT1"|"InfluxIOIncludedT2"|"InfluxIOIncludedT3", allocatedStorage?:int, deploymentType?:"SINGLE_AZ"|"WITH_MULTIAZ_STANDBY", vpcSubnetIds:array<string>, publiclyAccessible?:bool, vpcSecurityGroupIds?:array<string>, dbParameterGroupIdentifier?:string, availabilityZone?:string, secondaryAvailabilityZone?:string, logDeliveryConfiguration?:array{s3Configuration:array{bucketName:string, enabled:bool}}, influxAuthParametersSecretArn?:string}>
     */
    public function deleteDbInstance(array $args): \AWS\Result { }

    /**
     * @param array{identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, name:string, arn:string, status?:"CREATING"|"AVAILABLE"|"DELETING"|"MODIFYING"|"UPDATING"|"DELETED"|"FAILED"|"UPDATING_DEPLOYMENT_TYPE"|"UPDATING_INSTANCE_TYPE", endpoint?:string, port?:int, networkType?:"IPV4"|"DUAL", dbInstanceType?:"db.influx.medium"|"db.influx.large"|"db.influx.xlarge"|"db.influx.2xlarge"|"db.influx.4xlarge"|"db.influx.8xlarge"|"db.influx.12xlarge"|"db.influx.16xlarge", dbStorageType?:"InfluxIOIncludedT1"|"InfluxIOIncludedT2"|"InfluxIOIncludedT3", allocatedStorage?:int, deploymentType?:"SINGLE_AZ"|"WITH_MULTIAZ_STANDBY", vpcSubnetIds:array<string>, publiclyAccessible?:bool, vpcSecurityGroupIds?:array<string>, dbParameterGroupIdentifier?:string, availabilityZone?:string, secondaryAvailabilityZone?:string, logDeliveryConfiguration?:array{s3Configuration:array{bucketName:string, enabled:bool}}, influxAuthParametersSecretArn?:string}>
     */
    public function deleteDbInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{identifier:string} $args
     * @return \AWS\Result<array{id:string, name:string, arn:string, status?:"CREATING"|"AVAILABLE"|"DELETING"|"MODIFYING"|"UPDATING"|"DELETED"|"FAILED"|"UPDATING_DEPLOYMENT_TYPE"|"UPDATING_INSTANCE_TYPE", endpoint?:string, port?:int, networkType?:"IPV4"|"DUAL", dbInstanceType?:"db.influx.medium"|"db.influx.large"|"db.influx.xlarge"|"db.influx.2xlarge"|"db.influx.4xlarge"|"db.influx.8xlarge"|"db.influx.12xlarge"|"db.influx.16xlarge", dbStorageType?:"InfluxIOIncludedT1"|"InfluxIOIncludedT2"|"InfluxIOIncludedT3", allocatedStorage?:int, deploymentType?:"SINGLE_AZ"|"WITH_MULTIAZ_STANDBY", vpcSubnetIds:array<string>, publiclyAccessible?:bool, vpcSecurityGroupIds?:array<string>, dbParameterGroupIdentifier?:string, availabilityZone?:string, secondaryAvailabilityZone?:string, logDeliveryConfiguration?:array{s3Configuration:array{bucketName:string, enabled:bool}}, influxAuthParametersSecretArn?:string}>
     */
    public function getDbInstance(array $args): \AWS\Result { }

    /**
     * @param array{identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, name:string, arn:string, status?:"CREATING"|"AVAILABLE"|"DELETING"|"MODIFYING"|"UPDATING"|"DELETED"|"FAILED"|"UPDATING_DEPLOYMENT_TYPE"|"UPDATING_INSTANCE_TYPE", endpoint?:string, port?:int, networkType?:"IPV4"|"DUAL", dbInstanceType?:"db.influx.medium"|"db.influx.large"|"db.influx.xlarge"|"db.influx.2xlarge"|"db.influx.4xlarge"|"db.influx.8xlarge"|"db.influx.12xlarge"|"db.influx.16xlarge", dbStorageType?:"InfluxIOIncludedT1"|"InfluxIOIncludedT2"|"InfluxIOIncludedT3", allocatedStorage?:int, deploymentType?:"SINGLE_AZ"|"WITH_MULTIAZ_STANDBY", vpcSubnetIds:array<string>, publiclyAccessible?:bool, vpcSecurityGroupIds?:array<string>, dbParameterGroupIdentifier?:string, availabilityZone?:string, secondaryAvailabilityZone?:string, logDeliveryConfiguration?:array{s3Configuration:array{bucketName:string, enabled:bool}}, influxAuthParametersSecretArn?:string}>
     */
    public function getDbInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{identifier:string} $args
     * @return \AWS\Result<array{id:string, name:string, arn:string, description?:string, parameters?:array{InfluxDBv2?:array{fluxLogEnabled?:bool, logLevel?:"debug"|"info"|"error", noTasks?:bool, queryConcurrency?:int, queryQueueSize?:int, tracingType?:"log"|"jaeger", metricsDisabled?:bool, httpIdleTimeout?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, httpReadHeaderTimeout?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, httpReadTimeout?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, httpWriteTimeout?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, influxqlMaxSelectBuckets?:int, influxqlMaxSelectPoint?:int, influxqlMaxSelectSeries?:int, pprofDisabled?:bool, queryInitialMemoryBytes?:int, queryMaxMemoryBytes?:int, queryMemoryBytes?:int, sessionLength?:int, sessionRenewDisabled?:bool, storageCacheMaxMemorySize?:int, storageCacheSnapshotMemorySize?:int, storageCacheSnapshotWriteColdDuration?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, storageCompactFullWriteColdDuration?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, storageCompactThroughputBurst?:int, storageMaxConcurrentCompactions?:int, storageMaxIndexLogFileSize?:int, storageNoValidateFieldSize?:bool, storageRetentionCheckInterval?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, storageSeriesFileMaxConcurrentSnapshotCompactions?:int, storageSeriesIdSetCacheSize?:int, storageWalMaxConcurrentWrites?:int, storageWalMaxWriteDelay?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, uiDisabled?:bool}}}>
     */
    public function getDbParameterGroup(array $args): \AWS\Result { }

    /**
     * @param array{identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, name:string, arn:string, description?:string, parameters?:array{InfluxDBv2?:array{fluxLogEnabled?:bool, logLevel?:"debug"|"info"|"error", noTasks?:bool, queryConcurrency?:int, queryQueueSize?:int, tracingType?:"log"|"jaeger", metricsDisabled?:bool, httpIdleTimeout?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, httpReadHeaderTimeout?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, httpReadTimeout?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, httpWriteTimeout?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, influxqlMaxSelectBuckets?:int, influxqlMaxSelectPoint?:int, influxqlMaxSelectSeries?:int, pprofDisabled?:bool, queryInitialMemoryBytes?:int, queryMaxMemoryBytes?:int, queryMemoryBytes?:int, sessionLength?:int, sessionRenewDisabled?:bool, storageCacheMaxMemorySize?:int, storageCacheSnapshotMemorySize?:int, storageCacheSnapshotWriteColdDuration?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, storageCompactFullWriteColdDuration?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, storageCompactThroughputBurst?:int, storageMaxConcurrentCompactions?:int, storageMaxIndexLogFileSize?:int, storageNoValidateFieldSize?:bool, storageRetentionCheckInterval?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, storageSeriesFileMaxConcurrentSnapshotCompactions?:int, storageSeriesIdSetCacheSize?:int, storageWalMaxConcurrentWrites?:int, storageWalMaxWriteDelay?:array{durationType:"hours"|"minutes"|"seconds"|"milliseconds", value:int}, uiDisabled?:bool}}}>
     */
    public function getDbParameterGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{items:array<array{id:string, name:string, arn:string, status?:"CREATING"|"AVAILABLE"|"DELETING"|"MODIFYING"|"UPDATING"|"DELETED"|"FAILED"|"UPDATING_DEPLOYMENT_TYPE"|"UPDATING_INSTANCE_TYPE", endpoint?:string, port?:int, networkType?:"IPV4"|"DUAL", dbInstanceType?:"db.influx.medium"|"db.influx.large"|"db.influx.xlarge"|"db.influx.2xlarge"|"db.influx.4xlarge"|"db.influx.8xlarge"|"db.influx.12xlarge"|"db.influx.16xlarge", dbStorageType?:"InfluxIOIncludedT1"|"InfluxIOIncludedT2"|"InfluxIOIncludedT3", allocatedStorage?:int, deploymentType?:"SINGLE_AZ"|"WITH_MULTIAZ_STANDBY"}>, nextToken?:string}>
     */
    public function listDbInstances(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{items:array<array{id:string, name:string, arn:string, status?:"CREATING"|"AVAILABLE"|"DELETING"|"MODIFYING"|"UPDATING"|"DELETED"|"FAILED"|"UPDATING_DEPLOYMENT_TYPE"|"UPDATING_INSTANCE_TYPE", endpoint?:string, port?:int, networkType?:"IPV4"|"DUAL", dbInstanceType?:"db.influx.medium"|"db.influx.large"|"db.influx.xlarge"|"db.influx.2xlarge"|"db.influx.4xlarge"|"db.influx.8xlarge"|"db.influx.12xlarge"|"db.influx.16xlarge", dbStorageType?:"InfluxIOIncludedT1"|"InfluxIOIncludedT2"|"InfluxIOIncludedT3", allocatedStorage?:int, deploymentType?:"SINGLE_AZ"|"WITH_MULTIAZ_STANDBY"}>, nextToken?:string}>
     */
    public function listDbInstancesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{items:array<array{id:string, name:string, arn:string, description?:string}>, nextToken?:string}>
     */
    public function listDbParameterGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{items:array<array{id:string, name:string, arn:string, description?:string}>, nextToken?:string}>
     */
    public function listDbParameterGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{tags?:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags:array<string, string>} $args
     * @return \AWS\Result<void>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{identifier:string, logDeliveryConfiguration?:array{s3Configuration:array{bucketName:string, enabled:bool}}, dbParameterGroupIdentifier?:string, port?:int, dbInstanceType?:"db.influx.medium"|"db.influx.large"|"db.influx.xlarge"|"db.influx.2xlarge"|"db.influx.4xlarge"|"db.influx.8xlarge"|"db.influx.12xlarge"|"db.influx.16xlarge", deploymentType?:"SINGLE_AZ"|"WITH_MULTIAZ_STANDBY"} $args
     * @return \AWS\Result<array{id:string, name:string, arn:string, status?:"CREATING"|"AVAILABLE"|"DELETING"|"MODIFYING"|"UPDATING"|"DELETED"|"FAILED"|"UPDATING_DEPLOYMENT_TYPE"|"UPDATING_INSTANCE_TYPE", endpoint?:string, port?:int, networkType?:"IPV4"|"DUAL", dbInstanceType?:"db.influx.medium"|"db.influx.large"|"db.influx.xlarge"|"db.influx.2xlarge"|"db.influx.4xlarge"|"db.influx.8xlarge"|"db.influx.12xlarge"|"db.influx.16xlarge", dbStorageType?:"InfluxIOIncludedT1"|"InfluxIOIncludedT2"|"InfluxIOIncludedT3", allocatedStorage?:int, deploymentType?:"SINGLE_AZ"|"WITH_MULTIAZ_STANDBY", vpcSubnetIds:array<string>, publiclyAccessible?:bool, vpcSecurityGroupIds?:array<string>, dbParameterGroupIdentifier?:string, availabilityZone?:string, secondaryAvailabilityZone?:string, logDeliveryConfiguration?:array{s3Configuration:array{bucketName:string, enabled:bool}}, influxAuthParametersSecretArn?:string}>
     */
    public function updateDbInstance(array $args): \AWS\Result { }

    /**
     * @param array{identifier:string, logDeliveryConfiguration?:array{s3Configuration:array{bucketName:string, enabled:bool}}, dbParameterGroupIdentifier?:string, port?:int, dbInstanceType?:"db.influx.medium"|"db.influx.large"|"db.influx.xlarge"|"db.influx.2xlarge"|"db.influx.4xlarge"|"db.influx.8xlarge"|"db.influx.12xlarge"|"db.influx.16xlarge", deploymentType?:"SINGLE_AZ"|"WITH_MULTIAZ_STANDBY"} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, name:string, arn:string, status?:"CREATING"|"AVAILABLE"|"DELETING"|"MODIFYING"|"UPDATING"|"DELETED"|"FAILED"|"UPDATING_DEPLOYMENT_TYPE"|"UPDATING_INSTANCE_TYPE", endpoint?:string, port?:int, networkType?:"IPV4"|"DUAL", dbInstanceType?:"db.influx.medium"|"db.influx.large"|"db.influx.xlarge"|"db.influx.2xlarge"|"db.influx.4xlarge"|"db.influx.8xlarge"|"db.influx.12xlarge"|"db.influx.16xlarge", dbStorageType?:"InfluxIOIncludedT1"|"InfluxIOIncludedT2"|"InfluxIOIncludedT3", allocatedStorage?:int, deploymentType?:"SINGLE_AZ"|"WITH_MULTIAZ_STANDBY", vpcSubnetIds:array<string>, publiclyAccessible?:bool, vpcSecurityGroupIds?:array<string>, dbParameterGroupIdentifier?:string, availabilityZone?:string, secondaryAvailabilityZone?:string, logDeliveryConfiguration?:array{s3Configuration:array{bucketName:string, enabled:bool}}, influxAuthParametersSecretArn?:string}>
     */
    public function updateDbInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
