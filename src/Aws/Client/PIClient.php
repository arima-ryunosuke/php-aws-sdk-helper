<?php
namespace AWS\PI;

class PIClient
{
    /**
     * @param array{ServiceType:"RDS"|"DOCDB", Identifier:string, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{AnalysisReportId?:string}>
     */
    public function createPerformanceAnalysisReport(array $args): \AWS\Result { }

    /**
     * @param array{ServiceType:"RDS"|"DOCDB", Identifier:string, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{AnalysisReportId?:string}>
     */
    public function createPerformanceAnalysisReportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceType:"RDS"|"DOCDB", Identifier:string, AnalysisReportId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deletePerformanceAnalysisReport(array $args): \AWS\Result { }

    /**
     * @param array{ServiceType:"RDS"|"DOCDB", Identifier:string, AnalysisReportId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deletePerformanceAnalysisReportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceType:"RDS"|"DOCDB", Identifier:string, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, Metric:string, PeriodInSeconds?:int, GroupBy:array{Group:string, Dimensions?:array<string>, Limit?:int}, AdditionalMetrics?:array<string>, PartitionBy?:array{Group:string, Dimensions?:array<string>, Limit?:int}, Filter?:array<string, string>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{AlignedStartTime?:int|string|\DateTimeInterface, AlignedEndTime?:int|string|\DateTimeInterface, PartitionKeys?:array<array{Dimensions:array<string, string>}>, Keys?:array<array{Dimensions?:array<string, string>, Total?:float, AdditionalMetrics?:array<string, float>, Partitions?:array<float>}>, NextToken?:string}>
     */
    public function describeDimensionKeys(array $args): \AWS\Result { }

    /**
     * @param array{ServiceType:"RDS"|"DOCDB", Identifier:string, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, Metric:string, PeriodInSeconds?:int, GroupBy:array{Group:string, Dimensions?:array<string>, Limit?:int}, AdditionalMetrics?:array<string>, PartitionBy?:array{Group:string, Dimensions?:array<string>, Limit?:int}, Filter?:array<string, string>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AlignedStartTime?:int|string|\DateTimeInterface, AlignedEndTime?:int|string|\DateTimeInterface, PartitionKeys?:array<array{Dimensions:array<string, string>}>, Keys?:array<array{Dimensions?:array<string, string>, Total?:float, AdditionalMetrics?:array<string, float>, Partitions?:array<float>}>, NextToken?:string}>
     */
    public function describeDimensionKeysAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceType:"RDS"|"DOCDB", Identifier:string, Group:string, GroupIdentifier:string, RequestedDimensions?:array<string>} $args
     * @return \AWS\Result<array{Dimensions?:array<array{Value?:string, Dimension?:string, Status?:"AVAILABLE"|"PROCESSING"|"UNAVAILABLE"}>}>
     */
    public function getDimensionKeyDetails(array $args): \AWS\Result { }

    /**
     * @param array{ServiceType:"RDS"|"DOCDB", Identifier:string, Group:string, GroupIdentifier:string, RequestedDimensions?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Dimensions?:array<array{Value?:string, Dimension?:string, Status?:"AVAILABLE"|"PROCESSING"|"UNAVAILABLE"}>}>
     */
    public function getDimensionKeyDetailsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceType:"RDS"|"DOCDB", Identifier:string, AnalysisReportId:string, TextFormat?:"PLAIN_TEXT"|"MARKDOWN", AcceptLanguage?:"EN_US"} $args
     * @return \AWS\Result<array{AnalysisReport?:array{AnalysisReportId:string, Identifier?:string, ServiceType?:"RDS"|"DOCDB", CreateTime?:int|string|\DateTimeInterface, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Status?:"RUNNING"|"SUCCEEDED"|"FAILED", Insights?:array<array{InsightId:string, InsightType?:string, Context?:"CAUSAL"|"CONTEXTUAL", StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Severity?:"LOW"|"MEDIUM"|"HIGH", SupportingInsights?:array<array{InsightId:string, InsightType?:string, Context?:"CAUSAL"|"CONTEXTUAL", StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Severity?:"LOW"|"MEDIUM"|"HIGH", SupportingInsights?:mixed, Description?:string, Recommendations?:array<array{RecommendationId?:string, RecommendationDescription?:string}>, InsightData?:array<array{PerformanceInsightsMetric?:array{Metric?:string, DisplayName?:string, Dimensions?:array<string, string>, Value?:float}}>, BaselineData?:array<array{PerformanceInsightsMetric?:array{Metric?:string, DisplayName?:string, Dimensions?:array<string, string>, Value?:float}}>}>, Description?:string, Recommendations?:array<array{RecommendationId?:string, RecommendationDescription?:string}>, InsightData?:array<array{PerformanceInsightsMetric?:array{Metric?:string, DisplayName?:string, Dimensions?:array<string, string>, Value?:float}}>, BaselineData?:array<array{PerformanceInsightsMetric?:array{Metric?:string, DisplayName?:string, Dimensions?:array<string, string>, Value?:float}}>}>}}>
     */
    public function getPerformanceAnalysisReport(array $args): \AWS\Result { }

    /**
     * @param array{ServiceType:"RDS"|"DOCDB", Identifier:string, AnalysisReportId:string, TextFormat?:"PLAIN_TEXT"|"MARKDOWN", AcceptLanguage?:"EN_US"} $args
     * @return \GuzzleHttp\Promise\Promise<array{AnalysisReport?:array{AnalysisReportId:string, Identifier?:string, ServiceType?:"RDS"|"DOCDB", CreateTime?:int|string|\DateTimeInterface, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Status?:"RUNNING"|"SUCCEEDED"|"FAILED", Insights?:array<array{InsightId:string, InsightType?:string, Context?:"CAUSAL"|"CONTEXTUAL", StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Severity?:"LOW"|"MEDIUM"|"HIGH", SupportingInsights?:array<array{InsightId:string, InsightType?:string, Context?:"CAUSAL"|"CONTEXTUAL", StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Severity?:"LOW"|"MEDIUM"|"HIGH", SupportingInsights?:mixed, Description?:string, Recommendations?:array<array{RecommendationId?:string, RecommendationDescription?:string}>, InsightData?:array<array{PerformanceInsightsMetric?:array{Metric?:string, DisplayName?:string, Dimensions?:array<string, string>, Value?:float}}>, BaselineData?:array<array{PerformanceInsightsMetric?:array{Metric?:string, DisplayName?:string, Dimensions?:array<string, string>, Value?:float}}>}>, Description?:string, Recommendations?:array<array{RecommendationId?:string, RecommendationDescription?:string}>, InsightData?:array<array{PerformanceInsightsMetric?:array{Metric?:string, DisplayName?:string, Dimensions?:array<string, string>, Value?:float}}>, BaselineData?:array<array{PerformanceInsightsMetric?:array{Metric?:string, DisplayName?:string, Dimensions?:array<string, string>, Value?:float}}>}>}}>
     */
    public function getPerformanceAnalysisReportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceType:"RDS"|"DOCDB", Identifier:string} $args
     * @return \AWS\Result<array{Identifier?:string, Features?:array<string, array{Status?:"ENABLED"|"DISABLED"|"UNSUPPORTED"|"ENABLED_PENDING_REBOOT"|"DISABLED_PENDING_REBOOT"|"UNKNOWN"}>}>
     */
    public function getResourceMetadata(array $args): \AWS\Result { }

    /**
     * @param array{ServiceType:"RDS"|"DOCDB", Identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Identifier?:string, Features?:array<string, array{Status?:"ENABLED"|"DISABLED"|"UNSUPPORTED"|"ENABLED_PENDING_REBOOT"|"DISABLED_PENDING_REBOOT"|"UNKNOWN"}>}>
     */
    public function getResourceMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceType:"RDS"|"DOCDB", Identifier:string, MetricQueries:array<array{Metric:string, GroupBy?:array{Group:string, Dimensions?:array<string>, Limit?:int}, Filter?:array<string, string>}>, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, PeriodInSeconds?:int, MaxResults?:int, NextToken?:string, PeriodAlignment?:"END_TIME"|"START_TIME"} $args
     * @return \AWS\Result<array{AlignedStartTime?:int|string|\DateTimeInterface, AlignedEndTime?:int|string|\DateTimeInterface, Identifier?:string, MetricList?:array<array{Key?:array{Metric:string, Dimensions?:array<string, string>}, DataPoints?:array<array{Timestamp:int|string|\DateTimeInterface, Value:float}>}>, NextToken?:string}>
     */
    public function getResourceMetrics(array $args): \AWS\Result { }

    /**
     * @param array{ServiceType:"RDS"|"DOCDB", Identifier:string, MetricQueries:array<array{Metric:string, GroupBy?:array{Group:string, Dimensions?:array<string>, Limit?:int}, Filter?:array<string, string>}>, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, PeriodInSeconds?:int, MaxResults?:int, NextToken?:string, PeriodAlignment?:"END_TIME"|"START_TIME"} $args
     * @return \GuzzleHttp\Promise\Promise<array{AlignedStartTime?:int|string|\DateTimeInterface, AlignedEndTime?:int|string|\DateTimeInterface, Identifier?:string, MetricList?:array<array{Key?:array{Metric:string, Dimensions?:array<string, string>}, DataPoints?:array<array{Timestamp:int|string|\DateTimeInterface, Value:float}>}>, NextToken?:string}>
     */
    public function getResourceMetricsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceType:"RDS"|"DOCDB", Identifier:string, Metrics:array<string>, MaxResults?:int, NextToken?:string, AuthorizedActions?:array<"DescribeDimensionKeys"|"GetDimensionKeyDetails"|"GetResourceMetrics">} $args
     * @return \AWS\Result<array{MetricDimensions?:array<array{Metric?:string, Groups?:array<array{Group?:string, Dimensions?:array<array{Identifier?:string}>}>}>, NextToken?:string}>
     */
    public function listAvailableResourceDimensions(array $args): \AWS\Result { }

    /**
     * @param array{ServiceType:"RDS"|"DOCDB", Identifier:string, Metrics:array<string>, MaxResults?:int, NextToken?:string, AuthorizedActions?:array<"DescribeDimensionKeys"|"GetDimensionKeyDetails"|"GetResourceMetrics">} $args
     * @return \GuzzleHttp\Promise\Promise<array{MetricDimensions?:array<array{Metric?:string, Groups?:array<array{Group?:string, Dimensions?:array<array{Identifier?:string}>}>}>, NextToken?:string}>
     */
    public function listAvailableResourceDimensionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceType:"RDS"|"DOCDB", Identifier:string, MetricTypes:array<string>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Metrics?:array<array{Metric?:string, Description?:string, Unit?:string}>, NextToken?:string}>
     */
    public function listAvailableResourceMetrics(array $args): \AWS\Result { }

    /**
     * @param array{ServiceType:"RDS"|"DOCDB", Identifier:string, MetricTypes:array<string>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Metrics?:array<array{Metric?:string, Description?:string, Unit?:string}>, NextToken?:string}>
     */
    public function listAvailableResourceMetricsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceType:"RDS"|"DOCDB", Identifier:string, NextToken?:string, MaxResults?:int, ListTags?:bool} $args
     * @return \AWS\Result<array{AnalysisReports?:array<array{AnalysisReportId?:string, CreateTime?:int|string|\DateTimeInterface, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Status?:"RUNNING"|"SUCCEEDED"|"FAILED", Tags?:array<array{Key:string, Value:string}>}>, NextToken?:string}>
     */
    public function listPerformanceAnalysisReports(array $args): \AWS\Result { }

    /**
     * @param array{ServiceType:"RDS"|"DOCDB", Identifier:string, NextToken?:string, MaxResults?:int, ListTags?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{AnalysisReports?:array<array{AnalysisReportId?:string, CreateTime?:int|string|\DateTimeInterface, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Status?:"RUNNING"|"SUCCEEDED"|"FAILED", Tags?:array<array{Key:string, Value:string}>}>, NextToken?:string}>
     */
    public function listPerformanceAnalysisReportsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceType:"RDS"|"DOCDB", ResourceARN:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ServiceType:"RDS"|"DOCDB", ResourceARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceType:"RDS"|"DOCDB", ResourceARN:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ServiceType:"RDS"|"DOCDB", ResourceARN:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceType:"RDS"|"DOCDB", ResourceARN:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ServiceType:"RDS"|"DOCDB", ResourceARN:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
