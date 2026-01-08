<?php
namespace AWS\ApiGatewayManagementApi;

class ApiGatewayManagementApiClient
{
    /**
     * @param array{ConnectionId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteConnection(array $args): \AWS\Result { }

    /**
     * @param array{ConnectionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConnectionId:string} $args
     * @return \AWS\Result<array{ConnectedAt?:int|string|\DateTimeInterface, Identity?:array{SourceIp:string, UserAgent:string}, LastActiveAt?:int|string|\DateTimeInterface}>
     */
    public function getConnection(array $args): \AWS\Result { }

    /**
     * @param array{ConnectionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConnectedAt?:int|string|\DateTimeInterface, Identity?:array{SourceIp:string, UserAgent:string}, LastActiveAt?:int|string|\DateTimeInterface}>
     */
    public function getConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Data:string|resource|\Psr\Http\Message\StreamInterface, ConnectionId:string} $args
     * @return \AWS\Result<void>
     */
    public function postToConnection(array $args): \AWS\Result { }

    /**
     * @param array{Data:string|resource|\Psr\Http\Message\StreamInterface, ConnectionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function postToConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
