<?php
namespace AWS\DocDB;

class DocDBClient
{
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
     * @return \AWS\Result<array{DBClusterSnapshot?:array{AvailabilityZones?:array<string>, DBClusterSnapshotIdentifier?:string, DBClusterIdentifier?:string, SnapshotCreateTime?:int|string|\DateTimeInterface, Engine?:string, Status?:string, Port?:int, VpcId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, MasterUsername?:string, EngineVersion?:string, SnapshotType?:string, PercentProgress?:int, StorageEncrypted?:bool, KmsKeyId?:string, DBClusterSnapshotArn?:string, SourceDBClusterSnapshotArn?:string, StorageType?:string}}>
     */
    public function copyDBClusterSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{SourceDBClusterSnapshotIdentifier:string, TargetDBClusterSnapshotIdentifier:string, KmsKeyId?:string, PreSignedUrl?:string, CopyTags?:bool, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBClusterSnapshot?:array{AvailabilityZones?:array<string>, DBClusterSnapshotIdentifier?:string, DBClusterIdentifier?:string, SnapshotCreateTime?:int|string|\DateTimeInterface, Engine?:string, Status?:string, Port?:int, VpcId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, MasterUsername?:string, EngineVersion?:string, SnapshotType?:string, PercentProgress?:int, StorageEncrypted?:bool, KmsKeyId?:string, DBClusterSnapshotArn?:string, SourceDBClusterSnapshotArn?:string, StorageType?:string}}>
     */
    public function copyDBClusterSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, DBClusterIdentifier:string, DBClusterParameterGroupName?:string, VpcSecurityGroupIds?:array<string>, DBSubnetGroupName?:string, Engine:string, EngineVersion?:string, Port?:int, MasterUsername?:string, MasterUserPassword?:string, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, Tags?:array<array{Key?:string, Value?:string}>, StorageEncrypted?:bool, KmsKeyId?:string, PreSignedUrl?:string, EnableCloudwatchLogsExports?:array<string>, DeletionProtection?:bool, GlobalClusterIdentifier?:string, StorageType?:string, ManageMasterUserPassword?:bool, MasterUserSecretKmsKeyId?:string} $args
     * @return \AWS\Result<array{DBCluster?:array{AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string}>, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, EnabledCloudwatchLogsExports?:array<string>, DeletionProtection?:bool, StorageType?:string, MasterUserSecret?:array{SecretArn?:string, SecretStatus?:string, KmsKeyId?:string}}}>
     */
    public function createDBCluster(array $args): \AWS\Result { }

    /**
     * @param array{AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, DBClusterIdentifier:string, DBClusterParameterGroupName?:string, VpcSecurityGroupIds?:array<string>, DBSubnetGroupName?:string, Engine:string, EngineVersion?:string, Port?:int, MasterUsername?:string, MasterUserPassword?:string, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, Tags?:array<array{Key?:string, Value?:string}>, StorageEncrypted?:bool, KmsKeyId?:string, PreSignedUrl?:string, EnableCloudwatchLogsExports?:array<string>, DeletionProtection?:bool, GlobalClusterIdentifier?:string, StorageType?:string, ManageMasterUserPassword?:bool, MasterUserSecretKmsKeyId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBCluster?:array{AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string}>, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, EnabledCloudwatchLogsExports?:array<string>, DeletionProtection?:bool, StorageType?:string, MasterUserSecret?:array{SecretArn?:string, SecretStatus?:string, KmsKeyId?:string}}}>
     */
    public function createDBClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @return \AWS\Result<array{DBClusterSnapshot?:array{AvailabilityZones?:array<string>, DBClusterSnapshotIdentifier?:string, DBClusterIdentifier?:string, SnapshotCreateTime?:int|string|\DateTimeInterface, Engine?:string, Status?:string, Port?:int, VpcId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, MasterUsername?:string, EngineVersion?:string, SnapshotType?:string, PercentProgress?:int, StorageEncrypted?:bool, KmsKeyId?:string, DBClusterSnapshotArn?:string, SourceDBClusterSnapshotArn?:string, StorageType?:string}}>
     */
    public function createDBClusterSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{DBClusterSnapshotIdentifier:string, DBClusterIdentifier:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBClusterSnapshot?:array{AvailabilityZones?:array<string>, DBClusterSnapshotIdentifier?:string, DBClusterIdentifier?:string, SnapshotCreateTime?:int|string|\DateTimeInterface, Engine?:string, Status?:string, Port?:int, VpcId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, MasterUsername?:string, EngineVersion?:string, SnapshotType?:string, PercentProgress?:int, StorageEncrypted?:bool, KmsKeyId?:string, DBClusterSnapshotArn?:string, SourceDBClusterSnapshotArn?:string, StorageType?:string}}>
     */
    public function createDBClusterSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBInstanceIdentifier:string, DBInstanceClass:string, Engine:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, AutoMinorVersionUpgrade?:bool, Tags?:array<array{Key?:string, Value?:string}>, DBClusterIdentifier:string, CopyTagsToSnapshot?:bool, PromotionTier?:int, EnablePerformanceInsights?:bool, PerformanceInsightsKMSKeyId?:string, CACertificateIdentifier?:string} $args
     * @return \AWS\Result<array{DBInstance?:array{DBInstanceIdentifier?:string, DBInstanceClass?:string, Engine?:string, DBInstanceStatus?:string, Endpoint?:array{Address?:string, Port?:int, HostedZoneId?:string}, InstanceCreateTime?:int|string|\DateTimeInterface, PreferredBackupWindow?:string, BackupRetentionPeriod?:int, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, AvailabilityZone?:string, DBSubnetGroup?:array{DBSubnetGroupName?:string, DBSubnetGroupDescription?:string, VpcId?:string, SubnetGroupStatus?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:array{Name?:string}, SubnetStatus?:string}>, DBSubnetGroupArn?:string}, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{DBInstanceClass?:string, AllocatedStorage?:int, MasterUserPassword?:string, Port?:int, BackupRetentionPeriod?:int, MultiAZ?:bool, EngineVersion?:string, LicenseModel?:string, Iops?:int, DBInstanceIdentifier?:string, StorageType?:string, CACertificateIdentifier?:string, DBSubnetGroupName?:string, PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}}, LatestRestorableTime?:int|string|\DateTimeInterface, EngineVersion?:string, AutoMinorVersionUpgrade?:bool, PubliclyAccessible?:bool, StatusInfos?:array<array{StatusType?:string, Normal?:bool, Status?:string, Message?:string}>, DBClusterIdentifier?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbiResourceId?:string, CACertificateIdentifier?:string, CopyTagsToSnapshot?:bool, PromotionTier?:int, DBInstanceArn?:string, EnabledCloudwatchLogsExports?:array<string>, CertificateDetails?:array{CAIdentifier?:string, ValidTill?:int|string|\DateTimeInterface}, PerformanceInsightsEnabled?:bool, PerformanceInsightsKMSKeyId?:string}}>
     */
    public function createDBInstance(array $args): \AWS\Result { }

    /**
     * @param array{DBInstanceIdentifier:string, DBInstanceClass:string, Engine:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, AutoMinorVersionUpgrade?:bool, Tags?:array<array{Key?:string, Value?:string}>, DBClusterIdentifier:string, CopyTagsToSnapshot?:bool, PromotionTier?:int, EnablePerformanceInsights?:bool, PerformanceInsightsKMSKeyId?:string, CACertificateIdentifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBInstance?:array{DBInstanceIdentifier?:string, DBInstanceClass?:string, Engine?:string, DBInstanceStatus?:string, Endpoint?:array{Address?:string, Port?:int, HostedZoneId?:string}, InstanceCreateTime?:int|string|\DateTimeInterface, PreferredBackupWindow?:string, BackupRetentionPeriod?:int, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, AvailabilityZone?:string, DBSubnetGroup?:array{DBSubnetGroupName?:string, DBSubnetGroupDescription?:string, VpcId?:string, SubnetGroupStatus?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:array{Name?:string}, SubnetStatus?:string}>, DBSubnetGroupArn?:string}, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{DBInstanceClass?:string, AllocatedStorage?:int, MasterUserPassword?:string, Port?:int, BackupRetentionPeriod?:int, MultiAZ?:bool, EngineVersion?:string, LicenseModel?:string, Iops?:int, DBInstanceIdentifier?:string, StorageType?:string, CACertificateIdentifier?:string, DBSubnetGroupName?:string, PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}}, LatestRestorableTime?:int|string|\DateTimeInterface, EngineVersion?:string, AutoMinorVersionUpgrade?:bool, PubliclyAccessible?:bool, StatusInfos?:array<array{StatusType?:string, Normal?:bool, Status?:string, Message?:string}>, DBClusterIdentifier?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbiResourceId?:string, CACertificateIdentifier?:string, CopyTagsToSnapshot?:bool, PromotionTier?:int, DBInstanceArn?:string, EnabledCloudwatchLogsExports?:array<string>, CertificateDetails?:array{CAIdentifier?:string, ValidTill?:int|string|\DateTimeInterface}, PerformanceInsightsEnabled?:bool, PerformanceInsightsKMSKeyId?:string}}>
     */
    public function createDBInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{GlobalClusterIdentifier:string, SourceDBClusterIdentifier?:string, Engine?:string, EngineVersion?:string, DeletionProtection?:bool, DatabaseName?:string, StorageEncrypted?:bool} $args
     * @return \AWS\Result<array{GlobalCluster?:array{GlobalClusterIdentifier?:string, GlobalClusterResourceId?:string, GlobalClusterArn?:string, Status?:string, Engine?:string, EngineVersion?:string, DatabaseName?:string, StorageEncrypted?:bool, DeletionProtection?:bool, GlobalClusterMembers?:array<array{DBClusterArn?:string, Readers?:array<string>, IsWriter?:bool}>}}>
     */
    public function createGlobalCluster(array $args): \AWS\Result { }

    /**
     * @param array{GlobalClusterIdentifier:string, SourceDBClusterIdentifier?:string, Engine?:string, EngineVersion?:string, DeletionProtection?:bool, DatabaseName?:string, StorageEncrypted?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{GlobalCluster?:array{GlobalClusterIdentifier?:string, GlobalClusterResourceId?:string, GlobalClusterArn?:string, Status?:string, Engine?:string, EngineVersion?:string, DatabaseName?:string, StorageEncrypted?:bool, DeletionProtection?:bool, GlobalClusterMembers?:array<array{DBClusterArn?:string, Readers?:array<string>, IsWriter?:bool}>}}>
     */
    public function createGlobalClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBClusterIdentifier:string, SkipFinalSnapshot?:bool, FinalDBSnapshotIdentifier?:string} $args
     * @return \AWS\Result<array{DBCluster?:array{AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string}>, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, EnabledCloudwatchLogsExports?:array<string>, DeletionProtection?:bool, StorageType?:string, MasterUserSecret?:array{SecretArn?:string, SecretStatus?:string, KmsKeyId?:string}}}>
     */
    public function deleteDBCluster(array $args): \AWS\Result { }

    /**
     * @param array{DBClusterIdentifier:string, SkipFinalSnapshot?:bool, FinalDBSnapshotIdentifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBCluster?:array{AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string}>, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, EnabledCloudwatchLogsExports?:array<string>, DeletionProtection?:bool, StorageType?:string, MasterUserSecret?:array{SecretArn?:string, SecretStatus?:string, KmsKeyId?:string}}}>
     */
    public function deleteDBClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @return \AWS\Result<array{DBClusterSnapshot?:array{AvailabilityZones?:array<string>, DBClusterSnapshotIdentifier?:string, DBClusterIdentifier?:string, SnapshotCreateTime?:int|string|\DateTimeInterface, Engine?:string, Status?:string, Port?:int, VpcId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, MasterUsername?:string, EngineVersion?:string, SnapshotType?:string, PercentProgress?:int, StorageEncrypted?:bool, KmsKeyId?:string, DBClusterSnapshotArn?:string, SourceDBClusterSnapshotArn?:string, StorageType?:string}}>
     */
    public function deleteDBClusterSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{DBClusterSnapshotIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBClusterSnapshot?:array{AvailabilityZones?:array<string>, DBClusterSnapshotIdentifier?:string, DBClusterIdentifier?:string, SnapshotCreateTime?:int|string|\DateTimeInterface, Engine?:string, Status?:string, Port?:int, VpcId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, MasterUsername?:string, EngineVersion?:string, SnapshotType?:string, PercentProgress?:int, StorageEncrypted?:bool, KmsKeyId?:string, DBClusterSnapshotArn?:string, SourceDBClusterSnapshotArn?:string, StorageType?:string}}>
     */
    public function deleteDBClusterSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBInstanceIdentifier:string} $args
     * @return \AWS\Result<array{DBInstance?:array{DBInstanceIdentifier?:string, DBInstanceClass?:string, Engine?:string, DBInstanceStatus?:string, Endpoint?:array{Address?:string, Port?:int, HostedZoneId?:string}, InstanceCreateTime?:int|string|\DateTimeInterface, PreferredBackupWindow?:string, BackupRetentionPeriod?:int, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, AvailabilityZone?:string, DBSubnetGroup?:array{DBSubnetGroupName?:string, DBSubnetGroupDescription?:string, VpcId?:string, SubnetGroupStatus?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:array{Name?:string}, SubnetStatus?:string}>, DBSubnetGroupArn?:string}, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{DBInstanceClass?:string, AllocatedStorage?:int, MasterUserPassword?:string, Port?:int, BackupRetentionPeriod?:int, MultiAZ?:bool, EngineVersion?:string, LicenseModel?:string, Iops?:int, DBInstanceIdentifier?:string, StorageType?:string, CACertificateIdentifier?:string, DBSubnetGroupName?:string, PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}}, LatestRestorableTime?:int|string|\DateTimeInterface, EngineVersion?:string, AutoMinorVersionUpgrade?:bool, PubliclyAccessible?:bool, StatusInfos?:array<array{StatusType?:string, Normal?:bool, Status?:string, Message?:string}>, DBClusterIdentifier?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbiResourceId?:string, CACertificateIdentifier?:string, CopyTagsToSnapshot?:bool, PromotionTier?:int, DBInstanceArn?:string, EnabledCloudwatchLogsExports?:array<string>, CertificateDetails?:array{CAIdentifier?:string, ValidTill?:int|string|\DateTimeInterface}, PerformanceInsightsEnabled?:bool, PerformanceInsightsKMSKeyId?:string}}>
     */
    public function deleteDBInstance(array $args): \AWS\Result { }

    /**
     * @param array{DBInstanceIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBInstance?:array{DBInstanceIdentifier?:string, DBInstanceClass?:string, Engine?:string, DBInstanceStatus?:string, Endpoint?:array{Address?:string, Port?:int, HostedZoneId?:string}, InstanceCreateTime?:int|string|\DateTimeInterface, PreferredBackupWindow?:string, BackupRetentionPeriod?:int, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, AvailabilityZone?:string, DBSubnetGroup?:array{DBSubnetGroupName?:string, DBSubnetGroupDescription?:string, VpcId?:string, SubnetGroupStatus?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:array{Name?:string}, SubnetStatus?:string}>, DBSubnetGroupArn?:string}, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{DBInstanceClass?:string, AllocatedStorage?:int, MasterUserPassword?:string, Port?:int, BackupRetentionPeriod?:int, MultiAZ?:bool, EngineVersion?:string, LicenseModel?:string, Iops?:int, DBInstanceIdentifier?:string, StorageType?:string, CACertificateIdentifier?:string, DBSubnetGroupName?:string, PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}}, LatestRestorableTime?:int|string|\DateTimeInterface, EngineVersion?:string, AutoMinorVersionUpgrade?:bool, PubliclyAccessible?:bool, StatusInfos?:array<array{StatusType?:string, Normal?:bool, Status?:string, Message?:string}>, DBClusterIdentifier?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbiResourceId?:string, CACertificateIdentifier?:string, CopyTagsToSnapshot?:bool, PromotionTier?:int, DBInstanceArn?:string, EnabledCloudwatchLogsExports?:array<string>, CertificateDetails?:array{CAIdentifier?:string, ValidTill?:int|string|\DateTimeInterface}, PerformanceInsightsEnabled?:bool, PerformanceInsightsKMSKeyId?:string}}>
     */
    public function deleteDBInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @return \AWS\Result<array{GlobalCluster?:array{GlobalClusterIdentifier?:string, GlobalClusterResourceId?:string, GlobalClusterArn?:string, Status?:string, Engine?:string, EngineVersion?:string, DatabaseName?:string, StorageEncrypted?:bool, DeletionProtection?:bool, GlobalClusterMembers?:array<array{DBClusterArn?:string, Readers?:array<string>, IsWriter?:bool}>}}>
     */
    public function deleteGlobalCluster(array $args): \AWS\Result { }

    /**
     * @param array{GlobalClusterIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GlobalCluster?:array{GlobalClusterIdentifier?:string, GlobalClusterResourceId?:string, GlobalClusterArn?:string, Status?:string, Engine?:string, EngineVersion?:string, DatabaseName?:string, StorageEncrypted?:bool, DeletionProtection?:bool, GlobalClusterMembers?:array<array{DBClusterArn?:string, Readers?:array<string>, IsWriter?:bool}>}}>
     */
    public function deleteGlobalClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CertificateIdentifier?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{Certificates?:array<array{CertificateIdentifier?:string, CertificateType?:string, Thumbprint?:string, ValidFrom?:int|string|\DateTimeInterface, ValidTill?:int|string|\DateTimeInterface, CertificateArn?:string}>, Marker?:string}>
     */
    public function describeCertificates(array $args = []): \AWS\Result { }

    /**
     * @param array{CertificateIdentifier?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Certificates?:array<array{CertificateIdentifier?:string, CertificateType?:string, Thumbprint?:string, ValidFrom?:int|string|\DateTimeInterface, ValidTill?:int|string|\DateTimeInterface, CertificateArn?:string}>, Marker?:string}>
     */
    public function describeCertificatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @return \AWS\Result<array{Marker?:string, DBClusterSnapshots?:array<array{AvailabilityZones?:array<string>, DBClusterSnapshotIdentifier?:string, DBClusterIdentifier?:string, SnapshotCreateTime?:int|string|\DateTimeInterface, Engine?:string, Status?:string, Port?:int, VpcId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, MasterUsername?:string, EngineVersion?:string, SnapshotType?:string, PercentProgress?:int, StorageEncrypted?:bool, KmsKeyId?:string, DBClusterSnapshotArn?:string, SourceDBClusterSnapshotArn?:string, StorageType?:string}>}>
     */
    public function describeDBClusterSnapshots(array $args = []): \AWS\Result { }

    /**
     * @param array{DBClusterIdentifier?:string, DBClusterSnapshotIdentifier?:string, SnapshotType?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string, IncludeShared?:bool, IncludePublic?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, DBClusterSnapshots?:array<array{AvailabilityZones?:array<string>, DBClusterSnapshotIdentifier?:string, DBClusterIdentifier?:string, SnapshotCreateTime?:int|string|\DateTimeInterface, Engine?:string, Status?:string, Port?:int, VpcId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, MasterUsername?:string, EngineVersion?:string, SnapshotType?:string, PercentProgress?:int, StorageEncrypted?:bool, KmsKeyId?:string, DBClusterSnapshotArn?:string, SourceDBClusterSnapshotArn?:string, StorageType?:string}>}>
     */
    public function describeDBClusterSnapshotsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBClusterIdentifier?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{Marker?:string, DBClusters?:array<array{AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string}>, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, EnabledCloudwatchLogsExports?:array<string>, DeletionProtection?:bool, StorageType?:string, MasterUserSecret?:array{SecretArn?:string, SecretStatus?:string, KmsKeyId?:string}}>}>
     */
    public function describeDBClusters(array $args = []): \AWS\Result { }

    /**
     * @param array{DBClusterIdentifier?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, DBClusters?:array<array{AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string}>, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, EnabledCloudwatchLogsExports?:array<string>, DeletionProtection?:bool, StorageType?:string, MasterUserSecret?:array{SecretArn?:string, SecretStatus?:string, KmsKeyId?:string}}>}>
     */
    public function describeDBClustersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Engine?:string, EngineVersion?:string, DBParameterGroupFamily?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string, DefaultOnly?:bool, ListSupportedCharacterSets?:bool, ListSupportedTimezones?:bool} $args
     * @return \AWS\Result<array{Marker?:string, DBEngineVersions?:array<array{Engine?:string, EngineVersion?:string, DBParameterGroupFamily?:string, DBEngineDescription?:string, DBEngineVersionDescription?:string, ValidUpgradeTarget?:array<array{Engine?:string, EngineVersion?:string, Description?:string, AutoUpgrade?:bool, IsMajorVersionUpgrade?:bool}>, ExportableLogTypes?:array<string>, SupportsLogExportsToCloudwatchLogs?:bool, SupportedCACertificateIdentifiers?:array<string>, SupportsCertificateRotationWithoutRestart?:bool}>}>
     */
    public function describeDBEngineVersions(array $args = []): \AWS\Result { }

    /**
     * @param array{Engine?:string, EngineVersion?:string, DBParameterGroupFamily?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string, DefaultOnly?:bool, ListSupportedCharacterSets?:bool, ListSupportedTimezones?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, DBEngineVersions?:array<array{Engine?:string, EngineVersion?:string, DBParameterGroupFamily?:string, DBEngineDescription?:string, DBEngineVersionDescription?:string, ValidUpgradeTarget?:array<array{Engine?:string, EngineVersion?:string, Description?:string, AutoUpgrade?:bool, IsMajorVersionUpgrade?:bool}>, ExportableLogTypes?:array<string>, SupportsLogExportsToCloudwatchLogs?:bool, SupportedCACertificateIdentifiers?:array<string>, SupportsCertificateRotationWithoutRestart?:bool}>}>
     */
    public function describeDBEngineVersionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBInstanceIdentifier?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{Marker?:string, DBInstances?:array<array{DBInstanceIdentifier?:string, DBInstanceClass?:string, Engine?:string, DBInstanceStatus?:string, Endpoint?:array{Address?:string, Port?:int, HostedZoneId?:string}, InstanceCreateTime?:int|string|\DateTimeInterface, PreferredBackupWindow?:string, BackupRetentionPeriod?:int, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, AvailabilityZone?:string, DBSubnetGroup?:array{DBSubnetGroupName?:string, DBSubnetGroupDescription?:string, VpcId?:string, SubnetGroupStatus?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:array{Name?:string}, SubnetStatus?:string}>, DBSubnetGroupArn?:string}, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{DBInstanceClass?:string, AllocatedStorage?:int, MasterUserPassword?:string, Port?:int, BackupRetentionPeriod?:int, MultiAZ?:bool, EngineVersion?:string, LicenseModel?:string, Iops?:int, DBInstanceIdentifier?:string, StorageType?:string, CACertificateIdentifier?:string, DBSubnetGroupName?:string, PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}}, LatestRestorableTime?:int|string|\DateTimeInterface, EngineVersion?:string, AutoMinorVersionUpgrade?:bool, PubliclyAccessible?:bool, StatusInfos?:array<array{StatusType?:string, Normal?:bool, Status?:string, Message?:string}>, DBClusterIdentifier?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbiResourceId?:string, CACertificateIdentifier?:string, CopyTagsToSnapshot?:bool, PromotionTier?:int, DBInstanceArn?:string, EnabledCloudwatchLogsExports?:array<string>, CertificateDetails?:array{CAIdentifier?:string, ValidTill?:int|string|\DateTimeInterface}, PerformanceInsightsEnabled?:bool, PerformanceInsightsKMSKeyId?:string}>}>
     */
    public function describeDBInstances(array $args = []): \AWS\Result { }

    /**
     * @param array{DBInstanceIdentifier?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, DBInstances?:array<array{DBInstanceIdentifier?:string, DBInstanceClass?:string, Engine?:string, DBInstanceStatus?:string, Endpoint?:array{Address?:string, Port?:int, HostedZoneId?:string}, InstanceCreateTime?:int|string|\DateTimeInterface, PreferredBackupWindow?:string, BackupRetentionPeriod?:int, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, AvailabilityZone?:string, DBSubnetGroup?:array{DBSubnetGroupName?:string, DBSubnetGroupDescription?:string, VpcId?:string, SubnetGroupStatus?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:array{Name?:string}, SubnetStatus?:string}>, DBSubnetGroupArn?:string}, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{DBInstanceClass?:string, AllocatedStorage?:int, MasterUserPassword?:string, Port?:int, BackupRetentionPeriod?:int, MultiAZ?:bool, EngineVersion?:string, LicenseModel?:string, Iops?:int, DBInstanceIdentifier?:string, StorageType?:string, CACertificateIdentifier?:string, DBSubnetGroupName?:string, PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}}, LatestRestorableTime?:int|string|\DateTimeInterface, EngineVersion?:string, AutoMinorVersionUpgrade?:bool, PubliclyAccessible?:bool, StatusInfos?:array<array{StatusType?:string, Normal?:bool, Status?:string, Message?:string}>, DBClusterIdentifier?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbiResourceId?:string, CACertificateIdentifier?:string, CopyTagsToSnapshot?:bool, PromotionTier?:int, DBInstanceArn?:string, EnabledCloudwatchLogsExports?:array<string>, CertificateDetails?:array{CAIdentifier?:string, ValidTill?:int|string|\DateTimeInterface}, PerformanceInsightsEnabled?:bool, PerformanceInsightsKMSKeyId?:string}>}>
     */
    public function describeDBInstancesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{GlobalClusterIdentifier?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{Marker?:string, GlobalClusters?:array<array{GlobalClusterIdentifier?:string, GlobalClusterResourceId?:string, GlobalClusterArn?:string, Status?:string, Engine?:string, EngineVersion?:string, DatabaseName?:string, StorageEncrypted?:bool, DeletionProtection?:bool, GlobalClusterMembers?:array<array{DBClusterArn?:string, Readers?:array<string>, IsWriter?:bool}>}>}>
     */
    public function describeGlobalClusters(array $args = []): \AWS\Result { }

    /**
     * @param array{GlobalClusterIdentifier?:string, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, GlobalClusters?:array<array{GlobalClusterIdentifier?:string, GlobalClusterResourceId?:string, GlobalClusterArn?:string, Status?:string, Engine?:string, EngineVersion?:string, DatabaseName?:string, StorageEncrypted?:bool, DeletionProtection?:bool, GlobalClusterMembers?:array<array{DBClusterArn?:string, Readers?:array<string>, IsWriter?:bool}>}>}>
     */
    public function describeGlobalClustersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Engine:string, EngineVersion?:string, DBInstanceClass?:string, LicenseModel?:string, Vpc?:bool, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{OrderableDBInstanceOptions?:array<array{Engine?:string, EngineVersion?:string, DBInstanceClass?:string, LicenseModel?:string, AvailabilityZones?:array<array{Name?:string}>, Vpc?:bool, StorageType?:string}>, Marker?:string}>
     */
    public function describeOrderableDBInstanceOptions(array $args): \AWS\Result { }

    /**
     * @param array{Engine:string, EngineVersion?:string, DBInstanceClass?:string, LicenseModel?:string, Vpc?:bool, Filters?:array<array{Name:string, Values:array<string>}>, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{OrderableDBInstanceOptions?:array<array{Engine?:string, EngineVersion?:string, DBInstanceClass?:string, LicenseModel?:string, AvailabilityZones?:array<array{Name?:string}>, Vpc?:bool, StorageType?:string}>, Marker?:string}>
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
     * @param array{DBClusterIdentifier?:string, TargetDBInstanceIdentifier?:string} $args
     * @return \AWS\Result<array{DBCluster?:array{AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string}>, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, EnabledCloudwatchLogsExports?:array<string>, DeletionProtection?:bool, StorageType?:string, MasterUserSecret?:array{SecretArn?:string, SecretStatus?:string, KmsKeyId?:string}}}>
     */
    public function failoverDBCluster(array $args = []): \AWS\Result { }

    /**
     * @param array{DBClusterIdentifier?:string, TargetDBInstanceIdentifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBCluster?:array{AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string}>, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, EnabledCloudwatchLogsExports?:array<string>, DeletionProtection?:bool, StorageType?:string, MasterUserSecret?:array{SecretArn?:string, SecretStatus?:string, KmsKeyId?:string}}}>
     */
    public function failoverDBClusterAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalClusterIdentifier:string, TargetDbClusterIdentifier:string, AllowDataLoss?:bool, Switchover?:bool} $args
     * @return \AWS\Result<array{GlobalCluster?:array{GlobalClusterIdentifier?:string, GlobalClusterResourceId?:string, GlobalClusterArn?:string, Status?:string, Engine?:string, EngineVersion?:string, DatabaseName?:string, StorageEncrypted?:bool, DeletionProtection?:bool, GlobalClusterMembers?:array<array{DBClusterArn?:string, Readers?:array<string>, IsWriter?:bool}>}}>
     */
    public function failoverGlobalCluster(array $args): \AWS\Result { }

    /**
     * @param array{GlobalClusterIdentifier:string, TargetDbClusterIdentifier:string, AllowDataLoss?:bool, Switchover?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{GlobalCluster?:array{GlobalClusterIdentifier?:string, GlobalClusterResourceId?:string, GlobalClusterArn?:string, Status?:string, Engine?:string, EngineVersion?:string, DatabaseName?:string, StorageEncrypted?:bool, DeletionProtection?:bool, GlobalClusterMembers?:array<array{DBClusterArn?:string, Readers?:array<string>, IsWriter?:bool}>}}>
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
     * @param array{DBClusterIdentifier:string, NewDBClusterIdentifier?:string, ApplyImmediately?:bool, BackupRetentionPeriod?:int, DBClusterParameterGroupName?:string, VpcSecurityGroupIds?:array<string>, Port?:int, MasterUserPassword?:string, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, CloudwatchLogsExportConfiguration?:array{EnableLogTypes?:array<string>, DisableLogTypes?:array<string>}, EngineVersion?:string, AllowMajorVersionUpgrade?:bool, DeletionProtection?:bool, StorageType?:string, ManageMasterUserPassword?:bool, MasterUserSecretKmsKeyId?:string, RotateMasterUserPassword?:bool} $args
     * @return \AWS\Result<array{DBCluster?:array{AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string}>, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, EnabledCloudwatchLogsExports?:array<string>, DeletionProtection?:bool, StorageType?:string, MasterUserSecret?:array{SecretArn?:string, SecretStatus?:string, KmsKeyId?:string}}}>
     */
    public function modifyDBCluster(array $args): \AWS\Result { }

    /**
     * @param array{DBClusterIdentifier:string, NewDBClusterIdentifier?:string, ApplyImmediately?:bool, BackupRetentionPeriod?:int, DBClusterParameterGroupName?:string, VpcSecurityGroupIds?:array<string>, Port?:int, MasterUserPassword?:string, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, CloudwatchLogsExportConfiguration?:array{EnableLogTypes?:array<string>, DisableLogTypes?:array<string>}, EngineVersion?:string, AllowMajorVersionUpgrade?:bool, DeletionProtection?:bool, StorageType?:string, ManageMasterUserPassword?:bool, MasterUserSecretKmsKeyId?:string, RotateMasterUserPassword?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBCluster?:array{AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string}>, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, EnabledCloudwatchLogsExports?:array<string>, DeletionProtection?:bool, StorageType?:string, MasterUserSecret?:array{SecretArn?:string, SecretStatus?:string, KmsKeyId?:string}}}>
     */
    public function modifyDBClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{DBInstanceIdentifier:string, DBInstanceClass?:string, ApplyImmediately?:bool, PreferredMaintenanceWindow?:string, AutoMinorVersionUpgrade?:bool, NewDBInstanceIdentifier?:string, CACertificateIdentifier?:string, CopyTagsToSnapshot?:bool, PromotionTier?:int, EnablePerformanceInsights?:bool, PerformanceInsightsKMSKeyId?:string, CertificateRotationRestart?:bool} $args
     * @return \AWS\Result<array{DBInstance?:array{DBInstanceIdentifier?:string, DBInstanceClass?:string, Engine?:string, DBInstanceStatus?:string, Endpoint?:array{Address?:string, Port?:int, HostedZoneId?:string}, InstanceCreateTime?:int|string|\DateTimeInterface, PreferredBackupWindow?:string, BackupRetentionPeriod?:int, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, AvailabilityZone?:string, DBSubnetGroup?:array{DBSubnetGroupName?:string, DBSubnetGroupDescription?:string, VpcId?:string, SubnetGroupStatus?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:array{Name?:string}, SubnetStatus?:string}>, DBSubnetGroupArn?:string}, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{DBInstanceClass?:string, AllocatedStorage?:int, MasterUserPassword?:string, Port?:int, BackupRetentionPeriod?:int, MultiAZ?:bool, EngineVersion?:string, LicenseModel?:string, Iops?:int, DBInstanceIdentifier?:string, StorageType?:string, CACertificateIdentifier?:string, DBSubnetGroupName?:string, PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}}, LatestRestorableTime?:int|string|\DateTimeInterface, EngineVersion?:string, AutoMinorVersionUpgrade?:bool, PubliclyAccessible?:bool, StatusInfos?:array<array{StatusType?:string, Normal?:bool, Status?:string, Message?:string}>, DBClusterIdentifier?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbiResourceId?:string, CACertificateIdentifier?:string, CopyTagsToSnapshot?:bool, PromotionTier?:int, DBInstanceArn?:string, EnabledCloudwatchLogsExports?:array<string>, CertificateDetails?:array{CAIdentifier?:string, ValidTill?:int|string|\DateTimeInterface}, PerformanceInsightsEnabled?:bool, PerformanceInsightsKMSKeyId?:string}}>
     */
    public function modifyDBInstance(array $args): \AWS\Result { }

    /**
     * @param array{DBInstanceIdentifier:string, DBInstanceClass?:string, ApplyImmediately?:bool, PreferredMaintenanceWindow?:string, AutoMinorVersionUpgrade?:bool, NewDBInstanceIdentifier?:string, CACertificateIdentifier?:string, CopyTagsToSnapshot?:bool, PromotionTier?:int, EnablePerformanceInsights?:bool, PerformanceInsightsKMSKeyId?:string, CertificateRotationRestart?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBInstance?:array{DBInstanceIdentifier?:string, DBInstanceClass?:string, Engine?:string, DBInstanceStatus?:string, Endpoint?:array{Address?:string, Port?:int, HostedZoneId?:string}, InstanceCreateTime?:int|string|\DateTimeInterface, PreferredBackupWindow?:string, BackupRetentionPeriod?:int, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, AvailabilityZone?:string, DBSubnetGroup?:array{DBSubnetGroupName?:string, DBSubnetGroupDescription?:string, VpcId?:string, SubnetGroupStatus?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:array{Name?:string}, SubnetStatus?:string}>, DBSubnetGroupArn?:string}, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{DBInstanceClass?:string, AllocatedStorage?:int, MasterUserPassword?:string, Port?:int, BackupRetentionPeriod?:int, MultiAZ?:bool, EngineVersion?:string, LicenseModel?:string, Iops?:int, DBInstanceIdentifier?:string, StorageType?:string, CACertificateIdentifier?:string, DBSubnetGroupName?:string, PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}}, LatestRestorableTime?:int|string|\DateTimeInterface, EngineVersion?:string, AutoMinorVersionUpgrade?:bool, PubliclyAccessible?:bool, StatusInfos?:array<array{StatusType?:string, Normal?:bool, Status?:string, Message?:string}>, DBClusterIdentifier?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbiResourceId?:string, CACertificateIdentifier?:string, CopyTagsToSnapshot?:bool, PromotionTier?:int, DBInstanceArn?:string, EnabledCloudwatchLogsExports?:array<string>, CertificateDetails?:array{CAIdentifier?:string, ValidTill?:int|string|\DateTimeInterface}, PerformanceInsightsEnabled?:bool, PerformanceInsightsKMSKeyId?:string}}>
     */
    public function modifyDBInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{GlobalClusterIdentifier:string, NewGlobalClusterIdentifier?:string, DeletionProtection?:bool} $args
     * @return \AWS\Result<array{GlobalCluster?:array{GlobalClusterIdentifier?:string, GlobalClusterResourceId?:string, GlobalClusterArn?:string, Status?:string, Engine?:string, EngineVersion?:string, DatabaseName?:string, StorageEncrypted?:bool, DeletionProtection?:bool, GlobalClusterMembers?:array<array{DBClusterArn?:string, Readers?:array<string>, IsWriter?:bool}>}}>
     */
    public function modifyGlobalCluster(array $args): \AWS\Result { }

    /**
     * @param array{GlobalClusterIdentifier:string, NewGlobalClusterIdentifier?:string, DeletionProtection?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{GlobalCluster?:array{GlobalClusterIdentifier?:string, GlobalClusterResourceId?:string, GlobalClusterArn?:string, Status?:string, Engine?:string, EngineVersion?:string, DatabaseName?:string, StorageEncrypted?:bool, DeletionProtection?:bool, GlobalClusterMembers?:array<array{DBClusterArn?:string, Readers?:array<string>, IsWriter?:bool}>}}>
     */
    public function modifyGlobalClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBInstanceIdentifier:string, ForceFailover?:bool} $args
     * @return \AWS\Result<array{DBInstance?:array{DBInstanceIdentifier?:string, DBInstanceClass?:string, Engine?:string, DBInstanceStatus?:string, Endpoint?:array{Address?:string, Port?:int, HostedZoneId?:string}, InstanceCreateTime?:int|string|\DateTimeInterface, PreferredBackupWindow?:string, BackupRetentionPeriod?:int, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, AvailabilityZone?:string, DBSubnetGroup?:array{DBSubnetGroupName?:string, DBSubnetGroupDescription?:string, VpcId?:string, SubnetGroupStatus?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:array{Name?:string}, SubnetStatus?:string}>, DBSubnetGroupArn?:string}, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{DBInstanceClass?:string, AllocatedStorage?:int, MasterUserPassword?:string, Port?:int, BackupRetentionPeriod?:int, MultiAZ?:bool, EngineVersion?:string, LicenseModel?:string, Iops?:int, DBInstanceIdentifier?:string, StorageType?:string, CACertificateIdentifier?:string, DBSubnetGroupName?:string, PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}}, LatestRestorableTime?:int|string|\DateTimeInterface, EngineVersion?:string, AutoMinorVersionUpgrade?:bool, PubliclyAccessible?:bool, StatusInfos?:array<array{StatusType?:string, Normal?:bool, Status?:string, Message?:string}>, DBClusterIdentifier?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbiResourceId?:string, CACertificateIdentifier?:string, CopyTagsToSnapshot?:bool, PromotionTier?:int, DBInstanceArn?:string, EnabledCloudwatchLogsExports?:array<string>, CertificateDetails?:array{CAIdentifier?:string, ValidTill?:int|string|\DateTimeInterface}, PerformanceInsightsEnabled?:bool, PerformanceInsightsKMSKeyId?:string}}>
     */
    public function rebootDBInstance(array $args): \AWS\Result { }

    /**
     * @param array{DBInstanceIdentifier:string, ForceFailover?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBInstance?:array{DBInstanceIdentifier?:string, DBInstanceClass?:string, Engine?:string, DBInstanceStatus?:string, Endpoint?:array{Address?:string, Port?:int, HostedZoneId?:string}, InstanceCreateTime?:int|string|\DateTimeInterface, PreferredBackupWindow?:string, BackupRetentionPeriod?:int, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, AvailabilityZone?:string, DBSubnetGroup?:array{DBSubnetGroupName?:string, DBSubnetGroupDescription?:string, VpcId?:string, SubnetGroupStatus?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:array{Name?:string}, SubnetStatus?:string}>, DBSubnetGroupArn?:string}, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{DBInstanceClass?:string, AllocatedStorage?:int, MasterUserPassword?:string, Port?:int, BackupRetentionPeriod?:int, MultiAZ?:bool, EngineVersion?:string, LicenseModel?:string, Iops?:int, DBInstanceIdentifier?:string, StorageType?:string, CACertificateIdentifier?:string, DBSubnetGroupName?:string, PendingCloudwatchLogsExports?:array{LogTypesToEnable?:array<string>, LogTypesToDisable?:array<string>}}, LatestRestorableTime?:int|string|\DateTimeInterface, EngineVersion?:string, AutoMinorVersionUpgrade?:bool, PubliclyAccessible?:bool, StatusInfos?:array<array{StatusType?:string, Normal?:bool, Status?:string, Message?:string}>, DBClusterIdentifier?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbiResourceId?:string, CACertificateIdentifier?:string, CopyTagsToSnapshot?:bool, PromotionTier?:int, DBInstanceArn?:string, EnabledCloudwatchLogsExports?:array<string>, CertificateDetails?:array{CAIdentifier?:string, ValidTill?:int|string|\DateTimeInterface}, PerformanceInsightsEnabled?:bool, PerformanceInsightsKMSKeyId?:string}}>
     */
    public function rebootDBInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalClusterIdentifier:string, DbClusterIdentifier:string} $args
     * @return \AWS\Result<array{GlobalCluster?:array{GlobalClusterIdentifier?:string, GlobalClusterResourceId?:string, GlobalClusterArn?:string, Status?:string, Engine?:string, EngineVersion?:string, DatabaseName?:string, StorageEncrypted?:bool, DeletionProtection?:bool, GlobalClusterMembers?:array<array{DBClusterArn?:string, Readers?:array<string>, IsWriter?:bool}>}}>
     */
    public function removeFromGlobalCluster(array $args): \AWS\Result { }

    /**
     * @param array{GlobalClusterIdentifier:string, DbClusterIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GlobalCluster?:array{GlobalClusterIdentifier?:string, GlobalClusterResourceId?:string, GlobalClusterArn?:string, Status?:string, Engine?:string, EngineVersion?:string, DatabaseName?:string, StorageEncrypted?:bool, DeletionProtection?:bool, GlobalClusterMembers?:array<array{DBClusterArn?:string, Readers?:array<string>, IsWriter?:bool}>}}>
     */
    public function removeFromGlobalClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{AvailabilityZones?:array<string>, DBClusterIdentifier:string, SnapshotIdentifier:string, Engine:string, EngineVersion?:string, Port?:int, DBSubnetGroupName?:string, VpcSecurityGroupIds?:array<string>, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnableCloudwatchLogsExports?:array<string>, DeletionProtection?:bool, DBClusterParameterGroupName?:string, StorageType?:string} $args
     * @return \AWS\Result<array{DBCluster?:array{AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string}>, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, EnabledCloudwatchLogsExports?:array<string>, DeletionProtection?:bool, StorageType?:string, MasterUserSecret?:array{SecretArn?:string, SecretStatus?:string, KmsKeyId?:string}}}>
     */
    public function restoreDBClusterFromSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{AvailabilityZones?:array<string>, DBClusterIdentifier:string, SnapshotIdentifier:string, Engine:string, EngineVersion?:string, Port?:int, DBSubnetGroupName?:string, VpcSecurityGroupIds?:array<string>, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnableCloudwatchLogsExports?:array<string>, DeletionProtection?:bool, DBClusterParameterGroupName?:string, StorageType?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBCluster?:array{AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string}>, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, EnabledCloudwatchLogsExports?:array<string>, DeletionProtection?:bool, StorageType?:string, MasterUserSecret?:array{SecretArn?:string, SecretStatus?:string, KmsKeyId?:string}}}>
     */
    public function restoreDBClusterFromSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBClusterIdentifier:string, RestoreType?:string, SourceDBClusterIdentifier:string, RestoreToTime?:int|string|\DateTimeInterface, UseLatestRestorableTime?:bool, Port?:int, DBSubnetGroupName?:string, VpcSecurityGroupIds?:array<string>, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnableCloudwatchLogsExports?:array<string>, DeletionProtection?:bool, StorageType?:string} $args
     * @return \AWS\Result<array{DBCluster?:array{AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string}>, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, EnabledCloudwatchLogsExports?:array<string>, DeletionProtection?:bool, StorageType?:string, MasterUserSecret?:array{SecretArn?:string, SecretStatus?:string, KmsKeyId?:string}}}>
     */
    public function restoreDBClusterToPointInTime(array $args): \AWS\Result { }

    /**
     * @param array{DBClusterIdentifier:string, RestoreType?:string, SourceDBClusterIdentifier:string, RestoreToTime?:int|string|\DateTimeInterface, UseLatestRestorableTime?:bool, Port?:int, DBSubnetGroupName?:string, VpcSecurityGroupIds?:array<string>, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnableCloudwatchLogsExports?:array<string>, DeletionProtection?:bool, StorageType?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBCluster?:array{AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string}>, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, EnabledCloudwatchLogsExports?:array<string>, DeletionProtection?:bool, StorageType?:string, MasterUserSecret?:array{SecretArn?:string, SecretStatus?:string, KmsKeyId?:string}}}>
     */
    public function restoreDBClusterToPointInTimeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBClusterIdentifier:string} $args
     * @return \AWS\Result<array{DBCluster?:array{AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string}>, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, EnabledCloudwatchLogsExports?:array<string>, DeletionProtection?:bool, StorageType?:string, MasterUserSecret?:array{SecretArn?:string, SecretStatus?:string, KmsKeyId?:string}}}>
     */
    public function startDBCluster(array $args): \AWS\Result { }

    /**
     * @param array{DBClusterIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBCluster?:array{AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string}>, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, EnabledCloudwatchLogsExports?:array<string>, DeletionProtection?:bool, StorageType?:string, MasterUserSecret?:array{SecretArn?:string, SecretStatus?:string, KmsKeyId?:string}}}>
     */
    public function startDBClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBClusterIdentifier:string} $args
     * @return \AWS\Result<array{DBCluster?:array{AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string}>, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, EnabledCloudwatchLogsExports?:array<string>, DeletionProtection?:bool, StorageType?:string, MasterUserSecret?:array{SecretArn?:string, SecretStatus?:string, KmsKeyId?:string}}}>
     */
    public function stopDBCluster(array $args): \AWS\Result { }

    /**
     * @param array{DBClusterIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DBCluster?:array{AvailabilityZones?:array<string>, BackupRetentionPeriod?:int, DBClusterIdentifier?:string, DBClusterParameterGroup?:string, DBSubnetGroup?:string, Status?:string, PercentProgress?:string, EarliestRestorableTime?:int|string|\DateTimeInterface, Endpoint?:string, ReaderEndpoint?:string, MultiAZ?:bool, Engine?:string, EngineVersion?:string, LatestRestorableTime?:int|string|\DateTimeInterface, Port?:int, MasterUsername?:string, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, ReplicationSourceIdentifier?:string, ReadReplicaIdentifiers?:array<string>, DBClusterMembers?:array<array{DBInstanceIdentifier?:string, IsClusterWriter?:bool, DBClusterParameterGroupStatus?:string, PromotionTier?:int}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, HostedZoneId?:string, StorageEncrypted?:bool, KmsKeyId?:string, DbClusterResourceId?:string, DBClusterArn?:string, AssociatedRoles?:array<array{RoleArn?:string, Status?:string}>, CloneGroupId?:string, ClusterCreateTime?:int|string|\DateTimeInterface, EnabledCloudwatchLogsExports?:array<string>, DeletionProtection?:bool, StorageType?:string, MasterUserSecret?:array{SecretArn?:string, SecretStatus?:string, KmsKeyId?:string}}}>
     */
    public function stopDBClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalClusterIdentifier:string, TargetDbClusterIdentifier:string} $args
     * @return \AWS\Result<array{GlobalCluster?:array{GlobalClusterIdentifier?:string, GlobalClusterResourceId?:string, GlobalClusterArn?:string, Status?:string, Engine?:string, EngineVersion?:string, DatabaseName?:string, StorageEncrypted?:bool, DeletionProtection?:bool, GlobalClusterMembers?:array<array{DBClusterArn?:string, Readers?:array<string>, IsWriter?:bool}>}}>
     */
    public function switchoverGlobalCluster(array $args): \AWS\Result { }

    /**
     * @param array{GlobalClusterIdentifier:string, TargetDbClusterIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GlobalCluster?:array{GlobalClusterIdentifier?:string, GlobalClusterResourceId?:string, GlobalClusterArn?:string, Status?:string, Engine?:string, EngineVersion?:string, DatabaseName?:string, StorageEncrypted?:bool, DeletionProtection?:bool, GlobalClusterMembers?:array<array{DBClusterArn?:string, Readers?:array<string>, IsWriter?:bool}>}}>
     */
    public function switchoverGlobalClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
