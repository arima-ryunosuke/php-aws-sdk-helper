<?php
namespace AWS\MigrationHubOrchestrator;

class MigrationHubOrchestratorClient
{
    /**
     * @param array{templateName:string, templateDescription?:string, templateSource:array{workflowId?:string}, clientToken?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{templateId?:string, templateArn?:string, tags?:array<string, string>}>
     */
    public function createTemplate(array $args): \AWS\Result { }

    /**
     * @param array{templateName:string, templateDescription?:string, templateSource:array{workflowId?:string}, clientToken?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{templateId?:string, templateArn?:string, tags?:array<string, string>}>
     */
    public function createTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, templateId:string, applicationConfigurationId?:string, inputParameters:array<string, array{integerValue?:int, stringValue?:string, listOfStringsValue?:array<string>, mapOfStringValue?:array<string, string>}>, stepTargets?:array<string>, tags?:array<string, string>} $args
     * @return \AWS\Result<array{id?:string, arn?:string, name?:string, description?:string, templateId?:string, adsApplicationConfigurationId?:string, workflowInputs?:array<string, array{integerValue?:int, stringValue?:string, listOfStringsValue?:array<string>, mapOfStringValue?:array<string, string>}>, stepTargets?:array<string>, status?:"CREATING"|"NOT_STARTED"|"CREATION_FAILED"|"STARTING"|"IN_PROGRESS"|"WORKFLOW_FAILED"|"PAUSED"|"PAUSING"|"PAUSING_FAILED"|"USER_ATTENTION_REQUIRED"|"DELETING"|"DELETION_FAILED"|"DELETED"|"COMPLETED", creationTime?:int|string|\DateTimeInterface, tags?:array<string, string>}>
     */
    public function createWorkflow(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, templateId:string, applicationConfigurationId?:string, inputParameters:array<string, array{integerValue?:int, stringValue?:string, listOfStringsValue?:array<string>, mapOfStringValue?:array<string, string>}>, stepTargets?:array<string>, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, arn?:string, name?:string, description?:string, templateId?:string, adsApplicationConfigurationId?:string, workflowInputs?:array<string, array{integerValue?:int, stringValue?:string, listOfStringsValue?:array<string>, mapOfStringValue?:array<string, string>}>, stepTargets?:array<string>, status?:"CREATING"|"NOT_STARTED"|"CREATION_FAILED"|"STARTING"|"IN_PROGRESS"|"WORKFLOW_FAILED"|"PAUSED"|"PAUSING"|"PAUSING_FAILED"|"USER_ATTENTION_REQUIRED"|"DELETING"|"DELETION_FAILED"|"DELETED"|"COMPLETED", creationTime?:int|string|\DateTimeInterface, tags?:array<string, string>}>
     */
    public function createWorkflowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, stepGroupId:string, workflowId:string, stepActionType:"MANUAL"|"AUTOMATED", description?:string, workflowStepAutomationConfiguration?:array{scriptLocationS3Bucket?:string, scriptLocationS3Key?:array{linux?:string, windows?:string}, command?:array{linux?:string, windows?:string}, runEnvironment?:"AWS"|"ONPREMISE", targetType?:"SINGLE"|"ALL"|"NONE"}, stepTarget?:array<string>, outputs?:array<array{name?:string, dataType?:"STRING"|"INTEGER"|"STRINGLIST"|"STRINGMAP", required?:bool, value?:array{integerValue?:int, stringValue?:string, listOfStringValue?:array<string>}}>, previous?:array<string>, next?:array<string>} $args
     * @return \AWS\Result<array{id?:string, stepGroupId?:string, workflowId?:string, name?:string}>
     */
    public function createWorkflowStep(array $args): \AWS\Result { }

    /**
     * @param array{name:string, stepGroupId:string, workflowId:string, stepActionType:"MANUAL"|"AUTOMATED", description?:string, workflowStepAutomationConfiguration?:array{scriptLocationS3Bucket?:string, scriptLocationS3Key?:array{linux?:string, windows?:string}, command?:array{linux?:string, windows?:string}, runEnvironment?:"AWS"|"ONPREMISE", targetType?:"SINGLE"|"ALL"|"NONE"}, stepTarget?:array<string>, outputs?:array<array{name?:string, dataType?:"STRING"|"INTEGER"|"STRINGLIST"|"STRINGMAP", required?:bool, value?:array{integerValue?:int, stringValue?:string, listOfStringValue?:array<string>}}>, previous?:array<string>, next?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, stepGroupId?:string, workflowId?:string, name?:string}>
     */
    public function createWorkflowStepAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{workflowId:string, name:string, description?:string, next?:array<string>, previous?:array<string>} $args
     * @return \AWS\Result<array{workflowId?:string, name?:string, id?:string, description?:string, tools?:array<array{name?:string, url?:string}>, next?:array<string>, previous?:array<string>, creationTime?:int|string|\DateTimeInterface}>
     */
    public function createWorkflowStepGroup(array $args): \AWS\Result { }

    /**
     * @param array{workflowId:string, name:string, description?:string, next?:array<string>, previous?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{workflowId?:string, name?:string, id?:string, description?:string, tools?:array<array{name?:string, url?:string}>, next?:array<string>, previous?:array<string>, creationTime?:int|string|\DateTimeInterface}>
     */
    public function createWorkflowStepGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteTemplate(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{id?:string, arn?:string, status?:"CREATING"|"NOT_STARTED"|"CREATION_FAILED"|"STARTING"|"IN_PROGRESS"|"WORKFLOW_FAILED"|"PAUSED"|"PAUSING"|"PAUSING_FAILED"|"USER_ATTENTION_REQUIRED"|"DELETING"|"DELETION_FAILED"|"DELETED"|"COMPLETED"}>
     */
    public function deleteWorkflow(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, arn?:string, status?:"CREATING"|"NOT_STARTED"|"CREATION_FAILED"|"STARTING"|"IN_PROGRESS"|"WORKFLOW_FAILED"|"PAUSED"|"PAUSING"|"PAUSING_FAILED"|"USER_ATTENTION_REQUIRED"|"DELETING"|"DELETION_FAILED"|"DELETED"|"COMPLETED"}>
     */
    public function deleteWorkflowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, stepGroupId:string, workflowId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteWorkflowStep(array $args): \AWS\Result { }

    /**
     * @param array{id:string, stepGroupId:string, workflowId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteWorkflowStepAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{workflowId:string, id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteWorkflowStepGroup(array $args): \AWS\Result { }

    /**
     * @param array{workflowId:string, id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteWorkflowStepGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{id?:string, templateArn?:string, name?:string, description?:string, inputs?:array<array{inputName?:string, dataType?:"STRING"|"INTEGER"|"STRINGLIST"|"STRINGMAP", required?:bool}>, tools?:array<array{name?:string, url?:string}>, creationTime?:int|string|\DateTimeInterface, owner?:string, status?:"CREATED"|"READY"|"PENDING_CREATION"|"CREATING"|"CREATION_FAILED", statusMessage?:string, templateClass?:string, tags?:array<string, string>}>
     */
    public function getTemplate(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, templateArn?:string, name?:string, description?:string, inputs?:array<array{inputName?:string, dataType?:"STRING"|"INTEGER"|"STRINGLIST"|"STRINGMAP", required?:bool}>, tools?:array<array{name?:string, url?:string}>, creationTime?:int|string|\DateTimeInterface, owner?:string, status?:"CREATED"|"READY"|"PENDING_CREATION"|"CREATING"|"CREATION_FAILED", statusMessage?:string, templateClass?:string, tags?:array<string, string>}>
     */
    public function getTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, templateId:string, stepGroupId:string} $args
     * @return \AWS\Result<array{id?:string, stepGroupId?:string, templateId?:string, name?:string, description?:string, stepActionType?:"MANUAL"|"AUTOMATED", creationTime?:string, previous?:array<string>, next?:array<string>, outputs?:array<array{name?:string, dataType?:"STRING"|"INTEGER"|"STRINGLIST"|"STRINGMAP", required?:bool}>, stepAutomationConfiguration?:array{scriptLocationS3Bucket?:string, scriptLocationS3Key?:array{linux?:string, windows?:string}, command?:array{linux?:string, windows?:string}, runEnvironment?:"AWS"|"ONPREMISE", targetType?:"SINGLE"|"ALL"|"NONE"}}>
     */
    public function getTemplateStep(array $args): \AWS\Result { }

    /**
     * @param array{id:string, templateId:string, stepGroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, stepGroupId?:string, templateId?:string, name?:string, description?:string, stepActionType?:"MANUAL"|"AUTOMATED", creationTime?:string, previous?:array<string>, next?:array<string>, outputs?:array<array{name?:string, dataType?:"STRING"|"INTEGER"|"STRINGLIST"|"STRINGMAP", required?:bool}>, stepAutomationConfiguration?:array{scriptLocationS3Bucket?:string, scriptLocationS3Key?:array{linux?:string, windows?:string}, command?:array{linux?:string, windows?:string}, runEnvironment?:"AWS"|"ONPREMISE", targetType?:"SINGLE"|"ALL"|"NONE"}}>
     */
    public function getTemplateStepAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{templateId:string, id:string} $args
     * @return \AWS\Result<array{templateId?:string, id?:string, name?:string, description?:string, status?:"AWAITING_DEPENDENCIES"|"READY"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"PAUSED"|"PAUSING"|"USER_ATTENTION_REQUIRED", creationTime?:int|string|\DateTimeInterface, lastModifiedTime?:int|string|\DateTimeInterface, tools?:array<array{name?:string, url?:string}>, previous?:array<string>, next?:array<string>}>
     */
    public function getTemplateStepGroup(array $args): \AWS\Result { }

    /**
     * @param array{templateId:string, id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{templateId?:string, id?:string, name?:string, description?:string, status?:"AWAITING_DEPENDENCIES"|"READY"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"PAUSED"|"PAUSING"|"USER_ATTENTION_REQUIRED", creationTime?:int|string|\DateTimeInterface, lastModifiedTime?:int|string|\DateTimeInterface, tools?:array<array{name?:string, url?:string}>, previous?:array<string>, next?:array<string>}>
     */
    public function getTemplateStepGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{id?:string, arn?:string, name?:string, description?:string, templateId?:string, adsApplicationConfigurationId?:string, adsApplicationName?:string, status?:"CREATING"|"NOT_STARTED"|"CREATION_FAILED"|"STARTING"|"IN_PROGRESS"|"WORKFLOW_FAILED"|"PAUSED"|"PAUSING"|"PAUSING_FAILED"|"USER_ATTENTION_REQUIRED"|"DELETING"|"DELETION_FAILED"|"DELETED"|"COMPLETED", statusMessage?:string, creationTime?:int|string|\DateTimeInterface, lastStartTime?:int|string|\DateTimeInterface, lastStopTime?:int|string|\DateTimeInterface, lastModifiedTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, tools?:array<array{name?:string, url?:string}>, totalSteps?:int, completedSteps?:int, workflowInputs?:array<string, array{integerValue?:int, stringValue?:string, listOfStringsValue?:array<string>, mapOfStringValue?:array<string, string>}>, tags?:array<string, string>, workflowBucket?:string}>
     */
    public function getWorkflow(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, arn?:string, name?:string, description?:string, templateId?:string, adsApplicationConfigurationId?:string, adsApplicationName?:string, status?:"CREATING"|"NOT_STARTED"|"CREATION_FAILED"|"STARTING"|"IN_PROGRESS"|"WORKFLOW_FAILED"|"PAUSED"|"PAUSING"|"PAUSING_FAILED"|"USER_ATTENTION_REQUIRED"|"DELETING"|"DELETION_FAILED"|"DELETED"|"COMPLETED", statusMessage?:string, creationTime?:int|string|\DateTimeInterface, lastStartTime?:int|string|\DateTimeInterface, lastStopTime?:int|string|\DateTimeInterface, lastModifiedTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, tools?:array<array{name?:string, url?:string}>, totalSteps?:int, completedSteps?:int, workflowInputs?:array<string, array{integerValue?:int, stringValue?:string, listOfStringsValue?:array<string>, mapOfStringValue?:array<string, string>}>, tags?:array<string, string>, workflowBucket?:string}>
     */
    public function getWorkflowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{workflowId:string, stepGroupId:string, id:string} $args
     * @return \AWS\Result<array{name?:string, stepGroupId?:string, workflowId?:string, stepId?:string, description?:string, stepActionType?:"MANUAL"|"AUTOMATED", owner?:"AWS_MANAGED"|"CUSTOM", workflowStepAutomationConfiguration?:array{scriptLocationS3Bucket?:string, scriptLocationS3Key?:array{linux?:string, windows?:string}, command?:array{linux?:string, windows?:string}, runEnvironment?:"AWS"|"ONPREMISE", targetType?:"SINGLE"|"ALL"|"NONE"}, stepTarget?:array<string>, outputs?:array<array{name?:string, dataType?:"STRING"|"INTEGER"|"STRINGLIST"|"STRINGMAP", required?:bool, value?:array{integerValue?:int, stringValue?:string, listOfStringValue?:array<string>}}>, previous?:array<string>, next?:array<string>, status?:"AWAITING_DEPENDENCIES"|"SKIPPED"|"READY"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"PAUSED"|"USER_ATTENTION_REQUIRED", statusMessage?:string, scriptOutputLocation?:string, creationTime?:int|string|\DateTimeInterface, lastStartTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, noOfSrvCompleted?:int, noOfSrvFailed?:int, totalNoOfSrv?:int}>
     */
    public function getWorkflowStep(array $args): \AWS\Result { }

    /**
     * @param array{workflowId:string, stepGroupId:string, id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name?:string, stepGroupId?:string, workflowId?:string, stepId?:string, description?:string, stepActionType?:"MANUAL"|"AUTOMATED", owner?:"AWS_MANAGED"|"CUSTOM", workflowStepAutomationConfiguration?:array{scriptLocationS3Bucket?:string, scriptLocationS3Key?:array{linux?:string, windows?:string}, command?:array{linux?:string, windows?:string}, runEnvironment?:"AWS"|"ONPREMISE", targetType?:"SINGLE"|"ALL"|"NONE"}, stepTarget?:array<string>, outputs?:array<array{name?:string, dataType?:"STRING"|"INTEGER"|"STRINGLIST"|"STRINGMAP", required?:bool, value?:array{integerValue?:int, stringValue?:string, listOfStringValue?:array<string>}}>, previous?:array<string>, next?:array<string>, status?:"AWAITING_DEPENDENCIES"|"SKIPPED"|"READY"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"PAUSED"|"USER_ATTENTION_REQUIRED", statusMessage?:string, scriptOutputLocation?:string, creationTime?:int|string|\DateTimeInterface, lastStartTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, noOfSrvCompleted?:int, noOfSrvFailed?:int, totalNoOfSrv?:int}>
     */
    public function getWorkflowStepAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, workflowId:string} $args
     * @return \AWS\Result<array{id?:string, workflowId?:string, name?:string, description?:string, status?:"AWAITING_DEPENDENCIES"|"READY"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"PAUSED"|"PAUSING"|"USER_ATTENTION_REQUIRED", owner?:"AWS_MANAGED"|"CUSTOM", creationTime?:int|string|\DateTimeInterface, lastModifiedTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, tools?:array<array{name?:string, url?:string}>, previous?:array<string>, next?:array<string>}>
     */
    public function getWorkflowStepGroup(array $args): \AWS\Result { }

    /**
     * @param array{id:string, workflowId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, workflowId?:string, name?:string, description?:string, status?:"AWAITING_DEPENDENCIES"|"READY"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"PAUSED"|"PAUSING"|"USER_ATTENTION_REQUIRED", owner?:"AWS_MANAGED"|"CUSTOM", creationTime?:int|string|\DateTimeInterface, lastModifiedTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, tools?:array<array{name?:string, url?:string}>, previous?:array<string>, next?:array<string>}>
     */
    public function getWorkflowStepGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, plugins?:array<array{pluginId?:string, hostname?:string, status?:"HEALTHY"|"UNHEALTHY", ipAddress?:string, version?:string, registeredTime?:string}>}>
     */
    public function listPlugins(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, plugins?:array<array{pluginId?:string, hostname?:string, status?:"HEALTHY"|"UNHEALTHY", ipAddress?:string, version?:string, registeredTime?:string}>}>
     */
    public function listPluginsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{maxResults?:int, nextToken?:string, templateId:string} $args
     * @return \AWS\Result<array{nextToken?:string, templateStepGroupSummary:array<array{id?:string, name?:string, previous?:array<string>, next?:array<string>}>}>
     */
    public function listTemplateStepGroups(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, templateId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, templateStepGroupSummary:array<array{id?:string, name?:string, previous?:array<string>, next?:array<string>}>}>
     */
    public function listTemplateStepGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, templateId:string, stepGroupId:string} $args
     * @return \AWS\Result<array{nextToken?:string, templateStepSummaryList?:array<array{id?:string, stepGroupId?:string, templateId?:string, name?:string, stepActionType?:"MANUAL"|"AUTOMATED", targetType?:"SINGLE"|"ALL"|"NONE", owner?:"AWS_MANAGED"|"CUSTOM", previous?:array<string>, next?:array<string>}>}>
     */
    public function listTemplateSteps(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, templateId:string, stepGroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, templateStepSummaryList?:array<array{id?:string, stepGroupId?:string, templateId?:string, name?:string, stepActionType?:"MANUAL"|"AUTOMATED", targetType?:"SINGLE"|"ALL"|"NONE", owner?:"AWS_MANAGED"|"CUSTOM", previous?:array<string>, next?:array<string>}>}>
     */
    public function listTemplateStepsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, name?:string} $args
     * @return \AWS\Result<array{nextToken?:string, templateSummary:array<array{id?:string, name?:string, arn?:string, description?:string}>}>
     */
    public function listTemplates(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, templateSummary:array<array{id?:string, name?:string, arn?:string, description?:string}>}>
     */
    public function listTemplatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, workflowId:string} $args
     * @return \AWS\Result<array{nextToken?:string, workflowStepGroupsSummary:array<array{id?:string, name?:string, owner?:"AWS_MANAGED"|"CUSTOM", status?:"AWAITING_DEPENDENCIES"|"READY"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"PAUSED"|"PAUSING"|"USER_ATTENTION_REQUIRED", previous?:array<string>, next?:array<string>}>}>
     */
    public function listWorkflowStepGroups(array $args): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, workflowId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, workflowStepGroupsSummary:array<array{id?:string, name?:string, owner?:"AWS_MANAGED"|"CUSTOM", status?:"AWAITING_DEPENDENCIES"|"READY"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"PAUSED"|"PAUSING"|"USER_ATTENTION_REQUIRED", previous?:array<string>, next?:array<string>}>}>
     */
    public function listWorkflowStepGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, workflowId:string, stepGroupId:string} $args
     * @return \AWS\Result<array{nextToken?:string, workflowStepsSummary:array<array{stepId?:string, name?:string, stepActionType?:"MANUAL"|"AUTOMATED", owner?:"AWS_MANAGED"|"CUSTOM", previous?:array<string>, next?:array<string>, status?:"AWAITING_DEPENDENCIES"|"SKIPPED"|"READY"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"PAUSED"|"USER_ATTENTION_REQUIRED", statusMessage?:string, noOfSrvCompleted?:int, noOfSrvFailed?:int, totalNoOfSrv?:int, description?:string, scriptLocation?:string}>}>
     */
    public function listWorkflowSteps(array $args): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, workflowId:string, stepGroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, workflowStepsSummary:array<array{stepId?:string, name?:string, stepActionType?:"MANUAL"|"AUTOMATED", owner?:"AWS_MANAGED"|"CUSTOM", previous?:array<string>, next?:array<string>, status?:"AWAITING_DEPENDENCIES"|"SKIPPED"|"READY"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"PAUSED"|"USER_ATTENTION_REQUIRED", statusMessage?:string, noOfSrvCompleted?:int, noOfSrvFailed?:int, totalNoOfSrv?:int, description?:string, scriptLocation?:string}>}>
     */
    public function listWorkflowStepsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, templateId?:string, adsApplicationConfigurationName?:string, status?:"CREATING"|"NOT_STARTED"|"CREATION_FAILED"|"STARTING"|"IN_PROGRESS"|"WORKFLOW_FAILED"|"PAUSED"|"PAUSING"|"PAUSING_FAILED"|"USER_ATTENTION_REQUIRED"|"DELETING"|"DELETION_FAILED"|"DELETED"|"COMPLETED", name?:string} $args
     * @return \AWS\Result<array{nextToken?:string, migrationWorkflowSummary:array<array{id?:string, name?:string, templateId?:string, adsApplicationConfigurationName?:string, status?:"CREATING"|"NOT_STARTED"|"CREATION_FAILED"|"STARTING"|"IN_PROGRESS"|"WORKFLOW_FAILED"|"PAUSED"|"PAUSING"|"PAUSING_FAILED"|"USER_ATTENTION_REQUIRED"|"DELETING"|"DELETION_FAILED"|"DELETED"|"COMPLETED", creationTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, statusMessage?:string, completedSteps?:int, totalSteps?:int}>}>
     */
    public function listWorkflows(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, templateId?:string, adsApplicationConfigurationName?:string, status?:"CREATING"|"NOT_STARTED"|"CREATION_FAILED"|"STARTING"|"IN_PROGRESS"|"WORKFLOW_FAILED"|"PAUSED"|"PAUSING"|"PAUSING_FAILED"|"USER_ATTENTION_REQUIRED"|"DELETING"|"DELETION_FAILED"|"DELETED"|"COMPLETED", name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, migrationWorkflowSummary:array<array{id?:string, name?:string, templateId?:string, adsApplicationConfigurationName?:string, status?:"CREATING"|"NOT_STARTED"|"CREATION_FAILED"|"STARTING"|"IN_PROGRESS"|"WORKFLOW_FAILED"|"PAUSED"|"PAUSING"|"PAUSING_FAILED"|"USER_ATTENTION_REQUIRED"|"DELETING"|"DELETION_FAILED"|"DELETED"|"COMPLETED", creationTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, statusMessage?:string, completedSteps?:int, totalSteps?:int}>}>
     */
    public function listWorkflowsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{workflowId:string, stepGroupId:string, id:string} $args
     * @return \AWS\Result<array{stepGroupId?:string, workflowId?:string, id?:string, status?:"AWAITING_DEPENDENCIES"|"SKIPPED"|"READY"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"PAUSED"|"USER_ATTENTION_REQUIRED"}>
     */
    public function retryWorkflowStep(array $args): \AWS\Result { }

    /**
     * @param array{workflowId:string, stepGroupId:string, id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{stepGroupId?:string, workflowId?:string, id?:string, status?:"AWAITING_DEPENDENCIES"|"SKIPPED"|"READY"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"PAUSED"|"USER_ATTENTION_REQUIRED"}>
     */
    public function retryWorkflowStepAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{id?:string, arn?:string, status?:"CREATING"|"NOT_STARTED"|"CREATION_FAILED"|"STARTING"|"IN_PROGRESS"|"WORKFLOW_FAILED"|"PAUSED"|"PAUSING"|"PAUSING_FAILED"|"USER_ATTENTION_REQUIRED"|"DELETING"|"DELETION_FAILED"|"DELETED"|"COMPLETED", statusMessage?:string, lastStartTime?:int|string|\DateTimeInterface}>
     */
    public function startWorkflow(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, arn?:string, status?:"CREATING"|"NOT_STARTED"|"CREATION_FAILED"|"STARTING"|"IN_PROGRESS"|"WORKFLOW_FAILED"|"PAUSED"|"PAUSING"|"PAUSING_FAILED"|"USER_ATTENTION_REQUIRED"|"DELETING"|"DELETION_FAILED"|"DELETED"|"COMPLETED", statusMessage?:string, lastStartTime?:int|string|\DateTimeInterface}>
     */
    public function startWorkflowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{id?:string, arn?:string, status?:"CREATING"|"NOT_STARTED"|"CREATION_FAILED"|"STARTING"|"IN_PROGRESS"|"WORKFLOW_FAILED"|"PAUSED"|"PAUSING"|"PAUSING_FAILED"|"USER_ATTENTION_REQUIRED"|"DELETING"|"DELETION_FAILED"|"DELETED"|"COMPLETED", statusMessage?:string, lastStopTime?:int|string|\DateTimeInterface}>
     */
    public function stopWorkflow(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, arn?:string, status?:"CREATING"|"NOT_STARTED"|"CREATION_FAILED"|"STARTING"|"IN_PROGRESS"|"WORKFLOW_FAILED"|"PAUSED"|"PAUSING"|"PAUSING_FAILED"|"USER_ATTENTION_REQUIRED"|"DELETING"|"DELETION_FAILED"|"DELETED"|"COMPLETED", statusMessage?:string, lastStopTime?:int|string|\DateTimeInterface}>
     */
    public function stopWorkflowAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{id:string, templateName?:string, templateDescription?:string, clientToken?:string} $args
     * @return \AWS\Result<array{templateId?:string, templateArn?:string, tags?:array<string, string>}>
     */
    public function updateTemplate(array $args): \AWS\Result { }

    /**
     * @param array{id:string, templateName?:string, templateDescription?:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{templateId?:string, templateArn?:string, tags?:array<string, string>}>
     */
    public function updateTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, name?:string, description?:string, inputParameters?:array<string, array{integerValue?:int, stringValue?:string, listOfStringsValue?:array<string>, mapOfStringValue?:array<string, string>}>, stepTargets?:array<string>} $args
     * @return \AWS\Result<array{id?:string, arn?:string, name?:string, description?:string, templateId?:string, adsApplicationConfigurationId?:string, workflowInputs?:array<string, array{integerValue?:int, stringValue?:string, listOfStringsValue?:array<string>, mapOfStringValue?:array<string, string>}>, stepTargets?:array<string>, status?:"CREATING"|"NOT_STARTED"|"CREATION_FAILED"|"STARTING"|"IN_PROGRESS"|"WORKFLOW_FAILED"|"PAUSED"|"PAUSING"|"PAUSING_FAILED"|"USER_ATTENTION_REQUIRED"|"DELETING"|"DELETION_FAILED"|"DELETED"|"COMPLETED", creationTime?:int|string|\DateTimeInterface, lastModifiedTime?:int|string|\DateTimeInterface, tags?:array<string, string>}>
     */
    public function updateWorkflow(array $args): \AWS\Result { }

    /**
     * @param array{id:string, name?:string, description?:string, inputParameters?:array<string, array{integerValue?:int, stringValue?:string, listOfStringsValue?:array<string>, mapOfStringValue?:array<string, string>}>, stepTargets?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, arn?:string, name?:string, description?:string, templateId?:string, adsApplicationConfigurationId?:string, workflowInputs?:array<string, array{integerValue?:int, stringValue?:string, listOfStringsValue?:array<string>, mapOfStringValue?:array<string, string>}>, stepTargets?:array<string>, status?:"CREATING"|"NOT_STARTED"|"CREATION_FAILED"|"STARTING"|"IN_PROGRESS"|"WORKFLOW_FAILED"|"PAUSED"|"PAUSING"|"PAUSING_FAILED"|"USER_ATTENTION_REQUIRED"|"DELETING"|"DELETION_FAILED"|"DELETED"|"COMPLETED", creationTime?:int|string|\DateTimeInterface, lastModifiedTime?:int|string|\DateTimeInterface, tags?:array<string, string>}>
     */
    public function updateWorkflowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, stepGroupId:string, workflowId:string, name?:string, description?:string, stepActionType?:"MANUAL"|"AUTOMATED", workflowStepAutomationConfiguration?:array{scriptLocationS3Bucket?:string, scriptLocationS3Key?:array{linux?:string, windows?:string}, command?:array{linux?:string, windows?:string}, runEnvironment?:"AWS"|"ONPREMISE", targetType?:"SINGLE"|"ALL"|"NONE"}, stepTarget?:array<string>, outputs?:array<array{name?:string, dataType?:"STRING"|"INTEGER"|"STRINGLIST"|"STRINGMAP", required?:bool, value?:array{integerValue?:int, stringValue?:string, listOfStringValue?:array<string>}}>, previous?:array<string>, next?:array<string>, status?:"AWAITING_DEPENDENCIES"|"SKIPPED"|"READY"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"PAUSED"|"USER_ATTENTION_REQUIRED"} $args
     * @return \AWS\Result<array{id?:string, stepGroupId?:string, workflowId?:string, name?:string}>
     */
    public function updateWorkflowStep(array $args): \AWS\Result { }

    /**
     * @param array{id:string, stepGroupId:string, workflowId:string, name?:string, description?:string, stepActionType?:"MANUAL"|"AUTOMATED", workflowStepAutomationConfiguration?:array{scriptLocationS3Bucket?:string, scriptLocationS3Key?:array{linux?:string, windows?:string}, command?:array{linux?:string, windows?:string}, runEnvironment?:"AWS"|"ONPREMISE", targetType?:"SINGLE"|"ALL"|"NONE"}, stepTarget?:array<string>, outputs?:array<array{name?:string, dataType?:"STRING"|"INTEGER"|"STRINGLIST"|"STRINGMAP", required?:bool, value?:array{integerValue?:int, stringValue?:string, listOfStringValue?:array<string>}}>, previous?:array<string>, next?:array<string>, status?:"AWAITING_DEPENDENCIES"|"SKIPPED"|"READY"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"PAUSED"|"USER_ATTENTION_REQUIRED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, stepGroupId?:string, workflowId?:string, name?:string}>
     */
    public function updateWorkflowStepAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{workflowId:string, id:string, name?:string, description?:string, next?:array<string>, previous?:array<string>} $args
     * @return \AWS\Result<array{workflowId?:string, name?:string, id?:string, description?:string, tools?:array<array{name?:string, url?:string}>, next?:array<string>, previous?:array<string>, lastModifiedTime?:int|string|\DateTimeInterface}>
     */
    public function updateWorkflowStepGroup(array $args): \AWS\Result { }

    /**
     * @param array{workflowId:string, id:string, name?:string, description?:string, next?:array<string>, previous?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{workflowId?:string, name?:string, id?:string, description?:string, tools?:array<array{name?:string, url?:string}>, next?:array<string>, previous?:array<string>, lastModifiedTime?:int|string|\DateTimeInterface}>
     */
    public function updateWorkflowStepGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
