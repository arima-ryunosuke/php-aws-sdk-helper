<?php
namespace AWS\IoTAnalytics;

class IoTAnalyticsClient
{
    /**
     * @param array{channelName:string, messages:array<array{messageId:string, payload:string|resource|\Psr\Http\Message\StreamInterface}>} $args
     * @return \AWS\Result<array{batchPutMessageErrorEntries?:array<array{messageId?:string, errorCode?:string, errorMessage?:string}>}>
     */
    public function batchPutMessage(array $args): \AWS\Result { }

    /**
     * @param array{channelName:string, messages:array<array{messageId:string, payload:string|resource|\Psr\Http\Message\StreamInterface}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{batchPutMessageErrorEntries?:array<array{messageId?:string, errorCode?:string, errorMessage?:string}>}>
     */
    public function batchPutMessageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pipelineName:string, reprocessingId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function cancelPipelineReprocessing(array $args): \AWS\Result { }

    /**
     * @param array{pipelineName:string, reprocessingId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function cancelPipelineReprocessingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{channelName:string, channelStorage?:array{serviceManagedS3?:array{}, customerManagedS3?:array{bucket:string, keyPrefix?:string, roleArn:string}}, retentionPeriod?:array{unlimited?:bool, numberOfDays?:int}, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{channelName?:string, channelArn?:string, retentionPeriod?:array{unlimited?:bool, numberOfDays?:int}}>
     */
    public function createChannel(array $args): \AWS\Result { }

    /**
     * @param array{channelName:string, channelStorage?:array{serviceManagedS3?:array{}, customerManagedS3?:array{bucket:string, keyPrefix?:string, roleArn:string}}, retentionPeriod?:array{unlimited?:bool, numberOfDays?:int}, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{channelName?:string, channelArn?:string, retentionPeriod?:array{unlimited?:bool, numberOfDays?:int}}>
     */
    public function createChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetName:string, actions:array<array{actionName?:string, queryAction?:array{sqlQuery:string, filters?:array<array{deltaTime?:array{offsetSeconds:int, timeExpression:string}}>}, containerAction?:array{image:string, executionRoleArn:string, resourceConfiguration:array{computeType:"ACU_1"|"ACU_2", volumeSizeInGB:int}, variables?:array<array{name:string, stringValue?:string, doubleValue?:float, datasetContentVersionValue?:array{datasetName:string}, outputFileUriValue?:array{fileName:string}}>}}>, triggers?:array<array{schedule?:array{expression?:string}, dataset?:array{name:string}}>, contentDeliveryRules?:array<array{entryName?:string, destination:array{iotEventsDestinationConfiguration?:array{inputName:string, roleArn:string}, s3DestinationConfiguration?:array{bucket:string, key:string, glueConfiguration?:array{tableName:string, databaseName:string}, roleArn:string}}}>, retentionPeriod?:array{unlimited?:bool, numberOfDays?:int}, versioningConfiguration?:array{unlimited?:bool, maxVersions?:int}, tags?:array<array{key:string, value:string}>, lateDataRules?:array<array{ruleName?:string, ruleConfiguration:array{deltaTimeSessionWindowConfiguration?:array{timeoutInMinutes:int}}}>} $args
     * @return \AWS\Result<array{datasetName?:string, datasetArn?:string, retentionPeriod?:array{unlimited?:bool, numberOfDays?:int}}>
     */
    public function createDataset(array $args): \AWS\Result { }

    /**
     * @param array{datasetName:string, actions:array<array{actionName?:string, queryAction?:array{sqlQuery:string, filters?:array<array{deltaTime?:array{offsetSeconds:int, timeExpression:string}}>}, containerAction?:array{image:string, executionRoleArn:string, resourceConfiguration:array{computeType:"ACU_1"|"ACU_2", volumeSizeInGB:int}, variables?:array<array{name:string, stringValue?:string, doubleValue?:float, datasetContentVersionValue?:array{datasetName:string}, outputFileUriValue?:array{fileName:string}}>}}>, triggers?:array<array{schedule?:array{expression?:string}, dataset?:array{name:string}}>, contentDeliveryRules?:array<array{entryName?:string, destination:array{iotEventsDestinationConfiguration?:array{inputName:string, roleArn:string}, s3DestinationConfiguration?:array{bucket:string, key:string, glueConfiguration?:array{tableName:string, databaseName:string}, roleArn:string}}}>, retentionPeriod?:array{unlimited?:bool, numberOfDays?:int}, versioningConfiguration?:array{unlimited?:bool, maxVersions?:int}, tags?:array<array{key:string, value:string}>, lateDataRules?:array<array{ruleName?:string, ruleConfiguration:array{deltaTimeSessionWindowConfiguration?:array{timeoutInMinutes:int}}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{datasetName?:string, datasetArn?:string, retentionPeriod?:array{unlimited?:bool, numberOfDays?:int}}>
     */
    public function createDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetName:string, versionId?:string} $args
     * @return \AWS\Result<array{versionId?:string}>
     */
    public function createDatasetContent(array $args): \AWS\Result { }

    /**
     * @param array{datasetName:string, versionId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{versionId?:string}>
     */
    public function createDatasetContentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datastoreName:string, datastoreStorage?:array{serviceManagedS3?:array{}, customerManagedS3?:array{bucket:string, keyPrefix?:string, roleArn:string}, iotSiteWiseMultiLayerStorage?:array{customerManagedS3Storage:array{bucket:string, keyPrefix?:string}}}, retentionPeriod?:array{unlimited?:bool, numberOfDays?:int}, tags?:array<array{key:string, value:string}>, fileFormatConfiguration?:array{jsonConfiguration?:array{}, parquetConfiguration?:array{schemaDefinition?:array{columns?:array<array{name:string, type:string}>}}}, datastorePartitions?:array{partitions?:array<array{attributePartition?:array{attributeName:string}, timestampPartition?:array{attributeName:string, timestampFormat?:string}}>}} $args
     * @return \AWS\Result<array{datastoreName?:string, datastoreArn?:string, retentionPeriod?:array{unlimited?:bool, numberOfDays?:int}}>
     */
    public function createDatastore(array $args): \AWS\Result { }

    /**
     * @param array{datastoreName:string, datastoreStorage?:array{serviceManagedS3?:array{}, customerManagedS3?:array{bucket:string, keyPrefix?:string, roleArn:string}, iotSiteWiseMultiLayerStorage?:array{customerManagedS3Storage:array{bucket:string, keyPrefix?:string}}}, retentionPeriod?:array{unlimited?:bool, numberOfDays?:int}, tags?:array<array{key:string, value:string}>, fileFormatConfiguration?:array{jsonConfiguration?:array{}, parquetConfiguration?:array{schemaDefinition?:array{columns?:array<array{name:string, type:string}>}}}, datastorePartitions?:array{partitions?:array<array{attributePartition?:array{attributeName:string}, timestampPartition?:array{attributeName:string, timestampFormat?:string}}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{datastoreName?:string, datastoreArn?:string, retentionPeriod?:array{unlimited?:bool, numberOfDays?:int}}>
     */
    public function createDatastoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pipelineName:string, pipelineActivities:array<array{channel?:array{name:string, channelName:string, next?:string}, lambda?:array{name:string, lambdaName:string, batchSize:int, next?:string}, datastore?:array{name:string, datastoreName:string}, addAttributes?:array{name:string, attributes:array<string, string>, next?:string}, removeAttributes?:array{name:string, attributes:array<string>, next?:string}, selectAttributes?:array{name:string, attributes:array<string>, next?:string}, filter?:array{name:string, filter:mixed, next?:string}, math?:array{name:string, attribute:string, math:mixed, next?:string}, deviceRegistryEnrich?:array{name:string, attribute:string, thingName:string, roleArn:string, next?:string}, deviceShadowEnrich?:array{name:string, attribute:string, thingName:string, roleArn:string, next?:string}}>, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{pipelineName?:string, pipelineArn?:string}>
     */
    public function createPipeline(array $args): \AWS\Result { }

    /**
     * @param array{pipelineName:string, pipelineActivities:array<array{channel?:array{name:string, channelName:string, next?:string}, lambda?:array{name:string, lambdaName:string, batchSize:int, next?:string}, datastore?:array{name:string, datastoreName:string}, addAttributes?:array{name:string, attributes:array<string, string>, next?:string}, removeAttributes?:array{name:string, attributes:array<string>, next?:string}, selectAttributes?:array{name:string, attributes:array<string>, next?:string}, filter?:array{name:string, filter:mixed, next?:string}, math?:array{name:string, attribute:string, math:mixed, next?:string}, deviceRegistryEnrich?:array{name:string, attribute:string, thingName:string, roleArn:string, next?:string}, deviceShadowEnrich?:array{name:string, attribute:string, thingName:string, roleArn:string, next?:string}}>, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{pipelineName?:string, pipelineArn?:string}>
     */
    public function createPipelineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{channelName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteChannel(array $args): \AWS\Result { }

    /**
     * @param array{channelName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDataset(array $args): \AWS\Result { }

    /**
     * @param array{datasetName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetName:string, versionId?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDatasetContent(array $args): \AWS\Result { }

    /**
     * @param array{datasetName:string, versionId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDatasetContentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datastoreName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDatastore(array $args): \AWS\Result { }

    /**
     * @param array{datastoreName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDatastoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pipelineName:string} $args
     * @return \AWS\Result<void>
     */
    public function deletePipeline(array $args): \AWS\Result { }

    /**
     * @param array{pipelineName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deletePipelineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{channelName:string, includeStatistics?:bool} $args
     * @return \AWS\Result<array{channel?:array{name?:string, storage?:array{serviceManagedS3?:array{}, customerManagedS3?:array{bucket:string, keyPrefix?:string, roleArn:string}}, arn?:string, status?:"CREATING"|"ACTIVE"|"DELETING", retentionPeriod?:array{unlimited?:bool, numberOfDays?:int}, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, lastMessageArrivalTime?:int|string|\DateTimeInterface}, statistics?:array{size?:array{estimatedSizeInBytes?:float, estimatedOn?:int|string|\DateTimeInterface}}}>
     */
    public function describeChannel(array $args): \AWS\Result { }

    /**
     * @param array{channelName:string, includeStatistics?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{channel?:array{name?:string, storage?:array{serviceManagedS3?:array{}, customerManagedS3?:array{bucket:string, keyPrefix?:string, roleArn:string}}, arn?:string, status?:"CREATING"|"ACTIVE"|"DELETING", retentionPeriod?:array{unlimited?:bool, numberOfDays?:int}, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, lastMessageArrivalTime?:int|string|\DateTimeInterface}, statistics?:array{size?:array{estimatedSizeInBytes?:float, estimatedOn?:int|string|\DateTimeInterface}}}>
     */
    public function describeChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetName:string} $args
     * @return \AWS\Result<array{dataset?:array{name?:string, arn?:string, actions?:array<array{actionName?:string, queryAction?:array{sqlQuery:string, filters?:array<array{deltaTime?:array{offsetSeconds:int, timeExpression:string}}>}, containerAction?:array{image:string, executionRoleArn:string, resourceConfiguration:array{computeType:"ACU_1"|"ACU_2", volumeSizeInGB:int}, variables?:array<array{name:string, stringValue?:string, doubleValue?:float, datasetContentVersionValue?:array{datasetName:string}, outputFileUriValue?:array{fileName:string}}>}}>, triggers?:array<array{schedule?:array{expression?:string}, dataset?:mixed}>, contentDeliveryRules?:array<array{entryName?:string, destination:array{iotEventsDestinationConfiguration?:array{inputName:string, roleArn:string}, s3DestinationConfiguration?:array{bucket:string, key:string, glueConfiguration?:array{tableName:string, databaseName:string}, roleArn:string}}}>, status?:"CREATING"|"ACTIVE"|"DELETING", creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, retentionPeriod?:array{unlimited?:bool, numberOfDays?:int}, versioningConfiguration?:array{unlimited?:bool, maxVersions?:int}, lateDataRules?:array<array{ruleName?:string, ruleConfiguration:array{deltaTimeSessionWindowConfiguration?:array{timeoutInMinutes:int}}}>}}>
     */
    public function describeDataset(array $args): \AWS\Result { }

    /**
     * @param array{datasetName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{dataset?:array{name?:string, arn?:string, actions?:array<array{actionName?:string, queryAction?:array{sqlQuery:string, filters?:array<array{deltaTime?:array{offsetSeconds:int, timeExpression:string}}>}, containerAction?:array{image:string, executionRoleArn:string, resourceConfiguration:array{computeType:"ACU_1"|"ACU_2", volumeSizeInGB:int}, variables?:array<array{name:string, stringValue?:string, doubleValue?:float, datasetContentVersionValue?:array{datasetName:string}, outputFileUriValue?:array{fileName:string}}>}}>, triggers?:array<array{schedule?:array{expression?:string}, dataset?:mixed}>, contentDeliveryRules?:array<array{entryName?:string, destination:array{iotEventsDestinationConfiguration?:array{inputName:string, roleArn:string}, s3DestinationConfiguration?:array{bucket:string, key:string, glueConfiguration?:array{tableName:string, databaseName:string}, roleArn:string}}}>, status?:"CREATING"|"ACTIVE"|"DELETING", creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, retentionPeriod?:array{unlimited?:bool, numberOfDays?:int}, versioningConfiguration?:array{unlimited?:bool, maxVersions?:int}, lateDataRules?:array<array{ruleName?:string, ruleConfiguration:array{deltaTimeSessionWindowConfiguration?:array{timeoutInMinutes:int}}}>}}>
     */
    public function describeDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datastoreName:string, includeStatistics?:bool} $args
     * @return \AWS\Result<array{datastore?:array{name?:string, storage?:array{serviceManagedS3?:array{}, customerManagedS3?:array{bucket:string, keyPrefix?:string, roleArn:string}, iotSiteWiseMultiLayerStorage?:array{customerManagedS3Storage:array{bucket:string, keyPrefix?:string}}}, arn?:string, status?:"CREATING"|"ACTIVE"|"DELETING", retentionPeriod?:array{unlimited?:bool, numberOfDays?:int}, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, lastMessageArrivalTime?:int|string|\DateTimeInterface, fileFormatConfiguration?:array{jsonConfiguration?:array{}, parquetConfiguration?:array{schemaDefinition?:array{columns?:array<array{name:string, type:string}>}}}, datastorePartitions?:array{partitions?:array<array{attributePartition?:array{attributeName:string}, timestampPartition?:array{attributeName:string, timestampFormat?:string}}>}}, statistics?:array{size?:array{estimatedSizeInBytes?:float, estimatedOn?:int|string|\DateTimeInterface}}}>
     */
    public function describeDatastore(array $args): \AWS\Result { }

    /**
     * @param array{datastoreName:string, includeStatistics?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{datastore?:array{name?:string, storage?:array{serviceManagedS3?:array{}, customerManagedS3?:array{bucket:string, keyPrefix?:string, roleArn:string}, iotSiteWiseMultiLayerStorage?:array{customerManagedS3Storage:array{bucket:string, keyPrefix?:string}}}, arn?:string, status?:"CREATING"|"ACTIVE"|"DELETING", retentionPeriod?:array{unlimited?:bool, numberOfDays?:int}, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, lastMessageArrivalTime?:int|string|\DateTimeInterface, fileFormatConfiguration?:array{jsonConfiguration?:array{}, parquetConfiguration?:array{schemaDefinition?:array{columns?:array<array{name:string, type:string}>}}}, datastorePartitions?:array{partitions?:array<array{attributePartition?:array{attributeName:string}, timestampPartition?:array{attributeName:string, timestampFormat?:string}}>}}, statistics?:array{size?:array{estimatedSizeInBytes?:float, estimatedOn?:int|string|\DateTimeInterface}}}>
     */
    public function describeDatastoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{loggingOptions?:array{roleArn:string, level:"ERROR", enabled:bool}}>
     */
    public function describeLoggingOptions(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{loggingOptions?:array{roleArn:string, level:"ERROR", enabled:bool}}>
     */
    public function describeLoggingOptionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pipelineName:string} $args
     * @return \AWS\Result<array{pipeline?:array{name?:string, arn?:string, activities?:array<array{channel?:array{name:string, channelName:string, next?:string}, lambda?:array{name:string, lambdaName:string, batchSize:int, next?:string}, datastore?:array{name:string, datastoreName:string}, addAttributes?:array{name:string, attributes:array<string, string>, next?:string}, removeAttributes?:array{name:string, attributes:array<string>, next?:string}, selectAttributes?:array{name:string, attributes:array<string>, next?:string}, filter?:array{name:string, filter:mixed, next?:string}, math?:array{name:string, attribute:string, math:mixed, next?:string}, deviceRegistryEnrich?:array{name:string, attribute:string, thingName:string, roleArn:string, next?:string}, deviceShadowEnrich?:array{name:string, attribute:string, thingName:string, roleArn:string, next?:string}}>, reprocessingSummaries?:array<array{id?:string, status?:"RUNNING"|"SUCCEEDED"|"CANCELLED"|"FAILED", creationTime?:int|string|\DateTimeInterface}>, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface}}>
     */
    public function describePipeline(array $args): \AWS\Result { }

    /**
     * @param array{pipelineName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{pipeline?:array{name?:string, arn?:string, activities?:array<array{channel?:array{name:string, channelName:string, next?:string}, lambda?:array{name:string, lambdaName:string, batchSize:int, next?:string}, datastore?:array{name:string, datastoreName:string}, addAttributes?:array{name:string, attributes:array<string, string>, next?:string}, removeAttributes?:array{name:string, attributes:array<string>, next?:string}, selectAttributes?:array{name:string, attributes:array<string>, next?:string}, filter?:array{name:string, filter:mixed, next?:string}, math?:array{name:string, attribute:string, math:mixed, next?:string}, deviceRegistryEnrich?:array{name:string, attribute:string, thingName:string, roleArn:string, next?:string}, deviceShadowEnrich?:array{name:string, attribute:string, thingName:string, roleArn:string, next?:string}}>, reprocessingSummaries?:array<array{id?:string, status?:"RUNNING"|"SUCCEEDED"|"CANCELLED"|"FAILED", creationTime?:int|string|\DateTimeInterface}>, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface}}>
     */
    public function describePipelineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetName:string, versionId?:string} $args
     * @return \AWS\Result<array{entries?:array<array{entryName?:string, dataURI?:string}>, timestamp?:int|string|\DateTimeInterface, status?:array{state?:"CREATING"|"SUCCEEDED"|"FAILED", reason?:string}}>
     */
    public function getDatasetContent(array $args): \AWS\Result { }

    /**
     * @param array{datasetName:string, versionId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{entries?:array<array{entryName?:string, dataURI?:string}>, timestamp?:int|string|\DateTimeInterface, status?:array{state?:"CREATING"|"SUCCEEDED"|"FAILED", reason?:string}}>
     */
    public function getDatasetContentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{channelSummaries?:array<array{channelName?:string, channelStorage?:array{serviceManagedS3?:array{}, customerManagedS3?:array{bucket?:string, keyPrefix?:string, roleArn?:string}}, status?:"CREATING"|"ACTIVE"|"DELETING", creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, lastMessageArrivalTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listChannels(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{channelSummaries?:array<array{channelName?:string, channelStorage?:array{serviceManagedS3?:array{}, customerManagedS3?:array{bucket?:string, keyPrefix?:string, roleArn?:string}}, status?:"CREATING"|"ACTIVE"|"DELETING", creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, lastMessageArrivalTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listChannelsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetName:string, nextToken?:string, maxResults?:int, scheduledOnOrAfter?:int|string|\DateTimeInterface, scheduledBefore?:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{datasetContentSummaries?:array<array{version?:string, status?:array{state?:"CREATING"|"SUCCEEDED"|"FAILED", reason?:string}, creationTime?:int|string|\DateTimeInterface, scheduleTime?:int|string|\DateTimeInterface, completionTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listDatasetContents(array $args): \AWS\Result { }

    /**
     * @param array{datasetName:string, nextToken?:string, maxResults?:int, scheduledOnOrAfter?:int|string|\DateTimeInterface, scheduledBefore?:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{datasetContentSummaries?:array<array{version?:string, status?:array{state?:"CREATING"|"SUCCEEDED"|"FAILED", reason?:string}, creationTime?:int|string|\DateTimeInterface, scheduleTime?:int|string|\DateTimeInterface, completionTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listDatasetContentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{datasetSummaries?:array<array{datasetName?:string, status?:"CREATING"|"ACTIVE"|"DELETING", creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, triggers?:array<array{schedule?:array{expression?:string}, dataset?:array{name:string}}>, actions?:array<array{actionName?:string, actionType?:"QUERY"|"CONTAINER"}>}>, nextToken?:string}>
     */
    public function listDatasets(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{datasetSummaries?:array<array{datasetName?:string, status?:"CREATING"|"ACTIVE"|"DELETING", creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, triggers?:array<array{schedule?:array{expression?:string}, dataset?:array{name:string}}>, actions?:array<array{actionName?:string, actionType?:"QUERY"|"CONTAINER"}>}>, nextToken?:string}>
     */
    public function listDatasetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{datastoreSummaries?:array<array{datastoreName?:string, datastoreStorage?:array{serviceManagedS3?:array{}, customerManagedS3?:array{bucket?:string, keyPrefix?:string, roleArn?:string}, iotSiteWiseMultiLayerStorage?:array{customerManagedS3Storage?:array{bucket?:string, keyPrefix?:string}}}, status?:"CREATING"|"ACTIVE"|"DELETING", creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, lastMessageArrivalTime?:int|string|\DateTimeInterface, fileFormatType?:"JSON"|"PARQUET", datastorePartitions?:array{partitions?:array<array{attributePartition?:array{attributeName:string}, timestampPartition?:array{attributeName:string, timestampFormat?:string}}>}}>, nextToken?:string}>
     */
    public function listDatastores(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{datastoreSummaries?:array<array{datastoreName?:string, datastoreStorage?:array{serviceManagedS3?:array{}, customerManagedS3?:array{bucket?:string, keyPrefix?:string, roleArn?:string}, iotSiteWiseMultiLayerStorage?:array{customerManagedS3Storage?:array{bucket?:string, keyPrefix?:string}}}, status?:"CREATING"|"ACTIVE"|"DELETING", creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, lastMessageArrivalTime?:int|string|\DateTimeInterface, fileFormatType?:"JSON"|"PARQUET", datastorePartitions?:array{partitions?:array<array{attributePartition?:array{attributeName:string}, timestampPartition?:array{attributeName:string, timestampFormat?:string}}>}}>, nextToken?:string}>
     */
    public function listDatastoresAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{pipelineSummaries?:array<array{pipelineName?:string, reprocessingSummaries?:array<array{id?:string, status?:"RUNNING"|"SUCCEEDED"|"CANCELLED"|"FAILED", creationTime?:int|string|\DateTimeInterface}>, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listPipelines(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{pipelineSummaries?:array<array{pipelineName?:string, reprocessingSummaries?:array<array{id?:string, status?:"RUNNING"|"SUCCEEDED"|"CANCELLED"|"FAILED", creationTime?:int|string|\DateTimeInterface}>, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listPipelinesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{tags?:array<array{key:string, value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<array{key:string, value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{loggingOptions:array{roleArn:string, level:"ERROR", enabled:bool}} $args
     * @return \AWS\Result<void>
     */
    public function putLoggingOptions(array $args): \AWS\Result { }

    /**
     * @param array{loggingOptions:array{roleArn:string, level:"ERROR", enabled:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putLoggingOptionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pipelineActivity:array{channel?:array{name:string, channelName:string, next?:string}, lambda?:array{name:string, lambdaName:string, batchSize:int, next?:string}, datastore?:array{name:string, datastoreName:string}, addAttributes?:array{name:string, attributes:array<string, string>, next?:string}, removeAttributes?:array{name:string, attributes:array<string>, next?:string}, selectAttributes?:array{name:string, attributes:array<string>, next?:string}, filter?:array{name:string, filter:mixed, next?:string}, math?:array{name:string, attribute:string, math:mixed, next?:string}, deviceRegistryEnrich?:array{name:string, attribute:string, thingName:string, roleArn:string, next?:string}, deviceShadowEnrich?:array{name:string, attribute:string, thingName:string, roleArn:string, next?:string}}, payloads:array<string|resource|\Psr\Http\Message\StreamInterface>} $args
     * @return \AWS\Result<array{payloads?:array<string|resource|\Psr\Http\Message\StreamInterface>, logResult?:string}>
     */
    public function runPipelineActivity(array $args): \AWS\Result { }

    /**
     * @param array{pipelineActivity:array{channel?:array{name:string, channelName:string, next?:string}, lambda?:array{name:string, lambdaName:string, batchSize:int, next?:string}, datastore?:array{name:string, datastoreName:string}, addAttributes?:array{name:string, attributes:array<string, string>, next?:string}, removeAttributes?:array{name:string, attributes:array<string>, next?:string}, selectAttributes?:array{name:string, attributes:array<string>, next?:string}, filter?:array{name:string, filter:mixed, next?:string}, math?:array{name:string, attribute:string, math:mixed, next?:string}, deviceRegistryEnrich?:array{name:string, attribute:string, thingName:string, roleArn:string, next?:string}, deviceShadowEnrich?:array{name:string, attribute:string, thingName:string, roleArn:string, next?:string}}, payloads:array<string|resource|\Psr\Http\Message\StreamInterface>} $args
     * @return \GuzzleHttp\Promise\Promise<array{payloads?:array<string|resource|\Psr\Http\Message\StreamInterface>, logResult?:string}>
     */
    public function runPipelineActivityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{channelName:string, maxMessages?:int, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{payloads?:array<string|resource|\Psr\Http\Message\StreamInterface>}>
     */
    public function sampleChannelData(array $args): \AWS\Result { }

    /**
     * @param array{channelName:string, maxMessages?:int, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{payloads?:array<string|resource|\Psr\Http\Message\StreamInterface>}>
     */
    public function sampleChannelDataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pipelineName:string, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, channelMessages?:array{s3Paths?:array<string>}} $args
     * @return \AWS\Result<array{reprocessingId?:string}>
     */
    public function startPipelineReprocessing(array $args): \AWS\Result { }

    /**
     * @param array{pipelineName:string, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, channelMessages?:array{s3Paths?:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{reprocessingId?:string}>
     */
    public function startPipelineReprocessingAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{channelName:string, channelStorage?:array{serviceManagedS3?:array{}, customerManagedS3?:array{bucket:string, keyPrefix?:string, roleArn:string}}, retentionPeriod?:array{unlimited?:bool, numberOfDays?:int}} $args
     * @return \AWS\Result<void>
     */
    public function updateChannel(array $args): \AWS\Result { }

    /**
     * @param array{channelName:string, channelStorage?:array{serviceManagedS3?:array{}, customerManagedS3?:array{bucket:string, keyPrefix?:string, roleArn:string}}, retentionPeriod?:array{unlimited?:bool, numberOfDays?:int}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetName:string, actions:array<array{actionName?:string, queryAction?:array{sqlQuery:string, filters?:array<array{deltaTime?:array{offsetSeconds:int, timeExpression:string}}>}, containerAction?:array{image:string, executionRoleArn:string, resourceConfiguration:array{computeType:"ACU_1"|"ACU_2", volumeSizeInGB:int}, variables?:array<array{name:string, stringValue?:string, doubleValue?:float, datasetContentVersionValue?:array{datasetName:string}, outputFileUriValue?:array{fileName:string}}>}}>, triggers?:array<array{schedule?:array{expression?:string}, dataset?:array{name:string}}>, contentDeliveryRules?:array<array{entryName?:string, destination:array{iotEventsDestinationConfiguration?:array{inputName:string, roleArn:string}, s3DestinationConfiguration?:array{bucket:string, key:string, glueConfiguration?:array{tableName:string, databaseName:string}, roleArn:string}}}>, retentionPeriod?:array{unlimited?:bool, numberOfDays?:int}, versioningConfiguration?:array{unlimited?:bool, maxVersions?:int}, lateDataRules?:array<array{ruleName?:string, ruleConfiguration:array{deltaTimeSessionWindowConfiguration?:array{timeoutInMinutes:int}}}>} $args
     * @return \AWS\Result<void>
     */
    public function updateDataset(array $args): \AWS\Result { }

    /**
     * @param array{datasetName:string, actions:array<array{actionName?:string, queryAction?:array{sqlQuery:string, filters?:array<array{deltaTime?:array{offsetSeconds:int, timeExpression:string}}>}, containerAction?:array{image:string, executionRoleArn:string, resourceConfiguration:array{computeType:"ACU_1"|"ACU_2", volumeSizeInGB:int}, variables?:array<array{name:string, stringValue?:string, doubleValue?:float, datasetContentVersionValue?:array{datasetName:string}, outputFileUriValue?:array{fileName:string}}>}}>, triggers?:array<array{schedule?:array{expression?:string}, dataset?:array{name:string}}>, contentDeliveryRules?:array<array{entryName?:string, destination:array{iotEventsDestinationConfiguration?:array{inputName:string, roleArn:string}, s3DestinationConfiguration?:array{bucket:string, key:string, glueConfiguration?:array{tableName:string, databaseName:string}, roleArn:string}}}>, retentionPeriod?:array{unlimited?:bool, numberOfDays?:int}, versioningConfiguration?:array{unlimited?:bool, maxVersions?:int}, lateDataRules?:array<array{ruleName?:string, ruleConfiguration:array{deltaTimeSessionWindowConfiguration?:array{timeoutInMinutes:int}}}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datastoreName:string, retentionPeriod?:array{unlimited?:bool, numberOfDays?:int}, datastoreStorage?:array{serviceManagedS3?:array{}, customerManagedS3?:array{bucket:string, keyPrefix?:string, roleArn:string}, iotSiteWiseMultiLayerStorage?:array{customerManagedS3Storage:array{bucket:string, keyPrefix?:string}}}, fileFormatConfiguration?:array{jsonConfiguration?:array{}, parquetConfiguration?:array{schemaDefinition?:array{columns?:array<array{name:string, type:string}>}}}} $args
     * @return \AWS\Result<void>
     */
    public function updateDatastore(array $args): \AWS\Result { }

    /**
     * @param array{datastoreName:string, retentionPeriod?:array{unlimited?:bool, numberOfDays?:int}, datastoreStorage?:array{serviceManagedS3?:array{}, customerManagedS3?:array{bucket:string, keyPrefix?:string, roleArn:string}, iotSiteWiseMultiLayerStorage?:array{customerManagedS3Storage:array{bucket:string, keyPrefix?:string}}}, fileFormatConfiguration?:array{jsonConfiguration?:array{}, parquetConfiguration?:array{schemaDefinition?:array{columns?:array<array{name:string, type:string}>}}}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateDatastoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pipelineName:string, pipelineActivities:array<array{channel?:array{name:string, channelName:string, next?:string}, lambda?:array{name:string, lambdaName:string, batchSize:int, next?:string}, datastore?:array{name:string, datastoreName:string}, addAttributes?:array{name:string, attributes:array<string, string>, next?:string}, removeAttributes?:array{name:string, attributes:array<string>, next?:string}, selectAttributes?:array{name:string, attributes:array<string>, next?:string}, filter?:array{name:string, filter:mixed, next?:string}, math?:array{name:string, attribute:string, math:mixed, next?:string}, deviceRegistryEnrich?:array{name:string, attribute:string, thingName:string, roleArn:string, next?:string}, deviceShadowEnrich?:array{name:string, attribute:string, thingName:string, roleArn:string, next?:string}}>} $args
     * @return \AWS\Result<void>
     */
    public function updatePipeline(array $args): \AWS\Result { }

    /**
     * @param array{pipelineName:string, pipelineActivities:array<array{channel?:array{name:string, channelName:string, next?:string}, lambda?:array{name:string, lambdaName:string, batchSize:int, next?:string}, datastore?:array{name:string, datastoreName:string}, addAttributes?:array{name:string, attributes:array<string, string>, next?:string}, removeAttributes?:array{name:string, attributes:array<string>, next?:string}, selectAttributes?:array{name:string, attributes:array<string>, next?:string}, filter?:array{name:string, filter:mixed, next?:string}, math?:array{name:string, attribute:string, math:mixed, next?:string}, deviceRegistryEnrich?:array{name:string, attribute:string, thingName:string, roleArn:string, next?:string}, deviceShadowEnrich?:array{name:string, attribute:string, thingName:string, roleArn:string, next?:string}}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updatePipelineAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
