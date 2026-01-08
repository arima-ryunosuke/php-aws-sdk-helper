<?php
namespace AWS\DevOpsGuru;

class DevOpsGuruClient
{
    /**
     * @param array{Config:array{Sns:array{TopicArn?:string}, Filters?:array{Severities?:array<"LOW"|"MEDIUM"|"HIGH">, MessageTypes?:array<"NEW_INSIGHT"|"CLOSED_INSIGHT"|"NEW_ASSOCIATION"|"SEVERITY_UPGRADED"|"NEW_RECOMMENDATION">}}} $args
     * @return \AWS\Result<array{Id:string}>
     */
    public function addNotificationChannel(array $args): \AWS\Result { }

    /**
     * @param array{Config:array{Sns:array{TopicArn?:string}, Filters?:array{Severities?:array<"LOW"|"MEDIUM"|"HIGH">, MessageTypes?:array<"NEW_INSIGHT"|"CLOSED_INSIGHT"|"NEW_ASSOCIATION"|"SEVERITY_UPGRADED"|"NEW_RECOMMENDATION">}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Id:string}>
     */
    public function addNotificationChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteInsight(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteInsightAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{OpenReactiveInsights:int, OpenProactiveInsights:int, MetricsAnalyzed:int, ResourceHours:int, AnalyzedResourceCount?:int}>
     */
    public function describeAccountHealth(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{OpenReactiveInsights:int, OpenProactiveInsights:int, MetricsAnalyzed:int, ResourceHours:int, AnalyzedResourceCount?:int}>
     */
    public function describeAccountHealthAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FromTime:int|string|\DateTimeInterface, ToTime?:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{ReactiveInsights:int, ProactiveInsights:int, MeanTimeToRecoverInMilliseconds:int}>
     */
    public function describeAccountOverview(array $args): \AWS\Result { }

    /**
     * @param array{FromTime:int|string|\DateTimeInterface, ToTime?:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReactiveInsights:int, ProactiveInsights:int, MeanTimeToRecoverInMilliseconds:int}>
     */
    public function describeAccountOverviewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, AccountId?:string} $args
     * @return \AWS\Result<array{ProactiveAnomaly?:array{Id?:string, Severity?:"LOW"|"MEDIUM"|"HIGH", Status?:"ONGOING"|"CLOSED", UpdateTime?:int|string|\DateTimeInterface, AnomalyTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, AnomalyReportedTimeRange?:array{OpenTime:int|string|\DateTimeInterface, CloseTime?:int|string|\DateTimeInterface}, PredictionTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, SourceDetails?:array{CloudWatchMetrics?:array<array{MetricName?:string, Namespace?:string, Dimensions?:array<array{Name?:string, Value?:string}>, Stat?:"Sum"|"Average"|"SampleCount"|"Minimum"|"Maximum"|"p99"|"p90"|"p50", Unit?:string, Period?:int, MetricDataSummary?:array{TimestampMetricValuePairList?:array<array{Timestamp?:int|string|\DateTimeInterface, MetricValue?:float}>, StatusCode?:"Complete"|"InternalError"|"PartialData"}}>, PerformanceInsightsMetrics?:array<array{MetricDisplayName?:string, Unit?:string, MetricQuery?:array{Metric?:string, GroupBy?:array{Group?:string, Dimensions?:array<string>, Limit?:int}, Filter?:array<string, string>}, ReferenceData?:array<array{Name?:string, ComparisonValues?:array{ReferenceScalar?:array{Value?:float}, ReferenceMetric?:array{MetricQuery?:array{Metric?:string, GroupBy?:array{Group?:string, Dimensions?:array<string>, Limit?:int}, Filter?:array<string, string>}}}}>, StatsAtAnomaly?:array<array{Type?:string, Value?:float}>, StatsAtBaseline?:array<array{Type?:string, Value?:float}>}>}, AssociatedInsightId?:string, ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, Limit?:float, SourceMetadata?:array{Source?:string, SourceResourceName?:string, SourceResourceType?:string}, AnomalyResources?:array<array{Name?:string, Type?:string}>, Description?:string}, ReactiveAnomaly?:array{Id?:string, Severity?:"LOW"|"MEDIUM"|"HIGH", Status?:"ONGOING"|"CLOSED", AnomalyTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, AnomalyReportedTimeRange?:array{OpenTime:int|string|\DateTimeInterface, CloseTime?:int|string|\DateTimeInterface}, SourceDetails?:array{CloudWatchMetrics?:array<array{MetricName?:string, Namespace?:string, Dimensions?:array<array{Name?:string, Value?:string}>, Stat?:"Sum"|"Average"|"SampleCount"|"Minimum"|"Maximum"|"p99"|"p90"|"p50", Unit?:string, Period?:int, MetricDataSummary?:array{TimestampMetricValuePairList?:array<array{Timestamp?:int|string|\DateTimeInterface, MetricValue?:float}>, StatusCode?:"Complete"|"InternalError"|"PartialData"}}>, PerformanceInsightsMetrics?:array<array{MetricDisplayName?:string, Unit?:string, MetricQuery?:array{Metric?:string, GroupBy?:array{Group?:string, Dimensions?:array<string>, Limit?:int}, Filter?:array<string, string>}, ReferenceData?:array<array{Name?:string, ComparisonValues?:array{ReferenceScalar?:array{Value?:float}, ReferenceMetric?:array{MetricQuery?:array{Metric?:string, GroupBy?:array{Group?:string, Dimensions?:array<string>, Limit?:int}, Filter?:array<string, string>}}}}>, StatsAtAnomaly?:array<array{Type?:string, Value?:float}>, StatsAtBaseline?:array<array{Type?:string, Value?:float}>}>}, AssociatedInsightId?:string, ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, Type?:"CAUSAL"|"CONTEXTUAL", Name?:string, Description?:string, CausalAnomalyId?:string, AnomalyResources?:array<array{Name?:string, Type?:string}>}}>
     */
    public function describeAnomaly(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, AccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProactiveAnomaly?:array{Id?:string, Severity?:"LOW"|"MEDIUM"|"HIGH", Status?:"ONGOING"|"CLOSED", UpdateTime?:int|string|\DateTimeInterface, AnomalyTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, AnomalyReportedTimeRange?:array{OpenTime:int|string|\DateTimeInterface, CloseTime?:int|string|\DateTimeInterface}, PredictionTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, SourceDetails?:array{CloudWatchMetrics?:array<array{MetricName?:string, Namespace?:string, Dimensions?:array<array{Name?:string, Value?:string}>, Stat?:"Sum"|"Average"|"SampleCount"|"Minimum"|"Maximum"|"p99"|"p90"|"p50", Unit?:string, Period?:int, MetricDataSummary?:array{TimestampMetricValuePairList?:array<array{Timestamp?:int|string|\DateTimeInterface, MetricValue?:float}>, StatusCode?:"Complete"|"InternalError"|"PartialData"}}>, PerformanceInsightsMetrics?:array<array{MetricDisplayName?:string, Unit?:string, MetricQuery?:array{Metric?:string, GroupBy?:array{Group?:string, Dimensions?:array<string>, Limit?:int}, Filter?:array<string, string>}, ReferenceData?:array<array{Name?:string, ComparisonValues?:array{ReferenceScalar?:array{Value?:float}, ReferenceMetric?:array{MetricQuery?:array{Metric?:string, GroupBy?:array{Group?:string, Dimensions?:array<string>, Limit?:int}, Filter?:array<string, string>}}}}>, StatsAtAnomaly?:array<array{Type?:string, Value?:float}>, StatsAtBaseline?:array<array{Type?:string, Value?:float}>}>}, AssociatedInsightId?:string, ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, Limit?:float, SourceMetadata?:array{Source?:string, SourceResourceName?:string, SourceResourceType?:string}, AnomalyResources?:array<array{Name?:string, Type?:string}>, Description?:string}, ReactiveAnomaly?:array{Id?:string, Severity?:"LOW"|"MEDIUM"|"HIGH", Status?:"ONGOING"|"CLOSED", AnomalyTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, AnomalyReportedTimeRange?:array{OpenTime:int|string|\DateTimeInterface, CloseTime?:int|string|\DateTimeInterface}, SourceDetails?:array{CloudWatchMetrics?:array<array{MetricName?:string, Namespace?:string, Dimensions?:array<array{Name?:string, Value?:string}>, Stat?:"Sum"|"Average"|"SampleCount"|"Minimum"|"Maximum"|"p99"|"p90"|"p50", Unit?:string, Period?:int, MetricDataSummary?:array{TimestampMetricValuePairList?:array<array{Timestamp?:int|string|\DateTimeInterface, MetricValue?:float}>, StatusCode?:"Complete"|"InternalError"|"PartialData"}}>, PerformanceInsightsMetrics?:array<array{MetricDisplayName?:string, Unit?:string, MetricQuery?:array{Metric?:string, GroupBy?:array{Group?:string, Dimensions?:array<string>, Limit?:int}, Filter?:array<string, string>}, ReferenceData?:array<array{Name?:string, ComparisonValues?:array{ReferenceScalar?:array{Value?:float}, ReferenceMetric?:array{MetricQuery?:array{Metric?:string, GroupBy?:array{Group?:string, Dimensions?:array<string>, Limit?:int}, Filter?:array<string, string>}}}}>, StatsAtAnomaly?:array<array{Type?:string, Value?:float}>, StatsAtBaseline?:array<array{Type?:string, Value?:float}>}>}, AssociatedInsightId?:string, ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, Type?:"CAUSAL"|"CONTEXTUAL", Name?:string, Description?:string, CausalAnomalyId?:string, AnomalyResources?:array<array{Name?:string, Type?:string}>}}>
     */
    public function describeAnomalyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{EventSources?:array{AmazonCodeGuruProfiler?:array{Status?:"ENABLED"|"DISABLED"}}}>
     */
    public function describeEventSourcesConfig(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventSources?:array{AmazonCodeGuruProfiler?:array{Status?:"ENABLED"|"DISABLED"}}}>
     */
    public function describeEventSourcesConfigAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InsightId?:string} $args
     * @return \AWS\Result<array{InsightFeedback?:array{Id?:string, Feedback?:"VALID_COLLECTION"|"RECOMMENDATION_USEFUL"|"ALERT_TOO_SENSITIVE"|"DATA_NOISY_ANOMALY"|"DATA_INCORRECT"}}>
     */
    public function describeFeedback(array $args = []): \AWS\Result { }

    /**
     * @param array{InsightId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{InsightFeedback?:array{Id?:string, Feedback?:"VALID_COLLECTION"|"RECOMMENDATION_USEFUL"|"ALERT_TOO_SENSITIVE"|"DATA_NOISY_ANOMALY"|"DATA_INCORRECT"}}>
     */
    public function describeFeedbackAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, AccountId?:string} $args
     * @return \AWS\Result<array{ProactiveInsight?:array{Id?:string, Name?:string, Severity?:"LOW"|"MEDIUM"|"HIGH", Status?:"ONGOING"|"CLOSED", InsightTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, PredictionTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, SsmOpsItemId?:string, Description?:string}, ReactiveInsight?:array{Id?:string, Name?:string, Severity?:"LOW"|"MEDIUM"|"HIGH", Status?:"ONGOING"|"CLOSED", InsightTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, SsmOpsItemId?:string, Description?:string}}>
     */
    public function describeInsight(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, AccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProactiveInsight?:array{Id?:string, Name?:string, Severity?:"LOW"|"MEDIUM"|"HIGH", Status?:"ONGOING"|"CLOSED", InsightTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, PredictionTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, SsmOpsItemId?:string, Description?:string}, ReactiveInsight?:array{Id?:string, Name?:string, Severity?:"LOW"|"MEDIUM"|"HIGH", Status?:"ONGOING"|"CLOSED", InsightTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, SsmOpsItemId?:string, Description?:string}}>
     */
    public function describeInsightAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountIds?:array<string>, OrganizationalUnitIds?:array<string>} $args
     * @return \AWS\Result<array{OpenReactiveInsights:int, OpenProactiveInsights:int, MetricsAnalyzed:int, ResourceHours:int}>
     */
    public function describeOrganizationHealth(array $args = []): \AWS\Result { }

    /**
     * @param array{AccountIds?:array<string>, OrganizationalUnitIds?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{OpenReactiveInsights:int, OpenProactiveInsights:int, MetricsAnalyzed:int, ResourceHours:int}>
     */
    public function describeOrganizationHealthAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FromTime:int|string|\DateTimeInterface, ToTime?:int|string|\DateTimeInterface, AccountIds?:array<string>, OrganizationalUnitIds?:array<string>} $args
     * @return \AWS\Result<array{ReactiveInsights:int, ProactiveInsights:int}>
     */
    public function describeOrganizationOverview(array $args): \AWS\Result { }

    /**
     * @param array{FromTime:int|string|\DateTimeInterface, ToTime?:int|string|\DateTimeInterface, AccountIds?:array<string>, OrganizationalUnitIds?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReactiveInsights:int, ProactiveInsights:int}>
     */
    public function describeOrganizationOverviewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationResourceCollectionType:"AWS_CLOUD_FORMATION"|"AWS_SERVICE"|"AWS_ACCOUNT"|"AWS_TAGS", AccountIds?:array<string>, OrganizationalUnitIds?:array<string>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{CloudFormation?:array<array{StackName?:string, Insight?:array{OpenProactiveInsights?:int, OpenReactiveInsights?:int, MeanTimeToRecoverInMilliseconds?:int}, AnalyzedResourceCount?:int}>, Service?:array<array{ServiceName?:"API_GATEWAY"|"APPLICATION_ELB"|"AUTO_SCALING_GROUP"|"CLOUD_FRONT"|"DYNAMO_DB"|"EC2"|"ECS"|"EKS"|"ELASTIC_BEANSTALK"|"ELASTI_CACHE"|"ELB"|"ES"|"KINESIS"|"LAMBDA"|"NAT_GATEWAY"|"NETWORK_ELB"|"RDS"|"REDSHIFT"|"ROUTE_53"|"S3"|"SAGE_MAKER"|"SNS"|"SQS"|"STEP_FUNCTIONS"|"SWF", Insight?:array{OpenProactiveInsights?:int, OpenReactiveInsights?:int}, AnalyzedResourceCount?:int}>, Account?:array<array{AccountId?:string, Insight?:array{OpenProactiveInsights?:int, OpenReactiveInsights?:int}}>, NextToken?:string, Tags?:array<array{AppBoundaryKey?:string, TagValue?:string, Insight?:array{OpenProactiveInsights?:int, OpenReactiveInsights?:int, MeanTimeToRecoverInMilliseconds?:int}, AnalyzedResourceCount?:int}>}>
     */
    public function describeOrganizationResourceCollectionHealth(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationResourceCollectionType:"AWS_CLOUD_FORMATION"|"AWS_SERVICE"|"AWS_ACCOUNT"|"AWS_TAGS", AccountIds?:array<string>, OrganizationalUnitIds?:array<string>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{CloudFormation?:array<array{StackName?:string, Insight?:array{OpenProactiveInsights?:int, OpenReactiveInsights?:int, MeanTimeToRecoverInMilliseconds?:int}, AnalyzedResourceCount?:int}>, Service?:array<array{ServiceName?:"API_GATEWAY"|"APPLICATION_ELB"|"AUTO_SCALING_GROUP"|"CLOUD_FRONT"|"DYNAMO_DB"|"EC2"|"ECS"|"EKS"|"ELASTIC_BEANSTALK"|"ELASTI_CACHE"|"ELB"|"ES"|"KINESIS"|"LAMBDA"|"NAT_GATEWAY"|"NETWORK_ELB"|"RDS"|"REDSHIFT"|"ROUTE_53"|"S3"|"SAGE_MAKER"|"SNS"|"SQS"|"STEP_FUNCTIONS"|"SWF", Insight?:array{OpenProactiveInsights?:int, OpenReactiveInsights?:int}, AnalyzedResourceCount?:int}>, Account?:array<array{AccountId?:string, Insight?:array{OpenProactiveInsights?:int, OpenReactiveInsights?:int}}>, NextToken?:string, Tags?:array<array{AppBoundaryKey?:string, TagValue?:string, Insight?:array{OpenProactiveInsights?:int, OpenReactiveInsights?:int, MeanTimeToRecoverInMilliseconds?:int}, AnalyzedResourceCount?:int}>}>
     */
    public function describeOrganizationResourceCollectionHealthAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceCollectionType:"AWS_CLOUD_FORMATION"|"AWS_SERVICE"|"AWS_TAGS", NextToken?:string} $args
     * @return \AWS\Result<array{CloudFormation?:array<array{StackName?:string, Insight?:array{OpenProactiveInsights?:int, OpenReactiveInsights?:int, MeanTimeToRecoverInMilliseconds?:int}, AnalyzedResourceCount?:int}>, Service?:array<array{ServiceName?:"API_GATEWAY"|"APPLICATION_ELB"|"AUTO_SCALING_GROUP"|"CLOUD_FRONT"|"DYNAMO_DB"|"EC2"|"ECS"|"EKS"|"ELASTIC_BEANSTALK"|"ELASTI_CACHE"|"ELB"|"ES"|"KINESIS"|"LAMBDA"|"NAT_GATEWAY"|"NETWORK_ELB"|"RDS"|"REDSHIFT"|"ROUTE_53"|"S3"|"SAGE_MAKER"|"SNS"|"SQS"|"STEP_FUNCTIONS"|"SWF", Insight?:array{OpenProactiveInsights?:int, OpenReactiveInsights?:int}, AnalyzedResourceCount?:int}>, NextToken?:string, Tags?:array<array{AppBoundaryKey?:string, TagValue?:string, Insight?:array{OpenProactiveInsights?:int, OpenReactiveInsights?:int, MeanTimeToRecoverInMilliseconds?:int}, AnalyzedResourceCount?:int}>}>
     */
    public function describeResourceCollectionHealth(array $args): \AWS\Result { }

    /**
     * @param array{ResourceCollectionType:"AWS_CLOUD_FORMATION"|"AWS_SERVICE"|"AWS_TAGS", NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CloudFormation?:array<array{StackName?:string, Insight?:array{OpenProactiveInsights?:int, OpenReactiveInsights?:int, MeanTimeToRecoverInMilliseconds?:int}, AnalyzedResourceCount?:int}>, Service?:array<array{ServiceName?:"API_GATEWAY"|"APPLICATION_ELB"|"AUTO_SCALING_GROUP"|"CLOUD_FRONT"|"DYNAMO_DB"|"EC2"|"ECS"|"EKS"|"ELASTIC_BEANSTALK"|"ELASTI_CACHE"|"ELB"|"ES"|"KINESIS"|"LAMBDA"|"NAT_GATEWAY"|"NETWORK_ELB"|"RDS"|"REDSHIFT"|"ROUTE_53"|"S3"|"SAGE_MAKER"|"SNS"|"SQS"|"STEP_FUNCTIONS"|"SWF", Insight?:array{OpenProactiveInsights?:int, OpenReactiveInsights?:int}, AnalyzedResourceCount?:int}>, NextToken?:string, Tags?:array<array{AppBoundaryKey?:string, TagValue?:string, Insight?:array{OpenProactiveInsights?:int, OpenReactiveInsights?:int, MeanTimeToRecoverInMilliseconds?:int}, AnalyzedResourceCount?:int}>}>
     */
    public function describeResourceCollectionHealthAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{ServiceIntegration?:array{OpsCenter?:array{OptInStatus?:"ENABLED"|"DISABLED"}, LogsAnomalyDetection?:array{OptInStatus?:"ENABLED"|"DISABLED"}, KMSServerSideEncryption?:array{KMSKeyId?:string, OptInStatus?:"ENABLED"|"DISABLED", Type?:"CUSTOMER_MANAGED_KEY"|"AWS_OWNED_KMS_KEY"}}}>
     */
    public function describeServiceIntegration(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServiceIntegration?:array{OpsCenter?:array{OptInStatus?:"ENABLED"|"DISABLED"}, LogsAnomalyDetection?:array{OptInStatus?:"ENABLED"|"DISABLED"}, KMSServerSideEncryption?:array{KMSKeyId?:string, OptInStatus?:"ENABLED"|"DISABLED", Type?:"CUSTOMER_MANAGED_KEY"|"AWS_OWNED_KMS_KEY"}}}>
     */
    public function describeServiceIntegrationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string} $args
     * @return \AWS\Result<array{ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, Status?:"ONGOING"|"COMPLETED", Costs?:array<array{Type?:string, State?:"ACTIVE"|"INACTIVE", Count?:int, UnitCost?:float, Cost?:float}>, TimeRange?:array{StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, TotalCost?:float, NextToken?:string}>
     */
    public function getCostEstimation(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, Status?:"ONGOING"|"COMPLETED", Costs?:array<array{Type?:string, State?:"ACTIVE"|"INACTIVE", Count?:int, UnitCost?:float, Cost?:float}>, TimeRange?:array{StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, TotalCost?:float, NextToken?:string}>
     */
    public function getCostEstimationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceCollectionType:"AWS_CLOUD_FORMATION"|"AWS_SERVICE"|"AWS_TAGS", NextToken?:string} $args
     * @return \AWS\Result<array{ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, NextToken?:string}>
     */
    public function getResourceCollection(array $args): \AWS\Result { }

    /**
     * @param array{ResourceCollectionType:"AWS_CLOUD_FORMATION"|"AWS_SERVICE"|"AWS_TAGS", NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, NextToken?:string}>
     */
    public function getResourceCollectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InsightId:string, StartTimeRange?:array{FromTime?:int|string|\DateTimeInterface, ToTime?:int|string|\DateTimeInterface}, MaxResults?:int, NextToken?:string, AccountId?:string, Filters?:array{ServiceCollection?:array{ServiceNames?:array<"API_GATEWAY"|"APPLICATION_ELB"|"AUTO_SCALING_GROUP"|"CLOUD_FRONT"|"DYNAMO_DB"|"EC2"|"ECS"|"EKS"|"ELASTIC_BEANSTALK"|"ELASTI_CACHE"|"ELB"|"ES"|"KINESIS"|"LAMBDA"|"NAT_GATEWAY"|"NETWORK_ELB"|"RDS"|"REDSHIFT"|"ROUTE_53"|"S3"|"SAGE_MAKER"|"SNS"|"SQS"|"STEP_FUNCTIONS"|"SWF">}}} $args
     * @return \AWS\Result<array{ProactiveAnomalies?:array<array{Id?:string, Severity?:"LOW"|"MEDIUM"|"HIGH", Status?:"ONGOING"|"CLOSED", UpdateTime?:int|string|\DateTimeInterface, AnomalyTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, AnomalyReportedTimeRange?:array{OpenTime:int|string|\DateTimeInterface, CloseTime?:int|string|\DateTimeInterface}, PredictionTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, SourceDetails?:array{CloudWatchMetrics?:array<array{MetricName?:string, Namespace?:string, Dimensions?:array<array{Name?:string, Value?:string}>, Stat?:"Sum"|"Average"|"SampleCount"|"Minimum"|"Maximum"|"p99"|"p90"|"p50", Unit?:string, Period?:int, MetricDataSummary?:array{TimestampMetricValuePairList?:array<array{Timestamp?:int|string|\DateTimeInterface, MetricValue?:float}>, StatusCode?:"Complete"|"InternalError"|"PartialData"}}>, PerformanceInsightsMetrics?:array<array{MetricDisplayName?:string, Unit?:string, MetricQuery?:array{Metric?:string, GroupBy?:array{Group?:string, Dimensions?:array<string>, Limit?:int}, Filter?:array<string, string>}, ReferenceData?:array<array{Name?:string, ComparisonValues?:array{ReferenceScalar?:array{Value?:float}, ReferenceMetric?:array{MetricQuery?:array{Metric?:string, GroupBy?:array{Group?:string, Dimensions?:array<string>, Limit?:int}, Filter?:array<string, string>}}}}>, StatsAtAnomaly?:array<array{Type?:string, Value?:float}>, StatsAtBaseline?:array<array{Type?:string, Value?:float}>}>}, AssociatedInsightId?:string, ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, Limit?:float, SourceMetadata?:array{Source?:string, SourceResourceName?:string, SourceResourceType?:string}, AnomalyResources?:array<array{Name?:string, Type?:string}>, Description?:string}>, ReactiveAnomalies?:array<array{Id?:string, Severity?:"LOW"|"MEDIUM"|"HIGH", Status?:"ONGOING"|"CLOSED", AnomalyTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, AnomalyReportedTimeRange?:array{OpenTime:int|string|\DateTimeInterface, CloseTime?:int|string|\DateTimeInterface}, SourceDetails?:array{CloudWatchMetrics?:array<array{MetricName?:string, Namespace?:string, Dimensions?:array<array{Name?:string, Value?:string}>, Stat?:"Sum"|"Average"|"SampleCount"|"Minimum"|"Maximum"|"p99"|"p90"|"p50", Unit?:string, Period?:int, MetricDataSummary?:array{TimestampMetricValuePairList?:array<array{Timestamp?:int|string|\DateTimeInterface, MetricValue?:float}>, StatusCode?:"Complete"|"InternalError"|"PartialData"}}>, PerformanceInsightsMetrics?:array<array{MetricDisplayName?:string, Unit?:string, MetricQuery?:array{Metric?:string, GroupBy?:array{Group?:string, Dimensions?:array<string>, Limit?:int}, Filter?:array<string, string>}, ReferenceData?:array<array{Name?:string, ComparisonValues?:array{ReferenceScalar?:array{Value?:float}, ReferenceMetric?:array{MetricQuery?:array{Metric?:string, GroupBy?:array{Group?:string, Dimensions?:array<string>, Limit?:int}, Filter?:array<string, string>}}}}>, StatsAtAnomaly?:array<array{Type?:string, Value?:float}>, StatsAtBaseline?:array<array{Type?:string, Value?:float}>}>}, AssociatedInsightId?:string, ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, Type?:"CAUSAL"|"CONTEXTUAL", Name?:string, Description?:string, CausalAnomalyId?:string, AnomalyResources?:array<array{Name?:string, Type?:string}>}>, NextToken?:string}>
     */
    public function listAnomaliesForInsight(array $args): \AWS\Result { }

    /**
     * @param array{InsightId:string, StartTimeRange?:array{FromTime?:int|string|\DateTimeInterface, ToTime?:int|string|\DateTimeInterface}, MaxResults?:int, NextToken?:string, AccountId?:string, Filters?:array{ServiceCollection?:array{ServiceNames?:array<"API_GATEWAY"|"APPLICATION_ELB"|"AUTO_SCALING_GROUP"|"CLOUD_FRONT"|"DYNAMO_DB"|"EC2"|"ECS"|"EKS"|"ELASTIC_BEANSTALK"|"ELASTI_CACHE"|"ELB"|"ES"|"KINESIS"|"LAMBDA"|"NAT_GATEWAY"|"NETWORK_ELB"|"RDS"|"REDSHIFT"|"ROUTE_53"|"S3"|"SAGE_MAKER"|"SNS"|"SQS"|"STEP_FUNCTIONS"|"SWF">}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProactiveAnomalies?:array<array{Id?:string, Severity?:"LOW"|"MEDIUM"|"HIGH", Status?:"ONGOING"|"CLOSED", UpdateTime?:int|string|\DateTimeInterface, AnomalyTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, AnomalyReportedTimeRange?:array{OpenTime:int|string|\DateTimeInterface, CloseTime?:int|string|\DateTimeInterface}, PredictionTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, SourceDetails?:array{CloudWatchMetrics?:array<array{MetricName?:string, Namespace?:string, Dimensions?:array<array{Name?:string, Value?:string}>, Stat?:"Sum"|"Average"|"SampleCount"|"Minimum"|"Maximum"|"p99"|"p90"|"p50", Unit?:string, Period?:int, MetricDataSummary?:array{TimestampMetricValuePairList?:array<array{Timestamp?:int|string|\DateTimeInterface, MetricValue?:float}>, StatusCode?:"Complete"|"InternalError"|"PartialData"}}>, PerformanceInsightsMetrics?:array<array{MetricDisplayName?:string, Unit?:string, MetricQuery?:array{Metric?:string, GroupBy?:array{Group?:string, Dimensions?:array<string>, Limit?:int}, Filter?:array<string, string>}, ReferenceData?:array<array{Name?:string, ComparisonValues?:array{ReferenceScalar?:array{Value?:float}, ReferenceMetric?:array{MetricQuery?:array{Metric?:string, GroupBy?:array{Group?:string, Dimensions?:array<string>, Limit?:int}, Filter?:array<string, string>}}}}>, StatsAtAnomaly?:array<array{Type?:string, Value?:float}>, StatsAtBaseline?:array<array{Type?:string, Value?:float}>}>}, AssociatedInsightId?:string, ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, Limit?:float, SourceMetadata?:array{Source?:string, SourceResourceName?:string, SourceResourceType?:string}, AnomalyResources?:array<array{Name?:string, Type?:string}>, Description?:string}>, ReactiveAnomalies?:array<array{Id?:string, Severity?:"LOW"|"MEDIUM"|"HIGH", Status?:"ONGOING"|"CLOSED", AnomalyTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, AnomalyReportedTimeRange?:array{OpenTime:int|string|\DateTimeInterface, CloseTime?:int|string|\DateTimeInterface}, SourceDetails?:array{CloudWatchMetrics?:array<array{MetricName?:string, Namespace?:string, Dimensions?:array<array{Name?:string, Value?:string}>, Stat?:"Sum"|"Average"|"SampleCount"|"Minimum"|"Maximum"|"p99"|"p90"|"p50", Unit?:string, Period?:int, MetricDataSummary?:array{TimestampMetricValuePairList?:array<array{Timestamp?:int|string|\DateTimeInterface, MetricValue?:float}>, StatusCode?:"Complete"|"InternalError"|"PartialData"}}>, PerformanceInsightsMetrics?:array<array{MetricDisplayName?:string, Unit?:string, MetricQuery?:array{Metric?:string, GroupBy?:array{Group?:string, Dimensions?:array<string>, Limit?:int}, Filter?:array<string, string>}, ReferenceData?:array<array{Name?:string, ComparisonValues?:array{ReferenceScalar?:array{Value?:float}, ReferenceMetric?:array{MetricQuery?:array{Metric?:string, GroupBy?:array{Group?:string, Dimensions?:array<string>, Limit?:int}, Filter?:array<string, string>}}}}>, StatsAtAnomaly?:array<array{Type?:string, Value?:float}>, StatsAtBaseline?:array<array{Type?:string, Value?:float}>}>}, AssociatedInsightId?:string, ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, Type?:"CAUSAL"|"CONTEXTUAL", Name?:string, Description?:string, CausalAnomalyId?:string, AnomalyResources?:array<array{Name?:string, Type?:string}>}>, NextToken?:string}>
     */
    public function listAnomaliesForInsightAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InsightId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{InsightId:string, AnomalousLogGroups:array<array{LogGroupName?:string, ImpactStartTime?:int|string|\DateTimeInterface, ImpactEndTime?:int|string|\DateTimeInterface, NumberOfLogLinesScanned?:int, LogAnomalyShowcases?:array<array{LogAnomalyClasses?:array<array{LogStreamName?:string, LogAnomalyType?:"KEYWORD"|"KEYWORD_TOKEN"|"FORMAT"|"HTTP_CODE"|"BLOCK_FORMAT"|"NUMERICAL_POINT"|"NUMERICAL_NAN"|"NEW_FIELD_NAME", LogAnomalyToken?:string, LogEventId?:string, Explanation?:string, NumberOfLogLinesOccurrences?:int, LogEventTimestamp?:int|string|\DateTimeInterface}>}>}>, NextToken?:string}>
     */
    public function listAnomalousLogGroups(array $args): \AWS\Result { }

    /**
     * @param array{InsightId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{InsightId:string, AnomalousLogGroups:array<array{LogGroupName?:string, ImpactStartTime?:int|string|\DateTimeInterface, ImpactEndTime?:int|string|\DateTimeInterface, NumberOfLogLinesScanned?:int, LogAnomalyShowcases?:array<array{LogAnomalyClasses?:array<array{LogStreamName?:string, LogAnomalyType?:"KEYWORD"|"KEYWORD_TOKEN"|"FORMAT"|"HTTP_CODE"|"BLOCK_FORMAT"|"NUMERICAL_POINT"|"NUMERICAL_NAN"|"NEW_FIELD_NAME", LogAnomalyToken?:string, LogEventId?:string, Explanation?:string, NumberOfLogLinesOccurrences?:int, LogEventTimestamp?:int|string|\DateTimeInterface}>}>}>, NextToken?:string}>
     */
    public function listAnomalousLogGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters:array{InsightId?:string, EventTimeRange?:array{FromTime:int|string|\DateTimeInterface, ToTime:int|string|\DateTimeInterface}, EventClass?:"INFRASTRUCTURE"|"DEPLOYMENT"|"SECURITY_CHANGE"|"CONFIG_CHANGE"|"SCHEMA_CHANGE", EventSource?:string, DataSource?:"AWS_CLOUD_TRAIL"|"AWS_CODE_DEPLOY", ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}}, MaxResults?:int, NextToken?:string, AccountId?:string} $args
     * @return \AWS\Result<array{Events:array<array{ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, Id?:string, Time?:int|string|\DateTimeInterface, EventSource?:string, Name?:string, DataSource?:"AWS_CLOUD_TRAIL"|"AWS_CODE_DEPLOY", EventClass?:"INFRASTRUCTURE"|"DEPLOYMENT"|"SECURITY_CHANGE"|"CONFIG_CHANGE"|"SCHEMA_CHANGE", Resources?:array<array{Type?:string, Name?:string, Arn?:string}>}>, NextToken?:string}>
     */
    public function listEvents(array $args): \AWS\Result { }

    /**
     * @param array{Filters:array{InsightId?:string, EventTimeRange?:array{FromTime:int|string|\DateTimeInterface, ToTime:int|string|\DateTimeInterface}, EventClass?:"INFRASTRUCTURE"|"DEPLOYMENT"|"SECURITY_CHANGE"|"CONFIG_CHANGE"|"SCHEMA_CHANGE", EventSource?:string, DataSource?:"AWS_CLOUD_TRAIL"|"AWS_CODE_DEPLOY", ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}}, MaxResults?:int, NextToken?:string, AccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Events:array<array{ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, Id?:string, Time?:int|string|\DateTimeInterface, EventSource?:string, Name?:string, DataSource?:"AWS_CLOUD_TRAIL"|"AWS_CODE_DEPLOY", EventClass?:"INFRASTRUCTURE"|"DEPLOYMENT"|"SECURITY_CHANGE"|"CONFIG_CHANGE"|"SCHEMA_CHANGE", Resources?:array<array{Type?:string, Name?:string, Arn?:string}>}>, NextToken?:string}>
     */
    public function listEventsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StatusFilter:array{Ongoing?:array{Type:"REACTIVE"|"PROACTIVE"}, Closed?:array{Type:"REACTIVE"|"PROACTIVE", EndTimeRange:array{FromTime?:int|string|\DateTimeInterface, ToTime?:int|string|\DateTimeInterface}}, Any?:array{Type:"REACTIVE"|"PROACTIVE", StartTimeRange:array{FromTime?:int|string|\DateTimeInterface, ToTime?:int|string|\DateTimeInterface}}}, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ProactiveInsights?:array<array{Id?:string, Name?:string, Severity?:"LOW"|"MEDIUM"|"HIGH", Status?:"ONGOING"|"CLOSED", InsightTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, PredictionTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, ServiceCollection?:array{ServiceNames?:array<"API_GATEWAY"|"APPLICATION_ELB"|"AUTO_SCALING_GROUP"|"CLOUD_FRONT"|"DYNAMO_DB"|"EC2"|"ECS"|"EKS"|"ELASTIC_BEANSTALK"|"ELASTI_CACHE"|"ELB"|"ES"|"KINESIS"|"LAMBDA"|"NAT_GATEWAY"|"NETWORK_ELB"|"RDS"|"REDSHIFT"|"ROUTE_53"|"S3"|"SAGE_MAKER"|"SNS"|"SQS"|"STEP_FUNCTIONS"|"SWF">}, AssociatedResourceArns?:array<string>}>, ReactiveInsights?:array<array{Id?:string, Name?:string, Severity?:"LOW"|"MEDIUM"|"HIGH", Status?:"ONGOING"|"CLOSED", InsightTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, ServiceCollection?:array{ServiceNames?:array<"API_GATEWAY"|"APPLICATION_ELB"|"AUTO_SCALING_GROUP"|"CLOUD_FRONT"|"DYNAMO_DB"|"EC2"|"ECS"|"EKS"|"ELASTIC_BEANSTALK"|"ELASTI_CACHE"|"ELB"|"ES"|"KINESIS"|"LAMBDA"|"NAT_GATEWAY"|"NETWORK_ELB"|"RDS"|"REDSHIFT"|"ROUTE_53"|"S3"|"SAGE_MAKER"|"SNS"|"SQS"|"STEP_FUNCTIONS"|"SWF">}, AssociatedResourceArns?:array<string>}>, NextToken?:string}>
     */
    public function listInsights(array $args): \AWS\Result { }

    /**
     * @param array{StatusFilter:array{Ongoing?:array{Type:"REACTIVE"|"PROACTIVE"}, Closed?:array{Type:"REACTIVE"|"PROACTIVE", EndTimeRange:array{FromTime?:int|string|\DateTimeInterface, ToTime?:int|string|\DateTimeInterface}}, Any?:array{Type:"REACTIVE"|"PROACTIVE", StartTimeRange:array{FromTime?:int|string|\DateTimeInterface, ToTime?:int|string|\DateTimeInterface}}}, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProactiveInsights?:array<array{Id?:string, Name?:string, Severity?:"LOW"|"MEDIUM"|"HIGH", Status?:"ONGOING"|"CLOSED", InsightTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, PredictionTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, ServiceCollection?:array{ServiceNames?:array<"API_GATEWAY"|"APPLICATION_ELB"|"AUTO_SCALING_GROUP"|"CLOUD_FRONT"|"DYNAMO_DB"|"EC2"|"ECS"|"EKS"|"ELASTIC_BEANSTALK"|"ELASTI_CACHE"|"ELB"|"ES"|"KINESIS"|"LAMBDA"|"NAT_GATEWAY"|"NETWORK_ELB"|"RDS"|"REDSHIFT"|"ROUTE_53"|"S3"|"SAGE_MAKER"|"SNS"|"SQS"|"STEP_FUNCTIONS"|"SWF">}, AssociatedResourceArns?:array<string>}>, ReactiveInsights?:array<array{Id?:string, Name?:string, Severity?:"LOW"|"MEDIUM"|"HIGH", Status?:"ONGOING"|"CLOSED", InsightTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, ServiceCollection?:array{ServiceNames?:array<"API_GATEWAY"|"APPLICATION_ELB"|"AUTO_SCALING_GROUP"|"CLOUD_FRONT"|"DYNAMO_DB"|"EC2"|"ECS"|"EKS"|"ELASTIC_BEANSTALK"|"ELASTI_CACHE"|"ELB"|"ES"|"KINESIS"|"LAMBDA"|"NAT_GATEWAY"|"NETWORK_ELB"|"RDS"|"REDSHIFT"|"ROUTE_53"|"S3"|"SAGE_MAKER"|"SNS"|"SQS"|"STEP_FUNCTIONS"|"SWF">}, AssociatedResourceArns?:array<string>}>, NextToken?:string}>
     */
    public function listInsightsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array{ResourcePermission:"FULL_PERMISSION"|"MISSING_PERMISSION", ResourceTypeFilters:array<"LOG_GROUPS"|"CLOUDFRONT_DISTRIBUTION"|"DYNAMODB_TABLE"|"EC2_NAT_GATEWAY"|"ECS_CLUSTER"|"ECS_SERVICE"|"EKS_CLUSTER"|"ELASTIC_BEANSTALK_ENVIRONMENT"|"ELASTIC_LOAD_BALANCER_LOAD_BALANCER"|"ELASTIC_LOAD_BALANCING_V2_LOAD_BALANCER"|"ELASTIC_LOAD_BALANCING_V2_TARGET_GROUP"|"ELASTICACHE_CACHE_CLUSTER"|"ELASTICSEARCH_DOMAIN"|"KINESIS_STREAM"|"LAMBDA_FUNCTION"|"OPEN_SEARCH_SERVICE_DOMAIN"|"RDS_DB_INSTANCE"|"RDS_DB_CLUSTER"|"REDSHIFT_CLUSTER"|"ROUTE53_HOSTED_ZONE"|"ROUTE53_HEALTH_CHECK"|"S3_BUCKET"|"SAGEMAKER_ENDPOINT"|"SNS_TOPIC"|"SQS_QUEUE"|"STEP_FUNCTIONS_ACTIVITY"|"STEP_FUNCTIONS_STATE_MACHINE">}, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{MonitoredResourceIdentifiers:array<array{MonitoredResourceName?:string, Type?:string, ResourcePermission?:"FULL_PERMISSION"|"MISSING_PERMISSION", LastUpdated?:int|string|\DateTimeInterface, ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}}>, NextToken?:string}>
     */
    public function listMonitoredResources(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array{ResourcePermission:"FULL_PERMISSION"|"MISSING_PERMISSION", ResourceTypeFilters:array<"LOG_GROUPS"|"CLOUDFRONT_DISTRIBUTION"|"DYNAMODB_TABLE"|"EC2_NAT_GATEWAY"|"ECS_CLUSTER"|"ECS_SERVICE"|"EKS_CLUSTER"|"ELASTIC_BEANSTALK_ENVIRONMENT"|"ELASTIC_LOAD_BALANCER_LOAD_BALANCER"|"ELASTIC_LOAD_BALANCING_V2_LOAD_BALANCER"|"ELASTIC_LOAD_BALANCING_V2_TARGET_GROUP"|"ELASTICACHE_CACHE_CLUSTER"|"ELASTICSEARCH_DOMAIN"|"KINESIS_STREAM"|"LAMBDA_FUNCTION"|"OPEN_SEARCH_SERVICE_DOMAIN"|"RDS_DB_INSTANCE"|"RDS_DB_CLUSTER"|"REDSHIFT_CLUSTER"|"ROUTE53_HOSTED_ZONE"|"ROUTE53_HEALTH_CHECK"|"S3_BUCKET"|"SAGEMAKER_ENDPOINT"|"SNS_TOPIC"|"SQS_QUEUE"|"STEP_FUNCTIONS_ACTIVITY"|"STEP_FUNCTIONS_STATE_MACHINE">}, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MonitoredResourceIdentifiers:array<array{MonitoredResourceName?:string, Type?:string, ResourcePermission?:"FULL_PERMISSION"|"MISSING_PERMISSION", LastUpdated?:int|string|\DateTimeInterface, ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}}>, NextToken?:string}>
     */
    public function listMonitoredResourcesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string} $args
     * @return \AWS\Result<array{Channels?:array<array{Id?:string, Config?:array{Sns:array{TopicArn?:string}, Filters?:array{Severities?:array<"LOW"|"MEDIUM"|"HIGH">, MessageTypes?:array<"NEW_INSIGHT"|"CLOSED_INSIGHT"|"NEW_ASSOCIATION"|"SEVERITY_UPGRADED"|"NEW_RECOMMENDATION">}}}>, NextToken?:string}>
     */
    public function listNotificationChannels(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Channels?:array<array{Id?:string, Config?:array{Sns:array{TopicArn?:string}, Filters?:array{Severities?:array<"LOW"|"MEDIUM"|"HIGH">, MessageTypes?:array<"NEW_INSIGHT"|"CLOSED_INSIGHT"|"NEW_ASSOCIATION"|"SEVERITY_UPGRADED"|"NEW_RECOMMENDATION">}}}>, NextToken?:string}>
     */
    public function listNotificationChannelsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StatusFilter:array{Ongoing?:array{Type:"REACTIVE"|"PROACTIVE"}, Closed?:array{Type:"REACTIVE"|"PROACTIVE", EndTimeRange:array{FromTime?:int|string|\DateTimeInterface, ToTime?:int|string|\DateTimeInterface}}, Any?:array{Type:"REACTIVE"|"PROACTIVE", StartTimeRange:array{FromTime?:int|string|\DateTimeInterface, ToTime?:int|string|\DateTimeInterface}}}, MaxResults?:int, AccountIds?:array<string>, OrganizationalUnitIds?:array<string>, NextToken?:string} $args
     * @return \AWS\Result<array{ProactiveInsights?:array<array{Id?:string, AccountId?:string, OrganizationalUnitId?:string, Name?:string, Severity?:"LOW"|"MEDIUM"|"HIGH", Status?:"ONGOING"|"CLOSED", InsightTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, PredictionTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, ServiceCollection?:array{ServiceNames?:array<"API_GATEWAY"|"APPLICATION_ELB"|"AUTO_SCALING_GROUP"|"CLOUD_FRONT"|"DYNAMO_DB"|"EC2"|"ECS"|"EKS"|"ELASTIC_BEANSTALK"|"ELASTI_CACHE"|"ELB"|"ES"|"KINESIS"|"LAMBDA"|"NAT_GATEWAY"|"NETWORK_ELB"|"RDS"|"REDSHIFT"|"ROUTE_53"|"S3"|"SAGE_MAKER"|"SNS"|"SQS"|"STEP_FUNCTIONS"|"SWF">}}>, ReactiveInsights?:array<array{Id?:string, AccountId?:string, OrganizationalUnitId?:string, Name?:string, Severity?:"LOW"|"MEDIUM"|"HIGH", Status?:"ONGOING"|"CLOSED", InsightTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, ServiceCollection?:array{ServiceNames?:array<"API_GATEWAY"|"APPLICATION_ELB"|"AUTO_SCALING_GROUP"|"CLOUD_FRONT"|"DYNAMO_DB"|"EC2"|"ECS"|"EKS"|"ELASTIC_BEANSTALK"|"ELASTI_CACHE"|"ELB"|"ES"|"KINESIS"|"LAMBDA"|"NAT_GATEWAY"|"NETWORK_ELB"|"RDS"|"REDSHIFT"|"ROUTE_53"|"S3"|"SAGE_MAKER"|"SNS"|"SQS"|"STEP_FUNCTIONS"|"SWF">}}>, NextToken?:string}>
     */
    public function listOrganizationInsights(array $args): \AWS\Result { }

    /**
     * @param array{StatusFilter:array{Ongoing?:array{Type:"REACTIVE"|"PROACTIVE"}, Closed?:array{Type:"REACTIVE"|"PROACTIVE", EndTimeRange:array{FromTime?:int|string|\DateTimeInterface, ToTime?:int|string|\DateTimeInterface}}, Any?:array{Type:"REACTIVE"|"PROACTIVE", StartTimeRange:array{FromTime?:int|string|\DateTimeInterface, ToTime?:int|string|\DateTimeInterface}}}, MaxResults?:int, AccountIds?:array<string>, OrganizationalUnitIds?:array<string>, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProactiveInsights?:array<array{Id?:string, AccountId?:string, OrganizationalUnitId?:string, Name?:string, Severity?:"LOW"|"MEDIUM"|"HIGH", Status?:"ONGOING"|"CLOSED", InsightTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, PredictionTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, ServiceCollection?:array{ServiceNames?:array<"API_GATEWAY"|"APPLICATION_ELB"|"AUTO_SCALING_GROUP"|"CLOUD_FRONT"|"DYNAMO_DB"|"EC2"|"ECS"|"EKS"|"ELASTIC_BEANSTALK"|"ELASTI_CACHE"|"ELB"|"ES"|"KINESIS"|"LAMBDA"|"NAT_GATEWAY"|"NETWORK_ELB"|"RDS"|"REDSHIFT"|"ROUTE_53"|"S3"|"SAGE_MAKER"|"SNS"|"SQS"|"STEP_FUNCTIONS"|"SWF">}}>, ReactiveInsights?:array<array{Id?:string, AccountId?:string, OrganizationalUnitId?:string, Name?:string, Severity?:"LOW"|"MEDIUM"|"HIGH", Status?:"ONGOING"|"CLOSED", InsightTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, ServiceCollection?:array{ServiceNames?:array<"API_GATEWAY"|"APPLICATION_ELB"|"AUTO_SCALING_GROUP"|"CLOUD_FRONT"|"DYNAMO_DB"|"EC2"|"ECS"|"EKS"|"ELASTIC_BEANSTALK"|"ELASTI_CACHE"|"ELB"|"ES"|"KINESIS"|"LAMBDA"|"NAT_GATEWAY"|"NETWORK_ELB"|"RDS"|"REDSHIFT"|"ROUTE_53"|"S3"|"SAGE_MAKER"|"SNS"|"SQS"|"STEP_FUNCTIONS"|"SWF">}}>, NextToken?:string}>
     */
    public function listOrganizationInsightsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InsightId:string, NextToken?:string, Locale?:"DE_DE"|"EN_US"|"EN_GB"|"ES_ES"|"FR_FR"|"IT_IT"|"JA_JP"|"KO_KR"|"PT_BR"|"ZH_CN"|"ZH_TW", AccountId?:string} $args
     * @return \AWS\Result<array{Recommendations?:array<array{Description?:string, Link?:string, Name?:string, Reason?:string, RelatedEvents?:array<array{Name?:string, Resources?:array<array{Name?:string, Type?:string}>}>, RelatedAnomalies?:array<array{Resources?:array<array{Name?:string, Type?:string}>, SourceDetails?:array<array{CloudWatchMetrics?:array<array{MetricName?:string, Namespace?:string}>}>, AnomalyId?:string}>, Category?:string}>, NextToken?:string}>
     */
    public function listRecommendations(array $args): \AWS\Result { }

    /**
     * @param array{InsightId:string, NextToken?:string, Locale?:"DE_DE"|"EN_US"|"EN_GB"|"ES_ES"|"FR_FR"|"IT_IT"|"JA_JP"|"KO_KR"|"PT_BR"|"ZH_CN"|"ZH_TW", AccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Recommendations?:array<array{Description?:string, Link?:string, Name?:string, Reason?:string, RelatedEvents?:array<array{Name?:string, Resources?:array<array{Name?:string, Type?:string}>}>, RelatedAnomalies?:array<array{Resources?:array<array{Name?:string, Type?:string}>, SourceDetails?:array<array{CloudWatchMetrics?:array<array{MetricName?:string, Namespace?:string}>}>, AnomalyId?:string}>, Category?:string}>, NextToken?:string}>
     */
    public function listRecommendationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InsightFeedback?:array{Id?:string, Feedback?:"VALID_COLLECTION"|"RECOMMENDATION_USEFUL"|"ALERT_TOO_SENSITIVE"|"DATA_NOISY_ANOMALY"|"DATA_INCORRECT"}} $args
     * @return \AWS\Result<array{}>
     */
    public function putFeedback(array $args = []): \AWS\Result { }

    /**
     * @param array{InsightFeedback?:array{Id?:string, Feedback?:"VALID_COLLECTION"|"RECOMMENDATION_USEFUL"|"ALERT_TOO_SENSITIVE"|"DATA_NOISY_ANOMALY"|"DATA_INCORRECT"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putFeedbackAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function removeNotificationChannel(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function removeNotificationChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StartTimeRange:array{FromTime?:int|string|\DateTimeInterface, ToTime?:int|string|\DateTimeInterface}, Filters?:array{Severities?:array<"LOW"|"MEDIUM"|"HIGH">, Statuses?:array<"ONGOING"|"CLOSED">, ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, ServiceCollection?:array{ServiceNames?:array<"API_GATEWAY"|"APPLICATION_ELB"|"AUTO_SCALING_GROUP"|"CLOUD_FRONT"|"DYNAMO_DB"|"EC2"|"ECS"|"EKS"|"ELASTIC_BEANSTALK"|"ELASTI_CACHE"|"ELB"|"ES"|"KINESIS"|"LAMBDA"|"NAT_GATEWAY"|"NETWORK_ELB"|"RDS"|"REDSHIFT"|"ROUTE_53"|"S3"|"SAGE_MAKER"|"SNS"|"SQS"|"STEP_FUNCTIONS"|"SWF">}}, MaxResults?:int, NextToken?:string, Type:"REACTIVE"|"PROACTIVE"} $args
     * @return \AWS\Result<array{ProactiveInsights?:array<array{Id?:string, Name?:string, Severity?:"LOW"|"MEDIUM"|"HIGH", Status?:"ONGOING"|"CLOSED", InsightTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, PredictionTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, ServiceCollection?:array{ServiceNames?:array<"API_GATEWAY"|"APPLICATION_ELB"|"AUTO_SCALING_GROUP"|"CLOUD_FRONT"|"DYNAMO_DB"|"EC2"|"ECS"|"EKS"|"ELASTIC_BEANSTALK"|"ELASTI_CACHE"|"ELB"|"ES"|"KINESIS"|"LAMBDA"|"NAT_GATEWAY"|"NETWORK_ELB"|"RDS"|"REDSHIFT"|"ROUTE_53"|"S3"|"SAGE_MAKER"|"SNS"|"SQS"|"STEP_FUNCTIONS"|"SWF">}, AssociatedResourceArns?:array<string>}>, ReactiveInsights?:array<array{Id?:string, Name?:string, Severity?:"LOW"|"MEDIUM"|"HIGH", Status?:"ONGOING"|"CLOSED", InsightTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, ServiceCollection?:array{ServiceNames?:array<"API_GATEWAY"|"APPLICATION_ELB"|"AUTO_SCALING_GROUP"|"CLOUD_FRONT"|"DYNAMO_DB"|"EC2"|"ECS"|"EKS"|"ELASTIC_BEANSTALK"|"ELASTI_CACHE"|"ELB"|"ES"|"KINESIS"|"LAMBDA"|"NAT_GATEWAY"|"NETWORK_ELB"|"RDS"|"REDSHIFT"|"ROUTE_53"|"S3"|"SAGE_MAKER"|"SNS"|"SQS"|"STEP_FUNCTIONS"|"SWF">}, AssociatedResourceArns?:array<string>}>, NextToken?:string}>
     */
    public function searchInsights(array $args): \AWS\Result { }

    /**
     * @param array{StartTimeRange:array{FromTime?:int|string|\DateTimeInterface, ToTime?:int|string|\DateTimeInterface}, Filters?:array{Severities?:array<"LOW"|"MEDIUM"|"HIGH">, Statuses?:array<"ONGOING"|"CLOSED">, ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, ServiceCollection?:array{ServiceNames?:array<"API_GATEWAY"|"APPLICATION_ELB"|"AUTO_SCALING_GROUP"|"CLOUD_FRONT"|"DYNAMO_DB"|"EC2"|"ECS"|"EKS"|"ELASTIC_BEANSTALK"|"ELASTI_CACHE"|"ELB"|"ES"|"KINESIS"|"LAMBDA"|"NAT_GATEWAY"|"NETWORK_ELB"|"RDS"|"REDSHIFT"|"ROUTE_53"|"S3"|"SAGE_MAKER"|"SNS"|"SQS"|"STEP_FUNCTIONS"|"SWF">}}, MaxResults?:int, NextToken?:string, Type:"REACTIVE"|"PROACTIVE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProactiveInsights?:array<array{Id?:string, Name?:string, Severity?:"LOW"|"MEDIUM"|"HIGH", Status?:"ONGOING"|"CLOSED", InsightTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, PredictionTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, ServiceCollection?:array{ServiceNames?:array<"API_GATEWAY"|"APPLICATION_ELB"|"AUTO_SCALING_GROUP"|"CLOUD_FRONT"|"DYNAMO_DB"|"EC2"|"ECS"|"EKS"|"ELASTIC_BEANSTALK"|"ELASTI_CACHE"|"ELB"|"ES"|"KINESIS"|"LAMBDA"|"NAT_GATEWAY"|"NETWORK_ELB"|"RDS"|"REDSHIFT"|"ROUTE_53"|"S3"|"SAGE_MAKER"|"SNS"|"SQS"|"STEP_FUNCTIONS"|"SWF">}, AssociatedResourceArns?:array<string>}>, ReactiveInsights?:array<array{Id?:string, Name?:string, Severity?:"LOW"|"MEDIUM"|"HIGH", Status?:"ONGOING"|"CLOSED", InsightTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, ServiceCollection?:array{ServiceNames?:array<"API_GATEWAY"|"APPLICATION_ELB"|"AUTO_SCALING_GROUP"|"CLOUD_FRONT"|"DYNAMO_DB"|"EC2"|"ECS"|"EKS"|"ELASTIC_BEANSTALK"|"ELASTI_CACHE"|"ELB"|"ES"|"KINESIS"|"LAMBDA"|"NAT_GATEWAY"|"NETWORK_ELB"|"RDS"|"REDSHIFT"|"ROUTE_53"|"S3"|"SAGE_MAKER"|"SNS"|"SQS"|"STEP_FUNCTIONS"|"SWF">}, AssociatedResourceArns?:array<string>}>, NextToken?:string}>
     */
    public function searchInsightsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountIds:array<string>, StartTimeRange:array{FromTime?:int|string|\DateTimeInterface, ToTime?:int|string|\DateTimeInterface}, Filters?:array{Severities?:array<"LOW"|"MEDIUM"|"HIGH">, Statuses?:array<"ONGOING"|"CLOSED">, ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, ServiceCollection?:array{ServiceNames?:array<"API_GATEWAY"|"APPLICATION_ELB"|"AUTO_SCALING_GROUP"|"CLOUD_FRONT"|"DYNAMO_DB"|"EC2"|"ECS"|"EKS"|"ELASTIC_BEANSTALK"|"ELASTI_CACHE"|"ELB"|"ES"|"KINESIS"|"LAMBDA"|"NAT_GATEWAY"|"NETWORK_ELB"|"RDS"|"REDSHIFT"|"ROUTE_53"|"S3"|"SAGE_MAKER"|"SNS"|"SQS"|"STEP_FUNCTIONS"|"SWF">}}, MaxResults?:int, NextToken?:string, Type:"REACTIVE"|"PROACTIVE"} $args
     * @return \AWS\Result<array{ProactiveInsights?:array<array{Id?:string, Name?:string, Severity?:"LOW"|"MEDIUM"|"HIGH", Status?:"ONGOING"|"CLOSED", InsightTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, PredictionTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, ServiceCollection?:array{ServiceNames?:array<"API_GATEWAY"|"APPLICATION_ELB"|"AUTO_SCALING_GROUP"|"CLOUD_FRONT"|"DYNAMO_DB"|"EC2"|"ECS"|"EKS"|"ELASTIC_BEANSTALK"|"ELASTI_CACHE"|"ELB"|"ES"|"KINESIS"|"LAMBDA"|"NAT_GATEWAY"|"NETWORK_ELB"|"RDS"|"REDSHIFT"|"ROUTE_53"|"S3"|"SAGE_MAKER"|"SNS"|"SQS"|"STEP_FUNCTIONS"|"SWF">}, AssociatedResourceArns?:array<string>}>, ReactiveInsights?:array<array{Id?:string, Name?:string, Severity?:"LOW"|"MEDIUM"|"HIGH", Status?:"ONGOING"|"CLOSED", InsightTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, ServiceCollection?:array{ServiceNames?:array<"API_GATEWAY"|"APPLICATION_ELB"|"AUTO_SCALING_GROUP"|"CLOUD_FRONT"|"DYNAMO_DB"|"EC2"|"ECS"|"EKS"|"ELASTIC_BEANSTALK"|"ELASTI_CACHE"|"ELB"|"ES"|"KINESIS"|"LAMBDA"|"NAT_GATEWAY"|"NETWORK_ELB"|"RDS"|"REDSHIFT"|"ROUTE_53"|"S3"|"SAGE_MAKER"|"SNS"|"SQS"|"STEP_FUNCTIONS"|"SWF">}, AssociatedResourceArns?:array<string>}>, NextToken?:string}>
     */
    public function searchOrganizationInsights(array $args): \AWS\Result { }

    /**
     * @param array{AccountIds:array<string>, StartTimeRange:array{FromTime?:int|string|\DateTimeInterface, ToTime?:int|string|\DateTimeInterface}, Filters?:array{Severities?:array<"LOW"|"MEDIUM"|"HIGH">, Statuses?:array<"ONGOING"|"CLOSED">, ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, ServiceCollection?:array{ServiceNames?:array<"API_GATEWAY"|"APPLICATION_ELB"|"AUTO_SCALING_GROUP"|"CLOUD_FRONT"|"DYNAMO_DB"|"EC2"|"ECS"|"EKS"|"ELASTIC_BEANSTALK"|"ELASTI_CACHE"|"ELB"|"ES"|"KINESIS"|"LAMBDA"|"NAT_GATEWAY"|"NETWORK_ELB"|"RDS"|"REDSHIFT"|"ROUTE_53"|"S3"|"SAGE_MAKER"|"SNS"|"SQS"|"STEP_FUNCTIONS"|"SWF">}}, MaxResults?:int, NextToken?:string, Type:"REACTIVE"|"PROACTIVE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProactiveInsights?:array<array{Id?:string, Name?:string, Severity?:"LOW"|"MEDIUM"|"HIGH", Status?:"ONGOING"|"CLOSED", InsightTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, PredictionTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, ServiceCollection?:array{ServiceNames?:array<"API_GATEWAY"|"APPLICATION_ELB"|"AUTO_SCALING_GROUP"|"CLOUD_FRONT"|"DYNAMO_DB"|"EC2"|"ECS"|"EKS"|"ELASTIC_BEANSTALK"|"ELASTI_CACHE"|"ELB"|"ES"|"KINESIS"|"LAMBDA"|"NAT_GATEWAY"|"NETWORK_ELB"|"RDS"|"REDSHIFT"|"ROUTE_53"|"S3"|"SAGE_MAKER"|"SNS"|"SQS"|"STEP_FUNCTIONS"|"SWF">}, AssociatedResourceArns?:array<string>}>, ReactiveInsights?:array<array{Id?:string, Name?:string, Severity?:"LOW"|"MEDIUM"|"HIGH", Status?:"ONGOING"|"CLOSED", InsightTimeRange?:array{StartTime:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, ResourceCollection?:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, ServiceCollection?:array{ServiceNames?:array<"API_GATEWAY"|"APPLICATION_ELB"|"AUTO_SCALING_GROUP"|"CLOUD_FRONT"|"DYNAMO_DB"|"EC2"|"ECS"|"EKS"|"ELASTIC_BEANSTALK"|"ELASTI_CACHE"|"ELB"|"ES"|"KINESIS"|"LAMBDA"|"NAT_GATEWAY"|"NETWORK_ELB"|"RDS"|"REDSHIFT"|"ROUTE_53"|"S3"|"SAGE_MAKER"|"SNS"|"SQS"|"STEP_FUNCTIONS"|"SWF">}, AssociatedResourceArns?:array<string>}>, NextToken?:string}>
     */
    public function searchOrganizationInsightsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceCollection:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, ClientToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function startCostEstimation(array $args): \AWS\Result { }

    /**
     * @param array{ResourceCollection:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function startCostEstimationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EventSources?:array{AmazonCodeGuruProfiler?:array{Status?:"ENABLED"|"DISABLED"}}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateEventSourcesConfig(array $args = []): \AWS\Result { }

    /**
     * @param array{EventSources?:array{AmazonCodeGuruProfiler?:array{Status?:"ENABLED"|"DISABLED"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateEventSourcesConfigAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Action:"ADD"|"REMOVE", ResourceCollection:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateResourceCollection(array $args): \AWS\Result { }

    /**
     * @param array{Action:"ADD"|"REMOVE", ResourceCollection:array{CloudFormation?:array{StackNames?:array<string>}, Tags?:array<array{AppBoundaryKey:string, TagValues:array<string>}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateResourceCollectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceIntegration:array{OpsCenter?:array{OptInStatus?:"ENABLED"|"DISABLED"}, LogsAnomalyDetection?:array{OptInStatus?:"ENABLED"|"DISABLED"}, KMSServerSideEncryption?:array{KMSKeyId?:string, OptInStatus?:"ENABLED"|"DISABLED", Type?:"CUSTOMER_MANAGED_KEY"|"AWS_OWNED_KMS_KEY"}}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateServiceIntegration(array $args): \AWS\Result { }

    /**
     * @param array{ServiceIntegration:array{OpsCenter?:array{OptInStatus?:"ENABLED"|"DISABLED"}, LogsAnomalyDetection?:array{OptInStatus?:"ENABLED"|"DISABLED"}, KMSServerSideEncryption?:array{KMSKeyId?:string, OptInStatus?:"ENABLED"|"DISABLED", Type?:"CUSTOMER_MANAGED_KEY"|"AWS_OWNED_KMS_KEY"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateServiceIntegrationAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
