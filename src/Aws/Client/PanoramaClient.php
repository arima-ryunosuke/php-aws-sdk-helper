<?php
namespace AWS\Panorama;

class PanoramaClient
{
    /**
     * @param array{ApplicationInstanceIdToReplace?:string, DefaultRuntimeContextDevice:string, Description?:string, ManifestOverridesPayload?:array{PayloadData?:string}, ManifestPayload:array{PayloadData?:string}, Name?:string, RuntimeRoleArn?:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{ApplicationInstanceId:string}>
     */
    public function createApplicationInstance(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationInstanceIdToReplace?:string, DefaultRuntimeContextDevice:string, Description?:string, ManifestOverridesPayload?:array{PayloadData?:string}, ManifestPayload:array{PayloadData?:string}, Name?:string, RuntimeRoleArn?:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationInstanceId:string}>
     */
    public function createApplicationInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DeviceIds:array<string>, DeviceJobConfig?:array{OTAJobConfig?:array{AllowMajorVersionUpdate?:bool, ImageVersion:string}}, JobType:"OTA"|"REBOOT"} $args
     * @return \AWS\Result<array{Jobs:array<array{DeviceId?:string, JobId?:string}>}>
     */
    public function createJobForDevices(array $args): \AWS\Result { }

    /**
     * @param array{DeviceIds:array<string>, DeviceJobConfig?:array{OTAJobConfig?:array{AllowMajorVersionUpdate?:bool, ImageVersion:string}}, JobType:"OTA"|"REBOOT"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Jobs:array<array{DeviceId?:string, JobId?:string}>}>
     */
    public function createJobForDevicesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobTags?:array<array{ResourceType:"PACKAGE", Tags:array<string, string>}>, NodeDescription?:string, NodeName:string, OutputPackageName:string, OutputPackageVersion:string, TemplateParameters:array<string, string>, TemplateType:"RTSP_CAMERA_STREAM"} $args
     * @return \AWS\Result<array{JobId:string}>
     */
    public function createNodeFromTemplateJob(array $args): \AWS\Result { }

    /**
     * @param array{JobTags?:array<array{ResourceType:"PACKAGE", Tags:array<string, string>}>, NodeDescription?:string, NodeName:string, OutputPackageName:string, OutputPackageVersion:string, TemplateParameters:array<string, string>, TemplateType:"RTSP_CAMERA_STREAM"} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId:string}>
     */
    public function createNodeFromTemplateJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PackageName:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Arn?:string, PackageId?:string, StorageLocation:array{BinaryPrefixLocation:string, Bucket:string, GeneratedPrefixLocation:string, ManifestPrefixLocation:string, RepoPrefixLocation:string}}>
     */
    public function createPackage(array $args): \AWS\Result { }

    /**
     * @param array{PackageName:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, PackageId?:string, StorageLocation:array{BinaryPrefixLocation:string, Bucket:string, GeneratedPrefixLocation:string, ManifestPrefixLocation:string, RepoPrefixLocation:string}}>
     */
    public function createPackageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken:string, InputConfig:array{PackageVersionInputConfig?:array{S3Location:array{BucketName:string, ObjectKey:string, Region?:string}}}, JobTags?:array<array{ResourceType:"PACKAGE", Tags:array<string, string>}>, JobType:"NODE_PACKAGE_VERSION"|"MARKETPLACE_NODE_PACKAGE_VERSION", OutputConfig:array{PackageVersionOutputConfig?:array{MarkLatest?:bool, PackageName:string, PackageVersion:string}}} $args
     * @return \AWS\Result<array{JobId:string}>
     */
    public function createPackageImportJob(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken:string, InputConfig:array{PackageVersionInputConfig?:array{S3Location:array{BucketName:string, ObjectKey:string, Region?:string}}}, JobTags?:array<array{ResourceType:"PACKAGE", Tags:array<string, string>}>, JobType:"NODE_PACKAGE_VERSION"|"MARKETPLACE_NODE_PACKAGE_VERSION", OutputConfig:array{PackageVersionOutputConfig?:array{MarkLatest?:bool, PackageName:string, PackageVersion:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId:string}>
     */
    public function createPackageImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DeviceId:string} $args
     * @return \AWS\Result<array{DeviceId?:string}>
     */
    public function deleteDevice(array $args): \AWS\Result { }

    /**
     * @param array{DeviceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DeviceId?:string}>
     */
    public function deleteDeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ForceDelete?:bool, PackageId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deletePackage(array $args): \AWS\Result { }

    /**
     * @param array{ForceDelete?:bool, PackageId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deletePackageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OwnerAccount?:string, PackageId:string, PackageVersion:string, PatchVersion:string, UpdatedLatestPatchVersion?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deregisterPackageVersion(array $args): \AWS\Result { }

    /**
     * @param array{OwnerAccount?:string, PackageId:string, PackageVersion:string, PatchVersion:string, UpdatedLatestPatchVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deregisterPackageVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationInstanceId:string} $args
     * @return \AWS\Result<array{ApplicationInstanceId?:string, ApplicationInstanceIdToReplace?:string, Arn?:string, CreatedTime?:int|string|\DateTimeInterface, DefaultRuntimeContextDevice?:string, DefaultRuntimeContextDeviceName?:string, Description?:string, HealthStatus?:"RUNNING"|"ERROR"|"NOT_AVAILABLE", LastUpdatedTime?:int|string|\DateTimeInterface, Name?:string, RuntimeContextStates?:array<array{DesiredState:"RUNNING"|"STOPPED"|"REMOVED", DeviceReportedStatus:"STOPPING"|"STOPPED"|"STOP_ERROR"|"REMOVAL_FAILED"|"REMOVAL_IN_PROGRESS"|"STARTING"|"RUNNING"|"INSTALL_ERROR"|"LAUNCHED"|"LAUNCH_ERROR"|"INSTALL_IN_PROGRESS", DeviceReportedTime:int|string|\DateTimeInterface, RuntimeContextName:string}>, RuntimeRoleArn?:string, Status?:"DEPLOYMENT_PENDING"|"DEPLOYMENT_REQUESTED"|"DEPLOYMENT_IN_PROGRESS"|"DEPLOYMENT_ERROR"|"DEPLOYMENT_SUCCEEDED"|"REMOVAL_PENDING"|"REMOVAL_REQUESTED"|"REMOVAL_IN_PROGRESS"|"REMOVAL_FAILED"|"REMOVAL_SUCCEEDED"|"DEPLOYMENT_FAILED", StatusDescription?:string, Tags?:array<string, string>}>
     */
    public function describeApplicationInstance(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationInstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationInstanceId?:string, ApplicationInstanceIdToReplace?:string, Arn?:string, CreatedTime?:int|string|\DateTimeInterface, DefaultRuntimeContextDevice?:string, DefaultRuntimeContextDeviceName?:string, Description?:string, HealthStatus?:"RUNNING"|"ERROR"|"NOT_AVAILABLE", LastUpdatedTime?:int|string|\DateTimeInterface, Name?:string, RuntimeContextStates?:array<array{DesiredState:"RUNNING"|"STOPPED"|"REMOVED", DeviceReportedStatus:"STOPPING"|"STOPPED"|"STOP_ERROR"|"REMOVAL_FAILED"|"REMOVAL_IN_PROGRESS"|"STARTING"|"RUNNING"|"INSTALL_ERROR"|"LAUNCHED"|"LAUNCH_ERROR"|"INSTALL_IN_PROGRESS", DeviceReportedTime:int|string|\DateTimeInterface, RuntimeContextName:string}>, RuntimeRoleArn?:string, Status?:"DEPLOYMENT_PENDING"|"DEPLOYMENT_REQUESTED"|"DEPLOYMENT_IN_PROGRESS"|"DEPLOYMENT_ERROR"|"DEPLOYMENT_SUCCEEDED"|"REMOVAL_PENDING"|"REMOVAL_REQUESTED"|"REMOVAL_IN_PROGRESS"|"REMOVAL_FAILED"|"REMOVAL_SUCCEEDED"|"DEPLOYMENT_FAILED", StatusDescription?:string, Tags?:array<string, string>}>
     */
    public function describeApplicationInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationInstanceId:string} $args
     * @return \AWS\Result<array{ApplicationInstanceId?:string, ApplicationInstanceIdToReplace?:string, CreatedTime?:int|string|\DateTimeInterface, DefaultRuntimeContextDevice?:string, Description?:string, ManifestOverridesPayload?:array{PayloadData?:string}, ManifestPayload?:array{PayloadData?:string}, Name?:string}>
     */
    public function describeApplicationInstanceDetails(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationInstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationInstanceId?:string, ApplicationInstanceIdToReplace?:string, CreatedTime?:int|string|\DateTimeInterface, DefaultRuntimeContextDevice?:string, Description?:string, ManifestOverridesPayload?:array{PayloadData?:string}, ManifestPayload?:array{PayloadData?:string}, Name?:string}>
     */
    public function describeApplicationInstanceDetailsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DeviceId:string} $args
     * @return \AWS\Result<array{AlternateSoftwares?:array<array{Version?:string}>, Arn?:string, Brand?:"AWS_PANORAMA"|"LENOVO", CreatedTime?:int|string|\DateTimeInterface, CurrentNetworkingStatus?:array{Ethernet0Status?:array{ConnectionStatus?:"CONNECTED"|"NOT_CONNECTED"|"CONNECTING", HwAddress?:string, IpAddress?:string}, Ethernet1Status?:array{ConnectionStatus?:"CONNECTED"|"NOT_CONNECTED"|"CONNECTING", HwAddress?:string, IpAddress?:string}, LastUpdatedTime?:int|string|\DateTimeInterface, NtpStatus?:array{ConnectionStatus?:"CONNECTED"|"NOT_CONNECTED"|"CONNECTING", IpAddress?:string, NtpServerName?:string}}, CurrentSoftware?:string, Description?:string, DeviceAggregatedStatus?:"ERROR"|"AWAITING_PROVISIONING"|"PENDING"|"FAILED"|"DELETING"|"ONLINE"|"OFFLINE"|"LEASE_EXPIRED"|"UPDATE_NEEDED"|"REBOOTING", DeviceConnectionStatus?:"ONLINE"|"OFFLINE"|"AWAITING_CREDENTIALS"|"NOT_AVAILABLE"|"ERROR", DeviceId?:string, LatestAlternateSoftware?:string, LatestDeviceJob?:array{ImageVersion?:string, JobType?:"OTA"|"REBOOT", Status?:"PENDING"|"IN_PROGRESS"|"VERIFYING"|"REBOOTING"|"DOWNLOADING"|"COMPLETED"|"FAILED"}, LatestSoftware?:string, LeaseExpirationTime?:int|string|\DateTimeInterface, Name?:string, NetworkingConfiguration?:array{Ethernet0?:array{ConnectionType:"STATIC_IP"|"DHCP", StaticIpConnectionInfo?:array{DefaultGateway:string, Dns:array<string>, IpAddress:string, Mask:string}}, Ethernet1?:array{ConnectionType:"STATIC_IP"|"DHCP", StaticIpConnectionInfo?:array{DefaultGateway:string, Dns:array<string>, IpAddress:string, Mask:string}}, Ntp?:array{NtpServers:array<string>}}, ProvisioningStatus?:"AWAITING_PROVISIONING"|"PENDING"|"SUCCEEDED"|"FAILED"|"ERROR"|"DELETING", SerialNumber?:string, Tags?:array<string, string>, Type?:"PANORAMA_APPLIANCE_DEVELOPER_KIT"|"PANORAMA_APPLIANCE"}>
     */
    public function describeDevice(array $args): \AWS\Result { }

    /**
     * @param array{DeviceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AlternateSoftwares?:array<array{Version?:string}>, Arn?:string, Brand?:"AWS_PANORAMA"|"LENOVO", CreatedTime?:int|string|\DateTimeInterface, CurrentNetworkingStatus?:array{Ethernet0Status?:array{ConnectionStatus?:"CONNECTED"|"NOT_CONNECTED"|"CONNECTING", HwAddress?:string, IpAddress?:string}, Ethernet1Status?:array{ConnectionStatus?:"CONNECTED"|"NOT_CONNECTED"|"CONNECTING", HwAddress?:string, IpAddress?:string}, LastUpdatedTime?:int|string|\DateTimeInterface, NtpStatus?:array{ConnectionStatus?:"CONNECTED"|"NOT_CONNECTED"|"CONNECTING", IpAddress?:string, NtpServerName?:string}}, CurrentSoftware?:string, Description?:string, DeviceAggregatedStatus?:"ERROR"|"AWAITING_PROVISIONING"|"PENDING"|"FAILED"|"DELETING"|"ONLINE"|"OFFLINE"|"LEASE_EXPIRED"|"UPDATE_NEEDED"|"REBOOTING", DeviceConnectionStatus?:"ONLINE"|"OFFLINE"|"AWAITING_CREDENTIALS"|"NOT_AVAILABLE"|"ERROR", DeviceId?:string, LatestAlternateSoftware?:string, LatestDeviceJob?:array{ImageVersion?:string, JobType?:"OTA"|"REBOOT", Status?:"PENDING"|"IN_PROGRESS"|"VERIFYING"|"REBOOTING"|"DOWNLOADING"|"COMPLETED"|"FAILED"}, LatestSoftware?:string, LeaseExpirationTime?:int|string|\DateTimeInterface, Name?:string, NetworkingConfiguration?:array{Ethernet0?:array{ConnectionType:"STATIC_IP"|"DHCP", StaticIpConnectionInfo?:array{DefaultGateway:string, Dns:array<string>, IpAddress:string, Mask:string}}, Ethernet1?:array{ConnectionType:"STATIC_IP"|"DHCP", StaticIpConnectionInfo?:array{DefaultGateway:string, Dns:array<string>, IpAddress:string, Mask:string}}, Ntp?:array{NtpServers:array<string>}}, ProvisioningStatus?:"AWAITING_PROVISIONING"|"PENDING"|"SUCCEEDED"|"FAILED"|"ERROR"|"DELETING", SerialNumber?:string, Tags?:array<string, string>, Type?:"PANORAMA_APPLIANCE_DEVELOPER_KIT"|"PANORAMA_APPLIANCE"}>
     */
    public function describeDeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{CreatedTime?:int|string|\DateTimeInterface, DeviceArn?:string, DeviceId?:string, DeviceName?:string, DeviceType?:"PANORAMA_APPLIANCE_DEVELOPER_KIT"|"PANORAMA_APPLIANCE", ImageVersion?:string, JobId?:string, JobType?:"OTA"|"REBOOT", Status?:"PENDING"|"IN_PROGRESS"|"VERIFYING"|"REBOOTING"|"DOWNLOADING"|"COMPLETED"|"FAILED"}>
     */
    public function describeDeviceJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CreatedTime?:int|string|\DateTimeInterface, DeviceArn?:string, DeviceId?:string, DeviceName?:string, DeviceType?:"PANORAMA_APPLIANCE_DEVELOPER_KIT"|"PANORAMA_APPLIANCE", ImageVersion?:string, JobId?:string, JobType?:"OTA"|"REBOOT", Status?:"PENDING"|"IN_PROGRESS"|"VERIFYING"|"REBOOTING"|"DOWNLOADING"|"COMPLETED"|"FAILED"}>
     */
    public function describeDeviceJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NodeId:string, OwnerAccount?:string} $args
     * @return \AWS\Result<array{AssetName?:string, Category:"BUSINESS_LOGIC"|"ML_MODEL"|"MEDIA_SOURCE"|"MEDIA_SINK", CreatedTime:int|string|\DateTimeInterface, Description:string, LastUpdatedTime:int|string|\DateTimeInterface, Name:string, NodeId:string, NodeInterface:array{Inputs:array<array{DefaultValue?:string, Description?:string, MaxConnections?:int, Name?:string, Type?:"BOOLEAN"|"STRING"|"INT32"|"FLOAT32"|"MEDIA"}>, Outputs:array<array{Description?:string, Name?:string, Type?:"BOOLEAN"|"STRING"|"INT32"|"FLOAT32"|"MEDIA"}>}, OwnerAccount:string, PackageArn?:string, PackageId:string, PackageName:string, PackageVersion:string, PatchVersion:string}>
     */
    public function describeNode(array $args): \AWS\Result { }

    /**
     * @param array{NodeId:string, OwnerAccount?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AssetName?:string, Category:"BUSINESS_LOGIC"|"ML_MODEL"|"MEDIA_SOURCE"|"MEDIA_SINK", CreatedTime:int|string|\DateTimeInterface, Description:string, LastUpdatedTime:int|string|\DateTimeInterface, Name:string, NodeId:string, NodeInterface:array{Inputs:array<array{DefaultValue?:string, Description?:string, MaxConnections?:int, Name?:string, Type?:"BOOLEAN"|"STRING"|"INT32"|"FLOAT32"|"MEDIA"}>, Outputs:array<array{Description?:string, Name?:string, Type?:"BOOLEAN"|"STRING"|"INT32"|"FLOAT32"|"MEDIA"}>}, OwnerAccount:string, PackageArn?:string, PackageId:string, PackageName:string, PackageVersion:string, PatchVersion:string}>
     */
    public function describeNodeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{CreatedTime:int|string|\DateTimeInterface, JobId:string, JobTags?:array<array{ResourceType:"PACKAGE", Tags:array<string, string>}>, LastUpdatedTime:int|string|\DateTimeInterface, NodeDescription?:string, NodeName:string, OutputPackageName:string, OutputPackageVersion:string, Status:"PENDING"|"SUCCEEDED"|"FAILED", StatusMessage:string, TemplateParameters:array<string, string>, TemplateType:"RTSP_CAMERA_STREAM"}>
     */
    public function describeNodeFromTemplateJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CreatedTime:int|string|\DateTimeInterface, JobId:string, JobTags?:array<array{ResourceType:"PACKAGE", Tags:array<string, string>}>, LastUpdatedTime:int|string|\DateTimeInterface, NodeDescription?:string, NodeName:string, OutputPackageName:string, OutputPackageVersion:string, Status:"PENDING"|"SUCCEEDED"|"FAILED", StatusMessage:string, TemplateParameters:array<string, string>, TemplateType:"RTSP_CAMERA_STREAM"}>
     */
    public function describeNodeFromTemplateJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PackageId:string} $args
     * @return \AWS\Result<array{Arn:string, CreatedTime:int|string|\DateTimeInterface, PackageId:string, PackageName:string, ReadAccessPrincipalArns?:array<string>, StorageLocation:array{BinaryPrefixLocation:string, Bucket:string, GeneratedPrefixLocation:string, ManifestPrefixLocation:string, RepoPrefixLocation:string}, Tags:array<string, string>, WriteAccessPrincipalArns?:array<string>}>
     */
    public function describePackage(array $args): \AWS\Result { }

    /**
     * @param array{PackageId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn:string, CreatedTime:int|string|\DateTimeInterface, PackageId:string, PackageName:string, ReadAccessPrincipalArns?:array<string>, StorageLocation:array{BinaryPrefixLocation:string, Bucket:string, GeneratedPrefixLocation:string, ManifestPrefixLocation:string, RepoPrefixLocation:string}, Tags:array<string, string>, WriteAccessPrincipalArns?:array<string>}>
     */
    public function describePackageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{ClientToken?:string, CreatedTime:int|string|\DateTimeInterface, InputConfig:array{PackageVersionInputConfig?:array{S3Location:array{BucketName:string, ObjectKey:string, Region?:string}}}, JobId:string, JobTags?:array<array{ResourceType:"PACKAGE", Tags:array<string, string>}>, JobType:"NODE_PACKAGE_VERSION"|"MARKETPLACE_NODE_PACKAGE_VERSION", LastUpdatedTime:int|string|\DateTimeInterface, Output:array{OutputS3Location:array{BucketName:string, ObjectKey:string}, PackageId:string, PackageVersion:string, PatchVersion:string}, OutputConfig:array{PackageVersionOutputConfig?:array{MarkLatest?:bool, PackageName:string, PackageVersion:string}}, Status:"PENDING"|"SUCCEEDED"|"FAILED", StatusMessage:string}>
     */
    public function describePackageImportJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClientToken?:string, CreatedTime:int|string|\DateTimeInterface, InputConfig:array{PackageVersionInputConfig?:array{S3Location:array{BucketName:string, ObjectKey:string, Region?:string}}}, JobId:string, JobTags?:array<array{ResourceType:"PACKAGE", Tags:array<string, string>}>, JobType:"NODE_PACKAGE_VERSION"|"MARKETPLACE_NODE_PACKAGE_VERSION", LastUpdatedTime:int|string|\DateTimeInterface, Output:array{OutputS3Location:array{BucketName:string, ObjectKey:string}, PackageId:string, PackageVersion:string, PatchVersion:string}, OutputConfig:array{PackageVersionOutputConfig?:array{MarkLatest?:bool, PackageName:string, PackageVersion:string}}, Status:"PENDING"|"SUCCEEDED"|"FAILED", StatusMessage:string}>
     */
    public function describePackageImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OwnerAccount?:string, PackageId:string, PackageVersion:string, PatchVersion?:string} $args
     * @return \AWS\Result<array{IsLatestPatch:bool, OwnerAccount?:string, PackageArn?:string, PackageId:string, PackageName:string, PackageVersion:string, PatchVersion:string, RegisteredTime?:int|string|\DateTimeInterface, Status:"REGISTER_PENDING"|"REGISTER_COMPLETED"|"FAILED"|"DELETING", StatusDescription?:string}>
     */
    public function describePackageVersion(array $args): \AWS\Result { }

    /**
     * @param array{OwnerAccount?:string, PackageId:string, PackageVersion:string, PatchVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IsLatestPatch:bool, OwnerAccount?:string, PackageArn?:string, PackageId:string, PackageName:string, PackageVersion:string, PatchVersion:string, RegisteredTime?:int|string|\DateTimeInterface, Status:"REGISTER_PENDING"|"REGISTER_COMPLETED"|"FAILED"|"DELETING", StatusDescription?:string}>
     */
    public function describePackageVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationInstanceId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, PackageObjects?:array<array{Name:string, PackageVersion:string, PatchVersion:string}>}>
     */
    public function listApplicationInstanceDependencies(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationInstanceId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, PackageObjects?:array<array{Name:string, PackageVersion:string, PatchVersion:string}>}>
     */
    public function listApplicationInstanceDependenciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationInstanceId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, NodeInstances?:array<array{CurrentStatus:"RUNNING"|"ERROR"|"NOT_AVAILABLE"|"PAUSED", NodeId?:string, NodeInstanceId:string, NodeName?:string, PackageName?:string, PackagePatchVersion?:string, PackageVersion?:string}>}>
     */
    public function listApplicationInstanceNodeInstances(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationInstanceId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, NodeInstances?:array<array{CurrentStatus:"RUNNING"|"ERROR"|"NOT_AVAILABLE"|"PAUSED", NodeId?:string, NodeInstanceId:string, NodeName?:string, PackageName?:string, PackagePatchVersion?:string, PackageVersion?:string}>}>
     */
    public function listApplicationInstanceNodeInstancesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DeviceId?:string, MaxResults?:int, NextToken?:string, StatusFilter?:"DEPLOYMENT_SUCCEEDED"|"DEPLOYMENT_ERROR"|"REMOVAL_SUCCEEDED"|"REMOVAL_FAILED"|"PROCESSING_DEPLOYMENT"|"PROCESSING_REMOVAL"|"DEPLOYMENT_FAILED"} $args
     * @return \AWS\Result<array{ApplicationInstances?:array<array{ApplicationInstanceId?:string, Arn?:string, CreatedTime?:int|string|\DateTimeInterface, DefaultRuntimeContextDevice?:string, DefaultRuntimeContextDeviceName?:string, Description?:string, HealthStatus?:"RUNNING"|"ERROR"|"NOT_AVAILABLE", Name?:string, RuntimeContextStates?:array<array{DesiredState:"RUNNING"|"STOPPED"|"REMOVED", DeviceReportedStatus:"STOPPING"|"STOPPED"|"STOP_ERROR"|"REMOVAL_FAILED"|"REMOVAL_IN_PROGRESS"|"STARTING"|"RUNNING"|"INSTALL_ERROR"|"LAUNCHED"|"LAUNCH_ERROR"|"INSTALL_IN_PROGRESS", DeviceReportedTime:int|string|\DateTimeInterface, RuntimeContextName:string}>, Status?:"DEPLOYMENT_PENDING"|"DEPLOYMENT_REQUESTED"|"DEPLOYMENT_IN_PROGRESS"|"DEPLOYMENT_ERROR"|"DEPLOYMENT_SUCCEEDED"|"REMOVAL_PENDING"|"REMOVAL_REQUESTED"|"REMOVAL_IN_PROGRESS"|"REMOVAL_FAILED"|"REMOVAL_SUCCEEDED"|"DEPLOYMENT_FAILED", StatusDescription?:string, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listApplicationInstances(array $args = []): \AWS\Result { }

    /**
     * @param array{DeviceId?:string, MaxResults?:int, NextToken?:string, StatusFilter?:"DEPLOYMENT_SUCCEEDED"|"DEPLOYMENT_ERROR"|"REMOVAL_SUCCEEDED"|"REMOVAL_FAILED"|"PROCESSING_DEPLOYMENT"|"PROCESSING_REMOVAL"|"DEPLOYMENT_FAILED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationInstances?:array<array{ApplicationInstanceId?:string, Arn?:string, CreatedTime?:int|string|\DateTimeInterface, DefaultRuntimeContextDevice?:string, DefaultRuntimeContextDeviceName?:string, Description?:string, HealthStatus?:"RUNNING"|"ERROR"|"NOT_AVAILABLE", Name?:string, RuntimeContextStates?:array<array{DesiredState:"RUNNING"|"STOPPED"|"REMOVED", DeviceReportedStatus:"STOPPING"|"STOPPED"|"STOP_ERROR"|"REMOVAL_FAILED"|"REMOVAL_IN_PROGRESS"|"STARTING"|"RUNNING"|"INSTALL_ERROR"|"LAUNCHED"|"LAUNCH_ERROR"|"INSTALL_IN_PROGRESS", DeviceReportedTime:int|string|\DateTimeInterface, RuntimeContextName:string}>, Status?:"DEPLOYMENT_PENDING"|"DEPLOYMENT_REQUESTED"|"DEPLOYMENT_IN_PROGRESS"|"DEPLOYMENT_ERROR"|"DEPLOYMENT_SUCCEEDED"|"REMOVAL_PENDING"|"REMOVAL_REQUESTED"|"REMOVAL_IN_PROGRESS"|"REMOVAL_FAILED"|"REMOVAL_SUCCEEDED"|"DEPLOYMENT_FAILED", StatusDescription?:string, Tags?:array<string, string>}>, NextToken?:string}>
     */
    public function listApplicationInstancesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DeviceAggregatedStatusFilter?:"ERROR"|"AWAITING_PROVISIONING"|"PENDING"|"FAILED"|"DELETING"|"ONLINE"|"OFFLINE"|"LEASE_EXPIRED"|"UPDATE_NEEDED"|"REBOOTING", MaxResults?:int, NameFilter?:string, NextToken?:string, SortBy?:"DEVICE_ID"|"CREATED_TIME"|"NAME"|"DEVICE_AGGREGATED_STATUS", SortOrder?:"ASCENDING"|"DESCENDING"} $args
     * @return \AWS\Result<array{Devices:array<array{Brand?:"AWS_PANORAMA"|"LENOVO", CreatedTime?:int|string|\DateTimeInterface, CurrentSoftware?:string, Description?:string, DeviceAggregatedStatus?:"ERROR"|"AWAITING_PROVISIONING"|"PENDING"|"FAILED"|"DELETING"|"ONLINE"|"OFFLINE"|"LEASE_EXPIRED"|"UPDATE_NEEDED"|"REBOOTING", DeviceId?:string, LastUpdatedTime?:int|string|\DateTimeInterface, LatestDeviceJob?:array{ImageVersion?:string, JobType?:"OTA"|"REBOOT", Status?:"PENDING"|"IN_PROGRESS"|"VERIFYING"|"REBOOTING"|"DOWNLOADING"|"COMPLETED"|"FAILED"}, LeaseExpirationTime?:int|string|\DateTimeInterface, Name?:string, ProvisioningStatus?:"AWAITING_PROVISIONING"|"PENDING"|"SUCCEEDED"|"FAILED"|"ERROR"|"DELETING", Tags?:array<string, string>, Type?:"PANORAMA_APPLIANCE_DEVELOPER_KIT"|"PANORAMA_APPLIANCE"}>, NextToken?:string}>
     */
    public function listDevices(array $args = []): \AWS\Result { }

    /**
     * @param array{DeviceAggregatedStatusFilter?:"ERROR"|"AWAITING_PROVISIONING"|"PENDING"|"FAILED"|"DELETING"|"ONLINE"|"OFFLINE"|"LEASE_EXPIRED"|"UPDATE_NEEDED"|"REBOOTING", MaxResults?:int, NameFilter?:string, NextToken?:string, SortBy?:"DEVICE_ID"|"CREATED_TIME"|"NAME"|"DEVICE_AGGREGATED_STATUS", SortOrder?:"ASCENDING"|"DESCENDING"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Devices:array<array{Brand?:"AWS_PANORAMA"|"LENOVO", CreatedTime?:int|string|\DateTimeInterface, CurrentSoftware?:string, Description?:string, DeviceAggregatedStatus?:"ERROR"|"AWAITING_PROVISIONING"|"PENDING"|"FAILED"|"DELETING"|"ONLINE"|"OFFLINE"|"LEASE_EXPIRED"|"UPDATE_NEEDED"|"REBOOTING", DeviceId?:string, LastUpdatedTime?:int|string|\DateTimeInterface, LatestDeviceJob?:array{ImageVersion?:string, JobType?:"OTA"|"REBOOT", Status?:"PENDING"|"IN_PROGRESS"|"VERIFYING"|"REBOOTING"|"DOWNLOADING"|"COMPLETED"|"FAILED"}, LeaseExpirationTime?:int|string|\DateTimeInterface, Name?:string, ProvisioningStatus?:"AWAITING_PROVISIONING"|"PENDING"|"SUCCEEDED"|"FAILED"|"ERROR"|"DELETING", Tags?:array<string, string>, Type?:"PANORAMA_APPLIANCE_DEVELOPER_KIT"|"PANORAMA_APPLIANCE"}>, NextToken?:string}>
     */
    public function listDevicesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DeviceId?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{DeviceJobs?:array<array{CreatedTime?:int|string|\DateTimeInterface, DeviceId?:string, DeviceName?:string, JobId?:string, JobType?:"OTA"|"REBOOT"}>, NextToken?:string}>
     */
    public function listDevicesJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{DeviceId?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DeviceJobs?:array<array{CreatedTime?:int|string|\DateTimeInterface, DeviceId?:string, DeviceName?:string, JobId?:string, JobType?:"OTA"|"REBOOT"}>, NextToken?:string}>
     */
    public function listDevicesJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, NodeFromTemplateJobs:array<array{CreatedTime?:int|string|\DateTimeInterface, JobId?:string, NodeName?:string, Status?:"PENDING"|"SUCCEEDED"|"FAILED", StatusMessage?:string, TemplateType?:"RTSP_CAMERA_STREAM"}>}>
     */
    public function listNodeFromTemplateJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, NodeFromTemplateJobs:array<array{CreatedTime?:int|string|\DateTimeInterface, JobId?:string, NodeName?:string, Status?:"PENDING"|"SUCCEEDED"|"FAILED", StatusMessage?:string, TemplateType?:"RTSP_CAMERA_STREAM"}>}>
     */
    public function listNodeFromTemplateJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Category?:"BUSINESS_LOGIC"|"ML_MODEL"|"MEDIA_SOURCE"|"MEDIA_SINK", MaxResults?:int, NextToken?:string, OwnerAccount?:string, PackageName?:string, PackageVersion?:string, PatchVersion?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Nodes?:array<array{Category:"BUSINESS_LOGIC"|"ML_MODEL"|"MEDIA_SOURCE"|"MEDIA_SINK", CreatedTime:int|string|\DateTimeInterface, Description?:string, Name:string, NodeId:string, OwnerAccount?:string, PackageArn?:string, PackageId:string, PackageName:string, PackageVersion:string, PatchVersion:string}>}>
     */
    public function listNodes(array $args = []): \AWS\Result { }

    /**
     * @param array{Category?:"BUSINESS_LOGIC"|"ML_MODEL"|"MEDIA_SOURCE"|"MEDIA_SINK", MaxResults?:int, NextToken?:string, OwnerAccount?:string, PackageName?:string, PackageVersion?:string, PatchVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Nodes?:array<array{Category:"BUSINESS_LOGIC"|"ML_MODEL"|"MEDIA_SOURCE"|"MEDIA_SINK", CreatedTime:int|string|\DateTimeInterface, Description?:string, Name:string, NodeId:string, OwnerAccount?:string, PackageArn?:string, PackageId:string, PackageName:string, PackageVersion:string, PatchVersion:string}>}>
     */
    public function listNodesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, PackageImportJobs:array<array{CreatedTime?:int|string|\DateTimeInterface, JobId?:string, JobType?:"NODE_PACKAGE_VERSION"|"MARKETPLACE_NODE_PACKAGE_VERSION", LastUpdatedTime?:int|string|\DateTimeInterface, Status?:"PENDING"|"SUCCEEDED"|"FAILED", StatusMessage?:string}>}>
     */
    public function listPackageImportJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, PackageImportJobs:array<array{CreatedTime?:int|string|\DateTimeInterface, JobId?:string, JobType?:"NODE_PACKAGE_VERSION"|"MARKETPLACE_NODE_PACKAGE_VERSION", LastUpdatedTime?:int|string|\DateTimeInterface, Status?:"PENDING"|"SUCCEEDED"|"FAILED", StatusMessage?:string}>}>
     */
    public function listPackageImportJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Packages?:array<array{Arn?:string, CreatedTime?:int|string|\DateTimeInterface, PackageId?:string, PackageName?:string, Tags?:array<string, string>}>}>
     */
    public function listPackages(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Packages?:array<array{Arn?:string, CreatedTime?:int|string|\DateTimeInterface, PackageId?:string, PackageName?:string, Tags?:array<string, string>}>}>
     */
    public function listPackagesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{Tags?:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Description?:string, Name:string, NetworkingConfiguration?:array{Ethernet0?:array{ConnectionType:"STATIC_IP"|"DHCP", StaticIpConnectionInfo?:array{DefaultGateway:string, Dns:array<string>, IpAddress:string, Mask:string}}, Ethernet1?:array{ConnectionType:"STATIC_IP"|"DHCP", StaticIpConnectionInfo?:array{DefaultGateway:string, Dns:array<string>, IpAddress:string, Mask:string}}, Ntp?:array{NtpServers:array<string>}}, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Arn:string, Certificates?:string|resource|\Psr\Http\Message\StreamInterface, DeviceId?:string, IotThingName?:string, Status:"AWAITING_PROVISIONING"|"PENDING"|"SUCCEEDED"|"FAILED"|"ERROR"|"DELETING"}>
     */
    public function provisionDevice(array $args): \AWS\Result { }

    /**
     * @param array{Description?:string, Name:string, NetworkingConfiguration?:array{Ethernet0?:array{ConnectionType:"STATIC_IP"|"DHCP", StaticIpConnectionInfo?:array{DefaultGateway:string, Dns:array<string>, IpAddress:string, Mask:string}}, Ethernet1?:array{ConnectionType:"STATIC_IP"|"DHCP", StaticIpConnectionInfo?:array{DefaultGateway:string, Dns:array<string>, IpAddress:string, Mask:string}}, Ntp?:array{NtpServers:array<string>}}, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn:string, Certificates?:string|resource|\Psr\Http\Message\StreamInterface, DeviceId?:string, IotThingName?:string, Status:"AWAITING_PROVISIONING"|"PENDING"|"SUCCEEDED"|"FAILED"|"ERROR"|"DELETING"}>
     */
    public function provisionDeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MarkLatest?:bool, OwnerAccount?:string, PackageId:string, PackageVersion:string, PatchVersion:string} $args
     * @return \AWS\Result<array{}>
     */
    public function registerPackageVersion(array $args): \AWS\Result { }

    /**
     * @param array{MarkLatest?:bool, OwnerAccount?:string, PackageId:string, PackageVersion:string, PatchVersion:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function registerPackageVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationInstanceId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function removeApplicationInstance(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationInstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function removeApplicationInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationInstanceId:string, NodeSignals:array<array{NodeInstanceId:string, Signal:"PAUSE"|"RESUME"}>} $args
     * @return \AWS\Result<array{ApplicationInstanceId:string}>
     */
    public function signalApplicationInstanceNodeInstances(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationInstanceId:string, NodeSignals:array<array{NodeInstanceId:string, Signal:"PAUSE"|"RESUME"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationInstanceId:string}>
     */
    public function signalApplicationInstanceNodeInstancesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Tags:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Tags:array<string, string>} $args
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
     * @param array{Description?:string, DeviceId:string} $args
     * @return \AWS\Result<array{DeviceId?:string}>
     */
    public function updateDeviceMetadata(array $args): \AWS\Result { }

    /**
     * @param array{Description?:string, DeviceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DeviceId?:string}>
     */
    public function updateDeviceMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
