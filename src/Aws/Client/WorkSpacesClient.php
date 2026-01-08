<?php
namespace AWS\WorkSpaces;

class WorkSpacesClient
{
    /**
     * @param array{LinkId:string, ClientToken?:string} $args
     * @return \AWS\Result<array{AccountLink?:array{AccountLinkId?:string, AccountLinkStatus?:"LINKED"|"LINKING_FAILED"|"LINK_NOT_FOUND"|"PENDING_ACCEPTANCE_BY_TARGET_ACCOUNT"|"REJECTED", SourceAccountId?:string, TargetAccountId?:string}}>
     */
    public function acceptAccountLinkInvitation(array $args): \AWS\Result { }

    /**
     * @param array{LinkId:string, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountLink?:array{AccountLinkId?:string, AccountLinkStatus?:"LINKED"|"LINKING_FAILED"|"LINK_NOT_FOUND"|"PENDING_ACCEPTANCE_BY_TARGET_ACCOUNT"|"REJECTED", SourceAccountId?:string, TargetAccountId?:string}}>
     */
    public function acceptAccountLinkInvitationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AliasId:string, ResourceId:string} $args
     * @return \AWS\Result<array{ConnectionIdentifier?:string}>
     */
    public function associateConnectionAlias(array $args): \AWS\Result { }

    /**
     * @param array{AliasId:string, ResourceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConnectionIdentifier?:string}>
     */
    public function associateConnectionAliasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, GroupIds:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function associateIpGroups(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, GroupIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateIpGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkspaceId:string, ApplicationId:string} $args
     * @return \AWS\Result<array{Association?:array{AssociatedResourceId?:string, AssociatedResourceType?:"APPLICATION", Created?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, State?:"PENDING_INSTALL"|"PENDING_INSTALL_DEPLOYMENT"|"PENDING_UNINSTALL"|"PENDING_UNINSTALL_DEPLOYMENT"|"INSTALLING"|"UNINSTALLING"|"ERROR"|"COMPLETED"|"REMOVED", StateReason?:array{ErrorCode?:"ValidationError.InsufficientDiskSpace"|"ValidationError.InsufficientMemory"|"ValidationError.UnsupportedOperatingSystem"|"DeploymentError.InternalServerError"|"DeploymentError.WorkspaceUnreachable", ErrorMessage?:string}, WorkspaceId?:string}}>
     */
    public function associateWorkspaceApplication(array $args): \AWS\Result { }

    /**
     * @param array{WorkspaceId:string, ApplicationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Association?:array{AssociatedResourceId?:string, AssociatedResourceType?:"APPLICATION", Created?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, State?:"PENDING_INSTALL"|"PENDING_INSTALL_DEPLOYMENT"|"PENDING_UNINSTALL"|"PENDING_UNINSTALL_DEPLOYMENT"|"INSTALLING"|"UNINSTALLING"|"ERROR"|"COMPLETED"|"REMOVED", StateReason?:array{ErrorCode?:"ValidationError.InsufficientDiskSpace"|"ValidationError.InsufficientMemory"|"ValidationError.UnsupportedOperatingSystem"|"DeploymentError.InternalServerError"|"DeploymentError.WorkspaceUnreachable", ErrorMessage?:string}, WorkspaceId?:string}}>
     */
    public function associateWorkspaceApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupId:string, UserRules:array<array{ipRule?:string, ruleDesc?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function authorizeIpRules(array $args): \AWS\Result { }

    /**
     * @param array{GroupId:string, UserRules:array<array{ipRule?:string, ruleDesc?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function authorizeIpRulesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Description?:string, SourceImageId:string, SourceRegion:string, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{ImageId?:string}>
     */
    public function copyWorkspaceImage(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, SourceImageId:string, SourceRegion:string, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ImageId?:string}>
     */
    public function copyWorkspaceImageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TargetAccountId:string, ClientToken?:string} $args
     * @return \AWS\Result<array{AccountLink?:array{AccountLinkId?:string, AccountLinkStatus?:"LINKED"|"LINKING_FAILED"|"LINK_NOT_FOUND"|"PENDING_ACCEPTANCE_BY_TARGET_ACCOUNT"|"REJECTED", SourceAccountId?:string, TargetAccountId?:string}}>
     */
    public function createAccountLinkInvitation(array $args): \AWS\Result { }

    /**
     * @param array{TargetAccountId:string, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountLink?:array{AccountLinkId?:string, AccountLinkStatus?:"LINKED"|"LINKING_FAILED"|"LINK_NOT_FOUND"|"PENDING_ACCEPTANCE_BY_TARGET_ACCOUNT"|"REJECTED", SourceAccountId?:string, TargetAccountId?:string}}>
     */
    public function createAccountLinkInvitationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, Name:string, URL:string} $args
     * @return \AWS\Result<array{AddInId?:string}>
     */
    public function createConnectClientAddIn(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, Name:string, URL:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AddInId?:string}>
     */
    public function createConnectClientAddInAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConnectionString:string, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{AliasId?:string}>
     */
    public function createConnectionAlias(array $args): \AWS\Result { }

    /**
     * @param array{ConnectionString:string, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{AliasId?:string}>
     */
    public function createConnectionAliasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupName:string, GroupDesc?:string, UserRules?:array<array{ipRule?:string, ruleDesc?:string}>, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{GroupId?:string}>
     */
    public function createIpGroup(array $args): \AWS\Result { }

    /**
     * @param array{GroupName:string, GroupDesc?:string, UserRules?:array<array{ipRule?:string, ruleDesc?:string}>, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{GroupId?:string}>
     */
    public function createIpGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PrimaryRegion:string, StandbyWorkspaces:array<array{PrimaryWorkspaceId:string, VolumeEncryptionKey?:string, DirectoryId:string, Tags?:array<array{Key:string, Value?:string}>, DataReplication?:"NO_REPLICATION"|"PRIMARY_AS_SOURCE"}>} $args
     * @return \AWS\Result<array{FailedStandbyRequests?:array<array{StandbyWorkspaceRequest?:array{PrimaryWorkspaceId:string, VolumeEncryptionKey?:string, DirectoryId:string, Tags?:array<array{Key:string, Value?:string}>, DataReplication?:"NO_REPLICATION"|"PRIMARY_AS_SOURCE"}, ErrorCode?:string, ErrorMessage?:string}>, PendingStandbyRequests?:array<array{UserName?:string, DirectoryId?:string, State?:"PENDING"|"AVAILABLE"|"IMPAIRED"|"UNHEALTHY"|"REBOOTING"|"STARTING"|"REBUILDING"|"RESTORING"|"MAINTENANCE"|"ADMIN_MAINTENANCE"|"TERMINATING"|"TERMINATED"|"SUSPENDED"|"UPDATING"|"STOPPING"|"STOPPED"|"ERROR", WorkspaceId?:string}>}>
     */
    public function createStandbyWorkspaces(array $args): \AWS\Result { }

    /**
     * @param array{PrimaryRegion:string, StandbyWorkspaces:array<array{PrimaryWorkspaceId:string, VolumeEncryptionKey?:string, DirectoryId:string, Tags?:array<array{Key:string, Value?:string}>, DataReplication?:"NO_REPLICATION"|"PRIMARY_AS_SOURCE"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{FailedStandbyRequests?:array<array{StandbyWorkspaceRequest?:array{PrimaryWorkspaceId:string, VolumeEncryptionKey?:string, DirectoryId:string, Tags?:array<array{Key:string, Value?:string}>, DataReplication?:"NO_REPLICATION"|"PRIMARY_AS_SOURCE"}, ErrorCode?:string, ErrorMessage?:string}>, PendingStandbyRequests?:array<array{UserName?:string, DirectoryId?:string, State?:"PENDING"|"AVAILABLE"|"IMPAIRED"|"UNHEALTHY"|"REBOOTING"|"STARTING"|"REBUILDING"|"RESTORING"|"MAINTENANCE"|"ADMIN_MAINTENANCE"|"TERMINATING"|"TERMINATED"|"SUSPENDED"|"UPDATING"|"STOPPING"|"STOPPED"|"ERROR", WorkspaceId?:string}>}>
     */
    public function createStandbyWorkspacesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, Tags:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function createTags(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, Tags:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Description:string, SourceImageId:string, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{ImageId?:string}>
     */
    public function createUpdatedWorkspaceImage(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description:string, SourceImageId:string, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ImageId?:string}>
     */
    public function createUpdatedWorkspaceImageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BundleName:string, BundleDescription:string, ImageId:string, ComputeType:array{Name?:"VALUE"|"STANDARD"|"PERFORMANCE"|"POWER"|"GRAPHICS"|"POWERPRO"|"GENERALPURPOSE_4XLARGE"|"GENERALPURPOSE_8XLARGE"|"GRAPHICSPRO"|"GRAPHICS_G4DN"|"GRAPHICSPRO_G4DN"}, UserStorage:array{Capacity:string}, RootStorage?:array{Capacity:string}, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{WorkspaceBundle?:array{BundleId?:string, Name?:string, Owner?:string, Description?:string, ImageId?:string, RootStorage?:array{Capacity:string}, UserStorage?:array{Capacity:string}, ComputeType?:array{Name?:"VALUE"|"STANDARD"|"PERFORMANCE"|"POWER"|"GRAPHICS"|"POWERPRO"|"GENERALPURPOSE_4XLARGE"|"GENERALPURPOSE_8XLARGE"|"GRAPHICSPRO"|"GRAPHICS_G4DN"|"GRAPHICSPRO_G4DN"}, LastUpdatedTime?:int|string|\DateTimeInterface, CreationTime?:int|string|\DateTimeInterface, State?:"AVAILABLE"|"PENDING"|"ERROR", BundleType?:"REGULAR"|"STANDBY"}}>
     */
    public function createWorkspaceBundle(array $args): \AWS\Result { }

    /**
     * @param array{BundleName:string, BundleDescription:string, ImageId:string, ComputeType:array{Name?:"VALUE"|"STANDARD"|"PERFORMANCE"|"POWER"|"GRAPHICS"|"POWERPRO"|"GENERALPURPOSE_4XLARGE"|"GENERALPURPOSE_8XLARGE"|"GRAPHICSPRO"|"GRAPHICS_G4DN"|"GRAPHICSPRO_G4DN"}, UserStorage:array{Capacity:string}, RootStorage?:array{Capacity:string}, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{WorkspaceBundle?:array{BundleId?:string, Name?:string, Owner?:string, Description?:string, ImageId?:string, RootStorage?:array{Capacity:string}, UserStorage?:array{Capacity:string}, ComputeType?:array{Name?:"VALUE"|"STANDARD"|"PERFORMANCE"|"POWER"|"GRAPHICS"|"POWERPRO"|"GENERALPURPOSE_4XLARGE"|"GENERALPURPOSE_8XLARGE"|"GRAPHICSPRO"|"GRAPHICS_G4DN"|"GRAPHICSPRO_G4DN"}, LastUpdatedTime?:int|string|\DateTimeInterface, CreationTime?:int|string|\DateTimeInterface, State?:"AVAILABLE"|"PENDING"|"ERROR", BundleType?:"REGULAR"|"STANDBY"}}>
     */
    public function createWorkspaceBundleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Description:string, WorkspaceId:string, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \AWS\Result<array{ImageId?:string, Name?:string, Description?:string, OperatingSystem?:array{Type?:"WINDOWS"|"LINUX"}, State?:"AVAILABLE"|"PENDING"|"ERROR", RequiredTenancy?:"DEFAULT"|"DEDICATED", Created?:int|string|\DateTimeInterface, OwnerAccountId?:string}>
     */
    public function createWorkspaceImage(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description:string, WorkspaceId:string, Tags?:array<array{Key:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ImageId?:string, Name?:string, Description?:string, OperatingSystem?:array{Type?:"WINDOWS"|"LINUX"}, State?:"AVAILABLE"|"PENDING"|"ERROR", RequiredTenancy?:"DEFAULT"|"DEDICATED", Created?:int|string|\DateTimeInterface, OwnerAccountId?:string}>
     */
    public function createWorkspaceImageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Workspaces:array<array{DirectoryId:string, UserName:string, BundleId:string, VolumeEncryptionKey?:string, UserVolumeEncryptionEnabled?:bool, RootVolumeEncryptionEnabled?:bool, WorkspaceProperties?:array{RunningMode?:"AUTO_STOP"|"ALWAYS_ON"|"MANUAL", RunningModeAutoStopTimeoutInMinutes?:int, RootVolumeSizeGib?:int, UserVolumeSizeGib?:int, ComputeTypeName?:"VALUE"|"STANDARD"|"PERFORMANCE"|"POWER"|"GRAPHICS"|"POWERPRO"|"GENERALPURPOSE_4XLARGE"|"GENERALPURPOSE_8XLARGE"|"GRAPHICSPRO"|"GRAPHICS_G4DN"|"GRAPHICSPRO_G4DN", Protocols?:array<"PCOIP"|"WSP">, OperatingSystemName?:"AMAZON_LINUX_2"|"UBUNTU_18_04"|"UBUNTU_20_04"|"UBUNTU_22_04"|"UNKNOWN"|"WINDOWS_10"|"WINDOWS_11"|"WINDOWS_7"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"RHEL_8"|"ROCKY_8", GlobalAccelerator?:array{Mode:"ENABLED_AUTO"|"DISABLED"|"INHERITED", PreferredProtocol?:"TCP"|"NONE"|"INHERITED"}}, Tags?:array<array{Key:string, Value?:string}>, WorkspaceName?:string}>} $args
     * @return \AWS\Result<array{FailedRequests?:array<array{WorkspaceRequest?:array{DirectoryId:string, UserName:string, BundleId:string, VolumeEncryptionKey?:string, UserVolumeEncryptionEnabled?:bool, RootVolumeEncryptionEnabled?:bool, WorkspaceProperties?:array{RunningMode?:"AUTO_STOP"|"ALWAYS_ON"|"MANUAL", RunningModeAutoStopTimeoutInMinutes?:int, RootVolumeSizeGib?:int, UserVolumeSizeGib?:int, ComputeTypeName?:"VALUE"|"STANDARD"|"PERFORMANCE"|"POWER"|"GRAPHICS"|"POWERPRO"|"GENERALPURPOSE_4XLARGE"|"GENERALPURPOSE_8XLARGE"|"GRAPHICSPRO"|"GRAPHICS_G4DN"|"GRAPHICSPRO_G4DN", Protocols?:array<"PCOIP"|"WSP">, OperatingSystemName?:"AMAZON_LINUX_2"|"UBUNTU_18_04"|"UBUNTU_20_04"|"UBUNTU_22_04"|"UNKNOWN"|"WINDOWS_10"|"WINDOWS_11"|"WINDOWS_7"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"RHEL_8"|"ROCKY_8", GlobalAccelerator?:array{Mode:"ENABLED_AUTO"|"DISABLED"|"INHERITED", PreferredProtocol?:"TCP"|"NONE"|"INHERITED"}}, Tags?:array<array{Key:string, Value?:string}>, WorkspaceName?:string}, ErrorCode?:string, ErrorMessage?:string}>, PendingRequests?:array<array{WorkspaceId?:string, DirectoryId?:string, UserName?:string, IpAddress?:string, State?:"PENDING"|"AVAILABLE"|"IMPAIRED"|"UNHEALTHY"|"REBOOTING"|"STARTING"|"REBUILDING"|"RESTORING"|"MAINTENANCE"|"ADMIN_MAINTENANCE"|"TERMINATING"|"TERMINATED"|"SUSPENDED"|"UPDATING"|"STOPPING"|"STOPPED"|"ERROR", BundleId?:string, SubnetId?:string, ErrorMessage?:string, ErrorCode?:string, ComputerName?:string, VolumeEncryptionKey?:string, UserVolumeEncryptionEnabled?:bool, RootVolumeEncryptionEnabled?:bool, WorkspaceName?:string, WorkspaceProperties?:array{RunningMode?:"AUTO_STOP"|"ALWAYS_ON"|"MANUAL", RunningModeAutoStopTimeoutInMinutes?:int, RootVolumeSizeGib?:int, UserVolumeSizeGib?:int, ComputeTypeName?:"VALUE"|"STANDARD"|"PERFORMANCE"|"POWER"|"GRAPHICS"|"POWERPRO"|"GENERALPURPOSE_4XLARGE"|"GENERALPURPOSE_8XLARGE"|"GRAPHICSPRO"|"GRAPHICS_G4DN"|"GRAPHICSPRO_G4DN", Protocols?:array<"PCOIP"|"WSP">, OperatingSystemName?:"AMAZON_LINUX_2"|"UBUNTU_18_04"|"UBUNTU_20_04"|"UBUNTU_22_04"|"UNKNOWN"|"WINDOWS_10"|"WINDOWS_11"|"WINDOWS_7"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"RHEL_8"|"ROCKY_8", GlobalAccelerator?:array{Mode:"ENABLED_AUTO"|"DISABLED"|"INHERITED", PreferredProtocol?:"TCP"|"NONE"|"INHERITED"}}, ModificationStates?:array<array{Resource?:"ROOT_VOLUME"|"USER_VOLUME"|"COMPUTE_TYPE", State?:"UPDATE_INITIATED"|"UPDATE_IN_PROGRESS"}>, RelatedWorkspaces?:array<array{WorkspaceId?:string, Region?:string, State?:"PENDING"|"AVAILABLE"|"IMPAIRED"|"UNHEALTHY"|"REBOOTING"|"STARTING"|"REBUILDING"|"RESTORING"|"MAINTENANCE"|"ADMIN_MAINTENANCE"|"TERMINATING"|"TERMINATED"|"SUSPENDED"|"UPDATING"|"STOPPING"|"STOPPED"|"ERROR", Type?:"PRIMARY"|"STANDBY"}>, DataReplicationSettings?:array{DataReplication?:"NO_REPLICATION"|"PRIMARY_AS_SOURCE", RecoverySnapshotTime?:int|string|\DateTimeInterface}, StandbyWorkspacesProperties?:array<array{StandbyWorkspaceId?:string, DataReplication?:"NO_REPLICATION"|"PRIMARY_AS_SOURCE", RecoverySnapshotTime?:int|string|\DateTimeInterface}>}>}>
     */
    public function createWorkspaces(array $args): \AWS\Result { }

    /**
     * @param array{Workspaces:array<array{DirectoryId:string, UserName:string, BundleId:string, VolumeEncryptionKey?:string, UserVolumeEncryptionEnabled?:bool, RootVolumeEncryptionEnabled?:bool, WorkspaceProperties?:array{RunningMode?:"AUTO_STOP"|"ALWAYS_ON"|"MANUAL", RunningModeAutoStopTimeoutInMinutes?:int, RootVolumeSizeGib?:int, UserVolumeSizeGib?:int, ComputeTypeName?:"VALUE"|"STANDARD"|"PERFORMANCE"|"POWER"|"GRAPHICS"|"POWERPRO"|"GENERALPURPOSE_4XLARGE"|"GENERALPURPOSE_8XLARGE"|"GRAPHICSPRO"|"GRAPHICS_G4DN"|"GRAPHICSPRO_G4DN", Protocols?:array<"PCOIP"|"WSP">, OperatingSystemName?:"AMAZON_LINUX_2"|"UBUNTU_18_04"|"UBUNTU_20_04"|"UBUNTU_22_04"|"UNKNOWN"|"WINDOWS_10"|"WINDOWS_11"|"WINDOWS_7"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"RHEL_8"|"ROCKY_8", GlobalAccelerator?:array{Mode:"ENABLED_AUTO"|"DISABLED"|"INHERITED", PreferredProtocol?:"TCP"|"NONE"|"INHERITED"}}, Tags?:array<array{Key:string, Value?:string}>, WorkspaceName?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{FailedRequests?:array<array{WorkspaceRequest?:array{DirectoryId:string, UserName:string, BundleId:string, VolumeEncryptionKey?:string, UserVolumeEncryptionEnabled?:bool, RootVolumeEncryptionEnabled?:bool, WorkspaceProperties?:array{RunningMode?:"AUTO_STOP"|"ALWAYS_ON"|"MANUAL", RunningModeAutoStopTimeoutInMinutes?:int, RootVolumeSizeGib?:int, UserVolumeSizeGib?:int, ComputeTypeName?:"VALUE"|"STANDARD"|"PERFORMANCE"|"POWER"|"GRAPHICS"|"POWERPRO"|"GENERALPURPOSE_4XLARGE"|"GENERALPURPOSE_8XLARGE"|"GRAPHICSPRO"|"GRAPHICS_G4DN"|"GRAPHICSPRO_G4DN", Protocols?:array<"PCOIP"|"WSP">, OperatingSystemName?:"AMAZON_LINUX_2"|"UBUNTU_18_04"|"UBUNTU_20_04"|"UBUNTU_22_04"|"UNKNOWN"|"WINDOWS_10"|"WINDOWS_11"|"WINDOWS_7"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"RHEL_8"|"ROCKY_8", GlobalAccelerator?:array{Mode:"ENABLED_AUTO"|"DISABLED"|"INHERITED", PreferredProtocol?:"TCP"|"NONE"|"INHERITED"}}, Tags?:array<array{Key:string, Value?:string}>, WorkspaceName?:string}, ErrorCode?:string, ErrorMessage?:string}>, PendingRequests?:array<array{WorkspaceId?:string, DirectoryId?:string, UserName?:string, IpAddress?:string, State?:"PENDING"|"AVAILABLE"|"IMPAIRED"|"UNHEALTHY"|"REBOOTING"|"STARTING"|"REBUILDING"|"RESTORING"|"MAINTENANCE"|"ADMIN_MAINTENANCE"|"TERMINATING"|"TERMINATED"|"SUSPENDED"|"UPDATING"|"STOPPING"|"STOPPED"|"ERROR", BundleId?:string, SubnetId?:string, ErrorMessage?:string, ErrorCode?:string, ComputerName?:string, VolumeEncryptionKey?:string, UserVolumeEncryptionEnabled?:bool, RootVolumeEncryptionEnabled?:bool, WorkspaceName?:string, WorkspaceProperties?:array{RunningMode?:"AUTO_STOP"|"ALWAYS_ON"|"MANUAL", RunningModeAutoStopTimeoutInMinutes?:int, RootVolumeSizeGib?:int, UserVolumeSizeGib?:int, ComputeTypeName?:"VALUE"|"STANDARD"|"PERFORMANCE"|"POWER"|"GRAPHICS"|"POWERPRO"|"GENERALPURPOSE_4XLARGE"|"GENERALPURPOSE_8XLARGE"|"GRAPHICSPRO"|"GRAPHICS_G4DN"|"GRAPHICSPRO_G4DN", Protocols?:array<"PCOIP"|"WSP">, OperatingSystemName?:"AMAZON_LINUX_2"|"UBUNTU_18_04"|"UBUNTU_20_04"|"UBUNTU_22_04"|"UNKNOWN"|"WINDOWS_10"|"WINDOWS_11"|"WINDOWS_7"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"RHEL_8"|"ROCKY_8", GlobalAccelerator?:array{Mode:"ENABLED_AUTO"|"DISABLED"|"INHERITED", PreferredProtocol?:"TCP"|"NONE"|"INHERITED"}}, ModificationStates?:array<array{Resource?:"ROOT_VOLUME"|"USER_VOLUME"|"COMPUTE_TYPE", State?:"UPDATE_INITIATED"|"UPDATE_IN_PROGRESS"}>, RelatedWorkspaces?:array<array{WorkspaceId?:string, Region?:string, State?:"PENDING"|"AVAILABLE"|"IMPAIRED"|"UNHEALTHY"|"REBOOTING"|"STARTING"|"REBUILDING"|"RESTORING"|"MAINTENANCE"|"ADMIN_MAINTENANCE"|"TERMINATING"|"TERMINATED"|"SUSPENDED"|"UPDATING"|"STOPPING"|"STOPPED"|"ERROR", Type?:"PRIMARY"|"STANDBY"}>, DataReplicationSettings?:array{DataReplication?:"NO_REPLICATION"|"PRIMARY_AS_SOURCE", RecoverySnapshotTime?:int|string|\DateTimeInterface}, StandbyWorkspacesProperties?:array<array{StandbyWorkspaceId?:string, DataReplication?:"NO_REPLICATION"|"PRIMARY_AS_SOURCE", RecoverySnapshotTime?:int|string|\DateTimeInterface}>}>}>
     */
    public function createWorkspacesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PoolName:string, Description:string, BundleId:string, DirectoryId:string, Capacity:array{DesiredUserSessions:int}, Tags?:array<array{Key:string, Value?:string}>, ApplicationSettings?:array{Status:"DISABLED"|"ENABLED", SettingsGroup?:string}, TimeoutSettings?:array{DisconnectTimeoutInSeconds?:int, IdleDisconnectTimeoutInSeconds?:int, MaxUserDurationInSeconds?:int}} $args
     * @return \AWS\Result<array{WorkspacesPool?:array{PoolId:string, PoolArn:string, CapacityStatus:array{AvailableUserSessions:int, DesiredUserSessions:int, ActualUserSessions:int, ActiveUserSessions:int}, PoolName:string, Description?:string, State:"CREATING"|"DELETING"|"RUNNING"|"STARTING"|"STOPPED"|"STOPPING"|"UPDATING", CreatedAt:int|string|\DateTimeInterface, BundleId:string, DirectoryId:string, Errors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_IS_MISSING"|"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"WORKSPACES_POOL_STOPPED"|"WORKSPACES_POOL_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR"|"DOMAIN_JOIN_ERROR_SECRET_ACTION_PERMISSION_IS_MISSING"|"DOMAIN_JOIN_ERROR_SECRET_DECRYPTION_FAILURE"|"DOMAIN_JOIN_ERROR_SECRET_STATE_INVALID"|"DOMAIN_JOIN_ERROR_SECRET_NOT_FOUND"|"DOMAIN_JOIN_ERROR_SECRET_VALUE_KEY_NOT_FOUND"|"DOMAIN_JOIN_ERROR_SECRET_INVALID"|"BUNDLE_NOT_FOUND"|"DIRECTORY_NOT_FOUND"|"INSUFFICIENT_PERMISSIONS_ERROR"|"DEFAULT_OU_IS_MISSING", ErrorMessage?:string}>, ApplicationSettings?:array{Status:"DISABLED"|"ENABLED", SettingsGroup?:string, S3BucketName?:string}, TimeoutSettings?:array{DisconnectTimeoutInSeconds?:int, IdleDisconnectTimeoutInSeconds?:int, MaxUserDurationInSeconds?:int}}}>
     */
    public function createWorkspacesPool(array $args): \AWS\Result { }

    /**
     * @param array{PoolName:string, Description:string, BundleId:string, DirectoryId:string, Capacity:array{DesiredUserSessions:int}, Tags?:array<array{Key:string, Value?:string}>, ApplicationSettings?:array{Status:"DISABLED"|"ENABLED", SettingsGroup?:string}, TimeoutSettings?:array{DisconnectTimeoutInSeconds?:int, IdleDisconnectTimeoutInSeconds?:int, MaxUserDurationInSeconds?:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{WorkspacesPool?:array{PoolId:string, PoolArn:string, CapacityStatus:array{AvailableUserSessions:int, DesiredUserSessions:int, ActualUserSessions:int, ActiveUserSessions:int}, PoolName:string, Description?:string, State:"CREATING"|"DELETING"|"RUNNING"|"STARTING"|"STOPPED"|"STOPPING"|"UPDATING", CreatedAt:int|string|\DateTimeInterface, BundleId:string, DirectoryId:string, Errors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_IS_MISSING"|"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"WORKSPACES_POOL_STOPPED"|"WORKSPACES_POOL_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR"|"DOMAIN_JOIN_ERROR_SECRET_ACTION_PERMISSION_IS_MISSING"|"DOMAIN_JOIN_ERROR_SECRET_DECRYPTION_FAILURE"|"DOMAIN_JOIN_ERROR_SECRET_STATE_INVALID"|"DOMAIN_JOIN_ERROR_SECRET_NOT_FOUND"|"DOMAIN_JOIN_ERROR_SECRET_VALUE_KEY_NOT_FOUND"|"DOMAIN_JOIN_ERROR_SECRET_INVALID"|"BUNDLE_NOT_FOUND"|"DIRECTORY_NOT_FOUND"|"INSUFFICIENT_PERMISSIONS_ERROR"|"DEFAULT_OU_IS_MISSING", ErrorMessage?:string}>, ApplicationSettings?:array{Status:"DISABLED"|"ENABLED", SettingsGroup?:string, S3BucketName?:string}, TimeoutSettings?:array{DisconnectTimeoutInSeconds?:int, IdleDisconnectTimeoutInSeconds?:int, MaxUserDurationInSeconds?:int}}}>
     */
    public function createWorkspacesPoolAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LinkId:string, ClientToken?:string} $args
     * @return \AWS\Result<array{AccountLink?:array{AccountLinkId?:string, AccountLinkStatus?:"LINKED"|"LINKING_FAILED"|"LINK_NOT_FOUND"|"PENDING_ACCEPTANCE_BY_TARGET_ACCOUNT"|"REJECTED", SourceAccountId?:string, TargetAccountId?:string}}>
     */
    public function deleteAccountLinkInvitation(array $args): \AWS\Result { }

    /**
     * @param array{LinkId:string, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountLink?:array{AccountLinkId?:string, AccountLinkStatus?:"LINKED"|"LINKING_FAILED"|"LINK_NOT_FOUND"|"PENDING_ACCEPTANCE_BY_TARGET_ACCOUNT"|"REJECTED", SourceAccountId?:string, TargetAccountId?:string}}>
     */
    public function deleteAccountLinkInvitationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, Platforms:array<"DeviceTypeWindows"|"DeviceTypeOsx"|"DeviceTypeAndroid"|"DeviceTypeIos"|"DeviceTypeLinux"|"DeviceTypeWeb">} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteClientBranding(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, Platforms:array<"DeviceTypeWindows"|"DeviceTypeOsx"|"DeviceTypeAndroid"|"DeviceTypeIos"|"DeviceTypeLinux"|"DeviceTypeWeb">} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteClientBrandingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AddInId:string, ResourceId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteConnectClientAddIn(array $args): \AWS\Result { }

    /**
     * @param array{AddInId:string, ResourceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteConnectClientAddInAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AliasId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteConnectionAlias(array $args): \AWS\Result { }

    /**
     * @param array{AliasId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteConnectionAliasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteIpGroup(array $args): \AWS\Result { }

    /**
     * @param array{GroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteIpGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteTags(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BundleId?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteWorkspaceBundle(array $args = []): \AWS\Result { }

    /**
     * @param array{BundleId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteWorkspaceBundleAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ImageId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteWorkspaceImage(array $args): \AWS\Result { }

    /**
     * @param array{ImageId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteWorkspaceImageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkspaceId:string, Force?:bool} $args
     * @return \AWS\Result<array{Deployment?:array{Associations?:array<array{AssociatedResourceId?:string, AssociatedResourceType?:"APPLICATION", Created?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, State?:"PENDING_INSTALL"|"PENDING_INSTALL_DEPLOYMENT"|"PENDING_UNINSTALL"|"PENDING_UNINSTALL_DEPLOYMENT"|"INSTALLING"|"UNINSTALLING"|"ERROR"|"COMPLETED"|"REMOVED", StateReason?:array{ErrorCode?:"ValidationError.InsufficientDiskSpace"|"ValidationError.InsufficientMemory"|"ValidationError.UnsupportedOperatingSystem"|"DeploymentError.InternalServerError"|"DeploymentError.WorkspaceUnreachable", ErrorMessage?:string}, WorkspaceId?:string}>}}>
     */
    public function deployWorkspaceApplications(array $args): \AWS\Result { }

    /**
     * @param array{WorkspaceId:string, Force?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Deployment?:array{Associations?:array<array{AssociatedResourceId?:string, AssociatedResourceType?:"APPLICATION", Created?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, State?:"PENDING_INSTALL"|"PENDING_INSTALL_DEPLOYMENT"|"PENDING_UNINSTALL"|"PENDING_UNINSTALL_DEPLOYMENT"|"INSTALLING"|"UNINSTALLING"|"ERROR"|"COMPLETED"|"REMOVED", StateReason?:array{ErrorCode?:"ValidationError.InsufficientDiskSpace"|"ValidationError.InsufficientMemory"|"ValidationError.UnsupportedOperatingSystem"|"DeploymentError.InternalServerError"|"DeploymentError.WorkspaceUnreachable", ErrorMessage?:string}, WorkspaceId?:string}>}}>
     */
    public function deployWorkspaceApplicationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deregisterWorkspaceDirectory(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deregisterWorkspaceDirectoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{DedicatedTenancySupport?:"ENABLED"|"DISABLED", DedicatedTenancyManagementCidrRange?:string, DedicatedTenancyAccountType?:"SOURCE_ACCOUNT"|"TARGET_ACCOUNT"}>
     */
    public function describeAccount(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{DedicatedTenancySupport?:"ENABLED"|"DISABLED", DedicatedTenancyManagementCidrRange?:string, DedicatedTenancyAccountType?:"SOURCE_ACCOUNT"|"TARGET_ACCOUNT"}>
     */
    public function describeAccountAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string} $args
     * @return \AWS\Result<array{AccountModifications?:array<array{ModificationState?:"PENDING"|"COMPLETED"|"FAILED", DedicatedTenancySupport?:"ENABLED"|"DISABLED", DedicatedTenancyManagementCidrRange?:string, StartTime?:int|string|\DateTimeInterface, ErrorCode?:string, ErrorMessage?:string}>, NextToken?:string}>
     */
    public function describeAccountModifications(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountModifications?:array<array{ModificationState?:"PENDING"|"COMPLETED"|"FAILED", DedicatedTenancySupport?:"ENABLED"|"DISABLED", DedicatedTenancyManagementCidrRange?:string, StartTime?:int|string|\DateTimeInterface, ErrorCode?:string, ErrorMessage?:string}>, NextToken?:string}>
     */
    public function describeAccountModificationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ApplicationId:string, AssociatedResourceTypes:array<"WORKSPACE"|"BUNDLE"|"IMAGE">} $args
     * @return \AWS\Result<array{Associations?:array<array{ApplicationId?:string, AssociatedResourceId?:string, AssociatedResourceType?:"WORKSPACE"|"BUNDLE"|"IMAGE", Created?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, State?:"PENDING_INSTALL"|"PENDING_INSTALL_DEPLOYMENT"|"PENDING_UNINSTALL"|"PENDING_UNINSTALL_DEPLOYMENT"|"INSTALLING"|"UNINSTALLING"|"ERROR"|"COMPLETED"|"REMOVED", StateReason?:array{ErrorCode?:"ValidationError.InsufficientDiskSpace"|"ValidationError.InsufficientMemory"|"ValidationError.UnsupportedOperatingSystem"|"DeploymentError.InternalServerError"|"DeploymentError.WorkspaceUnreachable", ErrorMessage?:string}}>, NextToken?:string}>
     */
    public function describeApplicationAssociations(array $args): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ApplicationId:string, AssociatedResourceTypes:array<"WORKSPACE"|"BUNDLE"|"IMAGE">} $args
     * @return \GuzzleHttp\Promise\Promise<array{Associations?:array<array{ApplicationId?:string, AssociatedResourceId?:string, AssociatedResourceType?:"WORKSPACE"|"BUNDLE"|"IMAGE", Created?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, State?:"PENDING_INSTALL"|"PENDING_INSTALL_DEPLOYMENT"|"PENDING_UNINSTALL"|"PENDING_UNINSTALL_DEPLOYMENT"|"INSTALLING"|"UNINSTALLING"|"ERROR"|"COMPLETED"|"REMOVED", StateReason?:array{ErrorCode?:"ValidationError.InsufficientDiskSpace"|"ValidationError.InsufficientMemory"|"ValidationError.UnsupportedOperatingSystem"|"DeploymentError.InternalServerError"|"DeploymentError.WorkspaceUnreachable", ErrorMessage?:string}}>, NextToken?:string}>
     */
    public function describeApplicationAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationIds?:array<string>, ComputeTypeNames?:array<"VALUE"|"STANDARD"|"PERFORMANCE"|"POWER"|"GRAPHICS"|"POWERPRO"|"GENERALPURPOSE_4XLARGE"|"GENERALPURPOSE_8XLARGE"|"GRAPHICSPRO"|"GRAPHICS_G4DN"|"GRAPHICSPRO_G4DN">, LicenseType?:"LICENSED"|"UNLICENSED", OperatingSystemNames?:array<"AMAZON_LINUX_2"|"UBUNTU_18_04"|"UBUNTU_20_04"|"UBUNTU_22_04"|"UNKNOWN"|"WINDOWS_10"|"WINDOWS_11"|"WINDOWS_7"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"RHEL_8"|"ROCKY_8">, Owner?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Applications?:array<array{ApplicationId?:string, Created?:int|string|\DateTimeInterface, Description?:string, LicenseType?:"LICENSED"|"UNLICENSED", Name?:string, Owner?:string, State?:"PENDING"|"ERROR"|"AVAILABLE"|"UNINSTALL_ONLY", SupportedComputeTypeNames?:array<"VALUE"|"STANDARD"|"PERFORMANCE"|"POWER"|"GRAPHICS"|"POWERPRO"|"GENERALPURPOSE_4XLARGE"|"GENERALPURPOSE_8XLARGE"|"GRAPHICSPRO"|"GRAPHICS_G4DN"|"GRAPHICSPRO_G4DN">, SupportedOperatingSystemNames?:array<"AMAZON_LINUX_2"|"UBUNTU_18_04"|"UBUNTU_20_04"|"UBUNTU_22_04"|"UNKNOWN"|"WINDOWS_10"|"WINDOWS_11"|"WINDOWS_7"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"RHEL_8"|"ROCKY_8">}>, NextToken?:string}>
     */
    public function describeApplications(array $args = []): \AWS\Result { }

    /**
     * @param array{ApplicationIds?:array<string>, ComputeTypeNames?:array<"VALUE"|"STANDARD"|"PERFORMANCE"|"POWER"|"GRAPHICS"|"POWERPRO"|"GENERALPURPOSE_4XLARGE"|"GENERALPURPOSE_8XLARGE"|"GRAPHICSPRO"|"GRAPHICS_G4DN"|"GRAPHICSPRO_G4DN">, LicenseType?:"LICENSED"|"UNLICENSED", OperatingSystemNames?:array<"AMAZON_LINUX_2"|"UBUNTU_18_04"|"UBUNTU_20_04"|"UBUNTU_22_04"|"UNKNOWN"|"WINDOWS_10"|"WINDOWS_11"|"WINDOWS_7"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"RHEL_8"|"ROCKY_8">, Owner?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Applications?:array<array{ApplicationId?:string, Created?:int|string|\DateTimeInterface, Description?:string, LicenseType?:"LICENSED"|"UNLICENSED", Name?:string, Owner?:string, State?:"PENDING"|"ERROR"|"AVAILABLE"|"UNINSTALL_ONLY", SupportedComputeTypeNames?:array<"VALUE"|"STANDARD"|"PERFORMANCE"|"POWER"|"GRAPHICS"|"POWERPRO"|"GENERALPURPOSE_4XLARGE"|"GENERALPURPOSE_8XLARGE"|"GRAPHICSPRO"|"GRAPHICS_G4DN"|"GRAPHICSPRO_G4DN">, SupportedOperatingSystemNames?:array<"AMAZON_LINUX_2"|"UBUNTU_18_04"|"UBUNTU_20_04"|"UBUNTU_22_04"|"UNKNOWN"|"WINDOWS_10"|"WINDOWS_11"|"WINDOWS_7"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"RHEL_8"|"ROCKY_8">}>, NextToken?:string}>
     */
    public function describeApplicationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BundleId:string, AssociatedResourceTypes:array<"APPLICATION">} $args
     * @return \AWS\Result<array{Associations?:array<array{AssociatedResourceId?:string, AssociatedResourceType?:"APPLICATION", BundleId?:string, Created?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, State?:"PENDING_INSTALL"|"PENDING_INSTALL_DEPLOYMENT"|"PENDING_UNINSTALL"|"PENDING_UNINSTALL_DEPLOYMENT"|"INSTALLING"|"UNINSTALLING"|"ERROR"|"COMPLETED"|"REMOVED", StateReason?:array{ErrorCode?:"ValidationError.InsufficientDiskSpace"|"ValidationError.InsufficientMemory"|"ValidationError.UnsupportedOperatingSystem"|"DeploymentError.InternalServerError"|"DeploymentError.WorkspaceUnreachable", ErrorMessage?:string}}>}>
     */
    public function describeBundleAssociations(array $args): \AWS\Result { }

    /**
     * @param array{BundleId:string, AssociatedResourceTypes:array<"APPLICATION">} $args
     * @return \GuzzleHttp\Promise\Promise<array{Associations?:array<array{AssociatedResourceId?:string, AssociatedResourceType?:"APPLICATION", BundleId?:string, Created?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, State?:"PENDING_INSTALL"|"PENDING_INSTALL_DEPLOYMENT"|"PENDING_UNINSTALL"|"PENDING_UNINSTALL_DEPLOYMENT"|"INSTALLING"|"UNINSTALLING"|"ERROR"|"COMPLETED"|"REMOVED", StateReason?:array{ErrorCode?:"ValidationError.InsufficientDiskSpace"|"ValidationError.InsufficientMemory"|"ValidationError.UnsupportedOperatingSystem"|"DeploymentError.InternalServerError"|"DeploymentError.WorkspaceUnreachable", ErrorMessage?:string}}>}>
     */
    public function describeBundleAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string} $args
     * @return \AWS\Result<array{DeviceTypeWindows?:array{LogoUrl?:string, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}, DeviceTypeOsx?:array{LogoUrl?:string, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}, DeviceTypeAndroid?:array{LogoUrl?:string, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}, DeviceTypeIos?:array{LogoUrl?:string, Logo2xUrl?:string, Logo3xUrl?:string, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}, DeviceTypeLinux?:array{LogoUrl?:string, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}, DeviceTypeWeb?:array{LogoUrl?:string, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}}>
     */
    public function describeClientBranding(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DeviceTypeWindows?:array{LogoUrl?:string, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}, DeviceTypeOsx?:array{LogoUrl?:string, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}, DeviceTypeAndroid?:array{LogoUrl?:string, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}, DeviceTypeIos?:array{LogoUrl?:string, Logo2xUrl?:string, Logo3xUrl?:string, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}, DeviceTypeLinux?:array{LogoUrl?:string, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}, DeviceTypeWeb?:array{LogoUrl?:string, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}}>
     */
    public function describeClientBrandingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceIds:array<string>} $args
     * @return \AWS\Result<array{ClientPropertiesList?:array<array{ResourceId?:string, ClientProperties?:array{ReconnectEnabled?:"ENABLED"|"DISABLED", LogUploadEnabled?:"ENABLED"|"DISABLED"}}>}>
     */
    public function describeClientProperties(array $args): \AWS\Result { }

    /**
     * @param array{ResourceIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClientPropertiesList?:array<array{ResourceId?:string, ClientProperties?:array{ReconnectEnabled?:"ENABLED"|"DISABLED", LogUploadEnabled?:"ENABLED"|"DISABLED"}}>}>
     */
    public function describeClientPropertiesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{AddIns?:array<array{AddInId?:string, ResourceId?:string, Name?:string, URL?:string}>, NextToken?:string}>
     */
    public function describeConnectClientAddIns(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{AddIns?:array<array{AddInId?:string, ResourceId?:string, Name?:string, URL?:string}>, NextToken?:string}>
     */
    public function describeConnectClientAddInsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AliasId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{AliasId?:string, ConnectionAliasPermissions?:array<array{SharedAccountId:string, AllowAssociation:bool}>, NextToken?:string}>
     */
    public function describeConnectionAliasPermissions(array $args): \AWS\Result { }

    /**
     * @param array{AliasId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{AliasId?:string, ConnectionAliasPermissions?:array<array{SharedAccountId:string, AllowAssociation:bool}>, NextToken?:string}>
     */
    public function describeConnectionAliasPermissionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AliasIds?:array<string>, ResourceId?:string, Limit?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ConnectionAliases?:array<array{ConnectionString?:string, AliasId?:string, State?:"CREATING"|"CREATED"|"DELETING", OwnerAccountId?:string, Associations?:array<array{AssociationStatus?:"NOT_ASSOCIATED"|"ASSOCIATED_WITH_OWNER_ACCOUNT"|"ASSOCIATED_WITH_SHARED_ACCOUNT"|"PENDING_ASSOCIATION"|"PENDING_DISASSOCIATION", AssociatedAccountId?:string, ResourceId?:string, ConnectionIdentifier?:string}>}>, NextToken?:string}>
     */
    public function describeConnectionAliases(array $args = []): \AWS\Result { }

    /**
     * @param array{AliasIds?:array<string>, ResourceId?:string, Limit?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConnectionAliases?:array<array{ConnectionString?:string, AliasId?:string, State?:"CREATING"|"CREATED"|"DELETING", OwnerAccountId?:string, Associations?:array<array{AssociationStatus?:"NOT_ASSOCIATED"|"ASSOCIATED_WITH_OWNER_ACCOUNT"|"ASSOCIATED_WITH_SHARED_ACCOUNT"|"PENDING_ASSOCIATION"|"PENDING_DISASSOCIATION", AssociatedAccountId?:string, ResourceId?:string, ConnectionIdentifier?:string}>}>, NextToken?:string}>
     */
    public function describeConnectionAliasesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ImageId:string, AssociatedResourceTypes:array<"APPLICATION">} $args
     * @return \AWS\Result<array{Associations?:array<array{AssociatedResourceId?:string, AssociatedResourceType?:"APPLICATION", Created?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, ImageId?:string, State?:"PENDING_INSTALL"|"PENDING_INSTALL_DEPLOYMENT"|"PENDING_UNINSTALL"|"PENDING_UNINSTALL_DEPLOYMENT"|"INSTALLING"|"UNINSTALLING"|"ERROR"|"COMPLETED"|"REMOVED", StateReason?:array{ErrorCode?:"ValidationError.InsufficientDiskSpace"|"ValidationError.InsufficientMemory"|"ValidationError.UnsupportedOperatingSystem"|"DeploymentError.InternalServerError"|"DeploymentError.WorkspaceUnreachable", ErrorMessage?:string}}>}>
     */
    public function describeImageAssociations(array $args): \AWS\Result { }

    /**
     * @param array{ImageId:string, AssociatedResourceTypes:array<"APPLICATION">} $args
     * @return \GuzzleHttp\Promise\Promise<array{Associations?:array<array{AssociatedResourceId?:string, AssociatedResourceType?:"APPLICATION", Created?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, ImageId?:string, State?:"PENDING_INSTALL"|"PENDING_INSTALL_DEPLOYMENT"|"PENDING_UNINSTALL"|"PENDING_UNINSTALL_DEPLOYMENT"|"INSTALLING"|"UNINSTALLING"|"ERROR"|"COMPLETED"|"REMOVED", StateReason?:array{ErrorCode?:"ValidationError.InsufficientDiskSpace"|"ValidationError.InsufficientMemory"|"ValidationError.UnsupportedOperatingSystem"|"DeploymentError.InternalServerError"|"DeploymentError.WorkspaceUnreachable", ErrorMessage?:string}}>}>
     */
    public function describeImageAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupIds?:array<string>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Result?:array<array{groupId?:string, groupName?:string, groupDesc?:string, userRules?:array<array{ipRule?:string, ruleDesc?:string}>}>, NextToken?:string}>
     */
    public function describeIpGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{GroupIds?:array<string>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Result?:array<array{groupId?:string, groupName?:string, groupDesc?:string, userRules?:array<array{ipRule?:string, ruleDesc?:string}>}>, NextToken?:string}>
     */
    public function describeIpGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string} $args
     * @return \AWS\Result<array{TagList?:array<array{Key:string, Value?:string}>}>
     */
    public function describeTags(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TagList?:array<array{Key:string, Value?:string}>}>
     */
    public function describeTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkspaceId:string, AssociatedResourceTypes:array<"APPLICATION">} $args
     * @return \AWS\Result<array{Associations?:array<array{AssociatedResourceId?:string, AssociatedResourceType?:"APPLICATION", Created?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, State?:"PENDING_INSTALL"|"PENDING_INSTALL_DEPLOYMENT"|"PENDING_UNINSTALL"|"PENDING_UNINSTALL_DEPLOYMENT"|"INSTALLING"|"UNINSTALLING"|"ERROR"|"COMPLETED"|"REMOVED", StateReason?:array{ErrorCode?:"ValidationError.InsufficientDiskSpace"|"ValidationError.InsufficientMemory"|"ValidationError.UnsupportedOperatingSystem"|"DeploymentError.InternalServerError"|"DeploymentError.WorkspaceUnreachable", ErrorMessage?:string}, WorkspaceId?:string}>}>
     */
    public function describeWorkspaceAssociations(array $args): \AWS\Result { }

    /**
     * @param array{WorkspaceId:string, AssociatedResourceTypes:array<"APPLICATION">} $args
     * @return \GuzzleHttp\Promise\Promise<array{Associations?:array<array{AssociatedResourceId?:string, AssociatedResourceType?:"APPLICATION", Created?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, State?:"PENDING_INSTALL"|"PENDING_INSTALL_DEPLOYMENT"|"PENDING_UNINSTALL"|"PENDING_UNINSTALL_DEPLOYMENT"|"INSTALLING"|"UNINSTALLING"|"ERROR"|"COMPLETED"|"REMOVED", StateReason?:array{ErrorCode?:"ValidationError.InsufficientDiskSpace"|"ValidationError.InsufficientMemory"|"ValidationError.UnsupportedOperatingSystem"|"DeploymentError.InternalServerError"|"DeploymentError.WorkspaceUnreachable", ErrorMessage?:string}, WorkspaceId?:string}>}>
     */
    public function describeWorkspaceAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BundleIds?:array<string>, Owner?:string, NextToken?:string} $args
     * @return \AWS\Result<array{Bundles?:array<array{BundleId?:string, Name?:string, Owner?:string, Description?:string, ImageId?:string, RootStorage?:array{Capacity:string}, UserStorage?:array{Capacity:string}, ComputeType?:array{Name?:"VALUE"|"STANDARD"|"PERFORMANCE"|"POWER"|"GRAPHICS"|"POWERPRO"|"GENERALPURPOSE_4XLARGE"|"GENERALPURPOSE_8XLARGE"|"GRAPHICSPRO"|"GRAPHICS_G4DN"|"GRAPHICSPRO_G4DN"}, LastUpdatedTime?:int|string|\DateTimeInterface, CreationTime?:int|string|\DateTimeInterface, State?:"AVAILABLE"|"PENDING"|"ERROR", BundleType?:"REGULAR"|"STANDBY"}>, NextToken?:string}>
     */
    public function describeWorkspaceBundles(array $args = []): \AWS\Result { }

    /**
     * @param array{BundleIds?:array<string>, Owner?:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Bundles?:array<array{BundleId?:string, Name?:string, Owner?:string, Description?:string, ImageId?:string, RootStorage?:array{Capacity:string}, UserStorage?:array{Capacity:string}, ComputeType?:array{Name?:"VALUE"|"STANDARD"|"PERFORMANCE"|"POWER"|"GRAPHICS"|"POWERPRO"|"GENERALPURPOSE_4XLARGE"|"GENERALPURPOSE_8XLARGE"|"GRAPHICSPRO"|"GRAPHICS_G4DN"|"GRAPHICSPRO_G4DN"}, LastUpdatedTime?:int|string|\DateTimeInterface, CreationTime?:int|string|\DateTimeInterface, State?:"AVAILABLE"|"PENDING"|"ERROR", BundleType?:"REGULAR"|"STANDBY"}>, NextToken?:string}>
     */
    public function describeWorkspaceBundlesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryIds?:array<string>, WorkspaceDirectoryNames?:array<string>, Limit?:int, NextToken?:string, Filters?:array<array{Name:"USER_IDENTITY_TYPE"|"WORKSPACE_TYPE", Values:array<string>}>} $args
     * @return \AWS\Result<array{Directories?:array<array{DirectoryId?:string, Alias?:string, DirectoryName?:string, RegistrationCode?:string, SubnetIds?:array<string>, DnsIpAddresses?:array<string>, CustomerUserName?:string, IamRoleId?:string, DirectoryType?:"SIMPLE_AD"|"AD_CONNECTOR"|"CUSTOMER_MANAGED"|"AWS_IAM_IDENTITY_CENTER", WorkspaceSecurityGroupId?:string, State?:"REGISTERING"|"REGISTERED"|"DEREGISTERING"|"DEREGISTERED"|"ERROR", WorkspaceCreationProperties?:array{EnableWorkDocs?:bool, EnableInternetAccess?:bool, DefaultOu?:string, CustomSecurityGroupId?:string, UserEnabledAsLocalAdministrator?:bool, EnableMaintenanceMode?:bool, InstanceIamRoleArn?:string}, ipGroupIds?:array<string>, WorkspaceAccessProperties?:array{DeviceTypeWindows?:"ALLOW"|"DENY", DeviceTypeOsx?:"ALLOW"|"DENY", DeviceTypeWeb?:"ALLOW"|"DENY", DeviceTypeIos?:"ALLOW"|"DENY", DeviceTypeAndroid?:"ALLOW"|"DENY", DeviceTypeChromeOs?:"ALLOW"|"DENY", DeviceTypeZeroClient?:"ALLOW"|"DENY", DeviceTypeLinux?:"ALLOW"|"DENY"}, Tenancy?:"DEDICATED"|"SHARED", SelfservicePermissions?:array{RestartWorkspace?:"ENABLED"|"DISABLED", IncreaseVolumeSize?:"ENABLED"|"DISABLED", ChangeComputeType?:"ENABLED"|"DISABLED", SwitchRunningMode?:"ENABLED"|"DISABLED", RebuildWorkspace?:"ENABLED"|"DISABLED"}, SamlProperties?:array{Status?:"DISABLED"|"ENABLED"|"ENABLED_WITH_DIRECTORY_LOGIN_FALLBACK", UserAccessUrl?:string, RelayStateParameterName?:string}, CertificateBasedAuthProperties?:array{Status?:"DISABLED"|"ENABLED", CertificateAuthorityArn?:string}, MicrosoftEntraConfig?:array{TenantId?:string, ApplicationConfigSecretArn?:string}, WorkspaceDirectoryName?:string, WorkspaceDirectoryDescription?:string, UserIdentityType?:"CUSTOMER_MANAGED"|"AWS_DIRECTORY_SERVICE"|"AWS_IAM_IDENTITY_CENTER", WorkspaceType?:"PERSONAL"|"POOLS", IDCConfig?:array{InstanceArn?:string, ApplicationArn?:string}, ActiveDirectoryConfig?:array{DomainName:string, ServiceAccountSecretArn:string}, StreamingProperties?:array{StreamingExperiencePreferredProtocol?:"TCP"|"UDP", UserSettings?:array<array{Action:"CLIPBOARD_COPY_FROM_LOCAL_DEVICE"|"CLIPBOARD_COPY_TO_LOCAL_DEVICE"|"PRINTING_TO_LOCAL_DEVICE"|"SMART_CARD", Permission:"ENABLED"|"DISABLED", MaximumLength?:int}>, StorageConnectors?:array<array{ConnectorType:"HOME_FOLDER", Status:"ENABLED"|"DISABLED"}>, GlobalAccelerator?:array{Mode:"ENABLED_AUTO"|"DISABLED", PreferredProtocol?:"TCP"|"NONE"}}, ErrorMessage?:string}>, NextToken?:string}>
     */
    public function describeWorkspaceDirectories(array $args = []): \AWS\Result { }

    /**
     * @param array{DirectoryIds?:array<string>, WorkspaceDirectoryNames?:array<string>, Limit?:int, NextToken?:string, Filters?:array<array{Name:"USER_IDENTITY_TYPE"|"WORKSPACE_TYPE", Values:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Directories?:array<array{DirectoryId?:string, Alias?:string, DirectoryName?:string, RegistrationCode?:string, SubnetIds?:array<string>, DnsIpAddresses?:array<string>, CustomerUserName?:string, IamRoleId?:string, DirectoryType?:"SIMPLE_AD"|"AD_CONNECTOR"|"CUSTOMER_MANAGED"|"AWS_IAM_IDENTITY_CENTER", WorkspaceSecurityGroupId?:string, State?:"REGISTERING"|"REGISTERED"|"DEREGISTERING"|"DEREGISTERED"|"ERROR", WorkspaceCreationProperties?:array{EnableWorkDocs?:bool, EnableInternetAccess?:bool, DefaultOu?:string, CustomSecurityGroupId?:string, UserEnabledAsLocalAdministrator?:bool, EnableMaintenanceMode?:bool, InstanceIamRoleArn?:string}, ipGroupIds?:array<string>, WorkspaceAccessProperties?:array{DeviceTypeWindows?:"ALLOW"|"DENY", DeviceTypeOsx?:"ALLOW"|"DENY", DeviceTypeWeb?:"ALLOW"|"DENY", DeviceTypeIos?:"ALLOW"|"DENY", DeviceTypeAndroid?:"ALLOW"|"DENY", DeviceTypeChromeOs?:"ALLOW"|"DENY", DeviceTypeZeroClient?:"ALLOW"|"DENY", DeviceTypeLinux?:"ALLOW"|"DENY"}, Tenancy?:"DEDICATED"|"SHARED", SelfservicePermissions?:array{RestartWorkspace?:"ENABLED"|"DISABLED", IncreaseVolumeSize?:"ENABLED"|"DISABLED", ChangeComputeType?:"ENABLED"|"DISABLED", SwitchRunningMode?:"ENABLED"|"DISABLED", RebuildWorkspace?:"ENABLED"|"DISABLED"}, SamlProperties?:array{Status?:"DISABLED"|"ENABLED"|"ENABLED_WITH_DIRECTORY_LOGIN_FALLBACK", UserAccessUrl?:string, RelayStateParameterName?:string}, CertificateBasedAuthProperties?:array{Status?:"DISABLED"|"ENABLED", CertificateAuthorityArn?:string}, MicrosoftEntraConfig?:array{TenantId?:string, ApplicationConfigSecretArn?:string}, WorkspaceDirectoryName?:string, WorkspaceDirectoryDescription?:string, UserIdentityType?:"CUSTOMER_MANAGED"|"AWS_DIRECTORY_SERVICE"|"AWS_IAM_IDENTITY_CENTER", WorkspaceType?:"PERSONAL"|"POOLS", IDCConfig?:array{InstanceArn?:string, ApplicationArn?:string}, ActiveDirectoryConfig?:array{DomainName:string, ServiceAccountSecretArn:string}, StreamingProperties?:array{StreamingExperiencePreferredProtocol?:"TCP"|"UDP", UserSettings?:array<array{Action:"CLIPBOARD_COPY_FROM_LOCAL_DEVICE"|"CLIPBOARD_COPY_TO_LOCAL_DEVICE"|"PRINTING_TO_LOCAL_DEVICE"|"SMART_CARD", Permission:"ENABLED"|"DISABLED", MaximumLength?:int}>, StorageConnectors?:array<array{ConnectorType:"HOME_FOLDER", Status:"ENABLED"|"DISABLED"}>, GlobalAccelerator?:array{Mode:"ENABLED_AUTO"|"DISABLED", PreferredProtocol?:"TCP"|"NONE"}}, ErrorMessage?:string}>, NextToken?:string}>
     */
    public function describeWorkspaceDirectoriesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ImageId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ImageId?:string, ImagePermissions?:array<array{SharedAccountId?:string}>, NextToken?:string}>
     */
    public function describeWorkspaceImagePermissions(array $args): \AWS\Result { }

    /**
     * @param array{ImageId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ImageId?:string, ImagePermissions?:array<array{SharedAccountId?:string}>, NextToken?:string}>
     */
    public function describeWorkspaceImagePermissionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ImageIds?:array<string>, ImageType?:"OWNED"|"SHARED", NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Images?:array<array{ImageId?:string, Name?:string, Description?:string, OperatingSystem?:array{Type?:"WINDOWS"|"LINUX"}, State?:"AVAILABLE"|"PENDING"|"ERROR", RequiredTenancy?:"DEFAULT"|"DEDICATED", ErrorCode?:string, ErrorMessage?:string, Created?:int|string|\DateTimeInterface, OwnerAccountId?:string, Updates?:array{UpdateAvailable?:bool, Description?:string}, ErrorDetails?:array<array{ErrorCode?:"OutdatedPowershellVersion"|"OfficeInstalled"|"PCoIPAgentInstalled"|"WindowsUpdatesEnabled"|"AutoMountDisabled"|"WorkspacesBYOLAccountNotFound"|"WorkspacesBYOLAccountDisabled"|"DHCPDisabled"|"DiskFreeSpace"|"AdditionalDrivesAttached"|"OSNotSupported"|"DomainJoined"|"AzureDomainJoined"|"FirewallEnabled"|"VMWareToolsInstalled"|"DiskSizeExceeded"|"IncompatiblePartitioning"|"PendingReboot"|"AutoLogonEnabled"|"RealTimeUniversalDisabled"|"MultipleBootPartition"|"Requires64BitOS"|"ZeroRearmCount"|"InPlaceUpgrade"|"AntiVirusInstalled"|"UEFINotSupported"|"UnknownError"|"AppXPackagesInstalled"|"ReservedStorageInUse"|"AdditionalDrivesPresent"|"WindowsUpdatesRequired"|"SysPrepFileMissing"|"UserProfileMissing"|"InsufficientDiskSpace"|"EnvironmentVariablesPathMissingEntries"|"DomainAccountServicesFound"|"InvalidIp"|"RemoteDesktopServicesDisabled"|"WindowsModulesInstallerDisabled"|"AmazonSsmAgentEnabled"|"UnsupportedSecurityProtocol"|"MultipleUserProfiles"|"StagedAppxPackage"|"UnsupportedOsUpgrade"|"InsufficientRearmCount", ErrorMessage?:string}>}>, NextToken?:string}>
     */
    public function describeWorkspaceImages(array $args = []): \AWS\Result { }

    /**
     * @param array{ImageIds?:array<string>, ImageType?:"OWNED"|"SHARED", NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Images?:array<array{ImageId?:string, Name?:string, Description?:string, OperatingSystem?:array{Type?:"WINDOWS"|"LINUX"}, State?:"AVAILABLE"|"PENDING"|"ERROR", RequiredTenancy?:"DEFAULT"|"DEDICATED", ErrorCode?:string, ErrorMessage?:string, Created?:int|string|\DateTimeInterface, OwnerAccountId?:string, Updates?:array{UpdateAvailable?:bool, Description?:string}, ErrorDetails?:array<array{ErrorCode?:"OutdatedPowershellVersion"|"OfficeInstalled"|"PCoIPAgentInstalled"|"WindowsUpdatesEnabled"|"AutoMountDisabled"|"WorkspacesBYOLAccountNotFound"|"WorkspacesBYOLAccountDisabled"|"DHCPDisabled"|"DiskFreeSpace"|"AdditionalDrivesAttached"|"OSNotSupported"|"DomainJoined"|"AzureDomainJoined"|"FirewallEnabled"|"VMWareToolsInstalled"|"DiskSizeExceeded"|"IncompatiblePartitioning"|"PendingReboot"|"AutoLogonEnabled"|"RealTimeUniversalDisabled"|"MultipleBootPartition"|"Requires64BitOS"|"ZeroRearmCount"|"InPlaceUpgrade"|"AntiVirusInstalled"|"UEFINotSupported"|"UnknownError"|"AppXPackagesInstalled"|"ReservedStorageInUse"|"AdditionalDrivesPresent"|"WindowsUpdatesRequired"|"SysPrepFileMissing"|"UserProfileMissing"|"InsufficientDiskSpace"|"EnvironmentVariablesPathMissingEntries"|"DomainAccountServicesFound"|"InvalidIp"|"RemoteDesktopServicesDisabled"|"WindowsModulesInstallerDisabled"|"AmazonSsmAgentEnabled"|"UnsupportedSecurityProtocol"|"MultipleUserProfiles"|"StagedAppxPackage"|"UnsupportedOsUpgrade"|"InsufficientRearmCount", ErrorMessage?:string}>}>, NextToken?:string}>
     */
    public function describeWorkspaceImagesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkspaceId:string} $args
     * @return \AWS\Result<array{RebuildSnapshots?:array<array{SnapshotTime?:int|string|\DateTimeInterface}>, RestoreSnapshots?:array<array{SnapshotTime?:int|string|\DateTimeInterface}>}>
     */
    public function describeWorkspaceSnapshots(array $args): \AWS\Result { }

    /**
     * @param array{WorkspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RebuildSnapshots?:array<array{SnapshotTime?:int|string|\DateTimeInterface}>, RestoreSnapshots?:array<array{SnapshotTime?:int|string|\DateTimeInterface}>}>
     */
    public function describeWorkspaceSnapshotsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkspaceIds?:array<string>, DirectoryId?:string, UserName?:string, BundleId?:string, Limit?:int, NextToken?:string, WorkspaceName?:string} $args
     * @return \AWS\Result<array{Workspaces?:array<array{WorkspaceId?:string, DirectoryId?:string, UserName?:string, IpAddress?:string, State?:"PENDING"|"AVAILABLE"|"IMPAIRED"|"UNHEALTHY"|"REBOOTING"|"STARTING"|"REBUILDING"|"RESTORING"|"MAINTENANCE"|"ADMIN_MAINTENANCE"|"TERMINATING"|"TERMINATED"|"SUSPENDED"|"UPDATING"|"STOPPING"|"STOPPED"|"ERROR", BundleId?:string, SubnetId?:string, ErrorMessage?:string, ErrorCode?:string, ComputerName?:string, VolumeEncryptionKey?:string, UserVolumeEncryptionEnabled?:bool, RootVolumeEncryptionEnabled?:bool, WorkspaceName?:string, WorkspaceProperties?:array{RunningMode?:"AUTO_STOP"|"ALWAYS_ON"|"MANUAL", RunningModeAutoStopTimeoutInMinutes?:int, RootVolumeSizeGib?:int, UserVolumeSizeGib?:int, ComputeTypeName?:"VALUE"|"STANDARD"|"PERFORMANCE"|"POWER"|"GRAPHICS"|"POWERPRO"|"GENERALPURPOSE_4XLARGE"|"GENERALPURPOSE_8XLARGE"|"GRAPHICSPRO"|"GRAPHICS_G4DN"|"GRAPHICSPRO_G4DN", Protocols?:array<"PCOIP"|"WSP">, OperatingSystemName?:"AMAZON_LINUX_2"|"UBUNTU_18_04"|"UBUNTU_20_04"|"UBUNTU_22_04"|"UNKNOWN"|"WINDOWS_10"|"WINDOWS_11"|"WINDOWS_7"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"RHEL_8"|"ROCKY_8", GlobalAccelerator?:array{Mode:"ENABLED_AUTO"|"DISABLED"|"INHERITED", PreferredProtocol?:"TCP"|"NONE"|"INHERITED"}}, ModificationStates?:array<array{Resource?:"ROOT_VOLUME"|"USER_VOLUME"|"COMPUTE_TYPE", State?:"UPDATE_INITIATED"|"UPDATE_IN_PROGRESS"}>, RelatedWorkspaces?:array<array{WorkspaceId?:string, Region?:string, State?:"PENDING"|"AVAILABLE"|"IMPAIRED"|"UNHEALTHY"|"REBOOTING"|"STARTING"|"REBUILDING"|"RESTORING"|"MAINTENANCE"|"ADMIN_MAINTENANCE"|"TERMINATING"|"TERMINATED"|"SUSPENDED"|"UPDATING"|"STOPPING"|"STOPPED"|"ERROR", Type?:"PRIMARY"|"STANDBY"}>, DataReplicationSettings?:array{DataReplication?:"NO_REPLICATION"|"PRIMARY_AS_SOURCE", RecoverySnapshotTime?:int|string|\DateTimeInterface}, StandbyWorkspacesProperties?:array<array{StandbyWorkspaceId?:string, DataReplication?:"NO_REPLICATION"|"PRIMARY_AS_SOURCE", RecoverySnapshotTime?:int|string|\DateTimeInterface}>}>, NextToken?:string}>
     */
    public function describeWorkspaces(array $args = []): \AWS\Result { }

    /**
     * @param array{WorkspaceIds?:array<string>, DirectoryId?:string, UserName?:string, BundleId?:string, Limit?:int, NextToken?:string, WorkspaceName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Workspaces?:array<array{WorkspaceId?:string, DirectoryId?:string, UserName?:string, IpAddress?:string, State?:"PENDING"|"AVAILABLE"|"IMPAIRED"|"UNHEALTHY"|"REBOOTING"|"STARTING"|"REBUILDING"|"RESTORING"|"MAINTENANCE"|"ADMIN_MAINTENANCE"|"TERMINATING"|"TERMINATED"|"SUSPENDED"|"UPDATING"|"STOPPING"|"STOPPED"|"ERROR", BundleId?:string, SubnetId?:string, ErrorMessage?:string, ErrorCode?:string, ComputerName?:string, VolumeEncryptionKey?:string, UserVolumeEncryptionEnabled?:bool, RootVolumeEncryptionEnabled?:bool, WorkspaceName?:string, WorkspaceProperties?:array{RunningMode?:"AUTO_STOP"|"ALWAYS_ON"|"MANUAL", RunningModeAutoStopTimeoutInMinutes?:int, RootVolumeSizeGib?:int, UserVolumeSizeGib?:int, ComputeTypeName?:"VALUE"|"STANDARD"|"PERFORMANCE"|"POWER"|"GRAPHICS"|"POWERPRO"|"GENERALPURPOSE_4XLARGE"|"GENERALPURPOSE_8XLARGE"|"GRAPHICSPRO"|"GRAPHICS_G4DN"|"GRAPHICSPRO_G4DN", Protocols?:array<"PCOIP"|"WSP">, OperatingSystemName?:"AMAZON_LINUX_2"|"UBUNTU_18_04"|"UBUNTU_20_04"|"UBUNTU_22_04"|"UNKNOWN"|"WINDOWS_10"|"WINDOWS_11"|"WINDOWS_7"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"RHEL_8"|"ROCKY_8", GlobalAccelerator?:array{Mode:"ENABLED_AUTO"|"DISABLED"|"INHERITED", PreferredProtocol?:"TCP"|"NONE"|"INHERITED"}}, ModificationStates?:array<array{Resource?:"ROOT_VOLUME"|"USER_VOLUME"|"COMPUTE_TYPE", State?:"UPDATE_INITIATED"|"UPDATE_IN_PROGRESS"}>, RelatedWorkspaces?:array<array{WorkspaceId?:string, Region?:string, State?:"PENDING"|"AVAILABLE"|"IMPAIRED"|"UNHEALTHY"|"REBOOTING"|"STARTING"|"REBUILDING"|"RESTORING"|"MAINTENANCE"|"ADMIN_MAINTENANCE"|"TERMINATING"|"TERMINATED"|"SUSPENDED"|"UPDATING"|"STOPPING"|"STOPPED"|"ERROR", Type?:"PRIMARY"|"STANDBY"}>, DataReplicationSettings?:array{DataReplication?:"NO_REPLICATION"|"PRIMARY_AS_SOURCE", RecoverySnapshotTime?:int|string|\DateTimeInterface}, StandbyWorkspacesProperties?:array<array{StandbyWorkspaceId?:string, DataReplication?:"NO_REPLICATION"|"PRIMARY_AS_SOURCE", RecoverySnapshotTime?:int|string|\DateTimeInterface}>}>, NextToken?:string}>
     */
    public function describeWorkspacesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkspaceIds?:array<string>, NextToken?:string} $args
     * @return \AWS\Result<array{WorkspacesConnectionStatus?:array<array{WorkspaceId?:string, ConnectionState?:"CONNECTED"|"DISCONNECTED"|"UNKNOWN", ConnectionStateCheckTimestamp?:int|string|\DateTimeInterface, LastKnownUserConnectionTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeWorkspacesConnectionStatus(array $args = []): \AWS\Result { }

    /**
     * @param array{WorkspaceIds?:array<string>, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WorkspacesConnectionStatus?:array<array{WorkspaceId?:string, ConnectionState?:"CONNECTED"|"DISCONNECTED"|"UNKNOWN", ConnectionStateCheckTimestamp?:int|string|\DateTimeInterface, LastKnownUserConnectionTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeWorkspacesConnectionStatusAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PoolId:string, UserId?:string, Limit?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Sessions?:array<array{AuthenticationType?:"SAML", ConnectionState?:"CONNECTED"|"NOT_CONNECTED", SessionId:string, InstanceId?:string, PoolId:string, ExpirationTime?:int|string|\DateTimeInterface, NetworkAccessConfiguration?:array{EniPrivateIpAddress?:string, EniId?:string}, StartTime?:int|string|\DateTimeInterface, UserId:string}>, NextToken?:string}>
     */
    public function describeWorkspacesPoolSessions(array $args): \AWS\Result { }

    /**
     * @param array{PoolId:string, UserId?:string, Limit?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Sessions?:array<array{AuthenticationType?:"SAML", ConnectionState?:"CONNECTED"|"NOT_CONNECTED", SessionId:string, InstanceId?:string, PoolId:string, ExpirationTime?:int|string|\DateTimeInterface, NetworkAccessConfiguration?:array{EniPrivateIpAddress?:string, EniId?:string}, StartTime?:int|string|\DateTimeInterface, UserId:string}>, NextToken?:string}>
     */
    public function describeWorkspacesPoolSessionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PoolIds?:array<string>, Filters?:array<array{Name:"PoolName", Values:array<string>, Operator:"EQUALS"|"NOTEQUALS"|"CONTAINS"|"NOTCONTAINS"}>, Limit?:int, NextToken?:string} $args
     * @return \AWS\Result<array{WorkspacesPools?:array<array{PoolId:string, PoolArn:string, CapacityStatus:array{AvailableUserSessions:int, DesiredUserSessions:int, ActualUserSessions:int, ActiveUserSessions:int}, PoolName:string, Description?:string, State:"CREATING"|"DELETING"|"RUNNING"|"STARTING"|"STOPPED"|"STOPPING"|"UPDATING", CreatedAt:int|string|\DateTimeInterface, BundleId:string, DirectoryId:string, Errors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_IS_MISSING"|"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"WORKSPACES_POOL_STOPPED"|"WORKSPACES_POOL_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR"|"DOMAIN_JOIN_ERROR_SECRET_ACTION_PERMISSION_IS_MISSING"|"DOMAIN_JOIN_ERROR_SECRET_DECRYPTION_FAILURE"|"DOMAIN_JOIN_ERROR_SECRET_STATE_INVALID"|"DOMAIN_JOIN_ERROR_SECRET_NOT_FOUND"|"DOMAIN_JOIN_ERROR_SECRET_VALUE_KEY_NOT_FOUND"|"DOMAIN_JOIN_ERROR_SECRET_INVALID"|"BUNDLE_NOT_FOUND"|"DIRECTORY_NOT_FOUND"|"INSUFFICIENT_PERMISSIONS_ERROR"|"DEFAULT_OU_IS_MISSING", ErrorMessage?:string}>, ApplicationSettings?:array{Status:"DISABLED"|"ENABLED", SettingsGroup?:string, S3BucketName?:string}, TimeoutSettings?:array{DisconnectTimeoutInSeconds?:int, IdleDisconnectTimeoutInSeconds?:int, MaxUserDurationInSeconds?:int}}>, NextToken?:string}>
     */
    public function describeWorkspacesPools(array $args = []): \AWS\Result { }

    /**
     * @param array{PoolIds?:array<string>, Filters?:array<array{Name:"PoolName", Values:array<string>, Operator:"EQUALS"|"NOTEQUALS"|"CONTAINS"|"NOTCONTAINS"}>, Limit?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{WorkspacesPools?:array<array{PoolId:string, PoolArn:string, CapacityStatus:array{AvailableUserSessions:int, DesiredUserSessions:int, ActualUserSessions:int, ActiveUserSessions:int}, PoolName:string, Description?:string, State:"CREATING"|"DELETING"|"RUNNING"|"STARTING"|"STOPPED"|"STOPPING"|"UPDATING", CreatedAt:int|string|\DateTimeInterface, BundleId:string, DirectoryId:string, Errors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_IS_MISSING"|"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"WORKSPACES_POOL_STOPPED"|"WORKSPACES_POOL_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR"|"DOMAIN_JOIN_ERROR_SECRET_ACTION_PERMISSION_IS_MISSING"|"DOMAIN_JOIN_ERROR_SECRET_DECRYPTION_FAILURE"|"DOMAIN_JOIN_ERROR_SECRET_STATE_INVALID"|"DOMAIN_JOIN_ERROR_SECRET_NOT_FOUND"|"DOMAIN_JOIN_ERROR_SECRET_VALUE_KEY_NOT_FOUND"|"DOMAIN_JOIN_ERROR_SECRET_INVALID"|"BUNDLE_NOT_FOUND"|"DIRECTORY_NOT_FOUND"|"INSUFFICIENT_PERMISSIONS_ERROR"|"DEFAULT_OU_IS_MISSING", ErrorMessage?:string}>, ApplicationSettings?:array{Status:"DISABLED"|"ENABLED", SettingsGroup?:string, S3BucketName?:string}, TimeoutSettings?:array{DisconnectTimeoutInSeconds?:int, IdleDisconnectTimeoutInSeconds?:int, MaxUserDurationInSeconds?:int}}>, NextToken?:string}>
     */
    public function describeWorkspacesPoolsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AliasId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateConnectionAlias(array $args): \AWS\Result { }

    /**
     * @param array{AliasId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateConnectionAliasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId:string, GroupIds:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateIpGroups(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId:string, GroupIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateIpGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkspaceId:string, ApplicationId:string} $args
     * @return \AWS\Result<array{Association?:array{AssociatedResourceId?:string, AssociatedResourceType?:"APPLICATION", Created?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, State?:"PENDING_INSTALL"|"PENDING_INSTALL_DEPLOYMENT"|"PENDING_UNINSTALL"|"PENDING_UNINSTALL_DEPLOYMENT"|"INSTALLING"|"UNINSTALLING"|"ERROR"|"COMPLETED"|"REMOVED", StateReason?:array{ErrorCode?:"ValidationError.InsufficientDiskSpace"|"ValidationError.InsufficientMemory"|"ValidationError.UnsupportedOperatingSystem"|"DeploymentError.InternalServerError"|"DeploymentError.WorkspaceUnreachable", ErrorMessage?:string}, WorkspaceId?:string}}>
     */
    public function disassociateWorkspaceApplication(array $args): \AWS\Result { }

    /**
     * @param array{WorkspaceId:string, ApplicationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Association?:array{AssociatedResourceId?:string, AssociatedResourceType?:"APPLICATION", Created?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface, State?:"PENDING_INSTALL"|"PENDING_INSTALL_DEPLOYMENT"|"PENDING_UNINSTALL"|"PENDING_UNINSTALL_DEPLOYMENT"|"INSTALLING"|"UNINSTALLING"|"ERROR"|"COMPLETED"|"REMOVED", StateReason?:array{ErrorCode?:"ValidationError.InsufficientDiskSpace"|"ValidationError.InsufficientMemory"|"ValidationError.UnsupportedOperatingSystem"|"DeploymentError.InternalServerError"|"DeploymentError.WorkspaceUnreachable", ErrorMessage?:string}, WorkspaceId?:string}}>
     */
    public function disassociateWorkspaceApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LinkId?:string, LinkedAccountId?:string} $args
     * @return \AWS\Result<array{AccountLink?:array{AccountLinkId?:string, AccountLinkStatus?:"LINKED"|"LINKING_FAILED"|"LINK_NOT_FOUND"|"PENDING_ACCEPTANCE_BY_TARGET_ACCOUNT"|"REJECTED", SourceAccountId?:string, TargetAccountId?:string}}>
     */
    public function getAccountLink(array $args = []): \AWS\Result { }

    /**
     * @param array{LinkId?:string, LinkedAccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountLink?:array{AccountLinkId?:string, AccountLinkStatus?:"LINKED"|"LINKING_FAILED"|"LINK_NOT_FOUND"|"PENDING_ACCEPTANCE_BY_TARGET_ACCOUNT"|"REJECTED", SourceAccountId?:string, TargetAccountId?:string}}>
     */
    public function getAccountLinkAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, DeviceTypeWindows?:array{Logo?:string|resource|\Psr\Http\Message\StreamInterface, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}, DeviceTypeOsx?:array{Logo?:string|resource|\Psr\Http\Message\StreamInterface, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}, DeviceTypeAndroid?:array{Logo?:string|resource|\Psr\Http\Message\StreamInterface, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}, DeviceTypeIos?:array{Logo?:string|resource|\Psr\Http\Message\StreamInterface, Logo2x?:string|resource|\Psr\Http\Message\StreamInterface, Logo3x?:string|resource|\Psr\Http\Message\StreamInterface, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}, DeviceTypeLinux?:array{Logo?:string|resource|\Psr\Http\Message\StreamInterface, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}, DeviceTypeWeb?:array{Logo?:string|resource|\Psr\Http\Message\StreamInterface, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}} $args
     * @return \AWS\Result<array{DeviceTypeWindows?:array{LogoUrl?:string, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}, DeviceTypeOsx?:array{LogoUrl?:string, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}, DeviceTypeAndroid?:array{LogoUrl?:string, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}, DeviceTypeIos?:array{LogoUrl?:string, Logo2xUrl?:string, Logo3xUrl?:string, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}, DeviceTypeLinux?:array{LogoUrl?:string, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}, DeviceTypeWeb?:array{LogoUrl?:string, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}}>
     */
    public function importClientBranding(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, DeviceTypeWindows?:array{Logo?:string|resource|\Psr\Http\Message\StreamInterface, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}, DeviceTypeOsx?:array{Logo?:string|resource|\Psr\Http\Message\StreamInterface, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}, DeviceTypeAndroid?:array{Logo?:string|resource|\Psr\Http\Message\StreamInterface, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}, DeviceTypeIos?:array{Logo?:string|resource|\Psr\Http\Message\StreamInterface, Logo2x?:string|resource|\Psr\Http\Message\StreamInterface, Logo3x?:string|resource|\Psr\Http\Message\StreamInterface, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}, DeviceTypeLinux?:array{Logo?:string|resource|\Psr\Http\Message\StreamInterface, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}, DeviceTypeWeb?:array{Logo?:string|resource|\Psr\Http\Message\StreamInterface, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{DeviceTypeWindows?:array{LogoUrl?:string, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}, DeviceTypeOsx?:array{LogoUrl?:string, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}, DeviceTypeAndroid?:array{LogoUrl?:string, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}, DeviceTypeIos?:array{LogoUrl?:string, Logo2xUrl?:string, Logo3xUrl?:string, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}, DeviceTypeLinux?:array{LogoUrl?:string, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}, DeviceTypeWeb?:array{LogoUrl?:string, SupportEmail?:string, SupportLink?:string, ForgotPasswordLink?:string, LoginMessage?:array<string, string>}}>
     */
    public function importClientBrandingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Ec2ImageId:string, IngestionProcess:"BYOL_REGULAR"|"BYOL_GRAPHICS"|"BYOL_GRAPHICSPRO"|"BYOL_GRAPHICS_G4DN"|"BYOL_REGULAR_WSP"|"BYOL_GRAPHICS_G4DN_WSP"|"BYOL_REGULAR_BYOP"|"BYOL_GRAPHICS_G4DN_BYOP", ImageName:string, ImageDescription:string, Tags?:array<array{Key:string, Value?:string}>, Applications?:array<"Microsoft_Office_2016"|"Microsoft_Office_2019">} $args
     * @return \AWS\Result<array{ImageId?:string}>
     */
    public function importWorkspaceImage(array $args): \AWS\Result { }

    /**
     * @param array{Ec2ImageId:string, IngestionProcess:"BYOL_REGULAR"|"BYOL_GRAPHICS"|"BYOL_GRAPHICSPRO"|"BYOL_GRAPHICS_G4DN"|"BYOL_REGULAR_WSP"|"BYOL_GRAPHICS_G4DN_WSP"|"BYOL_REGULAR_BYOP"|"BYOL_GRAPHICS_G4DN_BYOP", ImageName:string, ImageDescription:string, Tags?:array<array{Key:string, Value?:string}>, Applications?:array<"Microsoft_Office_2016"|"Microsoft_Office_2019">} $args
     * @return \GuzzleHttp\Promise\Promise<array{ImageId?:string}>
     */
    public function importWorkspaceImageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LinkStatusFilter?:array<"LINKED"|"LINKING_FAILED"|"LINK_NOT_FOUND"|"PENDING_ACCEPTANCE_BY_TARGET_ACCOUNT"|"REJECTED">, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{AccountLinks?:array<array{AccountLinkId?:string, AccountLinkStatus?:"LINKED"|"LINKING_FAILED"|"LINK_NOT_FOUND"|"PENDING_ACCEPTANCE_BY_TARGET_ACCOUNT"|"REJECTED", SourceAccountId?:string, TargetAccountId?:string}>, NextToken?:string}>
     */
    public function listAccountLinks(array $args = []): \AWS\Result { }

    /**
     * @param array{LinkStatusFilter?:array<"LINKED"|"LINKING_FAILED"|"LINK_NOT_FOUND"|"PENDING_ACCEPTANCE_BY_TARGET_ACCOUNT"|"REJECTED">, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountLinks?:array<array{AccountLinkId?:string, AccountLinkStatus?:"LINKED"|"LINKING_FAILED"|"LINK_NOT_FOUND"|"PENDING_ACCEPTANCE_BY_TARGET_ACCOUNT"|"REJECTED", SourceAccountId?:string, TargetAccountId?:string}>, NextToken?:string}>
     */
    public function listAccountLinksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ManagementCidrRangeConstraint:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ManagementCidrRanges?:array<string>, NextToken?:string}>
     */
    public function listAvailableManagementCidrRanges(array $args): \AWS\Result { }

    /**
     * @param array{ManagementCidrRangeConstraint:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ManagementCidrRanges?:array<string>, NextToken?:string}>
     */
    public function listAvailableManagementCidrRangesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SourceWorkspaceId:string, BundleId:string} $args
     * @return \AWS\Result<array{SourceWorkspaceId?:string, TargetWorkspaceId?:string}>
     */
    public function migrateWorkspace(array $args): \AWS\Result { }

    /**
     * @param array{SourceWorkspaceId:string, BundleId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SourceWorkspaceId?:string, TargetWorkspaceId?:string}>
     */
    public function migrateWorkspaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DedicatedTenancySupport?:"ENABLED", DedicatedTenancyManagementCidrRange?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function modifyAccount(array $args = []): \AWS\Result { }

    /**
     * @param array{DedicatedTenancySupport?:"ENABLED", DedicatedTenancyManagementCidrRange?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function modifyAccountAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, CertificateBasedAuthProperties?:array{Status?:"DISABLED"|"ENABLED", CertificateAuthorityArn?:string}, PropertiesToDelete?:array<"CERTIFICATE_BASED_AUTH_PROPERTIES_CERTIFICATE_AUTHORITY_ARN">} $args
     * @return \AWS\Result<array{}>
     */
    public function modifyCertificateBasedAuthProperties(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, CertificateBasedAuthProperties?:array{Status?:"DISABLED"|"ENABLED", CertificateAuthorityArn?:string}, PropertiesToDelete?:array<"CERTIFICATE_BASED_AUTH_PROPERTIES_CERTIFICATE_AUTHORITY_ARN">} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function modifyCertificateBasedAuthPropertiesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, ClientProperties:array{ReconnectEnabled?:"ENABLED"|"DISABLED", LogUploadEnabled?:"ENABLED"|"DISABLED"}} $args
     * @return \AWS\Result<array{}>
     */
    public function modifyClientProperties(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, ClientProperties:array{ReconnectEnabled?:"ENABLED"|"DISABLED", LogUploadEnabled?:"ENABLED"|"DISABLED"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function modifyClientPropertiesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, SamlProperties?:array{Status?:"DISABLED"|"ENABLED"|"ENABLED_WITH_DIRECTORY_LOGIN_FALLBACK", UserAccessUrl?:string, RelayStateParameterName?:string}, PropertiesToDelete?:array<"SAML_PROPERTIES_USER_ACCESS_URL"|"SAML_PROPERTIES_RELAY_STATE_PARAMETER_NAME">} $args
     * @return \AWS\Result<array{}>
     */
    public function modifySamlProperties(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, SamlProperties?:array{Status?:"DISABLED"|"ENABLED"|"ENABLED_WITH_DIRECTORY_LOGIN_FALLBACK", UserAccessUrl?:string, RelayStateParameterName?:string}, PropertiesToDelete?:array<"SAML_PROPERTIES_USER_ACCESS_URL"|"SAML_PROPERTIES_RELAY_STATE_PARAMETER_NAME">} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function modifySamlPropertiesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, SelfservicePermissions:array{RestartWorkspace?:"ENABLED"|"DISABLED", IncreaseVolumeSize?:"ENABLED"|"DISABLED", ChangeComputeType?:"ENABLED"|"DISABLED", SwitchRunningMode?:"ENABLED"|"DISABLED", RebuildWorkspace?:"ENABLED"|"DISABLED"}} $args
     * @return \AWS\Result<array{}>
     */
    public function modifySelfservicePermissions(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, SelfservicePermissions:array{RestartWorkspace?:"ENABLED"|"DISABLED", IncreaseVolumeSize?:"ENABLED"|"DISABLED", ChangeComputeType?:"ENABLED"|"DISABLED", SwitchRunningMode?:"ENABLED"|"DISABLED", RebuildWorkspace?:"ENABLED"|"DISABLED"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function modifySelfservicePermissionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, StreamingProperties?:array{StreamingExperiencePreferredProtocol?:"TCP"|"UDP", UserSettings?:array<array{Action:"CLIPBOARD_COPY_FROM_LOCAL_DEVICE"|"CLIPBOARD_COPY_TO_LOCAL_DEVICE"|"PRINTING_TO_LOCAL_DEVICE"|"SMART_CARD", Permission:"ENABLED"|"DISABLED", MaximumLength?:int}>, StorageConnectors?:array<array{ConnectorType:"HOME_FOLDER", Status:"ENABLED"|"DISABLED"}>, GlobalAccelerator?:array{Mode:"ENABLED_AUTO"|"DISABLED", PreferredProtocol?:"TCP"|"NONE"}}} $args
     * @return \AWS\Result<array{}>
     */
    public function modifyStreamingProperties(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, StreamingProperties?:array{StreamingExperiencePreferredProtocol?:"TCP"|"UDP", UserSettings?:array<array{Action:"CLIPBOARD_COPY_FROM_LOCAL_DEVICE"|"CLIPBOARD_COPY_TO_LOCAL_DEVICE"|"PRINTING_TO_LOCAL_DEVICE"|"SMART_CARD", Permission:"ENABLED"|"DISABLED", MaximumLength?:int}>, StorageConnectors?:array<array{ConnectorType:"HOME_FOLDER", Status:"ENABLED"|"DISABLED"}>, GlobalAccelerator?:array{Mode:"ENABLED_AUTO"|"DISABLED", PreferredProtocol?:"TCP"|"NONE"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function modifyStreamingPropertiesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, WorkspaceAccessProperties:array{DeviceTypeWindows?:"ALLOW"|"DENY", DeviceTypeOsx?:"ALLOW"|"DENY", DeviceTypeWeb?:"ALLOW"|"DENY", DeviceTypeIos?:"ALLOW"|"DENY", DeviceTypeAndroid?:"ALLOW"|"DENY", DeviceTypeChromeOs?:"ALLOW"|"DENY", DeviceTypeZeroClient?:"ALLOW"|"DENY", DeviceTypeLinux?:"ALLOW"|"DENY"}} $args
     * @return \AWS\Result<array{}>
     */
    public function modifyWorkspaceAccessProperties(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, WorkspaceAccessProperties:array{DeviceTypeWindows?:"ALLOW"|"DENY", DeviceTypeOsx?:"ALLOW"|"DENY", DeviceTypeWeb?:"ALLOW"|"DENY", DeviceTypeIos?:"ALLOW"|"DENY", DeviceTypeAndroid?:"ALLOW"|"DENY", DeviceTypeChromeOs?:"ALLOW"|"DENY", DeviceTypeZeroClient?:"ALLOW"|"DENY", DeviceTypeLinux?:"ALLOW"|"DENY"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function modifyWorkspaceAccessPropertiesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, WorkspaceCreationProperties:array{EnableWorkDocs?:bool, EnableInternetAccess?:bool, DefaultOu?:string, CustomSecurityGroupId?:string, UserEnabledAsLocalAdministrator?:bool, EnableMaintenanceMode?:bool, InstanceIamRoleArn?:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function modifyWorkspaceCreationProperties(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, WorkspaceCreationProperties:array{EnableWorkDocs?:bool, EnableInternetAccess?:bool, DefaultOu?:string, CustomSecurityGroupId?:string, UserEnabledAsLocalAdministrator?:bool, EnableMaintenanceMode?:bool, InstanceIamRoleArn?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function modifyWorkspaceCreationPropertiesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkspaceId:string, WorkspaceProperties?:array{RunningMode?:"AUTO_STOP"|"ALWAYS_ON"|"MANUAL", RunningModeAutoStopTimeoutInMinutes?:int, RootVolumeSizeGib?:int, UserVolumeSizeGib?:int, ComputeTypeName?:"VALUE"|"STANDARD"|"PERFORMANCE"|"POWER"|"GRAPHICS"|"POWERPRO"|"GENERALPURPOSE_4XLARGE"|"GENERALPURPOSE_8XLARGE"|"GRAPHICSPRO"|"GRAPHICS_G4DN"|"GRAPHICSPRO_G4DN", Protocols?:array<"PCOIP"|"WSP">, OperatingSystemName?:"AMAZON_LINUX_2"|"UBUNTU_18_04"|"UBUNTU_20_04"|"UBUNTU_22_04"|"UNKNOWN"|"WINDOWS_10"|"WINDOWS_11"|"WINDOWS_7"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"RHEL_8"|"ROCKY_8", GlobalAccelerator?:array{Mode:"ENABLED_AUTO"|"DISABLED"|"INHERITED", PreferredProtocol?:"TCP"|"NONE"|"INHERITED"}}, DataReplication?:"NO_REPLICATION"|"PRIMARY_AS_SOURCE"} $args
     * @return \AWS\Result<array{}>
     */
    public function modifyWorkspaceProperties(array $args): \AWS\Result { }

    /**
     * @param array{WorkspaceId:string, WorkspaceProperties?:array{RunningMode?:"AUTO_STOP"|"ALWAYS_ON"|"MANUAL", RunningModeAutoStopTimeoutInMinutes?:int, RootVolumeSizeGib?:int, UserVolumeSizeGib?:int, ComputeTypeName?:"VALUE"|"STANDARD"|"PERFORMANCE"|"POWER"|"GRAPHICS"|"POWERPRO"|"GENERALPURPOSE_4XLARGE"|"GENERALPURPOSE_8XLARGE"|"GRAPHICSPRO"|"GRAPHICS_G4DN"|"GRAPHICSPRO_G4DN", Protocols?:array<"PCOIP"|"WSP">, OperatingSystemName?:"AMAZON_LINUX_2"|"UBUNTU_18_04"|"UBUNTU_20_04"|"UBUNTU_22_04"|"UNKNOWN"|"WINDOWS_10"|"WINDOWS_11"|"WINDOWS_7"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"RHEL_8"|"ROCKY_8", GlobalAccelerator?:array{Mode:"ENABLED_AUTO"|"DISABLED"|"INHERITED", PreferredProtocol?:"TCP"|"NONE"|"INHERITED"}}, DataReplication?:"NO_REPLICATION"|"PRIMARY_AS_SOURCE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function modifyWorkspacePropertiesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkspaceId:string, WorkspaceState:"AVAILABLE"|"ADMIN_MAINTENANCE"} $args
     * @return \AWS\Result<array{}>
     */
    public function modifyWorkspaceState(array $args): \AWS\Result { }

    /**
     * @param array{WorkspaceId:string, WorkspaceState:"AVAILABLE"|"ADMIN_MAINTENANCE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function modifyWorkspaceStateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RebootWorkspaceRequests:array<array{WorkspaceId:string}>} $args
     * @return \AWS\Result<array{FailedRequests?:array<array{WorkspaceId?:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function rebootWorkspaces(array $args): \AWS\Result { }

    /**
     * @param array{RebootWorkspaceRequests:array<array{WorkspaceId:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{FailedRequests?:array<array{WorkspaceId?:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function rebootWorkspacesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RebuildWorkspaceRequests:array<array{WorkspaceId:string}>} $args
     * @return \AWS\Result<array{FailedRequests?:array<array{WorkspaceId?:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function rebuildWorkspaces(array $args): \AWS\Result { }

    /**
     * @param array{RebuildWorkspaceRequests:array<array{WorkspaceId:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{FailedRequests?:array<array{WorkspaceId?:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function rebuildWorkspacesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId?:string, SubnetIds?:array<string>, EnableWorkDocs?:bool, EnableSelfService?:bool, Tenancy?:"DEDICATED"|"SHARED", Tags?:array<array{Key:string, Value?:string}>, WorkspaceDirectoryName?:string, WorkspaceDirectoryDescription?:string, UserIdentityType?:"CUSTOMER_MANAGED"|"AWS_DIRECTORY_SERVICE"|"AWS_IAM_IDENTITY_CENTER", IdcInstanceArn?:string, MicrosoftEntraConfig?:array{TenantId?:string, ApplicationConfigSecretArn?:string}, WorkspaceType?:"PERSONAL"|"POOLS", ActiveDirectoryConfig?:array{DomainName:string, ServiceAccountSecretArn:string}} $args
     * @return \AWS\Result<array{DirectoryId?:string, State?:"REGISTERING"|"REGISTERED"|"DEREGISTERING"|"DEREGISTERED"|"ERROR"}>
     */
    public function registerWorkspaceDirectory(array $args = []): \AWS\Result { }

    /**
     * @param array{DirectoryId?:string, SubnetIds?:array<string>, EnableWorkDocs?:bool, EnableSelfService?:bool, Tenancy?:"DEDICATED"|"SHARED", Tags?:array<array{Key:string, Value?:string}>, WorkspaceDirectoryName?:string, WorkspaceDirectoryDescription?:string, UserIdentityType?:"CUSTOMER_MANAGED"|"AWS_DIRECTORY_SERVICE"|"AWS_IAM_IDENTITY_CENTER", IdcInstanceArn?:string, MicrosoftEntraConfig?:array{TenantId?:string, ApplicationConfigSecretArn?:string}, WorkspaceType?:"PERSONAL"|"POOLS", ActiveDirectoryConfig?:array{DomainName:string, ServiceAccountSecretArn:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{DirectoryId?:string, State?:"REGISTERING"|"REGISTERED"|"DEREGISTERING"|"DEREGISTERED"|"ERROR"}>
     */
    public function registerWorkspaceDirectoryAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LinkId:string, ClientToken?:string} $args
     * @return \AWS\Result<array{AccountLink?:array{AccountLinkId?:string, AccountLinkStatus?:"LINKED"|"LINKING_FAILED"|"LINK_NOT_FOUND"|"PENDING_ACCEPTANCE_BY_TARGET_ACCOUNT"|"REJECTED", SourceAccountId?:string, TargetAccountId?:string}}>
     */
    public function rejectAccountLinkInvitation(array $args): \AWS\Result { }

    /**
     * @param array{LinkId:string, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountLink?:array{AccountLinkId?:string, AccountLinkStatus?:"LINKED"|"LINKING_FAILED"|"LINK_NOT_FOUND"|"PENDING_ACCEPTANCE_BY_TARGET_ACCOUNT"|"REJECTED", SourceAccountId?:string, TargetAccountId?:string}}>
     */
    public function rejectAccountLinkInvitationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkspaceId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function restoreWorkspace(array $args): \AWS\Result { }

    /**
     * @param array{WorkspaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function restoreWorkspaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupId:string, UserRules:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function revokeIpRules(array $args): \AWS\Result { }

    /**
     * @param array{GroupId:string, UserRules:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function revokeIpRulesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StartWorkspaceRequests:array<array{WorkspaceId?:string}>} $args
     * @return \AWS\Result<array{FailedRequests?:array<array{WorkspaceId?:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function startWorkspaces(array $args): \AWS\Result { }

    /**
     * @param array{StartWorkspaceRequests:array<array{WorkspaceId?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{FailedRequests?:array<array{WorkspaceId?:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function startWorkspacesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PoolId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function startWorkspacesPool(array $args): \AWS\Result { }

    /**
     * @param array{PoolId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function startWorkspacesPoolAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StopWorkspaceRequests:array<array{WorkspaceId?:string}>} $args
     * @return \AWS\Result<array{FailedRequests?:array<array{WorkspaceId?:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function stopWorkspaces(array $args): \AWS\Result { }

    /**
     * @param array{StopWorkspaceRequests:array<array{WorkspaceId?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{FailedRequests?:array<array{WorkspaceId?:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function stopWorkspacesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PoolId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopWorkspacesPool(array $args): \AWS\Result { }

    /**
     * @param array{PoolId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopWorkspacesPoolAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TerminateWorkspaceRequests:array<array{WorkspaceId:string}>} $args
     * @return \AWS\Result<array{FailedRequests?:array<array{WorkspaceId?:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function terminateWorkspaces(array $args): \AWS\Result { }

    /**
     * @param array{TerminateWorkspaceRequests:array<array{WorkspaceId:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{FailedRequests?:array<array{WorkspaceId?:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function terminateWorkspacesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PoolId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function terminateWorkspacesPool(array $args): \AWS\Result { }

    /**
     * @param array{PoolId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function terminateWorkspacesPoolAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SessionId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function terminateWorkspacesPoolSession(array $args): \AWS\Result { }

    /**
     * @param array{SessionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function terminateWorkspacesPoolSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AddInId:string, ResourceId:string, Name?:string, URL?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateConnectClientAddIn(array $args): \AWS\Result { }

    /**
     * @param array{AddInId:string, ResourceId:string, Name?:string, URL?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateConnectClientAddInAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AliasId:string, ConnectionAliasPermission:array{SharedAccountId:string, AllowAssociation:bool}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateConnectionAliasPermission(array $args): \AWS\Result { }

    /**
     * @param array{AliasId:string, ConnectionAliasPermission:array{SharedAccountId:string, AllowAssociation:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateConnectionAliasPermissionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupId:string, UserRules:array<array{ipRule?:string, ruleDesc?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateRulesOfIpGroup(array $args): \AWS\Result { }

    /**
     * @param array{GroupId:string, UserRules:array<array{ipRule?:string, ruleDesc?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateRulesOfIpGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BundleId?:string, ImageId?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateWorkspaceBundle(array $args = []): \AWS\Result { }

    /**
     * @param array{BundleId?:string, ImageId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateWorkspaceBundleAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ImageId:string, AllowCopyImage:bool, SharedAccountId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateWorkspaceImagePermission(array $args): \AWS\Result { }

    /**
     * @param array{ImageId:string, AllowCopyImage:bool, SharedAccountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateWorkspaceImagePermissionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PoolId:string, Description?:string, BundleId?:string, DirectoryId?:string, Capacity?:array{DesiredUserSessions:int}, ApplicationSettings?:array{Status:"DISABLED"|"ENABLED", SettingsGroup?:string}, TimeoutSettings?:array{DisconnectTimeoutInSeconds?:int, IdleDisconnectTimeoutInSeconds?:int, MaxUserDurationInSeconds?:int}} $args
     * @return \AWS\Result<array{WorkspacesPool?:array{PoolId:string, PoolArn:string, CapacityStatus:array{AvailableUserSessions:int, DesiredUserSessions:int, ActualUserSessions:int, ActiveUserSessions:int}, PoolName:string, Description?:string, State:"CREATING"|"DELETING"|"RUNNING"|"STARTING"|"STOPPED"|"STOPPING"|"UPDATING", CreatedAt:int|string|\DateTimeInterface, BundleId:string, DirectoryId:string, Errors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_IS_MISSING"|"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"WORKSPACES_POOL_STOPPED"|"WORKSPACES_POOL_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR"|"DOMAIN_JOIN_ERROR_SECRET_ACTION_PERMISSION_IS_MISSING"|"DOMAIN_JOIN_ERROR_SECRET_DECRYPTION_FAILURE"|"DOMAIN_JOIN_ERROR_SECRET_STATE_INVALID"|"DOMAIN_JOIN_ERROR_SECRET_NOT_FOUND"|"DOMAIN_JOIN_ERROR_SECRET_VALUE_KEY_NOT_FOUND"|"DOMAIN_JOIN_ERROR_SECRET_INVALID"|"BUNDLE_NOT_FOUND"|"DIRECTORY_NOT_FOUND"|"INSUFFICIENT_PERMISSIONS_ERROR"|"DEFAULT_OU_IS_MISSING", ErrorMessage?:string}>, ApplicationSettings?:array{Status:"DISABLED"|"ENABLED", SettingsGroup?:string, S3BucketName?:string}, TimeoutSettings?:array{DisconnectTimeoutInSeconds?:int, IdleDisconnectTimeoutInSeconds?:int, MaxUserDurationInSeconds?:int}}}>
     */
    public function updateWorkspacesPool(array $args): \AWS\Result { }

    /**
     * @param array{PoolId:string, Description?:string, BundleId?:string, DirectoryId?:string, Capacity?:array{DesiredUserSessions:int}, ApplicationSettings?:array{Status:"DISABLED"|"ENABLED", SettingsGroup?:string}, TimeoutSettings?:array{DisconnectTimeoutInSeconds?:int, IdleDisconnectTimeoutInSeconds?:int, MaxUserDurationInSeconds?:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{WorkspacesPool?:array{PoolId:string, PoolArn:string, CapacityStatus:array{AvailableUserSessions:int, DesiredUserSessions:int, ActualUserSessions:int, ActiveUserSessions:int}, PoolName:string, Description?:string, State:"CREATING"|"DELETING"|"RUNNING"|"STARTING"|"STOPPED"|"STOPPING"|"UPDATING", CreatedAt:int|string|\DateTimeInterface, BundleId:string, DirectoryId:string, Errors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_IS_MISSING"|"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"WORKSPACES_POOL_STOPPED"|"WORKSPACES_POOL_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR"|"DOMAIN_JOIN_ERROR_SECRET_ACTION_PERMISSION_IS_MISSING"|"DOMAIN_JOIN_ERROR_SECRET_DECRYPTION_FAILURE"|"DOMAIN_JOIN_ERROR_SECRET_STATE_INVALID"|"DOMAIN_JOIN_ERROR_SECRET_NOT_FOUND"|"DOMAIN_JOIN_ERROR_SECRET_VALUE_KEY_NOT_FOUND"|"DOMAIN_JOIN_ERROR_SECRET_INVALID"|"BUNDLE_NOT_FOUND"|"DIRECTORY_NOT_FOUND"|"INSUFFICIENT_PERMISSIONS_ERROR"|"DEFAULT_OU_IS_MISSING", ErrorMessage?:string}>, ApplicationSettings?:array{Status:"DISABLED"|"ENABLED", SettingsGroup?:string, S3BucketName?:string}, TimeoutSettings?:array{DisconnectTimeoutInSeconds?:int, IdleDisconnectTimeoutInSeconds?:int, MaxUserDurationInSeconds?:int}}}>
     */
    public function updateWorkspacesPoolAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
