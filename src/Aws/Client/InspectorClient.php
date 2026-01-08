<?php
namespace AWS\Inspector;

class InspectorClient
{
    /**
     * @param array{findingArns:array<string>, attributes:array<array{key:string, value?:string}>} $args
     * @return \AWS\Result<array{failedItems:array<string, array{failureCode:"INVALID_ARN"|"DUPLICATE_ARN"|"ITEM_DOES_NOT_EXIST"|"ACCESS_DENIED"|"LIMIT_EXCEEDED"|"INTERNAL_ERROR", retryable:bool}>}>
     */
    public function addAttributesToFindings(array $args): \AWS\Result { }

    /**
     * @param array{findingArns:array<string>, attributes:array<array{key:string, value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{failedItems:array<string, array{failureCode:"INVALID_ARN"|"DUPLICATE_ARN"|"ITEM_DOES_NOT_EXIST"|"ACCESS_DENIED"|"LIMIT_EXCEEDED"|"INTERNAL_ERROR", retryable:bool}>}>
     */
    public function addAttributesToFindingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentTargetName:string, resourceGroupArn?:string} $args
     * @return \AWS\Result<array{assessmentTargetArn:string}>
     */
    public function createAssessmentTarget(array $args): \AWS\Result { }

    /**
     * @param array{assessmentTargetName:string, resourceGroupArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assessmentTargetArn:string}>
     */
    public function createAssessmentTargetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentTargetArn:string, assessmentTemplateName:string, durationInSeconds:int, rulesPackageArns:array<string>, userAttributesForFindings?:array<array{key:string, value?:string}>} $args
     * @return \AWS\Result<array{assessmentTemplateArn:string}>
     */
    public function createAssessmentTemplate(array $args): \AWS\Result { }

    /**
     * @param array{assessmentTargetArn:string, assessmentTemplateName:string, durationInSeconds:int, rulesPackageArns:array<string>, userAttributesForFindings?:array<array{key:string, value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{assessmentTemplateArn:string}>
     */
    public function createAssessmentTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentTemplateArn:string} $args
     * @return \AWS\Result<array{previewToken:string}>
     */
    public function createExclusionsPreview(array $args): \AWS\Result { }

    /**
     * @param array{assessmentTemplateArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{previewToken:string}>
     */
    public function createExclusionsPreviewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceGroupTags:array<array{key:string, value?:string}>} $args
     * @return \AWS\Result<array{resourceGroupArn:string}>
     */
    public function createResourceGroup(array $args): \AWS\Result { }

    /**
     * @param array{resourceGroupTags:array<array{key:string, value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{resourceGroupArn:string}>
     */
    public function createResourceGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentRunArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAssessmentRun(array $args): \AWS\Result { }

    /**
     * @param array{assessmentRunArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAssessmentRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentTargetArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAssessmentTarget(array $args): \AWS\Result { }

    /**
     * @param array{assessmentTargetArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAssessmentTargetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentTemplateArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAssessmentTemplate(array $args): \AWS\Result { }

    /**
     * @param array{assessmentTemplateArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAssessmentTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentRunArns:array<string>} $args
     * @return \AWS\Result<array{assessmentRuns:array<array{arn:string, name:string, assessmentTemplateArn:string, state:"CREATED"|"START_DATA_COLLECTION_PENDING"|"START_DATA_COLLECTION_IN_PROGRESS"|"COLLECTING_DATA"|"STOP_DATA_COLLECTION_PENDING"|"DATA_COLLECTED"|"START_EVALUATING_RULES_PENDING"|"EVALUATING_RULES"|"FAILED"|"ERROR"|"COMPLETED"|"COMPLETED_WITH_ERRORS"|"CANCELED", durationInSeconds:int, rulesPackageArns:array<string>, userAttributesForFindings:array<array{key:string, value?:string}>, createdAt:int|string|\DateTimeInterface, startedAt?:int|string|\DateTimeInterface, completedAt?:int|string|\DateTimeInterface, stateChangedAt:int|string|\DateTimeInterface, dataCollected:bool, stateChanges:array<array{stateChangedAt:int|string|\DateTimeInterface, state:"CREATED"|"START_DATA_COLLECTION_PENDING"|"START_DATA_COLLECTION_IN_PROGRESS"|"COLLECTING_DATA"|"STOP_DATA_COLLECTION_PENDING"|"DATA_COLLECTED"|"START_EVALUATING_RULES_PENDING"|"EVALUATING_RULES"|"FAILED"|"ERROR"|"COMPLETED"|"COMPLETED_WITH_ERRORS"|"CANCELED"}>, notifications:array<array{date:int|string|\DateTimeInterface, event:"ASSESSMENT_RUN_STARTED"|"ASSESSMENT_RUN_COMPLETED"|"ASSESSMENT_RUN_STATE_CHANGED"|"FINDING_REPORTED"|"OTHER", message?:string, error:bool, snsTopicArn?:string, snsPublishStatusCode?:"SUCCESS"|"TOPIC_DOES_NOT_EXIST"|"ACCESS_DENIED"|"INTERNAL_ERROR"}>, findingCounts:array<"Low"|"Medium"|"High"|"Informational"|"Undefined", int>}>, failedItems:array<string, array{failureCode:"INVALID_ARN"|"DUPLICATE_ARN"|"ITEM_DOES_NOT_EXIST"|"ACCESS_DENIED"|"LIMIT_EXCEEDED"|"INTERNAL_ERROR", retryable:bool}>}>
     */
    public function describeAssessmentRuns(array $args): \AWS\Result { }

    /**
     * @param array{assessmentRunArns:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{assessmentRuns:array<array{arn:string, name:string, assessmentTemplateArn:string, state:"CREATED"|"START_DATA_COLLECTION_PENDING"|"START_DATA_COLLECTION_IN_PROGRESS"|"COLLECTING_DATA"|"STOP_DATA_COLLECTION_PENDING"|"DATA_COLLECTED"|"START_EVALUATING_RULES_PENDING"|"EVALUATING_RULES"|"FAILED"|"ERROR"|"COMPLETED"|"COMPLETED_WITH_ERRORS"|"CANCELED", durationInSeconds:int, rulesPackageArns:array<string>, userAttributesForFindings:array<array{key:string, value?:string}>, createdAt:int|string|\DateTimeInterface, startedAt?:int|string|\DateTimeInterface, completedAt?:int|string|\DateTimeInterface, stateChangedAt:int|string|\DateTimeInterface, dataCollected:bool, stateChanges:array<array{stateChangedAt:int|string|\DateTimeInterface, state:"CREATED"|"START_DATA_COLLECTION_PENDING"|"START_DATA_COLLECTION_IN_PROGRESS"|"COLLECTING_DATA"|"STOP_DATA_COLLECTION_PENDING"|"DATA_COLLECTED"|"START_EVALUATING_RULES_PENDING"|"EVALUATING_RULES"|"FAILED"|"ERROR"|"COMPLETED"|"COMPLETED_WITH_ERRORS"|"CANCELED"}>, notifications:array<array{date:int|string|\DateTimeInterface, event:"ASSESSMENT_RUN_STARTED"|"ASSESSMENT_RUN_COMPLETED"|"ASSESSMENT_RUN_STATE_CHANGED"|"FINDING_REPORTED"|"OTHER", message?:string, error:bool, snsTopicArn?:string, snsPublishStatusCode?:"SUCCESS"|"TOPIC_DOES_NOT_EXIST"|"ACCESS_DENIED"|"INTERNAL_ERROR"}>, findingCounts:array<"Low"|"Medium"|"High"|"Informational"|"Undefined", int>}>, failedItems:array<string, array{failureCode:"INVALID_ARN"|"DUPLICATE_ARN"|"ITEM_DOES_NOT_EXIST"|"ACCESS_DENIED"|"LIMIT_EXCEEDED"|"INTERNAL_ERROR", retryable:bool}>}>
     */
    public function describeAssessmentRunsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentTargetArns:array<string>} $args
     * @return \AWS\Result<array{assessmentTargets:array<array{arn:string, name:string, resourceGroupArn?:string, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface}>, failedItems:array<string, array{failureCode:"INVALID_ARN"|"DUPLICATE_ARN"|"ITEM_DOES_NOT_EXIST"|"ACCESS_DENIED"|"LIMIT_EXCEEDED"|"INTERNAL_ERROR", retryable:bool}>}>
     */
    public function describeAssessmentTargets(array $args): \AWS\Result { }

    /**
     * @param array{assessmentTargetArns:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{assessmentTargets:array<array{arn:string, name:string, resourceGroupArn?:string, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface}>, failedItems:array<string, array{failureCode:"INVALID_ARN"|"DUPLICATE_ARN"|"ITEM_DOES_NOT_EXIST"|"ACCESS_DENIED"|"LIMIT_EXCEEDED"|"INTERNAL_ERROR", retryable:bool}>}>
     */
    public function describeAssessmentTargetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentTemplateArns:array<string>} $args
     * @return \AWS\Result<array{assessmentTemplates:array<array{arn:string, name:string, assessmentTargetArn:string, durationInSeconds:int, rulesPackageArns:array<string>, userAttributesForFindings:array<array{key:string, value?:string}>, lastAssessmentRunArn?:string, assessmentRunCount:int, createdAt:int|string|\DateTimeInterface}>, failedItems:array<string, array{failureCode:"INVALID_ARN"|"DUPLICATE_ARN"|"ITEM_DOES_NOT_EXIST"|"ACCESS_DENIED"|"LIMIT_EXCEEDED"|"INTERNAL_ERROR", retryable:bool}>}>
     */
    public function describeAssessmentTemplates(array $args): \AWS\Result { }

    /**
     * @param array{assessmentTemplateArns:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{assessmentTemplates:array<array{arn:string, name:string, assessmentTargetArn:string, durationInSeconds:int, rulesPackageArns:array<string>, userAttributesForFindings:array<array{key:string, value?:string}>, lastAssessmentRunArn?:string, assessmentRunCount:int, createdAt:int|string|\DateTimeInterface}>, failedItems:array<string, array{failureCode:"INVALID_ARN"|"DUPLICATE_ARN"|"ITEM_DOES_NOT_EXIST"|"ACCESS_DENIED"|"LIMIT_EXCEEDED"|"INTERNAL_ERROR", retryable:bool}>}>
     */
    public function describeAssessmentTemplatesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{roleArn:string, valid:bool, registeredAt:int|string|\DateTimeInterface}>
     */
    public function describeCrossAccountAccessRole(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{roleArn:string, valid:bool, registeredAt:int|string|\DateTimeInterface}>
     */
    public function describeCrossAccountAccessRoleAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{exclusionArns:array<string>, locale?:"EN_US"} $args
     * @return \AWS\Result<array{exclusions:array<string, array{arn:string, title:string, description:string, recommendation:string, scopes:array<array{key?:"INSTANCE_ID"|"RULES_PACKAGE_ARN", value?:string}>, attributes?:array<array{key:string, value?:string}>}>, failedItems:array<string, array{failureCode:"INVALID_ARN"|"DUPLICATE_ARN"|"ITEM_DOES_NOT_EXIST"|"ACCESS_DENIED"|"LIMIT_EXCEEDED"|"INTERNAL_ERROR", retryable:bool}>}>
     */
    public function describeExclusions(array $args): \AWS\Result { }

    /**
     * @param array{exclusionArns:array<string>, locale?:"EN_US"} $args
     * @return \GuzzleHttp\Promise\Promise<array{exclusions:array<string, array{arn:string, title:string, description:string, recommendation:string, scopes:array<array{key?:"INSTANCE_ID"|"RULES_PACKAGE_ARN", value?:string}>, attributes?:array<array{key:string, value?:string}>}>, failedItems:array<string, array{failureCode:"INVALID_ARN"|"DUPLICATE_ARN"|"ITEM_DOES_NOT_EXIST"|"ACCESS_DENIED"|"LIMIT_EXCEEDED"|"INTERNAL_ERROR", retryable:bool}>}>
     */
    public function describeExclusionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{findingArns:array<string>, locale?:"EN_US"} $args
     * @return \AWS\Result<array{findings:array<array{arn:string, schemaVersion?:int, service?:string, serviceAttributes?:array{schemaVersion:int, assessmentRunArn?:string, rulesPackageArn?:string}, assetType?:"ec2-instance", assetAttributes?:array{schemaVersion:int, agentId?:string, autoScalingGroup?:string, amiId?:string, hostname?:string, ipv4Addresses?:array<string>, tags?:array<array{key:string, value?:string}>, networkInterfaces?:array<array{networkInterfaceId?:string, subnetId?:string, vpcId?:string, privateDnsName?:string, privateIpAddress?:string, privateIpAddresses?:array<array{privateDnsName?:string, privateIpAddress?:string}>, publicDnsName?:string, publicIp?:string, ipv6Addresses?:array<string>, securityGroups?:array<array{groupName?:string, groupId?:string}>}>}, id?:string, title?:string, description?:string, recommendation?:string, severity?:"Low"|"Medium"|"High"|"Informational"|"Undefined", numericSeverity?:float, confidence?:int, indicatorOfCompromise?:bool, attributes:array<array{key:string, value?:string}>, userAttributes:array<array{key:string, value?:string}>, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface}>, failedItems:array<string, array{failureCode:"INVALID_ARN"|"DUPLICATE_ARN"|"ITEM_DOES_NOT_EXIST"|"ACCESS_DENIED"|"LIMIT_EXCEEDED"|"INTERNAL_ERROR", retryable:bool}>}>
     */
    public function describeFindings(array $args): \AWS\Result { }

    /**
     * @param array{findingArns:array<string>, locale?:"EN_US"} $args
     * @return \GuzzleHttp\Promise\Promise<array{findings:array<array{arn:string, schemaVersion?:int, service?:string, serviceAttributes?:array{schemaVersion:int, assessmentRunArn?:string, rulesPackageArn?:string}, assetType?:"ec2-instance", assetAttributes?:array{schemaVersion:int, agentId?:string, autoScalingGroup?:string, amiId?:string, hostname?:string, ipv4Addresses?:array<string>, tags?:array<array{key:string, value?:string}>, networkInterfaces?:array<array{networkInterfaceId?:string, subnetId?:string, vpcId?:string, privateDnsName?:string, privateIpAddress?:string, privateIpAddresses?:array<array{privateDnsName?:string, privateIpAddress?:string}>, publicDnsName?:string, publicIp?:string, ipv6Addresses?:array<string>, securityGroups?:array<array{groupName?:string, groupId?:string}>}>}, id?:string, title?:string, description?:string, recommendation?:string, severity?:"Low"|"Medium"|"High"|"Informational"|"Undefined", numericSeverity?:float, confidence?:int, indicatorOfCompromise?:bool, attributes:array<array{key:string, value?:string}>, userAttributes:array<array{key:string, value?:string}>, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface}>, failedItems:array<string, array{failureCode:"INVALID_ARN"|"DUPLICATE_ARN"|"ITEM_DOES_NOT_EXIST"|"ACCESS_DENIED"|"LIMIT_EXCEEDED"|"INTERNAL_ERROR", retryable:bool}>}>
     */
    public function describeFindingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceGroupArns:array<string>} $args
     * @return \AWS\Result<array{resourceGroups:array<array{arn:string, tags:array<array{key:string, value?:string}>, createdAt:int|string|\DateTimeInterface}>, failedItems:array<string, array{failureCode:"INVALID_ARN"|"DUPLICATE_ARN"|"ITEM_DOES_NOT_EXIST"|"ACCESS_DENIED"|"LIMIT_EXCEEDED"|"INTERNAL_ERROR", retryable:bool}>}>
     */
    public function describeResourceGroups(array $args): \AWS\Result { }

    /**
     * @param array{resourceGroupArns:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{resourceGroups:array<array{arn:string, tags:array<array{key:string, value?:string}>, createdAt:int|string|\DateTimeInterface}>, failedItems:array<string, array{failureCode:"INVALID_ARN"|"DUPLICATE_ARN"|"ITEM_DOES_NOT_EXIST"|"ACCESS_DENIED"|"LIMIT_EXCEEDED"|"INTERNAL_ERROR", retryable:bool}>}>
     */
    public function describeResourceGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{rulesPackageArns:array<string>, locale?:"EN_US"} $args
     * @return \AWS\Result<array{rulesPackages:array<array{arn:string, name:string, version:string, provider:string, description?:string}>, failedItems:array<string, array{failureCode:"INVALID_ARN"|"DUPLICATE_ARN"|"ITEM_DOES_NOT_EXIST"|"ACCESS_DENIED"|"LIMIT_EXCEEDED"|"INTERNAL_ERROR", retryable:bool}>}>
     */
    public function describeRulesPackages(array $args): \AWS\Result { }

    /**
     * @param array{rulesPackageArns:array<string>, locale?:"EN_US"} $args
     * @return \GuzzleHttp\Promise\Promise<array{rulesPackages:array<array{arn:string, name:string, version:string, provider:string, description?:string}>, failedItems:array<string, array{failureCode:"INVALID_ARN"|"DUPLICATE_ARN"|"ITEM_DOES_NOT_EXIST"|"ACCESS_DENIED"|"LIMIT_EXCEEDED"|"INTERNAL_ERROR", retryable:bool}>}>
     */
    public function describeRulesPackagesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentRunArn:string, reportFileFormat:"HTML"|"PDF", reportType:"FINDING"|"FULL"} $args
     * @return \AWS\Result<array{status:"WORK_IN_PROGRESS"|"FAILED"|"COMPLETED", url?:string}>
     */
    public function getAssessmentReport(array $args): \AWS\Result { }

    /**
     * @param array{assessmentRunArn:string, reportFileFormat:"HTML"|"PDF", reportType:"FINDING"|"FULL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{status:"WORK_IN_PROGRESS"|"FAILED"|"COMPLETED", url?:string}>
     */
    public function getAssessmentReportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentTemplateArn:string, previewToken:string, nextToken?:string, maxResults?:int, locale?:"EN_US"} $args
     * @return \AWS\Result<array{previewStatus:"WORK_IN_PROGRESS"|"COMPLETED", exclusionPreviews?:array<array{title:string, description:string, recommendation:string, scopes:array<array{key?:"INSTANCE_ID"|"RULES_PACKAGE_ARN", value?:string}>, attributes?:array<array{key:string, value?:string}>}>, nextToken?:string}>
     */
    public function getExclusionsPreview(array $args): \AWS\Result { }

    /**
     * @param array{assessmentTemplateArn:string, previewToken:string, nextToken?:string, maxResults?:int, locale?:"EN_US"} $args
     * @return \GuzzleHttp\Promise\Promise<array{previewStatus:"WORK_IN_PROGRESS"|"COMPLETED", exclusionPreviews?:array<array{title:string, description:string, recommendation:string, scopes:array<array{key?:"INSTANCE_ID"|"RULES_PACKAGE_ARN", value?:string}>, attributes?:array<array{key:string, value?:string}>}>, nextToken?:string}>
     */
    public function getExclusionsPreviewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentRunArn:string} $args
     * @return \AWS\Result<array{telemetryMetadata:array<array{messageType:string, count:int, dataSize?:int}>}>
     */
    public function getTelemetryMetadata(array $args): \AWS\Result { }

    /**
     * @param array{assessmentRunArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{telemetryMetadata:array<array{messageType:string, count:int, dataSize?:int}>}>
     */
    public function getTelemetryMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentRunArn:string, filter?:array{agentHealths:array<"HEALTHY"|"UNHEALTHY"|"UNKNOWN">, agentHealthCodes:array<"IDLE"|"RUNNING"|"SHUTDOWN"|"UNHEALTHY"|"THROTTLED"|"UNKNOWN">}, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{assessmentRunAgents:array<array{agentId:string, assessmentRunArn:string, agentHealth:"HEALTHY"|"UNHEALTHY"|"UNKNOWN", agentHealthCode:"IDLE"|"RUNNING"|"SHUTDOWN"|"UNHEALTHY"|"THROTTLED"|"UNKNOWN", agentHealthDetails?:string, autoScalingGroup?:string, telemetryMetadata:array<array{messageType:string, count:int, dataSize?:int}>}>, nextToken?:string}>
     */
    public function listAssessmentRunAgents(array $args): \AWS\Result { }

    /**
     * @param array{assessmentRunArn:string, filter?:array{agentHealths:array<"HEALTHY"|"UNHEALTHY"|"UNKNOWN">, agentHealthCodes:array<"IDLE"|"RUNNING"|"SHUTDOWN"|"UNHEALTHY"|"THROTTLED"|"UNKNOWN">}, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{assessmentRunAgents:array<array{agentId:string, assessmentRunArn:string, agentHealth:"HEALTHY"|"UNHEALTHY"|"UNKNOWN", agentHealthCode:"IDLE"|"RUNNING"|"SHUTDOWN"|"UNHEALTHY"|"THROTTLED"|"UNKNOWN", agentHealthDetails?:string, autoScalingGroup?:string, telemetryMetadata:array<array{messageType:string, count:int, dataSize?:int}>}>, nextToken?:string}>
     */
    public function listAssessmentRunAgentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentTemplateArns?:array<string>, filter?:array{namePattern?:string, states?:array<"CREATED"|"START_DATA_COLLECTION_PENDING"|"START_DATA_COLLECTION_IN_PROGRESS"|"COLLECTING_DATA"|"STOP_DATA_COLLECTION_PENDING"|"DATA_COLLECTED"|"START_EVALUATING_RULES_PENDING"|"EVALUATING_RULES"|"FAILED"|"ERROR"|"COMPLETED"|"COMPLETED_WITH_ERRORS"|"CANCELED">, durationRange?:array{minSeconds?:int, maxSeconds?:int}, rulesPackageArns?:array<string>, startTimeRange?:array{beginDate?:int|string|\DateTimeInterface, endDate?:int|string|\DateTimeInterface}, completionTimeRange?:array{beginDate?:int|string|\DateTimeInterface, endDate?:int|string|\DateTimeInterface}, stateChangeTimeRange?:array{beginDate?:int|string|\DateTimeInterface, endDate?:int|string|\DateTimeInterface}}, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{assessmentRunArns:array<string>, nextToken?:string}>
     */
    public function listAssessmentRuns(array $args = []): \AWS\Result { }

    /**
     * @param array{assessmentTemplateArns?:array<string>, filter?:array{namePattern?:string, states?:array<"CREATED"|"START_DATA_COLLECTION_PENDING"|"START_DATA_COLLECTION_IN_PROGRESS"|"COLLECTING_DATA"|"STOP_DATA_COLLECTION_PENDING"|"DATA_COLLECTED"|"START_EVALUATING_RULES_PENDING"|"EVALUATING_RULES"|"FAILED"|"ERROR"|"COMPLETED"|"COMPLETED_WITH_ERRORS"|"CANCELED">, durationRange?:array{minSeconds?:int, maxSeconds?:int}, rulesPackageArns?:array<string>, startTimeRange?:array{beginDate?:int|string|\DateTimeInterface, endDate?:int|string|\DateTimeInterface}, completionTimeRange?:array{beginDate?:int|string|\DateTimeInterface, endDate?:int|string|\DateTimeInterface}, stateChangeTimeRange?:array{beginDate?:int|string|\DateTimeInterface, endDate?:int|string|\DateTimeInterface}}, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{assessmentRunArns:array<string>, nextToken?:string}>
     */
    public function listAssessmentRunsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filter?:array{assessmentTargetNamePattern?:string}, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{assessmentTargetArns:array<string>, nextToken?:string}>
     */
    public function listAssessmentTargets(array $args = []): \AWS\Result { }

    /**
     * @param array{filter?:array{assessmentTargetNamePattern?:string}, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{assessmentTargetArns:array<string>, nextToken?:string}>
     */
    public function listAssessmentTargetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentTargetArns?:array<string>, filter?:array{namePattern?:string, durationRange?:array{minSeconds?:int, maxSeconds?:int}, rulesPackageArns?:array<string>}, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{assessmentTemplateArns:array<string>, nextToken?:string}>
     */
    public function listAssessmentTemplates(array $args = []): \AWS\Result { }

    /**
     * @param array{assessmentTargetArns?:array<string>, filter?:array{namePattern?:string, durationRange?:array{minSeconds?:int, maxSeconds?:int}, rulesPackageArns?:array<string>}, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{assessmentTemplateArns:array<string>, nextToken?:string}>
     */
    public function listAssessmentTemplatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{subscriptions:array<array{resourceArn:string, topicArn:string, eventSubscriptions:array<array{event:"ASSESSMENT_RUN_STARTED"|"ASSESSMENT_RUN_COMPLETED"|"ASSESSMENT_RUN_STATE_CHANGED"|"FINDING_REPORTED"|"OTHER", subscribedAt:int|string|\DateTimeInterface}>}>, nextToken?:string}>
     */
    public function listEventSubscriptions(array $args = []): \AWS\Result { }

    /**
     * @param array{resourceArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{subscriptions:array<array{resourceArn:string, topicArn:string, eventSubscriptions:array<array{event:"ASSESSMENT_RUN_STARTED"|"ASSESSMENT_RUN_COMPLETED"|"ASSESSMENT_RUN_STATE_CHANGED"|"FINDING_REPORTED"|"OTHER", subscribedAt:int|string|\DateTimeInterface}>}>, nextToken?:string}>
     */
    public function listEventSubscriptionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentRunArn:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{exclusionArns:array<string>, nextToken?:string}>
     */
    public function listExclusions(array $args): \AWS\Result { }

    /**
     * @param array{assessmentRunArn:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{exclusionArns:array<string>, nextToken?:string}>
     */
    public function listExclusionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentRunArns?:array<string>, filter?:array{agentIds?:array<string>, autoScalingGroups?:array<string>, ruleNames?:array<string>, severities?:array<"Low"|"Medium"|"High"|"Informational"|"Undefined">, rulesPackageArns?:array<string>, attributes?:array<array{key:string, value?:string}>, userAttributes?:array<array{key:string, value?:string}>, creationTimeRange?:array{beginDate?:int|string|\DateTimeInterface, endDate?:int|string|\DateTimeInterface}}, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{findingArns:array<string>, nextToken?:string}>
     */
    public function listFindings(array $args = []): \AWS\Result { }

    /**
     * @param array{assessmentRunArns?:array<string>, filter?:array{agentIds?:array<string>, autoScalingGroups?:array<string>, ruleNames?:array<string>, severities?:array<"Low"|"Medium"|"High"|"Informational"|"Undefined">, rulesPackageArns?:array<string>, attributes?:array<array{key:string, value?:string}>, userAttributes?:array<array{key:string, value?:string}>, creationTimeRange?:array{beginDate?:int|string|\DateTimeInterface, endDate?:int|string|\DateTimeInterface}}, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{findingArns:array<string>, nextToken?:string}>
     */
    public function listFindingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{rulesPackageArns:array<string>, nextToken?:string}>
     */
    public function listRulesPackages(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{rulesPackageArns:array<string>, nextToken?:string}>
     */
    public function listRulesPackagesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{tags:array<array{key:string, value?:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags:array<array{key:string, value?:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{previewAgentsArn:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{agentPreviews:array<array{hostname?:string, agentId:string, autoScalingGroup?:string, agentHealth?:"HEALTHY"|"UNHEALTHY"|"UNKNOWN", agentVersion?:string, operatingSystem?:string, kernelVersion?:string, ipv4Address?:string}>, nextToken?:string}>
     */
    public function previewAgents(array $args): \AWS\Result { }

    /**
     * @param array{previewAgentsArn:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{agentPreviews:array<array{hostname?:string, agentId:string, autoScalingGroup?:string, agentHealth?:"HEALTHY"|"UNHEALTHY"|"UNKNOWN", agentVersion?:string, operatingSystem?:string, kernelVersion?:string, ipv4Address?:string}>, nextToken?:string}>
     */
    public function previewAgentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{roleArn:string} $args
     * @return \AWS\Result<void>
     */
    public function registerCrossAccountAccessRole(array $args): \AWS\Result { }

    /**
     * @param array{roleArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function registerCrossAccountAccessRoleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{findingArns:array<string>, attributeKeys:array<string>} $args
     * @return \AWS\Result<array{failedItems:array<string, array{failureCode:"INVALID_ARN"|"DUPLICATE_ARN"|"ITEM_DOES_NOT_EXIST"|"ACCESS_DENIED"|"LIMIT_EXCEEDED"|"INTERNAL_ERROR", retryable:bool}>}>
     */
    public function removeAttributesFromFindings(array $args): \AWS\Result { }

    /**
     * @param array{findingArns:array<string>, attributeKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{failedItems:array<string, array{failureCode:"INVALID_ARN"|"DUPLICATE_ARN"|"ITEM_DOES_NOT_EXIST"|"ACCESS_DENIED"|"LIMIT_EXCEEDED"|"INTERNAL_ERROR", retryable:bool}>}>
     */
    public function removeAttributesFromFindingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags?:array<array{key:string, value?:string}>} $args
     * @return \AWS\Result<void>
     */
    public function setTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags?:array<array{key:string, value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function setTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentTemplateArn:string, assessmentRunName?:string} $args
     * @return \AWS\Result<array{assessmentRunArn:string}>
     */
    public function startAssessmentRun(array $args): \AWS\Result { }

    /**
     * @param array{assessmentTemplateArn:string, assessmentRunName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assessmentRunArn:string}>
     */
    public function startAssessmentRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentRunArn:string, stopAction?:"START_EVALUATION"|"SKIP_EVALUATION"} $args
     * @return \AWS\Result<void>
     */
    public function stopAssessmentRun(array $args): \AWS\Result { }

    /**
     * @param array{assessmentRunArn:string, stopAction?:"START_EVALUATION"|"SKIP_EVALUATION"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function stopAssessmentRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, event:"ASSESSMENT_RUN_STARTED"|"ASSESSMENT_RUN_COMPLETED"|"ASSESSMENT_RUN_STATE_CHANGED"|"FINDING_REPORTED"|"OTHER", topicArn:string} $args
     * @return \AWS\Result<void>
     */
    public function subscribeToEvent(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, event:"ASSESSMENT_RUN_STARTED"|"ASSESSMENT_RUN_COMPLETED"|"ASSESSMENT_RUN_STATE_CHANGED"|"FINDING_REPORTED"|"OTHER", topicArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function subscribeToEventAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, event:"ASSESSMENT_RUN_STARTED"|"ASSESSMENT_RUN_COMPLETED"|"ASSESSMENT_RUN_STATE_CHANGED"|"FINDING_REPORTED"|"OTHER", topicArn:string} $args
     * @return \AWS\Result<void>
     */
    public function unsubscribeFromEvent(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, event:"ASSESSMENT_RUN_STARTED"|"ASSESSMENT_RUN_COMPLETED"|"ASSESSMENT_RUN_STATE_CHANGED"|"FINDING_REPORTED"|"OTHER", topicArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function unsubscribeFromEventAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentTargetArn:string, assessmentTargetName:string, resourceGroupArn?:string} $args
     * @return \AWS\Result<void>
     */
    public function updateAssessmentTarget(array $args): \AWS\Result { }

    /**
     * @param array{assessmentTargetArn:string, assessmentTargetName:string, resourceGroupArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateAssessmentTargetAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
