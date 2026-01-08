<?php
namespace AWS\KinesisVideoSignalingChannels;

class KinesisVideoSignalingChannelsClient
{
    /**
     * @param array{ChannelARN:string, ClientId?:string, Service?:"TURN", Username?:string} $args
     * @return \AWS\Result<array{IceServerList?:array<array{Uris?:array<string>, Username?:string, Password?:string, Ttl?:int}>}>
     */
    public function getIceServerConfig(array $args): \AWS\Result { }

    /**
     * @param array{ChannelARN:string, ClientId?:string, Service?:"TURN", Username?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IceServerList?:array<array{Uris?:array<string>, Username?:string, Password?:string, Ttl?:int}>}>
     */
    public function getIceServerConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelARN:string, SenderClientId:string, MessagePayload:string} $args
     * @return \AWS\Result<array{Answer?:string}>
     */
    public function sendAlexaOfferToMaster(array $args): \AWS\Result { }

    /**
     * @param array{ChannelARN:string, SenderClientId:string, MessagePayload:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Answer?:string}>
     */
    public function sendAlexaOfferToMasterAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
