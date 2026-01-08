<?php
namespace AWS\NeptuneGraph;

class NeptuneGraphClient
{
    /**
     * @param array{taskIdentifier:string} $args
     * @return \AWS\Result<array{graphId:string, roleArn:string, taskId:string, status:"INITIALIZING"|"EXPORTING"|"SUCCEEDED"|"FAILED"|"CANCELLING"|"CANCELLED"|"DELETED", format:"PARQUET"|"CSV", destination:string, kmsKeyIdentifier:string, parquetType?:"COLUMNAR", statusReason?:string}>
     */
    public function cancelExportTask(array $args): \AWS\Result { }

    /**
     * @param array{taskIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{graphId:string, roleArn:string, taskId:string, status:"INITIALIZING"|"EXPORTING"|"SUCCEEDED"|"FAILED"|"CANCELLING"|"CANCELLED"|"DELETED", format:"PARQUET"|"CSV", destination:string, kmsKeyIdentifier:string, parquetType?:"COLUMNAR", statusReason?:string}>
     */
    public function cancelExportTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{taskIdentifier:string} $args
     * @return \AWS\Result<array{graphId?:string, taskId:string, source:string, format?:"CSV"|"OPEN_CYPHER"|"PARQUET"|"NTRIPLES", parquetType?:"COLUMNAR", roleArn:string, status:"INITIALIZING"|"EXPORTING"|"ANALYZING_DATA"|"IMPORTING"|"REPROVISIONING"|"ROLLING_BACK"|"SUCCEEDED"|"FAILED"|"CANCELLING"|"CANCELLED"|"DELETED"}>
     */
    public function cancelImportTask(array $args): \AWS\Result { }

    /**
     * @param array{taskIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{graphId?:string, taskId:string, source:string, format?:"CSV"|"OPEN_CYPHER"|"PARQUET"|"NTRIPLES", parquetType?:"COLUMNAR", roleArn:string, status:"INITIALIZING"|"EXPORTING"|"ANALYZING_DATA"|"IMPORTING"|"REPROVISIONING"|"ROLLING_BACK"|"SUCCEEDED"|"FAILED"|"CANCELLING"|"CANCELLED"|"DELETED"}>
     */
    public function cancelImportTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{graphIdentifier:string, queryId:string} $args
     * @return \AWS\Result<void>
     */
    public function cancelQuery(array $args): \AWS\Result { }

    /**
     * @param array{graphIdentifier:string, queryId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function cancelQueryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{graphName:string, tags?:array<string, string>, publicConnectivity?:bool, kmsKeyIdentifier?:string, vectorSearchConfiguration?:array{dimension:int}, replicaCount?:int, deletionProtection?:bool, provisionedMemory:int} $args
     * @return \AWS\Result<array{id:string, name:string, arn:string, status?:"CREATING"|"AVAILABLE"|"DELETING"|"RESETTING"|"UPDATING"|"SNAPSHOTTING"|"FAILED"|"IMPORTING", statusReason?:string, createTime?:int|string|\DateTimeInterface, provisionedMemory?:int, endpoint?:string, publicConnectivity?:bool, vectorSearchConfiguration?:array{dimension:int}, replicaCount?:int, kmsKeyIdentifier?:string, sourceSnapshotId?:string, deletionProtection?:bool, buildNumber?:string}>
     */
    public function createGraph(array $args): \AWS\Result { }

    /**
     * @param array{graphName:string, tags?:array<string, string>, publicConnectivity?:bool, kmsKeyIdentifier?:string, vectorSearchConfiguration?:array{dimension:int}, replicaCount?:int, deletionProtection?:bool, provisionedMemory:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, name:string, arn:string, status?:"CREATING"|"AVAILABLE"|"DELETING"|"RESETTING"|"UPDATING"|"SNAPSHOTTING"|"FAILED"|"IMPORTING", statusReason?:string, createTime?:int|string|\DateTimeInterface, provisionedMemory?:int, endpoint?:string, publicConnectivity?:bool, vectorSearchConfiguration?:array{dimension:int}, replicaCount?:int, kmsKeyIdentifier?:string, sourceSnapshotId?:string, deletionProtection?:bool, buildNumber?:string}>
     */
    public function createGraphAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{graphIdentifier:string, snapshotName:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{id:string, name:string, arn:string, sourceGraphId?:string, snapshotCreateTime?:int|string|\DateTimeInterface, status?:"CREATING"|"AVAILABLE"|"DELETING"|"FAILED", kmsKeyIdentifier?:string}>
     */
    public function createGraphSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{graphIdentifier:string, snapshotName:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, name:string, arn:string, sourceGraphId?:string, snapshotCreateTime?:int|string|\DateTimeInterface, status?:"CREATING"|"AVAILABLE"|"DELETING"|"FAILED", kmsKeyIdentifier?:string}>
     */
    public function createGraphSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{graphName:string, tags?:array<string, string>, publicConnectivity?:bool, kmsKeyIdentifier?:string, vectorSearchConfiguration?:array{dimension:int}, replicaCount?:int, deletionProtection?:bool, importOptions?:array{neptune?:array{s3ExportPath:string, s3ExportKmsKeyId:string, preserveDefaultVertexLabels?:bool, preserveEdgeIds?:bool}}, maxProvisionedMemory?:int, minProvisionedMemory?:int, failOnError?:bool, source:string, format?:"CSV"|"OPEN_CYPHER"|"PARQUET"|"NTRIPLES", parquetType?:"COLUMNAR", blankNodeHandling?:"convertToIri", roleArn:string} $args
     * @return \AWS\Result<array{graphId?:string, taskId:string, source:string, format?:"CSV"|"OPEN_CYPHER"|"PARQUET"|"NTRIPLES", parquetType?:"COLUMNAR", roleArn:string, status:"INITIALIZING"|"EXPORTING"|"ANALYZING_DATA"|"IMPORTING"|"REPROVISIONING"|"ROLLING_BACK"|"SUCCEEDED"|"FAILED"|"CANCELLING"|"CANCELLED"|"DELETED", importOptions?:array{neptune?:array{s3ExportPath:string, s3ExportKmsKeyId:string, preserveDefaultVertexLabels?:bool, preserveEdgeIds?:bool}}}>
     */
    public function createGraphUsingImportTask(array $args): \AWS\Result { }

    /**
     * @param array{graphName:string, tags?:array<string, string>, publicConnectivity?:bool, kmsKeyIdentifier?:string, vectorSearchConfiguration?:array{dimension:int}, replicaCount?:int, deletionProtection?:bool, importOptions?:array{neptune?:array{s3ExportPath:string, s3ExportKmsKeyId:string, preserveDefaultVertexLabels?:bool, preserveEdgeIds?:bool}}, maxProvisionedMemory?:int, minProvisionedMemory?:int, failOnError?:bool, source:string, format?:"CSV"|"OPEN_CYPHER"|"PARQUET"|"NTRIPLES", parquetType?:"COLUMNAR", blankNodeHandling?:"convertToIri", roleArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{graphId?:string, taskId:string, source:string, format?:"CSV"|"OPEN_CYPHER"|"PARQUET"|"NTRIPLES", parquetType?:"COLUMNAR", roleArn:string, status:"INITIALIZING"|"EXPORTING"|"ANALYZING_DATA"|"IMPORTING"|"REPROVISIONING"|"ROLLING_BACK"|"SUCCEEDED"|"FAILED"|"CANCELLING"|"CANCELLED"|"DELETED", importOptions?:array{neptune?:array{s3ExportPath:string, s3ExportKmsKeyId:string, preserveDefaultVertexLabels?:bool, preserveEdgeIds?:bool}}}>
     */
    public function createGraphUsingImportTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{graphIdentifier:string, vpcId?:string, subnetIds?:array<string>, vpcSecurityGroupIds?:array<string>} $args
     * @return \AWS\Result<array{vpcId:string, subnetIds:array<string>, status:"CREATING"|"AVAILABLE"|"DELETING"|"FAILED", vpcEndpointId?:string}>
     */
    public function createPrivateGraphEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{graphIdentifier:string, vpcId?:string, subnetIds?:array<string>, vpcSecurityGroupIds?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{vpcId:string, subnetIds:array<string>, status:"CREATING"|"AVAILABLE"|"DELETING"|"FAILED", vpcEndpointId?:string}>
     */
    public function createPrivateGraphEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{graphIdentifier:string, skipSnapshot:bool} $args
     * @return \AWS\Result<array{id:string, name:string, arn:string, status?:"CREATING"|"AVAILABLE"|"DELETING"|"RESETTING"|"UPDATING"|"SNAPSHOTTING"|"FAILED"|"IMPORTING", statusReason?:string, createTime?:int|string|\DateTimeInterface, provisionedMemory?:int, endpoint?:string, publicConnectivity?:bool, vectorSearchConfiguration?:array{dimension:int}, replicaCount?:int, kmsKeyIdentifier?:string, sourceSnapshotId?:string, deletionProtection?:bool, buildNumber?:string}>
     */
    public function deleteGraph(array $args): \AWS\Result { }

    /**
     * @param array{graphIdentifier:string, skipSnapshot:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, name:string, arn:string, status?:"CREATING"|"AVAILABLE"|"DELETING"|"RESETTING"|"UPDATING"|"SNAPSHOTTING"|"FAILED"|"IMPORTING", statusReason?:string, createTime?:int|string|\DateTimeInterface, provisionedMemory?:int, endpoint?:string, publicConnectivity?:bool, vectorSearchConfiguration?:array{dimension:int}, replicaCount?:int, kmsKeyIdentifier?:string, sourceSnapshotId?:string, deletionProtection?:bool, buildNumber?:string}>
     */
    public function deleteGraphAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{snapshotIdentifier:string} $args
     * @return \AWS\Result<array{id:string, name:string, arn:string, sourceGraphId?:string, snapshotCreateTime?:int|string|\DateTimeInterface, status?:"CREATING"|"AVAILABLE"|"DELETING"|"FAILED", kmsKeyIdentifier?:string}>
     */
    public function deleteGraphSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{snapshotIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, name:string, arn:string, sourceGraphId?:string, snapshotCreateTime?:int|string|\DateTimeInterface, status?:"CREATING"|"AVAILABLE"|"DELETING"|"FAILED", kmsKeyIdentifier?:string}>
     */
    public function deleteGraphSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{graphIdentifier:string, vpcId:string} $args
     * @return \AWS\Result<array{vpcId:string, subnetIds:array<string>, status:"CREATING"|"AVAILABLE"|"DELETING"|"FAILED", vpcEndpointId?:string}>
     */
    public function deletePrivateGraphEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{graphIdentifier:string, vpcId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{vpcId:string, subnetIds:array<string>, status:"CREATING"|"AVAILABLE"|"DELETING"|"FAILED", vpcEndpointId?:string}>
     */
    public function deletePrivateGraphEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{graphIdentifier:string, queryString:string, language:"OPEN_CYPHER", parameters?:array<string, array{}>, planCache?:"ENABLED"|"DISABLED"|"AUTO", explainMode?:"STATIC"|"DETAILS", queryTimeoutMilliseconds?:int} $args
     * @return \AWS\Result<array{payload:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function executeQuery(array $args): \AWS\Result { }

    /**
     * @param array{graphIdentifier:string, queryString:string, language:"OPEN_CYPHER", parameters?:array<string, array{}>, planCache?:"ENABLED"|"DISABLED"|"AUTO", explainMode?:"STATIC"|"DETAILS", queryTimeoutMilliseconds?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{payload:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function executeQueryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{taskIdentifier:string} $args
     * @return \AWS\Result<array{graphId:string, roleArn:string, taskId:string, status:"INITIALIZING"|"EXPORTING"|"SUCCEEDED"|"FAILED"|"CANCELLING"|"CANCELLED"|"DELETED", format:"PARQUET"|"CSV", destination:string, kmsKeyIdentifier:string, parquetType?:"COLUMNAR", statusReason?:string, exportTaskDetails?:array{startTime:int|string|\DateTimeInterface, timeElapsedSeconds:int, progressPercentage:int, numVerticesWritten?:int, numEdgesWritten?:int}, exportFilter?:array{vertexFilter?:array<string, array{properties?:array<string, array{outputType?:string, sourcePropertyName?:string, multiValueHandling?:"TO_LIST"|"PICK_FIRST"}>}>, edgeFilter?:array<string, array{properties?:array<string, array{outputType?:string, sourcePropertyName?:string, multiValueHandling?:"TO_LIST"|"PICK_FIRST"}>}>}}>
     */
    public function getExportTask(array $args): \AWS\Result { }

    /**
     * @param array{taskIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{graphId:string, roleArn:string, taskId:string, status:"INITIALIZING"|"EXPORTING"|"SUCCEEDED"|"FAILED"|"CANCELLING"|"CANCELLED"|"DELETED", format:"PARQUET"|"CSV", destination:string, kmsKeyIdentifier:string, parquetType?:"COLUMNAR", statusReason?:string, exportTaskDetails?:array{startTime:int|string|\DateTimeInterface, timeElapsedSeconds:int, progressPercentage:int, numVerticesWritten?:int, numEdgesWritten?:int}, exportFilter?:array{vertexFilter?:array<string, array{properties?:array<string, array{outputType?:string, sourcePropertyName?:string, multiValueHandling?:"TO_LIST"|"PICK_FIRST"}>}>, edgeFilter?:array<string, array{properties?:array<string, array{outputType?:string, sourcePropertyName?:string, multiValueHandling?:"TO_LIST"|"PICK_FIRST"}>}>}}>
     */
    public function getExportTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{graphIdentifier:string} $args
     * @return \AWS\Result<array{id:string, name:string, arn:string, status?:"CREATING"|"AVAILABLE"|"DELETING"|"RESETTING"|"UPDATING"|"SNAPSHOTTING"|"FAILED"|"IMPORTING", statusReason?:string, createTime?:int|string|\DateTimeInterface, provisionedMemory?:int, endpoint?:string, publicConnectivity?:bool, vectorSearchConfiguration?:array{dimension:int}, replicaCount?:int, kmsKeyIdentifier?:string, sourceSnapshotId?:string, deletionProtection?:bool, buildNumber?:string}>
     */
    public function getGraph(array $args): \AWS\Result { }

    /**
     * @param array{graphIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, name:string, arn:string, status?:"CREATING"|"AVAILABLE"|"DELETING"|"RESETTING"|"UPDATING"|"SNAPSHOTTING"|"FAILED"|"IMPORTING", statusReason?:string, createTime?:int|string|\DateTimeInterface, provisionedMemory?:int, endpoint?:string, publicConnectivity?:bool, vectorSearchConfiguration?:array{dimension:int}, replicaCount?:int, kmsKeyIdentifier?:string, sourceSnapshotId?:string, deletionProtection?:bool, buildNumber?:string}>
     */
    public function getGraphAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{snapshotIdentifier:string} $args
     * @return \AWS\Result<array{id:string, name:string, arn:string, sourceGraphId?:string, snapshotCreateTime?:int|string|\DateTimeInterface, status?:"CREATING"|"AVAILABLE"|"DELETING"|"FAILED", kmsKeyIdentifier?:string}>
     */
    public function getGraphSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{snapshotIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, name:string, arn:string, sourceGraphId?:string, snapshotCreateTime?:int|string|\DateTimeInterface, status?:"CREATING"|"AVAILABLE"|"DELETING"|"FAILED", kmsKeyIdentifier?:string}>
     */
    public function getGraphSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{graphIdentifier:string, mode?:"BASIC"|"DETAILED"} $args
     * @return \AWS\Result<array{version?:string, lastStatisticsComputationTime?:int|string|\DateTimeInterface, graphSummary?:array{numNodes?:int, numEdges?:int, numNodeLabels?:int, numEdgeLabels?:int, nodeLabels?:array<string>, edgeLabels?:array<string>, numNodeProperties?:int, numEdgeProperties?:int, nodeProperties?:array<array<string, int>>, edgeProperties?:array<array<string, int>>, totalNodePropertyValues?:int, totalEdgePropertyValues?:int, nodeStructures?:array<array{count?:int, nodeProperties?:array<string>, distinctOutgoingEdgeLabels?:array<string>}>, edgeStructures?:array<array{count?:int, edgeProperties?:array<string>}>}}>
     */
    public function getGraphSummary(array $args): \AWS\Result { }

    /**
     * @param array{graphIdentifier:string, mode?:"BASIC"|"DETAILED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{version?:string, lastStatisticsComputationTime?:int|string|\DateTimeInterface, graphSummary?:array{numNodes?:int, numEdges?:int, numNodeLabels?:int, numEdgeLabels?:int, nodeLabels?:array<string>, edgeLabels?:array<string>, numNodeProperties?:int, numEdgeProperties?:int, nodeProperties?:array<array<string, int>>, edgeProperties?:array<array<string, int>>, totalNodePropertyValues?:int, totalEdgePropertyValues?:int, nodeStructures?:array<array{count?:int, nodeProperties?:array<string>, distinctOutgoingEdgeLabels?:array<string>}>, edgeStructures?:array<array{count?:int, edgeProperties?:array<string>}>}}>
     */
    public function getGraphSummaryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{taskIdentifier:string} $args
     * @return \AWS\Result<array{graphId?:string, taskId:string, source:string, format?:"CSV"|"OPEN_CYPHER"|"PARQUET"|"NTRIPLES", parquetType?:"COLUMNAR", roleArn:string, status:"INITIALIZING"|"EXPORTING"|"ANALYZING_DATA"|"IMPORTING"|"REPROVISIONING"|"ROLLING_BACK"|"SUCCEEDED"|"FAILED"|"CANCELLING"|"CANCELLED"|"DELETED", importOptions?:array{neptune?:array{s3ExportPath:string, s3ExportKmsKeyId:string, preserveDefaultVertexLabels?:bool, preserveEdgeIds?:bool}}, importTaskDetails?:array{status:string, startTime:int|string|\DateTimeInterface, timeElapsedSeconds:int, progressPercentage:int, errorCount:int, errorDetails?:string, statementCount:int, dictionaryEntryCount:int}, attemptNumber?:int, statusReason?:string}>
     */
    public function getImportTask(array $args): \AWS\Result { }

    /**
     * @param array{taskIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{graphId?:string, taskId:string, source:string, format?:"CSV"|"OPEN_CYPHER"|"PARQUET"|"NTRIPLES", parquetType?:"COLUMNAR", roleArn:string, status:"INITIALIZING"|"EXPORTING"|"ANALYZING_DATA"|"IMPORTING"|"REPROVISIONING"|"ROLLING_BACK"|"SUCCEEDED"|"FAILED"|"CANCELLING"|"CANCELLED"|"DELETED", importOptions?:array{neptune?:array{s3ExportPath:string, s3ExportKmsKeyId:string, preserveDefaultVertexLabels?:bool, preserveEdgeIds?:bool}}, importTaskDetails?:array{status:string, startTime:int|string|\DateTimeInterface, timeElapsedSeconds:int, progressPercentage:int, errorCount:int, errorDetails?:string, statementCount:int, dictionaryEntryCount:int}, attemptNumber?:int, statusReason?:string}>
     */
    public function getImportTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{graphIdentifier:string, vpcId:string} $args
     * @return \AWS\Result<array{vpcId:string, subnetIds:array<string>, status:"CREATING"|"AVAILABLE"|"DELETING"|"FAILED", vpcEndpointId?:string}>
     */
    public function getPrivateGraphEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{graphIdentifier:string, vpcId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{vpcId:string, subnetIds:array<string>, status:"CREATING"|"AVAILABLE"|"DELETING"|"FAILED", vpcEndpointId?:string}>
     */
    public function getPrivateGraphEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{graphIdentifier:string, queryId:string} $args
     * @return \AWS\Result<array{id?:string, queryString?:string, waited?:int, elapsed?:int, state?:"RUNNING"|"WAITING"|"CANCELLING"}>
     */
    public function getQuery(array $args): \AWS\Result { }

    /**
     * @param array{graphIdentifier:string, queryId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, queryString?:string, waited?:int, elapsed?:int, state?:"RUNNING"|"WAITING"|"CANCELLING"}>
     */
    public function getQueryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{tasks:array<array{graphId:string, roleArn:string, taskId:string, status:"INITIALIZING"|"EXPORTING"|"SUCCEEDED"|"FAILED"|"CANCELLING"|"CANCELLED"|"DELETED", format:"PARQUET"|"CSV", destination:string, kmsKeyIdentifier:string, parquetType?:"COLUMNAR", statusReason?:string}>, nextToken?:string}>
     */
    public function listExportTasks(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{tasks:array<array{graphId:string, roleArn:string, taskId:string, status:"INITIALIZING"|"EXPORTING"|"SUCCEEDED"|"FAILED"|"CANCELLING"|"CANCELLED"|"DELETED", format:"PARQUET"|"CSV", destination:string, kmsKeyIdentifier:string, parquetType?:"COLUMNAR", statusReason?:string}>, nextToken?:string}>
     */
    public function listExportTasksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{graphIdentifier?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{graphSnapshots:array<array{id:string, name:string, arn:string, sourceGraphId?:string, snapshotCreateTime?:int|string|\DateTimeInterface, status?:"CREATING"|"AVAILABLE"|"DELETING"|"FAILED", kmsKeyIdentifier?:string}>, nextToken?:string}>
     */
    public function listGraphSnapshots(array $args = []): \AWS\Result { }

    /**
     * @param array{graphIdentifier?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{graphSnapshots:array<array{id:string, name:string, arn:string, sourceGraphId?:string, snapshotCreateTime?:int|string|\DateTimeInterface, status?:"CREATING"|"AVAILABLE"|"DELETING"|"FAILED", kmsKeyIdentifier?:string}>, nextToken?:string}>
     */
    public function listGraphSnapshotsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{graphs:array<array{id:string, name:string, arn:string, status?:"CREATING"|"AVAILABLE"|"DELETING"|"RESETTING"|"UPDATING"|"SNAPSHOTTING"|"FAILED"|"IMPORTING", provisionedMemory?:int, publicConnectivity?:bool, endpoint?:string, replicaCount?:int, kmsKeyIdentifier?:string, deletionProtection?:bool}>, nextToken?:string}>
     */
    public function listGraphs(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{graphs:array<array{id:string, name:string, arn:string, status?:"CREATING"|"AVAILABLE"|"DELETING"|"RESETTING"|"UPDATING"|"SNAPSHOTTING"|"FAILED"|"IMPORTING", provisionedMemory?:int, publicConnectivity?:bool, endpoint?:string, replicaCount?:int, kmsKeyIdentifier?:string, deletionProtection?:bool}>, nextToken?:string}>
     */
    public function listGraphsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{tasks:array<array{graphId?:string, taskId:string, source:string, format?:"CSV"|"OPEN_CYPHER"|"PARQUET"|"NTRIPLES", parquetType?:"COLUMNAR", roleArn:string, status:"INITIALIZING"|"EXPORTING"|"ANALYZING_DATA"|"IMPORTING"|"REPROVISIONING"|"ROLLING_BACK"|"SUCCEEDED"|"FAILED"|"CANCELLING"|"CANCELLED"|"DELETED"}>, nextToken?:string}>
     */
    public function listImportTasks(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{tasks:array<array{graphId?:string, taskId:string, source:string, format?:"CSV"|"OPEN_CYPHER"|"PARQUET"|"NTRIPLES", parquetType?:"COLUMNAR", roleArn:string, status:"INITIALIZING"|"EXPORTING"|"ANALYZING_DATA"|"IMPORTING"|"REPROVISIONING"|"ROLLING_BACK"|"SUCCEEDED"|"FAILED"|"CANCELLING"|"CANCELLED"|"DELETED"}>, nextToken?:string}>
     */
    public function listImportTasksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{graphIdentifier:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{privateGraphEndpoints:array<array{vpcId:string, subnetIds:array<string>, status:"CREATING"|"AVAILABLE"|"DELETING"|"FAILED", vpcEndpointId?:string}>, nextToken?:string}>
     */
    public function listPrivateGraphEndpoints(array $args): \AWS\Result { }

    /**
     * @param array{graphIdentifier:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{privateGraphEndpoints:array<array{vpcId:string, subnetIds:array<string>, status:"CREATING"|"AVAILABLE"|"DELETING"|"FAILED", vpcEndpointId?:string}>, nextToken?:string}>
     */
    public function listPrivateGraphEndpointsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{graphIdentifier:string, maxResults:int, state?:"ALL"|"RUNNING"|"WAITING"|"CANCELLING"} $args
     * @return \AWS\Result<array{queries:array<array{id?:string, queryString?:string, waited?:int, elapsed?:int, state?:"RUNNING"|"WAITING"|"CANCELLING"}>}>
     */
    public function listQueries(array $args): \AWS\Result { }

    /**
     * @param array{graphIdentifier:string, maxResults:int, state?:"ALL"|"RUNNING"|"WAITING"|"CANCELLING"} $args
     * @return \GuzzleHttp\Promise\Promise<array{queries:array<array{id?:string, queryString?:string, waited?:int, elapsed?:int, state?:"RUNNING"|"WAITING"|"CANCELLING"}>}>
     */
    public function listQueriesAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{graphIdentifier:string, skipSnapshot:bool} $args
     * @return \AWS\Result<array{id:string, name:string, arn:string, status?:"CREATING"|"AVAILABLE"|"DELETING"|"RESETTING"|"UPDATING"|"SNAPSHOTTING"|"FAILED"|"IMPORTING", statusReason?:string, createTime?:int|string|\DateTimeInterface, provisionedMemory?:int, endpoint?:string, publicConnectivity?:bool, vectorSearchConfiguration?:array{dimension:int}, replicaCount?:int, kmsKeyIdentifier?:string, sourceSnapshotId?:string, deletionProtection?:bool, buildNumber?:string}>
     */
    public function resetGraph(array $args): \AWS\Result { }

    /**
     * @param array{graphIdentifier:string, skipSnapshot:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, name:string, arn:string, status?:"CREATING"|"AVAILABLE"|"DELETING"|"RESETTING"|"UPDATING"|"SNAPSHOTTING"|"FAILED"|"IMPORTING", statusReason?:string, createTime?:int|string|\DateTimeInterface, provisionedMemory?:int, endpoint?:string, publicConnectivity?:bool, vectorSearchConfiguration?:array{dimension:int}, replicaCount?:int, kmsKeyIdentifier?:string, sourceSnapshotId?:string, deletionProtection?:bool, buildNumber?:string}>
     */
    public function resetGraphAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{snapshotIdentifier:string, graphName:string, provisionedMemory?:int, deletionProtection?:bool, tags?:array<string, string>, replicaCount?:int, publicConnectivity?:bool} $args
     * @return \AWS\Result<array{id:string, name:string, arn:string, status?:"CREATING"|"AVAILABLE"|"DELETING"|"RESETTING"|"UPDATING"|"SNAPSHOTTING"|"FAILED"|"IMPORTING", statusReason?:string, createTime?:int|string|\DateTimeInterface, provisionedMemory?:int, endpoint?:string, publicConnectivity?:bool, vectorSearchConfiguration?:array{dimension:int}, replicaCount?:int, kmsKeyIdentifier?:string, sourceSnapshotId?:string, deletionProtection?:bool, buildNumber?:string}>
     */
    public function restoreGraphFromSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{snapshotIdentifier:string, graphName:string, provisionedMemory?:int, deletionProtection?:bool, tags?:array<string, string>, replicaCount?:int, publicConnectivity?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, name:string, arn:string, status?:"CREATING"|"AVAILABLE"|"DELETING"|"RESETTING"|"UPDATING"|"SNAPSHOTTING"|"FAILED"|"IMPORTING", statusReason?:string, createTime?:int|string|\DateTimeInterface, provisionedMemory?:int, endpoint?:string, publicConnectivity?:bool, vectorSearchConfiguration?:array{dimension:int}, replicaCount?:int, kmsKeyIdentifier?:string, sourceSnapshotId?:string, deletionProtection?:bool, buildNumber?:string}>
     */
    public function restoreGraphFromSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{graphIdentifier:string, roleArn:string, format:"PARQUET"|"CSV", destination:string, kmsKeyIdentifier:string, parquetType?:"COLUMNAR", exportFilter?:array{vertexFilter?:array<string, array{properties?:array<string, array{outputType?:string, sourcePropertyName?:string, multiValueHandling?:"TO_LIST"|"PICK_FIRST"}>}>, edgeFilter?:array<string, array{properties?:array<string, array{outputType?:string, sourcePropertyName?:string, multiValueHandling?:"TO_LIST"|"PICK_FIRST"}>}>}, tags?:array<string, string>} $args
     * @return \AWS\Result<array{graphId:string, roleArn:string, taskId:string, status:"INITIALIZING"|"EXPORTING"|"SUCCEEDED"|"FAILED"|"CANCELLING"|"CANCELLED"|"DELETED", format:"PARQUET"|"CSV", destination:string, kmsKeyIdentifier:string, parquetType?:"COLUMNAR", statusReason?:string, exportFilter?:array{vertexFilter?:array<string, array{properties?:array<string, array{outputType?:string, sourcePropertyName?:string, multiValueHandling?:"TO_LIST"|"PICK_FIRST"}>}>, edgeFilter?:array<string, array{properties?:array<string, array{outputType?:string, sourcePropertyName?:string, multiValueHandling?:"TO_LIST"|"PICK_FIRST"}>}>}}>
     */
    public function startExportTask(array $args): \AWS\Result { }

    /**
     * @param array{graphIdentifier:string, roleArn:string, format:"PARQUET"|"CSV", destination:string, kmsKeyIdentifier:string, parquetType?:"COLUMNAR", exportFilter?:array{vertexFilter?:array<string, array{properties?:array<string, array{outputType?:string, sourcePropertyName?:string, multiValueHandling?:"TO_LIST"|"PICK_FIRST"}>}>, edgeFilter?:array<string, array{properties?:array<string, array{outputType?:string, sourcePropertyName?:string, multiValueHandling?:"TO_LIST"|"PICK_FIRST"}>}>}, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{graphId:string, roleArn:string, taskId:string, status:"INITIALIZING"|"EXPORTING"|"SUCCEEDED"|"FAILED"|"CANCELLING"|"CANCELLED"|"DELETED", format:"PARQUET"|"CSV", destination:string, kmsKeyIdentifier:string, parquetType?:"COLUMNAR", statusReason?:string, exportFilter?:array{vertexFilter?:array<string, array{properties?:array<string, array{outputType?:string, sourcePropertyName?:string, multiValueHandling?:"TO_LIST"|"PICK_FIRST"}>}>, edgeFilter?:array<string, array{properties?:array<string, array{outputType?:string, sourcePropertyName?:string, multiValueHandling?:"TO_LIST"|"PICK_FIRST"}>}>}}>
     */
    public function startExportTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{importOptions?:array{neptune?:array{s3ExportPath:string, s3ExportKmsKeyId:string, preserveDefaultVertexLabels?:bool, preserveEdgeIds?:bool}}, failOnError?:bool, source:string, format?:"CSV"|"OPEN_CYPHER"|"PARQUET"|"NTRIPLES", parquetType?:"COLUMNAR", blankNodeHandling?:"convertToIri", graphIdentifier:string, roleArn:string} $args
     * @return \AWS\Result<array{graphId?:string, taskId:string, source:string, format?:"CSV"|"OPEN_CYPHER"|"PARQUET"|"NTRIPLES", parquetType?:"COLUMNAR", roleArn:string, status:"INITIALIZING"|"EXPORTING"|"ANALYZING_DATA"|"IMPORTING"|"REPROVISIONING"|"ROLLING_BACK"|"SUCCEEDED"|"FAILED"|"CANCELLING"|"CANCELLED"|"DELETED", importOptions?:array{neptune?:array{s3ExportPath:string, s3ExportKmsKeyId:string, preserveDefaultVertexLabels?:bool, preserveEdgeIds?:bool}}}>
     */
    public function startImportTask(array $args): \AWS\Result { }

    /**
     * @param array{importOptions?:array{neptune?:array{s3ExportPath:string, s3ExportKmsKeyId:string, preserveDefaultVertexLabels?:bool, preserveEdgeIds?:bool}}, failOnError?:bool, source:string, format?:"CSV"|"OPEN_CYPHER"|"PARQUET"|"NTRIPLES", parquetType?:"COLUMNAR", blankNodeHandling?:"convertToIri", graphIdentifier:string, roleArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{graphId?:string, taskId:string, source:string, format?:"CSV"|"OPEN_CYPHER"|"PARQUET"|"NTRIPLES", parquetType?:"COLUMNAR", roleArn:string, status:"INITIALIZING"|"EXPORTING"|"ANALYZING_DATA"|"IMPORTING"|"REPROVISIONING"|"ROLLING_BACK"|"SUCCEEDED"|"FAILED"|"CANCELLING"|"CANCELLED"|"DELETED", importOptions?:array{neptune?:array{s3ExportPath:string, s3ExportKmsKeyId:string, preserveDefaultVertexLabels?:bool, preserveEdgeIds?:bool}}}>
     */
    public function startImportTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{graphIdentifier:string, publicConnectivity?:bool, provisionedMemory?:int, deletionProtection?:bool} $args
     * @return \AWS\Result<array{id:string, name:string, arn:string, status?:"CREATING"|"AVAILABLE"|"DELETING"|"RESETTING"|"UPDATING"|"SNAPSHOTTING"|"FAILED"|"IMPORTING", statusReason?:string, createTime?:int|string|\DateTimeInterface, provisionedMemory?:int, endpoint?:string, publicConnectivity?:bool, vectorSearchConfiguration?:array{dimension:int}, replicaCount?:int, kmsKeyIdentifier?:string, sourceSnapshotId?:string, deletionProtection?:bool, buildNumber?:string}>
     */
    public function updateGraph(array $args): \AWS\Result { }

    /**
     * @param array{graphIdentifier:string, publicConnectivity?:bool, provisionedMemory?:int, deletionProtection?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, name:string, arn:string, status?:"CREATING"|"AVAILABLE"|"DELETING"|"RESETTING"|"UPDATING"|"SNAPSHOTTING"|"FAILED"|"IMPORTING", statusReason?:string, createTime?:int|string|\DateTimeInterface, provisionedMemory?:int, endpoint?:string, publicConnectivity?:bool, vectorSearchConfiguration?:array{dimension:int}, replicaCount?:int, kmsKeyIdentifier?:string, sourceSnapshotId?:string, deletionProtection?:bool, buildNumber?:string}>
     */
    public function updateGraphAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
