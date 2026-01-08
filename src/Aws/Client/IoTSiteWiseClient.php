<?php
namespace AWS\IoTSiteWise;

class IoTSiteWiseClient
{
    /**
     * @param array{assetId:string, hierarchyId:string, childAssetId:string, clientToken?:string} $args
     * @return \AWS\Result<void>
     */
    public function associateAssets(array $args): \AWS\Result { }

    /**
     * @param array{assetId:string, hierarchyId:string, childAssetId:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function associateAssetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{alias:string, assetId:string, propertyId:string, clientToken?:string} $args
     * @return \AWS\Result<void>
     */
    public function associateTimeSeriesToAssetProperty(array $args): \AWS\Result { }

    /**
     * @param array{alias:string, assetId:string, propertyId:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function associateTimeSeriesToAssetPropertyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{projectId:string, assetIds:array<string>, clientToken?:string} $args
     * @return \AWS\Result<array{errors?:array<array{assetId:string, code:"INTERNAL_FAILURE", message:string}>}>
     */
    public function batchAssociateProjectAssets(array $args): \AWS\Result { }

    /**
     * @param array{projectId:string, assetIds:array<string>, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{errors?:array<array{assetId:string, code:"INTERNAL_FAILURE", message:string}>}>
     */
    public function batchAssociateProjectAssetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{projectId:string, assetIds:array<string>, clientToken?:string} $args
     * @return \AWS\Result<array{errors?:array<array{assetId:string, code:"INTERNAL_FAILURE", message:string}>}>
     */
    public function batchDisassociateProjectAssets(array $args): \AWS\Result { }

    /**
     * @param array{projectId:string, assetIds:array<string>, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{errors?:array<array{assetId:string, code:"INTERNAL_FAILURE", message:string}>}>
     */
    public function batchDisassociateProjectAssetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{entries:array<array{entryId:string, assetId?:string, propertyId?:string, propertyAlias?:string, aggregateTypes:array<"AVERAGE"|"COUNT"|"MAXIMUM"|"MINIMUM"|"SUM"|"STANDARD_DEVIATION">, resolution:string, startDate:int|string|\DateTimeInterface, endDate:int|string|\DateTimeInterface, qualities?:array<"GOOD"|"BAD"|"UNCERTAIN">, timeOrdering?:"ASCENDING"|"DESCENDING"}>, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{errorEntries:array<array{errorCode:"ResourceNotFoundException"|"InvalidRequestException"|"AccessDeniedException", errorMessage:string, entryId:string}>, successEntries:array<array{entryId:string, aggregatedValues:array<array{timestamp:int|string|\DateTimeInterface, quality?:"GOOD"|"BAD"|"UNCERTAIN", value:array{average?:float, count?:float, maximum?:float, minimum?:float, sum?:float, standardDeviation?:float}}>}>, skippedEntries:array<array{entryId:string, completionStatus:"SUCCESS"|"ERROR", errorInfo?:array{errorCode:"ResourceNotFoundException"|"InvalidRequestException"|"AccessDeniedException", errorTimestamp:int|string|\DateTimeInterface}}>, nextToken?:string}>
     */
    public function batchGetAssetPropertyAggregates(array $args): \AWS\Result { }

    /**
     * @param array{entries:array<array{entryId:string, assetId?:string, propertyId?:string, propertyAlias?:string, aggregateTypes:array<"AVERAGE"|"COUNT"|"MAXIMUM"|"MINIMUM"|"SUM"|"STANDARD_DEVIATION">, resolution:string, startDate:int|string|\DateTimeInterface, endDate:int|string|\DateTimeInterface, qualities?:array<"GOOD"|"BAD"|"UNCERTAIN">, timeOrdering?:"ASCENDING"|"DESCENDING"}>, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{errorEntries:array<array{errorCode:"ResourceNotFoundException"|"InvalidRequestException"|"AccessDeniedException", errorMessage:string, entryId:string}>, successEntries:array<array{entryId:string, aggregatedValues:array<array{timestamp:int|string|\DateTimeInterface, quality?:"GOOD"|"BAD"|"UNCERTAIN", value:array{average?:float, count?:float, maximum?:float, minimum?:float, sum?:float, standardDeviation?:float}}>}>, skippedEntries:array<array{entryId:string, completionStatus:"SUCCESS"|"ERROR", errorInfo?:array{errorCode:"ResourceNotFoundException"|"InvalidRequestException"|"AccessDeniedException", errorTimestamp:int|string|\DateTimeInterface}}>, nextToken?:string}>
     */
    public function batchGetAssetPropertyAggregatesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{entries:array<array{entryId:string, assetId?:string, propertyId?:string, propertyAlias?:string}>, nextToken?:string} $args
     * @return \AWS\Result<array{errorEntries:array<array{errorCode:"ResourceNotFoundException"|"InvalidRequestException"|"AccessDeniedException", errorMessage:string, entryId:string}>, successEntries:array<array{entryId:string, assetPropertyValue?:array{value:array{stringValue?:string, integerValue?:int, doubleValue?:float, booleanValue?:bool, nullValue?:array{valueType:"D"|"B"|"S"|"I"|"U"}}, timestamp:array{timeInSeconds:int, offsetInNanos?:int}, quality?:"GOOD"|"BAD"|"UNCERTAIN"}}>, skippedEntries:array<array{entryId:string, completionStatus:"SUCCESS"|"ERROR", errorInfo?:array{errorCode:"ResourceNotFoundException"|"InvalidRequestException"|"AccessDeniedException", errorTimestamp:int|string|\DateTimeInterface}}>, nextToken?:string}>
     */
    public function batchGetAssetPropertyValue(array $args): \AWS\Result { }

    /**
     * @param array{entries:array<array{entryId:string, assetId?:string, propertyId?:string, propertyAlias?:string}>, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{errorEntries:array<array{errorCode:"ResourceNotFoundException"|"InvalidRequestException"|"AccessDeniedException", errorMessage:string, entryId:string}>, successEntries:array<array{entryId:string, assetPropertyValue?:array{value:array{stringValue?:string, integerValue?:int, doubleValue?:float, booleanValue?:bool, nullValue?:array{valueType:"D"|"B"|"S"|"I"|"U"}}, timestamp:array{timeInSeconds:int, offsetInNanos?:int}, quality?:"GOOD"|"BAD"|"UNCERTAIN"}}>, skippedEntries:array<array{entryId:string, completionStatus:"SUCCESS"|"ERROR", errorInfo?:array{errorCode:"ResourceNotFoundException"|"InvalidRequestException"|"AccessDeniedException", errorTimestamp:int|string|\DateTimeInterface}}>, nextToken?:string}>
     */
    public function batchGetAssetPropertyValueAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{entries:array<array{entryId:string, assetId?:string, propertyId?:string, propertyAlias?:string, startDate?:int|string|\DateTimeInterface, endDate?:int|string|\DateTimeInterface, qualities?:array<"GOOD"|"BAD"|"UNCERTAIN">, timeOrdering?:"ASCENDING"|"DESCENDING"}>, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{errorEntries:array<array{errorCode:"ResourceNotFoundException"|"InvalidRequestException"|"AccessDeniedException", errorMessage:string, entryId:string}>, successEntries:array<array{entryId:string, assetPropertyValueHistory:array<array{value:array{stringValue?:string, integerValue?:int, doubleValue?:float, booleanValue?:bool, nullValue?:array{valueType:"D"|"B"|"S"|"I"|"U"}}, timestamp:array{timeInSeconds:int, offsetInNanos?:int}, quality?:"GOOD"|"BAD"|"UNCERTAIN"}>}>, skippedEntries:array<array{entryId:string, completionStatus:"SUCCESS"|"ERROR", errorInfo?:array{errorCode:"ResourceNotFoundException"|"InvalidRequestException"|"AccessDeniedException", errorTimestamp:int|string|\DateTimeInterface}}>, nextToken?:string}>
     */
    public function batchGetAssetPropertyValueHistory(array $args): \AWS\Result { }

    /**
     * @param array{entries:array<array{entryId:string, assetId?:string, propertyId?:string, propertyAlias?:string, startDate?:int|string|\DateTimeInterface, endDate?:int|string|\DateTimeInterface, qualities?:array<"GOOD"|"BAD"|"UNCERTAIN">, timeOrdering?:"ASCENDING"|"DESCENDING"}>, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{errorEntries:array<array{errorCode:"ResourceNotFoundException"|"InvalidRequestException"|"AccessDeniedException", errorMessage:string, entryId:string}>, successEntries:array<array{entryId:string, assetPropertyValueHistory:array<array{value:array{stringValue?:string, integerValue?:int, doubleValue?:float, booleanValue?:bool, nullValue?:array{valueType:"D"|"B"|"S"|"I"|"U"}}, timestamp:array{timeInSeconds:int, offsetInNanos?:int}, quality?:"GOOD"|"BAD"|"UNCERTAIN"}>}>, skippedEntries:array<array{entryId:string, completionStatus:"SUCCESS"|"ERROR", errorInfo?:array{errorCode:"ResourceNotFoundException"|"InvalidRequestException"|"AccessDeniedException", errorTimestamp:int|string|\DateTimeInterface}}>, nextToken?:string}>
     */
    public function batchGetAssetPropertyValueHistoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{enablePartialEntryProcessing?:bool, entries:array<array{entryId:string, assetId?:string, propertyId?:string, propertyAlias?:string, propertyValues:array<array{value:array{stringValue?:string, integerValue?:int, doubleValue?:float, booleanValue?:bool, nullValue?:array{valueType:"D"|"B"|"S"|"I"|"U"}}, timestamp:array{timeInSeconds:int, offsetInNanos?:int}, quality?:"GOOD"|"BAD"|"UNCERTAIN"}>}>} $args
     * @return \AWS\Result<array{errorEntries:array<array{entryId:string, errors:array<array{errorCode:"ResourceNotFoundException"|"InvalidRequestException"|"InternalFailureException"|"ServiceUnavailableException"|"ThrottlingException"|"LimitExceededException"|"ConflictingOperationException"|"TimestampOutOfRangeException"|"AccessDeniedException", errorMessage:string, timestamps:array<array{timeInSeconds:int, offsetInNanos?:int}>}>}>}>
     */
    public function batchPutAssetPropertyValue(array $args): \AWS\Result { }

    /**
     * @param array{enablePartialEntryProcessing?:bool, entries:array<array{entryId:string, assetId?:string, propertyId?:string, propertyAlias?:string, propertyValues:array<array{value:array{stringValue?:string, integerValue?:int, doubleValue?:float, booleanValue?:bool, nullValue?:array{valueType:"D"|"B"|"S"|"I"|"U"}}, timestamp:array{timeInSeconds:int, offsetInNanos?:int}, quality?:"GOOD"|"BAD"|"UNCERTAIN"}>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{errorEntries:array<array{entryId:string, errors:array<array{errorCode:"ResourceNotFoundException"|"InvalidRequestException"|"InternalFailureException"|"ServiceUnavailableException"|"ThrottlingException"|"LimitExceededException"|"ConflictingOperationException"|"TimestampOutOfRangeException"|"AccessDeniedException", errorMessage:string, timestamps:array<array{timeInSeconds:int, offsetInNanos?:int}>}>}>}>
     */
    public function batchPutAssetPropertyValueAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accessPolicyIdentity:array{user?:array{id:string}, group?:array{id:string}, iamUser?:array{arn:string}, iamRole?:array{arn:string}}, accessPolicyResource:array{portal?:array{id:string}, project?:array{id:string}}, accessPolicyPermission:"ADMINISTRATOR"|"VIEWER", clientToken?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{accessPolicyId:string, accessPolicyArn:string}>
     */
    public function createAccessPolicy(array $args): \AWS\Result { }

    /**
     * @param array{accessPolicyIdentity:array{user?:array{id:string}, group?:array{id:string}, iamUser?:array{arn:string}, iamRole?:array{arn:string}}, accessPolicyResource:array{portal?:array{id:string}, project?:array{id:string}}, accessPolicyPermission:"ADMINISTRATOR"|"VIEWER", clientToken?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{accessPolicyId:string, accessPolicyArn:string}>
     */
    public function createAccessPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetName:string, assetModelId:string, clientToken?:string, tags?:array<string, string>, assetDescription?:string, assetId?:string, assetExternalId?:string} $args
     * @return \AWS\Result<array{assetId:string, assetArn:string, assetStatus:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}}>
     */
    public function createAsset(array $args): \AWS\Result { }

    /**
     * @param array{assetName:string, assetModelId:string, clientToken?:string, tags?:array<string, string>, assetDescription?:string, assetId?:string, assetExternalId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assetId:string, assetArn:string, assetStatus:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}}>
     */
    public function createAssetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetModelName:string, assetModelType?:"ASSET_MODEL"|"COMPONENT_MODEL", assetModelId?:string, assetModelExternalId?:string, assetModelDescription?:string, assetModelProperties?:array<array{id?:string, externalId?:string, name:string, dataType:"STRING"|"INTEGER"|"DOUBLE"|"BOOLEAN"|"STRUCT", dataTypeSpec?:string, unit?:string, type:array{attribute?:array{defaultValue?:string}, measurement?:array{processingConfig?:array{forwardingConfig:array{state:"DISABLED"|"ENABLED"}}}, transform?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, processingConfig?:array{computeLocation:"EDGE"|"CLOUD", forwardingConfig?:array{state:"DISABLED"|"ENABLED"}}}, metric?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, window:array{tumbling?:array{interval:string, offset?:string}}, processingConfig?:array{computeLocation:"EDGE"|"CLOUD"}}}}>, assetModelHierarchies?:array<array{id?:string, externalId?:string, name:string, childAssetModelId:string}>, assetModelCompositeModels?:array<array{id?:string, externalId?:string, name:string, description?:string, type:string, properties?:array<array{id?:string, externalId?:string, name:string, dataType:"STRING"|"INTEGER"|"DOUBLE"|"BOOLEAN"|"STRUCT", dataTypeSpec?:string, unit?:string, type:array{attribute?:array{defaultValue?:string}, measurement?:array{processingConfig?:array{forwardingConfig:array{state:"DISABLED"|"ENABLED"}}}, transform?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, processingConfig?:array{computeLocation:"EDGE"|"CLOUD", forwardingConfig?:array{state:"DISABLED"|"ENABLED"}}}, metric?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, window:array{tumbling?:array{interval:string, offset?:string}}, processingConfig?:array{computeLocation:"EDGE"|"CLOUD"}}}}>}>, clientToken?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{assetModelId:string, assetModelArn:string, assetModelStatus:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"PROPAGATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}}>
     */
    public function createAssetModel(array $args): \AWS\Result { }

    /**
     * @param array{assetModelName:string, assetModelType?:"ASSET_MODEL"|"COMPONENT_MODEL", assetModelId?:string, assetModelExternalId?:string, assetModelDescription?:string, assetModelProperties?:array<array{id?:string, externalId?:string, name:string, dataType:"STRING"|"INTEGER"|"DOUBLE"|"BOOLEAN"|"STRUCT", dataTypeSpec?:string, unit?:string, type:array{attribute?:array{defaultValue?:string}, measurement?:array{processingConfig?:array{forwardingConfig:array{state:"DISABLED"|"ENABLED"}}}, transform?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, processingConfig?:array{computeLocation:"EDGE"|"CLOUD", forwardingConfig?:array{state:"DISABLED"|"ENABLED"}}}, metric?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, window:array{tumbling?:array{interval:string, offset?:string}}, processingConfig?:array{computeLocation:"EDGE"|"CLOUD"}}}}>, assetModelHierarchies?:array<array{id?:string, externalId?:string, name:string, childAssetModelId:string}>, assetModelCompositeModels?:array<array{id?:string, externalId?:string, name:string, description?:string, type:string, properties?:array<array{id?:string, externalId?:string, name:string, dataType:"STRING"|"INTEGER"|"DOUBLE"|"BOOLEAN"|"STRUCT", dataTypeSpec?:string, unit?:string, type:array{attribute?:array{defaultValue?:string}, measurement?:array{processingConfig?:array{forwardingConfig:array{state:"DISABLED"|"ENABLED"}}}, transform?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, processingConfig?:array{computeLocation:"EDGE"|"CLOUD", forwardingConfig?:array{state:"DISABLED"|"ENABLED"}}}, metric?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, window:array{tumbling?:array{interval:string, offset?:string}}, processingConfig?:array{computeLocation:"EDGE"|"CLOUD"}}}}>}>, clientToken?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{assetModelId:string, assetModelArn:string, assetModelStatus:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"PROPAGATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}}>
     */
    public function createAssetModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetModelId:string, assetModelCompositeModelExternalId?:string, parentAssetModelCompositeModelId?:string, assetModelCompositeModelId?:string, assetModelCompositeModelDescription?:string, assetModelCompositeModelName:string, assetModelCompositeModelType:string, clientToken?:string, composedAssetModelId?:string, assetModelCompositeModelProperties?:array<array{id?:string, externalId?:string, name:string, dataType:"STRING"|"INTEGER"|"DOUBLE"|"BOOLEAN"|"STRUCT", dataTypeSpec?:string, unit?:string, type:array{attribute?:array{defaultValue?:string}, measurement?:array{processingConfig?:array{forwardingConfig:array{state:"DISABLED"|"ENABLED"}}}, transform?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, processingConfig?:array{computeLocation:"EDGE"|"CLOUD", forwardingConfig?:array{state:"DISABLED"|"ENABLED"}}}, metric?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, window:array{tumbling?:array{interval:string, offset?:string}}, processingConfig?:array{computeLocation:"EDGE"|"CLOUD"}}}}>, ifMatch?:string, ifNoneMatch?:string, matchForVersionType?:"LATEST"|"ACTIVE"} $args
     * @return \AWS\Result<array{assetModelCompositeModelId:string, assetModelCompositeModelPath:array<array{id?:string, name?:string}>, assetModelStatus:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"PROPAGATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}}>
     */
    public function createAssetModelCompositeModel(array $args): \AWS\Result { }

    /**
     * @param array{assetModelId:string, assetModelCompositeModelExternalId?:string, parentAssetModelCompositeModelId?:string, assetModelCompositeModelId?:string, assetModelCompositeModelDescription?:string, assetModelCompositeModelName:string, assetModelCompositeModelType:string, clientToken?:string, composedAssetModelId?:string, assetModelCompositeModelProperties?:array<array{id?:string, externalId?:string, name:string, dataType:"STRING"|"INTEGER"|"DOUBLE"|"BOOLEAN"|"STRUCT", dataTypeSpec?:string, unit?:string, type:array{attribute?:array{defaultValue?:string}, measurement?:array{processingConfig?:array{forwardingConfig:array{state:"DISABLED"|"ENABLED"}}}, transform?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, processingConfig?:array{computeLocation:"EDGE"|"CLOUD", forwardingConfig?:array{state:"DISABLED"|"ENABLED"}}}, metric?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, window:array{tumbling?:array{interval:string, offset?:string}}, processingConfig?:array{computeLocation:"EDGE"|"CLOUD"}}}}>, ifMatch?:string, ifNoneMatch?:string, matchForVersionType?:"LATEST"|"ACTIVE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{assetModelCompositeModelId:string, assetModelCompositeModelPath:array<array{id?:string, name?:string}>, assetModelStatus:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"PROPAGATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}}>
     */
    public function createAssetModelCompositeModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobName:string, jobRoleArn:string, files:array<array{bucket:string, key:string, versionId?:string}>, errorReportLocation:array{bucket:string, prefix:string}, jobConfiguration:array{fileFormat:array{csv?:array{columnNames:array<"ALIAS"|"ASSET_ID"|"PROPERTY_ID"|"DATA_TYPE"|"TIMESTAMP_SECONDS"|"TIMESTAMP_NANO_OFFSET"|"QUALITY"|"VALUE">}, parquet?:array{}}}, adaptiveIngestion?:bool, deleteFilesAfterImport?:bool} $args
     * @return \AWS\Result<array{jobId:string, jobName:string, jobStatus:"PENDING"|"CANCELLED"|"RUNNING"|"COMPLETED"|"FAILED"|"COMPLETED_WITH_FAILURES"}>
     */
    public function createBulkImportJob(array $args): \AWS\Result { }

    /**
     * @param array{jobName:string, jobRoleArn:string, files:array<array{bucket:string, key:string, versionId?:string}>, errorReportLocation:array{bucket:string, prefix:string}, jobConfiguration:array{fileFormat:array{csv?:array{columnNames:array<"ALIAS"|"ASSET_ID"|"PROPERTY_ID"|"DATA_TYPE"|"TIMESTAMP_SECONDS"|"TIMESTAMP_NANO_OFFSET"|"QUALITY"|"VALUE">}, parquet?:array{}}}, adaptiveIngestion?:bool, deleteFilesAfterImport?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobId:string, jobName:string, jobStatus:"PENDING"|"CANCELLED"|"RUNNING"|"COMPLETED"|"FAILED"|"COMPLETED_WITH_FAILURES"}>
     */
    public function createBulkImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{projectId:string, dashboardName:string, dashboardDescription?:string, dashboardDefinition:string, clientToken?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{dashboardId:string, dashboardArn:string}>
     */
    public function createDashboard(array $args): \AWS\Result { }

    /**
     * @param array{projectId:string, dashboardName:string, dashboardDescription?:string, dashboardDefinition:string, clientToken?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{dashboardId:string, dashboardArn:string}>
     */
    public function createDashboardAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetId?:string, datasetName:string, datasetDescription?:string, datasetSource:array{sourceType:"KENDRA", sourceFormat:"KNOWLEDGE_BASE", sourceDetail?:array{kendra?:array{knowledgeBaseArn:string, roleArn:string}}}, clientToken?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{datasetId:string, datasetArn:string, datasetStatus:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}}>
     */
    public function createDataset(array $args): \AWS\Result { }

    /**
     * @param array{datasetId?:string, datasetName:string, datasetDescription?:string, datasetSource:array{sourceType:"KENDRA", sourceFormat:"KNOWLEDGE_BASE", sourceDetail?:array{kendra?:array{knowledgeBaseArn:string, roleArn:string}}}, clientToken?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{datasetId:string, datasetArn:string, datasetStatus:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}}>
     */
    public function createDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{gatewayName:string, gatewayPlatform:array{greengrass?:array{groupArn:string}, greengrassV2?:array{coreDeviceThingName:string}, siemensIE?:array{iotCoreThingName:string}}, tags?:array<string, string>} $args
     * @return \AWS\Result<array{gatewayId:string, gatewayArn:string}>
     */
    public function createGateway(array $args): \AWS\Result { }

    /**
     * @param array{gatewayName:string, gatewayPlatform:array{greengrass?:array{groupArn:string}, greengrassV2?:array{coreDeviceThingName:string}, siemensIE?:array{iotCoreThingName:string}}, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{gatewayId:string, gatewayArn:string}>
     */
    public function createGatewayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{portalName:string, portalDescription?:string, portalContactEmail:string, clientToken?:string, portalLogoImageFile?:array{data:string|resource|\Psr\Http\Message\StreamInterface, type:"PNG"}, roleArn:string, tags?:array<string, string>, portalAuthMode?:"IAM"|"SSO", notificationSenderEmail?:string, alarms?:array{alarmRoleArn:string, notificationLambdaArn?:string}, portalType?:"SITEWISE_PORTAL_V1"|"SITEWISE_PORTAL_V2", portalTypeConfiguration?:array<string, array{portalTools?:array<string>}>} $args
     * @return \AWS\Result<array{portalId:string, portalArn:string, portalStartUrl:string, portalStatus:array{state:"CREATING"|"PENDING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED", error?:array{code?:"INTERNAL_FAILURE"|"VALIDATION_ERROR"|"LIMIT_EXCEEDED", message?:string}}, ssoApplicationId:string}>
     */
    public function createPortal(array $args): \AWS\Result { }

    /**
     * @param array{portalName:string, portalDescription?:string, portalContactEmail:string, clientToken?:string, portalLogoImageFile?:array{data:string|resource|\Psr\Http\Message\StreamInterface, type:"PNG"}, roleArn:string, tags?:array<string, string>, portalAuthMode?:"IAM"|"SSO", notificationSenderEmail?:string, alarms?:array{alarmRoleArn:string, notificationLambdaArn?:string}, portalType?:"SITEWISE_PORTAL_V1"|"SITEWISE_PORTAL_V2", portalTypeConfiguration?:array<string, array{portalTools?:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{portalId:string, portalArn:string, portalStartUrl:string, portalStatus:array{state:"CREATING"|"PENDING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED", error?:array{code?:"INTERNAL_FAILURE"|"VALIDATION_ERROR"|"LIMIT_EXCEEDED", message?:string}}, ssoApplicationId:string}>
     */
    public function createPortalAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{portalId:string, projectName:string, projectDescription?:string, clientToken?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{projectId:string, projectArn:string}>
     */
    public function createProject(array $args): \AWS\Result { }

    /**
     * @param array{portalId:string, projectName:string, projectDescription?:string, clientToken?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{projectId:string, projectArn:string}>
     */
    public function createProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accessPolicyId:string, clientToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAccessPolicy(array $args): \AWS\Result { }

    /**
     * @param array{accessPolicyId:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAccessPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetId:string, clientToken?:string} $args
     * @return \AWS\Result<array{assetStatus:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}}>
     */
    public function deleteAsset(array $args): \AWS\Result { }

    /**
     * @param array{assetId:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assetStatus:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}}>
     */
    public function deleteAssetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetModelId:string, clientToken?:string, ifMatch?:string, ifNoneMatch?:string, matchForVersionType?:"LATEST"|"ACTIVE"} $args
     * @return \AWS\Result<array{assetModelStatus:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"PROPAGATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}}>
     */
    public function deleteAssetModel(array $args): \AWS\Result { }

    /**
     * @param array{assetModelId:string, clientToken?:string, ifMatch?:string, ifNoneMatch?:string, matchForVersionType?:"LATEST"|"ACTIVE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{assetModelStatus:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"PROPAGATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}}>
     */
    public function deleteAssetModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetModelId:string, assetModelCompositeModelId:string, clientToken?:string, ifMatch?:string, ifNoneMatch?:string, matchForVersionType?:"LATEST"|"ACTIVE"} $args
     * @return \AWS\Result<array{assetModelStatus:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"PROPAGATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}}>
     */
    public function deleteAssetModelCompositeModel(array $args): \AWS\Result { }

    /**
     * @param array{assetModelId:string, assetModelCompositeModelId:string, clientToken?:string, ifMatch?:string, ifNoneMatch?:string, matchForVersionType?:"LATEST"|"ACTIVE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{assetModelStatus:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"PROPAGATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}}>
     */
    public function deleteAssetModelCompositeModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{dashboardId:string, clientToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteDashboard(array $args): \AWS\Result { }

    /**
     * @param array{dashboardId:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteDashboardAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetId:string, clientToken?:string} $args
     * @return \AWS\Result<array{datasetStatus:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}}>
     */
    public function deleteDataset(array $args): \AWS\Result { }

    /**
     * @param array{datasetId:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{datasetStatus:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}}>
     */
    public function deleteDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{gatewayId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteGateway(array $args): \AWS\Result { }

    /**
     * @param array{gatewayId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteGatewayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{portalId:string, clientToken?:string} $args
     * @return \AWS\Result<array{portalStatus:array{state:"CREATING"|"PENDING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED", error?:array{code?:"INTERNAL_FAILURE"|"VALIDATION_ERROR"|"LIMIT_EXCEEDED", message?:string}}}>
     */
    public function deletePortal(array $args): \AWS\Result { }

    /**
     * @param array{portalId:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{portalStatus:array{state:"CREATING"|"PENDING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED", error?:array{code?:"INTERNAL_FAILURE"|"VALIDATION_ERROR"|"LIMIT_EXCEEDED", message?:string}}}>
     */
    public function deletePortalAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{projectId:string, clientToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteProject(array $args): \AWS\Result { }

    /**
     * @param array{projectId:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{alias?:string, assetId?:string, propertyId?:string, clientToken?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteTimeSeries(array $args = []): \AWS\Result { }

    /**
     * @param array{alias?:string, assetId?:string, propertyId?:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteTimeSeriesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accessPolicyId:string} $args
     * @return \AWS\Result<array{accessPolicyId:string, accessPolicyArn:string, accessPolicyIdentity:array{user?:array{id:string}, group?:array{id:string}, iamUser?:array{arn:string}, iamRole?:array{arn:string}}, accessPolicyResource:array{portal?:array{id:string}, project?:array{id:string}}, accessPolicyPermission:"ADMINISTRATOR"|"VIEWER", accessPolicyCreationDate:int|string|\DateTimeInterface, accessPolicyLastUpdateDate:int|string|\DateTimeInterface}>
     */
    public function describeAccessPolicy(array $args): \AWS\Result { }

    /**
     * @param array{accessPolicyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{accessPolicyId:string, accessPolicyArn:string, accessPolicyIdentity:array{user?:array{id:string}, group?:array{id:string}, iamUser?:array{arn:string}, iamRole?:array{arn:string}}, accessPolicyResource:array{portal?:array{id:string}, project?:array{id:string}}, accessPolicyPermission:"ADMINISTRATOR"|"VIEWER", accessPolicyCreationDate:int|string|\DateTimeInterface, accessPolicyLastUpdateDate:int|string|\DateTimeInterface}>
     */
    public function describeAccessPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{actionId:string} $args
     * @return \AWS\Result<array{actionId:string, targetResource:array{assetId:string}, actionDefinitionId:string, actionPayload:array{stringValue:string}, executionTime:int|string|\DateTimeInterface}>
     */
    public function describeAction(array $args): \AWS\Result { }

    /**
     * @param array{actionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{actionId:string, targetResource:array{assetId:string}, actionDefinitionId:string, actionPayload:array{stringValue:string}, executionTime:int|string|\DateTimeInterface}>
     */
    public function describeActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetId:string, excludeProperties?:bool} $args
     * @return \AWS\Result<array{assetId:string, assetArn:string, assetName:string, assetModelId:string, assetProperties:array<array{id:string, name:string, alias?:string, notification?:array{topic:string, state:"ENABLED"|"DISABLED"}, dataType:"STRING"|"INTEGER"|"DOUBLE"|"BOOLEAN"|"STRUCT", dataTypeSpec?:string, unit?:string, path?:array<array{id?:string, name?:string}>, externalId?:string}>, assetHierarchies:array<array{id?:string, name:string, externalId?:string}>, assetCompositeModels?:array<array{name:string, description?:string, type:string, properties:array<array{id:string, name:string, alias?:string, notification?:array{topic:string, state:"ENABLED"|"DISABLED"}, dataType:"STRING"|"INTEGER"|"DOUBLE"|"BOOLEAN"|"STRUCT", dataTypeSpec?:string, unit?:string, path?:array<array{id?:string, name?:string}>, externalId?:string}>, id?:string, externalId?:string}>, assetCreationDate:int|string|\DateTimeInterface, assetLastUpdateDate:int|string|\DateTimeInterface, assetStatus:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}, assetDescription?:string, assetCompositeModelSummaries?:array<array{id:string, externalId?:string, name:string, type:string, description:string, path:array<array{id?:string, name?:string}>}>, assetExternalId?:string}>
     */
    public function describeAsset(array $args): \AWS\Result { }

    /**
     * @param array{assetId:string, excludeProperties?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{assetId:string, assetArn:string, assetName:string, assetModelId:string, assetProperties:array<array{id:string, name:string, alias?:string, notification?:array{topic:string, state:"ENABLED"|"DISABLED"}, dataType:"STRING"|"INTEGER"|"DOUBLE"|"BOOLEAN"|"STRUCT", dataTypeSpec?:string, unit?:string, path?:array<array{id?:string, name?:string}>, externalId?:string}>, assetHierarchies:array<array{id?:string, name:string, externalId?:string}>, assetCompositeModels?:array<array{name:string, description?:string, type:string, properties:array<array{id:string, name:string, alias?:string, notification?:array{topic:string, state:"ENABLED"|"DISABLED"}, dataType:"STRING"|"INTEGER"|"DOUBLE"|"BOOLEAN"|"STRUCT", dataTypeSpec?:string, unit?:string, path?:array<array{id?:string, name?:string}>, externalId?:string}>, id?:string, externalId?:string}>, assetCreationDate:int|string|\DateTimeInterface, assetLastUpdateDate:int|string|\DateTimeInterface, assetStatus:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}, assetDescription?:string, assetCompositeModelSummaries?:array<array{id:string, externalId?:string, name:string, type:string, description:string, path:array<array{id?:string, name?:string}>}>, assetExternalId?:string}>
     */
    public function describeAssetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetId:string, assetCompositeModelId:string} $args
     * @return \AWS\Result<array{assetId:string, assetCompositeModelId:string, assetCompositeModelExternalId?:string, assetCompositeModelPath:array<array{id?:string, name?:string}>, assetCompositeModelName:string, assetCompositeModelDescription:string, assetCompositeModelType:string, assetCompositeModelProperties:array<array{id:string, name:string, alias?:string, notification?:array{topic:string, state:"ENABLED"|"DISABLED"}, dataType:"STRING"|"INTEGER"|"DOUBLE"|"BOOLEAN"|"STRUCT", dataTypeSpec?:string, unit?:string, path?:array<array{id?:string, name?:string}>, externalId?:string}>, assetCompositeModelSummaries:array<array{id:string, externalId?:string, name:string, type:string, description:string, path:array<array{id?:string, name?:string}>}>, actionDefinitions?:array<array{actionDefinitionId:string, actionName:string, actionType:string}>}>
     */
    public function describeAssetCompositeModel(array $args): \AWS\Result { }

    /**
     * @param array{assetId:string, assetCompositeModelId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assetId:string, assetCompositeModelId:string, assetCompositeModelExternalId?:string, assetCompositeModelPath:array<array{id?:string, name?:string}>, assetCompositeModelName:string, assetCompositeModelDescription:string, assetCompositeModelType:string, assetCompositeModelProperties:array<array{id:string, name:string, alias?:string, notification?:array{topic:string, state:"ENABLED"|"DISABLED"}, dataType:"STRING"|"INTEGER"|"DOUBLE"|"BOOLEAN"|"STRUCT", dataTypeSpec?:string, unit?:string, path?:array<array{id?:string, name?:string}>, externalId?:string}>, assetCompositeModelSummaries:array<array{id:string, externalId?:string, name:string, type:string, description:string, path:array<array{id?:string, name?:string}>}>, actionDefinitions?:array<array{actionDefinitionId:string, actionName:string, actionType:string}>}>
     */
    public function describeAssetCompositeModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetModelId:string, excludeProperties?:bool, assetModelVersion?:string} $args
     * @return \AWS\Result<array{assetModelId:string, assetModelExternalId?:string, assetModelArn:string, assetModelName:string, assetModelType?:"ASSET_MODEL"|"COMPONENT_MODEL", assetModelDescription:string, assetModelProperties:array<array{id?:string, externalId?:string, name:string, dataType:"STRING"|"INTEGER"|"DOUBLE"|"BOOLEAN"|"STRUCT", dataTypeSpec?:string, unit?:string, type:array{attribute?:array{defaultValue?:string}, measurement?:array{processingConfig?:array{forwardingConfig:array{state:"DISABLED"|"ENABLED"}}}, transform?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, processingConfig?:array{computeLocation:"EDGE"|"CLOUD", forwardingConfig?:array{state:"DISABLED"|"ENABLED"}}}, metric?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, window:array{tumbling?:array{interval:string, offset?:string}}, processingConfig?:array{computeLocation:"EDGE"|"CLOUD"}}}, path?:array<array{id?:string, name?:string}>}>, assetModelHierarchies:array<array{id?:string, externalId?:string, name:string, childAssetModelId:string}>, assetModelCompositeModels?:array<array{name:string, description?:string, type:string, properties?:array<array{id?:string, externalId?:string, name:string, dataType:"STRING"|"INTEGER"|"DOUBLE"|"BOOLEAN"|"STRUCT", dataTypeSpec?:string, unit?:string, type:array{attribute?:array{defaultValue?:string}, measurement?:array{processingConfig?:array{forwardingConfig:array{state:"DISABLED"|"ENABLED"}}}, transform?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, processingConfig?:array{computeLocation:"EDGE"|"CLOUD", forwardingConfig?:array{state:"DISABLED"|"ENABLED"}}}, metric?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, window:array{tumbling?:array{interval:string, offset?:string}}, processingConfig?:array{computeLocation:"EDGE"|"CLOUD"}}}, path?:array<array{id?:string, name?:string}>}>, id?:string, externalId?:string}>, assetModelCompositeModelSummaries?:array<array{id:string, externalId?:string, name:string, type:string, description?:string, path?:array<array{id?:string, name?:string}>}>, assetModelCreationDate:int|string|\DateTimeInterface, assetModelLastUpdateDate:int|string|\DateTimeInterface, assetModelStatus:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"PROPAGATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}, assetModelVersion?:string, eTag?:string}>
     */
    public function describeAssetModel(array $args): \AWS\Result { }

    /**
     * @param array{assetModelId:string, excludeProperties?:bool, assetModelVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assetModelId:string, assetModelExternalId?:string, assetModelArn:string, assetModelName:string, assetModelType?:"ASSET_MODEL"|"COMPONENT_MODEL", assetModelDescription:string, assetModelProperties:array<array{id?:string, externalId?:string, name:string, dataType:"STRING"|"INTEGER"|"DOUBLE"|"BOOLEAN"|"STRUCT", dataTypeSpec?:string, unit?:string, type:array{attribute?:array{defaultValue?:string}, measurement?:array{processingConfig?:array{forwardingConfig:array{state:"DISABLED"|"ENABLED"}}}, transform?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, processingConfig?:array{computeLocation:"EDGE"|"CLOUD", forwardingConfig?:array{state:"DISABLED"|"ENABLED"}}}, metric?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, window:array{tumbling?:array{interval:string, offset?:string}}, processingConfig?:array{computeLocation:"EDGE"|"CLOUD"}}}, path?:array<array{id?:string, name?:string}>}>, assetModelHierarchies:array<array{id?:string, externalId?:string, name:string, childAssetModelId:string}>, assetModelCompositeModels?:array<array{name:string, description?:string, type:string, properties?:array<array{id?:string, externalId?:string, name:string, dataType:"STRING"|"INTEGER"|"DOUBLE"|"BOOLEAN"|"STRUCT", dataTypeSpec?:string, unit?:string, type:array{attribute?:array{defaultValue?:string}, measurement?:array{processingConfig?:array{forwardingConfig:array{state:"DISABLED"|"ENABLED"}}}, transform?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, processingConfig?:array{computeLocation:"EDGE"|"CLOUD", forwardingConfig?:array{state:"DISABLED"|"ENABLED"}}}, metric?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, window:array{tumbling?:array{interval:string, offset?:string}}, processingConfig?:array{computeLocation:"EDGE"|"CLOUD"}}}, path?:array<array{id?:string, name?:string}>}>, id?:string, externalId?:string}>, assetModelCompositeModelSummaries?:array<array{id:string, externalId?:string, name:string, type:string, description?:string, path?:array<array{id?:string, name?:string}>}>, assetModelCreationDate:int|string|\DateTimeInterface, assetModelLastUpdateDate:int|string|\DateTimeInterface, assetModelStatus:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"PROPAGATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}, assetModelVersion?:string, eTag?:string}>
     */
    public function describeAssetModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetModelId:string, assetModelCompositeModelId:string, assetModelVersion?:string} $args
     * @return \AWS\Result<array{assetModelId:string, assetModelCompositeModelId:string, assetModelCompositeModelExternalId?:string, assetModelCompositeModelPath:array<array{id?:string, name?:string}>, assetModelCompositeModelName:string, assetModelCompositeModelDescription:string, assetModelCompositeModelType:string, assetModelCompositeModelProperties:array<array{id?:string, externalId?:string, name:string, dataType:"STRING"|"INTEGER"|"DOUBLE"|"BOOLEAN"|"STRUCT", dataTypeSpec?:string, unit?:string, type:array{attribute?:array{defaultValue?:string}, measurement?:array{processingConfig?:array{forwardingConfig:array{state:"DISABLED"|"ENABLED"}}}, transform?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, processingConfig?:array{computeLocation:"EDGE"|"CLOUD", forwardingConfig?:array{state:"DISABLED"|"ENABLED"}}}, metric?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, window:array{tumbling?:array{interval:string, offset?:string}}, processingConfig?:array{computeLocation:"EDGE"|"CLOUD"}}}, path?:array<array{id?:string, name?:string}>}>, compositionDetails?:array{compositionRelationship?:array<array{id?:string}>}, assetModelCompositeModelSummaries:array<array{id:string, externalId?:string, name:string, type:string, description?:string, path?:array<array{id?:string, name?:string}>}>, actionDefinitions?:array<array{actionDefinitionId:string, actionName:string, actionType:string}>}>
     */
    public function describeAssetModelCompositeModel(array $args): \AWS\Result { }

    /**
     * @param array{assetModelId:string, assetModelCompositeModelId:string, assetModelVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assetModelId:string, assetModelCompositeModelId:string, assetModelCompositeModelExternalId?:string, assetModelCompositeModelPath:array<array{id?:string, name?:string}>, assetModelCompositeModelName:string, assetModelCompositeModelDescription:string, assetModelCompositeModelType:string, assetModelCompositeModelProperties:array<array{id?:string, externalId?:string, name:string, dataType:"STRING"|"INTEGER"|"DOUBLE"|"BOOLEAN"|"STRUCT", dataTypeSpec?:string, unit?:string, type:array{attribute?:array{defaultValue?:string}, measurement?:array{processingConfig?:array{forwardingConfig:array{state:"DISABLED"|"ENABLED"}}}, transform?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, processingConfig?:array{computeLocation:"EDGE"|"CLOUD", forwardingConfig?:array{state:"DISABLED"|"ENABLED"}}}, metric?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, window:array{tumbling?:array{interval:string, offset?:string}}, processingConfig?:array{computeLocation:"EDGE"|"CLOUD"}}}, path?:array<array{id?:string, name?:string}>}>, compositionDetails?:array{compositionRelationship?:array<array{id?:string}>}, assetModelCompositeModelSummaries:array<array{id:string, externalId?:string, name:string, type:string, description?:string, path?:array<array{id?:string, name?:string}>}>, actionDefinitions?:array<array{actionDefinitionId:string, actionName:string, actionType:string}>}>
     */
    public function describeAssetModelCompositeModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetId:string, propertyId:string} $args
     * @return \AWS\Result<array{assetId:string, assetName:string, assetModelId:string, assetProperty?:array{id:string, name:string, alias?:string, notification?:array{topic:string, state:"ENABLED"|"DISABLED"}, dataType:"STRING"|"INTEGER"|"DOUBLE"|"BOOLEAN"|"STRUCT", unit?:string, type?:array{attribute?:array{defaultValue?:string}, measurement?:array{processingConfig?:array{forwardingConfig:array{state:"DISABLED"|"ENABLED"}}}, transform?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, processingConfig?:array{computeLocation:"EDGE"|"CLOUD", forwardingConfig?:array{state:"DISABLED"|"ENABLED"}}}, metric?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, window:array{tumbling?:array{interval:string, offset?:string}}, processingConfig?:array{computeLocation:"EDGE"|"CLOUD"}}}, path?:array<array{id?:string, name?:string}>, externalId?:string}, compositeModel?:array{name:string, type:string, assetProperty:array{id:string, name:string, alias?:string, notification?:array{topic:string, state:"ENABLED"|"DISABLED"}, dataType:"STRING"|"INTEGER"|"DOUBLE"|"BOOLEAN"|"STRUCT", unit?:string, type?:array{attribute?:array{defaultValue?:string}, measurement?:array{processingConfig?:array{forwardingConfig:array{state:"DISABLED"|"ENABLED"}}}, transform?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, processingConfig?:array{computeLocation:"EDGE"|"CLOUD", forwardingConfig?:array{state:"DISABLED"|"ENABLED"}}}, metric?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, window:array{tumbling?:array{interval:string, offset?:string}}, processingConfig?:array{computeLocation:"EDGE"|"CLOUD"}}}, path?:array<array{id?:string, name?:string}>, externalId?:string}, id?:string, externalId?:string}, assetExternalId?:string}>
     */
    public function describeAssetProperty(array $args): \AWS\Result { }

    /**
     * @param array{assetId:string, propertyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assetId:string, assetName:string, assetModelId:string, assetProperty?:array{id:string, name:string, alias?:string, notification?:array{topic:string, state:"ENABLED"|"DISABLED"}, dataType:"STRING"|"INTEGER"|"DOUBLE"|"BOOLEAN"|"STRUCT", unit?:string, type?:array{attribute?:array{defaultValue?:string}, measurement?:array{processingConfig?:array{forwardingConfig:array{state:"DISABLED"|"ENABLED"}}}, transform?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, processingConfig?:array{computeLocation:"EDGE"|"CLOUD", forwardingConfig?:array{state:"DISABLED"|"ENABLED"}}}, metric?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, window:array{tumbling?:array{interval:string, offset?:string}}, processingConfig?:array{computeLocation:"EDGE"|"CLOUD"}}}, path?:array<array{id?:string, name?:string}>, externalId?:string}, compositeModel?:array{name:string, type:string, assetProperty:array{id:string, name:string, alias?:string, notification?:array{topic:string, state:"ENABLED"|"DISABLED"}, dataType:"STRING"|"INTEGER"|"DOUBLE"|"BOOLEAN"|"STRUCT", unit?:string, type?:array{attribute?:array{defaultValue?:string}, measurement?:array{processingConfig?:array{forwardingConfig:array{state:"DISABLED"|"ENABLED"}}}, transform?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, processingConfig?:array{computeLocation:"EDGE"|"CLOUD", forwardingConfig?:array{state:"DISABLED"|"ENABLED"}}}, metric?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, window:array{tumbling?:array{interval:string, offset?:string}}, processingConfig?:array{computeLocation:"EDGE"|"CLOUD"}}}, path?:array<array{id?:string, name?:string}>, externalId?:string}, id?:string, externalId?:string}, assetExternalId?:string}>
     */
    public function describeAssetPropertyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string} $args
     * @return \AWS\Result<array{jobId:string, jobName:string, jobStatus:"PENDING"|"CANCELLED"|"RUNNING"|"COMPLETED"|"FAILED"|"COMPLETED_WITH_FAILURES", jobRoleArn:string, files:array<array{bucket:string, key:string, versionId?:string}>, errorReportLocation:array{bucket:string, prefix:string}, jobConfiguration:array{fileFormat:array{csv?:array{columnNames:array<"ALIAS"|"ASSET_ID"|"PROPERTY_ID"|"DATA_TYPE"|"TIMESTAMP_SECONDS"|"TIMESTAMP_NANO_OFFSET"|"QUALITY"|"VALUE">}, parquet?:array{}}}, jobCreationDate:int|string|\DateTimeInterface, jobLastUpdateDate:int|string|\DateTimeInterface, adaptiveIngestion?:bool, deleteFilesAfterImport?:bool}>
     */
    public function describeBulkImportJob(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobId:string, jobName:string, jobStatus:"PENDING"|"CANCELLED"|"RUNNING"|"COMPLETED"|"FAILED"|"COMPLETED_WITH_FAILURES", jobRoleArn:string, files:array<array{bucket:string, key:string, versionId?:string}>, errorReportLocation:array{bucket:string, prefix:string}, jobConfiguration:array{fileFormat:array{csv?:array{columnNames:array<"ALIAS"|"ASSET_ID"|"PROPERTY_ID"|"DATA_TYPE"|"TIMESTAMP_SECONDS"|"TIMESTAMP_NANO_OFFSET"|"QUALITY"|"VALUE">}, parquet?:array{}}}, jobCreationDate:int|string|\DateTimeInterface, jobLastUpdateDate:int|string|\DateTimeInterface, adaptiveIngestion?:bool, deleteFilesAfterImport?:bool}>
     */
    public function describeBulkImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{dashboardId:string} $args
     * @return \AWS\Result<array{dashboardId:string, dashboardArn:string, dashboardName:string, projectId:string, dashboardDescription?:string, dashboardDefinition:string, dashboardCreationDate:int|string|\DateTimeInterface, dashboardLastUpdateDate:int|string|\DateTimeInterface}>
     */
    public function describeDashboard(array $args): \AWS\Result { }

    /**
     * @param array{dashboardId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{dashboardId:string, dashboardArn:string, dashboardName:string, projectId:string, dashboardDescription?:string, dashboardDefinition:string, dashboardCreationDate:int|string|\DateTimeInterface, dashboardLastUpdateDate:int|string|\DateTimeInterface}>
     */
    public function describeDashboardAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetId:string} $args
     * @return \AWS\Result<array{datasetId:string, datasetArn:string, datasetName:string, datasetDescription:string, datasetSource:array{sourceType:"KENDRA", sourceFormat:"KNOWLEDGE_BASE", sourceDetail?:array{kendra?:array{knowledgeBaseArn:string, roleArn:string}}}, datasetStatus:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}, datasetCreationDate:int|string|\DateTimeInterface, datasetLastUpdateDate:int|string|\DateTimeInterface, datasetVersion?:string}>
     */
    public function describeDataset(array $args): \AWS\Result { }

    /**
     * @param array{datasetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{datasetId:string, datasetArn:string, datasetName:string, datasetDescription:string, datasetSource:array{sourceType:"KENDRA", sourceFormat:"KNOWLEDGE_BASE", sourceDetail?:array{kendra?:array{knowledgeBaseArn:string, roleArn:string}}}, datasetStatus:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}, datasetCreationDate:int|string|\DateTimeInterface, datasetLastUpdateDate:int|string|\DateTimeInterface, datasetVersion?:string}>
     */
    public function describeDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{encryptionType:"SITEWISE_DEFAULT_ENCRYPTION"|"KMS_BASED_ENCRYPTION", kmsKeyArn?:string, configurationStatus:array{state:"ACTIVE"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string}}}>
     */
    public function describeDefaultEncryptionConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{encryptionType:"SITEWISE_DEFAULT_ENCRYPTION"|"KMS_BASED_ENCRYPTION", kmsKeyArn?:string, configurationStatus:array{state:"ACTIVE"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string}}}>
     */
    public function describeDefaultEncryptionConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{gatewayId:string} $args
     * @return \AWS\Result<array{gatewayId:string, gatewayName:string, gatewayArn:string, gatewayPlatform?:array{greengrass?:array{groupArn:string}, greengrassV2?:array{coreDeviceThingName:string}, siemensIE?:array{iotCoreThingName:string}}, gatewayCapabilitySummaries:array<array{capabilityNamespace:string, capabilitySyncStatus:"IN_SYNC"|"OUT_OF_SYNC"|"SYNC_FAILED"|"UNKNOWN"|"NOT_APPLICABLE"}>, creationDate:int|string|\DateTimeInterface, lastUpdateDate:int|string|\DateTimeInterface}>
     */
    public function describeGateway(array $args): \AWS\Result { }

    /**
     * @param array{gatewayId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{gatewayId:string, gatewayName:string, gatewayArn:string, gatewayPlatform?:array{greengrass?:array{groupArn:string}, greengrassV2?:array{coreDeviceThingName:string}, siemensIE?:array{iotCoreThingName:string}}, gatewayCapabilitySummaries:array<array{capabilityNamespace:string, capabilitySyncStatus:"IN_SYNC"|"OUT_OF_SYNC"|"SYNC_FAILED"|"UNKNOWN"|"NOT_APPLICABLE"}>, creationDate:int|string|\DateTimeInterface, lastUpdateDate:int|string|\DateTimeInterface}>
     */
    public function describeGatewayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{gatewayId:string, capabilityNamespace:string} $args
     * @return \AWS\Result<array{gatewayId:string, capabilityNamespace:string, capabilityConfiguration:string, capabilitySyncStatus:"IN_SYNC"|"OUT_OF_SYNC"|"SYNC_FAILED"|"UNKNOWN"|"NOT_APPLICABLE"}>
     */
    public function describeGatewayCapabilityConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{gatewayId:string, capabilityNamespace:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{gatewayId:string, capabilityNamespace:string, capabilityConfiguration:string, capabilitySyncStatus:"IN_SYNC"|"OUT_OF_SYNC"|"SYNC_FAILED"|"UNKNOWN"|"NOT_APPLICABLE"}>
     */
    public function describeGatewayCapabilityConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{loggingOptions:array{level:"ERROR"|"INFO"|"OFF"}}>
     */
    public function describeLoggingOptions(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{loggingOptions:array{level:"ERROR"|"INFO"|"OFF"}}>
     */
    public function describeLoggingOptionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{portalId:string} $args
     * @return \AWS\Result<array{portalId:string, portalArn:string, portalName:string, portalDescription?:string, portalClientId:string, portalStartUrl:string, portalContactEmail:string, portalStatus:array{state:"CREATING"|"PENDING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED", error?:array{code?:"INTERNAL_FAILURE"|"VALIDATION_ERROR"|"LIMIT_EXCEEDED", message?:string}}, portalCreationDate:int|string|\DateTimeInterface, portalLastUpdateDate:int|string|\DateTimeInterface, portalLogoImageLocation?:array{id:string, url:string}, roleArn?:string, portalAuthMode?:"IAM"|"SSO", notificationSenderEmail?:string, alarms?:array{alarmRoleArn:string, notificationLambdaArn?:string}, portalType?:"SITEWISE_PORTAL_V1"|"SITEWISE_PORTAL_V2", portalTypeConfiguration?:array<string, array{portalTools?:array<string>}>}>
     */
    public function describePortal(array $args): \AWS\Result { }

    /**
     * @param array{portalId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{portalId:string, portalArn:string, portalName:string, portalDescription?:string, portalClientId:string, portalStartUrl:string, portalContactEmail:string, portalStatus:array{state:"CREATING"|"PENDING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED", error?:array{code?:"INTERNAL_FAILURE"|"VALIDATION_ERROR"|"LIMIT_EXCEEDED", message?:string}}, portalCreationDate:int|string|\DateTimeInterface, portalLastUpdateDate:int|string|\DateTimeInterface, portalLogoImageLocation?:array{id:string, url:string}, roleArn?:string, portalAuthMode?:"IAM"|"SSO", notificationSenderEmail?:string, alarms?:array{alarmRoleArn:string, notificationLambdaArn?:string}, portalType?:"SITEWISE_PORTAL_V1"|"SITEWISE_PORTAL_V2", portalTypeConfiguration?:array<string, array{portalTools?:array<string>}>}>
     */
    public function describePortalAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{projectId:string} $args
     * @return \AWS\Result<array{projectId:string, projectArn:string, projectName:string, portalId:string, projectDescription?:string, projectCreationDate:int|string|\DateTimeInterface, projectLastUpdateDate:int|string|\DateTimeInterface}>
     */
    public function describeProject(array $args): \AWS\Result { }

    /**
     * @param array{projectId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{projectId:string, projectArn:string, projectName:string, portalId:string, projectDescription?:string, projectCreationDate:int|string|\DateTimeInterface, projectLastUpdateDate:int|string|\DateTimeInterface}>
     */
    public function describeProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{storageType:"SITEWISE_DEFAULT_STORAGE"|"MULTI_LAYER_STORAGE", multiLayerStorage?:array{customerManagedS3Storage:array{s3ResourceArn:string, roleArn:string}}, disassociatedDataStorage?:"ENABLED"|"DISABLED", retentionPeriod?:array{numberOfDays?:int, unlimited?:bool}, configurationStatus:array{state:"ACTIVE"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string}}, lastUpdateDate?:int|string|\DateTimeInterface, warmTier?:"ENABLED"|"DISABLED", warmTierRetentionPeriod?:array{numberOfDays?:int, unlimited?:bool}, disallowIngestNullNaN?:bool}>
     */
    public function describeStorageConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{storageType:"SITEWISE_DEFAULT_STORAGE"|"MULTI_LAYER_STORAGE", multiLayerStorage?:array{customerManagedS3Storage:array{s3ResourceArn:string, roleArn:string}}, disassociatedDataStorage?:"ENABLED"|"DISABLED", retentionPeriod?:array{numberOfDays?:int, unlimited?:bool}, configurationStatus:array{state:"ACTIVE"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string}}, lastUpdateDate?:int|string|\DateTimeInterface, warmTier?:"ENABLED"|"DISABLED", warmTierRetentionPeriod?:array{numberOfDays?:int, unlimited?:bool}, disallowIngestNullNaN?:bool}>
     */
    public function describeStorageConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{alias?:string, assetId?:string, propertyId?:string} $args
     * @return \AWS\Result<array{assetId?:string, propertyId?:string, alias?:string, timeSeriesId:string, dataType:"STRING"|"INTEGER"|"DOUBLE"|"BOOLEAN"|"STRUCT", dataTypeSpec?:string, timeSeriesCreationDate:int|string|\DateTimeInterface, timeSeriesLastUpdateDate:int|string|\DateTimeInterface, timeSeriesArn:string}>
     */
    public function describeTimeSeries(array $args = []): \AWS\Result { }

    /**
     * @param array{alias?:string, assetId?:string, propertyId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assetId?:string, propertyId?:string, alias?:string, timeSeriesId:string, dataType:"STRING"|"INTEGER"|"DOUBLE"|"BOOLEAN"|"STRUCT", dataTypeSpec?:string, timeSeriesCreationDate:int|string|\DateTimeInterface, timeSeriesLastUpdateDate:int|string|\DateTimeInterface, timeSeriesArn:string}>
     */
    public function describeTimeSeriesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetId:string, hierarchyId:string, childAssetId:string, clientToken?:string} $args
     * @return \AWS\Result<void>
     */
    public function disassociateAssets(array $args): \AWS\Result { }

    /**
     * @param array{assetId:string, hierarchyId:string, childAssetId:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disassociateAssetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{alias:string, assetId:string, propertyId:string, clientToken?:string} $args
     * @return \AWS\Result<void>
     */
    public function disassociateTimeSeriesFromAssetProperty(array $args): \AWS\Result { }

    /**
     * @param array{alias:string, assetId:string, propertyId:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disassociateTimeSeriesFromAssetPropertyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{targetResource:array{assetId:string}, actionDefinitionId:string, actionPayload:array{stringValue:string}, clientToken?:string} $args
     * @return \AWS\Result<array{actionId:string}>
     */
    public function executeAction(array $args): \AWS\Result { }

    /**
     * @param array{targetResource:array{assetId:string}, actionDefinitionId:string, actionPayload:array{stringValue:string}, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{actionId:string}>
     */
    public function executeActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{queryStatement:string, nextToken?:string, maxResults?:int, clientToken?:string} $args
     * @return \AWS\Result<array{columns?:array<array{name?:string, type?:array{scalarType?:"BOOLEAN"|"INT"|"DOUBLE"|"TIMESTAMP"|"STRING"}}>, rows?:array<array{data:array<array{scalarValue?:string, arrayValue?:array<array{scalarValue?:string, arrayValue?:mixed, rowValue?:array{data:mixed}, nullValue?:bool}>, rowValue?:array{data:mixed}, nullValue?:bool}>}>, nextToken?:string}>
     */
    public function executeQuery(array $args): \AWS\Result { }

    /**
     * @param array{queryStatement:string, nextToken?:string, maxResults?:int, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{columns?:array<array{name?:string, type?:array{scalarType?:"BOOLEAN"|"INT"|"DOUBLE"|"TIMESTAMP"|"STRING"}}>, rows?:array<array{data:array<array{scalarValue?:string, arrayValue?:array<array{scalarValue?:string, arrayValue?:mixed, rowValue?:array{data:mixed}, nullValue?:bool}>, rowValue?:array{data:mixed}, nullValue?:bool}>}>, nextToken?:string}>
     */
    public function executeQueryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetId?:string, propertyId?:string, propertyAlias?:string, aggregateTypes:array<"AVERAGE"|"COUNT"|"MAXIMUM"|"MINIMUM"|"SUM"|"STANDARD_DEVIATION">, resolution:string, qualities?:array<"GOOD"|"BAD"|"UNCERTAIN">, startDate:int|string|\DateTimeInterface, endDate:int|string|\DateTimeInterface, timeOrdering?:"ASCENDING"|"DESCENDING", nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{aggregatedValues:array<array{timestamp:int|string|\DateTimeInterface, quality?:"GOOD"|"BAD"|"UNCERTAIN", value:array{average?:float, count?:float, maximum?:float, minimum?:float, sum?:float, standardDeviation?:float}}>, nextToken?:string}>
     */
    public function getAssetPropertyAggregates(array $args): \AWS\Result { }

    /**
     * @param array{assetId?:string, propertyId?:string, propertyAlias?:string, aggregateTypes:array<"AVERAGE"|"COUNT"|"MAXIMUM"|"MINIMUM"|"SUM"|"STANDARD_DEVIATION">, resolution:string, qualities?:array<"GOOD"|"BAD"|"UNCERTAIN">, startDate:int|string|\DateTimeInterface, endDate:int|string|\DateTimeInterface, timeOrdering?:"ASCENDING"|"DESCENDING", nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{aggregatedValues:array<array{timestamp:int|string|\DateTimeInterface, quality?:"GOOD"|"BAD"|"UNCERTAIN", value:array{average?:float, count?:float, maximum?:float, minimum?:float, sum?:float, standardDeviation?:float}}>, nextToken?:string}>
     */
    public function getAssetPropertyAggregatesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetId?:string, propertyId?:string, propertyAlias?:string} $args
     * @return \AWS\Result<array{propertyValue?:array{value:array{stringValue?:string, integerValue?:int, doubleValue?:float, booleanValue?:bool, nullValue?:array{valueType:"D"|"B"|"S"|"I"|"U"}}, timestamp:array{timeInSeconds:int, offsetInNanos?:int}, quality?:"GOOD"|"BAD"|"UNCERTAIN"}}>
     */
    public function getAssetPropertyValue(array $args = []): \AWS\Result { }

    /**
     * @param array{assetId?:string, propertyId?:string, propertyAlias?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{propertyValue?:array{value:array{stringValue?:string, integerValue?:int, doubleValue?:float, booleanValue?:bool, nullValue?:array{valueType:"D"|"B"|"S"|"I"|"U"}}, timestamp:array{timeInSeconds:int, offsetInNanos?:int}, quality?:"GOOD"|"BAD"|"UNCERTAIN"}}>
     */
    public function getAssetPropertyValueAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetId?:string, propertyId?:string, propertyAlias?:string, startDate?:int|string|\DateTimeInterface, endDate?:int|string|\DateTimeInterface, qualities?:array<"GOOD"|"BAD"|"UNCERTAIN">, timeOrdering?:"ASCENDING"|"DESCENDING", nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{assetPropertyValueHistory:array<array{value:array{stringValue?:string, integerValue?:int, doubleValue?:float, booleanValue?:bool, nullValue?:array{valueType:"D"|"B"|"S"|"I"|"U"}}, timestamp:array{timeInSeconds:int, offsetInNanos?:int}, quality?:"GOOD"|"BAD"|"UNCERTAIN"}>, nextToken?:string}>
     */
    public function getAssetPropertyValueHistory(array $args = []): \AWS\Result { }

    /**
     * @param array{assetId?:string, propertyId?:string, propertyAlias?:string, startDate?:int|string|\DateTimeInterface, endDate?:int|string|\DateTimeInterface, qualities?:array<"GOOD"|"BAD"|"UNCERTAIN">, timeOrdering?:"ASCENDING"|"DESCENDING", nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{assetPropertyValueHistory:array<array{value:array{stringValue?:string, integerValue?:int, doubleValue?:float, booleanValue?:bool, nullValue?:array{valueType:"D"|"B"|"S"|"I"|"U"}}, timestamp:array{timeInSeconds:int, offsetInNanos?:int}, quality?:"GOOD"|"BAD"|"UNCERTAIN"}>, nextToken?:string}>
     */
    public function getAssetPropertyValueHistoryAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetId?:string, propertyId?:string, propertyAlias?:string, startTimeInSeconds:int, startTimeOffsetInNanos?:int, endTimeInSeconds:int, endTimeOffsetInNanos?:int, quality:"GOOD"|"BAD"|"UNCERTAIN", intervalInSeconds:int, nextToken?:string, maxResults?:int, type:string, intervalWindowInSeconds?:int} $args
     * @return \AWS\Result<array{interpolatedAssetPropertyValues:array<array{timestamp:array{timeInSeconds:int, offsetInNanos?:int}, value:array{stringValue?:string, integerValue?:int, doubleValue?:float, booleanValue?:bool, nullValue?:array{valueType:"D"|"B"|"S"|"I"|"U"}}}>, nextToken?:string}>
     */
    public function getInterpolatedAssetPropertyValues(array $args): \AWS\Result { }

    /**
     * @param array{assetId?:string, propertyId?:string, propertyAlias?:string, startTimeInSeconds:int, startTimeOffsetInNanos?:int, endTimeInSeconds:int, endTimeOffsetInNanos?:int, quality:"GOOD"|"BAD"|"UNCERTAIN", intervalInSeconds:int, nextToken?:string, maxResults?:int, type:string, intervalWindowInSeconds?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{interpolatedAssetPropertyValues:array<array{timestamp:array{timeInSeconds:int, offsetInNanos?:int}, value:array{stringValue?:string, integerValue?:int, doubleValue?:float, booleanValue?:bool, nullValue?:array{valueType:"D"|"B"|"S"|"I"|"U"}}}>, nextToken?:string}>
     */
    public function getInterpolatedAssetPropertyValuesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{conversationId?:string, message:string, enableTrace?:bool} $args
     * @return \AWS\Result<array{body:array{trace?:array{text?:string}, output?:array{message?:string, citations?:array<array{reference?:array{dataset?:array{datasetArn?:string, source?:array{arn?:string, location?:array{uri?:string}}}}, content?:array{text?:string}}>}, accessDeniedException?:array{message?:string}, conflictingOperationException?:array{message:string, resourceId:string, resourceArn:string}, internalFailureException?:array{message:string}, invalidRequestException?:array{message:string}, limitExceededException?:array{message:string}, resourceNotFoundException?:array{message:string}, throttlingException?:array{message:string}}, conversationId:string}>
     */
    public function invokeAssistant(array $args): \AWS\Result { }

    /**
     * @param array{conversationId?:string, message:string, enableTrace?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{body:array{trace?:array{text?:string}, output?:array{message?:string, citations?:array<array{reference?:array{dataset?:array{datasetArn?:string, source?:array{arn?:string, location?:array{uri?:string}}}}, content?:array{text?:string}}>}, accessDeniedException?:array{message?:string}, conflictingOperationException?:array{message:string, resourceId:string, resourceArn:string}, internalFailureException?:array{message:string}, invalidRequestException?:array{message:string}, limitExceededException?:array{message:string}, resourceNotFoundException?:array{message:string}, throttlingException?:array{message:string}}, conversationId:string}>
     */
    public function invokeAssistantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{identityType?:"USER"|"GROUP"|"IAM", identityId?:string, resourceType?:"PORTAL"|"PROJECT", resourceId?:string, iamArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{accessPolicySummaries:array<array{id:string, identity:array{user?:array{id:string}, group?:array{id:string}, iamUser?:array{arn:string}, iamRole?:array{arn:string}}, resource:array{portal?:array{id:string}, project?:array{id:string}}, permission:"ADMINISTRATOR"|"VIEWER", creationDate?:int|string|\DateTimeInterface, lastUpdateDate?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listAccessPolicies(array $args = []): \AWS\Result { }

    /**
     * @param array{identityType?:"USER"|"GROUP"|"IAM", identityId?:string, resourceType?:"PORTAL"|"PROJECT", resourceId?:string, iamArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{accessPolicySummaries:array<array{id:string, identity:array{user?:array{id:string}, group?:array{id:string}, iamUser?:array{arn:string}, iamRole?:array{arn:string}}, resource:array{portal?:array{id:string}, project?:array{id:string}}, permission:"ADMINISTRATOR"|"VIEWER", creationDate?:int|string|\DateTimeInterface, lastUpdateDate?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listAccessPoliciesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{targetResourceType:"ASSET", targetResourceId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{actionSummaries:array<array{actionId?:string, actionDefinitionId?:string, targetResource?:array{assetId:string}}>, nextToken:string}>
     */
    public function listActions(array $args): \AWS\Result { }

    /**
     * @param array{targetResourceType:"ASSET", targetResourceId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{actionSummaries:array<array{actionId?:string, actionDefinitionId?:string, targetResource?:array{assetId:string}}>, nextToken:string}>
     */
    public function listActionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetModelId:string, nextToken?:string, maxResults?:int, assetModelVersion?:string} $args
     * @return \AWS\Result<array{assetModelCompositeModelSummaries:array<array{id:string, externalId?:string, name:string, type:string, description?:string, path?:array<array{id?:string, name?:string}>}>, nextToken?:string}>
     */
    public function listAssetModelCompositeModels(array $args): \AWS\Result { }

    /**
     * @param array{assetModelId:string, nextToken?:string, maxResults?:int, assetModelVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assetModelCompositeModelSummaries:array<array{id:string, externalId?:string, name:string, type:string, description?:string, path?:array<array{id?:string, name?:string}>}>, nextToken?:string}>
     */
    public function listAssetModelCompositeModelsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetModelId:string, nextToken?:string, maxResults?:int, filter?:"ALL"|"BASE", assetModelVersion?:string} $args
     * @return \AWS\Result<array{assetModelPropertySummaries:array<array{id?:string, externalId?:string, name:string, dataType:"STRING"|"INTEGER"|"DOUBLE"|"BOOLEAN"|"STRUCT", dataTypeSpec?:string, unit?:string, type:array{attribute?:array{defaultValue?:string}, measurement?:array{processingConfig?:array{forwardingConfig:array{state:"DISABLED"|"ENABLED"}}}, transform?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, processingConfig?:array{computeLocation:"EDGE"|"CLOUD", forwardingConfig?:array{state:"DISABLED"|"ENABLED"}}}, metric?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, window:array{tumbling?:array{interval:string, offset?:string}}, processingConfig?:array{computeLocation:"EDGE"|"CLOUD"}}}, assetModelCompositeModelId?:string, path?:array<array{id?:string, name?:string}>}>, nextToken?:string}>
     */
    public function listAssetModelProperties(array $args): \AWS\Result { }

    /**
     * @param array{assetModelId:string, nextToken?:string, maxResults?:int, filter?:"ALL"|"BASE", assetModelVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assetModelPropertySummaries:array<array{id?:string, externalId?:string, name:string, dataType:"STRING"|"INTEGER"|"DOUBLE"|"BOOLEAN"|"STRUCT", dataTypeSpec?:string, unit?:string, type:array{attribute?:array{defaultValue?:string}, measurement?:array{processingConfig?:array{forwardingConfig:array{state:"DISABLED"|"ENABLED"}}}, transform?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, processingConfig?:array{computeLocation:"EDGE"|"CLOUD", forwardingConfig?:array{state:"DISABLED"|"ENABLED"}}}, metric?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, window:array{tumbling?:array{interval:string, offset?:string}}, processingConfig?:array{computeLocation:"EDGE"|"CLOUD"}}}, assetModelCompositeModelId?:string, path?:array<array{id?:string, name?:string}>}>, nextToken?:string}>
     */
    public function listAssetModelPropertiesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetModelTypes?:array<"ASSET_MODEL"|"COMPONENT_MODEL">, nextToken?:string, maxResults?:int, assetModelVersion?:string} $args
     * @return \AWS\Result<array{assetModelSummaries:array<array{id:string, externalId?:string, arn:string, name:string, assetModelType?:"ASSET_MODEL"|"COMPONENT_MODEL", description:string, creationDate:int|string|\DateTimeInterface, lastUpdateDate:int|string|\DateTimeInterface, status:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"PROPAGATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}, version?:string}>, nextToken?:string}>
     */
    public function listAssetModels(array $args = []): \AWS\Result { }

    /**
     * @param array{assetModelTypes?:array<"ASSET_MODEL"|"COMPONENT_MODEL">, nextToken?:string, maxResults?:int, assetModelVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assetModelSummaries:array<array{id:string, externalId?:string, arn:string, name:string, assetModelType?:"ASSET_MODEL"|"COMPONENT_MODEL", description:string, creationDate:int|string|\DateTimeInterface, lastUpdateDate:int|string|\DateTimeInterface, status:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"PROPAGATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}, version?:string}>, nextToken?:string}>
     */
    public function listAssetModelsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetId:string, nextToken?:string, maxResults?:int, filter?:"ALL"|"BASE"} $args
     * @return \AWS\Result<array{assetPropertySummaries:array<array{id:string, alias?:string, unit?:string, notification?:array{topic:string, state:"ENABLED"|"DISABLED"}, assetCompositeModelId?:string, path?:array<array{id?:string, name?:string}>, externalId?:string}>, nextToken?:string}>
     */
    public function listAssetProperties(array $args): \AWS\Result { }

    /**
     * @param array{assetId:string, nextToken?:string, maxResults?:int, filter?:"ALL"|"BASE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{assetPropertySummaries:array<array{id:string, alias?:string, unit?:string, notification?:array{topic:string, state:"ENABLED"|"DISABLED"}, assetCompositeModelId?:string, path?:array<array{id?:string, name?:string}>, externalId?:string}>, nextToken?:string}>
     */
    public function listAssetPropertiesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetId:string, traversalType:"PATH_TO_ROOT", nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{assetRelationshipSummaries:array<array{hierarchyInfo?:array{parentAssetId?:string, childAssetId?:string}, relationshipType:"HIERARCHY"}>, nextToken?:string}>
     */
    public function listAssetRelationships(array $args): \AWS\Result { }

    /**
     * @param array{assetId:string, traversalType:"PATH_TO_ROOT", nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{assetRelationshipSummaries:array<array{hierarchyInfo?:array{parentAssetId?:string, childAssetId?:string}, relationshipType:"HIERARCHY"}>, nextToken?:string}>
     */
    public function listAssetRelationshipsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, assetModelId?:string, filter?:"ALL"|"TOP_LEVEL"} $args
     * @return \AWS\Result<array{assetSummaries:array<array{id:string, arn:string, name:string, assetModelId:string, creationDate:int|string|\DateTimeInterface, lastUpdateDate:int|string|\DateTimeInterface, status:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}, hierarchies:array<array{id?:string, name:string, externalId?:string}>, description?:string, externalId?:string}>, nextToken?:string}>
     */
    public function listAssets(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, assetModelId?:string, filter?:"ALL"|"TOP_LEVEL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{assetSummaries:array<array{id:string, arn:string, name:string, assetModelId:string, creationDate:int|string|\DateTimeInterface, lastUpdateDate:int|string|\DateTimeInterface, status:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}, hierarchies:array<array{id?:string, name:string, externalId?:string}>, description?:string, externalId?:string}>, nextToken?:string}>
     */
    public function listAssetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetId:string, hierarchyId?:string, traversalDirection?:"PARENT"|"CHILD", nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{assetSummaries:array<array{id:string, arn:string, name:string, assetModelId:string, creationDate:int|string|\DateTimeInterface, lastUpdateDate:int|string|\DateTimeInterface, status:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}, hierarchies:array<array{id?:string, name:string, externalId?:string}>, description?:string, externalId?:string}>, nextToken?:string}>
     */
    public function listAssociatedAssets(array $args): \AWS\Result { }

    /**
     * @param array{assetId:string, hierarchyId?:string, traversalDirection?:"PARENT"|"CHILD", nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{assetSummaries:array<array{id:string, arn:string, name:string, assetModelId:string, creationDate:int|string|\DateTimeInterface, lastUpdateDate:int|string|\DateTimeInterface, status:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}, hierarchies:array<array{id?:string, name:string, externalId?:string}>, description?:string, externalId?:string}>, nextToken?:string}>
     */
    public function listAssociatedAssetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, filter?:"ALL"|"PENDING"|"RUNNING"|"CANCELLED"|"FAILED"|"COMPLETED_WITH_FAILURES"|"COMPLETED"} $args
     * @return \AWS\Result<array{jobSummaries:array<array{id:string, name:string, status:"PENDING"|"CANCELLED"|"RUNNING"|"COMPLETED"|"FAILED"|"COMPLETED_WITH_FAILURES"}>, nextToken?:string}>
     */
    public function listBulkImportJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, filter?:"ALL"|"PENDING"|"RUNNING"|"CANCELLED"|"FAILED"|"COMPLETED_WITH_FAILURES"|"COMPLETED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobSummaries:array<array{id:string, name:string, status:"PENDING"|"CANCELLED"|"RUNNING"|"COMPLETED"|"FAILED"|"COMPLETED_WITH_FAILURES"}>, nextToken?:string}>
     */
    public function listBulkImportJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetModelId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{compositionRelationshipSummaries:array<array{assetModelId:string, assetModelCompositeModelId:string, assetModelCompositeModelType:string}>, nextToken?:string}>
     */
    public function listCompositionRelationships(array $args): \AWS\Result { }

    /**
     * @param array{assetModelId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{compositionRelationshipSummaries:array<array{assetModelId:string, assetModelCompositeModelId:string, assetModelCompositeModelType:string}>, nextToken?:string}>
     */
    public function listCompositionRelationshipsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{projectId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{dashboardSummaries:array<array{id:string, name:string, description?:string, creationDate?:int|string|\DateTimeInterface, lastUpdateDate?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listDashboards(array $args): \AWS\Result { }

    /**
     * @param array{projectId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{dashboardSummaries:array<array{id:string, name:string, description?:string, creationDate?:int|string|\DateTimeInterface, lastUpdateDate?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listDashboardsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sourceType:"KENDRA", nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{datasetSummaries:array<array{id:string, arn:string, name:string, description:string, creationDate:int|string|\DateTimeInterface, lastUpdateDate:int|string|\DateTimeInterface, status:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}}>, nextToken?:string}>
     */
    public function listDatasets(array $args): \AWS\Result { }

    /**
     * @param array{sourceType:"KENDRA", nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{datasetSummaries:array<array{id:string, arn:string, name:string, description:string, creationDate:int|string|\DateTimeInterface, lastUpdateDate:int|string|\DateTimeInterface, status:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}}>, nextToken?:string}>
     */
    public function listDatasetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{gatewaySummaries:array<array{gatewayId:string, gatewayName:string, gatewayPlatform?:array{greengrass?:array{groupArn:string}, greengrassV2?:array{coreDeviceThingName:string}, siemensIE?:array{iotCoreThingName:string}}, gatewayCapabilitySummaries?:array<array{capabilityNamespace:string, capabilitySyncStatus:"IN_SYNC"|"OUT_OF_SYNC"|"SYNC_FAILED"|"UNKNOWN"|"NOT_APPLICABLE"}>, creationDate:int|string|\DateTimeInterface, lastUpdateDate:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listGateways(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{gatewaySummaries:array<array{gatewayId:string, gatewayName:string, gatewayPlatform?:array{greengrass?:array{groupArn:string}, greengrassV2?:array{coreDeviceThingName:string}, siemensIE?:array{iotCoreThingName:string}}, gatewayCapabilitySummaries?:array<array{capabilityNamespace:string, capabilitySyncStatus:"IN_SYNC"|"OUT_OF_SYNC"|"SYNC_FAILED"|"UNKNOWN"|"NOT_APPLICABLE"}>, creationDate:int|string|\DateTimeInterface, lastUpdateDate:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listGatewaysAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{portalSummaries?:array<array{id:string, name:string, description?:string, startUrl:string, creationDate?:int|string|\DateTimeInterface, lastUpdateDate?:int|string|\DateTimeInterface, roleArn?:string, status:array{state:"CREATING"|"PENDING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED", error?:array{code?:"INTERNAL_FAILURE"|"VALIDATION_ERROR"|"LIMIT_EXCEEDED", message?:string}}, portalType?:"SITEWISE_PORTAL_V1"|"SITEWISE_PORTAL_V2"}>, nextToken?:string}>
     */
    public function listPortals(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{portalSummaries?:array<array{id:string, name:string, description?:string, startUrl:string, creationDate?:int|string|\DateTimeInterface, lastUpdateDate?:int|string|\DateTimeInterface, roleArn?:string, status:array{state:"CREATING"|"PENDING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED", error?:array{code?:"INTERNAL_FAILURE"|"VALIDATION_ERROR"|"LIMIT_EXCEEDED", message?:string}}, portalType?:"SITEWISE_PORTAL_V1"|"SITEWISE_PORTAL_V2"}>, nextToken?:string}>
     */
    public function listPortalsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{projectId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{assetIds:array<string>, nextToken?:string}>
     */
    public function listProjectAssets(array $args): \AWS\Result { }

    /**
     * @param array{projectId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{assetIds:array<string>, nextToken?:string}>
     */
    public function listProjectAssetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{portalId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{projectSummaries:array<array{id:string, name:string, description?:string, creationDate?:int|string|\DateTimeInterface, lastUpdateDate?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listProjects(array $args): \AWS\Result { }

    /**
     * @param array{portalId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{projectSummaries:array<array{id:string, name:string, description?:string, creationDate?:int|string|\DateTimeInterface, lastUpdateDate?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listProjectsAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{nextToken?:string, maxResults?:int, assetId?:string, aliasPrefix?:string, timeSeriesType?:"ASSOCIATED"|"DISASSOCIATED"} $args
     * @return \AWS\Result<array{TimeSeriesSummaries:array<array{assetId?:string, propertyId?:string, alias?:string, timeSeriesId:string, dataType:"STRING"|"INTEGER"|"DOUBLE"|"BOOLEAN"|"STRUCT", dataTypeSpec?:string, timeSeriesCreationDate:int|string|\DateTimeInterface, timeSeriesLastUpdateDate:int|string|\DateTimeInterface, timeSeriesArn:string}>, nextToken?:string}>
     */
    public function listTimeSeries(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, assetId?:string, aliasPrefix?:string, timeSeriesType?:"ASSOCIATED"|"DISASSOCIATED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{TimeSeriesSummaries:array<array{assetId?:string, propertyId?:string, alias?:string, timeSeriesId:string, dataType:"STRING"|"INTEGER"|"DOUBLE"|"BOOLEAN"|"STRUCT", dataTypeSpec?:string, timeSeriesCreationDate:int|string|\DateTimeInterface, timeSeriesLastUpdateDate:int|string|\DateTimeInterface, timeSeriesArn:string}>, nextToken?:string}>
     */
    public function listTimeSeriesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{encryptionType:"SITEWISE_DEFAULT_ENCRYPTION"|"KMS_BASED_ENCRYPTION", kmsKeyId?:string} $args
     * @return \AWS\Result<array{encryptionType:"SITEWISE_DEFAULT_ENCRYPTION"|"KMS_BASED_ENCRYPTION", kmsKeyArn?:string, configurationStatus:array{state:"ACTIVE"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string}}}>
     */
    public function putDefaultEncryptionConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{encryptionType:"SITEWISE_DEFAULT_ENCRYPTION"|"KMS_BASED_ENCRYPTION", kmsKeyId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{encryptionType:"SITEWISE_DEFAULT_ENCRYPTION"|"KMS_BASED_ENCRYPTION", kmsKeyArn?:string, configurationStatus:array{state:"ACTIVE"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string}}}>
     */
    public function putDefaultEncryptionConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{loggingOptions:array{level:"ERROR"|"INFO"|"OFF"}} $args
     * @return \AWS\Result<array{}>
     */
    public function putLoggingOptions(array $args): \AWS\Result { }

    /**
     * @param array{loggingOptions:array{level:"ERROR"|"INFO"|"OFF"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putLoggingOptionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{storageType:"SITEWISE_DEFAULT_STORAGE"|"MULTI_LAYER_STORAGE", multiLayerStorage?:array{customerManagedS3Storage:array{s3ResourceArn:string, roleArn:string}}, disassociatedDataStorage?:"ENABLED"|"DISABLED", retentionPeriod?:array{numberOfDays?:int, unlimited?:bool}, warmTier?:"ENABLED"|"DISABLED", warmTierRetentionPeriod?:array{numberOfDays?:int, unlimited?:bool}, disallowIngestNullNaN?:bool} $args
     * @return \AWS\Result<array{storageType:"SITEWISE_DEFAULT_STORAGE"|"MULTI_LAYER_STORAGE", multiLayerStorage?:array{customerManagedS3Storage:array{s3ResourceArn:string, roleArn:string}}, disassociatedDataStorage?:"ENABLED"|"DISABLED", retentionPeriod?:array{numberOfDays?:int, unlimited?:bool}, configurationStatus:array{state:"ACTIVE"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string}}, warmTier?:"ENABLED"|"DISABLED", warmTierRetentionPeriod?:array{numberOfDays?:int, unlimited?:bool}, disallowIngestNullNaN?:bool}>
     */
    public function putStorageConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{storageType:"SITEWISE_DEFAULT_STORAGE"|"MULTI_LAYER_STORAGE", multiLayerStorage?:array{customerManagedS3Storage:array{s3ResourceArn:string, roleArn:string}}, disassociatedDataStorage?:"ENABLED"|"DISABLED", retentionPeriod?:array{numberOfDays?:int, unlimited?:bool}, warmTier?:"ENABLED"|"DISABLED", warmTierRetentionPeriod?:array{numberOfDays?:int, unlimited?:bool}, disallowIngestNullNaN?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{storageType:"SITEWISE_DEFAULT_STORAGE"|"MULTI_LAYER_STORAGE", multiLayerStorage?:array{customerManagedS3Storage:array{s3ResourceArn:string, roleArn:string}}, disassociatedDataStorage?:"ENABLED"|"DISABLED", retentionPeriod?:array{numberOfDays?:int, unlimited?:bool}, configurationStatus:array{state:"ACTIVE"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string}}, warmTier?:"ENABLED"|"DISABLED", warmTierRetentionPeriod?:array{numberOfDays?:int, unlimited?:bool}, disallowIngestNullNaN?:bool}>
     */
    public function putStorageConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{accessPolicyId:string, accessPolicyIdentity:array{user?:array{id:string}, group?:array{id:string}, iamUser?:array{arn:string}, iamRole?:array{arn:string}}, accessPolicyResource:array{portal?:array{id:string}, project?:array{id:string}}, accessPolicyPermission:"ADMINISTRATOR"|"VIEWER", clientToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateAccessPolicy(array $args): \AWS\Result { }

    /**
     * @param array{accessPolicyId:string, accessPolicyIdentity:array{user?:array{id:string}, group?:array{id:string}, iamUser?:array{arn:string}, iamRole?:array{arn:string}}, accessPolicyResource:array{portal?:array{id:string}, project?:array{id:string}}, accessPolicyPermission:"ADMINISTRATOR"|"VIEWER", clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateAccessPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetId:string, assetName:string, clientToken?:string, assetDescription?:string, assetExternalId?:string} $args
     * @return \AWS\Result<array{assetStatus:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}}>
     */
    public function updateAsset(array $args): \AWS\Result { }

    /**
     * @param array{assetId:string, assetName:string, clientToken?:string, assetDescription?:string, assetExternalId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assetStatus:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}}>
     */
    public function updateAssetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetModelId:string, assetModelExternalId?:string, assetModelName:string, assetModelDescription?:string, assetModelProperties?:array<array{id?:string, externalId?:string, name:string, dataType:"STRING"|"INTEGER"|"DOUBLE"|"BOOLEAN"|"STRUCT", dataTypeSpec?:string, unit?:string, type:array{attribute?:array{defaultValue?:string}, measurement?:array{processingConfig?:array{forwardingConfig:array{state:"DISABLED"|"ENABLED"}}}, transform?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, processingConfig?:array{computeLocation:"EDGE"|"CLOUD", forwardingConfig?:array{state:"DISABLED"|"ENABLED"}}}, metric?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, window:array{tumbling?:array{interval:string, offset?:string}}, processingConfig?:array{computeLocation:"EDGE"|"CLOUD"}}}, path?:array<array{id?:string, name?:string}>}>, assetModelHierarchies?:array<array{id?:string, externalId?:string, name:string, childAssetModelId:string}>, assetModelCompositeModels?:array<array{name:string, description?:string, type:string, properties?:array<array{id?:string, externalId?:string, name:string, dataType:"STRING"|"INTEGER"|"DOUBLE"|"BOOLEAN"|"STRUCT", dataTypeSpec?:string, unit?:string, type:array{attribute?:array{defaultValue?:string}, measurement?:array{processingConfig?:array{forwardingConfig:array{state:"DISABLED"|"ENABLED"}}}, transform?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, processingConfig?:array{computeLocation:"EDGE"|"CLOUD", forwardingConfig?:array{state:"DISABLED"|"ENABLED"}}}, metric?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, window:array{tumbling?:array{interval:string, offset?:string}}, processingConfig?:array{computeLocation:"EDGE"|"CLOUD"}}}, path?:array<array{id?:string, name?:string}>}>, id?:string, externalId?:string}>, clientToken?:string, ifMatch?:string, ifNoneMatch?:string, matchForVersionType?:"LATEST"|"ACTIVE"} $args
     * @return \AWS\Result<array{assetModelStatus:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"PROPAGATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}}>
     */
    public function updateAssetModel(array $args): \AWS\Result { }

    /**
     * @param array{assetModelId:string, assetModelExternalId?:string, assetModelName:string, assetModelDescription?:string, assetModelProperties?:array<array{id?:string, externalId?:string, name:string, dataType:"STRING"|"INTEGER"|"DOUBLE"|"BOOLEAN"|"STRUCT", dataTypeSpec?:string, unit?:string, type:array{attribute?:array{defaultValue?:string}, measurement?:array{processingConfig?:array{forwardingConfig:array{state:"DISABLED"|"ENABLED"}}}, transform?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, processingConfig?:array{computeLocation:"EDGE"|"CLOUD", forwardingConfig?:array{state:"DISABLED"|"ENABLED"}}}, metric?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, window:array{tumbling?:array{interval:string, offset?:string}}, processingConfig?:array{computeLocation:"EDGE"|"CLOUD"}}}, path?:array<array{id?:string, name?:string}>}>, assetModelHierarchies?:array<array{id?:string, externalId?:string, name:string, childAssetModelId:string}>, assetModelCompositeModels?:array<array{name:string, description?:string, type:string, properties?:array<array{id?:string, externalId?:string, name:string, dataType:"STRING"|"INTEGER"|"DOUBLE"|"BOOLEAN"|"STRUCT", dataTypeSpec?:string, unit?:string, type:array{attribute?:array{defaultValue?:string}, measurement?:array{processingConfig?:array{forwardingConfig:array{state:"DISABLED"|"ENABLED"}}}, transform?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, processingConfig?:array{computeLocation:"EDGE"|"CLOUD", forwardingConfig?:array{state:"DISABLED"|"ENABLED"}}}, metric?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, window:array{tumbling?:array{interval:string, offset?:string}}, processingConfig?:array{computeLocation:"EDGE"|"CLOUD"}}}, path?:array<array{id?:string, name?:string}>}>, id?:string, externalId?:string}>, clientToken?:string, ifMatch?:string, ifNoneMatch?:string, matchForVersionType?:"LATEST"|"ACTIVE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{assetModelStatus:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"PROPAGATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}}>
     */
    public function updateAssetModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetModelId:string, assetModelCompositeModelId:string, assetModelCompositeModelExternalId?:string, assetModelCompositeModelDescription?:string, assetModelCompositeModelName:string, clientToken?:string, assetModelCompositeModelProperties?:array<array{id?:string, externalId?:string, name:string, dataType:"STRING"|"INTEGER"|"DOUBLE"|"BOOLEAN"|"STRUCT", dataTypeSpec?:string, unit?:string, type:array{attribute?:array{defaultValue?:string}, measurement?:array{processingConfig?:array{forwardingConfig:array{state:"DISABLED"|"ENABLED"}}}, transform?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, processingConfig?:array{computeLocation:"EDGE"|"CLOUD", forwardingConfig?:array{state:"DISABLED"|"ENABLED"}}}, metric?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, window:array{tumbling?:array{interval:string, offset?:string}}, processingConfig?:array{computeLocation:"EDGE"|"CLOUD"}}}, path?:array<array{id?:string, name?:string}>}>, ifMatch?:string, ifNoneMatch?:string, matchForVersionType?:"LATEST"|"ACTIVE"} $args
     * @return \AWS\Result<array{assetModelCompositeModelPath:array<array{id?:string, name?:string}>, assetModelStatus:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"PROPAGATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}}>
     */
    public function updateAssetModelCompositeModel(array $args): \AWS\Result { }

    /**
     * @param array{assetModelId:string, assetModelCompositeModelId:string, assetModelCompositeModelExternalId?:string, assetModelCompositeModelDescription?:string, assetModelCompositeModelName:string, clientToken?:string, assetModelCompositeModelProperties?:array<array{id?:string, externalId?:string, name:string, dataType:"STRING"|"INTEGER"|"DOUBLE"|"BOOLEAN"|"STRUCT", dataTypeSpec?:string, unit?:string, type:array{attribute?:array{defaultValue?:string}, measurement?:array{processingConfig?:array{forwardingConfig:array{state:"DISABLED"|"ENABLED"}}}, transform?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, processingConfig?:array{computeLocation:"EDGE"|"CLOUD", forwardingConfig?:array{state:"DISABLED"|"ENABLED"}}}, metric?:array{expression:string, variables:array<array{name:string, value:array{propertyId?:string, hierarchyId?:string, propertyPath?:array<array{id?:string, name?:string}>}}>, window:array{tumbling?:array{interval:string, offset?:string}}, processingConfig?:array{computeLocation:"EDGE"|"CLOUD"}}}, path?:array<array{id?:string, name?:string}>}>, ifMatch?:string, ifNoneMatch?:string, matchForVersionType?:"LATEST"|"ACTIVE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{assetModelCompositeModelPath:array<array{id?:string, name?:string}>, assetModelStatus:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"PROPAGATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}}>
     */
    public function updateAssetModelCompositeModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetId:string, propertyId:string, propertyAlias?:string, propertyNotificationState?:"ENABLED"|"DISABLED", clientToken?:string, propertyUnit?:string} $args
     * @return \AWS\Result<void>
     */
    public function updateAssetProperty(array $args): \AWS\Result { }

    /**
     * @param array{assetId:string, propertyId:string, propertyAlias?:string, propertyNotificationState?:"ENABLED"|"DISABLED", clientToken?:string, propertyUnit?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateAssetPropertyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{dashboardId:string, dashboardName:string, dashboardDescription?:string, dashboardDefinition:string, clientToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateDashboard(array $args): \AWS\Result { }

    /**
     * @param array{dashboardId:string, dashboardName:string, dashboardDescription?:string, dashboardDefinition:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateDashboardAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{datasetId:string, datasetName:string, datasetDescription?:string, datasetSource:array{sourceType:"KENDRA", sourceFormat:"KNOWLEDGE_BASE", sourceDetail?:array{kendra?:array{knowledgeBaseArn:string, roleArn:string}}}, clientToken?:string} $args
     * @return \AWS\Result<array{datasetId?:string, datasetArn?:string, datasetStatus?:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}}>
     */
    public function updateDataset(array $args): \AWS\Result { }

    /**
     * @param array{datasetId:string, datasetName:string, datasetDescription?:string, datasetSource:array{sourceType:"KENDRA", sourceFormat:"KNOWLEDGE_BASE", sourceDetail?:array{kendra?:array{knowledgeBaseArn:string, roleArn:string}}}, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{datasetId?:string, datasetArn?:string, datasetStatus?:array{state:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"FAILED", error?:array{code:"VALIDATION_ERROR"|"INTERNAL_FAILURE", message:string, details?:array<array{code:"INCOMPATIBLE_COMPUTE_LOCATION"|"INCOMPATIBLE_FORWARDING_CONFIGURATION", message:string}>}}}>
     */
    public function updateDatasetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{gatewayId:string, gatewayName:string} $args
     * @return \AWS\Result<void>
     */
    public function updateGateway(array $args): \AWS\Result { }

    /**
     * @param array{gatewayId:string, gatewayName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateGatewayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{gatewayId:string, capabilityNamespace:string, capabilityConfiguration:string} $args
     * @return \AWS\Result<array{capabilityNamespace:string, capabilitySyncStatus:"IN_SYNC"|"OUT_OF_SYNC"|"SYNC_FAILED"|"UNKNOWN"|"NOT_APPLICABLE"}>
     */
    public function updateGatewayCapabilityConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{gatewayId:string, capabilityNamespace:string, capabilityConfiguration:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{capabilityNamespace:string, capabilitySyncStatus:"IN_SYNC"|"OUT_OF_SYNC"|"SYNC_FAILED"|"UNKNOWN"|"NOT_APPLICABLE"}>
     */
    public function updateGatewayCapabilityConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{portalId:string, portalName:string, portalDescription?:string, portalContactEmail:string, portalLogoImage?:array{id?:string, file?:array{data:string|resource|\Psr\Http\Message\StreamInterface, type:"PNG"}}, roleArn:string, clientToken?:string, notificationSenderEmail?:string, alarms?:array{alarmRoleArn:string, notificationLambdaArn?:string}, portalType?:"SITEWISE_PORTAL_V1"|"SITEWISE_PORTAL_V2", portalTypeConfiguration?:array<string, array{portalTools?:array<string>}>} $args
     * @return \AWS\Result<array{portalStatus:array{state:"CREATING"|"PENDING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED", error?:array{code?:"INTERNAL_FAILURE"|"VALIDATION_ERROR"|"LIMIT_EXCEEDED", message?:string}}}>
     */
    public function updatePortal(array $args): \AWS\Result { }

    /**
     * @param array{portalId:string, portalName:string, portalDescription?:string, portalContactEmail:string, portalLogoImage?:array{id?:string, file?:array{data:string|resource|\Psr\Http\Message\StreamInterface, type:"PNG"}}, roleArn:string, clientToken?:string, notificationSenderEmail?:string, alarms?:array{alarmRoleArn:string, notificationLambdaArn?:string}, portalType?:"SITEWISE_PORTAL_V1"|"SITEWISE_PORTAL_V2", portalTypeConfiguration?:array<string, array{portalTools?:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{portalStatus:array{state:"CREATING"|"PENDING"|"UPDATING"|"DELETING"|"ACTIVE"|"FAILED", error?:array{code?:"INTERNAL_FAILURE"|"VALIDATION_ERROR"|"LIMIT_EXCEEDED", message?:string}}}>
     */
    public function updatePortalAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{projectId:string, projectName:string, projectDescription?:string, clientToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateProject(array $args): \AWS\Result { }

    /**
     * @param array{projectId:string, projectName:string, projectDescription?:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
