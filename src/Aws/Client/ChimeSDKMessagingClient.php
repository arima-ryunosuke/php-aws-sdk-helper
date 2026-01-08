<?php
namespace AWS\ChimeSDKMessaging;

class ChimeSDKMessagingClient
{
    /**
     * @param array{ChannelArn:string, ChannelFlowArn:string, ChimeBearer:string} $args
     * @return \AWS\Result<void>
     */
    public function associateChannelFlow(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, ChannelFlowArn:string, ChimeBearer:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function associateChannelFlowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, Type?:"DEFAULT"|"HIDDEN", MemberArns:array<string>, ChimeBearer:string, SubChannelId?:string} $args
     * @return \AWS\Result<array{BatchChannelMemberships?:array{InvitedBy?:array{Arn?:string, Name?:string}, Type?:"DEFAULT"|"HIDDEN", Members?:array<array{Arn?:string, Name?:string}>, ChannelArn?:string, SubChannelId?:string}, Errors?:array<array{MemberArn?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist", ErrorMessage?:string}>}>
     */
    public function batchCreateChannelMembership(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, Type?:"DEFAULT"|"HIDDEN", MemberArns:array<string>, ChimeBearer:string, SubChannelId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BatchChannelMemberships?:array{InvitedBy?:array{Arn?:string, Name?:string}, Type?:"DEFAULT"|"HIDDEN", Members?:array<array{Arn?:string, Name?:string}>, ChannelArn?:string, SubChannelId?:string}, Errors?:array<array{MemberArn?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist", ErrorMessage?:string}>}>
     */
    public function batchCreateChannelMembershipAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CallbackId:string, ChannelArn:string, DeleteResource?:bool, ChannelMessage:array{MessageId:string, Content?:string, Metadata?:string, PushNotification?:array{Title?:string, Body?:string, Type?:"DEFAULT"|"VOIP"}, MessageAttributes?:array<string, array{StringValues?:array<string>}>, SubChannelId?:string, ContentType?:string}} $args
     * @return \AWS\Result<array{ChannelArn?:string, CallbackId?:string}>
     */
    public function channelFlowCallback(array $args): \AWS\Result { }

    /**
     * @param array{CallbackId:string, ChannelArn:string, DeleteResource?:bool, ChannelMessage:array{MessageId:string, Content?:string, Metadata?:string, PushNotification?:array{Title?:string, Body?:string, Type?:"DEFAULT"|"VOIP"}, MessageAttributes?:array<string, array{StringValues?:array<string>}>, SubChannelId?:string, ContentType?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelArn?:string, CallbackId?:string}>
     */
    public function channelFlowCallbackAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceArn:string, Name:string, Mode?:"UNRESTRICTED"|"RESTRICTED", Privacy?:"PUBLIC"|"PRIVATE", Metadata?:string, ClientRequestToken:string, Tags?:array<array{Key:string, Value:string}>, ChimeBearer:string, ChannelId?:string, MemberArns?:array<string>, ModeratorArns?:array<string>, ElasticChannelConfiguration?:array{MaximumSubChannels:int, TargetMembershipsPerSubChannel:int, MinimumMembershipPercentage:int}, ExpirationSettings?:array{ExpirationDays:int, ExpirationCriterion:"CREATED_TIMESTAMP"|"LAST_MESSAGE_TIMESTAMP"}} $args
     * @return \AWS\Result<array{ChannelArn?:string}>
     */
    public function createChannel(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceArn:string, Name:string, Mode?:"UNRESTRICTED"|"RESTRICTED", Privacy?:"PUBLIC"|"PRIVATE", Metadata?:string, ClientRequestToken:string, Tags?:array<array{Key:string, Value:string}>, ChimeBearer:string, ChannelId?:string, MemberArns?:array<string>, ModeratorArns?:array<string>, ElasticChannelConfiguration?:array{MaximumSubChannels:int, TargetMembershipsPerSubChannel:int, MinimumMembershipPercentage:int}, ExpirationSettings?:array{ExpirationDays:int, ExpirationCriterion:"CREATED_TIMESTAMP"|"LAST_MESSAGE_TIMESTAMP"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelArn?:string}>
     */
    public function createChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, MemberArn:string, ChimeBearer:string} $args
     * @return \AWS\Result<array{ChannelArn?:string, Member?:array{Arn?:string, Name?:string}}>
     */
    public function createChannelBan(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, MemberArn:string, ChimeBearer:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelArn?:string, Member?:array{Arn?:string, Name?:string}}>
     */
    public function createChannelBanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceArn:string, Processors:array<array{Name:string, Configuration:array{Lambda:array{ResourceArn:string, InvocationType:"ASYNC"}}, ExecutionOrder:int, FallbackAction:"CONTINUE"|"ABORT"}>, Name:string, Tags?:array<array{Key:string, Value:string}>, ClientRequestToken:string} $args
     * @return \AWS\Result<array{ChannelFlowArn?:string}>
     */
    public function createChannelFlow(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceArn:string, Processors:array<array{Name:string, Configuration:array{Lambda:array{ResourceArn:string, InvocationType:"ASYNC"}}, ExecutionOrder:int, FallbackAction:"CONTINUE"|"ABORT"}>, Name:string, Tags?:array<array{Key:string, Value:string}>, ClientRequestToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelFlowArn?:string}>
     */
    public function createChannelFlowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, MemberArn:string, Type:"DEFAULT"|"HIDDEN", ChimeBearer:string, SubChannelId?:string} $args
     * @return \AWS\Result<array{ChannelArn?:string, Member?:array{Arn?:string, Name?:string}, SubChannelId?:string}>
     */
    public function createChannelMembership(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, MemberArn:string, Type:"DEFAULT"|"HIDDEN", ChimeBearer:string, SubChannelId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelArn?:string, Member?:array{Arn?:string, Name?:string}, SubChannelId?:string}>
     */
    public function createChannelMembershipAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, ChannelModeratorArn:string, ChimeBearer:string} $args
     * @return \AWS\Result<array{ChannelArn?:string, ChannelModerator?:array{Arn?:string, Name?:string}}>
     */
    public function createChannelModerator(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, ChannelModeratorArn:string, ChimeBearer:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelArn?:string, ChannelModerator?:array{Arn?:string, Name?:string}}>
     */
    public function createChannelModeratorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, ChimeBearer:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteChannel(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, ChimeBearer:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, MemberArn:string, ChimeBearer:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteChannelBan(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, MemberArn:string, ChimeBearer:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteChannelBanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelFlowArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteChannelFlow(array $args): \AWS\Result { }

    /**
     * @param array{ChannelFlowArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteChannelFlowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, MemberArn:string, ChimeBearer:string, SubChannelId?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteChannelMembership(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, MemberArn:string, ChimeBearer:string, SubChannelId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteChannelMembershipAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, MessageId:string, ChimeBearer:string, SubChannelId?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteChannelMessage(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, MessageId:string, ChimeBearer:string, SubChannelId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteChannelMessageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, ChannelModeratorArn:string, ChimeBearer:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteChannelModerator(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, ChannelModeratorArn:string, ChimeBearer:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteChannelModeratorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteMessagingStreamingConfigurations(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteMessagingStreamingConfigurationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, ChimeBearer:string} $args
     * @return \AWS\Result<array{Channel?:array{Name?:string, ChannelArn?:string, Mode?:"UNRESTRICTED"|"RESTRICTED", Privacy?:"PUBLIC"|"PRIVATE", Metadata?:string, CreatedBy?:array{Arn?:string, Name?:string}, CreatedTimestamp?:int|string|\DateTimeInterface, LastMessageTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface, ChannelFlowArn?:string, ElasticChannelConfiguration?:array{MaximumSubChannels:int, TargetMembershipsPerSubChannel:int, MinimumMembershipPercentage:int}, ExpirationSettings?:array{ExpirationDays:int, ExpirationCriterion:"CREATED_TIMESTAMP"|"LAST_MESSAGE_TIMESTAMP"}}}>
     */
    public function describeChannel(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, ChimeBearer:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Channel?:array{Name?:string, ChannelArn?:string, Mode?:"UNRESTRICTED"|"RESTRICTED", Privacy?:"PUBLIC"|"PRIVATE", Metadata?:string, CreatedBy?:array{Arn?:string, Name?:string}, CreatedTimestamp?:int|string|\DateTimeInterface, LastMessageTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface, ChannelFlowArn?:string, ElasticChannelConfiguration?:array{MaximumSubChannels:int, TargetMembershipsPerSubChannel:int, MinimumMembershipPercentage:int}, ExpirationSettings?:array{ExpirationDays:int, ExpirationCriterion:"CREATED_TIMESTAMP"|"LAST_MESSAGE_TIMESTAMP"}}}>
     */
    public function describeChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, MemberArn:string, ChimeBearer:string} $args
     * @return \AWS\Result<array{ChannelBan?:array{Member?:array{Arn?:string, Name?:string}, ChannelArn?:string, CreatedTimestamp?:int|string|\DateTimeInterface, CreatedBy?:array{Arn?:string, Name?:string}}}>
     */
    public function describeChannelBan(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, MemberArn:string, ChimeBearer:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelBan?:array{Member?:array{Arn?:string, Name?:string}, ChannelArn?:string, CreatedTimestamp?:int|string|\DateTimeInterface, CreatedBy?:array{Arn?:string, Name?:string}}}>
     */
    public function describeChannelBanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelFlowArn:string} $args
     * @return \AWS\Result<array{ChannelFlow?:array{ChannelFlowArn?:string, Processors?:array<array{Name:string, Configuration:array{Lambda:array{ResourceArn:string, InvocationType:"ASYNC"}}, ExecutionOrder:int, FallbackAction:"CONTINUE"|"ABORT"}>, Name?:string, CreatedTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function describeChannelFlow(array $args): \AWS\Result { }

    /**
     * @param array{ChannelFlowArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelFlow?:array{ChannelFlowArn?:string, Processors?:array<array{Name:string, Configuration:array{Lambda:array{ResourceArn:string, InvocationType:"ASYNC"}}, ExecutionOrder:int, FallbackAction:"CONTINUE"|"ABORT"}>, Name?:string, CreatedTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function describeChannelFlowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, MemberArn:string, ChimeBearer:string, SubChannelId?:string} $args
     * @return \AWS\Result<array{ChannelMembership?:array{InvitedBy?:array{Arn?:string, Name?:string}, Type?:"DEFAULT"|"HIDDEN", Member?:array{Arn?:string, Name?:string}, ChannelArn?:string, CreatedTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface, SubChannelId?:string}}>
     */
    public function describeChannelMembership(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, MemberArn:string, ChimeBearer:string, SubChannelId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelMembership?:array{InvitedBy?:array{Arn?:string, Name?:string}, Type?:"DEFAULT"|"HIDDEN", Member?:array{Arn?:string, Name?:string}, ChannelArn?:string, CreatedTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface, SubChannelId?:string}}>
     */
    public function describeChannelMembershipAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, AppInstanceUserArn:string, ChimeBearer:string} $args
     * @return \AWS\Result<array{ChannelMembership?:array{ChannelSummary?:array{Name?:string, ChannelArn?:string, Mode?:"UNRESTRICTED"|"RESTRICTED", Privacy?:"PUBLIC"|"PRIVATE", Metadata?:string, LastMessageTimestamp?:int|string|\DateTimeInterface}, AppInstanceUserMembershipSummary?:array{Type?:"DEFAULT"|"HIDDEN", ReadMarkerTimestamp?:int|string|\DateTimeInterface, SubChannelId?:string}}}>
     */
    public function describeChannelMembershipForAppInstanceUser(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, AppInstanceUserArn:string, ChimeBearer:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelMembership?:array{ChannelSummary?:array{Name?:string, ChannelArn?:string, Mode?:"UNRESTRICTED"|"RESTRICTED", Privacy?:"PUBLIC"|"PRIVATE", Metadata?:string, LastMessageTimestamp?:int|string|\DateTimeInterface}, AppInstanceUserMembershipSummary?:array{Type?:"DEFAULT"|"HIDDEN", ReadMarkerTimestamp?:int|string|\DateTimeInterface, SubChannelId?:string}}}>
     */
    public function describeChannelMembershipForAppInstanceUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, AppInstanceUserArn:string, ChimeBearer:string} $args
     * @return \AWS\Result<array{Channel?:array{ChannelSummary?:array{Name?:string, ChannelArn?:string, Mode?:"UNRESTRICTED"|"RESTRICTED", Privacy?:"PUBLIC"|"PRIVATE", Metadata?:string, LastMessageTimestamp?:int|string|\DateTimeInterface}}}>
     */
    public function describeChannelModeratedByAppInstanceUser(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, AppInstanceUserArn:string, ChimeBearer:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Channel?:array{ChannelSummary?:array{Name?:string, ChannelArn?:string, Mode?:"UNRESTRICTED"|"RESTRICTED", Privacy?:"PUBLIC"|"PRIVATE", Metadata?:string, LastMessageTimestamp?:int|string|\DateTimeInterface}}}>
     */
    public function describeChannelModeratedByAppInstanceUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, ChannelModeratorArn:string, ChimeBearer:string} $args
     * @return \AWS\Result<array{ChannelModerator?:array{Moderator?:array{Arn?:string, Name?:string}, ChannelArn?:string, CreatedTimestamp?:int|string|\DateTimeInterface, CreatedBy?:array{Arn?:string, Name?:string}}}>
     */
    public function describeChannelModerator(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, ChannelModeratorArn:string, ChimeBearer:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelModerator?:array{Moderator?:array{Arn?:string, Name?:string}, ChannelArn?:string, CreatedTimestamp?:int|string|\DateTimeInterface, CreatedBy?:array{Arn?:string, Name?:string}}}>
     */
    public function describeChannelModeratorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, ChannelFlowArn:string, ChimeBearer:string} $args
     * @return \AWS\Result<void>
     */
    public function disassociateChannelFlow(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, ChannelFlowArn:string, ChimeBearer:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disassociateChannelFlowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, MemberArn:string, ChimeBearer:string} $args
     * @return \AWS\Result<array{ChannelArn?:string, Member?:array{Arn?:string, Name?:string}, Preferences?:array{PushNotifications?:array{AllowNotifications:"ALL"|"NONE"|"FILTERED", FilterRule?:string}}}>
     */
    public function getChannelMembershipPreferences(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, MemberArn:string, ChimeBearer:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelArn?:string, Member?:array{Arn?:string, Name?:string}, Preferences?:array{PushNotifications?:array{AllowNotifications:"ALL"|"NONE"|"FILTERED", FilterRule?:string}}}>
     */
    public function getChannelMembershipPreferencesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, MessageId:string, ChimeBearer:string, SubChannelId?:string} $args
     * @return \AWS\Result<array{ChannelMessage?:array{ChannelArn?:string, MessageId?:string, Content?:string, Metadata?:string, Type?:"STANDARD"|"CONTROL", CreatedTimestamp?:int|string|\DateTimeInterface, LastEditedTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface, Sender?:array{Arn?:string, Name?:string}, Redacted?:bool, Persistence?:"PERSISTENT"|"NON_PERSISTENT", Status?:array{Value?:"SENT"|"PENDING"|"FAILED"|"DENIED", Detail?:string}, MessageAttributes?:array<string, array{StringValues?:array<string>}>, SubChannelId?:string, ContentType?:string, Target?:array<array{MemberArn?:string}>}}>
     */
    public function getChannelMessage(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, MessageId:string, ChimeBearer:string, SubChannelId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelMessage?:array{ChannelArn?:string, MessageId?:string, Content?:string, Metadata?:string, Type?:"STANDARD"|"CONTROL", CreatedTimestamp?:int|string|\DateTimeInterface, LastEditedTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface, Sender?:array{Arn?:string, Name?:string}, Redacted?:bool, Persistence?:"PERSISTENT"|"NON_PERSISTENT", Status?:array{Value?:"SENT"|"PENDING"|"FAILED"|"DENIED", Detail?:string}, MessageAttributes?:array<string, array{StringValues?:array<string>}>, SubChannelId?:string, ContentType?:string, Target?:array<array{MemberArn?:string}>}}>
     */
    public function getChannelMessageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, MessageId:string, ChimeBearer:string, SubChannelId?:string} $args
     * @return \AWS\Result<array{Status?:array{Value?:"SENT"|"PENDING"|"FAILED"|"DENIED", Detail?:string}}>
     */
    public function getChannelMessageStatus(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, MessageId:string, ChimeBearer:string, SubChannelId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status?:array{Value?:"SENT"|"PENDING"|"FAILED"|"DENIED", Detail?:string}}>
     */
    public function getChannelMessageStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{Endpoint?:array{Url?:string}}>
     */
    public function getMessagingSessionEndpoint(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{Endpoint?:array{Url?:string}}>
     */
    public function getMessagingSessionEndpointAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceArn:string} $args
     * @return \AWS\Result<array{StreamingConfigurations?:array<array{DataType:"Channel"|"ChannelMessage", ResourceArn:string}>}>
     */
    public function getMessagingStreamingConfigurations(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StreamingConfigurations?:array<array{DataType:"Channel"|"ChannelMessage", ResourceArn:string}>}>
     */
    public function getMessagingStreamingConfigurationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, MaxResults?:int, NextToken?:string, ChimeBearer:string} $args
     * @return \AWS\Result<array{ChannelArn?:string, NextToken?:string, ChannelBans?:array<array{Member?:array{Arn?:string, Name?:string}}>}>
     */
    public function listChannelBans(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, MaxResults?:int, NextToken?:string, ChimeBearer:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelArn?:string, NextToken?:string, ChannelBans?:array<array{Member?:array{Arn?:string, Name?:string}}>}>
     */
    public function listChannelBansAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ChannelFlows?:array<array{ChannelFlowArn?:string, Name?:string, Processors?:array<array{Name:string, Configuration:array{Lambda:array{ResourceArn:string, InvocationType:"ASYNC"}}, ExecutionOrder:int, FallbackAction:"CONTINUE"|"ABORT"}>}>, NextToken?:string}>
     */
    public function listChannelFlows(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelFlows?:array<array{ChannelFlowArn?:string, Name?:string, Processors?:array<array{Name:string, Configuration:array{Lambda:array{ResourceArn:string, InvocationType:"ASYNC"}}, ExecutionOrder:int, FallbackAction:"CONTINUE"|"ABORT"}>}>, NextToken?:string}>
     */
    public function listChannelFlowsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, Type?:"DEFAULT"|"HIDDEN", MaxResults?:int, NextToken?:string, ChimeBearer:string, SubChannelId?:string} $args
     * @return \AWS\Result<array{ChannelArn?:string, ChannelMemberships?:array<array{Member?:array{Arn?:string, Name?:string}}>, NextToken?:string}>
     */
    public function listChannelMemberships(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, Type?:"DEFAULT"|"HIDDEN", MaxResults?:int, NextToken?:string, ChimeBearer:string, SubChannelId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelArn?:string, ChannelMemberships?:array<array{Member?:array{Arn?:string, Name?:string}}>, NextToken?:string}>
     */
    public function listChannelMembershipsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceUserArn?:string, MaxResults?:int, NextToken?:string, ChimeBearer:string} $args
     * @return \AWS\Result<array{ChannelMemberships?:array<array{ChannelSummary?:array{Name?:string, ChannelArn?:string, Mode?:"UNRESTRICTED"|"RESTRICTED", Privacy?:"PUBLIC"|"PRIVATE", Metadata?:string, LastMessageTimestamp?:int|string|\DateTimeInterface}, AppInstanceUserMembershipSummary?:array{Type?:"DEFAULT"|"HIDDEN", ReadMarkerTimestamp?:int|string|\DateTimeInterface, SubChannelId?:string}}>, NextToken?:string}>
     */
    public function listChannelMembershipsForAppInstanceUser(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceUserArn?:string, MaxResults?:int, NextToken?:string, ChimeBearer:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelMemberships?:array<array{ChannelSummary?:array{Name?:string, ChannelArn?:string, Mode?:"UNRESTRICTED"|"RESTRICTED", Privacy?:"PUBLIC"|"PRIVATE", Metadata?:string, LastMessageTimestamp?:int|string|\DateTimeInterface}, AppInstanceUserMembershipSummary?:array{Type?:"DEFAULT"|"HIDDEN", ReadMarkerTimestamp?:int|string|\DateTimeInterface, SubChannelId?:string}}>, NextToken?:string}>
     */
    public function listChannelMembershipsForAppInstanceUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, SortOrder?:"ASCENDING"|"DESCENDING", NotBefore?:int|string|\DateTimeInterface, NotAfter?:int|string|\DateTimeInterface, MaxResults?:int, NextToken?:string, ChimeBearer:string, SubChannelId?:string} $args
     * @return \AWS\Result<array{ChannelArn?:string, NextToken?:string, ChannelMessages?:array<array{MessageId?:string, Content?:string, Metadata?:string, Type?:"STANDARD"|"CONTROL", CreatedTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface, LastEditedTimestamp?:int|string|\DateTimeInterface, Sender?:array{Arn?:string, Name?:string}, Redacted?:bool, Status?:array{Value?:"SENT"|"PENDING"|"FAILED"|"DENIED", Detail?:string}, MessageAttributes?:array<string, array{StringValues?:array<string>}>, ContentType?:string, Target?:array<array{MemberArn?:string}>}>, SubChannelId?:string}>
     */
    public function listChannelMessages(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, SortOrder?:"ASCENDING"|"DESCENDING", NotBefore?:int|string|\DateTimeInterface, NotAfter?:int|string|\DateTimeInterface, MaxResults?:int, NextToken?:string, ChimeBearer:string, SubChannelId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelArn?:string, NextToken?:string, ChannelMessages?:array<array{MessageId?:string, Content?:string, Metadata?:string, Type?:"STANDARD"|"CONTROL", CreatedTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface, LastEditedTimestamp?:int|string|\DateTimeInterface, Sender?:array{Arn?:string, Name?:string}, Redacted?:bool, Status?:array{Value?:"SENT"|"PENDING"|"FAILED"|"DENIED", Detail?:string}, MessageAttributes?:array<string, array{StringValues?:array<string>}>, ContentType?:string, Target?:array<array{MemberArn?:string}>}>, SubChannelId?:string}>
     */
    public function listChannelMessagesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, MaxResults?:int, NextToken?:string, ChimeBearer:string} $args
     * @return \AWS\Result<array{ChannelArn?:string, NextToken?:string, ChannelModerators?:array<array{Moderator?:array{Arn?:string, Name?:string}}>}>
     */
    public function listChannelModerators(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, MaxResults?:int, NextToken?:string, ChimeBearer:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelArn?:string, NextToken?:string, ChannelModerators?:array<array{Moderator?:array{Arn?:string, Name?:string}}>}>
     */
    public function listChannelModeratorsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceArn:string, Privacy?:"PUBLIC"|"PRIVATE", MaxResults?:int, NextToken?:string, ChimeBearer:string} $args
     * @return \AWS\Result<array{Channels?:array<array{Name?:string, ChannelArn?:string, Mode?:"UNRESTRICTED"|"RESTRICTED", Privacy?:"PUBLIC"|"PRIVATE", Metadata?:string, LastMessageTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listChannels(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceArn:string, Privacy?:"PUBLIC"|"PRIVATE", MaxResults?:int, NextToken?:string, ChimeBearer:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Channels?:array<array{Name?:string, ChannelArn?:string, Mode?:"UNRESTRICTED"|"RESTRICTED", Privacy?:"PUBLIC"|"PRIVATE", Metadata?:string, LastMessageTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listChannelsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelFlowArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Channels?:array<array{Name?:string, ChannelArn?:string, Mode?:"UNRESTRICTED"|"RESTRICTED", Privacy?:"PUBLIC"|"PRIVATE", Metadata?:string}>, NextToken?:string}>
     */
    public function listChannelsAssociatedWithChannelFlow(array $args): \AWS\Result { }

    /**
     * @param array{ChannelFlowArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Channels?:array<array{Name?:string, ChannelArn?:string, Mode?:"UNRESTRICTED"|"RESTRICTED", Privacy?:"PUBLIC"|"PRIVATE", Metadata?:string}>, NextToken?:string}>
     */
    public function listChannelsAssociatedWithChannelFlowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceUserArn?:string, MaxResults?:int, NextToken?:string, ChimeBearer:string} $args
     * @return \AWS\Result<array{Channels?:array<array{ChannelSummary?:array{Name?:string, ChannelArn?:string, Mode?:"UNRESTRICTED"|"RESTRICTED", Privacy?:"PUBLIC"|"PRIVATE", Metadata?:string, LastMessageTimestamp?:int|string|\DateTimeInterface}}>, NextToken?:string}>
     */
    public function listChannelsModeratedByAppInstanceUser(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceUserArn?:string, MaxResults?:int, NextToken?:string, ChimeBearer:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Channels?:array<array{ChannelSummary?:array{Name?:string, ChannelArn?:string, Mode?:"UNRESTRICTED"|"RESTRICTED", Privacy?:"PUBLIC"|"PRIVATE", Metadata?:string, LastMessageTimestamp?:int|string|\DateTimeInterface}}>, NextToken?:string}>
     */
    public function listChannelsModeratedByAppInstanceUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, ChimeBearer:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ChannelArn?:string, SubChannels?:array<array{SubChannelId?:string, MembershipCount?:int}>, NextToken?:string}>
     */
    public function listSubChannels(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, ChimeBearer:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelArn?:string, SubChannels?:array<array{SubChannelId?:string, MembershipCount?:int}>, NextToken?:string}>
     */
    public function listSubChannelsAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{ChannelArn:string, ChimeBearer?:string, ExpirationSettings?:array{ExpirationDays:int, ExpirationCriterion:"CREATED_TIMESTAMP"|"LAST_MESSAGE_TIMESTAMP"}} $args
     * @return \AWS\Result<array{ChannelArn?:string, ExpirationSettings?:array{ExpirationDays:int, ExpirationCriterion:"CREATED_TIMESTAMP"|"LAST_MESSAGE_TIMESTAMP"}}>
     */
    public function putChannelExpirationSettings(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, ChimeBearer?:string, ExpirationSettings?:array{ExpirationDays:int, ExpirationCriterion:"CREATED_TIMESTAMP"|"LAST_MESSAGE_TIMESTAMP"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelArn?:string, ExpirationSettings?:array{ExpirationDays:int, ExpirationCriterion:"CREATED_TIMESTAMP"|"LAST_MESSAGE_TIMESTAMP"}}>
     */
    public function putChannelExpirationSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, MemberArn:string, ChimeBearer:string, Preferences:array{PushNotifications?:array{AllowNotifications:"ALL"|"NONE"|"FILTERED", FilterRule?:string}}} $args
     * @return \AWS\Result<array{ChannelArn?:string, Member?:array{Arn?:string, Name?:string}, Preferences?:array{PushNotifications?:array{AllowNotifications:"ALL"|"NONE"|"FILTERED", FilterRule?:string}}}>
     */
    public function putChannelMembershipPreferences(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, MemberArn:string, ChimeBearer:string, Preferences:array{PushNotifications?:array{AllowNotifications:"ALL"|"NONE"|"FILTERED", FilterRule?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelArn?:string, Member?:array{Arn?:string, Name?:string}, Preferences?:array{PushNotifications?:array{AllowNotifications:"ALL"|"NONE"|"FILTERED", FilterRule?:string}}}>
     */
    public function putChannelMembershipPreferencesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceArn:string, StreamingConfigurations:array<array{DataType:"Channel"|"ChannelMessage", ResourceArn:string}>} $args
     * @return \AWS\Result<array{StreamingConfigurations?:array<array{DataType:"Channel"|"ChannelMessage", ResourceArn:string}>}>
     */
    public function putMessagingStreamingConfigurations(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceArn:string, StreamingConfigurations:array<array{DataType:"Channel"|"ChannelMessage", ResourceArn:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{StreamingConfigurations?:array<array{DataType:"Channel"|"ChannelMessage", ResourceArn:string}>}>
     */
    public function putMessagingStreamingConfigurationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, MessageId:string, ChimeBearer:string, SubChannelId?:string} $args
     * @return \AWS\Result<array{ChannelArn?:string, MessageId?:string, SubChannelId?:string}>
     */
    public function redactChannelMessage(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, MessageId:string, ChimeBearer:string, SubChannelId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelArn?:string, MessageId?:string, SubChannelId?:string}>
     */
    public function redactChannelMessageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChimeBearer?:string, Fields:array<array{Key:"MEMBERS", Values:array<string>, Operator:"EQUALS"|"INCLUDES"}>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Channels?:array<array{Name?:string, ChannelArn?:string, Mode?:"UNRESTRICTED"|"RESTRICTED", Privacy?:"PUBLIC"|"PRIVATE", Metadata?:string, LastMessageTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function searchChannels(array $args): \AWS\Result { }

    /**
     * @param array{ChimeBearer?:string, Fields:array<array{Key:"MEMBERS", Values:array<string>, Operator:"EQUALS"|"INCLUDES"}>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Channels?:array<array{Name?:string, ChannelArn?:string, Mode?:"UNRESTRICTED"|"RESTRICTED", Privacy?:"PUBLIC"|"PRIVATE", Metadata?:string, LastMessageTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function searchChannelsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, Content:string, Type:"STANDARD"|"CONTROL", Persistence:"PERSISTENT"|"NON_PERSISTENT", Metadata?:string, ClientRequestToken:string, ChimeBearer:string, PushNotification?:array{Title?:string, Body?:string, Type?:"DEFAULT"|"VOIP"}, MessageAttributes?:array<string, array{StringValues?:array<string>}>, SubChannelId?:string, ContentType?:string, Target?:array<array{MemberArn?:string}>} $args
     * @return \AWS\Result<array{ChannelArn?:string, MessageId?:string, Status?:array{Value?:"SENT"|"PENDING"|"FAILED"|"DENIED", Detail?:string}, SubChannelId?:string}>
     */
    public function sendChannelMessage(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, Content:string, Type:"STANDARD"|"CONTROL", Persistence:"PERSISTENT"|"NON_PERSISTENT", Metadata?:string, ClientRequestToken:string, ChimeBearer:string, PushNotification?:array{Title?:string, Body?:string, Type?:"DEFAULT"|"VOIP"}, MessageAttributes?:array<string, array{StringValues?:array<string>}>, SubChannelId?:string, ContentType?:string, Target?:array<array{MemberArn?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelArn?:string, MessageId?:string, Status?:array{Value?:"SENT"|"PENDING"|"FAILED"|"DENIED", Detail?:string}, SubChannelId?:string}>
     */
    public function sendChannelMessageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<void>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, TagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, Name?:string, Mode?:"UNRESTRICTED"|"RESTRICTED", Metadata?:string, ChimeBearer:string} $args
     * @return \AWS\Result<array{ChannelArn?:string}>
     */
    public function updateChannel(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, Name?:string, Mode?:"UNRESTRICTED"|"RESTRICTED", Metadata?:string, ChimeBearer:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelArn?:string}>
     */
    public function updateChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelFlowArn:string, Processors:array<array{Name:string, Configuration:array{Lambda:array{ResourceArn:string, InvocationType:"ASYNC"}}, ExecutionOrder:int, FallbackAction:"CONTINUE"|"ABORT"}>, Name:string} $args
     * @return \AWS\Result<array{ChannelFlowArn?:string}>
     */
    public function updateChannelFlow(array $args): \AWS\Result { }

    /**
     * @param array{ChannelFlowArn:string, Processors:array<array{Name:string, Configuration:array{Lambda:array{ResourceArn:string, InvocationType:"ASYNC"}}, ExecutionOrder:int, FallbackAction:"CONTINUE"|"ABORT"}>, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelFlowArn?:string}>
     */
    public function updateChannelFlowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, MessageId:string, Content:string, Metadata?:string, ChimeBearer:string, SubChannelId?:string, ContentType?:string} $args
     * @return \AWS\Result<array{ChannelArn?:string, MessageId?:string, Status?:array{Value?:"SENT"|"PENDING"|"FAILED"|"DENIED", Detail?:string}, SubChannelId?:string}>
     */
    public function updateChannelMessage(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, MessageId:string, Content:string, Metadata?:string, ChimeBearer:string, SubChannelId?:string, ContentType?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelArn?:string, MessageId?:string, Status?:array{Value?:"SENT"|"PENDING"|"FAILED"|"DENIED", Detail?:string}, SubChannelId?:string}>
     */
    public function updateChannelMessageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, ChimeBearer:string} $args
     * @return \AWS\Result<array{ChannelArn?:string}>
     */
    public function updateChannelReadMarker(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, ChimeBearer:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelArn?:string}>
     */
    public function updateChannelReadMarkerAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
