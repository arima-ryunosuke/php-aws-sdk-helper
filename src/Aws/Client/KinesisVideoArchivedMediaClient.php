<?php
namespace AWS\KinesisVideoArchivedMedia;

class KinesisVideoArchivedMediaClient
{
    /**
     * @param array{StreamName?:string, StreamARN?:string, ClipFragmentSelector:array{FragmentSelectorType:"PRODUCER_TIMESTAMP"|"SERVER_TIMESTAMP", TimestampRange:array{StartTimestamp:int|string|\DateTimeInterface, EndTimestamp:int|string|\DateTimeInterface}}} $args
     * @return \AWS\Result<array{ContentType?:string, Payload?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getClip(array $args): \AWS\Result { }

    /**
     * @param array{StreamName?:string, StreamARN?:string, ClipFragmentSelector:array{FragmentSelectorType:"PRODUCER_TIMESTAMP"|"SERVER_TIMESTAMP", TimestampRange:array{StartTimestamp:int|string|\DateTimeInterface, EndTimestamp:int|string|\DateTimeInterface}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContentType?:string, Payload?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getClipAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName?:string, StreamARN?:string, PlaybackMode?:"LIVE"|"LIVE_REPLAY"|"ON_DEMAND", DisplayFragmentTimestamp?:"ALWAYS"|"NEVER", DisplayFragmentNumber?:"ALWAYS"|"NEVER", DASHFragmentSelector?:array{FragmentSelectorType?:"PRODUCER_TIMESTAMP"|"SERVER_TIMESTAMP", TimestampRange?:array{StartTimestamp?:int|string|\DateTimeInterface, EndTimestamp?:int|string|\DateTimeInterface}}, Expires?:int, MaxManifestFragmentResults?:int} $args
     * @return \AWS\Result<array{DASHStreamingSessionURL?:string}>
     */
    public function getDASHStreamingSessionURL(array $args = []): \AWS\Result { }

    /**
     * @param array{StreamName?:string, StreamARN?:string, PlaybackMode?:"LIVE"|"LIVE_REPLAY"|"ON_DEMAND", DisplayFragmentTimestamp?:"ALWAYS"|"NEVER", DisplayFragmentNumber?:"ALWAYS"|"NEVER", DASHFragmentSelector?:array{FragmentSelectorType?:"PRODUCER_TIMESTAMP"|"SERVER_TIMESTAMP", TimestampRange?:array{StartTimestamp?:int|string|\DateTimeInterface, EndTimestamp?:int|string|\DateTimeInterface}}, Expires?:int, MaxManifestFragmentResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{DASHStreamingSessionURL?:string}>
     */
    public function getDASHStreamingSessionURLAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName?:string, StreamARN?:string, PlaybackMode?:"LIVE"|"LIVE_REPLAY"|"ON_DEMAND", HLSFragmentSelector?:array{FragmentSelectorType?:"PRODUCER_TIMESTAMP"|"SERVER_TIMESTAMP", TimestampRange?:array{StartTimestamp?:int|string|\DateTimeInterface, EndTimestamp?:int|string|\DateTimeInterface}}, ContainerFormat?:"FRAGMENTED_MP4"|"MPEG_TS", DiscontinuityMode?:"ALWAYS"|"NEVER"|"ON_DISCONTINUITY", DisplayFragmentTimestamp?:"ALWAYS"|"NEVER", Expires?:int, MaxMediaPlaylistFragmentResults?:int} $args
     * @return \AWS\Result<array{HLSStreamingSessionURL?:string}>
     */
    public function getHLSStreamingSessionURL(array $args = []): \AWS\Result { }

    /**
     * @param array{StreamName?:string, StreamARN?:string, PlaybackMode?:"LIVE"|"LIVE_REPLAY"|"ON_DEMAND", HLSFragmentSelector?:array{FragmentSelectorType?:"PRODUCER_TIMESTAMP"|"SERVER_TIMESTAMP", TimestampRange?:array{StartTimestamp?:int|string|\DateTimeInterface, EndTimestamp?:int|string|\DateTimeInterface}}, ContainerFormat?:"FRAGMENTED_MP4"|"MPEG_TS", DiscontinuityMode?:"ALWAYS"|"NEVER"|"ON_DISCONTINUITY", DisplayFragmentTimestamp?:"ALWAYS"|"NEVER", Expires?:int, MaxMediaPlaylistFragmentResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{HLSStreamingSessionURL?:string}>
     */
    public function getHLSStreamingSessionURLAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName?:string, StreamARN?:string, ImageSelectorType:"PRODUCER_TIMESTAMP"|"SERVER_TIMESTAMP", StartTimestamp:int|string|\DateTimeInterface, EndTimestamp:int|string|\DateTimeInterface, SamplingInterval?:int, Format:"JPEG"|"PNG", FormatConfig?:array<"JPEGQuality", string>, WidthPixels?:int, HeightPixels?:int, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Images?:array<array{TimeStamp?:int|string|\DateTimeInterface, Error?:"NO_MEDIA"|"MEDIA_ERROR", ImageContent?:string}>, NextToken?:string}>
     */
    public function getImages(array $args): \AWS\Result { }

    /**
     * @param array{StreamName?:string, StreamARN?:string, ImageSelectorType:"PRODUCER_TIMESTAMP"|"SERVER_TIMESTAMP", StartTimestamp:int|string|\DateTimeInterface, EndTimestamp:int|string|\DateTimeInterface, SamplingInterval?:int, Format:"JPEG"|"PNG", FormatConfig?:array<"JPEGQuality", string>, WidthPixels?:int, HeightPixels?:int, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Images?:array<array{TimeStamp?:int|string|\DateTimeInterface, Error?:"NO_MEDIA"|"MEDIA_ERROR", ImageContent?:string}>, NextToken?:string}>
     */
    public function getImagesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName?:string, StreamARN?:string, Fragments:array<string>} $args
     * @return \AWS\Result<array{ContentType?:string, Payload?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getMediaForFragmentList(array $args): \AWS\Result { }

    /**
     * @param array{StreamName?:string, StreamARN?:string, Fragments:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContentType?:string, Payload?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getMediaForFragmentListAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StreamName?:string, StreamARN?:string, MaxResults?:int, NextToken?:string, FragmentSelector?:array{FragmentSelectorType:"PRODUCER_TIMESTAMP"|"SERVER_TIMESTAMP", TimestampRange:array{StartTimestamp:int|string|\DateTimeInterface, EndTimestamp:int|string|\DateTimeInterface}}} $args
     * @return \AWS\Result<array{Fragments?:array<array{FragmentNumber?:string, FragmentSizeInBytes?:int, ProducerTimestamp?:int|string|\DateTimeInterface, ServerTimestamp?:int|string|\DateTimeInterface, FragmentLengthInMilliseconds?:int}>, NextToken?:string}>
     */
    public function listFragments(array $args = []): \AWS\Result { }

    /**
     * @param array{StreamName?:string, StreamARN?:string, MaxResults?:int, NextToken?:string, FragmentSelector?:array{FragmentSelectorType:"PRODUCER_TIMESTAMP"|"SERVER_TIMESTAMP", TimestampRange:array{StartTimestamp:int|string|\DateTimeInterface, EndTimestamp:int|string|\DateTimeInterface}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Fragments?:array<array{FragmentNumber?:string, FragmentSizeInBytes?:int, ProducerTimestamp?:int|string|\DateTimeInterface, ServerTimestamp?:int|string|\DateTimeInterface, FragmentLengthInMilliseconds?:int}>, NextToken?:string}>
     */
    public function listFragmentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }
}
