<?php
namespace AWS\MediaPackageVod;

class MediaPackageVodClient
{
    /**
     * @param array{EgressAccessLogs?:array{LogGroupName?:string}, Id:string} $args
     * @return \AWS\Result<array{Arn?:string, Authorization?:array{CdnIdentifierSecret:string, SecretsRoleArn:string}, CreatedAt?:string, DomainName?:string, EgressAccessLogs?:array{LogGroupName?:string}, Id?:string, Tags?:array<string, string>}>
     */
    public function configureLogs(array $args): \AWS\Result { }

    /**
     * @param array{EgressAccessLogs?:array{LogGroupName?:string}, Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Authorization?:array{CdnIdentifierSecret:string, SecretsRoleArn:string}, CreatedAt?:string, DomainName?:string, EgressAccessLogs?:array{LogGroupName?:string}, Id?:string, Tags?:array<string, string>}>
     */
    public function configureLogsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, PackagingGroupId:string, ResourceId?:string, SourceArn:string, SourceRoleArn:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Arn?:string, CreatedAt?:string, EgressEndpoints?:array<array{PackagingConfigurationId?:string, Status?:string, Url?:string}>, Id?:string, PackagingGroupId?:string, ResourceId?:string, SourceArn?:string, SourceRoleArn?:string, Tags?:array<string, string>}>
     */
    public function createAsset(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, PackagingGroupId:string, ResourceId?:string, SourceArn:string, SourceRoleArn:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreatedAt?:string, EgressEndpoints?:array<array{PackagingConfigurationId?:string, Status?:string, Url?:string}>, Id?:string, PackagingGroupId?:string, ResourceId?:string, SourceArn?:string, SourceRoleArn?:string, Tags?:array<string, string>}>
     */
    public function createAssetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CmafPackage?:array{Encryption?:array{ConstantInitializationVector?:string, SpekeKeyProvider:array{EncryptionContractConfiguration?:array{PresetSpeke20Audio:"PRESET-AUDIO-1"|"PRESET-AUDIO-2"|"PRESET-AUDIO-3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET-VIDEO-1"|"PRESET-VIDEO-2"|"PRESET-VIDEO-3"|"PRESET-VIDEO-4"|"PRESET-VIDEO-5"|"PRESET-VIDEO-6"|"PRESET-VIDEO-7"|"PRESET-VIDEO-8"|"SHARED"|"UNENCRYPTED"}, RoleArn:string, SystemIds:array<string>, Url:string}}, HlsManifests:array<array{AdMarkers?:"NONE"|"SCTE35_ENHANCED"|"PASSTHROUGH", IncludeIframeOnlyStream?:bool, ManifestName?:string, ProgramDateTimeIntervalSeconds?:int, RepeatExtXKey?:bool, StreamSelection?:array{MaxVideoBitsPerSecond?:int, MinVideoBitsPerSecond?:int, StreamOrder?:"ORIGINAL"|"VIDEO_BITRATE_ASCENDING"|"VIDEO_BITRATE_DESCENDING"}}>, IncludeEncoderConfigurationInSegments?:bool, SegmentDurationSeconds?:int}, DashPackage?:array{DashManifests:array<array{ManifestLayout?:"FULL"|"COMPACT", ManifestName?:string, MinBufferTimeSeconds?:int, Profile?:"NONE"|"HBBTV_1_5", ScteMarkersSource?:"SEGMENTS"|"MANIFEST", StreamSelection?:array{MaxVideoBitsPerSecond?:int, MinVideoBitsPerSecond?:int, StreamOrder?:"ORIGINAL"|"VIDEO_BITRATE_ASCENDING"|"VIDEO_BITRATE_DESCENDING"}}>, Encryption?:array{SpekeKeyProvider:array{EncryptionContractConfiguration?:array{PresetSpeke20Audio:"PRESET-AUDIO-1"|"PRESET-AUDIO-2"|"PRESET-AUDIO-3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET-VIDEO-1"|"PRESET-VIDEO-2"|"PRESET-VIDEO-3"|"PRESET-VIDEO-4"|"PRESET-VIDEO-5"|"PRESET-VIDEO-6"|"PRESET-VIDEO-7"|"PRESET-VIDEO-8"|"SHARED"|"UNENCRYPTED"}, RoleArn:string, SystemIds:array<string>, Url:string}}, IncludeEncoderConfigurationInSegments?:bool, IncludeIframeOnlyStream?:bool, PeriodTriggers?:array<"ADS">, SegmentDurationSeconds?:int, SegmentTemplateFormat?:"NUMBER_WITH_TIMELINE"|"TIME_WITH_TIMELINE"|"NUMBER_WITH_DURATION"}, HlsPackage?:array{Encryption?:array{ConstantInitializationVector?:string, EncryptionMethod?:"AES_128"|"SAMPLE_AES", SpekeKeyProvider:array{EncryptionContractConfiguration?:array{PresetSpeke20Audio:"PRESET-AUDIO-1"|"PRESET-AUDIO-2"|"PRESET-AUDIO-3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET-VIDEO-1"|"PRESET-VIDEO-2"|"PRESET-VIDEO-3"|"PRESET-VIDEO-4"|"PRESET-VIDEO-5"|"PRESET-VIDEO-6"|"PRESET-VIDEO-7"|"PRESET-VIDEO-8"|"SHARED"|"UNENCRYPTED"}, RoleArn:string, SystemIds:array<string>, Url:string}}, HlsManifests:array<array{AdMarkers?:"NONE"|"SCTE35_ENHANCED"|"PASSTHROUGH", IncludeIframeOnlyStream?:bool, ManifestName?:string, ProgramDateTimeIntervalSeconds?:int, RepeatExtXKey?:bool, StreamSelection?:array{MaxVideoBitsPerSecond?:int, MinVideoBitsPerSecond?:int, StreamOrder?:"ORIGINAL"|"VIDEO_BITRATE_ASCENDING"|"VIDEO_BITRATE_DESCENDING"}}>, IncludeDvbSubtitles?:bool, SegmentDurationSeconds?:int, UseAudioRenditionGroup?:bool}, Id:string, MssPackage?:array{Encryption?:array{SpekeKeyProvider:array{EncryptionContractConfiguration?:array{PresetSpeke20Audio:"PRESET-AUDIO-1"|"PRESET-AUDIO-2"|"PRESET-AUDIO-3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET-VIDEO-1"|"PRESET-VIDEO-2"|"PRESET-VIDEO-3"|"PRESET-VIDEO-4"|"PRESET-VIDEO-5"|"PRESET-VIDEO-6"|"PRESET-VIDEO-7"|"PRESET-VIDEO-8"|"SHARED"|"UNENCRYPTED"}, RoleArn:string, SystemIds:array<string>, Url:string}}, MssManifests:array<array{ManifestName?:string, StreamSelection?:array{MaxVideoBitsPerSecond?:int, MinVideoBitsPerSecond?:int, StreamOrder?:"ORIGINAL"|"VIDEO_BITRATE_ASCENDING"|"VIDEO_BITRATE_DESCENDING"}}>, SegmentDurationSeconds?:int}, PackagingGroupId:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Arn?:string, CmafPackage?:array{Encryption?:array{ConstantInitializationVector?:string, SpekeKeyProvider:array{EncryptionContractConfiguration?:array{PresetSpeke20Audio:"PRESET-AUDIO-1"|"PRESET-AUDIO-2"|"PRESET-AUDIO-3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET-VIDEO-1"|"PRESET-VIDEO-2"|"PRESET-VIDEO-3"|"PRESET-VIDEO-4"|"PRESET-VIDEO-5"|"PRESET-VIDEO-6"|"PRESET-VIDEO-7"|"PRESET-VIDEO-8"|"SHARED"|"UNENCRYPTED"}, RoleArn:string, SystemIds:array<string>, Url:string}}, HlsManifests:array<array{AdMarkers?:"NONE"|"SCTE35_ENHANCED"|"PASSTHROUGH", IncludeIframeOnlyStream?:bool, ManifestName?:string, ProgramDateTimeIntervalSeconds?:int, RepeatExtXKey?:bool, StreamSelection?:array{MaxVideoBitsPerSecond?:int, MinVideoBitsPerSecond?:int, StreamOrder?:"ORIGINAL"|"VIDEO_BITRATE_ASCENDING"|"VIDEO_BITRATE_DESCENDING"}}>, IncludeEncoderConfigurationInSegments?:bool, SegmentDurationSeconds?:int}, CreatedAt?:string, DashPackage?:array{DashManifests:array<array{ManifestLayout?:"FULL"|"COMPACT", ManifestName?:string, MinBufferTimeSeconds?:int, Profile?:"NONE"|"HBBTV_1_5", ScteMarkersSource?:"SEGMENTS"|"MANIFEST", StreamSelection?:array{MaxVideoBitsPerSecond?:int, MinVideoBitsPerSecond?:int, StreamOrder?:"ORIGINAL"|"VIDEO_BITRATE_ASCENDING"|"VIDEO_BITRATE_DESCENDING"}}>, Encryption?:array{SpekeKeyProvider:array{EncryptionContractConfiguration?:array{PresetSpeke20Audio:"PRESET-AUDIO-1"|"PRESET-AUDIO-2"|"PRESET-AUDIO-3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET-VIDEO-1"|"PRESET-VIDEO-2"|"PRESET-VIDEO-3"|"PRESET-VIDEO-4"|"PRESET-VIDEO-5"|"PRESET-VIDEO-6"|"PRESET-VIDEO-7"|"PRESET-VIDEO-8"|"SHARED"|"UNENCRYPTED"}, RoleArn:string, SystemIds:array<string>, Url:string}}, IncludeEncoderConfigurationInSegments?:bool, IncludeIframeOnlyStream?:bool, PeriodTriggers?:array<"ADS">, SegmentDurationSeconds?:int, SegmentTemplateFormat?:"NUMBER_WITH_TIMELINE"|"TIME_WITH_TIMELINE"|"NUMBER_WITH_DURATION"}, HlsPackage?:array{Encryption?:array{ConstantInitializationVector?:string, EncryptionMethod?:"AES_128"|"SAMPLE_AES", SpekeKeyProvider:array{EncryptionContractConfiguration?:array{PresetSpeke20Audio:"PRESET-AUDIO-1"|"PRESET-AUDIO-2"|"PRESET-AUDIO-3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET-VIDEO-1"|"PRESET-VIDEO-2"|"PRESET-VIDEO-3"|"PRESET-VIDEO-4"|"PRESET-VIDEO-5"|"PRESET-VIDEO-6"|"PRESET-VIDEO-7"|"PRESET-VIDEO-8"|"SHARED"|"UNENCRYPTED"}, RoleArn:string, SystemIds:array<string>, Url:string}}, HlsManifests:array<array{AdMarkers?:"NONE"|"SCTE35_ENHANCED"|"PASSTHROUGH", IncludeIframeOnlyStream?:bool, ManifestName?:string, ProgramDateTimeIntervalSeconds?:int, RepeatExtXKey?:bool, StreamSelection?:array{MaxVideoBitsPerSecond?:int, MinVideoBitsPerSecond?:int, StreamOrder?:"ORIGINAL"|"VIDEO_BITRATE_ASCENDING"|"VIDEO_BITRATE_DESCENDING"}}>, IncludeDvbSubtitles?:bool, SegmentDurationSeconds?:int, UseAudioRenditionGroup?:bool}, Id?:string, MssPackage?:array{Encryption?:array{SpekeKeyProvider:array{EncryptionContractConfiguration?:array{PresetSpeke20Audio:"PRESET-AUDIO-1"|"PRESET-AUDIO-2"|"PRESET-AUDIO-3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET-VIDEO-1"|"PRESET-VIDEO-2"|"PRESET-VIDEO-3"|"PRESET-VIDEO-4"|"PRESET-VIDEO-5"|"PRESET-VIDEO-6"|"PRESET-VIDEO-7"|"PRESET-VIDEO-8"|"SHARED"|"UNENCRYPTED"}, RoleArn:string, SystemIds:array<string>, Url:string}}, MssManifests:array<array{ManifestName?:string, StreamSelection?:array{MaxVideoBitsPerSecond?:int, MinVideoBitsPerSecond?:int, StreamOrder?:"ORIGINAL"|"VIDEO_BITRATE_ASCENDING"|"VIDEO_BITRATE_DESCENDING"}}>, SegmentDurationSeconds?:int}, PackagingGroupId?:string, Tags?:array<string, string>}>
     */
    public function createPackagingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{CmafPackage?:array{Encryption?:array{ConstantInitializationVector?:string, SpekeKeyProvider:array{EncryptionContractConfiguration?:array{PresetSpeke20Audio:"PRESET-AUDIO-1"|"PRESET-AUDIO-2"|"PRESET-AUDIO-3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET-VIDEO-1"|"PRESET-VIDEO-2"|"PRESET-VIDEO-3"|"PRESET-VIDEO-4"|"PRESET-VIDEO-5"|"PRESET-VIDEO-6"|"PRESET-VIDEO-7"|"PRESET-VIDEO-8"|"SHARED"|"UNENCRYPTED"}, RoleArn:string, SystemIds:array<string>, Url:string}}, HlsManifests:array<array{AdMarkers?:"NONE"|"SCTE35_ENHANCED"|"PASSTHROUGH", IncludeIframeOnlyStream?:bool, ManifestName?:string, ProgramDateTimeIntervalSeconds?:int, RepeatExtXKey?:bool, StreamSelection?:array{MaxVideoBitsPerSecond?:int, MinVideoBitsPerSecond?:int, StreamOrder?:"ORIGINAL"|"VIDEO_BITRATE_ASCENDING"|"VIDEO_BITRATE_DESCENDING"}}>, IncludeEncoderConfigurationInSegments?:bool, SegmentDurationSeconds?:int}, DashPackage?:array{DashManifests:array<array{ManifestLayout?:"FULL"|"COMPACT", ManifestName?:string, MinBufferTimeSeconds?:int, Profile?:"NONE"|"HBBTV_1_5", ScteMarkersSource?:"SEGMENTS"|"MANIFEST", StreamSelection?:array{MaxVideoBitsPerSecond?:int, MinVideoBitsPerSecond?:int, StreamOrder?:"ORIGINAL"|"VIDEO_BITRATE_ASCENDING"|"VIDEO_BITRATE_DESCENDING"}}>, Encryption?:array{SpekeKeyProvider:array{EncryptionContractConfiguration?:array{PresetSpeke20Audio:"PRESET-AUDIO-1"|"PRESET-AUDIO-2"|"PRESET-AUDIO-3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET-VIDEO-1"|"PRESET-VIDEO-2"|"PRESET-VIDEO-3"|"PRESET-VIDEO-4"|"PRESET-VIDEO-5"|"PRESET-VIDEO-6"|"PRESET-VIDEO-7"|"PRESET-VIDEO-8"|"SHARED"|"UNENCRYPTED"}, RoleArn:string, SystemIds:array<string>, Url:string}}, IncludeEncoderConfigurationInSegments?:bool, IncludeIframeOnlyStream?:bool, PeriodTriggers?:array<"ADS">, SegmentDurationSeconds?:int, SegmentTemplateFormat?:"NUMBER_WITH_TIMELINE"|"TIME_WITH_TIMELINE"|"NUMBER_WITH_DURATION"}, HlsPackage?:array{Encryption?:array{ConstantInitializationVector?:string, EncryptionMethod?:"AES_128"|"SAMPLE_AES", SpekeKeyProvider:array{EncryptionContractConfiguration?:array{PresetSpeke20Audio:"PRESET-AUDIO-1"|"PRESET-AUDIO-2"|"PRESET-AUDIO-3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET-VIDEO-1"|"PRESET-VIDEO-2"|"PRESET-VIDEO-3"|"PRESET-VIDEO-4"|"PRESET-VIDEO-5"|"PRESET-VIDEO-6"|"PRESET-VIDEO-7"|"PRESET-VIDEO-8"|"SHARED"|"UNENCRYPTED"}, RoleArn:string, SystemIds:array<string>, Url:string}}, HlsManifests:array<array{AdMarkers?:"NONE"|"SCTE35_ENHANCED"|"PASSTHROUGH", IncludeIframeOnlyStream?:bool, ManifestName?:string, ProgramDateTimeIntervalSeconds?:int, RepeatExtXKey?:bool, StreamSelection?:array{MaxVideoBitsPerSecond?:int, MinVideoBitsPerSecond?:int, StreamOrder?:"ORIGINAL"|"VIDEO_BITRATE_ASCENDING"|"VIDEO_BITRATE_DESCENDING"}}>, IncludeDvbSubtitles?:bool, SegmentDurationSeconds?:int, UseAudioRenditionGroup?:bool}, Id:string, MssPackage?:array{Encryption?:array{SpekeKeyProvider:array{EncryptionContractConfiguration?:array{PresetSpeke20Audio:"PRESET-AUDIO-1"|"PRESET-AUDIO-2"|"PRESET-AUDIO-3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET-VIDEO-1"|"PRESET-VIDEO-2"|"PRESET-VIDEO-3"|"PRESET-VIDEO-4"|"PRESET-VIDEO-5"|"PRESET-VIDEO-6"|"PRESET-VIDEO-7"|"PRESET-VIDEO-8"|"SHARED"|"UNENCRYPTED"}, RoleArn:string, SystemIds:array<string>, Url:string}}, MssManifests:array<array{ManifestName?:string, StreamSelection?:array{MaxVideoBitsPerSecond?:int, MinVideoBitsPerSecond?:int, StreamOrder?:"ORIGINAL"|"VIDEO_BITRATE_ASCENDING"|"VIDEO_BITRATE_DESCENDING"}}>, SegmentDurationSeconds?:int}, PackagingGroupId:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CmafPackage?:array{Encryption?:array{ConstantInitializationVector?:string, SpekeKeyProvider:array{EncryptionContractConfiguration?:array{PresetSpeke20Audio:"PRESET-AUDIO-1"|"PRESET-AUDIO-2"|"PRESET-AUDIO-3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET-VIDEO-1"|"PRESET-VIDEO-2"|"PRESET-VIDEO-3"|"PRESET-VIDEO-4"|"PRESET-VIDEO-5"|"PRESET-VIDEO-6"|"PRESET-VIDEO-7"|"PRESET-VIDEO-8"|"SHARED"|"UNENCRYPTED"}, RoleArn:string, SystemIds:array<string>, Url:string}}, HlsManifests:array<array{AdMarkers?:"NONE"|"SCTE35_ENHANCED"|"PASSTHROUGH", IncludeIframeOnlyStream?:bool, ManifestName?:string, ProgramDateTimeIntervalSeconds?:int, RepeatExtXKey?:bool, StreamSelection?:array{MaxVideoBitsPerSecond?:int, MinVideoBitsPerSecond?:int, StreamOrder?:"ORIGINAL"|"VIDEO_BITRATE_ASCENDING"|"VIDEO_BITRATE_DESCENDING"}}>, IncludeEncoderConfigurationInSegments?:bool, SegmentDurationSeconds?:int}, CreatedAt?:string, DashPackage?:array{DashManifests:array<array{ManifestLayout?:"FULL"|"COMPACT", ManifestName?:string, MinBufferTimeSeconds?:int, Profile?:"NONE"|"HBBTV_1_5", ScteMarkersSource?:"SEGMENTS"|"MANIFEST", StreamSelection?:array{MaxVideoBitsPerSecond?:int, MinVideoBitsPerSecond?:int, StreamOrder?:"ORIGINAL"|"VIDEO_BITRATE_ASCENDING"|"VIDEO_BITRATE_DESCENDING"}}>, Encryption?:array{SpekeKeyProvider:array{EncryptionContractConfiguration?:array{PresetSpeke20Audio:"PRESET-AUDIO-1"|"PRESET-AUDIO-2"|"PRESET-AUDIO-3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET-VIDEO-1"|"PRESET-VIDEO-2"|"PRESET-VIDEO-3"|"PRESET-VIDEO-4"|"PRESET-VIDEO-5"|"PRESET-VIDEO-6"|"PRESET-VIDEO-7"|"PRESET-VIDEO-8"|"SHARED"|"UNENCRYPTED"}, RoleArn:string, SystemIds:array<string>, Url:string}}, IncludeEncoderConfigurationInSegments?:bool, IncludeIframeOnlyStream?:bool, PeriodTriggers?:array<"ADS">, SegmentDurationSeconds?:int, SegmentTemplateFormat?:"NUMBER_WITH_TIMELINE"|"TIME_WITH_TIMELINE"|"NUMBER_WITH_DURATION"}, HlsPackage?:array{Encryption?:array{ConstantInitializationVector?:string, EncryptionMethod?:"AES_128"|"SAMPLE_AES", SpekeKeyProvider:array{EncryptionContractConfiguration?:array{PresetSpeke20Audio:"PRESET-AUDIO-1"|"PRESET-AUDIO-2"|"PRESET-AUDIO-3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET-VIDEO-1"|"PRESET-VIDEO-2"|"PRESET-VIDEO-3"|"PRESET-VIDEO-4"|"PRESET-VIDEO-5"|"PRESET-VIDEO-6"|"PRESET-VIDEO-7"|"PRESET-VIDEO-8"|"SHARED"|"UNENCRYPTED"}, RoleArn:string, SystemIds:array<string>, Url:string}}, HlsManifests:array<array{AdMarkers?:"NONE"|"SCTE35_ENHANCED"|"PASSTHROUGH", IncludeIframeOnlyStream?:bool, ManifestName?:string, ProgramDateTimeIntervalSeconds?:int, RepeatExtXKey?:bool, StreamSelection?:array{MaxVideoBitsPerSecond?:int, MinVideoBitsPerSecond?:int, StreamOrder?:"ORIGINAL"|"VIDEO_BITRATE_ASCENDING"|"VIDEO_BITRATE_DESCENDING"}}>, IncludeDvbSubtitles?:bool, SegmentDurationSeconds?:int, UseAudioRenditionGroup?:bool}, Id?:string, MssPackage?:array{Encryption?:array{SpekeKeyProvider:array{EncryptionContractConfiguration?:array{PresetSpeke20Audio:"PRESET-AUDIO-1"|"PRESET-AUDIO-2"|"PRESET-AUDIO-3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET-VIDEO-1"|"PRESET-VIDEO-2"|"PRESET-VIDEO-3"|"PRESET-VIDEO-4"|"PRESET-VIDEO-5"|"PRESET-VIDEO-6"|"PRESET-VIDEO-7"|"PRESET-VIDEO-8"|"SHARED"|"UNENCRYPTED"}, RoleArn:string, SystemIds:array<string>, Url:string}}, MssManifests:array<array{ManifestName?:string, StreamSelection?:array{MaxVideoBitsPerSecond?:int, MinVideoBitsPerSecond?:int, StreamOrder?:"ORIGINAL"|"VIDEO_BITRATE_ASCENDING"|"VIDEO_BITRATE_DESCENDING"}}>, SegmentDurationSeconds?:int}, PackagingGroupId?:string, Tags?:array<string, string>}>
     */
    public function createPackagingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Authorization?:array{CdnIdentifierSecret:string, SecretsRoleArn:string}, EgressAccessLogs?:array{LogGroupName?:string}, Id:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Arn?:string, Authorization?:array{CdnIdentifierSecret:string, SecretsRoleArn:string}, CreatedAt?:string, DomainName?:string, EgressAccessLogs?:array{LogGroupName?:string}, Id?:string, Tags?:array<string, string>}>
     */
    public function createPackagingGroup(array $args): \AWS\Result { }

    /**
     * @param array{Authorization?:array{CdnIdentifierSecret:string, SecretsRoleArn:string}, EgressAccessLogs?:array{LogGroupName?:string}, Id:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Authorization?:array{CdnIdentifierSecret:string, SecretsRoleArn:string}, CreatedAt?:string, DomainName?:string, EgressAccessLogs?:array{LogGroupName?:string}, Id?:string, Tags?:array<string, string>}>
     */
    public function createPackagingGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAsset(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAssetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deletePackagingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deletePackagingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deletePackagingGroup(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deletePackagingGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{Arn?:string, CreatedAt?:string, EgressEndpoints?:array<array{PackagingConfigurationId?:string, Status?:string, Url?:string}>, Id?:string, PackagingGroupId?:string, ResourceId?:string, SourceArn?:string, SourceRoleArn?:string, Tags?:array<string, string>}>
     */
    public function describeAsset(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreatedAt?:string, EgressEndpoints?:array<array{PackagingConfigurationId?:string, Status?:string, Url?:string}>, Id?:string, PackagingGroupId?:string, ResourceId?:string, SourceArn?:string, SourceRoleArn?:string, Tags?:array<string, string>}>
     */
    public function describeAssetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{Arn?:string, CmafPackage?:array{Encryption?:array{ConstantInitializationVector?:string, SpekeKeyProvider:array{EncryptionContractConfiguration?:array{PresetSpeke20Audio:"PRESET-AUDIO-1"|"PRESET-AUDIO-2"|"PRESET-AUDIO-3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET-VIDEO-1"|"PRESET-VIDEO-2"|"PRESET-VIDEO-3"|"PRESET-VIDEO-4"|"PRESET-VIDEO-5"|"PRESET-VIDEO-6"|"PRESET-VIDEO-7"|"PRESET-VIDEO-8"|"SHARED"|"UNENCRYPTED"}, RoleArn:string, SystemIds:array<string>, Url:string}}, HlsManifests:array<array{AdMarkers?:"NONE"|"SCTE35_ENHANCED"|"PASSTHROUGH", IncludeIframeOnlyStream?:bool, ManifestName?:string, ProgramDateTimeIntervalSeconds?:int, RepeatExtXKey?:bool, StreamSelection?:array{MaxVideoBitsPerSecond?:int, MinVideoBitsPerSecond?:int, StreamOrder?:"ORIGINAL"|"VIDEO_BITRATE_ASCENDING"|"VIDEO_BITRATE_DESCENDING"}}>, IncludeEncoderConfigurationInSegments?:bool, SegmentDurationSeconds?:int}, CreatedAt?:string, DashPackage?:array{DashManifests:array<array{ManifestLayout?:"FULL"|"COMPACT", ManifestName?:string, MinBufferTimeSeconds?:int, Profile?:"NONE"|"HBBTV_1_5", ScteMarkersSource?:"SEGMENTS"|"MANIFEST", StreamSelection?:array{MaxVideoBitsPerSecond?:int, MinVideoBitsPerSecond?:int, StreamOrder?:"ORIGINAL"|"VIDEO_BITRATE_ASCENDING"|"VIDEO_BITRATE_DESCENDING"}}>, Encryption?:array{SpekeKeyProvider:array{EncryptionContractConfiguration?:array{PresetSpeke20Audio:"PRESET-AUDIO-1"|"PRESET-AUDIO-2"|"PRESET-AUDIO-3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET-VIDEO-1"|"PRESET-VIDEO-2"|"PRESET-VIDEO-3"|"PRESET-VIDEO-4"|"PRESET-VIDEO-5"|"PRESET-VIDEO-6"|"PRESET-VIDEO-7"|"PRESET-VIDEO-8"|"SHARED"|"UNENCRYPTED"}, RoleArn:string, SystemIds:array<string>, Url:string}}, IncludeEncoderConfigurationInSegments?:bool, IncludeIframeOnlyStream?:bool, PeriodTriggers?:array<"ADS">, SegmentDurationSeconds?:int, SegmentTemplateFormat?:"NUMBER_WITH_TIMELINE"|"TIME_WITH_TIMELINE"|"NUMBER_WITH_DURATION"}, HlsPackage?:array{Encryption?:array{ConstantInitializationVector?:string, EncryptionMethod?:"AES_128"|"SAMPLE_AES", SpekeKeyProvider:array{EncryptionContractConfiguration?:array{PresetSpeke20Audio:"PRESET-AUDIO-1"|"PRESET-AUDIO-2"|"PRESET-AUDIO-3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET-VIDEO-1"|"PRESET-VIDEO-2"|"PRESET-VIDEO-3"|"PRESET-VIDEO-4"|"PRESET-VIDEO-5"|"PRESET-VIDEO-6"|"PRESET-VIDEO-7"|"PRESET-VIDEO-8"|"SHARED"|"UNENCRYPTED"}, RoleArn:string, SystemIds:array<string>, Url:string}}, HlsManifests:array<array{AdMarkers?:"NONE"|"SCTE35_ENHANCED"|"PASSTHROUGH", IncludeIframeOnlyStream?:bool, ManifestName?:string, ProgramDateTimeIntervalSeconds?:int, RepeatExtXKey?:bool, StreamSelection?:array{MaxVideoBitsPerSecond?:int, MinVideoBitsPerSecond?:int, StreamOrder?:"ORIGINAL"|"VIDEO_BITRATE_ASCENDING"|"VIDEO_BITRATE_DESCENDING"}}>, IncludeDvbSubtitles?:bool, SegmentDurationSeconds?:int, UseAudioRenditionGroup?:bool}, Id?:string, MssPackage?:array{Encryption?:array{SpekeKeyProvider:array{EncryptionContractConfiguration?:array{PresetSpeke20Audio:"PRESET-AUDIO-1"|"PRESET-AUDIO-2"|"PRESET-AUDIO-3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET-VIDEO-1"|"PRESET-VIDEO-2"|"PRESET-VIDEO-3"|"PRESET-VIDEO-4"|"PRESET-VIDEO-5"|"PRESET-VIDEO-6"|"PRESET-VIDEO-7"|"PRESET-VIDEO-8"|"SHARED"|"UNENCRYPTED"}, RoleArn:string, SystemIds:array<string>, Url:string}}, MssManifests:array<array{ManifestName?:string, StreamSelection?:array{MaxVideoBitsPerSecond?:int, MinVideoBitsPerSecond?:int, StreamOrder?:"ORIGINAL"|"VIDEO_BITRATE_ASCENDING"|"VIDEO_BITRATE_DESCENDING"}}>, SegmentDurationSeconds?:int}, PackagingGroupId?:string, Tags?:array<string, string>}>
     */
    public function describePackagingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CmafPackage?:array{Encryption?:array{ConstantInitializationVector?:string, SpekeKeyProvider:array{EncryptionContractConfiguration?:array{PresetSpeke20Audio:"PRESET-AUDIO-1"|"PRESET-AUDIO-2"|"PRESET-AUDIO-3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET-VIDEO-1"|"PRESET-VIDEO-2"|"PRESET-VIDEO-3"|"PRESET-VIDEO-4"|"PRESET-VIDEO-5"|"PRESET-VIDEO-6"|"PRESET-VIDEO-7"|"PRESET-VIDEO-8"|"SHARED"|"UNENCRYPTED"}, RoleArn:string, SystemIds:array<string>, Url:string}}, HlsManifests:array<array{AdMarkers?:"NONE"|"SCTE35_ENHANCED"|"PASSTHROUGH", IncludeIframeOnlyStream?:bool, ManifestName?:string, ProgramDateTimeIntervalSeconds?:int, RepeatExtXKey?:bool, StreamSelection?:array{MaxVideoBitsPerSecond?:int, MinVideoBitsPerSecond?:int, StreamOrder?:"ORIGINAL"|"VIDEO_BITRATE_ASCENDING"|"VIDEO_BITRATE_DESCENDING"}}>, IncludeEncoderConfigurationInSegments?:bool, SegmentDurationSeconds?:int}, CreatedAt?:string, DashPackage?:array{DashManifests:array<array{ManifestLayout?:"FULL"|"COMPACT", ManifestName?:string, MinBufferTimeSeconds?:int, Profile?:"NONE"|"HBBTV_1_5", ScteMarkersSource?:"SEGMENTS"|"MANIFEST", StreamSelection?:array{MaxVideoBitsPerSecond?:int, MinVideoBitsPerSecond?:int, StreamOrder?:"ORIGINAL"|"VIDEO_BITRATE_ASCENDING"|"VIDEO_BITRATE_DESCENDING"}}>, Encryption?:array{SpekeKeyProvider:array{EncryptionContractConfiguration?:array{PresetSpeke20Audio:"PRESET-AUDIO-1"|"PRESET-AUDIO-2"|"PRESET-AUDIO-3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET-VIDEO-1"|"PRESET-VIDEO-2"|"PRESET-VIDEO-3"|"PRESET-VIDEO-4"|"PRESET-VIDEO-5"|"PRESET-VIDEO-6"|"PRESET-VIDEO-7"|"PRESET-VIDEO-8"|"SHARED"|"UNENCRYPTED"}, RoleArn:string, SystemIds:array<string>, Url:string}}, IncludeEncoderConfigurationInSegments?:bool, IncludeIframeOnlyStream?:bool, PeriodTriggers?:array<"ADS">, SegmentDurationSeconds?:int, SegmentTemplateFormat?:"NUMBER_WITH_TIMELINE"|"TIME_WITH_TIMELINE"|"NUMBER_WITH_DURATION"}, HlsPackage?:array{Encryption?:array{ConstantInitializationVector?:string, EncryptionMethod?:"AES_128"|"SAMPLE_AES", SpekeKeyProvider:array{EncryptionContractConfiguration?:array{PresetSpeke20Audio:"PRESET-AUDIO-1"|"PRESET-AUDIO-2"|"PRESET-AUDIO-3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET-VIDEO-1"|"PRESET-VIDEO-2"|"PRESET-VIDEO-3"|"PRESET-VIDEO-4"|"PRESET-VIDEO-5"|"PRESET-VIDEO-6"|"PRESET-VIDEO-7"|"PRESET-VIDEO-8"|"SHARED"|"UNENCRYPTED"}, RoleArn:string, SystemIds:array<string>, Url:string}}, HlsManifests:array<array{AdMarkers?:"NONE"|"SCTE35_ENHANCED"|"PASSTHROUGH", IncludeIframeOnlyStream?:bool, ManifestName?:string, ProgramDateTimeIntervalSeconds?:int, RepeatExtXKey?:bool, StreamSelection?:array{MaxVideoBitsPerSecond?:int, MinVideoBitsPerSecond?:int, StreamOrder?:"ORIGINAL"|"VIDEO_BITRATE_ASCENDING"|"VIDEO_BITRATE_DESCENDING"}}>, IncludeDvbSubtitles?:bool, SegmentDurationSeconds?:int, UseAudioRenditionGroup?:bool}, Id?:string, MssPackage?:array{Encryption?:array{SpekeKeyProvider:array{EncryptionContractConfiguration?:array{PresetSpeke20Audio:"PRESET-AUDIO-1"|"PRESET-AUDIO-2"|"PRESET-AUDIO-3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET-VIDEO-1"|"PRESET-VIDEO-2"|"PRESET-VIDEO-3"|"PRESET-VIDEO-4"|"PRESET-VIDEO-5"|"PRESET-VIDEO-6"|"PRESET-VIDEO-7"|"PRESET-VIDEO-8"|"SHARED"|"UNENCRYPTED"}, RoleArn:string, SystemIds:array<string>, Url:string}}, MssManifests:array<array{ManifestName?:string, StreamSelection?:array{MaxVideoBitsPerSecond?:int, MinVideoBitsPerSecond?:int, StreamOrder?:"ORIGINAL"|"VIDEO_BITRATE_ASCENDING"|"VIDEO_BITRATE_DESCENDING"}}>, SegmentDurationSeconds?:int}, PackagingGroupId?:string, Tags?:array<string, string>}>
     */
    public function describePackagingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{ApproximateAssetCount?:int, Arn?:string, Authorization?:array{CdnIdentifierSecret:string, SecretsRoleArn:string}, CreatedAt?:string, DomainName?:string, EgressAccessLogs?:array{LogGroupName?:string}, Id?:string, Tags?:array<string, string>}>
     */
    public function describePackagingGroup(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApproximateAssetCount?:int, Arn?:string, Authorization?:array{CdnIdentifierSecret:string, SecretsRoleArn:string}, CreatedAt?:string, DomainName?:string, EgressAccessLogs?:array{LogGroupName?:string}, Id?:string, Tags?:array<string, string>}>
     */
    public function describePackagingGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, PackagingGroupId?:string} $args
     * @return \AWS\Result<array{Assets?:array<array{Arn?:string, CreatedAt?:string, Id?:string, PackagingGroupId?:string, ResourceId?:string, SourceArn?:string, SourceRoleArn?:string, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listAssets(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, PackagingGroupId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Assets?:array<array{Arn?:string, CreatedAt?:string, Id?:string, PackagingGroupId?:string, ResourceId?:string, SourceArn?:string, SourceRoleArn?:string, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listAssetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, PackagingGroupId?:string} $args
     * @return \AWS\Result<array{NextToken?:string, PackagingConfigurations?:array<array{Arn?:string, CmafPackage?:array{Encryption?:array{ConstantInitializationVector?:string, SpekeKeyProvider:array{EncryptionContractConfiguration?:array{PresetSpeke20Audio:"PRESET-AUDIO-1"|"PRESET-AUDIO-2"|"PRESET-AUDIO-3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET-VIDEO-1"|"PRESET-VIDEO-2"|"PRESET-VIDEO-3"|"PRESET-VIDEO-4"|"PRESET-VIDEO-5"|"PRESET-VIDEO-6"|"PRESET-VIDEO-7"|"PRESET-VIDEO-8"|"SHARED"|"UNENCRYPTED"}, RoleArn:string, SystemIds:array<string>, Url:string}}, HlsManifests:array<array{AdMarkers?:"NONE"|"SCTE35_ENHANCED"|"PASSTHROUGH", IncludeIframeOnlyStream?:bool, ManifestName?:string, ProgramDateTimeIntervalSeconds?:int, RepeatExtXKey?:bool, StreamSelection?:array{MaxVideoBitsPerSecond?:int, MinVideoBitsPerSecond?:int, StreamOrder?:"ORIGINAL"|"VIDEO_BITRATE_ASCENDING"|"VIDEO_BITRATE_DESCENDING"}}>, IncludeEncoderConfigurationInSegments?:bool, SegmentDurationSeconds?:int}, CreatedAt?:string, DashPackage?:array{DashManifests:array<array{ManifestLayout?:"FULL"|"COMPACT", ManifestName?:string, MinBufferTimeSeconds?:int, Profile?:"NONE"|"HBBTV_1_5", ScteMarkersSource?:"SEGMENTS"|"MANIFEST", StreamSelection?:array{MaxVideoBitsPerSecond?:int, MinVideoBitsPerSecond?:int, StreamOrder?:"ORIGINAL"|"VIDEO_BITRATE_ASCENDING"|"VIDEO_BITRATE_DESCENDING"}}>, Encryption?:array{SpekeKeyProvider:array{EncryptionContractConfiguration?:array{PresetSpeke20Audio:"PRESET-AUDIO-1"|"PRESET-AUDIO-2"|"PRESET-AUDIO-3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET-VIDEO-1"|"PRESET-VIDEO-2"|"PRESET-VIDEO-3"|"PRESET-VIDEO-4"|"PRESET-VIDEO-5"|"PRESET-VIDEO-6"|"PRESET-VIDEO-7"|"PRESET-VIDEO-8"|"SHARED"|"UNENCRYPTED"}, RoleArn:string, SystemIds:array<string>, Url:string}}, IncludeEncoderConfigurationInSegments?:bool, IncludeIframeOnlyStream?:bool, PeriodTriggers?:array<"ADS">, SegmentDurationSeconds?:int, SegmentTemplateFormat?:"NUMBER_WITH_TIMELINE"|"TIME_WITH_TIMELINE"|"NUMBER_WITH_DURATION"}, HlsPackage?:array{Encryption?:array{ConstantInitializationVector?:string, EncryptionMethod?:"AES_128"|"SAMPLE_AES", SpekeKeyProvider:array{EncryptionContractConfiguration?:array{PresetSpeke20Audio:"PRESET-AUDIO-1"|"PRESET-AUDIO-2"|"PRESET-AUDIO-3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET-VIDEO-1"|"PRESET-VIDEO-2"|"PRESET-VIDEO-3"|"PRESET-VIDEO-4"|"PRESET-VIDEO-5"|"PRESET-VIDEO-6"|"PRESET-VIDEO-7"|"PRESET-VIDEO-8"|"SHARED"|"UNENCRYPTED"}, RoleArn:string, SystemIds:array<string>, Url:string}}, HlsManifests:array<array{AdMarkers?:"NONE"|"SCTE35_ENHANCED"|"PASSTHROUGH", IncludeIframeOnlyStream?:bool, ManifestName?:string, ProgramDateTimeIntervalSeconds?:int, RepeatExtXKey?:bool, StreamSelection?:array{MaxVideoBitsPerSecond?:int, MinVideoBitsPerSecond?:int, StreamOrder?:"ORIGINAL"|"VIDEO_BITRATE_ASCENDING"|"VIDEO_BITRATE_DESCENDING"}}>, IncludeDvbSubtitles?:bool, SegmentDurationSeconds?:int, UseAudioRenditionGroup?:bool}, Id?:string, MssPackage?:array{Encryption?:array{SpekeKeyProvider:array{EncryptionContractConfiguration?:array{PresetSpeke20Audio:"PRESET-AUDIO-1"|"PRESET-AUDIO-2"|"PRESET-AUDIO-3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET-VIDEO-1"|"PRESET-VIDEO-2"|"PRESET-VIDEO-3"|"PRESET-VIDEO-4"|"PRESET-VIDEO-5"|"PRESET-VIDEO-6"|"PRESET-VIDEO-7"|"PRESET-VIDEO-8"|"SHARED"|"UNENCRYPTED"}, RoleArn:string, SystemIds:array<string>, Url:string}}, MssManifests:array<array{ManifestName?:string, StreamSelection?:array{MaxVideoBitsPerSecond?:int, MinVideoBitsPerSecond?:int, StreamOrder?:"ORIGINAL"|"VIDEO_BITRATE_ASCENDING"|"VIDEO_BITRATE_DESCENDING"}}>, SegmentDurationSeconds?:int}, PackagingGroupId?:string, Tags?:array<string, string>}>}>
     */
    public function listPackagingConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, PackagingGroupId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, PackagingConfigurations?:array<array{Arn?:string, CmafPackage?:array{Encryption?:array{ConstantInitializationVector?:string, SpekeKeyProvider:array{EncryptionContractConfiguration?:array{PresetSpeke20Audio:"PRESET-AUDIO-1"|"PRESET-AUDIO-2"|"PRESET-AUDIO-3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET-VIDEO-1"|"PRESET-VIDEO-2"|"PRESET-VIDEO-3"|"PRESET-VIDEO-4"|"PRESET-VIDEO-5"|"PRESET-VIDEO-6"|"PRESET-VIDEO-7"|"PRESET-VIDEO-8"|"SHARED"|"UNENCRYPTED"}, RoleArn:string, SystemIds:array<string>, Url:string}}, HlsManifests:array<array{AdMarkers?:"NONE"|"SCTE35_ENHANCED"|"PASSTHROUGH", IncludeIframeOnlyStream?:bool, ManifestName?:string, ProgramDateTimeIntervalSeconds?:int, RepeatExtXKey?:bool, StreamSelection?:array{MaxVideoBitsPerSecond?:int, MinVideoBitsPerSecond?:int, StreamOrder?:"ORIGINAL"|"VIDEO_BITRATE_ASCENDING"|"VIDEO_BITRATE_DESCENDING"}}>, IncludeEncoderConfigurationInSegments?:bool, SegmentDurationSeconds?:int}, CreatedAt?:string, DashPackage?:array{DashManifests:array<array{ManifestLayout?:"FULL"|"COMPACT", ManifestName?:string, MinBufferTimeSeconds?:int, Profile?:"NONE"|"HBBTV_1_5", ScteMarkersSource?:"SEGMENTS"|"MANIFEST", StreamSelection?:array{MaxVideoBitsPerSecond?:int, MinVideoBitsPerSecond?:int, StreamOrder?:"ORIGINAL"|"VIDEO_BITRATE_ASCENDING"|"VIDEO_BITRATE_DESCENDING"}}>, Encryption?:array{SpekeKeyProvider:array{EncryptionContractConfiguration?:array{PresetSpeke20Audio:"PRESET-AUDIO-1"|"PRESET-AUDIO-2"|"PRESET-AUDIO-3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET-VIDEO-1"|"PRESET-VIDEO-2"|"PRESET-VIDEO-3"|"PRESET-VIDEO-4"|"PRESET-VIDEO-5"|"PRESET-VIDEO-6"|"PRESET-VIDEO-7"|"PRESET-VIDEO-8"|"SHARED"|"UNENCRYPTED"}, RoleArn:string, SystemIds:array<string>, Url:string}}, IncludeEncoderConfigurationInSegments?:bool, IncludeIframeOnlyStream?:bool, PeriodTriggers?:array<"ADS">, SegmentDurationSeconds?:int, SegmentTemplateFormat?:"NUMBER_WITH_TIMELINE"|"TIME_WITH_TIMELINE"|"NUMBER_WITH_DURATION"}, HlsPackage?:array{Encryption?:array{ConstantInitializationVector?:string, EncryptionMethod?:"AES_128"|"SAMPLE_AES", SpekeKeyProvider:array{EncryptionContractConfiguration?:array{PresetSpeke20Audio:"PRESET-AUDIO-1"|"PRESET-AUDIO-2"|"PRESET-AUDIO-3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET-VIDEO-1"|"PRESET-VIDEO-2"|"PRESET-VIDEO-3"|"PRESET-VIDEO-4"|"PRESET-VIDEO-5"|"PRESET-VIDEO-6"|"PRESET-VIDEO-7"|"PRESET-VIDEO-8"|"SHARED"|"UNENCRYPTED"}, RoleArn:string, SystemIds:array<string>, Url:string}}, HlsManifests:array<array{AdMarkers?:"NONE"|"SCTE35_ENHANCED"|"PASSTHROUGH", IncludeIframeOnlyStream?:bool, ManifestName?:string, ProgramDateTimeIntervalSeconds?:int, RepeatExtXKey?:bool, StreamSelection?:array{MaxVideoBitsPerSecond?:int, MinVideoBitsPerSecond?:int, StreamOrder?:"ORIGINAL"|"VIDEO_BITRATE_ASCENDING"|"VIDEO_BITRATE_DESCENDING"}}>, IncludeDvbSubtitles?:bool, SegmentDurationSeconds?:int, UseAudioRenditionGroup?:bool}, Id?:string, MssPackage?:array{Encryption?:array{SpekeKeyProvider:array{EncryptionContractConfiguration?:array{PresetSpeke20Audio:"PRESET-AUDIO-1"|"PRESET-AUDIO-2"|"PRESET-AUDIO-3"|"SHARED"|"UNENCRYPTED", PresetSpeke20Video:"PRESET-VIDEO-1"|"PRESET-VIDEO-2"|"PRESET-VIDEO-3"|"PRESET-VIDEO-4"|"PRESET-VIDEO-5"|"PRESET-VIDEO-6"|"PRESET-VIDEO-7"|"PRESET-VIDEO-8"|"SHARED"|"UNENCRYPTED"}, RoleArn:string, SystemIds:array<string>, Url:string}}, MssManifests:array<array{ManifestName?:string, StreamSelection?:array{MaxVideoBitsPerSecond?:int, MinVideoBitsPerSecond?:int, StreamOrder?:"ORIGINAL"|"VIDEO_BITRATE_ASCENDING"|"VIDEO_BITRATE_DESCENDING"}}>, SegmentDurationSeconds?:int}, PackagingGroupId?:string, Tags?:array<string, string>}>}>
     */
    public function listPackagingConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, PackagingGroups?:array<array{ApproximateAssetCount?:int, Arn?:string, Authorization?:array{CdnIdentifierSecret:string, SecretsRoleArn:string}, CreatedAt?:string, DomainName?:string, EgressAccessLogs?:array{LogGroupName?:string}, Id?:string, Tags?:array<string, string>}>}>
     */
    public function listPackagingGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, PackagingGroups?:array<array{ApproximateAssetCount?:int, Arn?:string, Authorization?:array{CdnIdentifierSecret:string, SecretsRoleArn:string}, CreatedAt?:string, DomainName?:string, EgressAccessLogs?:array{LogGroupName?:string}, Id?:string, Tags?:array<string, string>}>}>
     */
    public function listPackagingGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{Authorization?:array{CdnIdentifierSecret:string, SecretsRoleArn:string}, Id:string} $args
     * @return \AWS\Result<array{ApproximateAssetCount?:int, Arn?:string, Authorization?:array{CdnIdentifierSecret:string, SecretsRoleArn:string}, CreatedAt?:string, DomainName?:string, EgressAccessLogs?:array{LogGroupName?:string}, Id?:string, Tags?:array<string, string>}>
     */
    public function updatePackagingGroup(array $args): \AWS\Result { }

    /**
     * @param array{Authorization?:array{CdnIdentifierSecret:string, SecretsRoleArn:string}, Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApproximateAssetCount?:int, Arn?:string, Authorization?:array{CdnIdentifierSecret:string, SecretsRoleArn:string}, CreatedAt?:string, DomainName?:string, EgressAccessLogs?:array{LogGroupName?:string}, Id?:string, Tags?:array<string, string>}>
     */
    public function updatePackagingGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
