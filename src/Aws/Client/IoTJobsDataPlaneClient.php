<?php
namespace AWS\IoTJobsDataPlane;

class IoTJobsDataPlaneClient
{
    /**
     * @param array{jobId:string, thingName:string, includeJobDocument?:bool, executionNumber?:int} $args
     * @return \AWS\Result<array{execution?:array{jobId?:string, thingName?:string, status?:"QUEUED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"TIMED_OUT"|"REJECTED"|"REMOVED"|"CANCELED", statusDetails?:array<string, string>, queuedAt?:int, startedAt?:int, lastUpdatedAt?:int, approximateSecondsBeforeTimedOut?:int, versionNumber?:int, executionNumber?:int, jobDocument?:string}}>
     */
    public function describeJobExecution(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string, thingName:string, includeJobDocument?:bool, executionNumber?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{execution?:array{jobId?:string, thingName?:string, status?:"QUEUED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"TIMED_OUT"|"REJECTED"|"REMOVED"|"CANCELED", statusDetails?:array<string, string>, queuedAt?:int, startedAt?:int, lastUpdatedAt?:int, approximateSecondsBeforeTimedOut?:int, versionNumber?:int, executionNumber?:int, jobDocument?:string}}>
     */
    public function describeJobExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingName:string} $args
     * @return \AWS\Result<array{inProgressJobs?:array<array{jobId?:string, queuedAt?:int, startedAt?:int, lastUpdatedAt?:int, versionNumber?:int, executionNumber?:int}>, queuedJobs?:array<array{jobId?:string, queuedAt?:int, startedAt?:int, lastUpdatedAt?:int, versionNumber?:int, executionNumber?:int}>}>
     */
    public function getPendingJobExecutions(array $args): \AWS\Result { }

    /**
     * @param array{thingName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{inProgressJobs?:array<array{jobId?:string, queuedAt?:int, startedAt?:int, lastUpdatedAt?:int, versionNumber?:int, executionNumber?:int}>, queuedJobs?:array<array{jobId?:string, queuedAt?:int, startedAt?:int, lastUpdatedAt?:int, versionNumber?:int, executionNumber?:int}>}>
     */
    public function getPendingJobExecutionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{targetArn:string, commandArn:string, parameters?:array<string, array{S?:string, B?:bool, I?:int, L?:int, D?:float, BIN?:string|resource|\Psr\Http\Message\StreamInterface, UL?:string}>, executionTimeoutSeconds?:int, clientToken?:string} $args
     * @return \AWS\Result<array{executionId?:string}>
     */
    public function startCommandExecution(array $args): \AWS\Result { }

    /**
     * @param array{targetArn:string, commandArn:string, parameters?:array<string, array{S?:string, B?:bool, I?:int, L?:int, D?:float, BIN?:string|resource|\Psr\Http\Message\StreamInterface, UL?:string}>, executionTimeoutSeconds?:int, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{executionId?:string}>
     */
    public function startCommandExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingName:string, statusDetails?:array<string, string>, stepTimeoutInMinutes?:int} $args
     * @return \AWS\Result<array{execution?:array{jobId?:string, thingName?:string, status?:"QUEUED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"TIMED_OUT"|"REJECTED"|"REMOVED"|"CANCELED", statusDetails?:array<string, string>, queuedAt?:int, startedAt?:int, lastUpdatedAt?:int, approximateSecondsBeforeTimedOut?:int, versionNumber?:int, executionNumber?:int, jobDocument?:string}}>
     */
    public function startNextPendingJobExecution(array $args): \AWS\Result { }

    /**
     * @param array{thingName:string, statusDetails?:array<string, string>, stepTimeoutInMinutes?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{execution?:array{jobId?:string, thingName?:string, status?:"QUEUED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"TIMED_OUT"|"REJECTED"|"REMOVED"|"CANCELED", statusDetails?:array<string, string>, queuedAt?:int, startedAt?:int, lastUpdatedAt?:int, approximateSecondsBeforeTimedOut?:int, versionNumber?:int, executionNumber?:int, jobDocument?:string}}>
     */
    public function startNextPendingJobExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string, thingName:string, status:"QUEUED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"TIMED_OUT"|"REJECTED"|"REMOVED"|"CANCELED", statusDetails?:array<string, string>, stepTimeoutInMinutes?:int, expectedVersion?:int, includeJobExecutionState?:bool, includeJobDocument?:bool, executionNumber?:int} $args
     * @return \AWS\Result<array{executionState?:array{status?:"QUEUED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"TIMED_OUT"|"REJECTED"|"REMOVED"|"CANCELED", statusDetails?:array<string, string>, versionNumber?:int}, jobDocument?:string}>
     */
    public function updateJobExecution(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string, thingName:string, status:"QUEUED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"TIMED_OUT"|"REJECTED"|"REMOVED"|"CANCELED", statusDetails?:array<string, string>, stepTimeoutInMinutes?:int, expectedVersion?:int, includeJobExecutionState?:bool, includeJobDocument?:bool, executionNumber?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{executionState?:array{status?:"QUEUED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"TIMED_OUT"|"REJECTED"|"REMOVED"|"CANCELED", statusDetails?:array<string, string>, versionNumber?:int}, jobDocument?:string}>
     */
    public function updateJobExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
