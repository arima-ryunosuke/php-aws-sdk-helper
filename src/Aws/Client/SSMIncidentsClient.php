<?php
namespace AWS\SSMIncidents;

class SSMIncidentsClient
{
    /**
     * @param array{findingIds:array<string>, incidentRecordArn:string} $args
     * @return \AWS\Result<array{errors:array<array{code:string, findingId:string, message:string}>, findings:array<array{creationTime:int|string|\DateTimeInterface, details?:array{cloudFormationStackUpdate?:array{endTime?:int|string|\DateTimeInterface, stackArn:string, startTime:int|string|\DateTimeInterface}, codeDeployDeployment?:array{deploymentGroupArn:string, deploymentId:string, endTime?:int|string|\DateTimeInterface, startTime:int|string|\DateTimeInterface}}, id:string, lastModifiedTime:int|string|\DateTimeInterface}>}>
     */
    public function batchGetIncidentFindings(array $args): \AWS\Result { }

    /**
     * @param array{findingIds:array<string>, incidentRecordArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{errors:array<array{code:string, findingId:string, message:string}>, findings:array<array{creationTime:int|string|\DateTimeInterface, details?:array{cloudFormationStackUpdate?:array{endTime?:int|string|\DateTimeInterface, stackArn:string, startTime:int|string|\DateTimeInterface}, codeDeployDeployment?:array{deploymentGroupArn:string, deploymentId:string, endTime?:int|string|\DateTimeInterface, startTime:int|string|\DateTimeInterface}}, id:string, lastModifiedTime:int|string|\DateTimeInterface}>}>
     */
    public function batchGetIncidentFindingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, regions:array<string, array{sseKmsKeyId?:string}>, tags?:array<string, string>} $args
     * @return \AWS\Result<array{arn:string}>
     */
    public function createReplicationSet(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, regions:array<string, array{sseKmsKeyId?:string}>, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string}>
     */
    public function createReplicationSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{actions?:array<array{ssmAutomation?:array{documentName:string, documentVersion?:string, dynamicParameters?:array<string, array{variable?:"INCIDENT_RECORD_ARN"|"INVOLVED_RESOURCES"}>, parameters?:array<string, array<string>>, roleArn:string, targetAccount?:"RESPONSE_PLAN_OWNER_ACCOUNT"|"IMPACTED_ACCOUNT"}}>, chatChannel?:array{chatbotSns?:array<string>, empty?:array{}}, clientToken?:string, displayName?:string, engagements?:array<string>, incidentTemplate:array{dedupeString?:string, impact:int, incidentTags?:array<string, string>, notificationTargets?:array<array{snsTopicArn?:string}>, summary?:string, title:string}, integrations?:array<array{pagerDutyConfiguration?:array{name:string, pagerDutyIncidentConfiguration:array{serviceId:string}, secretId:string}}>, name:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{arn:string}>
     */
    public function createResponsePlan(array $args): \AWS\Result { }

    /**
     * @param array{actions?:array<array{ssmAutomation?:array{documentName:string, documentVersion?:string, dynamicParameters?:array<string, array{variable?:"INCIDENT_RECORD_ARN"|"INVOLVED_RESOURCES"}>, parameters?:array<string, array<string>>, roleArn:string, targetAccount?:"RESPONSE_PLAN_OWNER_ACCOUNT"|"IMPACTED_ACCOUNT"}}>, chatChannel?:array{chatbotSns?:array<string>, empty?:array{}}, clientToken?:string, displayName?:string, engagements?:array<string>, incidentTemplate:array{dedupeString?:string, impact:int, incidentTags?:array<string, string>, notificationTargets?:array<array{snsTopicArn?:string}>, summary?:string, title:string}, integrations?:array<array{pagerDutyConfiguration?:array{name:string, pagerDutyIncidentConfiguration:array{serviceId:string}, secretId:string}}>, name:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string}>
     */
    public function createResponsePlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, eventData:string, eventReferences?:array<array{relatedItemId?:string, resource?:string}>, eventTime:int|string|\DateTimeInterface, eventType:string, incidentRecordArn:string} $args
     * @return \AWS\Result<array{eventId:string, incidentRecordArn:string}>
     */
    public function createTimelineEvent(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, eventData:string, eventReferences?:array<array{relatedItemId?:string, resource?:string}>, eventTime:int|string|\DateTimeInterface, eventType:string, incidentRecordArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{eventId:string, incidentRecordArn:string}>
     */
    public function createTimelineEventAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteIncidentRecord(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteIncidentRecordAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteReplicationSet(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteReplicationSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyId:string, resourceArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{policyId:string, resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteResponsePlan(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteResponsePlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{eventId:string, incidentRecordArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteTimelineEvent(array $args): \AWS\Result { }

    /**
     * @param array{eventId:string, incidentRecordArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteTimelineEventAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{incidentRecord:array{arn:string, automationExecutions?:array<array{ssmExecutionArn?:string}>, chatChannel?:array{chatbotSns?:array<string>, empty?:array{}}, creationTime:int|string|\DateTimeInterface, dedupeString:string, impact:int, incidentRecordSource:array{createdBy:string, invokedBy?:string, resourceArn?:string, source:string}, lastModifiedBy:string, lastModifiedTime:int|string|\DateTimeInterface, notificationTargets?:array<array{snsTopicArn?:string}>, resolvedTime?:int|string|\DateTimeInterface, status:"OPEN"|"RESOLVED", summary?:string, title:string}}>
     */
    public function getIncidentRecord(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{incidentRecord:array{arn:string, automationExecutions?:array<array{ssmExecutionArn?:string}>, chatChannel?:array{chatbotSns?:array<string>, empty?:array{}}, creationTime:int|string|\DateTimeInterface, dedupeString:string, impact:int, incidentRecordSource:array{createdBy:string, invokedBy?:string, resourceArn?:string, source:string}, lastModifiedBy:string, lastModifiedTime:int|string|\DateTimeInterface, notificationTargets?:array<array{snsTopicArn?:string}>, resolvedTime?:int|string|\DateTimeInterface, status:"OPEN"|"RESOLVED", summary?:string, title:string}}>
     */
    public function getIncidentRecordAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{replicationSet:array{arn?:string, createdBy:string, createdTime:int|string|\DateTimeInterface, deletionProtected:bool, lastModifiedBy:string, lastModifiedTime:int|string|\DateTimeInterface, regionMap:array<string, array{sseKmsKeyId?:string, status:"ACTIVE"|"CREATING"|"DELETING"|"FAILED", statusMessage?:string, statusUpdateDateTime:int|string|\DateTimeInterface}>, status:"ACTIVE"|"CREATING"|"UPDATING"|"DELETING"|"FAILED"}}>
     */
    public function getReplicationSet(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{replicationSet:array{arn?:string, createdBy:string, createdTime:int|string|\DateTimeInterface, deletionProtected:bool, lastModifiedBy:string, lastModifiedTime:int|string|\DateTimeInterface, regionMap:array<string, array{sseKmsKeyId?:string, status:"ACTIVE"|"CREATING"|"DELETING"|"FAILED", statusMessage?:string, statusUpdateDateTime:int|string|\DateTimeInterface}>, status:"ACTIVE"|"CREATING"|"UPDATING"|"DELETING"|"FAILED"}}>
     */
    public function getReplicationSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, resourceArn:string} $args
     * @return \AWS\Result<array{nextToken?:string, resourcePolicies:array<array{policyDocument:string, policyId:string, ramResourceShareRegion:string}>}>
     */
    public function getResourcePolicies(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, resourcePolicies:array<array{policyDocument:string, policyId:string, ramResourceShareRegion:string}>}>
     */
    public function getResourcePoliciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{actions?:array<array{ssmAutomation?:array{documentName:string, documentVersion?:string, dynamicParameters?:array<string, array{variable?:"INCIDENT_RECORD_ARN"|"INVOLVED_RESOURCES"}>, parameters?:array<string, array<string>>, roleArn:string, targetAccount?:"RESPONSE_PLAN_OWNER_ACCOUNT"|"IMPACTED_ACCOUNT"}}>, arn:string, chatChannel?:array{chatbotSns?:array<string>, empty?:array{}}, displayName?:string, engagements?:array<string>, incidentTemplate:array{dedupeString?:string, impact:int, incidentTags?:array<string, string>, notificationTargets?:array<array{snsTopicArn?:string}>, summary?:string, title:string}, integrations?:array<array{pagerDutyConfiguration?:array{name:string, pagerDutyIncidentConfiguration:array{serviceId:string}, secretId:string}}>, name:string}>
     */
    public function getResponsePlan(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{actions?:array<array{ssmAutomation?:array{documentName:string, documentVersion?:string, dynamicParameters?:array<string, array{variable?:"INCIDENT_RECORD_ARN"|"INVOLVED_RESOURCES"}>, parameters?:array<string, array<string>>, roleArn:string, targetAccount?:"RESPONSE_PLAN_OWNER_ACCOUNT"|"IMPACTED_ACCOUNT"}}>, arn:string, chatChannel?:array{chatbotSns?:array<string>, empty?:array{}}, displayName?:string, engagements?:array<string>, incidentTemplate:array{dedupeString?:string, impact:int, incidentTags?:array<string, string>, notificationTargets?:array<array{snsTopicArn?:string}>, summary?:string, title:string}, integrations?:array<array{pagerDutyConfiguration?:array{name:string, pagerDutyIncidentConfiguration:array{serviceId:string}, secretId:string}}>, name:string}>
     */
    public function getResponsePlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{eventId:string, incidentRecordArn:string} $args
     * @return \AWS\Result<array{event:array{eventData:string, eventId:string, eventReferences?:array<array{relatedItemId?:string, resource?:string}>, eventTime:int|string|\DateTimeInterface, eventType:string, eventUpdatedTime:int|string|\DateTimeInterface, incidentRecordArn:string}}>
     */
    public function getTimelineEvent(array $args): \AWS\Result { }

    /**
     * @param array{eventId:string, incidentRecordArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{event:array{eventData:string, eventId:string, eventReferences?:array<array{relatedItemId?:string, resource?:string}>, eventTime:int|string|\DateTimeInterface, eventType:string, eventUpdatedTime:int|string|\DateTimeInterface, incidentRecordArn:string}}>
     */
    public function getTimelineEventAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{incidentRecordArn:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{findings:array<array{id:string, lastModifiedTime:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listIncidentFindings(array $args): \AWS\Result { }

    /**
     * @param array{incidentRecordArn:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{findings:array<array{id:string, lastModifiedTime:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listIncidentFindingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filters?:array<array{condition:array{after?:int|string|\DateTimeInterface, before?:int|string|\DateTimeInterface, equals?:array{integerValues?:array<int>, stringValues?:array<string>}}, key:string}>, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{incidentRecordSummaries:array<array{arn:string, creationTime:int|string|\DateTimeInterface, impact:int, incidentRecordSource:array{createdBy:string, invokedBy?:string, resourceArn?:string, source:string}, resolvedTime?:int|string|\DateTimeInterface, status:"OPEN"|"RESOLVED", title:string}>, nextToken?:string}>
     */
    public function listIncidentRecords(array $args = []): \AWS\Result { }

    /**
     * @param array{filters?:array<array{condition:array{after?:int|string|\DateTimeInterface, before?:int|string|\DateTimeInterface, equals?:array{integerValues?:array<int>, stringValues?:array<string>}}, key:string}>, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{incidentRecordSummaries:array<array{arn:string, creationTime:int|string|\DateTimeInterface, impact:int, incidentRecordSource:array{createdBy:string, invokedBy?:string, resourceArn?:string, source:string}, resolvedTime?:int|string|\DateTimeInterface, status:"OPEN"|"RESOLVED", title:string}>, nextToken?:string}>
     */
    public function listIncidentRecordsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{incidentRecordArn:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, relatedItems:array<array{generatedId?:string, identifier:array{type:"ANALYSIS"|"INCIDENT"|"METRIC"|"PARENT"|"ATTACHMENT"|"OTHER"|"AUTOMATION"|"INVOLVED_RESOURCE"|"TASK", value:array{arn?:string, metricDefinition?:string, pagerDutyIncidentDetail?:array{autoResolve?:bool, id:string, secretId?:string}, url?:string}}, title?:string}>}>
     */
    public function listRelatedItems(array $args): \AWS\Result { }

    /**
     * @param array{incidentRecordArn:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, relatedItems:array<array{generatedId?:string, identifier:array{type:"ANALYSIS"|"INCIDENT"|"METRIC"|"PARENT"|"ATTACHMENT"|"OTHER"|"AUTOMATION"|"INVOLVED_RESOURCE"|"TASK", value:array{arn?:string, metricDefinition?:string, pagerDutyIncidentDetail?:array{autoResolve?:bool, id:string, secretId?:string}, url?:string}}, title?:string}>}>
     */
    public function listRelatedItemsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, replicationSetArns:array<string>}>
     */
    public function listReplicationSets(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, replicationSetArns:array<string>}>
     */
    public function listReplicationSetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, responsePlanSummaries:array<array{arn:string, displayName?:string, name:string}>}>
     */
    public function listResponsePlans(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, responsePlanSummaries:array<array{arn:string, displayName?:string, name:string}>}>
     */
    public function listResponsePlansAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{tags:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filters?:array<array{condition:array{after?:int|string|\DateTimeInterface, before?:int|string|\DateTimeInterface, equals?:array{integerValues?:array<int>, stringValues?:array<string>}}, key:string}>, incidentRecordArn:string, maxResults?:int, nextToken?:string, sortBy?:"EVENT_TIME", sortOrder?:"ASCENDING"|"DESCENDING"} $args
     * @return \AWS\Result<array{eventSummaries:array<array{eventId:string, eventReferences?:array<array{relatedItemId?:string, resource?:string}>, eventTime:int|string|\DateTimeInterface, eventType:string, eventUpdatedTime:int|string|\DateTimeInterface, incidentRecordArn:string}>, nextToken?:string}>
     */
    public function listTimelineEvents(array $args): \AWS\Result { }

    /**
     * @param array{filters?:array<array{condition:array{after?:int|string|\DateTimeInterface, before?:int|string|\DateTimeInterface, equals?:array{integerValues?:array<int>, stringValues?:array<string>}}, key:string}>, incidentRecordArn:string, maxResults?:int, nextToken?:string, sortBy?:"EVENT_TIME", sortOrder?:"ASCENDING"|"DESCENDING"} $args
     * @return \GuzzleHttp\Promise\Promise<array{eventSummaries:array<array{eventId:string, eventReferences?:array<array{relatedItemId?:string, resource?:string}>, eventTime:int|string|\DateTimeInterface, eventType:string, eventUpdatedTime:int|string|\DateTimeInterface, incidentRecordArn:string}>, nextToken?:string}>
     */
    public function listTimelineEventsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policy:string, resourceArn:string} $args
     * @return \AWS\Result<array{policyId:string}>
     */
    public function putResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{policy:string, resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{policyId:string}>
     */
    public function putResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, impact?:int, relatedItems?:array<array{generatedId?:string, identifier:array{type:"ANALYSIS"|"INCIDENT"|"METRIC"|"PARENT"|"ATTACHMENT"|"OTHER"|"AUTOMATION"|"INVOLVED_RESOURCE"|"TASK", value:array{arn?:string, metricDefinition?:string, pagerDutyIncidentDetail?:array{autoResolve?:bool, id:string, secretId?:string}, url?:string}}, title?:string}>, responsePlanArn:string, title?:string, triggerDetails?:array{rawData?:string, source:string, timestamp:int|string|\DateTimeInterface, triggerArn?:string}} $args
     * @return \AWS\Result<array{incidentRecordArn:string}>
     */
    public function startIncident(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, impact?:int, relatedItems?:array<array{generatedId?:string, identifier:array{type:"ANALYSIS"|"INCIDENT"|"METRIC"|"PARENT"|"ATTACHMENT"|"OTHER"|"AUTOMATION"|"INVOLVED_RESOURCE"|"TASK", value:array{arn?:string, metricDefinition?:string, pagerDutyIncidentDetail?:array{autoResolve?:bool, id:string, secretId?:string}, url?:string}}, title?:string}>, responsePlanArn:string, title?:string, triggerDetails?:array{rawData?:string, source:string, timestamp:int|string|\DateTimeInterface, triggerArn?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{incidentRecordArn:string}>
     */
    public function startIncidentAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{arn:string, clientToken?:string, deletionProtected:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function updateDeletionProtection(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, clientToken?:string, deletionProtected:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateDeletionProtectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, chatChannel?:array{chatbotSns?:array<string>, empty?:array{}}, clientToken?:string, impact?:int, notificationTargets?:array<array{snsTopicArn?:string}>, status?:"OPEN"|"RESOLVED", summary?:string, title?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateIncidentRecord(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, chatChannel?:array{chatbotSns?:array<string>, empty?:array{}}, clientToken?:string, impact?:int, notificationTargets?:array<array{snsTopicArn?:string}>, status?:"OPEN"|"RESOLVED", summary?:string, title?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateIncidentRecordAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, incidentRecordArn:string, relatedItemsUpdate:array{itemToAdd?:array{generatedId?:string, identifier:array{type:"ANALYSIS"|"INCIDENT"|"METRIC"|"PARENT"|"ATTACHMENT"|"OTHER"|"AUTOMATION"|"INVOLVED_RESOURCE"|"TASK", value:array{arn?:string, metricDefinition?:string, pagerDutyIncidentDetail?:array{autoResolve?:bool, id:string, secretId?:string}, url?:string}}, title?:string}, itemToRemove?:array{type:"ANALYSIS"|"INCIDENT"|"METRIC"|"PARENT"|"ATTACHMENT"|"OTHER"|"AUTOMATION"|"INVOLVED_RESOURCE"|"TASK", value:array{arn?:string, metricDefinition?:string, pagerDutyIncidentDetail?:array{autoResolve?:bool, id:string, secretId?:string}, url?:string}}}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateRelatedItems(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, incidentRecordArn:string, relatedItemsUpdate:array{itemToAdd?:array{generatedId?:string, identifier:array{type:"ANALYSIS"|"INCIDENT"|"METRIC"|"PARENT"|"ATTACHMENT"|"OTHER"|"AUTOMATION"|"INVOLVED_RESOURCE"|"TASK", value:array{arn?:string, metricDefinition?:string, pagerDutyIncidentDetail?:array{autoResolve?:bool, id:string, secretId?:string}, url?:string}}, title?:string}, itemToRemove?:array{type:"ANALYSIS"|"INCIDENT"|"METRIC"|"PARENT"|"ATTACHMENT"|"OTHER"|"AUTOMATION"|"INVOLVED_RESOURCE"|"TASK", value:array{arn?:string, metricDefinition?:string, pagerDutyIncidentDetail?:array{autoResolve?:bool, id:string, secretId?:string}, url?:string}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateRelatedItemsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{actions:array<array{addRegionAction?:array{regionName:string, sseKmsKeyId?:string}, deleteRegionAction?:array{regionName:string}}>, arn:string, clientToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateReplicationSet(array $args): \AWS\Result { }

    /**
     * @param array{actions:array<array{addRegionAction?:array{regionName:string, sseKmsKeyId?:string}, deleteRegionAction?:array{regionName:string}}>, arn:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateReplicationSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{actions?:array<array{ssmAutomation?:array{documentName:string, documentVersion?:string, dynamicParameters?:array<string, array{variable?:"INCIDENT_RECORD_ARN"|"INVOLVED_RESOURCES"}>, parameters?:array<string, array<string>>, roleArn:string, targetAccount?:"RESPONSE_PLAN_OWNER_ACCOUNT"|"IMPACTED_ACCOUNT"}}>, arn:string, chatChannel?:array{chatbotSns?:array<string>, empty?:array{}}, clientToken?:string, displayName?:string, engagements?:array<string>, incidentTemplateDedupeString?:string, incidentTemplateImpact?:int, incidentTemplateNotificationTargets?:array<array{snsTopicArn?:string}>, incidentTemplateSummary?:string, incidentTemplateTags?:array<string, string>, incidentTemplateTitle?:string, integrations?:array<array{pagerDutyConfiguration?:array{name:string, pagerDutyIncidentConfiguration:array{serviceId:string}, secretId:string}}>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateResponsePlan(array $args): \AWS\Result { }

    /**
     * @param array{actions?:array<array{ssmAutomation?:array{documentName:string, documentVersion?:string, dynamicParameters?:array<string, array{variable?:"INCIDENT_RECORD_ARN"|"INVOLVED_RESOURCES"}>, parameters?:array<string, array<string>>, roleArn:string, targetAccount?:"RESPONSE_PLAN_OWNER_ACCOUNT"|"IMPACTED_ACCOUNT"}}>, arn:string, chatChannel?:array{chatbotSns?:array<string>, empty?:array{}}, clientToken?:string, displayName?:string, engagements?:array<string>, incidentTemplateDedupeString?:string, incidentTemplateImpact?:int, incidentTemplateNotificationTargets?:array<array{snsTopicArn?:string}>, incidentTemplateSummary?:string, incidentTemplateTags?:array<string, string>, incidentTemplateTitle?:string, integrations?:array<array{pagerDutyConfiguration?:array{name:string, pagerDutyIncidentConfiguration:array{serviceId:string}, secretId:string}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateResponsePlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, eventData?:string, eventId:string, eventReferences?:array<array{relatedItemId?:string, resource?:string}>, eventTime?:int|string|\DateTimeInterface, eventType?:string, incidentRecordArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateTimelineEvent(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, eventData?:string, eventId:string, eventReferences?:array<array{relatedItemId?:string, resource?:string}>, eventTime?:int|string|\DateTimeInterface, eventType?:string, incidentRecordArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateTimelineEventAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
