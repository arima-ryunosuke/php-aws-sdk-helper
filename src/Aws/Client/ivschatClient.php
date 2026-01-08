<?php
namespace AWS\ivschat;

class ivschatClient
{
    /**
     * @param array{roomIdentifier:string, userId:string, capabilities?:array<"SEND_MESSAGE"|"DISCONNECT_USER"|"DELETE_MESSAGE">, sessionDurationInMinutes?:int, attributes?:array<string, string>} $args
     * @return \AWS\Result<array{token?:string, tokenExpirationTime?:int|string|\DateTimeInterface, sessionExpirationTime?:int|string|\DateTimeInterface}>
     */
    public function createChatToken(array $args): \AWS\Result { }

    /**
     * @param array{roomIdentifier:string, userId:string, capabilities?:array<"SEND_MESSAGE"|"DISCONNECT_USER"|"DELETE_MESSAGE">, sessionDurationInMinutes?:int, attributes?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{token?:string, tokenExpirationTime?:int|string|\DateTimeInterface, sessionExpirationTime?:int|string|\DateTimeInterface}>
     */
    public function createChatTokenAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name?:string, destinationConfiguration:array{s3?:array{bucketName:string}, cloudWatchLogs?:array{logGroupName:string}, firehose?:array{deliveryStreamName:string}}, tags?:array<string, string>} $args
     * @return \AWS\Result<array{arn?:string, id?:string, createTime?:int|string|\DateTimeInterface, updateTime?:int|string|\DateTimeInterface, name?:string, destinationConfiguration?:array{s3?:array{bucketName:string}, cloudWatchLogs?:array{logGroupName:string}, firehose?:array{deliveryStreamName:string}}, state?:"ACTIVE", tags?:array<string, string>}>
     */
    public function createLoggingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{name?:string, destinationConfiguration:array{s3?:array{bucketName:string}, cloudWatchLogs?:array{logGroupName:string}, firehose?:array{deliveryStreamName:string}}, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, id?:string, createTime?:int|string|\DateTimeInterface, updateTime?:int|string|\DateTimeInterface, name?:string, destinationConfiguration?:array{s3?:array{bucketName:string}, cloudWatchLogs?:array{logGroupName:string}, firehose?:array{deliveryStreamName:string}}, state?:"ACTIVE", tags?:array<string, string>}>
     */
    public function createLoggingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name?:string, maximumMessageRatePerSecond?:int, maximumMessageLength?:int, messageReviewHandler?:array{uri?:string, fallbackResult?:"ALLOW"|"DENY"}, tags?:array<string, string>, loggingConfigurationIdentifiers?:array<string>} $args
     * @return \AWS\Result<array{arn?:string, id?:string, name?:string, createTime?:int|string|\DateTimeInterface, updateTime?:int|string|\DateTimeInterface, maximumMessageRatePerSecond?:int, maximumMessageLength?:int, messageReviewHandler?:array{uri?:string, fallbackResult?:"ALLOW"|"DENY"}, tags?:array<string, string>, loggingConfigurationIdentifiers?:array<string>}>
     */
    public function createRoom(array $args = []): \AWS\Result { }

    /**
     * @param array{name?:string, maximumMessageRatePerSecond?:int, maximumMessageLength?:int, messageReviewHandler?:array{uri?:string, fallbackResult?:"ALLOW"|"DENY"}, tags?:array<string, string>, loggingConfigurationIdentifiers?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, id?:string, name?:string, createTime?:int|string|\DateTimeInterface, updateTime?:int|string|\DateTimeInterface, maximumMessageRatePerSecond?:int, maximumMessageLength?:int, messageReviewHandler?:array{uri?:string, fallbackResult?:"ALLOW"|"DENY"}, tags?:array<string, string>, loggingConfigurationIdentifiers?:array<string>}>
     */
    public function createRoomAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{identifier:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteLoggingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteLoggingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{roomIdentifier:string, id:string, reason?:string} $args
     * @return \AWS\Result<array{id?:string}>
     */
    public function deleteMessage(array $args): \AWS\Result { }

    /**
     * @param array{roomIdentifier:string, id:string, reason?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string}>
     */
    public function deleteMessageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{identifier:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteRoom(array $args): \AWS\Result { }

    /**
     * @param array{identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteRoomAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{roomIdentifier:string, userId:string, reason?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disconnectUser(array $args): \AWS\Result { }

    /**
     * @param array{roomIdentifier:string, userId:string, reason?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disconnectUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{identifier:string} $args
     * @return \AWS\Result<array{arn?:string, id?:string, createTime?:int|string|\DateTimeInterface, updateTime?:int|string|\DateTimeInterface, name?:string, destinationConfiguration?:array{s3?:array{bucketName:string}, cloudWatchLogs?:array{logGroupName:string}, firehose?:array{deliveryStreamName:string}}, state?:"CREATING"|"CREATE_FAILED"|"DELETING"|"DELETE_FAILED"|"UPDATING"|"UPDATE_FAILED"|"ACTIVE", tags?:array<string, string>}>
     */
    public function getLoggingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, id?:string, createTime?:int|string|\DateTimeInterface, updateTime?:int|string|\DateTimeInterface, name?:string, destinationConfiguration?:array{s3?:array{bucketName:string}, cloudWatchLogs?:array{logGroupName:string}, firehose?:array{deliveryStreamName:string}}, state?:"CREATING"|"CREATE_FAILED"|"DELETING"|"DELETE_FAILED"|"UPDATING"|"UPDATE_FAILED"|"ACTIVE", tags?:array<string, string>}>
     */
    public function getLoggingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{identifier:string} $args
     * @return \AWS\Result<array{arn?:string, id?:string, name?:string, createTime?:int|string|\DateTimeInterface, updateTime?:int|string|\DateTimeInterface, maximumMessageRatePerSecond?:int, maximumMessageLength?:int, messageReviewHandler?:array{uri?:string, fallbackResult?:"ALLOW"|"DENY"}, tags?:array<string, string>, loggingConfigurationIdentifiers?:array<string>}>
     */
    public function getRoom(array $args): \AWS\Result { }

    /**
     * @param array{identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, id?:string, name?:string, createTime?:int|string|\DateTimeInterface, updateTime?:int|string|\DateTimeInterface, maximumMessageRatePerSecond?:int, maximumMessageLength?:int, messageReviewHandler?:array{uri?:string, fallbackResult?:"ALLOW"|"DENY"}, tags?:array<string, string>, loggingConfigurationIdentifiers?:array<string>}>
     */
    public function getRoomAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{loggingConfigurations:array<array{arn?:string, id?:string, createTime?:int|string|\DateTimeInterface, updateTime?:int|string|\DateTimeInterface, name?:string, destinationConfiguration?:array{s3?:array{bucketName:string}, cloudWatchLogs?:array{logGroupName:string}, firehose?:array{deliveryStreamName:string}}, state?:"CREATING"|"CREATE_FAILED"|"DELETING"|"DELETE_FAILED"|"UPDATING"|"UPDATE_FAILED"|"ACTIVE", tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listLoggingConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{loggingConfigurations:array<array{arn?:string, id?:string, createTime?:int|string|\DateTimeInterface, updateTime?:int|string|\DateTimeInterface, name?:string, destinationConfiguration?:array{s3?:array{bucketName:string}, cloudWatchLogs?:array{logGroupName:string}, firehose?:array{deliveryStreamName:string}}, state?:"CREATING"|"CREATE_FAILED"|"DELETING"|"DELETE_FAILED"|"UPDATING"|"UPDATE_FAILED"|"ACTIVE", tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listLoggingConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name?:string, nextToken?:string, maxResults?:int, messageReviewHandlerUri?:string, loggingConfigurationIdentifier?:string} $args
     * @return \AWS\Result<array{rooms:array<array{arn?:string, id?:string, name?:string, messageReviewHandler?:array{uri?:string, fallbackResult?:"ALLOW"|"DENY"}, createTime?:int|string|\DateTimeInterface, updateTime?:int|string|\DateTimeInterface, tags?:array<string, string>, loggingConfigurationIdentifiers?:array<string>}>, nextToken?:string}>
     */
    public function listRooms(array $args = []): \AWS\Result { }

    /**
     * @param array{name?:string, nextToken?:string, maxResults?:int, messageReviewHandlerUri?:string, loggingConfigurationIdentifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{rooms:array<array{arn?:string, id?:string, name?:string, messageReviewHandler?:array{uri?:string, fallbackResult?:"ALLOW"|"DENY"}, createTime?:int|string|\DateTimeInterface, updateTime?:int|string|\DateTimeInterface, tags?:array<string, string>, loggingConfigurationIdentifiers?:array<string>}>, nextToken?:string}>
     */
    public function listRoomsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{tags:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{roomIdentifier:string, eventName:string, attributes?:array<string, string>} $args
     * @return \AWS\Result<array{id?:string}>
     */
    public function sendEvent(array $args): \AWS\Result { }

    /**
     * @param array{roomIdentifier:string, eventName:string, attributes?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string}>
     */
    public function sendEventAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{identifier:string, name?:string, destinationConfiguration?:array{s3?:array{bucketName:string}, cloudWatchLogs?:array{logGroupName:string}, firehose?:array{deliveryStreamName:string}}} $args
     * @return \AWS\Result<array{arn?:string, id?:string, createTime?:int|string|\DateTimeInterface, updateTime?:int|string|\DateTimeInterface, name?:string, destinationConfiguration?:array{s3?:array{bucketName:string}, cloudWatchLogs?:array{logGroupName:string}, firehose?:array{deliveryStreamName:string}}, state?:"ACTIVE", tags?:array<string, string>}>
     */
    public function updateLoggingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{identifier:string, name?:string, destinationConfiguration?:array{s3?:array{bucketName:string}, cloudWatchLogs?:array{logGroupName:string}, firehose?:array{deliveryStreamName:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, id?:string, createTime?:int|string|\DateTimeInterface, updateTime?:int|string|\DateTimeInterface, name?:string, destinationConfiguration?:array{s3?:array{bucketName:string}, cloudWatchLogs?:array{logGroupName:string}, firehose?:array{deliveryStreamName:string}}, state?:"ACTIVE", tags?:array<string, string>}>
     */
    public function updateLoggingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{identifier:string, name?:string, maximumMessageRatePerSecond?:int, maximumMessageLength?:int, messageReviewHandler?:array{uri?:string, fallbackResult?:"ALLOW"|"DENY"}, loggingConfigurationIdentifiers?:array<string>} $args
     * @return \AWS\Result<array{arn?:string, id?:string, name?:string, createTime?:int|string|\DateTimeInterface, updateTime?:int|string|\DateTimeInterface, maximumMessageRatePerSecond?:int, maximumMessageLength?:int, messageReviewHandler?:array{uri?:string, fallbackResult?:"ALLOW"|"DENY"}, tags?:array<string, string>, loggingConfigurationIdentifiers?:array<string>}>
     */
    public function updateRoom(array $args): \AWS\Result { }

    /**
     * @param array{identifier:string, name?:string, maximumMessageRatePerSecond?:int, maximumMessageLength?:int, messageReviewHandler?:array{uri?:string, fallbackResult?:"ALLOW"|"DENY"}, loggingConfigurationIdentifiers?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, id?:string, name?:string, createTime?:int|string|\DateTimeInterface, updateTime?:int|string|\DateTimeInterface, maximumMessageRatePerSecond?:int, maximumMessageLength?:int, messageReviewHandler?:array{uri?:string, fallbackResult?:"ALLOW"|"DENY"}, tags?:array<string, string>, loggingConfigurationIdentifiers?:array<string>}>
     */
    public function updateRoomAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
