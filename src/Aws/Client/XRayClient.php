<?php
namespace AWS\XRay;

class XRayClient
{
    /**
     * @param array{TraceIds:array<string>, NextToken?:string} $args
     * @return \AWS\Result<array{Traces?:array<array{Id?:string, Duration?:float, LimitExceeded?:bool, Segments?:array<array{Id?:string, Document?:string}>}>, UnprocessedTraceIds?:array<string>, NextToken?:string}>
     */
    public function batchGetTraces(array $args): \AWS\Result { }

    /**
     * @param array{TraceIds:array<string>, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Traces?:array<array{Id?:string, Duration?:float, LimitExceeded?:bool, Segments?:array<array{Id?:string, Document?:string}>}>, UnprocessedTraceIds?:array<string>, NextToken?:string}>
     */
    public function batchGetTracesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RetrievalToken:string} $args
     * @return \AWS\Result<array{}>
     */
    public function cancelTraceRetrieval(array $args): \AWS\Result { }

    /**
     * @param array{RetrievalToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function cancelTraceRetrievalAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupName:string, FilterExpression?:string, InsightsConfiguration?:array{InsightsEnabled?:bool, NotificationsEnabled?:bool}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{Group?:array{GroupName?:string, GroupARN?:string, FilterExpression?:string, InsightsConfiguration?:array{InsightsEnabled?:bool, NotificationsEnabled?:bool}}}>
     */
    public function createGroup(array $args): \AWS\Result { }

    /**
     * @param array{GroupName:string, FilterExpression?:string, InsightsConfiguration?:array{InsightsEnabled?:bool, NotificationsEnabled?:bool}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Group?:array{GroupName?:string, GroupARN?:string, FilterExpression?:string, InsightsConfiguration?:array{InsightsEnabled?:bool, NotificationsEnabled?:bool}}}>
     */
    public function createGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SamplingRule:array{RuleName?:string, RuleARN?:string, ResourceARN:string, Priority:int, FixedRate:float, ReservoirSize:int, ServiceName:string, ServiceType:string, Host:string, HTTPMethod:string, URLPath:string, Version:int, Attributes?:array<string, string>}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{SamplingRuleRecord?:array{SamplingRule?:array{RuleName?:string, RuleARN?:string, ResourceARN:string, Priority:int, FixedRate:float, ReservoirSize:int, ServiceName:string, ServiceType:string, Host:string, HTTPMethod:string, URLPath:string, Version:int, Attributes?:array<string, string>}, CreatedAt?:int|string|\DateTimeInterface, ModifiedAt?:int|string|\DateTimeInterface}}>
     */
    public function createSamplingRule(array $args): \AWS\Result { }

    /**
     * @param array{SamplingRule:array{RuleName?:string, RuleARN?:string, ResourceARN:string, Priority:int, FixedRate:float, ReservoirSize:int, ServiceName:string, ServiceType:string, Host:string, HTTPMethod:string, URLPath:string, Version:int, Attributes?:array<string, string>}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{SamplingRuleRecord?:array{SamplingRule?:array{RuleName?:string, RuleARN?:string, ResourceARN:string, Priority:int, FixedRate:float, ReservoirSize:int, ServiceName:string, ServiceType:string, Host:string, HTTPMethod:string, URLPath:string, Version:int, Attributes?:array<string, string>}, CreatedAt?:int|string|\DateTimeInterface, ModifiedAt?:int|string|\DateTimeInterface}}>
     */
    public function createSamplingRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupName?:string, GroupARN?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteGroup(array $args = []): \AWS\Result { }

    /**
     * @param array{GroupName?:string, GroupARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteGroupAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PolicyName:string, PolicyRevisionId?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{PolicyName:string, PolicyRevisionId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleName?:string, RuleARN?:string} $args
     * @return \AWS\Result<array{SamplingRuleRecord?:array{SamplingRule?:array{RuleName?:string, RuleARN?:string, ResourceARN:string, Priority:int, FixedRate:float, ReservoirSize:int, ServiceName:string, ServiceType:string, Host:string, HTTPMethod:string, URLPath:string, Version:int, Attributes?:array<string, string>}, CreatedAt?:int|string|\DateTimeInterface, ModifiedAt?:int|string|\DateTimeInterface}}>
     */
    public function deleteSamplingRule(array $args = []): \AWS\Result { }

    /**
     * @param array{RuleName?:string, RuleARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SamplingRuleRecord?:array{SamplingRule?:array{RuleName?:string, RuleARN?:string, ResourceARN:string, Priority:int, FixedRate:float, ReservoirSize:int, ServiceName:string, ServiceType:string, Host:string, HTTPMethod:string, URLPath:string, Version:int, Attributes?:array<string, string>}, CreatedAt?:int|string|\DateTimeInterface, ModifiedAt?:int|string|\DateTimeInterface}}>
     */
    public function deleteSamplingRuleAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{EncryptionConfig?:array{KeyId?:string, Status?:"UPDATING"|"ACTIVE", Type?:"NONE"|"KMS"}}>
     */
    public function getEncryptionConfig(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{EncryptionConfig?:array{KeyId?:string, Status?:"UPDATING"|"ACTIVE", Type?:"NONE"|"KMS"}}>
     */
    public function getEncryptionConfigAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupName?:string, GroupARN?:string} $args
     * @return \AWS\Result<array{Group?:array{GroupName?:string, GroupARN?:string, FilterExpression?:string, InsightsConfiguration?:array{InsightsEnabled?:bool, NotificationsEnabled?:bool}}}>
     */
    public function getGroup(array $args = []): \AWS\Result { }

    /**
     * @param array{GroupName?:string, GroupARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Group?:array{GroupName?:string, GroupARN?:string, FilterExpression?:string, InsightsConfiguration?:array{InsightsEnabled?:bool, NotificationsEnabled?:bool}}}>
     */
    public function getGroupAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string} $args
     * @return \AWS\Result<array{Groups?:array<array{GroupName?:string, GroupARN?:string, FilterExpression?:string, InsightsConfiguration?:array{InsightsEnabled?:bool, NotificationsEnabled?:bool}}>, NextToken?:string}>
     */
    public function getGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Groups?:array<array{GroupName?:string, GroupARN?:string, FilterExpression?:string, InsightsConfiguration?:array{InsightsEnabled?:bool, NotificationsEnabled?:bool}}>, NextToken?:string}>
     */
    public function getGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string} $args
     * @return \AWS\Result<array{IndexingRules?:array<array{Name?:string, ModifiedAt?:int|string|\DateTimeInterface, Rule?:array{Probabilistic?:array{DesiredSamplingPercentage:float, ActualSamplingPercentage?:float}}}>, NextToken?:string}>
     */
    public function getIndexingRules(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IndexingRules?:array<array{Name?:string, ModifiedAt?:int|string|\DateTimeInterface, Rule?:array{Probabilistic?:array{DesiredSamplingPercentage:float, ActualSamplingPercentage?:float}}}>, NextToken?:string}>
     */
    public function getIndexingRulesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InsightId:string} $args
     * @return \AWS\Result<array{Insight?:array{InsightId?:string, GroupARN?:string, GroupName?:string, RootCauseServiceId?:array{Name?:string, Names?:array<string>, AccountId?:string, Type?:string}, Categories?:array<"FAULT">, State?:"ACTIVE"|"CLOSED", StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Summary?:string, ClientRequestImpactStatistics?:array{FaultCount?:int, OkCount?:int, TotalCount?:int}, RootCauseServiceRequestImpactStatistics?:array{FaultCount?:int, OkCount?:int, TotalCount?:int}, TopAnomalousServices?:array<array{ServiceId?:array{Name?:string, Names?:array<string>, AccountId?:string, Type?:string}}>}}>
     */
    public function getInsight(array $args): \AWS\Result { }

    /**
     * @param array{InsightId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Insight?:array{InsightId?:string, GroupARN?:string, GroupName?:string, RootCauseServiceId?:array{Name?:string, Names?:array<string>, AccountId?:string, Type?:string}, Categories?:array<"FAULT">, State?:"ACTIVE"|"CLOSED", StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Summary?:string, ClientRequestImpactStatistics?:array{FaultCount?:int, OkCount?:int, TotalCount?:int}, RootCauseServiceRequestImpactStatistics?:array{FaultCount?:int, OkCount?:int, TotalCount?:int}, TopAnomalousServices?:array<array{ServiceId?:array{Name?:string, Names?:array<string>, AccountId?:string, Type?:string}}>}}>
     */
    public function getInsightAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InsightId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{InsightEvents?:array<array{Summary?:string, EventTime?:int|string|\DateTimeInterface, ClientRequestImpactStatistics?:array{FaultCount?:int, OkCount?:int, TotalCount?:int}, RootCauseServiceRequestImpactStatistics?:array{FaultCount?:int, OkCount?:int, TotalCount?:int}, TopAnomalousServices?:array<array{ServiceId?:array{Name?:string, Names?:array<string>, AccountId?:string, Type?:string}}>}>, NextToken?:string}>
     */
    public function getInsightEvents(array $args): \AWS\Result { }

    /**
     * @param array{InsightId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{InsightEvents?:array<array{Summary?:string, EventTime?:int|string|\DateTimeInterface, ClientRequestImpactStatistics?:array{FaultCount?:int, OkCount?:int, TotalCount?:int}, RootCauseServiceRequestImpactStatistics?:array{FaultCount?:int, OkCount?:int, TotalCount?:int}, TopAnomalousServices?:array<array{ServiceId?:array{Name?:string, Names?:array<string>, AccountId?:string, Type?:string}}>}>, NextToken?:string}>
     */
    public function getInsightEventsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InsightId:string, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, NextToken?:string} $args
     * @return \AWS\Result<array{InsightId?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, ServiceGraphStartTime?:int|string|\DateTimeInterface, ServiceGraphEndTime?:int|string|\DateTimeInterface, Services?:array<array{ReferenceId?:int, Type?:string, Name?:string, Names?:array<string>, AccountId?:string, Edges?:array<array{ReferenceId?:int}>}>, NextToken?:string}>
     */
    public function getInsightImpactGraph(array $args): \AWS\Result { }

    /**
     * @param array{InsightId:string, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{InsightId?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, ServiceGraphStartTime?:int|string|\DateTimeInterface, ServiceGraphEndTime?:int|string|\DateTimeInterface, Services?:array<array{ReferenceId?:int, Type?:string, Name?:string, Names?:array<string>, AccountId?:string, Edges?:array<array{ReferenceId?:int}>}>, NextToken?:string}>
     */
    public function getInsightImpactGraphAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{States?:array<"ACTIVE"|"CLOSED">, GroupARN?:string, GroupName?:string, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{InsightSummaries?:array<array{InsightId?:string, GroupARN?:string, GroupName?:string, RootCauseServiceId?:array{Name?:string, Names?:array<string>, AccountId?:string, Type?:string}, Categories?:array<"FAULT">, State?:"ACTIVE"|"CLOSED", StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Summary?:string, ClientRequestImpactStatistics?:array{FaultCount?:int, OkCount?:int, TotalCount?:int}, RootCauseServiceRequestImpactStatistics?:array{FaultCount?:int, OkCount?:int, TotalCount?:int}, TopAnomalousServices?:array<array{ServiceId?:array{Name?:string, Names?:array<string>, AccountId?:string, Type?:string}}>, LastUpdateTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function getInsightSummaries(array $args): \AWS\Result { }

    /**
     * @param array{States?:array<"ACTIVE"|"CLOSED">, GroupARN?:string, GroupName?:string, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{InsightSummaries?:array<array{InsightId?:string, GroupARN?:string, GroupName?:string, RootCauseServiceId?:array{Name?:string, Names?:array<string>, AccountId?:string, Type?:string}, Categories?:array<"FAULT">, State?:"ACTIVE"|"CLOSED", StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Summary?:string, ClientRequestImpactStatistics?:array{FaultCount?:int, OkCount?:int, TotalCount?:int}, RootCauseServiceRequestImpactStatistics?:array{FaultCount?:int, OkCount?:int, TotalCount?:int}, TopAnomalousServices?:array<array{ServiceId?:array{Name?:string, Names?:array<string>, AccountId?:string, Type?:string}}>, LastUpdateTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function getInsightSummariesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RetrievalToken:string, NextToken?:string} $args
     * @return \AWS\Result<array{RetrievalStatus?:"SCHEDULED"|"RUNNING"|"COMPLETE"|"FAILED"|"CANCELLED"|"TIMEOUT", Services?:array<array{Service?:array{ReferenceId?:int, Name?:string, Names?:array<string>, Root?:bool, AccountId?:string, Type?:string, State?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Edges?:array<array{ReferenceId?:int, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, SummaryStatistics?:array{OkCount?:int, ErrorStatistics?:array{ThrottleCount?:int, OtherCount?:int, TotalCount?:int}, FaultStatistics?:array{OtherCount?:int, TotalCount?:int}, TotalCount?:int, TotalResponseTime?:float}, ResponseTimeHistogram?:array<array{Value?:float, Count?:int}>, Aliases?:array<array{Name?:string, Names?:array<string>, Type?:string}>, EdgeType?:string, ReceivedEventAgeHistogram?:array<array{Value?:float, Count?:int}>}>, SummaryStatistics?:array{OkCount?:int, ErrorStatistics?:array{ThrottleCount?:int, OtherCount?:int, TotalCount?:int}, FaultStatistics?:array{OtherCount?:int, TotalCount?:int}, TotalCount?:int, TotalResponseTime?:float}, DurationHistogram?:array<array{Value?:float, Count?:int}>, ResponseTimeHistogram?:array<array{Value?:float, Count?:int}>}, Links?:array<array{ReferenceType?:string, SourceTraceId?:string, DestinationTraceIds?:array<string>}>}>, NextToken?:string}>
     */
    public function getRetrievedTracesGraph(array $args): \AWS\Result { }

    /**
     * @param array{RetrievalToken:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RetrievalStatus?:"SCHEDULED"|"RUNNING"|"COMPLETE"|"FAILED"|"CANCELLED"|"TIMEOUT", Services?:array<array{Service?:array{ReferenceId?:int, Name?:string, Names?:array<string>, Root?:bool, AccountId?:string, Type?:string, State?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Edges?:array<array{ReferenceId?:int, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, SummaryStatistics?:array{OkCount?:int, ErrorStatistics?:array{ThrottleCount?:int, OtherCount?:int, TotalCount?:int}, FaultStatistics?:array{OtherCount?:int, TotalCount?:int}, TotalCount?:int, TotalResponseTime?:float}, ResponseTimeHistogram?:array<array{Value?:float, Count?:int}>, Aliases?:array<array{Name?:string, Names?:array<string>, Type?:string}>, EdgeType?:string, ReceivedEventAgeHistogram?:array<array{Value?:float, Count?:int}>}>, SummaryStatistics?:array{OkCount?:int, ErrorStatistics?:array{ThrottleCount?:int, OtherCount?:int, TotalCount?:int}, FaultStatistics?:array{OtherCount?:int, TotalCount?:int}, TotalCount?:int, TotalResponseTime?:float}, DurationHistogram?:array<array{Value?:float, Count?:int}>, ResponseTimeHistogram?:array<array{Value?:float, Count?:int}>}, Links?:array<array{ReferenceType?:string, SourceTraceId?:string, DestinationTraceIds?:array<string>}>}>, NextToken?:string}>
     */
    public function getRetrievedTracesGraphAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string} $args
     * @return \AWS\Result<array{SamplingRuleRecords?:array<array{SamplingRule?:array{RuleName?:string, RuleARN?:string, ResourceARN:string, Priority:int, FixedRate:float, ReservoirSize:int, ServiceName:string, ServiceType:string, Host:string, HTTPMethod:string, URLPath:string, Version:int, Attributes?:array<string, string>}, CreatedAt?:int|string|\DateTimeInterface, ModifiedAt?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function getSamplingRules(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SamplingRuleRecords?:array<array{SamplingRule?:array{RuleName?:string, RuleARN?:string, ResourceARN:string, Priority:int, FixedRate:float, ReservoirSize:int, ServiceName:string, ServiceType:string, Host:string, HTTPMethod:string, URLPath:string, Version:int, Attributes?:array<string, string>}, CreatedAt?:int|string|\DateTimeInterface, ModifiedAt?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function getSamplingRulesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string} $args
     * @return \AWS\Result<array{SamplingStatisticSummaries?:array<array{RuleName?:string, Timestamp?:int|string|\DateTimeInterface, RequestCount?:int, BorrowCount?:int, SampledCount?:int}>, NextToken?:string}>
     */
    public function getSamplingStatisticSummaries(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SamplingStatisticSummaries?:array<array{RuleName?:string, Timestamp?:int|string|\DateTimeInterface, RequestCount?:int, BorrowCount?:int, SampledCount?:int}>, NextToken?:string}>
     */
    public function getSamplingStatisticSummariesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SamplingStatisticsDocuments:array<array{RuleName:string, ClientID:string, Timestamp:int|string|\DateTimeInterface, RequestCount:int, SampledCount:int, BorrowCount?:int}>} $args
     * @return \AWS\Result<array{SamplingTargetDocuments?:array<array{RuleName?:string, FixedRate?:float, ReservoirQuota?:int, ReservoirQuotaTTL?:int|string|\DateTimeInterface, Interval?:int}>, LastRuleModification?:int|string|\DateTimeInterface, UnprocessedStatistics?:array<array{RuleName?:string, ErrorCode?:string, Message?:string}>}>
     */
    public function getSamplingTargets(array $args): \AWS\Result { }

    /**
     * @param array{SamplingStatisticsDocuments:array<array{RuleName:string, ClientID:string, Timestamp:int|string|\DateTimeInterface, RequestCount:int, SampledCount:int, BorrowCount?:int}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{SamplingTargetDocuments?:array<array{RuleName?:string, FixedRate?:float, ReservoirQuota?:int, ReservoirQuotaTTL?:int|string|\DateTimeInterface, Interval?:int}>, LastRuleModification?:int|string|\DateTimeInterface, UnprocessedStatistics?:array<array{RuleName?:string, ErrorCode?:string, Message?:string}>}>
     */
    public function getSamplingTargetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, GroupName?:string, GroupARN?:string, NextToken?:string} $args
     * @return \AWS\Result<array{StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Services?:array<array{ReferenceId?:int, Name?:string, Names?:array<string>, Root?:bool, AccountId?:string, Type?:string, State?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Edges?:array<array{ReferenceId?:int, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, SummaryStatistics?:array{OkCount?:int, ErrorStatistics?:array{ThrottleCount?:int, OtherCount?:int, TotalCount?:int}, FaultStatistics?:array{OtherCount?:int, TotalCount?:int}, TotalCount?:int, TotalResponseTime?:float}, ResponseTimeHistogram?:array<array{Value?:float, Count?:int}>, Aliases?:array<array{Name?:string, Names?:array<string>, Type?:string}>, EdgeType?:string, ReceivedEventAgeHistogram?:array<array{Value?:float, Count?:int}>}>, SummaryStatistics?:array{OkCount?:int, ErrorStatistics?:array{ThrottleCount?:int, OtherCount?:int, TotalCount?:int}, FaultStatistics?:array{OtherCount?:int, TotalCount?:int}, TotalCount?:int, TotalResponseTime?:float}, DurationHistogram?:array<array{Value?:float, Count?:int}>, ResponseTimeHistogram?:array<array{Value?:float, Count?:int}>}>, ContainsOldGroupVersions?:bool, NextToken?:string}>
     */
    public function getServiceGraph(array $args): \AWS\Result { }

    /**
     * @param array{StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, GroupName?:string, GroupARN?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Services?:array<array{ReferenceId?:int, Name?:string, Names?:array<string>, Root?:bool, AccountId?:string, Type?:string, State?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Edges?:array<array{ReferenceId?:int, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, SummaryStatistics?:array{OkCount?:int, ErrorStatistics?:array{ThrottleCount?:int, OtherCount?:int, TotalCount?:int}, FaultStatistics?:array{OtherCount?:int, TotalCount?:int}, TotalCount?:int, TotalResponseTime?:float}, ResponseTimeHistogram?:array<array{Value?:float, Count?:int}>, Aliases?:array<array{Name?:string, Names?:array<string>, Type?:string}>, EdgeType?:string, ReceivedEventAgeHistogram?:array<array{Value?:float, Count?:int}>}>, SummaryStatistics?:array{OkCount?:int, ErrorStatistics?:array{ThrottleCount?:int, OtherCount?:int, TotalCount?:int}, FaultStatistics?:array{OtherCount?:int, TotalCount?:int}, TotalCount?:int, TotalResponseTime?:float}, DurationHistogram?:array<array{Value?:float, Count?:int}>, ResponseTimeHistogram?:array<array{Value?:float, Count?:int}>}>, ContainsOldGroupVersions?:bool, NextToken?:string}>
     */
    public function getServiceGraphAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, GroupName?:string, GroupARN?:string, EntitySelectorExpression?:string, Period?:int, ForecastStatistics?:bool, NextToken?:string} $args
     * @return \AWS\Result<array{TimeSeriesServiceStatistics?:array<array{Timestamp?:int|string|\DateTimeInterface, EdgeSummaryStatistics?:array{OkCount?:int, ErrorStatistics?:array{ThrottleCount?:int, OtherCount?:int, TotalCount?:int}, FaultStatistics?:array{OtherCount?:int, TotalCount?:int}, TotalCount?:int, TotalResponseTime?:float}, ServiceSummaryStatistics?:array{OkCount?:int, ErrorStatistics?:array{ThrottleCount?:int, OtherCount?:int, TotalCount?:int}, FaultStatistics?:array{OtherCount?:int, TotalCount?:int}, TotalCount?:int, TotalResponseTime?:float}, ServiceForecastStatistics?:array{FaultCountHigh?:int, FaultCountLow?:int}, ResponseTimeHistogram?:array<array{Value?:float, Count?:int}>}>, ContainsOldGroupVersions?:bool, NextToken?:string}>
     */
    public function getTimeSeriesServiceStatistics(array $args): \AWS\Result { }

    /**
     * @param array{StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, GroupName?:string, GroupARN?:string, EntitySelectorExpression?:string, Period?:int, ForecastStatistics?:bool, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TimeSeriesServiceStatistics?:array<array{Timestamp?:int|string|\DateTimeInterface, EdgeSummaryStatistics?:array{OkCount?:int, ErrorStatistics?:array{ThrottleCount?:int, OtherCount?:int, TotalCount?:int}, FaultStatistics?:array{OtherCount?:int, TotalCount?:int}, TotalCount?:int, TotalResponseTime?:float}, ServiceSummaryStatistics?:array{OkCount?:int, ErrorStatistics?:array{ThrottleCount?:int, OtherCount?:int, TotalCount?:int}, FaultStatistics?:array{OtherCount?:int, TotalCount?:int}, TotalCount?:int, TotalResponseTime?:float}, ServiceForecastStatistics?:array{FaultCountHigh?:int, FaultCountLow?:int}, ResponseTimeHistogram?:array<array{Value?:float, Count?:int}>}>, ContainsOldGroupVersions?:bool, NextToken?:string}>
     */
    public function getTimeSeriesServiceStatisticsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TraceIds:array<string>, NextToken?:string} $args
     * @return \AWS\Result<array{Services?:array<array{ReferenceId?:int, Name?:string, Names?:array<string>, Root?:bool, AccountId?:string, Type?:string, State?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Edges?:array<array{ReferenceId?:int, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, SummaryStatistics?:array{OkCount?:int, ErrorStatistics?:array{ThrottleCount?:int, OtherCount?:int, TotalCount?:int}, FaultStatistics?:array{OtherCount?:int, TotalCount?:int}, TotalCount?:int, TotalResponseTime?:float}, ResponseTimeHistogram?:array<array{Value?:float, Count?:int}>, Aliases?:array<array{Name?:string, Names?:array<string>, Type?:string}>, EdgeType?:string, ReceivedEventAgeHistogram?:array<array{Value?:float, Count?:int}>}>, SummaryStatistics?:array{OkCount?:int, ErrorStatistics?:array{ThrottleCount?:int, OtherCount?:int, TotalCount?:int}, FaultStatistics?:array{OtherCount?:int, TotalCount?:int}, TotalCount?:int, TotalResponseTime?:float}, DurationHistogram?:array<array{Value?:float, Count?:int}>, ResponseTimeHistogram?:array<array{Value?:float, Count?:int}>}>, NextToken?:string}>
     */
    public function getTraceGraph(array $args): \AWS\Result { }

    /**
     * @param array{TraceIds:array<string>, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Services?:array<array{ReferenceId?:int, Name?:string, Names?:array<string>, Root?:bool, AccountId?:string, Type?:string, State?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Edges?:array<array{ReferenceId?:int, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, SummaryStatistics?:array{OkCount?:int, ErrorStatistics?:array{ThrottleCount?:int, OtherCount?:int, TotalCount?:int}, FaultStatistics?:array{OtherCount?:int, TotalCount?:int}, TotalCount?:int, TotalResponseTime?:float}, ResponseTimeHistogram?:array<array{Value?:float, Count?:int}>, Aliases?:array<array{Name?:string, Names?:array<string>, Type?:string}>, EdgeType?:string, ReceivedEventAgeHistogram?:array<array{Value?:float, Count?:int}>}>, SummaryStatistics?:array{OkCount?:int, ErrorStatistics?:array{ThrottleCount?:int, OtherCount?:int, TotalCount?:int}, FaultStatistics?:array{OtherCount?:int, TotalCount?:int}, TotalCount?:int, TotalResponseTime?:float}, DurationHistogram?:array<array{Value?:float, Count?:int}>, ResponseTimeHistogram?:array<array{Value?:float, Count?:int}>}>, NextToken?:string}>
     */
    public function getTraceGraphAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{Destination?:"XRay"|"CloudWatchLogs", Status?:"PENDING"|"ACTIVE"}>
     */
    public function getTraceSegmentDestination(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{Destination?:"XRay"|"CloudWatchLogs", Status?:"PENDING"|"ACTIVE"}>
     */
    public function getTraceSegmentDestinationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, TimeRangeType?:"TraceId"|"Event"|"Service", Sampling?:bool, SamplingStrategy?:array{Name?:"PartialScan"|"FixedRate", Value?:float}, FilterExpression?:string, NextToken?:string} $args
     * @return \AWS\Result<array{TraceSummaries?:array<array{Id?:string, StartTime?:int|string|\DateTimeInterface, Duration?:float, ResponseTime?:float, HasFault?:bool, HasError?:bool, HasThrottle?:bool, IsPartial?:bool, Http?:array{HttpURL?:string, HttpStatus?:int, HttpMethod?:string, UserAgent?:string, ClientIp?:string}, Annotations?:array<string, array<array{AnnotationValue?:array{NumberValue?:float, BooleanValue?:bool, StringValue?:string}, ServiceIds?:array<array{Name?:string, Names?:array<string>, AccountId?:string, Type?:string}>}>>, Users?:array<array{UserName?:string, ServiceIds?:array<array{Name?:string, Names?:array<string>, AccountId?:string, Type?:string}>}>, ServiceIds?:array<array{Name?:string, Names?:array<string>, AccountId?:string, Type?:string}>, ResourceARNs?:array<array{ARN?:string}>, InstanceIds?:array<array{Id?:string}>, AvailabilityZones?:array<array{Name?:string}>, EntryPoint?:array{Name?:string, Names?:array<string>, AccountId?:string, Type?:string}, FaultRootCauses?:array<array{Services?:array<array{Name?:string, Names?:array<string>, Type?:string, AccountId?:string, EntityPath?:array<array{Name?:string, Exceptions?:array<array{Name?:string, Message?:string}>, Remote?:bool}>, Inferred?:bool}>, ClientImpacting?:bool}>, ErrorRootCauses?:array<array{Services?:array<array{Name?:string, Names?:array<string>, Type?:string, AccountId?:string, EntityPath?:array<array{Name?:string, Exceptions?:array<array{Name?:string, Message?:string}>, Remote?:bool}>, Inferred?:bool}>, ClientImpacting?:bool}>, ResponseTimeRootCauses?:array<array{Services?:array<array{Name?:string, Names?:array<string>, Type?:string, AccountId?:string, EntityPath?:array<array{Name?:string, Coverage?:float, Remote?:bool}>, Inferred?:bool}>, ClientImpacting?:bool}>, Revision?:int, MatchedEventTime?:int|string|\DateTimeInterface}>, ApproximateTime?:int|string|\DateTimeInterface, TracesProcessedCount?:int, NextToken?:string}>
     */
    public function getTraceSummaries(array $args): \AWS\Result { }

    /**
     * @param array{StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, TimeRangeType?:"TraceId"|"Event"|"Service", Sampling?:bool, SamplingStrategy?:array{Name?:"PartialScan"|"FixedRate", Value?:float}, FilterExpression?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TraceSummaries?:array<array{Id?:string, StartTime?:int|string|\DateTimeInterface, Duration?:float, ResponseTime?:float, HasFault?:bool, HasError?:bool, HasThrottle?:bool, IsPartial?:bool, Http?:array{HttpURL?:string, HttpStatus?:int, HttpMethod?:string, UserAgent?:string, ClientIp?:string}, Annotations?:array<string, array<array{AnnotationValue?:array{NumberValue?:float, BooleanValue?:bool, StringValue?:string}, ServiceIds?:array<array{Name?:string, Names?:array<string>, AccountId?:string, Type?:string}>}>>, Users?:array<array{UserName?:string, ServiceIds?:array<array{Name?:string, Names?:array<string>, AccountId?:string, Type?:string}>}>, ServiceIds?:array<array{Name?:string, Names?:array<string>, AccountId?:string, Type?:string}>, ResourceARNs?:array<array{ARN?:string}>, InstanceIds?:array<array{Id?:string}>, AvailabilityZones?:array<array{Name?:string}>, EntryPoint?:array{Name?:string, Names?:array<string>, AccountId?:string, Type?:string}, FaultRootCauses?:array<array{Services?:array<array{Name?:string, Names?:array<string>, Type?:string, AccountId?:string, EntityPath?:array<array{Name?:string, Exceptions?:array<array{Name?:string, Message?:string}>, Remote?:bool}>, Inferred?:bool}>, ClientImpacting?:bool}>, ErrorRootCauses?:array<array{Services?:array<array{Name?:string, Names?:array<string>, Type?:string, AccountId?:string, EntityPath?:array<array{Name?:string, Exceptions?:array<array{Name?:string, Message?:string}>, Remote?:bool}>, Inferred?:bool}>, ClientImpacting?:bool}>, ResponseTimeRootCauses?:array<array{Services?:array<array{Name?:string, Names?:array<string>, Type?:string, AccountId?:string, EntityPath?:array<array{Name?:string, Coverage?:float, Remote?:bool}>, Inferred?:bool}>, ClientImpacting?:bool}>, Revision?:int, MatchedEventTime?:int|string|\DateTimeInterface}>, ApproximateTime?:int|string|\DateTimeInterface, TracesProcessedCount?:int, NextToken?:string}>
     */
    public function getTraceSummariesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string} $args
     * @return \AWS\Result<array{ResourcePolicies?:array<array{PolicyName?:string, PolicyDocument?:string, PolicyRevisionId?:string, LastUpdatedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listResourcePolicies(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourcePolicies?:array<array{PolicyName?:string, PolicyDocument?:string, PolicyRevisionId?:string, LastUpdatedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listResourcePoliciesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RetrievalToken:string, TraceFormat?:"XRAY"|"OTEL", NextToken?:string} $args
     * @return \AWS\Result<array{RetrievalStatus?:"SCHEDULED"|"RUNNING"|"COMPLETE"|"FAILED"|"CANCELLED"|"TIMEOUT", TraceFormat?:"XRAY"|"OTEL", Traces?:array<array{Id?:string, Duration?:float, Spans?:array<array{Id?:string, Document?:string}>}>, NextToken?:string}>
     */
    public function listRetrievedTraces(array $args): \AWS\Result { }

    /**
     * @param array{RetrievalToken:string, TraceFormat?:"XRAY"|"OTEL", NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RetrievalStatus?:"SCHEDULED"|"RUNNING"|"COMPLETE"|"FAILED"|"CANCELLED"|"TIMEOUT", TraceFormat?:"XRAY"|"OTEL", Traces?:array<array{Id?:string, Duration?:float, Spans?:array<array{Id?:string, Document?:string}>}>, NextToken?:string}>
     */
    public function listRetrievedTracesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, NextToken?:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value:string}>, NextToken?:string}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value:string}>, NextToken?:string}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{KeyId?:string, Type:"NONE"|"KMS"} $args
     * @return \AWS\Result<array{EncryptionConfig?:array{KeyId?:string, Status?:"UPDATING"|"ACTIVE", Type?:"NONE"|"KMS"}}>
     */
    public function putEncryptionConfig(array $args): \AWS\Result { }

    /**
     * @param array{KeyId?:string, Type:"NONE"|"KMS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{EncryptionConfig?:array{KeyId?:string, Status?:"UPDATING"|"ACTIVE", Type?:"NONE"|"KMS"}}>
     */
    public function putEncryptionConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PolicyName:string, PolicyDocument:string, PolicyRevisionId?:string, BypassPolicyLockoutCheck?:bool} $args
     * @return \AWS\Result<array{ResourcePolicy?:array{PolicyName?:string, PolicyDocument?:string, PolicyRevisionId?:string, LastUpdatedTime?:int|string|\DateTimeInterface}}>
     */
    public function putResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{PolicyName:string, PolicyDocument:string, PolicyRevisionId?:string, BypassPolicyLockoutCheck?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourcePolicy?:array{PolicyName?:string, PolicyDocument?:string, PolicyRevisionId?:string, LastUpdatedTime?:int|string|\DateTimeInterface}}>
     */
    public function putResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TelemetryRecords:array<array{Timestamp:int|string|\DateTimeInterface, SegmentsReceivedCount?:int, SegmentsSentCount?:int, SegmentsSpilloverCount?:int, SegmentsRejectedCount?:int, BackendConnectionErrors?:array{TimeoutCount?:int, ConnectionRefusedCount?:int, HTTPCode4XXCount?:int, HTTPCode5XXCount?:int, UnknownHostCount?:int, OtherCount?:int}}>, EC2InstanceId?:string, Hostname?:string, ResourceARN?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function putTelemetryRecords(array $args): \AWS\Result { }

    /**
     * @param array{TelemetryRecords:array<array{Timestamp:int|string|\DateTimeInterface, SegmentsReceivedCount?:int, SegmentsSentCount?:int, SegmentsSpilloverCount?:int, SegmentsRejectedCount?:int, BackendConnectionErrors?:array{TimeoutCount?:int, ConnectionRefusedCount?:int, HTTPCode4XXCount?:int, HTTPCode5XXCount?:int, UnknownHostCount?:int, OtherCount?:int}}>, EC2InstanceId?:string, Hostname?:string, ResourceARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putTelemetryRecordsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TraceSegmentDocuments:array<string>} $args
     * @return \AWS\Result<array{UnprocessedTraceSegments?:array<array{Id?:string, ErrorCode?:string, Message?:string}>}>
     */
    public function putTraceSegments(array $args): \AWS\Result { }

    /**
     * @param array{TraceSegmentDocuments:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{UnprocessedTraceSegments?:array<array{Id?:string, ErrorCode?:string, Message?:string}>}>
     */
    public function putTraceSegmentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TraceIds:array<string>, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{RetrievalToken?:string}>
     */
    public function startTraceRetrieval(array $args): \AWS\Result { }

    /**
     * @param array{TraceIds:array<string>, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{RetrievalToken?:string}>
     */
    public function startTraceRetrievalAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{GroupName?:string, GroupARN?:string, FilterExpression?:string, InsightsConfiguration?:array{InsightsEnabled?:bool, NotificationsEnabled?:bool}} $args
     * @return \AWS\Result<array{Group?:array{GroupName?:string, GroupARN?:string, FilterExpression?:string, InsightsConfiguration?:array{InsightsEnabled?:bool, NotificationsEnabled?:bool}}}>
     */
    public function updateGroup(array $args = []): \AWS\Result { }

    /**
     * @param array{GroupName?:string, GroupARN?:string, FilterExpression?:string, InsightsConfiguration?:array{InsightsEnabled?:bool, NotificationsEnabled?:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Group?:array{GroupName?:string, GroupARN?:string, FilterExpression?:string, InsightsConfiguration?:array{InsightsEnabled?:bool, NotificationsEnabled?:bool}}}>
     */
    public function updateGroupAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Rule:array{Probabilistic?:array{DesiredSamplingPercentage:float}}} $args
     * @return \AWS\Result<array{IndexingRule?:array{Name?:string, ModifiedAt?:int|string|\DateTimeInterface, Rule?:array{Probabilistic?:array{DesiredSamplingPercentage:float, ActualSamplingPercentage?:float}}}}>
     */
    public function updateIndexingRule(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Rule:array{Probabilistic?:array{DesiredSamplingPercentage:float}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{IndexingRule?:array{Name?:string, ModifiedAt?:int|string|\DateTimeInterface, Rule?:array{Probabilistic?:array{DesiredSamplingPercentage:float, ActualSamplingPercentage?:float}}}}>
     */
    public function updateIndexingRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SamplingRuleUpdate:array{RuleName?:string, RuleARN?:string, ResourceARN?:string, Priority?:int, FixedRate?:float, ReservoirSize?:int, Host?:string, ServiceName?:string, ServiceType?:string, HTTPMethod?:string, URLPath?:string, Attributes?:array<string, string>}} $args
     * @return \AWS\Result<array{SamplingRuleRecord?:array{SamplingRule?:array{RuleName?:string, RuleARN?:string, ResourceARN:string, Priority:int, FixedRate:float, ReservoirSize:int, ServiceName:string, ServiceType:string, Host:string, HTTPMethod:string, URLPath:string, Version:int, Attributes?:array<string, string>}, CreatedAt?:int|string|\DateTimeInterface, ModifiedAt?:int|string|\DateTimeInterface}}>
     */
    public function updateSamplingRule(array $args): \AWS\Result { }

    /**
     * @param array{SamplingRuleUpdate:array{RuleName?:string, RuleARN?:string, ResourceARN?:string, Priority?:int, FixedRate?:float, ReservoirSize?:int, Host?:string, ServiceName?:string, ServiceType?:string, HTTPMethod?:string, URLPath?:string, Attributes?:array<string, string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{SamplingRuleRecord?:array{SamplingRule?:array{RuleName?:string, RuleARN?:string, ResourceARN:string, Priority:int, FixedRate:float, ReservoirSize:int, ServiceName:string, ServiceType:string, Host:string, HTTPMethod:string, URLPath:string, Version:int, Attributes?:array<string, string>}, CreatedAt?:int|string|\DateTimeInterface, ModifiedAt?:int|string|\DateTimeInterface}}>
     */
    public function updateSamplingRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Destination?:"XRay"|"CloudWatchLogs"} $args
     * @return \AWS\Result<array{Destination?:"XRay"|"CloudWatchLogs", Status?:"PENDING"|"ACTIVE"}>
     */
    public function updateTraceSegmentDestination(array $args = []): \AWS\Result { }

    /**
     * @param array{Destination?:"XRay"|"CloudWatchLogs"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Destination?:"XRay"|"CloudWatchLogs", Status?:"PENDING"|"ACTIVE"}>
     */
    public function updateTraceSegmentDestinationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }
}
