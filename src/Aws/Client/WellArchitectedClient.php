<?php
namespace AWS\WellArchitected;

class WellArchitectedClient
{
    /**
     * @param array{WorkloadId:string, LensAliases:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function associateLenses(array $args): \AWS\Result { }

    /**
     * @param array{WorkloadId:string, LensAliases:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function associateLensesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkloadId:string, ProfileArns:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function associateProfiles(array $args): \AWS\Result { }

    /**
     * @param array{WorkloadId:string, ProfileArns:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function associateProfilesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LensAlias:string, SharedWith:string, ClientRequestToken:string} $args
     * @return \AWS\Result<array{ShareId?:string}>
     */
    public function createLensShare(array $args): \AWS\Result { }

    /**
     * @param array{LensAlias:string, SharedWith:string, ClientRequestToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ShareId?:string}>
     */
    public function createLensShareAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LensAlias:string, LensVersion:string, IsMajorVersion?:bool, ClientRequestToken:string} $args
     * @return \AWS\Result<array{LensArn?:string, LensVersion?:string}>
     */
    public function createLensVersion(array $args): \AWS\Result { }

    /**
     * @param array{LensAlias:string, LensVersion:string, IsMajorVersion?:bool, ClientRequestToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LensArn?:string, LensVersion?:string}>
     */
    public function createLensVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkloadId:string, MilestoneName:string, ClientRequestToken:string} $args
     * @return \AWS\Result<array{WorkloadId?:string, MilestoneNumber?:int}>
     */
    public function createMilestone(array $args): \AWS\Result { }

    /**
     * @param array{WorkloadId:string, MilestoneName:string, ClientRequestToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WorkloadId?:string, MilestoneNumber?:int}>
     */
    public function createMilestoneAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProfileName:string, ProfileDescription:string, ProfileQuestions:array<array{QuestionId?:string, SelectedChoiceIds?:array<string>}>, ClientRequestToken:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{ProfileArn?:string, ProfileVersion?:string}>
     */
    public function createProfile(array $args): \AWS\Result { }

    /**
     * @param array{ProfileName:string, ProfileDescription:string, ProfileQuestions:array<array{QuestionId?:string, SelectedChoiceIds?:array<string>}>, ClientRequestToken:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProfileArn?:string, ProfileVersion?:string}>
     */
    public function createProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProfileArn:string, SharedWith:string, ClientRequestToken:string} $args
     * @return \AWS\Result<array{ShareId?:string, ProfileArn?:string}>
     */
    public function createProfileShare(array $args): \AWS\Result { }

    /**
     * @param array{ProfileArn:string, SharedWith:string, ClientRequestToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ShareId?:string, ProfileArn?:string}>
     */
    public function createProfileShareAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TemplateName:string, Description:string, Lenses:array<string>, Notes?:string, Tags?:array<string, string>, ClientRequestToken:string} $args
     * @return \AWS\Result<array{TemplateArn?:string}>
     */
    public function createReviewTemplate(array $args): \AWS\Result { }

    /**
     * @param array{TemplateName:string, Description:string, Lenses:array<string>, Notes?:string, Tags?:array<string, string>, ClientRequestToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TemplateArn?:string}>
     */
    public function createReviewTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TemplateArn:string, SharedWith:string, ClientRequestToken:string} $args
     * @return \AWS\Result<array{TemplateArn?:string, ShareId?:string}>
     */
    public function createTemplateShare(array $args): \AWS\Result { }

    /**
     * @param array{TemplateArn:string, SharedWith:string, ClientRequestToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TemplateArn?:string, ShareId?:string}>
     */
    public function createTemplateShareAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkloadName:string, Description:string, Environment:"PRODUCTION"|"PREPRODUCTION", AccountIds?:array<string>, AwsRegions?:array<string>, NonAwsRegions?:array<string>, PillarPriorities?:array<string>, ArchitecturalDesign?:string, ReviewOwner?:string, IndustryType?:string, Industry?:string, Lenses:array<string>, Notes?:string, ClientRequestToken:string, Tags?:array<string, string>, DiscoveryConfig?:array{TrustedAdvisorIntegrationStatus?:"ENABLED"|"DISABLED", WorkloadResourceDefinition?:array<"WORKLOAD_METADATA"|"APP_REGISTRY">}, Applications?:array<string>, ProfileArns?:array<string>, ReviewTemplateArns?:array<string>, JiraConfiguration?:array{IssueManagementStatus?:"ENABLED"|"DISABLED"|"INHERIT", IssueManagementType?:"AUTO"|"MANUAL", JiraProjectKey?:string}} $args
     * @return \AWS\Result<array{WorkloadId?:string, WorkloadArn?:string}>
     */
    public function createWorkload(array $args): \AWS\Result { }

    /**
     * @param array{WorkloadName:string, Description:string, Environment:"PRODUCTION"|"PREPRODUCTION", AccountIds?:array<string>, AwsRegions?:array<string>, NonAwsRegions?:array<string>, PillarPriorities?:array<string>, ArchitecturalDesign?:string, ReviewOwner?:string, IndustryType?:string, Industry?:string, Lenses:array<string>, Notes?:string, ClientRequestToken:string, Tags?:array<string, string>, DiscoveryConfig?:array{TrustedAdvisorIntegrationStatus?:"ENABLED"|"DISABLED", WorkloadResourceDefinition?:array<"WORKLOAD_METADATA"|"APP_REGISTRY">}, Applications?:array<string>, ProfileArns?:array<string>, ReviewTemplateArns?:array<string>, JiraConfiguration?:array{IssueManagementStatus?:"ENABLED"|"DISABLED"|"INHERIT", IssueManagementType?:"AUTO"|"MANUAL", JiraProjectKey?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{WorkloadId?:string, WorkloadArn?:string}>
     */
    public function createWorkloadAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkloadId:string, SharedWith:string, PermissionType:"READONLY"|"CONTRIBUTOR", ClientRequestToken:string} $args
     * @return \AWS\Result<array{WorkloadId?:string, ShareId?:string}>
     */
    public function createWorkloadShare(array $args): \AWS\Result { }

    /**
     * @param array{WorkloadId:string, SharedWith:string, PermissionType:"READONLY"|"CONTRIBUTOR", ClientRequestToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WorkloadId?:string, ShareId?:string}>
     */
    public function createWorkloadShareAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LensAlias:string, ClientRequestToken:string, LensStatus:"ALL"|"DRAFT"|"PUBLISHED"} $args
     * @return \AWS\Result<void>
     */
    public function deleteLens(array $args): \AWS\Result { }

    /**
     * @param array{LensAlias:string, ClientRequestToken:string, LensStatus:"ALL"|"DRAFT"|"PUBLISHED"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteLensAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ShareId:string, LensAlias:string, ClientRequestToken:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteLensShare(array $args): \AWS\Result { }

    /**
     * @param array{ShareId:string, LensAlias:string, ClientRequestToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteLensShareAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProfileArn:string, ClientRequestToken:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteProfile(array $args): \AWS\Result { }

    /**
     * @param array{ProfileArn:string, ClientRequestToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ShareId:string, ProfileArn:string, ClientRequestToken:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteProfileShare(array $args): \AWS\Result { }

    /**
     * @param array{ShareId:string, ProfileArn:string, ClientRequestToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteProfileShareAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TemplateArn:string, ClientRequestToken:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteReviewTemplate(array $args): \AWS\Result { }

    /**
     * @param array{TemplateArn:string, ClientRequestToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteReviewTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ShareId:string, TemplateArn:string, ClientRequestToken:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteTemplateShare(array $args): \AWS\Result { }

    /**
     * @param array{ShareId:string, TemplateArn:string, ClientRequestToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteTemplateShareAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkloadId:string, ClientRequestToken:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteWorkload(array $args): \AWS\Result { }

    /**
     * @param array{WorkloadId:string, ClientRequestToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteWorkloadAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ShareId:string, WorkloadId:string, ClientRequestToken:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteWorkloadShare(array $args): \AWS\Result { }

    /**
     * @param array{ShareId:string, WorkloadId:string, ClientRequestToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteWorkloadShareAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkloadId:string, LensAliases:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function disassociateLenses(array $args): \AWS\Result { }

    /**
     * @param array{WorkloadId:string, LensAliases:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disassociateLensesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkloadId:string, ProfileArns:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function disassociateProfiles(array $args): \AWS\Result { }

    /**
     * @param array{WorkloadId:string, ProfileArns:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disassociateProfilesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LensAlias:string, LensVersion?:string} $args
     * @return \AWS\Result<array{LensJSON?:string}>
     */
    public function exportLens(array $args): \AWS\Result { }

    /**
     * @param array{LensAlias:string, LensVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LensJSON?:string}>
     */
    public function exportLensAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkloadId:string, LensAlias:string, QuestionId:string, MilestoneNumber?:int} $args
     * @return \AWS\Result<array{WorkloadId?:string, MilestoneNumber?:int, LensAlias?:string, LensArn?:string, Answer?:array{QuestionId?:string, PillarId?:string, QuestionTitle?:string, QuestionDescription?:string, ImprovementPlanUrl?:string, HelpfulResourceUrl?:string, HelpfulResourceDisplayText?:string, Choices?:array<array{ChoiceId?:string, Title?:string, Description?:string, HelpfulResource?:array{DisplayText?:string, Url?:string}, ImprovementPlan?:array{DisplayText?:string, Url?:string}, AdditionalResources?:array<array{Type?:"HELPFUL_RESOURCE"|"IMPROVEMENT_PLAN", Content?:array<array{DisplayText?:string, Url?:string}>}>}>, SelectedChoices?:array<string>, ChoiceAnswers?:array<array{ChoiceId?:string, Status?:"SELECTED"|"NOT_APPLICABLE"|"UNSELECTED", Reason?:"OUT_OF_SCOPE"|"BUSINESS_PRIORITIES"|"ARCHITECTURE_CONSTRAINTS"|"OTHER"|"NONE", Notes?:string}>, IsApplicable?:bool, Risk?:"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", Notes?:string, Reason?:"OUT_OF_SCOPE"|"BUSINESS_PRIORITIES"|"ARCHITECTURE_CONSTRAINTS"|"OTHER"|"NONE", JiraConfiguration?:array{JiraIssueUrl?:string, LastSyncedTime?:int|string|\DateTimeInterface}}}>
     */
    public function getAnswer(array $args): \AWS\Result { }

    /**
     * @param array{WorkloadId:string, LensAlias:string, QuestionId:string, MilestoneNumber?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{WorkloadId?:string, MilestoneNumber?:int, LensAlias?:string, LensArn?:string, Answer?:array{QuestionId?:string, PillarId?:string, QuestionTitle?:string, QuestionDescription?:string, ImprovementPlanUrl?:string, HelpfulResourceUrl?:string, HelpfulResourceDisplayText?:string, Choices?:array<array{ChoiceId?:string, Title?:string, Description?:string, HelpfulResource?:array{DisplayText?:string, Url?:string}, ImprovementPlan?:array{DisplayText?:string, Url?:string}, AdditionalResources?:array<array{Type?:"HELPFUL_RESOURCE"|"IMPROVEMENT_PLAN", Content?:array<array{DisplayText?:string, Url?:string}>}>}>, SelectedChoices?:array<string>, ChoiceAnswers?:array<array{ChoiceId?:string, Status?:"SELECTED"|"NOT_APPLICABLE"|"UNSELECTED", Reason?:"OUT_OF_SCOPE"|"BUSINESS_PRIORITIES"|"ARCHITECTURE_CONSTRAINTS"|"OTHER"|"NONE", Notes?:string}>, IsApplicable?:bool, Risk?:"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", Notes?:string, Reason?:"OUT_OF_SCOPE"|"BUSINESS_PRIORITIES"|"ARCHITECTURE_CONSTRAINTS"|"OTHER"|"NONE", JiraConfiguration?:array{JiraIssueUrl?:string, LastSyncedTime?:int|string|\DateTimeInterface}}}>
     */
    public function getAnswerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Format:"PDF"|"JSON", IncludeSharedResources?:bool, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Metrics?:array<array{MetricType?:"WORKLOAD", RiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>, WorkloadId?:string, WorkloadName?:string, WorkloadArn?:string, UpdatedAt?:int|string|\DateTimeInterface, Lenses?:array<array{LensArn?:string, Pillars?:array<array{PillarId?:string, RiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>, Questions?:array<array{QuestionId?:string, Risk?:"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", BestPractices?:array<array{ChoiceId?:string, ChoiceTitle?:string}>}>}>, RiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>}>, LensesAppliedCount?:int}>, NextToken?:string, Base64String?:string}>
     */
    public function getConsolidatedReport(array $args): \AWS\Result { }

    /**
     * @param array{Format:"PDF"|"JSON", IncludeSharedResources?:bool, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Metrics?:array<array{MetricType?:"WORKLOAD", RiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>, WorkloadId?:string, WorkloadName?:string, WorkloadArn?:string, UpdatedAt?:int|string|\DateTimeInterface, Lenses?:array<array{LensArn?:string, Pillars?:array<array{PillarId?:string, RiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>, Questions?:array<array{QuestionId?:string, Risk?:"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", BestPractices?:array<array{ChoiceId?:string, ChoiceTitle?:string}>}>}>, RiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>}>, LensesAppliedCount?:int}>, NextToken?:string, Base64String?:string}>
     */
    public function getConsolidatedReportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{OrganizationSharingStatus?:"ENABLED"|"DISABLED", DiscoveryIntegrationStatus?:"ENABLED"|"DISABLED", JiraConfiguration?:array{IntegrationStatus?:"CONFIGURED"|"NOT_CONFIGURED", IssueManagementStatus?:"ENABLED"|"DISABLED", IssueManagementType?:"AUTO"|"MANUAL", Subdomain?:string, JiraProjectKey?:string, StatusMessage?:string}}>
     */
    public function getGlobalSettings(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{OrganizationSharingStatus?:"ENABLED"|"DISABLED", DiscoveryIntegrationStatus?:"ENABLED"|"DISABLED", JiraConfiguration?:array{IntegrationStatus?:"CONFIGURED"|"NOT_CONFIGURED", IssueManagementStatus?:"ENABLED"|"DISABLED", IssueManagementType?:"AUTO"|"MANUAL", Subdomain?:string, JiraProjectKey?:string, StatusMessage?:string}}>
     */
    public function getGlobalSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LensAlias:string, LensVersion?:string} $args
     * @return \AWS\Result<array{Lens?:array{LensArn?:string, LensVersion?:string, Name?:string, Description?:string, Owner?:string, ShareInvitationId?:string, Tags?:array<string, string>}}>
     */
    public function getLens(array $args): \AWS\Result { }

    /**
     * @param array{LensAlias:string, LensVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Lens?:array{LensArn?:string, LensVersion?:string, Name?:string, Description?:string, Owner?:string, ShareInvitationId?:string, Tags?:array<string, string>}}>
     */
    public function getLensAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkloadId:string, LensAlias:string, MilestoneNumber?:int} $args
     * @return \AWS\Result<array{WorkloadId?:string, MilestoneNumber?:int, LensReview?:array{LensAlias?:string, LensArn?:string, LensVersion?:string, LensName?:string, LensStatus?:"CURRENT"|"NOT_CURRENT"|"DEPRECATED"|"DELETED"|"UNSHARED", PillarReviewSummaries?:array<array{PillarId?:string, PillarName?:string, Notes?:string, RiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>, PrioritizedRiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>}>, JiraConfiguration?:array{SelectedPillars?:array<array{PillarId?:string, SelectedQuestionIds?:array<string>}>}, UpdatedAt?:int|string|\DateTimeInterface, Notes?:string, RiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>, NextToken?:string, Profiles?:array<array{ProfileArn?:string, ProfileVersion?:string}>, PrioritizedRiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>}}>
     */
    public function getLensReview(array $args): \AWS\Result { }

    /**
     * @param array{WorkloadId:string, LensAlias:string, MilestoneNumber?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{WorkloadId?:string, MilestoneNumber?:int, LensReview?:array{LensAlias?:string, LensArn?:string, LensVersion?:string, LensName?:string, LensStatus?:"CURRENT"|"NOT_CURRENT"|"DEPRECATED"|"DELETED"|"UNSHARED", PillarReviewSummaries?:array<array{PillarId?:string, PillarName?:string, Notes?:string, RiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>, PrioritizedRiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>}>, JiraConfiguration?:array{SelectedPillars?:array<array{PillarId?:string, SelectedQuestionIds?:array<string>}>}, UpdatedAt?:int|string|\DateTimeInterface, Notes?:string, RiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>, NextToken?:string, Profiles?:array<array{ProfileArn?:string, ProfileVersion?:string}>, PrioritizedRiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>}}>
     */
    public function getLensReviewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkloadId:string, LensAlias:string, MilestoneNumber?:int} $args
     * @return \AWS\Result<array{WorkloadId?:string, MilestoneNumber?:int, LensReviewReport?:array{LensAlias?:string, LensArn?:string, Base64String?:string}}>
     */
    public function getLensReviewReport(array $args): \AWS\Result { }

    /**
     * @param array{WorkloadId:string, LensAlias:string, MilestoneNumber?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{WorkloadId?:string, MilestoneNumber?:int, LensReviewReport?:array{LensAlias?:string, LensArn?:string, Base64String?:string}}>
     */
    public function getLensReviewReportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LensAlias:string, BaseLensVersion?:string, TargetLensVersion?:string} $args
     * @return \AWS\Result<array{LensAlias?:string, LensArn?:string, BaseLensVersion?:string, TargetLensVersion?:string, LatestLensVersion?:string, VersionDifferences?:array{PillarDifferences?:array<array{PillarId?:string, PillarName?:string, DifferenceStatus?:"UPDATED"|"NEW"|"DELETED", QuestionDifferences?:array<array{QuestionId?:string, QuestionTitle?:string, DifferenceStatus?:"UPDATED"|"NEW"|"DELETED"}>}>}}>
     */
    public function getLensVersionDifference(array $args): \AWS\Result { }

    /**
     * @param array{LensAlias:string, BaseLensVersion?:string, TargetLensVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LensAlias?:string, LensArn?:string, BaseLensVersion?:string, TargetLensVersion?:string, LatestLensVersion?:string, VersionDifferences?:array{PillarDifferences?:array<array{PillarId?:string, PillarName?:string, DifferenceStatus?:"UPDATED"|"NEW"|"DELETED", QuestionDifferences?:array<array{QuestionId?:string, QuestionTitle?:string, DifferenceStatus?:"UPDATED"|"NEW"|"DELETED"}>}>}}>
     */
    public function getLensVersionDifferenceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkloadId:string, MilestoneNumber:int} $args
     * @return \AWS\Result<array{WorkloadId?:string, Milestone?:array{MilestoneNumber?:int, MilestoneName?:string, RecordedAt?:int|string|\DateTimeInterface, Workload?:array{WorkloadId?:string, WorkloadArn?:string, WorkloadName?:string, Description?:string, Environment?:"PRODUCTION"|"PREPRODUCTION", UpdatedAt?:int|string|\DateTimeInterface, AccountIds?:array<string>, AwsRegions?:array<string>, NonAwsRegions?:array<string>, ArchitecturalDesign?:string, ReviewOwner?:string, ReviewRestrictionDate?:int|string|\DateTimeInterface, IsReviewOwnerUpdateAcknowledged?:bool, IndustryType?:string, Industry?:string, Notes?:string, ImprovementStatus?:"NOT_APPLICABLE"|"NOT_STARTED"|"IN_PROGRESS"|"COMPLETE"|"RISK_ACKNOWLEDGED", RiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>, PillarPriorities?:array<string>, Lenses?:array<string>, Owner?:string, ShareInvitationId?:string, Tags?:array<string, string>, DiscoveryConfig?:array{TrustedAdvisorIntegrationStatus?:"ENABLED"|"DISABLED", WorkloadResourceDefinition?:array<"WORKLOAD_METADATA"|"APP_REGISTRY">}, Applications?:array<string>, Profiles?:array<array{ProfileArn?:string, ProfileVersion?:string}>, PrioritizedRiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>, JiraConfiguration?:array{IssueManagementStatus?:"ENABLED"|"DISABLED"|"INHERIT", IssueManagementType?:"AUTO"|"MANUAL", JiraProjectKey?:string, StatusMessage?:string}}}}>
     */
    public function getMilestone(array $args): \AWS\Result { }

    /**
     * @param array{WorkloadId:string, MilestoneNumber:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{WorkloadId?:string, Milestone?:array{MilestoneNumber?:int, MilestoneName?:string, RecordedAt?:int|string|\DateTimeInterface, Workload?:array{WorkloadId?:string, WorkloadArn?:string, WorkloadName?:string, Description?:string, Environment?:"PRODUCTION"|"PREPRODUCTION", UpdatedAt?:int|string|\DateTimeInterface, AccountIds?:array<string>, AwsRegions?:array<string>, NonAwsRegions?:array<string>, ArchitecturalDesign?:string, ReviewOwner?:string, ReviewRestrictionDate?:int|string|\DateTimeInterface, IsReviewOwnerUpdateAcknowledged?:bool, IndustryType?:string, Industry?:string, Notes?:string, ImprovementStatus?:"NOT_APPLICABLE"|"NOT_STARTED"|"IN_PROGRESS"|"COMPLETE"|"RISK_ACKNOWLEDGED", RiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>, PillarPriorities?:array<string>, Lenses?:array<string>, Owner?:string, ShareInvitationId?:string, Tags?:array<string, string>, DiscoveryConfig?:array{TrustedAdvisorIntegrationStatus?:"ENABLED"|"DISABLED", WorkloadResourceDefinition?:array<"WORKLOAD_METADATA"|"APP_REGISTRY">}, Applications?:array<string>, Profiles?:array<array{ProfileArn?:string, ProfileVersion?:string}>, PrioritizedRiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>, JiraConfiguration?:array{IssueManagementStatus?:"ENABLED"|"DISABLED"|"INHERIT", IssueManagementType?:"AUTO"|"MANUAL", JiraProjectKey?:string, StatusMessage?:string}}}}>
     */
    public function getMilestoneAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProfileArn:string, ProfileVersion?:string} $args
     * @return \AWS\Result<array{Profile?:array{ProfileArn?:string, ProfileVersion?:string, ProfileName?:string, ProfileDescription?:string, ProfileQuestions?:array<array{QuestionId?:string, QuestionTitle?:string, QuestionDescription?:string, QuestionChoices?:array<array{ChoiceId?:string, ChoiceTitle?:string, ChoiceDescription?:string}>, SelectedChoiceIds?:array<string>, MinSelectedChoices?:int, MaxSelectedChoices?:int}>, Owner?:string, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, ShareInvitationId?:string, Tags?:array<string, string>}}>
     */
    public function getProfile(array $args): \AWS\Result { }

    /**
     * @param array{ProfileArn:string, ProfileVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Profile?:array{ProfileArn?:string, ProfileVersion?:string, ProfileName?:string, ProfileDescription?:string, ProfileQuestions?:array<array{QuestionId?:string, QuestionTitle?:string, QuestionDescription?:string, QuestionChoices?:array<array{ChoiceId?:string, ChoiceTitle?:string, ChoiceDescription?:string}>, SelectedChoiceIds?:array<string>, MinSelectedChoices?:int, MaxSelectedChoices?:int}>, Owner?:string, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, ShareInvitationId?:string, Tags?:array<string, string>}}>
     */
    public function getProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{ProfileTemplate?:array{TemplateName?:string, TemplateQuestions?:array<array{QuestionId?:string, QuestionTitle?:string, QuestionDescription?:string, QuestionChoices?:array<array{ChoiceId?:string, ChoiceTitle?:string, ChoiceDescription?:string}>, MinSelectedChoices?:int, MaxSelectedChoices?:int}>, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface}}>
     */
    public function getProfileTemplate(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProfileTemplate?:array{TemplateName?:string, TemplateQuestions?:array<array{QuestionId?:string, QuestionTitle?:string, QuestionDescription?:string, QuestionChoices?:array<array{ChoiceId?:string, ChoiceTitle?:string, ChoiceDescription?:string}>, MinSelectedChoices?:int, MaxSelectedChoices?:int}>, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface}}>
     */
    public function getProfileTemplateAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TemplateArn:string} $args
     * @return \AWS\Result<array{ReviewTemplate?:array{Description?:string, Lenses?:array<string>, Notes?:string, QuestionCounts?:array<"UNANSWERED"|"ANSWERED", int>, Owner?:string, UpdatedAt?:int|string|\DateTimeInterface, TemplateArn?:string, TemplateName?:string, Tags?:array<string, string>, UpdateStatus?:"CURRENT"|"LENS_NOT_CURRENT", ShareInvitationId?:string}}>
     */
    public function getReviewTemplate(array $args): \AWS\Result { }

    /**
     * @param array{TemplateArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReviewTemplate?:array{Description?:string, Lenses?:array<string>, Notes?:string, QuestionCounts?:array<"UNANSWERED"|"ANSWERED", int>, Owner?:string, UpdatedAt?:int|string|\DateTimeInterface, TemplateArn?:string, TemplateName?:string, Tags?:array<string, string>, UpdateStatus?:"CURRENT"|"LENS_NOT_CURRENT", ShareInvitationId?:string}}>
     */
    public function getReviewTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TemplateArn:string, LensAlias:string, QuestionId:string} $args
     * @return \AWS\Result<array{TemplateArn?:string, LensAlias?:string, Answer?:array{QuestionId?:string, PillarId?:string, QuestionTitle?:string, QuestionDescription?:string, ImprovementPlanUrl?:string, HelpfulResourceUrl?:string, HelpfulResourceDisplayText?:string, Choices?:array<array{ChoiceId?:string, Title?:string, Description?:string, HelpfulResource?:array{DisplayText?:string, Url?:string}, ImprovementPlan?:array{DisplayText?:string, Url?:string}, AdditionalResources?:array<array{Type?:"HELPFUL_RESOURCE"|"IMPROVEMENT_PLAN", Content?:array<array{DisplayText?:string, Url?:string}>}>}>, SelectedChoices?:array<string>, ChoiceAnswers?:array<array{ChoiceId?:string, Status?:"SELECTED"|"NOT_APPLICABLE"|"UNSELECTED", Reason?:"OUT_OF_SCOPE"|"BUSINESS_PRIORITIES"|"ARCHITECTURE_CONSTRAINTS"|"OTHER"|"NONE", Notes?:string}>, IsApplicable?:bool, AnswerStatus?:"UNANSWERED"|"ANSWERED", Notes?:string, Reason?:"OUT_OF_SCOPE"|"BUSINESS_PRIORITIES"|"ARCHITECTURE_CONSTRAINTS"|"OTHER"|"NONE"}}>
     */
    public function getReviewTemplateAnswer(array $args): \AWS\Result { }

    /**
     * @param array{TemplateArn:string, LensAlias:string, QuestionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TemplateArn?:string, LensAlias?:string, Answer?:array{QuestionId?:string, PillarId?:string, QuestionTitle?:string, QuestionDescription?:string, ImprovementPlanUrl?:string, HelpfulResourceUrl?:string, HelpfulResourceDisplayText?:string, Choices?:array<array{ChoiceId?:string, Title?:string, Description?:string, HelpfulResource?:array{DisplayText?:string, Url?:string}, ImprovementPlan?:array{DisplayText?:string, Url?:string}, AdditionalResources?:array<array{Type?:"HELPFUL_RESOURCE"|"IMPROVEMENT_PLAN", Content?:array<array{DisplayText?:string, Url?:string}>}>}>, SelectedChoices?:array<string>, ChoiceAnswers?:array<array{ChoiceId?:string, Status?:"SELECTED"|"NOT_APPLICABLE"|"UNSELECTED", Reason?:"OUT_OF_SCOPE"|"BUSINESS_PRIORITIES"|"ARCHITECTURE_CONSTRAINTS"|"OTHER"|"NONE", Notes?:string}>, IsApplicable?:bool, AnswerStatus?:"UNANSWERED"|"ANSWERED", Notes?:string, Reason?:"OUT_OF_SCOPE"|"BUSINESS_PRIORITIES"|"ARCHITECTURE_CONSTRAINTS"|"OTHER"|"NONE"}}>
     */
    public function getReviewTemplateAnswerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TemplateArn:string, LensAlias:string} $args
     * @return \AWS\Result<array{TemplateArn?:string, LensReview?:array{LensAlias?:string, LensArn?:string, LensVersion?:string, LensName?:string, LensStatus?:"CURRENT"|"NOT_CURRENT"|"DEPRECATED"|"DELETED"|"UNSHARED", PillarReviewSummaries?:array<array{PillarId?:string, PillarName?:string, Notes?:string, QuestionCounts?:array<"UNANSWERED"|"ANSWERED", int>}>, UpdatedAt?:int|string|\DateTimeInterface, Notes?:string, QuestionCounts?:array<"UNANSWERED"|"ANSWERED", int>, NextToken?:string}}>
     */
    public function getReviewTemplateLensReview(array $args): \AWS\Result { }

    /**
     * @param array{TemplateArn:string, LensAlias:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TemplateArn?:string, LensReview?:array{LensAlias?:string, LensArn?:string, LensVersion?:string, LensName?:string, LensStatus?:"CURRENT"|"NOT_CURRENT"|"DEPRECATED"|"DELETED"|"UNSHARED", PillarReviewSummaries?:array<array{PillarId?:string, PillarName?:string, Notes?:string, QuestionCounts?:array<"UNANSWERED"|"ANSWERED", int>}>, UpdatedAt?:int|string|\DateTimeInterface, Notes?:string, QuestionCounts?:array<"UNANSWERED"|"ANSWERED", int>, NextToken?:string}}>
     */
    public function getReviewTemplateLensReviewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkloadId:string} $args
     * @return \AWS\Result<array{Workload?:array{WorkloadId?:string, WorkloadArn?:string, WorkloadName?:string, Description?:string, Environment?:"PRODUCTION"|"PREPRODUCTION", UpdatedAt?:int|string|\DateTimeInterface, AccountIds?:array<string>, AwsRegions?:array<string>, NonAwsRegions?:array<string>, ArchitecturalDesign?:string, ReviewOwner?:string, ReviewRestrictionDate?:int|string|\DateTimeInterface, IsReviewOwnerUpdateAcknowledged?:bool, IndustryType?:string, Industry?:string, Notes?:string, ImprovementStatus?:"NOT_APPLICABLE"|"NOT_STARTED"|"IN_PROGRESS"|"COMPLETE"|"RISK_ACKNOWLEDGED", RiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>, PillarPriorities?:array<string>, Lenses?:array<string>, Owner?:string, ShareInvitationId?:string, Tags?:array<string, string>, DiscoveryConfig?:array{TrustedAdvisorIntegrationStatus?:"ENABLED"|"DISABLED", WorkloadResourceDefinition?:array<"WORKLOAD_METADATA"|"APP_REGISTRY">}, Applications?:array<string>, Profiles?:array<array{ProfileArn?:string, ProfileVersion?:string}>, PrioritizedRiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>, JiraConfiguration?:array{IssueManagementStatus?:"ENABLED"|"DISABLED"|"INHERIT", IssueManagementType?:"AUTO"|"MANUAL", JiraProjectKey?:string, StatusMessage?:string}}}>
     */
    public function getWorkload(array $args): \AWS\Result { }

    /**
     * @param array{WorkloadId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Workload?:array{WorkloadId?:string, WorkloadArn?:string, WorkloadName?:string, Description?:string, Environment?:"PRODUCTION"|"PREPRODUCTION", UpdatedAt?:int|string|\DateTimeInterface, AccountIds?:array<string>, AwsRegions?:array<string>, NonAwsRegions?:array<string>, ArchitecturalDesign?:string, ReviewOwner?:string, ReviewRestrictionDate?:int|string|\DateTimeInterface, IsReviewOwnerUpdateAcknowledged?:bool, IndustryType?:string, Industry?:string, Notes?:string, ImprovementStatus?:"NOT_APPLICABLE"|"NOT_STARTED"|"IN_PROGRESS"|"COMPLETE"|"RISK_ACKNOWLEDGED", RiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>, PillarPriorities?:array<string>, Lenses?:array<string>, Owner?:string, ShareInvitationId?:string, Tags?:array<string, string>, DiscoveryConfig?:array{TrustedAdvisorIntegrationStatus?:"ENABLED"|"DISABLED", WorkloadResourceDefinition?:array<"WORKLOAD_METADATA"|"APP_REGISTRY">}, Applications?:array<string>, Profiles?:array<array{ProfileArn?:string, ProfileVersion?:string}>, PrioritizedRiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>, JiraConfiguration?:array{IssueManagementStatus?:"ENABLED"|"DISABLED"|"INHERIT", IssueManagementType?:"AUTO"|"MANUAL", JiraProjectKey?:string, StatusMessage?:string}}}>
     */
    public function getWorkloadAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LensAlias?:string, JSONString:string, ClientRequestToken:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{LensArn?:string, Status?:"IN_PROGRESS"|"COMPLETE"|"ERROR"}>
     */
    public function importLens(array $args): \AWS\Result { }

    /**
     * @param array{LensAlias?:string, JSONString:string, ClientRequestToken:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{LensArn?:string, Status?:"IN_PROGRESS"|"COMPLETE"|"ERROR"}>
     */
    public function importLensAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkloadId:string, LensAlias:string, PillarId?:string, MilestoneNumber?:int, NextToken?:string, MaxResults?:int, QuestionPriority?:"PRIORITIZED"|"NONE"} $args
     * @return \AWS\Result<array{WorkloadId?:string, MilestoneNumber?:int, LensAlias?:string, LensArn?:string, AnswerSummaries?:array<array{QuestionId?:string, PillarId?:string, QuestionTitle?:string, Choices?:array<array{ChoiceId?:string, Title?:string, Description?:string, HelpfulResource?:array{DisplayText?:string, Url?:string}, ImprovementPlan?:array{DisplayText?:string, Url?:string}, AdditionalResources?:array<array{Type?:"HELPFUL_RESOURCE"|"IMPROVEMENT_PLAN", Content?:array<array{DisplayText?:string, Url?:string}>}>}>, SelectedChoices?:array<string>, ChoiceAnswerSummaries?:array<array{ChoiceId?:string, Status?:"SELECTED"|"NOT_APPLICABLE"|"UNSELECTED", Reason?:"OUT_OF_SCOPE"|"BUSINESS_PRIORITIES"|"ARCHITECTURE_CONSTRAINTS"|"OTHER"|"NONE"}>, IsApplicable?:bool, Risk?:"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", Reason?:"OUT_OF_SCOPE"|"BUSINESS_PRIORITIES"|"ARCHITECTURE_CONSTRAINTS"|"OTHER"|"NONE", QuestionType?:"PRIORITIZED"|"NON_PRIORITIZED", JiraConfiguration?:array{JiraIssueUrl?:string, LastSyncedTime?:int|string|\DateTimeInterface}}>, NextToken?:string}>
     */
    public function listAnswers(array $args): \AWS\Result { }

    /**
     * @param array{WorkloadId:string, LensAlias:string, PillarId?:string, MilestoneNumber?:int, NextToken?:string, MaxResults?:int, QuestionPriority?:"PRIORITIZED"|"NONE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{WorkloadId?:string, MilestoneNumber?:int, LensAlias?:string, LensArn?:string, AnswerSummaries?:array<array{QuestionId?:string, PillarId?:string, QuestionTitle?:string, Choices?:array<array{ChoiceId?:string, Title?:string, Description?:string, HelpfulResource?:array{DisplayText?:string, Url?:string}, ImprovementPlan?:array{DisplayText?:string, Url?:string}, AdditionalResources?:array<array{Type?:"HELPFUL_RESOURCE"|"IMPROVEMENT_PLAN", Content?:array<array{DisplayText?:string, Url?:string}>}>}>, SelectedChoices?:array<string>, ChoiceAnswerSummaries?:array<array{ChoiceId?:string, Status?:"SELECTED"|"NOT_APPLICABLE"|"UNSELECTED", Reason?:"OUT_OF_SCOPE"|"BUSINESS_PRIORITIES"|"ARCHITECTURE_CONSTRAINTS"|"OTHER"|"NONE"}>, IsApplicable?:bool, Risk?:"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", Reason?:"OUT_OF_SCOPE"|"BUSINESS_PRIORITIES"|"ARCHITECTURE_CONSTRAINTS"|"OTHER"|"NONE", QuestionType?:"PRIORITIZED"|"NON_PRIORITIZED", JiraConfiguration?:array{JiraIssueUrl?:string, LastSyncedTime?:int|string|\DateTimeInterface}}>, NextToken?:string}>
     */
    public function listAnswersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkloadId:string, NextToken?:string, MaxResults?:int, LensArn:string, PillarId:string, QuestionId:string, ChoiceId:string} $args
     * @return \AWS\Result<array{CheckDetails?:array<array{Id?:string, Name?:string, Description?:string, Provider?:"TRUSTED_ADVISOR", LensArn?:string, PillarId?:string, QuestionId?:string, ChoiceId?:string, Status?:"OKAY"|"WARNING"|"ERROR"|"NOT_AVAILABLE"|"FETCH_FAILED", AccountId?:string, FlaggedResources?:int, Reason?:"ASSUME_ROLE_ERROR"|"ACCESS_DENIED"|"UNKNOWN_ERROR"|"PREMIUM_SUPPORT_REQUIRED", UpdatedAt?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listCheckDetails(array $args): \AWS\Result { }

    /**
     * @param array{WorkloadId:string, NextToken?:string, MaxResults?:int, LensArn:string, PillarId:string, QuestionId:string, ChoiceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CheckDetails?:array<array{Id?:string, Name?:string, Description?:string, Provider?:"TRUSTED_ADVISOR", LensArn?:string, PillarId?:string, QuestionId?:string, ChoiceId?:string, Status?:"OKAY"|"WARNING"|"ERROR"|"NOT_AVAILABLE"|"FETCH_FAILED", AccountId?:string, FlaggedResources?:int, Reason?:"ASSUME_ROLE_ERROR"|"ACCESS_DENIED"|"UNKNOWN_ERROR"|"PREMIUM_SUPPORT_REQUIRED", UpdatedAt?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listCheckDetailsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkloadId:string, NextToken?:string, MaxResults?:int, LensArn:string, PillarId:string, QuestionId:string, ChoiceId:string} $args
     * @return \AWS\Result<array{CheckSummaries?:array<array{Id?:string, Name?:string, Provider?:"TRUSTED_ADVISOR", Description?:string, UpdatedAt?:int|string|\DateTimeInterface, LensArn?:string, PillarId?:string, QuestionId?:string, ChoiceId?:string, Status?:"OKAY"|"WARNING"|"ERROR"|"NOT_AVAILABLE"|"FETCH_FAILED", AccountSummary?:array<"OKAY"|"WARNING"|"ERROR"|"NOT_AVAILABLE"|"FETCH_FAILED", int>}>, NextToken?:string}>
     */
    public function listCheckSummaries(array $args): \AWS\Result { }

    /**
     * @param array{WorkloadId:string, NextToken?:string, MaxResults?:int, LensArn:string, PillarId:string, QuestionId:string, ChoiceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CheckSummaries?:array<array{Id?:string, Name?:string, Provider?:"TRUSTED_ADVISOR", Description?:string, UpdatedAt?:int|string|\DateTimeInterface, LensArn?:string, PillarId?:string, QuestionId?:string, ChoiceId?:string, Status?:"OKAY"|"WARNING"|"ERROR"|"NOT_AVAILABLE"|"FETCH_FAILED", AccountSummary?:array<"OKAY"|"WARNING"|"ERROR"|"NOT_AVAILABLE"|"FETCH_FAILED", int>}>, NextToken?:string}>
     */
    public function listCheckSummariesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkloadId:string, LensAlias:string, PillarId?:string, MilestoneNumber?:int, NextToken?:string, MaxResults?:int, QuestionPriority?:"PRIORITIZED"|"NONE"} $args
     * @return \AWS\Result<array{WorkloadId?:string, MilestoneNumber?:int, LensAlias?:string, LensArn?:string, ImprovementSummaries?:array<array{QuestionId?:string, PillarId?:string, QuestionTitle?:string, Risk?:"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", ImprovementPlanUrl?:string, ImprovementPlans?:array<array{ChoiceId?:string, DisplayText?:string, ImprovementPlanUrl?:string}>, JiraConfiguration?:array{JiraIssueUrl?:string, LastSyncedTime?:int|string|\DateTimeInterface}}>, NextToken?:string}>
     */
    public function listLensReviewImprovements(array $args): \AWS\Result { }

    /**
     * @param array{WorkloadId:string, LensAlias:string, PillarId?:string, MilestoneNumber?:int, NextToken?:string, MaxResults?:int, QuestionPriority?:"PRIORITIZED"|"NONE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{WorkloadId?:string, MilestoneNumber?:int, LensAlias?:string, LensArn?:string, ImprovementSummaries?:array<array{QuestionId?:string, PillarId?:string, QuestionTitle?:string, Risk?:"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", ImprovementPlanUrl?:string, ImprovementPlans?:array<array{ChoiceId?:string, DisplayText?:string, ImprovementPlanUrl?:string}>, JiraConfiguration?:array{JiraIssueUrl?:string, LastSyncedTime?:int|string|\DateTimeInterface}}>, NextToken?:string}>
     */
    public function listLensReviewImprovementsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkloadId:string, MilestoneNumber?:int, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{WorkloadId?:string, MilestoneNumber?:int, LensReviewSummaries?:array<array{LensAlias?:string, LensArn?:string, LensVersion?:string, LensName?:string, LensStatus?:"CURRENT"|"NOT_CURRENT"|"DEPRECATED"|"DELETED"|"UNSHARED", UpdatedAt?:int|string|\DateTimeInterface, RiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>, Profiles?:array<array{ProfileArn?:string, ProfileVersion?:string}>, PrioritizedRiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>}>, NextToken?:string}>
     */
    public function listLensReviews(array $args): \AWS\Result { }

    /**
     * @param array{WorkloadId:string, MilestoneNumber?:int, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{WorkloadId?:string, MilestoneNumber?:int, LensReviewSummaries?:array<array{LensAlias?:string, LensArn?:string, LensVersion?:string, LensName?:string, LensStatus?:"CURRENT"|"NOT_CURRENT"|"DEPRECATED"|"DELETED"|"UNSHARED", UpdatedAt?:int|string|\DateTimeInterface, RiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>, Profiles?:array<array{ProfileArn?:string, ProfileVersion?:string}>, PrioritizedRiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>}>, NextToken?:string}>
     */
    public function listLensReviewsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LensAlias:string, SharedWithPrefix?:string, NextToken?:string, MaxResults?:int, Status?:"ACCEPTED"|"REJECTED"|"PENDING"|"REVOKED"|"EXPIRED"|"ASSOCIATING"|"ASSOCIATED"|"FAILED"} $args
     * @return \AWS\Result<array{LensShareSummaries?:array<array{ShareId?:string, SharedWith?:string, Status?:"ACCEPTED"|"REJECTED"|"PENDING"|"REVOKED"|"EXPIRED"|"ASSOCIATING"|"ASSOCIATED"|"FAILED", StatusMessage?:string}>, NextToken?:string}>
     */
    public function listLensShares(array $args): \AWS\Result { }

    /**
     * @param array{LensAlias:string, SharedWithPrefix?:string, NextToken?:string, MaxResults?:int, Status?:"ACCEPTED"|"REJECTED"|"PENDING"|"REVOKED"|"EXPIRED"|"ASSOCIATING"|"ASSOCIATED"|"FAILED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{LensShareSummaries?:array<array{ShareId?:string, SharedWith?:string, Status?:"ACCEPTED"|"REJECTED"|"PENDING"|"REVOKED"|"EXPIRED"|"ASSOCIATING"|"ASSOCIATED"|"FAILED", StatusMessage?:string}>, NextToken?:string}>
     */
    public function listLensSharesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, LensType?:"AWS_OFFICIAL"|"CUSTOM_SHARED"|"CUSTOM_SELF", LensStatus?:"ALL"|"DRAFT"|"PUBLISHED", LensName?:string} $args
     * @return \AWS\Result<array{LensSummaries?:array<array{LensArn?:string, LensAlias?:string, LensName?:string, LensType?:"AWS_OFFICIAL"|"CUSTOM_SHARED"|"CUSTOM_SELF", Description?:string, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, LensVersion?:string, Owner?:string, LensStatus?:"CURRENT"|"NOT_CURRENT"|"DEPRECATED"|"DELETED"|"UNSHARED"}>, NextToken?:string}>
     */
    public function listLenses(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, LensType?:"AWS_OFFICIAL"|"CUSTOM_SHARED"|"CUSTOM_SELF", LensStatus?:"ALL"|"DRAFT"|"PUBLISHED", LensName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LensSummaries?:array<array{LensArn?:string, LensAlias?:string, LensName?:string, LensType?:"AWS_OFFICIAL"|"CUSTOM_SHARED"|"CUSTOM_SELF", Description?:string, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, LensVersion?:string, Owner?:string, LensStatus?:"CURRENT"|"NOT_CURRENT"|"DEPRECATED"|"DELETED"|"UNSHARED"}>, NextToken?:string}>
     */
    public function listLensesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkloadId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{WorkloadId?:string, MilestoneSummaries?:array<array{MilestoneNumber?:int, MilestoneName?:string, RecordedAt?:int|string|\DateTimeInterface, WorkloadSummary?:array{WorkloadId?:string, WorkloadArn?:string, WorkloadName?:string, Owner?:string, UpdatedAt?:int|string|\DateTimeInterface, Lenses?:array<string>, RiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>, ImprovementStatus?:"NOT_APPLICABLE"|"NOT_STARTED"|"IN_PROGRESS"|"COMPLETE"|"RISK_ACKNOWLEDGED", Profiles?:array<array{ProfileArn?:string, ProfileVersion?:string}>, PrioritizedRiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>}}>, NextToken?:string}>
     */
    public function listMilestones(array $args): \AWS\Result { }

    /**
     * @param array{WorkloadId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{WorkloadId?:string, MilestoneSummaries?:array<array{MilestoneNumber?:int, MilestoneName?:string, RecordedAt?:int|string|\DateTimeInterface, WorkloadSummary?:array{WorkloadId?:string, WorkloadArn?:string, WorkloadName?:string, Owner?:string, UpdatedAt?:int|string|\DateTimeInterface, Lenses?:array<string>, RiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>, ImprovementStatus?:"NOT_APPLICABLE"|"NOT_STARTED"|"IN_PROGRESS"|"COMPLETE"|"RISK_ACKNOWLEDGED", Profiles?:array<array{ProfileArn?:string, ProfileVersion?:string}>, PrioritizedRiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>}}>, NextToken?:string}>
     */
    public function listMilestonesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkloadId?:string, NextToken?:string, MaxResults?:int, ResourceArn?:string} $args
     * @return \AWS\Result<array{NotificationSummaries?:array<array{Type?:"LENS_VERSION_UPGRADED"|"LENS_VERSION_DEPRECATED", LensUpgradeSummary?:array{WorkloadId?:string, WorkloadName?:string, LensAlias?:string, LensArn?:string, CurrentLensVersion?:string, LatestLensVersion?:string, ResourceArn?:string, ResourceName?:string}}>, NextToken?:string}>
     */
    public function listNotifications(array $args = []): \AWS\Result { }

    /**
     * @param array{WorkloadId?:string, NextToken?:string, MaxResults?:int, ResourceArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NotificationSummaries?:array<array{Type?:"LENS_VERSION_UPGRADED"|"LENS_VERSION_DEPRECATED", LensUpgradeSummary?:array{WorkloadId?:string, WorkloadName?:string, LensAlias?:string, LensArn?:string, CurrentLensVersion?:string, LatestLensVersion?:string, ResourceArn?:string, ResourceName?:string}}>, NextToken?:string}>
     */
    public function listNotificationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkloadId?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NotificationSummaries?:array<array{CurrentProfileVersion?:string, LatestProfileVersion?:string, Type?:"PROFILE_ANSWERS_UPDATED"|"PROFILE_DELETED", ProfileArn?:string, ProfileName?:string, WorkloadId?:string, WorkloadName?:string}>, NextToken?:string}>
     */
    public function listProfileNotifications(array $args = []): \AWS\Result { }

    /**
     * @param array{WorkloadId?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NotificationSummaries?:array<array{CurrentProfileVersion?:string, LatestProfileVersion?:string, Type?:"PROFILE_ANSWERS_UPDATED"|"PROFILE_DELETED", ProfileArn?:string, ProfileName?:string, WorkloadId?:string, WorkloadName?:string}>, NextToken?:string}>
     */
    public function listProfileNotificationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProfileArn:string, SharedWithPrefix?:string, NextToken?:string, MaxResults?:int, Status?:"ACCEPTED"|"REJECTED"|"PENDING"|"REVOKED"|"EXPIRED"|"ASSOCIATING"|"ASSOCIATED"|"FAILED"} $args
     * @return \AWS\Result<array{ProfileShareSummaries?:array<array{ShareId?:string, SharedWith?:string, Status?:"ACCEPTED"|"REJECTED"|"PENDING"|"REVOKED"|"EXPIRED"|"ASSOCIATING"|"ASSOCIATED"|"FAILED", StatusMessage?:string}>, NextToken?:string}>
     */
    public function listProfileShares(array $args): \AWS\Result { }

    /**
     * @param array{ProfileArn:string, SharedWithPrefix?:string, NextToken?:string, MaxResults?:int, Status?:"ACCEPTED"|"REJECTED"|"PENDING"|"REVOKED"|"EXPIRED"|"ASSOCIATING"|"ASSOCIATED"|"FAILED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProfileShareSummaries?:array<array{ShareId?:string, SharedWith?:string, Status?:"ACCEPTED"|"REJECTED"|"PENDING"|"REVOKED"|"EXPIRED"|"ASSOCIATING"|"ASSOCIATED"|"FAILED", StatusMessage?:string}>, NextToken?:string}>
     */
    public function listProfileSharesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProfileNamePrefix?:string, ProfileOwnerType?:"SELF"|"SHARED", NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ProfileSummaries?:array<array{ProfileArn?:string, ProfileVersion?:string, ProfileName?:string, ProfileDescription?:string, Owner?:string, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listProfiles(array $args = []): \AWS\Result { }

    /**
     * @param array{ProfileNamePrefix?:string, ProfileOwnerType?:"SELF"|"SHARED", NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProfileSummaries?:array<array{ProfileArn?:string, ProfileVersion?:string, ProfileName?:string, ProfileDescription?:string, Owner?:string, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listProfilesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TemplateArn:string, LensAlias:string, PillarId?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{TemplateArn?:string, LensAlias?:string, AnswerSummaries?:array<array{QuestionId?:string, PillarId?:string, QuestionTitle?:string, Choices?:array<array{ChoiceId?:string, Title?:string, Description?:string, HelpfulResource?:array{DisplayText?:string, Url?:string}, ImprovementPlan?:array{DisplayText?:string, Url?:string}, AdditionalResources?:array<array{Type?:"HELPFUL_RESOURCE"|"IMPROVEMENT_PLAN", Content?:array<array{DisplayText?:string, Url?:string}>}>}>, SelectedChoices?:array<string>, ChoiceAnswerSummaries?:array<array{ChoiceId?:string, Status?:"SELECTED"|"NOT_APPLICABLE"|"UNSELECTED", Reason?:"OUT_OF_SCOPE"|"BUSINESS_PRIORITIES"|"ARCHITECTURE_CONSTRAINTS"|"OTHER"|"NONE"}>, IsApplicable?:bool, AnswerStatus?:"UNANSWERED"|"ANSWERED", Reason?:"OUT_OF_SCOPE"|"BUSINESS_PRIORITIES"|"ARCHITECTURE_CONSTRAINTS"|"OTHER"|"NONE", QuestionType?:"PRIORITIZED"|"NON_PRIORITIZED"}>, NextToken?:string}>
     */
    public function listReviewTemplateAnswers(array $args): \AWS\Result { }

    /**
     * @param array{TemplateArn:string, LensAlias:string, PillarId?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{TemplateArn?:string, LensAlias?:string, AnswerSummaries?:array<array{QuestionId?:string, PillarId?:string, QuestionTitle?:string, Choices?:array<array{ChoiceId?:string, Title?:string, Description?:string, HelpfulResource?:array{DisplayText?:string, Url?:string}, ImprovementPlan?:array{DisplayText?:string, Url?:string}, AdditionalResources?:array<array{Type?:"HELPFUL_RESOURCE"|"IMPROVEMENT_PLAN", Content?:array<array{DisplayText?:string, Url?:string}>}>}>, SelectedChoices?:array<string>, ChoiceAnswerSummaries?:array<array{ChoiceId?:string, Status?:"SELECTED"|"NOT_APPLICABLE"|"UNSELECTED", Reason?:"OUT_OF_SCOPE"|"BUSINESS_PRIORITIES"|"ARCHITECTURE_CONSTRAINTS"|"OTHER"|"NONE"}>, IsApplicable?:bool, AnswerStatus?:"UNANSWERED"|"ANSWERED", Reason?:"OUT_OF_SCOPE"|"BUSINESS_PRIORITIES"|"ARCHITECTURE_CONSTRAINTS"|"OTHER"|"NONE", QuestionType?:"PRIORITIZED"|"NON_PRIORITIZED"}>, NextToken?:string}>
     */
    public function listReviewTemplateAnswersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ReviewTemplates?:array<array{Description?:string, Lenses?:array<string>, Owner?:string, UpdatedAt?:int|string|\DateTimeInterface, TemplateArn?:string, TemplateName?:string, UpdateStatus?:"CURRENT"|"LENS_NOT_CURRENT"}>, NextToken?:string}>
     */
    public function listReviewTemplates(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReviewTemplates?:array<array{Description?:string, Lenses?:array<string>, Owner?:string, UpdatedAt?:int|string|\DateTimeInterface, TemplateArn?:string, TemplateName?:string, UpdateStatus?:"CURRENT"|"LENS_NOT_CURRENT"}>, NextToken?:string}>
     */
    public function listReviewTemplatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkloadNamePrefix?:string, LensNamePrefix?:string, ShareResourceType?:"WORKLOAD"|"LENS"|"PROFILE"|"TEMPLATE", NextToken?:string, MaxResults?:int, ProfileNamePrefix?:string, TemplateNamePrefix?:string} $args
     * @return \AWS\Result<array{ShareInvitationSummaries?:array<array{ShareInvitationId?:string, SharedBy?:string, SharedWith?:string, PermissionType?:"READONLY"|"CONTRIBUTOR", ShareResourceType?:"WORKLOAD"|"LENS"|"PROFILE"|"TEMPLATE", WorkloadName?:string, WorkloadId?:string, LensName?:string, LensArn?:string, ProfileName?:string, ProfileArn?:string, TemplateName?:string, TemplateArn?:string}>, NextToken?:string}>
     */
    public function listShareInvitations(array $args = []): \AWS\Result { }

    /**
     * @param array{WorkloadNamePrefix?:string, LensNamePrefix?:string, ShareResourceType?:"WORKLOAD"|"LENS"|"PROFILE"|"TEMPLATE", NextToken?:string, MaxResults?:int, ProfileNamePrefix?:string, TemplateNamePrefix?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ShareInvitationSummaries?:array<array{ShareInvitationId?:string, SharedBy?:string, SharedWith?:string, PermissionType?:"READONLY"|"CONTRIBUTOR", ShareResourceType?:"WORKLOAD"|"LENS"|"PROFILE"|"TEMPLATE", WorkloadName?:string, WorkloadId?:string, LensName?:string, LensArn?:string, ProfileName?:string, ProfileArn?:string, TemplateName?:string, TemplateArn?:string}>, NextToken?:string}>
     */
    public function listShareInvitationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkloadArn:string} $args
     * @return \AWS\Result<array{Tags?:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{WorkloadArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TemplateArn:string, SharedWithPrefix?:string, NextToken?:string, MaxResults?:int, Status?:"ACCEPTED"|"REJECTED"|"PENDING"|"REVOKED"|"EXPIRED"|"ASSOCIATING"|"ASSOCIATED"|"FAILED"} $args
     * @return \AWS\Result<array{TemplateArn?:string, TemplateShareSummaries?:array<array{ShareId?:string, SharedWith?:string, Status?:"ACCEPTED"|"REJECTED"|"PENDING"|"REVOKED"|"EXPIRED"|"ASSOCIATING"|"ASSOCIATED"|"FAILED", StatusMessage?:string}>, NextToken?:string}>
     */
    public function listTemplateShares(array $args): \AWS\Result { }

    /**
     * @param array{TemplateArn:string, SharedWithPrefix?:string, NextToken?:string, MaxResults?:int, Status?:"ACCEPTED"|"REJECTED"|"PENDING"|"REVOKED"|"EXPIRED"|"ASSOCIATING"|"ASSOCIATED"|"FAILED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{TemplateArn?:string, TemplateShareSummaries?:array<array{ShareId?:string, SharedWith?:string, Status?:"ACCEPTED"|"REJECTED"|"PENDING"|"REVOKED"|"EXPIRED"|"ASSOCIATING"|"ASSOCIATED"|"FAILED", StatusMessage?:string}>, NextToken?:string}>
     */
    public function listTemplateSharesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkloadId:string, SharedWithPrefix?:string, NextToken?:string, MaxResults?:int, Status?:"ACCEPTED"|"REJECTED"|"PENDING"|"REVOKED"|"EXPIRED"|"ASSOCIATING"|"ASSOCIATED"|"FAILED"} $args
     * @return \AWS\Result<array{WorkloadId?:string, WorkloadShareSummaries?:array<array{ShareId?:string, SharedWith?:string, PermissionType?:"READONLY"|"CONTRIBUTOR", Status?:"ACCEPTED"|"REJECTED"|"PENDING"|"REVOKED"|"EXPIRED"|"ASSOCIATING"|"ASSOCIATED"|"FAILED", StatusMessage?:string}>, NextToken?:string}>
     */
    public function listWorkloadShares(array $args): \AWS\Result { }

    /**
     * @param array{WorkloadId:string, SharedWithPrefix?:string, NextToken?:string, MaxResults?:int, Status?:"ACCEPTED"|"REJECTED"|"PENDING"|"REVOKED"|"EXPIRED"|"ASSOCIATING"|"ASSOCIATED"|"FAILED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{WorkloadId?:string, WorkloadShareSummaries?:array<array{ShareId?:string, SharedWith?:string, PermissionType?:"READONLY"|"CONTRIBUTOR", Status?:"ACCEPTED"|"REJECTED"|"PENDING"|"REVOKED"|"EXPIRED"|"ASSOCIATING"|"ASSOCIATED"|"FAILED", StatusMessage?:string}>, NextToken?:string}>
     */
    public function listWorkloadSharesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkloadNamePrefix?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{WorkloadSummaries?:array<array{WorkloadId?:string, WorkloadArn?:string, WorkloadName?:string, Owner?:string, UpdatedAt?:int|string|\DateTimeInterface, Lenses?:array<string>, RiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>, ImprovementStatus?:"NOT_APPLICABLE"|"NOT_STARTED"|"IN_PROGRESS"|"COMPLETE"|"RISK_ACKNOWLEDGED", Profiles?:array<array{ProfileArn?:string, ProfileVersion?:string}>, PrioritizedRiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>}>, NextToken?:string}>
     */
    public function listWorkloads(array $args = []): \AWS\Result { }

    /**
     * @param array{WorkloadNamePrefix?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{WorkloadSummaries?:array<array{WorkloadId?:string, WorkloadArn?:string, WorkloadName?:string, Owner?:string, UpdatedAt?:int|string|\DateTimeInterface, Lenses?:array<string>, RiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>, ImprovementStatus?:"NOT_APPLICABLE"|"NOT_STARTED"|"IN_PROGRESS"|"COMPLETE"|"RISK_ACKNOWLEDGED", Profiles?:array<array{ProfileArn?:string, ProfileVersion?:string}>, PrioritizedRiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>}>, NextToken?:string}>
     */
    public function listWorkloadsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkloadArn:string, Tags:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{WorkloadArn:string, Tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkloadArn:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{WorkloadArn:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkloadId:string, LensAlias:string, QuestionId:string, SelectedChoices?:array<string>, ChoiceUpdates?:array<string, array{Status:"SELECTED"|"NOT_APPLICABLE"|"UNSELECTED", Reason?:"OUT_OF_SCOPE"|"BUSINESS_PRIORITIES"|"ARCHITECTURE_CONSTRAINTS"|"OTHER"|"NONE", Notes?:string}>, Notes?:string, IsApplicable?:bool, Reason?:"OUT_OF_SCOPE"|"BUSINESS_PRIORITIES"|"ARCHITECTURE_CONSTRAINTS"|"OTHER"|"NONE"} $args
     * @return \AWS\Result<array{WorkloadId?:string, LensAlias?:string, LensArn?:string, Answer?:array{QuestionId?:string, PillarId?:string, QuestionTitle?:string, QuestionDescription?:string, ImprovementPlanUrl?:string, HelpfulResourceUrl?:string, HelpfulResourceDisplayText?:string, Choices?:array<array{ChoiceId?:string, Title?:string, Description?:string, HelpfulResource?:array{DisplayText?:string, Url?:string}, ImprovementPlan?:array{DisplayText?:string, Url?:string}, AdditionalResources?:array<array{Type?:"HELPFUL_RESOURCE"|"IMPROVEMENT_PLAN", Content?:array<array{DisplayText?:string, Url?:string}>}>}>, SelectedChoices?:array<string>, ChoiceAnswers?:array<array{ChoiceId?:string, Status?:"SELECTED"|"NOT_APPLICABLE"|"UNSELECTED", Reason?:"OUT_OF_SCOPE"|"BUSINESS_PRIORITIES"|"ARCHITECTURE_CONSTRAINTS"|"OTHER"|"NONE", Notes?:string}>, IsApplicable?:bool, Risk?:"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", Notes?:string, Reason?:"OUT_OF_SCOPE"|"BUSINESS_PRIORITIES"|"ARCHITECTURE_CONSTRAINTS"|"OTHER"|"NONE", JiraConfiguration?:array{JiraIssueUrl?:string, LastSyncedTime?:int|string|\DateTimeInterface}}}>
     */
    public function updateAnswer(array $args): \AWS\Result { }

    /**
     * @param array{WorkloadId:string, LensAlias:string, QuestionId:string, SelectedChoices?:array<string>, ChoiceUpdates?:array<string, array{Status:"SELECTED"|"NOT_APPLICABLE"|"UNSELECTED", Reason?:"OUT_OF_SCOPE"|"BUSINESS_PRIORITIES"|"ARCHITECTURE_CONSTRAINTS"|"OTHER"|"NONE", Notes?:string}>, Notes?:string, IsApplicable?:bool, Reason?:"OUT_OF_SCOPE"|"BUSINESS_PRIORITIES"|"ARCHITECTURE_CONSTRAINTS"|"OTHER"|"NONE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{WorkloadId?:string, LensAlias?:string, LensArn?:string, Answer?:array{QuestionId?:string, PillarId?:string, QuestionTitle?:string, QuestionDescription?:string, ImprovementPlanUrl?:string, HelpfulResourceUrl?:string, HelpfulResourceDisplayText?:string, Choices?:array<array{ChoiceId?:string, Title?:string, Description?:string, HelpfulResource?:array{DisplayText?:string, Url?:string}, ImprovementPlan?:array{DisplayText?:string, Url?:string}, AdditionalResources?:array<array{Type?:"HELPFUL_RESOURCE"|"IMPROVEMENT_PLAN", Content?:array<array{DisplayText?:string, Url?:string}>}>}>, SelectedChoices?:array<string>, ChoiceAnswers?:array<array{ChoiceId?:string, Status?:"SELECTED"|"NOT_APPLICABLE"|"UNSELECTED", Reason?:"OUT_OF_SCOPE"|"BUSINESS_PRIORITIES"|"ARCHITECTURE_CONSTRAINTS"|"OTHER"|"NONE", Notes?:string}>, IsApplicable?:bool, Risk?:"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", Notes?:string, Reason?:"OUT_OF_SCOPE"|"BUSINESS_PRIORITIES"|"ARCHITECTURE_CONSTRAINTS"|"OTHER"|"NONE", JiraConfiguration?:array{JiraIssueUrl?:string, LastSyncedTime?:int|string|\DateTimeInterface}}}>
     */
    public function updateAnswerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationSharingStatus?:"ENABLED"|"DISABLED", DiscoveryIntegrationStatus?:"ENABLED"|"DISABLED", JiraConfiguration?:array{IssueManagementStatus?:"ENABLED"|"DISABLED", IssueManagementType?:"AUTO"|"MANUAL", JiraProjectKey?:string, IntegrationStatus?:"NOT_CONFIGURED"}} $args
     * @return \AWS\Result<void>
     */
    public function updateGlobalSettings(array $args = []): \AWS\Result { }

    /**
     * @param array{OrganizationSharingStatus?:"ENABLED"|"DISABLED", DiscoveryIntegrationStatus?:"ENABLED"|"DISABLED", JiraConfiguration?:array{IssueManagementStatus?:"ENABLED"|"DISABLED", IssueManagementType?:"AUTO"|"MANUAL", JiraProjectKey?:string, IntegrationStatus?:"NOT_CONFIGURED"}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateGlobalSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkloadId:string, ClientRequestToken:string, IntegratingService:"JIRA"} $args
     * @return \AWS\Result<void>
     */
    public function updateIntegration(array $args): \AWS\Result { }

    /**
     * @param array{WorkloadId:string, ClientRequestToken:string, IntegratingService:"JIRA"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateIntegrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkloadId:string, LensAlias:string, LensNotes?:string, PillarNotes?:array<string, string>, JiraConfiguration?:array{SelectedPillars?:array<array{PillarId?:string, SelectedQuestionIds?:array<string>}>}} $args
     * @return \AWS\Result<array{WorkloadId?:string, LensReview?:array{LensAlias?:string, LensArn?:string, LensVersion?:string, LensName?:string, LensStatus?:"CURRENT"|"NOT_CURRENT"|"DEPRECATED"|"DELETED"|"UNSHARED", PillarReviewSummaries?:array<array{PillarId?:string, PillarName?:string, Notes?:string, RiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>, PrioritizedRiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>}>, JiraConfiguration?:array{SelectedPillars?:array<array{PillarId?:string, SelectedQuestionIds?:array<string>}>}, UpdatedAt?:int|string|\DateTimeInterface, Notes?:string, RiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>, NextToken?:string, Profiles?:array<array{ProfileArn?:string, ProfileVersion?:string}>, PrioritizedRiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>}}>
     */
    public function updateLensReview(array $args): \AWS\Result { }

    /**
     * @param array{WorkloadId:string, LensAlias:string, LensNotes?:string, PillarNotes?:array<string, string>, JiraConfiguration?:array{SelectedPillars?:array<array{PillarId?:string, SelectedQuestionIds?:array<string>}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{WorkloadId?:string, LensReview?:array{LensAlias?:string, LensArn?:string, LensVersion?:string, LensName?:string, LensStatus?:"CURRENT"|"NOT_CURRENT"|"DEPRECATED"|"DELETED"|"UNSHARED", PillarReviewSummaries?:array<array{PillarId?:string, PillarName?:string, Notes?:string, RiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>, PrioritizedRiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>}>, JiraConfiguration?:array{SelectedPillars?:array<array{PillarId?:string, SelectedQuestionIds?:array<string>}>}, UpdatedAt?:int|string|\DateTimeInterface, Notes?:string, RiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>, NextToken?:string, Profiles?:array<array{ProfileArn?:string, ProfileVersion?:string}>, PrioritizedRiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>}}>
     */
    public function updateLensReviewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProfileArn:string, ProfileDescription?:string, ProfileQuestions?:array<array{QuestionId?:string, SelectedChoiceIds?:array<string>}>} $args
     * @return \AWS\Result<array{Profile?:array{ProfileArn?:string, ProfileVersion?:string, ProfileName?:string, ProfileDescription?:string, ProfileQuestions?:array<array{QuestionId?:string, QuestionTitle?:string, QuestionDescription?:string, QuestionChoices?:array<array{ChoiceId?:string, ChoiceTitle?:string, ChoiceDescription?:string}>, SelectedChoiceIds?:array<string>, MinSelectedChoices?:int, MaxSelectedChoices?:int}>, Owner?:string, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, ShareInvitationId?:string, Tags?:array<string, string>}}>
     */
    public function updateProfile(array $args): \AWS\Result { }

    /**
     * @param array{ProfileArn:string, ProfileDescription?:string, ProfileQuestions?:array<array{QuestionId?:string, SelectedChoiceIds?:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Profile?:array{ProfileArn?:string, ProfileVersion?:string, ProfileName?:string, ProfileDescription?:string, ProfileQuestions?:array<array{QuestionId?:string, QuestionTitle?:string, QuestionDescription?:string, QuestionChoices?:array<array{ChoiceId?:string, ChoiceTitle?:string, ChoiceDescription?:string}>, SelectedChoiceIds?:array<string>, MinSelectedChoices?:int, MaxSelectedChoices?:int}>, Owner?:string, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, ShareInvitationId?:string, Tags?:array<string, string>}}>
     */
    public function updateProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TemplateArn:string, TemplateName?:string, Description?:string, Notes?:string, LensesToAssociate?:array<string>, LensesToDisassociate?:array<string>} $args
     * @return \AWS\Result<array{ReviewTemplate?:array{Description?:string, Lenses?:array<string>, Notes?:string, QuestionCounts?:array<"UNANSWERED"|"ANSWERED", int>, Owner?:string, UpdatedAt?:int|string|\DateTimeInterface, TemplateArn?:string, TemplateName?:string, Tags?:array<string, string>, UpdateStatus?:"CURRENT"|"LENS_NOT_CURRENT", ShareInvitationId?:string}}>
     */
    public function updateReviewTemplate(array $args): \AWS\Result { }

    /**
     * @param array{TemplateArn:string, TemplateName?:string, Description?:string, Notes?:string, LensesToAssociate?:array<string>, LensesToDisassociate?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReviewTemplate?:array{Description?:string, Lenses?:array<string>, Notes?:string, QuestionCounts?:array<"UNANSWERED"|"ANSWERED", int>, Owner?:string, UpdatedAt?:int|string|\DateTimeInterface, TemplateArn?:string, TemplateName?:string, Tags?:array<string, string>, UpdateStatus?:"CURRENT"|"LENS_NOT_CURRENT", ShareInvitationId?:string}}>
     */
    public function updateReviewTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TemplateArn:string, LensAlias:string, QuestionId:string, SelectedChoices?:array<string>, ChoiceUpdates?:array<string, array{Status:"SELECTED"|"NOT_APPLICABLE"|"UNSELECTED", Reason?:"OUT_OF_SCOPE"|"BUSINESS_PRIORITIES"|"ARCHITECTURE_CONSTRAINTS"|"OTHER"|"NONE", Notes?:string}>, Notes?:string, IsApplicable?:bool, Reason?:"OUT_OF_SCOPE"|"BUSINESS_PRIORITIES"|"ARCHITECTURE_CONSTRAINTS"|"OTHER"|"NONE"} $args
     * @return \AWS\Result<array{TemplateArn?:string, LensAlias?:string, Answer?:array{QuestionId?:string, PillarId?:string, QuestionTitle?:string, QuestionDescription?:string, ImprovementPlanUrl?:string, HelpfulResourceUrl?:string, HelpfulResourceDisplayText?:string, Choices?:array<array{ChoiceId?:string, Title?:string, Description?:string, HelpfulResource?:array{DisplayText?:string, Url?:string}, ImprovementPlan?:array{DisplayText?:string, Url?:string}, AdditionalResources?:array<array{Type?:"HELPFUL_RESOURCE"|"IMPROVEMENT_PLAN", Content?:array<array{DisplayText?:string, Url?:string}>}>}>, SelectedChoices?:array<string>, ChoiceAnswers?:array<array{ChoiceId?:string, Status?:"SELECTED"|"NOT_APPLICABLE"|"UNSELECTED", Reason?:"OUT_OF_SCOPE"|"BUSINESS_PRIORITIES"|"ARCHITECTURE_CONSTRAINTS"|"OTHER"|"NONE", Notes?:string}>, IsApplicable?:bool, AnswerStatus?:"UNANSWERED"|"ANSWERED", Notes?:string, Reason?:"OUT_OF_SCOPE"|"BUSINESS_PRIORITIES"|"ARCHITECTURE_CONSTRAINTS"|"OTHER"|"NONE"}}>
     */
    public function updateReviewTemplateAnswer(array $args): \AWS\Result { }

    /**
     * @param array{TemplateArn:string, LensAlias:string, QuestionId:string, SelectedChoices?:array<string>, ChoiceUpdates?:array<string, array{Status:"SELECTED"|"NOT_APPLICABLE"|"UNSELECTED", Reason?:"OUT_OF_SCOPE"|"BUSINESS_PRIORITIES"|"ARCHITECTURE_CONSTRAINTS"|"OTHER"|"NONE", Notes?:string}>, Notes?:string, IsApplicable?:bool, Reason?:"OUT_OF_SCOPE"|"BUSINESS_PRIORITIES"|"ARCHITECTURE_CONSTRAINTS"|"OTHER"|"NONE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{TemplateArn?:string, LensAlias?:string, Answer?:array{QuestionId?:string, PillarId?:string, QuestionTitle?:string, QuestionDescription?:string, ImprovementPlanUrl?:string, HelpfulResourceUrl?:string, HelpfulResourceDisplayText?:string, Choices?:array<array{ChoiceId?:string, Title?:string, Description?:string, HelpfulResource?:array{DisplayText?:string, Url?:string}, ImprovementPlan?:array{DisplayText?:string, Url?:string}, AdditionalResources?:array<array{Type?:"HELPFUL_RESOURCE"|"IMPROVEMENT_PLAN", Content?:array<array{DisplayText?:string, Url?:string}>}>}>, SelectedChoices?:array<string>, ChoiceAnswers?:array<array{ChoiceId?:string, Status?:"SELECTED"|"NOT_APPLICABLE"|"UNSELECTED", Reason?:"OUT_OF_SCOPE"|"BUSINESS_PRIORITIES"|"ARCHITECTURE_CONSTRAINTS"|"OTHER"|"NONE", Notes?:string}>, IsApplicable?:bool, AnswerStatus?:"UNANSWERED"|"ANSWERED", Notes?:string, Reason?:"OUT_OF_SCOPE"|"BUSINESS_PRIORITIES"|"ARCHITECTURE_CONSTRAINTS"|"OTHER"|"NONE"}}>
     */
    public function updateReviewTemplateAnswerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TemplateArn:string, LensAlias:string, LensNotes?:string, PillarNotes?:array<string, string>} $args
     * @return \AWS\Result<array{TemplateArn?:string, LensReview?:array{LensAlias?:string, LensArn?:string, LensVersion?:string, LensName?:string, LensStatus?:"CURRENT"|"NOT_CURRENT"|"DEPRECATED"|"DELETED"|"UNSHARED", PillarReviewSummaries?:array<array{PillarId?:string, PillarName?:string, Notes?:string, QuestionCounts?:array<"UNANSWERED"|"ANSWERED", int>}>, UpdatedAt?:int|string|\DateTimeInterface, Notes?:string, QuestionCounts?:array<"UNANSWERED"|"ANSWERED", int>, NextToken?:string}}>
     */
    public function updateReviewTemplateLensReview(array $args): \AWS\Result { }

    /**
     * @param array{TemplateArn:string, LensAlias:string, LensNotes?:string, PillarNotes?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{TemplateArn?:string, LensReview?:array{LensAlias?:string, LensArn?:string, LensVersion?:string, LensName?:string, LensStatus?:"CURRENT"|"NOT_CURRENT"|"DEPRECATED"|"DELETED"|"UNSHARED", PillarReviewSummaries?:array<array{PillarId?:string, PillarName?:string, Notes?:string, QuestionCounts?:array<"UNANSWERED"|"ANSWERED", int>}>, UpdatedAt?:int|string|\DateTimeInterface, Notes?:string, QuestionCounts?:array<"UNANSWERED"|"ANSWERED", int>, NextToken?:string}}>
     */
    public function updateReviewTemplateLensReviewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ShareInvitationId:string, ShareInvitationAction:"ACCEPT"|"REJECT"} $args
     * @return \AWS\Result<array{ShareInvitation?:array{ShareInvitationId?:string, ShareResourceType?:"WORKLOAD"|"LENS"|"PROFILE"|"TEMPLATE", WorkloadId?:string, LensAlias?:string, LensArn?:string, ProfileArn?:string, TemplateArn?:string}}>
     */
    public function updateShareInvitation(array $args): \AWS\Result { }

    /**
     * @param array{ShareInvitationId:string, ShareInvitationAction:"ACCEPT"|"REJECT"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ShareInvitation?:array{ShareInvitationId?:string, ShareResourceType?:"WORKLOAD"|"LENS"|"PROFILE"|"TEMPLATE", WorkloadId?:string, LensAlias?:string, LensArn?:string, ProfileArn?:string, TemplateArn?:string}}>
     */
    public function updateShareInvitationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkloadId:string, WorkloadName?:string, Description?:string, Environment?:"PRODUCTION"|"PREPRODUCTION", AccountIds?:array<string>, AwsRegions?:array<string>, NonAwsRegions?:array<string>, PillarPriorities?:array<string>, ArchitecturalDesign?:string, ReviewOwner?:string, IsReviewOwnerUpdateAcknowledged?:bool, IndustryType?:string, Industry?:string, Notes?:string, ImprovementStatus?:"NOT_APPLICABLE"|"NOT_STARTED"|"IN_PROGRESS"|"COMPLETE"|"RISK_ACKNOWLEDGED", DiscoveryConfig?:array{TrustedAdvisorIntegrationStatus?:"ENABLED"|"DISABLED", WorkloadResourceDefinition?:array<"WORKLOAD_METADATA"|"APP_REGISTRY">}, Applications?:array<string>, JiraConfiguration?:array{IssueManagementStatus?:"ENABLED"|"DISABLED"|"INHERIT", IssueManagementType?:"AUTO"|"MANUAL", JiraProjectKey?:string}} $args
     * @return \AWS\Result<array{Workload?:array{WorkloadId?:string, WorkloadArn?:string, WorkloadName?:string, Description?:string, Environment?:"PRODUCTION"|"PREPRODUCTION", UpdatedAt?:int|string|\DateTimeInterface, AccountIds?:array<string>, AwsRegions?:array<string>, NonAwsRegions?:array<string>, ArchitecturalDesign?:string, ReviewOwner?:string, ReviewRestrictionDate?:int|string|\DateTimeInterface, IsReviewOwnerUpdateAcknowledged?:bool, IndustryType?:string, Industry?:string, Notes?:string, ImprovementStatus?:"NOT_APPLICABLE"|"NOT_STARTED"|"IN_PROGRESS"|"COMPLETE"|"RISK_ACKNOWLEDGED", RiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>, PillarPriorities?:array<string>, Lenses?:array<string>, Owner?:string, ShareInvitationId?:string, Tags?:array<string, string>, DiscoveryConfig?:array{TrustedAdvisorIntegrationStatus?:"ENABLED"|"DISABLED", WorkloadResourceDefinition?:array<"WORKLOAD_METADATA"|"APP_REGISTRY">}, Applications?:array<string>, Profiles?:array<array{ProfileArn?:string, ProfileVersion?:string}>, PrioritizedRiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>, JiraConfiguration?:array{IssueManagementStatus?:"ENABLED"|"DISABLED"|"INHERIT", IssueManagementType?:"AUTO"|"MANUAL", JiraProjectKey?:string, StatusMessage?:string}}}>
     */
    public function updateWorkload(array $args): \AWS\Result { }

    /**
     * @param array{WorkloadId:string, WorkloadName?:string, Description?:string, Environment?:"PRODUCTION"|"PREPRODUCTION", AccountIds?:array<string>, AwsRegions?:array<string>, NonAwsRegions?:array<string>, PillarPriorities?:array<string>, ArchitecturalDesign?:string, ReviewOwner?:string, IsReviewOwnerUpdateAcknowledged?:bool, IndustryType?:string, Industry?:string, Notes?:string, ImprovementStatus?:"NOT_APPLICABLE"|"NOT_STARTED"|"IN_PROGRESS"|"COMPLETE"|"RISK_ACKNOWLEDGED", DiscoveryConfig?:array{TrustedAdvisorIntegrationStatus?:"ENABLED"|"DISABLED", WorkloadResourceDefinition?:array<"WORKLOAD_METADATA"|"APP_REGISTRY">}, Applications?:array<string>, JiraConfiguration?:array{IssueManagementStatus?:"ENABLED"|"DISABLED"|"INHERIT", IssueManagementType?:"AUTO"|"MANUAL", JiraProjectKey?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Workload?:array{WorkloadId?:string, WorkloadArn?:string, WorkloadName?:string, Description?:string, Environment?:"PRODUCTION"|"PREPRODUCTION", UpdatedAt?:int|string|\DateTimeInterface, AccountIds?:array<string>, AwsRegions?:array<string>, NonAwsRegions?:array<string>, ArchitecturalDesign?:string, ReviewOwner?:string, ReviewRestrictionDate?:int|string|\DateTimeInterface, IsReviewOwnerUpdateAcknowledged?:bool, IndustryType?:string, Industry?:string, Notes?:string, ImprovementStatus?:"NOT_APPLICABLE"|"NOT_STARTED"|"IN_PROGRESS"|"COMPLETE"|"RISK_ACKNOWLEDGED", RiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>, PillarPriorities?:array<string>, Lenses?:array<string>, Owner?:string, ShareInvitationId?:string, Tags?:array<string, string>, DiscoveryConfig?:array{TrustedAdvisorIntegrationStatus?:"ENABLED"|"DISABLED", WorkloadResourceDefinition?:array<"WORKLOAD_METADATA"|"APP_REGISTRY">}, Applications?:array<string>, Profiles?:array<array{ProfileArn?:string, ProfileVersion?:string}>, PrioritizedRiskCounts?:array<"UNANSWERED"|"HIGH"|"MEDIUM"|"NONE"|"NOT_APPLICABLE", int>, JiraConfiguration?:array{IssueManagementStatus?:"ENABLED"|"DISABLED"|"INHERIT", IssueManagementType?:"AUTO"|"MANUAL", JiraProjectKey?:string, StatusMessage?:string}}}>
     */
    public function updateWorkloadAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ShareId:string, WorkloadId:string, PermissionType:"READONLY"|"CONTRIBUTOR"} $args
     * @return \AWS\Result<array{WorkloadId?:string, WorkloadShare?:array{ShareId?:string, SharedBy?:string, SharedWith?:string, PermissionType?:"READONLY"|"CONTRIBUTOR", Status?:"ACCEPTED"|"REJECTED"|"PENDING"|"REVOKED"|"EXPIRED"|"ASSOCIATING"|"ASSOCIATED"|"FAILED", WorkloadName?:string, WorkloadId?:string}}>
     */
    public function updateWorkloadShare(array $args): \AWS\Result { }

    /**
     * @param array{ShareId:string, WorkloadId:string, PermissionType:"READONLY"|"CONTRIBUTOR"} $args
     * @return \GuzzleHttp\Promise\Promise<array{WorkloadId?:string, WorkloadShare?:array{ShareId?:string, SharedBy?:string, SharedWith?:string, PermissionType?:"READONLY"|"CONTRIBUTOR", Status?:"ACCEPTED"|"REJECTED"|"PENDING"|"REVOKED"|"EXPIRED"|"ASSOCIATING"|"ASSOCIATED"|"FAILED", WorkloadName?:string, WorkloadId?:string}}>
     */
    public function updateWorkloadShareAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkloadId:string, LensAlias:string, MilestoneName:string, ClientRequestToken?:string} $args
     * @return \AWS\Result<void>
     */
    public function upgradeLensReview(array $args): \AWS\Result { }

    /**
     * @param array{WorkloadId:string, LensAlias:string, MilestoneName:string, ClientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function upgradeLensReviewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkloadId:string, ProfileArn:string, MilestoneName?:string, ClientRequestToken?:string} $args
     * @return \AWS\Result<void>
     */
    public function upgradeProfileVersion(array $args): \AWS\Result { }

    /**
     * @param array{WorkloadId:string, ProfileArn:string, MilestoneName?:string, ClientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function upgradeProfileVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TemplateArn:string, LensAlias:string, ClientRequestToken?:string} $args
     * @return \AWS\Result<void>
     */
    public function upgradeReviewTemplateLensReview(array $args): \AWS\Result { }

    /**
     * @param array{TemplateArn:string, LensAlias:string, ClientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function upgradeReviewTemplateLensReviewAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
