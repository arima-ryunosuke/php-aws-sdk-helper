<?php
namespace AWS\IVS;

class IVSClient
{
    /**
     * @param array{arns:array<string>} $args
     * @return \AWS\Result<array{channels?:array<array{arn?:string, authorized?:bool, containerFormat?:"TS"|"FRAGMENTED_MP4", ingestEndpoint?:string, insecureIngest?:bool, latencyMode?:"NORMAL"|"LOW", multitrackInputConfiguration?:array{enabled?:bool, maximumResolution?:"SD"|"HD"|"FULL_HD", policy?:"ALLOW"|"REQUIRE"}, name?:string, playbackRestrictionPolicyArn?:string, playbackUrl?:string, preset?:"HIGHER_BANDWIDTH_DELIVERY"|"CONSTRAINED_BANDWIDTH_DELIVERY", recordingConfigurationArn?:string, srt?:array{endpoint?:string, passphrase?:string}, tags?:array<string, string>, type?:"BASIC"|"STANDARD"|"ADVANCED_SD"|"ADVANCED_HD"}>, errors?:array<array{arn?:string, code?:string, message?:string}>}>
     */
    public function batchGetChannel(array $args): \AWS\Result { }

    /**
     * @param array{arns:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{channels?:array<array{arn?:string, authorized?:bool, containerFormat?:"TS"|"FRAGMENTED_MP4", ingestEndpoint?:string, insecureIngest?:bool, latencyMode?:"NORMAL"|"LOW", multitrackInputConfiguration?:array{enabled?:bool, maximumResolution?:"SD"|"HD"|"FULL_HD", policy?:"ALLOW"|"REQUIRE"}, name?:string, playbackRestrictionPolicyArn?:string, playbackUrl?:string, preset?:"HIGHER_BANDWIDTH_DELIVERY"|"CONSTRAINED_BANDWIDTH_DELIVERY", recordingConfigurationArn?:string, srt?:array{endpoint?:string, passphrase?:string}, tags?:array<string, string>, type?:"BASIC"|"STANDARD"|"ADVANCED_SD"|"ADVANCED_HD"}>, errors?:array<array{arn?:string, code?:string, message?:string}>}>
     */
    public function batchGetChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arns:array<string>} $args
     * @return \AWS\Result<array{errors?:array<array{arn?:string, code?:string, message?:string}>, streamKeys?:array<array{arn?:string, channelArn?:string, tags?:array<string, string>, value?:string}>}>
     */
    public function batchGetStreamKey(array $args): \AWS\Result { }

    /**
     * @param array{arns:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{errors?:array<array{arn?:string, code?:string, message?:string}>, streamKeys?:array<array{arn?:string, channelArn?:string, tags?:array<string, string>, value?:string}>}>
     */
    public function batchGetStreamKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{viewerSessions:array<array{channelArn:string, viewerId:string, viewerSessionVersionsLessThanOrEqualTo?:int}>} $args
     * @return \AWS\Result<array{errors?:array<array{channelArn:string, code?:string, message?:string, viewerId:string}>}>
     */
    public function batchStartViewerSessionRevocation(array $args): \AWS\Result { }

    /**
     * @param array{viewerSessions:array<array{channelArn:string, viewerId:string, viewerSessionVersionsLessThanOrEqualTo?:int}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{errors?:array<array{channelArn:string, code?:string, message?:string, viewerId:string}>}>
     */
    public function batchStartViewerSessionRevocationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{authorized?:bool, containerFormat?:"TS"|"FRAGMENTED_MP4", insecureIngest?:bool, latencyMode?:"NORMAL"|"LOW", multitrackInputConfiguration?:array{enabled?:bool, maximumResolution?:"SD"|"HD"|"FULL_HD", policy?:"ALLOW"|"REQUIRE"}, name?:string, playbackRestrictionPolicyArn?:string, preset?:"HIGHER_BANDWIDTH_DELIVERY"|"CONSTRAINED_BANDWIDTH_DELIVERY", recordingConfigurationArn?:string, tags?:array<string, string>, type?:"BASIC"|"STANDARD"|"ADVANCED_SD"|"ADVANCED_HD"} $args
     * @return \AWS\Result<array{channel?:array{arn?:string, authorized?:bool, containerFormat?:"TS"|"FRAGMENTED_MP4", ingestEndpoint?:string, insecureIngest?:bool, latencyMode?:"NORMAL"|"LOW", multitrackInputConfiguration?:array{enabled?:bool, maximumResolution?:"SD"|"HD"|"FULL_HD", policy?:"ALLOW"|"REQUIRE"}, name?:string, playbackRestrictionPolicyArn?:string, playbackUrl?:string, preset?:"HIGHER_BANDWIDTH_DELIVERY"|"CONSTRAINED_BANDWIDTH_DELIVERY", recordingConfigurationArn?:string, srt?:array{endpoint?:string, passphrase?:string}, tags?:array<string, string>, type?:"BASIC"|"STANDARD"|"ADVANCED_SD"|"ADVANCED_HD"}, streamKey?:array{arn?:string, channelArn?:string, tags?:array<string, string>, value?:string}}>
     */
    public function createChannel(array $args = []): \AWS\Result { }

    /**
     * @param array{authorized?:bool, containerFormat?:"TS"|"FRAGMENTED_MP4", insecureIngest?:bool, latencyMode?:"NORMAL"|"LOW", multitrackInputConfiguration?:array{enabled?:bool, maximumResolution?:"SD"|"HD"|"FULL_HD", policy?:"ALLOW"|"REQUIRE"}, name?:string, playbackRestrictionPolicyArn?:string, preset?:"HIGHER_BANDWIDTH_DELIVERY"|"CONSTRAINED_BANDWIDTH_DELIVERY", recordingConfigurationArn?:string, tags?:array<string, string>, type?:"BASIC"|"STANDARD"|"ADVANCED_SD"|"ADVANCED_HD"} $args
     * @return \GuzzleHttp\Promise\Promise<array{channel?:array{arn?:string, authorized?:bool, containerFormat?:"TS"|"FRAGMENTED_MP4", ingestEndpoint?:string, insecureIngest?:bool, latencyMode?:"NORMAL"|"LOW", multitrackInputConfiguration?:array{enabled?:bool, maximumResolution?:"SD"|"HD"|"FULL_HD", policy?:"ALLOW"|"REQUIRE"}, name?:string, playbackRestrictionPolicyArn?:string, playbackUrl?:string, preset?:"HIGHER_BANDWIDTH_DELIVERY"|"CONSTRAINED_BANDWIDTH_DELIVERY", recordingConfigurationArn?:string, srt?:array{endpoint?:string, passphrase?:string}, tags?:array<string, string>, type?:"BASIC"|"STANDARD"|"ADVANCED_SD"|"ADVANCED_HD"}, streamKey?:array{arn?:string, channelArn?:string, tags?:array<string, string>, value?:string}}>
     */
    public function createChannelAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{allowedCountries?:array<string>, allowedOrigins?:array<string>, enableStrictOriginEnforcement?:bool, name?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{playbackRestrictionPolicy?:array{allowedCountries:array<string>, allowedOrigins:array<string>, arn:string, enableStrictOriginEnforcement?:bool, name?:string, tags?:array<string, string>}}>
     */
    public function createPlaybackRestrictionPolicy(array $args = []): \AWS\Result { }

    /**
     * @param array{allowedCountries?:array<string>, allowedOrigins?:array<string>, enableStrictOriginEnforcement?:bool, name?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{playbackRestrictionPolicy?:array{allowedCountries:array<string>, allowedOrigins:array<string>, arn:string, enableStrictOriginEnforcement?:bool, name?:string, tags?:array<string, string>}}>
     */
    public function createPlaybackRestrictionPolicyAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{destinationConfiguration:array{s3?:array{bucketName:string}}, name?:string, recordingReconnectWindowSeconds?:int, renditionConfiguration?:array{renditionSelection?:"ALL"|"NONE"|"CUSTOM", renditions?:array<"SD"|"HD"|"FULL_HD"|"LOWEST_RESOLUTION">}, tags?:array<string, string>, thumbnailConfiguration?:array{recordingMode?:"DISABLED"|"INTERVAL", resolution?:"SD"|"HD"|"FULL_HD"|"LOWEST_RESOLUTION", storage?:array<"SEQUENTIAL"|"LATEST">, targetIntervalSeconds?:int}} $args
     * @return \AWS\Result<array{recordingConfiguration?:array{arn:string, destinationConfiguration:array{s3?:array{bucketName:string}}, name?:string, recordingReconnectWindowSeconds?:int, renditionConfiguration?:array{renditionSelection?:"ALL"|"NONE"|"CUSTOM", renditions?:array<"SD"|"HD"|"FULL_HD"|"LOWEST_RESOLUTION">}, state:"CREATING"|"CREATE_FAILED"|"ACTIVE", tags?:array<string, string>, thumbnailConfiguration?:array{recordingMode?:"DISABLED"|"INTERVAL", resolution?:"SD"|"HD"|"FULL_HD"|"LOWEST_RESOLUTION", storage?:array<"SEQUENTIAL"|"LATEST">, targetIntervalSeconds?:int}}}>
     */
    public function createRecordingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{destinationConfiguration:array{s3?:array{bucketName:string}}, name?:string, recordingReconnectWindowSeconds?:int, renditionConfiguration?:array{renditionSelection?:"ALL"|"NONE"|"CUSTOM", renditions?:array<"SD"|"HD"|"FULL_HD"|"LOWEST_RESOLUTION">}, tags?:array<string, string>, thumbnailConfiguration?:array{recordingMode?:"DISABLED"|"INTERVAL", resolution?:"SD"|"HD"|"FULL_HD"|"LOWEST_RESOLUTION", storage?:array<"SEQUENTIAL"|"LATEST">, targetIntervalSeconds?:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{recordingConfiguration?:array{arn:string, destinationConfiguration:array{s3?:array{bucketName:string}}, name?:string, recordingReconnectWindowSeconds?:int, renditionConfiguration?:array{renditionSelection?:"ALL"|"NONE"|"CUSTOM", renditions?:array<"SD"|"HD"|"FULL_HD"|"LOWEST_RESOLUTION">}, state:"CREATING"|"CREATE_FAILED"|"ACTIVE", tags?:array<string, string>, thumbnailConfiguration?:array{recordingMode?:"DISABLED"|"INTERVAL", resolution?:"SD"|"HD"|"FULL_HD"|"LOWEST_RESOLUTION", storage?:array<"SEQUENTIAL"|"LATEST">, targetIntervalSeconds?:int}}}>
     */
    public function createRecordingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{channelArn:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{streamKey?:array{arn?:string, channelArn?:string, tags?:array<string, string>, value?:string}}>
     */
    public function createStreamKey(array $args): \AWS\Result { }

    /**
     * @param array{channelArn:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{streamKey?:array{arn?:string, channelArn?:string, tags?:array<string, string>, value?:string}}>
     */
    public function createStreamKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteChannel(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deletePlaybackKeyPair(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deletePlaybackKeyPairAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<void>
     */
    public function deletePlaybackRestrictionPolicy(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deletePlaybackRestrictionPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteRecordingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteRecordingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteStreamKey(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteStreamKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{channel?:array{arn?:string, authorized?:bool, containerFormat?:"TS"|"FRAGMENTED_MP4", ingestEndpoint?:string, insecureIngest?:bool, latencyMode?:"NORMAL"|"LOW", multitrackInputConfiguration?:array{enabled?:bool, maximumResolution?:"SD"|"HD"|"FULL_HD", policy?:"ALLOW"|"REQUIRE"}, name?:string, playbackRestrictionPolicyArn?:string, playbackUrl?:string, preset?:"HIGHER_BANDWIDTH_DELIVERY"|"CONSTRAINED_BANDWIDTH_DELIVERY", recordingConfigurationArn?:string, srt?:array{endpoint?:string, passphrase?:string}, tags?:array<string, string>, type?:"BASIC"|"STANDARD"|"ADVANCED_SD"|"ADVANCED_HD"}}>
     */
    public function getChannel(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{channel?:array{arn?:string, authorized?:bool, containerFormat?:"TS"|"FRAGMENTED_MP4", ingestEndpoint?:string, insecureIngest?:bool, latencyMode?:"NORMAL"|"LOW", multitrackInputConfiguration?:array{enabled?:bool, maximumResolution?:"SD"|"HD"|"FULL_HD", policy?:"ALLOW"|"REQUIRE"}, name?:string, playbackRestrictionPolicyArn?:string, playbackUrl?:string, preset?:"HIGHER_BANDWIDTH_DELIVERY"|"CONSTRAINED_BANDWIDTH_DELIVERY", recordingConfigurationArn?:string, srt?:array{endpoint?:string, passphrase?:string}, tags?:array<string, string>, type?:"BASIC"|"STANDARD"|"ADVANCED_SD"|"ADVANCED_HD"}}>
     */
    public function getChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{keyPair?:array{arn?:string, fingerprint?:string, name?:string, tags?:array<string, string>}}>
     */
    public function getPlaybackKeyPair(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{keyPair?:array{arn?:string, fingerprint?:string, name?:string, tags?:array<string, string>}}>
     */
    public function getPlaybackKeyPairAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{playbackRestrictionPolicy?:array{allowedCountries:array<string>, allowedOrigins:array<string>, arn:string, enableStrictOriginEnforcement?:bool, name?:string, tags?:array<string, string>}}>
     */
    public function getPlaybackRestrictionPolicy(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{playbackRestrictionPolicy?:array{allowedCountries:array<string>, allowedOrigins:array<string>, arn:string, enableStrictOriginEnforcement?:bool, name?:string, tags?:array<string, string>}}>
     */
    public function getPlaybackRestrictionPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{recordingConfiguration?:array{arn:string, destinationConfiguration:array{s3?:array{bucketName:string}}, name?:string, recordingReconnectWindowSeconds?:int, renditionConfiguration?:array{renditionSelection?:"ALL"|"NONE"|"CUSTOM", renditions?:array<"SD"|"HD"|"FULL_HD"|"LOWEST_RESOLUTION">}, state:"CREATING"|"CREATE_FAILED"|"ACTIVE", tags?:array<string, string>, thumbnailConfiguration?:array{recordingMode?:"DISABLED"|"INTERVAL", resolution?:"SD"|"HD"|"FULL_HD"|"LOWEST_RESOLUTION", storage?:array<"SEQUENTIAL"|"LATEST">, targetIntervalSeconds?:int}}}>
     */
    public function getRecordingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{recordingConfiguration?:array{arn:string, destinationConfiguration:array{s3?:array{bucketName:string}}, name?:string, recordingReconnectWindowSeconds?:int, renditionConfiguration?:array{renditionSelection?:"ALL"|"NONE"|"CUSTOM", renditions?:array<"SD"|"HD"|"FULL_HD"|"LOWEST_RESOLUTION">}, state:"CREATING"|"CREATE_FAILED"|"ACTIVE", tags?:array<string, string>, thumbnailConfiguration?:array{recordingMode?:"DISABLED"|"INTERVAL", resolution?:"SD"|"HD"|"FULL_HD"|"LOWEST_RESOLUTION", storage?:array<"SEQUENTIAL"|"LATEST">, targetIntervalSeconds?:int}}}>
     */
    public function getRecordingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{channelArn:string} $args
     * @return \AWS\Result<array{stream?:array{channelArn?:string, health?:"HEALTHY"|"STARVING"|"UNKNOWN", playbackUrl?:string, startTime?:int|string|\DateTimeInterface, state?:"LIVE"|"OFFLINE", streamId?:string, viewerCount?:int}}>
     */
    public function getStream(array $args): \AWS\Result { }

    /**
     * @param array{channelArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{stream?:array{channelArn?:string, health?:"HEALTHY"|"STARVING"|"UNKNOWN", playbackUrl?:string, startTime?:int|string|\DateTimeInterface, state?:"LIVE"|"OFFLINE", streamId?:string, viewerCount?:int}}>
     */
    public function getStreamAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{streamKey?:array{arn?:string, channelArn?:string, tags?:array<string, string>, value?:string}}>
     */
    public function getStreamKey(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{streamKey?:array{arn?:string, channelArn?:string, tags?:array<string, string>, value?:string}}>
     */
    public function getStreamKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{channelArn:string, streamId?:string} $args
     * @return \AWS\Result<array{streamSession?:array{channel?:array{arn?:string, authorized?:bool, containerFormat?:"TS"|"FRAGMENTED_MP4", ingestEndpoint?:string, insecureIngest?:bool, latencyMode?:"NORMAL"|"LOW", multitrackInputConfiguration?:array{enabled?:bool, maximumResolution?:"SD"|"HD"|"FULL_HD", policy?:"ALLOW"|"REQUIRE"}, name?:string, playbackRestrictionPolicyArn?:string, playbackUrl?:string, preset?:"HIGHER_BANDWIDTH_DELIVERY"|"CONSTRAINED_BANDWIDTH_DELIVERY", recordingConfigurationArn?:string, srt?:array{endpoint?:string, passphrase?:string}, tags?:array<string, string>, type?:"BASIC"|"STANDARD"|"ADVANCED_SD"|"ADVANCED_HD"}, endTime?:int|string|\DateTimeInterface, ingestConfiguration?:array{audio?:array{channels?:int, codec?:string, sampleRate?:int, targetBitrate?:int, track?:string}, video?:array{avcLevel?:string, avcProfile?:string, codec?:string, encoder?:string, level?:string, profile?:string, targetBitrate?:int, targetFramerate?:int, track?:string, videoHeight?:int, videoWidth?:int}}, ingestConfigurations?:array{audioConfigurations:array<array{channels?:int, codec?:string, sampleRate?:int, targetBitrate?:int, track?:string}>, videoConfigurations:array<array{avcLevel?:string, avcProfile?:string, codec?:string, encoder?:string, level?:string, profile?:string, targetBitrate?:int, targetFramerate?:int, track?:string, videoHeight?:int, videoWidth?:int}>}, recordingConfiguration?:array{arn:string, destinationConfiguration:array{s3?:array{bucketName:string}}, name?:string, recordingReconnectWindowSeconds?:int, renditionConfiguration?:array{renditionSelection?:"ALL"|"NONE"|"CUSTOM", renditions?:array<"SD"|"HD"|"FULL_HD"|"LOWEST_RESOLUTION">}, state:"CREATING"|"CREATE_FAILED"|"ACTIVE", tags?:array<string, string>, thumbnailConfiguration?:array{recordingMode?:"DISABLED"|"INTERVAL", resolution?:"SD"|"HD"|"FULL_HD"|"LOWEST_RESOLUTION", storage?:array<"SEQUENTIAL"|"LATEST">, targetIntervalSeconds?:int}}, startTime?:int|string|\DateTimeInterface, streamId?:string, truncatedEvents?:array<array{code?:string, eventTime?:int|string|\DateTimeInterface, name?:string, type?:string}>}}>
     */
    public function getStreamSession(array $args): \AWS\Result { }

    /**
     * @param array{channelArn:string, streamId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{streamSession?:array{channel?:array{arn?:string, authorized?:bool, containerFormat?:"TS"|"FRAGMENTED_MP4", ingestEndpoint?:string, insecureIngest?:bool, latencyMode?:"NORMAL"|"LOW", multitrackInputConfiguration?:array{enabled?:bool, maximumResolution?:"SD"|"HD"|"FULL_HD", policy?:"ALLOW"|"REQUIRE"}, name?:string, playbackRestrictionPolicyArn?:string, playbackUrl?:string, preset?:"HIGHER_BANDWIDTH_DELIVERY"|"CONSTRAINED_BANDWIDTH_DELIVERY", recordingConfigurationArn?:string, srt?:array{endpoint?:string, passphrase?:string}, tags?:array<string, string>, type?:"BASIC"|"STANDARD"|"ADVANCED_SD"|"ADVANCED_HD"}, endTime?:int|string|\DateTimeInterface, ingestConfiguration?:array{audio?:array{channels?:int, codec?:string, sampleRate?:int, targetBitrate?:int, track?:string}, video?:array{avcLevel?:string, avcProfile?:string, codec?:string, encoder?:string, level?:string, profile?:string, targetBitrate?:int, targetFramerate?:int, track?:string, videoHeight?:int, videoWidth?:int}}, ingestConfigurations?:array{audioConfigurations:array<array{channels?:int, codec?:string, sampleRate?:int, targetBitrate?:int, track?:string}>, videoConfigurations:array<array{avcLevel?:string, avcProfile?:string, codec?:string, encoder?:string, level?:string, profile?:string, targetBitrate?:int, targetFramerate?:int, track?:string, videoHeight?:int, videoWidth?:int}>}, recordingConfiguration?:array{arn:string, destinationConfiguration:array{s3?:array{bucketName:string}}, name?:string, recordingReconnectWindowSeconds?:int, renditionConfiguration?:array{renditionSelection?:"ALL"|"NONE"|"CUSTOM", renditions?:array<"SD"|"HD"|"FULL_HD"|"LOWEST_RESOLUTION">}, state:"CREATING"|"CREATE_FAILED"|"ACTIVE", tags?:array<string, string>, thumbnailConfiguration?:array{recordingMode?:"DISABLED"|"INTERVAL", resolution?:"SD"|"HD"|"FULL_HD"|"LOWEST_RESOLUTION", storage?:array<"SEQUENTIAL"|"LATEST">, targetIntervalSeconds?:int}}, startTime?:int|string|\DateTimeInterface, streamId?:string, truncatedEvents?:array<array{code?:string, eventTime?:int|string|\DateTimeInterface, name?:string, type?:string}>}}>
     */
    public function getStreamSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name?:string, publicKeyMaterial:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{keyPair?:array{arn?:string, fingerprint?:string, name?:string, tags?:array<string, string>}}>
     */
    public function importPlaybackKeyPair(array $args): \AWS\Result { }

    /**
     * @param array{name?:string, publicKeyMaterial:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{keyPair?:array{arn?:string, fingerprint?:string, name?:string, tags?:array<string, string>}}>
     */
    public function importPlaybackKeyPairAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filterByName?:string, filterByPlaybackRestrictionPolicyArn?:string, filterByRecordingConfigurationArn?:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{channels:array<array{arn?:string, authorized?:bool, insecureIngest?:bool, latencyMode?:"NORMAL"|"LOW", name?:string, playbackRestrictionPolicyArn?:string, preset?:"HIGHER_BANDWIDTH_DELIVERY"|"CONSTRAINED_BANDWIDTH_DELIVERY", recordingConfigurationArn?:string, tags?:array<string, string>, type?:"BASIC"|"STANDARD"|"ADVANCED_SD"|"ADVANCED_HD"}>, nextToken?:string}>
     */
    public function listChannels(array $args = []): \AWS\Result { }

    /**
     * @param array{filterByName?:string, filterByPlaybackRestrictionPolicyArn?:string, filterByRecordingConfigurationArn?:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{channels:array<array{arn?:string, authorized?:bool, insecureIngest?:bool, latencyMode?:"NORMAL"|"LOW", name?:string, playbackRestrictionPolicyArn?:string, preset?:"HIGHER_BANDWIDTH_DELIVERY"|"CONSTRAINED_BANDWIDTH_DELIVERY", recordingConfigurationArn?:string, tags?:array<string, string>, type?:"BASIC"|"STANDARD"|"ADVANCED_SD"|"ADVANCED_HD"}>, nextToken?:string}>
     */
    public function listChannelsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{keyPairs:array<array{arn?:string, name?:string, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listPlaybackKeyPairs(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{keyPairs:array<array{arn?:string, name?:string, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listPlaybackKeyPairsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, playbackRestrictionPolicies:array<array{allowedCountries:array<string>, allowedOrigins:array<string>, arn:string, enableStrictOriginEnforcement?:bool, name?:string, tags?:array<string, string>}>}>
     */
    public function listPlaybackRestrictionPolicies(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, playbackRestrictionPolicies:array<array{allowedCountries:array<string>, allowedOrigins:array<string>, arn:string, enableStrictOriginEnforcement?:bool, name?:string, tags?:array<string, string>}>}>
     */
    public function listPlaybackRestrictionPoliciesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, recordingConfigurations:array<array{arn:string, destinationConfiguration:array{s3?:array{bucketName:string}}, name?:string, state:"CREATING"|"CREATE_FAILED"|"ACTIVE", tags?:array<string, string>}>}>
     */
    public function listRecordingConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, recordingConfigurations:array<array{arn:string, destinationConfiguration:array{s3?:array{bucketName:string}}, name?:string, state:"CREATING"|"CREATE_FAILED"|"ACTIVE", tags?:array<string, string>}>}>
     */
    public function listRecordingConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{channelArn:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, streamKeys:array<array{arn?:string, channelArn?:string, tags?:array<string, string>}>}>
     */
    public function listStreamKeys(array $args): \AWS\Result { }

    /**
     * @param array{channelArn:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, streamKeys:array<array{arn?:string, channelArn?:string, tags?:array<string, string>}>}>
     */
    public function listStreamKeysAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{channelArn:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, streamSessions:array<array{endTime?:int|string|\DateTimeInterface, hasErrorEvent?:bool, startTime?:int|string|\DateTimeInterface, streamId?:string}>}>
     */
    public function listStreamSessions(array $args): \AWS\Result { }

    /**
     * @param array{channelArn:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, streamSessions:array<array{endTime?:int|string|\DateTimeInterface, hasErrorEvent?:bool, startTime?:int|string|\DateTimeInterface, streamId?:string}>}>
     */
    public function listStreamSessionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filterBy?:array{health?:"HEALTHY"|"STARVING"|"UNKNOWN"}, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, streams:array<array{channelArn?:string, health?:"HEALTHY"|"STARVING"|"UNKNOWN", startTime?:int|string|\DateTimeInterface, state?:"LIVE"|"OFFLINE", streamId?:string, viewerCount?:int}>}>
     */
    public function listStreams(array $args = []): \AWS\Result { }

    /**
     * @param array{filterBy?:array{health?:"HEALTHY"|"STARVING"|"UNKNOWN"}, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, streams:array<array{channelArn?:string, health?:"HEALTHY"|"STARVING"|"UNKNOWN", startTime?:int|string|\DateTimeInterface, state?:"LIVE"|"OFFLINE", streamId?:string, viewerCount?:int}>}>
     */
    public function listStreamsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{channelArn:string, metadata:string} $args
     * @return \AWS\Result<void>
     */
    public function putMetadata(array $args): \AWS\Result { }

    /**
     * @param array{channelArn:string, metadata:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{channelArn:string, viewerId:string, viewerSessionVersionsLessThanOrEqualTo?:int} $args
     * @return \AWS\Result<array{}>
     */
    public function startViewerSessionRevocation(array $args): \AWS\Result { }

    /**
     * @param array{channelArn:string, viewerId:string, viewerSessionVersionsLessThanOrEqualTo?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function startViewerSessionRevocationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{channelArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopStream(array $args): \AWS\Result { }

    /**
     * @param array{channelArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopStreamAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{arn:string, authorized?:bool, containerFormat?:"TS"|"FRAGMENTED_MP4", insecureIngest?:bool, latencyMode?:"NORMAL"|"LOW", multitrackInputConfiguration?:array{enabled?:bool, maximumResolution?:"SD"|"HD"|"FULL_HD", policy?:"ALLOW"|"REQUIRE"}, name?:string, playbackRestrictionPolicyArn?:string, preset?:"HIGHER_BANDWIDTH_DELIVERY"|"CONSTRAINED_BANDWIDTH_DELIVERY", recordingConfigurationArn?:string, type?:"BASIC"|"STANDARD"|"ADVANCED_SD"|"ADVANCED_HD"} $args
     * @return \AWS\Result<array{channel?:array{arn?:string, authorized?:bool, containerFormat?:"TS"|"FRAGMENTED_MP4", ingestEndpoint?:string, insecureIngest?:bool, latencyMode?:"NORMAL"|"LOW", multitrackInputConfiguration?:array{enabled?:bool, maximumResolution?:"SD"|"HD"|"FULL_HD", policy?:"ALLOW"|"REQUIRE"}, name?:string, playbackRestrictionPolicyArn?:string, playbackUrl?:string, preset?:"HIGHER_BANDWIDTH_DELIVERY"|"CONSTRAINED_BANDWIDTH_DELIVERY", recordingConfigurationArn?:string, srt?:array{endpoint?:string, passphrase?:string}, tags?:array<string, string>, type?:"BASIC"|"STANDARD"|"ADVANCED_SD"|"ADVANCED_HD"}}>
     */
    public function updateChannel(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, authorized?:bool, containerFormat?:"TS"|"FRAGMENTED_MP4", insecureIngest?:bool, latencyMode?:"NORMAL"|"LOW", multitrackInputConfiguration?:array{enabled?:bool, maximumResolution?:"SD"|"HD"|"FULL_HD", policy?:"ALLOW"|"REQUIRE"}, name?:string, playbackRestrictionPolicyArn?:string, preset?:"HIGHER_BANDWIDTH_DELIVERY"|"CONSTRAINED_BANDWIDTH_DELIVERY", recordingConfigurationArn?:string, type?:"BASIC"|"STANDARD"|"ADVANCED_SD"|"ADVANCED_HD"} $args
     * @return \GuzzleHttp\Promise\Promise<array{channel?:array{arn?:string, authorized?:bool, containerFormat?:"TS"|"FRAGMENTED_MP4", ingestEndpoint?:string, insecureIngest?:bool, latencyMode?:"NORMAL"|"LOW", multitrackInputConfiguration?:array{enabled?:bool, maximumResolution?:"SD"|"HD"|"FULL_HD", policy?:"ALLOW"|"REQUIRE"}, name?:string, playbackRestrictionPolicyArn?:string, playbackUrl?:string, preset?:"HIGHER_BANDWIDTH_DELIVERY"|"CONSTRAINED_BANDWIDTH_DELIVERY", recordingConfigurationArn?:string, srt?:array{endpoint?:string, passphrase?:string}, tags?:array<string, string>, type?:"BASIC"|"STANDARD"|"ADVANCED_SD"|"ADVANCED_HD"}}>
     */
    public function updateChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{allowedCountries?:array<string>, allowedOrigins?:array<string>, arn:string, enableStrictOriginEnforcement?:bool, name?:string} $args
     * @return \AWS\Result<array{playbackRestrictionPolicy?:array{allowedCountries:array<string>, allowedOrigins:array<string>, arn:string, enableStrictOriginEnforcement?:bool, name?:string, tags?:array<string, string>}}>
     */
    public function updatePlaybackRestrictionPolicy(array $args): \AWS\Result { }

    /**
     * @param array{allowedCountries?:array<string>, allowedOrigins?:array<string>, arn:string, enableStrictOriginEnforcement?:bool, name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{playbackRestrictionPolicy?:array{allowedCountries:array<string>, allowedOrigins:array<string>, arn:string, enableStrictOriginEnforcement?:bool, name?:string, tags?:array<string, string>}}>
     */
    public function updatePlaybackRestrictionPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
