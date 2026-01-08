<?php
namespace AWS\IVSRealTime;

class IVSRealTimeClient
{
    /**
     * @param array{name?:string, video?:array{width?:int, height?:int, framerate?:float, bitrate?:int}, tags?:array<string, string>} $args
     * @return \AWS\Result<array{encoderConfiguration?:array{arn:string, name?:string, video?:array{width?:int, height?:int, framerate?:float, bitrate?:int}, tags?:array<string, string>}}>
     */
    public function createEncoderConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{name?:string, video?:array{width?:int, height?:int, framerate?:float, bitrate?:int}, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{encoderConfiguration?:array{arn:string, name?:string, video?:array{width?:int, height?:int, framerate?:float, bitrate?:int}, tags?:array<string, string>}}>
     */
    public function createEncoderConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name?:string, stageArn?:string, userId?:string, attributes?:array<string, string>, ingestProtocol:"RTMP"|"RTMPS", insecureIngest?:bool, tags?:array<string, string>} $args
     * @return \AWS\Result<array{ingestConfiguration?:array{name?:string, arn:string, ingestProtocol:"RTMP"|"RTMPS", streamKey:string, stageArn:string, participantId:string, state:"ACTIVE"|"INACTIVE", userId?:string, attributes?:array<string, string>, tags?:array<string, string>}}>
     */
    public function createIngestConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{name?:string, stageArn?:string, userId?:string, attributes?:array<string, string>, ingestProtocol:"RTMP"|"RTMPS", insecureIngest?:bool, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ingestConfiguration?:array{name?:string, arn:string, ingestProtocol:"RTMP"|"RTMPS", streamKey:string, stageArn:string, participantId:string, state:"ACTIVE"|"INACTIVE", userId?:string, attributes?:array<string, string>, tags?:array<string, string>}}>
     */
    public function createIngestConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{stageArn:string, duration?:int, userId?:string, attributes?:array<string, string>, capabilities?:array<"PUBLISH"|"SUBSCRIBE">} $args
     * @return \AWS\Result<array{participantToken?:array{participantId?:string, token?:string, userId?:string, attributes?:array<string, string>, duration?:int, capabilities?:array<"PUBLISH"|"SUBSCRIBE">, expirationTime?:int|string|\DateTimeInterface}}>
     */
    public function createParticipantToken(array $args): \AWS\Result { }

    /**
     * @param array{stageArn:string, duration?:int, userId?:string, attributes?:array<string, string>, capabilities?:array<"PUBLISH"|"SUBSCRIBE">} $args
     * @return \GuzzleHttp\Promise\Promise<array{participantToken?:array{participantId?:string, token?:string, userId?:string, attributes?:array<string, string>, duration?:int, capabilities?:array<"PUBLISH"|"SUBSCRIBE">, expirationTime?:int|string|\DateTimeInterface}}>
     */
    public function createParticipantTokenAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name?:string, participantTokenConfigurations?:array<array{duration?:int, userId?:string, attributes?:array<string, string>, capabilities?:array<"PUBLISH"|"SUBSCRIBE">}>, tags?:array<string, string>, autoParticipantRecordingConfiguration?:array{storageConfigurationArn:string, mediaTypes?:array<"AUDIO_VIDEO"|"AUDIO_ONLY"|"NONE">, thumbnailConfiguration?:array{targetIntervalSeconds?:int, storage?:array<"SEQUENTIAL"|"LATEST">, recordingMode?:"INTERVAL"|"DISABLED"}}} $args
     * @return \AWS\Result<array{stage?:array{arn:string, name?:string, activeSessionId?:string, tags?:array<string, string>, autoParticipantRecordingConfiguration?:array{storageConfigurationArn:string, mediaTypes?:array<"AUDIO_VIDEO"|"AUDIO_ONLY"|"NONE">, thumbnailConfiguration?:array{targetIntervalSeconds?:int, storage?:array<"SEQUENTIAL"|"LATEST">, recordingMode?:"INTERVAL"|"DISABLED"}}, endpoints?:array{events?:string, whip?:string, rtmp?:string, rtmps?:string}}, participantTokens?:array<array{participantId?:string, token?:string, userId?:string, attributes?:array<string, string>, duration?:int, capabilities?:array<"PUBLISH"|"SUBSCRIBE">, expirationTime?:int|string|\DateTimeInterface}>}>
     */
    public function createStage(array $args = []): \AWS\Result { }

    /**
     * @param array{name?:string, participantTokenConfigurations?:array<array{duration?:int, userId?:string, attributes?:array<string, string>, capabilities?:array<"PUBLISH"|"SUBSCRIBE">}>, tags?:array<string, string>, autoParticipantRecordingConfiguration?:array{storageConfigurationArn:string, mediaTypes?:array<"AUDIO_VIDEO"|"AUDIO_ONLY"|"NONE">, thumbnailConfiguration?:array{targetIntervalSeconds?:int, storage?:array<"SEQUENTIAL"|"LATEST">, recordingMode?:"INTERVAL"|"DISABLED"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{stage?:array{arn:string, name?:string, activeSessionId?:string, tags?:array<string, string>, autoParticipantRecordingConfiguration?:array{storageConfigurationArn:string, mediaTypes?:array<"AUDIO_VIDEO"|"AUDIO_ONLY"|"NONE">, thumbnailConfiguration?:array{targetIntervalSeconds?:int, storage?:array<"SEQUENTIAL"|"LATEST">, recordingMode?:"INTERVAL"|"DISABLED"}}, endpoints?:array{events?:string, whip?:string, rtmp?:string, rtmps?:string}}, participantTokens?:array<array{participantId?:string, token?:string, userId?:string, attributes?:array<string, string>, duration?:int, capabilities?:array<"PUBLISH"|"SUBSCRIBE">, expirationTime?:int|string|\DateTimeInterface}>}>
     */
    public function createStageAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name?:string, s3:array{bucketName:string}, tags?:array<string, string>} $args
     * @return \AWS\Result<array{storageConfiguration?:array{arn:string, name?:string, s3?:array{bucketName:string}, tags?:array<string, string>}}>
     */
    public function createStorageConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{name?:string, s3:array{bucketName:string}, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{storageConfiguration?:array{arn:string, name?:string, s3?:array{bucketName:string}, tags?:array<string, string>}}>
     */
    public function createStorageConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteEncoderConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteEncoderConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, force?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteIngestConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, force?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteIngestConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deletePublicKey(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deletePublicKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteStage(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteStageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteStorageConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteStorageConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{stageArn:string, participantId:string, reason?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disconnectParticipant(array $args): \AWS\Result { }

    /**
     * @param array{stageArn:string, participantId:string, reason?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disconnectParticipantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{composition?:array{arn:string, stageArn:string, state:"STARTING"|"ACTIVE"|"STOPPING"|"FAILED"|"STOPPED", layout:array{grid?:array{featuredParticipantAttribute?:string, omitStoppedVideo?:bool, videoAspectRatio?:"AUTO"|"VIDEO"|"SQUARE"|"PORTRAIT", videoFillMode?:"FILL"|"COVER"|"CONTAIN", gridGap?:int}, pip?:array{featuredParticipantAttribute?:string, omitStoppedVideo?:bool, videoFillMode?:"FILL"|"COVER"|"CONTAIN", gridGap?:int, pipParticipantAttribute?:string, pipBehavior?:"STATIC"|"DYNAMIC", pipOffset?:int, pipPosition?:"TOP_LEFT"|"TOP_RIGHT"|"BOTTOM_LEFT"|"BOTTOM_RIGHT", pipWidth?:int, pipHeight?:int}}, destinations:array<array{id:string, state:"STARTING"|"ACTIVE"|"STOPPING"|"RECONNECTING"|"FAILED"|"STOPPED", startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, configuration:array{name?:string, channel?:array{channelArn:string, encoderConfigurationArn?:string}, s3?:array{storageConfigurationArn:string, encoderConfigurationArns:array<string>, recordingConfiguration?:array{format?:"HLS"}, thumbnailConfigurations?:array<array{targetIntervalSeconds?:int, storage?:array<"SEQUENTIAL"|"LATEST">}>}}, detail?:array{s3?:array{recordingPrefix:string}}}>, tags?:array<string, string>, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}}>
     */
    public function getComposition(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{composition?:array{arn:string, stageArn:string, state:"STARTING"|"ACTIVE"|"STOPPING"|"FAILED"|"STOPPED", layout:array{grid?:array{featuredParticipantAttribute?:string, omitStoppedVideo?:bool, videoAspectRatio?:"AUTO"|"VIDEO"|"SQUARE"|"PORTRAIT", videoFillMode?:"FILL"|"COVER"|"CONTAIN", gridGap?:int}, pip?:array{featuredParticipantAttribute?:string, omitStoppedVideo?:bool, videoFillMode?:"FILL"|"COVER"|"CONTAIN", gridGap?:int, pipParticipantAttribute?:string, pipBehavior?:"STATIC"|"DYNAMIC", pipOffset?:int, pipPosition?:"TOP_LEFT"|"TOP_RIGHT"|"BOTTOM_LEFT"|"BOTTOM_RIGHT", pipWidth?:int, pipHeight?:int}}, destinations:array<array{id:string, state:"STARTING"|"ACTIVE"|"STOPPING"|"RECONNECTING"|"FAILED"|"STOPPED", startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, configuration:array{name?:string, channel?:array{channelArn:string, encoderConfigurationArn?:string}, s3?:array{storageConfigurationArn:string, encoderConfigurationArns:array<string>, recordingConfiguration?:array{format?:"HLS"}, thumbnailConfigurations?:array<array{targetIntervalSeconds?:int, storage?:array<"SEQUENTIAL"|"LATEST">}>}}, detail?:array{s3?:array{recordingPrefix:string}}}>, tags?:array<string, string>, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}}>
     */
    public function getCompositionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{encoderConfiguration?:array{arn:string, name?:string, video?:array{width?:int, height?:int, framerate?:float, bitrate?:int}, tags?:array<string, string>}}>
     */
    public function getEncoderConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{encoderConfiguration?:array{arn:string, name?:string, video?:array{width?:int, height?:int, framerate?:float, bitrate?:int}, tags?:array<string, string>}}>
     */
    public function getEncoderConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{ingestConfiguration?:array{name?:string, arn:string, ingestProtocol:"RTMP"|"RTMPS", streamKey:string, stageArn:string, participantId:string, state:"ACTIVE"|"INACTIVE", userId?:string, attributes?:array<string, string>, tags?:array<string, string>}}>
     */
    public function getIngestConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ingestConfiguration?:array{name?:string, arn:string, ingestProtocol:"RTMP"|"RTMPS", streamKey:string, stageArn:string, participantId:string, state:"ACTIVE"|"INACTIVE", userId?:string, attributes?:array<string, string>, tags?:array<string, string>}}>
     */
    public function getIngestConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{stageArn:string, sessionId:string, participantId:string} $args
     * @return \AWS\Result<array{participant?:array{participantId?:string, userId?:string, state?:"CONNECTED"|"DISCONNECTED", firstJoinTime?:int|string|\DateTimeInterface, attributes?:array<string, string>, published?:bool, ispName?:string, osName?:string, osVersion?:string, browserName?:string, browserVersion?:string, sdkVersion?:string, recordingS3BucketName?:string, recordingS3Prefix?:string, recordingState?:"STARTING"|"ACTIVE"|"STOPPING"|"STOPPED"|"FAILED"|"DISABLED", protocol?:"UNKNOWN"|"WHIP"|"RTMP"|"RTMPS"}}>
     */
    public function getParticipant(array $args): \AWS\Result { }

    /**
     * @param array{stageArn:string, sessionId:string, participantId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{participant?:array{participantId?:string, userId?:string, state?:"CONNECTED"|"DISCONNECTED", firstJoinTime?:int|string|\DateTimeInterface, attributes?:array<string, string>, published?:bool, ispName?:string, osName?:string, osVersion?:string, browserName?:string, browserVersion?:string, sdkVersion?:string, recordingS3BucketName?:string, recordingS3Prefix?:string, recordingState?:"STARTING"|"ACTIVE"|"STOPPING"|"STOPPED"|"FAILED"|"DISABLED", protocol?:"UNKNOWN"|"WHIP"|"RTMP"|"RTMPS"}}>
     */
    public function getParticipantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{publicKey?:array{arn?:string, name?:string, publicKeyMaterial?:string, fingerprint?:string, tags?:array<string, string>}}>
     */
    public function getPublicKey(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{publicKey?:array{arn?:string, name?:string, publicKeyMaterial?:string, fingerprint?:string, tags?:array<string, string>}}>
     */
    public function getPublicKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{stage?:array{arn:string, name?:string, activeSessionId?:string, tags?:array<string, string>, autoParticipantRecordingConfiguration?:array{storageConfigurationArn:string, mediaTypes?:array<"AUDIO_VIDEO"|"AUDIO_ONLY"|"NONE">, thumbnailConfiguration?:array{targetIntervalSeconds?:int, storage?:array<"SEQUENTIAL"|"LATEST">, recordingMode?:"INTERVAL"|"DISABLED"}}, endpoints?:array{events?:string, whip?:string, rtmp?:string, rtmps?:string}}}>
     */
    public function getStage(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{stage?:array{arn:string, name?:string, activeSessionId?:string, tags?:array<string, string>, autoParticipantRecordingConfiguration?:array{storageConfigurationArn:string, mediaTypes?:array<"AUDIO_VIDEO"|"AUDIO_ONLY"|"NONE">, thumbnailConfiguration?:array{targetIntervalSeconds?:int, storage?:array<"SEQUENTIAL"|"LATEST">, recordingMode?:"INTERVAL"|"DISABLED"}}, endpoints?:array{events?:string, whip?:string, rtmp?:string, rtmps?:string}}}>
     */
    public function getStageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{stageArn:string, sessionId:string} $args
     * @return \AWS\Result<array{stageSession?:array{sessionId?:string, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}}>
     */
    public function getStageSession(array $args): \AWS\Result { }

    /**
     * @param array{stageArn:string, sessionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{stageSession?:array{sessionId?:string, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}}>
     */
    public function getStageSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{storageConfiguration?:array{arn:string, name?:string, s3?:array{bucketName:string}, tags?:array<string, string>}}>
     */
    public function getStorageConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{storageConfiguration?:array{arn:string, name?:string, s3?:array{bucketName:string}, tags?:array<string, string>}}>
     */
    public function getStorageConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{publicKeyMaterial:string, name?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{publicKey?:array{arn?:string, name?:string, publicKeyMaterial?:string, fingerprint?:string, tags?:array<string, string>}}>
     */
    public function importPublicKey(array $args): \AWS\Result { }

    /**
     * @param array{publicKeyMaterial:string, name?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{publicKey?:array{arn?:string, name?:string, publicKeyMaterial?:string, fingerprint?:string, tags?:array<string, string>}}>
     */
    public function importPublicKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filterByStageArn?:string, filterByEncoderConfigurationArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{compositions:array<array{arn:string, stageArn:string, destinations:array<array{id:string, state:"STARTING"|"ACTIVE"|"STOPPING"|"RECONNECTING"|"FAILED"|"STOPPED", startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}>, state:"STARTING"|"ACTIVE"|"STOPPING"|"FAILED"|"STOPPED", tags?:array<string, string>, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listCompositions(array $args = []): \AWS\Result { }

    /**
     * @param array{filterByStageArn?:string, filterByEncoderConfigurationArn?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{compositions:array<array{arn:string, stageArn:string, destinations:array<array{id:string, state:"STARTING"|"ACTIVE"|"STOPPING"|"RECONNECTING"|"FAILED"|"STOPPED", startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}>, state:"STARTING"|"ACTIVE"|"STOPPING"|"FAILED"|"STOPPED", tags?:array<string, string>, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listCompositionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{encoderConfigurations:array<array{arn:string, name?:string, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listEncoderConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{encoderConfigurations:array<array{arn:string, name?:string, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listEncoderConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filterByStageArn?:string, filterByState?:"ACTIVE"|"INACTIVE", nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{ingestConfigurations:array<array{name?:string, arn:string, ingestProtocol:"RTMP"|"RTMPS", stageArn:string, participantId:string, state:"ACTIVE"|"INACTIVE", userId?:string}>, nextToken?:string}>
     */
    public function listIngestConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{filterByStageArn?:string, filterByState?:"ACTIVE"|"INACTIVE", nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ingestConfigurations:array<array{name?:string, arn:string, ingestProtocol:"RTMP"|"RTMPS", stageArn:string, participantId:string, state:"ACTIVE"|"INACTIVE", userId?:string}>, nextToken?:string}>
     */
    public function listIngestConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{stageArn:string, sessionId:string, participantId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{events:array<array{name?:"JOINED"|"LEFT"|"PUBLISH_STARTED"|"PUBLISH_STOPPED"|"SUBSCRIBE_STARTED"|"SUBSCRIBE_STOPPED"|"PUBLISH_ERROR"|"SUBSCRIBE_ERROR"|"JOIN_ERROR", participantId?:string, eventTime?:int|string|\DateTimeInterface, remoteParticipantId?:string, errorCode?:"INSUFFICIENT_CAPABILITIES"|"QUOTA_EXCEEDED"|"PUBLISHER_NOT_FOUND"|"BITRATE_EXCEEDED"|"RESOLUTION_EXCEEDED"|"STREAM_DURATION_EXCEEDED"|"INVALID_AUDIO_CODEC"|"INVALID_VIDEO_CODEC"|"INVALID_PROTOCOL"|"INVALID_STREAM_KEY"|"REUSE_OF_STREAM_KEY"|"B_FRAME_PRESENT"|"INVALID_INPUT"|"INTERNAL_SERVER_EXCEPTION"}>, nextToken?:string}>
     */
    public function listParticipantEvents(array $args): \AWS\Result { }

    /**
     * @param array{stageArn:string, sessionId:string, participantId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{events:array<array{name?:"JOINED"|"LEFT"|"PUBLISH_STARTED"|"PUBLISH_STOPPED"|"SUBSCRIBE_STARTED"|"SUBSCRIBE_STOPPED"|"PUBLISH_ERROR"|"SUBSCRIBE_ERROR"|"JOIN_ERROR", participantId?:string, eventTime?:int|string|\DateTimeInterface, remoteParticipantId?:string, errorCode?:"INSUFFICIENT_CAPABILITIES"|"QUOTA_EXCEEDED"|"PUBLISHER_NOT_FOUND"|"BITRATE_EXCEEDED"|"RESOLUTION_EXCEEDED"|"STREAM_DURATION_EXCEEDED"|"INVALID_AUDIO_CODEC"|"INVALID_VIDEO_CODEC"|"INVALID_PROTOCOL"|"INVALID_STREAM_KEY"|"REUSE_OF_STREAM_KEY"|"B_FRAME_PRESENT"|"INVALID_INPUT"|"INTERNAL_SERVER_EXCEPTION"}>, nextToken?:string}>
     */
    public function listParticipantEventsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{stageArn:string, sessionId:string, filterByUserId?:string, filterByPublished?:bool, filterByState?:"CONNECTED"|"DISCONNECTED", nextToken?:string, maxResults?:int, filterByRecordingState?:"STARTING"|"ACTIVE"|"STOPPING"|"STOPPED"|"FAILED"} $args
     * @return \AWS\Result<array{participants:array<array{participantId?:string, userId?:string, state?:"CONNECTED"|"DISCONNECTED", firstJoinTime?:int|string|\DateTimeInterface, published?:bool, recordingState?:"STARTING"|"ACTIVE"|"STOPPING"|"STOPPED"|"FAILED"|"DISABLED"}>, nextToken?:string}>
     */
    public function listParticipants(array $args): \AWS\Result { }

    /**
     * @param array{stageArn:string, sessionId:string, filterByUserId?:string, filterByPublished?:bool, filterByState?:"CONNECTED"|"DISCONNECTED", nextToken?:string, maxResults?:int, filterByRecordingState?:"STARTING"|"ACTIVE"|"STOPPING"|"STOPPED"|"FAILED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{participants:array<array{participantId?:string, userId?:string, state?:"CONNECTED"|"DISCONNECTED", firstJoinTime?:int|string|\DateTimeInterface, published?:bool, recordingState?:"STARTING"|"ACTIVE"|"STOPPING"|"STOPPED"|"FAILED"|"DISABLED"}>, nextToken?:string}>
     */
    public function listParticipantsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{publicKeys:array<array{arn?:string, name?:string, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listPublicKeys(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{publicKeys:array<array{arn?:string, name?:string, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listPublicKeysAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{stageArn:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{stageSessions:array<array{sessionId?:string, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listStageSessions(array $args): \AWS\Result { }

    /**
     * @param array{stageArn:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{stageSessions:array<array{sessionId?:string, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listStageSessionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{stages:array<array{arn:string, name?:string, activeSessionId?:string, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listStages(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{stages:array<array{arn:string, name?:string, activeSessionId?:string, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listStagesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{storageConfigurations:array<array{arn:string, name?:string, s3?:array{bucketName:string}, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listStorageConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{storageConfigurations:array<array{arn:string, name?:string, s3?:array{bucketName:string}, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listStorageConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{stageArn:string, idempotencyToken?:string, layout?:array{grid?:array{featuredParticipantAttribute?:string, omitStoppedVideo?:bool, videoAspectRatio?:"AUTO"|"VIDEO"|"SQUARE"|"PORTRAIT", videoFillMode?:"FILL"|"COVER"|"CONTAIN", gridGap?:int}, pip?:array{featuredParticipantAttribute?:string, omitStoppedVideo?:bool, videoFillMode?:"FILL"|"COVER"|"CONTAIN", gridGap?:int, pipParticipantAttribute?:string, pipBehavior?:"STATIC"|"DYNAMIC", pipOffset?:int, pipPosition?:"TOP_LEFT"|"TOP_RIGHT"|"BOTTOM_LEFT"|"BOTTOM_RIGHT", pipWidth?:int, pipHeight?:int}}, destinations:array<array{name?:string, channel?:array{channelArn:string, encoderConfigurationArn?:string}, s3?:array{storageConfigurationArn:string, encoderConfigurationArns:array<string>, recordingConfiguration?:array{format?:"HLS"}, thumbnailConfigurations?:array<array{targetIntervalSeconds?:int, storage?:array<"SEQUENTIAL"|"LATEST">}>}}>, tags?:array<string, string>} $args
     * @return \AWS\Result<array{composition?:array{arn:string, stageArn:string, state:"STARTING"|"ACTIVE"|"STOPPING"|"FAILED"|"STOPPED", layout:array{grid?:array{featuredParticipantAttribute?:string, omitStoppedVideo?:bool, videoAspectRatio?:"AUTO"|"VIDEO"|"SQUARE"|"PORTRAIT", videoFillMode?:"FILL"|"COVER"|"CONTAIN", gridGap?:int}, pip?:array{featuredParticipantAttribute?:string, omitStoppedVideo?:bool, videoFillMode?:"FILL"|"COVER"|"CONTAIN", gridGap?:int, pipParticipantAttribute?:string, pipBehavior?:"STATIC"|"DYNAMIC", pipOffset?:int, pipPosition?:"TOP_LEFT"|"TOP_RIGHT"|"BOTTOM_LEFT"|"BOTTOM_RIGHT", pipWidth?:int, pipHeight?:int}}, destinations:array<array{id:string, state:"STARTING"|"ACTIVE"|"STOPPING"|"RECONNECTING"|"FAILED"|"STOPPED", startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, configuration:array{name?:string, channel?:array{channelArn:string, encoderConfigurationArn?:string}, s3?:array{storageConfigurationArn:string, encoderConfigurationArns:array<string>, recordingConfiguration?:array{format?:"HLS"}, thumbnailConfigurations?:array<array{targetIntervalSeconds?:int, storage?:array<"SEQUENTIAL"|"LATEST">}>}}, detail?:array{s3?:array{recordingPrefix:string}}}>, tags?:array<string, string>, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}}>
     */
    public function startComposition(array $args): \AWS\Result { }

    /**
     * @param array{stageArn:string, idempotencyToken?:string, layout?:array{grid?:array{featuredParticipantAttribute?:string, omitStoppedVideo?:bool, videoAspectRatio?:"AUTO"|"VIDEO"|"SQUARE"|"PORTRAIT", videoFillMode?:"FILL"|"COVER"|"CONTAIN", gridGap?:int}, pip?:array{featuredParticipantAttribute?:string, omitStoppedVideo?:bool, videoFillMode?:"FILL"|"COVER"|"CONTAIN", gridGap?:int, pipParticipantAttribute?:string, pipBehavior?:"STATIC"|"DYNAMIC", pipOffset?:int, pipPosition?:"TOP_LEFT"|"TOP_RIGHT"|"BOTTOM_LEFT"|"BOTTOM_RIGHT", pipWidth?:int, pipHeight?:int}}, destinations:array<array{name?:string, channel?:array{channelArn:string, encoderConfigurationArn?:string}, s3?:array{storageConfigurationArn:string, encoderConfigurationArns:array<string>, recordingConfiguration?:array{format?:"HLS"}, thumbnailConfigurations?:array<array{targetIntervalSeconds?:int, storage?:array<"SEQUENTIAL"|"LATEST">}>}}>, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{composition?:array{arn:string, stageArn:string, state:"STARTING"|"ACTIVE"|"STOPPING"|"FAILED"|"STOPPED", layout:array{grid?:array{featuredParticipantAttribute?:string, omitStoppedVideo?:bool, videoAspectRatio?:"AUTO"|"VIDEO"|"SQUARE"|"PORTRAIT", videoFillMode?:"FILL"|"COVER"|"CONTAIN", gridGap?:int}, pip?:array{featuredParticipantAttribute?:string, omitStoppedVideo?:bool, videoFillMode?:"FILL"|"COVER"|"CONTAIN", gridGap?:int, pipParticipantAttribute?:string, pipBehavior?:"STATIC"|"DYNAMIC", pipOffset?:int, pipPosition?:"TOP_LEFT"|"TOP_RIGHT"|"BOTTOM_LEFT"|"BOTTOM_RIGHT", pipWidth?:int, pipHeight?:int}}, destinations:array<array{id:string, state:"STARTING"|"ACTIVE"|"STOPPING"|"RECONNECTING"|"FAILED"|"STOPPED", startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, configuration:array{name?:string, channel?:array{channelArn:string, encoderConfigurationArn?:string}, s3?:array{storageConfigurationArn:string, encoderConfigurationArns:array<string>, recordingConfiguration?:array{format?:"HLS"}, thumbnailConfigurations?:array<array{targetIntervalSeconds?:int, storage?:array<"SEQUENTIAL"|"LATEST">}>}}, detail?:array{s3?:array{recordingPrefix:string}}}>, tags?:array<string, string>, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface}}>
     */
    public function startCompositionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopComposition(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopCompositionAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{arn:string, stageArn?:string} $args
     * @return \AWS\Result<array{ingestConfiguration?:array{name?:string, arn:string, ingestProtocol:"RTMP"|"RTMPS", streamKey:string, stageArn:string, participantId:string, state:"ACTIVE"|"INACTIVE", userId?:string, attributes?:array<string, string>, tags?:array<string, string>}}>
     */
    public function updateIngestConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, stageArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ingestConfiguration?:array{name?:string, arn:string, ingestProtocol:"RTMP"|"RTMPS", streamKey:string, stageArn:string, participantId:string, state:"ACTIVE"|"INACTIVE", userId?:string, attributes?:array<string, string>, tags?:array<string, string>}}>
     */
    public function updateIngestConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, name?:string, autoParticipantRecordingConfiguration?:array{storageConfigurationArn:string, mediaTypes?:array<"AUDIO_VIDEO"|"AUDIO_ONLY"|"NONE">, thumbnailConfiguration?:array{targetIntervalSeconds?:int, storage?:array<"SEQUENTIAL"|"LATEST">, recordingMode?:"INTERVAL"|"DISABLED"}}} $args
     * @return \AWS\Result<array{stage?:array{arn:string, name?:string, activeSessionId?:string, tags?:array<string, string>, autoParticipantRecordingConfiguration?:array{storageConfigurationArn:string, mediaTypes?:array<"AUDIO_VIDEO"|"AUDIO_ONLY"|"NONE">, thumbnailConfiguration?:array{targetIntervalSeconds?:int, storage?:array<"SEQUENTIAL"|"LATEST">, recordingMode?:"INTERVAL"|"DISABLED"}}, endpoints?:array{events?:string, whip?:string, rtmp?:string, rtmps?:string}}}>
     */
    public function updateStage(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, name?:string, autoParticipantRecordingConfiguration?:array{storageConfigurationArn:string, mediaTypes?:array<"AUDIO_VIDEO"|"AUDIO_ONLY"|"NONE">, thumbnailConfiguration?:array{targetIntervalSeconds?:int, storage?:array<"SEQUENTIAL"|"LATEST">, recordingMode?:"INTERVAL"|"DISABLED"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{stage?:array{arn:string, name?:string, activeSessionId?:string, tags?:array<string, string>, autoParticipantRecordingConfiguration?:array{storageConfigurationArn:string, mediaTypes?:array<"AUDIO_VIDEO"|"AUDIO_ONLY"|"NONE">, thumbnailConfiguration?:array{targetIntervalSeconds?:int, storage?:array<"SEQUENTIAL"|"LATEST">, recordingMode?:"INTERVAL"|"DISABLED"}}, endpoints?:array{events?:string, whip?:string, rtmp?:string, rtmps?:string}}}>
     */
    public function updateStageAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
