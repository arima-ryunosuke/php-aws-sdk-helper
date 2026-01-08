<?php
namespace AWS\mgn;

class mgnClient
{
    /**
     * @param array{accountID?:string, applicationID:string} $args
     * @return \AWS\Result<array{applicationAggregatedStatus?:array{healthStatus?:"HEALTHY"|"LAGGING"|"ERROR", lastUpdateDateTime?:string, progressStatus?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETED", totalSourceServers?:int}, applicationID?:string, arn?:string, creationDateTime?:string, description?:string, isArchived?:bool, lastModifiedDateTime?:string, name?:string, tags?:array<string, string>, waveID?:string}>
     */
    public function archiveApplication(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, applicationID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationAggregatedStatus?:array{healthStatus?:"HEALTHY"|"LAGGING"|"ERROR", lastUpdateDateTime?:string, progressStatus?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETED", totalSourceServers?:int}, applicationID?:string, arn?:string, creationDateTime?:string, description?:string, isArchived?:bool, lastModifiedDateTime?:string, name?:string, tags?:array<string, string>, waveID?:string}>
     */
    public function archiveApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, waveID:string} $args
     * @return \AWS\Result<array{arn?:string, creationDateTime?:string, description?:string, isArchived?:bool, lastModifiedDateTime?:string, name?:string, tags?:array<string, string>, waveAggregatedStatus?:array{healthStatus?:"HEALTHY"|"LAGGING"|"ERROR", lastUpdateDateTime?:string, progressStatus?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETED", replicationStartedDateTime?:string, totalApplications?:int}, waveID?:string}>
     */
    public function archiveWave(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, waveID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, creationDateTime?:string, description?:string, isArchived?:bool, lastModifiedDateTime?:string, name?:string, tags?:array<string, string>, waveAggregatedStatus?:array{healthStatus?:"HEALTHY"|"LAGGING"|"ERROR", lastUpdateDateTime?:string, progressStatus?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETED", replicationStartedDateTime?:string, totalApplications?:int}, waveID?:string}>
     */
    public function archiveWaveAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, applicationIDs:array<string>, waveID:string} $args
     * @return \AWS\Result<array{}>
     */
    public function associateApplications(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, applicationIDs:array<string>, waveID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateApplicationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, applicationID:string, sourceServerIDs:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function associateSourceServers(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, applicationID:string, sourceServerIDs:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateSourceServersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, lifeCycle:array{state:"READY_FOR_TEST"|"READY_FOR_CUTOVER"|"CUTOVER"}, sourceServerID:string} $args
     * @return \AWS\Result<array{applicationID?:string, arn?:string, connectorAction?:array{connectorArn?:string, credentialsSecretArn?:string}, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER"|"UNSUPPORTED_VM_CONFIGURATION"|"LAST_SNAPSHOT_JOB_FAILED", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED"|"PENDING_SNAPSHOT_SHIPPING"|"SHIPPING_SNAPSHOT", etaDateTime?:string, lagDuration?:string, lastSnapshotDateTime?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int}>}, fqdnForActionFramework?:string, isArchived?:bool, launchedInstance?:array{ec2InstanceID?:string, firstBoot?:"WAITING"|"SUCCEEDED"|"UNKNOWN"|"STOPPED", jobID?:string}, lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastCutover?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, lastSeenByServiceDateTime?:string, lastTest?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, state?:"STOPPED"|"NOT_READY"|"READY_FOR_TEST"|"TESTING"|"READY_FOR_CUTOVER"|"CUTTING_OVER"|"CUTOVER"|"DISCONNECTED"|"DISCOVERED"|"PENDING_INSTALLATION"}, replicationType?:"AGENT_BASED"|"SNAPSHOT_SHIPPING", sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmPath?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string}, sourceServerID?:string, tags?:array<string, string>, userProvidedID?:string, vcenterClientID?:string}>
     */
    public function changeServerLifeCycleState(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, lifeCycle:array{state:"READY_FOR_TEST"|"READY_FOR_CUTOVER"|"CUTOVER"}, sourceServerID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationID?:string, arn?:string, connectorAction?:array{connectorArn?:string, credentialsSecretArn?:string}, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER"|"UNSUPPORTED_VM_CONFIGURATION"|"LAST_SNAPSHOT_JOB_FAILED", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED"|"PENDING_SNAPSHOT_SHIPPING"|"SHIPPING_SNAPSHOT", etaDateTime?:string, lagDuration?:string, lastSnapshotDateTime?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int}>}, fqdnForActionFramework?:string, isArchived?:bool, launchedInstance?:array{ec2InstanceID?:string, firstBoot?:"WAITING"|"SUCCEEDED"|"UNKNOWN"|"STOPPED", jobID?:string}, lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastCutover?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, lastSeenByServiceDateTime?:string, lastTest?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, state?:"STOPPED"|"NOT_READY"|"READY_FOR_TEST"|"TESTING"|"READY_FOR_CUTOVER"|"CUTTING_OVER"|"CUTOVER"|"DISCONNECTED"|"DISCOVERED"|"PENDING_INSTALLATION"}, replicationType?:"AGENT_BASED"|"SNAPSHOT_SHIPPING", sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmPath?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string}, sourceServerID?:string, tags?:array<string, string>, userProvidedID?:string, vcenterClientID?:string}>
     */
    public function changeServerLifeCycleStateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, description?:string, name:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{applicationAggregatedStatus?:array{healthStatus?:"HEALTHY"|"LAGGING"|"ERROR", lastUpdateDateTime?:string, progressStatus?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETED", totalSourceServers?:int}, applicationID?:string, arn?:string, creationDateTime?:string, description?:string, isArchived?:bool, lastModifiedDateTime?:string, name?:string, tags?:array<string, string>, waveID?:string}>
     */
    public function createApplication(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, description?:string, name:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationAggregatedStatus?:array{healthStatus?:"HEALTHY"|"LAGGING"|"ERROR", lastUpdateDateTime?:string, progressStatus?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETED", totalSourceServers?:int}, applicationID?:string, arn?:string, creationDateTime?:string, description?:string, isArchived?:bool, lastModifiedDateTime?:string, name?:string, tags?:array<string, string>, waveID?:string}>
     */
    public function createApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, ssmCommandConfig?:array{cloudWatchLogGroupName?:string, cloudWatchOutputEnabled:bool, outputS3BucketName?:string, s3OutputEnabled:bool}, ssmInstanceID:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{arn?:string, connectorID?:string, name?:string, ssmCommandConfig?:array{cloudWatchLogGroupName?:string, cloudWatchOutputEnabled:bool, outputS3BucketName?:string, s3OutputEnabled:bool}, ssmInstanceID?:string, tags?:array<string, string>}>
     */
    public function createConnector(array $args): \AWS\Result { }

    /**
     * @param array{name:string, ssmCommandConfig?:array{cloudWatchLogGroupName?:string, cloudWatchOutputEnabled:bool, outputS3BucketName?:string, s3OutputEnabled:bool}, ssmInstanceID:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, connectorID?:string, name?:string, ssmCommandConfig?:array{cloudWatchLogGroupName?:string, cloudWatchOutputEnabled:bool, outputS3BucketName?:string, s3OutputEnabled:bool}, ssmInstanceID?:string, tags?:array<string, string>}>
     */
    public function createConnectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{associatePublicIpAddress?:bool, bootMode?:"LEGACY_BIOS"|"UEFI"|"USE_SOURCE", copyPrivateIp?:bool, copyTags?:bool, enableMapAutoTagging?:bool, largeVolumeConf?:array{iops?:int, throughput?:int, volumeType?:"io1"|"io2"|"gp3"|"gp2"|"st1"|"sc1"|"standard"}, launchDisposition?:"STOPPED"|"STARTED", licensing?:array{osByol?:bool}, mapAutoTaggingMpeID?:string, postLaunchActions?:array{cloudWatchLogGroupName?:string, deployment?:"TEST_AND_CUTOVER"|"CUTOVER_ONLY"|"TEST_ONLY", s3LogBucket?:string, s3OutputKeyPrefix?:string, ssmDocuments?:array<array{actionName:string, externalParameters?:array<string, array{dynamicPath?:string}>, mustSucceedForCutover?:bool, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, ssmDocumentName:string, timeoutSeconds?:int}>}, smallVolumeConf?:array{iops?:int, throughput?:int, volumeType?:"io1"|"io2"|"gp3"|"gp2"|"st1"|"sc1"|"standard"}, smallVolumeMaxSize?:int, tags?:array<string, string>, targetInstanceTypeRightSizingMethod?:"NONE"|"BASIC"} $args
     * @return \AWS\Result<array{arn?:string, associatePublicIpAddress?:bool, bootMode?:"LEGACY_BIOS"|"UEFI"|"USE_SOURCE", copyPrivateIp?:bool, copyTags?:bool, ec2LaunchTemplateID?:string, enableMapAutoTagging?:bool, largeVolumeConf?:array{iops?:int, throughput?:int, volumeType?:"io1"|"io2"|"gp3"|"gp2"|"st1"|"sc1"|"standard"}, launchConfigurationTemplateID:string, launchDisposition?:"STOPPED"|"STARTED", licensing?:array{osByol?:bool}, mapAutoTaggingMpeID?:string, postLaunchActions?:array{cloudWatchLogGroupName?:string, deployment?:"TEST_AND_CUTOVER"|"CUTOVER_ONLY"|"TEST_ONLY", s3LogBucket?:string, s3OutputKeyPrefix?:string, ssmDocuments?:array<array{actionName:string, externalParameters?:array<string, array{dynamicPath?:string}>, mustSucceedForCutover?:bool, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, ssmDocumentName:string, timeoutSeconds?:int}>}, smallVolumeConf?:array{iops?:int, throughput?:int, volumeType?:"io1"|"io2"|"gp3"|"gp2"|"st1"|"sc1"|"standard"}, smallVolumeMaxSize?:int, tags?:array<string, string>, targetInstanceTypeRightSizingMethod?:"NONE"|"BASIC"}>
     */
    public function createLaunchConfigurationTemplate(array $args = []): \AWS\Result { }

    /**
     * @param array{associatePublicIpAddress?:bool, bootMode?:"LEGACY_BIOS"|"UEFI"|"USE_SOURCE", copyPrivateIp?:bool, copyTags?:bool, enableMapAutoTagging?:bool, largeVolumeConf?:array{iops?:int, throughput?:int, volumeType?:"io1"|"io2"|"gp3"|"gp2"|"st1"|"sc1"|"standard"}, launchDisposition?:"STOPPED"|"STARTED", licensing?:array{osByol?:bool}, mapAutoTaggingMpeID?:string, postLaunchActions?:array{cloudWatchLogGroupName?:string, deployment?:"TEST_AND_CUTOVER"|"CUTOVER_ONLY"|"TEST_ONLY", s3LogBucket?:string, s3OutputKeyPrefix?:string, ssmDocuments?:array<array{actionName:string, externalParameters?:array<string, array{dynamicPath?:string}>, mustSucceedForCutover?:bool, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, ssmDocumentName:string, timeoutSeconds?:int}>}, smallVolumeConf?:array{iops?:int, throughput?:int, volumeType?:"io1"|"io2"|"gp3"|"gp2"|"st1"|"sc1"|"standard"}, smallVolumeMaxSize?:int, tags?:array<string, string>, targetInstanceTypeRightSizingMethod?:"NONE"|"BASIC"} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, associatePublicIpAddress?:bool, bootMode?:"LEGACY_BIOS"|"UEFI"|"USE_SOURCE", copyPrivateIp?:bool, copyTags?:bool, ec2LaunchTemplateID?:string, enableMapAutoTagging?:bool, largeVolumeConf?:array{iops?:int, throughput?:int, volumeType?:"io1"|"io2"|"gp3"|"gp2"|"st1"|"sc1"|"standard"}, launchConfigurationTemplateID:string, launchDisposition?:"STOPPED"|"STARTED", licensing?:array{osByol?:bool}, mapAutoTaggingMpeID?:string, postLaunchActions?:array{cloudWatchLogGroupName?:string, deployment?:"TEST_AND_CUTOVER"|"CUTOVER_ONLY"|"TEST_ONLY", s3LogBucket?:string, s3OutputKeyPrefix?:string, ssmDocuments?:array<array{actionName:string, externalParameters?:array<string, array{dynamicPath?:string}>, mustSucceedForCutover?:bool, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, ssmDocumentName:string, timeoutSeconds?:int}>}, smallVolumeConf?:array{iops?:int, throughput?:int, volumeType?:"io1"|"io2"|"gp3"|"gp2"|"st1"|"sc1"|"standard"}, smallVolumeMaxSize?:int, tags?:array<string, string>, targetInstanceTypeRightSizingMethod?:"NONE"|"BASIC"}>
     */
    public function createLaunchConfigurationTemplateAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{associateDefaultSecurityGroup:bool, bandwidthThrottling:int, createPublicIP:bool, dataPlaneRouting:"PRIVATE_IP"|"PUBLIC_IP", defaultLargeStagingDiskType:"GP2"|"ST1"|"GP3", ebsEncryption:"DEFAULT"|"CUSTOM", ebsEncryptionKeyArn?:string, replicationServerInstanceType:string, replicationServersSecurityGroupsIDs:array<string>, stagingAreaSubnetId:string, stagingAreaTags:array<string, string>, tags?:array<string, string>, useDedicatedReplicationServer:bool, useFipsEndpoint?:bool} $args
     * @return \AWS\Result<array{arn?:string, associateDefaultSecurityGroup?:bool, bandwidthThrottling?:int, createPublicIP?:bool, dataPlaneRouting?:"PRIVATE_IP"|"PUBLIC_IP", defaultLargeStagingDiskType?:"GP2"|"ST1"|"GP3", ebsEncryption?:"DEFAULT"|"CUSTOM", ebsEncryptionKeyArn?:string, replicationConfigurationTemplateID:string, replicationServerInstanceType?:string, replicationServersSecurityGroupsIDs?:array<string>, stagingAreaSubnetId?:string, stagingAreaTags?:array<string, string>, tags?:array<string, string>, useDedicatedReplicationServer?:bool, useFipsEndpoint?:bool}>
     */
    public function createReplicationConfigurationTemplate(array $args): \AWS\Result { }

    /**
     * @param array{associateDefaultSecurityGroup:bool, bandwidthThrottling:int, createPublicIP:bool, dataPlaneRouting:"PRIVATE_IP"|"PUBLIC_IP", defaultLargeStagingDiskType:"GP2"|"ST1"|"GP3", ebsEncryption:"DEFAULT"|"CUSTOM", ebsEncryptionKeyArn?:string, replicationServerInstanceType:string, replicationServersSecurityGroupsIDs:array<string>, stagingAreaSubnetId:string, stagingAreaTags:array<string, string>, tags?:array<string, string>, useDedicatedReplicationServer:bool, useFipsEndpoint?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, associateDefaultSecurityGroup?:bool, bandwidthThrottling?:int, createPublicIP?:bool, dataPlaneRouting?:"PRIVATE_IP"|"PUBLIC_IP", defaultLargeStagingDiskType?:"GP2"|"ST1"|"GP3", ebsEncryption?:"DEFAULT"|"CUSTOM", ebsEncryptionKeyArn?:string, replicationConfigurationTemplateID:string, replicationServerInstanceType?:string, replicationServersSecurityGroupsIDs?:array<string>, stagingAreaSubnetId?:string, stagingAreaTags?:array<string, string>, tags?:array<string, string>, useDedicatedReplicationServer?:bool, useFipsEndpoint?:bool}>
     */
    public function createReplicationConfigurationTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, description?:string, name:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{arn?:string, creationDateTime?:string, description?:string, isArchived?:bool, lastModifiedDateTime?:string, name?:string, tags?:array<string, string>, waveAggregatedStatus?:array{healthStatus?:"HEALTHY"|"LAGGING"|"ERROR", lastUpdateDateTime?:string, progressStatus?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETED", replicationStartedDateTime?:string, totalApplications?:int}, waveID?:string}>
     */
    public function createWave(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, description?:string, name:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, creationDateTime?:string, description?:string, isArchived?:bool, lastModifiedDateTime?:string, name?:string, tags?:array<string, string>, waveAggregatedStatus?:array{healthStatus?:"HEALTHY"|"LAGGING"|"ERROR", lastUpdateDateTime?:string, progressStatus?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETED", replicationStartedDateTime?:string, totalApplications?:int}, waveID?:string}>
     */
    public function createWaveAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, applicationID:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteApplication(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, applicationID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectorID:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteConnector(array $args): \AWS\Result { }

    /**
     * @param array{connectorID:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteConnectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, jobID:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteJob(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, jobID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{accountID?:string, sourceServerID:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSourceServer(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, sourceServerID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteSourceServerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{vcenterClientID:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteVcenterClient(array $args): \AWS\Result { }

    /**
     * @param array{vcenterClientID:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteVcenterClientAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, waveID:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteWave(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, waveID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteWaveAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, jobID:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{items?:array<array{event?:"JOB_START"|"SERVER_SKIPPED"|"CLEANUP_START"|"CLEANUP_END"|"CLEANUP_FAIL"|"SNAPSHOT_START"|"SNAPSHOT_END"|"SNAPSHOT_FAIL"|"USING_PREVIOUS_SNAPSHOT"|"CONVERSION_START"|"CONVERSION_END"|"CONVERSION_FAIL"|"LAUNCH_START"|"LAUNCH_FAILED"|"JOB_CANCEL"|"JOB_END", eventData?:array{conversionServerID?:string, rawError?:string, sourceServerID?:string, targetInstanceID?:string}, logDateTime?:string}>, nextToken?:string}>
     */
    public function describeJobLogItems(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, jobID:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{event?:"JOB_START"|"SERVER_SKIPPED"|"CLEANUP_START"|"CLEANUP_END"|"CLEANUP_FAIL"|"SNAPSHOT_START"|"SNAPSHOT_END"|"SNAPSHOT_FAIL"|"USING_PREVIOUS_SNAPSHOT"|"CONVERSION_START"|"CONVERSION_END"|"CONVERSION_FAIL"|"LAUNCH_START"|"LAUNCH_FAILED"|"JOB_CANCEL"|"JOB_END", eventData?:array{conversionServerID?:string, rawError?:string, sourceServerID?:string, targetInstanceID?:string}, logDateTime?:string}>, nextToken?:string}>
     */
    public function describeJobLogItemsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, filters?:array{fromDate?:string, jobIDs?:array<string>, toDate?:string}, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{items?:array<array{arn?:string, creationDateTime?:string, endDateTime?:string, initiatedBy?:"START_TEST"|"START_CUTOVER"|"DIAGNOSTIC"|"TERMINATE", jobID:string, participatingServers?:array<array{launchStatus?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED", launchedEc2InstanceID?:string, postLaunchActionsStatus?:array{postLaunchActionsLaunchStatusList?:array<array{executionID?:string, executionStatus?:"IN_PROGRESS"|"SUCCESS"|"FAILED", failureReason?:string, ssmDocument?:array{actionName:string, externalParameters?:array<string, array{dynamicPath?:string}>, mustSucceedForCutover?:bool, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, ssmDocumentName:string, timeoutSeconds?:int}, ssmDocumentType?:"AUTOMATION"|"COMMAND"}>, ssmAgentDiscoveryDatetime?:string}, sourceServerID:string}>, status?:"PENDING"|"STARTED"|"COMPLETED", tags?:array<string, string>, type?:"LAUNCH"|"TERMINATE"}>, nextToken?:string}>
     */
    public function describeJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{accountID?:string, filters?:array{fromDate?:string, jobIDs?:array<string>, toDate?:string}, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{arn?:string, creationDateTime?:string, endDateTime?:string, initiatedBy?:"START_TEST"|"START_CUTOVER"|"DIAGNOSTIC"|"TERMINATE", jobID:string, participatingServers?:array<array{launchStatus?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED", launchedEc2InstanceID?:string, postLaunchActionsStatus?:array{postLaunchActionsLaunchStatusList?:array<array{executionID?:string, executionStatus?:"IN_PROGRESS"|"SUCCESS"|"FAILED", failureReason?:string, ssmDocument?:array{actionName:string, externalParameters?:array<string, array{dynamicPath?:string}>, mustSucceedForCutover?:bool, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, ssmDocumentName:string, timeoutSeconds?:int}, ssmDocumentType?:"AUTOMATION"|"COMMAND"}>, ssmAgentDiscoveryDatetime?:string}, sourceServerID:string}>, status?:"PENDING"|"STARTED"|"COMPLETED", tags?:array<string, string>, type?:"LAUNCH"|"TERMINATE"}>, nextToken?:string}>
     */
    public function describeJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{launchConfigurationTemplateIDs?:array<string>, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{items?:array<array{arn?:string, associatePublicIpAddress?:bool, bootMode?:"LEGACY_BIOS"|"UEFI"|"USE_SOURCE", copyPrivateIp?:bool, copyTags?:bool, ec2LaunchTemplateID?:string, enableMapAutoTagging?:bool, largeVolumeConf?:array{iops?:int, throughput?:int, volumeType?:"io1"|"io2"|"gp3"|"gp2"|"st1"|"sc1"|"standard"}, launchConfigurationTemplateID:string, launchDisposition?:"STOPPED"|"STARTED", licensing?:array{osByol?:bool}, mapAutoTaggingMpeID?:string, postLaunchActions?:array{cloudWatchLogGroupName?:string, deployment?:"TEST_AND_CUTOVER"|"CUTOVER_ONLY"|"TEST_ONLY", s3LogBucket?:string, s3OutputKeyPrefix?:string, ssmDocuments?:array<array{actionName:string, externalParameters?:array<string, array{dynamicPath?:string}>, mustSucceedForCutover?:bool, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, ssmDocumentName:string, timeoutSeconds?:int}>}, smallVolumeConf?:array{iops?:int, throughput?:int, volumeType?:"io1"|"io2"|"gp3"|"gp2"|"st1"|"sc1"|"standard"}, smallVolumeMaxSize?:int, tags?:array<string, string>, targetInstanceTypeRightSizingMethod?:"NONE"|"BASIC"}>, nextToken?:string}>
     */
    public function describeLaunchConfigurationTemplates(array $args = []): \AWS\Result { }

    /**
     * @param array{launchConfigurationTemplateIDs?:array<string>, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{arn?:string, associatePublicIpAddress?:bool, bootMode?:"LEGACY_BIOS"|"UEFI"|"USE_SOURCE", copyPrivateIp?:bool, copyTags?:bool, ec2LaunchTemplateID?:string, enableMapAutoTagging?:bool, largeVolumeConf?:array{iops?:int, throughput?:int, volumeType?:"io1"|"io2"|"gp3"|"gp2"|"st1"|"sc1"|"standard"}, launchConfigurationTemplateID:string, launchDisposition?:"STOPPED"|"STARTED", licensing?:array{osByol?:bool}, mapAutoTaggingMpeID?:string, postLaunchActions?:array{cloudWatchLogGroupName?:string, deployment?:"TEST_AND_CUTOVER"|"CUTOVER_ONLY"|"TEST_ONLY", s3LogBucket?:string, s3OutputKeyPrefix?:string, ssmDocuments?:array<array{actionName:string, externalParameters?:array<string, array{dynamicPath?:string}>, mustSucceedForCutover?:bool, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, ssmDocumentName:string, timeoutSeconds?:int}>}, smallVolumeConf?:array{iops?:int, throughput?:int, volumeType?:"io1"|"io2"|"gp3"|"gp2"|"st1"|"sc1"|"standard"}, smallVolumeMaxSize?:int, tags?:array<string, string>, targetInstanceTypeRightSizingMethod?:"NONE"|"BASIC"}>, nextToken?:string}>
     */
    public function describeLaunchConfigurationTemplatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, replicationConfigurationTemplateIDs?:array<string>} $args
     * @return \AWS\Result<array{items?:array<array{arn?:string, associateDefaultSecurityGroup?:bool, bandwidthThrottling?:int, createPublicIP?:bool, dataPlaneRouting?:"PRIVATE_IP"|"PUBLIC_IP", defaultLargeStagingDiskType?:"GP2"|"ST1"|"GP3", ebsEncryption?:"DEFAULT"|"CUSTOM", ebsEncryptionKeyArn?:string, replicationConfigurationTemplateID:string, replicationServerInstanceType?:string, replicationServersSecurityGroupsIDs?:array<string>, stagingAreaSubnetId?:string, stagingAreaTags?:array<string, string>, tags?:array<string, string>, useDedicatedReplicationServer?:bool, useFipsEndpoint?:bool}>, nextToken?:string}>
     */
    public function describeReplicationConfigurationTemplates(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, replicationConfigurationTemplateIDs?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{arn?:string, associateDefaultSecurityGroup?:bool, bandwidthThrottling?:int, createPublicIP?:bool, dataPlaneRouting?:"PRIVATE_IP"|"PUBLIC_IP", defaultLargeStagingDiskType?:"GP2"|"ST1"|"GP3", ebsEncryption?:"DEFAULT"|"CUSTOM", ebsEncryptionKeyArn?:string, replicationConfigurationTemplateID:string, replicationServerInstanceType?:string, replicationServersSecurityGroupsIDs?:array<string>, stagingAreaSubnetId?:string, stagingAreaTags?:array<string, string>, tags?:array<string, string>, useDedicatedReplicationServer?:bool, useFipsEndpoint?:bool}>, nextToken?:string}>
     */
    public function describeReplicationConfigurationTemplatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, filters?:array{applicationIDs?:array<string>, isArchived?:bool, lifeCycleStates?:array<"STOPPED"|"NOT_READY"|"READY_FOR_TEST"|"TESTING"|"READY_FOR_CUTOVER"|"CUTTING_OVER"|"CUTOVER"|"DISCONNECTED"|"DISCOVERED"|"PENDING_INSTALLATION">, replicationTypes?:array<"AGENT_BASED"|"SNAPSHOT_SHIPPING">, sourceServerIDs?:array<string>}, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{items?:array<array{applicationID?:string, arn?:string, connectorAction?:array{connectorArn?:string, credentialsSecretArn?:string}, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER"|"UNSUPPORTED_VM_CONFIGURATION"|"LAST_SNAPSHOT_JOB_FAILED", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED"|"PENDING_SNAPSHOT_SHIPPING"|"SHIPPING_SNAPSHOT", etaDateTime?:string, lagDuration?:string, lastSnapshotDateTime?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int}>}, fqdnForActionFramework?:string, isArchived?:bool, launchedInstance?:array{ec2InstanceID?:string, firstBoot?:"WAITING"|"SUCCEEDED"|"UNKNOWN"|"STOPPED", jobID?:string}, lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastCutover?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, lastSeenByServiceDateTime?:string, lastTest?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, state?:"STOPPED"|"NOT_READY"|"READY_FOR_TEST"|"TESTING"|"READY_FOR_CUTOVER"|"CUTTING_OVER"|"CUTOVER"|"DISCONNECTED"|"DISCOVERED"|"PENDING_INSTALLATION"}, replicationType?:"AGENT_BASED"|"SNAPSHOT_SHIPPING", sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmPath?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string}, sourceServerID?:string, tags?:array<string, string>, userProvidedID?:string, vcenterClientID?:string}>, nextToken?:string}>
     */
    public function describeSourceServers(array $args = []): \AWS\Result { }

    /**
     * @param array{accountID?:string, filters?:array{applicationIDs?:array<string>, isArchived?:bool, lifeCycleStates?:array<"STOPPED"|"NOT_READY"|"READY_FOR_TEST"|"TESTING"|"READY_FOR_CUTOVER"|"CUTTING_OVER"|"CUTOVER"|"DISCONNECTED"|"DISCOVERED"|"PENDING_INSTALLATION">, replicationTypes?:array<"AGENT_BASED"|"SNAPSHOT_SHIPPING">, sourceServerIDs?:array<string>}, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{applicationID?:string, arn?:string, connectorAction?:array{connectorArn?:string, credentialsSecretArn?:string}, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER"|"UNSUPPORTED_VM_CONFIGURATION"|"LAST_SNAPSHOT_JOB_FAILED", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED"|"PENDING_SNAPSHOT_SHIPPING"|"SHIPPING_SNAPSHOT", etaDateTime?:string, lagDuration?:string, lastSnapshotDateTime?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int}>}, fqdnForActionFramework?:string, isArchived?:bool, launchedInstance?:array{ec2InstanceID?:string, firstBoot?:"WAITING"|"SUCCEEDED"|"UNKNOWN"|"STOPPED", jobID?:string}, lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastCutover?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, lastSeenByServiceDateTime?:string, lastTest?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, state?:"STOPPED"|"NOT_READY"|"READY_FOR_TEST"|"TESTING"|"READY_FOR_CUTOVER"|"CUTTING_OVER"|"CUTOVER"|"DISCONNECTED"|"DISCOVERED"|"PENDING_INSTALLATION"}, replicationType?:"AGENT_BASED"|"SNAPSHOT_SHIPPING", sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmPath?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string}, sourceServerID?:string, tags?:array<string, string>, userProvidedID?:string, vcenterClientID?:string}>, nextToken?:string}>
     */
    public function describeSourceServersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{items?:array<array{arn?:string, datacenterName?:string, hostname?:string, lastSeenDatetime?:string, sourceServerTags?:array<string, string>, tags?:array<string, string>, vcenterClientID?:string, vcenterUUID?:string}>, nextToken?:string}>
     */
    public function describeVcenterClients(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{arn?:string, datacenterName?:string, hostname?:string, lastSeenDatetime?:string, sourceServerTags?:array<string, string>, tags?:array<string, string>, vcenterClientID?:string, vcenterUUID?:string}>, nextToken?:string}>
     */
    public function describeVcenterClientsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, applicationIDs:array<string>, waveID:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateApplications(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, applicationIDs:array<string>, waveID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateApplicationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, applicationID:string, sourceServerIDs:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateSourceServers(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, applicationID:string, sourceServerIDs:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateSourceServersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, sourceServerID:string} $args
     * @return \AWS\Result<array{applicationID?:string, arn?:string, connectorAction?:array{connectorArn?:string, credentialsSecretArn?:string}, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER"|"UNSUPPORTED_VM_CONFIGURATION"|"LAST_SNAPSHOT_JOB_FAILED", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED"|"PENDING_SNAPSHOT_SHIPPING"|"SHIPPING_SNAPSHOT", etaDateTime?:string, lagDuration?:string, lastSnapshotDateTime?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int}>}, fqdnForActionFramework?:string, isArchived?:bool, launchedInstance?:array{ec2InstanceID?:string, firstBoot?:"WAITING"|"SUCCEEDED"|"UNKNOWN"|"STOPPED", jobID?:string}, lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastCutover?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, lastSeenByServiceDateTime?:string, lastTest?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, state?:"STOPPED"|"NOT_READY"|"READY_FOR_TEST"|"TESTING"|"READY_FOR_CUTOVER"|"CUTTING_OVER"|"CUTOVER"|"DISCONNECTED"|"DISCOVERED"|"PENDING_INSTALLATION"}, replicationType?:"AGENT_BASED"|"SNAPSHOT_SHIPPING", sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmPath?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string}, sourceServerID?:string, tags?:array<string, string>, userProvidedID?:string, vcenterClientID?:string}>
     */
    public function disconnectFromService(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, sourceServerID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationID?:string, arn?:string, connectorAction?:array{connectorArn?:string, credentialsSecretArn?:string}, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER"|"UNSUPPORTED_VM_CONFIGURATION"|"LAST_SNAPSHOT_JOB_FAILED", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED"|"PENDING_SNAPSHOT_SHIPPING"|"SHIPPING_SNAPSHOT", etaDateTime?:string, lagDuration?:string, lastSnapshotDateTime?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int}>}, fqdnForActionFramework?:string, isArchived?:bool, launchedInstance?:array{ec2InstanceID?:string, firstBoot?:"WAITING"|"SUCCEEDED"|"UNKNOWN"|"STOPPED", jobID?:string}, lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastCutover?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, lastSeenByServiceDateTime?:string, lastTest?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, state?:"STOPPED"|"NOT_READY"|"READY_FOR_TEST"|"TESTING"|"READY_FOR_CUTOVER"|"CUTTING_OVER"|"CUTOVER"|"DISCONNECTED"|"DISCOVERED"|"PENDING_INSTALLATION"}, replicationType?:"AGENT_BASED"|"SNAPSHOT_SHIPPING", sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmPath?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string}, sourceServerID?:string, tags?:array<string, string>, userProvidedID?:string, vcenterClientID?:string}>
     */
    public function disconnectFromServiceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, sourceServerID:string} $args
     * @return \AWS\Result<array{applicationID?:string, arn?:string, connectorAction?:array{connectorArn?:string, credentialsSecretArn?:string}, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER"|"UNSUPPORTED_VM_CONFIGURATION"|"LAST_SNAPSHOT_JOB_FAILED", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED"|"PENDING_SNAPSHOT_SHIPPING"|"SHIPPING_SNAPSHOT", etaDateTime?:string, lagDuration?:string, lastSnapshotDateTime?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int}>}, fqdnForActionFramework?:string, isArchived?:bool, launchedInstance?:array{ec2InstanceID?:string, firstBoot?:"WAITING"|"SUCCEEDED"|"UNKNOWN"|"STOPPED", jobID?:string}, lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastCutover?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, lastSeenByServiceDateTime?:string, lastTest?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, state?:"STOPPED"|"NOT_READY"|"READY_FOR_TEST"|"TESTING"|"READY_FOR_CUTOVER"|"CUTTING_OVER"|"CUTOVER"|"DISCONNECTED"|"DISCOVERED"|"PENDING_INSTALLATION"}, replicationType?:"AGENT_BASED"|"SNAPSHOT_SHIPPING", sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmPath?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string}, sourceServerID?:string, tags?:array<string, string>, userProvidedID?:string, vcenterClientID?:string}>
     */
    public function finalizeCutover(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, sourceServerID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationID?:string, arn?:string, connectorAction?:array{connectorArn?:string, credentialsSecretArn?:string}, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER"|"UNSUPPORTED_VM_CONFIGURATION"|"LAST_SNAPSHOT_JOB_FAILED", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED"|"PENDING_SNAPSHOT_SHIPPING"|"SHIPPING_SNAPSHOT", etaDateTime?:string, lagDuration?:string, lastSnapshotDateTime?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int}>}, fqdnForActionFramework?:string, isArchived?:bool, launchedInstance?:array{ec2InstanceID?:string, firstBoot?:"WAITING"|"SUCCEEDED"|"UNKNOWN"|"STOPPED", jobID?:string}, lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastCutover?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, lastSeenByServiceDateTime?:string, lastTest?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, state?:"STOPPED"|"NOT_READY"|"READY_FOR_TEST"|"TESTING"|"READY_FOR_CUTOVER"|"CUTTING_OVER"|"CUTOVER"|"DISCONNECTED"|"DISCOVERED"|"PENDING_INSTALLATION"}, replicationType?:"AGENT_BASED"|"SNAPSHOT_SHIPPING", sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmPath?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string}, sourceServerID?:string, tags?:array<string, string>, userProvidedID?:string, vcenterClientID?:string}>
     */
    public function finalizeCutoverAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, sourceServerID:string} $args
     * @return \AWS\Result<array{bootMode?:"LEGACY_BIOS"|"UEFI"|"USE_SOURCE", copyPrivateIp?:bool, copyTags?:bool, ec2LaunchTemplateID?:string, enableMapAutoTagging?:bool, launchDisposition?:"STOPPED"|"STARTED", licensing?:array{osByol?:bool}, mapAutoTaggingMpeID?:string, name?:string, postLaunchActions?:array{cloudWatchLogGroupName?:string, deployment?:"TEST_AND_CUTOVER"|"CUTOVER_ONLY"|"TEST_ONLY", s3LogBucket?:string, s3OutputKeyPrefix?:string, ssmDocuments?:array<array{actionName:string, externalParameters?:array<string, array{dynamicPath?:string}>, mustSucceedForCutover?:bool, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, ssmDocumentName:string, timeoutSeconds?:int}>}, sourceServerID?:string, targetInstanceTypeRightSizingMethod?:"NONE"|"BASIC"}>
     */
    public function getLaunchConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, sourceServerID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{bootMode?:"LEGACY_BIOS"|"UEFI"|"USE_SOURCE", copyPrivateIp?:bool, copyTags?:bool, ec2LaunchTemplateID?:string, enableMapAutoTagging?:bool, launchDisposition?:"STOPPED"|"STARTED", licensing?:array{osByol?:bool}, mapAutoTaggingMpeID?:string, name?:string, postLaunchActions?:array{cloudWatchLogGroupName?:string, deployment?:"TEST_AND_CUTOVER"|"CUTOVER_ONLY"|"TEST_ONLY", s3LogBucket?:string, s3OutputKeyPrefix?:string, ssmDocuments?:array<array{actionName:string, externalParameters?:array<string, array{dynamicPath?:string}>, mustSucceedForCutover?:bool, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, ssmDocumentName:string, timeoutSeconds?:int}>}, sourceServerID?:string, targetInstanceTypeRightSizingMethod?:"NONE"|"BASIC"}>
     */
    public function getLaunchConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, sourceServerID:string} $args
     * @return \AWS\Result<array{associateDefaultSecurityGroup?:bool, bandwidthThrottling?:int, createPublicIP?:bool, dataPlaneRouting?:"PRIVATE_IP"|"PUBLIC_IP", defaultLargeStagingDiskType?:"GP2"|"ST1"|"GP3", ebsEncryption?:"DEFAULT"|"CUSTOM", ebsEncryptionKeyArn?:string, name?:string, replicatedDisks?:array<array{deviceName?:string, iops?:int, isBootDisk?:bool, stagingDiskType?:"AUTO"|"GP2"|"IO1"|"SC1"|"ST1"|"STANDARD"|"GP3"|"IO2", throughput?:int}>, replicationServerInstanceType?:string, replicationServersSecurityGroupsIDs?:array<string>, sourceServerID?:string, stagingAreaSubnetId?:string, stagingAreaTags?:array<string, string>, useDedicatedReplicationServer?:bool, useFipsEndpoint?:bool}>
     */
    public function getReplicationConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, sourceServerID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{associateDefaultSecurityGroup?:bool, bandwidthThrottling?:int, createPublicIP?:bool, dataPlaneRouting?:"PRIVATE_IP"|"PUBLIC_IP", defaultLargeStagingDiskType?:"GP2"|"ST1"|"GP3", ebsEncryption?:"DEFAULT"|"CUSTOM", ebsEncryptionKeyArn?:string, name?:string, replicatedDisks?:array<array{deviceName?:string, iops?:int, isBootDisk?:bool, stagingDiskType?:"AUTO"|"GP2"|"IO1"|"SC1"|"ST1"|"STANDARD"|"GP3"|"IO2", throughput?:int}>, replicationServerInstanceType?:string, replicationServersSecurityGroupsIDs?:array<string>, sourceServerID?:string, stagingAreaSubnetId?:string, stagingAreaTags?:array<string, string>, useDedicatedReplicationServer?:bool, useFipsEndpoint?:bool}>
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
     * @param array{accountID?:string, filters?:array{applicationIDs?:array<string>, isArchived?:bool, waveIDs?:array<string>}, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{items?:array<array{applicationAggregatedStatus?:array{healthStatus?:"HEALTHY"|"LAGGING"|"ERROR", lastUpdateDateTime?:string, progressStatus?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETED", totalSourceServers?:int}, applicationID?:string, arn?:string, creationDateTime?:string, description?:string, isArchived?:bool, lastModifiedDateTime?:string, name?:string, tags?:array<string, string>, waveID?:string}>, nextToken?:string}>
     */
    public function listApplications(array $args = []): \AWS\Result { }

    /**
     * @param array{accountID?:string, filters?:array{applicationIDs?:array<string>, isArchived?:bool, waveIDs?:array<string>}, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{applicationAggregatedStatus?:array{healthStatus?:"HEALTHY"|"LAGGING"|"ERROR", lastUpdateDateTime?:string, progressStatus?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETED", totalSourceServers?:int}, applicationID?:string, arn?:string, creationDateTime?:string, description?:string, isArchived?:bool, lastModifiedDateTime?:string, name?:string, tags?:array<string, string>, waveID?:string}>, nextToken?:string}>
     */
    public function listApplicationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filters?:array{connectorIDs?:array<string>}, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{items?:array<array{arn?:string, connectorID?:string, name?:string, ssmCommandConfig?:array{cloudWatchLogGroupName?:string, cloudWatchOutputEnabled:bool, outputS3BucketName?:string, s3OutputEnabled:bool}, ssmInstanceID?:string, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listConnectors(array $args = []): \AWS\Result { }

    /**
     * @param array{filters?:array{connectorIDs?:array<string>}, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{arn?:string, connectorID?:string, name?:string, ssmCommandConfig?:array{cloudWatchLogGroupName?:string, cloudWatchOutputEnabled:bool, outputS3BucketName?:string, s3OutputEnabled:bool}, ssmInstanceID?:string, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listConnectorsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{exportID:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{items?:array<array{errorData?:array{rawError?:string}, errorDateTime?:string}>, nextToken?:string}>
     */
    public function listExportErrors(array $args): \AWS\Result { }

    /**
     * @param array{exportID:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{errorData?:array{rawError?:string}, errorDateTime?:string}>, nextToken?:string}>
     */
    public function listExportErrorsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filters?:array{exportIDs?:array<string>}, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{items?:array<array{creationDateTime?:string, endDateTime?:string, exportID?:string, progressPercentage?:float, s3Bucket?:string, s3BucketOwner?:string, s3Key?:string, status?:"PENDING"|"STARTED"|"FAILED"|"SUCCEEDED", summary?:array{applicationsCount?:int, serversCount?:int, wavesCount?:int}}>, nextToken?:string}>
     */
    public function listExports(array $args = []): \AWS\Result { }

    /**
     * @param array{filters?:array{exportIDs?:array<string>}, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{creationDateTime?:string, endDateTime?:string, exportID?:string, progressPercentage?:float, s3Bucket?:string, s3BucketOwner?:string, s3Key?:string, status?:"PENDING"|"STARTED"|"FAILED"|"SUCCEEDED", summary?:array{applicationsCount?:int, serversCount?:int, wavesCount?:int}}>, nextToken?:string}>
     */
    public function listExportsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{importID:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{items?:array<array{errorData?:array{accountID?:string, applicationID?:string, ec2LaunchTemplateID?:string, rawError?:string, rowNumber?:int, sourceServerID?:string, waveID?:string}, errorDateTime?:string, errorType?:"VALIDATION_ERROR"|"PROCESSING_ERROR"}>, nextToken?:string}>
     */
    public function listImportErrors(array $args): \AWS\Result { }

    /**
     * @param array{importID:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{errorData?:array{accountID?:string, applicationID?:string, ec2LaunchTemplateID?:string, rawError?:string, rowNumber?:int, sourceServerID?:string, waveID?:string}, errorDateTime?:string, errorType?:"VALIDATION_ERROR"|"PROCESSING_ERROR"}>, nextToken?:string}>
     */
    public function listImportErrorsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filters?:array{importIDs?:array<string>}, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{items?:array<array{creationDateTime?:string, endDateTime?:string, importID?:string, progressPercentage?:float, s3BucketSource?:array{s3Bucket:string, s3BucketOwner?:string, s3Key:string}, status?:"PENDING"|"STARTED"|"FAILED"|"SUCCEEDED", summary?:array{applications?:array{createdCount?:int, modifiedCount?:int}, servers?:array{createdCount?:int, modifiedCount?:int}, waves?:array{createdCount?:int, modifiedCount?:int}}}>, nextToken?:string}>
     */
    public function listImports(array $args = []): \AWS\Result { }

    /**
     * @param array{filters?:array{importIDs?:array<string>}, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{creationDateTime?:string, endDateTime?:string, importID?:string, progressPercentage?:float, s3BucketSource?:array{s3Bucket:string, s3BucketOwner?:string, s3Key:string}, status?:"PENDING"|"STARTED"|"FAILED"|"SUCCEEDED", summary?:array{applications?:array{createdCount?:int, modifiedCount?:int}, servers?:array{createdCount?:int, modifiedCount?:int}, waves?:array{createdCount?:int, modifiedCount?:int}}}>, nextToken?:string}>
     */
    public function listImportsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{items:array<array{accountId?:string}>, nextToken?:string}>
     */
    public function listManagedAccounts(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items:array<array{accountId?:string}>, nextToken?:string}>
     */
    public function listManagedAccountsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, filters?:array{actionIDs?:array<string>}, maxResults?:int, nextToken?:string, sourceServerID:string} $args
     * @return \AWS\Result<array{items?:array<array{actionID?:string, actionName?:string, active?:bool, category?:"DISASTER_RECOVERY"|"OPERATING_SYSTEM"|"LICENSE_AND_SUBSCRIPTION"|"VALIDATION"|"OBSERVABILITY"|"REFACTORING"|"SECURITY"|"NETWORKING"|"CONFIGURATION"|"BACKUP"|"OTHER", description?:string, documentIdentifier?:string, documentVersion?:string, externalParameters?:array<string, array{dynamicPath?:string}>, mustSucceedForCutover?:bool, order?:int, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, timeoutSeconds?:int}>, nextToken?:string}>
     */
    public function listSourceServerActions(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, filters?:array{actionIDs?:array<string>}, maxResults?:int, nextToken?:string, sourceServerID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{actionID?:string, actionName?:string, active?:bool, category?:"DISASTER_RECOVERY"|"OPERATING_SYSTEM"|"LICENSE_AND_SUBSCRIPTION"|"VALIDATION"|"OBSERVABILITY"|"REFACTORING"|"SECURITY"|"NETWORKING"|"CONFIGURATION"|"BACKUP"|"OTHER", description?:string, documentIdentifier?:string, documentVersion?:string, externalParameters?:array<string, array{dynamicPath?:string}>, mustSucceedForCutover?:bool, order?:int, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, timeoutSeconds?:int}>, nextToken?:string}>
     */
    public function listSourceServerActionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{filters?:array{actionIDs?:array<string>}, launchConfigurationTemplateID:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{items?:array<array{actionID?:string, actionName?:string, active?:bool, category?:"DISASTER_RECOVERY"|"OPERATING_SYSTEM"|"LICENSE_AND_SUBSCRIPTION"|"VALIDATION"|"OBSERVABILITY"|"REFACTORING"|"SECURITY"|"NETWORKING"|"CONFIGURATION"|"BACKUP"|"OTHER", description?:string, documentIdentifier?:string, documentVersion?:string, externalParameters?:array<string, array{dynamicPath?:string}>, mustSucceedForCutover?:bool, operatingSystem?:string, order?:int, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, timeoutSeconds?:int}>, nextToken?:string}>
     */
    public function listTemplateActions(array $args): \AWS\Result { }

    /**
     * @param array{filters?:array{actionIDs?:array<string>}, launchConfigurationTemplateID:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{actionID?:string, actionName?:string, active?:bool, category?:"DISASTER_RECOVERY"|"OPERATING_SYSTEM"|"LICENSE_AND_SUBSCRIPTION"|"VALIDATION"|"OBSERVABILITY"|"REFACTORING"|"SECURITY"|"NETWORKING"|"CONFIGURATION"|"BACKUP"|"OTHER", description?:string, documentIdentifier?:string, documentVersion?:string, externalParameters?:array<string, array{dynamicPath?:string}>, mustSucceedForCutover?:bool, operatingSystem?:string, order?:int, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, timeoutSeconds?:int}>, nextToken?:string}>
     */
    public function listTemplateActionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, filters?:array{isArchived?:bool, waveIDs?:array<string>}, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{items?:array<array{arn?:string, creationDateTime?:string, description?:string, isArchived?:bool, lastModifiedDateTime?:string, name?:string, tags?:array<string, string>, waveAggregatedStatus?:array{healthStatus?:"HEALTHY"|"LAGGING"|"ERROR", lastUpdateDateTime?:string, progressStatus?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETED", replicationStartedDateTime?:string, totalApplications?:int}, waveID?:string}>, nextToken?:string}>
     */
    public function listWaves(array $args = []): \AWS\Result { }

    /**
     * @param array{accountID?:string, filters?:array{isArchived?:bool, waveIDs?:array<string>}, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{arn?:string, creationDateTime?:string, description?:string, isArchived?:bool, lastModifiedDateTime?:string, name?:string, tags?:array<string, string>, waveAggregatedStatus?:array{healthStatus?:"HEALTHY"|"LAGGING"|"ERROR", lastUpdateDateTime?:string, progressStatus?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETED", replicationStartedDateTime?:string, totalApplications?:int}, waveID?:string}>, nextToken?:string}>
     */
    public function listWavesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, sourceServerID:string} $args
     * @return \AWS\Result<array{applicationID?:string, arn?:string, connectorAction?:array{connectorArn?:string, credentialsSecretArn?:string}, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER"|"UNSUPPORTED_VM_CONFIGURATION"|"LAST_SNAPSHOT_JOB_FAILED", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED"|"PENDING_SNAPSHOT_SHIPPING"|"SHIPPING_SNAPSHOT", etaDateTime?:string, lagDuration?:string, lastSnapshotDateTime?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int}>}, fqdnForActionFramework?:string, isArchived?:bool, launchedInstance?:array{ec2InstanceID?:string, firstBoot?:"WAITING"|"SUCCEEDED"|"UNKNOWN"|"STOPPED", jobID?:string}, lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastCutover?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, lastSeenByServiceDateTime?:string, lastTest?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, state?:"STOPPED"|"NOT_READY"|"READY_FOR_TEST"|"TESTING"|"READY_FOR_CUTOVER"|"CUTTING_OVER"|"CUTOVER"|"DISCONNECTED"|"DISCOVERED"|"PENDING_INSTALLATION"}, replicationType?:"AGENT_BASED"|"SNAPSHOT_SHIPPING", sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmPath?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string}, sourceServerID?:string, tags?:array<string, string>, userProvidedID?:string, vcenterClientID?:string}>
     */
    public function markAsArchived(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, sourceServerID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationID?:string, arn?:string, connectorAction?:array{connectorArn?:string, credentialsSecretArn?:string}, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER"|"UNSUPPORTED_VM_CONFIGURATION"|"LAST_SNAPSHOT_JOB_FAILED", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED"|"PENDING_SNAPSHOT_SHIPPING"|"SHIPPING_SNAPSHOT", etaDateTime?:string, lagDuration?:string, lastSnapshotDateTime?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int}>}, fqdnForActionFramework?:string, isArchived?:bool, launchedInstance?:array{ec2InstanceID?:string, firstBoot?:"WAITING"|"SUCCEEDED"|"UNKNOWN"|"STOPPED", jobID?:string}, lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastCutover?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, lastSeenByServiceDateTime?:string, lastTest?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, state?:"STOPPED"|"NOT_READY"|"READY_FOR_TEST"|"TESTING"|"READY_FOR_CUTOVER"|"CUTTING_OVER"|"CUTOVER"|"DISCONNECTED"|"DISCOVERED"|"PENDING_INSTALLATION"}, replicationType?:"AGENT_BASED"|"SNAPSHOT_SHIPPING", sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmPath?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string}, sourceServerID?:string, tags?:array<string, string>, userProvidedID?:string, vcenterClientID?:string}>
     */
    public function markAsArchivedAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, sourceServerID:string} $args
     * @return \AWS\Result<array{applicationID?:string, arn?:string, connectorAction?:array{connectorArn?:string, credentialsSecretArn?:string}, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER"|"UNSUPPORTED_VM_CONFIGURATION"|"LAST_SNAPSHOT_JOB_FAILED", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED"|"PENDING_SNAPSHOT_SHIPPING"|"SHIPPING_SNAPSHOT", etaDateTime?:string, lagDuration?:string, lastSnapshotDateTime?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int}>}, fqdnForActionFramework?:string, isArchived?:bool, launchedInstance?:array{ec2InstanceID?:string, firstBoot?:"WAITING"|"SUCCEEDED"|"UNKNOWN"|"STOPPED", jobID?:string}, lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastCutover?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, lastSeenByServiceDateTime?:string, lastTest?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, state?:"STOPPED"|"NOT_READY"|"READY_FOR_TEST"|"TESTING"|"READY_FOR_CUTOVER"|"CUTTING_OVER"|"CUTOVER"|"DISCONNECTED"|"DISCOVERED"|"PENDING_INSTALLATION"}, replicationType?:"AGENT_BASED"|"SNAPSHOT_SHIPPING", sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmPath?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string}, sourceServerID?:string, tags?:array<string, string>, userProvidedID?:string, vcenterClientID?:string}>
     */
    public function pauseReplication(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, sourceServerID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationID?:string, arn?:string, connectorAction?:array{connectorArn?:string, credentialsSecretArn?:string}, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER"|"UNSUPPORTED_VM_CONFIGURATION"|"LAST_SNAPSHOT_JOB_FAILED", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED"|"PENDING_SNAPSHOT_SHIPPING"|"SHIPPING_SNAPSHOT", etaDateTime?:string, lagDuration?:string, lastSnapshotDateTime?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int}>}, fqdnForActionFramework?:string, isArchived?:bool, launchedInstance?:array{ec2InstanceID?:string, firstBoot?:"WAITING"|"SUCCEEDED"|"UNKNOWN"|"STOPPED", jobID?:string}, lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastCutover?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, lastSeenByServiceDateTime?:string, lastTest?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, state?:"STOPPED"|"NOT_READY"|"READY_FOR_TEST"|"TESTING"|"READY_FOR_CUTOVER"|"CUTTING_OVER"|"CUTOVER"|"DISCONNECTED"|"DISCOVERED"|"PENDING_INSTALLATION"}, replicationType?:"AGENT_BASED"|"SNAPSHOT_SHIPPING", sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmPath?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string}, sourceServerID?:string, tags?:array<string, string>, userProvidedID?:string, vcenterClientID?:string}>
     */
    public function pauseReplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, actionID:string, actionName:string, active?:bool, category?:"DISASTER_RECOVERY"|"OPERATING_SYSTEM"|"LICENSE_AND_SUBSCRIPTION"|"VALIDATION"|"OBSERVABILITY"|"REFACTORING"|"SECURITY"|"NETWORKING"|"CONFIGURATION"|"BACKUP"|"OTHER", description?:string, documentIdentifier:string, documentVersion?:string, externalParameters?:array<string, array{dynamicPath?:string}>, mustSucceedForCutover?:bool, order:int, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, sourceServerID:string, timeoutSeconds?:int} $args
     * @return \AWS\Result<array{actionID?:string, actionName?:string, active?:bool, category?:"DISASTER_RECOVERY"|"OPERATING_SYSTEM"|"LICENSE_AND_SUBSCRIPTION"|"VALIDATION"|"OBSERVABILITY"|"REFACTORING"|"SECURITY"|"NETWORKING"|"CONFIGURATION"|"BACKUP"|"OTHER", description?:string, documentIdentifier?:string, documentVersion?:string, externalParameters?:array<string, array{dynamicPath?:string}>, mustSucceedForCutover?:bool, order?:int, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, timeoutSeconds?:int}>
     */
    public function putSourceServerAction(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, actionID:string, actionName:string, active?:bool, category?:"DISASTER_RECOVERY"|"OPERATING_SYSTEM"|"LICENSE_AND_SUBSCRIPTION"|"VALIDATION"|"OBSERVABILITY"|"REFACTORING"|"SECURITY"|"NETWORKING"|"CONFIGURATION"|"BACKUP"|"OTHER", description?:string, documentIdentifier:string, documentVersion?:string, externalParameters?:array<string, array{dynamicPath?:string}>, mustSucceedForCutover?:bool, order:int, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, sourceServerID:string, timeoutSeconds?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{actionID?:string, actionName?:string, active?:bool, category?:"DISASTER_RECOVERY"|"OPERATING_SYSTEM"|"LICENSE_AND_SUBSCRIPTION"|"VALIDATION"|"OBSERVABILITY"|"REFACTORING"|"SECURITY"|"NETWORKING"|"CONFIGURATION"|"BACKUP"|"OTHER", description?:string, documentIdentifier?:string, documentVersion?:string, externalParameters?:array<string, array{dynamicPath?:string}>, mustSucceedForCutover?:bool, order?:int, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, timeoutSeconds?:int}>
     */
    public function putSourceServerActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{actionID:string, actionName:string, active?:bool, category?:"DISASTER_RECOVERY"|"OPERATING_SYSTEM"|"LICENSE_AND_SUBSCRIPTION"|"VALIDATION"|"OBSERVABILITY"|"REFACTORING"|"SECURITY"|"NETWORKING"|"CONFIGURATION"|"BACKUP"|"OTHER", description?:string, documentIdentifier:string, documentVersion?:string, externalParameters?:array<string, array{dynamicPath?:string}>, launchConfigurationTemplateID:string, mustSucceedForCutover?:bool, operatingSystem?:string, order:int, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, timeoutSeconds?:int} $args
     * @return \AWS\Result<array{actionID?:string, actionName?:string, active?:bool, category?:"DISASTER_RECOVERY"|"OPERATING_SYSTEM"|"LICENSE_AND_SUBSCRIPTION"|"VALIDATION"|"OBSERVABILITY"|"REFACTORING"|"SECURITY"|"NETWORKING"|"CONFIGURATION"|"BACKUP"|"OTHER", description?:string, documentIdentifier?:string, documentVersion?:string, externalParameters?:array<string, array{dynamicPath?:string}>, mustSucceedForCutover?:bool, operatingSystem?:string, order?:int, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, timeoutSeconds?:int}>
     */
    public function putTemplateAction(array $args): \AWS\Result { }

    /**
     * @param array{actionID:string, actionName:string, active?:bool, category?:"DISASTER_RECOVERY"|"OPERATING_SYSTEM"|"LICENSE_AND_SUBSCRIPTION"|"VALIDATION"|"OBSERVABILITY"|"REFACTORING"|"SECURITY"|"NETWORKING"|"CONFIGURATION"|"BACKUP"|"OTHER", description?:string, documentIdentifier:string, documentVersion?:string, externalParameters?:array<string, array{dynamicPath?:string}>, launchConfigurationTemplateID:string, mustSucceedForCutover?:bool, operatingSystem?:string, order:int, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, timeoutSeconds?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{actionID?:string, actionName?:string, active?:bool, category?:"DISASTER_RECOVERY"|"OPERATING_SYSTEM"|"LICENSE_AND_SUBSCRIPTION"|"VALIDATION"|"OBSERVABILITY"|"REFACTORING"|"SECURITY"|"NETWORKING"|"CONFIGURATION"|"BACKUP"|"OTHER", description?:string, documentIdentifier?:string, documentVersion?:string, externalParameters?:array<string, array{dynamicPath?:string}>, mustSucceedForCutover?:bool, operatingSystem?:string, order?:int, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, timeoutSeconds?:int}>
     */
    public function putTemplateActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, actionID:string, sourceServerID:string} $args
     * @return \AWS\Result<array{}>
     */
    public function removeSourceServerAction(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, actionID:string, sourceServerID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function removeSourceServerActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{actionID:string, launchConfigurationTemplateID:string} $args
     * @return \AWS\Result<array{}>
     */
    public function removeTemplateAction(array $args): \AWS\Result { }

    /**
     * @param array{actionID:string, launchConfigurationTemplateID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function removeTemplateActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, sourceServerID:string} $args
     * @return \AWS\Result<array{applicationID?:string, arn?:string, connectorAction?:array{connectorArn?:string, credentialsSecretArn?:string}, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER"|"UNSUPPORTED_VM_CONFIGURATION"|"LAST_SNAPSHOT_JOB_FAILED", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED"|"PENDING_SNAPSHOT_SHIPPING"|"SHIPPING_SNAPSHOT", etaDateTime?:string, lagDuration?:string, lastSnapshotDateTime?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int}>}, fqdnForActionFramework?:string, isArchived?:bool, launchedInstance?:array{ec2InstanceID?:string, firstBoot?:"WAITING"|"SUCCEEDED"|"UNKNOWN"|"STOPPED", jobID?:string}, lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastCutover?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, lastSeenByServiceDateTime?:string, lastTest?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, state?:"STOPPED"|"NOT_READY"|"READY_FOR_TEST"|"TESTING"|"READY_FOR_CUTOVER"|"CUTTING_OVER"|"CUTOVER"|"DISCONNECTED"|"DISCOVERED"|"PENDING_INSTALLATION"}, replicationType?:"AGENT_BASED"|"SNAPSHOT_SHIPPING", sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmPath?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string}, sourceServerID?:string, tags?:array<string, string>, userProvidedID?:string, vcenterClientID?:string}>
     */
    public function resumeReplication(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, sourceServerID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationID?:string, arn?:string, connectorAction?:array{connectorArn?:string, credentialsSecretArn?:string}, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER"|"UNSUPPORTED_VM_CONFIGURATION"|"LAST_SNAPSHOT_JOB_FAILED", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED"|"PENDING_SNAPSHOT_SHIPPING"|"SHIPPING_SNAPSHOT", etaDateTime?:string, lagDuration?:string, lastSnapshotDateTime?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int}>}, fqdnForActionFramework?:string, isArchived?:bool, launchedInstance?:array{ec2InstanceID?:string, firstBoot?:"WAITING"|"SUCCEEDED"|"UNKNOWN"|"STOPPED", jobID?:string}, lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastCutover?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, lastSeenByServiceDateTime?:string, lastTest?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, state?:"STOPPED"|"NOT_READY"|"READY_FOR_TEST"|"TESTING"|"READY_FOR_CUTOVER"|"CUTTING_OVER"|"CUTOVER"|"DISCONNECTED"|"DISCOVERED"|"PENDING_INSTALLATION"}, replicationType?:"AGENT_BASED"|"SNAPSHOT_SHIPPING", sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmPath?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string}, sourceServerID?:string, tags?:array<string, string>, userProvidedID?:string, vcenterClientID?:string}>
     */
    public function resumeReplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, sourceServerID:string} $args
     * @return \AWS\Result<array{applicationID?:string, arn?:string, connectorAction?:array{connectorArn?:string, credentialsSecretArn?:string}, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER"|"UNSUPPORTED_VM_CONFIGURATION"|"LAST_SNAPSHOT_JOB_FAILED", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED"|"PENDING_SNAPSHOT_SHIPPING"|"SHIPPING_SNAPSHOT", etaDateTime?:string, lagDuration?:string, lastSnapshotDateTime?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int}>}, fqdnForActionFramework?:string, isArchived?:bool, launchedInstance?:array{ec2InstanceID?:string, firstBoot?:"WAITING"|"SUCCEEDED"|"UNKNOWN"|"STOPPED", jobID?:string}, lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastCutover?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, lastSeenByServiceDateTime?:string, lastTest?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, state?:"STOPPED"|"NOT_READY"|"READY_FOR_TEST"|"TESTING"|"READY_FOR_CUTOVER"|"CUTTING_OVER"|"CUTOVER"|"DISCONNECTED"|"DISCOVERED"|"PENDING_INSTALLATION"}, replicationType?:"AGENT_BASED"|"SNAPSHOT_SHIPPING", sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmPath?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string}, sourceServerID?:string, tags?:array<string, string>, userProvidedID?:string, vcenterClientID?:string}>
     */
    public function retryDataReplication(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, sourceServerID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationID?:string, arn?:string, connectorAction?:array{connectorArn?:string, credentialsSecretArn?:string}, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER"|"UNSUPPORTED_VM_CONFIGURATION"|"LAST_SNAPSHOT_JOB_FAILED", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED"|"PENDING_SNAPSHOT_SHIPPING"|"SHIPPING_SNAPSHOT", etaDateTime?:string, lagDuration?:string, lastSnapshotDateTime?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int}>}, fqdnForActionFramework?:string, isArchived?:bool, launchedInstance?:array{ec2InstanceID?:string, firstBoot?:"WAITING"|"SUCCEEDED"|"UNKNOWN"|"STOPPED", jobID?:string}, lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastCutover?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, lastSeenByServiceDateTime?:string, lastTest?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, state?:"STOPPED"|"NOT_READY"|"READY_FOR_TEST"|"TESTING"|"READY_FOR_CUTOVER"|"CUTTING_OVER"|"CUTOVER"|"DISCONNECTED"|"DISCOVERED"|"PENDING_INSTALLATION"}, replicationType?:"AGENT_BASED"|"SNAPSHOT_SHIPPING", sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmPath?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string}, sourceServerID?:string, tags?:array<string, string>, userProvidedID?:string, vcenterClientID?:string}>
     */
    public function retryDataReplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, sourceServerIDs:array<string>, tags?:array<string, string>} $args
     * @return \AWS\Result<array{job?:array{arn?:string, creationDateTime?:string, endDateTime?:string, initiatedBy?:"START_TEST"|"START_CUTOVER"|"DIAGNOSTIC"|"TERMINATE", jobID:string, participatingServers?:array<array{launchStatus?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED", launchedEc2InstanceID?:string, postLaunchActionsStatus?:array{postLaunchActionsLaunchStatusList?:array<array{executionID?:string, executionStatus?:"IN_PROGRESS"|"SUCCESS"|"FAILED", failureReason?:string, ssmDocument?:array{actionName:string, externalParameters?:array<string, array{dynamicPath?:string}>, mustSucceedForCutover?:bool, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, ssmDocumentName:string, timeoutSeconds?:int}, ssmDocumentType?:"AUTOMATION"|"COMMAND"}>, ssmAgentDiscoveryDatetime?:string}, sourceServerID:string}>, status?:"PENDING"|"STARTED"|"COMPLETED", tags?:array<string, string>, type?:"LAUNCH"|"TERMINATE"}}>
     */
    public function startCutover(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, sourceServerIDs:array<string>, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{job?:array{arn?:string, creationDateTime?:string, endDateTime?:string, initiatedBy?:"START_TEST"|"START_CUTOVER"|"DIAGNOSTIC"|"TERMINATE", jobID:string, participatingServers?:array<array{launchStatus?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED", launchedEc2InstanceID?:string, postLaunchActionsStatus?:array{postLaunchActionsLaunchStatusList?:array<array{executionID?:string, executionStatus?:"IN_PROGRESS"|"SUCCESS"|"FAILED", failureReason?:string, ssmDocument?:array{actionName:string, externalParameters?:array<string, array{dynamicPath?:string}>, mustSucceedForCutover?:bool, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, ssmDocumentName:string, timeoutSeconds?:int}, ssmDocumentType?:"AUTOMATION"|"COMMAND"}>, ssmAgentDiscoveryDatetime?:string}, sourceServerID:string}>, status?:"PENDING"|"STARTED"|"COMPLETED", tags?:array<string, string>, type?:"LAUNCH"|"TERMINATE"}}>
     */
    public function startCutoverAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{s3Bucket:string, s3BucketOwner?:string, s3Key:string} $args
     * @return \AWS\Result<array{exportTask?:array{creationDateTime?:string, endDateTime?:string, exportID?:string, progressPercentage?:float, s3Bucket?:string, s3BucketOwner?:string, s3Key?:string, status?:"PENDING"|"STARTED"|"FAILED"|"SUCCEEDED", summary?:array{applicationsCount?:int, serversCount?:int, wavesCount?:int}}}>
     */
    public function startExport(array $args): \AWS\Result { }

    /**
     * @param array{s3Bucket:string, s3BucketOwner?:string, s3Key:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{exportTask?:array{creationDateTime?:string, endDateTime?:string, exportID?:string, progressPercentage?:float, s3Bucket?:string, s3BucketOwner?:string, s3Key?:string, status?:"PENDING"|"STARTED"|"FAILED"|"SUCCEEDED", summary?:array{applicationsCount?:int, serversCount?:int, wavesCount?:int}}}>
     */
    public function startExportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, s3BucketSource:array{s3Bucket:string, s3BucketOwner?:string, s3Key:string}} $args
     * @return \AWS\Result<array{importTask?:array{creationDateTime?:string, endDateTime?:string, importID?:string, progressPercentage?:float, s3BucketSource?:array{s3Bucket:string, s3BucketOwner?:string, s3Key:string}, status?:"PENDING"|"STARTED"|"FAILED"|"SUCCEEDED", summary?:array{applications?:array{createdCount?:int, modifiedCount?:int}, servers?:array{createdCount?:int, modifiedCount?:int}, waves?:array{createdCount?:int, modifiedCount?:int}}}}>
     */
    public function startImport(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, s3BucketSource:array{s3Bucket:string, s3BucketOwner?:string, s3Key:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{importTask?:array{creationDateTime?:string, endDateTime?:string, importID?:string, progressPercentage?:float, s3BucketSource?:array{s3Bucket:string, s3BucketOwner?:string, s3Key:string}, status?:"PENDING"|"STARTED"|"FAILED"|"SUCCEEDED", summary?:array{applications?:array{createdCount?:int, modifiedCount?:int}, servers?:array{createdCount?:int, modifiedCount?:int}, waves?:array{createdCount?:int, modifiedCount?:int}}}}>
     */
    public function startImportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, sourceServerID:string} $args
     * @return \AWS\Result<array{applicationID?:string, arn?:string, connectorAction?:array{connectorArn?:string, credentialsSecretArn?:string}, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER"|"UNSUPPORTED_VM_CONFIGURATION"|"LAST_SNAPSHOT_JOB_FAILED", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED"|"PENDING_SNAPSHOT_SHIPPING"|"SHIPPING_SNAPSHOT", etaDateTime?:string, lagDuration?:string, lastSnapshotDateTime?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int}>}, fqdnForActionFramework?:string, isArchived?:bool, launchedInstance?:array{ec2InstanceID?:string, firstBoot?:"WAITING"|"SUCCEEDED"|"UNKNOWN"|"STOPPED", jobID?:string}, lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastCutover?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, lastSeenByServiceDateTime?:string, lastTest?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, state?:"STOPPED"|"NOT_READY"|"READY_FOR_TEST"|"TESTING"|"READY_FOR_CUTOVER"|"CUTTING_OVER"|"CUTOVER"|"DISCONNECTED"|"DISCOVERED"|"PENDING_INSTALLATION"}, replicationType?:"AGENT_BASED"|"SNAPSHOT_SHIPPING", sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmPath?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string}, sourceServerID?:string, tags?:array<string, string>, userProvidedID?:string, vcenterClientID?:string}>
     */
    public function startReplication(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, sourceServerID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationID?:string, arn?:string, connectorAction?:array{connectorArn?:string, credentialsSecretArn?:string}, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER"|"UNSUPPORTED_VM_CONFIGURATION"|"LAST_SNAPSHOT_JOB_FAILED", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED"|"PENDING_SNAPSHOT_SHIPPING"|"SHIPPING_SNAPSHOT", etaDateTime?:string, lagDuration?:string, lastSnapshotDateTime?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int}>}, fqdnForActionFramework?:string, isArchived?:bool, launchedInstance?:array{ec2InstanceID?:string, firstBoot?:"WAITING"|"SUCCEEDED"|"UNKNOWN"|"STOPPED", jobID?:string}, lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastCutover?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, lastSeenByServiceDateTime?:string, lastTest?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, state?:"STOPPED"|"NOT_READY"|"READY_FOR_TEST"|"TESTING"|"READY_FOR_CUTOVER"|"CUTTING_OVER"|"CUTOVER"|"DISCONNECTED"|"DISCOVERED"|"PENDING_INSTALLATION"}, replicationType?:"AGENT_BASED"|"SNAPSHOT_SHIPPING", sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmPath?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string}, sourceServerID?:string, tags?:array<string, string>, userProvidedID?:string, vcenterClientID?:string}>
     */
    public function startReplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, sourceServerIDs:array<string>, tags?:array<string, string>} $args
     * @return \AWS\Result<array{job?:array{arn?:string, creationDateTime?:string, endDateTime?:string, initiatedBy?:"START_TEST"|"START_CUTOVER"|"DIAGNOSTIC"|"TERMINATE", jobID:string, participatingServers?:array<array{launchStatus?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED", launchedEc2InstanceID?:string, postLaunchActionsStatus?:array{postLaunchActionsLaunchStatusList?:array<array{executionID?:string, executionStatus?:"IN_PROGRESS"|"SUCCESS"|"FAILED", failureReason?:string, ssmDocument?:array{actionName:string, externalParameters?:array<string, array{dynamicPath?:string}>, mustSucceedForCutover?:bool, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, ssmDocumentName:string, timeoutSeconds?:int}, ssmDocumentType?:"AUTOMATION"|"COMMAND"}>, ssmAgentDiscoveryDatetime?:string}, sourceServerID:string}>, status?:"PENDING"|"STARTED"|"COMPLETED", tags?:array<string, string>, type?:"LAUNCH"|"TERMINATE"}}>
     */
    public function startTest(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, sourceServerIDs:array<string>, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{job?:array{arn?:string, creationDateTime?:string, endDateTime?:string, initiatedBy?:"START_TEST"|"START_CUTOVER"|"DIAGNOSTIC"|"TERMINATE", jobID:string, participatingServers?:array<array{launchStatus?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED", launchedEc2InstanceID?:string, postLaunchActionsStatus?:array{postLaunchActionsLaunchStatusList?:array<array{executionID?:string, executionStatus?:"IN_PROGRESS"|"SUCCESS"|"FAILED", failureReason?:string, ssmDocument?:array{actionName:string, externalParameters?:array<string, array{dynamicPath?:string}>, mustSucceedForCutover?:bool, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, ssmDocumentName:string, timeoutSeconds?:int}, ssmDocumentType?:"AUTOMATION"|"COMMAND"}>, ssmAgentDiscoveryDatetime?:string}, sourceServerID:string}>, status?:"PENDING"|"STARTED"|"COMPLETED", tags?:array<string, string>, type?:"LAUNCH"|"TERMINATE"}}>
     */
    public function startTestAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, sourceServerID:string} $args
     * @return \AWS\Result<array{applicationID?:string, arn?:string, connectorAction?:array{connectorArn?:string, credentialsSecretArn?:string}, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER"|"UNSUPPORTED_VM_CONFIGURATION"|"LAST_SNAPSHOT_JOB_FAILED", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED"|"PENDING_SNAPSHOT_SHIPPING"|"SHIPPING_SNAPSHOT", etaDateTime?:string, lagDuration?:string, lastSnapshotDateTime?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int}>}, fqdnForActionFramework?:string, isArchived?:bool, launchedInstance?:array{ec2InstanceID?:string, firstBoot?:"WAITING"|"SUCCEEDED"|"UNKNOWN"|"STOPPED", jobID?:string}, lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastCutover?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, lastSeenByServiceDateTime?:string, lastTest?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, state?:"STOPPED"|"NOT_READY"|"READY_FOR_TEST"|"TESTING"|"READY_FOR_CUTOVER"|"CUTTING_OVER"|"CUTOVER"|"DISCONNECTED"|"DISCOVERED"|"PENDING_INSTALLATION"}, replicationType?:"AGENT_BASED"|"SNAPSHOT_SHIPPING", sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmPath?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string}, sourceServerID?:string, tags?:array<string, string>, userProvidedID?:string, vcenterClientID?:string}>
     */
    public function stopReplication(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, sourceServerID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationID?:string, arn?:string, connectorAction?:array{connectorArn?:string, credentialsSecretArn?:string}, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER"|"UNSUPPORTED_VM_CONFIGURATION"|"LAST_SNAPSHOT_JOB_FAILED", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED"|"PENDING_SNAPSHOT_SHIPPING"|"SHIPPING_SNAPSHOT", etaDateTime?:string, lagDuration?:string, lastSnapshotDateTime?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int}>}, fqdnForActionFramework?:string, isArchived?:bool, launchedInstance?:array{ec2InstanceID?:string, firstBoot?:"WAITING"|"SUCCEEDED"|"UNKNOWN"|"STOPPED", jobID?:string}, lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastCutover?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, lastSeenByServiceDateTime?:string, lastTest?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, state?:"STOPPED"|"NOT_READY"|"READY_FOR_TEST"|"TESTING"|"READY_FOR_CUTOVER"|"CUTTING_OVER"|"CUTOVER"|"DISCONNECTED"|"DISCOVERED"|"PENDING_INSTALLATION"}, replicationType?:"AGENT_BASED"|"SNAPSHOT_SHIPPING", sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmPath?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string}, sourceServerID?:string, tags?:array<string, string>, userProvidedID?:string, vcenterClientID?:string}>
     */
    public function stopReplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{accountID?:string, sourceServerIDs:array<string>, tags?:array<string, string>} $args
     * @return \AWS\Result<array{job?:array{arn?:string, creationDateTime?:string, endDateTime?:string, initiatedBy?:"START_TEST"|"START_CUTOVER"|"DIAGNOSTIC"|"TERMINATE", jobID:string, participatingServers?:array<array{launchStatus?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED", launchedEc2InstanceID?:string, postLaunchActionsStatus?:array{postLaunchActionsLaunchStatusList?:array<array{executionID?:string, executionStatus?:"IN_PROGRESS"|"SUCCESS"|"FAILED", failureReason?:string, ssmDocument?:array{actionName:string, externalParameters?:array<string, array{dynamicPath?:string}>, mustSucceedForCutover?:bool, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, ssmDocumentName:string, timeoutSeconds?:int}, ssmDocumentType?:"AUTOMATION"|"COMMAND"}>, ssmAgentDiscoveryDatetime?:string}, sourceServerID:string}>, status?:"PENDING"|"STARTED"|"COMPLETED", tags?:array<string, string>, type?:"LAUNCH"|"TERMINATE"}}>
     */
    public function terminateTargetInstances(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, sourceServerIDs:array<string>, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{job?:array{arn?:string, creationDateTime?:string, endDateTime?:string, initiatedBy?:"START_TEST"|"START_CUTOVER"|"DIAGNOSTIC"|"TERMINATE", jobID:string, participatingServers?:array<array{launchStatus?:"PENDING"|"IN_PROGRESS"|"LAUNCHED"|"FAILED"|"TERMINATED", launchedEc2InstanceID?:string, postLaunchActionsStatus?:array{postLaunchActionsLaunchStatusList?:array<array{executionID?:string, executionStatus?:"IN_PROGRESS"|"SUCCESS"|"FAILED", failureReason?:string, ssmDocument?:array{actionName:string, externalParameters?:array<string, array{dynamicPath?:string}>, mustSucceedForCutover?:bool, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, ssmDocumentName:string, timeoutSeconds?:int}, ssmDocumentType?:"AUTOMATION"|"COMMAND"}>, ssmAgentDiscoveryDatetime?:string}, sourceServerID:string}>, status?:"PENDING"|"STARTED"|"COMPLETED", tags?:array<string, string>, type?:"LAUNCH"|"TERMINATE"}}>
     */
    public function terminateTargetInstancesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, applicationID:string} $args
     * @return \AWS\Result<array{applicationAggregatedStatus?:array{healthStatus?:"HEALTHY"|"LAGGING"|"ERROR", lastUpdateDateTime?:string, progressStatus?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETED", totalSourceServers?:int}, applicationID?:string, arn?:string, creationDateTime?:string, description?:string, isArchived?:bool, lastModifiedDateTime?:string, name?:string, tags?:array<string, string>, waveID?:string}>
     */
    public function unarchiveApplication(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, applicationID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationAggregatedStatus?:array{healthStatus?:"HEALTHY"|"LAGGING"|"ERROR", lastUpdateDateTime?:string, progressStatus?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETED", totalSourceServers?:int}, applicationID?:string, arn?:string, creationDateTime?:string, description?:string, isArchived?:bool, lastModifiedDateTime?:string, name?:string, tags?:array<string, string>, waveID?:string}>
     */
    public function unarchiveApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, waveID:string} $args
     * @return \AWS\Result<array{arn?:string, creationDateTime?:string, description?:string, isArchived?:bool, lastModifiedDateTime?:string, name?:string, tags?:array<string, string>, waveAggregatedStatus?:array{healthStatus?:"HEALTHY"|"LAGGING"|"ERROR", lastUpdateDateTime?:string, progressStatus?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETED", replicationStartedDateTime?:string, totalApplications?:int}, waveID?:string}>
     */
    public function unarchiveWave(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, waveID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, creationDateTime?:string, description?:string, isArchived?:bool, lastModifiedDateTime?:string, name?:string, tags?:array<string, string>, waveAggregatedStatus?:array{healthStatus?:"HEALTHY"|"LAGGING"|"ERROR", lastUpdateDateTime?:string, progressStatus?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETED", replicationStartedDateTime?:string, totalApplications?:int}, waveID?:string}>
     */
    public function unarchiveWaveAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{accountID?:string, applicationID:string, description?:string, name?:string} $args
     * @return \AWS\Result<array{applicationAggregatedStatus?:array{healthStatus?:"HEALTHY"|"LAGGING"|"ERROR", lastUpdateDateTime?:string, progressStatus?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETED", totalSourceServers?:int}, applicationID?:string, arn?:string, creationDateTime?:string, description?:string, isArchived?:bool, lastModifiedDateTime?:string, name?:string, tags?:array<string, string>, waveID?:string}>
     */
    public function updateApplication(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, applicationID:string, description?:string, name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationAggregatedStatus?:array{healthStatus?:"HEALTHY"|"LAGGING"|"ERROR", lastUpdateDateTime?:string, progressStatus?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETED", totalSourceServers?:int}, applicationID?:string, arn?:string, creationDateTime?:string, description?:string, isArchived?:bool, lastModifiedDateTime?:string, name?:string, tags?:array<string, string>, waveID?:string}>
     */
    public function updateApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectorID:string, name?:string, ssmCommandConfig?:array{cloudWatchLogGroupName?:string, cloudWatchOutputEnabled:bool, outputS3BucketName?:string, s3OutputEnabled:bool}} $args
     * @return \AWS\Result<array{arn?:string, connectorID?:string, name?:string, ssmCommandConfig?:array{cloudWatchLogGroupName?:string, cloudWatchOutputEnabled:bool, outputS3BucketName?:string, s3OutputEnabled:bool}, ssmInstanceID?:string, tags?:array<string, string>}>
     */
    public function updateConnector(array $args): \AWS\Result { }

    /**
     * @param array{connectorID:string, name?:string, ssmCommandConfig?:array{cloudWatchLogGroupName?:string, cloudWatchOutputEnabled:bool, outputS3BucketName?:string, s3OutputEnabled:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, connectorID?:string, name?:string, ssmCommandConfig?:array{cloudWatchLogGroupName?:string, cloudWatchOutputEnabled:bool, outputS3BucketName?:string, s3OutputEnabled:bool}, ssmInstanceID?:string, tags?:array<string, string>}>
     */
    public function updateConnectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, bootMode?:"LEGACY_BIOS"|"UEFI"|"USE_SOURCE", copyPrivateIp?:bool, copyTags?:bool, enableMapAutoTagging?:bool, launchDisposition?:"STOPPED"|"STARTED", licensing?:array{osByol?:bool}, mapAutoTaggingMpeID?:string, name?:string, postLaunchActions?:array{cloudWatchLogGroupName?:string, deployment?:"TEST_AND_CUTOVER"|"CUTOVER_ONLY"|"TEST_ONLY", s3LogBucket?:string, s3OutputKeyPrefix?:string, ssmDocuments?:array<array{actionName:string, externalParameters?:array<string, array{dynamicPath?:string}>, mustSucceedForCutover?:bool, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, ssmDocumentName:string, timeoutSeconds?:int}>}, sourceServerID:string, targetInstanceTypeRightSizingMethod?:"NONE"|"BASIC"} $args
     * @return \AWS\Result<array{bootMode?:"LEGACY_BIOS"|"UEFI"|"USE_SOURCE", copyPrivateIp?:bool, copyTags?:bool, ec2LaunchTemplateID?:string, enableMapAutoTagging?:bool, launchDisposition?:"STOPPED"|"STARTED", licensing?:array{osByol?:bool}, mapAutoTaggingMpeID?:string, name?:string, postLaunchActions?:array{cloudWatchLogGroupName?:string, deployment?:"TEST_AND_CUTOVER"|"CUTOVER_ONLY"|"TEST_ONLY", s3LogBucket?:string, s3OutputKeyPrefix?:string, ssmDocuments?:array<array{actionName:string, externalParameters?:array<string, array{dynamicPath?:string}>, mustSucceedForCutover?:bool, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, ssmDocumentName:string, timeoutSeconds?:int}>}, sourceServerID?:string, targetInstanceTypeRightSizingMethod?:"NONE"|"BASIC"}>
     */
    public function updateLaunchConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, bootMode?:"LEGACY_BIOS"|"UEFI"|"USE_SOURCE", copyPrivateIp?:bool, copyTags?:bool, enableMapAutoTagging?:bool, launchDisposition?:"STOPPED"|"STARTED", licensing?:array{osByol?:bool}, mapAutoTaggingMpeID?:string, name?:string, postLaunchActions?:array{cloudWatchLogGroupName?:string, deployment?:"TEST_AND_CUTOVER"|"CUTOVER_ONLY"|"TEST_ONLY", s3LogBucket?:string, s3OutputKeyPrefix?:string, ssmDocuments?:array<array{actionName:string, externalParameters?:array<string, array{dynamicPath?:string}>, mustSucceedForCutover?:bool, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, ssmDocumentName:string, timeoutSeconds?:int}>}, sourceServerID:string, targetInstanceTypeRightSizingMethod?:"NONE"|"BASIC"} $args
     * @return \GuzzleHttp\Promise\Promise<array{bootMode?:"LEGACY_BIOS"|"UEFI"|"USE_SOURCE", copyPrivateIp?:bool, copyTags?:bool, ec2LaunchTemplateID?:string, enableMapAutoTagging?:bool, launchDisposition?:"STOPPED"|"STARTED", licensing?:array{osByol?:bool}, mapAutoTaggingMpeID?:string, name?:string, postLaunchActions?:array{cloudWatchLogGroupName?:string, deployment?:"TEST_AND_CUTOVER"|"CUTOVER_ONLY"|"TEST_ONLY", s3LogBucket?:string, s3OutputKeyPrefix?:string, ssmDocuments?:array<array{actionName:string, externalParameters?:array<string, array{dynamicPath?:string}>, mustSucceedForCutover?:bool, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, ssmDocumentName:string, timeoutSeconds?:int}>}, sourceServerID?:string, targetInstanceTypeRightSizingMethod?:"NONE"|"BASIC"}>
     */
    public function updateLaunchConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{associatePublicIpAddress?:bool, bootMode?:"LEGACY_BIOS"|"UEFI"|"USE_SOURCE", copyPrivateIp?:bool, copyTags?:bool, enableMapAutoTagging?:bool, largeVolumeConf?:array{iops?:int, throughput?:int, volumeType?:"io1"|"io2"|"gp3"|"gp2"|"st1"|"sc1"|"standard"}, launchConfigurationTemplateID:string, launchDisposition?:"STOPPED"|"STARTED", licensing?:array{osByol?:bool}, mapAutoTaggingMpeID?:string, postLaunchActions?:array{cloudWatchLogGroupName?:string, deployment?:"TEST_AND_CUTOVER"|"CUTOVER_ONLY"|"TEST_ONLY", s3LogBucket?:string, s3OutputKeyPrefix?:string, ssmDocuments?:array<array{actionName:string, externalParameters?:array<string, array{dynamicPath?:string}>, mustSucceedForCutover?:bool, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, ssmDocumentName:string, timeoutSeconds?:int}>}, smallVolumeConf?:array{iops?:int, throughput?:int, volumeType?:"io1"|"io2"|"gp3"|"gp2"|"st1"|"sc1"|"standard"}, smallVolumeMaxSize?:int, targetInstanceTypeRightSizingMethod?:"NONE"|"BASIC"} $args
     * @return \AWS\Result<array{arn?:string, associatePublicIpAddress?:bool, bootMode?:"LEGACY_BIOS"|"UEFI"|"USE_SOURCE", copyPrivateIp?:bool, copyTags?:bool, ec2LaunchTemplateID?:string, enableMapAutoTagging?:bool, largeVolumeConf?:array{iops?:int, throughput?:int, volumeType?:"io1"|"io2"|"gp3"|"gp2"|"st1"|"sc1"|"standard"}, launchConfigurationTemplateID:string, launchDisposition?:"STOPPED"|"STARTED", licensing?:array{osByol?:bool}, mapAutoTaggingMpeID?:string, postLaunchActions?:array{cloudWatchLogGroupName?:string, deployment?:"TEST_AND_CUTOVER"|"CUTOVER_ONLY"|"TEST_ONLY", s3LogBucket?:string, s3OutputKeyPrefix?:string, ssmDocuments?:array<array{actionName:string, externalParameters?:array<string, array{dynamicPath?:string}>, mustSucceedForCutover?:bool, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, ssmDocumentName:string, timeoutSeconds?:int}>}, smallVolumeConf?:array{iops?:int, throughput?:int, volumeType?:"io1"|"io2"|"gp3"|"gp2"|"st1"|"sc1"|"standard"}, smallVolumeMaxSize?:int, tags?:array<string, string>, targetInstanceTypeRightSizingMethod?:"NONE"|"BASIC"}>
     */
    public function updateLaunchConfigurationTemplate(array $args): \AWS\Result { }

    /**
     * @param array{associatePublicIpAddress?:bool, bootMode?:"LEGACY_BIOS"|"UEFI"|"USE_SOURCE", copyPrivateIp?:bool, copyTags?:bool, enableMapAutoTagging?:bool, largeVolumeConf?:array{iops?:int, throughput?:int, volumeType?:"io1"|"io2"|"gp3"|"gp2"|"st1"|"sc1"|"standard"}, launchConfigurationTemplateID:string, launchDisposition?:"STOPPED"|"STARTED", licensing?:array{osByol?:bool}, mapAutoTaggingMpeID?:string, postLaunchActions?:array{cloudWatchLogGroupName?:string, deployment?:"TEST_AND_CUTOVER"|"CUTOVER_ONLY"|"TEST_ONLY", s3LogBucket?:string, s3OutputKeyPrefix?:string, ssmDocuments?:array<array{actionName:string, externalParameters?:array<string, array{dynamicPath?:string}>, mustSucceedForCutover?:bool, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, ssmDocumentName:string, timeoutSeconds?:int}>}, smallVolumeConf?:array{iops?:int, throughput?:int, volumeType?:"io1"|"io2"|"gp3"|"gp2"|"st1"|"sc1"|"standard"}, smallVolumeMaxSize?:int, targetInstanceTypeRightSizingMethod?:"NONE"|"BASIC"} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, associatePublicIpAddress?:bool, bootMode?:"LEGACY_BIOS"|"UEFI"|"USE_SOURCE", copyPrivateIp?:bool, copyTags?:bool, ec2LaunchTemplateID?:string, enableMapAutoTagging?:bool, largeVolumeConf?:array{iops?:int, throughput?:int, volumeType?:"io1"|"io2"|"gp3"|"gp2"|"st1"|"sc1"|"standard"}, launchConfigurationTemplateID:string, launchDisposition?:"STOPPED"|"STARTED", licensing?:array{osByol?:bool}, mapAutoTaggingMpeID?:string, postLaunchActions?:array{cloudWatchLogGroupName?:string, deployment?:"TEST_AND_CUTOVER"|"CUTOVER_ONLY"|"TEST_ONLY", s3LogBucket?:string, s3OutputKeyPrefix?:string, ssmDocuments?:array<array{actionName:string, externalParameters?:array<string, array{dynamicPath?:string}>, mustSucceedForCutover?:bool, parameters?:array<string, array<array{parameterName:string, parameterType:"STRING"}>>, ssmDocumentName:string, timeoutSeconds?:int}>}, smallVolumeConf?:array{iops?:int, throughput?:int, volumeType?:"io1"|"io2"|"gp3"|"gp2"|"st1"|"sc1"|"standard"}, smallVolumeMaxSize?:int, tags?:array<string, string>, targetInstanceTypeRightSizingMethod?:"NONE"|"BASIC"}>
     */
    public function updateLaunchConfigurationTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, associateDefaultSecurityGroup?:bool, bandwidthThrottling?:int, createPublicIP?:bool, dataPlaneRouting?:"PRIVATE_IP"|"PUBLIC_IP", defaultLargeStagingDiskType?:"GP2"|"ST1"|"GP3", ebsEncryption?:"DEFAULT"|"CUSTOM", ebsEncryptionKeyArn?:string, name?:string, replicatedDisks?:array<array{deviceName?:string, iops?:int, isBootDisk?:bool, stagingDiskType?:"AUTO"|"GP2"|"IO1"|"SC1"|"ST1"|"STANDARD"|"GP3"|"IO2", throughput?:int}>, replicationServerInstanceType?:string, replicationServersSecurityGroupsIDs?:array<string>, sourceServerID:string, stagingAreaSubnetId?:string, stagingAreaTags?:array<string, string>, useDedicatedReplicationServer?:bool, useFipsEndpoint?:bool} $args
     * @return \AWS\Result<array{associateDefaultSecurityGroup?:bool, bandwidthThrottling?:int, createPublicIP?:bool, dataPlaneRouting?:"PRIVATE_IP"|"PUBLIC_IP", defaultLargeStagingDiskType?:"GP2"|"ST1"|"GP3", ebsEncryption?:"DEFAULT"|"CUSTOM", ebsEncryptionKeyArn?:string, name?:string, replicatedDisks?:array<array{deviceName?:string, iops?:int, isBootDisk?:bool, stagingDiskType?:"AUTO"|"GP2"|"IO1"|"SC1"|"ST1"|"STANDARD"|"GP3"|"IO2", throughput?:int}>, replicationServerInstanceType?:string, replicationServersSecurityGroupsIDs?:array<string>, sourceServerID?:string, stagingAreaSubnetId?:string, stagingAreaTags?:array<string, string>, useDedicatedReplicationServer?:bool, useFipsEndpoint?:bool}>
     */
    public function updateReplicationConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, associateDefaultSecurityGroup?:bool, bandwidthThrottling?:int, createPublicIP?:bool, dataPlaneRouting?:"PRIVATE_IP"|"PUBLIC_IP", defaultLargeStagingDiskType?:"GP2"|"ST1"|"GP3", ebsEncryption?:"DEFAULT"|"CUSTOM", ebsEncryptionKeyArn?:string, name?:string, replicatedDisks?:array<array{deviceName?:string, iops?:int, isBootDisk?:bool, stagingDiskType?:"AUTO"|"GP2"|"IO1"|"SC1"|"ST1"|"STANDARD"|"GP3"|"IO2", throughput?:int}>, replicationServerInstanceType?:string, replicationServersSecurityGroupsIDs?:array<string>, sourceServerID:string, stagingAreaSubnetId?:string, stagingAreaTags?:array<string, string>, useDedicatedReplicationServer?:bool, useFipsEndpoint?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{associateDefaultSecurityGroup?:bool, bandwidthThrottling?:int, createPublicIP?:bool, dataPlaneRouting?:"PRIVATE_IP"|"PUBLIC_IP", defaultLargeStagingDiskType?:"GP2"|"ST1"|"GP3", ebsEncryption?:"DEFAULT"|"CUSTOM", ebsEncryptionKeyArn?:string, name?:string, replicatedDisks?:array<array{deviceName?:string, iops?:int, isBootDisk?:bool, stagingDiskType?:"AUTO"|"GP2"|"IO1"|"SC1"|"ST1"|"STANDARD"|"GP3"|"IO2", throughput?:int}>, replicationServerInstanceType?:string, replicationServersSecurityGroupsIDs?:array<string>, sourceServerID?:string, stagingAreaSubnetId?:string, stagingAreaTags?:array<string, string>, useDedicatedReplicationServer?:bool, useFipsEndpoint?:bool}>
     */
    public function updateReplicationConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn?:string, associateDefaultSecurityGroup?:bool, bandwidthThrottling?:int, createPublicIP?:bool, dataPlaneRouting?:"PRIVATE_IP"|"PUBLIC_IP", defaultLargeStagingDiskType?:"GP2"|"ST1"|"GP3", ebsEncryption?:"DEFAULT"|"CUSTOM", ebsEncryptionKeyArn?:string, replicationConfigurationTemplateID:string, replicationServerInstanceType?:string, replicationServersSecurityGroupsIDs?:array<string>, stagingAreaSubnetId?:string, stagingAreaTags?:array<string, string>, useDedicatedReplicationServer?:bool, useFipsEndpoint?:bool} $args
     * @return \AWS\Result<array{arn?:string, associateDefaultSecurityGroup?:bool, bandwidthThrottling?:int, createPublicIP?:bool, dataPlaneRouting?:"PRIVATE_IP"|"PUBLIC_IP", defaultLargeStagingDiskType?:"GP2"|"ST1"|"GP3", ebsEncryption?:"DEFAULT"|"CUSTOM", ebsEncryptionKeyArn?:string, replicationConfigurationTemplateID:string, replicationServerInstanceType?:string, replicationServersSecurityGroupsIDs?:array<string>, stagingAreaSubnetId?:string, stagingAreaTags?:array<string, string>, tags?:array<string, string>, useDedicatedReplicationServer?:bool, useFipsEndpoint?:bool}>
     */
    public function updateReplicationConfigurationTemplate(array $args): \AWS\Result { }

    /**
     * @param array{arn?:string, associateDefaultSecurityGroup?:bool, bandwidthThrottling?:int, createPublicIP?:bool, dataPlaneRouting?:"PRIVATE_IP"|"PUBLIC_IP", defaultLargeStagingDiskType?:"GP2"|"ST1"|"GP3", ebsEncryption?:"DEFAULT"|"CUSTOM", ebsEncryptionKeyArn?:string, replicationConfigurationTemplateID:string, replicationServerInstanceType?:string, replicationServersSecurityGroupsIDs?:array<string>, stagingAreaSubnetId?:string, stagingAreaTags?:array<string, string>, useDedicatedReplicationServer?:bool, useFipsEndpoint?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, associateDefaultSecurityGroup?:bool, bandwidthThrottling?:int, createPublicIP?:bool, dataPlaneRouting?:"PRIVATE_IP"|"PUBLIC_IP", defaultLargeStagingDiskType?:"GP2"|"ST1"|"GP3", ebsEncryption?:"DEFAULT"|"CUSTOM", ebsEncryptionKeyArn?:string, replicationConfigurationTemplateID:string, replicationServerInstanceType?:string, replicationServersSecurityGroupsIDs?:array<string>, stagingAreaSubnetId?:string, stagingAreaTags?:array<string, string>, tags?:array<string, string>, useDedicatedReplicationServer?:bool, useFipsEndpoint?:bool}>
     */
    public function updateReplicationConfigurationTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, connectorAction?:array{connectorArn?:string, credentialsSecretArn?:string}, sourceServerID:string} $args
     * @return \AWS\Result<array{applicationID?:string, arn?:string, connectorAction?:array{connectorArn?:string, credentialsSecretArn?:string}, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER"|"UNSUPPORTED_VM_CONFIGURATION"|"LAST_SNAPSHOT_JOB_FAILED", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED"|"PENDING_SNAPSHOT_SHIPPING"|"SHIPPING_SNAPSHOT", etaDateTime?:string, lagDuration?:string, lastSnapshotDateTime?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int}>}, fqdnForActionFramework?:string, isArchived?:bool, launchedInstance?:array{ec2InstanceID?:string, firstBoot?:"WAITING"|"SUCCEEDED"|"UNKNOWN"|"STOPPED", jobID?:string}, lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastCutover?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, lastSeenByServiceDateTime?:string, lastTest?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, state?:"STOPPED"|"NOT_READY"|"READY_FOR_TEST"|"TESTING"|"READY_FOR_CUTOVER"|"CUTTING_OVER"|"CUTOVER"|"DISCONNECTED"|"DISCOVERED"|"PENDING_INSTALLATION"}, replicationType?:"AGENT_BASED"|"SNAPSHOT_SHIPPING", sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmPath?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string}, sourceServerID?:string, tags?:array<string, string>, userProvidedID?:string, vcenterClientID?:string}>
     */
    public function updateSourceServer(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, connectorAction?:array{connectorArn?:string, credentialsSecretArn?:string}, sourceServerID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationID?:string, arn?:string, connectorAction?:array{connectorArn?:string, credentialsSecretArn?:string}, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER"|"UNSUPPORTED_VM_CONFIGURATION"|"LAST_SNAPSHOT_JOB_FAILED", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED"|"PENDING_SNAPSHOT_SHIPPING"|"SHIPPING_SNAPSHOT", etaDateTime?:string, lagDuration?:string, lastSnapshotDateTime?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int}>}, fqdnForActionFramework?:string, isArchived?:bool, launchedInstance?:array{ec2InstanceID?:string, firstBoot?:"WAITING"|"SUCCEEDED"|"UNKNOWN"|"STOPPED", jobID?:string}, lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastCutover?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, lastSeenByServiceDateTime?:string, lastTest?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, state?:"STOPPED"|"NOT_READY"|"READY_FOR_TEST"|"TESTING"|"READY_FOR_CUTOVER"|"CUTTING_OVER"|"CUTOVER"|"DISCONNECTED"|"DISCOVERED"|"PENDING_INSTALLATION"}, replicationType?:"AGENT_BASED"|"SNAPSHOT_SHIPPING", sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmPath?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string}, sourceServerID?:string, tags?:array<string, string>, userProvidedID?:string, vcenterClientID?:string}>
     */
    public function updateSourceServerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, replicationType:"AGENT_BASED"|"SNAPSHOT_SHIPPING", sourceServerID:string} $args
     * @return \AWS\Result<array{applicationID?:string, arn?:string, connectorAction?:array{connectorArn?:string, credentialsSecretArn?:string}, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER"|"UNSUPPORTED_VM_CONFIGURATION"|"LAST_SNAPSHOT_JOB_FAILED", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED"|"PENDING_SNAPSHOT_SHIPPING"|"SHIPPING_SNAPSHOT", etaDateTime?:string, lagDuration?:string, lastSnapshotDateTime?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int}>}, fqdnForActionFramework?:string, isArchived?:bool, launchedInstance?:array{ec2InstanceID?:string, firstBoot?:"WAITING"|"SUCCEEDED"|"UNKNOWN"|"STOPPED", jobID?:string}, lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastCutover?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, lastSeenByServiceDateTime?:string, lastTest?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, state?:"STOPPED"|"NOT_READY"|"READY_FOR_TEST"|"TESTING"|"READY_FOR_CUTOVER"|"CUTTING_OVER"|"CUTOVER"|"DISCONNECTED"|"DISCOVERED"|"PENDING_INSTALLATION"}, replicationType?:"AGENT_BASED"|"SNAPSHOT_SHIPPING", sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmPath?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string}, sourceServerID?:string, tags?:array<string, string>, userProvidedID?:string, vcenterClientID?:string}>
     */
    public function updateSourceServerReplicationType(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, replicationType:"AGENT_BASED"|"SNAPSHOT_SHIPPING", sourceServerID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationID?:string, arn?:string, connectorAction?:array{connectorArn?:string, credentialsSecretArn?:string}, dataReplicationInfo?:array{dataReplicationError?:array{error?:"AGENT_NOT_SEEN"|"SNAPSHOTS_FAILURE"|"NOT_CONVERGING"|"UNSTABLE_NETWORK"|"FAILED_TO_CREATE_SECURITY_GROUP"|"FAILED_TO_LAUNCH_REPLICATION_SERVER"|"FAILED_TO_BOOT_REPLICATION_SERVER"|"FAILED_TO_AUTHENTICATE_WITH_SERVICE"|"FAILED_TO_DOWNLOAD_REPLICATION_SOFTWARE"|"FAILED_TO_CREATE_STAGING_DISKS"|"FAILED_TO_ATTACH_STAGING_DISKS"|"FAILED_TO_PAIR_REPLICATION_SERVER_WITH_AGENT"|"FAILED_TO_CONNECT_AGENT_TO_REPLICATION_SERVER"|"FAILED_TO_START_DATA_TRANSFER"|"UNSUPPORTED_VM_CONFIGURATION"|"LAST_SNAPSHOT_JOB_FAILED", rawError?:string}, dataReplicationInitiation?:array{nextAttemptDateTime?:string, startDateTime?:string, steps?:array<array{name?:"WAIT"|"CREATE_SECURITY_GROUP"|"LAUNCH_REPLICATION_SERVER"|"BOOT_REPLICATION_SERVER"|"AUTHENTICATE_WITH_SERVICE"|"DOWNLOAD_REPLICATION_SOFTWARE"|"CREATE_STAGING_DISKS"|"ATTACH_STAGING_DISKS"|"PAIR_REPLICATION_SERVER_WITH_AGENT"|"CONNECT_AGENT_TO_REPLICATION_SERVER"|"START_DATA_TRANSFER", status?:"NOT_STARTED"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED"|"SKIPPED"}>}, dataReplicationState?:"STOPPED"|"INITIATING"|"INITIAL_SYNC"|"BACKLOG"|"CREATING_SNAPSHOT"|"CONTINUOUS"|"PAUSED"|"RESCAN"|"STALLED"|"DISCONNECTED"|"PENDING_SNAPSHOT_SHIPPING"|"SHIPPING_SNAPSHOT", etaDateTime?:string, lagDuration?:string, lastSnapshotDateTime?:string, replicatedDisks?:array<array{backloggedStorageBytes?:int, deviceName?:string, replicatedStorageBytes?:int, rescannedStorageBytes?:int, totalStorageBytes?:int}>}, fqdnForActionFramework?:string, isArchived?:bool, launchedInstance?:array{ec2InstanceID?:string, firstBoot?:"WAITING"|"SUCCEEDED"|"UNKNOWN"|"STOPPED", jobID?:string}, lifeCycle?:array{addedToServiceDateTime?:string, elapsedReplicationDuration?:string, firstByteDateTime?:string, lastCutover?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, lastSeenByServiceDateTime?:string, lastTest?:array{finalized?:array{apiCallDateTime?:string}, initiated?:array{apiCallDateTime?:string, jobID?:string}, reverted?:array{apiCallDateTime?:string}}, state?:"STOPPED"|"NOT_READY"|"READY_FOR_TEST"|"TESTING"|"READY_FOR_CUTOVER"|"CUTTING_OVER"|"CUTOVER"|"DISCONNECTED"|"DISCOVERED"|"PENDING_INSTALLATION"}, replicationType?:"AGENT_BASED"|"SNAPSHOT_SHIPPING", sourceProperties?:array{cpus?:array<array{cores?:int, modelName?:string}>, disks?:array<array{bytes?:int, deviceName?:string}>, identificationHints?:array{awsInstanceID?:string, fqdn?:string, hostname?:string, vmPath?:string, vmWareUuid?:string}, lastUpdatedDateTime?:string, networkInterfaces?:array<array{ips?:array<string>, isPrimary?:bool, macAddress?:string}>, os?:array{fullString?:string}, ramBytes?:int, recommendedInstanceType?:string}, sourceServerID?:string, tags?:array<string, string>, userProvidedID?:string, vcenterClientID?:string}>
     */
    public function updateSourceServerReplicationTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountID?:string, description?:string, name?:string, waveID:string} $args
     * @return \AWS\Result<array{arn?:string, creationDateTime?:string, description?:string, isArchived?:bool, lastModifiedDateTime?:string, name?:string, tags?:array<string, string>, waveAggregatedStatus?:array{healthStatus?:"HEALTHY"|"LAGGING"|"ERROR", lastUpdateDateTime?:string, progressStatus?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETED", replicationStartedDateTime?:string, totalApplications?:int}, waveID?:string}>
     */
    public function updateWave(array $args): \AWS\Result { }

    /**
     * @param array{accountID?:string, description?:string, name?:string, waveID:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, creationDateTime?:string, description?:string, isArchived?:bool, lastModifiedDateTime?:string, name?:string, tags?:array<string, string>, waveAggregatedStatus?:array{healthStatus?:"HEALTHY"|"LAGGING"|"ERROR", lastUpdateDateTime?:string, progressStatus?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETED", replicationStartedDateTime?:string, totalApplications?:int}, waveID?:string}>
     */
    public function updateWaveAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
