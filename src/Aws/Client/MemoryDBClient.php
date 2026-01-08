<?php
namespace AWS\MemoryDB;

class MemoryDBClient
{
    /**
     * @param array{ClusterNames:array<string>, ServiceUpdate?:array{ServiceUpdateNameToApply?:string}} $args
     * @return \AWS\Result<array{ProcessedClusters?:array<array{Name?:string, Description?:string, Status?:string, PendingUpdates?:array{Resharding?:array{SlotMigration?:array{ProgressPercentage?:float}}, ACLs?:array{ACLToApply?:string}, ServiceUpdates?:array<array{ServiceUpdateName?:string, Status?:"available"|"in-progress"|"complete"|"scheduled"}>}, MultiRegionClusterName?:string, NumberOfShards?:int, Shards?:array<array{Name?:string, Status?:string, Slots?:string, Nodes?:array<array{Name?:string, Status?:string, AvailabilityZone?:string, CreateTime?:int|string|\DateTimeInterface, Endpoint?:array{Address?:string, Port?:int}}>, NumberOfNodes?:int}>, AvailabilityMode?:"singleaz"|"multiaz", ClusterEndpoint?:array{Address?:string, Port?:int}, NodeType?:string, Engine?:string, EngineVersion?:string, EnginePatchVersion?:string, ParameterGroupName?:string, ParameterGroupStatus?:string, SecurityGroups?:array<array{SecurityGroupId?:string, Status?:string}>, SubnetGroupName?:string, TLSEnabled?:bool, KmsKeyId?:string, ARN?:string, SnsTopicArn?:string, SnsTopicStatus?:string, SnapshotRetentionLimit?:int, MaintenanceWindow?:string, SnapshotWindow?:string, ACLName?:string, AutoMinorVersionUpgrade?:bool, DataTiering?:"true"|"false"}>, UnprocessedClusters?:array<array{ClusterName?:string, ErrorType?:string, ErrorMessage?:string}>}>
     */
    public function batchUpdateCluster(array $args): \AWS\Result { }

    /**
     * @param array{ClusterNames:array<string>, ServiceUpdate?:array{ServiceUpdateNameToApply?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProcessedClusters?:array<array{Name?:string, Description?:string, Status?:string, PendingUpdates?:array{Resharding?:array{SlotMigration?:array{ProgressPercentage?:float}}, ACLs?:array{ACLToApply?:string}, ServiceUpdates?:array<array{ServiceUpdateName?:string, Status?:"available"|"in-progress"|"complete"|"scheduled"}>}, MultiRegionClusterName?:string, NumberOfShards?:int, Shards?:array<array{Name?:string, Status?:string, Slots?:string, Nodes?:array<array{Name?:string, Status?:string, AvailabilityZone?:string, CreateTime?:int|string|\DateTimeInterface, Endpoint?:array{Address?:string, Port?:int}}>, NumberOfNodes?:int}>, AvailabilityMode?:"singleaz"|"multiaz", ClusterEndpoint?:array{Address?:string, Port?:int}, NodeType?:string, Engine?:string, EngineVersion?:string, EnginePatchVersion?:string, ParameterGroupName?:string, ParameterGroupStatus?:string, SecurityGroups?:array<array{SecurityGroupId?:string, Status?:string}>, SubnetGroupName?:string, TLSEnabled?:bool, KmsKeyId?:string, ARN?:string, SnsTopicArn?:string, SnsTopicStatus?:string, SnapshotRetentionLimit?:int, MaintenanceWindow?:string, SnapshotWindow?:string, ACLName?:string, AutoMinorVersionUpgrade?:bool, DataTiering?:"true"|"false"}>, UnprocessedClusters?:array<array{ClusterName?:string, ErrorType?:string, ErrorMessage?:string}>}>
     */
    public function batchUpdateClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SourceSnapshotName:string, TargetSnapshotName:string, TargetBucket?:string, KmsKeyId?:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{Snapshot?:array{Name?:string, Status?:string, Source?:string, KmsKeyId?:string, ARN?:string, ClusterConfiguration?:array{Name?:string, Description?:string, NodeType?:string, Engine?:string, EngineVersion?:string, MaintenanceWindow?:string, TopicArn?:string, Port?:int, ParameterGroupName?:string, SubnetGroupName?:string, VpcId?:string, SnapshotRetentionLimit?:int, SnapshotWindow?:string, NumShards?:int, Shards?:array<array{Name?:string, Configuration?:array{Slots?:string, ReplicaCount?:int}, Size?:string, SnapshotCreationTime?:int|string|\DateTimeInterface}>, MultiRegionParameterGroupName?:string, MultiRegionClusterName?:string}, DataTiering?:"true"|"false"}}>
     */
    public function copySnapshot(array $args): \AWS\Result { }

    /**
     * @param array{SourceSnapshotName:string, TargetSnapshotName:string, TargetBucket?:string, KmsKeyId?:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Snapshot?:array{Name?:string, Status?:string, Source?:string, KmsKeyId?:string, ARN?:string, ClusterConfiguration?:array{Name?:string, Description?:string, NodeType?:string, Engine?:string, EngineVersion?:string, MaintenanceWindow?:string, TopicArn?:string, Port?:int, ParameterGroupName?:string, SubnetGroupName?:string, VpcId?:string, SnapshotRetentionLimit?:int, SnapshotWindow?:string, NumShards?:int, Shards?:array<array{Name?:string, Configuration?:array{Slots?:string, ReplicaCount?:int}, Size?:string, SnapshotCreationTime?:int|string|\DateTimeInterface}>, MultiRegionParameterGroupName?:string, MultiRegionClusterName?:string}, DataTiering?:"true"|"false"}}>
     */
    public function copySnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ACLName:string, UserNames?:array<string>, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{ACL?:array{Name?:string, Status?:string, UserNames?:array<string>, MinimumEngineVersion?:string, PendingChanges?:array{UserNamesToRemove?:array<string>, UserNamesToAdd?:array<string>}, Clusters?:array<string>, ARN?:string}}>
     */
    public function createACL(array $args): \AWS\Result { }

    /**
     * @param array{ACLName:string, UserNames?:array<string>, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ACL?:array{Name?:string, Status?:string, UserNames?:array<string>, MinimumEngineVersion?:string, PendingChanges?:array{UserNamesToRemove?:array<string>, UserNamesToAdd?:array<string>}, Clusters?:array<string>, ARN?:string}}>
     */
    public function createACLAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterName:string, NodeType:string, MultiRegionClusterName?:string, ParameterGroupName?:string, Description?:string, NumShards?:int, NumReplicasPerShard?:int, SubnetGroupName?:string, SecurityGroupIds?:array<string>, MaintenanceWindow?:string, Port?:int, SnsTopicArn?:string, TLSEnabled?:bool, KmsKeyId?:string, SnapshotArns?:array<string>, SnapshotName?:string, SnapshotRetentionLimit?:int, Tags?:array<array{Key?:string, Value?:string}>, SnapshotWindow?:string, ACLName:string, Engine?:string, EngineVersion?:string, AutoMinorVersionUpgrade?:bool, DataTiering?:bool} $args
     * @return \AWS\Result<array{Cluster?:array{Name?:string, Description?:string, Status?:string, PendingUpdates?:array{Resharding?:array{SlotMigration?:array{ProgressPercentage?:float}}, ACLs?:array{ACLToApply?:string}, ServiceUpdates?:array<array{ServiceUpdateName?:string, Status?:"available"|"in-progress"|"complete"|"scheduled"}>}, MultiRegionClusterName?:string, NumberOfShards?:int, Shards?:array<array{Name?:string, Status?:string, Slots?:string, Nodes?:array<array{Name?:string, Status?:string, AvailabilityZone?:string, CreateTime?:int|string|\DateTimeInterface, Endpoint?:array{Address?:string, Port?:int}}>, NumberOfNodes?:int}>, AvailabilityMode?:"singleaz"|"multiaz", ClusterEndpoint?:array{Address?:string, Port?:int}, NodeType?:string, Engine?:string, EngineVersion?:string, EnginePatchVersion?:string, ParameterGroupName?:string, ParameterGroupStatus?:string, SecurityGroups?:array<array{SecurityGroupId?:string, Status?:string}>, SubnetGroupName?:string, TLSEnabled?:bool, KmsKeyId?:string, ARN?:string, SnsTopicArn?:string, SnsTopicStatus?:string, SnapshotRetentionLimit?:int, MaintenanceWindow?:string, SnapshotWindow?:string, ACLName?:string, AutoMinorVersionUpgrade?:bool, DataTiering?:"true"|"false"}}>
     */
    public function createCluster(array $args): \AWS\Result { }

    /**
     * @param array{ClusterName:string, NodeType:string, MultiRegionClusterName?:string, ParameterGroupName?:string, Description?:string, NumShards?:int, NumReplicasPerShard?:int, SubnetGroupName?:string, SecurityGroupIds?:array<string>, MaintenanceWindow?:string, Port?:int, SnsTopicArn?:string, TLSEnabled?:bool, KmsKeyId?:string, SnapshotArns?:array<string>, SnapshotName?:string, SnapshotRetentionLimit?:int, Tags?:array<array{Key?:string, Value?:string}>, SnapshotWindow?:string, ACLName:string, Engine?:string, EngineVersion?:string, AutoMinorVersionUpgrade?:bool, DataTiering?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cluster?:array{Name?:string, Description?:string, Status?:string, PendingUpdates?:array{Resharding?:array{SlotMigration?:array{ProgressPercentage?:float}}, ACLs?:array{ACLToApply?:string}, ServiceUpdates?:array<array{ServiceUpdateName?:string, Status?:"available"|"in-progress"|"complete"|"scheduled"}>}, MultiRegionClusterName?:string, NumberOfShards?:int, Shards?:array<array{Name?:string, Status?:string, Slots?:string, Nodes?:array<array{Name?:string, Status?:string, AvailabilityZone?:string, CreateTime?:int|string|\DateTimeInterface, Endpoint?:array{Address?:string, Port?:int}}>, NumberOfNodes?:int}>, AvailabilityMode?:"singleaz"|"multiaz", ClusterEndpoint?:array{Address?:string, Port?:int}, NodeType?:string, Engine?:string, EngineVersion?:string, EnginePatchVersion?:string, ParameterGroupName?:string, ParameterGroupStatus?:string, SecurityGroups?:array<array{SecurityGroupId?:string, Status?:string}>, SubnetGroupName?:string, TLSEnabled?:bool, KmsKeyId?:string, ARN?:string, SnsTopicArn?:string, SnsTopicStatus?:string, SnapshotRetentionLimit?:int, MaintenanceWindow?:string, SnapshotWindow?:string, ACLName?:string, AutoMinorVersionUpgrade?:bool, DataTiering?:"true"|"false"}}>
     */
    public function createClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MultiRegionClusterNameSuffix:string, Description?:string, Engine?:string, EngineVersion?:string, NodeType:string, MultiRegionParameterGroupName?:string, NumShards?:int, TLSEnabled?:bool, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{MultiRegionCluster?:array{MultiRegionClusterName?:string, Description?:string, Status?:string, NodeType?:string, Engine?:string, EngineVersion?:string, NumberOfShards?:int, Clusters?:array<array{ClusterName?:string, Region?:string, Status?:string, ARN?:string}>, MultiRegionParameterGroupName?:string, TLSEnabled?:bool, ARN?:string}}>
     */
    public function createMultiRegionCluster(array $args): \AWS\Result { }

    /**
     * @param array{MultiRegionClusterNameSuffix:string, Description?:string, Engine?:string, EngineVersion?:string, NodeType:string, MultiRegionParameterGroupName?:string, NumShards?:int, TLSEnabled?:bool, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{MultiRegionCluster?:array{MultiRegionClusterName?:string, Description?:string, Status?:string, NodeType?:string, Engine?:string, EngineVersion?:string, NumberOfShards?:int, Clusters?:array<array{ClusterName?:string, Region?:string, Status?:string, ARN?:string}>, MultiRegionParameterGroupName?:string, TLSEnabled?:bool, ARN?:string}}>
     */
    public function createMultiRegionClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ParameterGroupName:string, Family:string, Description?:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{ParameterGroup?:array{Name?:string, Family?:string, Description?:string, ARN?:string}}>
     */
    public function createParameterGroup(array $args): \AWS\Result { }

    /**
     * @param array{ParameterGroupName:string, Family:string, Description?:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ParameterGroup?:array{Name?:string, Family?:string, Description?:string, ARN?:string}}>
     */
    public function createParameterGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterName:string, SnapshotName:string, KmsKeyId?:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{Snapshot?:array{Name?:string, Status?:string, Source?:string, KmsKeyId?:string, ARN?:string, ClusterConfiguration?:array{Name?:string, Description?:string, NodeType?:string, Engine?:string, EngineVersion?:string, MaintenanceWindow?:string, TopicArn?:string, Port?:int, ParameterGroupName?:string, SubnetGroupName?:string, VpcId?:string, SnapshotRetentionLimit?:int, SnapshotWindow?:string, NumShards?:int, Shards?:array<array{Name?:string, Configuration?:array{Slots?:string, ReplicaCount?:int}, Size?:string, SnapshotCreationTime?:int|string|\DateTimeInterface}>, MultiRegionParameterGroupName?:string, MultiRegionClusterName?:string}, DataTiering?:"true"|"false"}}>
     */
    public function createSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{ClusterName:string, SnapshotName:string, KmsKeyId?:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Snapshot?:array{Name?:string, Status?:string, Source?:string, KmsKeyId?:string, ARN?:string, ClusterConfiguration?:array{Name?:string, Description?:string, NodeType?:string, Engine?:string, EngineVersion?:string, MaintenanceWindow?:string, TopicArn?:string, Port?:int, ParameterGroupName?:string, SubnetGroupName?:string, VpcId?:string, SnapshotRetentionLimit?:int, SnapshotWindow?:string, NumShards?:int, Shards?:array<array{Name?:string, Configuration?:array{Slots?:string, ReplicaCount?:int}, Size?:string, SnapshotCreationTime?:int|string|\DateTimeInterface}>, MultiRegionParameterGroupName?:string, MultiRegionClusterName?:string}, DataTiering?:"true"|"false"}}>
     */
    public function createSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SubnetGroupName:string, Description?:string, SubnetIds:array<string>, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{SubnetGroup?:array{Name?:string, Description?:string, VpcId?:string, Subnets?:array<array{Identifier?:string, AvailabilityZone?:array{Name?:string}}>, ARN?:string}}>
     */
    public function createSubnetGroup(array $args): \AWS\Result { }

    /**
     * @param array{SubnetGroupName:string, Description?:string, SubnetIds:array<string>, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{SubnetGroup?:array{Name?:string, Description?:string, VpcId?:string, Subnets?:array<array{Identifier?:string, AvailabilityZone?:array{Name?:string}}>, ARN?:string}}>
     */
    public function createSubnetGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName:string, AuthenticationMode:array{Type?:"password"|"iam", Passwords?:array<string>}, AccessString:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{User?:array{Name?:string, Status?:string, AccessString?:string, ACLNames?:array<string>, MinimumEngineVersion?:string, Authentication?:array{Type?:"password"|"no-password"|"iam", PasswordCount?:int}, ARN?:string}}>
     */
    public function createUser(array $args): \AWS\Result { }

    /**
     * @param array{UserName:string, AuthenticationMode:array{Type?:"password"|"iam", Passwords?:array<string>}, AccessString:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{User?:array{Name?:string, Status?:string, AccessString?:string, ACLNames?:array<string>, MinimumEngineVersion?:string, Authentication?:array{Type?:"password"|"no-password"|"iam", PasswordCount?:int}, ARN?:string}}>
     */
    public function createUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ACLName:string} $args
     * @return \AWS\Result<array{ACL?:array{Name?:string, Status?:string, UserNames?:array<string>, MinimumEngineVersion?:string, PendingChanges?:array{UserNamesToRemove?:array<string>, UserNamesToAdd?:array<string>}, Clusters?:array<string>, ARN?:string}}>
     */
    public function deleteACL(array $args): \AWS\Result { }

    /**
     * @param array{ACLName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ACL?:array{Name?:string, Status?:string, UserNames?:array<string>, MinimumEngineVersion?:string, PendingChanges?:array{UserNamesToRemove?:array<string>, UserNamesToAdd?:array<string>}, Clusters?:array<string>, ARN?:string}}>
     */
    public function deleteACLAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterName:string, MultiRegionClusterName?:string, FinalSnapshotName?:string} $args
     * @return \AWS\Result<array{Cluster?:array{Name?:string, Description?:string, Status?:string, PendingUpdates?:array{Resharding?:array{SlotMigration?:array{ProgressPercentage?:float}}, ACLs?:array{ACLToApply?:string}, ServiceUpdates?:array<array{ServiceUpdateName?:string, Status?:"available"|"in-progress"|"complete"|"scheduled"}>}, MultiRegionClusterName?:string, NumberOfShards?:int, Shards?:array<array{Name?:string, Status?:string, Slots?:string, Nodes?:array<array{Name?:string, Status?:string, AvailabilityZone?:string, CreateTime?:int|string|\DateTimeInterface, Endpoint?:array{Address?:string, Port?:int}}>, NumberOfNodes?:int}>, AvailabilityMode?:"singleaz"|"multiaz", ClusterEndpoint?:array{Address?:string, Port?:int}, NodeType?:string, Engine?:string, EngineVersion?:string, EnginePatchVersion?:string, ParameterGroupName?:string, ParameterGroupStatus?:string, SecurityGroups?:array<array{SecurityGroupId?:string, Status?:string}>, SubnetGroupName?:string, TLSEnabled?:bool, KmsKeyId?:string, ARN?:string, SnsTopicArn?:string, SnsTopicStatus?:string, SnapshotRetentionLimit?:int, MaintenanceWindow?:string, SnapshotWindow?:string, ACLName?:string, AutoMinorVersionUpgrade?:bool, DataTiering?:"true"|"false"}}>
     */
    public function deleteCluster(array $args): \AWS\Result { }

    /**
     * @param array{ClusterName:string, MultiRegionClusterName?:string, FinalSnapshotName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cluster?:array{Name?:string, Description?:string, Status?:string, PendingUpdates?:array{Resharding?:array{SlotMigration?:array{ProgressPercentage?:float}}, ACLs?:array{ACLToApply?:string}, ServiceUpdates?:array<array{ServiceUpdateName?:string, Status?:"available"|"in-progress"|"complete"|"scheduled"}>}, MultiRegionClusterName?:string, NumberOfShards?:int, Shards?:array<array{Name?:string, Status?:string, Slots?:string, Nodes?:array<array{Name?:string, Status?:string, AvailabilityZone?:string, CreateTime?:int|string|\DateTimeInterface, Endpoint?:array{Address?:string, Port?:int}}>, NumberOfNodes?:int}>, AvailabilityMode?:"singleaz"|"multiaz", ClusterEndpoint?:array{Address?:string, Port?:int}, NodeType?:string, Engine?:string, EngineVersion?:string, EnginePatchVersion?:string, ParameterGroupName?:string, ParameterGroupStatus?:string, SecurityGroups?:array<array{SecurityGroupId?:string, Status?:string}>, SubnetGroupName?:string, TLSEnabled?:bool, KmsKeyId?:string, ARN?:string, SnsTopicArn?:string, SnsTopicStatus?:string, SnapshotRetentionLimit?:int, MaintenanceWindow?:string, SnapshotWindow?:string, ACLName?:string, AutoMinorVersionUpgrade?:bool, DataTiering?:"true"|"false"}}>
     */
    public function deleteClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MultiRegionClusterName:string} $args
     * @return \AWS\Result<array{MultiRegionCluster?:array{MultiRegionClusterName?:string, Description?:string, Status?:string, NodeType?:string, Engine?:string, EngineVersion?:string, NumberOfShards?:int, Clusters?:array<array{ClusterName?:string, Region?:string, Status?:string, ARN?:string}>, MultiRegionParameterGroupName?:string, TLSEnabled?:bool, ARN?:string}}>
     */
    public function deleteMultiRegionCluster(array $args): \AWS\Result { }

    /**
     * @param array{MultiRegionClusterName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MultiRegionCluster?:array{MultiRegionClusterName?:string, Description?:string, Status?:string, NodeType?:string, Engine?:string, EngineVersion?:string, NumberOfShards?:int, Clusters?:array<array{ClusterName?:string, Region?:string, Status?:string, ARN?:string}>, MultiRegionParameterGroupName?:string, TLSEnabled?:bool, ARN?:string}}>
     */
    public function deleteMultiRegionClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ParameterGroupName:string} $args
     * @return \AWS\Result<array{ParameterGroup?:array{Name?:string, Family?:string, Description?:string, ARN?:string}}>
     */
    public function deleteParameterGroup(array $args): \AWS\Result { }

    /**
     * @param array{ParameterGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ParameterGroup?:array{Name?:string, Family?:string, Description?:string, ARN?:string}}>
     */
    public function deleteParameterGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SnapshotName:string} $args
     * @return \AWS\Result<array{Snapshot?:array{Name?:string, Status?:string, Source?:string, KmsKeyId?:string, ARN?:string, ClusterConfiguration?:array{Name?:string, Description?:string, NodeType?:string, Engine?:string, EngineVersion?:string, MaintenanceWindow?:string, TopicArn?:string, Port?:int, ParameterGroupName?:string, SubnetGroupName?:string, VpcId?:string, SnapshotRetentionLimit?:int, SnapshotWindow?:string, NumShards?:int, Shards?:array<array{Name?:string, Configuration?:array{Slots?:string, ReplicaCount?:int}, Size?:string, SnapshotCreationTime?:int|string|\DateTimeInterface}>, MultiRegionParameterGroupName?:string, MultiRegionClusterName?:string}, DataTiering?:"true"|"false"}}>
     */
    public function deleteSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{SnapshotName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Snapshot?:array{Name?:string, Status?:string, Source?:string, KmsKeyId?:string, ARN?:string, ClusterConfiguration?:array{Name?:string, Description?:string, NodeType?:string, Engine?:string, EngineVersion?:string, MaintenanceWindow?:string, TopicArn?:string, Port?:int, ParameterGroupName?:string, SubnetGroupName?:string, VpcId?:string, SnapshotRetentionLimit?:int, SnapshotWindow?:string, NumShards?:int, Shards?:array<array{Name?:string, Configuration?:array{Slots?:string, ReplicaCount?:int}, Size?:string, SnapshotCreationTime?:int|string|\DateTimeInterface}>, MultiRegionParameterGroupName?:string, MultiRegionClusterName?:string}, DataTiering?:"true"|"false"}}>
     */
    public function deleteSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SubnetGroupName:string} $args
     * @return \AWS\Result<array{SubnetGroup?:array{Name?:string, Description?:string, VpcId?:string, Subnets?:array<array{Identifier?:string, AvailabilityZone?:array{Name?:string}}>, ARN?:string}}>
     */
    public function deleteSubnetGroup(array $args): \AWS\Result { }

    /**
     * @param array{SubnetGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SubnetGroup?:array{Name?:string, Description?:string, VpcId?:string, Subnets?:array<array{Identifier?:string, AvailabilityZone?:array{Name?:string}}>, ARN?:string}}>
     */
    public function deleteSubnetGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName:string} $args
     * @return \AWS\Result<array{User?:array{Name?:string, Status?:string, AccessString?:string, ACLNames?:array<string>, MinimumEngineVersion?:string, Authentication?:array{Type?:"password"|"no-password"|"iam", PasswordCount?:int}, ARN?:string}}>
     */
    public function deleteUser(array $args): \AWS\Result { }

    /**
     * @param array{UserName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{User?:array{Name?:string, Status?:string, AccessString?:string, ACLNames?:array<string>, MinimumEngineVersion?:string, Authentication?:array{Type?:"password"|"no-password"|"iam", PasswordCount?:int}, ARN?:string}}>
     */
    public function deleteUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ACLName?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ACLs?:array<array{Name?:string, Status?:string, UserNames?:array<string>, MinimumEngineVersion?:string, PendingChanges?:array{UserNamesToRemove?:array<string>, UserNamesToAdd?:array<string>}, Clusters?:array<string>, ARN?:string}>, NextToken?:string}>
     */
    public function describeACLs(array $args = []): \AWS\Result { }

    /**
     * @param array{ACLName?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ACLs?:array<array{Name?:string, Status?:string, UserNames?:array<string>, MinimumEngineVersion?:string, PendingChanges?:array{UserNamesToRemove?:array<string>, UserNamesToAdd?:array<string>}, Clusters?:array<string>, ARN?:string}>, NextToken?:string}>
     */
    public function describeACLsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterName?:string, MaxResults?:int, NextToken?:string, ShowShardDetails?:bool} $args
     * @return \AWS\Result<array{NextToken?:string, Clusters?:array<array{Name?:string, Description?:string, Status?:string, PendingUpdates?:array{Resharding?:array{SlotMigration?:array{ProgressPercentage?:float}}, ACLs?:array{ACLToApply?:string}, ServiceUpdates?:array<array{ServiceUpdateName?:string, Status?:"available"|"in-progress"|"complete"|"scheduled"}>}, MultiRegionClusterName?:string, NumberOfShards?:int, Shards?:array<array{Name?:string, Status?:string, Slots?:string, Nodes?:array<array{Name?:string, Status?:string, AvailabilityZone?:string, CreateTime?:int|string|\DateTimeInterface, Endpoint?:array{Address?:string, Port?:int}}>, NumberOfNodes?:int}>, AvailabilityMode?:"singleaz"|"multiaz", ClusterEndpoint?:array{Address?:string, Port?:int}, NodeType?:string, Engine?:string, EngineVersion?:string, EnginePatchVersion?:string, ParameterGroupName?:string, ParameterGroupStatus?:string, SecurityGroups?:array<array{SecurityGroupId?:string, Status?:string}>, SubnetGroupName?:string, TLSEnabled?:bool, KmsKeyId?:string, ARN?:string, SnsTopicArn?:string, SnsTopicStatus?:string, SnapshotRetentionLimit?:int, MaintenanceWindow?:string, SnapshotWindow?:string, ACLName?:string, AutoMinorVersionUpgrade?:bool, DataTiering?:"true"|"false"}>}>
     */
    public function describeClusters(array $args = []): \AWS\Result { }

    /**
     * @param array{ClusterName?:string, MaxResults?:int, NextToken?:string, ShowShardDetails?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Clusters?:array<array{Name?:string, Description?:string, Status?:string, PendingUpdates?:array{Resharding?:array{SlotMigration?:array{ProgressPercentage?:float}}, ACLs?:array{ACLToApply?:string}, ServiceUpdates?:array<array{ServiceUpdateName?:string, Status?:"available"|"in-progress"|"complete"|"scheduled"}>}, MultiRegionClusterName?:string, NumberOfShards?:int, Shards?:array<array{Name?:string, Status?:string, Slots?:string, Nodes?:array<array{Name?:string, Status?:string, AvailabilityZone?:string, CreateTime?:int|string|\DateTimeInterface, Endpoint?:array{Address?:string, Port?:int}}>, NumberOfNodes?:int}>, AvailabilityMode?:"singleaz"|"multiaz", ClusterEndpoint?:array{Address?:string, Port?:int}, NodeType?:string, Engine?:string, EngineVersion?:string, EnginePatchVersion?:string, ParameterGroupName?:string, ParameterGroupStatus?:string, SecurityGroups?:array<array{SecurityGroupId?:string, Status?:string}>, SubnetGroupName?:string, TLSEnabled?:bool, KmsKeyId?:string, ARN?:string, SnsTopicArn?:string, SnsTopicStatus?:string, SnapshotRetentionLimit?:int, MaintenanceWindow?:string, SnapshotWindow?:string, ACLName?:string, AutoMinorVersionUpgrade?:bool, DataTiering?:"true"|"false"}>}>
     */
    public function describeClustersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Engine?:string, EngineVersion?:string, ParameterGroupFamily?:string, MaxResults?:int, NextToken?:string, DefaultOnly?:bool} $args
     * @return \AWS\Result<array{NextToken?:string, EngineVersions?:array<array{Engine?:string, EngineVersion?:string, EnginePatchVersion?:string, ParameterGroupFamily?:string}>}>
     */
    public function describeEngineVersions(array $args = []): \AWS\Result { }

    /**
     * @param array{Engine?:string, EngineVersion?:string, ParameterGroupFamily?:string, MaxResults?:int, NextToken?:string, DefaultOnly?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, EngineVersions?:array<array{Engine?:string, EngineVersion?:string, EnginePatchVersion?:string, ParameterGroupFamily?:string}>}>
     */
    public function describeEngineVersionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SourceName?:string, SourceType?:"node"|"parameter-group"|"subnet-group"|"cluster"|"user"|"acl", StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Duration?:int, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Events?:array<array{SourceName?:string, SourceType?:"node"|"parameter-group"|"subnet-group"|"cluster"|"user"|"acl", Message?:string, Date?:int|string|\DateTimeInterface}>}>
     */
    public function describeEvents(array $args = []): \AWS\Result { }

    /**
     * @param array{SourceName?:string, SourceType?:"node"|"parameter-group"|"subnet-group"|"cluster"|"user"|"acl", StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Duration?:int, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Events?:array<array{SourceName?:string, SourceType?:"node"|"parameter-group"|"subnet-group"|"cluster"|"user"|"acl", Message?:string, Date?:int|string|\DateTimeInterface}>}>
     */
    public function describeEventsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MultiRegionClusterName?:string, MaxResults?:int, NextToken?:string, ShowClusterDetails?:bool} $args
     * @return \AWS\Result<array{NextToken?:string, MultiRegionClusters?:array<array{MultiRegionClusterName?:string, Description?:string, Status?:string, NodeType?:string, Engine?:string, EngineVersion?:string, NumberOfShards?:int, Clusters?:array<array{ClusterName?:string, Region?:string, Status?:string, ARN?:string}>, MultiRegionParameterGroupName?:string, TLSEnabled?:bool, ARN?:string}>}>
     */
    public function describeMultiRegionClusters(array $args = []): \AWS\Result { }

    /**
     * @param array{MultiRegionClusterName?:string, MaxResults?:int, NextToken?:string, ShowClusterDetails?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, MultiRegionClusters?:array<array{MultiRegionClusterName?:string, Description?:string, Status?:string, NodeType?:string, Engine?:string, EngineVersion?:string, NumberOfShards?:int, Clusters?:array<array{ClusterName?:string, Region?:string, Status?:string, ARN?:string}>, MultiRegionParameterGroupName?:string, TLSEnabled?:bool, ARN?:string}>}>
     */
    public function describeMultiRegionClustersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ParameterGroupName?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, ParameterGroups?:array<array{Name?:string, Family?:string, Description?:string, ARN?:string}>}>
     */
    public function describeParameterGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{ParameterGroupName?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, ParameterGroups?:array<array{Name?:string, Family?:string, Description?:string, ARN?:string}>}>
     */
    public function describeParameterGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ParameterGroupName:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Parameters?:array<array{Name?:string, Value?:string, Description?:string, DataType?:string, AllowedValues?:string, MinimumEngineVersion?:string}>}>
     */
    public function describeParameters(array $args): \AWS\Result { }

    /**
     * @param array{ParameterGroupName:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Parameters?:array<array{Name?:string, Value?:string, Description?:string, DataType?:string, AllowedValues?:string, MinimumEngineVersion?:string}>}>
     */
    public function describeParametersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ReservationId?:string, ReservedNodesOfferingId?:string, NodeType?:string, Duration?:string, OfferingType?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, ReservedNodes?:array<array{ReservationId?:string, ReservedNodesOfferingId?:string, NodeType?:string, StartTime?:int|string|\DateTimeInterface, Duration?:int, FixedPrice?:float, NodeCount?:int, OfferingType?:string, State?:string, RecurringCharges?:array<array{RecurringChargeAmount?:float, RecurringChargeFrequency?:string}>, ARN?:string}>}>
     */
    public function describeReservedNodes(array $args = []): \AWS\Result { }

    /**
     * @param array{ReservationId?:string, ReservedNodesOfferingId?:string, NodeType?:string, Duration?:string, OfferingType?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, ReservedNodes?:array<array{ReservationId?:string, ReservedNodesOfferingId?:string, NodeType?:string, StartTime?:int|string|\DateTimeInterface, Duration?:int, FixedPrice?:float, NodeCount?:int, OfferingType?:string, State?:string, RecurringCharges?:array<array{RecurringChargeAmount?:float, RecurringChargeFrequency?:string}>, ARN?:string}>}>
     */
    public function describeReservedNodesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ReservedNodesOfferingId?:string, NodeType?:string, Duration?:string, OfferingType?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, ReservedNodesOfferings?:array<array{ReservedNodesOfferingId?:string, NodeType?:string, Duration?:int, FixedPrice?:float, OfferingType?:string, RecurringCharges?:array<array{RecurringChargeAmount?:float, RecurringChargeFrequency?:string}>}>}>
     */
    public function describeReservedNodesOfferings(array $args = []): \AWS\Result { }

    /**
     * @param array{ReservedNodesOfferingId?:string, NodeType?:string, Duration?:string, OfferingType?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, ReservedNodesOfferings?:array<array{ReservedNodesOfferingId?:string, NodeType?:string, Duration?:int, FixedPrice?:float, OfferingType?:string, RecurringCharges?:array<array{RecurringChargeAmount?:float, RecurringChargeFrequency?:string}>}>}>
     */
    public function describeReservedNodesOfferingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceUpdateName?:string, ClusterNames?:array<string>, Status?:array<"available"|"in-progress"|"complete"|"scheduled">, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, ServiceUpdates?:array<array{ClusterName?:string, ServiceUpdateName?:string, ReleaseDate?:int|string|\DateTimeInterface, Description?:string, Status?:"available"|"in-progress"|"complete"|"scheduled", Type?:"security-update", Engine?:string, NodesUpdated?:string, AutoUpdateStartDate?:int|string|\DateTimeInterface}>}>
     */
    public function describeServiceUpdates(array $args = []): \AWS\Result { }

    /**
     * @param array{ServiceUpdateName?:string, ClusterNames?:array<string>, Status?:array<"available"|"in-progress"|"complete"|"scheduled">, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, ServiceUpdates?:array<array{ClusterName?:string, ServiceUpdateName?:string, ReleaseDate?:int|string|\DateTimeInterface, Description?:string, Status?:"available"|"in-progress"|"complete"|"scheduled", Type?:"security-update", Engine?:string, NodesUpdated?:string, AutoUpdateStartDate?:int|string|\DateTimeInterface}>}>
     */
    public function describeServiceUpdatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterName?:string, SnapshotName?:string, Source?:string, NextToken?:string, MaxResults?:int, ShowDetail?:bool} $args
     * @return \AWS\Result<array{NextToken?:string, Snapshots?:array<array{Name?:string, Status?:string, Source?:string, KmsKeyId?:string, ARN?:string, ClusterConfiguration?:array{Name?:string, Description?:string, NodeType?:string, Engine?:string, EngineVersion?:string, MaintenanceWindow?:string, TopicArn?:string, Port?:int, ParameterGroupName?:string, SubnetGroupName?:string, VpcId?:string, SnapshotRetentionLimit?:int, SnapshotWindow?:string, NumShards?:int, Shards?:array<array{Name?:string, Configuration?:array{Slots?:string, ReplicaCount?:int}, Size?:string, SnapshotCreationTime?:int|string|\DateTimeInterface}>, MultiRegionParameterGroupName?:string, MultiRegionClusterName?:string}, DataTiering?:"true"|"false"}>}>
     */
    public function describeSnapshots(array $args = []): \AWS\Result { }

    /**
     * @param array{ClusterName?:string, SnapshotName?:string, Source?:string, NextToken?:string, MaxResults?:int, ShowDetail?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Snapshots?:array<array{Name?:string, Status?:string, Source?:string, KmsKeyId?:string, ARN?:string, ClusterConfiguration?:array{Name?:string, Description?:string, NodeType?:string, Engine?:string, EngineVersion?:string, MaintenanceWindow?:string, TopicArn?:string, Port?:int, ParameterGroupName?:string, SubnetGroupName?:string, VpcId?:string, SnapshotRetentionLimit?:int, SnapshotWindow?:string, NumShards?:int, Shards?:array<array{Name?:string, Configuration?:array{Slots?:string, ReplicaCount?:int}, Size?:string, SnapshotCreationTime?:int|string|\DateTimeInterface}>, MultiRegionParameterGroupName?:string, MultiRegionClusterName?:string}, DataTiering?:"true"|"false"}>}>
     */
    public function describeSnapshotsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SubnetGroupName?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, SubnetGroups?:array<array{Name?:string, Description?:string, VpcId?:string, Subnets?:array<array{Identifier?:string, AvailabilityZone?:array{Name?:string}}>, ARN?:string}>}>
     */
    public function describeSubnetGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{SubnetGroupName?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, SubnetGroups?:array<array{Name?:string, Description?:string, VpcId?:string, Subnets?:array<array{Identifier?:string, AvailabilityZone?:array{Name?:string}}>, ARN?:string}>}>
     */
    public function describeSubnetGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Users?:array<array{Name?:string, Status?:string, AccessString?:string, ACLNames?:array<string>, MinimumEngineVersion?:string, Authentication?:array{Type?:"password"|"no-password"|"iam", PasswordCount?:int}, ARN?:string}>, NextToken?:string}>
     */
    public function describeUsers(array $args = []): \AWS\Result { }

    /**
     * @param array{UserName?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Users?:array<array{Name?:string, Status?:string, AccessString?:string, ACLNames?:array<string>, MinimumEngineVersion?:string, Authentication?:array{Type?:"password"|"no-password"|"iam", PasswordCount?:int}, ARN?:string}>, NextToken?:string}>
     */
    public function describeUsersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterName:string, ShardName:string} $args
     * @return \AWS\Result<array{Cluster?:array{Name?:string, Description?:string, Status?:string, PendingUpdates?:array{Resharding?:array{SlotMigration?:array{ProgressPercentage?:float}}, ACLs?:array{ACLToApply?:string}, ServiceUpdates?:array<array{ServiceUpdateName?:string, Status?:"available"|"in-progress"|"complete"|"scheduled"}>}, MultiRegionClusterName?:string, NumberOfShards?:int, Shards?:array<array{Name?:string, Status?:string, Slots?:string, Nodes?:array<array{Name?:string, Status?:string, AvailabilityZone?:string, CreateTime?:int|string|\DateTimeInterface, Endpoint?:array{Address?:string, Port?:int}}>, NumberOfNodes?:int}>, AvailabilityMode?:"singleaz"|"multiaz", ClusterEndpoint?:array{Address?:string, Port?:int}, NodeType?:string, Engine?:string, EngineVersion?:string, EnginePatchVersion?:string, ParameterGroupName?:string, ParameterGroupStatus?:string, SecurityGroups?:array<array{SecurityGroupId?:string, Status?:string}>, SubnetGroupName?:string, TLSEnabled?:bool, KmsKeyId?:string, ARN?:string, SnsTopicArn?:string, SnsTopicStatus?:string, SnapshotRetentionLimit?:int, MaintenanceWindow?:string, SnapshotWindow?:string, ACLName?:string, AutoMinorVersionUpgrade?:bool, DataTiering?:"true"|"false"}}>
     */
    public function failoverShard(array $args): \AWS\Result { }

    /**
     * @param array{ClusterName:string, ShardName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cluster?:array{Name?:string, Description?:string, Status?:string, PendingUpdates?:array{Resharding?:array{SlotMigration?:array{ProgressPercentage?:float}}, ACLs?:array{ACLToApply?:string}, ServiceUpdates?:array<array{ServiceUpdateName?:string, Status?:"available"|"in-progress"|"complete"|"scheduled"}>}, MultiRegionClusterName?:string, NumberOfShards?:int, Shards?:array<array{Name?:string, Status?:string, Slots?:string, Nodes?:array<array{Name?:string, Status?:string, AvailabilityZone?:string, CreateTime?:int|string|\DateTimeInterface, Endpoint?:array{Address?:string, Port?:int}}>, NumberOfNodes?:int}>, AvailabilityMode?:"singleaz"|"multiaz", ClusterEndpoint?:array{Address?:string, Port?:int}, NodeType?:string, Engine?:string, EngineVersion?:string, EnginePatchVersion?:string, ParameterGroupName?:string, ParameterGroupStatus?:string, SecurityGroups?:array<array{SecurityGroupId?:string, Status?:string}>, SubnetGroupName?:string, TLSEnabled?:bool, KmsKeyId?:string, ARN?:string, SnsTopicArn?:string, SnsTopicStatus?:string, SnapshotRetentionLimit?:int, MaintenanceWindow?:string, SnapshotWindow?:string, ACLName?:string, AutoMinorVersionUpgrade?:bool, DataTiering?:"true"|"false"}}>
     */
    public function failoverShardAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MultiRegionClusterName:string} $args
     * @return \AWS\Result<array{ScaleUpNodeTypes?:array<string>, ScaleDownNodeTypes?:array<string>}>
     */
    public function listAllowedMultiRegionClusterUpdates(array $args): \AWS\Result { }

    /**
     * @param array{MultiRegionClusterName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ScaleUpNodeTypes?:array<string>, ScaleDownNodeTypes?:array<string>}>
     */
    public function listAllowedMultiRegionClusterUpdatesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterName:string} $args
     * @return \AWS\Result<array{ScaleUpNodeTypes?:array<string>, ScaleDownNodeTypes?:array<string>}>
     */
    public function listAllowedNodeTypeUpdates(array $args): \AWS\Result { }

    /**
     * @param array{ClusterName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ScaleUpNodeTypes?:array<string>, ScaleDownNodeTypes?:array<string>}>
     */
    public function listAllowedNodeTypeUpdatesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{TagList?:array<array{Key?:string, Value?:string}>}>
     */
    public function listTags(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TagList?:array<array{Key?:string, Value?:string}>}>
     */
    public function listTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ReservedNodesOfferingId:string, ReservationId?:string, NodeCount?:int, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{ReservedNode?:array{ReservationId?:string, ReservedNodesOfferingId?:string, NodeType?:string, StartTime?:int|string|\DateTimeInterface, Duration?:int, FixedPrice?:float, NodeCount?:int, OfferingType?:string, State?:string, RecurringCharges?:array<array{RecurringChargeAmount?:float, RecurringChargeFrequency?:string}>, ARN?:string}}>
     */
    public function purchaseReservedNodesOffering(array $args): \AWS\Result { }

    /**
     * @param array{ReservedNodesOfferingId:string, ReservationId?:string, NodeCount?:int, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReservedNode?:array{ReservationId?:string, ReservedNodesOfferingId?:string, NodeType?:string, StartTime?:int|string|\DateTimeInterface, Duration?:int, FixedPrice?:float, NodeCount?:int, OfferingType?:string, State?:string, RecurringCharges?:array<array{RecurringChargeAmount?:float, RecurringChargeFrequency?:string}>, ARN?:string}}>
     */
    public function purchaseReservedNodesOfferingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ParameterGroupName:string, AllParameters?:bool, ParameterNames?:array<string>} $args
     * @return \AWS\Result<array{ParameterGroup?:array{Name?:string, Family?:string, Description?:string, ARN?:string}}>
     */
    public function resetParameterGroup(array $args): \AWS\Result { }

    /**
     * @param array{ParameterGroupName:string, AllParameters?:bool, ParameterNames?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ParameterGroup?:array{Name?:string, Family?:string, Description?:string, ARN?:string}}>
     */
    public function resetParameterGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Tags:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{TagList?:array<array{Key?:string, Value?:string}>}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Tags:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{TagList?:array<array{Key?:string, Value?:string}>}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{TagList?:array<array{Key?:string, Value?:string}>}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{TagList?:array<array{Key?:string, Value?:string}>}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ACLName:string, UserNamesToAdd?:array<string>, UserNamesToRemove?:array<string>} $args
     * @return \AWS\Result<array{ACL?:array{Name?:string, Status?:string, UserNames?:array<string>, MinimumEngineVersion?:string, PendingChanges?:array{UserNamesToRemove?:array<string>, UserNamesToAdd?:array<string>}, Clusters?:array<string>, ARN?:string}}>
     */
    public function updateACL(array $args): \AWS\Result { }

    /**
     * @param array{ACLName:string, UserNamesToAdd?:array<string>, UserNamesToRemove?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ACL?:array{Name?:string, Status?:string, UserNames?:array<string>, MinimumEngineVersion?:string, PendingChanges?:array{UserNamesToRemove?:array<string>, UserNamesToAdd?:array<string>}, Clusters?:array<string>, ARN?:string}}>
     */
    public function updateACLAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterName:string, Description?:string, SecurityGroupIds?:array<string>, MaintenanceWindow?:string, SnsTopicArn?:string, SnsTopicStatus?:string, ParameterGroupName?:string, SnapshotWindow?:string, SnapshotRetentionLimit?:int, NodeType?:string, Engine?:string, EngineVersion?:string, ReplicaConfiguration?:array{ReplicaCount?:int}, ShardConfiguration?:array{ShardCount?:int}, ACLName?:string} $args
     * @return \AWS\Result<array{Cluster?:array{Name?:string, Description?:string, Status?:string, PendingUpdates?:array{Resharding?:array{SlotMigration?:array{ProgressPercentage?:float}}, ACLs?:array{ACLToApply?:string}, ServiceUpdates?:array<array{ServiceUpdateName?:string, Status?:"available"|"in-progress"|"complete"|"scheduled"}>}, MultiRegionClusterName?:string, NumberOfShards?:int, Shards?:array<array{Name?:string, Status?:string, Slots?:string, Nodes?:array<array{Name?:string, Status?:string, AvailabilityZone?:string, CreateTime?:int|string|\DateTimeInterface, Endpoint?:array{Address?:string, Port?:int}}>, NumberOfNodes?:int}>, AvailabilityMode?:"singleaz"|"multiaz", ClusterEndpoint?:array{Address?:string, Port?:int}, NodeType?:string, Engine?:string, EngineVersion?:string, EnginePatchVersion?:string, ParameterGroupName?:string, ParameterGroupStatus?:string, SecurityGroups?:array<array{SecurityGroupId?:string, Status?:string}>, SubnetGroupName?:string, TLSEnabled?:bool, KmsKeyId?:string, ARN?:string, SnsTopicArn?:string, SnsTopicStatus?:string, SnapshotRetentionLimit?:int, MaintenanceWindow?:string, SnapshotWindow?:string, ACLName?:string, AutoMinorVersionUpgrade?:bool, DataTiering?:"true"|"false"}}>
     */
    public function updateCluster(array $args): \AWS\Result { }

    /**
     * @param array{ClusterName:string, Description?:string, SecurityGroupIds?:array<string>, MaintenanceWindow?:string, SnsTopicArn?:string, SnsTopicStatus?:string, ParameterGroupName?:string, SnapshotWindow?:string, SnapshotRetentionLimit?:int, NodeType?:string, Engine?:string, EngineVersion?:string, ReplicaConfiguration?:array{ReplicaCount?:int}, ShardConfiguration?:array{ShardCount?:int}, ACLName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cluster?:array{Name?:string, Description?:string, Status?:string, PendingUpdates?:array{Resharding?:array{SlotMigration?:array{ProgressPercentage?:float}}, ACLs?:array{ACLToApply?:string}, ServiceUpdates?:array<array{ServiceUpdateName?:string, Status?:"available"|"in-progress"|"complete"|"scheduled"}>}, MultiRegionClusterName?:string, NumberOfShards?:int, Shards?:array<array{Name?:string, Status?:string, Slots?:string, Nodes?:array<array{Name?:string, Status?:string, AvailabilityZone?:string, CreateTime?:int|string|\DateTimeInterface, Endpoint?:array{Address?:string, Port?:int}}>, NumberOfNodes?:int}>, AvailabilityMode?:"singleaz"|"multiaz", ClusterEndpoint?:array{Address?:string, Port?:int}, NodeType?:string, Engine?:string, EngineVersion?:string, EnginePatchVersion?:string, ParameterGroupName?:string, ParameterGroupStatus?:string, SecurityGroups?:array<array{SecurityGroupId?:string, Status?:string}>, SubnetGroupName?:string, TLSEnabled?:bool, KmsKeyId?:string, ARN?:string, SnsTopicArn?:string, SnsTopicStatus?:string, SnapshotRetentionLimit?:int, MaintenanceWindow?:string, SnapshotWindow?:string, ACLName?:string, AutoMinorVersionUpgrade?:bool, DataTiering?:"true"|"false"}}>
     */
    public function updateClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MultiRegionClusterName:string, NodeType?:string, Description?:string, EngineVersion?:string, ShardConfiguration?:array{ShardCount?:int}, MultiRegionParameterGroupName?:string, UpdateStrategy?:"coordinated"|"uncoordinated"} $args
     * @return \AWS\Result<array{MultiRegionCluster?:array{MultiRegionClusterName?:string, Description?:string, Status?:string, NodeType?:string, Engine?:string, EngineVersion?:string, NumberOfShards?:int, Clusters?:array<array{ClusterName?:string, Region?:string, Status?:string, ARN?:string}>, MultiRegionParameterGroupName?:string, TLSEnabled?:bool, ARN?:string}}>
     */
    public function updateMultiRegionCluster(array $args): \AWS\Result { }

    /**
     * @param array{MultiRegionClusterName:string, NodeType?:string, Description?:string, EngineVersion?:string, ShardConfiguration?:array{ShardCount?:int}, MultiRegionParameterGroupName?:string, UpdateStrategy?:"coordinated"|"uncoordinated"} $args
     * @return \GuzzleHttp\Promise\Promise<array{MultiRegionCluster?:array{MultiRegionClusterName?:string, Description?:string, Status?:string, NodeType?:string, Engine?:string, EngineVersion?:string, NumberOfShards?:int, Clusters?:array<array{ClusterName?:string, Region?:string, Status?:string, ARN?:string}>, MultiRegionParameterGroupName?:string, TLSEnabled?:bool, ARN?:string}}>
     */
    public function updateMultiRegionClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ParameterGroupName:string, ParameterNameValues:array<array{ParameterName?:string, ParameterValue?:string}>} $args
     * @return \AWS\Result<array{ParameterGroup?:array{Name?:string, Family?:string, Description?:string, ARN?:string}}>
     */
    public function updateParameterGroup(array $args): \AWS\Result { }

    /**
     * @param array{ParameterGroupName:string, ParameterNameValues:array<array{ParameterName?:string, ParameterValue?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ParameterGroup?:array{Name?:string, Family?:string, Description?:string, ARN?:string}}>
     */
    public function updateParameterGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SubnetGroupName:string, Description?:string, SubnetIds?:array<string>} $args
     * @return \AWS\Result<array{SubnetGroup?:array{Name?:string, Description?:string, VpcId?:string, Subnets?:array<array{Identifier?:string, AvailabilityZone?:array{Name?:string}}>, ARN?:string}}>
     */
    public function updateSubnetGroup(array $args): \AWS\Result { }

    /**
     * @param array{SubnetGroupName:string, Description?:string, SubnetIds?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{SubnetGroup?:array{Name?:string, Description?:string, VpcId?:string, Subnets?:array<array{Identifier?:string, AvailabilityZone?:array{Name?:string}}>, ARN?:string}}>
     */
    public function updateSubnetGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName:string, AuthenticationMode?:array{Type?:"password"|"iam", Passwords?:array<string>}, AccessString?:string} $args
     * @return \AWS\Result<array{User?:array{Name?:string, Status?:string, AccessString?:string, ACLNames?:array<string>, MinimumEngineVersion?:string, Authentication?:array{Type?:"password"|"no-password"|"iam", PasswordCount?:int}, ARN?:string}}>
     */
    public function updateUser(array $args): \AWS\Result { }

    /**
     * @param array{UserName:string, AuthenticationMode?:array{Type?:"password"|"iam", Passwords?:array<string>}, AccessString?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{User?:array{Name?:string, Status?:string, AccessString?:string, ACLNames?:array<string>, MinimumEngineVersion?:string, Authentication?:array{Type?:"password"|"no-password"|"iam", PasswordCount?:int}, ARN?:string}}>
     */
    public function updateUserAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
