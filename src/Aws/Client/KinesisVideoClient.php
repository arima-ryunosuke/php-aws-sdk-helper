<?php
namespace AWS\KinesisVideo;

class KinesisVideoClient
{
    /**
     * @param array{ChannelName:string, ChannelType?:"SINGLE_MASTER"|"FULL_MESH", SingleMasterConfiguration?:array{MessageTtlSeconds?:int}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{ChannelARN?:string}>
     */
    public function createSignalingChannel(array $args): \AWS\Result { }

    /**
     * @param array{ChannelName:string, ChannelType?:"SINGLE_MASTER"|"FULL_MESH", SingleMasterConfiguration?:array{MessageTtlSeconds?:int}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelARN?:string}>
     */
    public function createSignalingChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DeviceName?:string, StreamName:string, MediaType?:string, KmsKeyId?:string, DataRetentionInHours?:int, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{StreamARN?:string}>
     */
    public function createStream(array $args): \AWS\Result { }

    /**
     * @param array{DeviceName?:string, StreamName:string, MediaType?:string, KmsKeyId?:string, DataRetentionInHours?:int, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{StreamARN?:string}>
     */
    public function createStreamAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName?:string, StreamARN?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteEdgeConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{StreamName?:string, StreamARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteEdgeConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelARN:string, CurrentVersion?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSignalingChannel(array $args): \AWS\Result { }

    /**
     * @param array{ChannelARN:string, CurrentVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteSignalingChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamARN:string, CurrentVersion?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteStream(array $args): \AWS\Result { }

    /**
     * @param array{StreamARN:string, CurrentVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteStreamAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName?:string, StreamARN?:string} $args
     * @return \AWS\Result<array{StreamName?:string, StreamARN?:string, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, SyncStatus?:"SYNCING"|"ACKNOWLEDGED"|"IN_SYNC"|"SYNC_FAILED"|"DELETING"|"DELETE_FAILED"|"DELETING_ACKNOWLEDGED", FailedStatusDetails?:string, EdgeConfig?:array{HubDeviceArn:string, RecorderConfig:array{MediaSourceConfig:array{MediaUriSecretArn:string, MediaUriType:"RTSP_URI"|"FILE_URI"}, ScheduleConfig?:array{ScheduleExpression:string, DurationInSeconds:int}}, UploaderConfig?:array{ScheduleConfig:array{ScheduleExpression:string, DurationInSeconds:int}}, DeletionConfig?:array{EdgeRetentionInHours?:int, LocalSizeConfig?:array{MaxLocalMediaSizeInMB?:int, StrategyOnFullSize?:"DELETE_OLDEST_MEDIA"|"DENY_NEW_MEDIA"}, DeleteAfterUpload?:bool}}, EdgeAgentStatus?:array{LastRecorderStatus?:array{JobStatusDetails?:string, LastCollectedTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, RecorderStatus?:"SUCCESS"|"USER_ERROR"|"SYSTEM_ERROR"}, LastUploaderStatus?:array{JobStatusDetails?:string, LastCollectedTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, UploaderStatus?:"SUCCESS"|"USER_ERROR"|"SYSTEM_ERROR"}}}>
     */
    public function describeEdgeConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{StreamName?:string, StreamARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StreamName?:string, StreamARN?:string, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, SyncStatus?:"SYNCING"|"ACKNOWLEDGED"|"IN_SYNC"|"SYNC_FAILED"|"DELETING"|"DELETE_FAILED"|"DELETING_ACKNOWLEDGED", FailedStatusDetails?:string, EdgeConfig?:array{HubDeviceArn:string, RecorderConfig:array{MediaSourceConfig:array{MediaUriSecretArn:string, MediaUriType:"RTSP_URI"|"FILE_URI"}, ScheduleConfig?:array{ScheduleExpression:string, DurationInSeconds:int}}, UploaderConfig?:array{ScheduleConfig:array{ScheduleExpression:string, DurationInSeconds:int}}, DeletionConfig?:array{EdgeRetentionInHours?:int, LocalSizeConfig?:array{MaxLocalMediaSizeInMB?:int, StrategyOnFullSize?:"DELETE_OLDEST_MEDIA"|"DENY_NEW_MEDIA"}, DeleteAfterUpload?:bool}}, EdgeAgentStatus?:array{LastRecorderStatus?:array{JobStatusDetails?:string, LastCollectedTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, RecorderStatus?:"SUCCESS"|"USER_ERROR"|"SYSTEM_ERROR"}, LastUploaderStatus?:array{JobStatusDetails?:string, LastCollectedTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, UploaderStatus?:"SUCCESS"|"USER_ERROR"|"SYSTEM_ERROR"}}}>
     */
    public function describeEdgeConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName?:string, StreamARN?:string} $args
     * @return \AWS\Result<array{ImageGenerationConfiguration?:array{Status:"ENABLED"|"DISABLED", ImageSelectorType:"SERVER_TIMESTAMP"|"PRODUCER_TIMESTAMP", DestinationConfig:array{Uri:string, DestinationRegion:string}, SamplingInterval:int, Format:"JPEG"|"PNG", FormatConfig?:array<"JPEGQuality", string>, WidthPixels?:int, HeightPixels?:int}}>
     */
    public function describeImageGenerationConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{StreamName?:string, StreamARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ImageGenerationConfiguration?:array{Status:"ENABLED"|"DISABLED", ImageSelectorType:"SERVER_TIMESTAMP"|"PRODUCER_TIMESTAMP", DestinationConfig:array{Uri:string, DestinationRegion:string}, SamplingInterval:int, Format:"JPEG"|"PNG", FormatConfig?:array<"JPEGQuality", string>, WidthPixels?:int, HeightPixels?:int}}>
     */
    public function describeImageGenerationConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName?:string, StreamARN?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{MappedResourceConfigurationList?:array<array{Type?:string, ARN?:string}>, NextToken?:string}>
     */
    public function describeMappedResourceConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{StreamName?:string, StreamARN?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MappedResourceConfigurationList?:array<array{Type?:string, ARN?:string}>, NextToken?:string}>
     */
    public function describeMappedResourceConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelName?:string, ChannelARN?:string} $args
     * @return \AWS\Result<array{MediaStorageConfiguration?:array{StreamARN?:string, Status:"ENABLED"|"DISABLED"}}>
     */
    public function describeMediaStorageConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{ChannelName?:string, ChannelARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MediaStorageConfiguration?:array{StreamARN?:string, Status:"ENABLED"|"DISABLED"}}>
     */
    public function describeMediaStorageConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName?:string, StreamARN?:string} $args
     * @return \AWS\Result<array{NotificationConfiguration?:array{Status:"ENABLED"|"DISABLED", DestinationConfig:array{Uri:string}}}>
     */
    public function describeNotificationConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{StreamName?:string, StreamARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NotificationConfiguration?:array{Status:"ENABLED"|"DISABLED", DestinationConfig:array{Uri:string}}}>
     */
    public function describeNotificationConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelName?:string, ChannelARN?:string} $args
     * @return \AWS\Result<array{ChannelInfo?:array{ChannelName?:string, ChannelARN?:string, ChannelType?:"SINGLE_MASTER"|"FULL_MESH", ChannelStatus?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING", CreationTime?:int|string|\DateTimeInterface, SingleMasterConfiguration?:array{MessageTtlSeconds?:int}, Version?:string}}>
     */
    public function describeSignalingChannel(array $args = []): \AWS\Result { }

    /**
     * @param array{ChannelName?:string, ChannelARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelInfo?:array{ChannelName?:string, ChannelARN?:string, ChannelType?:"SINGLE_MASTER"|"FULL_MESH", ChannelStatus?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING", CreationTime?:int|string|\DateTimeInterface, SingleMasterConfiguration?:array{MessageTtlSeconds?:int}, Version?:string}}>
     */
    public function describeSignalingChannelAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName?:string, StreamARN?:string} $args
     * @return \AWS\Result<array{StreamInfo?:array{DeviceName?:string, StreamName?:string, StreamARN?:string, MediaType?:string, KmsKeyId?:string, Version?:string, Status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING", CreationTime?:int|string|\DateTimeInterface, DataRetentionInHours?:int}}>
     */
    public function describeStream(array $args = []): \AWS\Result { }

    /**
     * @param array{StreamName?:string, StreamARN?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StreamInfo?:array{DeviceName?:string, StreamName?:string, StreamARN?:string, MediaType?:string, KmsKeyId?:string, Version?:string, Status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING", CreationTime?:int|string|\DateTimeInterface, DataRetentionInHours?:int}}>
     */
    public function describeStreamAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName?:string, StreamARN?:string, APIName:"PUT_MEDIA"|"GET_MEDIA"|"LIST_FRAGMENTS"|"GET_MEDIA_FOR_FRAGMENT_LIST"|"GET_HLS_STREAMING_SESSION_URL"|"GET_DASH_STREAMING_SESSION_URL"|"GET_CLIP"|"GET_IMAGES"} $args
     * @return \AWS\Result<array{DataEndpoint?:string}>
     */
    public function getDataEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{StreamName?:string, StreamARN?:string, APIName:"PUT_MEDIA"|"GET_MEDIA"|"LIST_FRAGMENTS"|"GET_MEDIA_FOR_FRAGMENT_LIST"|"GET_HLS_STREAMING_SESSION_URL"|"GET_DASH_STREAMING_SESSION_URL"|"GET_CLIP"|"GET_IMAGES"} $args
     * @return \GuzzleHttp\Promise\Promise<array{DataEndpoint?:string}>
     */
    public function getDataEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelARN:string, SingleMasterChannelEndpointConfiguration?:array{Protocols?:array<"WSS"|"HTTPS"|"WEBRTC">, Role?:"MASTER"|"VIEWER"}} $args
     * @return \AWS\Result<array{ResourceEndpointList?:array<array{Protocol?:"WSS"|"HTTPS"|"WEBRTC", ResourceEndpoint?:string}>}>
     */
    public function getSignalingChannelEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{ChannelARN:string, SingleMasterChannelEndpointConfiguration?:array{Protocols?:array<"WSS"|"HTTPS"|"WEBRTC">, Role?:"MASTER"|"VIEWER"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceEndpointList?:array<array{Protocol?:"WSS"|"HTTPS"|"WEBRTC", ResourceEndpoint?:string}>}>
     */
    public function getSignalingChannelEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HubDeviceArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{EdgeConfigs?:array<array{StreamName?:string, StreamARN?:string, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, SyncStatus?:"SYNCING"|"ACKNOWLEDGED"|"IN_SYNC"|"SYNC_FAILED"|"DELETING"|"DELETE_FAILED"|"DELETING_ACKNOWLEDGED", FailedStatusDetails?:string, EdgeConfig?:array{HubDeviceArn:string, RecorderConfig:array{MediaSourceConfig:array{MediaUriSecretArn:string, MediaUriType:"RTSP_URI"|"FILE_URI"}, ScheduleConfig?:array{ScheduleExpression:string, DurationInSeconds:int}}, UploaderConfig?:array{ScheduleConfig:array{ScheduleExpression:string, DurationInSeconds:int}}, DeletionConfig?:array{EdgeRetentionInHours?:int, LocalSizeConfig?:array{MaxLocalMediaSizeInMB?:int, StrategyOnFullSize?:"DELETE_OLDEST_MEDIA"|"DENY_NEW_MEDIA"}, DeleteAfterUpload?:bool}}}>, NextToken?:string}>
     */
    public function listEdgeAgentConfigurations(array $args): \AWS\Result { }

    /**
     * @param array{HubDeviceArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EdgeConfigs?:array<array{StreamName?:string, StreamARN?:string, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, SyncStatus?:"SYNCING"|"ACKNOWLEDGED"|"IN_SYNC"|"SYNC_FAILED"|"DELETING"|"DELETE_FAILED"|"DELETING_ACKNOWLEDGED", FailedStatusDetails?:string, EdgeConfig?:array{HubDeviceArn:string, RecorderConfig:array{MediaSourceConfig:array{MediaUriSecretArn:string, MediaUriType:"RTSP_URI"|"FILE_URI"}, ScheduleConfig?:array{ScheduleExpression:string, DurationInSeconds:int}}, UploaderConfig?:array{ScheduleConfig:array{ScheduleExpression:string, DurationInSeconds:int}}, DeletionConfig?:array{EdgeRetentionInHours?:int, LocalSizeConfig?:array{MaxLocalMediaSizeInMB?:int, StrategyOnFullSize?:"DELETE_OLDEST_MEDIA"|"DENY_NEW_MEDIA"}, DeleteAfterUpload?:bool}}}>, NextToken?:string}>
     */
    public function listEdgeAgentConfigurationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ChannelNameCondition?:array{ComparisonOperator?:"BEGINS_WITH", ComparisonValue?:string}} $args
     * @return \AWS\Result<array{ChannelInfoList?:array<array{ChannelName?:string, ChannelARN?:string, ChannelType?:"SINGLE_MASTER"|"FULL_MESH", ChannelStatus?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING", CreationTime?:int|string|\DateTimeInterface, SingleMasterConfiguration?:array{MessageTtlSeconds?:int}, Version?:string}>, NextToken?:string}>
     */
    public function listSignalingChannels(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ChannelNameCondition?:array{ComparisonOperator?:"BEGINS_WITH", ComparisonValue?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelInfoList?:array<array{ChannelName?:string, ChannelARN?:string, ChannelType?:"SINGLE_MASTER"|"FULL_MESH", ChannelStatus?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING", CreationTime?:int|string|\DateTimeInterface, SingleMasterConfiguration?:array{MessageTtlSeconds?:int}, Version?:string}>, NextToken?:string}>
     */
    public function listSignalingChannelsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, StreamNameCondition?:array{ComparisonOperator?:"BEGINS_WITH", ComparisonValue?:string}} $args
     * @return \AWS\Result<array{StreamInfoList?:array<array{DeviceName?:string, StreamName?:string, StreamARN?:string, MediaType?:string, KmsKeyId?:string, Version?:string, Status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING", CreationTime?:int|string|\DateTimeInterface, DataRetentionInHours?:int}>, NextToken?:string}>
     */
    public function listStreams(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, StreamNameCondition?:array{ComparisonOperator?:"BEGINS_WITH", ComparisonValue?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{StreamInfoList?:array<array{DeviceName?:string, StreamName?:string, StreamARN?:string, MediaType?:string, KmsKeyId?:string, Version?:string, Status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING", CreationTime?:int|string|\DateTimeInterface, DataRetentionInHours?:int}>, NextToken?:string}>
     */
    public function listStreamsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, ResourceARN:string} $args
     * @return \AWS\Result<array{NextToken?:string, Tags?:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{NextToken?:string, ResourceARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Tags?:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, StreamARN?:string, StreamName?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Tags?:array<string, string>}>
     */
    public function listTagsForStream(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, StreamARN?:string, StreamName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Tags?:array<string, string>}>
     */
    public function listTagsForStreamAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName?:string, StreamARN?:string, EdgeConfig:array{HubDeviceArn:string, RecorderConfig:array{MediaSourceConfig:array{MediaUriSecretArn:string, MediaUriType:"RTSP_URI"|"FILE_URI"}, ScheduleConfig?:array{ScheduleExpression:string, DurationInSeconds:int}}, UploaderConfig?:array{ScheduleConfig:array{ScheduleExpression:string, DurationInSeconds:int}}, DeletionConfig?:array{EdgeRetentionInHours?:int, LocalSizeConfig?:array{MaxLocalMediaSizeInMB?:int, StrategyOnFullSize?:"DELETE_OLDEST_MEDIA"|"DENY_NEW_MEDIA"}, DeleteAfterUpload?:bool}}} $args
     * @return \AWS\Result<array{StreamName?:string, StreamARN?:string, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, SyncStatus?:"SYNCING"|"ACKNOWLEDGED"|"IN_SYNC"|"SYNC_FAILED"|"DELETING"|"DELETE_FAILED"|"DELETING_ACKNOWLEDGED", FailedStatusDetails?:string, EdgeConfig?:array{HubDeviceArn:string, RecorderConfig:array{MediaSourceConfig:array{MediaUriSecretArn:string, MediaUriType:"RTSP_URI"|"FILE_URI"}, ScheduleConfig?:array{ScheduleExpression:string, DurationInSeconds:int}}, UploaderConfig?:array{ScheduleConfig:array{ScheduleExpression:string, DurationInSeconds:int}}, DeletionConfig?:array{EdgeRetentionInHours?:int, LocalSizeConfig?:array{MaxLocalMediaSizeInMB?:int, StrategyOnFullSize?:"DELETE_OLDEST_MEDIA"|"DENY_NEW_MEDIA"}, DeleteAfterUpload?:bool}}}>
     */
    public function startEdgeConfigurationUpdate(array $args): \AWS\Result { }

    /**
     * @param array{StreamName?:string, StreamARN?:string, EdgeConfig:array{HubDeviceArn:string, RecorderConfig:array{MediaSourceConfig:array{MediaUriSecretArn:string, MediaUriType:"RTSP_URI"|"FILE_URI"}, ScheduleConfig?:array{ScheduleExpression:string, DurationInSeconds:int}}, UploaderConfig?:array{ScheduleConfig:array{ScheduleExpression:string, DurationInSeconds:int}}, DeletionConfig?:array{EdgeRetentionInHours?:int, LocalSizeConfig?:array{MaxLocalMediaSizeInMB?:int, StrategyOnFullSize?:"DELETE_OLDEST_MEDIA"|"DENY_NEW_MEDIA"}, DeleteAfterUpload?:bool}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{StreamName?:string, StreamARN?:string, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, SyncStatus?:"SYNCING"|"ACKNOWLEDGED"|"IN_SYNC"|"SYNC_FAILED"|"DELETING"|"DELETE_FAILED"|"DELETING_ACKNOWLEDGED", FailedStatusDetails?:string, EdgeConfig?:array{HubDeviceArn:string, RecorderConfig:array{MediaSourceConfig:array{MediaUriSecretArn:string, MediaUriType:"RTSP_URI"|"FILE_URI"}, ScheduleConfig?:array{ScheduleExpression:string, DurationInSeconds:int}}, UploaderConfig?:array{ScheduleConfig:array{ScheduleExpression:string, DurationInSeconds:int}}, DeletionConfig?:array{EdgeRetentionInHours?:int, LocalSizeConfig?:array{MaxLocalMediaSizeInMB?:int, StrategyOnFullSize?:"DELETE_OLDEST_MEDIA"|"DENY_NEW_MEDIA"}, DeleteAfterUpload?:bool}}}>
     */
    public function startEdgeConfigurationUpdateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamARN?:string, StreamName?:string, Tags:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagStream(array $args): \AWS\Result { }

    /**
     * @param array{StreamARN?:string, StreamName?:string, Tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagStreamAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, TagKeyList:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, TagKeyList:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamARN?:string, StreamName?:string, TagKeyList:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagStream(array $args): \AWS\Result { }

    /**
     * @param array{StreamARN?:string, StreamName?:string, TagKeyList:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagStreamAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName?:string, StreamARN?:string, CurrentVersion:string, Operation:"INCREASE_DATA_RETENTION"|"DECREASE_DATA_RETENTION", DataRetentionChangeInHours:int} $args
     * @return \AWS\Result<array{}>
     */
    public function updateDataRetention(array $args): \AWS\Result { }

    /**
     * @param array{StreamName?:string, StreamARN?:string, CurrentVersion:string, Operation:"INCREASE_DATA_RETENTION"|"DECREASE_DATA_RETENTION", DataRetentionChangeInHours:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateDataRetentionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName?:string, StreamARN?:string, ImageGenerationConfiguration?:array{Status:"ENABLED"|"DISABLED", ImageSelectorType:"SERVER_TIMESTAMP"|"PRODUCER_TIMESTAMP", DestinationConfig:array{Uri:string, DestinationRegion:string}, SamplingInterval:int, Format:"JPEG"|"PNG", FormatConfig?:array<"JPEGQuality", string>, WidthPixels?:int, HeightPixels?:int}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateImageGenerationConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{StreamName?:string, StreamARN?:string, ImageGenerationConfiguration?:array{Status:"ENABLED"|"DISABLED", ImageSelectorType:"SERVER_TIMESTAMP"|"PRODUCER_TIMESTAMP", DestinationConfig:array{Uri:string, DestinationRegion:string}, SamplingInterval:int, Format:"JPEG"|"PNG", FormatConfig?:array<"JPEGQuality", string>, WidthPixels?:int, HeightPixels?:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateImageGenerationConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelARN:string, MediaStorageConfiguration:array{StreamARN?:string, Status:"ENABLED"|"DISABLED"}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateMediaStorageConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ChannelARN:string, MediaStorageConfiguration:array{StreamARN?:string, Status:"ENABLED"|"DISABLED"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateMediaStorageConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName?:string, StreamARN?:string, NotificationConfiguration?:array{Status:"ENABLED"|"DISABLED", DestinationConfig:array{Uri:string}}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateNotificationConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{StreamName?:string, StreamARN?:string, NotificationConfiguration?:array{Status:"ENABLED"|"DISABLED", DestinationConfig:array{Uri:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateNotificationConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelARN:string, CurrentVersion:string, SingleMasterConfiguration?:array{MessageTtlSeconds?:int}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateSignalingChannel(array $args): \AWS\Result { }

    /**
     * @param array{ChannelARN:string, CurrentVersion:string, SingleMasterConfiguration?:array{MessageTtlSeconds?:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateSignalingChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName?:string, StreamARN?:string, CurrentVersion:string, DeviceName?:string, MediaType?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateStream(array $args): \AWS\Result { }

    /**
     * @param array{StreamName?:string, StreamARN?:string, CurrentVersion:string, DeviceName?:string, MediaType?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateStreamAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
