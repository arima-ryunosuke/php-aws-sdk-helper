<?php
namespace AWS\RedshiftServerless;

class RedshiftServerlessClient
{
    /**
     * @param array{recoveryPointId:string, retentionPeriod?:int, snapshotName:string, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{snapshot?:array{accountsWithProvisionedRestoreAccess?:array<string>, accountsWithRestoreAccess?:array<string>, actualIncrementalBackupSizeInMegaBytes?:float, adminPasswordSecretArn?:string, adminPasswordSecretKmsKeyId?:string, adminUsername?:string, backupProgressInMegaBytes?:float, currentBackupRateInMegaBytesPerSecond?:float, elapsedTimeInSeconds?:int, estimatedSecondsToCompletion?:int, kmsKeyId?:string, namespaceArn?:string, namespaceName?:string, ownerAccount?:string, snapshotArn?:string, snapshotCreateTime?:int|string|\DateTimeInterface, snapshotName?:string, snapshotRemainingDays?:int, snapshotRetentionPeriod?:int, snapshotRetentionStartTime?:int|string|\DateTimeInterface, status?:"AVAILABLE"|"CREATING"|"DELETED"|"CANCELLED"|"FAILED"|"COPYING", totalBackupSizeInMegaBytes?:float}}>
     */
    public function convertRecoveryPointToSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{recoveryPointId:string, retentionPeriod?:int, snapshotName:string, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{snapshot?:array{accountsWithProvisionedRestoreAccess?:array<string>, accountsWithRestoreAccess?:array<string>, actualIncrementalBackupSizeInMegaBytes?:float, adminPasswordSecretArn?:string, adminPasswordSecretKmsKeyId?:string, adminUsername?:string, backupProgressInMegaBytes?:float, currentBackupRateInMegaBytesPerSecond?:float, elapsedTimeInSeconds?:int, estimatedSecondsToCompletion?:int, kmsKeyId?:string, namespaceArn?:string, namespaceName?:string, ownerAccount?:string, snapshotArn?:string, snapshotCreateTime?:int|string|\DateTimeInterface, snapshotName?:string, snapshotRemainingDays?:int, snapshotRetentionPeriod?:int, snapshotRetentionStartTime?:int|string|\DateTimeInterface, status?:"AVAILABLE"|"CREATING"|"DELETED"|"CANCELLED"|"FAILED"|"COPYING", totalBackupSizeInMegaBytes?:float}}>
     */
    public function convertRecoveryPointToSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{customDomainCertificateArn:string, customDomainName:string, workgroupName:string} $args
     * @return \AWS\Result<array{customDomainCertificateArn?:string, customDomainCertificateExpiryTime?:int|string|\DateTimeInterface, customDomainName?:string, workgroupName?:string}>
     */
    public function createCustomDomainAssociation(array $args): \AWS\Result { }

    /**
     * @param array{customDomainCertificateArn:string, customDomainName:string, workgroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{customDomainCertificateArn?:string, customDomainCertificateExpiryTime?:int|string|\DateTimeInterface, customDomainName?:string, workgroupName?:string}>
     */
    public function createCustomDomainAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{endpointName:string, ownerAccount?:string, subnetIds:array<string>, vpcSecurityGroupIds?:array<string>, workgroupName:string} $args
     * @return \AWS\Result<array{endpoint?:array{address?:string, endpointArn?:string, endpointCreateTime?:int|string|\DateTimeInterface, endpointName?:string, endpointStatus?:string, port?:int, subnetIds?:array<string>, vpcEndpoint?:array{networkInterfaces?:array<array{availabilityZone?:string, ipv6Address?:string, networkInterfaceId?:string, privateIpAddress?:string, subnetId?:string}>, vpcEndpointId?:string, vpcId?:string}, vpcSecurityGroups?:array<array{status?:string, vpcSecurityGroupId?:string}>, workgroupName?:string}}>
     */
    public function createEndpointAccess(array $args): \AWS\Result { }

    /**
     * @param array{endpointName:string, ownerAccount?:string, subnetIds:array<string>, vpcSecurityGroupIds?:array<string>, workgroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{endpoint?:array{address?:string, endpointArn?:string, endpointCreateTime?:int|string|\DateTimeInterface, endpointName?:string, endpointStatus?:string, port?:int, subnetIds?:array<string>, vpcEndpoint?:array{networkInterfaces?:array<array{availabilityZone?:string, ipv6Address?:string, networkInterfaceId?:string, privateIpAddress?:string, subnetId?:string}>, vpcEndpointId?:string, vpcId?:string}, vpcSecurityGroups?:array<array{status?:string, vpcSecurityGroupId?:string}>, workgroupName?:string}}>
     */
    public function createEndpointAccessAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{adminPasswordSecretKmsKeyId?:string, adminUserPassword?:string, adminUsername?:string, dbName?:string, defaultIamRoleArn?:string, iamRoles?:array<string>, kmsKeyId?:string, logExports?:array<"useractivitylog"|"userlog"|"connectionlog">, manageAdminPassword?:bool, namespaceName:string, redshiftIdcApplicationArn?:string, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{namespace?:array{adminPasswordSecretArn?:string, adminPasswordSecretKmsKeyId?:string, adminUsername?:string, creationDate?:int|string|\DateTimeInterface, dbName?:string, defaultIamRoleArn?:string, iamRoles?:array<string>, kmsKeyId?:string, logExports?:array<"useractivitylog"|"userlog"|"connectionlog">, namespaceArn?:string, namespaceId?:string, namespaceName?:string, status?:"AVAILABLE"|"MODIFYING"|"DELETING"}}>
     */
    public function createNamespace(array $args): \AWS\Result { }

    /**
     * @param array{adminPasswordSecretKmsKeyId?:string, adminUserPassword?:string, adminUsername?:string, dbName?:string, defaultIamRoleArn?:string, iamRoles?:array<string>, kmsKeyId?:string, logExports?:array<"useractivitylog"|"userlog"|"connectionlog">, manageAdminPassword?:bool, namespaceName:string, redshiftIdcApplicationArn?:string, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{namespace?:array{adminPasswordSecretArn?:string, adminPasswordSecretKmsKeyId?:string, adminUsername?:string, creationDate?:int|string|\DateTimeInterface, dbName?:string, defaultIamRoleArn?:string, iamRoles?:array<string>, kmsKeyId?:string, logExports?:array<"useractivitylog"|"userlog"|"connectionlog">, namespaceArn?:string, namespaceId?:string, namespaceName?:string, status?:"AVAILABLE"|"MODIFYING"|"DELETING"}}>
     */
    public function createNamespaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{enabled?:bool, endTime?:int|string|\DateTimeInterface, namespaceName:string, roleArn:string, schedule:array{at?:int|string|\DateTimeInterface, cron?:string}, scheduledActionDescription?:string, scheduledActionName:string, startTime?:int|string|\DateTimeInterface, targetAction:array{createSnapshot?:array{namespaceName:string, retentionPeriod?:int, snapshotNamePrefix:string, tags?:array<array{key:string, value:string}>}}} $args
     * @return \AWS\Result<array{scheduledAction?:array{endTime?:int|string|\DateTimeInterface, namespaceName?:string, nextInvocations?:array<int|string|\DateTimeInterface>, roleArn?:string, schedule?:array{at?:int|string|\DateTimeInterface, cron?:string}, scheduledActionDescription?:string, scheduledActionName?:string, scheduledActionUuid?:string, startTime?:int|string|\DateTimeInterface, state?:"ACTIVE"|"DISABLED", targetAction?:array{createSnapshot?:array{namespaceName:string, retentionPeriod?:int, snapshotNamePrefix:string, tags?:array<array{key:string, value:string}>}}}}>
     */
    public function createScheduledAction(array $args): \AWS\Result { }

    /**
     * @param array{enabled?:bool, endTime?:int|string|\DateTimeInterface, namespaceName:string, roleArn:string, schedule:array{at?:int|string|\DateTimeInterface, cron?:string}, scheduledActionDescription?:string, scheduledActionName:string, startTime?:int|string|\DateTimeInterface, targetAction:array{createSnapshot?:array{namespaceName:string, retentionPeriod?:int, snapshotNamePrefix:string, tags?:array<array{key:string, value:string}>}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{scheduledAction?:array{endTime?:int|string|\DateTimeInterface, namespaceName?:string, nextInvocations?:array<int|string|\DateTimeInterface>, roleArn?:string, schedule?:array{at?:int|string|\DateTimeInterface, cron?:string}, scheduledActionDescription?:string, scheduledActionName?:string, scheduledActionUuid?:string, startTime?:int|string|\DateTimeInterface, state?:"ACTIVE"|"DISABLED", targetAction?:array{createSnapshot?:array{namespaceName:string, retentionPeriod?:int, snapshotNamePrefix:string, tags?:array<array{key:string, value:string}>}}}}>
     */
    public function createScheduledActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{namespaceName:string, retentionPeriod?:int, snapshotName:string, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{snapshot?:array{accountsWithProvisionedRestoreAccess?:array<string>, accountsWithRestoreAccess?:array<string>, actualIncrementalBackupSizeInMegaBytes?:float, adminPasswordSecretArn?:string, adminPasswordSecretKmsKeyId?:string, adminUsername?:string, backupProgressInMegaBytes?:float, currentBackupRateInMegaBytesPerSecond?:float, elapsedTimeInSeconds?:int, estimatedSecondsToCompletion?:int, kmsKeyId?:string, namespaceArn?:string, namespaceName?:string, ownerAccount?:string, snapshotArn?:string, snapshotCreateTime?:int|string|\DateTimeInterface, snapshotName?:string, snapshotRemainingDays?:int, snapshotRetentionPeriod?:int, snapshotRetentionStartTime?:int|string|\DateTimeInterface, status?:"AVAILABLE"|"CREATING"|"DELETED"|"CANCELLED"|"FAILED"|"COPYING", totalBackupSizeInMegaBytes?:float}}>
     */
    public function createSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{namespaceName:string, retentionPeriod?:int, snapshotName:string, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{snapshot?:array{accountsWithProvisionedRestoreAccess?:array<string>, accountsWithRestoreAccess?:array<string>, actualIncrementalBackupSizeInMegaBytes?:float, adminPasswordSecretArn?:string, adminPasswordSecretKmsKeyId?:string, adminUsername?:string, backupProgressInMegaBytes?:float, currentBackupRateInMegaBytesPerSecond?:float, elapsedTimeInSeconds?:int, estimatedSecondsToCompletion?:int, kmsKeyId?:string, namespaceArn?:string, namespaceName?:string, ownerAccount?:string, snapshotArn?:string, snapshotCreateTime?:int|string|\DateTimeInterface, snapshotName?:string, snapshotRemainingDays?:int, snapshotRetentionPeriod?:int, snapshotRetentionStartTime?:int|string|\DateTimeInterface, status?:"AVAILABLE"|"CREATING"|"DELETED"|"CANCELLED"|"FAILED"|"COPYING", totalBackupSizeInMegaBytes?:float}}>
     */
    public function createSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{destinationKmsKeyId?:string, destinationRegion:string, namespaceName:string, snapshotRetentionPeriod?:int} $args
     * @return \AWS\Result<array{snapshotCopyConfiguration:array{destinationKmsKeyId?:string, destinationRegion?:string, namespaceName?:string, snapshotCopyConfigurationArn?:string, snapshotCopyConfigurationId?:string, snapshotRetentionPeriod?:int}}>
     */
    public function createSnapshotCopyConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{destinationKmsKeyId?:string, destinationRegion:string, namespaceName:string, snapshotRetentionPeriod?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{snapshotCopyConfiguration:array{destinationKmsKeyId?:string, destinationRegion?:string, namespaceName?:string, snapshotCopyConfigurationArn?:string, snapshotCopyConfigurationId?:string, snapshotRetentionPeriod?:int}}>
     */
    public function createSnapshotCopyConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{amount:int, breachAction?:"log"|"emit-metric"|"deactivate", period?:"daily"|"weekly"|"monthly", resourceArn:string, usageType:"serverless-compute"|"cross-region-datasharing"} $args
     * @return \AWS\Result<array{usageLimit?:array{amount?:int, breachAction?:"log"|"emit-metric"|"deactivate", period?:"daily"|"weekly"|"monthly", resourceArn?:string, usageLimitArn?:string, usageLimitId?:string, usageType?:"serverless-compute"|"cross-region-datasharing"}}>
     */
    public function createUsageLimit(array $args): \AWS\Result { }

    /**
     * @param array{amount:int, breachAction?:"log"|"emit-metric"|"deactivate", period?:"daily"|"weekly"|"monthly", resourceArn:string, usageType:"serverless-compute"|"cross-region-datasharing"} $args
     * @return \GuzzleHttp\Promise\Promise<array{usageLimit?:array{amount?:int, breachAction?:"log"|"emit-metric"|"deactivate", period?:"daily"|"weekly"|"monthly", resourceArn?:string, usageLimitArn?:string, usageLimitId?:string, usageType?:"serverless-compute"|"cross-region-datasharing"}}>
     */
    public function createUsageLimitAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{baseCapacity?:int, configParameters?:array<array{parameterKey?:string, parameterValue?:string}>, enhancedVpcRouting?:bool, ipAddressType?:string, maxCapacity?:int, namespaceName:string, port?:int, pricePerformanceTarget?:array{level?:int, status?:"ENABLED"|"DISABLED"}, publiclyAccessible?:bool, securityGroupIds?:array<string>, subnetIds?:array<string>, tags?:array<array{key:string, value:string}>, workgroupName:string} $args
     * @return \AWS\Result<array{workgroup?:array{baseCapacity?:int, configParameters?:array<array{parameterKey?:string, parameterValue?:string}>, creationDate?:int|string|\DateTimeInterface, crossAccountVpcs?:array<string>, customDomainCertificateArn?:string, customDomainCertificateExpiryTime?:int|string|\DateTimeInterface, customDomainName?:string, endpoint?:array{address?:string, port?:int, vpcEndpoints?:array<array{networkInterfaces?:array<array{availabilityZone?:string, ipv6Address?:string, networkInterfaceId?:string, privateIpAddress?:string, subnetId?:string}>, vpcEndpointId?:string, vpcId?:string}>}, enhancedVpcRouting?:bool, ipAddressType?:string, maxCapacity?:int, namespaceName?:string, patchVersion?:string, port?:int, pricePerformanceTarget?:array{level?:int, status?:"ENABLED"|"DISABLED"}, publiclyAccessible?:bool, securityGroupIds?:array<string>, status?:"CREATING"|"AVAILABLE"|"MODIFYING"|"DELETING", subnetIds?:array<string>, workgroupArn?:string, workgroupId?:string, workgroupName?:string, workgroupVersion?:string}}>
     */
    public function createWorkgroup(array $args): \AWS\Result { }

    /**
     * @param array{baseCapacity?:int, configParameters?:array<array{parameterKey?:string, parameterValue?:string}>, enhancedVpcRouting?:bool, ipAddressType?:string, maxCapacity?:int, namespaceName:string, port?:int, pricePerformanceTarget?:array{level?:int, status?:"ENABLED"|"DISABLED"}, publiclyAccessible?:bool, securityGroupIds?:array<string>, subnetIds?:array<string>, tags?:array<array{key:string, value:string}>, workgroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{workgroup?:array{baseCapacity?:int, configParameters?:array<array{parameterKey?:string, parameterValue?:string}>, creationDate?:int|string|\DateTimeInterface, crossAccountVpcs?:array<string>, customDomainCertificateArn?:string, customDomainCertificateExpiryTime?:int|string|\DateTimeInterface, customDomainName?:string, endpoint?:array{address?:string, port?:int, vpcEndpoints?:array<array{networkInterfaces?:array<array{availabilityZone?:string, ipv6Address?:string, networkInterfaceId?:string, privateIpAddress?:string, subnetId?:string}>, vpcEndpointId?:string, vpcId?:string}>}, enhancedVpcRouting?:bool, ipAddressType?:string, maxCapacity?:int, namespaceName?:string, patchVersion?:string, port?:int, pricePerformanceTarget?:array{level?:int, status?:"ENABLED"|"DISABLED"}, publiclyAccessible?:bool, securityGroupIds?:array<string>, status?:"CREATING"|"AVAILABLE"|"MODIFYING"|"DELETING", subnetIds?:array<string>, workgroupArn?:string, workgroupId?:string, workgroupName?:string, workgroupVersion?:string}}>
     */
    public function createWorkgroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{customDomainName:string, workgroupName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteCustomDomainAssociation(array $args): \AWS\Result { }

    /**
     * @param array{customDomainName:string, workgroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteCustomDomainAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{endpointName:string} $args
     * @return \AWS\Result<array{endpoint?:array{address?:string, endpointArn?:string, endpointCreateTime?:int|string|\DateTimeInterface, endpointName?:string, endpointStatus?:string, port?:int, subnetIds?:array<string>, vpcEndpoint?:array{networkInterfaces?:array<array{availabilityZone?:string, ipv6Address?:string, networkInterfaceId?:string, privateIpAddress?:string, subnetId?:string}>, vpcEndpointId?:string, vpcId?:string}, vpcSecurityGroups?:array<array{status?:string, vpcSecurityGroupId?:string}>, workgroupName?:string}}>
     */
    public function deleteEndpointAccess(array $args): \AWS\Result { }

    /**
     * @param array{endpointName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{endpoint?:array{address?:string, endpointArn?:string, endpointCreateTime?:int|string|\DateTimeInterface, endpointName?:string, endpointStatus?:string, port?:int, subnetIds?:array<string>, vpcEndpoint?:array{networkInterfaces?:array<array{availabilityZone?:string, ipv6Address?:string, networkInterfaceId?:string, privateIpAddress?:string, subnetId?:string}>, vpcEndpointId?:string, vpcId?:string}, vpcSecurityGroups?:array<array{status?:string, vpcSecurityGroupId?:string}>, workgroupName?:string}}>
     */
    public function deleteEndpointAccessAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{finalSnapshotName?:string, finalSnapshotRetentionPeriod?:int, namespaceName:string} $args
     * @return \AWS\Result<array{namespace:array{adminPasswordSecretArn?:string, adminPasswordSecretKmsKeyId?:string, adminUsername?:string, creationDate?:int|string|\DateTimeInterface, dbName?:string, defaultIamRoleArn?:string, iamRoles?:array<string>, kmsKeyId?:string, logExports?:array<"useractivitylog"|"userlog"|"connectionlog">, namespaceArn?:string, namespaceId?:string, namespaceName?:string, status?:"AVAILABLE"|"MODIFYING"|"DELETING"}}>
     */
    public function deleteNamespace(array $args): \AWS\Result { }

    /**
     * @param array{finalSnapshotName?:string, finalSnapshotRetentionPeriod?:int, namespaceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{namespace:array{adminPasswordSecretArn?:string, adminPasswordSecretKmsKeyId?:string, adminUsername?:string, creationDate?:int|string|\DateTimeInterface, dbName?:string, defaultIamRoleArn?:string, iamRoles?:array<string>, kmsKeyId?:string, logExports?:array<"useractivitylog"|"userlog"|"connectionlog">, namespaceArn?:string, namespaceId?:string, namespaceName?:string, status?:"AVAILABLE"|"MODIFYING"|"DELETING"}}>
     */
    public function deleteNamespaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{scheduledActionName:string} $args
     * @return \AWS\Result<array{scheduledAction?:array{endTime?:int|string|\DateTimeInterface, namespaceName?:string, nextInvocations?:array<int|string|\DateTimeInterface>, roleArn?:string, schedule?:array{at?:int|string|\DateTimeInterface, cron?:string}, scheduledActionDescription?:string, scheduledActionName?:string, scheduledActionUuid?:string, startTime?:int|string|\DateTimeInterface, state?:"ACTIVE"|"DISABLED", targetAction?:array{createSnapshot?:array{namespaceName:string, retentionPeriod?:int, snapshotNamePrefix:string, tags?:array<array{key:string, value:string}>}}}}>
     */
    public function deleteScheduledAction(array $args): \AWS\Result { }

    /**
     * @param array{scheduledActionName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{scheduledAction?:array{endTime?:int|string|\DateTimeInterface, namespaceName?:string, nextInvocations?:array<int|string|\DateTimeInterface>, roleArn?:string, schedule?:array{at?:int|string|\DateTimeInterface, cron?:string}, scheduledActionDescription?:string, scheduledActionName?:string, scheduledActionUuid?:string, startTime?:int|string|\DateTimeInterface, state?:"ACTIVE"|"DISABLED", targetAction?:array{createSnapshot?:array{namespaceName:string, retentionPeriod?:int, snapshotNamePrefix:string, tags?:array<array{key:string, value:string}>}}}}>
     */
    public function deleteScheduledActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{snapshotName:string} $args
     * @return \AWS\Result<array{snapshot?:array{accountsWithProvisionedRestoreAccess?:array<string>, accountsWithRestoreAccess?:array<string>, actualIncrementalBackupSizeInMegaBytes?:float, adminPasswordSecretArn?:string, adminPasswordSecretKmsKeyId?:string, adminUsername?:string, backupProgressInMegaBytes?:float, currentBackupRateInMegaBytesPerSecond?:float, elapsedTimeInSeconds?:int, estimatedSecondsToCompletion?:int, kmsKeyId?:string, namespaceArn?:string, namespaceName?:string, ownerAccount?:string, snapshotArn?:string, snapshotCreateTime?:int|string|\DateTimeInterface, snapshotName?:string, snapshotRemainingDays?:int, snapshotRetentionPeriod?:int, snapshotRetentionStartTime?:int|string|\DateTimeInterface, status?:"AVAILABLE"|"CREATING"|"DELETED"|"CANCELLED"|"FAILED"|"COPYING", totalBackupSizeInMegaBytes?:float}}>
     */
    public function deleteSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{snapshotName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{snapshot?:array{accountsWithProvisionedRestoreAccess?:array<string>, accountsWithRestoreAccess?:array<string>, actualIncrementalBackupSizeInMegaBytes?:float, adminPasswordSecretArn?:string, adminPasswordSecretKmsKeyId?:string, adminUsername?:string, backupProgressInMegaBytes?:float, currentBackupRateInMegaBytesPerSecond?:float, elapsedTimeInSeconds?:int, estimatedSecondsToCompletion?:int, kmsKeyId?:string, namespaceArn?:string, namespaceName?:string, ownerAccount?:string, snapshotArn?:string, snapshotCreateTime?:int|string|\DateTimeInterface, snapshotName?:string, snapshotRemainingDays?:int, snapshotRetentionPeriod?:int, snapshotRetentionStartTime?:int|string|\DateTimeInterface, status?:"AVAILABLE"|"CREATING"|"DELETED"|"CANCELLED"|"FAILED"|"COPYING", totalBackupSizeInMegaBytes?:float}}>
     */
    public function deleteSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{snapshotCopyConfigurationId:string} $args
     * @return \AWS\Result<array{snapshotCopyConfiguration:array{destinationKmsKeyId?:string, destinationRegion?:string, namespaceName?:string, snapshotCopyConfigurationArn?:string, snapshotCopyConfigurationId?:string, snapshotRetentionPeriod?:int}}>
     */
    public function deleteSnapshotCopyConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{snapshotCopyConfigurationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{snapshotCopyConfiguration:array{destinationKmsKeyId?:string, destinationRegion?:string, namespaceName?:string, snapshotCopyConfigurationArn?:string, snapshotCopyConfigurationId?:string, snapshotRetentionPeriod?:int}}>
     */
    public function deleteSnapshotCopyConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{usageLimitId:string} $args
     * @return \AWS\Result<array{usageLimit?:array{amount?:int, breachAction?:"log"|"emit-metric"|"deactivate", period?:"daily"|"weekly"|"monthly", resourceArn?:string, usageLimitArn?:string, usageLimitId?:string, usageType?:"serverless-compute"|"cross-region-datasharing"}}>
     */
    public function deleteUsageLimit(array $args): \AWS\Result { }

    /**
     * @param array{usageLimitId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{usageLimit?:array{amount?:int, breachAction?:"log"|"emit-metric"|"deactivate", period?:"daily"|"weekly"|"monthly", resourceArn?:string, usageLimitArn?:string, usageLimitId?:string, usageType?:"serverless-compute"|"cross-region-datasharing"}}>
     */
    public function deleteUsageLimitAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{workgroupName:string} $args
     * @return \AWS\Result<array{workgroup:array{baseCapacity?:int, configParameters?:array<array{parameterKey?:string, parameterValue?:string}>, creationDate?:int|string|\DateTimeInterface, crossAccountVpcs?:array<string>, customDomainCertificateArn?:string, customDomainCertificateExpiryTime?:int|string|\DateTimeInterface, customDomainName?:string, endpoint?:array{address?:string, port?:int, vpcEndpoints?:array<array{networkInterfaces?:array<array{availabilityZone?:string, ipv6Address?:string, networkInterfaceId?:string, privateIpAddress?:string, subnetId?:string}>, vpcEndpointId?:string, vpcId?:string}>}, enhancedVpcRouting?:bool, ipAddressType?:string, maxCapacity?:int, namespaceName?:string, patchVersion?:string, port?:int, pricePerformanceTarget?:array{level?:int, status?:"ENABLED"|"DISABLED"}, publiclyAccessible?:bool, securityGroupIds?:array<string>, status?:"CREATING"|"AVAILABLE"|"MODIFYING"|"DELETING", subnetIds?:array<string>, workgroupArn?:string, workgroupId?:string, workgroupName?:string, workgroupVersion?:string}}>
     */
    public function deleteWorkgroup(array $args): \AWS\Result { }

    /**
     * @param array{workgroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{workgroup:array{baseCapacity?:int, configParameters?:array<array{parameterKey?:string, parameterValue?:string}>, creationDate?:int|string|\DateTimeInterface, crossAccountVpcs?:array<string>, customDomainCertificateArn?:string, customDomainCertificateExpiryTime?:int|string|\DateTimeInterface, customDomainName?:string, endpoint?:array{address?:string, port?:int, vpcEndpoints?:array<array{networkInterfaces?:array<array{availabilityZone?:string, ipv6Address?:string, networkInterfaceId?:string, privateIpAddress?:string, subnetId?:string}>, vpcEndpointId?:string, vpcId?:string}>}, enhancedVpcRouting?:bool, ipAddressType?:string, maxCapacity?:int, namespaceName?:string, patchVersion?:string, port?:int, pricePerformanceTarget?:array{level?:int, status?:"ENABLED"|"DISABLED"}, publiclyAccessible?:bool, securityGroupIds?:array<string>, status?:"CREATING"|"AVAILABLE"|"MODIFYING"|"DELETING", subnetIds?:array<string>, workgroupArn?:string, workgroupId?:string, workgroupName?:string, workgroupVersion?:string}}>
     */
    public function deleteWorkgroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{customDomainName?:string, dbName?:string, durationSeconds?:int, workgroupName?:string} $args
     * @return \AWS\Result<array{dbPassword?:string, dbUser?:string, expiration?:int|string|\DateTimeInterface, nextRefreshTime?:int|string|\DateTimeInterface}>
     */
    public function getCredentials(array $args = []): \AWS\Result { }

    /**
     * @param array{customDomainName?:string, dbName?:string, durationSeconds?:int, workgroupName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{dbPassword?:string, dbUser?:string, expiration?:int|string|\DateTimeInterface, nextRefreshTime?:int|string|\DateTimeInterface}>
     */
    public function getCredentialsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{customDomainName:string, workgroupName:string} $args
     * @return \AWS\Result<array{customDomainCertificateArn?:string, customDomainCertificateExpiryTime?:int|string|\DateTimeInterface, customDomainName?:string, workgroupName?:string}>
     */
    public function getCustomDomainAssociation(array $args): \AWS\Result { }

    /**
     * @param array{customDomainName:string, workgroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{customDomainCertificateArn?:string, customDomainCertificateExpiryTime?:int|string|\DateTimeInterface, customDomainName?:string, workgroupName?:string}>
     */
    public function getCustomDomainAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{endpointName:string} $args
     * @return \AWS\Result<array{endpoint?:array{address?:string, endpointArn?:string, endpointCreateTime?:int|string|\DateTimeInterface, endpointName?:string, endpointStatus?:string, port?:int, subnetIds?:array<string>, vpcEndpoint?:array{networkInterfaces?:array<array{availabilityZone?:string, ipv6Address?:string, networkInterfaceId?:string, privateIpAddress?:string, subnetId?:string}>, vpcEndpointId?:string, vpcId?:string}, vpcSecurityGroups?:array<array{status?:string, vpcSecurityGroupId?:string}>, workgroupName?:string}}>
     */
    public function getEndpointAccess(array $args): \AWS\Result { }

    /**
     * @param array{endpointName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{endpoint?:array{address?:string, endpointArn?:string, endpointCreateTime?:int|string|\DateTimeInterface, endpointName?:string, endpointStatus?:string, port?:int, subnetIds?:array<string>, vpcEndpoint?:array{networkInterfaces?:array<array{availabilityZone?:string, ipv6Address?:string, networkInterfaceId?:string, privateIpAddress?:string, subnetId?:string}>, vpcEndpointId?:string, vpcId?:string}, vpcSecurityGroups?:array<array{status?:string, vpcSecurityGroupId?:string}>, workgroupName?:string}}>
     */
    public function getEndpointAccessAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{namespaceName:string} $args
     * @return \AWS\Result<array{namespace:array{adminPasswordSecretArn?:string, adminPasswordSecretKmsKeyId?:string, adminUsername?:string, creationDate?:int|string|\DateTimeInterface, dbName?:string, defaultIamRoleArn?:string, iamRoles?:array<string>, kmsKeyId?:string, logExports?:array<"useractivitylog"|"userlog"|"connectionlog">, namespaceArn?:string, namespaceId?:string, namespaceName?:string, status?:"AVAILABLE"|"MODIFYING"|"DELETING"}}>
     */
    public function getNamespace(array $args): \AWS\Result { }

    /**
     * @param array{namespaceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{namespace:array{adminPasswordSecretArn?:string, adminPasswordSecretKmsKeyId?:string, adminUsername?:string, creationDate?:int|string|\DateTimeInterface, dbName?:string, defaultIamRoleArn?:string, iamRoles?:array<string>, kmsKeyId?:string, logExports?:array<"useractivitylog"|"userlog"|"connectionlog">, namespaceArn?:string, namespaceId?:string, namespaceName?:string, status?:"AVAILABLE"|"MODIFYING"|"DELETING"}}>
     */
    public function getNamespaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{recoveryPointId:string} $args
     * @return \AWS\Result<array{recoveryPoint?:array{namespaceArn?:string, namespaceName?:string, recoveryPointCreateTime?:int|string|\DateTimeInterface, recoveryPointId?:string, totalSizeInMegaBytes?:float, workgroupName?:string}}>
     */
    public function getRecoveryPoint(array $args): \AWS\Result { }

    /**
     * @param array{recoveryPointId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{recoveryPoint?:array{namespaceArn?:string, namespaceName?:string, recoveryPointCreateTime?:int|string|\DateTimeInterface, recoveryPointId?:string, totalSizeInMegaBytes?:float, workgroupName?:string}}>
     */
    public function getRecoveryPointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{resourcePolicy?:array{policy?:string, resourceArn?:string}}>
     */
    public function getResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{resourcePolicy?:array{policy?:string, resourceArn?:string}}>
     */
    public function getResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{scheduledActionName:string} $args
     * @return \AWS\Result<array{scheduledAction?:array{endTime?:int|string|\DateTimeInterface, namespaceName?:string, nextInvocations?:array<int|string|\DateTimeInterface>, roleArn?:string, schedule?:array{at?:int|string|\DateTimeInterface, cron?:string}, scheduledActionDescription?:string, scheduledActionName?:string, scheduledActionUuid?:string, startTime?:int|string|\DateTimeInterface, state?:"ACTIVE"|"DISABLED", targetAction?:array{createSnapshot?:array{namespaceName:string, retentionPeriod?:int, snapshotNamePrefix:string, tags?:array<array{key:string, value:string}>}}}}>
     */
    public function getScheduledAction(array $args): \AWS\Result { }

    /**
     * @param array{scheduledActionName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{scheduledAction?:array{endTime?:int|string|\DateTimeInterface, namespaceName?:string, nextInvocations?:array<int|string|\DateTimeInterface>, roleArn?:string, schedule?:array{at?:int|string|\DateTimeInterface, cron?:string}, scheduledActionDescription?:string, scheduledActionName?:string, scheduledActionUuid?:string, startTime?:int|string|\DateTimeInterface, state?:"ACTIVE"|"DISABLED", targetAction?:array{createSnapshot?:array{namespaceName:string, retentionPeriod?:int, snapshotNamePrefix:string, tags?:array<array{key:string, value:string}>}}}}>
     */
    public function getScheduledActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ownerAccount?:string, snapshotArn?:string, snapshotName?:string} $args
     * @return \AWS\Result<array{snapshot?:array{accountsWithProvisionedRestoreAccess?:array<string>, accountsWithRestoreAccess?:array<string>, actualIncrementalBackupSizeInMegaBytes?:float, adminPasswordSecretArn?:string, adminPasswordSecretKmsKeyId?:string, adminUsername?:string, backupProgressInMegaBytes?:float, currentBackupRateInMegaBytesPerSecond?:float, elapsedTimeInSeconds?:int, estimatedSecondsToCompletion?:int, kmsKeyId?:string, namespaceArn?:string, namespaceName?:string, ownerAccount?:string, snapshotArn?:string, snapshotCreateTime?:int|string|\DateTimeInterface, snapshotName?:string, snapshotRemainingDays?:int, snapshotRetentionPeriod?:int, snapshotRetentionStartTime?:int|string|\DateTimeInterface, status?:"AVAILABLE"|"CREATING"|"DELETED"|"CANCELLED"|"FAILED"|"COPYING", totalBackupSizeInMegaBytes?:float}}>
     */
    public function getSnapshot(array $args = []): \AWS\Result { }

    /**
     * @param array{ownerAccount?:string, snapshotArn?:string, snapshotName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{snapshot?:array{accountsWithProvisionedRestoreAccess?:array<string>, accountsWithRestoreAccess?:array<string>, actualIncrementalBackupSizeInMegaBytes?:float, adminPasswordSecretArn?:string, adminPasswordSecretKmsKeyId?:string, adminUsername?:string, backupProgressInMegaBytes?:float, currentBackupRateInMegaBytesPerSecond?:float, elapsedTimeInSeconds?:int, estimatedSecondsToCompletion?:int, kmsKeyId?:string, namespaceArn?:string, namespaceName?:string, ownerAccount?:string, snapshotArn?:string, snapshotCreateTime?:int|string|\DateTimeInterface, snapshotName?:string, snapshotRemainingDays?:int, snapshotRetentionPeriod?:int, snapshotRetentionStartTime?:int|string|\DateTimeInterface, status?:"AVAILABLE"|"CREATING"|"DELETED"|"CANCELLED"|"FAILED"|"COPYING", totalBackupSizeInMegaBytes?:float}}>
     */
    public function getSnapshotAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{tableRestoreRequestId:string} $args
     * @return \AWS\Result<array{tableRestoreStatus?:array{message?:string, namespaceName?:string, newTableName?:string, progressInMegaBytes?:int, recoveryPointId?:string, requestTime?:int|string|\DateTimeInterface, snapshotName?:string, sourceDatabaseName?:string, sourceSchemaName?:string, sourceTableName?:string, status?:string, tableRestoreRequestId?:string, targetDatabaseName?:string, targetSchemaName?:string, totalDataInMegaBytes?:int, workgroupName?:string}}>
     */
    public function getTableRestoreStatus(array $args): \AWS\Result { }

    /**
     * @param array{tableRestoreRequestId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tableRestoreStatus?:array{message?:string, namespaceName?:string, newTableName?:string, progressInMegaBytes?:int, recoveryPointId?:string, requestTime?:int|string|\DateTimeInterface, snapshotName?:string, sourceDatabaseName?:string, sourceSchemaName?:string, sourceTableName?:string, status?:string, tableRestoreRequestId?:string, targetDatabaseName?:string, targetSchemaName?:string, totalDataInMegaBytes?:int, workgroupName?:string}}>
     */
    public function getTableRestoreStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{usageLimitId:string} $args
     * @return \AWS\Result<array{usageLimit?:array{amount?:int, breachAction?:"log"|"emit-metric"|"deactivate", period?:"daily"|"weekly"|"monthly", resourceArn?:string, usageLimitArn?:string, usageLimitId?:string, usageType?:"serverless-compute"|"cross-region-datasharing"}}>
     */
    public function getUsageLimit(array $args): \AWS\Result { }

    /**
     * @param array{usageLimitId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{usageLimit?:array{amount?:int, breachAction?:"log"|"emit-metric"|"deactivate", period?:"daily"|"weekly"|"monthly", resourceArn?:string, usageLimitArn?:string, usageLimitId?:string, usageType?:"serverless-compute"|"cross-region-datasharing"}}>
     */
    public function getUsageLimitAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{workgroupName:string} $args
     * @return \AWS\Result<array{workgroup:array{baseCapacity?:int, configParameters?:array<array{parameterKey?:string, parameterValue?:string}>, creationDate?:int|string|\DateTimeInterface, crossAccountVpcs?:array<string>, customDomainCertificateArn?:string, customDomainCertificateExpiryTime?:int|string|\DateTimeInterface, customDomainName?:string, endpoint?:array{address?:string, port?:int, vpcEndpoints?:array<array{networkInterfaces?:array<array{availabilityZone?:string, ipv6Address?:string, networkInterfaceId?:string, privateIpAddress?:string, subnetId?:string}>, vpcEndpointId?:string, vpcId?:string}>}, enhancedVpcRouting?:bool, ipAddressType?:string, maxCapacity?:int, namespaceName?:string, patchVersion?:string, port?:int, pricePerformanceTarget?:array{level?:int, status?:"ENABLED"|"DISABLED"}, publiclyAccessible?:bool, securityGroupIds?:array<string>, status?:"CREATING"|"AVAILABLE"|"MODIFYING"|"DELETING", subnetIds?:array<string>, workgroupArn?:string, workgroupId?:string, workgroupName?:string, workgroupVersion?:string}}>
     */
    public function getWorkgroup(array $args): \AWS\Result { }

    /**
     * @param array{workgroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{workgroup:array{baseCapacity?:int, configParameters?:array<array{parameterKey?:string, parameterValue?:string}>, creationDate?:int|string|\DateTimeInterface, crossAccountVpcs?:array<string>, customDomainCertificateArn?:string, customDomainCertificateExpiryTime?:int|string|\DateTimeInterface, customDomainName?:string, endpoint?:array{address?:string, port?:int, vpcEndpoints?:array<array{networkInterfaces?:array<array{availabilityZone?:string, ipv6Address?:string, networkInterfaceId?:string, privateIpAddress?:string, subnetId?:string}>, vpcEndpointId?:string, vpcId?:string}>}, enhancedVpcRouting?:bool, ipAddressType?:string, maxCapacity?:int, namespaceName?:string, patchVersion?:string, port?:int, pricePerformanceTarget?:array{level?:int, status?:"ENABLED"|"DISABLED"}, publiclyAccessible?:bool, securityGroupIds?:array<string>, status?:"CREATING"|"AVAILABLE"|"MODIFYING"|"DELETING", subnetIds?:array<string>, workgroupArn?:string, workgroupId?:string, workgroupName?:string, workgroupVersion?:string}}>
     */
    public function getWorkgroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{customDomainCertificateArn?:string, customDomainName?:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{associations?:array<array{customDomainCertificateArn?:string, customDomainCertificateExpiryTime?:int|string|\DateTimeInterface, customDomainName?:string, workgroupName?:string}>, nextToken?:string}>
     */
    public function listCustomDomainAssociations(array $args = []): \AWS\Result { }

    /**
     * @param array{customDomainCertificateArn?:string, customDomainName?:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{associations?:array<array{customDomainCertificateArn?:string, customDomainCertificateExpiryTime?:int|string|\DateTimeInterface, customDomainName?:string, workgroupName?:string}>, nextToken?:string}>
     */
    public function listCustomDomainAssociationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, ownerAccount?:string, vpcId?:string, workgroupName?:string} $args
     * @return \AWS\Result<array{endpoints:array<array{address?:string, endpointArn?:string, endpointCreateTime?:int|string|\DateTimeInterface, endpointName?:string, endpointStatus?:string, port?:int, subnetIds?:array<string>, vpcEndpoint?:array{networkInterfaces?:array<array{availabilityZone?:string, ipv6Address?:string, networkInterfaceId?:string, privateIpAddress?:string, subnetId?:string}>, vpcEndpointId?:string, vpcId?:string}, vpcSecurityGroups?:array<array{status?:string, vpcSecurityGroupId?:string}>, workgroupName?:string}>, nextToken?:string}>
     */
    public function listEndpointAccess(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, ownerAccount?:string, vpcId?:string, workgroupName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{endpoints:array<array{address?:string, endpointArn?:string, endpointCreateTime?:int|string|\DateTimeInterface, endpointName?:string, endpointStatus?:string, port?:int, subnetIds?:array<string>, vpcEndpoint?:array{networkInterfaces?:array<array{availabilityZone?:string, ipv6Address?:string, networkInterfaceId?:string, privateIpAddress?:string, subnetId?:string}>, vpcEndpointId?:string, vpcId?:string}, vpcSecurityGroups?:array<array{status?:string, vpcSecurityGroupId?:string}>, workgroupName?:string}>, nextToken?:string}>
     */
    public function listEndpointAccessAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, sourceArn?:string} $args
     * @return \AWS\Result<array{managedWorkgroups?:array<array{creationDate?:int|string|\DateTimeInterface, managedWorkgroupId?:string, managedWorkgroupName?:string, sourceArn?:string, status?:"CREATING"|"DELETING"|"MODIFYING"|"AVAILABLE"|"NOT_AVAILABLE"}>, nextToken?:string}>
     */
    public function listManagedWorkgroups(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, sourceArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{managedWorkgroups?:array<array{creationDate?:int|string|\DateTimeInterface, managedWorkgroupId?:string, managedWorkgroupName?:string, sourceArn?:string, status?:"CREATING"|"DELETING"|"MODIFYING"|"AVAILABLE"|"NOT_AVAILABLE"}>, nextToken?:string}>
     */
    public function listManagedWorkgroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{namespaces:array<array{adminPasswordSecretArn?:string, adminPasswordSecretKmsKeyId?:string, adminUsername?:string, creationDate?:int|string|\DateTimeInterface, dbName?:string, defaultIamRoleArn?:string, iamRoles?:array<string>, kmsKeyId?:string, logExports?:array<"useractivitylog"|"userlog"|"connectionlog">, namespaceArn?:string, namespaceId?:string, namespaceName?:string, status?:"AVAILABLE"|"MODIFYING"|"DELETING"}>, nextToken?:string}>
     */
    public function listNamespaces(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{namespaces:array<array{adminPasswordSecretArn?:string, adminPasswordSecretKmsKeyId?:string, adminUsername?:string, creationDate?:int|string|\DateTimeInterface, dbName?:string, defaultIamRoleArn?:string, iamRoles?:array<string>, kmsKeyId?:string, logExports?:array<"useractivitylog"|"userlog"|"connectionlog">, namespaceArn?:string, namespaceId?:string, namespaceName?:string, status?:"AVAILABLE"|"MODIFYING"|"DELETING"}>, nextToken?:string}>
     */
    public function listNamespacesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{endTime?:int|string|\DateTimeInterface, maxResults?:int, namespaceArn?:string, namespaceName?:string, nextToken?:string, startTime?:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{nextToken?:string, recoveryPoints?:array<array{namespaceArn?:string, namespaceName?:string, recoveryPointCreateTime?:int|string|\DateTimeInterface, recoveryPointId?:string, totalSizeInMegaBytes?:float, workgroupName?:string}>}>
     */
    public function listRecoveryPoints(array $args = []): \AWS\Result { }

    /**
     * @param array{endTime?:int|string|\DateTimeInterface, maxResults?:int, namespaceArn?:string, namespaceName?:string, nextToken?:string, startTime?:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, recoveryPoints?:array<array{namespaceArn?:string, namespaceName?:string, recoveryPointCreateTime?:int|string|\DateTimeInterface, recoveryPointId?:string, totalSizeInMegaBytes?:float, workgroupName?:string}>}>
     */
    public function listRecoveryPointsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, namespaceName?:string, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, scheduledActions?:array<array{namespaceName?:string, scheduledActionName?:string}>}>
     */
    public function listScheduledActions(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, namespaceName?:string, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, scheduledActions?:array<array{namespaceName?:string, scheduledActionName?:string}>}>
     */
    public function listScheduledActionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, namespaceName?:string, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, snapshotCopyConfigurations:array<array{destinationKmsKeyId?:string, destinationRegion?:string, namespaceName?:string, snapshotCopyConfigurationArn?:string, snapshotCopyConfigurationId?:string, snapshotRetentionPeriod?:int}>}>
     */
    public function listSnapshotCopyConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, namespaceName?:string, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, snapshotCopyConfigurations:array<array{destinationKmsKeyId?:string, destinationRegion?:string, namespaceName?:string, snapshotCopyConfigurationArn?:string, snapshotCopyConfigurationId?:string, snapshotRetentionPeriod?:int}>}>
     */
    public function listSnapshotCopyConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{endTime?:int|string|\DateTimeInterface, maxResults?:int, namespaceArn?:string, namespaceName?:string, nextToken?:string, ownerAccount?:string, startTime?:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{nextToken?:string, snapshots?:array<array{accountsWithProvisionedRestoreAccess?:array<string>, accountsWithRestoreAccess?:array<string>, actualIncrementalBackupSizeInMegaBytes?:float, adminPasswordSecretArn?:string, adminPasswordSecretKmsKeyId?:string, adminUsername?:string, backupProgressInMegaBytes?:float, currentBackupRateInMegaBytesPerSecond?:float, elapsedTimeInSeconds?:int, estimatedSecondsToCompletion?:int, kmsKeyId?:string, namespaceArn?:string, namespaceName?:string, ownerAccount?:string, snapshotArn?:string, snapshotCreateTime?:int|string|\DateTimeInterface, snapshotName?:string, snapshotRemainingDays?:int, snapshotRetentionPeriod?:int, snapshotRetentionStartTime?:int|string|\DateTimeInterface, status?:"AVAILABLE"|"CREATING"|"DELETED"|"CANCELLED"|"FAILED"|"COPYING", totalBackupSizeInMegaBytes?:float}>}>
     */
    public function listSnapshots(array $args = []): \AWS\Result { }

    /**
     * @param array{endTime?:int|string|\DateTimeInterface, maxResults?:int, namespaceArn?:string, namespaceName?:string, nextToken?:string, ownerAccount?:string, startTime?:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, snapshots?:array<array{accountsWithProvisionedRestoreAccess?:array<string>, accountsWithRestoreAccess?:array<string>, actualIncrementalBackupSizeInMegaBytes?:float, adminPasswordSecretArn?:string, adminPasswordSecretKmsKeyId?:string, adminUsername?:string, backupProgressInMegaBytes?:float, currentBackupRateInMegaBytesPerSecond?:float, elapsedTimeInSeconds?:int, estimatedSecondsToCompletion?:int, kmsKeyId?:string, namespaceArn?:string, namespaceName?:string, ownerAccount?:string, snapshotArn?:string, snapshotCreateTime?:int|string|\DateTimeInterface, snapshotName?:string, snapshotRemainingDays?:int, snapshotRetentionPeriod?:int, snapshotRetentionStartTime?:int|string|\DateTimeInterface, status?:"AVAILABLE"|"CREATING"|"DELETED"|"CANCELLED"|"FAILED"|"COPYING", totalBackupSizeInMegaBytes?:float}>}>
     */
    public function listSnapshotsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, namespaceName?:string, nextToken?:string, workgroupName?:string} $args
     * @return \AWS\Result<array{nextToken?:string, tableRestoreStatuses?:array<array{message?:string, namespaceName?:string, newTableName?:string, progressInMegaBytes?:int, recoveryPointId?:string, requestTime?:int|string|\DateTimeInterface, snapshotName?:string, sourceDatabaseName?:string, sourceSchemaName?:string, sourceTableName?:string, status?:string, tableRestoreRequestId?:string, targetDatabaseName?:string, targetSchemaName?:string, totalDataInMegaBytes?:int, workgroupName?:string}>}>
     */
    public function listTableRestoreStatus(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, namespaceName?:string, nextToken?:string, workgroupName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, tableRestoreStatuses?:array<array{message?:string, namespaceName?:string, newTableName?:string, progressInMegaBytes?:int, recoveryPointId?:string, requestTime?:int|string|\DateTimeInterface, snapshotName?:string, sourceDatabaseName?:string, sourceSchemaName?:string, sourceTableName?:string, status?:string, tableRestoreRequestId?:string, targetDatabaseName?:string, targetSchemaName?:string, totalDataInMegaBytes?:int, workgroupName?:string}>}>
     */
    public function listTableRestoreStatusAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{tags?:array<array{key:string, value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<array{key:string, value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, resourceArn?:string, usageType?:"serverless-compute"|"cross-region-datasharing"} $args
     * @return \AWS\Result<array{nextToken?:string, usageLimits?:array<array{amount?:int, breachAction?:"log"|"emit-metric"|"deactivate", period?:"daily"|"weekly"|"monthly", resourceArn?:string, usageLimitArn?:string, usageLimitId?:string, usageType?:"serverless-compute"|"cross-region-datasharing"}>}>
     */
    public function listUsageLimits(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, resourceArn?:string, usageType?:"serverless-compute"|"cross-region-datasharing"} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, usageLimits?:array<array{amount?:int, breachAction?:"log"|"emit-metric"|"deactivate", period?:"daily"|"weekly"|"monthly", resourceArn?:string, usageLimitArn?:string, usageLimitId?:string, usageType?:"serverless-compute"|"cross-region-datasharing"}>}>
     */
    public function listUsageLimitsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, ownerAccount?:string} $args
     * @return \AWS\Result<array{nextToken?:string, workgroups:array<array{baseCapacity?:int, configParameters?:array<array{parameterKey?:string, parameterValue?:string}>, creationDate?:int|string|\DateTimeInterface, crossAccountVpcs?:array<string>, customDomainCertificateArn?:string, customDomainCertificateExpiryTime?:int|string|\DateTimeInterface, customDomainName?:string, endpoint?:array{address?:string, port?:int, vpcEndpoints?:array<array{networkInterfaces?:array<array{availabilityZone?:string, ipv6Address?:string, networkInterfaceId?:string, privateIpAddress?:string, subnetId?:string}>, vpcEndpointId?:string, vpcId?:string}>}, enhancedVpcRouting?:bool, ipAddressType?:string, maxCapacity?:int, namespaceName?:string, patchVersion?:string, port?:int, pricePerformanceTarget?:array{level?:int, status?:"ENABLED"|"DISABLED"}, publiclyAccessible?:bool, securityGroupIds?:array<string>, status?:"CREATING"|"AVAILABLE"|"MODIFYING"|"DELETING", subnetIds?:array<string>, workgroupArn?:string, workgroupId?:string, workgroupName?:string, workgroupVersion?:string}>}>
     */
    public function listWorkgroups(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, ownerAccount?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, workgroups:array<array{baseCapacity?:int, configParameters?:array<array{parameterKey?:string, parameterValue?:string}>, creationDate?:int|string|\DateTimeInterface, crossAccountVpcs?:array<string>, customDomainCertificateArn?:string, customDomainCertificateExpiryTime?:int|string|\DateTimeInterface, customDomainName?:string, endpoint?:array{address?:string, port?:int, vpcEndpoints?:array<array{networkInterfaces?:array<array{availabilityZone?:string, ipv6Address?:string, networkInterfaceId?:string, privateIpAddress?:string, subnetId?:string}>, vpcEndpointId?:string, vpcId?:string}>}, enhancedVpcRouting?:bool, ipAddressType?:string, maxCapacity?:int, namespaceName?:string, patchVersion?:string, port?:int, pricePerformanceTarget?:array{level?:int, status?:"ENABLED"|"DISABLED"}, publiclyAccessible?:bool, securityGroupIds?:array<string>, status?:"CREATING"|"AVAILABLE"|"MODIFYING"|"DELETING", subnetIds?:array<string>, workgroupArn?:string, workgroupId?:string, workgroupName?:string, workgroupVersion?:string}>}>
     */
    public function listWorkgroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{policy:string, resourceArn:string} $args
     * @return \AWS\Result<array{resourcePolicy?:array{policy?:string, resourceArn?:string}}>
     */
    public function putResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{policy:string, resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{resourcePolicy?:array{policy?:string, resourceArn?:string}}>
     */
    public function putResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{namespaceName:string, recoveryPointId:string, workgroupName:string} $args
     * @return \AWS\Result<array{namespace?:array{adminPasswordSecretArn?:string, adminPasswordSecretKmsKeyId?:string, adminUsername?:string, creationDate?:int|string|\DateTimeInterface, dbName?:string, defaultIamRoleArn?:string, iamRoles?:array<string>, kmsKeyId?:string, logExports?:array<"useractivitylog"|"userlog"|"connectionlog">, namespaceArn?:string, namespaceId?:string, namespaceName?:string, status?:"AVAILABLE"|"MODIFYING"|"DELETING"}, recoveryPointId?:string}>
     */
    public function restoreFromRecoveryPoint(array $args): \AWS\Result { }

    /**
     * @param array{namespaceName:string, recoveryPointId:string, workgroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{namespace?:array{adminPasswordSecretArn?:string, adminPasswordSecretKmsKeyId?:string, adminUsername?:string, creationDate?:int|string|\DateTimeInterface, dbName?:string, defaultIamRoleArn?:string, iamRoles?:array<string>, kmsKeyId?:string, logExports?:array<"useractivitylog"|"userlog"|"connectionlog">, namespaceArn?:string, namespaceId?:string, namespaceName?:string, status?:"AVAILABLE"|"MODIFYING"|"DELETING"}, recoveryPointId?:string}>
     */
    public function restoreFromRecoveryPointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{adminPasswordSecretKmsKeyId?:string, manageAdminPassword?:bool, namespaceName:string, ownerAccount?:string, snapshotArn?:string, snapshotName?:string, workgroupName:string} $args
     * @return \AWS\Result<array{namespace?:array{adminPasswordSecretArn?:string, adminPasswordSecretKmsKeyId?:string, adminUsername?:string, creationDate?:int|string|\DateTimeInterface, dbName?:string, defaultIamRoleArn?:string, iamRoles?:array<string>, kmsKeyId?:string, logExports?:array<"useractivitylog"|"userlog"|"connectionlog">, namespaceArn?:string, namespaceId?:string, namespaceName?:string, status?:"AVAILABLE"|"MODIFYING"|"DELETING"}, ownerAccount?:string, snapshotName?:string}>
     */
    public function restoreFromSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{adminPasswordSecretKmsKeyId?:string, manageAdminPassword?:bool, namespaceName:string, ownerAccount?:string, snapshotArn?:string, snapshotName?:string, workgroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{namespace?:array{adminPasswordSecretArn?:string, adminPasswordSecretKmsKeyId?:string, adminUsername?:string, creationDate?:int|string|\DateTimeInterface, dbName?:string, defaultIamRoleArn?:string, iamRoles?:array<string>, kmsKeyId?:string, logExports?:array<"useractivitylog"|"userlog"|"connectionlog">, namespaceArn?:string, namespaceId?:string, namespaceName?:string, status?:"AVAILABLE"|"MODIFYING"|"DELETING"}, ownerAccount?:string, snapshotName?:string}>
     */
    public function restoreFromSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{activateCaseSensitiveIdentifier?:bool, namespaceName:string, newTableName:string, recoveryPointId:string, sourceDatabaseName:string, sourceSchemaName?:string, sourceTableName:string, targetDatabaseName?:string, targetSchemaName?:string, workgroupName:string} $args
     * @return \AWS\Result<array{tableRestoreStatus?:array{message?:string, namespaceName?:string, newTableName?:string, progressInMegaBytes?:int, recoveryPointId?:string, requestTime?:int|string|\DateTimeInterface, snapshotName?:string, sourceDatabaseName?:string, sourceSchemaName?:string, sourceTableName?:string, status?:string, tableRestoreRequestId?:string, targetDatabaseName?:string, targetSchemaName?:string, totalDataInMegaBytes?:int, workgroupName?:string}}>
     */
    public function restoreTableFromRecoveryPoint(array $args): \AWS\Result { }

    /**
     * @param array{activateCaseSensitiveIdentifier?:bool, namespaceName:string, newTableName:string, recoveryPointId:string, sourceDatabaseName:string, sourceSchemaName?:string, sourceTableName:string, targetDatabaseName?:string, targetSchemaName?:string, workgroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tableRestoreStatus?:array{message?:string, namespaceName?:string, newTableName?:string, progressInMegaBytes?:int, recoveryPointId?:string, requestTime?:int|string|\DateTimeInterface, snapshotName?:string, sourceDatabaseName?:string, sourceSchemaName?:string, sourceTableName?:string, status?:string, tableRestoreRequestId?:string, targetDatabaseName?:string, targetSchemaName?:string, totalDataInMegaBytes?:int, workgroupName?:string}}>
     */
    public function restoreTableFromRecoveryPointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{activateCaseSensitiveIdentifier?:bool, namespaceName:string, newTableName:string, snapshotName:string, sourceDatabaseName:string, sourceSchemaName?:string, sourceTableName:string, targetDatabaseName?:string, targetSchemaName?:string, workgroupName:string} $args
     * @return \AWS\Result<array{tableRestoreStatus?:array{message?:string, namespaceName?:string, newTableName?:string, progressInMegaBytes?:int, recoveryPointId?:string, requestTime?:int|string|\DateTimeInterface, snapshotName?:string, sourceDatabaseName?:string, sourceSchemaName?:string, sourceTableName?:string, status?:string, tableRestoreRequestId?:string, targetDatabaseName?:string, targetSchemaName?:string, totalDataInMegaBytes?:int, workgroupName?:string}}>
     */
    public function restoreTableFromSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{activateCaseSensitiveIdentifier?:bool, namespaceName:string, newTableName:string, snapshotName:string, sourceDatabaseName:string, sourceSchemaName?:string, sourceTableName:string, targetDatabaseName?:string, targetSchemaName?:string, workgroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tableRestoreStatus?:array{message?:string, namespaceName?:string, newTableName?:string, progressInMegaBytes?:int, recoveryPointId?:string, requestTime?:int|string|\DateTimeInterface, snapshotName?:string, sourceDatabaseName?:string, sourceSchemaName?:string, sourceTableName?:string, status?:string, tableRestoreRequestId?:string, targetDatabaseName?:string, targetSchemaName?:string, totalDataInMegaBytes?:int, workgroupName?:string}}>
     */
    public function restoreTableFromSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{customDomainCertificateArn:string, customDomainName:string, workgroupName:string} $args
     * @return \AWS\Result<array{customDomainCertificateArn?:string, customDomainCertificateExpiryTime?:int|string|\DateTimeInterface, customDomainName?:string, workgroupName?:string}>
     */
    public function updateCustomDomainAssociation(array $args): \AWS\Result { }

    /**
     * @param array{customDomainCertificateArn:string, customDomainName:string, workgroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{customDomainCertificateArn?:string, customDomainCertificateExpiryTime?:int|string|\DateTimeInterface, customDomainName?:string, workgroupName?:string}>
     */
    public function updateCustomDomainAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{endpointName:string, vpcSecurityGroupIds?:array<string>} $args
     * @return \AWS\Result<array{endpoint?:array{address?:string, endpointArn?:string, endpointCreateTime?:int|string|\DateTimeInterface, endpointName?:string, endpointStatus?:string, port?:int, subnetIds?:array<string>, vpcEndpoint?:array{networkInterfaces?:array<array{availabilityZone?:string, ipv6Address?:string, networkInterfaceId?:string, privateIpAddress?:string, subnetId?:string}>, vpcEndpointId?:string, vpcId?:string}, vpcSecurityGroups?:array<array{status?:string, vpcSecurityGroupId?:string}>, workgroupName?:string}}>
     */
    public function updateEndpointAccess(array $args): \AWS\Result { }

    /**
     * @param array{endpointName:string, vpcSecurityGroupIds?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{endpoint?:array{address?:string, endpointArn?:string, endpointCreateTime?:int|string|\DateTimeInterface, endpointName?:string, endpointStatus?:string, port?:int, subnetIds?:array<string>, vpcEndpoint?:array{networkInterfaces?:array<array{availabilityZone?:string, ipv6Address?:string, networkInterfaceId?:string, privateIpAddress?:string, subnetId?:string}>, vpcEndpointId?:string, vpcId?:string}, vpcSecurityGroups?:array<array{status?:string, vpcSecurityGroupId?:string}>, workgroupName?:string}}>
     */
    public function updateEndpointAccessAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{adminPasswordSecretKmsKeyId?:string, adminUserPassword?:string, adminUsername?:string, defaultIamRoleArn?:string, iamRoles?:array<string>, kmsKeyId?:string, logExports?:array<"useractivitylog"|"userlog"|"connectionlog">, manageAdminPassword?:bool, namespaceName:string} $args
     * @return \AWS\Result<array{namespace:array{adminPasswordSecretArn?:string, adminPasswordSecretKmsKeyId?:string, adminUsername?:string, creationDate?:int|string|\DateTimeInterface, dbName?:string, defaultIamRoleArn?:string, iamRoles?:array<string>, kmsKeyId?:string, logExports?:array<"useractivitylog"|"userlog"|"connectionlog">, namespaceArn?:string, namespaceId?:string, namespaceName?:string, status?:"AVAILABLE"|"MODIFYING"|"DELETING"}}>
     */
    public function updateNamespace(array $args): \AWS\Result { }

    /**
     * @param array{adminPasswordSecretKmsKeyId?:string, adminUserPassword?:string, adminUsername?:string, defaultIamRoleArn?:string, iamRoles?:array<string>, kmsKeyId?:string, logExports?:array<"useractivitylog"|"userlog"|"connectionlog">, manageAdminPassword?:bool, namespaceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{namespace:array{adminPasswordSecretArn?:string, adminPasswordSecretKmsKeyId?:string, adminUsername?:string, creationDate?:int|string|\DateTimeInterface, dbName?:string, defaultIamRoleArn?:string, iamRoles?:array<string>, kmsKeyId?:string, logExports?:array<"useractivitylog"|"userlog"|"connectionlog">, namespaceArn?:string, namespaceId?:string, namespaceName?:string, status?:"AVAILABLE"|"MODIFYING"|"DELETING"}}>
     */
    public function updateNamespaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{enabled?:bool, endTime?:int|string|\DateTimeInterface, roleArn?:string, schedule?:array{at?:int|string|\DateTimeInterface, cron?:string}, scheduledActionDescription?:string, scheduledActionName:string, startTime?:int|string|\DateTimeInterface, targetAction?:array{createSnapshot?:array{namespaceName:string, retentionPeriod?:int, snapshotNamePrefix:string, tags?:array<array{key:string, value:string}>}}} $args
     * @return \AWS\Result<array{scheduledAction?:array{endTime?:int|string|\DateTimeInterface, namespaceName?:string, nextInvocations?:array<int|string|\DateTimeInterface>, roleArn?:string, schedule?:array{at?:int|string|\DateTimeInterface, cron?:string}, scheduledActionDescription?:string, scheduledActionName?:string, scheduledActionUuid?:string, startTime?:int|string|\DateTimeInterface, state?:"ACTIVE"|"DISABLED", targetAction?:array{createSnapshot?:array{namespaceName:string, retentionPeriod?:int, snapshotNamePrefix:string, tags?:array<array{key:string, value:string}>}}}}>
     */
    public function updateScheduledAction(array $args): \AWS\Result { }

    /**
     * @param array{enabled?:bool, endTime?:int|string|\DateTimeInterface, roleArn?:string, schedule?:array{at?:int|string|\DateTimeInterface, cron?:string}, scheduledActionDescription?:string, scheduledActionName:string, startTime?:int|string|\DateTimeInterface, targetAction?:array{createSnapshot?:array{namespaceName:string, retentionPeriod?:int, snapshotNamePrefix:string, tags?:array<array{key:string, value:string}>}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{scheduledAction?:array{endTime?:int|string|\DateTimeInterface, namespaceName?:string, nextInvocations?:array<int|string|\DateTimeInterface>, roleArn?:string, schedule?:array{at?:int|string|\DateTimeInterface, cron?:string}, scheduledActionDescription?:string, scheduledActionName?:string, scheduledActionUuid?:string, startTime?:int|string|\DateTimeInterface, state?:"ACTIVE"|"DISABLED", targetAction?:array{createSnapshot?:array{namespaceName:string, retentionPeriod?:int, snapshotNamePrefix:string, tags?:array<array{key:string, value:string}>}}}}>
     */
    public function updateScheduledActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{retentionPeriod?:int, snapshotName:string} $args
     * @return \AWS\Result<array{snapshot?:array{accountsWithProvisionedRestoreAccess?:array<string>, accountsWithRestoreAccess?:array<string>, actualIncrementalBackupSizeInMegaBytes?:float, adminPasswordSecretArn?:string, adminPasswordSecretKmsKeyId?:string, adminUsername?:string, backupProgressInMegaBytes?:float, currentBackupRateInMegaBytesPerSecond?:float, elapsedTimeInSeconds?:int, estimatedSecondsToCompletion?:int, kmsKeyId?:string, namespaceArn?:string, namespaceName?:string, ownerAccount?:string, snapshotArn?:string, snapshotCreateTime?:int|string|\DateTimeInterface, snapshotName?:string, snapshotRemainingDays?:int, snapshotRetentionPeriod?:int, snapshotRetentionStartTime?:int|string|\DateTimeInterface, status?:"AVAILABLE"|"CREATING"|"DELETED"|"CANCELLED"|"FAILED"|"COPYING", totalBackupSizeInMegaBytes?:float}}>
     */
    public function updateSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{retentionPeriod?:int, snapshotName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{snapshot?:array{accountsWithProvisionedRestoreAccess?:array<string>, accountsWithRestoreAccess?:array<string>, actualIncrementalBackupSizeInMegaBytes?:float, adminPasswordSecretArn?:string, adminPasswordSecretKmsKeyId?:string, adminUsername?:string, backupProgressInMegaBytes?:float, currentBackupRateInMegaBytesPerSecond?:float, elapsedTimeInSeconds?:int, estimatedSecondsToCompletion?:int, kmsKeyId?:string, namespaceArn?:string, namespaceName?:string, ownerAccount?:string, snapshotArn?:string, snapshotCreateTime?:int|string|\DateTimeInterface, snapshotName?:string, snapshotRemainingDays?:int, snapshotRetentionPeriod?:int, snapshotRetentionStartTime?:int|string|\DateTimeInterface, status?:"AVAILABLE"|"CREATING"|"DELETED"|"CANCELLED"|"FAILED"|"COPYING", totalBackupSizeInMegaBytes?:float}}>
     */
    public function updateSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{snapshotCopyConfigurationId:string, snapshotRetentionPeriod?:int} $args
     * @return \AWS\Result<array{snapshotCopyConfiguration:array{destinationKmsKeyId?:string, destinationRegion?:string, namespaceName?:string, snapshotCopyConfigurationArn?:string, snapshotCopyConfigurationId?:string, snapshotRetentionPeriod?:int}}>
     */
    public function updateSnapshotCopyConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{snapshotCopyConfigurationId:string, snapshotRetentionPeriod?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{snapshotCopyConfiguration:array{destinationKmsKeyId?:string, destinationRegion?:string, namespaceName?:string, snapshotCopyConfigurationArn?:string, snapshotCopyConfigurationId?:string, snapshotRetentionPeriod?:int}}>
     */
    public function updateSnapshotCopyConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{amount?:int, breachAction?:"log"|"emit-metric"|"deactivate", usageLimitId:string} $args
     * @return \AWS\Result<array{usageLimit?:array{amount?:int, breachAction?:"log"|"emit-metric"|"deactivate", period?:"daily"|"weekly"|"monthly", resourceArn?:string, usageLimitArn?:string, usageLimitId?:string, usageType?:"serverless-compute"|"cross-region-datasharing"}}>
     */
    public function updateUsageLimit(array $args): \AWS\Result { }

    /**
     * @param array{amount?:int, breachAction?:"log"|"emit-metric"|"deactivate", usageLimitId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{usageLimit?:array{amount?:int, breachAction?:"log"|"emit-metric"|"deactivate", period?:"daily"|"weekly"|"monthly", resourceArn?:string, usageLimitArn?:string, usageLimitId?:string, usageType?:"serverless-compute"|"cross-region-datasharing"}}>
     */
    public function updateUsageLimitAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{baseCapacity?:int, configParameters?:array<array{parameterKey?:string, parameterValue?:string}>, enhancedVpcRouting?:bool, ipAddressType?:string, maxCapacity?:int, port?:int, pricePerformanceTarget?:array{level?:int, status?:"ENABLED"|"DISABLED"}, publiclyAccessible?:bool, securityGroupIds?:array<string>, subnetIds?:array<string>, workgroupName:string} $args
     * @return \AWS\Result<array{workgroup:array{baseCapacity?:int, configParameters?:array<array{parameterKey?:string, parameterValue?:string}>, creationDate?:int|string|\DateTimeInterface, crossAccountVpcs?:array<string>, customDomainCertificateArn?:string, customDomainCertificateExpiryTime?:int|string|\DateTimeInterface, customDomainName?:string, endpoint?:array{address?:string, port?:int, vpcEndpoints?:array<array{networkInterfaces?:array<array{availabilityZone?:string, ipv6Address?:string, networkInterfaceId?:string, privateIpAddress?:string, subnetId?:string}>, vpcEndpointId?:string, vpcId?:string}>}, enhancedVpcRouting?:bool, ipAddressType?:string, maxCapacity?:int, namespaceName?:string, patchVersion?:string, port?:int, pricePerformanceTarget?:array{level?:int, status?:"ENABLED"|"DISABLED"}, publiclyAccessible?:bool, securityGroupIds?:array<string>, status?:"CREATING"|"AVAILABLE"|"MODIFYING"|"DELETING", subnetIds?:array<string>, workgroupArn?:string, workgroupId?:string, workgroupName?:string, workgroupVersion?:string}}>
     */
    public function updateWorkgroup(array $args): \AWS\Result { }

    /**
     * @param array{baseCapacity?:int, configParameters?:array<array{parameterKey?:string, parameterValue?:string}>, enhancedVpcRouting?:bool, ipAddressType?:string, maxCapacity?:int, port?:int, pricePerformanceTarget?:array{level?:int, status?:"ENABLED"|"DISABLED"}, publiclyAccessible?:bool, securityGroupIds?:array<string>, subnetIds?:array<string>, workgroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{workgroup:array{baseCapacity?:int, configParameters?:array<array{parameterKey?:string, parameterValue?:string}>, creationDate?:int|string|\DateTimeInterface, crossAccountVpcs?:array<string>, customDomainCertificateArn?:string, customDomainCertificateExpiryTime?:int|string|\DateTimeInterface, customDomainName?:string, endpoint?:array{address?:string, port?:int, vpcEndpoints?:array<array{networkInterfaces?:array<array{availabilityZone?:string, ipv6Address?:string, networkInterfaceId?:string, privateIpAddress?:string, subnetId?:string}>, vpcEndpointId?:string, vpcId?:string}>}, enhancedVpcRouting?:bool, ipAddressType?:string, maxCapacity?:int, namespaceName?:string, patchVersion?:string, port?:int, pricePerformanceTarget?:array{level?:int, status?:"ENABLED"|"DISABLED"}, publiclyAccessible?:bool, securityGroupIds?:array<string>, status?:"CREATING"|"AVAILABLE"|"MODIFYING"|"DELETING", subnetIds?:array<string>, workgroupArn?:string, workgroupId?:string, workgroupName?:string, workgroupVersion?:string}}>
     */
    public function updateWorkgroupAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
