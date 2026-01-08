<?php
namespace AWS\FIS;

class FISClient
{
    /**
     * @param array{clientToken:string, description:string, stopConditions:array<array{source:string, value?:string}>, targets?:array<string, array{resourceType:string, resourceArns?:array<string>, resourceTags?:array<string, string>, filters?:array<array{path:string, values:array<string>}>, selectionMode:string, parameters?:array<string, string>}>, actions:array<string, array{actionId:string, description?:string, parameters?:array<string, string>, targets?:array<string, string>, startAfter?:array<string>}>, roleArn:string, tags?:array<string, string>, logConfiguration?:array{cloudWatchLogsConfiguration?:array{logGroupArn:string}, s3Configuration?:array{bucketName:string, prefix?:string}, logSchemaVersion:int}, experimentOptions?:array{accountTargeting?:"single-account"|"multi-account", emptyTargetResolutionMode?:"fail"|"skip"}, experimentReportConfiguration?:array{outputs?:array{s3Configuration?:array{bucketName?:string, prefix?:string}}, dataSources?:array{cloudWatchDashboards?:array<array{dashboardIdentifier?:string}>}, preExperimentDuration?:string, postExperimentDuration?:string}} $args
     * @return \AWS\Result<array{experimentTemplate?:array{id?:string, arn?:string, description?:string, targets?:array<string, array{resourceType?:string, resourceArns?:array<string>, resourceTags?:array<string, string>, filters?:array<array{path?:string, values?:array<string>}>, selectionMode?:string, parameters?:array<string, string>}>, actions?:array<string, array{actionId?:string, description?:string, parameters?:array<string, string>, targets?:array<string, string>, startAfter?:array<string>}>, stopConditions?:array<array{source?:string, value?:string}>, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, roleArn?:string, tags?:array<string, string>, logConfiguration?:array{cloudWatchLogsConfiguration?:array{logGroupArn?:string}, s3Configuration?:array{bucketName?:string, prefix?:string}, logSchemaVersion?:int}, experimentOptions?:array{accountTargeting?:"single-account"|"multi-account", emptyTargetResolutionMode?:"fail"|"skip"}, targetAccountConfigurationsCount?:int, experimentReportConfiguration?:array{outputs?:array{s3Configuration?:array{bucketName?:string, prefix?:string}}, dataSources?:array{cloudWatchDashboards?:array<array{dashboardIdentifier?:string}>}, preExperimentDuration?:string, postExperimentDuration?:string}}}>
     */
    public function createExperimentTemplate(array $args): \AWS\Result { }

    /**
     * @param array{clientToken:string, description:string, stopConditions:array<array{source:string, value?:string}>, targets?:array<string, array{resourceType:string, resourceArns?:array<string>, resourceTags?:array<string, string>, filters?:array<array{path:string, values:array<string>}>, selectionMode:string, parameters?:array<string, string>}>, actions:array<string, array{actionId:string, description?:string, parameters?:array<string, string>, targets?:array<string, string>, startAfter?:array<string>}>, roleArn:string, tags?:array<string, string>, logConfiguration?:array{cloudWatchLogsConfiguration?:array{logGroupArn:string}, s3Configuration?:array{bucketName:string, prefix?:string}, logSchemaVersion:int}, experimentOptions?:array{accountTargeting?:"single-account"|"multi-account", emptyTargetResolutionMode?:"fail"|"skip"}, experimentReportConfiguration?:array{outputs?:array{s3Configuration?:array{bucketName?:string, prefix?:string}}, dataSources?:array{cloudWatchDashboards?:array<array{dashboardIdentifier?:string}>}, preExperimentDuration?:string, postExperimentDuration?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{experimentTemplate?:array{id?:string, arn?:string, description?:string, targets?:array<string, array{resourceType?:string, resourceArns?:array<string>, resourceTags?:array<string, string>, filters?:array<array{path?:string, values?:array<string>}>, selectionMode?:string, parameters?:array<string, string>}>, actions?:array<string, array{actionId?:string, description?:string, parameters?:array<string, string>, targets?:array<string, string>, startAfter?:array<string>}>, stopConditions?:array<array{source?:string, value?:string}>, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, roleArn?:string, tags?:array<string, string>, logConfiguration?:array{cloudWatchLogsConfiguration?:array{logGroupArn?:string}, s3Configuration?:array{bucketName?:string, prefix?:string}, logSchemaVersion?:int}, experimentOptions?:array{accountTargeting?:"single-account"|"multi-account", emptyTargetResolutionMode?:"fail"|"skip"}, targetAccountConfigurationsCount?:int, experimentReportConfiguration?:array{outputs?:array{s3Configuration?:array{bucketName?:string, prefix?:string}}, dataSources?:array{cloudWatchDashboards?:array<array{dashboardIdentifier?:string}>}, preExperimentDuration?:string, postExperimentDuration?:string}}}>
     */
    public function createExperimentTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, experimentTemplateId:string, accountId:string, roleArn:string, description?:string} $args
     * @return \AWS\Result<array{targetAccountConfiguration?:array{roleArn?:string, accountId?:string, description?:string}}>
     */
    public function createTargetAccountConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, experimentTemplateId:string, accountId:string, roleArn:string, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{targetAccountConfiguration?:array{roleArn?:string, accountId?:string, description?:string}}>
     */
    public function createTargetAccountConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{experimentTemplate?:array{id?:string, arn?:string, description?:string, targets?:array<string, array{resourceType?:string, resourceArns?:array<string>, resourceTags?:array<string, string>, filters?:array<array{path?:string, values?:array<string>}>, selectionMode?:string, parameters?:array<string, string>}>, actions?:array<string, array{actionId?:string, description?:string, parameters?:array<string, string>, targets?:array<string, string>, startAfter?:array<string>}>, stopConditions?:array<array{source?:string, value?:string}>, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, roleArn?:string, tags?:array<string, string>, logConfiguration?:array{cloudWatchLogsConfiguration?:array{logGroupArn?:string}, s3Configuration?:array{bucketName?:string, prefix?:string}, logSchemaVersion?:int}, experimentOptions?:array{accountTargeting?:"single-account"|"multi-account", emptyTargetResolutionMode?:"fail"|"skip"}, targetAccountConfigurationsCount?:int, experimentReportConfiguration?:array{outputs?:array{s3Configuration?:array{bucketName?:string, prefix?:string}}, dataSources?:array{cloudWatchDashboards?:array<array{dashboardIdentifier?:string}>}, preExperimentDuration?:string, postExperimentDuration?:string}}}>
     */
    public function deleteExperimentTemplate(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{experimentTemplate?:array{id?:string, arn?:string, description?:string, targets?:array<string, array{resourceType?:string, resourceArns?:array<string>, resourceTags?:array<string, string>, filters?:array<array{path?:string, values?:array<string>}>, selectionMode?:string, parameters?:array<string, string>}>, actions?:array<string, array{actionId?:string, description?:string, parameters?:array<string, string>, targets?:array<string, string>, startAfter?:array<string>}>, stopConditions?:array<array{source?:string, value?:string}>, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, roleArn?:string, tags?:array<string, string>, logConfiguration?:array{cloudWatchLogsConfiguration?:array{logGroupArn?:string}, s3Configuration?:array{bucketName?:string, prefix?:string}, logSchemaVersion?:int}, experimentOptions?:array{accountTargeting?:"single-account"|"multi-account", emptyTargetResolutionMode?:"fail"|"skip"}, targetAccountConfigurationsCount?:int, experimentReportConfiguration?:array{outputs?:array{s3Configuration?:array{bucketName?:string, prefix?:string}}, dataSources?:array{cloudWatchDashboards?:array<array{dashboardIdentifier?:string}>}, preExperimentDuration?:string, postExperimentDuration?:string}}}>
     */
    public function deleteExperimentTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{experimentTemplateId:string, accountId:string} $args
     * @return \AWS\Result<array{targetAccountConfiguration?:array{roleArn?:string, accountId?:string, description?:string}}>
     */
    public function deleteTargetAccountConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{experimentTemplateId:string, accountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{targetAccountConfiguration?:array{roleArn?:string, accountId?:string, description?:string}}>
     */
    public function deleteTargetAccountConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{action?:array{id?:string, arn?:string, description?:string, parameters?:array<string, array{description?:string, required?:bool}>, targets?:array<string, array{resourceType?:string}>, tags?:array<string, string>}}>
     */
    public function getAction(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{action?:array{id?:string, arn?:string, description?:string, parameters?:array<string, array{description?:string, required?:bool}>, targets?:array<string, array{resourceType?:string}>, tags?:array<string, string>}}>
     */
    public function getActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{experiment?:array{id?:string, arn?:string, experimentTemplateId?:string, roleArn?:string, state?:array{status?:"pending"|"initiating"|"running"|"completed"|"stopping"|"stopped"|"failed"|"cancelled", reason?:string, error?:array{accountId?:string, code?:string, location?:string}}, targets?:array<string, array{resourceType?:string, resourceArns?:array<string>, resourceTags?:array<string, string>, filters?:array<array{path?:string, values?:array<string>}>, selectionMode?:string, parameters?:array<string, string>}>, actions?:array<string, array{actionId?:string, description?:string, parameters?:array<string, string>, targets?:array<string, string>, startAfter?:array<string>, state?:array{status?:"pending"|"initiating"|"running"|"completed"|"cancelled"|"stopping"|"stopped"|"failed"|"skipped", reason?:string}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}>, stopConditions?:array<array{source?:string, value?:string}>, creationTime?:int|string|\DateTimeInterface, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, tags?:array<string, string>, logConfiguration?:array{cloudWatchLogsConfiguration?:array{logGroupArn?:string}, s3Configuration?:array{bucketName?:string, prefix?:string}, logSchemaVersion?:int}, experimentOptions?:array{accountTargeting?:"single-account"|"multi-account", emptyTargetResolutionMode?:"fail"|"skip", actionsMode?:"skip-all"|"run-all"}, targetAccountConfigurationsCount?:int, experimentReportConfiguration?:array{outputs?:array{s3Configuration?:array{bucketName?:string, prefix?:string}}, dataSources?:array{cloudWatchDashboards?:array<array{dashboardIdentifier?:string}>}, preExperimentDuration?:string, postExperimentDuration?:string}, experimentReport?:array{state?:array{status?:"pending"|"running"|"completed"|"cancelled"|"failed", reason?:string, error?:array{code?:string}}, s3Reports?:array<array{arn?:string, reportType?:string}>}}}>
     */
    public function getExperiment(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{experiment?:array{id?:string, arn?:string, experimentTemplateId?:string, roleArn?:string, state?:array{status?:"pending"|"initiating"|"running"|"completed"|"stopping"|"stopped"|"failed"|"cancelled", reason?:string, error?:array{accountId?:string, code?:string, location?:string}}, targets?:array<string, array{resourceType?:string, resourceArns?:array<string>, resourceTags?:array<string, string>, filters?:array<array{path?:string, values?:array<string>}>, selectionMode?:string, parameters?:array<string, string>}>, actions?:array<string, array{actionId?:string, description?:string, parameters?:array<string, string>, targets?:array<string, string>, startAfter?:array<string>, state?:array{status?:"pending"|"initiating"|"running"|"completed"|"cancelled"|"stopping"|"stopped"|"failed"|"skipped", reason?:string}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}>, stopConditions?:array<array{source?:string, value?:string}>, creationTime?:int|string|\DateTimeInterface, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, tags?:array<string, string>, logConfiguration?:array{cloudWatchLogsConfiguration?:array{logGroupArn?:string}, s3Configuration?:array{bucketName?:string, prefix?:string}, logSchemaVersion?:int}, experimentOptions?:array{accountTargeting?:"single-account"|"multi-account", emptyTargetResolutionMode?:"fail"|"skip", actionsMode?:"skip-all"|"run-all"}, targetAccountConfigurationsCount?:int, experimentReportConfiguration?:array{outputs?:array{s3Configuration?:array{bucketName?:string, prefix?:string}}, dataSources?:array{cloudWatchDashboards?:array<array{dashboardIdentifier?:string}>}, preExperimentDuration?:string, postExperimentDuration?:string}, experimentReport?:array{state?:array{status?:"pending"|"running"|"completed"|"cancelled"|"failed", reason?:string, error?:array{code?:string}}, s3Reports?:array<array{arn?:string, reportType?:string}>}}}>
     */
    public function getExperimentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{experimentId:string, accountId:string} $args
     * @return \AWS\Result<array{targetAccountConfiguration?:array{roleArn?:string, accountId?:string, description?:string}}>
     */
    public function getExperimentTargetAccountConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{experimentId:string, accountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{targetAccountConfiguration?:array{roleArn?:string, accountId?:string, description?:string}}>
     */
    public function getExperimentTargetAccountConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{experimentTemplate?:array{id?:string, arn?:string, description?:string, targets?:array<string, array{resourceType?:string, resourceArns?:array<string>, resourceTags?:array<string, string>, filters?:array<array{path?:string, values?:array<string>}>, selectionMode?:string, parameters?:array<string, string>}>, actions?:array<string, array{actionId?:string, description?:string, parameters?:array<string, string>, targets?:array<string, string>, startAfter?:array<string>}>, stopConditions?:array<array{source?:string, value?:string}>, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, roleArn?:string, tags?:array<string, string>, logConfiguration?:array{cloudWatchLogsConfiguration?:array{logGroupArn?:string}, s3Configuration?:array{bucketName?:string, prefix?:string}, logSchemaVersion?:int}, experimentOptions?:array{accountTargeting?:"single-account"|"multi-account", emptyTargetResolutionMode?:"fail"|"skip"}, targetAccountConfigurationsCount?:int, experimentReportConfiguration?:array{outputs?:array{s3Configuration?:array{bucketName?:string, prefix?:string}}, dataSources?:array{cloudWatchDashboards?:array<array{dashboardIdentifier?:string}>}, preExperimentDuration?:string, postExperimentDuration?:string}}}>
     */
    public function getExperimentTemplate(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{experimentTemplate?:array{id?:string, arn?:string, description?:string, targets?:array<string, array{resourceType?:string, resourceArns?:array<string>, resourceTags?:array<string, string>, filters?:array<array{path?:string, values?:array<string>}>, selectionMode?:string, parameters?:array<string, string>}>, actions?:array<string, array{actionId?:string, description?:string, parameters?:array<string, string>, targets?:array<string, string>, startAfter?:array<string>}>, stopConditions?:array<array{source?:string, value?:string}>, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, roleArn?:string, tags?:array<string, string>, logConfiguration?:array{cloudWatchLogsConfiguration?:array{logGroupArn?:string}, s3Configuration?:array{bucketName?:string, prefix?:string}, logSchemaVersion?:int}, experimentOptions?:array{accountTargeting?:"single-account"|"multi-account", emptyTargetResolutionMode?:"fail"|"skip"}, targetAccountConfigurationsCount?:int, experimentReportConfiguration?:array{outputs?:array{s3Configuration?:array{bucketName?:string, prefix?:string}}, dataSources?:array{cloudWatchDashboards?:array<array{dashboardIdentifier?:string}>}, preExperimentDuration?:string, postExperimentDuration?:string}}}>
     */
    public function getExperimentTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{safetyLever?:array{id?:string, arn?:string, state?:array{status?:"disengaged"|"engaged"|"engaging", reason?:string}}}>
     */
    public function getSafetyLever(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{safetyLever?:array{id?:string, arn?:string, state?:array{status?:"disengaged"|"engaged"|"engaging", reason?:string}}}>
     */
    public function getSafetyLeverAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{experimentTemplateId:string, accountId:string} $args
     * @return \AWS\Result<array{targetAccountConfiguration?:array{roleArn?:string, accountId?:string, description?:string}}>
     */
    public function getTargetAccountConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{experimentTemplateId:string, accountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{targetAccountConfiguration?:array{roleArn?:string, accountId?:string, description?:string}}>
     */
    public function getTargetAccountConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceType:string} $args
     * @return \AWS\Result<array{targetResourceType?:array{resourceType?:string, description?:string, parameters?:array<string, array{description?:string, required?:bool}>}}>
     */
    public function getTargetResourceType(array $args): \AWS\Result { }

    /**
     * @param array{resourceType:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{targetResourceType?:array{resourceType?:string, description?:string, parameters?:array<string, array{description?:string, required?:bool}>}}>
     */
    public function getTargetResourceTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{actions?:array<array{id?:string, arn?:string, description?:string, targets?:array<string, array{resourceType?:string}>, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listActions(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{actions?:array<array{id?:string, arn?:string, description?:string, targets?:array<string, array{resourceType?:string}>, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listActionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{experimentId:string, maxResults?:int, nextToken?:string, targetName?:string} $args
     * @return \AWS\Result<array{resolvedTargets?:array<array{resourceType?:string, targetName?:string, targetInformation?:array<string, string>}>, nextToken?:string}>
     */
    public function listExperimentResolvedTargets(array $args): \AWS\Result { }

    /**
     * @param array{experimentId:string, maxResults?:int, nextToken?:string, targetName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{resolvedTargets?:array<array{resourceType?:string, targetName?:string, targetInformation?:array<string, string>}>, nextToken?:string}>
     */
    public function listExperimentResolvedTargetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{experimentId:string, nextToken?:string} $args
     * @return \AWS\Result<array{targetAccountConfigurations?:array<array{roleArn?:string, accountId?:string, description?:string}>, nextToken?:string}>
     */
    public function listExperimentTargetAccountConfigurations(array $args): \AWS\Result { }

    /**
     * @param array{experimentId:string, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{targetAccountConfigurations?:array<array{roleArn?:string, accountId?:string, description?:string}>, nextToken?:string}>
     */
    public function listExperimentTargetAccountConfigurationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{experimentTemplates?:array<array{id?:string, arn?:string, description?:string, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listExperimentTemplates(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{experimentTemplates?:array<array{id?:string, arn?:string, description?:string, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listExperimentTemplatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, experimentTemplateId?:string} $args
     * @return \AWS\Result<array{experiments?:array<array{id?:string, arn?:string, experimentTemplateId?:string, state?:array{status?:"pending"|"initiating"|"running"|"completed"|"stopping"|"stopped"|"failed"|"cancelled", reason?:string, error?:array{accountId?:string, code?:string, location?:string}}, creationTime?:int|string|\DateTimeInterface, tags?:array<string, string>, experimentOptions?:array{accountTargeting?:"single-account"|"multi-account", emptyTargetResolutionMode?:"fail"|"skip", actionsMode?:"skip-all"|"run-all"}}>, nextToken?:string}>
     */
    public function listExperiments(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, experimentTemplateId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{experiments?:array<array{id?:string, arn?:string, experimentTemplateId?:string, state?:array{status?:"pending"|"initiating"|"running"|"completed"|"stopping"|"stopped"|"failed"|"cancelled", reason?:string, error?:array{accountId?:string, code?:string, location?:string}}, creationTime?:int|string|\DateTimeInterface, tags?:array<string, string>, experimentOptions?:array{accountTargeting?:"single-account"|"multi-account", emptyTargetResolutionMode?:"fail"|"skip", actionsMode?:"skip-all"|"run-all"}}>, nextToken?:string}>
     */
    public function listExperimentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{experimentTemplateId:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{targetAccountConfigurations?:array<array{roleArn?:string, accountId?:string, description?:string}>, nextToken?:string}>
     */
    public function listTargetAccountConfigurations(array $args): \AWS\Result { }

    /**
     * @param array{experimentTemplateId:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{targetAccountConfigurations?:array<array{roleArn?:string, accountId?:string, description?:string}>, nextToken?:string}>
     */
    public function listTargetAccountConfigurationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{targetResourceTypes?:array<array{resourceType?:string, description?:string}>, nextToken?:string}>
     */
    public function listTargetResourceTypes(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{targetResourceTypes?:array<array{resourceType?:string, description?:string}>, nextToken?:string}>
     */
    public function listTargetResourceTypesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken:string, experimentTemplateId:string, experimentOptions?:array{actionsMode?:"skip-all"|"run-all"}, tags?:array<string, string>} $args
     * @return \AWS\Result<array{experiment?:array{id?:string, arn?:string, experimentTemplateId?:string, roleArn?:string, state?:array{status?:"pending"|"initiating"|"running"|"completed"|"stopping"|"stopped"|"failed"|"cancelled", reason?:string, error?:array{accountId?:string, code?:string, location?:string}}, targets?:array<string, array{resourceType?:string, resourceArns?:array<string>, resourceTags?:array<string, string>, filters?:array<array{path?:string, values?:array<string>}>, selectionMode?:string, parameters?:array<string, string>}>, actions?:array<string, array{actionId?:string, description?:string, parameters?:array<string, string>, targets?:array<string, string>, startAfter?:array<string>, state?:array{status?:"pending"|"initiating"|"running"|"completed"|"cancelled"|"stopping"|"stopped"|"failed"|"skipped", reason?:string}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}>, stopConditions?:array<array{source?:string, value?:string}>, creationTime?:int|string|\DateTimeInterface, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, tags?:array<string, string>, logConfiguration?:array{cloudWatchLogsConfiguration?:array{logGroupArn?:string}, s3Configuration?:array{bucketName?:string, prefix?:string}, logSchemaVersion?:int}, experimentOptions?:array{accountTargeting?:"single-account"|"multi-account", emptyTargetResolutionMode?:"fail"|"skip", actionsMode?:"skip-all"|"run-all"}, targetAccountConfigurationsCount?:int, experimentReportConfiguration?:array{outputs?:array{s3Configuration?:array{bucketName?:string, prefix?:string}}, dataSources?:array{cloudWatchDashboards?:array<array{dashboardIdentifier?:string}>}, preExperimentDuration?:string, postExperimentDuration?:string}, experimentReport?:array{state?:array{status?:"pending"|"running"|"completed"|"cancelled"|"failed", reason?:string, error?:array{code?:string}}, s3Reports?:array<array{arn?:string, reportType?:string}>}}}>
     */
    public function startExperiment(array $args): \AWS\Result { }

    /**
     * @param array{clientToken:string, experimentTemplateId:string, experimentOptions?:array{actionsMode?:"skip-all"|"run-all"}, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{experiment?:array{id?:string, arn?:string, experimentTemplateId?:string, roleArn?:string, state?:array{status?:"pending"|"initiating"|"running"|"completed"|"stopping"|"stopped"|"failed"|"cancelled", reason?:string, error?:array{accountId?:string, code?:string, location?:string}}, targets?:array<string, array{resourceType?:string, resourceArns?:array<string>, resourceTags?:array<string, string>, filters?:array<array{path?:string, values?:array<string>}>, selectionMode?:string, parameters?:array<string, string>}>, actions?:array<string, array{actionId?:string, description?:string, parameters?:array<string, string>, targets?:array<string, string>, startAfter?:array<string>, state?:array{status?:"pending"|"initiating"|"running"|"completed"|"cancelled"|"stopping"|"stopped"|"failed"|"skipped", reason?:string}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}>, stopConditions?:array<array{source?:string, value?:string}>, creationTime?:int|string|\DateTimeInterface, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, tags?:array<string, string>, logConfiguration?:array{cloudWatchLogsConfiguration?:array{logGroupArn?:string}, s3Configuration?:array{bucketName?:string, prefix?:string}, logSchemaVersion?:int}, experimentOptions?:array{accountTargeting?:"single-account"|"multi-account", emptyTargetResolutionMode?:"fail"|"skip", actionsMode?:"skip-all"|"run-all"}, targetAccountConfigurationsCount?:int, experimentReportConfiguration?:array{outputs?:array{s3Configuration?:array{bucketName?:string, prefix?:string}}, dataSources?:array{cloudWatchDashboards?:array<array{dashboardIdentifier?:string}>}, preExperimentDuration?:string, postExperimentDuration?:string}, experimentReport?:array{state?:array{status?:"pending"|"running"|"completed"|"cancelled"|"failed", reason?:string, error?:array{code?:string}}, s3Reports?:array<array{arn?:string, reportType?:string}>}}}>
     */
    public function startExperimentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{experiment?:array{id?:string, arn?:string, experimentTemplateId?:string, roleArn?:string, state?:array{status?:"pending"|"initiating"|"running"|"completed"|"stopping"|"stopped"|"failed"|"cancelled", reason?:string, error?:array{accountId?:string, code?:string, location?:string}}, targets?:array<string, array{resourceType?:string, resourceArns?:array<string>, resourceTags?:array<string, string>, filters?:array<array{path?:string, values?:array<string>}>, selectionMode?:string, parameters?:array<string, string>}>, actions?:array<string, array{actionId?:string, description?:string, parameters?:array<string, string>, targets?:array<string, string>, startAfter?:array<string>, state?:array{status?:"pending"|"initiating"|"running"|"completed"|"cancelled"|"stopping"|"stopped"|"failed"|"skipped", reason?:string}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}>, stopConditions?:array<array{source?:string, value?:string}>, creationTime?:int|string|\DateTimeInterface, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, tags?:array<string, string>, logConfiguration?:array{cloudWatchLogsConfiguration?:array{logGroupArn?:string}, s3Configuration?:array{bucketName?:string, prefix?:string}, logSchemaVersion?:int}, experimentOptions?:array{accountTargeting?:"single-account"|"multi-account", emptyTargetResolutionMode?:"fail"|"skip", actionsMode?:"skip-all"|"run-all"}, targetAccountConfigurationsCount?:int, experimentReportConfiguration?:array{outputs?:array{s3Configuration?:array{bucketName?:string, prefix?:string}}, dataSources?:array{cloudWatchDashboards?:array<array{dashboardIdentifier?:string}>}, preExperimentDuration?:string, postExperimentDuration?:string}, experimentReport?:array{state?:array{status?:"pending"|"running"|"completed"|"cancelled"|"failed", reason?:string, error?:array{code?:string}}, s3Reports?:array<array{arn?:string, reportType?:string}>}}}>
     */
    public function stopExperiment(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{experiment?:array{id?:string, arn?:string, experimentTemplateId?:string, roleArn?:string, state?:array{status?:"pending"|"initiating"|"running"|"completed"|"stopping"|"stopped"|"failed"|"cancelled", reason?:string, error?:array{accountId?:string, code?:string, location?:string}}, targets?:array<string, array{resourceType?:string, resourceArns?:array<string>, resourceTags?:array<string, string>, filters?:array<array{path?:string, values?:array<string>}>, selectionMode?:string, parameters?:array<string, string>}>, actions?:array<string, array{actionId?:string, description?:string, parameters?:array<string, string>, targets?:array<string, string>, startAfter?:array<string>, state?:array{status?:"pending"|"initiating"|"running"|"completed"|"cancelled"|"stopping"|"stopped"|"failed"|"skipped", reason?:string}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}>, stopConditions?:array<array{source?:string, value?:string}>, creationTime?:int|string|\DateTimeInterface, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, tags?:array<string, string>, logConfiguration?:array{cloudWatchLogsConfiguration?:array{logGroupArn?:string}, s3Configuration?:array{bucketName?:string, prefix?:string}, logSchemaVersion?:int}, experimentOptions?:array{accountTargeting?:"single-account"|"multi-account", emptyTargetResolutionMode?:"fail"|"skip", actionsMode?:"skip-all"|"run-all"}, targetAccountConfigurationsCount?:int, experimentReportConfiguration?:array{outputs?:array{s3Configuration?:array{bucketName?:string, prefix?:string}}, dataSources?:array{cloudWatchDashboards?:array<array{dashboardIdentifier?:string}>}, preExperimentDuration?:string, postExperimentDuration?:string}, experimentReport?:array{state?:array{status?:"pending"|"running"|"completed"|"cancelled"|"failed", reason?:string, error?:array{code?:string}}, s3Reports?:array<array{arn?:string, reportType?:string}>}}}>
     */
    public function stopExperimentAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{resourceArn:string, tagKeys?:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tagKeys?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, description?:string, stopConditions?:array<array{source:string, value?:string}>, targets?:array<string, array{resourceType:string, resourceArns?:array<string>, resourceTags?:array<string, string>, filters?:array<array{path:string, values:array<string>}>, selectionMode:string, parameters?:array<string, string>}>, actions?:array<string, array{actionId?:string, description?:string, parameters?:array<string, string>, targets?:array<string, string>, startAfter?:array<string>}>, roleArn?:string, logConfiguration?:array{cloudWatchLogsConfiguration?:array{logGroupArn:string}, s3Configuration?:array{bucketName:string, prefix?:string}, logSchemaVersion?:int}, experimentOptions?:array{emptyTargetResolutionMode?:"fail"|"skip"}, experimentReportConfiguration?:array{outputs?:array{s3Configuration?:array{bucketName?:string, prefix?:string}}, dataSources?:array{cloudWatchDashboards?:array<array{dashboardIdentifier?:string}>}, preExperimentDuration?:string, postExperimentDuration?:string}} $args
     * @return \AWS\Result<array{experimentTemplate?:array{id?:string, arn?:string, description?:string, targets?:array<string, array{resourceType?:string, resourceArns?:array<string>, resourceTags?:array<string, string>, filters?:array<array{path?:string, values?:array<string>}>, selectionMode?:string, parameters?:array<string, string>}>, actions?:array<string, array{actionId?:string, description?:string, parameters?:array<string, string>, targets?:array<string, string>, startAfter?:array<string>}>, stopConditions?:array<array{source?:string, value?:string}>, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, roleArn?:string, tags?:array<string, string>, logConfiguration?:array{cloudWatchLogsConfiguration?:array{logGroupArn?:string}, s3Configuration?:array{bucketName?:string, prefix?:string}, logSchemaVersion?:int}, experimentOptions?:array{accountTargeting?:"single-account"|"multi-account", emptyTargetResolutionMode?:"fail"|"skip"}, targetAccountConfigurationsCount?:int, experimentReportConfiguration?:array{outputs?:array{s3Configuration?:array{bucketName?:string, prefix?:string}}, dataSources?:array{cloudWatchDashboards?:array<array{dashboardIdentifier?:string}>}, preExperimentDuration?:string, postExperimentDuration?:string}}}>
     */
    public function updateExperimentTemplate(array $args): \AWS\Result { }

    /**
     * @param array{id:string, description?:string, stopConditions?:array<array{source:string, value?:string}>, targets?:array<string, array{resourceType:string, resourceArns?:array<string>, resourceTags?:array<string, string>, filters?:array<array{path:string, values:array<string>}>, selectionMode:string, parameters?:array<string, string>}>, actions?:array<string, array{actionId?:string, description?:string, parameters?:array<string, string>, targets?:array<string, string>, startAfter?:array<string>}>, roleArn?:string, logConfiguration?:array{cloudWatchLogsConfiguration?:array{logGroupArn:string}, s3Configuration?:array{bucketName:string, prefix?:string}, logSchemaVersion?:int}, experimentOptions?:array{emptyTargetResolutionMode?:"fail"|"skip"}, experimentReportConfiguration?:array{outputs?:array{s3Configuration?:array{bucketName?:string, prefix?:string}}, dataSources?:array{cloudWatchDashboards?:array<array{dashboardIdentifier?:string}>}, preExperimentDuration?:string, postExperimentDuration?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{experimentTemplate?:array{id?:string, arn?:string, description?:string, targets?:array<string, array{resourceType?:string, resourceArns?:array<string>, resourceTags?:array<string, string>, filters?:array<array{path?:string, values?:array<string>}>, selectionMode?:string, parameters?:array<string, string>}>, actions?:array<string, array{actionId?:string, description?:string, parameters?:array<string, string>, targets?:array<string, string>, startAfter?:array<string>}>, stopConditions?:array<array{source?:string, value?:string}>, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, roleArn?:string, tags?:array<string, string>, logConfiguration?:array{cloudWatchLogsConfiguration?:array{logGroupArn?:string}, s3Configuration?:array{bucketName?:string, prefix?:string}, logSchemaVersion?:int}, experimentOptions?:array{accountTargeting?:"single-account"|"multi-account", emptyTargetResolutionMode?:"fail"|"skip"}, targetAccountConfigurationsCount?:int, experimentReportConfiguration?:array{outputs?:array{s3Configuration?:array{bucketName?:string, prefix?:string}}, dataSources?:array{cloudWatchDashboards?:array<array{dashboardIdentifier?:string}>}, preExperimentDuration?:string, postExperimentDuration?:string}}}>
     */
    public function updateExperimentTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, state:array{status:"disengaged"|"engaged", reason:string}} $args
     * @return \AWS\Result<array{safetyLever?:array{id?:string, arn?:string, state?:array{status?:"disengaged"|"engaged"|"engaging", reason?:string}}}>
     */
    public function updateSafetyLeverState(array $args): \AWS\Result { }

    /**
     * @param array{id:string, state:array{status:"disengaged"|"engaged", reason:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{safetyLever?:array{id?:string, arn?:string, state?:array{status?:"disengaged"|"engaged"|"engaging", reason?:string}}}>
     */
    public function updateSafetyLeverStateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{experimentTemplateId:string, accountId:string, roleArn?:string, description?:string} $args
     * @return \AWS\Result<array{targetAccountConfiguration?:array{roleArn?:string, accountId?:string, description?:string}}>
     */
    public function updateTargetAccountConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{experimentTemplateId:string, accountId:string, roleArn?:string, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{targetAccountConfiguration?:array{roleArn?:string, accountId?:string, description?:string}}>
     */
    public function updateTargetAccountConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
