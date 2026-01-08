<?php
namespace AWS\GuardDuty;

class GuardDutyClient
{
    /**
     * @param array{DetectorId:string, AdministratorId:string, InvitationId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function acceptAdministratorInvitation(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, AdministratorId:string, InvitationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function acceptAdministratorInvitationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, MasterId:string, InvitationId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function acceptInvitation(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, MasterId:string, InvitationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function acceptInvitationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, FindingIds:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function archiveFindings(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, FindingIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function archiveFindingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Enable:bool, ClientToken?:string, FindingPublishingFrequency?:"FIFTEEN_MINUTES"|"ONE_HOUR"|"SIX_HOURS", DataSources?:array{S3Logs?:array{Enable:bool}, Kubernetes?:array{AuditLogs:array{Enable:bool}}, MalwareProtection?:array{ScanEc2InstanceWithFindings?:array{EbsVolumes?:bool}}}, Tags?:array<string, string>, Features?:array<array{Name?:"S3_DATA_EVENTS"|"EKS_AUDIT_LOGS"|"EBS_MALWARE_PROTECTION"|"RDS_LOGIN_EVENTS"|"EKS_RUNTIME_MONITORING"|"LAMBDA_NETWORK_LOGS"|"RUNTIME_MONITORING", Status?:"ENABLED"|"DISABLED", AdditionalConfiguration?:array<array{Name?:"EKS_ADDON_MANAGEMENT"|"ECS_FARGATE_AGENT_MANAGEMENT"|"EC2_AGENT_MANAGEMENT", Status?:"ENABLED"|"DISABLED"}>}>} $args
     * @return \AWS\Result<array{DetectorId?:string, UnprocessedDataSources?:array{MalwareProtection?:array{ScanEc2InstanceWithFindings?:array{EbsVolumes?:array{Status?:"ENABLED"|"DISABLED", Reason?:string}}, ServiceRole?:string}}}>
     */
    public function createDetector(array $args): \AWS\Result { }

    /**
     * @param array{Enable:bool, ClientToken?:string, FindingPublishingFrequency?:"FIFTEEN_MINUTES"|"ONE_HOUR"|"SIX_HOURS", DataSources?:array{S3Logs?:array{Enable:bool}, Kubernetes?:array{AuditLogs:array{Enable:bool}}, MalwareProtection?:array{ScanEc2InstanceWithFindings?:array{EbsVolumes?:bool}}}, Tags?:array<string, string>, Features?:array<array{Name?:"S3_DATA_EVENTS"|"EKS_AUDIT_LOGS"|"EBS_MALWARE_PROTECTION"|"RDS_LOGIN_EVENTS"|"EKS_RUNTIME_MONITORING"|"LAMBDA_NETWORK_LOGS"|"RUNTIME_MONITORING", Status?:"ENABLED"|"DISABLED", AdditionalConfiguration?:array<array{Name?:"EKS_ADDON_MANAGEMENT"|"ECS_FARGATE_AGENT_MANAGEMENT"|"EC2_AGENT_MANAGEMENT", Status?:"ENABLED"|"DISABLED"}>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DetectorId?:string, UnprocessedDataSources?:array{MalwareProtection?:array{ScanEc2InstanceWithFindings?:array{EbsVolumes?:array{Status?:"ENABLED"|"DISABLED", Reason?:string}}, ServiceRole?:string}}}>
     */
    public function createDetectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, Name:string, Description?:string, Action?:"NOOP"|"ARCHIVE", Rank?:int, FindingCriteria:array{Criterion?:array<string, array{Eq?:array<string>, Neq?:array<string>, Gt?:int, Gte?:int, Lt?:int, Lte?:int, Equals?:array<string>, NotEquals?:array<string>, GreaterThan?:int, GreaterThanOrEqual?:int, LessThan?:int, LessThanOrEqual?:int}>}, ClientToken?:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Name:string}>
     */
    public function createFilter(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, Name:string, Description?:string, Action?:"NOOP"|"ARCHIVE", Rank?:int, FindingCriteria:array{Criterion?:array<string, array{Eq?:array<string>, Neq?:array<string>, Gt?:int, Gte?:int, Lt?:int, Lte?:int, Equals?:array<string>, NotEquals?:array<string>, GreaterThan?:int, GreaterThanOrEqual?:int, LessThan?:int, LessThanOrEqual?:int}>}, ClientToken?:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name:string}>
     */
    public function createFilterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, Name:string, Format:"TXT"|"STIX"|"OTX_CSV"|"ALIEN_VAULT"|"PROOF_POINT"|"FIRE_EYE", Location:string, Activate:bool, ClientToken?:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{IpSetId:string}>
     */
    public function createIPSet(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, Name:string, Format:"TXT"|"STIX"|"OTX_CSV"|"ALIEN_VAULT"|"PROOF_POINT"|"FIRE_EYE", Location:string, Activate:bool, ClientToken?:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{IpSetId:string}>
     */
    public function createIPSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, Role:string, ProtectedResource:array{S3Bucket?:array{BucketName?:string, ObjectPrefixes?:array<string>}}, Actions?:array{Tagging?:array{Status?:"ENABLED"|"DISABLED"}}, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{MalwareProtectionPlanId?:string}>
     */
    public function createMalwareProtectionPlan(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, Role:string, ProtectedResource:array{S3Bucket?:array{BucketName?:string, ObjectPrefixes?:array<string>}}, Actions?:array{Tagging?:array{Status?:"ENABLED"|"DISABLED"}}, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{MalwareProtectionPlanId?:string}>
     */
    public function createMalwareProtectionPlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, AccountDetails:array<array{AccountId:string, Email:string}>} $args
     * @return \AWS\Result<array{UnprocessedAccounts:array<array{AccountId:string, Result:string}>}>
     */
    public function createMembers(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, AccountDetails:array<array{AccountId:string, Email:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{UnprocessedAccounts:array<array{AccountId:string, Result:string}>}>
     */
    public function createMembersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, DestinationType:"S3", DestinationProperties:array{DestinationArn?:string, KmsKeyArn?:string}, ClientToken?:string} $args
     * @return \AWS\Result<array{DestinationId:string}>
     */
    public function createPublishingDestination(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, DestinationType:"S3", DestinationProperties:array{DestinationArn?:string, KmsKeyArn?:string}, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DestinationId:string}>
     */
    public function createPublishingDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, FindingTypes?:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function createSampleFindings(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, FindingTypes?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createSampleFindingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, Name:string, Format:"TXT"|"STIX"|"OTX_CSV"|"ALIEN_VAULT"|"PROOF_POINT"|"FIRE_EYE", Location:string, Activate:bool, ClientToken?:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{ThreatIntelSetId:string}>
     */
    public function createThreatIntelSet(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, Name:string, Format:"TXT"|"STIX"|"OTX_CSV"|"ALIEN_VAULT"|"PROOF_POINT"|"FIRE_EYE", Location:string, Activate:bool, ClientToken?:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ThreatIntelSetId:string}>
     */
    public function createThreatIntelSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountIds:array<string>} $args
     * @return \AWS\Result<array{UnprocessedAccounts:array<array{AccountId:string, Result:string}>}>
     */
    public function declineInvitations(array $args): \AWS\Result { }

    /**
     * @param array{AccountIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{UnprocessedAccounts:array<array{AccountId:string, Result:string}>}>
     */
    public function declineInvitationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteDetector(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteDetectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, FilterName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteFilter(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, FilterName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteFilterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, IpSetId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteIPSet(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, IpSetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteIPSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountIds:array<string>} $args
     * @return \AWS\Result<array{UnprocessedAccounts:array<array{AccountId:string, Result:string}>}>
     */
    public function deleteInvitations(array $args): \AWS\Result { }

    /**
     * @param array{AccountIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{UnprocessedAccounts:array<array{AccountId:string, Result:string}>}>
     */
    public function deleteInvitationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MalwareProtectionPlanId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteMalwareProtectionPlan(array $args): \AWS\Result { }

    /**
     * @param array{MalwareProtectionPlanId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteMalwareProtectionPlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, AccountIds:array<string>} $args
     * @return \AWS\Result<array{UnprocessedAccounts:array<array{AccountId:string, Result:string}>}>
     */
    public function deleteMembers(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, AccountIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{UnprocessedAccounts:array<array{AccountId:string, Result:string}>}>
     */
    public function deleteMembersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, DestinationId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deletePublishingDestination(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, DestinationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deletePublishingDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, ThreatIntelSetId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteThreatIntelSet(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, ThreatIntelSetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteThreatIntelSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, NextToken?:string, MaxResults?:int, FilterCriteria?:array{FilterCriterion?:array<array{CriterionKey?:"EC2_INSTANCE_ARN"|"SCAN_ID"|"ACCOUNT_ID"|"GUARDDUTY_FINDING_ID"|"SCAN_START_TIME"|"SCAN_STATUS"|"SCAN_TYPE", FilterCondition?:array{EqualsValue?:string, GreaterThan?:int, LessThan?:int}}>}, SortCriteria?:array{AttributeName?:string, OrderBy?:"ASC"|"DESC"}} $args
     * @return \AWS\Result<array{Scans:array<array{DetectorId?:string, AdminDetectorId?:string, ScanId?:string, ScanStatus?:"RUNNING"|"COMPLETED"|"FAILED"|"SKIPPED", FailureReason?:string, ScanStartTime?:int|string|\DateTimeInterface, ScanEndTime?:int|string|\DateTimeInterface, TriggerDetails?:array{GuardDutyFindingId?:string, Description?:string}, ResourceDetails?:array{InstanceArn?:string}, ScanResultDetails?:array{ScanResult?:"CLEAN"|"INFECTED"}, AccountId?:string, TotalBytes?:int, FileCount?:int, AttachedVolumes?:array<array{VolumeArn?:string, VolumeType?:string, DeviceName?:string, VolumeSizeInGB?:int, EncryptionType?:string, SnapshotArn?:string, KmsKeyArn?:string}>, ScanType?:"GUARDDUTY_INITIATED"|"ON_DEMAND"}>, NextToken?:string}>
     */
    public function describeMalwareScans(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, NextToken?:string, MaxResults?:int, FilterCriteria?:array{FilterCriterion?:array<array{CriterionKey?:"EC2_INSTANCE_ARN"|"SCAN_ID"|"ACCOUNT_ID"|"GUARDDUTY_FINDING_ID"|"SCAN_START_TIME"|"SCAN_STATUS"|"SCAN_TYPE", FilterCondition?:array{EqualsValue?:string, GreaterThan?:int, LessThan?:int}}>}, SortCriteria?:array{AttributeName?:string, OrderBy?:"ASC"|"DESC"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Scans:array<array{DetectorId?:string, AdminDetectorId?:string, ScanId?:string, ScanStatus?:"RUNNING"|"COMPLETED"|"FAILED"|"SKIPPED", FailureReason?:string, ScanStartTime?:int|string|\DateTimeInterface, ScanEndTime?:int|string|\DateTimeInterface, TriggerDetails?:array{GuardDutyFindingId?:string, Description?:string}, ResourceDetails?:array{InstanceArn?:string}, ScanResultDetails?:array{ScanResult?:"CLEAN"|"INFECTED"}, AccountId?:string, TotalBytes?:int, FileCount?:int, AttachedVolumes?:array<array{VolumeArn?:string, VolumeType?:string, DeviceName?:string, VolumeSizeInGB?:int, EncryptionType?:string, SnapshotArn?:string, KmsKeyArn?:string}>, ScanType?:"GUARDDUTY_INITIATED"|"ON_DEMAND"}>, NextToken?:string}>
     */
    public function describeMalwareScansAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{AutoEnable?:bool, MemberAccountLimitReached:bool, DataSources?:array{S3Logs:array{AutoEnable:bool}, Kubernetes?:array{AuditLogs:array{AutoEnable:bool}}, MalwareProtection?:array{ScanEc2InstanceWithFindings?:array{EbsVolumes?:array{AutoEnable?:bool}}}}, Features?:array<array{Name?:"S3_DATA_EVENTS"|"EKS_AUDIT_LOGS"|"EBS_MALWARE_PROTECTION"|"RDS_LOGIN_EVENTS"|"EKS_RUNTIME_MONITORING"|"LAMBDA_NETWORK_LOGS"|"RUNTIME_MONITORING", AutoEnable?:"NEW"|"NONE"|"ALL", AdditionalConfiguration?:array<array{Name?:"EKS_ADDON_MANAGEMENT"|"ECS_FARGATE_AGENT_MANAGEMENT"|"EC2_AGENT_MANAGEMENT", AutoEnable?:"NEW"|"NONE"|"ALL"}>}>, NextToken?:string, AutoEnableOrganizationMembers?:"NEW"|"ALL"|"NONE"}>
     */
    public function describeOrganizationConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AutoEnable?:bool, MemberAccountLimitReached:bool, DataSources?:array{S3Logs:array{AutoEnable:bool}, Kubernetes?:array{AuditLogs:array{AutoEnable:bool}}, MalwareProtection?:array{ScanEc2InstanceWithFindings?:array{EbsVolumes?:array{AutoEnable?:bool}}}}, Features?:array<array{Name?:"S3_DATA_EVENTS"|"EKS_AUDIT_LOGS"|"EBS_MALWARE_PROTECTION"|"RDS_LOGIN_EVENTS"|"EKS_RUNTIME_MONITORING"|"LAMBDA_NETWORK_LOGS"|"RUNTIME_MONITORING", AutoEnable?:"NEW"|"NONE"|"ALL", AdditionalConfiguration?:array<array{Name?:"EKS_ADDON_MANAGEMENT"|"ECS_FARGATE_AGENT_MANAGEMENT"|"EC2_AGENT_MANAGEMENT", AutoEnable?:"NEW"|"NONE"|"ALL"}>}>, NextToken?:string, AutoEnableOrganizationMembers?:"NEW"|"ALL"|"NONE"}>
     */
    public function describeOrganizationConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, DestinationId:string} $args
     * @return \AWS\Result<array{DestinationId:string, DestinationType:"S3", Status:"PENDING_VERIFICATION"|"PUBLISHING"|"UNABLE_TO_PUBLISH_FIX_DESTINATION_PROPERTY"|"STOPPED", PublishingFailureStartTimestamp:int, DestinationProperties:array{DestinationArn?:string, KmsKeyArn?:string}}>
     */
    public function describePublishingDestination(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, DestinationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DestinationId:string, DestinationType:"S3", Status:"PENDING_VERIFICATION"|"PUBLISHING"|"UNABLE_TO_PUBLISH_FIX_DESTINATION_PROPERTY"|"STOPPED", PublishingFailureStartTimestamp:int, DestinationProperties:array{DestinationArn?:string, KmsKeyArn?:string}}>
     */
    public function describePublishingDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AdminAccountId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disableOrganizationAdminAccount(array $args): \AWS\Result { }

    /**
     * @param array{AdminAccountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disableOrganizationAdminAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateFromAdministratorAccount(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateFromAdministratorAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateFromMasterAccount(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateFromMasterAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, AccountIds:array<string>} $args
     * @return \AWS\Result<array{UnprocessedAccounts:array<array{AccountId:string, Result:string}>}>
     */
    public function disassociateMembers(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, AccountIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{UnprocessedAccounts:array<array{AccountId:string, Result:string}>}>
     */
    public function disassociateMembersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AdminAccountId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function enableOrganizationAdminAccount(array $args): \AWS\Result { }

    /**
     * @param array{AdminAccountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function enableOrganizationAdminAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string} $args
     * @return \AWS\Result<array{Administrator:array{AccountId?:string, InvitationId?:string, RelationshipStatus?:string, InvitedAt?:string}}>
     */
    public function getAdministratorAccount(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Administrator:array{AccountId?:string, InvitationId?:string, RelationshipStatus?:string, InvitedAt?:string}}>
     */
    public function getAdministratorAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, FilterCriteria?:array{FilterCriterion?:array<array{CriterionKey?:"ACCOUNT_ID"|"CLUSTER_NAME"|"RESOURCE_TYPE"|"COVERAGE_STATUS"|"ADDON_VERSION"|"MANAGEMENT_TYPE"|"EKS_CLUSTER_NAME"|"ECS_CLUSTER_NAME"|"AGENT_VERSION"|"INSTANCE_ID"|"CLUSTER_ARN", FilterCondition?:array{Equals?:array<string>, NotEquals?:array<string>}}>}, StatisticsType:array<"COUNT_BY_RESOURCE_TYPE"|"COUNT_BY_COVERAGE_STATUS">} $args
     * @return \AWS\Result<array{CoverageStatistics?:array{CountByResourceType?:array<"EKS"|"ECS"|"EC2", int>, CountByCoverageStatus?:array<"HEALTHY"|"UNHEALTHY", int>}}>
     */
    public function getCoverageStatistics(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, FilterCriteria?:array{FilterCriterion?:array<array{CriterionKey?:"ACCOUNT_ID"|"CLUSTER_NAME"|"RESOURCE_TYPE"|"COVERAGE_STATUS"|"ADDON_VERSION"|"MANAGEMENT_TYPE"|"EKS_CLUSTER_NAME"|"ECS_CLUSTER_NAME"|"AGENT_VERSION"|"INSTANCE_ID"|"CLUSTER_ARN", FilterCondition?:array{Equals?:array<string>, NotEquals?:array<string>}}>}, StatisticsType:array<"COUNT_BY_RESOURCE_TYPE"|"COUNT_BY_COVERAGE_STATUS">} $args
     * @return \GuzzleHttp\Promise\Promise<array{CoverageStatistics?:array{CountByResourceType?:array<"EKS"|"ECS"|"EC2", int>, CountByCoverageStatus?:array<"HEALTHY"|"UNHEALTHY", int>}}>
     */
    public function getCoverageStatisticsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string} $args
     * @return \AWS\Result<array{CreatedAt?:string, FindingPublishingFrequency?:"FIFTEEN_MINUTES"|"ONE_HOUR"|"SIX_HOURS", ServiceRole:string, Status:"ENABLED"|"DISABLED", UpdatedAt?:string, DataSources?:array{CloudTrail:array{Status:"ENABLED"|"DISABLED"}, DNSLogs:array{Status:"ENABLED"|"DISABLED"}, FlowLogs:array{Status:"ENABLED"|"DISABLED"}, S3Logs:array{Status:"ENABLED"|"DISABLED"}, Kubernetes?:array{AuditLogs:array{Status:"ENABLED"|"DISABLED"}}, MalwareProtection?:array{ScanEc2InstanceWithFindings?:array{EbsVolumes?:array{Status?:"ENABLED"|"DISABLED", Reason?:string}}, ServiceRole?:string}}, Tags?:array<string, string>, Features?:array<array{Name?:"FLOW_LOGS"|"CLOUD_TRAIL"|"DNS_LOGS"|"S3_DATA_EVENTS"|"EKS_AUDIT_LOGS"|"EBS_MALWARE_PROTECTION"|"RDS_LOGIN_EVENTS"|"EKS_RUNTIME_MONITORING"|"LAMBDA_NETWORK_LOGS"|"RUNTIME_MONITORING", Status?:"ENABLED"|"DISABLED", UpdatedAt?:int|string|\DateTimeInterface, AdditionalConfiguration?:array<array{Name?:"EKS_ADDON_MANAGEMENT"|"ECS_FARGATE_AGENT_MANAGEMENT"|"EC2_AGENT_MANAGEMENT", Status?:"ENABLED"|"DISABLED", UpdatedAt?:int|string|\DateTimeInterface}>}>}>
     */
    public function getDetector(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CreatedAt?:string, FindingPublishingFrequency?:"FIFTEEN_MINUTES"|"ONE_HOUR"|"SIX_HOURS", ServiceRole:string, Status:"ENABLED"|"DISABLED", UpdatedAt?:string, DataSources?:array{CloudTrail:array{Status:"ENABLED"|"DISABLED"}, DNSLogs:array{Status:"ENABLED"|"DISABLED"}, FlowLogs:array{Status:"ENABLED"|"DISABLED"}, S3Logs:array{Status:"ENABLED"|"DISABLED"}, Kubernetes?:array{AuditLogs:array{Status:"ENABLED"|"DISABLED"}}, MalwareProtection?:array{ScanEc2InstanceWithFindings?:array{EbsVolumes?:array{Status?:"ENABLED"|"DISABLED", Reason?:string}}, ServiceRole?:string}}, Tags?:array<string, string>, Features?:array<array{Name?:"FLOW_LOGS"|"CLOUD_TRAIL"|"DNS_LOGS"|"S3_DATA_EVENTS"|"EKS_AUDIT_LOGS"|"EBS_MALWARE_PROTECTION"|"RDS_LOGIN_EVENTS"|"EKS_RUNTIME_MONITORING"|"LAMBDA_NETWORK_LOGS"|"RUNTIME_MONITORING", Status?:"ENABLED"|"DISABLED", UpdatedAt?:int|string|\DateTimeInterface, AdditionalConfiguration?:array<array{Name?:"EKS_ADDON_MANAGEMENT"|"ECS_FARGATE_AGENT_MANAGEMENT"|"EC2_AGENT_MANAGEMENT", Status?:"ENABLED"|"DISABLED", UpdatedAt?:int|string|\DateTimeInterface}>}>}>
     */
    public function getDetectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, FilterName:string} $args
     * @return \AWS\Result<array{Name:string, Description?:string, Action:"NOOP"|"ARCHIVE", Rank?:int, FindingCriteria:array{Criterion?:array<string, array{Eq?:array<string>, Neq?:array<string>, Gt?:int, Gte?:int, Lt?:int, Lte?:int, Equals?:array<string>, NotEquals?:array<string>, GreaterThan?:int, GreaterThanOrEqual?:int, LessThan?:int, LessThanOrEqual?:int}>}, Tags?:array<string, string>}>
     */
    public function getFilter(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, FilterName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name:string, Description?:string, Action:"NOOP"|"ARCHIVE", Rank?:int, FindingCriteria:array{Criterion?:array<string, array{Eq?:array<string>, Neq?:array<string>, Gt?:int, Gte?:int, Lt?:int, Lte?:int, Equals?:array<string>, NotEquals?:array<string>, GreaterThan?:int, GreaterThanOrEqual?:int, LessThan?:int, LessThanOrEqual?:int}>}, Tags?:array<string, string>}>
     */
    public function getFilterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, FindingIds:array<string>, SortCriteria?:array{AttributeName?:string, OrderBy?:"ASC"|"DESC"}} $args
     * @return \AWS\Result<array{Findings:array<array{AccountId:string, Arn:string, Confidence?:float, CreatedAt:string, Description?:string, Id:string, Partition?:string, Region:string, Resource:array{AccessKeyDetails?:array{AccessKeyId?:string, PrincipalId?:string, UserName?:string, UserType?:string}, S3BucketDetails?:array<array{Arn?:string, Name?:string, Type?:string, CreatedAt?:int|string|\DateTimeInterface, Owner?:array{Id?:string}, Tags?:array<array{Key?:string, Value?:string}>, DefaultServerSideEncryption?:array{EncryptionType?:string, KmsMasterKeyArn?:string}, PublicAccess?:array{PermissionConfiguration?:array{BucketLevelPermissions?:array{AccessControlList?:array{AllowsPublicReadAccess?:bool, AllowsPublicWriteAccess?:bool}, BucketPolicy?:array{AllowsPublicReadAccess?:bool, AllowsPublicWriteAccess?:bool}, BlockPublicAccess?:array{IgnorePublicAcls?:bool, RestrictPublicBuckets?:bool, BlockPublicAcls?:bool, BlockPublicPolicy?:bool}}, AccountLevelPermissions?:array{BlockPublicAccess?:array{IgnorePublicAcls?:bool, RestrictPublicBuckets?:bool, BlockPublicAcls?:bool, BlockPublicPolicy?:bool}}}, EffectivePermission?:string}, S3ObjectDetails?:array<array{ObjectArn?:string, Key?:string, ETag?:string, Hash?:string, VersionId?:string}>}>, InstanceDetails?:array{AvailabilityZone?:string, IamInstanceProfile?:array{Arn?:string, Id?:string}, ImageDescription?:string, ImageId?:string, InstanceId?:string, InstanceState?:string, InstanceType?:string, OutpostArn?:string, LaunchTime?:string, NetworkInterfaces?:array<array{Ipv6Addresses?:array<string>, NetworkInterfaceId?:string, PrivateDnsName?:string, PrivateIpAddress?:string, PrivateIpAddresses?:array<array{PrivateDnsName?:string, PrivateIpAddress?:string}>, PublicDnsName?:string, PublicIp?:string, SecurityGroups?:array<array{GroupId?:string, GroupName?:string}>, SubnetId?:string, VpcId?:string}>, Platform?:string, ProductCodes?:array<array{Code?:string, ProductType?:string}>, Tags?:array<array{Key?:string, Value?:string}>}, EksClusterDetails?:array{Name?:string, Arn?:string, VpcId?:string, Status?:string, Tags?:array<array{Key?:string, Value?:string}>, CreatedAt?:int|string|\DateTimeInterface}, KubernetesDetails?:array{KubernetesUserDetails?:array{Username?:string, Uid?:string, Groups?:array<string>, SessionName?:array<string>, ImpersonatedUser?:array{Username?:string, Groups?:array<string>}}, KubernetesWorkloadDetails?:array{Name?:string, Type?:string, Uid?:string, Namespace?:string, HostNetwork?:bool, Containers?:array<array{ContainerRuntime?:string, Id?:string, Name?:string, Image?:string, ImagePrefix?:string, VolumeMounts?:array<array{Name?:string, MountPath?:string}>, SecurityContext?:array{Privileged?:bool, AllowPrivilegeEscalation?:bool}}>, Volumes?:array<array{Name?:string, HostPath?:array{Path?:string}}>, ServiceAccountName?:string, HostIPC?:bool, HostPID?:bool}}, ResourceType?:string, EbsVolumeDetails?:array{ScannedVolumeDetails?:array<array{VolumeArn?:string, VolumeType?:string, DeviceName?:string, VolumeSizeInGB?:int, EncryptionType?:string, SnapshotArn?:string, KmsKeyArn?:string}>, SkippedVolumeDetails?:array<array{VolumeArn?:string, VolumeType?:string, DeviceName?:string, VolumeSizeInGB?:int, EncryptionType?:string, SnapshotArn?:string, KmsKeyArn?:string}>}, EcsClusterDetails?:array{Name?:string, Arn?:string, Status?:string, ActiveServicesCount?:int, RegisteredContainerInstancesCount?:int, RunningTasksCount?:int, Tags?:array<array{Key?:string, Value?:string}>, TaskDetails?:array{Arn?:string, DefinitionArn?:string, Version?:string, TaskCreatedAt?:int|string|\DateTimeInterface, StartedAt?:int|string|\DateTimeInterface, StartedBy?:string, Tags?:array<array{Key?:string, Value?:string}>, Volumes?:array<array{Name?:string, HostPath?:array{Path?:string}}>, Containers?:array<array{ContainerRuntime?:string, Id?:string, Name?:string, Image?:string, ImagePrefix?:string, VolumeMounts?:array<array{Name?:string, MountPath?:string}>, SecurityContext?:array{Privileged?:bool, AllowPrivilegeEscalation?:bool}}>, Group?:string, LaunchType?:string}}, ContainerDetails?:array{ContainerRuntime?:string, Id?:string, Name?:string, Image?:string, ImagePrefix?:string, VolumeMounts?:array<array{Name?:string, MountPath?:string}>, SecurityContext?:array{Privileged?:bool, AllowPrivilegeEscalation?:bool}}, RdsDbInstanceDetails?:array{DbInstanceIdentifier?:string, Engine?:string, EngineVersion?:string, DbClusterIdentifier?:string, DbInstanceArn?:string, Tags?:array<array{Key?:string, Value?:string}>}, RdsLimitlessDbDetails?:array{DbShardGroupIdentifier?:string, DbShardGroupResourceId?:string, DbShardGroupArn?:string, Engine?:string, EngineVersion?:string, DbClusterIdentifier?:string, Tags?:array<array{Key?:string, Value?:string}>}, RdsDbUserDetails?:array{User?:string, Application?:string, Database?:string, Ssl?:string, AuthMethod?:string}, LambdaDetails?:array{FunctionArn?:string, FunctionName?:string, Description?:string, LastModifiedAt?:int|string|\DateTimeInterface, RevisionId?:string, FunctionVersion?:string, Role?:string, VpcConfig?:array{SubnetIds?:array<string>, VpcId?:string, SecurityGroups?:array<array{GroupId?:string, GroupName?:string}>}, Tags?:array<array{Key?:string, Value?:string}>}}, SchemaVersion:string, Service?:array{Action?:array{ActionType?:string, AwsApiCallAction?:array{Api?:string, CallerType?:string, DomainDetails?:array{Domain?:string}, ErrorCode?:string, UserAgent?:string, RemoteIpDetails?:array{City?:array{CityName?:string}, Country?:array{CountryCode?:string, CountryName?:string}, GeoLocation?:array{Lat?:float, Lon?:float}, IpAddressV4?:string, IpAddressV6?:string, Organization?:array{Asn?:string, AsnOrg?:string, Isp?:string, Org?:string}}, ServiceName?:string, RemoteAccountDetails?:array{AccountId?:string, Affiliated?:bool}, AffectedResources?:array<string, string>}, DnsRequestAction?:array{Domain?:string, Protocol?:string, Blocked?:bool, DomainWithSuffix?:string}, NetworkConnectionAction?:array{Blocked?:bool, ConnectionDirection?:string, LocalPortDetails?:array{Port?:int, PortName?:string}, Protocol?:string, LocalIpDetails?:array{IpAddressV4?:string, IpAddressV6?:string}, LocalNetworkInterface?:string, RemoteIpDetails?:array{City?:array{CityName?:string}, Country?:array{CountryCode?:string, CountryName?:string}, GeoLocation?:array{Lat?:float, Lon?:float}, IpAddressV4?:string, IpAddressV6?:string, Organization?:array{Asn?:string, AsnOrg?:string, Isp?:string, Org?:string}}, RemotePortDetails?:array{Port?:int, PortName?:string}}, PortProbeAction?:array{Blocked?:bool, PortProbeDetails?:array<array{LocalPortDetails?:array{Port?:int, PortName?:string}, LocalIpDetails?:array{IpAddressV4?:string, IpAddressV6?:string}, RemoteIpDetails?:array{City?:array{CityName?:string}, Country?:array{CountryCode?:string, CountryName?:string}, GeoLocation?:array{Lat?:float, Lon?:float}, IpAddressV4?:string, IpAddressV6?:string, Organization?:array{Asn?:string, AsnOrg?:string, Isp?:string, Org?:string}}}>}, KubernetesApiCallAction?:array{RequestUri?:string, Verb?:string, SourceIps?:array<string>, UserAgent?:string, RemoteIpDetails?:array{City?:array{CityName?:string}, Country?:array{CountryCode?:string, CountryName?:string}, GeoLocation?:array{Lat?:float, Lon?:float}, IpAddressV4?:string, IpAddressV6?:string, Organization?:array{Asn?:string, AsnOrg?:string, Isp?:string, Org?:string}}, StatusCode?:int, Parameters?:string, Resource?:string, Subresource?:string, Namespace?:string, ResourceName?:string}, RdsLoginAttemptAction?:array{RemoteIpDetails?:array{City?:array{CityName?:string}, Country?:array{CountryCode?:string, CountryName?:string}, GeoLocation?:array{Lat?:float, Lon?:float}, IpAddressV4?:string, IpAddressV6?:string, Organization?:array{Asn?:string, AsnOrg?:string, Isp?:string, Org?:string}}, LoginAttributes?:array<array{User?:string, Application?:string, FailedLoginAttempts?:int, SuccessfulLoginAttempts?:int}>}, KubernetesPermissionCheckedDetails?:array{Verb?:string, Resource?:string, Namespace?:string, Allowed?:bool}, KubernetesRoleBindingDetails?:array{Kind?:string, Name?:string, Uid?:string, RoleRefName?:string, RoleRefKind?:string}, KubernetesRoleDetails?:array{Kind?:string, Name?:string, Uid?:string}}, Evidence?:array{ThreatIntelligenceDetails?:array<array{ThreatListName?:string, ThreatNames?:array<string>, ThreatFileSha256?:string}>}, Archived?:bool, Count?:int, DetectorId?:string, EventFirstSeen?:string, EventLastSeen?:string, ResourceRole?:string, ServiceName?:string, UserFeedback?:string, AdditionalInfo?:array{Value?:string, Type?:string}, FeatureName?:string, EbsVolumeScanDetails?:array{ScanId?:string, ScanStartedAt?:int|string|\DateTimeInterface, ScanCompletedAt?:int|string|\DateTimeInterface, TriggerFindingId?:string, Sources?:array<string>, ScanDetections?:array{ScannedItemCount?:array{TotalGb?:int, Files?:int, Volumes?:int}, ThreatsDetectedItemCount?:array{Files?:int}, HighestSeverityThreatDetails?:array{Severity?:string, ThreatName?:string, Count?:int}, ThreatDetectedByName?:array{ItemCount?:int, UniqueThreatNameCount?:int, Shortened?:bool, ThreatNames?:array<array{Name?:string, Severity?:string, ItemCount?:int, FilePaths?:array<array{FilePath?:string, VolumeArn?:string, Hash?:string, FileName?:string}>}>}}, ScanType?:"GUARDDUTY_INITIATED"|"ON_DEMAND"}, RuntimeDetails?:array{Process?:array{Name?:string, ExecutablePath?:string, ExecutableSha256?:string, NamespacePid?:int, Pwd?:string, Pid?:int, StartTime?:int|string|\DateTimeInterface, Uuid?:string, ParentUuid?:string, User?:string, UserId?:int, Euid?:int, Lineage?:array<array{StartTime?:int|string|\DateTimeInterface, NamespacePid?:int, UserId?:int, Name?:string, Pid?:int, Uuid?:string, ExecutablePath?:string, Euid?:int, ParentUuid?:string}>}, Context?:array{ModifyingProcess?:array{Name?:string, ExecutablePath?:string, ExecutableSha256?:string, NamespacePid?:int, Pwd?:string, Pid?:int, StartTime?:int|string|\DateTimeInterface, Uuid?:string, ParentUuid?:string, User?:string, UserId?:int, Euid?:int, Lineage?:array<array{StartTime?:int|string|\DateTimeInterface, NamespacePid?:int, UserId?:int, Name?:string, Pid?:int, Uuid?:string, ExecutablePath?:string, Euid?:int, ParentUuid?:string}>}, ModifiedAt?:int|string|\DateTimeInterface, ScriptPath?:string, LibraryPath?:string, LdPreloadValue?:string, SocketPath?:string, RuncBinaryPath?:string, ReleaseAgentPath?:string, MountSource?:string, MountTarget?:string, FileSystemType?:string, Flags?:array<string>, ModuleName?:string, ModuleFilePath?:string, ModuleSha256?:string, ShellHistoryFilePath?:string, TargetProcess?:array{Name?:string, ExecutablePath?:string, ExecutableSha256?:string, NamespacePid?:int, Pwd?:string, Pid?:int, StartTime?:int|string|\DateTimeInterface, Uuid?:string, ParentUuid?:string, User?:string, UserId?:int, Euid?:int, Lineage?:array<array{StartTime?:int|string|\DateTimeInterface, NamespacePid?:int, UserId?:int, Name?:string, Pid?:int, Uuid?:string, ExecutablePath?:string, Euid?:int, ParentUuid?:string}>}, AddressFamily?:string, IanaProtocolNumber?:int, MemoryRegions?:array<string>, ToolName?:string, ToolCategory?:string, ServiceName?:string, CommandLineExample?:string, ThreatFilePath?:string}}, Detection?:array{Anomaly?:array{Profiles?:array<string, array<string, array<array{ProfileType?:"FREQUENCY", ProfileSubtype?:"FREQUENT"|"INFREQUENT"|"UNSEEN"|"RARE", Observations?:array{Text?:array<string>}}>>>, Unusual?:array{Behavior?:array<string, array<string, array{ProfileType?:"FREQUENCY", ProfileSubtype?:"FREQUENT"|"INFREQUENT"|"UNSEEN"|"RARE", Observations?:array{Text?:array<string>}}>>}}, Sequence?:array{Uid:string, Description:string, Actors?:array<array{Id:string, User?:array{Name:string, Uid:string, Type:string, CredentialUid?:string, Account?:array{Uid:string, Name?:string}}, Session?:array{Uid?:string, MfaStatus?:"ENABLED"|"DISABLED", CreatedTime?:int|string|\DateTimeInterface, Issuer?:string}}>, Resources?:array<array{Uid:string, Name?:string, AccountId?:string, ResourceType:"EC2_INSTANCE"|"EC2_NETWORK_INTERFACE"|"S3_BUCKET"|"S3_OBJECT"|"ACCESS_KEY", Region?:string, Service?:mixed, CloudPartition?:string, Tags?:array<array{Key?:string, Value?:string}>, Data?:array{S3Bucket?:array{OwnerId?:string, CreatedAt?:int|string|\DateTimeInterface, EncryptionType?:string, EncryptionKeyArn?:string, EffectivePermission?:string, PublicReadAccess?:"BLOCKED"|"ALLOWED", PublicWriteAccess?:"BLOCKED"|"ALLOWED", AccountPublicAccess?:array{PublicAclAccess?:"BLOCKED"|"ALLOWED", PublicPolicyAccess?:"BLOCKED"|"ALLOWED", PublicAclIgnoreBehavior?:"IGNORED"|"NOT_IGNORED", PublicBucketRestrictBehavior?:"RESTRICTED"|"NOT_RESTRICTED"}, BucketPublicAccess?:array{PublicAclAccess?:"BLOCKED"|"ALLOWED", PublicPolicyAccess?:"BLOCKED"|"ALLOWED", PublicAclIgnoreBehavior?:"IGNORED"|"NOT_IGNORED", PublicBucketRestrictBehavior?:"RESTRICTED"|"NOT_RESTRICTED"}, S3ObjectUids?:array<string>}, Ec2Instance?:array{AvailabilityZone?:string, ImageDescription?:string, InstanceState?:string, IamInstanceProfile?:array{Arn?:string, Id?:string}, InstanceType?:string, OutpostArn?:string, Platform?:string, ProductCodes?:array<array{Code?:string, ProductType?:string}>, Ec2NetworkInterfaceUids?:array<string>}, AccessKey?:array{PrincipalId?:string, UserName?:string, UserType?:string}, Ec2NetworkInterface?:array{Ipv6Addresses?:array<string>, PrivateIpAddresses?:array<array{PrivateDnsName?:string, PrivateIpAddress?:string}>, PublicIp?:string, SecurityGroups?:array<array{GroupId?:string, GroupName?:string}>, SubNetId?:string, VpcId?:string}, S3Object?:array{ETag?:string, Key?:string, VersionId?:string}}}>, Endpoints?:array<array{Id:string, Ip?:string, Domain?:string, Port?:int, Location?:array{City:string, Country:string, Latitude:float, Longitude:float}, AutonomousSystem?:array{Name:string, Number:int}, Connection?:array{Direction:"INBOUND"|"OUTBOUND"}}>, Signals:array<array{Uid:string, Type:"FINDING"|"CLOUD_TRAIL"|"S3_DATA_EVENTS", Description?:string, Name:string, CreatedAt:int|string|\DateTimeInterface, UpdatedAt:int|string|\DateTimeInterface, FirstSeenAt:int|string|\DateTimeInterface, LastSeenAt:int|string|\DateTimeInterface, Severity?:float, Count:int, ResourceUids?:array<string>, ActorIds?:array<string>, EndpointIds?:array<string>, SignalIndicators?:array<array{Key:"SUSPICIOUS_USER_AGENT"|"SUSPICIOUS_NETWORK"|"MALICIOUS_IP"|"TOR_IP"|"ATTACK_TACTIC"|"HIGH_RISK_API"|"ATTACK_TECHNIQUE"|"UNUSUAL_API_FOR_ACCOUNT"|"UNUSUAL_ASN_FOR_ACCOUNT"|"UNUSUAL_ASN_FOR_USER", Values?:array<string>, Title?:string}>}>, SequenceIndicators?:array<array{Key:"SUSPICIOUS_USER_AGENT"|"SUSPICIOUS_NETWORK"|"MALICIOUS_IP"|"TOR_IP"|"ATTACK_TACTIC"|"HIGH_RISK_API"|"ATTACK_TECHNIQUE"|"UNUSUAL_API_FOR_ACCOUNT"|"UNUSUAL_ASN_FOR_ACCOUNT"|"UNUSUAL_ASN_FOR_USER", Values?:array<string>, Title?:string}>}}, MalwareScanDetails?:array{Threats?:array<array{Name?:string, Source?:string, ItemPaths?:array<array{NestedItemPath?:string, Hash?:string}>}>}}, Severity:float, Title?:string, Type:string, UpdatedAt:string, AssociatedAttackSequenceArn?:string}>}>
     */
    public function getFindings(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, FindingIds:array<string>, SortCriteria?:array{AttributeName?:string, OrderBy?:"ASC"|"DESC"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Findings:array<array{AccountId:string, Arn:string, Confidence?:float, CreatedAt:string, Description?:string, Id:string, Partition?:string, Region:string, Resource:array{AccessKeyDetails?:array{AccessKeyId?:string, PrincipalId?:string, UserName?:string, UserType?:string}, S3BucketDetails?:array<array{Arn?:string, Name?:string, Type?:string, CreatedAt?:int|string|\DateTimeInterface, Owner?:array{Id?:string}, Tags?:array<array{Key?:string, Value?:string}>, DefaultServerSideEncryption?:array{EncryptionType?:string, KmsMasterKeyArn?:string}, PublicAccess?:array{PermissionConfiguration?:array{BucketLevelPermissions?:array{AccessControlList?:array{AllowsPublicReadAccess?:bool, AllowsPublicWriteAccess?:bool}, BucketPolicy?:array{AllowsPublicReadAccess?:bool, AllowsPublicWriteAccess?:bool}, BlockPublicAccess?:array{IgnorePublicAcls?:bool, RestrictPublicBuckets?:bool, BlockPublicAcls?:bool, BlockPublicPolicy?:bool}}, AccountLevelPermissions?:array{BlockPublicAccess?:array{IgnorePublicAcls?:bool, RestrictPublicBuckets?:bool, BlockPublicAcls?:bool, BlockPublicPolicy?:bool}}}, EffectivePermission?:string}, S3ObjectDetails?:array<array{ObjectArn?:string, Key?:string, ETag?:string, Hash?:string, VersionId?:string}>}>, InstanceDetails?:array{AvailabilityZone?:string, IamInstanceProfile?:array{Arn?:string, Id?:string}, ImageDescription?:string, ImageId?:string, InstanceId?:string, InstanceState?:string, InstanceType?:string, OutpostArn?:string, LaunchTime?:string, NetworkInterfaces?:array<array{Ipv6Addresses?:array<string>, NetworkInterfaceId?:string, PrivateDnsName?:string, PrivateIpAddress?:string, PrivateIpAddresses?:array<array{PrivateDnsName?:string, PrivateIpAddress?:string}>, PublicDnsName?:string, PublicIp?:string, SecurityGroups?:array<array{GroupId?:string, GroupName?:string}>, SubnetId?:string, VpcId?:string}>, Platform?:string, ProductCodes?:array<array{Code?:string, ProductType?:string}>, Tags?:array<array{Key?:string, Value?:string}>}, EksClusterDetails?:array{Name?:string, Arn?:string, VpcId?:string, Status?:string, Tags?:array<array{Key?:string, Value?:string}>, CreatedAt?:int|string|\DateTimeInterface}, KubernetesDetails?:array{KubernetesUserDetails?:array{Username?:string, Uid?:string, Groups?:array<string>, SessionName?:array<string>, ImpersonatedUser?:array{Username?:string, Groups?:array<string>}}, KubernetesWorkloadDetails?:array{Name?:string, Type?:string, Uid?:string, Namespace?:string, HostNetwork?:bool, Containers?:array<array{ContainerRuntime?:string, Id?:string, Name?:string, Image?:string, ImagePrefix?:string, VolumeMounts?:array<array{Name?:string, MountPath?:string}>, SecurityContext?:array{Privileged?:bool, AllowPrivilegeEscalation?:bool}}>, Volumes?:array<array{Name?:string, HostPath?:array{Path?:string}}>, ServiceAccountName?:string, HostIPC?:bool, HostPID?:bool}}, ResourceType?:string, EbsVolumeDetails?:array{ScannedVolumeDetails?:array<array{VolumeArn?:string, VolumeType?:string, DeviceName?:string, VolumeSizeInGB?:int, EncryptionType?:string, SnapshotArn?:string, KmsKeyArn?:string}>, SkippedVolumeDetails?:array<array{VolumeArn?:string, VolumeType?:string, DeviceName?:string, VolumeSizeInGB?:int, EncryptionType?:string, SnapshotArn?:string, KmsKeyArn?:string}>}, EcsClusterDetails?:array{Name?:string, Arn?:string, Status?:string, ActiveServicesCount?:int, RegisteredContainerInstancesCount?:int, RunningTasksCount?:int, Tags?:array<array{Key?:string, Value?:string}>, TaskDetails?:array{Arn?:string, DefinitionArn?:string, Version?:string, TaskCreatedAt?:int|string|\DateTimeInterface, StartedAt?:int|string|\DateTimeInterface, StartedBy?:string, Tags?:array<array{Key?:string, Value?:string}>, Volumes?:array<array{Name?:string, HostPath?:array{Path?:string}}>, Containers?:array<array{ContainerRuntime?:string, Id?:string, Name?:string, Image?:string, ImagePrefix?:string, VolumeMounts?:array<array{Name?:string, MountPath?:string}>, SecurityContext?:array{Privileged?:bool, AllowPrivilegeEscalation?:bool}}>, Group?:string, LaunchType?:string}}, ContainerDetails?:array{ContainerRuntime?:string, Id?:string, Name?:string, Image?:string, ImagePrefix?:string, VolumeMounts?:array<array{Name?:string, MountPath?:string}>, SecurityContext?:array{Privileged?:bool, AllowPrivilegeEscalation?:bool}}, RdsDbInstanceDetails?:array{DbInstanceIdentifier?:string, Engine?:string, EngineVersion?:string, DbClusterIdentifier?:string, DbInstanceArn?:string, Tags?:array<array{Key?:string, Value?:string}>}, RdsLimitlessDbDetails?:array{DbShardGroupIdentifier?:string, DbShardGroupResourceId?:string, DbShardGroupArn?:string, Engine?:string, EngineVersion?:string, DbClusterIdentifier?:string, Tags?:array<array{Key?:string, Value?:string}>}, RdsDbUserDetails?:array{User?:string, Application?:string, Database?:string, Ssl?:string, AuthMethod?:string}, LambdaDetails?:array{FunctionArn?:string, FunctionName?:string, Description?:string, LastModifiedAt?:int|string|\DateTimeInterface, RevisionId?:string, FunctionVersion?:string, Role?:string, VpcConfig?:array{SubnetIds?:array<string>, VpcId?:string, SecurityGroups?:array<array{GroupId?:string, GroupName?:string}>}, Tags?:array<array{Key?:string, Value?:string}>}}, SchemaVersion:string, Service?:array{Action?:array{ActionType?:string, AwsApiCallAction?:array{Api?:string, CallerType?:string, DomainDetails?:array{Domain?:string}, ErrorCode?:string, UserAgent?:string, RemoteIpDetails?:array{City?:array{CityName?:string}, Country?:array{CountryCode?:string, CountryName?:string}, GeoLocation?:array{Lat?:float, Lon?:float}, IpAddressV4?:string, IpAddressV6?:string, Organization?:array{Asn?:string, AsnOrg?:string, Isp?:string, Org?:string}}, ServiceName?:string, RemoteAccountDetails?:array{AccountId?:string, Affiliated?:bool}, AffectedResources?:array<string, string>}, DnsRequestAction?:array{Domain?:string, Protocol?:string, Blocked?:bool, DomainWithSuffix?:string}, NetworkConnectionAction?:array{Blocked?:bool, ConnectionDirection?:string, LocalPortDetails?:array{Port?:int, PortName?:string}, Protocol?:string, LocalIpDetails?:array{IpAddressV4?:string, IpAddressV6?:string}, LocalNetworkInterface?:string, RemoteIpDetails?:array{City?:array{CityName?:string}, Country?:array{CountryCode?:string, CountryName?:string}, GeoLocation?:array{Lat?:float, Lon?:float}, IpAddressV4?:string, IpAddressV6?:string, Organization?:array{Asn?:string, AsnOrg?:string, Isp?:string, Org?:string}}, RemotePortDetails?:array{Port?:int, PortName?:string}}, PortProbeAction?:array{Blocked?:bool, PortProbeDetails?:array<array{LocalPortDetails?:array{Port?:int, PortName?:string}, LocalIpDetails?:array{IpAddressV4?:string, IpAddressV6?:string}, RemoteIpDetails?:array{City?:array{CityName?:string}, Country?:array{CountryCode?:string, CountryName?:string}, GeoLocation?:array{Lat?:float, Lon?:float}, IpAddressV4?:string, IpAddressV6?:string, Organization?:array{Asn?:string, AsnOrg?:string, Isp?:string, Org?:string}}}>}, KubernetesApiCallAction?:array{RequestUri?:string, Verb?:string, SourceIps?:array<string>, UserAgent?:string, RemoteIpDetails?:array{City?:array{CityName?:string}, Country?:array{CountryCode?:string, CountryName?:string}, GeoLocation?:array{Lat?:float, Lon?:float}, IpAddressV4?:string, IpAddressV6?:string, Organization?:array{Asn?:string, AsnOrg?:string, Isp?:string, Org?:string}}, StatusCode?:int, Parameters?:string, Resource?:string, Subresource?:string, Namespace?:string, ResourceName?:string}, RdsLoginAttemptAction?:array{RemoteIpDetails?:array{City?:array{CityName?:string}, Country?:array{CountryCode?:string, CountryName?:string}, GeoLocation?:array{Lat?:float, Lon?:float}, IpAddressV4?:string, IpAddressV6?:string, Organization?:array{Asn?:string, AsnOrg?:string, Isp?:string, Org?:string}}, LoginAttributes?:array<array{User?:string, Application?:string, FailedLoginAttempts?:int, SuccessfulLoginAttempts?:int}>}, KubernetesPermissionCheckedDetails?:array{Verb?:string, Resource?:string, Namespace?:string, Allowed?:bool}, KubernetesRoleBindingDetails?:array{Kind?:string, Name?:string, Uid?:string, RoleRefName?:string, RoleRefKind?:string}, KubernetesRoleDetails?:array{Kind?:string, Name?:string, Uid?:string}}, Evidence?:array{ThreatIntelligenceDetails?:array<array{ThreatListName?:string, ThreatNames?:array<string>, ThreatFileSha256?:string}>}, Archived?:bool, Count?:int, DetectorId?:string, EventFirstSeen?:string, EventLastSeen?:string, ResourceRole?:string, ServiceName?:string, UserFeedback?:string, AdditionalInfo?:array{Value?:string, Type?:string}, FeatureName?:string, EbsVolumeScanDetails?:array{ScanId?:string, ScanStartedAt?:int|string|\DateTimeInterface, ScanCompletedAt?:int|string|\DateTimeInterface, TriggerFindingId?:string, Sources?:array<string>, ScanDetections?:array{ScannedItemCount?:array{TotalGb?:int, Files?:int, Volumes?:int}, ThreatsDetectedItemCount?:array{Files?:int}, HighestSeverityThreatDetails?:array{Severity?:string, ThreatName?:string, Count?:int}, ThreatDetectedByName?:array{ItemCount?:int, UniqueThreatNameCount?:int, Shortened?:bool, ThreatNames?:array<array{Name?:string, Severity?:string, ItemCount?:int, FilePaths?:array<array{FilePath?:string, VolumeArn?:string, Hash?:string, FileName?:string}>}>}}, ScanType?:"GUARDDUTY_INITIATED"|"ON_DEMAND"}, RuntimeDetails?:array{Process?:array{Name?:string, ExecutablePath?:string, ExecutableSha256?:string, NamespacePid?:int, Pwd?:string, Pid?:int, StartTime?:int|string|\DateTimeInterface, Uuid?:string, ParentUuid?:string, User?:string, UserId?:int, Euid?:int, Lineage?:array<array{StartTime?:int|string|\DateTimeInterface, NamespacePid?:int, UserId?:int, Name?:string, Pid?:int, Uuid?:string, ExecutablePath?:string, Euid?:int, ParentUuid?:string}>}, Context?:array{ModifyingProcess?:array{Name?:string, ExecutablePath?:string, ExecutableSha256?:string, NamespacePid?:int, Pwd?:string, Pid?:int, StartTime?:int|string|\DateTimeInterface, Uuid?:string, ParentUuid?:string, User?:string, UserId?:int, Euid?:int, Lineage?:array<array{StartTime?:int|string|\DateTimeInterface, NamespacePid?:int, UserId?:int, Name?:string, Pid?:int, Uuid?:string, ExecutablePath?:string, Euid?:int, ParentUuid?:string}>}, ModifiedAt?:int|string|\DateTimeInterface, ScriptPath?:string, LibraryPath?:string, LdPreloadValue?:string, SocketPath?:string, RuncBinaryPath?:string, ReleaseAgentPath?:string, MountSource?:string, MountTarget?:string, FileSystemType?:string, Flags?:array<string>, ModuleName?:string, ModuleFilePath?:string, ModuleSha256?:string, ShellHistoryFilePath?:string, TargetProcess?:array{Name?:string, ExecutablePath?:string, ExecutableSha256?:string, NamespacePid?:int, Pwd?:string, Pid?:int, StartTime?:int|string|\DateTimeInterface, Uuid?:string, ParentUuid?:string, User?:string, UserId?:int, Euid?:int, Lineage?:array<array{StartTime?:int|string|\DateTimeInterface, NamespacePid?:int, UserId?:int, Name?:string, Pid?:int, Uuid?:string, ExecutablePath?:string, Euid?:int, ParentUuid?:string}>}, AddressFamily?:string, IanaProtocolNumber?:int, MemoryRegions?:array<string>, ToolName?:string, ToolCategory?:string, ServiceName?:string, CommandLineExample?:string, ThreatFilePath?:string}}, Detection?:array{Anomaly?:array{Profiles?:array<string, array<string, array<array{ProfileType?:"FREQUENCY", ProfileSubtype?:"FREQUENT"|"INFREQUENT"|"UNSEEN"|"RARE", Observations?:array{Text?:array<string>}}>>>, Unusual?:array{Behavior?:array<string, array<string, array{ProfileType?:"FREQUENCY", ProfileSubtype?:"FREQUENT"|"INFREQUENT"|"UNSEEN"|"RARE", Observations?:array{Text?:array<string>}}>>}}, Sequence?:array{Uid:string, Description:string, Actors?:array<array{Id:string, User?:array{Name:string, Uid:string, Type:string, CredentialUid?:string, Account?:array{Uid:string, Name?:string}}, Session?:array{Uid?:string, MfaStatus?:"ENABLED"|"DISABLED", CreatedTime?:int|string|\DateTimeInterface, Issuer?:string}}>, Resources?:array<array{Uid:string, Name?:string, AccountId?:string, ResourceType:"EC2_INSTANCE"|"EC2_NETWORK_INTERFACE"|"S3_BUCKET"|"S3_OBJECT"|"ACCESS_KEY", Region?:string, Service?:mixed, CloudPartition?:string, Tags?:array<array{Key?:string, Value?:string}>, Data?:array{S3Bucket?:array{OwnerId?:string, CreatedAt?:int|string|\DateTimeInterface, EncryptionType?:string, EncryptionKeyArn?:string, EffectivePermission?:string, PublicReadAccess?:"BLOCKED"|"ALLOWED", PublicWriteAccess?:"BLOCKED"|"ALLOWED", AccountPublicAccess?:array{PublicAclAccess?:"BLOCKED"|"ALLOWED", PublicPolicyAccess?:"BLOCKED"|"ALLOWED", PublicAclIgnoreBehavior?:"IGNORED"|"NOT_IGNORED", PublicBucketRestrictBehavior?:"RESTRICTED"|"NOT_RESTRICTED"}, BucketPublicAccess?:array{PublicAclAccess?:"BLOCKED"|"ALLOWED", PublicPolicyAccess?:"BLOCKED"|"ALLOWED", PublicAclIgnoreBehavior?:"IGNORED"|"NOT_IGNORED", PublicBucketRestrictBehavior?:"RESTRICTED"|"NOT_RESTRICTED"}, S3ObjectUids?:array<string>}, Ec2Instance?:array{AvailabilityZone?:string, ImageDescription?:string, InstanceState?:string, IamInstanceProfile?:array{Arn?:string, Id?:string}, InstanceType?:string, OutpostArn?:string, Platform?:string, ProductCodes?:array<array{Code?:string, ProductType?:string}>, Ec2NetworkInterfaceUids?:array<string>}, AccessKey?:array{PrincipalId?:string, UserName?:string, UserType?:string}, Ec2NetworkInterface?:array{Ipv6Addresses?:array<string>, PrivateIpAddresses?:array<array{PrivateDnsName?:string, PrivateIpAddress?:string}>, PublicIp?:string, SecurityGroups?:array<array{GroupId?:string, GroupName?:string}>, SubNetId?:string, VpcId?:string}, S3Object?:array{ETag?:string, Key?:string, VersionId?:string}}}>, Endpoints?:array<array{Id:string, Ip?:string, Domain?:string, Port?:int, Location?:array{City:string, Country:string, Latitude:float, Longitude:float}, AutonomousSystem?:array{Name:string, Number:int}, Connection?:array{Direction:"INBOUND"|"OUTBOUND"}}>, Signals:array<array{Uid:string, Type:"FINDING"|"CLOUD_TRAIL"|"S3_DATA_EVENTS", Description?:string, Name:string, CreatedAt:int|string|\DateTimeInterface, UpdatedAt:int|string|\DateTimeInterface, FirstSeenAt:int|string|\DateTimeInterface, LastSeenAt:int|string|\DateTimeInterface, Severity?:float, Count:int, ResourceUids?:array<string>, ActorIds?:array<string>, EndpointIds?:array<string>, SignalIndicators?:array<array{Key:"SUSPICIOUS_USER_AGENT"|"SUSPICIOUS_NETWORK"|"MALICIOUS_IP"|"TOR_IP"|"ATTACK_TACTIC"|"HIGH_RISK_API"|"ATTACK_TECHNIQUE"|"UNUSUAL_API_FOR_ACCOUNT"|"UNUSUAL_ASN_FOR_ACCOUNT"|"UNUSUAL_ASN_FOR_USER", Values?:array<string>, Title?:string}>}>, SequenceIndicators?:array<array{Key:"SUSPICIOUS_USER_AGENT"|"SUSPICIOUS_NETWORK"|"MALICIOUS_IP"|"TOR_IP"|"ATTACK_TACTIC"|"HIGH_RISK_API"|"ATTACK_TECHNIQUE"|"UNUSUAL_API_FOR_ACCOUNT"|"UNUSUAL_ASN_FOR_ACCOUNT"|"UNUSUAL_ASN_FOR_USER", Values?:array<string>, Title?:string}>}}, MalwareScanDetails?:array{Threats?:array<array{Name?:string, Source?:string, ItemPaths?:array<array{NestedItemPath?:string, Hash?:string}>}>}}, Severity:float, Title?:string, Type:string, UpdatedAt:string, AssociatedAttackSequenceArn?:string}>}>
     */
    public function getFindingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, FindingStatisticTypes?:array<"COUNT_BY_SEVERITY">, FindingCriteria?:array{Criterion?:array<string, array{Eq?:array<string>, Neq?:array<string>, Gt?:int, Gte?:int, Lt?:int, Lte?:int, Equals?:array<string>, NotEquals?:array<string>, GreaterThan?:int, GreaterThanOrEqual?:int, LessThan?:int, LessThanOrEqual?:int}>}, GroupBy?:"ACCOUNT"|"DATE"|"FINDING_TYPE"|"RESOURCE"|"SEVERITY", OrderBy?:"ASC"|"DESC", MaxResults?:int} $args
     * @return \AWS\Result<array{FindingStatistics:array{CountBySeverity?:array<string, int>, GroupedByAccount?:array<array{AccountId?:string, LastGeneratedAt?:int|string|\DateTimeInterface, TotalFindings?:int}>, GroupedByDate?:array<array{Date?:int|string|\DateTimeInterface, LastGeneratedAt?:int|string|\DateTimeInterface, Severity?:float, TotalFindings?:int}>, GroupedByFindingType?:array<array{FindingType?:string, LastGeneratedAt?:int|string|\DateTimeInterface, TotalFindings?:int}>, GroupedByResource?:array<array{AccountId?:string, LastGeneratedAt?:int|string|\DateTimeInterface, ResourceId?:string, ResourceType?:string, TotalFindings?:int}>, GroupedBySeverity?:array<array{LastGeneratedAt?:int|string|\DateTimeInterface, Severity?:float, TotalFindings?:int}>}, NextToken?:string}>
     */
    public function getFindingsStatistics(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, FindingStatisticTypes?:array<"COUNT_BY_SEVERITY">, FindingCriteria?:array{Criterion?:array<string, array{Eq?:array<string>, Neq?:array<string>, Gt?:int, Gte?:int, Lt?:int, Lte?:int, Equals?:array<string>, NotEquals?:array<string>, GreaterThan?:int, GreaterThanOrEqual?:int, LessThan?:int, LessThanOrEqual?:int}>}, GroupBy?:"ACCOUNT"|"DATE"|"FINDING_TYPE"|"RESOURCE"|"SEVERITY", OrderBy?:"ASC"|"DESC", MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{FindingStatistics:array{CountBySeverity?:array<string, int>, GroupedByAccount?:array<array{AccountId?:string, LastGeneratedAt?:int|string|\DateTimeInterface, TotalFindings?:int}>, GroupedByDate?:array<array{Date?:int|string|\DateTimeInterface, LastGeneratedAt?:int|string|\DateTimeInterface, Severity?:float, TotalFindings?:int}>, GroupedByFindingType?:array<array{FindingType?:string, LastGeneratedAt?:int|string|\DateTimeInterface, TotalFindings?:int}>, GroupedByResource?:array<array{AccountId?:string, LastGeneratedAt?:int|string|\DateTimeInterface, ResourceId?:string, ResourceType?:string, TotalFindings?:int}>, GroupedBySeverity?:array<array{LastGeneratedAt?:int|string|\DateTimeInterface, Severity?:float, TotalFindings?:int}>}, NextToken?:string}>
     */
    public function getFindingsStatisticsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, IpSetId:string} $args
     * @return \AWS\Result<array{Name:string, Format:"TXT"|"STIX"|"OTX_CSV"|"ALIEN_VAULT"|"PROOF_POINT"|"FIRE_EYE", Location:string, Status:"INACTIVE"|"ACTIVATING"|"ACTIVE"|"DEACTIVATING"|"ERROR"|"DELETE_PENDING"|"DELETED", Tags?:array<string, string>}>
     */
    public function getIPSet(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, IpSetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name:string, Format:"TXT"|"STIX"|"OTX_CSV"|"ALIEN_VAULT"|"PROOF_POINT"|"FIRE_EYE", Location:string, Status:"INACTIVE"|"ACTIVATING"|"ACTIVE"|"DEACTIVATING"|"ERROR"|"DELETE_PENDING"|"DELETED", Tags?:array<string, string>}>
     */
    public function getIPSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{InvitationsCount?:int}>
     */
    public function getInvitationsCount(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{InvitationsCount?:int}>
     */
    public function getInvitationsCountAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MalwareProtectionPlanId:string} $args
     * @return \AWS\Result<array{Arn?:string, Role?:string, ProtectedResource?:array{S3Bucket?:array{BucketName?:string, ObjectPrefixes?:array<string>}}, Actions?:array{Tagging?:array{Status?:"ENABLED"|"DISABLED"}}, CreatedAt?:int|string|\DateTimeInterface, Status?:"ACTIVE"|"WARNING"|"ERROR", StatusReasons?:array<array{Code?:string, Message?:string}>, Tags?:array<string, string>}>
     */
    public function getMalwareProtectionPlan(array $args): \AWS\Result { }

    /**
     * @param array{MalwareProtectionPlanId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Role?:string, ProtectedResource?:array{S3Bucket?:array{BucketName?:string, ObjectPrefixes?:array<string>}}, Actions?:array{Tagging?:array{Status?:"ENABLED"|"DISABLED"}}, CreatedAt?:int|string|\DateTimeInterface, Status?:"ACTIVE"|"WARNING"|"ERROR", StatusReasons?:array<array{Code?:string, Message?:string}>, Tags?:array<string, string>}>
     */
    public function getMalwareProtectionPlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string} $args
     * @return \AWS\Result<array{ScanResourceCriteria?:array{Include?:array<"EC2_INSTANCE_TAG", array{MapEquals:array<array{Key:string, Value?:string}>}>, Exclude?:array<"EC2_INSTANCE_TAG", array{MapEquals:array<array{Key:string, Value?:string}>}>}, EbsSnapshotPreservation?:"NO_RETENTION"|"RETENTION_WITH_FINDING"}>
     */
    public function getMalwareScanSettings(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ScanResourceCriteria?:array{Include?:array<"EC2_INSTANCE_TAG", array{MapEquals:array<array{Key:string, Value?:string}>}>, Exclude?:array<"EC2_INSTANCE_TAG", array{MapEquals:array<array{Key:string, Value?:string}>}>}, EbsSnapshotPreservation?:"NO_RETENTION"|"RETENTION_WITH_FINDING"}>
     */
    public function getMalwareScanSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string} $args
     * @return \AWS\Result<array{Master:array{AccountId?:string, InvitationId?:string, RelationshipStatus?:string, InvitedAt?:string}}>
     */
    public function getMasterAccount(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Master:array{AccountId?:string, InvitationId?:string, RelationshipStatus?:string, InvitedAt?:string}}>
     */
    public function getMasterAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, AccountIds:array<string>} $args
     * @return \AWS\Result<array{MemberDataSourceConfigurations:array<array{AccountId:string, DataSources?:array{CloudTrail:array{Status:"ENABLED"|"DISABLED"}, DNSLogs:array{Status:"ENABLED"|"DISABLED"}, FlowLogs:array{Status:"ENABLED"|"DISABLED"}, S3Logs:array{Status:"ENABLED"|"DISABLED"}, Kubernetes?:array{AuditLogs:array{Status:"ENABLED"|"DISABLED"}}, MalwareProtection?:array{ScanEc2InstanceWithFindings?:array{EbsVolumes?:array{Status?:"ENABLED"|"DISABLED", Reason?:string}}, ServiceRole?:string}}, Features?:array<array{Name?:"S3_DATA_EVENTS"|"EKS_AUDIT_LOGS"|"EBS_MALWARE_PROTECTION"|"RDS_LOGIN_EVENTS"|"EKS_RUNTIME_MONITORING"|"LAMBDA_NETWORK_LOGS"|"RUNTIME_MONITORING", Status?:"ENABLED"|"DISABLED", UpdatedAt?:int|string|\DateTimeInterface, AdditionalConfiguration?:array<array{Name?:"EKS_ADDON_MANAGEMENT"|"ECS_FARGATE_AGENT_MANAGEMENT"|"EC2_AGENT_MANAGEMENT", Status?:"ENABLED"|"DISABLED", UpdatedAt?:int|string|\DateTimeInterface}>}>}>, UnprocessedAccounts:array<array{AccountId:string, Result:string}>}>
     */
    public function getMemberDetectors(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, AccountIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{MemberDataSourceConfigurations:array<array{AccountId:string, DataSources?:array{CloudTrail:array{Status:"ENABLED"|"DISABLED"}, DNSLogs:array{Status:"ENABLED"|"DISABLED"}, FlowLogs:array{Status:"ENABLED"|"DISABLED"}, S3Logs:array{Status:"ENABLED"|"DISABLED"}, Kubernetes?:array{AuditLogs:array{Status:"ENABLED"|"DISABLED"}}, MalwareProtection?:array{ScanEc2InstanceWithFindings?:array{EbsVolumes?:array{Status?:"ENABLED"|"DISABLED", Reason?:string}}, ServiceRole?:string}}, Features?:array<array{Name?:"S3_DATA_EVENTS"|"EKS_AUDIT_LOGS"|"EBS_MALWARE_PROTECTION"|"RDS_LOGIN_EVENTS"|"EKS_RUNTIME_MONITORING"|"LAMBDA_NETWORK_LOGS"|"RUNTIME_MONITORING", Status?:"ENABLED"|"DISABLED", UpdatedAt?:int|string|\DateTimeInterface, AdditionalConfiguration?:array<array{Name?:"EKS_ADDON_MANAGEMENT"|"ECS_FARGATE_AGENT_MANAGEMENT"|"EC2_AGENT_MANAGEMENT", Status?:"ENABLED"|"DISABLED", UpdatedAt?:int|string|\DateTimeInterface}>}>}>, UnprocessedAccounts:array<array{AccountId:string, Result:string}>}>
     */
    public function getMemberDetectorsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, AccountIds:array<string>} $args
     * @return \AWS\Result<array{Members:array<array{AccountId:string, DetectorId?:string, MasterId:string, Email:string, RelationshipStatus:string, InvitedAt?:string, UpdatedAt:string, AdministratorId?:string}>, UnprocessedAccounts:array<array{AccountId:string, Result:string}>}>
     */
    public function getMembers(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, AccountIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Members:array<array{AccountId:string, DetectorId?:string, MasterId:string, Email:string, RelationshipStatus:string, InvitedAt?:string, UpdatedAt:string, AdministratorId?:string}>, UnprocessedAccounts:array<array{AccountId:string, Result:string}>}>
     */
    public function getMembersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{OrganizationDetails?:array{UpdatedAt?:int|string|\DateTimeInterface, OrganizationStatistics?:array{TotalAccountsCount?:int, MemberAccountsCount?:int, ActiveAccountsCount?:int, EnabledAccountsCount?:int, CountByFeature?:array<array{Name?:"S3_DATA_EVENTS"|"EKS_AUDIT_LOGS"|"EBS_MALWARE_PROTECTION"|"RDS_LOGIN_EVENTS"|"EKS_RUNTIME_MONITORING"|"LAMBDA_NETWORK_LOGS"|"RUNTIME_MONITORING", EnabledAccountsCount?:int, AdditionalConfiguration?:array<array{Name?:"EKS_ADDON_MANAGEMENT"|"ECS_FARGATE_AGENT_MANAGEMENT"|"EC2_AGENT_MANAGEMENT", EnabledAccountsCount?:int}>}>}}}>
     */
    public function getOrganizationStatistics(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{OrganizationDetails?:array{UpdatedAt?:int|string|\DateTimeInterface, OrganizationStatistics?:array{TotalAccountsCount?:int, MemberAccountsCount?:int, ActiveAccountsCount?:int, EnabledAccountsCount?:int, CountByFeature?:array<array{Name?:"S3_DATA_EVENTS"|"EKS_AUDIT_LOGS"|"EBS_MALWARE_PROTECTION"|"RDS_LOGIN_EVENTS"|"EKS_RUNTIME_MONITORING"|"LAMBDA_NETWORK_LOGS"|"RUNTIME_MONITORING", EnabledAccountsCount?:int, AdditionalConfiguration?:array<array{Name?:"EKS_ADDON_MANAGEMENT"|"ECS_FARGATE_AGENT_MANAGEMENT"|"EC2_AGENT_MANAGEMENT", EnabledAccountsCount?:int}>}>}}}>
     */
    public function getOrganizationStatisticsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, AccountIds?:array<string>} $args
     * @return \AWS\Result<array{Accounts?:array<array{AccountId?:string, DataSources?:array{CloudTrail?:array{FreeTrialDaysRemaining?:int}, DnsLogs?:array{FreeTrialDaysRemaining?:int}, FlowLogs?:array{FreeTrialDaysRemaining?:int}, S3Logs?:array{FreeTrialDaysRemaining?:int}, Kubernetes?:array{AuditLogs?:array{FreeTrialDaysRemaining?:int}}, MalwareProtection?:array{ScanEc2InstanceWithFindings?:array{FreeTrialDaysRemaining?:int}}}, Features?:array<array{Name?:"FLOW_LOGS"|"CLOUD_TRAIL"|"DNS_LOGS"|"S3_DATA_EVENTS"|"EKS_AUDIT_LOGS"|"EBS_MALWARE_PROTECTION"|"RDS_LOGIN_EVENTS"|"EKS_RUNTIME_MONITORING"|"LAMBDA_NETWORK_LOGS"|"FARGATE_RUNTIME_MONITORING"|"EC2_RUNTIME_MONITORING", FreeTrialDaysRemaining?:int}>}>, UnprocessedAccounts?:array<array{AccountId:string, Result:string}>}>
     */
    public function getRemainingFreeTrialDays(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, AccountIds?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Accounts?:array<array{AccountId?:string, DataSources?:array{CloudTrail?:array{FreeTrialDaysRemaining?:int}, DnsLogs?:array{FreeTrialDaysRemaining?:int}, FlowLogs?:array{FreeTrialDaysRemaining?:int}, S3Logs?:array{FreeTrialDaysRemaining?:int}, Kubernetes?:array{AuditLogs?:array{FreeTrialDaysRemaining?:int}}, MalwareProtection?:array{ScanEc2InstanceWithFindings?:array{FreeTrialDaysRemaining?:int}}}, Features?:array<array{Name?:"FLOW_LOGS"|"CLOUD_TRAIL"|"DNS_LOGS"|"S3_DATA_EVENTS"|"EKS_AUDIT_LOGS"|"EBS_MALWARE_PROTECTION"|"RDS_LOGIN_EVENTS"|"EKS_RUNTIME_MONITORING"|"LAMBDA_NETWORK_LOGS"|"FARGATE_RUNTIME_MONITORING"|"EC2_RUNTIME_MONITORING", FreeTrialDaysRemaining?:int}>}>, UnprocessedAccounts?:array<array{AccountId:string, Result:string}>}>
     */
    public function getRemainingFreeTrialDaysAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, ThreatIntelSetId:string} $args
     * @return \AWS\Result<array{Name:string, Format:"TXT"|"STIX"|"OTX_CSV"|"ALIEN_VAULT"|"PROOF_POINT"|"FIRE_EYE", Location:string, Status:"INACTIVE"|"ACTIVATING"|"ACTIVE"|"DEACTIVATING"|"ERROR"|"DELETE_PENDING"|"DELETED", Tags?:array<string, string>}>
     */
    public function getThreatIntelSet(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, ThreatIntelSetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name:string, Format:"TXT"|"STIX"|"OTX_CSV"|"ALIEN_VAULT"|"PROOF_POINT"|"FIRE_EYE", Location:string, Status:"INACTIVE"|"ACTIVATING"|"ACTIVE"|"DEACTIVATING"|"ERROR"|"DELETE_PENDING"|"DELETED", Tags?:array<string, string>}>
     */
    public function getThreatIntelSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, UsageStatisticType:"SUM_BY_ACCOUNT"|"SUM_BY_DATA_SOURCE"|"SUM_BY_RESOURCE"|"TOP_RESOURCES"|"SUM_BY_FEATURES"|"TOP_ACCOUNTS_BY_FEATURE", UsageCriteria:array{AccountIds?:array<string>, DataSources?:array<"FLOW_LOGS"|"CLOUD_TRAIL"|"DNS_LOGS"|"S3_LOGS"|"KUBERNETES_AUDIT_LOGS"|"EC2_MALWARE_SCAN">, Resources?:array<string>, Features?:array<"FLOW_LOGS"|"CLOUD_TRAIL"|"DNS_LOGS"|"S3_DATA_EVENTS"|"EKS_AUDIT_LOGS"|"EBS_MALWARE_PROTECTION"|"RDS_LOGIN_EVENTS"|"LAMBDA_NETWORK_LOGS"|"EKS_RUNTIME_MONITORING"|"FARGATE_RUNTIME_MONITORING"|"EC2_RUNTIME_MONITORING"|"RDS_DBI_PROTECTION_PROVISIONED"|"RDS_DBI_PROTECTION_SERVERLESS">}, Unit?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{UsageStatistics?:array{SumByAccount?:array<array{AccountId?:string, Total?:array{Amount?:string, Unit?:string}}>, TopAccountsByFeature?:array<array{Feature?:"FLOW_LOGS"|"CLOUD_TRAIL"|"DNS_LOGS"|"S3_DATA_EVENTS"|"EKS_AUDIT_LOGS"|"EBS_MALWARE_PROTECTION"|"RDS_LOGIN_EVENTS"|"LAMBDA_NETWORK_LOGS"|"EKS_RUNTIME_MONITORING"|"FARGATE_RUNTIME_MONITORING"|"EC2_RUNTIME_MONITORING"|"RDS_DBI_PROTECTION_PROVISIONED"|"RDS_DBI_PROTECTION_SERVERLESS", Accounts?:array<array{AccountId?:string, Total?:array{Amount?:string, Unit?:string}}>}>, SumByDataSource?:array<array{DataSource?:"FLOW_LOGS"|"CLOUD_TRAIL"|"DNS_LOGS"|"S3_LOGS"|"KUBERNETES_AUDIT_LOGS"|"EC2_MALWARE_SCAN", Total?:array{Amount?:string, Unit?:string}}>, SumByResource?:array<array{Resource?:string, Total?:array{Amount?:string, Unit?:string}}>, TopResources?:array<array{Resource?:string, Total?:array{Amount?:string, Unit?:string}}>, SumByFeature?:array<array{Feature?:"FLOW_LOGS"|"CLOUD_TRAIL"|"DNS_LOGS"|"S3_DATA_EVENTS"|"EKS_AUDIT_LOGS"|"EBS_MALWARE_PROTECTION"|"RDS_LOGIN_EVENTS"|"LAMBDA_NETWORK_LOGS"|"EKS_RUNTIME_MONITORING"|"FARGATE_RUNTIME_MONITORING"|"EC2_RUNTIME_MONITORING"|"RDS_DBI_PROTECTION_PROVISIONED"|"RDS_DBI_PROTECTION_SERVERLESS", Total?:array{Amount?:string, Unit?:string}}>}, NextToken?:string}>
     */
    public function getUsageStatistics(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, UsageStatisticType:"SUM_BY_ACCOUNT"|"SUM_BY_DATA_SOURCE"|"SUM_BY_RESOURCE"|"TOP_RESOURCES"|"SUM_BY_FEATURES"|"TOP_ACCOUNTS_BY_FEATURE", UsageCriteria:array{AccountIds?:array<string>, DataSources?:array<"FLOW_LOGS"|"CLOUD_TRAIL"|"DNS_LOGS"|"S3_LOGS"|"KUBERNETES_AUDIT_LOGS"|"EC2_MALWARE_SCAN">, Resources?:array<string>, Features?:array<"FLOW_LOGS"|"CLOUD_TRAIL"|"DNS_LOGS"|"S3_DATA_EVENTS"|"EKS_AUDIT_LOGS"|"EBS_MALWARE_PROTECTION"|"RDS_LOGIN_EVENTS"|"LAMBDA_NETWORK_LOGS"|"EKS_RUNTIME_MONITORING"|"FARGATE_RUNTIME_MONITORING"|"EC2_RUNTIME_MONITORING"|"RDS_DBI_PROTECTION_PROVISIONED"|"RDS_DBI_PROTECTION_SERVERLESS">}, Unit?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UsageStatistics?:array{SumByAccount?:array<array{AccountId?:string, Total?:array{Amount?:string, Unit?:string}}>, TopAccountsByFeature?:array<array{Feature?:"FLOW_LOGS"|"CLOUD_TRAIL"|"DNS_LOGS"|"S3_DATA_EVENTS"|"EKS_AUDIT_LOGS"|"EBS_MALWARE_PROTECTION"|"RDS_LOGIN_EVENTS"|"LAMBDA_NETWORK_LOGS"|"EKS_RUNTIME_MONITORING"|"FARGATE_RUNTIME_MONITORING"|"EC2_RUNTIME_MONITORING"|"RDS_DBI_PROTECTION_PROVISIONED"|"RDS_DBI_PROTECTION_SERVERLESS", Accounts?:array<array{AccountId?:string, Total?:array{Amount?:string, Unit?:string}}>}>, SumByDataSource?:array<array{DataSource?:"FLOW_LOGS"|"CLOUD_TRAIL"|"DNS_LOGS"|"S3_LOGS"|"KUBERNETES_AUDIT_LOGS"|"EC2_MALWARE_SCAN", Total?:array{Amount?:string, Unit?:string}}>, SumByResource?:array<array{Resource?:string, Total?:array{Amount?:string, Unit?:string}}>, TopResources?:array<array{Resource?:string, Total?:array{Amount?:string, Unit?:string}}>, SumByFeature?:array<array{Feature?:"FLOW_LOGS"|"CLOUD_TRAIL"|"DNS_LOGS"|"S3_DATA_EVENTS"|"EKS_AUDIT_LOGS"|"EBS_MALWARE_PROTECTION"|"RDS_LOGIN_EVENTS"|"LAMBDA_NETWORK_LOGS"|"EKS_RUNTIME_MONITORING"|"FARGATE_RUNTIME_MONITORING"|"EC2_RUNTIME_MONITORING"|"RDS_DBI_PROTECTION_PROVISIONED"|"RDS_DBI_PROTECTION_SERVERLESS", Total?:array{Amount?:string, Unit?:string}}>}, NextToken?:string}>
     */
    public function getUsageStatisticsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, AccountIds:array<string>, DisableEmailNotification?:bool, Message?:string} $args
     * @return \AWS\Result<array{UnprocessedAccounts:array<array{AccountId:string, Result:string}>}>
     */
    public function inviteMembers(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, AccountIds:array<string>, DisableEmailNotification?:bool, Message?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UnprocessedAccounts:array<array{AccountId:string, Result:string}>}>
     */
    public function inviteMembersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, NextToken?:string, MaxResults?:int, FilterCriteria?:array{FilterCriterion?:array<array{CriterionKey?:"ACCOUNT_ID"|"CLUSTER_NAME"|"RESOURCE_TYPE"|"COVERAGE_STATUS"|"ADDON_VERSION"|"MANAGEMENT_TYPE"|"EKS_CLUSTER_NAME"|"ECS_CLUSTER_NAME"|"AGENT_VERSION"|"INSTANCE_ID"|"CLUSTER_ARN", FilterCondition?:array{Equals?:array<string>, NotEquals?:array<string>}}>}, SortCriteria?:array{AttributeName?:"ACCOUNT_ID"|"CLUSTER_NAME"|"COVERAGE_STATUS"|"ISSUE"|"ADDON_VERSION"|"UPDATED_AT"|"EKS_CLUSTER_NAME"|"ECS_CLUSTER_NAME"|"INSTANCE_ID", OrderBy?:"ASC"|"DESC"}} $args
     * @return \AWS\Result<array{Resources:array<array{ResourceId?:string, DetectorId?:string, AccountId?:string, ResourceDetails?:array{EksClusterDetails?:array{ClusterName?:string, CoveredNodes?:int, CompatibleNodes?:int, AddonDetails?:array{AddonVersion?:string, AddonStatus?:string}, ManagementType?:"AUTO_MANAGED"|"MANUAL"|"DISABLED"}, ResourceType?:"EKS"|"ECS"|"EC2", EcsClusterDetails?:array{ClusterName?:string, FargateDetails?:array{Issues?:array<string>, ManagementType?:"AUTO_MANAGED"|"MANUAL"|"DISABLED"}, ContainerInstanceDetails?:array{CoveredContainerInstances?:int, CompatibleContainerInstances?:int}}, Ec2InstanceDetails?:array{InstanceId?:string, InstanceType?:string, ClusterArn?:string, AgentDetails?:array{Version?:string}, ManagementType?:"AUTO_MANAGED"|"MANUAL"|"DISABLED"}}, CoverageStatus?:"HEALTHY"|"UNHEALTHY", Issue?:string, UpdatedAt?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listCoverage(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, NextToken?:string, MaxResults?:int, FilterCriteria?:array{FilterCriterion?:array<array{CriterionKey?:"ACCOUNT_ID"|"CLUSTER_NAME"|"RESOURCE_TYPE"|"COVERAGE_STATUS"|"ADDON_VERSION"|"MANAGEMENT_TYPE"|"EKS_CLUSTER_NAME"|"ECS_CLUSTER_NAME"|"AGENT_VERSION"|"INSTANCE_ID"|"CLUSTER_ARN", FilterCondition?:array{Equals?:array<string>, NotEquals?:array<string>}}>}, SortCriteria?:array{AttributeName?:"ACCOUNT_ID"|"CLUSTER_NAME"|"COVERAGE_STATUS"|"ISSUE"|"ADDON_VERSION"|"UPDATED_AT"|"EKS_CLUSTER_NAME"|"ECS_CLUSTER_NAME"|"INSTANCE_ID", OrderBy?:"ASC"|"DESC"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Resources:array<array{ResourceId?:string, DetectorId?:string, AccountId?:string, ResourceDetails?:array{EksClusterDetails?:array{ClusterName?:string, CoveredNodes?:int, CompatibleNodes?:int, AddonDetails?:array{AddonVersion?:string, AddonStatus?:string}, ManagementType?:"AUTO_MANAGED"|"MANUAL"|"DISABLED"}, ResourceType?:"EKS"|"ECS"|"EC2", EcsClusterDetails?:array{ClusterName?:string, FargateDetails?:array{Issues?:array<string>, ManagementType?:"AUTO_MANAGED"|"MANUAL"|"DISABLED"}, ContainerInstanceDetails?:array{CoveredContainerInstances?:int, CompatibleContainerInstances?:int}}, Ec2InstanceDetails?:array{InstanceId?:string, InstanceType?:string, ClusterArn?:string, AgentDetails?:array{Version?:string}, ManagementType?:"AUTO_MANAGED"|"MANUAL"|"DISABLED"}}, CoverageStatus?:"HEALTHY"|"UNHEALTHY", Issue?:string, UpdatedAt?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listCoverageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{DetectorIds:array<string>, NextToken?:string}>
     */
    public function listDetectors(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DetectorIds:array<string>, NextToken?:string}>
     */
    public function listDetectorsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{FilterNames:array<string>, NextToken?:string}>
     */
    public function listFilters(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FilterNames:array<string>, NextToken?:string}>
     */
    public function listFiltersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, FindingCriteria?:array{Criterion?:array<string, array{Eq?:array<string>, Neq?:array<string>, Gt?:int, Gte?:int, Lt?:int, Lte?:int, Equals?:array<string>, NotEquals?:array<string>, GreaterThan?:int, GreaterThanOrEqual?:int, LessThan?:int, LessThanOrEqual?:int}>}, SortCriteria?:array{AttributeName?:string, OrderBy?:"ASC"|"DESC"}, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{FindingIds:array<string>, NextToken?:string}>
     */
    public function listFindings(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, FindingCriteria?:array{Criterion?:array<string, array{Eq?:array<string>, Neq?:array<string>, Gt?:int, Gte?:int, Lt?:int, Lte?:int, Equals?:array<string>, NotEquals?:array<string>, GreaterThan?:int, GreaterThanOrEqual?:int, LessThan?:int, LessThanOrEqual?:int}>}, SortCriteria?:array{AttributeName?:string, OrderBy?:"ASC"|"DESC"}, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FindingIds:array<string>, NextToken?:string}>
     */
    public function listFindingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{IpSetIds:array<string>, NextToken?:string}>
     */
    public function listIPSets(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IpSetIds:array<string>, NextToken?:string}>
     */
    public function listIPSetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Invitations?:array<array{AccountId?:string, InvitationId?:string, RelationshipStatus?:string, InvitedAt?:string}>, NextToken?:string}>
     */
    public function listInvitations(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Invitations?:array<array{AccountId?:string, InvitationId?:string, RelationshipStatus?:string, InvitedAt?:string}>, NextToken?:string}>
     */
    public function listInvitationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string} $args
     * @return \AWS\Result<array{MalwareProtectionPlans?:array<array{MalwareProtectionPlanId?:string}>, NextToken?:string}>
     */
    public function listMalwareProtectionPlans(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MalwareProtectionPlans?:array<array{MalwareProtectionPlanId?:string}>, NextToken?:string}>
     */
    public function listMalwareProtectionPlansAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, MaxResults?:int, NextToken?:string, OnlyAssociated?:string} $args
     * @return \AWS\Result<array{Members?:array<array{AccountId:string, DetectorId?:string, MasterId:string, Email:string, RelationshipStatus:string, InvitedAt?:string, UpdatedAt:string, AdministratorId?:string}>, NextToken?:string}>
     */
    public function listMembers(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, MaxResults?:int, NextToken?:string, OnlyAssociated?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Members?:array<array{AccountId:string, DetectorId?:string, MasterId:string, Email:string, RelationshipStatus:string, InvitedAt?:string, UpdatedAt:string, AdministratorId?:string}>, NextToken?:string}>
     */
    public function listMembersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{AdminAccounts?:array<array{AdminAccountId?:string, AdminStatus?:"ENABLED"|"DISABLE_IN_PROGRESS"}>, NextToken?:string}>
     */
    public function listOrganizationAdminAccounts(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AdminAccounts?:array<array{AdminAccountId?:string, AdminStatus?:"ENABLED"|"DISABLE_IN_PROGRESS"}>, NextToken?:string}>
     */
    public function listOrganizationAdminAccountsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Destinations:array<array{DestinationId:string, DestinationType:"S3", Status:"PENDING_VERIFICATION"|"PUBLISHING"|"UNABLE_TO_PUBLISH_FIX_DESTINATION_PROPERTY"|"STOPPED"}>, NextToken?:string}>
     */
    public function listPublishingDestinations(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Destinations:array<array{DestinationId:string, DestinationType:"S3", Status:"PENDING_VERIFICATION"|"PUBLISHING"|"UNABLE_TO_PUBLISH_FIX_DESTINATION_PROPERTY"|"STOPPED"}>, NextToken?:string}>
     */
    public function listPublishingDestinationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{DetectorId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ThreatIntelSetIds:array<string>, NextToken?:string}>
     */
    public function listThreatIntelSets(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ThreatIntelSetIds:array<string>, NextToken?:string}>
     */
    public function listThreatIntelSetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{ScanId?:string}>
     */
    public function startMalwareScan(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ScanId?:string}>
     */
    public function startMalwareScanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, AccountIds:array<string>} $args
     * @return \AWS\Result<array{UnprocessedAccounts:array<array{AccountId:string, Result:string}>}>
     */
    public function startMonitoringMembers(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, AccountIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{UnprocessedAccounts:array<array{AccountId:string, Result:string}>}>
     */
    public function startMonitoringMembersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, AccountIds:array<string>} $args
     * @return \AWS\Result<array{UnprocessedAccounts:array<array{AccountId:string, Result:string}>}>
     */
    public function stopMonitoringMembers(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, AccountIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{UnprocessedAccounts:array<array{AccountId:string, Result:string}>}>
     */
    public function stopMonitoringMembersAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{DetectorId:string, FindingIds:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function unarchiveFindings(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, FindingIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function unarchiveFindingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{DetectorId:string, Enable?:bool, FindingPublishingFrequency?:"FIFTEEN_MINUTES"|"ONE_HOUR"|"SIX_HOURS", DataSources?:array{S3Logs?:array{Enable:bool}, Kubernetes?:array{AuditLogs:array{Enable:bool}}, MalwareProtection?:array{ScanEc2InstanceWithFindings?:array{EbsVolumes?:bool}}}, Features?:array<array{Name?:"S3_DATA_EVENTS"|"EKS_AUDIT_LOGS"|"EBS_MALWARE_PROTECTION"|"RDS_LOGIN_EVENTS"|"EKS_RUNTIME_MONITORING"|"LAMBDA_NETWORK_LOGS"|"RUNTIME_MONITORING", Status?:"ENABLED"|"DISABLED", AdditionalConfiguration?:array<array{Name?:"EKS_ADDON_MANAGEMENT"|"ECS_FARGATE_AGENT_MANAGEMENT"|"EC2_AGENT_MANAGEMENT", Status?:"ENABLED"|"DISABLED"}>}>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateDetector(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, Enable?:bool, FindingPublishingFrequency?:"FIFTEEN_MINUTES"|"ONE_HOUR"|"SIX_HOURS", DataSources?:array{S3Logs?:array{Enable:bool}, Kubernetes?:array{AuditLogs:array{Enable:bool}}, MalwareProtection?:array{ScanEc2InstanceWithFindings?:array{EbsVolumes?:bool}}}, Features?:array<array{Name?:"S3_DATA_EVENTS"|"EKS_AUDIT_LOGS"|"EBS_MALWARE_PROTECTION"|"RDS_LOGIN_EVENTS"|"EKS_RUNTIME_MONITORING"|"LAMBDA_NETWORK_LOGS"|"RUNTIME_MONITORING", Status?:"ENABLED"|"DISABLED", AdditionalConfiguration?:array<array{Name?:"EKS_ADDON_MANAGEMENT"|"ECS_FARGATE_AGENT_MANAGEMENT"|"EC2_AGENT_MANAGEMENT", Status?:"ENABLED"|"DISABLED"}>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateDetectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, FilterName:string, Description?:string, Action?:"NOOP"|"ARCHIVE", Rank?:int, FindingCriteria?:array{Criterion?:array<string, array{Eq?:array<string>, Neq?:array<string>, Gt?:int, Gte?:int, Lt?:int, Lte?:int, Equals?:array<string>, NotEquals?:array<string>, GreaterThan?:int, GreaterThanOrEqual?:int, LessThan?:int, LessThanOrEqual?:int}>}} $args
     * @return \AWS\Result<array{Name:string}>
     */
    public function updateFilter(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, FilterName:string, Description?:string, Action?:"NOOP"|"ARCHIVE", Rank?:int, FindingCriteria?:array{Criterion?:array<string, array{Eq?:array<string>, Neq?:array<string>, Gt?:int, Gte?:int, Lt?:int, Lte?:int, Equals?:array<string>, NotEquals?:array<string>, GreaterThan?:int, GreaterThanOrEqual?:int, LessThan?:int, LessThanOrEqual?:int}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name:string}>
     */
    public function updateFilterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, FindingIds:array<string>, Feedback:"USEFUL"|"NOT_USEFUL", Comments?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateFindingsFeedback(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, FindingIds:array<string>, Feedback:"USEFUL"|"NOT_USEFUL", Comments?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateFindingsFeedbackAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, IpSetId:string, Name?:string, Location?:string, Activate?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function updateIPSet(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, IpSetId:string, Name?:string, Location?:string, Activate?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateIPSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MalwareProtectionPlanId:string, Role?:string, Actions?:array{Tagging?:array{Status?:"ENABLED"|"DISABLED"}}, ProtectedResource?:array{S3Bucket?:array{ObjectPrefixes?:array<string>}}} $args
     * @return \AWS\Result<void>
     */
    public function updateMalwareProtectionPlan(array $args): \AWS\Result { }

    /**
     * @param array{MalwareProtectionPlanId:string, Role?:string, Actions?:array{Tagging?:array{Status?:"ENABLED"|"DISABLED"}}, ProtectedResource?:array{S3Bucket?:array{ObjectPrefixes?:array<string>}}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateMalwareProtectionPlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, ScanResourceCriteria?:array{Include?:array<"EC2_INSTANCE_TAG", array{MapEquals:array<array{Key:string, Value?:string}>}>, Exclude?:array<"EC2_INSTANCE_TAG", array{MapEquals:array<array{Key:string, Value?:string}>}>}, EbsSnapshotPreservation?:"NO_RETENTION"|"RETENTION_WITH_FINDING"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateMalwareScanSettings(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, ScanResourceCriteria?:array{Include?:array<"EC2_INSTANCE_TAG", array{MapEquals:array<array{Key:string, Value?:string}>}>, Exclude?:array<"EC2_INSTANCE_TAG", array{MapEquals:array<array{Key:string, Value?:string}>}>}, EbsSnapshotPreservation?:"NO_RETENTION"|"RETENTION_WITH_FINDING"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateMalwareScanSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, AccountIds:array<string>, DataSources?:array{S3Logs?:array{Enable:bool}, Kubernetes?:array{AuditLogs:array{Enable:bool}}, MalwareProtection?:array{ScanEc2InstanceWithFindings?:array{EbsVolumes?:bool}}}, Features?:array<array{Name?:"S3_DATA_EVENTS"|"EKS_AUDIT_LOGS"|"EBS_MALWARE_PROTECTION"|"RDS_LOGIN_EVENTS"|"EKS_RUNTIME_MONITORING"|"LAMBDA_NETWORK_LOGS"|"RUNTIME_MONITORING", Status?:"ENABLED"|"DISABLED", AdditionalConfiguration?:array<array{Name?:"EKS_ADDON_MANAGEMENT"|"ECS_FARGATE_AGENT_MANAGEMENT"|"EC2_AGENT_MANAGEMENT", Status?:"ENABLED"|"DISABLED"}>}>} $args
     * @return \AWS\Result<array{UnprocessedAccounts:array<array{AccountId:string, Result:string}>}>
     */
    public function updateMemberDetectors(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, AccountIds:array<string>, DataSources?:array{S3Logs?:array{Enable:bool}, Kubernetes?:array{AuditLogs:array{Enable:bool}}, MalwareProtection?:array{ScanEc2InstanceWithFindings?:array{EbsVolumes?:bool}}}, Features?:array<array{Name?:"S3_DATA_EVENTS"|"EKS_AUDIT_LOGS"|"EBS_MALWARE_PROTECTION"|"RDS_LOGIN_EVENTS"|"EKS_RUNTIME_MONITORING"|"LAMBDA_NETWORK_LOGS"|"RUNTIME_MONITORING", Status?:"ENABLED"|"DISABLED", AdditionalConfiguration?:array<array{Name?:"EKS_ADDON_MANAGEMENT"|"ECS_FARGATE_AGENT_MANAGEMENT"|"EC2_AGENT_MANAGEMENT", Status?:"ENABLED"|"DISABLED"}>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{UnprocessedAccounts:array<array{AccountId:string, Result:string}>}>
     */
    public function updateMemberDetectorsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, AutoEnable?:bool, DataSources?:array{S3Logs?:array{AutoEnable:bool}, Kubernetes?:array{AuditLogs:array{AutoEnable:bool}}, MalwareProtection?:array{ScanEc2InstanceWithFindings?:array{EbsVolumes?:array{AutoEnable?:bool}}}}, Features?:array<array{Name?:"S3_DATA_EVENTS"|"EKS_AUDIT_LOGS"|"EBS_MALWARE_PROTECTION"|"RDS_LOGIN_EVENTS"|"EKS_RUNTIME_MONITORING"|"LAMBDA_NETWORK_LOGS"|"RUNTIME_MONITORING", AutoEnable?:"NEW"|"NONE"|"ALL", AdditionalConfiguration?:array<array{Name?:"EKS_ADDON_MANAGEMENT"|"ECS_FARGATE_AGENT_MANAGEMENT"|"EC2_AGENT_MANAGEMENT", AutoEnable?:"NEW"|"NONE"|"ALL"}>}>, AutoEnableOrganizationMembers?:"NEW"|"ALL"|"NONE"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateOrganizationConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, AutoEnable?:bool, DataSources?:array{S3Logs?:array{AutoEnable:bool}, Kubernetes?:array{AuditLogs:array{AutoEnable:bool}}, MalwareProtection?:array{ScanEc2InstanceWithFindings?:array{EbsVolumes?:array{AutoEnable?:bool}}}}, Features?:array<array{Name?:"S3_DATA_EVENTS"|"EKS_AUDIT_LOGS"|"EBS_MALWARE_PROTECTION"|"RDS_LOGIN_EVENTS"|"EKS_RUNTIME_MONITORING"|"LAMBDA_NETWORK_LOGS"|"RUNTIME_MONITORING", AutoEnable?:"NEW"|"NONE"|"ALL", AdditionalConfiguration?:array<array{Name?:"EKS_ADDON_MANAGEMENT"|"ECS_FARGATE_AGENT_MANAGEMENT"|"EC2_AGENT_MANAGEMENT", AutoEnable?:"NEW"|"NONE"|"ALL"}>}>, AutoEnableOrganizationMembers?:"NEW"|"ALL"|"NONE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateOrganizationConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, DestinationId:string, DestinationProperties?:array{DestinationArn?:string, KmsKeyArn?:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function updatePublishingDestination(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, DestinationId:string, DestinationProperties?:array{DestinationArn?:string, KmsKeyArn?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updatePublishingDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DetectorId:string, ThreatIntelSetId:string, Name?:string, Location?:string, Activate?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function updateThreatIntelSet(array $args): \AWS\Result { }

    /**
     * @param array{DetectorId:string, ThreatIntelSetId:string, Name?:string, Location?:string, Activate?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateThreatIntelSetAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
