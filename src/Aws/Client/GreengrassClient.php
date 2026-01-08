<?php
namespace AWS\Greengrass;

class GreengrassClient
{
    /**
     * @param array{GroupId:string, RoleArn:string} $args
     * @return \AWS\Result<array{AssociatedAt?:string}>
     */
    public function associateRoleToGroup(array $args): \AWS\Result { }

    /**
     * @param array{GroupId:string, RoleArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AssociatedAt?:string}>
     */
    public function associateRoleToGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RoleArn:string} $args
     * @return \AWS\Result<array{AssociatedAt?:string}>
     */
    public function associateServiceRoleToAccount(array $args): \AWS\Result { }

    /**
     * @param array{RoleArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AssociatedAt?:string}>
     */
    public function associateServiceRoleToAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AmznClientToken?:string, InitialVersion?:array{Connectors?:array<array{ConnectorArn:string, Id:string, Parameters?:array<string, string>}>}, Name?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string}>
     */
    public function createConnectorDefinition(array $args = []): \AWS\Result { }

    /**
     * @param array{AmznClientToken?:string, InitialVersion?:array{Connectors?:array<array{ConnectorArn:string, Id:string, Parameters?:array<string, string>}>}, Name?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string}>
     */
    public function createConnectorDefinitionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AmznClientToken?:string, ConnectorDefinitionId:string, Connectors?:array<array{ConnectorArn:string, Id:string, Parameters?:array<string, string>}>} $args
     * @return \AWS\Result<array{Arn?:string, CreationTimestamp?:string, Id?:string, Version?:string}>
     */
    public function createConnectorDefinitionVersion(array $args): \AWS\Result { }

    /**
     * @param array{AmznClientToken?:string, ConnectorDefinitionId:string, Connectors?:array<array{ConnectorArn:string, Id:string, Parameters?:array<string, string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTimestamp?:string, Id?:string, Version?:string}>
     */
    public function createConnectorDefinitionVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AmznClientToken?:string, InitialVersion?:array{Cores?:array<array{CertificateArn:string, Id:string, SyncShadow?:bool, ThingArn:string}>}, Name?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string}>
     */
    public function createCoreDefinition(array $args = []): \AWS\Result { }

    /**
     * @param array{AmznClientToken?:string, InitialVersion?:array{Cores?:array<array{CertificateArn:string, Id:string, SyncShadow?:bool, ThingArn:string}>}, Name?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string}>
     */
    public function createCoreDefinitionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AmznClientToken?:string, CoreDefinitionId:string, Cores?:array<array{CertificateArn:string, Id:string, SyncShadow?:bool, ThingArn:string}>} $args
     * @return \AWS\Result<array{Arn?:string, CreationTimestamp?:string, Id?:string, Version?:string}>
     */
    public function createCoreDefinitionVersion(array $args): \AWS\Result { }

    /**
     * @param array{AmznClientToken?:string, CoreDefinitionId:string, Cores?:array<array{CertificateArn:string, Id:string, SyncShadow?:bool, ThingArn:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTimestamp?:string, Id?:string, Version?:string}>
     */
    public function createCoreDefinitionVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AmznClientToken?:string, DeploymentId?:string, DeploymentType:"NewDeployment"|"Redeployment"|"ResetDeployment"|"ForceResetDeployment", GroupId:string, GroupVersionId?:string} $args
     * @return \AWS\Result<array{DeploymentArn?:string, DeploymentId?:string}>
     */
    public function createDeployment(array $args): \AWS\Result { }

    /**
     * @param array{AmznClientToken?:string, DeploymentId?:string, DeploymentType:"NewDeployment"|"Redeployment"|"ResetDeployment"|"ForceResetDeployment", GroupId:string, GroupVersionId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DeploymentArn?:string, DeploymentId?:string}>
     */
    public function createDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AmznClientToken?:string, InitialVersion?:array{Devices?:array<array{CertificateArn:string, Id:string, SyncShadow?:bool, ThingArn:string}>}, Name?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string}>
     */
    public function createDeviceDefinition(array $args = []): \AWS\Result { }

    /**
     * @param array{AmznClientToken?:string, InitialVersion?:array{Devices?:array<array{CertificateArn:string, Id:string, SyncShadow?:bool, ThingArn:string}>}, Name?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string}>
     */
    public function createDeviceDefinitionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AmznClientToken?:string, DeviceDefinitionId:string, Devices?:array<array{CertificateArn:string, Id:string, SyncShadow?:bool, ThingArn:string}>} $args
     * @return \AWS\Result<array{Arn?:string, CreationTimestamp?:string, Id?:string, Version?:string}>
     */
    public function createDeviceDefinitionVersion(array $args): \AWS\Result { }

    /**
     * @param array{AmznClientToken?:string, DeviceDefinitionId:string, Devices?:array<array{CertificateArn:string, Id:string, SyncShadow?:bool, ThingArn:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTimestamp?:string, Id?:string, Version?:string}>
     */
    public function createDeviceDefinitionVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AmznClientToken?:string, InitialVersion?:array{DefaultConfig?:array{Execution?:array{IsolationMode?:"GreengrassContainer"|"NoContainer", RunAs?:array{Gid?:int, Uid?:int}}}, Functions?:array<array{FunctionArn?:string, FunctionConfiguration?:array{EncodingType?:"binary"|"json", Environment?:array{AccessSysfs?:bool, Execution?:array{IsolationMode?:"GreengrassContainer"|"NoContainer", RunAs?:array{Gid?:int, Uid?:int}}, ResourceAccessPolicies?:array<array{Permission?:"ro"|"rw", ResourceId:string}>, Variables?:array<string, string>}, ExecArgs?:string, Executable?:string, MemorySize?:int, Pinned?:bool, Timeout?:int, FunctionRuntimeOverride?:string}, Id:string}>}, Name?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string}>
     */
    public function createFunctionDefinition(array $args = []): \AWS\Result { }

    /**
     * @param array{AmznClientToken?:string, InitialVersion?:array{DefaultConfig?:array{Execution?:array{IsolationMode?:"GreengrassContainer"|"NoContainer", RunAs?:array{Gid?:int, Uid?:int}}}, Functions?:array<array{FunctionArn?:string, FunctionConfiguration?:array{EncodingType?:"binary"|"json", Environment?:array{AccessSysfs?:bool, Execution?:array{IsolationMode?:"GreengrassContainer"|"NoContainer", RunAs?:array{Gid?:int, Uid?:int}}, ResourceAccessPolicies?:array<array{Permission?:"ro"|"rw", ResourceId:string}>, Variables?:array<string, string>}, ExecArgs?:string, Executable?:string, MemorySize?:int, Pinned?:bool, Timeout?:int, FunctionRuntimeOverride?:string}, Id:string}>}, Name?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string}>
     */
    public function createFunctionDefinitionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AmznClientToken?:string, DefaultConfig?:array{Execution?:array{IsolationMode?:"GreengrassContainer"|"NoContainer", RunAs?:array{Gid?:int, Uid?:int}}}, FunctionDefinitionId:string, Functions?:array<array{FunctionArn?:string, FunctionConfiguration?:array{EncodingType?:"binary"|"json", Environment?:array{AccessSysfs?:bool, Execution?:array{IsolationMode?:"GreengrassContainer"|"NoContainer", RunAs?:array{Gid?:int, Uid?:int}}, ResourceAccessPolicies?:array<array{Permission?:"ro"|"rw", ResourceId:string}>, Variables?:array<string, string>}, ExecArgs?:string, Executable?:string, MemorySize?:int, Pinned?:bool, Timeout?:int, FunctionRuntimeOverride?:string}, Id:string}>} $args
     * @return \AWS\Result<array{Arn?:string, CreationTimestamp?:string, Id?:string, Version?:string}>
     */
    public function createFunctionDefinitionVersion(array $args): \AWS\Result { }

    /**
     * @param array{AmznClientToken?:string, DefaultConfig?:array{Execution?:array{IsolationMode?:"GreengrassContainer"|"NoContainer", RunAs?:array{Gid?:int, Uid?:int}}}, FunctionDefinitionId:string, Functions?:array<array{FunctionArn?:string, FunctionConfiguration?:array{EncodingType?:"binary"|"json", Environment?:array{AccessSysfs?:bool, Execution?:array{IsolationMode?:"GreengrassContainer"|"NoContainer", RunAs?:array{Gid?:int, Uid?:int}}, ResourceAccessPolicies?:array<array{Permission?:"ro"|"rw", ResourceId:string}>, Variables?:array<string, string>}, ExecArgs?:string, Executable?:string, MemorySize?:int, Pinned?:bool, Timeout?:int, FunctionRuntimeOverride?:string}, Id:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTimestamp?:string, Id?:string, Version?:string}>
     */
    public function createFunctionDefinitionVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AmznClientToken?:string, InitialVersion?:array{ConnectorDefinitionVersionArn?:string, CoreDefinitionVersionArn?:string, DeviceDefinitionVersionArn?:string, FunctionDefinitionVersionArn?:string, LoggerDefinitionVersionArn?:string, ResourceDefinitionVersionArn?:string, SubscriptionDefinitionVersionArn?:string}, Name:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string}>
     */
    public function createGroup(array $args): \AWS\Result { }

    /**
     * @param array{AmznClientToken?:string, InitialVersion?:array{ConnectorDefinitionVersionArn?:string, CoreDefinitionVersionArn?:string, DeviceDefinitionVersionArn?:string, FunctionDefinitionVersionArn?:string, LoggerDefinitionVersionArn?:string, ResourceDefinitionVersionArn?:string, SubscriptionDefinitionVersionArn?:string}, Name:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string}>
     */
    public function createGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AmznClientToken?:string, GroupId:string} $args
     * @return \AWS\Result<array{GroupCertificateAuthorityArn?:string}>
     */
    public function createGroupCertificateAuthority(array $args): \AWS\Result { }

    /**
     * @param array{AmznClientToken?:string, GroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GroupCertificateAuthorityArn?:string}>
     */
    public function createGroupCertificateAuthorityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AmznClientToken?:string, ConnectorDefinitionVersionArn?:string, CoreDefinitionVersionArn?:string, DeviceDefinitionVersionArn?:string, FunctionDefinitionVersionArn?:string, GroupId:string, LoggerDefinitionVersionArn?:string, ResourceDefinitionVersionArn?:string, SubscriptionDefinitionVersionArn?:string} $args
     * @return \AWS\Result<array{Arn?:string, CreationTimestamp?:string, Id?:string, Version?:string}>
     */
    public function createGroupVersion(array $args): \AWS\Result { }

    /**
     * @param array{AmznClientToken?:string, ConnectorDefinitionVersionArn?:string, CoreDefinitionVersionArn?:string, DeviceDefinitionVersionArn?:string, FunctionDefinitionVersionArn?:string, GroupId:string, LoggerDefinitionVersionArn?:string, ResourceDefinitionVersionArn?:string, SubscriptionDefinitionVersionArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTimestamp?:string, Id?:string, Version?:string}>
     */
    public function createGroupVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AmznClientToken?:string, InitialVersion?:array{Loggers?:array<array{Component:"GreengrassSystem"|"Lambda", Id:string, Level:"DEBUG"|"INFO"|"WARN"|"ERROR"|"FATAL", Space?:int, Type:"FileSystem"|"AWSCloudWatch"}>}, Name?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string}>
     */
    public function createLoggerDefinition(array $args = []): \AWS\Result { }

    /**
     * @param array{AmznClientToken?:string, InitialVersion?:array{Loggers?:array<array{Component:"GreengrassSystem"|"Lambda", Id:string, Level:"DEBUG"|"INFO"|"WARN"|"ERROR"|"FATAL", Space?:int, Type:"FileSystem"|"AWSCloudWatch"}>}, Name?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string}>
     */
    public function createLoggerDefinitionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AmznClientToken?:string, LoggerDefinitionId:string, Loggers?:array<array{Component:"GreengrassSystem"|"Lambda", Id:string, Level:"DEBUG"|"INFO"|"WARN"|"ERROR"|"FATAL", Space?:int, Type:"FileSystem"|"AWSCloudWatch"}>} $args
     * @return \AWS\Result<array{Arn?:string, CreationTimestamp?:string, Id?:string, Version?:string}>
     */
    public function createLoggerDefinitionVersion(array $args): \AWS\Result { }

    /**
     * @param array{AmznClientToken?:string, LoggerDefinitionId:string, Loggers?:array<array{Component:"GreengrassSystem"|"Lambda", Id:string, Level:"DEBUG"|"INFO"|"WARN"|"ERROR"|"FATAL", Space?:int, Type:"FileSystem"|"AWSCloudWatch"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTimestamp?:string, Id?:string, Version?:string}>
     */
    public function createLoggerDefinitionVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AmznClientToken?:string, InitialVersion?:array{Resources?:array<array{Id:string, Name:string, ResourceDataContainer:array{LocalDeviceResourceData?:array{GroupOwnerSetting?:array{AutoAddGroupOwner?:bool, GroupOwner?:string}, SourcePath?:string}, LocalVolumeResourceData?:array{DestinationPath?:string, GroupOwnerSetting?:array{AutoAddGroupOwner?:bool, GroupOwner?:string}, SourcePath?:string}, S3MachineLearningModelResourceData?:array{DestinationPath?:string, OwnerSetting?:array{GroupOwner:string, GroupPermission:"ro"|"rw"}, S3Uri?:string}, SageMakerMachineLearningModelResourceData?:array{DestinationPath?:string, OwnerSetting?:array{GroupOwner:string, GroupPermission:"ro"|"rw"}, SageMakerJobArn?:string}, SecretsManagerSecretResourceData?:array{ARN?:string, AdditionalStagingLabelsToDownload?:array<string>}}}>}, Name?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string}>
     */
    public function createResourceDefinition(array $args = []): \AWS\Result { }

    /**
     * @param array{AmznClientToken?:string, InitialVersion?:array{Resources?:array<array{Id:string, Name:string, ResourceDataContainer:array{LocalDeviceResourceData?:array{GroupOwnerSetting?:array{AutoAddGroupOwner?:bool, GroupOwner?:string}, SourcePath?:string}, LocalVolumeResourceData?:array{DestinationPath?:string, GroupOwnerSetting?:array{AutoAddGroupOwner?:bool, GroupOwner?:string}, SourcePath?:string}, S3MachineLearningModelResourceData?:array{DestinationPath?:string, OwnerSetting?:array{GroupOwner:string, GroupPermission:"ro"|"rw"}, S3Uri?:string}, SageMakerMachineLearningModelResourceData?:array{DestinationPath?:string, OwnerSetting?:array{GroupOwner:string, GroupPermission:"ro"|"rw"}, SageMakerJobArn?:string}, SecretsManagerSecretResourceData?:array{ARN?:string, AdditionalStagingLabelsToDownload?:array<string>}}}>}, Name?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string}>
     */
    public function createResourceDefinitionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AmznClientToken?:string, ResourceDefinitionId:string, Resources?:array<array{Id:string, Name:string, ResourceDataContainer:array{LocalDeviceResourceData?:array{GroupOwnerSetting?:array{AutoAddGroupOwner?:bool, GroupOwner?:string}, SourcePath?:string}, LocalVolumeResourceData?:array{DestinationPath?:string, GroupOwnerSetting?:array{AutoAddGroupOwner?:bool, GroupOwner?:string}, SourcePath?:string}, S3MachineLearningModelResourceData?:array{DestinationPath?:string, OwnerSetting?:array{GroupOwner:string, GroupPermission:"ro"|"rw"}, S3Uri?:string}, SageMakerMachineLearningModelResourceData?:array{DestinationPath?:string, OwnerSetting?:array{GroupOwner:string, GroupPermission:"ro"|"rw"}, SageMakerJobArn?:string}, SecretsManagerSecretResourceData?:array{ARN?:string, AdditionalStagingLabelsToDownload?:array<string>}}}>} $args
     * @return \AWS\Result<array{Arn?:string, CreationTimestamp?:string, Id?:string, Version?:string}>
     */
    public function createResourceDefinitionVersion(array $args): \AWS\Result { }

    /**
     * @param array{AmznClientToken?:string, ResourceDefinitionId:string, Resources?:array<array{Id:string, Name:string, ResourceDataContainer:array{LocalDeviceResourceData?:array{GroupOwnerSetting?:array{AutoAddGroupOwner?:bool, GroupOwner?:string}, SourcePath?:string}, LocalVolumeResourceData?:array{DestinationPath?:string, GroupOwnerSetting?:array{AutoAddGroupOwner?:bool, GroupOwner?:string}, SourcePath?:string}, S3MachineLearningModelResourceData?:array{DestinationPath?:string, OwnerSetting?:array{GroupOwner:string, GroupPermission:"ro"|"rw"}, S3Uri?:string}, SageMakerMachineLearningModelResourceData?:array{DestinationPath?:string, OwnerSetting?:array{GroupOwner:string, GroupPermission:"ro"|"rw"}, SageMakerJobArn?:string}, SecretsManagerSecretResourceData?:array{ARN?:string, AdditionalStagingLabelsToDownload?:array<string>}}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTimestamp?:string, Id?:string, Version?:string}>
     */
    public function createResourceDefinitionVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AmznClientToken?:string, S3UrlSignerRole:string, SoftwareToUpdate:"core"|"ota_agent", UpdateAgentLogLevel?:"NONE"|"TRACE"|"DEBUG"|"VERBOSE"|"INFO"|"WARN"|"ERROR"|"FATAL", UpdateTargets:array<string>, UpdateTargetsArchitecture:"armv6l"|"armv7l"|"x86_64"|"aarch64", UpdateTargetsOperatingSystem:"ubuntu"|"raspbian"|"amazon_linux"|"openwrt"} $args
     * @return \AWS\Result<array{IotJobArn?:string, IotJobId?:string, PlatformSoftwareVersion?:string}>
     */
    public function createSoftwareUpdateJob(array $args): \AWS\Result { }

    /**
     * @param array{AmznClientToken?:string, S3UrlSignerRole:string, SoftwareToUpdate:"core"|"ota_agent", UpdateAgentLogLevel?:"NONE"|"TRACE"|"DEBUG"|"VERBOSE"|"INFO"|"WARN"|"ERROR"|"FATAL", UpdateTargets:array<string>, UpdateTargetsArchitecture:"armv6l"|"armv7l"|"x86_64"|"aarch64", UpdateTargetsOperatingSystem:"ubuntu"|"raspbian"|"amazon_linux"|"openwrt"} $args
     * @return \GuzzleHttp\Promise\Promise<array{IotJobArn?:string, IotJobId?:string, PlatformSoftwareVersion?:string}>
     */
    public function createSoftwareUpdateJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AmznClientToken?:string, InitialVersion?:array{Subscriptions?:array<array{Id:string, Source:string, Subject:string, Target:string}>}, Name?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string}>
     */
    public function createSubscriptionDefinition(array $args = []): \AWS\Result { }

    /**
     * @param array{AmznClientToken?:string, InitialVersion?:array{Subscriptions?:array<array{Id:string, Source:string, Subject:string, Target:string}>}, Name?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string}>
     */
    public function createSubscriptionDefinitionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AmznClientToken?:string, SubscriptionDefinitionId:string, Subscriptions?:array<array{Id:string, Source:string, Subject:string, Target:string}>} $args
     * @return \AWS\Result<array{Arn?:string, CreationTimestamp?:string, Id?:string, Version?:string}>
     */
    public function createSubscriptionDefinitionVersion(array $args): \AWS\Result { }

    /**
     * @param array{AmznClientToken?:string, SubscriptionDefinitionId:string, Subscriptions?:array<array{Id:string, Source:string, Subject:string, Target:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTimestamp?:string, Id?:string, Version?:string}>
     */
    public function createSubscriptionDefinitionVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConnectorDefinitionId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteConnectorDefinition(array $args): \AWS\Result { }

    /**
     * @param array{ConnectorDefinitionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteConnectorDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CoreDefinitionId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteCoreDefinition(array $args): \AWS\Result { }

    /**
     * @param array{CoreDefinitionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteCoreDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DeviceDefinitionId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteDeviceDefinition(array $args): \AWS\Result { }

    /**
     * @param array{DeviceDefinitionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteDeviceDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionDefinitionId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteFunctionDefinition(array $args): \AWS\Result { }

    /**
     * @param array{FunctionDefinitionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteFunctionDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteGroup(array $args): \AWS\Result { }

    /**
     * @param array{GroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoggerDefinitionId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteLoggerDefinition(array $args): \AWS\Result { }

    /**
     * @param array{LoggerDefinitionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteLoggerDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceDefinitionId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteResourceDefinition(array $args): \AWS\Result { }

    /**
     * @param array{ResourceDefinitionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteResourceDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SubscriptionDefinitionId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSubscriptionDefinition(array $args): \AWS\Result { }

    /**
     * @param array{SubscriptionDefinitionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteSubscriptionDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupId:string} $args
     * @return \AWS\Result<array{DisassociatedAt?:string}>
     */
    public function disassociateRoleFromGroup(array $args): \AWS\Result { }

    /**
     * @param array{GroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DisassociatedAt?:string}>
     */
    public function disassociateRoleFromGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{DisassociatedAt?:string}>
     */
    public function disassociateServiceRoleFromAccount(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{DisassociatedAt?:string}>
     */
    public function disassociateServiceRoleFromAccountAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupId:string} $args
     * @return \AWS\Result<array{AssociatedAt?:string, RoleArn?:string}>
     */
    public function getAssociatedRole(array $args): \AWS\Result { }

    /**
     * @param array{GroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AssociatedAt?:string, RoleArn?:string}>
     */
    public function getAssociatedRoleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BulkDeploymentId:string} $args
     * @return \AWS\Result<array{BulkDeploymentMetrics?:array{InvalidInputRecords?:int, RecordsProcessed?:int, RetryAttempts?:int}, BulkDeploymentStatus?:"Initializing"|"Running"|"Completed"|"Stopping"|"Stopped"|"Failed", CreatedAt?:string, ErrorDetails?:array<array{DetailedErrorCode?:string, DetailedErrorMessage?:string}>, ErrorMessage?:string, tags?:array<string, string>}>
     */
    public function getBulkDeploymentStatus(array $args): \AWS\Result { }

    /**
     * @param array{BulkDeploymentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BulkDeploymentMetrics?:array{InvalidInputRecords?:int, RecordsProcessed?:int, RetryAttempts?:int}, BulkDeploymentStatus?:"Initializing"|"Running"|"Completed"|"Stopping"|"Stopped"|"Failed", CreatedAt?:string, ErrorDetails?:array<array{DetailedErrorCode?:string, DetailedErrorMessage?:string}>, ErrorMessage?:string, tags?:array<string, string>}>
     */
    public function getBulkDeploymentStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ThingName:string} $args
     * @return \AWS\Result<array{ConnectivityInfo?:array<array{HostAddress?:string, Id?:string, Metadata?:string, PortNumber?:int}>, Message?:string}>
     */
    public function getConnectivityInfo(array $args): \AWS\Result { }

    /**
     * @param array{ThingName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConnectivityInfo?:array<array{HostAddress?:string, Id?:string, Metadata?:string, PortNumber?:int}>, Message?:string}>
     */
    public function getConnectivityInfoAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConnectorDefinitionId:string} $args
     * @return \AWS\Result<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string, tags?:array<string, string>}>
     */
    public function getConnectorDefinition(array $args): \AWS\Result { }

    /**
     * @param array{ConnectorDefinitionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string, tags?:array<string, string>}>
     */
    public function getConnectorDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConnectorDefinitionId:string, ConnectorDefinitionVersionId:string, NextToken?:string} $args
     * @return \AWS\Result<array{Arn?:string, CreationTimestamp?:string, Definition?:array{Connectors?:array<array{ConnectorArn:string, Id:string, Parameters?:array<string, string>}>}, Id?:string, NextToken?:string, Version?:string}>
     */
    public function getConnectorDefinitionVersion(array $args): \AWS\Result { }

    /**
     * @param array{ConnectorDefinitionId:string, ConnectorDefinitionVersionId:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTimestamp?:string, Definition?:array{Connectors?:array<array{ConnectorArn:string, Id:string, Parameters?:array<string, string>}>}, Id?:string, NextToken?:string, Version?:string}>
     */
    public function getConnectorDefinitionVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CoreDefinitionId:string} $args
     * @return \AWS\Result<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string, tags?:array<string, string>}>
     */
    public function getCoreDefinition(array $args): \AWS\Result { }

    /**
     * @param array{CoreDefinitionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string, tags?:array<string, string>}>
     */
    public function getCoreDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CoreDefinitionId:string, CoreDefinitionVersionId:string} $args
     * @return \AWS\Result<array{Arn?:string, CreationTimestamp?:string, Definition?:array{Cores?:array<array{CertificateArn:string, Id:string, SyncShadow?:bool, ThingArn:string}>}, Id?:string, NextToken?:string, Version?:string}>
     */
    public function getCoreDefinitionVersion(array $args): \AWS\Result { }

    /**
     * @param array{CoreDefinitionId:string, CoreDefinitionVersionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTimestamp?:string, Definition?:array{Cores?:array<array{CertificateArn:string, Id:string, SyncShadow?:bool, ThingArn:string}>}, Id?:string, NextToken?:string, Version?:string}>
     */
    public function getCoreDefinitionVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DeploymentId:string, GroupId:string} $args
     * @return \AWS\Result<array{DeploymentStatus?:string, DeploymentType?:"NewDeployment"|"Redeployment"|"ResetDeployment"|"ForceResetDeployment", ErrorDetails?:array<array{DetailedErrorCode?:string, DetailedErrorMessage?:string}>, ErrorMessage?:string, UpdatedAt?:string}>
     */
    public function getDeploymentStatus(array $args): \AWS\Result { }

    /**
     * @param array{DeploymentId:string, GroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DeploymentStatus?:string, DeploymentType?:"NewDeployment"|"Redeployment"|"ResetDeployment"|"ForceResetDeployment", ErrorDetails?:array<array{DetailedErrorCode?:string, DetailedErrorMessage?:string}>, ErrorMessage?:string, UpdatedAt?:string}>
     */
    public function getDeploymentStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DeviceDefinitionId:string} $args
     * @return \AWS\Result<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string, tags?:array<string, string>}>
     */
    public function getDeviceDefinition(array $args): \AWS\Result { }

    /**
     * @param array{DeviceDefinitionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string, tags?:array<string, string>}>
     */
    public function getDeviceDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DeviceDefinitionId:string, DeviceDefinitionVersionId:string, NextToken?:string} $args
     * @return \AWS\Result<array{Arn?:string, CreationTimestamp?:string, Definition?:array{Devices?:array<array{CertificateArn:string, Id:string, SyncShadow?:bool, ThingArn:string}>}, Id?:string, NextToken?:string, Version?:string}>
     */
    public function getDeviceDefinitionVersion(array $args): \AWS\Result { }

    /**
     * @param array{DeviceDefinitionId:string, DeviceDefinitionVersionId:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTimestamp?:string, Definition?:array{Devices?:array<array{CertificateArn:string, Id:string, SyncShadow?:bool, ThingArn:string}>}, Id?:string, NextToken?:string, Version?:string}>
     */
    public function getDeviceDefinitionVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionDefinitionId:string} $args
     * @return \AWS\Result<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string, tags?:array<string, string>}>
     */
    public function getFunctionDefinition(array $args): \AWS\Result { }

    /**
     * @param array{FunctionDefinitionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string, tags?:array<string, string>}>
     */
    public function getFunctionDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionDefinitionId:string, FunctionDefinitionVersionId:string, NextToken?:string} $args
     * @return \AWS\Result<array{Arn?:string, CreationTimestamp?:string, Definition?:array{DefaultConfig?:array{Execution?:array{IsolationMode?:"GreengrassContainer"|"NoContainer", RunAs?:array{Gid?:int, Uid?:int}}}, Functions?:array<array{FunctionArn?:string, FunctionConfiguration?:array{EncodingType?:"binary"|"json", Environment?:array{AccessSysfs?:bool, Execution?:array{IsolationMode?:"GreengrassContainer"|"NoContainer", RunAs?:array{Gid?:int, Uid?:int}}, ResourceAccessPolicies?:array<array{Permission?:"ro"|"rw", ResourceId:string}>, Variables?:array<string, string>}, ExecArgs?:string, Executable?:string, MemorySize?:int, Pinned?:bool, Timeout?:int, FunctionRuntimeOverride?:string}, Id:string}>}, Id?:string, NextToken?:string, Version?:string}>
     */
    public function getFunctionDefinitionVersion(array $args): \AWS\Result { }

    /**
     * @param array{FunctionDefinitionId:string, FunctionDefinitionVersionId:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTimestamp?:string, Definition?:array{DefaultConfig?:array{Execution?:array{IsolationMode?:"GreengrassContainer"|"NoContainer", RunAs?:array{Gid?:int, Uid?:int}}}, Functions?:array<array{FunctionArn?:string, FunctionConfiguration?:array{EncodingType?:"binary"|"json", Environment?:array{AccessSysfs?:bool, Execution?:array{IsolationMode?:"GreengrassContainer"|"NoContainer", RunAs?:array{Gid?:int, Uid?:int}}, ResourceAccessPolicies?:array<array{Permission?:"ro"|"rw", ResourceId:string}>, Variables?:array<string, string>}, ExecArgs?:string, Executable?:string, MemorySize?:int, Pinned?:bool, Timeout?:int, FunctionRuntimeOverride?:string}, Id:string}>}, Id?:string, NextToken?:string, Version?:string}>
     */
    public function getFunctionDefinitionVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupId:string} $args
     * @return \AWS\Result<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string, tags?:array<string, string>}>
     */
    public function getGroup(array $args): \AWS\Result { }

    /**
     * @param array{GroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string, tags?:array<string, string>}>
     */
    public function getGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CertificateAuthorityId:string, GroupId:string} $args
     * @return \AWS\Result<array{GroupCertificateAuthorityArn?:string, GroupCertificateAuthorityId?:string, PemEncodedCertificate?:string}>
     */
    public function getGroupCertificateAuthority(array $args): \AWS\Result { }

    /**
     * @param array{CertificateAuthorityId:string, GroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GroupCertificateAuthorityArn?:string, GroupCertificateAuthorityId?:string, PemEncodedCertificate?:string}>
     */
    public function getGroupCertificateAuthorityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupId:string} $args
     * @return \AWS\Result<array{CertificateAuthorityExpiryInMilliseconds?:string, CertificateExpiryInMilliseconds?:string, GroupId?:string}>
     */
    public function getGroupCertificateConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{GroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CertificateAuthorityExpiryInMilliseconds?:string, CertificateExpiryInMilliseconds?:string, GroupId?:string}>
     */
    public function getGroupCertificateConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupId:string, GroupVersionId:string} $args
     * @return \AWS\Result<array{Arn?:string, CreationTimestamp?:string, Definition?:array{ConnectorDefinitionVersionArn?:string, CoreDefinitionVersionArn?:string, DeviceDefinitionVersionArn?:string, FunctionDefinitionVersionArn?:string, LoggerDefinitionVersionArn?:string, ResourceDefinitionVersionArn?:string, SubscriptionDefinitionVersionArn?:string}, Id?:string, Version?:string}>
     */
    public function getGroupVersion(array $args): \AWS\Result { }

    /**
     * @param array{GroupId:string, GroupVersionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTimestamp?:string, Definition?:array{ConnectorDefinitionVersionArn?:string, CoreDefinitionVersionArn?:string, DeviceDefinitionVersionArn?:string, FunctionDefinitionVersionArn?:string, LoggerDefinitionVersionArn?:string, ResourceDefinitionVersionArn?:string, SubscriptionDefinitionVersionArn?:string}, Id?:string, Version?:string}>
     */
    public function getGroupVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoggerDefinitionId:string} $args
     * @return \AWS\Result<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string, tags?:array<string, string>}>
     */
    public function getLoggerDefinition(array $args): \AWS\Result { }

    /**
     * @param array{LoggerDefinitionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string, tags?:array<string, string>}>
     */
    public function getLoggerDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoggerDefinitionId:string, LoggerDefinitionVersionId:string, NextToken?:string} $args
     * @return \AWS\Result<array{Arn?:string, CreationTimestamp?:string, Definition?:array{Loggers?:array<array{Component:"GreengrassSystem"|"Lambda", Id:string, Level:"DEBUG"|"INFO"|"WARN"|"ERROR"|"FATAL", Space?:int, Type:"FileSystem"|"AWSCloudWatch"}>}, Id?:string, Version?:string}>
     */
    public function getLoggerDefinitionVersion(array $args): \AWS\Result { }

    /**
     * @param array{LoggerDefinitionId:string, LoggerDefinitionVersionId:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTimestamp?:string, Definition?:array{Loggers?:array<array{Component:"GreengrassSystem"|"Lambda", Id:string, Level:"DEBUG"|"INFO"|"WARN"|"ERROR"|"FATAL", Space?:int, Type:"FileSystem"|"AWSCloudWatch"}>}, Id?:string, Version?:string}>
     */
    public function getLoggerDefinitionVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceDefinitionId:string} $args
     * @return \AWS\Result<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string, tags?:array<string, string>}>
     */
    public function getResourceDefinition(array $args): \AWS\Result { }

    /**
     * @param array{ResourceDefinitionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string, tags?:array<string, string>}>
     */
    public function getResourceDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceDefinitionId:string, ResourceDefinitionVersionId:string} $args
     * @return \AWS\Result<array{Arn?:string, CreationTimestamp?:string, Definition?:array{Resources?:array<array{Id:string, Name:string, ResourceDataContainer:array{LocalDeviceResourceData?:array{GroupOwnerSetting?:array{AutoAddGroupOwner?:bool, GroupOwner?:string}, SourcePath?:string}, LocalVolumeResourceData?:array{DestinationPath?:string, GroupOwnerSetting?:array{AutoAddGroupOwner?:bool, GroupOwner?:string}, SourcePath?:string}, S3MachineLearningModelResourceData?:array{DestinationPath?:string, OwnerSetting?:array{GroupOwner:string, GroupPermission:"ro"|"rw"}, S3Uri?:string}, SageMakerMachineLearningModelResourceData?:array{DestinationPath?:string, OwnerSetting?:array{GroupOwner:string, GroupPermission:"ro"|"rw"}, SageMakerJobArn?:string}, SecretsManagerSecretResourceData?:array{ARN?:string, AdditionalStagingLabelsToDownload?:array<string>}}}>}, Id?:string, Version?:string}>
     */
    public function getResourceDefinitionVersion(array $args): \AWS\Result { }

    /**
     * @param array{ResourceDefinitionId:string, ResourceDefinitionVersionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTimestamp?:string, Definition?:array{Resources?:array<array{Id:string, Name:string, ResourceDataContainer:array{LocalDeviceResourceData?:array{GroupOwnerSetting?:array{AutoAddGroupOwner?:bool, GroupOwner?:string}, SourcePath?:string}, LocalVolumeResourceData?:array{DestinationPath?:string, GroupOwnerSetting?:array{AutoAddGroupOwner?:bool, GroupOwner?:string}, SourcePath?:string}, S3MachineLearningModelResourceData?:array{DestinationPath?:string, OwnerSetting?:array{GroupOwner:string, GroupPermission:"ro"|"rw"}, S3Uri?:string}, SageMakerMachineLearningModelResourceData?:array{DestinationPath?:string, OwnerSetting?:array{GroupOwner:string, GroupPermission:"ro"|"rw"}, SageMakerJobArn?:string}, SecretsManagerSecretResourceData?:array{ARN?:string, AdditionalStagingLabelsToDownload?:array<string>}}}>}, Id?:string, Version?:string}>
     */
    public function getResourceDefinitionVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{AssociatedAt?:string, RoleArn?:string}>
     */
    public function getServiceRoleForAccount(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{AssociatedAt?:string, RoleArn?:string}>
     */
    public function getServiceRoleForAccountAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SubscriptionDefinitionId:string} $args
     * @return \AWS\Result<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string, tags?:array<string, string>}>
     */
    public function getSubscriptionDefinition(array $args): \AWS\Result { }

    /**
     * @param array{SubscriptionDefinitionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string, tags?:array<string, string>}>
     */
    public function getSubscriptionDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, SubscriptionDefinitionId:string, SubscriptionDefinitionVersionId:string} $args
     * @return \AWS\Result<array{Arn?:string, CreationTimestamp?:string, Definition?:array{Subscriptions?:array<array{Id:string, Source:string, Subject:string, Target:string}>}, Id?:string, NextToken?:string, Version?:string}>
     */
    public function getSubscriptionDefinitionVersion(array $args): \AWS\Result { }

    /**
     * @param array{NextToken?:string, SubscriptionDefinitionId:string, SubscriptionDefinitionVersionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreationTimestamp?:string, Definition?:array{Subscriptions?:array<array{Id:string, Source:string, Subject:string, Target:string}>}, Id?:string, NextToken?:string, Version?:string}>
     */
    public function getSubscriptionDefinitionVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ThingName:string} $args
     * @return \AWS\Result<array{RuntimeConfiguration?:array{TelemetryConfiguration?:array{ConfigurationSyncStatus?:"InSync"|"OutOfSync", Telemetry:"On"|"Off"}}}>
     */
    public function getThingRuntimeConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ThingName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RuntimeConfiguration?:array{TelemetryConfiguration?:array{ConfigurationSyncStatus?:"InSync"|"OutOfSync", Telemetry:"On"|"Off"}}}>
     */
    public function getThingRuntimeConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BulkDeploymentId:string, MaxResults?:string, NextToken?:string} $args
     * @return \AWS\Result<array{Deployments?:array<array{CreatedAt?:string, DeploymentArn?:string, DeploymentId?:string, DeploymentStatus?:string, DeploymentType?:"NewDeployment"|"Redeployment"|"ResetDeployment"|"ForceResetDeployment", ErrorDetails?:array<array{DetailedErrorCode?:string, DetailedErrorMessage?:string}>, ErrorMessage?:string, GroupArn?:string}>, NextToken?:string}>
     */
    public function listBulkDeploymentDetailedReports(array $args): \AWS\Result { }

    /**
     * @param array{BulkDeploymentId:string, MaxResults?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Deployments?:array<array{CreatedAt?:string, DeploymentArn?:string, DeploymentId?:string, DeploymentStatus?:string, DeploymentType?:"NewDeployment"|"Redeployment"|"ResetDeployment"|"ForceResetDeployment", ErrorDetails?:array<array{DetailedErrorCode?:string, DetailedErrorMessage?:string}>, ErrorMessage?:string, GroupArn?:string}>, NextToken?:string}>
     */
    public function listBulkDeploymentDetailedReportsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:string, NextToken?:string} $args
     * @return \AWS\Result<array{BulkDeployments?:array<array{BulkDeploymentArn?:string, BulkDeploymentId?:string, CreatedAt?:string}>, NextToken?:string}>
     */
    public function listBulkDeployments(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BulkDeployments?:array<array{BulkDeploymentArn?:string, BulkDeploymentId?:string, CreatedAt?:string}>, NextToken?:string}>
     */
    public function listBulkDeploymentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConnectorDefinitionId:string, MaxResults?:string, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Versions?:array<array{Arn?:string, CreationTimestamp?:string, Id?:string, Version?:string}>}>
     */
    public function listConnectorDefinitionVersions(array $args): \AWS\Result { }

    /**
     * @param array{ConnectorDefinitionId:string, MaxResults?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Versions?:array<array{Arn?:string, CreationTimestamp?:string, Id?:string, Version?:string}>}>
     */
    public function listConnectorDefinitionVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:string, NextToken?:string} $args
     * @return \AWS\Result<array{Definitions?:array<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listConnectorDefinitions(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Definitions?:array<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listConnectorDefinitionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CoreDefinitionId:string, MaxResults?:string, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Versions?:array<array{Arn?:string, CreationTimestamp?:string, Id?:string, Version?:string}>}>
     */
    public function listCoreDefinitionVersions(array $args): \AWS\Result { }

    /**
     * @param array{CoreDefinitionId:string, MaxResults?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Versions?:array<array{Arn?:string, CreationTimestamp?:string, Id?:string, Version?:string}>}>
     */
    public function listCoreDefinitionVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:string, NextToken?:string} $args
     * @return \AWS\Result<array{Definitions?:array<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listCoreDefinitions(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Definitions?:array<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listCoreDefinitionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupId:string, MaxResults?:string, NextToken?:string} $args
     * @return \AWS\Result<array{Deployments?:array<array{CreatedAt?:string, DeploymentArn?:string, DeploymentId?:string, DeploymentType?:"NewDeployment"|"Redeployment"|"ResetDeployment"|"ForceResetDeployment", GroupArn?:string}>, NextToken?:string}>
     */
    public function listDeployments(array $args): \AWS\Result { }

    /**
     * @param array{GroupId:string, MaxResults?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Deployments?:array<array{CreatedAt?:string, DeploymentArn?:string, DeploymentId?:string, DeploymentType?:"NewDeployment"|"Redeployment"|"ResetDeployment"|"ForceResetDeployment", GroupArn?:string}>, NextToken?:string}>
     */
    public function listDeploymentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DeviceDefinitionId:string, MaxResults?:string, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Versions?:array<array{Arn?:string, CreationTimestamp?:string, Id?:string, Version?:string}>}>
     */
    public function listDeviceDefinitionVersions(array $args): \AWS\Result { }

    /**
     * @param array{DeviceDefinitionId:string, MaxResults?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Versions?:array<array{Arn?:string, CreationTimestamp?:string, Id?:string, Version?:string}>}>
     */
    public function listDeviceDefinitionVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:string, NextToken?:string} $args
     * @return \AWS\Result<array{Definitions?:array<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listDeviceDefinitions(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Definitions?:array<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listDeviceDefinitionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionDefinitionId:string, MaxResults?:string, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Versions?:array<array{Arn?:string, CreationTimestamp?:string, Id?:string, Version?:string}>}>
     */
    public function listFunctionDefinitionVersions(array $args): \AWS\Result { }

    /**
     * @param array{FunctionDefinitionId:string, MaxResults?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Versions?:array<array{Arn?:string, CreationTimestamp?:string, Id?:string, Version?:string}>}>
     */
    public function listFunctionDefinitionVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:string, NextToken?:string} $args
     * @return \AWS\Result<array{Definitions?:array<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listFunctionDefinitions(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Definitions?:array<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listFunctionDefinitionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupId:string} $args
     * @return \AWS\Result<array{GroupCertificateAuthorities?:array<array{GroupCertificateAuthorityArn?:string, GroupCertificateAuthorityId?:string}>}>
     */
    public function listGroupCertificateAuthorities(array $args): \AWS\Result { }

    /**
     * @param array{GroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GroupCertificateAuthorities?:array<array{GroupCertificateAuthorityArn?:string, GroupCertificateAuthorityId?:string}>}>
     */
    public function listGroupCertificateAuthoritiesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupId:string, MaxResults?:string, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Versions?:array<array{Arn?:string, CreationTimestamp?:string, Id?:string, Version?:string}>}>
     */
    public function listGroupVersions(array $args): \AWS\Result { }

    /**
     * @param array{GroupId:string, MaxResults?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Versions?:array<array{Arn?:string, CreationTimestamp?:string, Id?:string, Version?:string}>}>
     */
    public function listGroupVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:string, NextToken?:string} $args
     * @return \AWS\Result<array{Groups?:array<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string}>, NextToken?:string}>
     */
    public function listGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Groups?:array<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string}>, NextToken?:string}>
     */
    public function listGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoggerDefinitionId:string, MaxResults?:string, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Versions?:array<array{Arn?:string, CreationTimestamp?:string, Id?:string, Version?:string}>}>
     */
    public function listLoggerDefinitionVersions(array $args): \AWS\Result { }

    /**
     * @param array{LoggerDefinitionId:string, MaxResults?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Versions?:array<array{Arn?:string, CreationTimestamp?:string, Id?:string, Version?:string}>}>
     */
    public function listLoggerDefinitionVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:string, NextToken?:string} $args
     * @return \AWS\Result<array{Definitions?:array<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listLoggerDefinitions(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Definitions?:array<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listLoggerDefinitionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:string, NextToken?:string, ResourceDefinitionId:string} $args
     * @return \AWS\Result<array{NextToken?:string, Versions?:array<array{Arn?:string, CreationTimestamp?:string, Id?:string, Version?:string}>}>
     */
    public function listResourceDefinitionVersions(array $args): \AWS\Result { }

    /**
     * @param array{MaxResults?:string, NextToken?:string, ResourceDefinitionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Versions?:array<array{Arn?:string, CreationTimestamp?:string, Id?:string, Version?:string}>}>
     */
    public function listResourceDefinitionVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:string, NextToken?:string} $args
     * @return \AWS\Result<array{Definitions?:array<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listResourceDefinitions(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Definitions?:array<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listResourceDefinitionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:string, NextToken?:string, SubscriptionDefinitionId:string} $args
     * @return \AWS\Result<array{NextToken?:string, Versions?:array<array{Arn?:string, CreationTimestamp?:string, Id?:string, Version?:string}>}>
     */
    public function listSubscriptionDefinitionVersions(array $args): \AWS\Result { }

    /**
     * @param array{MaxResults?:string, NextToken?:string, SubscriptionDefinitionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Versions?:array<array{Arn?:string, CreationTimestamp?:string, Id?:string, Version?:string}>}>
     */
    public function listSubscriptionDefinitionVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:string, NextToken?:string} $args
     * @return \AWS\Result<array{Definitions?:array<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listSubscriptionDefinitions(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Definitions?:array<array{Arn?:string, CreationTimestamp?:string, Id?:string, LastUpdatedTimestamp?:string, LatestVersion?:string, LatestVersionArn?:string, Name?:string, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listSubscriptionDefinitionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{tags?:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AmznClientToken?:string, Force?:bool, GroupId:string} $args
     * @return \AWS\Result<array{DeploymentArn?:string, DeploymentId?:string}>
     */
    public function resetDeployments(array $args): \AWS\Result { }

    /**
     * @param array{AmznClientToken?:string, Force?:bool, GroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DeploymentArn?:string, DeploymentId?:string}>
     */
    public function resetDeploymentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AmznClientToken?:string, ExecutionRoleArn:string, InputFileUri:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{BulkDeploymentArn?:string, BulkDeploymentId?:string}>
     */
    public function startBulkDeployment(array $args): \AWS\Result { }

    /**
     * @param array{AmznClientToken?:string, ExecutionRoleArn:string, InputFileUri:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{BulkDeploymentArn?:string, BulkDeploymentId?:string}>
     */
    public function startBulkDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BulkDeploymentId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopBulkDeployment(array $args): \AWS\Result { }

    /**
     * @param array{BulkDeploymentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopBulkDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, tags?:array<string, string>} $args
     * @return \AWS\Result<void>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, TagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConnectivityInfo?:array<array{HostAddress?:string, Id?:string, Metadata?:string, PortNumber?:int}>, ThingName:string} $args
     * @return \AWS\Result<array{Message?:string, Version?:string}>
     */
    public function updateConnectivityInfo(array $args): \AWS\Result { }

    /**
     * @param array{ConnectivityInfo?:array<array{HostAddress?:string, Id?:string, Metadata?:string, PortNumber?:int}>, ThingName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Message?:string, Version?:string}>
     */
    public function updateConnectivityInfoAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConnectorDefinitionId:string, Name?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateConnectorDefinition(array $args): \AWS\Result { }

    /**
     * @param array{ConnectorDefinitionId:string, Name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateConnectorDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CoreDefinitionId:string, Name?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateCoreDefinition(array $args): \AWS\Result { }

    /**
     * @param array{CoreDefinitionId:string, Name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateCoreDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DeviceDefinitionId:string, Name?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateDeviceDefinition(array $args): \AWS\Result { }

    /**
     * @param array{DeviceDefinitionId:string, Name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateDeviceDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FunctionDefinitionId:string, Name?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateFunctionDefinition(array $args): \AWS\Result { }

    /**
     * @param array{FunctionDefinitionId:string, Name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateFunctionDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupId:string, Name?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateGroup(array $args): \AWS\Result { }

    /**
     * @param array{GroupId:string, Name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CertificateExpiryInMilliseconds?:string, GroupId:string} $args
     * @return \AWS\Result<array{CertificateAuthorityExpiryInMilliseconds?:string, CertificateExpiryInMilliseconds?:string, GroupId?:string}>
     */
    public function updateGroupCertificateConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{CertificateExpiryInMilliseconds?:string, GroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CertificateAuthorityExpiryInMilliseconds?:string, CertificateExpiryInMilliseconds?:string, GroupId?:string}>
     */
    public function updateGroupCertificateConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LoggerDefinitionId:string, Name?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateLoggerDefinition(array $args): \AWS\Result { }

    /**
     * @param array{LoggerDefinitionId:string, Name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateLoggerDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name?:string, ResourceDefinitionId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateResourceDefinition(array $args): \AWS\Result { }

    /**
     * @param array{Name?:string, ResourceDefinitionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateResourceDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name?:string, SubscriptionDefinitionId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateSubscriptionDefinition(array $args): \AWS\Result { }

    /**
     * @param array{Name?:string, SubscriptionDefinitionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateSubscriptionDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TelemetryConfiguration?:array{Telemetry:"On"|"Off"}, ThingName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateThingRuntimeConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{TelemetryConfiguration?:array{Telemetry:"On"|"Off"}, ThingName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateThingRuntimeConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
