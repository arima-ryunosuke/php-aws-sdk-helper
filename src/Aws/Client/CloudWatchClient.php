<?php
namespace AWS\CloudWatch;

class CloudWatchClient
{
    /**
     * @param array{AlarmNames:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function deleteAlarms(array $args): \AWS\Result { }

    /**
     * @param array{AlarmNames:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAlarmsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Namespace?:string, MetricName?:string, Dimensions?:array<array{Name:string, Value:string}>, Stat?:string, SingleMetricAnomalyDetector?:array{AccountId?:string, Namespace?:string, MetricName?:string, Dimensions?:array<array{Name:string, Value:string}>, Stat?:string}, MetricMathAnomalyDetector?:array{MetricDataQueries?:array<array{Id:string, MetricStat?:array{Metric:array{Namespace?:string, MetricName?:string, Dimensions?:array<array{Name:string, Value:string}>}, Period:int, Stat:string, Unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None"}, Expression?:string, Label?:string, ReturnData?:bool, Period?:int, AccountId?:string}>}} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAnomalyDetector(array $args = []): \AWS\Result { }

    /**
     * @param array{Namespace?:string, MetricName?:string, Dimensions?:array<array{Name:string, Value:string}>, Stat?:string, SingleMetricAnomalyDetector?:array{AccountId?:string, Namespace?:string, MetricName?:string, Dimensions?:array<array{Name:string, Value:string}>, Stat?:string}, MetricMathAnomalyDetector?:array{MetricDataQueries?:array<array{Id:string, MetricStat?:array{Metric:array{Namespace?:string, MetricName?:string, Dimensions?:array<array{Name:string, Value:string}>}, Period:int, Stat:string, Unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None"}, Expression?:string, Label?:string, ReturnData?:bool, Period?:int, AccountId?:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAnomalyDetectorAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DashboardNames:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteDashboards(array $args): \AWS\Result { }

    /**
     * @param array{DashboardNames:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteDashboardsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleNames:array<string>} $args
     * @return \AWS\Result<array{Failures?:array<array{FailureResource?:string, ExceptionType?:string, FailureCode?:string, FailureDescription?:string}>}>
     */
    public function deleteInsightRules(array $args): \AWS\Result { }

    /**
     * @param array{RuleNames:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Failures?:array<array{FailureResource?:string, ExceptionType?:string, FailureCode?:string, FailureDescription?:string}>}>
     */
    public function deleteInsightRulesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteMetricStream(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteMetricStreamAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AlarmName?:string, AlarmTypes?:array<"CompositeAlarm"|"MetricAlarm">, HistoryItemType?:"ConfigurationUpdate"|"StateUpdate"|"Action", StartDate?:int|string|\DateTimeInterface, EndDate?:int|string|\DateTimeInterface, MaxRecords?:int, NextToken?:string, ScanBy?:"TimestampDescending"|"TimestampAscending"} $args
     * @return \AWS\Result<array{AlarmHistoryItems?:array<array{AlarmName?:string, AlarmType?:"CompositeAlarm"|"MetricAlarm", Timestamp?:int|string|\DateTimeInterface, HistoryItemType?:"ConfigurationUpdate"|"StateUpdate"|"Action", HistorySummary?:string, HistoryData?:string}>, NextToken?:string}>
     */
    public function describeAlarmHistory(array $args = []): \AWS\Result { }

    /**
     * @param array{AlarmName?:string, AlarmTypes?:array<"CompositeAlarm"|"MetricAlarm">, HistoryItemType?:"ConfigurationUpdate"|"StateUpdate"|"Action", StartDate?:int|string|\DateTimeInterface, EndDate?:int|string|\DateTimeInterface, MaxRecords?:int, NextToken?:string, ScanBy?:"TimestampDescending"|"TimestampAscending"} $args
     * @return \GuzzleHttp\Promise\Promise<array{AlarmHistoryItems?:array<array{AlarmName?:string, AlarmType?:"CompositeAlarm"|"MetricAlarm", Timestamp?:int|string|\DateTimeInterface, HistoryItemType?:"ConfigurationUpdate"|"StateUpdate"|"Action", HistorySummary?:string, HistoryData?:string}>, NextToken?:string}>
     */
    public function describeAlarmHistoryAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AlarmNames?:array<string>, AlarmNamePrefix?:string, AlarmTypes?:array<"CompositeAlarm"|"MetricAlarm">, ChildrenOfAlarmName?:string, ParentsOfAlarmName?:string, StateValue?:"OK"|"ALARM"|"INSUFFICIENT_DATA", ActionPrefix?:string, MaxRecords?:int, NextToken?:string} $args
     * @return \AWS\Result<array{CompositeAlarms?:array<array{ActionsEnabled?:bool, AlarmActions?:array<string>, AlarmArn?:string, AlarmConfigurationUpdatedTimestamp?:int|string|\DateTimeInterface, AlarmDescription?:string, AlarmName?:string, AlarmRule?:string, InsufficientDataActions?:array<string>, OKActions?:array<string>, StateReason?:string, StateReasonData?:string, StateUpdatedTimestamp?:int|string|\DateTimeInterface, StateValue?:"OK"|"ALARM"|"INSUFFICIENT_DATA", StateTransitionedTimestamp?:int|string|\DateTimeInterface, ActionsSuppressedBy?:"WaitPeriod"|"ExtensionPeriod"|"Alarm", ActionsSuppressedReason?:string, ActionsSuppressor?:string, ActionsSuppressorWaitPeriod?:int, ActionsSuppressorExtensionPeriod?:int}>, MetricAlarms?:array<array{AlarmName?:string, AlarmArn?:string, AlarmDescription?:string, AlarmConfigurationUpdatedTimestamp?:int|string|\DateTimeInterface, ActionsEnabled?:bool, OKActions?:array<string>, AlarmActions?:array<string>, InsufficientDataActions?:array<string>, StateValue?:"OK"|"ALARM"|"INSUFFICIENT_DATA", StateReason?:string, StateReasonData?:string, StateUpdatedTimestamp?:int|string|\DateTimeInterface, MetricName?:string, Namespace?:string, Statistic?:"SampleCount"|"Average"|"Sum"|"Minimum"|"Maximum", ExtendedStatistic?:string, Dimensions?:array<array{Name:string, Value:string}>, Period?:int, Unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None", EvaluationPeriods?:int, DatapointsToAlarm?:int, Threshold?:float, ComparisonOperator?:"GreaterThanOrEqualToThreshold"|"GreaterThanThreshold"|"LessThanThreshold"|"LessThanOrEqualToThreshold"|"LessThanLowerOrGreaterThanUpperThreshold"|"LessThanLowerThreshold"|"GreaterThanUpperThreshold", TreatMissingData?:string, EvaluateLowSampleCountPercentile?:string, Metrics?:array<array{Id:string, MetricStat?:array{Metric:array{Namespace?:string, MetricName?:string, Dimensions?:array<array{Name:string, Value:string}>}, Period:int, Stat:string, Unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None"}, Expression?:string, Label?:string, ReturnData?:bool, Period?:int, AccountId?:string}>, ThresholdMetricId?:string, EvaluationState?:"PARTIAL_DATA", StateTransitionedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeAlarms(array $args = []): \AWS\Result { }

    /**
     * @param array{AlarmNames?:array<string>, AlarmNamePrefix?:string, AlarmTypes?:array<"CompositeAlarm"|"MetricAlarm">, ChildrenOfAlarmName?:string, ParentsOfAlarmName?:string, StateValue?:"OK"|"ALARM"|"INSUFFICIENT_DATA", ActionPrefix?:string, MaxRecords?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CompositeAlarms?:array<array{ActionsEnabled?:bool, AlarmActions?:array<string>, AlarmArn?:string, AlarmConfigurationUpdatedTimestamp?:int|string|\DateTimeInterface, AlarmDescription?:string, AlarmName?:string, AlarmRule?:string, InsufficientDataActions?:array<string>, OKActions?:array<string>, StateReason?:string, StateReasonData?:string, StateUpdatedTimestamp?:int|string|\DateTimeInterface, StateValue?:"OK"|"ALARM"|"INSUFFICIENT_DATA", StateTransitionedTimestamp?:int|string|\DateTimeInterface, ActionsSuppressedBy?:"WaitPeriod"|"ExtensionPeriod"|"Alarm", ActionsSuppressedReason?:string, ActionsSuppressor?:string, ActionsSuppressorWaitPeriod?:int, ActionsSuppressorExtensionPeriod?:int}>, MetricAlarms?:array<array{AlarmName?:string, AlarmArn?:string, AlarmDescription?:string, AlarmConfigurationUpdatedTimestamp?:int|string|\DateTimeInterface, ActionsEnabled?:bool, OKActions?:array<string>, AlarmActions?:array<string>, InsufficientDataActions?:array<string>, StateValue?:"OK"|"ALARM"|"INSUFFICIENT_DATA", StateReason?:string, StateReasonData?:string, StateUpdatedTimestamp?:int|string|\DateTimeInterface, MetricName?:string, Namespace?:string, Statistic?:"SampleCount"|"Average"|"Sum"|"Minimum"|"Maximum", ExtendedStatistic?:string, Dimensions?:array<array{Name:string, Value:string}>, Period?:int, Unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None", EvaluationPeriods?:int, DatapointsToAlarm?:int, Threshold?:float, ComparisonOperator?:"GreaterThanOrEqualToThreshold"|"GreaterThanThreshold"|"LessThanThreshold"|"LessThanOrEqualToThreshold"|"LessThanLowerOrGreaterThanUpperThreshold"|"LessThanLowerThreshold"|"GreaterThanUpperThreshold", TreatMissingData?:string, EvaluateLowSampleCountPercentile?:string, Metrics?:array<array{Id:string, MetricStat?:array{Metric:array{Namespace?:string, MetricName?:string, Dimensions?:array<array{Name:string, Value:string}>}, Period:int, Stat:string, Unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None"}, Expression?:string, Label?:string, ReturnData?:bool, Period?:int, AccountId?:string}>, ThresholdMetricId?:string, EvaluationState?:"PARTIAL_DATA", StateTransitionedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeAlarmsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MetricName:string, Namespace:string, Statistic?:"SampleCount"|"Average"|"Sum"|"Minimum"|"Maximum", ExtendedStatistic?:string, Dimensions?:array<array{Name:string, Value:string}>, Period?:int, Unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None"} $args
     * @return \AWS\Result<array{MetricAlarms?:array<array{AlarmName?:string, AlarmArn?:string, AlarmDescription?:string, AlarmConfigurationUpdatedTimestamp?:int|string|\DateTimeInterface, ActionsEnabled?:bool, OKActions?:array<string>, AlarmActions?:array<string>, InsufficientDataActions?:array<string>, StateValue?:"OK"|"ALARM"|"INSUFFICIENT_DATA", StateReason?:string, StateReasonData?:string, StateUpdatedTimestamp?:int|string|\DateTimeInterface, MetricName?:string, Namespace?:string, Statistic?:"SampleCount"|"Average"|"Sum"|"Minimum"|"Maximum", ExtendedStatistic?:string, Dimensions?:array<array{Name:string, Value:string}>, Period?:int, Unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None", EvaluationPeriods?:int, DatapointsToAlarm?:int, Threshold?:float, ComparisonOperator?:"GreaterThanOrEqualToThreshold"|"GreaterThanThreshold"|"LessThanThreshold"|"LessThanOrEqualToThreshold"|"LessThanLowerOrGreaterThanUpperThreshold"|"LessThanLowerThreshold"|"GreaterThanUpperThreshold", TreatMissingData?:string, EvaluateLowSampleCountPercentile?:string, Metrics?:array<array{Id:string, MetricStat?:array{Metric:array{Namespace?:string, MetricName?:string, Dimensions?:array<array{Name:string, Value:string}>}, Period:int, Stat:string, Unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None"}, Expression?:string, Label?:string, ReturnData?:bool, Period?:int, AccountId?:string}>, ThresholdMetricId?:string, EvaluationState?:"PARTIAL_DATA", StateTransitionedTimestamp?:int|string|\DateTimeInterface}>}>
     */
    public function describeAlarmsForMetric(array $args): \AWS\Result { }

    /**
     * @param array{MetricName:string, Namespace:string, Statistic?:"SampleCount"|"Average"|"Sum"|"Minimum"|"Maximum", ExtendedStatistic?:string, Dimensions?:array<array{Name:string, Value:string}>, Period?:int, Unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None"} $args
     * @return \GuzzleHttp\Promise\Promise<array{MetricAlarms?:array<array{AlarmName?:string, AlarmArn?:string, AlarmDescription?:string, AlarmConfigurationUpdatedTimestamp?:int|string|\DateTimeInterface, ActionsEnabled?:bool, OKActions?:array<string>, AlarmActions?:array<string>, InsufficientDataActions?:array<string>, StateValue?:"OK"|"ALARM"|"INSUFFICIENT_DATA", StateReason?:string, StateReasonData?:string, StateUpdatedTimestamp?:int|string|\DateTimeInterface, MetricName?:string, Namespace?:string, Statistic?:"SampleCount"|"Average"|"Sum"|"Minimum"|"Maximum", ExtendedStatistic?:string, Dimensions?:array<array{Name:string, Value:string}>, Period?:int, Unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None", EvaluationPeriods?:int, DatapointsToAlarm?:int, Threshold?:float, ComparisonOperator?:"GreaterThanOrEqualToThreshold"|"GreaterThanThreshold"|"LessThanThreshold"|"LessThanOrEqualToThreshold"|"LessThanLowerOrGreaterThanUpperThreshold"|"LessThanLowerThreshold"|"GreaterThanUpperThreshold", TreatMissingData?:string, EvaluateLowSampleCountPercentile?:string, Metrics?:array<array{Id:string, MetricStat?:array{Metric:array{Namespace?:string, MetricName?:string, Dimensions?:array<array{Name:string, Value:string}>}, Period:int, Stat:string, Unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None"}, Expression?:string, Label?:string, ReturnData?:bool, Period?:int, AccountId?:string}>, ThresholdMetricId?:string, EvaluationState?:"PARTIAL_DATA", StateTransitionedTimestamp?:int|string|\DateTimeInterface}>}>
     */
    public function describeAlarmsForMetricAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Namespace?:string, MetricName?:string, Dimensions?:array<array{Name:string, Value:string}>, AnomalyDetectorTypes?:array<"SINGLE_METRIC"|"METRIC_MATH">} $args
     * @return \AWS\Result<array{AnomalyDetectors?:array<array{Namespace?:string, MetricName?:string, Dimensions?:array<array{Name:string, Value:string}>, Stat?:string, Configuration?:array{ExcludedTimeRanges?:array<array{StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface}>, MetricTimezone?:string}, StateValue?:"PENDING_TRAINING"|"TRAINED_INSUFFICIENT_DATA"|"TRAINED", MetricCharacteristics?:array{PeriodicSpikes?:bool}, SingleMetricAnomalyDetector?:array{AccountId?:string, Namespace?:string, MetricName?:string, Dimensions?:array<array{Name:string, Value:string}>, Stat?:string}, MetricMathAnomalyDetector?:array{MetricDataQueries?:array<array{Id:string, MetricStat?:array{Metric:array{Namespace?:string, MetricName?:string, Dimensions?:array<array{Name:string, Value:string}>}, Period:int, Stat:string, Unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None"}, Expression?:string, Label?:string, ReturnData?:bool, Period?:int, AccountId?:string}>}}>, NextToken?:string}>
     */
    public function describeAnomalyDetectors(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Namespace?:string, MetricName?:string, Dimensions?:array<array{Name:string, Value:string}>, AnomalyDetectorTypes?:array<"SINGLE_METRIC"|"METRIC_MATH">} $args
     * @return \GuzzleHttp\Promise\Promise<array{AnomalyDetectors?:array<array{Namespace?:string, MetricName?:string, Dimensions?:array<array{Name:string, Value:string}>, Stat?:string, Configuration?:array{ExcludedTimeRanges?:array<array{StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface}>, MetricTimezone?:string}, StateValue?:"PENDING_TRAINING"|"TRAINED_INSUFFICIENT_DATA"|"TRAINED", MetricCharacteristics?:array{PeriodicSpikes?:bool}, SingleMetricAnomalyDetector?:array{AccountId?:string, Namespace?:string, MetricName?:string, Dimensions?:array<array{Name:string, Value:string}>, Stat?:string}, MetricMathAnomalyDetector?:array{MetricDataQueries?:array<array{Id:string, MetricStat?:array{Metric:array{Namespace?:string, MetricName?:string, Dimensions?:array<array{Name:string, Value:string}>}, Period:int, Stat:string, Unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None"}, Expression?:string, Label?:string, ReturnData?:bool, Period?:int, AccountId?:string}>}}>, NextToken?:string}>
     */
    public function describeAnomalyDetectorsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, InsightRules?:array<array{Name:string, State:string, Schema:string, Definition:string, ManagedRule?:bool}>}>
     */
    public function describeInsightRules(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, InsightRules?:array<array{Name:string, State:string, Schema:string, Definition:string, ManagedRule?:bool}>}>
     */
    public function describeInsightRulesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AlarmNames:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function disableAlarmActions(array $args): \AWS\Result { }

    /**
     * @param array{AlarmNames:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disableAlarmActionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleNames:array<string>} $args
     * @return \AWS\Result<array{Failures?:array<array{FailureResource?:string, ExceptionType?:string, FailureCode?:string, FailureDescription?:string}>}>
     */
    public function disableInsightRules(array $args): \AWS\Result { }

    /**
     * @param array{RuleNames:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Failures?:array<array{FailureResource?:string, ExceptionType?:string, FailureCode?:string, FailureDescription?:string}>}>
     */
    public function disableInsightRulesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AlarmNames:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function enableAlarmActions(array $args): \AWS\Result { }

    /**
     * @param array{AlarmNames:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function enableAlarmActionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleNames:array<string>} $args
     * @return \AWS\Result<array{Failures?:array<array{FailureResource?:string, ExceptionType?:string, FailureCode?:string, FailureDescription?:string}>}>
     */
    public function enableInsightRules(array $args): \AWS\Result { }

    /**
     * @param array{RuleNames:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Failures?:array<array{FailureResource?:string, ExceptionType?:string, FailureCode?:string, FailureDescription?:string}>}>
     */
    public function enableInsightRulesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DashboardName:string} $args
     * @return \AWS\Result<array{DashboardArn?:string, DashboardBody?:string, DashboardName?:string}>
     */
    public function getDashboard(array $args): \AWS\Result { }

    /**
     * @param array{DashboardName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DashboardArn?:string, DashboardBody?:string, DashboardName?:string}>
     */
    public function getDashboardAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleName:string, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, Period:int, MaxContributorCount?:int, Metrics?:array<string>, OrderBy?:string} $args
     * @return \AWS\Result<array{KeyLabels?:array<string>, AggregationStatistic?:string, AggregateValue?:float, ApproximateUniqueCount?:int, Contributors?:array<array{Keys:array<string>, ApproximateAggregateValue:float, Datapoints:array<array{Timestamp:int|string|\DateTimeInterface, ApproximateValue:float}>}>, MetricDatapoints?:array<array{Timestamp:int|string|\DateTimeInterface, UniqueContributors?:float, MaxContributorValue?:float, SampleCount?:float, Average?:float, Sum?:float, Minimum?:float, Maximum?:float}>}>
     */
    public function getInsightRuleReport(array $args): \AWS\Result { }

    /**
     * @param array{RuleName:string, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, Period:int, MaxContributorCount?:int, Metrics?:array<string>, OrderBy?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{KeyLabels?:array<string>, AggregationStatistic?:string, AggregateValue?:float, ApproximateUniqueCount?:int, Contributors?:array<array{Keys:array<string>, ApproximateAggregateValue:float, Datapoints:array<array{Timestamp:int|string|\DateTimeInterface, ApproximateValue:float}>}>, MetricDatapoints?:array<array{Timestamp:int|string|\DateTimeInterface, UniqueContributors?:float, MaxContributorValue?:float, SampleCount?:float, Average?:float, Sum?:float, Minimum?:float, Maximum?:float}>}>
     */
    public function getInsightRuleReportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MetricDataQueries:array<array{Id:string, MetricStat?:array{Metric:array{Namespace?:string, MetricName?:string, Dimensions?:array<array{Name:string, Value:string}>}, Period:int, Stat:string, Unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None"}, Expression?:string, Label?:string, ReturnData?:bool, Period?:int, AccountId?:string}>, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, NextToken?:string, ScanBy?:"TimestampDescending"|"TimestampAscending", MaxDatapoints?:int, LabelOptions?:array{Timezone?:string}} $args
     * @return \AWS\Result<array{MetricDataResults?:array<array{Id?:string, Label?:string, Timestamps?:array<int|string|\DateTimeInterface>, Values?:array<float>, StatusCode?:"Complete"|"InternalError"|"PartialData"|"Forbidden", Messages?:array<array{Code?:string, Value?:string}>}>, NextToken?:string, Messages?:array<array{Code?:string, Value?:string}>}>
     */
    public function getMetricData(array $args): \AWS\Result { }

    /**
     * @param array{MetricDataQueries:array<array{Id:string, MetricStat?:array{Metric:array{Namespace?:string, MetricName?:string, Dimensions?:array<array{Name:string, Value:string}>}, Period:int, Stat:string, Unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None"}, Expression?:string, Label?:string, ReturnData?:bool, Period?:int, AccountId?:string}>, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, NextToken?:string, ScanBy?:"TimestampDescending"|"TimestampAscending", MaxDatapoints?:int, LabelOptions?:array{Timezone?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{MetricDataResults?:array<array{Id?:string, Label?:string, Timestamps?:array<int|string|\DateTimeInterface>, Values?:array<float>, StatusCode?:"Complete"|"InternalError"|"PartialData"|"Forbidden", Messages?:array<array{Code?:string, Value?:string}>}>, NextToken?:string, Messages?:array<array{Code?:string, Value?:string}>}>
     */
    public function getMetricDataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Namespace:string, MetricName:string, Dimensions?:array<array{Name:string, Value:string}>, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, Period:int, Statistics?:array<"SampleCount"|"Average"|"Sum"|"Minimum"|"Maximum">, ExtendedStatistics?:array<string>, Unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None"} $args
     * @return \AWS\Result<array{Label?:string, Datapoints?:array<array{Timestamp?:int|string|\DateTimeInterface, SampleCount?:float, Average?:float, Sum?:float, Minimum?:float, Maximum?:float, Unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None", ExtendedStatistics?:array<string, float>}>}>
     */
    public function getMetricStatistics(array $args): \AWS\Result { }

    /**
     * @param array{Namespace:string, MetricName:string, Dimensions?:array<array{Name:string, Value:string}>, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, Period:int, Statistics?:array<"SampleCount"|"Average"|"Sum"|"Minimum"|"Maximum">, ExtendedStatistics?:array<string>, Unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Label?:string, Datapoints?:array<array{Timestamp?:int|string|\DateTimeInterface, SampleCount?:float, Average?:float, Sum?:float, Minimum?:float, Maximum?:float, Unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None", ExtendedStatistics?:array<string, float>}>}>
     */
    public function getMetricStatisticsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{Arn?:string, Name?:string, IncludeFilters?:array<array{Namespace?:string, MetricNames?:array<string>}>, ExcludeFilters?:array<array{Namespace?:string, MetricNames?:array<string>}>, FirehoseArn?:string, RoleArn?:string, State?:string, CreationDate?:int|string|\DateTimeInterface, LastUpdateDate?:int|string|\DateTimeInterface, OutputFormat?:"json"|"opentelemetry0.7"|"opentelemetry1.0", StatisticsConfigurations?:array<array{IncludeMetrics:array<array{Namespace:string, MetricName:string}>, AdditionalStatistics:array<string>}>, IncludeLinkedAccountsMetrics?:bool}>
     */
    public function getMetricStream(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Name?:string, IncludeFilters?:array<array{Namespace?:string, MetricNames?:array<string>}>, ExcludeFilters?:array<array{Namespace?:string, MetricNames?:array<string>}>, FirehoseArn?:string, RoleArn?:string, State?:string, CreationDate?:int|string|\DateTimeInterface, LastUpdateDate?:int|string|\DateTimeInterface, OutputFormat?:"json"|"opentelemetry0.7"|"opentelemetry1.0", StatisticsConfigurations?:array<array{IncludeMetrics:array<array{Namespace:string, MetricName:string}>, AdditionalStatistics:array<string>}>, IncludeLinkedAccountsMetrics?:bool}>
     */
    public function getMetricStreamAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MetricWidget:string, OutputFormat?:string} $args
     * @return \AWS\Result<array{MetricWidgetImage?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getMetricWidgetImage(array $args): \AWS\Result { }

    /**
     * @param array{MetricWidget:string, OutputFormat?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MetricWidgetImage?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getMetricWidgetImageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DashboardNamePrefix?:string, NextToken?:string} $args
     * @return \AWS\Result<array{DashboardEntries?:array<array{DashboardName?:string, DashboardArn?:string, LastModified?:int|string|\DateTimeInterface, Size?:int}>, NextToken?:string}>
     */
    public function listDashboards(array $args = []): \AWS\Result { }

    /**
     * @param array{DashboardNamePrefix?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DashboardEntries?:array<array{DashboardName?:string, DashboardArn?:string, LastModified?:int|string|\DateTimeInterface, Size?:int}>, NextToken?:string}>
     */
    public function listDashboardsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ManagedRules?:array<array{TemplateName?:string, ResourceARN?:string, RuleState?:array{RuleName:string, State:string}}>, NextToken?:string}>
     */
    public function listManagedInsightRules(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ManagedRules?:array<array{TemplateName?:string, ResourceARN?:string, RuleState?:array{RuleName:string, State:string}}>, NextToken?:string}>
     */
    public function listManagedInsightRulesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, Entries?:array<array{Arn?:string, CreationDate?:int|string|\DateTimeInterface, LastUpdateDate?:int|string|\DateTimeInterface, Name?:string, FirehoseArn?:string, State?:string, OutputFormat?:"json"|"opentelemetry0.7"|"opentelemetry1.0"}>}>
     */
    public function listMetricStreams(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Entries?:array<array{Arn?:string, CreationDate?:int|string|\DateTimeInterface, LastUpdateDate?:int|string|\DateTimeInterface, Name?:string, FirehoseArn?:string, State?:string, OutputFormat?:"json"|"opentelemetry0.7"|"opentelemetry1.0"}>}>
     */
    public function listMetricStreamsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Namespace?:string, MetricName?:string, Dimensions?:array<array{Name:string, Value?:string}>, NextToken?:string, RecentlyActive?:"PT3H", IncludeLinkedAccounts?:bool, OwningAccount?:string} $args
     * @return \AWS\Result<array{Metrics?:array<array{Namespace?:string, MetricName?:string, Dimensions?:array<array{Name:string, Value:string}>}>, NextToken?:string, OwningAccounts?:array<string>}>
     */
    public function listMetrics(array $args = []): \AWS\Result { }

    /**
     * @param array{Namespace?:string, MetricName?:string, Dimensions?:array<array{Name:string, Value?:string}>, NextToken?:string, RecentlyActive?:"PT3H", IncludeLinkedAccounts?:bool, OwningAccount?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Metrics?:array<array{Namespace?:string, MetricName?:string, Dimensions?:array<array{Name:string, Value:string}>}>, NextToken?:string, OwningAccounts?:array<string>}>
     */
    public function listMetricsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{Namespace?:string, MetricName?:string, Dimensions?:array<array{Name:string, Value:string}>, Stat?:string, Configuration?:array{ExcludedTimeRanges?:array<array{StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface}>, MetricTimezone?:string}, MetricCharacteristics?:array{PeriodicSpikes?:bool}, SingleMetricAnomalyDetector?:array{AccountId?:string, Namespace?:string, MetricName?:string, Dimensions?:array<array{Name:string, Value:string}>, Stat?:string}, MetricMathAnomalyDetector?:array{MetricDataQueries?:array<array{Id:string, MetricStat?:array{Metric:array{Namespace?:string, MetricName?:string, Dimensions?:array<array{Name:string, Value:string}>}, Period:int, Stat:string, Unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None"}, Expression?:string, Label?:string, ReturnData?:bool, Period?:int, AccountId?:string}>}} $args
     * @return \AWS\Result<array{}>
     */
    public function putAnomalyDetector(array $args = []): \AWS\Result { }

    /**
     * @param array{Namespace?:string, MetricName?:string, Dimensions?:array<array{Name:string, Value:string}>, Stat?:string, Configuration?:array{ExcludedTimeRanges?:array<array{StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface}>, MetricTimezone?:string}, MetricCharacteristics?:array{PeriodicSpikes?:bool}, SingleMetricAnomalyDetector?:array{AccountId?:string, Namespace?:string, MetricName?:string, Dimensions?:array<array{Name:string, Value:string}>, Stat?:string}, MetricMathAnomalyDetector?:array{MetricDataQueries?:array<array{Id:string, MetricStat?:array{Metric:array{Namespace?:string, MetricName?:string, Dimensions?:array<array{Name:string, Value:string}>}, Period:int, Stat:string, Unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None"}, Expression?:string, Label?:string, ReturnData?:bool, Period?:int, AccountId?:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putAnomalyDetectorAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ActionsEnabled?:bool, AlarmActions?:array<string>, AlarmDescription?:string, AlarmName:string, AlarmRule:string, InsufficientDataActions?:array<string>, OKActions?:array<string>, Tags?:array<array{Key:string, Value:string}>, ActionsSuppressor?:string, ActionsSuppressorWaitPeriod?:int, ActionsSuppressorExtensionPeriod?:int} $args
     * @return \AWS\Result<void>
     */
    public function putCompositeAlarm(array $args): \AWS\Result { }

    /**
     * @param array{ActionsEnabled?:bool, AlarmActions?:array<string>, AlarmDescription?:string, AlarmName:string, AlarmRule:string, InsufficientDataActions?:array<string>, OKActions?:array<string>, Tags?:array<array{Key:string, Value:string}>, ActionsSuppressor?:string, ActionsSuppressorWaitPeriod?:int, ActionsSuppressorExtensionPeriod?:int} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putCompositeAlarmAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DashboardName:string, DashboardBody:string} $args
     * @return \AWS\Result<array{DashboardValidationMessages?:array<array{DataPath?:string, Message?:string}>}>
     */
    public function putDashboard(array $args): \AWS\Result { }

    /**
     * @param array{DashboardName:string, DashboardBody:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DashboardValidationMessages?:array<array{DataPath?:string, Message?:string}>}>
     */
    public function putDashboardAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleName:string, RuleState?:string, RuleDefinition:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function putInsightRule(array $args): \AWS\Result { }

    /**
     * @param array{RuleName:string, RuleState?:string, RuleDefinition:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putInsightRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ManagedRules:array<array{TemplateName:string, ResourceARN:string, Tags?:array<array{Key:string, Value:string}>}>} $args
     * @return \AWS\Result<array{Failures?:array<array{FailureResource?:string, ExceptionType?:string, FailureCode?:string, FailureDescription?:string}>}>
     */
    public function putManagedInsightRules(array $args): \AWS\Result { }

    /**
     * @param array{ManagedRules:array<array{TemplateName:string, ResourceARN:string, Tags?:array<array{Key:string, Value:string}>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Failures?:array<array{FailureResource?:string, ExceptionType?:string, FailureCode?:string, FailureDescription?:string}>}>
     */
    public function putManagedInsightRulesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AlarmName:string, AlarmDescription?:string, ActionsEnabled?:bool, OKActions?:array<string>, AlarmActions?:array<string>, InsufficientDataActions?:array<string>, MetricName?:string, Namespace?:string, Statistic?:"SampleCount"|"Average"|"Sum"|"Minimum"|"Maximum", ExtendedStatistic?:string, Dimensions?:array<array{Name:string, Value:string}>, Period?:int, Unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None", EvaluationPeriods:int, DatapointsToAlarm?:int, Threshold?:float, ComparisonOperator:"GreaterThanOrEqualToThreshold"|"GreaterThanThreshold"|"LessThanThreshold"|"LessThanOrEqualToThreshold"|"LessThanLowerOrGreaterThanUpperThreshold"|"LessThanLowerThreshold"|"GreaterThanUpperThreshold", TreatMissingData?:string, EvaluateLowSampleCountPercentile?:string, Metrics?:array<array{Id:string, MetricStat?:array{Metric:array{Namespace?:string, MetricName?:string, Dimensions?:array<array{Name:string, Value:string}>}, Period:int, Stat:string, Unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None"}, Expression?:string, Label?:string, ReturnData?:bool, Period?:int, AccountId?:string}>, Tags?:array<array{Key:string, Value:string}>, ThresholdMetricId?:string} $args
     * @return \AWS\Result<void>
     */
    public function putMetricAlarm(array $args): \AWS\Result { }

    /**
     * @param array{AlarmName:string, AlarmDescription?:string, ActionsEnabled?:bool, OKActions?:array<string>, AlarmActions?:array<string>, InsufficientDataActions?:array<string>, MetricName?:string, Namespace?:string, Statistic?:"SampleCount"|"Average"|"Sum"|"Minimum"|"Maximum", ExtendedStatistic?:string, Dimensions?:array<array{Name:string, Value:string}>, Period?:int, Unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None", EvaluationPeriods:int, DatapointsToAlarm?:int, Threshold?:float, ComparisonOperator:"GreaterThanOrEqualToThreshold"|"GreaterThanThreshold"|"LessThanThreshold"|"LessThanOrEqualToThreshold"|"LessThanLowerOrGreaterThanUpperThreshold"|"LessThanLowerThreshold"|"GreaterThanUpperThreshold", TreatMissingData?:string, EvaluateLowSampleCountPercentile?:string, Metrics?:array<array{Id:string, MetricStat?:array{Metric:array{Namespace?:string, MetricName?:string, Dimensions?:array<array{Name:string, Value:string}>}, Period:int, Stat:string, Unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None"}, Expression?:string, Label?:string, ReturnData?:bool, Period?:int, AccountId?:string}>, Tags?:array<array{Key:string, Value:string}>, ThresholdMetricId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putMetricAlarmAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Namespace:string, MetricData?:array<array{MetricName:string, Dimensions?:array<array{Name:string, Value:string}>, Timestamp?:int|string|\DateTimeInterface, Value?:float, StatisticValues?:array{SampleCount:float, Sum:float, Minimum:float, Maximum:float}, Values?:array<float>, Counts?:array<float>, Unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None", StorageResolution?:int}>, EntityMetricData?:array<array{Entity?:array{KeyAttributes?:array<string, string>, Attributes?:array<string, string>}, MetricData?:array<array{MetricName:string, Dimensions?:array<array{Name:string, Value:string}>, Timestamp?:int|string|\DateTimeInterface, Value?:float, StatisticValues?:array{SampleCount:float, Sum:float, Minimum:float, Maximum:float}, Values?:array<float>, Counts?:array<float>, Unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None", StorageResolution?:int}>}>, StrictEntityValidation?:bool} $args
     * @return \AWS\Result<void>
     */
    public function putMetricData(array $args): \AWS\Result { }

    /**
     * @param array{Namespace:string, MetricData?:array<array{MetricName:string, Dimensions?:array<array{Name:string, Value:string}>, Timestamp?:int|string|\DateTimeInterface, Value?:float, StatisticValues?:array{SampleCount:float, Sum:float, Minimum:float, Maximum:float}, Values?:array<float>, Counts?:array<float>, Unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None", StorageResolution?:int}>, EntityMetricData?:array<array{Entity?:array{KeyAttributes?:array<string, string>, Attributes?:array<string, string>}, MetricData?:array<array{MetricName:string, Dimensions?:array<array{Name:string, Value:string}>, Timestamp?:int|string|\DateTimeInterface, Value?:float, StatisticValues?:array{SampleCount:float, Sum:float, Minimum:float, Maximum:float}, Values?:array<float>, Counts?:array<float>, Unit?:"Seconds"|"Microseconds"|"Milliseconds"|"Bytes"|"Kilobytes"|"Megabytes"|"Gigabytes"|"Terabytes"|"Bits"|"Kilobits"|"Megabits"|"Gigabits"|"Terabits"|"Percent"|"Count"|"Bytes/Second"|"Kilobytes/Second"|"Megabytes/Second"|"Gigabytes/Second"|"Terabytes/Second"|"Bits/Second"|"Kilobits/Second"|"Megabits/Second"|"Gigabits/Second"|"Terabits/Second"|"Count/Second"|"None", StorageResolution?:int}>}>, StrictEntityValidation?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putMetricDataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, IncludeFilters?:array<array{Namespace?:string, MetricNames?:array<string>}>, ExcludeFilters?:array<array{Namespace?:string, MetricNames?:array<string>}>, FirehoseArn:string, RoleArn:string, OutputFormat:"json"|"opentelemetry0.7"|"opentelemetry1.0", Tags?:array<array{Key:string, Value:string}>, StatisticsConfigurations?:array<array{IncludeMetrics:array<array{Namespace:string, MetricName:string}>, AdditionalStatistics:array<string>}>, IncludeLinkedAccountsMetrics?:bool} $args
     * @return \AWS\Result<array{Arn?:string}>
     */
    public function putMetricStream(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, IncludeFilters?:array<array{Namespace?:string, MetricNames?:array<string>}>, ExcludeFilters?:array<array{Namespace?:string, MetricNames?:array<string>}>, FirehoseArn:string, RoleArn:string, OutputFormat:"json"|"opentelemetry0.7"|"opentelemetry1.0", Tags?:array<array{Key:string, Value:string}>, StatisticsConfigurations?:array<array{IncludeMetrics:array<array{Namespace:string, MetricName:string}>, AdditionalStatistics:array<string>}>, IncludeLinkedAccountsMetrics?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string}>
     */
    public function putMetricStreamAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AlarmName:string, StateValue:"OK"|"ALARM"|"INSUFFICIENT_DATA", StateReason:string, StateReasonData?:string} $args
     * @return \AWS\Result<void>
     */
    public function setAlarmState(array $args): \AWS\Result { }

    /**
     * @param array{AlarmName:string, StateValue:"OK"|"ALARM"|"INSUFFICIENT_DATA", StateReason:string, StateReasonData?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function setAlarmStateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Names:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function startMetricStreams(array $args): \AWS\Result { }

    /**
     * @param array{Names:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function startMetricStreamsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Names:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function stopMetricStreams(array $args): \AWS\Result { }

    /**
     * @param array{Names:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopMetricStreamsAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
}
