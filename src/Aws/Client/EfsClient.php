<?php
namespace AWS\Efs;

class EfsClient
{
    /**
     * @param array{ClientToken:string, Tags?:array<array{Key:string, Value:string}>, FileSystemId:string, PosixUser?:array{Uid:int, Gid:int, SecondaryGids?:array<int>}, RootDirectory?:array{Path?:string, CreationInfo?:array{OwnerUid:int, OwnerGid:int, Permissions:string}}} $args
     * @return \AWS\Result<array{ClientToken?:string, Name?:string, Tags?:array<array{Key:string, Value:string}>, AccessPointId?:string, AccessPointArn?:string, FileSystemId?:string, PosixUser?:array{Uid:int, Gid:int, SecondaryGids?:array<int>}, RootDirectory?:array{Path?:string, CreationInfo?:array{OwnerUid:int, OwnerGid:int, Permissions:string}}, OwnerId?:string, LifeCycleState?:"creating"|"available"|"updating"|"deleting"|"deleted"|"error"}>
     */
    public function createAccessPoint(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken:string, Tags?:array<array{Key:string, Value:string}>, FileSystemId:string, PosixUser?:array{Uid:int, Gid:int, SecondaryGids?:array<int>}, RootDirectory?:array{Path?:string, CreationInfo?:array{OwnerUid:int, OwnerGid:int, Permissions:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClientToken?:string, Name?:string, Tags?:array<array{Key:string, Value:string}>, AccessPointId?:string, AccessPointArn?:string, FileSystemId?:string, PosixUser?:array{Uid:int, Gid:int, SecondaryGids?:array<int>}, RootDirectory?:array{Path?:string, CreationInfo?:array{OwnerUid:int, OwnerGid:int, Permissions:string}}, OwnerId?:string, LifeCycleState?:"creating"|"available"|"updating"|"deleting"|"deleted"|"error"}>
     */
    public function createAccessPointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CreationToken:string, PerformanceMode?:"generalPurpose"|"maxIO", Encrypted?:bool, KmsKeyId?:string, ThroughputMode?:"bursting"|"provisioned"|"elastic", ProvisionedThroughputInMibps?:float, AvailabilityZoneName?:string, Backup?:bool, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{OwnerId:string, CreationToken:string, FileSystemId:string, FileSystemArn?:string, CreationTime:int|string|\DateTimeInterface, LifeCycleState:"creating"|"available"|"updating"|"deleting"|"deleted"|"error", Name?:string, NumberOfMountTargets:int, SizeInBytes:array{Value:int, Timestamp?:int|string|\DateTimeInterface, ValueInIA?:int, ValueInStandard?:int, ValueInArchive?:int}, PerformanceMode:"generalPurpose"|"maxIO", Encrypted?:bool, KmsKeyId?:string, ThroughputMode?:"bursting"|"provisioned"|"elastic", ProvisionedThroughputInMibps?:float, AvailabilityZoneName?:string, AvailabilityZoneId?:string, Tags:array<array{Key:string, Value:string}>, FileSystemProtection?:array{ReplicationOverwriteProtection?:"ENABLED"|"DISABLED"|"REPLICATING"}}>
     */
    public function createFileSystem(array $args): \AWS\Result { }

    /**
     * @param array{CreationToken:string, PerformanceMode?:"generalPurpose"|"maxIO", Encrypted?:bool, KmsKeyId?:string, ThroughputMode?:"bursting"|"provisioned"|"elastic", ProvisionedThroughputInMibps?:float, AvailabilityZoneName?:string, Backup?:bool, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{OwnerId:string, CreationToken:string, FileSystemId:string, FileSystemArn?:string, CreationTime:int|string|\DateTimeInterface, LifeCycleState:"creating"|"available"|"updating"|"deleting"|"deleted"|"error", Name?:string, NumberOfMountTargets:int, SizeInBytes:array{Value:int, Timestamp?:int|string|\DateTimeInterface, ValueInIA?:int, ValueInStandard?:int, ValueInArchive?:int}, PerformanceMode:"generalPurpose"|"maxIO", Encrypted?:bool, KmsKeyId?:string, ThroughputMode?:"bursting"|"provisioned"|"elastic", ProvisionedThroughputInMibps?:float, AvailabilityZoneName?:string, AvailabilityZoneId?:string, Tags:array<array{Key:string, Value:string}>, FileSystemProtection?:array{ReplicationOverwriteProtection?:"ENABLED"|"DISABLED"|"REPLICATING"}}>
     */
    public function createFileSystemAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FileSystemId:string, SubnetId:string, IpAddress?:string, SecurityGroups?:array<string>} $args
     * @return \AWS\Result<array{OwnerId?:string, MountTargetId:string, FileSystemId:string, SubnetId:string, LifeCycleState:"creating"|"available"|"updating"|"deleting"|"deleted"|"error", IpAddress?:string, NetworkInterfaceId?:string, AvailabilityZoneId?:string, AvailabilityZoneName?:string, VpcId?:string}>
     */
    public function createMountTarget(array $args): \AWS\Result { }

    /**
     * @param array{FileSystemId:string, SubnetId:string, IpAddress?:string, SecurityGroups?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{OwnerId?:string, MountTargetId:string, FileSystemId:string, SubnetId:string, LifeCycleState:"creating"|"available"|"updating"|"deleting"|"deleted"|"error", IpAddress?:string, NetworkInterfaceId?:string, AvailabilityZoneId?:string, AvailabilityZoneName?:string, VpcId?:string}>
     */
    public function createMountTargetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SourceFileSystemId:string, Destinations:array<array{Region?:string, AvailabilityZoneName?:string, KmsKeyId?:string, FileSystemId?:string, RoleArn?:string}>} $args
     * @return \AWS\Result<array{SourceFileSystemId:string, SourceFileSystemRegion:string, SourceFileSystemArn:string, OriginalSourceFileSystemArn:string, CreationTime:int|string|\DateTimeInterface, Destinations:array<array{Status:"ENABLED"|"ENABLING"|"DELETING"|"ERROR"|"PAUSED"|"PAUSING", FileSystemId:string, Region:string, LastReplicatedTimestamp?:int|string|\DateTimeInterface, OwnerId?:string, StatusMessage?:string, RoleArn?:string}>, SourceFileSystemOwnerId?:string}>
     */
    public function createReplicationConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{SourceFileSystemId:string, Destinations:array<array{Region?:string, AvailabilityZoneName?:string, KmsKeyId?:string, FileSystemId?:string, RoleArn?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{SourceFileSystemId:string, SourceFileSystemRegion:string, SourceFileSystemArn:string, OriginalSourceFileSystemArn:string, CreationTime:int|string|\DateTimeInterface, Destinations:array<array{Status:"ENABLED"|"ENABLING"|"DELETING"|"ERROR"|"PAUSED"|"PAUSING", FileSystemId:string, Region:string, LastReplicatedTimestamp?:int|string|\DateTimeInterface, OwnerId?:string, StatusMessage?:string, RoleArn?:string}>, SourceFileSystemOwnerId?:string}>
     */
    public function createReplicationConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FileSystemId:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<void>
     */
    public function createTags(array $args): \AWS\Result { }

    /**
     * @param array{FileSystemId:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function createTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccessPointId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAccessPoint(array $args): \AWS\Result { }

    /**
     * @param array{AccessPointId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAccessPointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FileSystemId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteFileSystem(array $args): \AWS\Result { }

    /**
     * @param array{FileSystemId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteFileSystemAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FileSystemId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteFileSystemPolicy(array $args): \AWS\Result { }

    /**
     * @param array{FileSystemId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteFileSystemPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MountTargetId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteMountTarget(array $args): \AWS\Result { }

    /**
     * @param array{MountTargetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteMountTargetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SourceFileSystemId:string, DeletionMode?:"ALL_CONFIGURATIONS"|"LOCAL_CONFIGURATION_ONLY"} $args
     * @return \AWS\Result<void>
     */
    public function deleteReplicationConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{SourceFileSystemId:string, DeletionMode?:"ALL_CONFIGURATIONS"|"LOCAL_CONFIGURATION_ONLY"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteReplicationConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FileSystemId:string, TagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function deleteTags(array $args): \AWS\Result { }

    /**
     * @param array{FileSystemId:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, AccessPointId?:string, FileSystemId?:string} $args
     * @return \AWS\Result<array{AccessPoints?:array<array{ClientToken?:string, Name?:string, Tags?:array<array{Key:string, Value:string}>, AccessPointId?:string, AccessPointArn?:string, FileSystemId?:string, PosixUser?:array{Uid:int, Gid:int, SecondaryGids?:array<int>}, RootDirectory?:array{Path?:string, CreationInfo?:array{OwnerUid:int, OwnerGid:int, Permissions:string}}, OwnerId?:string, LifeCycleState?:"creating"|"available"|"updating"|"deleting"|"deleted"|"error"}>, NextToken?:string}>
     */
    public function describeAccessPoints(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, AccessPointId?:string, FileSystemId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccessPoints?:array<array{ClientToken?:string, Name?:string, Tags?:array<array{Key:string, Value:string}>, AccessPointId?:string, AccessPointArn?:string, FileSystemId?:string, PosixUser?:array{Uid:int, Gid:int, SecondaryGids?:array<int>}, RootDirectory?:array{Path?:string, CreationInfo?:array{OwnerUid:int, OwnerGid:int, Permissions:string}}, OwnerId?:string, LifeCycleState?:"creating"|"available"|"updating"|"deleting"|"deleted"|"error"}>, NextToken?:string}>
     */
    public function describeAccessPointsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ResourceIdPreference?:array{ResourceIdType?:"LONG_ID"|"SHORT_ID", Resources?:array<"FILE_SYSTEM"|"MOUNT_TARGET">}, NextToken?:string}>
     */
    public function describeAccountPreferences(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceIdPreference?:array{ResourceIdType?:"LONG_ID"|"SHORT_ID", Resources?:array<"FILE_SYSTEM"|"MOUNT_TARGET">}, NextToken?:string}>
     */
    public function describeAccountPreferencesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FileSystemId:string} $args
     * @return \AWS\Result<array{BackupPolicy?:array{Status:"ENABLED"|"ENABLING"|"DISABLED"|"DISABLING"}}>
     */
    public function describeBackupPolicy(array $args): \AWS\Result { }

    /**
     * @param array{FileSystemId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BackupPolicy?:array{Status:"ENABLED"|"ENABLING"|"DISABLED"|"DISABLING"}}>
     */
    public function describeBackupPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FileSystemId:string} $args
     * @return \AWS\Result<array{FileSystemId?:string, Policy?:string}>
     */
    public function describeFileSystemPolicy(array $args): \AWS\Result { }

    /**
     * @param array{FileSystemId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FileSystemId?:string, Policy?:string}>
     */
    public function describeFileSystemPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxItems?:int, Marker?:string, CreationToken?:string, FileSystemId?:string} $args
     * @return \AWS\Result<array{Marker?:string, FileSystems?:array<array{OwnerId:string, CreationToken:string, FileSystemId:string, FileSystemArn?:string, CreationTime:int|string|\DateTimeInterface, LifeCycleState:"creating"|"available"|"updating"|"deleting"|"deleted"|"error", Name?:string, NumberOfMountTargets:int, SizeInBytes:array{Value:int, Timestamp?:int|string|\DateTimeInterface, ValueInIA?:int, ValueInStandard?:int, ValueInArchive?:int}, PerformanceMode:"generalPurpose"|"maxIO", Encrypted?:bool, KmsKeyId?:string, ThroughputMode?:"bursting"|"provisioned"|"elastic", ProvisionedThroughputInMibps?:float, AvailabilityZoneName?:string, AvailabilityZoneId?:string, Tags:array<array{Key:string, Value:string}>, FileSystemProtection?:array{ReplicationOverwriteProtection?:"ENABLED"|"DISABLED"|"REPLICATING"}}>, NextMarker?:string}>
     */
    public function describeFileSystems(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxItems?:int, Marker?:string, CreationToken?:string, FileSystemId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, FileSystems?:array<array{OwnerId:string, CreationToken:string, FileSystemId:string, FileSystemArn?:string, CreationTime:int|string|\DateTimeInterface, LifeCycleState:"creating"|"available"|"updating"|"deleting"|"deleted"|"error", Name?:string, NumberOfMountTargets:int, SizeInBytes:array{Value:int, Timestamp?:int|string|\DateTimeInterface, ValueInIA?:int, ValueInStandard?:int, ValueInArchive?:int}, PerformanceMode:"generalPurpose"|"maxIO", Encrypted?:bool, KmsKeyId?:string, ThroughputMode?:"bursting"|"provisioned"|"elastic", ProvisionedThroughputInMibps?:float, AvailabilityZoneName?:string, AvailabilityZoneId?:string, Tags:array<array{Key:string, Value:string}>, FileSystemProtection?:array{ReplicationOverwriteProtection?:"ENABLED"|"DISABLED"|"REPLICATING"}}>, NextMarker?:string}>
     */
    public function describeFileSystemsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FileSystemId:string} $args
     * @return \AWS\Result<array{LifecyclePolicies?:array<array{TransitionToIA?:"AFTER_7_DAYS"|"AFTER_14_DAYS"|"AFTER_30_DAYS"|"AFTER_60_DAYS"|"AFTER_90_DAYS"|"AFTER_1_DAY"|"AFTER_180_DAYS"|"AFTER_270_DAYS"|"AFTER_365_DAYS", TransitionToPrimaryStorageClass?:"AFTER_1_ACCESS", TransitionToArchive?:"AFTER_1_DAY"|"AFTER_7_DAYS"|"AFTER_14_DAYS"|"AFTER_30_DAYS"|"AFTER_60_DAYS"|"AFTER_90_DAYS"|"AFTER_180_DAYS"|"AFTER_270_DAYS"|"AFTER_365_DAYS"}>}>
     */
    public function describeLifecycleConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{FileSystemId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LifecyclePolicies?:array<array{TransitionToIA?:"AFTER_7_DAYS"|"AFTER_14_DAYS"|"AFTER_30_DAYS"|"AFTER_60_DAYS"|"AFTER_90_DAYS"|"AFTER_1_DAY"|"AFTER_180_DAYS"|"AFTER_270_DAYS"|"AFTER_365_DAYS", TransitionToPrimaryStorageClass?:"AFTER_1_ACCESS", TransitionToArchive?:"AFTER_1_DAY"|"AFTER_7_DAYS"|"AFTER_14_DAYS"|"AFTER_30_DAYS"|"AFTER_60_DAYS"|"AFTER_90_DAYS"|"AFTER_180_DAYS"|"AFTER_270_DAYS"|"AFTER_365_DAYS"}>}>
     */
    public function describeLifecycleConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MountTargetId:string} $args
     * @return \AWS\Result<array{SecurityGroups:array<string>}>
     */
    public function describeMountTargetSecurityGroups(array $args): \AWS\Result { }

    /**
     * @param array{MountTargetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SecurityGroups:array<string>}>
     */
    public function describeMountTargetSecurityGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxItems?:int, Marker?:string, FileSystemId?:string, MountTargetId?:string, AccessPointId?:string} $args
     * @return \AWS\Result<array{Marker?:string, MountTargets?:array<array{OwnerId?:string, MountTargetId:string, FileSystemId:string, SubnetId:string, LifeCycleState:"creating"|"available"|"updating"|"deleting"|"deleted"|"error", IpAddress?:string, NetworkInterfaceId?:string, AvailabilityZoneId?:string, AvailabilityZoneName?:string, VpcId?:string}>, NextMarker?:string}>
     */
    public function describeMountTargets(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxItems?:int, Marker?:string, FileSystemId?:string, MountTargetId?:string, AccessPointId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, MountTargets?:array<array{OwnerId?:string, MountTargetId:string, FileSystemId:string, SubnetId:string, LifeCycleState:"creating"|"available"|"updating"|"deleting"|"deleted"|"error", IpAddress?:string, NetworkInterfaceId?:string, AvailabilityZoneId?:string, AvailabilityZoneName?:string, VpcId?:string}>, NextMarker?:string}>
     */
    public function describeMountTargetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FileSystemId?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Replications?:array<array{SourceFileSystemId:string, SourceFileSystemRegion:string, SourceFileSystemArn:string, OriginalSourceFileSystemArn:string, CreationTime:int|string|\DateTimeInterface, Destinations:array<array{Status:"ENABLED"|"ENABLING"|"DELETING"|"ERROR"|"PAUSED"|"PAUSING", FileSystemId:string, Region:string, LastReplicatedTimestamp?:int|string|\DateTimeInterface, OwnerId?:string, StatusMessage?:string, RoleArn?:string}>, SourceFileSystemOwnerId?:string}>, NextToken?:string}>
     */
    public function describeReplicationConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{FileSystemId?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Replications?:array<array{SourceFileSystemId:string, SourceFileSystemRegion:string, SourceFileSystemArn:string, OriginalSourceFileSystemArn:string, CreationTime:int|string|\DateTimeInterface, Destinations:array<array{Status:"ENABLED"|"ENABLING"|"DELETING"|"ERROR"|"PAUSED"|"PAUSING", FileSystemId:string, Region:string, LastReplicatedTimestamp?:int|string|\DateTimeInterface, OwnerId?:string, StatusMessage?:string, RoleArn?:string}>, SourceFileSystemOwnerId?:string}>, NextToken?:string}>
     */
    public function describeReplicationConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxItems?:int, Marker?:string, FileSystemId:string} $args
     * @return \AWS\Result<array{Marker?:string, Tags:array<array{Key:string, Value:string}>, NextMarker?:string}>
     */
    public function describeTags(array $args): \AWS\Result { }

    /**
     * @param array{MaxItems?:int, Marker?:string, FileSystemId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, Tags:array<array{Key:string, Value:string}>, NextMarker?:string}>
     */
    public function describeTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value:string}>, NextToken?:string}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value:string}>, NextToken?:string}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MountTargetId:string, SecurityGroups?:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function modifyMountTargetSecurityGroups(array $args): \AWS\Result { }

    /**
     * @param array{MountTargetId:string, SecurityGroups?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function modifyMountTargetSecurityGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceIdType:"LONG_ID"|"SHORT_ID"} $args
     * @return \AWS\Result<array{ResourceIdPreference?:array{ResourceIdType?:"LONG_ID"|"SHORT_ID", Resources?:array<"FILE_SYSTEM"|"MOUNT_TARGET">}}>
     */
    public function putAccountPreferences(array $args): \AWS\Result { }

    /**
     * @param array{ResourceIdType:"LONG_ID"|"SHORT_ID"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceIdPreference?:array{ResourceIdType?:"LONG_ID"|"SHORT_ID", Resources?:array<"FILE_SYSTEM"|"MOUNT_TARGET">}}>
     */
    public function putAccountPreferencesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FileSystemId:string, BackupPolicy:array{Status:"ENABLED"|"ENABLING"|"DISABLED"|"DISABLING"}} $args
     * @return \AWS\Result<array{BackupPolicy?:array{Status:"ENABLED"|"ENABLING"|"DISABLED"|"DISABLING"}}>
     */
    public function putBackupPolicy(array $args): \AWS\Result { }

    /**
     * @param array{FileSystemId:string, BackupPolicy:array{Status:"ENABLED"|"ENABLING"|"DISABLED"|"DISABLING"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{BackupPolicy?:array{Status:"ENABLED"|"ENABLING"|"DISABLED"|"DISABLING"}}>
     */
    public function putBackupPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FileSystemId:string, Policy:string, BypassPolicyLockoutSafetyCheck?:bool} $args
     * @return \AWS\Result<array{FileSystemId?:string, Policy?:string}>
     */
    public function putFileSystemPolicy(array $args): \AWS\Result { }

    /**
     * @param array{FileSystemId:string, Policy:string, BypassPolicyLockoutSafetyCheck?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{FileSystemId?:string, Policy?:string}>
     */
    public function putFileSystemPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FileSystemId:string, LifecyclePolicies:array<array{TransitionToIA?:"AFTER_7_DAYS"|"AFTER_14_DAYS"|"AFTER_30_DAYS"|"AFTER_60_DAYS"|"AFTER_90_DAYS"|"AFTER_1_DAY"|"AFTER_180_DAYS"|"AFTER_270_DAYS"|"AFTER_365_DAYS", TransitionToPrimaryStorageClass?:"AFTER_1_ACCESS", TransitionToArchive?:"AFTER_1_DAY"|"AFTER_7_DAYS"|"AFTER_14_DAYS"|"AFTER_30_DAYS"|"AFTER_60_DAYS"|"AFTER_90_DAYS"|"AFTER_180_DAYS"|"AFTER_270_DAYS"|"AFTER_365_DAYS"}>} $args
     * @return \AWS\Result<array{LifecyclePolicies?:array<array{TransitionToIA?:"AFTER_7_DAYS"|"AFTER_14_DAYS"|"AFTER_30_DAYS"|"AFTER_60_DAYS"|"AFTER_90_DAYS"|"AFTER_1_DAY"|"AFTER_180_DAYS"|"AFTER_270_DAYS"|"AFTER_365_DAYS", TransitionToPrimaryStorageClass?:"AFTER_1_ACCESS", TransitionToArchive?:"AFTER_1_DAY"|"AFTER_7_DAYS"|"AFTER_14_DAYS"|"AFTER_30_DAYS"|"AFTER_60_DAYS"|"AFTER_90_DAYS"|"AFTER_180_DAYS"|"AFTER_270_DAYS"|"AFTER_365_DAYS"}>}>
     */
    public function putLifecycleConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{FileSystemId:string, LifecyclePolicies:array<array{TransitionToIA?:"AFTER_7_DAYS"|"AFTER_14_DAYS"|"AFTER_30_DAYS"|"AFTER_60_DAYS"|"AFTER_90_DAYS"|"AFTER_1_DAY"|"AFTER_180_DAYS"|"AFTER_270_DAYS"|"AFTER_365_DAYS", TransitionToPrimaryStorageClass?:"AFTER_1_ACCESS", TransitionToArchive?:"AFTER_1_DAY"|"AFTER_7_DAYS"|"AFTER_14_DAYS"|"AFTER_30_DAYS"|"AFTER_60_DAYS"|"AFTER_90_DAYS"|"AFTER_180_DAYS"|"AFTER_270_DAYS"|"AFTER_365_DAYS"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{LifecyclePolicies?:array<array{TransitionToIA?:"AFTER_7_DAYS"|"AFTER_14_DAYS"|"AFTER_30_DAYS"|"AFTER_60_DAYS"|"AFTER_90_DAYS"|"AFTER_1_DAY"|"AFTER_180_DAYS"|"AFTER_270_DAYS"|"AFTER_365_DAYS", TransitionToPrimaryStorageClass?:"AFTER_1_ACCESS", TransitionToArchive?:"AFTER_1_DAY"|"AFTER_7_DAYS"|"AFTER_14_DAYS"|"AFTER_30_DAYS"|"AFTER_60_DAYS"|"AFTER_90_DAYS"|"AFTER_180_DAYS"|"AFTER_270_DAYS"|"AFTER_365_DAYS"}>}>
     */
    public function putLifecycleConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<void>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, TagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FileSystemId:string, ThroughputMode?:"bursting"|"provisioned"|"elastic", ProvisionedThroughputInMibps?:float} $args
     * @return \AWS\Result<array{OwnerId:string, CreationToken:string, FileSystemId:string, FileSystemArn?:string, CreationTime:int|string|\DateTimeInterface, LifeCycleState:"creating"|"available"|"updating"|"deleting"|"deleted"|"error", Name?:string, NumberOfMountTargets:int, SizeInBytes:array{Value:int, Timestamp?:int|string|\DateTimeInterface, ValueInIA?:int, ValueInStandard?:int, ValueInArchive?:int}, PerformanceMode:"generalPurpose"|"maxIO", Encrypted?:bool, KmsKeyId?:string, ThroughputMode?:"bursting"|"provisioned"|"elastic", ProvisionedThroughputInMibps?:float, AvailabilityZoneName?:string, AvailabilityZoneId?:string, Tags:array<array{Key:string, Value:string}>, FileSystemProtection?:array{ReplicationOverwriteProtection?:"ENABLED"|"DISABLED"|"REPLICATING"}}>
     */
    public function updateFileSystem(array $args): \AWS\Result { }

    /**
     * @param array{FileSystemId:string, ThroughputMode?:"bursting"|"provisioned"|"elastic", ProvisionedThroughputInMibps?:float} $args
     * @return \GuzzleHttp\Promise\Promise<array{OwnerId:string, CreationToken:string, FileSystemId:string, FileSystemArn?:string, CreationTime:int|string|\DateTimeInterface, LifeCycleState:"creating"|"available"|"updating"|"deleting"|"deleted"|"error", Name?:string, NumberOfMountTargets:int, SizeInBytes:array{Value:int, Timestamp?:int|string|\DateTimeInterface, ValueInIA?:int, ValueInStandard?:int, ValueInArchive?:int}, PerformanceMode:"generalPurpose"|"maxIO", Encrypted?:bool, KmsKeyId?:string, ThroughputMode?:"bursting"|"provisioned"|"elastic", ProvisionedThroughputInMibps?:float, AvailabilityZoneName?:string, AvailabilityZoneId?:string, Tags:array<array{Key:string, Value:string}>, FileSystemProtection?:array{ReplicationOverwriteProtection?:"ENABLED"|"DISABLED"|"REPLICATING"}}>
     */
    public function updateFileSystemAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FileSystemId:string, ReplicationOverwriteProtection?:"ENABLED"|"DISABLED"|"REPLICATING"} $args
     * @return \AWS\Result<array{ReplicationOverwriteProtection?:"ENABLED"|"DISABLED"|"REPLICATING"}>
     */
    public function updateFileSystemProtection(array $args): \AWS\Result { }

    /**
     * @param array{FileSystemId:string, ReplicationOverwriteProtection?:"ENABLED"|"DISABLED"|"REPLICATING"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReplicationOverwriteProtection?:"ENABLED"|"DISABLED"|"REPLICATING"}>
     */
    public function updateFileSystemProtectionAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
