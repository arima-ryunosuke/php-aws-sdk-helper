<?php
namespace AWS\MediaPackageV2;

class MediaPackageV2Client
{
    /**
     * @param array{ChannelGroupName:string, ChannelName:string, OriginEndpointName:string, HarvestJobName:string, ETag?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function cancelHarvestJob(array $args): \AWS\Result { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string, OriginEndpointName:string, HarvestJobName:string, ETag?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function cancelHarvestJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string, ClientToken?:string, InputType?:"HLS"|"CMAF", Description?:string, InputSwitchConfiguration?:array{MQCSInputSwitching?:bool}, OutputHeaderConfiguration?:array{PublishMQCS?:bool}, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Arn:string, ChannelName:string, ChannelGroupName:string, CreatedAt:int|string|\DateTimeInterface, ModifiedAt:int|string|\DateTimeInterface, Description?:string, IngestEndpoints?:array<array{Id?:string, Url?:string}>, InputType?:"HLS"|"CMAF", ETag?:string, Tags?:array<string, string>, InputSwitchConfiguration?:array{MQCSInputSwitching?:bool}, OutputHeaderConfiguration?:array{PublishMQCS?:bool}}>
     */
    public function createChannel(array $args): \AWS\Result { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string, ClientToken?:string, InputType?:"HLS"|"CMAF", Description?:string, InputSwitchConfiguration?:array{MQCSInputSwitching?:bool}, OutputHeaderConfiguration?:array{PublishMQCS?:bool}, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn:string, ChannelName:string, ChannelGroupName:string, CreatedAt:int|string|\DateTimeInterface, ModifiedAt:int|string|\DateTimeInterface, Description?:string, IngestEndpoints?:array<array{Id?:string, Url?:string}>, InputType?:"HLS"|"CMAF", ETag?:string, Tags?:array<string, string>, InputSwitchConfiguration?:array{MQCSInputSwitching?:bool}, OutputHeaderConfiguration?:array{PublishMQCS?:bool}}>
     */
    public function createChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelGroupName:string, ClientToken?:string, Description?:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{ChannelGroupName:string, Arn:string, EgressDomain:string, CreatedAt:int|string|\DateTimeInterface, ModifiedAt:int|string|\DateTimeInterface, ETag?:string, Description?:string, Tags?:array<string, string>}>
     */
    public function createChannelGroup(array $args): \AWS\Result { }

    /**
     * @param array{ChannelGroupName:string, ClientToken?:string, Description?:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelGroupName:string, Arn:string, EgressDomain:string, CreatedAt:int|string|\DateTimeInterface, ModifiedAt:int|string|\DateTimeInterface, ETag?:string, Description?:string, Tags?:array<string, string>}>
     */
    public function createChannelGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string, OriginEndpointName:string, Description?:string, HarvestedManifests:array{HlsManifests?:array<array{ManifestName:string}>, DashManifests?:array<array{ManifestName:string}>, LowLatencyHlsManifests?:array<array{ManifestName:string}>}, ScheduleConfiguration:array{StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface}, Destination:array{S3Destination:array{BucketName:string, DestinationPath:string}}, ClientToken?:string, HarvestJobName?:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{ChannelGroupName:string, ChannelName:string, OriginEndpointName:string, Destination:array{S3Destination:array{BucketName:string, DestinationPath:string}}, HarvestJobName:string, HarvestedManifests:array{HlsManifests?:array<array{ManifestName:string}>, DashManifests?:array<array{ManifestName:string}>, LowLatencyHlsManifests?:array<array{ManifestName:string}>}, Description?:string, ScheduleConfiguration:array{StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface}, Arn:string, CreatedAt:int|string|\DateTimeInterface, ModifiedAt:int|string|\DateTimeInterface, Status:"QUEUED"|"IN_PROGRESS"|"CANCELLED"|"COMPLETED"|"FAILED", ErrorMessage?:string, ETag?:string, Tags?:array<string, string>}>
     */
    public function createHarvestJob(array $args): \AWS\Result { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string, OriginEndpointName:string, Description?:string, HarvestedManifests:array{HlsManifests?:array<array{ManifestName:string}>, DashManifests?:array<array{ManifestName:string}>, LowLatencyHlsManifests?:array<array{ManifestName:string}>}, ScheduleConfiguration:array{StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface}, Destination:array{S3Destination:array{BucketName:string, DestinationPath:string}}, ClientToken?:string, HarvestJobName?:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelGroupName:string, ChannelName:string, OriginEndpointName:string, Destination:array{S3Destination:array{BucketName:string, DestinationPath:string}}, HarvestJobName:string, HarvestedManifests:array{HlsManifests?:array<array{ManifestName:string}>, DashManifests?:array<array{ManifestName:string}>, LowLatencyHlsManifests?:array<array{ManifestName:string}>}, Description?:string, ScheduleConfiguration:array{StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface}, Arn:string, CreatedAt:int|string|\DateTimeInterface, ModifiedAt:int|string|\DateTimeInterface, Status:"QUEUED"|"IN_PROGRESS"|"CANCELLED"|"COMPLETED"|"FAILED", ErrorMessage?:string, ETag?:string, Tags?:array<string, string>}>
     */
    public function createHarvestJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string, OriginEndpointName:string, ContainerType:"TS"|"CMAF", Segment?:array{SegmentDurationSeconds?:int, SegmentName?:string, TsUseAudioRenditionGroup?:bool, IncludeIframeOnlyStreams?:bool, TsIncludeDvbSubtitles?:bool, Scte?:array{ScteFilter?:array<"SPLICE_INSERT"|"BREAK"|"PROVIDER_ADVERTISEMENT"|"DISTRIBUTOR_ADVERTISEMENT"|"PROVIDER_PLACEMENT_OPPORTUNITY"|"DISTRIBUTOR_PLACEMENT_OPPORTUNITY"|"PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY"|"DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY"|"PROGRAM">}, Encryption?:array{ConstantInitializationVector?:string, EncryptionMethod:array{TsEncryptionMethod?:"AES_128"|"SAMPLE_AES", CmafEncryptionMethod?:"CENC"|"CBCS"}, KeyRotationIntervalSeconds?:int, SpekeKeyProvider:array{EncryptionContractConfiguration:array{PresetSpeke20Audio:"PRESET_AUDIO_1"|"PRESET_AUDIO_2"|"PRESET_AUDIO_3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET_VIDEO_1"|"PRESET_VIDEO_2"|"PRESET_VIDEO_3"|"PRESET_VIDEO_4"|"PRESET_VIDEO_5"|"PRESET_VIDEO_6"|"PRESET_VIDEO_7"|"PRESET_VIDEO_8"|"SHARED"|"UNENCRYPTED"}, ResourceId:string, DrmSystems:array<"CLEAR_KEY_AES_128"|"FAIRPLAY"|"PLAYREADY"|"WIDEVINE"|"IRDETO">, RoleArn:string, Url:string}}}, ClientToken?:string, Description?:string, StartoverWindowSeconds?:int, HlsManifests?:array<array{ManifestName:string, ChildManifestName?:string, ScteHls?:array{AdMarkerHls?:"DATERANGE"}, StartTag?:array{TimeOffset:float, Precise?:bool}, ManifestWindowSeconds?:int, ProgramDateTimeIntervalSeconds?:int, FilterConfiguration?:array{ManifestFilter?:string, Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface, TimeDelaySeconds?:int, ClipStartTime?:int|string|\DateTimeInterface}}>, LowLatencyHlsManifests?:array<array{ManifestName:string, ChildManifestName?:string, ScteHls?:array{AdMarkerHls?:"DATERANGE"}, StartTag?:array{TimeOffset:float, Precise?:bool}, ManifestWindowSeconds?:int, ProgramDateTimeIntervalSeconds?:int, FilterConfiguration?:array{ManifestFilter?:string, Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface, TimeDelaySeconds?:int, ClipStartTime?:int|string|\DateTimeInterface}}>, DashManifests?:array<array{ManifestName:string, ManifestWindowSeconds?:int, FilterConfiguration?:array{ManifestFilter?:string, Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface, TimeDelaySeconds?:int, ClipStartTime?:int|string|\DateTimeInterface}, MinUpdatePeriodSeconds?:int, MinBufferTimeSeconds?:int, SuggestedPresentationDelaySeconds?:int, SegmentTemplateFormat?:"NUMBER_WITH_TIMELINE", PeriodTriggers?:array<"AVAILS"|"DRM_KEY_ROTATION"|"SOURCE_CHANGES"|"SOURCE_DISRUPTIONS"|"NONE">, ScteDash?:array{AdMarkerDash?:"BINARY"|"XML"}, DrmSignaling?:"INDIVIDUAL"|"REFERENCED", UtcTiming?:array{TimingMode?:"HTTP_HEAD"|"HTTP_ISO"|"HTTP_XSDATE"|"UTC_DIRECT", TimingSource?:string}}>, ForceEndpointErrorConfiguration?:array{EndpointErrorConditions?:array<"STALE_MANIFEST"|"INCOMPLETE_MANIFEST"|"MISSING_DRM_KEY"|"SLATE_INPUT">}, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Arn:string, ChannelGroupName:string, ChannelName:string, OriginEndpointName:string, ContainerType:"TS"|"CMAF", Segment:array{SegmentDurationSeconds?:int, SegmentName?:string, TsUseAudioRenditionGroup?:bool, IncludeIframeOnlyStreams?:bool, TsIncludeDvbSubtitles?:bool, Scte?:array{ScteFilter?:array<"SPLICE_INSERT"|"BREAK"|"PROVIDER_ADVERTISEMENT"|"DISTRIBUTOR_ADVERTISEMENT"|"PROVIDER_PLACEMENT_OPPORTUNITY"|"DISTRIBUTOR_PLACEMENT_OPPORTUNITY"|"PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY"|"DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY"|"PROGRAM">}, Encryption?:array{ConstantInitializationVector?:string, EncryptionMethod:array{TsEncryptionMethod?:"AES_128"|"SAMPLE_AES", CmafEncryptionMethod?:"CENC"|"CBCS"}, KeyRotationIntervalSeconds?:int, SpekeKeyProvider:array{EncryptionContractConfiguration:array{PresetSpeke20Audio:"PRESET_AUDIO_1"|"PRESET_AUDIO_2"|"PRESET_AUDIO_3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET_VIDEO_1"|"PRESET_VIDEO_2"|"PRESET_VIDEO_3"|"PRESET_VIDEO_4"|"PRESET_VIDEO_5"|"PRESET_VIDEO_6"|"PRESET_VIDEO_7"|"PRESET_VIDEO_8"|"SHARED"|"UNENCRYPTED"}, ResourceId:string, DrmSystems:array<"CLEAR_KEY_AES_128"|"FAIRPLAY"|"PLAYREADY"|"WIDEVINE"|"IRDETO">, RoleArn:string, Url:string}}}, CreatedAt:int|string|\DateTimeInterface, ModifiedAt:int|string|\DateTimeInterface, Description?:string, StartoverWindowSeconds?:int, HlsManifests?:array<array{ManifestName:string, Url:string, ChildManifestName?:string, ManifestWindowSeconds?:int, ProgramDateTimeIntervalSeconds?:int, ScteHls?:array{AdMarkerHls?:"DATERANGE"}, FilterConfiguration?:array{ManifestFilter?:string, Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface, TimeDelaySeconds?:int, ClipStartTime?:int|string|\DateTimeInterface}, StartTag?:array{TimeOffset:float, Precise?:bool}}>, LowLatencyHlsManifests?:array<array{ManifestName:string, Url:string, ChildManifestName?:string, ManifestWindowSeconds?:int, ProgramDateTimeIntervalSeconds?:int, ScteHls?:array{AdMarkerHls?:"DATERANGE"}, FilterConfiguration?:array{ManifestFilter?:string, Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface, TimeDelaySeconds?:int, ClipStartTime?:int|string|\DateTimeInterface}, StartTag?:array{TimeOffset:float, Precise?:bool}}>, DashManifests?:array<array{ManifestName:string, Url:string, ManifestWindowSeconds?:int, FilterConfiguration?:array{ManifestFilter?:string, Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface, TimeDelaySeconds?:int, ClipStartTime?:int|string|\DateTimeInterface}, MinUpdatePeriodSeconds?:int, MinBufferTimeSeconds?:int, SuggestedPresentationDelaySeconds?:int, SegmentTemplateFormat?:"NUMBER_WITH_TIMELINE", PeriodTriggers?:array<"AVAILS"|"DRM_KEY_ROTATION"|"SOURCE_CHANGES"|"SOURCE_DISRUPTIONS"|"NONE">, ScteDash?:array{AdMarkerDash?:"BINARY"|"XML"}, DrmSignaling?:"INDIVIDUAL"|"REFERENCED", UtcTiming?:array{TimingMode?:"HTTP_HEAD"|"HTTP_ISO"|"HTTP_XSDATE"|"UTC_DIRECT", TimingSource?:string}}>, ForceEndpointErrorConfiguration?:array{EndpointErrorConditions?:array<"STALE_MANIFEST"|"INCOMPLETE_MANIFEST"|"MISSING_DRM_KEY"|"SLATE_INPUT">}, ETag?:string, Tags?:array<string, string>}>
     */
    public function createOriginEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string, OriginEndpointName:string, ContainerType:"TS"|"CMAF", Segment?:array{SegmentDurationSeconds?:int, SegmentName?:string, TsUseAudioRenditionGroup?:bool, IncludeIframeOnlyStreams?:bool, TsIncludeDvbSubtitles?:bool, Scte?:array{ScteFilter?:array<"SPLICE_INSERT"|"BREAK"|"PROVIDER_ADVERTISEMENT"|"DISTRIBUTOR_ADVERTISEMENT"|"PROVIDER_PLACEMENT_OPPORTUNITY"|"DISTRIBUTOR_PLACEMENT_OPPORTUNITY"|"PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY"|"DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY"|"PROGRAM">}, Encryption?:array{ConstantInitializationVector?:string, EncryptionMethod:array{TsEncryptionMethod?:"AES_128"|"SAMPLE_AES", CmafEncryptionMethod?:"CENC"|"CBCS"}, KeyRotationIntervalSeconds?:int, SpekeKeyProvider:array{EncryptionContractConfiguration:array{PresetSpeke20Audio:"PRESET_AUDIO_1"|"PRESET_AUDIO_2"|"PRESET_AUDIO_3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET_VIDEO_1"|"PRESET_VIDEO_2"|"PRESET_VIDEO_3"|"PRESET_VIDEO_4"|"PRESET_VIDEO_5"|"PRESET_VIDEO_6"|"PRESET_VIDEO_7"|"PRESET_VIDEO_8"|"SHARED"|"UNENCRYPTED"}, ResourceId:string, DrmSystems:array<"CLEAR_KEY_AES_128"|"FAIRPLAY"|"PLAYREADY"|"WIDEVINE"|"IRDETO">, RoleArn:string, Url:string}}}, ClientToken?:string, Description?:string, StartoverWindowSeconds?:int, HlsManifests?:array<array{ManifestName:string, ChildManifestName?:string, ScteHls?:array{AdMarkerHls?:"DATERANGE"}, StartTag?:array{TimeOffset:float, Precise?:bool}, ManifestWindowSeconds?:int, ProgramDateTimeIntervalSeconds?:int, FilterConfiguration?:array{ManifestFilter?:string, Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface, TimeDelaySeconds?:int, ClipStartTime?:int|string|\DateTimeInterface}}>, LowLatencyHlsManifests?:array<array{ManifestName:string, ChildManifestName?:string, ScteHls?:array{AdMarkerHls?:"DATERANGE"}, StartTag?:array{TimeOffset:float, Precise?:bool}, ManifestWindowSeconds?:int, ProgramDateTimeIntervalSeconds?:int, FilterConfiguration?:array{ManifestFilter?:string, Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface, TimeDelaySeconds?:int, ClipStartTime?:int|string|\DateTimeInterface}}>, DashManifests?:array<array{ManifestName:string, ManifestWindowSeconds?:int, FilterConfiguration?:array{ManifestFilter?:string, Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface, TimeDelaySeconds?:int, ClipStartTime?:int|string|\DateTimeInterface}, MinUpdatePeriodSeconds?:int, MinBufferTimeSeconds?:int, SuggestedPresentationDelaySeconds?:int, SegmentTemplateFormat?:"NUMBER_WITH_TIMELINE", PeriodTriggers?:array<"AVAILS"|"DRM_KEY_ROTATION"|"SOURCE_CHANGES"|"SOURCE_DISRUPTIONS"|"NONE">, ScteDash?:array{AdMarkerDash?:"BINARY"|"XML"}, DrmSignaling?:"INDIVIDUAL"|"REFERENCED", UtcTiming?:array{TimingMode?:"HTTP_HEAD"|"HTTP_ISO"|"HTTP_XSDATE"|"UTC_DIRECT", TimingSource?:string}}>, ForceEndpointErrorConfiguration?:array{EndpointErrorConditions?:array<"STALE_MANIFEST"|"INCOMPLETE_MANIFEST"|"MISSING_DRM_KEY"|"SLATE_INPUT">}, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn:string, ChannelGroupName:string, ChannelName:string, OriginEndpointName:string, ContainerType:"TS"|"CMAF", Segment:array{SegmentDurationSeconds?:int, SegmentName?:string, TsUseAudioRenditionGroup?:bool, IncludeIframeOnlyStreams?:bool, TsIncludeDvbSubtitles?:bool, Scte?:array{ScteFilter?:array<"SPLICE_INSERT"|"BREAK"|"PROVIDER_ADVERTISEMENT"|"DISTRIBUTOR_ADVERTISEMENT"|"PROVIDER_PLACEMENT_OPPORTUNITY"|"DISTRIBUTOR_PLACEMENT_OPPORTUNITY"|"PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY"|"DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY"|"PROGRAM">}, Encryption?:array{ConstantInitializationVector?:string, EncryptionMethod:array{TsEncryptionMethod?:"AES_128"|"SAMPLE_AES", CmafEncryptionMethod?:"CENC"|"CBCS"}, KeyRotationIntervalSeconds?:int, SpekeKeyProvider:array{EncryptionContractConfiguration:array{PresetSpeke20Audio:"PRESET_AUDIO_1"|"PRESET_AUDIO_2"|"PRESET_AUDIO_3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET_VIDEO_1"|"PRESET_VIDEO_2"|"PRESET_VIDEO_3"|"PRESET_VIDEO_4"|"PRESET_VIDEO_5"|"PRESET_VIDEO_6"|"PRESET_VIDEO_7"|"PRESET_VIDEO_8"|"SHARED"|"UNENCRYPTED"}, ResourceId:string, DrmSystems:array<"CLEAR_KEY_AES_128"|"FAIRPLAY"|"PLAYREADY"|"WIDEVINE"|"IRDETO">, RoleArn:string, Url:string}}}, CreatedAt:int|string|\DateTimeInterface, ModifiedAt:int|string|\DateTimeInterface, Description?:string, StartoverWindowSeconds?:int, HlsManifests?:array<array{ManifestName:string, Url:string, ChildManifestName?:string, ManifestWindowSeconds?:int, ProgramDateTimeIntervalSeconds?:int, ScteHls?:array{AdMarkerHls?:"DATERANGE"}, FilterConfiguration?:array{ManifestFilter?:string, Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface, TimeDelaySeconds?:int, ClipStartTime?:int|string|\DateTimeInterface}, StartTag?:array{TimeOffset:float, Precise?:bool}}>, LowLatencyHlsManifests?:array<array{ManifestName:string, Url:string, ChildManifestName?:string, ManifestWindowSeconds?:int, ProgramDateTimeIntervalSeconds?:int, ScteHls?:array{AdMarkerHls?:"DATERANGE"}, FilterConfiguration?:array{ManifestFilter?:string, Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface, TimeDelaySeconds?:int, ClipStartTime?:int|string|\DateTimeInterface}, StartTag?:array{TimeOffset:float, Precise?:bool}}>, DashManifests?:array<array{ManifestName:string, Url:string, ManifestWindowSeconds?:int, FilterConfiguration?:array{ManifestFilter?:string, Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface, TimeDelaySeconds?:int, ClipStartTime?:int|string|\DateTimeInterface}, MinUpdatePeriodSeconds?:int, MinBufferTimeSeconds?:int, SuggestedPresentationDelaySeconds?:int, SegmentTemplateFormat?:"NUMBER_WITH_TIMELINE", PeriodTriggers?:array<"AVAILS"|"DRM_KEY_ROTATION"|"SOURCE_CHANGES"|"SOURCE_DISRUPTIONS"|"NONE">, ScteDash?:array{AdMarkerDash?:"BINARY"|"XML"}, DrmSignaling?:"INDIVIDUAL"|"REFERENCED", UtcTiming?:array{TimingMode?:"HTTP_HEAD"|"HTTP_ISO"|"HTTP_XSDATE"|"UTC_DIRECT", TimingSource?:string}}>, ForceEndpointErrorConfiguration?:array{EndpointErrorConditions?:array<"STALE_MANIFEST"|"INCOMPLETE_MANIFEST"|"MISSING_DRM_KEY"|"SLATE_INPUT">}, ETag?:string, Tags?:array<string, string>}>
     */
    public function createOriginEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteChannel(array $args): \AWS\Result { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelGroupName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteChannelGroup(array $args): \AWS\Result { }

    /**
     * @param array{ChannelGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteChannelGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteChannelPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteChannelPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string, OriginEndpointName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteOriginEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string, OriginEndpointName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteOriginEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string, OriginEndpointName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteOriginEndpointPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string, OriginEndpointName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteOriginEndpointPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string} $args
     * @return \AWS\Result<array{Arn:string, ChannelName:string, ChannelGroupName:string, CreatedAt:int|string|\DateTimeInterface, ModifiedAt:int|string|\DateTimeInterface, Description?:string, IngestEndpoints?:array<array{Id?:string, Url?:string}>, InputType?:"HLS"|"CMAF", ETag?:string, Tags?:array<string, string>, InputSwitchConfiguration?:array{MQCSInputSwitching?:bool}, OutputHeaderConfiguration?:array{PublishMQCS?:bool}}>
     */
    public function getChannel(array $args): \AWS\Result { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn:string, ChannelName:string, ChannelGroupName:string, CreatedAt:int|string|\DateTimeInterface, ModifiedAt:int|string|\DateTimeInterface, Description?:string, IngestEndpoints?:array<array{Id?:string, Url?:string}>, InputType?:"HLS"|"CMAF", ETag?:string, Tags?:array<string, string>, InputSwitchConfiguration?:array{MQCSInputSwitching?:bool}, OutputHeaderConfiguration?:array{PublishMQCS?:bool}}>
     */
    public function getChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelGroupName:string} $args
     * @return \AWS\Result<array{ChannelGroupName:string, Arn:string, EgressDomain:string, CreatedAt:int|string|\DateTimeInterface, ModifiedAt:int|string|\DateTimeInterface, Description?:string, ETag?:string, Tags?:array<string, string>}>
     */
    public function getChannelGroup(array $args): \AWS\Result { }

    /**
     * @param array{ChannelGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelGroupName:string, Arn:string, EgressDomain:string, CreatedAt:int|string|\DateTimeInterface, ModifiedAt:int|string|\DateTimeInterface, Description?:string, ETag?:string, Tags?:array<string, string>}>
     */
    public function getChannelGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string} $args
     * @return \AWS\Result<array{ChannelGroupName:string, ChannelName:string, Policy:string}>
     */
    public function getChannelPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelGroupName:string, ChannelName:string, Policy:string}>
     */
    public function getChannelPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string, OriginEndpointName:string, HarvestJobName:string} $args
     * @return \AWS\Result<array{ChannelGroupName:string, ChannelName:string, OriginEndpointName:string, Destination:array{S3Destination:array{BucketName:string, DestinationPath:string}}, HarvestJobName:string, HarvestedManifests:array{HlsManifests?:array<array{ManifestName:string}>, DashManifests?:array<array{ManifestName:string}>, LowLatencyHlsManifests?:array<array{ManifestName:string}>}, Description?:string, ScheduleConfiguration:array{StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface}, Arn:string, CreatedAt:int|string|\DateTimeInterface, ModifiedAt:int|string|\DateTimeInterface, Status:"QUEUED"|"IN_PROGRESS"|"CANCELLED"|"COMPLETED"|"FAILED", ErrorMessage?:string, ETag?:string, Tags?:array<string, string>}>
     */
    public function getHarvestJob(array $args): \AWS\Result { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string, OriginEndpointName:string, HarvestJobName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelGroupName:string, ChannelName:string, OriginEndpointName:string, Destination:array{S3Destination:array{BucketName:string, DestinationPath:string}}, HarvestJobName:string, HarvestedManifests:array{HlsManifests?:array<array{ManifestName:string}>, DashManifests?:array<array{ManifestName:string}>, LowLatencyHlsManifests?:array<array{ManifestName:string}>}, Description?:string, ScheduleConfiguration:array{StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface}, Arn:string, CreatedAt:int|string|\DateTimeInterface, ModifiedAt:int|string|\DateTimeInterface, Status:"QUEUED"|"IN_PROGRESS"|"CANCELLED"|"COMPLETED"|"FAILED", ErrorMessage?:string, ETag?:string, Tags?:array<string, string>}>
     */
    public function getHarvestJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string, OriginEndpointName:string} $args
     * @return \AWS\Result<array{Arn:string, ChannelGroupName:string, ChannelName:string, OriginEndpointName:string, ContainerType:"TS"|"CMAF", Segment:array{SegmentDurationSeconds?:int, SegmentName?:string, TsUseAudioRenditionGroup?:bool, IncludeIframeOnlyStreams?:bool, TsIncludeDvbSubtitles?:bool, Scte?:array{ScteFilter?:array<"SPLICE_INSERT"|"BREAK"|"PROVIDER_ADVERTISEMENT"|"DISTRIBUTOR_ADVERTISEMENT"|"PROVIDER_PLACEMENT_OPPORTUNITY"|"DISTRIBUTOR_PLACEMENT_OPPORTUNITY"|"PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY"|"DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY"|"PROGRAM">}, Encryption?:array{ConstantInitializationVector?:string, EncryptionMethod:array{TsEncryptionMethod?:"AES_128"|"SAMPLE_AES", CmafEncryptionMethod?:"CENC"|"CBCS"}, KeyRotationIntervalSeconds?:int, SpekeKeyProvider:array{EncryptionContractConfiguration:array{PresetSpeke20Audio:"PRESET_AUDIO_1"|"PRESET_AUDIO_2"|"PRESET_AUDIO_3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET_VIDEO_1"|"PRESET_VIDEO_2"|"PRESET_VIDEO_3"|"PRESET_VIDEO_4"|"PRESET_VIDEO_5"|"PRESET_VIDEO_6"|"PRESET_VIDEO_7"|"PRESET_VIDEO_8"|"SHARED"|"UNENCRYPTED"}, ResourceId:string, DrmSystems:array<"CLEAR_KEY_AES_128"|"FAIRPLAY"|"PLAYREADY"|"WIDEVINE"|"IRDETO">, RoleArn:string, Url:string}}}, CreatedAt:int|string|\DateTimeInterface, ModifiedAt:int|string|\DateTimeInterface, Description?:string, StartoverWindowSeconds?:int, HlsManifests?:array<array{ManifestName:string, Url:string, ChildManifestName?:string, ManifestWindowSeconds?:int, ProgramDateTimeIntervalSeconds?:int, ScteHls?:array{AdMarkerHls?:"DATERANGE"}, FilterConfiguration?:array{ManifestFilter?:string, Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface, TimeDelaySeconds?:int, ClipStartTime?:int|string|\DateTimeInterface}, StartTag?:array{TimeOffset:float, Precise?:bool}}>, LowLatencyHlsManifests?:array<array{ManifestName:string, Url:string, ChildManifestName?:string, ManifestWindowSeconds?:int, ProgramDateTimeIntervalSeconds?:int, ScteHls?:array{AdMarkerHls?:"DATERANGE"}, FilterConfiguration?:array{ManifestFilter?:string, Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface, TimeDelaySeconds?:int, ClipStartTime?:int|string|\DateTimeInterface}, StartTag?:array{TimeOffset:float, Precise?:bool}}>, DashManifests?:array<array{ManifestName:string, Url:string, ManifestWindowSeconds?:int, FilterConfiguration?:array{ManifestFilter?:string, Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface, TimeDelaySeconds?:int, ClipStartTime?:int|string|\DateTimeInterface}, MinUpdatePeriodSeconds?:int, MinBufferTimeSeconds?:int, SuggestedPresentationDelaySeconds?:int, SegmentTemplateFormat?:"NUMBER_WITH_TIMELINE", PeriodTriggers?:array<"AVAILS"|"DRM_KEY_ROTATION"|"SOURCE_CHANGES"|"SOURCE_DISRUPTIONS"|"NONE">, ScteDash?:array{AdMarkerDash?:"BINARY"|"XML"}, DrmSignaling?:"INDIVIDUAL"|"REFERENCED", UtcTiming?:array{TimingMode?:"HTTP_HEAD"|"HTTP_ISO"|"HTTP_XSDATE"|"UTC_DIRECT", TimingSource?:string}}>, ForceEndpointErrorConfiguration?:array{EndpointErrorConditions?:array<"STALE_MANIFEST"|"INCOMPLETE_MANIFEST"|"MISSING_DRM_KEY"|"SLATE_INPUT">}, ETag?:string, Tags?:array<string, string>}>
     */
    public function getOriginEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string, OriginEndpointName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn:string, ChannelGroupName:string, ChannelName:string, OriginEndpointName:string, ContainerType:"TS"|"CMAF", Segment:array{SegmentDurationSeconds?:int, SegmentName?:string, TsUseAudioRenditionGroup?:bool, IncludeIframeOnlyStreams?:bool, TsIncludeDvbSubtitles?:bool, Scte?:array{ScteFilter?:array<"SPLICE_INSERT"|"BREAK"|"PROVIDER_ADVERTISEMENT"|"DISTRIBUTOR_ADVERTISEMENT"|"PROVIDER_PLACEMENT_OPPORTUNITY"|"DISTRIBUTOR_PLACEMENT_OPPORTUNITY"|"PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY"|"DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY"|"PROGRAM">}, Encryption?:array{ConstantInitializationVector?:string, EncryptionMethod:array{TsEncryptionMethod?:"AES_128"|"SAMPLE_AES", CmafEncryptionMethod?:"CENC"|"CBCS"}, KeyRotationIntervalSeconds?:int, SpekeKeyProvider:array{EncryptionContractConfiguration:array{PresetSpeke20Audio:"PRESET_AUDIO_1"|"PRESET_AUDIO_2"|"PRESET_AUDIO_3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET_VIDEO_1"|"PRESET_VIDEO_2"|"PRESET_VIDEO_3"|"PRESET_VIDEO_4"|"PRESET_VIDEO_5"|"PRESET_VIDEO_6"|"PRESET_VIDEO_7"|"PRESET_VIDEO_8"|"SHARED"|"UNENCRYPTED"}, ResourceId:string, DrmSystems:array<"CLEAR_KEY_AES_128"|"FAIRPLAY"|"PLAYREADY"|"WIDEVINE"|"IRDETO">, RoleArn:string, Url:string}}}, CreatedAt:int|string|\DateTimeInterface, ModifiedAt:int|string|\DateTimeInterface, Description?:string, StartoverWindowSeconds?:int, HlsManifests?:array<array{ManifestName:string, Url:string, ChildManifestName?:string, ManifestWindowSeconds?:int, ProgramDateTimeIntervalSeconds?:int, ScteHls?:array{AdMarkerHls?:"DATERANGE"}, FilterConfiguration?:array{ManifestFilter?:string, Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface, TimeDelaySeconds?:int, ClipStartTime?:int|string|\DateTimeInterface}, StartTag?:array{TimeOffset:float, Precise?:bool}}>, LowLatencyHlsManifests?:array<array{ManifestName:string, Url:string, ChildManifestName?:string, ManifestWindowSeconds?:int, ProgramDateTimeIntervalSeconds?:int, ScteHls?:array{AdMarkerHls?:"DATERANGE"}, FilterConfiguration?:array{ManifestFilter?:string, Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface, TimeDelaySeconds?:int, ClipStartTime?:int|string|\DateTimeInterface}, StartTag?:array{TimeOffset:float, Precise?:bool}}>, DashManifests?:array<array{ManifestName:string, Url:string, ManifestWindowSeconds?:int, FilterConfiguration?:array{ManifestFilter?:string, Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface, TimeDelaySeconds?:int, ClipStartTime?:int|string|\DateTimeInterface}, MinUpdatePeriodSeconds?:int, MinBufferTimeSeconds?:int, SuggestedPresentationDelaySeconds?:int, SegmentTemplateFormat?:"NUMBER_WITH_TIMELINE", PeriodTriggers?:array<"AVAILS"|"DRM_KEY_ROTATION"|"SOURCE_CHANGES"|"SOURCE_DISRUPTIONS"|"NONE">, ScteDash?:array{AdMarkerDash?:"BINARY"|"XML"}, DrmSignaling?:"INDIVIDUAL"|"REFERENCED", UtcTiming?:array{TimingMode?:"HTTP_HEAD"|"HTTP_ISO"|"HTTP_XSDATE"|"UTC_DIRECT", TimingSource?:string}}>, ForceEndpointErrorConfiguration?:array{EndpointErrorConditions?:array<"STALE_MANIFEST"|"INCOMPLETE_MANIFEST"|"MISSING_DRM_KEY"|"SLATE_INPUT">}, ETag?:string, Tags?:array<string, string>}>
     */
    public function getOriginEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string, OriginEndpointName:string} $args
     * @return \AWS\Result<array{ChannelGroupName:string, ChannelName:string, OriginEndpointName:string, Policy:string}>
     */
    public function getOriginEndpointPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string, OriginEndpointName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelGroupName:string, ChannelName:string, OriginEndpointName:string, Policy:string}>
     */
    public function getOriginEndpointPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Items?:array<array{ChannelGroupName:string, Arn:string, CreatedAt:int|string|\DateTimeInterface, ModifiedAt:int|string|\DateTimeInterface, Description?:string}>, NextToken?:string}>
     */
    public function listChannelGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{ChannelGroupName:string, Arn:string, CreatedAt:int|string|\DateTimeInterface, ModifiedAt:int|string|\DateTimeInterface, Description?:string}>, NextToken?:string}>
     */
    public function listChannelGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelGroupName:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Items?:array<array{Arn:string, ChannelName:string, ChannelGroupName:string, CreatedAt:int|string|\DateTimeInterface, ModifiedAt:int|string|\DateTimeInterface, Description?:string, InputType?:"HLS"|"CMAF"}>, NextToken?:string}>
     */
    public function listChannels(array $args): \AWS\Result { }

    /**
     * @param array{ChannelGroupName:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{Arn:string, ChannelName:string, ChannelGroupName:string, CreatedAt:int|string|\DateTimeInterface, ModifiedAt:int|string|\DateTimeInterface, Description?:string, InputType?:"HLS"|"CMAF"}>, NextToken?:string}>
     */
    public function listChannelsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelGroupName:string, ChannelName?:string, OriginEndpointName?:string, Status?:"QUEUED"|"IN_PROGRESS"|"CANCELLED"|"COMPLETED"|"FAILED", MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Items?:array<array{ChannelGroupName:string, ChannelName:string, OriginEndpointName:string, Destination:array{S3Destination:array{BucketName:string, DestinationPath:string}}, HarvestJobName:string, HarvestedManifests:array{HlsManifests?:array<array{ManifestName:string}>, DashManifests?:array<array{ManifestName:string}>, LowLatencyHlsManifests?:array<array{ManifestName:string}>}, Description?:string, ScheduleConfiguration:array{StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface}, Arn:string, CreatedAt:int|string|\DateTimeInterface, ModifiedAt:int|string|\DateTimeInterface, Status:"QUEUED"|"IN_PROGRESS"|"CANCELLED"|"COMPLETED"|"FAILED", ErrorMessage?:string, ETag?:string}>, NextToken?:string}>
     */
    public function listHarvestJobs(array $args): \AWS\Result { }

    /**
     * @param array{ChannelGroupName:string, ChannelName?:string, OriginEndpointName?:string, Status?:"QUEUED"|"IN_PROGRESS"|"CANCELLED"|"COMPLETED"|"FAILED", MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{ChannelGroupName:string, ChannelName:string, OriginEndpointName:string, Destination:array{S3Destination:array{BucketName:string, DestinationPath:string}}, HarvestJobName:string, HarvestedManifests:array{HlsManifests?:array<array{ManifestName:string}>, DashManifests?:array<array{ManifestName:string}>, LowLatencyHlsManifests?:array<array{ManifestName:string}>}, Description?:string, ScheduleConfiguration:array{StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface}, Arn:string, CreatedAt:int|string|\DateTimeInterface, ModifiedAt:int|string|\DateTimeInterface, Status:"QUEUED"|"IN_PROGRESS"|"CANCELLED"|"COMPLETED"|"FAILED", ErrorMessage?:string, ETag?:string}>, NextToken?:string}>
     */
    public function listHarvestJobsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Items?:array<array{Arn:string, ChannelGroupName:string, ChannelName:string, OriginEndpointName:string, ContainerType:"TS"|"CMAF", Description?:string, CreatedAt?:int|string|\DateTimeInterface, ModifiedAt?:int|string|\DateTimeInterface, HlsManifests?:array<array{ManifestName:string, ChildManifestName?:string, Url?:string}>, LowLatencyHlsManifests?:array<array{ManifestName:string, ChildManifestName?:string, Url?:string}>, DashManifests?:array<array{ManifestName:string, Url?:string}>, ForceEndpointErrorConfiguration?:array{EndpointErrorConditions?:array<"STALE_MANIFEST"|"INCOMPLETE_MANIFEST"|"MISSING_DRM_KEY"|"SLATE_INPUT">}}>, NextToken?:string}>
     */
    public function listOriginEndpoints(array $args): \AWS\Result { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{Arn:string, ChannelGroupName:string, ChannelName:string, OriginEndpointName:string, ContainerType:"TS"|"CMAF", Description?:string, CreatedAt?:int|string|\DateTimeInterface, ModifiedAt?:int|string|\DateTimeInterface, HlsManifests?:array<array{ManifestName:string, ChildManifestName?:string, Url?:string}>, LowLatencyHlsManifests?:array<array{ManifestName:string, ChildManifestName?:string, Url?:string}>, DashManifests?:array<array{ManifestName:string, Url?:string}>, ForceEndpointErrorConfiguration?:array{EndpointErrorConditions?:array<"STALE_MANIFEST"|"INCOMPLETE_MANIFEST"|"MISSING_DRM_KEY"|"SLATE_INPUT">}}>, NextToken?:string}>
     */
    public function listOriginEndpointsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{Tags?:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string, Policy:string} $args
     * @return \AWS\Result<array{}>
     */
    public function putChannelPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string, Policy:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putChannelPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string, OriginEndpointName:string, Policy:string} $args
     * @return \AWS\Result<array{}>
     */
    public function putOriginEndpointPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string, OriginEndpointName:string, Policy:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putOriginEndpointPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Tags:array<string, string>} $args
     * @return \AWS\Result<void>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, TagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string, ETag?:string, Description?:string, InputSwitchConfiguration?:array{MQCSInputSwitching?:bool}, OutputHeaderConfiguration?:array{PublishMQCS?:bool}} $args
     * @return \AWS\Result<array{Arn:string, ChannelName:string, ChannelGroupName:string, CreatedAt:int|string|\DateTimeInterface, ModifiedAt:int|string|\DateTimeInterface, Description?:string, IngestEndpoints?:array<array{Id?:string, Url?:string}>, InputType?:"HLS"|"CMAF", ETag?:string, Tags?:array<string, string>, InputSwitchConfiguration?:array{MQCSInputSwitching?:bool}, OutputHeaderConfiguration?:array{PublishMQCS?:bool}}>
     */
    public function updateChannel(array $args): \AWS\Result { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string, ETag?:string, Description?:string, InputSwitchConfiguration?:array{MQCSInputSwitching?:bool}, OutputHeaderConfiguration?:array{PublishMQCS?:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn:string, ChannelName:string, ChannelGroupName:string, CreatedAt:int|string|\DateTimeInterface, ModifiedAt:int|string|\DateTimeInterface, Description?:string, IngestEndpoints?:array<array{Id?:string, Url?:string}>, InputType?:"HLS"|"CMAF", ETag?:string, Tags?:array<string, string>, InputSwitchConfiguration?:array{MQCSInputSwitching?:bool}, OutputHeaderConfiguration?:array{PublishMQCS?:bool}}>
     */
    public function updateChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelGroupName:string, ETag?:string, Description?:string} $args
     * @return \AWS\Result<array{ChannelGroupName:string, Arn:string, EgressDomain:string, CreatedAt:int|string|\DateTimeInterface, ModifiedAt:int|string|\DateTimeInterface, Description?:string, ETag?:string, Tags?:array<string, string>}>
     */
    public function updateChannelGroup(array $args): \AWS\Result { }

    /**
     * @param array{ChannelGroupName:string, ETag?:string, Description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelGroupName:string, Arn:string, EgressDomain:string, CreatedAt:int|string|\DateTimeInterface, ModifiedAt:int|string|\DateTimeInterface, Description?:string, ETag?:string, Tags?:array<string, string>}>
     */
    public function updateChannelGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string, OriginEndpointName:string, ContainerType:"TS"|"CMAF", Segment?:array{SegmentDurationSeconds?:int, SegmentName?:string, TsUseAudioRenditionGroup?:bool, IncludeIframeOnlyStreams?:bool, TsIncludeDvbSubtitles?:bool, Scte?:array{ScteFilter?:array<"SPLICE_INSERT"|"BREAK"|"PROVIDER_ADVERTISEMENT"|"DISTRIBUTOR_ADVERTISEMENT"|"PROVIDER_PLACEMENT_OPPORTUNITY"|"DISTRIBUTOR_PLACEMENT_OPPORTUNITY"|"PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY"|"DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY"|"PROGRAM">}, Encryption?:array{ConstantInitializationVector?:string, EncryptionMethod:array{TsEncryptionMethod?:"AES_128"|"SAMPLE_AES", CmafEncryptionMethod?:"CENC"|"CBCS"}, KeyRotationIntervalSeconds?:int, SpekeKeyProvider:array{EncryptionContractConfiguration:array{PresetSpeke20Audio:"PRESET_AUDIO_1"|"PRESET_AUDIO_2"|"PRESET_AUDIO_3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET_VIDEO_1"|"PRESET_VIDEO_2"|"PRESET_VIDEO_3"|"PRESET_VIDEO_4"|"PRESET_VIDEO_5"|"PRESET_VIDEO_6"|"PRESET_VIDEO_7"|"PRESET_VIDEO_8"|"SHARED"|"UNENCRYPTED"}, ResourceId:string, DrmSystems:array<"CLEAR_KEY_AES_128"|"FAIRPLAY"|"PLAYREADY"|"WIDEVINE"|"IRDETO">, RoleArn:string, Url:string}}}, Description?:string, StartoverWindowSeconds?:int, HlsManifests?:array<array{ManifestName:string, ChildManifestName?:string, ScteHls?:array{AdMarkerHls?:"DATERANGE"}, StartTag?:array{TimeOffset:float, Precise?:bool}, ManifestWindowSeconds?:int, ProgramDateTimeIntervalSeconds?:int, FilterConfiguration?:array{ManifestFilter?:string, Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface, TimeDelaySeconds?:int, ClipStartTime?:int|string|\DateTimeInterface}}>, LowLatencyHlsManifests?:array<array{ManifestName:string, ChildManifestName?:string, ScteHls?:array{AdMarkerHls?:"DATERANGE"}, StartTag?:array{TimeOffset:float, Precise?:bool}, ManifestWindowSeconds?:int, ProgramDateTimeIntervalSeconds?:int, FilterConfiguration?:array{ManifestFilter?:string, Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface, TimeDelaySeconds?:int, ClipStartTime?:int|string|\DateTimeInterface}}>, DashManifests?:array<array{ManifestName:string, ManifestWindowSeconds?:int, FilterConfiguration?:array{ManifestFilter?:string, Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface, TimeDelaySeconds?:int, ClipStartTime?:int|string|\DateTimeInterface}, MinUpdatePeriodSeconds?:int, MinBufferTimeSeconds?:int, SuggestedPresentationDelaySeconds?:int, SegmentTemplateFormat?:"NUMBER_WITH_TIMELINE", PeriodTriggers?:array<"AVAILS"|"DRM_KEY_ROTATION"|"SOURCE_CHANGES"|"SOURCE_DISRUPTIONS"|"NONE">, ScteDash?:array{AdMarkerDash?:"BINARY"|"XML"}, DrmSignaling?:"INDIVIDUAL"|"REFERENCED", UtcTiming?:array{TimingMode?:"HTTP_HEAD"|"HTTP_ISO"|"HTTP_XSDATE"|"UTC_DIRECT", TimingSource?:string}}>, ForceEndpointErrorConfiguration?:array{EndpointErrorConditions?:array<"STALE_MANIFEST"|"INCOMPLETE_MANIFEST"|"MISSING_DRM_KEY"|"SLATE_INPUT">}, ETag?:string} $args
     * @return \AWS\Result<array{Arn:string, ChannelGroupName:string, ChannelName:string, OriginEndpointName:string, ContainerType:"TS"|"CMAF", Segment:array{SegmentDurationSeconds?:int, SegmentName?:string, TsUseAudioRenditionGroup?:bool, IncludeIframeOnlyStreams?:bool, TsIncludeDvbSubtitles?:bool, Scte?:array{ScteFilter?:array<"SPLICE_INSERT"|"BREAK"|"PROVIDER_ADVERTISEMENT"|"DISTRIBUTOR_ADVERTISEMENT"|"PROVIDER_PLACEMENT_OPPORTUNITY"|"DISTRIBUTOR_PLACEMENT_OPPORTUNITY"|"PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY"|"DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY"|"PROGRAM">}, Encryption?:array{ConstantInitializationVector?:string, EncryptionMethod:array{TsEncryptionMethod?:"AES_128"|"SAMPLE_AES", CmafEncryptionMethod?:"CENC"|"CBCS"}, KeyRotationIntervalSeconds?:int, SpekeKeyProvider:array{EncryptionContractConfiguration:array{PresetSpeke20Audio:"PRESET_AUDIO_1"|"PRESET_AUDIO_2"|"PRESET_AUDIO_3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET_VIDEO_1"|"PRESET_VIDEO_2"|"PRESET_VIDEO_3"|"PRESET_VIDEO_4"|"PRESET_VIDEO_5"|"PRESET_VIDEO_6"|"PRESET_VIDEO_7"|"PRESET_VIDEO_8"|"SHARED"|"UNENCRYPTED"}, ResourceId:string, DrmSystems:array<"CLEAR_KEY_AES_128"|"FAIRPLAY"|"PLAYREADY"|"WIDEVINE"|"IRDETO">, RoleArn:string, Url:string}}}, CreatedAt:int|string|\DateTimeInterface, ModifiedAt:int|string|\DateTimeInterface, Description?:string, StartoverWindowSeconds?:int, HlsManifests?:array<array{ManifestName:string, Url:string, ChildManifestName?:string, ManifestWindowSeconds?:int, ProgramDateTimeIntervalSeconds?:int, ScteHls?:array{AdMarkerHls?:"DATERANGE"}, FilterConfiguration?:array{ManifestFilter?:string, Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface, TimeDelaySeconds?:int, ClipStartTime?:int|string|\DateTimeInterface}, StartTag?:array{TimeOffset:float, Precise?:bool}}>, LowLatencyHlsManifests?:array<array{ManifestName:string, Url:string, ChildManifestName?:string, ManifestWindowSeconds?:int, ProgramDateTimeIntervalSeconds?:int, ScteHls?:array{AdMarkerHls?:"DATERANGE"}, FilterConfiguration?:array{ManifestFilter?:string, Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface, TimeDelaySeconds?:int, ClipStartTime?:int|string|\DateTimeInterface}, StartTag?:array{TimeOffset:float, Precise?:bool}}>, ForceEndpointErrorConfiguration?:array{EndpointErrorConditions?:array<"STALE_MANIFEST"|"INCOMPLETE_MANIFEST"|"MISSING_DRM_KEY"|"SLATE_INPUT">}, ETag?:string, Tags?:array<string, string>, DashManifests?:array<array{ManifestName:string, Url:string, ManifestWindowSeconds?:int, FilterConfiguration?:array{ManifestFilter?:string, Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface, TimeDelaySeconds?:int, ClipStartTime?:int|string|\DateTimeInterface}, MinUpdatePeriodSeconds?:int, MinBufferTimeSeconds?:int, SuggestedPresentationDelaySeconds?:int, SegmentTemplateFormat?:"NUMBER_WITH_TIMELINE", PeriodTriggers?:array<"AVAILS"|"DRM_KEY_ROTATION"|"SOURCE_CHANGES"|"SOURCE_DISRUPTIONS"|"NONE">, ScteDash?:array{AdMarkerDash?:"BINARY"|"XML"}, DrmSignaling?:"INDIVIDUAL"|"REFERENCED", UtcTiming?:array{TimingMode?:"HTTP_HEAD"|"HTTP_ISO"|"HTTP_XSDATE"|"UTC_DIRECT", TimingSource?:string}}>}>
     */
    public function updateOriginEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{ChannelGroupName:string, ChannelName:string, OriginEndpointName:string, ContainerType:"TS"|"CMAF", Segment?:array{SegmentDurationSeconds?:int, SegmentName?:string, TsUseAudioRenditionGroup?:bool, IncludeIframeOnlyStreams?:bool, TsIncludeDvbSubtitles?:bool, Scte?:array{ScteFilter?:array<"SPLICE_INSERT"|"BREAK"|"PROVIDER_ADVERTISEMENT"|"DISTRIBUTOR_ADVERTISEMENT"|"PROVIDER_PLACEMENT_OPPORTUNITY"|"DISTRIBUTOR_PLACEMENT_OPPORTUNITY"|"PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY"|"DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY"|"PROGRAM">}, Encryption?:array{ConstantInitializationVector?:string, EncryptionMethod:array{TsEncryptionMethod?:"AES_128"|"SAMPLE_AES", CmafEncryptionMethod?:"CENC"|"CBCS"}, KeyRotationIntervalSeconds?:int, SpekeKeyProvider:array{EncryptionContractConfiguration:array{PresetSpeke20Audio:"PRESET_AUDIO_1"|"PRESET_AUDIO_2"|"PRESET_AUDIO_3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET_VIDEO_1"|"PRESET_VIDEO_2"|"PRESET_VIDEO_3"|"PRESET_VIDEO_4"|"PRESET_VIDEO_5"|"PRESET_VIDEO_6"|"PRESET_VIDEO_7"|"PRESET_VIDEO_8"|"SHARED"|"UNENCRYPTED"}, ResourceId:string, DrmSystems:array<"CLEAR_KEY_AES_128"|"FAIRPLAY"|"PLAYREADY"|"WIDEVINE"|"IRDETO">, RoleArn:string, Url:string}}}, Description?:string, StartoverWindowSeconds?:int, HlsManifests?:array<array{ManifestName:string, ChildManifestName?:string, ScteHls?:array{AdMarkerHls?:"DATERANGE"}, StartTag?:array{TimeOffset:float, Precise?:bool}, ManifestWindowSeconds?:int, ProgramDateTimeIntervalSeconds?:int, FilterConfiguration?:array{ManifestFilter?:string, Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface, TimeDelaySeconds?:int, ClipStartTime?:int|string|\DateTimeInterface}}>, LowLatencyHlsManifests?:array<array{ManifestName:string, ChildManifestName?:string, ScteHls?:array{AdMarkerHls?:"DATERANGE"}, StartTag?:array{TimeOffset:float, Precise?:bool}, ManifestWindowSeconds?:int, ProgramDateTimeIntervalSeconds?:int, FilterConfiguration?:array{ManifestFilter?:string, Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface, TimeDelaySeconds?:int, ClipStartTime?:int|string|\DateTimeInterface}}>, DashManifests?:array<array{ManifestName:string, ManifestWindowSeconds?:int, FilterConfiguration?:array{ManifestFilter?:string, Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface, TimeDelaySeconds?:int, ClipStartTime?:int|string|\DateTimeInterface}, MinUpdatePeriodSeconds?:int, MinBufferTimeSeconds?:int, SuggestedPresentationDelaySeconds?:int, SegmentTemplateFormat?:"NUMBER_WITH_TIMELINE", PeriodTriggers?:array<"AVAILS"|"DRM_KEY_ROTATION"|"SOURCE_CHANGES"|"SOURCE_DISRUPTIONS"|"NONE">, ScteDash?:array{AdMarkerDash?:"BINARY"|"XML"}, DrmSignaling?:"INDIVIDUAL"|"REFERENCED", UtcTiming?:array{TimingMode?:"HTTP_HEAD"|"HTTP_ISO"|"HTTP_XSDATE"|"UTC_DIRECT", TimingSource?:string}}>, ForceEndpointErrorConfiguration?:array{EndpointErrorConditions?:array<"STALE_MANIFEST"|"INCOMPLETE_MANIFEST"|"MISSING_DRM_KEY"|"SLATE_INPUT">}, ETag?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn:string, ChannelGroupName:string, ChannelName:string, OriginEndpointName:string, ContainerType:"TS"|"CMAF", Segment:array{SegmentDurationSeconds?:int, SegmentName?:string, TsUseAudioRenditionGroup?:bool, IncludeIframeOnlyStreams?:bool, TsIncludeDvbSubtitles?:bool, Scte?:array{ScteFilter?:array<"SPLICE_INSERT"|"BREAK"|"PROVIDER_ADVERTISEMENT"|"DISTRIBUTOR_ADVERTISEMENT"|"PROVIDER_PLACEMENT_OPPORTUNITY"|"DISTRIBUTOR_PLACEMENT_OPPORTUNITY"|"PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY"|"DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY"|"PROGRAM">}, Encryption?:array{ConstantInitializationVector?:string, EncryptionMethod:array{TsEncryptionMethod?:"AES_128"|"SAMPLE_AES", CmafEncryptionMethod?:"CENC"|"CBCS"}, KeyRotationIntervalSeconds?:int, SpekeKeyProvider:array{EncryptionContractConfiguration:array{PresetSpeke20Audio:"PRESET_AUDIO_1"|"PRESET_AUDIO_2"|"PRESET_AUDIO_3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET_VIDEO_1"|"PRESET_VIDEO_2"|"PRESET_VIDEO_3"|"PRESET_VIDEO_4"|"PRESET_VIDEO_5"|"PRESET_VIDEO_6"|"PRESET_VIDEO_7"|"PRESET_VIDEO_8"|"SHARED"|"UNENCRYPTED"}, ResourceId:string, DrmSystems:array<"CLEAR_KEY_AES_128"|"FAIRPLAY"|"PLAYREADY"|"WIDEVINE"|"IRDETO">, RoleArn:string, Url:string}}}, CreatedAt:int|string|\DateTimeInterface, ModifiedAt:int|string|\DateTimeInterface, Description?:string, StartoverWindowSeconds?:int, HlsManifests?:array<array{ManifestName:string, Url:string, ChildManifestName?:string, ManifestWindowSeconds?:int, ProgramDateTimeIntervalSeconds?:int, ScteHls?:array{AdMarkerHls?:"DATERANGE"}, FilterConfiguration?:array{ManifestFilter?:string, Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface, TimeDelaySeconds?:int, ClipStartTime?:int|string|\DateTimeInterface}, StartTag?:array{TimeOffset:float, Precise?:bool}}>, LowLatencyHlsManifests?:array<array{ManifestName:string, Url:string, ChildManifestName?:string, ManifestWindowSeconds?:int, ProgramDateTimeIntervalSeconds?:int, ScteHls?:array{AdMarkerHls?:"DATERANGE"}, FilterConfiguration?:array{ManifestFilter?:string, Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface, TimeDelaySeconds?:int, ClipStartTime?:int|string|\DateTimeInterface}, StartTag?:array{TimeOffset:float, Precise?:bool}}>, ForceEndpointErrorConfiguration?:array{EndpointErrorConditions?:array<"STALE_MANIFEST"|"INCOMPLETE_MANIFEST"|"MISSING_DRM_KEY"|"SLATE_INPUT">}, ETag?:string, Tags?:array<string, string>, DashManifests?:array<array{ManifestName:string, Url:string, ManifestWindowSeconds?:int, FilterConfiguration?:array{ManifestFilter?:string, Start?:int|string|\DateTimeInterface, End?:int|string|\DateTimeInterface, TimeDelaySeconds?:int, ClipStartTime?:int|string|\DateTimeInterface}, MinUpdatePeriodSeconds?:int, MinBufferTimeSeconds?:int, SuggestedPresentationDelaySeconds?:int, SegmentTemplateFormat?:"NUMBER_WITH_TIMELINE", PeriodTriggers?:array<"AVAILS"|"DRM_KEY_ROTATION"|"SOURCE_CHANGES"|"SOURCE_DISRUPTIONS"|"NONE">, ScteDash?:array{AdMarkerDash?:"BINARY"|"XML"}, DrmSignaling?:"INDIVIDUAL"|"REFERENCED", UtcTiming?:array{TimingMode?:"HTTP_HEAD"|"HTTP_ISO"|"HTTP_XSDATE"|"UTC_DIRECT", TimingSource?:string}}>}>
     */
    public function updateOriginEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
