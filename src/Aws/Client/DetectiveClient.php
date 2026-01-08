<?php
namespace AWS\Detective;

class DetectiveClient
{
    /**
     * @param array{GraphArn:string} $args
     * @return \AWS\Result<void>
     */
    public function acceptInvitation(array $args): \AWS\Result { }

    /**
     * @param array{GraphArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function acceptInvitationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GraphArn:string, AccountIds:array<string>} $args
     * @return \AWS\Result<array{MemberDatasources?:array<array{AccountId?:string, GraphArn?:string, DatasourcePackageIngestHistory?:array<"DETECTIVE_CORE"|"EKS_AUDIT"|"ASFF_SECURITYHUB_FINDING", array<"STARTED"|"STOPPED"|"DISABLED", array{Timestamp?:int|string|\DateTimeInterface}>>}>, UnprocessedAccounts?:array<array{AccountId?:string, Reason?:string}>}>
     */
    public function batchGetGraphMemberDatasources(array $args): \AWS\Result { }

    /**
     * @param array{GraphArn:string, AccountIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{MemberDatasources?:array<array{AccountId?:string, GraphArn?:string, DatasourcePackageIngestHistory?:array<"DETECTIVE_CORE"|"EKS_AUDIT"|"ASFF_SECURITYHUB_FINDING", array<"STARTED"|"STOPPED"|"DISABLED", array{Timestamp?:int|string|\DateTimeInterface}>>}>, UnprocessedAccounts?:array<array{AccountId?:string, Reason?:string}>}>
     */
    public function batchGetGraphMemberDatasourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GraphArns:array<string>} $args
     * @return \AWS\Result<array{MembershipDatasources?:array<array{AccountId?:string, GraphArn?:string, DatasourcePackageIngestHistory?:array<"DETECTIVE_CORE"|"EKS_AUDIT"|"ASFF_SECURITYHUB_FINDING", array<"STARTED"|"STOPPED"|"DISABLED", array{Timestamp?:int|string|\DateTimeInterface}>>}>, UnprocessedGraphs?:array<array{GraphArn?:string, Reason?:string}>}>
     */
    public function batchGetMembershipDatasources(array $args): \AWS\Result { }

    /**
     * @param array{GraphArns:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{MembershipDatasources?:array<array{AccountId?:string, GraphArn?:string, DatasourcePackageIngestHistory?:array<"DETECTIVE_CORE"|"EKS_AUDIT"|"ASFF_SECURITYHUB_FINDING", array<"STARTED"|"STOPPED"|"DISABLED", array{Timestamp?:int|string|\DateTimeInterface}>>}>, UnprocessedGraphs?:array<array{GraphArn?:string, Reason?:string}>}>
     */
    public function batchGetMembershipDatasourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Tags?:array<string, string>} $args
     * @return \AWS\Result<array{GraphArn?:string}>
     */
    public function createGraph(array $args = []): \AWS\Result { }

    /**
     * @param array{Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{GraphArn?:string}>
     */
    public function createGraphAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GraphArn:string, Message?:string, DisableEmailNotification?:bool, Accounts:array<array{AccountId:string, EmailAddress:string}>} $args
     * @return \AWS\Result<array{Members?:array<array{AccountId?:string, EmailAddress?:string, GraphArn?:string, MasterId?:string, AdministratorId?:string, Status?:"INVITED"|"VERIFICATION_IN_PROGRESS"|"VERIFICATION_FAILED"|"ENABLED"|"ACCEPTED_BUT_DISABLED", DisabledReason?:"VOLUME_TOO_HIGH"|"VOLUME_UNKNOWN", InvitedTime?:int|string|\DateTimeInterface, UpdatedTime?:int|string|\DateTimeInterface, VolumeUsageInBytes?:int, VolumeUsageUpdatedTime?:int|string|\DateTimeInterface, PercentOfGraphUtilization?:float, PercentOfGraphUtilizationUpdatedTime?:int|string|\DateTimeInterface, InvitationType?:"INVITATION"|"ORGANIZATION", VolumeUsageByDatasourcePackage?:array<"DETECTIVE_CORE"|"EKS_AUDIT"|"ASFF_SECURITYHUB_FINDING", array{VolumeUsageInBytes?:int, VolumeUsageUpdateTime?:int|string|\DateTimeInterface}>, DatasourcePackageIngestStates?:array<"DETECTIVE_CORE"|"EKS_AUDIT"|"ASFF_SECURITYHUB_FINDING", "STARTED"|"STOPPED"|"DISABLED">}>, UnprocessedAccounts?:array<array{AccountId?:string, Reason?:string}>}>
     */
    public function createMembers(array $args): \AWS\Result { }

    /**
     * @param array{GraphArn:string, Message?:string, DisableEmailNotification?:bool, Accounts:array<array{AccountId:string, EmailAddress:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Members?:array<array{AccountId?:string, EmailAddress?:string, GraphArn?:string, MasterId?:string, AdministratorId?:string, Status?:"INVITED"|"VERIFICATION_IN_PROGRESS"|"VERIFICATION_FAILED"|"ENABLED"|"ACCEPTED_BUT_DISABLED", DisabledReason?:"VOLUME_TOO_HIGH"|"VOLUME_UNKNOWN", InvitedTime?:int|string|\DateTimeInterface, UpdatedTime?:int|string|\DateTimeInterface, VolumeUsageInBytes?:int, VolumeUsageUpdatedTime?:int|string|\DateTimeInterface, PercentOfGraphUtilization?:float, PercentOfGraphUtilizationUpdatedTime?:int|string|\DateTimeInterface, InvitationType?:"INVITATION"|"ORGANIZATION", VolumeUsageByDatasourcePackage?:array<"DETECTIVE_CORE"|"EKS_AUDIT"|"ASFF_SECURITYHUB_FINDING", array{VolumeUsageInBytes?:int, VolumeUsageUpdateTime?:int|string|\DateTimeInterface}>, DatasourcePackageIngestStates?:array<"DETECTIVE_CORE"|"EKS_AUDIT"|"ASFF_SECURITYHUB_FINDING", "STARTED"|"STOPPED"|"DISABLED">}>, UnprocessedAccounts?:array<array{AccountId?:string, Reason?:string}>}>
     */
    public function createMembersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GraphArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteGraph(array $args): \AWS\Result { }

    /**
     * @param array{GraphArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteGraphAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GraphArn:string, AccountIds:array<string>} $args
     * @return \AWS\Result<array{AccountIds?:array<string>, UnprocessedAccounts?:array<array{AccountId?:string, Reason?:string}>}>
     */
    public function deleteMembers(array $args): \AWS\Result { }

    /**
     * @param array{GraphArn:string, AccountIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountIds?:array<string>, UnprocessedAccounts?:array<array{AccountId?:string, Reason?:string}>}>
     */
    public function deleteMembersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GraphArn:string} $args
     * @return \AWS\Result<array{AutoEnable?:bool}>
     */
    public function describeOrganizationConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{GraphArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AutoEnable?:bool}>
     */
    public function describeOrganizationConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<void>
     */
    public function disableOrganizationAdminAccount(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disableOrganizationAdminAccountAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GraphArn:string} $args
     * @return \AWS\Result<void>
     */
    public function disassociateMembership(array $args): \AWS\Result { }

    /**
     * @param array{GraphArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disassociateMembershipAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string} $args
     * @return \AWS\Result<void>
     */
    public function enableOrganizationAdminAccount(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function enableOrganizationAdminAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GraphArn:string, InvestigationId:string} $args
     * @return \AWS\Result<array{GraphArn?:string, InvestigationId?:string, EntityArn?:string, EntityType?:"IAM_ROLE"|"IAM_USER", CreatedTime?:int|string|\DateTimeInterface, ScopeStartTime?:int|string|\DateTimeInterface, ScopeEndTime?:int|string|\DateTimeInterface, Status?:"RUNNING"|"FAILED"|"SUCCESSFUL", Severity?:"INFORMATIONAL"|"LOW"|"MEDIUM"|"HIGH"|"CRITICAL", State?:"ACTIVE"|"ARCHIVED"}>
     */
    public function getInvestigation(array $args): \AWS\Result { }

    /**
     * @param array{GraphArn:string, InvestigationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GraphArn?:string, InvestigationId?:string, EntityArn?:string, EntityType?:"IAM_ROLE"|"IAM_USER", CreatedTime?:int|string|\DateTimeInterface, ScopeStartTime?:int|string|\DateTimeInterface, ScopeEndTime?:int|string|\DateTimeInterface, Status?:"RUNNING"|"FAILED"|"SUCCESSFUL", Severity?:"INFORMATIONAL"|"LOW"|"MEDIUM"|"HIGH"|"CRITICAL", State?:"ACTIVE"|"ARCHIVED"}>
     */
    public function getInvestigationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GraphArn:string, AccountIds:array<string>} $args
     * @return \AWS\Result<array{MemberDetails?:array<array{AccountId?:string, EmailAddress?:string, GraphArn?:string, MasterId?:string, AdministratorId?:string, Status?:"INVITED"|"VERIFICATION_IN_PROGRESS"|"VERIFICATION_FAILED"|"ENABLED"|"ACCEPTED_BUT_DISABLED", DisabledReason?:"VOLUME_TOO_HIGH"|"VOLUME_UNKNOWN", InvitedTime?:int|string|\DateTimeInterface, UpdatedTime?:int|string|\DateTimeInterface, VolumeUsageInBytes?:int, VolumeUsageUpdatedTime?:int|string|\DateTimeInterface, PercentOfGraphUtilization?:float, PercentOfGraphUtilizationUpdatedTime?:int|string|\DateTimeInterface, InvitationType?:"INVITATION"|"ORGANIZATION", VolumeUsageByDatasourcePackage?:array<"DETECTIVE_CORE"|"EKS_AUDIT"|"ASFF_SECURITYHUB_FINDING", array{VolumeUsageInBytes?:int, VolumeUsageUpdateTime?:int|string|\DateTimeInterface}>, DatasourcePackageIngestStates?:array<"DETECTIVE_CORE"|"EKS_AUDIT"|"ASFF_SECURITYHUB_FINDING", "STARTED"|"STOPPED"|"DISABLED">}>, UnprocessedAccounts?:array<array{AccountId?:string, Reason?:string}>}>
     */
    public function getMembers(array $args): \AWS\Result { }

    /**
     * @param array{GraphArn:string, AccountIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{MemberDetails?:array<array{AccountId?:string, EmailAddress?:string, GraphArn?:string, MasterId?:string, AdministratorId?:string, Status?:"INVITED"|"VERIFICATION_IN_PROGRESS"|"VERIFICATION_FAILED"|"ENABLED"|"ACCEPTED_BUT_DISABLED", DisabledReason?:"VOLUME_TOO_HIGH"|"VOLUME_UNKNOWN", InvitedTime?:int|string|\DateTimeInterface, UpdatedTime?:int|string|\DateTimeInterface, VolumeUsageInBytes?:int, VolumeUsageUpdatedTime?:int|string|\DateTimeInterface, PercentOfGraphUtilization?:float, PercentOfGraphUtilizationUpdatedTime?:int|string|\DateTimeInterface, InvitationType?:"INVITATION"|"ORGANIZATION", VolumeUsageByDatasourcePackage?:array<"DETECTIVE_CORE"|"EKS_AUDIT"|"ASFF_SECURITYHUB_FINDING", array{VolumeUsageInBytes?:int, VolumeUsageUpdateTime?:int|string|\DateTimeInterface}>, DatasourcePackageIngestStates?:array<"DETECTIVE_CORE"|"EKS_AUDIT"|"ASFF_SECURITYHUB_FINDING", "STARTED"|"STOPPED"|"DISABLED">}>, UnprocessedAccounts?:array<array{AccountId?:string, Reason?:string}>}>
     */
    public function getMembersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GraphArn:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{DatasourcePackages?:array<"DETECTIVE_CORE"|"EKS_AUDIT"|"ASFF_SECURITYHUB_FINDING", array{DatasourcePackageIngestState?:"STARTED"|"STOPPED"|"DISABLED", LastIngestStateChange?:array<"STARTED"|"STOPPED"|"DISABLED", array{Timestamp?:int|string|\DateTimeInterface}>}>, NextToken?:string}>
     */
    public function listDatasourcePackages(array $args): \AWS\Result { }

    /**
     * @param array{GraphArn:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{DatasourcePackages?:array<"DETECTIVE_CORE"|"EKS_AUDIT"|"ASFF_SECURITYHUB_FINDING", array{DatasourcePackageIngestState?:"STARTED"|"STOPPED"|"DISABLED", LastIngestStateChange?:array<"STARTED"|"STOPPED"|"DISABLED", array{Timestamp?:int|string|\DateTimeInterface}>}>, NextToken?:string}>
     */
    public function listDatasourcePackagesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{GraphList?:array<array{Arn?:string, CreatedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listGraphs(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{GraphList?:array<array{Arn?:string, CreatedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listGraphsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GraphArn:string, InvestigationId:string, IndicatorType?:"TTP_OBSERVED"|"IMPOSSIBLE_TRAVEL"|"FLAGGED_IP_ADDRESS"|"NEW_GEOLOCATION"|"NEW_ASO"|"NEW_USER_AGENT"|"RELATED_FINDING"|"RELATED_FINDING_GROUP", NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{GraphArn?:string, InvestigationId?:string, NextToken?:string, Indicators?:array<array{IndicatorType?:"TTP_OBSERVED"|"IMPOSSIBLE_TRAVEL"|"FLAGGED_IP_ADDRESS"|"NEW_GEOLOCATION"|"NEW_ASO"|"NEW_USER_AGENT"|"RELATED_FINDING"|"RELATED_FINDING_GROUP", IndicatorDetail?:array{TTPsObservedDetail?:array{Tactic?:string, Technique?:string, Procedure?:string, IpAddress?:string, APIName?:string, APISuccessCount?:int, APIFailureCount?:int}, ImpossibleTravelDetail?:array{StartingIpAddress?:string, EndingIpAddress?:string, StartingLocation?:string, EndingLocation?:string, HourlyTimeDelta?:int}, FlaggedIpAddressDetail?:array{IpAddress?:string, Reason?:"AWS_THREAT_INTELLIGENCE"}, NewGeolocationDetail?:array{Location?:string, IpAddress?:string, IsNewForEntireAccount?:bool}, NewAsoDetail?:array{Aso?:string, IsNewForEntireAccount?:bool}, NewUserAgentDetail?:array{UserAgent?:string, IsNewForEntireAccount?:bool}, RelatedFindingDetail?:array{Arn?:string, Type?:string, IpAddress?:string}, RelatedFindingGroupDetail?:array{Id?:string}}}>}>
     */
    public function listIndicators(array $args): \AWS\Result { }

    /**
     * @param array{GraphArn:string, InvestigationId:string, IndicatorType?:"TTP_OBSERVED"|"IMPOSSIBLE_TRAVEL"|"FLAGGED_IP_ADDRESS"|"NEW_GEOLOCATION"|"NEW_ASO"|"NEW_USER_AGENT"|"RELATED_FINDING"|"RELATED_FINDING_GROUP", NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{GraphArn?:string, InvestigationId?:string, NextToken?:string, Indicators?:array<array{IndicatorType?:"TTP_OBSERVED"|"IMPOSSIBLE_TRAVEL"|"FLAGGED_IP_ADDRESS"|"NEW_GEOLOCATION"|"NEW_ASO"|"NEW_USER_AGENT"|"RELATED_FINDING"|"RELATED_FINDING_GROUP", IndicatorDetail?:array{TTPsObservedDetail?:array{Tactic?:string, Technique?:string, Procedure?:string, IpAddress?:string, APIName?:string, APISuccessCount?:int, APIFailureCount?:int}, ImpossibleTravelDetail?:array{StartingIpAddress?:string, EndingIpAddress?:string, StartingLocation?:string, EndingLocation?:string, HourlyTimeDelta?:int}, FlaggedIpAddressDetail?:array{IpAddress?:string, Reason?:"AWS_THREAT_INTELLIGENCE"}, NewGeolocationDetail?:array{Location?:string, IpAddress?:string, IsNewForEntireAccount?:bool}, NewAsoDetail?:array{Aso?:string, IsNewForEntireAccount?:bool}, NewUserAgentDetail?:array{UserAgent?:string, IsNewForEntireAccount?:bool}, RelatedFindingDetail?:array{Arn?:string, Type?:string, IpAddress?:string}, RelatedFindingGroupDetail?:array{Id?:string}}}>}>
     */
    public function listIndicatorsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GraphArn:string, NextToken?:string, MaxResults?:int, FilterCriteria?:array{Severity?:array{Value:string}, Status?:array{Value:string}, State?:array{Value:string}, EntityArn?:array{Value:string}, CreatedTime?:array{StartInclusive:int|string|\DateTimeInterface, EndInclusive:int|string|\DateTimeInterface}}, SortCriteria?:array{Field?:"SEVERITY"|"STATUS"|"CREATED_TIME", SortOrder?:"ASC"|"DESC"}} $args
     * @return \AWS\Result<array{InvestigationDetails?:array<array{InvestigationId?:string, Severity?:"INFORMATIONAL"|"LOW"|"MEDIUM"|"HIGH"|"CRITICAL", Status?:"RUNNING"|"FAILED"|"SUCCESSFUL", State?:"ACTIVE"|"ARCHIVED", CreatedTime?:int|string|\DateTimeInterface, EntityArn?:string, EntityType?:"IAM_ROLE"|"IAM_USER"}>, NextToken?:string}>
     */
    public function listInvestigations(array $args): \AWS\Result { }

    /**
     * @param array{GraphArn:string, NextToken?:string, MaxResults?:int, FilterCriteria?:array{Severity?:array{Value:string}, Status?:array{Value:string}, State?:array{Value:string}, EntityArn?:array{Value:string}, CreatedTime?:array{StartInclusive:int|string|\DateTimeInterface, EndInclusive:int|string|\DateTimeInterface}}, SortCriteria?:array{Field?:"SEVERITY"|"STATUS"|"CREATED_TIME", SortOrder?:"ASC"|"DESC"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{InvestigationDetails?:array<array{InvestigationId?:string, Severity?:"INFORMATIONAL"|"LOW"|"MEDIUM"|"HIGH"|"CRITICAL", Status?:"RUNNING"|"FAILED"|"SUCCESSFUL", State?:"ACTIVE"|"ARCHIVED", CreatedTime?:int|string|\DateTimeInterface, EntityArn?:string, EntityType?:"IAM_ROLE"|"IAM_USER"}>, NextToken?:string}>
     */
    public function listInvestigationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Invitations?:array<array{AccountId?:string, EmailAddress?:string, GraphArn?:string, MasterId?:string, AdministratorId?:string, Status?:"INVITED"|"VERIFICATION_IN_PROGRESS"|"VERIFICATION_FAILED"|"ENABLED"|"ACCEPTED_BUT_DISABLED", DisabledReason?:"VOLUME_TOO_HIGH"|"VOLUME_UNKNOWN", InvitedTime?:int|string|\DateTimeInterface, UpdatedTime?:int|string|\DateTimeInterface, VolumeUsageInBytes?:int, VolumeUsageUpdatedTime?:int|string|\DateTimeInterface, PercentOfGraphUtilization?:float, PercentOfGraphUtilizationUpdatedTime?:int|string|\DateTimeInterface, InvitationType?:"INVITATION"|"ORGANIZATION", VolumeUsageByDatasourcePackage?:array<"DETECTIVE_CORE"|"EKS_AUDIT"|"ASFF_SECURITYHUB_FINDING", array{VolumeUsageInBytes?:int, VolumeUsageUpdateTime?:int|string|\DateTimeInterface}>, DatasourcePackageIngestStates?:array<"DETECTIVE_CORE"|"EKS_AUDIT"|"ASFF_SECURITYHUB_FINDING", "STARTED"|"STOPPED"|"DISABLED">}>, NextToken?:string}>
     */
    public function listInvitations(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Invitations?:array<array{AccountId?:string, EmailAddress?:string, GraphArn?:string, MasterId?:string, AdministratorId?:string, Status?:"INVITED"|"VERIFICATION_IN_PROGRESS"|"VERIFICATION_FAILED"|"ENABLED"|"ACCEPTED_BUT_DISABLED", DisabledReason?:"VOLUME_TOO_HIGH"|"VOLUME_UNKNOWN", InvitedTime?:int|string|\DateTimeInterface, UpdatedTime?:int|string|\DateTimeInterface, VolumeUsageInBytes?:int, VolumeUsageUpdatedTime?:int|string|\DateTimeInterface, PercentOfGraphUtilization?:float, PercentOfGraphUtilizationUpdatedTime?:int|string|\DateTimeInterface, InvitationType?:"INVITATION"|"ORGANIZATION", VolumeUsageByDatasourcePackage?:array<"DETECTIVE_CORE"|"EKS_AUDIT"|"ASFF_SECURITYHUB_FINDING", array{VolumeUsageInBytes?:int, VolumeUsageUpdateTime?:int|string|\DateTimeInterface}>, DatasourcePackageIngestStates?:array<"DETECTIVE_CORE"|"EKS_AUDIT"|"ASFF_SECURITYHUB_FINDING", "STARTED"|"STOPPED"|"DISABLED">}>, NextToken?:string}>
     */
    public function listInvitationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GraphArn:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{MemberDetails?:array<array{AccountId?:string, EmailAddress?:string, GraphArn?:string, MasterId?:string, AdministratorId?:string, Status?:"INVITED"|"VERIFICATION_IN_PROGRESS"|"VERIFICATION_FAILED"|"ENABLED"|"ACCEPTED_BUT_DISABLED", DisabledReason?:"VOLUME_TOO_HIGH"|"VOLUME_UNKNOWN", InvitedTime?:int|string|\DateTimeInterface, UpdatedTime?:int|string|\DateTimeInterface, VolumeUsageInBytes?:int, VolumeUsageUpdatedTime?:int|string|\DateTimeInterface, PercentOfGraphUtilization?:float, PercentOfGraphUtilizationUpdatedTime?:int|string|\DateTimeInterface, InvitationType?:"INVITATION"|"ORGANIZATION", VolumeUsageByDatasourcePackage?:array<"DETECTIVE_CORE"|"EKS_AUDIT"|"ASFF_SECURITYHUB_FINDING", array{VolumeUsageInBytes?:int, VolumeUsageUpdateTime?:int|string|\DateTimeInterface}>, DatasourcePackageIngestStates?:array<"DETECTIVE_CORE"|"EKS_AUDIT"|"ASFF_SECURITYHUB_FINDING", "STARTED"|"STOPPED"|"DISABLED">}>, NextToken?:string}>
     */
    public function listMembers(array $args): \AWS\Result { }

    /**
     * @param array{GraphArn:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{MemberDetails?:array<array{AccountId?:string, EmailAddress?:string, GraphArn?:string, MasterId?:string, AdministratorId?:string, Status?:"INVITED"|"VERIFICATION_IN_PROGRESS"|"VERIFICATION_FAILED"|"ENABLED"|"ACCEPTED_BUT_DISABLED", DisabledReason?:"VOLUME_TOO_HIGH"|"VOLUME_UNKNOWN", InvitedTime?:int|string|\DateTimeInterface, UpdatedTime?:int|string|\DateTimeInterface, VolumeUsageInBytes?:int, VolumeUsageUpdatedTime?:int|string|\DateTimeInterface, PercentOfGraphUtilization?:float, PercentOfGraphUtilizationUpdatedTime?:int|string|\DateTimeInterface, InvitationType?:"INVITATION"|"ORGANIZATION", VolumeUsageByDatasourcePackage?:array<"DETECTIVE_CORE"|"EKS_AUDIT"|"ASFF_SECURITYHUB_FINDING", array{VolumeUsageInBytes?:int, VolumeUsageUpdateTime?:int|string|\DateTimeInterface}>, DatasourcePackageIngestStates?:array<"DETECTIVE_CORE"|"EKS_AUDIT"|"ASFF_SECURITYHUB_FINDING", "STARTED"|"STOPPED"|"DISABLED">}>, NextToken?:string}>
     */
    public function listMembersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Administrators?:array<array{AccountId?:string, GraphArn?:string, DelegationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listOrganizationAdminAccounts(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Administrators?:array<array{AccountId?:string, GraphArn?:string, DelegationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listOrganizationAdminAccountsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{Tags?:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GraphArn:string} $args
     * @return \AWS\Result<void>
     */
    public function rejectInvitation(array $args): \AWS\Result { }

    /**
     * @param array{GraphArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function rejectInvitationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GraphArn:string, EntityArn:string, ScopeStartTime:int|string|\DateTimeInterface, ScopeEndTime:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{InvestigationId?:string}>
     */
    public function startInvestigation(array $args): \AWS\Result { }

    /**
     * @param array{GraphArn:string, EntityArn:string, ScopeStartTime:int|string|\DateTimeInterface, ScopeEndTime:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{InvestigationId?:string}>
     */
    public function startInvestigationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GraphArn:string, AccountId:string} $args
     * @return \AWS\Result<void>
     */
    public function startMonitoringMember(array $args): \AWS\Result { }

    /**
     * @param array{GraphArn:string, AccountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function startMonitoringMemberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Tags:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Tags:array<string, string>} $args
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
     * @param array{GraphArn:string, DatasourcePackages:array<"DETECTIVE_CORE"|"EKS_AUDIT"|"ASFF_SECURITYHUB_FINDING">} $args
     * @return \AWS\Result<void>
     */
    public function updateDatasourcePackages(array $args): \AWS\Result { }

    /**
     * @param array{GraphArn:string, DatasourcePackages:array<"DETECTIVE_CORE"|"EKS_AUDIT"|"ASFF_SECURITYHUB_FINDING">} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateDatasourcePackagesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GraphArn:string, InvestigationId:string, State:"ACTIVE"|"ARCHIVED"} $args
     * @return \AWS\Result<void>
     */
    public function updateInvestigationState(array $args): \AWS\Result { }

    /**
     * @param array{GraphArn:string, InvestigationId:string, State:"ACTIVE"|"ARCHIVED"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateInvestigationStateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GraphArn:string, AutoEnable?:bool} $args
     * @return \AWS\Result<void>
     */
    public function updateOrganizationConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{GraphArn:string, AutoEnable?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateOrganizationConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
