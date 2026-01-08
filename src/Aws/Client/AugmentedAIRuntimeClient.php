<?php
namespace AWS\AugmentedAIRuntime;

class AugmentedAIRuntimeClient
{
    /**
     * @param array{HumanLoopName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteHumanLoop(array $args): \AWS\Result { }

    /**
     * @param array{HumanLoopName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteHumanLoopAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HumanLoopName:string} $args
     * @return \AWS\Result<array{CreationTime:int|string|\DateTimeInterface, FailureReason?:string, FailureCode?:string, HumanLoopStatus:"InProgress"|"Failed"|"Completed"|"Stopped"|"Stopping", HumanLoopName:string, HumanLoopArn:string, FlowDefinitionArn:string, HumanLoopOutput?:array{OutputS3Uri:string}}>
     */
    public function describeHumanLoop(array $args): \AWS\Result { }

    /**
     * @param array{HumanLoopName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CreationTime:int|string|\DateTimeInterface, FailureReason?:string, FailureCode?:string, HumanLoopStatus:"InProgress"|"Failed"|"Completed"|"Stopped"|"Stopping", HumanLoopName:string, HumanLoopArn:string, FlowDefinitionArn:string, HumanLoopOutput?:array{OutputS3Uri:string}}>
     */
    public function describeHumanLoopAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CreationTimeAfter?:int|string|\DateTimeInterface, CreationTimeBefore?:int|string|\DateTimeInterface, FlowDefinitionArn:string, SortOrder?:"Ascending"|"Descending", NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{HumanLoopSummaries:array<array{HumanLoopName?:string, HumanLoopStatus?:"InProgress"|"Failed"|"Completed"|"Stopped"|"Stopping", CreationTime?:int|string|\DateTimeInterface, FailureReason?:string, FlowDefinitionArn?:string}>, NextToken?:string}>
     */
    public function listHumanLoops(array $args): \AWS\Result { }

    /**
     * @param array{CreationTimeAfter?:int|string|\DateTimeInterface, CreationTimeBefore?:int|string|\DateTimeInterface, FlowDefinitionArn:string, SortOrder?:"Ascending"|"Descending", NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{HumanLoopSummaries:array<array{HumanLoopName?:string, HumanLoopStatus?:"InProgress"|"Failed"|"Completed"|"Stopped"|"Stopping", CreationTime?:int|string|\DateTimeInterface, FailureReason?:string, FlowDefinitionArn?:string}>, NextToken?:string}>
     */
    public function listHumanLoopsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HumanLoopName:string, FlowDefinitionArn:string, HumanLoopInput:array{InputContent:string}, DataAttributes?:array{ContentClassifiers:array<"FreeOfPersonallyIdentifiableInformation"|"FreeOfAdultContent">}} $args
     * @return \AWS\Result<array{HumanLoopArn?:string}>
     */
    public function startHumanLoop(array $args): \AWS\Result { }

    /**
     * @param array{HumanLoopName:string, FlowDefinitionArn:string, HumanLoopInput:array{InputContent:string}, DataAttributes?:array{ContentClassifiers:array<"FreeOfPersonallyIdentifiableInformation"|"FreeOfAdultContent">}} $args
     * @return \GuzzleHttp\Promise\Promise<array{HumanLoopArn?:string}>
     */
    public function startHumanLoopAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HumanLoopName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopHumanLoop(array $args): \AWS\Result { }

    /**
     * @param array{HumanLoopName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopHumanLoopAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
