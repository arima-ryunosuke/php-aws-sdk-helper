<?php
namespace AWS\ResilienceHub;

class ResilienceHubClient
{
    /**
     * @param array{appArn:string, entries:array<array{groupingRecommendationId:string}>} $args
     * @return \AWS\Result<array{appArn:string, failedEntries:array<array{errorMessage:string, groupingRecommendationId:string}>}>
     */
    public function acceptResourceGroupingRecommendations(array $args): \AWS\Result { }

    /**
     * @param array{appArn:string, entries:array<array{groupingRecommendationId:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{appArn:string, failedEntries:array<array{errorMessage:string, groupingRecommendationId:string}>}>
     */
    public function acceptResourceGroupingRecommendationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appArn:string, resourceMappings:array<array{appRegistryAppName?:string, eksSourceName?:string, logicalStackName?:string, mappingType:"CfnStack"|"Resource"|"AppRegistryApp"|"ResourceGroup"|"Terraform"|"EKS", physicalResourceId:array{awsAccountId?:string, awsRegion?:string, identifier:string, type:"Arn"|"Native"}, resourceGroupName?:string, resourceName?:string, terraformSourceName?:string}>} $args
     * @return \AWS\Result<array{appArn:string, appVersion:string, resourceMappings:array<array{appRegistryAppName?:string, eksSourceName?:string, logicalStackName?:string, mappingType:"CfnStack"|"Resource"|"AppRegistryApp"|"ResourceGroup"|"Terraform"|"EKS", physicalResourceId:array{awsAccountId?:string, awsRegion?:string, identifier:string, type:"Arn"|"Native"}, resourceGroupName?:string, resourceName?:string, terraformSourceName?:string}>}>
     */
    public function addDraftAppVersionResourceMappings(array $args): \AWS\Result { }

    /**
     * @param array{appArn:string, resourceMappings:array<array{appRegistryAppName?:string, eksSourceName?:string, logicalStackName?:string, mappingType:"CfnStack"|"Resource"|"AppRegistryApp"|"ResourceGroup"|"Terraform"|"EKS", physicalResourceId:array{awsAccountId?:string, awsRegion?:string, identifier:string, type:"Arn"|"Native"}, resourceGroupName?:string, resourceName?:string, terraformSourceName?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{appArn:string, appVersion:string, resourceMappings:array<array{appRegistryAppName?:string, eksSourceName?:string, logicalStackName?:string, mappingType:"CfnStack"|"Resource"|"AppRegistryApp"|"ResourceGroup"|"Terraform"|"EKS", physicalResourceId:array{awsAccountId?:string, awsRegion?:string, identifier:string, type:"Arn"|"Native"}, resourceGroupName?:string, resourceName?:string, terraformSourceName?:string}>}>
     */
    public function addDraftAppVersionResourceMappingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appArn:string, requestEntries:array<array{appComponentId?:string, entryId:string, excludeReason?:"AlreadyImplemented"|"NotRelevant"|"ComplexityOfImplementation", excluded:bool, item?:array{resourceId?:string, targetAccountId?:string, targetRegion?:string}, referenceId:string}>} $args
     * @return \AWS\Result<array{appArn:string, failedEntries:array<array{entryId:string, errorMessage:string}>, successfulEntries:array<array{appComponentId?:string, entryId:string, excludeReason?:"AlreadyImplemented"|"NotRelevant"|"ComplexityOfImplementation", excluded:bool, item?:array{resourceId?:string, targetAccountId?:string, targetRegion?:string}, referenceId:string}>}>
     */
    public function batchUpdateRecommendationStatus(array $args): \AWS\Result { }

    /**
     * @param array{appArn:string, requestEntries:array<array{appComponentId?:string, entryId:string, excludeReason?:"AlreadyImplemented"|"NotRelevant"|"ComplexityOfImplementation", excluded:bool, item?:array{resourceId?:string, targetAccountId?:string, targetRegion?:string}, referenceId:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{appArn:string, failedEntries:array<array{entryId:string, errorMessage:string}>, successfulEntries:array<array{appComponentId?:string, entryId:string, excludeReason?:"AlreadyImplemented"|"NotRelevant"|"ComplexityOfImplementation", excluded:bool, item?:array{resourceId?:string, targetAccountId?:string, targetRegion?:string}, referenceId:string}>}>
     */
    public function batchUpdateRecommendationStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentSchedule?:"Disabled"|"Daily", awsApplicationArn?:string, clientToken?:string, description?:string, eventSubscriptions?:array<array{eventType:"ScheduledAssessmentFailure"|"DriftDetected", name:string, snsTopicArn?:string}>, name:string, permissionModel?:array{crossAccountRoleArns?:array<string>, invokerRoleName?:string, type:"LegacyIAMUser"|"RoleBased"}, policyArn?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{app:array{appArn:string, assessmentSchedule?:"Disabled"|"Daily", awsApplicationArn?:string, complianceStatus?:"PolicyBreached"|"PolicyMet"|"NotAssessed"|"ChangesDetected"|"NotApplicable"|"MissingPolicy", creationTime:int|string|\DateTimeInterface, description?:string, driftStatus?:"NotChecked"|"NotDetected"|"Detected", eventSubscriptions?:array<array{eventType:"ScheduledAssessmentFailure"|"DriftDetected", name:string, snsTopicArn?:string}>, lastAppComplianceEvaluationTime?:int|string|\DateTimeInterface, lastDriftEvaluationTime?:int|string|\DateTimeInterface, lastResiliencyScoreEvaluationTime?:int|string|\DateTimeInterface, name:string, permissionModel?:array{crossAccountRoleArns?:array<string>, invokerRoleName?:string, type:"LegacyIAMUser"|"RoleBased"}, policyArn?:string, resiliencyScore?:float, rpoInSecs?:int, rtoInSecs?:int, status?:"Active"|"Deleting", tags?:array<string, string>}}>
     */
    public function createApp(array $args): \AWS\Result { }

    /**
     * @param array{assessmentSchedule?:"Disabled"|"Daily", awsApplicationArn?:string, clientToken?:string, description?:string, eventSubscriptions?:array<array{eventType:"ScheduledAssessmentFailure"|"DriftDetected", name:string, snsTopicArn?:string}>, name:string, permissionModel?:array{crossAccountRoleArns?:array<string>, invokerRoleName?:string, type:"LegacyIAMUser"|"RoleBased"}, policyArn?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{app:array{appArn:string, assessmentSchedule?:"Disabled"|"Daily", awsApplicationArn?:string, complianceStatus?:"PolicyBreached"|"PolicyMet"|"NotAssessed"|"ChangesDetected"|"NotApplicable"|"MissingPolicy", creationTime:int|string|\DateTimeInterface, description?:string, driftStatus?:"NotChecked"|"NotDetected"|"Detected", eventSubscriptions?:array<array{eventType:"ScheduledAssessmentFailure"|"DriftDetected", name:string, snsTopicArn?:string}>, lastAppComplianceEvaluationTime?:int|string|\DateTimeInterface, lastDriftEvaluationTime?:int|string|\DateTimeInterface, lastResiliencyScoreEvaluationTime?:int|string|\DateTimeInterface, name:string, permissionModel?:array{crossAccountRoleArns?:array<string>, invokerRoleName?:string, type:"LegacyIAMUser"|"RoleBased"}, policyArn?:string, resiliencyScore?:float, rpoInSecs?:int, rtoInSecs?:int, status?:"Active"|"Deleting", tags?:array<string, string>}}>
     */
    public function createAppAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{additionalInfo?:array<string, array<string>>, appArn:string, clientToken?:string, id?:string, name:string, type:string} $args
     * @return \AWS\Result<array{appArn:string, appComponent?:array{additionalInfo?:array<string, array<string>>, id?:string, name:string, type:string}, appVersion:string}>
     */
    public function createAppVersionAppComponent(array $args): \AWS\Result { }

    /**
     * @param array{additionalInfo?:array<string, array<string>>, appArn:string, clientToken?:string, id?:string, name:string, type:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{appArn:string, appComponent?:array{additionalInfo?:array<string, array<string>>, id?:string, name:string, type:string}, appVersion:string}>
     */
    public function createAppVersionAppComponentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{additionalInfo?:array<string, array<string>>, appArn:string, appComponents:array<string>, awsAccountId?:string, awsRegion?:string, clientToken?:string, logicalResourceId:array{eksSourceName?:string, identifier:string, logicalStackName?:string, resourceGroupName?:string, terraformSourceName?:string}, physicalResourceId:string, resourceName?:string, resourceType:string} $args
     * @return \AWS\Result<array{appArn:string, appVersion:string, physicalResource?:array{additionalInfo?:array<string, array<string>>, appComponents?:array<array{additionalInfo?:array<string, array<string>>, id?:string, name:string, type:string}>, excluded?:bool, logicalResourceId:array{eksSourceName?:string, identifier:string, logicalStackName?:string, resourceGroupName?:string, terraformSourceName?:string}, parentResourceName?:string, physicalResourceId:array{awsAccountId?:string, awsRegion?:string, identifier:string, type:"Arn"|"Native"}, resourceName?:string, resourceType:string, sourceType?:"AppTemplate"|"Discovered"}}>
     */
    public function createAppVersionResource(array $args): \AWS\Result { }

    /**
     * @param array{additionalInfo?:array<string, array<string>>, appArn:string, appComponents:array<string>, awsAccountId?:string, awsRegion?:string, clientToken?:string, logicalResourceId:array{eksSourceName?:string, identifier:string, logicalStackName?:string, resourceGroupName?:string, terraformSourceName?:string}, physicalResourceId:string, resourceName?:string, resourceType:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{appArn:string, appVersion:string, physicalResource?:array{additionalInfo?:array<string, array<string>>, appComponents?:array<array{additionalInfo?:array<string, array<string>>, id?:string, name:string, type:string}>, excluded?:bool, logicalResourceId:array{eksSourceName?:string, identifier:string, logicalStackName?:string, resourceGroupName?:string, terraformSourceName?:string}, parentResourceName?:string, physicalResourceId:array{awsAccountId?:string, awsRegion?:string, identifier:string, type:"Arn"|"Native"}, resourceName?:string, resourceType:string, sourceType?:"AppTemplate"|"Discovered"}}>
     */
    public function createAppVersionResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentArn:string, bucketName?:string, clientToken?:string, format?:"CfnYaml"|"CfnJson", name:string, recommendationIds?:array<string>, recommendationTypes?:array<"Alarm"|"Sop"|"Test">, tags?:array<string, string>} $args
     * @return \AWS\Result<array{recommendationTemplate?:array{appArn?:string, assessmentArn:string, endTime?:int|string|\DateTimeInterface, format:"CfnYaml"|"CfnJson", message?:string, name:string, needsReplacements?:bool, recommendationIds?:array<string>, recommendationTemplateArn:string, recommendationTypes:array<"Alarm"|"Sop"|"Test">, startTime?:int|string|\DateTimeInterface, status:"Pending"|"InProgress"|"Failed"|"Success", tags?:array<string, string>, templatesLocation?:array{bucket?:string, prefix?:string}}}>
     */
    public function createRecommendationTemplate(array $args): \AWS\Result { }

    /**
     * @param array{assessmentArn:string, bucketName?:string, clientToken?:string, format?:"CfnYaml"|"CfnJson", name:string, recommendationIds?:array<string>, recommendationTypes?:array<"Alarm"|"Sop"|"Test">, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{recommendationTemplate?:array{appArn?:string, assessmentArn:string, endTime?:int|string|\DateTimeInterface, format:"CfnYaml"|"CfnJson", message?:string, name:string, needsReplacements?:bool, recommendationIds?:array<string>, recommendationTemplateArn:string, recommendationTypes:array<"Alarm"|"Sop"|"Test">, startTime?:int|string|\DateTimeInterface, status:"Pending"|"InProgress"|"Failed"|"Success", tags?:array<string, string>, templatesLocation?:array{bucket?:string, prefix?:string}}}>
     */
    public function createRecommendationTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, dataLocationConstraint?:"AnyLocation"|"SameContinent"|"SameCountry", policy:array<"Software"|"Hardware"|"AZ"|"Region", array{rpoInSecs:int, rtoInSecs:int}>, policyDescription?:string, policyName:string, tags?:array<string, string>, tier:"MissionCritical"|"Critical"|"Important"|"CoreServices"|"NonCritical"|"NotApplicable"} $args
     * @return \AWS\Result<array{policy:array{creationTime?:int|string|\DateTimeInterface, dataLocationConstraint?:"AnyLocation"|"SameContinent"|"SameCountry", estimatedCostTier?:"L1"|"L2"|"L3"|"L4", policy?:mixed, policyArn?:string, policyDescription?:string, policyName?:string, tags?:array<string, string>, tier?:"MissionCritical"|"Critical"|"Important"|"CoreServices"|"NonCritical"|"NotApplicable"}}>
     */
    public function createResiliencyPolicy(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, dataLocationConstraint?:"AnyLocation"|"SameContinent"|"SameCountry", policy:array<"Software"|"Hardware"|"AZ"|"Region", array{rpoInSecs:int, rtoInSecs:int}>, policyDescription?:string, policyName:string, tags?:array<string, string>, tier:"MissionCritical"|"Critical"|"Important"|"CoreServices"|"NonCritical"|"NotApplicable"} $args
     * @return \GuzzleHttp\Promise\Promise<array{policy:array{creationTime?:int|string|\DateTimeInterface, dataLocationConstraint?:"AnyLocation"|"SameContinent"|"SameCountry", estimatedCostTier?:"L1"|"L2"|"L3"|"L4", policy?:mixed, policyArn?:string, policyDescription?:string, policyName?:string, tags?:array<string, string>, tier?:"MissionCritical"|"Critical"|"Important"|"CoreServices"|"NonCritical"|"NotApplicable"}}>
     */
    public function createResiliencyPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appArn:string, clientToken?:string, forceDelete?:bool} $args
     * @return \AWS\Result<array{appArn:string}>
     */
    public function deleteApp(array $args): \AWS\Result { }

    /**
     * @param array{appArn:string, clientToken?:string, forceDelete?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{appArn:string}>
     */
    public function deleteAppAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentArn:string, clientToken?:string} $args
     * @return \AWS\Result<array{assessmentArn:string, assessmentStatus:"Pending"|"InProgress"|"Failed"|"Success"}>
     */
    public function deleteAppAssessment(array $args): \AWS\Result { }

    /**
     * @param array{assessmentArn:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assessmentArn:string, assessmentStatus:"Pending"|"InProgress"|"Failed"|"Success"}>
     */
    public function deleteAppAssessmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appArn:string, clientToken?:string, eksSourceClusterNamespace?:array{eksClusterArn:string, namespace:string}, sourceArn?:string, terraformSource?:array{s3StateFileUrl:string}} $args
     * @return \AWS\Result<array{appArn?:string, appInputSource?:array{eksSourceClusterNamespace?:array{eksClusterArn:string, namespace:string}, importType:"CfnStack"|"Resource"|"AppRegistryApp"|"ResourceGroup"|"Terraform"|"EKS", resourceCount?:int, sourceArn?:string, sourceName?:string, terraformSource?:array{s3StateFileUrl:string}}}>
     */
    public function deleteAppInputSource(array $args): \AWS\Result { }

    /**
     * @param array{appArn:string, clientToken?:string, eksSourceClusterNamespace?:array{eksClusterArn:string, namespace:string}, sourceArn?:string, terraformSource?:array{s3StateFileUrl:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{appArn?:string, appInputSource?:array{eksSourceClusterNamespace?:array{eksClusterArn:string, namespace:string}, importType:"CfnStack"|"Resource"|"AppRegistryApp"|"ResourceGroup"|"Terraform"|"EKS", resourceCount?:int, sourceArn?:string, sourceName?:string, terraformSource?:array{s3StateFileUrl:string}}}>
     */
    public function deleteAppInputSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appArn:string, clientToken?:string, id:string} $args
     * @return \AWS\Result<array{appArn:string, appComponent?:array{additionalInfo?:array<string, array<string>>, id?:string, name:string, type:string}, appVersion:string}>
     */
    public function deleteAppVersionAppComponent(array $args): \AWS\Result { }

    /**
     * @param array{appArn:string, clientToken?:string, id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{appArn:string, appComponent?:array{additionalInfo?:array<string, array<string>>, id?:string, name:string, type:string}, appVersion:string}>
     */
    public function deleteAppVersionAppComponentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appArn:string, awsAccountId?:string, awsRegion?:string, clientToken?:string, logicalResourceId?:array{eksSourceName?:string, identifier:string, logicalStackName?:string, resourceGroupName?:string, terraformSourceName?:string}, physicalResourceId?:string, resourceName?:string} $args
     * @return \AWS\Result<array{appArn:string, appVersion:string, physicalResource?:array{additionalInfo?:array<string, array<string>>, appComponents?:array<array{additionalInfo?:array<string, array<string>>, id?:string, name:string, type:string}>, excluded?:bool, logicalResourceId:array{eksSourceName?:string, identifier:string, logicalStackName?:string, resourceGroupName?:string, terraformSourceName?:string}, parentResourceName?:string, physicalResourceId:array{awsAccountId?:string, awsRegion?:string, identifier:string, type:"Arn"|"Native"}, resourceName?:string, resourceType:string, sourceType?:"AppTemplate"|"Discovered"}}>
     */
    public function deleteAppVersionResource(array $args): \AWS\Result { }

    /**
     * @param array{appArn:string, awsAccountId?:string, awsRegion?:string, clientToken?:string, logicalResourceId?:array{eksSourceName?:string, identifier:string, logicalStackName?:string, resourceGroupName?:string, terraformSourceName?:string}, physicalResourceId?:string, resourceName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{appArn:string, appVersion:string, physicalResource?:array{additionalInfo?:array<string, array<string>>, appComponents?:array<array{additionalInfo?:array<string, array<string>>, id?:string, name:string, type:string}>, excluded?:bool, logicalResourceId:array{eksSourceName?:string, identifier:string, logicalStackName?:string, resourceGroupName?:string, terraformSourceName?:string}, parentResourceName?:string, physicalResourceId:array{awsAccountId?:string, awsRegion?:string, identifier:string, type:"Arn"|"Native"}, resourceName?:string, resourceType:string, sourceType?:"AppTemplate"|"Discovered"}}>
     */
    public function deleteAppVersionResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, recommendationTemplateArn:string} $args
     * @return \AWS\Result<array{recommendationTemplateArn:string, status:"Pending"|"InProgress"|"Failed"|"Success"}>
     */
    public function deleteRecommendationTemplate(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, recommendationTemplateArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{recommendationTemplateArn:string, status:"Pending"|"InProgress"|"Failed"|"Success"}>
     */
    public function deleteRecommendationTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, policyArn:string} $args
     * @return \AWS\Result<array{policyArn:string}>
     */
    public function deleteResiliencyPolicy(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, policyArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{policyArn:string}>
     */
    public function deleteResiliencyPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appArn:string} $args
     * @return \AWS\Result<array{app:array{appArn:string, assessmentSchedule?:"Disabled"|"Daily", awsApplicationArn?:string, complianceStatus?:"PolicyBreached"|"PolicyMet"|"NotAssessed"|"ChangesDetected"|"NotApplicable"|"MissingPolicy", creationTime:int|string|\DateTimeInterface, description?:string, driftStatus?:"NotChecked"|"NotDetected"|"Detected", eventSubscriptions?:array<array{eventType:"ScheduledAssessmentFailure"|"DriftDetected", name:string, snsTopicArn?:string}>, lastAppComplianceEvaluationTime?:int|string|\DateTimeInterface, lastDriftEvaluationTime?:int|string|\DateTimeInterface, lastResiliencyScoreEvaluationTime?:int|string|\DateTimeInterface, name:string, permissionModel?:array{crossAccountRoleArns?:array<string>, invokerRoleName?:string, type:"LegacyIAMUser"|"RoleBased"}, policyArn?:string, resiliencyScore?:float, rpoInSecs?:int, rtoInSecs?:int, status?:"Active"|"Deleting", tags?:array<string, string>}}>
     */
    public function describeApp(array $args): \AWS\Result { }

    /**
     * @param array{appArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{app:array{appArn:string, assessmentSchedule?:"Disabled"|"Daily", awsApplicationArn?:string, complianceStatus?:"PolicyBreached"|"PolicyMet"|"NotAssessed"|"ChangesDetected"|"NotApplicable"|"MissingPolicy", creationTime:int|string|\DateTimeInterface, description?:string, driftStatus?:"NotChecked"|"NotDetected"|"Detected", eventSubscriptions?:array<array{eventType:"ScheduledAssessmentFailure"|"DriftDetected", name:string, snsTopicArn?:string}>, lastAppComplianceEvaluationTime?:int|string|\DateTimeInterface, lastDriftEvaluationTime?:int|string|\DateTimeInterface, lastResiliencyScoreEvaluationTime?:int|string|\DateTimeInterface, name:string, permissionModel?:array{crossAccountRoleArns?:array<string>, invokerRoleName?:string, type:"LegacyIAMUser"|"RoleBased"}, policyArn?:string, resiliencyScore?:float, rpoInSecs?:int, rtoInSecs?:int, status?:"Active"|"Deleting", tags?:array<string, string>}}>
     */
    public function describeAppAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentArn:string} $args
     * @return \AWS\Result<array{assessment:array{appArn?:string, appVersion?:string, assessmentArn:string, assessmentName?:string, assessmentStatus:"Pending"|"InProgress"|"Failed"|"Success", compliance?:array<"Software"|"Hardware"|"AZ"|"Region", array{achievableRpoInSecs?:int, achievableRtoInSecs?:int, complianceStatus:"PolicyBreached"|"PolicyMet"|"NotApplicable"|"MissingPolicy", currentRpoInSecs?:int, currentRtoInSecs?:int, message?:string, rpoDescription?:string, rpoReferenceId?:string, rtoDescription?:string, rtoReferenceId?:string}>, complianceStatus?:"PolicyBreached"|"PolicyMet"|"NotApplicable"|"MissingPolicy", cost?:array{amount:float, currency:string, frequency:"Hourly"|"Daily"|"Monthly"|"Yearly"}, driftStatus?:"NotChecked"|"NotDetected"|"Detected", endTime?:int|string|\DateTimeInterface, invoker:"User"|"System", message?:string, policy?:array{creationTime?:int|string|\DateTimeInterface, dataLocationConstraint?:"AnyLocation"|"SameContinent"|"SameCountry", estimatedCostTier?:"L1"|"L2"|"L3"|"L4", policy?:mixed, policyArn?:string, policyDescription?:string, policyName?:string, tags?:array<string, string>, tier?:"MissionCritical"|"Critical"|"Important"|"CoreServices"|"NonCritical"|"NotApplicable"}, resiliencyScore?:array{componentScore?:array<"Compliance"|"Test"|"Alarm"|"Sop", array{excludedCount?:int, outstandingCount?:int, possibleScore?:float, score?:float}>, disruptionScore:array<"Software"|"Hardware"|"AZ"|"Region", float>, score:float}, resourceErrorsDetails?:array{hasMoreErrors?:bool, resourceErrors?:array<array{logicalResourceId?:string, physicalResourceId?:string, reason?:string}>}, startTime?:int|string|\DateTimeInterface, summary?:array{riskRecommendations?:array<array{appComponents?:array<string>, recommendation?:string, risk?:string}>, summary?:mixed}, tags?:array<string, string>, versionName?:string}}>
     */
    public function describeAppAssessment(array $args): \AWS\Result { }

    /**
     * @param array{assessmentArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assessment:array{appArn?:string, appVersion?:string, assessmentArn:string, assessmentName?:string, assessmentStatus:"Pending"|"InProgress"|"Failed"|"Success", compliance?:array<"Software"|"Hardware"|"AZ"|"Region", array{achievableRpoInSecs?:int, achievableRtoInSecs?:int, complianceStatus:"PolicyBreached"|"PolicyMet"|"NotApplicable"|"MissingPolicy", currentRpoInSecs?:int, currentRtoInSecs?:int, message?:string, rpoDescription?:string, rpoReferenceId?:string, rtoDescription?:string, rtoReferenceId?:string}>, complianceStatus?:"PolicyBreached"|"PolicyMet"|"NotApplicable"|"MissingPolicy", cost?:array{amount:float, currency:string, frequency:"Hourly"|"Daily"|"Monthly"|"Yearly"}, driftStatus?:"NotChecked"|"NotDetected"|"Detected", endTime?:int|string|\DateTimeInterface, invoker:"User"|"System", message?:string, policy?:array{creationTime?:int|string|\DateTimeInterface, dataLocationConstraint?:"AnyLocation"|"SameContinent"|"SameCountry", estimatedCostTier?:"L1"|"L2"|"L3"|"L4", policy?:mixed, policyArn?:string, policyDescription?:string, policyName?:string, tags?:array<string, string>, tier?:"MissionCritical"|"Critical"|"Important"|"CoreServices"|"NonCritical"|"NotApplicable"}, resiliencyScore?:array{componentScore?:array<"Compliance"|"Test"|"Alarm"|"Sop", array{excludedCount?:int, outstandingCount?:int, possibleScore?:float, score?:float}>, disruptionScore:array<"Software"|"Hardware"|"AZ"|"Region", float>, score:float}, resourceErrorsDetails?:array{hasMoreErrors?:bool, resourceErrors?:array<array{logicalResourceId?:string, physicalResourceId?:string, reason?:string}>}, startTime?:int|string|\DateTimeInterface, summary?:array{riskRecommendations?:array<array{appComponents?:array<string>, recommendation?:string, risk?:string}>, summary?:mixed}, tags?:array<string, string>, versionName?:string}}>
     */
    public function describeAppAssessmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appArn:string, appVersion:string} $args
     * @return \AWS\Result<array{additionalInfo?:array<string, array<string>>, appArn:string, appVersion:string}>
     */
    public function describeAppVersion(array $args): \AWS\Result { }

    /**
     * @param array{appArn:string, appVersion:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{additionalInfo?:array<string, array<string>>, appArn:string, appVersion:string}>
     */
    public function describeAppVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appArn:string, appVersion:string, id:string} $args
     * @return \AWS\Result<array{appArn:string, appComponent?:array{additionalInfo?:array<string, array<string>>, id?:string, name:string, type:string}, appVersion:string}>
     */
    public function describeAppVersionAppComponent(array $args): \AWS\Result { }

    /**
     * @param array{appArn:string, appVersion:string, id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{appArn:string, appComponent?:array{additionalInfo?:array<string, array<string>>, id?:string, name:string, type:string}, appVersion:string}>
     */
    public function describeAppVersionAppComponentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appArn:string, appVersion:string, awsAccountId?:string, awsRegion?:string, logicalResourceId?:array{eksSourceName?:string, identifier:string, logicalStackName?:string, resourceGroupName?:string, terraformSourceName?:string}, physicalResourceId?:string, resourceName?:string} $args
     * @return \AWS\Result<array{appArn:string, appVersion:string, physicalResource?:array{additionalInfo?:array<string, array<string>>, appComponents?:array<array{additionalInfo?:array<string, array<string>>, id?:string, name:string, type:string}>, excluded?:bool, logicalResourceId:array{eksSourceName?:string, identifier:string, logicalStackName?:string, resourceGroupName?:string, terraformSourceName?:string}, parentResourceName?:string, physicalResourceId:array{awsAccountId?:string, awsRegion?:string, identifier:string, type:"Arn"|"Native"}, resourceName?:string, resourceType:string, sourceType?:"AppTemplate"|"Discovered"}}>
     */
    public function describeAppVersionResource(array $args): \AWS\Result { }

    /**
     * @param array{appArn:string, appVersion:string, awsAccountId?:string, awsRegion?:string, logicalResourceId?:array{eksSourceName?:string, identifier:string, logicalStackName?:string, resourceGroupName?:string, terraformSourceName?:string}, physicalResourceId?:string, resourceName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{appArn:string, appVersion:string, physicalResource?:array{additionalInfo?:array<string, array<string>>, appComponents?:array<array{additionalInfo?:array<string, array<string>>, id?:string, name:string, type:string}>, excluded?:bool, logicalResourceId:array{eksSourceName?:string, identifier:string, logicalStackName?:string, resourceGroupName?:string, terraformSourceName?:string}, parentResourceName?:string, physicalResourceId:array{awsAccountId?:string, awsRegion?:string, identifier:string, type:"Arn"|"Native"}, resourceName?:string, resourceType:string, sourceType?:"AppTemplate"|"Discovered"}}>
     */
    public function describeAppVersionResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appArn:string, appVersion:string, resolutionId?:string} $args
     * @return \AWS\Result<array{appArn:string, appVersion:string, errorMessage?:string, resolutionId:string, status:"Pending"|"InProgress"|"Failed"|"Success"}>
     */
    public function describeAppVersionResourcesResolutionStatus(array $args): \AWS\Result { }

    /**
     * @param array{appArn:string, appVersion:string, resolutionId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{appArn:string, appVersion:string, errorMessage?:string, resolutionId:string, status:"Pending"|"InProgress"|"Failed"|"Success"}>
     */
    public function describeAppVersionResourcesResolutionStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appArn:string, appVersion:string} $args
     * @return \AWS\Result<array{appArn:string, appTemplateBody:string, appVersion:string}>
     */
    public function describeAppVersionTemplate(array $args): \AWS\Result { }

    /**
     * @param array{appArn:string, appVersion:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{appArn:string, appTemplateBody:string, appVersion:string}>
     */
    public function describeAppVersionTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appArn:string} $args
     * @return \AWS\Result<array{appArn:string, appVersion:string, errorDetails?:array<array{errorMessage?:string}>, errorMessage?:string, status:"Pending"|"InProgress"|"Failed"|"Success", statusChangeTime:int|string|\DateTimeInterface}>
     */
    public function describeDraftAppVersionResourcesImportStatus(array $args): \AWS\Result { }

    /**
     * @param array{appArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{appArn:string, appVersion:string, errorDetails?:array<array{errorMessage?:string}>, errorMessage?:string, status:"Pending"|"InProgress"|"Failed"|"Success", statusChangeTime:int|string|\DateTimeInterface}>
     */
    public function describeDraftAppVersionResourcesImportStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{metricsExportId:string} $args
     * @return \AWS\Result<array{errorMessage?:string, exportLocation?:array{bucket?:string, prefix?:string}, metricsExportId:string, status:"Pending"|"InProgress"|"Failed"|"Success"}>
     */
    public function describeMetricsExport(array $args): \AWS\Result { }

    /**
     * @param array{metricsExportId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{errorMessage?:string, exportLocation?:array{bucket?:string, prefix?:string}, metricsExportId:string, status:"Pending"|"InProgress"|"Failed"|"Success"}>
     */
    public function describeMetricsExportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policyArn:string} $args
     * @return \AWS\Result<array{policy:array{creationTime?:int|string|\DateTimeInterface, dataLocationConstraint?:"AnyLocation"|"SameContinent"|"SameCountry", estimatedCostTier?:"L1"|"L2"|"L3"|"L4", policy?:mixed, policyArn?:string, policyDescription?:string, policyName?:string, tags?:array<string, string>, tier?:"MissionCritical"|"Critical"|"Important"|"CoreServices"|"NonCritical"|"NotApplicable"}}>
     */
    public function describeResiliencyPolicy(array $args): \AWS\Result { }

    /**
     * @param array{policyArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{policy:array{creationTime?:int|string|\DateTimeInterface, dataLocationConstraint?:"AnyLocation"|"SameContinent"|"SameCountry", estimatedCostTier?:"L1"|"L2"|"L3"|"L4", policy?:mixed, policyArn?:string, policyDescription?:string, policyName?:string, tags?:array<string, string>, tier?:"MissionCritical"|"Critical"|"Important"|"CoreServices"|"NonCritical"|"NotApplicable"}}>
     */
    public function describeResiliencyPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appArn:string, groupingId?:string} $args
     * @return \AWS\Result<array{errorMessage?:string, groupingId:string, status:"Pending"|"InProgress"|"Failed"|"Success"}>
     */
    public function describeResourceGroupingRecommendationTask(array $args): \AWS\Result { }

    /**
     * @param array{appArn:string, groupingId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{errorMessage?:string, groupingId:string, status:"Pending"|"InProgress"|"Failed"|"Success"}>
     */
    public function describeResourceGroupingRecommendationTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appArn:string, eksSources?:array<array{eksClusterArn:string, namespaces:array<string>}>, importStrategy?:"AddOnly"|"ReplaceAll", sourceArns?:array<string>, terraformSources?:array<array{s3StateFileUrl:string}>} $args
     * @return \AWS\Result<array{appArn:string, appVersion:string, eksSources?:array<array{eksClusterArn:string, namespaces:array<string>}>, sourceArns?:array<string>, status:"Pending"|"InProgress"|"Failed"|"Success", terraformSources?:array<array{s3StateFileUrl:string}>}>
     */
    public function importResourcesToDraftAppVersion(array $args): \AWS\Result { }

    /**
     * @param array{appArn:string, eksSources?:array<array{eksClusterArn:string, namespaces:array<string>}>, importStrategy?:"AddOnly"|"ReplaceAll", sourceArns?:array<string>, terraformSources?:array<array{s3StateFileUrl:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{appArn:string, appVersion:string, eksSources?:array<array{eksClusterArn:string, namespaces:array<string>}>, sourceArns?:array<string>, status:"Pending"|"InProgress"|"Failed"|"Success", terraformSources?:array<array{s3StateFileUrl:string}>}>
     */
    public function importResourcesToDraftAppVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentArn:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{alarmRecommendations:array<array{appComponentName?:string, appComponentNames?:array<string>, description?:string, items?:array<array{alreadyImplemented?:bool, discoveredAlarm?:array{alarmArn?:string, source?:string}, excludeReason?:"AlreadyImplemented"|"NotRelevant"|"ComplexityOfImplementation", excluded?:bool, latestDiscoveredExperiment?:array{experimentArn?:string, experimentTemplateId?:string}, resourceId?:string, targetAccountId?:string, targetRegion?:string}>, name:string, prerequisite?:string, recommendationId:string, recommendationStatus?:"Implemented"|"Inactive"|"NotImplemented"|"Excluded", referenceId:string, type:"Metric"|"Composite"|"Canary"|"Logs"|"Event"}>, nextToken?:string}>
     */
    public function listAlarmRecommendations(array $args): \AWS\Result { }

    /**
     * @param array{assessmentArn:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{alarmRecommendations:array<array{appComponentName?:string, appComponentNames?:array<string>, description?:string, items?:array<array{alreadyImplemented?:bool, discoveredAlarm?:array{alarmArn?:string, source?:string}, excludeReason?:"AlreadyImplemented"|"NotRelevant"|"ComplexityOfImplementation", excluded?:bool, latestDiscoveredExperiment?:array{experimentArn?:string, experimentTemplateId?:string}, resourceId?:string, targetAccountId?:string, targetRegion?:string}>, name:string, prerequisite?:string, recommendationId:string, recommendationStatus?:"Implemented"|"Inactive"|"NotImplemented"|"Excluded", referenceId:string, type:"Metric"|"Composite"|"Canary"|"Logs"|"Event"}>, nextToken?:string}>
     */
    public function listAlarmRecommendationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentArn:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{complianceDrifts:array<array{actualReferenceId?:string, actualValue?:array<"Software"|"Hardware"|"AZ"|"Region", array{achievableRpoInSecs?:int, achievableRtoInSecs?:int, complianceStatus:"PolicyBreached"|"PolicyMet"|"NotApplicable"|"MissingPolicy", currentRpoInSecs?:int, currentRtoInSecs?:int, message?:string, rpoDescription?:string, rpoReferenceId?:string, rtoDescription?:string, rtoReferenceId?:string}>, appId?:string, appVersion?:string, diffType?:"NotEqual"|"Added"|"Removed", driftType?:"ApplicationCompliance"|"AppComponentResiliencyComplianceStatus", entityId?:string, entityType?:string, expectedReferenceId?:string, expectedValue?:array<"Software"|"Hardware"|"AZ"|"Region", array{achievableRpoInSecs?:int, achievableRtoInSecs?:int, complianceStatus:"PolicyBreached"|"PolicyMet"|"NotApplicable"|"MissingPolicy", currentRpoInSecs?:int, currentRtoInSecs?:int, message?:string, rpoDescription?:string, rpoReferenceId?:string, rtoDescription?:string, rtoReferenceId?:string}>}>, nextToken?:string}>
     */
    public function listAppAssessmentComplianceDrifts(array $args): \AWS\Result { }

    /**
     * @param array{assessmentArn:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{complianceDrifts:array<array{actualReferenceId?:string, actualValue?:array<"Software"|"Hardware"|"AZ"|"Region", array{achievableRpoInSecs?:int, achievableRtoInSecs?:int, complianceStatus:"PolicyBreached"|"PolicyMet"|"NotApplicable"|"MissingPolicy", currentRpoInSecs?:int, currentRtoInSecs?:int, message?:string, rpoDescription?:string, rpoReferenceId?:string, rtoDescription?:string, rtoReferenceId?:string}>, appId?:string, appVersion?:string, diffType?:"NotEqual"|"Added"|"Removed", driftType?:"ApplicationCompliance"|"AppComponentResiliencyComplianceStatus", entityId?:string, entityType?:string, expectedReferenceId?:string, expectedValue?:array<"Software"|"Hardware"|"AZ"|"Region", array{achievableRpoInSecs?:int, achievableRtoInSecs?:int, complianceStatus:"PolicyBreached"|"PolicyMet"|"NotApplicable"|"MissingPolicy", currentRpoInSecs?:int, currentRtoInSecs?:int, message?:string, rpoDescription?:string, rpoReferenceId?:string, rtoDescription?:string, rtoReferenceId?:string}>}>, nextToken?:string}>
     */
    public function listAppAssessmentComplianceDriftsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentArn:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, resourceDrifts:array<array{appArn?:string, appVersion?:string, diffType?:"NotEqual"|"Added"|"Removed", referenceId?:string, resourceIdentifier?:array{logicalResourceId?:array{eksSourceName?:string, identifier:string, logicalStackName?:string, resourceGroupName?:string, terraformSourceName?:string}, resourceType?:string}}>}>
     */
    public function listAppAssessmentResourceDrifts(array $args): \AWS\Result { }

    /**
     * @param array{assessmentArn:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, resourceDrifts:array<array{appArn?:string, appVersion?:string, diffType?:"NotEqual"|"Added"|"Removed", referenceId?:string, resourceIdentifier?:array{logicalResourceId?:array{eksSourceName?:string, identifier:string, logicalStackName?:string, resourceGroupName?:string, terraformSourceName?:string}, resourceType?:string}}>}>
     */
    public function listAppAssessmentResourceDriftsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appArn?:string, assessmentName?:string, assessmentStatus?:array<"Pending"|"InProgress"|"Failed"|"Success">, complianceStatus?:"PolicyBreached"|"PolicyMet"|"NotApplicable"|"MissingPolicy", invoker?:"User"|"System", maxResults?:int, nextToken?:string, reverseOrder?:bool} $args
     * @return \AWS\Result<array{assessmentSummaries:array<array{appArn?:string, appVersion?:string, assessmentArn:string, assessmentName?:string, assessmentStatus:"Pending"|"InProgress"|"Failed"|"Success", complianceStatus?:"PolicyBreached"|"PolicyMet"|"NotApplicable"|"MissingPolicy", cost?:array{amount:float, currency:string, frequency:"Hourly"|"Daily"|"Monthly"|"Yearly"}, driftStatus?:"NotChecked"|"NotDetected"|"Detected", endTime?:int|string|\DateTimeInterface, invoker?:"User"|"System", message?:string, resiliencyScore?:float, startTime?:int|string|\DateTimeInterface, versionName?:string}>, nextToken?:string}>
     */
    public function listAppAssessments(array $args = []): \AWS\Result { }

    /**
     * @param array{appArn?:string, assessmentName?:string, assessmentStatus?:array<"Pending"|"InProgress"|"Failed"|"Success">, complianceStatus?:"PolicyBreached"|"PolicyMet"|"NotApplicable"|"MissingPolicy", invoker?:"User"|"System", maxResults?:int, nextToken?:string, reverseOrder?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{assessmentSummaries:array<array{appArn?:string, appVersion?:string, assessmentArn:string, assessmentName?:string, assessmentStatus:"Pending"|"InProgress"|"Failed"|"Success", complianceStatus?:"PolicyBreached"|"PolicyMet"|"NotApplicable"|"MissingPolicy", cost?:array{amount:float, currency:string, frequency:"Hourly"|"Daily"|"Monthly"|"Yearly"}, driftStatus?:"NotChecked"|"NotDetected"|"Detected", endTime?:int|string|\DateTimeInterface, invoker?:"User"|"System", message?:string, resiliencyScore?:float, startTime?:int|string|\DateTimeInterface, versionName?:string}>, nextToken?:string}>
     */
    public function listAppAssessmentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentArn:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{componentCompliances:array<array{appComponentName?:string, compliance?:array<"Software"|"Hardware"|"AZ"|"Region", array{achievableRpoInSecs?:int, achievableRtoInSecs?:int, complianceStatus:"PolicyBreached"|"PolicyMet"|"NotApplicable"|"MissingPolicy", currentRpoInSecs?:int, currentRtoInSecs?:int, message?:string, rpoDescription?:string, rpoReferenceId?:string, rtoDescription?:string, rtoReferenceId?:string}>, cost?:array{amount:float, currency:string, frequency:"Hourly"|"Daily"|"Monthly"|"Yearly"}, message?:string, resiliencyScore?:array{componentScore?:array<"Compliance"|"Test"|"Alarm"|"Sop", array{excludedCount?:int, outstandingCount?:int, possibleScore?:float, score?:float}>, disruptionScore:array<"Software"|"Hardware"|"AZ"|"Region", float>, score:float}, status?:"PolicyBreached"|"PolicyMet"|"NotApplicable"|"MissingPolicy"}>, nextToken?:string}>
     */
    public function listAppComponentCompliances(array $args): \AWS\Result { }

    /**
     * @param array{assessmentArn:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{componentCompliances:array<array{appComponentName?:string, compliance?:array<"Software"|"Hardware"|"AZ"|"Region", array{achievableRpoInSecs?:int, achievableRtoInSecs?:int, complianceStatus:"PolicyBreached"|"PolicyMet"|"NotApplicable"|"MissingPolicy", currentRpoInSecs?:int, currentRtoInSecs?:int, message?:string, rpoDescription?:string, rpoReferenceId?:string, rtoDescription?:string, rtoReferenceId?:string}>, cost?:array{amount:float, currency:string, frequency:"Hourly"|"Daily"|"Monthly"|"Yearly"}, message?:string, resiliencyScore?:array{componentScore?:array<"Compliance"|"Test"|"Alarm"|"Sop", array{excludedCount?:int, outstandingCount?:int, possibleScore?:float, score?:float}>, disruptionScore:array<"Software"|"Hardware"|"AZ"|"Region", float>, score:float}, status?:"PolicyBreached"|"PolicyMet"|"NotApplicable"|"MissingPolicy"}>, nextToken?:string}>
     */
    public function listAppComponentCompliancesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentArn:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{componentRecommendations:array<array{appComponentName:string, configRecommendations:array<array{appComponentName?:string, compliance?:array<"Software"|"Hardware"|"AZ"|"Region", array{achievableRpoInSecs?:int, achievableRtoInSecs?:int, complianceStatus:"PolicyBreached"|"PolicyMet"|"NotApplicable"|"MissingPolicy", currentRpoInSecs?:int, currentRtoInSecs?:int, message?:string, rpoDescription?:string, rpoReferenceId?:string, rtoDescription?:string, rtoReferenceId?:string}>, cost?:array{amount:float, currency:string, frequency:"Hourly"|"Daily"|"Monthly"|"Yearly"}, description?:string, haArchitecture?:"MultiSite"|"WarmStandby"|"PilotLight"|"BackupAndRestore"|"NoRecoveryPlan", name:string, optimizationType:"LeastCost"|"LeastChange"|"BestAZRecovery"|"LeastErrors"|"BestAttainable"|"BestRegionRecovery", recommendationCompliance?:array<"Software"|"Hardware"|"AZ"|"Region", array{expectedComplianceStatus:"PolicyBreached"|"PolicyMet"|"NotApplicable"|"MissingPolicy", expectedRpoDescription?:string, expectedRpoInSecs?:int, expectedRtoDescription?:string, expectedRtoInSecs?:int}>, referenceId:string, suggestedChanges?:array<string>}>, recommendationStatus:"BreachedUnattainable"|"BreachedCanMeet"|"MetCanImprove"|"MissingPolicy"}>, nextToken?:string}>
     */
    public function listAppComponentRecommendations(array $args): \AWS\Result { }

    /**
     * @param array{assessmentArn:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{componentRecommendations:array<array{appComponentName:string, configRecommendations:array<array{appComponentName?:string, compliance?:array<"Software"|"Hardware"|"AZ"|"Region", array{achievableRpoInSecs?:int, achievableRtoInSecs?:int, complianceStatus:"PolicyBreached"|"PolicyMet"|"NotApplicable"|"MissingPolicy", currentRpoInSecs?:int, currentRtoInSecs?:int, message?:string, rpoDescription?:string, rpoReferenceId?:string, rtoDescription?:string, rtoReferenceId?:string}>, cost?:array{amount:float, currency:string, frequency:"Hourly"|"Daily"|"Monthly"|"Yearly"}, description?:string, haArchitecture?:"MultiSite"|"WarmStandby"|"PilotLight"|"BackupAndRestore"|"NoRecoveryPlan", name:string, optimizationType:"LeastCost"|"LeastChange"|"BestAZRecovery"|"LeastErrors"|"BestAttainable"|"BestRegionRecovery", recommendationCompliance?:array<"Software"|"Hardware"|"AZ"|"Region", array{expectedComplianceStatus:"PolicyBreached"|"PolicyMet"|"NotApplicable"|"MissingPolicy", expectedRpoDescription?:string, expectedRpoInSecs?:int, expectedRtoDescription?:string, expectedRtoInSecs?:int}>, referenceId:string, suggestedChanges?:array<string>}>, recommendationStatus:"BreachedUnattainable"|"BreachedCanMeet"|"MetCanImprove"|"MissingPolicy"}>, nextToken?:string}>
     */
    public function listAppComponentRecommendationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appArn:string, appVersion:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{appInputSources:array<array{eksSourceClusterNamespace?:array{eksClusterArn:string, namespace:string}, importType:"CfnStack"|"Resource"|"AppRegistryApp"|"ResourceGroup"|"Terraform"|"EKS", resourceCount?:int, sourceArn?:string, sourceName?:string, terraformSource?:array{s3StateFileUrl:string}}>, nextToken?:string}>
     */
    public function listAppInputSources(array $args): \AWS\Result { }

    /**
     * @param array{appArn:string, appVersion:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{appInputSources:array<array{eksSourceClusterNamespace?:array{eksClusterArn:string, namespace:string}, importType:"CfnStack"|"Resource"|"AppRegistryApp"|"ResourceGroup"|"Terraform"|"EKS", resourceCount?:int, sourceArn?:string, sourceName?:string, terraformSource?:array{s3StateFileUrl:string}}>, nextToken?:string}>
     */
    public function listAppInputSourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appArn:string, appVersion:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{appArn:string, appComponents?:array<array{additionalInfo?:array<string, array<string>>, id?:string, name:string, type:string}>, appVersion:string, nextToken?:string}>
     */
    public function listAppVersionAppComponents(array $args): \AWS\Result { }

    /**
     * @param array{appArn:string, appVersion:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{appArn:string, appComponents?:array<array{additionalInfo?:array<string, array<string>>, id?:string, name:string, type:string}>, appVersion:string, nextToken?:string}>
     */
    public function listAppVersionAppComponentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appArn:string, appVersion:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, resourceMappings:array<array{appRegistryAppName?:string, eksSourceName?:string, logicalStackName?:string, mappingType:"CfnStack"|"Resource"|"AppRegistryApp"|"ResourceGroup"|"Terraform"|"EKS", physicalResourceId:array{awsAccountId?:string, awsRegion?:string, identifier:string, type:"Arn"|"Native"}, resourceGroupName?:string, resourceName?:string, terraformSourceName?:string}>}>
     */
    public function listAppVersionResourceMappings(array $args): \AWS\Result { }

    /**
     * @param array{appArn:string, appVersion:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, resourceMappings:array<array{appRegistryAppName?:string, eksSourceName?:string, logicalStackName?:string, mappingType:"CfnStack"|"Resource"|"AppRegistryApp"|"ResourceGroup"|"Terraform"|"EKS", physicalResourceId:array{awsAccountId?:string, awsRegion?:string, identifier:string, type:"Arn"|"Native"}, resourceGroupName?:string, resourceName?:string, terraformSourceName?:string}>}>
     */
    public function listAppVersionResourceMappingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appArn:string, appVersion:string, maxResults?:int, nextToken?:string, resolutionId?:string} $args
     * @return \AWS\Result<array{nextToken?:string, physicalResources:array<array{additionalInfo?:array<string, array<string>>, appComponents?:array<array{additionalInfo?:array<string, array<string>>, id?:string, name:string, type:string}>, excluded?:bool, logicalResourceId:array{eksSourceName?:string, identifier:string, logicalStackName?:string, resourceGroupName?:string, terraformSourceName?:string}, parentResourceName?:string, physicalResourceId:array{awsAccountId?:string, awsRegion?:string, identifier:string, type:"Arn"|"Native"}, resourceName?:string, resourceType:string, sourceType?:"AppTemplate"|"Discovered"}>, resolutionId:string}>
     */
    public function listAppVersionResources(array $args): \AWS\Result { }

    /**
     * @param array{appArn:string, appVersion:string, maxResults?:int, nextToken?:string, resolutionId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, physicalResources:array<array{additionalInfo?:array<string, array<string>>, appComponents?:array<array{additionalInfo?:array<string, array<string>>, id?:string, name:string, type:string}>, excluded?:bool, logicalResourceId:array{eksSourceName?:string, identifier:string, logicalStackName?:string, resourceGroupName?:string, terraformSourceName?:string}, parentResourceName?:string, physicalResourceId:array{awsAccountId?:string, awsRegion?:string, identifier:string, type:"Arn"|"Native"}, resourceName?:string, resourceType:string, sourceType?:"AppTemplate"|"Discovered"}>, resolutionId:string}>
     */
    public function listAppVersionResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appArn:string, endTime?:int|string|\DateTimeInterface, maxResults?:int, nextToken?:string, startTime?:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{appVersions:array<array{appVersion:string, creationTime?:int|string|\DateTimeInterface, identifier?:int, versionName?:string}>, nextToken?:string}>
     */
    public function listAppVersions(array $args): \AWS\Result { }

    /**
     * @param array{appArn:string, endTime?:int|string|\DateTimeInterface, maxResults?:int, nextToken?:string, startTime?:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{appVersions:array<array{appVersion:string, creationTime?:int|string|\DateTimeInterface, identifier?:int, versionName?:string}>, nextToken?:string}>
     */
    public function listAppVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appArn?:string, awsApplicationArn?:string, fromLastAssessmentTime?:int|string|\DateTimeInterface, maxResults?:int, name?:string, nextToken?:string, reverseOrder?:bool, toLastAssessmentTime?:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{appSummaries:array<array{appArn:string, assessmentSchedule?:"Disabled"|"Daily", awsApplicationArn?:string, complianceStatus?:"PolicyBreached"|"PolicyMet"|"NotAssessed"|"ChangesDetected"|"NotApplicable"|"MissingPolicy", creationTime:int|string|\DateTimeInterface, description?:string, driftStatus?:"NotChecked"|"NotDetected"|"Detected", lastAppComplianceEvaluationTime?:int|string|\DateTimeInterface, name:string, resiliencyScore?:float, rpoInSecs?:int, rtoInSecs?:int, status?:"Active"|"Deleting"}>, nextToken?:string}>
     */
    public function listApps(array $args = []): \AWS\Result { }

    /**
     * @param array{appArn?:string, awsApplicationArn?:string, fromLastAssessmentTime?:int|string|\DateTimeInterface, maxResults?:int, name?:string, nextToken?:string, reverseOrder?:bool, toLastAssessmentTime?:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{appSummaries:array<array{appArn:string, assessmentSchedule?:"Disabled"|"Daily", awsApplicationArn?:string, complianceStatus?:"PolicyBreached"|"PolicyMet"|"NotAssessed"|"ChangesDetected"|"NotApplicable"|"MissingPolicy", creationTime:int|string|\DateTimeInterface, description?:string, driftStatus?:"NotChecked"|"NotDetected"|"Detected", lastAppComplianceEvaluationTime?:int|string|\DateTimeInterface, name:string, resiliencyScore?:float, rpoInSecs?:int, rtoInSecs?:int, status?:"Active"|"Deleting"}>, nextToken?:string}>
     */
    public function listAppsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{conditions?:array<array{field:string, operator:"Equals"|"NotEquals"|"GreaterThen"|"GreaterOrEquals"|"LessThen"|"LessOrEquals", value?:string}>, dataSource?:string, fields?:array<array{aggregation?:"Min"|"Max"|"Sum"|"Avg"|"Count", name:string}>, maxResults?:int, nextToken?:string, sorts?:array<array{ascending?:bool, field:string}>} $args
     * @return \AWS\Result<array{nextToken?:string, rows:array<array<string>>}>
     */
    public function listMetrics(array $args = []): \AWS\Result { }

    /**
     * @param array{conditions?:array<array{field:string, operator:"Equals"|"NotEquals"|"GreaterThen"|"GreaterOrEquals"|"LessThen"|"LessOrEquals", value?:string}>, dataSource?:string, fields?:array<array{aggregation?:"Min"|"Max"|"Sum"|"Avg"|"Count", name:string}>, maxResults?:int, nextToken?:string, sorts?:array<array{ascending?:bool, field:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, rows:array<array<string>>}>
     */
    public function listMetricsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentArn?:string, maxResults?:int, name?:string, nextToken?:string, recommendationTemplateArn?:string, reverseOrder?:bool, status?:array<"Pending"|"InProgress"|"Failed"|"Success">} $args
     * @return \AWS\Result<array{nextToken?:string, recommendationTemplates?:array<array{appArn?:string, assessmentArn:string, endTime?:int|string|\DateTimeInterface, format:"CfnYaml"|"CfnJson", message?:string, name:string, needsReplacements?:bool, recommendationIds?:array<string>, recommendationTemplateArn:string, recommendationTypes:array<"Alarm"|"Sop"|"Test">, startTime?:int|string|\DateTimeInterface, status:"Pending"|"InProgress"|"Failed"|"Success", tags?:array<string, string>, templatesLocation?:array{bucket?:string, prefix?:string}}>}>
     */
    public function listRecommendationTemplates(array $args = []): \AWS\Result { }

    /**
     * @param array{assessmentArn?:string, maxResults?:int, name?:string, nextToken?:string, recommendationTemplateArn?:string, reverseOrder?:bool, status?:array<"Pending"|"InProgress"|"Failed"|"Success">} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, recommendationTemplates?:array<array{appArn?:string, assessmentArn:string, endTime?:int|string|\DateTimeInterface, format:"CfnYaml"|"CfnJson", message?:string, name:string, needsReplacements?:bool, recommendationIds?:array<string>, recommendationTemplateArn:string, recommendationTypes:array<"Alarm"|"Sop"|"Test">, startTime?:int|string|\DateTimeInterface, status:"Pending"|"InProgress"|"Failed"|"Success", tags?:array<string, string>, templatesLocation?:array{bucket?:string, prefix?:string}}>}>
     */
    public function listRecommendationTemplatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, policyName?:string} $args
     * @return \AWS\Result<array{nextToken?:string, resiliencyPolicies:array<array{creationTime?:int|string|\DateTimeInterface, dataLocationConstraint?:"AnyLocation"|"SameContinent"|"SameCountry", estimatedCostTier?:"L1"|"L2"|"L3"|"L4", policy?:array<"Software"|"Hardware"|"AZ"|"Region", array{rpoInSecs:int, rtoInSecs:int}>, policyArn?:string, policyDescription?:string, policyName?:string, tags?:array<string, string>, tier?:"MissionCritical"|"Critical"|"Important"|"CoreServices"|"NonCritical"|"NotApplicable"}>}>
     */
    public function listResiliencyPolicies(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, policyName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, resiliencyPolicies:array<array{creationTime?:int|string|\DateTimeInterface, dataLocationConstraint?:"AnyLocation"|"SameContinent"|"SameCountry", estimatedCostTier?:"L1"|"L2"|"L3"|"L4", policy?:array<"Software"|"Hardware"|"AZ"|"Region", array{rpoInSecs:int, rtoInSecs:int}>, policyArn?:string, policyDescription?:string, policyName?:string, tags?:array<string, string>, tier?:"MissionCritical"|"Critical"|"Important"|"CoreServices"|"NonCritical"|"NotApplicable"}>}>
     */
    public function listResiliencyPoliciesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appArn?:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{groupingRecommendations:array<array{confidenceLevel:"High"|"Medium", creationTime:int|string|\DateTimeInterface, groupingAppComponent:array{appComponentId:string, appComponentName:string, appComponentType:string}, groupingRecommendationId:string, recommendationReasons:array<string>, rejectionReason?:"DistinctBusinessPurpose"|"SeparateDataConcern"|"DistinctUserGroupHandling"|"Other", resources:array<array{logicalResourceId:array{eksSourceName?:string, identifier:string, logicalStackName?:string, resourceGroupName?:string, terraformSourceName?:string}, physicalResourceId:array{awsAccountId?:string, awsRegion?:string, identifier:string, type:"Arn"|"Native"}, resourceName:string, resourceType:string, sourceAppComponentIds:array<string>}>, score:float, status:"Accepted"|"Rejected"|"PendingDecision"}>, nextToken?:string}>
     */
    public function listResourceGroupingRecommendations(array $args = []): \AWS\Result { }

    /**
     * @param array{appArn?:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{groupingRecommendations:array<array{confidenceLevel:"High"|"Medium", creationTime:int|string|\DateTimeInterface, groupingAppComponent:array{appComponentId:string, appComponentName:string, appComponentType:string}, groupingRecommendationId:string, recommendationReasons:array<string>, rejectionReason?:"DistinctBusinessPurpose"|"SeparateDataConcern"|"DistinctUserGroupHandling"|"Other", resources:array<array{logicalResourceId:array{eksSourceName?:string, identifier:string, logicalStackName?:string, resourceGroupName?:string, terraformSourceName?:string}, physicalResourceId:array{awsAccountId?:string, awsRegion?:string, identifier:string, type:"Arn"|"Native"}, resourceName:string, resourceType:string, sourceAppComponentIds:array<string>}>, score:float, status:"Accepted"|"Rejected"|"PendingDecision"}>, nextToken?:string}>
     */
    public function listResourceGroupingRecommendationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assessmentArn:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, sopRecommendations:array<array{appComponentName?:string, description?:string, items?:array<array{alreadyImplemented?:bool, discoveredAlarm?:array{alarmArn?:string, source?:string}, excludeReason?:"AlreadyImplemented"|"NotRelevant"|"ComplexityOfImplementation", excluded?:bool, latestDiscoveredExperiment?:array{experimentArn?:string, experimentTemplateId?:string}, resourceId?:string, targetAccountId?:string, targetRegion?:string}>, name?:string, prerequisite?:string, recommendationId:string, recommendationStatus?:"Implemented"|"Inactive"|"NotImplemented"|"Excluded", referenceId:string, serviceType:"SSM"}>}>
     */
    public function listSopRecommendations(array $args): \AWS\Result { }

    /**
     * @param array{assessmentArn:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, sopRecommendations:array<array{appComponentName?:string, description?:string, items?:array<array{alreadyImplemented?:bool, discoveredAlarm?:array{alarmArn?:string, source?:string}, excludeReason?:"AlreadyImplemented"|"NotRelevant"|"ComplexityOfImplementation", excluded?:bool, latestDiscoveredExperiment?:array{experimentArn?:string, experimentTemplateId?:string}, resourceId?:string, targetAccountId?:string, targetRegion?:string}>, name?:string, prerequisite?:string, recommendationId:string, recommendationStatus?:"Implemented"|"Inactive"|"NotImplemented"|"Excluded", referenceId:string, serviceType:"SSM"}>}>
     */
    public function listSopRecommendationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, resiliencyPolicies:array<array{creationTime?:int|string|\DateTimeInterface, dataLocationConstraint?:"AnyLocation"|"SameContinent"|"SameCountry", estimatedCostTier?:"L1"|"L2"|"L3"|"L4", policy?:array<"Software"|"Hardware"|"AZ"|"Region", array{rpoInSecs:int, rtoInSecs:int}>, policyArn?:string, policyDescription?:string, policyName?:string, tags?:array<string, string>, tier?:"MissionCritical"|"Critical"|"Important"|"CoreServices"|"NonCritical"|"NotApplicable"}>}>
     */
    public function listSuggestedResiliencyPolicies(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, resiliencyPolicies:array<array{creationTime?:int|string|\DateTimeInterface, dataLocationConstraint?:"AnyLocation"|"SameContinent"|"SameCountry", estimatedCostTier?:"L1"|"L2"|"L3"|"L4", policy?:array<"Software"|"Hardware"|"AZ"|"Region", array{rpoInSecs:int, rtoInSecs:int}>, policyArn?:string, policyDescription?:string, policyName?:string, tags?:array<string, string>, tier?:"MissionCritical"|"Critical"|"Important"|"CoreServices"|"NonCritical"|"NotApplicable"}>}>
     */
    public function listSuggestedResiliencyPoliciesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{assessmentArn:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, testRecommendations:array<array{appComponentId?:string, appComponentName?:string, dependsOnAlarms?:array<string>, description?:string, intent?:string, items?:array<array{alreadyImplemented?:bool, discoveredAlarm?:array{alarmArn?:string, source?:string}, excludeReason?:"AlreadyImplemented"|"NotRelevant"|"ComplexityOfImplementation", excluded?:bool, latestDiscoveredExperiment?:array{experimentArn?:string, experimentTemplateId?:string}, resourceId?:string, targetAccountId?:string, targetRegion?:string}>, name?:string, prerequisite?:string, recommendationId?:string, recommendationStatus?:"Implemented"|"Inactive"|"NotImplemented"|"Excluded", referenceId:string, risk?:"Small"|"Medium"|"High", type?:"Software"|"Hardware"|"AZ"|"Region"}>}>
     */
    public function listTestRecommendations(array $args): \AWS\Result { }

    /**
     * @param array{assessmentArn:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, testRecommendations:array<array{appComponentId?:string, appComponentName?:string, dependsOnAlarms?:array<string>, description?:string, intent?:string, items?:array<array{alreadyImplemented?:bool, discoveredAlarm?:array{alarmArn?:string, source?:string}, excludeReason?:"AlreadyImplemented"|"NotRelevant"|"ComplexityOfImplementation", excluded?:bool, latestDiscoveredExperiment?:array{experimentArn?:string, experimentTemplateId?:string}, resourceId?:string, targetAccountId?:string, targetRegion?:string}>, name?:string, prerequisite?:string, recommendationId?:string, recommendationStatus?:"Implemented"|"Inactive"|"NotImplemented"|"Excluded", referenceId:string, risk?:"Small"|"Medium"|"High", type?:"Software"|"Hardware"|"AZ"|"Region"}>}>
     */
    public function listTestRecommendationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appArn:string, appVersion:string, maxResults?:int, nextToken?:string, resolutionId?:string} $args
     * @return \AWS\Result<array{nextToken?:string, resolutionId:string, unsupportedResources:array<array{logicalResourceId:array{eksSourceName?:string, identifier:string, logicalStackName?:string, resourceGroupName?:string, terraformSourceName?:string}, physicalResourceId:array{awsAccountId?:string, awsRegion?:string, identifier:string, type:"Arn"|"Native"}, resourceType:string, unsupportedResourceStatus?:string}>}>
     */
    public function listUnsupportedAppVersionResources(array $args): \AWS\Result { }

    /**
     * @param array{appArn:string, appVersion:string, maxResults?:int, nextToken?:string, resolutionId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, resolutionId:string, unsupportedResources:array<array{logicalResourceId:array{eksSourceName?:string, identifier:string, logicalStackName?:string, resourceGroupName?:string, terraformSourceName?:string}, physicalResourceId:array{awsAccountId?:string, awsRegion?:string, identifier:string, type:"Arn"|"Native"}, resourceType:string, unsupportedResourceStatus?:string}>}>
     */
    public function listUnsupportedAppVersionResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appArn:string, versionName?:string} $args
     * @return \AWS\Result<array{appArn:string, appVersion?:string, identifier?:int, versionName?:string}>
     */
    public function publishAppVersion(array $args): \AWS\Result { }

    /**
     * @param array{appArn:string, versionName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{appArn:string, appVersion?:string, identifier?:int, versionName?:string}>
     */
    public function publishAppVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appArn:string, appTemplateBody:string} $args
     * @return \AWS\Result<array{appArn?:string, appVersion?:string}>
     */
    public function putDraftAppVersionTemplate(array $args): \AWS\Result { }

    /**
     * @param array{appArn:string, appTemplateBody:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{appArn?:string, appVersion?:string}>
     */
    public function putDraftAppVersionTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appArn:string, entries:array<array{groupingRecommendationId:string, rejectionReason?:"DistinctBusinessPurpose"|"SeparateDataConcern"|"DistinctUserGroupHandling"|"Other"}>} $args
     * @return \AWS\Result<array{appArn:string, failedEntries:array<array{errorMessage:string, groupingRecommendationId:string}>}>
     */
    public function rejectResourceGroupingRecommendations(array $args): \AWS\Result { }

    /**
     * @param array{appArn:string, entries:array<array{groupingRecommendationId:string, rejectionReason?:"DistinctBusinessPurpose"|"SeparateDataConcern"|"DistinctUserGroupHandling"|"Other"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{appArn:string, failedEntries:array<array{errorMessage:string, groupingRecommendationId:string}>}>
     */
    public function rejectResourceGroupingRecommendationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appArn:string, appRegistryAppNames?:array<string>, eksSourceNames?:array<string>, logicalStackNames?:array<string>, resourceGroupNames?:array<string>, resourceNames?:array<string>, terraformSourceNames?:array<string>} $args
     * @return \AWS\Result<array{appArn?:string, appVersion?:string}>
     */
    public function removeDraftAppVersionResourceMappings(array $args): \AWS\Result { }

    /**
     * @param array{appArn:string, appRegistryAppNames?:array<string>, eksSourceNames?:array<string>, logicalStackNames?:array<string>, resourceGroupNames?:array<string>, resourceNames?:array<string>, terraformSourceNames?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{appArn?:string, appVersion?:string}>
     */
    public function removeDraftAppVersionResourceMappingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appArn:string, appVersion:string} $args
     * @return \AWS\Result<array{appArn:string, appVersion:string, resolutionId:string, status:"Pending"|"InProgress"|"Failed"|"Success"}>
     */
    public function resolveAppVersionResources(array $args): \AWS\Result { }

    /**
     * @param array{appArn:string, appVersion:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{appArn:string, appVersion:string, resolutionId:string, status:"Pending"|"InProgress"|"Failed"|"Success"}>
     */
    public function resolveAppVersionResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appArn:string, appVersion:string, assessmentName:string, clientToken?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{assessment:array{appArn?:string, appVersion?:string, assessmentArn:string, assessmentName?:string, assessmentStatus:"Pending"|"InProgress"|"Failed"|"Success", compliance?:array<"Software"|"Hardware"|"AZ"|"Region", array{achievableRpoInSecs?:int, achievableRtoInSecs?:int, complianceStatus:"PolicyBreached"|"PolicyMet"|"NotApplicable"|"MissingPolicy", currentRpoInSecs?:int, currentRtoInSecs?:int, message?:string, rpoDescription?:string, rpoReferenceId?:string, rtoDescription?:string, rtoReferenceId?:string}>, complianceStatus?:"PolicyBreached"|"PolicyMet"|"NotApplicable"|"MissingPolicy", cost?:array{amount:float, currency:string, frequency:"Hourly"|"Daily"|"Monthly"|"Yearly"}, driftStatus?:"NotChecked"|"NotDetected"|"Detected", endTime?:int|string|\DateTimeInterface, invoker:"User"|"System", message?:string, policy?:array{creationTime?:int|string|\DateTimeInterface, dataLocationConstraint?:"AnyLocation"|"SameContinent"|"SameCountry", estimatedCostTier?:"L1"|"L2"|"L3"|"L4", policy?:mixed, policyArn?:string, policyDescription?:string, policyName?:string, tags?:array<string, string>, tier?:"MissionCritical"|"Critical"|"Important"|"CoreServices"|"NonCritical"|"NotApplicable"}, resiliencyScore?:array{componentScore?:array<"Compliance"|"Test"|"Alarm"|"Sop", array{excludedCount?:int, outstandingCount?:int, possibleScore?:float, score?:float}>, disruptionScore:array<"Software"|"Hardware"|"AZ"|"Region", float>, score:float}, resourceErrorsDetails?:array{hasMoreErrors?:bool, resourceErrors?:array<array{logicalResourceId?:string, physicalResourceId?:string, reason?:string}>}, startTime?:int|string|\DateTimeInterface, summary?:array{riskRecommendations?:array<array{appComponents?:array<string>, recommendation?:string, risk?:string}>, summary?:mixed}, tags?:array<string, string>, versionName?:string}}>
     */
    public function startAppAssessment(array $args): \AWS\Result { }

    /**
     * @param array{appArn:string, appVersion:string, assessmentName:string, clientToken?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{assessment:array{appArn?:string, appVersion?:string, assessmentArn:string, assessmentName?:string, assessmentStatus:"Pending"|"InProgress"|"Failed"|"Success", compliance?:array<"Software"|"Hardware"|"AZ"|"Region", array{achievableRpoInSecs?:int, achievableRtoInSecs?:int, complianceStatus:"PolicyBreached"|"PolicyMet"|"NotApplicable"|"MissingPolicy", currentRpoInSecs?:int, currentRtoInSecs?:int, message?:string, rpoDescription?:string, rpoReferenceId?:string, rtoDescription?:string, rtoReferenceId?:string}>, complianceStatus?:"PolicyBreached"|"PolicyMet"|"NotApplicable"|"MissingPolicy", cost?:array{amount:float, currency:string, frequency:"Hourly"|"Daily"|"Monthly"|"Yearly"}, driftStatus?:"NotChecked"|"NotDetected"|"Detected", endTime?:int|string|\DateTimeInterface, invoker:"User"|"System", message?:string, policy?:array{creationTime?:int|string|\DateTimeInterface, dataLocationConstraint?:"AnyLocation"|"SameContinent"|"SameCountry", estimatedCostTier?:"L1"|"L2"|"L3"|"L4", policy?:mixed, policyArn?:string, policyDescription?:string, policyName?:string, tags?:array<string, string>, tier?:"MissionCritical"|"Critical"|"Important"|"CoreServices"|"NonCritical"|"NotApplicable"}, resiliencyScore?:array{componentScore?:array<"Compliance"|"Test"|"Alarm"|"Sop", array{excludedCount?:int, outstandingCount?:int, possibleScore?:float, score?:float}>, disruptionScore:array<"Software"|"Hardware"|"AZ"|"Region", float>, score:float}, resourceErrorsDetails?:array{hasMoreErrors?:bool, resourceErrors?:array<array{logicalResourceId?:string, physicalResourceId?:string, reason?:string}>}, startTime?:int|string|\DateTimeInterface, summary?:array{riskRecommendations?:array<array{appComponents?:array<string>, recommendation?:string, risk?:string}>, summary?:mixed}, tags?:array<string, string>, versionName?:string}}>
     */
    public function startAppAssessmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{bucketName?:string, clientToken?:string} $args
     * @return \AWS\Result<array{metricsExportId:string, status:"Pending"|"InProgress"|"Failed"|"Success"}>
     */
    public function startMetricsExport(array $args = []): \AWS\Result { }

    /**
     * @param array{bucketName?:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{metricsExportId:string, status:"Pending"|"InProgress"|"Failed"|"Success"}>
     */
    public function startMetricsExportAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appArn:string} $args
     * @return \AWS\Result<array{appArn:string, errorMessage?:string, groupingId:string, status:"Pending"|"InProgress"|"Failed"|"Success"}>
     */
    public function startResourceGroupingRecommendationTask(array $args): \AWS\Result { }

    /**
     * @param array{appArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{appArn:string, errorMessage?:string, groupingId:string, status:"Pending"|"InProgress"|"Failed"|"Success"}>
     */
    public function startResourceGroupingRecommendationTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{appArn:string, assessmentSchedule?:"Disabled"|"Daily", clearResiliencyPolicyArn?:bool, description?:string, eventSubscriptions?:array<array{eventType:"ScheduledAssessmentFailure"|"DriftDetected", name:string, snsTopicArn?:string}>, permissionModel?:array{crossAccountRoleArns?:array<string>, invokerRoleName?:string, type:"LegacyIAMUser"|"RoleBased"}, policyArn?:string} $args
     * @return \AWS\Result<array{app:array{appArn:string, assessmentSchedule?:"Disabled"|"Daily", awsApplicationArn?:string, complianceStatus?:"PolicyBreached"|"PolicyMet"|"NotAssessed"|"ChangesDetected"|"NotApplicable"|"MissingPolicy", creationTime:int|string|\DateTimeInterface, description?:string, driftStatus?:"NotChecked"|"NotDetected"|"Detected", eventSubscriptions?:array<array{eventType:"ScheduledAssessmentFailure"|"DriftDetected", name:string, snsTopicArn?:string}>, lastAppComplianceEvaluationTime?:int|string|\DateTimeInterface, lastDriftEvaluationTime?:int|string|\DateTimeInterface, lastResiliencyScoreEvaluationTime?:int|string|\DateTimeInterface, name:string, permissionModel?:array{crossAccountRoleArns?:array<string>, invokerRoleName?:string, type:"LegacyIAMUser"|"RoleBased"}, policyArn?:string, resiliencyScore?:float, rpoInSecs?:int, rtoInSecs?:int, status?:"Active"|"Deleting", tags?:array<string, string>}}>
     */
    public function updateApp(array $args): \AWS\Result { }

    /**
     * @param array{appArn:string, assessmentSchedule?:"Disabled"|"Daily", clearResiliencyPolicyArn?:bool, description?:string, eventSubscriptions?:array<array{eventType:"ScheduledAssessmentFailure"|"DriftDetected", name:string, snsTopicArn?:string}>, permissionModel?:array{crossAccountRoleArns?:array<string>, invokerRoleName?:string, type:"LegacyIAMUser"|"RoleBased"}, policyArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{app:array{appArn:string, assessmentSchedule?:"Disabled"|"Daily", awsApplicationArn?:string, complianceStatus?:"PolicyBreached"|"PolicyMet"|"NotAssessed"|"ChangesDetected"|"NotApplicable"|"MissingPolicy", creationTime:int|string|\DateTimeInterface, description?:string, driftStatus?:"NotChecked"|"NotDetected"|"Detected", eventSubscriptions?:array<array{eventType:"ScheduledAssessmentFailure"|"DriftDetected", name:string, snsTopicArn?:string}>, lastAppComplianceEvaluationTime?:int|string|\DateTimeInterface, lastDriftEvaluationTime?:int|string|\DateTimeInterface, lastResiliencyScoreEvaluationTime?:int|string|\DateTimeInterface, name:string, permissionModel?:array{crossAccountRoleArns?:array<string>, invokerRoleName?:string, type:"LegacyIAMUser"|"RoleBased"}, policyArn?:string, resiliencyScore?:float, rpoInSecs?:int, rtoInSecs?:int, status?:"Active"|"Deleting", tags?:array<string, string>}}>
     */
    public function updateAppAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{additionalInfo?:array<string, array<string>>, appArn:string} $args
     * @return \AWS\Result<array{additionalInfo?:array<string, array<string>>, appArn:string, appVersion:string}>
     */
    public function updateAppVersion(array $args): \AWS\Result { }

    /**
     * @param array{additionalInfo?:array<string, array<string>>, appArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{additionalInfo?:array<string, array<string>>, appArn:string, appVersion:string}>
     */
    public function updateAppVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{additionalInfo?:array<string, array<string>>, appArn:string, id:string, name?:string, type?:string} $args
     * @return \AWS\Result<array{appArn:string, appComponent?:array{additionalInfo?:array<string, array<string>>, id?:string, name:string, type:string}, appVersion:string}>
     */
    public function updateAppVersionAppComponent(array $args): \AWS\Result { }

    /**
     * @param array{additionalInfo?:array<string, array<string>>, appArn:string, id:string, name?:string, type?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{appArn:string, appComponent?:array{additionalInfo?:array<string, array<string>>, id?:string, name:string, type:string}, appVersion:string}>
     */
    public function updateAppVersionAppComponentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{additionalInfo?:array<string, array<string>>, appArn:string, appComponents?:array<string>, awsAccountId?:string, awsRegion?:string, excluded?:bool, logicalResourceId?:array{eksSourceName?:string, identifier:string, logicalStackName?:string, resourceGroupName?:string, terraformSourceName?:string}, physicalResourceId?:string, resourceName?:string, resourceType?:string} $args
     * @return \AWS\Result<array{appArn:string, appVersion:string, physicalResource?:array{additionalInfo?:array<string, array<string>>, appComponents?:array<array{additionalInfo?:array<string, array<string>>, id?:string, name:string, type:string}>, excluded?:bool, logicalResourceId:array{eksSourceName?:string, identifier:string, logicalStackName?:string, resourceGroupName?:string, terraformSourceName?:string}, parentResourceName?:string, physicalResourceId:array{awsAccountId?:string, awsRegion?:string, identifier:string, type:"Arn"|"Native"}, resourceName?:string, resourceType:string, sourceType?:"AppTemplate"|"Discovered"}}>
     */
    public function updateAppVersionResource(array $args): \AWS\Result { }

    /**
     * @param array{additionalInfo?:array<string, array<string>>, appArn:string, appComponents?:array<string>, awsAccountId?:string, awsRegion?:string, excluded?:bool, logicalResourceId?:array{eksSourceName?:string, identifier:string, logicalStackName?:string, resourceGroupName?:string, terraformSourceName?:string}, physicalResourceId?:string, resourceName?:string, resourceType?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{appArn:string, appVersion:string, physicalResource?:array{additionalInfo?:array<string, array<string>>, appComponents?:array<array{additionalInfo?:array<string, array<string>>, id?:string, name:string, type:string}>, excluded?:bool, logicalResourceId:array{eksSourceName?:string, identifier:string, logicalStackName?:string, resourceGroupName?:string, terraformSourceName?:string}, parentResourceName?:string, physicalResourceId:array{awsAccountId?:string, awsRegion?:string, identifier:string, type:"Arn"|"Native"}, resourceName?:string, resourceType:string, sourceType?:"AppTemplate"|"Discovered"}}>
     */
    public function updateAppVersionResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{dataLocationConstraint?:"AnyLocation"|"SameContinent"|"SameCountry", policy?:array<"Software"|"Hardware"|"AZ"|"Region", array{rpoInSecs:int, rtoInSecs:int}>, policyArn:string, policyDescription?:string, policyName?:string, tier?:"MissionCritical"|"Critical"|"Important"|"CoreServices"|"NonCritical"|"NotApplicable"} $args
     * @return \AWS\Result<array{policy:array{creationTime?:int|string|\DateTimeInterface, dataLocationConstraint?:"AnyLocation"|"SameContinent"|"SameCountry", estimatedCostTier?:"L1"|"L2"|"L3"|"L4", policy?:mixed, policyArn?:string, policyDescription?:string, policyName?:string, tags?:array<string, string>, tier?:"MissionCritical"|"Critical"|"Important"|"CoreServices"|"NonCritical"|"NotApplicable"}}>
     */
    public function updateResiliencyPolicy(array $args): \AWS\Result { }

    /**
     * @param array{dataLocationConstraint?:"AnyLocation"|"SameContinent"|"SameCountry", policy?:array<"Software"|"Hardware"|"AZ"|"Region", array{rpoInSecs:int, rtoInSecs:int}>, policyArn:string, policyDescription?:string, policyName?:string, tier?:"MissionCritical"|"Critical"|"Important"|"CoreServices"|"NonCritical"|"NotApplicable"} $args
     * @return \GuzzleHttp\Promise\Promise<array{policy:array{creationTime?:int|string|\DateTimeInterface, dataLocationConstraint?:"AnyLocation"|"SameContinent"|"SameCountry", estimatedCostTier?:"L1"|"L2"|"L3"|"L4", policy?:mixed, policyArn?:string, policyDescription?:string, policyName?:string, tags?:array<string, string>, tier?:"MissionCritical"|"Critical"|"Important"|"CoreServices"|"NonCritical"|"NotApplicable"}}>
     */
    public function updateResiliencyPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
