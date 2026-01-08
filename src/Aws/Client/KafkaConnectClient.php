<?php
namespace AWS\KafkaConnect;

class KafkaConnectClient
{
    /**
     * @param array{capacity:array{autoScaling?:array{maxWorkerCount:int, mcuCount:int, minWorkerCount:int, scaleInPolicy?:array{cpuUtilizationPercentage:int}, scaleOutPolicy?:array{cpuUtilizationPercentage:int}}, provisionedCapacity?:array{mcuCount:int, workerCount:int}}, connectorConfiguration:array<string, string>, connectorDescription?:string, connectorName:string, kafkaCluster:array{apacheKafkaCluster:array{bootstrapServers:string, vpc:array{securityGroups?:array<string>, subnets:array<string>}}}, kafkaClusterClientAuthentication:array{authenticationType:"NONE"|"IAM"}, kafkaClusterEncryptionInTransit:array{encryptionType:"PLAINTEXT"|"TLS"}, kafkaConnectVersion:string, logDelivery?:array{workerLogDelivery:array{cloudWatchLogs?:array{enabled:bool, logGroup?:string}, firehose?:array{deliveryStream?:string, enabled:bool}, s3?:array{bucket?:string, enabled:bool, prefix?:string}}}, plugins:array<array{customPlugin:array{customPluginArn:string, revision:int}}>, serviceExecutionRoleArn:string, workerConfiguration?:array{revision:int, workerConfigurationArn:string}, tags?:array<string, string>} $args
     * @return \AWS\Result<array{connectorArn?:string, connectorName?:string, connectorState?:"RUNNING"|"CREATING"|"UPDATING"|"DELETING"|"FAILED"}>
     */
    public function createConnector(array $args): \AWS\Result { }

    /**
     * @param array{capacity:array{autoScaling?:array{maxWorkerCount:int, mcuCount:int, minWorkerCount:int, scaleInPolicy?:array{cpuUtilizationPercentage:int}, scaleOutPolicy?:array{cpuUtilizationPercentage:int}}, provisionedCapacity?:array{mcuCount:int, workerCount:int}}, connectorConfiguration:array<string, string>, connectorDescription?:string, connectorName:string, kafkaCluster:array{apacheKafkaCluster:array{bootstrapServers:string, vpc:array{securityGroups?:array<string>, subnets:array<string>}}}, kafkaClusterClientAuthentication:array{authenticationType:"NONE"|"IAM"}, kafkaClusterEncryptionInTransit:array{encryptionType:"PLAINTEXT"|"TLS"}, kafkaConnectVersion:string, logDelivery?:array{workerLogDelivery:array{cloudWatchLogs?:array{enabled:bool, logGroup?:string}, firehose?:array{deliveryStream?:string, enabled:bool}, s3?:array{bucket?:string, enabled:bool, prefix?:string}}}, plugins:array<array{customPlugin:array{customPluginArn:string, revision:int}}>, serviceExecutionRoleArn:string, workerConfiguration?:array{revision:int, workerConfigurationArn:string}, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{connectorArn?:string, connectorName?:string, connectorState?:"RUNNING"|"CREATING"|"UPDATING"|"DELETING"|"FAILED"}>
     */
    public function createConnectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{contentType:"JAR"|"ZIP", description?:string, location:array{s3Location:array{bucketArn:string, fileKey:string, objectVersion?:string}}, name:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{customPluginArn?:string, customPluginState?:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"UPDATING"|"UPDATE_FAILED"|"DELETING", name?:string, revision?:int}>
     */
    public function createCustomPlugin(array $args): \AWS\Result { }

    /**
     * @param array{contentType:"JAR"|"ZIP", description?:string, location:array{s3Location:array{bucketArn:string, fileKey:string, objectVersion?:string}}, name:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{customPluginArn?:string, customPluginState?:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"UPDATING"|"UPDATE_FAILED"|"DELETING", name?:string, revision?:int}>
     */
    public function createCustomPluginAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, name:string, propertiesFileContent:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{creationTime?:int|string|\DateTimeInterface, latestRevision?:array{creationTime?:int|string|\DateTimeInterface, description?:string, revision?:int}, name?:string, workerConfigurationArn?:string, workerConfigurationState?:"ACTIVE"|"DELETING"}>
     */
    public function createWorkerConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, name:string, propertiesFileContent:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{creationTime?:int|string|\DateTimeInterface, latestRevision?:array{creationTime?:int|string|\DateTimeInterface, description?:string, revision?:int}, name?:string, workerConfigurationArn?:string, workerConfigurationState?:"ACTIVE"|"DELETING"}>
     */
    public function createWorkerConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectorArn:string, currentVersion?:string} $args
     * @return \AWS\Result<array{connectorArn?:string, connectorState?:"RUNNING"|"CREATING"|"UPDATING"|"DELETING"|"FAILED"}>
     */
    public function deleteConnector(array $args): \AWS\Result { }

    /**
     * @param array{connectorArn:string, currentVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{connectorArn?:string, connectorState?:"RUNNING"|"CREATING"|"UPDATING"|"DELETING"|"FAILED"}>
     */
    public function deleteConnectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{customPluginArn:string} $args
     * @return \AWS\Result<array{customPluginArn?:string, customPluginState?:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"UPDATING"|"UPDATE_FAILED"|"DELETING"}>
     */
    public function deleteCustomPlugin(array $args): \AWS\Result { }

    /**
     * @param array{customPluginArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{customPluginArn?:string, customPluginState?:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"UPDATING"|"UPDATE_FAILED"|"DELETING"}>
     */
    public function deleteCustomPluginAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{workerConfigurationArn:string} $args
     * @return \AWS\Result<array{workerConfigurationArn?:string, workerConfigurationState?:"ACTIVE"|"DELETING"}>
     */
    public function deleteWorkerConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{workerConfigurationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{workerConfigurationArn?:string, workerConfigurationState?:"ACTIVE"|"DELETING"}>
     */
    public function deleteWorkerConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectorArn:string} $args
     * @return \AWS\Result<array{capacity?:array{autoScaling?:array{maxWorkerCount?:int, mcuCount?:int, minWorkerCount?:int, scaleInPolicy?:array{cpuUtilizationPercentage?:int}, scaleOutPolicy?:array{cpuUtilizationPercentage?:int}}, provisionedCapacity?:array{mcuCount?:int, workerCount?:int}}, connectorArn?:string, connectorConfiguration?:array<string, string>, connectorDescription?:string, connectorName?:string, connectorState?:"RUNNING"|"CREATING"|"UPDATING"|"DELETING"|"FAILED", creationTime?:int|string|\DateTimeInterface, currentVersion?:string, kafkaCluster?:array{apacheKafkaCluster?:array{bootstrapServers?:string, vpc?:array{securityGroups?:array<string>, subnets?:array<string>}}}, kafkaClusterClientAuthentication?:array{authenticationType?:"NONE"|"IAM"}, kafkaClusterEncryptionInTransit?:array{encryptionType?:"PLAINTEXT"|"TLS"}, kafkaConnectVersion?:string, logDelivery?:array{workerLogDelivery?:array{cloudWatchLogs?:array{enabled?:bool, logGroup?:string}, firehose?:array{deliveryStream?:string, enabled?:bool}, s3?:array{bucket?:string, enabled?:bool, prefix?:string}}}, plugins?:array<array{customPlugin?:array{customPluginArn?:string, revision?:int}}>, serviceExecutionRoleArn?:string, workerConfiguration?:array{revision?:int, workerConfigurationArn?:string}, stateDescription?:array{code?:string, message?:string}}>
     */
    public function describeConnector(array $args): \AWS\Result { }

    /**
     * @param array{connectorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{capacity?:array{autoScaling?:array{maxWorkerCount?:int, mcuCount?:int, minWorkerCount?:int, scaleInPolicy?:array{cpuUtilizationPercentage?:int}, scaleOutPolicy?:array{cpuUtilizationPercentage?:int}}, provisionedCapacity?:array{mcuCount?:int, workerCount?:int}}, connectorArn?:string, connectorConfiguration?:array<string, string>, connectorDescription?:string, connectorName?:string, connectorState?:"RUNNING"|"CREATING"|"UPDATING"|"DELETING"|"FAILED", creationTime?:int|string|\DateTimeInterface, currentVersion?:string, kafkaCluster?:array{apacheKafkaCluster?:array{bootstrapServers?:string, vpc?:array{securityGroups?:array<string>, subnets?:array<string>}}}, kafkaClusterClientAuthentication?:array{authenticationType?:"NONE"|"IAM"}, kafkaClusterEncryptionInTransit?:array{encryptionType?:"PLAINTEXT"|"TLS"}, kafkaConnectVersion?:string, logDelivery?:array{workerLogDelivery?:array{cloudWatchLogs?:array{enabled?:bool, logGroup?:string}, firehose?:array{deliveryStream?:string, enabled?:bool}, s3?:array{bucket?:string, enabled?:bool, prefix?:string}}}, plugins?:array<array{customPlugin?:array{customPluginArn?:string, revision?:int}}>, serviceExecutionRoleArn?:string, workerConfiguration?:array{revision?:int, workerConfigurationArn?:string}, stateDescription?:array{code?:string, message?:string}}>
     */
    public function describeConnectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectorOperationArn:string} $args
     * @return \AWS\Result<array{connectorArn?:string, connectorOperationArn?:string, connectorOperationState?:"PENDING"|"UPDATE_IN_PROGRESS"|"UPDATE_COMPLETE"|"UPDATE_FAILED"|"ROLLBACK_IN_PROGRESS"|"ROLLBACK_FAILED"|"ROLLBACK_COMPLETE", connectorOperationType?:"UPDATE_WORKER_SETTING"|"UPDATE_CONNECTOR_CONFIGURATION"|"ISOLATE_CONNECTOR"|"RESTORE_CONNECTOR", operationSteps?:array<array{stepType?:"INITIALIZE_UPDATE"|"FINALIZE_UPDATE"|"UPDATE_WORKER_SETTING"|"UPDATE_CONNECTOR_CONFIGURATION"|"VALIDATE_UPDATE", stepState?:"PENDING"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"CANCELLED"}>, originWorkerSetting?:array{capacity?:array{autoScaling?:array{maxWorkerCount?:int, mcuCount?:int, minWorkerCount?:int, scaleInPolicy?:array{cpuUtilizationPercentage?:int}, scaleOutPolicy?:array{cpuUtilizationPercentage?:int}}, provisionedCapacity?:array{mcuCount?:int, workerCount?:int}}}, originConnectorConfiguration?:array<string, string>, targetWorkerSetting?:array{capacity?:array{autoScaling?:array{maxWorkerCount?:int, mcuCount?:int, minWorkerCount?:int, scaleInPolicy?:array{cpuUtilizationPercentage?:int}, scaleOutPolicy?:array{cpuUtilizationPercentage?:int}}, provisionedCapacity?:array{mcuCount?:int, workerCount?:int}}}, targetConnectorConfiguration?:array<string, string>, errorInfo?:array{code?:string, message?:string}, creationTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}>
     */
    public function describeConnectorOperation(array $args): \AWS\Result { }

    /**
     * @param array{connectorOperationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{connectorArn?:string, connectorOperationArn?:string, connectorOperationState?:"PENDING"|"UPDATE_IN_PROGRESS"|"UPDATE_COMPLETE"|"UPDATE_FAILED"|"ROLLBACK_IN_PROGRESS"|"ROLLBACK_FAILED"|"ROLLBACK_COMPLETE", connectorOperationType?:"UPDATE_WORKER_SETTING"|"UPDATE_CONNECTOR_CONFIGURATION"|"ISOLATE_CONNECTOR"|"RESTORE_CONNECTOR", operationSteps?:array<array{stepType?:"INITIALIZE_UPDATE"|"FINALIZE_UPDATE"|"UPDATE_WORKER_SETTING"|"UPDATE_CONNECTOR_CONFIGURATION"|"VALIDATE_UPDATE", stepState?:"PENDING"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"CANCELLED"}>, originWorkerSetting?:array{capacity?:array{autoScaling?:array{maxWorkerCount?:int, mcuCount?:int, minWorkerCount?:int, scaleInPolicy?:array{cpuUtilizationPercentage?:int}, scaleOutPolicy?:array{cpuUtilizationPercentage?:int}}, provisionedCapacity?:array{mcuCount?:int, workerCount?:int}}}, originConnectorConfiguration?:array<string, string>, targetWorkerSetting?:array{capacity?:array{autoScaling?:array{maxWorkerCount?:int, mcuCount?:int, minWorkerCount?:int, scaleInPolicy?:array{cpuUtilizationPercentage?:int}, scaleOutPolicy?:array{cpuUtilizationPercentage?:int}}, provisionedCapacity?:array{mcuCount?:int, workerCount?:int}}}, targetConnectorConfiguration?:array<string, string>, errorInfo?:array{code?:string, message?:string}, creationTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}>
     */
    public function describeConnectorOperationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{customPluginArn:string} $args
     * @return \AWS\Result<array{creationTime?:int|string|\DateTimeInterface, customPluginArn?:string, customPluginState?:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"UPDATING"|"UPDATE_FAILED"|"DELETING", description?:string, latestRevision?:array{contentType?:"JAR"|"ZIP", creationTime?:int|string|\DateTimeInterface, description?:string, fileDescription?:array{fileMd5?:string, fileSize?:int}, location?:array{s3Location?:array{bucketArn?:string, fileKey?:string, objectVersion?:string}}, revision?:int}, name?:string, stateDescription?:array{code?:string, message?:string}}>
     */
    public function describeCustomPlugin(array $args): \AWS\Result { }

    /**
     * @param array{customPluginArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{creationTime?:int|string|\DateTimeInterface, customPluginArn?:string, customPluginState?:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"UPDATING"|"UPDATE_FAILED"|"DELETING", description?:string, latestRevision?:array{contentType?:"JAR"|"ZIP", creationTime?:int|string|\DateTimeInterface, description?:string, fileDescription?:array{fileMd5?:string, fileSize?:int}, location?:array{s3Location?:array{bucketArn?:string, fileKey?:string, objectVersion?:string}}, revision?:int}, name?:string, stateDescription?:array{code?:string, message?:string}}>
     */
    public function describeCustomPluginAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{workerConfigurationArn:string} $args
     * @return \AWS\Result<array{creationTime?:int|string|\DateTimeInterface, description?:string, latestRevision?:array{creationTime?:int|string|\DateTimeInterface, description?:string, propertiesFileContent?:string, revision?:int}, name?:string, workerConfigurationArn?:string, workerConfigurationState?:"ACTIVE"|"DELETING"}>
     */
    public function describeWorkerConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{workerConfigurationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{creationTime?:int|string|\DateTimeInterface, description?:string, latestRevision?:array{creationTime?:int|string|\DateTimeInterface, description?:string, propertiesFileContent?:string, revision?:int}, name?:string, workerConfigurationArn?:string, workerConfigurationState?:"ACTIVE"|"DELETING"}>
     */
    public function describeWorkerConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectorArn:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{connectorOperations?:array<array{connectorOperationArn?:string, connectorOperationType?:"UPDATE_WORKER_SETTING"|"UPDATE_CONNECTOR_CONFIGURATION"|"ISOLATE_CONNECTOR"|"RESTORE_CONNECTOR", connectorOperationState?:"PENDING"|"UPDATE_IN_PROGRESS"|"UPDATE_COMPLETE"|"UPDATE_FAILED"|"ROLLBACK_IN_PROGRESS"|"ROLLBACK_FAILED"|"ROLLBACK_COMPLETE", creationTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listConnectorOperations(array $args): \AWS\Result { }

    /**
     * @param array{connectorArn:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{connectorOperations?:array<array{connectorOperationArn?:string, connectorOperationType?:"UPDATE_WORKER_SETTING"|"UPDATE_CONNECTOR_CONFIGURATION"|"ISOLATE_CONNECTOR"|"RESTORE_CONNECTOR", connectorOperationState?:"PENDING"|"UPDATE_IN_PROGRESS"|"UPDATE_COMPLETE"|"UPDATE_FAILED"|"ROLLBACK_IN_PROGRESS"|"ROLLBACK_FAILED"|"ROLLBACK_COMPLETE", creationTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listConnectorOperationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectorNamePrefix?:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{connectors?:array<array{capacity?:array{autoScaling?:array{maxWorkerCount?:int, mcuCount?:int, minWorkerCount?:int, scaleInPolicy?:array{cpuUtilizationPercentage?:int}, scaleOutPolicy?:array{cpuUtilizationPercentage?:int}}, provisionedCapacity?:array{mcuCount?:int, workerCount?:int}}, connectorArn?:string, connectorDescription?:string, connectorName?:string, connectorState?:"RUNNING"|"CREATING"|"UPDATING"|"DELETING"|"FAILED", creationTime?:int|string|\DateTimeInterface, currentVersion?:string, kafkaCluster?:array{apacheKafkaCluster?:array{bootstrapServers?:string, vpc?:array{securityGroups?:array<string>, subnets?:array<string>}}}, kafkaClusterClientAuthentication?:array{authenticationType?:"NONE"|"IAM"}, kafkaClusterEncryptionInTransit?:array{encryptionType?:"PLAINTEXT"|"TLS"}, kafkaConnectVersion?:string, logDelivery?:array{workerLogDelivery?:array{cloudWatchLogs?:array{enabled?:bool, logGroup?:string}, firehose?:array{deliveryStream?:string, enabled?:bool}, s3?:array{bucket?:string, enabled?:bool, prefix?:string}}}, plugins?:array<array{customPlugin?:array{customPluginArn?:string, revision?:int}}>, serviceExecutionRoleArn?:string, workerConfiguration?:array{revision?:int, workerConfigurationArn?:string}}>, nextToken?:string}>
     */
    public function listConnectors(array $args = []): \AWS\Result { }

    /**
     * @param array{connectorNamePrefix?:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{connectors?:array<array{capacity?:array{autoScaling?:array{maxWorkerCount?:int, mcuCount?:int, minWorkerCount?:int, scaleInPolicy?:array{cpuUtilizationPercentage?:int}, scaleOutPolicy?:array{cpuUtilizationPercentage?:int}}, provisionedCapacity?:array{mcuCount?:int, workerCount?:int}}, connectorArn?:string, connectorDescription?:string, connectorName?:string, connectorState?:"RUNNING"|"CREATING"|"UPDATING"|"DELETING"|"FAILED", creationTime?:int|string|\DateTimeInterface, currentVersion?:string, kafkaCluster?:array{apacheKafkaCluster?:array{bootstrapServers?:string, vpc?:array{securityGroups?:array<string>, subnets?:array<string>}}}, kafkaClusterClientAuthentication?:array{authenticationType?:"NONE"|"IAM"}, kafkaClusterEncryptionInTransit?:array{encryptionType?:"PLAINTEXT"|"TLS"}, kafkaConnectVersion?:string, logDelivery?:array{workerLogDelivery?:array{cloudWatchLogs?:array{enabled?:bool, logGroup?:string}, firehose?:array{deliveryStream?:string, enabled?:bool}, s3?:array{bucket?:string, enabled?:bool, prefix?:string}}}, plugins?:array<array{customPlugin?:array{customPluginArn?:string, revision?:int}}>, serviceExecutionRoleArn?:string, workerConfiguration?:array{revision?:int, workerConfigurationArn?:string}}>, nextToken?:string}>
     */
    public function listConnectorsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, namePrefix?:string} $args
     * @return \AWS\Result<array{customPlugins?:array<array{creationTime?:int|string|\DateTimeInterface, customPluginArn?:string, customPluginState?:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"UPDATING"|"UPDATE_FAILED"|"DELETING", description?:string, latestRevision?:array{contentType?:"JAR"|"ZIP", creationTime?:int|string|\DateTimeInterface, description?:string, fileDescription?:array{fileMd5?:string, fileSize?:int}, location?:array{s3Location?:array{bucketArn?:string, fileKey?:string, objectVersion?:string}}, revision?:int}, name?:string}>, nextToken?:string}>
     */
    public function listCustomPlugins(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, namePrefix?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{customPlugins?:array<array{creationTime?:int|string|\DateTimeInterface, customPluginArn?:string, customPluginState?:"CREATING"|"CREATE_FAILED"|"ACTIVE"|"UPDATING"|"UPDATE_FAILED"|"DELETING", description?:string, latestRevision?:array{contentType?:"JAR"|"ZIP", creationTime?:int|string|\DateTimeInterface, description?:string, fileDescription?:array{fileMd5?:string, fileSize?:int}, location?:array{s3Location?:array{bucketArn?:string, fileKey?:string, objectVersion?:string}}, revision?:int}, name?:string}>, nextToken?:string}>
     */
    public function listCustomPluginsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{maxResults?:int, nextToken?:string, namePrefix?:string} $args
     * @return \AWS\Result<array{nextToken?:string, workerConfigurations?:array<array{creationTime?:int|string|\DateTimeInterface, description?:string, latestRevision?:array{creationTime?:int|string|\DateTimeInterface, description?:string, revision?:int}, name?:string, workerConfigurationArn?:string, workerConfigurationState?:"ACTIVE"|"DELETING"}>}>
     */
    public function listWorkerConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, namePrefix?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, workerConfigurations?:array<array{creationTime?:int|string|\DateTimeInterface, description?:string, latestRevision?:array{creationTime?:int|string|\DateTimeInterface, description?:string, revision?:int}, name?:string, workerConfigurationArn?:string, workerConfigurationState?:"ACTIVE"|"DELETING"}>}>
     */
    public function listWorkerConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{capacity?:array{autoScaling?:array{maxWorkerCount:int, mcuCount:int, minWorkerCount:int, scaleInPolicy:array{cpuUtilizationPercentage:int}, scaleOutPolicy:array{cpuUtilizationPercentage:int}}, provisionedCapacity?:array{mcuCount:int, workerCount:int}}, connectorConfiguration?:array<string, string>, connectorArn:string, currentVersion:string} $args
     * @return \AWS\Result<array{connectorArn?:string, connectorState?:"RUNNING"|"CREATING"|"UPDATING"|"DELETING"|"FAILED", connectorOperationArn?:string}>
     */
    public function updateConnector(array $args): \AWS\Result { }

    /**
     * @param array{capacity?:array{autoScaling?:array{maxWorkerCount:int, mcuCount:int, minWorkerCount:int, scaleInPolicy:array{cpuUtilizationPercentage:int}, scaleOutPolicy:array{cpuUtilizationPercentage:int}}, provisionedCapacity?:array{mcuCount:int, workerCount:int}}, connectorConfiguration?:array<string, string>, connectorArn:string, currentVersion:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{connectorArn?:string, connectorState?:"RUNNING"|"CREATING"|"UPDATING"|"DELETING"|"FAILED", connectorOperationArn?:string}>
     */
    public function updateConnectorAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
