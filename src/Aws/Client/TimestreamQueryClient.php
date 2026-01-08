<?php
namespace AWS\TimestreamQuery;

class TimestreamQueryClient
{
    /**
     * @param array{QueryId:string} $args
     * @return \AWS\Result<array{CancellationMessage?:string}>
     */
    public function cancelQuery(array $args): \AWS\Result { }

    /**
     * @param array{QueryId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CancellationMessage?:string}>
     */
    public function cancelQueryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, QueryString:string, ScheduleConfiguration:array{ScheduleExpression:string}, NotificationConfiguration:array{SnsConfiguration:array{TopicArn:string}}, TargetConfiguration?:array{TimestreamConfiguration:array{DatabaseName:string, TableName:string, TimeColumn:string, DimensionMappings:array<array{Name:string, DimensionValueType:"VARCHAR"}>, MultiMeasureMappings?:array{TargetMultiMeasureName?:string, MultiMeasureAttributeMappings:array<array{SourceColumn:string, TargetMultiMeasureAttributeName?:string, MeasureValueType:"BIGINT"|"BOOLEAN"|"DOUBLE"|"VARCHAR"|"TIMESTAMP"}>}, MixedMeasureMappings?:array<array{MeasureName?:string, SourceColumn?:string, TargetMeasureName?:string, MeasureValueType:"BIGINT"|"BOOLEAN"|"DOUBLE"|"VARCHAR"|"MULTI", MultiMeasureAttributeMappings?:array<array{SourceColumn:string, TargetMultiMeasureAttributeName?:string, MeasureValueType:"BIGINT"|"BOOLEAN"|"DOUBLE"|"VARCHAR"|"TIMESTAMP"}>}>, MeasureNameColumn?:string}}, ClientToken?:string, ScheduledQueryExecutionRoleArn:string, Tags?:array<array{Key:string, Value:string}>, KmsKeyId?:string, ErrorReportConfiguration:array{S3Configuration:array{BucketName:string, ObjectKeyPrefix?:string, EncryptionOption?:"SSE_S3"|"SSE_KMS"}}} $args
     * @return \AWS\Result<array{Arn:string}>
     */
    public function createScheduledQuery(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, QueryString:string, ScheduleConfiguration:array{ScheduleExpression:string}, NotificationConfiguration:array{SnsConfiguration:array{TopicArn:string}}, TargetConfiguration?:array{TimestreamConfiguration:array{DatabaseName:string, TableName:string, TimeColumn:string, DimensionMappings:array<array{Name:string, DimensionValueType:"VARCHAR"}>, MultiMeasureMappings?:array{TargetMultiMeasureName?:string, MultiMeasureAttributeMappings:array<array{SourceColumn:string, TargetMultiMeasureAttributeName?:string, MeasureValueType:"BIGINT"|"BOOLEAN"|"DOUBLE"|"VARCHAR"|"TIMESTAMP"}>}, MixedMeasureMappings?:array<array{MeasureName?:string, SourceColumn?:string, TargetMeasureName?:string, MeasureValueType:"BIGINT"|"BOOLEAN"|"DOUBLE"|"VARCHAR"|"MULTI", MultiMeasureAttributeMappings?:array<array{SourceColumn:string, TargetMultiMeasureAttributeName?:string, MeasureValueType:"BIGINT"|"BOOLEAN"|"DOUBLE"|"VARCHAR"|"TIMESTAMP"}>}>, MeasureNameColumn?:string}}, ClientToken?:string, ScheduledQueryExecutionRoleArn:string, Tags?:array<array{Key:string, Value:string}>, KmsKeyId?:string, ErrorReportConfiguration:array{S3Configuration:array{BucketName:string, ObjectKeyPrefix?:string, EncryptionOption?:"SSE_S3"|"SSE_KMS"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn:string}>
     */
    public function createScheduledQueryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ScheduledQueryArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteScheduledQuery(array $args): \AWS\Result { }

    /**
     * @param array{ScheduledQueryArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteScheduledQueryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{MaxQueryTCU?:int, QueryPricingModel?:"BYTES_SCANNED"|"COMPUTE_UNITS", QueryCompute?:array{ComputeMode?:"ON_DEMAND"|"PROVISIONED", ProvisionedCapacity?:array{ActiveQueryTCU?:int, NotificationConfiguration?:array{SnsConfiguration?:array{TopicArn:string}, RoleArn:string}, LastUpdate?:array{TargetQueryTCU?:int, Status?:"PENDING"|"FAILED"|"SUCCEEDED", StatusMessage?:string}}}}>
     */
    public function describeAccountSettings(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{MaxQueryTCU?:int, QueryPricingModel?:"BYTES_SCANNED"|"COMPUTE_UNITS", QueryCompute?:array{ComputeMode?:"ON_DEMAND"|"PROVISIONED", ProvisionedCapacity?:array{ActiveQueryTCU?:int, NotificationConfiguration?:array{SnsConfiguration?:array{TopicArn:string}, RoleArn:string}, LastUpdate?:array{TargetQueryTCU?:int, Status?:"PENDING"|"FAILED"|"SUCCEEDED", StatusMessage?:string}}}}>
     */
    public function describeAccountSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{Endpoints:array<array{Address:string, CachePeriodInMinutes:int}>}>
     */
    public function describeEndpoints(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{Endpoints:array<array{Address:string, CachePeriodInMinutes:int}>}>
     */
    public function describeEndpointsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ScheduledQueryArn:string} $args
     * @return \AWS\Result<array{ScheduledQuery:array{Arn:string, Name:string, QueryString:string, CreationTime?:int|string|\DateTimeInterface, State:"ENABLED"|"DISABLED", PreviousInvocationTime?:int|string|\DateTimeInterface, NextInvocationTime?:int|string|\DateTimeInterface, ScheduleConfiguration:array{ScheduleExpression:string}, NotificationConfiguration:array{SnsConfiguration:array{TopicArn:string}}, TargetConfiguration?:array{TimestreamConfiguration:array{DatabaseName:string, TableName:string, TimeColumn:string, DimensionMappings:array<array{Name:string, DimensionValueType:"VARCHAR"}>, MultiMeasureMappings?:array{TargetMultiMeasureName?:string, MultiMeasureAttributeMappings:array<array{SourceColumn:string, TargetMultiMeasureAttributeName?:string, MeasureValueType:"BIGINT"|"BOOLEAN"|"DOUBLE"|"VARCHAR"|"TIMESTAMP"}>}, MixedMeasureMappings?:array<array{MeasureName?:string, SourceColumn?:string, TargetMeasureName?:string, MeasureValueType:"BIGINT"|"BOOLEAN"|"DOUBLE"|"VARCHAR"|"MULTI", MultiMeasureAttributeMappings?:array<array{SourceColumn:string, TargetMultiMeasureAttributeName?:string, MeasureValueType:"BIGINT"|"BOOLEAN"|"DOUBLE"|"VARCHAR"|"TIMESTAMP"}>}>, MeasureNameColumn?:string}}, ScheduledQueryExecutionRoleArn?:string, KmsKeyId?:string, ErrorReportConfiguration?:array{S3Configuration:array{BucketName:string, ObjectKeyPrefix?:string, EncryptionOption?:"SSE_S3"|"SSE_KMS"}}, LastRunSummary?:array{InvocationTime?:int|string|\DateTimeInterface, TriggerTime?:int|string|\DateTimeInterface, RunStatus?:"AUTO_TRIGGER_SUCCESS"|"AUTO_TRIGGER_FAILURE"|"MANUAL_TRIGGER_SUCCESS"|"MANUAL_TRIGGER_FAILURE", ExecutionStats?:array{ExecutionTimeInMillis?:int, DataWrites?:int, BytesMetered?:int, CumulativeBytesScanned?:int, RecordsIngested?:int, QueryResultRows?:int}, QueryInsightsResponse?:array{QuerySpatialCoverage?:array{Max?:array{Value?:float, TableArn?:string, PartitionKey?:array<string>}}, QueryTemporalRange?:array{Max?:array{Value?:int, TableArn?:string}}, QueryTableCount?:int, OutputRows?:int, OutputBytes?:int}, ErrorReportLocation?:array{S3ReportLocation?:array{BucketName?:string, ObjectKey?:string}}, FailureReason?:string}, RecentlyFailedRuns?:array<array{InvocationTime?:int|string|\DateTimeInterface, TriggerTime?:int|string|\DateTimeInterface, RunStatus?:"AUTO_TRIGGER_SUCCESS"|"AUTO_TRIGGER_FAILURE"|"MANUAL_TRIGGER_SUCCESS"|"MANUAL_TRIGGER_FAILURE", ExecutionStats?:array{ExecutionTimeInMillis?:int, DataWrites?:int, BytesMetered?:int, CumulativeBytesScanned?:int, RecordsIngested?:int, QueryResultRows?:int}, QueryInsightsResponse?:array{QuerySpatialCoverage?:array{Max?:array{Value?:float, TableArn?:string, PartitionKey?:array<string>}}, QueryTemporalRange?:array{Max?:array{Value?:int, TableArn?:string}}, QueryTableCount?:int, OutputRows?:int, OutputBytes?:int}, ErrorReportLocation?:array{S3ReportLocation?:array{BucketName?:string, ObjectKey?:string}}, FailureReason?:string}>}}>
     */
    public function describeScheduledQuery(array $args): \AWS\Result { }

    /**
     * @param array{ScheduledQueryArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ScheduledQuery:array{Arn:string, Name:string, QueryString:string, CreationTime?:int|string|\DateTimeInterface, State:"ENABLED"|"DISABLED", PreviousInvocationTime?:int|string|\DateTimeInterface, NextInvocationTime?:int|string|\DateTimeInterface, ScheduleConfiguration:array{ScheduleExpression:string}, NotificationConfiguration:array{SnsConfiguration:array{TopicArn:string}}, TargetConfiguration?:array{TimestreamConfiguration:array{DatabaseName:string, TableName:string, TimeColumn:string, DimensionMappings:array<array{Name:string, DimensionValueType:"VARCHAR"}>, MultiMeasureMappings?:array{TargetMultiMeasureName?:string, MultiMeasureAttributeMappings:array<array{SourceColumn:string, TargetMultiMeasureAttributeName?:string, MeasureValueType:"BIGINT"|"BOOLEAN"|"DOUBLE"|"VARCHAR"|"TIMESTAMP"}>}, MixedMeasureMappings?:array<array{MeasureName?:string, SourceColumn?:string, TargetMeasureName?:string, MeasureValueType:"BIGINT"|"BOOLEAN"|"DOUBLE"|"VARCHAR"|"MULTI", MultiMeasureAttributeMappings?:array<array{SourceColumn:string, TargetMultiMeasureAttributeName?:string, MeasureValueType:"BIGINT"|"BOOLEAN"|"DOUBLE"|"VARCHAR"|"TIMESTAMP"}>}>, MeasureNameColumn?:string}}, ScheduledQueryExecutionRoleArn?:string, KmsKeyId?:string, ErrorReportConfiguration?:array{S3Configuration:array{BucketName:string, ObjectKeyPrefix?:string, EncryptionOption?:"SSE_S3"|"SSE_KMS"}}, LastRunSummary?:array{InvocationTime?:int|string|\DateTimeInterface, TriggerTime?:int|string|\DateTimeInterface, RunStatus?:"AUTO_TRIGGER_SUCCESS"|"AUTO_TRIGGER_FAILURE"|"MANUAL_TRIGGER_SUCCESS"|"MANUAL_TRIGGER_FAILURE", ExecutionStats?:array{ExecutionTimeInMillis?:int, DataWrites?:int, BytesMetered?:int, CumulativeBytesScanned?:int, RecordsIngested?:int, QueryResultRows?:int}, QueryInsightsResponse?:array{QuerySpatialCoverage?:array{Max?:array{Value?:float, TableArn?:string, PartitionKey?:array<string>}}, QueryTemporalRange?:array{Max?:array{Value?:int, TableArn?:string}}, QueryTableCount?:int, OutputRows?:int, OutputBytes?:int}, ErrorReportLocation?:array{S3ReportLocation?:array{BucketName?:string, ObjectKey?:string}}, FailureReason?:string}, RecentlyFailedRuns?:array<array{InvocationTime?:int|string|\DateTimeInterface, TriggerTime?:int|string|\DateTimeInterface, RunStatus?:"AUTO_TRIGGER_SUCCESS"|"AUTO_TRIGGER_FAILURE"|"MANUAL_TRIGGER_SUCCESS"|"MANUAL_TRIGGER_FAILURE", ExecutionStats?:array{ExecutionTimeInMillis?:int, DataWrites?:int, BytesMetered?:int, CumulativeBytesScanned?:int, RecordsIngested?:int, QueryResultRows?:int}, QueryInsightsResponse?:array{QuerySpatialCoverage?:array{Max?:array{Value?:float, TableArn?:string, PartitionKey?:array<string>}}, QueryTemporalRange?:array{Max?:array{Value?:int, TableArn?:string}}, QueryTableCount?:int, OutputRows?:int, OutputBytes?:int}, ErrorReportLocation?:array{S3ReportLocation?:array{BucketName?:string, ObjectKey?:string}}, FailureReason?:string}>}}>
     */
    public function describeScheduledQueryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ScheduledQueryArn:string, InvocationTime:int|string|\DateTimeInterface, ClientToken?:string, QueryInsights?:array{Mode:"ENABLED_WITH_RATE_CONTROL"|"DISABLED"}} $args
     * @return \AWS\Result<void>
     */
    public function executeScheduledQuery(array $args): \AWS\Result { }

    /**
     * @param array{ScheduledQueryArn:string, InvocationTime:int|string|\DateTimeInterface, ClientToken?:string, QueryInsights?:array{Mode:"ENABLED_WITH_RATE_CONTROL"|"DISABLED"}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function executeScheduledQueryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ScheduledQueries:array<array{Arn:string, Name:string, CreationTime?:int|string|\DateTimeInterface, State:"ENABLED"|"DISABLED", PreviousInvocationTime?:int|string|\DateTimeInterface, NextInvocationTime?:int|string|\DateTimeInterface, ErrorReportConfiguration?:array{S3Configuration:array{BucketName:string, ObjectKeyPrefix?:string, EncryptionOption?:"SSE_S3"|"SSE_KMS"}}, TargetDestination?:array{TimestreamDestination?:array{DatabaseName?:string, TableName?:string}}, LastRunStatus?:"AUTO_TRIGGER_SUCCESS"|"AUTO_TRIGGER_FAILURE"|"MANUAL_TRIGGER_SUCCESS"|"MANUAL_TRIGGER_FAILURE"}>, NextToken?:string}>
     */
    public function listScheduledQueries(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ScheduledQueries:array<array{Arn:string, Name:string, CreationTime?:int|string|\DateTimeInterface, State:"ENABLED"|"DISABLED", PreviousInvocationTime?:int|string|\DateTimeInterface, NextInvocationTime?:int|string|\DateTimeInterface, ErrorReportConfiguration?:array{S3Configuration:array{BucketName:string, ObjectKeyPrefix?:string, EncryptionOption?:"SSE_S3"|"SSE_KMS"}}, TargetDestination?:array{TimestreamDestination?:array{DatabaseName?:string, TableName?:string}}, LastRunStatus?:"AUTO_TRIGGER_SUCCESS"|"AUTO_TRIGGER_FAILURE"|"MANUAL_TRIGGER_SUCCESS"|"MANUAL_TRIGGER_FAILURE"}>, NextToken?:string}>
     */
    public function listScheduledQueriesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Tags:array<array{Key:string, Value:string}>, NextToken?:string}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags:array<array{Key:string, Value:string}>, NextToken?:string}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QueryString:string, ValidateOnly?:bool} $args
     * @return \AWS\Result<array{QueryString:string, Columns:array<array{Name?:string, Type?:array{ScalarType?:"VARCHAR"|"BOOLEAN"|"BIGINT"|"DOUBLE"|"TIMESTAMP"|"DATE"|"TIME"|"INTERVAL_DAY_TO_SECOND"|"INTERVAL_YEAR_TO_MONTH"|"UNKNOWN"|"INTEGER", ArrayColumnInfo?:array{Name?:string, Type:mixed}, TimeSeriesMeasureValueColumnInfo?:array{Name?:string, Type:mixed}, RowColumnInfo?:array<array{Name?:string, Type:mixed}>}, DatabaseName?:string, TableName?:string, Aliased?:bool}>, Parameters:array<array{Name:string, Type:array{ScalarType?:"VARCHAR"|"BOOLEAN"|"BIGINT"|"DOUBLE"|"TIMESTAMP"|"DATE"|"TIME"|"INTERVAL_DAY_TO_SECOND"|"INTERVAL_YEAR_TO_MONTH"|"UNKNOWN"|"INTEGER", ArrayColumnInfo?:array{Name?:string, Type:mixed}, TimeSeriesMeasureValueColumnInfo?:array{Name?:string, Type:mixed}, RowColumnInfo?:array<array{Name?:string, Type:mixed}>}}>}>
     */
    public function prepareQuery(array $args): \AWS\Result { }

    /**
     * @param array{QueryString:string, ValidateOnly?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{QueryString:string, Columns:array<array{Name?:string, Type?:array{ScalarType?:"VARCHAR"|"BOOLEAN"|"BIGINT"|"DOUBLE"|"TIMESTAMP"|"DATE"|"TIME"|"INTERVAL_DAY_TO_SECOND"|"INTERVAL_YEAR_TO_MONTH"|"UNKNOWN"|"INTEGER", ArrayColumnInfo?:array{Name?:string, Type:mixed}, TimeSeriesMeasureValueColumnInfo?:array{Name?:string, Type:mixed}, RowColumnInfo?:array<array{Name?:string, Type:mixed}>}, DatabaseName?:string, TableName?:string, Aliased?:bool}>, Parameters:array<array{Name:string, Type:array{ScalarType?:"VARCHAR"|"BOOLEAN"|"BIGINT"|"DOUBLE"|"TIMESTAMP"|"DATE"|"TIME"|"INTERVAL_DAY_TO_SECOND"|"INTERVAL_YEAR_TO_MONTH"|"UNKNOWN"|"INTEGER", ArrayColumnInfo?:array{Name?:string, Type:mixed}, TimeSeriesMeasureValueColumnInfo?:array{Name?:string, Type:mixed}, RowColumnInfo?:array<array{Name?:string, Type:mixed}>}}>}>
     */
    public function prepareQueryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{QueryString:string, ClientToken?:string, NextToken?:string, MaxRows?:int, QueryInsights?:array{Mode:"ENABLED_WITH_RATE_CONTROL"|"DISABLED"}} $args
     * @return \AWS\Result<array{QueryId:string, NextToken?:string, Rows:array<array{Data:array<array{ScalarValue?:string, TimeSeriesValue?:array<array{Time:string, Value:array{ScalarValue?:string, TimeSeriesValue?:mixed, ArrayValue?:array<array{ScalarValue?:string, TimeSeriesValue?:mixed, ArrayValue?:mixed, RowValue?:array{Data:mixed}, NullValue?:bool}>, RowValue?:array{Data:mixed}, NullValue?:bool}}>, ArrayValue?:array<array{ScalarValue?:string, TimeSeriesValue?:array<array{Time:string, Value:array{ScalarValue?:string, TimeSeriesValue?:mixed, ArrayValue?:mixed, RowValue?:array{Data:mixed}, NullValue?:bool}}>, ArrayValue?:mixed, RowValue?:array{Data:mixed}, NullValue?:bool}>, RowValue?:array{Data:mixed}, NullValue?:bool}>}>, ColumnInfo:array<array{Name?:string, Type:array{ScalarType?:"VARCHAR"|"BOOLEAN"|"BIGINT"|"DOUBLE"|"TIMESTAMP"|"DATE"|"TIME"|"INTERVAL_DAY_TO_SECOND"|"INTERVAL_YEAR_TO_MONTH"|"UNKNOWN"|"INTEGER", ArrayColumnInfo?:array{Name?:string, Type:mixed}, TimeSeriesMeasureValueColumnInfo?:array{Name?:string, Type:mixed}, RowColumnInfo?:array<array{Name?:string, Type:mixed}>}}>, QueryStatus?:array{ProgressPercentage?:float, CumulativeBytesScanned?:int, CumulativeBytesMetered?:int}, QueryInsightsResponse?:array{QuerySpatialCoverage?:array{Max?:array{Value?:float, TableArn?:string, PartitionKey?:array<string>}}, QueryTemporalRange?:array{Max?:array{Value?:int, TableArn?:string}}, QueryTableCount?:int, OutputRows?:int, OutputBytes?:int, UnloadPartitionCount?:int, UnloadWrittenRows?:int, UnloadWrittenBytes?:int}}>
     */
    public function query(array $args): \AWS\Result { }

    /**
     * @param array{QueryString:string, ClientToken?:string, NextToken?:string, MaxRows?:int, QueryInsights?:array{Mode:"ENABLED_WITH_RATE_CONTROL"|"DISABLED"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{QueryId:string, NextToken?:string, Rows:array<array{Data:array<array{ScalarValue?:string, TimeSeriesValue?:array<array{Time:string, Value:array{ScalarValue?:string, TimeSeriesValue?:mixed, ArrayValue?:array<array{ScalarValue?:string, TimeSeriesValue?:mixed, ArrayValue?:mixed, RowValue?:array{Data:mixed}, NullValue?:bool}>, RowValue?:array{Data:mixed}, NullValue?:bool}}>, ArrayValue?:array<array{ScalarValue?:string, TimeSeriesValue?:array<array{Time:string, Value:array{ScalarValue?:string, TimeSeriesValue?:mixed, ArrayValue?:mixed, RowValue?:array{Data:mixed}, NullValue?:bool}}>, ArrayValue?:mixed, RowValue?:array{Data:mixed}, NullValue?:bool}>, RowValue?:array{Data:mixed}, NullValue?:bool}>}>, ColumnInfo:array<array{Name?:string, Type:array{ScalarType?:"VARCHAR"|"BOOLEAN"|"BIGINT"|"DOUBLE"|"TIMESTAMP"|"DATE"|"TIME"|"INTERVAL_DAY_TO_SECOND"|"INTERVAL_YEAR_TO_MONTH"|"UNKNOWN"|"INTEGER", ArrayColumnInfo?:array{Name?:string, Type:mixed}, TimeSeriesMeasureValueColumnInfo?:array{Name?:string, Type:mixed}, RowColumnInfo?:array<array{Name?:string, Type:mixed}>}}>, QueryStatus?:array{ProgressPercentage?:float, CumulativeBytesScanned?:int, CumulativeBytesMetered?:int}, QueryInsightsResponse?:array{QuerySpatialCoverage?:array{Max?:array{Value?:float, TableArn?:string, PartitionKey?:array<string>}}, QueryTemporalRange?:array{Max?:array{Value?:int, TableArn?:string}}, QueryTableCount?:int, OutputRows?:int, OutputBytes?:int, UnloadPartitionCount?:int, UnloadWrittenRows?:int, UnloadWrittenBytes?:int}}>
     */
    public function queryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxQueryTCU?:int, QueryPricingModel?:"BYTES_SCANNED"|"COMPUTE_UNITS", QueryCompute?:array{ComputeMode?:"ON_DEMAND"|"PROVISIONED", ProvisionedCapacity?:array{TargetQueryTCU:int, NotificationConfiguration?:array{SnsConfiguration?:array{TopicArn:string}, RoleArn:string}}}} $args
     * @return \AWS\Result<array{MaxQueryTCU?:int, QueryPricingModel?:"BYTES_SCANNED"|"COMPUTE_UNITS", QueryCompute?:array{ComputeMode?:"ON_DEMAND"|"PROVISIONED", ProvisionedCapacity?:array{ActiveQueryTCU?:int, NotificationConfiguration?:array{SnsConfiguration?:array{TopicArn:string}, RoleArn:string}, LastUpdate?:array{TargetQueryTCU?:int, Status?:"PENDING"|"FAILED"|"SUCCEEDED", StatusMessage?:string}}}}>
     */
    public function updateAccountSettings(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxQueryTCU?:int, QueryPricingModel?:"BYTES_SCANNED"|"COMPUTE_UNITS", QueryCompute?:array{ComputeMode?:"ON_DEMAND"|"PROVISIONED", ProvisionedCapacity?:array{TargetQueryTCU:int, NotificationConfiguration?:array{SnsConfiguration?:array{TopicArn:string}, RoleArn:string}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{MaxQueryTCU?:int, QueryPricingModel?:"BYTES_SCANNED"|"COMPUTE_UNITS", QueryCompute?:array{ComputeMode?:"ON_DEMAND"|"PROVISIONED", ProvisionedCapacity?:array{ActiveQueryTCU?:int, NotificationConfiguration?:array{SnsConfiguration?:array{TopicArn:string}, RoleArn:string}, LastUpdate?:array{TargetQueryTCU?:int, Status?:"PENDING"|"FAILED"|"SUCCEEDED", StatusMessage?:string}}}}>
     */
    public function updateAccountSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ScheduledQueryArn:string, State:"ENABLED"|"DISABLED"} $args
     * @return \AWS\Result<void>
     */
    public function updateScheduledQuery(array $args): \AWS\Result { }

    /**
     * @param array{ScheduledQueryArn:string, State:"ENABLED"|"DISABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateScheduledQueryAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
