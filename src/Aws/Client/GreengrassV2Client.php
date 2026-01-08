<?php
namespace AWS\GreengrassV2;

class GreengrassV2Client
{
    /**
     * @param array{roleArn:string} $args
     * @return \AWS\Result<array{associatedAt?:string}>
     */
    public function associateServiceRoleToAccount(array $args): \AWS\Result { }

    /**
     * @param array{roleArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{associatedAt?:string}>
     */
    public function associateServiceRoleToAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{entries?:array<array{thingName:string}>, coreDeviceThingName:string} $args
     * @return \AWS\Result<array{errorEntries?:array<array{thingName?:string, code?:string, message?:string}>}>
     */
    public function batchAssociateClientDeviceWithCoreDevice(array $args): \AWS\Result { }

    /**
     * @param array{entries?:array<array{thingName:string}>, coreDeviceThingName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{errorEntries?:array<array{thingName?:string, code?:string, message?:string}>}>
     */
    public function batchAssociateClientDeviceWithCoreDeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{entries?:array<array{thingName:string}>, coreDeviceThingName:string} $args
     * @return \AWS\Result<array{errorEntries?:array<array{thingName?:string, code?:string, message?:string}>}>
     */
    public function batchDisassociateClientDeviceFromCoreDevice(array $args): \AWS\Result { }

    /**
     * @param array{entries?:array<array{thingName:string}>, coreDeviceThingName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{errorEntries?:array<array{thingName?:string, code?:string, message?:string}>}>
     */
    public function batchDisassociateClientDeviceFromCoreDeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deploymentId:string} $args
     * @return \AWS\Result<array{message?:string}>
     */
    public function cancelDeployment(array $args): \AWS\Result { }

    /**
     * @param array{deploymentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{message?:string}>
     */
    public function cancelDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{inlineRecipe?:string|resource|\Psr\Http\Message\StreamInterface, lambdaFunction?:array{lambdaArn:string, componentName?:string, componentVersion?:string, componentPlatforms?:array<array{name?:string, attributes?:array<string, string>}>, componentDependencies?:array<string, array{versionRequirement?:string, dependencyType?:"HARD"|"SOFT"}>, componentLambdaParameters?:array{eventSources?:array<array{topic:string, type:"PUB_SUB"|"IOT_CORE"}>, maxQueueSize?:int, maxInstancesCount?:int, maxIdleTimeInSeconds?:int, timeoutInSeconds?:int, statusTimeoutInSeconds?:int, pinned?:bool, inputPayloadEncodingType?:"json"|"binary", execArgs?:array<string>, environmentVariables?:array<string, string>, linuxProcessParams?:array{isolationMode?:"GreengrassContainer"|"NoContainer", containerParams?:array{memorySizeInKB?:int, mountROSysfs?:bool, volumes?:array<array{sourcePath:string, destinationPath:string, permission?:"ro"|"rw", addGroupOwner?:bool}>, devices?:array<array{path:string, permission?:"ro"|"rw", addGroupOwner?:bool}>}}}}, tags?:array<string, string>, clientToken?:string} $args
     * @return \AWS\Result<array{arn?:string, componentName:string, componentVersion:string, creationTimestamp:int|string|\DateTimeInterface, status:array{componentState?:"REQUESTED"|"INITIATED"|"DEPLOYABLE"|"FAILED"|"DEPRECATED", message?:string, errors?:array<string, string>, vendorGuidance?:"ACTIVE"|"DISCONTINUED"|"DELETED", vendorGuidanceMessage?:string}}>
     */
    public function createComponentVersion(array $args = []): \AWS\Result { }

    /**
     * @param array{inlineRecipe?:string|resource|\Psr\Http\Message\StreamInterface, lambdaFunction?:array{lambdaArn:string, componentName?:string, componentVersion?:string, componentPlatforms?:array<array{name?:string, attributes?:array<string, string>}>, componentDependencies?:array<string, array{versionRequirement?:string, dependencyType?:"HARD"|"SOFT"}>, componentLambdaParameters?:array{eventSources?:array<array{topic:string, type:"PUB_SUB"|"IOT_CORE"}>, maxQueueSize?:int, maxInstancesCount?:int, maxIdleTimeInSeconds?:int, timeoutInSeconds?:int, statusTimeoutInSeconds?:int, pinned?:bool, inputPayloadEncodingType?:"json"|"binary", execArgs?:array<string>, environmentVariables?:array<string, string>, linuxProcessParams?:array{isolationMode?:"GreengrassContainer"|"NoContainer", containerParams?:array{memorySizeInKB?:int, mountROSysfs?:bool, volumes?:array<array{sourcePath:string, destinationPath:string, permission?:"ro"|"rw", addGroupOwner?:bool}>, devices?:array<array{path:string, permission?:"ro"|"rw", addGroupOwner?:bool}>}}}}, tags?:array<string, string>, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, componentName:string, componentVersion:string, creationTimestamp:int|string|\DateTimeInterface, status:array{componentState?:"REQUESTED"|"INITIATED"|"DEPLOYABLE"|"FAILED"|"DEPRECATED", message?:string, errors?:array<string, string>, vendorGuidance?:"ACTIVE"|"DISCONTINUED"|"DELETED", vendorGuidanceMessage?:string}}>
     */
    public function createComponentVersionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{targetArn:string, deploymentName?:string, components?:array<string, array{componentVersion:string, configurationUpdate?:array{merge?:string, reset?:array<string>}, runWith?:array{posixUser?:string, systemResourceLimits?:array{memory?:int, cpus?:float}, windowsUser?:string}}>, iotJobConfiguration?:array{jobExecutionsRolloutConfig?:array{exponentialRate?:array{baseRatePerMinute:int, incrementFactor:float, rateIncreaseCriteria:array{numberOfNotifiedThings?:int, numberOfSucceededThings?:int}}, maximumPerMinute?:int}, abortConfig?:array{criteriaList:array<array{failureType:"FAILED"|"REJECTED"|"TIMED_OUT"|"ALL", action:"CANCEL", thresholdPercentage:float, minNumberOfExecutedThings:int}>}, timeoutConfig?:array{inProgressTimeoutInMinutes?:int}}, deploymentPolicies?:array{failureHandlingPolicy?:"ROLLBACK"|"DO_NOTHING", componentUpdatePolicy?:array{timeoutInSeconds?:int, action?:"NOTIFY_COMPONENTS"|"SKIP_NOTIFY_COMPONENTS"}, configurationValidationPolicy?:array{timeoutInSeconds?:int}}, parentTargetArn?:string, tags?:array<string, string>, clientToken?:string} $args
     * @return \AWS\Result<array{deploymentId?:string, iotJobId?:string, iotJobArn?:string}>
     */
    public function createDeployment(array $args): \AWS\Result { }

    /**
     * @param array{targetArn:string, deploymentName?:string, components?:array<string, array{componentVersion:string, configurationUpdate?:array{merge?:string, reset?:array<string>}, runWith?:array{posixUser?:string, systemResourceLimits?:array{memory?:int, cpus?:float}, windowsUser?:string}}>, iotJobConfiguration?:array{jobExecutionsRolloutConfig?:array{exponentialRate?:array{baseRatePerMinute:int, incrementFactor:float, rateIncreaseCriteria:array{numberOfNotifiedThings?:int, numberOfSucceededThings?:int}}, maximumPerMinute?:int}, abortConfig?:array{criteriaList:array<array{failureType:"FAILED"|"REJECTED"|"TIMED_OUT"|"ALL", action:"CANCEL", thresholdPercentage:float, minNumberOfExecutedThings:int}>}, timeoutConfig?:array{inProgressTimeoutInMinutes?:int}}, deploymentPolicies?:array{failureHandlingPolicy?:"ROLLBACK"|"DO_NOTHING", componentUpdatePolicy?:array{timeoutInSeconds?:int, action?:"NOTIFY_COMPONENTS"|"SKIP_NOTIFY_COMPONENTS"}, configurationValidationPolicy?:array{timeoutInSeconds?:int}}, parentTargetArn?:string, tags?:array<string, string>, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{deploymentId?:string, iotJobId?:string, iotJobArn?:string}>
     */
    public function createDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteComponent(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteComponentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{coreDeviceThingName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteCoreDevice(array $args): \AWS\Result { }

    /**
     * @param array{coreDeviceThingName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteCoreDeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deploymentId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDeployment(array $args): \AWS\Result { }

    /**
     * @param array{deploymentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{arn?:string, componentName?:string, componentVersion?:string, creationTimestamp?:int|string|\DateTimeInterface, publisher?:string, description?:string, status?:array{componentState?:"REQUESTED"|"INITIATED"|"DEPLOYABLE"|"FAILED"|"DEPRECATED", message?:string, errors?:array<string, string>, vendorGuidance?:"ACTIVE"|"DISCONTINUED"|"DELETED", vendorGuidanceMessage?:string}, platforms?:array<array{name?:string, attributes?:array<string, string>}>, tags?:array<string, string>}>
     */
    public function describeComponent(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, componentName?:string, componentVersion?:string, creationTimestamp?:int|string|\DateTimeInterface, publisher?:string, description?:string, status?:array{componentState?:"REQUESTED"|"INITIATED"|"DEPLOYABLE"|"FAILED"|"DEPRECATED", message?:string, errors?:array<string, string>, vendorGuidance?:"ACTIVE"|"DISCONTINUED"|"DELETED", vendorGuidanceMessage?:string}, platforms?:array<array{name?:string, attributes?:array<string, string>}>, tags?:array<string, string>}>
     */
    public function describeComponentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{disassociatedAt?:string}>
     */
    public function disassociateServiceRoleFromAccount(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{disassociatedAt?:string}>
     */
    public function disassociateServiceRoleFromAccountAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{recipeOutputFormat?:"JSON"|"YAML", arn:string} $args
     * @return \AWS\Result<array{recipeOutputFormat:"JSON"|"YAML", recipe:string|resource|\Psr\Http\Message\StreamInterface, tags?:array<string, string>}>
     */
    public function getComponent(array $args): \AWS\Result { }

    /**
     * @param array{recipeOutputFormat?:"JSON"|"YAML", arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{recipeOutputFormat:"JSON"|"YAML", recipe:string|resource|\Psr\Http\Message\StreamInterface, tags?:array<string, string>}>
     */
    public function getComponentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, artifactName:string, s3EndpointType?:"REGIONAL"|"GLOBAL", iotEndpointType?:"fips"|"standard"} $args
     * @return \AWS\Result<array{preSignedUrl:string}>
     */
    public function getComponentVersionArtifact(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, artifactName:string, s3EndpointType?:"REGIONAL"|"GLOBAL", iotEndpointType?:"fips"|"standard"} $args
     * @return \GuzzleHttp\Promise\Promise<array{preSignedUrl:string}>
     */
    public function getComponentVersionArtifactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingName:string} $args
     * @return \AWS\Result<array{connectivityInfo?:array<array{id?:string, hostAddress?:string, portNumber?:int, metadata?:string}>, message?:string}>
     */
    public function getConnectivityInfo(array $args): \AWS\Result { }

    /**
     * @param array{thingName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{connectivityInfo?:array<array{id?:string, hostAddress?:string, portNumber?:int, metadata?:string}>, message?:string}>
     */
    public function getConnectivityInfoAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{coreDeviceThingName:string} $args
     * @return \AWS\Result<array{coreDeviceThingName?:string, coreVersion?:string, platform?:string, architecture?:string, runtime?:string, status?:"HEALTHY"|"UNHEALTHY", lastStatusUpdateTimestamp?:int|string|\DateTimeInterface, tags?:array<string, string>}>
     */
    public function getCoreDevice(array $args): \AWS\Result { }

    /**
     * @param array{coreDeviceThingName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{coreDeviceThingName?:string, coreVersion?:string, platform?:string, architecture?:string, runtime?:string, status?:"HEALTHY"|"UNHEALTHY", lastStatusUpdateTimestamp?:int|string|\DateTimeInterface, tags?:array<string, string>}>
     */
    public function getCoreDeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deploymentId:string} $args
     * @return \AWS\Result<array{targetArn?:string, revisionId?:string, deploymentId?:string, deploymentName?:string, deploymentStatus?:"ACTIVE"|"COMPLETED"|"CANCELED"|"FAILED"|"INACTIVE", iotJobId?:string, iotJobArn?:string, components?:array<string, array{componentVersion:string, configurationUpdate?:array{merge?:string, reset?:array<string>}, runWith?:array{posixUser?:string, systemResourceLimits?:array{memory?:int, cpus?:float}, windowsUser?:string}}>, deploymentPolicies?:array{failureHandlingPolicy?:"ROLLBACK"|"DO_NOTHING", componentUpdatePolicy?:array{timeoutInSeconds?:int, action?:"NOTIFY_COMPONENTS"|"SKIP_NOTIFY_COMPONENTS"}, configurationValidationPolicy?:array{timeoutInSeconds?:int}}, iotJobConfiguration?:array{jobExecutionsRolloutConfig?:array{exponentialRate?:array{baseRatePerMinute:int, incrementFactor:float, rateIncreaseCriteria:array{numberOfNotifiedThings?:int, numberOfSucceededThings?:int}}, maximumPerMinute?:int}, abortConfig?:array{criteriaList:array<array{failureType:"FAILED"|"REJECTED"|"TIMED_OUT"|"ALL", action:"CANCEL", thresholdPercentage:float, minNumberOfExecutedThings:int}>}, timeoutConfig?:array{inProgressTimeoutInMinutes?:int}}, creationTimestamp?:int|string|\DateTimeInterface, isLatestForTarget?:bool, parentTargetArn?:string, tags?:array<string, string>}>
     */
    public function getDeployment(array $args): \AWS\Result { }

    /**
     * @param array{deploymentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{targetArn?:string, revisionId?:string, deploymentId?:string, deploymentName?:string, deploymentStatus?:"ACTIVE"|"COMPLETED"|"CANCELED"|"FAILED"|"INACTIVE", iotJobId?:string, iotJobArn?:string, components?:array<string, array{componentVersion:string, configurationUpdate?:array{merge?:string, reset?:array<string>}, runWith?:array{posixUser?:string, systemResourceLimits?:array{memory?:int, cpus?:float}, windowsUser?:string}}>, deploymentPolicies?:array{failureHandlingPolicy?:"ROLLBACK"|"DO_NOTHING", componentUpdatePolicy?:array{timeoutInSeconds?:int, action?:"NOTIFY_COMPONENTS"|"SKIP_NOTIFY_COMPONENTS"}, configurationValidationPolicy?:array{timeoutInSeconds?:int}}, iotJobConfiguration?:array{jobExecutionsRolloutConfig?:array{exponentialRate?:array{baseRatePerMinute:int, incrementFactor:float, rateIncreaseCriteria:array{numberOfNotifiedThings?:int, numberOfSucceededThings?:int}}, maximumPerMinute?:int}, abortConfig?:array{criteriaList:array<array{failureType:"FAILED"|"REJECTED"|"TIMED_OUT"|"ALL", action:"CANCEL", thresholdPercentage:float, minNumberOfExecutedThings:int}>}, timeoutConfig?:array{inProgressTimeoutInMinutes?:int}}, creationTimestamp?:int|string|\DateTimeInterface, isLatestForTarget?:bool, parentTargetArn?:string, tags?:array<string, string>}>
     */
    public function getDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{associatedAt?:string, roleArn?:string}>
     */
    public function getServiceRoleForAccount(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{associatedAt?:string, roleArn?:string}>
     */
    public function getServiceRoleForAccountAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{coreDeviceThingName:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{associatedClientDevices?:array<array{thingName?:string, associationTimestamp?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listClientDevicesAssociatedWithCoreDevice(array $args): \AWS\Result { }

    /**
     * @param array{coreDeviceThingName:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{associatedClientDevices?:array<array{thingName?:string, associationTimestamp?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listClientDevicesAssociatedWithCoreDeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{componentVersions?:array<array{componentName?:string, componentVersion?:string, arn?:string}>, nextToken?:string}>
     */
    public function listComponentVersions(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{componentVersions?:array<array{componentName?:string, componentVersion?:string, arn?:string}>, nextToken?:string}>
     */
    public function listComponentVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{scope?:"PRIVATE"|"PUBLIC", maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{components?:array<array{arn?:string, componentName?:string, latestVersion?:array{arn?:string, componentVersion?:string, creationTimestamp?:int|string|\DateTimeInterface, description?:string, publisher?:string, platforms?:array<array{name?:string, attributes?:array<string, string>}>}}>, nextToken?:string}>
     */
    public function listComponents(array $args = []): \AWS\Result { }

    /**
     * @param array{scope?:"PRIVATE"|"PUBLIC", maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{components?:array<array{arn?:string, componentName?:string, latestVersion?:array{arn?:string, componentVersion?:string, creationTimestamp?:int|string|\DateTimeInterface, description?:string, publisher?:string, platforms?:array<array{name?:string, attributes?:array<string, string>}>}}>, nextToken?:string}>
     */
    public function listComponentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingGroupArn?:string, status?:"HEALTHY"|"UNHEALTHY", maxResults?:int, nextToken?:string, runtime?:string} $args
     * @return \AWS\Result<array{coreDevices?:array<array{coreDeviceThingName?:string, status?:"HEALTHY"|"UNHEALTHY", lastStatusUpdateTimestamp?:int|string|\DateTimeInterface, platform?:string, architecture?:string, runtime?:string}>, nextToken?:string}>
     */
    public function listCoreDevices(array $args = []): \AWS\Result { }

    /**
     * @param array{thingGroupArn?:string, status?:"HEALTHY"|"UNHEALTHY", maxResults?:int, nextToken?:string, runtime?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{coreDevices?:array<array{coreDeviceThingName?:string, status?:"HEALTHY"|"UNHEALTHY", lastStatusUpdateTimestamp?:int|string|\DateTimeInterface, platform?:string, architecture?:string, runtime?:string}>, nextToken?:string}>
     */
    public function listCoreDevicesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{targetArn?:string, historyFilter?:"ALL"|"LATEST_ONLY", parentTargetArn?:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{deployments?:array<array{targetArn?:string, revisionId?:string, deploymentId?:string, deploymentName?:string, creationTimestamp?:int|string|\DateTimeInterface, deploymentStatus?:"ACTIVE"|"COMPLETED"|"CANCELED"|"FAILED"|"INACTIVE", isLatestForTarget?:bool, parentTargetArn?:string}>, nextToken?:string}>
     */
    public function listDeployments(array $args = []): \AWS\Result { }

    /**
     * @param array{targetArn?:string, historyFilter?:"ALL"|"LATEST_ONLY", parentTargetArn?:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{deployments?:array<array{targetArn?:string, revisionId?:string, deploymentId?:string, deploymentName?:string, creationTimestamp?:int|string|\DateTimeInterface, deploymentStatus?:"ACTIVE"|"COMPLETED"|"CANCELED"|"FAILED"|"INACTIVE", isLatestForTarget?:bool, parentTargetArn?:string}>, nextToken?:string}>
     */
    public function listDeploymentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{coreDeviceThingName:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{effectiveDeployments?:array<array{deploymentId:string, deploymentName:string, iotJobId?:string, iotJobArn?:string, description?:string, targetArn:string, coreDeviceExecutionStatus:"IN_PROGRESS"|"QUEUED"|"FAILED"|"COMPLETED"|"TIMED_OUT"|"CANCELED"|"REJECTED"|"SUCCEEDED", reason?:string, creationTimestamp:int|string|\DateTimeInterface, modifiedTimestamp:int|string|\DateTimeInterface, statusDetails?:array{errorStack?:array<string>, errorTypes?:array<string>}}>, nextToken?:string}>
     */
    public function listEffectiveDeployments(array $args): \AWS\Result { }

    /**
     * @param array{coreDeviceThingName:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{effectiveDeployments?:array<array{deploymentId:string, deploymentName:string, iotJobId?:string, iotJobArn?:string, description?:string, targetArn:string, coreDeviceExecutionStatus:"IN_PROGRESS"|"QUEUED"|"FAILED"|"COMPLETED"|"TIMED_OUT"|"CANCELED"|"REJECTED"|"SUCCEEDED", reason?:string, creationTimestamp:int|string|\DateTimeInterface, modifiedTimestamp:int|string|\DateTimeInterface, statusDetails?:array{errorStack?:array<string>, errorTypes?:array<string>}}>, nextToken?:string}>
     */
    public function listEffectiveDeploymentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{coreDeviceThingName:string, maxResults?:int, nextToken?:string, topologyFilter?:"ALL"|"ROOT"} $args
     * @return \AWS\Result<array{installedComponents?:array<array{componentName?:string, componentVersion?:string, lifecycleState?:"NEW"|"INSTALLED"|"STARTING"|"RUNNING"|"STOPPING"|"ERRORED"|"BROKEN"|"FINISHED", lifecycleStateDetails?:string, isRoot?:bool, lastStatusChangeTimestamp?:int|string|\DateTimeInterface, lastReportedTimestamp?:int|string|\DateTimeInterface, lastInstallationSource?:string, lifecycleStatusCodes?:array<string>}>, nextToken?:string}>
     */
    public function listInstalledComponents(array $args): \AWS\Result { }

    /**
     * @param array{coreDeviceThingName:string, maxResults?:int, nextToken?:string, topologyFilter?:"ALL"|"ROOT"} $args
     * @return \GuzzleHttp\Promise\Promise<array{installedComponents?:array<array{componentName?:string, componentVersion?:string, lifecycleState?:"NEW"|"INSTALLED"|"STARTING"|"RUNNING"|"STOPPING"|"ERRORED"|"BROKEN"|"FINISHED", lifecycleStateDetails?:string, isRoot?:bool, lastStatusChangeTimestamp?:int|string|\DateTimeInterface, lastReportedTimestamp?:int|string|\DateTimeInterface, lastInstallationSource?:string, lifecycleStatusCodes?:array<string>}>, nextToken?:string}>
     */
    public function listInstalledComponentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{platform?:array{name?:string, attributes?:array<string, string>}, componentCandidates?:array<array{componentName?:string, componentVersion?:string, versionRequirements?:array<string, string>}>} $args
     * @return \AWS\Result<array{resolvedComponentVersions?:array<array{arn?:string, componentName?:string, componentVersion?:string, recipe?:string|resource|\Psr\Http\Message\StreamInterface, vendorGuidance?:"ACTIVE"|"DISCONTINUED"|"DELETED", message?:string}>}>
     */
    public function resolveComponentCandidates(array $args = []): \AWS\Result { }

    /**
     * @param array{platform?:array{name?:string, attributes?:array<string, string>}, componentCandidates?:array<array{componentName?:string, componentVersion?:string, versionRequirements?:array<string, string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{resolvedComponentVersions?:array<array{arn?:string, componentName?:string, componentVersion?:string, recipe?:string|resource|\Psr\Http\Message\StreamInterface, vendorGuidance?:"ACTIVE"|"DISCONTINUED"|"DELETED", message?:string}>}>
     */
    public function resolveComponentCandidatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{thingName:string, connectivityInfo:array<array{id?:string, hostAddress?:string, portNumber?:int, metadata?:string}>} $args
     * @return \AWS\Result<array{version?:string, message?:string}>
     */
    public function updateConnectivityInfo(array $args): \AWS\Result { }

    /**
     * @param array{thingName:string, connectivityInfo:array<array{id?:string, hostAddress?:string, portNumber?:int, metadata?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{version?:string, message?:string}>
     */
    public function updateConnectivityInfoAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
