<?php
namespace AWS\CloudTrail;

class CloudTrailClient
{
    /**
     * @param array{ResourceId:string, TagsList:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function addTags(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, TagsList:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function addTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EventDataStore?:string, QueryId:string, EventDataStoreOwnerAccountId?:string} $args
     * @return \AWS\Result<array{QueryId:string, QueryStatus:"QUEUED"|"RUNNING"|"FINISHED"|"FAILED"|"CANCELLED"|"TIMED_OUT", EventDataStoreOwnerAccountId?:string}>
     */
    public function cancelQuery(array $args): \AWS\Result { }

    /**
     * @param array{EventDataStore?:string, QueryId:string, EventDataStoreOwnerAccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{QueryId:string, QueryStatus:"QUEUED"|"RUNNING"|"FINISHED"|"FAILED"|"CANCELLED"|"TIMED_OUT", EventDataStoreOwnerAccountId?:string}>
     */
    public function cancelQueryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Source:string, Destinations:array<array{Type:"EVENT_DATA_STORE"|"AWS_SERVICE", Location:string}>, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{ChannelArn?:string, Name?:string, Source?:string, Destinations?:array<array{Type:"EVENT_DATA_STORE"|"AWS_SERVICE", Location:string}>, Tags?:array<array{Key:string, Value?:string}>}>
     */
    public function createChannel(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Source:string, Destinations:array<array{Type:"EVENT_DATA_STORE"|"AWS_SERVICE", Location:string}>, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelArn?:string, Name?:string, Source?:string, Destinations?:array<array{Type:"EVENT_DATA_STORE"|"AWS_SERVICE", Location:string}>, Tags?:array<array{Key:string, Value?:string}>}>
     */
    public function createChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, RefreshSchedule?:array{Frequency?:array{Unit?:"HOURS"|"DAYS", Value?:int}, Status?:"ENABLED"|"DISABLED", TimeOfDay?:string}, TagsList?:array<array{Key:string, Value?:string}>, TerminationProtectionEnabled?:bool, Widgets?:array<array{QueryStatement:string, QueryParameters?:array<string>, ViewProperties:array<string, string>}>} $args
     * @return \AWS\Result<array{DashboardArn?:string, Name?:string, Type?:"MANAGED"|"CUSTOM", Widgets?:array<array{QueryAlias?:string, QueryStatement?:string, QueryParameters?:array<string>, ViewProperties?:array<string, string>}>, TagsList?:array<array{Key:string, Value?:string}>, RefreshSchedule?:array{Frequency?:array{Unit?:"HOURS"|"DAYS", Value?:int}, Status?:"ENABLED"|"DISABLED", TimeOfDay?:string}, TerminationProtectionEnabled?:bool}>
     */
    public function createDashboard(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, RefreshSchedule?:array{Frequency?:array{Unit?:"HOURS"|"DAYS", Value?:int}, Status?:"ENABLED"|"DISABLED", TimeOfDay?:string}, TagsList?:array<array{Key:string, Value?:string}>, TerminationProtectionEnabled?:bool, Widgets?:array<array{QueryStatement:string, QueryParameters?:array<string>, ViewProperties:array<string, string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DashboardArn?:string, Name?:string, Type?:"MANAGED"|"CUSTOM", Widgets?:array<array{QueryAlias?:string, QueryStatement?:string, QueryParameters?:array<string>, ViewProperties?:array<string, string>}>, TagsList?:array<array{Key:string, Value?:string}>, RefreshSchedule?:array{Frequency?:array{Unit?:"HOURS"|"DAYS", Value?:int}, Status?:"ENABLED"|"DISABLED", TimeOfDay?:string}, TerminationProtectionEnabled?:bool}>
     */
    public function createDashboardAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, AdvancedEventSelectors?:array<array{Name?:string, FieldSelectors:array<array{Field:string, Equals?:array<string>, StartsWith?:array<string>, EndsWith?:array<string>, NotEquals?:array<string>, NotStartsWith?:array<string>, NotEndsWith?:array<string>}>}>, MultiRegionEnabled?:bool, OrganizationEnabled?:bool, RetentionPeriod?:int, TerminationProtectionEnabled?:bool, TagsList?:array<array{Key:string, Value?:string}>, KmsKeyId?:string, StartIngestion?:bool, BillingMode?:"EXTENDABLE_RETENTION_PRICING"|"FIXED_RETENTION_PRICING"} $args
     * @return \AWS\Result<array{EventDataStoreArn?:string, Name?:string, Status?:"CREATED"|"ENABLED"|"PENDING_DELETION"|"STARTING_INGESTION"|"STOPPING_INGESTION"|"STOPPED_INGESTION", AdvancedEventSelectors?:array<array{Name?:string, FieldSelectors:array<array{Field:string, Equals?:array<string>, StartsWith?:array<string>, EndsWith?:array<string>, NotEquals?:array<string>, NotStartsWith?:array<string>, NotEndsWith?:array<string>}>}>, MultiRegionEnabled?:bool, OrganizationEnabled?:bool, RetentionPeriod?:int, TerminationProtectionEnabled?:bool, TagsList?:array<array{Key:string, Value?:string}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, KmsKeyId?:string, BillingMode?:"EXTENDABLE_RETENTION_PRICING"|"FIXED_RETENTION_PRICING"}>
     */
    public function createEventDataStore(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, AdvancedEventSelectors?:array<array{Name?:string, FieldSelectors:array<array{Field:string, Equals?:array<string>, StartsWith?:array<string>, EndsWith?:array<string>, NotEquals?:array<string>, NotStartsWith?:array<string>, NotEndsWith?:array<string>}>}>, MultiRegionEnabled?:bool, OrganizationEnabled?:bool, RetentionPeriod?:int, TerminationProtectionEnabled?:bool, TagsList?:array<array{Key:string, Value?:string}>, KmsKeyId?:string, StartIngestion?:bool, BillingMode?:"EXTENDABLE_RETENTION_PRICING"|"FIXED_RETENTION_PRICING"} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventDataStoreArn?:string, Name?:string, Status?:"CREATED"|"ENABLED"|"PENDING_DELETION"|"STARTING_INGESTION"|"STOPPING_INGESTION"|"STOPPED_INGESTION", AdvancedEventSelectors?:array<array{Name?:string, FieldSelectors:array<array{Field:string, Equals?:array<string>, StartsWith?:array<string>, EndsWith?:array<string>, NotEquals?:array<string>, NotStartsWith?:array<string>, NotEndsWith?:array<string>}>}>, MultiRegionEnabled?:bool, OrganizationEnabled?:bool, RetentionPeriod?:int, TerminationProtectionEnabled?:bool, TagsList?:array<array{Key:string, Value?:string}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, KmsKeyId?:string, BillingMode?:"EXTENDABLE_RETENTION_PRICING"|"FIXED_RETENTION_PRICING"}>
     */
    public function createEventDataStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, S3BucketName:string, S3KeyPrefix?:string, SnsTopicName?:string, IncludeGlobalServiceEvents?:bool, IsMultiRegionTrail?:bool, EnableLogFileValidation?:bool, CloudWatchLogsLogGroupArn?:string, CloudWatchLogsRoleArn?:string, KmsKeyId?:string, IsOrganizationTrail?:bool, TagsList?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{Name?:string, S3BucketName?:string, S3KeyPrefix?:string, SnsTopicName?:string, SnsTopicARN?:string, IncludeGlobalServiceEvents?:bool, IsMultiRegionTrail?:bool, TrailARN?:string, LogFileValidationEnabled?:bool, CloudWatchLogsLogGroupArn?:string, CloudWatchLogsRoleArn?:string, KmsKeyId?:string, IsOrganizationTrail?:bool}>
     */
    public function createTrail(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, S3BucketName:string, S3KeyPrefix?:string, SnsTopicName?:string, IncludeGlobalServiceEvents?:bool, IsMultiRegionTrail?:bool, EnableLogFileValidation?:bool, CloudWatchLogsLogGroupArn?:string, CloudWatchLogsRoleArn?:string, KmsKeyId?:string, IsOrganizationTrail?:bool, TagsList?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name?:string, S3BucketName?:string, S3KeyPrefix?:string, SnsTopicName?:string, SnsTopicARN?:string, IncludeGlobalServiceEvents?:bool, IsMultiRegionTrail?:bool, TrailARN?:string, LogFileValidationEnabled?:bool, CloudWatchLogsLogGroupArn?:string, CloudWatchLogsRoleArn?:string, KmsKeyId?:string, IsOrganizationTrail?:bool}>
     */
    public function createTrailAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Channel:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteChannel(array $args): \AWS\Result { }

    /**
     * @param array{Channel:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DashboardId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteDashboard(array $args): \AWS\Result { }

    /**
     * @param array{DashboardId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteDashboardAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EventDataStore:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteEventDataStore(array $args): \AWS\Result { }

    /**
     * @param array{EventDataStore:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteEventDataStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteTrail(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteTrailAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DelegatedAdminAccountId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deregisterOrganizationDelegatedAdmin(array $args): \AWS\Result { }

    /**
     * @param array{DelegatedAdminAccountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deregisterOrganizationDelegatedAdminAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EventDataStore?:string, QueryId?:string, QueryAlias?:string, RefreshId?:string, EventDataStoreOwnerAccountId?:string} $args
     * @return \AWS\Result<array{QueryId?:string, QueryString?:string, QueryStatus?:"QUEUED"|"RUNNING"|"FINISHED"|"FAILED"|"CANCELLED"|"TIMED_OUT", QueryStatistics?:array{EventsMatched?:int, EventsScanned?:int, BytesScanned?:int, ExecutionTimeInMillis?:int, CreationTime?:int|string|\DateTimeInterface}, ErrorMessage?:string, DeliveryS3Uri?:string, DeliveryStatus?:"SUCCESS"|"FAILED"|"FAILED_SIGNING_FILE"|"PENDING"|"RESOURCE_NOT_FOUND"|"ACCESS_DENIED"|"ACCESS_DENIED_SIGNING_FILE"|"CANCELLED"|"UNKNOWN", Prompt?:string, EventDataStoreOwnerAccountId?:string}>
     */
    public function describeQuery(array $args = []): \AWS\Result { }

    /**
     * @param array{EventDataStore?:string, QueryId?:string, QueryAlias?:string, RefreshId?:string, EventDataStoreOwnerAccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{QueryId?:string, QueryString?:string, QueryStatus?:"QUEUED"|"RUNNING"|"FINISHED"|"FAILED"|"CANCELLED"|"TIMED_OUT", QueryStatistics?:array{EventsMatched?:int, EventsScanned?:int, BytesScanned?:int, ExecutionTimeInMillis?:int, CreationTime?:int|string|\DateTimeInterface}, ErrorMessage?:string, DeliveryS3Uri?:string, DeliveryStatus?:"SUCCESS"|"FAILED"|"FAILED_SIGNING_FILE"|"PENDING"|"RESOURCE_NOT_FOUND"|"ACCESS_DENIED"|"ACCESS_DENIED_SIGNING_FILE"|"CANCELLED"|"UNKNOWN", Prompt?:string, EventDataStoreOwnerAccountId?:string}>
     */
    public function describeQueryAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{trailNameList?:array<string>, includeShadowTrails?:bool} $args
     * @return \AWS\Result<array{trailList?:array<array{Name?:string, S3BucketName?:string, S3KeyPrefix?:string, SnsTopicName?:string, SnsTopicARN?:string, IncludeGlobalServiceEvents?:bool, IsMultiRegionTrail?:bool, HomeRegion?:string, TrailARN?:string, LogFileValidationEnabled?:bool, CloudWatchLogsLogGroupArn?:string, CloudWatchLogsRoleArn?:string, KmsKeyId?:string, HasCustomEventSelectors?:bool, HasInsightSelectors?:bool, IsOrganizationTrail?:bool}>}>
     */
    public function describeTrails(array $args = []): \AWS\Result { }

    /**
     * @param array{trailNameList?:array<string>, includeShadowTrails?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{trailList?:array<array{Name?:string, S3BucketName?:string, S3KeyPrefix?:string, SnsTopicName?:string, SnsTopicARN?:string, IncludeGlobalServiceEvents?:bool, IsMultiRegionTrail?:bool, HomeRegion?:string, TrailARN?:string, LogFileValidationEnabled?:bool, CloudWatchLogsLogGroupArn?:string, CloudWatchLogsRoleArn?:string, KmsKeyId?:string, HasCustomEventSelectors?:bool, HasInsightSelectors?:bool, IsOrganizationTrail?:bool}>}>
     */
    public function describeTrailsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EventDataStore:string} $args
     * @return \AWS\Result<array{EventDataStoreArn?:string, FederationStatus?:"ENABLING"|"ENABLED"|"DISABLING"|"DISABLED"}>
     */
    public function disableFederation(array $args): \AWS\Result { }

    /**
     * @param array{EventDataStore:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventDataStoreArn?:string, FederationStatus?:"ENABLING"|"ENABLED"|"DISABLING"|"DISABLED"}>
     */
    public function disableFederationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EventDataStore:string, FederationRoleArn:string} $args
     * @return \AWS\Result<array{EventDataStoreArn?:string, FederationStatus?:"ENABLING"|"ENABLED"|"DISABLING"|"DISABLED", FederationRoleArn?:string}>
     */
    public function enableFederation(array $args): \AWS\Result { }

    /**
     * @param array{EventDataStore:string, FederationRoleArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventDataStoreArn?:string, FederationStatus?:"ENABLING"|"ENABLED"|"DISABLING"|"DISABLED", FederationRoleArn?:string}>
     */
    public function enableFederationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EventDataStores:array<string>, Prompt:string} $args
     * @return \AWS\Result<array{QueryStatement?:string, QueryAlias?:string, EventDataStoreOwnerAccountId?:string}>
     */
    public function generateQuery(array $args): \AWS\Result { }

    /**
     * @param array{EventDataStores:array<string>, Prompt:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{QueryStatement?:string, QueryAlias?:string, EventDataStoreOwnerAccountId?:string}>
     */
    public function generateQueryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Channel:string} $args
     * @return \AWS\Result<array{ChannelArn?:string, Name?:string, Source?:string, SourceConfig?:array{ApplyToAllRegions?:bool, AdvancedEventSelectors?:array<array{Name?:string, FieldSelectors:array<array{Field:string, Equals?:array<string>, StartsWith?:array<string>, EndsWith?:array<string>, NotEquals?:array<string>, NotStartsWith?:array<string>, NotEndsWith?:array<string>}>}>}, Destinations?:array<array{Type:"EVENT_DATA_STORE"|"AWS_SERVICE", Location:string}>, IngestionStatus?:array{LatestIngestionSuccessTime?:int|string|\DateTimeInterface, LatestIngestionSuccessEventID?:string, LatestIngestionErrorCode?:string, LatestIngestionAttemptTime?:int|string|\DateTimeInterface, LatestIngestionAttemptEventID?:string}}>
     */
    public function getChannel(array $args): \AWS\Result { }

    /**
     * @param array{Channel:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelArn?:string, Name?:string, Source?:string, SourceConfig?:array{ApplyToAllRegions?:bool, AdvancedEventSelectors?:array<array{Name?:string, FieldSelectors:array<array{Field:string, Equals?:array<string>, StartsWith?:array<string>, EndsWith?:array<string>, NotEquals?:array<string>, NotStartsWith?:array<string>, NotEndsWith?:array<string>}>}>}, Destinations?:array<array{Type:"EVENT_DATA_STORE"|"AWS_SERVICE", Location:string}>, IngestionStatus?:array{LatestIngestionSuccessTime?:int|string|\DateTimeInterface, LatestIngestionSuccessEventID?:string, LatestIngestionErrorCode?:string, LatestIngestionAttemptTime?:int|string|\DateTimeInterface, LatestIngestionAttemptEventID?:string}}>
     */
    public function getChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DashboardId:string} $args
     * @return \AWS\Result<array{DashboardArn?:string, Type?:"MANAGED"|"CUSTOM", Status?:"CREATING"|"CREATED"|"UPDATING"|"UPDATED"|"DELETING", Widgets?:array<array{QueryAlias?:string, QueryStatement?:string, QueryParameters?:array<string>, ViewProperties?:array<string, string>}>, RefreshSchedule?:array{Frequency?:array{Unit?:"HOURS"|"DAYS", Value?:int}, Status?:"ENABLED"|"DISABLED", TimeOfDay?:string}, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, LastRefreshId?:string, LastRefreshFailureReason?:string, TerminationProtectionEnabled?:bool}>
     */
    public function getDashboard(array $args): \AWS\Result { }

    /**
     * @param array{DashboardId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DashboardArn?:string, Type?:"MANAGED"|"CUSTOM", Status?:"CREATING"|"CREATED"|"UPDATING"|"UPDATED"|"DELETING", Widgets?:array<array{QueryAlias?:string, QueryStatement?:string, QueryParameters?:array<string>, ViewProperties?:array<string, string>}>, RefreshSchedule?:array{Frequency?:array{Unit?:"HOURS"|"DAYS", Value?:int}, Status?:"ENABLED"|"DISABLED", TimeOfDay?:string}, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, LastRefreshId?:string, LastRefreshFailureReason?:string, TerminationProtectionEnabled?:bool}>
     */
    public function getDashboardAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EventDataStore:string} $args
     * @return \AWS\Result<array{EventDataStoreArn?:string, Name?:string, Status?:"CREATED"|"ENABLED"|"PENDING_DELETION"|"STARTING_INGESTION"|"STOPPING_INGESTION"|"STOPPED_INGESTION", AdvancedEventSelectors?:array<array{Name?:string, FieldSelectors:array<array{Field:string, Equals?:array<string>, StartsWith?:array<string>, EndsWith?:array<string>, NotEquals?:array<string>, NotStartsWith?:array<string>, NotEndsWith?:array<string>}>}>, MultiRegionEnabled?:bool, OrganizationEnabled?:bool, RetentionPeriod?:int, TerminationProtectionEnabled?:bool, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, KmsKeyId?:string, BillingMode?:"EXTENDABLE_RETENTION_PRICING"|"FIXED_RETENTION_PRICING", FederationStatus?:"ENABLING"|"ENABLED"|"DISABLING"|"DISABLED", FederationRoleArn?:string, PartitionKeys?:array<array{Name:string, Type:string}>}>
     */
    public function getEventDataStore(array $args): \AWS\Result { }

    /**
     * @param array{EventDataStore:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventDataStoreArn?:string, Name?:string, Status?:"CREATED"|"ENABLED"|"PENDING_DELETION"|"STARTING_INGESTION"|"STOPPING_INGESTION"|"STOPPED_INGESTION", AdvancedEventSelectors?:array<array{Name?:string, FieldSelectors:array<array{Field:string, Equals?:array<string>, StartsWith?:array<string>, EndsWith?:array<string>, NotEquals?:array<string>, NotStartsWith?:array<string>, NotEndsWith?:array<string>}>}>, MultiRegionEnabled?:bool, OrganizationEnabled?:bool, RetentionPeriod?:int, TerminationProtectionEnabled?:bool, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, KmsKeyId?:string, BillingMode?:"EXTENDABLE_RETENTION_PRICING"|"FIXED_RETENTION_PRICING", FederationStatus?:"ENABLING"|"ENABLED"|"DISABLING"|"DISABLED", FederationRoleArn?:string, PartitionKeys?:array<array{Name:string, Type:string}>}>
     */
    public function getEventDataStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrailName:string} $args
     * @return \AWS\Result<array{TrailARN?:string, EventSelectors?:array<array{ReadWriteType?:"ReadOnly"|"WriteOnly"|"All", IncludeManagementEvents?:bool, DataResources?:array<array{Type?:string, Values?:array<string>}>, ExcludeManagementEventSources?:array<string>}>, AdvancedEventSelectors?:array<array{Name?:string, FieldSelectors:array<array{Field:string, Equals?:array<string>, StartsWith?:array<string>, EndsWith?:array<string>, NotEquals?:array<string>, NotStartsWith?:array<string>, NotEndsWith?:array<string>}>}>}>
     */
    public function getEventSelectors(array $args): \AWS\Result { }

    /**
     * @param array{TrailName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TrailARN?:string, EventSelectors?:array<array{ReadWriteType?:"ReadOnly"|"WriteOnly"|"All", IncludeManagementEvents?:bool, DataResources?:array<array{Type?:string, Values?:array<string>}>, ExcludeManagementEventSources?:array<string>}>, AdvancedEventSelectors?:array<array{Name?:string, FieldSelectors:array<array{Field:string, Equals?:array<string>, StartsWith?:array<string>, EndsWith?:array<string>, NotEquals?:array<string>, NotStartsWith?:array<string>, NotEndsWith?:array<string>}>}>}>
     */
    public function getEventSelectorsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ImportId:string} $args
     * @return \AWS\Result<array{ImportId?:string, Destinations?:array<string>, ImportSource?:array{S3:array{S3LocationUri:string, S3BucketRegion:string, S3BucketAccessRoleArn:string}}, StartEventTime?:int|string|\DateTimeInterface, EndEventTime?:int|string|\DateTimeInterface, ImportStatus?:"INITIALIZING"|"IN_PROGRESS"|"FAILED"|"STOPPED"|"COMPLETED", CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, ImportStatistics?:array{PrefixesFound?:int, PrefixesCompleted?:int, FilesCompleted?:int, EventsCompleted?:int, FailedEntries?:int}}>
     */
    public function getImport(array $args): \AWS\Result { }

    /**
     * @param array{ImportId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ImportId?:string, Destinations?:array<string>, ImportSource?:array{S3:array{S3LocationUri:string, S3BucketRegion:string, S3BucketAccessRoleArn:string}}, StartEventTime?:int|string|\DateTimeInterface, EndEventTime?:int|string|\DateTimeInterface, ImportStatus?:"INITIALIZING"|"IN_PROGRESS"|"FAILED"|"STOPPED"|"COMPLETED", CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, ImportStatistics?:array{PrefixesFound?:int, PrefixesCompleted?:int, FilesCompleted?:int, EventsCompleted?:int, FailedEntries?:int}}>
     */
    public function getImportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrailName?:string, EventDataStore?:string} $args
     * @return \AWS\Result<array{TrailARN?:string, InsightSelectors?:array<array{InsightType?:"ApiCallRateInsight"|"ApiErrorRateInsight"}>, EventDataStoreArn?:string, InsightsDestination?:string}>
     */
    public function getInsightSelectors(array $args = []): \AWS\Result { }

    /**
     * @param array{TrailName?:string, EventDataStore?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TrailARN?:string, InsightSelectors?:array<array{InsightType?:"ApiCallRateInsight"|"ApiErrorRateInsight"}>, EventDataStoreArn?:string, InsightsDestination?:string}>
     */
    public function getInsightSelectorsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EventDataStore?:string, QueryId:string, NextToken?:string, MaxQueryResults?:int, EventDataStoreOwnerAccountId?:string} $args
     * @return \AWS\Result<array{QueryStatus?:"QUEUED"|"RUNNING"|"FINISHED"|"FAILED"|"CANCELLED"|"TIMED_OUT", QueryStatistics?:array{ResultsCount?:int, TotalResultsCount?:int, BytesScanned?:int}, QueryResultRows?:array<array<array<string, string>>>, NextToken?:string, ErrorMessage?:string}>
     */
    public function getQueryResults(array $args): \AWS\Result { }

    /**
     * @param array{EventDataStore?:string, QueryId:string, NextToken?:string, MaxQueryResults?:int, EventDataStoreOwnerAccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{QueryStatus?:"QUEUED"|"RUNNING"|"FINISHED"|"FAILED"|"CANCELLED"|"TIMED_OUT", QueryStatistics?:array{ResultsCount?:int, TotalResultsCount?:int, BytesScanned?:int}, QueryResultRows?:array<array<array<string, string>>>, NextToken?:string, ErrorMessage?:string}>
     */
    public function getQueryResultsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{ResourceArn?:string, ResourcePolicy?:string, DelegatedAdminResourcePolicy?:string}>
     */
    public function getResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceArn?:string, ResourcePolicy?:string, DelegatedAdminResourcePolicy?:string}>
     */
    public function getResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{Trail?:array{Name?:string, S3BucketName?:string, S3KeyPrefix?:string, SnsTopicName?:string, SnsTopicARN?:string, IncludeGlobalServiceEvents?:bool, IsMultiRegionTrail?:bool, HomeRegion?:string, TrailARN?:string, LogFileValidationEnabled?:bool, CloudWatchLogsLogGroupArn?:string, CloudWatchLogsRoleArn?:string, KmsKeyId?:string, HasCustomEventSelectors?:bool, HasInsightSelectors?:bool, IsOrganizationTrail?:bool}}>
     */
    public function getTrail(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Trail?:array{Name?:string, S3BucketName?:string, S3KeyPrefix?:string, SnsTopicName?:string, SnsTopicARN?:string, IncludeGlobalServiceEvents?:bool, IsMultiRegionTrail?:bool, HomeRegion?:string, TrailARN?:string, LogFileValidationEnabled?:bool, CloudWatchLogsLogGroupArn?:string, CloudWatchLogsRoleArn?:string, KmsKeyId?:string, HasCustomEventSelectors?:bool, HasInsightSelectors?:bool, IsOrganizationTrail?:bool}}>
     */
    public function getTrailAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{IsLogging?:bool, LatestDeliveryError?:string, LatestNotificationError?:string, LatestDeliveryTime?:int|string|\DateTimeInterface, LatestNotificationTime?:int|string|\DateTimeInterface, StartLoggingTime?:int|string|\DateTimeInterface, StopLoggingTime?:int|string|\DateTimeInterface, LatestCloudWatchLogsDeliveryError?:string, LatestCloudWatchLogsDeliveryTime?:int|string|\DateTimeInterface, LatestDigestDeliveryTime?:int|string|\DateTimeInterface, LatestDigestDeliveryError?:string, LatestDeliveryAttemptTime?:string, LatestNotificationAttemptTime?:string, LatestNotificationAttemptSucceeded?:string, LatestDeliveryAttemptSucceeded?:string, TimeLoggingStarted?:string, TimeLoggingStopped?:string}>
     */
    public function getTrailStatus(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IsLogging?:bool, LatestDeliveryError?:string, LatestNotificationError?:string, LatestDeliveryTime?:int|string|\DateTimeInterface, LatestNotificationTime?:int|string|\DateTimeInterface, StartLoggingTime?:int|string|\DateTimeInterface, StopLoggingTime?:int|string|\DateTimeInterface, LatestCloudWatchLogsDeliveryError?:string, LatestCloudWatchLogsDeliveryTime?:int|string|\DateTimeInterface, LatestDigestDeliveryTime?:int|string|\DateTimeInterface, LatestDigestDeliveryError?:string, LatestDeliveryAttemptTime?:string, LatestNotificationAttemptTime?:string, LatestNotificationAttemptSucceeded?:string, LatestDeliveryAttemptSucceeded?:string, TimeLoggingStarted?:string, TimeLoggingStopped?:string}>
     */
    public function getTrailStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Channels?:array<array{ChannelArn?:string, Name?:string}>, NextToken?:string}>
     */
    public function listChannels(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Channels?:array<array{ChannelArn?:string, Name?:string}>, NextToken?:string}>
     */
    public function listChannelsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NamePrefix?:string, Type?:"MANAGED"|"CUSTOM", NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Dashboards?:array<array{DashboardArn?:string, Type?:"MANAGED"|"CUSTOM"}>, NextToken?:string}>
     */
    public function listDashboards(array $args = []): \AWS\Result { }

    /**
     * @param array{NamePrefix?:string, Type?:"MANAGED"|"CUSTOM", NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Dashboards?:array<array{DashboardArn?:string, Type?:"MANAGED"|"CUSTOM"}>, NextToken?:string}>
     */
    public function listDashboardsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{EventDataStores?:array<array{EventDataStoreArn?:string, Name?:string, TerminationProtectionEnabled?:bool, Status?:"CREATED"|"ENABLED"|"PENDING_DELETION"|"STARTING_INGESTION"|"STOPPING_INGESTION"|"STOPPED_INGESTION", AdvancedEventSelectors?:array<array{Name?:string, FieldSelectors:array<array{Field:string, Equals?:array<string>, StartsWith?:array<string>, EndsWith?:array<string>, NotEquals?:array<string>, NotStartsWith?:array<string>, NotEndsWith?:array<string>}>}>, MultiRegionEnabled?:bool, OrganizationEnabled?:bool, RetentionPeriod?:int, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listEventDataStores(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventDataStores?:array<array{EventDataStoreArn?:string, Name?:string, TerminationProtectionEnabled?:bool, Status?:"CREATED"|"ENABLED"|"PENDING_DELETION"|"STARTING_INGESTION"|"STOPPING_INGESTION"|"STOPPED_INGESTION", AdvancedEventSelectors?:array<array{Name?:string, FieldSelectors:array<array{Field:string, Equals?:array<string>, StartsWith?:array<string>, EndsWith?:array<string>, NotEquals?:array<string>, NotStartsWith?:array<string>, NotEndsWith?:array<string>}>}>, MultiRegionEnabled?:bool, OrganizationEnabled?:bool, RetentionPeriod?:int, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listEventDataStoresAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ImportId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Failures?:array<array{Location?:string, Status?:"FAILED"|"RETRY"|"SUCCEEDED", ErrorType?:string, ErrorMessage?:string, LastUpdatedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listImportFailures(array $args): \AWS\Result { }

    /**
     * @param array{ImportId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Failures?:array<array{Location?:string, Status?:"FAILED"|"RETRY"|"SUCCEEDED", ErrorType?:string, ErrorMessage?:string, LastUpdatedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listImportFailuresAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, Destination?:string, ImportStatus?:"INITIALIZING"|"IN_PROGRESS"|"FAILED"|"STOPPED"|"COMPLETED", NextToken?:string} $args
     * @return \AWS\Result<array{Imports?:array<array{ImportId?:string, ImportStatus?:"INITIALIZING"|"IN_PROGRESS"|"FAILED"|"STOPPED"|"COMPLETED", Destinations?:array<string>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listImports(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, Destination?:string, ImportStatus?:"INITIALIZING"|"IN_PROGRESS"|"FAILED"|"STOPPED"|"COMPLETED", NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Imports?:array<array{ImportId?:string, ImportStatus?:"INITIALIZING"|"IN_PROGRESS"|"FAILED"|"STOPPED"|"COMPLETED", Destinations?:array<string>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listImportsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EventSource:string, EventName:string, InsightType:"ApiCallRateInsight"|"ApiErrorRateInsight", ErrorCode?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Period?:int, DataType?:"FillWithZeros"|"NonZeroData", MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{EventSource?:string, EventName?:string, InsightType?:"ApiCallRateInsight"|"ApiErrorRateInsight", ErrorCode?:string, Timestamps?:array<int|string|\DateTimeInterface>, Values?:array<float>, NextToken?:string}>
     */
    public function listInsightsMetricData(array $args): \AWS\Result { }

    /**
     * @param array{EventSource:string, EventName:string, InsightType:"ApiCallRateInsight"|"ApiErrorRateInsight", ErrorCode?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Period?:int, DataType?:"FillWithZeros"|"NonZeroData", MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventSource?:string, EventName?:string, InsightType?:"ApiCallRateInsight"|"ApiErrorRateInsight", ErrorCode?:string, Timestamps?:array<int|string|\DateTimeInterface>, Values?:array<float>, NextToken?:string}>
     */
    public function listInsightsMetricDataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, NextToken?:string} $args
     * @return \AWS\Result<array{PublicKeyList?:array<array{Value?:string|resource|\Psr\Http\Message\StreamInterface, ValidityStartTime?:int|string|\DateTimeInterface, ValidityEndTime?:int|string|\DateTimeInterface, Fingerprint?:string}>, NextToken?:string}>
     */
    public function listPublicKeys(array $args = []): \AWS\Result { }

    /**
     * @param array{StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PublicKeyList?:array<array{Value?:string|resource|\Psr\Http\Message\StreamInterface, ValidityStartTime?:int|string|\DateTimeInterface, ValidityEndTime?:int|string|\DateTimeInterface, Fingerprint?:string}>, NextToken?:string}>
     */
    public function listPublicKeysAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EventDataStore:string, NextToken?:string, MaxResults?:int, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, QueryStatus?:"QUEUED"|"RUNNING"|"FINISHED"|"FAILED"|"CANCELLED"|"TIMED_OUT"} $args
     * @return \AWS\Result<array{Queries?:array<array{QueryId?:string, QueryStatus?:"QUEUED"|"RUNNING"|"FINISHED"|"FAILED"|"CANCELLED"|"TIMED_OUT", CreationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listQueries(array $args): \AWS\Result { }

    /**
     * @param array{EventDataStore:string, NextToken?:string, MaxResults?:int, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, QueryStatus?:"QUEUED"|"RUNNING"|"FINISHED"|"FAILED"|"CANCELLED"|"TIMED_OUT"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Queries?:array<array{QueryId?:string, QueryStatus?:"QUEUED"|"RUNNING"|"FINISHED"|"FAILED"|"CANCELLED"|"TIMED_OUT", CreationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listQueriesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceIdList:array<string>, NextToken?:string} $args
     * @return \AWS\Result<array{ResourceTagList?:array<array{ResourceId?:string, TagsList?:array<array{Key:string, Value?:string}>}>, NextToken?:string}>
     */
    public function listTags(array $args): \AWS\Result { }

    /**
     * @param array{ResourceIdList:array<string>, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceTagList?:array<array{ResourceId?:string, TagsList?:array<array{Key:string, Value?:string}>}>, NextToken?:string}>
     */
    public function listTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string} $args
     * @return \AWS\Result<array{Trails?:array<array{TrailARN?:string, Name?:string, HomeRegion?:string}>, NextToken?:string}>
     */
    public function listTrails(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Trails?:array<array{TrailARN?:string, Name?:string, HomeRegion?:string}>, NextToken?:string}>
     */
    public function listTrailsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LookupAttributes?:array<array{AttributeKey:"EventId"|"EventName"|"ReadOnly"|"Username"|"ResourceType"|"ResourceName"|"EventSource"|"AccessKeyId", AttributeValue:string}>, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, EventCategory?:"insight", MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Events?:array<array{EventId?:string, EventName?:string, ReadOnly?:string, AccessKeyId?:string, EventTime?:int|string|\DateTimeInterface, EventSource?:string, Username?:string, Resources?:array<array{ResourceType?:string, ResourceName?:string}>, CloudTrailEvent?:string}>, NextToken?:string}>
     */
    public function lookupEvents(array $args = []): \AWS\Result { }

    /**
     * @param array{LookupAttributes?:array<array{AttributeKey:"EventId"|"EventName"|"ReadOnly"|"Username"|"ResourceType"|"ResourceName"|"EventSource"|"AccessKeyId", AttributeValue:string}>, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, EventCategory?:"insight", MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Events?:array<array{EventId?:string, EventName?:string, ReadOnly?:string, AccessKeyId?:string, EventTime?:int|string|\DateTimeInterface, EventSource?:string, Username?:string, Resources?:array<array{ResourceType?:string, ResourceName?:string}>, CloudTrailEvent?:string}>, NextToken?:string}>
     */
    public function lookupEventsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrailName:string, EventSelectors?:array<array{ReadWriteType?:"ReadOnly"|"WriteOnly"|"All", IncludeManagementEvents?:bool, DataResources?:array<array{Type?:string, Values?:array<string>}>, ExcludeManagementEventSources?:array<string>}>, AdvancedEventSelectors?:array<array{Name?:string, FieldSelectors:array<array{Field:string, Equals?:array<string>, StartsWith?:array<string>, EndsWith?:array<string>, NotEquals?:array<string>, NotStartsWith?:array<string>, NotEndsWith?:array<string>}>}>} $args
     * @return \AWS\Result<array{TrailARN?:string, EventSelectors?:array<array{ReadWriteType?:"ReadOnly"|"WriteOnly"|"All", IncludeManagementEvents?:bool, DataResources?:array<array{Type?:string, Values?:array<string>}>, ExcludeManagementEventSources?:array<string>}>, AdvancedEventSelectors?:array<array{Name?:string, FieldSelectors:array<array{Field:string, Equals?:array<string>, StartsWith?:array<string>, EndsWith?:array<string>, NotEquals?:array<string>, NotStartsWith?:array<string>, NotEndsWith?:array<string>}>}>}>
     */
    public function putEventSelectors(array $args): \AWS\Result { }

    /**
     * @param array{TrailName:string, EventSelectors?:array<array{ReadWriteType?:"ReadOnly"|"WriteOnly"|"All", IncludeManagementEvents?:bool, DataResources?:array<array{Type?:string, Values?:array<string>}>, ExcludeManagementEventSources?:array<string>}>, AdvancedEventSelectors?:array<array{Name?:string, FieldSelectors:array<array{Field:string, Equals?:array<string>, StartsWith?:array<string>, EndsWith?:array<string>, NotEquals?:array<string>, NotStartsWith?:array<string>, NotEndsWith?:array<string>}>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{TrailARN?:string, EventSelectors?:array<array{ReadWriteType?:"ReadOnly"|"WriteOnly"|"All", IncludeManagementEvents?:bool, DataResources?:array<array{Type?:string, Values?:array<string>}>, ExcludeManagementEventSources?:array<string>}>, AdvancedEventSelectors?:array<array{Name?:string, FieldSelectors:array<array{Field:string, Equals?:array<string>, StartsWith?:array<string>, EndsWith?:array<string>, NotEquals?:array<string>, NotStartsWith?:array<string>, NotEndsWith?:array<string>}>}>}>
     */
    public function putEventSelectorsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrailName?:string, InsightSelectors:array<array{InsightType?:"ApiCallRateInsight"|"ApiErrorRateInsight"}>, EventDataStore?:string, InsightsDestination?:string} $args
     * @return \AWS\Result<array{TrailARN?:string, InsightSelectors?:array<array{InsightType?:"ApiCallRateInsight"|"ApiErrorRateInsight"}>, EventDataStoreArn?:string, InsightsDestination?:string}>
     */
    public function putInsightSelectors(array $args): \AWS\Result { }

    /**
     * @param array{TrailName?:string, InsightSelectors:array<array{InsightType?:"ApiCallRateInsight"|"ApiErrorRateInsight"}>, EventDataStore?:string, InsightsDestination?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TrailARN?:string, InsightSelectors?:array<array{InsightType?:"ApiCallRateInsight"|"ApiErrorRateInsight"}>, EventDataStoreArn?:string, InsightsDestination?:string}>
     */
    public function putInsightSelectorsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, ResourcePolicy:string} $args
     * @return \AWS\Result<array{ResourceArn?:string, ResourcePolicy?:string, DelegatedAdminResourcePolicy?:string}>
     */
    public function putResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, ResourcePolicy:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceArn?:string, ResourcePolicy?:string, DelegatedAdminResourcePolicy?:string}>
     */
    public function putResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MemberAccountId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function registerOrganizationDelegatedAdmin(array $args): \AWS\Result { }

    /**
     * @param array{MemberAccountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function registerOrganizationDelegatedAdminAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, TagsList:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function removeTags(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, TagsList:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function removeTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EventDataStore:string} $args
     * @return \AWS\Result<array{EventDataStoreArn?:string, Name?:string, Status?:"CREATED"|"ENABLED"|"PENDING_DELETION"|"STARTING_INGESTION"|"STOPPING_INGESTION"|"STOPPED_INGESTION", AdvancedEventSelectors?:array<array{Name?:string, FieldSelectors:array<array{Field:string, Equals?:array<string>, StartsWith?:array<string>, EndsWith?:array<string>, NotEquals?:array<string>, NotStartsWith?:array<string>, NotEndsWith?:array<string>}>}>, MultiRegionEnabled?:bool, OrganizationEnabled?:bool, RetentionPeriod?:int, TerminationProtectionEnabled?:bool, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, KmsKeyId?:string, BillingMode?:"EXTENDABLE_RETENTION_PRICING"|"FIXED_RETENTION_PRICING"}>
     */
    public function restoreEventDataStore(array $args): \AWS\Result { }

    /**
     * @param array{EventDataStore:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventDataStoreArn?:string, Name?:string, Status?:"CREATED"|"ENABLED"|"PENDING_DELETION"|"STARTING_INGESTION"|"STOPPING_INGESTION"|"STOPPED_INGESTION", AdvancedEventSelectors?:array<array{Name?:string, FieldSelectors:array<array{Field:string, Equals?:array<string>, StartsWith?:array<string>, EndsWith?:array<string>, NotEquals?:array<string>, NotStartsWith?:array<string>, NotEndsWith?:array<string>}>}>, MultiRegionEnabled?:bool, OrganizationEnabled?:bool, RetentionPeriod?:int, TerminationProtectionEnabled?:bool, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, KmsKeyId?:string, BillingMode?:"EXTENDABLE_RETENTION_PRICING"|"FIXED_RETENTION_PRICING"}>
     */
    public function restoreEventDataStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DashboardId:string, QueryParameterValues?:array<string, string>} $args
     * @return \AWS\Result<array{RefreshId?:string}>
     */
    public function startDashboardRefresh(array $args): \AWS\Result { }

    /**
     * @param array{DashboardId:string, QueryParameterValues?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{RefreshId?:string}>
     */
    public function startDashboardRefreshAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EventDataStore:string} $args
     * @return \AWS\Result<array{}>
     */
    public function startEventDataStoreIngestion(array $args): \AWS\Result { }

    /**
     * @param array{EventDataStore:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function startEventDataStoreIngestionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Destinations?:array<string>, ImportSource?:array{S3:array{S3LocationUri:string, S3BucketRegion:string, S3BucketAccessRoleArn:string}}, StartEventTime?:int|string|\DateTimeInterface, EndEventTime?:int|string|\DateTimeInterface, ImportId?:string} $args
     * @return \AWS\Result<array{ImportId?:string, Destinations?:array<string>, ImportSource?:array{S3:array{S3LocationUri:string, S3BucketRegion:string, S3BucketAccessRoleArn:string}}, StartEventTime?:int|string|\DateTimeInterface, EndEventTime?:int|string|\DateTimeInterface, ImportStatus?:"INITIALIZING"|"IN_PROGRESS"|"FAILED"|"STOPPED"|"COMPLETED", CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function startImport(array $args = []): \AWS\Result { }

    /**
     * @param array{Destinations?:array<string>, ImportSource?:array{S3:array{S3LocationUri:string, S3BucketRegion:string, S3BucketAccessRoleArn:string}}, StartEventTime?:int|string|\DateTimeInterface, EndEventTime?:int|string|\DateTimeInterface, ImportId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ImportId?:string, Destinations?:array<string>, ImportSource?:array{S3:array{S3LocationUri:string, S3BucketRegion:string, S3BucketAccessRoleArn:string}}, StartEventTime?:int|string|\DateTimeInterface, EndEventTime?:int|string|\DateTimeInterface, ImportStatus?:"INITIALIZING"|"IN_PROGRESS"|"FAILED"|"STOPPED"|"COMPLETED", CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function startImportAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function startLogging(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function startLoggingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QueryStatement?:string, DeliveryS3Uri?:string, QueryAlias?:string, QueryParameters?:array<string>, EventDataStoreOwnerAccountId?:string} $args
     * @return \AWS\Result<array{QueryId?:string, EventDataStoreOwnerAccountId?:string}>
     */
    public function startQuery(array $args = []): \AWS\Result { }

    /**
     * @param array{QueryStatement?:string, DeliveryS3Uri?:string, QueryAlias?:string, QueryParameters?:array<string>, EventDataStoreOwnerAccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{QueryId?:string, EventDataStoreOwnerAccountId?:string}>
     */
    public function startQueryAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EventDataStore:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopEventDataStoreIngestion(array $args): \AWS\Result { }

    /**
     * @param array{EventDataStore:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopEventDataStoreIngestionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ImportId:string} $args
     * @return \AWS\Result<array{ImportId?:string, ImportSource?:array{S3:array{S3LocationUri:string, S3BucketRegion:string, S3BucketAccessRoleArn:string}}, Destinations?:array<string>, ImportStatus?:"INITIALIZING"|"IN_PROGRESS"|"FAILED"|"STOPPED"|"COMPLETED", CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, StartEventTime?:int|string|\DateTimeInterface, EndEventTime?:int|string|\DateTimeInterface, ImportStatistics?:array{PrefixesFound?:int, PrefixesCompleted?:int, FilesCompleted?:int, EventsCompleted?:int, FailedEntries?:int}}>
     */
    public function stopImport(array $args): \AWS\Result { }

    /**
     * @param array{ImportId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ImportId?:string, ImportSource?:array{S3:array{S3LocationUri:string, S3BucketRegion:string, S3BucketAccessRoleArn:string}}, Destinations?:array<string>, ImportStatus?:"INITIALIZING"|"IN_PROGRESS"|"FAILED"|"STOPPED"|"COMPLETED", CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, StartEventTime?:int|string|\DateTimeInterface, EndEventTime?:int|string|\DateTimeInterface, ImportStatistics?:array{PrefixesFound?:int, PrefixesCompleted?:int, FilesCompleted?:int, EventsCompleted?:int, FailedEntries?:int}}>
     */
    public function stopImportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopLogging(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopLoggingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Channel:string, Destinations?:array<array{Type:"EVENT_DATA_STORE"|"AWS_SERVICE", Location:string}>, Name?:string} $args
     * @return \AWS\Result<array{ChannelArn?:string, Name?:string, Source?:string, Destinations?:array<array{Type:"EVENT_DATA_STORE"|"AWS_SERVICE", Location:string}>}>
     */
    public function updateChannel(array $args): \AWS\Result { }

    /**
     * @param array{Channel:string, Destinations?:array<array{Type:"EVENT_DATA_STORE"|"AWS_SERVICE", Location:string}>, Name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelArn?:string, Name?:string, Source?:string, Destinations?:array<array{Type:"EVENT_DATA_STORE"|"AWS_SERVICE", Location:string}>}>
     */
    public function updateChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DashboardId:string, Widgets?:array<array{QueryStatement:string, QueryParameters?:array<string>, ViewProperties:array<string, string>}>, RefreshSchedule?:array{Frequency?:array{Unit?:"HOURS"|"DAYS", Value?:int}, Status?:"ENABLED"|"DISABLED", TimeOfDay?:string}, TerminationProtectionEnabled?:bool} $args
     * @return \AWS\Result<array{DashboardArn?:string, Name?:string, Type?:"MANAGED"|"CUSTOM", Widgets?:array<array{QueryAlias?:string, QueryStatement?:string, QueryParameters?:array<string>, ViewProperties?:array<string, string>}>, RefreshSchedule?:array{Frequency?:array{Unit?:"HOURS"|"DAYS", Value?:int}, Status?:"ENABLED"|"DISABLED", TimeOfDay?:string}, TerminationProtectionEnabled?:bool, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function updateDashboard(array $args): \AWS\Result { }

    /**
     * @param array{DashboardId:string, Widgets?:array<array{QueryStatement:string, QueryParameters?:array<string>, ViewProperties:array<string, string>}>, RefreshSchedule?:array{Frequency?:array{Unit?:"HOURS"|"DAYS", Value?:int}, Status?:"ENABLED"|"DISABLED", TimeOfDay?:string}, TerminationProtectionEnabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{DashboardArn?:string, Name?:string, Type?:"MANAGED"|"CUSTOM", Widgets?:array<array{QueryAlias?:string, QueryStatement?:string, QueryParameters?:array<string>, ViewProperties?:array<string, string>}>, RefreshSchedule?:array{Frequency?:array{Unit?:"HOURS"|"DAYS", Value?:int}, Status?:"ENABLED"|"DISABLED", TimeOfDay?:string}, TerminationProtectionEnabled?:bool, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function updateDashboardAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EventDataStore:string, Name?:string, AdvancedEventSelectors?:array<array{Name?:string, FieldSelectors:array<array{Field:string, Equals?:array<string>, StartsWith?:array<string>, EndsWith?:array<string>, NotEquals?:array<string>, NotStartsWith?:array<string>, NotEndsWith?:array<string>}>}>, MultiRegionEnabled?:bool, OrganizationEnabled?:bool, RetentionPeriod?:int, TerminationProtectionEnabled?:bool, KmsKeyId?:string, BillingMode?:"EXTENDABLE_RETENTION_PRICING"|"FIXED_RETENTION_PRICING"} $args
     * @return \AWS\Result<array{EventDataStoreArn?:string, Name?:string, Status?:"CREATED"|"ENABLED"|"PENDING_DELETION"|"STARTING_INGESTION"|"STOPPING_INGESTION"|"STOPPED_INGESTION", AdvancedEventSelectors?:array<array{Name?:string, FieldSelectors:array<array{Field:string, Equals?:array<string>, StartsWith?:array<string>, EndsWith?:array<string>, NotEquals?:array<string>, NotStartsWith?:array<string>, NotEndsWith?:array<string>}>}>, MultiRegionEnabled?:bool, OrganizationEnabled?:bool, RetentionPeriod?:int, TerminationProtectionEnabled?:bool, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, KmsKeyId?:string, BillingMode?:"EXTENDABLE_RETENTION_PRICING"|"FIXED_RETENTION_PRICING", FederationStatus?:"ENABLING"|"ENABLED"|"DISABLING"|"DISABLED", FederationRoleArn?:string}>
     */
    public function updateEventDataStore(array $args): \AWS\Result { }

    /**
     * @param array{EventDataStore:string, Name?:string, AdvancedEventSelectors?:array<array{Name?:string, FieldSelectors:array<array{Field:string, Equals?:array<string>, StartsWith?:array<string>, EndsWith?:array<string>, NotEquals?:array<string>, NotStartsWith?:array<string>, NotEndsWith?:array<string>}>}>, MultiRegionEnabled?:bool, OrganizationEnabled?:bool, RetentionPeriod?:int, TerminationProtectionEnabled?:bool, KmsKeyId?:string, BillingMode?:"EXTENDABLE_RETENTION_PRICING"|"FIXED_RETENTION_PRICING"} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventDataStoreArn?:string, Name?:string, Status?:"CREATED"|"ENABLED"|"PENDING_DELETION"|"STARTING_INGESTION"|"STOPPING_INGESTION"|"STOPPED_INGESTION", AdvancedEventSelectors?:array<array{Name?:string, FieldSelectors:array<array{Field:string, Equals?:array<string>, StartsWith?:array<string>, EndsWith?:array<string>, NotEquals?:array<string>, NotStartsWith?:array<string>, NotEndsWith?:array<string>}>}>, MultiRegionEnabled?:bool, OrganizationEnabled?:bool, RetentionPeriod?:int, TerminationProtectionEnabled?:bool, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, KmsKeyId?:string, BillingMode?:"EXTENDABLE_RETENTION_PRICING"|"FIXED_RETENTION_PRICING", FederationStatus?:"ENABLING"|"ENABLED"|"DISABLING"|"DISABLED", FederationRoleArn?:string}>
     */
    public function updateEventDataStoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, S3BucketName?:string, S3KeyPrefix?:string, SnsTopicName?:string, IncludeGlobalServiceEvents?:bool, IsMultiRegionTrail?:bool, EnableLogFileValidation?:bool, CloudWatchLogsLogGroupArn?:string, CloudWatchLogsRoleArn?:string, KmsKeyId?:string, IsOrganizationTrail?:bool} $args
     * @return \AWS\Result<array{Name?:string, S3BucketName?:string, S3KeyPrefix?:string, SnsTopicName?:string, SnsTopicARN?:string, IncludeGlobalServiceEvents?:bool, IsMultiRegionTrail?:bool, TrailARN?:string, LogFileValidationEnabled?:bool, CloudWatchLogsLogGroupArn?:string, CloudWatchLogsRoleArn?:string, KmsKeyId?:string, IsOrganizationTrail?:bool}>
     */
    public function updateTrail(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, S3BucketName?:string, S3KeyPrefix?:string, SnsTopicName?:string, IncludeGlobalServiceEvents?:bool, IsMultiRegionTrail?:bool, EnableLogFileValidation?:bool, CloudWatchLogsLogGroupArn?:string, CloudWatchLogsRoleArn?:string, KmsKeyId?:string, IsOrganizationTrail?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name?:string, S3BucketName?:string, S3KeyPrefix?:string, SnsTopicName?:string, SnsTopicARN?:string, IncludeGlobalServiceEvents?:bool, IsMultiRegionTrail?:bool, TrailARN?:string, LogFileValidationEnabled?:bool, CloudWatchLogsLogGroupArn?:string, CloudWatchLogsRoleArn?:string, KmsKeyId?:string, IsOrganizationTrail?:bool}>
     */
    public function updateTrailAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
