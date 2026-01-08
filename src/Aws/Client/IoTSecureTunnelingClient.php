<?php
namespace AWS\IoTSecureTunneling;

class IoTSecureTunnelingClient
{
    /**
     * @param array{tunnelId:string, delete?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function closeTunnel(array $args): \AWS\Result { }

    /**
     * @param array{tunnelId:string, delete?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function closeTunnelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{tunnelId:string} $args
     * @return \AWS\Result<array{tunnel?:array{tunnelId?:string, tunnelArn?:string, status?:"OPEN"|"CLOSED", sourceConnectionState?:array{status?:"CONNECTED"|"DISCONNECTED", lastUpdatedAt?:int|string|\DateTimeInterface}, destinationConnectionState?:array{status?:"CONNECTED"|"DISCONNECTED", lastUpdatedAt?:int|string|\DateTimeInterface}, description?:string, destinationConfig?:array{thingName?:string, services:array<string>}, timeoutConfig?:array{maxLifetimeTimeoutMinutes?:int}, tags?:array<array{key:string, value:string}>, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface}}>
     */
    public function describeTunnel(array $args): \AWS\Result { }

    /**
     * @param array{tunnelId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tunnel?:array{tunnelId?:string, tunnelArn?:string, status?:"OPEN"|"CLOSED", sourceConnectionState?:array{status?:"CONNECTED"|"DISCONNECTED", lastUpdatedAt?:int|string|\DateTimeInterface}, destinationConnectionState?:array{status?:"CONNECTED"|"DISCONNECTED", lastUpdatedAt?:int|string|\DateTimeInterface}, description?:string, destinationConfig?:array{thingName?:string, services:array<string>}, timeoutConfig?:array{maxLifetimeTimeoutMinutes?:int}, tags?:array<array{key:string, value:string}>, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface}}>
     */
    public function describeTunnelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{tags?:array<array{key:string, value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<array{key:string, value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{thingName?:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{tunnelSummaries?:array<array{tunnelId?:string, tunnelArn?:string, status?:"OPEN"|"CLOSED", description?:string, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listTunnels(array $args = []): \AWS\Result { }

    /**
     * @param array{thingName?:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tunnelSummaries?:array<array{tunnelId?:string, tunnelArn?:string, status?:"OPEN"|"CLOSED", description?:string, createdAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listTunnelsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, tags?:array<array{key:string, value:string}>, destinationConfig?:array{thingName?:string, services:array<string>}, timeoutConfig?:array{maxLifetimeTimeoutMinutes?:int}} $args
     * @return \AWS\Result<array{tunnelId?:string, tunnelArn?:string, sourceAccessToken?:string, destinationAccessToken?:string}>
     */
    public function openTunnel(array $args = []): \AWS\Result { }

    /**
     * @param array{description?:string, tags?:array<array{key:string, value:string}>, destinationConfig?:array{thingName?:string, services:array<string>}, timeoutConfig?:array{maxLifetimeTimeoutMinutes?:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{tunnelId?:string, tunnelArn?:string, sourceAccessToken?:string, destinationAccessToken?:string}>
     */
    public function openTunnelAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{tunnelId:string, clientMode:"SOURCE"|"DESTINATION"|"ALL", destinationConfig?:array{thingName?:string, services:array<string>}} $args
     * @return \AWS\Result<array{tunnelArn?:string, sourceAccessToken?:string, destinationAccessToken?:string}>
     */
    public function rotateTunnelAccessToken(array $args): \AWS\Result { }

    /**
     * @param array{tunnelId:string, clientMode:"SOURCE"|"DESTINATION"|"ALL", destinationConfig?:array{thingName?:string, services:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{tunnelArn?:string, sourceAccessToken?:string, destinationAccessToken?:string}>
     */
    public function rotateTunnelAccessTokenAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags:array<array{key:string, value:string}>} $args
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
}
