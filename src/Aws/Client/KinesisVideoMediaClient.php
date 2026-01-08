<?php
namespace AWS\KinesisVideoMedia;

class KinesisVideoMediaClient
{
    /**
     * @param array{StreamName?:string, StreamARN?:string, StartSelector:array{StartSelectorType:"FRAGMENT_NUMBER"|"SERVER_TIMESTAMP"|"PRODUCER_TIMESTAMP"|"NOW"|"EARLIEST"|"CONTINUATION_TOKEN", AfterFragmentNumber?:string, StartTimestamp?:int|string|\DateTimeInterface, ContinuationToken?:string}} $args
     * @return \AWS\Result<array{ContentType?:string, Payload?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getMedia(array $args): \AWS\Result { }

    /**
     * @param array{StreamName?:string, StreamARN?:string, StartSelector:array{StartSelectorType:"FRAGMENT_NUMBER"|"SERVER_TIMESTAMP"|"PRODUCER_TIMESTAMP"|"NOW"|"EARLIEST"|"CONTINUATION_TOKEN", AfterFragmentNumber?:string, StartTimestamp?:int|string|\DateTimeInterface, ContinuationToken?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContentType?:string, Payload?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getMediaAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
