<?php
namespace AWS\ApplicationInsights;

class ApplicationInsightsClient
{
    /**
     * @param array{ResourceGroupName:string, ComponentName:string, WorkloadConfiguration:array{WorkloadName?:string, Tier?:"CUSTOM"|"DEFAULT"|"DOT_NET_CORE"|"DOT_NET_WORKER"|"DOT_NET_WEB_TIER"|"DOT_NET_WEB"|"SQL_SERVER"|"SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP"|"MYSQL"|"POSTGRESQL"|"JAVA_JMX"|"ORACLE"|"SAP_HANA_MULTI_NODE"|"SAP_HANA_SINGLE_NODE"|"SAP_HANA_HIGH_AVAILABILITY"|"SAP_ASE_SINGLE_NODE"|"SAP_ASE_HIGH_AVAILABILITY"|"SQL_SERVER_FAILOVER_CLUSTER_INSTANCE"|"SHAREPOINT"|"ACTIVE_DIRECTORY"|"SAP_NETWEAVER_STANDARD"|"SAP_NETWEAVER_DISTRIBUTED"|"SAP_NETWEAVER_HIGH_AVAILABILITY", Configuration?:string}} $args
     * @return \AWS\Result<array{WorkloadId?:string, WorkloadConfiguration?:array{WorkloadName?:string, Tier?:"CUSTOM"|"DEFAULT"|"DOT_NET_CORE"|"DOT_NET_WORKER"|"DOT_NET_WEB_TIER"|"DOT_NET_WEB"|"SQL_SERVER"|"SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP"|"MYSQL"|"POSTGRESQL"|"JAVA_JMX"|"ORACLE"|"SAP_HANA_MULTI_NODE"|"SAP_HANA_SINGLE_NODE"|"SAP_HANA_HIGH_AVAILABILITY"|"SAP_ASE_SINGLE_NODE"|"SAP_ASE_HIGH_AVAILABILITY"|"SQL_SERVER_FAILOVER_CLUSTER_INSTANCE"|"SHAREPOINT"|"ACTIVE_DIRECTORY"|"SAP_NETWEAVER_STANDARD"|"SAP_NETWEAVER_DISTRIBUTED"|"SAP_NETWEAVER_HIGH_AVAILABILITY", Configuration?:string}}>
     */
    public function addWorkload(array $args): \AWS\Result { }

    /**
     * @param array{ResourceGroupName:string, ComponentName:string, WorkloadConfiguration:array{WorkloadName?:string, Tier?:"CUSTOM"|"DEFAULT"|"DOT_NET_CORE"|"DOT_NET_WORKER"|"DOT_NET_WEB_TIER"|"DOT_NET_WEB"|"SQL_SERVER"|"SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP"|"MYSQL"|"POSTGRESQL"|"JAVA_JMX"|"ORACLE"|"SAP_HANA_MULTI_NODE"|"SAP_HANA_SINGLE_NODE"|"SAP_HANA_HIGH_AVAILABILITY"|"SAP_ASE_SINGLE_NODE"|"SAP_ASE_HIGH_AVAILABILITY"|"SQL_SERVER_FAILOVER_CLUSTER_INSTANCE"|"SHAREPOINT"|"ACTIVE_DIRECTORY"|"SAP_NETWEAVER_STANDARD"|"SAP_NETWEAVER_DISTRIBUTED"|"SAP_NETWEAVER_HIGH_AVAILABILITY", Configuration?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{WorkloadId?:string, WorkloadConfiguration?:array{WorkloadName?:string, Tier?:"CUSTOM"|"DEFAULT"|"DOT_NET_CORE"|"DOT_NET_WORKER"|"DOT_NET_WEB_TIER"|"DOT_NET_WEB"|"SQL_SERVER"|"SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP"|"MYSQL"|"POSTGRESQL"|"JAVA_JMX"|"ORACLE"|"SAP_HANA_MULTI_NODE"|"SAP_HANA_SINGLE_NODE"|"SAP_HANA_HIGH_AVAILABILITY"|"SAP_ASE_SINGLE_NODE"|"SAP_ASE_HIGH_AVAILABILITY"|"SQL_SERVER_FAILOVER_CLUSTER_INSTANCE"|"SHAREPOINT"|"ACTIVE_DIRECTORY"|"SAP_NETWEAVER_STANDARD"|"SAP_NETWEAVER_DISTRIBUTED"|"SAP_NETWEAVER_HIGH_AVAILABILITY", Configuration?:string}}>
     */
    public function addWorkloadAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceGroupName?:string, OpsCenterEnabled?:bool, CWEMonitorEnabled?:bool, OpsItemSNSTopicArn?:string, SNSNotificationArn?:string, Tags?:array<array{Key:string, Value:string}>, AutoConfigEnabled?:bool, AutoCreate?:bool, GroupingType?:"ACCOUNT_BASED", AttachMissingPermission?:bool} $args
     * @return \AWS\Result<array{ApplicationInfo?:array{AccountId?:string, ResourceGroupName?:string, LifeCycle?:string, OpsItemSNSTopicArn?:string, SNSNotificationArn?:string, OpsCenterEnabled?:bool, CWEMonitorEnabled?:bool, Remarks?:string, AutoConfigEnabled?:bool, DiscoveryType?:"RESOURCE_GROUP_BASED"|"ACCOUNT_BASED", AttachMissingPermission?:bool}}>
     */
    public function createApplication(array $args = []): \AWS\Result { }

    /**
     * @param array{ResourceGroupName?:string, OpsCenterEnabled?:bool, CWEMonitorEnabled?:bool, OpsItemSNSTopicArn?:string, SNSNotificationArn?:string, Tags?:array<array{Key:string, Value:string}>, AutoConfigEnabled?:bool, AutoCreate?:bool, GroupingType?:"ACCOUNT_BASED", AttachMissingPermission?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationInfo?:array{AccountId?:string, ResourceGroupName?:string, LifeCycle?:string, OpsItemSNSTopicArn?:string, SNSNotificationArn?:string, OpsCenterEnabled?:bool, CWEMonitorEnabled?:bool, Remarks?:string, AutoConfigEnabled?:bool, DiscoveryType?:"RESOURCE_GROUP_BASED"|"ACCOUNT_BASED", AttachMissingPermission?:bool}}>
     */
    public function createApplicationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceGroupName:string, ComponentName:string, ResourceList:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function createComponent(array $args): \AWS\Result { }

    /**
     * @param array{ResourceGroupName:string, ComponentName:string, ResourceList:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createComponentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceGroupName:string, PatternSetName:string, PatternName:string, Pattern:string, Rank:int} $args
     * @return \AWS\Result<array{LogPattern?:array{PatternSetName?:string, PatternName?:string, Pattern?:string, Rank?:int}, ResourceGroupName?:string}>
     */
    public function createLogPattern(array $args): \AWS\Result { }

    /**
     * @param array{ResourceGroupName:string, PatternSetName:string, PatternName:string, Pattern:string, Rank:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{LogPattern?:array{PatternSetName?:string, PatternName?:string, Pattern?:string, Rank?:int}, ResourceGroupName?:string}>
     */
    public function createLogPatternAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceGroupName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteApplication(array $args): \AWS\Result { }

    /**
     * @param array{ResourceGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceGroupName:string, ComponentName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteComponent(array $args): \AWS\Result { }

    /**
     * @param array{ResourceGroupName:string, ComponentName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteComponentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceGroupName:string, PatternSetName:string, PatternName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteLogPattern(array $args): \AWS\Result { }

    /**
     * @param array{ResourceGroupName:string, PatternSetName:string, PatternName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteLogPatternAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceGroupName:string, AccountId?:string} $args
     * @return \AWS\Result<array{ApplicationInfo?:array{AccountId?:string, ResourceGroupName?:string, LifeCycle?:string, OpsItemSNSTopicArn?:string, SNSNotificationArn?:string, OpsCenterEnabled?:bool, CWEMonitorEnabled?:bool, Remarks?:string, AutoConfigEnabled?:bool, DiscoveryType?:"RESOURCE_GROUP_BASED"|"ACCOUNT_BASED", AttachMissingPermission?:bool}}>
     */
    public function describeApplication(array $args): \AWS\Result { }

    /**
     * @param array{ResourceGroupName:string, AccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationInfo?:array{AccountId?:string, ResourceGroupName?:string, LifeCycle?:string, OpsItemSNSTopicArn?:string, SNSNotificationArn?:string, OpsCenterEnabled?:bool, CWEMonitorEnabled?:bool, Remarks?:string, AutoConfigEnabled?:bool, DiscoveryType?:"RESOURCE_GROUP_BASED"|"ACCOUNT_BASED", AttachMissingPermission?:bool}}>
     */
    public function describeApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceGroupName:string, ComponentName:string, AccountId?:string} $args
     * @return \AWS\Result<array{ApplicationComponent?:array{ComponentName?:string, ComponentRemarks?:string, ResourceType?:string, OsType?:"WINDOWS"|"LINUX", Tier?:"CUSTOM"|"DEFAULT"|"DOT_NET_CORE"|"DOT_NET_WORKER"|"DOT_NET_WEB_TIER"|"DOT_NET_WEB"|"SQL_SERVER"|"SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP"|"MYSQL"|"POSTGRESQL"|"JAVA_JMX"|"ORACLE"|"SAP_HANA_MULTI_NODE"|"SAP_HANA_SINGLE_NODE"|"SAP_HANA_HIGH_AVAILABILITY"|"SAP_ASE_SINGLE_NODE"|"SAP_ASE_HIGH_AVAILABILITY"|"SQL_SERVER_FAILOVER_CLUSTER_INSTANCE"|"SHAREPOINT"|"ACTIVE_DIRECTORY"|"SAP_NETWEAVER_STANDARD"|"SAP_NETWEAVER_DISTRIBUTED"|"SAP_NETWEAVER_HIGH_AVAILABILITY", Monitor?:bool, DetectedWorkload?:array<"CUSTOM"|"DEFAULT"|"DOT_NET_CORE"|"DOT_NET_WORKER"|"DOT_NET_WEB_TIER"|"DOT_NET_WEB"|"SQL_SERVER"|"SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP"|"MYSQL"|"POSTGRESQL"|"JAVA_JMX"|"ORACLE"|"SAP_HANA_MULTI_NODE"|"SAP_HANA_SINGLE_NODE"|"SAP_HANA_HIGH_AVAILABILITY"|"SAP_ASE_SINGLE_NODE"|"SAP_ASE_HIGH_AVAILABILITY"|"SQL_SERVER_FAILOVER_CLUSTER_INSTANCE"|"SHAREPOINT"|"ACTIVE_DIRECTORY"|"SAP_NETWEAVER_STANDARD"|"SAP_NETWEAVER_DISTRIBUTED"|"SAP_NETWEAVER_HIGH_AVAILABILITY", array<string, string>>}, ResourceList?:array<string>}>
     */
    public function describeComponent(array $args): \AWS\Result { }

    /**
     * @param array{ResourceGroupName:string, ComponentName:string, AccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationComponent?:array{ComponentName?:string, ComponentRemarks?:string, ResourceType?:string, OsType?:"WINDOWS"|"LINUX", Tier?:"CUSTOM"|"DEFAULT"|"DOT_NET_CORE"|"DOT_NET_WORKER"|"DOT_NET_WEB_TIER"|"DOT_NET_WEB"|"SQL_SERVER"|"SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP"|"MYSQL"|"POSTGRESQL"|"JAVA_JMX"|"ORACLE"|"SAP_HANA_MULTI_NODE"|"SAP_HANA_SINGLE_NODE"|"SAP_HANA_HIGH_AVAILABILITY"|"SAP_ASE_SINGLE_NODE"|"SAP_ASE_HIGH_AVAILABILITY"|"SQL_SERVER_FAILOVER_CLUSTER_INSTANCE"|"SHAREPOINT"|"ACTIVE_DIRECTORY"|"SAP_NETWEAVER_STANDARD"|"SAP_NETWEAVER_DISTRIBUTED"|"SAP_NETWEAVER_HIGH_AVAILABILITY", Monitor?:bool, DetectedWorkload?:array<"CUSTOM"|"DEFAULT"|"DOT_NET_CORE"|"DOT_NET_WORKER"|"DOT_NET_WEB_TIER"|"DOT_NET_WEB"|"SQL_SERVER"|"SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP"|"MYSQL"|"POSTGRESQL"|"JAVA_JMX"|"ORACLE"|"SAP_HANA_MULTI_NODE"|"SAP_HANA_SINGLE_NODE"|"SAP_HANA_HIGH_AVAILABILITY"|"SAP_ASE_SINGLE_NODE"|"SAP_ASE_HIGH_AVAILABILITY"|"SQL_SERVER_FAILOVER_CLUSTER_INSTANCE"|"SHAREPOINT"|"ACTIVE_DIRECTORY"|"SAP_NETWEAVER_STANDARD"|"SAP_NETWEAVER_DISTRIBUTED"|"SAP_NETWEAVER_HIGH_AVAILABILITY", array<string, string>>}, ResourceList?:array<string>}>
     */
    public function describeComponentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceGroupName:string, ComponentName:string, AccountId?:string} $args
     * @return \AWS\Result<array{Monitor?:bool, Tier?:"CUSTOM"|"DEFAULT"|"DOT_NET_CORE"|"DOT_NET_WORKER"|"DOT_NET_WEB_TIER"|"DOT_NET_WEB"|"SQL_SERVER"|"SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP"|"MYSQL"|"POSTGRESQL"|"JAVA_JMX"|"ORACLE"|"SAP_HANA_MULTI_NODE"|"SAP_HANA_SINGLE_NODE"|"SAP_HANA_HIGH_AVAILABILITY"|"SAP_ASE_SINGLE_NODE"|"SAP_ASE_HIGH_AVAILABILITY"|"SQL_SERVER_FAILOVER_CLUSTER_INSTANCE"|"SHAREPOINT"|"ACTIVE_DIRECTORY"|"SAP_NETWEAVER_STANDARD"|"SAP_NETWEAVER_DISTRIBUTED"|"SAP_NETWEAVER_HIGH_AVAILABILITY", ComponentConfiguration?:string}>
     */
    public function describeComponentConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ResourceGroupName:string, ComponentName:string, AccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Monitor?:bool, Tier?:"CUSTOM"|"DEFAULT"|"DOT_NET_CORE"|"DOT_NET_WORKER"|"DOT_NET_WEB_TIER"|"DOT_NET_WEB"|"SQL_SERVER"|"SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP"|"MYSQL"|"POSTGRESQL"|"JAVA_JMX"|"ORACLE"|"SAP_HANA_MULTI_NODE"|"SAP_HANA_SINGLE_NODE"|"SAP_HANA_HIGH_AVAILABILITY"|"SAP_ASE_SINGLE_NODE"|"SAP_ASE_HIGH_AVAILABILITY"|"SQL_SERVER_FAILOVER_CLUSTER_INSTANCE"|"SHAREPOINT"|"ACTIVE_DIRECTORY"|"SAP_NETWEAVER_STANDARD"|"SAP_NETWEAVER_DISTRIBUTED"|"SAP_NETWEAVER_HIGH_AVAILABILITY", ComponentConfiguration?:string}>
     */
    public function describeComponentConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceGroupName:string, ComponentName:string, Tier:"CUSTOM"|"DEFAULT"|"DOT_NET_CORE"|"DOT_NET_WORKER"|"DOT_NET_WEB_TIER"|"DOT_NET_WEB"|"SQL_SERVER"|"SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP"|"MYSQL"|"POSTGRESQL"|"JAVA_JMX"|"ORACLE"|"SAP_HANA_MULTI_NODE"|"SAP_HANA_SINGLE_NODE"|"SAP_HANA_HIGH_AVAILABILITY"|"SAP_ASE_SINGLE_NODE"|"SAP_ASE_HIGH_AVAILABILITY"|"SQL_SERVER_FAILOVER_CLUSTER_INSTANCE"|"SHAREPOINT"|"ACTIVE_DIRECTORY"|"SAP_NETWEAVER_STANDARD"|"SAP_NETWEAVER_DISTRIBUTED"|"SAP_NETWEAVER_HIGH_AVAILABILITY", WorkloadName?:string, RecommendationType?:"INFRA_ONLY"|"WORKLOAD_ONLY"|"ALL"} $args
     * @return \AWS\Result<array{ComponentConfiguration?:string}>
     */
    public function describeComponentConfigurationRecommendation(array $args): \AWS\Result { }

    /**
     * @param array{ResourceGroupName:string, ComponentName:string, Tier:"CUSTOM"|"DEFAULT"|"DOT_NET_CORE"|"DOT_NET_WORKER"|"DOT_NET_WEB_TIER"|"DOT_NET_WEB"|"SQL_SERVER"|"SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP"|"MYSQL"|"POSTGRESQL"|"JAVA_JMX"|"ORACLE"|"SAP_HANA_MULTI_NODE"|"SAP_HANA_SINGLE_NODE"|"SAP_HANA_HIGH_AVAILABILITY"|"SAP_ASE_SINGLE_NODE"|"SAP_ASE_HIGH_AVAILABILITY"|"SQL_SERVER_FAILOVER_CLUSTER_INSTANCE"|"SHAREPOINT"|"ACTIVE_DIRECTORY"|"SAP_NETWEAVER_STANDARD"|"SAP_NETWEAVER_DISTRIBUTED"|"SAP_NETWEAVER_HIGH_AVAILABILITY", WorkloadName?:string, RecommendationType?:"INFRA_ONLY"|"WORKLOAD_ONLY"|"ALL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ComponentConfiguration?:string}>
     */
    public function describeComponentConfigurationRecommendationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceGroupName:string, PatternSetName:string, PatternName:string, AccountId?:string} $args
     * @return \AWS\Result<array{ResourceGroupName?:string, AccountId?:string, LogPattern?:array{PatternSetName?:string, PatternName?:string, Pattern?:string, Rank?:int}}>
     */
    public function describeLogPattern(array $args): \AWS\Result { }

    /**
     * @param array{ResourceGroupName:string, PatternSetName:string, PatternName:string, AccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceGroupName?:string, AccountId?:string, LogPattern?:array{PatternSetName?:string, PatternName?:string, Pattern?:string, Rank?:int}}>
     */
    public function describeLogPatternAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ObservationId:string, AccountId?:string} $args
     * @return \AWS\Result<array{Observation?:array{Id?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, SourceType?:string, SourceARN?:string, LogGroup?:string, LineTime?:int|string|\DateTimeInterface, LogText?:string, LogFilter?:"ERROR"|"WARN"|"INFO", MetricNamespace?:string, MetricName?:string, Unit?:string, Value?:float, CloudWatchEventId?:string, CloudWatchEventSource?:"EC2"|"CODE_DEPLOY"|"HEALTH"|"RDS", CloudWatchEventDetailType?:string, HealthEventArn?:string, HealthService?:string, HealthEventTypeCode?:string, HealthEventTypeCategory?:string, HealthEventDescription?:string, CodeDeployDeploymentId?:string, CodeDeployDeploymentGroup?:string, CodeDeployState?:string, CodeDeployApplication?:string, CodeDeployInstanceGroupId?:string, Ec2State?:string, RdsEventCategories?:string, RdsEventMessage?:string, S3EventName?:string, StatesExecutionArn?:string, StatesArn?:string, StatesStatus?:string, StatesInput?:string, EbsEvent?:string, EbsResult?:string, EbsCause?:string, EbsRequestId?:string, XRayFaultPercent?:int, XRayThrottlePercent?:int, XRayErrorPercent?:int, XRayRequestCount?:int, XRayRequestAverageLatency?:int, XRayNodeName?:string, XRayNodeType?:string}}>
     */
    public function describeObservation(array $args): \AWS\Result { }

    /**
     * @param array{ObservationId:string, AccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Observation?:array{Id?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, SourceType?:string, SourceARN?:string, LogGroup?:string, LineTime?:int|string|\DateTimeInterface, LogText?:string, LogFilter?:"ERROR"|"WARN"|"INFO", MetricNamespace?:string, MetricName?:string, Unit?:string, Value?:float, CloudWatchEventId?:string, CloudWatchEventSource?:"EC2"|"CODE_DEPLOY"|"HEALTH"|"RDS", CloudWatchEventDetailType?:string, HealthEventArn?:string, HealthService?:string, HealthEventTypeCode?:string, HealthEventTypeCategory?:string, HealthEventDescription?:string, CodeDeployDeploymentId?:string, CodeDeployDeploymentGroup?:string, CodeDeployState?:string, CodeDeployApplication?:string, CodeDeployInstanceGroupId?:string, Ec2State?:string, RdsEventCategories?:string, RdsEventMessage?:string, S3EventName?:string, StatesExecutionArn?:string, StatesArn?:string, StatesStatus?:string, StatesInput?:string, EbsEvent?:string, EbsResult?:string, EbsCause?:string, EbsRequestId?:string, XRayFaultPercent?:int, XRayThrottlePercent?:int, XRayErrorPercent?:int, XRayRequestCount?:int, XRayRequestAverageLatency?:int, XRayNodeName?:string, XRayNodeType?:string}}>
     */
    public function describeObservationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProblemId:string, AccountId?:string} $args
     * @return \AWS\Result<array{Problem?:array{Id?:string, Title?:string, ShortName?:string, Insights?:string, Status?:"IGNORE"|"RESOLVED"|"PENDING"|"RECURRING"|"RECOVERING", AffectedResource?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, SeverityLevel?:"Informative"|"Low"|"Medium"|"High", AccountId?:string, ResourceGroupName?:string, Feedback?:array<"INSIGHTS_FEEDBACK", "NOT_SPECIFIED"|"USEFUL"|"NOT_USEFUL">, RecurringCount?:int, LastRecurrenceTime?:int|string|\DateTimeInterface, Visibility?:"IGNORED"|"VISIBLE", ResolutionMethod?:"MANUAL"|"AUTOMATIC"|"UNRESOLVED"}, SNSNotificationArn?:string}>
     */
    public function describeProblem(array $args): \AWS\Result { }

    /**
     * @param array{ProblemId:string, AccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Problem?:array{Id?:string, Title?:string, ShortName?:string, Insights?:string, Status?:"IGNORE"|"RESOLVED"|"PENDING"|"RECURRING"|"RECOVERING", AffectedResource?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, SeverityLevel?:"Informative"|"Low"|"Medium"|"High", AccountId?:string, ResourceGroupName?:string, Feedback?:array<"INSIGHTS_FEEDBACK", "NOT_SPECIFIED"|"USEFUL"|"NOT_USEFUL">, RecurringCount?:int, LastRecurrenceTime?:int|string|\DateTimeInterface, Visibility?:"IGNORED"|"VISIBLE", ResolutionMethod?:"MANUAL"|"AUTOMATIC"|"UNRESOLVED"}, SNSNotificationArn?:string}>
     */
    public function describeProblemAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProblemId:string, AccountId?:string} $args
     * @return \AWS\Result<array{RelatedObservations?:array{ObservationList?:array<array{Id?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, SourceType?:string, SourceARN?:string, LogGroup?:string, LineTime?:int|string|\DateTimeInterface, LogText?:string, LogFilter?:"ERROR"|"WARN"|"INFO", MetricNamespace?:string, MetricName?:string, Unit?:string, Value?:float, CloudWatchEventId?:string, CloudWatchEventSource?:"EC2"|"CODE_DEPLOY"|"HEALTH"|"RDS", CloudWatchEventDetailType?:string, HealthEventArn?:string, HealthService?:string, HealthEventTypeCode?:string, HealthEventTypeCategory?:string, HealthEventDescription?:string, CodeDeployDeploymentId?:string, CodeDeployDeploymentGroup?:string, CodeDeployState?:string, CodeDeployApplication?:string, CodeDeployInstanceGroupId?:string, Ec2State?:string, RdsEventCategories?:string, RdsEventMessage?:string, S3EventName?:string, StatesExecutionArn?:string, StatesArn?:string, StatesStatus?:string, StatesInput?:string, EbsEvent?:string, EbsResult?:string, EbsCause?:string, EbsRequestId?:string, XRayFaultPercent?:int, XRayThrottlePercent?:int, XRayErrorPercent?:int, XRayRequestCount?:int, XRayRequestAverageLatency?:int, XRayNodeName?:string, XRayNodeType?:string}>}}>
     */
    public function describeProblemObservations(array $args): \AWS\Result { }

    /**
     * @param array{ProblemId:string, AccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RelatedObservations?:array{ObservationList?:array<array{Id?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, SourceType?:string, SourceARN?:string, LogGroup?:string, LineTime?:int|string|\DateTimeInterface, LogText?:string, LogFilter?:"ERROR"|"WARN"|"INFO", MetricNamespace?:string, MetricName?:string, Unit?:string, Value?:float, CloudWatchEventId?:string, CloudWatchEventSource?:"EC2"|"CODE_DEPLOY"|"HEALTH"|"RDS", CloudWatchEventDetailType?:string, HealthEventArn?:string, HealthService?:string, HealthEventTypeCode?:string, HealthEventTypeCategory?:string, HealthEventDescription?:string, CodeDeployDeploymentId?:string, CodeDeployDeploymentGroup?:string, CodeDeployState?:string, CodeDeployApplication?:string, CodeDeployInstanceGroupId?:string, Ec2State?:string, RdsEventCategories?:string, RdsEventMessage?:string, S3EventName?:string, StatesExecutionArn?:string, StatesArn?:string, StatesStatus?:string, StatesInput?:string, EbsEvent?:string, EbsResult?:string, EbsCause?:string, EbsRequestId?:string, XRayFaultPercent?:int, XRayThrottlePercent?:int, XRayErrorPercent?:int, XRayRequestCount?:int, XRayRequestAverageLatency?:int, XRayNodeName?:string, XRayNodeType?:string}>}}>
     */
    public function describeProblemObservationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceGroupName:string, ComponentName:string, WorkloadId:string, AccountId?:string} $args
     * @return \AWS\Result<array{WorkloadId?:string, WorkloadRemarks?:string, WorkloadConfiguration?:array{WorkloadName?:string, Tier?:"CUSTOM"|"DEFAULT"|"DOT_NET_CORE"|"DOT_NET_WORKER"|"DOT_NET_WEB_TIER"|"DOT_NET_WEB"|"SQL_SERVER"|"SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP"|"MYSQL"|"POSTGRESQL"|"JAVA_JMX"|"ORACLE"|"SAP_HANA_MULTI_NODE"|"SAP_HANA_SINGLE_NODE"|"SAP_HANA_HIGH_AVAILABILITY"|"SAP_ASE_SINGLE_NODE"|"SAP_ASE_HIGH_AVAILABILITY"|"SQL_SERVER_FAILOVER_CLUSTER_INSTANCE"|"SHAREPOINT"|"ACTIVE_DIRECTORY"|"SAP_NETWEAVER_STANDARD"|"SAP_NETWEAVER_DISTRIBUTED"|"SAP_NETWEAVER_HIGH_AVAILABILITY", Configuration?:string}}>
     */
    public function describeWorkload(array $args): \AWS\Result { }

    /**
     * @param array{ResourceGroupName:string, ComponentName:string, WorkloadId:string, AccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WorkloadId?:string, WorkloadRemarks?:string, WorkloadConfiguration?:array{WorkloadName?:string, Tier?:"CUSTOM"|"DEFAULT"|"DOT_NET_CORE"|"DOT_NET_WORKER"|"DOT_NET_WEB_TIER"|"DOT_NET_WEB"|"SQL_SERVER"|"SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP"|"MYSQL"|"POSTGRESQL"|"JAVA_JMX"|"ORACLE"|"SAP_HANA_MULTI_NODE"|"SAP_HANA_SINGLE_NODE"|"SAP_HANA_HIGH_AVAILABILITY"|"SAP_ASE_SINGLE_NODE"|"SAP_ASE_HIGH_AVAILABILITY"|"SQL_SERVER_FAILOVER_CLUSTER_INSTANCE"|"SHAREPOINT"|"ACTIVE_DIRECTORY"|"SAP_NETWEAVER_STANDARD"|"SAP_NETWEAVER_DISTRIBUTED"|"SAP_NETWEAVER_HIGH_AVAILABILITY", Configuration?:string}}>
     */
    public function describeWorkloadAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, AccountId?:string} $args
     * @return \AWS\Result<array{ApplicationInfoList?:array<array{AccountId?:string, ResourceGroupName?:string, LifeCycle?:string, OpsItemSNSTopicArn?:string, SNSNotificationArn?:string, OpsCenterEnabled?:bool, CWEMonitorEnabled?:bool, Remarks?:string, AutoConfigEnabled?:bool, DiscoveryType?:"RESOURCE_GROUP_BASED"|"ACCOUNT_BASED", AttachMissingPermission?:bool}>, NextToken?:string}>
     */
    public function listApplications(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, AccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationInfoList?:array<array{AccountId?:string, ResourceGroupName?:string, LifeCycle?:string, OpsItemSNSTopicArn?:string, SNSNotificationArn?:string, OpsCenterEnabled?:bool, CWEMonitorEnabled?:bool, Remarks?:string, AutoConfigEnabled?:bool, DiscoveryType?:"RESOURCE_GROUP_BASED"|"ACCOUNT_BASED", AttachMissingPermission?:bool}>, NextToken?:string}>
     */
    public function listApplicationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceGroupName:string, MaxResults?:int, NextToken?:string, AccountId?:string} $args
     * @return \AWS\Result<array{ApplicationComponentList?:array<array{ComponentName?:string, ComponentRemarks?:string, ResourceType?:string, OsType?:"WINDOWS"|"LINUX", Tier?:"CUSTOM"|"DEFAULT"|"DOT_NET_CORE"|"DOT_NET_WORKER"|"DOT_NET_WEB_TIER"|"DOT_NET_WEB"|"SQL_SERVER"|"SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP"|"MYSQL"|"POSTGRESQL"|"JAVA_JMX"|"ORACLE"|"SAP_HANA_MULTI_NODE"|"SAP_HANA_SINGLE_NODE"|"SAP_HANA_HIGH_AVAILABILITY"|"SAP_ASE_SINGLE_NODE"|"SAP_ASE_HIGH_AVAILABILITY"|"SQL_SERVER_FAILOVER_CLUSTER_INSTANCE"|"SHAREPOINT"|"ACTIVE_DIRECTORY"|"SAP_NETWEAVER_STANDARD"|"SAP_NETWEAVER_DISTRIBUTED"|"SAP_NETWEAVER_HIGH_AVAILABILITY", Monitor?:bool, DetectedWorkload?:array<"CUSTOM"|"DEFAULT"|"DOT_NET_CORE"|"DOT_NET_WORKER"|"DOT_NET_WEB_TIER"|"DOT_NET_WEB"|"SQL_SERVER"|"SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP"|"MYSQL"|"POSTGRESQL"|"JAVA_JMX"|"ORACLE"|"SAP_HANA_MULTI_NODE"|"SAP_HANA_SINGLE_NODE"|"SAP_HANA_HIGH_AVAILABILITY"|"SAP_ASE_SINGLE_NODE"|"SAP_ASE_HIGH_AVAILABILITY"|"SQL_SERVER_FAILOVER_CLUSTER_INSTANCE"|"SHAREPOINT"|"ACTIVE_DIRECTORY"|"SAP_NETWEAVER_STANDARD"|"SAP_NETWEAVER_DISTRIBUTED"|"SAP_NETWEAVER_HIGH_AVAILABILITY", array<string, string>>}>, NextToken?:string}>
     */
    public function listComponents(array $args): \AWS\Result { }

    /**
     * @param array{ResourceGroupName:string, MaxResults?:int, NextToken?:string, AccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationComponentList?:array<array{ComponentName?:string, ComponentRemarks?:string, ResourceType?:string, OsType?:"WINDOWS"|"LINUX", Tier?:"CUSTOM"|"DEFAULT"|"DOT_NET_CORE"|"DOT_NET_WORKER"|"DOT_NET_WEB_TIER"|"DOT_NET_WEB"|"SQL_SERVER"|"SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP"|"MYSQL"|"POSTGRESQL"|"JAVA_JMX"|"ORACLE"|"SAP_HANA_MULTI_NODE"|"SAP_HANA_SINGLE_NODE"|"SAP_HANA_HIGH_AVAILABILITY"|"SAP_ASE_SINGLE_NODE"|"SAP_ASE_HIGH_AVAILABILITY"|"SQL_SERVER_FAILOVER_CLUSTER_INSTANCE"|"SHAREPOINT"|"ACTIVE_DIRECTORY"|"SAP_NETWEAVER_STANDARD"|"SAP_NETWEAVER_DISTRIBUTED"|"SAP_NETWEAVER_HIGH_AVAILABILITY", Monitor?:bool, DetectedWorkload?:array<"CUSTOM"|"DEFAULT"|"DOT_NET_CORE"|"DOT_NET_WORKER"|"DOT_NET_WEB_TIER"|"DOT_NET_WEB"|"SQL_SERVER"|"SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP"|"MYSQL"|"POSTGRESQL"|"JAVA_JMX"|"ORACLE"|"SAP_HANA_MULTI_NODE"|"SAP_HANA_SINGLE_NODE"|"SAP_HANA_HIGH_AVAILABILITY"|"SAP_ASE_SINGLE_NODE"|"SAP_ASE_HIGH_AVAILABILITY"|"SQL_SERVER_FAILOVER_CLUSTER_INSTANCE"|"SHAREPOINT"|"ACTIVE_DIRECTORY"|"SAP_NETWEAVER_STANDARD"|"SAP_NETWEAVER_DISTRIBUTED"|"SAP_NETWEAVER_HIGH_AVAILABILITY", array<string, string>>}>, NextToken?:string}>
     */
    public function listComponentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceGroupName?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, EventStatus?:"INFO"|"WARN"|"ERROR", MaxResults?:int, NextToken?:string, AccountId?:string} $args
     * @return \AWS\Result<array{EventList?:array<array{ResourceGroupName?:string, AccountId?:string, MonitoredResourceARN?:string, EventStatus?:"INFO"|"WARN"|"ERROR", EventResourceType?:"CLOUDWATCH_ALARM"|"CLOUDWATCH_LOG"|"CLOUDFORMATION"|"SSM_ASSOCIATION", EventTime?:int|string|\DateTimeInterface, EventDetail?:string, EventResourceName?:string}>, NextToken?:string}>
     */
    public function listConfigurationHistory(array $args = []): \AWS\Result { }

    /**
     * @param array{ResourceGroupName?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, EventStatus?:"INFO"|"WARN"|"ERROR", MaxResults?:int, NextToken?:string, AccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventList?:array<array{ResourceGroupName?:string, AccountId?:string, MonitoredResourceARN?:string, EventStatus?:"INFO"|"WARN"|"ERROR", EventResourceType?:"CLOUDWATCH_ALARM"|"CLOUDWATCH_LOG"|"CLOUDFORMATION"|"SSM_ASSOCIATION", EventTime?:int|string|\DateTimeInterface, EventDetail?:string, EventResourceName?:string}>, NextToken?:string}>
     */
    public function listConfigurationHistoryAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceGroupName:string, MaxResults?:int, NextToken?:string, AccountId?:string} $args
     * @return \AWS\Result<array{ResourceGroupName?:string, AccountId?:string, LogPatternSets?:array<string>, NextToken?:string}>
     */
    public function listLogPatternSets(array $args): \AWS\Result { }

    /**
     * @param array{ResourceGroupName:string, MaxResults?:int, NextToken?:string, AccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceGroupName?:string, AccountId?:string, LogPatternSets?:array<string>, NextToken?:string}>
     */
    public function listLogPatternSetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceGroupName:string, PatternSetName?:string, MaxResults?:int, NextToken?:string, AccountId?:string} $args
     * @return \AWS\Result<array{ResourceGroupName?:string, AccountId?:string, LogPatterns?:array<array{PatternSetName?:string, PatternName?:string, Pattern?:string, Rank?:int}>, NextToken?:string}>
     */
    public function listLogPatterns(array $args): \AWS\Result { }

    /**
     * @param array{ResourceGroupName:string, PatternSetName?:string, MaxResults?:int, NextToken?:string, AccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceGroupName?:string, AccountId?:string, LogPatterns?:array<array{PatternSetName?:string, PatternName?:string, Pattern?:string, Rank?:int}>, NextToken?:string}>
     */
    public function listLogPatternsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId?:string, ResourceGroupName?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, MaxResults?:int, NextToken?:string, ComponentName?:string, Visibility?:"IGNORED"|"VISIBLE"} $args
     * @return \AWS\Result<array{ProblemList?:array<array{Id?:string, Title?:string, ShortName?:string, Insights?:string, Status?:"IGNORE"|"RESOLVED"|"PENDING"|"RECURRING"|"RECOVERING", AffectedResource?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, SeverityLevel?:"Informative"|"Low"|"Medium"|"High", AccountId?:string, ResourceGroupName?:string, Feedback?:array<"INSIGHTS_FEEDBACK", "NOT_SPECIFIED"|"USEFUL"|"NOT_USEFUL">, RecurringCount?:int, LastRecurrenceTime?:int|string|\DateTimeInterface, Visibility?:"IGNORED"|"VISIBLE", ResolutionMethod?:"MANUAL"|"AUTOMATIC"|"UNRESOLVED"}>, NextToken?:string, ResourceGroupName?:string, AccountId?:string}>
     */
    public function listProblems(array $args = []): \AWS\Result { }

    /**
     * @param array{AccountId?:string, ResourceGroupName?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, MaxResults?:int, NextToken?:string, ComponentName?:string, Visibility?:"IGNORED"|"VISIBLE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProblemList?:array<array{Id?:string, Title?:string, ShortName?:string, Insights?:string, Status?:"IGNORE"|"RESOLVED"|"PENDING"|"RECURRING"|"RECOVERING", AffectedResource?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, SeverityLevel?:"Informative"|"Low"|"Medium"|"High", AccountId?:string, ResourceGroupName?:string, Feedback?:array<"INSIGHTS_FEEDBACK", "NOT_SPECIFIED"|"USEFUL"|"NOT_USEFUL">, RecurringCount?:int, LastRecurrenceTime?:int|string|\DateTimeInterface, Visibility?:"IGNORED"|"VISIBLE", ResolutionMethod?:"MANUAL"|"AUTOMATIC"|"UNRESOLVED"}>, NextToken?:string, ResourceGroupName?:string, AccountId?:string}>
     */
    public function listProblemsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceGroupName:string, ComponentName:string, MaxResults?:int, NextToken?:string, AccountId?:string} $args
     * @return \AWS\Result<array{WorkloadList?:array<array{WorkloadId?:string, ComponentName?:string, WorkloadName?:string, Tier?:"CUSTOM"|"DEFAULT"|"DOT_NET_CORE"|"DOT_NET_WORKER"|"DOT_NET_WEB_TIER"|"DOT_NET_WEB"|"SQL_SERVER"|"SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP"|"MYSQL"|"POSTGRESQL"|"JAVA_JMX"|"ORACLE"|"SAP_HANA_MULTI_NODE"|"SAP_HANA_SINGLE_NODE"|"SAP_HANA_HIGH_AVAILABILITY"|"SAP_ASE_SINGLE_NODE"|"SAP_ASE_HIGH_AVAILABILITY"|"SQL_SERVER_FAILOVER_CLUSTER_INSTANCE"|"SHAREPOINT"|"ACTIVE_DIRECTORY"|"SAP_NETWEAVER_STANDARD"|"SAP_NETWEAVER_DISTRIBUTED"|"SAP_NETWEAVER_HIGH_AVAILABILITY", WorkloadRemarks?:string, MissingWorkloadConfig?:bool}>, NextToken?:string}>
     */
    public function listWorkloads(array $args): \AWS\Result { }

    /**
     * @param array{ResourceGroupName:string, ComponentName:string, MaxResults?:int, NextToken?:string, AccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WorkloadList?:array<array{WorkloadId?:string, ComponentName?:string, WorkloadName?:string, Tier?:"CUSTOM"|"DEFAULT"|"DOT_NET_CORE"|"DOT_NET_WORKER"|"DOT_NET_WEB_TIER"|"DOT_NET_WEB"|"SQL_SERVER"|"SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP"|"MYSQL"|"POSTGRESQL"|"JAVA_JMX"|"ORACLE"|"SAP_HANA_MULTI_NODE"|"SAP_HANA_SINGLE_NODE"|"SAP_HANA_HIGH_AVAILABILITY"|"SAP_ASE_SINGLE_NODE"|"SAP_ASE_HIGH_AVAILABILITY"|"SQL_SERVER_FAILOVER_CLUSTER_INSTANCE"|"SHAREPOINT"|"ACTIVE_DIRECTORY"|"SAP_NETWEAVER_STANDARD"|"SAP_NETWEAVER_DISTRIBUTED"|"SAP_NETWEAVER_HIGH_AVAILABILITY", WorkloadRemarks?:string, MissingWorkloadConfig?:bool}>, NextToken?:string}>
     */
    public function listWorkloadsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceGroupName:string, ComponentName:string, WorkloadId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function removeWorkload(array $args): \AWS\Result { }

    /**
     * @param array{ResourceGroupName:string, ComponentName:string, WorkloadId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function removeWorkloadAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{ResourceGroupName:string, OpsCenterEnabled?:bool, CWEMonitorEnabled?:bool, OpsItemSNSTopicArn?:string, SNSNotificationArn?:string, RemoveSNSTopic?:bool, AutoConfigEnabled?:bool, AttachMissingPermission?:bool} $args
     * @return \AWS\Result<array{ApplicationInfo?:array{AccountId?:string, ResourceGroupName?:string, LifeCycle?:string, OpsItemSNSTopicArn?:string, SNSNotificationArn?:string, OpsCenterEnabled?:bool, CWEMonitorEnabled?:bool, Remarks?:string, AutoConfigEnabled?:bool, DiscoveryType?:"RESOURCE_GROUP_BASED"|"ACCOUNT_BASED", AttachMissingPermission?:bool}}>
     */
    public function updateApplication(array $args): \AWS\Result { }

    /**
     * @param array{ResourceGroupName:string, OpsCenterEnabled?:bool, CWEMonitorEnabled?:bool, OpsItemSNSTopicArn?:string, SNSNotificationArn?:string, RemoveSNSTopic?:bool, AutoConfigEnabled?:bool, AttachMissingPermission?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationInfo?:array{AccountId?:string, ResourceGroupName?:string, LifeCycle?:string, OpsItemSNSTopicArn?:string, SNSNotificationArn?:string, OpsCenterEnabled?:bool, CWEMonitorEnabled?:bool, Remarks?:string, AutoConfigEnabled?:bool, DiscoveryType?:"RESOURCE_GROUP_BASED"|"ACCOUNT_BASED", AttachMissingPermission?:bool}}>
     */
    public function updateApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceGroupName:string, ComponentName:string, NewComponentName?:string, ResourceList?:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateComponent(array $args): \AWS\Result { }

    /**
     * @param array{ResourceGroupName:string, ComponentName:string, NewComponentName?:string, ResourceList?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateComponentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceGroupName:string, ComponentName:string, Monitor?:bool, Tier?:"CUSTOM"|"DEFAULT"|"DOT_NET_CORE"|"DOT_NET_WORKER"|"DOT_NET_WEB_TIER"|"DOT_NET_WEB"|"SQL_SERVER"|"SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP"|"MYSQL"|"POSTGRESQL"|"JAVA_JMX"|"ORACLE"|"SAP_HANA_MULTI_NODE"|"SAP_HANA_SINGLE_NODE"|"SAP_HANA_HIGH_AVAILABILITY"|"SAP_ASE_SINGLE_NODE"|"SAP_ASE_HIGH_AVAILABILITY"|"SQL_SERVER_FAILOVER_CLUSTER_INSTANCE"|"SHAREPOINT"|"ACTIVE_DIRECTORY"|"SAP_NETWEAVER_STANDARD"|"SAP_NETWEAVER_DISTRIBUTED"|"SAP_NETWEAVER_HIGH_AVAILABILITY", ComponentConfiguration?:string, AutoConfigEnabled?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function updateComponentConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ResourceGroupName:string, ComponentName:string, Monitor?:bool, Tier?:"CUSTOM"|"DEFAULT"|"DOT_NET_CORE"|"DOT_NET_WORKER"|"DOT_NET_WEB_TIER"|"DOT_NET_WEB"|"SQL_SERVER"|"SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP"|"MYSQL"|"POSTGRESQL"|"JAVA_JMX"|"ORACLE"|"SAP_HANA_MULTI_NODE"|"SAP_HANA_SINGLE_NODE"|"SAP_HANA_HIGH_AVAILABILITY"|"SAP_ASE_SINGLE_NODE"|"SAP_ASE_HIGH_AVAILABILITY"|"SQL_SERVER_FAILOVER_CLUSTER_INSTANCE"|"SHAREPOINT"|"ACTIVE_DIRECTORY"|"SAP_NETWEAVER_STANDARD"|"SAP_NETWEAVER_DISTRIBUTED"|"SAP_NETWEAVER_HIGH_AVAILABILITY", ComponentConfiguration?:string, AutoConfigEnabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateComponentConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceGroupName:string, PatternSetName:string, PatternName:string, Pattern?:string, Rank?:int} $args
     * @return \AWS\Result<array{ResourceGroupName?:string, LogPattern?:array{PatternSetName?:string, PatternName?:string, Pattern?:string, Rank?:int}}>
     */
    public function updateLogPattern(array $args): \AWS\Result { }

    /**
     * @param array{ResourceGroupName:string, PatternSetName:string, PatternName:string, Pattern?:string, Rank?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceGroupName?:string, LogPattern?:array{PatternSetName?:string, PatternName?:string, Pattern?:string, Rank?:int}}>
     */
    public function updateLogPatternAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProblemId:string, UpdateStatus?:"RESOLVED", Visibility?:"IGNORED"|"VISIBLE"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateProblem(array $args): \AWS\Result { }

    /**
     * @param array{ProblemId:string, UpdateStatus?:"RESOLVED", Visibility?:"IGNORED"|"VISIBLE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateProblemAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceGroupName:string, ComponentName:string, WorkloadId?:string, WorkloadConfiguration:array{WorkloadName?:string, Tier?:"CUSTOM"|"DEFAULT"|"DOT_NET_CORE"|"DOT_NET_WORKER"|"DOT_NET_WEB_TIER"|"DOT_NET_WEB"|"SQL_SERVER"|"SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP"|"MYSQL"|"POSTGRESQL"|"JAVA_JMX"|"ORACLE"|"SAP_HANA_MULTI_NODE"|"SAP_HANA_SINGLE_NODE"|"SAP_HANA_HIGH_AVAILABILITY"|"SAP_ASE_SINGLE_NODE"|"SAP_ASE_HIGH_AVAILABILITY"|"SQL_SERVER_FAILOVER_CLUSTER_INSTANCE"|"SHAREPOINT"|"ACTIVE_DIRECTORY"|"SAP_NETWEAVER_STANDARD"|"SAP_NETWEAVER_DISTRIBUTED"|"SAP_NETWEAVER_HIGH_AVAILABILITY", Configuration?:string}} $args
     * @return \AWS\Result<array{WorkloadId?:string, WorkloadConfiguration?:array{WorkloadName?:string, Tier?:"CUSTOM"|"DEFAULT"|"DOT_NET_CORE"|"DOT_NET_WORKER"|"DOT_NET_WEB_TIER"|"DOT_NET_WEB"|"SQL_SERVER"|"SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP"|"MYSQL"|"POSTGRESQL"|"JAVA_JMX"|"ORACLE"|"SAP_HANA_MULTI_NODE"|"SAP_HANA_SINGLE_NODE"|"SAP_HANA_HIGH_AVAILABILITY"|"SAP_ASE_SINGLE_NODE"|"SAP_ASE_HIGH_AVAILABILITY"|"SQL_SERVER_FAILOVER_CLUSTER_INSTANCE"|"SHAREPOINT"|"ACTIVE_DIRECTORY"|"SAP_NETWEAVER_STANDARD"|"SAP_NETWEAVER_DISTRIBUTED"|"SAP_NETWEAVER_HIGH_AVAILABILITY", Configuration?:string}}>
     */
    public function updateWorkload(array $args): \AWS\Result { }

    /**
     * @param array{ResourceGroupName:string, ComponentName:string, WorkloadId?:string, WorkloadConfiguration:array{WorkloadName?:string, Tier?:"CUSTOM"|"DEFAULT"|"DOT_NET_CORE"|"DOT_NET_WORKER"|"DOT_NET_WEB_TIER"|"DOT_NET_WEB"|"SQL_SERVER"|"SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP"|"MYSQL"|"POSTGRESQL"|"JAVA_JMX"|"ORACLE"|"SAP_HANA_MULTI_NODE"|"SAP_HANA_SINGLE_NODE"|"SAP_HANA_HIGH_AVAILABILITY"|"SAP_ASE_SINGLE_NODE"|"SAP_ASE_HIGH_AVAILABILITY"|"SQL_SERVER_FAILOVER_CLUSTER_INSTANCE"|"SHAREPOINT"|"ACTIVE_DIRECTORY"|"SAP_NETWEAVER_STANDARD"|"SAP_NETWEAVER_DISTRIBUTED"|"SAP_NETWEAVER_HIGH_AVAILABILITY", Configuration?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{WorkloadId?:string, WorkloadConfiguration?:array{WorkloadName?:string, Tier?:"CUSTOM"|"DEFAULT"|"DOT_NET_CORE"|"DOT_NET_WORKER"|"DOT_NET_WEB_TIER"|"DOT_NET_WEB"|"SQL_SERVER"|"SQL_SERVER_ALWAYSON_AVAILABILITY_GROUP"|"MYSQL"|"POSTGRESQL"|"JAVA_JMX"|"ORACLE"|"SAP_HANA_MULTI_NODE"|"SAP_HANA_SINGLE_NODE"|"SAP_HANA_HIGH_AVAILABILITY"|"SAP_ASE_SINGLE_NODE"|"SAP_ASE_HIGH_AVAILABILITY"|"SQL_SERVER_FAILOVER_CLUSTER_INSTANCE"|"SHAREPOINT"|"ACTIVE_DIRECTORY"|"SAP_NETWEAVER_STANDARD"|"SAP_NETWEAVER_DISTRIBUTED"|"SAP_NETWEAVER_HIGH_AVAILABILITY", Configuration?:string}}>
     */
    public function updateWorkloadAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
