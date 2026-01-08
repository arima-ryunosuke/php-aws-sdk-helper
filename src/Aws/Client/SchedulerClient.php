<?php
namespace AWS\Scheduler;

class SchedulerClient
{
    /**
     * @param array{ActionAfterCompletion?:"NONE"|"DELETE", ClientToken?:string, Description?:string, EndDate?:int|string|\DateTimeInterface, FlexibleTimeWindow:array{MaximumWindowInMinutes?:int, Mode:"OFF"|"FLEXIBLE"}, GroupName?:string, KmsKeyArn?:string, Name:string, ScheduleExpression:string, ScheduleExpressionTimezone?:string, StartDate?:int|string|\DateTimeInterface, State?:"ENABLED"|"DISABLED", Target:array{Arn:string, DeadLetterConfig?:array{Arn?:string}, EcsParameters?:array{CapacityProviderStrategy?:array<array{base?:int, capacityProvider:string, weight?:int}>, EnableECSManagedTags?:bool, EnableExecuteCommand?:bool, Group?:string, LaunchType?:"EC2"|"FARGATE"|"EXTERNAL", NetworkConfiguration?:array{awsvpcConfiguration?:array{AssignPublicIp?:"ENABLED"|"DISABLED", SecurityGroups?:array<string>, Subnets:array<string>}}, PlacementConstraints?:array<array{expression?:string, type?:"distinctInstance"|"memberOf"}>, PlacementStrategy?:array<array{field?:string, type?:"random"|"spread"|"binpack"}>, PlatformVersion?:string, PropagateTags?:"TASK_DEFINITION", ReferenceId?:string, Tags?:array<array<string, string>>, TaskCount?:int, TaskDefinitionArn:string}, EventBridgeParameters?:array{DetailType:string, Source:string}, Input?:string, KinesisParameters?:array{PartitionKey:string}, RetryPolicy?:array{MaximumEventAgeInSeconds?:int, MaximumRetryAttempts?:int}, RoleArn:string, SageMakerPipelineParameters?:array{PipelineParameterList?:array<array{Name:string, Value:string}>}, SqsParameters?:array{MessageGroupId?:string}}} $args
     * @return \AWS\Result<array{ScheduleArn:string}>
     */
    public function createSchedule(array $args): \AWS\Result { }

    /**
     * @param array{ActionAfterCompletion?:"NONE"|"DELETE", ClientToken?:string, Description?:string, EndDate?:int|string|\DateTimeInterface, FlexibleTimeWindow:array{MaximumWindowInMinutes?:int, Mode:"OFF"|"FLEXIBLE"}, GroupName?:string, KmsKeyArn?:string, Name:string, ScheduleExpression:string, ScheduleExpressionTimezone?:string, StartDate?:int|string|\DateTimeInterface, State?:"ENABLED"|"DISABLED", Target:array{Arn:string, DeadLetterConfig?:array{Arn?:string}, EcsParameters?:array{CapacityProviderStrategy?:array<array{base?:int, capacityProvider:string, weight?:int}>, EnableECSManagedTags?:bool, EnableExecuteCommand?:bool, Group?:string, LaunchType?:"EC2"|"FARGATE"|"EXTERNAL", NetworkConfiguration?:array{awsvpcConfiguration?:array{AssignPublicIp?:"ENABLED"|"DISABLED", SecurityGroups?:array<string>, Subnets:array<string>}}, PlacementConstraints?:array<array{expression?:string, type?:"distinctInstance"|"memberOf"}>, PlacementStrategy?:array<array{field?:string, type?:"random"|"spread"|"binpack"}>, PlatformVersion?:string, PropagateTags?:"TASK_DEFINITION", ReferenceId?:string, Tags?:array<array<string, string>>, TaskCount?:int, TaskDefinitionArn:string}, EventBridgeParameters?:array{DetailType:string, Source:string}, Input?:string, KinesisParameters?:array{PartitionKey:string}, RetryPolicy?:array{MaximumEventAgeInSeconds?:int, MaximumRetryAttempts?:int}, RoleArn:string, SageMakerPipelineParameters?:array{PipelineParameterList?:array<array{Name:string, Value:string}>}, SqsParameters?:array{MessageGroupId?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ScheduleArn:string}>
     */
    public function createScheduleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, Name:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{ScheduleGroupArn:string}>
     */
    public function createScheduleGroup(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, Name:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ScheduleGroupArn:string}>
     */
    public function createScheduleGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, GroupName?:string, Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSchedule(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, GroupName?:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteScheduleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteScheduleGroup(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteScheduleGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupName?:string, Name:string} $args
     * @return \AWS\Result<array{ActionAfterCompletion?:"NONE"|"DELETE", Arn?:string, CreationDate?:int|string|\DateTimeInterface, Description?:string, EndDate?:int|string|\DateTimeInterface, FlexibleTimeWindow?:array{MaximumWindowInMinutes?:int, Mode:"OFF"|"FLEXIBLE"}, GroupName?:string, KmsKeyArn?:string, LastModificationDate?:int|string|\DateTimeInterface, Name?:string, ScheduleExpression?:string, ScheduleExpressionTimezone?:string, StartDate?:int|string|\DateTimeInterface, State?:"ENABLED"|"DISABLED", Target?:array{Arn:string, DeadLetterConfig?:array{Arn?:string}, EcsParameters?:array{CapacityProviderStrategy?:array<array{base?:int, capacityProvider:string, weight?:int}>, EnableECSManagedTags?:bool, EnableExecuteCommand?:bool, Group?:string, LaunchType?:"EC2"|"FARGATE"|"EXTERNAL", NetworkConfiguration?:array{awsvpcConfiguration?:array{AssignPublicIp?:"ENABLED"|"DISABLED", SecurityGroups?:array<string>, Subnets:array<string>}}, PlacementConstraints?:array<array{expression?:string, type?:"distinctInstance"|"memberOf"}>, PlacementStrategy?:array<array{field?:string, type?:"random"|"spread"|"binpack"}>, PlatformVersion?:string, PropagateTags?:"TASK_DEFINITION", ReferenceId?:string, Tags?:array<array<string, string>>, TaskCount?:int, TaskDefinitionArn:string}, EventBridgeParameters?:array{DetailType:string, Source:string}, Input?:string, KinesisParameters?:array{PartitionKey:string}, RetryPolicy?:array{MaximumEventAgeInSeconds?:int, MaximumRetryAttempts?:int}, RoleArn:string, SageMakerPipelineParameters?:array{PipelineParameterList?:array<array{Name:string, Value:string}>}, SqsParameters?:array{MessageGroupId?:string}}}>
     */
    public function getSchedule(array $args): \AWS\Result { }

    /**
     * @param array{GroupName?:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ActionAfterCompletion?:"NONE"|"DELETE", Arn?:string, CreationDate?:int|string|\DateTimeInterface, Description?:string, EndDate?:int|string|\DateTimeInterface, FlexibleTimeWindow?:array{MaximumWindowInMinutes?:int, Mode:"OFF"|"FLEXIBLE"}, GroupName?:string, KmsKeyArn?:string, LastModificationDate?:int|string|\DateTimeInterface, Name?:string, ScheduleExpression?:string, ScheduleExpressionTimezone?:string, StartDate?:int|string|\DateTimeInterface, State?:"ENABLED"|"DISABLED", Target?:array{Arn:string, DeadLetterConfig?:array{Arn?:string}, EcsParameters?:array{CapacityProviderStrategy?:array<array{base?:int, capacityProvider:string, weight?:int}>, EnableECSManagedTags?:bool, EnableExecuteCommand?:bool, Group?:string, LaunchType?:"EC2"|"FARGATE"|"EXTERNAL", NetworkConfiguration?:array{awsvpcConfiguration?:array{AssignPublicIp?:"ENABLED"|"DISABLED", SecurityGroups?:array<string>, Subnets:array<string>}}, PlacementConstraints?:array<array{expression?:string, type?:"distinctInstance"|"memberOf"}>, PlacementStrategy?:array<array{field?:string, type?:"random"|"spread"|"binpack"}>, PlatformVersion?:string, PropagateTags?:"TASK_DEFINITION", ReferenceId?:string, Tags?:array<array<string, string>>, TaskCount?:int, TaskDefinitionArn:string}, EventBridgeParameters?:array{DetailType:string, Source:string}, Input?:string, KinesisParameters?:array{PartitionKey:string}, RetryPolicy?:array{MaximumEventAgeInSeconds?:int, MaximumRetryAttempts?:int}, RoleArn:string, SageMakerPipelineParameters?:array{PipelineParameterList?:array<array{Name:string, Value:string}>}, SqsParameters?:array{MessageGroupId?:string}}}>
     */
    public function getScheduleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{Arn?:string, CreationDate?:int|string|\DateTimeInterface, LastModificationDate?:int|string|\DateTimeInterface, Name?:string, State?:"ACTIVE"|"DELETING"}>
     */
    public function getScheduleGroup(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationDate?:int|string|\DateTimeInterface, LastModificationDate?:int|string|\DateTimeInterface, Name?:string, State?:"ACTIVE"|"DELETING"}>
     */
    public function getScheduleGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NamePrefix?:string, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, ScheduleGroups:array<array{Arn?:string, CreationDate?:int|string|\DateTimeInterface, LastModificationDate?:int|string|\DateTimeInterface, Name?:string, State?:"ACTIVE"|"DELETING"}>}>
     */
    public function listScheduleGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NamePrefix?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, ScheduleGroups:array<array{Arn?:string, CreationDate?:int|string|\DateTimeInterface, LastModificationDate?:int|string|\DateTimeInterface, Name?:string, State?:"ACTIVE"|"DELETING"}>}>
     */
    public function listScheduleGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupName?:string, MaxResults?:int, NamePrefix?:string, NextToken?:string, State?:"ENABLED"|"DISABLED"} $args
     * @return \AWS\Result<array{NextToken?:string, Schedules:array<array{Arn?:string, CreationDate?:int|string|\DateTimeInterface, GroupName?:string, LastModificationDate?:int|string|\DateTimeInterface, Name?:string, State?:"ENABLED"|"DISABLED", Target?:array{Arn:string}}>}>
     */
    public function listSchedules(array $args = []): \AWS\Result { }

    /**
     * @param array{GroupName?:string, MaxResults?:int, NamePrefix?:string, NextToken?:string, State?:"ENABLED"|"DISABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Schedules:array<array{Arn?:string, CreationDate?:int|string|\DateTimeInterface, GroupName?:string, LastModificationDate?:int|string|\DateTimeInterface, Name?:string, State?:"ENABLED"|"DISABLED", Target?:array{Arn:string}}>}>
     */
    public function listSchedulesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ActionAfterCompletion?:"NONE"|"DELETE", ClientToken?:string, Description?:string, EndDate?:int|string|\DateTimeInterface, FlexibleTimeWindow:array{MaximumWindowInMinutes?:int, Mode:"OFF"|"FLEXIBLE"}, GroupName?:string, KmsKeyArn?:string, Name:string, ScheduleExpression:string, ScheduleExpressionTimezone?:string, StartDate?:int|string|\DateTimeInterface, State?:"ENABLED"|"DISABLED", Target:array{Arn:string, DeadLetterConfig?:array{Arn?:string}, EcsParameters?:array{CapacityProviderStrategy?:array<array{base?:int, capacityProvider:string, weight?:int}>, EnableECSManagedTags?:bool, EnableExecuteCommand?:bool, Group?:string, LaunchType?:"EC2"|"FARGATE"|"EXTERNAL", NetworkConfiguration?:array{awsvpcConfiguration?:array{AssignPublicIp?:"ENABLED"|"DISABLED", SecurityGroups?:array<string>, Subnets:array<string>}}, PlacementConstraints?:array<array{expression?:string, type?:"distinctInstance"|"memberOf"}>, PlacementStrategy?:array<array{field?:string, type?:"random"|"spread"|"binpack"}>, PlatformVersion?:string, PropagateTags?:"TASK_DEFINITION", ReferenceId?:string, Tags?:array<array<string, string>>, TaskCount?:int, TaskDefinitionArn:string}, EventBridgeParameters?:array{DetailType:string, Source:string}, Input?:string, KinesisParameters?:array{PartitionKey:string}, RetryPolicy?:array{MaximumEventAgeInSeconds?:int, MaximumRetryAttempts?:int}, RoleArn:string, SageMakerPipelineParameters?:array{PipelineParameterList?:array<array{Name:string, Value:string}>}, SqsParameters?:array{MessageGroupId?:string}}} $args
     * @return \AWS\Result<array{ScheduleArn:string}>
     */
    public function updateSchedule(array $args): \AWS\Result { }

    /**
     * @param array{ActionAfterCompletion?:"NONE"|"DELETE", ClientToken?:string, Description?:string, EndDate?:int|string|\DateTimeInterface, FlexibleTimeWindow:array{MaximumWindowInMinutes?:int, Mode:"OFF"|"FLEXIBLE"}, GroupName?:string, KmsKeyArn?:string, Name:string, ScheduleExpression:string, ScheduleExpressionTimezone?:string, StartDate?:int|string|\DateTimeInterface, State?:"ENABLED"|"DISABLED", Target:array{Arn:string, DeadLetterConfig?:array{Arn?:string}, EcsParameters?:array{CapacityProviderStrategy?:array<array{base?:int, capacityProvider:string, weight?:int}>, EnableECSManagedTags?:bool, EnableExecuteCommand?:bool, Group?:string, LaunchType?:"EC2"|"FARGATE"|"EXTERNAL", NetworkConfiguration?:array{awsvpcConfiguration?:array{AssignPublicIp?:"ENABLED"|"DISABLED", SecurityGroups?:array<string>, Subnets:array<string>}}, PlacementConstraints?:array<array{expression?:string, type?:"distinctInstance"|"memberOf"}>, PlacementStrategy?:array<array{field?:string, type?:"random"|"spread"|"binpack"}>, PlatformVersion?:string, PropagateTags?:"TASK_DEFINITION", ReferenceId?:string, Tags?:array<array<string, string>>, TaskCount?:int, TaskDefinitionArn:string}, EventBridgeParameters?:array{DetailType:string, Source:string}, Input?:string, KinesisParameters?:array{PartitionKey:string}, RetryPolicy?:array{MaximumEventAgeInSeconds?:int, MaximumRetryAttempts?:int}, RoleArn:string, SageMakerPipelineParameters?:array{PipelineParameterList?:array<array{Name:string, Value:string}>}, SqsParameters?:array{MessageGroupId?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ScheduleArn:string}>
     */
    public function updateScheduleAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
