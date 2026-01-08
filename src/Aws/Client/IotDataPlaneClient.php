<?php
namespace AWS\IotDataPlane;

class IotDataPlaneClient
{
    /**
     * @param array{thingName:string, shadowName?:string} $args
     * @return \AWS\Result<array{payload:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function deleteThingShadow(array $args): \AWS\Result { }

    /**
     * @param array{thingName:string, shadowName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{payload:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function deleteThingShadowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{topic:string} $args
     * @return \AWS\Result<array{topic?:string, payload?:string|resource|\Psr\Http\Message\StreamInterface, qos?:int, lastModifiedTime?:int, userProperties?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getRetainedMessage(array $args): \AWS\Result { }

    /**
     * @param array{topic:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{topic?:string, payload?:string|resource|\Psr\Http\Message\StreamInterface, qos?:int, lastModifiedTime?:int, userProperties?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getRetainedMessageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingName:string, shadowName?:string} $args
     * @return \AWS\Result<array{payload?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getThingShadow(array $args): \AWS\Result { }

    /**
     * @param array{thingName:string, shadowName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{payload?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function getThingShadowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingName:string, nextToken?:string, pageSize?:int} $args
     * @return \AWS\Result<array{results?:array<string>, nextToken?:string, timestamp?:int}>
     */
    public function listNamedShadowsForThing(array $args): \AWS\Result { }

    /**
     * @param array{thingName:string, nextToken?:string, pageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{results?:array<string>, nextToken?:string, timestamp?:int}>
     */
    public function listNamedShadowsForThingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{retainedTopics?:array<array{topic?:string, payloadSize?:int, qos?:int, lastModifiedTime?:int}>, nextToken?:string}>
     */
    public function listRetainedMessages(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{retainedTopics?:array<array{topic?:string, payloadSize?:int, qos?:int, lastModifiedTime?:int}>, nextToken?:string}>
     */
    public function listRetainedMessagesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{topic:string, qos?:int, retain?:bool, payload?:string|resource|\Psr\Http\Message\StreamInterface, userProperties?:string, payloadFormatIndicator?:"UNSPECIFIED_BYTES"|"UTF8_DATA", contentType?:string, responseTopic?:string, correlationData?:string, messageExpiry?:int} $args
     * @return \AWS\Result<void>
     */
    public function publish(array $args): \AWS\Result { }

    /**
     * @param array{topic:string, qos?:int, retain?:bool, payload?:string|resource|\Psr\Http\Message\StreamInterface, userProperties?:string, payloadFormatIndicator?:"UNSPECIFIED_BYTES"|"UTF8_DATA", contentType?:string, responseTopic?:string, correlationData?:string, messageExpiry?:int} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function publishAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingName:string, shadowName?:string, payload:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \AWS\Result<array{payload?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function updateThingShadow(array $args): \AWS\Result { }

    /**
     * @param array{thingName:string, shadowName?:string, payload:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{payload?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function updateThingShadowAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
