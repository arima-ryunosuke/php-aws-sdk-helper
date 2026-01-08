<?php
namespace AWS\SageMakerMetrics;

class SageMakerMetricsClient
{
    /**
     * @param array{MetricQueries:array<array{MetricName:string, ResourceArn:string, MetricStat:"Min"|"Max"|"Avg"|"Count"|"StdDev"|"Last", Period:"OneMinute"|"FiveMinute"|"OneHour"|"IterationNumber", XAxisType:"IterationNumber"|"Timestamp", Start?:int, End?:int}>} $args
     * @return \AWS\Result<array{MetricQueryResults?:array<array{Status:"Complete"|"Truncated"|"InternalError"|"ValidationError", Message?:string, XAxisValues:array<int>, MetricValues:array<float>}>}>
     */
    public function batchGetMetrics(array $args): \AWS\Result { }

    /**
     * @param array{MetricQueries:array<array{MetricName:string, ResourceArn:string, MetricStat:"Min"|"Max"|"Avg"|"Count"|"StdDev"|"Last", Period:"OneMinute"|"FiveMinute"|"OneHour"|"IterationNumber", XAxisType:"IterationNumber"|"Timestamp", Start?:int, End?:int}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{MetricQueryResults?:array<array{Status:"Complete"|"Truncated"|"InternalError"|"ValidationError", Message?:string, XAxisValues:array<int>, MetricValues:array<float>}>}>
     */
    public function batchGetMetricsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrialComponentName:string, MetricData:array<array{MetricName:string, Timestamp:int|string|\DateTimeInterface, Step?:int, Value:float}>} $args
     * @return \AWS\Result<array{Errors?:array<array{Code?:"METRIC_LIMIT_EXCEEDED"|"INTERNAL_ERROR"|"VALIDATION_ERROR"|"CONFLICT_ERROR", MetricIndex?:int}>}>
     */
    public function batchPutMetrics(array $args): \AWS\Result { }

    /**
     * @param array{TrialComponentName:string, MetricData:array<array{MetricName:string, Timestamp:int|string|\DateTimeInterface, Step?:int, Value:float}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Errors?:array<array{Code?:"METRIC_LIMIT_EXCEEDED"|"INTERNAL_ERROR"|"VALIDATION_ERROR"|"CONFLICT_ERROR", MetricIndex?:int}>}>
     */
    public function batchPutMetricsAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
