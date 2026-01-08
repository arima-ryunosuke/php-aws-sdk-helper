<?php
namespace AWS\DataPipeline;

class DataPipelineClient
{
    /**
     * @param array{pipelineId:string, parameterValues?:array<array{id:string, stringValue:string}>, startTimestamp?:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{}>
     */
    public function activatePipeline(array $args): \AWS\Result { }

    /**
     * @param array{pipelineId:string, parameterValues?:array<array{id:string, stringValue:string}>, startTimestamp?:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function activatePipelineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pipelineId:string, tags:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function addTags(array $args): \AWS\Result { }

    /**
     * @param array{pipelineId:string, tags:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function addTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, uniqueId:string, description?:string, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{pipelineId:string}>
     */
    public function createPipeline(array $args): \AWS\Result { }

    /**
     * @param array{name:string, uniqueId:string, description?:string, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{pipelineId:string}>
     */
    public function createPipelineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pipelineId:string, cancelActive?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function deactivatePipeline(array $args): \AWS\Result { }

    /**
     * @param array{pipelineId:string, cancelActive?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deactivatePipelineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pipelineId:string} $args
     * @return \AWS\Result<void>
     */
    public function deletePipeline(array $args): \AWS\Result { }

    /**
     * @param array{pipelineId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deletePipelineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pipelineId:string, objectIds:array<string>, evaluateExpressions?:bool, marker?:string} $args
     * @return \AWS\Result<array{pipelineObjects:array<array{id:string, name:string, fields:array<array{key:string, stringValue?:string, refValue?:string}>}>, marker?:string, hasMoreResults?:bool}>
     */
    public function describeObjects(array $args): \AWS\Result { }

    /**
     * @param array{pipelineId:string, objectIds:array<string>, evaluateExpressions?:bool, marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{pipelineObjects:array<array{id:string, name:string, fields:array<array{key:string, stringValue?:string, refValue?:string}>}>, marker?:string, hasMoreResults?:bool}>
     */
    public function describeObjectsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pipelineIds:array<string>} $args
     * @return \AWS\Result<array{pipelineDescriptionList:array<array{pipelineId:string, name:string, fields:array<array{key:string, stringValue?:string, refValue?:string}>, description?:string, tags?:array<array{key:string, value:string}>}>}>
     */
    public function describePipelines(array $args): \AWS\Result { }

    /**
     * @param array{pipelineIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{pipelineDescriptionList:array<array{pipelineId:string, name:string, fields:array<array{key:string, stringValue?:string, refValue?:string}>, description?:string, tags?:array<array{key:string, value:string}>}>}>
     */
    public function describePipelinesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pipelineId:string, objectId:string, expression:string} $args
     * @return \AWS\Result<array{evaluatedExpression:string}>
     */
    public function evaluateExpression(array $args): \AWS\Result { }

    /**
     * @param array{pipelineId:string, objectId:string, expression:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{evaluatedExpression:string}>
     */
    public function evaluateExpressionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pipelineId:string, version?:string} $args
     * @return \AWS\Result<array{pipelineObjects?:array<array{id:string, name:string, fields:array<array{key:string, stringValue?:string, refValue?:string}>}>, parameterObjects?:array<array{id:string, attributes:array<array{key:string, stringValue:string}>}>, parameterValues?:array<array{id:string, stringValue:string}>}>
     */
    public function getPipelineDefinition(array $args): \AWS\Result { }

    /**
     * @param array{pipelineId:string, version?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{pipelineObjects?:array<array{id:string, name:string, fields:array<array{key:string, stringValue?:string, refValue?:string}>}>, parameterObjects?:array<array{id:string, attributes:array<array{key:string, stringValue:string}>}>, parameterValues?:array<array{id:string, stringValue:string}>}>
     */
    public function getPipelineDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{marker?:string} $args
     * @return \AWS\Result<array{pipelineIdList:array<array{id?:string, name?:string}>, marker?:string, hasMoreResults?:bool}>
     */
    public function listPipelines(array $args = []): \AWS\Result { }

    /**
     * @param array{marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{pipelineIdList:array<array{id?:string, name?:string}>, marker?:string, hasMoreResults?:bool}>
     */
    public function listPipelinesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{workerGroup:string, hostname?:string, instanceIdentity?:array{document?:string, signature?:string}} $args
     * @return \AWS\Result<array{taskObject?:array{taskId?:string, pipelineId?:string, attemptId?:string, objects?:array<string, array{id:string, name:string, fields:array<array{key:string, stringValue?:string, refValue?:string}>}>}}>
     */
    public function pollForTask(array $args): \AWS\Result { }

    /**
     * @param array{workerGroup:string, hostname?:string, instanceIdentity?:array{document?:string, signature?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{taskObject?:array{taskId?:string, pipelineId?:string, attemptId?:string, objects?:array<string, array{id:string, name:string, fields:array<array{key:string, stringValue?:string, refValue?:string}>}>}}>
     */
    public function pollForTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pipelineId:string, pipelineObjects:array<array{id:string, name:string, fields:array<array{key:string, stringValue?:string, refValue?:string}>}>, parameterObjects?:array<array{id:string, attributes:array<array{key:string, stringValue:string}>}>, parameterValues?:array<array{id:string, stringValue:string}>} $args
     * @return \AWS\Result<array{validationErrors?:array<array{id?:string, errors?:array<string>}>, validationWarnings?:array<array{id?:string, warnings?:array<string>}>, errored:bool}>
     */
    public function putPipelineDefinition(array $args): \AWS\Result { }

    /**
     * @param array{pipelineId:string, pipelineObjects:array<array{id:string, name:string, fields:array<array{key:string, stringValue?:string, refValue?:string}>}>, parameterObjects?:array<array{id:string, attributes:array<array{key:string, stringValue:string}>}>, parameterValues?:array<array{id:string, stringValue:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{validationErrors?:array<array{id?:string, errors?:array<string>}>, validationWarnings?:array<array{id?:string, warnings?:array<string>}>, errored:bool}>
     */
    public function putPipelineDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pipelineId:string, query?:array{selectors?:array<array{fieldName?:string, operator?:array{type?:"EQ"|"REF_EQ"|"LE"|"GE"|"BETWEEN", values?:array<string>}}>}, sphere:string, marker?:string, limit?:int} $args
     * @return \AWS\Result<array{ids?:array<string>, marker?:string, hasMoreResults?:bool}>
     */
    public function queryObjects(array $args): \AWS\Result { }

    /**
     * @param array{pipelineId:string, query?:array{selectors?:array<array{fieldName?:string, operator?:array{type?:"EQ"|"REF_EQ"|"LE"|"GE"|"BETWEEN", values?:array<string>}}>}, sphere:string, marker?:string, limit?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ids?:array<string>, marker?:string, hasMoreResults?:bool}>
     */
    public function queryObjectsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pipelineId:string, tagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function removeTags(array $args): \AWS\Result { }

    /**
     * @param array{pipelineId:string, tagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function removeTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{taskId:string, fields?:array<array{key:string, stringValue?:string, refValue?:string}>} $args
     * @return \AWS\Result<array{canceled:bool}>
     */
    public function reportTaskProgress(array $args): \AWS\Result { }

    /**
     * @param array{taskId:string, fields?:array<array{key:string, stringValue?:string, refValue?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{canceled:bool}>
     */
    public function reportTaskProgressAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{taskrunnerId:string, workerGroup?:string, hostname?:string} $args
     * @return \AWS\Result<array{terminate:bool}>
     */
    public function reportTaskRunnerHeartbeat(array $args): \AWS\Result { }

    /**
     * @param array{taskrunnerId:string, workerGroup?:string, hostname?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{terminate:bool}>
     */
    public function reportTaskRunnerHeartbeatAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pipelineId:string, objectIds:array<string>, status:string} $args
     * @return \AWS\Result<void>
     */
    public function setStatus(array $args): \AWS\Result { }

    /**
     * @param array{pipelineId:string, objectIds:array<string>, status:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function setStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{taskId:string, taskStatus:"FINISHED"|"FAILED"|"FALSE", errorId?:string, errorMessage?:string, errorStackTrace?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function setTaskStatus(array $args): \AWS\Result { }

    /**
     * @param array{taskId:string, taskStatus:"FINISHED"|"FAILED"|"FALSE", errorId?:string, errorMessage?:string, errorStackTrace?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function setTaskStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pipelineId:string, pipelineObjects:array<array{id:string, name:string, fields:array<array{key:string, stringValue?:string, refValue?:string}>}>, parameterObjects?:array<array{id:string, attributes:array<array{key:string, stringValue:string}>}>, parameterValues?:array<array{id:string, stringValue:string}>} $args
     * @return \AWS\Result<array{validationErrors?:array<array{id?:string, errors?:array<string>}>, validationWarnings?:array<array{id?:string, warnings?:array<string>}>, errored:bool}>
     */
    public function validatePipelineDefinition(array $args): \AWS\Result { }

    /**
     * @param array{pipelineId:string, pipelineObjects:array<array{id:string, name:string, fields:array<array{key:string, stringValue?:string, refValue?:string}>}>, parameterObjects?:array<array{id:string, attributes:array<array{key:string, stringValue:string}>}>, parameterValues?:array<array{id:string, stringValue:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{validationErrors?:array<array{id?:string, errors?:array<string>}>, validationWarnings?:array<array{id?:string, warnings?:array<string>}>, errored:bool}>
     */
    public function validatePipelineDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
