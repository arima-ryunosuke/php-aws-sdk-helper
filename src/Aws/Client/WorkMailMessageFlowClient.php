<?php
namespace AWS\WorkMailMessageFlow;

class WorkMailMessageFlowClient
{
    /**
     * @param array{messageId:string} $args
     * @return \AWS\Result<array{messageContent:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getRawMessageContent(array $args): \AWS\Result { }

    /**
     * @param array{messageId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{messageContent:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getRawMessageContentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{messageId:string, content:array{s3Reference:array{bucket:string, key:string, objectVersion?:string}}} $args
     * @return \AWS\Result<array{}>
     */
    public function putRawMessageContent(array $args): \AWS\Result { }

    /**
     * @param array{messageId:string, content:array{s3Reference:array{bucket:string, key:string, objectVersion?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putRawMessageContentAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
