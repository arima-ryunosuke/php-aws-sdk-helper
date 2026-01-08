<?php
namespace AWS\KendraRanking;

class KendraRankingClient
{
    /**
     * @param array{Name:string, Description?:string, CapacityUnits?:array{RescoreCapacityUnits:int}, Tags?:array<array{Key:string, Value:string}>, ClientToken?:string} $args
     * @return \AWS\Result<array{Id:string, Arn:string}>
     */
    public function createRescoreExecutionPlan(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, CapacityUnits?:array{RescoreCapacityUnits:int}, Tags?:array<array{Key:string, Value:string}>, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Id:string, Arn:string}>
     */
    public function createRescoreExecutionPlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteRescoreExecutionPlan(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteRescoreExecutionPlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{Id?:string, Arn?:string, Name?:string, Description?:string, CapacityUnits?:array{RescoreCapacityUnits:int}, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, Status?:"CREATING"|"UPDATING"|"ACTIVE"|"DELETING"|"FAILED", ErrorMessage?:string}>
     */
    public function describeRescoreExecutionPlan(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Id?:string, Arn?:string, Name?:string, Description?:string, CapacityUnits?:array{RescoreCapacityUnits:int}, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, Status?:"CREATING"|"UPDATING"|"ACTIVE"|"DELETING"|"FAILED", ErrorMessage?:string}>
     */
    public function describeRescoreExecutionPlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{SummaryItems?:array<array{Name?:string, Id?:string, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, Status?:"CREATING"|"UPDATING"|"ACTIVE"|"DELETING"|"FAILED"}>, NextToken?:string}>
     */
    public function listRescoreExecutionPlans(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{SummaryItems?:array<array{Name?:string, Id?:string, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface, Status?:"CREATING"|"UPDATING"|"ACTIVE"|"DELETING"|"FAILED"}>, NextToken?:string}>
     */
    public function listRescoreExecutionPlansAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{RescoreExecutionPlanId:string, SearchQuery:string, Documents:array<array{Id:string, GroupId?:string, Title?:string, Body?:string, TokenizedTitle?:array<string>, TokenizedBody?:array<string>, OriginalScore:float}>} $args
     * @return \AWS\Result<array{RescoreId?:string, ResultItems?:array<array{DocumentId?:string, Score?:float}>}>
     */
    public function rescore(array $args): \AWS\Result { }

    /**
     * @param array{RescoreExecutionPlanId:string, SearchQuery:string, Documents:array<array{Id:string, GroupId?:string, Title?:string, Body?:string, TokenizedTitle?:array<string>, TokenizedBody?:array<string>, OriginalScore:float}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{RescoreId?:string, ResultItems?:array<array{DocumentId?:string, Score?:float}>}>
     */
    public function rescoreAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{Id:string, Name?:string, Description?:string, CapacityUnits?:array{RescoreCapacityUnits:int}} $args
     * @return \AWS\Result<void>
     */
    public function updateRescoreExecutionPlan(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, Name?:string, Description?:string, CapacityUnits?:array{RescoreCapacityUnits:int}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateRescoreExecutionPlanAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
