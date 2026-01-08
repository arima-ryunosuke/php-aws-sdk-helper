<?php
namespace AWS\FraudDetector;

class FraudDetectorClient
{
    /**
     * @param array{variableEntries:array<array{name?:string, dataType?:string, dataSource?:string, defaultValue?:string, description?:string, variableType?:string}>, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{errors?:array<array{name?:string, code?:int, message?:string}>}>
     */
    public function batchCreateVariable(array $args): \AWS\Result { }

    /**
     * @param array{variableEntries:array<array{name?:string, dataType?:string, dataSource?:string, defaultValue?:string, description?:string, variableType?:string}>, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{errors?:array<array{name?:string, code?:int, message?:string}>}>
     */
    public function batchCreateVariableAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{names:array<string>} $args
     * @return \AWS\Result<array{variables?:array<array{name?:string, dataType?:"STRING"|"INTEGER"|"FLOAT"|"BOOLEAN"|"DATETIME", dataSource?:"EVENT"|"MODEL_SCORE"|"EXTERNAL_MODEL_SCORE", defaultValue?:string, description?:string, variableType?:string, lastUpdatedTime?:string, createdTime?:string, arn?:string}>, errors?:array<array{name?:string, code?:int, message?:string}>}>
     */
    public function batchGetVariable(array $args): \AWS\Result { }

    /**
     * @param array{names:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{variables?:array<array{name?:string, dataType?:"STRING"|"INTEGER"|"FLOAT"|"BOOLEAN"|"DATETIME", dataSource?:"EVENT"|"MODEL_SCORE"|"EXTERNAL_MODEL_SCORE", defaultValue?:string, description?:string, variableType?:string, lastUpdatedTime?:string, createdTime?:string, arn?:string}>, errors?:array<array{name?:string, code?:int, message?:string}>}>
     */
    public function batchGetVariableAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function cancelBatchImportJob(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function cancelBatchImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function cancelBatchPredictionJob(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function cancelBatchPredictionJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string, inputPath:string, outputPath:string, eventTypeName:string, iamRoleArn:string, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function createBatchImportJob(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string, inputPath:string, outputPath:string, eventTypeName:string, iamRoleArn:string, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createBatchImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string, inputPath:string, outputPath:string, eventTypeName:string, detectorName:string, detectorVersion?:string, iamRoleArn:string, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function createBatchPredictionJob(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string, inputPath:string, outputPath:string, eventTypeName:string, detectorName:string, detectorVersion?:string, iamRoleArn:string, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createBatchPredictionJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{detectorId:string, description?:string, externalModelEndpoints?:array<string>, rules:array<array{detectorId:string, ruleId:string, ruleVersion:string}>, modelVersions?:array<array{modelId:string, modelType:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", modelVersionNumber:string, arn?:string}>, ruleExecutionMode?:"ALL_MATCHED"|"FIRST_MATCHED", tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{detectorId?:string, detectorVersionId?:string, status?:"DRAFT"|"ACTIVE"|"INACTIVE"}>
     */
    public function createDetectorVersion(array $args): \AWS\Result { }

    /**
     * @param array{detectorId:string, description?:string, externalModelEndpoints?:array<string>, rules:array<array{detectorId:string, ruleId:string, ruleVersion:string}>, modelVersions?:array<array{modelId:string, modelType:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", modelVersionNumber:string, arn?:string}>, ruleExecutionMode?:"ALL_MATCHED"|"FIRST_MATCHED", tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{detectorId?:string, detectorVersionId?:string, status?:"DRAFT"|"ACTIVE"|"INACTIVE"}>
     */
    public function createDetectorVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, elements?:array<string>, variableType?:string, description?:string, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function createList(array $args): \AWS\Result { }

    /**
     * @param array{name:string, elements?:array<string>, variableType?:string, description?:string, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createListAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{modelId:string, modelType:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", description?:string, eventTypeName:string, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function createModel(array $args): \AWS\Result { }

    /**
     * @param array{modelId:string, modelType:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", description?:string, eventTypeName:string, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{modelId:string, modelType:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", trainingDataSource:"EXTERNAL_EVENTS"|"INGESTED_EVENTS", trainingDataSchema:array{modelVariables:array<string>, labelSchema?:array{labelMapper?:array<string, array<string>>, unlabeledEventsTreatment?:"IGNORE"|"FRAUD"|"LEGIT"|"AUTO"}}, externalEventsDetail?:array{dataLocation:string, dataAccessRoleArn:string}, ingestedEventsDetail?:array{ingestedEventsTimeWindow:array{startTime:string, endTime:string}}, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{modelId?:string, modelType?:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", modelVersionNumber?:string, status?:string}>
     */
    public function createModelVersion(array $args): \AWS\Result { }

    /**
     * @param array{modelId:string, modelType:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", trainingDataSource:"EXTERNAL_EVENTS"|"INGESTED_EVENTS", trainingDataSchema:array{modelVariables:array<string>, labelSchema?:array{labelMapper?:array<string, array<string>>, unlabeledEventsTreatment?:"IGNORE"|"FRAUD"|"LEGIT"|"AUTO"}}, externalEventsDetail?:array{dataLocation:string, dataAccessRoleArn:string}, ingestedEventsDetail?:array{ingestedEventsTimeWindow:array{startTime:string, endTime:string}}, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{modelId?:string, modelType?:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", modelVersionNumber?:string, status?:string}>
     */
    public function createModelVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ruleId:string, detectorId:string, description?:string, expression:string, language:"DETECTORPL", outcomes:array<string>, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{rule?:array{detectorId:string, ruleId:string, ruleVersion:string}}>
     */
    public function createRule(array $args): \AWS\Result { }

    /**
     * @param array{ruleId:string, detectorId:string, description?:string, expression:string, language:"DETECTORPL", outcomes:array<string>, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{rule?:array{detectorId:string, ruleId:string, ruleVersion:string}}>
     */
    public function createRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, dataType:"STRING"|"INTEGER"|"FLOAT"|"BOOLEAN"|"DATETIME", dataSource:"EVENT"|"MODEL_SCORE"|"EXTERNAL_MODEL_SCORE", defaultValue:string, description?:string, variableType?:string, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function createVariable(array $args): \AWS\Result { }

    /**
     * @param array{name:string, dataType:"STRING"|"INTEGER"|"FLOAT"|"BOOLEAN"|"DATETIME", dataSource:"EVENT"|"MODEL_SCORE"|"EXTERNAL_MODEL_SCORE", defaultValue:string, description?:string, variableType?:string, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createVariableAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteBatchImportJob(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteBatchImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteBatchPredictionJob(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteBatchPredictionJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{detectorId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteDetector(array $args): \AWS\Result { }

    /**
     * @param array{detectorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteDetectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{detectorId:string, detectorVersionId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteDetectorVersion(array $args): \AWS\Result { }

    /**
     * @param array{detectorId:string, detectorVersionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteDetectorVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteEntityType(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteEntityTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{eventId:string, eventTypeName:string, deleteAuditHistory?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteEvent(array $args): \AWS\Result { }

    /**
     * @param array{eventId:string, eventTypeName:string, deleteAuditHistory?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteEventAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteEventType(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteEventTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{eventTypeName:string} $args
     * @return \AWS\Result<array{eventTypeName?:string, eventsDeletionStatus?:string}>
     */
    public function deleteEventsByEventType(array $args): \AWS\Result { }

    /**
     * @param array{eventTypeName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{eventTypeName?:string, eventsDeletionStatus?:string}>
     */
    public function deleteEventsByEventTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{modelEndpoint:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteExternalModel(array $args): \AWS\Result { }

    /**
     * @param array{modelEndpoint:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteExternalModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteLabel(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteLabelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteList(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteListAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{modelId:string, modelType:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS"} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteModel(array $args): \AWS\Result { }

    /**
     * @param array{modelId:string, modelType:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{modelId:string, modelType:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", modelVersionNumber:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteModelVersion(array $args): \AWS\Result { }

    /**
     * @param array{modelId:string, modelType:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", modelVersionNumber:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteModelVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteOutcome(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteOutcomeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{rule:array{detectorId:string, ruleId:string, ruleVersion:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteRule(array $args): \AWS\Result { }

    /**
     * @param array{rule:array{detectorId:string, ruleId:string, ruleVersion:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteVariable(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteVariableAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{detectorId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{detectorId?:string, detectorVersionSummaries?:array<array{detectorVersionId?:string, status?:"DRAFT"|"ACTIVE"|"INACTIVE", description?:string, lastUpdatedTime?:string}>, nextToken?:string, arn?:string}>
     */
    public function describeDetector(array $args): \AWS\Result { }

    /**
     * @param array{detectorId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{detectorId?:string, detectorVersionSummaries?:array<array{detectorVersionId?:string, status?:"DRAFT"|"ACTIVE"|"INACTIVE", description?:string, lastUpdatedTime?:string}>, nextToken?:string, arn?:string}>
     */
    public function describeDetectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{modelId?:string, modelVersionNumber?:string, modelType?:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{modelVersionDetails?:array<array{modelId?:string, modelType?:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", modelVersionNumber?:string, status?:string, trainingDataSource?:"EXTERNAL_EVENTS"|"INGESTED_EVENTS", trainingDataSchema?:array{modelVariables:array<string>, labelSchema?:array{labelMapper?:array<string, array<string>>, unlabeledEventsTreatment?:"IGNORE"|"FRAUD"|"LEGIT"|"AUTO"}}, externalEventsDetail?:array{dataLocation:string, dataAccessRoleArn:string}, ingestedEventsDetail?:array{ingestedEventsTimeWindow:array{startTime:string, endTime:string}}, trainingResult?:array{dataValidationMetrics?:array{fileLevelMessages?:array<array{title?:string, content?:string, type?:string}>, fieldLevelMessages?:array<array{fieldName?:string, identifier?:string, title?:string, content?:string, type?:string}>}, trainingMetrics?:array{auc?:float, metricDataPoints?:array<array{fpr?:float, precision?:float, tpr?:float, threshold?:float}>}, variableImportanceMetrics?:array{logOddsMetrics?:array<array{variableName:string, variableType:string, variableImportance:float}>}}, lastUpdatedTime?:string, createdTime?:string, arn?:string, trainingResultV2?:array{dataValidationMetrics?:array{fileLevelMessages?:array<array{title?:string, content?:string, type?:string}>, fieldLevelMessages?:array<array{fieldName?:string, identifier?:string, title?:string, content?:string, type?:string}>}, trainingMetricsV2?:array{ofi?:array{metricDataPoints?:array<array{fpr?:float, precision?:float, tpr?:float, threshold?:float}>, modelPerformance?:array{auc?:float, uncertaintyRange?:array{lowerBoundValue:float, upperBoundValue:float}}}, tfi?:array{metricDataPoints?:array<array{fpr?:float, precision?:float, tpr?:float, threshold?:float}>, modelPerformance?:array{auc?:float, uncertaintyRange?:array{lowerBoundValue:float, upperBoundValue:float}}}, ati?:array{metricDataPoints?:array<array{cr?:float, adr?:float, threshold?:float, atodr?:float}>, modelPerformance?:array{asi?:float}}}, variableImportanceMetrics?:array{logOddsMetrics?:array<array{variableName:string, variableType:string, variableImportance:float}>}, aggregatedVariablesImportanceMetrics?:array{logOddsMetrics?:array<array{variableNames:array<string>, aggregatedVariablesImportance:float}>}}}>, nextToken?:string}>
     */
    public function describeModelVersions(array $args = []): \AWS\Result { }

    /**
     * @param array{modelId?:string, modelVersionNumber?:string, modelType?:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{modelVersionDetails?:array<array{modelId?:string, modelType?:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", modelVersionNumber?:string, status?:string, trainingDataSource?:"EXTERNAL_EVENTS"|"INGESTED_EVENTS", trainingDataSchema?:array{modelVariables:array<string>, labelSchema?:array{labelMapper?:array<string, array<string>>, unlabeledEventsTreatment?:"IGNORE"|"FRAUD"|"LEGIT"|"AUTO"}}, externalEventsDetail?:array{dataLocation:string, dataAccessRoleArn:string}, ingestedEventsDetail?:array{ingestedEventsTimeWindow:array{startTime:string, endTime:string}}, trainingResult?:array{dataValidationMetrics?:array{fileLevelMessages?:array<array{title?:string, content?:string, type?:string}>, fieldLevelMessages?:array<array{fieldName?:string, identifier?:string, title?:string, content?:string, type?:string}>}, trainingMetrics?:array{auc?:float, metricDataPoints?:array<array{fpr?:float, precision?:float, tpr?:float, threshold?:float}>}, variableImportanceMetrics?:array{logOddsMetrics?:array<array{variableName:string, variableType:string, variableImportance:float}>}}, lastUpdatedTime?:string, createdTime?:string, arn?:string, trainingResultV2?:array{dataValidationMetrics?:array{fileLevelMessages?:array<array{title?:string, content?:string, type?:string}>, fieldLevelMessages?:array<array{fieldName?:string, identifier?:string, title?:string, content?:string, type?:string}>}, trainingMetricsV2?:array{ofi?:array{metricDataPoints?:array<array{fpr?:float, precision?:float, tpr?:float, threshold?:float}>, modelPerformance?:array{auc?:float, uncertaintyRange?:array{lowerBoundValue:float, upperBoundValue:float}}}, tfi?:array{metricDataPoints?:array<array{fpr?:float, precision?:float, tpr?:float, threshold?:float}>, modelPerformance?:array{auc?:float, uncertaintyRange?:array{lowerBoundValue:float, upperBoundValue:float}}}, ati?:array{metricDataPoints?:array<array{cr?:float, adr?:float, threshold?:float, atodr?:float}>, modelPerformance?:array{asi?:float}}}, variableImportanceMetrics?:array{logOddsMetrics?:array<array{variableName:string, variableType:string, variableImportance:float}>}, aggregatedVariablesImportanceMetrics?:array{logOddsMetrics?:array<array{variableNames:array<string>, aggregatedVariablesImportance:float}>}}}>, nextToken?:string}>
     */
    public function describeModelVersionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId?:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{batchImports?:array<array{jobId?:string, status?:"IN_PROGRESS_INITIALIZING"|"IN_PROGRESS"|"CANCEL_IN_PROGRESS"|"CANCELED"|"COMPLETE"|"FAILED", failureReason?:string, startTime?:string, completionTime?:string, inputPath?:string, outputPath?:string, eventTypeName?:string, iamRoleArn?:string, arn?:string, processedRecordsCount?:int, failedRecordsCount?:int, totalRecordsCount?:int}>, nextToken?:string}>
     */
    public function getBatchImportJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{jobId?:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{batchImports?:array<array{jobId?:string, status?:"IN_PROGRESS_INITIALIZING"|"IN_PROGRESS"|"CANCEL_IN_PROGRESS"|"CANCELED"|"COMPLETE"|"FAILED", failureReason?:string, startTime?:string, completionTime?:string, inputPath?:string, outputPath?:string, eventTypeName?:string, iamRoleArn?:string, arn?:string, processedRecordsCount?:int, failedRecordsCount?:int, totalRecordsCount?:int}>, nextToken?:string}>
     */
    public function getBatchImportJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId?:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{batchPredictions?:array<array{jobId?:string, status?:"IN_PROGRESS_INITIALIZING"|"IN_PROGRESS"|"CANCEL_IN_PROGRESS"|"CANCELED"|"COMPLETE"|"FAILED", failureReason?:string, startTime?:string, completionTime?:string, lastHeartbeatTime?:string, inputPath?:string, outputPath?:string, eventTypeName?:string, detectorName?:string, detectorVersion?:string, iamRoleArn?:string, arn?:string, processedRecordsCount?:int, totalRecordsCount?:int}>, nextToken?:string}>
     */
    public function getBatchPredictionJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{jobId?:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{batchPredictions?:array<array{jobId?:string, status?:"IN_PROGRESS_INITIALIZING"|"IN_PROGRESS"|"CANCEL_IN_PROGRESS"|"CANCELED"|"COMPLETE"|"FAILED", failureReason?:string, startTime?:string, completionTime?:string, lastHeartbeatTime?:string, inputPath?:string, outputPath?:string, eventTypeName?:string, detectorName?:string, detectorVersion?:string, iamRoleArn?:string, arn?:string, processedRecordsCount?:int, totalRecordsCount?:int}>, nextToken?:string}>
     */
    public function getBatchPredictionJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{eventTypeName:string} $args
     * @return \AWS\Result<array{eventTypeName?:string, eventsDeletionStatus?:"IN_PROGRESS_INITIALIZING"|"IN_PROGRESS"|"CANCEL_IN_PROGRESS"|"CANCELED"|"COMPLETE"|"FAILED"}>
     */
    public function getDeleteEventsByEventTypeStatus(array $args): \AWS\Result { }

    /**
     * @param array{eventTypeName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{eventTypeName?:string, eventsDeletionStatus?:"IN_PROGRESS_INITIALIZING"|"IN_PROGRESS"|"CANCEL_IN_PROGRESS"|"CANCELED"|"COMPLETE"|"FAILED"}>
     */
    public function getDeleteEventsByEventTypeStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{detectorId:string, detectorVersionId:string} $args
     * @return \AWS\Result<array{detectorId?:string, detectorVersionId?:string, description?:string, externalModelEndpoints?:array<string>, modelVersions?:array<array{modelId:string, modelType:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", modelVersionNumber:string, arn?:string}>, rules?:array<array{detectorId:string, ruleId:string, ruleVersion:string}>, status?:"DRAFT"|"ACTIVE"|"INACTIVE", lastUpdatedTime?:string, createdTime?:string, ruleExecutionMode?:"ALL_MATCHED"|"FIRST_MATCHED", arn?:string}>
     */
    public function getDetectorVersion(array $args): \AWS\Result { }

    /**
     * @param array{detectorId:string, detectorVersionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{detectorId?:string, detectorVersionId?:string, description?:string, externalModelEndpoints?:array<string>, modelVersions?:array<array{modelId:string, modelType:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", modelVersionNumber:string, arn?:string}>, rules?:array<array{detectorId:string, ruleId:string, ruleVersion:string}>, status?:"DRAFT"|"ACTIVE"|"INACTIVE", lastUpdatedTime?:string, createdTime?:string, ruleExecutionMode?:"ALL_MATCHED"|"FIRST_MATCHED", arn?:string}>
     */
    public function getDetectorVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{detectorId?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{detectors?:array<array{detectorId?:string, description?:string, eventTypeName?:string, lastUpdatedTime?:string, createdTime?:string, arn?:string}>, nextToken?:string}>
     */
    public function getDetectors(array $args = []): \AWS\Result { }

    /**
     * @param array{detectorId?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{detectors?:array<array{detectorId?:string, description?:string, eventTypeName?:string, lastUpdatedTime?:string, createdTime?:string, arn?:string}>, nextToken?:string}>
     */
    public function getDetectorsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{entityTypes?:array<array{name?:string, description?:string, lastUpdatedTime?:string, createdTime?:string, arn?:string}>, nextToken?:string}>
     */
    public function getEntityTypes(array $args = []): \AWS\Result { }

    /**
     * @param array{name?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{entityTypes?:array<array{name?:string, description?:string, lastUpdatedTime?:string, createdTime?:string, arn?:string}>, nextToken?:string}>
     */
    public function getEntityTypesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{eventId:string, eventTypeName:string} $args
     * @return \AWS\Result<array{event?:array{eventId?:string, eventTypeName?:string, eventTimestamp?:string, eventVariables?:array<string, string>, currentLabel?:string, labelTimestamp?:string, entities?:array<array{entityType:string, entityId:string}>}}>
     */
    public function getEvent(array $args): \AWS\Result { }

    /**
     * @param array{eventId:string, eventTypeName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{event?:array{eventId?:string, eventTypeName?:string, eventTimestamp?:string, eventVariables?:array<string, string>, currentLabel?:string, labelTimestamp?:string, entities?:array<array{entityType:string, entityId:string}>}}>
     */
    public function getEventAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{detectorId:string, detectorVersionId?:string, eventId:string, eventTypeName:string, entities:array<array{entityType:string, entityId:string}>, eventTimestamp:string, eventVariables:array<string, string>, externalModelEndpointDataBlobs?:array<string, array{byteBuffer?:string|resource|\Psr\Http\Message\StreamInterface, contentType?:string}>} $args
     * @return \AWS\Result<array{modelScores?:array<array{modelVersion?:array{modelId:string, modelType:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", modelVersionNumber:string, arn?:string}, scores?:array<string, float>}>, ruleResults?:array<array{ruleId?:string, outcomes?:array<string>}>, externalModelOutputs?:array<array{externalModel?:array{modelEndpoint?:string, modelSource?:"SAGEMAKER"}, outputs?:array<string, string>}>}>
     */
    public function getEventPrediction(array $args): \AWS\Result { }

    /**
     * @param array{detectorId:string, detectorVersionId?:string, eventId:string, eventTypeName:string, entities:array<array{entityType:string, entityId:string}>, eventTimestamp:string, eventVariables:array<string, string>, externalModelEndpointDataBlobs?:array<string, array{byteBuffer?:string|resource|\Psr\Http\Message\StreamInterface, contentType?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{modelScores?:array<array{modelVersion?:array{modelId:string, modelType:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", modelVersionNumber:string, arn?:string}, scores?:array<string, float>}>, ruleResults?:array<array{ruleId?:string, outcomes?:array<string>}>, externalModelOutputs?:array<array{externalModel?:array{modelEndpoint?:string, modelSource?:"SAGEMAKER"}, outputs?:array<string, string>}>}>
     */
    public function getEventPredictionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{eventId:string, eventTypeName:string, detectorId:string, detectorVersionId:string, predictionTimestamp:string} $args
     * @return \AWS\Result<array{eventId?:string, eventTypeName?:string, entityId?:string, entityType?:string, eventTimestamp?:string, detectorId?:string, detectorVersionId?:string, detectorVersionStatus?:string, eventVariables?:array<array{name?:string, value?:string, source?:string}>, rules?:array<array{ruleId?:string, ruleVersion?:string, expression?:string, expressionWithValues?:string, outcomes?:array<string>, evaluated?:bool, matched?:bool}>, ruleExecutionMode?:"ALL_MATCHED"|"FIRST_MATCHED", outcomes?:array<string>, evaluatedModelVersions?:array<array{modelId?:string, modelVersion?:string, modelType?:string, evaluations?:array<array{outputVariableName?:string, evaluationScore?:string, predictionExplanations?:array{variableImpactExplanations?:array<array{eventVariableName?:string, relativeImpact?:string, logOddsImpact?:float}>, aggregatedVariablesImpactExplanations?:array<array{eventVariableNames?:array<string>, relativeImpact?:string, logOddsImpact?:float}>}}>}>, evaluatedExternalModels?:array<array{modelEndpoint?:string, useEventVariables?:bool, inputVariables?:array<string, string>, outputVariables?:array<string, string>}>, predictionTimestamp?:string}>
     */
    public function getEventPredictionMetadata(array $args): \AWS\Result { }

    /**
     * @param array{eventId:string, eventTypeName:string, detectorId:string, detectorVersionId:string, predictionTimestamp:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{eventId?:string, eventTypeName?:string, entityId?:string, entityType?:string, eventTimestamp?:string, detectorId?:string, detectorVersionId?:string, detectorVersionStatus?:string, eventVariables?:array<array{name?:string, value?:string, source?:string}>, rules?:array<array{ruleId?:string, ruleVersion?:string, expression?:string, expressionWithValues?:string, outcomes?:array<string>, evaluated?:bool, matched?:bool}>, ruleExecutionMode?:"ALL_MATCHED"|"FIRST_MATCHED", outcomes?:array<string>, evaluatedModelVersions?:array<array{modelId?:string, modelVersion?:string, modelType?:string, evaluations?:array<array{outputVariableName?:string, evaluationScore?:string, predictionExplanations?:array{variableImpactExplanations?:array<array{eventVariableName?:string, relativeImpact?:string, logOddsImpact?:float}>, aggregatedVariablesImpactExplanations?:array<array{eventVariableNames?:array<string>, relativeImpact?:string, logOddsImpact?:float}>}}>}>, evaluatedExternalModels?:array<array{modelEndpoint?:string, useEventVariables?:bool, inputVariables?:array<string, string>, outputVariables?:array<string, string>}>, predictionTimestamp?:string}>
     */
    public function getEventPredictionMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{eventTypes?:array<array{name?:string, description?:string, eventVariables?:array<string>, labels?:array<string>, entityTypes?:array<string>, eventIngestion?:"ENABLED"|"DISABLED", ingestedEventStatistics?:array{numberOfEvents?:int, eventDataSizeInBytes?:int, leastRecentEvent?:string, mostRecentEvent?:string, lastUpdatedTime?:string}, lastUpdatedTime?:string, createdTime?:string, arn?:string, eventOrchestration?:array{eventBridgeEnabled:bool}}>, nextToken?:string}>
     */
    public function getEventTypes(array $args = []): \AWS\Result { }

    /**
     * @param array{name?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{eventTypes?:array<array{name?:string, description?:string, eventVariables?:array<string>, labels?:array<string>, entityTypes?:array<string>, eventIngestion?:"ENABLED"|"DISABLED", ingestedEventStatistics?:array{numberOfEvents?:int, eventDataSizeInBytes?:int, leastRecentEvent?:string, mostRecentEvent?:string, lastUpdatedTime?:string}, lastUpdatedTime?:string, createdTime?:string, arn?:string, eventOrchestration?:array{eventBridgeEnabled:bool}}>, nextToken?:string}>
     */
    public function getEventTypesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{modelEndpoint?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{externalModels?:array<array{modelEndpoint?:string, modelSource?:"SAGEMAKER", invokeModelEndpointRoleArn?:string, inputConfiguration?:array{eventTypeName?:string, format?:"TEXT_CSV"|"APPLICATION_JSON", useEventVariables:bool, jsonInputTemplate?:string, csvInputTemplate?:string}, outputConfiguration?:array{format:"TEXT_CSV"|"APPLICATION_JSONLINES", jsonKeyToVariableMap?:array<string, string>, csvIndexToVariableMap?:array<string, string>}, modelEndpointStatus?:"ASSOCIATED"|"DISSOCIATED", lastUpdatedTime?:string, createdTime?:string, arn?:string}>, nextToken?:string}>
     */
    public function getExternalModels(array $args = []): \AWS\Result { }

    /**
     * @param array{modelEndpoint?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{externalModels?:array<array{modelEndpoint?:string, modelSource?:"SAGEMAKER", invokeModelEndpointRoleArn?:string, inputConfiguration?:array{eventTypeName?:string, format?:"TEXT_CSV"|"APPLICATION_JSON", useEventVariables:bool, jsonInputTemplate?:string, csvInputTemplate?:string}, outputConfiguration?:array{format:"TEXT_CSV"|"APPLICATION_JSONLINES", jsonKeyToVariableMap?:array<string, string>, csvIndexToVariableMap?:array<string, string>}, modelEndpointStatus?:"ASSOCIATED"|"DISSOCIATED", lastUpdatedTime?:string, createdTime?:string, arn?:string}>, nextToken?:string}>
     */
    public function getExternalModelsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{kmsKey?:array{kmsEncryptionKeyArn?:string}}>
     */
    public function getKMSEncryptionKey(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{kmsKey?:array{kmsEncryptionKeyArn?:string}}>
     */
    public function getKMSEncryptionKeyAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{labels?:array<array{name?:string, description?:string, lastUpdatedTime?:string, createdTime?:string, arn?:string}>, nextToken?:string}>
     */
    public function getLabels(array $args = []): \AWS\Result { }

    /**
     * @param array{name?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{labels?:array<array{name?:string, description?:string, lastUpdatedTime?:string, createdTime?:string, arn?:string}>, nextToken?:string}>
     */
    public function getLabelsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{elements?:array<string>, nextToken?:string}>
     */
    public function getListElements(array $args): \AWS\Result { }

    /**
     * @param array{name:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{elements?:array<string>, nextToken?:string}>
     */
    public function getListElementsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{lists?:array<array{name:string, description?:string, variableType?:string, createdTime?:string, updatedTime?:string, arn?:string}>, nextToken?:string}>
     */
    public function getListsMetadata(array $args = []): \AWS\Result { }

    /**
     * @param array{name?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{lists?:array<array{name:string, description?:string, variableType?:string, createdTime?:string, updatedTime?:string, arn?:string}>, nextToken?:string}>
     */
    public function getListsMetadataAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{modelId:string, modelType:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", modelVersionNumber:string} $args
     * @return \AWS\Result<array{modelId?:string, modelType?:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", modelVersionNumber?:string, trainingDataSource?:"EXTERNAL_EVENTS"|"INGESTED_EVENTS", trainingDataSchema?:array{modelVariables:array<string>, labelSchema?:array{labelMapper?:array<string, array<string>>, unlabeledEventsTreatment?:"IGNORE"|"FRAUD"|"LEGIT"|"AUTO"}}, externalEventsDetail?:array{dataLocation:string, dataAccessRoleArn:string}, ingestedEventsDetail?:array{ingestedEventsTimeWindow:array{startTime:string, endTime:string}}, status?:string, arn?:string}>
     */
    public function getModelVersion(array $args): \AWS\Result { }

    /**
     * @param array{modelId:string, modelType:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", modelVersionNumber:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{modelId?:string, modelType?:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", modelVersionNumber?:string, trainingDataSource?:"EXTERNAL_EVENTS"|"INGESTED_EVENTS", trainingDataSchema?:array{modelVariables:array<string>, labelSchema?:array{labelMapper?:array<string, array<string>>, unlabeledEventsTreatment?:"IGNORE"|"FRAUD"|"LEGIT"|"AUTO"}}, externalEventsDetail?:array{dataLocation:string, dataAccessRoleArn:string}, ingestedEventsDetail?:array{ingestedEventsTimeWindow:array{startTime:string, endTime:string}}, status?:string, arn?:string}>
     */
    public function getModelVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{modelId?:string, modelType?:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{nextToken?:string, models?:array<array{modelId?:string, modelType?:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", description?:string, eventTypeName?:string, createdTime?:string, lastUpdatedTime?:string, arn?:string}>}>
     */
    public function getModels(array $args = []): \AWS\Result { }

    /**
     * @param array{modelId?:string, modelType?:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, models?:array<array{modelId?:string, modelType?:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", description?:string, eventTypeName?:string, createdTime?:string, lastUpdatedTime?:string, arn?:string}>}>
     */
    public function getModelsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{outcomes?:array<array{name?:string, description?:string, lastUpdatedTime?:string, createdTime?:string, arn?:string}>, nextToken?:string}>
     */
    public function getOutcomes(array $args = []): \AWS\Result { }

    /**
     * @param array{name?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{outcomes?:array<array{name?:string, description?:string, lastUpdatedTime?:string, createdTime?:string, arn?:string}>, nextToken?:string}>
     */
    public function getOutcomesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ruleId?:string, detectorId:string, ruleVersion?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{ruleDetails?:array<array{ruleId?:string, description?:string, detectorId?:string, ruleVersion?:string, expression?:string, language?:"DETECTORPL", outcomes?:array<string>, lastUpdatedTime?:string, createdTime?:string, arn?:string}>, nextToken?:string}>
     */
    public function getRules(array $args): \AWS\Result { }

    /**
     * @param array{ruleId?:string, detectorId:string, ruleVersion?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ruleDetails?:array<array{ruleId?:string, description?:string, detectorId?:string, ruleVersion?:string, expression?:string, language?:"DETECTORPL", outcomes?:array<string>, lastUpdatedTime?:string, createdTime?:string, arn?:string}>, nextToken?:string}>
     */
    public function getRulesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{variables?:array<array{name?:string, dataType?:"STRING"|"INTEGER"|"FLOAT"|"BOOLEAN"|"DATETIME", dataSource?:"EVENT"|"MODEL_SCORE"|"EXTERNAL_MODEL_SCORE", defaultValue?:string, description?:string, variableType?:string, lastUpdatedTime?:string, createdTime?:string, arn?:string}>, nextToken?:string}>
     */
    public function getVariables(array $args = []): \AWS\Result { }

    /**
     * @param array{name?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{variables?:array<array{name?:string, dataType?:"STRING"|"INTEGER"|"FLOAT"|"BOOLEAN"|"DATETIME", dataSource?:"EVENT"|"MODEL_SCORE"|"EXTERNAL_MODEL_SCORE", defaultValue?:string, description?:string, variableType?:string, lastUpdatedTime?:string, createdTime?:string, arn?:string}>, nextToken?:string}>
     */
    public function getVariablesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{eventId?:array{value?:string}, eventType?:array{value?:string}, detectorId?:array{value?:string}, detectorVersionId?:array{value?:string}, predictionTimeRange?:array{startTime:string, endTime:string}, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{eventPredictionSummaries?:array<array{eventId?:string, eventTypeName?:string, eventTimestamp?:string, predictionTimestamp?:string, detectorId?:string, detectorVersionId?:string}>, nextToken?:string}>
     */
    public function listEventPredictions(array $args = []): \AWS\Result { }

    /**
     * @param array{eventId?:array{value?:string}, eventType?:array{value?:string}, detectorId?:array{value?:string}, detectorVersionId?:array{value?:string}, predictionTimeRange?:array{startTime:string, endTime:string}, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{eventPredictionSummaries?:array<array{eventId?:string, eventTypeName?:string, eventTimestamp?:string, predictionTimestamp?:string, detectorId?:string, detectorVersionId?:string}>, nextToken?:string}>
     */
    public function listEventPredictionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceARN:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{tags?:array<array{key:string, value:string}>, nextToken?:string}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceARN:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<array{key:string, value:string}>, nextToken?:string}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{detectorId:string, description?:string, eventTypeName:string, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function putDetector(array $args): \AWS\Result { }

    /**
     * @param array{detectorId:string, description?:string, eventTypeName:string, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putDetectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function putEntityType(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putEntityTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, eventVariables:array<string>, labels?:array<string>, entityTypes:array<string>, eventIngestion?:"ENABLED"|"DISABLED", tags?:array<array{key:string, value:string}>, eventOrchestration?:array{eventBridgeEnabled:bool}} $args
     * @return \AWS\Result<array{}>
     */
    public function putEventType(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, eventVariables:array<string>, labels?:array<string>, entityTypes:array<string>, eventIngestion?:"ENABLED"|"DISABLED", tags?:array<array{key:string, value:string}>, eventOrchestration?:array{eventBridgeEnabled:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putEventTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{modelEndpoint:string, modelSource:"SAGEMAKER", invokeModelEndpointRoleArn:string, inputConfiguration:array{eventTypeName?:string, format?:"TEXT_CSV"|"APPLICATION_JSON", useEventVariables:bool, jsonInputTemplate?:string, csvInputTemplate?:string}, outputConfiguration:array{format:"TEXT_CSV"|"APPLICATION_JSONLINES", jsonKeyToVariableMap?:array<string, string>, csvIndexToVariableMap?:array<string, string>}, modelEndpointStatus:"ASSOCIATED"|"DISSOCIATED", tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function putExternalModel(array $args): \AWS\Result { }

    /**
     * @param array{modelEndpoint:string, modelSource:"SAGEMAKER", invokeModelEndpointRoleArn:string, inputConfiguration:array{eventTypeName?:string, format?:"TEXT_CSV"|"APPLICATION_JSON", useEventVariables:bool, jsonInputTemplate?:string, csvInputTemplate?:string}, outputConfiguration:array{format:"TEXT_CSV"|"APPLICATION_JSONLINES", jsonKeyToVariableMap?:array<string, string>, csvIndexToVariableMap?:array<string, string>}, modelEndpointStatus:"ASSOCIATED"|"DISSOCIATED", tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putExternalModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{kmsEncryptionKeyArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function putKMSEncryptionKey(array $args): \AWS\Result { }

    /**
     * @param array{kmsEncryptionKeyArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putKMSEncryptionKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function putLabel(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putLabelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function putOutcome(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putOutcomeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{eventId:string, eventTypeName:string, eventTimestamp:string, eventVariables:array<string, string>, assignedLabel?:string, labelTimestamp?:string, entities:array<array{entityType:string, entityId:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function sendEvent(array $args): \AWS\Result { }

    /**
     * @param array{eventId:string, eventTypeName:string, eventTimestamp:string, eventVariables:array<string, string>, assignedLabel?:string, labelTimestamp?:string, entities:array<array{entityType:string, entityId:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function sendEventAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceARN:string, tags:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceARN:string, tags:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceARN:string, tagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceARN:string, tagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{detectorId:string, detectorVersionId:string, externalModelEndpoints:array<string>, rules:array<array{detectorId:string, ruleId:string, ruleVersion:string}>, description?:string, modelVersions?:array<array{modelId:string, modelType:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", modelVersionNumber:string, arn?:string}>, ruleExecutionMode?:"ALL_MATCHED"|"FIRST_MATCHED"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateDetectorVersion(array $args): \AWS\Result { }

    /**
     * @param array{detectorId:string, detectorVersionId:string, externalModelEndpoints:array<string>, rules:array<array{detectorId:string, ruleId:string, ruleVersion:string}>, description?:string, modelVersions?:array<array{modelId:string, modelType:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", modelVersionNumber:string, arn?:string}>, ruleExecutionMode?:"ALL_MATCHED"|"FIRST_MATCHED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateDetectorVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{detectorId:string, detectorVersionId:string, description:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateDetectorVersionMetadata(array $args): \AWS\Result { }

    /**
     * @param array{detectorId:string, detectorVersionId:string, description:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateDetectorVersionMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{detectorId:string, detectorVersionId:string, status:"DRAFT"|"ACTIVE"|"INACTIVE"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateDetectorVersionStatus(array $args): \AWS\Result { }

    /**
     * @param array{detectorId:string, detectorVersionId:string, status:"DRAFT"|"ACTIVE"|"INACTIVE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateDetectorVersionStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{eventId:string, eventTypeName:string, assignedLabel:string, labelTimestamp:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateEventLabel(array $args): \AWS\Result { }

    /**
     * @param array{eventId:string, eventTypeName:string, assignedLabel:string, labelTimestamp:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateEventLabelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, elements?:array<string>, description?:string, updateMode?:"REPLACE"|"APPEND"|"REMOVE", variableType?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateList(array $args): \AWS\Result { }

    /**
     * @param array{name:string, elements?:array<string>, description?:string, updateMode?:"REPLACE"|"APPEND"|"REMOVE", variableType?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateListAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{modelId:string, modelType:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", description?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateModel(array $args): \AWS\Result { }

    /**
     * @param array{modelId:string, modelType:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{modelId:string, modelType:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", majorVersionNumber:string, externalEventsDetail?:array{dataLocation:string, dataAccessRoleArn:string}, ingestedEventsDetail?:array{ingestedEventsTimeWindow:array{startTime:string, endTime:string}}, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{modelId?:string, modelType?:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", modelVersionNumber?:string, status?:string}>
     */
    public function updateModelVersion(array $args): \AWS\Result { }

    /**
     * @param array{modelId:string, modelType:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", majorVersionNumber:string, externalEventsDetail?:array{dataLocation:string, dataAccessRoleArn:string}, ingestedEventsDetail?:array{ingestedEventsTimeWindow:array{startTime:string, endTime:string}}, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{modelId?:string, modelType?:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", modelVersionNumber?:string, status?:string}>
     */
    public function updateModelVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{modelId:string, modelType:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", modelVersionNumber:string, status:"ACTIVE"|"INACTIVE"|"TRAINING_CANCELLED"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateModelVersionStatus(array $args): \AWS\Result { }

    /**
     * @param array{modelId:string, modelType:"ONLINE_FRAUD_INSIGHTS"|"TRANSACTION_FRAUD_INSIGHTS"|"ACCOUNT_TAKEOVER_INSIGHTS", modelVersionNumber:string, status:"ACTIVE"|"INACTIVE"|"TRAINING_CANCELLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateModelVersionStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{rule:array{detectorId:string, ruleId:string, ruleVersion:string}, description:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateRuleMetadata(array $args): \AWS\Result { }

    /**
     * @param array{rule:array{detectorId:string, ruleId:string, ruleVersion:string}, description:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateRuleMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{rule:array{detectorId:string, ruleId:string, ruleVersion:string}, description?:string, expression:string, language:"DETECTORPL", outcomes:array<string>, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{rule?:array{detectorId:string, ruleId:string, ruleVersion:string}}>
     */
    public function updateRuleVersion(array $args): \AWS\Result { }

    /**
     * @param array{rule:array{detectorId:string, ruleId:string, ruleVersion:string}, description?:string, expression:string, language:"DETECTORPL", outcomes:array<string>, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{rule?:array{detectorId:string, ruleId:string, ruleVersion:string}}>
     */
    public function updateRuleVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, defaultValue?:string, description?:string, variableType?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateVariable(array $args): \AWS\Result { }

    /**
     * @param array{name:string, defaultValue?:string, description?:string, variableType?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateVariableAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
