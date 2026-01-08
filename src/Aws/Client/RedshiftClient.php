<?php
namespace AWS\Redshift;

class RedshiftClient
{
    /**
     * @param array{ReservedNodeId:string, TargetReservedNodeOfferingId:string} $args
     * @return \AWS\Result<array{ExchangedReservedNode?:array{ReservedNodeId?:string, ReservedNodeOfferingId?:string, NodeType?:string, StartTime?:int|string|\DateTimeInterface, Duration?:int, FixedPrice?:float, UsagePrice?:float, CurrencyCode?:string, NodeCount?:int, State?:string, OfferingType?:string, RecurringCharges?:array<array{RecurringChargeAmount?:float, RecurringChargeFrequency?:string}>, ReservedNodeOfferingType?:"Regular"|"Upgradable"}}>
     */
    public function acceptReservedNodeExchange(array $args): \AWS\Result { }

    /**
     * @param array{ReservedNodeId:string, TargetReservedNodeOfferingId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ExchangedReservedNode?:array{ReservedNodeId?:string, ReservedNodeOfferingId?:string, NodeType?:string, StartTime?:int|string|\DateTimeInterface, Duration?:int, FixedPrice?:float, UsagePrice?:float, CurrencyCode?:string, NodeCount?:int, State?:string, OfferingType?:string, RecurringCharges?:array<array{RecurringChargeAmount?:float, RecurringChargeFrequency?:string}>, ReservedNodeOfferingType?:"Regular"|"Upgradable"}}>
     */
    public function acceptReservedNodeExchangeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, ClusterIdentifier:string, DatabaseName:string, PartnerName:string} $args
     * @return \AWS\Result<array{DatabaseName?:string, PartnerName?:string}>
     */
    public function addPartner(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, ClusterIdentifier:string, DatabaseName:string, PartnerName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DatabaseName?:string, PartnerName?:string}>
     */
    public function addPartnerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DataShareArn:string, AssociateEntireAccount?:bool, ConsumerArn?:string, ConsumerRegion?:string, AllowWrites?:bool} $args
     * @return \AWS\Result<array{DataShareArn?:string, ProducerArn?:string, AllowPubliclyAccessibleConsumers?:bool, DataShareAssociations?:array<array{ConsumerIdentifier?:string, Status?:"ACTIVE"|"PENDING_AUTHORIZATION"|"AUTHORIZED"|"DEAUTHORIZED"|"REJECTED"|"AVAILABLE", ConsumerRegion?:string, CreatedDate?:int|string|\DateTimeInterface, StatusChangeDate?:int|string|\DateTimeInterface, ProducerAllowedWrites?:bool, ConsumerAcceptedWrites?:bool}>, ManagedBy?:string, DataShareType?:"INTERNAL"}>
     */
    public function associateDataShareConsumer(array $args): \AWS\Result { }

    /**
     * @param array{DataShareArn:string, AssociateEntireAccount?:bool, ConsumerArn?:string, ConsumerRegion?:string, AllowWrites?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{DataShareArn?:string, ProducerArn?:string, AllowPubliclyAccessibleConsumers?:bool, DataShareAssociations?:array<array{ConsumerIdentifier?:string, Status?:"ACTIVE"|"PENDING_AUTHORIZATION"|"AUTHORIZED"|"DEAUTHORIZED"|"REJECTED"|"AVAILABLE", ConsumerRegion?:string, CreatedDate?:int|string|\DateTimeInterface, StatusChangeDate?:int|string|\DateTimeInterface, ProducerAllowedWrites?:bool, ConsumerAcceptedWrites?:bool}>, ManagedBy?:string, DataShareType?:"INTERNAL"}>
     */
    public function associateDataShareConsumerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterSecurityGroupName:string, CIDRIP?:string, EC2SecurityGroupName?:string, EC2SecurityGroupOwnerId?:string} $args
     * @return \AWS\Result<array{ClusterSecurityGroup?:array{ClusterSecurityGroupName?:string, Description?:string, EC2SecurityGroups?:array<array{Status?:string, EC2SecurityGroupName?:string, EC2SecurityGroupOwnerId?:string, Tags?:array<array{Key?:string, Value?:string}>}>, IPRanges?:array<array{Status?:string, CIDRIP?:string, Tags?:array<array{Key?:string, Value?:string}>}>, Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function authorizeClusterSecurityGroupIngress(array $args): \AWS\Result { }

    /**
     * @param array{ClusterSecurityGroupName:string, CIDRIP?:string, EC2SecurityGroupName?:string, EC2SecurityGroupOwnerId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterSecurityGroup?:array{ClusterSecurityGroupName?:string, Description?:string, EC2SecurityGroups?:array<array{Status?:string, EC2SecurityGroupName?:string, EC2SecurityGroupOwnerId?:string, Tags?:array<array{Key?:string, Value?:string}>}>, IPRanges?:array<array{Status?:string, CIDRIP?:string, Tags?:array<array{Key?:string, Value?:string}>}>, Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function authorizeClusterSecurityGroupIngressAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DataShareArn:string, ConsumerIdentifier:string, AllowWrites?:bool} $args
     * @return \AWS\Result<array{DataShareArn?:string, ProducerArn?:string, AllowPubliclyAccessibleConsumers?:bool, DataShareAssociations?:array<array{ConsumerIdentifier?:string, Status?:"ACTIVE"|"PENDING_AUTHORIZATION"|"AUTHORIZED"|"DEAUTHORIZED"|"REJECTED"|"AVAILABLE", ConsumerRegion?:string, CreatedDate?:int|string|\DateTimeInterface, StatusChangeDate?:int|string|\DateTimeInterface, ProducerAllowedWrites?:bool, ConsumerAcceptedWrites?:bool}>, ManagedBy?:string, DataShareType?:"INTERNAL"}>
     */
    public function authorizeDataShare(array $args): \AWS\Result { }

    /**
     * @param array{DataShareArn:string, ConsumerIdentifier:string, AllowWrites?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{DataShareArn?:string, ProducerArn?:string, AllowPubliclyAccessibleConsumers?:bool, DataShareAssociations?:array<array{ConsumerIdentifier?:string, Status?:"ACTIVE"|"PENDING_AUTHORIZATION"|"AUTHORIZED"|"DEAUTHORIZED"|"REJECTED"|"AVAILABLE", ConsumerRegion?:string, CreatedDate?:int|string|\DateTimeInterface, StatusChangeDate?:int|string|\DateTimeInterface, ProducerAllowedWrites?:bool, ConsumerAcceptedWrites?:bool}>, ManagedBy?:string, DataShareType?:"INTERNAL"}>
     */
    public function authorizeDataShareAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier?:string, Account:string, VpcIds?:array<string>} $args
     * @return \AWS\Result<array{Grantor?:string, Grantee?:string, ClusterIdentifier?:string, AuthorizeTime?:int|string|\DateTimeInterface, ClusterStatus?:string, Status?:"Authorized"|"Revoking", AllowedAllVPCs?:bool, AllowedVPCs?:array<string>, EndpointCount?:int}>
     */
    public function authorizeEndpointAccess(array $args): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier?:string, Account:string, VpcIds?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Grantor?:string, Grantee?:string, ClusterIdentifier?:string, AuthorizeTime?:int|string|\DateTimeInterface, ClusterStatus?:string, Status?:"Authorized"|"Revoking", AllowedAllVPCs?:bool, AllowedVPCs?:array<string>, EndpointCount?:int}>
     */
    public function authorizeEndpointAccessAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SnapshotIdentifier?:string, SnapshotArn?:string, SnapshotClusterIdentifier?:string, AccountWithRestoreAccess:string} $args
     * @return \AWS\Result<array{Snapshot?:array{SnapshotIdentifier?:string, ClusterIdentifier?:string, SnapshotCreateTime?:int|string|\DateTimeInterface, Status?:string, Port?:int, AvailabilityZone?:string, ClusterCreateTime?:int|string|\DateTimeInterface, MasterUsername?:string, ClusterVersion?:string, EngineFullVersion?:string, SnapshotType?:string, NodeType?:string, NumberOfNodes?:int, DBName?:string, VpcId?:string, Encrypted?:bool, KmsKeyId?:string, EncryptedWithHSM?:bool, AccountsWithRestoreAccess?:array<array{AccountId?:string, AccountAlias?:string}>, OwnerAccount?:string, TotalBackupSizeInMegaBytes?:float, ActualIncrementalBackupSizeInMegaBytes?:float, BackupProgressInMegaBytes?:float, CurrentBackupRateInMegaBytesPerSecond?:float, EstimatedSecondsToCompletion?:int, ElapsedTimeInSeconds?:int, SourceRegion?:string, Tags?:array<array{Key?:string, Value?:string}>, RestorableNodeTypes?:array<string>, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, ManualSnapshotRetentionPeriod?:int, ManualSnapshotRemainingDays?:int, SnapshotRetentionStartTime?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, SnapshotArn?:string}}>
     */
    public function authorizeSnapshotAccess(array $args): \AWS\Result { }

    /**
     * @param array{SnapshotIdentifier?:string, SnapshotArn?:string, SnapshotClusterIdentifier?:string, AccountWithRestoreAccess:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Snapshot?:array{SnapshotIdentifier?:string, ClusterIdentifier?:string, SnapshotCreateTime?:int|string|\DateTimeInterface, Status?:string, Port?:int, AvailabilityZone?:string, ClusterCreateTime?:int|string|\DateTimeInterface, MasterUsername?:string, ClusterVersion?:string, EngineFullVersion?:string, SnapshotType?:string, NodeType?:string, NumberOfNodes?:int, DBName?:string, VpcId?:string, Encrypted?:bool, KmsKeyId?:string, EncryptedWithHSM?:bool, AccountsWithRestoreAccess?:array<array{AccountId?:string, AccountAlias?:string}>, OwnerAccount?:string, TotalBackupSizeInMegaBytes?:float, ActualIncrementalBackupSizeInMegaBytes?:float, BackupProgressInMegaBytes?:float, CurrentBackupRateInMegaBytesPerSecond?:float, EstimatedSecondsToCompletion?:int, ElapsedTimeInSeconds?:int, SourceRegion?:string, Tags?:array<array{Key?:string, Value?:string}>, RestorableNodeTypes?:array<string>, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, ManualSnapshotRetentionPeriod?:int, ManualSnapshotRemainingDays?:int, SnapshotRetentionStartTime?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, SnapshotArn?:string}}>
     */
    public function authorizeSnapshotAccessAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Identifiers:array<array{SnapshotIdentifier:string, SnapshotClusterIdentifier?:string}>} $args
     * @return \AWS\Result<array{Resources?:array<string>, Errors?:array<array{SnapshotIdentifier?:string, SnapshotClusterIdentifier?:string, FailureCode?:string, FailureReason?:string}>}>
     */
    public function batchDeleteClusterSnapshots(array $args): \AWS\Result { }

    /**
     * @param array{Identifiers:array<array{SnapshotIdentifier:string, SnapshotClusterIdentifier?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Resources?:array<string>, Errors?:array<array{SnapshotIdentifier?:string, SnapshotClusterIdentifier?:string, FailureCode?:string, FailureReason?:string}>}>
     */
    public function batchDeleteClusterSnapshotsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SnapshotIdentifierList:array<string>, ManualSnapshotRetentionPeriod?:int, Force?:bool} $args
     * @return \AWS\Result<array{Resources?:array<string>, Errors?:array<array{SnapshotIdentifier?:string, SnapshotClusterIdentifier?:string, FailureCode?:string, FailureReason?:string}>}>
     */
    public function batchModifyClusterSnapshots(array $args): \AWS\Result { }

    /**
     * @param array{SnapshotIdentifierList:array<string>, ManualSnapshotRetentionPeriod?:int, Force?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Resources?:array<string>, Errors?:array<array{SnapshotIdentifier?:string, SnapshotClusterIdentifier?:string, FailureCode?:string, FailureReason?:string}>}>
     */
    public function batchModifyClusterSnapshotsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier:string} $args
     * @return \AWS\Result<array{TargetNodeType?:string, TargetNumberOfNodes?:int, TargetClusterType?:string, Status?:string, ImportTablesCompleted?:array<string>, ImportTablesInProgress?:array<string>, ImportTablesNotStarted?:array<string>, AvgResizeRateInMegaBytesPerSecond?:float, TotalResizeDataInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int, ResizeType?:string, Message?:string, TargetEncryptionType?:string, DataTransferProgressPercent?:float}>
     */
    public function cancelResize(array $args): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TargetNodeType?:string, TargetNumberOfNodes?:int, TargetClusterType?:string, Status?:string, ImportTablesCompleted?:array<string>, ImportTablesInProgress?:array<string>, ImportTablesNotStarted?:array<string>, AvgResizeRateInMegaBytesPerSecond?:float, TotalResizeDataInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int, ResizeType?:string, Message?:string, TargetEncryptionType?:string, DataTransferProgressPercent?:float}>
     */
    public function cancelResizeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SourceSnapshotIdentifier:string, SourceSnapshotClusterIdentifier?:string, TargetSnapshotIdentifier:string, ManualSnapshotRetentionPeriod?:int} $args
     * @return \AWS\Result<array{Snapshot?:array{SnapshotIdentifier?:string, ClusterIdentifier?:string, SnapshotCreateTime?:int|string|\DateTimeInterface, Status?:string, Port?:int, AvailabilityZone?:string, ClusterCreateTime?:int|string|\DateTimeInterface, MasterUsername?:string, ClusterVersion?:string, EngineFullVersion?:string, SnapshotType?:string, NodeType?:string, NumberOfNodes?:int, DBName?:string, VpcId?:string, Encrypted?:bool, KmsKeyId?:string, EncryptedWithHSM?:bool, AccountsWithRestoreAccess?:array<array{AccountId?:string, AccountAlias?:string}>, OwnerAccount?:string, TotalBackupSizeInMegaBytes?:float, ActualIncrementalBackupSizeInMegaBytes?:float, BackupProgressInMegaBytes?:float, CurrentBackupRateInMegaBytesPerSecond?:float, EstimatedSecondsToCompletion?:int, ElapsedTimeInSeconds?:int, SourceRegion?:string, Tags?:array<array{Key?:string, Value?:string}>, RestorableNodeTypes?:array<string>, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, ManualSnapshotRetentionPeriod?:int, ManualSnapshotRemainingDays?:int, SnapshotRetentionStartTime?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, SnapshotArn?:string}}>
     */
    public function copyClusterSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{SourceSnapshotIdentifier:string, SourceSnapshotClusterIdentifier?:string, TargetSnapshotIdentifier:string, ManualSnapshotRetentionPeriod?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Snapshot?:array{SnapshotIdentifier?:string, ClusterIdentifier?:string, SnapshotCreateTime?:int|string|\DateTimeInterface, Status?:string, Port?:int, AvailabilityZone?:string, ClusterCreateTime?:int|string|\DateTimeInterface, MasterUsername?:string, ClusterVersion?:string, EngineFullVersion?:string, SnapshotType?:string, NodeType?:string, NumberOfNodes?:int, DBName?:string, VpcId?:string, Encrypted?:bool, KmsKeyId?:string, EncryptedWithHSM?:bool, AccountsWithRestoreAccess?:array<array{AccountId?:string, AccountAlias?:string}>, OwnerAccount?:string, TotalBackupSizeInMegaBytes?:float, ActualIncrementalBackupSizeInMegaBytes?:float, BackupProgressInMegaBytes?:float, CurrentBackupRateInMegaBytesPerSecond?:float, EstimatedSecondsToCompletion?:int, ElapsedTimeInSeconds?:int, SourceRegion?:string, Tags?:array<array{Key?:string, Value?:string}>, RestorableNodeTypes?:array<string>, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, ManualSnapshotRetentionPeriod?:int, ManualSnapshotRemainingDays?:int, SnapshotRetentionStartTime?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, SnapshotArn?:string}}>
     */
    public function copyClusterSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationProfileName:string, AuthenticationProfileContent:string} $args
     * @return \AWS\Result<array{AuthenticationProfileName?:string, AuthenticationProfileContent?:string}>
     */
    public function createAuthenticationProfile(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationProfileName:string, AuthenticationProfileContent:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AuthenticationProfileName?:string, AuthenticationProfileContent?:string}>
     */
    public function createAuthenticationProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DBName?:string, ClusterIdentifier:string, ClusterType?:string, NodeType:string, MasterUsername:string, MasterUserPassword?:string, ClusterSecurityGroups?:array<string>, VpcSecurityGroupIds?:array<string>, ClusterSubnetGroupName?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, ClusterParameterGroupName?:string, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, Port?:int, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, ElasticIp?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, AdditionalInfo?:string, IamRoles?:array<string>, MaintenanceTrackName?:string, SnapshotScheduleIdentifier?:string, AvailabilityZoneRelocation?:bool, AquaConfigurationStatus?:"enabled"|"disabled"|"auto", DefaultIamRoleArn?:string, LoadSampleData?:string, ManageMasterPassword?:bool, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:bool, RedshiftIdcApplicationArn?:string} $args
     * @return \AWS\Result<array{Cluster?:array{ClusterIdentifier?:string, NodeType?:string, ClusterStatus?:string, ClusterAvailabilityStatus?:string, ModifyStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}>}, ClusterCreateTime?:int|string|\DateTimeInterface, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, ClusterParameterGroups?:array<array{ParameterGroupName?:string, ParameterApplyStatus?:string, ClusterParameterStatusList?:array<array{ParameterName?:string, ParameterApplyStatus?:string, ParameterApplyErrorDescription?:string}>}>, ClusterSubnetGroupName?:string, VpcId?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{MasterUserPassword?:string, NodeType?:string, NumberOfNodes?:int, ClusterType?:string, ClusterVersion?:string, AutomatedSnapshotRetentionPeriod?:int, ClusterIdentifier?:string, PubliclyAccessible?:bool, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, EncryptionType?:string}, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, RestoreStatus?:array{Status?:string, CurrentRestoreRateInMegaBytesPerSecond?:float, SnapshotSizeInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int}, DataTransferProgress?:array{Status?:string, CurrentRateInMegaBytesPerSecond?:float, TotalDataInMegaBytes?:int, DataTransferredInMegaBytes?:int, EstimatedTimeToCompletionInSeconds?:int, ElapsedTimeInSeconds?:int}, HsmStatus?:array{HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, Status?:string}, ClusterSnapshotCopyStatus?:array{DestinationRegion?:string, RetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, SnapshotCopyGrantName?:string}, ClusterPublicKey?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>, ElasticIpStatus?:array{ElasticIp?:string, Status?:string}, ClusterRevisionNumber?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, IamRoles?:array<array{IamRoleArn?:string, ApplyStatus?:string}>, PendingActions?:array<string>, MaintenanceTrackName?:string, ElasticResizeNumberOfNodeOptions?:string, DeferredMaintenanceWindows?:array<array{DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface}>, SnapshotScheduleIdentifier?:string, SnapshotScheduleState?:"MODIFYING"|"ACTIVE"|"FAILED", ExpectedNextSnapshotScheduleTime?:int|string|\DateTimeInterface, ExpectedNextSnapshotScheduleTimeStatus?:string, NextMaintenanceWindowStartTime?:int|string|\DateTimeInterface, ResizeInfo?:array{ResizeType?:string, AllowCancelResize?:bool}, AvailabilityZoneRelocationStatus?:string, ClusterNamespaceArn?:string, TotalStorageCapacityInMegaBytes?:int, AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}, DefaultIamRoleArn?:string, ReservedNodeExchangeStatus?:array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}, CustomDomainName?:string, CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:string, MultiAZSecondary?:array{AvailabilityZone?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>}}}>
     */
    public function createCluster(array $args): \AWS\Result { }

    /**
     * @param array{DBName?:string, ClusterIdentifier:string, ClusterType?:string, NodeType:string, MasterUsername:string, MasterUserPassword?:string, ClusterSecurityGroups?:array<string>, VpcSecurityGroupIds?:array<string>, ClusterSubnetGroupName?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, ClusterParameterGroupName?:string, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, Port?:int, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, ElasticIp?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, AdditionalInfo?:string, IamRoles?:array<string>, MaintenanceTrackName?:string, SnapshotScheduleIdentifier?:string, AvailabilityZoneRelocation?:bool, AquaConfigurationStatus?:"enabled"|"disabled"|"auto", DefaultIamRoleArn?:string, LoadSampleData?:string, ManageMasterPassword?:bool, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:bool, RedshiftIdcApplicationArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cluster?:array{ClusterIdentifier?:string, NodeType?:string, ClusterStatus?:string, ClusterAvailabilityStatus?:string, ModifyStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}>}, ClusterCreateTime?:int|string|\DateTimeInterface, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, ClusterParameterGroups?:array<array{ParameterGroupName?:string, ParameterApplyStatus?:string, ClusterParameterStatusList?:array<array{ParameterName?:string, ParameterApplyStatus?:string, ParameterApplyErrorDescription?:string}>}>, ClusterSubnetGroupName?:string, VpcId?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{MasterUserPassword?:string, NodeType?:string, NumberOfNodes?:int, ClusterType?:string, ClusterVersion?:string, AutomatedSnapshotRetentionPeriod?:int, ClusterIdentifier?:string, PubliclyAccessible?:bool, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, EncryptionType?:string}, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, RestoreStatus?:array{Status?:string, CurrentRestoreRateInMegaBytesPerSecond?:float, SnapshotSizeInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int}, DataTransferProgress?:array{Status?:string, CurrentRateInMegaBytesPerSecond?:float, TotalDataInMegaBytes?:int, DataTransferredInMegaBytes?:int, EstimatedTimeToCompletionInSeconds?:int, ElapsedTimeInSeconds?:int}, HsmStatus?:array{HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, Status?:string}, ClusterSnapshotCopyStatus?:array{DestinationRegion?:string, RetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, SnapshotCopyGrantName?:string}, ClusterPublicKey?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>, ElasticIpStatus?:array{ElasticIp?:string, Status?:string}, ClusterRevisionNumber?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, IamRoles?:array<array{IamRoleArn?:string, ApplyStatus?:string}>, PendingActions?:array<string>, MaintenanceTrackName?:string, ElasticResizeNumberOfNodeOptions?:string, DeferredMaintenanceWindows?:array<array{DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface}>, SnapshotScheduleIdentifier?:string, SnapshotScheduleState?:"MODIFYING"|"ACTIVE"|"FAILED", ExpectedNextSnapshotScheduleTime?:int|string|\DateTimeInterface, ExpectedNextSnapshotScheduleTimeStatus?:string, NextMaintenanceWindowStartTime?:int|string|\DateTimeInterface, ResizeInfo?:array{ResizeType?:string, AllowCancelResize?:bool}, AvailabilityZoneRelocationStatus?:string, ClusterNamespaceArn?:string, TotalStorageCapacityInMegaBytes?:int, AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}, DefaultIamRoleArn?:string, ReservedNodeExchangeStatus?:array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}, CustomDomainName?:string, CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:string, MultiAZSecondary?:array{AvailabilityZone?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>}}}>
     */
    public function createClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ParameterGroupName:string, ParameterGroupFamily:string, Description:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{ClusterParameterGroup?:array{ParameterGroupName?:string, ParameterGroupFamily?:string, Description?:string, Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function createClusterParameterGroup(array $args): \AWS\Result { }

    /**
     * @param array{ParameterGroupName:string, ParameterGroupFamily:string, Description:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterParameterGroup?:array{ParameterGroupName?:string, ParameterGroupFamily?:string, Description?:string, Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function createClusterParameterGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterSecurityGroupName:string, Description:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{ClusterSecurityGroup?:array{ClusterSecurityGroupName?:string, Description?:string, EC2SecurityGroups?:array<array{Status?:string, EC2SecurityGroupName?:string, EC2SecurityGroupOwnerId?:string, Tags?:array<array{Key?:string, Value?:string}>}>, IPRanges?:array<array{Status?:string, CIDRIP?:string, Tags?:array<array{Key?:string, Value?:string}>}>, Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function createClusterSecurityGroup(array $args): \AWS\Result { }

    /**
     * @param array{ClusterSecurityGroupName:string, Description:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterSecurityGroup?:array{ClusterSecurityGroupName?:string, Description?:string, EC2SecurityGroups?:array<array{Status?:string, EC2SecurityGroupName?:string, EC2SecurityGroupOwnerId?:string, Tags?:array<array{Key?:string, Value?:string}>}>, IPRanges?:array<array{Status?:string, CIDRIP?:string, Tags?:array<array{Key?:string, Value?:string}>}>, Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function createClusterSecurityGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SnapshotIdentifier:string, ClusterIdentifier:string, ManualSnapshotRetentionPeriod?:int, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{Snapshot?:array{SnapshotIdentifier?:string, ClusterIdentifier?:string, SnapshotCreateTime?:int|string|\DateTimeInterface, Status?:string, Port?:int, AvailabilityZone?:string, ClusterCreateTime?:int|string|\DateTimeInterface, MasterUsername?:string, ClusterVersion?:string, EngineFullVersion?:string, SnapshotType?:string, NodeType?:string, NumberOfNodes?:int, DBName?:string, VpcId?:string, Encrypted?:bool, KmsKeyId?:string, EncryptedWithHSM?:bool, AccountsWithRestoreAccess?:array<array{AccountId?:string, AccountAlias?:string}>, OwnerAccount?:string, TotalBackupSizeInMegaBytes?:float, ActualIncrementalBackupSizeInMegaBytes?:float, BackupProgressInMegaBytes?:float, CurrentBackupRateInMegaBytesPerSecond?:float, EstimatedSecondsToCompletion?:int, ElapsedTimeInSeconds?:int, SourceRegion?:string, Tags?:array<array{Key?:string, Value?:string}>, RestorableNodeTypes?:array<string>, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, ManualSnapshotRetentionPeriod?:int, ManualSnapshotRemainingDays?:int, SnapshotRetentionStartTime?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, SnapshotArn?:string}}>
     */
    public function createClusterSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{SnapshotIdentifier:string, ClusterIdentifier:string, ManualSnapshotRetentionPeriod?:int, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Snapshot?:array{SnapshotIdentifier?:string, ClusterIdentifier?:string, SnapshotCreateTime?:int|string|\DateTimeInterface, Status?:string, Port?:int, AvailabilityZone?:string, ClusterCreateTime?:int|string|\DateTimeInterface, MasterUsername?:string, ClusterVersion?:string, EngineFullVersion?:string, SnapshotType?:string, NodeType?:string, NumberOfNodes?:int, DBName?:string, VpcId?:string, Encrypted?:bool, KmsKeyId?:string, EncryptedWithHSM?:bool, AccountsWithRestoreAccess?:array<array{AccountId?:string, AccountAlias?:string}>, OwnerAccount?:string, TotalBackupSizeInMegaBytes?:float, ActualIncrementalBackupSizeInMegaBytes?:float, BackupProgressInMegaBytes?:float, CurrentBackupRateInMegaBytesPerSecond?:float, EstimatedSecondsToCompletion?:int, ElapsedTimeInSeconds?:int, SourceRegion?:string, Tags?:array<array{Key?:string, Value?:string}>, RestorableNodeTypes?:array<string>, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, ManualSnapshotRetentionPeriod?:int, ManualSnapshotRemainingDays?:int, SnapshotRetentionStartTime?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, SnapshotArn?:string}}>
     */
    public function createClusterSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterSubnetGroupName:string, Description:string, SubnetIds:array<string>, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{ClusterSubnetGroup?:array{ClusterSubnetGroupName?:string, Description?:string, VpcId?:string, SubnetGroupStatus?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:array{Name?:string, SupportedPlatforms?:array<array{Name?:string}>}, SubnetStatus?:string}>, Tags?:array<array{Key?:string, Value?:string}>, SupportedClusterIpAddressTypes?:array<string>}}>
     */
    public function createClusterSubnetGroup(array $args): \AWS\Result { }

    /**
     * @param array{ClusterSubnetGroupName:string, Description:string, SubnetIds:array<string>, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterSubnetGroup?:array{ClusterSubnetGroupName?:string, Description?:string, VpcId?:string, SubnetGroupStatus?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:array{Name?:string, SupportedPlatforms?:array<array{Name?:string}>}, SubnetStatus?:string}>, Tags?:array<array{Key?:string, Value?:string}>, SupportedClusterIpAddressTypes?:array<string>}}>
     */
    public function createClusterSubnetGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CustomDomainName:string, CustomDomainCertificateArn:string, ClusterIdentifier:string} $args
     * @return \AWS\Result<array{CustomDomainName?:string, CustomDomainCertificateArn?:string, ClusterIdentifier?:string, CustomDomainCertExpiryTime?:string}>
     */
    public function createCustomDomainAssociation(array $args): \AWS\Result { }

    /**
     * @param array{CustomDomainName:string, CustomDomainCertificateArn:string, ClusterIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CustomDomainName?:string, CustomDomainCertificateArn?:string, ClusterIdentifier?:string, CustomDomainCertExpiryTime?:string}>
     */
    public function createCustomDomainAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier?:string, ResourceOwner?:string, EndpointName:string, SubnetGroupName:string, VpcSecurityGroupIds?:array<string>} $args
     * @return \AWS\Result<array{ClusterIdentifier?:string, ResourceOwner?:string, SubnetGroupName?:string, EndpointStatus?:string, EndpointName?:string, EndpointCreateTime?:int|string|\DateTimeInterface, Port?:int, Address?:string, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, VpcEndpoint?:array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}}>
     */
    public function createEndpointAccess(array $args): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier?:string, ResourceOwner?:string, EndpointName:string, SubnetGroupName:string, VpcSecurityGroupIds?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterIdentifier?:string, ResourceOwner?:string, SubnetGroupName?:string, EndpointStatus?:string, EndpointName?:string, EndpointCreateTime?:int|string|\DateTimeInterface, Port?:int, Address?:string, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, VpcEndpoint?:array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}}>
     */
    public function createEndpointAccessAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SubscriptionName:string, SnsTopicArn:string, SourceType?:string, SourceIds?:array<string>, EventCategories?:array<string>, Severity?:string, Enabled?:bool, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{EventSubscription?:array{CustomerAwsId?:string, CustSubscriptionId?:string, SnsTopicArn?:string, Status?:string, SubscriptionCreationTime?:int|string|\DateTimeInterface, SourceType?:string, SourceIdsList?:array<string>, EventCategoriesList?:array<string>, Severity?:string, Enabled?:bool, Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function createEventSubscription(array $args): \AWS\Result { }

    /**
     * @param array{SubscriptionName:string, SnsTopicArn:string, SourceType?:string, SourceIds?:array<string>, EventCategories?:array<string>, Severity?:string, Enabled?:bool, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventSubscription?:array{CustomerAwsId?:string, CustSubscriptionId?:string, SnsTopicArn?:string, Status?:string, SubscriptionCreationTime?:int|string|\DateTimeInterface, SourceType?:string, SourceIdsList?:array<string>, EventCategoriesList?:array<string>, Severity?:string, Enabled?:bool, Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function createEventSubscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HsmClientCertificateIdentifier:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{HsmClientCertificate?:array{HsmClientCertificateIdentifier?:string, HsmClientCertificatePublicKey?:string, Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function createHsmClientCertificate(array $args): \AWS\Result { }

    /**
     * @param array{HsmClientCertificateIdentifier:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{HsmClientCertificate?:array{HsmClientCertificateIdentifier?:string, HsmClientCertificatePublicKey?:string, Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function createHsmClientCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HsmConfigurationIdentifier:string, Description:string, HsmIpAddress:string, HsmPartitionName:string, HsmPartitionPassword:string, HsmServerPublicCertificate:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{HsmConfiguration?:array{HsmConfigurationIdentifier?:string, Description?:string, HsmIpAddress?:string, HsmPartitionName?:string, Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function createHsmConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{HsmConfigurationIdentifier:string, Description:string, HsmIpAddress:string, HsmPartitionName:string, HsmPartitionPassword:string, HsmServerPublicCertificate:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{HsmConfiguration?:array{HsmConfigurationIdentifier?:string, Description?:string, HsmIpAddress?:string, HsmPartitionName?:string, Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function createHsmConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SourceArn:string, TargetArn:string, IntegrationName:string, KMSKeyId?:string, TagList?:array<array{Key?:string, Value?:string}>, AdditionalEncryptionContext?:array<string, string>, Description?:string} $args
     * @return \AWS\Result<array{IntegrationArn?:string, IntegrationName?:string, SourceArn?:string, TargetArn?:string, Status?:"creating"|"active"|"modifying"|"failed"|"deleting"|"syncing"|"needs_attention", Errors?:array<array{ErrorCode:string, ErrorMessage?:string}>, CreateTime?:int|string|\DateTimeInterface, Description?:string, KMSKeyId?:string, AdditionalEncryptionContext?:array<string, string>, Tags?:array<array{Key?:string, Value?:string}>}>
     */
    public function createIntegration(array $args): \AWS\Result { }

    /**
     * @param array{SourceArn:string, TargetArn:string, IntegrationName:string, KMSKeyId?:string, TagList?:array<array{Key?:string, Value?:string}>, AdditionalEncryptionContext?:array<string, string>, Description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IntegrationArn?:string, IntegrationName?:string, SourceArn?:string, TargetArn?:string, Status?:"creating"|"active"|"modifying"|"failed"|"deleting"|"syncing"|"needs_attention", Errors?:array<array{ErrorCode:string, ErrorMessage?:string}>, CreateTime?:int|string|\DateTimeInterface, Description?:string, KMSKeyId?:string, AdditionalEncryptionContext?:array<string, string>, Tags?:array<array{Key?:string, Value?:string}>}>
     */
    public function createIntegrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdcInstanceArn:string, RedshiftIdcApplicationName:string, IdentityNamespace?:string, IdcDisplayName:string, IamRoleArn:string, AuthorizedTokenIssuerList?:array<array{TrustedTokenIssuerArn?:string, AuthorizedAudiencesList?:array<string>}>, ServiceIntegrations?:array<array{LakeFormation?:array<array{LakeFormationQuery?:array{Authorization:"Enabled"|"Disabled"}}>, S3AccessGrants?:array<array{ReadWriteAccess?:array{Authorization:"Enabled"|"Disabled"}}>}>} $args
     * @return \AWS\Result<array{RedshiftIdcApplication?:array{IdcInstanceArn?:string, RedshiftIdcApplicationName?:string, RedshiftIdcApplicationArn?:string, IdentityNamespace?:string, IdcDisplayName?:string, IamRoleArn?:string, IdcManagedApplicationArn?:string, IdcOnboardStatus?:string, AuthorizedTokenIssuerList?:array<array{TrustedTokenIssuerArn?:string, AuthorizedAudiencesList?:array<string>}>, ServiceIntegrations?:array<array{LakeFormation?:array<array{LakeFormationQuery?:array{Authorization:"Enabled"|"Disabled"}}>, S3AccessGrants?:array<array{ReadWriteAccess?:array{Authorization:"Enabled"|"Disabled"}}>}>}}>
     */
    public function createRedshiftIdcApplication(array $args): \AWS\Result { }

    /**
     * @param array{IdcInstanceArn:string, RedshiftIdcApplicationName:string, IdentityNamespace?:string, IdcDisplayName:string, IamRoleArn:string, AuthorizedTokenIssuerList?:array<array{TrustedTokenIssuerArn?:string, AuthorizedAudiencesList?:array<string>}>, ServiceIntegrations?:array<array{LakeFormation?:array<array{LakeFormationQuery?:array{Authorization:"Enabled"|"Disabled"}}>, S3AccessGrants?:array<array{ReadWriteAccess?:array{Authorization:"Enabled"|"Disabled"}}>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{RedshiftIdcApplication?:array{IdcInstanceArn?:string, RedshiftIdcApplicationName?:string, RedshiftIdcApplicationArn?:string, IdentityNamespace?:string, IdcDisplayName?:string, IamRoleArn?:string, IdcManagedApplicationArn?:string, IdcOnboardStatus?:string, AuthorizedTokenIssuerList?:array<array{TrustedTokenIssuerArn?:string, AuthorizedAudiencesList?:array<string>}>, ServiceIntegrations?:array<array{LakeFormation?:array<array{LakeFormationQuery?:array{Authorization:"Enabled"|"Disabled"}}>, S3AccessGrants?:array<array{ReadWriteAccess?:array{Authorization:"Enabled"|"Disabled"}}>}>}}>
     */
    public function createRedshiftIdcApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ScheduledActionName:string, TargetAction:array{ResizeCluster?:array{ClusterIdentifier:string, ClusterType?:string, NodeType?:string, NumberOfNodes?:int, Classic?:bool, ReservedNodeId?:string, TargetReservedNodeOfferingId?:string}, PauseCluster?:array{ClusterIdentifier:string}, ResumeCluster?:array{ClusterIdentifier:string}}, Schedule:string, IamRole:string, ScheduledActionDescription?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Enable?:bool} $args
     * @return \AWS\Result<array{ScheduledActionName?:string, TargetAction?:array{ResizeCluster?:array{ClusterIdentifier:string, ClusterType?:string, NodeType?:string, NumberOfNodes?:int, Classic?:bool, ReservedNodeId?:string, TargetReservedNodeOfferingId?:string}, PauseCluster?:array{ClusterIdentifier:string}, ResumeCluster?:array{ClusterIdentifier:string}}, Schedule?:string, IamRole?:string, ScheduledActionDescription?:string, State?:"ACTIVE"|"DISABLED", NextInvocations?:array<int|string|\DateTimeInterface>, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}>
     */
    public function createScheduledAction(array $args): \AWS\Result { }

    /**
     * @param array{ScheduledActionName:string, TargetAction:array{ResizeCluster?:array{ClusterIdentifier:string, ClusterType?:string, NodeType?:string, NumberOfNodes?:int, Classic?:bool, ReservedNodeId?:string, TargetReservedNodeOfferingId?:string}, PauseCluster?:array{ClusterIdentifier:string}, ResumeCluster?:array{ClusterIdentifier:string}}, Schedule:string, IamRole:string, ScheduledActionDescription?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Enable?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{ScheduledActionName?:string, TargetAction?:array{ResizeCluster?:array{ClusterIdentifier:string, ClusterType?:string, NodeType?:string, NumberOfNodes?:int, Classic?:bool, ReservedNodeId?:string, TargetReservedNodeOfferingId?:string}, PauseCluster?:array{ClusterIdentifier:string}, ResumeCluster?:array{ClusterIdentifier:string}}, Schedule?:string, IamRole?:string, ScheduledActionDescription?:string, State?:"ACTIVE"|"DISABLED", NextInvocations?:array<int|string|\DateTimeInterface>, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}>
     */
    public function createScheduledActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SnapshotCopyGrantName:string, KmsKeyId?:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{SnapshotCopyGrant?:array{SnapshotCopyGrantName?:string, KmsKeyId?:string, Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function createSnapshotCopyGrant(array $args): \AWS\Result { }

    /**
     * @param array{SnapshotCopyGrantName:string, KmsKeyId?:string, Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{SnapshotCopyGrant?:array{SnapshotCopyGrantName?:string, KmsKeyId?:string, Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function createSnapshotCopyGrantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ScheduleDefinitions?:array<string>, ScheduleIdentifier?:string, ScheduleDescription?:string, Tags?:array<array{Key?:string, Value?:string}>, DryRun?:bool, NextInvocations?:int} $args
     * @return \AWS\Result<array{ScheduleDefinitions?:array<string>, ScheduleIdentifier?:string, ScheduleDescription?:string, Tags?:array<array{Key?:string, Value?:string}>, NextInvocations?:array<int|string|\DateTimeInterface>, AssociatedClusterCount?:int, AssociatedClusters?:array<array{ClusterIdentifier?:string, ScheduleAssociationState?:"MODIFYING"|"ACTIVE"|"FAILED"}>}>
     */
    public function createSnapshotSchedule(array $args = []): \AWS\Result { }

    /**
     * @param array{ScheduleDefinitions?:array<string>, ScheduleIdentifier?:string, ScheduleDescription?:string, Tags?:array<array{Key?:string, Value?:string}>, DryRun?:bool, NextInvocations?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ScheduleDefinitions?:array<string>, ScheduleIdentifier?:string, ScheduleDescription?:string, Tags?:array<array{Key?:string, Value?:string}>, NextInvocations?:array<int|string|\DateTimeInterface>, AssociatedClusterCount?:int, AssociatedClusters?:array<array{ClusterIdentifier?:string, ScheduleAssociationState?:"MODIFYING"|"ACTIVE"|"FAILED"}>}>
     */
    public function createSnapshotScheduleAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceName:string, Tags:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<void>
     */
    public function createTags(array $args): \AWS\Result { }

    /**
     * @param array{ResourceName:string, Tags:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function createTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier:string, FeatureType:"spectrum"|"concurrency-scaling"|"cross-region-datasharing", LimitType:"time"|"data-scanned", Amount:int, Period?:"daily"|"weekly"|"monthly", BreachAction?:"log"|"emit-metric"|"disable", Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<array{UsageLimitId?:string, ClusterIdentifier?:string, FeatureType?:"spectrum"|"concurrency-scaling"|"cross-region-datasharing", LimitType?:"time"|"data-scanned", Amount?:int, Period?:"daily"|"weekly"|"monthly", BreachAction?:"log"|"emit-metric"|"disable", Tags?:array<array{Key?:string, Value?:string}>}>
     */
    public function createUsageLimit(array $args): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier:string, FeatureType:"spectrum"|"concurrency-scaling"|"cross-region-datasharing", LimitType:"time"|"data-scanned", Amount:int, Period?:"daily"|"weekly"|"monthly", BreachAction?:"log"|"emit-metric"|"disable", Tags?:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{UsageLimitId?:string, ClusterIdentifier?:string, FeatureType?:"spectrum"|"concurrency-scaling"|"cross-region-datasharing", LimitType?:"time"|"data-scanned", Amount?:int, Period?:"daily"|"weekly"|"monthly", BreachAction?:"log"|"emit-metric"|"disable", Tags?:array<array{Key?:string, Value?:string}>}>
     */
    public function createUsageLimitAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DataShareArn:string, ConsumerIdentifier:string} $args
     * @return \AWS\Result<array{DataShareArn?:string, ProducerArn?:string, AllowPubliclyAccessibleConsumers?:bool, DataShareAssociations?:array<array{ConsumerIdentifier?:string, Status?:"ACTIVE"|"PENDING_AUTHORIZATION"|"AUTHORIZED"|"DEAUTHORIZED"|"REJECTED"|"AVAILABLE", ConsumerRegion?:string, CreatedDate?:int|string|\DateTimeInterface, StatusChangeDate?:int|string|\DateTimeInterface, ProducerAllowedWrites?:bool, ConsumerAcceptedWrites?:bool}>, ManagedBy?:string, DataShareType?:"INTERNAL"}>
     */
    public function deauthorizeDataShare(array $args): \AWS\Result { }

    /**
     * @param array{DataShareArn:string, ConsumerIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DataShareArn?:string, ProducerArn?:string, AllowPubliclyAccessibleConsumers?:bool, DataShareAssociations?:array<array{ConsumerIdentifier?:string, Status?:"ACTIVE"|"PENDING_AUTHORIZATION"|"AUTHORIZED"|"DEAUTHORIZED"|"REJECTED"|"AVAILABLE", ConsumerRegion?:string, CreatedDate?:int|string|\DateTimeInterface, StatusChangeDate?:int|string|\DateTimeInterface, ProducerAllowedWrites?:bool, ConsumerAcceptedWrites?:bool}>, ManagedBy?:string, DataShareType?:"INTERNAL"}>
     */
    public function deauthorizeDataShareAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationProfileName:string} $args
     * @return \AWS\Result<array{AuthenticationProfileName?:string}>
     */
    public function deleteAuthenticationProfile(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationProfileName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AuthenticationProfileName?:string}>
     */
    public function deleteAuthenticationProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier:string, SkipFinalClusterSnapshot?:bool, FinalClusterSnapshotIdentifier?:string, FinalClusterSnapshotRetentionPeriod?:int} $args
     * @return \AWS\Result<array{Cluster?:array{ClusterIdentifier?:string, NodeType?:string, ClusterStatus?:string, ClusterAvailabilityStatus?:string, ModifyStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}>}, ClusterCreateTime?:int|string|\DateTimeInterface, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, ClusterParameterGroups?:array<array{ParameterGroupName?:string, ParameterApplyStatus?:string, ClusterParameterStatusList?:array<array{ParameterName?:string, ParameterApplyStatus?:string, ParameterApplyErrorDescription?:string}>}>, ClusterSubnetGroupName?:string, VpcId?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{MasterUserPassword?:string, NodeType?:string, NumberOfNodes?:int, ClusterType?:string, ClusterVersion?:string, AutomatedSnapshotRetentionPeriod?:int, ClusterIdentifier?:string, PubliclyAccessible?:bool, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, EncryptionType?:string}, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, RestoreStatus?:array{Status?:string, CurrentRestoreRateInMegaBytesPerSecond?:float, SnapshotSizeInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int}, DataTransferProgress?:array{Status?:string, CurrentRateInMegaBytesPerSecond?:float, TotalDataInMegaBytes?:int, DataTransferredInMegaBytes?:int, EstimatedTimeToCompletionInSeconds?:int, ElapsedTimeInSeconds?:int}, HsmStatus?:array{HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, Status?:string}, ClusterSnapshotCopyStatus?:array{DestinationRegion?:string, RetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, SnapshotCopyGrantName?:string}, ClusterPublicKey?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>, ElasticIpStatus?:array{ElasticIp?:string, Status?:string}, ClusterRevisionNumber?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, IamRoles?:array<array{IamRoleArn?:string, ApplyStatus?:string}>, PendingActions?:array<string>, MaintenanceTrackName?:string, ElasticResizeNumberOfNodeOptions?:string, DeferredMaintenanceWindows?:array<array{DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface}>, SnapshotScheduleIdentifier?:string, SnapshotScheduleState?:"MODIFYING"|"ACTIVE"|"FAILED", ExpectedNextSnapshotScheduleTime?:int|string|\DateTimeInterface, ExpectedNextSnapshotScheduleTimeStatus?:string, NextMaintenanceWindowStartTime?:int|string|\DateTimeInterface, ResizeInfo?:array{ResizeType?:string, AllowCancelResize?:bool}, AvailabilityZoneRelocationStatus?:string, ClusterNamespaceArn?:string, TotalStorageCapacityInMegaBytes?:int, AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}, DefaultIamRoleArn?:string, ReservedNodeExchangeStatus?:array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}, CustomDomainName?:string, CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:string, MultiAZSecondary?:array{AvailabilityZone?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>}}}>
     */
    public function deleteCluster(array $args): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier:string, SkipFinalClusterSnapshot?:bool, FinalClusterSnapshotIdentifier?:string, FinalClusterSnapshotRetentionPeriod?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cluster?:array{ClusterIdentifier?:string, NodeType?:string, ClusterStatus?:string, ClusterAvailabilityStatus?:string, ModifyStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}>}, ClusterCreateTime?:int|string|\DateTimeInterface, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, ClusterParameterGroups?:array<array{ParameterGroupName?:string, ParameterApplyStatus?:string, ClusterParameterStatusList?:array<array{ParameterName?:string, ParameterApplyStatus?:string, ParameterApplyErrorDescription?:string}>}>, ClusterSubnetGroupName?:string, VpcId?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{MasterUserPassword?:string, NodeType?:string, NumberOfNodes?:int, ClusterType?:string, ClusterVersion?:string, AutomatedSnapshotRetentionPeriod?:int, ClusterIdentifier?:string, PubliclyAccessible?:bool, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, EncryptionType?:string}, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, RestoreStatus?:array{Status?:string, CurrentRestoreRateInMegaBytesPerSecond?:float, SnapshotSizeInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int}, DataTransferProgress?:array{Status?:string, CurrentRateInMegaBytesPerSecond?:float, TotalDataInMegaBytes?:int, DataTransferredInMegaBytes?:int, EstimatedTimeToCompletionInSeconds?:int, ElapsedTimeInSeconds?:int}, HsmStatus?:array{HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, Status?:string}, ClusterSnapshotCopyStatus?:array{DestinationRegion?:string, RetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, SnapshotCopyGrantName?:string}, ClusterPublicKey?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>, ElasticIpStatus?:array{ElasticIp?:string, Status?:string}, ClusterRevisionNumber?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, IamRoles?:array<array{IamRoleArn?:string, ApplyStatus?:string}>, PendingActions?:array<string>, MaintenanceTrackName?:string, ElasticResizeNumberOfNodeOptions?:string, DeferredMaintenanceWindows?:array<array{DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface}>, SnapshotScheduleIdentifier?:string, SnapshotScheduleState?:"MODIFYING"|"ACTIVE"|"FAILED", ExpectedNextSnapshotScheduleTime?:int|string|\DateTimeInterface, ExpectedNextSnapshotScheduleTimeStatus?:string, NextMaintenanceWindowStartTime?:int|string|\DateTimeInterface, ResizeInfo?:array{ResizeType?:string, AllowCancelResize?:bool}, AvailabilityZoneRelocationStatus?:string, ClusterNamespaceArn?:string, TotalStorageCapacityInMegaBytes?:int, AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}, DefaultIamRoleArn?:string, ReservedNodeExchangeStatus?:array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}, CustomDomainName?:string, CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:string, MultiAZSecondary?:array{AvailabilityZone?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>}}}>
     */
    public function deleteClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ParameterGroupName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteClusterParameterGroup(array $args): \AWS\Result { }

    /**
     * @param array{ParameterGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteClusterParameterGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterSecurityGroupName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteClusterSecurityGroup(array $args): \AWS\Result { }

    /**
     * @param array{ClusterSecurityGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteClusterSecurityGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SnapshotIdentifier:string, SnapshotClusterIdentifier?:string} $args
     * @return \AWS\Result<array{Snapshot?:array{SnapshotIdentifier?:string, ClusterIdentifier?:string, SnapshotCreateTime?:int|string|\DateTimeInterface, Status?:string, Port?:int, AvailabilityZone?:string, ClusterCreateTime?:int|string|\DateTimeInterface, MasterUsername?:string, ClusterVersion?:string, EngineFullVersion?:string, SnapshotType?:string, NodeType?:string, NumberOfNodes?:int, DBName?:string, VpcId?:string, Encrypted?:bool, KmsKeyId?:string, EncryptedWithHSM?:bool, AccountsWithRestoreAccess?:array<array{AccountId?:string, AccountAlias?:string}>, OwnerAccount?:string, TotalBackupSizeInMegaBytes?:float, ActualIncrementalBackupSizeInMegaBytes?:float, BackupProgressInMegaBytes?:float, CurrentBackupRateInMegaBytesPerSecond?:float, EstimatedSecondsToCompletion?:int, ElapsedTimeInSeconds?:int, SourceRegion?:string, Tags?:array<array{Key?:string, Value?:string}>, RestorableNodeTypes?:array<string>, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, ManualSnapshotRetentionPeriod?:int, ManualSnapshotRemainingDays?:int, SnapshotRetentionStartTime?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, SnapshotArn?:string}}>
     */
    public function deleteClusterSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{SnapshotIdentifier:string, SnapshotClusterIdentifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Snapshot?:array{SnapshotIdentifier?:string, ClusterIdentifier?:string, SnapshotCreateTime?:int|string|\DateTimeInterface, Status?:string, Port?:int, AvailabilityZone?:string, ClusterCreateTime?:int|string|\DateTimeInterface, MasterUsername?:string, ClusterVersion?:string, EngineFullVersion?:string, SnapshotType?:string, NodeType?:string, NumberOfNodes?:int, DBName?:string, VpcId?:string, Encrypted?:bool, KmsKeyId?:string, EncryptedWithHSM?:bool, AccountsWithRestoreAccess?:array<array{AccountId?:string, AccountAlias?:string}>, OwnerAccount?:string, TotalBackupSizeInMegaBytes?:float, ActualIncrementalBackupSizeInMegaBytes?:float, BackupProgressInMegaBytes?:float, CurrentBackupRateInMegaBytesPerSecond?:float, EstimatedSecondsToCompletion?:int, ElapsedTimeInSeconds?:int, SourceRegion?:string, Tags?:array<array{Key?:string, Value?:string}>, RestorableNodeTypes?:array<string>, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, ManualSnapshotRetentionPeriod?:int, ManualSnapshotRemainingDays?:int, SnapshotRetentionStartTime?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, SnapshotArn?:string}}>
     */
    public function deleteClusterSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterSubnetGroupName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteClusterSubnetGroup(array $args): \AWS\Result { }

    /**
     * @param array{ClusterSubnetGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteClusterSubnetGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier:string, CustomDomainName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteCustomDomainAssociation(array $args): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier:string, CustomDomainName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteCustomDomainAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EndpointName:string} $args
     * @return \AWS\Result<array{ClusterIdentifier?:string, ResourceOwner?:string, SubnetGroupName?:string, EndpointStatus?:string, EndpointName?:string, EndpointCreateTime?:int|string|\DateTimeInterface, Port?:int, Address?:string, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, VpcEndpoint?:array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}}>
     */
    public function deleteEndpointAccess(array $args): \AWS\Result { }

    /**
     * @param array{EndpointName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterIdentifier?:string, ResourceOwner?:string, SubnetGroupName?:string, EndpointStatus?:string, EndpointName?:string, EndpointCreateTime?:int|string|\DateTimeInterface, Port?:int, Address?:string, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, VpcEndpoint?:array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}}>
     */
    public function deleteEndpointAccessAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SubscriptionName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteEventSubscription(array $args): \AWS\Result { }

    /**
     * @param array{SubscriptionName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteEventSubscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HsmClientCertificateIdentifier:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteHsmClientCertificate(array $args): \AWS\Result { }

    /**
     * @param array{HsmClientCertificateIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteHsmClientCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HsmConfigurationIdentifier:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteHsmConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{HsmConfigurationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteHsmConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IntegrationArn:string} $args
     * @return \AWS\Result<array{IntegrationArn?:string, IntegrationName?:string, SourceArn?:string, TargetArn?:string, Status?:"creating"|"active"|"modifying"|"failed"|"deleting"|"syncing"|"needs_attention", Errors?:array<array{ErrorCode:string, ErrorMessage?:string}>, CreateTime?:int|string|\DateTimeInterface, Description?:string, KMSKeyId?:string, AdditionalEncryptionContext?:array<string, string>, Tags?:array<array{Key?:string, Value?:string}>}>
     */
    public function deleteIntegration(array $args): \AWS\Result { }

    /**
     * @param array{IntegrationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IntegrationArn?:string, IntegrationName?:string, SourceArn?:string, TargetArn?:string, Status?:"creating"|"active"|"modifying"|"failed"|"deleting"|"syncing"|"needs_attention", Errors?:array<array{ErrorCode:string, ErrorMessage?:string}>, CreateTime?:int|string|\DateTimeInterface, Description?:string, KMSKeyId?:string, AdditionalEncryptionContext?:array<string, string>, Tags?:array<array{Key?:string, Value?:string}>}>
     */
    public function deleteIntegrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, ClusterIdentifier:string, DatabaseName:string, PartnerName:string} $args
     * @return \AWS\Result<array{DatabaseName?:string, PartnerName?:string}>
     */
    public function deletePartner(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, ClusterIdentifier:string, DatabaseName:string, PartnerName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DatabaseName?:string, PartnerName?:string}>
     */
    public function deletePartnerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RedshiftIdcApplicationArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteRedshiftIdcApplication(array $args): \AWS\Result { }

    /**
     * @param array{RedshiftIdcApplicationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteRedshiftIdcApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ScheduledActionName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteScheduledAction(array $args): \AWS\Result { }

    /**
     * @param array{ScheduledActionName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteScheduledActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SnapshotCopyGrantName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteSnapshotCopyGrant(array $args): \AWS\Result { }

    /**
     * @param array{SnapshotCopyGrantName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteSnapshotCopyGrantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ScheduleIdentifier:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteSnapshotSchedule(array $args): \AWS\Result { }

    /**
     * @param array{ScheduleIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteSnapshotScheduleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceName:string, TagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function deleteTags(array $args): \AWS\Result { }

    /**
     * @param array{ResourceName:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UsageLimitId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteUsageLimit(array $args): \AWS\Result { }

    /**
     * @param array{UsageLimitId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteUsageLimitAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NamespaceIdentifier:array{ServerlessIdentifier?:array{NamespaceIdentifier:mixed, WorkgroupIdentifier:string}, ProvisionedIdentifier?:array{ClusterIdentifier:string}}, ConsumerIdentifiers:array<string>} $args
     * @return \AWS\Result<array{Status?:"Registering"|"Deregistering"}>
     */
    public function deregisterNamespace(array $args): \AWS\Result { }

    /**
     * @param array{NamespaceIdentifier:array{ServerlessIdentifier?:array{NamespaceIdentifier:mixed, WorkgroupIdentifier:string}, ProvisionedIdentifier?:array{ClusterIdentifier:string}}, ConsumerIdentifiers:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status?:"Registering"|"Deregistering"}>
     */
    public function deregisterNamespaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AttributeNames?:array<string>} $args
     * @return \AWS\Result<array{AccountAttributes?:array<array{AttributeName?:string, AttributeValues?:array<array{AttributeValue?:string}>}>}>
     */
    public function describeAccountAttributes(array $args = []): \AWS\Result { }

    /**
     * @param array{AttributeNames?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountAttributes?:array<array{AttributeName?:string, AttributeValues?:array<array{AttributeValue?:string}>}>}>
     */
    public function describeAccountAttributesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationProfileName?:string} $args
     * @return \AWS\Result<array{AuthenticationProfiles?:array<array{AuthenticationProfileName?:string, AuthenticationProfileContent?:string}>}>
     */
    public function describeAuthenticationProfiles(array $args = []): \AWS\Result { }

    /**
     * @param array{AuthenticationProfileName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AuthenticationProfiles?:array<array{AuthenticationProfileName?:string, AuthenticationProfileContent?:string}>}>
     */
    public function describeAuthenticationProfilesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier?:string, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{Marker?:string, ClusterDbRevisions?:array<array{ClusterIdentifier?:string, CurrentDatabaseRevision?:string, DatabaseRevisionReleaseDate?:int|string|\DateTimeInterface, RevisionTargets?:array<array{DatabaseRevision?:string, Description?:string, DatabaseRevisionReleaseDate?:int|string|\DateTimeInterface}>}>}>
     */
    public function describeClusterDbRevisions(array $args = []): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier?:string, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, ClusterDbRevisions?:array<array{ClusterIdentifier?:string, CurrentDatabaseRevision?:string, DatabaseRevisionReleaseDate?:int|string|\DateTimeInterface, RevisionTargets?:array<array{DatabaseRevision?:string, Description?:string, DatabaseRevisionReleaseDate?:int|string|\DateTimeInterface}>}>}>
     */
    public function describeClusterDbRevisionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ParameterGroupName?:string, MaxRecords?:int, Marker?:string, TagKeys?:array<string>, TagValues?:array<string>} $args
     * @return \AWS\Result<array{Marker?:string, ParameterGroups?:array<array{ParameterGroupName?:string, ParameterGroupFamily?:string, Description?:string, Tags?:array<array{Key?:string, Value?:string}>}>}>
     */
    public function describeClusterParameterGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{ParameterGroupName?:string, MaxRecords?:int, Marker?:string, TagKeys?:array<string>, TagValues?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, ParameterGroups?:array<array{ParameterGroupName?:string, ParameterGroupFamily?:string, Description?:string, Tags?:array<array{Key?:string, Value?:string}>}>}>
     */
    public function describeClusterParameterGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ParameterGroupName:string, Source?:string, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{Parameters?:array<array{ParameterName?:string, ParameterValue?:string, Description?:string, Source?:string, DataType?:string, AllowedValues?:string, ApplyType?:"static"|"dynamic", IsModifiable?:bool, MinimumEngineVersion?:string}>, Marker?:string}>
     */
    public function describeClusterParameters(array $args): \AWS\Result { }

    /**
     * @param array{ParameterGroupName:string, Source?:string, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Parameters?:array<array{ParameterName?:string, ParameterValue?:string, Description?:string, Source?:string, DataType?:string, AllowedValues?:string, ApplyType?:"static"|"dynamic", IsModifiable?:bool, MinimumEngineVersion?:string}>, Marker?:string}>
     */
    public function describeClusterParametersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterSecurityGroupName?:string, MaxRecords?:int, Marker?:string, TagKeys?:array<string>, TagValues?:array<string>} $args
     * @return \AWS\Result<array{Marker?:string, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Description?:string, EC2SecurityGroups?:array<array{Status?:string, EC2SecurityGroupName?:string, EC2SecurityGroupOwnerId?:string, Tags?:array<array{Key?:string, Value?:string}>}>, IPRanges?:array<array{Status?:string, CIDRIP?:string, Tags?:array<array{Key?:string, Value?:string}>}>, Tags?:array<array{Key?:string, Value?:string}>}>}>
     */
    public function describeClusterSecurityGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{ClusterSecurityGroupName?:string, MaxRecords?:int, Marker?:string, TagKeys?:array<string>, TagValues?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Description?:string, EC2SecurityGroups?:array<array{Status?:string, EC2SecurityGroupName?:string, EC2SecurityGroupOwnerId?:string, Tags?:array<array{Key?:string, Value?:string}>}>, IPRanges?:array<array{Status?:string, CIDRIP?:string, Tags?:array<array{Key?:string, Value?:string}>}>, Tags?:array<array{Key?:string, Value?:string}>}>}>
     */
    public function describeClusterSecurityGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier?:string, SnapshotIdentifier?:string, SnapshotArn?:string, SnapshotType?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, MaxRecords?:int, Marker?:string, OwnerAccount?:string, TagKeys?:array<string>, TagValues?:array<string>, ClusterExists?:bool, SortingEntities?:array<array{Attribute:"SOURCE_TYPE"|"TOTAL_SIZE"|"CREATE_TIME", SortOrder?:"ASC"|"DESC"}>} $args
     * @return \AWS\Result<array{Marker?:string, Snapshots?:array<array{SnapshotIdentifier?:string, ClusterIdentifier?:string, SnapshotCreateTime?:int|string|\DateTimeInterface, Status?:string, Port?:int, AvailabilityZone?:string, ClusterCreateTime?:int|string|\DateTimeInterface, MasterUsername?:string, ClusterVersion?:string, EngineFullVersion?:string, SnapshotType?:string, NodeType?:string, NumberOfNodes?:int, DBName?:string, VpcId?:string, Encrypted?:bool, KmsKeyId?:string, EncryptedWithHSM?:bool, AccountsWithRestoreAccess?:array<array{AccountId?:string, AccountAlias?:string}>, OwnerAccount?:string, TotalBackupSizeInMegaBytes?:float, ActualIncrementalBackupSizeInMegaBytes?:float, BackupProgressInMegaBytes?:float, CurrentBackupRateInMegaBytesPerSecond?:float, EstimatedSecondsToCompletion?:int, ElapsedTimeInSeconds?:int, SourceRegion?:string, Tags?:array<array{Key?:string, Value?:string}>, RestorableNodeTypes?:array<string>, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, ManualSnapshotRetentionPeriod?:int, ManualSnapshotRemainingDays?:int, SnapshotRetentionStartTime?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, SnapshotArn?:string}>}>
     */
    public function describeClusterSnapshots(array $args = []): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier?:string, SnapshotIdentifier?:string, SnapshotArn?:string, SnapshotType?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, MaxRecords?:int, Marker?:string, OwnerAccount?:string, TagKeys?:array<string>, TagValues?:array<string>, ClusterExists?:bool, SortingEntities?:array<array{Attribute:"SOURCE_TYPE"|"TOTAL_SIZE"|"CREATE_TIME", SortOrder?:"ASC"|"DESC"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, Snapshots?:array<array{SnapshotIdentifier?:string, ClusterIdentifier?:string, SnapshotCreateTime?:int|string|\DateTimeInterface, Status?:string, Port?:int, AvailabilityZone?:string, ClusterCreateTime?:int|string|\DateTimeInterface, MasterUsername?:string, ClusterVersion?:string, EngineFullVersion?:string, SnapshotType?:string, NodeType?:string, NumberOfNodes?:int, DBName?:string, VpcId?:string, Encrypted?:bool, KmsKeyId?:string, EncryptedWithHSM?:bool, AccountsWithRestoreAccess?:array<array{AccountId?:string, AccountAlias?:string}>, OwnerAccount?:string, TotalBackupSizeInMegaBytes?:float, ActualIncrementalBackupSizeInMegaBytes?:float, BackupProgressInMegaBytes?:float, CurrentBackupRateInMegaBytesPerSecond?:float, EstimatedSecondsToCompletion?:int, ElapsedTimeInSeconds?:int, SourceRegion?:string, Tags?:array<array{Key?:string, Value?:string}>, RestorableNodeTypes?:array<string>, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, ManualSnapshotRetentionPeriod?:int, ManualSnapshotRemainingDays?:int, SnapshotRetentionStartTime?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, SnapshotArn?:string}>}>
     */
    public function describeClusterSnapshotsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterSubnetGroupName?:string, MaxRecords?:int, Marker?:string, TagKeys?:array<string>, TagValues?:array<string>} $args
     * @return \AWS\Result<array{Marker?:string, ClusterSubnetGroups?:array<array{ClusterSubnetGroupName?:string, Description?:string, VpcId?:string, SubnetGroupStatus?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:array{Name?:string, SupportedPlatforms?:array<array{Name?:string}>}, SubnetStatus?:string}>, Tags?:array<array{Key?:string, Value?:string}>, SupportedClusterIpAddressTypes?:array<string>}>}>
     */
    public function describeClusterSubnetGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{ClusterSubnetGroupName?:string, MaxRecords?:int, Marker?:string, TagKeys?:array<string>, TagValues?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, ClusterSubnetGroups?:array<array{ClusterSubnetGroupName?:string, Description?:string, VpcId?:string, SubnetGroupStatus?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:array{Name?:string, SupportedPlatforms?:array<array{Name?:string}>}, SubnetStatus?:string}>, Tags?:array<array{Key?:string, Value?:string}>, SupportedClusterIpAddressTypes?:array<string>}>}>
     */
    public function describeClusterSubnetGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaintenanceTrackName?:string, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{MaintenanceTracks?:array<array{MaintenanceTrackName?:string, DatabaseVersion?:string, UpdateTargets?:array<array{MaintenanceTrackName?:string, DatabaseVersion?:string, SupportedOperations?:array<array{OperationName?:string}>}>}>, Marker?:string}>
     */
    public function describeClusterTracks(array $args = []): \AWS\Result { }

    /**
     * @param array{MaintenanceTrackName?:string, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MaintenanceTracks?:array<array{MaintenanceTrackName?:string, DatabaseVersion?:string, UpdateTargets?:array<array{MaintenanceTrackName?:string, DatabaseVersion?:string, SupportedOperations?:array<array{OperationName?:string}>}>}>, Marker?:string}>
     */
    public function describeClusterTracksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterVersion?:string, ClusterParameterGroupFamily?:string, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{Marker?:string, ClusterVersions?:array<array{ClusterVersion?:string, ClusterParameterGroupFamily?:string, Description?:string}>}>
     */
    public function describeClusterVersions(array $args = []): \AWS\Result { }

    /**
     * @param array{ClusterVersion?:string, ClusterParameterGroupFamily?:string, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, ClusterVersions?:array<array{ClusterVersion?:string, ClusterParameterGroupFamily?:string, Description?:string}>}>
     */
    public function describeClusterVersionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier?:string, MaxRecords?:int, Marker?:string, TagKeys?:array<string>, TagValues?:array<string>} $args
     * @return \AWS\Result<array{Marker?:string, Clusters?:array<array{ClusterIdentifier?:string, NodeType?:string, ClusterStatus?:string, ClusterAvailabilityStatus?:string, ModifyStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}>}, ClusterCreateTime?:int|string|\DateTimeInterface, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, ClusterParameterGroups?:array<array{ParameterGroupName?:string, ParameterApplyStatus?:string, ClusterParameterStatusList?:array<array{ParameterName?:string, ParameterApplyStatus?:string, ParameterApplyErrorDescription?:string}>}>, ClusterSubnetGroupName?:string, VpcId?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{MasterUserPassword?:string, NodeType?:string, NumberOfNodes?:int, ClusterType?:string, ClusterVersion?:string, AutomatedSnapshotRetentionPeriod?:int, ClusterIdentifier?:string, PubliclyAccessible?:bool, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, EncryptionType?:string}, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, RestoreStatus?:array{Status?:string, CurrentRestoreRateInMegaBytesPerSecond?:float, SnapshotSizeInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int}, DataTransferProgress?:array{Status?:string, CurrentRateInMegaBytesPerSecond?:float, TotalDataInMegaBytes?:int, DataTransferredInMegaBytes?:int, EstimatedTimeToCompletionInSeconds?:int, ElapsedTimeInSeconds?:int}, HsmStatus?:array{HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, Status?:string}, ClusterSnapshotCopyStatus?:array{DestinationRegion?:string, RetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, SnapshotCopyGrantName?:string}, ClusterPublicKey?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>, ElasticIpStatus?:array{ElasticIp?:string, Status?:string}, ClusterRevisionNumber?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, IamRoles?:array<array{IamRoleArn?:string, ApplyStatus?:string}>, PendingActions?:array<string>, MaintenanceTrackName?:string, ElasticResizeNumberOfNodeOptions?:string, DeferredMaintenanceWindows?:array<array{DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface}>, SnapshotScheduleIdentifier?:string, SnapshotScheduleState?:"MODIFYING"|"ACTIVE"|"FAILED", ExpectedNextSnapshotScheduleTime?:int|string|\DateTimeInterface, ExpectedNextSnapshotScheduleTimeStatus?:string, NextMaintenanceWindowStartTime?:int|string|\DateTimeInterface, ResizeInfo?:array{ResizeType?:string, AllowCancelResize?:bool}, AvailabilityZoneRelocationStatus?:string, ClusterNamespaceArn?:string, TotalStorageCapacityInMegaBytes?:int, AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}, DefaultIamRoleArn?:string, ReservedNodeExchangeStatus?:array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}, CustomDomainName?:string, CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:string, MultiAZSecondary?:array{AvailabilityZone?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>}}>}>
     */
    public function describeClusters(array $args = []): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier?:string, MaxRecords?:int, Marker?:string, TagKeys?:array<string>, TagValues?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, Clusters?:array<array{ClusterIdentifier?:string, NodeType?:string, ClusterStatus?:string, ClusterAvailabilityStatus?:string, ModifyStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}>}, ClusterCreateTime?:int|string|\DateTimeInterface, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, ClusterParameterGroups?:array<array{ParameterGroupName?:string, ParameterApplyStatus?:string, ClusterParameterStatusList?:array<array{ParameterName?:string, ParameterApplyStatus?:string, ParameterApplyErrorDescription?:string}>}>, ClusterSubnetGroupName?:string, VpcId?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{MasterUserPassword?:string, NodeType?:string, NumberOfNodes?:int, ClusterType?:string, ClusterVersion?:string, AutomatedSnapshotRetentionPeriod?:int, ClusterIdentifier?:string, PubliclyAccessible?:bool, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, EncryptionType?:string}, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, RestoreStatus?:array{Status?:string, CurrentRestoreRateInMegaBytesPerSecond?:float, SnapshotSizeInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int}, DataTransferProgress?:array{Status?:string, CurrentRateInMegaBytesPerSecond?:float, TotalDataInMegaBytes?:int, DataTransferredInMegaBytes?:int, EstimatedTimeToCompletionInSeconds?:int, ElapsedTimeInSeconds?:int}, HsmStatus?:array{HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, Status?:string}, ClusterSnapshotCopyStatus?:array{DestinationRegion?:string, RetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, SnapshotCopyGrantName?:string}, ClusterPublicKey?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>, ElasticIpStatus?:array{ElasticIp?:string, Status?:string}, ClusterRevisionNumber?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, IamRoles?:array<array{IamRoleArn?:string, ApplyStatus?:string}>, PendingActions?:array<string>, MaintenanceTrackName?:string, ElasticResizeNumberOfNodeOptions?:string, DeferredMaintenanceWindows?:array<array{DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface}>, SnapshotScheduleIdentifier?:string, SnapshotScheduleState?:"MODIFYING"|"ACTIVE"|"FAILED", ExpectedNextSnapshotScheduleTime?:int|string|\DateTimeInterface, ExpectedNextSnapshotScheduleTimeStatus?:string, NextMaintenanceWindowStartTime?:int|string|\DateTimeInterface, ResizeInfo?:array{ResizeType?:string, AllowCancelResize?:bool}, AvailabilityZoneRelocationStatus?:string, ClusterNamespaceArn?:string, TotalStorageCapacityInMegaBytes?:int, AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}, DefaultIamRoleArn?:string, ReservedNodeExchangeStatus?:array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}, CustomDomainName?:string, CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:string, MultiAZSecondary?:array{AvailabilityZone?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>}}>}>
     */
    public function describeClustersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CustomDomainName?:string, CustomDomainCertificateArn?:string, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{Marker?:string, Associations?:array<array{CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, CertificateAssociations?:array<array{CustomDomainName?:string, ClusterIdentifier?:string}>}>}>
     */
    public function describeCustomDomainAssociations(array $args = []): \AWS\Result { }

    /**
     * @param array{CustomDomainName?:string, CustomDomainCertificateArn?:string, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, Associations?:array<array{CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, CertificateAssociations?:array<array{CustomDomainName?:string, ClusterIdentifier?:string}>}>}>
     */
    public function describeCustomDomainAssociationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DataShareArn?:string, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{DataShares?:array<array{DataShareArn?:string, ProducerArn?:string, AllowPubliclyAccessibleConsumers?:bool, DataShareAssociations?:array<array{ConsumerIdentifier?:string, Status?:"ACTIVE"|"PENDING_AUTHORIZATION"|"AUTHORIZED"|"DEAUTHORIZED"|"REJECTED"|"AVAILABLE", ConsumerRegion?:string, CreatedDate?:int|string|\DateTimeInterface, StatusChangeDate?:int|string|\DateTimeInterface, ProducerAllowedWrites?:bool, ConsumerAcceptedWrites?:bool}>, ManagedBy?:string, DataShareType?:"INTERNAL"}>, Marker?:string}>
     */
    public function describeDataShares(array $args = []): \AWS\Result { }

    /**
     * @param array{DataShareArn?:string, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DataShares?:array<array{DataShareArn?:string, ProducerArn?:string, AllowPubliclyAccessibleConsumers?:bool, DataShareAssociations?:array<array{ConsumerIdentifier?:string, Status?:"ACTIVE"|"PENDING_AUTHORIZATION"|"AUTHORIZED"|"DEAUTHORIZED"|"REJECTED"|"AVAILABLE", ConsumerRegion?:string, CreatedDate?:int|string|\DateTimeInterface, StatusChangeDate?:int|string|\DateTimeInterface, ProducerAllowedWrites?:bool, ConsumerAcceptedWrites?:bool}>, ManagedBy?:string, DataShareType?:"INTERNAL"}>, Marker?:string}>
     */
    public function describeDataSharesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConsumerArn?:string, Status?:"ACTIVE"|"AVAILABLE", MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{DataShares?:array<array{DataShareArn?:string, ProducerArn?:string, AllowPubliclyAccessibleConsumers?:bool, DataShareAssociations?:array<array{ConsumerIdentifier?:string, Status?:"ACTIVE"|"PENDING_AUTHORIZATION"|"AUTHORIZED"|"DEAUTHORIZED"|"REJECTED"|"AVAILABLE", ConsumerRegion?:string, CreatedDate?:int|string|\DateTimeInterface, StatusChangeDate?:int|string|\DateTimeInterface, ProducerAllowedWrites?:bool, ConsumerAcceptedWrites?:bool}>, ManagedBy?:string, DataShareType?:"INTERNAL"}>, Marker?:string}>
     */
    public function describeDataSharesForConsumer(array $args = []): \AWS\Result { }

    /**
     * @param array{ConsumerArn?:string, Status?:"ACTIVE"|"AVAILABLE", MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DataShares?:array<array{DataShareArn?:string, ProducerArn?:string, AllowPubliclyAccessibleConsumers?:bool, DataShareAssociations?:array<array{ConsumerIdentifier?:string, Status?:"ACTIVE"|"PENDING_AUTHORIZATION"|"AUTHORIZED"|"DEAUTHORIZED"|"REJECTED"|"AVAILABLE", ConsumerRegion?:string, CreatedDate?:int|string|\DateTimeInterface, StatusChangeDate?:int|string|\DateTimeInterface, ProducerAllowedWrites?:bool, ConsumerAcceptedWrites?:bool}>, ManagedBy?:string, DataShareType?:"INTERNAL"}>, Marker?:string}>
     */
    public function describeDataSharesForConsumerAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProducerArn?:string, Status?:"ACTIVE"|"AUTHORIZED"|"PENDING_AUTHORIZATION"|"DEAUTHORIZED"|"REJECTED", MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{DataShares?:array<array{DataShareArn?:string, ProducerArn?:string, AllowPubliclyAccessibleConsumers?:bool, DataShareAssociations?:array<array{ConsumerIdentifier?:string, Status?:"ACTIVE"|"PENDING_AUTHORIZATION"|"AUTHORIZED"|"DEAUTHORIZED"|"REJECTED"|"AVAILABLE", ConsumerRegion?:string, CreatedDate?:int|string|\DateTimeInterface, StatusChangeDate?:int|string|\DateTimeInterface, ProducerAllowedWrites?:bool, ConsumerAcceptedWrites?:bool}>, ManagedBy?:string, DataShareType?:"INTERNAL"}>, Marker?:string}>
     */
    public function describeDataSharesForProducer(array $args = []): \AWS\Result { }

    /**
     * @param array{ProducerArn?:string, Status?:"ACTIVE"|"AUTHORIZED"|"PENDING_AUTHORIZATION"|"DEAUTHORIZED"|"REJECTED", MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DataShares?:array<array{DataShareArn?:string, ProducerArn?:string, AllowPubliclyAccessibleConsumers?:bool, DataShareAssociations?:array<array{ConsumerIdentifier?:string, Status?:"ACTIVE"|"PENDING_AUTHORIZATION"|"AUTHORIZED"|"DEAUTHORIZED"|"REJECTED"|"AVAILABLE", ConsumerRegion?:string, CreatedDate?:int|string|\DateTimeInterface, StatusChangeDate?:int|string|\DateTimeInterface, ProducerAllowedWrites?:bool, ConsumerAcceptedWrites?:bool}>, ManagedBy?:string, DataShareType?:"INTERNAL"}>, Marker?:string}>
     */
    public function describeDataSharesForProducerAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ParameterGroupFamily:string, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{DefaultClusterParameters?:array{ParameterGroupFamily?:string, Marker?:string, Parameters?:array<array{ParameterName?:string, ParameterValue?:string, Description?:string, Source?:string, DataType?:string, AllowedValues?:string, ApplyType?:"static"|"dynamic", IsModifiable?:bool, MinimumEngineVersion?:string}>}}>
     */
    public function describeDefaultClusterParameters(array $args): \AWS\Result { }

    /**
     * @param array{ParameterGroupFamily:string, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DefaultClusterParameters?:array{ParameterGroupFamily?:string, Marker?:string, Parameters?:array<array{ParameterName?:string, ParameterValue?:string, Description?:string, Source?:string, DataType?:string, AllowedValues?:string, ApplyType?:"static"|"dynamic", IsModifiable?:bool, MinimumEngineVersion?:string}>}}>
     */
    public function describeDefaultClusterParametersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier?:string, ResourceOwner?:string, EndpointName?:string, VpcId?:string, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{EndpointAccessList?:mixed, Marker?:string}>
     */
    public function describeEndpointAccess(array $args = []): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier?:string, ResourceOwner?:string, EndpointName?:string, VpcId?:string, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EndpointAccessList?:mixed, Marker?:string}>
     */
    public function describeEndpointAccessAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier?:string, Account?:string, Grantee?:bool, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{EndpointAuthorizationList?:mixed, Marker?:string}>
     */
    public function describeEndpointAuthorization(array $args = []): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier?:string, Account?:string, Grantee?:bool, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EndpointAuthorizationList?:mixed, Marker?:string}>
     */
    public function describeEndpointAuthorizationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SourceType?:string} $args
     * @return \AWS\Result<array{EventCategoriesMapList?:array<array{SourceType?:string, Events?:array<array{EventId?:string, EventCategories?:array<string>, EventDescription?:string, Severity?:string}>}>}>
     */
    public function describeEventCategories(array $args = []): \AWS\Result { }

    /**
     * @param array{SourceType?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventCategoriesMapList?:array<array{SourceType?:string, Events?:array<array{EventId?:string, EventCategories?:array<string>, EventDescription?:string, Severity?:string}>}>}>
     */
    public function describeEventCategoriesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SubscriptionName?:string, MaxRecords?:int, Marker?:string, TagKeys?:array<string>, TagValues?:array<string>} $args
     * @return \AWS\Result<array{Marker?:string, EventSubscriptionsList?:array<array{CustomerAwsId?:string, CustSubscriptionId?:string, SnsTopicArn?:string, Status?:string, SubscriptionCreationTime?:int|string|\DateTimeInterface, SourceType?:string, SourceIdsList?:array<string>, EventCategoriesList?:array<string>, Severity?:string, Enabled?:bool, Tags?:array<array{Key?:string, Value?:string}>}>}>
     */
    public function describeEventSubscriptions(array $args = []): \AWS\Result { }

    /**
     * @param array{SubscriptionName?:string, MaxRecords?:int, Marker?:string, TagKeys?:array<string>, TagValues?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, EventSubscriptionsList?:array<array{CustomerAwsId?:string, CustSubscriptionId?:string, SnsTopicArn?:string, Status?:string, SubscriptionCreationTime?:int|string|\DateTimeInterface, SourceType?:string, SourceIdsList?:array<string>, EventCategoriesList?:array<string>, Severity?:string, Enabled?:bool, Tags?:array<array{Key?:string, Value?:string}>}>}>
     */
    public function describeEventSubscriptionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SourceIdentifier?:string, SourceType?:"cluster"|"cluster-parameter-group"|"cluster-security-group"|"cluster-snapshot"|"scheduled-action", StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Duration?:int, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{Marker?:string, Events?:array<array{SourceIdentifier?:string, SourceType?:"cluster"|"cluster-parameter-group"|"cluster-security-group"|"cluster-snapshot"|"scheduled-action", Message?:string, EventCategories?:array<string>, Severity?:string, Date?:int|string|\DateTimeInterface, EventId?:string}>}>
     */
    public function describeEvents(array $args = []): \AWS\Result { }

    /**
     * @param array{SourceIdentifier?:string, SourceType?:"cluster"|"cluster-parameter-group"|"cluster-security-group"|"cluster-snapshot"|"scheduled-action", StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Duration?:int, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, Events?:array<array{SourceIdentifier?:string, SourceType?:"cluster"|"cluster-parameter-group"|"cluster-security-group"|"cluster-snapshot"|"scheduled-action", Message?:string, EventCategories?:array<string>, Severity?:string, Date?:int|string|\DateTimeInterface, EventId?:string}>}>
     */
    public function describeEventsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HsmClientCertificateIdentifier?:string, MaxRecords?:int, Marker?:string, TagKeys?:array<string>, TagValues?:array<string>} $args
     * @return \AWS\Result<array{Marker?:string, HsmClientCertificates?:array<array{HsmClientCertificateIdentifier?:string, HsmClientCertificatePublicKey?:string, Tags?:array<array{Key?:string, Value?:string}>}>}>
     */
    public function describeHsmClientCertificates(array $args = []): \AWS\Result { }

    /**
     * @param array{HsmClientCertificateIdentifier?:string, MaxRecords?:int, Marker?:string, TagKeys?:array<string>, TagValues?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, HsmClientCertificates?:array<array{HsmClientCertificateIdentifier?:string, HsmClientCertificatePublicKey?:string, Tags?:array<array{Key?:string, Value?:string}>}>}>
     */
    public function describeHsmClientCertificatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HsmConfigurationIdentifier?:string, MaxRecords?:int, Marker?:string, TagKeys?:array<string>, TagValues?:array<string>} $args
     * @return \AWS\Result<array{Marker?:string, HsmConfigurations?:array<array{HsmConfigurationIdentifier?:string, Description?:string, HsmIpAddress?:string, HsmPartitionName?:string, Tags?:array<array{Key?:string, Value?:string}>}>}>
     */
    public function describeHsmConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{HsmConfigurationIdentifier?:string, MaxRecords?:int, Marker?:string, TagKeys?:array<string>, TagValues?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, HsmConfigurations?:array<array{HsmConfigurationIdentifier?:string, Description?:string, HsmIpAddress?:string, HsmPartitionName?:string, Tags?:array<array{Key?:string, Value?:string}>}>}>
     */
    public function describeHsmConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IntegrationArn?:string, TargetArn?:string, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{Marker?:string, InboundIntegrations?:array<array{IntegrationArn?:string, SourceArn?:string, TargetArn?:string, Status?:"creating"|"active"|"modifying"|"failed"|"deleting"|"syncing"|"needs_attention", Errors?:array<array{ErrorCode:string, ErrorMessage?:string}>, CreateTime?:int|string|\DateTimeInterface}>}>
     */
    public function describeInboundIntegrations(array $args = []): \AWS\Result { }

    /**
     * @param array{IntegrationArn?:string, TargetArn?:string, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, InboundIntegrations?:array<array{IntegrationArn?:string, SourceArn?:string, TargetArn?:string, Status?:"creating"|"active"|"modifying"|"failed"|"deleting"|"syncing"|"needs_attention", Errors?:array<array{ErrorCode:string, ErrorMessage?:string}>, CreateTime?:int|string|\DateTimeInterface}>}>
     */
    public function describeInboundIntegrationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IntegrationArn?:string, MaxRecords?:int, Marker?:string, Filters?:array<array{Name:"integration-arn"|"source-arn"|"source-types"|"status", Values:array<string>}>} $args
     * @return \AWS\Result<array{Marker?:string, Integrations?:array<array{IntegrationArn?:string, IntegrationName?:string, SourceArn?:string, TargetArn?:string, Status?:"creating"|"active"|"modifying"|"failed"|"deleting"|"syncing"|"needs_attention", Errors?:array<array{ErrorCode:string, ErrorMessage?:string}>, CreateTime?:int|string|\DateTimeInterface, Description?:string, KMSKeyId?:string, AdditionalEncryptionContext?:array<string, string>, Tags?:array<array{Key?:string, Value?:string}>}>}>
     */
    public function describeIntegrations(array $args = []): \AWS\Result { }

    /**
     * @param array{IntegrationArn?:string, MaxRecords?:int, Marker?:string, Filters?:array<array{Name:"integration-arn"|"source-arn"|"source-types"|"status", Values:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, Integrations?:array<array{IntegrationArn?:string, IntegrationName?:string, SourceArn?:string, TargetArn?:string, Status?:"creating"|"active"|"modifying"|"failed"|"deleting"|"syncing"|"needs_attention", Errors?:array<array{ErrorCode:string, ErrorMessage?:string}>, CreateTime?:int|string|\DateTimeInterface, Description?:string, KMSKeyId?:string, AdditionalEncryptionContext?:array<string, string>, Tags?:array<array{Key?:string, Value?:string}>}>}>
     */
    public function describeIntegrationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier:string} $args
     * @return \AWS\Result<array{LoggingEnabled?:bool, BucketName?:string, S3KeyPrefix?:string, LastSuccessfulDeliveryTime?:int|string|\DateTimeInterface, LastFailureTime?:int|string|\DateTimeInterface, LastFailureMessage?:string, LogDestinationType?:"s3"|"cloudwatch", LogExports?:array<string>}>
     */
    public function describeLoggingStatus(array $args): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LoggingEnabled?:bool, BucketName?:string, S3KeyPrefix?:string, LastSuccessfulDeliveryTime?:int|string|\DateTimeInterface, LastFailureTime?:int|string|\DateTimeInterface, LastFailureMessage?:string, LogDestinationType?:"s3"|"cloudwatch", LogExports?:array<string>}>
     */
    public function describeLoggingStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ActionType:"restore-cluster"|"recommend-node-config"|"resize-cluster", ClusterIdentifier?:string, SnapshotIdentifier?:string, SnapshotArn?:string, OwnerAccount?:string, Filters?:array<array{Name?:"NodeType"|"NumberOfNodes"|"EstimatedDiskUtilizationPercent"|"Mode", Operator?:"eq"|"lt"|"gt"|"le"|"ge"|"in"|"between", Values?:array<string>}>, Marker?:string, MaxRecords?:int} $args
     * @return \AWS\Result<array{NodeConfigurationOptionList?:array<array{NodeType?:string, NumberOfNodes?:int, EstimatedDiskUtilizationPercent?:float, Mode?:"standard"|"high-performance"}>, Marker?:string}>
     */
    public function describeNodeConfigurationOptions(array $args): \AWS\Result { }

    /**
     * @param array{ActionType:"restore-cluster"|"recommend-node-config"|"resize-cluster", ClusterIdentifier?:string, SnapshotIdentifier?:string, SnapshotArn?:string, OwnerAccount?:string, Filters?:array<array{Name?:"NodeType"|"NumberOfNodes"|"EstimatedDiskUtilizationPercent"|"Mode", Operator?:"eq"|"lt"|"gt"|"le"|"ge"|"in"|"between", Values?:array<string>}>, Marker?:string, MaxRecords?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NodeConfigurationOptionList?:array<array{NodeType?:string, NumberOfNodes?:int, EstimatedDiskUtilizationPercent?:float, Mode?:"standard"|"high-performance"}>, Marker?:string}>
     */
    public function describeNodeConfigurationOptionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterVersion?:string, NodeType?:string, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{OrderableClusterOptions?:array<array{ClusterVersion?:string, ClusterType?:string, NodeType?:string, AvailabilityZones?:array<array{Name?:string, SupportedPlatforms?:array<array{Name?:string}>}>}>, Marker?:string}>
     */
    public function describeOrderableClusterOptions(array $args = []): \AWS\Result { }

    /**
     * @param array{ClusterVersion?:string, NodeType?:string, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{OrderableClusterOptions?:array<array{ClusterVersion?:string, ClusterType?:string, NodeType?:string, AvailabilityZones?:array<array{Name?:string, SupportedPlatforms?:array<array{Name?:string}>}>}>, Marker?:string}>
     */
    public function describeOrderableClusterOptionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, ClusterIdentifier:string, DatabaseName?:string, PartnerName?:string} $args
     * @return \AWS\Result<array{PartnerIntegrationInfoList?:array<array{DatabaseName?:string, PartnerName?:string, Status?:"Active"|"Inactive"|"RuntimeFailure"|"ConnectionFailure", StatusMessage?:string, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface}>}>
     */
    public function describePartners(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, ClusterIdentifier:string, DatabaseName?:string, PartnerName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PartnerIntegrationInfoList?:array<array{DatabaseName?:string, PartnerName?:string, Status?:"Active"|"Inactive"|"RuntimeFailure"|"ConnectionFailure", StatusMessage?:string, CreatedAt?:int|string|\DateTimeInterface, UpdatedAt?:int|string|\DateTimeInterface}>}>
     */
    public function describePartnersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RedshiftIdcApplicationArn?:string, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{RedshiftIdcApplications?:array<array{IdcInstanceArn?:string, RedshiftIdcApplicationName?:string, RedshiftIdcApplicationArn?:string, IdentityNamespace?:string, IdcDisplayName?:string, IamRoleArn?:string, IdcManagedApplicationArn?:string, IdcOnboardStatus?:string, AuthorizedTokenIssuerList?:array<array{TrustedTokenIssuerArn?:string, AuthorizedAudiencesList?:array<string>}>, ServiceIntegrations?:array<array{LakeFormation?:array<array{LakeFormationQuery?:array{Authorization:"Enabled"|"Disabled"}}>, S3AccessGrants?:array<array{ReadWriteAccess?:array{Authorization:"Enabled"|"Disabled"}}>}>}>, Marker?:string}>
     */
    public function describeRedshiftIdcApplications(array $args = []): \AWS\Result { }

    /**
     * @param array{RedshiftIdcApplicationArn?:string, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RedshiftIdcApplications?:array<array{IdcInstanceArn?:string, RedshiftIdcApplicationName?:string, RedshiftIdcApplicationArn?:string, IdentityNamespace?:string, IdcDisplayName?:string, IamRoleArn?:string, IdcManagedApplicationArn?:string, IdcOnboardStatus?:string, AuthorizedTokenIssuerList?:array<array{TrustedTokenIssuerArn?:string, AuthorizedAudiencesList?:array<string>}>, ServiceIntegrations?:array<array{LakeFormation?:array<array{LakeFormationQuery?:array{Authorization:"Enabled"|"Disabled"}}>, S3AccessGrants?:array<array{ReadWriteAccess?:array{Authorization:"Enabled"|"Disabled"}}>}>}>, Marker?:string}>
     */
    public function describeRedshiftIdcApplicationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ReservedNodeId?:string, ReservedNodeExchangeRequestId?:string, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{ReservedNodeExchangeStatusDetails?:array<array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}>, Marker?:string}>
     */
    public function describeReservedNodeExchangeStatus(array $args = []): \AWS\Result { }

    /**
     * @param array{ReservedNodeId?:string, ReservedNodeExchangeRequestId?:string, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReservedNodeExchangeStatusDetails?:array<array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}>, Marker?:string}>
     */
    public function describeReservedNodeExchangeStatusAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ReservedNodeOfferingId?:string, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{Marker?:string, ReservedNodeOfferings?:array<array{ReservedNodeOfferingId?:string, NodeType?:string, Duration?:int, FixedPrice?:float, UsagePrice?:float, CurrencyCode?:string, OfferingType?:string, RecurringCharges?:array<array{RecurringChargeAmount?:float, RecurringChargeFrequency?:string}>, ReservedNodeOfferingType?:"Regular"|"Upgradable"}>}>
     */
    public function describeReservedNodeOfferings(array $args = []): \AWS\Result { }

    /**
     * @param array{ReservedNodeOfferingId?:string, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, ReservedNodeOfferings?:array<array{ReservedNodeOfferingId?:string, NodeType?:string, Duration?:int, FixedPrice?:float, UsagePrice?:float, CurrencyCode?:string, OfferingType?:string, RecurringCharges?:array<array{RecurringChargeAmount?:float, RecurringChargeFrequency?:string}>, ReservedNodeOfferingType?:"Regular"|"Upgradable"}>}>
     */
    public function describeReservedNodeOfferingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ReservedNodeId?:string, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{Marker?:string, ReservedNodes?:array<array{ReservedNodeId?:string, ReservedNodeOfferingId?:string, NodeType?:string, StartTime?:int|string|\DateTimeInterface, Duration?:int, FixedPrice?:float, UsagePrice?:float, CurrencyCode?:string, NodeCount?:int, State?:string, OfferingType?:string, RecurringCharges?:array<array{RecurringChargeAmount?:float, RecurringChargeFrequency?:string}>, ReservedNodeOfferingType?:"Regular"|"Upgradable"}>}>
     */
    public function describeReservedNodes(array $args = []): \AWS\Result { }

    /**
     * @param array{ReservedNodeId?:string, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, ReservedNodes?:array<array{ReservedNodeId?:string, ReservedNodeOfferingId?:string, NodeType?:string, StartTime?:int|string|\DateTimeInterface, Duration?:int, FixedPrice?:float, UsagePrice?:float, CurrencyCode?:string, NodeCount?:int, State?:string, OfferingType?:string, RecurringCharges?:array<array{RecurringChargeAmount?:float, RecurringChargeFrequency?:string}>, ReservedNodeOfferingType?:"Regular"|"Upgradable"}>}>
     */
    public function describeReservedNodesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier:string} $args
     * @return \AWS\Result<array{TargetNodeType?:string, TargetNumberOfNodes?:int, TargetClusterType?:string, Status?:string, ImportTablesCompleted?:array<string>, ImportTablesInProgress?:array<string>, ImportTablesNotStarted?:array<string>, AvgResizeRateInMegaBytesPerSecond?:float, TotalResizeDataInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int, ResizeType?:string, Message?:string, TargetEncryptionType?:string, DataTransferProgressPercent?:float}>
     */
    public function describeResize(array $args): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TargetNodeType?:string, TargetNumberOfNodes?:int, TargetClusterType?:string, Status?:string, ImportTablesCompleted?:array<string>, ImportTablesInProgress?:array<string>, ImportTablesNotStarted?:array<string>, AvgResizeRateInMegaBytesPerSecond?:float, TotalResizeDataInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int, ResizeType?:string, Message?:string, TargetEncryptionType?:string, DataTransferProgressPercent?:float}>
     */
    public function describeResizeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ScheduledActionName?:string, TargetActionType?:"ResizeCluster"|"PauseCluster"|"ResumeCluster", StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Active?:bool, Filters?:array<array{Name:"cluster-identifier"|"iam-role", Values:array<string>}>, Marker?:string, MaxRecords?:int} $args
     * @return \AWS\Result<array{Marker?:string, ScheduledActions?:array<array{ScheduledActionName?:string, TargetAction?:array{ResizeCluster?:array{ClusterIdentifier:string, ClusterType?:string, NodeType?:string, NumberOfNodes?:int, Classic?:bool, ReservedNodeId?:string, TargetReservedNodeOfferingId?:string}, PauseCluster?:array{ClusterIdentifier:string}, ResumeCluster?:array{ClusterIdentifier:string}}, Schedule?:string, IamRole?:string, ScheduledActionDescription?:string, State?:"ACTIVE"|"DISABLED", NextInvocations?:array<int|string|\DateTimeInterface>, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}>}>
     */
    public function describeScheduledActions(array $args = []): \AWS\Result { }

    /**
     * @param array{ScheduledActionName?:string, TargetActionType?:"ResizeCluster"|"PauseCluster"|"ResumeCluster", StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Active?:bool, Filters?:array<array{Name:"cluster-identifier"|"iam-role", Values:array<string>}>, Marker?:string, MaxRecords?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, ScheduledActions?:array<array{ScheduledActionName?:string, TargetAction?:array{ResizeCluster?:array{ClusterIdentifier:string, ClusterType?:string, NodeType?:string, NumberOfNodes?:int, Classic?:bool, ReservedNodeId?:string, TargetReservedNodeOfferingId?:string}, PauseCluster?:array{ClusterIdentifier:string}, ResumeCluster?:array{ClusterIdentifier:string}}, Schedule?:string, IamRole?:string, ScheduledActionDescription?:string, State?:"ACTIVE"|"DISABLED", NextInvocations?:array<int|string|\DateTimeInterface>, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}>}>
     */
    public function describeScheduledActionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SnapshotCopyGrantName?:string, MaxRecords?:int, Marker?:string, TagKeys?:array<string>, TagValues?:array<string>} $args
     * @return \AWS\Result<array{Marker?:string, SnapshotCopyGrants?:array<array{SnapshotCopyGrantName?:string, KmsKeyId?:string, Tags?:array<array{Key?:string, Value?:string}>}>}>
     */
    public function describeSnapshotCopyGrants(array $args = []): \AWS\Result { }

    /**
     * @param array{SnapshotCopyGrantName?:string, MaxRecords?:int, Marker?:string, TagKeys?:array<string>, TagValues?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, SnapshotCopyGrants?:array<array{SnapshotCopyGrantName?:string, KmsKeyId?:string, Tags?:array<array{Key?:string, Value?:string}>}>}>
     */
    public function describeSnapshotCopyGrantsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier?:string, ScheduleIdentifier?:string, TagKeys?:array<string>, TagValues?:array<string>, Marker?:string, MaxRecords?:int} $args
     * @return \AWS\Result<array{SnapshotSchedules?:array<array{ScheduleDefinitions?:array<string>, ScheduleIdentifier?:string, ScheduleDescription?:string, Tags?:array<array{Key?:string, Value?:string}>, NextInvocations?:array<int|string|\DateTimeInterface>, AssociatedClusterCount?:int, AssociatedClusters?:array<array{ClusterIdentifier?:string, ScheduleAssociationState?:"MODIFYING"|"ACTIVE"|"FAILED"}>}>, Marker?:string}>
     */
    public function describeSnapshotSchedules(array $args = []): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier?:string, ScheduleIdentifier?:string, TagKeys?:array<string>, TagValues?:array<string>, Marker?:string, MaxRecords?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{SnapshotSchedules?:array<array{ScheduleDefinitions?:array<string>, ScheduleIdentifier?:string, ScheduleDescription?:string, Tags?:array<array{Key?:string, Value?:string}>, NextInvocations?:array<int|string|\DateTimeInterface>, AssociatedClusterCount?:int, AssociatedClusters?:array<array{ClusterIdentifier?:string, ScheduleAssociationState?:"MODIFYING"|"ACTIVE"|"FAILED"}>}>, Marker?:string}>
     */
    public function describeSnapshotSchedulesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{TotalBackupSizeInMegaBytes?:float, TotalProvisionedStorageInMegaBytes?:float}>
     */
    public function describeStorage(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{TotalBackupSizeInMegaBytes?:float, TotalProvisionedStorageInMegaBytes?:float}>
     */
    public function describeStorageAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier?:string, TableRestoreRequestId?:string, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{TableRestoreStatusDetails?:array<array{TableRestoreRequestId?:string, Status?:"PENDING"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"CANCELED", Message?:string, RequestTime?:int|string|\DateTimeInterface, ProgressInMegaBytes?:int, TotalDataInMegaBytes?:int, ClusterIdentifier?:string, SnapshotIdentifier?:string, SourceDatabaseName?:string, SourceSchemaName?:string, SourceTableName?:string, TargetDatabaseName?:string, TargetSchemaName?:string, NewTableName?:string}>, Marker?:string}>
     */
    public function describeTableRestoreStatus(array $args = []): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier?:string, TableRestoreRequestId?:string, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TableRestoreStatusDetails?:array<array{TableRestoreRequestId?:string, Status?:"PENDING"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"CANCELED", Message?:string, RequestTime?:int|string|\DateTimeInterface, ProgressInMegaBytes?:int, TotalDataInMegaBytes?:int, ClusterIdentifier?:string, SnapshotIdentifier?:string, SourceDatabaseName?:string, SourceSchemaName?:string, SourceTableName?:string, TargetDatabaseName?:string, TargetSchemaName?:string, NewTableName?:string}>, Marker?:string}>
     */
    public function describeTableRestoreStatusAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceName?:string, ResourceType?:string, MaxRecords?:int, Marker?:string, TagKeys?:array<string>, TagValues?:array<string>} $args
     * @return \AWS\Result<array{TaggedResources?:array<array{Tag?:array{Key?:string, Value?:string}, ResourceName?:string, ResourceType?:string}>, Marker?:string}>
     */
    public function describeTags(array $args = []): \AWS\Result { }

    /**
     * @param array{ResourceName?:string, ResourceType?:string, MaxRecords?:int, Marker?:string, TagKeys?:array<string>, TagValues?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{TaggedResources?:array<array{Tag?:array{Key?:string, Value?:string}, ResourceName?:string, ResourceType?:string}>, Marker?:string}>
     */
    public function describeTagsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UsageLimitId?:string, ClusterIdentifier?:string, FeatureType?:"spectrum"|"concurrency-scaling"|"cross-region-datasharing", MaxRecords?:int, Marker?:string, TagKeys?:array<string>, TagValues?:array<string>} $args
     * @return \AWS\Result<array{UsageLimits?:array<array{UsageLimitId?:string, ClusterIdentifier?:string, FeatureType?:"spectrum"|"concurrency-scaling"|"cross-region-datasharing", LimitType?:"time"|"data-scanned", Amount?:int, Period?:"daily"|"weekly"|"monthly", BreachAction?:"log"|"emit-metric"|"disable", Tags?:array<array{Key?:string, Value?:string}>}>, Marker?:string}>
     */
    public function describeUsageLimits(array $args = []): \AWS\Result { }

    /**
     * @param array{UsageLimitId?:string, ClusterIdentifier?:string, FeatureType?:"spectrum"|"concurrency-scaling"|"cross-region-datasharing", MaxRecords?:int, Marker?:string, TagKeys?:array<string>, TagValues?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{UsageLimits?:array<array{UsageLimitId?:string, ClusterIdentifier?:string, FeatureType?:"spectrum"|"concurrency-scaling"|"cross-region-datasharing", LimitType?:"time"|"data-scanned", Amount?:int, Period?:"daily"|"weekly"|"monthly", BreachAction?:"log"|"emit-metric"|"disable", Tags?:array<array{Key?:string, Value?:string}>}>, Marker?:string}>
     */
    public function describeUsageLimitsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier:string} $args
     * @return \AWS\Result<array{LoggingEnabled?:bool, BucketName?:string, S3KeyPrefix?:string, LastSuccessfulDeliveryTime?:int|string|\DateTimeInterface, LastFailureTime?:int|string|\DateTimeInterface, LastFailureMessage?:string, LogDestinationType?:"s3"|"cloudwatch", LogExports?:array<string>}>
     */
    public function disableLogging(array $args): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LoggingEnabled?:bool, BucketName?:string, S3KeyPrefix?:string, LastSuccessfulDeliveryTime?:int|string|\DateTimeInterface, LastFailureTime?:int|string|\DateTimeInterface, LastFailureMessage?:string, LogDestinationType?:"s3"|"cloudwatch", LogExports?:array<string>}>
     */
    public function disableLoggingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier:string} $args
     * @return \AWS\Result<array{Cluster?:array{ClusterIdentifier?:string, NodeType?:string, ClusterStatus?:string, ClusterAvailabilityStatus?:string, ModifyStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}>}, ClusterCreateTime?:int|string|\DateTimeInterface, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, ClusterParameterGroups?:array<array{ParameterGroupName?:string, ParameterApplyStatus?:string, ClusterParameterStatusList?:array<array{ParameterName?:string, ParameterApplyStatus?:string, ParameterApplyErrorDescription?:string}>}>, ClusterSubnetGroupName?:string, VpcId?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{MasterUserPassword?:string, NodeType?:string, NumberOfNodes?:int, ClusterType?:string, ClusterVersion?:string, AutomatedSnapshotRetentionPeriod?:int, ClusterIdentifier?:string, PubliclyAccessible?:bool, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, EncryptionType?:string}, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, RestoreStatus?:array{Status?:string, CurrentRestoreRateInMegaBytesPerSecond?:float, SnapshotSizeInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int}, DataTransferProgress?:array{Status?:string, CurrentRateInMegaBytesPerSecond?:float, TotalDataInMegaBytes?:int, DataTransferredInMegaBytes?:int, EstimatedTimeToCompletionInSeconds?:int, ElapsedTimeInSeconds?:int}, HsmStatus?:array{HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, Status?:string}, ClusterSnapshotCopyStatus?:array{DestinationRegion?:string, RetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, SnapshotCopyGrantName?:string}, ClusterPublicKey?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>, ElasticIpStatus?:array{ElasticIp?:string, Status?:string}, ClusterRevisionNumber?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, IamRoles?:array<array{IamRoleArn?:string, ApplyStatus?:string}>, PendingActions?:array<string>, MaintenanceTrackName?:string, ElasticResizeNumberOfNodeOptions?:string, DeferredMaintenanceWindows?:array<array{DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface}>, SnapshotScheduleIdentifier?:string, SnapshotScheduleState?:"MODIFYING"|"ACTIVE"|"FAILED", ExpectedNextSnapshotScheduleTime?:int|string|\DateTimeInterface, ExpectedNextSnapshotScheduleTimeStatus?:string, NextMaintenanceWindowStartTime?:int|string|\DateTimeInterface, ResizeInfo?:array{ResizeType?:string, AllowCancelResize?:bool}, AvailabilityZoneRelocationStatus?:string, ClusterNamespaceArn?:string, TotalStorageCapacityInMegaBytes?:int, AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}, DefaultIamRoleArn?:string, ReservedNodeExchangeStatus?:array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}, CustomDomainName?:string, CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:string, MultiAZSecondary?:array{AvailabilityZone?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>}}}>
     */
    public function disableSnapshotCopy(array $args): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cluster?:array{ClusterIdentifier?:string, NodeType?:string, ClusterStatus?:string, ClusterAvailabilityStatus?:string, ModifyStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}>}, ClusterCreateTime?:int|string|\DateTimeInterface, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, ClusterParameterGroups?:array<array{ParameterGroupName?:string, ParameterApplyStatus?:string, ClusterParameterStatusList?:array<array{ParameterName?:string, ParameterApplyStatus?:string, ParameterApplyErrorDescription?:string}>}>, ClusterSubnetGroupName?:string, VpcId?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{MasterUserPassword?:string, NodeType?:string, NumberOfNodes?:int, ClusterType?:string, ClusterVersion?:string, AutomatedSnapshotRetentionPeriod?:int, ClusterIdentifier?:string, PubliclyAccessible?:bool, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, EncryptionType?:string}, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, RestoreStatus?:array{Status?:string, CurrentRestoreRateInMegaBytesPerSecond?:float, SnapshotSizeInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int}, DataTransferProgress?:array{Status?:string, CurrentRateInMegaBytesPerSecond?:float, TotalDataInMegaBytes?:int, DataTransferredInMegaBytes?:int, EstimatedTimeToCompletionInSeconds?:int, ElapsedTimeInSeconds?:int}, HsmStatus?:array{HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, Status?:string}, ClusterSnapshotCopyStatus?:array{DestinationRegion?:string, RetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, SnapshotCopyGrantName?:string}, ClusterPublicKey?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>, ElasticIpStatus?:array{ElasticIp?:string, Status?:string}, ClusterRevisionNumber?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, IamRoles?:array<array{IamRoleArn?:string, ApplyStatus?:string}>, PendingActions?:array<string>, MaintenanceTrackName?:string, ElasticResizeNumberOfNodeOptions?:string, DeferredMaintenanceWindows?:array<array{DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface}>, SnapshotScheduleIdentifier?:string, SnapshotScheduleState?:"MODIFYING"|"ACTIVE"|"FAILED", ExpectedNextSnapshotScheduleTime?:int|string|\DateTimeInterface, ExpectedNextSnapshotScheduleTimeStatus?:string, NextMaintenanceWindowStartTime?:int|string|\DateTimeInterface, ResizeInfo?:array{ResizeType?:string, AllowCancelResize?:bool}, AvailabilityZoneRelocationStatus?:string, ClusterNamespaceArn?:string, TotalStorageCapacityInMegaBytes?:int, AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}, DefaultIamRoleArn?:string, ReservedNodeExchangeStatus?:array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}, CustomDomainName?:string, CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:string, MultiAZSecondary?:array{AvailabilityZone?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>}}}>
     */
    public function disableSnapshotCopyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DataShareArn:string, DisassociateEntireAccount?:bool, ConsumerArn?:string, ConsumerRegion?:string} $args
     * @return \AWS\Result<array{DataShareArn?:string, ProducerArn?:string, AllowPubliclyAccessibleConsumers?:bool, DataShareAssociations?:array<array{ConsumerIdentifier?:string, Status?:"ACTIVE"|"PENDING_AUTHORIZATION"|"AUTHORIZED"|"DEAUTHORIZED"|"REJECTED"|"AVAILABLE", ConsumerRegion?:string, CreatedDate?:int|string|\DateTimeInterface, StatusChangeDate?:int|string|\DateTimeInterface, ProducerAllowedWrites?:bool, ConsumerAcceptedWrites?:bool}>, ManagedBy?:string, DataShareType?:"INTERNAL"}>
     */
    public function disassociateDataShareConsumer(array $args): \AWS\Result { }

    /**
     * @param array{DataShareArn:string, DisassociateEntireAccount?:bool, ConsumerArn?:string, ConsumerRegion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DataShareArn?:string, ProducerArn?:string, AllowPubliclyAccessibleConsumers?:bool, DataShareAssociations?:array<array{ConsumerIdentifier?:string, Status?:"ACTIVE"|"PENDING_AUTHORIZATION"|"AUTHORIZED"|"DEAUTHORIZED"|"REJECTED"|"AVAILABLE", ConsumerRegion?:string, CreatedDate?:int|string|\DateTimeInterface, StatusChangeDate?:int|string|\DateTimeInterface, ProducerAllowedWrites?:bool, ConsumerAcceptedWrites?:bool}>, ManagedBy?:string, DataShareType?:"INTERNAL"}>
     */
    public function disassociateDataShareConsumerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier:string, BucketName?:string, S3KeyPrefix?:string, LogDestinationType?:"s3"|"cloudwatch", LogExports?:array<string>} $args
     * @return \AWS\Result<array{LoggingEnabled?:bool, BucketName?:string, S3KeyPrefix?:string, LastSuccessfulDeliveryTime?:int|string|\DateTimeInterface, LastFailureTime?:int|string|\DateTimeInterface, LastFailureMessage?:string, LogDestinationType?:"s3"|"cloudwatch", LogExports?:array<string>}>
     */
    public function enableLogging(array $args): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier:string, BucketName?:string, S3KeyPrefix?:string, LogDestinationType?:"s3"|"cloudwatch", LogExports?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{LoggingEnabled?:bool, BucketName?:string, S3KeyPrefix?:string, LastSuccessfulDeliveryTime?:int|string|\DateTimeInterface, LastFailureTime?:int|string|\DateTimeInterface, LastFailureMessage?:string, LogDestinationType?:"s3"|"cloudwatch", LogExports?:array<string>}>
     */
    public function enableLoggingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier:string, DestinationRegion:string, RetentionPeriod?:int, SnapshotCopyGrantName?:string, ManualSnapshotRetentionPeriod?:int} $args
     * @return \AWS\Result<array{Cluster?:array{ClusterIdentifier?:string, NodeType?:string, ClusterStatus?:string, ClusterAvailabilityStatus?:string, ModifyStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}>}, ClusterCreateTime?:int|string|\DateTimeInterface, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, ClusterParameterGroups?:array<array{ParameterGroupName?:string, ParameterApplyStatus?:string, ClusterParameterStatusList?:array<array{ParameterName?:string, ParameterApplyStatus?:string, ParameterApplyErrorDescription?:string}>}>, ClusterSubnetGroupName?:string, VpcId?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{MasterUserPassword?:string, NodeType?:string, NumberOfNodes?:int, ClusterType?:string, ClusterVersion?:string, AutomatedSnapshotRetentionPeriod?:int, ClusterIdentifier?:string, PubliclyAccessible?:bool, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, EncryptionType?:string}, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, RestoreStatus?:array{Status?:string, CurrentRestoreRateInMegaBytesPerSecond?:float, SnapshotSizeInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int}, DataTransferProgress?:array{Status?:string, CurrentRateInMegaBytesPerSecond?:float, TotalDataInMegaBytes?:int, DataTransferredInMegaBytes?:int, EstimatedTimeToCompletionInSeconds?:int, ElapsedTimeInSeconds?:int}, HsmStatus?:array{HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, Status?:string}, ClusterSnapshotCopyStatus?:array{DestinationRegion?:string, RetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, SnapshotCopyGrantName?:string}, ClusterPublicKey?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>, ElasticIpStatus?:array{ElasticIp?:string, Status?:string}, ClusterRevisionNumber?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, IamRoles?:array<array{IamRoleArn?:string, ApplyStatus?:string}>, PendingActions?:array<string>, MaintenanceTrackName?:string, ElasticResizeNumberOfNodeOptions?:string, DeferredMaintenanceWindows?:array<array{DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface}>, SnapshotScheduleIdentifier?:string, SnapshotScheduleState?:"MODIFYING"|"ACTIVE"|"FAILED", ExpectedNextSnapshotScheduleTime?:int|string|\DateTimeInterface, ExpectedNextSnapshotScheduleTimeStatus?:string, NextMaintenanceWindowStartTime?:int|string|\DateTimeInterface, ResizeInfo?:array{ResizeType?:string, AllowCancelResize?:bool}, AvailabilityZoneRelocationStatus?:string, ClusterNamespaceArn?:string, TotalStorageCapacityInMegaBytes?:int, AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}, DefaultIamRoleArn?:string, ReservedNodeExchangeStatus?:array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}, CustomDomainName?:string, CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:string, MultiAZSecondary?:array{AvailabilityZone?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>}}}>
     */
    public function enableSnapshotCopy(array $args): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier:string, DestinationRegion:string, RetentionPeriod?:int, SnapshotCopyGrantName?:string, ManualSnapshotRetentionPeriod?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cluster?:array{ClusterIdentifier?:string, NodeType?:string, ClusterStatus?:string, ClusterAvailabilityStatus?:string, ModifyStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}>}, ClusterCreateTime?:int|string|\DateTimeInterface, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, ClusterParameterGroups?:array<array{ParameterGroupName?:string, ParameterApplyStatus?:string, ClusterParameterStatusList?:array<array{ParameterName?:string, ParameterApplyStatus?:string, ParameterApplyErrorDescription?:string}>}>, ClusterSubnetGroupName?:string, VpcId?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{MasterUserPassword?:string, NodeType?:string, NumberOfNodes?:int, ClusterType?:string, ClusterVersion?:string, AutomatedSnapshotRetentionPeriod?:int, ClusterIdentifier?:string, PubliclyAccessible?:bool, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, EncryptionType?:string}, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, RestoreStatus?:array{Status?:string, CurrentRestoreRateInMegaBytesPerSecond?:float, SnapshotSizeInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int}, DataTransferProgress?:array{Status?:string, CurrentRateInMegaBytesPerSecond?:float, TotalDataInMegaBytes?:int, DataTransferredInMegaBytes?:int, EstimatedTimeToCompletionInSeconds?:int, ElapsedTimeInSeconds?:int}, HsmStatus?:array{HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, Status?:string}, ClusterSnapshotCopyStatus?:array{DestinationRegion?:string, RetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, SnapshotCopyGrantName?:string}, ClusterPublicKey?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>, ElasticIpStatus?:array{ElasticIp?:string, Status?:string}, ClusterRevisionNumber?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, IamRoles?:array<array{IamRoleArn?:string, ApplyStatus?:string}>, PendingActions?:array<string>, MaintenanceTrackName?:string, ElasticResizeNumberOfNodeOptions?:string, DeferredMaintenanceWindows?:array<array{DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface}>, SnapshotScheduleIdentifier?:string, SnapshotScheduleState?:"MODIFYING"|"ACTIVE"|"FAILED", ExpectedNextSnapshotScheduleTime?:int|string|\DateTimeInterface, ExpectedNextSnapshotScheduleTimeStatus?:string, NextMaintenanceWindowStartTime?:int|string|\DateTimeInterface, ResizeInfo?:array{ResizeType?:string, AllowCancelResize?:bool}, AvailabilityZoneRelocationStatus?:string, ClusterNamespaceArn?:string, TotalStorageCapacityInMegaBytes?:int, AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}, DefaultIamRoleArn?:string, ReservedNodeExchangeStatus?:array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}, CustomDomainName?:string, CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:string, MultiAZSecondary?:array{AvailabilityZone?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>}}}>
     */
    public function enableSnapshotCopyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier:string} $args
     * @return \AWS\Result<array{Cluster?:array{ClusterIdentifier?:string, NodeType?:string, ClusterStatus?:string, ClusterAvailabilityStatus?:string, ModifyStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}>}, ClusterCreateTime?:int|string|\DateTimeInterface, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, ClusterParameterGroups?:array<array{ParameterGroupName?:string, ParameterApplyStatus?:string, ClusterParameterStatusList?:array<array{ParameterName?:string, ParameterApplyStatus?:string, ParameterApplyErrorDescription?:string}>}>, ClusterSubnetGroupName?:string, VpcId?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{MasterUserPassword?:string, NodeType?:string, NumberOfNodes?:int, ClusterType?:string, ClusterVersion?:string, AutomatedSnapshotRetentionPeriod?:int, ClusterIdentifier?:string, PubliclyAccessible?:bool, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, EncryptionType?:string}, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, RestoreStatus?:array{Status?:string, CurrentRestoreRateInMegaBytesPerSecond?:float, SnapshotSizeInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int}, DataTransferProgress?:array{Status?:string, CurrentRateInMegaBytesPerSecond?:float, TotalDataInMegaBytes?:int, DataTransferredInMegaBytes?:int, EstimatedTimeToCompletionInSeconds?:int, ElapsedTimeInSeconds?:int}, HsmStatus?:array{HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, Status?:string}, ClusterSnapshotCopyStatus?:array{DestinationRegion?:string, RetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, SnapshotCopyGrantName?:string}, ClusterPublicKey?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>, ElasticIpStatus?:array{ElasticIp?:string, Status?:string}, ClusterRevisionNumber?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, IamRoles?:array<array{IamRoleArn?:string, ApplyStatus?:string}>, PendingActions?:array<string>, MaintenanceTrackName?:string, ElasticResizeNumberOfNodeOptions?:string, DeferredMaintenanceWindows?:array<array{DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface}>, SnapshotScheduleIdentifier?:string, SnapshotScheduleState?:"MODIFYING"|"ACTIVE"|"FAILED", ExpectedNextSnapshotScheduleTime?:int|string|\DateTimeInterface, ExpectedNextSnapshotScheduleTimeStatus?:string, NextMaintenanceWindowStartTime?:int|string|\DateTimeInterface, ResizeInfo?:array{ResizeType?:string, AllowCancelResize?:bool}, AvailabilityZoneRelocationStatus?:string, ClusterNamespaceArn?:string, TotalStorageCapacityInMegaBytes?:int, AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}, DefaultIamRoleArn?:string, ReservedNodeExchangeStatus?:array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}, CustomDomainName?:string, CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:string, MultiAZSecondary?:array{AvailabilityZone?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>}}}>
     */
    public function failoverPrimaryCompute(array $args): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cluster?:array{ClusterIdentifier?:string, NodeType?:string, ClusterStatus?:string, ClusterAvailabilityStatus?:string, ModifyStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}>}, ClusterCreateTime?:int|string|\DateTimeInterface, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, ClusterParameterGroups?:array<array{ParameterGroupName?:string, ParameterApplyStatus?:string, ClusterParameterStatusList?:array<array{ParameterName?:string, ParameterApplyStatus?:string, ParameterApplyErrorDescription?:string}>}>, ClusterSubnetGroupName?:string, VpcId?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{MasterUserPassword?:string, NodeType?:string, NumberOfNodes?:int, ClusterType?:string, ClusterVersion?:string, AutomatedSnapshotRetentionPeriod?:int, ClusterIdentifier?:string, PubliclyAccessible?:bool, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, EncryptionType?:string}, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, RestoreStatus?:array{Status?:string, CurrentRestoreRateInMegaBytesPerSecond?:float, SnapshotSizeInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int}, DataTransferProgress?:array{Status?:string, CurrentRateInMegaBytesPerSecond?:float, TotalDataInMegaBytes?:int, DataTransferredInMegaBytes?:int, EstimatedTimeToCompletionInSeconds?:int, ElapsedTimeInSeconds?:int}, HsmStatus?:array{HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, Status?:string}, ClusterSnapshotCopyStatus?:array{DestinationRegion?:string, RetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, SnapshotCopyGrantName?:string}, ClusterPublicKey?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>, ElasticIpStatus?:array{ElasticIp?:string, Status?:string}, ClusterRevisionNumber?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, IamRoles?:array<array{IamRoleArn?:string, ApplyStatus?:string}>, PendingActions?:array<string>, MaintenanceTrackName?:string, ElasticResizeNumberOfNodeOptions?:string, DeferredMaintenanceWindows?:array<array{DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface}>, SnapshotScheduleIdentifier?:string, SnapshotScheduleState?:"MODIFYING"|"ACTIVE"|"FAILED", ExpectedNextSnapshotScheduleTime?:int|string|\DateTimeInterface, ExpectedNextSnapshotScheduleTimeStatus?:string, NextMaintenanceWindowStartTime?:int|string|\DateTimeInterface, ResizeInfo?:array{ResizeType?:string, AllowCancelResize?:bool}, AvailabilityZoneRelocationStatus?:string, ClusterNamespaceArn?:string, TotalStorageCapacityInMegaBytes?:int, AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}, DefaultIamRoleArn?:string, ReservedNodeExchangeStatus?:array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}, CustomDomainName?:string, CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:string, MultiAZSecondary?:array{AvailabilityZone?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>}}}>
     */
    public function failoverPrimaryComputeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DbUser:string, DbName?:string, ClusterIdentifier?:string, DurationSeconds?:int, AutoCreate?:bool, DbGroups?:array<string>, CustomDomainName?:string} $args
     * @return \AWS\Result<array{DbUser?:string, DbPassword?:string, Expiration?:int|string|\DateTimeInterface}>
     */
    public function getClusterCredentials(array $args): \AWS\Result { }

    /**
     * @param array{DbUser:string, DbName?:string, ClusterIdentifier?:string, DurationSeconds?:int, AutoCreate?:bool, DbGroups?:array<string>, CustomDomainName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DbUser?:string, DbPassword?:string, Expiration?:int|string|\DateTimeInterface}>
     */
    public function getClusterCredentialsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DbName?:string, ClusterIdentifier?:string, DurationSeconds?:int, CustomDomainName?:string} $args
     * @return \AWS\Result<array{DbUser?:string, DbPassword?:string, Expiration?:int|string|\DateTimeInterface, NextRefreshTime?:int|string|\DateTimeInterface}>
     */
    public function getClusterCredentialsWithIAM(array $args = []): \AWS\Result { }

    /**
     * @param array{DbName?:string, ClusterIdentifier?:string, DurationSeconds?:int, CustomDomainName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DbUser?:string, DbPassword?:string, Expiration?:int|string|\DateTimeInterface, NextRefreshTime?:int|string|\DateTimeInterface}>
     */
    public function getClusterCredentialsWithIAMAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ActionType:"restore-cluster"|"resize-cluster", ClusterIdentifier?:string, SnapshotIdentifier?:string, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{Marker?:string, ReservedNodeConfigurationOptionList?:array<array{SourceReservedNode?:array{ReservedNodeId?:string, ReservedNodeOfferingId?:string, NodeType?:string, StartTime?:int|string|\DateTimeInterface, Duration?:int, FixedPrice?:float, UsagePrice?:float, CurrencyCode?:string, NodeCount?:int, State?:string, OfferingType?:string, RecurringCharges?:array<array{RecurringChargeAmount?:float, RecurringChargeFrequency?:string}>, ReservedNodeOfferingType?:"Regular"|"Upgradable"}, TargetReservedNodeCount?:int, TargetReservedNodeOffering?:array{ReservedNodeOfferingId?:string, NodeType?:string, Duration?:int, FixedPrice?:float, UsagePrice?:float, CurrencyCode?:string, OfferingType?:string, RecurringCharges?:array<array{RecurringChargeAmount?:float, RecurringChargeFrequency?:string}>, ReservedNodeOfferingType?:"Regular"|"Upgradable"}}>}>
     */
    public function getReservedNodeExchangeConfigurationOptions(array $args): \AWS\Result { }

    /**
     * @param array{ActionType:"restore-cluster"|"resize-cluster", ClusterIdentifier?:string, SnapshotIdentifier?:string, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, ReservedNodeConfigurationOptionList?:array<array{SourceReservedNode?:array{ReservedNodeId?:string, ReservedNodeOfferingId?:string, NodeType?:string, StartTime?:int|string|\DateTimeInterface, Duration?:int, FixedPrice?:float, UsagePrice?:float, CurrencyCode?:string, NodeCount?:int, State?:string, OfferingType?:string, RecurringCharges?:array<array{RecurringChargeAmount?:float, RecurringChargeFrequency?:string}>, ReservedNodeOfferingType?:"Regular"|"Upgradable"}, TargetReservedNodeCount?:int, TargetReservedNodeOffering?:array{ReservedNodeOfferingId?:string, NodeType?:string, Duration?:int, FixedPrice?:float, UsagePrice?:float, CurrencyCode?:string, OfferingType?:string, RecurringCharges?:array<array{RecurringChargeAmount?:float, RecurringChargeFrequency?:string}>, ReservedNodeOfferingType?:"Regular"|"Upgradable"}}>}>
     */
    public function getReservedNodeExchangeConfigurationOptionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ReservedNodeId:string, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{Marker?:string, ReservedNodeOfferings?:array<array{ReservedNodeOfferingId?:string, NodeType?:string, Duration?:int, FixedPrice?:float, UsagePrice?:float, CurrencyCode?:string, OfferingType?:string, RecurringCharges?:array<array{RecurringChargeAmount?:float, RecurringChargeFrequency?:string}>, ReservedNodeOfferingType?:"Regular"|"Upgradable"}>}>
     */
    public function getReservedNodeExchangeOfferings(array $args): \AWS\Result { }

    /**
     * @param array{ReservedNodeId:string, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Marker?:string, ReservedNodeOfferings?:array<array{ReservedNodeOfferingId?:string, NodeType?:string, Duration?:int, FixedPrice?:float, UsagePrice?:float, CurrencyCode?:string, OfferingType?:string, RecurringCharges?:array<array{RecurringChargeAmount?:float, RecurringChargeFrequency?:string}>, ReservedNodeOfferingType?:"Regular"|"Upgradable"}>}>
     */
    public function getReservedNodeExchangeOfferingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{ResourcePolicy?:array{ResourceArn?:string, Policy?:string}}>
     */
    public function getResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourcePolicy?:array{ResourceArn?:string, Policy?:string}}>
     */
    public function getResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier?:string, NamespaceArn?:string, MaxRecords?:int, Marker?:string} $args
     * @return \AWS\Result<array{Recommendations?:array<array{Id?:string, ClusterIdentifier?:string, NamespaceArn?:string, CreatedAt?:int|string|\DateTimeInterface, RecommendationType?:string, Title?:string, Description?:string, Observation?:string, ImpactRanking?:"HIGH"|"MEDIUM"|"LOW", RecommendationText?:string, RecommendedActions?:array<array{Text?:string, Database?:string, Command?:string, Type?:"SQL"|"CLI"}>, ReferenceLinks?:array<array{Text?:string, Link?:string}>}>, Marker?:string}>
     */
    public function listRecommendations(array $args = []): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier?:string, NamespaceArn?:string, MaxRecords?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Recommendations?:array<array{Id?:string, ClusterIdentifier?:string, NamespaceArn?:string, CreatedAt?:int|string|\DateTimeInterface, RecommendationType?:string, Title?:string, Description?:string, Observation?:string, ImpactRanking?:"HIGH"|"MEDIUM"|"LOW", RecommendationText?:string, RecommendedActions?:array<array{Text?:string, Database?:string, Command?:string, Type?:"SQL"|"CLI"}>, ReferenceLinks?:array<array{Text?:string, Link?:string}>}>, Marker?:string}>
     */
    public function listRecommendationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier:string, AquaConfigurationStatus?:"enabled"|"disabled"|"auto"} $args
     * @return \AWS\Result<array{AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}}>
     */
    public function modifyAquaConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier:string, AquaConfigurationStatus?:"enabled"|"disabled"|"auto"} $args
     * @return \GuzzleHttp\Promise\Promise<array{AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}}>
     */
    public function modifyAquaConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationProfileName:string, AuthenticationProfileContent:string} $args
     * @return \AWS\Result<array{AuthenticationProfileName?:string, AuthenticationProfileContent?:string}>
     */
    public function modifyAuthenticationProfile(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationProfileName:string, AuthenticationProfileContent:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AuthenticationProfileName?:string, AuthenticationProfileContent?:string}>
     */
    public function modifyAuthenticationProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier:string, ClusterType?:string, NodeType?:string, NumberOfNodes?:int, ClusterSecurityGroups?:array<string>, VpcSecurityGroupIds?:array<string>, MasterUserPassword?:string, ClusterParameterGroupName?:string, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, PreferredMaintenanceWindow?:string, ClusterVersion?:string, AllowVersionUpgrade?:bool, HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, NewClusterIdentifier?:string, PubliclyAccessible?:bool, ElasticIp?:string, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, Encrypted?:bool, KmsKeyId?:string, AvailabilityZoneRelocation?:bool, AvailabilityZone?:string, Port?:int, ManageMasterPassword?:bool, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:bool} $args
     * @return \AWS\Result<array{Cluster?:array{ClusterIdentifier?:string, NodeType?:string, ClusterStatus?:string, ClusterAvailabilityStatus?:string, ModifyStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}>}, ClusterCreateTime?:int|string|\DateTimeInterface, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, ClusterParameterGroups?:array<array{ParameterGroupName?:string, ParameterApplyStatus?:string, ClusterParameterStatusList?:array<array{ParameterName?:string, ParameterApplyStatus?:string, ParameterApplyErrorDescription?:string}>}>, ClusterSubnetGroupName?:string, VpcId?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{MasterUserPassword?:string, NodeType?:string, NumberOfNodes?:int, ClusterType?:string, ClusterVersion?:string, AutomatedSnapshotRetentionPeriod?:int, ClusterIdentifier?:string, PubliclyAccessible?:bool, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, EncryptionType?:string}, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, RestoreStatus?:array{Status?:string, CurrentRestoreRateInMegaBytesPerSecond?:float, SnapshotSizeInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int}, DataTransferProgress?:array{Status?:string, CurrentRateInMegaBytesPerSecond?:float, TotalDataInMegaBytes?:int, DataTransferredInMegaBytes?:int, EstimatedTimeToCompletionInSeconds?:int, ElapsedTimeInSeconds?:int}, HsmStatus?:array{HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, Status?:string}, ClusterSnapshotCopyStatus?:array{DestinationRegion?:string, RetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, SnapshotCopyGrantName?:string}, ClusterPublicKey?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>, ElasticIpStatus?:array{ElasticIp?:string, Status?:string}, ClusterRevisionNumber?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, IamRoles?:array<array{IamRoleArn?:string, ApplyStatus?:string}>, PendingActions?:array<string>, MaintenanceTrackName?:string, ElasticResizeNumberOfNodeOptions?:string, DeferredMaintenanceWindows?:array<array{DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface}>, SnapshotScheduleIdentifier?:string, SnapshotScheduleState?:"MODIFYING"|"ACTIVE"|"FAILED", ExpectedNextSnapshotScheduleTime?:int|string|\DateTimeInterface, ExpectedNextSnapshotScheduleTimeStatus?:string, NextMaintenanceWindowStartTime?:int|string|\DateTimeInterface, ResizeInfo?:array{ResizeType?:string, AllowCancelResize?:bool}, AvailabilityZoneRelocationStatus?:string, ClusterNamespaceArn?:string, TotalStorageCapacityInMegaBytes?:int, AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}, DefaultIamRoleArn?:string, ReservedNodeExchangeStatus?:array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}, CustomDomainName?:string, CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:string, MultiAZSecondary?:array{AvailabilityZone?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>}}}>
     */
    public function modifyCluster(array $args): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier:string, ClusterType?:string, NodeType?:string, NumberOfNodes?:int, ClusterSecurityGroups?:array<string>, VpcSecurityGroupIds?:array<string>, MasterUserPassword?:string, ClusterParameterGroupName?:string, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, PreferredMaintenanceWindow?:string, ClusterVersion?:string, AllowVersionUpgrade?:bool, HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, NewClusterIdentifier?:string, PubliclyAccessible?:bool, ElasticIp?:string, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, Encrypted?:bool, KmsKeyId?:string, AvailabilityZoneRelocation?:bool, AvailabilityZone?:string, Port?:int, ManageMasterPassword?:bool, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cluster?:array{ClusterIdentifier?:string, NodeType?:string, ClusterStatus?:string, ClusterAvailabilityStatus?:string, ModifyStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}>}, ClusterCreateTime?:int|string|\DateTimeInterface, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, ClusterParameterGroups?:array<array{ParameterGroupName?:string, ParameterApplyStatus?:string, ClusterParameterStatusList?:array<array{ParameterName?:string, ParameterApplyStatus?:string, ParameterApplyErrorDescription?:string}>}>, ClusterSubnetGroupName?:string, VpcId?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{MasterUserPassword?:string, NodeType?:string, NumberOfNodes?:int, ClusterType?:string, ClusterVersion?:string, AutomatedSnapshotRetentionPeriod?:int, ClusterIdentifier?:string, PubliclyAccessible?:bool, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, EncryptionType?:string}, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, RestoreStatus?:array{Status?:string, CurrentRestoreRateInMegaBytesPerSecond?:float, SnapshotSizeInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int}, DataTransferProgress?:array{Status?:string, CurrentRateInMegaBytesPerSecond?:float, TotalDataInMegaBytes?:int, DataTransferredInMegaBytes?:int, EstimatedTimeToCompletionInSeconds?:int, ElapsedTimeInSeconds?:int}, HsmStatus?:array{HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, Status?:string}, ClusterSnapshotCopyStatus?:array{DestinationRegion?:string, RetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, SnapshotCopyGrantName?:string}, ClusterPublicKey?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>, ElasticIpStatus?:array{ElasticIp?:string, Status?:string}, ClusterRevisionNumber?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, IamRoles?:array<array{IamRoleArn?:string, ApplyStatus?:string}>, PendingActions?:array<string>, MaintenanceTrackName?:string, ElasticResizeNumberOfNodeOptions?:string, DeferredMaintenanceWindows?:array<array{DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface}>, SnapshotScheduleIdentifier?:string, SnapshotScheduleState?:"MODIFYING"|"ACTIVE"|"FAILED", ExpectedNextSnapshotScheduleTime?:int|string|\DateTimeInterface, ExpectedNextSnapshotScheduleTimeStatus?:string, NextMaintenanceWindowStartTime?:int|string|\DateTimeInterface, ResizeInfo?:array{ResizeType?:string, AllowCancelResize?:bool}, AvailabilityZoneRelocationStatus?:string, ClusterNamespaceArn?:string, TotalStorageCapacityInMegaBytes?:int, AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}, DefaultIamRoleArn?:string, ReservedNodeExchangeStatus?:array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}, CustomDomainName?:string, CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:string, MultiAZSecondary?:array{AvailabilityZone?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>}}}>
     */
    public function modifyClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier:string, RevisionTarget:string} $args
     * @return \AWS\Result<array{Cluster?:array{ClusterIdentifier?:string, NodeType?:string, ClusterStatus?:string, ClusterAvailabilityStatus?:string, ModifyStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}>}, ClusterCreateTime?:int|string|\DateTimeInterface, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, ClusterParameterGroups?:array<array{ParameterGroupName?:string, ParameterApplyStatus?:string, ClusterParameterStatusList?:array<array{ParameterName?:string, ParameterApplyStatus?:string, ParameterApplyErrorDescription?:string}>}>, ClusterSubnetGroupName?:string, VpcId?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{MasterUserPassword?:string, NodeType?:string, NumberOfNodes?:int, ClusterType?:string, ClusterVersion?:string, AutomatedSnapshotRetentionPeriod?:int, ClusterIdentifier?:string, PubliclyAccessible?:bool, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, EncryptionType?:string}, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, RestoreStatus?:array{Status?:string, CurrentRestoreRateInMegaBytesPerSecond?:float, SnapshotSizeInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int}, DataTransferProgress?:array{Status?:string, CurrentRateInMegaBytesPerSecond?:float, TotalDataInMegaBytes?:int, DataTransferredInMegaBytes?:int, EstimatedTimeToCompletionInSeconds?:int, ElapsedTimeInSeconds?:int}, HsmStatus?:array{HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, Status?:string}, ClusterSnapshotCopyStatus?:array{DestinationRegion?:string, RetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, SnapshotCopyGrantName?:string}, ClusterPublicKey?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>, ElasticIpStatus?:array{ElasticIp?:string, Status?:string}, ClusterRevisionNumber?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, IamRoles?:array<array{IamRoleArn?:string, ApplyStatus?:string}>, PendingActions?:array<string>, MaintenanceTrackName?:string, ElasticResizeNumberOfNodeOptions?:string, DeferredMaintenanceWindows?:array<array{DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface}>, SnapshotScheduleIdentifier?:string, SnapshotScheduleState?:"MODIFYING"|"ACTIVE"|"FAILED", ExpectedNextSnapshotScheduleTime?:int|string|\DateTimeInterface, ExpectedNextSnapshotScheduleTimeStatus?:string, NextMaintenanceWindowStartTime?:int|string|\DateTimeInterface, ResizeInfo?:array{ResizeType?:string, AllowCancelResize?:bool}, AvailabilityZoneRelocationStatus?:string, ClusterNamespaceArn?:string, TotalStorageCapacityInMegaBytes?:int, AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}, DefaultIamRoleArn?:string, ReservedNodeExchangeStatus?:array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}, CustomDomainName?:string, CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:string, MultiAZSecondary?:array{AvailabilityZone?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>}}}>
     */
    public function modifyClusterDbRevision(array $args): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier:string, RevisionTarget:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cluster?:array{ClusterIdentifier?:string, NodeType?:string, ClusterStatus?:string, ClusterAvailabilityStatus?:string, ModifyStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}>}, ClusterCreateTime?:int|string|\DateTimeInterface, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, ClusterParameterGroups?:array<array{ParameterGroupName?:string, ParameterApplyStatus?:string, ClusterParameterStatusList?:array<array{ParameterName?:string, ParameterApplyStatus?:string, ParameterApplyErrorDescription?:string}>}>, ClusterSubnetGroupName?:string, VpcId?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{MasterUserPassword?:string, NodeType?:string, NumberOfNodes?:int, ClusterType?:string, ClusterVersion?:string, AutomatedSnapshotRetentionPeriod?:int, ClusterIdentifier?:string, PubliclyAccessible?:bool, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, EncryptionType?:string}, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, RestoreStatus?:array{Status?:string, CurrentRestoreRateInMegaBytesPerSecond?:float, SnapshotSizeInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int}, DataTransferProgress?:array{Status?:string, CurrentRateInMegaBytesPerSecond?:float, TotalDataInMegaBytes?:int, DataTransferredInMegaBytes?:int, EstimatedTimeToCompletionInSeconds?:int, ElapsedTimeInSeconds?:int}, HsmStatus?:array{HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, Status?:string}, ClusterSnapshotCopyStatus?:array{DestinationRegion?:string, RetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, SnapshotCopyGrantName?:string}, ClusterPublicKey?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>, ElasticIpStatus?:array{ElasticIp?:string, Status?:string}, ClusterRevisionNumber?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, IamRoles?:array<array{IamRoleArn?:string, ApplyStatus?:string}>, PendingActions?:array<string>, MaintenanceTrackName?:string, ElasticResizeNumberOfNodeOptions?:string, DeferredMaintenanceWindows?:array<array{DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface}>, SnapshotScheduleIdentifier?:string, SnapshotScheduleState?:"MODIFYING"|"ACTIVE"|"FAILED", ExpectedNextSnapshotScheduleTime?:int|string|\DateTimeInterface, ExpectedNextSnapshotScheduleTimeStatus?:string, NextMaintenanceWindowStartTime?:int|string|\DateTimeInterface, ResizeInfo?:array{ResizeType?:string, AllowCancelResize?:bool}, AvailabilityZoneRelocationStatus?:string, ClusterNamespaceArn?:string, TotalStorageCapacityInMegaBytes?:int, AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}, DefaultIamRoleArn?:string, ReservedNodeExchangeStatus?:array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}, CustomDomainName?:string, CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:string, MultiAZSecondary?:array{AvailabilityZone?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>}}}>
     */
    public function modifyClusterDbRevisionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier:string, AddIamRoles?:array<string>, RemoveIamRoles?:array<string>, DefaultIamRoleArn?:string} $args
     * @return \AWS\Result<array{Cluster?:array{ClusterIdentifier?:string, NodeType?:string, ClusterStatus?:string, ClusterAvailabilityStatus?:string, ModifyStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}>}, ClusterCreateTime?:int|string|\DateTimeInterface, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, ClusterParameterGroups?:array<array{ParameterGroupName?:string, ParameterApplyStatus?:string, ClusterParameterStatusList?:array<array{ParameterName?:string, ParameterApplyStatus?:string, ParameterApplyErrorDescription?:string}>}>, ClusterSubnetGroupName?:string, VpcId?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{MasterUserPassword?:string, NodeType?:string, NumberOfNodes?:int, ClusterType?:string, ClusterVersion?:string, AutomatedSnapshotRetentionPeriod?:int, ClusterIdentifier?:string, PubliclyAccessible?:bool, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, EncryptionType?:string}, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, RestoreStatus?:array{Status?:string, CurrentRestoreRateInMegaBytesPerSecond?:float, SnapshotSizeInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int}, DataTransferProgress?:array{Status?:string, CurrentRateInMegaBytesPerSecond?:float, TotalDataInMegaBytes?:int, DataTransferredInMegaBytes?:int, EstimatedTimeToCompletionInSeconds?:int, ElapsedTimeInSeconds?:int}, HsmStatus?:array{HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, Status?:string}, ClusterSnapshotCopyStatus?:array{DestinationRegion?:string, RetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, SnapshotCopyGrantName?:string}, ClusterPublicKey?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>, ElasticIpStatus?:array{ElasticIp?:string, Status?:string}, ClusterRevisionNumber?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, IamRoles?:array<array{IamRoleArn?:string, ApplyStatus?:string}>, PendingActions?:array<string>, MaintenanceTrackName?:string, ElasticResizeNumberOfNodeOptions?:string, DeferredMaintenanceWindows?:array<array{DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface}>, SnapshotScheduleIdentifier?:string, SnapshotScheduleState?:"MODIFYING"|"ACTIVE"|"FAILED", ExpectedNextSnapshotScheduleTime?:int|string|\DateTimeInterface, ExpectedNextSnapshotScheduleTimeStatus?:string, NextMaintenanceWindowStartTime?:int|string|\DateTimeInterface, ResizeInfo?:array{ResizeType?:string, AllowCancelResize?:bool}, AvailabilityZoneRelocationStatus?:string, ClusterNamespaceArn?:string, TotalStorageCapacityInMegaBytes?:int, AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}, DefaultIamRoleArn?:string, ReservedNodeExchangeStatus?:array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}, CustomDomainName?:string, CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:string, MultiAZSecondary?:array{AvailabilityZone?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>}}}>
     */
    public function modifyClusterIamRoles(array $args): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier:string, AddIamRoles?:array<string>, RemoveIamRoles?:array<string>, DefaultIamRoleArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cluster?:array{ClusterIdentifier?:string, NodeType?:string, ClusterStatus?:string, ClusterAvailabilityStatus?:string, ModifyStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}>}, ClusterCreateTime?:int|string|\DateTimeInterface, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, ClusterParameterGroups?:array<array{ParameterGroupName?:string, ParameterApplyStatus?:string, ClusterParameterStatusList?:array<array{ParameterName?:string, ParameterApplyStatus?:string, ParameterApplyErrorDescription?:string}>}>, ClusterSubnetGroupName?:string, VpcId?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{MasterUserPassword?:string, NodeType?:string, NumberOfNodes?:int, ClusterType?:string, ClusterVersion?:string, AutomatedSnapshotRetentionPeriod?:int, ClusterIdentifier?:string, PubliclyAccessible?:bool, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, EncryptionType?:string}, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, RestoreStatus?:array{Status?:string, CurrentRestoreRateInMegaBytesPerSecond?:float, SnapshotSizeInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int}, DataTransferProgress?:array{Status?:string, CurrentRateInMegaBytesPerSecond?:float, TotalDataInMegaBytes?:int, DataTransferredInMegaBytes?:int, EstimatedTimeToCompletionInSeconds?:int, ElapsedTimeInSeconds?:int}, HsmStatus?:array{HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, Status?:string}, ClusterSnapshotCopyStatus?:array{DestinationRegion?:string, RetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, SnapshotCopyGrantName?:string}, ClusterPublicKey?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>, ElasticIpStatus?:array{ElasticIp?:string, Status?:string}, ClusterRevisionNumber?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, IamRoles?:array<array{IamRoleArn?:string, ApplyStatus?:string}>, PendingActions?:array<string>, MaintenanceTrackName?:string, ElasticResizeNumberOfNodeOptions?:string, DeferredMaintenanceWindows?:array<array{DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface}>, SnapshotScheduleIdentifier?:string, SnapshotScheduleState?:"MODIFYING"|"ACTIVE"|"FAILED", ExpectedNextSnapshotScheduleTime?:int|string|\DateTimeInterface, ExpectedNextSnapshotScheduleTimeStatus?:string, NextMaintenanceWindowStartTime?:int|string|\DateTimeInterface, ResizeInfo?:array{ResizeType?:string, AllowCancelResize?:bool}, AvailabilityZoneRelocationStatus?:string, ClusterNamespaceArn?:string, TotalStorageCapacityInMegaBytes?:int, AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}, DefaultIamRoleArn?:string, ReservedNodeExchangeStatus?:array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}, CustomDomainName?:string, CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:string, MultiAZSecondary?:array{AvailabilityZone?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>}}}>
     */
    public function modifyClusterIamRolesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier:string, DeferMaintenance?:bool, DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface, DeferMaintenanceDuration?:int} $args
     * @return \AWS\Result<array{Cluster?:array{ClusterIdentifier?:string, NodeType?:string, ClusterStatus?:string, ClusterAvailabilityStatus?:string, ModifyStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}>}, ClusterCreateTime?:int|string|\DateTimeInterface, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, ClusterParameterGroups?:array<array{ParameterGroupName?:string, ParameterApplyStatus?:string, ClusterParameterStatusList?:array<array{ParameterName?:string, ParameterApplyStatus?:string, ParameterApplyErrorDescription?:string}>}>, ClusterSubnetGroupName?:string, VpcId?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{MasterUserPassword?:string, NodeType?:string, NumberOfNodes?:int, ClusterType?:string, ClusterVersion?:string, AutomatedSnapshotRetentionPeriod?:int, ClusterIdentifier?:string, PubliclyAccessible?:bool, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, EncryptionType?:string}, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, RestoreStatus?:array{Status?:string, CurrentRestoreRateInMegaBytesPerSecond?:float, SnapshotSizeInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int}, DataTransferProgress?:array{Status?:string, CurrentRateInMegaBytesPerSecond?:float, TotalDataInMegaBytes?:int, DataTransferredInMegaBytes?:int, EstimatedTimeToCompletionInSeconds?:int, ElapsedTimeInSeconds?:int}, HsmStatus?:array{HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, Status?:string}, ClusterSnapshotCopyStatus?:array{DestinationRegion?:string, RetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, SnapshotCopyGrantName?:string}, ClusterPublicKey?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>, ElasticIpStatus?:array{ElasticIp?:string, Status?:string}, ClusterRevisionNumber?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, IamRoles?:array<array{IamRoleArn?:string, ApplyStatus?:string}>, PendingActions?:array<string>, MaintenanceTrackName?:string, ElasticResizeNumberOfNodeOptions?:string, DeferredMaintenanceWindows?:array<array{DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface}>, SnapshotScheduleIdentifier?:string, SnapshotScheduleState?:"MODIFYING"|"ACTIVE"|"FAILED", ExpectedNextSnapshotScheduleTime?:int|string|\DateTimeInterface, ExpectedNextSnapshotScheduleTimeStatus?:string, NextMaintenanceWindowStartTime?:int|string|\DateTimeInterface, ResizeInfo?:array{ResizeType?:string, AllowCancelResize?:bool}, AvailabilityZoneRelocationStatus?:string, ClusterNamespaceArn?:string, TotalStorageCapacityInMegaBytes?:int, AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}, DefaultIamRoleArn?:string, ReservedNodeExchangeStatus?:array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}, CustomDomainName?:string, CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:string, MultiAZSecondary?:array{AvailabilityZone?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>}}}>
     */
    public function modifyClusterMaintenance(array $args): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier:string, DeferMaintenance?:bool, DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface, DeferMaintenanceDuration?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cluster?:array{ClusterIdentifier?:string, NodeType?:string, ClusterStatus?:string, ClusterAvailabilityStatus?:string, ModifyStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}>}, ClusterCreateTime?:int|string|\DateTimeInterface, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, ClusterParameterGroups?:array<array{ParameterGroupName?:string, ParameterApplyStatus?:string, ClusterParameterStatusList?:array<array{ParameterName?:string, ParameterApplyStatus?:string, ParameterApplyErrorDescription?:string}>}>, ClusterSubnetGroupName?:string, VpcId?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{MasterUserPassword?:string, NodeType?:string, NumberOfNodes?:int, ClusterType?:string, ClusterVersion?:string, AutomatedSnapshotRetentionPeriod?:int, ClusterIdentifier?:string, PubliclyAccessible?:bool, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, EncryptionType?:string}, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, RestoreStatus?:array{Status?:string, CurrentRestoreRateInMegaBytesPerSecond?:float, SnapshotSizeInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int}, DataTransferProgress?:array{Status?:string, CurrentRateInMegaBytesPerSecond?:float, TotalDataInMegaBytes?:int, DataTransferredInMegaBytes?:int, EstimatedTimeToCompletionInSeconds?:int, ElapsedTimeInSeconds?:int}, HsmStatus?:array{HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, Status?:string}, ClusterSnapshotCopyStatus?:array{DestinationRegion?:string, RetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, SnapshotCopyGrantName?:string}, ClusterPublicKey?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>, ElasticIpStatus?:array{ElasticIp?:string, Status?:string}, ClusterRevisionNumber?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, IamRoles?:array<array{IamRoleArn?:string, ApplyStatus?:string}>, PendingActions?:array<string>, MaintenanceTrackName?:string, ElasticResizeNumberOfNodeOptions?:string, DeferredMaintenanceWindows?:array<array{DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface}>, SnapshotScheduleIdentifier?:string, SnapshotScheduleState?:"MODIFYING"|"ACTIVE"|"FAILED", ExpectedNextSnapshotScheduleTime?:int|string|\DateTimeInterface, ExpectedNextSnapshotScheduleTimeStatus?:string, NextMaintenanceWindowStartTime?:int|string|\DateTimeInterface, ResizeInfo?:array{ResizeType?:string, AllowCancelResize?:bool}, AvailabilityZoneRelocationStatus?:string, ClusterNamespaceArn?:string, TotalStorageCapacityInMegaBytes?:int, AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}, DefaultIamRoleArn?:string, ReservedNodeExchangeStatus?:array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}, CustomDomainName?:string, CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:string, MultiAZSecondary?:array{AvailabilityZone?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>}}}>
     */
    public function modifyClusterMaintenanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ParameterGroupName:string, Parameters:array<array{ParameterName?:string, ParameterValue?:string, Description?:string, Source?:string, DataType?:string, AllowedValues?:string, ApplyType?:"static"|"dynamic", IsModifiable?:bool, MinimumEngineVersion?:string}>} $args
     * @return \AWS\Result<array{ParameterGroupName?:string, ParameterGroupStatus?:string}>
     */
    public function modifyClusterParameterGroup(array $args): \AWS\Result { }

    /**
     * @param array{ParameterGroupName:string, Parameters:array<array{ParameterName?:string, ParameterValue?:string, Description?:string, Source?:string, DataType?:string, AllowedValues?:string, ApplyType?:"static"|"dynamic", IsModifiable?:bool, MinimumEngineVersion?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ParameterGroupName?:string, ParameterGroupStatus?:string}>
     */
    public function modifyClusterParameterGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SnapshotIdentifier:string, ManualSnapshotRetentionPeriod?:int, Force?:bool} $args
     * @return \AWS\Result<array{Snapshot?:array{SnapshotIdentifier?:string, ClusterIdentifier?:string, SnapshotCreateTime?:int|string|\DateTimeInterface, Status?:string, Port?:int, AvailabilityZone?:string, ClusterCreateTime?:int|string|\DateTimeInterface, MasterUsername?:string, ClusterVersion?:string, EngineFullVersion?:string, SnapshotType?:string, NodeType?:string, NumberOfNodes?:int, DBName?:string, VpcId?:string, Encrypted?:bool, KmsKeyId?:string, EncryptedWithHSM?:bool, AccountsWithRestoreAccess?:array<array{AccountId?:string, AccountAlias?:string}>, OwnerAccount?:string, TotalBackupSizeInMegaBytes?:float, ActualIncrementalBackupSizeInMegaBytes?:float, BackupProgressInMegaBytes?:float, CurrentBackupRateInMegaBytesPerSecond?:float, EstimatedSecondsToCompletion?:int, ElapsedTimeInSeconds?:int, SourceRegion?:string, Tags?:array<array{Key?:string, Value?:string}>, RestorableNodeTypes?:array<string>, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, ManualSnapshotRetentionPeriod?:int, ManualSnapshotRemainingDays?:int, SnapshotRetentionStartTime?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, SnapshotArn?:string}}>
     */
    public function modifyClusterSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{SnapshotIdentifier:string, ManualSnapshotRetentionPeriod?:int, Force?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Snapshot?:array{SnapshotIdentifier?:string, ClusterIdentifier?:string, SnapshotCreateTime?:int|string|\DateTimeInterface, Status?:string, Port?:int, AvailabilityZone?:string, ClusterCreateTime?:int|string|\DateTimeInterface, MasterUsername?:string, ClusterVersion?:string, EngineFullVersion?:string, SnapshotType?:string, NodeType?:string, NumberOfNodes?:int, DBName?:string, VpcId?:string, Encrypted?:bool, KmsKeyId?:string, EncryptedWithHSM?:bool, AccountsWithRestoreAccess?:array<array{AccountId?:string, AccountAlias?:string}>, OwnerAccount?:string, TotalBackupSizeInMegaBytes?:float, ActualIncrementalBackupSizeInMegaBytes?:float, BackupProgressInMegaBytes?:float, CurrentBackupRateInMegaBytesPerSecond?:float, EstimatedSecondsToCompletion?:int, ElapsedTimeInSeconds?:int, SourceRegion?:string, Tags?:array<array{Key?:string, Value?:string}>, RestorableNodeTypes?:array<string>, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, ManualSnapshotRetentionPeriod?:int, ManualSnapshotRemainingDays?:int, SnapshotRetentionStartTime?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, SnapshotArn?:string}}>
     */
    public function modifyClusterSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier:string, ScheduleIdentifier?:string, DisassociateSchedule?:bool} $args
     * @return \AWS\Result<void>
     */
    public function modifyClusterSnapshotSchedule(array $args): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier:string, ScheduleIdentifier?:string, DisassociateSchedule?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function modifyClusterSnapshotScheduleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterSubnetGroupName:string, Description?:string, SubnetIds:array<string>} $args
     * @return \AWS\Result<array{ClusterSubnetGroup?:array{ClusterSubnetGroupName?:string, Description?:string, VpcId?:string, SubnetGroupStatus?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:array{Name?:string, SupportedPlatforms?:array<array{Name?:string}>}, SubnetStatus?:string}>, Tags?:array<array{Key?:string, Value?:string}>, SupportedClusterIpAddressTypes?:array<string>}}>
     */
    public function modifyClusterSubnetGroup(array $args): \AWS\Result { }

    /**
     * @param array{ClusterSubnetGroupName:string, Description?:string, SubnetIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterSubnetGroup?:array{ClusterSubnetGroupName?:string, Description?:string, VpcId?:string, SubnetGroupStatus?:string, Subnets?:array<array{SubnetIdentifier?:string, SubnetAvailabilityZone?:array{Name?:string, SupportedPlatforms?:array<array{Name?:string}>}, SubnetStatus?:string}>, Tags?:array<array{Key?:string, Value?:string}>, SupportedClusterIpAddressTypes?:array<string>}}>
     */
    public function modifyClusterSubnetGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CustomDomainName:string, CustomDomainCertificateArn:string, ClusterIdentifier:string} $args
     * @return \AWS\Result<array{CustomDomainName?:string, CustomDomainCertificateArn?:string, ClusterIdentifier?:string, CustomDomainCertExpiryTime?:string}>
     */
    public function modifyCustomDomainAssociation(array $args): \AWS\Result { }

    /**
     * @param array{CustomDomainName:string, CustomDomainCertificateArn:string, ClusterIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CustomDomainName?:string, CustomDomainCertificateArn?:string, ClusterIdentifier?:string, CustomDomainCertExpiryTime?:string}>
     */
    public function modifyCustomDomainAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EndpointName:string, VpcSecurityGroupIds?:array<string>} $args
     * @return \AWS\Result<array{ClusterIdentifier?:string, ResourceOwner?:string, SubnetGroupName?:string, EndpointStatus?:string, EndpointName?:string, EndpointCreateTime?:int|string|\DateTimeInterface, Port?:int, Address?:string, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, VpcEndpoint?:array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}}>
     */
    public function modifyEndpointAccess(array $args): \AWS\Result { }

    /**
     * @param array{EndpointName:string, VpcSecurityGroupIds?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterIdentifier?:string, ResourceOwner?:string, SubnetGroupName?:string, EndpointStatus?:string, EndpointName?:string, EndpointCreateTime?:int|string|\DateTimeInterface, Port?:int, Address?:string, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, VpcEndpoint?:array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}}>
     */
    public function modifyEndpointAccessAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SubscriptionName:string, SnsTopicArn?:string, SourceType?:string, SourceIds?:array<string>, EventCategories?:array<string>, Severity?:string, Enabled?:bool} $args
     * @return \AWS\Result<array{EventSubscription?:array{CustomerAwsId?:string, CustSubscriptionId?:string, SnsTopicArn?:string, Status?:string, SubscriptionCreationTime?:int|string|\DateTimeInterface, SourceType?:string, SourceIdsList?:array<string>, EventCategoriesList?:array<string>, Severity?:string, Enabled?:bool, Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function modifyEventSubscription(array $args): \AWS\Result { }

    /**
     * @param array{SubscriptionName:string, SnsTopicArn?:string, SourceType?:string, SourceIds?:array<string>, EventCategories?:array<string>, Severity?:string, Enabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventSubscription?:array{CustomerAwsId?:string, CustSubscriptionId?:string, SnsTopicArn?:string, Status?:string, SubscriptionCreationTime?:int|string|\DateTimeInterface, SourceType?:string, SourceIdsList?:array<string>, EventCategoriesList?:array<string>, Severity?:string, Enabled?:bool, Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function modifyEventSubscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IntegrationArn:string, Description?:string, IntegrationName?:string} $args
     * @return \AWS\Result<array{IntegrationArn?:string, IntegrationName?:string, SourceArn?:string, TargetArn?:string, Status?:"creating"|"active"|"modifying"|"failed"|"deleting"|"syncing"|"needs_attention", Errors?:array<array{ErrorCode:string, ErrorMessage?:string}>, CreateTime?:int|string|\DateTimeInterface, Description?:string, KMSKeyId?:string, AdditionalEncryptionContext?:array<string, string>, Tags?:array<array{Key?:string, Value?:string}>}>
     */
    public function modifyIntegration(array $args): \AWS\Result { }

    /**
     * @param array{IntegrationArn:string, Description?:string, IntegrationName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IntegrationArn?:string, IntegrationName?:string, SourceArn?:string, TargetArn?:string, Status?:"creating"|"active"|"modifying"|"failed"|"deleting"|"syncing"|"needs_attention", Errors?:array<array{ErrorCode:string, ErrorMessage?:string}>, CreateTime?:int|string|\DateTimeInterface, Description?:string, KMSKeyId?:string, AdditionalEncryptionContext?:array<string, string>, Tags?:array<array{Key?:string, Value?:string}>}>
     */
    public function modifyIntegrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RedshiftIdcApplicationArn:string, IdentityNamespace?:string, IamRoleArn?:string, IdcDisplayName?:string, AuthorizedTokenIssuerList?:array<array{TrustedTokenIssuerArn?:string, AuthorizedAudiencesList?:array<string>}>, ServiceIntegrations?:array<array{LakeFormation?:array<array{LakeFormationQuery?:array{Authorization:"Enabled"|"Disabled"}}>, S3AccessGrants?:array<array{ReadWriteAccess?:array{Authorization:"Enabled"|"Disabled"}}>}>} $args
     * @return \AWS\Result<array{RedshiftIdcApplication?:array{IdcInstanceArn?:string, RedshiftIdcApplicationName?:string, RedshiftIdcApplicationArn?:string, IdentityNamespace?:string, IdcDisplayName?:string, IamRoleArn?:string, IdcManagedApplicationArn?:string, IdcOnboardStatus?:string, AuthorizedTokenIssuerList?:array<array{TrustedTokenIssuerArn?:string, AuthorizedAudiencesList?:array<string>}>, ServiceIntegrations?:array<array{LakeFormation?:array<array{LakeFormationQuery?:array{Authorization:"Enabled"|"Disabled"}}>, S3AccessGrants?:array<array{ReadWriteAccess?:array{Authorization:"Enabled"|"Disabled"}}>}>}}>
     */
    public function modifyRedshiftIdcApplication(array $args): \AWS\Result { }

    /**
     * @param array{RedshiftIdcApplicationArn:string, IdentityNamespace?:string, IamRoleArn?:string, IdcDisplayName?:string, AuthorizedTokenIssuerList?:array<array{TrustedTokenIssuerArn?:string, AuthorizedAudiencesList?:array<string>}>, ServiceIntegrations?:array<array{LakeFormation?:array<array{LakeFormationQuery?:array{Authorization:"Enabled"|"Disabled"}}>, S3AccessGrants?:array<array{ReadWriteAccess?:array{Authorization:"Enabled"|"Disabled"}}>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{RedshiftIdcApplication?:array{IdcInstanceArn?:string, RedshiftIdcApplicationName?:string, RedshiftIdcApplicationArn?:string, IdentityNamespace?:string, IdcDisplayName?:string, IamRoleArn?:string, IdcManagedApplicationArn?:string, IdcOnboardStatus?:string, AuthorizedTokenIssuerList?:array<array{TrustedTokenIssuerArn?:string, AuthorizedAudiencesList?:array<string>}>, ServiceIntegrations?:array<array{LakeFormation?:array<array{LakeFormationQuery?:array{Authorization:"Enabled"|"Disabled"}}>, S3AccessGrants?:array<array{ReadWriteAccess?:array{Authorization:"Enabled"|"Disabled"}}>}>}}>
     */
    public function modifyRedshiftIdcApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ScheduledActionName:string, TargetAction?:array{ResizeCluster?:array{ClusterIdentifier:string, ClusterType?:string, NodeType?:string, NumberOfNodes?:int, Classic?:bool, ReservedNodeId?:string, TargetReservedNodeOfferingId?:string}, PauseCluster?:array{ClusterIdentifier:string}, ResumeCluster?:array{ClusterIdentifier:string}}, Schedule?:string, IamRole?:string, ScheduledActionDescription?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Enable?:bool} $args
     * @return \AWS\Result<array{ScheduledActionName?:string, TargetAction?:array{ResizeCluster?:array{ClusterIdentifier:string, ClusterType?:string, NodeType?:string, NumberOfNodes?:int, Classic?:bool, ReservedNodeId?:string, TargetReservedNodeOfferingId?:string}, PauseCluster?:array{ClusterIdentifier:string}, ResumeCluster?:array{ClusterIdentifier:string}}, Schedule?:string, IamRole?:string, ScheduledActionDescription?:string, State?:"ACTIVE"|"DISABLED", NextInvocations?:array<int|string|\DateTimeInterface>, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}>
     */
    public function modifyScheduledAction(array $args): \AWS\Result { }

    /**
     * @param array{ScheduledActionName:string, TargetAction?:array{ResizeCluster?:array{ClusterIdentifier:string, ClusterType?:string, NodeType?:string, NumberOfNodes?:int, Classic?:bool, ReservedNodeId?:string, TargetReservedNodeOfferingId?:string}, PauseCluster?:array{ClusterIdentifier:string}, ResumeCluster?:array{ClusterIdentifier:string}}, Schedule?:string, IamRole?:string, ScheduledActionDescription?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Enable?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{ScheduledActionName?:string, TargetAction?:array{ResizeCluster?:array{ClusterIdentifier:string, ClusterType?:string, NodeType?:string, NumberOfNodes?:int, Classic?:bool, ReservedNodeId?:string, TargetReservedNodeOfferingId?:string}, PauseCluster?:array{ClusterIdentifier:string}, ResumeCluster?:array{ClusterIdentifier:string}}, Schedule?:string, IamRole?:string, ScheduledActionDescription?:string, State?:"ACTIVE"|"DISABLED", NextInvocations?:array<int|string|\DateTimeInterface>, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}>
     */
    public function modifyScheduledActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier:string, RetentionPeriod:int, Manual?:bool} $args
     * @return \AWS\Result<array{Cluster?:array{ClusterIdentifier?:string, NodeType?:string, ClusterStatus?:string, ClusterAvailabilityStatus?:string, ModifyStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}>}, ClusterCreateTime?:int|string|\DateTimeInterface, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, ClusterParameterGroups?:array<array{ParameterGroupName?:string, ParameterApplyStatus?:string, ClusterParameterStatusList?:array<array{ParameterName?:string, ParameterApplyStatus?:string, ParameterApplyErrorDescription?:string}>}>, ClusterSubnetGroupName?:string, VpcId?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{MasterUserPassword?:string, NodeType?:string, NumberOfNodes?:int, ClusterType?:string, ClusterVersion?:string, AutomatedSnapshotRetentionPeriod?:int, ClusterIdentifier?:string, PubliclyAccessible?:bool, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, EncryptionType?:string}, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, RestoreStatus?:array{Status?:string, CurrentRestoreRateInMegaBytesPerSecond?:float, SnapshotSizeInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int}, DataTransferProgress?:array{Status?:string, CurrentRateInMegaBytesPerSecond?:float, TotalDataInMegaBytes?:int, DataTransferredInMegaBytes?:int, EstimatedTimeToCompletionInSeconds?:int, ElapsedTimeInSeconds?:int}, HsmStatus?:array{HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, Status?:string}, ClusterSnapshotCopyStatus?:array{DestinationRegion?:string, RetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, SnapshotCopyGrantName?:string}, ClusterPublicKey?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>, ElasticIpStatus?:array{ElasticIp?:string, Status?:string}, ClusterRevisionNumber?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, IamRoles?:array<array{IamRoleArn?:string, ApplyStatus?:string}>, PendingActions?:array<string>, MaintenanceTrackName?:string, ElasticResizeNumberOfNodeOptions?:string, DeferredMaintenanceWindows?:array<array{DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface}>, SnapshotScheduleIdentifier?:string, SnapshotScheduleState?:"MODIFYING"|"ACTIVE"|"FAILED", ExpectedNextSnapshotScheduleTime?:int|string|\DateTimeInterface, ExpectedNextSnapshotScheduleTimeStatus?:string, NextMaintenanceWindowStartTime?:int|string|\DateTimeInterface, ResizeInfo?:array{ResizeType?:string, AllowCancelResize?:bool}, AvailabilityZoneRelocationStatus?:string, ClusterNamespaceArn?:string, TotalStorageCapacityInMegaBytes?:int, AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}, DefaultIamRoleArn?:string, ReservedNodeExchangeStatus?:array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}, CustomDomainName?:string, CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:string, MultiAZSecondary?:array{AvailabilityZone?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>}}}>
     */
    public function modifySnapshotCopyRetentionPeriod(array $args): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier:string, RetentionPeriod:int, Manual?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cluster?:array{ClusterIdentifier?:string, NodeType?:string, ClusterStatus?:string, ClusterAvailabilityStatus?:string, ModifyStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}>}, ClusterCreateTime?:int|string|\DateTimeInterface, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, ClusterParameterGroups?:array<array{ParameterGroupName?:string, ParameterApplyStatus?:string, ClusterParameterStatusList?:array<array{ParameterName?:string, ParameterApplyStatus?:string, ParameterApplyErrorDescription?:string}>}>, ClusterSubnetGroupName?:string, VpcId?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{MasterUserPassword?:string, NodeType?:string, NumberOfNodes?:int, ClusterType?:string, ClusterVersion?:string, AutomatedSnapshotRetentionPeriod?:int, ClusterIdentifier?:string, PubliclyAccessible?:bool, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, EncryptionType?:string}, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, RestoreStatus?:array{Status?:string, CurrentRestoreRateInMegaBytesPerSecond?:float, SnapshotSizeInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int}, DataTransferProgress?:array{Status?:string, CurrentRateInMegaBytesPerSecond?:float, TotalDataInMegaBytes?:int, DataTransferredInMegaBytes?:int, EstimatedTimeToCompletionInSeconds?:int, ElapsedTimeInSeconds?:int}, HsmStatus?:array{HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, Status?:string}, ClusterSnapshotCopyStatus?:array{DestinationRegion?:string, RetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, SnapshotCopyGrantName?:string}, ClusterPublicKey?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>, ElasticIpStatus?:array{ElasticIp?:string, Status?:string}, ClusterRevisionNumber?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, IamRoles?:array<array{IamRoleArn?:string, ApplyStatus?:string}>, PendingActions?:array<string>, MaintenanceTrackName?:string, ElasticResizeNumberOfNodeOptions?:string, DeferredMaintenanceWindows?:array<array{DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface}>, SnapshotScheduleIdentifier?:string, SnapshotScheduleState?:"MODIFYING"|"ACTIVE"|"FAILED", ExpectedNextSnapshotScheduleTime?:int|string|\DateTimeInterface, ExpectedNextSnapshotScheduleTimeStatus?:string, NextMaintenanceWindowStartTime?:int|string|\DateTimeInterface, ResizeInfo?:array{ResizeType?:string, AllowCancelResize?:bool}, AvailabilityZoneRelocationStatus?:string, ClusterNamespaceArn?:string, TotalStorageCapacityInMegaBytes?:int, AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}, DefaultIamRoleArn?:string, ReservedNodeExchangeStatus?:array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}, CustomDomainName?:string, CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:string, MultiAZSecondary?:array{AvailabilityZone?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>}}}>
     */
    public function modifySnapshotCopyRetentionPeriodAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ScheduleIdentifier:string, ScheduleDefinitions:array<string>} $args
     * @return \AWS\Result<array{ScheduleDefinitions?:array<string>, ScheduleIdentifier?:string, ScheduleDescription?:string, Tags?:array<array{Key?:string, Value?:string}>, NextInvocations?:array<int|string|\DateTimeInterface>, AssociatedClusterCount?:int, AssociatedClusters?:array<array{ClusterIdentifier?:string, ScheduleAssociationState?:"MODIFYING"|"ACTIVE"|"FAILED"}>}>
     */
    public function modifySnapshotSchedule(array $args): \AWS\Result { }

    /**
     * @param array{ScheduleIdentifier:string, ScheduleDefinitions:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ScheduleDefinitions?:array<string>, ScheduleIdentifier?:string, ScheduleDescription?:string, Tags?:array<array{Key?:string, Value?:string}>, NextInvocations?:array<int|string|\DateTimeInterface>, AssociatedClusterCount?:int, AssociatedClusters?:array<array{ClusterIdentifier?:string, ScheduleAssociationState?:"MODIFYING"|"ACTIVE"|"FAILED"}>}>
     */
    public function modifySnapshotScheduleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UsageLimitId:string, Amount?:int, BreachAction?:"log"|"emit-metric"|"disable"} $args
     * @return \AWS\Result<array{UsageLimitId?:string, ClusterIdentifier?:string, FeatureType?:"spectrum"|"concurrency-scaling"|"cross-region-datasharing", LimitType?:"time"|"data-scanned", Amount?:int, Period?:"daily"|"weekly"|"monthly", BreachAction?:"log"|"emit-metric"|"disable", Tags?:array<array{Key?:string, Value?:string}>}>
     */
    public function modifyUsageLimit(array $args): \AWS\Result { }

    /**
     * @param array{UsageLimitId:string, Amount?:int, BreachAction?:"log"|"emit-metric"|"disable"} $args
     * @return \GuzzleHttp\Promise\Promise<array{UsageLimitId?:string, ClusterIdentifier?:string, FeatureType?:"spectrum"|"concurrency-scaling"|"cross-region-datasharing", LimitType?:"time"|"data-scanned", Amount?:int, Period?:"daily"|"weekly"|"monthly", BreachAction?:"log"|"emit-metric"|"disable", Tags?:array<array{Key?:string, Value?:string}>}>
     */
    public function modifyUsageLimitAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier:string} $args
     * @return \AWS\Result<array{Cluster?:array{ClusterIdentifier?:string, NodeType?:string, ClusterStatus?:string, ClusterAvailabilityStatus?:string, ModifyStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}>}, ClusterCreateTime?:int|string|\DateTimeInterface, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, ClusterParameterGroups?:array<array{ParameterGroupName?:string, ParameterApplyStatus?:string, ClusterParameterStatusList?:array<array{ParameterName?:string, ParameterApplyStatus?:string, ParameterApplyErrorDescription?:string}>}>, ClusterSubnetGroupName?:string, VpcId?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{MasterUserPassword?:string, NodeType?:string, NumberOfNodes?:int, ClusterType?:string, ClusterVersion?:string, AutomatedSnapshotRetentionPeriod?:int, ClusterIdentifier?:string, PubliclyAccessible?:bool, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, EncryptionType?:string}, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, RestoreStatus?:array{Status?:string, CurrentRestoreRateInMegaBytesPerSecond?:float, SnapshotSizeInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int}, DataTransferProgress?:array{Status?:string, CurrentRateInMegaBytesPerSecond?:float, TotalDataInMegaBytes?:int, DataTransferredInMegaBytes?:int, EstimatedTimeToCompletionInSeconds?:int, ElapsedTimeInSeconds?:int}, HsmStatus?:array{HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, Status?:string}, ClusterSnapshotCopyStatus?:array{DestinationRegion?:string, RetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, SnapshotCopyGrantName?:string}, ClusterPublicKey?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>, ElasticIpStatus?:array{ElasticIp?:string, Status?:string}, ClusterRevisionNumber?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, IamRoles?:array<array{IamRoleArn?:string, ApplyStatus?:string}>, PendingActions?:array<string>, MaintenanceTrackName?:string, ElasticResizeNumberOfNodeOptions?:string, DeferredMaintenanceWindows?:array<array{DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface}>, SnapshotScheduleIdentifier?:string, SnapshotScheduleState?:"MODIFYING"|"ACTIVE"|"FAILED", ExpectedNextSnapshotScheduleTime?:int|string|\DateTimeInterface, ExpectedNextSnapshotScheduleTimeStatus?:string, NextMaintenanceWindowStartTime?:int|string|\DateTimeInterface, ResizeInfo?:array{ResizeType?:string, AllowCancelResize?:bool}, AvailabilityZoneRelocationStatus?:string, ClusterNamespaceArn?:string, TotalStorageCapacityInMegaBytes?:int, AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}, DefaultIamRoleArn?:string, ReservedNodeExchangeStatus?:array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}, CustomDomainName?:string, CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:string, MultiAZSecondary?:array{AvailabilityZone?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>}}}>
     */
    public function pauseCluster(array $args): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cluster?:array{ClusterIdentifier?:string, NodeType?:string, ClusterStatus?:string, ClusterAvailabilityStatus?:string, ModifyStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}>}, ClusterCreateTime?:int|string|\DateTimeInterface, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, ClusterParameterGroups?:array<array{ParameterGroupName?:string, ParameterApplyStatus?:string, ClusterParameterStatusList?:array<array{ParameterName?:string, ParameterApplyStatus?:string, ParameterApplyErrorDescription?:string}>}>, ClusterSubnetGroupName?:string, VpcId?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{MasterUserPassword?:string, NodeType?:string, NumberOfNodes?:int, ClusterType?:string, ClusterVersion?:string, AutomatedSnapshotRetentionPeriod?:int, ClusterIdentifier?:string, PubliclyAccessible?:bool, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, EncryptionType?:string}, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, RestoreStatus?:array{Status?:string, CurrentRestoreRateInMegaBytesPerSecond?:float, SnapshotSizeInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int}, DataTransferProgress?:array{Status?:string, CurrentRateInMegaBytesPerSecond?:float, TotalDataInMegaBytes?:int, DataTransferredInMegaBytes?:int, EstimatedTimeToCompletionInSeconds?:int, ElapsedTimeInSeconds?:int}, HsmStatus?:array{HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, Status?:string}, ClusterSnapshotCopyStatus?:array{DestinationRegion?:string, RetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, SnapshotCopyGrantName?:string}, ClusterPublicKey?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>, ElasticIpStatus?:array{ElasticIp?:string, Status?:string}, ClusterRevisionNumber?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, IamRoles?:array<array{IamRoleArn?:string, ApplyStatus?:string}>, PendingActions?:array<string>, MaintenanceTrackName?:string, ElasticResizeNumberOfNodeOptions?:string, DeferredMaintenanceWindows?:array<array{DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface}>, SnapshotScheduleIdentifier?:string, SnapshotScheduleState?:"MODIFYING"|"ACTIVE"|"FAILED", ExpectedNextSnapshotScheduleTime?:int|string|\DateTimeInterface, ExpectedNextSnapshotScheduleTimeStatus?:string, NextMaintenanceWindowStartTime?:int|string|\DateTimeInterface, ResizeInfo?:array{ResizeType?:string, AllowCancelResize?:bool}, AvailabilityZoneRelocationStatus?:string, ClusterNamespaceArn?:string, TotalStorageCapacityInMegaBytes?:int, AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}, DefaultIamRoleArn?:string, ReservedNodeExchangeStatus?:array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}, CustomDomainName?:string, CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:string, MultiAZSecondary?:array{AvailabilityZone?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>}}}>
     */
    public function pauseClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ReservedNodeOfferingId:string, NodeCount?:int} $args
     * @return \AWS\Result<array{ReservedNode?:array{ReservedNodeId?:string, ReservedNodeOfferingId?:string, NodeType?:string, StartTime?:int|string|\DateTimeInterface, Duration?:int, FixedPrice?:float, UsagePrice?:float, CurrencyCode?:string, NodeCount?:int, State?:string, OfferingType?:string, RecurringCharges?:array<array{RecurringChargeAmount?:float, RecurringChargeFrequency?:string}>, ReservedNodeOfferingType?:"Regular"|"Upgradable"}}>
     */
    public function purchaseReservedNodeOffering(array $args): \AWS\Result { }

    /**
     * @param array{ReservedNodeOfferingId:string, NodeCount?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReservedNode?:array{ReservedNodeId?:string, ReservedNodeOfferingId?:string, NodeType?:string, StartTime?:int|string|\DateTimeInterface, Duration?:int, FixedPrice?:float, UsagePrice?:float, CurrencyCode?:string, NodeCount?:int, State?:string, OfferingType?:string, RecurringCharges?:array<array{RecurringChargeAmount?:float, RecurringChargeFrequency?:string}>, ReservedNodeOfferingType?:"Regular"|"Upgradable"}}>
     */
    public function purchaseReservedNodeOfferingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Policy:string} $args
     * @return \AWS\Result<array{ResourcePolicy?:array{ResourceArn?:string, Policy?:string}}>
     */
    public function putResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Policy:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourcePolicy?:array{ResourceArn?:string, Policy?:string}}>
     */
    public function putResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier:string} $args
     * @return \AWS\Result<array{Cluster?:array{ClusterIdentifier?:string, NodeType?:string, ClusterStatus?:string, ClusterAvailabilityStatus?:string, ModifyStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}>}, ClusterCreateTime?:int|string|\DateTimeInterface, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, ClusterParameterGroups?:array<array{ParameterGroupName?:string, ParameterApplyStatus?:string, ClusterParameterStatusList?:array<array{ParameterName?:string, ParameterApplyStatus?:string, ParameterApplyErrorDescription?:string}>}>, ClusterSubnetGroupName?:string, VpcId?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{MasterUserPassword?:string, NodeType?:string, NumberOfNodes?:int, ClusterType?:string, ClusterVersion?:string, AutomatedSnapshotRetentionPeriod?:int, ClusterIdentifier?:string, PubliclyAccessible?:bool, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, EncryptionType?:string}, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, RestoreStatus?:array{Status?:string, CurrentRestoreRateInMegaBytesPerSecond?:float, SnapshotSizeInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int}, DataTransferProgress?:array{Status?:string, CurrentRateInMegaBytesPerSecond?:float, TotalDataInMegaBytes?:int, DataTransferredInMegaBytes?:int, EstimatedTimeToCompletionInSeconds?:int, ElapsedTimeInSeconds?:int}, HsmStatus?:array{HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, Status?:string}, ClusterSnapshotCopyStatus?:array{DestinationRegion?:string, RetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, SnapshotCopyGrantName?:string}, ClusterPublicKey?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>, ElasticIpStatus?:array{ElasticIp?:string, Status?:string}, ClusterRevisionNumber?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, IamRoles?:array<array{IamRoleArn?:string, ApplyStatus?:string}>, PendingActions?:array<string>, MaintenanceTrackName?:string, ElasticResizeNumberOfNodeOptions?:string, DeferredMaintenanceWindows?:array<array{DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface}>, SnapshotScheduleIdentifier?:string, SnapshotScheduleState?:"MODIFYING"|"ACTIVE"|"FAILED", ExpectedNextSnapshotScheduleTime?:int|string|\DateTimeInterface, ExpectedNextSnapshotScheduleTimeStatus?:string, NextMaintenanceWindowStartTime?:int|string|\DateTimeInterface, ResizeInfo?:array{ResizeType?:string, AllowCancelResize?:bool}, AvailabilityZoneRelocationStatus?:string, ClusterNamespaceArn?:string, TotalStorageCapacityInMegaBytes?:int, AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}, DefaultIamRoleArn?:string, ReservedNodeExchangeStatus?:array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}, CustomDomainName?:string, CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:string, MultiAZSecondary?:array{AvailabilityZone?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>}}}>
     */
    public function rebootCluster(array $args): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cluster?:array{ClusterIdentifier?:string, NodeType?:string, ClusterStatus?:string, ClusterAvailabilityStatus?:string, ModifyStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}>}, ClusterCreateTime?:int|string|\DateTimeInterface, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, ClusterParameterGroups?:array<array{ParameterGroupName?:string, ParameterApplyStatus?:string, ClusterParameterStatusList?:array<array{ParameterName?:string, ParameterApplyStatus?:string, ParameterApplyErrorDescription?:string}>}>, ClusterSubnetGroupName?:string, VpcId?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{MasterUserPassword?:string, NodeType?:string, NumberOfNodes?:int, ClusterType?:string, ClusterVersion?:string, AutomatedSnapshotRetentionPeriod?:int, ClusterIdentifier?:string, PubliclyAccessible?:bool, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, EncryptionType?:string}, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, RestoreStatus?:array{Status?:string, CurrentRestoreRateInMegaBytesPerSecond?:float, SnapshotSizeInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int}, DataTransferProgress?:array{Status?:string, CurrentRateInMegaBytesPerSecond?:float, TotalDataInMegaBytes?:int, DataTransferredInMegaBytes?:int, EstimatedTimeToCompletionInSeconds?:int, ElapsedTimeInSeconds?:int}, HsmStatus?:array{HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, Status?:string}, ClusterSnapshotCopyStatus?:array{DestinationRegion?:string, RetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, SnapshotCopyGrantName?:string}, ClusterPublicKey?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>, ElasticIpStatus?:array{ElasticIp?:string, Status?:string}, ClusterRevisionNumber?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, IamRoles?:array<array{IamRoleArn?:string, ApplyStatus?:string}>, PendingActions?:array<string>, MaintenanceTrackName?:string, ElasticResizeNumberOfNodeOptions?:string, DeferredMaintenanceWindows?:array<array{DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface}>, SnapshotScheduleIdentifier?:string, SnapshotScheduleState?:"MODIFYING"|"ACTIVE"|"FAILED", ExpectedNextSnapshotScheduleTime?:int|string|\DateTimeInterface, ExpectedNextSnapshotScheduleTimeStatus?:string, NextMaintenanceWindowStartTime?:int|string|\DateTimeInterface, ResizeInfo?:array{ResizeType?:string, AllowCancelResize?:bool}, AvailabilityZoneRelocationStatus?:string, ClusterNamespaceArn?:string, TotalStorageCapacityInMegaBytes?:int, AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}, DefaultIamRoleArn?:string, ReservedNodeExchangeStatus?:array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}, CustomDomainName?:string, CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:string, MultiAZSecondary?:array{AvailabilityZone?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>}}}>
     */
    public function rebootClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NamespaceIdentifier:array{ServerlessIdentifier?:array{NamespaceIdentifier:mixed, WorkgroupIdentifier:string}, ProvisionedIdentifier?:array{ClusterIdentifier:string}}, ConsumerIdentifiers:array<string>} $args
     * @return \AWS\Result<array{Status?:"Registering"|"Deregistering"}>
     */
    public function registerNamespace(array $args): \AWS\Result { }

    /**
     * @param array{NamespaceIdentifier:array{ServerlessIdentifier?:array{NamespaceIdentifier:mixed, WorkgroupIdentifier:string}, ProvisionedIdentifier?:array{ClusterIdentifier:string}}, ConsumerIdentifiers:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status?:"Registering"|"Deregistering"}>
     */
    public function registerNamespaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DataShareArn:string} $args
     * @return \AWS\Result<array{DataShareArn?:string, ProducerArn?:string, AllowPubliclyAccessibleConsumers?:bool, DataShareAssociations?:array<array{ConsumerIdentifier?:string, Status?:"ACTIVE"|"PENDING_AUTHORIZATION"|"AUTHORIZED"|"DEAUTHORIZED"|"REJECTED"|"AVAILABLE", ConsumerRegion?:string, CreatedDate?:int|string|\DateTimeInterface, StatusChangeDate?:int|string|\DateTimeInterface, ProducerAllowedWrites?:bool, ConsumerAcceptedWrites?:bool}>, ManagedBy?:string, DataShareType?:"INTERNAL"}>
     */
    public function rejectDataShare(array $args): \AWS\Result { }

    /**
     * @param array{DataShareArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DataShareArn?:string, ProducerArn?:string, AllowPubliclyAccessibleConsumers?:bool, DataShareAssociations?:array<array{ConsumerIdentifier?:string, Status?:"ACTIVE"|"PENDING_AUTHORIZATION"|"AUTHORIZED"|"DEAUTHORIZED"|"REJECTED"|"AVAILABLE", ConsumerRegion?:string, CreatedDate?:int|string|\DateTimeInterface, StatusChangeDate?:int|string|\DateTimeInterface, ProducerAllowedWrites?:bool, ConsumerAcceptedWrites?:bool}>, ManagedBy?:string, DataShareType?:"INTERNAL"}>
     */
    public function rejectDataShareAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ParameterGroupName:string, ResetAllParameters?:bool, Parameters?:array<array{ParameterName?:string, ParameterValue?:string, Description?:string, Source?:string, DataType?:string, AllowedValues?:string, ApplyType?:"static"|"dynamic", IsModifiable?:bool, MinimumEngineVersion?:string}>} $args
     * @return \AWS\Result<array{ParameterGroupName?:string, ParameterGroupStatus?:string}>
     */
    public function resetClusterParameterGroup(array $args): \AWS\Result { }

    /**
     * @param array{ParameterGroupName:string, ResetAllParameters?:bool, Parameters?:array<array{ParameterName?:string, ParameterValue?:string, Description?:string, Source?:string, DataType?:string, AllowedValues?:string, ApplyType?:"static"|"dynamic", IsModifiable?:bool, MinimumEngineVersion?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ParameterGroupName?:string, ParameterGroupStatus?:string}>
     */
    public function resetClusterParameterGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier:string, ClusterType?:string, NodeType?:string, NumberOfNodes?:int, Classic?:bool, ReservedNodeId?:string, TargetReservedNodeOfferingId?:string} $args
     * @return \AWS\Result<array{Cluster?:array{ClusterIdentifier?:string, NodeType?:string, ClusterStatus?:string, ClusterAvailabilityStatus?:string, ModifyStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}>}, ClusterCreateTime?:int|string|\DateTimeInterface, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, ClusterParameterGroups?:array<array{ParameterGroupName?:string, ParameterApplyStatus?:string, ClusterParameterStatusList?:array<array{ParameterName?:string, ParameterApplyStatus?:string, ParameterApplyErrorDescription?:string}>}>, ClusterSubnetGroupName?:string, VpcId?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{MasterUserPassword?:string, NodeType?:string, NumberOfNodes?:int, ClusterType?:string, ClusterVersion?:string, AutomatedSnapshotRetentionPeriod?:int, ClusterIdentifier?:string, PubliclyAccessible?:bool, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, EncryptionType?:string}, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, RestoreStatus?:array{Status?:string, CurrentRestoreRateInMegaBytesPerSecond?:float, SnapshotSizeInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int}, DataTransferProgress?:array{Status?:string, CurrentRateInMegaBytesPerSecond?:float, TotalDataInMegaBytes?:int, DataTransferredInMegaBytes?:int, EstimatedTimeToCompletionInSeconds?:int, ElapsedTimeInSeconds?:int}, HsmStatus?:array{HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, Status?:string}, ClusterSnapshotCopyStatus?:array{DestinationRegion?:string, RetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, SnapshotCopyGrantName?:string}, ClusterPublicKey?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>, ElasticIpStatus?:array{ElasticIp?:string, Status?:string}, ClusterRevisionNumber?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, IamRoles?:array<array{IamRoleArn?:string, ApplyStatus?:string}>, PendingActions?:array<string>, MaintenanceTrackName?:string, ElasticResizeNumberOfNodeOptions?:string, DeferredMaintenanceWindows?:array<array{DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface}>, SnapshotScheduleIdentifier?:string, SnapshotScheduleState?:"MODIFYING"|"ACTIVE"|"FAILED", ExpectedNextSnapshotScheduleTime?:int|string|\DateTimeInterface, ExpectedNextSnapshotScheduleTimeStatus?:string, NextMaintenanceWindowStartTime?:int|string|\DateTimeInterface, ResizeInfo?:array{ResizeType?:string, AllowCancelResize?:bool}, AvailabilityZoneRelocationStatus?:string, ClusterNamespaceArn?:string, TotalStorageCapacityInMegaBytes?:int, AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}, DefaultIamRoleArn?:string, ReservedNodeExchangeStatus?:array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}, CustomDomainName?:string, CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:string, MultiAZSecondary?:array{AvailabilityZone?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>}}}>
     */
    public function resizeCluster(array $args): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier:string, ClusterType?:string, NodeType?:string, NumberOfNodes?:int, Classic?:bool, ReservedNodeId?:string, TargetReservedNodeOfferingId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cluster?:array{ClusterIdentifier?:string, NodeType?:string, ClusterStatus?:string, ClusterAvailabilityStatus?:string, ModifyStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}>}, ClusterCreateTime?:int|string|\DateTimeInterface, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, ClusterParameterGroups?:array<array{ParameterGroupName?:string, ParameterApplyStatus?:string, ClusterParameterStatusList?:array<array{ParameterName?:string, ParameterApplyStatus?:string, ParameterApplyErrorDescription?:string}>}>, ClusterSubnetGroupName?:string, VpcId?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{MasterUserPassword?:string, NodeType?:string, NumberOfNodes?:int, ClusterType?:string, ClusterVersion?:string, AutomatedSnapshotRetentionPeriod?:int, ClusterIdentifier?:string, PubliclyAccessible?:bool, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, EncryptionType?:string}, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, RestoreStatus?:array{Status?:string, CurrentRestoreRateInMegaBytesPerSecond?:float, SnapshotSizeInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int}, DataTransferProgress?:array{Status?:string, CurrentRateInMegaBytesPerSecond?:float, TotalDataInMegaBytes?:int, DataTransferredInMegaBytes?:int, EstimatedTimeToCompletionInSeconds?:int, ElapsedTimeInSeconds?:int}, HsmStatus?:array{HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, Status?:string}, ClusterSnapshotCopyStatus?:array{DestinationRegion?:string, RetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, SnapshotCopyGrantName?:string}, ClusterPublicKey?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>, ElasticIpStatus?:array{ElasticIp?:string, Status?:string}, ClusterRevisionNumber?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, IamRoles?:array<array{IamRoleArn?:string, ApplyStatus?:string}>, PendingActions?:array<string>, MaintenanceTrackName?:string, ElasticResizeNumberOfNodeOptions?:string, DeferredMaintenanceWindows?:array<array{DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface}>, SnapshotScheduleIdentifier?:string, SnapshotScheduleState?:"MODIFYING"|"ACTIVE"|"FAILED", ExpectedNextSnapshotScheduleTime?:int|string|\DateTimeInterface, ExpectedNextSnapshotScheduleTimeStatus?:string, NextMaintenanceWindowStartTime?:int|string|\DateTimeInterface, ResizeInfo?:array{ResizeType?:string, AllowCancelResize?:bool}, AvailabilityZoneRelocationStatus?:string, ClusterNamespaceArn?:string, TotalStorageCapacityInMegaBytes?:int, AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}, DefaultIamRoleArn?:string, ReservedNodeExchangeStatus?:array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}, CustomDomainName?:string, CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:string, MultiAZSecondary?:array{AvailabilityZone?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>}}}>
     */
    public function resizeClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier:string, SnapshotIdentifier?:string, SnapshotArn?:string, SnapshotClusterIdentifier?:string, Port?:int, AvailabilityZone?:string, AllowVersionUpgrade?:bool, ClusterSubnetGroupName?:string, PubliclyAccessible?:bool, OwnerAccount?:string, HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, ElasticIp?:string, ClusterParameterGroupName?:string, ClusterSecurityGroups?:array<string>, VpcSecurityGroupIds?:array<string>, PreferredMaintenanceWindow?:string, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, KmsKeyId?:string, NodeType?:string, EnhancedVpcRouting?:bool, AdditionalInfo?:string, IamRoles?:array<string>, MaintenanceTrackName?:string, SnapshotScheduleIdentifier?:string, NumberOfNodes?:int, AvailabilityZoneRelocation?:bool, AquaConfigurationStatus?:"enabled"|"disabled"|"auto", DefaultIamRoleArn?:string, ReservedNodeId?:string, TargetReservedNodeOfferingId?:string, Encrypted?:bool, ManageMasterPassword?:bool, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:bool} $args
     * @return \AWS\Result<array{Cluster?:array{ClusterIdentifier?:string, NodeType?:string, ClusterStatus?:string, ClusterAvailabilityStatus?:string, ModifyStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}>}, ClusterCreateTime?:int|string|\DateTimeInterface, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, ClusterParameterGroups?:array<array{ParameterGroupName?:string, ParameterApplyStatus?:string, ClusterParameterStatusList?:array<array{ParameterName?:string, ParameterApplyStatus?:string, ParameterApplyErrorDescription?:string}>}>, ClusterSubnetGroupName?:string, VpcId?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{MasterUserPassword?:string, NodeType?:string, NumberOfNodes?:int, ClusterType?:string, ClusterVersion?:string, AutomatedSnapshotRetentionPeriod?:int, ClusterIdentifier?:string, PubliclyAccessible?:bool, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, EncryptionType?:string}, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, RestoreStatus?:array{Status?:string, CurrentRestoreRateInMegaBytesPerSecond?:float, SnapshotSizeInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int}, DataTransferProgress?:array{Status?:string, CurrentRateInMegaBytesPerSecond?:float, TotalDataInMegaBytes?:int, DataTransferredInMegaBytes?:int, EstimatedTimeToCompletionInSeconds?:int, ElapsedTimeInSeconds?:int}, HsmStatus?:array{HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, Status?:string}, ClusterSnapshotCopyStatus?:array{DestinationRegion?:string, RetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, SnapshotCopyGrantName?:string}, ClusterPublicKey?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>, ElasticIpStatus?:array{ElasticIp?:string, Status?:string}, ClusterRevisionNumber?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, IamRoles?:array<array{IamRoleArn?:string, ApplyStatus?:string}>, PendingActions?:array<string>, MaintenanceTrackName?:string, ElasticResizeNumberOfNodeOptions?:string, DeferredMaintenanceWindows?:array<array{DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface}>, SnapshotScheduleIdentifier?:string, SnapshotScheduleState?:"MODIFYING"|"ACTIVE"|"FAILED", ExpectedNextSnapshotScheduleTime?:int|string|\DateTimeInterface, ExpectedNextSnapshotScheduleTimeStatus?:string, NextMaintenanceWindowStartTime?:int|string|\DateTimeInterface, ResizeInfo?:array{ResizeType?:string, AllowCancelResize?:bool}, AvailabilityZoneRelocationStatus?:string, ClusterNamespaceArn?:string, TotalStorageCapacityInMegaBytes?:int, AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}, DefaultIamRoleArn?:string, ReservedNodeExchangeStatus?:array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}, CustomDomainName?:string, CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:string, MultiAZSecondary?:array{AvailabilityZone?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>}}}>
     */
    public function restoreFromClusterSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier:string, SnapshotIdentifier?:string, SnapshotArn?:string, SnapshotClusterIdentifier?:string, Port?:int, AvailabilityZone?:string, AllowVersionUpgrade?:bool, ClusterSubnetGroupName?:string, PubliclyAccessible?:bool, OwnerAccount?:string, HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, ElasticIp?:string, ClusterParameterGroupName?:string, ClusterSecurityGroups?:array<string>, VpcSecurityGroupIds?:array<string>, PreferredMaintenanceWindow?:string, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, KmsKeyId?:string, NodeType?:string, EnhancedVpcRouting?:bool, AdditionalInfo?:string, IamRoles?:array<string>, MaintenanceTrackName?:string, SnapshotScheduleIdentifier?:string, NumberOfNodes?:int, AvailabilityZoneRelocation?:bool, AquaConfigurationStatus?:"enabled"|"disabled"|"auto", DefaultIamRoleArn?:string, ReservedNodeId?:string, TargetReservedNodeOfferingId?:string, Encrypted?:bool, ManageMasterPassword?:bool, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cluster?:array{ClusterIdentifier?:string, NodeType?:string, ClusterStatus?:string, ClusterAvailabilityStatus?:string, ModifyStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}>}, ClusterCreateTime?:int|string|\DateTimeInterface, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, ClusterParameterGroups?:array<array{ParameterGroupName?:string, ParameterApplyStatus?:string, ClusterParameterStatusList?:array<array{ParameterName?:string, ParameterApplyStatus?:string, ParameterApplyErrorDescription?:string}>}>, ClusterSubnetGroupName?:string, VpcId?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{MasterUserPassword?:string, NodeType?:string, NumberOfNodes?:int, ClusterType?:string, ClusterVersion?:string, AutomatedSnapshotRetentionPeriod?:int, ClusterIdentifier?:string, PubliclyAccessible?:bool, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, EncryptionType?:string}, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, RestoreStatus?:array{Status?:string, CurrentRestoreRateInMegaBytesPerSecond?:float, SnapshotSizeInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int}, DataTransferProgress?:array{Status?:string, CurrentRateInMegaBytesPerSecond?:float, TotalDataInMegaBytes?:int, DataTransferredInMegaBytes?:int, EstimatedTimeToCompletionInSeconds?:int, ElapsedTimeInSeconds?:int}, HsmStatus?:array{HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, Status?:string}, ClusterSnapshotCopyStatus?:array{DestinationRegion?:string, RetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, SnapshotCopyGrantName?:string}, ClusterPublicKey?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>, ElasticIpStatus?:array{ElasticIp?:string, Status?:string}, ClusterRevisionNumber?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, IamRoles?:array<array{IamRoleArn?:string, ApplyStatus?:string}>, PendingActions?:array<string>, MaintenanceTrackName?:string, ElasticResizeNumberOfNodeOptions?:string, DeferredMaintenanceWindows?:array<array{DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface}>, SnapshotScheduleIdentifier?:string, SnapshotScheduleState?:"MODIFYING"|"ACTIVE"|"FAILED", ExpectedNextSnapshotScheduleTime?:int|string|\DateTimeInterface, ExpectedNextSnapshotScheduleTimeStatus?:string, NextMaintenanceWindowStartTime?:int|string|\DateTimeInterface, ResizeInfo?:array{ResizeType?:string, AllowCancelResize?:bool}, AvailabilityZoneRelocationStatus?:string, ClusterNamespaceArn?:string, TotalStorageCapacityInMegaBytes?:int, AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}, DefaultIamRoleArn?:string, ReservedNodeExchangeStatus?:array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}, CustomDomainName?:string, CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:string, MultiAZSecondary?:array{AvailabilityZone?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>}}}>
     */
    public function restoreFromClusterSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier:string, SnapshotIdentifier:string, SourceDatabaseName:string, SourceSchemaName?:string, SourceTableName:string, TargetDatabaseName?:string, TargetSchemaName?:string, NewTableName:string, EnableCaseSensitiveIdentifier?:bool} $args
     * @return \AWS\Result<array{TableRestoreStatus?:array{TableRestoreRequestId?:string, Status?:"PENDING"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"CANCELED", Message?:string, RequestTime?:int|string|\DateTimeInterface, ProgressInMegaBytes?:int, TotalDataInMegaBytes?:int, ClusterIdentifier?:string, SnapshotIdentifier?:string, SourceDatabaseName?:string, SourceSchemaName?:string, SourceTableName?:string, TargetDatabaseName?:string, TargetSchemaName?:string, NewTableName?:string}}>
     */
    public function restoreTableFromClusterSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier:string, SnapshotIdentifier:string, SourceDatabaseName:string, SourceSchemaName?:string, SourceTableName:string, TargetDatabaseName?:string, TargetSchemaName?:string, NewTableName:string, EnableCaseSensitiveIdentifier?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{TableRestoreStatus?:array{TableRestoreRequestId?:string, Status?:"PENDING"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"CANCELED", Message?:string, RequestTime?:int|string|\DateTimeInterface, ProgressInMegaBytes?:int, TotalDataInMegaBytes?:int, ClusterIdentifier?:string, SnapshotIdentifier?:string, SourceDatabaseName?:string, SourceSchemaName?:string, SourceTableName?:string, TargetDatabaseName?:string, TargetSchemaName?:string, NewTableName?:string}}>
     */
    public function restoreTableFromClusterSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier:string} $args
     * @return \AWS\Result<array{Cluster?:array{ClusterIdentifier?:string, NodeType?:string, ClusterStatus?:string, ClusterAvailabilityStatus?:string, ModifyStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}>}, ClusterCreateTime?:int|string|\DateTimeInterface, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, ClusterParameterGroups?:array<array{ParameterGroupName?:string, ParameterApplyStatus?:string, ClusterParameterStatusList?:array<array{ParameterName?:string, ParameterApplyStatus?:string, ParameterApplyErrorDescription?:string}>}>, ClusterSubnetGroupName?:string, VpcId?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{MasterUserPassword?:string, NodeType?:string, NumberOfNodes?:int, ClusterType?:string, ClusterVersion?:string, AutomatedSnapshotRetentionPeriod?:int, ClusterIdentifier?:string, PubliclyAccessible?:bool, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, EncryptionType?:string}, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, RestoreStatus?:array{Status?:string, CurrentRestoreRateInMegaBytesPerSecond?:float, SnapshotSizeInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int}, DataTransferProgress?:array{Status?:string, CurrentRateInMegaBytesPerSecond?:float, TotalDataInMegaBytes?:int, DataTransferredInMegaBytes?:int, EstimatedTimeToCompletionInSeconds?:int, ElapsedTimeInSeconds?:int}, HsmStatus?:array{HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, Status?:string}, ClusterSnapshotCopyStatus?:array{DestinationRegion?:string, RetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, SnapshotCopyGrantName?:string}, ClusterPublicKey?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>, ElasticIpStatus?:array{ElasticIp?:string, Status?:string}, ClusterRevisionNumber?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, IamRoles?:array<array{IamRoleArn?:string, ApplyStatus?:string}>, PendingActions?:array<string>, MaintenanceTrackName?:string, ElasticResizeNumberOfNodeOptions?:string, DeferredMaintenanceWindows?:array<array{DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface}>, SnapshotScheduleIdentifier?:string, SnapshotScheduleState?:"MODIFYING"|"ACTIVE"|"FAILED", ExpectedNextSnapshotScheduleTime?:int|string|\DateTimeInterface, ExpectedNextSnapshotScheduleTimeStatus?:string, NextMaintenanceWindowStartTime?:int|string|\DateTimeInterface, ResizeInfo?:array{ResizeType?:string, AllowCancelResize?:bool}, AvailabilityZoneRelocationStatus?:string, ClusterNamespaceArn?:string, TotalStorageCapacityInMegaBytes?:int, AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}, DefaultIamRoleArn?:string, ReservedNodeExchangeStatus?:array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}, CustomDomainName?:string, CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:string, MultiAZSecondary?:array{AvailabilityZone?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>}}}>
     */
    public function resumeCluster(array $args): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cluster?:array{ClusterIdentifier?:string, NodeType?:string, ClusterStatus?:string, ClusterAvailabilityStatus?:string, ModifyStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}>}, ClusterCreateTime?:int|string|\DateTimeInterface, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, ClusterParameterGroups?:array<array{ParameterGroupName?:string, ParameterApplyStatus?:string, ClusterParameterStatusList?:array<array{ParameterName?:string, ParameterApplyStatus?:string, ParameterApplyErrorDescription?:string}>}>, ClusterSubnetGroupName?:string, VpcId?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{MasterUserPassword?:string, NodeType?:string, NumberOfNodes?:int, ClusterType?:string, ClusterVersion?:string, AutomatedSnapshotRetentionPeriod?:int, ClusterIdentifier?:string, PubliclyAccessible?:bool, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, EncryptionType?:string}, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, RestoreStatus?:array{Status?:string, CurrentRestoreRateInMegaBytesPerSecond?:float, SnapshotSizeInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int}, DataTransferProgress?:array{Status?:string, CurrentRateInMegaBytesPerSecond?:float, TotalDataInMegaBytes?:int, DataTransferredInMegaBytes?:int, EstimatedTimeToCompletionInSeconds?:int, ElapsedTimeInSeconds?:int}, HsmStatus?:array{HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, Status?:string}, ClusterSnapshotCopyStatus?:array{DestinationRegion?:string, RetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, SnapshotCopyGrantName?:string}, ClusterPublicKey?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>, ElasticIpStatus?:array{ElasticIp?:string, Status?:string}, ClusterRevisionNumber?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, IamRoles?:array<array{IamRoleArn?:string, ApplyStatus?:string}>, PendingActions?:array<string>, MaintenanceTrackName?:string, ElasticResizeNumberOfNodeOptions?:string, DeferredMaintenanceWindows?:array<array{DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface}>, SnapshotScheduleIdentifier?:string, SnapshotScheduleState?:"MODIFYING"|"ACTIVE"|"FAILED", ExpectedNextSnapshotScheduleTime?:int|string|\DateTimeInterface, ExpectedNextSnapshotScheduleTimeStatus?:string, NextMaintenanceWindowStartTime?:int|string|\DateTimeInterface, ResizeInfo?:array{ResizeType?:string, AllowCancelResize?:bool}, AvailabilityZoneRelocationStatus?:string, ClusterNamespaceArn?:string, TotalStorageCapacityInMegaBytes?:int, AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}, DefaultIamRoleArn?:string, ReservedNodeExchangeStatus?:array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}, CustomDomainName?:string, CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:string, MultiAZSecondary?:array{AvailabilityZone?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>}}}>
     */
    public function resumeClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterSecurityGroupName:string, CIDRIP?:string, EC2SecurityGroupName?:string, EC2SecurityGroupOwnerId?:string} $args
     * @return \AWS\Result<array{ClusterSecurityGroup?:array{ClusterSecurityGroupName?:string, Description?:string, EC2SecurityGroups?:array<array{Status?:string, EC2SecurityGroupName?:string, EC2SecurityGroupOwnerId?:string, Tags?:array<array{Key?:string, Value?:string}>}>, IPRanges?:array<array{Status?:string, CIDRIP?:string, Tags?:array<array{Key?:string, Value?:string}>}>, Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function revokeClusterSecurityGroupIngress(array $args): \AWS\Result { }

    /**
     * @param array{ClusterSecurityGroupName:string, CIDRIP?:string, EC2SecurityGroupName?:string, EC2SecurityGroupOwnerId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClusterSecurityGroup?:array{ClusterSecurityGroupName?:string, Description?:string, EC2SecurityGroups?:array<array{Status?:string, EC2SecurityGroupName?:string, EC2SecurityGroupOwnerId?:string, Tags?:array<array{Key?:string, Value?:string}>}>, IPRanges?:array<array{Status?:string, CIDRIP?:string, Tags?:array<array{Key?:string, Value?:string}>}>, Tags?:array<array{Key?:string, Value?:string}>}}>
     */
    public function revokeClusterSecurityGroupIngressAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier?:string, Account?:string, VpcIds?:array<string>, Force?:bool} $args
     * @return \AWS\Result<array{Grantor?:string, Grantee?:string, ClusterIdentifier?:string, AuthorizeTime?:int|string|\DateTimeInterface, ClusterStatus?:string, Status?:"Authorized"|"Revoking", AllowedAllVPCs?:bool, AllowedVPCs?:array<string>, EndpointCount?:int}>
     */
    public function revokeEndpointAccess(array $args = []): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier?:string, Account?:string, VpcIds?:array<string>, Force?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Grantor?:string, Grantee?:string, ClusterIdentifier?:string, AuthorizeTime?:int|string|\DateTimeInterface, ClusterStatus?:string, Status?:"Authorized"|"Revoking", AllowedAllVPCs?:bool, AllowedVPCs?:array<string>, EndpointCount?:int}>
     */
    public function revokeEndpointAccessAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SnapshotIdentifier?:string, SnapshotArn?:string, SnapshotClusterIdentifier?:string, AccountWithRestoreAccess:string} $args
     * @return \AWS\Result<array{Snapshot?:array{SnapshotIdentifier?:string, ClusterIdentifier?:string, SnapshotCreateTime?:int|string|\DateTimeInterface, Status?:string, Port?:int, AvailabilityZone?:string, ClusterCreateTime?:int|string|\DateTimeInterface, MasterUsername?:string, ClusterVersion?:string, EngineFullVersion?:string, SnapshotType?:string, NodeType?:string, NumberOfNodes?:int, DBName?:string, VpcId?:string, Encrypted?:bool, KmsKeyId?:string, EncryptedWithHSM?:bool, AccountsWithRestoreAccess?:array<array{AccountId?:string, AccountAlias?:string}>, OwnerAccount?:string, TotalBackupSizeInMegaBytes?:float, ActualIncrementalBackupSizeInMegaBytes?:float, BackupProgressInMegaBytes?:float, CurrentBackupRateInMegaBytesPerSecond?:float, EstimatedSecondsToCompletion?:int, ElapsedTimeInSeconds?:int, SourceRegion?:string, Tags?:array<array{Key?:string, Value?:string}>, RestorableNodeTypes?:array<string>, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, ManualSnapshotRetentionPeriod?:int, ManualSnapshotRemainingDays?:int, SnapshotRetentionStartTime?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, SnapshotArn?:string}}>
     */
    public function revokeSnapshotAccess(array $args): \AWS\Result { }

    /**
     * @param array{SnapshotIdentifier?:string, SnapshotArn?:string, SnapshotClusterIdentifier?:string, AccountWithRestoreAccess:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Snapshot?:array{SnapshotIdentifier?:string, ClusterIdentifier?:string, SnapshotCreateTime?:int|string|\DateTimeInterface, Status?:string, Port?:int, AvailabilityZone?:string, ClusterCreateTime?:int|string|\DateTimeInterface, MasterUsername?:string, ClusterVersion?:string, EngineFullVersion?:string, SnapshotType?:string, NodeType?:string, NumberOfNodes?:int, DBName?:string, VpcId?:string, Encrypted?:bool, KmsKeyId?:string, EncryptedWithHSM?:bool, AccountsWithRestoreAccess?:array<array{AccountId?:string, AccountAlias?:string}>, OwnerAccount?:string, TotalBackupSizeInMegaBytes?:float, ActualIncrementalBackupSizeInMegaBytes?:float, BackupProgressInMegaBytes?:float, CurrentBackupRateInMegaBytesPerSecond?:float, EstimatedSecondsToCompletion?:int, ElapsedTimeInSeconds?:int, SourceRegion?:string, Tags?:array<array{Key?:string, Value?:string}>, RestorableNodeTypes?:array<string>, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, ManualSnapshotRetentionPeriod?:int, ManualSnapshotRemainingDays?:int, SnapshotRetentionStartTime?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, SnapshotArn?:string}}>
     */
    public function revokeSnapshotAccessAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClusterIdentifier:string} $args
     * @return \AWS\Result<array{Cluster?:array{ClusterIdentifier?:string, NodeType?:string, ClusterStatus?:string, ClusterAvailabilityStatus?:string, ModifyStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}>}, ClusterCreateTime?:int|string|\DateTimeInterface, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, ClusterParameterGroups?:array<array{ParameterGroupName?:string, ParameterApplyStatus?:string, ClusterParameterStatusList?:array<array{ParameterName?:string, ParameterApplyStatus?:string, ParameterApplyErrorDescription?:string}>}>, ClusterSubnetGroupName?:string, VpcId?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{MasterUserPassword?:string, NodeType?:string, NumberOfNodes?:int, ClusterType?:string, ClusterVersion?:string, AutomatedSnapshotRetentionPeriod?:int, ClusterIdentifier?:string, PubliclyAccessible?:bool, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, EncryptionType?:string}, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, RestoreStatus?:array{Status?:string, CurrentRestoreRateInMegaBytesPerSecond?:float, SnapshotSizeInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int}, DataTransferProgress?:array{Status?:string, CurrentRateInMegaBytesPerSecond?:float, TotalDataInMegaBytes?:int, DataTransferredInMegaBytes?:int, EstimatedTimeToCompletionInSeconds?:int, ElapsedTimeInSeconds?:int}, HsmStatus?:array{HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, Status?:string}, ClusterSnapshotCopyStatus?:array{DestinationRegion?:string, RetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, SnapshotCopyGrantName?:string}, ClusterPublicKey?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>, ElasticIpStatus?:array{ElasticIp?:string, Status?:string}, ClusterRevisionNumber?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, IamRoles?:array<array{IamRoleArn?:string, ApplyStatus?:string}>, PendingActions?:array<string>, MaintenanceTrackName?:string, ElasticResizeNumberOfNodeOptions?:string, DeferredMaintenanceWindows?:array<array{DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface}>, SnapshotScheduleIdentifier?:string, SnapshotScheduleState?:"MODIFYING"|"ACTIVE"|"FAILED", ExpectedNextSnapshotScheduleTime?:int|string|\DateTimeInterface, ExpectedNextSnapshotScheduleTimeStatus?:string, NextMaintenanceWindowStartTime?:int|string|\DateTimeInterface, ResizeInfo?:array{ResizeType?:string, AllowCancelResize?:bool}, AvailabilityZoneRelocationStatus?:string, ClusterNamespaceArn?:string, TotalStorageCapacityInMegaBytes?:int, AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}, DefaultIamRoleArn?:string, ReservedNodeExchangeStatus?:array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}, CustomDomainName?:string, CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:string, MultiAZSecondary?:array{AvailabilityZone?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>}}}>
     */
    public function rotateEncryptionKey(array $args): \AWS\Result { }

    /**
     * @param array{ClusterIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Cluster?:array{ClusterIdentifier?:string, NodeType?:string, ClusterStatus?:string, ClusterAvailabilityStatus?:string, ModifyStatus?:string, MasterUsername?:string, DBName?:string, Endpoint?:array{Address?:string, Port?:int, VpcEndpoints?:array<array{VpcEndpointId?:string, VpcId?:string, NetworkInterfaces?:array<array{NetworkInterfaceId?:string, SubnetId?:string, PrivateIpAddress?:string, AvailabilityZone?:string, Ipv6Address?:string}>}>}, ClusterCreateTime?:int|string|\DateTimeInterface, AutomatedSnapshotRetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, ClusterSecurityGroups?:array<array{ClusterSecurityGroupName?:string, Status?:string}>, VpcSecurityGroups?:array<array{VpcSecurityGroupId?:string, Status?:string}>, ClusterParameterGroups?:array<array{ParameterGroupName?:string, ParameterApplyStatus?:string, ClusterParameterStatusList?:array<array{ParameterName?:string, ParameterApplyStatus?:string, ParameterApplyErrorDescription?:string}>}>, ClusterSubnetGroupName?:string, VpcId?:string, AvailabilityZone?:string, PreferredMaintenanceWindow?:string, PendingModifiedValues?:array{MasterUserPassword?:string, NodeType?:string, NumberOfNodes?:int, ClusterType?:string, ClusterVersion?:string, AutomatedSnapshotRetentionPeriod?:int, ClusterIdentifier?:string, PubliclyAccessible?:bool, EnhancedVpcRouting?:bool, MaintenanceTrackName?:string, EncryptionType?:string}, ClusterVersion?:string, AllowVersionUpgrade?:bool, NumberOfNodes?:int, PubliclyAccessible?:bool, Encrypted?:bool, RestoreStatus?:array{Status?:string, CurrentRestoreRateInMegaBytesPerSecond?:float, SnapshotSizeInMegaBytes?:int, ProgressInMegaBytes?:int, ElapsedTimeInSeconds?:int, EstimatedTimeToCompletionInSeconds?:int}, DataTransferProgress?:array{Status?:string, CurrentRateInMegaBytesPerSecond?:float, TotalDataInMegaBytes?:int, DataTransferredInMegaBytes?:int, EstimatedTimeToCompletionInSeconds?:int, ElapsedTimeInSeconds?:int}, HsmStatus?:array{HsmClientCertificateIdentifier?:string, HsmConfigurationIdentifier?:string, Status?:string}, ClusterSnapshotCopyStatus?:array{DestinationRegion?:string, RetentionPeriod?:int, ManualSnapshotRetentionPeriod?:int, SnapshotCopyGrantName?:string}, ClusterPublicKey?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>, ElasticIpStatus?:array{ElasticIp?:string, Status?:string}, ClusterRevisionNumber?:string, Tags?:array<array{Key?:string, Value?:string}>, KmsKeyId?:string, EnhancedVpcRouting?:bool, IamRoles?:array<array{IamRoleArn?:string, ApplyStatus?:string}>, PendingActions?:array<string>, MaintenanceTrackName?:string, ElasticResizeNumberOfNodeOptions?:string, DeferredMaintenanceWindows?:array<array{DeferMaintenanceIdentifier?:string, DeferMaintenanceStartTime?:int|string|\DateTimeInterface, DeferMaintenanceEndTime?:int|string|\DateTimeInterface}>, SnapshotScheduleIdentifier?:string, SnapshotScheduleState?:"MODIFYING"|"ACTIVE"|"FAILED", ExpectedNextSnapshotScheduleTime?:int|string|\DateTimeInterface, ExpectedNextSnapshotScheduleTimeStatus?:string, NextMaintenanceWindowStartTime?:int|string|\DateTimeInterface, ResizeInfo?:array{ResizeType?:string, AllowCancelResize?:bool}, AvailabilityZoneRelocationStatus?:string, ClusterNamespaceArn?:string, TotalStorageCapacityInMegaBytes?:int, AquaConfiguration?:array{AquaStatus?:"enabled"|"disabled"|"applying", AquaConfigurationStatus?:"enabled"|"disabled"|"auto"}, DefaultIamRoleArn?:string, ReservedNodeExchangeStatus?:array{ReservedNodeExchangeRequestId?:string, Status?:"REQUESTED"|"PENDING"|"IN_PROGRESS"|"RETRYING"|"SUCCEEDED"|"FAILED", RequestTime?:int|string|\DateTimeInterface, SourceReservedNodeId?:string, SourceReservedNodeType?:string, SourceReservedNodeCount?:int, TargetReservedNodeOfferingId?:string, TargetReservedNodeType?:string, TargetReservedNodeCount?:int}, CustomDomainName?:string, CustomDomainCertificateArn?:string, CustomDomainCertificateExpiryDate?:int|string|\DateTimeInterface, MasterPasswordSecretArn?:string, MasterPasswordSecretKmsKeyId?:string, IpAddressType?:string, MultiAZ?:string, MultiAZSecondary?:array{AvailabilityZone?:string, ClusterNodes?:array<array{NodeRole?:string, PrivateIPAddress?:string, PublicIPAddress?:string}>}}}>
     */
    public function rotateEncryptionKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, ClusterIdentifier:string, DatabaseName:string, PartnerName:string, Status:"Active"|"Inactive"|"RuntimeFailure"|"ConnectionFailure", StatusMessage?:string} $args
     * @return \AWS\Result<array{DatabaseName?:string, PartnerName?:string}>
     */
    public function updatePartnerStatus(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, ClusterIdentifier:string, DatabaseName:string, PartnerName:string, Status:"Active"|"Inactive"|"RuntimeFailure"|"ConnectionFailure", StatusMessage?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DatabaseName?:string, PartnerName?:string}>
     */
    public function updatePartnerStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
