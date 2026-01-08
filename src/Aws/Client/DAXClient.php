<?php
namespace AWS\DAX;

class DAXClient
{
    /**
     * @param array{ClusterName:string, NodeType:string, Description?:string, ReplicationFactor:int, AvailabilityZones?:array<string>, SubnetGroupName?:string, SecurityGroupIds?:array<string>, PreferredMaintenanceWindow?:string, NotificationTopicArn?:string, IamRoleArn:string, ParameterGroupName?:string, Tags?:array<array{Key?:string, Value?:string}>, SSESpecification?:array{Enabled:bool}, ClusterEndpointEncryptionType?:"NONE"|"TLS"} $args
     * @return \AWS\Result<array{Cluster?:array{ClusterName?:string, Description?:string, ClusterArn?:string, TotalNodes?:int, ActiveNodes?:int, NodeType?:string, Status?:string, ClusterDiscoveryEndpoint?:array{Address?:string, Port?:int, URL?:string}, NodeIdsToRemove?:array<string>, Nodes?:array<array{NodeId?:string, Endpoint?:array{Address?:string, Port?:int, URL?:string}, NodeCreateTime?:int|string|\DateTimeInterface, AvailabilityZone?:string, NodeStatus?:string, ParameterGroupStatus?:string}>, PreferredMaintenanceWindow?:string, NotificationConfiguration?:array{TopicArn?:string, TopicStatus?:string}, SubnetGroup?:string, SecurityGroups?:array<array{SecurityGroupIdentifier?:string, Status?:string}>, IamRoleArn?:string, ParameterGroup?:array{ParameterGroupName?:string, ParameterApplyStatus?:string, NodeIdsToReboot?:array<string>}, SSEDescription?:array{Status?:"ENABLING"|"ENABLED"|"DISABLING"|"DISABLED"}, ClusterEndpointEncryptionType?:"NONE"|"TLS"}}>
     */
    public function createCluster(array $args): \AWS\Result { }

    /**
     * @param array{ClusterName:string, NodeType:string, Description?:string, ReplicationFactor:int, AvailabilityZones?:array<string>, SubnetGroupName?:string, SecurityGroupIds?:array<string>, PreferredMaintenanceWindow?:string, NotificationTopicArn?:string, IamRoleArn:string, ParameterGroupName?:string, Tags?:array<array{Key?:string, Value?:string}>, SSESpecification?:array{Enabled:bool}, ClusterEndpointEncryptionType?:"NONE"|"TLS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cluster?:array{ClusterName?:string, Description?:string, ClusterArn?:string, TotalNodes?:int, ActiveNodes?:int, NodeType?:string, Status?:string, ClusterDiscoveryEndpoint?:array{Address?:string, Port?:int, URL?:string}, NodeIdsToRemove?:array<string>, Nodes?:array<array{NodeId?:string, Endpoint?:array{Address?:string, Port?:int, URL?:string}, NodeCreateTime?:int|string|\DateTimeInterface, AvailabilityZone?:string, NodeStatus?:string, ParameterGroupStatus?:string}>, PreferredMaintenanceWindow?:string, NotificationConfiguration?:array{TopicArn?:string, TopicStatus?:string}, SubnetGroup?:string, SecurityGroups?:array<array{SecurityGroupIdentifier?:string, Status?:string}>, IamRoleArn?:string, ParameterGroup?:array{ParameterGroupName?:string, ParameterApplyStatus?:string, NodeIdsToReboot?:array<string>}, SSEDescription?:array{Status?:"ENABLING"|"ENABLED"|"DISABLING"|"DISABLED"}, ClusterEndpointEncryptionType?:"NONE"|"TLS"}}>
     */
    public function createClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ParameterGroupName:string, Description?:string} $args
     * @return \AWS\Result<array{ParameterGroup?:array{ParameterGroupName?:string, Description?:string}}>
     */
    public function createParameterGroup(array $args): \AWS\Result { }

    /**
     * @param array{ParameterGroupName:string, Description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ParameterGroup?:array{ParameterGroupName?:string, Description?:string}}>
     */
    public function createParameterGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SubnetGroupName:string, Description?:string, SubnetIds:array<string>} $args
     * @return \AWS\Result<array{SubnetGroup?:array{SubnetGroupName?:string, Description?:string, VpcId?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:string}>}}>
     */
    public function createSubnetGroup(array $args): \AWS\Result { }

    /**
     * @param array{SubnetGroupName:string, Description?:string, SubnetIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{SubnetGroup?:array{SubnetGroupName?:string, Description?:string, VpcId?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:string}>}}>
     */
    public function createSubnetGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterName:string, NewReplicationFactor:int, AvailabilityZones?:array<string>, NodeIdsToRemove?:array<string>} $args
     * @return \AWS\Result<array{Cluster?:array{ClusterName?:string, Description?:string, ClusterArn?:string, TotalNodes?:int, ActiveNodes?:int, NodeType?:string, Status?:string, ClusterDiscoveryEndpoint?:array{Address?:string, Port?:int, URL?:string}, NodeIdsToRemove?:array<string>, Nodes?:array<array{NodeId?:string, Endpoint?:array{Address?:string, Port?:int, URL?:string}, NodeCreateTime?:int|string|\DateTimeInterface, AvailabilityZone?:string, NodeStatus?:string, ParameterGroupStatus?:string}>, PreferredMaintenanceWindow?:string, NotificationConfiguration?:array{TopicArn?:string, TopicStatus?:string}, SubnetGroup?:string, SecurityGroups?:array<array{SecurityGroupIdentifier?:string, Status?:string}>, IamRoleArn?:string, ParameterGroup?:array{ParameterGroupName?:string, ParameterApplyStatus?:string, NodeIdsToReboot?:array<string>}, SSEDescription?:array{Status?:"ENABLING"|"ENABLED"|"DISABLING"|"DISABLED"}, ClusterEndpointEncryptionType?:"NONE"|"TLS"}}>
     */
    public function decreaseReplicationFactor(array $args): \AWS\Result { }

    /**
     * @param array{ClusterName:string, NewReplicationFactor:int, AvailabilityZones?:array<string>, NodeIdsToRemove?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cluster?:array{ClusterName?:string, Description?:string, ClusterArn?:string, TotalNodes?:int, ActiveNodes?:int, NodeType?:string, Status?:string, ClusterDiscoveryEndpoint?:array{Address?:string, Port?:int, URL?:string}, NodeIdsToRemove?:array<string>, Nodes?:array<array{NodeId?:string, Endpoint?:array{Address?:string, Port?:int, URL?:string}, NodeCreateTime?:int|string|\DateTimeInterface, AvailabilityZone?:string, NodeStatus?:string, ParameterGroupStatus?:string}>, PreferredMaintenanceWindow?:string, NotificationConfiguration?:array{TopicArn?:string, TopicStatus?:string}, SubnetGroup?:string, SecurityGroups?:array<array{SecurityGroupIdentifier?:string, Status?:string}>, IamRoleArn?:string, ParameterGroup?:array{ParameterGroupName?:string, ParameterApplyStatus?:string, NodeIdsToReboot?:array<string>}, SSEDescription?:array{Status?:"ENABLING"|"ENABLED"|"DISABLING"|"DISABLED"}, ClusterEndpointEncryptionType?:"NONE"|"TLS"}}>
     */
    public function decreaseReplicationFactorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterName:string} $args
     * @return \AWS\Result<array{Cluster?:array{ClusterName?:string, Description?:string, ClusterArn?:string, TotalNodes?:int, ActiveNodes?:int, NodeType?:string, Status?:string, ClusterDiscoveryEndpoint?:array{Address?:string, Port?:int, URL?:string}, NodeIdsToRemove?:array<string>, Nodes?:array<array{NodeId?:string, Endpoint?:array{Address?:string, Port?:int, URL?:string}, NodeCreateTime?:int|string|\DateTimeInterface, AvailabilityZone?:string, NodeStatus?:string, ParameterGroupStatus?:string}>, PreferredMaintenanceWindow?:string, NotificationConfiguration?:array{TopicArn?:string, TopicStatus?:string}, SubnetGroup?:string, SecurityGroups?:array<array{SecurityGroupIdentifier?:string, Status?:string}>, IamRoleArn?:string, ParameterGroup?:array{ParameterGroupName?:string, ParameterApplyStatus?:string, NodeIdsToReboot?:array<string>}, SSEDescription?:array{Status?:"ENABLING"|"ENABLED"|"DISABLING"|"DISABLED"}, ClusterEndpointEncryptionType?:"NONE"|"TLS"}}>
     */
    public function deleteCluster(array $args): \AWS\Result { }

    /**
     * @param array{ClusterName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cluster?:array{ClusterName?:string, Description?:string, ClusterArn?:string, TotalNodes?:int, ActiveNodes?:int, NodeType?:string, Status?:string, ClusterDiscoveryEndpoint?:array{Address?:string, Port?:int, URL?:string}, NodeIdsToRemove?:array<string>, Nodes?:array<array{NodeId?:string, Endpoint?:array{Address?:string, Port?:int, URL?:string}, NodeCreateTime?:int|string|\DateTimeInterface, AvailabilityZone?:string, NodeStatus?:string, ParameterGroupStatus?:string}>, PreferredMaintenanceWindow?:string, NotificationConfiguration?:array{TopicArn?:string, TopicStatus?:string}, SubnetGroup?:string, SecurityGroups?:array<array{SecurityGroupIdentifier?:string, Status?:string}>, IamRoleArn?:string, ParameterGroup?:array{ParameterGroupName?:string, ParameterApplyStatus?:string, NodeIdsToReboot?:array<string>}, SSEDescription?:array{Status?:"ENABLING"|"ENABLED"|"DISABLING"|"DISABLED"}, ClusterEndpointEncryptionType?:"NONE"|"TLS"}}>
     */
    public function deleteClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ParameterGroupName:string} $args
     * @return \AWS\Result<array{DeletionMessage?:string}>
     */
    public function deleteParameterGroup(array $args): \AWS\Result { }

    /**
     * @param array{ParameterGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DeletionMessage?:string}>
     */
    public function deleteParameterGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SubnetGroupName:string} $args
     * @return \AWS\Result<array{DeletionMessage?:string}>
     */
    public function deleteSubnetGroup(array $args): \AWS\Result { }

    /**
     * @param array{SubnetGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DeletionMessage?:string}>
     */
    public function deleteSubnetGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterNames?:array<string>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Clusters?:array<array{ClusterName?:string, Description?:string, ClusterArn?:string, TotalNodes?:int, ActiveNodes?:int, NodeType?:string, Status?:string, ClusterDiscoveryEndpoint?:array{Address?:string, Port?:int, URL?:string}, NodeIdsToRemove?:array<string>, Nodes?:array<array{NodeId?:string, Endpoint?:array{Address?:string, Port?:int, URL?:string}, NodeCreateTime?:int|string|\DateTimeInterface, AvailabilityZone?:string, NodeStatus?:string, ParameterGroupStatus?:string}>, PreferredMaintenanceWindow?:string, NotificationConfiguration?:array{TopicArn?:string, TopicStatus?:string}, SubnetGroup?:string, SecurityGroups?:array<array{SecurityGroupIdentifier?:string, Status?:string}>, IamRoleArn?:string, ParameterGroup?:array{ParameterGroupName?:string, ParameterApplyStatus?:string, NodeIdsToReboot?:array<string>}, SSEDescription?:array{Status?:"ENABLING"|"ENABLED"|"DISABLING"|"DISABLED"}, ClusterEndpointEncryptionType?:"NONE"|"TLS"}>}>
     */
    public function describeClusters(array $args = []): \AWS\Result { }

    /**
     * @param array{ClusterNames?:array<string>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Clusters?:array<array{ClusterName?:string, Description?:string, ClusterArn?:string, TotalNodes?:int, ActiveNodes?:int, NodeType?:string, Status?:string, ClusterDiscoveryEndpoint?:array{Address?:string, Port?:int, URL?:string}, NodeIdsToRemove?:array<string>, Nodes?:array<array{NodeId?:string, Endpoint?:array{Address?:string, Port?:int, URL?:string}, NodeCreateTime?:int|string|\DateTimeInterface, AvailabilityZone?:string, NodeStatus?:string, ParameterGroupStatus?:string}>, PreferredMaintenanceWindow?:string, NotificationConfiguration?:array{TopicArn?:string, TopicStatus?:string}, SubnetGroup?:string, SecurityGroups?:array<array{SecurityGroupIdentifier?:string, Status?:string}>, IamRoleArn?:string, ParameterGroup?:array{ParameterGroupName?:string, ParameterApplyStatus?:string, NodeIdsToReboot?:array<string>}, SSEDescription?:array{Status?:"ENABLING"|"ENABLED"|"DISABLING"|"DISABLED"}, ClusterEndpointEncryptionType?:"NONE"|"TLS"}>}>
     */
    public function describeClustersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Parameters?:array<array{ParameterName?:string, ParameterType?:"DEFAULT"|"NODE_TYPE_SPECIFIC", ParameterValue?:string, NodeTypeSpecificValues?:array<array{NodeType?:string, Value?:string}>, Description?:string, Source?:string, DataType?:string, AllowedValues?:string, IsModifiable?:"TRUE"|"FALSE"|"CONDITIONAL", ChangeType?:"IMMEDIATE"|"REQUIRES_REBOOT"}>}>
     */
    public function describeDefaultParameters(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Parameters?:array<array{ParameterName?:string, ParameterType?:"DEFAULT"|"NODE_TYPE_SPECIFIC", ParameterValue?:string, NodeTypeSpecificValues?:array<array{NodeType?:string, Value?:string}>, Description?:string, Source?:string, DataType?:string, AllowedValues?:string, IsModifiable?:"TRUE"|"FALSE"|"CONDITIONAL", ChangeType?:"IMMEDIATE"|"REQUIRES_REBOOT"}>}>
     */
    public function describeDefaultParametersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SourceName?:string, SourceType?:"CLUSTER"|"PARAMETER_GROUP"|"SUBNET_GROUP", StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Duration?:int, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Events?:array<array{SourceName?:string, SourceType?:"CLUSTER"|"PARAMETER_GROUP"|"SUBNET_GROUP", Message?:string, Date?:int|string|\DateTimeInterface}>}>
     */
    public function describeEvents(array $args = []): \AWS\Result { }

    /**
     * @param array{SourceName?:string, SourceType?:"CLUSTER"|"PARAMETER_GROUP"|"SUBNET_GROUP", StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Duration?:int, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Events?:array<array{SourceName?:string, SourceType?:"CLUSTER"|"PARAMETER_GROUP"|"SUBNET_GROUP", Message?:string, Date?:int|string|\DateTimeInterface}>}>
     */
    public function describeEventsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ParameterGroupNames?:array<string>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, ParameterGroups?:array<array{ParameterGroupName?:string, Description?:string}>}>
     */
    public function describeParameterGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{ParameterGroupNames?:array<string>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, ParameterGroups?:array<array{ParameterGroupName?:string, Description?:string}>}>
     */
    public function describeParameterGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ParameterGroupName:string, Source?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Parameters?:array<array{ParameterName?:string, ParameterType?:"DEFAULT"|"NODE_TYPE_SPECIFIC", ParameterValue?:string, NodeTypeSpecificValues?:array<array{NodeType?:string, Value?:string}>, Description?:string, Source?:string, DataType?:string, AllowedValues?:string, IsModifiable?:"TRUE"|"FALSE"|"CONDITIONAL", ChangeType?:"IMMEDIATE"|"REQUIRES_REBOOT"}>}>
     */
    public function describeParameters(array $args): \AWS\Result { }

    /**
     * @param array{ParameterGroupName:string, Source?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Parameters?:array<array{ParameterName?:string, ParameterType?:"DEFAULT"|"NODE_TYPE_SPECIFIC", ParameterValue?:string, NodeTypeSpecificValues?:array<array{NodeType?:string, Value?:string}>, Description?:string, Source?:string, DataType?:string, AllowedValues?:string, IsModifiable?:"TRUE"|"FALSE"|"CONDITIONAL", ChangeType?:"IMMEDIATE"|"REQUIRES_REBOOT"}>}>
     */
    public function describeParametersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SubnetGroupNames?:array<string>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, SubnetGroups?:array<array{SubnetGroupName?:string, Description?:string, VpcId?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:string}>}>}>
     */
    public function describeSubnetGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{SubnetGroupNames?:array<string>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, SubnetGroups?:array<array{SubnetGroupName?:string, Description?:string, VpcId?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:string}>}>}>
     */
    public function describeSubnetGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterName:string, NewReplicationFactor:int, AvailabilityZones?:array<string>} $args
     * @return \AWS\Result<array{Cluster?:array{ClusterName?:string, Description?:string, ClusterArn?:string, TotalNodes?:int, ActiveNodes?:int, NodeType?:string, Status?:string, ClusterDiscoveryEndpoint?:array{Address?:string, Port?:int, URL?:string}, NodeIdsToRemove?:array<string>, Nodes?:array<array{NodeId?:string, Endpoint?:array{Address?:string, Port?:int, URL?:string}, NodeCreateTime?:int|string|\DateTimeInterface, AvailabilityZone?:string, NodeStatus?:string, ParameterGroupStatus?:string}>, PreferredMaintenanceWindow?:string, NotificationConfiguration?:array{TopicArn?:string, TopicStatus?:string}, SubnetGroup?:string, SecurityGroups?:array<array{SecurityGroupIdentifier?:string, Status?:string}>, IamRoleArn?:string, ParameterGroup?:array{ParameterGroupName?:string, ParameterApplyStatus?:string, NodeIdsToReboot?:array<string>}, SSEDescription?:array{Status?:"ENABLING"|"ENABLED"|"DISABLING"|"DISABLED"}, ClusterEndpointEncryptionType?:"NONE"|"TLS"}}>
     */
    public function increaseReplicationFactor(array $args): \AWS\Result { }

    /**
     * @param array{ClusterName:string, NewReplicationFactor:int, AvailabilityZones?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cluster?:array{ClusterName?:string, Description?:string, ClusterArn?:string, TotalNodes?:int, ActiveNodes?:int, NodeType?:string, Status?:string, ClusterDiscoveryEndpoint?:array{Address?:string, Port?:int, URL?:string}, NodeIdsToRemove?:array<string>, Nodes?:array<array{NodeId?:string, Endpoint?:array{Address?:string, Port?:int, URL?:string}, NodeCreateTime?:int|string|\DateTimeInterface, AvailabilityZone?:string, NodeStatus?:string, ParameterGroupStatus?:string}>, PreferredMaintenanceWindow?:string, NotificationConfiguration?:array{TopicArn?:string, TopicStatus?:string}, SubnetGroup?:string, SecurityGroups?:array<array{SecurityGroupIdentifier?:string, Status?:string}>, IamRoleArn?:string, ParameterGroup?:array{ParameterGroupName?:string, ParameterApplyStatus?:string, NodeIdsToReboot?:array<string>}, SSEDescription?:array{Status?:"ENABLING"|"ENABLED"|"DISABLING"|"DISABLED"}, ClusterEndpointEncryptionType?:"NONE"|"TLS"}}>
     */
    public function increaseReplicationFactorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceName:string, NextToken?:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key?:string, Value?:string}>, NextToken?:string}>
     */
    public function listTags(array $args): \AWS\Result { }

    /**
     * @param array{ResourceName:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key?:string, Value?:string}>, NextToken?:string}>
     */
    public function listTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterName:string, NodeId:string} $args
     * @return \AWS\Result<array{Cluster?:array{ClusterName?:string, Description?:string, ClusterArn?:string, TotalNodes?:int, ActiveNodes?:int, NodeType?:string, Status?:string, ClusterDiscoveryEndpoint?:array{Address?:string, Port?:int, URL?:string}, NodeIdsToRemove?:array<string>, Nodes?:array<array{NodeId?:string, Endpoint?:array{Address?:string, Port?:int, URL?:string}, NodeCreateTime?:int|string|\DateTimeInterface, AvailabilityZone?:string, NodeStatus?:string, ParameterGroupStatus?:string}>, PreferredMaintenanceWindow?:string, NotificationConfiguration?:array{TopicArn?:string, TopicStatus?:string}, SubnetGroup?:string, SecurityGroups?:array<array{SecurityGroupIdentifier?:string, Status?:string}>, IamRoleArn?:string, ParameterGroup?:array{ParameterGroupName?:string, ParameterApplyStatus?:string, NodeIdsToReboot?:array<string>}, SSEDescription?:array{Status?:"ENABLING"|"ENABLED"|"DISABLING"|"DISABLED"}, ClusterEndpointEncryptionType?:"NONE"|"TLS"}}>
     */
    public function rebootNode(array $args): \AWS\Result { }

    /**
     * @param array{ClusterName:string, NodeId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cluster?:array{ClusterName?:string, Description?:string, ClusterArn?:string, TotalNodes?:int, ActiveNodes?:int, NodeType?:string, Status?:string, ClusterDiscoveryEndpoint?:array{Address?:string, Port?:int, URL?:string}, NodeIdsToRemove?:array<string>, Nodes?:array<array{NodeId?:string, Endpoint?:array{Address?:string, Port?:int, URL?:string}, NodeCreateTime?:int|string|\DateTimeInterface, AvailabilityZone?:string, NodeStatus?:string, ParameterGroupStatus?:string}>, PreferredMaintenanceWindow?:string, NotificationConfiguration?:array{TopicArn?:string, TopicStatus?:string}, SubnetGroup?:string, SecurityGroups?:array<array{SecurityGroupIdentifier?:string, Status?:string}>, IamRoleArn?:string, ParameterGroup?:array{ParameterGroupName?:string, ParameterApplyStatus?:string, NodeIdsToReboot?:array<string>}, SSEDescription?:array{Status?:"ENABLING"|"ENABLED"|"DISABLING"|"DISABLED"}, ClusterEndpointEncryptionType?:"NONE"|"TLS"}}>
     */
    public function rebootNodeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceName:string, Tags:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{Tags?:array<array{Key?:string, Value?:string}>}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceName:string, Tags:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key?:string, Value?:string}>}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceName:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{Tags?:array<array{Key?:string, Value?:string}>}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceName:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key?:string, Value?:string}>}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterName:string, Description?:string, PreferredMaintenanceWindow?:string, NotificationTopicArn?:string, NotificationTopicStatus?:string, ParameterGroupName?:string, SecurityGroupIds?:array<string>} $args
     * @return \AWS\Result<array{Cluster?:array{ClusterName?:string, Description?:string, ClusterArn?:string, TotalNodes?:int, ActiveNodes?:int, NodeType?:string, Status?:string, ClusterDiscoveryEndpoint?:array{Address?:string, Port?:int, URL?:string}, NodeIdsToRemove?:array<string>, Nodes?:array<array{NodeId?:string, Endpoint?:array{Address?:string, Port?:int, URL?:string}, NodeCreateTime?:int|string|\DateTimeInterface, AvailabilityZone?:string, NodeStatus?:string, ParameterGroupStatus?:string}>, PreferredMaintenanceWindow?:string, NotificationConfiguration?:array{TopicArn?:string, TopicStatus?:string}, SubnetGroup?:string, SecurityGroups?:array<array{SecurityGroupIdentifier?:string, Status?:string}>, IamRoleArn?:string, ParameterGroup?:array{ParameterGroupName?:string, ParameterApplyStatus?:string, NodeIdsToReboot?:array<string>}, SSEDescription?:array{Status?:"ENABLING"|"ENABLED"|"DISABLING"|"DISABLED"}, ClusterEndpointEncryptionType?:"NONE"|"TLS"}}>
     */
    public function updateCluster(array $args): \AWS\Result { }

    /**
     * @param array{ClusterName:string, Description?:string, PreferredMaintenanceWindow?:string, NotificationTopicArn?:string, NotificationTopicStatus?:string, ParameterGroupName?:string, SecurityGroupIds?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cluster?:array{ClusterName?:string, Description?:string, ClusterArn?:string, TotalNodes?:int, ActiveNodes?:int, NodeType?:string, Status?:string, ClusterDiscoveryEndpoint?:array{Address?:string, Port?:int, URL?:string}, NodeIdsToRemove?:array<string>, Nodes?:array<array{NodeId?:string, Endpoint?:array{Address?:string, Port?:int, URL?:string}, NodeCreateTime?:int|string|\DateTimeInterface, AvailabilityZone?:string, NodeStatus?:string, ParameterGroupStatus?:string}>, PreferredMaintenanceWindow?:string, NotificationConfiguration?:array{TopicArn?:string, TopicStatus?:string}, SubnetGroup?:string, SecurityGroups?:array<array{SecurityGroupIdentifier?:string, Status?:string}>, IamRoleArn?:string, ParameterGroup?:array{ParameterGroupName?:string, ParameterApplyStatus?:string, NodeIdsToReboot?:array<string>}, SSEDescription?:array{Status?:"ENABLING"|"ENABLED"|"DISABLING"|"DISABLED"}, ClusterEndpointEncryptionType?:"NONE"|"TLS"}}>
     */
    public function updateClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ParameterGroupName:string, ParameterNameValues:array<array{ParameterName?:string, ParameterValue?:string}>} $args
     * @return \AWS\Result<array{ParameterGroup?:array{ParameterGroupName?:string, Description?:string}}>
     */
    public function updateParameterGroup(array $args): \AWS\Result { }

    /**
     * @param array{ParameterGroupName:string, ParameterNameValues:array<array{ParameterName?:string, ParameterValue?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ParameterGroup?:array{ParameterGroupName?:string, Description?:string}}>
     */
    public function updateParameterGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SubnetGroupName:string, Description?:string, SubnetIds?:array<string>} $args
     * @return \AWS\Result<array{SubnetGroup?:array{SubnetGroupName?:string, Description?:string, VpcId?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:string}>}}>
     */
    public function updateSubnetGroup(array $args): \AWS\Result { }

    /**
     * @param array{SubnetGroupName:string, Description?:string, SubnetIds?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{SubnetGroup?:array{SubnetGroupName?:string, Description?:string, VpcId?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:string}>}}>
     */
    public function updateSubnetGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
