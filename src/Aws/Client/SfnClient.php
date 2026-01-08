<?php
namespace AWS\Sfn;

class SfnClient
{
    /**
     * @param array{name:string, tags?:array<array{key?:string, value?:string}>, encryptionConfiguration?:array{kmsKeyId?:string, kmsDataKeyReusePeriodSeconds?:int, type:"AWS_OWNED_KEY"|"CUSTOMER_MANAGED_KMS_KEY"}} $args
     * @return \AWS\Result<array{activityArn:string, creationDate:int|string|\DateTimeInterface}>
     */
    public function createActivity(array $args): \AWS\Result { }

    /**
     * @param array{name:string, tags?:array<array{key?:string, value?:string}>, encryptionConfiguration?:array{kmsKeyId?:string, kmsDataKeyReusePeriodSeconds?:int, type:"AWS_OWNED_KEY"|"CUSTOMER_MANAGED_KMS_KEY"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{activityArn:string, creationDate:int|string|\DateTimeInterface}>
     */
    public function createActivityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, definition:string, roleArn:string, type?:"STANDARD"|"EXPRESS", loggingConfiguration?:array{level?:"ALL"|"ERROR"|"FATAL"|"OFF", includeExecutionData?:bool, destinations?:array<array{cloudWatchLogsLogGroup?:array{logGroupArn?:string}}>}, tags?:array<array{key?:string, value?:string}>, tracingConfiguration?:array{enabled?:bool}, publish?:bool, versionDescription?:string, encryptionConfiguration?:array{kmsKeyId?:string, kmsDataKeyReusePeriodSeconds?:int, type:"AWS_OWNED_KEY"|"CUSTOMER_MANAGED_KMS_KEY"}} $args
     * @return \AWS\Result<array{stateMachineArn:string, creationDate:int|string|\DateTimeInterface, stateMachineVersionArn?:string}>
     */
    public function createStateMachine(array $args): \AWS\Result { }

    /**
     * @param array{name:string, definition:string, roleArn:string, type?:"STANDARD"|"EXPRESS", loggingConfiguration?:array{level?:"ALL"|"ERROR"|"FATAL"|"OFF", includeExecutionData?:bool, destinations?:array<array{cloudWatchLogsLogGroup?:array{logGroupArn?:string}}>}, tags?:array<array{key?:string, value?:string}>, tracingConfiguration?:array{enabled?:bool}, publish?:bool, versionDescription?:string, encryptionConfiguration?:array{kmsKeyId?:string, kmsDataKeyReusePeriodSeconds?:int, type:"AWS_OWNED_KEY"|"CUSTOMER_MANAGED_KMS_KEY"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{stateMachineArn:string, creationDate:int|string|\DateTimeInterface, stateMachineVersionArn?:string}>
     */
    public function createStateMachineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, name:string, routingConfiguration:array<array{stateMachineVersionArn:string, weight:int}>} $args
     * @return \AWS\Result<array{stateMachineAliasArn:string, creationDate:int|string|\DateTimeInterface}>
     */
    public function createStateMachineAlias(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, name:string, routingConfiguration:array<array{stateMachineVersionArn:string, weight:int}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{stateMachineAliasArn:string, creationDate:int|string|\DateTimeInterface}>
     */
    public function createStateMachineAliasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{activityArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteActivity(array $args): \AWS\Result { }

    /**
     * @param array{activityArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteActivityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{stateMachineArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteStateMachine(array $args): \AWS\Result { }

    /**
     * @param array{stateMachineArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteStateMachineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{stateMachineAliasArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteStateMachineAlias(array $args): \AWS\Result { }

    /**
     * @param array{stateMachineAliasArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteStateMachineAliasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{stateMachineVersionArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteStateMachineVersion(array $args): \AWS\Result { }

    /**
     * @param array{stateMachineVersionArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteStateMachineVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{activityArn:string} $args
     * @return \AWS\Result<array{activityArn:string, name:string, creationDate:int|string|\DateTimeInterface, encryptionConfiguration?:array{kmsKeyId?:string, kmsDataKeyReusePeriodSeconds?:int, type:"AWS_OWNED_KEY"|"CUSTOMER_MANAGED_KMS_KEY"}}>
     */
    public function describeActivity(array $args): \AWS\Result { }

    /**
     * @param array{activityArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{activityArn:string, name:string, creationDate:int|string|\DateTimeInterface, encryptionConfiguration?:array{kmsKeyId?:string, kmsDataKeyReusePeriodSeconds?:int, type:"AWS_OWNED_KEY"|"CUSTOMER_MANAGED_KMS_KEY"}}>
     */
    public function describeActivityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{executionArn:string, includedData?:"ALL_DATA"|"METADATA_ONLY"} $args
     * @return \AWS\Result<array{executionArn:string, stateMachineArn:string, name?:string, status:"RUNNING"|"SUCCEEDED"|"FAILED"|"TIMED_OUT"|"ABORTED"|"PENDING_REDRIVE", startDate:int|string|\DateTimeInterface, stopDate?:int|string|\DateTimeInterface, input?:string, inputDetails?:array{included?:bool}, output?:string, outputDetails?:array{included?:bool}, traceHeader?:string, mapRunArn?:string, error?:string, cause?:string, stateMachineVersionArn?:string, stateMachineAliasArn?:string, redriveCount?:int, redriveDate?:int|string|\DateTimeInterface, redriveStatus?:"REDRIVABLE"|"NOT_REDRIVABLE"|"REDRIVABLE_BY_MAP_RUN", redriveStatusReason?:string}>
     */
    public function describeExecution(array $args): \AWS\Result { }

    /**
     * @param array{executionArn:string, includedData?:"ALL_DATA"|"METADATA_ONLY"} $args
     * @return \GuzzleHttp\Promise\Promise<array{executionArn:string, stateMachineArn:string, name?:string, status:"RUNNING"|"SUCCEEDED"|"FAILED"|"TIMED_OUT"|"ABORTED"|"PENDING_REDRIVE", startDate:int|string|\DateTimeInterface, stopDate?:int|string|\DateTimeInterface, input?:string, inputDetails?:array{included?:bool}, output?:string, outputDetails?:array{included?:bool}, traceHeader?:string, mapRunArn?:string, error?:string, cause?:string, stateMachineVersionArn?:string, stateMachineAliasArn?:string, redriveCount?:int, redriveDate?:int|string|\DateTimeInterface, redriveStatus?:"REDRIVABLE"|"NOT_REDRIVABLE"|"REDRIVABLE_BY_MAP_RUN", redriveStatusReason?:string}>
     */
    public function describeExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{mapRunArn:string} $args
     * @return \AWS\Result<array{mapRunArn:string, executionArn:string, status:"RUNNING"|"SUCCEEDED"|"FAILED"|"ABORTED", startDate:int|string|\DateTimeInterface, stopDate?:int|string|\DateTimeInterface, maxConcurrency:int, toleratedFailurePercentage:float, toleratedFailureCount:int, itemCounts:array{pending:int, running:int, succeeded:int, failed:int, timedOut:int, aborted:int, total:int, resultsWritten:int, failuresNotRedrivable?:int, pendingRedrive?:int}, executionCounts:array{pending:int, running:int, succeeded:int, failed:int, timedOut:int, aborted:int, total:int, resultsWritten:int, failuresNotRedrivable?:int, pendingRedrive?:int}, redriveCount?:int, redriveDate?:int|string|\DateTimeInterface}>
     */
    public function describeMapRun(array $args): \AWS\Result { }

    /**
     * @param array{mapRunArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{mapRunArn:string, executionArn:string, status:"RUNNING"|"SUCCEEDED"|"FAILED"|"ABORTED", startDate:int|string|\DateTimeInterface, stopDate?:int|string|\DateTimeInterface, maxConcurrency:int, toleratedFailurePercentage:float, toleratedFailureCount:int, itemCounts:array{pending:int, running:int, succeeded:int, failed:int, timedOut:int, aborted:int, total:int, resultsWritten:int, failuresNotRedrivable?:int, pendingRedrive?:int}, executionCounts:array{pending:int, running:int, succeeded:int, failed:int, timedOut:int, aborted:int, total:int, resultsWritten:int, failuresNotRedrivable?:int, pendingRedrive?:int}, redriveCount?:int, redriveDate?:int|string|\DateTimeInterface}>
     */
    public function describeMapRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{stateMachineArn:string, includedData?:"ALL_DATA"|"METADATA_ONLY"} $args
     * @return \AWS\Result<array{stateMachineArn:string, name:string, status?:"ACTIVE"|"DELETING", definition:string, roleArn:string, type:"STANDARD"|"EXPRESS", creationDate:int|string|\DateTimeInterface, loggingConfiguration?:array{level?:"ALL"|"ERROR"|"FATAL"|"OFF", includeExecutionData?:bool, destinations?:array<array{cloudWatchLogsLogGroup?:array{logGroupArn?:string}}>}, tracingConfiguration?:array{enabled?:bool}, label?:string, revisionId?:string, description?:string, encryptionConfiguration?:array{kmsKeyId?:string, kmsDataKeyReusePeriodSeconds?:int, type:"AWS_OWNED_KEY"|"CUSTOMER_MANAGED_KMS_KEY"}, variableReferences?:array<string, array<string>>}>
     */
    public function describeStateMachine(array $args): \AWS\Result { }

    /**
     * @param array{stateMachineArn:string, includedData?:"ALL_DATA"|"METADATA_ONLY"} $args
     * @return \GuzzleHttp\Promise\Promise<array{stateMachineArn:string, name:string, status?:"ACTIVE"|"DELETING", definition:string, roleArn:string, type:"STANDARD"|"EXPRESS", creationDate:int|string|\DateTimeInterface, loggingConfiguration?:array{level?:"ALL"|"ERROR"|"FATAL"|"OFF", includeExecutionData?:bool, destinations?:array<array{cloudWatchLogsLogGroup?:array{logGroupArn?:string}}>}, tracingConfiguration?:array{enabled?:bool}, label?:string, revisionId?:string, description?:string, encryptionConfiguration?:array{kmsKeyId?:string, kmsDataKeyReusePeriodSeconds?:int, type:"AWS_OWNED_KEY"|"CUSTOMER_MANAGED_KMS_KEY"}, variableReferences?:array<string, array<string>>}>
     */
    public function describeStateMachineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{stateMachineAliasArn:string} $args
     * @return \AWS\Result<array{stateMachineAliasArn?:string, name?:string, description?:string, routingConfiguration?:array<array{stateMachineVersionArn:string, weight:int}>, creationDate?:int|string|\DateTimeInterface, updateDate?:int|string|\DateTimeInterface}>
     */
    public function describeStateMachineAlias(array $args): \AWS\Result { }

    /**
     * @param array{stateMachineAliasArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{stateMachineAliasArn?:string, name?:string, description?:string, routingConfiguration?:array<array{stateMachineVersionArn:string, weight:int}>, creationDate?:int|string|\DateTimeInterface, updateDate?:int|string|\DateTimeInterface}>
     */
    public function describeStateMachineAliasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{executionArn:string, includedData?:"ALL_DATA"|"METADATA_ONLY"} $args
     * @return \AWS\Result<array{stateMachineArn:string, name:string, definition:string, roleArn:string, updateDate:int|string|\DateTimeInterface, loggingConfiguration?:array{level?:"ALL"|"ERROR"|"FATAL"|"OFF", includeExecutionData?:bool, destinations?:array<array{cloudWatchLogsLogGroup?:array{logGroupArn?:string}}>}, tracingConfiguration?:array{enabled?:bool}, mapRunArn?:string, label?:string, revisionId?:string, encryptionConfiguration?:array{kmsKeyId?:string, kmsDataKeyReusePeriodSeconds?:int, type:"AWS_OWNED_KEY"|"CUSTOMER_MANAGED_KMS_KEY"}, variableReferences?:array<string, array<string>>}>
     */
    public function describeStateMachineForExecution(array $args): \AWS\Result { }

    /**
     * @param array{executionArn:string, includedData?:"ALL_DATA"|"METADATA_ONLY"} $args
     * @return \GuzzleHttp\Promise\Promise<array{stateMachineArn:string, name:string, definition:string, roleArn:string, updateDate:int|string|\DateTimeInterface, loggingConfiguration?:array{level?:"ALL"|"ERROR"|"FATAL"|"OFF", includeExecutionData?:bool, destinations?:array<array{cloudWatchLogsLogGroup?:array{logGroupArn?:string}}>}, tracingConfiguration?:array{enabled?:bool}, mapRunArn?:string, label?:string, revisionId?:string, encryptionConfiguration?:array{kmsKeyId?:string, kmsDataKeyReusePeriodSeconds?:int, type:"AWS_OWNED_KEY"|"CUSTOMER_MANAGED_KMS_KEY"}, variableReferences?:array<string, array<string>>}>
     */
    public function describeStateMachineForExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{activityArn:string, workerName?:string} $args
     * @return \AWS\Result<array{taskToken?:string, input?:string}>
     */
    public function getActivityTask(array $args): \AWS\Result { }

    /**
     * @param array{activityArn:string, workerName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{taskToken?:string, input?:string}>
     */
    public function getActivityTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{executionArn:string, maxResults?:int, reverseOrder?:bool, nextToken?:string, includeExecutionData?:bool} $args
     * @return \AWS\Result<array{events:array<array{timestamp:int|string|\DateTimeInterface, type:"ActivityFailed"|"ActivityScheduled"|"ActivityScheduleFailed"|"ActivityStarted"|"ActivitySucceeded"|"ActivityTimedOut"|"ChoiceStateEntered"|"ChoiceStateExited"|"ExecutionAborted"|"ExecutionFailed"|"ExecutionStarted"|"ExecutionSucceeded"|"ExecutionTimedOut"|"FailStateEntered"|"LambdaFunctionFailed"|"LambdaFunctionScheduled"|"LambdaFunctionScheduleFailed"|"LambdaFunctionStarted"|"LambdaFunctionStartFailed"|"LambdaFunctionSucceeded"|"LambdaFunctionTimedOut"|"MapIterationAborted"|"MapIterationFailed"|"MapIterationStarted"|"MapIterationSucceeded"|"MapStateAborted"|"MapStateEntered"|"MapStateExited"|"MapStateFailed"|"MapStateStarted"|"MapStateSucceeded"|"ParallelStateAborted"|"ParallelStateEntered"|"ParallelStateExited"|"ParallelStateFailed"|"ParallelStateStarted"|"ParallelStateSucceeded"|"PassStateEntered"|"PassStateExited"|"SucceedStateEntered"|"SucceedStateExited"|"TaskFailed"|"TaskScheduled"|"TaskStarted"|"TaskStartFailed"|"TaskStateAborted"|"TaskStateEntered"|"TaskStateExited"|"TaskSubmitFailed"|"TaskSubmitted"|"TaskSucceeded"|"TaskTimedOut"|"WaitStateAborted"|"WaitStateEntered"|"WaitStateExited"|"MapRunAborted"|"MapRunFailed"|"MapRunStarted"|"MapRunSucceeded"|"ExecutionRedriven"|"MapRunRedriven"|"EvaluationFailed", id:int, previousEventId?:int, activityFailedEventDetails?:array{error?:string, cause?:string}, activityScheduleFailedEventDetails?:array{error?:string, cause?:string}, activityScheduledEventDetails?:array{resource:string, input?:string, inputDetails?:array{truncated?:bool}, timeoutInSeconds?:int, heartbeatInSeconds?:int}, activityStartedEventDetails?:array{workerName?:string}, activitySucceededEventDetails?:array{output?:string, outputDetails?:array{truncated?:bool}}, activityTimedOutEventDetails?:array{error?:string, cause?:string}, taskFailedEventDetails?:array{resourceType:string, resource:string, error?:string, cause?:string}, taskScheduledEventDetails?:array{resourceType:string, resource:string, region:string, parameters:string, timeoutInSeconds?:int, heartbeatInSeconds?:int, taskCredentials?:array{roleArn?:string}}, taskStartFailedEventDetails?:array{resourceType:string, resource:string, error?:string, cause?:string}, taskStartedEventDetails?:array{resourceType:string, resource:string}, taskSubmitFailedEventDetails?:array{resourceType:string, resource:string, error?:string, cause?:string}, taskSubmittedEventDetails?:array{resourceType:string, resource:string, output?:string, outputDetails?:array{truncated?:bool}}, taskSucceededEventDetails?:array{resourceType:string, resource:string, output?:string, outputDetails?:array{truncated?:bool}}, taskTimedOutEventDetails?:array{resourceType:string, resource:string, error?:string, cause?:string}, executionFailedEventDetails?:array{error?:string, cause?:string}, executionStartedEventDetails?:array{input?:string, inputDetails?:array{truncated?:bool}, roleArn?:string, stateMachineAliasArn?:string, stateMachineVersionArn?:string}, executionSucceededEventDetails?:array{output?:string, outputDetails?:array{truncated?:bool}}, executionAbortedEventDetails?:array{error?:string, cause?:string}, executionTimedOutEventDetails?:array{error?:string, cause?:string}, executionRedrivenEventDetails?:array{redriveCount?:int}, mapStateStartedEventDetails?:array{length?:int}, mapIterationStartedEventDetails?:array{name?:string, index?:int}, mapIterationSucceededEventDetails?:array{name?:string, index?:int}, mapIterationFailedEventDetails?:array{name?:string, index?:int}, mapIterationAbortedEventDetails?:array{name?:string, index?:int}, lambdaFunctionFailedEventDetails?:array{error?:string, cause?:string}, lambdaFunctionScheduleFailedEventDetails?:array{error?:string, cause?:string}, lambdaFunctionScheduledEventDetails?:array{resource:string, input?:string, inputDetails?:array{truncated?:bool}, timeoutInSeconds?:int, taskCredentials?:array{roleArn?:string}}, lambdaFunctionStartFailedEventDetails?:array{error?:string, cause?:string}, lambdaFunctionSucceededEventDetails?:array{output?:string, outputDetails?:array{truncated?:bool}}, lambdaFunctionTimedOutEventDetails?:array{error?:string, cause?:string}, stateEnteredEventDetails?:array{name:string, input?:string, inputDetails?:array{truncated?:bool}}, stateExitedEventDetails?:array{name:string, output?:string, outputDetails?:array{truncated?:bool}, assignedVariables?:array<string, string>, assignedVariablesDetails?:array{truncated?:bool}}, mapRunStartedEventDetails?:array{mapRunArn?:string}, mapRunFailedEventDetails?:array{error?:string, cause?:string}, mapRunRedrivenEventDetails?:array{mapRunArn?:string, redriveCount?:int}, evaluationFailedEventDetails?:array{error?:string, cause?:string, location?:string, state:string}}>, nextToken?:string}>
     */
    public function getExecutionHistory(array $args): \AWS\Result { }

    /**
     * @param array{executionArn:string, maxResults?:int, reverseOrder?:bool, nextToken?:string, includeExecutionData?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{events:array<array{timestamp:int|string|\DateTimeInterface, type:"ActivityFailed"|"ActivityScheduled"|"ActivityScheduleFailed"|"ActivityStarted"|"ActivitySucceeded"|"ActivityTimedOut"|"ChoiceStateEntered"|"ChoiceStateExited"|"ExecutionAborted"|"ExecutionFailed"|"ExecutionStarted"|"ExecutionSucceeded"|"ExecutionTimedOut"|"FailStateEntered"|"LambdaFunctionFailed"|"LambdaFunctionScheduled"|"LambdaFunctionScheduleFailed"|"LambdaFunctionStarted"|"LambdaFunctionStartFailed"|"LambdaFunctionSucceeded"|"LambdaFunctionTimedOut"|"MapIterationAborted"|"MapIterationFailed"|"MapIterationStarted"|"MapIterationSucceeded"|"MapStateAborted"|"MapStateEntered"|"MapStateExited"|"MapStateFailed"|"MapStateStarted"|"MapStateSucceeded"|"ParallelStateAborted"|"ParallelStateEntered"|"ParallelStateExited"|"ParallelStateFailed"|"ParallelStateStarted"|"ParallelStateSucceeded"|"PassStateEntered"|"PassStateExited"|"SucceedStateEntered"|"SucceedStateExited"|"TaskFailed"|"TaskScheduled"|"TaskStarted"|"TaskStartFailed"|"TaskStateAborted"|"TaskStateEntered"|"TaskStateExited"|"TaskSubmitFailed"|"TaskSubmitted"|"TaskSucceeded"|"TaskTimedOut"|"WaitStateAborted"|"WaitStateEntered"|"WaitStateExited"|"MapRunAborted"|"MapRunFailed"|"MapRunStarted"|"MapRunSucceeded"|"ExecutionRedriven"|"MapRunRedriven"|"EvaluationFailed", id:int, previousEventId?:int, activityFailedEventDetails?:array{error?:string, cause?:string}, activityScheduleFailedEventDetails?:array{error?:string, cause?:string}, activityScheduledEventDetails?:array{resource:string, input?:string, inputDetails?:array{truncated?:bool}, timeoutInSeconds?:int, heartbeatInSeconds?:int}, activityStartedEventDetails?:array{workerName?:string}, activitySucceededEventDetails?:array{output?:string, outputDetails?:array{truncated?:bool}}, activityTimedOutEventDetails?:array{error?:string, cause?:string}, taskFailedEventDetails?:array{resourceType:string, resource:string, error?:string, cause?:string}, taskScheduledEventDetails?:array{resourceType:string, resource:string, region:string, parameters:string, timeoutInSeconds?:int, heartbeatInSeconds?:int, taskCredentials?:array{roleArn?:string}}, taskStartFailedEventDetails?:array{resourceType:string, resource:string, error?:string, cause?:string}, taskStartedEventDetails?:array{resourceType:string, resource:string}, taskSubmitFailedEventDetails?:array{resourceType:string, resource:string, error?:string, cause?:string}, taskSubmittedEventDetails?:array{resourceType:string, resource:string, output?:string, outputDetails?:array{truncated?:bool}}, taskSucceededEventDetails?:array{resourceType:string, resource:string, output?:string, outputDetails?:array{truncated?:bool}}, taskTimedOutEventDetails?:array{resourceType:string, resource:string, error?:string, cause?:string}, executionFailedEventDetails?:array{error?:string, cause?:string}, executionStartedEventDetails?:array{input?:string, inputDetails?:array{truncated?:bool}, roleArn?:string, stateMachineAliasArn?:string, stateMachineVersionArn?:string}, executionSucceededEventDetails?:array{output?:string, outputDetails?:array{truncated?:bool}}, executionAbortedEventDetails?:array{error?:string, cause?:string}, executionTimedOutEventDetails?:array{error?:string, cause?:string}, executionRedrivenEventDetails?:array{redriveCount?:int}, mapStateStartedEventDetails?:array{length?:int}, mapIterationStartedEventDetails?:array{name?:string, index?:int}, mapIterationSucceededEventDetails?:array{name?:string, index?:int}, mapIterationFailedEventDetails?:array{name?:string, index?:int}, mapIterationAbortedEventDetails?:array{name?:string, index?:int}, lambdaFunctionFailedEventDetails?:array{error?:string, cause?:string}, lambdaFunctionScheduleFailedEventDetails?:array{error?:string, cause?:string}, lambdaFunctionScheduledEventDetails?:array{resource:string, input?:string, inputDetails?:array{truncated?:bool}, timeoutInSeconds?:int, taskCredentials?:array{roleArn?:string}}, lambdaFunctionStartFailedEventDetails?:array{error?:string, cause?:string}, lambdaFunctionSucceededEventDetails?:array{output?:string, outputDetails?:array{truncated?:bool}}, lambdaFunctionTimedOutEventDetails?:array{error?:string, cause?:string}, stateEnteredEventDetails?:array{name:string, input?:string, inputDetails?:array{truncated?:bool}}, stateExitedEventDetails?:array{name:string, output?:string, outputDetails?:array{truncated?:bool}, assignedVariables?:array<string, string>, assignedVariablesDetails?:array{truncated?:bool}}, mapRunStartedEventDetails?:array{mapRunArn?:string}, mapRunFailedEventDetails?:array{error?:string, cause?:string}, mapRunRedrivenEventDetails?:array{mapRunArn?:string, redriveCount?:int}, evaluationFailedEventDetails?:array{error?:string, cause?:string, location?:string, state:string}}>, nextToken?:string}>
     */
    public function getExecutionHistoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{activities:array<array{activityArn:string, name:string, creationDate:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listActivities(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{activities:array<array{activityArn:string, name:string, creationDate:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listActivitiesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{stateMachineArn?:string, statusFilter?:"RUNNING"|"SUCCEEDED"|"FAILED"|"TIMED_OUT"|"ABORTED"|"PENDING_REDRIVE", maxResults?:int, nextToken?:string, mapRunArn?:string, redriveFilter?:"REDRIVEN"|"NOT_REDRIVEN"} $args
     * @return \AWS\Result<array{executions:array<array{executionArn:string, stateMachineArn:string, name:string, status:"RUNNING"|"SUCCEEDED"|"FAILED"|"TIMED_OUT"|"ABORTED"|"PENDING_REDRIVE", startDate:int|string|\DateTimeInterface, stopDate?:int|string|\DateTimeInterface, mapRunArn?:string, itemCount?:int, stateMachineVersionArn?:string, stateMachineAliasArn?:string, redriveCount?:int, redriveDate?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listExecutions(array $args = []): \AWS\Result { }

    /**
     * @param array{stateMachineArn?:string, statusFilter?:"RUNNING"|"SUCCEEDED"|"FAILED"|"TIMED_OUT"|"ABORTED"|"PENDING_REDRIVE", maxResults?:int, nextToken?:string, mapRunArn?:string, redriveFilter?:"REDRIVEN"|"NOT_REDRIVEN"} $args
     * @return \GuzzleHttp\Promise\Promise<array{executions:array<array{executionArn:string, stateMachineArn:string, name:string, status:"RUNNING"|"SUCCEEDED"|"FAILED"|"TIMED_OUT"|"ABORTED"|"PENDING_REDRIVE", startDate:int|string|\DateTimeInterface, stopDate?:int|string|\DateTimeInterface, mapRunArn?:string, itemCount?:int, stateMachineVersionArn?:string, stateMachineAliasArn?:string, redriveCount?:int, redriveDate?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listExecutionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{executionArn:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{mapRuns:array<array{executionArn:string, mapRunArn:string, stateMachineArn:string, startDate:int|string|\DateTimeInterface, stopDate?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listMapRuns(array $args): \AWS\Result { }

    /**
     * @param array{executionArn:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{mapRuns:array<array{executionArn:string, mapRunArn:string, stateMachineArn:string, startDate:int|string|\DateTimeInterface, stopDate?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listMapRunsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{stateMachineArn:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{stateMachineAliases:array<array{stateMachineAliasArn:string, creationDate:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listStateMachineAliases(array $args): \AWS\Result { }

    /**
     * @param array{stateMachineArn:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{stateMachineAliases:array<array{stateMachineAliasArn:string, creationDate:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listStateMachineAliasesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{stateMachineArn:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{stateMachineVersions:array<array{stateMachineVersionArn:string, creationDate:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listStateMachineVersions(array $args): \AWS\Result { }

    /**
     * @param array{stateMachineArn:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{stateMachineVersions:array<array{stateMachineVersionArn:string, creationDate:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listStateMachineVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{stateMachines:array<array{stateMachineArn:string, name:string, type:"STANDARD"|"EXPRESS", creationDate:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listStateMachines(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{stateMachines:array<array{stateMachineArn:string, name:string, type:"STANDARD"|"EXPRESS", creationDate:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listStateMachinesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{tags?:array<array{key?:string, value?:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<array{key?:string, value?:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{stateMachineArn:string, revisionId?:string, description?:string} $args
     * @return \AWS\Result<array{creationDate:int|string|\DateTimeInterface, stateMachineVersionArn:string}>
     */
    public function publishStateMachineVersion(array $args): \AWS\Result { }

    /**
     * @param array{stateMachineArn:string, revisionId?:string, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{creationDate:int|string|\DateTimeInterface, stateMachineVersionArn:string}>
     */
    public function publishStateMachineVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{executionArn:string, clientToken?:string} $args
     * @return \AWS\Result<array{redriveDate:int|string|\DateTimeInterface}>
     */
    public function redriveExecution(array $args): \AWS\Result { }

    /**
     * @param array{executionArn:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{redriveDate:int|string|\DateTimeInterface}>
     */
    public function redriveExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{taskToken:string, error?:string, cause?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function sendTaskFailure(array $args): \AWS\Result { }

    /**
     * @param array{taskToken:string, error?:string, cause?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function sendTaskFailureAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{taskToken:string} $args
     * @return \AWS\Result<array{}>
     */
    public function sendTaskHeartbeat(array $args): \AWS\Result { }

    /**
     * @param array{taskToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function sendTaskHeartbeatAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{taskToken:string, output:string} $args
     * @return \AWS\Result<array{}>
     */
    public function sendTaskSuccess(array $args): \AWS\Result { }

    /**
     * @param array{taskToken:string, output:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function sendTaskSuccessAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{stateMachineArn:string, name?:string, input?:string, traceHeader?:string} $args
     * @return \AWS\Result<array{executionArn:string, startDate:int|string|\DateTimeInterface}>
     */
    public function startExecution(array $args): \AWS\Result { }

    /**
     * @param array{stateMachineArn:string, name?:string, input?:string, traceHeader?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{executionArn:string, startDate:int|string|\DateTimeInterface}>
     */
    public function startExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{stateMachineArn:string, name?:string, input?:string, traceHeader?:string, includedData?:"ALL_DATA"|"METADATA_ONLY"} $args
     * @return \AWS\Result<array{executionArn:string, stateMachineArn?:string, name?:string, startDate:int|string|\DateTimeInterface, stopDate:int|string|\DateTimeInterface, status:"SUCCEEDED"|"FAILED"|"TIMED_OUT", error?:string, cause?:string, input?:string, inputDetails?:array{included?:bool}, output?:string, outputDetails?:array{included?:bool}, traceHeader?:string, billingDetails?:array{billedMemoryUsedInMB?:int, billedDurationInMilliseconds?:int}}>
     */
    public function startSyncExecution(array $args): \AWS\Result { }

    /**
     * @param array{stateMachineArn:string, name?:string, input?:string, traceHeader?:string, includedData?:"ALL_DATA"|"METADATA_ONLY"} $args
     * @return \GuzzleHttp\Promise\Promise<array{executionArn:string, stateMachineArn?:string, name?:string, startDate:int|string|\DateTimeInterface, stopDate:int|string|\DateTimeInterface, status:"SUCCEEDED"|"FAILED"|"TIMED_OUT", error?:string, cause?:string, input?:string, inputDetails?:array{included?:bool}, output?:string, outputDetails?:array{included?:bool}, traceHeader?:string, billingDetails?:array{billedMemoryUsedInMB?:int, billedDurationInMilliseconds?:int}}>
     */
    public function startSyncExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{executionArn:string, error?:string, cause?:string} $args
     * @return \AWS\Result<array{stopDate:int|string|\DateTimeInterface}>
     */
    public function stopExecution(array $args): \AWS\Result { }

    /**
     * @param array{executionArn:string, error?:string, cause?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{stopDate:int|string|\DateTimeInterface}>
     */
    public function stopExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags:array<array{key?:string, value?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags:array<array{key?:string, value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{definition:string, roleArn?:string, input?:string, inspectionLevel?:"INFO"|"DEBUG"|"TRACE", revealSecrets?:bool, variables?:string} $args
     * @return \AWS\Result<array{output?:string, error?:string, cause?:string, inspectionData?:array{input?:string, afterArguments?:string, afterInputPath?:string, afterParameters?:string, result?:string, afterResultSelector?:string, afterResultPath?:string, request?:array{protocol?:string, method?:string, url?:string, headers?:string, body?:string}, response?:array{protocol?:string, statusCode?:string, statusMessage?:string, headers?:string, body?:string}, variables?:string}, nextState?:string, status?:"SUCCEEDED"|"FAILED"|"RETRIABLE"|"CAUGHT_ERROR"}>
     */
    public function testState(array $args): \AWS\Result { }

    /**
     * @param array{definition:string, roleArn?:string, input?:string, inspectionLevel?:"INFO"|"DEBUG"|"TRACE", revealSecrets?:bool, variables?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{output?:string, error?:string, cause?:string, inspectionData?:array{input?:string, afterArguments?:string, afterInputPath?:string, afterParameters?:string, result?:string, afterResultSelector?:string, afterResultPath?:string, request?:array{protocol?:string, method?:string, url?:string, headers?:string, body?:string}, response?:array{protocol?:string, statusCode?:string, statusMessage?:string, headers?:string, body?:string}, variables?:string}, nextState?:string, status?:"SUCCEEDED"|"FAILED"|"RETRIABLE"|"CAUGHT_ERROR"}>
     */
    public function testStateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{mapRunArn:string, maxConcurrency?:int, toleratedFailurePercentage?:float, toleratedFailureCount?:int} $args
     * @return \AWS\Result<array{}>
     */
    public function updateMapRun(array $args): \AWS\Result { }

    /**
     * @param array{mapRunArn:string, maxConcurrency?:int, toleratedFailurePercentage?:float, toleratedFailureCount?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateMapRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{stateMachineArn:string, definition?:string, roleArn?:string, loggingConfiguration?:array{level?:"ALL"|"ERROR"|"FATAL"|"OFF", includeExecutionData?:bool, destinations?:array<array{cloudWatchLogsLogGroup?:array{logGroupArn?:string}}>}, tracingConfiguration?:array{enabled?:bool}, publish?:bool, versionDescription?:string, encryptionConfiguration?:array{kmsKeyId?:string, kmsDataKeyReusePeriodSeconds?:int, type:"AWS_OWNED_KEY"|"CUSTOMER_MANAGED_KMS_KEY"}} $args
     * @return \AWS\Result<array{updateDate:int|string|\DateTimeInterface, revisionId?:string, stateMachineVersionArn?:string}>
     */
    public function updateStateMachine(array $args): \AWS\Result { }

    /**
     * @param array{stateMachineArn:string, definition?:string, roleArn?:string, loggingConfiguration?:array{level?:"ALL"|"ERROR"|"FATAL"|"OFF", includeExecutionData?:bool, destinations?:array<array{cloudWatchLogsLogGroup?:array{logGroupArn?:string}}>}, tracingConfiguration?:array{enabled?:bool}, publish?:bool, versionDescription?:string, encryptionConfiguration?:array{kmsKeyId?:string, kmsDataKeyReusePeriodSeconds?:int, type:"AWS_OWNED_KEY"|"CUSTOMER_MANAGED_KMS_KEY"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{updateDate:int|string|\DateTimeInterface, revisionId?:string, stateMachineVersionArn?:string}>
     */
    public function updateStateMachineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{stateMachineAliasArn:string, description?:string, routingConfiguration?:array<array{stateMachineVersionArn:string, weight:int}>} $args
     * @return \AWS\Result<array{updateDate:int|string|\DateTimeInterface}>
     */
    public function updateStateMachineAlias(array $args): \AWS\Result { }

    /**
     * @param array{stateMachineAliasArn:string, description?:string, routingConfiguration?:array<array{stateMachineVersionArn:string, weight:int}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{updateDate:int|string|\DateTimeInterface}>
     */
    public function updateStateMachineAliasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{definition:string, type?:"STANDARD"|"EXPRESS", severity?:"ERROR"|"WARNING", maxResults?:int} $args
     * @return \AWS\Result<array{result:"OK"|"FAIL", diagnostics:array<array{severity:"ERROR"|"WARNING", code:string, message:string, location?:string}>, truncated?:bool}>
     */
    public function validateStateMachineDefinition(array $args): \AWS\Result { }

    /**
     * @param array{definition:string, type?:"STANDARD"|"EXPRESS", severity?:"ERROR"|"WARNING", maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{result:"OK"|"FAIL", diagnostics:array<array{severity:"ERROR"|"WARNING", code:string, message:string, location?:string}>, truncated?:bool}>
     */
    public function validateStateMachineDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
