<?php
namespace AWS\OpsWorksCM;

class OpsWorksCMClient
{
    /**
     * @param array{ServerName:string, NodeName:string, EngineAttributes:array<array{Name?:string, Value?:string}>} $args
     * @return \AWS\Result<array{NodeAssociationStatusToken?:string}>
     */
    public function associateNode(array $args): \AWS\Result { }

    /**
     * @param array{ServerName:string, NodeName:string, EngineAttributes:array<array{Name?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{NodeAssociationStatusToken?:string}>
     */
    public function associateNodeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServerName:string, Description?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{Backup?:array{BackupArn?:string, BackupId?:string, BackupType?:"AUTOMATED"|"MANUAL", CreatedAt?:int|string|\DateTimeInterface, Description?:string, Engine?:string, EngineModel?:string, EngineVersion?:string, InstanceProfileArn?:string, InstanceType?:string, KeyPair?:string, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, S3DataSize?:int, S3DataUrl?:string, S3LogUrl?:string, SecurityGroupIds?:array<string>, ServerName?:string, ServiceRoleArn?:string, Status?:"IN_PROGRESS"|"OK"|"FAILED"|"DELETING", StatusDescription?:string, SubnetIds?:array<string>, ToolsVersion?:string, UserArn?:string}}>
     */
    public function createBackup(array $args): \AWS\Result { }

    /**
     * @param array{ServerName:string, Description?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Backup?:array{BackupArn?:string, BackupId?:string, BackupType?:"AUTOMATED"|"MANUAL", CreatedAt?:int|string|\DateTimeInterface, Description?:string, Engine?:string, EngineModel?:string, EngineVersion?:string, InstanceProfileArn?:string, InstanceType?:string, KeyPair?:string, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, S3DataSize?:int, S3DataUrl?:string, S3LogUrl?:string, SecurityGroupIds?:array<string>, ServerName?:string, ServiceRoleArn?:string, Status?:"IN_PROGRESS"|"OK"|"FAILED"|"DELETING", StatusDescription?:string, SubnetIds?:array<string>, ToolsVersion?:string, UserArn?:string}}>
     */
    public function createBackupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AssociatePublicIpAddress?:bool, CustomDomain?:string, CustomCertificate?:string, CustomPrivateKey?:string, DisableAutomatedBackup?:bool, Engine:string, EngineModel?:string, EngineVersion?:string, EngineAttributes?:array<array{Name?:string, Value?:string}>, BackupRetentionCount?:int, ServerName:string, InstanceProfileArn:string, InstanceType:string, KeyPair?:string, PreferredMaintenanceWindow?:string, PreferredBackupWindow?:string, SecurityGroupIds?:array<string>, ServiceRoleArn:string, SubnetIds?:array<string>, Tags?:array<array{Key:string, Value:string}>, BackupId?:string} $args
     * @return \AWS\Result<array{Server?:array{AssociatePublicIpAddress?:bool, BackupRetentionCount?:int, ServerName?:string, CreatedAt?:int|string|\DateTimeInterface, CloudFormationStackArn?:string, CustomDomain?:string, DisableAutomatedBackup?:bool, Endpoint?:string, Engine?:string, EngineModel?:string, EngineAttributes?:array<array{Name?:string, Value?:string}>, EngineVersion?:string, InstanceProfileArn?:string, InstanceType?:string, KeyPair?:string, MaintenanceStatus?:"SUCCESS"|"FAILED", PreferredMaintenanceWindow?:string, PreferredBackupWindow?:string, SecurityGroupIds?:array<string>, ServiceRoleArn?:string, Status?:"BACKING_UP"|"CONNECTION_LOST"|"CREATING"|"DELETING"|"MODIFYING"|"FAILED"|"HEALTHY"|"RUNNING"|"RESTORING"|"SETUP"|"UNDER_MAINTENANCE"|"UNHEALTHY"|"TERMINATED", StatusReason?:string, SubnetIds?:array<string>, ServerArn?:string}}>
     */
    public function createServer(array $args): \AWS\Result { }

    /**
     * @param array{AssociatePublicIpAddress?:bool, CustomDomain?:string, CustomCertificate?:string, CustomPrivateKey?:string, DisableAutomatedBackup?:bool, Engine:string, EngineModel?:string, EngineVersion?:string, EngineAttributes?:array<array{Name?:string, Value?:string}>, BackupRetentionCount?:int, ServerName:string, InstanceProfileArn:string, InstanceType:string, KeyPair?:string, PreferredMaintenanceWindow?:string, PreferredBackupWindow?:string, SecurityGroupIds?:array<string>, ServiceRoleArn:string, SubnetIds?:array<string>, Tags?:array<array{Key:string, Value:string}>, BackupId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Server?:array{AssociatePublicIpAddress?:bool, BackupRetentionCount?:int, ServerName?:string, CreatedAt?:int|string|\DateTimeInterface, CloudFormationStackArn?:string, CustomDomain?:string, DisableAutomatedBackup?:bool, Endpoint?:string, Engine?:string, EngineModel?:string, EngineAttributes?:array<array{Name?:string, Value?:string}>, EngineVersion?:string, InstanceProfileArn?:string, InstanceType?:string, KeyPair?:string, MaintenanceStatus?:"SUCCESS"|"FAILED", PreferredMaintenanceWindow?:string, PreferredBackupWindow?:string, SecurityGroupIds?:array<string>, ServiceRoleArn?:string, Status?:"BACKING_UP"|"CONNECTION_LOST"|"CREATING"|"DELETING"|"MODIFYING"|"FAILED"|"HEALTHY"|"RUNNING"|"RESTORING"|"SETUP"|"UNDER_MAINTENANCE"|"UNHEALTHY"|"TERMINATED", StatusReason?:string, SubnetIds?:array<string>, ServerArn?:string}}>
     */
    public function createServerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteBackup(array $args): \AWS\Result { }

    /**
     * @param array{BackupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteBackupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServerName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteServer(array $args): \AWS\Result { }

    /**
     * @param array{ServerName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteServerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{Attributes?:array<array{Name?:string, Maximum?:int, Used?:int}>}>
     */
    public function describeAccountAttributes(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attributes?:array<array{Name?:string, Maximum?:int, Used?:int}>}>
     */
    public function describeAccountAttributesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupId?:string, ServerName?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Backups?:array<array{BackupArn?:string, BackupId?:string, BackupType?:"AUTOMATED"|"MANUAL", CreatedAt?:int|string|\DateTimeInterface, Description?:string, Engine?:string, EngineModel?:string, EngineVersion?:string, InstanceProfileArn?:string, InstanceType?:string, KeyPair?:string, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, S3DataSize?:int, S3DataUrl?:string, S3LogUrl?:string, SecurityGroupIds?:array<string>, ServerName?:string, ServiceRoleArn?:string, Status?:"IN_PROGRESS"|"OK"|"FAILED"|"DELETING", StatusDescription?:string, SubnetIds?:array<string>, ToolsVersion?:string, UserArn?:string}>, NextToken?:string}>
     */
    public function describeBackups(array $args = []): \AWS\Result { }

    /**
     * @param array{BackupId?:string, ServerName?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Backups?:array<array{BackupArn?:string, BackupId?:string, BackupType?:"AUTOMATED"|"MANUAL", CreatedAt?:int|string|\DateTimeInterface, Description?:string, Engine?:string, EngineModel?:string, EngineVersion?:string, InstanceProfileArn?:string, InstanceType?:string, KeyPair?:string, PreferredBackupWindow?:string, PreferredMaintenanceWindow?:string, S3DataSize?:int, S3DataUrl?:string, S3LogUrl?:string, SecurityGroupIds?:array<string>, ServerName?:string, ServiceRoleArn?:string, Status?:"IN_PROGRESS"|"OK"|"FAILED"|"DELETING", StatusDescription?:string, SubnetIds?:array<string>, ToolsVersion?:string, UserArn?:string}>, NextToken?:string}>
     */
    public function describeBackupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServerName:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ServerEvents?:array<array{CreatedAt?:int|string|\DateTimeInterface, ServerName?:string, Message?:string, LogUrl?:string}>, NextToken?:string}>
     */
    public function describeEvents(array $args): \AWS\Result { }

    /**
     * @param array{ServerName:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServerEvents?:array<array{CreatedAt?:int|string|\DateTimeInterface, ServerName?:string, Message?:string, LogUrl?:string}>, NextToken?:string}>
     */
    public function describeEventsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NodeAssociationStatusToken:string, ServerName:string} $args
     * @return \AWS\Result<array{NodeAssociationStatus?:"SUCCESS"|"FAILED"|"IN_PROGRESS", EngineAttributes?:array<array{Name?:string, Value?:string}>}>
     */
    public function describeNodeAssociationStatus(array $args): \AWS\Result { }

    /**
     * @param array{NodeAssociationStatusToken:string, ServerName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NodeAssociationStatus?:"SUCCESS"|"FAILED"|"IN_PROGRESS", EngineAttributes?:array<array{Name?:string, Value?:string}>}>
     */
    public function describeNodeAssociationStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServerName?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Servers?:array<array{AssociatePublicIpAddress?:bool, BackupRetentionCount?:int, ServerName?:string, CreatedAt?:int|string|\DateTimeInterface, CloudFormationStackArn?:string, CustomDomain?:string, DisableAutomatedBackup?:bool, Endpoint?:string, Engine?:string, EngineModel?:string, EngineAttributes?:array<array{Name?:string, Value?:string}>, EngineVersion?:string, InstanceProfileArn?:string, InstanceType?:string, KeyPair?:string, MaintenanceStatus?:"SUCCESS"|"FAILED", PreferredMaintenanceWindow?:string, PreferredBackupWindow?:string, SecurityGroupIds?:array<string>, ServiceRoleArn?:string, Status?:"BACKING_UP"|"CONNECTION_LOST"|"CREATING"|"DELETING"|"MODIFYING"|"FAILED"|"HEALTHY"|"RUNNING"|"RESTORING"|"SETUP"|"UNDER_MAINTENANCE"|"UNHEALTHY"|"TERMINATED", StatusReason?:string, SubnetIds?:array<string>, ServerArn?:string}>, NextToken?:string}>
     */
    public function describeServers(array $args = []): \AWS\Result { }

    /**
     * @param array{ServerName?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Servers?:array<array{AssociatePublicIpAddress?:bool, BackupRetentionCount?:int, ServerName?:string, CreatedAt?:int|string|\DateTimeInterface, CloudFormationStackArn?:string, CustomDomain?:string, DisableAutomatedBackup?:bool, Endpoint?:string, Engine?:string, EngineModel?:string, EngineAttributes?:array<array{Name?:string, Value?:string}>, EngineVersion?:string, InstanceProfileArn?:string, InstanceType?:string, KeyPair?:string, MaintenanceStatus?:"SUCCESS"|"FAILED", PreferredMaintenanceWindow?:string, PreferredBackupWindow?:string, SecurityGroupIds?:array<string>, ServiceRoleArn?:string, Status?:"BACKING_UP"|"CONNECTION_LOST"|"CREATING"|"DELETING"|"MODIFYING"|"FAILED"|"HEALTHY"|"RUNNING"|"RESTORING"|"SETUP"|"UNDER_MAINTENANCE"|"UNHEALTHY"|"TERMINATED", StatusReason?:string, SubnetIds?:array<string>, ServerArn?:string}>, NextToken?:string}>
     */
    public function describeServersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServerName:string, NodeName:string, EngineAttributes?:array<array{Name?:string, Value?:string}>} $args
     * @return \AWS\Result<array{NodeAssociationStatusToken?:string}>
     */
    public function disassociateNode(array $args): \AWS\Result { }

    /**
     * @param array{ServerName:string, NodeName:string, EngineAttributes?:array<array{Name?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{NodeAssociationStatusToken?:string}>
     */
    public function disassociateNodeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ExportAttributeName:string, ServerName:string, InputAttributes?:array<array{Name?:string, Value?:string}>} $args
     * @return \AWS\Result<array{EngineAttribute?:array{Name?:string, Value?:string}, ServerName?:string}>
     */
    public function exportServerEngineAttribute(array $args): \AWS\Result { }

    /**
     * @param array{ExportAttributeName:string, ServerName:string, InputAttributes?:array<array{Name?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{EngineAttribute?:array{Name?:string, Value?:string}, ServerName?:string}>
     */
    public function exportServerEngineAttributeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value:string}>, NextToken?:string}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value:string}>, NextToken?:string}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BackupId:string, ServerName:string, InstanceType?:string, KeyPair?:string} $args
     * @return \AWS\Result<array{Server?:array{AssociatePublicIpAddress?:bool, BackupRetentionCount?:int, ServerName?:string, CreatedAt?:int|string|\DateTimeInterface, CloudFormationStackArn?:string, CustomDomain?:string, DisableAutomatedBackup?:bool, Endpoint?:string, Engine?:string, EngineModel?:string, EngineAttributes?:array<array{Name?:string, Value?:string}>, EngineVersion?:string, InstanceProfileArn?:string, InstanceType?:string, KeyPair?:string, MaintenanceStatus?:"SUCCESS"|"FAILED", PreferredMaintenanceWindow?:string, PreferredBackupWindow?:string, SecurityGroupIds?:array<string>, ServiceRoleArn?:string, Status?:"BACKING_UP"|"CONNECTION_LOST"|"CREATING"|"DELETING"|"MODIFYING"|"FAILED"|"HEALTHY"|"RUNNING"|"RESTORING"|"SETUP"|"UNDER_MAINTENANCE"|"UNHEALTHY"|"TERMINATED", StatusReason?:string, SubnetIds?:array<string>, ServerArn?:string}}>
     */
    public function restoreServer(array $args): \AWS\Result { }

    /**
     * @param array{BackupId:string, ServerName:string, InstanceType?:string, KeyPair?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Server?:array{AssociatePublicIpAddress?:bool, BackupRetentionCount?:int, ServerName?:string, CreatedAt?:int|string|\DateTimeInterface, CloudFormationStackArn?:string, CustomDomain?:string, DisableAutomatedBackup?:bool, Endpoint?:string, Engine?:string, EngineModel?:string, EngineAttributes?:array<array{Name?:string, Value?:string}>, EngineVersion?:string, InstanceProfileArn?:string, InstanceType?:string, KeyPair?:string, MaintenanceStatus?:"SUCCESS"|"FAILED", PreferredMaintenanceWindow?:string, PreferredBackupWindow?:string, SecurityGroupIds?:array<string>, ServiceRoleArn?:string, Status?:"BACKING_UP"|"CONNECTION_LOST"|"CREATING"|"DELETING"|"MODIFYING"|"FAILED"|"HEALTHY"|"RUNNING"|"RESTORING"|"SETUP"|"UNDER_MAINTENANCE"|"UNHEALTHY"|"TERMINATED", StatusReason?:string, SubnetIds?:array<string>, ServerArn?:string}}>
     */
    public function restoreServerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServerName:string, EngineAttributes?:array<array{Name?:string, Value?:string}>} $args
     * @return \AWS\Result<array{Server?:array{AssociatePublicIpAddress?:bool, BackupRetentionCount?:int, ServerName?:string, CreatedAt?:int|string|\DateTimeInterface, CloudFormationStackArn?:string, CustomDomain?:string, DisableAutomatedBackup?:bool, Endpoint?:string, Engine?:string, EngineModel?:string, EngineAttributes?:array<array{Name?:string, Value?:string}>, EngineVersion?:string, InstanceProfileArn?:string, InstanceType?:string, KeyPair?:string, MaintenanceStatus?:"SUCCESS"|"FAILED", PreferredMaintenanceWindow?:string, PreferredBackupWindow?:string, SecurityGroupIds?:array<string>, ServiceRoleArn?:string, Status?:"BACKING_UP"|"CONNECTION_LOST"|"CREATING"|"DELETING"|"MODIFYING"|"FAILED"|"HEALTHY"|"RUNNING"|"RESTORING"|"SETUP"|"UNDER_MAINTENANCE"|"UNHEALTHY"|"TERMINATED", StatusReason?:string, SubnetIds?:array<string>, ServerArn?:string}}>
     */
    public function startMaintenance(array $args): \AWS\Result { }

    /**
     * @param array{ServerName:string, EngineAttributes?:array<array{Name?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Server?:array{AssociatePublicIpAddress?:bool, BackupRetentionCount?:int, ServerName?:string, CreatedAt?:int|string|\DateTimeInterface, CloudFormationStackArn?:string, CustomDomain?:string, DisableAutomatedBackup?:bool, Endpoint?:string, Engine?:string, EngineModel?:string, EngineAttributes?:array<array{Name?:string, Value?:string}>, EngineVersion?:string, InstanceProfileArn?:string, InstanceType?:string, KeyPair?:string, MaintenanceStatus?:"SUCCESS"|"FAILED", PreferredMaintenanceWindow?:string, PreferredBackupWindow?:string, SecurityGroupIds?:array<string>, ServiceRoleArn?:string, Status?:"BACKING_UP"|"CONNECTION_LOST"|"CREATING"|"DELETING"|"MODIFYING"|"FAILED"|"HEALTHY"|"RUNNING"|"RESTORING"|"SETUP"|"UNDER_MAINTENANCE"|"UNHEALTHY"|"TERMINATED", StatusReason?:string, SubnetIds?:array<string>, ServerArn?:string}}>
     */
    public function startMaintenanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DisableAutomatedBackup?:bool, BackupRetentionCount?:int, ServerName:string, PreferredMaintenanceWindow?:string, PreferredBackupWindow?:string} $args
     * @return \AWS\Result<array{Server?:array{AssociatePublicIpAddress?:bool, BackupRetentionCount?:int, ServerName?:string, CreatedAt?:int|string|\DateTimeInterface, CloudFormationStackArn?:string, CustomDomain?:string, DisableAutomatedBackup?:bool, Endpoint?:string, Engine?:string, EngineModel?:string, EngineAttributes?:array<array{Name?:string, Value?:string}>, EngineVersion?:string, InstanceProfileArn?:string, InstanceType?:string, KeyPair?:string, MaintenanceStatus?:"SUCCESS"|"FAILED", PreferredMaintenanceWindow?:string, PreferredBackupWindow?:string, SecurityGroupIds?:array<string>, ServiceRoleArn?:string, Status?:"BACKING_UP"|"CONNECTION_LOST"|"CREATING"|"DELETING"|"MODIFYING"|"FAILED"|"HEALTHY"|"RUNNING"|"RESTORING"|"SETUP"|"UNDER_MAINTENANCE"|"UNHEALTHY"|"TERMINATED", StatusReason?:string, SubnetIds?:array<string>, ServerArn?:string}}>
     */
    public function updateServer(array $args): \AWS\Result { }

    /**
     * @param array{DisableAutomatedBackup?:bool, BackupRetentionCount?:int, ServerName:string, PreferredMaintenanceWindow?:string, PreferredBackupWindow?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Server?:array{AssociatePublicIpAddress?:bool, BackupRetentionCount?:int, ServerName?:string, CreatedAt?:int|string|\DateTimeInterface, CloudFormationStackArn?:string, CustomDomain?:string, DisableAutomatedBackup?:bool, Endpoint?:string, Engine?:string, EngineModel?:string, EngineAttributes?:array<array{Name?:string, Value?:string}>, EngineVersion?:string, InstanceProfileArn?:string, InstanceType?:string, KeyPair?:string, MaintenanceStatus?:"SUCCESS"|"FAILED", PreferredMaintenanceWindow?:string, PreferredBackupWindow?:string, SecurityGroupIds?:array<string>, ServiceRoleArn?:string, Status?:"BACKING_UP"|"CONNECTION_LOST"|"CREATING"|"DELETING"|"MODIFYING"|"FAILED"|"HEALTHY"|"RUNNING"|"RESTORING"|"SETUP"|"UNDER_MAINTENANCE"|"UNHEALTHY"|"TERMINATED", StatusReason?:string, SubnetIds?:array<string>, ServerArn?:string}}>
     */
    public function updateServerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServerName:string, AttributeName:string, AttributeValue?:string} $args
     * @return \AWS\Result<array{Server?:array{AssociatePublicIpAddress?:bool, BackupRetentionCount?:int, ServerName?:string, CreatedAt?:int|string|\DateTimeInterface, CloudFormationStackArn?:string, CustomDomain?:string, DisableAutomatedBackup?:bool, Endpoint?:string, Engine?:string, EngineModel?:string, EngineAttributes?:array<array{Name?:string, Value?:string}>, EngineVersion?:string, InstanceProfileArn?:string, InstanceType?:string, KeyPair?:string, MaintenanceStatus?:"SUCCESS"|"FAILED", PreferredMaintenanceWindow?:string, PreferredBackupWindow?:string, SecurityGroupIds?:array<string>, ServiceRoleArn?:string, Status?:"BACKING_UP"|"CONNECTION_LOST"|"CREATING"|"DELETING"|"MODIFYING"|"FAILED"|"HEALTHY"|"RUNNING"|"RESTORING"|"SETUP"|"UNDER_MAINTENANCE"|"UNHEALTHY"|"TERMINATED", StatusReason?:string, SubnetIds?:array<string>, ServerArn?:string}}>
     */
    public function updateServerEngineAttributes(array $args): \AWS\Result { }

    /**
     * @param array{ServerName:string, AttributeName:string, AttributeValue?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Server?:array{AssociatePublicIpAddress?:bool, BackupRetentionCount?:int, ServerName?:string, CreatedAt?:int|string|\DateTimeInterface, CloudFormationStackArn?:string, CustomDomain?:string, DisableAutomatedBackup?:bool, Endpoint?:string, Engine?:string, EngineModel?:string, EngineAttributes?:array<array{Name?:string, Value?:string}>, EngineVersion?:string, InstanceProfileArn?:string, InstanceType?:string, KeyPair?:string, MaintenanceStatus?:"SUCCESS"|"FAILED", PreferredMaintenanceWindow?:string, PreferredBackupWindow?:string, SecurityGroupIds?:array<string>, ServiceRoleArn?:string, Status?:"BACKING_UP"|"CONNECTION_LOST"|"CREATING"|"DELETING"|"MODIFYING"|"FAILED"|"HEALTHY"|"RUNNING"|"RESTORING"|"SETUP"|"UNDER_MAINTENANCE"|"UNHEALTHY"|"TERMINATED", StatusReason?:string, SubnetIds?:array<string>, ServerArn?:string}}>
     */
    public function updateServerEngineAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
