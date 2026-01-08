<?php
namespace AWS\DataSync;

class DataSyncClient
{
    /**
     * @param array{ServerConfiguration:array{ServerHostname:string, ServerPort?:int}, SystemType:"NetAppONTAP", AgentArns:array<string>, CloudWatchLogGroupArn?:string, Tags?:array<array{Key:string, Value?:string}>, Name?:string, ClientToken:string, Credentials:array{Username:string, Password:string}} $args
     * @return \AWS\Result<array{StorageSystemArn:string}>
     */
    public function addStorageSystem(array $args): \AWS\Result { }

    /**
     * @param array{ServerConfiguration:array{ServerHostname:string, ServerPort?:int}, SystemType:"NetAppONTAP", AgentArns:array<string>, CloudWatchLogGroupArn?:string, Tags?:array<array{Key:string, Value?:string}>, Name?:string, ClientToken:string, Credentials:array{Username:string, Password:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{StorageSystemArn:string}>
     */
    public function addStorageSystemAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TaskExecutionArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function cancelTaskExecution(array $args): \AWS\Result { }

    /**
     * @param array{TaskExecutionArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function cancelTaskExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ActivationKey:string, AgentName?:string, Tags?:array<array{Key:string, Value?:string}>, VpcEndpointId?:string, SubnetArns?:array<string>, SecurityGroupArns?:array<string>} $args
     * @return \AWS\Result<array{AgentArn?:string}>
     */
    public function createAgent(array $args): \AWS\Result { }

    /**
     * @param array{ActivationKey:string, AgentName?:string, Tags?:array<array{Key:string, Value?:string}>, VpcEndpointId?:string, SubnetArns?:array<string>, SecurityGroupArns?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{AgentArn?:string}>
     */
    public function createAgentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContainerUrl:string, AuthenticationType:"SAS", SasConfiguration?:array{Token:string}, BlobType?:"BLOCK", AccessTier?:"HOT"|"COOL"|"ARCHIVE", Subdirectory?:string, AgentArns:array<string>, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{LocationArn?:string}>
     */
    public function createLocationAzureBlob(array $args): \AWS\Result { }

    /**
     * @param array{ContainerUrl:string, AuthenticationType:"SAS", SasConfiguration?:array{Token:string}, BlobType?:"BLOCK", AccessTier?:"HOT"|"COOL"|"ARCHIVE", Subdirectory?:string, AgentArns:array<string>, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{LocationArn?:string}>
     */
    public function createLocationAzureBlobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Subdirectory?:string, EfsFilesystemArn:string, Ec2Config:array{SubnetArn:string, SecurityGroupArns:array<string>}, Tags?:array<array{Key:string, Value?:string}>, AccessPointArn?:string, FileSystemAccessRoleArn?:string, InTransitEncryption?:"NONE"|"TLS1_2"} $args
     * @return \AWS\Result<array{LocationArn?:string}>
     */
    public function createLocationEfs(array $args): \AWS\Result { }

    /**
     * @param array{Subdirectory?:string, EfsFilesystemArn:string, Ec2Config:array{SubnetArn:string, SecurityGroupArns:array<string>}, Tags?:array<array{Key:string, Value?:string}>, AccessPointArn?:string, FileSystemAccessRoleArn?:string, InTransitEncryption?:"NONE"|"TLS1_2"} $args
     * @return \GuzzleHttp\Promise\Promise<array{LocationArn?:string}>
     */
    public function createLocationEfsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FsxFilesystemArn:string, SecurityGroupArns:array<string>, Subdirectory?:string, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{LocationArn?:string}>
     */
    public function createLocationFsxLustre(array $args): \AWS\Result { }

    /**
     * @param array{FsxFilesystemArn:string, SecurityGroupArns:array<string>, Subdirectory?:string, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{LocationArn?:string}>
     */
    public function createLocationFsxLustreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Protocol:array{NFS?:array{MountOptions?:array{Version?:"AUTOMATIC"|"NFS3"|"NFS4_0"|"NFS4_1"}}, SMB?:array{Domain?:string, MountOptions?:array{Version?:"AUTOMATIC"|"SMB2"|"SMB3"|"SMB1"|"SMB2_0"}, Password:string, User:string}}, SecurityGroupArns:array<string>, StorageVirtualMachineArn:string, Subdirectory?:string, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{LocationArn?:string}>
     */
    public function createLocationFsxOntap(array $args): \AWS\Result { }

    /**
     * @param array{Protocol:array{NFS?:array{MountOptions?:array{Version?:"AUTOMATIC"|"NFS3"|"NFS4_0"|"NFS4_1"}}, SMB?:array{Domain?:string, MountOptions?:array{Version?:"AUTOMATIC"|"SMB2"|"SMB3"|"SMB1"|"SMB2_0"}, Password:string, User:string}}, SecurityGroupArns:array<string>, StorageVirtualMachineArn:string, Subdirectory?:string, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{LocationArn?:string}>
     */
    public function createLocationFsxOntapAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FsxFilesystemArn:string, Protocol:array{NFS?:array{MountOptions?:array{Version?:"AUTOMATIC"|"NFS3"|"NFS4_0"|"NFS4_1"}}, SMB?:array{Domain?:string, MountOptions?:array{Version?:"AUTOMATIC"|"SMB2"|"SMB3"|"SMB1"|"SMB2_0"}, Password:string, User:string}}, SecurityGroupArns:array<string>, Subdirectory?:string, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{LocationArn?:string}>
     */
    public function createLocationFsxOpenZfs(array $args): \AWS\Result { }

    /**
     * @param array{FsxFilesystemArn:string, Protocol:array{NFS?:array{MountOptions?:array{Version?:"AUTOMATIC"|"NFS3"|"NFS4_0"|"NFS4_1"}}, SMB?:array{Domain?:string, MountOptions?:array{Version?:"AUTOMATIC"|"SMB2"|"SMB3"|"SMB1"|"SMB2_0"}, Password:string, User:string}}, SecurityGroupArns:array<string>, Subdirectory?:string, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{LocationArn?:string}>
     */
    public function createLocationFsxOpenZfsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Subdirectory?:string, FsxFilesystemArn:string, SecurityGroupArns:array<string>, Tags?:array<array{Key:string, Value?:string}>, User:string, Domain?:string, Password:string} $args
     * @return \AWS\Result<array{LocationArn?:string}>
     */
    public function createLocationFsxWindows(array $args): \AWS\Result { }

    /**
     * @param array{Subdirectory?:string, FsxFilesystemArn:string, SecurityGroupArns:array<string>, Tags?:array<array{Key:string, Value?:string}>, User:string, Domain?:string, Password:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LocationArn?:string}>
     */
    public function createLocationFsxWindowsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Subdirectory?:string, NameNodes:array<array{Hostname:string, Port:int}>, BlockSize?:int, ReplicationFactor?:int, KmsKeyProviderUri?:string, QopConfiguration?:array{RpcProtection?:"DISABLED"|"AUTHENTICATION"|"INTEGRITY"|"PRIVACY", DataTransferProtection?:"DISABLED"|"AUTHENTICATION"|"INTEGRITY"|"PRIVACY"}, AuthenticationType:"SIMPLE"|"KERBEROS", SimpleUser?:string, KerberosPrincipal?:string, KerberosKeytab?:string|resource|\Psr\Http\Message\StreamInterface, KerberosKrb5Conf?:string|resource|\Psr\Http\Message\StreamInterface, AgentArns:array<string>, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{LocationArn?:string}>
     */
    public function createLocationHdfs(array $args): \AWS\Result { }

    /**
     * @param array{Subdirectory?:string, NameNodes:array<array{Hostname:string, Port:int}>, BlockSize?:int, ReplicationFactor?:int, KmsKeyProviderUri?:string, QopConfiguration?:array{RpcProtection?:"DISABLED"|"AUTHENTICATION"|"INTEGRITY"|"PRIVACY", DataTransferProtection?:"DISABLED"|"AUTHENTICATION"|"INTEGRITY"|"PRIVACY"}, AuthenticationType:"SIMPLE"|"KERBEROS", SimpleUser?:string, KerberosPrincipal?:string, KerberosKeytab?:string|resource|\Psr\Http\Message\StreamInterface, KerberosKrb5Conf?:string|resource|\Psr\Http\Message\StreamInterface, AgentArns:array<string>, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{LocationArn?:string}>
     */
    public function createLocationHdfsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Subdirectory:string, ServerHostname:string, OnPremConfig:array{AgentArns:array<string>}, MountOptions?:array{Version?:"AUTOMATIC"|"NFS3"|"NFS4_0"|"NFS4_1"}, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{LocationArn?:string}>
     */
    public function createLocationNfs(array $args): \AWS\Result { }

    /**
     * @param array{Subdirectory:string, ServerHostname:string, OnPremConfig:array{AgentArns:array<string>}, MountOptions?:array{Version?:"AUTOMATIC"|"NFS3"|"NFS4_0"|"NFS4_1"}, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{LocationArn?:string}>
     */
    public function createLocationNfsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServerHostname:string, ServerPort?:int, ServerProtocol?:"HTTPS"|"HTTP", Subdirectory?:string, BucketName:string, AccessKey?:string, SecretKey?:string, AgentArns:array<string>, Tags?:array<array{Key:string, Value?:string}>, ServerCertificate?:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \AWS\Result<array{LocationArn?:string}>
     */
    public function createLocationObjectStorage(array $args): \AWS\Result { }

    /**
     * @param array{ServerHostname:string, ServerPort?:int, ServerProtocol?:"HTTPS"|"HTTP", Subdirectory?:string, BucketName:string, AccessKey?:string, SecretKey?:string, AgentArns:array<string>, Tags?:array<array{Key:string, Value?:string}>, ServerCertificate?:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{LocationArn?:string}>
     */
    public function createLocationObjectStorageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Subdirectory?:string, S3BucketArn:string, S3StorageClass?:"STANDARD"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_INSTANT_RETRIEVAL", S3Config:array{BucketAccessRoleArn:string}, AgentArns?:array<string>, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{LocationArn?:string}>
     */
    public function createLocationS3(array $args): \AWS\Result { }

    /**
     * @param array{Subdirectory?:string, S3BucketArn:string, S3StorageClass?:"STANDARD"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_INSTANT_RETRIEVAL", S3Config:array{BucketAccessRoleArn:string}, AgentArns?:array<string>, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{LocationArn?:string}>
     */
    public function createLocationS3Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Subdirectory:string, ServerHostname:string, User:string, Domain?:string, Password:string, AgentArns:array<string>, MountOptions?:array{Version?:"AUTOMATIC"|"SMB2"|"SMB3"|"SMB1"|"SMB2_0"}, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{LocationArn?:string}>
     */
    public function createLocationSmb(array $args): \AWS\Result { }

    /**
     * @param array{Subdirectory:string, ServerHostname:string, User:string, Domain?:string, Password:string, AgentArns:array<string>, MountOptions?:array{Version?:"AUTOMATIC"|"SMB2"|"SMB3"|"SMB1"|"SMB2_0"}, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{LocationArn?:string}>
     */
    public function createLocationSmbAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SourceLocationArn:string, DestinationLocationArn:string, CloudWatchLogGroupArn?:string, Name?:string, Options?:array{VerifyMode?:"POINT_IN_TIME_CONSISTENT"|"ONLY_FILES_TRANSFERRED"|"NONE", OverwriteMode?:"ALWAYS"|"NEVER", Atime?:"NONE"|"BEST_EFFORT", Mtime?:"NONE"|"PRESERVE", Uid?:"NONE"|"INT_VALUE"|"NAME"|"BOTH", Gid?:"NONE"|"INT_VALUE"|"NAME"|"BOTH", PreserveDeletedFiles?:"PRESERVE"|"REMOVE", PreserveDevices?:"NONE"|"PRESERVE", PosixPermissions?:"NONE"|"PRESERVE", BytesPerSecond?:int, TaskQueueing?:"ENABLED"|"DISABLED", LogLevel?:"OFF"|"BASIC"|"TRANSFER", TransferMode?:"CHANGED"|"ALL", SecurityDescriptorCopyFlags?:"NONE"|"OWNER_DACL"|"OWNER_DACL_SACL", ObjectTags?:"PRESERVE"|"NONE"}, Excludes?:array<array{FilterType?:"SIMPLE_PATTERN", Value?:string}>, Schedule?:array{ScheduleExpression:string, Status?:"ENABLED"|"DISABLED"}, Tags?:array<array{Key:string, Value?:string}>, Includes?:array<array{FilterType?:"SIMPLE_PATTERN", Value?:string}>, ManifestConfig?:array{Action?:"TRANSFER", Format?:"CSV", Source?:array{S3:array{ManifestObjectPath:string, BucketAccessRoleArn:string, S3BucketArn:string, ManifestObjectVersionId?:string}}}, TaskReportConfig?:array{Destination?:array{S3?:array{Subdirectory?:string, S3BucketArn:string, BucketAccessRoleArn:string}}, OutputType?:"SUMMARY_ONLY"|"STANDARD", ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS", ObjectVersionIds?:"INCLUDE"|"NONE", Overrides?:array{Transferred?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}, Verified?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}, Deleted?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}, Skipped?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}}}, TaskMode?:"BASIC"|"ENHANCED"} $args
     * @return \AWS\Result<array{TaskArn?:string}>
     */
    public function createTask(array $args): \AWS\Result { }

    /**
     * @param array{SourceLocationArn:string, DestinationLocationArn:string, CloudWatchLogGroupArn?:string, Name?:string, Options?:array{VerifyMode?:"POINT_IN_TIME_CONSISTENT"|"ONLY_FILES_TRANSFERRED"|"NONE", OverwriteMode?:"ALWAYS"|"NEVER", Atime?:"NONE"|"BEST_EFFORT", Mtime?:"NONE"|"PRESERVE", Uid?:"NONE"|"INT_VALUE"|"NAME"|"BOTH", Gid?:"NONE"|"INT_VALUE"|"NAME"|"BOTH", PreserveDeletedFiles?:"PRESERVE"|"REMOVE", PreserveDevices?:"NONE"|"PRESERVE", PosixPermissions?:"NONE"|"PRESERVE", BytesPerSecond?:int, TaskQueueing?:"ENABLED"|"DISABLED", LogLevel?:"OFF"|"BASIC"|"TRANSFER", TransferMode?:"CHANGED"|"ALL", SecurityDescriptorCopyFlags?:"NONE"|"OWNER_DACL"|"OWNER_DACL_SACL", ObjectTags?:"PRESERVE"|"NONE"}, Excludes?:array<array{FilterType?:"SIMPLE_PATTERN", Value?:string}>, Schedule?:array{ScheduleExpression:string, Status?:"ENABLED"|"DISABLED"}, Tags?:array<array{Key:string, Value?:string}>, Includes?:array<array{FilterType?:"SIMPLE_PATTERN", Value?:string}>, ManifestConfig?:array{Action?:"TRANSFER", Format?:"CSV", Source?:array{S3:array{ManifestObjectPath:string, BucketAccessRoleArn:string, S3BucketArn:string, ManifestObjectVersionId?:string}}}, TaskReportConfig?:array{Destination?:array{S3?:array{Subdirectory?:string, S3BucketArn:string, BucketAccessRoleArn:string}}, OutputType?:"SUMMARY_ONLY"|"STANDARD", ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS", ObjectVersionIds?:"INCLUDE"|"NONE", Overrides?:array{Transferred?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}, Verified?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}, Deleted?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}, Skipped?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}}}, TaskMode?:"BASIC"|"ENHANCED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{TaskArn?:string}>
     */
    public function createTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AgentArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAgent(array $args): \AWS\Result { }

    /**
     * @param array{AgentArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAgentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LocationArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteLocation(array $args): \AWS\Result { }

    /**
     * @param array{LocationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteLocationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TaskArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteTask(array $args): \AWS\Result { }

    /**
     * @param array{TaskArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AgentArn:string} $args
     * @return \AWS\Result<array{AgentArn?:string, Name?:string, Status?:"ONLINE"|"OFFLINE", LastConnectionTime?:int|string|\DateTimeInterface, CreationTime?:int|string|\DateTimeInterface, EndpointType?:"PUBLIC"|"PRIVATE_LINK"|"FIPS", PrivateLinkConfig?:array{VpcEndpointId?:string, PrivateLinkEndpoint?:string, SubnetArns?:array<string>, SecurityGroupArns?:array<string>}, Platform?:array{Version?:string}}>
     */
    public function describeAgent(array $args): \AWS\Result { }

    /**
     * @param array{AgentArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AgentArn?:string, Name?:string, Status?:"ONLINE"|"OFFLINE", LastConnectionTime?:int|string|\DateTimeInterface, CreationTime?:int|string|\DateTimeInterface, EndpointType?:"PUBLIC"|"PRIVATE_LINK"|"FIPS", PrivateLinkConfig?:array{VpcEndpointId?:string, PrivateLinkEndpoint?:string, SubnetArns?:array<string>, SecurityGroupArns?:array<string>}, Platform?:array{Version?:string}}>
     */
    public function describeAgentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DiscoveryJobArn:string} $args
     * @return \AWS\Result<array{StorageSystemArn?:string, DiscoveryJobArn?:string, CollectionDurationMinutes?:int, Status?:"RUNNING"|"WARNING"|"TERMINATED"|"FAILED"|"STOPPED"|"COMPLETED"|"COMPLETED_WITH_ISSUES", JobStartTime?:int|string|\DateTimeInterface, JobEndTime?:int|string|\DateTimeInterface}>
     */
    public function describeDiscoveryJob(array $args): \AWS\Result { }

    /**
     * @param array{DiscoveryJobArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StorageSystemArn?:string, DiscoveryJobArn?:string, CollectionDurationMinutes?:int, Status?:"RUNNING"|"WARNING"|"TERMINATED"|"FAILED"|"STOPPED"|"COMPLETED"|"COMPLETED_WITH_ISSUES", JobStartTime?:int|string|\DateTimeInterface, JobEndTime?:int|string|\DateTimeInterface}>
     */
    public function describeDiscoveryJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LocationArn:string} $args
     * @return \AWS\Result<array{LocationArn?:string, LocationUri?:string, AuthenticationType?:"SAS", BlobType?:"BLOCK", AccessTier?:"HOT"|"COOL"|"ARCHIVE", AgentArns?:array<string>, CreationTime?:int|string|\DateTimeInterface}>
     */
    public function describeLocationAzureBlob(array $args): \AWS\Result { }

    /**
     * @param array{LocationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LocationArn?:string, LocationUri?:string, AuthenticationType?:"SAS", BlobType?:"BLOCK", AccessTier?:"HOT"|"COOL"|"ARCHIVE", AgentArns?:array<string>, CreationTime?:int|string|\DateTimeInterface}>
     */
    public function describeLocationAzureBlobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LocationArn:string} $args
     * @return \AWS\Result<array{LocationArn?:string, LocationUri?:string, Ec2Config?:array{SubnetArn:string, SecurityGroupArns:array<string>}, CreationTime?:int|string|\DateTimeInterface, AccessPointArn?:string, FileSystemAccessRoleArn?:string, InTransitEncryption?:"NONE"|"TLS1_2"}>
     */
    public function describeLocationEfs(array $args): \AWS\Result { }

    /**
     * @param array{LocationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LocationArn?:string, LocationUri?:string, Ec2Config?:array{SubnetArn:string, SecurityGroupArns:array<string>}, CreationTime?:int|string|\DateTimeInterface, AccessPointArn?:string, FileSystemAccessRoleArn?:string, InTransitEncryption?:"NONE"|"TLS1_2"}>
     */
    public function describeLocationEfsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LocationArn:string} $args
     * @return \AWS\Result<array{LocationArn?:string, LocationUri?:string, SecurityGroupArns?:array<string>, CreationTime?:int|string|\DateTimeInterface}>
     */
    public function describeLocationFsxLustre(array $args): \AWS\Result { }

    /**
     * @param array{LocationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LocationArn?:string, LocationUri?:string, SecurityGroupArns?:array<string>, CreationTime?:int|string|\DateTimeInterface}>
     */
    public function describeLocationFsxLustreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LocationArn:string} $args
     * @return \AWS\Result<array{CreationTime?:int|string|\DateTimeInterface, LocationArn?:string, LocationUri?:string, Protocol?:array{NFS?:array{MountOptions?:array{Version?:"AUTOMATIC"|"NFS3"|"NFS4_0"|"NFS4_1"}}, SMB?:array{Domain?:string, MountOptions?:array{Version?:"AUTOMATIC"|"SMB2"|"SMB3"|"SMB1"|"SMB2_0"}, Password:string, User:string}}, SecurityGroupArns?:array<string>, StorageVirtualMachineArn?:string, FsxFilesystemArn?:string}>
     */
    public function describeLocationFsxOntap(array $args): \AWS\Result { }

    /**
     * @param array{LocationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CreationTime?:int|string|\DateTimeInterface, LocationArn?:string, LocationUri?:string, Protocol?:array{NFS?:array{MountOptions?:array{Version?:"AUTOMATIC"|"NFS3"|"NFS4_0"|"NFS4_1"}}, SMB?:array{Domain?:string, MountOptions?:array{Version?:"AUTOMATIC"|"SMB2"|"SMB3"|"SMB1"|"SMB2_0"}, Password:string, User:string}}, SecurityGroupArns?:array<string>, StorageVirtualMachineArn?:string, FsxFilesystemArn?:string}>
     */
    public function describeLocationFsxOntapAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LocationArn:string} $args
     * @return \AWS\Result<array{LocationArn?:string, LocationUri?:string, SecurityGroupArns?:array<string>, Protocol?:array{NFS?:array{MountOptions?:array{Version?:"AUTOMATIC"|"NFS3"|"NFS4_0"|"NFS4_1"}}, SMB?:array{Domain?:string, MountOptions?:array{Version?:"AUTOMATIC"|"SMB2"|"SMB3"|"SMB1"|"SMB2_0"}, Password:string, User:string}}, CreationTime?:int|string|\DateTimeInterface}>
     */
    public function describeLocationFsxOpenZfs(array $args): \AWS\Result { }

    /**
     * @param array{LocationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LocationArn?:string, LocationUri?:string, SecurityGroupArns?:array<string>, Protocol?:array{NFS?:array{MountOptions?:array{Version?:"AUTOMATIC"|"NFS3"|"NFS4_0"|"NFS4_1"}}, SMB?:array{Domain?:string, MountOptions?:array{Version?:"AUTOMATIC"|"SMB2"|"SMB3"|"SMB1"|"SMB2_0"}, Password:string, User:string}}, CreationTime?:int|string|\DateTimeInterface}>
     */
    public function describeLocationFsxOpenZfsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LocationArn:string} $args
     * @return \AWS\Result<array{LocationArn?:string, LocationUri?:string, SecurityGroupArns?:array<string>, CreationTime?:int|string|\DateTimeInterface, User?:string, Domain?:string}>
     */
    public function describeLocationFsxWindows(array $args): \AWS\Result { }

    /**
     * @param array{LocationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LocationArn?:string, LocationUri?:string, SecurityGroupArns?:array<string>, CreationTime?:int|string|\DateTimeInterface, User?:string, Domain?:string}>
     */
    public function describeLocationFsxWindowsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LocationArn:string} $args
     * @return \AWS\Result<array{LocationArn?:string, LocationUri?:string, NameNodes?:array<array{Hostname:string, Port:int}>, BlockSize?:int, ReplicationFactor?:int, KmsKeyProviderUri?:string, QopConfiguration?:array{RpcProtection?:"DISABLED"|"AUTHENTICATION"|"INTEGRITY"|"PRIVACY", DataTransferProtection?:"DISABLED"|"AUTHENTICATION"|"INTEGRITY"|"PRIVACY"}, AuthenticationType?:"SIMPLE"|"KERBEROS", SimpleUser?:string, KerberosPrincipal?:string, AgentArns?:array<string>, CreationTime?:int|string|\DateTimeInterface}>
     */
    public function describeLocationHdfs(array $args): \AWS\Result { }

    /**
     * @param array{LocationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LocationArn?:string, LocationUri?:string, NameNodes?:array<array{Hostname:string, Port:int}>, BlockSize?:int, ReplicationFactor?:int, KmsKeyProviderUri?:string, QopConfiguration?:array{RpcProtection?:"DISABLED"|"AUTHENTICATION"|"INTEGRITY"|"PRIVACY", DataTransferProtection?:"DISABLED"|"AUTHENTICATION"|"INTEGRITY"|"PRIVACY"}, AuthenticationType?:"SIMPLE"|"KERBEROS", SimpleUser?:string, KerberosPrincipal?:string, AgentArns?:array<string>, CreationTime?:int|string|\DateTimeInterface}>
     */
    public function describeLocationHdfsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LocationArn:string} $args
     * @return \AWS\Result<array{LocationArn?:string, LocationUri?:string, OnPremConfig?:array{AgentArns:array<string>}, MountOptions?:array{Version?:"AUTOMATIC"|"NFS3"|"NFS4_0"|"NFS4_1"}, CreationTime?:int|string|\DateTimeInterface}>
     */
    public function describeLocationNfs(array $args): \AWS\Result { }

    /**
     * @param array{LocationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LocationArn?:string, LocationUri?:string, OnPremConfig?:array{AgentArns:array<string>}, MountOptions?:array{Version?:"AUTOMATIC"|"NFS3"|"NFS4_0"|"NFS4_1"}, CreationTime?:int|string|\DateTimeInterface}>
     */
    public function describeLocationNfsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LocationArn:string} $args
     * @return \AWS\Result<array{LocationArn?:string, LocationUri?:string, AccessKey?:string, ServerPort?:int, ServerProtocol?:"HTTPS"|"HTTP", AgentArns?:array<string>, CreationTime?:int|string|\DateTimeInterface, ServerCertificate?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function describeLocationObjectStorage(array $args): \AWS\Result { }

    /**
     * @param array{LocationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LocationArn?:string, LocationUri?:string, AccessKey?:string, ServerPort?:int, ServerProtocol?:"HTTPS"|"HTTP", AgentArns?:array<string>, CreationTime?:int|string|\DateTimeInterface, ServerCertificate?:string|resource|\Psr\Http\Message\StreamInterface}>
     */
    public function describeLocationObjectStorageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LocationArn:string} $args
     * @return \AWS\Result<array{LocationArn?:string, LocationUri?:string, S3StorageClass?:"STANDARD"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_INSTANT_RETRIEVAL", S3Config?:array{BucketAccessRoleArn:string}, AgentArns?:array<string>, CreationTime?:int|string|\DateTimeInterface}>
     */
    public function describeLocationS3(array $args): \AWS\Result { }

    /**
     * @param array{LocationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LocationArn?:string, LocationUri?:string, S3StorageClass?:"STANDARD"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_INSTANT_RETRIEVAL", S3Config?:array{BucketAccessRoleArn:string}, AgentArns?:array<string>, CreationTime?:int|string|\DateTimeInterface}>
     */
    public function describeLocationS3Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LocationArn:string} $args
     * @return \AWS\Result<array{LocationArn?:string, LocationUri?:string, AgentArns?:array<string>, User?:string, Domain?:string, MountOptions?:array{Version?:"AUTOMATIC"|"SMB2"|"SMB3"|"SMB1"|"SMB2_0"}, CreationTime?:int|string|\DateTimeInterface}>
     */
    public function describeLocationSmb(array $args): \AWS\Result { }

    /**
     * @param array{LocationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LocationArn?:string, LocationUri?:string, AgentArns?:array<string>, User?:string, Domain?:string, MountOptions?:array{Version?:"AUTOMATIC"|"SMB2"|"SMB3"|"SMB1"|"SMB2_0"}, CreationTime?:int|string|\DateTimeInterface}>
     */
    public function describeLocationSmbAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StorageSystemArn:string} $args
     * @return \AWS\Result<array{StorageSystemArn?:string, ServerConfiguration?:array{ServerHostname:string, ServerPort?:int}, SystemType?:"NetAppONTAP", AgentArns?:array<string>, Name?:string, ErrorMessage?:string, ConnectivityStatus?:"PASS"|"FAIL"|"UNKNOWN", CloudWatchLogGroupArn?:string, CreationTime?:int|string|\DateTimeInterface, SecretsManagerArn?:string}>
     */
    public function describeStorageSystem(array $args): \AWS\Result { }

    /**
     * @param array{StorageSystemArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StorageSystemArn?:string, ServerConfiguration?:array{ServerHostname:string, ServerPort?:int}, SystemType?:"NetAppONTAP", AgentArns?:array<string>, Name?:string, ErrorMessage?:string, ConnectivityStatus?:"PASS"|"FAIL"|"UNKNOWN", CloudWatchLogGroupArn?:string, CreationTime?:int|string|\DateTimeInterface, SecretsManagerArn?:string}>
     */
    public function describeStorageSystemAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DiscoveryJobArn:string, ResourceType:"SVM"|"VOLUME"|"CLUSTER", ResourceId:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Metrics?:array<array{Timestamp?:int|string|\DateTimeInterface, P95Metrics?:array{IOPS?:array{Read?:float, Write?:float, Other?:float, Total?:float}, Throughput?:array{Read?:float, Write?:float, Other?:float, Total?:float}, Latency?:array{Read?:float, Write?:float, Other?:float}}, Capacity?:array{Used?:int, Provisioned?:int, LogicalUsed?:int, ClusterCloudStorageUsed?:int}, ResourceId?:string, ResourceType?:"SVM"|"VOLUME"|"CLUSTER"}>, NextToken?:string}>
     */
    public function describeStorageSystemResourceMetrics(array $args): \AWS\Result { }

    /**
     * @param array{DiscoveryJobArn:string, ResourceType:"SVM"|"VOLUME"|"CLUSTER", ResourceId:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Metrics?:array<array{Timestamp?:int|string|\DateTimeInterface, P95Metrics?:array{IOPS?:array{Read?:float, Write?:float, Other?:float, Total?:float}, Throughput?:array{Read?:float, Write?:float, Other?:float, Total?:float}, Latency?:array{Read?:float, Write?:float, Other?:float}}, Capacity?:array{Used?:int, Provisioned?:int, LogicalUsed?:int, ClusterCloudStorageUsed?:int}, ResourceId?:string, ResourceType?:"SVM"|"VOLUME"|"CLUSTER"}>, NextToken?:string}>
     */
    public function describeStorageSystemResourceMetricsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DiscoveryJobArn:string, ResourceType:"SVM"|"VOLUME"|"CLUSTER", ResourceIds?:array<string>, Filter?:array<"SVM", array<string>>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ResourceDetails?:array{NetAppONTAPSVMs?:array<array{ClusterUuid?:string, ResourceId?:string, SvmName?:string, CifsShareCount?:int, EnabledProtocols?:array<string>, TotalCapacityUsed?:int, TotalCapacityProvisioned?:int, TotalLogicalCapacityUsed?:int, MaxP95Performance?:array{IopsRead?:float, IopsWrite?:float, IopsOther?:float, IopsTotal?:float, ThroughputRead?:float, ThroughputWrite?:float, ThroughputOther?:float, ThroughputTotal?:float, LatencyRead?:float, LatencyWrite?:float, LatencyOther?:float}, Recommendations?:array<array{StorageType?:string, StorageConfiguration?:array<string, string>, EstimatedMonthlyStorageCost?:string}>, NfsExportedVolumes?:int, RecommendationStatus?:"NONE"|"IN_PROGRESS"|"COMPLETED"|"FAILED", TotalSnapshotCapacityUsed?:int, LunCount?:int}>, NetAppONTAPVolumes?:array<array{VolumeName?:string, ResourceId?:string, CifsShareCount?:int, SecurityStyle?:string, SvmUuid?:string, SvmName?:string, CapacityUsed?:int, CapacityProvisioned?:int, LogicalCapacityUsed?:int, NfsExported?:bool, SnapshotCapacityUsed?:int, MaxP95Performance?:array{IopsRead?:float, IopsWrite?:float, IopsOther?:float, IopsTotal?:float, ThroughputRead?:float, ThroughputWrite?:float, ThroughputOther?:float, ThroughputTotal?:float, LatencyRead?:float, LatencyWrite?:float, LatencyOther?:float}, Recommendations?:array<array{StorageType?:string, StorageConfiguration?:array<string, string>, EstimatedMonthlyStorageCost?:string}>, RecommendationStatus?:"NONE"|"IN_PROGRESS"|"COMPLETED"|"FAILED", LunCount?:int}>, NetAppONTAPClusters?:array<array{CifsShareCount?:int, NfsExportedVolumes?:int, ResourceId?:string, ClusterName?:string, MaxP95Performance?:array{IopsRead?:float, IopsWrite?:float, IopsOther?:float, IopsTotal?:float, ThroughputRead?:float, ThroughputWrite?:float, ThroughputOther?:float, ThroughputTotal?:float, LatencyRead?:float, LatencyWrite?:float, LatencyOther?:float}, ClusterBlockStorageSize?:int, ClusterBlockStorageUsed?:int, ClusterBlockStorageLogicalUsed?:int, Recommendations?:array<array{StorageType?:string, StorageConfiguration?:array<string, string>, EstimatedMonthlyStorageCost?:string}>, RecommendationStatus?:"NONE"|"IN_PROGRESS"|"COMPLETED"|"FAILED", LunCount?:int, ClusterCloudStorageUsed?:int}>}, NextToken?:string}>
     */
    public function describeStorageSystemResources(array $args): \AWS\Result { }

    /**
     * @param array{DiscoveryJobArn:string, ResourceType:"SVM"|"VOLUME"|"CLUSTER", ResourceIds?:array<string>, Filter?:array<"SVM", array<string>>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceDetails?:array{NetAppONTAPSVMs?:array<array{ClusterUuid?:string, ResourceId?:string, SvmName?:string, CifsShareCount?:int, EnabledProtocols?:array<string>, TotalCapacityUsed?:int, TotalCapacityProvisioned?:int, TotalLogicalCapacityUsed?:int, MaxP95Performance?:array{IopsRead?:float, IopsWrite?:float, IopsOther?:float, IopsTotal?:float, ThroughputRead?:float, ThroughputWrite?:float, ThroughputOther?:float, ThroughputTotal?:float, LatencyRead?:float, LatencyWrite?:float, LatencyOther?:float}, Recommendations?:array<array{StorageType?:string, StorageConfiguration?:array<string, string>, EstimatedMonthlyStorageCost?:string}>, NfsExportedVolumes?:int, RecommendationStatus?:"NONE"|"IN_PROGRESS"|"COMPLETED"|"FAILED", TotalSnapshotCapacityUsed?:int, LunCount?:int}>, NetAppONTAPVolumes?:array<array{VolumeName?:string, ResourceId?:string, CifsShareCount?:int, SecurityStyle?:string, SvmUuid?:string, SvmName?:string, CapacityUsed?:int, CapacityProvisioned?:int, LogicalCapacityUsed?:int, NfsExported?:bool, SnapshotCapacityUsed?:int, MaxP95Performance?:array{IopsRead?:float, IopsWrite?:float, IopsOther?:float, IopsTotal?:float, ThroughputRead?:float, ThroughputWrite?:float, ThroughputOther?:float, ThroughputTotal?:float, LatencyRead?:float, LatencyWrite?:float, LatencyOther?:float}, Recommendations?:array<array{StorageType?:string, StorageConfiguration?:array<string, string>, EstimatedMonthlyStorageCost?:string}>, RecommendationStatus?:"NONE"|"IN_PROGRESS"|"COMPLETED"|"FAILED", LunCount?:int}>, NetAppONTAPClusters?:array<array{CifsShareCount?:int, NfsExportedVolumes?:int, ResourceId?:string, ClusterName?:string, MaxP95Performance?:array{IopsRead?:float, IopsWrite?:float, IopsOther?:float, IopsTotal?:float, ThroughputRead?:float, ThroughputWrite?:float, ThroughputOther?:float, ThroughputTotal?:float, LatencyRead?:float, LatencyWrite?:float, LatencyOther?:float}, ClusterBlockStorageSize?:int, ClusterBlockStorageUsed?:int, ClusterBlockStorageLogicalUsed?:int, Recommendations?:array<array{StorageType?:string, StorageConfiguration?:array<string, string>, EstimatedMonthlyStorageCost?:string}>, RecommendationStatus?:"NONE"|"IN_PROGRESS"|"COMPLETED"|"FAILED", LunCount?:int, ClusterCloudStorageUsed?:int}>}, NextToken?:string}>
     */
    public function describeStorageSystemResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TaskArn:string} $args
     * @return \AWS\Result<array{TaskArn?:string, Status?:"AVAILABLE"|"CREATING"|"QUEUED"|"RUNNING"|"UNAVAILABLE", Name?:string, CurrentTaskExecutionArn?:string, SourceLocationArn?:string, DestinationLocationArn?:string, CloudWatchLogGroupArn?:string, SourceNetworkInterfaceArns?:array<string>, DestinationNetworkInterfaceArns?:array<string>, Options?:array{VerifyMode?:"POINT_IN_TIME_CONSISTENT"|"ONLY_FILES_TRANSFERRED"|"NONE", OverwriteMode?:"ALWAYS"|"NEVER", Atime?:"NONE"|"BEST_EFFORT", Mtime?:"NONE"|"PRESERVE", Uid?:"NONE"|"INT_VALUE"|"NAME"|"BOTH", Gid?:"NONE"|"INT_VALUE"|"NAME"|"BOTH", PreserveDeletedFiles?:"PRESERVE"|"REMOVE", PreserveDevices?:"NONE"|"PRESERVE", PosixPermissions?:"NONE"|"PRESERVE", BytesPerSecond?:int, TaskQueueing?:"ENABLED"|"DISABLED", LogLevel?:"OFF"|"BASIC"|"TRANSFER", TransferMode?:"CHANGED"|"ALL", SecurityDescriptorCopyFlags?:"NONE"|"OWNER_DACL"|"OWNER_DACL_SACL", ObjectTags?:"PRESERVE"|"NONE"}, Excludes?:array<array{FilterType?:"SIMPLE_PATTERN", Value?:string}>, Schedule?:array{ScheduleExpression:string, Status?:"ENABLED"|"DISABLED"}, ErrorCode?:string, ErrorDetail?:string, CreationTime?:int|string|\DateTimeInterface, Includes?:array<array{FilterType?:"SIMPLE_PATTERN", Value?:string}>, ManifestConfig?:array{Action?:"TRANSFER", Format?:"CSV", Source?:array{S3:array{ManifestObjectPath:string, BucketAccessRoleArn:string, S3BucketArn:string, ManifestObjectVersionId?:string}}}, TaskReportConfig?:array{Destination?:array{S3?:array{Subdirectory?:string, S3BucketArn:string, BucketAccessRoleArn:string}}, OutputType?:"SUMMARY_ONLY"|"STANDARD", ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS", ObjectVersionIds?:"INCLUDE"|"NONE", Overrides?:array{Transferred?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}, Verified?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}, Deleted?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}, Skipped?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}}}, ScheduleDetails?:array{StatusUpdateTime?:int|string|\DateTimeInterface, DisabledReason?:string, DisabledBy?:"USER"|"SERVICE"}, TaskMode?:"BASIC"|"ENHANCED"}>
     */
    public function describeTask(array $args): \AWS\Result { }

    /**
     * @param array{TaskArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TaskArn?:string, Status?:"AVAILABLE"|"CREATING"|"QUEUED"|"RUNNING"|"UNAVAILABLE", Name?:string, CurrentTaskExecutionArn?:string, SourceLocationArn?:string, DestinationLocationArn?:string, CloudWatchLogGroupArn?:string, SourceNetworkInterfaceArns?:array<string>, DestinationNetworkInterfaceArns?:array<string>, Options?:array{VerifyMode?:"POINT_IN_TIME_CONSISTENT"|"ONLY_FILES_TRANSFERRED"|"NONE", OverwriteMode?:"ALWAYS"|"NEVER", Atime?:"NONE"|"BEST_EFFORT", Mtime?:"NONE"|"PRESERVE", Uid?:"NONE"|"INT_VALUE"|"NAME"|"BOTH", Gid?:"NONE"|"INT_VALUE"|"NAME"|"BOTH", PreserveDeletedFiles?:"PRESERVE"|"REMOVE", PreserveDevices?:"NONE"|"PRESERVE", PosixPermissions?:"NONE"|"PRESERVE", BytesPerSecond?:int, TaskQueueing?:"ENABLED"|"DISABLED", LogLevel?:"OFF"|"BASIC"|"TRANSFER", TransferMode?:"CHANGED"|"ALL", SecurityDescriptorCopyFlags?:"NONE"|"OWNER_DACL"|"OWNER_DACL_SACL", ObjectTags?:"PRESERVE"|"NONE"}, Excludes?:array<array{FilterType?:"SIMPLE_PATTERN", Value?:string}>, Schedule?:array{ScheduleExpression:string, Status?:"ENABLED"|"DISABLED"}, ErrorCode?:string, ErrorDetail?:string, CreationTime?:int|string|\DateTimeInterface, Includes?:array<array{FilterType?:"SIMPLE_PATTERN", Value?:string}>, ManifestConfig?:array{Action?:"TRANSFER", Format?:"CSV", Source?:array{S3:array{ManifestObjectPath:string, BucketAccessRoleArn:string, S3BucketArn:string, ManifestObjectVersionId?:string}}}, TaskReportConfig?:array{Destination?:array{S3?:array{Subdirectory?:string, S3BucketArn:string, BucketAccessRoleArn:string}}, OutputType?:"SUMMARY_ONLY"|"STANDARD", ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS", ObjectVersionIds?:"INCLUDE"|"NONE", Overrides?:array{Transferred?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}, Verified?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}, Deleted?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}, Skipped?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}}}, ScheduleDetails?:array{StatusUpdateTime?:int|string|\DateTimeInterface, DisabledReason?:string, DisabledBy?:"USER"|"SERVICE"}, TaskMode?:"BASIC"|"ENHANCED"}>
     */
    public function describeTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TaskExecutionArn:string} $args
     * @return \AWS\Result<array{TaskExecutionArn?:string, Status?:"QUEUED"|"CANCELLING"|"LAUNCHING"|"PREPARING"|"TRANSFERRING"|"VERIFYING"|"SUCCESS"|"ERROR", Options?:array{VerifyMode?:"POINT_IN_TIME_CONSISTENT"|"ONLY_FILES_TRANSFERRED"|"NONE", OverwriteMode?:"ALWAYS"|"NEVER", Atime?:"NONE"|"BEST_EFFORT", Mtime?:"NONE"|"PRESERVE", Uid?:"NONE"|"INT_VALUE"|"NAME"|"BOTH", Gid?:"NONE"|"INT_VALUE"|"NAME"|"BOTH", PreserveDeletedFiles?:"PRESERVE"|"REMOVE", PreserveDevices?:"NONE"|"PRESERVE", PosixPermissions?:"NONE"|"PRESERVE", BytesPerSecond?:int, TaskQueueing?:"ENABLED"|"DISABLED", LogLevel?:"OFF"|"BASIC"|"TRANSFER", TransferMode?:"CHANGED"|"ALL", SecurityDescriptorCopyFlags?:"NONE"|"OWNER_DACL"|"OWNER_DACL_SACL", ObjectTags?:"PRESERVE"|"NONE"}, Excludes?:array<array{FilterType?:"SIMPLE_PATTERN", Value?:string}>, Includes?:array<array{FilterType?:"SIMPLE_PATTERN", Value?:string}>, ManifestConfig?:array{Action?:"TRANSFER", Format?:"CSV", Source?:array{S3:array{ManifestObjectPath:string, BucketAccessRoleArn:string, S3BucketArn:string, ManifestObjectVersionId?:string}}}, StartTime?:int|string|\DateTimeInterface, EstimatedFilesToTransfer?:int, EstimatedBytesToTransfer?:int, FilesTransferred?:int, BytesWritten?:int, BytesTransferred?:int, BytesCompressed?:int, Result?:array{PrepareDuration?:int, PrepareStatus?:"PENDING"|"SUCCESS"|"ERROR", TotalDuration?:int, TransferDuration?:int, TransferStatus?:"PENDING"|"SUCCESS"|"ERROR", VerifyDuration?:int, VerifyStatus?:"PENDING"|"SUCCESS"|"ERROR", ErrorCode?:string, ErrorDetail?:string}, TaskReportConfig?:array{Destination?:array{S3?:array{Subdirectory?:string, S3BucketArn:string, BucketAccessRoleArn:string}}, OutputType?:"SUMMARY_ONLY"|"STANDARD", ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS", ObjectVersionIds?:"INCLUDE"|"NONE", Overrides?:array{Transferred?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}, Verified?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}, Deleted?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}, Skipped?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}}}, FilesDeleted?:int, FilesSkipped?:int, FilesVerified?:int, ReportResult?:array{Status?:"PENDING"|"SUCCESS"|"ERROR", ErrorCode?:string, ErrorDetail?:string}, EstimatedFilesToDelete?:int, TaskMode?:"BASIC"|"ENHANCED", FilesPrepared?:int, FilesListed?:array{AtSource?:int, AtDestinationForDelete?:int}, FilesFailed?:array{Prepare?:int, Transfer?:int, Verify?:int, Delete?:int}}>
     */
    public function describeTaskExecution(array $args): \AWS\Result { }

    /**
     * @param array{TaskExecutionArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TaskExecutionArn?:string, Status?:"QUEUED"|"CANCELLING"|"LAUNCHING"|"PREPARING"|"TRANSFERRING"|"VERIFYING"|"SUCCESS"|"ERROR", Options?:array{VerifyMode?:"POINT_IN_TIME_CONSISTENT"|"ONLY_FILES_TRANSFERRED"|"NONE", OverwriteMode?:"ALWAYS"|"NEVER", Atime?:"NONE"|"BEST_EFFORT", Mtime?:"NONE"|"PRESERVE", Uid?:"NONE"|"INT_VALUE"|"NAME"|"BOTH", Gid?:"NONE"|"INT_VALUE"|"NAME"|"BOTH", PreserveDeletedFiles?:"PRESERVE"|"REMOVE", PreserveDevices?:"NONE"|"PRESERVE", PosixPermissions?:"NONE"|"PRESERVE", BytesPerSecond?:int, TaskQueueing?:"ENABLED"|"DISABLED", LogLevel?:"OFF"|"BASIC"|"TRANSFER", TransferMode?:"CHANGED"|"ALL", SecurityDescriptorCopyFlags?:"NONE"|"OWNER_DACL"|"OWNER_DACL_SACL", ObjectTags?:"PRESERVE"|"NONE"}, Excludes?:array<array{FilterType?:"SIMPLE_PATTERN", Value?:string}>, Includes?:array<array{FilterType?:"SIMPLE_PATTERN", Value?:string}>, ManifestConfig?:array{Action?:"TRANSFER", Format?:"CSV", Source?:array{S3:array{ManifestObjectPath:string, BucketAccessRoleArn:string, S3BucketArn:string, ManifestObjectVersionId?:string}}}, StartTime?:int|string|\DateTimeInterface, EstimatedFilesToTransfer?:int, EstimatedBytesToTransfer?:int, FilesTransferred?:int, BytesWritten?:int, BytesTransferred?:int, BytesCompressed?:int, Result?:array{PrepareDuration?:int, PrepareStatus?:"PENDING"|"SUCCESS"|"ERROR", TotalDuration?:int, TransferDuration?:int, TransferStatus?:"PENDING"|"SUCCESS"|"ERROR", VerifyDuration?:int, VerifyStatus?:"PENDING"|"SUCCESS"|"ERROR", ErrorCode?:string, ErrorDetail?:string}, TaskReportConfig?:array{Destination?:array{S3?:array{Subdirectory?:string, S3BucketArn:string, BucketAccessRoleArn:string}}, OutputType?:"SUMMARY_ONLY"|"STANDARD", ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS", ObjectVersionIds?:"INCLUDE"|"NONE", Overrides?:array{Transferred?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}, Verified?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}, Deleted?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}, Skipped?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}}}, FilesDeleted?:int, FilesSkipped?:int, FilesVerified?:int, ReportResult?:array{Status?:"PENDING"|"SUCCESS"|"ERROR", ErrorCode?:string, ErrorDetail?:string}, EstimatedFilesToDelete?:int, TaskMode?:"BASIC"|"ENHANCED", FilesPrepared?:int, FilesListed?:array{AtSource?:int, AtDestinationForDelete?:int}, FilesFailed?:array{Prepare?:int, Transfer?:int, Verify?:int, Delete?:int}}>
     */
    public function describeTaskExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DiscoveryJobArn:string, ResourceIds:array<string>, ResourceType:"SVM"|"VOLUME"|"CLUSTER"} $args
     * @return \AWS\Result<array{}>
     */
    public function generateRecommendations(array $args): \AWS\Result { }

    /**
     * @param array{DiscoveryJobArn:string, ResourceIds:array<string>, ResourceType:"SVM"|"VOLUME"|"CLUSTER"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function generateRecommendationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Agents?:array<array{AgentArn?:string, Name?:string, Status?:"ONLINE"|"OFFLINE", Platform?:array{Version?:string}}>, NextToken?:string}>
     */
    public function listAgents(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Agents?:array<array{AgentArn?:string, Name?:string, Status?:"ONLINE"|"OFFLINE", Platform?:array{Version?:string}}>, NextToken?:string}>
     */
    public function listAgentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StorageSystemArn?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{DiscoveryJobs?:array<array{DiscoveryJobArn?:string, Status?:"RUNNING"|"WARNING"|"TERMINATED"|"FAILED"|"STOPPED"|"COMPLETED"|"COMPLETED_WITH_ISSUES"}>, NextToken?:string}>
     */
    public function listDiscoveryJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{StorageSystemArn?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DiscoveryJobs?:array<array{DiscoveryJobArn?:string, Status?:"RUNNING"|"WARNING"|"TERMINATED"|"FAILED"|"STOPPED"|"COMPLETED"|"COMPLETED_WITH_ISSUES"}>, NextToken?:string}>
     */
    public function listDiscoveryJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, Filters?:array<array{Name:"LocationUri"|"LocationType"|"CreationTime", Values:array<string>, Operator:"Equals"|"NotEquals"|"In"|"LessThanOrEqual"|"LessThan"|"GreaterThanOrEqual"|"GreaterThan"|"Contains"|"NotContains"|"BeginsWith"}>} $args
     * @return \AWS\Result<array{Locations?:array<array{LocationArn?:string, LocationUri?:string}>, NextToken?:string}>
     */
    public function listLocations(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, Filters?:array<array{Name:"LocationUri"|"LocationType"|"CreationTime", Values:array<string>, Operator:"Equals"|"NotEquals"|"In"|"LessThanOrEqual"|"LessThan"|"GreaterThanOrEqual"|"GreaterThan"|"Contains"|"NotContains"|"BeginsWith"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Locations?:array<array{LocationArn?:string, LocationUri?:string}>, NextToken?:string}>
     */
    public function listLocationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{StorageSystems?:array<array{StorageSystemArn?:string, Name?:string}>, NextToken?:string}>
     */
    public function listStorageSystems(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StorageSystems?:array<array{StorageSystemArn?:string, Name?:string}>, NextToken?:string}>
     */
    public function listStorageSystemsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value?:string}>, NextToken?:string}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value?:string}>, NextToken?:string}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TaskArn?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{TaskExecutions?:array<array{TaskExecutionArn?:string, Status?:"QUEUED"|"CANCELLING"|"LAUNCHING"|"PREPARING"|"TRANSFERRING"|"VERIFYING"|"SUCCESS"|"ERROR", TaskMode?:"BASIC"|"ENHANCED"}>, NextToken?:string}>
     */
    public function listTaskExecutions(array $args = []): \AWS\Result { }

    /**
     * @param array{TaskArn?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TaskExecutions?:array<array{TaskExecutionArn?:string, Status?:"QUEUED"|"CANCELLING"|"LAUNCHING"|"PREPARING"|"TRANSFERRING"|"VERIFYING"|"SUCCESS"|"ERROR", TaskMode?:"BASIC"|"ENHANCED"}>, NextToken?:string}>
     */
    public function listTaskExecutionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, Filters?:array<array{Name:"LocationId"|"CreationTime", Values:array<string>, Operator:"Equals"|"NotEquals"|"In"|"LessThanOrEqual"|"LessThan"|"GreaterThanOrEqual"|"GreaterThan"|"Contains"|"NotContains"|"BeginsWith"}>} $args
     * @return \AWS\Result<array{Tasks?:array<array{TaskArn?:string, Status?:"AVAILABLE"|"CREATING"|"QUEUED"|"RUNNING"|"UNAVAILABLE", Name?:string, TaskMode?:"BASIC"|"ENHANCED"}>, NextToken?:string}>
     */
    public function listTasks(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, Filters?:array<array{Name:"LocationId"|"CreationTime", Values:array<string>, Operator:"Equals"|"NotEquals"|"In"|"LessThanOrEqual"|"LessThan"|"GreaterThanOrEqual"|"GreaterThan"|"Contains"|"NotContains"|"BeginsWith"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tasks?:array<array{TaskArn?:string, Status?:"AVAILABLE"|"CREATING"|"QUEUED"|"RUNNING"|"UNAVAILABLE", Name?:string, TaskMode?:"BASIC"|"ENHANCED"}>, NextToken?:string}>
     */
    public function listTasksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StorageSystemArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function removeStorageSystem(array $args): \AWS\Result { }

    /**
     * @param array{StorageSystemArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function removeStorageSystemAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StorageSystemArn:string, CollectionDurationMinutes:int, ClientToken:string, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{DiscoveryJobArn?:string}>
     */
    public function startDiscoveryJob(array $args): \AWS\Result { }

    /**
     * @param array{StorageSystemArn:string, CollectionDurationMinutes:int, ClientToken:string, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DiscoveryJobArn?:string}>
     */
    public function startDiscoveryJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TaskArn:string, OverrideOptions?:array{VerifyMode?:"POINT_IN_TIME_CONSISTENT"|"ONLY_FILES_TRANSFERRED"|"NONE", OverwriteMode?:"ALWAYS"|"NEVER", Atime?:"NONE"|"BEST_EFFORT", Mtime?:"NONE"|"PRESERVE", Uid?:"NONE"|"INT_VALUE"|"NAME"|"BOTH", Gid?:"NONE"|"INT_VALUE"|"NAME"|"BOTH", PreserveDeletedFiles?:"PRESERVE"|"REMOVE", PreserveDevices?:"NONE"|"PRESERVE", PosixPermissions?:"NONE"|"PRESERVE", BytesPerSecond?:int, TaskQueueing?:"ENABLED"|"DISABLED", LogLevel?:"OFF"|"BASIC"|"TRANSFER", TransferMode?:"CHANGED"|"ALL", SecurityDescriptorCopyFlags?:"NONE"|"OWNER_DACL"|"OWNER_DACL_SACL", ObjectTags?:"PRESERVE"|"NONE"}, Includes?:array<array{FilterType?:"SIMPLE_PATTERN", Value?:string}>, Excludes?:array<array{FilterType?:"SIMPLE_PATTERN", Value?:string}>, ManifestConfig?:array{Action?:"TRANSFER", Format?:"CSV", Source?:array{S3:array{ManifestObjectPath:string, BucketAccessRoleArn:string, S3BucketArn:string, ManifestObjectVersionId?:string}}}, TaskReportConfig?:array{Destination?:array{S3?:array{Subdirectory?:string, S3BucketArn:string, BucketAccessRoleArn:string}}, OutputType?:"SUMMARY_ONLY"|"STANDARD", ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS", ObjectVersionIds?:"INCLUDE"|"NONE", Overrides?:array{Transferred?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}, Verified?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}, Deleted?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}, Skipped?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}}}, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{TaskExecutionArn?:string}>
     */
    public function startTaskExecution(array $args): \AWS\Result { }

    /**
     * @param array{TaskArn:string, OverrideOptions?:array{VerifyMode?:"POINT_IN_TIME_CONSISTENT"|"ONLY_FILES_TRANSFERRED"|"NONE", OverwriteMode?:"ALWAYS"|"NEVER", Atime?:"NONE"|"BEST_EFFORT", Mtime?:"NONE"|"PRESERVE", Uid?:"NONE"|"INT_VALUE"|"NAME"|"BOTH", Gid?:"NONE"|"INT_VALUE"|"NAME"|"BOTH", PreserveDeletedFiles?:"PRESERVE"|"REMOVE", PreserveDevices?:"NONE"|"PRESERVE", PosixPermissions?:"NONE"|"PRESERVE", BytesPerSecond?:int, TaskQueueing?:"ENABLED"|"DISABLED", LogLevel?:"OFF"|"BASIC"|"TRANSFER", TransferMode?:"CHANGED"|"ALL", SecurityDescriptorCopyFlags?:"NONE"|"OWNER_DACL"|"OWNER_DACL_SACL", ObjectTags?:"PRESERVE"|"NONE"}, Includes?:array<array{FilterType?:"SIMPLE_PATTERN", Value?:string}>, Excludes?:array<array{FilterType?:"SIMPLE_PATTERN", Value?:string}>, ManifestConfig?:array{Action?:"TRANSFER", Format?:"CSV", Source?:array{S3:array{ManifestObjectPath:string, BucketAccessRoleArn:string, S3BucketArn:string, ManifestObjectVersionId?:string}}}, TaskReportConfig?:array{Destination?:array{S3?:array{Subdirectory?:string, S3BucketArn:string, BucketAccessRoleArn:string}}, OutputType?:"SUMMARY_ONLY"|"STANDARD", ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS", ObjectVersionIds?:"INCLUDE"|"NONE", Overrides?:array{Transferred?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}, Verified?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}, Deleted?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}, Skipped?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}}}, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{TaskExecutionArn?:string}>
     */
    public function startTaskExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DiscoveryJobArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopDiscoveryJob(array $args): \AWS\Result { }

    /**
     * @param array{DiscoveryJobArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopDiscoveryJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Tags:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Tags:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Keys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Keys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AgentArn:string, Name?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateAgent(array $args): \AWS\Result { }

    /**
     * @param array{AgentArn:string, Name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateAgentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DiscoveryJobArn:string, CollectionDurationMinutes:int} $args
     * @return \AWS\Result<array{}>
     */
    public function updateDiscoveryJob(array $args): \AWS\Result { }

    /**
     * @param array{DiscoveryJobArn:string, CollectionDurationMinutes:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateDiscoveryJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LocationArn:string, Subdirectory?:string, AuthenticationType?:"SAS", SasConfiguration?:array{Token:string}, BlobType?:"BLOCK", AccessTier?:"HOT"|"COOL"|"ARCHIVE", AgentArns?:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateLocationAzureBlob(array $args): \AWS\Result { }

    /**
     * @param array{LocationArn:string, Subdirectory?:string, AuthenticationType?:"SAS", SasConfiguration?:array{Token:string}, BlobType?:"BLOCK", AccessTier?:"HOT"|"COOL"|"ARCHIVE", AgentArns?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateLocationAzureBlobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LocationArn:string, Subdirectory?:string, AccessPointArn?:string, FileSystemAccessRoleArn?:string, InTransitEncryption?:"NONE"|"TLS1_2"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateLocationEfs(array $args): \AWS\Result { }

    /**
     * @param array{LocationArn:string, Subdirectory?:string, AccessPointArn?:string, FileSystemAccessRoleArn?:string, InTransitEncryption?:"NONE"|"TLS1_2"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateLocationEfsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LocationArn:string, Subdirectory?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateLocationFsxLustre(array $args): \AWS\Result { }

    /**
     * @param array{LocationArn:string, Subdirectory?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateLocationFsxLustreAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LocationArn:string, Protocol?:array{NFS?:array{MountOptions?:array{Version?:"AUTOMATIC"|"NFS3"|"NFS4_0"|"NFS4_1"}}, SMB?:array{Domain?:string, MountOptions?:array{Version?:"AUTOMATIC"|"SMB2"|"SMB3"|"SMB1"|"SMB2_0"}, Password?:string, User?:string}}, Subdirectory?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateLocationFsxOntap(array $args): \AWS\Result { }

    /**
     * @param array{LocationArn:string, Protocol?:array{NFS?:array{MountOptions?:array{Version?:"AUTOMATIC"|"NFS3"|"NFS4_0"|"NFS4_1"}}, SMB?:array{Domain?:string, MountOptions?:array{Version?:"AUTOMATIC"|"SMB2"|"SMB3"|"SMB1"|"SMB2_0"}, Password?:string, User?:string}}, Subdirectory?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateLocationFsxOntapAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LocationArn:string, Protocol?:array{NFS?:array{MountOptions?:array{Version?:"AUTOMATIC"|"NFS3"|"NFS4_0"|"NFS4_1"}}, SMB?:array{Domain?:string, MountOptions?:array{Version?:"AUTOMATIC"|"SMB2"|"SMB3"|"SMB1"|"SMB2_0"}, Password:string, User:string}}, Subdirectory?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateLocationFsxOpenZfs(array $args): \AWS\Result { }

    /**
     * @param array{LocationArn:string, Protocol?:array{NFS?:array{MountOptions?:array{Version?:"AUTOMATIC"|"NFS3"|"NFS4_0"|"NFS4_1"}}, SMB?:array{Domain?:string, MountOptions?:array{Version?:"AUTOMATIC"|"SMB2"|"SMB3"|"SMB1"|"SMB2_0"}, Password:string, User:string}}, Subdirectory?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateLocationFsxOpenZfsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LocationArn:string, Subdirectory?:string, Domain?:string, User?:string, Password?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateLocationFsxWindows(array $args): \AWS\Result { }

    /**
     * @param array{LocationArn:string, Subdirectory?:string, Domain?:string, User?:string, Password?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateLocationFsxWindowsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LocationArn:string, Subdirectory?:string, NameNodes?:array<array{Hostname:string, Port:int}>, BlockSize?:int, ReplicationFactor?:int, KmsKeyProviderUri?:string, QopConfiguration?:array{RpcProtection?:"DISABLED"|"AUTHENTICATION"|"INTEGRITY"|"PRIVACY", DataTransferProtection?:"DISABLED"|"AUTHENTICATION"|"INTEGRITY"|"PRIVACY"}, AuthenticationType?:"SIMPLE"|"KERBEROS", SimpleUser?:string, KerberosPrincipal?:string, KerberosKeytab?:string|resource|\Psr\Http\Message\StreamInterface, KerberosKrb5Conf?:string|resource|\Psr\Http\Message\StreamInterface, AgentArns?:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateLocationHdfs(array $args): \AWS\Result { }

    /**
     * @param array{LocationArn:string, Subdirectory?:string, NameNodes?:array<array{Hostname:string, Port:int}>, BlockSize?:int, ReplicationFactor?:int, KmsKeyProviderUri?:string, QopConfiguration?:array{RpcProtection?:"DISABLED"|"AUTHENTICATION"|"INTEGRITY"|"PRIVACY", DataTransferProtection?:"DISABLED"|"AUTHENTICATION"|"INTEGRITY"|"PRIVACY"}, AuthenticationType?:"SIMPLE"|"KERBEROS", SimpleUser?:string, KerberosPrincipal?:string, KerberosKeytab?:string|resource|\Psr\Http\Message\StreamInterface, KerberosKrb5Conf?:string|resource|\Psr\Http\Message\StreamInterface, AgentArns?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateLocationHdfsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LocationArn:string, Subdirectory?:string, OnPremConfig?:array{AgentArns:array<string>}, MountOptions?:array{Version?:"AUTOMATIC"|"NFS3"|"NFS4_0"|"NFS4_1"}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateLocationNfs(array $args): \AWS\Result { }

    /**
     * @param array{LocationArn:string, Subdirectory?:string, OnPremConfig?:array{AgentArns:array<string>}, MountOptions?:array{Version?:"AUTOMATIC"|"NFS3"|"NFS4_0"|"NFS4_1"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateLocationNfsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LocationArn:string, ServerPort?:int, ServerProtocol?:"HTTPS"|"HTTP", Subdirectory?:string, AccessKey?:string, SecretKey?:string, AgentArns?:array<string>, ServerCertificate?:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \AWS\Result<array{}>
     */
    public function updateLocationObjectStorage(array $args): \AWS\Result { }

    /**
     * @param array{LocationArn:string, ServerPort?:int, ServerProtocol?:"HTTPS"|"HTTP", Subdirectory?:string, AccessKey?:string, SecretKey?:string, AgentArns?:array<string>, ServerCertificate?:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateLocationObjectStorageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LocationArn:string, Subdirectory?:string, S3StorageClass?:"STANDARD"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_INSTANT_RETRIEVAL", S3Config?:array{BucketAccessRoleArn:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateLocationS3(array $args): \AWS\Result { }

    /**
     * @param array{LocationArn:string, Subdirectory?:string, S3StorageClass?:"STANDARD"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_INSTANT_RETRIEVAL", S3Config?:array{BucketAccessRoleArn:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateLocationS3Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LocationArn:string, Subdirectory?:string, User?:string, Domain?:string, Password?:string, AgentArns?:array<string>, MountOptions?:array{Version?:"AUTOMATIC"|"SMB2"|"SMB3"|"SMB1"|"SMB2_0"}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateLocationSmb(array $args): \AWS\Result { }

    /**
     * @param array{LocationArn:string, Subdirectory?:string, User?:string, Domain?:string, Password?:string, AgentArns?:array<string>, MountOptions?:array{Version?:"AUTOMATIC"|"SMB2"|"SMB3"|"SMB1"|"SMB2_0"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateLocationSmbAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StorageSystemArn:string, ServerConfiguration?:array{ServerHostname:string, ServerPort?:int}, AgentArns?:array<string>, Name?:string, CloudWatchLogGroupArn?:string, Credentials?:array{Username:string, Password:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateStorageSystem(array $args): \AWS\Result { }

    /**
     * @param array{StorageSystemArn:string, ServerConfiguration?:array{ServerHostname:string, ServerPort?:int}, AgentArns?:array<string>, Name?:string, CloudWatchLogGroupArn?:string, Credentials?:array{Username:string, Password:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateStorageSystemAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TaskArn:string, Options?:array{VerifyMode?:"POINT_IN_TIME_CONSISTENT"|"ONLY_FILES_TRANSFERRED"|"NONE", OverwriteMode?:"ALWAYS"|"NEVER", Atime?:"NONE"|"BEST_EFFORT", Mtime?:"NONE"|"PRESERVE", Uid?:"NONE"|"INT_VALUE"|"NAME"|"BOTH", Gid?:"NONE"|"INT_VALUE"|"NAME"|"BOTH", PreserveDeletedFiles?:"PRESERVE"|"REMOVE", PreserveDevices?:"NONE"|"PRESERVE", PosixPermissions?:"NONE"|"PRESERVE", BytesPerSecond?:int, TaskQueueing?:"ENABLED"|"DISABLED", LogLevel?:"OFF"|"BASIC"|"TRANSFER", TransferMode?:"CHANGED"|"ALL", SecurityDescriptorCopyFlags?:"NONE"|"OWNER_DACL"|"OWNER_DACL_SACL", ObjectTags?:"PRESERVE"|"NONE"}, Excludes?:array<array{FilterType?:"SIMPLE_PATTERN", Value?:string}>, Schedule?:array{ScheduleExpression:string, Status?:"ENABLED"|"DISABLED"}, Name?:string, CloudWatchLogGroupArn?:string, Includes?:array<array{FilterType?:"SIMPLE_PATTERN", Value?:string}>, ManifestConfig?:array{Action?:"TRANSFER", Format?:"CSV", Source?:array{S3:array{ManifestObjectPath:string, BucketAccessRoleArn:string, S3BucketArn:string, ManifestObjectVersionId?:string}}}, TaskReportConfig?:array{Destination?:array{S3?:array{Subdirectory?:string, S3BucketArn:string, BucketAccessRoleArn:string}}, OutputType?:"SUMMARY_ONLY"|"STANDARD", ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS", ObjectVersionIds?:"INCLUDE"|"NONE", Overrides?:array{Transferred?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}, Verified?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}, Deleted?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}, Skipped?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}}}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateTask(array $args): \AWS\Result { }

    /**
     * @param array{TaskArn:string, Options?:array{VerifyMode?:"POINT_IN_TIME_CONSISTENT"|"ONLY_FILES_TRANSFERRED"|"NONE", OverwriteMode?:"ALWAYS"|"NEVER", Atime?:"NONE"|"BEST_EFFORT", Mtime?:"NONE"|"PRESERVE", Uid?:"NONE"|"INT_VALUE"|"NAME"|"BOTH", Gid?:"NONE"|"INT_VALUE"|"NAME"|"BOTH", PreserveDeletedFiles?:"PRESERVE"|"REMOVE", PreserveDevices?:"NONE"|"PRESERVE", PosixPermissions?:"NONE"|"PRESERVE", BytesPerSecond?:int, TaskQueueing?:"ENABLED"|"DISABLED", LogLevel?:"OFF"|"BASIC"|"TRANSFER", TransferMode?:"CHANGED"|"ALL", SecurityDescriptorCopyFlags?:"NONE"|"OWNER_DACL"|"OWNER_DACL_SACL", ObjectTags?:"PRESERVE"|"NONE"}, Excludes?:array<array{FilterType?:"SIMPLE_PATTERN", Value?:string}>, Schedule?:array{ScheduleExpression:string, Status?:"ENABLED"|"DISABLED"}, Name?:string, CloudWatchLogGroupArn?:string, Includes?:array<array{FilterType?:"SIMPLE_PATTERN", Value?:string}>, ManifestConfig?:array{Action?:"TRANSFER", Format?:"CSV", Source?:array{S3:array{ManifestObjectPath:string, BucketAccessRoleArn:string, S3BucketArn:string, ManifestObjectVersionId?:string}}}, TaskReportConfig?:array{Destination?:array{S3?:array{Subdirectory?:string, S3BucketArn:string, BucketAccessRoleArn:string}}, OutputType?:"SUMMARY_ONLY"|"STANDARD", ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS", ObjectVersionIds?:"INCLUDE"|"NONE", Overrides?:array{Transferred?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}, Verified?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}, Deleted?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}, Skipped?:array{ReportLevel?:"ERRORS_ONLY"|"SUCCESSES_AND_ERRORS"}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TaskExecutionArn:string, Options:array{VerifyMode?:"POINT_IN_TIME_CONSISTENT"|"ONLY_FILES_TRANSFERRED"|"NONE", OverwriteMode?:"ALWAYS"|"NEVER", Atime?:"NONE"|"BEST_EFFORT", Mtime?:"NONE"|"PRESERVE", Uid?:"NONE"|"INT_VALUE"|"NAME"|"BOTH", Gid?:"NONE"|"INT_VALUE"|"NAME"|"BOTH", PreserveDeletedFiles?:"PRESERVE"|"REMOVE", PreserveDevices?:"NONE"|"PRESERVE", PosixPermissions?:"NONE"|"PRESERVE", BytesPerSecond?:int, TaskQueueing?:"ENABLED"|"DISABLED", LogLevel?:"OFF"|"BASIC"|"TRANSFER", TransferMode?:"CHANGED"|"ALL", SecurityDescriptorCopyFlags?:"NONE"|"OWNER_DACL"|"OWNER_DACL_SACL", ObjectTags?:"PRESERVE"|"NONE"}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateTaskExecution(array $args): \AWS\Result { }

    /**
     * @param array{TaskExecutionArn:string, Options:array{VerifyMode?:"POINT_IN_TIME_CONSISTENT"|"ONLY_FILES_TRANSFERRED"|"NONE", OverwriteMode?:"ALWAYS"|"NEVER", Atime?:"NONE"|"BEST_EFFORT", Mtime?:"NONE"|"PRESERVE", Uid?:"NONE"|"INT_VALUE"|"NAME"|"BOTH", Gid?:"NONE"|"INT_VALUE"|"NAME"|"BOTH", PreserveDeletedFiles?:"PRESERVE"|"REMOVE", PreserveDevices?:"NONE"|"PRESERVE", PosixPermissions?:"NONE"|"PRESERVE", BytesPerSecond?:int, TaskQueueing?:"ENABLED"|"DISABLED", LogLevel?:"OFF"|"BASIC"|"TRANSFER", TransferMode?:"CHANGED"|"ALL", SecurityDescriptorCopyFlags?:"NONE"|"OWNER_DACL"|"OWNER_DACL_SACL", ObjectTags?:"PRESERVE"|"NONE"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateTaskExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
