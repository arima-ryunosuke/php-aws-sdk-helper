<?php
namespace AWS\KinesisVideoWebRTCStorage;

class KinesisVideoWebRTCStorageClient
{
    /**
     * @param array{channelArn:string} $args
     * @return \AWS\Result<void>
     */
    public function joinStorageSession(array $args): \AWS\Result { }

    /**
     * @param array{channelArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function joinStorageSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{channelArn:string, clientId:string} $args
     * @return \AWS\Result<void>
     */
    public function joinStorageSessionAsViewer(array $args): \AWS\Result { }

    /**
     * @param array{channelArn:string, clientId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function joinStorageSessionAsViewerAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
