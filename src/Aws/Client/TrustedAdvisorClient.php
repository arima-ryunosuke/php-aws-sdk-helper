<?php
namespace AWS\TrustedAdvisor;

class TrustedAdvisorClient
{
    /**
     * @param array{recommendationResourceExclusions:array<array{arn:string, isExcluded:bool}>} $args
     * @return \AWS\Result<array{batchUpdateRecommendationResourceExclusionErrors:array<array{arn?:string, errorCode?:string, errorMessage?:string}>}>
     */
    public function batchUpdateRecommendationResourceExclusion(array $args): \AWS\Result { }

    /**
     * @param array{recommendationResourceExclusions:array<array{arn:string, isExcluded:bool}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{batchUpdateRecommendationResourceExclusionErrors:array<array{arn?:string, errorCode?:string, errorMessage?:string}>}>
     */
    public function batchUpdateRecommendationResourceExclusionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{organizationRecommendationIdentifier:string} $args
     * @return \AWS\Result<array{organizationRecommendation?:array{arn:string, awsServices?:array<string>, checkArn?:string, createdAt?:int|string|\DateTimeInterface, createdBy?:string, description:string, id:string, lastUpdatedAt?:int|string|\DateTimeInterface, lifecycleStage?:"in_progress"|"pending_response"|"dismissed"|"resolved", name:string, pillarSpecificAggregates?:array{costOptimizing?:array{estimatedMonthlySavings:float, estimatedPercentMonthlySavings:float}}, pillars:array<"cost_optimizing"|"performance"|"security"|"service_limits"|"fault_tolerance"|"operational_excellence">, resolvedAt?:int|string|\DateTimeInterface, resourcesAggregates:array{errorCount:int, okCount:int, warningCount:int}, source:"aws_config"|"compute_optimizer"|"cost_explorer"|"lse"|"manual"|"pse"|"rds"|"resilience"|"resilience_hub"|"security_hub"|"stir"|"ta_check"|"well_architected", status:"ok"|"warning"|"error", type:"standard"|"priority", updateReason?:string, updateReasonCode?:"non_critical_account"|"temporary_account"|"valid_business_case"|"other_methods_available"|"low_priority"|"not_applicable"|"other", updatedOnBehalfOf?:string, updatedOnBehalfOfJobTitle?:string}}>
     */
    public function getOrganizationRecommendation(array $args): \AWS\Result { }

    /**
     * @param array{organizationRecommendationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{organizationRecommendation?:array{arn:string, awsServices?:array<string>, checkArn?:string, createdAt?:int|string|\DateTimeInterface, createdBy?:string, description:string, id:string, lastUpdatedAt?:int|string|\DateTimeInterface, lifecycleStage?:"in_progress"|"pending_response"|"dismissed"|"resolved", name:string, pillarSpecificAggregates?:array{costOptimizing?:array{estimatedMonthlySavings:float, estimatedPercentMonthlySavings:float}}, pillars:array<"cost_optimizing"|"performance"|"security"|"service_limits"|"fault_tolerance"|"operational_excellence">, resolvedAt?:int|string|\DateTimeInterface, resourcesAggregates:array{errorCount:int, okCount:int, warningCount:int}, source:"aws_config"|"compute_optimizer"|"cost_explorer"|"lse"|"manual"|"pse"|"rds"|"resilience"|"resilience_hub"|"security_hub"|"stir"|"ta_check"|"well_architected", status:"ok"|"warning"|"error", type:"standard"|"priority", updateReason?:string, updateReasonCode?:"non_critical_account"|"temporary_account"|"valid_business_case"|"other_methods_available"|"low_priority"|"not_applicable"|"other", updatedOnBehalfOf?:string, updatedOnBehalfOfJobTitle?:string}}>
     */
    public function getOrganizationRecommendationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{recommendationIdentifier:string} $args
     * @return \AWS\Result<array{recommendation?:array{arn:string, awsServices?:array<string>, checkArn?:string, createdAt?:int|string|\DateTimeInterface, createdBy?:string, description:string, id:string, lastUpdatedAt?:int|string|\DateTimeInterface, lifecycleStage?:"in_progress"|"pending_response"|"dismissed"|"resolved", name:string, pillarSpecificAggregates?:array{costOptimizing?:array{estimatedMonthlySavings:float, estimatedPercentMonthlySavings:float}}, pillars:array<"cost_optimizing"|"performance"|"security"|"service_limits"|"fault_tolerance"|"operational_excellence">, resolvedAt?:int|string|\DateTimeInterface, resourcesAggregates:array{errorCount:int, okCount:int, warningCount:int}, source:"aws_config"|"compute_optimizer"|"cost_explorer"|"lse"|"manual"|"pse"|"rds"|"resilience"|"resilience_hub"|"security_hub"|"stir"|"ta_check"|"well_architected", status:"ok"|"warning"|"error", type:"standard"|"priority", updateReason?:string, updateReasonCode?:"non_critical_account"|"temporary_account"|"valid_business_case"|"other_methods_available"|"low_priority"|"not_applicable"|"other", updatedOnBehalfOf?:string, updatedOnBehalfOfJobTitle?:string}}>
     */
    public function getRecommendation(array $args): \AWS\Result { }

    /**
     * @param array{recommendationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{recommendation?:array{arn:string, awsServices?:array<string>, checkArn?:string, createdAt?:int|string|\DateTimeInterface, createdBy?:string, description:string, id:string, lastUpdatedAt?:int|string|\DateTimeInterface, lifecycleStage?:"in_progress"|"pending_response"|"dismissed"|"resolved", name:string, pillarSpecificAggregates?:array{costOptimizing?:array{estimatedMonthlySavings:float, estimatedPercentMonthlySavings:float}}, pillars:array<"cost_optimizing"|"performance"|"security"|"service_limits"|"fault_tolerance"|"operational_excellence">, resolvedAt?:int|string|\DateTimeInterface, resourcesAggregates:array{errorCount:int, okCount:int, warningCount:int}, source:"aws_config"|"compute_optimizer"|"cost_explorer"|"lse"|"manual"|"pse"|"rds"|"resilience"|"resilience_hub"|"security_hub"|"stir"|"ta_check"|"well_architected", status:"ok"|"warning"|"error", type:"standard"|"priority", updateReason?:string, updateReasonCode?:"non_critical_account"|"temporary_account"|"valid_business_case"|"other_methods_available"|"low_priority"|"not_applicable"|"other", updatedOnBehalfOf?:string, updatedOnBehalfOfJobTitle?:string}}>
     */
    public function getRecommendationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{awsService?:string, language?:"en"|"ja"|"zh"|"fr"|"de"|"ko"|"zh_TW"|"it"|"es"|"pt_BR"|"id", maxResults?:int, nextToken?:string, pillar?:"cost_optimizing"|"performance"|"security"|"service_limits"|"fault_tolerance"|"operational_excellence", source?:"aws_config"|"compute_optimizer"|"cost_explorer"|"lse"|"manual"|"pse"|"rds"|"resilience"|"resilience_hub"|"security_hub"|"stir"|"ta_check"|"well_architected"} $args
     * @return \AWS\Result<array{checkSummaries:array<array{arn:string, awsServices:array<string>, description:string, id:string, metadata:array<string, string>, name:string, pillars:array<"cost_optimizing"|"performance"|"security"|"service_limits"|"fault_tolerance"|"operational_excellence">, source:"aws_config"|"compute_optimizer"|"cost_explorer"|"lse"|"manual"|"pse"|"rds"|"resilience"|"resilience_hub"|"security_hub"|"stir"|"ta_check"|"well_architected"}>, nextToken?:string}>
     */
    public function listChecks(array $args = []): \AWS\Result { }

    /**
     * @param array{awsService?:string, language?:"en"|"ja"|"zh"|"fr"|"de"|"ko"|"zh_TW"|"it"|"es"|"pt_BR"|"id", maxResults?:int, nextToken?:string, pillar?:"cost_optimizing"|"performance"|"security"|"service_limits"|"fault_tolerance"|"operational_excellence", source?:"aws_config"|"compute_optimizer"|"cost_explorer"|"lse"|"manual"|"pse"|"rds"|"resilience"|"resilience_hub"|"security_hub"|"stir"|"ta_check"|"well_architected"} $args
     * @return \GuzzleHttp\Promise\Promise<array{checkSummaries:array<array{arn:string, awsServices:array<string>, description:string, id:string, metadata:array<string, string>, name:string, pillars:array<"cost_optimizing"|"performance"|"security"|"service_limits"|"fault_tolerance"|"operational_excellence">, source:"aws_config"|"compute_optimizer"|"cost_explorer"|"lse"|"manual"|"pse"|"rds"|"resilience"|"resilience_hub"|"security_hub"|"stir"|"ta_check"|"well_architected"}>, nextToken?:string}>
     */
    public function listChecksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{affectedAccountId?:string, maxResults?:int, nextToken?:string, organizationRecommendationIdentifier:string} $args
     * @return \AWS\Result<array{accountRecommendationLifecycleSummaries:array<array{accountId?:string, accountRecommendationArn?:string, lastUpdatedAt?:int|string|\DateTimeInterface, lifecycleStage?:"in_progress"|"pending_response"|"dismissed"|"resolved", updateReason?:string, updateReasonCode?:"non_critical_account"|"temporary_account"|"valid_business_case"|"other_methods_available"|"low_priority"|"not_applicable"|"other", updatedOnBehalfOf?:string, updatedOnBehalfOfJobTitle?:string}>, nextToken?:string}>
     */
    public function listOrganizationRecommendationAccounts(array $args): \AWS\Result { }

    /**
     * @param array{affectedAccountId?:string, maxResults?:int, nextToken?:string, organizationRecommendationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{accountRecommendationLifecycleSummaries:array<array{accountId?:string, accountRecommendationArn?:string, lastUpdatedAt?:int|string|\DateTimeInterface, lifecycleStage?:"in_progress"|"pending_response"|"dismissed"|"resolved", updateReason?:string, updateReasonCode?:"non_critical_account"|"temporary_account"|"valid_business_case"|"other_methods_available"|"low_priority"|"not_applicable"|"other", updatedOnBehalfOf?:string, updatedOnBehalfOfJobTitle?:string}>, nextToken?:string}>
     */
    public function listOrganizationRecommendationAccountsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{affectedAccountId?:string, exclusionStatus?:"excluded"|"included", maxResults?:int, nextToken?:string, organizationRecommendationIdentifier:string, regionCode?:string, status?:"ok"|"warning"|"error"} $args
     * @return \AWS\Result<array{nextToken?:string, organizationRecommendationResourceSummaries:array<array{accountId?:string, arn:string, awsResourceId:string, exclusionStatus?:"excluded"|"included", id:string, lastUpdatedAt:int|string|\DateTimeInterface, metadata:array<string, string>, recommendationArn:string, regionCode:string, status:"ok"|"warning"|"error"}>}>
     */
    public function listOrganizationRecommendationResources(array $args): \AWS\Result { }

    /**
     * @param array{affectedAccountId?:string, exclusionStatus?:"excluded"|"included", maxResults?:int, nextToken?:string, organizationRecommendationIdentifier:string, regionCode?:string, status?:"ok"|"warning"|"error"} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, organizationRecommendationResourceSummaries:array<array{accountId?:string, arn:string, awsResourceId:string, exclusionStatus?:"excluded"|"included", id:string, lastUpdatedAt:int|string|\DateTimeInterface, metadata:array<string, string>, recommendationArn:string, regionCode:string, status:"ok"|"warning"|"error"}>}>
     */
    public function listOrganizationRecommendationResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{afterLastUpdatedAt?:int|string|\DateTimeInterface, awsService?:string, beforeLastUpdatedAt?:int|string|\DateTimeInterface, checkIdentifier?:string, maxResults?:int, nextToken?:string, pillar?:"cost_optimizing"|"performance"|"security"|"service_limits"|"fault_tolerance"|"operational_excellence", source?:"aws_config"|"compute_optimizer"|"cost_explorer"|"lse"|"manual"|"pse"|"rds"|"resilience"|"resilience_hub"|"security_hub"|"stir"|"ta_check"|"well_architected", status?:"ok"|"warning"|"error", type?:"standard"|"priority"} $args
     * @return \AWS\Result<array{nextToken?:string, organizationRecommendationSummaries:array<array{arn:string, awsServices?:array<string>, checkArn?:string, createdAt?:int|string|\DateTimeInterface, id:string, lastUpdatedAt?:int|string|\DateTimeInterface, lifecycleStage?:"in_progress"|"pending_response"|"dismissed"|"resolved", name:string, pillarSpecificAggregates?:array{costOptimizing?:array{estimatedMonthlySavings:float, estimatedPercentMonthlySavings:float}}, pillars:array<"cost_optimizing"|"performance"|"security"|"service_limits"|"fault_tolerance"|"operational_excellence">, resourcesAggregates:array{errorCount:int, okCount:int, warningCount:int}, source:"aws_config"|"compute_optimizer"|"cost_explorer"|"lse"|"manual"|"pse"|"rds"|"resilience"|"resilience_hub"|"security_hub"|"stir"|"ta_check"|"well_architected", status:"ok"|"warning"|"error", type:"standard"|"priority"}>}>
     */
    public function listOrganizationRecommendations(array $args = []): \AWS\Result { }

    /**
     * @param array{afterLastUpdatedAt?:int|string|\DateTimeInterface, awsService?:string, beforeLastUpdatedAt?:int|string|\DateTimeInterface, checkIdentifier?:string, maxResults?:int, nextToken?:string, pillar?:"cost_optimizing"|"performance"|"security"|"service_limits"|"fault_tolerance"|"operational_excellence", source?:"aws_config"|"compute_optimizer"|"cost_explorer"|"lse"|"manual"|"pse"|"rds"|"resilience"|"resilience_hub"|"security_hub"|"stir"|"ta_check"|"well_architected", status?:"ok"|"warning"|"error", type?:"standard"|"priority"} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, organizationRecommendationSummaries:array<array{arn:string, awsServices?:array<string>, checkArn?:string, createdAt?:int|string|\DateTimeInterface, id:string, lastUpdatedAt?:int|string|\DateTimeInterface, lifecycleStage?:"in_progress"|"pending_response"|"dismissed"|"resolved", name:string, pillarSpecificAggregates?:array{costOptimizing?:array{estimatedMonthlySavings:float, estimatedPercentMonthlySavings:float}}, pillars:array<"cost_optimizing"|"performance"|"security"|"service_limits"|"fault_tolerance"|"operational_excellence">, resourcesAggregates:array{errorCount:int, okCount:int, warningCount:int}, source:"aws_config"|"compute_optimizer"|"cost_explorer"|"lse"|"manual"|"pse"|"rds"|"resilience"|"resilience_hub"|"security_hub"|"stir"|"ta_check"|"well_architected", status:"ok"|"warning"|"error", type:"standard"|"priority"}>}>
     */
    public function listOrganizationRecommendationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{exclusionStatus?:"excluded"|"included", maxResults?:int, nextToken?:string, recommendationIdentifier:string, regionCode?:string, status?:"ok"|"warning"|"error"} $args
     * @return \AWS\Result<array{nextToken?:string, recommendationResourceSummaries:array<array{arn:string, awsResourceId:string, exclusionStatus?:"excluded"|"included", id:string, lastUpdatedAt:int|string|\DateTimeInterface, metadata:array<string, string>, recommendationArn:string, regionCode:string, status:"ok"|"warning"|"error"}>}>
     */
    public function listRecommendationResources(array $args): \AWS\Result { }

    /**
     * @param array{exclusionStatus?:"excluded"|"included", maxResults?:int, nextToken?:string, recommendationIdentifier:string, regionCode?:string, status?:"ok"|"warning"|"error"} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, recommendationResourceSummaries:array<array{arn:string, awsResourceId:string, exclusionStatus?:"excluded"|"included", id:string, lastUpdatedAt:int|string|\DateTimeInterface, metadata:array<string, string>, recommendationArn:string, regionCode:string, status:"ok"|"warning"|"error"}>}>
     */
    public function listRecommendationResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{afterLastUpdatedAt?:int|string|\DateTimeInterface, awsService?:string, beforeLastUpdatedAt?:int|string|\DateTimeInterface, checkIdentifier?:string, maxResults?:int, nextToken?:string, pillar?:"cost_optimizing"|"performance"|"security"|"service_limits"|"fault_tolerance"|"operational_excellence", source?:"aws_config"|"compute_optimizer"|"cost_explorer"|"lse"|"manual"|"pse"|"rds"|"resilience"|"resilience_hub"|"security_hub"|"stir"|"ta_check"|"well_architected", status?:"ok"|"warning"|"error", type?:"standard"|"priority"} $args
     * @return \AWS\Result<array{nextToken?:string, recommendationSummaries:array<array{arn:string, awsServices?:array<string>, checkArn?:string, createdAt?:int|string|\DateTimeInterface, id:string, lastUpdatedAt?:int|string|\DateTimeInterface, lifecycleStage?:"in_progress"|"pending_response"|"dismissed"|"resolved", name:string, pillarSpecificAggregates?:array{costOptimizing?:array{estimatedMonthlySavings:float, estimatedPercentMonthlySavings:float}}, pillars:array<"cost_optimizing"|"performance"|"security"|"service_limits"|"fault_tolerance"|"operational_excellence">, resourcesAggregates:array{errorCount:int, okCount:int, warningCount:int}, source:"aws_config"|"compute_optimizer"|"cost_explorer"|"lse"|"manual"|"pse"|"rds"|"resilience"|"resilience_hub"|"security_hub"|"stir"|"ta_check"|"well_architected", status:"ok"|"warning"|"error", type:"standard"|"priority"}>}>
     */
    public function listRecommendations(array $args = []): \AWS\Result { }

    /**
     * @param array{afterLastUpdatedAt?:int|string|\DateTimeInterface, awsService?:string, beforeLastUpdatedAt?:int|string|\DateTimeInterface, checkIdentifier?:string, maxResults?:int, nextToken?:string, pillar?:"cost_optimizing"|"performance"|"security"|"service_limits"|"fault_tolerance"|"operational_excellence", source?:"aws_config"|"compute_optimizer"|"cost_explorer"|"lse"|"manual"|"pse"|"rds"|"resilience"|"resilience_hub"|"security_hub"|"stir"|"ta_check"|"well_architected", status?:"ok"|"warning"|"error", type?:"standard"|"priority"} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, recommendationSummaries:array<array{arn:string, awsServices?:array<string>, checkArn?:string, createdAt?:int|string|\DateTimeInterface, id:string, lastUpdatedAt?:int|string|\DateTimeInterface, lifecycleStage?:"in_progress"|"pending_response"|"dismissed"|"resolved", name:string, pillarSpecificAggregates?:array{costOptimizing?:array{estimatedMonthlySavings:float, estimatedPercentMonthlySavings:float}}, pillars:array<"cost_optimizing"|"performance"|"security"|"service_limits"|"fault_tolerance"|"operational_excellence">, resourcesAggregates:array{errorCount:int, okCount:int, warningCount:int}, source:"aws_config"|"compute_optimizer"|"cost_explorer"|"lse"|"manual"|"pse"|"rds"|"resilience"|"resilience_hub"|"security_hub"|"stir"|"ta_check"|"well_architected", status:"ok"|"warning"|"error", type:"standard"|"priority"}>}>
     */
    public function listRecommendationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{lifecycleStage:"pending_response"|"in_progress"|"dismissed"|"resolved", organizationRecommendationIdentifier:string, updateReason?:string, updateReasonCode?:"non_critical_account"|"temporary_account"|"valid_business_case"|"other_methods_available"|"low_priority"|"not_applicable"|"other"} $args
     * @return \AWS\Result<void>
     */
    public function updateOrganizationRecommendationLifecycle(array $args): \AWS\Result { }

    /**
     * @param array{lifecycleStage:"pending_response"|"in_progress"|"dismissed"|"resolved", organizationRecommendationIdentifier:string, updateReason?:string, updateReasonCode?:"non_critical_account"|"temporary_account"|"valid_business_case"|"other_methods_available"|"low_priority"|"not_applicable"|"other"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateOrganizationRecommendationLifecycleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{lifecycleStage:"pending_response"|"in_progress"|"dismissed"|"resolved", recommendationIdentifier:string, updateReason?:string, updateReasonCode?:"non_critical_account"|"temporary_account"|"valid_business_case"|"other_methods_available"|"low_priority"|"not_applicable"|"other"} $args
     * @return \AWS\Result<void>
     */
    public function updateRecommendationLifecycle(array $args): \AWS\Result { }

    /**
     * @param array{lifecycleStage:"pending_response"|"in_progress"|"dismissed"|"resolved", recommendationIdentifier:string, updateReason?:string, updateReasonCode?:"non_critical_account"|"temporary_account"|"valid_business_case"|"other_methods_available"|"low_priority"|"not_applicable"|"other"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateRecommendationLifecycleAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
