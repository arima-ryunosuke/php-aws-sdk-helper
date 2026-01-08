<?php
namespace AWS\CloudHSMV2;

class CloudHSMV2Client
{
    /**
     * @param array{DestinationRegion:string, BackupId:string, TagList?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{DestinationBackup?:array{CreateTimestamp?:int|string|\DateTimeInterface, SourceRegion?:string, SourceBackup?:string, SourceCluster?:string}}>
     */
    public function copyBackupToRegion(array $args): \AWS\Result { }

    /**
     * @param array{DestinationRegion:string, BackupId:string, TagList?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DestinationBackup?:array{CreateTimestamp?:int|string|\DateTimeInterface, SourceRegion?:string, SourceBackup?:string, SourceCluster?:string}}>
     */
    public function copyBackupToRegionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupRetentionPolicy?:array{Type?:"DAYS", Value?:string}, HsmType:string, SourceBackupId?:string, SubnetIds:array<string>, NetworkType?:"IPV4"|"DUALSTACK", TagList?:array<array{Key:string, Value:string}>, Mode?:"FIPS"|"NON_FIPS"} $args
     * @return \AWS\Result<array{Cluster?:array{BackupPolicy?:"DEFAULT", BackupRetentionPolicy?:array{Type?:"DAYS", Value?:string}, ClusterId?:string, CreateTimestamp?:int|string|\DateTimeInterface, Hsms?:array<array{AvailabilityZone?:string, ClusterId?:string, SubnetId?:string, EniId?:string, EniIp?:string, EniIpV6?:string, HsmId:string, HsmType?:string, State?:"CREATE_IN_PROGRESS"|"ACTIVE"|"DEGRADED"|"DELETE_IN_PROGRESS"|"DELETED", StateMessage?:string}>, HsmType?:string, HsmTypeRollbackExpiration?:int|string|\DateTimeInterface, PreCoPassword?:string, SecurityGroup?:string, SourceBackupId?:string, State?:"CREATE_IN_PROGRESS"|"UNINITIALIZED"|"INITIALIZE_IN_PROGRESS"|"INITIALIZED"|"ACTIVE"|"UPDATE_IN_PROGRESS"|"MODIFY_IN_PROGRESS"|"ROLLBACK_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"DELETED"|"DEGRADED", StateMessage?:string, SubnetMapping?:array<string, string>, VpcId?:string, NetworkType?:"IPV4"|"DUALSTACK", Certificates?:array{ClusterCsr?:string, HsmCertificate?:string, AwsHardwareCertificate?:string, ManufacturerHardwareCertificate?:string, ClusterCertificate?:string}, TagList?:array<array{Key:string, Value:string}>, Mode?:"FIPS"|"NON_FIPS"}}>
     */
    public function createCluster(array $args): \AWS\Result { }

    /**
     * @param array{BackupRetentionPolicy?:array{Type?:"DAYS", Value?:string}, HsmType:string, SourceBackupId?:string, SubnetIds:array<string>, NetworkType?:"IPV4"|"DUALSTACK", TagList?:array<array{Key:string, Value:string}>, Mode?:"FIPS"|"NON_FIPS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cluster?:array{BackupPolicy?:"DEFAULT", BackupRetentionPolicy?:array{Type?:"DAYS", Value?:string}, ClusterId?:string, CreateTimestamp?:int|string|\DateTimeInterface, Hsms?:array<array{AvailabilityZone?:string, ClusterId?:string, SubnetId?:string, EniId?:string, EniIp?:string, EniIpV6?:string, HsmId:string, HsmType?:string, State?:"CREATE_IN_PROGRESS"|"ACTIVE"|"DEGRADED"|"DELETE_IN_PROGRESS"|"DELETED", StateMessage?:string}>, HsmType?:string, HsmTypeRollbackExpiration?:int|string|\DateTimeInterface, PreCoPassword?:string, SecurityGroup?:string, SourceBackupId?:string, State?:"CREATE_IN_PROGRESS"|"UNINITIALIZED"|"INITIALIZE_IN_PROGRESS"|"INITIALIZED"|"ACTIVE"|"UPDATE_IN_PROGRESS"|"MODIFY_IN_PROGRESS"|"ROLLBACK_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"DELETED"|"DEGRADED", StateMessage?:string, SubnetMapping?:array<string, string>, VpcId?:string, NetworkType?:"IPV4"|"DUALSTACK", Certificates?:array{ClusterCsr?:string, HsmCertificate?:string, AwsHardwareCertificate?:string, ManufacturerHardwareCertificate?:string, ClusterCertificate?:string}, TagList?:array<array{Key:string, Value:string}>, Mode?:"FIPS"|"NON_FIPS"}}>
     */
    public function createClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterId:string, AvailabilityZone:string, IpAddress?:string} $args
     * @return \AWS\Result<array{Hsm?:array{AvailabilityZone?:string, ClusterId?:string, SubnetId?:string, EniId?:string, EniIp?:string, EniIpV6?:string, HsmId:string, HsmType?:string, State?:"CREATE_IN_PROGRESS"|"ACTIVE"|"DEGRADED"|"DELETE_IN_PROGRESS"|"DELETED", StateMessage?:string}}>
     */
    public function createHsm(array $args): \AWS\Result { }

    /**
     * @param array{ClusterId:string, AvailabilityZone:string, IpAddress?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Hsm?:array{AvailabilityZone?:string, ClusterId?:string, SubnetId?:string, EniId?:string, EniIp?:string, EniIpV6?:string, HsmId:string, HsmType?:string, State?:"CREATE_IN_PROGRESS"|"ACTIVE"|"DEGRADED"|"DELETE_IN_PROGRESS"|"DELETED", StateMessage?:string}}>
     */
    public function createHsmAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupId:string} $args
     * @return \AWS\Result<array{Backup?:array{BackupId:string, BackupArn?:string, BackupState?:"CREATE_IN_PROGRESS"|"READY"|"DELETED"|"PENDING_DELETION", ClusterId?:string, CreateTimestamp?:int|string|\DateTimeInterface, CopyTimestamp?:int|string|\DateTimeInterface, NeverExpires?:bool, SourceRegion?:string, SourceBackup?:string, SourceCluster?:string, DeleteTimestamp?:int|string|\DateTimeInterface, TagList?:array<array{Key:string, Value:string}>, HsmType?:string, Mode?:"FIPS"|"NON_FIPS"}}>
     */
    public function deleteBackup(array $args): \AWS\Result { }

    /**
     * @param array{BackupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Backup?:array{BackupId:string, BackupArn?:string, BackupState?:"CREATE_IN_PROGRESS"|"READY"|"DELETED"|"PENDING_DELETION", ClusterId?:string, CreateTimestamp?:int|string|\DateTimeInterface, CopyTimestamp?:int|string|\DateTimeInterface, NeverExpires?:bool, SourceRegion?:string, SourceBackup?:string, SourceCluster?:string, DeleteTimestamp?:int|string|\DateTimeInterface, TagList?:array<array{Key:string, Value:string}>, HsmType?:string, Mode?:"FIPS"|"NON_FIPS"}}>
     */
    public function deleteBackupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterId:string} $args
     * @return \AWS\Result<array{Cluster?:array{BackupPolicy?:"DEFAULT", BackupRetentionPolicy?:array{Type?:"DAYS", Value?:string}, ClusterId?:string, CreateTimestamp?:int|string|\DateTimeInterface, Hsms?:array<array{AvailabilityZone?:string, ClusterId?:string, SubnetId?:string, EniId?:string, EniIp?:string, EniIpV6?:string, HsmId:string, HsmType?:string, State?:"CREATE_IN_PROGRESS"|"ACTIVE"|"DEGRADED"|"DELETE_IN_PROGRESS"|"DELETED", StateMessage?:string}>, HsmType?:string, HsmTypeRollbackExpiration?:int|string|\DateTimeInterface, PreCoPassword?:string, SecurityGroup?:string, SourceBackupId?:string, State?:"CREATE_IN_PROGRESS"|"UNINITIALIZED"|"INITIALIZE_IN_PROGRESS"|"INITIALIZED"|"ACTIVE"|"UPDATE_IN_PROGRESS"|"MODIFY_IN_PROGRESS"|"ROLLBACK_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"DELETED"|"DEGRADED", StateMessage?:string, SubnetMapping?:array<string, string>, VpcId?:string, NetworkType?:"IPV4"|"DUALSTACK", Certificates?:array{ClusterCsr?:string, HsmCertificate?:string, AwsHardwareCertificate?:string, ManufacturerHardwareCertificate?:string, ClusterCertificate?:string}, TagList?:array<array{Key:string, Value:string}>, Mode?:"FIPS"|"NON_FIPS"}}>
     */
    public function deleteCluster(array $args): \AWS\Result { }

    /**
     * @param array{ClusterId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cluster?:array{BackupPolicy?:"DEFAULT", BackupRetentionPolicy?:array{Type?:"DAYS", Value?:string}, ClusterId?:string, CreateTimestamp?:int|string|\DateTimeInterface, Hsms?:array<array{AvailabilityZone?:string, ClusterId?:string, SubnetId?:string, EniId?:string, EniIp?:string, EniIpV6?:string, HsmId:string, HsmType?:string, State?:"CREATE_IN_PROGRESS"|"ACTIVE"|"DEGRADED"|"DELETE_IN_PROGRESS"|"DELETED", StateMessage?:string}>, HsmType?:string, HsmTypeRollbackExpiration?:int|string|\DateTimeInterface, PreCoPassword?:string, SecurityGroup?:string, SourceBackupId?:string, State?:"CREATE_IN_PROGRESS"|"UNINITIALIZED"|"INITIALIZE_IN_PROGRESS"|"INITIALIZED"|"ACTIVE"|"UPDATE_IN_PROGRESS"|"MODIFY_IN_PROGRESS"|"ROLLBACK_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"DELETED"|"DEGRADED", StateMessage?:string, SubnetMapping?:array<string, string>, VpcId?:string, NetworkType?:"IPV4"|"DUALSTACK", Certificates?:array{ClusterCsr?:string, HsmCertificate?:string, AwsHardwareCertificate?:string, ManufacturerHardwareCertificate?:string, ClusterCertificate?:string}, TagList?:array<array{Key:string, Value:string}>, Mode?:"FIPS"|"NON_FIPS"}}>
     */
    public function deleteClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterId:string, HsmId?:string, EniId?:string, EniIp?:string} $args
     * @return \AWS\Result<array{HsmId?:string}>
     */
    public function deleteHsm(array $args): \AWS\Result { }

    /**
     * @param array{ClusterId:string, HsmId?:string, EniId?:string, EniIp?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{HsmId?:string}>
     */
    public function deleteHsmAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn?:string} $args
     * @return \AWS\Result<array{ResourceArn?:string, Policy?:string}>
     */
    public function deleteResourcePolicy(array $args = []): \AWS\Result { }

    /**
     * @param array{ResourceArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceArn?:string, Policy?:string}>
     */
    public function deleteResourcePolicyAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Filters?:array<string, array<string>>, Shared?:bool, SortAscending?:bool} $args
     * @return \AWS\Result<array{Backups?:array<array{BackupId:string, BackupArn?:string, BackupState?:"CREATE_IN_PROGRESS"|"READY"|"DELETED"|"PENDING_DELETION", ClusterId?:string, CreateTimestamp?:int|string|\DateTimeInterface, CopyTimestamp?:int|string|\DateTimeInterface, NeverExpires?:bool, SourceRegion?:string, SourceBackup?:string, SourceCluster?:string, DeleteTimestamp?:int|string|\DateTimeInterface, TagList?:array<array{Key:string, Value:string}>, HsmType?:string, Mode?:"FIPS"|"NON_FIPS"}>, NextToken?:string}>
     */
    public function describeBackups(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Filters?:array<string, array<string>>, Shared?:bool, SortAscending?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Backups?:array<array{BackupId:string, BackupArn?:string, BackupState?:"CREATE_IN_PROGRESS"|"READY"|"DELETED"|"PENDING_DELETION", ClusterId?:string, CreateTimestamp?:int|string|\DateTimeInterface, CopyTimestamp?:int|string|\DateTimeInterface, NeverExpires?:bool, SourceRegion?:string, SourceBackup?:string, SourceCluster?:string, DeleteTimestamp?:int|string|\DateTimeInterface, TagList?:array<array{Key:string, Value:string}>, HsmType?:string, Mode?:"FIPS"|"NON_FIPS"}>, NextToken?:string}>
     */
    public function describeBackupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array<string, array<string>>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Clusters?:array<array{BackupPolicy?:"DEFAULT", BackupRetentionPolicy?:array{Type?:"DAYS", Value?:string}, ClusterId?:string, CreateTimestamp?:int|string|\DateTimeInterface, Hsms?:array<array{AvailabilityZone?:string, ClusterId?:string, SubnetId?:string, EniId?:string, EniIp?:string, EniIpV6?:string, HsmId:string, HsmType?:string, State?:"CREATE_IN_PROGRESS"|"ACTIVE"|"DEGRADED"|"DELETE_IN_PROGRESS"|"DELETED", StateMessage?:string}>, HsmType?:string, HsmTypeRollbackExpiration?:int|string|\DateTimeInterface, PreCoPassword?:string, SecurityGroup?:string, SourceBackupId?:string, State?:"CREATE_IN_PROGRESS"|"UNINITIALIZED"|"INITIALIZE_IN_PROGRESS"|"INITIALIZED"|"ACTIVE"|"UPDATE_IN_PROGRESS"|"MODIFY_IN_PROGRESS"|"ROLLBACK_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"DELETED"|"DEGRADED", StateMessage?:string, SubnetMapping?:array<string, string>, VpcId?:string, NetworkType?:"IPV4"|"DUALSTACK", Certificates?:array{ClusterCsr?:string, HsmCertificate?:string, AwsHardwareCertificate?:string, ManufacturerHardwareCertificate?:string, ClusterCertificate?:string}, TagList?:array<array{Key:string, Value:string}>, Mode?:"FIPS"|"NON_FIPS"}>, NextToken?:string}>
     */
    public function describeClusters(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array<string, array<string>>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Clusters?:array<array{BackupPolicy?:"DEFAULT", BackupRetentionPolicy?:array{Type?:"DAYS", Value?:string}, ClusterId?:string, CreateTimestamp?:int|string|\DateTimeInterface, Hsms?:array<array{AvailabilityZone?:string, ClusterId?:string, SubnetId?:string, EniId?:string, EniIp?:string, EniIpV6?:string, HsmId:string, HsmType?:string, State?:"CREATE_IN_PROGRESS"|"ACTIVE"|"DEGRADED"|"DELETE_IN_PROGRESS"|"DELETED", StateMessage?:string}>, HsmType?:string, HsmTypeRollbackExpiration?:int|string|\DateTimeInterface, PreCoPassword?:string, SecurityGroup?:string, SourceBackupId?:string, State?:"CREATE_IN_PROGRESS"|"UNINITIALIZED"|"INITIALIZE_IN_PROGRESS"|"INITIALIZED"|"ACTIVE"|"UPDATE_IN_PROGRESS"|"MODIFY_IN_PROGRESS"|"ROLLBACK_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"DELETED"|"DEGRADED", StateMessage?:string, SubnetMapping?:array<string, string>, VpcId?:string, NetworkType?:"IPV4"|"DUALSTACK", Certificates?:array{ClusterCsr?:string, HsmCertificate?:string, AwsHardwareCertificate?:string, ManufacturerHardwareCertificate?:string, ClusterCertificate?:string}, TagList?:array<array{Key:string, Value:string}>, Mode?:"FIPS"|"NON_FIPS"}>, NextToken?:string}>
     */
    public function describeClustersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn?:string} $args
     * @return \AWS\Result<array{Policy?:string}>
     */
    public function getResourcePolicy(array $args = []): \AWS\Result { }

    /**
     * @param array{ResourceArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:string}>
     */
    public function getResourcePolicyAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterId:string, SignedCert:string, TrustAnchor:string} $args
     * @return \AWS\Result<array{State?:"CREATE_IN_PROGRESS"|"UNINITIALIZED"|"INITIALIZE_IN_PROGRESS"|"INITIALIZED"|"ACTIVE"|"UPDATE_IN_PROGRESS"|"MODIFY_IN_PROGRESS"|"ROLLBACK_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"DELETED"|"DEGRADED", StateMessage?:string}>
     */
    public function initializeCluster(array $args): \AWS\Result { }

    /**
     * @param array{ClusterId:string, SignedCert:string, TrustAnchor:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{State?:"CREATE_IN_PROGRESS"|"UNINITIALIZED"|"INITIALIZE_IN_PROGRESS"|"INITIALIZED"|"ACTIVE"|"UPDATE_IN_PROGRESS"|"MODIFY_IN_PROGRESS"|"ROLLBACK_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"DELETED"|"DEGRADED", StateMessage?:string}>
     */
    public function initializeClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{TagList:array<array{Key:string, Value:string}>, NextToken?:string}>
     */
    public function listTags(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{TagList:array<array{Key:string, Value:string}>, NextToken?:string}>
     */
    public function listTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupId:string, NeverExpires:bool} $args
     * @return \AWS\Result<array{Backup?:array{BackupId:string, BackupArn?:string, BackupState?:"CREATE_IN_PROGRESS"|"READY"|"DELETED"|"PENDING_DELETION", ClusterId?:string, CreateTimestamp?:int|string|\DateTimeInterface, CopyTimestamp?:int|string|\DateTimeInterface, NeverExpires?:bool, SourceRegion?:string, SourceBackup?:string, SourceCluster?:string, DeleteTimestamp?:int|string|\DateTimeInterface, TagList?:array<array{Key:string, Value:string}>, HsmType?:string, Mode?:"FIPS"|"NON_FIPS"}}>
     */
    public function modifyBackupAttributes(array $args): \AWS\Result { }

    /**
     * @param array{BackupId:string, NeverExpires:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Backup?:array{BackupId:string, BackupArn?:string, BackupState?:"CREATE_IN_PROGRESS"|"READY"|"DELETED"|"PENDING_DELETION", ClusterId?:string, CreateTimestamp?:int|string|\DateTimeInterface, CopyTimestamp?:int|string|\DateTimeInterface, NeverExpires?:bool, SourceRegion?:string, SourceBackup?:string, SourceCluster?:string, DeleteTimestamp?:int|string|\DateTimeInterface, TagList?:array<array{Key:string, Value:string}>, HsmType?:string, Mode?:"FIPS"|"NON_FIPS"}}>
     */
    public function modifyBackupAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HsmType?:string, BackupRetentionPolicy?:array{Type?:"DAYS", Value?:string}, ClusterId:string} $args
     * @return \AWS\Result<array{Cluster?:array{BackupPolicy?:"DEFAULT", BackupRetentionPolicy?:array{Type?:"DAYS", Value?:string}, ClusterId?:string, CreateTimestamp?:int|string|\DateTimeInterface, Hsms?:array<array{AvailabilityZone?:string, ClusterId?:string, SubnetId?:string, EniId?:string, EniIp?:string, EniIpV6?:string, HsmId:string, HsmType?:string, State?:"CREATE_IN_PROGRESS"|"ACTIVE"|"DEGRADED"|"DELETE_IN_PROGRESS"|"DELETED", StateMessage?:string}>, HsmType?:string, HsmTypeRollbackExpiration?:int|string|\DateTimeInterface, PreCoPassword?:string, SecurityGroup?:string, SourceBackupId?:string, State?:"CREATE_IN_PROGRESS"|"UNINITIALIZED"|"INITIALIZE_IN_PROGRESS"|"INITIALIZED"|"ACTIVE"|"UPDATE_IN_PROGRESS"|"MODIFY_IN_PROGRESS"|"ROLLBACK_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"DELETED"|"DEGRADED", StateMessage?:string, SubnetMapping?:array<string, string>, VpcId?:string, NetworkType?:"IPV4"|"DUALSTACK", Certificates?:array{ClusterCsr?:string, HsmCertificate?:string, AwsHardwareCertificate?:string, ManufacturerHardwareCertificate?:string, ClusterCertificate?:string}, TagList?:array<array{Key:string, Value:string}>, Mode?:"FIPS"|"NON_FIPS"}}>
     */
    public function modifyCluster(array $args): \AWS\Result { }

    /**
     * @param array{HsmType?:string, BackupRetentionPolicy?:array{Type?:"DAYS", Value?:string}, ClusterId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cluster?:array{BackupPolicy?:"DEFAULT", BackupRetentionPolicy?:array{Type?:"DAYS", Value?:string}, ClusterId?:string, CreateTimestamp?:int|string|\DateTimeInterface, Hsms?:array<array{AvailabilityZone?:string, ClusterId?:string, SubnetId?:string, EniId?:string, EniIp?:string, EniIpV6?:string, HsmId:string, HsmType?:string, State?:"CREATE_IN_PROGRESS"|"ACTIVE"|"DEGRADED"|"DELETE_IN_PROGRESS"|"DELETED", StateMessage?:string}>, HsmType?:string, HsmTypeRollbackExpiration?:int|string|\DateTimeInterface, PreCoPassword?:string, SecurityGroup?:string, SourceBackupId?:string, State?:"CREATE_IN_PROGRESS"|"UNINITIALIZED"|"INITIALIZE_IN_PROGRESS"|"INITIALIZED"|"ACTIVE"|"UPDATE_IN_PROGRESS"|"MODIFY_IN_PROGRESS"|"ROLLBACK_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"DELETED"|"DEGRADED", StateMessage?:string, SubnetMapping?:array<string, string>, VpcId?:string, NetworkType?:"IPV4"|"DUALSTACK", Certificates?:array{ClusterCsr?:string, HsmCertificate?:string, AwsHardwareCertificate?:string, ManufacturerHardwareCertificate?:string, ClusterCertificate?:string}, TagList?:array<array{Key:string, Value:string}>, Mode?:"FIPS"|"NON_FIPS"}}>
     */
    public function modifyClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn?:string, Policy?:string} $args
     * @return \AWS\Result<array{ResourceArn?:string, Policy?:string}>
     */
    public function putResourcePolicy(array $args = []): \AWS\Result { }

    /**
     * @param array{ResourceArn?:string, Policy?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceArn?:string, Policy?:string}>
     */
    public function putResourcePolicyAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupId:string} $args
     * @return \AWS\Result<array{Backup?:array{BackupId:string, BackupArn?:string, BackupState?:"CREATE_IN_PROGRESS"|"READY"|"DELETED"|"PENDING_DELETION", ClusterId?:string, CreateTimestamp?:int|string|\DateTimeInterface, CopyTimestamp?:int|string|\DateTimeInterface, NeverExpires?:bool, SourceRegion?:string, SourceBackup?:string, SourceCluster?:string, DeleteTimestamp?:int|string|\DateTimeInterface, TagList?:array<array{Key:string, Value:string}>, HsmType?:string, Mode?:"FIPS"|"NON_FIPS"}}>
     */
    public function restoreBackup(array $args): \AWS\Result { }

    /**
     * @param array{BackupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Backup?:array{BackupId:string, BackupArn?:string, BackupState?:"CREATE_IN_PROGRESS"|"READY"|"DELETED"|"PENDING_DELETION", ClusterId?:string, CreateTimestamp?:int|string|\DateTimeInterface, CopyTimestamp?:int|string|\DateTimeInterface, NeverExpires?:bool, SourceRegion?:string, SourceBackup?:string, SourceCluster?:string, DeleteTimestamp?:int|string|\DateTimeInterface, TagList?:array<array{Key:string, Value:string}>, HsmType?:string, Mode?:"FIPS"|"NON_FIPS"}}>
     */
    public function restoreBackupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, TagList:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, TagList:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, TagKeyList:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, TagKeyList:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
