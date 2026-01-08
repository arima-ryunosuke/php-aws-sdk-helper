<?php
namespace AWS\drs;

class drsClient
{
    /**
     * @param array{cfnStackName:string, sourceNetworkID:string} $args
     * @return \AWS\Result<array{job?:array{arn?:string, creationDateTime?:string, endDateTime?:string, initiatedBy?:"START_RECOVERY"|"START_DRILL"|"FAILBACK"|"DIAGNOSTIC"|"TERMINATE_RECOVERY_INSTANCES"|"TARGET_ACCOUNT"|"CREATE_NETWORK_RECOVERY"|"UPDATE_NETWORK_RECOVERY"|"ASSOCIATE_NETWORK_RECOVERY", jobID:string, participatingResources?:array<array{launchStatus?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED", participatingResourceID?:array{sourceNetworkID?:string}}>, participatingServers?:array<array{launchActionsStatus?:array{runs?:array<array{action?:array{actionCode?:string, actionId?:string, actionVersion?:string, active?:bool, category?:"MONITORING"|"VALIDATION"|"CONFIGURATION"|"SECURITY"|"OTHER", description?:string, name?:string, optional?:bool, order?:int, parameters?:array<string, array{type?:"SSM_STORE"|"DYNAMIC", value?:string}>, type?:"SSM_AUTOMATION"|"SSM_COMMAND"}, failureReason?:string, runId?:string, status?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED"}>, ssmAgentDiscoveryDatetime?:string}, launchStatus?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED", recoveryInstanceID?:string, sourceServerID?:string}>, status?:"PENDING"|"STARTED"|"COMPLETED", tags?:array<string, string>, type?:"LAUNCH"|"TERMINATE"|"CREATE_CONVERTED_SNAPSHOT"}}>
     */
    public function associateSourceNetworkStack(array $args): \AWS\Result { }

    /**
     * @param array{cfnStackName:string, sourceNetworkID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{job?:array{arn?:string, creationDateTime?:string, endDateTime?:string, initiatedBy?:"START_RECOVERY"|"START_DRILL"|"FAILBACK"|"DIAGNOSTIC"|"TERMINATE_RECOVERY_INSTANCES"|"TARGET_ACCOUNT"|"CREATE_NETWORK_RECOVERY"|"UPDATE_NETWORK_RECOVERY"|"ASSOCIATE_NETWORK_RECOVERY", jobID:string, participatingResources?:array<array{launchStatus?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED", participatingResourceID?:array{sourceNetworkID?:string}}>, participatingServers?:array<array{launchActionsStatus?:array{runs?:array<array{action?:array{actionCode?:string, actionId?:string, actionVersion?:string, active?:bool, category?:"MONITORING"|"VALIDATION"|"CONFIGURATION"|"SECURITY"|"OTHER", description?:string, name?:string, optional?:bool, order?:int, parameters?:array<string, array{type?:"SSM_STORE"|"DYNAMIC", value?:string}>, type?:"SSM_AUTOMATION"|"SSM_COMMAND"}, failureReason?:string, runId?:string, status?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED"}>, ssmAgentDiscoveryDatetime?:string}, launchStatus?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED", recoveryInstanceID?:string, sourceServerID?:string}>, status?:"PENDING"|"STARTED"|"COMPLETED", tags?:array<string, string>, type?:"LAUNCH"|"TERMINATE"|"CREATE_CONVERTED_SNAPSHOT"}}>
     */
    public function associateSourceNetworkStackAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sourceServerArn:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{sourceServer?:array{agentVersion?:string, arn?:string, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED", etaDateTime?:string, lagDuration?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int, volumeStatus?:"REGULAR"|"CONTAINS_MARKETPLACE_PRODUCT_CODES"|"MISSING_VOLUME_ATTRIBUTES"|"MISSING_VOLUME_ATTRIBUTES_AND_PRECHECK_UNAVAILABLE"|"PENDING"}>, stagingAvailabilityZone?:string, stagingOutpostArn?:string}, lastLaunchResult?:"NOT_STARTED"|"PENDING"|"SUCCEEDED"|"FAILED", lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastLaunch?:array{initiated?:array{apiCallDateTime?:string, jobID?:string, type?:"RECOVERY"|"DRILL"}, status?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED"}, lastSeenByServiceDateTime?:string}, recoveryInstanceId?:string, replicationDirection?:"FAILOVER"|"FAILBACK", reversedDirectionSourceServerArn?:string, sourceCloudProperties?:array{originAccountID?:string, originAvailabilityZone?:string, originRegion?:string, sourceOutpostArn?:string}, sourceNetworkID?:string, sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string, supportsNitroInstances?:bool}, sourceServerID?:string, stagingArea?:array{errorMessage?:string, stagingAccountID?:string, stagingSourceServerArn?:string, status?:"EXTENDED"|"EXTENSION_ERROR"|"NOT_EXTENDED"}, tags?:array<string, string>}}>
     */
    public function createExtendedSourceServer(array $args): \AWS\Result { }

    /**
     * @param array{sourceServerArn:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{sourceServer?:array{agentVersion?:string, arn?:string, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED", etaDateTime?:string, lagDuration?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int, volumeStatus?:"REGULAR"|"CONTAINS_MARKETPLACE_PRODUCT_CODES"|"MISSING_VOLUME_ATTRIBUTES"|"MISSING_VOLUME_ATTRIBUTES_AND_PRECHECK_UNAVAILABLE"|"PENDING"}>, stagingAvailabilityZone?:string, stagingOutpostArn?:string}, lastLaunchResult?:"NOT_STARTED"|"PENDING"|"SUCCEEDED"|"FAILED", lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastLaunch?:array{initiated?:array{apiCallDateTime?:string, jobID?:string, type?:"RECOVERY"|"DRILL"}, status?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED"}, lastSeenByServiceDateTime?:string}, recoveryInstanceId?:string, replicationDirection?:"FAILOVER"|"FAILBACK", reversedDirectionSourceServerArn?:string, sourceCloudProperties?:array{originAccountID?:string, originAvailabilityZone?:string, originRegion?:string, sourceOutpostArn?:string}, sourceNetworkID?:string, sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string, supportsNitroInstances?:bool}, sourceServerID?:string, stagingArea?:array{errorMessage?:string, stagingAccountID?:string, stagingSourceServerArn?:string, status?:"EXTENDED"|"EXTENSION_ERROR"|"NOT_EXTENDED"}, tags?:array<string, string>}}>
     */
    public function createExtendedSourceServerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{copyPrivateIp?:bool, copyTags?:bool, exportBucketArn?:string, launchDisposition?:"STOPPED"|"STARTED", launchIntoSourceInstance?:bool, licensing?:array{osByol?:bool}, postLaunchEnabled?:bool, tags?:array<string, string>, targetInstanceTypeRightSizingMethod?:"NONE"|"BASIC"|"IN_AWS"} $args
     * @return \AWS\Result<array{launchConfigurationTemplate?:array{arn?:string, copyPrivateIp?:bool, copyTags?:bool, exportBucketArn?:string, launchConfigurationTemplateID?:string, launchDisposition?:"STOPPED"|"STARTED", launchIntoSourceInstance?:bool, licensing?:array{osByol?:bool}, postLaunchEnabled?:bool, tags?:array<string, string>, targetInstanceTypeRightSizingMethod?:"NONE"|"BASIC"|"IN_AWS"}}>
     */
    public function createLaunchConfigurationTemplate(array $args = []): \AWS\Result { }

    /**
     * @param array{copyPrivateIp?:bool, copyTags?:bool, exportBucketArn?:string, launchDisposition?:"STOPPED"|"STARTED", launchIntoSourceInstance?:bool, licensing?:array{osByol?:bool}, postLaunchEnabled?:bool, tags?:array<string, string>, targetInstanceTypeRightSizingMethod?:"NONE"|"BASIC"|"IN_AWS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{launchConfigurationTemplate?:array{arn?:string, copyPrivateIp?:bool, copyTags?:bool, exportBucketArn?:string, launchConfigurationTemplateID?:string, launchDisposition?:"STOPPED"|"STARTED", launchIntoSourceInstance?:bool, licensing?:array{osByol?:bool}, postLaunchEnabled?:bool, tags?:array<string, string>, targetInstanceTypeRightSizingMethod?:"NONE"|"BASIC"|"IN_AWS"}}>
     */
    public function createLaunchConfigurationTemplateAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{associateDefaultSecurityGroup:bool, autoReplicateNewDisks?:bool, bandwidthThrottling:int, createPublicIP:bool, dataPlaneRouting:"PRIVATE_IP"|"PUBLIC_IP", defaultLargeStagingDiskType:"GP2"|"GP3"|"ST1"|"AUTO", ebsEncryption:"DEFAULT"|"CUSTOM"|"NONE", ebsEncryptionKeyArn?:string, pitPolicy:array<array{enabled?:bool, interval:int, retentionDuration:int, ruleID?:int, units:"MINUTE"|"HOUR"|"DAY"}>, replicationServerInstanceType:string, replicationServersSecurityGroupsIDs:array<string>, stagingAreaSubnetId:string, stagingAreaTags:array<string, string>, tags?:array<string, string>, useDedicatedReplicationServer:bool} $args
     * @return \AWS\Result<array{arn?:string, associateDefaultSecurityGroup?:bool, autoReplicateNewDisks?:bool, bandwidthThrottling?:int, createPublicIP?:bool, dataPlaneRouting?:"PRIVATE_IP"|"PUBLIC_IP", defaultLargeStagingDiskType?:"GP2"|"GP3"|"ST1"|"AUTO", ebsEncryption?:"DEFAULT"|"CUSTOM"|"NONE", ebsEncryptionKeyArn?:string, pitPolicy?:array<array{enabled?:bool, interval:int, retentionDuration:int, ruleID?:int, units:"MINUTE"|"HOUR"|"DAY"}>, replicationConfigurationTemplateID:string, replicationServerInstanceType?:string, replicationServersSecurityGroupsIDs?:array<string>, stagingAreaSubnetId?:string, stagingAreaTags?:array<string, string>, tags?:array<string, string>, useDedicatedReplicationServer?:bool}>
     */
    public function createReplicationConfigurationTemplate(array $args): \AWS\Result { }

    /**
     * @param array{associateDefaultSecurityGroup:bool, autoReplicateNewDisks?:bool, bandwidthThrottling:int, createPublicIP:bool, dataPlaneRouting:"PRIVATE_IP"|"PUBLIC_IP", defaultLargeStagingDiskType:"GP2"|"GP3"|"ST1"|"AUTO", ebsEncryption:"DEFAULT"|"CUSTOM"|"NONE", ebsEncryptionKeyArn?:string, pitPolicy:array<array{enabled?:bool, interval:int, retentionDuration:int, ruleID?:int, units:"MINUTE"|"HOUR"|"DAY"}>, replicationServerInstanceType:string, replicationServersSecurityGroupsIDs:array<string>, stagingAreaSubnetId:string, stagingAreaTags:array<string, string>, tags?:array<string, string>, useDedicatedReplicationServer:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, associateDefaultSecurityGroup?:bool, autoReplicateNewDisks?:bool, bandwidthThrottling?:int, createPublicIP?:bool, dataPlaneRouting?:"PRIVATE_IP"|"PUBLIC_IP", defaultLargeStagingDiskType?:"GP2"|"GP3"|"ST1"|"AUTO", ebsEncryption?:"DEFAULT"|"CUSTOM"|"NONE", ebsEncryptionKeyArn?:string, pitPolicy?:array<array{enabled?:bool, interval:int, retentionDuration:int, ruleID?:int, units:"MINUTE"|"HOUR"|"DAY"}>, replicationConfigurationTemplateID:string, replicationServerInstanceType?:string, replicationServersSecurityGroupsIDs?:array<string>, stagingAreaSubnetId?:string, stagingAreaTags?:array<string, string>, tags?:array<string, string>, useDedicatedReplicationServer?:bool}>
     */
    public function createReplicationConfigurationTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{originAccountID:string, originRegion:string, tags?:array<string, string>, vpcID:string} $args
     * @return \AWS\Result<array{sourceNetworkID?:string}>
     */
    public function createSourceNetwork(array $args): \AWS\Result { }

    /**
     * @param array{originAccountID:string, originRegion:string, tags?:array<string, string>, vpcID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{sourceNetworkID?:string}>
     */
    public function createSourceNetworkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobID:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteJob(array $args): \AWS\Result { }

    /**
     * @param array{jobID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{actionId:string, resourceId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteLaunchAction(array $args): \AWS\Result { }

    /**
     * @param array{actionId:string, resourceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteLaunchActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{launchConfigurationTemplateID:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteLaunchConfigurationTemplate(array $args): \AWS\Result { }

    /**
     * @param array{launchConfigurationTemplateID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteLaunchConfigurationTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{recoveryInstanceID:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteRecoveryInstance(array $args): \AWS\Result { }

    /**
     * @param array{recoveryInstanceID:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteRecoveryInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{replicationConfigurationTemplateID:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteReplicationConfigurationTemplate(array $args): \AWS\Result { }

    /**
     * @param array{replicationConfigurationTemplateID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteReplicationConfigurationTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sourceNetworkID:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSourceNetwork(array $args): \AWS\Result { }

    /**
     * @param array{sourceNetworkID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteSourceNetworkAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sourceServerID:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSourceServer(array $args): \AWS\Result { }

    /**
     * @param array{sourceServerID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteSourceServerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobID:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{items?:array<array{event?:"JOB_START"|"SERVER_SKIPPED"|"CLEANUP_START"|"CLEANUP_END"|"CLEANUP_FAIL"|"SNAPSHOT_START"|"SNAPSHOT_END"|"SNAPSHOT_FAIL"|"USING_PREVIOUS_SNAPSHOT"|"USING_PREVIOUS_SNAPSHOT_FAILED"|"CONVERSION_START"|"CONVERSION_END"|"CONVERSION_FAIL"|"LAUNCH_START"|"LAUNCH_FAILED"|"JOB_CANCEL"|"JOB_END"|"DEPLOY_NETWORK_CONFIGURATION_START"|"DEPLOY_NETWORK_CONFIGURATION_END"|"DEPLOY_NETWORK_CONFIGURATION_FAILED"|"UPDATE_NETWORK_CONFIGURATION_START"|"UPDATE_NETWORK_CONFIGURATION_END"|"UPDATE_NETWORK_CONFIGURATION_FAILED"|"UPDATE_LAUNCH_TEMPLATE_START"|"UPDATE_LAUNCH_TEMPLATE_END"|"UPDATE_LAUNCH_TEMPLATE_FAILED"|"NETWORK_RECOVERY_FAIL", eventData?:array{conversionProperties?:array{dataTimestamp?:string, forceUefi?:bool, rootVolumeName?:string, volumeToConversionMap?:array<string, array<string, string>>, volumeToProductCodes?:array<string, array<array{productCodeId?:string, productCodeMode?:"ENABLED"|"DISABLED"}>>, volumeToVolumeSize?:array<string, int>}, conversionServerID?:string, eventResourceData?:array{sourceNetworkData?:array{sourceNetworkID?:string, sourceVpc?:string, stackName?:string, targetVpc?:string}}, rawError?:string, sourceServerID?:string, targetInstanceID?:string}, logDateTime?:string}>, nextToken?:string}>
     */
    public function describeJobLogItems(array $args): \AWS\Result { }

    /**
     * @param array{jobID:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{event?:"JOB_START"|"SERVER_SKIPPED"|"CLEANUP_START"|"CLEANUP_END"|"CLEANUP_FAIL"|"SNAPSHOT_START"|"SNAPSHOT_END"|"SNAPSHOT_FAIL"|"USING_PREVIOUS_SNAPSHOT"|"USING_PREVIOUS_SNAPSHOT_FAILED"|"CONVERSION_START"|"CONVERSION_END"|"CONVERSION_FAIL"|"LAUNCH_START"|"LAUNCH_FAILED"|"JOB_CANCEL"|"JOB_END"|"DEPLOY_NETWORK_CONFIGURATION_START"|"DEPLOY_NETWORK_CONFIGURATION_END"|"DEPLOY_NETWORK_CONFIGURATION_FAILED"|"UPDATE_NETWORK_CONFIGURATION_START"|"UPDATE_NETWORK_CONFIGURATION_END"|"UPDATE_NETWORK_CONFIGURATION_FAILED"|"UPDATE_LAUNCH_TEMPLATE_START"|"UPDATE_LAUNCH_TEMPLATE_END"|"UPDATE_LAUNCH_TEMPLATE_FAILED"|"NETWORK_RECOVERY_FAIL", eventData?:array{conversionProperties?:array{dataTimestamp?:string, forceUefi?:bool, rootVolumeName?:string, volumeToConversionMap?:array<string, array<string, string>>, volumeToProductCodes?:array<string, array<array{productCodeId?:string, productCodeMode?:"ENABLED"|"DISABLED"}>>, volumeToVolumeSize?:array<string, int>}, conversionServerID?:string, eventResourceData?:array{sourceNetworkData?:array{sourceNetworkID?:string, sourceVpc?:string, stackName?:string, targetVpc?:string}}, rawError?:string, sourceServerID?:string, targetInstanceID?:string}, logDateTime?:string}>, nextToken?:string}>
     */
    public function describeJobLogItemsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filters?:array{fromDate?:string, jobIDs?:array<string>, toDate?:string}, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{items?:array<array{arn?:string, creationDateTime?:string, endDateTime?:string, initiatedBy?:"START_RECOVERY"|"START_DRILL"|"FAILBACK"|"DIAGNOSTIC"|"TERMINATE_RECOVERY_INSTANCES"|"TARGET_ACCOUNT"|"CREATE_NETWORK_RECOVERY"|"UPDATE_NETWORK_RECOVERY"|"ASSOCIATE_NETWORK_RECOVERY", jobID:string, participatingResources?:array<array{launchStatus?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED", participatingResourceID?:array{sourceNetworkID?:string}}>, participatingServers?:array<array{launchActionsStatus?:array{runs?:array<array{action?:array{actionCode?:string, actionId?:string, actionVersion?:string, active?:bool, category?:"MONITORING"|"VALIDATION"|"CONFIGURATION"|"SECURITY"|"OTHER", description?:string, name?:string, optional?:bool, order?:int, parameters?:array<string, array{type?:"SSM_STORE"|"DYNAMIC", value?:string}>, type?:"SSM_AUTOMATION"|"SSM_COMMAND"}, failureReason?:string, runId?:string, status?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED"}>, ssmAgentDiscoveryDatetime?:string}, launchStatus?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED", recoveryInstanceID?:string, sourceServerID?:string}>, status?:"PENDING"|"STARTED"|"COMPLETED", tags?:array<string, string>, type?:"LAUNCH"|"TERMINATE"|"CREATE_CONVERTED_SNAPSHOT"}>, nextToken?:string}>
     */
    public function describeJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{filters?:array{fromDate?:string, jobIDs?:array<string>, toDate?:string}, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{arn?:string, creationDateTime?:string, endDateTime?:string, initiatedBy?:"START_RECOVERY"|"START_DRILL"|"FAILBACK"|"DIAGNOSTIC"|"TERMINATE_RECOVERY_INSTANCES"|"TARGET_ACCOUNT"|"CREATE_NETWORK_RECOVERY"|"UPDATE_NETWORK_RECOVERY"|"ASSOCIATE_NETWORK_RECOVERY", jobID:string, participatingResources?:array<array{launchStatus?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED", participatingResourceID?:array{sourceNetworkID?:string}}>, participatingServers?:array<array{launchActionsStatus?:array{runs?:array<array{action?:array{actionCode?:string, actionId?:string, actionVersion?:string, active?:bool, category?:"MONITORING"|"VALIDATION"|"CONFIGURATION"|"SECURITY"|"OTHER", description?:string, name?:string, optional?:bool, order?:int, parameters?:array<string, array{type?:"SSM_STORE"|"DYNAMIC", value?:string}>, type?:"SSM_AUTOMATION"|"SSM_COMMAND"}, failureReason?:string, runId?:string, status?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED"}>, ssmAgentDiscoveryDatetime?:string}, launchStatus?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED", recoveryInstanceID?:string, sourceServerID?:string}>, status?:"PENDING"|"STARTED"|"COMPLETED", tags?:array<string, string>, type?:"LAUNCH"|"TERMINATE"|"CREATE_CONVERTED_SNAPSHOT"}>, nextToken?:string}>
     */
    public function describeJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{launchConfigurationTemplateIDs?:array<string>, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{items?:array<array{arn?:string, copyPrivateIp?:bool, copyTags?:bool, exportBucketArn?:string, launchConfigurationTemplateID?:string, launchDisposition?:"STOPPED"|"STARTED", launchIntoSourceInstance?:bool, licensing?:array{osByol?:bool}, postLaunchEnabled?:bool, tags?:array<string, string>, targetInstanceTypeRightSizingMethod?:"NONE"|"BASIC"|"IN_AWS"}>, nextToken?:string}>
     */
    public function describeLaunchConfigurationTemplates(array $args = []): \AWS\Result { }

    /**
     * @param array{launchConfigurationTemplateIDs?:array<string>, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{arn?:string, copyPrivateIp?:bool, copyTags?:bool, exportBucketArn?:string, launchConfigurationTemplateID?:string, launchDisposition?:"STOPPED"|"STARTED", launchIntoSourceInstance?:bool, licensing?:array{osByol?:bool}, postLaunchEnabled?:bool, tags?:array<string, string>, targetInstanceTypeRightSizingMethod?:"NONE"|"BASIC"|"IN_AWS"}>, nextToken?:string}>
     */
    public function describeLaunchConfigurationTemplatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filters?:array{recoveryInstanceIDs?:array<string>, sourceServerIDs?:array<string>}, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{items?:array<array{agentVersion?:string, arn?:string, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"FAILBACK_CLIENT_NOT_SEEN"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_ESTABLISH_RECOVERY_INSTANCE_COMMUNICATION"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE_TO_FAILBACK_CLIENT"|"FAILED_TO_CONFIGURE_REPLICATION_SOFTWARE"|"FAILED_TO_PAIR_AGENT_WITH_REPLICATION_SOFTWARE"|"FAILED_TO_ESTABLISH_AGENT_REPLICATOR_SOFTWARE_COMMUNICATION"|"FAILED_GETTING_REPLICATION_STATE"|"SNAPSHOTS_FAILURE"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER", rawError?:string}, dataReplicationInitiation?:array{startDateTime?:string, steps?:array<array{name?:"LINK_FAILBACK_CLIENT_WITH_RECOVERY_INSTANCE"|"COMPLETE_VOLUME_MAPPING"|"ESTABLISH_RECOVERY_INSTANCE_COMMUNICATION"|"DOWNLOAD_REPLICATION_SOFTWARE_TO_FAILBACK_CLIENT"|"CONFIGURE_REPLICATION_SOFTWARE"|"PAIR_AGENT_WITH_REPLICATION_SOFTWARE"|"ESTABLISH_AGENT_REPLICATOR_SOFTWARE_COMMUNICATION"|"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED"|"REPLICATION_STATE_NOT_AVAILABLE"|"NOT_STARTED", etaDateTime?:string, lagDuration?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int}>, stagingAvailabilityZone?:string, stagingOutpostArn?:string}, ec2InstanceID?:string, ec2InstanceState?:"PENDING"|"RUNNING"|"STOPPING"|"STOPPED"|"SHUTTING-DOWN"|"TERMINATED"|"NOT_FOUND", failback?:array{agentLastSeenByServiceDateTime?:string, elapsedReplicationDuration?:string, failbackClientID?:string, failbackClientLastSeenByServiceDateTime?:string, failbackInitiationTime?:string, failbackJobID?:string, failbackLaunchType?:"RECOVERY"|"DRILL", failbackToOriginalServer?:bool, firstByteDateTime?:string, state?:"FAILBACK_NOT_STARTED"|"FAILBACK_IN_PROGRESS"|"FAILBACK_READY_FOR_LAUNCH"|"FAILBACK_COMPLETED"|"FAILBACK_ERROR"|"FAILBACK_NOT_READY_FOR_LAUNCH"|"FAILBACK_LAUNCH_STATE_NOT_AVAILABLE"}, isDrill?:bool, jobID?:string, originAvailabilityZone?:string, originEnvironment?:"ON_PREMISES"|"AWS", pointInTimeSnapshotDateTime?:string, recoveryInstanceID?:string, recoveryInstanceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, ebsVolumeID?:string, internalDeviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int}, sourceOutpostArn?:string, sourceServerID?:string, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function describeRecoveryInstances(array $args = []): \AWS\Result { }

    /**
     * @param array{filters?:array{recoveryInstanceIDs?:array<string>, sourceServerIDs?:array<string>}, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{agentVersion?:string, arn?:string, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"FAILBACK_CLIENT_NOT_SEEN"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_ESTABLISH_RECOVERY_INSTANCE_COMMUNICATION"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE_TO_FAILBACK_CLIENT"|"FAILED_TO_CONFIGURE_REPLICATION_SOFTWARE"|"FAILED_TO_PAIR_AGENT_WITH_REPLICATION_SOFTWARE"|"FAILED_TO_ESTABLISH_AGENT_REPLICATOR_SOFTWARE_COMMUNICATION"|"FAILED_GETTING_REPLICATION_STATE"|"SNAPSHOTS_FAILURE"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER", rawError?:string}, dataReplicationInitiation?:array{startDateTime?:string, steps?:array<array{name?:"LINK_FAILBACK_CLIENT_WITH_RECOVERY_INSTANCE"|"COMPLETE_VOLUME_MAPPING"|"ESTABLISH_RECOVERY_INSTANCE_COMMUNICATION"|"DOWNLOAD_REPLICATION_SOFTWARE_TO_FAILBACK_CLIENT"|"CONFIGURE_REPLICATION_SOFTWARE"|"PAIR_AGENT_WITH_REPLICATION_SOFTWARE"|"ESTABLISH_AGENT_REPLICATOR_SOFTWARE_COMMUNICATION"|"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED"|"REPLICATION_STATE_NOT_AVAILABLE"|"NOT_STARTED", etaDateTime?:string, lagDuration?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int}>, stagingAvailabilityZone?:string, stagingOutpostArn?:string}, ec2InstanceID?:string, ec2InstanceState?:"PENDING"|"RUNNING"|"STOPPING"|"STOPPED"|"SHUTTING-DOWN"|"TERMINATED"|"NOT_FOUND", failback?:array{agentLastSeenByServiceDateTime?:string, elapsedReplicationDuration?:string, failbackClientID?:string, failbackClientLastSeenByServiceDateTime?:string, failbackInitiationTime?:string, failbackJobID?:string, failbackLaunchType?:"RECOVERY"|"DRILL", failbackToOriginalServer?:bool, firstByteDateTime?:string, state?:"FAILBACK_NOT_STARTED"|"FAILBACK_IN_PROGRESS"|"FAILBACK_READY_FOR_LAUNCH"|"FAILBACK_COMPLETED"|"FAILBACK_ERROR"|"FAILBACK_NOT_READY_FOR_LAUNCH"|"FAILBACK_LAUNCH_STATE_NOT_AVAILABLE"}, isDrill?:bool, jobID?:string, originAvailabilityZone?:string, originEnvironment?:"ON_PREMISES"|"AWS", pointInTimeSnapshotDateTime?:string, recoveryInstanceID?:string, recoveryInstanceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, ebsVolumeID?:string, internalDeviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int}, sourceOutpostArn?:string, sourceServerID?:string, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function describeRecoveryInstancesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filters?:array{fromDateTime?:string, toDateTime?:string}, maxResults?:int, nextToken?:string, order?:"ASC"|"DESC", sourceServerID:string} $args
     * @return \AWS\Result<array{items?:array<array{ebsSnapshots?:array<string>, expectedTimestamp:string, snapshotID:string, sourceServerID:string, timestamp?:string}>, nextToken?:string}>
     */
    public function describeRecoverySnapshots(array $args): \AWS\Result { }

    /**
     * @param array{filters?:array{fromDateTime?:string, toDateTime?:string}, maxResults?:int, nextToken?:string, order?:"ASC"|"DESC", sourceServerID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{ebsSnapshots?:array<string>, expectedTimestamp:string, snapshotID:string, sourceServerID:string, timestamp?:string}>, nextToken?:string}>
     */
    public function describeRecoverySnapshotsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, replicationConfigurationTemplateIDs?:array<string>} $args
     * @return \AWS\Result<array{items?:array<array{arn?:string, associateDefaultSecurityGroup?:bool, autoReplicateNewDisks?:bool, bandwidthThrottling?:int, createPublicIP?:bool, dataPlaneRouting?:"PRIVATE_IP"|"PUBLIC_IP", defaultLargeStagingDiskType?:"GP2"|"GP3"|"ST1"|"AUTO", ebsEncryption?:"DEFAULT"|"CUSTOM"|"NONE", ebsEncryptionKeyArn?:string, pitPolicy?:array<array{enabled?:bool, interval:int, retentionDuration:int, ruleID?:int, units:"MINUTE"|"HOUR"|"DAY"}>, replicationConfigurationTemplateID:string, replicationServerInstanceType?:string, replicationServersSecurityGroupsIDs?:array<string>, stagingAreaSubnetId?:string, stagingAreaTags?:array<string, string>, tags?:array<string, string>, useDedicatedReplicationServer?:bool}>, nextToken?:string}>
     */
    public function describeReplicationConfigurationTemplates(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, replicationConfigurationTemplateIDs?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{arn?:string, associateDefaultSecurityGroup?:bool, autoReplicateNewDisks?:bool, bandwidthThrottling?:int, createPublicIP?:bool, dataPlaneRouting?:"PRIVATE_IP"|"PUBLIC_IP", defaultLargeStagingDiskType?:"GP2"|"GP3"|"ST1"|"AUTO", ebsEncryption?:"DEFAULT"|"CUSTOM"|"NONE", ebsEncryptionKeyArn?:string, pitPolicy?:array<array{enabled?:bool, interval:int, retentionDuration:int, ruleID?:int, units:"MINUTE"|"HOUR"|"DAY"}>, replicationConfigurationTemplateID:string, replicationServerInstanceType?:string, replicationServersSecurityGroupsIDs?:array<string>, stagingAreaSubnetId?:string, stagingAreaTags?:array<string, string>, tags?:array<string, string>, useDedicatedReplicationServer?:bool}>, nextToken?:string}>
     */
    public function describeReplicationConfigurationTemplatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filters?:array{originAccountID?:string, originRegion?:string, sourceNetworkIDs?:array<string>}, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{items?:array<array{arn?:string, cfnStackName?:string, lastRecovery?:array{apiCallDateTime?:int|string|\DateTimeInterface, jobID?:string, lastRecoveryResult?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCESS"|"FAIL"|"PARTIAL_SUCCESS"|"ASSOCIATE_SUCCESS"|"ASSOCIATE_FAIL"}, launchedVpcID?:string, replicationStatus?:"STOPPED"|"IN_PROGRESS"|"PROTECTED"|"ERROR", replicationStatusDetails?:string, sourceAccountID?:string, sourceNetworkID?:string, sourceRegion?:string, sourceVpcID?:string, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function describeSourceNetworks(array $args = []): \AWS\Result { }

    /**
     * @param array{filters?:array{originAccountID?:string, originRegion?:string, sourceNetworkIDs?:array<string>}, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{arn?:string, cfnStackName?:string, lastRecovery?:array{apiCallDateTime?:int|string|\DateTimeInterface, jobID?:string, lastRecoveryResult?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCESS"|"FAIL"|"PARTIAL_SUCCESS"|"ASSOCIATE_SUCCESS"|"ASSOCIATE_FAIL"}, launchedVpcID?:string, replicationStatus?:"STOPPED"|"IN_PROGRESS"|"PROTECTED"|"ERROR", replicationStatusDetails?:string, sourceAccountID?:string, sourceNetworkID?:string, sourceRegion?:string, sourceVpcID?:string, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function describeSourceNetworksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filters?:array{hardwareId?:string, sourceServerIDs?:array<string>, stagingAccountIDs?:array<string>}, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{items?:array<array{agentVersion?:string, arn?:string, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED", etaDateTime?:string, lagDuration?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int, volumeStatus?:"REGULAR"|"CONTAINS_MARKETPLACE_PRODUCT_CODES"|"MISSING_VOLUME_ATTRIBUTES"|"MISSING_VOLUME_ATTRIBUTES_AND_PRECHECK_UNAVAILABLE"|"PENDING"}>, stagingAvailabilityZone?:string, stagingOutpostArn?:string}, lastLaunchResult?:"NOT_STARTED"|"PENDING"|"SUCCEEDED"|"FAILED", lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastLaunch?:array{initiated?:array{apiCallDateTime?:string, jobID?:string, type?:"RECOVERY"|"DRILL"}, status?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED"}, lastSeenByServiceDateTime?:string}, recoveryInstanceId?:string, replicationDirection?:"FAILOVER"|"FAILBACK", reversedDirectionSourceServerArn?:string, sourceCloudProperties?:array{originAccountID?:string, originAvailabilityZone?:string, originRegion?:string, sourceOutpostArn?:string}, sourceNetworkID?:string, sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string, supportsNitroInstances?:bool}, sourceServerID?:string, stagingArea?:array{errorMessage?:string, stagingAccountID?:string, stagingSourceServerArn?:string, status?:"EXTENDED"|"EXTENSION_ERROR"|"NOT_EXTENDED"}, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function describeSourceServers(array $args = []): \AWS\Result { }

    /**
     * @param array{filters?:array{hardwareId?:string, sourceServerIDs?:array<string>, stagingAccountIDs?:array<string>}, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{agentVersion?:string, arn?:string, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED", etaDateTime?:string, lagDuration?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int, volumeStatus?:"REGULAR"|"CONTAINS_MARKETPLACE_PRODUCT_CODES"|"MISSING_VOLUME_ATTRIBUTES"|"MISSING_VOLUME_ATTRIBUTES_AND_PRECHECK_UNAVAILABLE"|"PENDING"}>, stagingAvailabilityZone?:string, stagingOutpostArn?:string}, lastLaunchResult?:"NOT_STARTED"|"PENDING"|"SUCCEEDED"|"FAILED", lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastLaunch?:array{initiated?:array{apiCallDateTime?:string, jobID?:string, type?:"RECOVERY"|"DRILL"}, status?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED"}, lastSeenByServiceDateTime?:string}, recoveryInstanceId?:string, replicationDirection?:"FAILOVER"|"FAILBACK", reversedDirectionSourceServerArn?:string, sourceCloudProperties?:array{originAccountID?:string, originAvailabilityZone?:string, originRegion?:string, sourceOutpostArn?:string}, sourceNetworkID?:string, sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string, supportsNitroInstances?:bool}, sourceServerID?:string, stagingArea?:array{errorMessage?:string, stagingAccountID?:string, stagingSourceServerArn?:string, status?:"EXTENDED"|"EXTENSION_ERROR"|"NOT_EXTENDED"}, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function describeSourceServersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{recoveryInstanceID:string} $args
     * @return \AWS\Result<void>
     */
    public function disconnectRecoveryInstance(array $args): \AWS\Result { }

    /**
     * @param array{recoveryInstanceID:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disconnectRecoveryInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sourceServerID:string} $args
     * @return \AWS\Result<array{agentVersion?:string, arn?:string, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED", etaDateTime?:string, lagDuration?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int, volumeStatus?:"REGULAR"|"CONTAINS_MARKETPLACE_PRODUCT_CODES"|"MISSING_VOLUME_ATTRIBUTES"|"MISSING_VOLUME_ATTRIBUTES_AND_PRECHECK_UNAVAILABLE"|"PENDING"}>, stagingAvailabilityZone?:string, stagingOutpostArn?:string}, lastLaunchResult?:"NOT_STARTED"|"PENDING"|"SUCCEEDED"|"FAILED", lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastLaunch?:array{initiated?:array{apiCallDateTime?:string, jobID?:string, type?:"RECOVERY"|"DRILL"}, status?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED"}, lastSeenByServiceDateTime?:string}, recoveryInstanceId?:string, replicationDirection?:"FAILOVER"|"FAILBACK", reversedDirectionSourceServerArn?:string, sourceCloudProperties?:array{originAccountID?:string, originAvailabilityZone?:string, originRegion?:string, sourceOutpostArn?:string}, sourceNetworkID?:string, sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string, supportsNitroInstances?:bool}, sourceServerID?:string, stagingArea?:array{errorMessage?:string, stagingAccountID?:string, stagingSourceServerArn?:string, status?:"EXTENDED"|"EXTENSION_ERROR"|"NOT_EXTENDED"}, tags?:array<string, string>}>
     */
    public function disconnectSourceServer(array $args): \AWS\Result { }

    /**
     * @param array{sourceServerID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{agentVersion?:string, arn?:string, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED", etaDateTime?:string, lagDuration?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int, volumeStatus?:"REGULAR"|"CONTAINS_MARKETPLACE_PRODUCT_CODES"|"MISSING_VOLUME_ATTRIBUTES"|"MISSING_VOLUME_ATTRIBUTES_AND_PRECHECK_UNAVAILABLE"|"PENDING"}>, stagingAvailabilityZone?:string, stagingOutpostArn?:string}, lastLaunchResult?:"NOT_STARTED"|"PENDING"|"SUCCEEDED"|"FAILED", lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastLaunch?:array{initiated?:array{apiCallDateTime?:string, jobID?:string, type?:"RECOVERY"|"DRILL"}, status?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED"}, lastSeenByServiceDateTime?:string}, recoveryInstanceId?:string, replicationDirection?:"FAILOVER"|"FAILBACK", reversedDirectionSourceServerArn?:string, sourceCloudProperties?:array{originAccountID?:string, originAvailabilityZone?:string, originRegion?:string, sourceOutpostArn?:string}, sourceNetworkID?:string, sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string, supportsNitroInstances?:bool}, sourceServerID?:string, stagingArea?:array{errorMessage?:string, stagingAccountID?:string, stagingSourceServerArn?:string, status?:"EXTENDED"|"EXTENSION_ERROR"|"NOT_EXTENDED"}, tags?:array<string, string>}>
     */
    public function disconnectSourceServerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sourceNetworkID:string} $args
     * @return \AWS\Result<array{s3DestinationUrl?:string}>
     */
    public function exportSourceNetworkCfnTemplate(array $args): \AWS\Result { }

    /**
     * @param array{sourceNetworkID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{s3DestinationUrl?:string}>
     */
    public function exportSourceNetworkCfnTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{recoveryInstanceID:string} $args
     * @return \AWS\Result<array{bandwidthThrottling?:int, name?:string, recoveryInstanceID:string, usePrivateIP?:bool}>
     */
    public function getFailbackReplicationConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{recoveryInstanceID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{bandwidthThrottling?:int, name?:string, recoveryInstanceID:string, usePrivateIP?:bool}>
     */
    public function getFailbackReplicationConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sourceServerID:string} $args
     * @return \AWS\Result<array{copyPrivateIp?:bool, copyTags?:bool, ec2LaunchTemplateID?:string, launchDisposition?:"STOPPED"|"STARTED", launchIntoInstanceProperties?:array{launchIntoEC2InstanceID?:string}, licensing?:array{osByol?:bool}, name?:string, postLaunchEnabled?:bool, sourceServerID?:string, targetInstanceTypeRightSizingMethod?:"NONE"|"BASIC"|"IN_AWS"}>
     */
    public function getLaunchConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{sourceServerID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{copyPrivateIp?:bool, copyTags?:bool, ec2LaunchTemplateID?:string, launchDisposition?:"STOPPED"|"STARTED", launchIntoInstanceProperties?:array{launchIntoEC2InstanceID?:string}, licensing?:array{osByol?:bool}, name?:string, postLaunchEnabled?:bool, sourceServerID?:string, targetInstanceTypeRightSizingMethod?:"NONE"|"BASIC"|"IN_AWS"}>
     */
    public function getLaunchConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sourceServerID:string} $args
     * @return \AWS\Result<array{associateDefaultSecurityGroup?:bool, autoReplicateNewDisks?:bool, bandwidthThrottling?:int, createPublicIP?:bool, dataPlaneRouting?:"PRIVATE_IP"|"PUBLIC_IP", defaultLargeStagingDiskType?:"GP2"|"GP3"|"ST1"|"AUTO", ebsEncryption?:"DEFAULT"|"CUSTOM"|"NONE", ebsEncryptionKeyArn?:string, name?:string, pitPolicy?:array<array{enabled?:bool, interval:int, retentionDuration:int, ruleID?:int, units:"MINUTE"|"HOUR"|"DAY"}>, replicatedDisks?:array<array{deviceName?:string, iops?:int, isBootDisk?:bool, optimizedStagingDiskType?:"AUTO"|"GP2"|"GP3"|"IO1"|"SC1"|"ST1"|"STANDARD", stagingDiskType?:"AUTO"|"GP2"|"GP3"|"IO1"|"SC1"|"ST1"|"STANDARD", throughput?:int}>, replicationServerInstanceType?:string, replicationServersSecurityGroupsIDs?:array<string>, sourceServerID?:string, stagingAreaSubnetId?:string, stagingAreaTags?:array<string, string>, useDedicatedReplicationServer?:bool}>
     */
    public function getReplicationConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{sourceServerID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{associateDefaultSecurityGroup?:bool, autoReplicateNewDisks?:bool, bandwidthThrottling?:int, createPublicIP?:bool, dataPlaneRouting?:"PRIVATE_IP"|"PUBLIC_IP", defaultLargeStagingDiskType?:"GP2"|"GP3"|"ST1"|"AUTO", ebsEncryption?:"DEFAULT"|"CUSTOM"|"NONE", ebsEncryptionKeyArn?:string, name?:string, pitPolicy?:array<array{enabled?:bool, interval:int, retentionDuration:int, ruleID?:int, units:"MINUTE"|"HOUR"|"DAY"}>, replicatedDisks?:array<array{deviceName?:string, iops?:int, isBootDisk?:bool, optimizedStagingDiskType?:"AUTO"|"GP2"|"GP3"|"IO1"|"SC1"|"ST1"|"STANDARD", stagingDiskType?:"AUTO"|"GP2"|"GP3"|"IO1"|"SC1"|"ST1"|"STANDARD", throughput?:int}>, replicationServerInstanceType?:string, replicationServersSecurityGroupsIDs?:array<string>, sourceServerID?:string, stagingAreaSubnetId?:string, stagingAreaTags?:array<string, string>, useDedicatedReplicationServer?:bool}>
     */
    public function getReplicationConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{}>
     */
    public function initializeService(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function initializeServiceAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, stagingAccountID:string} $args
     * @return \AWS\Result<array{items?:array<array{arn?:string, hostname?:string, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listExtensibleSourceServers(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, stagingAccountID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{arn?:string, hostname?:string, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listExtensibleSourceServersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filters?:array{actionIds?:array<string>}, maxResults?:int, nextToken?:string, resourceId:string} $args
     * @return \AWS\Result<array{items?:array<array{actionCode?:string, actionId?:string, actionVersion?:string, active?:bool, category?:"MONITORING"|"VALIDATION"|"CONFIGURATION"|"SECURITY"|"OTHER", description?:string, name?:string, optional?:bool, order?:int, parameters?:array<string, array{type?:"SSM_STORE"|"DYNAMIC", value?:string}>, type?:"SSM_AUTOMATION"|"SSM_COMMAND"}>, nextToken?:string}>
     */
    public function listLaunchActions(array $args): \AWS\Result { }

    /**
     * @param array{filters?:array{actionIds?:array<string>}, maxResults?:int, nextToken?:string, resourceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{actionCode?:string, actionId?:string, actionVersion?:string, active?:bool, category?:"MONITORING"|"VALIDATION"|"CONFIGURATION"|"SECURITY"|"OTHER", description?:string, name?:string, optional?:bool, order?:int, parameters?:array<string, array{type?:"SSM_STORE"|"DYNAMIC", value?:string}>, type?:"SSM_AUTOMATION"|"SSM_COMMAND"}>, nextToken?:string}>
     */
    public function listLaunchActionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{accounts?:array<array{accountID?:string}>, nextToken?:string}>
     */
    public function listStagingAccounts(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{accounts?:array<array{accountID?:string}>, nextToken?:string}>
     */
    public function listStagingAccountsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{actionCode:string, actionId:string, actionVersion:string, active:bool, category:"MONITORING"|"VALIDATION"|"CONFIGURATION"|"SECURITY"|"OTHER", description:string, name:string, optional:bool, order:int, parameters?:array<string, array{type?:"SSM_STORE"|"DYNAMIC", value?:string}>, resourceId:string} $args
     * @return \AWS\Result<array{actionCode?:string, actionId?:string, actionVersion?:string, active?:bool, category?:"MONITORING"|"VALIDATION"|"CONFIGURATION"|"SECURITY"|"OTHER", description?:string, name?:string, optional?:bool, order?:int, parameters?:array<string, array{type?:"SSM_STORE"|"DYNAMIC", value?:string}>, resourceId?:string, type?:"SSM_AUTOMATION"|"SSM_COMMAND"}>
     */
    public function putLaunchAction(array $args): \AWS\Result { }

    /**
     * @param array{actionCode:string, actionId:string, actionVersion:string, active:bool, category:"MONITORING"|"VALIDATION"|"CONFIGURATION"|"SECURITY"|"OTHER", description:string, name:string, optional:bool, order:int, parameters?:array<string, array{type?:"SSM_STORE"|"DYNAMIC", value?:string}>, resourceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{actionCode?:string, actionId?:string, actionVersion?:string, active?:bool, category?:"MONITORING"|"VALIDATION"|"CONFIGURATION"|"SECURITY"|"OTHER", description?:string, name?:string, optional?:bool, order?:int, parameters?:array<string, array{type?:"SSM_STORE"|"DYNAMIC", value?:string}>, resourceId?:string, type?:"SSM_AUTOMATION"|"SSM_COMMAND"}>
     */
    public function putLaunchActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sourceServerID:string} $args
     * @return \AWS\Result<array{agentVersion?:string, arn?:string, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED", etaDateTime?:string, lagDuration?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int, volumeStatus?:"REGULAR"|"CONTAINS_MARKETPLACE_PRODUCT_CODES"|"MISSING_VOLUME_ATTRIBUTES"|"MISSING_VOLUME_ATTRIBUTES_AND_PRECHECK_UNAVAILABLE"|"PENDING"}>, stagingAvailabilityZone?:string, stagingOutpostArn?:string}, lastLaunchResult?:"NOT_STARTED"|"PENDING"|"SUCCEEDED"|"FAILED", lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastLaunch?:array{initiated?:array{apiCallDateTime?:string, jobID?:string, type?:"RECOVERY"|"DRILL"}, status?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED"}, lastSeenByServiceDateTime?:string}, recoveryInstanceId?:string, replicationDirection?:"FAILOVER"|"FAILBACK", reversedDirectionSourceServerArn?:string, sourceCloudProperties?:array{originAccountID?:string, originAvailabilityZone?:string, originRegion?:string, sourceOutpostArn?:string}, sourceNetworkID?:string, sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string, supportsNitroInstances?:bool}, sourceServerID?:string, stagingArea?:array{errorMessage?:string, stagingAccountID?:string, stagingSourceServerArn?:string, status?:"EXTENDED"|"EXTENSION_ERROR"|"NOT_EXTENDED"}, tags?:array<string, string>}>
     */
    public function retryDataReplication(array $args): \AWS\Result { }

    /**
     * @param array{sourceServerID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{agentVersion?:string, arn?:string, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED", etaDateTime?:string, lagDuration?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int, volumeStatus?:"REGULAR"|"CONTAINS_MARKETPLACE_PRODUCT_CODES"|"MISSING_VOLUME_ATTRIBUTES"|"MISSING_VOLUME_ATTRIBUTES_AND_PRECHECK_UNAVAILABLE"|"PENDING"}>, stagingAvailabilityZone?:string, stagingOutpostArn?:string}, lastLaunchResult?:"NOT_STARTED"|"PENDING"|"SUCCEEDED"|"FAILED", lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastLaunch?:array{initiated?:array{apiCallDateTime?:string, jobID?:string, type?:"RECOVERY"|"DRILL"}, status?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED"}, lastSeenByServiceDateTime?:string}, recoveryInstanceId?:string, replicationDirection?:"FAILOVER"|"FAILBACK", reversedDirectionSourceServerArn?:string, sourceCloudProperties?:array{originAccountID?:string, originAvailabilityZone?:string, originRegion?:string, sourceOutpostArn?:string}, sourceNetworkID?:string, sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string, supportsNitroInstances?:bool}, sourceServerID?:string, stagingArea?:array{errorMessage?:string, stagingAccountID?:string, stagingSourceServerArn?:string, status?:"EXTENDED"|"EXTENSION_ERROR"|"NOT_EXTENDED"}, tags?:array<string, string>}>
     */
    public function retryDataReplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{recoveryInstanceID:string} $args
     * @return \AWS\Result<array{reversedDirectionSourceServerArn?:string}>
     */
    public function reverseReplication(array $args): \AWS\Result { }

    /**
     * @param array{recoveryInstanceID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{reversedDirectionSourceServerArn?:string}>
     */
    public function reverseReplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{recoveryInstanceIDs:array<string>, tags?:array<string, string>} $args
     * @return \AWS\Result<array{job?:array{arn?:string, creationDateTime?:string, endDateTime?:string, initiatedBy?:"START_RECOVERY"|"START_DRILL"|"FAILBACK"|"DIAGNOSTIC"|"TERMINATE_RECOVERY_INSTANCES"|"TARGET_ACCOUNT"|"CREATE_NETWORK_RECOVERY"|"UPDATE_NETWORK_RECOVERY"|"ASSOCIATE_NETWORK_RECOVERY", jobID:string, participatingResources?:array<array{launchStatus?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED", participatingResourceID?:array{sourceNetworkID?:string}}>, participatingServers?:array<array{launchActionsStatus?:array{runs?:array<array{action?:array{actionCode?:string, actionId?:string, actionVersion?:string, active?:bool, category?:"MONITORING"|"VALIDATION"|"CONFIGURATION"|"SECURITY"|"OTHER", description?:string, name?:string, optional?:bool, order?:int, parameters?:array<string, array{type?:"SSM_STORE"|"DYNAMIC", value?:string}>, type?:"SSM_AUTOMATION"|"SSM_COMMAND"}, failureReason?:string, runId?:string, status?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED"}>, ssmAgentDiscoveryDatetime?:string}, launchStatus?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED", recoveryInstanceID?:string, sourceServerID?:string}>, status?:"PENDING"|"STARTED"|"COMPLETED", tags?:array<string, string>, type?:"LAUNCH"|"TERMINATE"|"CREATE_CONVERTED_SNAPSHOT"}}>
     */
    public function startFailbackLaunch(array $args): \AWS\Result { }

    /**
     * @param array{recoveryInstanceIDs:array<string>, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{job?:array{arn?:string, creationDateTime?:string, endDateTime?:string, initiatedBy?:"START_RECOVERY"|"START_DRILL"|"FAILBACK"|"DIAGNOSTIC"|"TERMINATE_RECOVERY_INSTANCES"|"TARGET_ACCOUNT"|"CREATE_NETWORK_RECOVERY"|"UPDATE_NETWORK_RECOVERY"|"ASSOCIATE_NETWORK_RECOVERY", jobID:string, participatingResources?:array<array{launchStatus?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED", participatingResourceID?:array{sourceNetworkID?:string}}>, participatingServers?:array<array{launchActionsStatus?:array{runs?:array<array{action?:array{actionCode?:string, actionId?:string, actionVersion?:string, active?:bool, category?:"MONITORING"|"VALIDATION"|"CONFIGURATION"|"SECURITY"|"OTHER", description?:string, name?:string, optional?:bool, order?:int, parameters?:array<string, array{type?:"SSM_STORE"|"DYNAMIC", value?:string}>, type?:"SSM_AUTOMATION"|"SSM_COMMAND"}, failureReason?:string, runId?:string, status?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED"}>, ssmAgentDiscoveryDatetime?:string}, launchStatus?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED", recoveryInstanceID?:string, sourceServerID?:string}>, status?:"PENDING"|"STARTED"|"COMPLETED", tags?:array<string, string>, type?:"LAUNCH"|"TERMINATE"|"CREATE_CONVERTED_SNAPSHOT"}}>
     */
    public function startFailbackLaunchAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{isDrill?:bool, sourceServers:array<array{recoverySnapshotID?:string, sourceServerID:string}>, tags?:array<string, string>} $args
     * @return \AWS\Result<array{job?:array{arn?:string, creationDateTime?:string, endDateTime?:string, initiatedBy?:"START_RECOVERY"|"START_DRILL"|"FAILBACK"|"DIAGNOSTIC"|"TERMINATE_RECOVERY_INSTANCES"|"TARGET_ACCOUNT"|"CREATE_NETWORK_RECOVERY"|"UPDATE_NETWORK_RECOVERY"|"ASSOCIATE_NETWORK_RECOVERY", jobID:string, participatingResources?:array<array{launchStatus?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED", participatingResourceID?:array{sourceNetworkID?:string}}>, participatingServers?:array<array{launchActionsStatus?:array{runs?:array<array{action?:array{actionCode?:string, actionId?:string, actionVersion?:string, active?:bool, category?:"MONITORING"|"VALIDATION"|"CONFIGURATION"|"SECURITY"|"OTHER", description?:string, name?:string, optional?:bool, order?:int, parameters?:array<string, array{type?:"SSM_STORE"|"DYNAMIC", value?:string}>, type?:"SSM_AUTOMATION"|"SSM_COMMAND"}, failureReason?:string, runId?:string, status?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED"}>, ssmAgentDiscoveryDatetime?:string}, launchStatus?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED", recoveryInstanceID?:string, sourceServerID?:string}>, status?:"PENDING"|"STARTED"|"COMPLETED", tags?:array<string, string>, type?:"LAUNCH"|"TERMINATE"|"CREATE_CONVERTED_SNAPSHOT"}}>
     */
    public function startRecovery(array $args): \AWS\Result { }

    /**
     * @param array{isDrill?:bool, sourceServers:array<array{recoverySnapshotID?:string, sourceServerID:string}>, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{job?:array{arn?:string, creationDateTime?:string, endDateTime?:string, initiatedBy?:"START_RECOVERY"|"START_DRILL"|"FAILBACK"|"DIAGNOSTIC"|"TERMINATE_RECOVERY_INSTANCES"|"TARGET_ACCOUNT"|"CREATE_NETWORK_RECOVERY"|"UPDATE_NETWORK_RECOVERY"|"ASSOCIATE_NETWORK_RECOVERY", jobID:string, participatingResources?:array<array{launchStatus?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED", participatingResourceID?:array{sourceNetworkID?:string}}>, participatingServers?:array<array{launchActionsStatus?:array{runs?:array<array{action?:array{actionCode?:string, actionId?:string, actionVersion?:string, active?:bool, category?:"MONITORING"|"VALIDATION"|"CONFIGURATION"|"SECURITY"|"OTHER", description?:string, name?:string, optional?:bool, order?:int, parameters?:array<string, array{type?:"SSM_STORE"|"DYNAMIC", value?:string}>, type?:"SSM_AUTOMATION"|"SSM_COMMAND"}, failureReason?:string, runId?:string, status?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED"}>, ssmAgentDiscoveryDatetime?:string}, launchStatus?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED", recoveryInstanceID?:string, sourceServerID?:string}>, status?:"PENDING"|"STARTED"|"COMPLETED", tags?:array<string, string>, type?:"LAUNCH"|"TERMINATE"|"CREATE_CONVERTED_SNAPSHOT"}}>
     */
    public function startRecoveryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sourceServerID:string} $args
     * @return \AWS\Result<array{sourceServer?:array{agentVersion?:string, arn?:string, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED", etaDateTime?:string, lagDuration?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int, volumeStatus?:"REGULAR"|"CONTAINS_MARKETPLACE_PRODUCT_CODES"|"MISSING_VOLUME_ATTRIBUTES"|"MISSING_VOLUME_ATTRIBUTES_AND_PRECHECK_UNAVAILABLE"|"PENDING"}>, stagingAvailabilityZone?:string, stagingOutpostArn?:string}, lastLaunchResult?:"NOT_STARTED"|"PENDING"|"SUCCEEDED"|"FAILED", lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastLaunch?:array{initiated?:array{apiCallDateTime?:string, jobID?:string, type?:"RECOVERY"|"DRILL"}, status?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED"}, lastSeenByServiceDateTime?:string}, recoveryInstanceId?:string, replicationDirection?:"FAILOVER"|"FAILBACK", reversedDirectionSourceServerArn?:string, sourceCloudProperties?:array{originAccountID?:string, originAvailabilityZone?:string, originRegion?:string, sourceOutpostArn?:string}, sourceNetworkID?:string, sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string, supportsNitroInstances?:bool}, sourceServerID?:string, stagingArea?:array{errorMessage?:string, stagingAccountID?:string, stagingSourceServerArn?:string, status?:"EXTENDED"|"EXTENSION_ERROR"|"NOT_EXTENDED"}, tags?:array<string, string>}}>
     */
    public function startReplication(array $args): \AWS\Result { }

    /**
     * @param array{sourceServerID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{sourceServer?:array{agentVersion?:string, arn?:string, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED", etaDateTime?:string, lagDuration?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int, volumeStatus?:"REGULAR"|"CONTAINS_MARKETPLACE_PRODUCT_CODES"|"MISSING_VOLUME_ATTRIBUTES"|"MISSING_VOLUME_ATTRIBUTES_AND_PRECHECK_UNAVAILABLE"|"PENDING"}>, stagingAvailabilityZone?:string, stagingOutpostArn?:string}, lastLaunchResult?:"NOT_STARTED"|"PENDING"|"SUCCEEDED"|"FAILED", lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastLaunch?:array{initiated?:array{apiCallDateTime?:string, jobID?:string, type?:"RECOVERY"|"DRILL"}, status?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED"}, lastSeenByServiceDateTime?:string}, recoveryInstanceId?:string, replicationDirection?:"FAILOVER"|"FAILBACK", reversedDirectionSourceServerArn?:string, sourceCloudProperties?:array{originAccountID?:string, originAvailabilityZone?:string, originRegion?:string, sourceOutpostArn?:string}, sourceNetworkID?:string, sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string, supportsNitroInstances?:bool}, sourceServerID?:string, stagingArea?:array{errorMessage?:string, stagingAccountID?:string, stagingSourceServerArn?:string, status?:"EXTENDED"|"EXTENSION_ERROR"|"NOT_EXTENDED"}, tags?:array<string, string>}}>
     */
    public function startReplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deployAsNew?:bool, sourceNetworks:array<array{cfnStackName?:string, sourceNetworkID:string}>, tags?:array<string, string>} $args
     * @return \AWS\Result<array{job?:array{arn?:string, creationDateTime?:string, endDateTime?:string, initiatedBy?:"START_RECOVERY"|"START_DRILL"|"FAILBACK"|"DIAGNOSTIC"|"TERMINATE_RECOVERY_INSTANCES"|"TARGET_ACCOUNT"|"CREATE_NETWORK_RECOVERY"|"UPDATE_NETWORK_RECOVERY"|"ASSOCIATE_NETWORK_RECOVERY", jobID:string, participatingResources?:array<array{launchStatus?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED", participatingResourceID?:array{sourceNetworkID?:string}}>, participatingServers?:array<array{launchActionsStatus?:array{runs?:array<array{action?:array{actionCode?:string, actionId?:string, actionVersion?:string, active?:bool, category?:"MONITORING"|"VALIDATION"|"CONFIGURATION"|"SECURITY"|"OTHER", description?:string, name?:string, optional?:bool, order?:int, parameters?:array<string, array{type?:"SSM_STORE"|"DYNAMIC", value?:string}>, type?:"SSM_AUTOMATION"|"SSM_COMMAND"}, failureReason?:string, runId?:string, status?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED"}>, ssmAgentDiscoveryDatetime?:string}, launchStatus?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED", recoveryInstanceID?:string, sourceServerID?:string}>, status?:"PENDING"|"STARTED"|"COMPLETED", tags?:array<string, string>, type?:"LAUNCH"|"TERMINATE"|"CREATE_CONVERTED_SNAPSHOT"}}>
     */
    public function startSourceNetworkRecovery(array $args): \AWS\Result { }

    /**
     * @param array{deployAsNew?:bool, sourceNetworks:array<array{cfnStackName?:string, sourceNetworkID:string}>, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{job?:array{arn?:string, creationDateTime?:string, endDateTime?:string, initiatedBy?:"START_RECOVERY"|"START_DRILL"|"FAILBACK"|"DIAGNOSTIC"|"TERMINATE_RECOVERY_INSTANCES"|"TARGET_ACCOUNT"|"CREATE_NETWORK_RECOVERY"|"UPDATE_NETWORK_RECOVERY"|"ASSOCIATE_NETWORK_RECOVERY", jobID:string, participatingResources?:array<array{launchStatus?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED", participatingResourceID?:array{sourceNetworkID?:string}}>, participatingServers?:array<array{launchActionsStatus?:array{runs?:array<array{action?:array{actionCode?:string, actionId?:string, actionVersion?:string, active?:bool, category?:"MONITORING"|"VALIDATION"|"CONFIGURATION"|"SECURITY"|"OTHER", description?:string, name?:string, optional?:bool, order?:int, parameters?:array<string, array{type?:"SSM_STORE"|"DYNAMIC", value?:string}>, type?:"SSM_AUTOMATION"|"SSM_COMMAND"}, failureReason?:string, runId?:string, status?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED"}>, ssmAgentDiscoveryDatetime?:string}, launchStatus?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED", recoveryInstanceID?:string, sourceServerID?:string}>, status?:"PENDING"|"STARTED"|"COMPLETED", tags?:array<string, string>, type?:"LAUNCH"|"TERMINATE"|"CREATE_CONVERTED_SNAPSHOT"}}>
     */
    public function startSourceNetworkRecoveryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sourceNetworkID:string} $args
     * @return \AWS\Result<array{sourceNetwork?:array{arn?:string, cfnStackName?:string, lastRecovery?:array{apiCallDateTime?:int|string|\DateTimeInterface, jobID?:string, lastRecoveryResult?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCESS"|"FAIL"|"PARTIAL_SUCCESS"|"ASSOCIATE_SUCCESS"|"ASSOCIATE_FAIL"}, launchedVpcID?:string, replicationStatus?:"STOPPED"|"IN_PROGRESS"|"PROTECTED"|"ERROR", replicationStatusDetails?:string, sourceAccountID?:string, sourceNetworkID?:string, sourceRegion?:string, sourceVpcID?:string, tags?:array<string, string>}}>
     */
    public function startSourceNetworkReplication(array $args): \AWS\Result { }

    /**
     * @param array{sourceNetworkID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{sourceNetwork?:array{arn?:string, cfnStackName?:string, lastRecovery?:array{apiCallDateTime?:int|string|\DateTimeInterface, jobID?:string, lastRecoveryResult?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCESS"|"FAIL"|"PARTIAL_SUCCESS"|"ASSOCIATE_SUCCESS"|"ASSOCIATE_FAIL"}, launchedVpcID?:string, replicationStatus?:"STOPPED"|"IN_PROGRESS"|"PROTECTED"|"ERROR", replicationStatusDetails?:string, sourceAccountID?:string, sourceNetworkID?:string, sourceRegion?:string, sourceVpcID?:string, tags?:array<string, string>}}>
     */
    public function startSourceNetworkReplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{recoveryInstanceID:string} $args
     * @return \AWS\Result<void>
     */
    public function stopFailback(array $args): \AWS\Result { }

    /**
     * @param array{recoveryInstanceID:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function stopFailbackAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sourceServerID:string} $args
     * @return \AWS\Result<array{sourceServer?:array{agentVersion?:string, arn?:string, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED", etaDateTime?:string, lagDuration?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int, volumeStatus?:"REGULAR"|"CONTAINS_MARKETPLACE_PRODUCT_CODES"|"MISSING_VOLUME_ATTRIBUTES"|"MISSING_VOLUME_ATTRIBUTES_AND_PRECHECK_UNAVAILABLE"|"PENDING"}>, stagingAvailabilityZone?:string, stagingOutpostArn?:string}, lastLaunchResult?:"NOT_STARTED"|"PENDING"|"SUCCEEDED"|"FAILED", lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastLaunch?:array{initiated?:array{apiCallDateTime?:string, jobID?:string, type?:"RECOVERY"|"DRILL"}, status?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED"}, lastSeenByServiceDateTime?:string}, recoveryInstanceId?:string, replicationDirection?:"FAILOVER"|"FAILBACK", reversedDirectionSourceServerArn?:string, sourceCloudProperties?:array{originAccountID?:string, originAvailabilityZone?:string, originRegion?:string, sourceOutpostArn?:string}, sourceNetworkID?:string, sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string, supportsNitroInstances?:bool}, sourceServerID?:string, stagingArea?:array{errorMessage?:string, stagingAccountID?:string, stagingSourceServerArn?:string, status?:"EXTENDED"|"EXTENSION_ERROR"|"NOT_EXTENDED"}, tags?:array<string, string>}}>
     */
    public function stopReplication(array $args): \AWS\Result { }

    /**
     * @param array{sourceServerID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{sourceServer?:array{agentVersion?:string, arn?:string, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED", etaDateTime?:string, lagDuration?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int, volumeStatus?:"REGULAR"|"CONTAINS_MARKETPLACE_PRODUCT_CODES"|"MISSING_VOLUME_ATTRIBUTES"|"MISSING_VOLUME_ATTRIBUTES_AND_PRECHECK_UNAVAILABLE"|"PENDING"}>, stagingAvailabilityZone?:string, stagingOutpostArn?:string}, lastLaunchResult?:"NOT_STARTED"|"PENDING"|"SUCCEEDED"|"FAILED", lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastLaunch?:array{initiated?:array{apiCallDateTime?:string, jobID?:string, type?:"RECOVERY"|"DRILL"}, status?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED"}, lastSeenByServiceDateTime?:string}, recoveryInstanceId?:string, replicationDirection?:"FAILOVER"|"FAILBACK", reversedDirectionSourceServerArn?:string, sourceCloudProperties?:array{originAccountID?:string, originAvailabilityZone?:string, originRegion?:string, sourceOutpostArn?:string}, sourceNetworkID?:string, sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string, supportsNitroInstances?:bool}, sourceServerID?:string, stagingArea?:array{errorMessage?:string, stagingAccountID?:string, stagingSourceServerArn?:string, status?:"EXTENDED"|"EXTENSION_ERROR"|"NOT_EXTENDED"}, tags?:array<string, string>}}>
     */
    public function stopReplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sourceNetworkID:string} $args
     * @return \AWS\Result<array{sourceNetwork?:array{arn?:string, cfnStackName?:string, lastRecovery?:array{apiCallDateTime?:int|string|\DateTimeInterface, jobID?:string, lastRecoveryResult?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCESS"|"FAIL"|"PARTIAL_SUCCESS"|"ASSOCIATE_SUCCESS"|"ASSOCIATE_FAIL"}, launchedVpcID?:string, replicationStatus?:"STOPPED"|"IN_PROGRESS"|"PROTECTED"|"ERROR", replicationStatusDetails?:string, sourceAccountID?:string, sourceNetworkID?:string, sourceRegion?:string, sourceVpcID?:string, tags?:array<string, string>}}>
     */
    public function stopSourceNetworkReplication(array $args): \AWS\Result { }

    /**
     * @param array{sourceNetworkID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{sourceNetwork?:array{arn?:string, cfnStackName?:string, lastRecovery?:array{apiCallDateTime?:int|string|\DateTimeInterface, jobID?:string, lastRecoveryResult?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCESS"|"FAIL"|"PARTIAL_SUCCESS"|"ASSOCIATE_SUCCESS"|"ASSOCIATE_FAIL"}, launchedVpcID?:string, replicationStatus?:"STOPPED"|"IN_PROGRESS"|"PROTECTED"|"ERROR", replicationStatusDetails?:string, sourceAccountID?:string, sourceNetworkID?:string, sourceRegion?:string, sourceVpcID?:string, tags?:array<string, string>}}>
     */
    public function stopSourceNetworkReplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags:array<string, string>} $args
     * @return \AWS\Result<void>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{recoveryInstanceIDs:array<string>} $args
     * @return \AWS\Result<array{job?:array{arn?:string, creationDateTime?:string, endDateTime?:string, initiatedBy?:"START_RECOVERY"|"START_DRILL"|"FAILBACK"|"DIAGNOSTIC"|"TERMINATE_RECOVERY_INSTANCES"|"TARGET_ACCOUNT"|"CREATE_NETWORK_RECOVERY"|"UPDATE_NETWORK_RECOVERY"|"ASSOCIATE_NETWORK_RECOVERY", jobID:string, participatingResources?:array<array{launchStatus?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED", participatingResourceID?:array{sourceNetworkID?:string}}>, participatingServers?:array<array{launchActionsStatus?:array{runs?:array<array{action?:array{actionCode?:string, actionId?:string, actionVersion?:string, active?:bool, category?:"MONITORING"|"VALIDATION"|"CONFIGURATION"|"SECURITY"|"OTHER", description?:string, name?:string, optional?:bool, order?:int, parameters?:array<string, array{type?:"SSM_STORE"|"DYNAMIC", value?:string}>, type?:"SSM_AUTOMATION"|"SSM_COMMAND"}, failureReason?:string, runId?:string, status?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED"}>, ssmAgentDiscoveryDatetime?:string}, launchStatus?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED", recoveryInstanceID?:string, sourceServerID?:string}>, status?:"PENDING"|"STARTED"|"COMPLETED", tags?:array<string, string>, type?:"LAUNCH"|"TERMINATE"|"CREATE_CONVERTED_SNAPSHOT"}}>
     */
    public function terminateRecoveryInstances(array $args): \AWS\Result { }

    /**
     * @param array{recoveryInstanceIDs:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{job?:array{arn?:string, creationDateTime?:string, endDateTime?:string, initiatedBy?:"START_RECOVERY"|"START_DRILL"|"FAILBACK"|"DIAGNOSTIC"|"TERMINATE_RECOVERY_INSTANCES"|"TARGET_ACCOUNT"|"CREATE_NETWORK_RECOVERY"|"UPDATE_NETWORK_RECOVERY"|"ASSOCIATE_NETWORK_RECOVERY", jobID:string, participatingResources?:array<array{launchStatus?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED", participatingResourceID?:array{sourceNetworkID?:string}}>, participatingServers?:array<array{launchActionsStatus?:array{runs?:array<array{action?:array{actionCode?:string, actionId?:string, actionVersion?:string, active?:bool, category?:"MONITORING"|"VALIDATION"|"CONFIGURATION"|"SECURITY"|"OTHER", description?:string, name?:string, optional?:bool, order?:int, parameters?:array<string, array{type?:"SSM_STORE"|"DYNAMIC", value?:string}>, type?:"SSM_AUTOMATION"|"SSM_COMMAND"}, failureReason?:string, runId?:string, status?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED"}>, ssmAgentDiscoveryDatetime?:string}, launchStatus?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED", recoveryInstanceID?:string, sourceServerID?:string}>, status?:"PENDING"|"STARTED"|"COMPLETED", tags?:array<string, string>, type?:"LAUNCH"|"TERMINATE"|"CREATE_CONVERTED_SNAPSHOT"}}>
     */
    public function terminateRecoveryInstancesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{bandwidthThrottling?:int, name?:string, recoveryInstanceID:string, usePrivateIP?:bool} $args
     * @return \AWS\Result<void>
     */
    public function updateFailbackReplicationConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{bandwidthThrottling?:int, name?:string, recoveryInstanceID:string, usePrivateIP?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateFailbackReplicationConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{copyPrivateIp?:bool, copyTags?:bool, launchDisposition?:"STOPPED"|"STARTED", launchIntoInstanceProperties?:array{launchIntoEC2InstanceID?:string}, licensing?:array{osByol?:bool}, name?:string, postLaunchEnabled?:bool, sourceServerID:string, targetInstanceTypeRightSizingMethod?:"NONE"|"BASIC"|"IN_AWS"} $args
     * @return \AWS\Result<array{copyPrivateIp?:bool, copyTags?:bool, ec2LaunchTemplateID?:string, launchDisposition?:"STOPPED"|"STARTED", launchIntoInstanceProperties?:array{launchIntoEC2InstanceID?:string}, licensing?:array{osByol?:bool}, name?:string, postLaunchEnabled?:bool, sourceServerID?:string, targetInstanceTypeRightSizingMethod?:"NONE"|"BASIC"|"IN_AWS"}>
     */
    public function updateLaunchConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{copyPrivateIp?:bool, copyTags?:bool, launchDisposition?:"STOPPED"|"STARTED", launchIntoInstanceProperties?:array{launchIntoEC2InstanceID?:string}, licensing?:array{osByol?:bool}, name?:string, postLaunchEnabled?:bool, sourceServerID:string, targetInstanceTypeRightSizingMethod?:"NONE"|"BASIC"|"IN_AWS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{copyPrivateIp?:bool, copyTags?:bool, ec2LaunchTemplateID?:string, launchDisposition?:"STOPPED"|"STARTED", launchIntoInstanceProperties?:array{launchIntoEC2InstanceID?:string}, licensing?:array{osByol?:bool}, name?:string, postLaunchEnabled?:bool, sourceServerID?:string, targetInstanceTypeRightSizingMethod?:"NONE"|"BASIC"|"IN_AWS"}>
     */
    public function updateLaunchConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{copyPrivateIp?:bool, copyTags?:bool, exportBucketArn?:string, launchConfigurationTemplateID:string, launchDisposition?:"STOPPED"|"STARTED", launchIntoSourceInstance?:bool, licensing?:array{osByol?:bool}, postLaunchEnabled?:bool, targetInstanceTypeRightSizingMethod?:"NONE"|"BASIC"|"IN_AWS"} $args
     * @return \AWS\Result<array{launchConfigurationTemplate?:array{arn?:string, copyPrivateIp?:bool, copyTags?:bool, exportBucketArn?:string, launchConfigurationTemplateID?:string, launchDisposition?:"STOPPED"|"STARTED", launchIntoSourceInstance?:bool, licensing?:array{osByol?:bool}, postLaunchEnabled?:bool, tags?:array<string, string>, targetInstanceTypeRightSizingMethod?:"NONE"|"BASIC"|"IN_AWS"}}>
     */
    public function updateLaunchConfigurationTemplate(array $args): \AWS\Result { }

    /**
     * @param array{copyPrivateIp?:bool, copyTags?:bool, exportBucketArn?:string, launchConfigurationTemplateID:string, launchDisposition?:"STOPPED"|"STARTED", launchIntoSourceInstance?:bool, licensing?:array{osByol?:bool}, postLaunchEnabled?:bool, targetInstanceTypeRightSizingMethod?:"NONE"|"BASIC"|"IN_AWS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{launchConfigurationTemplate?:array{arn?:string, copyPrivateIp?:bool, copyTags?:bool, exportBucketArn?:string, launchConfigurationTemplateID?:string, launchDisposition?:"STOPPED"|"STARTED", launchIntoSourceInstance?:bool, licensing?:array{osByol?:bool}, postLaunchEnabled?:bool, tags?:array<string, string>, targetInstanceTypeRightSizingMethod?:"NONE"|"BASIC"|"IN_AWS"}}>
     */
    public function updateLaunchConfigurationTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{associateDefaultSecurityGroup?:bool, autoReplicateNewDisks?:bool, bandwidthThrottling?:int, createPublicIP?:bool, dataPlaneRouting?:"PRIVATE_IP"|"PUBLIC_IP", defaultLargeStagingDiskType?:"GP2"|"GP3"|"ST1"|"AUTO", ebsEncryption?:"DEFAULT"|"CUSTOM"|"NONE", ebsEncryptionKeyArn?:string, name?:string, pitPolicy?:array<array{enabled?:bool, interval:int, retentionDuration:int, ruleID?:int, units:"MINUTE"|"HOUR"|"DAY"}>, replicatedDisks?:array<array{deviceName?:string, iops?:int, isBootDisk?:bool, optimizedStagingDiskType?:"AUTO"|"GP2"|"GP3"|"IO1"|"SC1"|"ST1"|"STANDARD", stagingDiskType?:"AUTO"|"GP2"|"GP3"|"IO1"|"SC1"|"ST1"|"STANDARD", throughput?:int}>, replicationServerInstanceType?:string, replicationServersSecurityGroupsIDs?:array<string>, sourceServerID:string, stagingAreaSubnetId?:string, stagingAreaTags?:array<string, string>, useDedicatedReplicationServer?:bool} $args
     * @return \AWS\Result<array{associateDefaultSecurityGroup?:bool, autoReplicateNewDisks?:bool, bandwidthThrottling?:int, createPublicIP?:bool, dataPlaneRouting?:"PRIVATE_IP"|"PUBLIC_IP", defaultLargeStagingDiskType?:"GP2"|"GP3"|"ST1"|"AUTO", ebsEncryption?:"DEFAULT"|"CUSTOM"|"NONE", ebsEncryptionKeyArn?:string, name?:string, pitPolicy?:array<array{enabled?:bool, interval:int, retentionDuration:int, ruleID?:int, units:"MINUTE"|"HOUR"|"DAY"}>, replicatedDisks?:array<array{deviceName?:string, iops?:int, isBootDisk?:bool, optimizedStagingDiskType?:"AUTO"|"GP2"|"GP3"|"IO1"|"SC1"|"ST1"|"STANDARD", stagingDiskType?:"AUTO"|"GP2"|"GP3"|"IO1"|"SC1"|"ST1"|"STANDARD", throughput?:int}>, replicationServerInstanceType?:string, replicationServersSecurityGroupsIDs?:array<string>, sourceServerID?:string, stagingAreaSubnetId?:string, stagingAreaTags?:array<string, string>, useDedicatedReplicationServer?:bool}>
     */
    public function updateReplicationConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{associateDefaultSecurityGroup?:bool, autoReplicateNewDisks?:bool, bandwidthThrottling?:int, createPublicIP?:bool, dataPlaneRouting?:"PRIVATE_IP"|"PUBLIC_IP", defaultLargeStagingDiskType?:"GP2"|"GP3"|"ST1"|"AUTO", ebsEncryption?:"DEFAULT"|"CUSTOM"|"NONE", ebsEncryptionKeyArn?:string, name?:string, pitPolicy?:array<array{enabled?:bool, interval:int, retentionDuration:int, ruleID?:int, units:"MINUTE"|"HOUR"|"DAY"}>, replicatedDisks?:array<array{deviceName?:string, iops?:int, isBootDisk?:bool, optimizedStagingDiskType?:"AUTO"|"GP2"|"GP3"|"IO1"|"SC1"|"ST1"|"STANDARD", stagingDiskType?:"AUTO"|"GP2"|"GP3"|"IO1"|"SC1"|"ST1"|"STANDARD", throughput?:int}>, replicationServerInstanceType?:string, replicationServersSecurityGroupsIDs?:array<string>, sourceServerID:string, stagingAreaSubnetId?:string, stagingAreaTags?:array<string, string>, useDedicatedReplicationServer?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{associateDefaultSecurityGroup?:bool, autoReplicateNewDisks?:bool, bandwidthThrottling?:int, createPublicIP?:bool, dataPlaneRouting?:"PRIVATE_IP"|"PUBLIC_IP", defaultLargeStagingDiskType?:"GP2"|"GP3"|"ST1"|"AUTO", ebsEncryption?:"DEFAULT"|"CUSTOM"|"NONE", ebsEncryptionKeyArn?:string, name?:string, pitPolicy?:array<array{enabled?:bool, interval:int, retentionDuration:int, ruleID?:int, units:"MINUTE"|"HOUR"|"DAY"}>, replicatedDisks?:array<array{deviceName?:string, iops?:int, isBootDisk?:bool, optimizedStagingDiskType?:"AUTO"|"GP2"|"GP3"|"IO1"|"SC1"|"ST1"|"STANDARD", stagingDiskType?:"AUTO"|"GP2"|"GP3"|"IO1"|"SC1"|"ST1"|"STANDARD", throughput?:int}>, replicationServerInstanceType?:string, replicationServersSecurityGroupsIDs?:array<string>, sourceServerID?:string, stagingAreaSubnetId?:string, stagingAreaTags?:array<string, string>, useDedicatedReplicationServer?:bool}>
     */
    public function updateReplicationConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn?:string, associateDefaultSecurityGroup?:bool, autoReplicateNewDisks?:bool, bandwidthThrottling?:int, createPublicIP?:bool, dataPlaneRouting?:"PRIVATE_IP"|"PUBLIC_IP", defaultLargeStagingDiskType?:"GP2"|"GP3"|"ST1"|"AUTO", ebsEncryption?:"DEFAULT"|"CUSTOM"|"NONE", ebsEncryptionKeyArn?:string, pitPolicy?:array<array{enabled?:bool, interval:int, retentionDuration:int, ruleID?:int, units:"MINUTE"|"HOUR"|"DAY"}>, replicationConfigurationTemplateID:string, replicationServerInstanceType?:string, replicationServersSecurityGroupsIDs?:array<string>, stagingAreaSubnetId?:string, stagingAreaTags?:array<string, string>, useDedicatedReplicationServer?:bool} $args
     * @return \AWS\Result<array{arn?:string, associateDefaultSecurityGroup?:bool, autoReplicateNewDisks?:bool, bandwidthThrottling?:int, createPublicIP?:bool, dataPlaneRouting?:"PRIVATE_IP"|"PUBLIC_IP", defaultLargeStagingDiskType?:"GP2"|"GP3"|"ST1"|"AUTO", ebsEncryption?:"DEFAULT"|"CUSTOM"|"NONE", ebsEncryptionKeyArn?:string, pitPolicy?:array<array{enabled?:bool, interval:int, retentionDuration:int, ruleID?:int, units:"MINUTE"|"HOUR"|"DAY"}>, replicationConfigurationTemplateID:string, replicationServerInstanceType?:string, replicationServersSecurityGroupsIDs?:array<string>, stagingAreaSubnetId?:string, stagingAreaTags?:array<string, string>, tags?:array<string, string>, useDedicatedReplicationServer?:bool}>
     */
    public function updateReplicationConfigurationTemplate(array $args): \AWS\Result { }

    /**
     * @param array{arn?:string, associateDefaultSecurityGroup?:bool, autoReplicateNewDisks?:bool, bandwidthThrottling?:int, createPublicIP?:bool, dataPlaneRouting?:"PRIVATE_IP"|"PUBLIC_IP", defaultLargeStagingDiskType?:"GP2"|"GP3"|"ST1"|"AUTO", ebsEncryption?:"DEFAULT"|"CUSTOM"|"NONE", ebsEncryptionKeyArn?:string, pitPolicy?:array<array{enabled?:bool, interval:int, retentionDuration:int, ruleID?:int, units:"MINUTE"|"HOUR"|"DAY"}>, replicationConfigurationTemplateID:string, replicationServerInstanceType?:string, replicationServersSecurityGroupsIDs?:array<string>, stagingAreaSubnetId?:string, stagingAreaTags?:array<string, string>, useDedicatedReplicationServer?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, associateDefaultSecurityGroup?:bool, autoReplicateNewDisks?:bool, bandwidthThrottling?:int, createPublicIP?:bool, dataPlaneRouting?:"PRIVATE_IP"|"PUBLIC_IP", defaultLargeStagingDiskType?:"GP2"|"GP3"|"ST1"|"AUTO", ebsEncryption?:"DEFAULT"|"CUSTOM"|"NONE", ebsEncryptionKeyArn?:string, pitPolicy?:array<array{enabled?:bool, interval:int, retentionDuration:int, ruleID?:int, units:"MINUTE"|"HOUR"|"DAY"}>, replicationConfigurationTemplateID:string, replicationServerInstanceType?:string, replicationServersSecurityGroupsIDs?:array<string>, stagingAreaSubnetId?:string, stagingAreaTags?:array<string, string>, tags?:array<string, string>, useDedicatedReplicationServer?:bool}>
     */
    public function updateReplicationConfigurationTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
