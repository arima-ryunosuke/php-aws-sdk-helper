<?php
namespace AWS\EC2InstanceConnect;

class EC2InstanceConnectClient
{
    /**
     * @param array{InstanceId:string, InstanceOSUser:string, SSHPublicKey:string, AvailabilityZone?:string} $args
     * @return \AWS\Result<array{RequestId?:string, Success?:bool}>
     */
    public function sendSSHPublicKey(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, InstanceOSUser:string, SSHPublicKey:string, AvailabilityZone?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RequestId?:string, Success?:bool}>
     */
    public function sendSSHPublicKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, SerialPort?:int, SSHPublicKey:string} $args
     * @return \AWS\Result<array{RequestId?:string, Success?:bool}>
     */
    public function sendSerialConsoleSSHPublicKey(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, SerialPort?:int, SSHPublicKey:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RequestId?:string, Success?:bool}>
     */
    public function sendSerialConsoleSSHPublicKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
