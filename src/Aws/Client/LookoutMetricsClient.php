<?php
namespace AWS\LookoutMetrics;

class LookoutMetricsClient
{
    /**
     * @param array{AnomalyDetectorArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function activateAnomalyDetector(array $args): \AWS\Result { }

    /**
     * @param array{AnomalyDetectorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function activateAnomalyDetectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AnomalyDetectorArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function backTestAnomalyDetector(array $args): \AWS\Result { }

    /**
     * @param array{AnomalyDetectorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function backTestAnomalyDetectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AlertName:string, AlertSensitivityThreshold?:int, AlertDescription?:string, AnomalyDetectorArn:string, Action:array{SNSConfiguration?:array{RoleArn:string, SnsTopicArn:string, SnsFormat?:"LONG_TEXT"|"SHORT_TEXT"|"JSON"}, LambdaConfiguration?:array{RoleArn:string, LambdaArn:string}}, Tags?:array<string, string>, AlertFilters?:array{MetricList?:array<string>, DimensionFilterList?:array<array{DimensionName?:string, DimensionValueList?:array<string>}>}} $args
     * @return \AWS\Result<array{AlertArn?:string}>
     */
    public function createAlert(array $args): \AWS\Result { }

    /**
     * @param array{AlertName:string, AlertSensitivityThreshold?:int, AlertDescription?:string, AnomalyDetectorArn:string, Action:array{SNSConfiguration?:array{RoleArn:string, SnsTopicArn:string, SnsFormat?:"LONG_TEXT"|"SHORT_TEXT"|"JSON"}, LambdaConfiguration?:array{RoleArn:string, LambdaArn:string}}, Tags?:array<string, string>, AlertFilters?:array{MetricList?:array<string>, DimensionFilterList?:array<array{DimensionName?:string, DimensionValueList?:array<string>}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{AlertArn?:string}>
     */
    public function createAlertAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AnomalyDetectorName:string, AnomalyDetectorDescription?:string, AnomalyDetectorConfig:array{AnomalyDetectorFrequency?:"P1D"|"PT1H"|"PT10M"|"PT5M"}, KmsKeyArn?:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{AnomalyDetectorArn?:string}>
     */
    public function createAnomalyDetector(array $args): \AWS\Result { }

    /**
     * @param array{AnomalyDetectorName:string, AnomalyDetectorDescription?:string, AnomalyDetectorConfig:array{AnomalyDetectorFrequency?:"P1D"|"PT1H"|"PT10M"|"PT5M"}, KmsKeyArn?:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{AnomalyDetectorArn?:string}>
     */
    public function createAnomalyDetectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AnomalyDetectorArn:string, MetricSetName:string, MetricSetDescription?:string, MetricList:array<array{MetricName:string, AggregationFunction:"AVG"|"SUM", Namespace?:string}>, Offset?:int, TimestampColumn?:array{ColumnName?:string, ColumnFormat?:string}, DimensionList?:array<string>, MetricSetFrequency?:"P1D"|"PT1H"|"PT10M"|"PT5M", MetricSource:array{S3SourceConfig?:array{RoleArn?:string, TemplatedPathList?:array<string>, HistoricalDataPathList?:array<string>, FileFormatDescriptor?:array{CsvFormatDescriptor?:array{FileCompression?:"NONE"|"GZIP", Charset?:string, ContainsHeader?:bool, Delimiter?:string, HeaderList?:array<string>, QuoteSymbol?:string}, JsonFormatDescriptor?:array{FileCompression?:"NONE"|"GZIP", Charset?:string}}}, AppFlowConfig?:array{RoleArn?:string, FlowName?:string}, CloudWatchConfig?:array{RoleArn?:string, BackTestConfiguration?:array{RunBackTestMode:bool}}, RDSSourceConfig?:array{DBInstanceIdentifier?:string, DatabaseHost?:string, DatabasePort?:int, SecretManagerArn?:string, DatabaseName?:string, TableName?:string, RoleArn?:string, VpcConfiguration?:array{SubnetIdList:array<string>, SecurityGroupIdList:array<string>}}, RedshiftSourceConfig?:array{ClusterIdentifier?:string, DatabaseHost?:string, DatabasePort?:int, SecretManagerArn?:string, DatabaseName?:string, TableName?:string, RoleArn?:string, VpcConfiguration?:array{SubnetIdList:array<string>, SecurityGroupIdList:array<string>}}, AthenaSourceConfig?:array{RoleArn?:string, DatabaseName?:string, DataCatalog?:string, TableName?:string, WorkGroupName?:string, S3ResultsPath?:string, BackTestConfiguration?:array{RunBackTestMode:bool}}}, Timezone?:string, Tags?:array<string, string>, DimensionFilterList?:array<array{Name?:string, FilterList?:array<array{DimensionValue?:string, FilterOperation?:"EQUALS"}>}>} $args
     * @return \AWS\Result<array{MetricSetArn?:string}>
     */
    public function createMetricSet(array $args): \AWS\Result { }

    /**
     * @param array{AnomalyDetectorArn:string, MetricSetName:string, MetricSetDescription?:string, MetricList:array<array{MetricName:string, AggregationFunction:"AVG"|"SUM", Namespace?:string}>, Offset?:int, TimestampColumn?:array{ColumnName?:string, ColumnFormat?:string}, DimensionList?:array<string>, MetricSetFrequency?:"P1D"|"PT1H"|"PT10M"|"PT5M", MetricSource:array{S3SourceConfig?:array{RoleArn?:string, TemplatedPathList?:array<string>, HistoricalDataPathList?:array<string>, FileFormatDescriptor?:array{CsvFormatDescriptor?:array{FileCompression?:"NONE"|"GZIP", Charset?:string, ContainsHeader?:bool, Delimiter?:string, HeaderList?:array<string>, QuoteSymbol?:string}, JsonFormatDescriptor?:array{FileCompression?:"NONE"|"GZIP", Charset?:string}}}, AppFlowConfig?:array{RoleArn?:string, FlowName?:string}, CloudWatchConfig?:array{RoleArn?:string, BackTestConfiguration?:array{RunBackTestMode:bool}}, RDSSourceConfig?:array{DBInstanceIdentifier?:string, DatabaseHost?:string, DatabasePort?:int, SecretManagerArn?:string, DatabaseName?:string, TableName?:string, RoleArn?:string, VpcConfiguration?:array{SubnetIdList:array<string>, SecurityGroupIdList:array<string>}}, RedshiftSourceConfig?:array{ClusterIdentifier?:string, DatabaseHost?:string, DatabasePort?:int, SecretManagerArn?:string, DatabaseName?:string, TableName?:string, RoleArn?:string, VpcConfiguration?:array{SubnetIdList:array<string>, SecurityGroupIdList:array<string>}}, AthenaSourceConfig?:array{RoleArn?:string, DatabaseName?:string, DataCatalog?:string, TableName?:string, WorkGroupName?:string, S3ResultsPath?:string, BackTestConfiguration?:array{RunBackTestMode:bool}}}, Timezone?:string, Tags?:array<string, string>, DimensionFilterList?:array<array{Name?:string, FilterList?:array<array{DimensionValue?:string, FilterOperation?:"EQUALS"}>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{MetricSetArn?:string}>
     */
    public function createMetricSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AnomalyDetectorArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deactivateAnomalyDetector(array $args): \AWS\Result { }

    /**
     * @param array{AnomalyDetectorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deactivateAnomalyDetectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AlertArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAlert(array $args): \AWS\Result { }

    /**
     * @param array{AlertArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAlertAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AnomalyDetectorArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAnomalyDetector(array $args): \AWS\Result { }

    /**
     * @param array{AnomalyDetectorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAnomalyDetectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AlertArn:string} $args
     * @return \AWS\Result<array{Alert?:array{Action?:array{SNSConfiguration?:array{RoleArn:string, SnsTopicArn:string, SnsFormat?:"LONG_TEXT"|"SHORT_TEXT"|"JSON"}, LambdaConfiguration?:array{RoleArn:string, LambdaArn:string}}, AlertDescription?:string, AlertArn?:string, AnomalyDetectorArn?:string, AlertName?:string, AlertSensitivityThreshold?:int, AlertType?:"SNS"|"LAMBDA", AlertStatus?:"ACTIVE"|"INACTIVE", LastModificationTime?:int|string|\DateTimeInterface, CreationTime?:int|string|\DateTimeInterface, AlertFilters?:array{MetricList?:array<string>, DimensionFilterList?:array<array{DimensionName?:string, DimensionValueList?:array<string>}>}}}>
     */
    public function describeAlert(array $args): \AWS\Result { }

    /**
     * @param array{AlertArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Alert?:array{Action?:array{SNSConfiguration?:array{RoleArn:string, SnsTopicArn:string, SnsFormat?:"LONG_TEXT"|"SHORT_TEXT"|"JSON"}, LambdaConfiguration?:array{RoleArn:string, LambdaArn:string}}, AlertDescription?:string, AlertArn?:string, AnomalyDetectorArn?:string, AlertName?:string, AlertSensitivityThreshold?:int, AlertType?:"SNS"|"LAMBDA", AlertStatus?:"ACTIVE"|"INACTIVE", LastModificationTime?:int|string|\DateTimeInterface, CreationTime?:int|string|\DateTimeInterface, AlertFilters?:array{MetricList?:array<string>, DimensionFilterList?:array<array{DimensionName?:string, DimensionValueList?:array<string>}>}}}>
     */
    public function describeAlertAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AnomalyDetectorArn:string, Timestamp?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ExecutionList?:array<array{Timestamp?:string, Status?:"PENDING"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"FAILED_TO_SCHEDULE", FailureReason?:string}>, NextToken?:string}>
     */
    public function describeAnomalyDetectionExecutions(array $args): \AWS\Result { }

    /**
     * @param array{AnomalyDetectorArn:string, Timestamp?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ExecutionList?:array<array{Timestamp?:string, Status?:"PENDING"|"IN_PROGRESS"|"COMPLETED"|"FAILED"|"FAILED_TO_SCHEDULE", FailureReason?:string}>, NextToken?:string}>
     */
    public function describeAnomalyDetectionExecutionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AnomalyDetectorArn:string} $args
     * @return \AWS\Result<array{AnomalyDetectorArn?:string, AnomalyDetectorName?:string, AnomalyDetectorDescription?:string, AnomalyDetectorConfig?:array{AnomalyDetectorFrequency?:"P1D"|"PT1H"|"PT10M"|"PT5M"}, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface, Status?:"ACTIVE"|"ACTIVATING"|"DELETING"|"FAILED"|"INACTIVE"|"LEARNING"|"BACK_TEST_ACTIVATING"|"BACK_TEST_ACTIVE"|"BACK_TEST_COMPLETE"|"DEACTIVATED"|"DEACTIVATING", FailureReason?:string, KmsKeyArn?:string, FailureType?:"ACTIVATION_FAILURE"|"BACK_TEST_ACTIVATION_FAILURE"|"DELETION_FAILURE"|"DEACTIVATION_FAILURE"}>
     */
    public function describeAnomalyDetector(array $args): \AWS\Result { }

    /**
     * @param array{AnomalyDetectorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AnomalyDetectorArn?:string, AnomalyDetectorName?:string, AnomalyDetectorDescription?:string, AnomalyDetectorConfig?:array{AnomalyDetectorFrequency?:"P1D"|"PT1H"|"PT10M"|"PT5M"}, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface, Status?:"ACTIVE"|"ACTIVATING"|"DELETING"|"FAILED"|"INACTIVE"|"LEARNING"|"BACK_TEST_ACTIVATING"|"BACK_TEST_ACTIVE"|"BACK_TEST_COMPLETE"|"DEACTIVATED"|"DEACTIVATING", FailureReason?:string, KmsKeyArn?:string, FailureType?:"ACTIVATION_FAILURE"|"BACK_TEST_ACTIVATION_FAILURE"|"DELETION_FAILURE"|"DEACTIVATION_FAILURE"}>
     */
    public function describeAnomalyDetectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MetricSetArn:string} $args
     * @return \AWS\Result<array{MetricSetArn?:string, AnomalyDetectorArn?:string, MetricSetName?:string, MetricSetDescription?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface, Offset?:int, MetricList?:array<array{MetricName:string, AggregationFunction:"AVG"|"SUM", Namespace?:string}>, TimestampColumn?:array{ColumnName?:string, ColumnFormat?:string}, DimensionList?:array<string>, MetricSetFrequency?:"P1D"|"PT1H"|"PT10M"|"PT5M", Timezone?:string, MetricSource?:array{S3SourceConfig?:array{RoleArn?:string, TemplatedPathList?:array<string>, HistoricalDataPathList?:array<string>, FileFormatDescriptor?:array{CsvFormatDescriptor?:array{FileCompression?:"NONE"|"GZIP", Charset?:string, ContainsHeader?:bool, Delimiter?:string, HeaderList?:array<string>, QuoteSymbol?:string}, JsonFormatDescriptor?:array{FileCompression?:"NONE"|"GZIP", Charset?:string}}}, AppFlowConfig?:array{RoleArn?:string, FlowName?:string}, CloudWatchConfig?:array{RoleArn?:string, BackTestConfiguration?:array{RunBackTestMode:bool}}, RDSSourceConfig?:array{DBInstanceIdentifier?:string, DatabaseHost?:string, DatabasePort?:int, SecretManagerArn?:string, DatabaseName?:string, TableName?:string, RoleArn?:string, VpcConfiguration?:array{SubnetIdList:array<string>, SecurityGroupIdList:array<string>}}, RedshiftSourceConfig?:array{ClusterIdentifier?:string, DatabaseHost?:string, DatabasePort?:int, SecretManagerArn?:string, DatabaseName?:string, TableName?:string, RoleArn?:string, VpcConfiguration?:array{SubnetIdList:array<string>, SecurityGroupIdList:array<string>}}, AthenaSourceConfig?:array{RoleArn?:string, DatabaseName?:string, DataCatalog?:string, TableName?:string, WorkGroupName?:string, S3ResultsPath?:string, BackTestConfiguration?:array{RunBackTestMode:bool}}}, DimensionFilterList?:array<array{Name?:string, FilterList?:array<array{DimensionValue?:string, FilterOperation?:"EQUALS"}>}>}>
     */
    public function describeMetricSet(array $args): \AWS\Result { }

    /**
     * @param array{MetricSetArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MetricSetArn?:string, AnomalyDetectorArn?:string, MetricSetName?:string, MetricSetDescription?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface, Offset?:int, MetricList?:array<array{MetricName:string, AggregationFunction:"AVG"|"SUM", Namespace?:string}>, TimestampColumn?:array{ColumnName?:string, ColumnFormat?:string}, DimensionList?:array<string>, MetricSetFrequency?:"P1D"|"PT1H"|"PT10M"|"PT5M", Timezone?:string, MetricSource?:array{S3SourceConfig?:array{RoleArn?:string, TemplatedPathList?:array<string>, HistoricalDataPathList?:array<string>, FileFormatDescriptor?:array{CsvFormatDescriptor?:array{FileCompression?:"NONE"|"GZIP", Charset?:string, ContainsHeader?:bool, Delimiter?:string, HeaderList?:array<string>, QuoteSymbol?:string}, JsonFormatDescriptor?:array{FileCompression?:"NONE"|"GZIP", Charset?:string}}}, AppFlowConfig?:array{RoleArn?:string, FlowName?:string}, CloudWatchConfig?:array{RoleArn?:string, BackTestConfiguration?:array{RunBackTestMode:bool}}, RDSSourceConfig?:array{DBInstanceIdentifier?:string, DatabaseHost?:string, DatabasePort?:int, SecretManagerArn?:string, DatabaseName?:string, TableName?:string, RoleArn?:string, VpcConfiguration?:array{SubnetIdList:array<string>, SecurityGroupIdList:array<string>}}, RedshiftSourceConfig?:array{ClusterIdentifier?:string, DatabaseHost?:string, DatabasePort?:int, SecretManagerArn?:string, DatabaseName?:string, TableName?:string, RoleArn?:string, VpcConfiguration?:array{SubnetIdList:array<string>, SecurityGroupIdList:array<string>}}, AthenaSourceConfig?:array{RoleArn?:string, DatabaseName?:string, DataCatalog?:string, TableName?:string, WorkGroupName?:string, S3ResultsPath?:string, BackTestConfiguration?:array{RunBackTestMode:bool}}}, DimensionFilterList?:array<array{Name?:string, FilterList?:array<array{DimensionValue?:string, FilterOperation?:"EQUALS"}>}>}>
     */
    public function describeMetricSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AnomalyDetectorArn:string, AutoDetectionMetricSource:array{S3SourceConfig?:array{TemplatedPathList?:array<string>, HistoricalDataPathList?:array<string>}}} $args
     * @return \AWS\Result<array{DetectedMetricSetConfig?:array{Offset?:array{Value?:array{S?:string, N?:string, B?:string, SS?:array<string>, NS?:array<string>, BS?:array<string>}, Confidence?:"HIGH"|"LOW"|"NONE", Message?:string}, MetricSetFrequency?:array{Value?:array{S?:string, N?:string, B?:string, SS?:array<string>, NS?:array<string>, BS?:array<string>}, Confidence?:"HIGH"|"LOW"|"NONE", Message?:string}, MetricSource?:array{S3SourceConfig?:array{FileFormatDescriptor?:array{CsvFormatDescriptor?:array{FileCompression?:array{Value?:array{S?:string, N?:string, B?:string, SS?:array<string>, NS?:array<string>, BS?:array<string>}, Confidence?:"HIGH"|"LOW"|"NONE", Message?:string}, Charset?:array{Value?:array{S?:string, N?:string, B?:string, SS?:array<string>, NS?:array<string>, BS?:array<string>}, Confidence?:"HIGH"|"LOW"|"NONE", Message?:string}, ContainsHeader?:array{Value?:array{S?:string, N?:string, B?:string, SS?:array<string>, NS?:array<string>, BS?:array<string>}, Confidence?:"HIGH"|"LOW"|"NONE", Message?:string}, Delimiter?:array{Value?:array{S?:string, N?:string, B?:string, SS?:array<string>, NS?:array<string>, BS?:array<string>}, Confidence?:"HIGH"|"LOW"|"NONE", Message?:string}, HeaderList?:array{Value?:array{S?:string, N?:string, B?:string, SS?:array<string>, NS?:array<string>, BS?:array<string>}, Confidence?:"HIGH"|"LOW"|"NONE", Message?:string}, QuoteSymbol?:array{Value?:array{S?:string, N?:string, B?:string, SS?:array<string>, NS?:array<string>, BS?:array<string>}, Confidence?:"HIGH"|"LOW"|"NONE", Message?:string}}, JsonFormatDescriptor?:array{FileCompression?:array{Value?:array{S?:string, N?:string, B?:string, SS?:array<string>, NS?:array<string>, BS?:array<string>}, Confidence?:"HIGH"|"LOW"|"NONE", Message?:string}, Charset?:array{Value?:array{S?:string, N?:string, B?:string, SS?:array<string>, NS?:array<string>, BS?:array<string>}, Confidence?:"HIGH"|"LOW"|"NONE", Message?:string}}}}}}}>
     */
    public function detectMetricSetConfig(array $args): \AWS\Result { }

    /**
     * @param array{AnomalyDetectorArn:string, AutoDetectionMetricSource:array{S3SourceConfig?:array{TemplatedPathList?:array<string>, HistoricalDataPathList?:array<string>}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{DetectedMetricSetConfig?:array{Offset?:array{Value?:array{S?:string, N?:string, B?:string, SS?:array<string>, NS?:array<string>, BS?:array<string>}, Confidence?:"HIGH"|"LOW"|"NONE", Message?:string}, MetricSetFrequency?:array{Value?:array{S?:string, N?:string, B?:string, SS?:array<string>, NS?:array<string>, BS?:array<string>}, Confidence?:"HIGH"|"LOW"|"NONE", Message?:string}, MetricSource?:array{S3SourceConfig?:array{FileFormatDescriptor?:array{CsvFormatDescriptor?:array{FileCompression?:array{Value?:array{S?:string, N?:string, B?:string, SS?:array<string>, NS?:array<string>, BS?:array<string>}, Confidence?:"HIGH"|"LOW"|"NONE", Message?:string}, Charset?:array{Value?:array{S?:string, N?:string, B?:string, SS?:array<string>, NS?:array<string>, BS?:array<string>}, Confidence?:"HIGH"|"LOW"|"NONE", Message?:string}, ContainsHeader?:array{Value?:array{S?:string, N?:string, B?:string, SS?:array<string>, NS?:array<string>, BS?:array<string>}, Confidence?:"HIGH"|"LOW"|"NONE", Message?:string}, Delimiter?:array{Value?:array{S?:string, N?:string, B?:string, SS?:array<string>, NS?:array<string>, BS?:array<string>}, Confidence?:"HIGH"|"LOW"|"NONE", Message?:string}, HeaderList?:array{Value?:array{S?:string, N?:string, B?:string, SS?:array<string>, NS?:array<string>, BS?:array<string>}, Confidence?:"HIGH"|"LOW"|"NONE", Message?:string}, QuoteSymbol?:array{Value?:array{S?:string, N?:string, B?:string, SS?:array<string>, NS?:array<string>, BS?:array<string>}, Confidence?:"HIGH"|"LOW"|"NONE", Message?:string}}, JsonFormatDescriptor?:array{FileCompression?:array{Value?:array{S?:string, N?:string, B?:string, SS?:array<string>, NS?:array<string>, BS?:array<string>}, Confidence?:"HIGH"|"LOW"|"NONE", Message?:string}, Charset?:array{Value?:array{S?:string, N?:string, B?:string, SS?:array<string>, NS?:array<string>, BS?:array<string>}, Confidence?:"HIGH"|"LOW"|"NONE", Message?:string}}}}}}}>
     */
    public function detectMetricSetConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AnomalyGroupId:string, AnomalyDetectorArn:string} $args
     * @return \AWS\Result<array{AnomalyGroup?:array{StartTime?:string, EndTime?:string, AnomalyGroupId?:string, AnomalyGroupScore?:float, PrimaryMetricName?:string, MetricLevelImpactList?:array<array{MetricName?:string, NumTimeSeries?:int, ContributionMatrix?:array{DimensionContributionList?:array<array{DimensionName?:string, DimensionValueContributionList?:array<array{DimensionValue?:string, ContributionScore?:float}>}>}}>}}>
     */
    public function getAnomalyGroup(array $args): \AWS\Result { }

    /**
     * @param array{AnomalyGroupId:string, AnomalyDetectorArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AnomalyGroup?:array{StartTime?:string, EndTime?:string, AnomalyGroupId?:string, AnomalyGroupScore?:float, PrimaryMetricName?:string, MetricLevelImpactList?:array<array{MetricName?:string, NumTimeSeries?:int, ContributionMatrix?:array{DimensionContributionList?:array<array{DimensionName?:string, DimensionValueContributionList?:array<array{DimensionValue?:string, ContributionScore?:float}>}>}}>}}>
     */
    public function getAnomalyGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AnomalyDetectorArn:string, MetricSetArn?:string} $args
     * @return \AWS\Result<array{AnomalyDetectorDataQualityMetricList?:array<array{StartTimestamp?:int|string|\DateTimeInterface, MetricSetDataQualityMetricList?:array<array{MetricSetArn?:string, DataQualityMetricList?:array<array{MetricType?:"COLUMN_COMPLETENESS"|"DIMENSION_UNIQUENESS"|"TIME_SERIES_COUNT"|"ROWS_PROCESSED"|"ROWS_PARTIAL_COMPLIANCE"|"INVALID_ROWS_COMPLIANCE"|"BACKTEST_TRAINING_DATA_START_TIME_STAMP"|"BACKTEST_TRAINING_DATA_END_TIME_STAMP"|"BACKTEST_INFERENCE_DATA_START_TIME_STAMP"|"BACKTEST_INFERENCE_DATA_END_TIME_STAMP", MetricDescription?:string, RelatedColumnName?:string, MetricValue?:float}>}>}>}>
     */
    public function getDataQualityMetrics(array $args): \AWS\Result { }

    /**
     * @param array{AnomalyDetectorArn:string, MetricSetArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AnomalyDetectorDataQualityMetricList?:array<array{StartTimestamp?:int|string|\DateTimeInterface, MetricSetDataQualityMetricList?:array<array{MetricSetArn?:string, DataQualityMetricList?:array<array{MetricType?:"COLUMN_COMPLETENESS"|"DIMENSION_UNIQUENESS"|"TIME_SERIES_COUNT"|"ROWS_PROCESSED"|"ROWS_PARTIAL_COMPLIANCE"|"INVALID_ROWS_COMPLIANCE"|"BACKTEST_TRAINING_DATA_START_TIME_STAMP"|"BACKTEST_TRAINING_DATA_END_TIME_STAMP"|"BACKTEST_INFERENCE_DATA_START_TIME_STAMP"|"BACKTEST_INFERENCE_DATA_END_TIME_STAMP", MetricDescription?:string, RelatedColumnName?:string, MetricValue?:float}>}>}>}>
     */
    public function getDataQualityMetricsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AnomalyDetectorArn:string, AnomalyGroupTimeSeriesFeedback:array{AnomalyGroupId:string, TimeSeriesId?:string}, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{AnomalyGroupTimeSeriesFeedback?:array<array{TimeSeriesId?:string, IsAnomaly?:bool}>, NextToken?:string}>
     */
    public function getFeedback(array $args): \AWS\Result { }

    /**
     * @param array{AnomalyDetectorArn:string, AnomalyGroupTimeSeriesFeedback:array{AnomalyGroupId:string, TimeSeriesId?:string}, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AnomalyGroupTimeSeriesFeedback?:array<array{TimeSeriesId?:string, IsAnomaly?:bool}>, NextToken?:string}>
     */
    public function getFeedbackAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{S3SourceConfig?:array{RoleArn:string, TemplatedPathList?:array<string>, HistoricalDataPathList?:array<string>, FileFormatDescriptor:array{CsvFormatDescriptor?:array{FileCompression?:"NONE"|"GZIP", Charset?:string, ContainsHeader?:bool, Delimiter?:string, HeaderList?:array<string>, QuoteSymbol?:string}, JsonFormatDescriptor?:array{FileCompression?:"NONE"|"GZIP", Charset?:string}}}} $args
     * @return \AWS\Result<array{HeaderValues?:array<string>, SampleRows?:array<array<string>>}>
     */
    public function getSampleData(array $args = []): \AWS\Result { }

    /**
     * @param array{S3SourceConfig?:array{RoleArn:string, TemplatedPathList?:array<string>, HistoricalDataPathList?:array<string>, FileFormatDescriptor:array{CsvFormatDescriptor?:array{FileCompression?:"NONE"|"GZIP", Charset?:string, ContainsHeader?:bool, Delimiter?:string, HeaderList?:array<string>, QuoteSymbol?:string}, JsonFormatDescriptor?:array{FileCompression?:"NONE"|"GZIP", Charset?:string}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{HeaderValues?:array<string>, SampleRows?:array<array<string>>}>
     */
    public function getSampleDataAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AnomalyDetectorArn?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{AlertSummaryList?:array<array{AlertArn?:string, AnomalyDetectorArn?:string, AlertName?:string, AlertSensitivityThreshold?:int, AlertType?:"SNS"|"LAMBDA", AlertStatus?:"ACTIVE"|"INACTIVE", LastModificationTime?:int|string|\DateTimeInterface, CreationTime?:int|string|\DateTimeInterface, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listAlerts(array $args = []): \AWS\Result { }

    /**
     * @param array{AnomalyDetectorArn?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{AlertSummaryList?:array<array{AlertArn?:string, AnomalyDetectorArn?:string, AlertName?:string, AlertSensitivityThreshold?:int, AlertType?:"SNS"|"LAMBDA", AlertStatus?:"ACTIVE"|"INACTIVE", LastModificationTime?:int|string|\DateTimeInterface, CreationTime?:int|string|\DateTimeInterface, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listAlertsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{AnomalyDetectorSummaryList?:array<array{AnomalyDetectorArn?:string, AnomalyDetectorName?:string, AnomalyDetectorDescription?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface, Status?:"ACTIVE"|"ACTIVATING"|"DELETING"|"FAILED"|"INACTIVE"|"LEARNING"|"BACK_TEST_ACTIVATING"|"BACK_TEST_ACTIVE"|"BACK_TEST_COMPLETE"|"DEACTIVATED"|"DEACTIVATING", Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listAnomalyDetectors(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AnomalyDetectorSummaryList?:array<array{AnomalyDetectorArn?:string, AnomalyDetectorName?:string, AnomalyDetectorDescription?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface, Status?:"ACTIVE"|"ACTIVATING"|"DELETING"|"FAILED"|"INACTIVE"|"LEARNING"|"BACK_TEST_ACTIVATING"|"BACK_TEST_ACTIVE"|"BACK_TEST_COMPLETE"|"DEACTIVATED"|"DEACTIVATING", Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listAnomalyDetectorsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AnomalyDetectorArn:string, AnomalyGroupId:string, RelationshipTypeFilter?:"CAUSE_OF_INPUT_ANOMALY_GROUP"|"EFFECT_OF_INPUT_ANOMALY_GROUP", MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{InterMetricImpactList?:array<array{MetricName?:string, AnomalyGroupId?:string, RelationshipType?:"CAUSE_OF_INPUT_ANOMALY_GROUP"|"EFFECT_OF_INPUT_ANOMALY_GROUP", ContributionPercentage?:float}>, NextToken?:string}>
     */
    public function listAnomalyGroupRelatedMetrics(array $args): \AWS\Result { }

    /**
     * @param array{AnomalyDetectorArn:string, AnomalyGroupId:string, RelationshipTypeFilter?:"CAUSE_OF_INPUT_ANOMALY_GROUP"|"EFFECT_OF_INPUT_ANOMALY_GROUP", MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{InterMetricImpactList?:array<array{MetricName?:string, AnomalyGroupId?:string, RelationshipType?:"CAUSE_OF_INPUT_ANOMALY_GROUP"|"EFFECT_OF_INPUT_ANOMALY_GROUP", ContributionPercentage?:float}>, NextToken?:string}>
     */
    public function listAnomalyGroupRelatedMetricsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AnomalyDetectorArn:string, SensitivityThreshold:int, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{AnomalyGroupSummaryList?:array<array{StartTime?:string, EndTime?:string, AnomalyGroupId?:string, AnomalyGroupScore?:float, PrimaryMetricName?:string}>, AnomalyGroupStatistics?:array{EvaluationStartDate?:string, TotalCount?:int, ItemizedMetricStatsList?:array<array{MetricName?:string, OccurrenceCount?:int}>}, NextToken?:string}>
     */
    public function listAnomalyGroupSummaries(array $args): \AWS\Result { }

    /**
     * @param array{AnomalyDetectorArn:string, SensitivityThreshold:int, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AnomalyGroupSummaryList?:array<array{StartTime?:string, EndTime?:string, AnomalyGroupId?:string, AnomalyGroupScore?:float, PrimaryMetricName?:string}>, AnomalyGroupStatistics?:array{EvaluationStartDate?:string, TotalCount?:int, ItemizedMetricStatsList?:array<array{MetricName?:string, OccurrenceCount?:int}>}, NextToken?:string}>
     */
    public function listAnomalyGroupSummariesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AnomalyDetectorArn:string, AnomalyGroupId:string, MetricName:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{AnomalyGroupId?:string, MetricName?:string, TimestampList?:array<string>, NextToken?:string, TimeSeriesList?:array<array{TimeSeriesId:string, DimensionList:array<array{DimensionName:string, DimensionValue:string}>, MetricValueList:array<float>}>}>
     */
    public function listAnomalyGroupTimeSeries(array $args): \AWS\Result { }

    /**
     * @param array{AnomalyDetectorArn:string, AnomalyGroupId:string, MetricName:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AnomalyGroupId?:string, MetricName?:string, TimestampList?:array<string>, NextToken?:string, TimeSeriesList?:array<array{TimeSeriesId:string, DimensionList:array<array{DimensionName:string, DimensionValue:string}>, MetricValueList:array<float>}>}>
     */
    public function listAnomalyGroupTimeSeriesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AnomalyDetectorArn?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{MetricSetSummaryList?:array<array{MetricSetArn?:string, AnomalyDetectorArn?:string, MetricSetDescription?:string, MetricSetName?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listMetricSets(array $args = []): \AWS\Result { }

    /**
     * @param array{AnomalyDetectorArn?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MetricSetSummaryList?:array<array{MetricSetArn?:string, AnomalyDetectorArn?:string, MetricSetDescription?:string, MetricSetName?:string, CreationTime?:int|string|\DateTimeInterface, LastModificationTime?:int|string|\DateTimeInterface, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listMetricSetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{AnomalyDetectorArn:string, AnomalyGroupTimeSeriesFeedback:array{AnomalyGroupId:string, TimeSeriesId:string, IsAnomaly:bool}} $args
     * @return \AWS\Result<array{}>
     */
    public function putFeedback(array $args): \AWS\Result { }

    /**
     * @param array{AnomalyDetectorArn:string, AnomalyGroupTimeSeriesFeedback:array{AnomalyGroupId:string, TimeSeriesId:string, IsAnomaly:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putFeedbackAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{AlertArn:string, AlertDescription?:string, AlertSensitivityThreshold?:int, Action?:array{SNSConfiguration?:array{RoleArn:string, SnsTopicArn:string, SnsFormat?:"LONG_TEXT"|"SHORT_TEXT"|"JSON"}, LambdaConfiguration?:array{RoleArn:string, LambdaArn:string}}, AlertFilters?:array{MetricList?:array<string>, DimensionFilterList?:array<array{DimensionName?:string, DimensionValueList?:array<string>}>}} $args
     * @return \AWS\Result<array{AlertArn?:string}>
     */
    public function updateAlert(array $args): \AWS\Result { }

    /**
     * @param array{AlertArn:string, AlertDescription?:string, AlertSensitivityThreshold?:int, Action?:array{SNSConfiguration?:array{RoleArn:string, SnsTopicArn:string, SnsFormat?:"LONG_TEXT"|"SHORT_TEXT"|"JSON"}, LambdaConfiguration?:array{RoleArn:string, LambdaArn:string}}, AlertFilters?:array{MetricList?:array<string>, DimensionFilterList?:array<array{DimensionName?:string, DimensionValueList?:array<string>}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{AlertArn?:string}>
     */
    public function updateAlertAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AnomalyDetectorArn:string, KmsKeyArn?:string, AnomalyDetectorDescription?:string, AnomalyDetectorConfig?:array{AnomalyDetectorFrequency?:"P1D"|"PT1H"|"PT10M"|"PT5M"}} $args
     * @return \AWS\Result<array{AnomalyDetectorArn?:string}>
     */
    public function updateAnomalyDetector(array $args): \AWS\Result { }

    /**
     * @param array{AnomalyDetectorArn:string, KmsKeyArn?:string, AnomalyDetectorDescription?:string, AnomalyDetectorConfig?:array{AnomalyDetectorFrequency?:"P1D"|"PT1H"|"PT10M"|"PT5M"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{AnomalyDetectorArn?:string}>
     */
    public function updateAnomalyDetectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MetricSetArn:string, MetricSetDescription?:string, MetricList?:array<array{MetricName:string, AggregationFunction:"AVG"|"SUM", Namespace?:string}>, Offset?:int, TimestampColumn?:array{ColumnName?:string, ColumnFormat?:string}, DimensionList?:array<string>, MetricSetFrequency?:"P1D"|"PT1H"|"PT10M"|"PT5M", MetricSource?:array{S3SourceConfig?:array{RoleArn?:string, TemplatedPathList?:array<string>, HistoricalDataPathList?:array<string>, FileFormatDescriptor?:array{CsvFormatDescriptor?:array{FileCompression?:"NONE"|"GZIP", Charset?:string, ContainsHeader?:bool, Delimiter?:string, HeaderList?:array<string>, QuoteSymbol?:string}, JsonFormatDescriptor?:array{FileCompression?:"NONE"|"GZIP", Charset?:string}}}, AppFlowConfig?:array{RoleArn?:string, FlowName?:string}, CloudWatchConfig?:array{RoleArn?:string, BackTestConfiguration?:array{RunBackTestMode:bool}}, RDSSourceConfig?:array{DBInstanceIdentifier?:string, DatabaseHost?:string, DatabasePort?:int, SecretManagerArn?:string, DatabaseName?:string, TableName?:string, RoleArn?:string, VpcConfiguration?:array{SubnetIdList:array<string>, SecurityGroupIdList:array<string>}}, RedshiftSourceConfig?:array{ClusterIdentifier?:string, DatabaseHost?:string, DatabasePort?:int, SecretManagerArn?:string, DatabaseName?:string, TableName?:string, RoleArn?:string, VpcConfiguration?:array{SubnetIdList:array<string>, SecurityGroupIdList:array<string>}}, AthenaSourceConfig?:array{RoleArn?:string, DatabaseName?:string, DataCatalog?:string, TableName?:string, WorkGroupName?:string, S3ResultsPath?:string, BackTestConfiguration?:array{RunBackTestMode:bool}}}, DimensionFilterList?:array<array{Name?:string, FilterList?:array<array{DimensionValue?:string, FilterOperation?:"EQUALS"}>}>} $args
     * @return \AWS\Result<array{MetricSetArn?:string}>
     */
    public function updateMetricSet(array $args): \AWS\Result { }

    /**
     * @param array{MetricSetArn:string, MetricSetDescription?:string, MetricList?:array<array{MetricName:string, AggregationFunction:"AVG"|"SUM", Namespace?:string}>, Offset?:int, TimestampColumn?:array{ColumnName?:string, ColumnFormat?:string}, DimensionList?:array<string>, MetricSetFrequency?:"P1D"|"PT1H"|"PT10M"|"PT5M", MetricSource?:array{S3SourceConfig?:array{RoleArn?:string, TemplatedPathList?:array<string>, HistoricalDataPathList?:array<string>, FileFormatDescriptor?:array{CsvFormatDescriptor?:array{FileCompression?:"NONE"|"GZIP", Charset?:string, ContainsHeader?:bool, Delimiter?:string, HeaderList?:array<string>, QuoteSymbol?:string}, JsonFormatDescriptor?:array{FileCompression?:"NONE"|"GZIP", Charset?:string}}}, AppFlowConfig?:array{RoleArn?:string, FlowName?:string}, CloudWatchConfig?:array{RoleArn?:string, BackTestConfiguration?:array{RunBackTestMode:bool}}, RDSSourceConfig?:array{DBInstanceIdentifier?:string, DatabaseHost?:string, DatabasePort?:int, SecretManagerArn?:string, DatabaseName?:string, TableName?:string, RoleArn?:string, VpcConfiguration?:array{SubnetIdList:array<string>, SecurityGroupIdList:array<string>}}, RedshiftSourceConfig?:array{ClusterIdentifier?:string, DatabaseHost?:string, DatabasePort?:int, SecretManagerArn?:string, DatabaseName?:string, TableName?:string, RoleArn?:string, VpcConfiguration?:array{SubnetIdList:array<string>, SecurityGroupIdList:array<string>}}, AthenaSourceConfig?:array{RoleArn?:string, DatabaseName?:string, DataCatalog?:string, TableName?:string, WorkGroupName?:string, S3ResultsPath?:string, BackTestConfiguration?:array{RunBackTestMode:bool}}}, DimensionFilterList?:array<array{Name?:string, FilterList?:array<array{DimensionValue?:string, FilterOperation?:"EQUALS"}>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{MetricSetArn?:string}>
     */
    public function updateMetricSetAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
