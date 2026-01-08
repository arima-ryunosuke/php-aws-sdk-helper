<?php
namespace AWS\Neptunedata;

class NeptunedataClient
{
    /**
     * @param array{queryId:string} $args
     * @return \AWS\Result<array{status?:string}>
     */
    public function cancelGremlinQuery(array $args): \AWS\Result { }

    /**
     * @param array{queryId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{status?:string}>
     */
    public function cancelGremlinQueryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{loadId:string} $args
     * @return \AWS\Result<array{status?:string}>
     */
    public function cancelLoaderJob(array $args): \AWS\Result { }

    /**
     * @param array{loadId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{status?:string}>
     */
    public function cancelLoaderJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, neptuneIamRoleArn?:string, clean?:bool} $args
     * @return \AWS\Result<array{status?:string}>
     */
    public function cancelMLDataProcessingJob(array $args): \AWS\Result { }

    /**
     * @param array{id:string, neptuneIamRoleArn?:string, clean?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{status?:string}>
     */
    public function cancelMLDataProcessingJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, neptuneIamRoleArn?:string, clean?:bool} $args
     * @return \AWS\Result<array{status?:string}>
     */
    public function cancelMLModelTrainingJob(array $args): \AWS\Result { }

    /**
     * @param array{id:string, neptuneIamRoleArn?:string, clean?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{status?:string}>
     */
    public function cancelMLModelTrainingJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, neptuneIamRoleArn?:string, clean?:bool} $args
     * @return \AWS\Result<array{status?:string}>
     */
    public function cancelMLModelTransformJob(array $args): \AWS\Result { }

    /**
     * @param array{id:string, neptuneIamRoleArn?:string, clean?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{status?:string}>
     */
    public function cancelMLModelTransformJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{queryId:string, silent?:bool} $args
     * @return \AWS\Result<array{status?:string, payload?:bool}>
     */
    public function cancelOpenCypherQuery(array $args): \AWS\Result { }

    /**
     * @param array{queryId:string, silent?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{status?:string, payload?:bool}>
     */
    public function cancelOpenCypherQueryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id?:string, mlModelTrainingJobId?:string, mlModelTransformJobId?:string, update?:bool, neptuneIamRoleArn?:string, modelName?:string, instanceType?:string, instanceCount?:int, volumeEncryptionKMSKey?:string} $args
     * @return \AWS\Result<array{id?:string, arn?:string, creationTimeInMillis?:int}>
     */
    public function createMLEndpoint(array $args = []): \AWS\Result { }

    /**
     * @param array{id?:string, mlModelTrainingJobId?:string, mlModelTransformJobId?:string, update?:bool, neptuneIamRoleArn?:string, modelName?:string, instanceType?:string, instanceCount?:int, volumeEncryptionKMSKey?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, arn?:string, creationTimeInMillis?:int}>
     */
    public function createMLEndpointAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, neptuneIamRoleArn?:string, clean?:bool} $args
     * @return \AWS\Result<array{status?:string}>
     */
    public function deleteMLEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{id:string, neptuneIamRoleArn?:string, clean?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{status?:string}>
     */
    public function deleteMLEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{statusCode?:int, status?:string, payload?:array{active?:bool, statisticsId?:string}}>
     */
    public function deletePropertygraphStatistics(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{statusCode?:int, status?:string, payload?:array{active?:bool, statisticsId?:string}}>
     */
    public function deletePropertygraphStatisticsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{statusCode?:int, status?:string, payload?:array{active?:bool, statisticsId?:string}}>
     */
    public function deleteSparqlStatistics(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{statusCode?:int, status?:string, payload?:array{active?:bool, statisticsId?:string}}>
     */
    public function deleteSparqlStatisticsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{action:"initiateDatabaseReset"|"performDatabaseReset", token?:string} $args
     * @return \AWS\Result<array{status:string, payload?:array{token?:string}}>
     */
    public function executeFastReset(array $args): \AWS\Result { }

    /**
     * @param array{action:"initiateDatabaseReset"|"performDatabaseReset", token?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{status:string, payload?:array{token?:string}}>
     */
    public function executeFastResetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{gremlinQuery:string} $args
     * @return \AWS\Result<array{output?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function executeGremlinExplainQuery(array $args): \AWS\Result { }

    /**
     * @param array{gremlinQuery:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{output?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function executeGremlinExplainQueryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{gremlinQuery:string, results?:bool, chop?:int, serializer?:string, indexOps?:bool} $args
     * @return \AWS\Result<array{output?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function executeGremlinProfileQuery(array $args): \AWS\Result { }

    /**
     * @param array{gremlinQuery:string, results?:bool, chop?:int, serializer?:string, indexOps?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{output?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function executeGremlinProfileQueryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{gremlinQuery:string, serializer?:string} $args
     * @return \AWS\Result<array{requestId?:string, status?:array{message?:string, code?:int, attributes?:array{}}, result?:array{}, meta?:array{}}>
     */
    public function executeGremlinQuery(array $args): \AWS\Result { }

    /**
     * @param array{gremlinQuery:string, serializer?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{requestId?:string, status?:array{message?:string, code?:int, attributes?:array{}}, result?:array{}, meta?:array{}}>
     */
    public function executeGremlinQueryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{openCypherQuery:string, parameters?:string, explainMode:"static"|"dynamic"|"details"} $args
     * @return \AWS\Result<array{results:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function executeOpenCypherExplainQuery(array $args): \AWS\Result { }

    /**
     * @param array{openCypherQuery:string, parameters?:string, explainMode:"static"|"dynamic"|"details"} $args
     * @return \GuzzleHttp\Promise\Promise<array{results:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function executeOpenCypherExplainQueryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{openCypherQuery:string, parameters?:string} $args
     * @return \AWS\Result<array{results:array{}}>
     */
    public function executeOpenCypherQuery(array $args): \AWS\Result { }

    /**
     * @param array{openCypherQuery:string, parameters?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{results:array{}}>
     */
    public function executeOpenCypherQueryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{status?:string, startTime?:string, dbEngineVersion?:string, role?:string, dfeQueryEngine?:string, gremlin?:array{version:string}, sparql?:array{version:string}, opencypher?:array{version:string}, labMode?:array<string, string>, rollingBackTrxCount?:int, rollingBackTrxEarliestStartTime?:string, features?:array<string, array{}>, settings?:array<string, string>}>
     */
    public function getEngineStatus(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{status?:string, startTime?:string, dbEngineVersion?:string, role?:string, dfeQueryEngine?:string, gremlin?:array{version:string}, sparql?:array{version:string}, opencypher?:array{version:string}, labMode?:array<string, string>, rollingBackTrxCount?:int, rollingBackTrxEarliestStartTime?:string, features?:array<string, array{}>, settings?:array<string, string>}>
     */
    public function getEngineStatusAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{queryId:string} $args
     * @return \AWS\Result<array{queryId?:string, queryString?:string, queryEvalStats?:array{waited?:int, elapsed?:int, cancelled?:bool, subqueries?:array{}}}>
     */
    public function getGremlinQueryStatus(array $args): \AWS\Result { }

    /**
     * @param array{queryId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{queryId?:string, queryString?:string, queryEvalStats?:array{waited?:int, elapsed?:int, cancelled?:bool, subqueries?:array{}}}>
     */
    public function getGremlinQueryStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{loadId:string, details?:bool, errors?:bool, page?:int, errorsPerPage?:int} $args
     * @return \AWS\Result<array{status:string, payload:array{}}>
     */
    public function getLoaderJobStatus(array $args): \AWS\Result { }

    /**
     * @param array{loadId:string, details?:bool, errors?:bool, page?:int, errorsPerPage?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{status:string, payload:array{}}>
     */
    public function getLoaderJobStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, neptuneIamRoleArn?:string} $args
     * @return \AWS\Result<array{status?:string, id?:string, processingJob?:array{name?:string, arn?:string, status?:string, outputLocation?:string, failureReason?:string, cloudwatchLogUrl?:string}}>
     */
    public function getMLDataProcessingJob(array $args): \AWS\Result { }

    /**
     * @param array{id:string, neptuneIamRoleArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{status?:string, id?:string, processingJob?:array{name?:string, arn?:string, status?:string, outputLocation?:string, failureReason?:string, cloudwatchLogUrl?:string}}>
     */
    public function getMLDataProcessingJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, neptuneIamRoleArn?:string} $args
     * @return \AWS\Result<array{status?:string, id?:string, endpoint?:array{name?:string, arn?:string, status?:string, outputLocation?:string, failureReason?:string, cloudwatchLogUrl?:string}, endpointConfig?:array{name?:string, arn?:string}}>
     */
    public function getMLEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{id:string, neptuneIamRoleArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{status?:string, id?:string, endpoint?:array{name?:string, arn?:string, status?:string, outputLocation?:string, failureReason?:string, cloudwatchLogUrl?:string}, endpointConfig?:array{name?:string, arn?:string}}>
     */
    public function getMLEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, neptuneIamRoleArn?:string} $args
     * @return \AWS\Result<array{status?:string, id?:string, processingJob?:array{name?:string, arn?:string, status?:string, outputLocation?:string, failureReason?:string, cloudwatchLogUrl?:string}, hpoJob?:array{name?:string, arn?:string, status?:string, outputLocation?:string, failureReason?:string, cloudwatchLogUrl?:string}, modelTransformJob?:array{name?:string, arn?:string, status?:string, outputLocation?:string, failureReason?:string, cloudwatchLogUrl?:string}, mlModels?:array<array{name?:string, arn?:string}>}>
     */
    public function getMLModelTrainingJob(array $args): \AWS\Result { }

    /**
     * @param array{id:string, neptuneIamRoleArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{status?:string, id?:string, processingJob?:array{name?:string, arn?:string, status?:string, outputLocation?:string, failureReason?:string, cloudwatchLogUrl?:string}, hpoJob?:array{name?:string, arn?:string, status?:string, outputLocation?:string, failureReason?:string, cloudwatchLogUrl?:string}, modelTransformJob?:array{name?:string, arn?:string, status?:string, outputLocation?:string, failureReason?:string, cloudwatchLogUrl?:string}, mlModels?:array<array{name?:string, arn?:string}>}>
     */
    public function getMLModelTrainingJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, neptuneIamRoleArn?:string} $args
     * @return \AWS\Result<array{status?:string, id?:string, baseProcessingJob?:array{name?:string, arn?:string, status?:string, outputLocation?:string, failureReason?:string, cloudwatchLogUrl?:string}, remoteModelTransformJob?:array{name?:string, arn?:string, status?:string, outputLocation?:string, failureReason?:string, cloudwatchLogUrl?:string}, models?:array<array{name?:string, arn?:string}>}>
     */
    public function getMLModelTransformJob(array $args): \AWS\Result { }

    /**
     * @param array{id:string, neptuneIamRoleArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{status?:string, id?:string, baseProcessingJob?:array{name?:string, arn?:string, status?:string, outputLocation?:string, failureReason?:string, cloudwatchLogUrl?:string}, remoteModelTransformJob?:array{name?:string, arn?:string, status?:string, outputLocation?:string, failureReason?:string, cloudwatchLogUrl?:string}, models?:array<array{name?:string, arn?:string}>}>
     */
    public function getMLModelTransformJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{queryId:string} $args
     * @return \AWS\Result<array{queryId?:string, queryString?:string, queryEvalStats?:array{waited?:int, elapsed?:int, cancelled?:bool, subqueries?:array{}}}>
     */
    public function getOpenCypherQueryStatus(array $args): \AWS\Result { }

    /**
     * @param array{queryId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{queryId?:string, queryString?:string, queryEvalStats?:array{waited?:int, elapsed?:int, cancelled?:bool, subqueries?:array{}}}>
     */
    public function getOpenCypherQueryStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{status:string, payload:array{autoCompute?:bool, active?:bool, statisticsId?:string, date?:int|string|\DateTimeInterface, note?:string, signatureInfo?:array{signatureCount?:int, instanceCount?:int, predicateCount?:int}}}>
     */
    public function getPropertygraphStatistics(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{status:string, payload:array{autoCompute?:bool, active?:bool, statisticsId?:string, date?:int|string|\DateTimeInterface, note?:string, signatureInfo?:array{signatureCount?:int, instanceCount?:int, predicateCount?:int}}}>
     */
    public function getPropertygraphStatisticsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{limit?:int, iteratorType?:"AT_SEQUENCE_NUMBER"|"AFTER_SEQUENCE_NUMBER"|"TRIM_HORIZON"|"LATEST", commitNum?:int, opNum?:int, encoding?:"gzip"} $args
     * @return \AWS\Result<array{lastEventId:array<string, string>, lastTrxTimestampInMillis:int, format:string, records:array<array{commitTimestampInMillis:int, eventId:array<string, string>, data:array{id:string, type:string, key:string, value:array{}, from?:string, to?:string}, op:string, isLastOp?:bool}>, totalRecords:int}>
     */
    public function getPropertygraphStream(array $args = []): \AWS\Result { }

    /**
     * @param array{limit?:int, iteratorType?:"AT_SEQUENCE_NUMBER"|"AFTER_SEQUENCE_NUMBER"|"TRIM_HORIZON"|"LATEST", commitNum?:int, opNum?:int, encoding?:"gzip"} $args
     * @return \GuzzleHttp\Promise\Promise<array{lastEventId:array<string, string>, lastTrxTimestampInMillis:int, format:string, records:array<array{commitTimestampInMillis:int, eventId:array<string, string>, data:array{id:string, type:string, key:string, value:array{}, from?:string, to?:string}, op:string, isLastOp?:bool}>, totalRecords:int}>
     */
    public function getPropertygraphStreamAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{mode?:"basic"|"detailed"} $args
     * @return \AWS\Result<array{statusCode?:int, payload?:array{version?:string, lastStatisticsComputationTime?:int|string|\DateTimeInterface, graphSummary?:array{numNodes?:int, numEdges?:int, numNodeLabels?:int, numEdgeLabels?:int, nodeLabels?:array<string>, edgeLabels?:array<string>, numNodeProperties?:int, numEdgeProperties?:int, nodeProperties?:array<array<string, int>>, edgeProperties?:array<array<string, int>>, totalNodePropertyValues?:int, totalEdgePropertyValues?:int, nodeStructures?:array<array{count?:int, nodeProperties?:array<string>, distinctOutgoingEdgeLabels?:array<string>}>, edgeStructures?:array<array{count?:int, edgeProperties?:array<string>}>}}}>
     */
    public function getPropertygraphSummary(array $args = []): \AWS\Result { }

    /**
     * @param array{mode?:"basic"|"detailed"} $args
     * @return \GuzzleHttp\Promise\Promise<array{statusCode?:int, payload?:array{version?:string, lastStatisticsComputationTime?:int|string|\DateTimeInterface, graphSummary?:array{numNodes?:int, numEdges?:int, numNodeLabels?:int, numEdgeLabels?:int, nodeLabels?:array<string>, edgeLabels?:array<string>, numNodeProperties?:int, numEdgeProperties?:int, nodeProperties?:array<array<string, int>>, edgeProperties?:array<array<string, int>>, totalNodePropertyValues?:int, totalEdgePropertyValues?:int, nodeStructures?:array<array{count?:int, nodeProperties?:array<string>, distinctOutgoingEdgeLabels?:array<string>}>, edgeStructures?:array<array{count?:int, edgeProperties?:array<string>}>}}}>
     */
    public function getPropertygraphSummaryAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{mode?:"basic"|"detailed"} $args
     * @return \AWS\Result<array{statusCode?:int, payload?:array{version?:string, lastStatisticsComputationTime?:int|string|\DateTimeInterface, graphSummary?:array{numDistinctSubjects?:int, numDistinctPredicates?:int, numQuads?:int, numClasses?:int, classes?:array<string>, predicates?:array<array<string, int>>, subjectStructures?:array<array{count?:int, predicates?:array<string>}>}}}>
     */
    public function getRDFGraphSummary(array $args = []): \AWS\Result { }

    /**
     * @param array{mode?:"basic"|"detailed"} $args
     * @return \GuzzleHttp\Promise\Promise<array{statusCode?:int, payload?:array{version?:string, lastStatisticsComputationTime?:int|string|\DateTimeInterface, graphSummary?:array{numDistinctSubjects?:int, numDistinctPredicates?:int, numQuads?:int, numClasses?:int, classes?:array<string>, predicates?:array<array<string, int>>, subjectStructures?:array<array{count?:int, predicates?:array<string>}>}}}>
     */
    public function getRDFGraphSummaryAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{status:string, payload:array{autoCompute?:bool, active?:bool, statisticsId?:string, date?:int|string|\DateTimeInterface, note?:string, signatureInfo?:array{signatureCount?:int, instanceCount?:int, predicateCount?:int}}}>
     */
    public function getSparqlStatistics(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{status:string, payload:array{autoCompute?:bool, active?:bool, statisticsId?:string, date?:int|string|\DateTimeInterface, note?:string, signatureInfo?:array{signatureCount?:int, instanceCount?:int, predicateCount?:int}}}>
     */
    public function getSparqlStatisticsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{limit?:int, iteratorType?:"AT_SEQUENCE_NUMBER"|"AFTER_SEQUENCE_NUMBER"|"TRIM_HORIZON"|"LATEST", commitNum?:int, opNum?:int, encoding?:"gzip"} $args
     * @return \AWS\Result<array{lastEventId:array<string, string>, lastTrxTimestampInMillis:int, format:string, records:array<array{commitTimestampInMillis:int, eventId:array<string, string>, data:array{stmt:string}, op:string, isLastOp?:bool}>, totalRecords:int}>
     */
    public function getSparqlStream(array $args = []): \AWS\Result { }

    /**
     * @param array{limit?:int, iteratorType?:"AT_SEQUENCE_NUMBER"|"AFTER_SEQUENCE_NUMBER"|"TRIM_HORIZON"|"LATEST", commitNum?:int, opNum?:int, encoding?:"gzip"} $args
     * @return \GuzzleHttp\Promise\Promise<array{lastEventId:array<string, string>, lastTrxTimestampInMillis:int, format:string, records:array<array{commitTimestampInMillis:int, eventId:array<string, string>, data:array{stmt:string}, op:string, isLastOp?:bool}>, totalRecords:int}>
     */
    public function getSparqlStreamAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{includeWaiting?:bool} $args
     * @return \AWS\Result<array{acceptedQueryCount?:int, runningQueryCount?:int, queries?:array<array{queryId?:string, queryString?:string, queryEvalStats?:array{waited?:int, elapsed?:int, cancelled?:bool, subqueries?:array{}}}>}>
     */
    public function listGremlinQueries(array $args = []): \AWS\Result { }

    /**
     * @param array{includeWaiting?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{acceptedQueryCount?:int, runningQueryCount?:int, queries?:array<array{queryId?:string, queryString?:string, queryEvalStats?:array{waited?:int, elapsed?:int, cancelled?:bool, subqueries?:array{}}}>}>
     */
    public function listGremlinQueriesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{limit?:int, includeQueuedLoads?:bool} $args
     * @return \AWS\Result<array{status:string, payload:array{loadIds?:array<string>}}>
     */
    public function listLoaderJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{limit?:int, includeQueuedLoads?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{status:string, payload:array{loadIds?:array<string>}}>
     */
    public function listLoaderJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxItems?:int, neptuneIamRoleArn?:string} $args
     * @return \AWS\Result<array{ids?:array<string>}>
     */
    public function listMLDataProcessingJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{maxItems?:int, neptuneIamRoleArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ids?:array<string>}>
     */
    public function listMLDataProcessingJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxItems?:int, neptuneIamRoleArn?:string} $args
     * @return \AWS\Result<array{ids?:array<string>}>
     */
    public function listMLEndpoints(array $args = []): \AWS\Result { }

    /**
     * @param array{maxItems?:int, neptuneIamRoleArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ids?:array<string>}>
     */
    public function listMLEndpointsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxItems?:int, neptuneIamRoleArn?:string} $args
     * @return \AWS\Result<array{ids?:array<string>}>
     */
    public function listMLModelTrainingJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{maxItems?:int, neptuneIamRoleArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ids?:array<string>}>
     */
    public function listMLModelTrainingJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxItems?:int, neptuneIamRoleArn?:string} $args
     * @return \AWS\Result<array{ids?:array<string>}>
     */
    public function listMLModelTransformJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{maxItems?:int, neptuneIamRoleArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ids?:array<string>}>
     */
    public function listMLModelTransformJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{includeWaiting?:bool} $args
     * @return \AWS\Result<array{acceptedQueryCount?:int, runningQueryCount?:int, queries?:array<array{queryId?:string, queryString?:string, queryEvalStats?:array{waited?:int, elapsed?:int, cancelled?:bool, subqueries?:array{}}}>}>
     */
    public function listOpenCypherQueries(array $args = []): \AWS\Result { }

    /**
     * @param array{includeWaiting?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{acceptedQueryCount?:int, runningQueryCount?:int, queries?:array<array{queryId?:string, queryString?:string, queryEvalStats?:array{waited?:int, elapsed?:int, cancelled?:bool, subqueries?:array{}}}>}>
     */
    public function listOpenCypherQueriesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{mode?:"disableAutoCompute"|"enableAutoCompute"|"refresh"} $args
     * @return \AWS\Result<array{status:string, payload?:array{statisticsId?:string}}>
     */
    public function managePropertygraphStatistics(array $args = []): \AWS\Result { }

    /**
     * @param array{mode?:"disableAutoCompute"|"enableAutoCompute"|"refresh"} $args
     * @return \GuzzleHttp\Promise\Promise<array{status:string, payload?:array{statisticsId?:string}}>
     */
    public function managePropertygraphStatisticsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{mode?:"disableAutoCompute"|"enableAutoCompute"|"refresh"} $args
     * @return \AWS\Result<array{status:string, payload?:array{statisticsId?:string}}>
     */
    public function manageSparqlStatistics(array $args = []): \AWS\Result { }

    /**
     * @param array{mode?:"disableAutoCompute"|"enableAutoCompute"|"refresh"} $args
     * @return \GuzzleHttp\Promise\Promise<array{status:string, payload?:array{statisticsId?:string}}>
     */
    public function manageSparqlStatisticsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{source:string, format:"csv"|"opencypher"|"ntriples"|"nquads"|"rdfxml"|"turtle", s3BucketRegion:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"ca-central-1"|"sa-east-1"|"eu-north-1"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"eu-central-1"|"me-south-1"|"af-south-1"|"ap-east-1"|"ap-northeast-1"|"ap-northeast-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-south-1"|"cn-north-1"|"cn-northwest-1"|"us-gov-west-1"|"us-gov-east-1", iamRoleArn:string, mode?:"RESUME"|"NEW"|"AUTO", failOnError?:bool, parallelism?:"LOW"|"MEDIUM"|"HIGH"|"OVERSUBSCRIBE", parserConfiguration?:array<string, string>, updateSingleCardinalityProperties?:bool, queueRequest?:bool, dependencies?:array<string>, userProvidedEdgeIds?:bool} $args
     * @return \AWS\Result<array{status:string, payload:array<string, string>}>
     */
    public function startLoaderJob(array $args): \AWS\Result { }

    /**
     * @param array{source:string, format:"csv"|"opencypher"|"ntriples"|"nquads"|"rdfxml"|"turtle", s3BucketRegion:"us-east-1"|"us-east-2"|"us-west-1"|"us-west-2"|"ca-central-1"|"sa-east-1"|"eu-north-1"|"eu-west-1"|"eu-west-2"|"eu-west-3"|"eu-central-1"|"me-south-1"|"af-south-1"|"ap-east-1"|"ap-northeast-1"|"ap-northeast-2"|"ap-southeast-1"|"ap-southeast-2"|"ap-south-1"|"cn-north-1"|"cn-northwest-1"|"us-gov-west-1"|"us-gov-east-1", iamRoleArn:string, mode?:"RESUME"|"NEW"|"AUTO", failOnError?:bool, parallelism?:"LOW"|"MEDIUM"|"HIGH"|"OVERSUBSCRIBE", parserConfiguration?:array<string, string>, updateSingleCardinalityProperties?:bool, queueRequest?:bool, dependencies?:array<string>, userProvidedEdgeIds?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{status:string, payload:array<string, string>}>
     */
    public function startLoaderJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id?:string, previousDataProcessingJobId?:string, inputDataS3Location:string, processedDataS3Location:string, sagemakerIamRoleArn?:string, neptuneIamRoleArn?:string, processingInstanceType?:string, processingInstanceVolumeSizeInGB?:int, processingTimeOutInSeconds?:int, modelType?:string, configFileName?:string, subnets?:array<string>, securityGroupIds?:array<string>, volumeEncryptionKMSKey?:string, s3OutputEncryptionKMSKey?:string} $args
     * @return \AWS\Result<array{id?:string, arn?:string, creationTimeInMillis?:int}>
     */
    public function startMLDataProcessingJob(array $args): \AWS\Result { }

    /**
     * @param array{id?:string, previousDataProcessingJobId?:string, inputDataS3Location:string, processedDataS3Location:string, sagemakerIamRoleArn?:string, neptuneIamRoleArn?:string, processingInstanceType?:string, processingInstanceVolumeSizeInGB?:int, processingTimeOutInSeconds?:int, modelType?:string, configFileName?:string, subnets?:array<string>, securityGroupIds?:array<string>, volumeEncryptionKMSKey?:string, s3OutputEncryptionKMSKey?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, arn?:string, creationTimeInMillis?:int}>
     */
    public function startMLDataProcessingJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id?:string, previousModelTrainingJobId?:string, dataProcessingJobId:string, trainModelS3Location:string, sagemakerIamRoleArn?:string, neptuneIamRoleArn?:string, baseProcessingInstanceType?:string, trainingInstanceType?:string, trainingInstanceVolumeSizeInGB?:int, trainingTimeOutInSeconds?:int, maxHPONumberOfTrainingJobs?:int, maxHPOParallelTrainingJobs?:int, subnets?:array<string>, securityGroupIds?:array<string>, volumeEncryptionKMSKey?:string, s3OutputEncryptionKMSKey?:string, enableManagedSpotTraining?:bool, customModelTrainingParameters?:array{sourceS3DirectoryPath:string, trainingEntryPointScript?:string, transformEntryPointScript?:string}} $args
     * @return \AWS\Result<array{id?:string, arn?:string, creationTimeInMillis?:int}>
     */
    public function startMLModelTrainingJob(array $args): \AWS\Result { }

    /**
     * @param array{id?:string, previousModelTrainingJobId?:string, dataProcessingJobId:string, trainModelS3Location:string, sagemakerIamRoleArn?:string, neptuneIamRoleArn?:string, baseProcessingInstanceType?:string, trainingInstanceType?:string, trainingInstanceVolumeSizeInGB?:int, trainingTimeOutInSeconds?:int, maxHPONumberOfTrainingJobs?:int, maxHPOParallelTrainingJobs?:int, subnets?:array<string>, securityGroupIds?:array<string>, volumeEncryptionKMSKey?:string, s3OutputEncryptionKMSKey?:string, enableManagedSpotTraining?:bool, customModelTrainingParameters?:array{sourceS3DirectoryPath:string, trainingEntryPointScript?:string, transformEntryPointScript?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, arn?:string, creationTimeInMillis?:int}>
     */
    public function startMLModelTrainingJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id?:string, dataProcessingJobId?:string, mlModelTrainingJobId?:string, trainingJobName?:string, modelTransformOutputS3Location:string, sagemakerIamRoleArn?:string, neptuneIamRoleArn?:string, customModelTransformParameters?:array{sourceS3DirectoryPath:string, transformEntryPointScript?:string}, baseProcessingInstanceType?:string, baseProcessingInstanceVolumeSizeInGB?:int, subnets?:array<string>, securityGroupIds?:array<string>, volumeEncryptionKMSKey?:string, s3OutputEncryptionKMSKey?:string} $args
     * @return \AWS\Result<array{id?:string, arn?:string, creationTimeInMillis?:int}>
     */
    public function startMLModelTransformJob(array $args): \AWS\Result { }

    /**
     * @param array{id?:string, dataProcessingJobId?:string, mlModelTrainingJobId?:string, trainingJobName?:string, modelTransformOutputS3Location:string, sagemakerIamRoleArn?:string, neptuneIamRoleArn?:string, customModelTransformParameters?:array{sourceS3DirectoryPath:string, transformEntryPointScript?:string}, baseProcessingInstanceType?:string, baseProcessingInstanceVolumeSizeInGB?:int, subnets?:array<string>, securityGroupIds?:array<string>, volumeEncryptionKMSKey?:string, s3OutputEncryptionKMSKey?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, arn?:string, creationTimeInMillis?:int}>
     */
    public function startMLModelTransformJobAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
