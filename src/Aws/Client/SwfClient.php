<?php
namespace AWS\Swf;

class SwfClient
{
    /**
     * @param array{domain:string, startTimeFilter?:array{oldestDate:int|string|\DateTimeInterface, latestDate?:int|string|\DateTimeInterface}, closeTimeFilter?:array{oldestDate:int|string|\DateTimeInterface, latestDate?:int|string|\DateTimeInterface}, executionFilter?:array{workflowId:string}, typeFilter?:array{name:string, version?:string}, tagFilter?:array{tag:string}, closeStatusFilter?:array{status:"COMPLETED"|"FAILED"|"CANCELED"|"TERMINATED"|"CONTINUED_AS_NEW"|"TIMED_OUT"}} $args
     * @return \AWS\Result<array{count:int, truncated?:bool}>
     */
    public function countClosedWorkflowExecutions(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, startTimeFilter?:array{oldestDate:int|string|\DateTimeInterface, latestDate?:int|string|\DateTimeInterface}, closeTimeFilter?:array{oldestDate:int|string|\DateTimeInterface, latestDate?:int|string|\DateTimeInterface}, executionFilter?:array{workflowId:string}, typeFilter?:array{name:string, version?:string}, tagFilter?:array{tag:string}, closeStatusFilter?:array{status:"COMPLETED"|"FAILED"|"CANCELED"|"TERMINATED"|"CONTINUED_AS_NEW"|"TIMED_OUT"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{count:int, truncated?:bool}>
     */
    public function countClosedWorkflowExecutionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, startTimeFilter:array{oldestDate:int|string|\DateTimeInterface, latestDate?:int|string|\DateTimeInterface}, typeFilter?:array{name:string, version?:string}, tagFilter?:array{tag:string}, executionFilter?:array{workflowId:string}} $args
     * @return \AWS\Result<array{count:int, truncated?:bool}>
     */
    public function countOpenWorkflowExecutions(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, startTimeFilter:array{oldestDate:int|string|\DateTimeInterface, latestDate?:int|string|\DateTimeInterface}, typeFilter?:array{name:string, version?:string}, tagFilter?:array{tag:string}, executionFilter?:array{workflowId:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{count:int, truncated?:bool}>
     */
    public function countOpenWorkflowExecutionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, taskList:array{name:string}} $args
     * @return \AWS\Result<array{count:int, truncated?:bool}>
     */
    public function countPendingActivityTasks(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, taskList:array{name:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{count:int, truncated?:bool}>
     */
    public function countPendingActivityTasksAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, taskList:array{name:string}} $args
     * @return \AWS\Result<array{count:int, truncated?:bool}>
     */
    public function countPendingDecisionTasks(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, taskList:array{name:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{count:int, truncated?:bool}>
     */
    public function countPendingDecisionTasksAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, activityType:array{name:string, version:string}} $args
     * @return \AWS\Result<void>
     */
    public function deleteActivityType(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, activityType:array{name:string, version:string}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteActivityTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, workflowType:array{name:string, version:string}} $args
     * @return \AWS\Result<void>
     */
    public function deleteWorkflowType(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, workflowType:array{name:string, version:string}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteWorkflowTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, activityType:array{name:string, version:string}} $args
     * @return \AWS\Result<void>
     */
    public function deprecateActivityType(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, activityType:array{name:string, version:string}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deprecateActivityTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<void>
     */
    public function deprecateDomain(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deprecateDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, workflowType:array{name:string, version:string}} $args
     * @return \AWS\Result<void>
     */
    public function deprecateWorkflowType(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, workflowType:array{name:string, version:string}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deprecateWorkflowTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, activityType:array{name:string, version:string}} $args
     * @return \AWS\Result<array{typeInfo:array{activityType:array{name:string, version:string}, status:"REGISTERED"|"DEPRECATED", description?:string, creationDate:int|string|\DateTimeInterface, deprecationDate?:int|string|\DateTimeInterface}, configuration:array{defaultTaskStartToCloseTimeout?:string, defaultTaskHeartbeatTimeout?:string, defaultTaskList?:array{name:string}, defaultTaskPriority?:string, defaultTaskScheduleToStartTimeout?:string, defaultTaskScheduleToCloseTimeout?:string}}>
     */
    public function describeActivityType(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, activityType:array{name:string, version:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{typeInfo:array{activityType:array{name:string, version:string}, status:"REGISTERED"|"DEPRECATED", description?:string, creationDate:int|string|\DateTimeInterface, deprecationDate?:int|string|\DateTimeInterface}, configuration:array{defaultTaskStartToCloseTimeout?:string, defaultTaskHeartbeatTimeout?:string, defaultTaskList?:array{name:string}, defaultTaskPriority?:string, defaultTaskScheduleToStartTimeout?:string, defaultTaskScheduleToCloseTimeout?:string}}>
     */
    public function describeActivityTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{domainInfo:array{name:string, status:"REGISTERED"|"DEPRECATED", description?:string, arn?:string}, configuration:array{workflowExecutionRetentionPeriodInDays:string}}>
     */
    public function describeDomain(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{domainInfo:array{name:string, status:"REGISTERED"|"DEPRECATED", description?:string, arn?:string}, configuration:array{workflowExecutionRetentionPeriodInDays:string}}>
     */
    public function describeDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, execution:array{workflowId:string, runId:string}} $args
     * @return \AWS\Result<array{executionInfo:array{execution:array{workflowId:string, runId:string}, workflowType:array{name:string, version:string}, startTimestamp:int|string|\DateTimeInterface, closeTimestamp?:int|string|\DateTimeInterface, executionStatus:"OPEN"|"CLOSED", closeStatus?:"COMPLETED"|"FAILED"|"CANCELED"|"TERMINATED"|"CONTINUED_AS_NEW"|"TIMED_OUT", parent?:array{workflowId:string, runId:string}, tagList?:array<string>, cancelRequested?:bool}, executionConfiguration:array{taskStartToCloseTimeout:string, executionStartToCloseTimeout:string, taskList:array{name:string}, taskPriority?:string, childPolicy:"TERMINATE"|"REQUEST_CANCEL"|"ABANDON", lambdaRole?:string}, openCounts:array{openActivityTasks:int, openDecisionTasks:int, openTimers:int, openChildWorkflowExecutions:int, openLambdaFunctions?:int}, latestActivityTaskTimestamp?:int|string|\DateTimeInterface, latestExecutionContext?:string}>
     */
    public function describeWorkflowExecution(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, execution:array{workflowId:string, runId:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{executionInfo:array{execution:array{workflowId:string, runId:string}, workflowType:array{name:string, version:string}, startTimestamp:int|string|\DateTimeInterface, closeTimestamp?:int|string|\DateTimeInterface, executionStatus:"OPEN"|"CLOSED", closeStatus?:"COMPLETED"|"FAILED"|"CANCELED"|"TERMINATED"|"CONTINUED_AS_NEW"|"TIMED_OUT", parent?:array{workflowId:string, runId:string}, tagList?:array<string>, cancelRequested?:bool}, executionConfiguration:array{taskStartToCloseTimeout:string, executionStartToCloseTimeout:string, taskList:array{name:string}, taskPriority?:string, childPolicy:"TERMINATE"|"REQUEST_CANCEL"|"ABANDON", lambdaRole?:string}, openCounts:array{openActivityTasks:int, openDecisionTasks:int, openTimers:int, openChildWorkflowExecutions:int, openLambdaFunctions?:int}, latestActivityTaskTimestamp?:int|string|\DateTimeInterface, latestExecutionContext?:string}>
     */
    public function describeWorkflowExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, workflowType:array{name:string, version:string}} $args
     * @return \AWS\Result<array{typeInfo:array{workflowType:array{name:string, version:string}, status:"REGISTERED"|"DEPRECATED", description?:string, creationDate:int|string|\DateTimeInterface, deprecationDate?:int|string|\DateTimeInterface}, configuration:array{defaultTaskStartToCloseTimeout?:string, defaultExecutionStartToCloseTimeout?:string, defaultTaskList?:array{name:string}, defaultTaskPriority?:string, defaultChildPolicy?:"TERMINATE"|"REQUEST_CANCEL"|"ABANDON", defaultLambdaRole?:string}}>
     */
    public function describeWorkflowType(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, workflowType:array{name:string, version:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{typeInfo:array{workflowType:array{name:string, version:string}, status:"REGISTERED"|"DEPRECATED", description?:string, creationDate:int|string|\DateTimeInterface, deprecationDate?:int|string|\DateTimeInterface}, configuration:array{defaultTaskStartToCloseTimeout?:string, defaultExecutionStartToCloseTimeout?:string, defaultTaskList?:array{name:string}, defaultTaskPriority?:string, defaultChildPolicy?:"TERMINATE"|"REQUEST_CANCEL"|"ABANDON", defaultLambdaRole?:string}}>
     */
    public function describeWorkflowTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, execution:array{workflowId:string, runId:string}, nextPageToken?:string, maximumPageSize?:int, reverseOrder?:bool} $args
     * @return \AWS\Result<array{events:array<array{eventTimestamp:int|string|\DateTimeInterface, eventType:"WorkflowExecutionStarted"|"WorkflowExecutionCancelRequested"|"WorkflowExecutionCompleted"|"CompleteWorkflowExecutionFailed"|"WorkflowExecutionFailed"|"FailWorkflowExecutionFailed"|"WorkflowExecutionTimedOut"|"WorkflowExecutionCanceled"|"CancelWorkflowExecutionFailed"|"WorkflowExecutionContinuedAsNew"|"ContinueAsNewWorkflowExecutionFailed"|"WorkflowExecutionTerminated"|"DecisionTaskScheduled"|"DecisionTaskStarted"|"DecisionTaskCompleted"|"DecisionTaskTimedOut"|"ActivityTaskScheduled"|"ScheduleActivityTaskFailed"|"ActivityTaskStarted"|"ActivityTaskCompleted"|"ActivityTaskFailed"|"ActivityTaskTimedOut"|"ActivityTaskCanceled"|"ActivityTaskCancelRequested"|"RequestCancelActivityTaskFailed"|"WorkflowExecutionSignaled"|"MarkerRecorded"|"RecordMarkerFailed"|"TimerStarted"|"StartTimerFailed"|"TimerFired"|"TimerCanceled"|"CancelTimerFailed"|"StartChildWorkflowExecutionInitiated"|"StartChildWorkflowExecutionFailed"|"ChildWorkflowExecutionStarted"|"ChildWorkflowExecutionCompleted"|"ChildWorkflowExecutionFailed"|"ChildWorkflowExecutionTimedOut"|"ChildWorkflowExecutionCanceled"|"ChildWorkflowExecutionTerminated"|"SignalExternalWorkflowExecutionInitiated"|"SignalExternalWorkflowExecutionFailed"|"ExternalWorkflowExecutionSignaled"|"RequestCancelExternalWorkflowExecutionInitiated"|"RequestCancelExternalWorkflowExecutionFailed"|"ExternalWorkflowExecutionCancelRequested"|"LambdaFunctionScheduled"|"LambdaFunctionStarted"|"LambdaFunctionCompleted"|"LambdaFunctionFailed"|"LambdaFunctionTimedOut"|"ScheduleLambdaFunctionFailed"|"StartLambdaFunctionFailed", eventId:int, workflowExecutionStartedEventAttributes?:array{input?:string, executionStartToCloseTimeout?:string, taskStartToCloseTimeout?:string, childPolicy:"TERMINATE"|"REQUEST_CANCEL"|"ABANDON", taskList:array{name:string}, taskPriority?:string, workflowType:array{name:string, version:string}, tagList?:array<string>, continuedExecutionRunId?:string, parentWorkflowExecution?:array{workflowId:string, runId:string}, parentInitiatedEventId?:int, lambdaRole?:string}, workflowExecutionCompletedEventAttributes?:array{result?:string, decisionTaskCompletedEventId:int}, completeWorkflowExecutionFailedEventAttributes?:array{cause:"UNHANDLED_DECISION"|"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, workflowExecutionFailedEventAttributes?:array{reason?:string, details?:string, decisionTaskCompletedEventId:int}, failWorkflowExecutionFailedEventAttributes?:array{cause:"UNHANDLED_DECISION"|"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, workflowExecutionTimedOutEventAttributes?:array{timeoutType:"START_TO_CLOSE", childPolicy:"TERMINATE"|"REQUEST_CANCEL"|"ABANDON"}, workflowExecutionCanceledEventAttributes?:array{details?:string, decisionTaskCompletedEventId:int}, cancelWorkflowExecutionFailedEventAttributes?:array{cause:"UNHANDLED_DECISION"|"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, workflowExecutionContinuedAsNewEventAttributes?:array{input?:string, decisionTaskCompletedEventId:int, newExecutionRunId:string, executionStartToCloseTimeout?:string, taskList:array{name:string}, taskPriority?:string, taskStartToCloseTimeout?:string, childPolicy:"TERMINATE"|"REQUEST_CANCEL"|"ABANDON", tagList?:array<string>, workflowType:array{name:string, version:string}, lambdaRole?:string}, continueAsNewWorkflowExecutionFailedEventAttributes?:array{cause:"UNHANDLED_DECISION"|"WORKFLOW_TYPE_DEPRECATED"|"WORKFLOW_TYPE_DOES_NOT_EXIST"|"DEFAULT_EXECUTION_START_TO_CLOSE_TIMEOUT_UNDEFINED"|"DEFAULT_TASK_START_TO_CLOSE_TIMEOUT_UNDEFINED"|"DEFAULT_TASK_LIST_UNDEFINED"|"DEFAULT_CHILD_POLICY_UNDEFINED"|"CONTINUE_AS_NEW_WORKFLOW_EXECUTION_RATE_EXCEEDED"|"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, workflowExecutionTerminatedEventAttributes?:array{reason?:string, details?:string, childPolicy:"TERMINATE"|"REQUEST_CANCEL"|"ABANDON", cause?:"CHILD_POLICY_APPLIED"|"EVENT_LIMIT_EXCEEDED"|"OPERATOR_INITIATED"}, workflowExecutionCancelRequestedEventAttributes?:array{externalWorkflowExecution?:array{workflowId:string, runId:string}, externalInitiatedEventId?:int, cause?:"CHILD_POLICY_APPLIED"}, decisionTaskScheduledEventAttributes?:array{taskList:array{name:string}, taskPriority?:string, startToCloseTimeout?:string, scheduleToStartTimeout?:string}, decisionTaskStartedEventAttributes?:array{identity?:string, scheduledEventId:int}, decisionTaskCompletedEventAttributes?:array{executionContext?:string, scheduledEventId:int, startedEventId:int, taskList?:array{name:string}, taskListScheduleToStartTimeout?:string}, decisionTaskTimedOutEventAttributes?:array{timeoutType:"START_TO_CLOSE"|"SCHEDULE_TO_START", scheduledEventId:int, startedEventId:int}, activityTaskScheduledEventAttributes?:array{activityType:array{name:string, version:string}, activityId:string, input?:string, control?:string, scheduleToStartTimeout?:string, scheduleToCloseTimeout?:string, startToCloseTimeout?:string, taskList:array{name:string}, taskPriority?:string, decisionTaskCompletedEventId:int, heartbeatTimeout?:string}, activityTaskStartedEventAttributes?:array{identity?:string, scheduledEventId:int}, activityTaskCompletedEventAttributes?:array{result?:string, scheduledEventId:int, startedEventId:int}, activityTaskFailedEventAttributes?:array{reason?:string, details?:string, scheduledEventId:int, startedEventId:int}, activityTaskTimedOutEventAttributes?:array{timeoutType:"START_TO_CLOSE"|"SCHEDULE_TO_START"|"SCHEDULE_TO_CLOSE"|"HEARTBEAT", scheduledEventId:int, startedEventId:int, details?:string}, activityTaskCanceledEventAttributes?:array{details?:string, scheduledEventId:int, startedEventId:int, latestCancelRequestedEventId?:int}, activityTaskCancelRequestedEventAttributes?:array{decisionTaskCompletedEventId:int, activityId:string}, workflowExecutionSignaledEventAttributes?:array{signalName:string, input?:string, externalWorkflowExecution?:array{workflowId:string, runId:string}, externalInitiatedEventId?:int}, markerRecordedEventAttributes?:array{markerName:string, details?:string, decisionTaskCompletedEventId:int}, recordMarkerFailedEventAttributes?:array{markerName:string, cause:"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, timerStartedEventAttributes?:array{timerId:string, control?:string, startToFireTimeout:string, decisionTaskCompletedEventId:int}, timerFiredEventAttributes?:array{timerId:string, startedEventId:int}, timerCanceledEventAttributes?:array{timerId:string, startedEventId:int, decisionTaskCompletedEventId:int}, startChildWorkflowExecutionInitiatedEventAttributes?:array{workflowId:string, workflowType:array{name:string, version:string}, control?:string, input?:string, executionStartToCloseTimeout?:string, taskList:array{name:string}, taskPriority?:string, decisionTaskCompletedEventId:int, childPolicy:"TERMINATE"|"REQUEST_CANCEL"|"ABANDON", taskStartToCloseTimeout?:string, tagList?:array<string>, lambdaRole?:string}, childWorkflowExecutionStartedEventAttributes?:array{workflowExecution:array{workflowId:string, runId:string}, workflowType:array{name:string, version:string}, initiatedEventId:int}, childWorkflowExecutionCompletedEventAttributes?:array{workflowExecution:array{workflowId:string, runId:string}, workflowType:array{name:string, version:string}, result?:string, initiatedEventId:int, startedEventId:int}, childWorkflowExecutionFailedEventAttributes?:array{workflowExecution:array{workflowId:string, runId:string}, workflowType:array{name:string, version:string}, reason?:string, details?:string, initiatedEventId:int, startedEventId:int}, childWorkflowExecutionTimedOutEventAttributes?:array{workflowExecution:array{workflowId:string, runId:string}, workflowType:array{name:string, version:string}, timeoutType:"START_TO_CLOSE", initiatedEventId:int, startedEventId:int}, childWorkflowExecutionCanceledEventAttributes?:array{workflowExecution:array{workflowId:string, runId:string}, workflowType:array{name:string, version:string}, details?:string, initiatedEventId:int, startedEventId:int}, childWorkflowExecutionTerminatedEventAttributes?:array{workflowExecution:array{workflowId:string, runId:string}, workflowType:array{name:string, version:string}, initiatedEventId:int, startedEventId:int}, signalExternalWorkflowExecutionInitiatedEventAttributes?:array{workflowId:string, runId?:string, signalName:string, input?:string, decisionTaskCompletedEventId:int, control?:string}, externalWorkflowExecutionSignaledEventAttributes?:array{workflowExecution:array{workflowId:string, runId:string}, initiatedEventId:int}, signalExternalWorkflowExecutionFailedEventAttributes?:array{workflowId:string, runId?:string, cause:"UNKNOWN_EXTERNAL_WORKFLOW_EXECUTION"|"SIGNAL_EXTERNAL_WORKFLOW_EXECUTION_RATE_EXCEEDED"|"OPERATION_NOT_PERMITTED", initiatedEventId:int, decisionTaskCompletedEventId:int, control?:string}, externalWorkflowExecutionCancelRequestedEventAttributes?:array{workflowExecution:array{workflowId:string, runId:string}, initiatedEventId:int}, requestCancelExternalWorkflowExecutionInitiatedEventAttributes?:array{workflowId:string, runId?:string, decisionTaskCompletedEventId:int, control?:string}, requestCancelExternalWorkflowExecutionFailedEventAttributes?:array{workflowId:string, runId?:string, cause:"UNKNOWN_EXTERNAL_WORKFLOW_EXECUTION"|"REQUEST_CANCEL_EXTERNAL_WORKFLOW_EXECUTION_RATE_EXCEEDED"|"OPERATION_NOT_PERMITTED", initiatedEventId:int, decisionTaskCompletedEventId:int, control?:string}, scheduleActivityTaskFailedEventAttributes?:array{activityType:array{name:string, version:string}, activityId:string, cause:"ACTIVITY_TYPE_DEPRECATED"|"ACTIVITY_TYPE_DOES_NOT_EXIST"|"ACTIVITY_ID_ALREADY_IN_USE"|"OPEN_ACTIVITIES_LIMIT_EXCEEDED"|"ACTIVITY_CREATION_RATE_EXCEEDED"|"DEFAULT_SCHEDULE_TO_CLOSE_TIMEOUT_UNDEFINED"|"DEFAULT_TASK_LIST_UNDEFINED"|"DEFAULT_SCHEDULE_TO_START_TIMEOUT_UNDEFINED"|"DEFAULT_START_TO_CLOSE_TIMEOUT_UNDEFINED"|"DEFAULT_HEARTBEAT_TIMEOUT_UNDEFINED"|"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, requestCancelActivityTaskFailedEventAttributes?:array{activityId:string, cause:"ACTIVITY_ID_UNKNOWN"|"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, startTimerFailedEventAttributes?:array{timerId:string, cause:"TIMER_ID_ALREADY_IN_USE"|"OPEN_TIMERS_LIMIT_EXCEEDED"|"TIMER_CREATION_RATE_EXCEEDED"|"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, cancelTimerFailedEventAttributes?:array{timerId:string, cause:"TIMER_ID_UNKNOWN"|"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, startChildWorkflowExecutionFailedEventAttributes?:array{workflowType:array{name:string, version:string}, cause:"WORKFLOW_TYPE_DOES_NOT_EXIST"|"WORKFLOW_TYPE_DEPRECATED"|"OPEN_CHILDREN_LIMIT_EXCEEDED"|"OPEN_WORKFLOWS_LIMIT_EXCEEDED"|"CHILD_CREATION_RATE_EXCEEDED"|"WORKFLOW_ALREADY_RUNNING"|"DEFAULT_EXECUTION_START_TO_CLOSE_TIMEOUT_UNDEFINED"|"DEFAULT_TASK_LIST_UNDEFINED"|"DEFAULT_TASK_START_TO_CLOSE_TIMEOUT_UNDEFINED"|"DEFAULT_CHILD_POLICY_UNDEFINED"|"OPERATION_NOT_PERMITTED", workflowId:string, initiatedEventId:int, decisionTaskCompletedEventId:int, control?:string}, lambdaFunctionScheduledEventAttributes?:array{id:string, name:string, control?:string, input?:string, startToCloseTimeout?:string, decisionTaskCompletedEventId:int}, lambdaFunctionStartedEventAttributes?:array{scheduledEventId:int}, lambdaFunctionCompletedEventAttributes?:array{scheduledEventId:int, startedEventId:int, result?:string}, lambdaFunctionFailedEventAttributes?:array{scheduledEventId:int, startedEventId:int, reason?:string, details?:string}, lambdaFunctionTimedOutEventAttributes?:array{scheduledEventId:int, startedEventId:int, timeoutType?:"START_TO_CLOSE"}, scheduleLambdaFunctionFailedEventAttributes?:array{id:string, name:string, cause:"ID_ALREADY_IN_USE"|"OPEN_LAMBDA_FUNCTIONS_LIMIT_EXCEEDED"|"LAMBDA_FUNCTION_CREATION_RATE_EXCEEDED"|"LAMBDA_SERVICE_NOT_AVAILABLE_IN_REGION", decisionTaskCompletedEventId:int}, startLambdaFunctionFailedEventAttributes?:array{scheduledEventId?:int, cause?:"ASSUME_ROLE_FAILED", message?:string}}>, nextPageToken?:string}>
     */
    public function getWorkflowExecutionHistory(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, execution:array{workflowId:string, runId:string}, nextPageToken?:string, maximumPageSize?:int, reverseOrder?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{events:array<array{eventTimestamp:int|string|\DateTimeInterface, eventType:"WorkflowExecutionStarted"|"WorkflowExecutionCancelRequested"|"WorkflowExecutionCompleted"|"CompleteWorkflowExecutionFailed"|"WorkflowExecutionFailed"|"FailWorkflowExecutionFailed"|"WorkflowExecutionTimedOut"|"WorkflowExecutionCanceled"|"CancelWorkflowExecutionFailed"|"WorkflowExecutionContinuedAsNew"|"ContinueAsNewWorkflowExecutionFailed"|"WorkflowExecutionTerminated"|"DecisionTaskScheduled"|"DecisionTaskStarted"|"DecisionTaskCompleted"|"DecisionTaskTimedOut"|"ActivityTaskScheduled"|"ScheduleActivityTaskFailed"|"ActivityTaskStarted"|"ActivityTaskCompleted"|"ActivityTaskFailed"|"ActivityTaskTimedOut"|"ActivityTaskCanceled"|"ActivityTaskCancelRequested"|"RequestCancelActivityTaskFailed"|"WorkflowExecutionSignaled"|"MarkerRecorded"|"RecordMarkerFailed"|"TimerStarted"|"StartTimerFailed"|"TimerFired"|"TimerCanceled"|"CancelTimerFailed"|"StartChildWorkflowExecutionInitiated"|"StartChildWorkflowExecutionFailed"|"ChildWorkflowExecutionStarted"|"ChildWorkflowExecutionCompleted"|"ChildWorkflowExecutionFailed"|"ChildWorkflowExecutionTimedOut"|"ChildWorkflowExecutionCanceled"|"ChildWorkflowExecutionTerminated"|"SignalExternalWorkflowExecutionInitiated"|"SignalExternalWorkflowExecutionFailed"|"ExternalWorkflowExecutionSignaled"|"RequestCancelExternalWorkflowExecutionInitiated"|"RequestCancelExternalWorkflowExecutionFailed"|"ExternalWorkflowExecutionCancelRequested"|"LambdaFunctionScheduled"|"LambdaFunctionStarted"|"LambdaFunctionCompleted"|"LambdaFunctionFailed"|"LambdaFunctionTimedOut"|"ScheduleLambdaFunctionFailed"|"StartLambdaFunctionFailed", eventId:int, workflowExecutionStartedEventAttributes?:array{input?:string, executionStartToCloseTimeout?:string, taskStartToCloseTimeout?:string, childPolicy:"TERMINATE"|"REQUEST_CANCEL"|"ABANDON", taskList:array{name:string}, taskPriority?:string, workflowType:array{name:string, version:string}, tagList?:array<string>, continuedExecutionRunId?:string, parentWorkflowExecution?:array{workflowId:string, runId:string}, parentInitiatedEventId?:int, lambdaRole?:string}, workflowExecutionCompletedEventAttributes?:array{result?:string, decisionTaskCompletedEventId:int}, completeWorkflowExecutionFailedEventAttributes?:array{cause:"UNHANDLED_DECISION"|"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, workflowExecutionFailedEventAttributes?:array{reason?:string, details?:string, decisionTaskCompletedEventId:int}, failWorkflowExecutionFailedEventAttributes?:array{cause:"UNHANDLED_DECISION"|"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, workflowExecutionTimedOutEventAttributes?:array{timeoutType:"START_TO_CLOSE", childPolicy:"TERMINATE"|"REQUEST_CANCEL"|"ABANDON"}, workflowExecutionCanceledEventAttributes?:array{details?:string, decisionTaskCompletedEventId:int}, cancelWorkflowExecutionFailedEventAttributes?:array{cause:"UNHANDLED_DECISION"|"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, workflowExecutionContinuedAsNewEventAttributes?:array{input?:string, decisionTaskCompletedEventId:int, newExecutionRunId:string, executionStartToCloseTimeout?:string, taskList:array{name:string}, taskPriority?:string, taskStartToCloseTimeout?:string, childPolicy:"TERMINATE"|"REQUEST_CANCEL"|"ABANDON", tagList?:array<string>, workflowType:array{name:string, version:string}, lambdaRole?:string}, continueAsNewWorkflowExecutionFailedEventAttributes?:array{cause:"UNHANDLED_DECISION"|"WORKFLOW_TYPE_DEPRECATED"|"WORKFLOW_TYPE_DOES_NOT_EXIST"|"DEFAULT_EXECUTION_START_TO_CLOSE_TIMEOUT_UNDEFINED"|"DEFAULT_TASK_START_TO_CLOSE_TIMEOUT_UNDEFINED"|"DEFAULT_TASK_LIST_UNDEFINED"|"DEFAULT_CHILD_POLICY_UNDEFINED"|"CONTINUE_AS_NEW_WORKFLOW_EXECUTION_RATE_EXCEEDED"|"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, workflowExecutionTerminatedEventAttributes?:array{reason?:string, details?:string, childPolicy:"TERMINATE"|"REQUEST_CANCEL"|"ABANDON", cause?:"CHILD_POLICY_APPLIED"|"EVENT_LIMIT_EXCEEDED"|"OPERATOR_INITIATED"}, workflowExecutionCancelRequestedEventAttributes?:array{externalWorkflowExecution?:array{workflowId:string, runId:string}, externalInitiatedEventId?:int, cause?:"CHILD_POLICY_APPLIED"}, decisionTaskScheduledEventAttributes?:array{taskList:array{name:string}, taskPriority?:string, startToCloseTimeout?:string, scheduleToStartTimeout?:string}, decisionTaskStartedEventAttributes?:array{identity?:string, scheduledEventId:int}, decisionTaskCompletedEventAttributes?:array{executionContext?:string, scheduledEventId:int, startedEventId:int, taskList?:array{name:string}, taskListScheduleToStartTimeout?:string}, decisionTaskTimedOutEventAttributes?:array{timeoutType:"START_TO_CLOSE"|"SCHEDULE_TO_START", scheduledEventId:int, startedEventId:int}, activityTaskScheduledEventAttributes?:array{activityType:array{name:string, version:string}, activityId:string, input?:string, control?:string, scheduleToStartTimeout?:string, scheduleToCloseTimeout?:string, startToCloseTimeout?:string, taskList:array{name:string}, taskPriority?:string, decisionTaskCompletedEventId:int, heartbeatTimeout?:string}, activityTaskStartedEventAttributes?:array{identity?:string, scheduledEventId:int}, activityTaskCompletedEventAttributes?:array{result?:string, scheduledEventId:int, startedEventId:int}, activityTaskFailedEventAttributes?:array{reason?:string, details?:string, scheduledEventId:int, startedEventId:int}, activityTaskTimedOutEventAttributes?:array{timeoutType:"START_TO_CLOSE"|"SCHEDULE_TO_START"|"SCHEDULE_TO_CLOSE"|"HEARTBEAT", scheduledEventId:int, startedEventId:int, details?:string}, activityTaskCanceledEventAttributes?:array{details?:string, scheduledEventId:int, startedEventId:int, latestCancelRequestedEventId?:int}, activityTaskCancelRequestedEventAttributes?:array{decisionTaskCompletedEventId:int, activityId:string}, workflowExecutionSignaledEventAttributes?:array{signalName:string, input?:string, externalWorkflowExecution?:array{workflowId:string, runId:string}, externalInitiatedEventId?:int}, markerRecordedEventAttributes?:array{markerName:string, details?:string, decisionTaskCompletedEventId:int}, recordMarkerFailedEventAttributes?:array{markerName:string, cause:"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, timerStartedEventAttributes?:array{timerId:string, control?:string, startToFireTimeout:string, decisionTaskCompletedEventId:int}, timerFiredEventAttributes?:array{timerId:string, startedEventId:int}, timerCanceledEventAttributes?:array{timerId:string, startedEventId:int, decisionTaskCompletedEventId:int}, startChildWorkflowExecutionInitiatedEventAttributes?:array{workflowId:string, workflowType:array{name:string, version:string}, control?:string, input?:string, executionStartToCloseTimeout?:string, taskList:array{name:string}, taskPriority?:string, decisionTaskCompletedEventId:int, childPolicy:"TERMINATE"|"REQUEST_CANCEL"|"ABANDON", taskStartToCloseTimeout?:string, tagList?:array<string>, lambdaRole?:string}, childWorkflowExecutionStartedEventAttributes?:array{workflowExecution:array{workflowId:string, runId:string}, workflowType:array{name:string, version:string}, initiatedEventId:int}, childWorkflowExecutionCompletedEventAttributes?:array{workflowExecution:array{workflowId:string, runId:string}, workflowType:array{name:string, version:string}, result?:string, initiatedEventId:int, startedEventId:int}, childWorkflowExecutionFailedEventAttributes?:array{workflowExecution:array{workflowId:string, runId:string}, workflowType:array{name:string, version:string}, reason?:string, details?:string, initiatedEventId:int, startedEventId:int}, childWorkflowExecutionTimedOutEventAttributes?:array{workflowExecution:array{workflowId:string, runId:string}, workflowType:array{name:string, version:string}, timeoutType:"START_TO_CLOSE", initiatedEventId:int, startedEventId:int}, childWorkflowExecutionCanceledEventAttributes?:array{workflowExecution:array{workflowId:string, runId:string}, workflowType:array{name:string, version:string}, details?:string, initiatedEventId:int, startedEventId:int}, childWorkflowExecutionTerminatedEventAttributes?:array{workflowExecution:array{workflowId:string, runId:string}, workflowType:array{name:string, version:string}, initiatedEventId:int, startedEventId:int}, signalExternalWorkflowExecutionInitiatedEventAttributes?:array{workflowId:string, runId?:string, signalName:string, input?:string, decisionTaskCompletedEventId:int, control?:string}, externalWorkflowExecutionSignaledEventAttributes?:array{workflowExecution:array{workflowId:string, runId:string}, initiatedEventId:int}, signalExternalWorkflowExecutionFailedEventAttributes?:array{workflowId:string, runId?:string, cause:"UNKNOWN_EXTERNAL_WORKFLOW_EXECUTION"|"SIGNAL_EXTERNAL_WORKFLOW_EXECUTION_RATE_EXCEEDED"|"OPERATION_NOT_PERMITTED", initiatedEventId:int, decisionTaskCompletedEventId:int, control?:string}, externalWorkflowExecutionCancelRequestedEventAttributes?:array{workflowExecution:array{workflowId:string, runId:string}, initiatedEventId:int}, requestCancelExternalWorkflowExecutionInitiatedEventAttributes?:array{workflowId:string, runId?:string, decisionTaskCompletedEventId:int, control?:string}, requestCancelExternalWorkflowExecutionFailedEventAttributes?:array{workflowId:string, runId?:string, cause:"UNKNOWN_EXTERNAL_WORKFLOW_EXECUTION"|"REQUEST_CANCEL_EXTERNAL_WORKFLOW_EXECUTION_RATE_EXCEEDED"|"OPERATION_NOT_PERMITTED", initiatedEventId:int, decisionTaskCompletedEventId:int, control?:string}, scheduleActivityTaskFailedEventAttributes?:array{activityType:array{name:string, version:string}, activityId:string, cause:"ACTIVITY_TYPE_DEPRECATED"|"ACTIVITY_TYPE_DOES_NOT_EXIST"|"ACTIVITY_ID_ALREADY_IN_USE"|"OPEN_ACTIVITIES_LIMIT_EXCEEDED"|"ACTIVITY_CREATION_RATE_EXCEEDED"|"DEFAULT_SCHEDULE_TO_CLOSE_TIMEOUT_UNDEFINED"|"DEFAULT_TASK_LIST_UNDEFINED"|"DEFAULT_SCHEDULE_TO_START_TIMEOUT_UNDEFINED"|"DEFAULT_START_TO_CLOSE_TIMEOUT_UNDEFINED"|"DEFAULT_HEARTBEAT_TIMEOUT_UNDEFINED"|"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, requestCancelActivityTaskFailedEventAttributes?:array{activityId:string, cause:"ACTIVITY_ID_UNKNOWN"|"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, startTimerFailedEventAttributes?:array{timerId:string, cause:"TIMER_ID_ALREADY_IN_USE"|"OPEN_TIMERS_LIMIT_EXCEEDED"|"TIMER_CREATION_RATE_EXCEEDED"|"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, cancelTimerFailedEventAttributes?:array{timerId:string, cause:"TIMER_ID_UNKNOWN"|"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, startChildWorkflowExecutionFailedEventAttributes?:array{workflowType:array{name:string, version:string}, cause:"WORKFLOW_TYPE_DOES_NOT_EXIST"|"WORKFLOW_TYPE_DEPRECATED"|"OPEN_CHILDREN_LIMIT_EXCEEDED"|"OPEN_WORKFLOWS_LIMIT_EXCEEDED"|"CHILD_CREATION_RATE_EXCEEDED"|"WORKFLOW_ALREADY_RUNNING"|"DEFAULT_EXECUTION_START_TO_CLOSE_TIMEOUT_UNDEFINED"|"DEFAULT_TASK_LIST_UNDEFINED"|"DEFAULT_TASK_START_TO_CLOSE_TIMEOUT_UNDEFINED"|"DEFAULT_CHILD_POLICY_UNDEFINED"|"OPERATION_NOT_PERMITTED", workflowId:string, initiatedEventId:int, decisionTaskCompletedEventId:int, control?:string}, lambdaFunctionScheduledEventAttributes?:array{id:string, name:string, control?:string, input?:string, startToCloseTimeout?:string, decisionTaskCompletedEventId:int}, lambdaFunctionStartedEventAttributes?:array{scheduledEventId:int}, lambdaFunctionCompletedEventAttributes?:array{scheduledEventId:int, startedEventId:int, result?:string}, lambdaFunctionFailedEventAttributes?:array{scheduledEventId:int, startedEventId:int, reason?:string, details?:string}, lambdaFunctionTimedOutEventAttributes?:array{scheduledEventId:int, startedEventId:int, timeoutType?:"START_TO_CLOSE"}, scheduleLambdaFunctionFailedEventAttributes?:array{id:string, name:string, cause:"ID_ALREADY_IN_USE"|"OPEN_LAMBDA_FUNCTIONS_LIMIT_EXCEEDED"|"LAMBDA_FUNCTION_CREATION_RATE_EXCEEDED"|"LAMBDA_SERVICE_NOT_AVAILABLE_IN_REGION", decisionTaskCompletedEventId:int}, startLambdaFunctionFailedEventAttributes?:array{scheduledEventId?:int, cause?:"ASSUME_ROLE_FAILED", message?:string}}>, nextPageToken?:string}>
     */
    public function getWorkflowExecutionHistoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, name?:string, registrationStatus:"REGISTERED"|"DEPRECATED", nextPageToken?:string, maximumPageSize?:int, reverseOrder?:bool} $args
     * @return \AWS\Result<array{typeInfos:array<array{activityType:array{name:string, version:string}, status:"REGISTERED"|"DEPRECATED", description?:string, creationDate:int|string|\DateTimeInterface, deprecationDate?:int|string|\DateTimeInterface}>, nextPageToken?:string}>
     */
    public function listActivityTypes(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, name?:string, registrationStatus:"REGISTERED"|"DEPRECATED", nextPageToken?:string, maximumPageSize?:int, reverseOrder?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{typeInfos:array<array{activityType:array{name:string, version:string}, status:"REGISTERED"|"DEPRECATED", description?:string, creationDate:int|string|\DateTimeInterface, deprecationDate?:int|string|\DateTimeInterface}>, nextPageToken?:string}>
     */
    public function listActivityTypesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, startTimeFilter?:array{oldestDate:int|string|\DateTimeInterface, latestDate?:int|string|\DateTimeInterface}, closeTimeFilter?:array{oldestDate:int|string|\DateTimeInterface, latestDate?:int|string|\DateTimeInterface}, executionFilter?:array{workflowId:string}, closeStatusFilter?:array{status:"COMPLETED"|"FAILED"|"CANCELED"|"TERMINATED"|"CONTINUED_AS_NEW"|"TIMED_OUT"}, typeFilter?:array{name:string, version?:string}, tagFilter?:array{tag:string}, nextPageToken?:string, maximumPageSize?:int, reverseOrder?:bool} $args
     * @return \AWS\Result<array{executionInfos:array<array{execution:array{workflowId:string, runId:string}, workflowType:array{name:string, version:string}, startTimestamp:int|string|\DateTimeInterface, closeTimestamp?:int|string|\DateTimeInterface, executionStatus:"OPEN"|"CLOSED", closeStatus?:"COMPLETED"|"FAILED"|"CANCELED"|"TERMINATED"|"CONTINUED_AS_NEW"|"TIMED_OUT", parent?:array{workflowId:string, runId:string}, tagList?:array<string>, cancelRequested?:bool}>, nextPageToken?:string}>
     */
    public function listClosedWorkflowExecutions(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, startTimeFilter?:array{oldestDate:int|string|\DateTimeInterface, latestDate?:int|string|\DateTimeInterface}, closeTimeFilter?:array{oldestDate:int|string|\DateTimeInterface, latestDate?:int|string|\DateTimeInterface}, executionFilter?:array{workflowId:string}, closeStatusFilter?:array{status:"COMPLETED"|"FAILED"|"CANCELED"|"TERMINATED"|"CONTINUED_AS_NEW"|"TIMED_OUT"}, typeFilter?:array{name:string, version?:string}, tagFilter?:array{tag:string}, nextPageToken?:string, maximumPageSize?:int, reverseOrder?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{executionInfos:array<array{execution:array{workflowId:string, runId:string}, workflowType:array{name:string, version:string}, startTimestamp:int|string|\DateTimeInterface, closeTimestamp?:int|string|\DateTimeInterface, executionStatus:"OPEN"|"CLOSED", closeStatus?:"COMPLETED"|"FAILED"|"CANCELED"|"TERMINATED"|"CONTINUED_AS_NEW"|"TIMED_OUT", parent?:array{workflowId:string, runId:string}, tagList?:array<string>, cancelRequested?:bool}>, nextPageToken?:string}>
     */
    public function listClosedWorkflowExecutionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextPageToken?:string, registrationStatus:"REGISTERED"|"DEPRECATED", maximumPageSize?:int, reverseOrder?:bool} $args
     * @return \AWS\Result<array{domainInfos:array<array{name:string, status:"REGISTERED"|"DEPRECATED", description?:string, arn?:string}>, nextPageToken?:string}>
     */
    public function listDomains(array $args): \AWS\Result { }

    /**
     * @param array{nextPageToken?:string, registrationStatus:"REGISTERED"|"DEPRECATED", maximumPageSize?:int, reverseOrder?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{domainInfos:array<array{name:string, status:"REGISTERED"|"DEPRECATED", description?:string, arn?:string}>, nextPageToken?:string}>
     */
    public function listDomainsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, startTimeFilter:array{oldestDate:int|string|\DateTimeInterface, latestDate?:int|string|\DateTimeInterface}, typeFilter?:array{name:string, version?:string}, tagFilter?:array{tag:string}, nextPageToken?:string, maximumPageSize?:int, reverseOrder?:bool, executionFilter?:array{workflowId:string}} $args
     * @return \AWS\Result<array{executionInfos:array<array{execution:array{workflowId:string, runId:string}, workflowType:array{name:string, version:string}, startTimestamp:int|string|\DateTimeInterface, closeTimestamp?:int|string|\DateTimeInterface, executionStatus:"OPEN"|"CLOSED", closeStatus?:"COMPLETED"|"FAILED"|"CANCELED"|"TERMINATED"|"CONTINUED_AS_NEW"|"TIMED_OUT", parent?:array{workflowId:string, runId:string}, tagList?:array<string>, cancelRequested?:bool}>, nextPageToken?:string}>
     */
    public function listOpenWorkflowExecutions(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, startTimeFilter:array{oldestDate:int|string|\DateTimeInterface, latestDate?:int|string|\DateTimeInterface}, typeFilter?:array{name:string, version?:string}, tagFilter?:array{tag:string}, nextPageToken?:string, maximumPageSize?:int, reverseOrder?:bool, executionFilter?:array{workflowId:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{executionInfos:array<array{execution:array{workflowId:string, runId:string}, workflowType:array{name:string, version:string}, startTimestamp:int|string|\DateTimeInterface, closeTimestamp?:int|string|\DateTimeInterface, executionStatus:"OPEN"|"CLOSED", closeStatus?:"COMPLETED"|"FAILED"|"CANCELED"|"TERMINATED"|"CONTINUED_AS_NEW"|"TIMED_OUT", parent?:array{workflowId:string, runId:string}, tagList?:array<string>, cancelRequested?:bool}>, nextPageToken?:string}>
     */
    public function listOpenWorkflowExecutionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{tags?:array<array{key:string, value?:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<array{key:string, value?:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, name?:string, registrationStatus:"REGISTERED"|"DEPRECATED", nextPageToken?:string, maximumPageSize?:int, reverseOrder?:bool} $args
     * @return \AWS\Result<array{typeInfos:array<array{workflowType:array{name:string, version:string}, status:"REGISTERED"|"DEPRECATED", description?:string, creationDate:int|string|\DateTimeInterface, deprecationDate?:int|string|\DateTimeInterface}>, nextPageToken?:string}>
     */
    public function listWorkflowTypes(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, name?:string, registrationStatus:"REGISTERED"|"DEPRECATED", nextPageToken?:string, maximumPageSize?:int, reverseOrder?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{typeInfos:array<array{workflowType:array{name:string, version:string}, status:"REGISTERED"|"DEPRECATED", description?:string, creationDate:int|string|\DateTimeInterface, deprecationDate?:int|string|\DateTimeInterface}>, nextPageToken?:string}>
     */
    public function listWorkflowTypesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, taskList:array{name:string}, identity?:string} $args
     * @return \AWS\Result<array{taskToken:string, activityId:string, startedEventId:int, workflowExecution:array{workflowId:string, runId:string}, activityType:array{name:string, version:string}, input?:string}>
     */
    public function pollForActivityTask(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, taskList:array{name:string}, identity?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{taskToken:string, activityId:string, startedEventId:int, workflowExecution:array{workflowId:string, runId:string}, activityType:array{name:string, version:string}, input?:string}>
     */
    public function pollForActivityTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, taskList:array{name:string}, identity?:string, nextPageToken?:string, maximumPageSize?:int, reverseOrder?:bool, startAtPreviousStartedEvent?:bool} $args
     * @return \AWS\Result<array{taskToken:string, startedEventId:int, workflowExecution:array{workflowId:string, runId:string}, workflowType:array{name:string, version:string}, events:array<array{eventTimestamp:int|string|\DateTimeInterface, eventType:"WorkflowExecutionStarted"|"WorkflowExecutionCancelRequested"|"WorkflowExecutionCompleted"|"CompleteWorkflowExecutionFailed"|"WorkflowExecutionFailed"|"FailWorkflowExecutionFailed"|"WorkflowExecutionTimedOut"|"WorkflowExecutionCanceled"|"CancelWorkflowExecutionFailed"|"WorkflowExecutionContinuedAsNew"|"ContinueAsNewWorkflowExecutionFailed"|"WorkflowExecutionTerminated"|"DecisionTaskScheduled"|"DecisionTaskStarted"|"DecisionTaskCompleted"|"DecisionTaskTimedOut"|"ActivityTaskScheduled"|"ScheduleActivityTaskFailed"|"ActivityTaskStarted"|"ActivityTaskCompleted"|"ActivityTaskFailed"|"ActivityTaskTimedOut"|"ActivityTaskCanceled"|"ActivityTaskCancelRequested"|"RequestCancelActivityTaskFailed"|"WorkflowExecutionSignaled"|"MarkerRecorded"|"RecordMarkerFailed"|"TimerStarted"|"StartTimerFailed"|"TimerFired"|"TimerCanceled"|"CancelTimerFailed"|"StartChildWorkflowExecutionInitiated"|"StartChildWorkflowExecutionFailed"|"ChildWorkflowExecutionStarted"|"ChildWorkflowExecutionCompleted"|"ChildWorkflowExecutionFailed"|"ChildWorkflowExecutionTimedOut"|"ChildWorkflowExecutionCanceled"|"ChildWorkflowExecutionTerminated"|"SignalExternalWorkflowExecutionInitiated"|"SignalExternalWorkflowExecutionFailed"|"ExternalWorkflowExecutionSignaled"|"RequestCancelExternalWorkflowExecutionInitiated"|"RequestCancelExternalWorkflowExecutionFailed"|"ExternalWorkflowExecutionCancelRequested"|"LambdaFunctionScheduled"|"LambdaFunctionStarted"|"LambdaFunctionCompleted"|"LambdaFunctionFailed"|"LambdaFunctionTimedOut"|"ScheduleLambdaFunctionFailed"|"StartLambdaFunctionFailed", eventId:int, workflowExecutionStartedEventAttributes?:array{input?:string, executionStartToCloseTimeout?:string, taskStartToCloseTimeout?:string, childPolicy:"TERMINATE"|"REQUEST_CANCEL"|"ABANDON", taskList:array{name:string}, taskPriority?:string, workflowType:array{name:string, version:string}, tagList?:array<string>, continuedExecutionRunId?:string, parentWorkflowExecution?:array{workflowId:string, runId:string}, parentInitiatedEventId?:int, lambdaRole?:string}, workflowExecutionCompletedEventAttributes?:array{result?:string, decisionTaskCompletedEventId:int}, completeWorkflowExecutionFailedEventAttributes?:array{cause:"UNHANDLED_DECISION"|"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, workflowExecutionFailedEventAttributes?:array{reason?:string, details?:string, decisionTaskCompletedEventId:int}, failWorkflowExecutionFailedEventAttributes?:array{cause:"UNHANDLED_DECISION"|"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, workflowExecutionTimedOutEventAttributes?:array{timeoutType:"START_TO_CLOSE", childPolicy:"TERMINATE"|"REQUEST_CANCEL"|"ABANDON"}, workflowExecutionCanceledEventAttributes?:array{details?:string, decisionTaskCompletedEventId:int}, cancelWorkflowExecutionFailedEventAttributes?:array{cause:"UNHANDLED_DECISION"|"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, workflowExecutionContinuedAsNewEventAttributes?:array{input?:string, decisionTaskCompletedEventId:int, newExecutionRunId:string, executionStartToCloseTimeout?:string, taskList:array{name:string}, taskPriority?:string, taskStartToCloseTimeout?:string, childPolicy:"TERMINATE"|"REQUEST_CANCEL"|"ABANDON", tagList?:array<string>, workflowType:array{name:string, version:string}, lambdaRole?:string}, continueAsNewWorkflowExecutionFailedEventAttributes?:array{cause:"UNHANDLED_DECISION"|"WORKFLOW_TYPE_DEPRECATED"|"WORKFLOW_TYPE_DOES_NOT_EXIST"|"DEFAULT_EXECUTION_START_TO_CLOSE_TIMEOUT_UNDEFINED"|"DEFAULT_TASK_START_TO_CLOSE_TIMEOUT_UNDEFINED"|"DEFAULT_TASK_LIST_UNDEFINED"|"DEFAULT_CHILD_POLICY_UNDEFINED"|"CONTINUE_AS_NEW_WORKFLOW_EXECUTION_RATE_EXCEEDED"|"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, workflowExecutionTerminatedEventAttributes?:array{reason?:string, details?:string, childPolicy:"TERMINATE"|"REQUEST_CANCEL"|"ABANDON", cause?:"CHILD_POLICY_APPLIED"|"EVENT_LIMIT_EXCEEDED"|"OPERATOR_INITIATED"}, workflowExecutionCancelRequestedEventAttributes?:array{externalWorkflowExecution?:array{workflowId:string, runId:string}, externalInitiatedEventId?:int, cause?:"CHILD_POLICY_APPLIED"}, decisionTaskScheduledEventAttributes?:array{taskList:array{name:string}, taskPriority?:string, startToCloseTimeout?:string, scheduleToStartTimeout?:string}, decisionTaskStartedEventAttributes?:array{identity?:string, scheduledEventId:int}, decisionTaskCompletedEventAttributes?:array{executionContext?:string, scheduledEventId:int, startedEventId:int, taskList?:array{name:string}, taskListScheduleToStartTimeout?:string}, decisionTaskTimedOutEventAttributes?:array{timeoutType:"START_TO_CLOSE"|"SCHEDULE_TO_START", scheduledEventId:int, startedEventId:int}, activityTaskScheduledEventAttributes?:array{activityType:array{name:string, version:string}, activityId:string, input?:string, control?:string, scheduleToStartTimeout?:string, scheduleToCloseTimeout?:string, startToCloseTimeout?:string, taskList:array{name:string}, taskPriority?:string, decisionTaskCompletedEventId:int, heartbeatTimeout?:string}, activityTaskStartedEventAttributes?:array{identity?:string, scheduledEventId:int}, activityTaskCompletedEventAttributes?:array{result?:string, scheduledEventId:int, startedEventId:int}, activityTaskFailedEventAttributes?:array{reason?:string, details?:string, scheduledEventId:int, startedEventId:int}, activityTaskTimedOutEventAttributes?:array{timeoutType:"START_TO_CLOSE"|"SCHEDULE_TO_START"|"SCHEDULE_TO_CLOSE"|"HEARTBEAT", scheduledEventId:int, startedEventId:int, details?:string}, activityTaskCanceledEventAttributes?:array{details?:string, scheduledEventId:int, startedEventId:int, latestCancelRequestedEventId?:int}, activityTaskCancelRequestedEventAttributes?:array{decisionTaskCompletedEventId:int, activityId:string}, workflowExecutionSignaledEventAttributes?:array{signalName:string, input?:string, externalWorkflowExecution?:array{workflowId:string, runId:string}, externalInitiatedEventId?:int}, markerRecordedEventAttributes?:array{markerName:string, details?:string, decisionTaskCompletedEventId:int}, recordMarkerFailedEventAttributes?:array{markerName:string, cause:"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, timerStartedEventAttributes?:array{timerId:string, control?:string, startToFireTimeout:string, decisionTaskCompletedEventId:int}, timerFiredEventAttributes?:array{timerId:string, startedEventId:int}, timerCanceledEventAttributes?:array{timerId:string, startedEventId:int, decisionTaskCompletedEventId:int}, startChildWorkflowExecutionInitiatedEventAttributes?:array{workflowId:string, workflowType:array{name:string, version:string}, control?:string, input?:string, executionStartToCloseTimeout?:string, taskList:array{name:string}, taskPriority?:string, decisionTaskCompletedEventId:int, childPolicy:"TERMINATE"|"REQUEST_CANCEL"|"ABANDON", taskStartToCloseTimeout?:string, tagList?:array<string>, lambdaRole?:string}, childWorkflowExecutionStartedEventAttributes?:array{workflowExecution:array{workflowId:string, runId:string}, workflowType:array{name:string, version:string}, initiatedEventId:int}, childWorkflowExecutionCompletedEventAttributes?:array{workflowExecution:array{workflowId:string, runId:string}, workflowType:array{name:string, version:string}, result?:string, initiatedEventId:int, startedEventId:int}, childWorkflowExecutionFailedEventAttributes?:array{workflowExecution:array{workflowId:string, runId:string}, workflowType:array{name:string, version:string}, reason?:string, details?:string, initiatedEventId:int, startedEventId:int}, childWorkflowExecutionTimedOutEventAttributes?:array{workflowExecution:array{workflowId:string, runId:string}, workflowType:array{name:string, version:string}, timeoutType:"START_TO_CLOSE", initiatedEventId:int, startedEventId:int}, childWorkflowExecutionCanceledEventAttributes?:array{workflowExecution:array{workflowId:string, runId:string}, workflowType:array{name:string, version:string}, details?:string, initiatedEventId:int, startedEventId:int}, childWorkflowExecutionTerminatedEventAttributes?:array{workflowExecution:array{workflowId:string, runId:string}, workflowType:array{name:string, version:string}, initiatedEventId:int, startedEventId:int}, signalExternalWorkflowExecutionInitiatedEventAttributes?:array{workflowId:string, runId?:string, signalName:string, input?:string, decisionTaskCompletedEventId:int, control?:string}, externalWorkflowExecutionSignaledEventAttributes?:array{workflowExecution:array{workflowId:string, runId:string}, initiatedEventId:int}, signalExternalWorkflowExecutionFailedEventAttributes?:array{workflowId:string, runId?:string, cause:"UNKNOWN_EXTERNAL_WORKFLOW_EXECUTION"|"SIGNAL_EXTERNAL_WORKFLOW_EXECUTION_RATE_EXCEEDED"|"OPERATION_NOT_PERMITTED", initiatedEventId:int, decisionTaskCompletedEventId:int, control?:string}, externalWorkflowExecutionCancelRequestedEventAttributes?:array{workflowExecution:array{workflowId:string, runId:string}, initiatedEventId:int}, requestCancelExternalWorkflowExecutionInitiatedEventAttributes?:array{workflowId:string, runId?:string, decisionTaskCompletedEventId:int, control?:string}, requestCancelExternalWorkflowExecutionFailedEventAttributes?:array{workflowId:string, runId?:string, cause:"UNKNOWN_EXTERNAL_WORKFLOW_EXECUTION"|"REQUEST_CANCEL_EXTERNAL_WORKFLOW_EXECUTION_RATE_EXCEEDED"|"OPERATION_NOT_PERMITTED", initiatedEventId:int, decisionTaskCompletedEventId:int, control?:string}, scheduleActivityTaskFailedEventAttributes?:array{activityType:array{name:string, version:string}, activityId:string, cause:"ACTIVITY_TYPE_DEPRECATED"|"ACTIVITY_TYPE_DOES_NOT_EXIST"|"ACTIVITY_ID_ALREADY_IN_USE"|"OPEN_ACTIVITIES_LIMIT_EXCEEDED"|"ACTIVITY_CREATION_RATE_EXCEEDED"|"DEFAULT_SCHEDULE_TO_CLOSE_TIMEOUT_UNDEFINED"|"DEFAULT_TASK_LIST_UNDEFINED"|"DEFAULT_SCHEDULE_TO_START_TIMEOUT_UNDEFINED"|"DEFAULT_START_TO_CLOSE_TIMEOUT_UNDEFINED"|"DEFAULT_HEARTBEAT_TIMEOUT_UNDEFINED"|"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, requestCancelActivityTaskFailedEventAttributes?:array{activityId:string, cause:"ACTIVITY_ID_UNKNOWN"|"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, startTimerFailedEventAttributes?:array{timerId:string, cause:"TIMER_ID_ALREADY_IN_USE"|"OPEN_TIMERS_LIMIT_EXCEEDED"|"TIMER_CREATION_RATE_EXCEEDED"|"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, cancelTimerFailedEventAttributes?:array{timerId:string, cause:"TIMER_ID_UNKNOWN"|"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, startChildWorkflowExecutionFailedEventAttributes?:array{workflowType:array{name:string, version:string}, cause:"WORKFLOW_TYPE_DOES_NOT_EXIST"|"WORKFLOW_TYPE_DEPRECATED"|"OPEN_CHILDREN_LIMIT_EXCEEDED"|"OPEN_WORKFLOWS_LIMIT_EXCEEDED"|"CHILD_CREATION_RATE_EXCEEDED"|"WORKFLOW_ALREADY_RUNNING"|"DEFAULT_EXECUTION_START_TO_CLOSE_TIMEOUT_UNDEFINED"|"DEFAULT_TASK_LIST_UNDEFINED"|"DEFAULT_TASK_START_TO_CLOSE_TIMEOUT_UNDEFINED"|"DEFAULT_CHILD_POLICY_UNDEFINED"|"OPERATION_NOT_PERMITTED", workflowId:string, initiatedEventId:int, decisionTaskCompletedEventId:int, control?:string}, lambdaFunctionScheduledEventAttributes?:array{id:string, name:string, control?:string, input?:string, startToCloseTimeout?:string, decisionTaskCompletedEventId:int}, lambdaFunctionStartedEventAttributes?:array{scheduledEventId:int}, lambdaFunctionCompletedEventAttributes?:array{scheduledEventId:int, startedEventId:int, result?:string}, lambdaFunctionFailedEventAttributes?:array{scheduledEventId:int, startedEventId:int, reason?:string, details?:string}, lambdaFunctionTimedOutEventAttributes?:array{scheduledEventId:int, startedEventId:int, timeoutType?:"START_TO_CLOSE"}, scheduleLambdaFunctionFailedEventAttributes?:array{id:string, name:string, cause:"ID_ALREADY_IN_USE"|"OPEN_LAMBDA_FUNCTIONS_LIMIT_EXCEEDED"|"LAMBDA_FUNCTION_CREATION_RATE_EXCEEDED"|"LAMBDA_SERVICE_NOT_AVAILABLE_IN_REGION", decisionTaskCompletedEventId:int}, startLambdaFunctionFailedEventAttributes?:array{scheduledEventId?:int, cause?:"ASSUME_ROLE_FAILED", message?:string}}>, nextPageToken?:string, previousStartedEventId?:int}>
     */
    public function pollForDecisionTask(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, taskList:array{name:string}, identity?:string, nextPageToken?:string, maximumPageSize?:int, reverseOrder?:bool, startAtPreviousStartedEvent?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{taskToken:string, startedEventId:int, workflowExecution:array{workflowId:string, runId:string}, workflowType:array{name:string, version:string}, events:array<array{eventTimestamp:int|string|\DateTimeInterface, eventType:"WorkflowExecutionStarted"|"WorkflowExecutionCancelRequested"|"WorkflowExecutionCompleted"|"CompleteWorkflowExecutionFailed"|"WorkflowExecutionFailed"|"FailWorkflowExecutionFailed"|"WorkflowExecutionTimedOut"|"WorkflowExecutionCanceled"|"CancelWorkflowExecutionFailed"|"WorkflowExecutionContinuedAsNew"|"ContinueAsNewWorkflowExecutionFailed"|"WorkflowExecutionTerminated"|"DecisionTaskScheduled"|"DecisionTaskStarted"|"DecisionTaskCompleted"|"DecisionTaskTimedOut"|"ActivityTaskScheduled"|"ScheduleActivityTaskFailed"|"ActivityTaskStarted"|"ActivityTaskCompleted"|"ActivityTaskFailed"|"ActivityTaskTimedOut"|"ActivityTaskCanceled"|"ActivityTaskCancelRequested"|"RequestCancelActivityTaskFailed"|"WorkflowExecutionSignaled"|"MarkerRecorded"|"RecordMarkerFailed"|"TimerStarted"|"StartTimerFailed"|"TimerFired"|"TimerCanceled"|"CancelTimerFailed"|"StartChildWorkflowExecutionInitiated"|"StartChildWorkflowExecutionFailed"|"ChildWorkflowExecutionStarted"|"ChildWorkflowExecutionCompleted"|"ChildWorkflowExecutionFailed"|"ChildWorkflowExecutionTimedOut"|"ChildWorkflowExecutionCanceled"|"ChildWorkflowExecutionTerminated"|"SignalExternalWorkflowExecutionInitiated"|"SignalExternalWorkflowExecutionFailed"|"ExternalWorkflowExecutionSignaled"|"RequestCancelExternalWorkflowExecutionInitiated"|"RequestCancelExternalWorkflowExecutionFailed"|"ExternalWorkflowExecutionCancelRequested"|"LambdaFunctionScheduled"|"LambdaFunctionStarted"|"LambdaFunctionCompleted"|"LambdaFunctionFailed"|"LambdaFunctionTimedOut"|"ScheduleLambdaFunctionFailed"|"StartLambdaFunctionFailed", eventId:int, workflowExecutionStartedEventAttributes?:array{input?:string, executionStartToCloseTimeout?:string, taskStartToCloseTimeout?:string, childPolicy:"TERMINATE"|"REQUEST_CANCEL"|"ABANDON", taskList:array{name:string}, taskPriority?:string, workflowType:array{name:string, version:string}, tagList?:array<string>, continuedExecutionRunId?:string, parentWorkflowExecution?:array{workflowId:string, runId:string}, parentInitiatedEventId?:int, lambdaRole?:string}, workflowExecutionCompletedEventAttributes?:array{result?:string, decisionTaskCompletedEventId:int}, completeWorkflowExecutionFailedEventAttributes?:array{cause:"UNHANDLED_DECISION"|"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, workflowExecutionFailedEventAttributes?:array{reason?:string, details?:string, decisionTaskCompletedEventId:int}, failWorkflowExecutionFailedEventAttributes?:array{cause:"UNHANDLED_DECISION"|"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, workflowExecutionTimedOutEventAttributes?:array{timeoutType:"START_TO_CLOSE", childPolicy:"TERMINATE"|"REQUEST_CANCEL"|"ABANDON"}, workflowExecutionCanceledEventAttributes?:array{details?:string, decisionTaskCompletedEventId:int}, cancelWorkflowExecutionFailedEventAttributes?:array{cause:"UNHANDLED_DECISION"|"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, workflowExecutionContinuedAsNewEventAttributes?:array{input?:string, decisionTaskCompletedEventId:int, newExecutionRunId:string, executionStartToCloseTimeout?:string, taskList:array{name:string}, taskPriority?:string, taskStartToCloseTimeout?:string, childPolicy:"TERMINATE"|"REQUEST_CANCEL"|"ABANDON", tagList?:array<string>, workflowType:array{name:string, version:string}, lambdaRole?:string}, continueAsNewWorkflowExecutionFailedEventAttributes?:array{cause:"UNHANDLED_DECISION"|"WORKFLOW_TYPE_DEPRECATED"|"WORKFLOW_TYPE_DOES_NOT_EXIST"|"DEFAULT_EXECUTION_START_TO_CLOSE_TIMEOUT_UNDEFINED"|"DEFAULT_TASK_START_TO_CLOSE_TIMEOUT_UNDEFINED"|"DEFAULT_TASK_LIST_UNDEFINED"|"DEFAULT_CHILD_POLICY_UNDEFINED"|"CONTINUE_AS_NEW_WORKFLOW_EXECUTION_RATE_EXCEEDED"|"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, workflowExecutionTerminatedEventAttributes?:array{reason?:string, details?:string, childPolicy:"TERMINATE"|"REQUEST_CANCEL"|"ABANDON", cause?:"CHILD_POLICY_APPLIED"|"EVENT_LIMIT_EXCEEDED"|"OPERATOR_INITIATED"}, workflowExecutionCancelRequestedEventAttributes?:array{externalWorkflowExecution?:array{workflowId:string, runId:string}, externalInitiatedEventId?:int, cause?:"CHILD_POLICY_APPLIED"}, decisionTaskScheduledEventAttributes?:array{taskList:array{name:string}, taskPriority?:string, startToCloseTimeout?:string, scheduleToStartTimeout?:string}, decisionTaskStartedEventAttributes?:array{identity?:string, scheduledEventId:int}, decisionTaskCompletedEventAttributes?:array{executionContext?:string, scheduledEventId:int, startedEventId:int, taskList?:array{name:string}, taskListScheduleToStartTimeout?:string}, decisionTaskTimedOutEventAttributes?:array{timeoutType:"START_TO_CLOSE"|"SCHEDULE_TO_START", scheduledEventId:int, startedEventId:int}, activityTaskScheduledEventAttributes?:array{activityType:array{name:string, version:string}, activityId:string, input?:string, control?:string, scheduleToStartTimeout?:string, scheduleToCloseTimeout?:string, startToCloseTimeout?:string, taskList:array{name:string}, taskPriority?:string, decisionTaskCompletedEventId:int, heartbeatTimeout?:string}, activityTaskStartedEventAttributes?:array{identity?:string, scheduledEventId:int}, activityTaskCompletedEventAttributes?:array{result?:string, scheduledEventId:int, startedEventId:int}, activityTaskFailedEventAttributes?:array{reason?:string, details?:string, scheduledEventId:int, startedEventId:int}, activityTaskTimedOutEventAttributes?:array{timeoutType:"START_TO_CLOSE"|"SCHEDULE_TO_START"|"SCHEDULE_TO_CLOSE"|"HEARTBEAT", scheduledEventId:int, startedEventId:int, details?:string}, activityTaskCanceledEventAttributes?:array{details?:string, scheduledEventId:int, startedEventId:int, latestCancelRequestedEventId?:int}, activityTaskCancelRequestedEventAttributes?:array{decisionTaskCompletedEventId:int, activityId:string}, workflowExecutionSignaledEventAttributes?:array{signalName:string, input?:string, externalWorkflowExecution?:array{workflowId:string, runId:string}, externalInitiatedEventId?:int}, markerRecordedEventAttributes?:array{markerName:string, details?:string, decisionTaskCompletedEventId:int}, recordMarkerFailedEventAttributes?:array{markerName:string, cause:"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, timerStartedEventAttributes?:array{timerId:string, control?:string, startToFireTimeout:string, decisionTaskCompletedEventId:int}, timerFiredEventAttributes?:array{timerId:string, startedEventId:int}, timerCanceledEventAttributes?:array{timerId:string, startedEventId:int, decisionTaskCompletedEventId:int}, startChildWorkflowExecutionInitiatedEventAttributes?:array{workflowId:string, workflowType:array{name:string, version:string}, control?:string, input?:string, executionStartToCloseTimeout?:string, taskList:array{name:string}, taskPriority?:string, decisionTaskCompletedEventId:int, childPolicy:"TERMINATE"|"REQUEST_CANCEL"|"ABANDON", taskStartToCloseTimeout?:string, tagList?:array<string>, lambdaRole?:string}, childWorkflowExecutionStartedEventAttributes?:array{workflowExecution:array{workflowId:string, runId:string}, workflowType:array{name:string, version:string}, initiatedEventId:int}, childWorkflowExecutionCompletedEventAttributes?:array{workflowExecution:array{workflowId:string, runId:string}, workflowType:array{name:string, version:string}, result?:string, initiatedEventId:int, startedEventId:int}, childWorkflowExecutionFailedEventAttributes?:array{workflowExecution:array{workflowId:string, runId:string}, workflowType:array{name:string, version:string}, reason?:string, details?:string, initiatedEventId:int, startedEventId:int}, childWorkflowExecutionTimedOutEventAttributes?:array{workflowExecution:array{workflowId:string, runId:string}, workflowType:array{name:string, version:string}, timeoutType:"START_TO_CLOSE", initiatedEventId:int, startedEventId:int}, childWorkflowExecutionCanceledEventAttributes?:array{workflowExecution:array{workflowId:string, runId:string}, workflowType:array{name:string, version:string}, details?:string, initiatedEventId:int, startedEventId:int}, childWorkflowExecutionTerminatedEventAttributes?:array{workflowExecution:array{workflowId:string, runId:string}, workflowType:array{name:string, version:string}, initiatedEventId:int, startedEventId:int}, signalExternalWorkflowExecutionInitiatedEventAttributes?:array{workflowId:string, runId?:string, signalName:string, input?:string, decisionTaskCompletedEventId:int, control?:string}, externalWorkflowExecutionSignaledEventAttributes?:array{workflowExecution:array{workflowId:string, runId:string}, initiatedEventId:int}, signalExternalWorkflowExecutionFailedEventAttributes?:array{workflowId:string, runId?:string, cause:"UNKNOWN_EXTERNAL_WORKFLOW_EXECUTION"|"SIGNAL_EXTERNAL_WORKFLOW_EXECUTION_RATE_EXCEEDED"|"OPERATION_NOT_PERMITTED", initiatedEventId:int, decisionTaskCompletedEventId:int, control?:string}, externalWorkflowExecutionCancelRequestedEventAttributes?:array{workflowExecution:array{workflowId:string, runId:string}, initiatedEventId:int}, requestCancelExternalWorkflowExecutionInitiatedEventAttributes?:array{workflowId:string, runId?:string, decisionTaskCompletedEventId:int, control?:string}, requestCancelExternalWorkflowExecutionFailedEventAttributes?:array{workflowId:string, runId?:string, cause:"UNKNOWN_EXTERNAL_WORKFLOW_EXECUTION"|"REQUEST_CANCEL_EXTERNAL_WORKFLOW_EXECUTION_RATE_EXCEEDED"|"OPERATION_NOT_PERMITTED", initiatedEventId:int, decisionTaskCompletedEventId:int, control?:string}, scheduleActivityTaskFailedEventAttributes?:array{activityType:array{name:string, version:string}, activityId:string, cause:"ACTIVITY_TYPE_DEPRECATED"|"ACTIVITY_TYPE_DOES_NOT_EXIST"|"ACTIVITY_ID_ALREADY_IN_USE"|"OPEN_ACTIVITIES_LIMIT_EXCEEDED"|"ACTIVITY_CREATION_RATE_EXCEEDED"|"DEFAULT_SCHEDULE_TO_CLOSE_TIMEOUT_UNDEFINED"|"DEFAULT_TASK_LIST_UNDEFINED"|"DEFAULT_SCHEDULE_TO_START_TIMEOUT_UNDEFINED"|"DEFAULT_START_TO_CLOSE_TIMEOUT_UNDEFINED"|"DEFAULT_HEARTBEAT_TIMEOUT_UNDEFINED"|"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, requestCancelActivityTaskFailedEventAttributes?:array{activityId:string, cause:"ACTIVITY_ID_UNKNOWN"|"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, startTimerFailedEventAttributes?:array{timerId:string, cause:"TIMER_ID_ALREADY_IN_USE"|"OPEN_TIMERS_LIMIT_EXCEEDED"|"TIMER_CREATION_RATE_EXCEEDED"|"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, cancelTimerFailedEventAttributes?:array{timerId:string, cause:"TIMER_ID_UNKNOWN"|"OPERATION_NOT_PERMITTED", decisionTaskCompletedEventId:int}, startChildWorkflowExecutionFailedEventAttributes?:array{workflowType:array{name:string, version:string}, cause:"WORKFLOW_TYPE_DOES_NOT_EXIST"|"WORKFLOW_TYPE_DEPRECATED"|"OPEN_CHILDREN_LIMIT_EXCEEDED"|"OPEN_WORKFLOWS_LIMIT_EXCEEDED"|"CHILD_CREATION_RATE_EXCEEDED"|"WORKFLOW_ALREADY_RUNNING"|"DEFAULT_EXECUTION_START_TO_CLOSE_TIMEOUT_UNDEFINED"|"DEFAULT_TASK_LIST_UNDEFINED"|"DEFAULT_TASK_START_TO_CLOSE_TIMEOUT_UNDEFINED"|"DEFAULT_CHILD_POLICY_UNDEFINED"|"OPERATION_NOT_PERMITTED", workflowId:string, initiatedEventId:int, decisionTaskCompletedEventId:int, control?:string}, lambdaFunctionScheduledEventAttributes?:array{id:string, name:string, control?:string, input?:string, startToCloseTimeout?:string, decisionTaskCompletedEventId:int}, lambdaFunctionStartedEventAttributes?:array{scheduledEventId:int}, lambdaFunctionCompletedEventAttributes?:array{scheduledEventId:int, startedEventId:int, result?:string}, lambdaFunctionFailedEventAttributes?:array{scheduledEventId:int, startedEventId:int, reason?:string, details?:string}, lambdaFunctionTimedOutEventAttributes?:array{scheduledEventId:int, startedEventId:int, timeoutType?:"START_TO_CLOSE"}, scheduleLambdaFunctionFailedEventAttributes?:array{id:string, name:string, cause:"ID_ALREADY_IN_USE"|"OPEN_LAMBDA_FUNCTIONS_LIMIT_EXCEEDED"|"LAMBDA_FUNCTION_CREATION_RATE_EXCEEDED"|"LAMBDA_SERVICE_NOT_AVAILABLE_IN_REGION", decisionTaskCompletedEventId:int}, startLambdaFunctionFailedEventAttributes?:array{scheduledEventId?:int, cause?:"ASSUME_ROLE_FAILED", message?:string}}>, nextPageToken?:string, previousStartedEventId?:int}>
     */
    public function pollForDecisionTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{taskToken:string, details?:string} $args
     * @return \AWS\Result<array{cancelRequested:bool}>
     */
    public function recordActivityTaskHeartbeat(array $args): \AWS\Result { }

    /**
     * @param array{taskToken:string, details?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{cancelRequested:bool}>
     */
    public function recordActivityTaskHeartbeatAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, name:string, version:string, description?:string, defaultTaskStartToCloseTimeout?:string, defaultTaskHeartbeatTimeout?:string, defaultTaskList?:array{name:string}, defaultTaskPriority?:string, defaultTaskScheduleToStartTimeout?:string, defaultTaskScheduleToCloseTimeout?:string} $args
     * @return \AWS\Result<void>
     */
    public function registerActivityType(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, name:string, version:string, description?:string, defaultTaskStartToCloseTimeout?:string, defaultTaskHeartbeatTimeout?:string, defaultTaskList?:array{name:string}, defaultTaskPriority?:string, defaultTaskScheduleToStartTimeout?:string, defaultTaskScheduleToCloseTimeout?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function registerActivityTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, workflowExecutionRetentionPeriodInDays:string, tags?:array<array{key:string, value?:string}>} $args
     * @return \AWS\Result<void>
     */
    public function registerDomain(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, workflowExecutionRetentionPeriodInDays:string, tags?:array<array{key:string, value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function registerDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, name:string, version:string, description?:string, defaultTaskStartToCloseTimeout?:string, defaultExecutionStartToCloseTimeout?:string, defaultTaskList?:array{name:string}, defaultTaskPriority?:string, defaultChildPolicy?:"TERMINATE"|"REQUEST_CANCEL"|"ABANDON", defaultLambdaRole?:string} $args
     * @return \AWS\Result<void>
     */
    public function registerWorkflowType(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, name:string, version:string, description?:string, defaultTaskStartToCloseTimeout?:string, defaultExecutionStartToCloseTimeout?:string, defaultTaskList?:array{name:string}, defaultTaskPriority?:string, defaultChildPolicy?:"TERMINATE"|"REQUEST_CANCEL"|"ABANDON", defaultLambdaRole?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function registerWorkflowTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, workflowId:string, runId?:string} $args
     * @return \AWS\Result<void>
     */
    public function requestCancelWorkflowExecution(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, workflowId:string, runId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function requestCancelWorkflowExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{taskToken:string, details?:string} $args
     * @return \AWS\Result<void>
     */
    public function respondActivityTaskCanceled(array $args): \AWS\Result { }

    /**
     * @param array{taskToken:string, details?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function respondActivityTaskCanceledAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{taskToken:string, result?:string} $args
     * @return \AWS\Result<void>
     */
    public function respondActivityTaskCompleted(array $args): \AWS\Result { }

    /**
     * @param array{taskToken:string, result?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function respondActivityTaskCompletedAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{taskToken:string, reason?:string, details?:string} $args
     * @return \AWS\Result<void>
     */
    public function respondActivityTaskFailed(array $args): \AWS\Result { }

    /**
     * @param array{taskToken:string, reason?:string, details?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function respondActivityTaskFailedAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{taskToken:string, decisions?:array<array{decisionType:"ScheduleActivityTask"|"RequestCancelActivityTask"|"CompleteWorkflowExecution"|"FailWorkflowExecution"|"CancelWorkflowExecution"|"ContinueAsNewWorkflowExecution"|"RecordMarker"|"StartTimer"|"CancelTimer"|"SignalExternalWorkflowExecution"|"RequestCancelExternalWorkflowExecution"|"StartChildWorkflowExecution"|"ScheduleLambdaFunction", scheduleActivityTaskDecisionAttributes?:array{activityType:array{name:string, version:string}, activityId:string, control?:string, input?:string, scheduleToCloseTimeout?:string, taskList?:array{name:string}, taskPriority?:string, scheduleToStartTimeout?:string, startToCloseTimeout?:string, heartbeatTimeout?:string}, requestCancelActivityTaskDecisionAttributes?:array{activityId:string}, completeWorkflowExecutionDecisionAttributes?:array{result?:string}, failWorkflowExecutionDecisionAttributes?:array{reason?:string, details?:string}, cancelWorkflowExecutionDecisionAttributes?:array{details?:string}, continueAsNewWorkflowExecutionDecisionAttributes?:array{input?:string, executionStartToCloseTimeout?:string, taskList?:array{name:string}, taskPriority?:string, taskStartToCloseTimeout?:string, childPolicy?:"TERMINATE"|"REQUEST_CANCEL"|"ABANDON", tagList?:array<string>, workflowTypeVersion?:string, lambdaRole?:string}, recordMarkerDecisionAttributes?:array{markerName:string, details?:string}, startTimerDecisionAttributes?:array{timerId:string, control?:string, startToFireTimeout:string}, cancelTimerDecisionAttributes?:array{timerId:string}, signalExternalWorkflowExecutionDecisionAttributes?:array{workflowId:string, runId?:string, signalName:string, input?:string, control?:string}, requestCancelExternalWorkflowExecutionDecisionAttributes?:array{workflowId:string, runId?:string, control?:string}, startChildWorkflowExecutionDecisionAttributes?:array{workflowType:array{name:string, version:string}, workflowId:string, control?:string, input?:string, executionStartToCloseTimeout?:string, taskList?:array{name:string}, taskPriority?:string, taskStartToCloseTimeout?:string, childPolicy?:"TERMINATE"|"REQUEST_CANCEL"|"ABANDON", tagList?:array<string>, lambdaRole?:string}, scheduleLambdaFunctionDecisionAttributes?:array{id:string, name:string, control?:string, input?:string, startToCloseTimeout?:string}}>, executionContext?:string, taskList?:array{name:string}, taskListScheduleToStartTimeout?:string} $args
     * @return \AWS\Result<void>
     */
    public function respondDecisionTaskCompleted(array $args): \AWS\Result { }

    /**
     * @param array{taskToken:string, decisions?:array<array{decisionType:"ScheduleActivityTask"|"RequestCancelActivityTask"|"CompleteWorkflowExecution"|"FailWorkflowExecution"|"CancelWorkflowExecution"|"ContinueAsNewWorkflowExecution"|"RecordMarker"|"StartTimer"|"CancelTimer"|"SignalExternalWorkflowExecution"|"RequestCancelExternalWorkflowExecution"|"StartChildWorkflowExecution"|"ScheduleLambdaFunction", scheduleActivityTaskDecisionAttributes?:array{activityType:array{name:string, version:string}, activityId:string, control?:string, input?:string, scheduleToCloseTimeout?:string, taskList?:array{name:string}, taskPriority?:string, scheduleToStartTimeout?:string, startToCloseTimeout?:string, heartbeatTimeout?:string}, requestCancelActivityTaskDecisionAttributes?:array{activityId:string}, completeWorkflowExecutionDecisionAttributes?:array{result?:string}, failWorkflowExecutionDecisionAttributes?:array{reason?:string, details?:string}, cancelWorkflowExecutionDecisionAttributes?:array{details?:string}, continueAsNewWorkflowExecutionDecisionAttributes?:array{input?:string, executionStartToCloseTimeout?:string, taskList?:array{name:string}, taskPriority?:string, taskStartToCloseTimeout?:string, childPolicy?:"TERMINATE"|"REQUEST_CANCEL"|"ABANDON", tagList?:array<string>, workflowTypeVersion?:string, lambdaRole?:string}, recordMarkerDecisionAttributes?:array{markerName:string, details?:string}, startTimerDecisionAttributes?:array{timerId:string, control?:string, startToFireTimeout:string}, cancelTimerDecisionAttributes?:array{timerId:string}, signalExternalWorkflowExecutionDecisionAttributes?:array{workflowId:string, runId?:string, signalName:string, input?:string, control?:string}, requestCancelExternalWorkflowExecutionDecisionAttributes?:array{workflowId:string, runId?:string, control?:string}, startChildWorkflowExecutionDecisionAttributes?:array{workflowType:array{name:string, version:string}, workflowId:string, control?:string, input?:string, executionStartToCloseTimeout?:string, taskList?:array{name:string}, taskPriority?:string, taskStartToCloseTimeout?:string, childPolicy?:"TERMINATE"|"REQUEST_CANCEL"|"ABANDON", tagList?:array<string>, lambdaRole?:string}, scheduleLambdaFunctionDecisionAttributes?:array{id:string, name:string, control?:string, input?:string, startToCloseTimeout?:string}}>, executionContext?:string, taskList?:array{name:string}, taskListScheduleToStartTimeout?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function respondDecisionTaskCompletedAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, workflowId:string, runId?:string, signalName:string, input?:string} $args
     * @return \AWS\Result<void>
     */
    public function signalWorkflowExecution(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, workflowId:string, runId?:string, signalName:string, input?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function signalWorkflowExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, workflowId:string, workflowType:array{name:string, version:string}, taskList?:array{name:string}, taskPriority?:string, input?:string, executionStartToCloseTimeout?:string, tagList?:array<string>, taskStartToCloseTimeout?:string, childPolicy?:"TERMINATE"|"REQUEST_CANCEL"|"ABANDON", lambdaRole?:string} $args
     * @return \AWS\Result<array{runId?:string}>
     */
    public function startWorkflowExecution(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, workflowId:string, workflowType:array{name:string, version:string}, taskList?:array{name:string}, taskPriority?:string, input?:string, executionStartToCloseTimeout?:string, tagList?:array<string>, taskStartToCloseTimeout?:string, childPolicy?:"TERMINATE"|"REQUEST_CANCEL"|"ABANDON", lambdaRole?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{runId?:string}>
     */
    public function startWorkflowExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags:array<array{key:string, value?:string}>} $args
     * @return \AWS\Result<void>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags:array<array{key:string, value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, workflowId:string, runId?:string, reason?:string, details?:string, childPolicy?:"TERMINATE"|"REQUEST_CANCEL"|"ABANDON"} $args
     * @return \AWS\Result<void>
     */
    public function terminateWorkflowExecution(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, workflowId:string, runId?:string, reason?:string, details?:string, childPolicy?:"TERMINATE"|"REQUEST_CANCEL"|"ABANDON"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function terminateWorkflowExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, activityType:array{name:string, version:string}} $args
     * @return \AWS\Result<void>
     */
    public function undeprecateActivityType(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, activityType:array{name:string, version:string}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function undeprecateActivityTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<void>
     */
    public function undeprecateDomain(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function undeprecateDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domain:string, workflowType:array{name:string, version:string}} $args
     * @return \AWS\Result<void>
     */
    public function undeprecateWorkflowType(array $args): \AWS\Result { }

    /**
     * @param array{domain:string, workflowType:array{name:string, version:string}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function undeprecateWorkflowTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
