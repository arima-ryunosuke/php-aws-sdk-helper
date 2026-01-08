<?php
namespace AWS\PCS;

class PCSClient
{
    /**
     * @param array{clusterName:string, scheduler:array{type:"SLURM", version:string}, size:"SMALL"|"MEDIUM"|"LARGE", networking:array{subnetIds?:array<string>, securityGroupIds?:array<string>}, slurmConfiguration?:array{scaleDownIdleTimeInSeconds?:int, slurmCustomSettings?:array<array{parameterName:string, parameterValue:string}>}, clientToken?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{cluster?:array{name:string, id:string, arn:string, status:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"DELETE_FAILED"|"UPDATE_FAILED", createdAt:int|string|\DateTimeInterface, modifiedAt:int|string|\DateTimeInterface, scheduler:array{type:"SLURM", version:string}, size:"SMALL"|"MEDIUM"|"LARGE", slurmConfiguration?:array{scaleDownIdleTimeInSeconds?:int, slurmCustomSettings?:array<array{parameterName:string, parameterValue:string}>, authKey?:array{secretArn:string, secretVersion:string}}, networking:array{subnetIds?:array<string>, securityGroupIds?:array<string>}, endpoints?:array<array{type:"SLURMCTLD"|"SLURMDBD", privateIpAddress:string, publicIpAddress?:string, port:string}>, errorInfo?:array<array{code?:string, message?:string}>}}>
     */
    public function createCluster(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, scheduler:array{type:"SLURM", version:string}, size:"SMALL"|"MEDIUM"|"LARGE", networking:array{subnetIds?:array<string>, securityGroupIds?:array<string>}, slurmConfiguration?:array{scaleDownIdleTimeInSeconds?:int, slurmCustomSettings?:array<array{parameterName:string, parameterValue:string}>}, clientToken?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{cluster?:array{name:string, id:string, arn:string, status:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"DELETE_FAILED"|"UPDATE_FAILED", createdAt:int|string|\DateTimeInterface, modifiedAt:int|string|\DateTimeInterface, scheduler:array{type:"SLURM", version:string}, size:"SMALL"|"MEDIUM"|"LARGE", slurmConfiguration?:array{scaleDownIdleTimeInSeconds?:int, slurmCustomSettings?:array<array{parameterName:string, parameterValue:string}>, authKey?:array{secretArn:string, secretVersion:string}}, networking:array{subnetIds?:array<string>, securityGroupIds?:array<string>}, endpoints?:array<array{type:"SLURMCTLD"|"SLURMDBD", privateIpAddress:string, publicIpAddress?:string, port:string}>, errorInfo?:array<array{code?:string, message?:string}>}}>
     */
    public function createClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterIdentifier:string, computeNodeGroupName:string, amiId?:string, subnetIds:array<string>, purchaseOption?:"ONDEMAND"|"SPOT", customLaunchTemplate:array{id:string, version:string}, iamInstanceProfileArn:string, scalingConfiguration:array{minInstanceCount:int, maxInstanceCount:int}, instanceConfigs:array<array{instanceType?:string}>, spotOptions?:array{allocationStrategy?:"lowest-price"|"capacity-optimized"|"price-capacity-optimized"}, slurmConfiguration?:array{slurmCustomSettings?:array<array{parameterName:string, parameterValue:string}>}, clientToken?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{computeNodeGroup?:array{name:string, id:string, arn:string, clusterId:string, createdAt:int|string|\DateTimeInterface, modifiedAt:int|string|\DateTimeInterface, status:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"DELETE_FAILED"|"UPDATE_FAILED"|"DELETED", amiId?:string, subnetIds:array<string>, purchaseOption?:"ONDEMAND"|"SPOT", customLaunchTemplate:array{id:string, version:string}, iamInstanceProfileArn:string, scalingConfiguration:array{minInstanceCount:int, maxInstanceCount:int}, instanceConfigs:array<array{instanceType?:string}>, spotOptions?:array{allocationStrategy?:"lowest-price"|"capacity-optimized"|"price-capacity-optimized"}, slurmConfiguration?:array{slurmCustomSettings?:array<array{parameterName:string, parameterValue:string}>}, errorInfo?:array<array{code?:string, message?:string}>}}>
     */
    public function createComputeNodeGroup(array $args): \AWS\Result { }

    /**
     * @param array{clusterIdentifier:string, computeNodeGroupName:string, amiId?:string, subnetIds:array<string>, purchaseOption?:"ONDEMAND"|"SPOT", customLaunchTemplate:array{id:string, version:string}, iamInstanceProfileArn:string, scalingConfiguration:array{minInstanceCount:int, maxInstanceCount:int}, instanceConfigs:array<array{instanceType?:string}>, spotOptions?:array{allocationStrategy?:"lowest-price"|"capacity-optimized"|"price-capacity-optimized"}, slurmConfiguration?:array{slurmCustomSettings?:array<array{parameterName:string, parameterValue:string}>}, clientToken?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{computeNodeGroup?:array{name:string, id:string, arn:string, clusterId:string, createdAt:int|string|\DateTimeInterface, modifiedAt:int|string|\DateTimeInterface, status:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"DELETE_FAILED"|"UPDATE_FAILED"|"DELETED", amiId?:string, subnetIds:array<string>, purchaseOption?:"ONDEMAND"|"SPOT", customLaunchTemplate:array{id:string, version:string}, iamInstanceProfileArn:string, scalingConfiguration:array{minInstanceCount:int, maxInstanceCount:int}, instanceConfigs:array<array{instanceType?:string}>, spotOptions?:array{allocationStrategy?:"lowest-price"|"capacity-optimized"|"price-capacity-optimized"}, slurmConfiguration?:array{slurmCustomSettings?:array<array{parameterName:string, parameterValue:string}>}, errorInfo?:array<array{code?:string, message?:string}>}}>
     */
    public function createComputeNodeGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterIdentifier:string, queueName:string, computeNodeGroupConfigurations?:array<array{computeNodeGroupId?:string}>, clientToken?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{queue?:array{name:string, id:string, arn:string, clusterId:string, createdAt:int|string|\DateTimeInterface, modifiedAt:int|string|\DateTimeInterface, status:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"DELETE_FAILED"|"UPDATE_FAILED", computeNodeGroupConfigurations:array<array{computeNodeGroupId?:string}>, errorInfo?:array<array{code?:string, message?:string}>}}>
     */
    public function createQueue(array $args): \AWS\Result { }

    /**
     * @param array{clusterIdentifier:string, queueName:string, computeNodeGroupConfigurations?:array<array{computeNodeGroupId?:string}>, clientToken?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{queue?:array{name:string, id:string, arn:string, clusterId:string, createdAt:int|string|\DateTimeInterface, modifiedAt:int|string|\DateTimeInterface, status:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"DELETE_FAILED"|"UPDATE_FAILED", computeNodeGroupConfigurations:array<array{computeNodeGroupId?:string}>, errorInfo?:array<array{code?:string, message?:string}>}}>
     */
    public function createQueueAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterIdentifier:string, clientToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteCluster(array $args): \AWS\Result { }

    /**
     * @param array{clusterIdentifier:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterIdentifier:string, computeNodeGroupIdentifier:string, clientToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteComputeNodeGroup(array $args): \AWS\Result { }

    /**
     * @param array{clusterIdentifier:string, computeNodeGroupIdentifier:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteComputeNodeGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterIdentifier:string, queueIdentifier:string, clientToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteQueue(array $args): \AWS\Result { }

    /**
     * @param array{clusterIdentifier:string, queueIdentifier:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteQueueAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterIdentifier:string} $args
     * @return \AWS\Result<array{cluster?:array{name:string, id:string, arn:string, status:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"DELETE_FAILED"|"UPDATE_FAILED", createdAt:int|string|\DateTimeInterface, modifiedAt:int|string|\DateTimeInterface, scheduler:array{type:"SLURM", version:string}, size:"SMALL"|"MEDIUM"|"LARGE", slurmConfiguration?:array{scaleDownIdleTimeInSeconds?:int, slurmCustomSettings?:array<array{parameterName:string, parameterValue:string}>, authKey?:array{secretArn:string, secretVersion:string}}, networking:array{subnetIds?:array<string>, securityGroupIds?:array<string>}, endpoints?:array<array{type:"SLURMCTLD"|"SLURMDBD", privateIpAddress:string, publicIpAddress?:string, port:string}>, errorInfo?:array<array{code?:string, message?:string}>}}>
     */
    public function getCluster(array $args): \AWS\Result { }

    /**
     * @param array{clusterIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{cluster?:array{name:string, id:string, arn:string, status:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"DELETE_FAILED"|"UPDATE_FAILED", createdAt:int|string|\DateTimeInterface, modifiedAt:int|string|\DateTimeInterface, scheduler:array{type:"SLURM", version:string}, size:"SMALL"|"MEDIUM"|"LARGE", slurmConfiguration?:array{scaleDownIdleTimeInSeconds?:int, slurmCustomSettings?:array<array{parameterName:string, parameterValue:string}>, authKey?:array{secretArn:string, secretVersion:string}}, networking:array{subnetIds?:array<string>, securityGroupIds?:array<string>}, endpoints?:array<array{type:"SLURMCTLD"|"SLURMDBD", privateIpAddress:string, publicIpAddress?:string, port:string}>, errorInfo?:array<array{code?:string, message?:string}>}}>
     */
    public function getClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterIdentifier:string, computeNodeGroupIdentifier:string} $args
     * @return \AWS\Result<array{computeNodeGroup?:array{name:string, id:string, arn:string, clusterId:string, createdAt:int|string|\DateTimeInterface, modifiedAt:int|string|\DateTimeInterface, status:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"DELETE_FAILED"|"UPDATE_FAILED"|"DELETED", amiId?:string, subnetIds:array<string>, purchaseOption?:"ONDEMAND"|"SPOT", customLaunchTemplate:array{id:string, version:string}, iamInstanceProfileArn:string, scalingConfiguration:array{minInstanceCount:int, maxInstanceCount:int}, instanceConfigs:array<array{instanceType?:string}>, spotOptions?:array{allocationStrategy?:"lowest-price"|"capacity-optimized"|"price-capacity-optimized"}, slurmConfiguration?:array{slurmCustomSettings?:array<array{parameterName:string, parameterValue:string}>}, errorInfo?:array<array{code?:string, message?:string}>}}>
     */
    public function getComputeNodeGroup(array $args): \AWS\Result { }

    /**
     * @param array{clusterIdentifier:string, computeNodeGroupIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{computeNodeGroup?:array{name:string, id:string, arn:string, clusterId:string, createdAt:int|string|\DateTimeInterface, modifiedAt:int|string|\DateTimeInterface, status:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"DELETE_FAILED"|"UPDATE_FAILED"|"DELETED", amiId?:string, subnetIds:array<string>, purchaseOption?:"ONDEMAND"|"SPOT", customLaunchTemplate:array{id:string, version:string}, iamInstanceProfileArn:string, scalingConfiguration:array{minInstanceCount:int, maxInstanceCount:int}, instanceConfigs:array<array{instanceType?:string}>, spotOptions?:array{allocationStrategy?:"lowest-price"|"capacity-optimized"|"price-capacity-optimized"}, slurmConfiguration?:array{slurmCustomSettings?:array<array{parameterName:string, parameterValue:string}>}, errorInfo?:array<array{code?:string, message?:string}>}}>
     */
    public function getComputeNodeGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterIdentifier:string, queueIdentifier:string} $args
     * @return \AWS\Result<array{queue?:array{name:string, id:string, arn:string, clusterId:string, createdAt:int|string|\DateTimeInterface, modifiedAt:int|string|\DateTimeInterface, status:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"DELETE_FAILED"|"UPDATE_FAILED", computeNodeGroupConfigurations:array<array{computeNodeGroupId?:string}>, errorInfo?:array<array{code?:string, message?:string}>}}>
     */
    public function getQueue(array $args): \AWS\Result { }

    /**
     * @param array{clusterIdentifier:string, queueIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{queue?:array{name:string, id:string, arn:string, clusterId:string, createdAt:int|string|\DateTimeInterface, modifiedAt:int|string|\DateTimeInterface, status:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"DELETE_FAILED"|"UPDATE_FAILED", computeNodeGroupConfigurations:array<array{computeNodeGroupId?:string}>, errorInfo?:array<array{code?:string, message?:string}>}}>
     */
    public function getQueueAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{clusters:array<array{name:string, id:string, arn:string, createdAt:int|string|\DateTimeInterface, modifiedAt:int|string|\DateTimeInterface, status:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"DELETE_FAILED"|"UPDATE_FAILED"}>, nextToken?:string}>
     */
    public function listClusters(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{clusters:array<array{name:string, id:string, arn:string, createdAt:int|string|\DateTimeInterface, modifiedAt:int|string|\DateTimeInterface, status:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"DELETE_FAILED"|"UPDATE_FAILED"}>, nextToken?:string}>
     */
    public function listClustersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterIdentifier:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{computeNodeGroups:array<array{name:string, id:string, arn:string, clusterId:string, createdAt:int|string|\DateTimeInterface, modifiedAt:int|string|\DateTimeInterface, status:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"DELETE_FAILED"|"UPDATE_FAILED"|"DELETED"}>, nextToken?:string}>
     */
    public function listComputeNodeGroups(array $args): \AWS\Result { }

    /**
     * @param array{clusterIdentifier:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{computeNodeGroups:array<array{name:string, id:string, arn:string, clusterId:string, createdAt:int|string|\DateTimeInterface, modifiedAt:int|string|\DateTimeInterface, status:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"DELETE_FAILED"|"UPDATE_FAILED"|"DELETED"}>, nextToken?:string}>
     */
    public function listComputeNodeGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterIdentifier:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{queues:array<array{name:string, id:string, arn:string, clusterId:string, createdAt:int|string|\DateTimeInterface, modifiedAt:int|string|\DateTimeInterface, status:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"DELETE_FAILED"|"UPDATE_FAILED"}>, nextToken?:string}>
     */
    public function listQueues(array $args): \AWS\Result { }

    /**
     * @param array{clusterIdentifier:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{queues:array<array{name:string, id:string, arn:string, clusterId:string, createdAt:int|string|\DateTimeInterface, modifiedAt:int|string|\DateTimeInterface, status:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"DELETE_FAILED"|"UPDATE_FAILED"}>, nextToken?:string}>
     */
    public function listQueuesAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{clusterIdentifier:string, bootstrapId:string} $args
     * @return \AWS\Result<array{nodeID:string, sharedSecret:string, endpoints:array<array{type:"SLURMCTLD"|"SLURMDBD", privateIpAddress:string, publicIpAddress?:string, port:string}>}>
     */
    public function registerComputeNodeGroupInstance(array $args): \AWS\Result { }

    /**
     * @param array{clusterIdentifier:string, bootstrapId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nodeID:string, sharedSecret:string, endpoints:array<array{type:"SLURMCTLD"|"SLURMDBD", privateIpAddress:string, publicIpAddress?:string, port:string}>}>
     */
    public function registerComputeNodeGroupInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

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

    /**
     * @param array{clusterIdentifier:string, computeNodeGroupIdentifier:string, amiId?:string, subnetIds?:array<string>, customLaunchTemplate?:array{id:string, version:string}, purchaseOption?:"ONDEMAND"|"SPOT", spotOptions?:array{allocationStrategy?:"lowest-price"|"capacity-optimized"|"price-capacity-optimized"}, scalingConfiguration?:array{minInstanceCount:int, maxInstanceCount:int}, iamInstanceProfileArn?:string, slurmConfiguration?:array{slurmCustomSettings?:array<array{parameterName:string, parameterValue:string}>}, clientToken?:string} $args
     * @return \AWS\Result<array{computeNodeGroup?:array{name:string, id:string, arn:string, clusterId:string, createdAt:int|string|\DateTimeInterface, modifiedAt:int|string|\DateTimeInterface, status:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"DELETE_FAILED"|"UPDATE_FAILED"|"DELETED", amiId?:string, subnetIds:array<string>, purchaseOption?:"ONDEMAND"|"SPOT", customLaunchTemplate:array{id:string, version:string}, iamInstanceProfileArn:string, scalingConfiguration:array{minInstanceCount:int, maxInstanceCount:int}, instanceConfigs:array<array{instanceType?:string}>, spotOptions?:array{allocationStrategy?:"lowest-price"|"capacity-optimized"|"price-capacity-optimized"}, slurmConfiguration?:array{slurmCustomSettings?:array<array{parameterName:string, parameterValue:string}>}, errorInfo?:array<array{code?:string, message?:string}>}}>
     */
    public function updateComputeNodeGroup(array $args): \AWS\Result { }

    /**
     * @param array{clusterIdentifier:string, computeNodeGroupIdentifier:string, amiId?:string, subnetIds?:array<string>, customLaunchTemplate?:array{id:string, version:string}, purchaseOption?:"ONDEMAND"|"SPOT", spotOptions?:array{allocationStrategy?:"lowest-price"|"capacity-optimized"|"price-capacity-optimized"}, scalingConfiguration?:array{minInstanceCount:int, maxInstanceCount:int}, iamInstanceProfileArn?:string, slurmConfiguration?:array{slurmCustomSettings?:array<array{parameterName:string, parameterValue:string}>}, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{computeNodeGroup?:array{name:string, id:string, arn:string, clusterId:string, createdAt:int|string|\DateTimeInterface, modifiedAt:int|string|\DateTimeInterface, status:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"DELETE_FAILED"|"UPDATE_FAILED"|"DELETED", amiId?:string, subnetIds:array<string>, purchaseOption?:"ONDEMAND"|"SPOT", customLaunchTemplate:array{id:string, version:string}, iamInstanceProfileArn:string, scalingConfiguration:array{minInstanceCount:int, maxInstanceCount:int}, instanceConfigs:array<array{instanceType?:string}>, spotOptions?:array{allocationStrategy?:"lowest-price"|"capacity-optimized"|"price-capacity-optimized"}, slurmConfiguration?:array{slurmCustomSettings?:array<array{parameterName:string, parameterValue:string}>}, errorInfo?:array<array{code?:string, message?:string}>}}>
     */
    public function updateComputeNodeGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterIdentifier:string, queueIdentifier:string, computeNodeGroupConfigurations?:array<array{computeNodeGroupId?:string}>, clientToken?:string} $args
     * @return \AWS\Result<array{queue?:array{name:string, id:string, arn:string, clusterId:string, createdAt:int|string|\DateTimeInterface, modifiedAt:int|string|\DateTimeInterface, status:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"DELETE_FAILED"|"UPDATE_FAILED", computeNodeGroupConfigurations:array<array{computeNodeGroupId?:string}>, errorInfo?:array<array{code?:string, message?:string}>}}>
     */
    public function updateQueue(array $args): \AWS\Result { }

    /**
     * @param array{clusterIdentifier:string, queueIdentifier:string, computeNodeGroupConfigurations?:array<array{computeNodeGroupId?:string}>, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{queue?:array{name:string, id:string, arn:string, clusterId:string, createdAt:int|string|\DateTimeInterface, modifiedAt:int|string|\DateTimeInterface, status:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"DELETE_FAILED"|"UPDATE_FAILED", computeNodeGroupConfigurations:array<array{computeNodeGroupId?:string}>, errorInfo?:array<array{code?:string, message?:string}>}}>
     */
    public function updateQueueAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
