<?php
namespace AWS\SnowDeviceManagement;

class SnowDeviceManagementClient
{
    /**
     * @param array{taskId:string} $args
     * @return \AWS\Result<array{taskId?:string}>
     */
    public function cancelTask(array $args): \AWS\Result { }

    /**
     * @param array{taskId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{taskId?:string}>
     */
    public function cancelTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, command:array{reboot?:array{}, unlock?:array{}}, description?:string, tags?:array<string, string>, targets:array<string>} $args
     * @return \AWS\Result<array{taskArn?:string, taskId?:string}>
     */
    public function createTask(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, command:array{reboot?:array{}, unlock?:array{}}, description?:string, tags?:array<string, string>, targets:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{taskArn?:string, taskId?:string}>
     */
    public function createTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{managedDeviceId:string} $args
     * @return \AWS\Result<array{associatedWithJob?:string, deviceCapacities?:array<array{available?:int, name?:string, total?:int, unit?:string, used?:int}>, deviceState?:"UNLOCKED"|"LOCKED"|"UNLOCKING", deviceType?:string, lastReachedOutAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, managedDeviceArn?:string, managedDeviceId?:string, physicalNetworkInterfaces?:array<array{defaultGateway?:string, ipAddress?:string, ipAddressAssignment?:"DHCP"|"STATIC", macAddress?:string, netmask?:string, physicalConnectorType?:"RJ45"|"SFP_PLUS"|"QSFP"|"RJ45_2"|"WIFI", physicalNetworkInterfaceId?:string}>, software?:array{installState?:string, installedVersion?:string, installingVersion?:string}, tags?:array<string, string>}>
     */
    public function describeDevice(array $args): \AWS\Result { }

    /**
     * @param array{managedDeviceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{associatedWithJob?:string, deviceCapacities?:array<array{available?:int, name?:string, total?:int, unit?:string, used?:int}>, deviceState?:"UNLOCKED"|"LOCKED"|"UNLOCKING", deviceType?:string, lastReachedOutAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, managedDeviceArn?:string, managedDeviceId?:string, physicalNetworkInterfaces?:array<array{defaultGateway?:string, ipAddress?:string, ipAddressAssignment?:"DHCP"|"STATIC", macAddress?:string, netmask?:string, physicalConnectorType?:"RJ45"|"SFP_PLUS"|"QSFP"|"RJ45_2"|"WIFI", physicalNetworkInterfaceId?:string}>, software?:array{installState?:string, installedVersion?:string, installingVersion?:string}, tags?:array<string, string>}>
     */
    public function describeDeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{instanceIds:array<string>, managedDeviceId:string} $args
     * @return \AWS\Result<array{instances?:array<array{instance?:array{amiLaunchIndex?:int, blockDeviceMappings?:array<array{deviceName?:string, ebs?:array{attachTime?:int|string|\DateTimeInterface, deleteOnTermination?:bool, status?:"ATTACHING"|"ATTACHED"|"DETACHING"|"DETACHED", volumeId?:string}}>, cpuOptions?:array{coreCount?:int, threadsPerCore?:int}, createdAt?:int|string|\DateTimeInterface, imageId?:string, instanceId?:string, instanceType?:string, privateIpAddress?:string, publicIpAddress?:string, rootDeviceName?:string, securityGroups?:array<array{groupId?:string, groupName?:string}>, state?:array{code?:int, name?:"PENDING"|"RUNNING"|"SHUTTING_DOWN"|"TERMINATED"|"STOPPING"|"STOPPED"}, updatedAt?:int|string|\DateTimeInterface}, lastUpdatedAt?:int|string|\DateTimeInterface}>}>
     */
    public function describeDeviceEc2Instances(array $args): \AWS\Result { }

    /**
     * @param array{instanceIds:array<string>, managedDeviceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{instances?:array<array{instance?:array{amiLaunchIndex?:int, blockDeviceMappings?:array<array{deviceName?:string, ebs?:array{attachTime?:int|string|\DateTimeInterface, deleteOnTermination?:bool, status?:"ATTACHING"|"ATTACHED"|"DETACHING"|"DETACHED", volumeId?:string}}>, cpuOptions?:array{coreCount?:int, threadsPerCore?:int}, createdAt?:int|string|\DateTimeInterface, imageId?:string, instanceId?:string, instanceType?:string, privateIpAddress?:string, publicIpAddress?:string, rootDeviceName?:string, securityGroups?:array<array{groupId?:string, groupName?:string}>, state?:array{code?:int, name?:"PENDING"|"RUNNING"|"SHUTTING_DOWN"|"TERMINATED"|"STOPPING"|"STOPPED"}, updatedAt?:int|string|\DateTimeInterface}, lastUpdatedAt?:int|string|\DateTimeInterface}>}>
     */
    public function describeDeviceEc2InstancesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{managedDeviceId:string, taskId:string} $args
     * @return \AWS\Result<array{executionId?:string, lastUpdatedAt?:int|string|\DateTimeInterface, managedDeviceId?:string, startedAt?:int|string|\DateTimeInterface, state?:"QUEUED"|"IN_PROGRESS"|"CANCELED"|"FAILED"|"SUCCEEDED"|"REJECTED"|"TIMED_OUT", taskId?:string}>
     */
    public function describeExecution(array $args): \AWS\Result { }

    /**
     * @param array{managedDeviceId:string, taskId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{executionId?:string, lastUpdatedAt?:int|string|\DateTimeInterface, managedDeviceId?:string, startedAt?:int|string|\DateTimeInterface, state?:"QUEUED"|"IN_PROGRESS"|"CANCELED"|"FAILED"|"SUCCEEDED"|"REJECTED"|"TIMED_OUT", taskId?:string}>
     */
    public function describeExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{taskId:string} $args
     * @return \AWS\Result<array{completedAt?:int|string|\DateTimeInterface, createdAt?:int|string|\DateTimeInterface, description?:string, lastUpdatedAt?:int|string|\DateTimeInterface, state?:"IN_PROGRESS"|"CANCELED"|"COMPLETED", tags?:array<string, string>, targets?:array<string>, taskArn?:string, taskId?:string}>
     */
    public function describeTask(array $args): \AWS\Result { }

    /**
     * @param array{taskId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{completedAt?:int|string|\DateTimeInterface, createdAt?:int|string|\DateTimeInterface, description?:string, lastUpdatedAt?:int|string|\DateTimeInterface, state?:"IN_PROGRESS"|"CANCELED"|"COMPLETED", tags?:array<string, string>, targets?:array<string>, taskArn?:string, taskId?:string}>
     */
    public function describeTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{managedDeviceId:string, maxResults?:int, nextToken?:string, type?:string} $args
     * @return \AWS\Result<array{nextToken?:string, resources?:array<array{arn?:string, id?:string, resourceType:string}>}>
     */
    public function listDeviceResources(array $args): \AWS\Result { }

    /**
     * @param array{managedDeviceId:string, maxResults?:int, nextToken?:string, type?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, resources?:array<array{arn?:string, id?:string, resourceType:string}>}>
     */
    public function listDeviceResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId?:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{devices?:array<array{associatedWithJob?:string, managedDeviceArn?:string, managedDeviceId?:string, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listDevices(array $args = []): \AWS\Result { }

    /**
     * @param array{jobId?:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{devices?:array<array{associatedWithJob?:string, managedDeviceArn?:string, managedDeviceId?:string, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listDevicesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, state?:"QUEUED"|"IN_PROGRESS"|"CANCELED"|"FAILED"|"SUCCEEDED"|"REJECTED"|"TIMED_OUT", taskId:string} $args
     * @return \AWS\Result<array{executions?:array<array{executionId?:string, managedDeviceId?:string, state?:"QUEUED"|"IN_PROGRESS"|"CANCELED"|"FAILED"|"SUCCEEDED"|"REJECTED"|"TIMED_OUT", taskId?:string}>, nextToken?:string}>
     */
    public function listExecutions(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, state?:"QUEUED"|"IN_PROGRESS"|"CANCELED"|"FAILED"|"SUCCEEDED"|"REJECTED"|"TIMED_OUT", taskId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{executions?:array<array{executionId?:string, managedDeviceId?:string, state?:"QUEUED"|"IN_PROGRESS"|"CANCELED"|"FAILED"|"SUCCEEDED"|"REJECTED"|"TIMED_OUT", taskId?:string}>, nextToken?:string}>
     */
    public function listExecutionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{tags?:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, state?:"IN_PROGRESS"|"CANCELED"|"COMPLETED"} $args
     * @return \AWS\Result<array{nextToken?:string, tasks?:array<array{state?:"IN_PROGRESS"|"CANCELED"|"COMPLETED", tags?:array<string, string>, taskArn?:string, taskId:string}>}>
     */
    public function listTasks(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, state?:"IN_PROGRESS"|"CANCELED"|"COMPLETED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, tasks?:array<array{state?:"IN_PROGRESS"|"CANCELED"|"COMPLETED", tags?:array<string, string>, taskArn?:string, taskId:string}>}>
     */
    public function listTasksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags:array<string, string>} $args
     * @return \AWS\Result<void>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
