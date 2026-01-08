<?php
namespace AWS\Ssm;

class SsmClient
{
    /**
     * @param array{ResourceType:"Document"|"ManagedInstance"|"MaintenanceWindow"|"Parameter"|"PatchBaseline"|"OpsItem"|"OpsMetadata"|"Automation"|"Association", ResourceId:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function addTagsToResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceType:"Document"|"ManagedInstance"|"MaintenanceWindow"|"Parameter"|"PatchBaseline"|"OpsItem"|"OpsMetadata"|"Automation"|"Association", ResourceId:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function addTagsToResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OpsItemId:string, AssociationType:string, ResourceType:string, ResourceUri:string} $args
     * @return \AWS\Result<array{AssociationId?:string}>
     */
    public function associateOpsItemRelatedItem(array $args): \AWS\Result { }

    /**
     * @param array{OpsItemId:string, AssociationType:string, ResourceType:string, ResourceUri:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AssociationId?:string}>
     */
    public function associateOpsItemRelatedItemAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CommandId:string, InstanceIds?:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function cancelCommand(array $args): \AWS\Result { }

    /**
     * @param array{CommandId:string, InstanceIds?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function cancelCommandAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WindowExecutionId:string} $args
     * @return \AWS\Result<array{WindowExecutionId?:string}>
     */
    public function cancelMaintenanceWindowExecution(array $args): \AWS\Result { }

    /**
     * @param array{WindowExecutionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WindowExecutionId?:string}>
     */
    public function cancelMaintenanceWindowExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Description?:string, DefaultInstanceName?:string, IamRole:string, RegistrationLimit?:int, ExpirationDate?:int|string|\DateTimeInterface, Tags?:array<array{Key:string, Value:string}>, RegistrationMetadata?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{ActivationId?:string, ActivationCode?:string}>
     */
    public function createActivation(array $args): \AWS\Result { }

    /**
     * @param array{Description?:string, DefaultInstanceName?:string, IamRole:string, RegistrationLimit?:int, ExpirationDate?:int|string|\DateTimeInterface, Tags?:array<array{Key:string, Value:string}>, RegistrationMetadata?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ActivationId?:string, ActivationCode?:string}>
     */
    public function createActivationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, DocumentVersion?:string, InstanceId?:string, Parameters?:array<string, array<string>>, Targets?:array<array{Key?:string, Values?:array<string>}>, ScheduleExpression?:string, OutputLocation?:array{S3Location?:array{OutputS3Region?:string, OutputS3BucketName?:string, OutputS3KeyPrefix?:string}}, AssociationName?:string, AutomationTargetParameterName?:string, MaxErrors?:string, MaxConcurrency?:string, ComplianceSeverity?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"UNSPECIFIED", SyncCompliance?:"AUTO"|"MANUAL", ApplyOnlyAtCronInterval?:bool, CalendarNames?:array<string>, TargetLocations?:array<array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}>, ScheduleOffset?:int, Duration?:int, TargetMaps?:array<array<string, array<string>>>, Tags?:array<array{Key:string, Value:string}>, AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}} $args
     * @return \AWS\Result<array{AssociationDescription?:array{Name?:string, InstanceId?:string, AssociationVersion?:string, Date?:int|string|\DateTimeInterface, LastUpdateAssociationDate?:int|string|\DateTimeInterface, Status?:array{Date:int|string|\DateTimeInterface, Name:"Pending"|"Success"|"Failed", Message:string, AdditionalInfo?:string}, Overview?:array{Status?:string, DetailedStatus?:string, AssociationStatusAggregatedCount?:array<string, int>}, DocumentVersion?:string, AutomationTargetParameterName?:string, Parameters?:array<string, array<string>>, AssociationId?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, ScheduleExpression?:string, OutputLocation?:array{S3Location?:array{OutputS3Region?:string, OutputS3BucketName?:string, OutputS3KeyPrefix?:string}}, LastExecutionDate?:int|string|\DateTimeInterface, LastSuccessfulExecutionDate?:int|string|\DateTimeInterface, AssociationName?:string, MaxErrors?:string, MaxConcurrency?:string, ComplianceSeverity?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"UNSPECIFIED", SyncCompliance?:"AUTO"|"MANUAL", ApplyOnlyAtCronInterval?:bool, CalendarNames?:array<string>, TargetLocations?:array<array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}>, ScheduleOffset?:int, Duration?:int, TargetMaps?:array<array<string, array<string>>>, AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, TriggeredAlarms?:array<array{Name:string, State:"UNKNOWN"|"ALARM"}>}}>
     */
    public function createAssociation(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, DocumentVersion?:string, InstanceId?:string, Parameters?:array<string, array<string>>, Targets?:array<array{Key?:string, Values?:array<string>}>, ScheduleExpression?:string, OutputLocation?:array{S3Location?:array{OutputS3Region?:string, OutputS3BucketName?:string, OutputS3KeyPrefix?:string}}, AssociationName?:string, AutomationTargetParameterName?:string, MaxErrors?:string, MaxConcurrency?:string, ComplianceSeverity?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"UNSPECIFIED", SyncCompliance?:"AUTO"|"MANUAL", ApplyOnlyAtCronInterval?:bool, CalendarNames?:array<string>, TargetLocations?:array<array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}>, ScheduleOffset?:int, Duration?:int, TargetMaps?:array<array<string, array<string>>>, Tags?:array<array{Key:string, Value:string}>, AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{AssociationDescription?:array{Name?:string, InstanceId?:string, AssociationVersion?:string, Date?:int|string|\DateTimeInterface, LastUpdateAssociationDate?:int|string|\DateTimeInterface, Status?:array{Date:int|string|\DateTimeInterface, Name:"Pending"|"Success"|"Failed", Message:string, AdditionalInfo?:string}, Overview?:array{Status?:string, DetailedStatus?:string, AssociationStatusAggregatedCount?:array<string, int>}, DocumentVersion?:string, AutomationTargetParameterName?:string, Parameters?:array<string, array<string>>, AssociationId?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, ScheduleExpression?:string, OutputLocation?:array{S3Location?:array{OutputS3Region?:string, OutputS3BucketName?:string, OutputS3KeyPrefix?:string}}, LastExecutionDate?:int|string|\DateTimeInterface, LastSuccessfulExecutionDate?:int|string|\DateTimeInterface, AssociationName?:string, MaxErrors?:string, MaxConcurrency?:string, ComplianceSeverity?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"UNSPECIFIED", SyncCompliance?:"AUTO"|"MANUAL", ApplyOnlyAtCronInterval?:bool, CalendarNames?:array<string>, TargetLocations?:array<array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}>, ScheduleOffset?:int, Duration?:int, TargetMaps?:array<array<string, array<string>>>, AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, TriggeredAlarms?:array<array{Name:string, State:"UNKNOWN"|"ALARM"}>}}>
     */
    public function createAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Entries:array<array{Name:string, InstanceId?:string, Parameters?:array<string, array<string>>, AutomationTargetParameterName?:string, DocumentVersion?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, ScheduleExpression?:string, OutputLocation?:array{S3Location?:array{OutputS3Region?:string, OutputS3BucketName?:string, OutputS3KeyPrefix?:string}}, AssociationName?:string, MaxErrors?:string, MaxConcurrency?:string, ComplianceSeverity?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"UNSPECIFIED", SyncCompliance?:"AUTO"|"MANUAL", ApplyOnlyAtCronInterval?:bool, CalendarNames?:array<string>, TargetLocations?:array<array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}>, ScheduleOffset?:int, Duration?:int, TargetMaps?:array<array<string, array<string>>>, AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}}>} $args
     * @return \AWS\Result<array{Successful?:array<array{Name?:string, InstanceId?:string, AssociationVersion?:string, Date?:int|string|\DateTimeInterface, LastUpdateAssociationDate?:int|string|\DateTimeInterface, Status?:array{Date:int|string|\DateTimeInterface, Name:"Pending"|"Success"|"Failed", Message:string, AdditionalInfo?:string}, Overview?:array{Status?:string, DetailedStatus?:string, AssociationStatusAggregatedCount?:array<string, int>}, DocumentVersion?:string, AutomationTargetParameterName?:string, Parameters?:array<string, array<string>>, AssociationId?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, ScheduleExpression?:string, OutputLocation?:array{S3Location?:array{OutputS3Region?:string, OutputS3BucketName?:string, OutputS3KeyPrefix?:string}}, LastExecutionDate?:int|string|\DateTimeInterface, LastSuccessfulExecutionDate?:int|string|\DateTimeInterface, AssociationName?:string, MaxErrors?:string, MaxConcurrency?:string, ComplianceSeverity?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"UNSPECIFIED", SyncCompliance?:"AUTO"|"MANUAL", ApplyOnlyAtCronInterval?:bool, CalendarNames?:array<string>, TargetLocations?:array<array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}>, ScheduleOffset?:int, Duration?:int, TargetMaps?:array<array<string, array<string>>>, AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, TriggeredAlarms?:array<array{Name:string, State:"UNKNOWN"|"ALARM"}>}>, Failed?:array<array{Entry?:array{Name:string, InstanceId?:string, Parameters?:array<string, array<string>>, AutomationTargetParameterName?:string, DocumentVersion?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, ScheduleExpression?:string, OutputLocation?:array{S3Location?:array{OutputS3Region?:string, OutputS3BucketName?:string, OutputS3KeyPrefix?:string}}, AssociationName?:string, MaxErrors?:string, MaxConcurrency?:string, ComplianceSeverity?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"UNSPECIFIED", SyncCompliance?:"AUTO"|"MANUAL", ApplyOnlyAtCronInterval?:bool, CalendarNames?:array<string>, TargetLocations?:array<array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}>, ScheduleOffset?:int, Duration?:int, TargetMaps?:array<array<string, array<string>>>, AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}}, Message?:string, Fault?:"Client"|"Server"|"Unknown"}>}>
     */
    public function createAssociationBatch(array $args): \AWS\Result { }

    /**
     * @param array{Entries:array<array{Name:string, InstanceId?:string, Parameters?:array<string, array<string>>, AutomationTargetParameterName?:string, DocumentVersion?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, ScheduleExpression?:string, OutputLocation?:array{S3Location?:array{OutputS3Region?:string, OutputS3BucketName?:string, OutputS3KeyPrefix?:string}}, AssociationName?:string, MaxErrors?:string, MaxConcurrency?:string, ComplianceSeverity?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"UNSPECIFIED", SyncCompliance?:"AUTO"|"MANUAL", ApplyOnlyAtCronInterval?:bool, CalendarNames?:array<string>, TargetLocations?:array<array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}>, ScheduleOffset?:int, Duration?:int, TargetMaps?:array<array<string, array<string>>>, AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Successful?:array<array{Name?:string, InstanceId?:string, AssociationVersion?:string, Date?:int|string|\DateTimeInterface, LastUpdateAssociationDate?:int|string|\DateTimeInterface, Status?:array{Date:int|string|\DateTimeInterface, Name:"Pending"|"Success"|"Failed", Message:string, AdditionalInfo?:string}, Overview?:array{Status?:string, DetailedStatus?:string, AssociationStatusAggregatedCount?:array<string, int>}, DocumentVersion?:string, AutomationTargetParameterName?:string, Parameters?:array<string, array<string>>, AssociationId?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, ScheduleExpression?:string, OutputLocation?:array{S3Location?:array{OutputS3Region?:string, OutputS3BucketName?:string, OutputS3KeyPrefix?:string}}, LastExecutionDate?:int|string|\DateTimeInterface, LastSuccessfulExecutionDate?:int|string|\DateTimeInterface, AssociationName?:string, MaxErrors?:string, MaxConcurrency?:string, ComplianceSeverity?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"UNSPECIFIED", SyncCompliance?:"AUTO"|"MANUAL", ApplyOnlyAtCronInterval?:bool, CalendarNames?:array<string>, TargetLocations?:array<array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}>, ScheduleOffset?:int, Duration?:int, TargetMaps?:array<array<string, array<string>>>, AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, TriggeredAlarms?:array<array{Name:string, State:"UNKNOWN"|"ALARM"}>}>, Failed?:array<array{Entry?:array{Name:string, InstanceId?:string, Parameters?:array<string, array<string>>, AutomationTargetParameterName?:string, DocumentVersion?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, ScheduleExpression?:string, OutputLocation?:array{S3Location?:array{OutputS3Region?:string, OutputS3BucketName?:string, OutputS3KeyPrefix?:string}}, AssociationName?:string, MaxErrors?:string, MaxConcurrency?:string, ComplianceSeverity?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"UNSPECIFIED", SyncCompliance?:"AUTO"|"MANUAL", ApplyOnlyAtCronInterval?:bool, CalendarNames?:array<string>, TargetLocations?:array<array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}>, ScheduleOffset?:int, Duration?:int, TargetMaps?:array<array<string, array<string>>>, AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}}, Message?:string, Fault?:"Client"|"Server"|"Unknown"}>}>
     */
    public function createAssociationBatchAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Content:string, Requires?:array<array{Name:string, Version?:string, RequireType?:string, VersionName?:string}>, Attachments?:array<array{Key?:"SourceUrl"|"S3FileUrl"|"AttachmentReference", Values?:array<string>, Name?:string}>, Name:string, DisplayName?:string, VersionName?:string, DocumentType?:"Command"|"Policy"|"Automation"|"Session"|"Package"|"ApplicationConfiguration"|"ApplicationConfigurationSchema"|"DeploymentStrategy"|"ChangeCalendar"|"Automation.ChangeTemplate"|"ProblemAnalysis"|"ProblemAnalysisTemplate"|"CloudFormation"|"ConformancePackTemplate"|"QuickSetup", DocumentFormat?:"YAML"|"JSON"|"TEXT", TargetType?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{DocumentDescription?:array{Sha1?:string, Hash?:string, HashType?:"Sha256"|"Sha1", Name?:string, DisplayName?:string, VersionName?:string, Owner?:string, CreatedDate?:int|string|\DateTimeInterface, Status?:"Creating"|"Active"|"Updating"|"Deleting"|"Failed", StatusInformation?:string, DocumentVersion?:string, Description?:string, Parameters?:array<array{Name?:string, Type?:"String"|"StringList", Description?:string, DefaultValue?:string}>, PlatformTypes?:array<"Windows"|"Linux"|"MacOS">, DocumentType?:"Command"|"Policy"|"Automation"|"Session"|"Package"|"ApplicationConfiguration"|"ApplicationConfigurationSchema"|"DeploymentStrategy"|"ChangeCalendar"|"Automation.ChangeTemplate"|"ProblemAnalysis"|"ProblemAnalysisTemplate"|"CloudFormation"|"ConformancePackTemplate"|"QuickSetup", SchemaVersion?:string, LatestVersion?:string, DefaultVersion?:string, DocumentFormat?:"YAML"|"JSON"|"TEXT", TargetType?:string, Tags?:array<array{Key:string, Value:string}>, AttachmentsInformation?:array<array{Name?:string}>, Requires?:array<array{Name:string, Version?:string, RequireType?:string, VersionName?:string}>, Author?:string, ReviewInformation?:array<array{ReviewedTime?:int|string|\DateTimeInterface, Status?:"APPROVED"|"NOT_REVIEWED"|"PENDING"|"REJECTED", Reviewer?:string}>, ApprovedVersion?:string, PendingReviewVersion?:string, ReviewStatus?:"APPROVED"|"NOT_REVIEWED"|"PENDING"|"REJECTED", Category?:array<string>, CategoryEnum?:array<string>}}>
     */
    public function createDocument(array $args): \AWS\Result { }

    /**
     * @param array{Content:string, Requires?:array<array{Name:string, Version?:string, RequireType?:string, VersionName?:string}>, Attachments?:array<array{Key?:"SourceUrl"|"S3FileUrl"|"AttachmentReference", Values?:array<string>, Name?:string}>, Name:string, DisplayName?:string, VersionName?:string, DocumentType?:"Command"|"Policy"|"Automation"|"Session"|"Package"|"ApplicationConfiguration"|"ApplicationConfigurationSchema"|"DeploymentStrategy"|"ChangeCalendar"|"Automation.ChangeTemplate"|"ProblemAnalysis"|"ProblemAnalysisTemplate"|"CloudFormation"|"ConformancePackTemplate"|"QuickSetup", DocumentFormat?:"YAML"|"JSON"|"TEXT", TargetType?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DocumentDescription?:array{Sha1?:string, Hash?:string, HashType?:"Sha256"|"Sha1", Name?:string, DisplayName?:string, VersionName?:string, Owner?:string, CreatedDate?:int|string|\DateTimeInterface, Status?:"Creating"|"Active"|"Updating"|"Deleting"|"Failed", StatusInformation?:string, DocumentVersion?:string, Description?:string, Parameters?:array<array{Name?:string, Type?:"String"|"StringList", Description?:string, DefaultValue?:string}>, PlatformTypes?:array<"Windows"|"Linux"|"MacOS">, DocumentType?:"Command"|"Policy"|"Automation"|"Session"|"Package"|"ApplicationConfiguration"|"ApplicationConfigurationSchema"|"DeploymentStrategy"|"ChangeCalendar"|"Automation.ChangeTemplate"|"ProblemAnalysis"|"ProblemAnalysisTemplate"|"CloudFormation"|"ConformancePackTemplate"|"QuickSetup", SchemaVersion?:string, LatestVersion?:string, DefaultVersion?:string, DocumentFormat?:"YAML"|"JSON"|"TEXT", TargetType?:string, Tags?:array<array{Key:string, Value:string}>, AttachmentsInformation?:array<array{Name?:string}>, Requires?:array<array{Name:string, Version?:string, RequireType?:string, VersionName?:string}>, Author?:string, ReviewInformation?:array<array{ReviewedTime?:int|string|\DateTimeInterface, Status?:"APPROVED"|"NOT_REVIEWED"|"PENDING"|"REJECTED", Reviewer?:string}>, ApprovedVersion?:string, PendingReviewVersion?:string, ReviewStatus?:"APPROVED"|"NOT_REVIEWED"|"PENDING"|"REJECTED", Category?:array<string>, CategoryEnum?:array<string>}}>
     */
    public function createDocumentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Description?:string, StartDate?:string, EndDate?:string, Schedule:string, ScheduleTimezone?:string, ScheduleOffset?:int, Duration:int, Cutoff:int, AllowUnassociatedTargets:bool, ClientToken?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{WindowId?:string}>
     */
    public function createMaintenanceWindow(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, StartDate?:string, EndDate?:string, Schedule:string, ScheduleTimezone?:string, ScheduleOffset?:int, Duration:int, Cutoff:int, AllowUnassociatedTargets:bool, ClientToken?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{WindowId?:string}>
     */
    public function createMaintenanceWindowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Description:string, OpsItemType?:string, OperationalData?:array<string, array{Value?:string, Type?:"SearchableString"|"String"}>, Notifications?:array<array{Arn?:string}>, Priority?:int, RelatedOpsItems?:array<array{OpsItemId:string}>, Source:string, Title:string, Tags?:array<array{Key:string, Value:string}>, Category?:string, Severity?:string, ActualStartTime?:int|string|\DateTimeInterface, ActualEndTime?:int|string|\DateTimeInterface, PlannedStartTime?:int|string|\DateTimeInterface, PlannedEndTime?:int|string|\DateTimeInterface, AccountId?:string} $args
     * @return \AWS\Result<array{OpsItemId?:string, OpsItemArn?:string}>
     */
    public function createOpsItem(array $args): \AWS\Result { }

    /**
     * @param array{Description:string, OpsItemType?:string, OperationalData?:array<string, array{Value?:string, Type?:"SearchableString"|"String"}>, Notifications?:array<array{Arn?:string}>, Priority?:int, RelatedOpsItems?:array<array{OpsItemId:string}>, Source:string, Title:string, Tags?:array<array{Key:string, Value:string}>, Category?:string, Severity?:string, ActualStartTime?:int|string|\DateTimeInterface, ActualEndTime?:int|string|\DateTimeInterface, PlannedStartTime?:int|string|\DateTimeInterface, PlannedEndTime?:int|string|\DateTimeInterface, AccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{OpsItemId?:string, OpsItemArn?:string}>
     */
    public function createOpsItemAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, Metadata?:array<string, array{Value?:string}>, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{OpsMetadataArn?:string}>
     */
    public function createOpsMetadata(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, Metadata?:array<string, array{Value?:string}>, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{OpsMetadataArn?:string}>
     */
    public function createOpsMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OperatingSystem?:"WINDOWS"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"AMAZON_LINUX_2022"|"UBUNTU"|"REDHAT_ENTERPRISE_LINUX"|"SUSE"|"CENTOS"|"ORACLE_LINUX"|"DEBIAN"|"MACOS"|"RASPBIAN"|"ROCKY_LINUX"|"ALMA_LINUX"|"AMAZON_LINUX_2023", Name:string, GlobalFilters?:array{PatchFilters:array<array{Key:"ARCH"|"ADVISORY_ID"|"BUGZILLA_ID"|"PATCH_SET"|"PRODUCT"|"PRODUCT_FAMILY"|"CLASSIFICATION"|"CVE_ID"|"EPOCH"|"MSRC_SEVERITY"|"NAME"|"PATCH_ID"|"SECTION"|"PRIORITY"|"REPOSITORY"|"RELEASE"|"SEVERITY"|"SECURITY"|"VERSION", Values:array<string>}>}, ApprovalRules?:array{PatchRules:array<array{PatchFilterGroup:array{PatchFilters:array<array{Key:"ARCH"|"ADVISORY_ID"|"BUGZILLA_ID"|"PATCH_SET"|"PRODUCT"|"PRODUCT_FAMILY"|"CLASSIFICATION"|"CVE_ID"|"EPOCH"|"MSRC_SEVERITY"|"NAME"|"PATCH_ID"|"SECTION"|"PRIORITY"|"REPOSITORY"|"RELEASE"|"SEVERITY"|"SECURITY"|"VERSION", Values:array<string>}>}, ComplianceLevel?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"INFORMATIONAL"|"UNSPECIFIED", ApproveAfterDays?:int, ApproveUntilDate?:string, EnableNonSecurity?:bool}>}, ApprovedPatches?:array<string>, ApprovedPatchesComplianceLevel?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"INFORMATIONAL"|"UNSPECIFIED", ApprovedPatchesEnableNonSecurity?:bool, RejectedPatches?:array<string>, RejectedPatchesAction?:"ALLOW_AS_DEPENDENCY"|"BLOCK", Description?:string, Sources?:array<array{Name:string, Products:array<string>, Configuration:string}>, ClientToken?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{BaselineId?:string}>
     */
    public function createPatchBaseline(array $args): \AWS\Result { }

    /**
     * @param array{OperatingSystem?:"WINDOWS"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"AMAZON_LINUX_2022"|"UBUNTU"|"REDHAT_ENTERPRISE_LINUX"|"SUSE"|"CENTOS"|"ORACLE_LINUX"|"DEBIAN"|"MACOS"|"RASPBIAN"|"ROCKY_LINUX"|"ALMA_LINUX"|"AMAZON_LINUX_2023", Name:string, GlobalFilters?:array{PatchFilters:array<array{Key:"ARCH"|"ADVISORY_ID"|"BUGZILLA_ID"|"PATCH_SET"|"PRODUCT"|"PRODUCT_FAMILY"|"CLASSIFICATION"|"CVE_ID"|"EPOCH"|"MSRC_SEVERITY"|"NAME"|"PATCH_ID"|"SECTION"|"PRIORITY"|"REPOSITORY"|"RELEASE"|"SEVERITY"|"SECURITY"|"VERSION", Values:array<string>}>}, ApprovalRules?:array{PatchRules:array<array{PatchFilterGroup:array{PatchFilters:array<array{Key:"ARCH"|"ADVISORY_ID"|"BUGZILLA_ID"|"PATCH_SET"|"PRODUCT"|"PRODUCT_FAMILY"|"CLASSIFICATION"|"CVE_ID"|"EPOCH"|"MSRC_SEVERITY"|"NAME"|"PATCH_ID"|"SECTION"|"PRIORITY"|"REPOSITORY"|"RELEASE"|"SEVERITY"|"SECURITY"|"VERSION", Values:array<string>}>}, ComplianceLevel?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"INFORMATIONAL"|"UNSPECIFIED", ApproveAfterDays?:int, ApproveUntilDate?:string, EnableNonSecurity?:bool}>}, ApprovedPatches?:array<string>, ApprovedPatchesComplianceLevel?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"INFORMATIONAL"|"UNSPECIFIED", ApprovedPatchesEnableNonSecurity?:bool, RejectedPatches?:array<string>, RejectedPatchesAction?:"ALLOW_AS_DEPENDENCY"|"BLOCK", Description?:string, Sources?:array<array{Name:string, Products:array<string>, Configuration:string}>, ClientToken?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{BaselineId?:string}>
     */
    public function createPatchBaselineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SyncName:string, S3Destination?:array{BucketName:string, Prefix?:string, SyncFormat:"JsonSerDe", Region:string, AWSKMSKeyARN?:string, DestinationDataSharing?:array{DestinationDataSharingType?:string}}, SyncType?:string, SyncSource?:array{SourceType:string, AwsOrganizationsSource?:array{OrganizationSourceType:string, OrganizationalUnits?:array<array{OrganizationalUnitId?:string}>}, SourceRegions:array<string>, IncludeFutureRegions?:bool, EnableAllOpsDataSources?:bool}} $args
     * @return \AWS\Result<array{}>
     */
    public function createResourceDataSync(array $args): \AWS\Result { }

    /**
     * @param array{SyncName:string, S3Destination?:array{BucketName:string, Prefix?:string, SyncFormat:"JsonSerDe", Region:string, AWSKMSKeyARN?:string, DestinationDataSharing?:array{DestinationDataSharingType?:string}}, SyncType?:string, SyncSource?:array{SourceType:string, AwsOrganizationsSource?:array{OrganizationSourceType:string, OrganizationalUnits?:array<array{OrganizationalUnitId?:string}>}, SourceRegions:array<string>, IncludeFutureRegions?:bool, EnableAllOpsDataSources?:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createResourceDataSyncAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ActivationId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteActivation(array $args): \AWS\Result { }

    /**
     * @param array{ActivationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteActivationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name?:string, InstanceId?:string, AssociationId?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAssociation(array $args = []): \AWS\Result { }

    /**
     * @param array{Name?:string, InstanceId?:string, AssociationId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAssociationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, DocumentVersion?:string, VersionName?:string, Force?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteDocument(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, DocumentVersion?:string, VersionName?:string, Force?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteDocumentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TypeName:string, SchemaDeleteOption?:"DisableSchema"|"DeleteSchema", DryRun?:bool, ClientToken?:string} $args
     * @return \AWS\Result<array{DeletionId?:string, TypeName?:string, DeletionSummary?:array{TotalCount?:int, RemainingCount?:int, SummaryItems?:array<array{Version?:string, Count?:int, RemainingCount?:int}>}}>
     */
    public function deleteInventory(array $args): \AWS\Result { }

    /**
     * @param array{TypeName:string, SchemaDeleteOption?:"DisableSchema"|"DeleteSchema", DryRun?:bool, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DeletionId?:string, TypeName?:string, DeletionSummary?:array{TotalCount?:int, RemainingCount?:int, SummaryItems?:array<array{Version?:string, Count?:int, RemainingCount?:int}>}}>
     */
    public function deleteInventoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WindowId:string} $args
     * @return \AWS\Result<array{WindowId?:string}>
     */
    public function deleteMaintenanceWindow(array $args): \AWS\Result { }

    /**
     * @param array{WindowId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WindowId?:string}>
     */
    public function deleteMaintenanceWindowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OpsItemId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteOpsItem(array $args): \AWS\Result { }

    /**
     * @param array{OpsItemId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteOpsItemAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OpsMetadataArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteOpsMetadata(array $args): \AWS\Result { }

    /**
     * @param array{OpsMetadataArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteOpsMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteParameter(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteParameterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Names:array<string>} $args
     * @return \AWS\Result<array{DeletedParameters?:array<string>, InvalidParameters?:array<string>}>
     */
    public function deleteParameters(array $args): \AWS\Result { }

    /**
     * @param array{Names:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DeletedParameters?:array<string>, InvalidParameters?:array<string>}>
     */
    public function deleteParametersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BaselineId:string} $args
     * @return \AWS\Result<array{BaselineId?:string}>
     */
    public function deletePatchBaseline(array $args): \AWS\Result { }

    /**
     * @param array{BaselineId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BaselineId?:string}>
     */
    public function deletePatchBaselineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SyncName:string, SyncType?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteResourceDataSync(array $args): \AWS\Result { }

    /**
     * @param array{SyncName:string, SyncType?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteResourceDataSyncAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, PolicyId:string, PolicyHash:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, PolicyId:string, PolicyHash:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deregisterManagedInstance(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deregisterManagedInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BaselineId:string, PatchGroup:string} $args
     * @return \AWS\Result<array{BaselineId?:string, PatchGroup?:string}>
     */
    public function deregisterPatchBaselineForPatchGroup(array $args): \AWS\Result { }

    /**
     * @param array{BaselineId:string, PatchGroup:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BaselineId?:string, PatchGroup?:string}>
     */
    public function deregisterPatchBaselineForPatchGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WindowId:string, WindowTargetId:string, Safe?:bool} $args
     * @return \AWS\Result<array{WindowId?:string, WindowTargetId?:string}>
     */
    public function deregisterTargetFromMaintenanceWindow(array $args): \AWS\Result { }

    /**
     * @param array{WindowId:string, WindowTargetId:string, Safe?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{WindowId?:string, WindowTargetId?:string}>
     */
    public function deregisterTargetFromMaintenanceWindowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WindowId:string, WindowTaskId:string} $args
     * @return \AWS\Result<array{WindowId?:string, WindowTaskId?:string}>
     */
    public function deregisterTaskFromMaintenanceWindow(array $args): \AWS\Result { }

    /**
     * @param array{WindowId:string, WindowTaskId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WindowId?:string, WindowTaskId?:string}>
     */
    public function deregisterTaskFromMaintenanceWindowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array<array{FilterKey?:"ActivationIds"|"DefaultInstanceName"|"IamRole", FilterValues?:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ActivationList?:array<array{ActivationId?:string, Description?:string, DefaultInstanceName?:string, IamRole?:string, RegistrationLimit?:int, RegistrationsCount?:int, ExpirationDate?:int|string|\DateTimeInterface, Expired?:bool, CreatedDate?:int|string|\DateTimeInterface, Tags?:array<array{Key:string, Value:string}>}>, NextToken?:string}>
     */
    public function describeActivations(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array<array{FilterKey?:"ActivationIds"|"DefaultInstanceName"|"IamRole", FilterValues?:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ActivationList?:array<array{ActivationId?:string, Description?:string, DefaultInstanceName?:string, IamRole?:string, RegistrationLimit?:int, RegistrationsCount?:int, ExpirationDate?:int|string|\DateTimeInterface, Expired?:bool, CreatedDate?:int|string|\DateTimeInterface, Tags?:array<array{Key:string, Value:string}>}>, NextToken?:string}>
     */
    public function describeActivationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name?:string, InstanceId?:string, AssociationId?:string, AssociationVersion?:string} $args
     * @return \AWS\Result<array{AssociationDescription?:array{Name?:string, InstanceId?:string, AssociationVersion?:string, Date?:int|string|\DateTimeInterface, LastUpdateAssociationDate?:int|string|\DateTimeInterface, Status?:array{Date:int|string|\DateTimeInterface, Name:"Pending"|"Success"|"Failed", Message:string, AdditionalInfo?:string}, Overview?:array{Status?:string, DetailedStatus?:string, AssociationStatusAggregatedCount?:array<string, int>}, DocumentVersion?:string, AutomationTargetParameterName?:string, Parameters?:array<string, array<string>>, AssociationId?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, ScheduleExpression?:string, OutputLocation?:array{S3Location?:array{OutputS3Region?:string, OutputS3BucketName?:string, OutputS3KeyPrefix?:string}}, LastExecutionDate?:int|string|\DateTimeInterface, LastSuccessfulExecutionDate?:int|string|\DateTimeInterface, AssociationName?:string, MaxErrors?:string, MaxConcurrency?:string, ComplianceSeverity?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"UNSPECIFIED", SyncCompliance?:"AUTO"|"MANUAL", ApplyOnlyAtCronInterval?:bool, CalendarNames?:array<string>, TargetLocations?:array<array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}>, ScheduleOffset?:int, Duration?:int, TargetMaps?:array<array<string, array<string>>>, AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, TriggeredAlarms?:array<array{Name:string, State:"UNKNOWN"|"ALARM"}>}}>
     */
    public function describeAssociation(array $args = []): \AWS\Result { }

    /**
     * @param array{Name?:string, InstanceId?:string, AssociationId?:string, AssociationVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AssociationDescription?:array{Name?:string, InstanceId?:string, AssociationVersion?:string, Date?:int|string|\DateTimeInterface, LastUpdateAssociationDate?:int|string|\DateTimeInterface, Status?:array{Date:int|string|\DateTimeInterface, Name:"Pending"|"Success"|"Failed", Message:string, AdditionalInfo?:string}, Overview?:array{Status?:string, DetailedStatus?:string, AssociationStatusAggregatedCount?:array<string, int>}, DocumentVersion?:string, AutomationTargetParameterName?:string, Parameters?:array<string, array<string>>, AssociationId?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, ScheduleExpression?:string, OutputLocation?:array{S3Location?:array{OutputS3Region?:string, OutputS3BucketName?:string, OutputS3KeyPrefix?:string}}, LastExecutionDate?:int|string|\DateTimeInterface, LastSuccessfulExecutionDate?:int|string|\DateTimeInterface, AssociationName?:string, MaxErrors?:string, MaxConcurrency?:string, ComplianceSeverity?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"UNSPECIFIED", SyncCompliance?:"AUTO"|"MANUAL", ApplyOnlyAtCronInterval?:bool, CalendarNames?:array<string>, TargetLocations?:array<array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}>, ScheduleOffset?:int, Duration?:int, TargetMaps?:array<array<string, array<string>>>, AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, TriggeredAlarms?:array<array{Name:string, State:"UNKNOWN"|"ALARM"}>}}>
     */
    public function describeAssociationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AssociationId:string, ExecutionId:string, Filters?:array<array{Key:"Status"|"ResourceId"|"ResourceType", Value:string}>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{AssociationExecutionTargets?:array<array{AssociationId?:string, AssociationVersion?:string, ExecutionId?:string, ResourceId?:string, ResourceType?:string, Status?:string, DetailedStatus?:string, LastExecutionDate?:int|string|\DateTimeInterface, OutputSource?:array{OutputSourceId?:string, OutputSourceType?:string}}>, NextToken?:string}>
     */
    public function describeAssociationExecutionTargets(array $args): \AWS\Result { }

    /**
     * @param array{AssociationId:string, ExecutionId:string, Filters?:array<array{Key:"Status"|"ResourceId"|"ResourceType", Value:string}>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AssociationExecutionTargets?:array<array{AssociationId?:string, AssociationVersion?:string, ExecutionId?:string, ResourceId?:string, ResourceType?:string, Status?:string, DetailedStatus?:string, LastExecutionDate?:int|string|\DateTimeInterface, OutputSource?:array{OutputSourceId?:string, OutputSourceType?:string}}>, NextToken?:string}>
     */
    public function describeAssociationExecutionTargetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AssociationId:string, Filters?:array<array{Key:"ExecutionId"|"Status"|"CreatedTime", Value:string, Type:"EQUAL"|"LESS_THAN"|"GREATER_THAN"}>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{AssociationExecutions?:array<array{AssociationId?:string, AssociationVersion?:string, ExecutionId?:string, Status?:string, DetailedStatus?:string, CreatedTime?:int|string|\DateTimeInterface, LastExecutionDate?:int|string|\DateTimeInterface, ResourceCountByStatus?:string, AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, TriggeredAlarms?:array<array{Name:string, State:"UNKNOWN"|"ALARM"}>}>, NextToken?:string}>
     */
    public function describeAssociationExecutions(array $args): \AWS\Result { }

    /**
     * @param array{AssociationId:string, Filters?:array<array{Key:"ExecutionId"|"Status"|"CreatedTime", Value:string, Type:"EQUAL"|"LESS_THAN"|"GREATER_THAN"}>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AssociationExecutions?:array<array{AssociationId?:string, AssociationVersion?:string, ExecutionId?:string, Status?:string, DetailedStatus?:string, CreatedTime?:int|string|\DateTimeInterface, LastExecutionDate?:int|string|\DateTimeInterface, ResourceCountByStatus?:string, AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, TriggeredAlarms?:array<array{Name:string, State:"UNKNOWN"|"ALARM"}>}>, NextToken?:string}>
     */
    public function describeAssociationExecutionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array<array{Key:"DocumentNamePrefix"|"ExecutionStatus"|"ExecutionId"|"ParentExecutionId"|"CurrentAction"|"StartTimeBefore"|"StartTimeAfter"|"AutomationType"|"TagKey"|"TargetResourceGroup"|"AutomationSubtype"|"OpsItemId", Values:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{AutomationExecutionMetadataList?:array<array{AutomationExecutionId?:string, DocumentName?:string, DocumentVersion?:string, AutomationExecutionStatus?:"Pending"|"InProgress"|"Waiting"|"Success"|"TimedOut"|"Cancelling"|"Cancelled"|"Failed"|"PendingApproval"|"Approved"|"Rejected"|"Scheduled"|"RunbookInProgress"|"PendingChangeCalendarOverride"|"ChangeCalendarOverrideApproved"|"ChangeCalendarOverrideRejected"|"CompletedWithSuccess"|"CompletedWithFailure"|"Exited", ExecutionStartTime?:int|string|\DateTimeInterface, ExecutionEndTime?:int|string|\DateTimeInterface, ExecutedBy?:string, LogFile?:string, Outputs?:array<string, array<string>>, Mode?:"Auto"|"Interactive", ParentAutomationExecutionId?:string, CurrentStepName?:string, CurrentAction?:string, FailureMessage?:string, TargetParameterName?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetMaps?:array<array<string, array<string>>>, ResolvedTargets?:array{ParameterValues?:array<string>, Truncated?:bool}, MaxConcurrency?:string, MaxErrors?:string, Target?:string, AutomationType?:"CrossAccount"|"Local", AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, TriggeredAlarms?:array<array{Name:string, State:"UNKNOWN"|"ALARM"}>, TargetLocationsURL?:string, AutomationSubtype?:"ChangeRequest", ScheduledTime?:int|string|\DateTimeInterface, Runbooks?:array<array{DocumentName:string, DocumentVersion?:string, Parameters?:array<string, array<string>>, TargetParameterName?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetMaps?:array<array<string, array<string>>>, MaxConcurrency?:string, MaxErrors?:string, TargetLocations?:array<array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}>}>, OpsItemId?:string, AssociationId?:string, ChangeRequestName?:string}>, NextToken?:string}>
     */
    public function describeAutomationExecutions(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array<array{Key:"DocumentNamePrefix"|"ExecutionStatus"|"ExecutionId"|"ParentExecutionId"|"CurrentAction"|"StartTimeBefore"|"StartTimeAfter"|"AutomationType"|"TagKey"|"TargetResourceGroup"|"AutomationSubtype"|"OpsItemId", Values:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AutomationExecutionMetadataList?:array<array{AutomationExecutionId?:string, DocumentName?:string, DocumentVersion?:string, AutomationExecutionStatus?:"Pending"|"InProgress"|"Waiting"|"Success"|"TimedOut"|"Cancelling"|"Cancelled"|"Failed"|"PendingApproval"|"Approved"|"Rejected"|"Scheduled"|"RunbookInProgress"|"PendingChangeCalendarOverride"|"ChangeCalendarOverrideApproved"|"ChangeCalendarOverrideRejected"|"CompletedWithSuccess"|"CompletedWithFailure"|"Exited", ExecutionStartTime?:int|string|\DateTimeInterface, ExecutionEndTime?:int|string|\DateTimeInterface, ExecutedBy?:string, LogFile?:string, Outputs?:array<string, array<string>>, Mode?:"Auto"|"Interactive", ParentAutomationExecutionId?:string, CurrentStepName?:string, CurrentAction?:string, FailureMessage?:string, TargetParameterName?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetMaps?:array<array<string, array<string>>>, ResolvedTargets?:array{ParameterValues?:array<string>, Truncated?:bool}, MaxConcurrency?:string, MaxErrors?:string, Target?:string, AutomationType?:"CrossAccount"|"Local", AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, TriggeredAlarms?:array<array{Name:string, State:"UNKNOWN"|"ALARM"}>, TargetLocationsURL?:string, AutomationSubtype?:"ChangeRequest", ScheduledTime?:int|string|\DateTimeInterface, Runbooks?:array<array{DocumentName:string, DocumentVersion?:string, Parameters?:array<string, array<string>>, TargetParameterName?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetMaps?:array<array<string, array<string>>>, MaxConcurrency?:string, MaxErrors?:string, TargetLocations?:array<array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}>}>, OpsItemId?:string, AssociationId?:string, ChangeRequestName?:string}>, NextToken?:string}>
     */
    public function describeAutomationExecutionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutomationExecutionId:string, Filters?:array<array{Key:"StartTimeBefore"|"StartTimeAfter"|"StepExecutionStatus"|"StepExecutionId"|"StepName"|"Action"|"ParentStepExecutionId"|"ParentStepIteration"|"ParentStepIteratorValue", Values:array<string>}>, NextToken?:string, MaxResults?:int, ReverseOrder?:bool} $args
     * @return \AWS\Result<array{StepExecutions?:array<array{StepName?:string, Action?:string, TimeoutSeconds?:int, OnFailure?:string, MaxAttempts?:int, ExecutionStartTime?:int|string|\DateTimeInterface, ExecutionEndTime?:int|string|\DateTimeInterface, StepStatus?:"Pending"|"InProgress"|"Waiting"|"Success"|"TimedOut"|"Cancelling"|"Cancelled"|"Failed"|"PendingApproval"|"Approved"|"Rejected"|"Scheduled"|"RunbookInProgress"|"PendingChangeCalendarOverride"|"ChangeCalendarOverrideApproved"|"ChangeCalendarOverrideRejected"|"CompletedWithSuccess"|"CompletedWithFailure"|"Exited", ResponseCode?:string, Inputs?:array<string, string>, Outputs?:array<string, array<string>>, Response?:string, FailureMessage?:string, FailureDetails?:array{FailureStage?:string, FailureType?:string, Details?:array<string, array<string>>}, StepExecutionId?:string, OverriddenParameters?:array<string, array<string>>, IsEnd?:bool, NextStep?:string, IsCritical?:bool, ValidNextSteps?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetLocation?:array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}, TriggeredAlarms?:array<array{Name:string, State:"UNKNOWN"|"ALARM"}>, ParentStepDetails?:array{StepExecutionId?:string, StepName?:string, Action?:string, Iteration?:int, IteratorValue?:string}}>, NextToken?:string}>
     */
    public function describeAutomationStepExecutions(array $args): \AWS\Result { }

    /**
     * @param array{AutomationExecutionId:string, Filters?:array<array{Key:"StartTimeBefore"|"StartTimeAfter"|"StepExecutionStatus"|"StepExecutionId"|"StepName"|"Action"|"ParentStepExecutionId"|"ParentStepIteration"|"ParentStepIteratorValue", Values:array<string>}>, NextToken?:string, MaxResults?:int, ReverseOrder?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{StepExecutions?:array<array{StepName?:string, Action?:string, TimeoutSeconds?:int, OnFailure?:string, MaxAttempts?:int, ExecutionStartTime?:int|string|\DateTimeInterface, ExecutionEndTime?:int|string|\DateTimeInterface, StepStatus?:"Pending"|"InProgress"|"Waiting"|"Success"|"TimedOut"|"Cancelling"|"Cancelled"|"Failed"|"PendingApproval"|"Approved"|"Rejected"|"Scheduled"|"RunbookInProgress"|"PendingChangeCalendarOverride"|"ChangeCalendarOverrideApproved"|"ChangeCalendarOverrideRejected"|"CompletedWithSuccess"|"CompletedWithFailure"|"Exited", ResponseCode?:string, Inputs?:array<string, string>, Outputs?:array<string, array<string>>, Response?:string, FailureMessage?:string, FailureDetails?:array{FailureStage?:string, FailureType?:string, Details?:array<string, array<string>>}, StepExecutionId?:string, OverriddenParameters?:array<string, array<string>>, IsEnd?:bool, NextStep?:string, IsCritical?:bool, ValidNextSteps?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetLocation?:array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}, TriggeredAlarms?:array<array{Name:string, State:"UNKNOWN"|"ALARM"}>, ParentStepDetails?:array{StepExecutionId?:string, StepName?:string, Action?:string, Iteration?:int, IteratorValue?:string}}>, NextToken?:string}>
     */
    public function describeAutomationStepExecutionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array<array{Key?:string, Values?:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Patches?:array<array{Id?:string, ReleaseDate?:int|string|\DateTimeInterface, Title?:string, Description?:string, ContentUrl?:string, Vendor?:string, ProductFamily?:string, Product?:string, Classification?:string, MsrcSeverity?:string, KbNumber?:string, MsrcNumber?:string, Language?:string, AdvisoryIds?:array<string>, BugzillaIds?:array<string>, CVEIds?:array<string>, Name?:string, Epoch?:int, Version?:string, Release?:string, Arch?:string, Severity?:string, Repository?:string}>, NextToken?:string}>
     */
    public function describeAvailablePatches(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array<array{Key?:string, Values?:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Patches?:array<array{Id?:string, ReleaseDate?:int|string|\DateTimeInterface, Title?:string, Description?:string, ContentUrl?:string, Vendor?:string, ProductFamily?:string, Product?:string, Classification?:string, MsrcSeverity?:string, KbNumber?:string, MsrcNumber?:string, Language?:string, AdvisoryIds?:array<string>, BugzillaIds?:array<string>, CVEIds?:array<string>, Name?:string, Epoch?:int, Version?:string, Release?:string, Arch?:string, Severity?:string, Repository?:string}>, NextToken?:string}>
     */
    public function describeAvailablePatchesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, DocumentVersion?:string, VersionName?:string} $args
     * @return \AWS\Result<array{Document?:array{Sha1?:string, Hash?:string, HashType?:"Sha256"|"Sha1", Name?:string, DisplayName?:string, VersionName?:string, Owner?:string, CreatedDate?:int|string|\DateTimeInterface, Status?:"Creating"|"Active"|"Updating"|"Deleting"|"Failed", StatusInformation?:string, DocumentVersion?:string, Description?:string, Parameters?:array<array{Name?:string, Type?:"String"|"StringList", Description?:string, DefaultValue?:string}>, PlatformTypes?:array<"Windows"|"Linux"|"MacOS">, DocumentType?:"Command"|"Policy"|"Automation"|"Session"|"Package"|"ApplicationConfiguration"|"ApplicationConfigurationSchema"|"DeploymentStrategy"|"ChangeCalendar"|"Automation.ChangeTemplate"|"ProblemAnalysis"|"ProblemAnalysisTemplate"|"CloudFormation"|"ConformancePackTemplate"|"QuickSetup", SchemaVersion?:string, LatestVersion?:string, DefaultVersion?:string, DocumentFormat?:"YAML"|"JSON"|"TEXT", TargetType?:string, Tags?:array<array{Key:string, Value:string}>, AttachmentsInformation?:array<array{Name?:string}>, Requires?:array<array{Name:string, Version?:string, RequireType?:string, VersionName?:string}>, Author?:string, ReviewInformation?:array<array{ReviewedTime?:int|string|\DateTimeInterface, Status?:"APPROVED"|"NOT_REVIEWED"|"PENDING"|"REJECTED", Reviewer?:string}>, ApprovedVersion?:string, PendingReviewVersion?:string, ReviewStatus?:"APPROVED"|"NOT_REVIEWED"|"PENDING"|"REJECTED", Category?:array<string>, CategoryEnum?:array<string>}}>
     */
    public function describeDocument(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, DocumentVersion?:string, VersionName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Document?:array{Sha1?:string, Hash?:string, HashType?:"Sha256"|"Sha1", Name?:string, DisplayName?:string, VersionName?:string, Owner?:string, CreatedDate?:int|string|\DateTimeInterface, Status?:"Creating"|"Active"|"Updating"|"Deleting"|"Failed", StatusInformation?:string, DocumentVersion?:string, Description?:string, Parameters?:array<array{Name?:string, Type?:"String"|"StringList", Description?:string, DefaultValue?:string}>, PlatformTypes?:array<"Windows"|"Linux"|"MacOS">, DocumentType?:"Command"|"Policy"|"Automation"|"Session"|"Package"|"ApplicationConfiguration"|"ApplicationConfigurationSchema"|"DeploymentStrategy"|"ChangeCalendar"|"Automation.ChangeTemplate"|"ProblemAnalysis"|"ProblemAnalysisTemplate"|"CloudFormation"|"ConformancePackTemplate"|"QuickSetup", SchemaVersion?:string, LatestVersion?:string, DefaultVersion?:string, DocumentFormat?:"YAML"|"JSON"|"TEXT", TargetType?:string, Tags?:array<array{Key:string, Value:string}>, AttachmentsInformation?:array<array{Name?:string}>, Requires?:array<array{Name:string, Version?:string, RequireType?:string, VersionName?:string}>, Author?:string, ReviewInformation?:array<array{ReviewedTime?:int|string|\DateTimeInterface, Status?:"APPROVED"|"NOT_REVIEWED"|"PENDING"|"REJECTED", Reviewer?:string}>, ApprovedVersion?:string, PendingReviewVersion?:string, ReviewStatus?:"APPROVED"|"NOT_REVIEWED"|"PENDING"|"REJECTED", Category?:array<string>, CategoryEnum?:array<string>}}>
     */
    public function describeDocumentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, PermissionType:"Share", MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{AccountIds?:array<string>, AccountSharingInfoList?:array<array{AccountId?:string, SharedDocumentVersion?:string}>, NextToken?:string}>
     */
    public function describeDocumentPermission(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, PermissionType:"Share", MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountIds?:array<string>, AccountSharingInfoList?:array<array{AccountId?:string, SharedDocumentVersion?:string}>, NextToken?:string}>
     */
    public function describeDocumentPermissionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Associations?:array<array{AssociationId?:string, InstanceId?:string, Content?:string, AssociationVersion?:string}>, NextToken?:string}>
     */
    public function describeEffectiveInstanceAssociations(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Associations?:array<array{AssociationId?:string, InstanceId?:string, Content?:string, AssociationVersion?:string}>, NextToken?:string}>
     */
    public function describeEffectiveInstanceAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BaselineId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{EffectivePatches?:array<array{Patch?:array{Id?:string, ReleaseDate?:int|string|\DateTimeInterface, Title?:string, Description?:string, ContentUrl?:string, Vendor?:string, ProductFamily?:string, Product?:string, Classification?:string, MsrcSeverity?:string, KbNumber?:string, MsrcNumber?:string, Language?:string, AdvisoryIds?:array<string>, BugzillaIds?:array<string>, CVEIds?:array<string>, Name?:string, Epoch?:int, Version?:string, Release?:string, Arch?:string, Severity?:string, Repository?:string}, PatchStatus?:array{DeploymentStatus?:"APPROVED"|"PENDING_APPROVAL"|"EXPLICIT_APPROVED"|"EXPLICIT_REJECTED", ComplianceLevel?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"INFORMATIONAL"|"UNSPECIFIED", ApprovalDate?:int|string|\DateTimeInterface}}>, NextToken?:string}>
     */
    public function describeEffectivePatchesForPatchBaseline(array $args): \AWS\Result { }

    /**
     * @param array{BaselineId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EffectivePatches?:array<array{Patch?:array{Id?:string, ReleaseDate?:int|string|\DateTimeInterface, Title?:string, Description?:string, ContentUrl?:string, Vendor?:string, ProductFamily?:string, Product?:string, Classification?:string, MsrcSeverity?:string, KbNumber?:string, MsrcNumber?:string, Language?:string, AdvisoryIds?:array<string>, BugzillaIds?:array<string>, CVEIds?:array<string>, Name?:string, Epoch?:int, Version?:string, Release?:string, Arch?:string, Severity?:string, Repository?:string}, PatchStatus?:array{DeploymentStatus?:"APPROVED"|"PENDING_APPROVAL"|"EXPLICIT_APPROVED"|"EXPLICIT_REJECTED", ComplianceLevel?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"INFORMATIONAL"|"UNSPECIFIED", ApprovalDate?:int|string|\DateTimeInterface}}>, NextToken?:string}>
     */
    public function describeEffectivePatchesForPatchBaselineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{InstanceAssociationStatusInfos?:array<array{AssociationId?:string, Name?:string, DocumentVersion?:string, AssociationVersion?:string, InstanceId?:string, ExecutionDate?:int|string|\DateTimeInterface, Status?:string, DetailedStatus?:string, ExecutionSummary?:string, ErrorCode?:string, OutputUrl?:array{S3OutputUrl?:array{OutputUrl?:mixed}}, AssociationName?:string}>, NextToken?:string}>
     */
    public function describeInstanceAssociationsStatus(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{InstanceAssociationStatusInfos?:array<array{AssociationId?:string, Name?:string, DocumentVersion?:string, AssociationVersion?:string, InstanceId?:string, ExecutionDate?:int|string|\DateTimeInterface, Status?:string, DetailedStatus?:string, ExecutionSummary?:string, ErrorCode?:string, OutputUrl?:array{S3OutputUrl?:array{OutputUrl?:mixed}}, AssociationName?:string}>, NextToken?:string}>
     */
    public function describeInstanceAssociationsStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceInformationFilterList?:array<array{key:"InstanceIds"|"AgentVersion"|"PingStatus"|"PlatformTypes"|"ActivationIds"|"IamRole"|"ResourceType"|"AssociationStatus", valueSet:array<string>}>, Filters?:array<array{Key:string, Values:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{InstanceInformationList?:array<array{InstanceId?:string, PingStatus?:"Online"|"ConnectionLost"|"Inactive", LastPingDateTime?:int|string|\DateTimeInterface, AgentVersion?:string, IsLatestVersion?:bool, PlatformType?:"Windows"|"Linux"|"MacOS", PlatformName?:string, PlatformVersion?:string, ActivationId?:string, IamRole?:string, RegistrationDate?:int|string|\DateTimeInterface, ResourceType?:"ManagedInstance"|"EC2Instance", Name?:string, IPAddress?:string, ComputerName?:string, AssociationStatus?:string, LastAssociationExecutionDate?:int|string|\DateTimeInterface, LastSuccessfulAssociationExecutionDate?:int|string|\DateTimeInterface, AssociationOverview?:array{DetailedStatus?:string, InstanceAssociationStatusAggregatedCount?:array<string, int>}, SourceId?:string, SourceType?:"AWS::EC2::Instance"|"AWS::IoT::Thing"|"AWS::SSM::ManagedInstance"}>, NextToken?:string}>
     */
    public function describeInstanceInformation(array $args = []): \AWS\Result { }

    /**
     * @param array{InstanceInformationFilterList?:array<array{key:"InstanceIds"|"AgentVersion"|"PingStatus"|"PlatformTypes"|"ActivationIds"|"IamRole"|"ResourceType"|"AssociationStatus", valueSet:array<string>}>, Filters?:array<array{Key:string, Values:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{InstanceInformationList?:array<array{InstanceId?:string, PingStatus?:"Online"|"ConnectionLost"|"Inactive", LastPingDateTime?:int|string|\DateTimeInterface, AgentVersion?:string, IsLatestVersion?:bool, PlatformType?:"Windows"|"Linux"|"MacOS", PlatformName?:string, PlatformVersion?:string, ActivationId?:string, IamRole?:string, RegistrationDate?:int|string|\DateTimeInterface, ResourceType?:"ManagedInstance"|"EC2Instance", Name?:string, IPAddress?:string, ComputerName?:string, AssociationStatus?:string, LastAssociationExecutionDate?:int|string|\DateTimeInterface, LastSuccessfulAssociationExecutionDate?:int|string|\DateTimeInterface, AssociationOverview?:array{DetailedStatus?:string, InstanceAssociationStatusAggregatedCount?:array<string, int>}, SourceId?:string, SourceType?:"AWS::EC2::Instance"|"AWS::IoT::Thing"|"AWS::SSM::ManagedInstance"}>, NextToken?:string}>
     */
    public function describeInstanceInformationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceIds:array<string>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{InstancePatchStates?:array<array{InstanceId:string, PatchGroup:string, BaselineId:string, SnapshotId?:string, InstallOverrideList?:string, OwnerInformation?:string, InstalledCount?:int, InstalledOtherCount?:int, InstalledPendingRebootCount?:int, InstalledRejectedCount?:int, MissingCount?:int, FailedCount?:int, UnreportedNotApplicableCount?:int, NotApplicableCount?:int, OperationStartTime:int|string|\DateTimeInterface, OperationEndTime:int|string|\DateTimeInterface, Operation:"Scan"|"Install", LastNoRebootInstallOperationTime?:int|string|\DateTimeInterface, RebootOption?:"RebootIfNeeded"|"NoReboot", CriticalNonCompliantCount?:int, SecurityNonCompliantCount?:int, OtherNonCompliantCount?:int}>, NextToken?:string}>
     */
    public function describeInstancePatchStates(array $args): \AWS\Result { }

    /**
     * @param array{InstanceIds:array<string>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{InstancePatchStates?:array<array{InstanceId:string, PatchGroup:string, BaselineId:string, SnapshotId?:string, InstallOverrideList?:string, OwnerInformation?:string, InstalledCount?:int, InstalledOtherCount?:int, InstalledPendingRebootCount?:int, InstalledRejectedCount?:int, MissingCount?:int, FailedCount?:int, UnreportedNotApplicableCount?:int, NotApplicableCount?:int, OperationStartTime:int|string|\DateTimeInterface, OperationEndTime:int|string|\DateTimeInterface, Operation:"Scan"|"Install", LastNoRebootInstallOperationTime?:int|string|\DateTimeInterface, RebootOption?:"RebootIfNeeded"|"NoReboot", CriticalNonCompliantCount?:int, SecurityNonCompliantCount?:int, OtherNonCompliantCount?:int}>, NextToken?:string}>
     */
    public function describeInstancePatchStatesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PatchGroup:string, Filters?:array<array{Key:string, Values:array<string>, Type:"Equal"|"NotEqual"|"LessThan"|"GreaterThan"}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{InstancePatchStates?:array<array{InstanceId:string, PatchGroup:string, BaselineId:string, SnapshotId?:string, InstallOverrideList?:string, OwnerInformation?:string, InstalledCount?:int, InstalledOtherCount?:int, InstalledPendingRebootCount?:int, InstalledRejectedCount?:int, MissingCount?:int, FailedCount?:int, UnreportedNotApplicableCount?:int, NotApplicableCount?:int, OperationStartTime:int|string|\DateTimeInterface, OperationEndTime:int|string|\DateTimeInterface, Operation:"Scan"|"Install", LastNoRebootInstallOperationTime?:int|string|\DateTimeInterface, RebootOption?:"RebootIfNeeded"|"NoReboot", CriticalNonCompliantCount?:int, SecurityNonCompliantCount?:int, OtherNonCompliantCount?:int}>, NextToken?:string}>
     */
    public function describeInstancePatchStatesForPatchGroup(array $args): \AWS\Result { }

    /**
     * @param array{PatchGroup:string, Filters?:array<array{Key:string, Values:array<string>, Type:"Equal"|"NotEqual"|"LessThan"|"GreaterThan"}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{InstancePatchStates?:array<array{InstanceId:string, PatchGroup:string, BaselineId:string, SnapshotId?:string, InstallOverrideList?:string, OwnerInformation?:string, InstalledCount?:int, InstalledOtherCount?:int, InstalledPendingRebootCount?:int, InstalledRejectedCount?:int, MissingCount?:int, FailedCount?:int, UnreportedNotApplicableCount?:int, NotApplicableCount?:int, OperationStartTime:int|string|\DateTimeInterface, OperationEndTime:int|string|\DateTimeInterface, Operation:"Scan"|"Install", LastNoRebootInstallOperationTime?:int|string|\DateTimeInterface, RebootOption?:"RebootIfNeeded"|"NoReboot", CriticalNonCompliantCount?:int, SecurityNonCompliantCount?:int, OtherNonCompliantCount?:int}>, NextToken?:string}>
     */
    public function describeInstancePatchStatesForPatchGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, Filters?:array<array{Key?:string, Values?:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Patches?:array<array{Title:string, KBId:string, Classification:string, Severity:string, State:"INSTALLED"|"INSTALLED_OTHER"|"INSTALLED_PENDING_REBOOT"|"INSTALLED_REJECTED"|"MISSING"|"NOT_APPLICABLE"|"FAILED", InstalledTime:int|string|\DateTimeInterface, CVEIds?:string}>, NextToken?:string}>
     */
    public function describeInstancePatches(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, Filters?:array<array{Key?:string, Values?:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Patches?:array<array{Title:string, KBId:string, Classification:string, Severity:string, State:"INSTALLED"|"INSTALLED_OTHER"|"INSTALLED_PENDING_REBOOT"|"INSTALLED_REJECTED"|"MISSING"|"NOT_APPLICABLE"|"FAILED", InstalledTime:int|string|\DateTimeInterface, CVEIds?:string}>, NextToken?:string}>
     */
    public function describeInstancePatchesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstancePropertyFilterList?:array<array{key:"InstanceIds"|"AgentVersion"|"PingStatus"|"PlatformTypes"|"DocumentName"|"ActivationIds"|"IamRole"|"ResourceType"|"AssociationStatus", valueSet:array<string>}>, FiltersWithOperator?:array<array{Key:string, Values:array<string>, Operator?:"Equal"|"NotEqual"|"BeginWith"|"LessThan"|"GreaterThan"}>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{InstanceProperties?:array<array{Name?:string, InstanceId?:string, InstanceType?:string, InstanceRole?:string, KeyName?:string, InstanceState?:string, Architecture?:string, IPAddress?:string, LaunchTime?:int|string|\DateTimeInterface, PingStatus?:"Online"|"ConnectionLost"|"Inactive", LastPingDateTime?:int|string|\DateTimeInterface, AgentVersion?:string, PlatformType?:"Windows"|"Linux"|"MacOS", PlatformName?:string, PlatformVersion?:string, ActivationId?:string, IamRole?:string, RegistrationDate?:int|string|\DateTimeInterface, ResourceType?:string, ComputerName?:string, AssociationStatus?:string, LastAssociationExecutionDate?:int|string|\DateTimeInterface, LastSuccessfulAssociationExecutionDate?:int|string|\DateTimeInterface, AssociationOverview?:array{DetailedStatus?:string, InstanceAssociationStatusAggregatedCount?:array<string, int>}, SourceId?:string, SourceType?:"AWS::EC2::Instance"|"AWS::IoT::Thing"|"AWS::SSM::ManagedInstance"}>, NextToken?:string}>
     */
    public function describeInstanceProperties(array $args = []): \AWS\Result { }

    /**
     * @param array{InstancePropertyFilterList?:array<array{key:"InstanceIds"|"AgentVersion"|"PingStatus"|"PlatformTypes"|"DocumentName"|"ActivationIds"|"IamRole"|"ResourceType"|"AssociationStatus", valueSet:array<string>}>, FiltersWithOperator?:array<array{Key:string, Values:array<string>, Operator?:"Equal"|"NotEqual"|"BeginWith"|"LessThan"|"GreaterThan"}>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{InstanceProperties?:array<array{Name?:string, InstanceId?:string, InstanceType?:string, InstanceRole?:string, KeyName?:string, InstanceState?:string, Architecture?:string, IPAddress?:string, LaunchTime?:int|string|\DateTimeInterface, PingStatus?:"Online"|"ConnectionLost"|"Inactive", LastPingDateTime?:int|string|\DateTimeInterface, AgentVersion?:string, PlatformType?:"Windows"|"Linux"|"MacOS", PlatformName?:string, PlatformVersion?:string, ActivationId?:string, IamRole?:string, RegistrationDate?:int|string|\DateTimeInterface, ResourceType?:string, ComputerName?:string, AssociationStatus?:string, LastAssociationExecutionDate?:int|string|\DateTimeInterface, LastSuccessfulAssociationExecutionDate?:int|string|\DateTimeInterface, AssociationOverview?:array{DetailedStatus?:string, InstanceAssociationStatusAggregatedCount?:array<string, int>}, SourceId?:string, SourceType?:"AWS::EC2::Instance"|"AWS::IoT::Thing"|"AWS::SSM::ManagedInstance"}>, NextToken?:string}>
     */
    public function describeInstancePropertiesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DeletionId?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{InventoryDeletions?:array<array{DeletionId?:string, TypeName?:string, DeletionStartTime?:int|string|\DateTimeInterface, LastStatus?:"InProgress"|"Complete", LastStatusMessage?:string, DeletionSummary?:array{TotalCount?:int, RemainingCount?:int, SummaryItems?:array<array{Version?:string, Count?:int, RemainingCount?:int}>}, LastStatusUpdateTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeInventoryDeletions(array $args = []): \AWS\Result { }

    /**
     * @param array{DeletionId?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{InventoryDeletions?:array<array{DeletionId?:string, TypeName?:string, DeletionStartTime?:int|string|\DateTimeInterface, LastStatus?:"InProgress"|"Complete", LastStatusMessage?:string, DeletionSummary?:array{TotalCount?:int, RemainingCount?:int, SummaryItems?:array<array{Version?:string, Count?:int, RemainingCount?:int}>}, LastStatusUpdateTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeInventoryDeletionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WindowExecutionId:string, TaskId:string, Filters?:array<array{Key?:string, Values?:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{WindowExecutionTaskInvocationIdentities?:array<array{WindowExecutionId?:string, TaskExecutionId?:string, InvocationId?:string, ExecutionId?:string, TaskType?:"RUN_COMMAND"|"AUTOMATION"|"STEP_FUNCTIONS"|"LAMBDA", Parameters?:string, Status?:"PENDING"|"IN_PROGRESS"|"SUCCESS"|"FAILED"|"TIMED_OUT"|"CANCELLING"|"CANCELLED"|"SKIPPED_OVERLAPPING", StatusDetails?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, OwnerInformation?:string, WindowTargetId?:string}>, NextToken?:string}>
     */
    public function describeMaintenanceWindowExecutionTaskInvocations(array $args): \AWS\Result { }

    /**
     * @param array{WindowExecutionId:string, TaskId:string, Filters?:array<array{Key?:string, Values?:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WindowExecutionTaskInvocationIdentities?:array<array{WindowExecutionId?:string, TaskExecutionId?:string, InvocationId?:string, ExecutionId?:string, TaskType?:"RUN_COMMAND"|"AUTOMATION"|"STEP_FUNCTIONS"|"LAMBDA", Parameters?:string, Status?:"PENDING"|"IN_PROGRESS"|"SUCCESS"|"FAILED"|"TIMED_OUT"|"CANCELLING"|"CANCELLED"|"SKIPPED_OVERLAPPING", StatusDetails?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, OwnerInformation?:string, WindowTargetId?:string}>, NextToken?:string}>
     */
    public function describeMaintenanceWindowExecutionTaskInvocationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WindowExecutionId:string, Filters?:array<array{Key?:string, Values?:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{WindowExecutionTaskIdentities?:array<array{WindowExecutionId?:string, TaskExecutionId?:string, Status?:"PENDING"|"IN_PROGRESS"|"SUCCESS"|"FAILED"|"TIMED_OUT"|"CANCELLING"|"CANCELLED"|"SKIPPED_OVERLAPPING", StatusDetails?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, TaskArn?:string, TaskType?:"RUN_COMMAND"|"AUTOMATION"|"STEP_FUNCTIONS"|"LAMBDA", AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, TriggeredAlarms?:array<array{Name:string, State:"UNKNOWN"|"ALARM"}>}>, NextToken?:string}>
     */
    public function describeMaintenanceWindowExecutionTasks(array $args): \AWS\Result { }

    /**
     * @param array{WindowExecutionId:string, Filters?:array<array{Key?:string, Values?:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WindowExecutionTaskIdentities?:array<array{WindowExecutionId?:string, TaskExecutionId?:string, Status?:"PENDING"|"IN_PROGRESS"|"SUCCESS"|"FAILED"|"TIMED_OUT"|"CANCELLING"|"CANCELLED"|"SKIPPED_OVERLAPPING", StatusDetails?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, TaskArn?:string, TaskType?:"RUN_COMMAND"|"AUTOMATION"|"STEP_FUNCTIONS"|"LAMBDA", AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, TriggeredAlarms?:array<array{Name:string, State:"UNKNOWN"|"ALARM"}>}>, NextToken?:string}>
     */
    public function describeMaintenanceWindowExecutionTasksAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WindowId:string, Filters?:array<array{Key?:string, Values?:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{WindowExecutions?:array<array{WindowId?:string, WindowExecutionId?:string, Status?:"PENDING"|"IN_PROGRESS"|"SUCCESS"|"FAILED"|"TIMED_OUT"|"CANCELLING"|"CANCELLED"|"SKIPPED_OVERLAPPING", StatusDetails?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeMaintenanceWindowExecutions(array $args): \AWS\Result { }

    /**
     * @param array{WindowId:string, Filters?:array<array{Key?:string, Values?:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WindowExecutions?:array<array{WindowId?:string, WindowExecutionId?:string, Status?:"PENDING"|"IN_PROGRESS"|"SUCCESS"|"FAILED"|"TIMED_OUT"|"CANCELLING"|"CANCELLED"|"SKIPPED_OVERLAPPING", StatusDetails?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeMaintenanceWindowExecutionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WindowId?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, ResourceType?:"INSTANCE"|"RESOURCE_GROUP", Filters?:array<array{Key?:string, Values?:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ScheduledWindowExecutions?:array<array{WindowId?:string, Name?:string, ExecutionTime?:string}>, NextToken?:string}>
     */
    public function describeMaintenanceWindowSchedule(array $args = []): \AWS\Result { }

    /**
     * @param array{WindowId?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, ResourceType?:"INSTANCE"|"RESOURCE_GROUP", Filters?:array<array{Key?:string, Values?:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ScheduledWindowExecutions?:array<array{WindowId?:string, Name?:string, ExecutionTime?:string}>, NextToken?:string}>
     */
    public function describeMaintenanceWindowScheduleAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WindowId:string, Filters?:array<array{Key?:string, Values?:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Targets?:array<array{WindowId?:string, WindowTargetId?:string, ResourceType?:"INSTANCE"|"RESOURCE_GROUP", Targets?:mixed, OwnerInformation?:string, Name?:string, Description?:string}>, NextToken?:string}>
     */
    public function describeMaintenanceWindowTargets(array $args): \AWS\Result { }

    /**
     * @param array{WindowId:string, Filters?:array<array{Key?:string, Values?:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Targets?:array<array{WindowId?:string, WindowTargetId?:string, ResourceType?:"INSTANCE"|"RESOURCE_GROUP", Targets?:mixed, OwnerInformation?:string, Name?:string, Description?:string}>, NextToken?:string}>
     */
    public function describeMaintenanceWindowTargetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WindowId:string, Filters?:array<array{Key?:string, Values?:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Tasks?:array<array{WindowId?:string, WindowTaskId?:string, TaskArn?:string, Type?:"RUN_COMMAND"|"AUTOMATION"|"STEP_FUNCTIONS"|"LAMBDA", Targets?:array<array{Key?:string, Values?:array<string>}>, TaskParameters?:array<string, array{Values?:array<string>}>, Priority?:int, LoggingInfo?:array{S3BucketName:string, S3KeyPrefix?:string, S3Region:string}, ServiceRoleArn?:string, MaxConcurrency?:string, MaxErrors?:string, Name?:string, Description?:string, CutoffBehavior?:"CONTINUE_TASK"|"CANCEL_TASK", AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}}>, NextToken?:string}>
     */
    public function describeMaintenanceWindowTasks(array $args): \AWS\Result { }

    /**
     * @param array{WindowId:string, Filters?:array<array{Key?:string, Values?:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tasks?:array<array{WindowId?:string, WindowTaskId?:string, TaskArn?:string, Type?:"RUN_COMMAND"|"AUTOMATION"|"STEP_FUNCTIONS"|"LAMBDA", Targets?:array<array{Key?:string, Values?:array<string>}>, TaskParameters?:array<string, array{Values?:array<string>}>, Priority?:int, LoggingInfo?:array{S3BucketName:string, S3KeyPrefix?:string, S3Region:string}, ServiceRoleArn?:string, MaxConcurrency?:string, MaxErrors?:string, Name?:string, Description?:string, CutoffBehavior?:"CONTINUE_TASK"|"CANCEL_TASK", AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}}>, NextToken?:string}>
     */
    public function describeMaintenanceWindowTasksAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array<array{Key?:string, Values?:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{WindowIdentities?:array<array{WindowId?:string, Name?:string, Description?:string, Enabled?:bool, Duration?:int, Cutoff?:int, Schedule?:string, ScheduleTimezone?:string, ScheduleOffset?:int, EndDate?:string, StartDate?:string, NextExecutionTime?:string}>, NextToken?:string}>
     */
    public function describeMaintenanceWindows(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array<array{Key?:string, Values?:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WindowIdentities?:array<array{WindowId?:string, Name?:string, Description?:string, Enabled?:bool, Duration?:int, Cutoff?:int, Schedule?:string, ScheduleTimezone?:string, ScheduleOffset?:int, EndDate?:string, StartDate?:string, NextExecutionTime?:string}>, NextToken?:string}>
     */
    public function describeMaintenanceWindowsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Targets:array<array{Key?:string, Values?:array<string>}>, ResourceType:"INSTANCE"|"RESOURCE_GROUP", MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{WindowIdentities?:array<array{WindowId?:string, Name?:string}>, NextToken?:string}>
     */
    public function describeMaintenanceWindowsForTarget(array $args): \AWS\Result { }

    /**
     * @param array{Targets:array<array{Key?:string, Values?:array<string>}>, ResourceType:"INSTANCE"|"RESOURCE_GROUP", MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WindowIdentities?:array<array{WindowId?:string, Name?:string}>, NextToken?:string}>
     */
    public function describeMaintenanceWindowsForTargetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OpsItemFilters?:array<array{Key:"Status"|"CreatedBy"|"Source"|"Priority"|"Title"|"OpsItemId"|"CreatedTime"|"LastModifiedTime"|"ActualStartTime"|"ActualEndTime"|"PlannedStartTime"|"PlannedEndTime"|"OperationalData"|"OperationalDataKey"|"OperationalDataValue"|"ResourceId"|"AutomationId"|"Category"|"Severity"|"OpsItemType"|"ChangeRequestByRequesterArn"|"ChangeRequestByRequesterName"|"ChangeRequestByApproverArn"|"ChangeRequestByApproverName"|"ChangeRequestByTemplate"|"ChangeRequestByTargetsResourceGroup"|"InsightByType"|"AccountId", Values:array<string>, Operator:"Equal"|"Contains"|"GreaterThan"|"LessThan"}>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, OpsItemSummaries?:array<array{CreatedBy?:string, CreatedTime?:int|string|\DateTimeInterface, LastModifiedBy?:string, LastModifiedTime?:int|string|\DateTimeInterface, Priority?:int, Source?:string, Status?:"Open"|"InProgress"|"Resolved"|"Pending"|"TimedOut"|"Cancelling"|"Cancelled"|"Failed"|"CompletedWithSuccess"|"CompletedWithFailure"|"Scheduled"|"RunbookInProgress"|"PendingChangeCalendarOverride"|"ChangeCalendarOverrideApproved"|"ChangeCalendarOverrideRejected"|"PendingApproval"|"Approved"|"Rejected"|"Closed", OpsItemId?:string, Title?:string, OperationalData?:array<string, array{Value?:string, Type?:"SearchableString"|"String"}>, Category?:string, Severity?:string, OpsItemType?:string, ActualStartTime?:int|string|\DateTimeInterface, ActualEndTime?:int|string|\DateTimeInterface, PlannedStartTime?:int|string|\DateTimeInterface, PlannedEndTime?:int|string|\DateTimeInterface}>}>
     */
    public function describeOpsItems(array $args = []): \AWS\Result { }

    /**
     * @param array{OpsItemFilters?:array<array{Key:"Status"|"CreatedBy"|"Source"|"Priority"|"Title"|"OpsItemId"|"CreatedTime"|"LastModifiedTime"|"ActualStartTime"|"ActualEndTime"|"PlannedStartTime"|"PlannedEndTime"|"OperationalData"|"OperationalDataKey"|"OperationalDataValue"|"ResourceId"|"AutomationId"|"Category"|"Severity"|"OpsItemType"|"ChangeRequestByRequesterArn"|"ChangeRequestByRequesterName"|"ChangeRequestByApproverArn"|"ChangeRequestByApproverName"|"ChangeRequestByTemplate"|"ChangeRequestByTargetsResourceGroup"|"InsightByType"|"AccountId", Values:array<string>, Operator:"Equal"|"Contains"|"GreaterThan"|"LessThan"}>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, OpsItemSummaries?:array<array{CreatedBy?:string, CreatedTime?:int|string|\DateTimeInterface, LastModifiedBy?:string, LastModifiedTime?:int|string|\DateTimeInterface, Priority?:int, Source?:string, Status?:"Open"|"InProgress"|"Resolved"|"Pending"|"TimedOut"|"Cancelling"|"Cancelled"|"Failed"|"CompletedWithSuccess"|"CompletedWithFailure"|"Scheduled"|"RunbookInProgress"|"PendingChangeCalendarOverride"|"ChangeCalendarOverrideApproved"|"ChangeCalendarOverrideRejected"|"PendingApproval"|"Approved"|"Rejected"|"Closed", OpsItemId?:string, Title?:string, OperationalData?:array<string, array{Value?:string, Type?:"SearchableString"|"String"}>, Category?:string, Severity?:string, OpsItemType?:string, ActualStartTime?:int|string|\DateTimeInterface, ActualEndTime?:int|string|\DateTimeInterface, PlannedStartTime?:int|string|\DateTimeInterface, PlannedEndTime?:int|string|\DateTimeInterface}>}>
     */
    public function describeOpsItemsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array<array{Key:"Name"|"Type"|"KeyId", Values:array<string>}>, ParameterFilters?:array<array{Key:string, Option?:string, Values?:array<string>}>, MaxResults?:int, NextToken?:string, Shared?:bool} $args
     * @return \AWS\Result<array{Parameters?:array<array{Name?:string, ARN?:string, Type?:"String"|"StringList"|"SecureString", KeyId?:string, LastModifiedDate?:int|string|\DateTimeInterface, LastModifiedUser?:string, Description?:string, AllowedPattern?:string, Version?:int, Tier?:"Standard"|"Advanced"|"Intelligent-Tiering", Policies?:array<array{PolicyText?:string, PolicyType?:string, PolicyStatus?:string}>, DataType?:string}>, NextToken?:string}>
     */
    public function describeParameters(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array<array{Key:"Name"|"Type"|"KeyId", Values:array<string>}>, ParameterFilters?:array<array{Key:string, Option?:string, Values?:array<string>}>, MaxResults?:int, NextToken?:string, Shared?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Parameters?:array<array{Name?:string, ARN?:string, Type?:"String"|"StringList"|"SecureString", KeyId?:string, LastModifiedDate?:int|string|\DateTimeInterface, LastModifiedUser?:string, Description?:string, AllowedPattern?:string, Version?:int, Tier?:"Standard"|"Advanced"|"Intelligent-Tiering", Policies?:array<array{PolicyText?:string, PolicyType?:string, PolicyStatus?:string}>, DataType?:string}>, NextToken?:string}>
     */
    public function describeParametersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array<array{Key?:string, Values?:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{BaselineIdentities?:array<array{BaselineId?:string, BaselineName?:string, OperatingSystem?:"WINDOWS"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"AMAZON_LINUX_2022"|"UBUNTU"|"REDHAT_ENTERPRISE_LINUX"|"SUSE"|"CENTOS"|"ORACLE_LINUX"|"DEBIAN"|"MACOS"|"RASPBIAN"|"ROCKY_LINUX"|"ALMA_LINUX"|"AMAZON_LINUX_2023", BaselineDescription?:string, DefaultBaseline?:bool}>, NextToken?:string}>
     */
    public function describePatchBaselines(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array<array{Key?:string, Values?:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BaselineIdentities?:array<array{BaselineId?:string, BaselineName?:string, OperatingSystem?:"WINDOWS"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"AMAZON_LINUX_2022"|"UBUNTU"|"REDHAT_ENTERPRISE_LINUX"|"SUSE"|"CENTOS"|"ORACLE_LINUX"|"DEBIAN"|"MACOS"|"RASPBIAN"|"ROCKY_LINUX"|"ALMA_LINUX"|"AMAZON_LINUX_2023", BaselineDescription?:string, DefaultBaseline?:bool}>, NextToken?:string}>
     */
    public function describePatchBaselinesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PatchGroup:string} $args
     * @return \AWS\Result<array{Instances?:int, InstancesWithInstalledPatches?:int, InstancesWithInstalledOtherPatches?:int, InstancesWithInstalledPendingRebootPatches?:int, InstancesWithInstalledRejectedPatches?:int, InstancesWithMissingPatches?:int, InstancesWithFailedPatches?:int, InstancesWithNotApplicablePatches?:int, InstancesWithUnreportedNotApplicablePatches?:int, InstancesWithCriticalNonCompliantPatches?:int, InstancesWithSecurityNonCompliantPatches?:int, InstancesWithOtherNonCompliantPatches?:int}>
     */
    public function describePatchGroupState(array $args): \AWS\Result { }

    /**
     * @param array{PatchGroup:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Instances?:int, InstancesWithInstalledPatches?:int, InstancesWithInstalledOtherPatches?:int, InstancesWithInstalledPendingRebootPatches?:int, InstancesWithInstalledRejectedPatches?:int, InstancesWithMissingPatches?:int, InstancesWithFailedPatches?:int, InstancesWithNotApplicablePatches?:int, InstancesWithUnreportedNotApplicablePatches?:int, InstancesWithCriticalNonCompliantPatches?:int, InstancesWithSecurityNonCompliantPatches?:int, InstancesWithOtherNonCompliantPatches?:int}>
     */
    public function describePatchGroupStateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, Filters?:array<array{Key?:string, Values?:array<string>}>, NextToken?:string} $args
     * @return \AWS\Result<array{Mappings?:array<array{PatchGroup?:string, BaselineIdentity?:array{BaselineId?:string, BaselineName?:string, OperatingSystem?:"WINDOWS"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"AMAZON_LINUX_2022"|"UBUNTU"|"REDHAT_ENTERPRISE_LINUX"|"SUSE"|"CENTOS"|"ORACLE_LINUX"|"DEBIAN"|"MACOS"|"RASPBIAN"|"ROCKY_LINUX"|"ALMA_LINUX"|"AMAZON_LINUX_2023", BaselineDescription?:string, DefaultBaseline?:bool}}>, NextToken?:string}>
     */
    public function describePatchGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, Filters?:array<array{Key?:string, Values?:array<string>}>, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Mappings?:array<array{PatchGroup?:string, BaselineIdentity?:array{BaselineId?:string, BaselineName?:string, OperatingSystem?:"WINDOWS"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"AMAZON_LINUX_2022"|"UBUNTU"|"REDHAT_ENTERPRISE_LINUX"|"SUSE"|"CENTOS"|"ORACLE_LINUX"|"DEBIAN"|"MACOS"|"RASPBIAN"|"ROCKY_LINUX"|"ALMA_LINUX"|"AMAZON_LINUX_2023", BaselineDescription?:string, DefaultBaseline?:bool}}>, NextToken?:string}>
     */
    public function describePatchGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OperatingSystem:"WINDOWS"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"AMAZON_LINUX_2022"|"UBUNTU"|"REDHAT_ENTERPRISE_LINUX"|"SUSE"|"CENTOS"|"ORACLE_LINUX"|"DEBIAN"|"MACOS"|"RASPBIAN"|"ROCKY_LINUX"|"ALMA_LINUX"|"AMAZON_LINUX_2023", Property:"PRODUCT"|"PRODUCT_FAMILY"|"CLASSIFICATION"|"MSRC_SEVERITY"|"PRIORITY"|"SEVERITY", PatchSet?:"OS"|"APPLICATION", MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Properties?:array<array<string, string>>, NextToken?:string}>
     */
    public function describePatchProperties(array $args): \AWS\Result { }

    /**
     * @param array{OperatingSystem:"WINDOWS"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"AMAZON_LINUX_2022"|"UBUNTU"|"REDHAT_ENTERPRISE_LINUX"|"SUSE"|"CENTOS"|"ORACLE_LINUX"|"DEBIAN"|"MACOS"|"RASPBIAN"|"ROCKY_LINUX"|"ALMA_LINUX"|"AMAZON_LINUX_2023", Property:"PRODUCT"|"PRODUCT_FAMILY"|"CLASSIFICATION"|"MSRC_SEVERITY"|"PRIORITY"|"SEVERITY", PatchSet?:"OS"|"APPLICATION", MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Properties?:array<array<string, string>>, NextToken?:string}>
     */
    public function describePatchPropertiesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{State:"Active"|"History", MaxResults?:int, NextToken?:string, Filters?:array<array{key:"InvokedAfter"|"InvokedBefore"|"Target"|"Owner"|"Status"|"SessionId", value:string}>} $args
     * @return \AWS\Result<array{Sessions?:array<array{SessionId?:string, Target?:string, Status?:"Connected"|"Connecting"|"Disconnected"|"Terminated"|"Terminating"|"Failed", StartDate?:int|string|\DateTimeInterface, EndDate?:int|string|\DateTimeInterface, DocumentName?:string, Owner?:string, Reason?:string, Details?:string, OutputUrl?:array{S3OutputUrl?:string, CloudWatchOutputUrl?:string}, MaxSessionDuration?:string}>, NextToken?:string}>
     */
    public function describeSessions(array $args): \AWS\Result { }

    /**
     * @param array{State:"Active"|"History", MaxResults?:int, NextToken?:string, Filters?:array<array{key:"InvokedAfter"|"InvokedBefore"|"Target"|"Owner"|"Status"|"SessionId", value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Sessions?:array<array{SessionId?:string, Target?:string, Status?:"Connected"|"Connecting"|"Disconnected"|"Terminated"|"Terminating"|"Failed", StartDate?:int|string|\DateTimeInterface, EndDate?:int|string|\DateTimeInterface, DocumentName?:string, Owner?:string, Reason?:string, Details?:string, OutputUrl?:array{S3OutputUrl?:string, CloudWatchOutputUrl?:string}, MaxSessionDuration?:string}>, NextToken?:string}>
     */
    public function describeSessionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OpsItemId:string, AssociationId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateOpsItemRelatedItem(array $args): \AWS\Result { }

    /**
     * @param array{OpsItemId:string, AssociationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateOpsItemRelatedItemAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutomationExecutionId:string} $args
     * @return \AWS\Result<array{AutomationExecution?:array{AutomationExecutionId?:string, DocumentName?:string, DocumentVersion?:string, ExecutionStartTime?:int|string|\DateTimeInterface, ExecutionEndTime?:int|string|\DateTimeInterface, AutomationExecutionStatus?:"Pending"|"InProgress"|"Waiting"|"Success"|"TimedOut"|"Cancelling"|"Cancelled"|"Failed"|"PendingApproval"|"Approved"|"Rejected"|"Scheduled"|"RunbookInProgress"|"PendingChangeCalendarOverride"|"ChangeCalendarOverrideApproved"|"ChangeCalendarOverrideRejected"|"CompletedWithSuccess"|"CompletedWithFailure"|"Exited", StepExecutions?:array<array{StepName?:string, Action?:string, TimeoutSeconds?:int, OnFailure?:string, MaxAttempts?:int, ExecutionStartTime?:int|string|\DateTimeInterface, ExecutionEndTime?:int|string|\DateTimeInterface, StepStatus?:"Pending"|"InProgress"|"Waiting"|"Success"|"TimedOut"|"Cancelling"|"Cancelled"|"Failed"|"PendingApproval"|"Approved"|"Rejected"|"Scheduled"|"RunbookInProgress"|"PendingChangeCalendarOverride"|"ChangeCalendarOverrideApproved"|"ChangeCalendarOverrideRejected"|"CompletedWithSuccess"|"CompletedWithFailure"|"Exited", ResponseCode?:string, Inputs?:array<string, string>, Outputs?:array<string, array<string>>, Response?:string, FailureMessage?:string, FailureDetails?:array{FailureStage?:string, FailureType?:string, Details?:array<string, array<string>>}, StepExecutionId?:string, OverriddenParameters?:array<string, array<string>>, IsEnd?:bool, NextStep?:string, IsCritical?:bool, ValidNextSteps?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetLocation?:array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}, TriggeredAlarms?:array<array{Name:string, State:"UNKNOWN"|"ALARM"}>, ParentStepDetails?:array{StepExecutionId?:string, StepName?:string, Action?:string, Iteration?:int, IteratorValue?:string}}>, StepExecutionsTruncated?:bool, Parameters?:array<string, array<string>>, Outputs?:array<string, array<string>>, FailureMessage?:string, Mode?:"Auto"|"Interactive", ParentAutomationExecutionId?:string, ExecutedBy?:string, CurrentStepName?:string, CurrentAction?:string, TargetParameterName?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetMaps?:array<array<string, array<string>>>, ResolvedTargets?:array{ParameterValues?:array<string>, Truncated?:bool}, MaxConcurrency?:string, MaxErrors?:string, Target?:string, TargetLocations?:array<array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}>, ProgressCounters?:array{TotalSteps?:int, SuccessSteps?:int, FailedSteps?:int, CancelledSteps?:int, TimedOutSteps?:int}, AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, TriggeredAlarms?:array<array{Name:string, State:"UNKNOWN"|"ALARM"}>, TargetLocationsURL?:string, AutomationSubtype?:"ChangeRequest", ScheduledTime?:int|string|\DateTimeInterface, Runbooks?:array<array{DocumentName:string, DocumentVersion?:string, Parameters?:array<string, array<string>>, TargetParameterName?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetMaps?:array<array<string, array<string>>>, MaxConcurrency?:string, MaxErrors?:string, TargetLocations?:array<array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}>}>, OpsItemId?:string, AssociationId?:string, ChangeRequestName?:string, Variables?:array<string, array<string>>}}>
     */
    public function getAutomationExecution(array $args): \AWS\Result { }

    /**
     * @param array{AutomationExecutionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AutomationExecution?:array{AutomationExecutionId?:string, DocumentName?:string, DocumentVersion?:string, ExecutionStartTime?:int|string|\DateTimeInterface, ExecutionEndTime?:int|string|\DateTimeInterface, AutomationExecutionStatus?:"Pending"|"InProgress"|"Waiting"|"Success"|"TimedOut"|"Cancelling"|"Cancelled"|"Failed"|"PendingApproval"|"Approved"|"Rejected"|"Scheduled"|"RunbookInProgress"|"PendingChangeCalendarOverride"|"ChangeCalendarOverrideApproved"|"ChangeCalendarOverrideRejected"|"CompletedWithSuccess"|"CompletedWithFailure"|"Exited", StepExecutions?:array<array{StepName?:string, Action?:string, TimeoutSeconds?:int, OnFailure?:string, MaxAttempts?:int, ExecutionStartTime?:int|string|\DateTimeInterface, ExecutionEndTime?:int|string|\DateTimeInterface, StepStatus?:"Pending"|"InProgress"|"Waiting"|"Success"|"TimedOut"|"Cancelling"|"Cancelled"|"Failed"|"PendingApproval"|"Approved"|"Rejected"|"Scheduled"|"RunbookInProgress"|"PendingChangeCalendarOverride"|"ChangeCalendarOverrideApproved"|"ChangeCalendarOverrideRejected"|"CompletedWithSuccess"|"CompletedWithFailure"|"Exited", ResponseCode?:string, Inputs?:array<string, string>, Outputs?:array<string, array<string>>, Response?:string, FailureMessage?:string, FailureDetails?:array{FailureStage?:string, FailureType?:string, Details?:array<string, array<string>>}, StepExecutionId?:string, OverriddenParameters?:array<string, array<string>>, IsEnd?:bool, NextStep?:string, IsCritical?:bool, ValidNextSteps?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetLocation?:array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}, TriggeredAlarms?:array<array{Name:string, State:"UNKNOWN"|"ALARM"}>, ParentStepDetails?:array{StepExecutionId?:string, StepName?:string, Action?:string, Iteration?:int, IteratorValue?:string}}>, StepExecutionsTruncated?:bool, Parameters?:array<string, array<string>>, Outputs?:array<string, array<string>>, FailureMessage?:string, Mode?:"Auto"|"Interactive", ParentAutomationExecutionId?:string, ExecutedBy?:string, CurrentStepName?:string, CurrentAction?:string, TargetParameterName?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetMaps?:array<array<string, array<string>>>, ResolvedTargets?:array{ParameterValues?:array<string>, Truncated?:bool}, MaxConcurrency?:string, MaxErrors?:string, Target?:string, TargetLocations?:array<array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}>, ProgressCounters?:array{TotalSteps?:int, SuccessSteps?:int, FailedSteps?:int, CancelledSteps?:int, TimedOutSteps?:int}, AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, TriggeredAlarms?:array<array{Name:string, State:"UNKNOWN"|"ALARM"}>, TargetLocationsURL?:string, AutomationSubtype?:"ChangeRequest", ScheduledTime?:int|string|\DateTimeInterface, Runbooks?:array<array{DocumentName:string, DocumentVersion?:string, Parameters?:array<string, array<string>>, TargetParameterName?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetMaps?:array<array<string, array<string>>>, MaxConcurrency?:string, MaxErrors?:string, TargetLocations?:array<array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}>}>, OpsItemId?:string, AssociationId?:string, ChangeRequestName?:string, Variables?:array<string, array<string>>}}>
     */
    public function getAutomationExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CalendarNames:array<string>, AtTime?:string} $args
     * @return \AWS\Result<array{State?:"OPEN"|"CLOSED", AtTime?:string, NextTransitionTime?:string}>
     */
    public function getCalendarState(array $args): \AWS\Result { }

    /**
     * @param array{CalendarNames:array<string>, AtTime?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{State?:"OPEN"|"CLOSED", AtTime?:string, NextTransitionTime?:string}>
     */
    public function getCalendarStateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CommandId:string, InstanceId:string, PluginName?:string} $args
     * @return \AWS\Result<array{CommandId?:string, InstanceId?:string, Comment?:string, DocumentName?:string, DocumentVersion?:string, PluginName?:string, ResponseCode?:int, ExecutionStartDateTime?:string, ExecutionElapsedTime?:string, ExecutionEndDateTime?:string, Status?:"Pending"|"InProgress"|"Delayed"|"Success"|"Cancelled"|"TimedOut"|"Failed"|"Cancelling", StatusDetails?:string, StandardOutputContent?:string, StandardOutputUrl?:string, StandardErrorContent?:string, StandardErrorUrl?:string, CloudWatchOutputConfig?:array{CloudWatchLogGroupName?:string, CloudWatchOutputEnabled?:bool}}>
     */
    public function getCommandInvocation(array $args): \AWS\Result { }

    /**
     * @param array{CommandId:string, InstanceId:string, PluginName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CommandId?:string, InstanceId?:string, Comment?:string, DocumentName?:string, DocumentVersion?:string, PluginName?:string, ResponseCode?:int, ExecutionStartDateTime?:string, ExecutionElapsedTime?:string, ExecutionEndDateTime?:string, Status?:"Pending"|"InProgress"|"Delayed"|"Success"|"Cancelled"|"TimedOut"|"Failed"|"Cancelling", StatusDetails?:string, StandardOutputContent?:string, StandardOutputUrl?:string, StandardErrorContent?:string, StandardErrorUrl?:string, CloudWatchOutputConfig?:array{CloudWatchLogGroupName?:string, CloudWatchOutputEnabled?:bool}}>
     */
    public function getCommandInvocationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Target:string} $args
     * @return \AWS\Result<array{Target?:string, Status?:"connected"|"notconnected"}>
     */
    public function getConnectionStatus(array $args): \AWS\Result { }

    /**
     * @param array{Target:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Target?:string, Status?:"connected"|"notconnected"}>
     */
    public function getConnectionStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OperatingSystem?:"WINDOWS"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"AMAZON_LINUX_2022"|"UBUNTU"|"REDHAT_ENTERPRISE_LINUX"|"SUSE"|"CENTOS"|"ORACLE_LINUX"|"DEBIAN"|"MACOS"|"RASPBIAN"|"ROCKY_LINUX"|"ALMA_LINUX"|"AMAZON_LINUX_2023"} $args
     * @return \AWS\Result<array{BaselineId?:string, OperatingSystem?:"WINDOWS"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"AMAZON_LINUX_2022"|"UBUNTU"|"REDHAT_ENTERPRISE_LINUX"|"SUSE"|"CENTOS"|"ORACLE_LINUX"|"DEBIAN"|"MACOS"|"RASPBIAN"|"ROCKY_LINUX"|"ALMA_LINUX"|"AMAZON_LINUX_2023"}>
     */
    public function getDefaultPatchBaseline(array $args = []): \AWS\Result { }

    /**
     * @param array{OperatingSystem?:"WINDOWS"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"AMAZON_LINUX_2022"|"UBUNTU"|"REDHAT_ENTERPRISE_LINUX"|"SUSE"|"CENTOS"|"ORACLE_LINUX"|"DEBIAN"|"MACOS"|"RASPBIAN"|"ROCKY_LINUX"|"ALMA_LINUX"|"AMAZON_LINUX_2023"} $args
     * @return \GuzzleHttp\Promise\Promise<array{BaselineId?:string, OperatingSystem?:"WINDOWS"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"AMAZON_LINUX_2022"|"UBUNTU"|"REDHAT_ENTERPRISE_LINUX"|"SUSE"|"CENTOS"|"ORACLE_LINUX"|"DEBIAN"|"MACOS"|"RASPBIAN"|"ROCKY_LINUX"|"ALMA_LINUX"|"AMAZON_LINUX_2023"}>
     */
    public function getDefaultPatchBaselineAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, SnapshotId:string, BaselineOverride?:array{OperatingSystem?:"WINDOWS"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"AMAZON_LINUX_2022"|"UBUNTU"|"REDHAT_ENTERPRISE_LINUX"|"SUSE"|"CENTOS"|"ORACLE_LINUX"|"DEBIAN"|"MACOS"|"RASPBIAN"|"ROCKY_LINUX"|"ALMA_LINUX"|"AMAZON_LINUX_2023", GlobalFilters?:array{PatchFilters:array<array{Key:"ARCH"|"ADVISORY_ID"|"BUGZILLA_ID"|"PATCH_SET"|"PRODUCT"|"PRODUCT_FAMILY"|"CLASSIFICATION"|"CVE_ID"|"EPOCH"|"MSRC_SEVERITY"|"NAME"|"PATCH_ID"|"SECTION"|"PRIORITY"|"REPOSITORY"|"RELEASE"|"SEVERITY"|"SECURITY"|"VERSION", Values:array<string>}>}, ApprovalRules?:array{PatchRules:array<array{PatchFilterGroup:array{PatchFilters:array<array{Key:"ARCH"|"ADVISORY_ID"|"BUGZILLA_ID"|"PATCH_SET"|"PRODUCT"|"PRODUCT_FAMILY"|"CLASSIFICATION"|"CVE_ID"|"EPOCH"|"MSRC_SEVERITY"|"NAME"|"PATCH_ID"|"SECTION"|"PRIORITY"|"REPOSITORY"|"RELEASE"|"SEVERITY"|"SECURITY"|"VERSION", Values:array<string>}>}, ComplianceLevel?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"INFORMATIONAL"|"UNSPECIFIED", ApproveAfterDays?:int, ApproveUntilDate?:string, EnableNonSecurity?:bool}>}, ApprovedPatches?:array<string>, ApprovedPatchesComplianceLevel?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"INFORMATIONAL"|"UNSPECIFIED", RejectedPatches?:array<string>, RejectedPatchesAction?:"ALLOW_AS_DEPENDENCY"|"BLOCK", ApprovedPatchesEnableNonSecurity?:bool, Sources?:array<array{Name:string, Products:array<string>, Configuration:string}>}} $args
     * @return \AWS\Result<array{InstanceId?:string, SnapshotId?:string, SnapshotDownloadUrl?:string, Product?:string}>
     */
    public function getDeployablePatchSnapshotForInstance(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, SnapshotId:string, BaselineOverride?:array{OperatingSystem?:"WINDOWS"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"AMAZON_LINUX_2022"|"UBUNTU"|"REDHAT_ENTERPRISE_LINUX"|"SUSE"|"CENTOS"|"ORACLE_LINUX"|"DEBIAN"|"MACOS"|"RASPBIAN"|"ROCKY_LINUX"|"ALMA_LINUX"|"AMAZON_LINUX_2023", GlobalFilters?:array{PatchFilters:array<array{Key:"ARCH"|"ADVISORY_ID"|"BUGZILLA_ID"|"PATCH_SET"|"PRODUCT"|"PRODUCT_FAMILY"|"CLASSIFICATION"|"CVE_ID"|"EPOCH"|"MSRC_SEVERITY"|"NAME"|"PATCH_ID"|"SECTION"|"PRIORITY"|"REPOSITORY"|"RELEASE"|"SEVERITY"|"SECURITY"|"VERSION", Values:array<string>}>}, ApprovalRules?:array{PatchRules:array<array{PatchFilterGroup:array{PatchFilters:array<array{Key:"ARCH"|"ADVISORY_ID"|"BUGZILLA_ID"|"PATCH_SET"|"PRODUCT"|"PRODUCT_FAMILY"|"CLASSIFICATION"|"CVE_ID"|"EPOCH"|"MSRC_SEVERITY"|"NAME"|"PATCH_ID"|"SECTION"|"PRIORITY"|"REPOSITORY"|"RELEASE"|"SEVERITY"|"SECURITY"|"VERSION", Values:array<string>}>}, ComplianceLevel?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"INFORMATIONAL"|"UNSPECIFIED", ApproveAfterDays?:int, ApproveUntilDate?:string, EnableNonSecurity?:bool}>}, ApprovedPatches?:array<string>, ApprovedPatchesComplianceLevel?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"INFORMATIONAL"|"UNSPECIFIED", RejectedPatches?:array<string>, RejectedPatchesAction?:"ALLOW_AS_DEPENDENCY"|"BLOCK", ApprovedPatchesEnableNonSecurity?:bool, Sources?:array<array{Name:string, Products:array<string>, Configuration:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{InstanceId?:string, SnapshotId?:string, SnapshotDownloadUrl?:string, Product?:string}>
     */
    public function getDeployablePatchSnapshotForInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, VersionName?:string, DocumentVersion?:string, DocumentFormat?:"YAML"|"JSON"|"TEXT"} $args
     * @return \AWS\Result<array{Name?:string, CreatedDate?:int|string|\DateTimeInterface, DisplayName?:string, VersionName?:string, DocumentVersion?:string, Status?:"Creating"|"Active"|"Updating"|"Deleting"|"Failed", StatusInformation?:string, Content?:string, DocumentType?:"Command"|"Policy"|"Automation"|"Session"|"Package"|"ApplicationConfiguration"|"ApplicationConfigurationSchema"|"DeploymentStrategy"|"ChangeCalendar"|"Automation.ChangeTemplate"|"ProblemAnalysis"|"ProblemAnalysisTemplate"|"CloudFormation"|"ConformancePackTemplate"|"QuickSetup", DocumentFormat?:"YAML"|"JSON"|"TEXT", Requires?:array<array{Name:string, Version?:string, RequireType?:string, VersionName?:string}>, AttachmentsContent?:array<array{Name?:string, Size?:int, Hash?:string, HashType?:"Sha256", Url?:string}>, ReviewStatus?:"APPROVED"|"NOT_REVIEWED"|"PENDING"|"REJECTED"}>
     */
    public function getDocument(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, VersionName?:string, DocumentVersion?:string, DocumentFormat?:"YAML"|"JSON"|"TEXT"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name?:string, CreatedDate?:int|string|\DateTimeInterface, DisplayName?:string, VersionName?:string, DocumentVersion?:string, Status?:"Creating"|"Active"|"Updating"|"Deleting"|"Failed", StatusInformation?:string, Content?:string, DocumentType?:"Command"|"Policy"|"Automation"|"Session"|"Package"|"ApplicationConfiguration"|"ApplicationConfigurationSchema"|"DeploymentStrategy"|"ChangeCalendar"|"Automation.ChangeTemplate"|"ProblemAnalysis"|"ProblemAnalysisTemplate"|"CloudFormation"|"ConformancePackTemplate"|"QuickSetup", DocumentFormat?:"YAML"|"JSON"|"TEXT", Requires?:array<array{Name:string, Version?:string, RequireType?:string, VersionName?:string}>, AttachmentsContent?:array<array{Name?:string, Size?:int, Hash?:string, HashType?:"Sha256", Url?:string}>, ReviewStatus?:"APPROVED"|"NOT_REVIEWED"|"PENDING"|"REJECTED"}>
     */
    public function getDocumentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ExecutionPreviewId:string} $args
     * @return \AWS\Result<array{ExecutionPreviewId?:string, EndedAt?:int|string|\DateTimeInterface, Status?:"Pending"|"InProgress"|"Success"|"Failed", StatusMessage?:string, ExecutionPreview?:array{Automation?:array{StepPreviews?:array<"Mutating"|"NonMutating"|"Undetermined", int>, Regions?:array<string>, TargetPreviews?:array<array{Count?:int, TargetType?:string}>, TotalAccounts?:int}}}>
     */
    public function getExecutionPreview(array $args): \AWS\Result { }

    /**
     * @param array{ExecutionPreviewId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ExecutionPreviewId?:string, EndedAt?:int|string|\DateTimeInterface, Status?:"Pending"|"InProgress"|"Success"|"Failed", StatusMessage?:string, ExecutionPreview?:array{Automation?:array{StepPreviews?:array<"Mutating"|"NonMutating"|"Undetermined", int>, Regions?:array<string>, TargetPreviews?:array<array{Count?:int, TargetType?:string}>, TotalAccounts?:int}}}>
     */
    public function getExecutionPreviewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array<array{Key:string, Values:array<string>, Type?:"Equal"|"NotEqual"|"BeginWith"|"LessThan"|"GreaterThan"|"Exists"}>, Aggregators?:array<array{Expression?:string, Aggregators?:mixed, Groups?:array<array{Name:string, Filters:array<array{Key:string, Values:array<string>, Type?:"Equal"|"NotEqual"|"BeginWith"|"LessThan"|"GreaterThan"|"Exists"}>}>}>, ResultAttributes?:array<array{TypeName:string}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Entities?:array<array{Id?:string, Data?:array<string, array{TypeName:string, SchemaVersion:string, CaptureTime?:string, ContentHash?:string, Content:array<array<string, string>>}>}>, NextToken?:string}>
     */
    public function getInventory(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array<array{Key:string, Values:array<string>, Type?:"Equal"|"NotEqual"|"BeginWith"|"LessThan"|"GreaterThan"|"Exists"}>, Aggregators?:array<array{Expression?:string, Aggregators?:mixed, Groups?:array<array{Name:string, Filters:array<array{Key:string, Values:array<string>, Type?:"Equal"|"NotEqual"|"BeginWith"|"LessThan"|"GreaterThan"|"Exists"}>}>}>, ResultAttributes?:array<array{TypeName:string}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Entities?:array<array{Id?:string, Data?:array<string, array{TypeName:string, SchemaVersion:string, CaptureTime?:string, ContentHash?:string, Content:array<array<string, string>>}>}>, NextToken?:string}>
     */
    public function getInventoryAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TypeName?:string, NextToken?:string, MaxResults?:int, Aggregator?:bool, SubType?:bool} $args
     * @return \AWS\Result<array{Schemas?:array<array{TypeName:string, Version?:string, Attributes:array<array{Name:string, DataType:"string"|"number"}>, DisplayName?:string}>, NextToken?:string}>
     */
    public function getInventorySchema(array $args = []): \AWS\Result { }

    /**
     * @param array{TypeName?:string, NextToken?:string, MaxResults?:int, Aggregator?:bool, SubType?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Schemas?:array<array{TypeName:string, Version?:string, Attributes:array<array{Name:string, DataType:"string"|"number"}>, DisplayName?:string}>, NextToken?:string}>
     */
    public function getInventorySchemaAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WindowId:string} $args
     * @return \AWS\Result<array{WindowId?:string, Name?:string, Description?:string, StartDate?:string, EndDate?:string, Schedule?:string, ScheduleTimezone?:string, ScheduleOffset?:int, NextExecutionTime?:string, Duration?:int, Cutoff?:int, AllowUnassociatedTargets?:bool, Enabled?:bool, CreatedDate?:int|string|\DateTimeInterface, ModifiedDate?:int|string|\DateTimeInterface}>
     */
    public function getMaintenanceWindow(array $args): \AWS\Result { }

    /**
     * @param array{WindowId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WindowId?:string, Name?:string, Description?:string, StartDate?:string, EndDate?:string, Schedule?:string, ScheduleTimezone?:string, ScheduleOffset?:int, NextExecutionTime?:string, Duration?:int, Cutoff?:int, AllowUnassociatedTargets?:bool, Enabled?:bool, CreatedDate?:int|string|\DateTimeInterface, ModifiedDate?:int|string|\DateTimeInterface}>
     */
    public function getMaintenanceWindowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WindowExecutionId:string} $args
     * @return \AWS\Result<array{WindowExecutionId?:string, TaskIds?:array<string>, Status?:"PENDING"|"IN_PROGRESS"|"SUCCESS"|"FAILED"|"TIMED_OUT"|"CANCELLING"|"CANCELLED"|"SKIPPED_OVERLAPPING", StatusDetails?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}>
     */
    public function getMaintenanceWindowExecution(array $args): \AWS\Result { }

    /**
     * @param array{WindowExecutionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WindowExecutionId?:string, TaskIds?:array<string>, Status?:"PENDING"|"IN_PROGRESS"|"SUCCESS"|"FAILED"|"TIMED_OUT"|"CANCELLING"|"CANCELLED"|"SKIPPED_OVERLAPPING", StatusDetails?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}>
     */
    public function getMaintenanceWindowExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WindowExecutionId:string, TaskId:string} $args
     * @return \AWS\Result<array{WindowExecutionId?:string, TaskExecutionId?:string, TaskArn?:string, ServiceRole?:string, Type?:"RUN_COMMAND"|"AUTOMATION"|"STEP_FUNCTIONS"|"LAMBDA", TaskParameters?:array<array<string, array{Values?:array<string>}>>, Priority?:int, MaxConcurrency?:string, MaxErrors?:string, Status?:"PENDING"|"IN_PROGRESS"|"SUCCESS"|"FAILED"|"TIMED_OUT"|"CANCELLING"|"CANCELLED"|"SKIPPED_OVERLAPPING", StatusDetails?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, TriggeredAlarms?:array<array{Name:string, State:"UNKNOWN"|"ALARM"}>}>
     */
    public function getMaintenanceWindowExecutionTask(array $args): \AWS\Result { }

    /**
     * @param array{WindowExecutionId:string, TaskId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WindowExecutionId?:string, TaskExecutionId?:string, TaskArn?:string, ServiceRole?:string, Type?:"RUN_COMMAND"|"AUTOMATION"|"STEP_FUNCTIONS"|"LAMBDA", TaskParameters?:array<array<string, array{Values?:array<string>}>>, Priority?:int, MaxConcurrency?:string, MaxErrors?:string, Status?:"PENDING"|"IN_PROGRESS"|"SUCCESS"|"FAILED"|"TIMED_OUT"|"CANCELLING"|"CANCELLED"|"SKIPPED_OVERLAPPING", StatusDetails?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, TriggeredAlarms?:array<array{Name:string, State:"UNKNOWN"|"ALARM"}>}>
     */
    public function getMaintenanceWindowExecutionTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WindowExecutionId:string, TaskId:string, InvocationId:string} $args
     * @return \AWS\Result<array{WindowExecutionId?:string, TaskExecutionId?:string, InvocationId?:string, ExecutionId?:string, TaskType?:"RUN_COMMAND"|"AUTOMATION"|"STEP_FUNCTIONS"|"LAMBDA", Parameters?:string, Status?:"PENDING"|"IN_PROGRESS"|"SUCCESS"|"FAILED"|"TIMED_OUT"|"CANCELLING"|"CANCELLED"|"SKIPPED_OVERLAPPING", StatusDetails?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, OwnerInformation?:string, WindowTargetId?:string}>
     */
    public function getMaintenanceWindowExecutionTaskInvocation(array $args): \AWS\Result { }

    /**
     * @param array{WindowExecutionId:string, TaskId:string, InvocationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WindowExecutionId?:string, TaskExecutionId?:string, InvocationId?:string, ExecutionId?:string, TaskType?:"RUN_COMMAND"|"AUTOMATION"|"STEP_FUNCTIONS"|"LAMBDA", Parameters?:string, Status?:"PENDING"|"IN_PROGRESS"|"SUCCESS"|"FAILED"|"TIMED_OUT"|"CANCELLING"|"CANCELLED"|"SKIPPED_OVERLAPPING", StatusDetails?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, OwnerInformation?:string, WindowTargetId?:string}>
     */
    public function getMaintenanceWindowExecutionTaskInvocationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WindowId:string, WindowTaskId:string} $args
     * @return \AWS\Result<array{WindowId?:string, WindowTaskId?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, TaskArn?:string, ServiceRoleArn?:string, TaskType?:"RUN_COMMAND"|"AUTOMATION"|"STEP_FUNCTIONS"|"LAMBDA", TaskParameters?:array<string, array{Values?:array<string>}>, TaskInvocationParameters?:array{RunCommand?:array{Comment?:string, CloudWatchOutputConfig?:array{CloudWatchLogGroupName?:string, CloudWatchOutputEnabled?:bool}, DocumentHash?:string, DocumentHashType?:"Sha256"|"Sha1", DocumentVersion?:string, NotificationConfig?:array{NotificationArn?:string, NotificationEvents?:array<"All"|"InProgress"|"Success"|"TimedOut"|"Cancelled"|"Failed">, NotificationType?:"Command"|"Invocation"}, OutputS3BucketName?:string, OutputS3KeyPrefix?:string, Parameters?:array<string, array<string>>, ServiceRoleArn?:string, TimeoutSeconds?:int}, Automation?:array{DocumentVersion?:string, Parameters?:array<string, array<string>>}, StepFunctions?:array{Input?:string, Name?:string}, Lambda?:array{ClientContext?:string, Qualifier?:string, Payload?:string|resource|\Psr\Http\Message\StreamInterface}}, Priority?:int, MaxConcurrency?:string, MaxErrors?:string, LoggingInfo?:array{S3BucketName:string, S3KeyPrefix?:string, S3Region:string}, Name?:string, Description?:string, CutoffBehavior?:"CONTINUE_TASK"|"CANCEL_TASK", AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}}>
     */
    public function getMaintenanceWindowTask(array $args): \AWS\Result { }

    /**
     * @param array{WindowId:string, WindowTaskId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WindowId?:string, WindowTaskId?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, TaskArn?:string, ServiceRoleArn?:string, TaskType?:"RUN_COMMAND"|"AUTOMATION"|"STEP_FUNCTIONS"|"LAMBDA", TaskParameters?:array<string, array{Values?:array<string>}>, TaskInvocationParameters?:array{RunCommand?:array{Comment?:string, CloudWatchOutputConfig?:array{CloudWatchLogGroupName?:string, CloudWatchOutputEnabled?:bool}, DocumentHash?:string, DocumentHashType?:"Sha256"|"Sha1", DocumentVersion?:string, NotificationConfig?:array{NotificationArn?:string, NotificationEvents?:array<"All"|"InProgress"|"Success"|"TimedOut"|"Cancelled"|"Failed">, NotificationType?:"Command"|"Invocation"}, OutputS3BucketName?:string, OutputS3KeyPrefix?:string, Parameters?:array<string, array<string>>, ServiceRoleArn?:string, TimeoutSeconds?:int}, Automation?:array{DocumentVersion?:string, Parameters?:array<string, array<string>>}, StepFunctions?:array{Input?:string, Name?:string}, Lambda?:array{ClientContext?:string, Qualifier?:string, Payload?:string|resource|\Psr\Http\Message\StreamInterface}}, Priority?:int, MaxConcurrency?:string, MaxErrors?:string, LoggingInfo?:array{S3BucketName:string, S3KeyPrefix?:string, S3Region:string}, Name?:string, Description?:string, CutoffBehavior?:"CONTINUE_TASK"|"CANCEL_TASK", AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}}>
     */
    public function getMaintenanceWindowTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OpsItemId:string, OpsItemArn?:string} $args
     * @return \AWS\Result<array{OpsItem?:array{CreatedBy?:string, OpsItemType?:string, CreatedTime?:int|string|\DateTimeInterface, Description?:string, LastModifiedBy?:string, LastModifiedTime?:int|string|\DateTimeInterface, Notifications?:array<array{Arn?:string}>, Priority?:int, RelatedOpsItems?:array<array{OpsItemId:string}>, Status?:"Open"|"InProgress"|"Resolved"|"Pending"|"TimedOut"|"Cancelling"|"Cancelled"|"Failed"|"CompletedWithSuccess"|"CompletedWithFailure"|"Scheduled"|"RunbookInProgress"|"PendingChangeCalendarOverride"|"ChangeCalendarOverrideApproved"|"ChangeCalendarOverrideRejected"|"PendingApproval"|"Approved"|"Rejected"|"Closed", OpsItemId?:string, Version?:string, Title?:string, Source?:string, OperationalData?:array<string, array{Value?:string, Type?:"SearchableString"|"String"}>, Category?:string, Severity?:string, ActualStartTime?:int|string|\DateTimeInterface, ActualEndTime?:int|string|\DateTimeInterface, PlannedStartTime?:int|string|\DateTimeInterface, PlannedEndTime?:int|string|\DateTimeInterface, OpsItemArn?:string}}>
     */
    public function getOpsItem(array $args): \AWS\Result { }

    /**
     * @param array{OpsItemId:string, OpsItemArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{OpsItem?:array{CreatedBy?:string, OpsItemType?:string, CreatedTime?:int|string|\DateTimeInterface, Description?:string, LastModifiedBy?:string, LastModifiedTime?:int|string|\DateTimeInterface, Notifications?:array<array{Arn?:string}>, Priority?:int, RelatedOpsItems?:array<array{OpsItemId:string}>, Status?:"Open"|"InProgress"|"Resolved"|"Pending"|"TimedOut"|"Cancelling"|"Cancelled"|"Failed"|"CompletedWithSuccess"|"CompletedWithFailure"|"Scheduled"|"RunbookInProgress"|"PendingChangeCalendarOverride"|"ChangeCalendarOverrideApproved"|"ChangeCalendarOverrideRejected"|"PendingApproval"|"Approved"|"Rejected"|"Closed", OpsItemId?:string, Version?:string, Title?:string, Source?:string, OperationalData?:array<string, array{Value?:string, Type?:"SearchableString"|"String"}>, Category?:string, Severity?:string, ActualStartTime?:int|string|\DateTimeInterface, ActualEndTime?:int|string|\DateTimeInterface, PlannedStartTime?:int|string|\DateTimeInterface, PlannedEndTime?:int|string|\DateTimeInterface, OpsItemArn?:string}}>
     */
    public function getOpsItemAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OpsMetadataArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ResourceId?:string, Metadata?:array<string, array{Value?:string}>, NextToken?:string}>
     */
    public function getOpsMetadata(array $args): \AWS\Result { }

    /**
     * @param array{OpsMetadataArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceId?:string, Metadata?:array<string, array{Value?:string}>, NextToken?:string}>
     */
    public function getOpsMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SyncName?:string, Filters?:array<array{Key:string, Values:array<string>, Type?:"Equal"|"NotEqual"|"BeginWith"|"LessThan"|"GreaterThan"|"Exists"}>, Aggregators?:array<array{AggregatorType?:string, TypeName?:string, AttributeName?:string, Values?:array<string, string>, Filters?:array<array{Key:string, Values:array<string>, Type?:"Equal"|"NotEqual"|"BeginWith"|"LessThan"|"GreaterThan"|"Exists"}>, Aggregators?:mixed}>, ResultAttributes?:array<array{TypeName:string}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Entities?:array<array{Id?:string, Data?:array<string, array{CaptureTime?:string, Content?:array<array<string, string>>}>}>, NextToken?:string}>
     */
    public function getOpsSummary(array $args = []): \AWS\Result { }

    /**
     * @param array{SyncName?:string, Filters?:array<array{Key:string, Values:array<string>, Type?:"Equal"|"NotEqual"|"BeginWith"|"LessThan"|"GreaterThan"|"Exists"}>, Aggregators?:array<array{AggregatorType?:string, TypeName?:string, AttributeName?:string, Values?:array<string, string>, Filters?:array<array{Key:string, Values:array<string>, Type?:"Equal"|"NotEqual"|"BeginWith"|"LessThan"|"GreaterThan"|"Exists"}>, Aggregators?:mixed}>, ResultAttributes?:array<array{TypeName:string}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Entities?:array<array{Id?:string, Data?:array<string, array{CaptureTime?:string, Content?:array<array<string, string>>}>}>, NextToken?:string}>
     */
    public function getOpsSummaryAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, WithDecryption?:bool} $args
     * @return \AWS\Result<array{Parameter?:array{Name?:string, Type?:"String"|"StringList"|"SecureString", Value?:string, Version?:int, Selector?:string, SourceResult?:string, LastModifiedDate?:int|string|\DateTimeInterface, ARN?:string, DataType?:string}}>
     */
    public function getParameter(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, WithDecryption?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Parameter?:array{Name?:string, Type?:"String"|"StringList"|"SecureString", Value?:string, Version?:int, Selector?:string, SourceResult?:string, LastModifiedDate?:int|string|\DateTimeInterface, ARN?:string, DataType?:string}}>
     */
    public function getParameterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, WithDecryption?:bool, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Parameters?:array<array{Name?:string, Type?:"String"|"StringList"|"SecureString", KeyId?:string, LastModifiedDate?:int|string|\DateTimeInterface, LastModifiedUser?:string, Description?:string, Value?:string, AllowedPattern?:string, Version?:int, Labels?:array<string>, Tier?:"Standard"|"Advanced"|"Intelligent-Tiering", Policies?:array<array{PolicyText?:string, PolicyType?:string, PolicyStatus?:string}>, DataType?:string}>, NextToken?:string}>
     */
    public function getParameterHistory(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, WithDecryption?:bool, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Parameters?:array<array{Name?:string, Type?:"String"|"StringList"|"SecureString", KeyId?:string, LastModifiedDate?:int|string|\DateTimeInterface, LastModifiedUser?:string, Description?:string, Value?:string, AllowedPattern?:string, Version?:int, Labels?:array<string>, Tier?:"Standard"|"Advanced"|"Intelligent-Tiering", Policies?:array<array{PolicyText?:string, PolicyType?:string, PolicyStatus?:string}>, DataType?:string}>, NextToken?:string}>
     */
    public function getParameterHistoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Names:array<string>, WithDecryption?:bool} $args
     * @return \AWS\Result<array{Parameters?:array<array{Name?:string, Type?:"String"|"StringList"|"SecureString", Value?:string, Version?:int, Selector?:string, SourceResult?:string, LastModifiedDate?:int|string|\DateTimeInterface, ARN?:string, DataType?:string}>, InvalidParameters?:array<string>}>
     */
    public function getParameters(array $args): \AWS\Result { }

    /**
     * @param array{Names:array<string>, WithDecryption?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Parameters?:array<array{Name?:string, Type?:"String"|"StringList"|"SecureString", Value?:string, Version?:int, Selector?:string, SourceResult?:string, LastModifiedDate?:int|string|\DateTimeInterface, ARN?:string, DataType?:string}>, InvalidParameters?:array<string>}>
     */
    public function getParametersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Path:string, Recursive?:bool, ParameterFilters?:array<array{Key:string, Option?:string, Values?:array<string>}>, WithDecryption?:bool, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Parameters?:array<array{Name?:string, Type?:"String"|"StringList"|"SecureString", Value?:string, Version?:int, Selector?:string, SourceResult?:string, LastModifiedDate?:int|string|\DateTimeInterface, ARN?:string, DataType?:string}>, NextToken?:string}>
     */
    public function getParametersByPath(array $args): \AWS\Result { }

    /**
     * @param array{Path:string, Recursive?:bool, ParameterFilters?:array<array{Key:string, Option?:string, Values?:array<string>}>, WithDecryption?:bool, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Parameters?:array<array{Name?:string, Type?:"String"|"StringList"|"SecureString", Value?:string, Version?:int, Selector?:string, SourceResult?:string, LastModifiedDate?:int|string|\DateTimeInterface, ARN?:string, DataType?:string}>, NextToken?:string}>
     */
    public function getParametersByPathAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BaselineId:string} $args
     * @return \AWS\Result<array{BaselineId?:string, Name?:string, OperatingSystem?:"WINDOWS"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"AMAZON_LINUX_2022"|"UBUNTU"|"REDHAT_ENTERPRISE_LINUX"|"SUSE"|"CENTOS"|"ORACLE_LINUX"|"DEBIAN"|"MACOS"|"RASPBIAN"|"ROCKY_LINUX"|"ALMA_LINUX"|"AMAZON_LINUX_2023", GlobalFilters?:array{PatchFilters:array<array{Key:"ARCH"|"ADVISORY_ID"|"BUGZILLA_ID"|"PATCH_SET"|"PRODUCT"|"PRODUCT_FAMILY"|"CLASSIFICATION"|"CVE_ID"|"EPOCH"|"MSRC_SEVERITY"|"NAME"|"PATCH_ID"|"SECTION"|"PRIORITY"|"REPOSITORY"|"RELEASE"|"SEVERITY"|"SECURITY"|"VERSION", Values:array<string>}>}, ApprovalRules?:array{PatchRules:array<array{PatchFilterGroup:array{PatchFilters:array<array{Key:"ARCH"|"ADVISORY_ID"|"BUGZILLA_ID"|"PATCH_SET"|"PRODUCT"|"PRODUCT_FAMILY"|"CLASSIFICATION"|"CVE_ID"|"EPOCH"|"MSRC_SEVERITY"|"NAME"|"PATCH_ID"|"SECTION"|"PRIORITY"|"REPOSITORY"|"RELEASE"|"SEVERITY"|"SECURITY"|"VERSION", Values:array<string>}>}, ComplianceLevel?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"INFORMATIONAL"|"UNSPECIFIED", ApproveAfterDays?:int, ApproveUntilDate?:string, EnableNonSecurity?:bool}>}, ApprovedPatches?:array<string>, ApprovedPatchesComplianceLevel?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"INFORMATIONAL"|"UNSPECIFIED", ApprovedPatchesEnableNonSecurity?:bool, RejectedPatches?:array<string>, RejectedPatchesAction?:"ALLOW_AS_DEPENDENCY"|"BLOCK", PatchGroups?:array<string>, CreatedDate?:int|string|\DateTimeInterface, ModifiedDate?:int|string|\DateTimeInterface, Description?:string, Sources?:array<array{Name:string, Products:array<string>, Configuration:string}>}>
     */
    public function getPatchBaseline(array $args): \AWS\Result { }

    /**
     * @param array{BaselineId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BaselineId?:string, Name?:string, OperatingSystem?:"WINDOWS"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"AMAZON_LINUX_2022"|"UBUNTU"|"REDHAT_ENTERPRISE_LINUX"|"SUSE"|"CENTOS"|"ORACLE_LINUX"|"DEBIAN"|"MACOS"|"RASPBIAN"|"ROCKY_LINUX"|"ALMA_LINUX"|"AMAZON_LINUX_2023", GlobalFilters?:array{PatchFilters:array<array{Key:"ARCH"|"ADVISORY_ID"|"BUGZILLA_ID"|"PATCH_SET"|"PRODUCT"|"PRODUCT_FAMILY"|"CLASSIFICATION"|"CVE_ID"|"EPOCH"|"MSRC_SEVERITY"|"NAME"|"PATCH_ID"|"SECTION"|"PRIORITY"|"REPOSITORY"|"RELEASE"|"SEVERITY"|"SECURITY"|"VERSION", Values:array<string>}>}, ApprovalRules?:array{PatchRules:array<array{PatchFilterGroup:array{PatchFilters:array<array{Key:"ARCH"|"ADVISORY_ID"|"BUGZILLA_ID"|"PATCH_SET"|"PRODUCT"|"PRODUCT_FAMILY"|"CLASSIFICATION"|"CVE_ID"|"EPOCH"|"MSRC_SEVERITY"|"NAME"|"PATCH_ID"|"SECTION"|"PRIORITY"|"REPOSITORY"|"RELEASE"|"SEVERITY"|"SECURITY"|"VERSION", Values:array<string>}>}, ComplianceLevel?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"INFORMATIONAL"|"UNSPECIFIED", ApproveAfterDays?:int, ApproveUntilDate?:string, EnableNonSecurity?:bool}>}, ApprovedPatches?:array<string>, ApprovedPatchesComplianceLevel?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"INFORMATIONAL"|"UNSPECIFIED", ApprovedPatchesEnableNonSecurity?:bool, RejectedPatches?:array<string>, RejectedPatchesAction?:"ALLOW_AS_DEPENDENCY"|"BLOCK", PatchGroups?:array<string>, CreatedDate?:int|string|\DateTimeInterface, ModifiedDate?:int|string|\DateTimeInterface, Description?:string, Sources?:array<array{Name:string, Products:array<string>, Configuration:string}>}>
     */
    public function getPatchBaselineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PatchGroup:string, OperatingSystem?:"WINDOWS"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"AMAZON_LINUX_2022"|"UBUNTU"|"REDHAT_ENTERPRISE_LINUX"|"SUSE"|"CENTOS"|"ORACLE_LINUX"|"DEBIAN"|"MACOS"|"RASPBIAN"|"ROCKY_LINUX"|"ALMA_LINUX"|"AMAZON_LINUX_2023"} $args
     * @return \AWS\Result<array{BaselineId?:string, PatchGroup?:string, OperatingSystem?:"WINDOWS"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"AMAZON_LINUX_2022"|"UBUNTU"|"REDHAT_ENTERPRISE_LINUX"|"SUSE"|"CENTOS"|"ORACLE_LINUX"|"DEBIAN"|"MACOS"|"RASPBIAN"|"ROCKY_LINUX"|"ALMA_LINUX"|"AMAZON_LINUX_2023"}>
     */
    public function getPatchBaselineForPatchGroup(array $args): \AWS\Result { }

    /**
     * @param array{PatchGroup:string, OperatingSystem?:"WINDOWS"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"AMAZON_LINUX_2022"|"UBUNTU"|"REDHAT_ENTERPRISE_LINUX"|"SUSE"|"CENTOS"|"ORACLE_LINUX"|"DEBIAN"|"MACOS"|"RASPBIAN"|"ROCKY_LINUX"|"ALMA_LINUX"|"AMAZON_LINUX_2023"} $args
     * @return \GuzzleHttp\Promise\Promise<array{BaselineId?:string, PatchGroup?:string, OperatingSystem?:"WINDOWS"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"AMAZON_LINUX_2022"|"UBUNTU"|"REDHAT_ENTERPRISE_LINUX"|"SUSE"|"CENTOS"|"ORACLE_LINUX"|"DEBIAN"|"MACOS"|"RASPBIAN"|"ROCKY_LINUX"|"ALMA_LINUX"|"AMAZON_LINUX_2023"}>
     */
    public function getPatchBaselineForPatchGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, Policies?:array<array{PolicyId?:string, PolicyHash?:string, Policy?:string}>}>
     */
    public function getResourcePolicies(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Policies?:array<array{PolicyId?:string, PolicyHash?:string, Policy?:string}>}>
     */
    public function getResourcePoliciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SettingId:string} $args
     * @return \AWS\Result<array{ServiceSetting?:array{SettingId?:string, SettingValue?:string, LastModifiedDate?:int|string|\DateTimeInterface, LastModifiedUser?:string, ARN?:string, Status?:string}}>
     */
    public function getServiceSetting(array $args): \AWS\Result { }

    /**
     * @param array{SettingId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServiceSetting?:array{SettingId?:string, SettingValue?:string, LastModifiedDate?:int|string|\DateTimeInterface, LastModifiedUser?:string, ARN?:string, Status?:string}}>
     */
    public function getServiceSettingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, ParameterVersion?:int, Labels:array<string>} $args
     * @return \AWS\Result<array{InvalidLabels?:array<string>, ParameterVersion?:int}>
     */
    public function labelParameterVersion(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, ParameterVersion?:int, Labels:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{InvalidLabels?:array<string>, ParameterVersion?:int}>
     */
    public function labelParameterVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AssociationId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{AssociationVersions?:array<array{AssociationId?:string, AssociationVersion?:string, CreatedDate?:int|string|\DateTimeInterface, Name?:string, DocumentVersion?:string, Parameters?:array<string, array<string>>, Targets?:array<array{Key?:string, Values?:array<string>}>, ScheduleExpression?:string, OutputLocation?:array{S3Location?:array{OutputS3Region?:string, OutputS3BucketName?:string, OutputS3KeyPrefix?:string}}, AssociationName?:string, MaxErrors?:string, MaxConcurrency?:string, ComplianceSeverity?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"UNSPECIFIED", SyncCompliance?:"AUTO"|"MANUAL", ApplyOnlyAtCronInterval?:bool, CalendarNames?:array<string>, TargetLocations?:array<array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}>, ScheduleOffset?:int, Duration?:int, TargetMaps?:array<array<string, array<string>>>}>, NextToken?:string}>
     */
    public function listAssociationVersions(array $args): \AWS\Result { }

    /**
     * @param array{AssociationId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AssociationVersions?:array<array{AssociationId?:string, AssociationVersion?:string, CreatedDate?:int|string|\DateTimeInterface, Name?:string, DocumentVersion?:string, Parameters?:array<string, array<string>>, Targets?:array<array{Key?:string, Values?:array<string>}>, ScheduleExpression?:string, OutputLocation?:array{S3Location?:array{OutputS3Region?:string, OutputS3BucketName?:string, OutputS3KeyPrefix?:string}}, AssociationName?:string, MaxErrors?:string, MaxConcurrency?:string, ComplianceSeverity?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"UNSPECIFIED", SyncCompliance?:"AUTO"|"MANUAL", ApplyOnlyAtCronInterval?:bool, CalendarNames?:array<string>, TargetLocations?:array<array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}>, ScheduleOffset?:int, Duration?:int, TargetMaps?:array<array<string, array<string>>>}>, NextToken?:string}>
     */
    public function listAssociationVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AssociationFilterList?:array<array{key:"InstanceId"|"Name"|"AssociationId"|"AssociationStatusName"|"LastExecutedBefore"|"LastExecutedAfter"|"AssociationName"|"ResourceGroupName", value:string}>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Associations?:array<array{Name?:string, InstanceId?:string, AssociationId?:string, AssociationVersion?:string, DocumentVersion?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, LastExecutionDate?:int|string|\DateTimeInterface, Overview?:array{Status?:string, DetailedStatus?:string, AssociationStatusAggregatedCount?:array<string, int>}, ScheduleExpression?:string, AssociationName?:string, ScheduleOffset?:int, Duration?:int, TargetMaps?:array<array<string, array<string>>>}>, NextToken?:string}>
     */
    public function listAssociations(array $args = []): \AWS\Result { }

    /**
     * @param array{AssociationFilterList?:array<array{key:"InstanceId"|"Name"|"AssociationId"|"AssociationStatusName"|"LastExecutedBefore"|"LastExecutedAfter"|"AssociationName"|"ResourceGroupName", value:string}>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Associations?:array<array{Name?:string, InstanceId?:string, AssociationId?:string, AssociationVersion?:string, DocumentVersion?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, LastExecutionDate?:int|string|\DateTimeInterface, Overview?:array{Status?:string, DetailedStatus?:string, AssociationStatusAggregatedCount?:array<string, int>}, ScheduleExpression?:string, AssociationName?:string, ScheduleOffset?:int, Duration?:int, TargetMaps?:array<array<string, array<string>>>}>, NextToken?:string}>
     */
    public function listAssociationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CommandId?:string, InstanceId?:string, MaxResults?:int, NextToken?:string, Filters?:array<array{key:"InvokedAfter"|"InvokedBefore"|"Status"|"ExecutionStage"|"DocumentName", value:string}>, Details?:bool} $args
     * @return \AWS\Result<array{CommandInvocations?:array<array{CommandId?:string, InstanceId?:string, InstanceName?:string, Comment?:string, DocumentName?:string, DocumentVersion?:string, RequestedDateTime?:int|string|\DateTimeInterface, Status?:"Pending"|"InProgress"|"Delayed"|"Success"|"Cancelled"|"TimedOut"|"Failed"|"Cancelling", StatusDetails?:string, TraceOutput?:string, StandardOutputUrl?:string, StandardErrorUrl?:string, CommandPlugins?:array<array{Name?:string, Status?:"Pending"|"InProgress"|"Success"|"TimedOut"|"Cancelled"|"Failed", StatusDetails?:string, ResponseCode?:int, ResponseStartDateTime?:int|string|\DateTimeInterface, ResponseFinishDateTime?:int|string|\DateTimeInterface, Output?:string, StandardOutputUrl?:string, StandardErrorUrl?:string, OutputS3Region?:string, OutputS3BucketName?:string, OutputS3KeyPrefix?:string}>, ServiceRole?:string, NotificationConfig?:array{NotificationArn?:string, NotificationEvents?:array<"All"|"InProgress"|"Success"|"TimedOut"|"Cancelled"|"Failed">, NotificationType?:"Command"|"Invocation"}, CloudWatchOutputConfig?:array{CloudWatchLogGroupName?:string, CloudWatchOutputEnabled?:bool}}>, NextToken?:string}>
     */
    public function listCommandInvocations(array $args = []): \AWS\Result { }

    /**
     * @param array{CommandId?:string, InstanceId?:string, MaxResults?:int, NextToken?:string, Filters?:array<array{key:"InvokedAfter"|"InvokedBefore"|"Status"|"ExecutionStage"|"DocumentName", value:string}>, Details?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{CommandInvocations?:array<array{CommandId?:string, InstanceId?:string, InstanceName?:string, Comment?:string, DocumentName?:string, DocumentVersion?:string, RequestedDateTime?:int|string|\DateTimeInterface, Status?:"Pending"|"InProgress"|"Delayed"|"Success"|"Cancelled"|"TimedOut"|"Failed"|"Cancelling", StatusDetails?:string, TraceOutput?:string, StandardOutputUrl?:string, StandardErrorUrl?:string, CommandPlugins?:array<array{Name?:string, Status?:"Pending"|"InProgress"|"Success"|"TimedOut"|"Cancelled"|"Failed", StatusDetails?:string, ResponseCode?:int, ResponseStartDateTime?:int|string|\DateTimeInterface, ResponseFinishDateTime?:int|string|\DateTimeInterface, Output?:string, StandardOutputUrl?:string, StandardErrorUrl?:string, OutputS3Region?:string, OutputS3BucketName?:string, OutputS3KeyPrefix?:string}>, ServiceRole?:string, NotificationConfig?:array{NotificationArn?:string, NotificationEvents?:array<"All"|"InProgress"|"Success"|"TimedOut"|"Cancelled"|"Failed">, NotificationType?:"Command"|"Invocation"}, CloudWatchOutputConfig?:array{CloudWatchLogGroupName?:string, CloudWatchOutputEnabled?:bool}}>, NextToken?:string}>
     */
    public function listCommandInvocationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CommandId?:string, InstanceId?:string, MaxResults?:int, NextToken?:string, Filters?:array<array{key:"InvokedAfter"|"InvokedBefore"|"Status"|"ExecutionStage"|"DocumentName", value:string}>} $args
     * @return \AWS\Result<array{Commands?:array<array{CommandId?:string, DocumentName?:string, DocumentVersion?:string, Comment?:string, ExpiresAfter?:int|string|\DateTimeInterface, Parameters?:array<string, array<string>>, InstanceIds?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, RequestedDateTime?:int|string|\DateTimeInterface, Status?:"Pending"|"InProgress"|"Success"|"Cancelled"|"Failed"|"TimedOut"|"Cancelling", StatusDetails?:string, OutputS3Region?:string, OutputS3BucketName?:string, OutputS3KeyPrefix?:string, MaxConcurrency?:string, MaxErrors?:string, TargetCount?:int, CompletedCount?:int, ErrorCount?:int, DeliveryTimedOutCount?:int, ServiceRole?:string, NotificationConfig?:array{NotificationArn?:string, NotificationEvents?:array<"All"|"InProgress"|"Success"|"TimedOut"|"Cancelled"|"Failed">, NotificationType?:"Command"|"Invocation"}, CloudWatchOutputConfig?:array{CloudWatchLogGroupName?:string, CloudWatchOutputEnabled?:bool}, TimeoutSeconds?:int, AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, TriggeredAlarms?:array<array{Name:string, State:"UNKNOWN"|"ALARM"}>}>, NextToken?:string}>
     */
    public function listCommands(array $args = []): \AWS\Result { }

    /**
     * @param array{CommandId?:string, InstanceId?:string, MaxResults?:int, NextToken?:string, Filters?:array<array{key:"InvokedAfter"|"InvokedBefore"|"Status"|"ExecutionStage"|"DocumentName", value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Commands?:array<array{CommandId?:string, DocumentName?:string, DocumentVersion?:string, Comment?:string, ExpiresAfter?:int|string|\DateTimeInterface, Parameters?:array<string, array<string>>, InstanceIds?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, RequestedDateTime?:int|string|\DateTimeInterface, Status?:"Pending"|"InProgress"|"Success"|"Cancelled"|"Failed"|"TimedOut"|"Cancelling", StatusDetails?:string, OutputS3Region?:string, OutputS3BucketName?:string, OutputS3KeyPrefix?:string, MaxConcurrency?:string, MaxErrors?:string, TargetCount?:int, CompletedCount?:int, ErrorCount?:int, DeliveryTimedOutCount?:int, ServiceRole?:string, NotificationConfig?:array{NotificationArn?:string, NotificationEvents?:array<"All"|"InProgress"|"Success"|"TimedOut"|"Cancelled"|"Failed">, NotificationType?:"Command"|"Invocation"}, CloudWatchOutputConfig?:array{CloudWatchLogGroupName?:string, CloudWatchOutputEnabled?:bool}, TimeoutSeconds?:int, AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, TriggeredAlarms?:array<array{Name:string, State:"UNKNOWN"|"ALARM"}>}>, NextToken?:string}>
     */
    public function listCommandsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array<array{Key?:string, Values?:array<string>, Type?:"EQUAL"|"NOT_EQUAL"|"BEGIN_WITH"|"LESS_THAN"|"GREATER_THAN"}>, ResourceIds?:array<string>, ResourceTypes?:array<string>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ComplianceItems?:array<array{ComplianceType?:string, ResourceType?:string, ResourceId?:string, Id?:string, Title?:string, Status?:"COMPLIANT"|"NON_COMPLIANT", Severity?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"INFORMATIONAL"|"UNSPECIFIED", ExecutionSummary?:array{ExecutionTime:int|string|\DateTimeInterface, ExecutionId?:string, ExecutionType?:string}, Details?:array<string, string>}>, NextToken?:string}>
     */
    public function listComplianceItems(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array<array{Key?:string, Values?:array<string>, Type?:"EQUAL"|"NOT_EQUAL"|"BEGIN_WITH"|"LESS_THAN"|"GREATER_THAN"}>, ResourceIds?:array<string>, ResourceTypes?:array<string>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ComplianceItems?:array<array{ComplianceType?:string, ResourceType?:string, ResourceId?:string, Id?:string, Title?:string, Status?:"COMPLIANT"|"NON_COMPLIANT", Severity?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"INFORMATIONAL"|"UNSPECIFIED", ExecutionSummary?:array{ExecutionTime:int|string|\DateTimeInterface, ExecutionId?:string, ExecutionType?:string}, Details?:array<string, string>}>, NextToken?:string}>
     */
    public function listComplianceItemsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array<array{Key?:string, Values?:array<string>, Type?:"EQUAL"|"NOT_EQUAL"|"BEGIN_WITH"|"LESS_THAN"|"GREATER_THAN"}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ComplianceSummaryItems?:array<array{ComplianceType?:string, CompliantSummary?:array{CompliantCount?:int, SeveritySummary?:array{CriticalCount?:int, HighCount?:int, MediumCount?:int, LowCount?:int, InformationalCount?:int, UnspecifiedCount?:int}}, NonCompliantSummary?:array{NonCompliantCount?:int, SeveritySummary?:array{CriticalCount?:int, HighCount?:int, MediumCount?:int, LowCount?:int, InformationalCount?:int, UnspecifiedCount?:int}}}>, NextToken?:string}>
     */
    public function listComplianceSummaries(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array<array{Key?:string, Values?:array<string>, Type?:"EQUAL"|"NOT_EQUAL"|"BEGIN_WITH"|"LESS_THAN"|"GREATER_THAN"}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ComplianceSummaryItems?:array<array{ComplianceType?:string, CompliantSummary?:array{CompliantCount?:int, SeveritySummary?:array{CriticalCount?:int, HighCount?:int, MediumCount?:int, LowCount?:int, InformationalCount?:int, UnspecifiedCount?:int}}, NonCompliantSummary?:array{NonCompliantCount?:int, SeveritySummary?:array{CriticalCount?:int, HighCount?:int, MediumCount?:int, LowCount?:int, InformationalCount?:int, UnspecifiedCount?:int}}}>, NextToken?:string}>
     */
    public function listComplianceSummariesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, DocumentVersion?:string, Metadata:"DocumentReviews", NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Name?:string, DocumentVersion?:string, Author?:string, Metadata?:array{ReviewerResponse?:array<array{CreateTime?:int|string|\DateTimeInterface, UpdatedTime?:int|string|\DateTimeInterface, ReviewStatus?:"APPROVED"|"NOT_REVIEWED"|"PENDING"|"REJECTED", Comment?:array<array{Type?:"Comment", Content?:string}>, Reviewer?:string}>}, NextToken?:string}>
     */
    public function listDocumentMetadataHistory(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, DocumentVersion?:string, Metadata:"DocumentReviews", NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name?:string, DocumentVersion?:string, Author?:string, Metadata?:array{ReviewerResponse?:array<array{CreateTime?:int|string|\DateTimeInterface, UpdatedTime?:int|string|\DateTimeInterface, ReviewStatus?:"APPROVED"|"NOT_REVIEWED"|"PENDING"|"REJECTED", Comment?:array<array{Type?:"Comment", Content?:string}>, Reviewer?:string}>}, NextToken?:string}>
     */
    public function listDocumentMetadataHistoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{DocumentVersions?:array<array{Name?:string, DisplayName?:string, DocumentVersion?:string, VersionName?:string, CreatedDate?:int|string|\DateTimeInterface, IsDefaultVersion?:bool, DocumentFormat?:"YAML"|"JSON"|"TEXT", Status?:"Creating"|"Active"|"Updating"|"Deleting"|"Failed", StatusInformation?:string, ReviewStatus?:"APPROVED"|"NOT_REVIEWED"|"PENDING"|"REJECTED"}>, NextToken?:string}>
     */
    public function listDocumentVersions(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DocumentVersions?:array<array{Name?:string, DisplayName?:string, DocumentVersion?:string, VersionName?:string, CreatedDate?:int|string|\DateTimeInterface, IsDefaultVersion?:bool, DocumentFormat?:"YAML"|"JSON"|"TEXT", Status?:"Creating"|"Active"|"Updating"|"Deleting"|"Failed", StatusInformation?:string, ReviewStatus?:"APPROVED"|"NOT_REVIEWED"|"PENDING"|"REJECTED"}>, NextToken?:string}>
     */
    public function listDocumentVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DocumentFilterList?:array<array{key:"Name"|"Owner"|"PlatformTypes"|"DocumentType", value:string}>, Filters?:array<array{Key?:string, Values?:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{DocumentIdentifiers?:array<array{Name?:string, CreatedDate?:int|string|\DateTimeInterface, DisplayName?:string, Owner?:string, VersionName?:string, PlatformTypes?:array<"Windows"|"Linux"|"MacOS">, DocumentVersion?:string, DocumentType?:"Command"|"Policy"|"Automation"|"Session"|"Package"|"ApplicationConfiguration"|"ApplicationConfigurationSchema"|"DeploymentStrategy"|"ChangeCalendar"|"Automation.ChangeTemplate"|"ProblemAnalysis"|"ProblemAnalysisTemplate"|"CloudFormation"|"ConformancePackTemplate"|"QuickSetup", SchemaVersion?:string, DocumentFormat?:"YAML"|"JSON"|"TEXT", TargetType?:string, Tags?:array<array{Key:string, Value:string}>, Requires?:array<array{Name:string, Version?:string, RequireType?:string, VersionName?:string}>, ReviewStatus?:"APPROVED"|"NOT_REVIEWED"|"PENDING"|"REJECTED", Author?:string}>, NextToken?:string}>
     */
    public function listDocuments(array $args = []): \AWS\Result { }

    /**
     * @param array{DocumentFilterList?:array<array{key:"Name"|"Owner"|"PlatformTypes"|"DocumentType", value:string}>, Filters?:array<array{Key?:string, Values?:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DocumentIdentifiers?:array<array{Name?:string, CreatedDate?:int|string|\DateTimeInterface, DisplayName?:string, Owner?:string, VersionName?:string, PlatformTypes?:array<"Windows"|"Linux"|"MacOS">, DocumentVersion?:string, DocumentType?:"Command"|"Policy"|"Automation"|"Session"|"Package"|"ApplicationConfiguration"|"ApplicationConfigurationSchema"|"DeploymentStrategy"|"ChangeCalendar"|"Automation.ChangeTemplate"|"ProblemAnalysis"|"ProblemAnalysisTemplate"|"CloudFormation"|"ConformancePackTemplate"|"QuickSetup", SchemaVersion?:string, DocumentFormat?:"YAML"|"JSON"|"TEXT", TargetType?:string, Tags?:array<array{Key:string, Value:string}>, Requires?:array<array{Name:string, Version?:string, RequireType?:string, VersionName?:string}>, ReviewStatus?:"APPROVED"|"NOT_REVIEWED"|"PENDING"|"REJECTED", Author?:string}>, NextToken?:string}>
     */
    public function listDocumentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, TypeName:string, Filters?:array<array{Key:string, Values:array<string>, Type?:"Equal"|"NotEqual"|"BeginWith"|"LessThan"|"GreaterThan"|"Exists"}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{TypeName?:string, InstanceId?:string, SchemaVersion?:string, CaptureTime?:string, Entries?:array<array<string, string>>, NextToken?:string}>
     */
    public function listInventoryEntries(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, TypeName:string, Filters?:array<array{Key:string, Values:array<string>, Type?:"Equal"|"NotEqual"|"BeginWith"|"LessThan"|"GreaterThan"|"Exists"}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{TypeName?:string, InstanceId?:string, SchemaVersion?:string, CaptureTime?:string, Entries?:array<array<string, string>>, NextToken?:string}>
     */
    public function listInventoryEntriesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SyncName?:string, Filters?:array<array{Key:"AgentType"|"AgentVersion"|"ComputerName"|"InstanceId"|"InstanceStatus"|"IpAddress"|"ManagedStatus"|"PlatformName"|"PlatformType"|"PlatformVersion"|"ResourceType"|"OrganizationalUnitId"|"OrganizationalUnitPath"|"Region"|"AccountId", Values:array<string>, Type?:"Equal"|"NotEqual"|"BeginWith"}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Nodes?:array<array{CaptureTime?:int|string|\DateTimeInterface, Id?:string, Owner?:array{AccountId?:string, OrganizationalUnitId?:string, OrganizationalUnitPath?:string}, Region?:string, NodeType?:array{Instance?:array{AgentType?:string, AgentVersion?:string, ComputerName?:string, InstanceStatus?:string, IpAddress?:string, ManagedStatus?:"All"|"Managed"|"Unmanaged", PlatformType?:"Windows"|"Linux"|"MacOS", PlatformName?:string, PlatformVersion?:string, ResourceType?:"ManagedInstance"|"EC2Instance"}}}>, NextToken?:string}>
     */
    public function listNodes(array $args = []): \AWS\Result { }

    /**
     * @param array{SyncName?:string, Filters?:array<array{Key:"AgentType"|"AgentVersion"|"ComputerName"|"InstanceId"|"InstanceStatus"|"IpAddress"|"ManagedStatus"|"PlatformName"|"PlatformType"|"PlatformVersion"|"ResourceType"|"OrganizationalUnitId"|"OrganizationalUnitPath"|"Region"|"AccountId", Values:array<string>, Type?:"Equal"|"NotEqual"|"BeginWith"}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Nodes?:array<array{CaptureTime?:int|string|\DateTimeInterface, Id?:string, Owner?:array{AccountId?:string, OrganizationalUnitId?:string, OrganizationalUnitPath?:string}, Region?:string, NodeType?:array{Instance?:array{AgentType?:string, AgentVersion?:string, ComputerName?:string, InstanceStatus?:string, IpAddress?:string, ManagedStatus?:"All"|"Managed"|"Unmanaged", PlatformType?:"Windows"|"Linux"|"MacOS", PlatformName?:string, PlatformVersion?:string, ResourceType?:"ManagedInstance"|"EC2Instance"}}}>, NextToken?:string}>
     */
    public function listNodesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SyncName?:string, Filters?:array<array{Key:"AgentType"|"AgentVersion"|"ComputerName"|"InstanceId"|"InstanceStatus"|"IpAddress"|"ManagedStatus"|"PlatformName"|"PlatformType"|"PlatformVersion"|"ResourceType"|"OrganizationalUnitId"|"OrganizationalUnitPath"|"Region"|"AccountId", Values:array<string>, Type?:"Equal"|"NotEqual"|"BeginWith"}>, Aggregators:array<array{AggregatorType:"Count", TypeName:"Instance", AttributeName:"AgentVersion"|"PlatformName"|"PlatformType"|"PlatformVersion"|"Region"|"ResourceType", Aggregators?:mixed}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Summary?:array<array<string, string>>, NextToken?:string}>
     */
    public function listNodesSummary(array $args): \AWS\Result { }

    /**
     * @param array{SyncName?:string, Filters?:array<array{Key:"AgentType"|"AgentVersion"|"ComputerName"|"InstanceId"|"InstanceStatus"|"IpAddress"|"ManagedStatus"|"PlatformName"|"PlatformType"|"PlatformVersion"|"ResourceType"|"OrganizationalUnitId"|"OrganizationalUnitPath"|"Region"|"AccountId", Values:array<string>, Type?:"Equal"|"NotEqual"|"BeginWith"}>, Aggregators:array<array{AggregatorType:"Count", TypeName:"Instance", AttributeName:"AgentVersion"|"PlatformName"|"PlatformType"|"PlatformVersion"|"Region"|"ResourceType", Aggregators?:mixed}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Summary?:array<array<string, string>>, NextToken?:string}>
     */
    public function listNodesSummaryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array<array{Key:"OpsItemId", Values:array<string>, Operator:"Equal"}>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Summaries?:array<array{OpsItemId?:string, EventId?:string, Source?:string, DetailType?:string, Detail?:string, CreatedBy?:array{Arn?:string}, CreatedTime?:int|string|\DateTimeInterface}>}>
     */
    public function listOpsItemEvents(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array<array{Key:"OpsItemId", Values:array<string>, Operator:"Equal"}>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Summaries?:array<array{OpsItemId?:string, EventId?:string, Source?:string, DetailType?:string, Detail?:string, CreatedBy?:array{Arn?:string}, CreatedTime?:int|string|\DateTimeInterface}>}>
     */
    public function listOpsItemEventsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OpsItemId?:string, Filters?:array<array{Key:"ResourceType"|"AssociationId"|"ResourceUri", Values:array<string>, Operator:"Equal"}>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Summaries?:array<array{OpsItemId?:string, AssociationId?:string, ResourceType?:string, AssociationType?:string, ResourceUri?:string, CreatedBy?:array{Arn?:string}, CreatedTime?:int|string|\DateTimeInterface, LastModifiedBy?:array{Arn?:string}, LastModifiedTime?:int|string|\DateTimeInterface}>}>
     */
    public function listOpsItemRelatedItems(array $args = []): \AWS\Result { }

    /**
     * @param array{OpsItemId?:string, Filters?:array<array{Key:"ResourceType"|"AssociationId"|"ResourceUri", Values:array<string>, Operator:"Equal"}>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Summaries?:array<array{OpsItemId?:string, AssociationId?:string, ResourceType?:string, AssociationType?:string, ResourceUri?:string, CreatedBy?:array{Arn?:string}, CreatedTime?:int|string|\DateTimeInterface, LastModifiedBy?:array{Arn?:string}, LastModifiedTime?:int|string|\DateTimeInterface}>}>
     */
    public function listOpsItemRelatedItemsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array<array{Key:string, Values:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{OpsMetadataList?:array<array{ResourceId?:string, OpsMetadataArn?:string, LastModifiedDate?:int|string|\DateTimeInterface, LastModifiedUser?:string, CreationDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listOpsMetadata(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array<array{Key:string, Values:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{OpsMetadataList?:array<array{ResourceId?:string, OpsMetadataArn?:string, LastModifiedDate?:int|string|\DateTimeInterface, LastModifiedUser?:string, CreationDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listOpsMetadataAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array<array{Key?:string, Values?:array<string>, Type?:"EQUAL"|"NOT_EQUAL"|"BEGIN_WITH"|"LESS_THAN"|"GREATER_THAN"}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ResourceComplianceSummaryItems?:array<array{ComplianceType?:string, ResourceType?:string, ResourceId?:string, Status?:"COMPLIANT"|"NON_COMPLIANT", OverallSeverity?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"INFORMATIONAL"|"UNSPECIFIED", ExecutionSummary?:array{ExecutionTime:int|string|\DateTimeInterface, ExecutionId?:string, ExecutionType?:string}, CompliantSummary?:array{CompliantCount?:int, SeveritySummary?:array{CriticalCount?:int, HighCount?:int, MediumCount?:int, LowCount?:int, InformationalCount?:int, UnspecifiedCount?:int}}, NonCompliantSummary?:array{NonCompliantCount?:int, SeveritySummary?:array{CriticalCount?:int, HighCount?:int, MediumCount?:int, LowCount?:int, InformationalCount?:int, UnspecifiedCount?:int}}}>, NextToken?:string}>
     */
    public function listResourceComplianceSummaries(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array<array{Key?:string, Values?:array<string>, Type?:"EQUAL"|"NOT_EQUAL"|"BEGIN_WITH"|"LESS_THAN"|"GREATER_THAN"}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceComplianceSummaryItems?:array<array{ComplianceType?:string, ResourceType?:string, ResourceId?:string, Status?:"COMPLIANT"|"NON_COMPLIANT", OverallSeverity?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"INFORMATIONAL"|"UNSPECIFIED", ExecutionSummary?:array{ExecutionTime:int|string|\DateTimeInterface, ExecutionId?:string, ExecutionType?:string}, CompliantSummary?:array{CompliantCount?:int, SeveritySummary?:array{CriticalCount?:int, HighCount?:int, MediumCount?:int, LowCount?:int, InformationalCount?:int, UnspecifiedCount?:int}}, NonCompliantSummary?:array{NonCompliantCount?:int, SeveritySummary?:array{CriticalCount?:int, HighCount?:int, MediumCount?:int, LowCount?:int, InformationalCount?:int, UnspecifiedCount?:int}}}>, NextToken?:string}>
     */
    public function listResourceComplianceSummariesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SyncType?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ResourceDataSyncItems?:array<array{SyncName?:string, SyncType?:string, SyncSource?:array{SourceType?:string, AwsOrganizationsSource?:array{OrganizationSourceType:string, OrganizationalUnits?:array<array{OrganizationalUnitId?:string}>}, SourceRegions?:array<string>, IncludeFutureRegions?:bool, State?:string, EnableAllOpsDataSources?:bool}, S3Destination?:array{BucketName:string, Prefix?:string, SyncFormat:"JsonSerDe", Region:string, AWSKMSKeyARN?:string, DestinationDataSharing?:array{DestinationDataSharingType?:string}}, LastSyncTime?:int|string|\DateTimeInterface, LastSuccessfulSyncTime?:int|string|\DateTimeInterface, SyncLastModifiedTime?:int|string|\DateTimeInterface, LastStatus?:"Successful"|"Failed"|"InProgress", SyncCreatedTime?:int|string|\DateTimeInterface, LastSyncStatusMessage?:string}>, NextToken?:string}>
     */
    public function listResourceDataSync(array $args = []): \AWS\Result { }

    /**
     * @param array{SyncType?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceDataSyncItems?:array<array{SyncName?:string, SyncType?:string, SyncSource?:array{SourceType?:string, AwsOrganizationsSource?:array{OrganizationSourceType:string, OrganizationalUnits?:array<array{OrganizationalUnitId?:string}>}, SourceRegions?:array<string>, IncludeFutureRegions?:bool, State?:string, EnableAllOpsDataSources?:bool}, S3Destination?:array{BucketName:string, Prefix?:string, SyncFormat:"JsonSerDe", Region:string, AWSKMSKeyARN?:string, DestinationDataSharing?:array{DestinationDataSharingType?:string}}, LastSyncTime?:int|string|\DateTimeInterface, LastSuccessfulSyncTime?:int|string|\DateTimeInterface, SyncLastModifiedTime?:int|string|\DateTimeInterface, LastStatus?:"Successful"|"Failed"|"InProgress", SyncCreatedTime?:int|string|\DateTimeInterface, LastSyncStatusMessage?:string}>, NextToken?:string}>
     */
    public function listResourceDataSyncAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceType:"Document"|"ManagedInstance"|"MaintenanceWindow"|"Parameter"|"PatchBaseline"|"OpsItem"|"OpsMetadata"|"Automation"|"Association", ResourceId:string} $args
     * @return \AWS\Result<array{TagList?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceType:"Document"|"ManagedInstance"|"MaintenanceWindow"|"Parameter"|"PatchBaseline"|"OpsItem"|"OpsMetadata"|"Automation"|"Association", ResourceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TagList?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, PermissionType:"Share", AccountIdsToAdd?:array<string>, AccountIdsToRemove?:array<string>, SharedDocumentVersion?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function modifyDocumentPermission(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, PermissionType:"Share", AccountIdsToAdd?:array<string>, AccountIdsToRemove?:array<string>, SharedDocumentVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function modifyDocumentPermissionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, ResourceType:string, ComplianceType:string, ExecutionSummary:array{ExecutionTime:int|string|\DateTimeInterface, ExecutionId?:string, ExecutionType?:string}, Items:array<array{Id?:string, Title?:string, Severity:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"INFORMATIONAL"|"UNSPECIFIED", Status:"COMPLIANT"|"NON_COMPLIANT", Details?:array<string, string>}>, ItemContentHash?:string, UploadType?:"COMPLETE"|"PARTIAL"} $args
     * @return \AWS\Result<array{}>
     */
    public function putComplianceItems(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, ResourceType:string, ComplianceType:string, ExecutionSummary:array{ExecutionTime:int|string|\DateTimeInterface, ExecutionId?:string, ExecutionType?:string}, Items:array<array{Id?:string, Title?:string, Severity:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"INFORMATIONAL"|"UNSPECIFIED", Status:"COMPLIANT"|"NON_COMPLIANT", Details?:array<string, string>}>, ItemContentHash?:string, UploadType?:"COMPLETE"|"PARTIAL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putComplianceItemsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, Items:array<array{TypeName:string, SchemaVersion:string, CaptureTime:string, ContentHash?:string, Content?:array<array<string, string>>, Context?:array<string, string>}>} $args
     * @return \AWS\Result<array{Message?:string}>
     */
    public function putInventory(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, Items:array<array{TypeName:string, SchemaVersion:string, CaptureTime:string, ContentHash?:string, Content?:array<array<string, string>>, Context?:array<string, string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Message?:string}>
     */
    public function putInventoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Description?:string, Value:string, Type?:"String"|"StringList"|"SecureString", KeyId?:string, Overwrite?:bool, AllowedPattern?:string, Tags?:array<array{Key:string, Value:string}>, Tier?:"Standard"|"Advanced"|"Intelligent-Tiering", Policies?:string, DataType?:string} $args
     * @return \AWS\Result<array{Version?:int, Tier?:"Standard"|"Advanced"|"Intelligent-Tiering"}>
     */
    public function putParameter(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, Value:string, Type?:"String"|"StringList"|"SecureString", KeyId?:string, Overwrite?:bool, AllowedPattern?:string, Tags?:array<array{Key:string, Value:string}>, Tier?:"Standard"|"Advanced"|"Intelligent-Tiering", Policies?:string, DataType?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Version?:int, Tier?:"Standard"|"Advanced"|"Intelligent-Tiering"}>
     */
    public function putParameterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Policy:string, PolicyId?:string, PolicyHash?:string} $args
     * @return \AWS\Result<array{PolicyId?:string, PolicyHash?:string}>
     */
    public function putResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Policy:string, PolicyId?:string, PolicyHash?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PolicyId?:string, PolicyHash?:string}>
     */
    public function putResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BaselineId:string} $args
     * @return \AWS\Result<array{BaselineId?:string}>
     */
    public function registerDefaultPatchBaseline(array $args): \AWS\Result { }

    /**
     * @param array{BaselineId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BaselineId?:string}>
     */
    public function registerDefaultPatchBaselineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BaselineId:string, PatchGroup:string} $args
     * @return \AWS\Result<array{BaselineId?:string, PatchGroup?:string}>
     */
    public function registerPatchBaselineForPatchGroup(array $args): \AWS\Result { }

    /**
     * @param array{BaselineId:string, PatchGroup:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BaselineId?:string, PatchGroup?:string}>
     */
    public function registerPatchBaselineForPatchGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WindowId:string, ResourceType:"INSTANCE"|"RESOURCE_GROUP", Targets:array<array{Key?:string, Values?:array<string>}>, OwnerInformation?:string, Name?:string, Description?:string, ClientToken?:string} $args
     * @return \AWS\Result<array{WindowTargetId?:string}>
     */
    public function registerTargetWithMaintenanceWindow(array $args): \AWS\Result { }

    /**
     * @param array{WindowId:string, ResourceType:"INSTANCE"|"RESOURCE_GROUP", Targets:array<array{Key?:string, Values?:array<string>}>, OwnerInformation?:string, Name?:string, Description?:string, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WindowTargetId?:string}>
     */
    public function registerTargetWithMaintenanceWindowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WindowId:string, Targets?:array<array{Key?:string, Values?:array<string>}>, TaskArn:string, ServiceRoleArn?:string, TaskType:"RUN_COMMAND"|"AUTOMATION"|"STEP_FUNCTIONS"|"LAMBDA", TaskParameters?:array<string, array{Values?:array<string>}>, TaskInvocationParameters?:array{RunCommand?:array{Comment?:string, CloudWatchOutputConfig?:array{CloudWatchLogGroupName?:string, CloudWatchOutputEnabled?:bool}, DocumentHash?:string, DocumentHashType?:"Sha256"|"Sha1", DocumentVersion?:string, NotificationConfig?:array{NotificationArn?:string, NotificationEvents?:array<"All"|"InProgress"|"Success"|"TimedOut"|"Cancelled"|"Failed">, NotificationType?:"Command"|"Invocation"}, OutputS3BucketName?:string, OutputS3KeyPrefix?:string, Parameters?:array<string, array<string>>, ServiceRoleArn?:string, TimeoutSeconds?:int}, Automation?:array{DocumentVersion?:string, Parameters?:array<string, array<string>>}, StepFunctions?:array{Input?:string, Name?:string}, Lambda?:array{ClientContext?:string, Qualifier?:string, Payload?:string|resource|\Psr\Http\Message\StreamInterface}}, Priority?:int, MaxConcurrency?:string, MaxErrors?:string, LoggingInfo?:array{S3BucketName:string, S3KeyPrefix?:string, S3Region:string}, Name?:string, Description?:string, ClientToken?:string, CutoffBehavior?:"CONTINUE_TASK"|"CANCEL_TASK", AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}} $args
     * @return \AWS\Result<array{WindowTaskId?:string}>
     */
    public function registerTaskWithMaintenanceWindow(array $args): \AWS\Result { }

    /**
     * @param array{WindowId:string, Targets?:array<array{Key?:string, Values?:array<string>}>, TaskArn:string, ServiceRoleArn?:string, TaskType:"RUN_COMMAND"|"AUTOMATION"|"STEP_FUNCTIONS"|"LAMBDA", TaskParameters?:array<string, array{Values?:array<string>}>, TaskInvocationParameters?:array{RunCommand?:array{Comment?:string, CloudWatchOutputConfig?:array{CloudWatchLogGroupName?:string, CloudWatchOutputEnabled?:bool}, DocumentHash?:string, DocumentHashType?:"Sha256"|"Sha1", DocumentVersion?:string, NotificationConfig?:array{NotificationArn?:string, NotificationEvents?:array<"All"|"InProgress"|"Success"|"TimedOut"|"Cancelled"|"Failed">, NotificationType?:"Command"|"Invocation"}, OutputS3BucketName?:string, OutputS3KeyPrefix?:string, Parameters?:array<string, array<string>>, ServiceRoleArn?:string, TimeoutSeconds?:int}, Automation?:array{DocumentVersion?:string, Parameters?:array<string, array<string>>}, StepFunctions?:array{Input?:string, Name?:string}, Lambda?:array{ClientContext?:string, Qualifier?:string, Payload?:string|resource|\Psr\Http\Message\StreamInterface}}, Priority?:int, MaxConcurrency?:string, MaxErrors?:string, LoggingInfo?:array{S3BucketName:string, S3KeyPrefix?:string, S3Region:string}, Name?:string, Description?:string, ClientToken?:string, CutoffBehavior?:"CONTINUE_TASK"|"CANCEL_TASK", AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{WindowTaskId?:string}>
     */
    public function registerTaskWithMaintenanceWindowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceType:"Document"|"ManagedInstance"|"MaintenanceWindow"|"Parameter"|"PatchBaseline"|"OpsItem"|"OpsMetadata"|"Automation"|"Association", ResourceId:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function removeTagsFromResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceType:"Document"|"ManagedInstance"|"MaintenanceWindow"|"Parameter"|"PatchBaseline"|"OpsItem"|"OpsMetadata"|"Automation"|"Association", ResourceId:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function removeTagsFromResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SettingId:string} $args
     * @return \AWS\Result<array{ServiceSetting?:array{SettingId?:string, SettingValue?:string, LastModifiedDate?:int|string|\DateTimeInterface, LastModifiedUser?:string, ARN?:string, Status?:string}}>
     */
    public function resetServiceSetting(array $args): \AWS\Result { }

    /**
     * @param array{SettingId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServiceSetting?:array{SettingId?:string, SettingValue?:string, LastModifiedDate?:int|string|\DateTimeInterface, LastModifiedUser?:string, ARN?:string, Status?:string}}>
     */
    public function resetServiceSettingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SessionId:string} $args
     * @return \AWS\Result<array{SessionId?:string, TokenValue?:string, StreamUrl?:string}>
     */
    public function resumeSession(array $args): \AWS\Result { }

    /**
     * @param array{SessionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SessionId?:string, TokenValue?:string, StreamUrl?:string}>
     */
    public function resumeSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutomationExecutionId:string, SignalType:"Approve"|"Reject"|"StartStep"|"StopStep"|"Resume", Payload?:array<string, array<string>>} $args
     * @return \AWS\Result<array{}>
     */
    public function sendAutomationSignal(array $args): \AWS\Result { }

    /**
     * @param array{AutomationExecutionId:string, SignalType:"Approve"|"Reject"|"StartStep"|"StopStep"|"Resume", Payload?:array<string, array<string>>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function sendAutomationSignalAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceIds?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, DocumentName:string, DocumentVersion?:string, DocumentHash?:string, DocumentHashType?:"Sha256"|"Sha1", TimeoutSeconds?:int, Comment?:string, Parameters?:array<string, array<string>>, OutputS3Region?:string, OutputS3BucketName?:string, OutputS3KeyPrefix?:string, MaxConcurrency?:string, MaxErrors?:string, ServiceRoleArn?:string, NotificationConfig?:array{NotificationArn?:string, NotificationEvents?:array<"All"|"InProgress"|"Success"|"TimedOut"|"Cancelled"|"Failed">, NotificationType?:"Command"|"Invocation"}, CloudWatchOutputConfig?:array{CloudWatchLogGroupName?:string, CloudWatchOutputEnabled?:bool}, AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}} $args
     * @return \AWS\Result<array{Command?:array{CommandId?:string, DocumentName?:string, DocumentVersion?:string, Comment?:string, ExpiresAfter?:int|string|\DateTimeInterface, Parameters?:array<string, array<string>>, InstanceIds?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, RequestedDateTime?:int|string|\DateTimeInterface, Status?:"Pending"|"InProgress"|"Success"|"Cancelled"|"Failed"|"TimedOut"|"Cancelling", StatusDetails?:string, OutputS3Region?:string, OutputS3BucketName?:string, OutputS3KeyPrefix?:string, MaxConcurrency?:string, MaxErrors?:string, TargetCount?:int, CompletedCount?:int, ErrorCount?:int, DeliveryTimedOutCount?:int, ServiceRole?:string, NotificationConfig?:array{NotificationArn?:string, NotificationEvents?:array<"All"|"InProgress"|"Success"|"TimedOut"|"Cancelled"|"Failed">, NotificationType?:"Command"|"Invocation"}, CloudWatchOutputConfig?:array{CloudWatchLogGroupName?:string, CloudWatchOutputEnabled?:bool}, TimeoutSeconds?:int, AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, TriggeredAlarms?:array<array{Name:string, State:"UNKNOWN"|"ALARM"}>}}>
     */
    public function sendCommand(array $args): \AWS\Result { }

    /**
     * @param array{InstanceIds?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, DocumentName:string, DocumentVersion?:string, DocumentHash?:string, DocumentHashType?:"Sha256"|"Sha1", TimeoutSeconds?:int, Comment?:string, Parameters?:array<string, array<string>>, OutputS3Region?:string, OutputS3BucketName?:string, OutputS3KeyPrefix?:string, MaxConcurrency?:string, MaxErrors?:string, ServiceRoleArn?:string, NotificationConfig?:array{NotificationArn?:string, NotificationEvents?:array<"All"|"InProgress"|"Success"|"TimedOut"|"Cancelled"|"Failed">, NotificationType?:"Command"|"Invocation"}, CloudWatchOutputConfig?:array{CloudWatchLogGroupName?:string, CloudWatchOutputEnabled?:bool}, AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Command?:array{CommandId?:string, DocumentName?:string, DocumentVersion?:string, Comment?:string, ExpiresAfter?:int|string|\DateTimeInterface, Parameters?:array<string, array<string>>, InstanceIds?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, RequestedDateTime?:int|string|\DateTimeInterface, Status?:"Pending"|"InProgress"|"Success"|"Cancelled"|"Failed"|"TimedOut"|"Cancelling", StatusDetails?:string, OutputS3Region?:string, OutputS3BucketName?:string, OutputS3KeyPrefix?:string, MaxConcurrency?:string, MaxErrors?:string, TargetCount?:int, CompletedCount?:int, ErrorCount?:int, DeliveryTimedOutCount?:int, ServiceRole?:string, NotificationConfig?:array{NotificationArn?:string, NotificationEvents?:array<"All"|"InProgress"|"Success"|"TimedOut"|"Cancelled"|"Failed">, NotificationType?:"Command"|"Invocation"}, CloudWatchOutputConfig?:array{CloudWatchLogGroupName?:string, CloudWatchOutputEnabled?:bool}, TimeoutSeconds?:int, AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, TriggeredAlarms?:array<array{Name:string, State:"UNKNOWN"|"ALARM"}>}}>
     */
    public function sendCommandAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AssociationIds:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function startAssociationsOnce(array $args): \AWS\Result { }

    /**
     * @param array{AssociationIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function startAssociationsOnceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DocumentName:string, DocumentVersion?:string, Parameters?:array<string, array<string>>, ClientToken?:string, Mode?:"Auto"|"Interactive", TargetParameterName?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetMaps?:array<array<string, array<string>>>, MaxConcurrency?:string, MaxErrors?:string, TargetLocations?:array<array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}>, Tags?:array<array{Key:string, Value:string}>, AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, TargetLocationsURL?:string} $args
     * @return \AWS\Result<array{AutomationExecutionId?:string}>
     */
    public function startAutomationExecution(array $args): \AWS\Result { }

    /**
     * @param array{DocumentName:string, DocumentVersion?:string, Parameters?:array<string, array<string>>, ClientToken?:string, Mode?:"Auto"|"Interactive", TargetParameterName?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetMaps?:array<array<string, array<string>>>, MaxConcurrency?:string, MaxErrors?:string, TargetLocations?:array<array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}>, Tags?:array<array{Key:string, Value:string}>, AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, TargetLocationsURL?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AutomationExecutionId?:string}>
     */
    public function startAutomationExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ScheduledTime?:int|string|\DateTimeInterface, DocumentName:string, DocumentVersion?:string, Parameters?:array<string, array<string>>, ChangeRequestName?:string, ClientToken?:string, AutoApprove?:bool, Runbooks:array<array{DocumentName:string, DocumentVersion?:string, Parameters?:array<string, array<string>>, TargetParameterName?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetMaps?:array<array<string, array<string>>>, MaxConcurrency?:string, MaxErrors?:string, TargetLocations?:array<array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}>}>, Tags?:array<array{Key:string, Value:string}>, ScheduledEndTime?:int|string|\DateTimeInterface, ChangeDetails?:string} $args
     * @return \AWS\Result<array{AutomationExecutionId?:string}>
     */
    public function startChangeRequestExecution(array $args): \AWS\Result { }

    /**
     * @param array{ScheduledTime?:int|string|\DateTimeInterface, DocumentName:string, DocumentVersion?:string, Parameters?:array<string, array<string>>, ChangeRequestName?:string, ClientToken?:string, AutoApprove?:bool, Runbooks:array<array{DocumentName:string, DocumentVersion?:string, Parameters?:array<string, array<string>>, TargetParameterName?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetMaps?:array<array<string, array<string>>>, MaxConcurrency?:string, MaxErrors?:string, TargetLocations?:array<array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}>}>, Tags?:array<array{Key:string, Value:string}>, ScheduledEndTime?:int|string|\DateTimeInterface, ChangeDetails?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AutomationExecutionId?:string}>
     */
    public function startChangeRequestExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DocumentName:string, DocumentVersion?:string, ExecutionInputs?:array{Automation?:array{Parameters?:array<string, array<string>>, TargetParameterName?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetMaps?:array<array<string, array<string>>>, TargetLocations?:array<array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}>, TargetLocationsURL?:string}}} $args
     * @return \AWS\Result<array{ExecutionPreviewId?:string}>
     */
    public function startExecutionPreview(array $args): \AWS\Result { }

    /**
     * @param array{DocumentName:string, DocumentVersion?:string, ExecutionInputs?:array{Automation?:array{Parameters?:array<string, array<string>>, TargetParameterName?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetMaps?:array<array<string, array<string>>>, TargetLocations?:array<array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}>, TargetLocationsURL?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ExecutionPreviewId?:string}>
     */
    public function startExecutionPreviewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Target:string, DocumentName?:string, Reason?:string, Parameters?:array<string, array<string>>} $args
     * @return \AWS\Result<array{SessionId?:string, TokenValue?:string, StreamUrl?:string}>
     */
    public function startSession(array $args): \AWS\Result { }

    /**
     * @param array{Target:string, DocumentName?:string, Reason?:string, Parameters?:array<string, array<string>>} $args
     * @return \GuzzleHttp\Promise\Promise<array{SessionId?:string, TokenValue?:string, StreamUrl?:string}>
     */
    public function startSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutomationExecutionId:string, Type?:"Complete"|"Cancel"} $args
     * @return \AWS\Result<array{}>
     */
    public function stopAutomationExecution(array $args): \AWS\Result { }

    /**
     * @param array{AutomationExecutionId:string, Type?:"Complete"|"Cancel"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopAutomationExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SessionId:string} $args
     * @return \AWS\Result<array{SessionId?:string}>
     */
    public function terminateSession(array $args): \AWS\Result { }

    /**
     * @param array{SessionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SessionId?:string}>
     */
    public function terminateSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, ParameterVersion:int, Labels:array<string>} $args
     * @return \AWS\Result<array{RemovedLabels?:array<string>, InvalidLabels?:array<string>}>
     */
    public function unlabelParameterVersion(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, ParameterVersion:int, Labels:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{RemovedLabels?:array<string>, InvalidLabels?:array<string>}>
     */
    public function unlabelParameterVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AssociationId:string, Parameters?:array<string, array<string>>, DocumentVersion?:string, ScheduleExpression?:string, OutputLocation?:array{S3Location?:array{OutputS3Region?:string, OutputS3BucketName?:string, OutputS3KeyPrefix?:string}}, Name?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, AssociationName?:string, AssociationVersion?:string, AutomationTargetParameterName?:string, MaxErrors?:string, MaxConcurrency?:string, ComplianceSeverity?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"UNSPECIFIED", SyncCompliance?:"AUTO"|"MANUAL", ApplyOnlyAtCronInterval?:bool, CalendarNames?:array<string>, TargetLocations?:array<array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}>, ScheduleOffset?:int, Duration?:int, TargetMaps?:array<array<string, array<string>>>, AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}} $args
     * @return \AWS\Result<array{AssociationDescription?:array{Name?:string, InstanceId?:string, AssociationVersion?:string, Date?:int|string|\DateTimeInterface, LastUpdateAssociationDate?:int|string|\DateTimeInterface, Status?:array{Date:int|string|\DateTimeInterface, Name:"Pending"|"Success"|"Failed", Message:string, AdditionalInfo?:string}, Overview?:array{Status?:string, DetailedStatus?:string, AssociationStatusAggregatedCount?:array<string, int>}, DocumentVersion?:string, AutomationTargetParameterName?:string, Parameters?:array<string, array<string>>, AssociationId?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, ScheduleExpression?:string, OutputLocation?:array{S3Location?:array{OutputS3Region?:string, OutputS3BucketName?:string, OutputS3KeyPrefix?:string}}, LastExecutionDate?:int|string|\DateTimeInterface, LastSuccessfulExecutionDate?:int|string|\DateTimeInterface, AssociationName?:string, MaxErrors?:string, MaxConcurrency?:string, ComplianceSeverity?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"UNSPECIFIED", SyncCompliance?:"AUTO"|"MANUAL", ApplyOnlyAtCronInterval?:bool, CalendarNames?:array<string>, TargetLocations?:array<array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}>, ScheduleOffset?:int, Duration?:int, TargetMaps?:array<array<string, array<string>>>, AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, TriggeredAlarms?:array<array{Name:string, State:"UNKNOWN"|"ALARM"}>}}>
     */
    public function updateAssociation(array $args): \AWS\Result { }

    /**
     * @param array{AssociationId:string, Parameters?:array<string, array<string>>, DocumentVersion?:string, ScheduleExpression?:string, OutputLocation?:array{S3Location?:array{OutputS3Region?:string, OutputS3BucketName?:string, OutputS3KeyPrefix?:string}}, Name?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, AssociationName?:string, AssociationVersion?:string, AutomationTargetParameterName?:string, MaxErrors?:string, MaxConcurrency?:string, ComplianceSeverity?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"UNSPECIFIED", SyncCompliance?:"AUTO"|"MANUAL", ApplyOnlyAtCronInterval?:bool, CalendarNames?:array<string>, TargetLocations?:array<array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}>, ScheduleOffset?:int, Duration?:int, TargetMaps?:array<array<string, array<string>>>, AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{AssociationDescription?:array{Name?:string, InstanceId?:string, AssociationVersion?:string, Date?:int|string|\DateTimeInterface, LastUpdateAssociationDate?:int|string|\DateTimeInterface, Status?:array{Date:int|string|\DateTimeInterface, Name:"Pending"|"Success"|"Failed", Message:string, AdditionalInfo?:string}, Overview?:array{Status?:string, DetailedStatus?:string, AssociationStatusAggregatedCount?:array<string, int>}, DocumentVersion?:string, AutomationTargetParameterName?:string, Parameters?:array<string, array<string>>, AssociationId?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, ScheduleExpression?:string, OutputLocation?:array{S3Location?:array{OutputS3Region?:string, OutputS3BucketName?:string, OutputS3KeyPrefix?:string}}, LastExecutionDate?:int|string|\DateTimeInterface, LastSuccessfulExecutionDate?:int|string|\DateTimeInterface, AssociationName?:string, MaxErrors?:string, MaxConcurrency?:string, ComplianceSeverity?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"UNSPECIFIED", SyncCompliance?:"AUTO"|"MANUAL", ApplyOnlyAtCronInterval?:bool, CalendarNames?:array<string>, TargetLocations?:array<array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}>, ScheduleOffset?:int, Duration?:int, TargetMaps?:array<array<string, array<string>>>, AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, TriggeredAlarms?:array<array{Name:string, State:"UNKNOWN"|"ALARM"}>}}>
     */
    public function updateAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, InstanceId:string, AssociationStatus:array{Date:int|string|\DateTimeInterface, Name:"Pending"|"Success"|"Failed", Message:string, AdditionalInfo?:string}} $args
     * @return \AWS\Result<array{AssociationDescription?:array{Name?:string, InstanceId?:string, AssociationVersion?:string, Date?:int|string|\DateTimeInterface, LastUpdateAssociationDate?:int|string|\DateTimeInterface, Status?:array{Date:int|string|\DateTimeInterface, Name:"Pending"|"Success"|"Failed", Message:string, AdditionalInfo?:string}, Overview?:array{Status?:string, DetailedStatus?:string, AssociationStatusAggregatedCount?:array<string, int>}, DocumentVersion?:string, AutomationTargetParameterName?:string, Parameters?:array<string, array<string>>, AssociationId?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, ScheduleExpression?:string, OutputLocation?:array{S3Location?:array{OutputS3Region?:string, OutputS3BucketName?:string, OutputS3KeyPrefix?:string}}, LastExecutionDate?:int|string|\DateTimeInterface, LastSuccessfulExecutionDate?:int|string|\DateTimeInterface, AssociationName?:string, MaxErrors?:string, MaxConcurrency?:string, ComplianceSeverity?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"UNSPECIFIED", SyncCompliance?:"AUTO"|"MANUAL", ApplyOnlyAtCronInterval?:bool, CalendarNames?:array<string>, TargetLocations?:array<array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}>, ScheduleOffset?:int, Duration?:int, TargetMaps?:array<array<string, array<string>>>, AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, TriggeredAlarms?:array<array{Name:string, State:"UNKNOWN"|"ALARM"}>}}>
     */
    public function updateAssociationStatus(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, InstanceId:string, AssociationStatus:array{Date:int|string|\DateTimeInterface, Name:"Pending"|"Success"|"Failed", Message:string, AdditionalInfo?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{AssociationDescription?:array{Name?:string, InstanceId?:string, AssociationVersion?:string, Date?:int|string|\DateTimeInterface, LastUpdateAssociationDate?:int|string|\DateTimeInterface, Status?:array{Date:int|string|\DateTimeInterface, Name:"Pending"|"Success"|"Failed", Message:string, AdditionalInfo?:string}, Overview?:array{Status?:string, DetailedStatus?:string, AssociationStatusAggregatedCount?:array<string, int>}, DocumentVersion?:string, AutomationTargetParameterName?:string, Parameters?:array<string, array<string>>, AssociationId?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, ScheduleExpression?:string, OutputLocation?:array{S3Location?:array{OutputS3Region?:string, OutputS3BucketName?:string, OutputS3KeyPrefix?:string}}, LastExecutionDate?:int|string|\DateTimeInterface, LastSuccessfulExecutionDate?:int|string|\DateTimeInterface, AssociationName?:string, MaxErrors?:string, MaxConcurrency?:string, ComplianceSeverity?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"UNSPECIFIED", SyncCompliance?:"AUTO"|"MANUAL", ApplyOnlyAtCronInterval?:bool, CalendarNames?:array<string>, TargetLocations?:array<array{Accounts?:array<string>, Regions?:array<string>, TargetLocationMaxConcurrency?:string, TargetLocationMaxErrors?:string, ExecutionRoleName?:string, TargetLocationAlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, IncludeChildOrganizationUnits?:bool, ExcludeAccounts?:array<string>, Targets?:array<array{Key?:string, Values?:array<string>}>, TargetsMaxConcurrency?:string, TargetsMaxErrors?:string}>, ScheduleOffset?:int, Duration?:int, TargetMaps?:array<array<string, array<string>>>, AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}, TriggeredAlarms?:array<array{Name:string, State:"UNKNOWN"|"ALARM"}>}}>
     */
    public function updateAssociationStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Content:string, Attachments?:array<array{Key?:"SourceUrl"|"S3FileUrl"|"AttachmentReference", Values?:array<string>, Name?:string}>, Name:string, DisplayName?:string, VersionName?:string, DocumentVersion?:string, DocumentFormat?:"YAML"|"JSON"|"TEXT", TargetType?:string} $args
     * @return \AWS\Result<array{DocumentDescription?:array{Sha1?:string, Hash?:string, HashType?:"Sha256"|"Sha1", Name?:string, DisplayName?:string, VersionName?:string, Owner?:string, CreatedDate?:int|string|\DateTimeInterface, Status?:"Creating"|"Active"|"Updating"|"Deleting"|"Failed", StatusInformation?:string, DocumentVersion?:string, Description?:string, Parameters?:array<array{Name?:string, Type?:"String"|"StringList", Description?:string, DefaultValue?:string}>, PlatformTypes?:array<"Windows"|"Linux"|"MacOS">, DocumentType?:"Command"|"Policy"|"Automation"|"Session"|"Package"|"ApplicationConfiguration"|"ApplicationConfigurationSchema"|"DeploymentStrategy"|"ChangeCalendar"|"Automation.ChangeTemplate"|"ProblemAnalysis"|"ProblemAnalysisTemplate"|"CloudFormation"|"ConformancePackTemplate"|"QuickSetup", SchemaVersion?:string, LatestVersion?:string, DefaultVersion?:string, DocumentFormat?:"YAML"|"JSON"|"TEXT", TargetType?:string, Tags?:array<array{Key:string, Value:string}>, AttachmentsInformation?:array<array{Name?:string}>, Requires?:array<array{Name:string, Version?:string, RequireType?:string, VersionName?:string}>, Author?:string, ReviewInformation?:array<array{ReviewedTime?:int|string|\DateTimeInterface, Status?:"APPROVED"|"NOT_REVIEWED"|"PENDING"|"REJECTED", Reviewer?:string}>, ApprovedVersion?:string, PendingReviewVersion?:string, ReviewStatus?:"APPROVED"|"NOT_REVIEWED"|"PENDING"|"REJECTED", Category?:array<string>, CategoryEnum?:array<string>}}>
     */
    public function updateDocument(array $args): \AWS\Result { }

    /**
     * @param array{Content:string, Attachments?:array<array{Key?:"SourceUrl"|"S3FileUrl"|"AttachmentReference", Values?:array<string>, Name?:string}>, Name:string, DisplayName?:string, VersionName?:string, DocumentVersion?:string, DocumentFormat?:"YAML"|"JSON"|"TEXT", TargetType?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DocumentDescription?:array{Sha1?:string, Hash?:string, HashType?:"Sha256"|"Sha1", Name?:string, DisplayName?:string, VersionName?:string, Owner?:string, CreatedDate?:int|string|\DateTimeInterface, Status?:"Creating"|"Active"|"Updating"|"Deleting"|"Failed", StatusInformation?:string, DocumentVersion?:string, Description?:string, Parameters?:array<array{Name?:string, Type?:"String"|"StringList", Description?:string, DefaultValue?:string}>, PlatformTypes?:array<"Windows"|"Linux"|"MacOS">, DocumentType?:"Command"|"Policy"|"Automation"|"Session"|"Package"|"ApplicationConfiguration"|"ApplicationConfigurationSchema"|"DeploymentStrategy"|"ChangeCalendar"|"Automation.ChangeTemplate"|"ProblemAnalysis"|"ProblemAnalysisTemplate"|"CloudFormation"|"ConformancePackTemplate"|"QuickSetup", SchemaVersion?:string, LatestVersion?:string, DefaultVersion?:string, DocumentFormat?:"YAML"|"JSON"|"TEXT", TargetType?:string, Tags?:array<array{Key:string, Value:string}>, AttachmentsInformation?:array<array{Name?:string}>, Requires?:array<array{Name:string, Version?:string, RequireType?:string, VersionName?:string}>, Author?:string, ReviewInformation?:array<array{ReviewedTime?:int|string|\DateTimeInterface, Status?:"APPROVED"|"NOT_REVIEWED"|"PENDING"|"REJECTED", Reviewer?:string}>, ApprovedVersion?:string, PendingReviewVersion?:string, ReviewStatus?:"APPROVED"|"NOT_REVIEWED"|"PENDING"|"REJECTED", Category?:array<string>, CategoryEnum?:array<string>}}>
     */
    public function updateDocumentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, DocumentVersion:string} $args
     * @return \AWS\Result<array{Description?:array{Name?:string, DefaultVersion?:string, DefaultVersionName?:string}}>
     */
    public function updateDocumentDefaultVersion(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, DocumentVersion:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Description?:array{Name?:string, DefaultVersion?:string, DefaultVersionName?:string}}>
     */
    public function updateDocumentDefaultVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, DocumentVersion?:string, DocumentReviews:array{Action:"SendForReview"|"UpdateReview"|"Approve"|"Reject", Comment?:array<array{Type?:"Comment", Content?:string}>}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateDocumentMetadata(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, DocumentVersion?:string, DocumentReviews:array{Action:"SendForReview"|"UpdateReview"|"Approve"|"Reject", Comment?:array<array{Type?:"Comment", Content?:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateDocumentMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WindowId:string, Name?:string, Description?:string, StartDate?:string, EndDate?:string, Schedule?:string, ScheduleTimezone?:string, ScheduleOffset?:int, Duration?:int, Cutoff?:int, AllowUnassociatedTargets?:bool, Enabled?:bool, Replace?:bool} $args
     * @return \AWS\Result<array{WindowId?:string, Name?:string, Description?:string, StartDate?:string, EndDate?:string, Schedule?:string, ScheduleTimezone?:string, ScheduleOffset?:int, Duration?:int, Cutoff?:int, AllowUnassociatedTargets?:bool, Enabled?:bool}>
     */
    public function updateMaintenanceWindow(array $args): \AWS\Result { }

    /**
     * @param array{WindowId:string, Name?:string, Description?:string, StartDate?:string, EndDate?:string, Schedule?:string, ScheduleTimezone?:string, ScheduleOffset?:int, Duration?:int, Cutoff?:int, AllowUnassociatedTargets?:bool, Enabled?:bool, Replace?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{WindowId?:string, Name?:string, Description?:string, StartDate?:string, EndDate?:string, Schedule?:string, ScheduleTimezone?:string, ScheduleOffset?:int, Duration?:int, Cutoff?:int, AllowUnassociatedTargets?:bool, Enabled?:bool}>
     */
    public function updateMaintenanceWindowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WindowId:string, WindowTargetId:string, Targets?:array<array{Key?:string, Values?:array<string>}>, OwnerInformation?:string, Name?:string, Description?:string, Replace?:bool} $args
     * @return \AWS\Result<array{WindowId?:string, WindowTargetId?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, OwnerInformation?:string, Name?:string, Description?:string}>
     */
    public function updateMaintenanceWindowTarget(array $args): \AWS\Result { }

    /**
     * @param array{WindowId:string, WindowTargetId:string, Targets?:array<array{Key?:string, Values?:array<string>}>, OwnerInformation?:string, Name?:string, Description?:string, Replace?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{WindowId?:string, WindowTargetId?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, OwnerInformation?:string, Name?:string, Description?:string}>
     */
    public function updateMaintenanceWindowTargetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WindowId:string, WindowTaskId:string, Targets?:array<array{Key?:string, Values?:array<string>}>, TaskArn?:string, ServiceRoleArn?:string, TaskParameters?:array<string, array{Values?:array<string>}>, TaskInvocationParameters?:array{RunCommand?:array{Comment?:string, CloudWatchOutputConfig?:array{CloudWatchLogGroupName?:string, CloudWatchOutputEnabled?:bool}, DocumentHash?:string, DocumentHashType?:"Sha256"|"Sha1", DocumentVersion?:string, NotificationConfig?:array{NotificationArn?:string, NotificationEvents?:array<"All"|"InProgress"|"Success"|"TimedOut"|"Cancelled"|"Failed">, NotificationType?:"Command"|"Invocation"}, OutputS3BucketName?:string, OutputS3KeyPrefix?:string, Parameters?:array<string, array<string>>, ServiceRoleArn?:string, TimeoutSeconds?:int}, Automation?:array{DocumentVersion?:string, Parameters?:array<string, array<string>>}, StepFunctions?:array{Input?:string, Name?:string}, Lambda?:array{ClientContext?:string, Qualifier?:string, Payload?:string|resource|\Psr\Http\Message\StreamInterface}}, Priority?:int, MaxConcurrency?:string, MaxErrors?:string, LoggingInfo?:array{S3BucketName:string, S3KeyPrefix?:string, S3Region:string}, Name?:string, Description?:string, Replace?:bool, CutoffBehavior?:"CONTINUE_TASK"|"CANCEL_TASK", AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}} $args
     * @return \AWS\Result<array{WindowId?:string, WindowTaskId?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, TaskArn?:string, ServiceRoleArn?:string, TaskParameters?:array<string, array{Values?:array<string>}>, TaskInvocationParameters?:array{RunCommand?:array{Comment?:string, CloudWatchOutputConfig?:array{CloudWatchLogGroupName?:string, CloudWatchOutputEnabled?:bool}, DocumentHash?:string, DocumentHashType?:"Sha256"|"Sha1", DocumentVersion?:string, NotificationConfig?:array{NotificationArn?:string, NotificationEvents?:array<"All"|"InProgress"|"Success"|"TimedOut"|"Cancelled"|"Failed">, NotificationType?:"Command"|"Invocation"}, OutputS3BucketName?:string, OutputS3KeyPrefix?:string, Parameters?:array<string, array<string>>, ServiceRoleArn?:string, TimeoutSeconds?:int}, Automation?:array{DocumentVersion?:string, Parameters?:array<string, array<string>>}, StepFunctions?:array{Input?:string, Name?:string}, Lambda?:array{ClientContext?:string, Qualifier?:string, Payload?:string|resource|\Psr\Http\Message\StreamInterface}}, Priority?:int, MaxConcurrency?:string, MaxErrors?:string, LoggingInfo?:array{S3BucketName:string, S3KeyPrefix?:string, S3Region:string}, Name?:string, Description?:string, CutoffBehavior?:"CONTINUE_TASK"|"CANCEL_TASK", AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}}>
     */
    public function updateMaintenanceWindowTask(array $args): \AWS\Result { }

    /**
     * @param array{WindowId:string, WindowTaskId:string, Targets?:array<array{Key?:string, Values?:array<string>}>, TaskArn?:string, ServiceRoleArn?:string, TaskParameters?:array<string, array{Values?:array<string>}>, TaskInvocationParameters?:array{RunCommand?:array{Comment?:string, CloudWatchOutputConfig?:array{CloudWatchLogGroupName?:string, CloudWatchOutputEnabled?:bool}, DocumentHash?:string, DocumentHashType?:"Sha256"|"Sha1", DocumentVersion?:string, NotificationConfig?:array{NotificationArn?:string, NotificationEvents?:array<"All"|"InProgress"|"Success"|"TimedOut"|"Cancelled"|"Failed">, NotificationType?:"Command"|"Invocation"}, OutputS3BucketName?:string, OutputS3KeyPrefix?:string, Parameters?:array<string, array<string>>, ServiceRoleArn?:string, TimeoutSeconds?:int}, Automation?:array{DocumentVersion?:string, Parameters?:array<string, array<string>>}, StepFunctions?:array{Input?:string, Name?:string}, Lambda?:array{ClientContext?:string, Qualifier?:string, Payload?:string|resource|\Psr\Http\Message\StreamInterface}}, Priority?:int, MaxConcurrency?:string, MaxErrors?:string, LoggingInfo?:array{S3BucketName:string, S3KeyPrefix?:string, S3Region:string}, Name?:string, Description?:string, Replace?:bool, CutoffBehavior?:"CONTINUE_TASK"|"CANCEL_TASK", AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{WindowId?:string, WindowTaskId?:string, Targets?:array<array{Key?:string, Values?:array<string>}>, TaskArn?:string, ServiceRoleArn?:string, TaskParameters?:array<string, array{Values?:array<string>}>, TaskInvocationParameters?:array{RunCommand?:array{Comment?:string, CloudWatchOutputConfig?:array{CloudWatchLogGroupName?:string, CloudWatchOutputEnabled?:bool}, DocumentHash?:string, DocumentHashType?:"Sha256"|"Sha1", DocumentVersion?:string, NotificationConfig?:array{NotificationArn?:string, NotificationEvents?:array<"All"|"InProgress"|"Success"|"TimedOut"|"Cancelled"|"Failed">, NotificationType?:"Command"|"Invocation"}, OutputS3BucketName?:string, OutputS3KeyPrefix?:string, Parameters?:array<string, array<string>>, ServiceRoleArn?:string, TimeoutSeconds?:int}, Automation?:array{DocumentVersion?:string, Parameters?:array<string, array<string>>}, StepFunctions?:array{Input?:string, Name?:string}, Lambda?:array{ClientContext?:string, Qualifier?:string, Payload?:string|resource|\Psr\Http\Message\StreamInterface}}, Priority?:int, MaxConcurrency?:string, MaxErrors?:string, LoggingInfo?:array{S3BucketName:string, S3KeyPrefix?:string, S3Region:string}, Name?:string, Description?:string, CutoffBehavior?:"CONTINUE_TASK"|"CANCEL_TASK", AlarmConfiguration?:array{IgnorePollAlarmFailure?:bool, Alarms:array<array{Name:string}>}}>
     */
    public function updateMaintenanceWindowTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, IamRole:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateManagedInstanceRole(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, IamRole:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateManagedInstanceRoleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Description?:string, OperationalData?:array<string, array{Value?:string, Type?:"SearchableString"|"String"}>, OperationalDataToDelete?:array<string>, Notifications?:array<array{Arn?:string}>, Priority?:int, RelatedOpsItems?:array<array{OpsItemId:string}>, Status?:"Open"|"InProgress"|"Resolved"|"Pending"|"TimedOut"|"Cancelling"|"Cancelled"|"Failed"|"CompletedWithSuccess"|"CompletedWithFailure"|"Scheduled"|"RunbookInProgress"|"PendingChangeCalendarOverride"|"ChangeCalendarOverrideApproved"|"ChangeCalendarOverrideRejected"|"PendingApproval"|"Approved"|"Rejected"|"Closed", OpsItemId:string, Title?:string, Category?:string, Severity?:string, ActualStartTime?:int|string|\DateTimeInterface, ActualEndTime?:int|string|\DateTimeInterface, PlannedStartTime?:int|string|\DateTimeInterface, PlannedEndTime?:int|string|\DateTimeInterface, OpsItemArn?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateOpsItem(array $args): \AWS\Result { }

    /**
     * @param array{Description?:string, OperationalData?:array<string, array{Value?:string, Type?:"SearchableString"|"String"}>, OperationalDataToDelete?:array<string>, Notifications?:array<array{Arn?:string}>, Priority?:int, RelatedOpsItems?:array<array{OpsItemId:string}>, Status?:"Open"|"InProgress"|"Resolved"|"Pending"|"TimedOut"|"Cancelling"|"Cancelled"|"Failed"|"CompletedWithSuccess"|"CompletedWithFailure"|"Scheduled"|"RunbookInProgress"|"PendingChangeCalendarOverride"|"ChangeCalendarOverrideApproved"|"ChangeCalendarOverrideRejected"|"PendingApproval"|"Approved"|"Rejected"|"Closed", OpsItemId:string, Title?:string, Category?:string, Severity?:string, ActualStartTime?:int|string|\DateTimeInterface, ActualEndTime?:int|string|\DateTimeInterface, PlannedStartTime?:int|string|\DateTimeInterface, PlannedEndTime?:int|string|\DateTimeInterface, OpsItemArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateOpsItemAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OpsMetadataArn:string, MetadataToUpdate?:array<string, array{Value?:string}>, KeysToDelete?:array<string>} $args
     * @return \AWS\Result<array{OpsMetadataArn?:string}>
     */
    public function updateOpsMetadata(array $args): \AWS\Result { }

    /**
     * @param array{OpsMetadataArn:string, MetadataToUpdate?:array<string, array{Value?:string}>, KeysToDelete?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{OpsMetadataArn?:string}>
     */
    public function updateOpsMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BaselineId:string, Name?:string, GlobalFilters?:array{PatchFilters:array<array{Key:"ARCH"|"ADVISORY_ID"|"BUGZILLA_ID"|"PATCH_SET"|"PRODUCT"|"PRODUCT_FAMILY"|"CLASSIFICATION"|"CVE_ID"|"EPOCH"|"MSRC_SEVERITY"|"NAME"|"PATCH_ID"|"SECTION"|"PRIORITY"|"REPOSITORY"|"RELEASE"|"SEVERITY"|"SECURITY"|"VERSION", Values:array<string>}>}, ApprovalRules?:array{PatchRules:array<array{PatchFilterGroup:array{PatchFilters:array<array{Key:"ARCH"|"ADVISORY_ID"|"BUGZILLA_ID"|"PATCH_SET"|"PRODUCT"|"PRODUCT_FAMILY"|"CLASSIFICATION"|"CVE_ID"|"EPOCH"|"MSRC_SEVERITY"|"NAME"|"PATCH_ID"|"SECTION"|"PRIORITY"|"REPOSITORY"|"RELEASE"|"SEVERITY"|"SECURITY"|"VERSION", Values:array<string>}>}, ComplianceLevel?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"INFORMATIONAL"|"UNSPECIFIED", ApproveAfterDays?:int, ApproveUntilDate?:string, EnableNonSecurity?:bool}>}, ApprovedPatches?:array<string>, ApprovedPatchesComplianceLevel?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"INFORMATIONAL"|"UNSPECIFIED", ApprovedPatchesEnableNonSecurity?:bool, RejectedPatches?:array<string>, RejectedPatchesAction?:"ALLOW_AS_DEPENDENCY"|"BLOCK", Description?:string, Sources?:array<array{Name:string, Products:array<string>, Configuration:string}>, Replace?:bool} $args
     * @return \AWS\Result<array{BaselineId?:string, Name?:string, OperatingSystem?:"WINDOWS"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"AMAZON_LINUX_2022"|"UBUNTU"|"REDHAT_ENTERPRISE_LINUX"|"SUSE"|"CENTOS"|"ORACLE_LINUX"|"DEBIAN"|"MACOS"|"RASPBIAN"|"ROCKY_LINUX"|"ALMA_LINUX"|"AMAZON_LINUX_2023", GlobalFilters?:array{PatchFilters:array<array{Key:"ARCH"|"ADVISORY_ID"|"BUGZILLA_ID"|"PATCH_SET"|"PRODUCT"|"PRODUCT_FAMILY"|"CLASSIFICATION"|"CVE_ID"|"EPOCH"|"MSRC_SEVERITY"|"NAME"|"PATCH_ID"|"SECTION"|"PRIORITY"|"REPOSITORY"|"RELEASE"|"SEVERITY"|"SECURITY"|"VERSION", Values:array<string>}>}, ApprovalRules?:array{PatchRules:array<array{PatchFilterGroup:array{PatchFilters:array<array{Key:"ARCH"|"ADVISORY_ID"|"BUGZILLA_ID"|"PATCH_SET"|"PRODUCT"|"PRODUCT_FAMILY"|"CLASSIFICATION"|"CVE_ID"|"EPOCH"|"MSRC_SEVERITY"|"NAME"|"PATCH_ID"|"SECTION"|"PRIORITY"|"REPOSITORY"|"RELEASE"|"SEVERITY"|"SECURITY"|"VERSION", Values:array<string>}>}, ComplianceLevel?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"INFORMATIONAL"|"UNSPECIFIED", ApproveAfterDays?:int, ApproveUntilDate?:string, EnableNonSecurity?:bool}>}, ApprovedPatches?:array<string>, ApprovedPatchesComplianceLevel?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"INFORMATIONAL"|"UNSPECIFIED", ApprovedPatchesEnableNonSecurity?:bool, RejectedPatches?:array<string>, RejectedPatchesAction?:"ALLOW_AS_DEPENDENCY"|"BLOCK", CreatedDate?:int|string|\DateTimeInterface, ModifiedDate?:int|string|\DateTimeInterface, Description?:string, Sources?:array<array{Name:string, Products:array<string>, Configuration:string}>}>
     */
    public function updatePatchBaseline(array $args): \AWS\Result { }

    /**
     * @param array{BaselineId:string, Name?:string, GlobalFilters?:array{PatchFilters:array<array{Key:"ARCH"|"ADVISORY_ID"|"BUGZILLA_ID"|"PATCH_SET"|"PRODUCT"|"PRODUCT_FAMILY"|"CLASSIFICATION"|"CVE_ID"|"EPOCH"|"MSRC_SEVERITY"|"NAME"|"PATCH_ID"|"SECTION"|"PRIORITY"|"REPOSITORY"|"RELEASE"|"SEVERITY"|"SECURITY"|"VERSION", Values:array<string>}>}, ApprovalRules?:array{PatchRules:array<array{PatchFilterGroup:array{PatchFilters:array<array{Key:"ARCH"|"ADVISORY_ID"|"BUGZILLA_ID"|"PATCH_SET"|"PRODUCT"|"PRODUCT_FAMILY"|"CLASSIFICATION"|"CVE_ID"|"EPOCH"|"MSRC_SEVERITY"|"NAME"|"PATCH_ID"|"SECTION"|"PRIORITY"|"REPOSITORY"|"RELEASE"|"SEVERITY"|"SECURITY"|"VERSION", Values:array<string>}>}, ComplianceLevel?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"INFORMATIONAL"|"UNSPECIFIED", ApproveAfterDays?:int, ApproveUntilDate?:string, EnableNonSecurity?:bool}>}, ApprovedPatches?:array<string>, ApprovedPatchesComplianceLevel?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"INFORMATIONAL"|"UNSPECIFIED", ApprovedPatchesEnableNonSecurity?:bool, RejectedPatches?:array<string>, RejectedPatchesAction?:"ALLOW_AS_DEPENDENCY"|"BLOCK", Description?:string, Sources?:array<array{Name:string, Products:array<string>, Configuration:string}>, Replace?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{BaselineId?:string, Name?:string, OperatingSystem?:"WINDOWS"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"AMAZON_LINUX_2022"|"UBUNTU"|"REDHAT_ENTERPRISE_LINUX"|"SUSE"|"CENTOS"|"ORACLE_LINUX"|"DEBIAN"|"MACOS"|"RASPBIAN"|"ROCKY_LINUX"|"ALMA_LINUX"|"AMAZON_LINUX_2023", GlobalFilters?:array{PatchFilters:array<array{Key:"ARCH"|"ADVISORY_ID"|"BUGZILLA_ID"|"PATCH_SET"|"PRODUCT"|"PRODUCT_FAMILY"|"CLASSIFICATION"|"CVE_ID"|"EPOCH"|"MSRC_SEVERITY"|"NAME"|"PATCH_ID"|"SECTION"|"PRIORITY"|"REPOSITORY"|"RELEASE"|"SEVERITY"|"SECURITY"|"VERSION", Values:array<string>}>}, ApprovalRules?:array{PatchRules:array<array{PatchFilterGroup:array{PatchFilters:array<array{Key:"ARCH"|"ADVISORY_ID"|"BUGZILLA_ID"|"PATCH_SET"|"PRODUCT"|"PRODUCT_FAMILY"|"CLASSIFICATION"|"CVE_ID"|"EPOCH"|"MSRC_SEVERITY"|"NAME"|"PATCH_ID"|"SECTION"|"PRIORITY"|"REPOSITORY"|"RELEASE"|"SEVERITY"|"SECURITY"|"VERSION", Values:array<string>}>}, ComplianceLevel?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"INFORMATIONAL"|"UNSPECIFIED", ApproveAfterDays?:int, ApproveUntilDate?:string, EnableNonSecurity?:bool}>}, ApprovedPatches?:array<string>, ApprovedPatchesComplianceLevel?:"CRITICAL"|"HIGH"|"MEDIUM"|"LOW"|"INFORMATIONAL"|"UNSPECIFIED", ApprovedPatchesEnableNonSecurity?:bool, RejectedPatches?:array<string>, RejectedPatchesAction?:"ALLOW_AS_DEPENDENCY"|"BLOCK", CreatedDate?:int|string|\DateTimeInterface, ModifiedDate?:int|string|\DateTimeInterface, Description?:string, Sources?:array<array{Name:string, Products:array<string>, Configuration:string}>}>
     */
    public function updatePatchBaselineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SyncName:string, SyncType:string, SyncSource:array{SourceType:string, AwsOrganizationsSource?:array{OrganizationSourceType:string, OrganizationalUnits?:array<array{OrganizationalUnitId?:string}>}, SourceRegions:array<string>, IncludeFutureRegions?:bool, EnableAllOpsDataSources?:bool}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateResourceDataSync(array $args): \AWS\Result { }

    /**
     * @param array{SyncName:string, SyncType:string, SyncSource:array{SourceType:string, AwsOrganizationsSource?:array{OrganizationSourceType:string, OrganizationalUnits?:array<array{OrganizationalUnitId?:string}>}, SourceRegions:array<string>, IncludeFutureRegions?:bool, EnableAllOpsDataSources?:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateResourceDataSyncAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SettingId:string, SettingValue:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateServiceSetting(array $args): \AWS\Result { }

    /**
     * @param array{SettingId:string, SettingValue:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateServiceSettingAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
