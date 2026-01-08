<?php
namespace AWS\Sms;

class SmsClient
{
    /**
     * @param array{name?:string, description?:string, roleName?:string, clientToken?:string, serverGroups?:array<array{serverGroupId?:string, name?:string, serverList?:array<array{serverId?:string, serverType?:"VIRTUAL_MACHINE", vmServer?:array{vmServerAddress?:array{vmManagerId?:string, vmId?:string}, vmName?:string, vmManagerName?:string, vmManagerType?:"VSPHERE"|"SCVMM"|"HYPERV-MANAGER", vmPath?:string}, replicationJobId?:string, replicationJobTerminated?:bool}>}>, tags?:array<array{key?:string, value?:string}>} $args
     * @return \AWS\Result<array{appSummary?:array{appId?:string, importedAppId?:string, name?:string, description?:string, status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"DELETED"|"DELETE_FAILED", statusMessage?:string, replicationConfigurationStatus?:"NOT_CONFIGURED"|"CONFIGURED", replicationStatus?:"READY_FOR_CONFIGURATION"|"CONFIGURATION_IN_PROGRESS"|"CONFIGURATION_INVALID"|"READY_FOR_REPLICATION"|"VALIDATION_IN_PROGRESS"|"REPLICATION_PENDING"|"REPLICATION_IN_PROGRESS"|"REPLICATED"|"PARTIALLY_REPLICATED"|"DELTA_REPLICATION_IN_PROGRESS"|"DELTA_REPLICATED"|"DELTA_REPLICATION_FAILED"|"REPLICATION_FAILED"|"REPLICATION_STOPPING"|"REPLICATION_STOP_FAILED"|"REPLICATION_STOPPED", replicationStatusMessage?:string, latestReplicationTime?:int|string|\DateTimeInterface, launchConfigurationStatus?:"NOT_CONFIGURED"|"CONFIGURED", launchStatus?:"READY_FOR_CONFIGURATION"|"CONFIGURATION_IN_PROGRESS"|"CONFIGURATION_INVALID"|"READY_FOR_LAUNCH"|"VALIDATION_IN_PROGRESS"|"LAUNCH_PENDING"|"LAUNCH_IN_PROGRESS"|"LAUNCHED"|"PARTIALLY_LAUNCHED"|"DELTA_LAUNCH_IN_PROGRESS"|"DELTA_LAUNCH_FAILED"|"LAUNCH_FAILED"|"TERMINATE_IN_PROGRESS"|"TERMINATE_FAILED"|"TERMINATED", launchStatusMessage?:string, launchDetails?:array{latestLaunchTime?:int|string|\DateTimeInterface, stackName?:string, stackId?:string}, creationTime?:int|string|\DateTimeInterface, lastModified?:int|string|\DateTimeInterface, roleName?:string, totalServerGroups?:int, totalServers?:int}, serverGroups?:array<array{serverGroupId?:string, name?:string, serverList?:array<array{serverId?:string, serverType?:"VIRTUAL_MACHINE", vmServer?:array{vmServerAddress?:array{vmManagerId?:string, vmId?:string}, vmName?:string, vmManagerName?:string, vmManagerType?:"VSPHERE"|"SCVMM"|"HYPERV-MANAGER", vmPath?:string}, replicationJobId?:string, replicationJobTerminated?:bool}>}>, tags?:array<array{key?:string, value?:string}>}>
     */
    public function createApp(array $args = []): \AWS\Result { }

    /**
     * @param array{name?:string, description?:string, roleName?:string, clientToken?:string, serverGroups?:array<array{serverGroupId?:string, name?:string, serverList?:array<array{serverId?:string, serverType?:"VIRTUAL_MACHINE", vmServer?:array{vmServerAddress?:array{vmManagerId?:string, vmId?:string}, vmName?:string, vmManagerName?:string, vmManagerType?:"VSPHERE"|"SCVMM"|"HYPERV-MANAGER", vmPath?:string}, replicationJobId?:string, replicationJobTerminated?:bool}>}>, tags?:array<array{key?:string, value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{appSummary?:array{appId?:string, importedAppId?:string, name?:string, description?:string, status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"DELETED"|"DELETE_FAILED", statusMessage?:string, replicationConfigurationStatus?:"NOT_CONFIGURED"|"CONFIGURED", replicationStatus?:"READY_FOR_CONFIGURATION"|"CONFIGURATION_IN_PROGRESS"|"CONFIGURATION_INVALID"|"READY_FOR_REPLICATION"|"VALIDATION_IN_PROGRESS"|"REPLICATION_PENDING"|"REPLICATION_IN_PROGRESS"|"REPLICATED"|"PARTIALLY_REPLICATED"|"DELTA_REPLICATION_IN_PROGRESS"|"DELTA_REPLICATED"|"DELTA_REPLICATION_FAILED"|"REPLICATION_FAILED"|"REPLICATION_STOPPING"|"REPLICATION_STOP_FAILED"|"REPLICATION_STOPPED", replicationStatusMessage?:string, latestReplicationTime?:int|string|\DateTimeInterface, launchConfigurationStatus?:"NOT_CONFIGURED"|"CONFIGURED", launchStatus?:"READY_FOR_CONFIGURATION"|"CONFIGURATION_IN_PROGRESS"|"CONFIGURATION_INVALID"|"READY_FOR_LAUNCH"|"VALIDATION_IN_PROGRESS"|"LAUNCH_PENDING"|"LAUNCH_IN_PROGRESS"|"LAUNCHED"|"PARTIALLY_LAUNCHED"|"DELTA_LAUNCH_IN_PROGRESS"|"DELTA_LAUNCH_FAILED"|"LAUNCH_FAILED"|"TERMINATE_IN_PROGRESS"|"TERMINATE_FAILED"|"TERMINATED", launchStatusMessage?:string, launchDetails?:array{latestLaunchTime?:int|string|\DateTimeInterface, stackName?:string, stackId?:string}, creationTime?:int|string|\DateTimeInterface, lastModified?:int|string|\DateTimeInterface, roleName?:string, totalServerGroups?:int, totalServers?:int}, serverGroups?:array<array{serverGroupId?:string, name?:string, serverList?:array<array{serverId?:string, serverType?:"VIRTUAL_MACHINE", vmServer?:array{vmServerAddress?:array{vmManagerId?:string, vmId?:string}, vmName?:string, vmManagerName?:string, vmManagerType?:"VSPHERE"|"SCVMM"|"HYPERV-MANAGER", vmPath?:string}, replicationJobId?:string, replicationJobTerminated?:bool}>}>, tags?:array<array{key?:string, value?:string}>}>
     */
    public function createAppAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{serverId:string, seedReplicationTime:int|string|\DateTimeInterface, frequency?:int, runOnce?:bool, licenseType?:"AWS"|"BYOL", roleName?:string, description?:string, numberOfRecentAmisToKeep?:int, encrypted?:bool, kmsKeyId?:string} $args
     * @return \AWS\Result<array{replicationJobId?:string}>
     */
    public function createReplicationJob(array $args): \AWS\Result { }

    /**
     * @param array{serverId:string, seedReplicationTime:int|string|\DateTimeInterface, frequency?:int, runOnce?:bool, licenseType?:"AWS"|"BYOL", roleName?:string, description?:string, numberOfRecentAmisToKeep?:int, encrypted?:bool, kmsKeyId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{replicationJobId?:string}>
     */
    public function createReplicationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId?:string, forceStopAppReplication?:bool, forceTerminateApp?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteApp(array $args = []): \AWS\Result { }

    /**
     * @param array{appId?:string, forceStopAppReplication?:bool, forceTerminateApp?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAppAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAppLaunchConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{appId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAppLaunchConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAppReplicationConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{appId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAppReplicationConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAppValidationConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{appId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAppValidationConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{replicationJobId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteReplicationJob(array $args): \AWS\Result { }

    /**
     * @param array{replicationJobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteReplicationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteServerCatalog(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteServerCatalogAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectorId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateConnector(array $args): \AWS\Result { }

    /**
     * @param array{connectorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateConnectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId?:string, changesetFormat?:"JSON"|"YAML"} $args
     * @return \AWS\Result<array{s3Location?:array{bucket?:string, key?:string}}>
     */
    public function generateChangeSet(array $args = []): \AWS\Result { }

    /**
     * @param array{appId?:string, changesetFormat?:"JSON"|"YAML"} $args
     * @return \GuzzleHttp\Promise\Promise<array{s3Location?:array{bucket?:string, key?:string}}>
     */
    public function generateChangeSetAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId?:string, templateFormat?:"JSON"|"YAML"} $args
     * @return \AWS\Result<array{s3Location?:array{bucket?:string, key?:string}}>
     */
    public function generateTemplate(array $args = []): \AWS\Result { }

    /**
     * @param array{appId?:string, templateFormat?:"JSON"|"YAML"} $args
     * @return \GuzzleHttp\Promise\Promise<array{s3Location?:array{bucket?:string, key?:string}}>
     */
    public function generateTemplateAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId?:string} $args
     * @return \AWS\Result<array{appSummary?:array{appId?:string, importedAppId?:string, name?:string, description?:string, status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"DELETED"|"DELETE_FAILED", statusMessage?:string, replicationConfigurationStatus?:"NOT_CONFIGURED"|"CONFIGURED", replicationStatus?:"READY_FOR_CONFIGURATION"|"CONFIGURATION_IN_PROGRESS"|"CONFIGURATION_INVALID"|"READY_FOR_REPLICATION"|"VALIDATION_IN_PROGRESS"|"REPLICATION_PENDING"|"REPLICATION_IN_PROGRESS"|"REPLICATED"|"PARTIALLY_REPLICATED"|"DELTA_REPLICATION_IN_PROGRESS"|"DELTA_REPLICATED"|"DELTA_REPLICATION_FAILED"|"REPLICATION_FAILED"|"REPLICATION_STOPPING"|"REPLICATION_STOP_FAILED"|"REPLICATION_STOPPED", replicationStatusMessage?:string, latestReplicationTime?:int|string|\DateTimeInterface, launchConfigurationStatus?:"NOT_CONFIGURED"|"CONFIGURED", launchStatus?:"READY_FOR_CONFIGURATION"|"CONFIGURATION_IN_PROGRESS"|"CONFIGURATION_INVALID"|"READY_FOR_LAUNCH"|"VALIDATION_IN_PROGRESS"|"LAUNCH_PENDING"|"LAUNCH_IN_PROGRESS"|"LAUNCHED"|"PARTIALLY_LAUNCHED"|"DELTA_LAUNCH_IN_PROGRESS"|"DELTA_LAUNCH_FAILED"|"LAUNCH_FAILED"|"TERMINATE_IN_PROGRESS"|"TERMINATE_FAILED"|"TERMINATED", launchStatusMessage?:string, launchDetails?:array{latestLaunchTime?:int|string|\DateTimeInterface, stackName?:string, stackId?:string}, creationTime?:int|string|\DateTimeInterface, lastModified?:int|string|\DateTimeInterface, roleName?:string, totalServerGroups?:int, totalServers?:int}, serverGroups?:array<array{serverGroupId?:string, name?:string, serverList?:array<array{serverId?:string, serverType?:"VIRTUAL_MACHINE", vmServer?:array{vmServerAddress?:array{vmManagerId?:string, vmId?:string}, vmName?:string, vmManagerName?:string, vmManagerType?:"VSPHERE"|"SCVMM"|"HYPERV-MANAGER", vmPath?:string}, replicationJobId?:string, replicationJobTerminated?:bool}>}>, tags?:array<array{key?:string, value?:string}>}>
     */
    public function getApp(array $args = []): \AWS\Result { }

    /**
     * @param array{appId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{appSummary?:array{appId?:string, importedAppId?:string, name?:string, description?:string, status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"DELETED"|"DELETE_FAILED", statusMessage?:string, replicationConfigurationStatus?:"NOT_CONFIGURED"|"CONFIGURED", replicationStatus?:"READY_FOR_CONFIGURATION"|"CONFIGURATION_IN_PROGRESS"|"CONFIGURATION_INVALID"|"READY_FOR_REPLICATION"|"VALIDATION_IN_PROGRESS"|"REPLICATION_PENDING"|"REPLICATION_IN_PROGRESS"|"REPLICATED"|"PARTIALLY_REPLICATED"|"DELTA_REPLICATION_IN_PROGRESS"|"DELTA_REPLICATED"|"DELTA_REPLICATION_FAILED"|"REPLICATION_FAILED"|"REPLICATION_STOPPING"|"REPLICATION_STOP_FAILED"|"REPLICATION_STOPPED", replicationStatusMessage?:string, latestReplicationTime?:int|string|\DateTimeInterface, launchConfigurationStatus?:"NOT_CONFIGURED"|"CONFIGURED", launchStatus?:"READY_FOR_CONFIGURATION"|"CONFIGURATION_IN_PROGRESS"|"CONFIGURATION_INVALID"|"READY_FOR_LAUNCH"|"VALIDATION_IN_PROGRESS"|"LAUNCH_PENDING"|"LAUNCH_IN_PROGRESS"|"LAUNCHED"|"PARTIALLY_LAUNCHED"|"DELTA_LAUNCH_IN_PROGRESS"|"DELTA_LAUNCH_FAILED"|"LAUNCH_FAILED"|"TERMINATE_IN_PROGRESS"|"TERMINATE_FAILED"|"TERMINATED", launchStatusMessage?:string, launchDetails?:array{latestLaunchTime?:int|string|\DateTimeInterface, stackName?:string, stackId?:string}, creationTime?:int|string|\DateTimeInterface, lastModified?:int|string|\DateTimeInterface, roleName?:string, totalServerGroups?:int, totalServers?:int}, serverGroups?:array<array{serverGroupId?:string, name?:string, serverList?:array<array{serverId?:string, serverType?:"VIRTUAL_MACHINE", vmServer?:array{vmServerAddress?:array{vmManagerId?:string, vmId?:string}, vmName?:string, vmManagerName?:string, vmManagerType?:"VSPHERE"|"SCVMM"|"HYPERV-MANAGER", vmPath?:string}, replicationJobId?:string, replicationJobTerminated?:bool}>}>, tags?:array<array{key?:string, value?:string}>}>
     */
    public function getAppAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId?:string} $args
     * @return \AWS\Result<array{appId?:string, roleName?:string, autoLaunch?:bool, serverGroupLaunchConfigurations?:array<array{serverGroupId?:string, launchOrder?:int, serverLaunchConfigurations?:array<array{server?:array{serverId?:string, serverType?:"VIRTUAL_MACHINE", vmServer?:array{vmServerAddress?:array{vmManagerId?:string, vmId?:string}, vmName?:string, vmManagerName?:string, vmManagerType?:"VSPHERE"|"SCVMM"|"HYPERV-MANAGER", vmPath?:string}, replicationJobId?:string, replicationJobTerminated?:bool}, logicalId?:string, vpc?:string, subnet?:string, securityGroup?:string, ec2KeyName?:string, userData?:array{s3Location?:array{bucket?:string, key?:string}}, instanceType?:string, associatePublicIpAddress?:bool, iamInstanceProfileName?:string, configureScript?:array{bucket?:string, key?:string}, configureScriptType?:"SHELL_SCRIPT"|"POWERSHELL_SCRIPT"}>}>}>
     */
    public function getAppLaunchConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{appId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{appId?:string, roleName?:string, autoLaunch?:bool, serverGroupLaunchConfigurations?:array<array{serverGroupId?:string, launchOrder?:int, serverLaunchConfigurations?:array<array{server?:array{serverId?:string, serverType?:"VIRTUAL_MACHINE", vmServer?:array{vmServerAddress?:array{vmManagerId?:string, vmId?:string}, vmName?:string, vmManagerName?:string, vmManagerType?:"VSPHERE"|"SCVMM"|"HYPERV-MANAGER", vmPath?:string}, replicationJobId?:string, replicationJobTerminated?:bool}, logicalId?:string, vpc?:string, subnet?:string, securityGroup?:string, ec2KeyName?:string, userData?:array{s3Location?:array{bucket?:string, key?:string}}, instanceType?:string, associatePublicIpAddress?:bool, iamInstanceProfileName?:string, configureScript?:array{bucket?:string, key?:string}, configureScriptType?:"SHELL_SCRIPT"|"POWERSHELL_SCRIPT"}>}>}>
     */
    public function getAppLaunchConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId?:string} $args
     * @return \AWS\Result<array{serverGroupReplicationConfigurations?:array<array{serverGroupId?:string, serverReplicationConfigurations?:array<array{server?:array{serverId?:string, serverType?:"VIRTUAL_MACHINE", vmServer?:array{vmServerAddress?:array{vmManagerId?:string, vmId?:string}, vmName?:string, vmManagerName?:string, vmManagerType?:"VSPHERE"|"SCVMM"|"HYPERV-MANAGER", vmPath?:string}, replicationJobId?:string, replicationJobTerminated?:bool}, serverReplicationParameters?:array{seedTime?:int|string|\DateTimeInterface, frequency?:int, runOnce?:bool, licenseType?:"AWS"|"BYOL", numberOfRecentAmisToKeep?:int, encrypted?:bool, kmsKeyId?:string}}>}>}>
     */
    public function getAppReplicationConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{appId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{serverGroupReplicationConfigurations?:array<array{serverGroupId?:string, serverReplicationConfigurations?:array<array{server?:array{serverId?:string, serverType?:"VIRTUAL_MACHINE", vmServer?:array{vmServerAddress?:array{vmManagerId?:string, vmId?:string}, vmName?:string, vmManagerName?:string, vmManagerType?:"VSPHERE"|"SCVMM"|"HYPERV-MANAGER", vmPath?:string}, replicationJobId?:string, replicationJobTerminated?:bool}, serverReplicationParameters?:array{seedTime?:int|string|\DateTimeInterface, frequency?:int, runOnce?:bool, licenseType?:"AWS"|"BYOL", numberOfRecentAmisToKeep?:int, encrypted?:bool, kmsKeyId?:string}}>}>}>
     */
    public function getAppReplicationConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId:string} $args
     * @return \AWS\Result<array{appValidationConfigurations?:array<array{validationId?:string, name?:string, appValidationStrategy?:"SSM", ssmValidationParameters?:array{source?:array{s3Location?:array{bucket?:string, key?:string}}, instanceId?:string, scriptType?:"SHELL_SCRIPT"|"POWERSHELL_SCRIPT", command?:string, executionTimeoutSeconds?:int, outputS3BucketName?:string}}>, serverGroupValidationConfigurations?:array<array{serverGroupId?:string, serverValidationConfigurations?:array<array{server?:array{serverId?:string, serverType?:"VIRTUAL_MACHINE", vmServer?:array{vmServerAddress?:array{vmManagerId?:string, vmId?:string}, vmName?:string, vmManagerName?:string, vmManagerType?:"VSPHERE"|"SCVMM"|"HYPERV-MANAGER", vmPath?:string}, replicationJobId?:string, replicationJobTerminated?:bool}, validationId?:string, name?:string, serverValidationStrategy?:"USERDATA", userDataValidationParameters?:array{source?:array{s3Location?:array{bucket?:string, key?:string}}, scriptType?:"SHELL_SCRIPT"|"POWERSHELL_SCRIPT"}}>}>}>
     */
    public function getAppValidationConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{appId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{appValidationConfigurations?:array<array{validationId?:string, name?:string, appValidationStrategy?:"SSM", ssmValidationParameters?:array{source?:array{s3Location?:array{bucket?:string, key?:string}}, instanceId?:string, scriptType?:"SHELL_SCRIPT"|"POWERSHELL_SCRIPT", command?:string, executionTimeoutSeconds?:int, outputS3BucketName?:string}}>, serverGroupValidationConfigurations?:array<array{serverGroupId?:string, serverValidationConfigurations?:array<array{server?:array{serverId?:string, serverType?:"VIRTUAL_MACHINE", vmServer?:array{vmServerAddress?:array{vmManagerId?:string, vmId?:string}, vmName?:string, vmManagerName?:string, vmManagerType?:"VSPHERE"|"SCVMM"|"HYPERV-MANAGER", vmPath?:string}, replicationJobId?:string, replicationJobTerminated?:bool}, validationId?:string, name?:string, serverValidationStrategy?:"USERDATA", userDataValidationParameters?:array{source?:array{s3Location?:array{bucket?:string, key?:string}}, scriptType?:"SHELL_SCRIPT"|"POWERSHELL_SCRIPT"}}>}>}>
     */
    public function getAppValidationConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId:string} $args
     * @return \AWS\Result<array{validationOutputList?:array<array{validationId?:string, name?:string, status?:"READY_FOR_VALIDATION"|"PENDING"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED", statusMessage?:string, latestValidationTime?:int|string|\DateTimeInterface, appValidationOutput?:array{ssmOutput?:array{s3Location?:array{bucket?:string, key?:string}}}, serverValidationOutput?:array{server?:array{serverId?:string, serverType?:"VIRTUAL_MACHINE", vmServer?:array{vmServerAddress?:array{vmManagerId?:string, vmId?:string}, vmName?:string, vmManagerName?:string, vmManagerType?:"VSPHERE"|"SCVMM"|"HYPERV-MANAGER", vmPath?:string}, replicationJobId?:string, replicationJobTerminated?:bool}}}>}>
     */
    public function getAppValidationOutput(array $args): \AWS\Result { }

    /**
     * @param array{appId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{validationOutputList?:array<array{validationId?:string, name?:string, status?:"READY_FOR_VALIDATION"|"PENDING"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED", statusMessage?:string, latestValidationTime?:int|string|\DateTimeInterface, appValidationOutput?:array{ssmOutput?:array{s3Location?:array{bucket?:string, key?:string}}}, serverValidationOutput?:array{server?:array{serverId?:string, serverType?:"VIRTUAL_MACHINE", vmServer?:array{vmServerAddress?:array{vmManagerId?:string, vmId?:string}, vmName?:string, vmManagerName?:string, vmManagerType?:"VSPHERE"|"SCVMM"|"HYPERV-MANAGER", vmPath?:string}, replicationJobId?:string, replicationJobTerminated?:bool}}}>}>
     */
    public function getAppValidationOutputAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{connectorList?:array<array{connectorId?:string, version?:string, status?:"HEALTHY"|"UNHEALTHY", capabilityList?:array<"VSPHERE"|"SCVMM"|"HYPERV-MANAGER"|"SNAPSHOT_BATCHING"|"SMS_OPTIMIZED">, vmManagerName?:string, vmManagerType?:"VSPHERE"|"SCVMM"|"HYPERV-MANAGER", vmManagerId?:string, ipAddress?:string, macAddress?:string, associatedOn?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function getConnectors(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{connectorList?:array<array{connectorId?:string, version?:string, status?:"HEALTHY"|"UNHEALTHY", capabilityList?:array<"VSPHERE"|"SCVMM"|"HYPERV-MANAGER"|"SNAPSHOT_BATCHING"|"SMS_OPTIMIZED">, vmManagerName?:string, vmManagerType?:"VSPHERE"|"SCVMM"|"HYPERV-MANAGER", vmManagerId?:string, ipAddress?:string, macAddress?:string, associatedOn?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function getConnectorsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{replicationJobId?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{replicationJobList?:array<array{replicationJobId?:string, serverId?:string, serverType?:"VIRTUAL_MACHINE", vmServer?:array{vmServerAddress?:array{vmManagerId?:string, vmId?:string}, vmName?:string, vmManagerName?:string, vmManagerType?:"VSPHERE"|"SCVMM"|"HYPERV-MANAGER", vmPath?:string}, seedReplicationTime?:int|string|\DateTimeInterface, frequency?:int, runOnce?:bool, nextReplicationRunStartTime?:int|string|\DateTimeInterface, licenseType?:"AWS"|"BYOL", roleName?:string, latestAmiId?:string, state?:"PENDING"|"ACTIVE"|"FAILED"|"DELETING"|"DELETED"|"COMPLETED"|"PAUSED_ON_FAILURE"|"FAILING", statusMessage?:string, description?:string, numberOfRecentAmisToKeep?:int, encrypted?:bool, kmsKeyId?:string, replicationRunList?:array<array{replicationRunId?:string, state?:"PENDING"|"MISSED"|"ACTIVE"|"FAILED"|"COMPLETED"|"DELETING"|"DELETED", type?:"ON_DEMAND"|"AUTOMATIC", stageDetails?:array{stage?:string, stageProgress?:string}, statusMessage?:string, amiId?:string, scheduledStartTime?:int|string|\DateTimeInterface, completedTime?:int|string|\DateTimeInterface, description?:string, encrypted?:bool, kmsKeyId?:string}>}>, nextToken?:string}>
     */
    public function getReplicationJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{replicationJobId?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{replicationJobList?:array<array{replicationJobId?:string, serverId?:string, serverType?:"VIRTUAL_MACHINE", vmServer?:array{vmServerAddress?:array{vmManagerId?:string, vmId?:string}, vmName?:string, vmManagerName?:string, vmManagerType?:"VSPHERE"|"SCVMM"|"HYPERV-MANAGER", vmPath?:string}, seedReplicationTime?:int|string|\DateTimeInterface, frequency?:int, runOnce?:bool, nextReplicationRunStartTime?:int|string|\DateTimeInterface, licenseType?:"AWS"|"BYOL", roleName?:string, latestAmiId?:string, state?:"PENDING"|"ACTIVE"|"FAILED"|"DELETING"|"DELETED"|"COMPLETED"|"PAUSED_ON_FAILURE"|"FAILING", statusMessage?:string, description?:string, numberOfRecentAmisToKeep?:int, encrypted?:bool, kmsKeyId?:string, replicationRunList?:array<array{replicationRunId?:string, state?:"PENDING"|"MISSED"|"ACTIVE"|"FAILED"|"COMPLETED"|"DELETING"|"DELETED", type?:"ON_DEMAND"|"AUTOMATIC", stageDetails?:array{stage?:string, stageProgress?:string}, statusMessage?:string, amiId?:string, scheduledStartTime?:int|string|\DateTimeInterface, completedTime?:int|string|\DateTimeInterface, description?:string, encrypted?:bool, kmsKeyId?:string}>}>, nextToken?:string}>
     */
    public function getReplicationJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{replicationJobId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{replicationJob?:array{replicationJobId?:string, serverId?:string, serverType?:"VIRTUAL_MACHINE", vmServer?:array{vmServerAddress?:array{vmManagerId?:string, vmId?:string}, vmName?:string, vmManagerName?:string, vmManagerType?:"VSPHERE"|"SCVMM"|"HYPERV-MANAGER", vmPath?:string}, seedReplicationTime?:int|string|\DateTimeInterface, frequency?:int, runOnce?:bool, nextReplicationRunStartTime?:int|string|\DateTimeInterface, licenseType?:"AWS"|"BYOL", roleName?:string, latestAmiId?:string, state?:"PENDING"|"ACTIVE"|"FAILED"|"DELETING"|"DELETED"|"COMPLETED"|"PAUSED_ON_FAILURE"|"FAILING", statusMessage?:string, description?:string, numberOfRecentAmisToKeep?:int, encrypted?:bool, kmsKeyId?:string, replicationRunList?:array<array{replicationRunId?:string, state?:"PENDING"|"MISSED"|"ACTIVE"|"FAILED"|"COMPLETED"|"DELETING"|"DELETED", type?:"ON_DEMAND"|"AUTOMATIC", stageDetails?:array{stage?:string, stageProgress?:string}, statusMessage?:string, amiId?:string, scheduledStartTime?:int|string|\DateTimeInterface, completedTime?:int|string|\DateTimeInterface, description?:string, encrypted?:bool, kmsKeyId?:string}>}, replicationRunList?:array<array{replicationRunId?:string, state?:"PENDING"|"MISSED"|"ACTIVE"|"FAILED"|"COMPLETED"|"DELETING"|"DELETED", type?:"ON_DEMAND"|"AUTOMATIC", stageDetails?:array{stage?:string, stageProgress?:string}, statusMessage?:string, amiId?:string, scheduledStartTime?:int|string|\DateTimeInterface, completedTime?:int|string|\DateTimeInterface, description?:string, encrypted?:bool, kmsKeyId?:string}>, nextToken?:string}>
     */
    public function getReplicationRuns(array $args): \AWS\Result { }

    /**
     * @param array{replicationJobId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{replicationJob?:array{replicationJobId?:string, serverId?:string, serverType?:"VIRTUAL_MACHINE", vmServer?:array{vmServerAddress?:array{vmManagerId?:string, vmId?:string}, vmName?:string, vmManagerName?:string, vmManagerType?:"VSPHERE"|"SCVMM"|"HYPERV-MANAGER", vmPath?:string}, seedReplicationTime?:int|string|\DateTimeInterface, frequency?:int, runOnce?:bool, nextReplicationRunStartTime?:int|string|\DateTimeInterface, licenseType?:"AWS"|"BYOL", roleName?:string, latestAmiId?:string, state?:"PENDING"|"ACTIVE"|"FAILED"|"DELETING"|"DELETED"|"COMPLETED"|"PAUSED_ON_FAILURE"|"FAILING", statusMessage?:string, description?:string, numberOfRecentAmisToKeep?:int, encrypted?:bool, kmsKeyId?:string, replicationRunList?:array<array{replicationRunId?:string, state?:"PENDING"|"MISSED"|"ACTIVE"|"FAILED"|"COMPLETED"|"DELETING"|"DELETED", type?:"ON_DEMAND"|"AUTOMATIC", stageDetails?:array{stage?:string, stageProgress?:string}, statusMessage?:string, amiId?:string, scheduledStartTime?:int|string|\DateTimeInterface, completedTime?:int|string|\DateTimeInterface, description?:string, encrypted?:bool, kmsKeyId?:string}>}, replicationRunList?:array<array{replicationRunId?:string, state?:"PENDING"|"MISSED"|"ACTIVE"|"FAILED"|"COMPLETED"|"DELETING"|"DELETED", type?:"ON_DEMAND"|"AUTOMATIC", stageDetails?:array{stage?:string, stageProgress?:string}, statusMessage?:string, amiId?:string, scheduledStartTime?:int|string|\DateTimeInterface, completedTime?:int|string|\DateTimeInterface, description?:string, encrypted?:bool, kmsKeyId?:string}>, nextToken?:string}>
     */
    public function getReplicationRunsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, vmServerAddressList?:array<array{vmManagerId?:string, vmId?:string}>} $args
     * @return \AWS\Result<array{lastModifiedOn?:int|string|\DateTimeInterface, serverCatalogStatus?:"NOT_IMPORTED"|"IMPORTING"|"AVAILABLE"|"DELETED"|"EXPIRED", serverList?:array<array{serverId?:string, serverType?:"VIRTUAL_MACHINE", vmServer?:array{vmServerAddress?:array{vmManagerId?:string, vmId?:string}, vmName?:string, vmManagerName?:string, vmManagerType?:"VSPHERE"|"SCVMM"|"HYPERV-MANAGER", vmPath?:string}, replicationJobId?:string, replicationJobTerminated?:bool}>, nextToken?:string}>
     */
    public function getServers(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, vmServerAddressList?:array<array{vmManagerId?:string, vmId?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{lastModifiedOn?:int|string|\DateTimeInterface, serverCatalogStatus?:"NOT_IMPORTED"|"IMPORTING"|"AVAILABLE"|"DELETED"|"EXPIRED", serverList?:array<array{serverId?:string, serverType?:"VIRTUAL_MACHINE", vmServer?:array{vmServerAddress?:array{vmManagerId?:string, vmId?:string}, vmName?:string, vmManagerName?:string, vmManagerType?:"VSPHERE"|"SCVMM"|"HYPERV-MANAGER", vmPath?:string}, replicationJobId?:string, replicationJobTerminated?:bool}>, nextToken?:string}>
     */
    public function getServersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{roleName?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function importAppCatalog(array $args = []): \AWS\Result { }

    /**
     * @param array{roleName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function importAppCatalogAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{}>
     */
    public function importServerCatalog(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function importServerCatalogAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function launchApp(array $args = []): \AWS\Result { }

    /**
     * @param array{appId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function launchAppAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appIds?:array<string>, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{apps?:array<array{appId?:string, importedAppId?:string, name?:string, description?:string, status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"DELETED"|"DELETE_FAILED", statusMessage?:string, replicationConfigurationStatus?:"NOT_CONFIGURED"|"CONFIGURED", replicationStatus?:"READY_FOR_CONFIGURATION"|"CONFIGURATION_IN_PROGRESS"|"CONFIGURATION_INVALID"|"READY_FOR_REPLICATION"|"VALIDATION_IN_PROGRESS"|"REPLICATION_PENDING"|"REPLICATION_IN_PROGRESS"|"REPLICATED"|"PARTIALLY_REPLICATED"|"DELTA_REPLICATION_IN_PROGRESS"|"DELTA_REPLICATED"|"DELTA_REPLICATION_FAILED"|"REPLICATION_FAILED"|"REPLICATION_STOPPING"|"REPLICATION_STOP_FAILED"|"REPLICATION_STOPPED", replicationStatusMessage?:string, latestReplicationTime?:int|string|\DateTimeInterface, launchConfigurationStatus?:"NOT_CONFIGURED"|"CONFIGURED", launchStatus?:"READY_FOR_CONFIGURATION"|"CONFIGURATION_IN_PROGRESS"|"CONFIGURATION_INVALID"|"READY_FOR_LAUNCH"|"VALIDATION_IN_PROGRESS"|"LAUNCH_PENDING"|"LAUNCH_IN_PROGRESS"|"LAUNCHED"|"PARTIALLY_LAUNCHED"|"DELTA_LAUNCH_IN_PROGRESS"|"DELTA_LAUNCH_FAILED"|"LAUNCH_FAILED"|"TERMINATE_IN_PROGRESS"|"TERMINATE_FAILED"|"TERMINATED", launchStatusMessage?:string, launchDetails?:array{latestLaunchTime?:int|string|\DateTimeInterface, stackName?:string, stackId?:string}, creationTime?:int|string|\DateTimeInterface, lastModified?:int|string|\DateTimeInterface, roleName?:string, totalServerGroups?:int, totalServers?:int}>, nextToken?:string}>
     */
    public function listApps(array $args = []): \AWS\Result { }

    /**
     * @param array{appIds?:array<string>, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{apps?:array<array{appId?:string, importedAppId?:string, name?:string, description?:string, status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"DELETED"|"DELETE_FAILED", statusMessage?:string, replicationConfigurationStatus?:"NOT_CONFIGURED"|"CONFIGURED", replicationStatus?:"READY_FOR_CONFIGURATION"|"CONFIGURATION_IN_PROGRESS"|"CONFIGURATION_INVALID"|"READY_FOR_REPLICATION"|"VALIDATION_IN_PROGRESS"|"REPLICATION_PENDING"|"REPLICATION_IN_PROGRESS"|"REPLICATED"|"PARTIALLY_REPLICATED"|"DELTA_REPLICATION_IN_PROGRESS"|"DELTA_REPLICATED"|"DELTA_REPLICATION_FAILED"|"REPLICATION_FAILED"|"REPLICATION_STOPPING"|"REPLICATION_STOP_FAILED"|"REPLICATION_STOPPED", replicationStatusMessage?:string, latestReplicationTime?:int|string|\DateTimeInterface, launchConfigurationStatus?:"NOT_CONFIGURED"|"CONFIGURED", launchStatus?:"READY_FOR_CONFIGURATION"|"CONFIGURATION_IN_PROGRESS"|"CONFIGURATION_INVALID"|"READY_FOR_LAUNCH"|"VALIDATION_IN_PROGRESS"|"LAUNCH_PENDING"|"LAUNCH_IN_PROGRESS"|"LAUNCHED"|"PARTIALLY_LAUNCHED"|"DELTA_LAUNCH_IN_PROGRESS"|"DELTA_LAUNCH_FAILED"|"LAUNCH_FAILED"|"TERMINATE_IN_PROGRESS"|"TERMINATE_FAILED"|"TERMINATED", launchStatusMessage?:string, launchDetails?:array{latestLaunchTime?:int|string|\DateTimeInterface, stackName?:string, stackId?:string}, creationTime?:int|string|\DateTimeInterface, lastModified?:int|string|\DateTimeInterface, roleName?:string, totalServerGroups?:int, totalServers?:int}>, nextToken?:string}>
     */
    public function listAppsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId:string, notificationContext?:array{validationId?:string, status?:"READY_FOR_VALIDATION"|"PENDING"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED", statusMessage?:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function notifyAppValidationOutput(array $args): \AWS\Result { }

    /**
     * @param array{appId:string, notificationContext?:array{validationId?:string, status?:"READY_FOR_VALIDATION"|"PENDING"|"IN_PROGRESS"|"SUCCEEDED"|"FAILED", statusMessage?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function notifyAppValidationOutputAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId?:string, roleName?:string, autoLaunch?:bool, serverGroupLaunchConfigurations?:array<array{serverGroupId?:string, launchOrder?:int, serverLaunchConfigurations?:array<array{server?:array{serverId?:string, serverType?:"VIRTUAL_MACHINE", vmServer?:array{vmServerAddress?:array{vmManagerId?:string, vmId?:string}, vmName?:string, vmManagerName?:string, vmManagerType?:"VSPHERE"|"SCVMM"|"HYPERV-MANAGER", vmPath?:string}, replicationJobId?:string, replicationJobTerminated?:bool}, logicalId?:string, vpc?:string, subnet?:string, securityGroup?:string, ec2KeyName?:string, userData?:array{s3Location?:array{bucket?:string, key?:string}}, instanceType?:string, associatePublicIpAddress?:bool, iamInstanceProfileName?:string, configureScript?:array{bucket?:string, key?:string}, configureScriptType?:"SHELL_SCRIPT"|"POWERSHELL_SCRIPT"}>}>} $args
     * @return \AWS\Result<array{}>
     */
    public function putAppLaunchConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{appId?:string, roleName?:string, autoLaunch?:bool, serverGroupLaunchConfigurations?:array<array{serverGroupId?:string, launchOrder?:int, serverLaunchConfigurations?:array<array{server?:array{serverId?:string, serverType?:"VIRTUAL_MACHINE", vmServer?:array{vmServerAddress?:array{vmManagerId?:string, vmId?:string}, vmName?:string, vmManagerName?:string, vmManagerType?:"VSPHERE"|"SCVMM"|"HYPERV-MANAGER", vmPath?:string}, replicationJobId?:string, replicationJobTerminated?:bool}, logicalId?:string, vpc?:string, subnet?:string, securityGroup?:string, ec2KeyName?:string, userData?:array{s3Location?:array{bucket?:string, key?:string}}, instanceType?:string, associatePublicIpAddress?:bool, iamInstanceProfileName?:string, configureScript?:array{bucket?:string, key?:string}, configureScriptType?:"SHELL_SCRIPT"|"POWERSHELL_SCRIPT"}>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putAppLaunchConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId?:string, serverGroupReplicationConfigurations?:array<array{serverGroupId?:string, serverReplicationConfigurations?:array<array{server?:array{serverId?:string, serverType?:"VIRTUAL_MACHINE", vmServer?:array{vmServerAddress?:array{vmManagerId?:string, vmId?:string}, vmName?:string, vmManagerName?:string, vmManagerType?:"VSPHERE"|"SCVMM"|"HYPERV-MANAGER", vmPath?:string}, replicationJobId?:string, replicationJobTerminated?:bool}, serverReplicationParameters?:array{seedTime?:int|string|\DateTimeInterface, frequency?:int, runOnce?:bool, licenseType?:"AWS"|"BYOL", numberOfRecentAmisToKeep?:int, encrypted?:bool, kmsKeyId?:string}}>}>} $args
     * @return \AWS\Result<array{}>
     */
    public function putAppReplicationConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{appId?:string, serverGroupReplicationConfigurations?:array<array{serverGroupId?:string, serverReplicationConfigurations?:array<array{server?:array{serverId?:string, serverType?:"VIRTUAL_MACHINE", vmServer?:array{vmServerAddress?:array{vmManagerId?:string, vmId?:string}, vmName?:string, vmManagerName?:string, vmManagerType?:"VSPHERE"|"SCVMM"|"HYPERV-MANAGER", vmPath?:string}, replicationJobId?:string, replicationJobTerminated?:bool}, serverReplicationParameters?:array{seedTime?:int|string|\DateTimeInterface, frequency?:int, runOnce?:bool, licenseType?:"AWS"|"BYOL", numberOfRecentAmisToKeep?:int, encrypted?:bool, kmsKeyId?:string}}>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putAppReplicationConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId:string, appValidationConfigurations?:array<array{validationId?:string, name?:string, appValidationStrategy?:"SSM", ssmValidationParameters?:array{source?:array{s3Location?:array{bucket?:string, key?:string}}, instanceId?:string, scriptType?:"SHELL_SCRIPT"|"POWERSHELL_SCRIPT", command?:string, executionTimeoutSeconds?:int, outputS3BucketName?:string}}>, serverGroupValidationConfigurations?:array<array{serverGroupId?:string, serverValidationConfigurations?:array<array{server?:array{serverId?:string, serverType?:"VIRTUAL_MACHINE", vmServer?:array{vmServerAddress?:array{vmManagerId?:string, vmId?:string}, vmName?:string, vmManagerName?:string, vmManagerType?:"VSPHERE"|"SCVMM"|"HYPERV-MANAGER", vmPath?:string}, replicationJobId?:string, replicationJobTerminated?:bool}, validationId?:string, name?:string, serverValidationStrategy?:"USERDATA", userDataValidationParameters?:array{source?:array{s3Location?:array{bucket?:string, key?:string}}, scriptType?:"SHELL_SCRIPT"|"POWERSHELL_SCRIPT"}}>}>} $args
     * @return \AWS\Result<array{}>
     */
    public function putAppValidationConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{appId:string, appValidationConfigurations?:array<array{validationId?:string, name?:string, appValidationStrategy?:"SSM", ssmValidationParameters?:array{source?:array{s3Location?:array{bucket?:string, key?:string}}, instanceId?:string, scriptType?:"SHELL_SCRIPT"|"POWERSHELL_SCRIPT", command?:string, executionTimeoutSeconds?:int, outputS3BucketName?:string}}>, serverGroupValidationConfigurations?:array<array{serverGroupId?:string, serverValidationConfigurations?:array<array{server?:array{serverId?:string, serverType?:"VIRTUAL_MACHINE", vmServer?:array{vmServerAddress?:array{vmManagerId?:string, vmId?:string}, vmName?:string, vmManagerName?:string, vmManagerType?:"VSPHERE"|"SCVMM"|"HYPERV-MANAGER", vmPath?:string}, replicationJobId?:string, replicationJobTerminated?:bool}, validationId?:string, name?:string, serverValidationStrategy?:"USERDATA", userDataValidationParameters?:array{source?:array{s3Location?:array{bucket?:string, key?:string}}, scriptType?:"SHELL_SCRIPT"|"POWERSHELL_SCRIPT"}}>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putAppValidationConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function startAppReplication(array $args = []): \AWS\Result { }

    /**
     * @param array{appId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function startAppReplicationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId:string, description?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function startOnDemandAppReplication(array $args): \AWS\Result { }

    /**
     * @param array{appId:string, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function startOnDemandAppReplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{replicationJobId:string, description?:string} $args
     * @return \AWS\Result<array{replicationRunId?:string}>
     */
    public function startOnDemandReplicationRun(array $args): \AWS\Result { }

    /**
     * @param array{replicationJobId:string, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{replicationRunId?:string}>
     */
    public function startOnDemandReplicationRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopAppReplication(array $args = []): \AWS\Result { }

    /**
     * @param array{appId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopAppReplicationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function terminateApp(array $args = []): \AWS\Result { }

    /**
     * @param array{appId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function terminateAppAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId?:string, name?:string, description?:string, roleName?:string, serverGroups?:array<array{serverGroupId?:string, name?:string, serverList?:array<array{serverId?:string, serverType?:"VIRTUAL_MACHINE", vmServer?:array{vmServerAddress?:array{vmManagerId?:string, vmId?:string}, vmName?:string, vmManagerName?:string, vmManagerType?:"VSPHERE"|"SCVMM"|"HYPERV-MANAGER", vmPath?:string}, replicationJobId?:string, replicationJobTerminated?:bool}>}>, tags?:array<array{key?:string, value?:string}>} $args
     * @return \AWS\Result<array{appSummary?:array{appId?:string, importedAppId?:string, name?:string, description?:string, status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"DELETED"|"DELETE_FAILED", statusMessage?:string, replicationConfigurationStatus?:"NOT_CONFIGURED"|"CONFIGURED", replicationStatus?:"READY_FOR_CONFIGURATION"|"CONFIGURATION_IN_PROGRESS"|"CONFIGURATION_INVALID"|"READY_FOR_REPLICATION"|"VALIDATION_IN_PROGRESS"|"REPLICATION_PENDING"|"REPLICATION_IN_PROGRESS"|"REPLICATED"|"PARTIALLY_REPLICATED"|"DELTA_REPLICATION_IN_PROGRESS"|"DELTA_REPLICATED"|"DELTA_REPLICATION_FAILED"|"REPLICATION_FAILED"|"REPLICATION_STOPPING"|"REPLICATION_STOP_FAILED"|"REPLICATION_STOPPED", replicationStatusMessage?:string, latestReplicationTime?:int|string|\DateTimeInterface, launchConfigurationStatus?:"NOT_CONFIGURED"|"CONFIGURED", launchStatus?:"READY_FOR_CONFIGURATION"|"CONFIGURATION_IN_PROGRESS"|"CONFIGURATION_INVALID"|"READY_FOR_LAUNCH"|"VALIDATION_IN_PROGRESS"|"LAUNCH_PENDING"|"LAUNCH_IN_PROGRESS"|"LAUNCHED"|"PARTIALLY_LAUNCHED"|"DELTA_LAUNCH_IN_PROGRESS"|"DELTA_LAUNCH_FAILED"|"LAUNCH_FAILED"|"TERMINATE_IN_PROGRESS"|"TERMINATE_FAILED"|"TERMINATED", launchStatusMessage?:string, launchDetails?:array{latestLaunchTime?:int|string|\DateTimeInterface, stackName?:string, stackId?:string}, creationTime?:int|string|\DateTimeInterface, lastModified?:int|string|\DateTimeInterface, roleName?:string, totalServerGroups?:int, totalServers?:int}, serverGroups?:array<array{serverGroupId?:string, name?:string, serverList?:array<array{serverId?:string, serverType?:"VIRTUAL_MACHINE", vmServer?:array{vmServerAddress?:array{vmManagerId?:string, vmId?:string}, vmName?:string, vmManagerName?:string, vmManagerType?:"VSPHERE"|"SCVMM"|"HYPERV-MANAGER", vmPath?:string}, replicationJobId?:string, replicationJobTerminated?:bool}>}>, tags?:array<array{key?:string, value?:string}>}>
     */
    public function updateApp(array $args = []): \AWS\Result { }

    /**
     * @param array{appId?:string, name?:string, description?:string, roleName?:string, serverGroups?:array<array{serverGroupId?:string, name?:string, serverList?:array<array{serverId?:string, serverType?:"VIRTUAL_MACHINE", vmServer?:array{vmServerAddress?:array{vmManagerId?:string, vmId?:string}, vmName?:string, vmManagerName?:string, vmManagerType?:"VSPHERE"|"SCVMM"|"HYPERV-MANAGER", vmPath?:string}, replicationJobId?:string, replicationJobTerminated?:bool}>}>, tags?:array<array{key?:string, value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{appSummary?:array{appId?:string, importedAppId?:string, name?:string, description?:string, status?:"CREATING"|"ACTIVE"|"UPDATING"|"DELETING"|"DELETED"|"DELETE_FAILED", statusMessage?:string, replicationConfigurationStatus?:"NOT_CONFIGURED"|"CONFIGURED", replicationStatus?:"READY_FOR_CONFIGURATION"|"CONFIGURATION_IN_PROGRESS"|"CONFIGURATION_INVALID"|"READY_FOR_REPLICATION"|"VALIDATION_IN_PROGRESS"|"REPLICATION_PENDING"|"REPLICATION_IN_PROGRESS"|"REPLICATED"|"PARTIALLY_REPLICATED"|"DELTA_REPLICATION_IN_PROGRESS"|"DELTA_REPLICATED"|"DELTA_REPLICATION_FAILED"|"REPLICATION_FAILED"|"REPLICATION_STOPPING"|"REPLICATION_STOP_FAILED"|"REPLICATION_STOPPED", replicationStatusMessage?:string, latestReplicationTime?:int|string|\DateTimeInterface, launchConfigurationStatus?:"NOT_CONFIGURED"|"CONFIGURED", launchStatus?:"READY_FOR_CONFIGURATION"|"CONFIGURATION_IN_PROGRESS"|"CONFIGURATION_INVALID"|"READY_FOR_LAUNCH"|"VALIDATION_IN_PROGRESS"|"LAUNCH_PENDING"|"LAUNCH_IN_PROGRESS"|"LAUNCHED"|"PARTIALLY_LAUNCHED"|"DELTA_LAUNCH_IN_PROGRESS"|"DELTA_LAUNCH_FAILED"|"LAUNCH_FAILED"|"TERMINATE_IN_PROGRESS"|"TERMINATE_FAILED"|"TERMINATED", launchStatusMessage?:string, launchDetails?:array{latestLaunchTime?:int|string|\DateTimeInterface, stackName?:string, stackId?:string}, creationTime?:int|string|\DateTimeInterface, lastModified?:int|string|\DateTimeInterface, roleName?:string, totalServerGroups?:int, totalServers?:int}, serverGroups?:array<array{serverGroupId?:string, name?:string, serverList?:array<array{serverId?:string, serverType?:"VIRTUAL_MACHINE", vmServer?:array{vmServerAddress?:array{vmManagerId?:string, vmId?:string}, vmName?:string, vmManagerName?:string, vmManagerType?:"VSPHERE"|"SCVMM"|"HYPERV-MANAGER", vmPath?:string}, replicationJobId?:string, replicationJobTerminated?:bool}>}>, tags?:array<array{key?:string, value?:string}>}>
     */
    public function updateAppAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{replicationJobId:string, frequency?:int, nextReplicationRunStartTime?:int|string|\DateTimeInterface, licenseType?:"AWS"|"BYOL", roleName?:string, description?:string, numberOfRecentAmisToKeep?:int, encrypted?:bool, kmsKeyId?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateReplicationJob(array $args): \AWS\Result { }

    /**
     * @param array{replicationJobId:string, frequency?:int, nextReplicationRunStartTime?:int|string|\DateTimeInterface, licenseType?:"AWS"|"BYOL", roleName?:string, description?:string, numberOfRecentAmisToKeep?:int, encrypted?:bool, kmsKeyId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateReplicationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
