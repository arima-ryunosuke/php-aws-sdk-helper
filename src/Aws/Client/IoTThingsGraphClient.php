<?php
namespace AWS\IoTThingsGraph;

class IoTThingsGraphClient
{
    /**
     * @param array{thingName:string, entityId:string, namespaceVersion?:int} $args
     * @return \AWS\Result<array{}>
     */
    public function associateEntityToThing(array $args): \AWS\Result { }

    /**
     * @param array{thingName:string, entityId:string, namespaceVersion?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateEntityToThingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{definition:array{language:"GRAPHQL", text:string}, compatibleNamespaceVersion?:int} $args
     * @return \AWS\Result<array{summary?:array{id?:string, arn?:string, revisionNumber?:int, createdAt?:int|string|\DateTimeInterface}}>
     */
    public function createFlowTemplate(array $args): \AWS\Result { }

    /**
     * @param array{definition:array{language:"GRAPHQL", text:string}, compatibleNamespaceVersion?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{summary?:array{id?:string, arn?:string, revisionNumber?:int, createdAt?:int|string|\DateTimeInterface}}>
     */
    public function createFlowTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{tags?:array<array{key:string, value:string}>, definition:array{language:"GRAPHQL", text:string}, target:"GREENGRASS"|"CLOUD", greengrassGroupName?:string, s3BucketName?:string, metricsConfiguration?:array{cloudMetricEnabled?:bool, metricRuleRoleArn?:string}, flowActionsRoleArn?:string} $args
     * @return \AWS\Result<array{summary?:array{id?:string, arn?:string, status?:"NOT_DEPLOYED"|"BOOTSTRAP"|"DEPLOY_IN_PROGRESS"|"DEPLOYED_IN_TARGET"|"UNDEPLOY_IN_PROGRESS"|"FAILED"|"PENDING_DELETE"|"DELETED_IN_TARGET", target?:"GREENGRASS"|"CLOUD", greengrassGroupName?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, greengrassGroupId?:string, greengrassGroupVersionId?:string}}>
     */
    public function createSystemInstance(array $args): \AWS\Result { }

    /**
     * @param array{tags?:array<array{key:string, value:string}>, definition:array{language:"GRAPHQL", text:string}, target:"GREENGRASS"|"CLOUD", greengrassGroupName?:string, s3BucketName?:string, metricsConfiguration?:array{cloudMetricEnabled?:bool, metricRuleRoleArn?:string}, flowActionsRoleArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{summary?:array{id?:string, arn?:string, status?:"NOT_DEPLOYED"|"BOOTSTRAP"|"DEPLOY_IN_PROGRESS"|"DEPLOYED_IN_TARGET"|"UNDEPLOY_IN_PROGRESS"|"FAILED"|"PENDING_DELETE"|"DELETED_IN_TARGET", target?:"GREENGRASS"|"CLOUD", greengrassGroupName?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, greengrassGroupId?:string, greengrassGroupVersionId?:string}}>
     */
    public function createSystemInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{definition:array{language:"GRAPHQL", text:string}, compatibleNamespaceVersion?:int} $args
     * @return \AWS\Result<array{summary?:array{id?:string, arn?:string, revisionNumber?:int, createdAt?:int|string|\DateTimeInterface}}>
     */
    public function createSystemTemplate(array $args): \AWS\Result { }

    /**
     * @param array{definition:array{language:"GRAPHQL", text:string}, compatibleNamespaceVersion?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{summary?:array{id?:string, arn?:string, revisionNumber?:int, createdAt?:int|string|\DateTimeInterface}}>
     */
    public function createSystemTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteFlowTemplate(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteFlowTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{namespaceArn?:string, namespaceName?:string}>
     */
    public function deleteNamespace(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{namespaceArn?:string, namespaceName?:string}>
     */
    public function deleteNamespaceAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSystemInstance(array $args = []): \AWS\Result { }

    /**
     * @param array{id?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteSystemInstanceAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSystemTemplate(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteSystemTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id?:string} $args
     * @return \AWS\Result<array{summary:array{id?:string, arn?:string, status?:"NOT_DEPLOYED"|"BOOTSTRAP"|"DEPLOY_IN_PROGRESS"|"DEPLOYED_IN_TARGET"|"UNDEPLOY_IN_PROGRESS"|"FAILED"|"PENDING_DELETE"|"DELETED_IN_TARGET", target?:"GREENGRASS"|"CLOUD", greengrassGroupName?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, greengrassGroupId?:string, greengrassGroupVersionId?:string}, greengrassDeploymentId?:string}>
     */
    public function deploySystemInstance(array $args = []): \AWS\Result { }

    /**
     * @param array{id?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{summary:array{id?:string, arn?:string, status?:"NOT_DEPLOYED"|"BOOTSTRAP"|"DEPLOY_IN_PROGRESS"|"DEPLOYED_IN_TARGET"|"UNDEPLOY_IN_PROGRESS"|"FAILED"|"PENDING_DELETE"|"DELETED_IN_TARGET", target?:"GREENGRASS"|"CLOUD", greengrassGroupName?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, greengrassGroupId?:string, greengrassGroupVersionId?:string}, greengrassDeploymentId?:string}>
     */
    public function deploySystemInstanceAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deprecateFlowTemplate(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deprecateFlowTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deprecateSystemTemplate(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deprecateSystemTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{namespaceName?:string} $args
     * @return \AWS\Result<array{namespaceArn?:string, namespaceName?:string, trackingNamespaceName?:string, trackingNamespaceVersion?:int, namespaceVersion?:int}>
     */
    public function describeNamespace(array $args = []): \AWS\Result { }

    /**
     * @param array{namespaceName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{namespaceArn?:string, namespaceName?:string, trackingNamespaceName?:string, trackingNamespaceVersion?:int, namespaceVersion?:int}>
     */
    public function describeNamespaceAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingName:string, entityType:"DEVICE"|"SERVICE"|"DEVICE_MODEL"|"CAPABILITY"|"STATE"|"ACTION"|"EVENT"|"PROPERTY"|"MAPPING"|"ENUM"} $args
     * @return \AWS\Result<array{}>
     */
    public function dissociateEntityFromThing(array $args): \AWS\Result { }

    /**
     * @param array{thingName:string, entityType:"DEVICE"|"SERVICE"|"DEVICE_MODEL"|"CAPABILITY"|"STATE"|"ACTION"|"EVENT"|"PROPERTY"|"MAPPING"|"ENUM"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function dissociateEntityFromThingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ids:array<string>, namespaceVersion?:int} $args
     * @return \AWS\Result<array{descriptions?:array<array{id?:string, arn?:string, type?:"DEVICE"|"SERVICE"|"DEVICE_MODEL"|"CAPABILITY"|"STATE"|"ACTION"|"EVENT"|"PROPERTY"|"MAPPING"|"ENUM", createdAt?:int|string|\DateTimeInterface, definition?:array{language:"GRAPHQL", text:string}}>}>
     */
    public function getEntities(array $args): \AWS\Result { }

    /**
     * @param array{ids:array<string>, namespaceVersion?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{descriptions?:array<array{id?:string, arn?:string, type?:"DEVICE"|"SERVICE"|"DEVICE_MODEL"|"CAPABILITY"|"STATE"|"ACTION"|"EVENT"|"PROPERTY"|"MAPPING"|"ENUM", createdAt?:int|string|\DateTimeInterface, definition?:array{language:"GRAPHQL", text:string}}>}>
     */
    public function getEntitiesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, revisionNumber?:int} $args
     * @return \AWS\Result<array{description?:array{summary?:array{id?:string, arn?:string, revisionNumber?:int, createdAt?:int|string|\DateTimeInterface}, definition?:array{language:"GRAPHQL", text:string}, validatedNamespaceVersion?:int}}>
     */
    public function getFlowTemplate(array $args): \AWS\Result { }

    /**
     * @param array{id:string, revisionNumber?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{description?:array{summary?:array{id?:string, arn?:string, revisionNumber?:int, createdAt?:int|string|\DateTimeInterface}, definition?:array{language:"GRAPHQL", text:string}, validatedNamespaceVersion?:int}}>
     */
    public function getFlowTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{summaries?:array<array{id?:string, arn?:string, revisionNumber?:int, createdAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function getFlowTemplateRevisions(array $args): \AWS\Result { }

    /**
     * @param array{id:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{summaries?:array<array{id?:string, arn?:string, revisionNumber?:int, createdAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function getFlowTemplateRevisionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{namespaceArn?:string, namespaceName?:string, status?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", errorCode?:"VALIDATION_FAILED", errorMessage?:string}>
     */
    public function getNamespaceDeletionStatus(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{namespaceArn?:string, namespaceName?:string, status?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", errorCode?:"VALIDATION_FAILED", errorMessage?:string}>
     */
    public function getNamespaceDeletionStatusAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{description?:array{summary?:array{id?:string, arn?:string, status?:"NOT_DEPLOYED"|"BOOTSTRAP"|"DEPLOY_IN_PROGRESS"|"DEPLOYED_IN_TARGET"|"UNDEPLOY_IN_PROGRESS"|"FAILED"|"PENDING_DELETE"|"DELETED_IN_TARGET", target?:"GREENGRASS"|"CLOUD", greengrassGroupName?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, greengrassGroupId?:string, greengrassGroupVersionId?:string}, definition?:array{language:"GRAPHQL", text:string}, s3BucketName?:string, metricsConfiguration?:array{cloudMetricEnabled?:bool, metricRuleRoleArn?:string}, validatedNamespaceVersion?:int, validatedDependencyRevisions?:array<array{id?:string, revisionNumber?:int}>, flowActionsRoleArn?:string}}>
     */
    public function getSystemInstance(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{description?:array{summary?:array{id?:string, arn?:string, status?:"NOT_DEPLOYED"|"BOOTSTRAP"|"DEPLOY_IN_PROGRESS"|"DEPLOYED_IN_TARGET"|"UNDEPLOY_IN_PROGRESS"|"FAILED"|"PENDING_DELETE"|"DELETED_IN_TARGET", target?:"GREENGRASS"|"CLOUD", greengrassGroupName?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, greengrassGroupId?:string, greengrassGroupVersionId?:string}, definition?:array{language:"GRAPHQL", text:string}, s3BucketName?:string, metricsConfiguration?:array{cloudMetricEnabled?:bool, metricRuleRoleArn?:string}, validatedNamespaceVersion?:int, validatedDependencyRevisions?:array<array{id?:string, revisionNumber?:int}>, flowActionsRoleArn?:string}}>
     */
    public function getSystemInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, revisionNumber?:int} $args
     * @return \AWS\Result<array{description?:array{summary?:array{id?:string, arn?:string, revisionNumber?:int, createdAt?:int|string|\DateTimeInterface}, definition?:array{language:"GRAPHQL", text:string}, validatedNamespaceVersion?:int}}>
     */
    public function getSystemTemplate(array $args): \AWS\Result { }

    /**
     * @param array{id:string, revisionNumber?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{description?:array{summary?:array{id?:string, arn?:string, revisionNumber?:int, createdAt?:int|string|\DateTimeInterface}, definition?:array{language:"GRAPHQL", text:string}, validatedNamespaceVersion?:int}}>
     */
    public function getSystemTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{summaries?:array<array{id?:string, arn?:string, revisionNumber?:int, createdAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function getSystemTemplateRevisions(array $args): \AWS\Result { }

    /**
     * @param array{id:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{summaries?:array<array{id?:string, arn?:string, revisionNumber?:int, createdAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function getSystemTemplateRevisionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{uploadId:string} $args
     * @return \AWS\Result<array{uploadId:string, uploadStatus:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", namespaceArn?:string, namespaceName?:string, namespaceVersion?:int, failureReason?:array<string>, createdDate:int|string|\DateTimeInterface}>
     */
    public function getUploadStatus(array $args): \AWS\Result { }

    /**
     * @param array{uploadId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{uploadId:string, uploadStatus:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", namespaceArn?:string, namespaceName?:string, namespaceVersion?:int, failureReason?:array<string>, createdDate:int|string|\DateTimeInterface}>
     */
    public function getUploadStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{flowExecutionId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{messages?:array<array{messageId?:string, eventType?:"EXECUTION_STARTED"|"EXECUTION_FAILED"|"EXECUTION_ABORTED"|"EXECUTION_SUCCEEDED"|"STEP_STARTED"|"STEP_FAILED"|"STEP_SUCCEEDED"|"ACTIVITY_SCHEDULED"|"ACTIVITY_STARTED"|"ACTIVITY_FAILED"|"ACTIVITY_SUCCEEDED"|"START_FLOW_EXECUTION_TASK"|"SCHEDULE_NEXT_READY_STEPS_TASK"|"THING_ACTION_TASK"|"THING_ACTION_TASK_FAILED"|"THING_ACTION_TASK_SUCCEEDED"|"ACKNOWLEDGE_TASK_MESSAGE", timestamp?:int|string|\DateTimeInterface, payload?:string}>, nextToken?:string}>
     */
    public function listFlowExecutionMessages(array $args): \AWS\Result { }

    /**
     * @param array{flowExecutionId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{messages?:array<array{messageId?:string, eventType?:"EXECUTION_STARTED"|"EXECUTION_FAILED"|"EXECUTION_ABORTED"|"EXECUTION_SUCCEEDED"|"STEP_STARTED"|"STEP_FAILED"|"STEP_SUCCEEDED"|"ACTIVITY_SCHEDULED"|"ACTIVITY_STARTED"|"ACTIVITY_FAILED"|"ACTIVITY_SUCCEEDED"|"START_FLOW_EXECUTION_TASK"|"SCHEDULE_NEXT_READY_STEPS_TASK"|"THING_ACTION_TASK"|"THING_ACTION_TASK_FAILED"|"THING_ACTION_TASK_SUCCEEDED"|"ACKNOWLEDGE_TASK_MESSAGE", timestamp?:int|string|\DateTimeInterface, payload?:string}>, nextToken?:string}>
     */
    public function listFlowExecutionMessagesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, resourceArn:string, nextToken?:string} $args
     * @return \AWS\Result<array{tags?:array<array{key:string, value:string}>, nextToken?:string}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, resourceArn:string, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<array{key:string, value:string}>, nextToken?:string}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{entityTypes:array<"DEVICE"|"SERVICE"|"DEVICE_MODEL"|"CAPABILITY"|"STATE"|"ACTION"|"EVENT"|"PROPERTY"|"MAPPING"|"ENUM">, filters?:array<array{name?:"NAME"|"NAMESPACE"|"SEMANTIC_TYPE_PATH"|"REFERENCED_ENTITY_ID", value?:array<string>}>, nextToken?:string, maxResults?:int, namespaceVersion?:int} $args
     * @return \AWS\Result<array{descriptions?:array<array{id?:string, arn?:string, type?:"DEVICE"|"SERVICE"|"DEVICE_MODEL"|"CAPABILITY"|"STATE"|"ACTION"|"EVENT"|"PROPERTY"|"MAPPING"|"ENUM", createdAt?:int|string|\DateTimeInterface, definition?:array{language:"GRAPHQL", text:string}}>, nextToken?:string}>
     */
    public function searchEntities(array $args): \AWS\Result { }

    /**
     * @param array{entityTypes:array<"DEVICE"|"SERVICE"|"DEVICE_MODEL"|"CAPABILITY"|"STATE"|"ACTION"|"EVENT"|"PROPERTY"|"MAPPING"|"ENUM">, filters?:array<array{name?:"NAME"|"NAMESPACE"|"SEMANTIC_TYPE_PATH"|"REFERENCED_ENTITY_ID", value?:array<string>}>, nextToken?:string, maxResults?:int, namespaceVersion?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{descriptions?:array<array{id?:string, arn?:string, type?:"DEVICE"|"SERVICE"|"DEVICE_MODEL"|"CAPABILITY"|"STATE"|"ACTION"|"EVENT"|"PROPERTY"|"MAPPING"|"ENUM", createdAt?:int|string|\DateTimeInterface, definition?:array{language:"GRAPHQL", text:string}}>, nextToken?:string}>
     */
    public function searchEntitiesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{systemInstanceId:string, flowExecutionId?:string, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{summaries?:array<array{flowExecutionId?:string, status?:"RUNNING"|"ABORTED"|"SUCCEEDED"|"FAILED", systemInstanceId?:string, flowTemplateId?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function searchFlowExecutions(array $args): \AWS\Result { }

    /**
     * @param array{systemInstanceId:string, flowExecutionId?:string, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{summaries?:array<array{flowExecutionId?:string, status?:"RUNNING"|"ABORTED"|"SUCCEEDED"|"FAILED", systemInstanceId?:string, flowTemplateId?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function searchFlowExecutionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filters?:array<array{name:"DEVICE_MODEL_ID", value:array<string>}>, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{summaries?:array<array{id?:string, arn?:string, revisionNumber?:int, createdAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function searchFlowTemplates(array $args = []): \AWS\Result { }

    /**
     * @param array{filters?:array<array{name:"DEVICE_MODEL_ID", value:array<string>}>, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{summaries?:array<array{id?:string, arn?:string, revisionNumber?:int, createdAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function searchFlowTemplatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filters?:array<array{name?:"SYSTEM_TEMPLATE_ID"|"STATUS"|"GREENGRASS_GROUP_NAME", value?:array<string>}>, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{summaries?:array<array{id?:string, arn?:string, status?:"NOT_DEPLOYED"|"BOOTSTRAP"|"DEPLOY_IN_PROGRESS"|"DEPLOYED_IN_TARGET"|"UNDEPLOY_IN_PROGRESS"|"FAILED"|"PENDING_DELETE"|"DELETED_IN_TARGET", target?:"GREENGRASS"|"CLOUD", greengrassGroupName?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, greengrassGroupId?:string, greengrassGroupVersionId?:string}>, nextToken?:string}>
     */
    public function searchSystemInstances(array $args = []): \AWS\Result { }

    /**
     * @param array{filters?:array<array{name?:"SYSTEM_TEMPLATE_ID"|"STATUS"|"GREENGRASS_GROUP_NAME", value?:array<string>}>, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{summaries?:array<array{id?:string, arn?:string, status?:"NOT_DEPLOYED"|"BOOTSTRAP"|"DEPLOY_IN_PROGRESS"|"DEPLOYED_IN_TARGET"|"UNDEPLOY_IN_PROGRESS"|"FAILED"|"PENDING_DELETE"|"DELETED_IN_TARGET", target?:"GREENGRASS"|"CLOUD", greengrassGroupName?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, greengrassGroupId?:string, greengrassGroupVersionId?:string}>, nextToken?:string}>
     */
    public function searchSystemInstancesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filters?:array<array{name:"FLOW_TEMPLATE_ID", value:array<string>}>, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{summaries?:array<array{id?:string, arn?:string, revisionNumber?:int, createdAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function searchSystemTemplates(array $args = []): \AWS\Result { }

    /**
     * @param array{filters?:array<array{name:"FLOW_TEMPLATE_ID", value:array<string>}>, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{summaries?:array<array{id?:string, arn?:string, revisionNumber?:int, createdAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function searchSystemTemplatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{entityId:string, nextToken?:string, maxResults?:int, namespaceVersion?:int} $args
     * @return \AWS\Result<array{things?:array<array{thingArn?:string, thingName?:string}>, nextToken?:string}>
     */
    public function searchThings(array $args): \AWS\Result { }

    /**
     * @param array{entityId:string, nextToken?:string, maxResults?:int, namespaceVersion?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{things?:array<array{thingArn?:string, thingName?:string}>, nextToken?:string}>
     */
    public function searchThingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{id?:string} $args
     * @return \AWS\Result<array{summary?:array{id?:string, arn?:string, status?:"NOT_DEPLOYED"|"BOOTSTRAP"|"DEPLOY_IN_PROGRESS"|"DEPLOYED_IN_TARGET"|"UNDEPLOY_IN_PROGRESS"|"FAILED"|"PENDING_DELETE"|"DELETED_IN_TARGET", target?:"GREENGRASS"|"CLOUD", greengrassGroupName?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, greengrassGroupId?:string, greengrassGroupVersionId?:string}}>
     */
    public function undeploySystemInstance(array $args = []): \AWS\Result { }

    /**
     * @param array{id?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{summary?:array{id?:string, arn?:string, status?:"NOT_DEPLOYED"|"BOOTSTRAP"|"DEPLOY_IN_PROGRESS"|"DEPLOYED_IN_TARGET"|"UNDEPLOY_IN_PROGRESS"|"FAILED"|"PENDING_DELETE"|"DELETED_IN_TARGET", target?:"GREENGRASS"|"CLOUD", greengrassGroupName?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, greengrassGroupId?:string, greengrassGroupVersionId?:string}}>
     */
    public function undeploySystemInstanceAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{id:string, definition:array{language:"GRAPHQL", text:string}, compatibleNamespaceVersion?:int} $args
     * @return \AWS\Result<array{summary?:array{id?:string, arn?:string, revisionNumber?:int, createdAt?:int|string|\DateTimeInterface}}>
     */
    public function updateFlowTemplate(array $args): \AWS\Result { }

    /**
     * @param array{id:string, definition:array{language:"GRAPHQL", text:string}, compatibleNamespaceVersion?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{summary?:array{id?:string, arn?:string, revisionNumber?:int, createdAt?:int|string|\DateTimeInterface}}>
     */
    public function updateFlowTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, definition:array{language:"GRAPHQL", text:string}, compatibleNamespaceVersion?:int} $args
     * @return \AWS\Result<array{summary?:array{id?:string, arn?:string, revisionNumber?:int, createdAt?:int|string|\DateTimeInterface}}>
     */
    public function updateSystemTemplate(array $args): \AWS\Result { }

    /**
     * @param array{id:string, definition:array{language:"GRAPHQL", text:string}, compatibleNamespaceVersion?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{summary?:array{id?:string, arn?:string, revisionNumber?:int, createdAt?:int|string|\DateTimeInterface}}>
     */
    public function updateSystemTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{document?:array{language:"GRAPHQL", text:string}, syncWithPublicNamespace?:bool, deprecateExistingEntities?:bool} $args
     * @return \AWS\Result<array{uploadId:string}>
     */
    public function uploadEntityDefinitions(array $args = []): \AWS\Result { }

    /**
     * @param array{document?:array{language:"GRAPHQL", text:string}, syncWithPublicNamespace?:bool, deprecateExistingEntities?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{uploadId:string}>
     */
    public function uploadEntityDefinitionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }
}
