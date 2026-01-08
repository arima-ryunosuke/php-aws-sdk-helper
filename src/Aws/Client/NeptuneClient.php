<?php
namespace AWS\Neptune;

class NeptuneClient
{
    /**
     * @param array{DBClusterIdentifier:string, RoleArn:string, FeatureName?:string} $args
     * @return \AWS\Result<void>
     */
    public function addRoleToDBCluster(array $args): \AWS\Result { }

    /**
     * @param array{DBClusterIdentifier:string, RoleArn:string, FeatureName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function addRoleToDBClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SubscriptionName:string, SourceIdentifier:string} $args
     * @return \AWS\Result<array{EventSubscription?:array{CustomerAwsId?:string, CustSubscriptionId?:string, SnsTopicArn?:string, Status?:string, SubscriptionCreationTime?:string, SourceType?:string, SourceIdsList?:array<string>, EventCategoriesList?:array<string>, Enabled?:bool, EventSubscriptionArn?:string}}>
     */
    public function addSourceIdentifierToSubscription(array $args): \AWS\Result { }

    /**
     * @param array{SubscriptionName:string, SourceIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventSubscription?:array{CustomerAwsId?:string, CustSubscriptionId?:string, SnsTopicArn?:string, Status?:string, SubscriptionCreationTime?:string, SourceType?:string, SourceIdsList?:array<string>, EventCategoriesList?:array<string>, Enabled?:bool, EventSubscriptionArn?:string}}>
     */
    public function addSourceIdentifierToSubscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceName:string, Tags:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<void>
     */
    public function addTagsToResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceName:string, Tags:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function addTagsToResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceIdentifier:string, ApplyAction:string, OptInType:string} $args
     * @return \AWS\Result<array{ResourcePendingMaintenanceActions?:array{ResourceIdentifier?:string, PendingMaintenanceActionDetails?:array<array{Action?:string, AutoAppliedAfterDate?:int|string|\DateTimeInterface, ForcedApplyDate?:int|string|\DateTimeInterface, OptInStatus?:string, CurrentApplyDate?:int|string|\DateTimeInterface, Description?:string}>}}>
     */
    public function applyPendingMaintenanceAction(array $args): \AWS\Result { }

    /**
     * @param array{ResourceIdentifier:string, ApplyAction:string, OptInType:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourcePendingMaintenanceActions?:array{ResourceIdentifier?:string, PendingMaintenanceActionDetails?:array<array{Action?:string, AutoAppliedAfterDate?:int|string|\DateTimeInterface, ForcedApplyDate?:int|string|\DateTimeInterface, OptInStatus?:string, CurrentApplyDate?:int|string|\DateTimeInterface, Description?:string}>}}>
     */
    public function applyPendingMaintenanceActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SourceDBClusterParameterGroupIdentifier:string, TargetDBClusterParameterGroupIdentifier:string, TargetDBClusterParameterGroupDescription:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{DBClusterParameterGroup?:array{DBClusterParameterGroupName?:string, DBParameterGroupFamily?:string, Description?:string, DBClusterParameterGroupArn?:string}}>
     */
    public function copyDBClusterParameterGroup(array $args): \AWS\Result { }

    /**
     * @param array{SourceDBClusterParameterGroupIdentifier:string, TargetDBClusterParameterGroupIdentifier:string, TargetDBClusterParameterGroupDescription:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBClusterParameterGroup?:array{DBClusterParameterGroupName?:string, DBParameterGroupFamily?:string, Description?:string, DBClusterParameterGroupArn?:string}}>
     */
    public function copyDBClusterParameterGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SourceDBClusterSnapshotIdentifier:string, TargetDBClusterSnapshotIdentifier:string, KmsKeyId?:string, PreSignedUrl?:string, CopyTags?:bool, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{DBClusterSnapshot?:array{AvailabilityZones?:array<string>, DBClusterSnapshotIdentifier?:string, DBClusterIdentifier?:string, SnapshotCreateTime?:int|string|\DateTimeInterface, Engine?:string, AllocatedStorage?:int, Status?:string, Port?:int, VpcId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, MasterUsername?:string, EngineVersion?:string, LicenseModel?:string, SnapshotType?:string, PercentProgress?:int, StorageEncrypted?:bool, KmsKeyId?:string, DBClusterSnapshotArn?:string, SourceDBClusterSnapshotArn?:string, IAMDatabaseAuthenticationEnabled?:bool, StorageType?:string}}>
     */
    public function copyDBClusterSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{SourceDBClusterSnapshotIdentifier:string, TargetDBClusterSnapshotIdentifier:string, KmsKeyId?:string, PreSignedUrl?:string, CopyTags?:bool, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBClusterSnapshot?:array{AvailabilityZones?:array<string>, DBClusterSnapshotIdentifier?:string, DBClusterIdentifier?:string, SnapshotCreateTime?:int|string|\DateTimeInterface, Engine?:string, AllocatedStorage?:int, Status?:string, Port?:int, VpcId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, MasterUsername?:string, EngineVersion?:string, LicenseModel?:string, SnapshotType?:string, PercentProgress?:int, StorageEncrypted?:bool, KmsKeyId?:string, DBClusterSnapshotArn?:string, SourceDBClusterSnapshotArn?:string, IAMDatabaseAuthenticationEnabled?:bool, StorageType?:string}}>
     */
    public function copyDBClusterSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SourceDBParameterGroupIdentifier:string, TargetDBParameterGroupIdentifier:string, TargetDBParameterGroupDescription:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{DBParameterGroup?:array{DBParameterGroupName?:string, DBParameterGroupFamily?:string, Description?:string, DBParameterGroupArn?:string}}>
     */
    public function copyDBParameterGroup(array $args): \AWS\Result { }

    /**
     * @param array{SourceDBParameterGroupIdentifier:string, TargetDBParameterGroupIdentifier:string, TargetDBParameterGroupDescription:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBParameterGroup?:array{DBParameterGroupName?:string, DBParameterGroupFamily?:string, Description?:string, DBParameterGroupArn?:string}}>
     */
    public function copyDBParameterGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, CharacterSetName?:string, CopyTagsToSnapshot?:bool, DatabaseName?:string, DBClusterIdentifier:string, DBClusterParameterGroupName?:string, VpcSecurityGroupIds?:array<string>, DBSubnetGroupName?:string, Engine:string, EngineVersion?:string, Port?:int, MasterUsername?:string, MasterUserPassword?:string, OptionGroupName?:string, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, Tags?:array<array{Key?:string, Value?:string}>, StorageEncrypted?:bool, KmsKeyId?:string, PreSignedUrl?:string, EnableIAMDatabaseAuthentication?:bool, EnableCloudwatchLogsExports?:array<string>, DeletionProtection?:bool, ServerlessV2ScalingConfiguration?:array{MinCapacity?:float, MaxCapacity?:float}, GlobalClusterIdentifier?:string, StorageType?:string} $args
     * @return \AWS\Result<array{DBCluster?:array{AllocatedStorage?:int, AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, CharacterSetName?:string, DatabaseName?:string, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, DBClusterOptionGroupMemberships?:array<array{DBClusterOptionGroupName?:string, Status?:string}>, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string, FeatureName?:string}>, IAMDatabaseAuthenticationEnabled?:bool, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, CopyTagsToSnapshot?:bool, EnabledCloudwatchLogsExports?:array<string>, PendingModifiedValues?:array{PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}, DBClusterIdentifier?:string, IAMDatabaseAuthenticationEnabled?:bool, EngineVersion?:string, BackupRetentionPeriod?:int, StorageType?:string, AllocatedStorage?:int, Iops?:int}, DeletionProtection?:bool, CrossAccountClone?:bool, AutomaticRestartTime?:int|string|\DateTimeInterface, ServerlessV2ScalingConfiguration?:array{MinCapacity?:float, MaxCapacity?:float}, GlobalClusterIdentifier?:string, IOOptimizedNextAllowedModificationTime?:int|string|\DateTimeInterface, StorageType?:string}}>
     */
    public function createDBCluster(array $args): \AWS\Result { }

    /**
     * @param array{AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, CharacterSetName?:string, CopyTagsToSnapshot?:bool, DatabaseName?:string, DBClusterIdentifier:string, DBClusterParameterGroupName?:string, VpcSecurityGroupIds?:array<string>, DBSubnetGroupName?:string, Engine:string, EngineVersion?:string, Port?:int, MasterUsername?:string, MasterUserPassword?:string, OptionGroupName?:string, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, Tags?:array<array{Key?:string, Value?:string}>, StorageEncrypted?:bool, KmsKeyId?:string, PreSignedUrl?:string, EnableIAMDatabaseAuthentication?:bool, EnableCloudwatchLogsExports?:array<string>, DeletionProtection?:bool, ServerlessV2ScalingConfiguration?:array{MinCapacity?:float, MaxCapacity?:float}, GlobalClusterIdentifier?:string, StorageType?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBCluster?:array{AllocatedStorage?:int, AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, CharacterSetName?:string, DatabaseName?:string, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, DBClusterOptionGroupMemberships?:array<array{DBClusterOptionGroupName?:string, Status?:string}>, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string, FeatureName?:string}>, IAMDatabaseAuthenticationEnabled?:bool, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, CopyTagsToSnapshot?:bool, EnabledCloudwatchLogsExports?:array<string>, PendingModifiedValues?:array{PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}, DBClusterIdentifier?:string, IAMDatabaseAuthenticationEnabled?:bool, EngineVersion?:string, BackupRetentionPeriod?:int, StorageType?:string, AllocatedStorage?:int, Iops?:int}, DeletionProtection?:bool, CrossAccountClone?:bool, AutomaticRestartTime?:int|string|\DateTimeInterface, ServerlessV2ScalingConfiguration?:array{MinCapacity?:float, MaxCapacity?:float}, GlobalClusterIdentifier?:string, IOOptimizedNextAllowedModificationTime?:int|string|\DateTimeInterface, StorageType?:string}}>
     */
    public function createDBClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBClusterIdentifier:string, DBClusterEndpointIdentifier:string, EndpointType:string, StaticMembers?:array<string>, ExcludedMembers?:array<string>, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{DBClusterEndpointIdentifier?:string, DBClusterIdentifier?:string, DBClusterEndpointResourceIdentifier?:string, Endpoint?:string, Status?:string, EndpointType?:string, CustomEndpointType?:string, StaticMembers?:array<string>, ExcludedMembers?:array<string>, DBClusterEndpointArn?:string}>
     */
    public function createDBClusterEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{DBClusterIdentifier:string, DBClusterEndpointIdentifier:string, EndpointType:string, StaticMembers?:array<string>, ExcludedMembers?:array<string>, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBClusterEndpointIdentifier?:string, DBClusterIdentifier?:string, DBClusterEndpointResourceIdentifier?:string, Endpoint?:string, Status?:string, EndpointType?:string, CustomEndpointType?:string, StaticMembers?:array<string>, ExcludedMembers?:array<string>, DBClusterEndpointArn?:string}>
     */
    public function createDBClusterEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBClusterParameterGroupName:string, DBParameterGroupFamily:string, Description:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{DBClusterParameterGroup?:array{DBClusterParameterGroupName?:string, DBParameterGroupFamily?:string, Description?:string, DBClusterParameterGroupArn?:string}}>
     */
    public function createDBClusterParameterGroup(array $args): \AWS\Result { }

    /**
     * @param array{DBClusterParameterGroupName:string, DBParameterGroupFamily:string, Description:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBClusterParameterGroup?:array{DBClusterParameterGroupName?:string, DBParameterGroupFamily?:string, Description?:string, DBClusterParameterGroupArn?:string}}>
     */
    public function createDBClusterParameterGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBClusterSnapshotIdentifier:string, DBClusterIdentifier:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{DBClusterSnapshot?:array{AvailabilityZones?:array<string>, DBClusterSnapshotIdentifier?:string, DBClusterIdentifier?:string, SnapshotCreateTime?:int|string|\DateTimeInterface, Engine?:string, AllocatedStorage?:int, Status?:string, Port?:int, VpcId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, MasterUsername?:string, EngineVersion?:string, LicenseModel?:string, SnapshotType?:string, PercentProgress?:int, StorageEncrypted?:bool, KmsKeyId?:string, DBClusterSnapshotArn?:string, SourceDBClusterSnapshotArn?:string, IAMDatabaseAuthenticationEnabled?:bool, StorageType?:string}}>
     */
    public function createDBClusterSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{DBClusterSnapshotIdentifier:string, DBClusterIdentifier:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBClusterSnapshot?:array{AvailabilityZones?:array<string>, DBClusterSnapshotIdentifier?:string, DBClusterIdentifier?:string, SnapshotCreateTime?:int|string|\DateTimeInterface, Engine?:string, AllocatedStorage?:int, Status?:string, Port?:int, VpcId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, MasterUsername?:string, EngineVersion?:string, LicenseModel?:string, SnapshotType?:string, PercentProgress?:int, StorageEncrypted?:bool, KmsKeyId?:string, DBClusterSnapshotArn?:string, SourceDBClusterSnapshotArn?:string, IAMDatabaseAuthenticationEnabled?:bool, StorageType?:string}}>
     */
    public function createDBClusterSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBName?:string, DBInstanceIdentifier:string, AllocatedStorage?:int, DBInstanceClass:string, Engine:string, MasterUsername?:string, MasterUserPassword?:string, DBSecurityGroups?:array<string>, VpcSecurityGroupIds?:array<string>, AvailabilityZone?:string, DBSubnetGroupName?:string, PreferredMaintenanceWindow?:string, DBParameterGroupName?:string, BackupRetentionPeriod?:int, PreferredBackupWindow?:string, Port?:int, MultiAZ?:bool, EngineVersion?:string, AutoMinorVersionUpgrade?:bool, LicenseModel?:string, Iops?:int, OptionGroupName?:string, CharacterSetName?:string, PubliclyAccessible?:bool, Tags?:array<array{Key?:string, Value?:string}>, DBClusterIdentifier:string, StorageType?:string, TdeCredentialArn?:string, TdeCredentialPassword?:string, StorageEncrypted?:bool, KmsKeyId?:string, Domain?:string, CopyTagsToSnapshot?:bool, MonitoringInterval?:int, MonitoringRoleArn?:string, DomainIAMRoleName?:string, PromotionTier?:int, Timezone?:string, EnableIAMDatabaseAuthentication?:bool, EnablePerformanceInsights?:bool, PerformanceInsightsKMSKeyId?:string, EnableCloudwatchLogsExports?:array<string>, DeletionProtection?:bool} $args
     * @return \AWS\Result<array{DBInstance?:array{DBInstanceIdentifier?:string, DBInstanceClass?:string, Engine?:string, DBInstanceStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, HostedZoneId?:string}, AllocatedStorage?:int, InstanceCreateTime?:int|string|\DateTimeInterface, PreferredBackupWindow?:string, BackupRetentionPeriod?:int, DBSecurityGroups?:array<array{DBSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, DBParameterGroups?:array<array{DBParameterGroupName?:string, ParameterApplyStatus?:string}>, AvailabilityZone?:string, DBSubnetGroup?:array{DBSubnetGroupName?:string, DBSubnetGroupDescription?:string, VpcId?:string, SubnetGroupStatus?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:array{Name?:string}, SubnetStatus?:string}>, DBSubnetGroupArn?:string}, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{DBInstanceClass?:string, AllocatedStorage?:int, MasterUserPassword?:string, Port?:int, BackupRetentionPeriod?:int, MultiAZ?:bool, EngineVersion?:string, LicenseModel?:string, Iops?:int, DBInstanceIdentifier?:string, StorageType?:string, CACertificateIdentifier?:string, DBSubnetGroupName?:string, PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}}, LatestRestorableTime?:int|string|\DateTimeInterface, MultiAZ?:bool, EngineVersion?:string, AutoMinorVersionUpgrade?:bool, ReadReplicaSourceDBInstanceIdentifier?:string, ReadReplicaDBInstanceIdentifiers?:array<string>, ReadReplicaDBClusterIdentifiers?:array<string>, LicenseModel?:string, Iops?:int, OptionGroupMemberships?:array<array{OptionGroupName?:string, Status?:string}>, CharacterSetName?:string, SecondaryAvailabilityZone?:string, PubliclyAccessible?:bool, StatusInfos?:array<array{StatusType?:string, Normal?:bool, Status?:string, Message?:string}>, StorageType?:string, TdeCredentialArn?:string, DbInstancePort?:int, DBClusterIdentifier?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbiResourceId?:string, CACertificateIdentifier?:string, DomainMemberships?:array<array{Domain?:string, Status?:string, FQDN?:string, IAMRoleName?:string}>, CopyTagsToSnapshot?:bool, MonitoringInterval?:int, EnhancedMonitoringResourceArn?:string, MonitoringRoleArn?:string, PromotionTier?:int, DBInstanceArn?:string, Timezone?:string, IAMDatabaseAuthenticationEnabled?:bool, PerformanceInsightsEnabled?:bool, PerformanceInsightsKMSKeyId?:string, EnabledCloudwatchLogsExports?:array<string>, DeletionProtection?:bool}}>
     */
    public function createDBInstance(array $args): \AWS\Result { }

    /**
     * @param array{DBName?:string, DBInstanceIdentifier:string, AllocatedStorage?:int, DBInstanceClass:string, Engine:string, MasterUsername?:string, MasterUserPassword?:string, DBSecurityGroups?:array<string>, VpcSecurityGroupIds?:array<string>, AvailabilityZone?:string, DBSubnetGroupName?:string, PreferredMaintenanceWindow?:string, DBParameterGroupName?:string, BackupRetentionPeriod?:int, PreferredBackupWindow?:string, Port?:int, MultiAZ?:bool, EngineVersion?:string, AutoMinorVersionUpgrade?:bool, LicenseModel?:string, Iops?:int, OptionGroupName?:string, CharacterSetName?:string, PubliclyAccessible?:bool, Tags?:array<array{Key?:string, Value?:string}>, DBClusterIdentifier:string, StorageType?:string, TdeCredentialArn?:string, TdeCredentialPassword?:string, StorageEncrypted?:bool, KmsKeyId?:string, Domain?:string, CopyTagsToSnapshot?:bool, MonitoringInterval?:int, MonitoringRoleArn?:string, DomainIAMRoleName?:string, PromotionTier?:int, Timezone?:string, EnableIAMDatabaseAuthentication?:bool, EnablePerformanceInsights?:bool, PerformanceInsightsKMSKeyId?:string, EnableCloudwatchLogsExports?:array<string>, DeletionProtection?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBInstance?:array{DBInstanceIdentifier?:string, DBInstanceClass?:string, Engine?:string, DBInstanceStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, HostedZoneId?:string}, AllocatedStorage?:int, InstanceCreateTime?:int|string|\DateTimeInterface, PreferredBackupWindow?:string, BackupRetentionPeriod?:int, DBSecurityGroups?:array<array{DBSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, DBParameterGroups?:array<array{DBParameterGroupName?:string, ParameterApplyStatus?:string}>, AvailabilityZone?:string, DBSubnetGroup?:array{DBSubnetGroupName?:string, DBSubnetGroupDescription?:string, VpcId?:string, SubnetGroupStatus?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:array{Name?:string}, SubnetStatus?:string}>, DBSubnetGroupArn?:string}, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{DBInstanceClass?:string, AllocatedStorage?:int, MasterUserPassword?:string, Port?:int, BackupRetentionPeriod?:int, MultiAZ?:bool, EngineVersion?:string, LicenseModel?:string, Iops?:int, DBInstanceIdentifier?:string, StorageType?:string, CACertificateIdentifier?:string, DBSubnetGroupName?:string, PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}}, LatestRestorableTime?:int|string|\DateTimeInterface, MultiAZ?:bool, EngineVersion?:string, AutoMinorVersionUpgrade?:bool, ReadReplicaSourceDBInstanceIdentifier?:string, ReadReplicaDBInstanceIdentifiers?:array<string>, ReadReplicaDBClusterIdentifiers?:array<string>, LicenseModel?:string, Iops?:int, OptionGroupMemberships?:array<array{OptionGroupName?:string, Status?:string}>, CharacterSetName?:string, SecondaryAvailabilityZone?:string, PubliclyAccessible?:bool, StatusInfos?:array<array{StatusType?:string, Normal?:bool, Status?:string, Message?:string}>, StorageType?:string, TdeCredentialArn?:string, DbInstancePort?:int, DBClusterIdentifier?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbiResourceId?:string, CACertificateIdentifier?:string, DomainMemberships?:array<array{Domain?:string, Status?:string, FQDN?:string, IAMRoleName?:string}>, CopyTagsToSnapshot?:bool, MonitoringInterval?:int, EnhancedMonitoringResourceArn?:string, MonitoringRoleArn?:string, PromotionTier?:int, DBInstanceArn?:string, Timezone?:string, IAMDatabaseAuthenticationEnabled?:bool, PerformanceInsightsEnabled?:bool, PerformanceInsightsKMSKeyId?:string, EnabledCloudwatchLogsExports?:array<string>, DeletionProtection?:bool}}>
     */
    public function createDBInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBParameterGroupName:string, DBParameterGroupFamily:string, Description:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{DBParameterGroup?:array{DBParameterGroupName?:string, DBParameterGroupFamily?:string, Description?:string, DBParameterGroupArn?:string}}>
     */
    public function createDBParameterGroup(array $args): \AWS\Result { }

    /**
     * @param array{DBParameterGroupName:string, DBParameterGroupFamily:string, Description:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBParameterGroup?:array{DBParameterGroupName?:string, DBParameterGroupFamily?:string, Description?:string, DBParameterGroupArn?:string}}>
     */
    public function createDBParameterGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBSubnetGroupName:string, DBSubnetGroupDescription:string, SubnetIds:array<string>, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{DBSubnetGroup?:array{DBSubnetGroupName?:string, DBSubnetGroupDescription?:string, VpcId?:string, SubnetGroupStatus?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:array{Name?:string}, SubnetStatus?:string}>, DBSubnetGroupArn?:string}}>
     */
    public function createDBSubnetGroup(array $args): \AWS\Result { }

    /**
     * @param array{DBSubnetGroupName:string, DBSubnetGroupDescription:string, SubnetIds:array<string>, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBSubnetGroup?:array{DBSubnetGroupName?:string, DBSubnetGroupDescription?:string, VpcId?:string, SubnetGroupStatus?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:array{Name?:string}, SubnetStatus?:string}>, DBSubnetGroupArn?:string}}>
     */
    public function createDBSubnetGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SubscriptionName:string, SnsTopicArn:string, SourceType?:string, EventCategories?:array<string>, SourceIds?:array<string>, Enabled?:bool, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{EventSubscription?:array{CustomerAwsId?:string, CustSubscriptionId?:string, SnsTopicArn?:string, Status?:string, SubscriptionCreationTime?:string, SourceType?:string, SourceIdsList?:array<string>, EventCategoriesList?:array<string>, Enabled?:bool, EventSubscriptionArn?:string}}>
     */
    public function createEventSubscription(array $args): \AWS\Result { }

    /**
     * @param array{SubscriptionName:string, SnsTopicArn:string, SourceType?:string, EventCategories?:array<string>, SourceIds?:array<string>, Enabled?:bool, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventSubscription?:array{CustomerAwsId?:string, CustSubscriptionId?:string, SnsTopicArn?:string, Status?:string, SubscriptionCreationTime?:string, SourceType?:string, SourceIdsList?:array<string>, EventCategoriesList?:array<string>, Enabled?:bool, EventSubscriptionArn?:string}}>
     */
    public function createEventSubscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalClusterIdentifier:string, SourceDBClusterIdentifier?:string, Engine?:string, EngineVersion?:string, DeletionProtection?:bool, StorageEncrypted?:bool} $args
     * @return \AWS\Result<array{GlobalCluster?:array{GlobalClusterIdentifier?:string, GlobalClusterResourceId?:string, GlobalClusterArn?:string, Status?:string, Engine?:string, EngineVersion?:string, StorageEncrypted?:bool, DeletionProtection?:bool, GlobalClusterMembers?:array<array{DBClusterArn?:string, Readers?:array<string>, IsWriter?:bool}>}}>
     */
    public function createGlobalCluster(array $args): \AWS\Result { }

    /**
     * @param array{GlobalClusterIdentifier:string, SourceDBClusterIdentifier?:string, Engine?:string, EngineVersion?:string, DeletionProtection?:bool, StorageEncrypted?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{GlobalCluster?:array{GlobalClusterIdentifier?:string, GlobalClusterResourceId?:string, GlobalClusterArn?:string, Status?:string, Engine?:string, EngineVersion?:string, StorageEncrypted?:bool, DeletionProtection?:bool, GlobalClusterMembers?:array<array{DBClusterArn?:string, Readers?:array<string>, IsWriter?:bool}>}}>
     */
    public function createGlobalClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBClusterIdentifier:string, SkipFinalSnapshot?:bool, FinalDBSnapshotIdentifier?:string} $args
     * @return \AWS\Result<array{DBCluster?:array{AllocatedStorage?:int, AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, CharacterSetName?:string, DatabaseName?:string, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, DBClusterOptionGroupMemberships?:array<array{DBClusterOptionGroupName?:string, Status?:string}>, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string, FeatureName?:string}>, IAMDatabaseAuthenticationEnabled?:bool, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, CopyTagsToSnapshot?:bool, EnabledCloudwatchLogsExports?:array<string>, PendingModifiedValues?:array{PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}, DBClusterIdentifier?:string, IAMDatabaseAuthenticationEnabled?:bool, EngineVersion?:string, BackupRetentionPeriod?:int, StorageType?:string, AllocatedStorage?:int, Iops?:int}, DeletionProtection?:bool, CrossAccountClone?:bool, AutomaticRestartTime?:int|string|\DateTimeInterface, ServerlessV2ScalingConfiguration?:array{MinCapacity?:float, MaxCapacity?:float}, GlobalClusterIdentifier?:string, IOOptimizedNextAllowedModificationTime?:int|string|\DateTimeInterface, StorageType?:string}}>
     */
    public function deleteDBCluster(array $args): \AWS\Result { }

    /**
     * @param array{DBClusterIdentifier:string, SkipFinalSnapshot?:bool, FinalDBSnapshotIdentifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBCluster?:array{AllocatedStorage?:int, AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, CharacterSetName?:string, DatabaseName?:string, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, DBClusterOptionGroupMemberships?:array<array{DBClusterOptionGroupName?:string, Status?:string}>, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string, FeatureName?:string}>, IAMDatabaseAuthenticationEnabled?:bool, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, CopyTagsToSnapshot?:bool, EnabledCloudwatchLogsExports?:array<string>, PendingModifiedValues?:array{PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}, DBClusterIdentifier?:string, IAMDatabaseAuthenticationEnabled?:bool, EngineVersion?:string, BackupRetentionPeriod?:int, StorageType?:string, AllocatedStorage?:int, Iops?:int}, DeletionProtection?:bool, CrossAccountClone?:bool, AutomaticRestartTime?:int|string|\DateTimeInterface, ServerlessV2ScalingConfiguration?:array{MinCapacity?:float, MaxCapacity?:float}, GlobalClusterIdentifier?:string, IOOptimizedNextAllowedModificationTime?:int|string|\DateTimeInterface, StorageType?:string}}>
     */
    public function deleteDBClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBClusterEndpointIdentifier:string} $args
     * @return \AWS\Result<array{DBClusterEndpointIdentifier?:string, DBClusterIdentifier?:string, DBClusterEndpointResourceIdentifier?:string, Endpoint?:string, Status?:string, EndpointType?:string, CustomEndpointType?:string, StaticMembers?:array<string>, ExcludedMembers?:array<string>, DBClusterEndpointArn?:string}>
     */
    public function deleteDBClusterEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{DBClusterEndpointIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBClusterEndpointIdentifier?:string, DBClusterIdentifier?:string, DBClusterEndpointResourceIdentifier?:string, Endpoint?:string, Status?:string, EndpointType?:string, CustomEndpointType?:string, StaticMembers?:array<string>, ExcludedMembers?:array<string>, DBClusterEndpointArn?:string}>
     */
    public function deleteDBClusterEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBClusterParameterGroupName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDBClusterParameterGroup(array $args): \AWS\Result { }

    /**
     * @param array{DBClusterParameterGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDBClusterParameterGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBClusterSnapshotIdentifier:string} $args
     * @return \AWS\Result<array{DBClusterSnapshot?:array{AvailabilityZones?:array<string>, DBClusterSnapshotIdentifier?:string, DBClusterIdentifier?:string, SnapshotCreateTime?:int|string|\DateTimeInterface, Engine?:string, AllocatedStorage?:int, Status?:string, Port?:int, VpcId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, MasterUsername?:string, EngineVersion?:string, LicenseModel?:string, SnapshotType?:string, PercentProgress?:int, StorageEncrypted?:bool, KmsKeyId?:string, DBClusterSnapshotArn?:string, SourceDBClusterSnapshotArn?:string, IAMDatabaseAuthenticationEnabled?:bool, StorageType?:string}}>
     */
    public function deleteDBClusterSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{DBClusterSnapshotIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBClusterSnapshot?:array{AvailabilityZones?:array<string>, DBClusterSnapshotIdentifier?:string, DBClusterIdentifier?:string, SnapshotCreateTime?:int|string|\DateTimeInterface, Engine?:string, AllocatedStorage?:int, Status?:string, Port?:int, VpcId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, MasterUsername?:string, EngineVersion?:string, LicenseModel?:string, SnapshotType?:string, PercentProgress?:int, StorageEncrypted?:bool, KmsKeyId?:string, DBClusterSnapshotArn?:string, SourceDBClusterSnapshotArn?:string, IAMDatabaseAuthenticationEnabled?:bool, StorageType?:string}}>
     */
    public function deleteDBClusterSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBInstanceIdentifier:string, SkipFinalSnapshot?:bool, FinalDBSnapshotIdentifier?:string} $args
     * @return \AWS\Result<array{DBInstance?:array{DBInstanceIdentifier?:string, DBInstanceClass?:string, Engine?:string, DBInstanceStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, HostedZoneId?:string}, AllocatedStorage?:int, InstanceCreateTime?:int|string|\DateTimeInterface, PreferredBackupWindow?:string, BackupRetentionPeriod?:int, DBSecurityGroups?:array<array{DBSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, DBParameterGroups?:array<array{DBParameterGroupName?:string, ParameterApplyStatus?:string}>, AvailabilityZone?:string, DBSubnetGroup?:array{DBSubnetGroupName?:string, DBSubnetGroupDescription?:string, VpcId?:string, SubnetGroupStatus?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:array{Name?:string}, SubnetStatus?:string}>, DBSubnetGroupArn?:string}, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{DBInstanceClass?:string, AllocatedStorage?:int, MasterUserPassword?:string, Port?:int, BackupRetentionPeriod?:int, MultiAZ?:bool, EngineVersion?:string, LicenseModel?:string, Iops?:int, DBInstanceIdentifier?:string, StorageType?:string, CACertificateIdentifier?:string, DBSubnetGroupName?:string, PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}}, LatestRestorableTime?:int|string|\DateTimeInterface, MultiAZ?:bool, EngineVersion?:string, AutoMinorVersionUpgrade?:bool, ReadReplicaSourceDBInstanceIdentifier?:string, ReadReplicaDBInstanceIdentifiers?:array<string>, ReadReplicaDBClusterIdentifiers?:array<string>, LicenseModel?:string, Iops?:int, OptionGroupMemberships?:array<array{OptionGroupName?:string, Status?:string}>, CharacterSetName?:string, SecondaryAvailabilityZone?:string, PubliclyAccessible?:bool, StatusInfos?:array<array{StatusType?:string, Normal?:bool, Status?:string, Message?:string}>, StorageType?:string, TdeCredentialArn?:string, DbInstancePort?:int, DBClusterIdentifier?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbiResourceId?:string, CACertificateIdentifier?:string, DomainMemberships?:array<array{Domain?:string, Status?:string, FQDN?:string, IAMRoleName?:string}>, CopyTagsToSnapshot?:bool, MonitoringInterval?:int, EnhancedMonitoringResourceArn?:string, MonitoringRoleArn?:string, PromotionTier?:int, DBInstanceArn?:string, Timezone?:string, IAMDatabaseAuthenticationEnabled?:bool, PerformanceInsightsEnabled?:bool, PerformanceInsightsKMSKeyId?:string, EnabledCloudwatchLogsExports?:array<string>, DeletionProtection?:bool}}>
     */
    public function deleteDBInstance(array $args): \AWS\Result { }

    /**
     * @param array{DBInstanceIdentifier:string, SkipFinalSnapshot?:bool, FinalDBSnapshotIdentifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBInstance?:array{DBInstanceIdentifier?:string, DBInstanceClass?:string, Engine?:string, DBInstanceStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, HostedZoneId?:string}, AllocatedStorage?:int, InstanceCreateTime?:int|string|\DateTimeInterface, PreferredBackupWindow?:string, BackupRetentionPeriod?:int, DBSecurityGroups?:array<array{DBSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, DBParameterGroups?:array<array{DBParameterGroupName?:string, ParameterApplyStatus?:string}>, AvailabilityZone?:string, DBSubnetGroup?:array{DBSubnetGroupName?:string, DBSubnetGroupDescription?:string, VpcId?:string, SubnetGroupStatus?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:array{Name?:string}, SubnetStatus?:string}>, DBSubnetGroupArn?:string}, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{DBInstanceClass?:string, AllocatedStorage?:int, MasterUserPassword?:string, Port?:int, BackupRetentionPeriod?:int, MultiAZ?:bool, EngineVersion?:string, LicenseModel?:string, Iops?:int, DBInstanceIdentifier?:string, StorageType?:string, CACertificateIdentifier?:string, DBSubnetGroupName?:string, PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}}, LatestRestorableTime?:int|string|\DateTimeInterface, MultiAZ?:bool, EngineVersion?:string, AutoMinorVersionUpgrade?:bool, ReadReplicaSourceDBInstanceIdentifier?:string, ReadReplicaDBInstanceIdentifiers?:array<string>, ReadReplicaDBClusterIdentifiers?:array<string>, LicenseModel?:string, Iops?:int, OptionGroupMemberships?:array<array{OptionGroupName?:string, Status?:string}>, CharacterSetName?:string, SecondaryAvailabilityZone?:string, PubliclyAccessible?:bool, StatusInfos?:array<array{StatusType?:string, Normal?:bool, Status?:string, Message?:string}>, StorageType?:string, TdeCredentialArn?:string, DbInstancePort?:int, DBClusterIdentifier?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbiResourceId?:string, CACertificateIdentifier?:string, DomainMemberships?:array<array{Domain?:string, Status?:string, FQDN?:string, IAMRoleName?:string}>, CopyTagsToSnapshot?:bool, MonitoringInterval?:int, EnhancedMonitoringResourceArn?:string, MonitoringRoleArn?:string, PromotionTier?:int, DBInstanceArn?:string, Timezone?:string, IAMDatabaseAuthenticationEnabled?:bool, PerformanceInsightsEnabled?:bool, PerformanceInsightsKMSKeyId?:string, EnabledCloudwatchLogsExports?:array<string>, DeletionProtection?:bool}}>
     */
    public function deleteDBInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBParameterGroupName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDBParameterGroup(array $args): \AWS\Result { }

    /**
     * @param array{DBParameterGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDBParameterGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBSubnetGroupName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteDBSubnetGroup(array $args): \AWS\Result { }

    /**
     * @param array{DBSubnetGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteDBSubnetGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SubscriptionName:string} $args
     * @return \AWS\Result<array{EventSubscription?:array{CustomerAwsId?:string, CustSubscriptionId?:string, SnsTopicArn?:string, Status?:string, SubscriptionCreationTime?:string, SourceType?:string, SourceIdsList?:array<string>, EventCategoriesList?:array<string>, Enabled?:bool, EventSubscriptionArn?:string}}>
     */
    public function deleteEventSubscription(array $args): \AWS\Result { }

    /**
     * @param array{SubscriptionName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventSubscription?:array{CustomerAwsId?:string, CustSubscriptionId?:string, SnsTopicArn?:string, Status?:string, SubscriptionCreationTime?:string, SourceType?:string, SourceIdsList?:array<string>, EventCategoriesList?:array<string>, Enabled?:bool, EventSubscriptionArn?:string}}>
     */
    public function deleteEventSubscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalClusterIdentifier:string} $args
     * @return \AWS\Result<array{GlobalCluster?:array{GlobalClusterIdentifier?:string, GlobalClusterResourceId?:string, GlobalClusterArn?:string, Status?:string, Engine?:string, EngineVersion?:string, StorageEncrypted?:bool, DeletionProtection?:bool, GlobalClusterMembers?:array<array{DBClusterArn?:string, Readers?:array<string>, IsWriter?:bool}>}}>
     */
    public function deleteGlobalCluster(array $args): \AWS\Result { }

    /**
     * @param array{GlobalClusterIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GlobalCluster?:array{GlobalClusterIdentifier?:string, GlobalClusterResourceId?:string, GlobalClusterArn?:string, Status?:string, Engine?:string, EngineVersion?:string, StorageEncrypted?:bool, DeletionProtection?:bool, GlobalClusterMembers?:array<array{DBClusterArn?:string, Readers?:array<string>, IsWriter?:bool}>}}>
     */
    public function deleteGlobalClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBClusterIdentifier?:string, DBClusterEndpointIdentifier?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{Marker?:string, DBClusterEndpoints?:array<array{DBClusterEndpointIdentifier?:string, DBClusterIdentifier?:string, DBClusterEndpointResourceIdentifier?:string, Endpoint?:string, Status?:string, EndpointType?:string, CustomEndpointType?:string, StaticMembers?:array<string>, ExcludedMembers?:array<string>, DBClusterEndpointArn?:string}>}>
     */
    public function describeDBClusterEndpoints(array $args = []): \AWS\Result { }

    /**
     * @param array{DBClusterIdentifier?:string, DBClusterEndpointIdentifier?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, DBClusterEndpoints?:array<array{DBClusterEndpointIdentifier?:string, DBClusterIdentifier?:string, DBClusterEndpointResourceIdentifier?:string, Endpoint?:string, Status?:string, EndpointType?:string, CustomEndpointType?:string, StaticMembers?:array<string>, ExcludedMembers?:array<string>, DBClusterEndpointArn?:string}>}>
     */
    public function describeDBClusterEndpointsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBClusterParameterGroupName?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{Marker?:string, DBClusterParameterGroups?:array<array{DBClusterParameterGroupName?:string, DBParameterGroupFamily?:string, Description?:string, DBClusterParameterGroupArn?:string}>}>
     */
    public function describeDBClusterParameterGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{DBClusterParameterGroupName?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, DBClusterParameterGroups?:array<array{DBClusterParameterGroupName?:string, DBParameterGroupFamily?:string, Description?:string, DBClusterParameterGroupArn?:string}>}>
     */
    public function describeDBClusterParameterGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBClusterParameterGroupName:string, Source?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{Parameters?:array<array{ParameterName?:string, ParameterValue?:string, Description?:string, Source?:string, ApplyType?:string, DataType?:string, AllowedValues?:string, IsModifiable?:bool, MinimumEngineVersion?:string, ApplyMethod?:"immediate"|"pending-reboot"}>, Marker?:string}>
     */
    public function describeDBClusterParameters(array $args): \AWS\Result { }

    /**
     * @param array{DBClusterParameterGroupName:string, Source?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Parameters?:array<array{ParameterName?:string, ParameterValue?:string, Description?:string, Source?:string, ApplyType?:string, DataType?:string, AllowedValues?:string, IsModifiable?:bool, MinimumEngineVersion?:string, ApplyMethod?:"immediate"|"pending-reboot"}>, Marker?:string}>
     */
    public function describeDBClusterParametersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBClusterSnapshotIdentifier:string} $args
     * @return \AWS\Result<array{DBClusterSnapshotAttributesResult?:array{DBClusterSnapshotIdentifier?:string, DBClusterSnapshotAttributes?:array<array{AttributeName?:string, AttributeValues?:array<string>}>}}>
     */
    public function describeDBClusterSnapshotAttributes(array $args): \AWS\Result { }

    /**
     * @param array{DBClusterSnapshotIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBClusterSnapshotAttributesResult?:array{DBClusterSnapshotIdentifier?:string, DBClusterSnapshotAttributes?:array<array{AttributeName?:string, AttributeValues?:array<string>}>}}>
     */
    public function describeDBClusterSnapshotAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBClusterIdentifier?:string, DBClusterSnapshotIdentifier?:string, SnapshotType?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string, IncludeShared?:bool, IncludePublic?:bool} $args
     * @return \AWS\Result<array{Marker?:string, DBClusterSnapshots?:array<array{AvailabilityZones?:array<string>, DBClusterSnapshotIdentifier?:string, DBClusterIdentifier?:string, SnapshotCreateTime?:int|string|\DateTimeInterface, Engine?:string, AllocatedStorage?:int, Status?:string, Port?:int, VpcId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, MasterUsername?:string, EngineVersion?:string, LicenseModel?:string, SnapshotType?:string, PercentProgress?:int, StorageEncrypted?:bool, KmsKeyId?:string, DBClusterSnapshotArn?:string, SourceDBClusterSnapshotArn?:string, IAMDatabaseAuthenticationEnabled?:bool, StorageType?:string}>}>
     */
    public function describeDBClusterSnapshots(array $args = []): \AWS\Result { }

    /**
     * @param array{DBClusterIdentifier?:string, DBClusterSnapshotIdentifier?:string, SnapshotType?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string, IncludeShared?:bool, IncludePublic?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, DBClusterSnapshots?:array<array{AvailabilityZones?:array<string>, DBClusterSnapshotIdentifier?:string, DBClusterIdentifier?:string, SnapshotCreateTime?:int|string|\DateTimeInterface, Engine?:string, AllocatedStorage?:int, Status?:string, Port?:int, VpcId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, MasterUsername?:string, EngineVersion?:string, LicenseModel?:string, SnapshotType?:string, PercentProgress?:int, StorageEncrypted?:bool, KmsKeyId?:string, DBClusterSnapshotArn?:string, SourceDBClusterSnapshotArn?:string, IAMDatabaseAuthenticationEnabled?:bool, StorageType?:string}>}>
     */
    public function describeDBClusterSnapshotsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBClusterIdentifier?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{Marker?:string, DBClusters?:array<array{AllocatedStorage?:int, AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, CharacterSetName?:string, DatabaseName?:string, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, DBClusterOptionGroupMemberships?:array<array{DBClusterOptionGroupName?:string, Status?:string}>, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string, FeatureName?:string}>, IAMDatabaseAuthenticationEnabled?:bool, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, CopyTagsToSnapshot?:bool, EnabledCloudwatchLogsExports?:array<string>, PendingModifiedValues?:array{PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}, DBClusterIdentifier?:string, IAMDatabaseAuthenticationEnabled?:bool, EngineVersion?:string, BackupRetentionPeriod?:int, StorageType?:string, AllocatedStorage?:int, Iops?:int}, DeletionProtection?:bool, CrossAccountClone?:bool, AutomaticRestartTime?:int|string|\DateTimeInterface, ServerlessV2ScalingConfiguration?:array{MinCapacity?:float, MaxCapacity?:float}, GlobalClusterIdentifier?:string, IOOptimizedNextAllowedModificationTime?:int|string|\DateTimeInterface, StorageType?:string}>}>
     */
    public function describeDBClusters(array $args = []): \AWS\Result { }

    /**
     * @param array{DBClusterIdentifier?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, DBClusters?:array<array{AllocatedStorage?:int, AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, CharacterSetName?:string, DatabaseName?:string, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, DBClusterOptionGroupMemberships?:array<array{DBClusterOptionGroupName?:string, Status?:string}>, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string, FeatureName?:string}>, IAMDatabaseAuthenticationEnabled?:bool, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, CopyTagsToSnapshot?:bool, EnabledCloudwatchLogsExports?:array<string>, PendingModifiedValues?:array{PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}, DBClusterIdentifier?:string, IAMDatabaseAuthenticationEnabled?:bool, EngineVersion?:string, BackupRetentionPeriod?:int, StorageType?:string, AllocatedStorage?:int, Iops?:int}, DeletionProtection?:bool, CrossAccountClone?:bool, AutomaticRestartTime?:int|string|\DateTimeInterface, ServerlessV2ScalingConfiguration?:array{MinCapacity?:float, MaxCapacity?:float}, GlobalClusterIdentifier?:string, IOOptimizedNextAllowedModificationTime?:int|string|\DateTimeInterface, StorageType?:string}>}>
     */
    public function describeDBClustersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Engine?:string, EngineVersion?:string, DBParameterGroupFamily?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string, DefaultOnly?:bool, ListSupportedCharacterSets?:bool, ListSupportedTimezones?:bool} $args
     * @return \AWS\Result<array{Marker?:string, DBEngineVersions?:array<array{Engine?:string, EngineVersion?:string, DBParameterGroupFamily?:string, DBEngineDescription?:string, DBEngineVersionDescription?:string, DefaultCharacterSet?:array{CharacterSetName?:string, CharacterSetDescription?:string}, SupportedCharacterSets?:array<array{CharacterSetName?:string, CharacterSetDescription?:string}>, ValidUpgradeTarget?:array<array{Engine?:string, EngineVersion?:string, Description?:string, AutoUpgrade?:bool, IsMajorVersionUpgrade?:bool, SupportsGlobalDatabases?:bool}>, SupportedTimezones?:array<array{TimezoneName?:string}>, ExportableLogTypes?:array<string>, SupportsLogExportsToCloudwatchLogs?:bool, SupportsReadReplica?:bool, SupportsGlobalDatabases?:bool}>}>
     */
    public function describeDBEngineVersions(array $args = []): \AWS\Result { }

    /**
     * @param array{Engine?:string, EngineVersion?:string, DBParameterGroupFamily?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string, DefaultOnly?:bool, ListSupportedCharacterSets?:bool, ListSupportedTimezones?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, DBEngineVersions?:array<array{Engine?:string, EngineVersion?:string, DBParameterGroupFamily?:string, DBEngineDescription?:string, DBEngineVersionDescription?:string, DefaultCharacterSet?:array{CharacterSetName?:string, CharacterSetDescription?:string}, SupportedCharacterSets?:array<array{CharacterSetName?:string, CharacterSetDescription?:string}>, ValidUpgradeTarget?:array<array{Engine?:string, EngineVersion?:string, Description?:string, AutoUpgrade?:bool, IsMajorVersionUpgrade?:bool, SupportsGlobalDatabases?:bool}>, SupportedTimezones?:array<array{TimezoneName?:string}>, ExportableLogTypes?:array<string>, SupportsLogExportsToCloudwatchLogs?:bool, SupportsReadReplica?:bool, SupportsGlobalDatabases?:bool}>}>
     */
    public function describeDBEngineVersionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBInstanceIdentifier?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{Marker?:string, DBInstances?:array<array{DBInstanceIdentifier?:string, DBInstanceClass?:string, Engine?:string, DBInstanceStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, HostedZoneId?:string}, AllocatedStorage?:int, InstanceCreateTime?:int|string|\DateTimeInterface, PreferredBackupWindow?:string, BackupRetentionPeriod?:int, DBSecurityGroups?:array<array{DBSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, DBParameterGroups?:array<array{DBParameterGroupName?:string, ParameterApplyStatus?:string}>, AvailabilityZone?:string, DBSubnetGroup?:array{DBSubnetGroupName?:string, DBSubnetGroupDescription?:string, VpcId?:string, SubnetGroupStatus?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:array{Name?:string}, SubnetStatus?:string}>, DBSubnetGroupArn?:string}, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{DBInstanceClass?:string, AllocatedStorage?:int, MasterUserPassword?:string, Port?:int, BackupRetentionPeriod?:int, MultiAZ?:bool, EngineVersion?:string, LicenseModel?:string, Iops?:int, DBInstanceIdentifier?:string, StorageType?:string, CACertificateIdentifier?:string, DBSubnetGroupName?:string, PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}}, LatestRestorableTime?:int|string|\DateTimeInterface, MultiAZ?:bool, EngineVersion?:string, AutoMinorVersionUpgrade?:bool, ReadReplicaSourceDBInstanceIdentifier?:string, ReadReplicaDBInstanceIdentifiers?:array<string>, ReadReplicaDBClusterIdentifiers?:array<string>, LicenseModel?:string, Iops?:int, OptionGroupMemberships?:array<array{OptionGroupName?:string, Status?:string}>, CharacterSetName?:string, SecondaryAvailabilityZone?:string, PubliclyAccessible?:bool, StatusInfos?:array<array{StatusType?:string, Normal?:bool, Status?:string, Message?:string}>, StorageType?:string, TdeCredentialArn?:string, DbInstancePort?:int, DBClusterIdentifier?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbiResourceId?:string, CACertificateIdentifier?:string, DomainMemberships?:array<array{Domain?:string, Status?:string, FQDN?:string, IAMRoleName?:string}>, CopyTagsToSnapshot?:bool, MonitoringInterval?:int, EnhancedMonitoringResourceArn?:string, MonitoringRoleArn?:string, PromotionTier?:int, DBInstanceArn?:string, Timezone?:string, IAMDatabaseAuthenticationEnabled?:bool, PerformanceInsightsEnabled?:bool, PerformanceInsightsKMSKeyId?:string, EnabledCloudwatchLogsExports?:array<string>, DeletionProtection?:bool}>}>
     */
    public function describeDBInstances(array $args = []): \AWS\Result { }

    /**
     * @param array{DBInstanceIdentifier?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, DBInstances?:array<array{DBInstanceIdentifier?:string, DBInstanceClass?:string, Engine?:string, DBInstanceStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, HostedZoneId?:string}, AllocatedStorage?:int, InstanceCreateTime?:int|string|\DateTimeInterface, PreferredBackupWindow?:string, BackupRetentionPeriod?:int, DBSecurityGroups?:array<array{DBSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, DBParameterGroups?:array<array{DBParameterGroupName?:string, ParameterApplyStatus?:string}>, AvailabilityZone?:string, DBSubnetGroup?:array{DBSubnetGroupName?:string, DBSubnetGroupDescription?:string, VpcId?:string, SubnetGroupStatus?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:array{Name?:string}, SubnetStatus?:string}>, DBSubnetGroupArn?:string}, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{DBInstanceClass?:string, AllocatedStorage?:int, MasterUserPassword?:string, Port?:int, BackupRetentionPeriod?:int, MultiAZ?:bool, EngineVersion?:string, LicenseModel?:string, Iops?:int, DBInstanceIdentifier?:string, StorageType?:string, CACertificateIdentifier?:string, DBSubnetGroupName?:string, PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}}, LatestRestorableTime?:int|string|\DateTimeInterface, MultiAZ?:bool, EngineVersion?:string, AutoMinorVersionUpgrade?:bool, ReadReplicaSourceDBInstanceIdentifier?:string, ReadReplicaDBInstanceIdentifiers?:array<string>, ReadReplicaDBClusterIdentifiers?:array<string>, LicenseModel?:string, Iops?:int, OptionGroupMemberships?:array<array{OptionGroupName?:string, Status?:string}>, CharacterSetName?:string, SecondaryAvailabilityZone?:string, PubliclyAccessible?:bool, StatusInfos?:array<array{StatusType?:string, Normal?:bool, Status?:string, Message?:string}>, StorageType?:string, TdeCredentialArn?:string, DbInstancePort?:int, DBClusterIdentifier?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbiResourceId?:string, CACertificateIdentifier?:string, DomainMemberships?:array<array{Domain?:string, Status?:string, FQDN?:string, IAMRoleName?:string}>, CopyTagsToSnapshot?:bool, MonitoringInterval?:int, EnhancedMonitoringResourceArn?:string, MonitoringRoleArn?:string, PromotionTier?:int, DBInstanceArn?:string, Timezone?:string, IAMDatabaseAuthenticationEnabled?:bool, PerformanceInsightsEnabled?:bool, PerformanceInsightsKMSKeyId?:string, EnabledCloudwatchLogsExports?:array<string>, DeletionProtection?:bool}>}>
     */
    public function describeDBInstancesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBParameterGroupName?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{Marker?:string, DBParameterGroups?:array<array{DBParameterGroupName?:string, DBParameterGroupFamily?:string, Description?:string, DBParameterGroupArn?:string}>}>
     */
    public function describeDBParameterGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{DBParameterGroupName?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, DBParameterGroups?:array<array{DBParameterGroupName?:string, DBParameterGroupFamily?:string, Description?:string, DBParameterGroupArn?:string}>}>
     */
    public function describeDBParameterGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBParameterGroupName:string, Source?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{Parameters?:array<array{ParameterName?:string, ParameterValue?:string, Description?:string, Source?:string, ApplyType?:string, DataType?:string, AllowedValues?:string, IsModifiable?:bool, MinimumEngineVersion?:string, ApplyMethod?:"immediate"|"pending-reboot"}>, Marker?:string}>
     */
    public function describeDBParameters(array $args): \AWS\Result { }

    /**
     * @param array{DBParameterGroupName:string, Source?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Parameters?:array<array{ParameterName?:string, ParameterValue?:string, Description?:string, Source?:string, ApplyType?:string, DataType?:string, AllowedValues?:string, IsModifiable?:bool, MinimumEngineVersion?:string, ApplyMethod?:"immediate"|"pending-reboot"}>, Marker?:string}>
     */
    public function describeDBParametersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBSubnetGroupName?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{Marker?:string, DBSubnetGroups?:array<array{DBSubnetGroupName?:string, DBSubnetGroupDescription?:string, VpcId?:string, SubnetGroupStatus?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:array{Name?:string}, SubnetStatus?:string}>, DBSubnetGroupArn?:string}>}>
     */
    public function describeDBSubnetGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{DBSubnetGroupName?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, DBSubnetGroups?:array<array{DBSubnetGroupName?:string, DBSubnetGroupDescription?:string, VpcId?:string, SubnetGroupStatus?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:array{Name?:string}, SubnetStatus?:string}>, DBSubnetGroupArn?:string}>}>
     */
    public function describeDBSubnetGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBParameterGroupFamily:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{EngineDefaults?:array{DBParameterGroupFamily?:string, Marker?:string, Parameters?:array<array{ParameterName?:string, ParameterValue?:string, Description?:string, Source?:string, ApplyType?:string, DataType?:string, AllowedValues?:string, IsModifiable?:bool, MinimumEngineVersion?:string, ApplyMethod?:"immediate"|"pending-reboot"}>}}>
     */
    public function describeEngineDefaultClusterParameters(array $args): \AWS\Result { }

    /**
     * @param array{DBParameterGroupFamily:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EngineDefaults?:array{DBParameterGroupFamily?:string, Marker?:string, Parameters?:array<array{ParameterName?:string, ParameterValue?:string, Description?:string, Source?:string, ApplyType?:string, DataType?:string, AllowedValues?:string, IsModifiable?:bool, MinimumEngineVersion?:string, ApplyMethod?:"immediate"|"pending-reboot"}>}}>
     */
    public function describeEngineDefaultClusterParametersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBParameterGroupFamily:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{EngineDefaults?:array{DBParameterGroupFamily?:string, Marker?:string, Parameters?:array<array{ParameterName?:string, ParameterValue?:string, Description?:string, Source?:string, ApplyType?:string, DataType?:string, AllowedValues?:string, IsModifiable?:bool, MinimumEngineVersion?:string, ApplyMethod?:"immediate"|"pending-reboot"}>}}>
     */
    public function describeEngineDefaultParameters(array $args): \AWS\Result { }

    /**
     * @param array{DBParameterGroupFamily:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EngineDefaults?:array{DBParameterGroupFamily?:string, Marker?:string, Parameters?:array<array{ParameterName?:string, ParameterValue?:string, Description?:string, Source?:string, ApplyType?:string, DataType?:string, AllowedValues?:string, IsModifiable?:bool, MinimumEngineVersion?:string, ApplyMethod?:"immediate"|"pending-reboot"}>}}>
     */
    public function describeEngineDefaultParametersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SourceType?:string, Filters?:array<array{Name:string, Values:array<string>}>} $args
     * @return \AWS\Result<array{EventCategoriesMapList?:array<array{SourceType?:string, EventCategories?:array<string>}>}>
     */
    public function describeEventCategories(array $args = []): \AWS\Result { }

    /**
     * @param array{SourceType?:string, Filters?:array<array{Name:string, Values:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventCategoriesMapList?:array<array{SourceType?:string, EventCategories?:array<string>}>}>
     */
    public function describeEventCategoriesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SubscriptionName?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{Marker?:string, EventSubscriptionsList?:array<array{CustomerAwsId?:string, CustSubscriptionId?:string, SnsTopicArn?:string, Status?:string, SubscriptionCreationTime?:string, SourceType?:string, SourceIdsList?:array<string>, EventCategoriesList?:array<string>, Enabled?:bool, EventSubscriptionArn?:string}>}>
     */
    public function describeEventSubscriptions(array $args = []): \AWS\Result { }

    /**
     * @param array{SubscriptionName?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, EventSubscriptionsList?:array<array{CustomerAwsId?:string, CustSubscriptionId?:string, SnsTopicArn?:string, Status?:string, SubscriptionCreationTime?:string, SourceType?:string, SourceIdsList?:array<string>, EventCategoriesList?:array<string>, Enabled?:bool, EventSubscriptionArn?:string}>}>
     */
    public function describeEventSubscriptionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SourceIdentifier?:string, SourceType?:"db-instance"|"db-parameter-group"|"db-security-group"|"db-snapshot"|"db-cluster"|"db-cluster-snapshot", StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Duration?:int, EventCategories?:array<string>, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{Marker?:string, Events?:array<array{SourceIdentifier?:string, SourceType?:"db-instance"|"db-parameter-group"|"db-security-group"|"db-snapshot"|"db-cluster"|"db-cluster-snapshot", Message?:string, EventCategories?:array<string>, Date?:int|string|\DateTimeInterface, SourceArn?:string}>}>
     */
    public function describeEvents(array $args = []): \AWS\Result { }

    /**
     * @param array{SourceIdentifier?:string, SourceType?:"db-instance"|"db-parameter-group"|"db-security-group"|"db-snapshot"|"db-cluster"|"db-cluster-snapshot", StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Duration?:int, EventCategories?:array<string>, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, Events?:array<array{SourceIdentifier?:string, SourceType?:"db-instance"|"db-parameter-group"|"db-security-group"|"db-snapshot"|"db-cluster"|"db-cluster-snapshot", Message?:string, EventCategories?:array<string>, Date?:int|string|\DateTimeInterface, SourceArn?:string}>}>
     */
    public function describeEventsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalClusterIdentifier?:string, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{Marker?:string, GlobalClusters?:array<array{GlobalClusterIdentifier?:string, GlobalClusterResourceId?:string, GlobalClusterArn?:string, Status?:string, Engine?:string, EngineVersion?:string, StorageEncrypted?:bool, DeletionProtection?:bool, GlobalClusterMembers?:array<array{DBClusterArn?:string, Readers?:array<string>, IsWriter?:bool}>}>}>
     */
    public function describeGlobalClusters(array $args = []): \AWS\Result { }

    /**
     * @param array{GlobalClusterIdentifier?:string, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, GlobalClusters?:array<array{GlobalClusterIdentifier?:string, GlobalClusterResourceId?:string, GlobalClusterArn?:string, Status?:string, Engine?:string, EngineVersion?:string, StorageEncrypted?:bool, DeletionProtection?:bool, GlobalClusterMembers?:array<array{DBClusterArn?:string, Readers?:array<string>, IsWriter?:bool}>}>}>
     */
    public function describeGlobalClustersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Engine:string, EngineVersion?:string, DBInstanceClass?:string, LicenseModel?:string, Vpc?:bool, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{OrderableDBInstanceOptions?:array<array{Engine?:string, EngineVersion?:string, DBInstanceClass?:string, LicenseModel?:string, AvailabilityZones?:array<array{Name?:string}>, MultiAZCapable?:bool, ReadReplicaCapable?:bool, Vpc?:bool, SupportsStorageEncryption?:bool, StorageType?:string, SupportsIops?:bool, SupportsEnhancedMonitoring?:bool, SupportsIAMDatabaseAuthentication?:bool, SupportsPerformanceInsights?:bool, MinStorageSize?:int, MaxStorageSize?:int, MinIopsPerDbInstance?:int, MaxIopsPerDbInstance?:int, MinIopsPerGib?:float, MaxIopsPerGib?:float, SupportsGlobalDatabases?:bool}>, Marker?:string}>
     */
    public function describeOrderableDBInstanceOptions(array $args): \AWS\Result { }

    /**
     * @param array{Engine:string, EngineVersion?:string, DBInstanceClass?:string, LicenseModel?:string, Vpc?:bool, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{OrderableDBInstanceOptions?:array<array{Engine?:string, EngineVersion?:string, DBInstanceClass?:string, LicenseModel?:string, AvailabilityZones?:array<array{Name?:string}>, MultiAZCapable?:bool, ReadReplicaCapable?:bool, Vpc?:bool, SupportsStorageEncryption?:bool, StorageType?:string, SupportsIops?:bool, SupportsEnhancedMonitoring?:bool, SupportsIAMDatabaseAuthentication?:bool, SupportsPerformanceInsights?:bool, MinStorageSize?:int, MaxStorageSize?:int, MinIopsPerDbInstance?:int, MaxIopsPerDbInstance?:int, MinIopsPerGib?:float, MaxIopsPerGib?:float, SupportsGlobalDatabases?:bool}>, Marker?:string}>
     */
    public function describeOrderableDBInstanceOptionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceIdentifier?:string, Filters?:array<array{Name:string, Values:array<string>}>, Marker?:string, MaxRecords?:int} $args
     * @return \AWS\Result<array{PendingMaintenanceActions?:array<array{ResourceIdentifier?:string, PendingMaintenanceActionDetails?:array<array{Action?:string, AutoAppliedAfterDate?:int|string|\DateTimeInterface, ForcedApplyDate?:int|string|\DateTimeInterface, OptInStatus?:string, CurrentApplyDate?:int|string|\DateTimeInterface, Description?:string}>}>, Marker?:string}>
     */
    public function describePendingMaintenanceActions(array $args = []): \AWS\Result { }

    /**
     * @param array{ResourceIdentifier?:string, Filters?:array<array{Name:string, Values:array<string>}>, Marker?:string, MaxRecords?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{PendingMaintenanceActions?:array<array{ResourceIdentifier?:string, PendingMaintenanceActionDetails?:array<array{Action?:string, AutoAppliedAfterDate?:int|string|\DateTimeInterface, ForcedApplyDate?:int|string|\DateTimeInterface, OptInStatus?:string, CurrentApplyDate?:int|string|\DateTimeInterface, Description?:string}>}>, Marker?:string}>
     */
    public function describePendingMaintenanceActionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBInstanceIdentifier:string} $args
     * @return \AWS\Result<array{ValidDBInstanceModificationsMessage?:array{Storage?:array<array{StorageType?:string, StorageSize?:array<array{From?:int, To?:int, Step?:int}>, ProvisionedIops?:array<array{From?:int, To?:int, Step?:int}>, IopsToStorageRatio?:array<array{From?:float, To?:float}>}>}}>
     */
    public function describeValidDBInstanceModifications(array $args): \AWS\Result { }

    /**
     * @param array{DBInstanceIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ValidDBInstanceModificationsMessage?:array{Storage?:array<array{StorageType?:string, StorageSize?:array<array{From?:int, To?:int, Step?:int}>, ProvisionedIops?:array<array{From?:int, To?:int, Step?:int}>, IopsToStorageRatio?:array<array{From?:float, To?:float}>}>}}>
     */
    public function describeValidDBInstanceModificationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBClusterIdentifier?:string, TargetDBInstanceIdentifier?:string} $args
     * @return \AWS\Result<array{DBCluster?:array{AllocatedStorage?:int, AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, CharacterSetName?:string, DatabaseName?:string, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, DBClusterOptionGroupMemberships?:array<array{DBClusterOptionGroupName?:string, Status?:string}>, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string, FeatureName?:string}>, IAMDatabaseAuthenticationEnabled?:bool, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, CopyTagsToSnapshot?:bool, EnabledCloudwatchLogsExports?:array<string>, PendingModifiedValues?:array{PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}, DBClusterIdentifier?:string, IAMDatabaseAuthenticationEnabled?:bool, EngineVersion?:string, BackupRetentionPeriod?:int, StorageType?:string, AllocatedStorage?:int, Iops?:int}, DeletionProtection?:bool, CrossAccountClone?:bool, AutomaticRestartTime?:int|string|\DateTimeInterface, ServerlessV2ScalingConfiguration?:array{MinCapacity?:float, MaxCapacity?:float}, GlobalClusterIdentifier?:string, IOOptimizedNextAllowedModificationTime?:int|string|\DateTimeInterface, StorageType?:string}}>
     */
    public function failoverDBCluster(array $args = []): \AWS\Result { }

    /**
     * @param array{DBClusterIdentifier?:string, TargetDBInstanceIdentifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBCluster?:array{AllocatedStorage?:int, AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, CharacterSetName?:string, DatabaseName?:string, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, DBClusterOptionGroupMemberships?:array<array{DBClusterOptionGroupName?:string, Status?:string}>, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string, FeatureName?:string}>, IAMDatabaseAuthenticationEnabled?:bool, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, CopyTagsToSnapshot?:bool, EnabledCloudwatchLogsExports?:array<string>, PendingModifiedValues?:array{PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}, DBClusterIdentifier?:string, IAMDatabaseAuthenticationEnabled?:bool, EngineVersion?:string, BackupRetentionPeriod?:int, StorageType?:string, AllocatedStorage?:int, Iops?:int}, DeletionProtection?:bool, CrossAccountClone?:bool, AutomaticRestartTime?:int|string|\DateTimeInterface, ServerlessV2ScalingConfiguration?:array{MinCapacity?:float, MaxCapacity?:float}, GlobalClusterIdentifier?:string, IOOptimizedNextAllowedModificationTime?:int|string|\DateTimeInterface, StorageType?:string}}>
     */
    public function failoverDBClusterAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalClusterIdentifier:string, TargetDbClusterIdentifier:string} $args
     * @return \AWS\Result<array{GlobalCluster?:array{GlobalClusterIdentifier?:string, GlobalClusterResourceId?:string, GlobalClusterArn?:string, Status?:string, Engine?:string, EngineVersion?:string, StorageEncrypted?:bool, DeletionProtection?:bool, GlobalClusterMembers?:array<array{DBClusterArn?:string, Readers?:array<string>, IsWriter?:bool}>}}>
     */
    public function failoverGlobalCluster(array $args): \AWS\Result { }

    /**
     * @param array{GlobalClusterIdentifier:string, TargetDbClusterIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GlobalCluster?:array{GlobalClusterIdentifier?:string, GlobalClusterResourceId?:string, GlobalClusterArn?:string, Status?:string, Engine?:string, EngineVersion?:string, StorageEncrypted?:bool, DeletionProtection?:bool, GlobalClusterMembers?:array<array{DBClusterArn?:string, Readers?:array<string>, IsWriter?:bool}>}}>
     */
    public function failoverGlobalClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceName:string, Filters?:array<array{Name:string, Values:array<string>}>} $args
     * @return \AWS\Result<array{TagList?:array<array{Key?:string, Value?:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceName:string, Filters?:array<array{Name:string, Values:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{TagList?:array<array{Key?:string, Value?:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBClusterIdentifier:string, NewDBClusterIdentifier?:string, ApplyImmediately?:bool, BackupRetentionPeriod?:int, DBClusterParameterGroupName?:string, VpcSecurityGroupIds?:array<string>, Port?:int, MasterUserPassword?:string, OptionGroupName?:string, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, EnableIAMDatabaseAuthentication?:bool, CloudwatchLogsExportConfiguration?:array{EnableLogTypes?:array<string>, DisableLogTypes?:array<string>}, EngineVersion?:string, AllowMajorVersionUpgrade?:bool, DBInstanceParameterGroupName?:string, DeletionProtection?:bool, CopyTagsToSnapshot?:bool, ServerlessV2ScalingConfiguration?:array{MinCapacity?:float, MaxCapacity?:float}, StorageType?:string} $args
     * @return \AWS\Result<array{DBCluster?:array{AllocatedStorage?:int, AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, CharacterSetName?:string, DatabaseName?:string, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, DBClusterOptionGroupMemberships?:array<array{DBClusterOptionGroupName?:string, Status?:string}>, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string, FeatureName?:string}>, IAMDatabaseAuthenticationEnabled?:bool, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, CopyTagsToSnapshot?:bool, EnabledCloudwatchLogsExports?:array<string>, PendingModifiedValues?:array{PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}, DBClusterIdentifier?:string, IAMDatabaseAuthenticationEnabled?:bool, EngineVersion?:string, BackupRetentionPeriod?:int, StorageType?:string, AllocatedStorage?:int, Iops?:int}, DeletionProtection?:bool, CrossAccountClone?:bool, AutomaticRestartTime?:int|string|\DateTimeInterface, ServerlessV2ScalingConfiguration?:array{MinCapacity?:float, MaxCapacity?:float}, GlobalClusterIdentifier?:string, IOOptimizedNextAllowedModificationTime?:int|string|\DateTimeInterface, StorageType?:string}}>
     */
    public function modifyDBCluster(array $args): \AWS\Result { }

    /**
     * @param array{DBClusterIdentifier:string, NewDBClusterIdentifier?:string, ApplyImmediately?:bool, BackupRetentionPeriod?:int, DBClusterParameterGroupName?:string, VpcSecurityGroupIds?:array<string>, Port?:int, MasterUserPassword?:string, OptionGroupName?:string, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, EnableIAMDatabaseAuthentication?:bool, CloudwatchLogsExportConfiguration?:array{EnableLogTypes?:array<string>, DisableLogTypes?:array<string>}, EngineVersion?:string, AllowMajorVersionUpgrade?:bool, DBInstanceParameterGroupName?:string, DeletionProtection?:bool, CopyTagsToSnapshot?:bool, ServerlessV2ScalingConfiguration?:array{MinCapacity?:float, MaxCapacity?:float}, StorageType?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBCluster?:array{AllocatedStorage?:int, AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, CharacterSetName?:string, DatabaseName?:string, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, DBClusterOptionGroupMemberships?:array<array{DBClusterOptionGroupName?:string, Status?:string}>, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string, FeatureName?:string}>, IAMDatabaseAuthenticationEnabled?:bool, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, CopyTagsToSnapshot?:bool, EnabledCloudwatchLogsExports?:array<string>, PendingModifiedValues?:array{PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}, DBClusterIdentifier?:string, IAMDatabaseAuthenticationEnabled?:bool, EngineVersion?:string, BackupRetentionPeriod?:int, StorageType?:string, AllocatedStorage?:int, Iops?:int}, DeletionProtection?:bool, CrossAccountClone?:bool, AutomaticRestartTime?:int|string|\DateTimeInterface, ServerlessV2ScalingConfiguration?:array{MinCapacity?:float, MaxCapacity?:float}, GlobalClusterIdentifier?:string, IOOptimizedNextAllowedModificationTime?:int|string|\DateTimeInterface, StorageType?:string}}>
     */
    public function modifyDBClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBClusterEndpointIdentifier:string, EndpointType?:string, StaticMembers?:array<string>, ExcludedMembers?:array<string>} $args
     * @return \AWS\Result<array{DBClusterEndpointIdentifier?:string, DBClusterIdentifier?:string, DBClusterEndpointResourceIdentifier?:string, Endpoint?:string, Status?:string, EndpointType?:string, CustomEndpointType?:string, StaticMembers?:array<string>, ExcludedMembers?:array<string>, DBClusterEndpointArn?:string}>
     */
    public function modifyDBClusterEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{DBClusterEndpointIdentifier:string, EndpointType?:string, StaticMembers?:array<string>, ExcludedMembers?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBClusterEndpointIdentifier?:string, DBClusterIdentifier?:string, DBClusterEndpointResourceIdentifier?:string, Endpoint?:string, Status?:string, EndpointType?:string, CustomEndpointType?:string, StaticMembers?:array<string>, ExcludedMembers?:array<string>, DBClusterEndpointArn?:string}>
     */
    public function modifyDBClusterEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBClusterParameterGroupName:string, Parameters:array<array{ParameterName?:string, ParameterValue?:string, Description?:string, Source?:string, ApplyType?:string, DataType?:string, AllowedValues?:string, IsModifiable?:bool, MinimumEngineVersion?:string, ApplyMethod?:"immediate"|"pending-reboot"}>} $args
     * @return \AWS\Result<array{DBClusterParameterGroupName?:string}>
     */
    public function modifyDBClusterParameterGroup(array $args): \AWS\Result { }

    /**
     * @param array{DBClusterParameterGroupName:string, Parameters:array<array{ParameterName?:string, ParameterValue?:string, Description?:string, Source?:string, ApplyType?:string, DataType?:string, AllowedValues?:string, IsModifiable?:bool, MinimumEngineVersion?:string, ApplyMethod?:"immediate"|"pending-reboot"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBClusterParameterGroupName?:string}>
     */
    public function modifyDBClusterParameterGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBClusterSnapshotIdentifier:string, AttributeName:string, ValuesToAdd?:array<string>, ValuesToRemove?:array<string>} $args
     * @return \AWS\Result<array{DBClusterSnapshotAttributesResult?:array{DBClusterSnapshotIdentifier?:string, DBClusterSnapshotAttributes?:array<array{AttributeName?:string, AttributeValues?:array<string>}>}}>
     */
    public function modifyDBClusterSnapshotAttribute(array $args): \AWS\Result { }

    /**
     * @param array{DBClusterSnapshotIdentifier:string, AttributeName:string, ValuesToAdd?:array<string>, ValuesToRemove?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBClusterSnapshotAttributesResult?:array{DBClusterSnapshotIdentifier?:string, DBClusterSnapshotAttributes?:array<array{AttributeName?:string, AttributeValues?:array<string>}>}}>
     */
    public function modifyDBClusterSnapshotAttributeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBInstanceIdentifier:string, AllocatedStorage?:int, DBInstanceClass?:string, DBSubnetGroupName?:string, DBSecurityGroups?:array<string>, VpcSecurityGroupIds?:array<string>, ApplyImmediately?:bool, MasterUserPassword?:string, DBParameterGroupName?:string, BackupRetentionPeriod?:int, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, MultiAZ?:bool, EngineVersion?:string, AllowMajorVersionUpgrade?:bool, AutoMinorVersionUpgrade?:bool, LicenseModel?:string, Iops?:int, OptionGroupName?:string, NewDBInstanceIdentifier?:string, StorageType?:string, TdeCredentialArn?:string, TdeCredentialPassword?:string, CACertificateIdentifier?:string, Domain?:string, CopyTagsToSnapshot?:bool, MonitoringInterval?:int, DBPortNumber?:int, PubliclyAccessible?:bool, MonitoringRoleArn?:string, DomainIAMRoleName?:string, PromotionTier?:int, EnableIAMDatabaseAuthentication?:bool, EnablePerformanceInsights?:bool, PerformanceInsightsKMSKeyId?:string, CloudwatchLogsExportConfiguration?:array{EnableLogTypes?:array<string>, DisableLogTypes?:array<string>}, DeletionProtection?:bool} $args
     * @return \AWS\Result<array{DBInstance?:array{DBInstanceIdentifier?:string, DBInstanceClass?:string, Engine?:string, DBInstanceStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, HostedZoneId?:string}, AllocatedStorage?:int, InstanceCreateTime?:int|string|\DateTimeInterface, PreferredBackupWindow?:string, BackupRetentionPeriod?:int, DBSecurityGroups?:array<array{DBSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, DBParameterGroups?:array<array{DBParameterGroupName?:string, ParameterApplyStatus?:string}>, AvailabilityZone?:string, DBSubnetGroup?:array{DBSubnetGroupName?:string, DBSubnetGroupDescription?:string, VpcId?:string, SubnetGroupStatus?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:array{Name?:string}, SubnetStatus?:string}>, DBSubnetGroupArn?:string}, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{DBInstanceClass?:string, AllocatedStorage?:int, MasterUserPassword?:string, Port?:int, BackupRetentionPeriod?:int, MultiAZ?:bool, EngineVersion?:string, LicenseModel?:string, Iops?:int, DBInstanceIdentifier?:string, StorageType?:string, CACertificateIdentifier?:string, DBSubnetGroupName?:string, PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}}, LatestRestorableTime?:int|string|\DateTimeInterface, MultiAZ?:bool, EngineVersion?:string, AutoMinorVersionUpgrade?:bool, ReadReplicaSourceDBInstanceIdentifier?:string, ReadReplicaDBInstanceIdentifiers?:array<string>, ReadReplicaDBClusterIdentifiers?:array<string>, LicenseModel?:string, Iops?:int, OptionGroupMemberships?:array<array{OptionGroupName?:string, Status?:string}>, CharacterSetName?:string, SecondaryAvailabilityZone?:string, PubliclyAccessible?:bool, StatusInfos?:array<array{StatusType?:string, Normal?:bool, Status?:string, Message?:string}>, StorageType?:string, TdeCredentialArn?:string, DbInstancePort?:int, DBClusterIdentifier?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbiResourceId?:string, CACertificateIdentifier?:string, DomainMemberships?:array<array{Domain?:string, Status?:string, FQDN?:string, IAMRoleName?:string}>, CopyTagsToSnapshot?:bool, MonitoringInterval?:int, EnhancedMonitoringResourceArn?:string, MonitoringRoleArn?:string, PromotionTier?:int, DBInstanceArn?:string, Timezone?:string, IAMDatabaseAuthenticationEnabled?:bool, PerformanceInsightsEnabled?:bool, PerformanceInsightsKMSKeyId?:string, EnabledCloudwatchLogsExports?:array<string>, DeletionProtection?:bool}}>
     */
    public function modifyDBInstance(array $args): \AWS\Result { }

    /**
     * @param array{DBInstanceIdentifier:string, AllocatedStorage?:int, DBInstanceClass?:string, DBSubnetGroupName?:string, DBSecurityGroups?:array<string>, VpcSecurityGroupIds?:array<string>, ApplyImmediately?:bool, MasterUserPassword?:string, DBParameterGroupName?:string, BackupRetentionPeriod?:int, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, MultiAZ?:bool, EngineVersion?:string, AllowMajorVersionUpgrade?:bool, AutoMinorVersionUpgrade?:bool, LicenseModel?:string, Iops?:int, OptionGroupName?:string, NewDBInstanceIdentifier?:string, StorageType?:string, TdeCredentialArn?:string, TdeCredentialPassword?:string, CACertificateIdentifier?:string, Domain?:string, CopyTagsToSnapshot?:bool, MonitoringInterval?:int, DBPortNumber?:int, PubliclyAccessible?:bool, MonitoringRoleArn?:string, DomainIAMRoleName?:string, PromotionTier?:int, EnableIAMDatabaseAuthentication?:bool, EnablePerformanceInsights?:bool, PerformanceInsightsKMSKeyId?:string, CloudwatchLogsExportConfiguration?:array{EnableLogTypes?:array<string>, DisableLogTypes?:array<string>}, DeletionProtection?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBInstance?:array{DBInstanceIdentifier?:string, DBInstanceClass?:string, Engine?:string, DBInstanceStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, HostedZoneId?:string}, AllocatedStorage?:int, InstanceCreateTime?:int|string|\DateTimeInterface, PreferredBackupWindow?:string, BackupRetentionPeriod?:int, DBSecurityGroups?:array<array{DBSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, DBParameterGroups?:array<array{DBParameterGroupName?:string, ParameterApplyStatus?:string}>, AvailabilityZone?:string, DBSubnetGroup?:array{DBSubnetGroupName?:string, DBSubnetGroupDescription?:string, VpcId?:string, SubnetGroupStatus?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:array{Name?:string}, SubnetStatus?:string}>, DBSubnetGroupArn?:string}, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{DBInstanceClass?:string, AllocatedStorage?:int, MasterUserPassword?:string, Port?:int, BackupRetentionPeriod?:int, MultiAZ?:bool, EngineVersion?:string, LicenseModel?:string, Iops?:int, DBInstanceIdentifier?:string, StorageType?:string, CACertificateIdentifier?:string, DBSubnetGroupName?:string, PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}}, LatestRestorableTime?:int|string|\DateTimeInterface, MultiAZ?:bool, EngineVersion?:string, AutoMinorVersionUpgrade?:bool, ReadReplicaSourceDBInstanceIdentifier?:string, ReadReplicaDBInstanceIdentifiers?:array<string>, ReadReplicaDBClusterIdentifiers?:array<string>, LicenseModel?:string, Iops?:int, OptionGroupMemberships?:array<array{OptionGroupName?:string, Status?:string}>, CharacterSetName?:string, SecondaryAvailabilityZone?:string, PubliclyAccessible?:bool, StatusInfos?:array<array{StatusType?:string, Normal?:bool, Status?:string, Message?:string}>, StorageType?:string, TdeCredentialArn?:string, DbInstancePort?:int, DBClusterIdentifier?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbiResourceId?:string, CACertificateIdentifier?:string, DomainMemberships?:array<array{Domain?:string, Status?:string, FQDN?:string, IAMRoleName?:string}>, CopyTagsToSnapshot?:bool, MonitoringInterval?:int, EnhancedMonitoringResourceArn?:string, MonitoringRoleArn?:string, PromotionTier?:int, DBInstanceArn?:string, Timezone?:string, IAMDatabaseAuthenticationEnabled?:bool, PerformanceInsightsEnabled?:bool, PerformanceInsightsKMSKeyId?:string, EnabledCloudwatchLogsExports?:array<string>, DeletionProtection?:bool}}>
     */
    public function modifyDBInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBParameterGroupName:string, Parameters:array<array{ParameterName?:string, ParameterValue?:string, Description?:string, Source?:string, ApplyType?:string, DataType?:string, AllowedValues?:string, IsModifiable?:bool, MinimumEngineVersion?:string, ApplyMethod?:"immediate"|"pending-reboot"}>} $args
     * @return \AWS\Result<array{DBParameterGroupName?:string}>
     */
    public function modifyDBParameterGroup(array $args): \AWS\Result { }

    /**
     * @param array{DBParameterGroupName:string, Parameters:array<array{ParameterName?:string, ParameterValue?:string, Description?:string, Source?:string, ApplyType?:string, DataType?:string, AllowedValues?:string, IsModifiable?:bool, MinimumEngineVersion?:string, ApplyMethod?:"immediate"|"pending-reboot"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBParameterGroupName?:string}>
     */
    public function modifyDBParameterGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBSubnetGroupName:string, DBSubnetGroupDescription?:string, SubnetIds:array<string>} $args
     * @return \AWS\Result<array{DBSubnetGroup?:array{DBSubnetGroupName?:string, DBSubnetGroupDescription?:string, VpcId?:string, SubnetGroupStatus?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:array{Name?:string}, SubnetStatus?:string}>, DBSubnetGroupArn?:string}}>
     */
    public function modifyDBSubnetGroup(array $args): \AWS\Result { }

    /**
     * @param array{DBSubnetGroupName:string, DBSubnetGroupDescription?:string, SubnetIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBSubnetGroup?:array{DBSubnetGroupName?:string, DBSubnetGroupDescription?:string, VpcId?:string, SubnetGroupStatus?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:array{Name?:string}, SubnetStatus?:string}>, DBSubnetGroupArn?:string}}>
     */
    public function modifyDBSubnetGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SubscriptionName:string, SnsTopicArn?:string, SourceType?:string, EventCategories?:array<string>, Enabled?:bool} $args
     * @return \AWS\Result<array{EventSubscription?:array{CustomerAwsId?:string, CustSubscriptionId?:string, SnsTopicArn?:string, Status?:string, SubscriptionCreationTime?:string, SourceType?:string, SourceIdsList?:array<string>, EventCategoriesList?:array<string>, Enabled?:bool, EventSubscriptionArn?:string}}>
     */
    public function modifyEventSubscription(array $args): \AWS\Result { }

    /**
     * @param array{SubscriptionName:string, SnsTopicArn?:string, SourceType?:string, EventCategories?:array<string>, Enabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventSubscription?:array{CustomerAwsId?:string, CustSubscriptionId?:string, SnsTopicArn?:string, Status?:string, SubscriptionCreationTime?:string, SourceType?:string, SourceIdsList?:array<string>, EventCategoriesList?:array<string>, Enabled?:bool, EventSubscriptionArn?:string}}>
     */
    public function modifyEventSubscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalClusterIdentifier:string, NewGlobalClusterIdentifier?:string, DeletionProtection?:bool, EngineVersion?:string, AllowMajorVersionUpgrade?:bool} $args
     * @return \AWS\Result<array{GlobalCluster?:array{GlobalClusterIdentifier?:string, GlobalClusterResourceId?:string, GlobalClusterArn?:string, Status?:string, Engine?:string, EngineVersion?:string, StorageEncrypted?:bool, DeletionProtection?:bool, GlobalClusterMembers?:array<array{DBClusterArn?:string, Readers?:array<string>, IsWriter?:bool}>}}>
     */
    public function modifyGlobalCluster(array $args): \AWS\Result { }

    /**
     * @param array{GlobalClusterIdentifier:string, NewGlobalClusterIdentifier?:string, DeletionProtection?:bool, EngineVersion?:string, AllowMajorVersionUpgrade?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{GlobalCluster?:array{GlobalClusterIdentifier?:string, GlobalClusterResourceId?:string, GlobalClusterArn?:string, Status?:string, Engine?:string, EngineVersion?:string, StorageEncrypted?:bool, DeletionProtection?:bool, GlobalClusterMembers?:array<array{DBClusterArn?:string, Readers?:array<string>, IsWriter?:bool}>}}>
     */
    public function modifyGlobalClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBClusterIdentifier:string} $args
     * @return \AWS\Result<array{DBCluster?:array{AllocatedStorage?:int, AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, CharacterSetName?:string, DatabaseName?:string, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, DBClusterOptionGroupMemberships?:array<array{DBClusterOptionGroupName?:string, Status?:string}>, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string, FeatureName?:string}>, IAMDatabaseAuthenticationEnabled?:bool, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, CopyTagsToSnapshot?:bool, EnabledCloudwatchLogsExports?:array<string>, PendingModifiedValues?:array{PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}, DBClusterIdentifier?:string, IAMDatabaseAuthenticationEnabled?:bool, EngineVersion?:string, BackupRetentionPeriod?:int, StorageType?:string, AllocatedStorage?:int, Iops?:int}, DeletionProtection?:bool, CrossAccountClone?:bool, AutomaticRestartTime?:int|string|\DateTimeInterface, ServerlessV2ScalingConfiguration?:array{MinCapacity?:float, MaxCapacity?:float}, GlobalClusterIdentifier?:string, IOOptimizedNextAllowedModificationTime?:int|string|\DateTimeInterface, StorageType?:string}}>
     */
    public function promoteReadReplicaDBCluster(array $args): \AWS\Result { }

    /**
     * @param array{DBClusterIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBCluster?:array{AllocatedStorage?:int, AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, CharacterSetName?:string, DatabaseName?:string, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, DBClusterOptionGroupMemberships?:array<array{DBClusterOptionGroupName?:string, Status?:string}>, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string, FeatureName?:string}>, IAMDatabaseAuthenticationEnabled?:bool, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, CopyTagsToSnapshot?:bool, EnabledCloudwatchLogsExports?:array<string>, PendingModifiedValues?:array{PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}, DBClusterIdentifier?:string, IAMDatabaseAuthenticationEnabled?:bool, EngineVersion?:string, BackupRetentionPeriod?:int, StorageType?:string, AllocatedStorage?:int, Iops?:int}, DeletionProtection?:bool, CrossAccountClone?:bool, AutomaticRestartTime?:int|string|\DateTimeInterface, ServerlessV2ScalingConfiguration?:array{MinCapacity?:float, MaxCapacity?:float}, GlobalClusterIdentifier?:string, IOOptimizedNextAllowedModificationTime?:int|string|\DateTimeInterface, StorageType?:string}}>
     */
    public function promoteReadReplicaDBClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBInstanceIdentifier:string, ForceFailover?:bool} $args
     * @return \AWS\Result<array{DBInstance?:array{DBInstanceIdentifier?:string, DBInstanceClass?:string, Engine?:string, DBInstanceStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, HostedZoneId?:string}, AllocatedStorage?:int, InstanceCreateTime?:int|string|\DateTimeInterface, PreferredBackupWindow?:string, BackupRetentionPeriod?:int, DBSecurityGroups?:array<array{DBSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, DBParameterGroups?:array<array{DBParameterGroupName?:string, ParameterApplyStatus?:string}>, AvailabilityZone?:string, DBSubnetGroup?:array{DBSubnetGroupName?:string, DBSubnetGroupDescription?:string, VpcId?:string, SubnetGroupStatus?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:array{Name?:string}, SubnetStatus?:string}>, DBSubnetGroupArn?:string}, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{DBInstanceClass?:string, AllocatedStorage?:int, MasterUserPassword?:string, Port?:int, BackupRetentionPeriod?:int, MultiAZ?:bool, EngineVersion?:string, LicenseModel?:string, Iops?:int, DBInstanceIdentifier?:string, StorageType?:string, CACertificateIdentifier?:string, DBSubnetGroupName?:string, PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}}, LatestRestorableTime?:int|string|\DateTimeInterface, MultiAZ?:bool, EngineVersion?:string, AutoMinorVersionUpgrade?:bool, ReadReplicaSourceDBInstanceIdentifier?:string, ReadReplicaDBInstanceIdentifiers?:array<string>, ReadReplicaDBClusterIdentifiers?:array<string>, LicenseModel?:string, Iops?:int, OptionGroupMemberships?:array<array{OptionGroupName?:string, Status?:string}>, CharacterSetName?:string, SecondaryAvailabilityZone?:string, PubliclyAccessible?:bool, StatusInfos?:array<array{StatusType?:string, Normal?:bool, Status?:string, Message?:string}>, StorageType?:string, TdeCredentialArn?:string, DbInstancePort?:int, DBClusterIdentifier?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbiResourceId?:string, CACertificateIdentifier?:string, DomainMemberships?:array<array{Domain?:string, Status?:string, FQDN?:string, IAMRoleName?:string}>, CopyTagsToSnapshot?:bool, MonitoringInterval?:int, EnhancedMonitoringResourceArn?:string, MonitoringRoleArn?:string, PromotionTier?:int, DBInstanceArn?:string, Timezone?:string, IAMDatabaseAuthenticationEnabled?:bool, PerformanceInsightsEnabled?:bool, PerformanceInsightsKMSKeyId?:string, EnabledCloudwatchLogsExports?:array<string>, DeletionProtection?:bool}}>
     */
    public function rebootDBInstance(array $args): \AWS\Result { }

    /**
     * @param array{DBInstanceIdentifier:string, ForceFailover?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBInstance?:array{DBInstanceIdentifier?:string, DBInstanceClass?:string, Engine?:string, DBInstanceStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, HostedZoneId?:string}, AllocatedStorage?:int, InstanceCreateTime?:int|string|\DateTimeInterface, PreferredBackupWindow?:string, BackupRetentionPeriod?:int, DBSecurityGroups?:array<array{DBSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, DBParameterGroups?:array<array{DBParameterGroupName?:string, ParameterApplyStatus?:string}>, AvailabilityZone?:string, DBSubnetGroup?:array{DBSubnetGroupName?:string, DBSubnetGroupDescription?:string, VpcId?:string, SubnetGroupStatus?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:array{Name?:string}, SubnetStatus?:string}>, DBSubnetGroupArn?:string}, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{DBInstanceClass?:string, AllocatedStorage?:int, MasterUserPassword?:string, Port?:int, BackupRetentionPeriod?:int, MultiAZ?:bool, EngineVersion?:string, LicenseModel?:string, Iops?:int, DBInstanceIdentifier?:string, StorageType?:string, CACertificateIdentifier?:string, DBSubnetGroupName?:string, PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}}, LatestRestorableTime?:int|string|\DateTimeInterface, MultiAZ?:bool, EngineVersion?:string, AutoMinorVersionUpgrade?:bool, ReadReplicaSourceDBInstanceIdentifier?:string, ReadReplicaDBInstanceIdentifiers?:array<string>, ReadReplicaDBClusterIdentifiers?:array<string>, LicenseModel?:string, Iops?:int, OptionGroupMemberships?:array<array{OptionGroupName?:string, Status?:string}>, CharacterSetName?:string, SecondaryAvailabilityZone?:string, PubliclyAccessible?:bool, StatusInfos?:array<array{StatusType?:string, Normal?:bool, Status?:string, Message?:string}>, StorageType?:string, TdeCredentialArn?:string, DbInstancePort?:int, DBClusterIdentifier?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbiResourceId?:string, CACertificateIdentifier?:string, DomainMemberships?:array<array{Domain?:string, Status?:string, FQDN?:string, IAMRoleName?:string}>, CopyTagsToSnapshot?:bool, MonitoringInterval?:int, EnhancedMonitoringResourceArn?:string, MonitoringRoleArn?:string, PromotionTier?:int, DBInstanceArn?:string, Timezone?:string, IAMDatabaseAuthenticationEnabled?:bool, PerformanceInsightsEnabled?:bool, PerformanceInsightsKMSKeyId?:string, EnabledCloudwatchLogsExports?:array<string>, DeletionProtection?:bool}}>
     */
    public function rebootDBInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalClusterIdentifier:string, DbClusterIdentifier:string} $args
     * @return \AWS\Result<array{GlobalCluster?:array{GlobalClusterIdentifier?:string, GlobalClusterResourceId?:string, GlobalClusterArn?:string, Status?:string, Engine?:string, EngineVersion?:string, StorageEncrypted?:bool, DeletionProtection?:bool, GlobalClusterMembers?:array<array{DBClusterArn?:string, Readers?:array<string>, IsWriter?:bool}>}}>
     */
    public function removeFromGlobalCluster(array $args): \AWS\Result { }

    /**
     * @param array{GlobalClusterIdentifier:string, DbClusterIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GlobalCluster?:array{GlobalClusterIdentifier?:string, GlobalClusterResourceId?:string, GlobalClusterArn?:string, Status?:string, Engine?:string, EngineVersion?:string, StorageEncrypted?:bool, DeletionProtection?:bool, GlobalClusterMembers?:array<array{DBClusterArn?:string, Readers?:array<string>, IsWriter?:bool}>}}>
     */
    public function removeFromGlobalClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBClusterIdentifier:string, RoleArn:string, FeatureName?:string} $args
     * @return \AWS\Result<void>
     */
    public function removeRoleFromDBCluster(array $args): \AWS\Result { }

    /**
     * @param array{DBClusterIdentifier:string, RoleArn:string, FeatureName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function removeRoleFromDBClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SubscriptionName:string, SourceIdentifier:string} $args
     * @return \AWS\Result<array{EventSubscription?:array{CustomerAwsId?:string, CustSubscriptionId?:string, SnsTopicArn?:string, Status?:string, SubscriptionCreationTime?:string, SourceType?:string, SourceIdsList?:array<string>, EventCategoriesList?:array<string>, Enabled?:bool, EventSubscriptionArn?:string}}>
     */
    public function removeSourceIdentifierFromSubscription(array $args): \AWS\Result { }

    /**
     * @param array{SubscriptionName:string, SourceIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventSubscription?:array{CustomerAwsId?:string, CustSubscriptionId?:string, SnsTopicArn?:string, Status?:string, SubscriptionCreationTime?:string, SourceType?:string, SourceIdsList?:array<string>, EventCategoriesList?:array<string>, Enabled?:bool, EventSubscriptionArn?:string}}>
     */
    public function removeSourceIdentifierFromSubscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceName:string, TagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function removeTagsFromResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceName:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function removeTagsFromResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBClusterParameterGroupName:string, ResetAllParameters?:bool, Parameters?:array<array{ParameterName?:string, ParameterValue?:string, Description?:string, Source?:string, ApplyType?:string, DataType?:string, AllowedValues?:string, IsModifiable?:bool, MinimumEngineVersion?:string, ApplyMethod?:"immediate"|"pending-reboot"}>} $args
     * @return \AWS\Result<array{DBClusterParameterGroupName?:string}>
     */
    public function resetDBClusterParameterGroup(array $args): \AWS\Result { }

    /**
     * @param array{DBClusterParameterGroupName:string, ResetAllParameters?:bool, Parameters?:array<array{ParameterName?:string, ParameterValue?:string, Description?:string, Source?:string, ApplyType?:string, DataType?:string, AllowedValues?:string, IsModifiable?:bool, MinimumEngineVersion?:string, ApplyMethod?:"immediate"|"pending-reboot"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBClusterParameterGroupName?:string}>
     */
    public function resetDBClusterParameterGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBParameterGroupName:string, ResetAllParameters?:bool, Parameters?:array<array{ParameterName?:string, ParameterValue?:string, Description?:string, Source?:string, ApplyType?:string, DataType?:string, AllowedValues?:string, IsModifiable?:bool, MinimumEngineVersion?:string, ApplyMethod?:"immediate"|"pending-reboot"}>} $args
     * @return \AWS\Result<array{DBParameterGroupName?:string}>
     */
    public function resetDBParameterGroup(array $args): \AWS\Result { }

    /**
     * @param array{DBParameterGroupName:string, ResetAllParameters?:bool, Parameters?:array<array{ParameterName?:string, ParameterValue?:string, Description?:string, Source?:string, ApplyType?:string, DataType?:string, AllowedValues?:string, IsModifiable?:bool, MinimumEngineVersion?:string, ApplyMethod?:"immediate"|"pending-reboot"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBParameterGroupName?:string}>
     */
    public function resetDBParameterGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AvailabilityZones?:array<string>, DBClusterIdentifier:string, SnapshotIdentifier:string, Engine:string, EngineVersion?:string, Port?:int, DBSubnetGroupName?:string, DatabaseName?:string, OptionGroupName?:string, VpcSecurityGroupIds?:array<string>, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnableIAMDatabaseAuthentication?:bool, EnableCloudwatchLogsExports?:array<string>, DBClusterParameterGroupName?:string, DeletionProtection?:bool, CopyTagsToSnapshot?:bool, ServerlessV2ScalingConfiguration?:array{MinCapacity?:float, MaxCapacity?:float}, StorageType?:string} $args
     * @return \AWS\Result<array{DBCluster?:array{AllocatedStorage?:int, AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, CharacterSetName?:string, DatabaseName?:string, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, DBClusterOptionGroupMemberships?:array<array{DBClusterOptionGroupName?:string, Status?:string}>, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string, FeatureName?:string}>, IAMDatabaseAuthenticationEnabled?:bool, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, CopyTagsToSnapshot?:bool, EnabledCloudwatchLogsExports?:array<string>, PendingModifiedValues?:array{PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}, DBClusterIdentifier?:string, IAMDatabaseAuthenticationEnabled?:bool, EngineVersion?:string, BackupRetentionPeriod?:int, StorageType?:string, AllocatedStorage?:int, Iops?:int}, DeletionProtection?:bool, CrossAccountClone?:bool, AutomaticRestartTime?:int|string|\DateTimeInterface, ServerlessV2ScalingConfiguration?:array{MinCapacity?:float, MaxCapacity?:float}, GlobalClusterIdentifier?:string, IOOptimizedNextAllowedModificationTime?:int|string|\DateTimeInterface, StorageType?:string}}>
     */
    public function restoreDBClusterFromSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{AvailabilityZones?:array<string>, DBClusterIdentifier:string, SnapshotIdentifier:string, Engine:string, EngineVersion?:string, Port?:int, DBSubnetGroupName?:string, DatabaseName?:string, OptionGroupName?:string, VpcSecurityGroupIds?:array<string>, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnableIAMDatabaseAuthentication?:bool, EnableCloudwatchLogsExports?:array<string>, DBClusterParameterGroupName?:string, DeletionProtection?:bool, CopyTagsToSnapshot?:bool, ServerlessV2ScalingConfiguration?:array{MinCapacity?:float, MaxCapacity?:float}, StorageType?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBCluster?:array{AllocatedStorage?:int, AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, CharacterSetName?:string, DatabaseName?:string, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, DBClusterOptionGroupMemberships?:array<array{DBClusterOptionGroupName?:string, Status?:string}>, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string, FeatureName?:string}>, IAMDatabaseAuthenticationEnabled?:bool, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, CopyTagsToSnapshot?:bool, EnabledCloudwatchLogsExports?:array<string>, PendingModifiedValues?:array{PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}, DBClusterIdentifier?:string, IAMDatabaseAuthenticationEnabled?:bool, EngineVersion?:string, BackupRetentionPeriod?:int, StorageType?:string, AllocatedStorage?:int, Iops?:int}, DeletionProtection?:bool, CrossAccountClone?:bool, AutomaticRestartTime?:int|string|\DateTimeInterface, ServerlessV2ScalingConfiguration?:array{MinCapacity?:float, MaxCapacity?:float}, GlobalClusterIdentifier?:string, IOOptimizedNextAllowedModificationTime?:int|string|\DateTimeInterface, StorageType?:string}}>
     */
    public function restoreDBClusterFromSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBClusterIdentifier:string, RestoreType?:string, SourceDBClusterIdentifier:string, RestoreToTime?:int|string|\DateTimeInterface, UseLatestRestorableTime?:bool, Port?:int, DBSubnetGroupName?:string, OptionGroupName?:string, VpcSecurityGroupIds?:array<string>, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnableIAMDatabaseAuthentication?:bool, EnableCloudwatchLogsExports?:array<string>, DBClusterParameterGroupName?:string, DeletionProtection?:bool, ServerlessV2ScalingConfiguration?:array{MinCapacity?:float, MaxCapacity?:float}, StorageType?:string} $args
     * @return \AWS\Result<array{DBCluster?:array{AllocatedStorage?:int, AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, CharacterSetName?:string, DatabaseName?:string, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, DBClusterOptionGroupMemberships?:array<array{DBClusterOptionGroupName?:string, Status?:string}>, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string, FeatureName?:string}>, IAMDatabaseAuthenticationEnabled?:bool, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, CopyTagsToSnapshot?:bool, EnabledCloudwatchLogsExports?:array<string>, PendingModifiedValues?:array{PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}, DBClusterIdentifier?:string, IAMDatabaseAuthenticationEnabled?:bool, EngineVersion?:string, BackupRetentionPeriod?:int, StorageType?:string, AllocatedStorage?:int, Iops?:int}, DeletionProtection?:bool, CrossAccountClone?:bool, AutomaticRestartTime?:int|string|\DateTimeInterface, ServerlessV2ScalingConfiguration?:array{MinCapacity?:float, MaxCapacity?:float}, GlobalClusterIdentifier?:string, IOOptimizedNextAllowedModificationTime?:int|string|\DateTimeInterface, StorageType?:string}}>
     */
    public function restoreDBClusterToPointInTime(array $args): \AWS\Result { }

    /**
     * @param array{DBClusterIdentifier:string, RestoreType?:string, SourceDBClusterIdentifier:string, RestoreToTime?:int|string|\DateTimeInterface, UseLatestRestorableTime?:bool, Port?:int, DBSubnetGroupName?:string, OptionGroupName?:string, VpcSecurityGroupIds?:array<string>, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnableIAMDatabaseAuthentication?:bool, EnableCloudwatchLogsExports?:array<string>, DBClusterParameterGroupName?:string, DeletionProtection?:bool, ServerlessV2ScalingConfiguration?:array{MinCapacity?:float, MaxCapacity?:float}, StorageType?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBCluster?:array{AllocatedStorage?:int, AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, CharacterSetName?:string, DatabaseName?:string, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, DBClusterOptionGroupMemberships?:array<array{DBClusterOptionGroupName?:string, Status?:string}>, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string, FeatureName?:string}>, IAMDatabaseAuthenticationEnabled?:bool, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, CopyTagsToSnapshot?:bool, EnabledCloudwatchLogsExports?:array<string>, PendingModifiedValues?:array{PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}, DBClusterIdentifier?:string, IAMDatabaseAuthenticationEnabled?:bool, EngineVersion?:string, BackupRetentionPeriod?:int, StorageType?:string, AllocatedStorage?:int, Iops?:int}, DeletionProtection?:bool, CrossAccountClone?:bool, AutomaticRestartTime?:int|string|\DateTimeInterface, ServerlessV2ScalingConfiguration?:array{MinCapacity?:float, MaxCapacity?:float}, GlobalClusterIdentifier?:string, IOOptimizedNextAllowedModificationTime?:int|string|\DateTimeInterface, StorageType?:string}}>
     */
    public function restoreDBClusterToPointInTimeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBClusterIdentifier:string} $args
     * @return \AWS\Result<array{DBCluster?:array{AllocatedStorage?:int, AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, CharacterSetName?:string, DatabaseName?:string, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, DBClusterOptionGroupMemberships?:array<array{DBClusterOptionGroupName?:string, Status?:string}>, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string, FeatureName?:string}>, IAMDatabaseAuthenticationEnabled?:bool, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, CopyTagsToSnapshot?:bool, EnabledCloudwatchLogsExports?:array<string>, PendingModifiedValues?:array{PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}, DBClusterIdentifier?:string, IAMDatabaseAuthenticationEnabled?:bool, EngineVersion?:string, BackupRetentionPeriod?:int, StorageType?:string, AllocatedStorage?:int, Iops?:int}, DeletionProtection?:bool, CrossAccountClone?:bool, AutomaticRestartTime?:int|string|\DateTimeInterface, ServerlessV2ScalingConfiguration?:array{MinCapacity?:float, MaxCapacity?:float}, GlobalClusterIdentifier?:string, IOOptimizedNextAllowedModificationTime?:int|string|\DateTimeInterface, StorageType?:string}}>
     */
    public function startDBCluster(array $args): \AWS\Result { }

    /**
     * @param array{DBClusterIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBCluster?:array{AllocatedStorage?:int, AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, CharacterSetName?:string, DatabaseName?:string, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, DBClusterOptionGroupMemberships?:array<array{DBClusterOptionGroupName?:string, Status?:string}>, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string, FeatureName?:string}>, IAMDatabaseAuthenticationEnabled?:bool, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, CopyTagsToSnapshot?:bool, EnabledCloudwatchLogsExports?:array<string>, PendingModifiedValues?:array{PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}, DBClusterIdentifier?:string, IAMDatabaseAuthenticationEnabled?:bool, EngineVersion?:string, BackupRetentionPeriod?:int, StorageType?:string, AllocatedStorage?:int, Iops?:int}, DeletionProtection?:bool, CrossAccountClone?:bool, AutomaticRestartTime?:int|string|\DateTimeInterface, ServerlessV2ScalingConfiguration?:array{MinCapacity?:float, MaxCapacity?:float}, GlobalClusterIdentifier?:string, IOOptimizedNextAllowedModificationTime?:int|string|\DateTimeInterface, StorageType?:string}}>
     */
    public function startDBClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBClusterIdentifier:string} $args
     * @return \AWS\Result<array{DBCluster?:array{AllocatedStorage?:int, AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, CharacterSetName?:string, DatabaseName?:string, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, DBClusterOptionGroupMemberships?:array<array{DBClusterOptionGroupName?:string, Status?:string}>, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string, FeatureName?:string}>, IAMDatabaseAuthenticationEnabled?:bool, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, CopyTagsToSnapshot?:bool, EnabledCloudwatchLogsExports?:array<string>, PendingModifiedValues?:array{PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}, DBClusterIdentifier?:string, IAMDatabaseAuthenticationEnabled?:bool, EngineVersion?:string, BackupRetentionPeriod?:int, StorageType?:string, AllocatedStorage?:int, Iops?:int}, DeletionProtection?:bool, CrossAccountClone?:bool, AutomaticRestartTime?:int|string|\DateTimeInterface, ServerlessV2ScalingConfiguration?:array{MinCapacity?:float, MaxCapacity?:float}, GlobalClusterIdentifier?:string, IOOptimizedNextAllowedModificationTime?:int|string|\DateTimeInterface, StorageType?:string}}>
     */
    public function stopDBCluster(array $args): \AWS\Result { }

    /**
     * @param array{DBClusterIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBCluster?:array{AllocatedStorage?:int, AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, CharacterSetName?:string, DatabaseName?:string, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, DBClusterOptionGroupMemberships?:array<array{DBClusterOptionGroupName?:string, Status?:string}>, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string, FeatureName?:string}>, IAMDatabaseAuthenticationEnabled?:bool, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, CopyTagsToSnapshot?:bool, EnabledCloudwatchLogsExports?:array<string>, PendingModifiedValues?:array{PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}, DBClusterIdentifier?:string, IAMDatabaseAuthenticationEnabled?:bool, EngineVersion?:string, BackupRetentionPeriod?:int, StorageType?:string, AllocatedStorage?:int, Iops?:int}, DeletionProtection?:bool, CrossAccountClone?:bool, AutomaticRestartTime?:int|string|\DateTimeInterface, ServerlessV2ScalingConfiguration?:array{MinCapacity?:float, MaxCapacity?:float}, GlobalClusterIdentifier?:string, IOOptimizedNextAllowedModificationTime?:int|string|\DateTimeInterface, StorageType?:string}}>
     */
    public function stopDBClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
