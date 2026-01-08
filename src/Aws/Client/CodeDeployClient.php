<?php
namespace AWS\CodeDeploy;

class CodeDeployClient
{
    /**
     * @param array{tags:array<array{Key?:string, Value?:string}>, instanceNames:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function addTagsToOnPremisesInstances(array $args): \AWS\Result { }

    /**
     * @param array{tags:array<array{Key?:string, Value?:string}>, instanceNames:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function addTagsToOnPremisesInstancesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationName:string, revisions:array<array{revisionType?:"S3"|"GitHub"|"String"|"AppSpecContent", s3Location?:array{bucket?:string, key?:string, bundleType?:"tar"|"tgz"|"zip"|"YAML"|"JSON", version?:string, eTag?:string}, gitHubLocation?:array{repository?:string, commitId?:string}, string?:array{content?:string, sha256?:string}, appSpecContent?:array{content?:string, sha256?:string}}>} $args
     * @return \AWS\Result<array{applicationName?:string, errorMessage?:string, revisions?:array<array{revisionLocation?:array{revisionType?:"S3"|"GitHub"|"String"|"AppSpecContent", s3Location?:array{bucket?:string, key?:string, bundleType?:"tar"|"tgz"|"zip"|"YAML"|"JSON", version?:string, eTag?:string}, gitHubLocation?:array{repository?:string, commitId?:string}, string?:array{content?:string, sha256?:string}, appSpecContent?:array{content?:string, sha256?:string}}, genericRevisionInfo?:array{description?:string, deploymentGroups?:array<string>, firstUsedTime?:int|string|\DateTimeInterface, lastUsedTime?:int|string|\DateTimeInterface, registerTime?:int|string|\DateTimeInterface}}>}>
     */
    public function batchGetApplicationRevisions(array $args): \AWS\Result { }

    /**
     * @param array{applicationName:string, revisions:array<array{revisionType?:"S3"|"GitHub"|"String"|"AppSpecContent", s3Location?:array{bucket?:string, key?:string, bundleType?:"tar"|"tgz"|"zip"|"YAML"|"JSON", version?:string, eTag?:string}, gitHubLocation?:array{repository?:string, commitId?:string}, string?:array{content?:string, sha256?:string}, appSpecContent?:array{content?:string, sha256?:string}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationName?:string, errorMessage?:string, revisions?:array<array{revisionLocation?:array{revisionType?:"S3"|"GitHub"|"String"|"AppSpecContent", s3Location?:array{bucket?:string, key?:string, bundleType?:"tar"|"tgz"|"zip"|"YAML"|"JSON", version?:string, eTag?:string}, gitHubLocation?:array{repository?:string, commitId?:string}, string?:array{content?:string, sha256?:string}, appSpecContent?:array{content?:string, sha256?:string}}, genericRevisionInfo?:array{description?:string, deploymentGroups?:array<string>, firstUsedTime?:int|string|\DateTimeInterface, lastUsedTime?:int|string|\DateTimeInterface, registerTime?:int|string|\DateTimeInterface}}>}>
     */
    public function batchGetApplicationRevisionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationNames:array<string>} $args
     * @return \AWS\Result<array{applicationsInfo?:array<array{applicationId?:string, applicationName?:string, createTime?:int|string|\DateTimeInterface, linkedToGitHub?:bool, gitHubAccountName?:string, computePlatform?:"Server"|"Lambda"|"ECS"}>}>
     */
    public function batchGetApplications(array $args): \AWS\Result { }

    /**
     * @param array{applicationNames:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationsInfo?:array<array{applicationId?:string, applicationName?:string, createTime?:int|string|\DateTimeInterface, linkedToGitHub?:bool, gitHubAccountName?:string, computePlatform?:"Server"|"Lambda"|"ECS"}>}>
     */
    public function batchGetApplicationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationName:string, deploymentGroupNames:array<string>} $args
     * @return \AWS\Result<array{deploymentGroupsInfo?:array<array{applicationName?:string, deploymentGroupId?:string, deploymentGroupName?:string, deploymentConfigName?:string, ec2TagFilters?:array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>, onPremisesInstanceTagFilters?:array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>, autoScalingGroups?:array<array{name?:string, hook?:string, terminationHook?:string}>, serviceRoleArn?:string, targetRevision?:array{revisionType?:"S3"|"GitHub"|"String"|"AppSpecContent", s3Location?:array{bucket?:string, key?:string, bundleType?:"tar"|"tgz"|"zip"|"YAML"|"JSON", version?:string, eTag?:string}, gitHubLocation?:array{repository?:string, commitId?:string}, string?:array{content?:string, sha256?:string}, appSpecContent?:array{content?:string, sha256?:string}}, triggerConfigurations?:array<array{triggerName?:string, triggerTargetArn?:string, triggerEvents?:array<"DeploymentStart"|"DeploymentSuccess"|"DeploymentFailure"|"DeploymentStop"|"DeploymentRollback"|"DeploymentReady"|"InstanceStart"|"InstanceSuccess"|"InstanceFailure"|"InstanceReady">}>, alarmConfiguration?:array{enabled?:bool, ignorePollAlarmFailure?:bool, alarms?:array<array{name?:string}>}, autoRollbackConfiguration?:array{enabled?:bool, events?:array<"DEPLOYMENT_FAILURE"|"DEPLOYMENT_STOP_ON_ALARM"|"DEPLOYMENT_STOP_ON_REQUEST">}, deploymentStyle?:array{deploymentType?:"IN_PLACE"|"BLUE_GREEN", deploymentOption?:"WITH_TRAFFIC_CONTROL"|"WITHOUT_TRAFFIC_CONTROL"}, outdatedInstancesStrategy?:"UPDATE"|"IGNORE", blueGreenDeploymentConfiguration?:array{terminateBlueInstancesOnDeploymentSuccess?:array{action?:"TERMINATE"|"KEEP_ALIVE", terminationWaitTimeInMinutes?:int}, deploymentReadyOption?:array{actionOnTimeout?:"CONTINUE_DEPLOYMENT"|"STOP_DEPLOYMENT", waitTimeInMinutes?:int}, greenFleetProvisioningOption?:array{action?:"DISCOVER_EXISTING"|"COPY_AUTO_SCALING_GROUP"}}, loadBalancerInfo?:array{elbInfoList?:array<array{name?:string}>, targetGroupInfoList?:array<array{name?:string}>, targetGroupPairInfoList?:array<array{targetGroups?:array<array{name?:string}>, prodTrafficRoute?:array{listenerArns?:array<string>}, testTrafficRoute?:array{listenerArns?:array<string>}}>}, lastSuccessfulDeployment?:array{deploymentId?:string, status?:"Created"|"Queued"|"InProgress"|"Baking"|"Succeeded"|"Failed"|"Stopped"|"Ready", endTime?:int|string|\DateTimeInterface, createTime?:int|string|\DateTimeInterface}, lastAttemptedDeployment?:array{deploymentId?:string, status?:"Created"|"Queued"|"InProgress"|"Baking"|"Succeeded"|"Failed"|"Stopped"|"Ready", endTime?:int|string|\DateTimeInterface, createTime?:int|string|\DateTimeInterface}, ec2TagSet?:array{ec2TagSetList?:array<array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>>}, onPremisesTagSet?:array{onPremisesTagSetList?:array<array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>>}, computePlatform?:"Server"|"Lambda"|"ECS", ecsServices?:array<array{serviceName?:string, clusterName?:string}>, terminationHookEnabled?:bool}>, errorMessage?:string}>
     */
    public function batchGetDeploymentGroups(array $args): \AWS\Result { }

    /**
     * @param array{applicationName:string, deploymentGroupNames:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{deploymentGroupsInfo?:array<array{applicationName?:string, deploymentGroupId?:string, deploymentGroupName?:string, deploymentConfigName?:string, ec2TagFilters?:array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>, onPremisesInstanceTagFilters?:array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>, autoScalingGroups?:array<array{name?:string, hook?:string, terminationHook?:string}>, serviceRoleArn?:string, targetRevision?:array{revisionType?:"S3"|"GitHub"|"String"|"AppSpecContent", s3Location?:array{bucket?:string, key?:string, bundleType?:"tar"|"tgz"|"zip"|"YAML"|"JSON", version?:string, eTag?:string}, gitHubLocation?:array{repository?:string, commitId?:string}, string?:array{content?:string, sha256?:string}, appSpecContent?:array{content?:string, sha256?:string}}, triggerConfigurations?:array<array{triggerName?:string, triggerTargetArn?:string, triggerEvents?:array<"DeploymentStart"|"DeploymentSuccess"|"DeploymentFailure"|"DeploymentStop"|"DeploymentRollback"|"DeploymentReady"|"InstanceStart"|"InstanceSuccess"|"InstanceFailure"|"InstanceReady">}>, alarmConfiguration?:array{enabled?:bool, ignorePollAlarmFailure?:bool, alarms?:array<array{name?:string}>}, autoRollbackConfiguration?:array{enabled?:bool, events?:array<"DEPLOYMENT_FAILURE"|"DEPLOYMENT_STOP_ON_ALARM"|"DEPLOYMENT_STOP_ON_REQUEST">}, deploymentStyle?:array{deploymentType?:"IN_PLACE"|"BLUE_GREEN", deploymentOption?:"WITH_TRAFFIC_CONTROL"|"WITHOUT_TRAFFIC_CONTROL"}, outdatedInstancesStrategy?:"UPDATE"|"IGNORE", blueGreenDeploymentConfiguration?:array{terminateBlueInstancesOnDeploymentSuccess?:array{action?:"TERMINATE"|"KEEP_ALIVE", terminationWaitTimeInMinutes?:int}, deploymentReadyOption?:array{actionOnTimeout?:"CONTINUE_DEPLOYMENT"|"STOP_DEPLOYMENT", waitTimeInMinutes?:int}, greenFleetProvisioningOption?:array{action?:"DISCOVER_EXISTING"|"COPY_AUTO_SCALING_GROUP"}}, loadBalancerInfo?:array{elbInfoList?:array<array{name?:string}>, targetGroupInfoList?:array<array{name?:string}>, targetGroupPairInfoList?:array<array{targetGroups?:array<array{name?:string}>, prodTrafficRoute?:array{listenerArns?:array<string>}, testTrafficRoute?:array{listenerArns?:array<string>}}>}, lastSuccessfulDeployment?:array{deploymentId?:string, status?:"Created"|"Queued"|"InProgress"|"Baking"|"Succeeded"|"Failed"|"Stopped"|"Ready", endTime?:int|string|\DateTimeInterface, createTime?:int|string|\DateTimeInterface}, lastAttemptedDeployment?:array{deploymentId?:string, status?:"Created"|"Queued"|"InProgress"|"Baking"|"Succeeded"|"Failed"|"Stopped"|"Ready", endTime?:int|string|\DateTimeInterface, createTime?:int|string|\DateTimeInterface}, ec2TagSet?:array{ec2TagSetList?:array<array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>>}, onPremisesTagSet?:array{onPremisesTagSetList?:array<array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>>}, computePlatform?:"Server"|"Lambda"|"ECS", ecsServices?:array<array{serviceName?:string, clusterName?:string}>, terminationHookEnabled?:bool}>, errorMessage?:string}>
     */
    public function batchGetDeploymentGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deploymentId:string, instanceIds:array<string>} $args
     * @return \AWS\Result<array{instancesSummary?:array<array{deploymentId?:string, instanceId?:string, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"|"Ready", lastUpdatedAt?:int|string|\DateTimeInterface, lifecycleEvents?:array<array{lifecycleEventName?:string, diagnostics?:array{errorCode?:"Success"|"ScriptMissing"|"ScriptNotExecutable"|"ScriptTimedOut"|"ScriptFailed"|"UnknownError", scriptName?:string, message?:string, logTail?:string}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"}>, instanceType?:"Blue"|"Green"}>, errorMessage?:string}>
     */
    public function batchGetDeploymentInstances(array $args): \AWS\Result { }

    /**
     * @param array{deploymentId:string, instanceIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{instancesSummary?:array<array{deploymentId?:string, instanceId?:string, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"|"Ready", lastUpdatedAt?:int|string|\DateTimeInterface, lifecycleEvents?:array<array{lifecycleEventName?:string, diagnostics?:array{errorCode?:"Success"|"ScriptMissing"|"ScriptNotExecutable"|"ScriptTimedOut"|"ScriptFailed"|"UnknownError", scriptName?:string, message?:string, logTail?:string}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"}>, instanceType?:"Blue"|"Green"}>, errorMessage?:string}>
     */
    public function batchGetDeploymentInstancesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deploymentId:string, targetIds:array<string>} $args
     * @return \AWS\Result<array{deploymentTargets?:array<array{deploymentTargetType?:"InstanceTarget"|"LambdaTarget"|"ECSTarget"|"CloudFormationTarget", instanceTarget?:array{deploymentId?:string, targetId?:string, targetArn?:string, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"|"Ready", lastUpdatedAt?:int|string|\DateTimeInterface, lifecycleEvents?:array<array{lifecycleEventName?:string, diagnostics?:array{errorCode?:"Success"|"ScriptMissing"|"ScriptNotExecutable"|"ScriptTimedOut"|"ScriptFailed"|"UnknownError", scriptName?:string, message?:string, logTail?:string}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"}>, instanceLabel?:"Blue"|"Green"}, lambdaTarget?:array{deploymentId?:string, targetId?:string, targetArn?:string, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"|"Ready", lastUpdatedAt?:int|string|\DateTimeInterface, lifecycleEvents?:array<array{lifecycleEventName?:string, diagnostics?:array{errorCode?:"Success"|"ScriptMissing"|"ScriptNotExecutable"|"ScriptTimedOut"|"ScriptFailed"|"UnknownError", scriptName?:string, message?:string, logTail?:string}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"}>, lambdaFunctionInfo?:array{functionName?:string, functionAlias?:string, currentVersion?:string, targetVersion?:string, targetVersionWeight?:float}}, ecsTarget?:array{deploymentId?:string, targetId?:string, targetArn?:string, lastUpdatedAt?:int|string|\DateTimeInterface, lifecycleEvents?:array<array{lifecycleEventName?:string, diagnostics?:array{errorCode?:"Success"|"ScriptMissing"|"ScriptNotExecutable"|"ScriptTimedOut"|"ScriptFailed"|"UnknownError", scriptName?:string, message?:string, logTail?:string}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"}>, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"|"Ready", taskSetsInfo?:array<array{identifer?:string, desiredCount?:int, pendingCount?:int, runningCount?:int, status?:string, trafficWeight?:float, targetGroup?:array{name?:string}, taskSetLabel?:"Blue"|"Green"}>}, cloudFormationTarget?:array{deploymentId?:string, targetId?:string, lastUpdatedAt?:int|string|\DateTimeInterface, lifecycleEvents?:array<array{lifecycleEventName?:string, diagnostics?:array{errorCode?:"Success"|"ScriptMissing"|"ScriptNotExecutable"|"ScriptTimedOut"|"ScriptFailed"|"UnknownError", scriptName?:string, message?:string, logTail?:string}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"}>, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"|"Ready", resourceType?:string, targetVersionWeight?:float}}>}>
     */
    public function batchGetDeploymentTargets(array $args): \AWS\Result { }

    /**
     * @param array{deploymentId:string, targetIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{deploymentTargets?:array<array{deploymentTargetType?:"InstanceTarget"|"LambdaTarget"|"ECSTarget"|"CloudFormationTarget", instanceTarget?:array{deploymentId?:string, targetId?:string, targetArn?:string, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"|"Ready", lastUpdatedAt?:int|string|\DateTimeInterface, lifecycleEvents?:array<array{lifecycleEventName?:string, diagnostics?:array{errorCode?:"Success"|"ScriptMissing"|"ScriptNotExecutable"|"ScriptTimedOut"|"ScriptFailed"|"UnknownError", scriptName?:string, message?:string, logTail?:string}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"}>, instanceLabel?:"Blue"|"Green"}, lambdaTarget?:array{deploymentId?:string, targetId?:string, targetArn?:string, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"|"Ready", lastUpdatedAt?:int|string|\DateTimeInterface, lifecycleEvents?:array<array{lifecycleEventName?:string, diagnostics?:array{errorCode?:"Success"|"ScriptMissing"|"ScriptNotExecutable"|"ScriptTimedOut"|"ScriptFailed"|"UnknownError", scriptName?:string, message?:string, logTail?:string}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"}>, lambdaFunctionInfo?:array{functionName?:string, functionAlias?:string, currentVersion?:string, targetVersion?:string, targetVersionWeight?:float}}, ecsTarget?:array{deploymentId?:string, targetId?:string, targetArn?:string, lastUpdatedAt?:int|string|\DateTimeInterface, lifecycleEvents?:array<array{lifecycleEventName?:string, diagnostics?:array{errorCode?:"Success"|"ScriptMissing"|"ScriptNotExecutable"|"ScriptTimedOut"|"ScriptFailed"|"UnknownError", scriptName?:string, message?:string, logTail?:string}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"}>, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"|"Ready", taskSetsInfo?:array<array{identifer?:string, desiredCount?:int, pendingCount?:int, runningCount?:int, status?:string, trafficWeight?:float, targetGroup?:array{name?:string}, taskSetLabel?:"Blue"|"Green"}>}, cloudFormationTarget?:array{deploymentId?:string, targetId?:string, lastUpdatedAt?:int|string|\DateTimeInterface, lifecycleEvents?:array<array{lifecycleEventName?:string, diagnostics?:array{errorCode?:"Success"|"ScriptMissing"|"ScriptNotExecutable"|"ScriptTimedOut"|"ScriptFailed"|"UnknownError", scriptName?:string, message?:string, logTail?:string}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"}>, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"|"Ready", resourceType?:string, targetVersionWeight?:float}}>}>
     */
    public function batchGetDeploymentTargetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deploymentIds:array<string>} $args
     * @return \AWS\Result<array{deploymentsInfo?:array<array{applicationName?:string, deploymentGroupName?:string, deploymentConfigName?:string, deploymentId?:string, previousRevision?:array{revisionType?:"S3"|"GitHub"|"String"|"AppSpecContent", s3Location?:array{bucket?:string, key?:string, bundleType?:"tar"|"tgz"|"zip"|"YAML"|"JSON", version?:string, eTag?:string}, gitHubLocation?:array{repository?:string, commitId?:string}, string?:array{content?:string, sha256?:string}, appSpecContent?:array{content?:string, sha256?:string}}, revision?:array{revisionType?:"S3"|"GitHub"|"String"|"AppSpecContent", s3Location?:array{bucket?:string, key?:string, bundleType?:"tar"|"tgz"|"zip"|"YAML"|"JSON", version?:string, eTag?:string}, gitHubLocation?:array{repository?:string, commitId?:string}, string?:array{content?:string, sha256?:string}, appSpecContent?:array{content?:string, sha256?:string}}, status?:"Created"|"Queued"|"InProgress"|"Baking"|"Succeeded"|"Failed"|"Stopped"|"Ready", errorInformation?:array{code?:"AGENT_ISSUE"|"ALARM_ACTIVE"|"APPLICATION_MISSING"|"AUTOSCALING_VALIDATION_ERROR"|"AUTO_SCALING_CONFIGURATION"|"AUTO_SCALING_IAM_ROLE_PERMISSIONS"|"CODEDEPLOY_RESOURCE_CANNOT_BE_FOUND"|"CUSTOMER_APPLICATION_UNHEALTHY"|"DEPLOYMENT_GROUP_MISSING"|"ECS_UPDATE_ERROR"|"ELASTIC_LOAD_BALANCING_INVALID"|"ELB_INVALID_INSTANCE"|"HEALTH_CONSTRAINTS"|"HEALTH_CONSTRAINTS_INVALID"|"HOOK_EXECUTION_FAILURE"|"IAM_ROLE_MISSING"|"IAM_ROLE_PERMISSIONS"|"INTERNAL_ERROR"|"INVALID_ECS_SERVICE"|"INVALID_LAMBDA_CONFIGURATION"|"INVALID_LAMBDA_FUNCTION"|"INVALID_REVISION"|"MANUAL_STOP"|"MISSING_BLUE_GREEN_DEPLOYMENT_CONFIGURATION"|"MISSING_ELB_INFORMATION"|"MISSING_GITHUB_TOKEN"|"NO_EC2_SUBSCRIPTION"|"NO_INSTANCES"|"OVER_MAX_INSTANCES"|"RESOURCE_LIMIT_EXCEEDED"|"REVISION_MISSING"|"THROTTLED"|"TIMEOUT"|"CLOUDFORMATION_STACK_FAILURE", message?:string}, createTime?:int|string|\DateTimeInterface, startTime?:int|string|\DateTimeInterface, completeTime?:int|string|\DateTimeInterface, deploymentOverview?:array{Pending?:int, InProgress?:int, Succeeded?:int, Failed?:int, Skipped?:int, Ready?:int}, description?:string, creator?:"user"|"autoscaling"|"codeDeployRollback"|"CodeDeploy"|"CodeDeployAutoUpdate"|"CloudFormation"|"CloudFormationRollback"|"autoscalingTermination", ignoreApplicationStopFailures?:bool, autoRollbackConfiguration?:array{enabled?:bool, events?:array<"DEPLOYMENT_FAILURE"|"DEPLOYMENT_STOP_ON_ALARM"|"DEPLOYMENT_STOP_ON_REQUEST">}, updateOutdatedInstancesOnly?:bool, rollbackInfo?:array{rollbackDeploymentId?:string, rollbackTriggeringDeploymentId?:string, rollbackMessage?:string}, deploymentStyle?:array{deploymentType?:"IN_PLACE"|"BLUE_GREEN", deploymentOption?:"WITH_TRAFFIC_CONTROL"|"WITHOUT_TRAFFIC_CONTROL"}, targetInstances?:array{tagFilters?:array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>, autoScalingGroups?:array<string>, ec2TagSet?:array{ec2TagSetList?:array<array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>>}}, instanceTerminationWaitTimeStarted?:bool, blueGreenDeploymentConfiguration?:array{terminateBlueInstancesOnDeploymentSuccess?:array{action?:"TERMINATE"|"KEEP_ALIVE", terminationWaitTimeInMinutes?:int}, deploymentReadyOption?:array{actionOnTimeout?:"CONTINUE_DEPLOYMENT"|"STOP_DEPLOYMENT", waitTimeInMinutes?:int}, greenFleetProvisioningOption?:array{action?:"DISCOVER_EXISTING"|"COPY_AUTO_SCALING_GROUP"}}, loadBalancerInfo?:array{elbInfoList?:array<array{name?:string}>, targetGroupInfoList?:array<array{name?:string}>, targetGroupPairInfoList?:array<array{targetGroups?:array<array{name?:string}>, prodTrafficRoute?:array{listenerArns?:array<string>}, testTrafficRoute?:array{listenerArns?:array<string>}}>}, additionalDeploymentStatusInfo?:string, fileExistsBehavior?:"DISALLOW"|"OVERWRITE"|"RETAIN", deploymentStatusMessages?:array<string>, computePlatform?:"Server"|"Lambda"|"ECS", externalId?:string, relatedDeployments?:array{autoUpdateOutdatedInstancesRootDeploymentId?:string, autoUpdateOutdatedInstancesDeploymentIds?:array<string>}, overrideAlarmConfiguration?:array{enabled?:bool, ignorePollAlarmFailure?:bool, alarms?:array<array{name?:string}>}}>}>
     */
    public function batchGetDeployments(array $args): \AWS\Result { }

    /**
     * @param array{deploymentIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{deploymentsInfo?:array<array{applicationName?:string, deploymentGroupName?:string, deploymentConfigName?:string, deploymentId?:string, previousRevision?:array{revisionType?:"S3"|"GitHub"|"String"|"AppSpecContent", s3Location?:array{bucket?:string, key?:string, bundleType?:"tar"|"tgz"|"zip"|"YAML"|"JSON", version?:string, eTag?:string}, gitHubLocation?:array{repository?:string, commitId?:string}, string?:array{content?:string, sha256?:string}, appSpecContent?:array{content?:string, sha256?:string}}, revision?:array{revisionType?:"S3"|"GitHub"|"String"|"AppSpecContent", s3Location?:array{bucket?:string, key?:string, bundleType?:"tar"|"tgz"|"zip"|"YAML"|"JSON", version?:string, eTag?:string}, gitHubLocation?:array{repository?:string, commitId?:string}, string?:array{content?:string, sha256?:string}, appSpecContent?:array{content?:string, sha256?:string}}, status?:"Created"|"Queued"|"InProgress"|"Baking"|"Succeeded"|"Failed"|"Stopped"|"Ready", errorInformation?:array{code?:"AGENT_ISSUE"|"ALARM_ACTIVE"|"APPLICATION_MISSING"|"AUTOSCALING_VALIDATION_ERROR"|"AUTO_SCALING_CONFIGURATION"|"AUTO_SCALING_IAM_ROLE_PERMISSIONS"|"CODEDEPLOY_RESOURCE_CANNOT_BE_FOUND"|"CUSTOMER_APPLICATION_UNHEALTHY"|"DEPLOYMENT_GROUP_MISSING"|"ECS_UPDATE_ERROR"|"ELASTIC_LOAD_BALANCING_INVALID"|"ELB_INVALID_INSTANCE"|"HEALTH_CONSTRAINTS"|"HEALTH_CONSTRAINTS_INVALID"|"HOOK_EXECUTION_FAILURE"|"IAM_ROLE_MISSING"|"IAM_ROLE_PERMISSIONS"|"INTERNAL_ERROR"|"INVALID_ECS_SERVICE"|"INVALID_LAMBDA_CONFIGURATION"|"INVALID_LAMBDA_FUNCTION"|"INVALID_REVISION"|"MANUAL_STOP"|"MISSING_BLUE_GREEN_DEPLOYMENT_CONFIGURATION"|"MISSING_ELB_INFORMATION"|"MISSING_GITHUB_TOKEN"|"NO_EC2_SUBSCRIPTION"|"NO_INSTANCES"|"OVER_MAX_INSTANCES"|"RESOURCE_LIMIT_EXCEEDED"|"REVISION_MISSING"|"THROTTLED"|"TIMEOUT"|"CLOUDFORMATION_STACK_FAILURE", message?:string}, createTime?:int|string|\DateTimeInterface, startTime?:int|string|\DateTimeInterface, completeTime?:int|string|\DateTimeInterface, deploymentOverview?:array{Pending?:int, InProgress?:int, Succeeded?:int, Failed?:int, Skipped?:int, Ready?:int}, description?:string, creator?:"user"|"autoscaling"|"codeDeployRollback"|"CodeDeploy"|"CodeDeployAutoUpdate"|"CloudFormation"|"CloudFormationRollback"|"autoscalingTermination", ignoreApplicationStopFailures?:bool, autoRollbackConfiguration?:array{enabled?:bool, events?:array<"DEPLOYMENT_FAILURE"|"DEPLOYMENT_STOP_ON_ALARM"|"DEPLOYMENT_STOP_ON_REQUEST">}, updateOutdatedInstancesOnly?:bool, rollbackInfo?:array{rollbackDeploymentId?:string, rollbackTriggeringDeploymentId?:string, rollbackMessage?:string}, deploymentStyle?:array{deploymentType?:"IN_PLACE"|"BLUE_GREEN", deploymentOption?:"WITH_TRAFFIC_CONTROL"|"WITHOUT_TRAFFIC_CONTROL"}, targetInstances?:array{tagFilters?:array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>, autoScalingGroups?:array<string>, ec2TagSet?:array{ec2TagSetList?:array<array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>>}}, instanceTerminationWaitTimeStarted?:bool, blueGreenDeploymentConfiguration?:array{terminateBlueInstancesOnDeploymentSuccess?:array{action?:"TERMINATE"|"KEEP_ALIVE", terminationWaitTimeInMinutes?:int}, deploymentReadyOption?:array{actionOnTimeout?:"CONTINUE_DEPLOYMENT"|"STOP_DEPLOYMENT", waitTimeInMinutes?:int}, greenFleetProvisioningOption?:array{action?:"DISCOVER_EXISTING"|"COPY_AUTO_SCALING_GROUP"}}, loadBalancerInfo?:array{elbInfoList?:array<array{name?:string}>, targetGroupInfoList?:array<array{name?:string}>, targetGroupPairInfoList?:array<array{targetGroups?:array<array{name?:string}>, prodTrafficRoute?:array{listenerArns?:array<string>}, testTrafficRoute?:array{listenerArns?:array<string>}}>}, additionalDeploymentStatusInfo?:string, fileExistsBehavior?:"DISALLOW"|"OVERWRITE"|"RETAIN", deploymentStatusMessages?:array<string>, computePlatform?:"Server"|"Lambda"|"ECS", externalId?:string, relatedDeployments?:array{autoUpdateOutdatedInstancesRootDeploymentId?:string, autoUpdateOutdatedInstancesDeploymentIds?:array<string>}, overrideAlarmConfiguration?:array{enabled?:bool, ignorePollAlarmFailure?:bool, alarms?:array<array{name?:string}>}}>}>
     */
    public function batchGetDeploymentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{instanceNames:array<string>} $args
     * @return \AWS\Result<array{instanceInfos?:array<array{instanceName?:string, iamSessionArn?:string, iamUserArn?:string, instanceArn?:string, registerTime?:int|string|\DateTimeInterface, deregisterTime?:int|string|\DateTimeInterface, tags?:array<array{Key?:string, Value?:string}>}>}>
     */
    public function batchGetOnPremisesInstances(array $args): \AWS\Result { }

    /**
     * @param array{instanceNames:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{instanceInfos?:array<array{instanceName?:string, iamSessionArn?:string, iamUserArn?:string, instanceArn?:string, registerTime?:int|string|\DateTimeInterface, deregisterTime?:int|string|\DateTimeInterface, tags?:array<array{Key?:string, Value?:string}>}>}>
     */
    public function batchGetOnPremisesInstancesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deploymentId?:string, deploymentWaitType?:"READY_WAIT"|"TERMINATION_WAIT"} $args
     * @return \AWS\Result<void>
     */
    public function continueDeployment(array $args = []): \AWS\Result { }

    /**
     * @param array{deploymentId?:string, deploymentWaitType?:"READY_WAIT"|"TERMINATION_WAIT"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function continueDeploymentAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationName:string, computePlatform?:"Server"|"Lambda"|"ECS", tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{applicationId?:string}>
     */
    public function createApplication(array $args): \AWS\Result { }

    /**
     * @param array{applicationName:string, computePlatform?:"Server"|"Lambda"|"ECS", tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationId?:string}>
     */
    public function createApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationName:string, deploymentGroupName?:string, revision?:array{revisionType?:"S3"|"GitHub"|"String"|"AppSpecContent", s3Location?:array{bucket?:string, key?:string, bundleType?:"tar"|"tgz"|"zip"|"YAML"|"JSON", version?:string, eTag?:string}, gitHubLocation?:array{repository?:string, commitId?:string}, string?:array{content?:string, sha256?:string}, appSpecContent?:array{content?:string, sha256?:string}}, deploymentConfigName?:string, description?:string, ignoreApplicationStopFailures?:bool, targetInstances?:array{tagFilters?:array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>, autoScalingGroups?:array<string>, ec2TagSet?:array{ec2TagSetList?:array<array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>>}}, autoRollbackConfiguration?:array{enabled?:bool, events?:array<"DEPLOYMENT_FAILURE"|"DEPLOYMENT_STOP_ON_ALARM"|"DEPLOYMENT_STOP_ON_REQUEST">}, updateOutdatedInstancesOnly?:bool, fileExistsBehavior?:"DISALLOW"|"OVERWRITE"|"RETAIN", overrideAlarmConfiguration?:array{enabled?:bool, ignorePollAlarmFailure?:bool, alarms?:array<array{name?:string}>}} $args
     * @return \AWS\Result<array{deploymentId?:string}>
     */
    public function createDeployment(array $args): \AWS\Result { }

    /**
     * @param array{applicationName:string, deploymentGroupName?:string, revision?:array{revisionType?:"S3"|"GitHub"|"String"|"AppSpecContent", s3Location?:array{bucket?:string, key?:string, bundleType?:"tar"|"tgz"|"zip"|"YAML"|"JSON", version?:string, eTag?:string}, gitHubLocation?:array{repository?:string, commitId?:string}, string?:array{content?:string, sha256?:string}, appSpecContent?:array{content?:string, sha256?:string}}, deploymentConfigName?:string, description?:string, ignoreApplicationStopFailures?:bool, targetInstances?:array{tagFilters?:array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>, autoScalingGroups?:array<string>, ec2TagSet?:array{ec2TagSetList?:array<array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>>}}, autoRollbackConfiguration?:array{enabled?:bool, events?:array<"DEPLOYMENT_FAILURE"|"DEPLOYMENT_STOP_ON_ALARM"|"DEPLOYMENT_STOP_ON_REQUEST">}, updateOutdatedInstancesOnly?:bool, fileExistsBehavior?:"DISALLOW"|"OVERWRITE"|"RETAIN", overrideAlarmConfiguration?:array{enabled?:bool, ignorePollAlarmFailure?:bool, alarms?:array<array{name?:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{deploymentId?:string}>
     */
    public function createDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deploymentConfigName:string, minimumHealthyHosts?:array{type?:"HOST_COUNT"|"FLEET_PERCENT", value?:int}, trafficRoutingConfig?:array{type?:"TimeBasedCanary"|"TimeBasedLinear"|"AllAtOnce", timeBasedCanary?:array{canaryPercentage?:int, canaryInterval?:int}, timeBasedLinear?:array{linearPercentage?:int, linearInterval?:int}}, computePlatform?:"Server"|"Lambda"|"ECS", zonalConfig?:array{firstZoneMonitorDurationInSeconds?:int, monitorDurationInSeconds?:int, minimumHealthyHostsPerZone?:array{type?:"HOST_COUNT"|"FLEET_PERCENT", value?:int}}} $args
     * @return \AWS\Result<array{deploymentConfigId?:string}>
     */
    public function createDeploymentConfig(array $args): \AWS\Result { }

    /**
     * @param array{deploymentConfigName:string, minimumHealthyHosts?:array{type?:"HOST_COUNT"|"FLEET_PERCENT", value?:int}, trafficRoutingConfig?:array{type?:"TimeBasedCanary"|"TimeBasedLinear"|"AllAtOnce", timeBasedCanary?:array{canaryPercentage?:int, canaryInterval?:int}, timeBasedLinear?:array{linearPercentage?:int, linearInterval?:int}}, computePlatform?:"Server"|"Lambda"|"ECS", zonalConfig?:array{firstZoneMonitorDurationInSeconds?:int, monitorDurationInSeconds?:int, minimumHealthyHostsPerZone?:array{type?:"HOST_COUNT"|"FLEET_PERCENT", value?:int}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{deploymentConfigId?:string}>
     */
    public function createDeploymentConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationName:string, deploymentGroupName:string, deploymentConfigName?:string, ec2TagFilters?:array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>, onPremisesInstanceTagFilters?:array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>, autoScalingGroups?:array<string>, serviceRoleArn:string, triggerConfigurations?:array<array{triggerName?:string, triggerTargetArn?:string, triggerEvents?:array<"DeploymentStart"|"DeploymentSuccess"|"DeploymentFailure"|"DeploymentStop"|"DeploymentRollback"|"DeploymentReady"|"InstanceStart"|"InstanceSuccess"|"InstanceFailure"|"InstanceReady">}>, alarmConfiguration?:array{enabled?:bool, ignorePollAlarmFailure?:bool, alarms?:array<array{name?:string}>}, autoRollbackConfiguration?:array{enabled?:bool, events?:array<"DEPLOYMENT_FAILURE"|"DEPLOYMENT_STOP_ON_ALARM"|"DEPLOYMENT_STOP_ON_REQUEST">}, outdatedInstancesStrategy?:"UPDATE"|"IGNORE", deploymentStyle?:array{deploymentType?:"IN_PLACE"|"BLUE_GREEN", deploymentOption?:"WITH_TRAFFIC_CONTROL"|"WITHOUT_TRAFFIC_CONTROL"}, blueGreenDeploymentConfiguration?:array{terminateBlueInstancesOnDeploymentSuccess?:array{action?:"TERMINATE"|"KEEP_ALIVE", terminationWaitTimeInMinutes?:int}, deploymentReadyOption?:array{actionOnTimeout?:"CONTINUE_DEPLOYMENT"|"STOP_DEPLOYMENT", waitTimeInMinutes?:int}, greenFleetProvisioningOption?:array{action?:"DISCOVER_EXISTING"|"COPY_AUTO_SCALING_GROUP"}}, loadBalancerInfo?:array{elbInfoList?:array<array{name?:string}>, targetGroupInfoList?:array<array{name?:string}>, targetGroupPairInfoList?:array<array{targetGroups?:array<array{name?:string}>, prodTrafficRoute?:array{listenerArns?:array<string>}, testTrafficRoute?:array{listenerArns?:array<string>}}>}, ec2TagSet?:array{ec2TagSetList?:array<array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>>}, ecsServices?:array<array{serviceName?:string, clusterName?:string}>, onPremisesTagSet?:array{onPremisesTagSetList?:array<array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>>}, tags?:array<array{Key?:string, Value?:string}>, terminationHookEnabled?:bool} $args
     * @return \AWS\Result<array{deploymentGroupId?:string}>
     */
    public function createDeploymentGroup(array $args): \AWS\Result { }

    /**
     * @param array{applicationName:string, deploymentGroupName:string, deploymentConfigName?:string, ec2TagFilters?:array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>, onPremisesInstanceTagFilters?:array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>, autoScalingGroups?:array<string>, serviceRoleArn:string, triggerConfigurations?:array<array{triggerName?:string, triggerTargetArn?:string, triggerEvents?:array<"DeploymentStart"|"DeploymentSuccess"|"DeploymentFailure"|"DeploymentStop"|"DeploymentRollback"|"DeploymentReady"|"InstanceStart"|"InstanceSuccess"|"InstanceFailure"|"InstanceReady">}>, alarmConfiguration?:array{enabled?:bool, ignorePollAlarmFailure?:bool, alarms?:array<array{name?:string}>}, autoRollbackConfiguration?:array{enabled?:bool, events?:array<"DEPLOYMENT_FAILURE"|"DEPLOYMENT_STOP_ON_ALARM"|"DEPLOYMENT_STOP_ON_REQUEST">}, outdatedInstancesStrategy?:"UPDATE"|"IGNORE", deploymentStyle?:array{deploymentType?:"IN_PLACE"|"BLUE_GREEN", deploymentOption?:"WITH_TRAFFIC_CONTROL"|"WITHOUT_TRAFFIC_CONTROL"}, blueGreenDeploymentConfiguration?:array{terminateBlueInstancesOnDeploymentSuccess?:array{action?:"TERMINATE"|"KEEP_ALIVE", terminationWaitTimeInMinutes?:int}, deploymentReadyOption?:array{actionOnTimeout?:"CONTINUE_DEPLOYMENT"|"STOP_DEPLOYMENT", waitTimeInMinutes?:int}, greenFleetProvisioningOption?:array{action?:"DISCOVER_EXISTING"|"COPY_AUTO_SCALING_GROUP"}}, loadBalancerInfo?:array{elbInfoList?:array<array{name?:string}>, targetGroupInfoList?:array<array{name?:string}>, targetGroupPairInfoList?:array<array{targetGroups?:array<array{name?:string}>, prodTrafficRoute?:array{listenerArns?:array<string>}, testTrafficRoute?:array{listenerArns?:array<string>}}>}, ec2TagSet?:array{ec2TagSetList?:array<array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>>}, ecsServices?:array<array{serviceName?:string, clusterName?:string}>, onPremisesTagSet?:array{onPremisesTagSetList?:array<array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>>}, tags?:array<array{Key?:string, Value?:string}>, terminationHookEnabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{deploymentGroupId?:string}>
     */
    public function createDeploymentGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteApplication(array $args): \AWS\Result { }

    /**
     * @param array{applicationName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deploymentConfigName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDeploymentConfig(array $args): \AWS\Result { }

    /**
     * @param array{deploymentConfigName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDeploymentConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationName:string, deploymentGroupName:string} $args
     * @return \AWS\Result<array{hooksNotCleanedUp?:array<array{name?:string, hook?:string, terminationHook?:string}>}>
     */
    public function deleteDeploymentGroup(array $args): \AWS\Result { }

    /**
     * @param array{applicationName:string, deploymentGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{hooksNotCleanedUp?:array<array{name?:string, hook?:string, terminationHook?:string}>}>
     */
    public function deleteDeploymentGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{tokenName?:string} $args
     * @return \AWS\Result<array{tokenName?:string}>
     */
    public function deleteGitHubAccountToken(array $args = []): \AWS\Result { }

    /**
     * @param array{tokenName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tokenName?:string}>
     */
    public function deleteGitHubAccountTokenAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{externalId?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteResourcesByExternalId(array $args = []): \AWS\Result { }

    /**
     * @param array{externalId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteResourcesByExternalIdAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{instanceName:string} $args
     * @return \AWS\Result<void>
     */
    public function deregisterOnPremisesInstance(array $args): \AWS\Result { }

    /**
     * @param array{instanceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deregisterOnPremisesInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationName:string} $args
     * @return \AWS\Result<array{application?:array{applicationId?:string, applicationName?:string, createTime?:int|string|\DateTimeInterface, linkedToGitHub?:bool, gitHubAccountName?:string, computePlatform?:"Server"|"Lambda"|"ECS"}}>
     */
    public function getApplication(array $args): \AWS\Result { }

    /**
     * @param array{applicationName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{application?:array{applicationId?:string, applicationName?:string, createTime?:int|string|\DateTimeInterface, linkedToGitHub?:bool, gitHubAccountName?:string, computePlatform?:"Server"|"Lambda"|"ECS"}}>
     */
    public function getApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationName:string, revision:array{revisionType?:"S3"|"GitHub"|"String"|"AppSpecContent", s3Location?:array{bucket?:string, key?:string, bundleType?:"tar"|"tgz"|"zip"|"YAML"|"JSON", version?:string, eTag?:string}, gitHubLocation?:array{repository?:string, commitId?:string}, string?:array{content?:string, sha256?:string}, appSpecContent?:array{content?:string, sha256?:string}}} $args
     * @return \AWS\Result<array{applicationName?:string, revision?:array{revisionType?:"S3"|"GitHub"|"String"|"AppSpecContent", s3Location?:array{bucket?:string, key?:string, bundleType?:"tar"|"tgz"|"zip"|"YAML"|"JSON", version?:string, eTag?:string}, gitHubLocation?:array{repository?:string, commitId?:string}, string?:array{content?:string, sha256?:string}, appSpecContent?:array{content?:string, sha256?:string}}, revisionInfo?:array{description?:string, deploymentGroups?:array<string>, firstUsedTime?:int|string|\DateTimeInterface, lastUsedTime?:int|string|\DateTimeInterface, registerTime?:int|string|\DateTimeInterface}}>
     */
    public function getApplicationRevision(array $args): \AWS\Result { }

    /**
     * @param array{applicationName:string, revision:array{revisionType?:"S3"|"GitHub"|"String"|"AppSpecContent", s3Location?:array{bucket?:string, key?:string, bundleType?:"tar"|"tgz"|"zip"|"YAML"|"JSON", version?:string, eTag?:string}, gitHubLocation?:array{repository?:string, commitId?:string}, string?:array{content?:string, sha256?:string}, appSpecContent?:array{content?:string, sha256?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationName?:string, revision?:array{revisionType?:"S3"|"GitHub"|"String"|"AppSpecContent", s3Location?:array{bucket?:string, key?:string, bundleType?:"tar"|"tgz"|"zip"|"YAML"|"JSON", version?:string, eTag?:string}, gitHubLocation?:array{repository?:string, commitId?:string}, string?:array{content?:string, sha256?:string}, appSpecContent?:array{content?:string, sha256?:string}}, revisionInfo?:array{description?:string, deploymentGroups?:array<string>, firstUsedTime?:int|string|\DateTimeInterface, lastUsedTime?:int|string|\DateTimeInterface, registerTime?:int|string|\DateTimeInterface}}>
     */
    public function getApplicationRevisionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deploymentId:string} $args
     * @return \AWS\Result<array{deploymentInfo?:array{applicationName?:string, deploymentGroupName?:string, deploymentConfigName?:string, deploymentId?:string, previousRevision?:array{revisionType?:"S3"|"GitHub"|"String"|"AppSpecContent", s3Location?:array{bucket?:string, key?:string, bundleType?:"tar"|"tgz"|"zip"|"YAML"|"JSON", version?:string, eTag?:string}, gitHubLocation?:array{repository?:string, commitId?:string}, string?:array{content?:string, sha256?:string}, appSpecContent?:array{content?:string, sha256?:string}}, revision?:array{revisionType?:"S3"|"GitHub"|"String"|"AppSpecContent", s3Location?:array{bucket?:string, key?:string, bundleType?:"tar"|"tgz"|"zip"|"YAML"|"JSON", version?:string, eTag?:string}, gitHubLocation?:array{repository?:string, commitId?:string}, string?:array{content?:string, sha256?:string}, appSpecContent?:array{content?:string, sha256?:string}}, status?:"Created"|"Queued"|"InProgress"|"Baking"|"Succeeded"|"Failed"|"Stopped"|"Ready", errorInformation?:array{code?:"AGENT_ISSUE"|"ALARM_ACTIVE"|"APPLICATION_MISSING"|"AUTOSCALING_VALIDATION_ERROR"|"AUTO_SCALING_CONFIGURATION"|"AUTO_SCALING_IAM_ROLE_PERMISSIONS"|"CODEDEPLOY_RESOURCE_CANNOT_BE_FOUND"|"CUSTOMER_APPLICATION_UNHEALTHY"|"DEPLOYMENT_GROUP_MISSING"|"ECS_UPDATE_ERROR"|"ELASTIC_LOAD_BALANCING_INVALID"|"ELB_INVALID_INSTANCE"|"HEALTH_CONSTRAINTS"|"HEALTH_CONSTRAINTS_INVALID"|"HOOK_EXECUTION_FAILURE"|"IAM_ROLE_MISSING"|"IAM_ROLE_PERMISSIONS"|"INTERNAL_ERROR"|"INVALID_ECS_SERVICE"|"INVALID_LAMBDA_CONFIGURATION"|"INVALID_LAMBDA_FUNCTION"|"INVALID_REVISION"|"MANUAL_STOP"|"MISSING_BLUE_GREEN_DEPLOYMENT_CONFIGURATION"|"MISSING_ELB_INFORMATION"|"MISSING_GITHUB_TOKEN"|"NO_EC2_SUBSCRIPTION"|"NO_INSTANCES"|"OVER_MAX_INSTANCES"|"RESOURCE_LIMIT_EXCEEDED"|"REVISION_MISSING"|"THROTTLED"|"TIMEOUT"|"CLOUDFORMATION_STACK_FAILURE", message?:string}, createTime?:int|string|\DateTimeInterface, startTime?:int|string|\DateTimeInterface, completeTime?:int|string|\DateTimeInterface, deploymentOverview?:array{Pending?:int, InProgress?:int, Succeeded?:int, Failed?:int, Skipped?:int, Ready?:int}, description?:string, creator?:"user"|"autoscaling"|"codeDeployRollback"|"CodeDeploy"|"CodeDeployAutoUpdate"|"CloudFormation"|"CloudFormationRollback"|"autoscalingTermination", ignoreApplicationStopFailures?:bool, autoRollbackConfiguration?:array{enabled?:bool, events?:array<"DEPLOYMENT_FAILURE"|"DEPLOYMENT_STOP_ON_ALARM"|"DEPLOYMENT_STOP_ON_REQUEST">}, updateOutdatedInstancesOnly?:bool, rollbackInfo?:array{rollbackDeploymentId?:string, rollbackTriggeringDeploymentId?:string, rollbackMessage?:string}, deploymentStyle?:array{deploymentType?:"IN_PLACE"|"BLUE_GREEN", deploymentOption?:"WITH_TRAFFIC_CONTROL"|"WITHOUT_TRAFFIC_CONTROL"}, targetInstances?:array{tagFilters?:array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>, autoScalingGroups?:array<string>, ec2TagSet?:array{ec2TagSetList?:array<array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>>}}, instanceTerminationWaitTimeStarted?:bool, blueGreenDeploymentConfiguration?:array{terminateBlueInstancesOnDeploymentSuccess?:array{action?:"TERMINATE"|"KEEP_ALIVE", terminationWaitTimeInMinutes?:int}, deploymentReadyOption?:array{actionOnTimeout?:"CONTINUE_DEPLOYMENT"|"STOP_DEPLOYMENT", waitTimeInMinutes?:int}, greenFleetProvisioningOption?:array{action?:"DISCOVER_EXISTING"|"COPY_AUTO_SCALING_GROUP"}}, loadBalancerInfo?:array{elbInfoList?:array<array{name?:string}>, targetGroupInfoList?:array<array{name?:string}>, targetGroupPairInfoList?:array<array{targetGroups?:array<array{name?:string}>, prodTrafficRoute?:array{listenerArns?:array<string>}, testTrafficRoute?:array{listenerArns?:array<string>}}>}, additionalDeploymentStatusInfo?:string, fileExistsBehavior?:"DISALLOW"|"OVERWRITE"|"RETAIN", deploymentStatusMessages?:array<string>, computePlatform?:"Server"|"Lambda"|"ECS", externalId?:string, relatedDeployments?:array{autoUpdateOutdatedInstancesRootDeploymentId?:string, autoUpdateOutdatedInstancesDeploymentIds?:array<string>}, overrideAlarmConfiguration?:array{enabled?:bool, ignorePollAlarmFailure?:bool, alarms?:array<array{name?:string}>}}}>
     */
    public function getDeployment(array $args): \AWS\Result { }

    /**
     * @param array{deploymentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{deploymentInfo?:array{applicationName?:string, deploymentGroupName?:string, deploymentConfigName?:string, deploymentId?:string, previousRevision?:array{revisionType?:"S3"|"GitHub"|"String"|"AppSpecContent", s3Location?:array{bucket?:string, key?:string, bundleType?:"tar"|"tgz"|"zip"|"YAML"|"JSON", version?:string, eTag?:string}, gitHubLocation?:array{repository?:string, commitId?:string}, string?:array{content?:string, sha256?:string}, appSpecContent?:array{content?:string, sha256?:string}}, revision?:array{revisionType?:"S3"|"GitHub"|"String"|"AppSpecContent", s3Location?:array{bucket?:string, key?:string, bundleType?:"tar"|"tgz"|"zip"|"YAML"|"JSON", version?:string, eTag?:string}, gitHubLocation?:array{repository?:string, commitId?:string}, string?:array{content?:string, sha256?:string}, appSpecContent?:array{content?:string, sha256?:string}}, status?:"Created"|"Queued"|"InProgress"|"Baking"|"Succeeded"|"Failed"|"Stopped"|"Ready", errorInformation?:array{code?:"AGENT_ISSUE"|"ALARM_ACTIVE"|"APPLICATION_MISSING"|"AUTOSCALING_VALIDATION_ERROR"|"AUTO_SCALING_CONFIGURATION"|"AUTO_SCALING_IAM_ROLE_PERMISSIONS"|"CODEDEPLOY_RESOURCE_CANNOT_BE_FOUND"|"CUSTOMER_APPLICATION_UNHEALTHY"|"DEPLOYMENT_GROUP_MISSING"|"ECS_UPDATE_ERROR"|"ELASTIC_LOAD_BALANCING_INVALID"|"ELB_INVALID_INSTANCE"|"HEALTH_CONSTRAINTS"|"HEALTH_CONSTRAINTS_INVALID"|"HOOK_EXECUTION_FAILURE"|"IAM_ROLE_MISSING"|"IAM_ROLE_PERMISSIONS"|"INTERNAL_ERROR"|"INVALID_ECS_SERVICE"|"INVALID_LAMBDA_CONFIGURATION"|"INVALID_LAMBDA_FUNCTION"|"INVALID_REVISION"|"MANUAL_STOP"|"MISSING_BLUE_GREEN_DEPLOYMENT_CONFIGURATION"|"MISSING_ELB_INFORMATION"|"MISSING_GITHUB_TOKEN"|"NO_EC2_SUBSCRIPTION"|"NO_INSTANCES"|"OVER_MAX_INSTANCES"|"RESOURCE_LIMIT_EXCEEDED"|"REVISION_MISSING"|"THROTTLED"|"TIMEOUT"|"CLOUDFORMATION_STACK_FAILURE", message?:string}, createTime?:int|string|\DateTimeInterface, startTime?:int|string|\DateTimeInterface, completeTime?:int|string|\DateTimeInterface, deploymentOverview?:array{Pending?:int, InProgress?:int, Succeeded?:int, Failed?:int, Skipped?:int, Ready?:int}, description?:string, creator?:"user"|"autoscaling"|"codeDeployRollback"|"CodeDeploy"|"CodeDeployAutoUpdate"|"CloudFormation"|"CloudFormationRollback"|"autoscalingTermination", ignoreApplicationStopFailures?:bool, autoRollbackConfiguration?:array{enabled?:bool, events?:array<"DEPLOYMENT_FAILURE"|"DEPLOYMENT_STOP_ON_ALARM"|"DEPLOYMENT_STOP_ON_REQUEST">}, updateOutdatedInstancesOnly?:bool, rollbackInfo?:array{rollbackDeploymentId?:string, rollbackTriggeringDeploymentId?:string, rollbackMessage?:string}, deploymentStyle?:array{deploymentType?:"IN_PLACE"|"BLUE_GREEN", deploymentOption?:"WITH_TRAFFIC_CONTROL"|"WITHOUT_TRAFFIC_CONTROL"}, targetInstances?:array{tagFilters?:array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>, autoScalingGroups?:array<string>, ec2TagSet?:array{ec2TagSetList?:array<array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>>}}, instanceTerminationWaitTimeStarted?:bool, blueGreenDeploymentConfiguration?:array{terminateBlueInstancesOnDeploymentSuccess?:array{action?:"TERMINATE"|"KEEP_ALIVE", terminationWaitTimeInMinutes?:int}, deploymentReadyOption?:array{actionOnTimeout?:"CONTINUE_DEPLOYMENT"|"STOP_DEPLOYMENT", waitTimeInMinutes?:int}, greenFleetProvisioningOption?:array{action?:"DISCOVER_EXISTING"|"COPY_AUTO_SCALING_GROUP"}}, loadBalancerInfo?:array{elbInfoList?:array<array{name?:string}>, targetGroupInfoList?:array<array{name?:string}>, targetGroupPairInfoList?:array<array{targetGroups?:array<array{name?:string}>, prodTrafficRoute?:array{listenerArns?:array<string>}, testTrafficRoute?:array{listenerArns?:array<string>}}>}, additionalDeploymentStatusInfo?:string, fileExistsBehavior?:"DISALLOW"|"OVERWRITE"|"RETAIN", deploymentStatusMessages?:array<string>, computePlatform?:"Server"|"Lambda"|"ECS", externalId?:string, relatedDeployments?:array{autoUpdateOutdatedInstancesRootDeploymentId?:string, autoUpdateOutdatedInstancesDeploymentIds?:array<string>}, overrideAlarmConfiguration?:array{enabled?:bool, ignorePollAlarmFailure?:bool, alarms?:array<array{name?:string}>}}}>
     */
    public function getDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deploymentConfigName:string} $args
     * @return \AWS\Result<array{deploymentConfigInfo?:array{deploymentConfigId?:string, deploymentConfigName?:string, minimumHealthyHosts?:array{type?:"HOST_COUNT"|"FLEET_PERCENT", value?:int}, createTime?:int|string|\DateTimeInterface, computePlatform?:"Server"|"Lambda"|"ECS", trafficRoutingConfig?:array{type?:"TimeBasedCanary"|"TimeBasedLinear"|"AllAtOnce", timeBasedCanary?:array{canaryPercentage?:int, canaryInterval?:int}, timeBasedLinear?:array{linearPercentage?:int, linearInterval?:int}}, zonalConfig?:array{firstZoneMonitorDurationInSeconds?:int, monitorDurationInSeconds?:int, minimumHealthyHostsPerZone?:array{type?:"HOST_COUNT"|"FLEET_PERCENT", value?:int}}}}>
     */
    public function getDeploymentConfig(array $args): \AWS\Result { }

    /**
     * @param array{deploymentConfigName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{deploymentConfigInfo?:array{deploymentConfigId?:string, deploymentConfigName?:string, minimumHealthyHosts?:array{type?:"HOST_COUNT"|"FLEET_PERCENT", value?:int}, createTime?:int|string|\DateTimeInterface, computePlatform?:"Server"|"Lambda"|"ECS", trafficRoutingConfig?:array{type?:"TimeBasedCanary"|"TimeBasedLinear"|"AllAtOnce", timeBasedCanary?:array{canaryPercentage?:int, canaryInterval?:int}, timeBasedLinear?:array{linearPercentage?:int, linearInterval?:int}}, zonalConfig?:array{firstZoneMonitorDurationInSeconds?:int, monitorDurationInSeconds?:int, minimumHealthyHostsPerZone?:array{type?:"HOST_COUNT"|"FLEET_PERCENT", value?:int}}}}>
     */
    public function getDeploymentConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationName:string, deploymentGroupName:string} $args
     * @return \AWS\Result<array{deploymentGroupInfo?:array{applicationName?:string, deploymentGroupId?:string, deploymentGroupName?:string, deploymentConfigName?:string, ec2TagFilters?:array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>, onPremisesInstanceTagFilters?:array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>, autoScalingGroups?:array<array{name?:string, hook?:string, terminationHook?:string}>, serviceRoleArn?:string, targetRevision?:array{revisionType?:"S3"|"GitHub"|"String"|"AppSpecContent", s3Location?:array{bucket?:string, key?:string, bundleType?:"tar"|"tgz"|"zip"|"YAML"|"JSON", version?:string, eTag?:string}, gitHubLocation?:array{repository?:string, commitId?:string}, string?:array{content?:string, sha256?:string}, appSpecContent?:array{content?:string, sha256?:string}}, triggerConfigurations?:array<array{triggerName?:string, triggerTargetArn?:string, triggerEvents?:array<"DeploymentStart"|"DeploymentSuccess"|"DeploymentFailure"|"DeploymentStop"|"DeploymentRollback"|"DeploymentReady"|"InstanceStart"|"InstanceSuccess"|"InstanceFailure"|"InstanceReady">}>, alarmConfiguration?:array{enabled?:bool, ignorePollAlarmFailure?:bool, alarms?:array<array{name?:string}>}, autoRollbackConfiguration?:array{enabled?:bool, events?:array<"DEPLOYMENT_FAILURE"|"DEPLOYMENT_STOP_ON_ALARM"|"DEPLOYMENT_STOP_ON_REQUEST">}, deploymentStyle?:array{deploymentType?:"IN_PLACE"|"BLUE_GREEN", deploymentOption?:"WITH_TRAFFIC_CONTROL"|"WITHOUT_TRAFFIC_CONTROL"}, outdatedInstancesStrategy?:"UPDATE"|"IGNORE", blueGreenDeploymentConfiguration?:array{terminateBlueInstancesOnDeploymentSuccess?:array{action?:"TERMINATE"|"KEEP_ALIVE", terminationWaitTimeInMinutes?:int}, deploymentReadyOption?:array{actionOnTimeout?:"CONTINUE_DEPLOYMENT"|"STOP_DEPLOYMENT", waitTimeInMinutes?:int}, greenFleetProvisioningOption?:array{action?:"DISCOVER_EXISTING"|"COPY_AUTO_SCALING_GROUP"}}, loadBalancerInfo?:array{elbInfoList?:array<array{name?:string}>, targetGroupInfoList?:array<array{name?:string}>, targetGroupPairInfoList?:array<array{targetGroups?:array<array{name?:string}>, prodTrafficRoute?:array{listenerArns?:array<string>}, testTrafficRoute?:array{listenerArns?:array<string>}}>}, lastSuccessfulDeployment?:array{deploymentId?:string, status?:"Created"|"Queued"|"InProgress"|"Baking"|"Succeeded"|"Failed"|"Stopped"|"Ready", endTime?:int|string|\DateTimeInterface, createTime?:int|string|\DateTimeInterface}, lastAttemptedDeployment?:array{deploymentId?:string, status?:"Created"|"Queued"|"InProgress"|"Baking"|"Succeeded"|"Failed"|"Stopped"|"Ready", endTime?:int|string|\DateTimeInterface, createTime?:int|string|\DateTimeInterface}, ec2TagSet?:array{ec2TagSetList?:array<array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>>}, onPremisesTagSet?:array{onPremisesTagSetList?:array<array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>>}, computePlatform?:"Server"|"Lambda"|"ECS", ecsServices?:array<array{serviceName?:string, clusterName?:string}>, terminationHookEnabled?:bool}}>
     */
    public function getDeploymentGroup(array $args): \AWS\Result { }

    /**
     * @param array{applicationName:string, deploymentGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{deploymentGroupInfo?:array{applicationName?:string, deploymentGroupId?:string, deploymentGroupName?:string, deploymentConfigName?:string, ec2TagFilters?:array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>, onPremisesInstanceTagFilters?:array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>, autoScalingGroups?:array<array{name?:string, hook?:string, terminationHook?:string}>, serviceRoleArn?:string, targetRevision?:array{revisionType?:"S3"|"GitHub"|"String"|"AppSpecContent", s3Location?:array{bucket?:string, key?:string, bundleType?:"tar"|"tgz"|"zip"|"YAML"|"JSON", version?:string, eTag?:string}, gitHubLocation?:array{repository?:string, commitId?:string}, string?:array{content?:string, sha256?:string}, appSpecContent?:array{content?:string, sha256?:string}}, triggerConfigurations?:array<array{triggerName?:string, triggerTargetArn?:string, triggerEvents?:array<"DeploymentStart"|"DeploymentSuccess"|"DeploymentFailure"|"DeploymentStop"|"DeploymentRollback"|"DeploymentReady"|"InstanceStart"|"InstanceSuccess"|"InstanceFailure"|"InstanceReady">}>, alarmConfiguration?:array{enabled?:bool, ignorePollAlarmFailure?:bool, alarms?:array<array{name?:string}>}, autoRollbackConfiguration?:array{enabled?:bool, events?:array<"DEPLOYMENT_FAILURE"|"DEPLOYMENT_STOP_ON_ALARM"|"DEPLOYMENT_STOP_ON_REQUEST">}, deploymentStyle?:array{deploymentType?:"IN_PLACE"|"BLUE_GREEN", deploymentOption?:"WITH_TRAFFIC_CONTROL"|"WITHOUT_TRAFFIC_CONTROL"}, outdatedInstancesStrategy?:"UPDATE"|"IGNORE", blueGreenDeploymentConfiguration?:array{terminateBlueInstancesOnDeploymentSuccess?:array{action?:"TERMINATE"|"KEEP_ALIVE", terminationWaitTimeInMinutes?:int}, deploymentReadyOption?:array{actionOnTimeout?:"CONTINUE_DEPLOYMENT"|"STOP_DEPLOYMENT", waitTimeInMinutes?:int}, greenFleetProvisioningOption?:array{action?:"DISCOVER_EXISTING"|"COPY_AUTO_SCALING_GROUP"}}, loadBalancerInfo?:array{elbInfoList?:array<array{name?:string}>, targetGroupInfoList?:array<array{name?:string}>, targetGroupPairInfoList?:array<array{targetGroups?:array<array{name?:string}>, prodTrafficRoute?:array{listenerArns?:array<string>}, testTrafficRoute?:array{listenerArns?:array<string>}}>}, lastSuccessfulDeployment?:array{deploymentId?:string, status?:"Created"|"Queued"|"InProgress"|"Baking"|"Succeeded"|"Failed"|"Stopped"|"Ready", endTime?:int|string|\DateTimeInterface, createTime?:int|string|\DateTimeInterface}, lastAttemptedDeployment?:array{deploymentId?:string, status?:"Created"|"Queued"|"InProgress"|"Baking"|"Succeeded"|"Failed"|"Stopped"|"Ready", endTime?:int|string|\DateTimeInterface, createTime?:int|string|\DateTimeInterface}, ec2TagSet?:array{ec2TagSetList?:array<array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>>}, onPremisesTagSet?:array{onPremisesTagSetList?:array<array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>>}, computePlatform?:"Server"|"Lambda"|"ECS", ecsServices?:array<array{serviceName?:string, clusterName?:string}>, terminationHookEnabled?:bool}}>
     */
    public function getDeploymentGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deploymentId:string, instanceId:string} $args
     * @return \AWS\Result<array{instanceSummary?:array{deploymentId?:string, instanceId?:string, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"|"Ready", lastUpdatedAt?:int|string|\DateTimeInterface, lifecycleEvents?:array<array{lifecycleEventName?:string, diagnostics?:array{errorCode?:"Success"|"ScriptMissing"|"ScriptNotExecutable"|"ScriptTimedOut"|"ScriptFailed"|"UnknownError", scriptName?:string, message?:string, logTail?:string}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"}>, instanceType?:"Blue"|"Green"}}>
     */
    public function getDeploymentInstance(array $args): \AWS\Result { }

    /**
     * @param array{deploymentId:string, instanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{instanceSummary?:array{deploymentId?:string, instanceId?:string, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"|"Ready", lastUpdatedAt?:int|string|\DateTimeInterface, lifecycleEvents?:array<array{lifecycleEventName?:string, diagnostics?:array{errorCode?:"Success"|"ScriptMissing"|"ScriptNotExecutable"|"ScriptTimedOut"|"ScriptFailed"|"UnknownError", scriptName?:string, message?:string, logTail?:string}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"}>, instanceType?:"Blue"|"Green"}}>
     */
    public function getDeploymentInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deploymentId:string, targetId:string} $args
     * @return \AWS\Result<array{deploymentTarget?:array{deploymentTargetType?:"InstanceTarget"|"LambdaTarget"|"ECSTarget"|"CloudFormationTarget", instanceTarget?:array{deploymentId?:string, targetId?:string, targetArn?:string, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"|"Ready", lastUpdatedAt?:int|string|\DateTimeInterface, lifecycleEvents?:array<array{lifecycleEventName?:string, diagnostics?:array{errorCode?:"Success"|"ScriptMissing"|"ScriptNotExecutable"|"ScriptTimedOut"|"ScriptFailed"|"UnknownError", scriptName?:string, message?:string, logTail?:string}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"}>, instanceLabel?:"Blue"|"Green"}, lambdaTarget?:array{deploymentId?:string, targetId?:string, targetArn?:string, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"|"Ready", lastUpdatedAt?:int|string|\DateTimeInterface, lifecycleEvents?:array<array{lifecycleEventName?:string, diagnostics?:array{errorCode?:"Success"|"ScriptMissing"|"ScriptNotExecutable"|"ScriptTimedOut"|"ScriptFailed"|"UnknownError", scriptName?:string, message?:string, logTail?:string}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"}>, lambdaFunctionInfo?:array{functionName?:string, functionAlias?:string, currentVersion?:string, targetVersion?:string, targetVersionWeight?:float}}, ecsTarget?:array{deploymentId?:string, targetId?:string, targetArn?:string, lastUpdatedAt?:int|string|\DateTimeInterface, lifecycleEvents?:array<array{lifecycleEventName?:string, diagnostics?:array{errorCode?:"Success"|"ScriptMissing"|"ScriptNotExecutable"|"ScriptTimedOut"|"ScriptFailed"|"UnknownError", scriptName?:string, message?:string, logTail?:string}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"}>, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"|"Ready", taskSetsInfo?:array<array{identifer?:string, desiredCount?:int, pendingCount?:int, runningCount?:int, status?:string, trafficWeight?:float, targetGroup?:array{name?:string}, taskSetLabel?:"Blue"|"Green"}>}, cloudFormationTarget?:array{deploymentId?:string, targetId?:string, lastUpdatedAt?:int|string|\DateTimeInterface, lifecycleEvents?:array<array{lifecycleEventName?:string, diagnostics?:array{errorCode?:"Success"|"ScriptMissing"|"ScriptNotExecutable"|"ScriptTimedOut"|"ScriptFailed"|"UnknownError", scriptName?:string, message?:string, logTail?:string}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"}>, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"|"Ready", resourceType?:string, targetVersionWeight?:float}}}>
     */
    public function getDeploymentTarget(array $args): \AWS\Result { }

    /**
     * @param array{deploymentId:string, targetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{deploymentTarget?:array{deploymentTargetType?:"InstanceTarget"|"LambdaTarget"|"ECSTarget"|"CloudFormationTarget", instanceTarget?:array{deploymentId?:string, targetId?:string, targetArn?:string, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"|"Ready", lastUpdatedAt?:int|string|\DateTimeInterface, lifecycleEvents?:array<array{lifecycleEventName?:string, diagnostics?:array{errorCode?:"Success"|"ScriptMissing"|"ScriptNotExecutable"|"ScriptTimedOut"|"ScriptFailed"|"UnknownError", scriptName?:string, message?:string, logTail?:string}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"}>, instanceLabel?:"Blue"|"Green"}, lambdaTarget?:array{deploymentId?:string, targetId?:string, targetArn?:string, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"|"Ready", lastUpdatedAt?:int|string|\DateTimeInterface, lifecycleEvents?:array<array{lifecycleEventName?:string, diagnostics?:array{errorCode?:"Success"|"ScriptMissing"|"ScriptNotExecutable"|"ScriptTimedOut"|"ScriptFailed"|"UnknownError", scriptName?:string, message?:string, logTail?:string}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"}>, lambdaFunctionInfo?:array{functionName?:string, functionAlias?:string, currentVersion?:string, targetVersion?:string, targetVersionWeight?:float}}, ecsTarget?:array{deploymentId?:string, targetId?:string, targetArn?:string, lastUpdatedAt?:int|string|\DateTimeInterface, lifecycleEvents?:array<array{lifecycleEventName?:string, diagnostics?:array{errorCode?:"Success"|"ScriptMissing"|"ScriptNotExecutable"|"ScriptTimedOut"|"ScriptFailed"|"UnknownError", scriptName?:string, message?:string, logTail?:string}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"}>, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"|"Ready", taskSetsInfo?:array<array{identifer?:string, desiredCount?:int, pendingCount?:int, runningCount?:int, status?:string, trafficWeight?:float, targetGroup?:array{name?:string}, taskSetLabel?:"Blue"|"Green"}>}, cloudFormationTarget?:array{deploymentId?:string, targetId?:string, lastUpdatedAt?:int|string|\DateTimeInterface, lifecycleEvents?:array<array{lifecycleEventName?:string, diagnostics?:array{errorCode?:"Success"|"ScriptMissing"|"ScriptNotExecutable"|"ScriptTimedOut"|"ScriptFailed"|"UnknownError", scriptName?:string, message?:string, logTail?:string}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"}>, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"|"Ready", resourceType?:string, targetVersionWeight?:float}}}>
     */
    public function getDeploymentTargetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{instanceName:string} $args
     * @return \AWS\Result<array{instanceInfo?:array{instanceName?:string, iamSessionArn?:string, iamUserArn?:string, instanceArn?:string, registerTime?:int|string|\DateTimeInterface, deregisterTime?:int|string|\DateTimeInterface, tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function getOnPremisesInstance(array $args): \AWS\Result { }

    /**
     * @param array{instanceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{instanceInfo?:array{instanceName?:string, iamSessionArn?:string, iamUserArn?:string, instanceArn?:string, registerTime?:int|string|\DateTimeInterface, deregisterTime?:int|string|\DateTimeInterface, tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function getOnPremisesInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationName:string, sortBy?:"registerTime"|"firstUsedTime"|"lastUsedTime", sortOrder?:"ascending"|"descending", s3Bucket?:string, s3KeyPrefix?:string, deployed?:"include"|"exclude"|"ignore", nextToken?:string} $args
     * @return \AWS\Result<array{revisions?:array<array{revisionType?:"S3"|"GitHub"|"String"|"AppSpecContent", s3Location?:array{bucket?:string, key?:string, bundleType?:"tar"|"tgz"|"zip"|"YAML"|"JSON", version?:string, eTag?:string}, gitHubLocation?:array{repository?:string, commitId?:string}, string?:array{content?:string, sha256?:string}, appSpecContent?:array{content?:string, sha256?:string}}>, nextToken?:string}>
     */
    public function listApplicationRevisions(array $args): \AWS\Result { }

    /**
     * @param array{applicationName:string, sortBy?:"registerTime"|"firstUsedTime"|"lastUsedTime", sortOrder?:"ascending"|"descending", s3Bucket?:string, s3KeyPrefix?:string, deployed?:"include"|"exclude"|"ignore", nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{revisions?:array<array{revisionType?:"S3"|"GitHub"|"String"|"AppSpecContent", s3Location?:array{bucket?:string, key?:string, bundleType?:"tar"|"tgz"|"zip"|"YAML"|"JSON", version?:string, eTag?:string}, gitHubLocation?:array{repository?:string, commitId?:string}, string?:array{content?:string, sha256?:string}, appSpecContent?:array{content?:string, sha256?:string}}>, nextToken?:string}>
     */
    public function listApplicationRevisionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string} $args
     * @return \AWS\Result<array{applications?:array<string>, nextToken?:string}>
     */
    public function listApplications(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{applications?:array<string>, nextToken?:string}>
     */
    public function listApplicationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string} $args
     * @return \AWS\Result<array{deploymentConfigsList?:array<string>, nextToken?:string}>
     */
    public function listDeploymentConfigs(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{deploymentConfigsList?:array<string>, nextToken?:string}>
     */
    public function listDeploymentConfigsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationName:string, nextToken?:string} $args
     * @return \AWS\Result<array{applicationName?:string, deploymentGroups?:array<string>, nextToken?:string}>
     */
    public function listDeploymentGroups(array $args): \AWS\Result { }

    /**
     * @param array{applicationName:string, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationName?:string, deploymentGroups?:array<string>, nextToken?:string}>
     */
    public function listDeploymentGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deploymentId:string, nextToken?:string, instanceStatusFilter?:array<"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"|"Ready">, instanceTypeFilter?:array<"Blue"|"Green">} $args
     * @return \AWS\Result<array{instancesList?:array<string>, nextToken?:string}>
     */
    public function listDeploymentInstances(array $args): \AWS\Result { }

    /**
     * @param array{deploymentId:string, nextToken?:string, instanceStatusFilter?:array<"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"|"Ready">, instanceTypeFilter?:array<"Blue"|"Green">} $args
     * @return \GuzzleHttp\Promise\Promise<array{instancesList?:array<string>, nextToken?:string}>
     */
    public function listDeploymentInstancesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deploymentId:string, nextToken?:string, targetFilters?:array<"TargetStatus"|"ServerInstanceLabel", array<string>>} $args
     * @return \AWS\Result<array{targetIds?:array<string>, nextToken?:string}>
     */
    public function listDeploymentTargets(array $args): \AWS\Result { }

    /**
     * @param array{deploymentId:string, nextToken?:string, targetFilters?:array<"TargetStatus"|"ServerInstanceLabel", array<string>>} $args
     * @return \GuzzleHttp\Promise\Promise<array{targetIds?:array<string>, nextToken?:string}>
     */
    public function listDeploymentTargetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationName?:string, deploymentGroupName?:string, externalId?:string, includeOnlyStatuses?:array<"Created"|"Queued"|"InProgress"|"Baking"|"Succeeded"|"Failed"|"Stopped"|"Ready">, createTimeRange?:array{start?:int|string|\DateTimeInterface, end?:int|string|\DateTimeInterface}, nextToken?:string} $args
     * @return \AWS\Result<array{deployments?:array<string>, nextToken?:string}>
     */
    public function listDeployments(array $args = []): \AWS\Result { }

    /**
     * @param array{applicationName?:string, deploymentGroupName?:string, externalId?:string, includeOnlyStatuses?:array<"Created"|"Queued"|"InProgress"|"Baking"|"Succeeded"|"Failed"|"Stopped"|"Ready">, createTimeRange?:array{start?:int|string|\DateTimeInterface, end?:int|string|\DateTimeInterface}, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{deployments?:array<string>, nextToken?:string}>
     */
    public function listDeploymentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string} $args
     * @return \AWS\Result<array{tokenNameList?:array<string>, nextToken?:string}>
     */
    public function listGitHubAccountTokenNames(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tokenNameList?:array<string>, nextToken?:string}>
     */
    public function listGitHubAccountTokenNamesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{registrationStatus?:"Registered"|"Deregistered", tagFilters?:array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>, nextToken?:string} $args
     * @return \AWS\Result<array{instanceNames?:array<string>, nextToken?:string}>
     */
    public function listOnPremisesInstances(array $args = []): \AWS\Result { }

    /**
     * @param array{registrationStatus?:"Registered"|"Deregistered", tagFilters?:array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{instanceNames?:array<string>, nextToken?:string}>
     */
    public function listOnPremisesInstancesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, NextToken?:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key?:string, Value?:string}>, NextToken?:string}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key?:string, Value?:string}>, NextToken?:string}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deploymentId?:string, lifecycleEventHookExecutionId?:string, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"} $args
     * @return \AWS\Result<array{lifecycleEventHookExecutionId?:string}>
     */
    public function putLifecycleEventHookExecutionStatus(array $args = []): \AWS\Result { }

    /**
     * @param array{deploymentId?:string, lifecycleEventHookExecutionId?:string, status?:"Pending"|"InProgress"|"Succeeded"|"Failed"|"Skipped"|"Unknown"} $args
     * @return \GuzzleHttp\Promise\Promise<array{lifecycleEventHookExecutionId?:string}>
     */
    public function putLifecycleEventHookExecutionStatusAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationName:string, description?:string, revision:array{revisionType?:"S3"|"GitHub"|"String"|"AppSpecContent", s3Location?:array{bucket?:string, key?:string, bundleType?:"tar"|"tgz"|"zip"|"YAML"|"JSON", version?:string, eTag?:string}, gitHubLocation?:array{repository?:string, commitId?:string}, string?:array{content?:string, sha256?:string}, appSpecContent?:array{content?:string, sha256?:string}}} $args
     * @return \AWS\Result<void>
     */
    public function registerApplicationRevision(array $args): \AWS\Result { }

    /**
     * @param array{applicationName:string, description?:string, revision:array{revisionType?:"S3"|"GitHub"|"String"|"AppSpecContent", s3Location?:array{bucket?:string, key?:string, bundleType?:"tar"|"tgz"|"zip"|"YAML"|"JSON", version?:string, eTag?:string}, gitHubLocation?:array{repository?:string, commitId?:string}, string?:array{content?:string, sha256?:string}, appSpecContent?:array{content?:string, sha256?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function registerApplicationRevisionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{instanceName:string, iamSessionArn?:string, iamUserArn?:string} $args
     * @return \AWS\Result<void>
     */
    public function registerOnPremisesInstance(array $args): \AWS\Result { }

    /**
     * @param array{instanceName:string, iamSessionArn?:string, iamUserArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function registerOnPremisesInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{tags:array<array{Key?:string, Value?:string}>, instanceNames:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function removeTagsFromOnPremisesInstances(array $args): \AWS\Result { }

    /**
     * @param array{tags:array<array{Key?:string, Value?:string}>, instanceNames:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function removeTagsFromOnPremisesInstancesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deploymentId?:string} $args
     * @return \AWS\Result<void>
     */
    public function skipWaitTimeForInstanceTermination(array $args = []): \AWS\Result { }

    /**
     * @param array{deploymentId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function skipWaitTimeForInstanceTerminationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deploymentId:string, autoRollbackEnabled?:bool} $args
     * @return \AWS\Result<array{status?:"Pending"|"Succeeded", statusMessage?:string}>
     */
    public function stopDeployment(array $args): \AWS\Result { }

    /**
     * @param array{deploymentId:string, autoRollbackEnabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{status?:"Pending"|"Succeeded", statusMessage?:string}>
     */
    public function stopDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Tags:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Tags:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationName?:string, newApplicationName?:string} $args
     * @return \AWS\Result<void>
     */
    public function updateApplication(array $args = []): \AWS\Result { }

    /**
     * @param array{applicationName?:string, newApplicationName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateApplicationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicationName:string, currentDeploymentGroupName:string, newDeploymentGroupName?:string, deploymentConfigName?:string, ec2TagFilters?:array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>, onPremisesInstanceTagFilters?:array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>, autoScalingGroups?:array<string>, serviceRoleArn?:string, triggerConfigurations?:array<array{triggerName?:string, triggerTargetArn?:string, triggerEvents?:array<"DeploymentStart"|"DeploymentSuccess"|"DeploymentFailure"|"DeploymentStop"|"DeploymentRollback"|"DeploymentReady"|"InstanceStart"|"InstanceSuccess"|"InstanceFailure"|"InstanceReady">}>, alarmConfiguration?:array{enabled?:bool, ignorePollAlarmFailure?:bool, alarms?:array<array{name?:string}>}, autoRollbackConfiguration?:array{enabled?:bool, events?:array<"DEPLOYMENT_FAILURE"|"DEPLOYMENT_STOP_ON_ALARM"|"DEPLOYMENT_STOP_ON_REQUEST">}, outdatedInstancesStrategy?:"UPDATE"|"IGNORE", deploymentStyle?:array{deploymentType?:"IN_PLACE"|"BLUE_GREEN", deploymentOption?:"WITH_TRAFFIC_CONTROL"|"WITHOUT_TRAFFIC_CONTROL"}, blueGreenDeploymentConfiguration?:array{terminateBlueInstancesOnDeploymentSuccess?:array{action?:"TERMINATE"|"KEEP_ALIVE", terminationWaitTimeInMinutes?:int}, deploymentReadyOption?:array{actionOnTimeout?:"CONTINUE_DEPLOYMENT"|"STOP_DEPLOYMENT", waitTimeInMinutes?:int}, greenFleetProvisioningOption?:array{action?:"DISCOVER_EXISTING"|"COPY_AUTO_SCALING_GROUP"}}, loadBalancerInfo?:array{elbInfoList?:array<array{name?:string}>, targetGroupInfoList?:array<array{name?:string}>, targetGroupPairInfoList?:array<array{targetGroups?:array<array{name?:string}>, prodTrafficRoute?:array{listenerArns?:array<string>}, testTrafficRoute?:array{listenerArns?:array<string>}}>}, ec2TagSet?:array{ec2TagSetList?:array<array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>>}, ecsServices?:array<array{serviceName?:string, clusterName?:string}>, onPremisesTagSet?:array{onPremisesTagSetList?:array<array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>>}, terminationHookEnabled?:bool} $args
     * @return \AWS\Result<array{hooksNotCleanedUp?:array<array{name?:string, hook?:string, terminationHook?:string}>}>
     */
    public function updateDeploymentGroup(array $args): \AWS\Result { }

    /**
     * @param array{applicationName:string, currentDeploymentGroupName:string, newDeploymentGroupName?:string, deploymentConfigName?:string, ec2TagFilters?:array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>, onPremisesInstanceTagFilters?:array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>, autoScalingGroups?:array<string>, serviceRoleArn?:string, triggerConfigurations?:array<array{triggerName?:string, triggerTargetArn?:string, triggerEvents?:array<"DeploymentStart"|"DeploymentSuccess"|"DeploymentFailure"|"DeploymentStop"|"DeploymentRollback"|"DeploymentReady"|"InstanceStart"|"InstanceSuccess"|"InstanceFailure"|"InstanceReady">}>, alarmConfiguration?:array{enabled?:bool, ignorePollAlarmFailure?:bool, alarms?:array<array{name?:string}>}, autoRollbackConfiguration?:array{enabled?:bool, events?:array<"DEPLOYMENT_FAILURE"|"DEPLOYMENT_STOP_ON_ALARM"|"DEPLOYMENT_STOP_ON_REQUEST">}, outdatedInstancesStrategy?:"UPDATE"|"IGNORE", deploymentStyle?:array{deploymentType?:"IN_PLACE"|"BLUE_GREEN", deploymentOption?:"WITH_TRAFFIC_CONTROL"|"WITHOUT_TRAFFIC_CONTROL"}, blueGreenDeploymentConfiguration?:array{terminateBlueInstancesOnDeploymentSuccess?:array{action?:"TERMINATE"|"KEEP_ALIVE", terminationWaitTimeInMinutes?:int}, deploymentReadyOption?:array{actionOnTimeout?:"CONTINUE_DEPLOYMENT"|"STOP_DEPLOYMENT", waitTimeInMinutes?:int}, greenFleetProvisioningOption?:array{action?:"DISCOVER_EXISTING"|"COPY_AUTO_SCALING_GROUP"}}, loadBalancerInfo?:array{elbInfoList?:array<array{name?:string}>, targetGroupInfoList?:array<array{name?:string}>, targetGroupPairInfoList?:array<array{targetGroups?:array<array{name?:string}>, prodTrafficRoute?:array{listenerArns?:array<string>}, testTrafficRoute?:array{listenerArns?:array<string>}}>}, ec2TagSet?:array{ec2TagSetList?:array<array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>>}, ecsServices?:array<array{serviceName?:string, clusterName?:string}>, onPremisesTagSet?:array{onPremisesTagSetList?:array<array<array{Key?:string, Value?:string, Type?:"KEY_ONLY"|"VALUE_ONLY"|"KEY_AND_VALUE"}>>}, terminationHookEnabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{hooksNotCleanedUp?:array<array{name?:string, hook?:string, terminationHook?:string}>}>
     */
    public function updateDeploymentGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
