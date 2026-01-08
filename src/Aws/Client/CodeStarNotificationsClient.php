<?php
namespace AWS\CodeStarNotifications;

class CodeStarNotificationsClient
{
    /**
     * @param array{Name:string, EventTypeIds:array<string>, Resource:string, Targets:array<array{TargetType?:string, TargetAddress?:string}>, DetailType:"BASIC"|"FULL", ClientRequestToken?:string, Tags?:array<string, string>, Status?:"ENABLED"|"DISABLED"} $args
     * @return \AWS\Result<array{Arn?:string}>
     */
    public function createNotificationRule(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, EventTypeIds:array<string>, Resource:string, Targets:array<array{TargetType?:string, TargetAddress?:string}>, DetailType:"BASIC"|"FULL", ClientRequestToken?:string, Tags?:array<string, string>, Status?:"ENABLED"|"DISABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string}>
     */
    public function createNotificationRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string} $args
     * @return \AWS\Result<array{Arn?:string}>
     */
    public function deleteNotificationRule(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string}>
     */
    public function deleteNotificationRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TargetAddress:string, ForceUnsubscribeAll?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteTarget(array $args): \AWS\Result { }

    /**
     * @param array{TargetAddress:string, ForceUnsubscribeAll?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteTargetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string} $args
     * @return \AWS\Result<array{Arn:string, Name?:string, EventTypes?:array<array{EventTypeId?:string, ServiceName?:string, EventTypeName?:string, ResourceType?:string}>, Resource?:string, Targets?:array<array{TargetAddress?:string, TargetType?:string, TargetStatus?:"PENDING"|"ACTIVE"|"UNREACHABLE"|"INACTIVE"|"DEACTIVATED"}>, DetailType?:"BASIC"|"FULL", CreatedBy?:string, Status?:"ENABLED"|"DISABLED", CreatedTimestamp?:int|string|\DateTimeInterface, LastModifiedTimestamp?:int|string|\DateTimeInterface, Tags?:array<string, string>}>
     */
    public function describeNotificationRule(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn:string, Name?:string, EventTypes?:array<array{EventTypeId?:string, ServiceName?:string, EventTypeName?:string, ResourceType?:string}>, Resource?:string, Targets?:array<array{TargetAddress?:string, TargetType?:string, TargetStatus?:"PENDING"|"ACTIVE"|"UNREACHABLE"|"INACTIVE"|"DEACTIVATED"}>, DetailType?:"BASIC"|"FULL", CreatedBy?:string, Status?:"ENABLED"|"DISABLED", CreatedTimestamp?:int|string|\DateTimeInterface, LastModifiedTimestamp?:int|string|\DateTimeInterface, Tags?:array<string, string>}>
     */
    public function describeNotificationRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array<array{Name:"RESOURCE_TYPE"|"SERVICE_NAME", Value:string}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{EventTypes?:array<array{EventTypeId?:string, ServiceName?:string, EventTypeName?:string, ResourceType?:string}>, NextToken?:string}>
     */
    public function listEventTypes(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array<array{Name:"RESOURCE_TYPE"|"SERVICE_NAME", Value:string}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventTypes?:array<array{EventTypeId?:string, ServiceName?:string, EventTypeName?:string, ResourceType?:string}>, NextToken?:string}>
     */
    public function listEventTypesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array<array{Name:"EVENT_TYPE_ID"|"CREATED_BY"|"RESOURCE"|"TARGET_ADDRESS", Value:string}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, NotificationRules?:array<array{Id?:string, Arn?:string}>}>
     */
    public function listNotificationRules(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array<array{Name:"EVENT_TYPE_ID"|"CREATED_BY"|"RESOURCE"|"TARGET_ADDRESS", Value:string}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, NotificationRules?:array<array{Id?:string, Arn?:string}>}>
     */
    public function listNotificationRulesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string} $args
     * @return \AWS\Result<array{Tags?:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array<array{Name:"TARGET_TYPE"|"TARGET_ADDRESS"|"TARGET_STATUS", Value:string}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Targets?:array<array{TargetAddress?:string, TargetType?:string, TargetStatus?:"PENDING"|"ACTIVE"|"UNREACHABLE"|"INACTIVE"|"DEACTIVATED"}>, NextToken?:string}>
     */
    public function listTargets(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array<array{Name:"TARGET_TYPE"|"TARGET_ADDRESS"|"TARGET_STATUS", Value:string}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Targets?:array<array{TargetAddress?:string, TargetType?:string, TargetStatus?:"PENDING"|"ACTIVE"|"UNREACHABLE"|"INACTIVE"|"DEACTIVATED"}>, NextToken?:string}>
     */
    public function listTargetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string, Target:array{TargetType?:string, TargetAddress?:string}, ClientRequestToken?:string} $args
     * @return \AWS\Result<array{Arn?:string}>
     */
    public function subscribe(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, Target:array{TargetType?:string, TargetAddress?:string}, ClientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string}>
     */
    public function subscribeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string, Tags:array<string, string>} $args
     * @return \AWS\Result<array{Tags?:array<string, string>}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, Tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<string, string>}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string, TargetAddress:string} $args
     * @return \AWS\Result<array{Arn:string}>
     */
    public function unsubscribe(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, TargetAddress:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn:string}>
     */
    public function unsubscribeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string, Name?:string, Status?:"ENABLED"|"DISABLED", EventTypeIds?:array<string>, Targets?:array<array{TargetType?:string, TargetAddress?:string}>, DetailType?:"BASIC"|"FULL"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateNotificationRule(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, Name?:string, Status?:"ENABLED"|"DISABLED", EventTypeIds?:array<string>, Targets?:array<array{TargetType?:string, TargetAddress?:string}>, DetailType?:"BASIC"|"FULL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateNotificationRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
