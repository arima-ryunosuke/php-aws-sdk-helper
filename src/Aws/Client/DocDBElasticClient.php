<?php
namespace AWS\DocDBElastic;

class DocDBElasticClient
{
    /**
     * @param array{applyAction:string, applyOn?:string, optInType:"IMMEDIATE"|"NEXT_MAINTENANCE"|"APPLY_ON"|"UNDO_OPT_IN", resourceArn:string} $args
     * @return \AWS\Result<array{resourcePendingMaintenanceAction:array{pendingMaintenanceActionDetails?:array<array{action:string, autoAppliedAfterDate?:string, currentApplyDate?:string, description?:string, forcedApplyDate?:string, optInStatus?:string}>, resourceArn?:string}}>
     */
    public function applyPendingMaintenanceAction(array $args): \AWS\Result { }

    /**
     * @param array{applyAction:string, applyOn?:string, optInType:"IMMEDIATE"|"NEXT_MAINTENANCE"|"APPLY_ON"|"UNDO_OPT_IN", resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{resourcePendingMaintenanceAction:array{pendingMaintenanceActionDetails?:array<array{action:string, autoAppliedAfterDate?:string, currentApplyDate?:string, description?:string, forcedApplyDate?:string, optInStatus?:string}>, resourceArn?:string}}>
     */
    public function applyPendingMaintenanceActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{copyTags?:bool, kmsKeyId?:string, snapshotArn:string, tags?:array<string, string>, targetSnapshotName:string} $args
     * @return \AWS\Result<array{snapshot:array{adminUserName:string, clusterArn:string, clusterCreationTime:string, kmsKeyId:string, snapshotArn:string, snapshotCreationTime:string, snapshotName:string, snapshotType?:"MANUAL"|"AUTOMATED", status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE", subnetIds:array<string>, vpcSecurityGroupIds:array<string>}}>
     */
    public function copyClusterSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{copyTags?:bool, kmsKeyId?:string, snapshotArn:string, tags?:array<string, string>, targetSnapshotName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{snapshot:array{adminUserName:string, clusterArn:string, clusterCreationTime:string, kmsKeyId:string, snapshotArn:string, snapshotCreationTime:string, snapshotName:string, snapshotType?:"MANUAL"|"AUTOMATED", status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE", subnetIds:array<string>, vpcSecurityGroupIds:array<string>}}>
     */
    public function copyClusterSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{adminUserName:string, adminUserPassword:string, authType:"PLAIN_TEXT"|"SECRET_ARN", backupRetentionPeriod?:int, clientToken?:string, clusterName:string, kmsKeyId?:string, preferredBackupWindow?:string, preferredMaintenanceWindow?:string, shardCapacity:int, shardCount:int, shardInstanceCount?:int, subnetIds?:array<string>, tags?:array<string, string>, vpcSecurityGroupIds?:array<string>} $args
     * @return \AWS\Result<array{cluster:array{adminUserName:string, authType:"PLAIN_TEXT"|"SECRET_ARN", backupRetentionPeriod?:int, clusterArn:string, clusterEndpoint:string, clusterName:string, createTime:string, kmsKeyId:string, preferredBackupWindow?:string, preferredMaintenanceWindow:string, shardCapacity:int, shardCount:int, shardInstanceCount?:int, shards?:array<array{createTime:string, shardId:string, status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE"}>, status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE", subnetIds:array<string>, vpcSecurityGroupIds:array<string>}}>
     */
    public function createCluster(array $args): \AWS\Result { }

    /**
     * @param array{adminUserName:string, adminUserPassword:string, authType:"PLAIN_TEXT"|"SECRET_ARN", backupRetentionPeriod?:int, clientToken?:string, clusterName:string, kmsKeyId?:string, preferredBackupWindow?:string, preferredMaintenanceWindow?:string, shardCapacity:int, shardCount:int, shardInstanceCount?:int, subnetIds?:array<string>, tags?:array<string, string>, vpcSecurityGroupIds?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{cluster:array{adminUserName:string, authType:"PLAIN_TEXT"|"SECRET_ARN", backupRetentionPeriod?:int, clusterArn:string, clusterEndpoint:string, clusterName:string, createTime:string, kmsKeyId:string, preferredBackupWindow?:string, preferredMaintenanceWindow:string, shardCapacity:int, shardCount:int, shardInstanceCount?:int, shards?:array<array{createTime:string, shardId:string, status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE"}>, status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE", subnetIds:array<string>, vpcSecurityGroupIds:array<string>}}>
     */
    public function createClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterArn:string, snapshotName:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{snapshot:array{adminUserName:string, clusterArn:string, clusterCreationTime:string, kmsKeyId:string, snapshotArn:string, snapshotCreationTime:string, snapshotName:string, snapshotType?:"MANUAL"|"AUTOMATED", status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE", subnetIds:array<string>, vpcSecurityGroupIds:array<string>}}>
     */
    public function createClusterSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{clusterArn:string, snapshotName:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{snapshot:array{adminUserName:string, clusterArn:string, clusterCreationTime:string, kmsKeyId:string, snapshotArn:string, snapshotCreationTime:string, snapshotName:string, snapshotType?:"MANUAL"|"AUTOMATED", status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE", subnetIds:array<string>, vpcSecurityGroupIds:array<string>}}>
     */
    public function createClusterSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterArn:string} $args
     * @return \AWS\Result<array{cluster:array{adminUserName:string, authType:"PLAIN_TEXT"|"SECRET_ARN", backupRetentionPeriod?:int, clusterArn:string, clusterEndpoint:string, clusterName:string, createTime:string, kmsKeyId:string, preferredBackupWindow?:string, preferredMaintenanceWindow:string, shardCapacity:int, shardCount:int, shardInstanceCount?:int, shards?:array<array{createTime:string, shardId:string, status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE"}>, status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE", subnetIds:array<string>, vpcSecurityGroupIds:array<string>}}>
     */
    public function deleteCluster(array $args): \AWS\Result { }

    /**
     * @param array{clusterArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{cluster:array{adminUserName:string, authType:"PLAIN_TEXT"|"SECRET_ARN", backupRetentionPeriod?:int, clusterArn:string, clusterEndpoint:string, clusterName:string, createTime:string, kmsKeyId:string, preferredBackupWindow?:string, preferredMaintenanceWindow:string, shardCapacity:int, shardCount:int, shardInstanceCount?:int, shards?:array<array{createTime:string, shardId:string, status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE"}>, status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE", subnetIds:array<string>, vpcSecurityGroupIds:array<string>}}>
     */
    public function deleteClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{snapshotArn:string} $args
     * @return \AWS\Result<array{snapshot:array{adminUserName:string, clusterArn:string, clusterCreationTime:string, kmsKeyId:string, snapshotArn:string, snapshotCreationTime:string, snapshotName:string, snapshotType?:"MANUAL"|"AUTOMATED", status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE", subnetIds:array<string>, vpcSecurityGroupIds:array<string>}}>
     */
    public function deleteClusterSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{snapshotArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{snapshot:array{adminUserName:string, clusterArn:string, clusterCreationTime:string, kmsKeyId:string, snapshotArn:string, snapshotCreationTime:string, snapshotName:string, snapshotType?:"MANUAL"|"AUTOMATED", status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE", subnetIds:array<string>, vpcSecurityGroupIds:array<string>}}>
     */
    public function deleteClusterSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterArn:string} $args
     * @return \AWS\Result<array{cluster:array{adminUserName:string, authType:"PLAIN_TEXT"|"SECRET_ARN", backupRetentionPeriod?:int, clusterArn:string, clusterEndpoint:string, clusterName:string, createTime:string, kmsKeyId:string, preferredBackupWindow?:string, preferredMaintenanceWindow:string, shardCapacity:int, shardCount:int, shardInstanceCount?:int, shards?:array<array{createTime:string, shardId:string, status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE"}>, status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE", subnetIds:array<string>, vpcSecurityGroupIds:array<string>}}>
     */
    public function getCluster(array $args): \AWS\Result { }

    /**
     * @param array{clusterArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{cluster:array{adminUserName:string, authType:"PLAIN_TEXT"|"SECRET_ARN", backupRetentionPeriod?:int, clusterArn:string, clusterEndpoint:string, clusterName:string, createTime:string, kmsKeyId:string, preferredBackupWindow?:string, preferredMaintenanceWindow:string, shardCapacity:int, shardCount:int, shardInstanceCount?:int, shards?:array<array{createTime:string, shardId:string, status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE"}>, status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE", subnetIds:array<string>, vpcSecurityGroupIds:array<string>}}>
     */
    public function getClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{snapshotArn:string} $args
     * @return \AWS\Result<array{snapshot:array{adminUserName:string, clusterArn:string, clusterCreationTime:string, kmsKeyId:string, snapshotArn:string, snapshotCreationTime:string, snapshotName:string, snapshotType?:"MANUAL"|"AUTOMATED", status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE", subnetIds:array<string>, vpcSecurityGroupIds:array<string>}}>
     */
    public function getClusterSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{snapshotArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{snapshot:array{adminUserName:string, clusterArn:string, clusterCreationTime:string, kmsKeyId:string, snapshotArn:string, snapshotCreationTime:string, snapshotName:string, snapshotType?:"MANUAL"|"AUTOMATED", status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE", subnetIds:array<string>, vpcSecurityGroupIds:array<string>}}>
     */
    public function getClusterSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{resourcePendingMaintenanceAction:array{pendingMaintenanceActionDetails?:array<array{action:string, autoAppliedAfterDate?:string, currentApplyDate?:string, description?:string, forcedApplyDate?:string, optInStatus?:string}>, resourceArn?:string}}>
     */
    public function getPendingMaintenanceAction(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{resourcePendingMaintenanceAction:array{pendingMaintenanceActionDetails?:array<array{action:string, autoAppliedAfterDate?:string, currentApplyDate?:string, description?:string, forcedApplyDate?:string, optInStatus?:string}>, resourceArn?:string}}>
     */
    public function getPendingMaintenanceActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterArn?:string, maxResults?:int, nextToken?:string, snapshotType?:string} $args
     * @return \AWS\Result<array{nextToken?:string, snapshots?:array<array{clusterArn:string, snapshotArn:string, snapshotCreationTime:string, snapshotName:string, status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE"}>}>
     */
    public function listClusterSnapshots(array $args = []): \AWS\Result { }

    /**
     * @param array{clusterArn?:string, maxResults?:int, nextToken?:string, snapshotType?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, snapshots?:array<array{clusterArn:string, snapshotArn:string, snapshotCreationTime:string, snapshotName:string, status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE"}>}>
     */
    public function listClusterSnapshotsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{clusters?:array<array{clusterArn:string, clusterName:string, status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE"}>, nextToken?:string}>
     */
    public function listClusters(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{clusters?:array<array{clusterArn:string, clusterName:string, status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE"}>, nextToken?:string}>
     */
    public function listClustersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, resourcePendingMaintenanceActions:array<array{pendingMaintenanceActionDetails?:array<array{action:string, autoAppliedAfterDate?:string, currentApplyDate?:string, description?:string, forcedApplyDate?:string, optInStatus?:string}>, resourceArn?:string}>}>
     */
    public function listPendingMaintenanceActions(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, resourcePendingMaintenanceActions:array<array{pendingMaintenanceActionDetails?:array<array{action:string, autoAppliedAfterDate?:string, currentApplyDate?:string, description?:string, forcedApplyDate?:string, optInStatus?:string}>, resourceArn?:string}>}>
     */
    public function listPendingMaintenanceActionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{clusterName:string, kmsKeyId?:string, shardCapacity?:int, shardInstanceCount?:int, snapshotArn:string, subnetIds?:array<string>, tags?:array<string, string>, vpcSecurityGroupIds?:array<string>} $args
     * @return \AWS\Result<array{cluster:array{adminUserName:string, authType:"PLAIN_TEXT"|"SECRET_ARN", backupRetentionPeriod?:int, clusterArn:string, clusterEndpoint:string, clusterName:string, createTime:string, kmsKeyId:string, preferredBackupWindow?:string, preferredMaintenanceWindow:string, shardCapacity:int, shardCount:int, shardInstanceCount?:int, shards?:array<array{createTime:string, shardId:string, status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE"}>, status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE", subnetIds:array<string>, vpcSecurityGroupIds:array<string>}}>
     */
    public function restoreClusterFromSnapshot(array $args): \AWS\Result { }

    /**
     * @param array{clusterName:string, kmsKeyId?:string, shardCapacity?:int, shardInstanceCount?:int, snapshotArn:string, subnetIds?:array<string>, tags?:array<string, string>, vpcSecurityGroupIds?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{cluster:array{adminUserName:string, authType:"PLAIN_TEXT"|"SECRET_ARN", backupRetentionPeriod?:int, clusterArn:string, clusterEndpoint:string, clusterName:string, createTime:string, kmsKeyId:string, preferredBackupWindow?:string, preferredMaintenanceWindow:string, shardCapacity:int, shardCount:int, shardInstanceCount?:int, shards?:array<array{createTime:string, shardId:string, status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE"}>, status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE", subnetIds:array<string>, vpcSecurityGroupIds:array<string>}}>
     */
    public function restoreClusterFromSnapshotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterArn:string} $args
     * @return \AWS\Result<array{cluster:array{adminUserName:string, authType:"PLAIN_TEXT"|"SECRET_ARN", backupRetentionPeriod?:int, clusterArn:string, clusterEndpoint:string, clusterName:string, createTime:string, kmsKeyId:string, preferredBackupWindow?:string, preferredMaintenanceWindow:string, shardCapacity:int, shardCount:int, shardInstanceCount?:int, shards?:array<array{createTime:string, shardId:string, status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE"}>, status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE", subnetIds:array<string>, vpcSecurityGroupIds:array<string>}}>
     */
    public function startCluster(array $args): \AWS\Result { }

    /**
     * @param array{clusterArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{cluster:array{adminUserName:string, authType:"PLAIN_TEXT"|"SECRET_ARN", backupRetentionPeriod?:int, clusterArn:string, clusterEndpoint:string, clusterName:string, createTime:string, kmsKeyId:string, preferredBackupWindow?:string, preferredMaintenanceWindow:string, shardCapacity:int, shardCount:int, shardInstanceCount?:int, shards?:array<array{createTime:string, shardId:string, status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE"}>, status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE", subnetIds:array<string>, vpcSecurityGroupIds:array<string>}}>
     */
    public function startClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clusterArn:string} $args
     * @return \AWS\Result<array{cluster:array{adminUserName:string, authType:"PLAIN_TEXT"|"SECRET_ARN", backupRetentionPeriod?:int, clusterArn:string, clusterEndpoint:string, clusterName:string, createTime:string, kmsKeyId:string, preferredBackupWindow?:string, preferredMaintenanceWindow:string, shardCapacity:int, shardCount:int, shardInstanceCount?:int, shards?:array<array{createTime:string, shardId:string, status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE"}>, status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE", subnetIds:array<string>, vpcSecurityGroupIds:array<string>}}>
     */
    public function stopCluster(array $args): \AWS\Result { }

    /**
     * @param array{clusterArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{cluster:array{adminUserName:string, authType:"PLAIN_TEXT"|"SECRET_ARN", backupRetentionPeriod?:int, clusterArn:string, clusterEndpoint:string, clusterName:string, createTime:string, kmsKeyId:string, preferredBackupWindow?:string, preferredMaintenanceWindow:string, shardCapacity:int, shardCount:int, shardInstanceCount?:int, shards?:array<array{createTime:string, shardId:string, status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE"}>, status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE", subnetIds:array<string>, vpcSecurityGroupIds:array<string>}}>
     */
    public function stopClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags:array<string, string>} $args
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
     * @param array{adminUserPassword?:string, authType?:"PLAIN_TEXT"|"SECRET_ARN", backupRetentionPeriod?:int, clientToken?:string, clusterArn:string, preferredBackupWindow?:string, preferredMaintenanceWindow?:string, shardCapacity?:int, shardCount?:int, shardInstanceCount?:int, subnetIds?:array<string>, vpcSecurityGroupIds?:array<string>} $args
     * @return \AWS\Result<array{cluster:array{adminUserName:string, authType:"PLAIN_TEXT"|"SECRET_ARN", backupRetentionPeriod?:int, clusterArn:string, clusterEndpoint:string, clusterName:string, createTime:string, kmsKeyId:string, preferredBackupWindow?:string, preferredMaintenanceWindow:string, shardCapacity:int, shardCount:int, shardInstanceCount?:int, shards?:array<array{createTime:string, shardId:string, status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE"}>, status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE", subnetIds:array<string>, vpcSecurityGroupIds:array<string>}}>
     */
    public function updateCluster(array $args): \AWS\Result { }

    /**
     * @param array{adminUserPassword?:string, authType?:"PLAIN_TEXT"|"SECRET_ARN", backupRetentionPeriod?:int, clientToken?:string, clusterArn:string, preferredBackupWindow?:string, preferredMaintenanceWindow?:string, shardCapacity?:int, shardCount?:int, shardInstanceCount?:int, subnetIds?:array<string>, vpcSecurityGroupIds?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{cluster:array{adminUserName:string, authType:"PLAIN_TEXT"|"SECRET_ARN", backupRetentionPeriod?:int, clusterArn:string, clusterEndpoint:string, clusterName:string, createTime:string, kmsKeyId:string, preferredBackupWindow?:string, preferredMaintenanceWindow:string, shardCapacity:int, shardCount:int, shardInstanceCount?:int, shards?:array<array{createTime:string, shardId:string, status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE"}>, status:"CREATING"|"ACTIVE"|"DELETING"|"UPDATING"|"VPC_ENDPOINT_LIMIT_EXCEEDED"|"IP_ADDRESS_LIMIT_EXCEEDED"|"INVALID_SECURITY_GROUP_ID"|"INVALID_SUBNET_ID"|"INACCESSIBLE_ENCRYPTION_CREDS"|"INACCESSIBLE_SECRET_ARN"|"INACCESSIBLE_VPC_ENDPOINT"|"INCOMPATIBLE_NETWORK"|"MERGING"|"MODIFYING"|"SPLITTING"|"COPYING"|"STARTING"|"STOPPING"|"STOPPED"|"MAINTENANCE"|"INACCESSIBLE_ENCRYPTION_CREDENTIALS_RECOVERABLE", subnetIds:array<string>, vpcSecurityGroupIds:array<string>}}>
     */
    public function updateClusterAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
