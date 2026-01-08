<?php
namespace AWS\S3Outposts;

class S3OutpostsClient
{
    /**
     * @param array{OutpostId:string, SubnetId:string, SecurityGroupId:string, AccessType?:"Private"|"CustomerOwnedIp", CustomerOwnedIpv4Pool?:string} $args
     * @return \AWS\Result<array{EndpointArn?:string}>
     */
    public function createEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{OutpostId:string, SubnetId:string, SecurityGroupId:string, AccessType?:"Private"|"CustomerOwnedIp", CustomerOwnedIpv4Pool?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EndpointArn?:string}>
     */
    public function createEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EndpointId:string, OutpostId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{EndpointId:string, OutpostId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Endpoints?:array<array{EndpointArn?:string, OutpostsId?:string, CidrBlock?:string, Status?:"Pending"|"Available"|"Deleting"|"Create_Failed"|"Delete_Failed", CreationTime?:int|string|\DateTimeInterface, NetworkInterfaces?:array<array{NetworkInterfaceId?:string}>, VpcId?:string, SubnetId?:string, SecurityGroupId?:string, AccessType?:"Private"|"CustomerOwnedIp", CustomerOwnedIpv4Pool?:string, FailedReason?:array{ErrorCode?:string, Message?:string}}>, NextToken?:string}>
     */
    public function listEndpoints(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Endpoints?:array<array{EndpointArn?:string, OutpostsId?:string, CidrBlock?:string, Status?:"Pending"|"Available"|"Deleting"|"Create_Failed"|"Delete_Failed", CreationTime?:int|string|\DateTimeInterface, NetworkInterfaces?:array<array{NetworkInterfaceId?:string}>, VpcId?:string, SubnetId?:string, SecurityGroupId?:string, AccessType?:"Private"|"CustomerOwnedIp", CustomerOwnedIpv4Pool?:string, FailedReason?:array{ErrorCode?:string, Message?:string}}>, NextToken?:string}>
     */
    public function listEndpointsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Outposts?:array<array{OutpostArn?:string, S3OutpostArn?:string, OutpostId?:string, OwnerId?:string, CapacityInBytes?:int}>, NextToken?:string}>
     */
    public function listOutpostsWithS3(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Outposts?:array<array{OutpostArn?:string, S3OutpostArn?:string, OutpostId?:string, OwnerId?:string, CapacityInBytes?:int}>, NextToken?:string}>
     */
    public function listOutpostsWithS3Async(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, OutpostId:string} $args
     * @return \AWS\Result<array{Endpoints?:array<array{EndpointArn?:string, OutpostsId?:string, CidrBlock?:string, Status?:"Pending"|"Available"|"Deleting"|"Create_Failed"|"Delete_Failed", CreationTime?:int|string|\DateTimeInterface, NetworkInterfaces?:array<array{NetworkInterfaceId?:string}>, VpcId?:string, SubnetId?:string, SecurityGroupId?:string, AccessType?:"Private"|"CustomerOwnedIp", CustomerOwnedIpv4Pool?:string, FailedReason?:array{ErrorCode?:string, Message?:string}}>, NextToken?:string}>
     */
    public function listSharedEndpoints(array $args): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, OutpostId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Endpoints?:array<array{EndpointArn?:string, OutpostsId?:string, CidrBlock?:string, Status?:"Pending"|"Available"|"Deleting"|"Create_Failed"|"Delete_Failed", CreationTime?:int|string|\DateTimeInterface, NetworkInterfaces?:array<array{NetworkInterfaceId?:string}>, VpcId?:string, SubnetId?:string, SecurityGroupId?:string, AccessType?:"Private"|"CustomerOwnedIp", CustomerOwnedIpv4Pool?:string, FailedReason?:array{ErrorCode?:string, Message?:string}}>, NextToken?:string}>
     */
    public function listSharedEndpointsAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
