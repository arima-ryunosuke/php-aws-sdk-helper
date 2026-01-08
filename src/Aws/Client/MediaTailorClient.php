<?php
namespace AWS\MediaTailor;

class MediaTailorClient
{
    /**
     * @param array{ChannelName:string, LogTypes:array<"AS_RUN">} $args
     * @return \AWS\Result<array{ChannelName?:string, LogTypes?:array<"AS_RUN">}>
     */
    public function configureLogsForChannel(array $args): \AWS\Result { }

    /**
     * @param array{ChannelName:string, LogTypes:array<"AS_RUN">} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelName?:string, LogTypes?:array<"AS_RUN">}>
     */
    public function configureLogsForChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PercentEnabled:int, PlaybackConfigurationName:string} $args
     * @return \AWS\Result<array{PercentEnabled:int, PlaybackConfigurationName?:string}>
     */
    public function configureLogsForPlaybackConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{PercentEnabled:int, PlaybackConfigurationName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PercentEnabled:int, PlaybackConfigurationName?:string}>
     */
    public function configureLogsForPlaybackConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Audiences?:array<string>, ChannelName:string, FillerSlate?:array{SourceLocationName?:string, VodSourceName?:string}, Outputs:array<array{DashPlaylistSettings?:array{ManifestWindowSeconds?:int, MinBufferTimeSeconds?:int, MinUpdatePeriodSeconds?:int, SuggestedPresentationDelaySeconds?:int}, HlsPlaylistSettings?:array{AdMarkupType?:array<"DATERANGE"|"SCTE35_ENHANCED">, ManifestWindowSeconds?:int}, ManifestName:string, SourceGroup:string}>, PlaybackMode:"LOOP"|"LINEAR", Tags?:array<string, string>, Tier?:"BASIC"|"STANDARD", TimeShiftConfiguration?:array{MaxTimeDelaySeconds:int}} $args
     * @return \AWS\Result<array{Arn?:string, Audiences?:array<string>, ChannelName?:string, ChannelState?:"RUNNING"|"STOPPED", CreationTime?:int|string|\DateTimeInterface, FillerSlate?:array{SourceLocationName?:string, VodSourceName?:string}, LastModifiedTime?:int|string|\DateTimeInterface, Outputs?:array<array{DashPlaylistSettings?:array{ManifestWindowSeconds?:int, MinBufferTimeSeconds?:int, MinUpdatePeriodSeconds?:int, SuggestedPresentationDelaySeconds?:int}, HlsPlaylistSettings?:array{AdMarkupType?:array<"DATERANGE"|"SCTE35_ENHANCED">, ManifestWindowSeconds?:int}, ManifestName:string, PlaybackUrl:string, SourceGroup:string}>, PlaybackMode?:string, Tags?:array<string, string>, Tier?:string, TimeShiftConfiguration?:array{MaxTimeDelaySeconds:int}}>
     */
    public function createChannel(array $args): \AWS\Result { }

    /**
     * @param array{Audiences?:array<string>, ChannelName:string, FillerSlate?:array{SourceLocationName?:string, VodSourceName?:string}, Outputs:array<array{DashPlaylistSettings?:array{ManifestWindowSeconds?:int, MinBufferTimeSeconds?:int, MinUpdatePeriodSeconds?:int, SuggestedPresentationDelaySeconds?:int}, HlsPlaylistSettings?:array{AdMarkupType?:array<"DATERANGE"|"SCTE35_ENHANCED">, ManifestWindowSeconds?:int}, ManifestName:string, SourceGroup:string}>, PlaybackMode:"LOOP"|"LINEAR", Tags?:array<string, string>, Tier?:"BASIC"|"STANDARD", TimeShiftConfiguration?:array{MaxTimeDelaySeconds:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Audiences?:array<string>, ChannelName?:string, ChannelState?:"RUNNING"|"STOPPED", CreationTime?:int|string|\DateTimeInterface, FillerSlate?:array{SourceLocationName?:string, VodSourceName?:string}, LastModifiedTime?:int|string|\DateTimeInterface, Outputs?:array<array{DashPlaylistSettings?:array{ManifestWindowSeconds?:int, MinBufferTimeSeconds?:int, MinUpdatePeriodSeconds?:int, SuggestedPresentationDelaySeconds?:int}, HlsPlaylistSettings?:array{AdMarkupType?:array<"DATERANGE"|"SCTE35_ENHANCED">, ManifestWindowSeconds?:int}, ManifestName:string, PlaybackUrl:string, SourceGroup:string}>, PlaybackMode?:string, Tags?:array<string, string>, Tier?:string, TimeShiftConfiguration?:array{MaxTimeDelaySeconds:int}}>
     */
    public function createChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HttpPackageConfigurations:array<array{Path:string, SourceGroup:string, Type:"DASH"|"HLS"}>, LiveSourceName:string, SourceLocationName:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Arn?:string, CreationTime?:int|string|\DateTimeInterface, HttpPackageConfigurations?:array<array{Path:string, SourceGroup:string, Type:"DASH"|"HLS"}>, LastModifiedTime?:int|string|\DateTimeInterface, LiveSourceName?:string, SourceLocationName?:string, Tags?:array<string, string>}>
     */
    public function createLiveSource(array $args): \AWS\Result { }

    /**
     * @param array{HttpPackageConfigurations:array<array{Path:string, SourceGroup:string, Type:"DASH"|"HLS"}>, LiveSourceName:string, SourceLocationName:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTime?:int|string|\DateTimeInterface, HttpPackageConfigurations?:array<array{Path:string, SourceGroup:string, Type:"DASH"|"HLS"}>, LastModifiedTime?:int|string|\DateTimeInterface, LiveSourceName?:string, SourceLocationName?:string, Tags?:array<string, string>}>
     */
    public function createLiveSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Consumption:array{AvailMatchingCriteria?:array<array{DynamicVariable:string, Operator:"EQUALS"}>, EndTime:int|string|\DateTimeInterface, StartTime?:int|string|\DateTimeInterface}, Name:string, PlaybackConfigurationName:string, Retrieval:array{DynamicVariables?:array<string, string>, EndTime:int|string|\DateTimeInterface, StartTime?:int|string|\DateTimeInterface}, StreamId?:string} $args
     * @return \AWS\Result<array{Arn?:string, Consumption?:array{AvailMatchingCriteria?:array<array{DynamicVariable:string, Operator:"EQUALS"}>, EndTime:int|string|\DateTimeInterface, StartTime?:int|string|\DateTimeInterface}, Name?:string, PlaybackConfigurationName?:string, Retrieval?:array{DynamicVariables?:array<string, string>, EndTime:int|string|\DateTimeInterface, StartTime?:int|string|\DateTimeInterface}, StreamId?:string}>
     */
    public function createPrefetchSchedule(array $args): \AWS\Result { }

    /**
     * @param array{Consumption:array{AvailMatchingCriteria?:array<array{DynamicVariable:string, Operator:"EQUALS"}>, EndTime:int|string|\DateTimeInterface, StartTime?:int|string|\DateTimeInterface}, Name:string, PlaybackConfigurationName:string, Retrieval:array{DynamicVariables?:array<string, string>, EndTime:int|string|\DateTimeInterface, StartTime?:int|string|\DateTimeInterface}, StreamId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Consumption?:array{AvailMatchingCriteria?:array<array{DynamicVariable:string, Operator:"EQUALS"}>, EndTime:int|string|\DateTimeInterface, StartTime?:int|string|\DateTimeInterface}, Name?:string, PlaybackConfigurationName?:string, Retrieval?:array{DynamicVariables?:array<string, string>, EndTime:int|string|\DateTimeInterface, StartTime?:int|string|\DateTimeInterface}, StreamId?:string}>
     */
    public function createPrefetchScheduleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AdBreaks?:array<array{AdBreakMetadata?:array<array{Key:string, Value:string}>, MessageType?:"SPLICE_INSERT"|"TIME_SIGNAL", OffsetMillis:int, Slate?:array{SourceLocationName?:string, VodSourceName?:string}, SpliceInsertMessage?:array{AvailNum?:int, AvailsExpected?:int, SpliceEventId?:int, UniqueProgramId?:int}, TimeSignalMessage?:array{SegmentationDescriptors?:array<array{SegmentNum?:int, SegmentationEventId?:int, SegmentationTypeId?:int, SegmentationUpid?:string, SegmentationUpidType?:int, SegmentsExpected?:int, SubSegmentNum?:int, SubSegmentsExpected?:int}>}}>, AudienceMedia?:array<array{AlternateMedia?:array<array{AdBreaks?:array<array{AdBreakMetadata?:array<array{Key:string, Value:string}>, MessageType?:"SPLICE_INSERT"|"TIME_SIGNAL", OffsetMillis:int, Slate?:array{SourceLocationName?:string, VodSourceName?:string}, SpliceInsertMessage?:array{AvailNum?:int, AvailsExpected?:int, SpliceEventId?:int, UniqueProgramId?:int}, TimeSignalMessage?:array{SegmentationDescriptors?:array<array{SegmentNum?:int, SegmentationEventId?:int, SegmentationTypeId?:int, SegmentationUpid?:string, SegmentationUpidType?:int, SegmentsExpected?:int, SubSegmentNum?:int, SubSegmentsExpected?:int}>}}>, ClipRange?:array{EndOffsetMillis?:int, StartOffsetMillis?:int}, DurationMillis?:int, LiveSourceName?:string, ScheduledStartTimeMillis?:int, SourceLocationName?:string, VodSourceName?:string}>, Audience?:string}>, ChannelName:string, LiveSourceName?:string, ProgramName:string, ScheduleConfiguration:array{ClipRange?:array{EndOffsetMillis?:int, StartOffsetMillis?:int}, Transition:array{DurationMillis?:int, RelativePosition:"BEFORE_PROGRAM"|"AFTER_PROGRAM", RelativeProgram?:string, ScheduledStartTimeMillis?:int, Type:string}}, SourceLocationName:string, VodSourceName?:string} $args
     * @return \AWS\Result<array{AdBreaks?:array<array{AdBreakMetadata?:array<array{Key:string, Value:string}>, MessageType?:"SPLICE_INSERT"|"TIME_SIGNAL", OffsetMillis:int, Slate?:array{SourceLocationName?:string, VodSourceName?:string}, SpliceInsertMessage?:array{AvailNum?:int, AvailsExpected?:int, SpliceEventId?:int, UniqueProgramId?:int}, TimeSignalMessage?:array{SegmentationDescriptors?:array<array{SegmentNum?:int, SegmentationEventId?:int, SegmentationTypeId?:int, SegmentationUpid?:string, SegmentationUpidType?:int, SegmentsExpected?:int, SubSegmentNum?:int, SubSegmentsExpected?:int}>}}>, Arn?:string, AudienceMedia?:array<array{AlternateMedia?:array<array{AdBreaks?:array<array{AdBreakMetadata?:array<array{Key:string, Value:string}>, MessageType?:"SPLICE_INSERT"|"TIME_SIGNAL", OffsetMillis:int, Slate?:array{SourceLocationName?:string, VodSourceName?:string}, SpliceInsertMessage?:array{AvailNum?:int, AvailsExpected?:int, SpliceEventId?:int, UniqueProgramId?:int}, TimeSignalMessage?:array{SegmentationDescriptors?:array<array{SegmentNum?:int, SegmentationEventId?:int, SegmentationTypeId?:int, SegmentationUpid?:string, SegmentationUpidType?:int, SegmentsExpected?:int, SubSegmentNum?:int, SubSegmentsExpected?:int}>}}>, ClipRange?:array{EndOffsetMillis?:int, StartOffsetMillis?:int}, DurationMillis?:int, LiveSourceName?:string, ScheduledStartTimeMillis?:int, SourceLocationName?:string, VodSourceName?:string}>, Audience?:string}>, ChannelName?:string, ClipRange?:array{EndOffsetMillis?:int, StartOffsetMillis?:int}, CreationTime?:int|string|\DateTimeInterface, DurationMillis?:int, LiveSourceName?:string, ProgramName?:string, ScheduledStartTime?:int|string|\DateTimeInterface, SourceLocationName?:string, VodSourceName?:string}>
     */
    public function createProgram(array $args): \AWS\Result { }

    /**
     * @param array{AdBreaks?:array<array{AdBreakMetadata?:array<array{Key:string, Value:string}>, MessageType?:"SPLICE_INSERT"|"TIME_SIGNAL", OffsetMillis:int, Slate?:array{SourceLocationName?:string, VodSourceName?:string}, SpliceInsertMessage?:array{AvailNum?:int, AvailsExpected?:int, SpliceEventId?:int, UniqueProgramId?:int}, TimeSignalMessage?:array{SegmentationDescriptors?:array<array{SegmentNum?:int, SegmentationEventId?:int, SegmentationTypeId?:int, SegmentationUpid?:string, SegmentationUpidType?:int, SegmentsExpected?:int, SubSegmentNum?:int, SubSegmentsExpected?:int}>}}>, AudienceMedia?:array<array{AlternateMedia?:array<array{AdBreaks?:array<array{AdBreakMetadata?:array<array{Key:string, Value:string}>, MessageType?:"SPLICE_INSERT"|"TIME_SIGNAL", OffsetMillis:int, Slate?:array{SourceLocationName?:string, VodSourceName?:string}, SpliceInsertMessage?:array{AvailNum?:int, AvailsExpected?:int, SpliceEventId?:int, UniqueProgramId?:int}, TimeSignalMessage?:array{SegmentationDescriptors?:array<array{SegmentNum?:int, SegmentationEventId?:int, SegmentationTypeId?:int, SegmentationUpid?:string, SegmentationUpidType?:int, SegmentsExpected?:int, SubSegmentNum?:int, SubSegmentsExpected?:int}>}}>, ClipRange?:array{EndOffsetMillis?:int, StartOffsetMillis?:int}, DurationMillis?:int, LiveSourceName?:string, ScheduledStartTimeMillis?:int, SourceLocationName?:string, VodSourceName?:string}>, Audience?:string}>, ChannelName:string, LiveSourceName?:string, ProgramName:string, ScheduleConfiguration:array{ClipRange?:array{EndOffsetMillis?:int, StartOffsetMillis?:int}, Transition:array{DurationMillis?:int, RelativePosition:"BEFORE_PROGRAM"|"AFTER_PROGRAM", RelativeProgram?:string, ScheduledStartTimeMillis?:int, Type:string}}, SourceLocationName:string, VodSourceName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AdBreaks?:array<array{AdBreakMetadata?:array<array{Key:string, Value:string}>, MessageType?:"SPLICE_INSERT"|"TIME_SIGNAL", OffsetMillis:int, Slate?:array{SourceLocationName?:string, VodSourceName?:string}, SpliceInsertMessage?:array{AvailNum?:int, AvailsExpected?:int, SpliceEventId?:int, UniqueProgramId?:int}, TimeSignalMessage?:array{SegmentationDescriptors?:array<array{SegmentNum?:int, SegmentationEventId?:int, SegmentationTypeId?:int, SegmentationUpid?:string, SegmentationUpidType?:int, SegmentsExpected?:int, SubSegmentNum?:int, SubSegmentsExpected?:int}>}}>, Arn?:string, AudienceMedia?:array<array{AlternateMedia?:array<array{AdBreaks?:array<array{AdBreakMetadata?:array<array{Key:string, Value:string}>, MessageType?:"SPLICE_INSERT"|"TIME_SIGNAL", OffsetMillis:int, Slate?:array{SourceLocationName?:string, VodSourceName?:string}, SpliceInsertMessage?:array{AvailNum?:int, AvailsExpected?:int, SpliceEventId?:int, UniqueProgramId?:int}, TimeSignalMessage?:array{SegmentationDescriptors?:array<array{SegmentNum?:int, SegmentationEventId?:int, SegmentationTypeId?:int, SegmentationUpid?:string, SegmentationUpidType?:int, SegmentsExpected?:int, SubSegmentNum?:int, SubSegmentsExpected?:int}>}}>, ClipRange?:array{EndOffsetMillis?:int, StartOffsetMillis?:int}, DurationMillis?:int, LiveSourceName?:string, ScheduledStartTimeMillis?:int, SourceLocationName?:string, VodSourceName?:string}>, Audience?:string}>, ChannelName?:string, ClipRange?:array{EndOffsetMillis?:int, StartOffsetMillis?:int}, CreationTime?:int|string|\DateTimeInterface, DurationMillis?:int, LiveSourceName?:string, ProgramName?:string, ScheduledStartTime?:int|string|\DateTimeInterface, SourceLocationName?:string, VodSourceName?:string}>
     */
    public function createProgramAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccessConfiguration?:array{AccessType?:"S3_SIGV4"|"SECRETS_MANAGER_ACCESS_TOKEN"|"AUTODETECT_SIGV4", SecretsManagerAccessTokenConfiguration?:array{HeaderName?:string, SecretArn?:string, SecretStringKey?:string}}, DefaultSegmentDeliveryConfiguration?:array{BaseUrl?:string}, HttpConfiguration:array{BaseUrl:string}, SegmentDeliveryConfigurations?:array<array{BaseUrl?:string, Name?:string}>, SourceLocationName:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{AccessConfiguration?:array{AccessType?:"S3_SIGV4"|"SECRETS_MANAGER_ACCESS_TOKEN"|"AUTODETECT_SIGV4", SecretsManagerAccessTokenConfiguration?:array{HeaderName?:string, SecretArn?:string, SecretStringKey?:string}}, Arn?:string, CreationTime?:int|string|\DateTimeInterface, DefaultSegmentDeliveryConfiguration?:array{BaseUrl?:string}, HttpConfiguration?:array{BaseUrl:string}, LastModifiedTime?:int|string|\DateTimeInterface, SegmentDeliveryConfigurations?:array<array{BaseUrl?:string, Name?:string}>, SourceLocationName?:string, Tags?:array<string, string>}>
     */
    public function createSourceLocation(array $args): \AWS\Result { }

    /**
     * @param array{AccessConfiguration?:array{AccessType?:"S3_SIGV4"|"SECRETS_MANAGER_ACCESS_TOKEN"|"AUTODETECT_SIGV4", SecretsManagerAccessTokenConfiguration?:array{HeaderName?:string, SecretArn?:string, SecretStringKey?:string}}, DefaultSegmentDeliveryConfiguration?:array{BaseUrl?:string}, HttpConfiguration:array{BaseUrl:string}, SegmentDeliveryConfigurations?:array<array{BaseUrl?:string, Name?:string}>, SourceLocationName:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccessConfiguration?:array{AccessType?:"S3_SIGV4"|"SECRETS_MANAGER_ACCESS_TOKEN"|"AUTODETECT_SIGV4", SecretsManagerAccessTokenConfiguration?:array{HeaderName?:string, SecretArn?:string, SecretStringKey?:string}}, Arn?:string, CreationTime?:int|string|\DateTimeInterface, DefaultSegmentDeliveryConfiguration?:array{BaseUrl?:string}, HttpConfiguration?:array{BaseUrl:string}, LastModifiedTime?:int|string|\DateTimeInterface, SegmentDeliveryConfigurations?:array<array{BaseUrl?:string, Name?:string}>, SourceLocationName?:string, Tags?:array<string, string>}>
     */
    public function createSourceLocationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HttpPackageConfigurations:array<array{Path:string, SourceGroup:string, Type:"DASH"|"HLS"}>, SourceLocationName:string, Tags?:array<string, string>, VodSourceName:string} $args
     * @return \AWS\Result<array{Arn?:string, CreationTime?:int|string|\DateTimeInterface, HttpPackageConfigurations?:array<array{Path:string, SourceGroup:string, Type:"DASH"|"HLS"}>, LastModifiedTime?:int|string|\DateTimeInterface, SourceLocationName?:string, Tags?:array<string, string>, VodSourceName?:string}>
     */
    public function createVodSource(array $args): \AWS\Result { }

    /**
     * @param array{HttpPackageConfigurations:array<array{Path:string, SourceGroup:string, Type:"DASH"|"HLS"}>, SourceLocationName:string, Tags?:array<string, string>, VodSourceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTime?:int|string|\DateTimeInterface, HttpPackageConfigurations?:array<array{Path:string, SourceGroup:string, Type:"DASH"|"HLS"}>, LastModifiedTime?:int|string|\DateTimeInterface, SourceLocationName?:string, Tags?:array<string, string>, VodSourceName?:string}>
     */
    public function createVodSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteChannel(array $args): \AWS\Result { }

    /**
     * @param array{ChannelName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteChannelPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ChannelName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteChannelPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LiveSourceName:string, SourceLocationName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteLiveSource(array $args): \AWS\Result { }

    /**
     * @param array{LiveSourceName:string, SourceLocationName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteLiveSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deletePlaybackConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deletePlaybackConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, PlaybackConfigurationName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deletePrefetchSchedule(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, PlaybackConfigurationName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deletePrefetchScheduleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelName:string, ProgramName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteProgram(array $args): \AWS\Result { }

    /**
     * @param array{ChannelName:string, ProgramName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteProgramAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SourceLocationName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSourceLocation(array $args): \AWS\Result { }

    /**
     * @param array{SourceLocationName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteSourceLocationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SourceLocationName:string, VodSourceName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteVodSource(array $args): \AWS\Result { }

    /**
     * @param array{SourceLocationName:string, VodSourceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteVodSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelName:string} $args
     * @return \AWS\Result<array{Arn?:string, Audiences?:array<string>, ChannelName?:string, ChannelState?:"RUNNING"|"STOPPED", CreationTime?:int|string|\DateTimeInterface, FillerSlate?:array{SourceLocationName?:string, VodSourceName?:string}, LastModifiedTime?:int|string|\DateTimeInterface, LogConfiguration:array{LogTypes?:array<"AS_RUN">}, Outputs?:array<array{DashPlaylistSettings?:array{ManifestWindowSeconds?:int, MinBufferTimeSeconds?:int, MinUpdatePeriodSeconds?:int, SuggestedPresentationDelaySeconds?:int}, HlsPlaylistSettings?:array{AdMarkupType?:array<"DATERANGE"|"SCTE35_ENHANCED">, ManifestWindowSeconds?:int}, ManifestName:string, PlaybackUrl:string, SourceGroup:string}>, PlaybackMode?:string, Tags?:array<string, string>, Tier?:string, TimeShiftConfiguration?:array{MaxTimeDelaySeconds:int}}>
     */
    public function describeChannel(array $args): \AWS\Result { }

    /**
     * @param array{ChannelName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Audiences?:array<string>, ChannelName?:string, ChannelState?:"RUNNING"|"STOPPED", CreationTime?:int|string|\DateTimeInterface, FillerSlate?:array{SourceLocationName?:string, VodSourceName?:string}, LastModifiedTime?:int|string|\DateTimeInterface, LogConfiguration:array{LogTypes?:array<"AS_RUN">}, Outputs?:array<array{DashPlaylistSettings?:array{ManifestWindowSeconds?:int, MinBufferTimeSeconds?:int, MinUpdatePeriodSeconds?:int, SuggestedPresentationDelaySeconds?:int}, HlsPlaylistSettings?:array{AdMarkupType?:array<"DATERANGE"|"SCTE35_ENHANCED">, ManifestWindowSeconds?:int}, ManifestName:string, PlaybackUrl:string, SourceGroup:string}>, PlaybackMode?:string, Tags?:array<string, string>, Tier?:string, TimeShiftConfiguration?:array{MaxTimeDelaySeconds:int}}>
     */
    public function describeChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LiveSourceName:string, SourceLocationName:string} $args
     * @return \AWS\Result<array{Arn?:string, CreationTime?:int|string|\DateTimeInterface, HttpPackageConfigurations?:array<array{Path:string, SourceGroup:string, Type:"DASH"|"HLS"}>, LastModifiedTime?:int|string|\DateTimeInterface, LiveSourceName?:string, SourceLocationName?:string, Tags?:array<string, string>}>
     */
    public function describeLiveSource(array $args): \AWS\Result { }

    /**
     * @param array{LiveSourceName:string, SourceLocationName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTime?:int|string|\DateTimeInterface, HttpPackageConfigurations?:array<array{Path:string, SourceGroup:string, Type:"DASH"|"HLS"}>, LastModifiedTime?:int|string|\DateTimeInterface, LiveSourceName?:string, SourceLocationName?:string, Tags?:array<string, string>}>
     */
    public function describeLiveSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelName:string, ProgramName:string} $args
     * @return \AWS\Result<array{AdBreaks?:array<array{AdBreakMetadata?:array<array{Key:string, Value:string}>, MessageType?:"SPLICE_INSERT"|"TIME_SIGNAL", OffsetMillis:int, Slate?:array{SourceLocationName?:string, VodSourceName?:string}, SpliceInsertMessage?:array{AvailNum?:int, AvailsExpected?:int, SpliceEventId?:int, UniqueProgramId?:int}, TimeSignalMessage?:array{SegmentationDescriptors?:array<array{SegmentNum?:int, SegmentationEventId?:int, SegmentationTypeId?:int, SegmentationUpid?:string, SegmentationUpidType?:int, SegmentsExpected?:int, SubSegmentNum?:int, SubSegmentsExpected?:int}>}}>, Arn?:string, AudienceMedia?:array<array{AlternateMedia?:array<array{AdBreaks?:array<array{AdBreakMetadata?:array<array{Key:string, Value:string}>, MessageType?:"SPLICE_INSERT"|"TIME_SIGNAL", OffsetMillis:int, Slate?:array{SourceLocationName?:string, VodSourceName?:string}, SpliceInsertMessage?:array{AvailNum?:int, AvailsExpected?:int, SpliceEventId?:int, UniqueProgramId?:int}, TimeSignalMessage?:array{SegmentationDescriptors?:array<array{SegmentNum?:int, SegmentationEventId?:int, SegmentationTypeId?:int, SegmentationUpid?:string, SegmentationUpidType?:int, SegmentsExpected?:int, SubSegmentNum?:int, SubSegmentsExpected?:int}>}}>, ClipRange?:array{EndOffsetMillis?:int, StartOffsetMillis?:int}, DurationMillis?:int, LiveSourceName?:string, ScheduledStartTimeMillis?:int, SourceLocationName?:string, VodSourceName?:string}>, Audience?:string}>, ChannelName?:string, ClipRange?:array{EndOffsetMillis?:int, StartOffsetMillis?:int}, CreationTime?:int|string|\DateTimeInterface, DurationMillis?:int, LiveSourceName?:string, ProgramName?:string, ScheduledStartTime?:int|string|\DateTimeInterface, SourceLocationName?:string, VodSourceName?:string}>
     */
    public function describeProgram(array $args): \AWS\Result { }

    /**
     * @param array{ChannelName:string, ProgramName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AdBreaks?:array<array{AdBreakMetadata?:array<array{Key:string, Value:string}>, MessageType?:"SPLICE_INSERT"|"TIME_SIGNAL", OffsetMillis:int, Slate?:array{SourceLocationName?:string, VodSourceName?:string}, SpliceInsertMessage?:array{AvailNum?:int, AvailsExpected?:int, SpliceEventId?:int, UniqueProgramId?:int}, TimeSignalMessage?:array{SegmentationDescriptors?:array<array{SegmentNum?:int, SegmentationEventId?:int, SegmentationTypeId?:int, SegmentationUpid?:string, SegmentationUpidType?:int, SegmentsExpected?:int, SubSegmentNum?:int, SubSegmentsExpected?:int}>}}>, Arn?:string, AudienceMedia?:array<array{AlternateMedia?:array<array{AdBreaks?:array<array{AdBreakMetadata?:array<array{Key:string, Value:string}>, MessageType?:"SPLICE_INSERT"|"TIME_SIGNAL", OffsetMillis:int, Slate?:array{SourceLocationName?:string, VodSourceName?:string}, SpliceInsertMessage?:array{AvailNum?:int, AvailsExpected?:int, SpliceEventId?:int, UniqueProgramId?:int}, TimeSignalMessage?:array{SegmentationDescriptors?:array<array{SegmentNum?:int, SegmentationEventId?:int, SegmentationTypeId?:int, SegmentationUpid?:string, SegmentationUpidType?:int, SegmentsExpected?:int, SubSegmentNum?:int, SubSegmentsExpected?:int}>}}>, ClipRange?:array{EndOffsetMillis?:int, StartOffsetMillis?:int}, DurationMillis?:int, LiveSourceName?:string, ScheduledStartTimeMillis?:int, SourceLocationName?:string, VodSourceName?:string}>, Audience?:string}>, ChannelName?:string, ClipRange?:array{EndOffsetMillis?:int, StartOffsetMillis?:int}, CreationTime?:int|string|\DateTimeInterface, DurationMillis?:int, LiveSourceName?:string, ProgramName?:string, ScheduledStartTime?:int|string|\DateTimeInterface, SourceLocationName?:string, VodSourceName?:string}>
     */
    public function describeProgramAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SourceLocationName:string} $args
     * @return \AWS\Result<array{AccessConfiguration?:array{AccessType?:"S3_SIGV4"|"SECRETS_MANAGER_ACCESS_TOKEN"|"AUTODETECT_SIGV4", SecretsManagerAccessTokenConfiguration?:array{HeaderName?:string, SecretArn?:string, SecretStringKey?:string}}, Arn?:string, CreationTime?:int|string|\DateTimeInterface, DefaultSegmentDeliveryConfiguration?:array{BaseUrl?:string}, HttpConfiguration?:array{BaseUrl:string}, LastModifiedTime?:int|string|\DateTimeInterface, SegmentDeliveryConfigurations?:array<array{BaseUrl?:string, Name?:string}>, SourceLocationName?:string, Tags?:array<string, string>}>
     */
    public function describeSourceLocation(array $args): \AWS\Result { }

    /**
     * @param array{SourceLocationName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccessConfiguration?:array{AccessType?:"S3_SIGV4"|"SECRETS_MANAGER_ACCESS_TOKEN"|"AUTODETECT_SIGV4", SecretsManagerAccessTokenConfiguration?:array{HeaderName?:string, SecretArn?:string, SecretStringKey?:string}}, Arn?:string, CreationTime?:int|string|\DateTimeInterface, DefaultSegmentDeliveryConfiguration?:array{BaseUrl?:string}, HttpConfiguration?:array{BaseUrl:string}, LastModifiedTime?:int|string|\DateTimeInterface, SegmentDeliveryConfigurations?:array<array{BaseUrl?:string, Name?:string}>, SourceLocationName?:string, Tags?:array<string, string>}>
     */
    public function describeSourceLocationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SourceLocationName:string, VodSourceName:string} $args
     * @return \AWS\Result<array{AdBreakOpportunities?:array<array{OffsetMillis:int}>, Arn?:string, CreationTime?:int|string|\DateTimeInterface, HttpPackageConfigurations?:array<array{Path:string, SourceGroup:string, Type:"DASH"|"HLS"}>, LastModifiedTime?:int|string|\DateTimeInterface, SourceLocationName?:string, Tags?:array<string, string>, VodSourceName?:string}>
     */
    public function describeVodSource(array $args): \AWS\Result { }

    /**
     * @param array{SourceLocationName:string, VodSourceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AdBreakOpportunities?:array<array{OffsetMillis:int}>, Arn?:string, CreationTime?:int|string|\DateTimeInterface, HttpPackageConfigurations?:array<array{Path:string, SourceGroup:string, Type:"DASH"|"HLS"}>, LastModifiedTime?:int|string|\DateTimeInterface, SourceLocationName?:string, Tags?:array<string, string>, VodSourceName?:string}>
     */
    public function describeVodSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelName:string} $args
     * @return \AWS\Result<array{Policy?:string}>
     */
    public function getChannelPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ChannelName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:string}>
     */
    public function getChannelPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Audience?:string, ChannelName:string, DurationMinutes?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Items?:array<array{ApproximateDurationSeconds?:int, ApproximateStartTime?:int|string|\DateTimeInterface, Arn:string, Audiences?:array<string>, ChannelName:string, LiveSourceName?:string, ProgramName:string, ScheduleAdBreaks?:array<array{ApproximateDurationSeconds?:int, ApproximateStartTime?:int|string|\DateTimeInterface, SourceLocationName?:string, VodSourceName?:string}>, ScheduleEntryType?:"PROGRAM"|"FILLER_SLATE"|"ALTERNATE_MEDIA", SourceLocationName:string, VodSourceName?:string}>, NextToken?:string}>
     */
    public function getChannelSchedule(array $args): \AWS\Result { }

    /**
     * @param array{Audience?:string, ChannelName:string, DurationMinutes?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{ApproximateDurationSeconds?:int, ApproximateStartTime?:int|string|\DateTimeInterface, Arn:string, Audiences?:array<string>, ChannelName:string, LiveSourceName?:string, ProgramName:string, ScheduleAdBreaks?:array<array{ApproximateDurationSeconds?:int, ApproximateStartTime?:int|string|\DateTimeInterface, SourceLocationName?:string, VodSourceName?:string}>, ScheduleEntryType?:"PROGRAM"|"FILLER_SLATE"|"ALTERNATE_MEDIA", SourceLocationName:string, VodSourceName?:string}>, NextToken?:string}>
     */
    public function getChannelScheduleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{AdDecisionServerUrl?:string, AvailSuppression?:array{FillPolicy?:"FULL_AVAIL_ONLY"|"PARTIAL_AVAIL", Mode?:"OFF"|"BEHIND_LIVE_EDGE"|"AFTER_LIVE_EDGE", Value?:string}, Bumper?:array{EndUrl?:string, StartUrl?:string}, CdnConfiguration?:array{AdSegmentUrlPrefix?:string, ContentSegmentUrlPrefix?:string}, ConfigurationAliases?:array<string, array<string, string>>, DashConfiguration?:array{ManifestEndpointPrefix?:string, MpdLocation?:string, OriginManifestType?:"SINGLE_PERIOD"|"MULTI_PERIOD"}, HlsConfiguration?:array{ManifestEndpointPrefix?:string}, InsertionMode?:"STITCHED_ONLY"|"PLAYER_SELECT", LivePreRollConfiguration?:array{AdDecisionServerUrl?:string, MaxDurationSeconds?:int}, LogConfiguration?:array{PercentEnabled:int}, ManifestProcessingRules?:array{AdMarkerPassthrough?:array{Enabled?:bool}}, Name?:string, PersonalizationThresholdSeconds?:int, PlaybackConfigurationArn?:string, PlaybackEndpointPrefix?:string, SessionInitializationEndpointPrefix?:string, SlateAdUrl?:string, Tags?:array<string, string>, TranscodeProfileName?:string, VideoContentSourceUrl?:string}>
     */
    public function getPlaybackConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AdDecisionServerUrl?:string, AvailSuppression?:array{FillPolicy?:"FULL_AVAIL_ONLY"|"PARTIAL_AVAIL", Mode?:"OFF"|"BEHIND_LIVE_EDGE"|"AFTER_LIVE_EDGE", Value?:string}, Bumper?:array{EndUrl?:string, StartUrl?:string}, CdnConfiguration?:array{AdSegmentUrlPrefix?:string, ContentSegmentUrlPrefix?:string}, ConfigurationAliases?:array<string, array<string, string>>, DashConfiguration?:array{ManifestEndpointPrefix?:string, MpdLocation?:string, OriginManifestType?:"SINGLE_PERIOD"|"MULTI_PERIOD"}, HlsConfiguration?:array{ManifestEndpointPrefix?:string}, InsertionMode?:"STITCHED_ONLY"|"PLAYER_SELECT", LivePreRollConfiguration?:array{AdDecisionServerUrl?:string, MaxDurationSeconds?:int}, LogConfiguration?:array{PercentEnabled:int}, ManifestProcessingRules?:array{AdMarkerPassthrough?:array{Enabled?:bool}}, Name?:string, PersonalizationThresholdSeconds?:int, PlaybackConfigurationArn?:string, PlaybackEndpointPrefix?:string, SessionInitializationEndpointPrefix?:string, SlateAdUrl?:string, Tags?:array<string, string>, TranscodeProfileName?:string, VideoContentSourceUrl?:string}>
     */
    public function getPlaybackConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, PlaybackConfigurationName:string} $args
     * @return \AWS\Result<array{Arn?:string, Consumption?:array{AvailMatchingCriteria?:array<array{DynamicVariable:string, Operator:"EQUALS"}>, EndTime:int|string|\DateTimeInterface, StartTime?:int|string|\DateTimeInterface}, Name?:string, PlaybackConfigurationName?:string, Retrieval?:array{DynamicVariables?:array<string, string>, EndTime:int|string|\DateTimeInterface, StartTime?:int|string|\DateTimeInterface}, StreamId?:string}>
     */
    public function getPrefetchSchedule(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, PlaybackConfigurationName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Consumption?:array{AvailMatchingCriteria?:array<array{DynamicVariable:string, Operator:"EQUALS"}>, EndTime:int|string|\DateTimeInterface, StartTime?:int|string|\DateTimeInterface}, Name?:string, PlaybackConfigurationName?:string, Retrieval?:array{DynamicVariables?:array<string, string>, EndTime:int|string|\DateTimeInterface, StartTime?:int|string|\DateTimeInterface}, StreamId?:string}>
     */
    public function getPrefetchScheduleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ResourceArn:string} $args
     * @return \AWS\Result<array{Items?:array<array{AlertCode:string, AlertMessage:string, Category?:"SCHEDULING_ERROR"|"PLAYBACK_WARNING"|"INFO", LastModifiedTime:int|string|\DateTimeInterface, RelatedResourceArns:array<string>, ResourceArn:string}>, NextToken?:string}>
     */
    public function listAlerts(array $args): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{AlertCode:string, AlertMessage:string, Category?:"SCHEDULING_ERROR"|"PLAYBACK_WARNING"|"INFO", LastModifiedTime:int|string|\DateTimeInterface, RelatedResourceArns:array<string>, ResourceArn:string}>, NextToken?:string}>
     */
    public function listAlertsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Items?:array<array{Arn:string, Audiences?:array<string>, ChannelName:string, ChannelState:string, CreationTime?:int|string|\DateTimeInterface, FillerSlate?:array{SourceLocationName?:string, VodSourceName?:string}, LastModifiedTime?:int|string|\DateTimeInterface, LogConfiguration:array{LogTypes?:array<"AS_RUN">}, Outputs:array<array{DashPlaylistSettings?:array{ManifestWindowSeconds?:int, MinBufferTimeSeconds?:int, MinUpdatePeriodSeconds?:int, SuggestedPresentationDelaySeconds?:int}, HlsPlaylistSettings?:array{AdMarkupType?:array<"DATERANGE"|"SCTE35_ENHANCED">, ManifestWindowSeconds?:int}, ManifestName:string, PlaybackUrl:string, SourceGroup:string}>, PlaybackMode:string, Tags?:array<string, string>, Tier:string}>, NextToken?:string}>
     */
    public function listChannels(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{Arn:string, Audiences?:array<string>, ChannelName:string, ChannelState:string, CreationTime?:int|string|\DateTimeInterface, FillerSlate?:array{SourceLocationName?:string, VodSourceName?:string}, LastModifiedTime?:int|string|\DateTimeInterface, LogConfiguration:array{LogTypes?:array<"AS_RUN">}, Outputs:array<array{DashPlaylistSettings?:array{ManifestWindowSeconds?:int, MinBufferTimeSeconds?:int, MinUpdatePeriodSeconds?:int, SuggestedPresentationDelaySeconds?:int}, HlsPlaylistSettings?:array{AdMarkupType?:array<"DATERANGE"|"SCTE35_ENHANCED">, ManifestWindowSeconds?:int}, ManifestName:string, PlaybackUrl:string, SourceGroup:string}>, PlaybackMode:string, Tags?:array<string, string>, Tier:string}>, NextToken?:string}>
     */
    public function listChannelsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, SourceLocationName:string} $args
     * @return \AWS\Result<array{Items?:array<array{Arn:string, CreationTime?:int|string|\DateTimeInterface, HttpPackageConfigurations:array<array{Path:string, SourceGroup:string, Type:"DASH"|"HLS"}>, LastModifiedTime?:int|string|\DateTimeInterface, LiveSourceName:string, SourceLocationName:string, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listLiveSources(array $args): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, SourceLocationName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{Arn:string, CreationTime?:int|string|\DateTimeInterface, HttpPackageConfigurations:array<array{Path:string, SourceGroup:string, Type:"DASH"|"HLS"}>, LastModifiedTime?:int|string|\DateTimeInterface, LiveSourceName:string, SourceLocationName:string, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listLiveSourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Items?:array<array{AdDecisionServerUrl?:string, AvailSuppression?:array{FillPolicy?:"FULL_AVAIL_ONLY"|"PARTIAL_AVAIL", Mode?:"OFF"|"BEHIND_LIVE_EDGE"|"AFTER_LIVE_EDGE", Value?:string}, Bumper?:array{EndUrl?:string, StartUrl?:string}, CdnConfiguration?:array{AdSegmentUrlPrefix?:string, ContentSegmentUrlPrefix?:string}, ConfigurationAliases?:array<string, array<string, string>>, DashConfiguration?:array{ManifestEndpointPrefix?:string, MpdLocation?:string, OriginManifestType?:"SINGLE_PERIOD"|"MULTI_PERIOD"}, HlsConfiguration?:array{ManifestEndpointPrefix?:string}, InsertionMode?:"STITCHED_ONLY"|"PLAYER_SELECT", LivePreRollConfiguration?:array{AdDecisionServerUrl?:string, MaxDurationSeconds?:int}, LogConfiguration?:array{PercentEnabled:int}, ManifestProcessingRules?:array{AdMarkerPassthrough?:array{Enabled?:bool}}, Name?:string, PersonalizationThresholdSeconds?:int, PlaybackConfigurationArn?:string, PlaybackEndpointPrefix?:string, SessionInitializationEndpointPrefix?:string, SlateAdUrl?:string, Tags?:array<string, string>, TranscodeProfileName?:string, VideoContentSourceUrl?:string}>, NextToken?:string}>
     */
    public function listPlaybackConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{AdDecisionServerUrl?:string, AvailSuppression?:array{FillPolicy?:"FULL_AVAIL_ONLY"|"PARTIAL_AVAIL", Mode?:"OFF"|"BEHIND_LIVE_EDGE"|"AFTER_LIVE_EDGE", Value?:string}, Bumper?:array{EndUrl?:string, StartUrl?:string}, CdnConfiguration?:array{AdSegmentUrlPrefix?:string, ContentSegmentUrlPrefix?:string}, ConfigurationAliases?:array<string, array<string, string>>, DashConfiguration?:array{ManifestEndpointPrefix?:string, MpdLocation?:string, OriginManifestType?:"SINGLE_PERIOD"|"MULTI_PERIOD"}, HlsConfiguration?:array{ManifestEndpointPrefix?:string}, InsertionMode?:"STITCHED_ONLY"|"PLAYER_SELECT", LivePreRollConfiguration?:array{AdDecisionServerUrl?:string, MaxDurationSeconds?:int}, LogConfiguration?:array{PercentEnabled:int}, ManifestProcessingRules?:array{AdMarkerPassthrough?:array{Enabled?:bool}}, Name?:string, PersonalizationThresholdSeconds?:int, PlaybackConfigurationArn?:string, PlaybackEndpointPrefix?:string, SessionInitializationEndpointPrefix?:string, SlateAdUrl?:string, Tags?:array<string, string>, TranscodeProfileName?:string, VideoContentSourceUrl?:string}>, NextToken?:string}>
     */
    public function listPlaybackConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, PlaybackConfigurationName:string, StreamId?:string} $args
     * @return \AWS\Result<array{Items?:array<array{Arn:string, Consumption:array{AvailMatchingCriteria?:array<array{DynamicVariable:string, Operator:"EQUALS"}>, EndTime:int|string|\DateTimeInterface, StartTime?:int|string|\DateTimeInterface}, Name:string, PlaybackConfigurationName:string, Retrieval:array{DynamicVariables?:array<string, string>, EndTime:int|string|\DateTimeInterface, StartTime?:int|string|\DateTimeInterface}, StreamId?:string}>, NextToken?:string}>
     */
    public function listPrefetchSchedules(array $args): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, PlaybackConfigurationName:string, StreamId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{Arn:string, Consumption:array{AvailMatchingCriteria?:array<array{DynamicVariable:string, Operator:"EQUALS"}>, EndTime:int|string|\DateTimeInterface, StartTime?:int|string|\DateTimeInterface}, Name:string, PlaybackConfigurationName:string, Retrieval:array{DynamicVariables?:array<string, string>, EndTime:int|string|\DateTimeInterface, StartTime?:int|string|\DateTimeInterface}, StreamId?:string}>, NextToken?:string}>
     */
    public function listPrefetchSchedulesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Items?:array<array{AccessConfiguration?:array{AccessType?:"S3_SIGV4"|"SECRETS_MANAGER_ACCESS_TOKEN"|"AUTODETECT_SIGV4", SecretsManagerAccessTokenConfiguration?:array{HeaderName?:string, SecretArn?:string, SecretStringKey?:string}}, Arn:string, CreationTime?:int|string|\DateTimeInterface, DefaultSegmentDeliveryConfiguration?:array{BaseUrl?:string}, HttpConfiguration:array{BaseUrl:string}, LastModifiedTime?:int|string|\DateTimeInterface, SegmentDeliveryConfigurations?:array<array{BaseUrl?:string, Name?:string}>, SourceLocationName:string, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listSourceLocations(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{AccessConfiguration?:array{AccessType?:"S3_SIGV4"|"SECRETS_MANAGER_ACCESS_TOKEN"|"AUTODETECT_SIGV4", SecretsManagerAccessTokenConfiguration?:array{HeaderName?:string, SecretArn?:string, SecretStringKey?:string}}, Arn:string, CreationTime?:int|string|\DateTimeInterface, DefaultSegmentDeliveryConfiguration?:array{BaseUrl?:string}, HttpConfiguration:array{BaseUrl:string}, LastModifiedTime?:int|string|\DateTimeInterface, SegmentDeliveryConfigurations?:array<array{BaseUrl?:string, Name?:string}>, SourceLocationName:string, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listSourceLocationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{MaxResults?:int, NextToken?:string, SourceLocationName:string} $args
     * @return \AWS\Result<array{Items?:array<array{Arn:string, CreationTime?:int|string|\DateTimeInterface, HttpPackageConfigurations:array<array{Path:string, SourceGroup:string, Type:"DASH"|"HLS"}>, LastModifiedTime?:int|string|\DateTimeInterface, SourceLocationName:string, Tags?:array<string, string>, VodSourceName:string}>, NextToken?:string}>
     */
    public function listVodSources(array $args): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, SourceLocationName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Items?:array<array{Arn:string, CreationTime?:int|string|\DateTimeInterface, HttpPackageConfigurations:array<array{Path:string, SourceGroup:string, Type:"DASH"|"HLS"}>, LastModifiedTime?:int|string|\DateTimeInterface, SourceLocationName:string, Tags?:array<string, string>, VodSourceName:string}>, NextToken?:string}>
     */
    public function listVodSourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelName:string, Policy:string} $args
     * @return \AWS\Result<array{}>
     */
    public function putChannelPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ChannelName:string, Policy:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putChannelPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AdDecisionServerUrl?:string, AvailSuppression?:array{FillPolicy?:"FULL_AVAIL_ONLY"|"PARTIAL_AVAIL", Mode?:"OFF"|"BEHIND_LIVE_EDGE"|"AFTER_LIVE_EDGE", Value?:string}, Bumper?:array{EndUrl?:string, StartUrl?:string}, CdnConfiguration?:array{AdSegmentUrlPrefix?:string, ContentSegmentUrlPrefix?:string}, ConfigurationAliases?:array<string, array<string, string>>, DashConfiguration?:array{MpdLocation?:string, OriginManifestType?:"SINGLE_PERIOD"|"MULTI_PERIOD"}, InsertionMode?:"STITCHED_ONLY"|"PLAYER_SELECT", LivePreRollConfiguration?:array{AdDecisionServerUrl?:string, MaxDurationSeconds?:int}, ManifestProcessingRules?:array{AdMarkerPassthrough?:array{Enabled?:bool}}, Name:string, PersonalizationThresholdSeconds?:int, SlateAdUrl?:string, Tags?:array<string, string>, TranscodeProfileName?:string, VideoContentSourceUrl?:string} $args
     * @return \AWS\Result<array{AdDecisionServerUrl?:string, AvailSuppression?:array{FillPolicy?:"FULL_AVAIL_ONLY"|"PARTIAL_AVAIL", Mode?:"OFF"|"BEHIND_LIVE_EDGE"|"AFTER_LIVE_EDGE", Value?:string}, Bumper?:array{EndUrl?:string, StartUrl?:string}, CdnConfiguration?:array{AdSegmentUrlPrefix?:string, ContentSegmentUrlPrefix?:string}, ConfigurationAliases?:array<string, array<string, string>>, DashConfiguration?:array{ManifestEndpointPrefix?:string, MpdLocation?:string, OriginManifestType?:"SINGLE_PERIOD"|"MULTI_PERIOD"}, HlsConfiguration?:array{ManifestEndpointPrefix?:string}, InsertionMode?:"STITCHED_ONLY"|"PLAYER_SELECT", LivePreRollConfiguration?:array{AdDecisionServerUrl?:string, MaxDurationSeconds?:int}, LogConfiguration?:array{PercentEnabled:int}, ManifestProcessingRules?:array{AdMarkerPassthrough?:array{Enabled?:bool}}, Name?:string, PersonalizationThresholdSeconds?:int, PlaybackConfigurationArn?:string, PlaybackEndpointPrefix?:string, SessionInitializationEndpointPrefix?:string, SlateAdUrl?:string, Tags?:array<string, string>, TranscodeProfileName?:string, VideoContentSourceUrl?:string}>
     */
    public function putPlaybackConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{AdDecisionServerUrl?:string, AvailSuppression?:array{FillPolicy?:"FULL_AVAIL_ONLY"|"PARTIAL_AVAIL", Mode?:"OFF"|"BEHIND_LIVE_EDGE"|"AFTER_LIVE_EDGE", Value?:string}, Bumper?:array{EndUrl?:string, StartUrl?:string}, CdnConfiguration?:array{AdSegmentUrlPrefix?:string, ContentSegmentUrlPrefix?:string}, ConfigurationAliases?:array<string, array<string, string>>, DashConfiguration?:array{MpdLocation?:string, OriginManifestType?:"SINGLE_PERIOD"|"MULTI_PERIOD"}, InsertionMode?:"STITCHED_ONLY"|"PLAYER_SELECT", LivePreRollConfiguration?:array{AdDecisionServerUrl?:string, MaxDurationSeconds?:int}, ManifestProcessingRules?:array{AdMarkerPassthrough?:array{Enabled?:bool}}, Name:string, PersonalizationThresholdSeconds?:int, SlateAdUrl?:string, Tags?:array<string, string>, TranscodeProfileName?:string, VideoContentSourceUrl?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AdDecisionServerUrl?:string, AvailSuppression?:array{FillPolicy?:"FULL_AVAIL_ONLY"|"PARTIAL_AVAIL", Mode?:"OFF"|"BEHIND_LIVE_EDGE"|"AFTER_LIVE_EDGE", Value?:string}, Bumper?:array{EndUrl?:string, StartUrl?:string}, CdnConfiguration?:array{AdSegmentUrlPrefix?:string, ContentSegmentUrlPrefix?:string}, ConfigurationAliases?:array<string, array<string, string>>, DashConfiguration?:array{ManifestEndpointPrefix?:string, MpdLocation?:string, OriginManifestType?:"SINGLE_PERIOD"|"MULTI_PERIOD"}, HlsConfiguration?:array{ManifestEndpointPrefix?:string}, InsertionMode?:"STITCHED_ONLY"|"PLAYER_SELECT", LivePreRollConfiguration?:array{AdDecisionServerUrl?:string, MaxDurationSeconds?:int}, LogConfiguration?:array{PercentEnabled:int}, ManifestProcessingRules?:array{AdMarkerPassthrough?:array{Enabled?:bool}}, Name?:string, PersonalizationThresholdSeconds?:int, PlaybackConfigurationArn?:string, PlaybackEndpointPrefix?:string, SessionInitializationEndpointPrefix?:string, SlateAdUrl?:string, Tags?:array<string, string>, TranscodeProfileName?:string, VideoContentSourceUrl?:string}>
     */
    public function putPlaybackConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function startChannel(array $args): \AWS\Result { }

    /**
     * @param array{ChannelName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function startChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopChannel(array $args): \AWS\Result { }

    /**
     * @param array{ChannelName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{Audiences?:array<string>, ChannelName:string, FillerSlate?:array{SourceLocationName?:string, VodSourceName?:string}, Outputs:array<array{DashPlaylistSettings?:array{ManifestWindowSeconds?:int, MinBufferTimeSeconds?:int, MinUpdatePeriodSeconds?:int, SuggestedPresentationDelaySeconds?:int}, HlsPlaylistSettings?:array{AdMarkupType?:array<"DATERANGE"|"SCTE35_ENHANCED">, ManifestWindowSeconds?:int}, ManifestName:string, SourceGroup:string}>, TimeShiftConfiguration?:array{MaxTimeDelaySeconds:int}} $args
     * @return \AWS\Result<array{Arn?:string, Audiences?:array<string>, ChannelName?:string, ChannelState?:"RUNNING"|"STOPPED", CreationTime?:int|string|\DateTimeInterface, FillerSlate?:array{SourceLocationName?:string, VodSourceName?:string}, LastModifiedTime?:int|string|\DateTimeInterface, Outputs?:array<array{DashPlaylistSettings?:array{ManifestWindowSeconds?:int, MinBufferTimeSeconds?:int, MinUpdatePeriodSeconds?:int, SuggestedPresentationDelaySeconds?:int}, HlsPlaylistSettings?:array{AdMarkupType?:array<"DATERANGE"|"SCTE35_ENHANCED">, ManifestWindowSeconds?:int}, ManifestName:string, PlaybackUrl:string, SourceGroup:string}>, PlaybackMode?:string, Tags?:array<string, string>, Tier?:string, TimeShiftConfiguration?:array{MaxTimeDelaySeconds:int}}>
     */
    public function updateChannel(array $args): \AWS\Result { }

    /**
     * @param array{Audiences?:array<string>, ChannelName:string, FillerSlate?:array{SourceLocationName?:string, VodSourceName?:string}, Outputs:array<array{DashPlaylistSettings?:array{ManifestWindowSeconds?:int, MinBufferTimeSeconds?:int, MinUpdatePeriodSeconds?:int, SuggestedPresentationDelaySeconds?:int}, HlsPlaylistSettings?:array{AdMarkupType?:array<"DATERANGE"|"SCTE35_ENHANCED">, ManifestWindowSeconds?:int}, ManifestName:string, SourceGroup:string}>, TimeShiftConfiguration?:array{MaxTimeDelaySeconds:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Audiences?:array<string>, ChannelName?:string, ChannelState?:"RUNNING"|"STOPPED", CreationTime?:int|string|\DateTimeInterface, FillerSlate?:array{SourceLocationName?:string, VodSourceName?:string}, LastModifiedTime?:int|string|\DateTimeInterface, Outputs?:array<array{DashPlaylistSettings?:array{ManifestWindowSeconds?:int, MinBufferTimeSeconds?:int, MinUpdatePeriodSeconds?:int, SuggestedPresentationDelaySeconds?:int}, HlsPlaylistSettings?:array{AdMarkupType?:array<"DATERANGE"|"SCTE35_ENHANCED">, ManifestWindowSeconds?:int}, ManifestName:string, PlaybackUrl:string, SourceGroup:string}>, PlaybackMode?:string, Tags?:array<string, string>, Tier?:string, TimeShiftConfiguration?:array{MaxTimeDelaySeconds:int}}>
     */
    public function updateChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HttpPackageConfigurations:array<array{Path:string, SourceGroup:string, Type:"DASH"|"HLS"}>, LiveSourceName:string, SourceLocationName:string} $args
     * @return \AWS\Result<array{Arn?:string, CreationTime?:int|string|\DateTimeInterface, HttpPackageConfigurations?:array<array{Path:string, SourceGroup:string, Type:"DASH"|"HLS"}>, LastModifiedTime?:int|string|\DateTimeInterface, LiveSourceName?:string, SourceLocationName?:string, Tags?:array<string, string>}>
     */
    public function updateLiveSource(array $args): \AWS\Result { }

    /**
     * @param array{HttpPackageConfigurations:array<array{Path:string, SourceGroup:string, Type:"DASH"|"HLS"}>, LiveSourceName:string, SourceLocationName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTime?:int|string|\DateTimeInterface, HttpPackageConfigurations?:array<array{Path:string, SourceGroup:string, Type:"DASH"|"HLS"}>, LastModifiedTime?:int|string|\DateTimeInterface, LiveSourceName?:string, SourceLocationName?:string, Tags?:array<string, string>}>
     */
    public function updateLiveSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AdBreaks?:array<array{AdBreakMetadata?:array<array{Key:string, Value:string}>, MessageType?:"SPLICE_INSERT"|"TIME_SIGNAL", OffsetMillis:int, Slate?:array{SourceLocationName?:string, VodSourceName?:string}, SpliceInsertMessage?:array{AvailNum?:int, AvailsExpected?:int, SpliceEventId?:int, UniqueProgramId?:int}, TimeSignalMessage?:array{SegmentationDescriptors?:array<array{SegmentNum?:int, SegmentationEventId?:int, SegmentationTypeId?:int, SegmentationUpid?:string, SegmentationUpidType?:int, SegmentsExpected?:int, SubSegmentNum?:int, SubSegmentsExpected?:int}>}}>, AudienceMedia?:array<array{AlternateMedia?:array<array{AdBreaks?:array<array{AdBreakMetadata?:array<array{Key:string, Value:string}>, MessageType?:"SPLICE_INSERT"|"TIME_SIGNAL", OffsetMillis:int, Slate?:array{SourceLocationName?:string, VodSourceName?:string}, SpliceInsertMessage?:array{AvailNum?:int, AvailsExpected?:int, SpliceEventId?:int, UniqueProgramId?:int}, TimeSignalMessage?:array{SegmentationDescriptors?:array<array{SegmentNum?:int, SegmentationEventId?:int, SegmentationTypeId?:int, SegmentationUpid?:string, SegmentationUpidType?:int, SegmentsExpected?:int, SubSegmentNum?:int, SubSegmentsExpected?:int}>}}>, ClipRange?:array{EndOffsetMillis?:int, StartOffsetMillis?:int}, DurationMillis?:int, LiveSourceName?:string, ScheduledStartTimeMillis?:int, SourceLocationName?:string, VodSourceName?:string}>, Audience?:string}>, ChannelName:string, ProgramName:string, ScheduleConfiguration:array{ClipRange?:array{EndOffsetMillis?:int, StartOffsetMillis?:int}, Transition?:array{DurationMillis?:int, ScheduledStartTimeMillis?:int}}} $args
     * @return \AWS\Result<array{AdBreaks?:array<array{AdBreakMetadata?:array<array{Key:string, Value:string}>, MessageType?:"SPLICE_INSERT"|"TIME_SIGNAL", OffsetMillis:int, Slate?:array{SourceLocationName?:string, VodSourceName?:string}, SpliceInsertMessage?:array{AvailNum?:int, AvailsExpected?:int, SpliceEventId?:int, UniqueProgramId?:int}, TimeSignalMessage?:array{SegmentationDescriptors?:array<array{SegmentNum?:int, SegmentationEventId?:int, SegmentationTypeId?:int, SegmentationUpid?:string, SegmentationUpidType?:int, SegmentsExpected?:int, SubSegmentNum?:int, SubSegmentsExpected?:int}>}}>, Arn?:string, AudienceMedia?:array<array{AlternateMedia?:array<array{AdBreaks?:array<array{AdBreakMetadata?:array<array{Key:string, Value:string}>, MessageType?:"SPLICE_INSERT"|"TIME_SIGNAL", OffsetMillis:int, Slate?:array{SourceLocationName?:string, VodSourceName?:string}, SpliceInsertMessage?:array{AvailNum?:int, AvailsExpected?:int, SpliceEventId?:int, UniqueProgramId?:int}, TimeSignalMessage?:array{SegmentationDescriptors?:array<array{SegmentNum?:int, SegmentationEventId?:int, SegmentationTypeId?:int, SegmentationUpid?:string, SegmentationUpidType?:int, SegmentsExpected?:int, SubSegmentNum?:int, SubSegmentsExpected?:int}>}}>, ClipRange?:array{EndOffsetMillis?:int, StartOffsetMillis?:int}, DurationMillis?:int, LiveSourceName?:string, ScheduledStartTimeMillis?:int, SourceLocationName?:string, VodSourceName?:string}>, Audience?:string}>, ChannelName?:string, ClipRange?:array{EndOffsetMillis?:int, StartOffsetMillis?:int}, CreationTime?:int|string|\DateTimeInterface, DurationMillis?:int, LiveSourceName?:string, ProgramName?:string, ScheduledStartTime?:int|string|\DateTimeInterface, SourceLocationName?:string, VodSourceName?:string}>
     */
    public function updateProgram(array $args): \AWS\Result { }

    /**
     * @param array{AdBreaks?:array<array{AdBreakMetadata?:array<array{Key:string, Value:string}>, MessageType?:"SPLICE_INSERT"|"TIME_SIGNAL", OffsetMillis:int, Slate?:array{SourceLocationName?:string, VodSourceName?:string}, SpliceInsertMessage?:array{AvailNum?:int, AvailsExpected?:int, SpliceEventId?:int, UniqueProgramId?:int}, TimeSignalMessage?:array{SegmentationDescriptors?:array<array{SegmentNum?:int, SegmentationEventId?:int, SegmentationTypeId?:int, SegmentationUpid?:string, SegmentationUpidType?:int, SegmentsExpected?:int, SubSegmentNum?:int, SubSegmentsExpected?:int}>}}>, AudienceMedia?:array<array{AlternateMedia?:array<array{AdBreaks?:array<array{AdBreakMetadata?:array<array{Key:string, Value:string}>, MessageType?:"SPLICE_INSERT"|"TIME_SIGNAL", OffsetMillis:int, Slate?:array{SourceLocationName?:string, VodSourceName?:string}, SpliceInsertMessage?:array{AvailNum?:int, AvailsExpected?:int, SpliceEventId?:int, UniqueProgramId?:int}, TimeSignalMessage?:array{SegmentationDescriptors?:array<array{SegmentNum?:int, SegmentationEventId?:int, SegmentationTypeId?:int, SegmentationUpid?:string, SegmentationUpidType?:int, SegmentsExpected?:int, SubSegmentNum?:int, SubSegmentsExpected?:int}>}}>, ClipRange?:array{EndOffsetMillis?:int, StartOffsetMillis?:int}, DurationMillis?:int, LiveSourceName?:string, ScheduledStartTimeMillis?:int, SourceLocationName?:string, VodSourceName?:string}>, Audience?:string}>, ChannelName:string, ProgramName:string, ScheduleConfiguration:array{ClipRange?:array{EndOffsetMillis?:int, StartOffsetMillis?:int}, Transition?:array{DurationMillis?:int, ScheduledStartTimeMillis?:int}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{AdBreaks?:array<array{AdBreakMetadata?:array<array{Key:string, Value:string}>, MessageType?:"SPLICE_INSERT"|"TIME_SIGNAL", OffsetMillis:int, Slate?:array{SourceLocationName?:string, VodSourceName?:string}, SpliceInsertMessage?:array{AvailNum?:int, AvailsExpected?:int, SpliceEventId?:int, UniqueProgramId?:int}, TimeSignalMessage?:array{SegmentationDescriptors?:array<array{SegmentNum?:int, SegmentationEventId?:int, SegmentationTypeId?:int, SegmentationUpid?:string, SegmentationUpidType?:int, SegmentsExpected?:int, SubSegmentNum?:int, SubSegmentsExpected?:int}>}}>, Arn?:string, AudienceMedia?:array<array{AlternateMedia?:array<array{AdBreaks?:array<array{AdBreakMetadata?:array<array{Key:string, Value:string}>, MessageType?:"SPLICE_INSERT"|"TIME_SIGNAL", OffsetMillis:int, Slate?:array{SourceLocationName?:string, VodSourceName?:string}, SpliceInsertMessage?:array{AvailNum?:int, AvailsExpected?:int, SpliceEventId?:int, UniqueProgramId?:int}, TimeSignalMessage?:array{SegmentationDescriptors?:array<array{SegmentNum?:int, SegmentationEventId?:int, SegmentationTypeId?:int, SegmentationUpid?:string, SegmentationUpidType?:int, SegmentsExpected?:int, SubSegmentNum?:int, SubSegmentsExpected?:int}>}}>, ClipRange?:array{EndOffsetMillis?:int, StartOffsetMillis?:int}, DurationMillis?:int, LiveSourceName?:string, ScheduledStartTimeMillis?:int, SourceLocationName?:string, VodSourceName?:string}>, Audience?:string}>, ChannelName?:string, ClipRange?:array{EndOffsetMillis?:int, StartOffsetMillis?:int}, CreationTime?:int|string|\DateTimeInterface, DurationMillis?:int, LiveSourceName?:string, ProgramName?:string, ScheduledStartTime?:int|string|\DateTimeInterface, SourceLocationName?:string, VodSourceName?:string}>
     */
    public function updateProgramAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccessConfiguration?:array{AccessType?:"S3_SIGV4"|"SECRETS_MANAGER_ACCESS_TOKEN"|"AUTODETECT_SIGV4", SecretsManagerAccessTokenConfiguration?:array{HeaderName?:string, SecretArn?:string, SecretStringKey?:string}}, DefaultSegmentDeliveryConfiguration?:array{BaseUrl?:string}, HttpConfiguration:array{BaseUrl:string}, SegmentDeliveryConfigurations?:array<array{BaseUrl?:string, Name?:string}>, SourceLocationName:string} $args
     * @return \AWS\Result<array{AccessConfiguration?:array{AccessType?:"S3_SIGV4"|"SECRETS_MANAGER_ACCESS_TOKEN"|"AUTODETECT_SIGV4", SecretsManagerAccessTokenConfiguration?:array{HeaderName?:string, SecretArn?:string, SecretStringKey?:string}}, Arn?:string, CreationTime?:int|string|\DateTimeInterface, DefaultSegmentDeliveryConfiguration?:array{BaseUrl?:string}, HttpConfiguration?:array{BaseUrl:string}, LastModifiedTime?:int|string|\DateTimeInterface, SegmentDeliveryConfigurations?:array<array{BaseUrl?:string, Name?:string}>, SourceLocationName?:string, Tags?:array<string, string>}>
     */
    public function updateSourceLocation(array $args): \AWS\Result { }

    /**
     * @param array{AccessConfiguration?:array{AccessType?:"S3_SIGV4"|"SECRETS_MANAGER_ACCESS_TOKEN"|"AUTODETECT_SIGV4", SecretsManagerAccessTokenConfiguration?:array{HeaderName?:string, SecretArn?:string, SecretStringKey?:string}}, DefaultSegmentDeliveryConfiguration?:array{BaseUrl?:string}, HttpConfiguration:array{BaseUrl:string}, SegmentDeliveryConfigurations?:array<array{BaseUrl?:string, Name?:string}>, SourceLocationName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccessConfiguration?:array{AccessType?:"S3_SIGV4"|"SECRETS_MANAGER_ACCESS_TOKEN"|"AUTODETECT_SIGV4", SecretsManagerAccessTokenConfiguration?:array{HeaderName?:string, SecretArn?:string, SecretStringKey?:string}}, Arn?:string, CreationTime?:int|string|\DateTimeInterface, DefaultSegmentDeliveryConfiguration?:array{BaseUrl?:string}, HttpConfiguration?:array{BaseUrl:string}, LastModifiedTime?:int|string|\DateTimeInterface, SegmentDeliveryConfigurations?:array<array{BaseUrl?:string, Name?:string}>, SourceLocationName?:string, Tags?:array<string, string>}>
     */
    public function updateSourceLocationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HttpPackageConfigurations:array<array{Path:string, SourceGroup:string, Type:"DASH"|"HLS"}>, SourceLocationName:string, VodSourceName:string} $args
     * @return \AWS\Result<array{Arn?:string, CreationTime?:int|string|\DateTimeInterface, HttpPackageConfigurations?:array<array{Path:string, SourceGroup:string, Type:"DASH"|"HLS"}>, LastModifiedTime?:int|string|\DateTimeInterface, SourceLocationName?:string, Tags?:array<string, string>, VodSourceName?:string}>
     */
    public function updateVodSource(array $args): \AWS\Result { }

    /**
     * @param array{HttpPackageConfigurations:array<array{Path:string, SourceGroup:string, Type:"DASH"|"HLS"}>, SourceLocationName:string, VodSourceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTime?:int|string|\DateTimeInterface, HttpPackageConfigurations?:array<array{Path:string, SourceGroup:string, Type:"DASH"|"HLS"}>, LastModifiedTime?:int|string|\DateTimeInterface, SourceLocationName?:string, Tags?:array<string, string>, VodSourceName?:string}>
     */
    public function updateVodSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
