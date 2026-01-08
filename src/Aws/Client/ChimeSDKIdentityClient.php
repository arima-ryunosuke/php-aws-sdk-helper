<?php
namespace AWS\ChimeSDKIdentity;

class ChimeSDKIdentityClient
{
    /**
     * @param array{Name:string, Metadata?:string, ClientRequestToken:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{AppInstanceArn?:string}>
     */
    public function createAppInstance(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Metadata?:string, ClientRequestToken:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstanceArn?:string}>
     */
    public function createAppInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceAdminArn:string, AppInstanceArn:string} $args
     * @return \AWS\Result<array{AppInstanceAdmin?:array{Arn?:string, Name?:string}, AppInstanceArn?:string}>
     */
    public function createAppInstanceAdmin(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceAdminArn:string, AppInstanceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstanceAdmin?:array{Arn?:string, Name?:string}, AppInstanceArn?:string}>
     */
    public function createAppInstanceAdminAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceArn:string, Name?:string, Metadata?:string, ClientRequestToken:string, Tags?:array<array{Key:string, Value:string}>, Configuration:array{Lex:array{RespondsTo?:"STANDARD_MESSAGES", InvokedBy?:array{StandardMessages:"AUTO"|"ALL"|"MENTIONS"|"NONE", TargetedMessages:"ALL"|"NONE"}, LexBotAliasArn:string, LocaleId:string, WelcomeIntent?:string}}} $args
     * @return \AWS\Result<array{AppInstanceBotArn?:string}>
     */
    public function createAppInstanceBot(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceArn:string, Name?:string, Metadata?:string, ClientRequestToken:string, Tags?:array<array{Key:string, Value:string}>, Configuration:array{Lex:array{RespondsTo?:"STANDARD_MESSAGES", InvokedBy?:array{StandardMessages:"AUTO"|"ALL"|"MENTIONS"|"NONE", TargetedMessages:"ALL"|"NONE"}, LexBotAliasArn:string, LocaleId:string, WelcomeIntent?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstanceBotArn?:string}>
     */
    public function createAppInstanceBotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceArn:string, AppInstanceUserId:string, Name:string, Metadata?:string, ClientRequestToken:string, Tags?:array<array{Key:string, Value:string}>, ExpirationSettings?:array{ExpirationDays:int, ExpirationCriterion:"CREATED_TIMESTAMP"}} $args
     * @return \AWS\Result<array{AppInstanceUserArn?:string}>
     */
    public function createAppInstanceUser(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceArn:string, AppInstanceUserId:string, Name:string, Metadata?:string, ClientRequestToken:string, Tags?:array<array{Key:string, Value:string}>, ExpirationSettings?:array{ExpirationDays:int, ExpirationCriterion:"CREATED_TIMESTAMP"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstanceUserArn?:string}>
     */
    public function createAppInstanceUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAppInstance(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAppInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceAdminArn:string, AppInstanceArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAppInstanceAdmin(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceAdminArn:string, AppInstanceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAppInstanceAdminAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceBotArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAppInstanceBot(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceBotArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAppInstanceBotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceUserArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAppInstanceUser(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceUserArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAppInstanceUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceUserArn:string, EndpointId:string} $args
     * @return \AWS\Result<void>
     */
    public function deregisterAppInstanceUserEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceUserArn:string, EndpointId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deregisterAppInstanceUserEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceArn:string} $args
     * @return \AWS\Result<array{AppInstance?:array{AppInstanceArn?:string, Name?:string, CreatedTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface, Metadata?:string}}>
     */
    public function describeAppInstance(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstance?:array{AppInstanceArn?:string, Name?:string, CreatedTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface, Metadata?:string}}>
     */
    public function describeAppInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceAdminArn:string, AppInstanceArn:string} $args
     * @return \AWS\Result<array{AppInstanceAdmin?:array{Admin?:array{Arn?:string, Name?:string}, AppInstanceArn?:string, CreatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function describeAppInstanceAdmin(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceAdminArn:string, AppInstanceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstanceAdmin?:array{Admin?:array{Arn?:string, Name?:string}, AppInstanceArn?:string, CreatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function describeAppInstanceAdminAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceBotArn:string} $args
     * @return \AWS\Result<array{AppInstanceBot?:array{AppInstanceBotArn?:string, Name?:string, Configuration?:array{Lex:array{RespondsTo?:"STANDARD_MESSAGES", InvokedBy?:array{StandardMessages:"AUTO"|"ALL"|"MENTIONS"|"NONE", TargetedMessages:"ALL"|"NONE"}, LexBotAliasArn:string, LocaleId:string, WelcomeIntent?:string}}, CreatedTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface, Metadata?:string}}>
     */
    public function describeAppInstanceBot(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceBotArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstanceBot?:array{AppInstanceBotArn?:string, Name?:string, Configuration?:array{Lex:array{RespondsTo?:"STANDARD_MESSAGES", InvokedBy?:array{StandardMessages:"AUTO"|"ALL"|"MENTIONS"|"NONE", TargetedMessages:"ALL"|"NONE"}, LexBotAliasArn:string, LocaleId:string, WelcomeIntent?:string}}, CreatedTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface, Metadata?:string}}>
     */
    public function describeAppInstanceBotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceUserArn:string} $args
     * @return \AWS\Result<array{AppInstanceUser?:array{AppInstanceUserArn?:string, Name?:string, Metadata?:string, CreatedTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface, ExpirationSettings?:array{ExpirationDays:int, ExpirationCriterion:"CREATED_TIMESTAMP"}}}>
     */
    public function describeAppInstanceUser(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceUserArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstanceUser?:array{AppInstanceUserArn?:string, Name?:string, Metadata?:string, CreatedTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface, ExpirationSettings?:array{ExpirationDays:int, ExpirationCriterion:"CREATED_TIMESTAMP"}}}>
     */
    public function describeAppInstanceUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceUserArn:string, EndpointId:string} $args
     * @return \AWS\Result<array{AppInstanceUserEndpoint?:array{AppInstanceUserArn?:string, EndpointId?:string, Name?:string, Type?:"APNS"|"APNS_SANDBOX"|"GCM", ResourceArn?:string, EndpointAttributes?:array{DeviceToken:string, VoipDeviceToken?:string}, CreatedTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface, AllowMessages?:"ALL"|"NONE", EndpointState?:array{Status:"ACTIVE"|"INACTIVE", StatusReason?:"INVALID_DEVICE_TOKEN"|"INVALID_PINPOINT_ARN"}}}>
     */
    public function describeAppInstanceUserEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceUserArn:string, EndpointId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstanceUserEndpoint?:array{AppInstanceUserArn?:string, EndpointId?:string, Name?:string, Type?:"APNS"|"APNS_SANDBOX"|"GCM", ResourceArn?:string, EndpointAttributes?:array{DeviceToken:string, VoipDeviceToken?:string}, CreatedTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface, AllowMessages?:"ALL"|"NONE", EndpointState?:array{Status:"ACTIVE"|"INACTIVE", StatusReason?:"INVALID_DEVICE_TOKEN"|"INVALID_PINPOINT_ARN"}}}>
     */
    public function describeAppInstanceUserEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceArn:string} $args
     * @return \AWS\Result<array{AppInstanceRetentionSettings?:array{ChannelRetentionSettings?:array{RetentionDays?:int}}, InitiateDeletionTimestamp?:int|string|\DateTimeInterface}>
     */
    public function getAppInstanceRetentionSettings(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstanceRetentionSettings?:array{ChannelRetentionSettings?:array{RetentionDays?:int}}, InitiateDeletionTimestamp?:int|string|\DateTimeInterface}>
     */
    public function getAppInstanceRetentionSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{AppInstanceArn?:string, AppInstanceAdmins?:array<array{Admin?:array{Arn?:string, Name?:string}}>, NextToken?:string}>
     */
    public function listAppInstanceAdmins(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstanceArn?:string, AppInstanceAdmins?:array<array{Admin?:array{Arn?:string, Name?:string}}>, NextToken?:string}>
     */
    public function listAppInstanceAdminsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{AppInstanceArn?:string, AppInstanceBots?:array<array{AppInstanceBotArn?:string, Name?:string, Metadata?:string}>, NextToken?:string}>
     */
    public function listAppInstanceBots(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstanceArn?:string, AppInstanceBots?:array<array{AppInstanceBotArn?:string, Name?:string, Metadata?:string}>, NextToken?:string}>
     */
    public function listAppInstanceBotsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceUserArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{AppInstanceUserEndpoints?:array<array{AppInstanceUserArn?:string, EndpointId?:string, Name?:string, Type?:"APNS"|"APNS_SANDBOX"|"GCM", AllowMessages?:"ALL"|"NONE", EndpointState?:array{Status:"ACTIVE"|"INACTIVE", StatusReason?:"INVALID_DEVICE_TOKEN"|"INVALID_PINPOINT_ARN"}}>, NextToken?:string}>
     */
    public function listAppInstanceUserEndpoints(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceUserArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstanceUserEndpoints?:array<array{AppInstanceUserArn?:string, EndpointId?:string, Name?:string, Type?:"APNS"|"APNS_SANDBOX"|"GCM", AllowMessages?:"ALL"|"NONE", EndpointState?:array{Status:"ACTIVE"|"INACTIVE", StatusReason?:"INVALID_DEVICE_TOKEN"|"INVALID_PINPOINT_ARN"}}>, NextToken?:string}>
     */
    public function listAppInstanceUserEndpointsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{AppInstanceArn?:string, AppInstanceUsers?:array<array{AppInstanceUserArn?:string, Name?:string, Metadata?:string}>, NextToken?:string}>
     */
    public function listAppInstanceUsers(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstanceArn?:string, AppInstanceUsers?:array<array{AppInstanceUserArn?:string, Name?:string, Metadata?:string}>, NextToken?:string}>
     */
    public function listAppInstanceUsersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{AppInstances?:array<array{AppInstanceArn?:string, Name?:string, Metadata?:string}>, NextToken?:string}>
     */
    public function listAppInstances(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstances?:array<array{AppInstanceArn?:string, Name?:string, Metadata?:string}>, NextToken?:string}>
     */
    public function listAppInstancesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{AppInstanceArn:string, AppInstanceRetentionSettings:array{ChannelRetentionSettings?:array{RetentionDays?:int}}} $args
     * @return \AWS\Result<array{AppInstanceRetentionSettings?:array{ChannelRetentionSettings?:array{RetentionDays?:int}}, InitiateDeletionTimestamp?:int|string|\DateTimeInterface}>
     */
    public function putAppInstanceRetentionSettings(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceArn:string, AppInstanceRetentionSettings:array{ChannelRetentionSettings?:array{RetentionDays?:int}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstanceRetentionSettings?:array{ChannelRetentionSettings?:array{RetentionDays?:int}}, InitiateDeletionTimestamp?:int|string|\DateTimeInterface}>
     */
    public function putAppInstanceRetentionSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceUserArn:string, ExpirationSettings?:array{ExpirationDays:int, ExpirationCriterion:"CREATED_TIMESTAMP"}} $args
     * @return \AWS\Result<array{AppInstanceUserArn?:string, ExpirationSettings?:array{ExpirationDays:int, ExpirationCriterion:"CREATED_TIMESTAMP"}}>
     */
    public function putAppInstanceUserExpirationSettings(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceUserArn:string, ExpirationSettings?:array{ExpirationDays:int, ExpirationCriterion:"CREATED_TIMESTAMP"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstanceUserArn?:string, ExpirationSettings?:array{ExpirationDays:int, ExpirationCriterion:"CREATED_TIMESTAMP"}}>
     */
    public function putAppInstanceUserExpirationSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceUserArn:string, Name?:string, Type:"APNS"|"APNS_SANDBOX"|"GCM", ResourceArn:string, EndpointAttributes:array{DeviceToken:string, VoipDeviceToken?:string}, ClientRequestToken:string, AllowMessages?:"ALL"|"NONE"} $args
     * @return \AWS\Result<array{AppInstanceUserArn?:string, EndpointId?:string}>
     */
    public function registerAppInstanceUserEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceUserArn:string, Name?:string, Type:"APNS"|"APNS_SANDBOX"|"GCM", ResourceArn:string, EndpointAttributes:array{DeviceToken:string, VoipDeviceToken?:string}, ClientRequestToken:string, AllowMessages?:"ALL"|"NONE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstanceUserArn?:string, EndpointId?:string}>
     */
    public function registerAppInstanceUserEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{AppInstanceArn:string, Name:string, Metadata:string} $args
     * @return \AWS\Result<array{AppInstanceArn?:string}>
     */
    public function updateAppInstance(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceArn:string, Name:string, Metadata:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstanceArn?:string}>
     */
    public function updateAppInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceBotArn:string, Name:string, Metadata:string, Configuration?:array{Lex:array{RespondsTo?:"STANDARD_MESSAGES", InvokedBy?:array{StandardMessages:"AUTO"|"ALL"|"MENTIONS"|"NONE", TargetedMessages:"ALL"|"NONE"}, LexBotAliasArn:string, LocaleId:string, WelcomeIntent?:string}}} $args
     * @return \AWS\Result<array{AppInstanceBotArn?:string}>
     */
    public function updateAppInstanceBot(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceBotArn:string, Name:string, Metadata:string, Configuration?:array{Lex:array{RespondsTo?:"STANDARD_MESSAGES", InvokedBy?:array{StandardMessages:"AUTO"|"ALL"|"MENTIONS"|"NONE", TargetedMessages:"ALL"|"NONE"}, LexBotAliasArn:string, LocaleId:string, WelcomeIntent?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstanceBotArn?:string}>
     */
    public function updateAppInstanceBotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceUserArn:string, Name:string, Metadata:string} $args
     * @return \AWS\Result<array{AppInstanceUserArn?:string}>
     */
    public function updateAppInstanceUser(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceUserArn:string, Name:string, Metadata:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstanceUserArn?:string}>
     */
    public function updateAppInstanceUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceUserArn:string, EndpointId:string, Name?:string, AllowMessages?:"ALL"|"NONE"} $args
     * @return \AWS\Result<array{AppInstanceUserArn?:string, EndpointId?:string}>
     */
    public function updateAppInstanceUserEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceUserArn:string, EndpointId:string, Name?:string, AllowMessages?:"ALL"|"NONE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstanceUserArn?:string, EndpointId?:string}>
     */
    public function updateAppInstanceUserEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
