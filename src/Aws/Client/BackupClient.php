<?php
namespace AWS\Backup;

class BackupClient
{
    /**
     * @param array{LegalHoldId:string, CancelDescription:string, RetainRecordInDays?:int} $args
     * @return \AWS\Result<array{}>
     */
    public function cancelLegalHold(array $args): \AWS\Result { }

    /**
     * @param array{LegalHoldId:string, CancelDescription:string, RetainRecordInDays?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function cancelLegalHoldAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupPlan:array{BackupPlanName:string, Rules:array<array{RuleName:string, TargetBackupVaultName:string, ScheduleExpression?:string, StartWindowMinutes?:int, CompletionWindowMinutes?:int, Lifecycle?:array{MoveToColdStorageAfterDays?:int, DeleteAfterDays?:int, OptInToArchiveForSupportedResources?:bool}, RecoveryPointTags?:array<string, string>, CopyActions?:array<array{Lifecycle?:array{MoveToColdStorageAfterDays?:int, DeleteAfterDays?:int, OptInToArchiveForSupportedResources?:bool}, DestinationBackupVaultArn:string}>, EnableContinuousBackup?:bool, ScheduleExpressionTimezone?:string, IndexActions?:array<array{ResourceTypes?:array<string>}>}>, AdvancedBackupSettings?:array<array{ResourceType?:string, BackupOptions?:array<string, string>}>}, BackupPlanTags?:array<string, string>, CreatorRequestId?:string} $args
     * @return \AWS\Result<array{BackupPlanId?:string, BackupPlanArn?:string, CreationDate?:int|string|\DateTimeInterface, VersionId?:string, AdvancedBackupSettings?:array<array{ResourceType?:string, BackupOptions?:array<string, string>}>}>
     */
    public function createBackupPlan(array $args): \AWS\Result { }

    /**
     * @param array{BackupPlan:array{BackupPlanName:string, Rules:array<array{RuleName:string, TargetBackupVaultName:string, ScheduleExpression?:string, StartWindowMinutes?:int, CompletionWindowMinutes?:int, Lifecycle?:array{MoveToColdStorageAfterDays?:int, DeleteAfterDays?:int, OptInToArchiveForSupportedResources?:bool}, RecoveryPointTags?:array<string, string>, CopyActions?:array<array{Lifecycle?:array{MoveToColdStorageAfterDays?:int, DeleteAfterDays?:int, OptInToArchiveForSupportedResources?:bool}, DestinationBackupVaultArn:string}>, EnableContinuousBackup?:bool, ScheduleExpressionTimezone?:string, IndexActions?:array<array{ResourceTypes?:array<string>}>}>, AdvancedBackupSettings?:array<array{ResourceType?:string, BackupOptions?:array<string, string>}>}, BackupPlanTags?:array<string, string>, CreatorRequestId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BackupPlanId?:string, BackupPlanArn?:string, CreationDate?:int|string|\DateTimeInterface, VersionId?:string, AdvancedBackupSettings?:array<array{ResourceType?:string, BackupOptions?:array<string, string>}>}>
     */
    public function createBackupPlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupPlanId:string, BackupSelection:array{SelectionName:string, IamRoleArn:string, Resources?:array<string>, ListOfTags?:array<array{ConditionType:"STRINGEQUALS", ConditionKey:string, ConditionValue:string}>, NotResources?:array<string>, Conditions?:array{StringEquals?:array<array{ConditionKey?:string, ConditionValue?:string}>, StringNotEquals?:array<array{ConditionKey?:string, ConditionValue?:string}>, StringLike?:array<array{ConditionKey?:string, ConditionValue?:string}>, StringNotLike?:array<array{ConditionKey?:string, ConditionValue?:string}>}}, CreatorRequestId?:string} $args
     * @return \AWS\Result<array{SelectionId?:string, BackupPlanId?:string, CreationDate?:int|string|\DateTimeInterface}>
     */
    public function createBackupSelection(array $args): \AWS\Result { }

    /**
     * @param array{BackupPlanId:string, BackupSelection:array{SelectionName:string, IamRoleArn:string, Resources?:array<string>, ListOfTags?:array<array{ConditionType:"STRINGEQUALS", ConditionKey:string, ConditionValue:string}>, NotResources?:array<string>, Conditions?:array{StringEquals?:array<array{ConditionKey?:string, ConditionValue?:string}>, StringNotEquals?:array<array{ConditionKey?:string, ConditionValue?:string}>, StringLike?:array<array{ConditionKey?:string, ConditionValue?:string}>, StringNotLike?:array<array{ConditionKey?:string, ConditionValue?:string}>}}, CreatorRequestId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SelectionId?:string, BackupPlanId?:string, CreationDate?:int|string|\DateTimeInterface}>
     */
    public function createBackupSelectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupVaultName:string, BackupVaultTags?:array<string, string>, EncryptionKeyArn?:string, CreatorRequestId?:string} $args
     * @return \AWS\Result<array{BackupVaultName?:string, BackupVaultArn?:string, CreationDate?:int|string|\DateTimeInterface}>
     */
    public function createBackupVault(array $args): \AWS\Result { }

    /**
     * @param array{BackupVaultName:string, BackupVaultTags?:array<string, string>, EncryptionKeyArn?:string, CreatorRequestId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BackupVaultName?:string, BackupVaultArn?:string, CreationDate?:int|string|\DateTimeInterface}>
     */
    public function createBackupVaultAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FrameworkName:string, FrameworkDescription?:string, FrameworkControls:array<array{ControlName:string, ControlInputParameters?:array<array{ParameterName?:string, ParameterValue?:string}>, ControlScope?:array{ComplianceResourceIds?:array<string>, ComplianceResourceTypes?:array<string>, Tags?:array<string, string>}}>, IdempotencyToken?:string, FrameworkTags?:array<string, string>} $args
     * @return \AWS\Result<array{FrameworkName?:string, FrameworkArn?:string}>
     */
    public function createFramework(array $args): \AWS\Result { }

    /**
     * @param array{FrameworkName:string, FrameworkDescription?:string, FrameworkControls:array<array{ControlName:string, ControlInputParameters?:array<array{ParameterName?:string, ParameterValue?:string}>, ControlScope?:array{ComplianceResourceIds?:array<string>, ComplianceResourceTypes?:array<string>, Tags?:array<string, string>}}>, IdempotencyToken?:string, FrameworkTags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{FrameworkName?:string, FrameworkArn?:string}>
     */
    public function createFrameworkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Title:string, Description:string, IdempotencyToken?:string, RecoveryPointSelection?:array{VaultNames?:array<string>, ResourceIdentifiers?:array<string>, DateRange?:array{FromDate:int|string|\DateTimeInterface, ToDate:int|string|\DateTimeInterface}}, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Title?:string, Status?:"CREATING"|"ACTIVE"|"CANCELING"|"CANCELED", Description?:string, LegalHoldId?:string, LegalHoldArn?:string, CreationDate?:int|string|\DateTimeInterface, RecoveryPointSelection?:array{VaultNames?:array<string>, ResourceIdentifiers?:array<string>, DateRange?:array{FromDate:int|string|\DateTimeInterface, ToDate:int|string|\DateTimeInterface}}}>
     */
    public function createLegalHold(array $args): \AWS\Result { }

    /**
     * @param array{Title:string, Description:string, IdempotencyToken?:string, RecoveryPointSelection?:array{VaultNames?:array<string>, ResourceIdentifiers?:array<string>, DateRange?:array{FromDate:int|string|\DateTimeInterface, ToDate:int|string|\DateTimeInterface}}, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Title?:string, Status?:"CREATING"|"ACTIVE"|"CANCELING"|"CANCELED", Description?:string, LegalHoldId?:string, LegalHoldArn?:string, CreationDate?:int|string|\DateTimeInterface, RecoveryPointSelection?:array{VaultNames?:array<string>, ResourceIdentifiers?:array<string>, DateRange?:array{FromDate:int|string|\DateTimeInterface, ToDate:int|string|\DateTimeInterface}}}>
     */
    public function createLegalHoldAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupVaultName:string, BackupVaultTags?:array<string, string>, CreatorRequestId?:string, MinRetentionDays:int, MaxRetentionDays:int} $args
     * @return \AWS\Result<array{BackupVaultName?:string, BackupVaultArn?:string, CreationDate?:int|string|\DateTimeInterface, VaultState?:"CREATING"|"AVAILABLE"|"FAILED"}>
     */
    public function createLogicallyAirGappedBackupVault(array $args): \AWS\Result { }

    /**
     * @param array{BackupVaultName:string, BackupVaultTags?:array<string, string>, CreatorRequestId?:string, MinRetentionDays:int, MaxRetentionDays:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{BackupVaultName?:string, BackupVaultArn?:string, CreationDate?:int|string|\DateTimeInterface, VaultState?:"CREATING"|"AVAILABLE"|"FAILED"}>
     */
    public function createLogicallyAirGappedBackupVaultAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ReportPlanName:string, ReportPlanDescription?:string, ReportDeliveryChannel:array{S3BucketName:string, S3KeyPrefix?:string, Formats?:array<string>}, ReportSetting:array{ReportTemplate:string, FrameworkArns?:array<string>, NumberOfFrameworks?:int, Accounts?:array<string>, OrganizationUnits?:array<string>, Regions?:array<string>}, ReportPlanTags?:array<string, string>, IdempotencyToken?:string} $args
     * @return \AWS\Result<array{ReportPlanName?:string, ReportPlanArn?:string, CreationTime?:int|string|\DateTimeInterface}>
     */
    public function createReportPlan(array $args): \AWS\Result { }

    /**
     * @param array{ReportPlanName:string, ReportPlanDescription?:string, ReportDeliveryChannel:array{S3BucketName:string, S3KeyPrefix?:string, Formats?:array<string>}, ReportSetting:array{ReportTemplate:string, FrameworkArns?:array<string>, NumberOfFrameworks?:int, Accounts?:array<string>, OrganizationUnits?:array<string>, Regions?:array<string>}, ReportPlanTags?:array<string, string>, IdempotencyToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReportPlanName?:string, ReportPlanArn?:string, CreationTime?:int|string|\DateTimeInterface}>
     */
    public function createReportPlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CreatorRequestId?:string, RestoreTestingPlan:array{RecoveryPointSelection:array{Algorithm?:"LATEST_WITHIN_WINDOW"|"RANDOM_WITHIN_WINDOW", ExcludeVaults?:array<string>, IncludeVaults?:array<string>, RecoveryPointTypes?:array<"CONTINUOUS"|"SNAPSHOT">, SelectionWindowDays?:int}, RestoreTestingPlanName:string, ScheduleExpression:string, ScheduleExpressionTimezone?:string, StartWindowHours?:int}, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{CreationTime:int|string|\DateTimeInterface, RestoreTestingPlanArn:string, RestoreTestingPlanName:string}>
     */
    public function createRestoreTestingPlan(array $args): \AWS\Result { }

    /**
     * @param array{CreatorRequestId?:string, RestoreTestingPlan:array{RecoveryPointSelection:array{Algorithm?:"LATEST_WITHIN_WINDOW"|"RANDOM_WITHIN_WINDOW", ExcludeVaults?:array<string>, IncludeVaults?:array<string>, RecoveryPointTypes?:array<"CONTINUOUS"|"SNAPSHOT">, SelectionWindowDays?:int}, RestoreTestingPlanName:string, ScheduleExpression:string, ScheduleExpressionTimezone?:string, StartWindowHours?:int}, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{CreationTime:int|string|\DateTimeInterface, RestoreTestingPlanArn:string, RestoreTestingPlanName:string}>
     */
    public function createRestoreTestingPlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CreatorRequestId?:string, RestoreTestingPlanName:string, RestoreTestingSelection:array{IamRoleArn:string, ProtectedResourceArns?:array<string>, ProtectedResourceConditions?:array{StringEquals?:array<array{Key:string, Value:string}>, StringNotEquals?:array<array{Key:string, Value:string}>}, ProtectedResourceType:string, RestoreMetadataOverrides?:array<string, string>, RestoreTestingSelectionName:string, ValidationWindowHours?:int}} $args
     * @return \AWS\Result<array{CreationTime:int|string|\DateTimeInterface, RestoreTestingPlanArn:string, RestoreTestingPlanName:string, RestoreTestingSelectionName:string}>
     */
    public function createRestoreTestingSelection(array $args): \AWS\Result { }

    /**
     * @param array{CreatorRequestId?:string, RestoreTestingPlanName:string, RestoreTestingSelection:array{IamRoleArn:string, ProtectedResourceArns?:array<string>, ProtectedResourceConditions?:array{StringEquals?:array<array{Key:string, Value:string}>, StringNotEquals?:array<array{Key:string, Value:string}>}, ProtectedResourceType:string, RestoreMetadataOverrides?:array<string, string>, RestoreTestingSelectionName:string, ValidationWindowHours?:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{CreationTime:int|string|\DateTimeInterface, RestoreTestingPlanArn:string, RestoreTestingPlanName:string, RestoreTestingSelectionName:string}>
     */
    public function createRestoreTestingSelectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupPlanId:string} $args
     * @return \AWS\Result<array{BackupPlanId?:string, BackupPlanArn?:string, DeletionDate?:int|string|\DateTimeInterface, VersionId?:string}>
     */
    public function deleteBackupPlan(array $args): \AWS\Result { }

    /**
     * @param array{BackupPlanId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BackupPlanId?:string, BackupPlanArn?:string, DeletionDate?:int|string|\DateTimeInterface, VersionId?:string}>
     */
    public function deleteBackupPlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupPlanId:string, SelectionId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteBackupSelection(array $args): \AWS\Result { }

    /**
     * @param array{BackupPlanId:string, SelectionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteBackupSelectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupVaultName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteBackupVault(array $args): \AWS\Result { }

    /**
     * @param array{BackupVaultName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteBackupVaultAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupVaultName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteBackupVaultAccessPolicy(array $args): \AWS\Result { }

    /**
     * @param array{BackupVaultName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteBackupVaultAccessPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupVaultName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteBackupVaultLockConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{BackupVaultName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteBackupVaultLockConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupVaultName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteBackupVaultNotifications(array $args): \AWS\Result { }

    /**
     * @param array{BackupVaultName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteBackupVaultNotificationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FrameworkName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteFramework(array $args): \AWS\Result { }

    /**
     * @param array{FrameworkName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteFrameworkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupVaultName:string, RecoveryPointArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteRecoveryPoint(array $args): \AWS\Result { }

    /**
     * @param array{BackupVaultName:string, RecoveryPointArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteRecoveryPointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ReportPlanName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteReportPlan(array $args): \AWS\Result { }

    /**
     * @param array{ReportPlanName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteReportPlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RestoreTestingPlanName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteRestoreTestingPlan(array $args): \AWS\Result { }

    /**
     * @param array{RestoreTestingPlanName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteRestoreTestingPlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RestoreTestingPlanName:string, RestoreTestingSelectionName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteRestoreTestingSelection(array $args): \AWS\Result { }

    /**
     * @param array{RestoreTestingPlanName:string, RestoreTestingSelectionName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteRestoreTestingSelectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupJobId:string} $args
     * @return \AWS\Result<array{AccountId?:string, BackupJobId?:string, BackupVaultName?:string, BackupVaultArn?:string, RecoveryPointArn?:string, ResourceArn?:string, CreationDate?:int|string|\DateTimeInterface, CompletionDate?:int|string|\DateTimeInterface, State?:"CREATED"|"PENDING"|"RUNNING"|"ABORTING"|"ABORTED"|"COMPLETED"|"FAILED"|"EXPIRED"|"PARTIAL", StatusMessage?:string, PercentDone?:string, BackupSizeInBytes?:int, IamRoleArn?:string, CreatedBy?:array{BackupPlanId?:string, BackupPlanArn?:string, BackupPlanVersion?:string, BackupRuleId?:string}, ResourceType?:string, BytesTransferred?:int, ExpectedCompletionDate?:int|string|\DateTimeInterface, StartBy?:int|string|\DateTimeInterface, BackupOptions?:array<string, string>, BackupType?:string, ParentJobId?:string, IsParent?:bool, NumberOfChildJobs?:int, ChildJobsInState?:array<"CREATED"|"PENDING"|"RUNNING"|"ABORTING"|"ABORTED"|"COMPLETED"|"FAILED"|"EXPIRED"|"PARTIAL", int>, ResourceName?:string, InitiationDate?:int|string|\DateTimeInterface, MessageCategory?:string}>
     */
    public function describeBackupJob(array $args): \AWS\Result { }

    /**
     * @param array{BackupJobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountId?:string, BackupJobId?:string, BackupVaultName?:string, BackupVaultArn?:string, RecoveryPointArn?:string, ResourceArn?:string, CreationDate?:int|string|\DateTimeInterface, CompletionDate?:int|string|\DateTimeInterface, State?:"CREATED"|"PENDING"|"RUNNING"|"ABORTING"|"ABORTED"|"COMPLETED"|"FAILED"|"EXPIRED"|"PARTIAL", StatusMessage?:string, PercentDone?:string, BackupSizeInBytes?:int, IamRoleArn?:string, CreatedBy?:array{BackupPlanId?:string, BackupPlanArn?:string, BackupPlanVersion?:string, BackupRuleId?:string}, ResourceType?:string, BytesTransferred?:int, ExpectedCompletionDate?:int|string|\DateTimeInterface, StartBy?:int|string|\DateTimeInterface, BackupOptions?:array<string, string>, BackupType?:string, ParentJobId?:string, IsParent?:bool, NumberOfChildJobs?:int, ChildJobsInState?:array<"CREATED"|"PENDING"|"RUNNING"|"ABORTING"|"ABORTED"|"COMPLETED"|"FAILED"|"EXPIRED"|"PARTIAL", int>, ResourceName?:string, InitiationDate?:int|string|\DateTimeInterface, MessageCategory?:string}>
     */
    public function describeBackupJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupVaultName:string, BackupVaultAccountId?:string} $args
     * @return \AWS\Result<array{BackupVaultName?:string, BackupVaultArn?:string, VaultType?:"BACKUP_VAULT"|"LOGICALLY_AIR_GAPPED_BACKUP_VAULT", VaultState?:"CREATING"|"AVAILABLE"|"FAILED", EncryptionKeyArn?:string, CreationDate?:int|string|\DateTimeInterface, CreatorRequestId?:string, NumberOfRecoveryPoints?:int, Locked?:bool, MinRetentionDays?:int, MaxRetentionDays?:int, LockDate?:int|string|\DateTimeInterface}>
     */
    public function describeBackupVault(array $args): \AWS\Result { }

    /**
     * @param array{BackupVaultName:string, BackupVaultAccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BackupVaultName?:string, BackupVaultArn?:string, VaultType?:"BACKUP_VAULT"|"LOGICALLY_AIR_GAPPED_BACKUP_VAULT", VaultState?:"CREATING"|"AVAILABLE"|"FAILED", EncryptionKeyArn?:string, CreationDate?:int|string|\DateTimeInterface, CreatorRequestId?:string, NumberOfRecoveryPoints?:int, Locked?:bool, MinRetentionDays?:int, MaxRetentionDays?:int, LockDate?:int|string|\DateTimeInterface}>
     */
    public function describeBackupVaultAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CopyJobId:string} $args
     * @return \AWS\Result<array{CopyJob?:array{AccountId?:string, CopyJobId?:string, SourceBackupVaultArn?:string, SourceRecoveryPointArn?:string, DestinationBackupVaultArn?:string, DestinationRecoveryPointArn?:string, ResourceArn?:string, CreationDate?:int|string|\DateTimeInterface, CompletionDate?:int|string|\DateTimeInterface, State?:"CREATED"|"RUNNING"|"COMPLETED"|"FAILED"|"PARTIAL", StatusMessage?:string, BackupSizeInBytes?:int, IamRoleArn?:string, CreatedBy?:array{BackupPlanId?:string, BackupPlanArn?:string, BackupPlanVersion?:string, BackupRuleId?:string}, ResourceType?:string, ParentJobId?:string, IsParent?:bool, CompositeMemberIdentifier?:string, NumberOfChildJobs?:int, ChildJobsInState?:array<"CREATED"|"RUNNING"|"COMPLETED"|"FAILED"|"PARTIAL", int>, ResourceName?:string, MessageCategory?:string}}>
     */
    public function describeCopyJob(array $args): \AWS\Result { }

    /**
     * @param array{CopyJobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CopyJob?:array{AccountId?:string, CopyJobId?:string, SourceBackupVaultArn?:string, SourceRecoveryPointArn?:string, DestinationBackupVaultArn?:string, DestinationRecoveryPointArn?:string, ResourceArn?:string, CreationDate?:int|string|\DateTimeInterface, CompletionDate?:int|string|\DateTimeInterface, State?:"CREATED"|"RUNNING"|"COMPLETED"|"FAILED"|"PARTIAL", StatusMessage?:string, BackupSizeInBytes?:int, IamRoleArn?:string, CreatedBy?:array{BackupPlanId?:string, BackupPlanArn?:string, BackupPlanVersion?:string, BackupRuleId?:string}, ResourceType?:string, ParentJobId?:string, IsParent?:bool, CompositeMemberIdentifier?:string, NumberOfChildJobs?:int, ChildJobsInState?:array<"CREATED"|"RUNNING"|"COMPLETED"|"FAILED"|"PARTIAL", int>, ResourceName?:string, MessageCategory?:string}}>
     */
    public function describeCopyJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FrameworkName:string} $args
     * @return \AWS\Result<array{FrameworkName?:string, FrameworkArn?:string, FrameworkDescription?:string, FrameworkControls?:array<array{ControlName:string, ControlInputParameters?:array<array{ParameterName?:string, ParameterValue?:string}>, ControlScope?:array{ComplianceResourceIds?:array<string>, ComplianceResourceTypes?:array<string>, Tags?:array<string, string>}}>, CreationTime?:int|string|\DateTimeInterface, DeploymentStatus?:string, FrameworkStatus?:string, IdempotencyToken?:string}>
     */
    public function describeFramework(array $args): \AWS\Result { }

    /**
     * @param array{FrameworkName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FrameworkName?:string, FrameworkArn?:string, FrameworkDescription?:string, FrameworkControls?:array<array{ControlName:string, ControlInputParameters?:array<array{ParameterName?:string, ParameterValue?:string}>, ControlScope?:array{ComplianceResourceIds?:array<string>, ComplianceResourceTypes?:array<string>, Tags?:array<string, string>}}>, CreationTime?:int|string|\DateTimeInterface, DeploymentStatus?:string, FrameworkStatus?:string, IdempotencyToken?:string}>
     */
    public function describeFrameworkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{GlobalSettings?:array<string, string>, LastUpdateTime?:int|string|\DateTimeInterface}>
     */
    public function describeGlobalSettings(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{GlobalSettings?:array<string, string>, LastUpdateTime?:int|string|\DateTimeInterface}>
     */
    public function describeGlobalSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{ResourceArn?:string, ResourceType?:string, LastBackupTime?:int|string|\DateTimeInterface, ResourceName?:string, LastBackupVaultArn?:string, LastRecoveryPointArn?:string, LatestRestoreExecutionTimeMinutes?:int, LatestRestoreJobCreationDate?:int|string|\DateTimeInterface, LatestRestoreRecoveryPointCreationDate?:int|string|\DateTimeInterface}>
     */
    public function describeProtectedResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceArn?:string, ResourceType?:string, LastBackupTime?:int|string|\DateTimeInterface, ResourceName?:string, LastBackupVaultArn?:string, LastRecoveryPointArn?:string, LatestRestoreExecutionTimeMinutes?:int, LatestRestoreJobCreationDate?:int|string|\DateTimeInterface, LatestRestoreRecoveryPointCreationDate?:int|string|\DateTimeInterface}>
     */
    public function describeProtectedResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupVaultName:string, RecoveryPointArn:string, BackupVaultAccountId?:string} $args
     * @return \AWS\Result<array{RecoveryPointArn?:string, BackupVaultName?:string, BackupVaultArn?:string, SourceBackupVaultArn?:string, ResourceArn?:string, ResourceType?:string, CreatedBy?:array{BackupPlanId?:string, BackupPlanArn?:string, BackupPlanVersion?:string, BackupRuleId?:string}, IamRoleArn?:string, Status?:"COMPLETED"|"PARTIAL"|"DELETING"|"EXPIRED", StatusMessage?:string, CreationDate?:int|string|\DateTimeInterface, CompletionDate?:int|string|\DateTimeInterface, BackupSizeInBytes?:int, CalculatedLifecycle?:array{MoveToColdStorageAt?:int|string|\DateTimeInterface, DeleteAt?:int|string|\DateTimeInterface}, Lifecycle?:array{MoveToColdStorageAfterDays?:int, DeleteAfterDays?:int, OptInToArchiveForSupportedResources?:bool}, EncryptionKeyArn?:string, IsEncrypted?:bool, StorageClass?:"WARM"|"COLD"|"DELETED", LastRestoreTime?:int|string|\DateTimeInterface, ParentRecoveryPointArn?:string, CompositeMemberIdentifier?:string, IsParent?:bool, ResourceName?:string, VaultType?:"BACKUP_VAULT"|"LOGICALLY_AIR_GAPPED_BACKUP_VAULT", IndexStatus?:"PENDING"|"ACTIVE"|"FAILED"|"DELETING", IndexStatusMessage?:string}>
     */
    public function describeRecoveryPoint(array $args): \AWS\Result { }

    /**
     * @param array{BackupVaultName:string, RecoveryPointArn:string, BackupVaultAccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RecoveryPointArn?:string, BackupVaultName?:string, BackupVaultArn?:string, SourceBackupVaultArn?:string, ResourceArn?:string, ResourceType?:string, CreatedBy?:array{BackupPlanId?:string, BackupPlanArn?:string, BackupPlanVersion?:string, BackupRuleId?:string}, IamRoleArn?:string, Status?:"COMPLETED"|"PARTIAL"|"DELETING"|"EXPIRED", StatusMessage?:string, CreationDate?:int|string|\DateTimeInterface, CompletionDate?:int|string|\DateTimeInterface, BackupSizeInBytes?:int, CalculatedLifecycle?:array{MoveToColdStorageAt?:int|string|\DateTimeInterface, DeleteAt?:int|string|\DateTimeInterface}, Lifecycle?:array{MoveToColdStorageAfterDays?:int, DeleteAfterDays?:int, OptInToArchiveForSupportedResources?:bool}, EncryptionKeyArn?:string, IsEncrypted?:bool, StorageClass?:"WARM"|"COLD"|"DELETED", LastRestoreTime?:int|string|\DateTimeInterface, ParentRecoveryPointArn?:string, CompositeMemberIdentifier?:string, IsParent?:bool, ResourceName?:string, VaultType?:"BACKUP_VAULT"|"LOGICALLY_AIR_GAPPED_BACKUP_VAULT", IndexStatus?:"PENDING"|"ACTIVE"|"FAILED"|"DELETING", IndexStatusMessage?:string}>
     */
    public function describeRecoveryPointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{ResourceTypeOptInPreference?:array<string, bool>, ResourceTypeManagementPreference?:array<string, bool>}>
     */
    public function describeRegionSettings(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceTypeOptInPreference?:array<string, bool>, ResourceTypeManagementPreference?:array<string, bool>}>
     */
    public function describeRegionSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ReportJobId:string} $args
     * @return \AWS\Result<array{ReportJob?:array{ReportJobId?:string, ReportPlanArn?:string, ReportTemplate?:string, CreationTime?:int|string|\DateTimeInterface, CompletionTime?:int|string|\DateTimeInterface, Status?:string, StatusMessage?:string, ReportDestination?:array{S3BucketName?:string, S3Keys?:array<string>}}}>
     */
    public function describeReportJob(array $args): \AWS\Result { }

    /**
     * @param array{ReportJobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReportJob?:array{ReportJobId?:string, ReportPlanArn?:string, ReportTemplate?:string, CreationTime?:int|string|\DateTimeInterface, CompletionTime?:int|string|\DateTimeInterface, Status?:string, StatusMessage?:string, ReportDestination?:array{S3BucketName?:string, S3Keys?:array<string>}}}>
     */
    public function describeReportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ReportPlanName:string} $args
     * @return \AWS\Result<array{ReportPlan?:array{ReportPlanArn?:string, ReportPlanName?:string, ReportPlanDescription?:string, ReportSetting?:array{ReportTemplate:string, FrameworkArns?:array<string>, NumberOfFrameworks?:int, Accounts?:array<string>, OrganizationUnits?:array<string>, Regions?:array<string>}, ReportDeliveryChannel?:array{S3BucketName:string, S3KeyPrefix?:string, Formats?:array<string>}, DeploymentStatus?:string, CreationTime?:int|string|\DateTimeInterface, LastAttemptedExecutionTime?:int|string|\DateTimeInterface, LastSuccessfulExecutionTime?:int|string|\DateTimeInterface}}>
     */
    public function describeReportPlan(array $args): \AWS\Result { }

    /**
     * @param array{ReportPlanName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReportPlan?:array{ReportPlanArn?:string, ReportPlanName?:string, ReportPlanDescription?:string, ReportSetting?:array{ReportTemplate:string, FrameworkArns?:array<string>, NumberOfFrameworks?:int, Accounts?:array<string>, OrganizationUnits?:array<string>, Regions?:array<string>}, ReportDeliveryChannel?:array{S3BucketName:string, S3KeyPrefix?:string, Formats?:array<string>}, DeploymentStatus?:string, CreationTime?:int|string|\DateTimeInterface, LastAttemptedExecutionTime?:int|string|\DateTimeInterface, LastSuccessfulExecutionTime?:int|string|\DateTimeInterface}}>
     */
    public function describeReportPlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RestoreJobId:string} $args
     * @return \AWS\Result<array{AccountId?:string, RestoreJobId?:string, RecoveryPointArn?:string, CreationDate?:int|string|\DateTimeInterface, CompletionDate?:int|string|\DateTimeInterface, Status?:"PENDING"|"RUNNING"|"COMPLETED"|"ABORTED"|"FAILED", StatusMessage?:string, PercentDone?:string, BackupSizeInBytes?:int, IamRoleArn?:string, ExpectedCompletionTimeMinutes?:int, CreatedResourceArn?:string, ResourceType?:string, RecoveryPointCreationDate?:int|string|\DateTimeInterface, CreatedBy?:array{RestoreTestingPlanArn?:string}, ValidationStatus?:"FAILED"|"SUCCESSFUL"|"TIMED_OUT"|"VALIDATING", ValidationStatusMessage?:string, DeletionStatus?:"DELETING"|"FAILED"|"SUCCESSFUL", DeletionStatusMessage?:string}>
     */
    public function describeRestoreJob(array $args): \AWS\Result { }

    /**
     * @param array{RestoreJobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountId?:string, RestoreJobId?:string, RecoveryPointArn?:string, CreationDate?:int|string|\DateTimeInterface, CompletionDate?:int|string|\DateTimeInterface, Status?:"PENDING"|"RUNNING"|"COMPLETED"|"ABORTED"|"FAILED", StatusMessage?:string, PercentDone?:string, BackupSizeInBytes?:int, IamRoleArn?:string, ExpectedCompletionTimeMinutes?:int, CreatedResourceArn?:string, ResourceType?:string, RecoveryPointCreationDate?:int|string|\DateTimeInterface, CreatedBy?:array{RestoreTestingPlanArn?:string}, ValidationStatus?:"FAILED"|"SUCCESSFUL"|"TIMED_OUT"|"VALIDATING", ValidationStatusMessage?:string, DeletionStatus?:"DELETING"|"FAILED"|"SUCCESSFUL", DeletionStatusMessage?:string}>
     */
    public function describeRestoreJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupVaultName:string, RecoveryPointArn:string} $args
     * @return \AWS\Result<void>
     */
    public function disassociateRecoveryPoint(array $args): \AWS\Result { }

    /**
     * @param array{BackupVaultName:string, RecoveryPointArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disassociateRecoveryPointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupVaultName:string, RecoveryPointArn:string} $args
     * @return \AWS\Result<void>
     */
    public function disassociateRecoveryPointFromParent(array $args): \AWS\Result { }

    /**
     * @param array{BackupVaultName:string, RecoveryPointArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disassociateRecoveryPointFromParentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupPlanId:string} $args
     * @return \AWS\Result<array{BackupPlanTemplateJson?:string}>
     */
    public function exportBackupPlanTemplate(array $args): \AWS\Result { }

    /**
     * @param array{BackupPlanId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BackupPlanTemplateJson?:string}>
     */
    public function exportBackupPlanTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupPlanId:string, VersionId?:string} $args
     * @return \AWS\Result<array{BackupPlan?:array{BackupPlanName:string, Rules:array<array{RuleName:string, TargetBackupVaultName:string, ScheduleExpression?:string, StartWindowMinutes?:int, CompletionWindowMinutes?:int, Lifecycle?:array{MoveToColdStorageAfterDays?:int, DeleteAfterDays?:int, OptInToArchiveForSupportedResources?:bool}, RecoveryPointTags?:array<string, string>, RuleId?:string, CopyActions?:array<array{Lifecycle?:array{MoveToColdStorageAfterDays?:int, DeleteAfterDays?:int, OptInToArchiveForSupportedResources?:bool}, DestinationBackupVaultArn:string}>, EnableContinuousBackup?:bool, ScheduleExpressionTimezone?:string, IndexActions?:array<array{ResourceTypes?:array<string>}>}>, AdvancedBackupSettings?:array<array{ResourceType?:string, BackupOptions?:array<string, string>}>}, BackupPlanId?:string, BackupPlanArn?:string, VersionId?:string, CreatorRequestId?:string, CreationDate?:int|string|\DateTimeInterface, DeletionDate?:int|string|\DateTimeInterface, LastExecutionDate?:int|string|\DateTimeInterface, AdvancedBackupSettings?:array<array{ResourceType?:string, BackupOptions?:array<string, string>}>}>
     */
    public function getBackupPlan(array $args): \AWS\Result { }

    /**
     * @param array{BackupPlanId:string, VersionId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BackupPlan?:array{BackupPlanName:string, Rules:array<array{RuleName:string, TargetBackupVaultName:string, ScheduleExpression?:string, StartWindowMinutes?:int, CompletionWindowMinutes?:int, Lifecycle?:array{MoveToColdStorageAfterDays?:int, DeleteAfterDays?:int, OptInToArchiveForSupportedResources?:bool}, RecoveryPointTags?:array<string, string>, RuleId?:string, CopyActions?:array<array{Lifecycle?:array{MoveToColdStorageAfterDays?:int, DeleteAfterDays?:int, OptInToArchiveForSupportedResources?:bool}, DestinationBackupVaultArn:string}>, EnableContinuousBackup?:bool, ScheduleExpressionTimezone?:string, IndexActions?:array<array{ResourceTypes?:array<string>}>}>, AdvancedBackupSettings?:array<array{ResourceType?:string, BackupOptions?:array<string, string>}>}, BackupPlanId?:string, BackupPlanArn?:string, VersionId?:string, CreatorRequestId?:string, CreationDate?:int|string|\DateTimeInterface, DeletionDate?:int|string|\DateTimeInterface, LastExecutionDate?:int|string|\DateTimeInterface, AdvancedBackupSettings?:array<array{ResourceType?:string, BackupOptions?:array<string, string>}>}>
     */
    public function getBackupPlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupPlanTemplateJson:string} $args
     * @return \AWS\Result<array{BackupPlan?:array{BackupPlanName:string, Rules:array<array{RuleName:string, TargetBackupVaultName:string, ScheduleExpression?:string, StartWindowMinutes?:int, CompletionWindowMinutes?:int, Lifecycle?:array{MoveToColdStorageAfterDays?:int, DeleteAfterDays?:int, OptInToArchiveForSupportedResources?:bool}, RecoveryPointTags?:array<string, string>, RuleId?:string, CopyActions?:array<array{Lifecycle?:array{MoveToColdStorageAfterDays?:int, DeleteAfterDays?:int, OptInToArchiveForSupportedResources?:bool}, DestinationBackupVaultArn:string}>, EnableContinuousBackup?:bool, ScheduleExpressionTimezone?:string, IndexActions?:array<array{ResourceTypes?:array<string>}>}>, AdvancedBackupSettings?:array<array{ResourceType?:string, BackupOptions?:array<string, string>}>}}>
     */
    public function getBackupPlanFromJSON(array $args): \AWS\Result { }

    /**
     * @param array{BackupPlanTemplateJson:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BackupPlan?:array{BackupPlanName:string, Rules:array<array{RuleName:string, TargetBackupVaultName:string, ScheduleExpression?:string, StartWindowMinutes?:int, CompletionWindowMinutes?:int, Lifecycle?:array{MoveToColdStorageAfterDays?:int, DeleteAfterDays?:int, OptInToArchiveForSupportedResources?:bool}, RecoveryPointTags?:array<string, string>, RuleId?:string, CopyActions?:array<array{Lifecycle?:array{MoveToColdStorageAfterDays?:int, DeleteAfterDays?:int, OptInToArchiveForSupportedResources?:bool}, DestinationBackupVaultArn:string}>, EnableContinuousBackup?:bool, ScheduleExpressionTimezone?:string, IndexActions?:array<array{ResourceTypes?:array<string>}>}>, AdvancedBackupSettings?:array<array{ResourceType?:string, BackupOptions?:array<string, string>}>}}>
     */
    public function getBackupPlanFromJSONAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupPlanTemplateId:string} $args
     * @return \AWS\Result<array{BackupPlanDocument?:array{BackupPlanName:string, Rules:array<array{RuleName:string, TargetBackupVaultName:string, ScheduleExpression?:string, StartWindowMinutes?:int, CompletionWindowMinutes?:int, Lifecycle?:array{MoveToColdStorageAfterDays?:int, DeleteAfterDays?:int, OptInToArchiveForSupportedResources?:bool}, RecoveryPointTags?:array<string, string>, RuleId?:string, CopyActions?:array<array{Lifecycle?:array{MoveToColdStorageAfterDays?:int, DeleteAfterDays?:int, OptInToArchiveForSupportedResources?:bool}, DestinationBackupVaultArn:string}>, EnableContinuousBackup?:bool, ScheduleExpressionTimezone?:string, IndexActions?:array<array{ResourceTypes?:array<string>}>}>, AdvancedBackupSettings?:array<array{ResourceType?:string, BackupOptions?:array<string, string>}>}}>
     */
    public function getBackupPlanFromTemplate(array $args): \AWS\Result { }

    /**
     * @param array{BackupPlanTemplateId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BackupPlanDocument?:array{BackupPlanName:string, Rules:array<array{RuleName:string, TargetBackupVaultName:string, ScheduleExpression?:string, StartWindowMinutes?:int, CompletionWindowMinutes?:int, Lifecycle?:array{MoveToColdStorageAfterDays?:int, DeleteAfterDays?:int, OptInToArchiveForSupportedResources?:bool}, RecoveryPointTags?:array<string, string>, RuleId?:string, CopyActions?:array<array{Lifecycle?:array{MoveToColdStorageAfterDays?:int, DeleteAfterDays?:int, OptInToArchiveForSupportedResources?:bool}, DestinationBackupVaultArn:string}>, EnableContinuousBackup?:bool, ScheduleExpressionTimezone?:string, IndexActions?:array<array{ResourceTypes?:array<string>}>}>, AdvancedBackupSettings?:array<array{ResourceType?:string, BackupOptions?:array<string, string>}>}}>
     */
    public function getBackupPlanFromTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupPlanId:string, SelectionId:string} $args
     * @return \AWS\Result<array{BackupSelection?:array{SelectionName:string, IamRoleArn:string, Resources?:array<string>, ListOfTags?:array<array{ConditionType:"STRINGEQUALS", ConditionKey:string, ConditionValue:string}>, NotResources?:array<string>, Conditions?:array{StringEquals?:array<array{ConditionKey?:string, ConditionValue?:string}>, StringNotEquals?:array<array{ConditionKey?:string, ConditionValue?:string}>, StringLike?:array<array{ConditionKey?:string, ConditionValue?:string}>, StringNotLike?:array<array{ConditionKey?:string, ConditionValue?:string}>}}, SelectionId?:string, BackupPlanId?:string, CreationDate?:int|string|\DateTimeInterface, CreatorRequestId?:string}>
     */
    public function getBackupSelection(array $args): \AWS\Result { }

    /**
     * @param array{BackupPlanId:string, SelectionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BackupSelection?:array{SelectionName:string, IamRoleArn:string, Resources?:array<string>, ListOfTags?:array<array{ConditionType:"STRINGEQUALS", ConditionKey:string, ConditionValue:string}>, NotResources?:array<string>, Conditions?:array{StringEquals?:array<array{ConditionKey?:string, ConditionValue?:string}>, StringNotEquals?:array<array{ConditionKey?:string, ConditionValue?:string}>, StringLike?:array<array{ConditionKey?:string, ConditionValue?:string}>, StringNotLike?:array<array{ConditionKey?:string, ConditionValue?:string}>}}, SelectionId?:string, BackupPlanId?:string, CreationDate?:int|string|\DateTimeInterface, CreatorRequestId?:string}>
     */
    public function getBackupSelectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupVaultName:string} $args
     * @return \AWS\Result<array{BackupVaultName?:string, BackupVaultArn?:string, Policy?:string}>
     */
    public function getBackupVaultAccessPolicy(array $args): \AWS\Result { }

    /**
     * @param array{BackupVaultName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BackupVaultName?:string, BackupVaultArn?:string, Policy?:string}>
     */
    public function getBackupVaultAccessPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupVaultName:string} $args
     * @return \AWS\Result<array{BackupVaultName?:string, BackupVaultArn?:string, SNSTopicArn?:string, BackupVaultEvents?:array<"BACKUP_JOB_STARTED"|"BACKUP_JOB_COMPLETED"|"BACKUP_JOB_SUCCESSFUL"|"BACKUP_JOB_FAILED"|"BACKUP_JOB_EXPIRED"|"RESTORE_JOB_STARTED"|"RESTORE_JOB_COMPLETED"|"RESTORE_JOB_SUCCESSFUL"|"RESTORE_JOB_FAILED"|"COPY_JOB_STARTED"|"COPY_JOB_SUCCESSFUL"|"COPY_JOB_FAILED"|"RECOVERY_POINT_MODIFIED"|"BACKUP_PLAN_CREATED"|"BACKUP_PLAN_MODIFIED"|"S3_BACKUP_OBJECT_FAILED"|"S3_RESTORE_OBJECT_FAILED">}>
     */
    public function getBackupVaultNotifications(array $args): \AWS\Result { }

    /**
     * @param array{BackupVaultName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BackupVaultName?:string, BackupVaultArn?:string, SNSTopicArn?:string, BackupVaultEvents?:array<"BACKUP_JOB_STARTED"|"BACKUP_JOB_COMPLETED"|"BACKUP_JOB_SUCCESSFUL"|"BACKUP_JOB_FAILED"|"BACKUP_JOB_EXPIRED"|"RESTORE_JOB_STARTED"|"RESTORE_JOB_COMPLETED"|"RESTORE_JOB_SUCCESSFUL"|"RESTORE_JOB_FAILED"|"COPY_JOB_STARTED"|"COPY_JOB_SUCCESSFUL"|"COPY_JOB_FAILED"|"RECOVERY_POINT_MODIFIED"|"BACKUP_PLAN_CREATED"|"BACKUP_PLAN_MODIFIED"|"S3_BACKUP_OBJECT_FAILED"|"S3_RESTORE_OBJECT_FAILED">}>
     */
    public function getBackupVaultNotificationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LegalHoldId:string} $args
     * @return \AWS\Result<array{Title?:string, Status?:"CREATING"|"ACTIVE"|"CANCELING"|"CANCELED", Description?:string, CancelDescription?:string, LegalHoldId?:string, LegalHoldArn?:string, CreationDate?:int|string|\DateTimeInterface, CancellationDate?:int|string|\DateTimeInterface, RetainRecordUntil?:int|string|\DateTimeInterface, RecoveryPointSelection?:array{VaultNames?:array<string>, ResourceIdentifiers?:array<string>, DateRange?:array{FromDate:int|string|\DateTimeInterface, ToDate:int|string|\DateTimeInterface}}}>
     */
    public function getLegalHold(array $args): \AWS\Result { }

    /**
     * @param array{LegalHoldId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Title?:string, Status?:"CREATING"|"ACTIVE"|"CANCELING"|"CANCELED", Description?:string, CancelDescription?:string, LegalHoldId?:string, LegalHoldArn?:string, CreationDate?:int|string|\DateTimeInterface, CancellationDate?:int|string|\DateTimeInterface, RetainRecordUntil?:int|string|\DateTimeInterface, RecoveryPointSelection?:array{VaultNames?:array<string>, ResourceIdentifiers?:array<string>, DateRange?:array{FromDate:int|string|\DateTimeInterface, ToDate:int|string|\DateTimeInterface}}}>
     */
    public function getLegalHoldAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupVaultName:string, RecoveryPointArn:string} $args
     * @return \AWS\Result<array{RecoveryPointArn?:string, BackupVaultArn?:string, SourceResourceArn?:string, IndexCreationDate?:int|string|\DateTimeInterface, IndexDeletionDate?:int|string|\DateTimeInterface, IndexCompletionDate?:int|string|\DateTimeInterface, IndexStatus?:"PENDING"|"ACTIVE"|"FAILED"|"DELETING", IndexStatusMessage?:string, TotalItemsIndexed?:int}>
     */
    public function getRecoveryPointIndexDetails(array $args): \AWS\Result { }

    /**
     * @param array{BackupVaultName:string, RecoveryPointArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RecoveryPointArn?:string, BackupVaultArn?:string, SourceResourceArn?:string, IndexCreationDate?:int|string|\DateTimeInterface, IndexDeletionDate?:int|string|\DateTimeInterface, IndexCompletionDate?:int|string|\DateTimeInterface, IndexStatus?:"PENDING"|"ACTIVE"|"FAILED"|"DELETING", IndexStatusMessage?:string, TotalItemsIndexed?:int}>
     */
    public function getRecoveryPointIndexDetailsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupVaultName:string, RecoveryPointArn:string, BackupVaultAccountId?:string} $args
     * @return \AWS\Result<array{BackupVaultArn?:string, RecoveryPointArn?:string, RestoreMetadata?:array<string, string>, ResourceType?:string}>
     */
    public function getRecoveryPointRestoreMetadata(array $args): \AWS\Result { }

    /**
     * @param array{BackupVaultName:string, RecoveryPointArn:string, BackupVaultAccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BackupVaultArn?:string, RecoveryPointArn?:string, RestoreMetadata?:array<string, string>, ResourceType?:string}>
     */
    public function getRecoveryPointRestoreMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RestoreJobId:string} $args
     * @return \AWS\Result<array{RestoreJobId?:string, Metadata?:array<string, string>}>
     */
    public function getRestoreJobMetadata(array $args): \AWS\Result { }

    /**
     * @param array{RestoreJobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RestoreJobId?:string, Metadata?:array<string, string>}>
     */
    public function getRestoreJobMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupVaultAccountId?:string, BackupVaultName:string, RecoveryPointArn:string} $args
     * @return \AWS\Result<array{InferredMetadata:array<string, string>}>
     */
    public function getRestoreTestingInferredMetadata(array $args): \AWS\Result { }

    /**
     * @param array{BackupVaultAccountId?:string, BackupVaultName:string, RecoveryPointArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{InferredMetadata:array<string, string>}>
     */
    public function getRestoreTestingInferredMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RestoreTestingPlanName:string} $args
     * @return \AWS\Result<array{RestoreTestingPlan:array{CreationTime:int|string|\DateTimeInterface, CreatorRequestId?:string, LastExecutionTime?:int|string|\DateTimeInterface, LastUpdateTime?:int|string|\DateTimeInterface, RecoveryPointSelection:array{Algorithm?:"LATEST_WITHIN_WINDOW"|"RANDOM_WITHIN_WINDOW", ExcludeVaults?:array<string>, IncludeVaults?:array<string>, RecoveryPointTypes?:array<"CONTINUOUS"|"SNAPSHOT">, SelectionWindowDays?:int}, RestoreTestingPlanArn:string, RestoreTestingPlanName:string, ScheduleExpression:string, ScheduleExpressionTimezone?:string, StartWindowHours?:int}}>
     */
    public function getRestoreTestingPlan(array $args): \AWS\Result { }

    /**
     * @param array{RestoreTestingPlanName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RestoreTestingPlan:array{CreationTime:int|string|\DateTimeInterface, CreatorRequestId?:string, LastExecutionTime?:int|string|\DateTimeInterface, LastUpdateTime?:int|string|\DateTimeInterface, RecoveryPointSelection:array{Algorithm?:"LATEST_WITHIN_WINDOW"|"RANDOM_WITHIN_WINDOW", ExcludeVaults?:array<string>, IncludeVaults?:array<string>, RecoveryPointTypes?:array<"CONTINUOUS"|"SNAPSHOT">, SelectionWindowDays?:int}, RestoreTestingPlanArn:string, RestoreTestingPlanName:string, ScheduleExpression:string, ScheduleExpressionTimezone?:string, StartWindowHours?:int}}>
     */
    public function getRestoreTestingPlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RestoreTestingPlanName:string, RestoreTestingSelectionName:string} $args
     * @return \AWS\Result<array{RestoreTestingSelection:array{CreationTime:int|string|\DateTimeInterface, CreatorRequestId?:string, IamRoleArn:string, ProtectedResourceArns?:array<string>, ProtectedResourceConditions?:array{StringEquals?:array<array{Key:string, Value:string}>, StringNotEquals?:array<array{Key:string, Value:string}>}, ProtectedResourceType:string, RestoreMetadataOverrides?:array<string, string>, RestoreTestingPlanName:string, RestoreTestingSelectionName:string, ValidationWindowHours?:int}}>
     */
    public function getRestoreTestingSelection(array $args): \AWS\Result { }

    /**
     * @param array{RestoreTestingPlanName:string, RestoreTestingSelectionName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RestoreTestingSelection:array{CreationTime:int|string|\DateTimeInterface, CreatorRequestId?:string, IamRoleArn:string, ProtectedResourceArns?:array<string>, ProtectedResourceConditions?:array{StringEquals?:array<array{Key:string, Value:string}>, StringNotEquals?:array<array{Key:string, Value:string}>}, ProtectedResourceType:string, RestoreMetadataOverrides?:array<string, string>, RestoreTestingPlanName:string, RestoreTestingSelectionName:string, ValidationWindowHours?:int}}>
     */
    public function getRestoreTestingSelectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{ResourceTypes?:array<string>}>
     */
    public function getSupportedResourceTypes(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceTypes?:array<string>}>
     */
    public function getSupportedResourceTypesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId?:string, State?:"CREATED"|"PENDING"|"RUNNING"|"ABORTING"|"ABORTED"|"COMPLETED"|"FAILED"|"EXPIRED"|"PARTIAL"|"AGGREGATE_ALL"|"ANY", ResourceType?:string, MessageCategory?:string, AggregationPeriod?:"ONE_DAY"|"SEVEN_DAYS"|"FOURTEEN_DAYS", MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{BackupJobSummaries?:array<array{Region?:string, AccountId?:string, State?:"CREATED"|"PENDING"|"RUNNING"|"ABORTING"|"ABORTED"|"COMPLETED"|"FAILED"|"EXPIRED"|"PARTIAL"|"AGGREGATE_ALL"|"ANY", ResourceType?:string, MessageCategory?:string, Count?:int, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}>, AggregationPeriod?:string, NextToken?:string}>
     */
    public function listBackupJobSummaries(array $args = []): \AWS\Result { }

    /**
     * @param array{AccountId?:string, State?:"CREATED"|"PENDING"|"RUNNING"|"ABORTING"|"ABORTED"|"COMPLETED"|"FAILED"|"EXPIRED"|"PARTIAL"|"AGGREGATE_ALL"|"ANY", ResourceType?:string, MessageCategory?:string, AggregationPeriod?:"ONE_DAY"|"SEVEN_DAYS"|"FOURTEEN_DAYS", MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BackupJobSummaries?:array<array{Region?:string, AccountId?:string, State?:"CREATED"|"PENDING"|"RUNNING"|"ABORTING"|"ABORTED"|"COMPLETED"|"FAILED"|"EXPIRED"|"PARTIAL"|"AGGREGATE_ALL"|"ANY", ResourceType?:string, MessageCategory?:string, Count?:int, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}>, AggregationPeriod?:string, NextToken?:string}>
     */
    public function listBackupJobSummariesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, ByResourceArn?:string, ByState?:"CREATED"|"PENDING"|"RUNNING"|"ABORTING"|"ABORTED"|"COMPLETED"|"FAILED"|"EXPIRED"|"PARTIAL", ByBackupVaultName?:string, ByCreatedBefore?:int|string|\DateTimeInterface, ByCreatedAfter?:int|string|\DateTimeInterface, ByResourceType?:string, ByAccountId?:string, ByCompleteAfter?:int|string|\DateTimeInterface, ByCompleteBefore?:int|string|\DateTimeInterface, ByParentJobId?:string, ByMessageCategory?:string} $args
     * @return \AWS\Result<array{BackupJobs?:array<array{AccountId?:string, BackupJobId?:string, BackupVaultName?:string, BackupVaultArn?:string, RecoveryPointArn?:string, ResourceArn?:string, CreationDate?:int|string|\DateTimeInterface, CompletionDate?:int|string|\DateTimeInterface, State?:"CREATED"|"PENDING"|"RUNNING"|"ABORTING"|"ABORTED"|"COMPLETED"|"FAILED"|"EXPIRED"|"PARTIAL", StatusMessage?:string, PercentDone?:string, BackupSizeInBytes?:int, IamRoleArn?:string, CreatedBy?:array{BackupPlanId?:string, BackupPlanArn?:string, BackupPlanVersion?:string, BackupRuleId?:string}, ExpectedCompletionDate?:int|string|\DateTimeInterface, StartBy?:int|string|\DateTimeInterface, ResourceType?:string, BytesTransferred?:int, BackupOptions?:array<string, string>, BackupType?:string, ParentJobId?:string, IsParent?:bool, ResourceName?:string, InitiationDate?:int|string|\DateTimeInterface, MessageCategory?:string}>, NextToken?:string}>
     */
    public function listBackupJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, ByResourceArn?:string, ByState?:"CREATED"|"PENDING"|"RUNNING"|"ABORTING"|"ABORTED"|"COMPLETED"|"FAILED"|"EXPIRED"|"PARTIAL", ByBackupVaultName?:string, ByCreatedBefore?:int|string|\DateTimeInterface, ByCreatedAfter?:int|string|\DateTimeInterface, ByResourceType?:string, ByAccountId?:string, ByCompleteAfter?:int|string|\DateTimeInterface, ByCompleteBefore?:int|string|\DateTimeInterface, ByParentJobId?:string, ByMessageCategory?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BackupJobs?:array<array{AccountId?:string, BackupJobId?:string, BackupVaultName?:string, BackupVaultArn?:string, RecoveryPointArn?:string, ResourceArn?:string, CreationDate?:int|string|\DateTimeInterface, CompletionDate?:int|string|\DateTimeInterface, State?:"CREATED"|"PENDING"|"RUNNING"|"ABORTING"|"ABORTED"|"COMPLETED"|"FAILED"|"EXPIRED"|"PARTIAL", StatusMessage?:string, PercentDone?:string, BackupSizeInBytes?:int, IamRoleArn?:string, CreatedBy?:array{BackupPlanId?:string, BackupPlanArn?:string, BackupPlanVersion?:string, BackupRuleId?:string}, ExpectedCompletionDate?:int|string|\DateTimeInterface, StartBy?:int|string|\DateTimeInterface, ResourceType?:string, BytesTransferred?:int, BackupOptions?:array<string, string>, BackupType?:string, ParentJobId?:string, IsParent?:bool, ResourceName?:string, InitiationDate?:int|string|\DateTimeInterface, MessageCategory?:string}>, NextToken?:string}>
     */
    public function listBackupJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, BackupPlanTemplatesList?:array<array{BackupPlanTemplateId?:string, BackupPlanTemplateName?:string}>}>
     */
    public function listBackupPlanTemplates(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, BackupPlanTemplatesList?:array<array{BackupPlanTemplateId?:string, BackupPlanTemplateName?:string}>}>
     */
    public function listBackupPlanTemplatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupPlanId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, BackupPlanVersionsList?:array<array{BackupPlanArn?:string, BackupPlanId?:string, CreationDate?:int|string|\DateTimeInterface, DeletionDate?:int|string|\DateTimeInterface, VersionId?:string, BackupPlanName?:string, CreatorRequestId?:string, LastExecutionDate?:int|string|\DateTimeInterface, AdvancedBackupSettings?:array<array{ResourceType?:string, BackupOptions?:array<string, string>}>}>}>
     */
    public function listBackupPlanVersions(array $args): \AWS\Result { }

    /**
     * @param array{BackupPlanId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, BackupPlanVersionsList?:array<array{BackupPlanArn?:string, BackupPlanId?:string, CreationDate?:int|string|\DateTimeInterface, DeletionDate?:int|string|\DateTimeInterface, VersionId?:string, BackupPlanName?:string, CreatorRequestId?:string, LastExecutionDate?:int|string|\DateTimeInterface, AdvancedBackupSettings?:array<array{ResourceType?:string, BackupOptions?:array<string, string>}>}>}>
     */
    public function listBackupPlanVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, IncludeDeleted?:bool} $args
     * @return \AWS\Result<array{NextToken?:string, BackupPlansList?:array<array{BackupPlanArn?:string, BackupPlanId?:string, CreationDate?:int|string|\DateTimeInterface, DeletionDate?:int|string|\DateTimeInterface, VersionId?:string, BackupPlanName?:string, CreatorRequestId?:string, LastExecutionDate?:int|string|\DateTimeInterface, AdvancedBackupSettings?:array<array{ResourceType?:string, BackupOptions?:array<string, string>}>}>}>
     */
    public function listBackupPlans(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, IncludeDeleted?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, BackupPlansList?:array<array{BackupPlanArn?:string, BackupPlanId?:string, CreationDate?:int|string|\DateTimeInterface, DeletionDate?:int|string|\DateTimeInterface, VersionId?:string, BackupPlanName?:string, CreatorRequestId?:string, LastExecutionDate?:int|string|\DateTimeInterface, AdvancedBackupSettings?:array<array{ResourceType?:string, BackupOptions?:array<string, string>}>}>}>
     */
    public function listBackupPlansAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupPlanId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, BackupSelectionsList?:array<array{SelectionId?:string, SelectionName?:string, BackupPlanId?:string, CreationDate?:int|string|\DateTimeInterface, CreatorRequestId?:string, IamRoleArn?:string}>}>
     */
    public function listBackupSelections(array $args): \AWS\Result { }

    /**
     * @param array{BackupPlanId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, BackupSelectionsList?:array<array{SelectionId?:string, SelectionName?:string, BackupPlanId?:string, CreationDate?:int|string|\DateTimeInterface, CreatorRequestId?:string, IamRoleArn?:string}>}>
     */
    public function listBackupSelectionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ByVaultType?:"BACKUP_VAULT"|"LOGICALLY_AIR_GAPPED_BACKUP_VAULT", ByShared?:bool, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{BackupVaultList?:array<array{BackupVaultName?:string, BackupVaultArn?:string, VaultType?:"BACKUP_VAULT"|"LOGICALLY_AIR_GAPPED_BACKUP_VAULT", VaultState?:"CREATING"|"AVAILABLE"|"FAILED", CreationDate?:int|string|\DateTimeInterface, EncryptionKeyArn?:string, CreatorRequestId?:string, NumberOfRecoveryPoints?:int, Locked?:bool, MinRetentionDays?:int, MaxRetentionDays?:int, LockDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listBackupVaults(array $args = []): \AWS\Result { }

    /**
     * @param array{ByVaultType?:"BACKUP_VAULT"|"LOGICALLY_AIR_GAPPED_BACKUP_VAULT", ByShared?:bool, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{BackupVaultList?:array<array{BackupVaultName?:string, BackupVaultArn?:string, VaultType?:"BACKUP_VAULT"|"LOGICALLY_AIR_GAPPED_BACKUP_VAULT", VaultState?:"CREATING"|"AVAILABLE"|"FAILED", CreationDate?:int|string|\DateTimeInterface, EncryptionKeyArn?:string, CreatorRequestId?:string, NumberOfRecoveryPoints?:int, Locked?:bool, MinRetentionDays?:int, MaxRetentionDays?:int, LockDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listBackupVaultsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId?:string, State?:"CREATED"|"RUNNING"|"ABORTING"|"ABORTED"|"COMPLETING"|"COMPLETED"|"FAILING"|"FAILED"|"PARTIAL"|"AGGREGATE_ALL"|"ANY", ResourceType?:string, MessageCategory?:string, AggregationPeriod?:"ONE_DAY"|"SEVEN_DAYS"|"FOURTEEN_DAYS", MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{CopyJobSummaries?:array<array{Region?:string, AccountId?:string, State?:"CREATED"|"RUNNING"|"ABORTING"|"ABORTED"|"COMPLETING"|"COMPLETED"|"FAILING"|"FAILED"|"PARTIAL"|"AGGREGATE_ALL"|"ANY", ResourceType?:string, MessageCategory?:string, Count?:int, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}>, AggregationPeriod?:string, NextToken?:string}>
     */
    public function listCopyJobSummaries(array $args = []): \AWS\Result { }

    /**
     * @param array{AccountId?:string, State?:"CREATED"|"RUNNING"|"ABORTING"|"ABORTED"|"COMPLETING"|"COMPLETED"|"FAILING"|"FAILED"|"PARTIAL"|"AGGREGATE_ALL"|"ANY", ResourceType?:string, MessageCategory?:string, AggregationPeriod?:"ONE_DAY"|"SEVEN_DAYS"|"FOURTEEN_DAYS", MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CopyJobSummaries?:array<array{Region?:string, AccountId?:string, State?:"CREATED"|"RUNNING"|"ABORTING"|"ABORTED"|"COMPLETING"|"COMPLETED"|"FAILING"|"FAILED"|"PARTIAL"|"AGGREGATE_ALL"|"ANY", ResourceType?:string, MessageCategory?:string, Count?:int, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}>, AggregationPeriod?:string, NextToken?:string}>
     */
    public function listCopyJobSummariesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, ByResourceArn?:string, ByState?:"CREATED"|"RUNNING"|"COMPLETED"|"FAILED"|"PARTIAL", ByCreatedBefore?:int|string|\DateTimeInterface, ByCreatedAfter?:int|string|\DateTimeInterface, ByResourceType?:string, ByDestinationVaultArn?:string, ByAccountId?:string, ByCompleteBefore?:int|string|\DateTimeInterface, ByCompleteAfter?:int|string|\DateTimeInterface, ByParentJobId?:string, ByMessageCategory?:string} $args
     * @return \AWS\Result<array{CopyJobs?:array<array{AccountId?:string, CopyJobId?:string, SourceBackupVaultArn?:string, SourceRecoveryPointArn?:string, DestinationBackupVaultArn?:string, DestinationRecoveryPointArn?:string, ResourceArn?:string, CreationDate?:int|string|\DateTimeInterface, CompletionDate?:int|string|\DateTimeInterface, State?:"CREATED"|"RUNNING"|"COMPLETED"|"FAILED"|"PARTIAL", StatusMessage?:string, BackupSizeInBytes?:int, IamRoleArn?:string, CreatedBy?:array{BackupPlanId?:string, BackupPlanArn?:string, BackupPlanVersion?:string, BackupRuleId?:string}, ResourceType?:string, ParentJobId?:string, IsParent?:bool, CompositeMemberIdentifier?:string, NumberOfChildJobs?:int, ChildJobsInState?:array<"CREATED"|"RUNNING"|"COMPLETED"|"FAILED"|"PARTIAL", int>, ResourceName?:string, MessageCategory?:string}>, NextToken?:string}>
     */
    public function listCopyJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, ByResourceArn?:string, ByState?:"CREATED"|"RUNNING"|"COMPLETED"|"FAILED"|"PARTIAL", ByCreatedBefore?:int|string|\DateTimeInterface, ByCreatedAfter?:int|string|\DateTimeInterface, ByResourceType?:string, ByDestinationVaultArn?:string, ByAccountId?:string, ByCompleteBefore?:int|string|\DateTimeInterface, ByCompleteAfter?:int|string|\DateTimeInterface, ByParentJobId?:string, ByMessageCategory?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CopyJobs?:array<array{AccountId?:string, CopyJobId?:string, SourceBackupVaultArn?:string, SourceRecoveryPointArn?:string, DestinationBackupVaultArn?:string, DestinationRecoveryPointArn?:string, ResourceArn?:string, CreationDate?:int|string|\DateTimeInterface, CompletionDate?:int|string|\DateTimeInterface, State?:"CREATED"|"RUNNING"|"COMPLETED"|"FAILED"|"PARTIAL", StatusMessage?:string, BackupSizeInBytes?:int, IamRoleArn?:string, CreatedBy?:array{BackupPlanId?:string, BackupPlanArn?:string, BackupPlanVersion?:string, BackupRuleId?:string}, ResourceType?:string, ParentJobId?:string, IsParent?:bool, CompositeMemberIdentifier?:string, NumberOfChildJobs?:int, ChildJobsInState?:array<"CREATED"|"RUNNING"|"COMPLETED"|"FAILED"|"PARTIAL", int>, ResourceName?:string, MessageCategory?:string}>, NextToken?:string}>
     */
    public function listCopyJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Frameworks?:array<array{FrameworkName?:string, FrameworkArn?:string, FrameworkDescription?:string, NumberOfControls?:int, CreationTime?:int|string|\DateTimeInterface, DeploymentStatus?:string}>, NextToken?:string}>
     */
    public function listFrameworks(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Frameworks?:array<array{FrameworkName?:string, FrameworkArn?:string, FrameworkDescription?:string, NumberOfControls?:int, CreationTime?:int|string|\DateTimeInterface, DeploymentStatus?:string}>, NextToken?:string}>
     */
    public function listFrameworksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, SourceResourceArn?:string, CreatedBefore?:int|string|\DateTimeInterface, CreatedAfter?:int|string|\DateTimeInterface, ResourceType?:string, IndexStatus?:"PENDING"|"ACTIVE"|"FAILED"|"DELETING"} $args
     * @return \AWS\Result<array{IndexedRecoveryPoints?:array<array{RecoveryPointArn?:string, SourceResourceArn?:string, IamRoleArn?:string, BackupCreationDate?:int|string|\DateTimeInterface, ResourceType?:string, IndexCreationDate?:int|string|\DateTimeInterface, IndexStatus?:"PENDING"|"ACTIVE"|"FAILED"|"DELETING", IndexStatusMessage?:string, BackupVaultArn?:string}>, NextToken?:string}>
     */
    public function listIndexedRecoveryPoints(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, SourceResourceArn?:string, CreatedBefore?:int|string|\DateTimeInterface, CreatedAfter?:int|string|\DateTimeInterface, ResourceType?:string, IndexStatus?:"PENDING"|"ACTIVE"|"FAILED"|"DELETING"} $args
     * @return \GuzzleHttp\Promise\Promise<array{IndexedRecoveryPoints?:array<array{RecoveryPointArn?:string, SourceResourceArn?:string, IamRoleArn?:string, BackupCreationDate?:int|string|\DateTimeInterface, ResourceType?:string, IndexCreationDate?:int|string|\DateTimeInterface, IndexStatus?:"PENDING"|"ACTIVE"|"FAILED"|"DELETING", IndexStatusMessage?:string, BackupVaultArn?:string}>, NextToken?:string}>
     */
    public function listIndexedRecoveryPointsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, LegalHolds?:array<array{Title?:string, Status?:"CREATING"|"ACTIVE"|"CANCELING"|"CANCELED", Description?:string, LegalHoldId?:string, LegalHoldArn?:string, CreationDate?:int|string|\DateTimeInterface, CancellationDate?:int|string|\DateTimeInterface}>}>
     */
    public function listLegalHolds(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, LegalHolds?:array<array{Title?:string, Status?:"CREATING"|"ACTIVE"|"CANCELING"|"CANCELED", Description?:string, LegalHoldId?:string, LegalHoldArn?:string, CreationDate?:int|string|\DateTimeInterface, CancellationDate?:int|string|\DateTimeInterface}>}>
     */
    public function listLegalHoldsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Results?:array<array{ResourceArn?:string, ResourceType?:string, LastBackupTime?:int|string|\DateTimeInterface, ResourceName?:string, LastBackupVaultArn?:string, LastRecoveryPointArn?:string}>, NextToken?:string}>
     */
    public function listProtectedResources(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Results?:array<array{ResourceArn?:string, ResourceType?:string, LastBackupTime?:int|string|\DateTimeInterface, ResourceName?:string, LastBackupVaultArn?:string, LastRecoveryPointArn?:string}>, NextToken?:string}>
     */
    public function listProtectedResourcesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupVaultName:string, BackupVaultAccountId?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Results?:array<array{ResourceArn?:string, ResourceType?:string, LastBackupTime?:int|string|\DateTimeInterface, ResourceName?:string, LastBackupVaultArn?:string, LastRecoveryPointArn?:string}>, NextToken?:string}>
     */
    public function listProtectedResourcesByBackupVault(array $args): \AWS\Result { }

    /**
     * @param array{BackupVaultName:string, BackupVaultAccountId?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Results?:array<array{ResourceArn?:string, ResourceType?:string, LastBackupTime?:int|string|\DateTimeInterface, ResourceName?:string, LastBackupVaultArn?:string, LastRecoveryPointArn?:string}>, NextToken?:string}>
     */
    public function listProtectedResourcesByBackupVaultAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupVaultName:string, BackupVaultAccountId?:string, NextToken?:string, MaxResults?:int, ByResourceArn?:string, ByResourceType?:string, ByBackupPlanId?:string, ByCreatedBefore?:int|string|\DateTimeInterface, ByCreatedAfter?:int|string|\DateTimeInterface, ByParentRecoveryPointArn?:string} $args
     * @return \AWS\Result<array{NextToken?:string, RecoveryPoints?:array<array{RecoveryPointArn?:string, BackupVaultName?:string, BackupVaultArn?:string, SourceBackupVaultArn?:string, ResourceArn?:string, ResourceType?:string, CreatedBy?:array{BackupPlanId?:string, BackupPlanArn?:string, BackupPlanVersion?:string, BackupRuleId?:string}, IamRoleArn?:string, Status?:"COMPLETED"|"PARTIAL"|"DELETING"|"EXPIRED", StatusMessage?:string, CreationDate?:int|string|\DateTimeInterface, CompletionDate?:int|string|\DateTimeInterface, BackupSizeInBytes?:int, CalculatedLifecycle?:array{MoveToColdStorageAt?:int|string|\DateTimeInterface, DeleteAt?:int|string|\DateTimeInterface}, Lifecycle?:array{MoveToColdStorageAfterDays?:int, DeleteAfterDays?:int, OptInToArchiveForSupportedResources?:bool}, EncryptionKeyArn?:string, IsEncrypted?:bool, LastRestoreTime?:int|string|\DateTimeInterface, ParentRecoveryPointArn?:string, CompositeMemberIdentifier?:string, IsParent?:bool, ResourceName?:string, VaultType?:"BACKUP_VAULT"|"LOGICALLY_AIR_GAPPED_BACKUP_VAULT", IndexStatus?:"PENDING"|"ACTIVE"|"FAILED"|"DELETING", IndexStatusMessage?:string}>}>
     */
    public function listRecoveryPointsByBackupVault(array $args): \AWS\Result { }

    /**
     * @param array{BackupVaultName:string, BackupVaultAccountId?:string, NextToken?:string, MaxResults?:int, ByResourceArn?:string, ByResourceType?:string, ByBackupPlanId?:string, ByCreatedBefore?:int|string|\DateTimeInterface, ByCreatedAfter?:int|string|\DateTimeInterface, ByParentRecoveryPointArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, RecoveryPoints?:array<array{RecoveryPointArn?:string, BackupVaultName?:string, BackupVaultArn?:string, SourceBackupVaultArn?:string, ResourceArn?:string, ResourceType?:string, CreatedBy?:array{BackupPlanId?:string, BackupPlanArn?:string, BackupPlanVersion?:string, BackupRuleId?:string}, IamRoleArn?:string, Status?:"COMPLETED"|"PARTIAL"|"DELETING"|"EXPIRED", StatusMessage?:string, CreationDate?:int|string|\DateTimeInterface, CompletionDate?:int|string|\DateTimeInterface, BackupSizeInBytes?:int, CalculatedLifecycle?:array{MoveToColdStorageAt?:int|string|\DateTimeInterface, DeleteAt?:int|string|\DateTimeInterface}, Lifecycle?:array{MoveToColdStorageAfterDays?:int, DeleteAfterDays?:int, OptInToArchiveForSupportedResources?:bool}, EncryptionKeyArn?:string, IsEncrypted?:bool, LastRestoreTime?:int|string|\DateTimeInterface, ParentRecoveryPointArn?:string, CompositeMemberIdentifier?:string, IsParent?:bool, ResourceName?:string, VaultType?:"BACKUP_VAULT"|"LOGICALLY_AIR_GAPPED_BACKUP_VAULT", IndexStatus?:"PENDING"|"ACTIVE"|"FAILED"|"DELETING", IndexStatusMessage?:string}>}>
     */
    public function listRecoveryPointsByBackupVaultAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LegalHoldId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{RecoveryPoints?:array<array{RecoveryPointArn?:string, ResourceArn?:string, ResourceType?:string, BackupVaultName?:string}>, NextToken?:string}>
     */
    public function listRecoveryPointsByLegalHold(array $args): \AWS\Result { }

    /**
     * @param array{LegalHoldId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{RecoveryPoints?:array<array{RecoveryPointArn?:string, ResourceArn?:string, ResourceType?:string, BackupVaultName?:string}>, NextToken?:string}>
     */
    public function listRecoveryPointsByLegalHoldAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, NextToken?:string, MaxResults?:int, ManagedByAWSBackupOnly?:bool} $args
     * @return \AWS\Result<array{NextToken?:string, RecoveryPoints?:array<array{RecoveryPointArn?:string, CreationDate?:int|string|\DateTimeInterface, Status?:"COMPLETED"|"PARTIAL"|"DELETING"|"EXPIRED", StatusMessage?:string, EncryptionKeyArn?:string, BackupSizeBytes?:int, BackupVaultName?:string, IsParent?:bool, ParentRecoveryPointArn?:string, ResourceName?:string, VaultType?:"BACKUP_VAULT"|"LOGICALLY_AIR_GAPPED_BACKUP_VAULT", IndexStatus?:"PENDING"|"ACTIVE"|"FAILED"|"DELETING", IndexStatusMessage?:string}>}>
     */
    public function listRecoveryPointsByResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, NextToken?:string, MaxResults?:int, ManagedByAWSBackupOnly?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, RecoveryPoints?:array<array{RecoveryPointArn?:string, CreationDate?:int|string|\DateTimeInterface, Status?:"COMPLETED"|"PARTIAL"|"DELETING"|"EXPIRED", StatusMessage?:string, EncryptionKeyArn?:string, BackupSizeBytes?:int, BackupVaultName?:string, IsParent?:bool, ParentRecoveryPointArn?:string, ResourceName?:string, VaultType?:"BACKUP_VAULT"|"LOGICALLY_AIR_GAPPED_BACKUP_VAULT", IndexStatus?:"PENDING"|"ACTIVE"|"FAILED"|"DELETING", IndexStatusMessage?:string}>}>
     */
    public function listRecoveryPointsByResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ByReportPlanName?:string, ByCreationBefore?:int|string|\DateTimeInterface, ByCreationAfter?:int|string|\DateTimeInterface, ByStatus?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ReportJobs?:array<array{ReportJobId?:string, ReportPlanArn?:string, ReportTemplate?:string, CreationTime?:int|string|\DateTimeInterface, CompletionTime?:int|string|\DateTimeInterface, Status?:string, StatusMessage?:string, ReportDestination?:array{S3BucketName?:string, S3Keys?:array<string>}}>, NextToken?:string}>
     */
    public function listReportJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{ByReportPlanName?:string, ByCreationBefore?:int|string|\DateTimeInterface, ByCreationAfter?:int|string|\DateTimeInterface, ByStatus?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReportJobs?:array<array{ReportJobId?:string, ReportPlanArn?:string, ReportTemplate?:string, CreationTime?:int|string|\DateTimeInterface, CompletionTime?:int|string|\DateTimeInterface, Status?:string, StatusMessage?:string, ReportDestination?:array{S3BucketName?:string, S3Keys?:array<string>}}>, NextToken?:string}>
     */
    public function listReportJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ReportPlans?:array<array{ReportPlanArn?:string, ReportPlanName?:string, ReportPlanDescription?:string, ReportSetting?:array{ReportTemplate:string, FrameworkArns?:array<string>, NumberOfFrameworks?:int, Accounts?:array<string>, OrganizationUnits?:array<string>, Regions?:array<string>}, ReportDeliveryChannel?:array{S3BucketName:string, S3KeyPrefix?:string, Formats?:array<string>}, DeploymentStatus?:string, CreationTime?:int|string|\DateTimeInterface, LastAttemptedExecutionTime?:int|string|\DateTimeInterface, LastSuccessfulExecutionTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listReportPlans(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReportPlans?:array<array{ReportPlanArn?:string, ReportPlanName?:string, ReportPlanDescription?:string, ReportSetting?:array{ReportTemplate:string, FrameworkArns?:array<string>, NumberOfFrameworks?:int, Accounts?:array<string>, OrganizationUnits?:array<string>, Regions?:array<string>}, ReportDeliveryChannel?:array{S3BucketName:string, S3KeyPrefix?:string, Formats?:array<string>}, DeploymentStatus?:string, CreationTime?:int|string|\DateTimeInterface, LastAttemptedExecutionTime?:int|string|\DateTimeInterface, LastSuccessfulExecutionTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listReportPlansAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId?:string, State?:"CREATED"|"PENDING"|"RUNNING"|"ABORTED"|"COMPLETED"|"FAILED"|"AGGREGATE_ALL"|"ANY", ResourceType?:string, AggregationPeriod?:"ONE_DAY"|"SEVEN_DAYS"|"FOURTEEN_DAYS", MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{RestoreJobSummaries?:array<array{Region?:string, AccountId?:string, State?:"CREATED"|"PENDING"|"RUNNING"|"ABORTED"|"COMPLETED"|"FAILED"|"AGGREGATE_ALL"|"ANY", ResourceType?:string, Count?:int, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}>, AggregationPeriod?:string, NextToken?:string}>
     */
    public function listRestoreJobSummaries(array $args = []): \AWS\Result { }

    /**
     * @param array{AccountId?:string, State?:"CREATED"|"PENDING"|"RUNNING"|"ABORTED"|"COMPLETED"|"FAILED"|"AGGREGATE_ALL"|"ANY", ResourceType?:string, AggregationPeriod?:"ONE_DAY"|"SEVEN_DAYS"|"FOURTEEN_DAYS", MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RestoreJobSummaries?:array<array{Region?:string, AccountId?:string, State?:"CREATED"|"PENDING"|"RUNNING"|"ABORTED"|"COMPLETED"|"FAILED"|"AGGREGATE_ALL"|"ANY", ResourceType?:string, Count?:int, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}>, AggregationPeriod?:string, NextToken?:string}>
     */
    public function listRestoreJobSummariesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, ByAccountId?:string, ByResourceType?:string, ByCreatedBefore?:int|string|\DateTimeInterface, ByCreatedAfter?:int|string|\DateTimeInterface, ByStatus?:"PENDING"|"RUNNING"|"COMPLETED"|"ABORTED"|"FAILED", ByCompleteBefore?:int|string|\DateTimeInterface, ByCompleteAfter?:int|string|\DateTimeInterface, ByRestoreTestingPlanArn?:string} $args
     * @return \AWS\Result<array{RestoreJobs?:array<array{AccountId?:string, RestoreJobId?:string, RecoveryPointArn?:string, CreationDate?:int|string|\DateTimeInterface, CompletionDate?:int|string|\DateTimeInterface, Status?:"PENDING"|"RUNNING"|"COMPLETED"|"ABORTED"|"FAILED", StatusMessage?:string, PercentDone?:string, BackupSizeInBytes?:int, IamRoleArn?:string, ExpectedCompletionTimeMinutes?:int, CreatedResourceArn?:string, ResourceType?:string, RecoveryPointCreationDate?:int|string|\DateTimeInterface, CreatedBy?:array{RestoreTestingPlanArn?:string}, ValidationStatus?:"FAILED"|"SUCCESSFUL"|"TIMED_OUT"|"VALIDATING", ValidationStatusMessage?:string, DeletionStatus?:"DELETING"|"FAILED"|"SUCCESSFUL", DeletionStatusMessage?:string}>, NextToken?:string}>
     */
    public function listRestoreJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, ByAccountId?:string, ByResourceType?:string, ByCreatedBefore?:int|string|\DateTimeInterface, ByCreatedAfter?:int|string|\DateTimeInterface, ByStatus?:"PENDING"|"RUNNING"|"COMPLETED"|"ABORTED"|"FAILED", ByCompleteBefore?:int|string|\DateTimeInterface, ByCompleteAfter?:int|string|\DateTimeInterface, ByRestoreTestingPlanArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RestoreJobs?:array<array{AccountId?:string, RestoreJobId?:string, RecoveryPointArn?:string, CreationDate?:int|string|\DateTimeInterface, CompletionDate?:int|string|\DateTimeInterface, Status?:"PENDING"|"RUNNING"|"COMPLETED"|"ABORTED"|"FAILED", StatusMessage?:string, PercentDone?:string, BackupSizeInBytes?:int, IamRoleArn?:string, ExpectedCompletionTimeMinutes?:int, CreatedResourceArn?:string, ResourceType?:string, RecoveryPointCreationDate?:int|string|\DateTimeInterface, CreatedBy?:array{RestoreTestingPlanArn?:string}, ValidationStatus?:"FAILED"|"SUCCESSFUL"|"TIMED_OUT"|"VALIDATING", ValidationStatusMessage?:string, DeletionStatus?:"DELETING"|"FAILED"|"SUCCESSFUL", DeletionStatusMessage?:string}>, NextToken?:string}>
     */
    public function listRestoreJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, ByStatus?:"PENDING"|"RUNNING"|"COMPLETED"|"ABORTED"|"FAILED", ByRecoveryPointCreationDateAfter?:int|string|\DateTimeInterface, ByRecoveryPointCreationDateBefore?:int|string|\DateTimeInterface, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{RestoreJobs?:array<array{AccountId?:string, RestoreJobId?:string, RecoveryPointArn?:string, CreationDate?:int|string|\DateTimeInterface, CompletionDate?:int|string|\DateTimeInterface, Status?:"PENDING"|"RUNNING"|"COMPLETED"|"ABORTED"|"FAILED", StatusMessage?:string, PercentDone?:string, BackupSizeInBytes?:int, IamRoleArn?:string, ExpectedCompletionTimeMinutes?:int, CreatedResourceArn?:string, ResourceType?:string, RecoveryPointCreationDate?:int|string|\DateTimeInterface, CreatedBy?:array{RestoreTestingPlanArn?:string}, ValidationStatus?:"FAILED"|"SUCCESSFUL"|"TIMED_OUT"|"VALIDATING", ValidationStatusMessage?:string, DeletionStatus?:"DELETING"|"FAILED"|"SUCCESSFUL", DeletionStatusMessage?:string}>, NextToken?:string}>
     */
    public function listRestoreJobsByProtectedResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, ByStatus?:"PENDING"|"RUNNING"|"COMPLETED"|"ABORTED"|"FAILED", ByRecoveryPointCreationDateAfter?:int|string|\DateTimeInterface, ByRecoveryPointCreationDateBefore?:int|string|\DateTimeInterface, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{RestoreJobs?:array<array{AccountId?:string, RestoreJobId?:string, RecoveryPointArn?:string, CreationDate?:int|string|\DateTimeInterface, CompletionDate?:int|string|\DateTimeInterface, Status?:"PENDING"|"RUNNING"|"COMPLETED"|"ABORTED"|"FAILED", StatusMessage?:string, PercentDone?:string, BackupSizeInBytes?:int, IamRoleArn?:string, ExpectedCompletionTimeMinutes?:int, CreatedResourceArn?:string, ResourceType?:string, RecoveryPointCreationDate?:int|string|\DateTimeInterface, CreatedBy?:array{RestoreTestingPlanArn?:string}, ValidationStatus?:"FAILED"|"SUCCESSFUL"|"TIMED_OUT"|"VALIDATING", ValidationStatusMessage?:string, DeletionStatus?:"DELETING"|"FAILED"|"SUCCESSFUL", DeletionStatusMessage?:string}>, NextToken?:string}>
     */
    public function listRestoreJobsByProtectedResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, RestoreTestingPlans:array<array{CreationTime:int|string|\DateTimeInterface, LastExecutionTime?:int|string|\DateTimeInterface, LastUpdateTime?:int|string|\DateTimeInterface, RestoreTestingPlanArn:string, RestoreTestingPlanName:string, ScheduleExpression:string, ScheduleExpressionTimezone?:string, StartWindowHours?:int}>}>
     */
    public function listRestoreTestingPlans(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, RestoreTestingPlans:array<array{CreationTime:int|string|\DateTimeInterface, LastExecutionTime?:int|string|\DateTimeInterface, LastUpdateTime?:int|string|\DateTimeInterface, RestoreTestingPlanArn:string, RestoreTestingPlanName:string, ScheduleExpression:string, ScheduleExpressionTimezone?:string, StartWindowHours?:int}>}>
     */
    public function listRestoreTestingPlansAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, RestoreTestingPlanName:string} $args
     * @return \AWS\Result<array{NextToken?:string, RestoreTestingSelections:array<array{CreationTime:int|string|\DateTimeInterface, IamRoleArn:string, ProtectedResourceType:string, RestoreTestingPlanName:string, RestoreTestingSelectionName:string, ValidationWindowHours?:int}>}>
     */
    public function listRestoreTestingSelections(array $args): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, RestoreTestingPlanName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, RestoreTestingSelections:array<array{CreationTime:int|string|\DateTimeInterface, IamRoleArn:string, ProtectedResourceType:string, RestoreTestingPlanName:string, RestoreTestingSelectionName:string, ValidationWindowHours?:int}>}>
     */
    public function listRestoreTestingSelectionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, Tags?:array<string, string>}>
     */
    public function listTags(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Tags?:array<string, string>}>
     */
    public function listTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupVaultName:string, Policy?:string} $args
     * @return \AWS\Result<void>
     */
    public function putBackupVaultAccessPolicy(array $args): \AWS\Result { }

    /**
     * @param array{BackupVaultName:string, Policy?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putBackupVaultAccessPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupVaultName:string, MinRetentionDays?:int, MaxRetentionDays?:int, ChangeableForDays?:int} $args
     * @return \AWS\Result<void>
     */
    public function putBackupVaultLockConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{BackupVaultName:string, MinRetentionDays?:int, MaxRetentionDays?:int, ChangeableForDays?:int} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putBackupVaultLockConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupVaultName:string, SNSTopicArn:string, BackupVaultEvents:array<"BACKUP_JOB_STARTED"|"BACKUP_JOB_COMPLETED"|"BACKUP_JOB_SUCCESSFUL"|"BACKUP_JOB_FAILED"|"BACKUP_JOB_EXPIRED"|"RESTORE_JOB_STARTED"|"RESTORE_JOB_COMPLETED"|"RESTORE_JOB_SUCCESSFUL"|"RESTORE_JOB_FAILED"|"COPY_JOB_STARTED"|"COPY_JOB_SUCCESSFUL"|"COPY_JOB_FAILED"|"RECOVERY_POINT_MODIFIED"|"BACKUP_PLAN_CREATED"|"BACKUP_PLAN_MODIFIED"|"S3_BACKUP_OBJECT_FAILED"|"S3_RESTORE_OBJECT_FAILED">} $args
     * @return \AWS\Result<void>
     */
    public function putBackupVaultNotifications(array $args): \AWS\Result { }

    /**
     * @param array{BackupVaultName:string, SNSTopicArn:string, BackupVaultEvents:array<"BACKUP_JOB_STARTED"|"BACKUP_JOB_COMPLETED"|"BACKUP_JOB_SUCCESSFUL"|"BACKUP_JOB_FAILED"|"BACKUP_JOB_EXPIRED"|"RESTORE_JOB_STARTED"|"RESTORE_JOB_COMPLETED"|"RESTORE_JOB_SUCCESSFUL"|"RESTORE_JOB_FAILED"|"COPY_JOB_STARTED"|"COPY_JOB_SUCCESSFUL"|"COPY_JOB_FAILED"|"RECOVERY_POINT_MODIFIED"|"BACKUP_PLAN_CREATED"|"BACKUP_PLAN_MODIFIED"|"S3_BACKUP_OBJECT_FAILED"|"S3_RESTORE_OBJECT_FAILED">} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putBackupVaultNotificationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RestoreJobId:string, ValidationStatus:"FAILED"|"SUCCESSFUL"|"TIMED_OUT"|"VALIDATING", ValidationStatusMessage?:string} $args
     * @return \AWS\Result<void>
     */
    public function putRestoreValidationResult(array $args): \AWS\Result { }

    /**
     * @param array{RestoreJobId:string, ValidationStatus:"FAILED"|"SUCCESSFUL"|"TIMED_OUT"|"VALIDATING", ValidationStatusMessage?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putRestoreValidationResultAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupVaultName:string, ResourceArn:string, IamRoleArn:string, IdempotencyToken?:string, StartWindowMinutes?:int, CompleteWindowMinutes?:int, Lifecycle?:array{MoveToColdStorageAfterDays?:int, DeleteAfterDays?:int, OptInToArchiveForSupportedResources?:bool}, RecoveryPointTags?:array<string, string>, BackupOptions?:array<string, string>, Index?:"ENABLED"|"DISABLED"} $args
     * @return \AWS\Result<array{BackupJobId?:string, RecoveryPointArn?:string, CreationDate?:int|string|\DateTimeInterface, IsParent?:bool}>
     */
    public function startBackupJob(array $args): \AWS\Result { }

    /**
     * @param array{BackupVaultName:string, ResourceArn:string, IamRoleArn:string, IdempotencyToken?:string, StartWindowMinutes?:int, CompleteWindowMinutes?:int, Lifecycle?:array{MoveToColdStorageAfterDays?:int, DeleteAfterDays?:int, OptInToArchiveForSupportedResources?:bool}, RecoveryPointTags?:array<string, string>, BackupOptions?:array<string, string>, Index?:"ENABLED"|"DISABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{BackupJobId?:string, RecoveryPointArn?:string, CreationDate?:int|string|\DateTimeInterface, IsParent?:bool}>
     */
    public function startBackupJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RecoveryPointArn:string, SourceBackupVaultName:string, DestinationBackupVaultArn:string, IamRoleArn:string, IdempotencyToken?:string, Lifecycle?:array{MoveToColdStorageAfterDays?:int, DeleteAfterDays?:int, OptInToArchiveForSupportedResources?:bool}} $args
     * @return \AWS\Result<array{CopyJobId?:string, CreationDate?:int|string|\DateTimeInterface, IsParent?:bool}>
     */
    public function startCopyJob(array $args): \AWS\Result { }

    /**
     * @param array{RecoveryPointArn:string, SourceBackupVaultName:string, DestinationBackupVaultArn:string, IamRoleArn:string, IdempotencyToken?:string, Lifecycle?:array{MoveToColdStorageAfterDays?:int, DeleteAfterDays?:int, OptInToArchiveForSupportedResources?:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{CopyJobId?:string, CreationDate?:int|string|\DateTimeInterface, IsParent?:bool}>
     */
    public function startCopyJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ReportPlanName:string, IdempotencyToken?:string} $args
     * @return \AWS\Result<array{ReportJobId?:string}>
     */
    public function startReportJob(array $args): \AWS\Result { }

    /**
     * @param array{ReportPlanName:string, IdempotencyToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReportJobId?:string}>
     */
    public function startReportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RecoveryPointArn:string, Metadata:array<string, string>, IamRoleArn?:string, IdempotencyToken?:string, ResourceType?:string, CopySourceTagsToRestoredResource?:bool} $args
     * @return \AWS\Result<array{RestoreJobId?:string}>
     */
    public function startRestoreJob(array $args): \AWS\Result { }

    /**
     * @param array{RecoveryPointArn:string, Metadata:array<string, string>, IamRoleArn?:string, IdempotencyToken?:string, ResourceType?:string, CopySourceTagsToRestoredResource?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{RestoreJobId?:string}>
     */
    public function startRestoreJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupJobId:string} $args
     * @return \AWS\Result<void>
     */
    public function stopBackupJob(array $args): \AWS\Result { }

    /**
     * @param array{BackupJobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function stopBackupJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Tags:array<string, string>} $args
     * @return \AWS\Result<void>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, TagKeyList:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, TagKeyList:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupPlanId:string, BackupPlan:array{BackupPlanName:string, Rules:array<array{RuleName:string, TargetBackupVaultName:string, ScheduleExpression?:string, StartWindowMinutes?:int, CompletionWindowMinutes?:int, Lifecycle?:array{MoveToColdStorageAfterDays?:int, DeleteAfterDays?:int, OptInToArchiveForSupportedResources?:bool}, RecoveryPointTags?:array<string, string>, CopyActions?:array<array{Lifecycle?:array{MoveToColdStorageAfterDays?:int, DeleteAfterDays?:int, OptInToArchiveForSupportedResources?:bool}, DestinationBackupVaultArn:string}>, EnableContinuousBackup?:bool, ScheduleExpressionTimezone?:string, IndexActions?:array<array{ResourceTypes?:array<string>}>}>, AdvancedBackupSettings?:array<array{ResourceType?:string, BackupOptions?:array<string, string>}>}} $args
     * @return \AWS\Result<array{BackupPlanId?:string, BackupPlanArn?:string, CreationDate?:int|string|\DateTimeInterface, VersionId?:string, AdvancedBackupSettings?:array<array{ResourceType?:string, BackupOptions?:array<string, string>}>}>
     */
    public function updateBackupPlan(array $args): \AWS\Result { }

    /**
     * @param array{BackupPlanId:string, BackupPlan:array{BackupPlanName:string, Rules:array<array{RuleName:string, TargetBackupVaultName:string, ScheduleExpression?:string, StartWindowMinutes?:int, CompletionWindowMinutes?:int, Lifecycle?:array{MoveToColdStorageAfterDays?:int, DeleteAfterDays?:int, OptInToArchiveForSupportedResources?:bool}, RecoveryPointTags?:array<string, string>, CopyActions?:array<array{Lifecycle?:array{MoveToColdStorageAfterDays?:int, DeleteAfterDays?:int, OptInToArchiveForSupportedResources?:bool}, DestinationBackupVaultArn:string}>, EnableContinuousBackup?:bool, ScheduleExpressionTimezone?:string, IndexActions?:array<array{ResourceTypes?:array<string>}>}>, AdvancedBackupSettings?:array<array{ResourceType?:string, BackupOptions?:array<string, string>}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{BackupPlanId?:string, BackupPlanArn?:string, CreationDate?:int|string|\DateTimeInterface, VersionId?:string, AdvancedBackupSettings?:array<array{ResourceType?:string, BackupOptions?:array<string, string>}>}>
     */
    public function updateBackupPlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FrameworkName:string, FrameworkDescription?:string, FrameworkControls?:array<array{ControlName:string, ControlInputParameters?:array<array{ParameterName?:string, ParameterValue?:string}>, ControlScope?:array{ComplianceResourceIds?:array<string>, ComplianceResourceTypes?:array<string>, Tags?:array<string, string>}}>, IdempotencyToken?:string} $args
     * @return \AWS\Result<array{FrameworkName?:string, FrameworkArn?:string, CreationTime?:int|string|\DateTimeInterface}>
     */
    public function updateFramework(array $args): \AWS\Result { }

    /**
     * @param array{FrameworkName:string, FrameworkDescription?:string, FrameworkControls?:array<array{ControlName:string, ControlInputParameters?:array<array{ParameterName?:string, ParameterValue?:string}>, ControlScope?:array{ComplianceResourceIds?:array<string>, ComplianceResourceTypes?:array<string>, Tags?:array<string, string>}}>, IdempotencyToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FrameworkName?:string, FrameworkArn?:string, CreationTime?:int|string|\DateTimeInterface}>
     */
    public function updateFrameworkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalSettings?:array<string, string>} $args
     * @return \AWS\Result<void>
     */
    public function updateGlobalSettings(array $args = []): \AWS\Result { }

    /**
     * @param array{GlobalSettings?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateGlobalSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupVaultName:string, RecoveryPointArn:string, IamRoleArn?:string, Index:"ENABLED"|"DISABLED"} $args
     * @return \AWS\Result<array{BackupVaultName?:string, RecoveryPointArn?:string, IndexStatus?:"PENDING"|"ACTIVE"|"FAILED"|"DELETING", Index?:"ENABLED"|"DISABLED"}>
     */
    public function updateRecoveryPointIndexSettings(array $args): \AWS\Result { }

    /**
     * @param array{BackupVaultName:string, RecoveryPointArn:string, IamRoleArn?:string, Index:"ENABLED"|"DISABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{BackupVaultName?:string, RecoveryPointArn?:string, IndexStatus?:"PENDING"|"ACTIVE"|"FAILED"|"DELETING", Index?:"ENABLED"|"DISABLED"}>
     */
    public function updateRecoveryPointIndexSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupVaultName:string, RecoveryPointArn:string, Lifecycle?:array{MoveToColdStorageAfterDays?:int, DeleteAfterDays?:int, OptInToArchiveForSupportedResources?:bool}} $args
     * @return \AWS\Result<array{BackupVaultArn?:string, RecoveryPointArn?:string, Lifecycle?:array{MoveToColdStorageAfterDays?:int, DeleteAfterDays?:int, OptInToArchiveForSupportedResources?:bool}, CalculatedLifecycle?:array{MoveToColdStorageAt?:int|string|\DateTimeInterface, DeleteAt?:int|string|\DateTimeInterface}}>
     */
    public function updateRecoveryPointLifecycle(array $args): \AWS\Result { }

    /**
     * @param array{BackupVaultName:string, RecoveryPointArn:string, Lifecycle?:array{MoveToColdStorageAfterDays?:int, DeleteAfterDays?:int, OptInToArchiveForSupportedResources?:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{BackupVaultArn?:string, RecoveryPointArn?:string, Lifecycle?:array{MoveToColdStorageAfterDays?:int, DeleteAfterDays?:int, OptInToArchiveForSupportedResources?:bool}, CalculatedLifecycle?:array{MoveToColdStorageAt?:int|string|\DateTimeInterface, DeleteAt?:int|string|\DateTimeInterface}}>
     */
    public function updateRecoveryPointLifecycleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceTypeOptInPreference?:array<string, bool>, ResourceTypeManagementPreference?:array<string, bool>} $args
     * @return \AWS\Result<void>
     */
    public function updateRegionSettings(array $args = []): \AWS\Result { }

    /**
     * @param array{ResourceTypeOptInPreference?:array<string, bool>, ResourceTypeManagementPreference?:array<string, bool>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateRegionSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ReportPlanName:string, ReportPlanDescription?:string, ReportDeliveryChannel?:array{S3BucketName:string, S3KeyPrefix?:string, Formats?:array<string>}, ReportSetting?:array{ReportTemplate:string, FrameworkArns?:array<string>, NumberOfFrameworks?:int, Accounts?:array<string>, OrganizationUnits?:array<string>, Regions?:array<string>}, IdempotencyToken?:string} $args
     * @return \AWS\Result<array{ReportPlanName?:string, ReportPlanArn?:string, CreationTime?:int|string|\DateTimeInterface}>
     */
    public function updateReportPlan(array $args): \AWS\Result { }

    /**
     * @param array{ReportPlanName:string, ReportPlanDescription?:string, ReportDeliveryChannel?:array{S3BucketName:string, S3KeyPrefix?:string, Formats?:array<string>}, ReportSetting?:array{ReportTemplate:string, FrameworkArns?:array<string>, NumberOfFrameworks?:int, Accounts?:array<string>, OrganizationUnits?:array<string>, Regions?:array<string>}, IdempotencyToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReportPlanName?:string, ReportPlanArn?:string, CreationTime?:int|string|\DateTimeInterface}>
     */
    public function updateReportPlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RestoreTestingPlan:array{RecoveryPointSelection?:array{Algorithm?:"LATEST_WITHIN_WINDOW"|"RANDOM_WITHIN_WINDOW", ExcludeVaults?:array<string>, IncludeVaults?:array<string>, RecoveryPointTypes?:array<"CONTINUOUS"|"SNAPSHOT">, SelectionWindowDays?:int}, ScheduleExpression?:string, ScheduleExpressionTimezone?:string, StartWindowHours?:int}, RestoreTestingPlanName:string} $args
     * @return \AWS\Result<array{CreationTime:int|string|\DateTimeInterface, RestoreTestingPlanArn:string, RestoreTestingPlanName:string, UpdateTime:int|string|\DateTimeInterface}>
     */
    public function updateRestoreTestingPlan(array $args): \AWS\Result { }

    /**
     * @param array{RestoreTestingPlan:array{RecoveryPointSelection?:array{Algorithm?:"LATEST_WITHIN_WINDOW"|"RANDOM_WITHIN_WINDOW", ExcludeVaults?:array<string>, IncludeVaults?:array<string>, RecoveryPointTypes?:array<"CONTINUOUS"|"SNAPSHOT">, SelectionWindowDays?:int}, ScheduleExpression?:string, ScheduleExpressionTimezone?:string, StartWindowHours?:int}, RestoreTestingPlanName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CreationTime:int|string|\DateTimeInterface, RestoreTestingPlanArn:string, RestoreTestingPlanName:string, UpdateTime:int|string|\DateTimeInterface}>
     */
    public function updateRestoreTestingPlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RestoreTestingPlanName:string, RestoreTestingSelection:array{IamRoleArn?:string, ProtectedResourceArns?:array<string>, ProtectedResourceConditions?:array{StringEquals?:array<array{Key:string, Value:string}>, StringNotEquals?:array<array{Key:string, Value:string}>}, RestoreMetadataOverrides?:array<string, string>, ValidationWindowHours?:int}, RestoreTestingSelectionName:string} $args
     * @return \AWS\Result<array{CreationTime:int|string|\DateTimeInterface, RestoreTestingPlanArn:string, RestoreTestingPlanName:string, RestoreTestingSelectionName:string, UpdateTime:int|string|\DateTimeInterface}>
     */
    public function updateRestoreTestingSelection(array $args): \AWS\Result { }

    /**
     * @param array{RestoreTestingPlanName:string, RestoreTestingSelection:array{IamRoleArn?:string, ProtectedResourceArns?:array<string>, ProtectedResourceConditions?:array{StringEquals?:array<array{Key:string, Value:string}>, StringNotEquals?:array<array{Key:string, Value:string}>}, RestoreMetadataOverrides?:array<string, string>, ValidationWindowHours?:int}, RestoreTestingSelectionName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CreationTime:int|string|\DateTimeInterface, RestoreTestingPlanArn:string, RestoreTestingPlanName:string, RestoreTestingSelectionName:string, UpdateTime:int|string|\DateTimeInterface}>
     */
    public function updateRestoreTestingSelectionAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
