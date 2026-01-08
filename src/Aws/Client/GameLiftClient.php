<?php
namespace AWS\GameLift;

class GameLiftClient
{
    /**
     * @param array{TicketId:string, PlayerIds:array<string>, AcceptanceType:"ACCEPT"|"REJECT"} $args
     * @return \AWS\Result<array{}>
     */
    public function acceptMatch(array $args): \AWS\Result { }

    /**
     * @param array{TicketId:string, PlayerIds:array<string>, AcceptanceType:"ACCEPT"|"REJECT"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function acceptMatchAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GameServerGroupName:string, GameServerId?:string, GameServerData?:string, FilterOption?:array{InstanceStatuses?:array<"ACTIVE"|"DRAINING">}} $args
     * @return \AWS\Result<array{GameServer?:array{GameServerGroupName?:string, GameServerGroupArn?:string, GameServerId?:string, InstanceId?:string, ConnectionInfo?:string, GameServerData?:string, ClaimStatus?:"CLAIMED", UtilizationStatus?:"AVAILABLE"|"UTILIZED", RegistrationTime?:int|string|\DateTimeInterface, LastClaimTime?:int|string|\DateTimeInterface, LastHealthCheckTime?:int|string|\DateTimeInterface}}>
     */
    public function claimGameServer(array $args): \AWS\Result { }

    /**
     * @param array{GameServerGroupName:string, GameServerId?:string, GameServerData?:string, FilterOption?:array{InstanceStatuses?:array<"ACTIVE"|"DRAINING">}} $args
     * @return \GuzzleHttp\Promise\Promise<array{GameServer?:array{GameServerGroupName?:string, GameServerGroupArn?:string, GameServerId?:string, InstanceId?:string, ConnectionInfo?:string, GameServerData?:string, ClaimStatus?:"CLAIMED", UtilizationStatus?:"AVAILABLE"|"UTILIZED", RegistrationTime?:int|string|\DateTimeInterface, LastClaimTime?:int|string|\DateTimeInterface, LastHealthCheckTime?:int|string|\DateTimeInterface}}>
     */
    public function claimGameServerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Description?:string, RoutingStrategy:array{Type?:"SIMPLE"|"TERMINAL", FleetId?:string, Message?:string}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{Alias?:array{AliasId?:string, Name?:string, AliasArn?:string, Description?:string, RoutingStrategy?:array{Type?:"SIMPLE"|"TERMINAL", FleetId?:string, Message?:string}, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface}}>
     */
    public function createAlias(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, RoutingStrategy:array{Type?:"SIMPLE"|"TERMINAL", FleetId?:string, Message?:string}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Alias?:array{AliasId?:string, Name?:string, AliasArn?:string, Description?:string, RoutingStrategy?:array{Type?:"SIMPLE"|"TERMINAL", FleetId?:string, Message?:string}, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface}}>
     */
    public function createAliasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name?:string, Version?:string, StorageLocation?:array{Bucket?:string, Key?:string, RoleArn?:string, ObjectVersion?:string}, OperatingSystem?:"WINDOWS_2012"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"WINDOWS_2016"|"AMAZON_LINUX_2023", Tags?:array<array{Key:string, Value:string}>, ServerSdkVersion?:string} $args
     * @return \AWS\Result<array{Build?:array{BuildId?:string, BuildArn?:string, Name?:string, Version?:string, Status?:"INITIALIZED"|"READY"|"FAILED", SizeOnDisk?:int, OperatingSystem?:"WINDOWS_2012"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"WINDOWS_2016"|"AMAZON_LINUX_2023", CreationTime?:int|string|\DateTimeInterface, ServerSdkVersion?:string}, UploadCredentials?:array{AccessKeyId?:string, SecretAccessKey?:string, SessionToken?:string}, StorageLocation?:array{Bucket?:string, Key?:string, RoleArn?:string, ObjectVersion?:string}}>
     */
    public function createBuild(array $args = []): \AWS\Result { }

    /**
     * @param array{Name?:string, Version?:string, StorageLocation?:array{Bucket?:string, Key?:string, RoleArn?:string, ObjectVersion?:string}, OperatingSystem?:"WINDOWS_2012"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"WINDOWS_2016"|"AMAZON_LINUX_2023", Tags?:array<array{Key:string, Value:string}>, ServerSdkVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Build?:array{BuildId?:string, BuildArn?:string, Name?:string, Version?:string, Status?:"INITIALIZED"|"READY"|"FAILED", SizeOnDisk?:int, OperatingSystem?:"WINDOWS_2012"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"WINDOWS_2016"|"AMAZON_LINUX_2023", CreationTime?:int|string|\DateTimeInterface, ServerSdkVersion?:string}, UploadCredentials?:array{AccessKeyId?:string, SecretAccessKey?:string, SessionToken?:string}, StorageLocation?:array{Bucket?:string, Key?:string, RoleArn?:string, ObjectVersion?:string}}>
     */
    public function createBuildAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetRoleArn:string, Description?:string, GameServerContainerGroupDefinitionName?:string, PerInstanceContainerGroupDefinitionName?:string, InstanceConnectionPortRange?:array{FromPort:int, ToPort:int}, InstanceInboundPermissions?:array<array{FromPort:int, ToPort:int, IpRange:string, Protocol:"TCP"|"UDP"}>, GameServerContainerGroupsPerInstance?:int, InstanceType?:string, BillingType?:"ON_DEMAND"|"SPOT", Locations?:array<array{Location:string}>, MetricGroups?:array<string>, NewGameSessionProtectionPolicy?:"NoProtection"|"FullProtection", GameSessionCreationLimitPolicy?:array{NewGameSessionsPerCreator?:int, PolicyPeriodInMinutes?:int}, LogConfiguration?:array{LogDestination?:"NONE"|"CLOUDWATCH"|"S3", S3BucketName?:string, LogGroupArn?:string}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{ContainerFleet?:array{FleetId?:string, FleetArn?:string, FleetRoleArn?:string, GameServerContainerGroupDefinitionName?:string, GameServerContainerGroupDefinitionArn?:string, PerInstanceContainerGroupDefinitionName?:string, PerInstanceContainerGroupDefinitionArn?:string, InstanceConnectionPortRange?:array{FromPort:int, ToPort:int}, InstanceInboundPermissions?:array<array{FromPort:int, ToPort:int, IpRange:string, Protocol:"TCP"|"UDP"}>, GameServerContainerGroupsPerInstance?:int, MaximumGameServerContainerGroupsPerInstance?:int, InstanceType?:string, BillingType?:"ON_DEMAND"|"SPOT", Description?:string, CreationTime?:int|string|\DateTimeInterface, MetricGroups?:array<string>, NewGameSessionProtectionPolicy?:"NoProtection"|"FullProtection", GameSessionCreationLimitPolicy?:array{NewGameSessionsPerCreator?:int, PolicyPeriodInMinutes?:int}, Status?:"PENDING"|"CREATING"|"CREATED"|"ACTIVATING"|"ACTIVE"|"UPDATING"|"DELETING", DeploymentDetails?:array{LatestDeploymentId?:string}, LogConfiguration?:array{LogDestination?:"NONE"|"CLOUDWATCH"|"S3", S3BucketName?:string, LogGroupArn?:string}, LocationAttributes?:array<array{Location?:string, Status?:"PENDING"|"CREATING"|"CREATED"|"ACTIVATING"|"ACTIVE"|"UPDATING"|"DELETING"}>}}>
     */
    public function createContainerFleet(array $args): \AWS\Result { }

    /**
     * @param array{FleetRoleArn:string, Description?:string, GameServerContainerGroupDefinitionName?:string, PerInstanceContainerGroupDefinitionName?:string, InstanceConnectionPortRange?:array{FromPort:int, ToPort:int}, InstanceInboundPermissions?:array<array{FromPort:int, ToPort:int, IpRange:string, Protocol:"TCP"|"UDP"}>, GameServerContainerGroupsPerInstance?:int, InstanceType?:string, BillingType?:"ON_DEMAND"|"SPOT", Locations?:array<array{Location:string}>, MetricGroups?:array<string>, NewGameSessionProtectionPolicy?:"NoProtection"|"FullProtection", GameSessionCreationLimitPolicy?:array{NewGameSessionsPerCreator?:int, PolicyPeriodInMinutes?:int}, LogConfiguration?:array{LogDestination?:"NONE"|"CLOUDWATCH"|"S3", S3BucketName?:string, LogGroupArn?:string}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContainerFleet?:array{FleetId?:string, FleetArn?:string, FleetRoleArn?:string, GameServerContainerGroupDefinitionName?:string, GameServerContainerGroupDefinitionArn?:string, PerInstanceContainerGroupDefinitionName?:string, PerInstanceContainerGroupDefinitionArn?:string, InstanceConnectionPortRange?:array{FromPort:int, ToPort:int}, InstanceInboundPermissions?:array<array{FromPort:int, ToPort:int, IpRange:string, Protocol:"TCP"|"UDP"}>, GameServerContainerGroupsPerInstance?:int, MaximumGameServerContainerGroupsPerInstance?:int, InstanceType?:string, BillingType?:"ON_DEMAND"|"SPOT", Description?:string, CreationTime?:int|string|\DateTimeInterface, MetricGroups?:array<string>, NewGameSessionProtectionPolicy?:"NoProtection"|"FullProtection", GameSessionCreationLimitPolicy?:array{NewGameSessionsPerCreator?:int, PolicyPeriodInMinutes?:int}, Status?:"PENDING"|"CREATING"|"CREATED"|"ACTIVATING"|"ACTIVE"|"UPDATING"|"DELETING", DeploymentDetails?:array{LatestDeploymentId?:string}, LogConfiguration?:array{LogDestination?:"NONE"|"CLOUDWATCH"|"S3", S3BucketName?:string, LogGroupArn?:string}, LocationAttributes?:array<array{Location?:string, Status?:"PENDING"|"CREATING"|"CREATED"|"ACTIVATING"|"ACTIVE"|"UPDATING"|"DELETING"}>}}>
     */
    public function createContainerFleetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, ContainerGroupType?:"GAME_SERVER"|"PER_INSTANCE", TotalMemoryLimitMebibytes:int, TotalVcpuLimit:float, GameServerContainerDefinition?:array{ContainerName:string, DependsOn?:array<array{ContainerName:string, Condition:"START"|"COMPLETE"|"SUCCESS"|"HEALTHY"}>, MountPoints?:array<array{InstancePath:string, ContainerPath?:string, AccessLevel?:"READ_ONLY"|"READ_AND_WRITE"}>, EnvironmentOverride?:array<array{Name:string, Value:string}>, ImageUri:string, PortConfiguration:array{ContainerPortRanges:array<array{FromPort:int, ToPort:int, Protocol:"TCP"|"UDP"}>}, ServerSdkVersion:string}, SupportContainerDefinitions?:array<array{ContainerName:string, DependsOn?:array<array{ContainerName:string, Condition:"START"|"COMPLETE"|"SUCCESS"|"HEALTHY"}>, MountPoints?:array<array{InstancePath:string, ContainerPath?:string, AccessLevel?:"READ_ONLY"|"READ_AND_WRITE"}>, EnvironmentOverride?:array<array{Name:string, Value:string}>, Essential?:bool, HealthCheck?:array{Command:array<string>, Interval?:int, Retries?:int, StartPeriod?:int, Timeout?:int}, ImageUri:string, MemoryHardLimitMebibytes?:int, PortConfiguration?:array{ContainerPortRanges:array<array{FromPort:int, ToPort:int, Protocol:"TCP"|"UDP"}>}, Vcpu?:float}>, OperatingSystem:"AMAZON_LINUX_2023", VersionDescription?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{ContainerGroupDefinition?:array{ContainerGroupDefinitionArn?:string, CreationTime?:int|string|\DateTimeInterface, OperatingSystem?:"AMAZON_LINUX_2023", Name:string, ContainerGroupType?:"GAME_SERVER"|"PER_INSTANCE", TotalMemoryLimitMebibytes?:int, TotalVcpuLimit?:float, GameServerContainerDefinition?:array{ContainerName?:string, DependsOn?:array<array{ContainerName:string, Condition:"START"|"COMPLETE"|"SUCCESS"|"HEALTHY"}>, MountPoints?:array<array{InstancePath:string, ContainerPath?:string, AccessLevel?:"READ_ONLY"|"READ_AND_WRITE"}>, EnvironmentOverride?:array<array{Name:string, Value:string}>, ImageUri?:string, PortConfiguration?:array{ContainerPortRanges:array<array{FromPort:int, ToPort:int, Protocol:"TCP"|"UDP"}>}, ResolvedImageDigest?:string, ServerSdkVersion?:string}, SupportContainerDefinitions?:array<array{ContainerName?:string, DependsOn?:array<array{ContainerName:string, Condition:"START"|"COMPLETE"|"SUCCESS"|"HEALTHY"}>, MountPoints?:array<array{InstancePath:string, ContainerPath?:string, AccessLevel?:"READ_ONLY"|"READ_AND_WRITE"}>, EnvironmentOverride?:array<array{Name:string, Value:string}>, Essential?:bool, HealthCheck?:array{Command:array<string>, Interval?:int, Retries?:int, StartPeriod?:int, Timeout?:int}, ImageUri?:string, MemoryHardLimitMebibytes?:int, PortConfiguration?:array{ContainerPortRanges:array<array{FromPort:int, ToPort:int, Protocol:"TCP"|"UDP"}>}, ResolvedImageDigest?:string, Vcpu?:float}>, VersionNumber?:int, VersionDescription?:string, Status?:"READY"|"COPYING"|"FAILED", StatusReason?:string}}>
     */
    public function createContainerGroupDefinition(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, ContainerGroupType?:"GAME_SERVER"|"PER_INSTANCE", TotalMemoryLimitMebibytes:int, TotalVcpuLimit:float, GameServerContainerDefinition?:array{ContainerName:string, DependsOn?:array<array{ContainerName:string, Condition:"START"|"COMPLETE"|"SUCCESS"|"HEALTHY"}>, MountPoints?:array<array{InstancePath:string, ContainerPath?:string, AccessLevel?:"READ_ONLY"|"READ_AND_WRITE"}>, EnvironmentOverride?:array<array{Name:string, Value:string}>, ImageUri:string, PortConfiguration:array{ContainerPortRanges:array<array{FromPort:int, ToPort:int, Protocol:"TCP"|"UDP"}>}, ServerSdkVersion:string}, SupportContainerDefinitions?:array<array{ContainerName:string, DependsOn?:array<array{ContainerName:string, Condition:"START"|"COMPLETE"|"SUCCESS"|"HEALTHY"}>, MountPoints?:array<array{InstancePath:string, ContainerPath?:string, AccessLevel?:"READ_ONLY"|"READ_AND_WRITE"}>, EnvironmentOverride?:array<array{Name:string, Value:string}>, Essential?:bool, HealthCheck?:array{Command:array<string>, Interval?:int, Retries?:int, StartPeriod?:int, Timeout?:int}, ImageUri:string, MemoryHardLimitMebibytes?:int, PortConfiguration?:array{ContainerPortRanges:array<array{FromPort:int, ToPort:int, Protocol:"TCP"|"UDP"}>}, Vcpu?:float}>, OperatingSystem:"AMAZON_LINUX_2023", VersionDescription?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContainerGroupDefinition?:array{ContainerGroupDefinitionArn?:string, CreationTime?:int|string|\DateTimeInterface, OperatingSystem?:"AMAZON_LINUX_2023", Name:string, ContainerGroupType?:"GAME_SERVER"|"PER_INSTANCE", TotalMemoryLimitMebibytes?:int, TotalVcpuLimit?:float, GameServerContainerDefinition?:array{ContainerName?:string, DependsOn?:array<array{ContainerName:string, Condition:"START"|"COMPLETE"|"SUCCESS"|"HEALTHY"}>, MountPoints?:array<array{InstancePath:string, ContainerPath?:string, AccessLevel?:"READ_ONLY"|"READ_AND_WRITE"}>, EnvironmentOverride?:array<array{Name:string, Value:string}>, ImageUri?:string, PortConfiguration?:array{ContainerPortRanges:array<array{FromPort:int, ToPort:int, Protocol:"TCP"|"UDP"}>}, ResolvedImageDigest?:string, ServerSdkVersion?:string}, SupportContainerDefinitions?:array<array{ContainerName?:string, DependsOn?:array<array{ContainerName:string, Condition:"START"|"COMPLETE"|"SUCCESS"|"HEALTHY"}>, MountPoints?:array<array{InstancePath:string, ContainerPath?:string, AccessLevel?:"READ_ONLY"|"READ_AND_WRITE"}>, EnvironmentOverride?:array<array{Name:string, Value:string}>, Essential?:bool, HealthCheck?:array{Command:array<string>, Interval?:int, Retries?:int, StartPeriod?:int, Timeout?:int}, ImageUri?:string, MemoryHardLimitMebibytes?:int, PortConfiguration?:array{ContainerPortRanges:array<array{FromPort:int, ToPort:int, Protocol:"TCP"|"UDP"}>}, ResolvedImageDigest?:string, Vcpu?:float}>, VersionNumber?:int, VersionDescription?:string, Status?:"READY"|"COPYING"|"FAILED", StatusReason?:string}}>
     */
    public function createContainerGroupDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Description?:string, BuildId?:string, ScriptId?:string, ServerLaunchPath?:string, ServerLaunchParameters?:string, LogPaths?:array<string>, EC2InstanceType?:"t2.micro"|"t2.small"|"t2.medium"|"t2.large"|"c3.large"|"c3.xlarge"|"c3.2xlarge"|"c3.4xlarge"|"c3.8xlarge"|"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"r3.large"|"r3.xlarge"|"r3.2xlarge"|"r3.4xlarge"|"r3.8xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"m3.medium"|"m3.large"|"m3.xlarge"|"m3.2xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"c5d.large"|"c5d.xlarge"|"c5d.2xlarge"|"c5d.4xlarge"|"c5d.9xlarge"|"c5d.12xlarge"|"c5d.18xlarge"|"c5d.24xlarge"|"c6a.large"|"c6a.xlarge"|"c6a.2xlarge"|"c6a.4xlarge"|"c6a.8xlarge"|"c6a.12xlarge"|"c6a.16xlarge"|"c6a.24xlarge"|"c6i.large"|"c6i.xlarge"|"c6i.2xlarge"|"c6i.4xlarge"|"c6i.8xlarge"|"c6i.12xlarge"|"c6i.16xlarge"|"c6i.24xlarge"|"r5d.large"|"r5d.xlarge"|"r5d.2xlarge"|"r5d.4xlarge"|"r5d.8xlarge"|"r5d.12xlarge"|"r5d.16xlarge"|"r5d.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"c6gn.medium"|"c6gn.large"|"c6gn.xlarge"|"c6gn.2xlarge"|"c6gn.4xlarge"|"c6gn.8xlarge"|"c6gn.12xlarge"|"c6gn.16xlarge"|"c7g.medium"|"c7g.large"|"c7g.xlarge"|"c7g.2xlarge"|"c7g.4xlarge"|"c7g.8xlarge"|"c7g.12xlarge"|"c7g.16xlarge"|"r7g.medium"|"r7g.large"|"r7g.xlarge"|"r7g.2xlarge"|"r7g.4xlarge"|"r7g.8xlarge"|"r7g.12xlarge"|"r7g.16xlarge"|"m7g.medium"|"m7g.large"|"m7g.xlarge"|"m7g.2xlarge"|"m7g.4xlarge"|"m7g.8xlarge"|"m7g.12xlarge"|"m7g.16xlarge"|"g5g.xlarge"|"g5g.2xlarge"|"g5g.4xlarge"|"g5g.8xlarge"|"g5g.16xlarge", EC2InboundPermissions?:array<array{FromPort:int, ToPort:int, IpRange:string, Protocol:"TCP"|"UDP"}>, NewGameSessionProtectionPolicy?:"NoProtection"|"FullProtection", RuntimeConfiguration?:array{ServerProcesses?:array<array{LaunchPath:string, Parameters?:string, ConcurrentExecutions:int}>, MaxConcurrentGameSessionActivations?:int, GameSessionActivationTimeoutSeconds?:int}, ResourceCreationLimitPolicy?:array{NewGameSessionsPerCreator?:int, PolicyPeriodInMinutes?:int}, MetricGroups?:array<string>, PeerVpcAwsAccountId?:string, PeerVpcId?:string, FleetType?:"ON_DEMAND"|"SPOT", InstanceRoleArn?:string, CertificateConfiguration?:array{CertificateType:"DISABLED"|"GENERATED"}, Locations?:array<array{Location:string}>, Tags?:array<array{Key:string, Value:string}>, ComputeType?:"EC2"|"ANYWHERE", AnywhereConfiguration?:array{Cost:string}, InstanceRoleCredentialsProvider?:"SHARED_CREDENTIAL_FILE"} $args
     * @return \AWS\Result<array{FleetAttributes?:array{FleetId?:string, FleetArn?:string, FleetType?:"ON_DEMAND"|"SPOT", InstanceType?:"t2.micro"|"t2.small"|"t2.medium"|"t2.large"|"c3.large"|"c3.xlarge"|"c3.2xlarge"|"c3.4xlarge"|"c3.8xlarge"|"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"r3.large"|"r3.xlarge"|"r3.2xlarge"|"r3.4xlarge"|"r3.8xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"m3.medium"|"m3.large"|"m3.xlarge"|"m3.2xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"c5d.large"|"c5d.xlarge"|"c5d.2xlarge"|"c5d.4xlarge"|"c5d.9xlarge"|"c5d.12xlarge"|"c5d.18xlarge"|"c5d.24xlarge"|"c6a.large"|"c6a.xlarge"|"c6a.2xlarge"|"c6a.4xlarge"|"c6a.8xlarge"|"c6a.12xlarge"|"c6a.16xlarge"|"c6a.24xlarge"|"c6i.large"|"c6i.xlarge"|"c6i.2xlarge"|"c6i.4xlarge"|"c6i.8xlarge"|"c6i.12xlarge"|"c6i.16xlarge"|"c6i.24xlarge"|"r5d.large"|"r5d.xlarge"|"r5d.2xlarge"|"r5d.4xlarge"|"r5d.8xlarge"|"r5d.12xlarge"|"r5d.16xlarge"|"r5d.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"c6gn.medium"|"c6gn.large"|"c6gn.xlarge"|"c6gn.2xlarge"|"c6gn.4xlarge"|"c6gn.8xlarge"|"c6gn.12xlarge"|"c6gn.16xlarge"|"c7g.medium"|"c7g.large"|"c7g.xlarge"|"c7g.2xlarge"|"c7g.4xlarge"|"c7g.8xlarge"|"c7g.12xlarge"|"c7g.16xlarge"|"r7g.medium"|"r7g.large"|"r7g.xlarge"|"r7g.2xlarge"|"r7g.4xlarge"|"r7g.8xlarge"|"r7g.12xlarge"|"r7g.16xlarge"|"m7g.medium"|"m7g.large"|"m7g.xlarge"|"m7g.2xlarge"|"m7g.4xlarge"|"m7g.8xlarge"|"m7g.12xlarge"|"m7g.16xlarge"|"g5g.xlarge"|"g5g.2xlarge"|"g5g.4xlarge"|"g5g.8xlarge"|"g5g.16xlarge", Description?:string, Name?:string, CreationTime?:int|string|\DateTimeInterface, TerminationTime?:int|string|\DateTimeInterface, Status?:"NEW"|"DOWNLOADING"|"VALIDATING"|"BUILDING"|"ACTIVATING"|"ACTIVE"|"DELETING"|"ERROR"|"TERMINATED"|"NOT_FOUND", BuildId?:string, BuildArn?:string, ScriptId?:string, ScriptArn?:string, ServerLaunchPath?:string, ServerLaunchParameters?:string, LogPaths?:array<string>, NewGameSessionProtectionPolicy?:"NoProtection"|"FullProtection", OperatingSystem?:"WINDOWS_2012"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"WINDOWS_2016"|"AMAZON_LINUX_2023", ResourceCreationLimitPolicy?:array{NewGameSessionsPerCreator?:int, PolicyPeriodInMinutes?:int}, MetricGroups?:array<string>, StoppedActions?:array<"AUTO_SCALING">, InstanceRoleArn?:string, CertificateConfiguration?:array{CertificateType:"DISABLED"|"GENERATED"}, ComputeType?:"EC2"|"ANYWHERE", AnywhereConfiguration?:array{Cost:string}, InstanceRoleCredentialsProvider?:"SHARED_CREDENTIAL_FILE"}, LocationStates?:array<array{Location?:string, Status?:"NEW"|"DOWNLOADING"|"VALIDATING"|"BUILDING"|"ACTIVATING"|"ACTIVE"|"DELETING"|"ERROR"|"TERMINATED"|"NOT_FOUND"}>}>
     */
    public function createFleet(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, BuildId?:string, ScriptId?:string, ServerLaunchPath?:string, ServerLaunchParameters?:string, LogPaths?:array<string>, EC2InstanceType?:"t2.micro"|"t2.small"|"t2.medium"|"t2.large"|"c3.large"|"c3.xlarge"|"c3.2xlarge"|"c3.4xlarge"|"c3.8xlarge"|"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"r3.large"|"r3.xlarge"|"r3.2xlarge"|"r3.4xlarge"|"r3.8xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"m3.medium"|"m3.large"|"m3.xlarge"|"m3.2xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"c5d.large"|"c5d.xlarge"|"c5d.2xlarge"|"c5d.4xlarge"|"c5d.9xlarge"|"c5d.12xlarge"|"c5d.18xlarge"|"c5d.24xlarge"|"c6a.large"|"c6a.xlarge"|"c6a.2xlarge"|"c6a.4xlarge"|"c6a.8xlarge"|"c6a.12xlarge"|"c6a.16xlarge"|"c6a.24xlarge"|"c6i.large"|"c6i.xlarge"|"c6i.2xlarge"|"c6i.4xlarge"|"c6i.8xlarge"|"c6i.12xlarge"|"c6i.16xlarge"|"c6i.24xlarge"|"r5d.large"|"r5d.xlarge"|"r5d.2xlarge"|"r5d.4xlarge"|"r5d.8xlarge"|"r5d.12xlarge"|"r5d.16xlarge"|"r5d.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"c6gn.medium"|"c6gn.large"|"c6gn.xlarge"|"c6gn.2xlarge"|"c6gn.4xlarge"|"c6gn.8xlarge"|"c6gn.12xlarge"|"c6gn.16xlarge"|"c7g.medium"|"c7g.large"|"c7g.xlarge"|"c7g.2xlarge"|"c7g.4xlarge"|"c7g.8xlarge"|"c7g.12xlarge"|"c7g.16xlarge"|"r7g.medium"|"r7g.large"|"r7g.xlarge"|"r7g.2xlarge"|"r7g.4xlarge"|"r7g.8xlarge"|"r7g.12xlarge"|"r7g.16xlarge"|"m7g.medium"|"m7g.large"|"m7g.xlarge"|"m7g.2xlarge"|"m7g.4xlarge"|"m7g.8xlarge"|"m7g.12xlarge"|"m7g.16xlarge"|"g5g.xlarge"|"g5g.2xlarge"|"g5g.4xlarge"|"g5g.8xlarge"|"g5g.16xlarge", EC2InboundPermissions?:array<array{FromPort:int, ToPort:int, IpRange:string, Protocol:"TCP"|"UDP"}>, NewGameSessionProtectionPolicy?:"NoProtection"|"FullProtection", RuntimeConfiguration?:array{ServerProcesses?:array<array{LaunchPath:string, Parameters?:string, ConcurrentExecutions:int}>, MaxConcurrentGameSessionActivations?:int, GameSessionActivationTimeoutSeconds?:int}, ResourceCreationLimitPolicy?:array{NewGameSessionsPerCreator?:int, PolicyPeriodInMinutes?:int}, MetricGroups?:array<string>, PeerVpcAwsAccountId?:string, PeerVpcId?:string, FleetType?:"ON_DEMAND"|"SPOT", InstanceRoleArn?:string, CertificateConfiguration?:array{CertificateType:"DISABLED"|"GENERATED"}, Locations?:array<array{Location:string}>, Tags?:array<array{Key:string, Value:string}>, ComputeType?:"EC2"|"ANYWHERE", AnywhereConfiguration?:array{Cost:string}, InstanceRoleCredentialsProvider?:"SHARED_CREDENTIAL_FILE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{FleetAttributes?:array{FleetId?:string, FleetArn?:string, FleetType?:"ON_DEMAND"|"SPOT", InstanceType?:"t2.micro"|"t2.small"|"t2.medium"|"t2.large"|"c3.large"|"c3.xlarge"|"c3.2xlarge"|"c3.4xlarge"|"c3.8xlarge"|"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"r3.large"|"r3.xlarge"|"r3.2xlarge"|"r3.4xlarge"|"r3.8xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"m3.medium"|"m3.large"|"m3.xlarge"|"m3.2xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"c5d.large"|"c5d.xlarge"|"c5d.2xlarge"|"c5d.4xlarge"|"c5d.9xlarge"|"c5d.12xlarge"|"c5d.18xlarge"|"c5d.24xlarge"|"c6a.large"|"c6a.xlarge"|"c6a.2xlarge"|"c6a.4xlarge"|"c6a.8xlarge"|"c6a.12xlarge"|"c6a.16xlarge"|"c6a.24xlarge"|"c6i.large"|"c6i.xlarge"|"c6i.2xlarge"|"c6i.4xlarge"|"c6i.8xlarge"|"c6i.12xlarge"|"c6i.16xlarge"|"c6i.24xlarge"|"r5d.large"|"r5d.xlarge"|"r5d.2xlarge"|"r5d.4xlarge"|"r5d.8xlarge"|"r5d.12xlarge"|"r5d.16xlarge"|"r5d.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"c6gn.medium"|"c6gn.large"|"c6gn.xlarge"|"c6gn.2xlarge"|"c6gn.4xlarge"|"c6gn.8xlarge"|"c6gn.12xlarge"|"c6gn.16xlarge"|"c7g.medium"|"c7g.large"|"c7g.xlarge"|"c7g.2xlarge"|"c7g.4xlarge"|"c7g.8xlarge"|"c7g.12xlarge"|"c7g.16xlarge"|"r7g.medium"|"r7g.large"|"r7g.xlarge"|"r7g.2xlarge"|"r7g.4xlarge"|"r7g.8xlarge"|"r7g.12xlarge"|"r7g.16xlarge"|"m7g.medium"|"m7g.large"|"m7g.xlarge"|"m7g.2xlarge"|"m7g.4xlarge"|"m7g.8xlarge"|"m7g.12xlarge"|"m7g.16xlarge"|"g5g.xlarge"|"g5g.2xlarge"|"g5g.4xlarge"|"g5g.8xlarge"|"g5g.16xlarge", Description?:string, Name?:string, CreationTime?:int|string|\DateTimeInterface, TerminationTime?:int|string|\DateTimeInterface, Status?:"NEW"|"DOWNLOADING"|"VALIDATING"|"BUILDING"|"ACTIVATING"|"ACTIVE"|"DELETING"|"ERROR"|"TERMINATED"|"NOT_FOUND", BuildId?:string, BuildArn?:string, ScriptId?:string, ScriptArn?:string, ServerLaunchPath?:string, ServerLaunchParameters?:string, LogPaths?:array<string>, NewGameSessionProtectionPolicy?:"NoProtection"|"FullProtection", OperatingSystem?:"WINDOWS_2012"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"WINDOWS_2016"|"AMAZON_LINUX_2023", ResourceCreationLimitPolicy?:array{NewGameSessionsPerCreator?:int, PolicyPeriodInMinutes?:int}, MetricGroups?:array<string>, StoppedActions?:array<"AUTO_SCALING">, InstanceRoleArn?:string, CertificateConfiguration?:array{CertificateType:"DISABLED"|"GENERATED"}, ComputeType?:"EC2"|"ANYWHERE", AnywhereConfiguration?:array{Cost:string}, InstanceRoleCredentialsProvider?:"SHARED_CREDENTIAL_FILE"}, LocationStates?:array<array{Location?:string, Status?:"NEW"|"DOWNLOADING"|"VALIDATING"|"BUILDING"|"ACTIVATING"|"ACTIVE"|"DELETING"|"ERROR"|"TERMINATED"|"NOT_FOUND"}>}>
     */
    public function createFleetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId:string, Locations:array<array{Location:string}>} $args
     * @return \AWS\Result<array{FleetId?:string, FleetArn?:string, LocationStates?:array<array{Location?:string, Status?:"NEW"|"DOWNLOADING"|"VALIDATING"|"BUILDING"|"ACTIVATING"|"ACTIVE"|"DELETING"|"ERROR"|"TERMINATED"|"NOT_FOUND"}>}>
     */
    public function createFleetLocations(array $args): \AWS\Result { }

    /**
     * @param array{FleetId:string, Locations:array<array{Location:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{FleetId?:string, FleetArn?:string, LocationStates?:array<array{Location?:string, Status?:"NEW"|"DOWNLOADING"|"VALIDATING"|"BUILDING"|"ACTIVATING"|"ACTIVE"|"DELETING"|"ERROR"|"TERMINATED"|"NOT_FOUND"}>}>
     */
    public function createFleetLocationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GameServerGroupName:string, RoleArn:string, MinSize:int, MaxSize:int, LaunchTemplate:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, InstanceDefinitions:array<array{InstanceType:"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge", WeightedCapacity?:string}>, AutoScalingPolicy?:array{EstimatedInstanceWarmup?:int, TargetTrackingConfiguration:array{TargetValue:float}}, BalancingStrategy?:"SPOT_ONLY"|"SPOT_PREFERRED"|"ON_DEMAND_ONLY", GameServerProtectionPolicy?:"NO_PROTECTION"|"FULL_PROTECTION", VpcSubnets?:array<string>, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{GameServerGroup?:array{GameServerGroupName?:string, GameServerGroupArn?:string, RoleArn?:string, InstanceDefinitions?:array<array{InstanceType:"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge", WeightedCapacity?:string}>, BalancingStrategy?:"SPOT_ONLY"|"SPOT_PREFERRED"|"ON_DEMAND_ONLY", GameServerProtectionPolicy?:"NO_PROTECTION"|"FULL_PROTECTION", AutoScalingGroupArn?:string, Status?:"NEW"|"ACTIVATING"|"ACTIVE"|"DELETE_SCHEDULED"|"DELETING"|"DELETED"|"ERROR", StatusReason?:string, SuspendedActions?:array<"REPLACE_INSTANCE_TYPES">, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface}}>
     */
    public function createGameServerGroup(array $args): \AWS\Result { }

    /**
     * @param array{GameServerGroupName:string, RoleArn:string, MinSize:int, MaxSize:int, LaunchTemplate:array{LaunchTemplateId?:string, LaunchTemplateName?:string, Version?:string}, InstanceDefinitions:array<array{InstanceType:"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge", WeightedCapacity?:string}>, AutoScalingPolicy?:array{EstimatedInstanceWarmup?:int, TargetTrackingConfiguration:array{TargetValue:float}}, BalancingStrategy?:"SPOT_ONLY"|"SPOT_PREFERRED"|"ON_DEMAND_ONLY", GameServerProtectionPolicy?:"NO_PROTECTION"|"FULL_PROTECTION", VpcSubnets?:array<string>, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{GameServerGroup?:array{GameServerGroupName?:string, GameServerGroupArn?:string, RoleArn?:string, InstanceDefinitions?:array<array{InstanceType:"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge", WeightedCapacity?:string}>, BalancingStrategy?:"SPOT_ONLY"|"SPOT_PREFERRED"|"ON_DEMAND_ONLY", GameServerProtectionPolicy?:"NO_PROTECTION"|"FULL_PROTECTION", AutoScalingGroupArn?:string, Status?:"NEW"|"ACTIVATING"|"ACTIVE"|"DELETE_SCHEDULED"|"DELETING"|"DELETED"|"ERROR", StatusReason?:string, SuspendedActions?:array<"REPLACE_INSTANCE_TYPES">, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface}}>
     */
    public function createGameServerGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId?:string, AliasId?:string, MaximumPlayerSessionCount:int, Name?:string, GameProperties?:array<array{Key:string, Value:string}>, CreatorId?:string, GameSessionId?:string, IdempotencyToken?:string, GameSessionData?:string, Location?:string} $args
     * @return \AWS\Result<array{GameSession?:array{GameSessionId?:string, Name?:string, FleetId?:string, FleetArn?:string, CreationTime?:int|string|\DateTimeInterface, TerminationTime?:int|string|\DateTimeInterface, CurrentPlayerSessionCount?:int, MaximumPlayerSessionCount?:int, Status?:"ACTIVE"|"ACTIVATING"|"TERMINATED"|"TERMINATING"|"ERROR", StatusReason?:"INTERRUPTED"|"TRIGGERED_ON_PROCESS_TERMINATE"|"FORCE_TERMINATED", GameProperties?:array<array{Key:string, Value:string}>, IpAddress?:string, DnsName?:string, Port?:int, PlayerSessionCreationPolicy?:"ACCEPT_ALL"|"DENY_ALL", CreatorId?:string, GameSessionData?:string, MatchmakerData?:string, Location?:string}}>
     */
    public function createGameSession(array $args): \AWS\Result { }

    /**
     * @param array{FleetId?:string, AliasId?:string, MaximumPlayerSessionCount:int, Name?:string, GameProperties?:array<array{Key:string, Value:string}>, CreatorId?:string, GameSessionId?:string, IdempotencyToken?:string, GameSessionData?:string, Location?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GameSession?:array{GameSessionId?:string, Name?:string, FleetId?:string, FleetArn?:string, CreationTime?:int|string|\DateTimeInterface, TerminationTime?:int|string|\DateTimeInterface, CurrentPlayerSessionCount?:int, MaximumPlayerSessionCount?:int, Status?:"ACTIVE"|"ACTIVATING"|"TERMINATED"|"TERMINATING"|"ERROR", StatusReason?:"INTERRUPTED"|"TRIGGERED_ON_PROCESS_TERMINATE"|"FORCE_TERMINATED", GameProperties?:array<array{Key:string, Value:string}>, IpAddress?:string, DnsName?:string, Port?:int, PlayerSessionCreationPolicy?:"ACCEPT_ALL"|"DENY_ALL", CreatorId?:string, GameSessionData?:string, MatchmakerData?:string, Location?:string}}>
     */
    public function createGameSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, TimeoutInSeconds?:int, PlayerLatencyPolicies?:array<array{MaximumIndividualPlayerLatencyMilliseconds?:int, PolicyDurationSeconds?:int}>, Destinations?:array<array{DestinationArn?:string}>, FilterConfiguration?:array{AllowedLocations?:array<string>}, PriorityConfiguration?:array{PriorityOrder?:array<"LATENCY"|"COST"|"DESTINATION"|"LOCATION">, LocationOrder?:array<string>}, CustomEventData?:string, NotificationTarget?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{GameSessionQueue?:array{Name?:string, GameSessionQueueArn?:string, TimeoutInSeconds?:int, PlayerLatencyPolicies?:array<array{MaximumIndividualPlayerLatencyMilliseconds?:int, PolicyDurationSeconds?:int}>, Destinations?:array<array{DestinationArn?:string}>, FilterConfiguration?:array{AllowedLocations?:array<string>}, PriorityConfiguration?:array{PriorityOrder?:array<"LATENCY"|"COST"|"DESTINATION"|"LOCATION">, LocationOrder?:array<string>}, CustomEventData?:string, NotificationTarget?:string}}>
     */
    public function createGameSessionQueue(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, TimeoutInSeconds?:int, PlayerLatencyPolicies?:array<array{MaximumIndividualPlayerLatencyMilliseconds?:int, PolicyDurationSeconds?:int}>, Destinations?:array<array{DestinationArn?:string}>, FilterConfiguration?:array{AllowedLocations?:array<string>}, PriorityConfiguration?:array{PriorityOrder?:array<"LATENCY"|"COST"|"DESTINATION"|"LOCATION">, LocationOrder?:array<string>}, CustomEventData?:string, NotificationTarget?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{GameSessionQueue?:array{Name?:string, GameSessionQueueArn?:string, TimeoutInSeconds?:int, PlayerLatencyPolicies?:array<array{MaximumIndividualPlayerLatencyMilliseconds?:int, PolicyDurationSeconds?:int}>, Destinations?:array<array{DestinationArn?:string}>, FilterConfiguration?:array{AllowedLocations?:array<string>}, PriorityConfiguration?:array{PriorityOrder?:array<"LATENCY"|"COST"|"DESTINATION"|"LOCATION">, LocationOrder?:array<string>}, CustomEventData?:string, NotificationTarget?:string}}>
     */
    public function createGameSessionQueueAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LocationName:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{Location?:array{LocationName?:string, LocationArn?:string}}>
     */
    public function createLocation(array $args): \AWS\Result { }

    /**
     * @param array{LocationName:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Location?:array{LocationName?:string, LocationArn?:string}}>
     */
    public function createLocationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Description?:string, GameSessionQueueArns?:array<string>, RequestTimeoutSeconds:int, AcceptanceTimeoutSeconds?:int, AcceptanceRequired:bool, RuleSetName:string, NotificationTarget?:string, AdditionalPlayerCount?:int, CustomEventData?:string, GameProperties?:array<array{Key:string, Value:string}>, GameSessionData?:string, BackfillMode?:"AUTOMATIC"|"MANUAL", FlexMatchMode?:"STANDALONE"|"WITH_QUEUE", Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{Configuration?:array{Name?:string, ConfigurationArn?:string, Description?:string, GameSessionQueueArns?:array<string>, RequestTimeoutSeconds?:int, AcceptanceTimeoutSeconds?:int, AcceptanceRequired?:bool, RuleSetName?:string, RuleSetArn?:string, NotificationTarget?:string, AdditionalPlayerCount?:int, CustomEventData?:string, CreationTime?:int|string|\DateTimeInterface, GameProperties?:array<array{Key:string, Value:string}>, GameSessionData?:string, BackfillMode?:"AUTOMATIC"|"MANUAL", FlexMatchMode?:"STANDALONE"|"WITH_QUEUE"}}>
     */
    public function createMatchmakingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, GameSessionQueueArns?:array<string>, RequestTimeoutSeconds:int, AcceptanceTimeoutSeconds?:int, AcceptanceRequired:bool, RuleSetName:string, NotificationTarget?:string, AdditionalPlayerCount?:int, CustomEventData?:string, GameProperties?:array<array{Key:string, Value:string}>, GameSessionData?:string, BackfillMode?:"AUTOMATIC"|"MANUAL", FlexMatchMode?:"STANDALONE"|"WITH_QUEUE", Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Configuration?:array{Name?:string, ConfigurationArn?:string, Description?:string, GameSessionQueueArns?:array<string>, RequestTimeoutSeconds?:int, AcceptanceTimeoutSeconds?:int, AcceptanceRequired?:bool, RuleSetName?:string, RuleSetArn?:string, NotificationTarget?:string, AdditionalPlayerCount?:int, CustomEventData?:string, CreationTime?:int|string|\DateTimeInterface, GameProperties?:array<array{Key:string, Value:string}>, GameSessionData?:string, BackfillMode?:"AUTOMATIC"|"MANUAL", FlexMatchMode?:"STANDALONE"|"WITH_QUEUE"}}>
     */
    public function createMatchmakingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, RuleSetBody:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{RuleSet:array{RuleSetName?:string, RuleSetArn?:string, RuleSetBody:string, CreationTime?:int|string|\DateTimeInterface}}>
     */
    public function createMatchmakingRuleSet(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, RuleSetBody:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{RuleSet:array{RuleSetName?:string, RuleSetArn?:string, RuleSetBody:string, CreationTime?:int|string|\DateTimeInterface}}>
     */
    public function createMatchmakingRuleSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GameSessionId:string, PlayerId:string, PlayerData?:string} $args
     * @return \AWS\Result<array{PlayerSession?:array{PlayerSessionId?:string, PlayerId?:string, GameSessionId?:string, FleetId?:string, FleetArn?:string, CreationTime?:int|string|\DateTimeInterface, TerminationTime?:int|string|\DateTimeInterface, Status?:"RESERVED"|"ACTIVE"|"COMPLETED"|"TIMEDOUT", IpAddress?:string, DnsName?:string, Port?:int, PlayerData?:string}}>
     */
    public function createPlayerSession(array $args): \AWS\Result { }

    /**
     * @param array{GameSessionId:string, PlayerId:string, PlayerData?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PlayerSession?:array{PlayerSessionId?:string, PlayerId?:string, GameSessionId?:string, FleetId?:string, FleetArn?:string, CreationTime?:int|string|\DateTimeInterface, TerminationTime?:int|string|\DateTimeInterface, Status?:"RESERVED"|"ACTIVE"|"COMPLETED"|"TIMEDOUT", IpAddress?:string, DnsName?:string, Port?:int, PlayerData?:string}}>
     */
    public function createPlayerSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GameSessionId:string, PlayerIds:array<string>, PlayerDataMap?:array<string, string>} $args
     * @return \AWS\Result<array{PlayerSessions?:array<array{PlayerSessionId?:string, PlayerId?:string, GameSessionId?:string, FleetId?:string, FleetArn?:string, CreationTime?:int|string|\DateTimeInterface, TerminationTime?:int|string|\DateTimeInterface, Status?:"RESERVED"|"ACTIVE"|"COMPLETED"|"TIMEDOUT", IpAddress?:string, DnsName?:string, Port?:int, PlayerData?:string}>}>
     */
    public function createPlayerSessions(array $args): \AWS\Result { }

    /**
     * @param array{GameSessionId:string, PlayerIds:array<string>, PlayerDataMap?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{PlayerSessions?:array<array{PlayerSessionId?:string, PlayerId?:string, GameSessionId?:string, FleetId?:string, FleetArn?:string, CreationTime?:int|string|\DateTimeInterface, TerminationTime?:int|string|\DateTimeInterface, Status?:"RESERVED"|"ACTIVE"|"COMPLETED"|"TIMEDOUT", IpAddress?:string, DnsName?:string, Port?:int, PlayerData?:string}>}>
     */
    public function createPlayerSessionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name?:string, Version?:string, StorageLocation?:array{Bucket?:string, Key?:string, RoleArn?:string, ObjectVersion?:string}, ZipFile?:string|resource|\Psr\Http\Message\StreamInterface, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{Script?:array{ScriptId?:string, ScriptArn?:string, Name?:string, Version?:string, SizeOnDisk?:int, CreationTime?:int|string|\DateTimeInterface, StorageLocation?:array{Bucket?:string, Key?:string, RoleArn?:string, ObjectVersion?:string}}}>
     */
    public function createScript(array $args = []): \AWS\Result { }

    /**
     * @param array{Name?:string, Version?:string, StorageLocation?:array{Bucket?:string, Key?:string, RoleArn?:string, ObjectVersion?:string}, ZipFile?:string|resource|\Psr\Http\Message\StreamInterface, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Script?:array{ScriptId?:string, ScriptArn?:string, Name?:string, Version?:string, SizeOnDisk?:int, CreationTime?:int|string|\DateTimeInterface, StorageLocation?:array{Bucket?:string, Key?:string, RoleArn?:string, ObjectVersion?:string}}}>
     */
    public function createScriptAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GameLiftAwsAccountId:string, PeerVpcId:string} $args
     * @return \AWS\Result<array{VpcPeeringAuthorization?:array{GameLiftAwsAccountId?:string, PeerVpcAwsAccountId?:string, PeerVpcId?:string, CreationTime?:int|string|\DateTimeInterface, ExpirationTime?:int|string|\DateTimeInterface}}>
     */
    public function createVpcPeeringAuthorization(array $args): \AWS\Result { }

    /**
     * @param array{GameLiftAwsAccountId:string, PeerVpcId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VpcPeeringAuthorization?:array{GameLiftAwsAccountId?:string, PeerVpcAwsAccountId?:string, PeerVpcId?:string, CreationTime?:int|string|\DateTimeInterface, ExpirationTime?:int|string|\DateTimeInterface}}>
     */
    public function createVpcPeeringAuthorizationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId:string, PeerVpcAwsAccountId:string, PeerVpcId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function createVpcPeeringConnection(array $args): \AWS\Result { }

    /**
     * @param array{FleetId:string, PeerVpcAwsAccountId:string, PeerVpcId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createVpcPeeringConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AliasId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAlias(array $args): \AWS\Result { }

    /**
     * @param array{AliasId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAliasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BuildId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteBuild(array $args): \AWS\Result { }

    /**
     * @param array{BuildId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteBuildAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteContainerFleet(array $args): \AWS\Result { }

    /**
     * @param array{FleetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteContainerFleetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, VersionNumber?:int, VersionCountToRetain?:int} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteContainerGroupDefinition(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, VersionNumber?:int, VersionCountToRetain?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteContainerGroupDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteFleet(array $args): \AWS\Result { }

    /**
     * @param array{FleetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteFleetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId:string, Locations:array<string>} $args
     * @return \AWS\Result<array{FleetId?:string, FleetArn?:string, LocationStates?:array<array{Location?:string, Status?:"NEW"|"DOWNLOADING"|"VALIDATING"|"BUILDING"|"ACTIVATING"|"ACTIVE"|"DELETING"|"ERROR"|"TERMINATED"|"NOT_FOUND"}>}>
     */
    public function deleteFleetLocations(array $args): \AWS\Result { }

    /**
     * @param array{FleetId:string, Locations:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{FleetId?:string, FleetArn?:string, LocationStates?:array<array{Location?:string, Status?:"NEW"|"DOWNLOADING"|"VALIDATING"|"BUILDING"|"ACTIVATING"|"ACTIVE"|"DELETING"|"ERROR"|"TERMINATED"|"NOT_FOUND"}>}>
     */
    public function deleteFleetLocationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GameServerGroupName:string, DeleteOption?:"SAFE_DELETE"|"FORCE_DELETE"|"RETAIN"} $args
     * @return \AWS\Result<array{GameServerGroup?:array{GameServerGroupName?:string, GameServerGroupArn?:string, RoleArn?:string, InstanceDefinitions?:array<array{InstanceType:"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge", WeightedCapacity?:string}>, BalancingStrategy?:"SPOT_ONLY"|"SPOT_PREFERRED"|"ON_DEMAND_ONLY", GameServerProtectionPolicy?:"NO_PROTECTION"|"FULL_PROTECTION", AutoScalingGroupArn?:string, Status?:"NEW"|"ACTIVATING"|"ACTIVE"|"DELETE_SCHEDULED"|"DELETING"|"DELETED"|"ERROR", StatusReason?:string, SuspendedActions?:array<"REPLACE_INSTANCE_TYPES">, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface}}>
     */
    public function deleteGameServerGroup(array $args): \AWS\Result { }

    /**
     * @param array{GameServerGroupName:string, DeleteOption?:"SAFE_DELETE"|"FORCE_DELETE"|"RETAIN"} $args
     * @return \GuzzleHttp\Promise\Promise<array{GameServerGroup?:array{GameServerGroupName?:string, GameServerGroupArn?:string, RoleArn?:string, InstanceDefinitions?:array<array{InstanceType:"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge", WeightedCapacity?:string}>, BalancingStrategy?:"SPOT_ONLY"|"SPOT_PREFERRED"|"ON_DEMAND_ONLY", GameServerProtectionPolicy?:"NO_PROTECTION"|"FULL_PROTECTION", AutoScalingGroupArn?:string, Status?:"NEW"|"ACTIVATING"|"ACTIVE"|"DELETE_SCHEDULED"|"DELETING"|"DELETED"|"ERROR", StatusReason?:string, SuspendedActions?:array<"REPLACE_INSTANCE_TYPES">, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface}}>
     */
    public function deleteGameServerGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteGameSessionQueue(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteGameSessionQueueAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LocationName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteLocation(array $args): \AWS\Result { }

    /**
     * @param array{LocationName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteLocationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteMatchmakingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteMatchmakingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteMatchmakingRuleSet(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteMatchmakingRuleSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, FleetId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteScalingPolicy(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, FleetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteScalingPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ScriptId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteScript(array $args): \AWS\Result { }

    /**
     * @param array{ScriptId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteScriptAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GameLiftAwsAccountId:string, PeerVpcId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteVpcPeeringAuthorization(array $args): \AWS\Result { }

    /**
     * @param array{GameLiftAwsAccountId:string, PeerVpcId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteVpcPeeringAuthorizationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId:string, VpcPeeringConnectionId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteVpcPeeringConnection(array $args): \AWS\Result { }

    /**
     * @param array{FleetId:string, VpcPeeringConnectionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteVpcPeeringConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId:string, ComputeName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deregisterCompute(array $args): \AWS\Result { }

    /**
     * @param array{FleetId:string, ComputeName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deregisterComputeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GameServerGroupName:string, GameServerId:string} $args
     * @return \AWS\Result<void>
     */
    public function deregisterGameServer(array $args): \AWS\Result { }

    /**
     * @param array{GameServerGroupName:string, GameServerId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deregisterGameServerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AliasId:string} $args
     * @return \AWS\Result<array{Alias?:array{AliasId?:string, Name?:string, AliasArn?:string, Description?:string, RoutingStrategy?:array{Type?:"SIMPLE"|"TERMINAL", FleetId?:string, Message?:string}, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface}}>
     */
    public function describeAlias(array $args): \AWS\Result { }

    /**
     * @param array{AliasId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Alias?:array{AliasId?:string, Name?:string, AliasArn?:string, Description?:string, RoutingStrategy?:array{Type?:"SIMPLE"|"TERMINAL", FleetId?:string, Message?:string}, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface}}>
     */
    public function describeAliasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BuildId:string} $args
     * @return \AWS\Result<array{Build?:array{BuildId?:string, BuildArn?:string, Name?:string, Version?:string, Status?:"INITIALIZED"|"READY"|"FAILED", SizeOnDisk?:int, OperatingSystem?:"WINDOWS_2012"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"WINDOWS_2016"|"AMAZON_LINUX_2023", CreationTime?:int|string|\DateTimeInterface, ServerSdkVersion?:string}}>
     */
    public function describeBuild(array $args): \AWS\Result { }

    /**
     * @param array{BuildId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Build?:array{BuildId?:string, BuildArn?:string, Name?:string, Version?:string, Status?:"INITIALIZED"|"READY"|"FAILED", SizeOnDisk?:int, OperatingSystem?:"WINDOWS_2012"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"WINDOWS_2016"|"AMAZON_LINUX_2023", CreationTime?:int|string|\DateTimeInterface, ServerSdkVersion?:string}}>
     */
    public function describeBuildAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId:string, ComputeName:string} $args
     * @return \AWS\Result<array{Compute?:array{FleetId?:string, FleetArn?:string, ComputeName?:string, ComputeArn?:string, IpAddress?:string, DnsName?:string, ComputeStatus?:"PENDING"|"ACTIVE"|"TERMINATING"|"IMPAIRED", Location?:string, CreationTime?:int|string|\DateTimeInterface, OperatingSystem?:"WINDOWS_2012"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"WINDOWS_2016"|"AMAZON_LINUX_2023", Type?:"t2.micro"|"t2.small"|"t2.medium"|"t2.large"|"c3.large"|"c3.xlarge"|"c3.2xlarge"|"c3.4xlarge"|"c3.8xlarge"|"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"r3.large"|"r3.xlarge"|"r3.2xlarge"|"r3.4xlarge"|"r3.8xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"m3.medium"|"m3.large"|"m3.xlarge"|"m3.2xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"c5d.large"|"c5d.xlarge"|"c5d.2xlarge"|"c5d.4xlarge"|"c5d.9xlarge"|"c5d.12xlarge"|"c5d.18xlarge"|"c5d.24xlarge"|"c6a.large"|"c6a.xlarge"|"c6a.2xlarge"|"c6a.4xlarge"|"c6a.8xlarge"|"c6a.12xlarge"|"c6a.16xlarge"|"c6a.24xlarge"|"c6i.large"|"c6i.xlarge"|"c6i.2xlarge"|"c6i.4xlarge"|"c6i.8xlarge"|"c6i.12xlarge"|"c6i.16xlarge"|"c6i.24xlarge"|"r5d.large"|"r5d.xlarge"|"r5d.2xlarge"|"r5d.4xlarge"|"r5d.8xlarge"|"r5d.12xlarge"|"r5d.16xlarge"|"r5d.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"c6gn.medium"|"c6gn.large"|"c6gn.xlarge"|"c6gn.2xlarge"|"c6gn.4xlarge"|"c6gn.8xlarge"|"c6gn.12xlarge"|"c6gn.16xlarge"|"c7g.medium"|"c7g.large"|"c7g.xlarge"|"c7g.2xlarge"|"c7g.4xlarge"|"c7g.8xlarge"|"c7g.12xlarge"|"c7g.16xlarge"|"r7g.medium"|"r7g.large"|"r7g.xlarge"|"r7g.2xlarge"|"r7g.4xlarge"|"r7g.8xlarge"|"r7g.12xlarge"|"r7g.16xlarge"|"m7g.medium"|"m7g.large"|"m7g.xlarge"|"m7g.2xlarge"|"m7g.4xlarge"|"m7g.8xlarge"|"m7g.12xlarge"|"m7g.16xlarge"|"g5g.xlarge"|"g5g.2xlarge"|"g5g.4xlarge"|"g5g.8xlarge"|"g5g.16xlarge", GameLiftServiceSdkEndpoint?:string, GameLiftAgentEndpoint?:string, InstanceId?:string, ContainerAttributes?:array<array{ContainerName?:string, ContainerRuntimeId?:string}>, GameServerContainerGroupDefinitionArn?:string}}>
     */
    public function describeCompute(array $args): \AWS\Result { }

    /**
     * @param array{FleetId:string, ComputeName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Compute?:array{FleetId?:string, FleetArn?:string, ComputeName?:string, ComputeArn?:string, IpAddress?:string, DnsName?:string, ComputeStatus?:"PENDING"|"ACTIVE"|"TERMINATING"|"IMPAIRED", Location?:string, CreationTime?:int|string|\DateTimeInterface, OperatingSystem?:"WINDOWS_2012"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"WINDOWS_2016"|"AMAZON_LINUX_2023", Type?:"t2.micro"|"t2.small"|"t2.medium"|"t2.large"|"c3.large"|"c3.xlarge"|"c3.2xlarge"|"c3.4xlarge"|"c3.8xlarge"|"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"r3.large"|"r3.xlarge"|"r3.2xlarge"|"r3.4xlarge"|"r3.8xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"m3.medium"|"m3.large"|"m3.xlarge"|"m3.2xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"c5d.large"|"c5d.xlarge"|"c5d.2xlarge"|"c5d.4xlarge"|"c5d.9xlarge"|"c5d.12xlarge"|"c5d.18xlarge"|"c5d.24xlarge"|"c6a.large"|"c6a.xlarge"|"c6a.2xlarge"|"c6a.4xlarge"|"c6a.8xlarge"|"c6a.12xlarge"|"c6a.16xlarge"|"c6a.24xlarge"|"c6i.large"|"c6i.xlarge"|"c6i.2xlarge"|"c6i.4xlarge"|"c6i.8xlarge"|"c6i.12xlarge"|"c6i.16xlarge"|"c6i.24xlarge"|"r5d.large"|"r5d.xlarge"|"r5d.2xlarge"|"r5d.4xlarge"|"r5d.8xlarge"|"r5d.12xlarge"|"r5d.16xlarge"|"r5d.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"c6gn.medium"|"c6gn.large"|"c6gn.xlarge"|"c6gn.2xlarge"|"c6gn.4xlarge"|"c6gn.8xlarge"|"c6gn.12xlarge"|"c6gn.16xlarge"|"c7g.medium"|"c7g.large"|"c7g.xlarge"|"c7g.2xlarge"|"c7g.4xlarge"|"c7g.8xlarge"|"c7g.12xlarge"|"c7g.16xlarge"|"r7g.medium"|"r7g.large"|"r7g.xlarge"|"r7g.2xlarge"|"r7g.4xlarge"|"r7g.8xlarge"|"r7g.12xlarge"|"r7g.16xlarge"|"m7g.medium"|"m7g.large"|"m7g.xlarge"|"m7g.2xlarge"|"m7g.4xlarge"|"m7g.8xlarge"|"m7g.12xlarge"|"m7g.16xlarge"|"g5g.xlarge"|"g5g.2xlarge"|"g5g.4xlarge"|"g5g.8xlarge"|"g5g.16xlarge", GameLiftServiceSdkEndpoint?:string, GameLiftAgentEndpoint?:string, InstanceId?:string, ContainerAttributes?:array<array{ContainerName?:string, ContainerRuntimeId?:string}>, GameServerContainerGroupDefinitionArn?:string}}>
     */
    public function describeComputeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId:string} $args
     * @return \AWS\Result<array{ContainerFleet?:array{FleetId?:string, FleetArn?:string, FleetRoleArn?:string, GameServerContainerGroupDefinitionName?:string, GameServerContainerGroupDefinitionArn?:string, PerInstanceContainerGroupDefinitionName?:string, PerInstanceContainerGroupDefinitionArn?:string, InstanceConnectionPortRange?:array{FromPort:int, ToPort:int}, InstanceInboundPermissions?:array<array{FromPort:int, ToPort:int, IpRange:string, Protocol:"TCP"|"UDP"}>, GameServerContainerGroupsPerInstance?:int, MaximumGameServerContainerGroupsPerInstance?:int, InstanceType?:string, BillingType?:"ON_DEMAND"|"SPOT", Description?:string, CreationTime?:int|string|\DateTimeInterface, MetricGroups?:array<string>, NewGameSessionProtectionPolicy?:"NoProtection"|"FullProtection", GameSessionCreationLimitPolicy?:array{NewGameSessionsPerCreator?:int, PolicyPeriodInMinutes?:int}, Status?:"PENDING"|"CREATING"|"CREATED"|"ACTIVATING"|"ACTIVE"|"UPDATING"|"DELETING", DeploymentDetails?:array{LatestDeploymentId?:string}, LogConfiguration?:array{LogDestination?:"NONE"|"CLOUDWATCH"|"S3", S3BucketName?:string, LogGroupArn?:string}, LocationAttributes?:array<array{Location?:string, Status?:"PENDING"|"CREATING"|"CREATED"|"ACTIVATING"|"ACTIVE"|"UPDATING"|"DELETING"}>}}>
     */
    public function describeContainerFleet(array $args): \AWS\Result { }

    /**
     * @param array{FleetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContainerFleet?:array{FleetId?:string, FleetArn?:string, FleetRoleArn?:string, GameServerContainerGroupDefinitionName?:string, GameServerContainerGroupDefinitionArn?:string, PerInstanceContainerGroupDefinitionName?:string, PerInstanceContainerGroupDefinitionArn?:string, InstanceConnectionPortRange?:array{FromPort:int, ToPort:int}, InstanceInboundPermissions?:array<array{FromPort:int, ToPort:int, IpRange:string, Protocol:"TCP"|"UDP"}>, GameServerContainerGroupsPerInstance?:int, MaximumGameServerContainerGroupsPerInstance?:int, InstanceType?:string, BillingType?:"ON_DEMAND"|"SPOT", Description?:string, CreationTime?:int|string|\DateTimeInterface, MetricGroups?:array<string>, NewGameSessionProtectionPolicy?:"NoProtection"|"FullProtection", GameSessionCreationLimitPolicy?:array{NewGameSessionsPerCreator?:int, PolicyPeriodInMinutes?:int}, Status?:"PENDING"|"CREATING"|"CREATED"|"ACTIVATING"|"ACTIVE"|"UPDATING"|"DELETING", DeploymentDetails?:array{LatestDeploymentId?:string}, LogConfiguration?:array{LogDestination?:"NONE"|"CLOUDWATCH"|"S3", S3BucketName?:string, LogGroupArn?:string}, LocationAttributes?:array<array{Location?:string, Status?:"PENDING"|"CREATING"|"CREATED"|"ACTIVATING"|"ACTIVE"|"UPDATING"|"DELETING"}>}}>
     */
    public function describeContainerFleetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, VersionNumber?:int} $args
     * @return \AWS\Result<array{ContainerGroupDefinition?:array{ContainerGroupDefinitionArn?:string, CreationTime?:int|string|\DateTimeInterface, OperatingSystem?:"AMAZON_LINUX_2023", Name:string, ContainerGroupType?:"GAME_SERVER"|"PER_INSTANCE", TotalMemoryLimitMebibytes?:int, TotalVcpuLimit?:float, GameServerContainerDefinition?:array{ContainerName?:string, DependsOn?:array<array{ContainerName:string, Condition:"START"|"COMPLETE"|"SUCCESS"|"HEALTHY"}>, MountPoints?:array<array{InstancePath:string, ContainerPath?:string, AccessLevel?:"READ_ONLY"|"READ_AND_WRITE"}>, EnvironmentOverride?:array<array{Name:string, Value:string}>, ImageUri?:string, PortConfiguration?:array{ContainerPortRanges:array<array{FromPort:int, ToPort:int, Protocol:"TCP"|"UDP"}>}, ResolvedImageDigest?:string, ServerSdkVersion?:string}, SupportContainerDefinitions?:array<array{ContainerName?:string, DependsOn?:array<array{ContainerName:string, Condition:"START"|"COMPLETE"|"SUCCESS"|"HEALTHY"}>, MountPoints?:array<array{InstancePath:string, ContainerPath?:string, AccessLevel?:"READ_ONLY"|"READ_AND_WRITE"}>, EnvironmentOverride?:array<array{Name:string, Value:string}>, Essential?:bool, HealthCheck?:array{Command:array<string>, Interval?:int, Retries?:int, StartPeriod?:int, Timeout?:int}, ImageUri?:string, MemoryHardLimitMebibytes?:int, PortConfiguration?:array{ContainerPortRanges:array<array{FromPort:int, ToPort:int, Protocol:"TCP"|"UDP"}>}, ResolvedImageDigest?:string, Vcpu?:float}>, VersionNumber?:int, VersionDescription?:string, Status?:"READY"|"COPYING"|"FAILED", StatusReason?:string}}>
     */
    public function describeContainerGroupDefinition(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, VersionNumber?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContainerGroupDefinition?:array{ContainerGroupDefinitionArn?:string, CreationTime?:int|string|\DateTimeInterface, OperatingSystem?:"AMAZON_LINUX_2023", Name:string, ContainerGroupType?:"GAME_SERVER"|"PER_INSTANCE", TotalMemoryLimitMebibytes?:int, TotalVcpuLimit?:float, GameServerContainerDefinition?:array{ContainerName?:string, DependsOn?:array<array{ContainerName:string, Condition:"START"|"COMPLETE"|"SUCCESS"|"HEALTHY"}>, MountPoints?:array<array{InstancePath:string, ContainerPath?:string, AccessLevel?:"READ_ONLY"|"READ_AND_WRITE"}>, EnvironmentOverride?:array<array{Name:string, Value:string}>, ImageUri?:string, PortConfiguration?:array{ContainerPortRanges:array<array{FromPort:int, ToPort:int, Protocol:"TCP"|"UDP"}>}, ResolvedImageDigest?:string, ServerSdkVersion?:string}, SupportContainerDefinitions?:array<array{ContainerName?:string, DependsOn?:array<array{ContainerName:string, Condition:"START"|"COMPLETE"|"SUCCESS"|"HEALTHY"}>, MountPoints?:array<array{InstancePath:string, ContainerPath?:string, AccessLevel?:"READ_ONLY"|"READ_AND_WRITE"}>, EnvironmentOverride?:array<array{Name:string, Value:string}>, Essential?:bool, HealthCheck?:array{Command:array<string>, Interval?:int, Retries?:int, StartPeriod?:int, Timeout?:int}, ImageUri?:string, MemoryHardLimitMebibytes?:int, PortConfiguration?:array{ContainerPortRanges:array<array{FromPort:int, ToPort:int, Protocol:"TCP"|"UDP"}>}, ResolvedImageDigest?:string, Vcpu?:float}>, VersionNumber?:int, VersionDescription?:string, Status?:"READY"|"COPYING"|"FAILED", StatusReason?:string}}>
     */
    public function describeContainerGroupDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EC2InstanceType?:"t2.micro"|"t2.small"|"t2.medium"|"t2.large"|"c3.large"|"c3.xlarge"|"c3.2xlarge"|"c3.4xlarge"|"c3.8xlarge"|"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"r3.large"|"r3.xlarge"|"r3.2xlarge"|"r3.4xlarge"|"r3.8xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"m3.medium"|"m3.large"|"m3.xlarge"|"m3.2xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"c5d.large"|"c5d.xlarge"|"c5d.2xlarge"|"c5d.4xlarge"|"c5d.9xlarge"|"c5d.12xlarge"|"c5d.18xlarge"|"c5d.24xlarge"|"c6a.large"|"c6a.xlarge"|"c6a.2xlarge"|"c6a.4xlarge"|"c6a.8xlarge"|"c6a.12xlarge"|"c6a.16xlarge"|"c6a.24xlarge"|"c6i.large"|"c6i.xlarge"|"c6i.2xlarge"|"c6i.4xlarge"|"c6i.8xlarge"|"c6i.12xlarge"|"c6i.16xlarge"|"c6i.24xlarge"|"r5d.large"|"r5d.xlarge"|"r5d.2xlarge"|"r5d.4xlarge"|"r5d.8xlarge"|"r5d.12xlarge"|"r5d.16xlarge"|"r5d.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"c6gn.medium"|"c6gn.large"|"c6gn.xlarge"|"c6gn.2xlarge"|"c6gn.4xlarge"|"c6gn.8xlarge"|"c6gn.12xlarge"|"c6gn.16xlarge"|"c7g.medium"|"c7g.large"|"c7g.xlarge"|"c7g.2xlarge"|"c7g.4xlarge"|"c7g.8xlarge"|"c7g.12xlarge"|"c7g.16xlarge"|"r7g.medium"|"r7g.large"|"r7g.xlarge"|"r7g.2xlarge"|"r7g.4xlarge"|"r7g.8xlarge"|"r7g.12xlarge"|"r7g.16xlarge"|"m7g.medium"|"m7g.large"|"m7g.xlarge"|"m7g.2xlarge"|"m7g.4xlarge"|"m7g.8xlarge"|"m7g.12xlarge"|"m7g.16xlarge"|"g5g.xlarge"|"g5g.2xlarge"|"g5g.4xlarge"|"g5g.8xlarge"|"g5g.16xlarge", Location?:string} $args
     * @return \AWS\Result<array{EC2InstanceLimits?:array<array{EC2InstanceType?:"t2.micro"|"t2.small"|"t2.medium"|"t2.large"|"c3.large"|"c3.xlarge"|"c3.2xlarge"|"c3.4xlarge"|"c3.8xlarge"|"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"r3.large"|"r3.xlarge"|"r3.2xlarge"|"r3.4xlarge"|"r3.8xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"m3.medium"|"m3.large"|"m3.xlarge"|"m3.2xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"c5d.large"|"c5d.xlarge"|"c5d.2xlarge"|"c5d.4xlarge"|"c5d.9xlarge"|"c5d.12xlarge"|"c5d.18xlarge"|"c5d.24xlarge"|"c6a.large"|"c6a.xlarge"|"c6a.2xlarge"|"c6a.4xlarge"|"c6a.8xlarge"|"c6a.12xlarge"|"c6a.16xlarge"|"c6a.24xlarge"|"c6i.large"|"c6i.xlarge"|"c6i.2xlarge"|"c6i.4xlarge"|"c6i.8xlarge"|"c6i.12xlarge"|"c6i.16xlarge"|"c6i.24xlarge"|"r5d.large"|"r5d.xlarge"|"r5d.2xlarge"|"r5d.4xlarge"|"r5d.8xlarge"|"r5d.12xlarge"|"r5d.16xlarge"|"r5d.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"c6gn.medium"|"c6gn.large"|"c6gn.xlarge"|"c6gn.2xlarge"|"c6gn.4xlarge"|"c6gn.8xlarge"|"c6gn.12xlarge"|"c6gn.16xlarge"|"c7g.medium"|"c7g.large"|"c7g.xlarge"|"c7g.2xlarge"|"c7g.4xlarge"|"c7g.8xlarge"|"c7g.12xlarge"|"c7g.16xlarge"|"r7g.medium"|"r7g.large"|"r7g.xlarge"|"r7g.2xlarge"|"r7g.4xlarge"|"r7g.8xlarge"|"r7g.12xlarge"|"r7g.16xlarge"|"m7g.medium"|"m7g.large"|"m7g.xlarge"|"m7g.2xlarge"|"m7g.4xlarge"|"m7g.8xlarge"|"m7g.12xlarge"|"m7g.16xlarge"|"g5g.xlarge"|"g5g.2xlarge"|"g5g.4xlarge"|"g5g.8xlarge"|"g5g.16xlarge", CurrentInstances?:int, InstanceLimit?:int, Location?:string}>}>
     */
    public function describeEC2InstanceLimits(array $args = []): \AWS\Result { }

    /**
     * @param array{EC2InstanceType?:"t2.micro"|"t2.small"|"t2.medium"|"t2.large"|"c3.large"|"c3.xlarge"|"c3.2xlarge"|"c3.4xlarge"|"c3.8xlarge"|"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"r3.large"|"r3.xlarge"|"r3.2xlarge"|"r3.4xlarge"|"r3.8xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"m3.medium"|"m3.large"|"m3.xlarge"|"m3.2xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"c5d.large"|"c5d.xlarge"|"c5d.2xlarge"|"c5d.4xlarge"|"c5d.9xlarge"|"c5d.12xlarge"|"c5d.18xlarge"|"c5d.24xlarge"|"c6a.large"|"c6a.xlarge"|"c6a.2xlarge"|"c6a.4xlarge"|"c6a.8xlarge"|"c6a.12xlarge"|"c6a.16xlarge"|"c6a.24xlarge"|"c6i.large"|"c6i.xlarge"|"c6i.2xlarge"|"c6i.4xlarge"|"c6i.8xlarge"|"c6i.12xlarge"|"c6i.16xlarge"|"c6i.24xlarge"|"r5d.large"|"r5d.xlarge"|"r5d.2xlarge"|"r5d.4xlarge"|"r5d.8xlarge"|"r5d.12xlarge"|"r5d.16xlarge"|"r5d.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"c6gn.medium"|"c6gn.large"|"c6gn.xlarge"|"c6gn.2xlarge"|"c6gn.4xlarge"|"c6gn.8xlarge"|"c6gn.12xlarge"|"c6gn.16xlarge"|"c7g.medium"|"c7g.large"|"c7g.xlarge"|"c7g.2xlarge"|"c7g.4xlarge"|"c7g.8xlarge"|"c7g.12xlarge"|"c7g.16xlarge"|"r7g.medium"|"r7g.large"|"r7g.xlarge"|"r7g.2xlarge"|"r7g.4xlarge"|"r7g.8xlarge"|"r7g.12xlarge"|"r7g.16xlarge"|"m7g.medium"|"m7g.large"|"m7g.xlarge"|"m7g.2xlarge"|"m7g.4xlarge"|"m7g.8xlarge"|"m7g.12xlarge"|"m7g.16xlarge"|"g5g.xlarge"|"g5g.2xlarge"|"g5g.4xlarge"|"g5g.8xlarge"|"g5g.16xlarge", Location?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EC2InstanceLimits?:array<array{EC2InstanceType?:"t2.micro"|"t2.small"|"t2.medium"|"t2.large"|"c3.large"|"c3.xlarge"|"c3.2xlarge"|"c3.4xlarge"|"c3.8xlarge"|"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"r3.large"|"r3.xlarge"|"r3.2xlarge"|"r3.4xlarge"|"r3.8xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"m3.medium"|"m3.large"|"m3.xlarge"|"m3.2xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"c5d.large"|"c5d.xlarge"|"c5d.2xlarge"|"c5d.4xlarge"|"c5d.9xlarge"|"c5d.12xlarge"|"c5d.18xlarge"|"c5d.24xlarge"|"c6a.large"|"c6a.xlarge"|"c6a.2xlarge"|"c6a.4xlarge"|"c6a.8xlarge"|"c6a.12xlarge"|"c6a.16xlarge"|"c6a.24xlarge"|"c6i.large"|"c6i.xlarge"|"c6i.2xlarge"|"c6i.4xlarge"|"c6i.8xlarge"|"c6i.12xlarge"|"c6i.16xlarge"|"c6i.24xlarge"|"r5d.large"|"r5d.xlarge"|"r5d.2xlarge"|"r5d.4xlarge"|"r5d.8xlarge"|"r5d.12xlarge"|"r5d.16xlarge"|"r5d.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"c6gn.medium"|"c6gn.large"|"c6gn.xlarge"|"c6gn.2xlarge"|"c6gn.4xlarge"|"c6gn.8xlarge"|"c6gn.12xlarge"|"c6gn.16xlarge"|"c7g.medium"|"c7g.large"|"c7g.xlarge"|"c7g.2xlarge"|"c7g.4xlarge"|"c7g.8xlarge"|"c7g.12xlarge"|"c7g.16xlarge"|"r7g.medium"|"r7g.large"|"r7g.xlarge"|"r7g.2xlarge"|"r7g.4xlarge"|"r7g.8xlarge"|"r7g.12xlarge"|"r7g.16xlarge"|"m7g.medium"|"m7g.large"|"m7g.xlarge"|"m7g.2xlarge"|"m7g.4xlarge"|"m7g.8xlarge"|"m7g.12xlarge"|"m7g.16xlarge"|"g5g.xlarge"|"g5g.2xlarge"|"g5g.4xlarge"|"g5g.8xlarge"|"g5g.16xlarge", CurrentInstances?:int, InstanceLimit?:int, Location?:string}>}>
     */
    public function describeEC2InstanceLimitsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetIds?:array<string>, Limit?:int, NextToken?:string} $args
     * @return \AWS\Result<array{FleetAttributes?:array<array{FleetId?:string, FleetArn?:string, FleetType?:"ON_DEMAND"|"SPOT", InstanceType?:"t2.micro"|"t2.small"|"t2.medium"|"t2.large"|"c3.large"|"c3.xlarge"|"c3.2xlarge"|"c3.4xlarge"|"c3.8xlarge"|"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"r3.large"|"r3.xlarge"|"r3.2xlarge"|"r3.4xlarge"|"r3.8xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"m3.medium"|"m3.large"|"m3.xlarge"|"m3.2xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"c5d.large"|"c5d.xlarge"|"c5d.2xlarge"|"c5d.4xlarge"|"c5d.9xlarge"|"c5d.12xlarge"|"c5d.18xlarge"|"c5d.24xlarge"|"c6a.large"|"c6a.xlarge"|"c6a.2xlarge"|"c6a.4xlarge"|"c6a.8xlarge"|"c6a.12xlarge"|"c6a.16xlarge"|"c6a.24xlarge"|"c6i.large"|"c6i.xlarge"|"c6i.2xlarge"|"c6i.4xlarge"|"c6i.8xlarge"|"c6i.12xlarge"|"c6i.16xlarge"|"c6i.24xlarge"|"r5d.large"|"r5d.xlarge"|"r5d.2xlarge"|"r5d.4xlarge"|"r5d.8xlarge"|"r5d.12xlarge"|"r5d.16xlarge"|"r5d.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"c6gn.medium"|"c6gn.large"|"c6gn.xlarge"|"c6gn.2xlarge"|"c6gn.4xlarge"|"c6gn.8xlarge"|"c6gn.12xlarge"|"c6gn.16xlarge"|"c7g.medium"|"c7g.large"|"c7g.xlarge"|"c7g.2xlarge"|"c7g.4xlarge"|"c7g.8xlarge"|"c7g.12xlarge"|"c7g.16xlarge"|"r7g.medium"|"r7g.large"|"r7g.xlarge"|"r7g.2xlarge"|"r7g.4xlarge"|"r7g.8xlarge"|"r7g.12xlarge"|"r7g.16xlarge"|"m7g.medium"|"m7g.large"|"m7g.xlarge"|"m7g.2xlarge"|"m7g.4xlarge"|"m7g.8xlarge"|"m7g.12xlarge"|"m7g.16xlarge"|"g5g.xlarge"|"g5g.2xlarge"|"g5g.4xlarge"|"g5g.8xlarge"|"g5g.16xlarge", Description?:string, Name?:string, CreationTime?:int|string|\DateTimeInterface, TerminationTime?:int|string|\DateTimeInterface, Status?:"NEW"|"DOWNLOADING"|"VALIDATING"|"BUILDING"|"ACTIVATING"|"ACTIVE"|"DELETING"|"ERROR"|"TERMINATED"|"NOT_FOUND", BuildId?:string, BuildArn?:string, ScriptId?:string, ScriptArn?:string, ServerLaunchPath?:string, ServerLaunchParameters?:string, LogPaths?:array<string>, NewGameSessionProtectionPolicy?:"NoProtection"|"FullProtection", OperatingSystem?:"WINDOWS_2012"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"WINDOWS_2016"|"AMAZON_LINUX_2023", ResourceCreationLimitPolicy?:array{NewGameSessionsPerCreator?:int, PolicyPeriodInMinutes?:int}, MetricGroups?:array<string>, StoppedActions?:array<"AUTO_SCALING">, InstanceRoleArn?:string, CertificateConfiguration?:array{CertificateType:"DISABLED"|"GENERATED"}, ComputeType?:"EC2"|"ANYWHERE", AnywhereConfiguration?:array{Cost:string}, InstanceRoleCredentialsProvider?:"SHARED_CREDENTIAL_FILE"}>, NextToken?:string}>
     */
    public function describeFleetAttributes(array $args = []): \AWS\Result { }

    /**
     * @param array{FleetIds?:array<string>, Limit?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FleetAttributes?:array<array{FleetId?:string, FleetArn?:string, FleetType?:"ON_DEMAND"|"SPOT", InstanceType?:"t2.micro"|"t2.small"|"t2.medium"|"t2.large"|"c3.large"|"c3.xlarge"|"c3.2xlarge"|"c3.4xlarge"|"c3.8xlarge"|"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"r3.large"|"r3.xlarge"|"r3.2xlarge"|"r3.4xlarge"|"r3.8xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"m3.medium"|"m3.large"|"m3.xlarge"|"m3.2xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"c5d.large"|"c5d.xlarge"|"c5d.2xlarge"|"c5d.4xlarge"|"c5d.9xlarge"|"c5d.12xlarge"|"c5d.18xlarge"|"c5d.24xlarge"|"c6a.large"|"c6a.xlarge"|"c6a.2xlarge"|"c6a.4xlarge"|"c6a.8xlarge"|"c6a.12xlarge"|"c6a.16xlarge"|"c6a.24xlarge"|"c6i.large"|"c6i.xlarge"|"c6i.2xlarge"|"c6i.4xlarge"|"c6i.8xlarge"|"c6i.12xlarge"|"c6i.16xlarge"|"c6i.24xlarge"|"r5d.large"|"r5d.xlarge"|"r5d.2xlarge"|"r5d.4xlarge"|"r5d.8xlarge"|"r5d.12xlarge"|"r5d.16xlarge"|"r5d.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"c6gn.medium"|"c6gn.large"|"c6gn.xlarge"|"c6gn.2xlarge"|"c6gn.4xlarge"|"c6gn.8xlarge"|"c6gn.12xlarge"|"c6gn.16xlarge"|"c7g.medium"|"c7g.large"|"c7g.xlarge"|"c7g.2xlarge"|"c7g.4xlarge"|"c7g.8xlarge"|"c7g.12xlarge"|"c7g.16xlarge"|"r7g.medium"|"r7g.large"|"r7g.xlarge"|"r7g.2xlarge"|"r7g.4xlarge"|"r7g.8xlarge"|"r7g.12xlarge"|"r7g.16xlarge"|"m7g.medium"|"m7g.large"|"m7g.xlarge"|"m7g.2xlarge"|"m7g.4xlarge"|"m7g.8xlarge"|"m7g.12xlarge"|"m7g.16xlarge"|"g5g.xlarge"|"g5g.2xlarge"|"g5g.4xlarge"|"g5g.8xlarge"|"g5g.16xlarge", Description?:string, Name?:string, CreationTime?:int|string|\DateTimeInterface, TerminationTime?:int|string|\DateTimeInterface, Status?:"NEW"|"DOWNLOADING"|"VALIDATING"|"BUILDING"|"ACTIVATING"|"ACTIVE"|"DELETING"|"ERROR"|"TERMINATED"|"NOT_FOUND", BuildId?:string, BuildArn?:string, ScriptId?:string, ScriptArn?:string, ServerLaunchPath?:string, ServerLaunchParameters?:string, LogPaths?:array<string>, NewGameSessionProtectionPolicy?:"NoProtection"|"FullProtection", OperatingSystem?:"WINDOWS_2012"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"WINDOWS_2016"|"AMAZON_LINUX_2023", ResourceCreationLimitPolicy?:array{NewGameSessionsPerCreator?:int, PolicyPeriodInMinutes?:int}, MetricGroups?:array<string>, StoppedActions?:array<"AUTO_SCALING">, InstanceRoleArn?:string, CertificateConfiguration?:array{CertificateType:"DISABLED"|"GENERATED"}, ComputeType?:"EC2"|"ANYWHERE", AnywhereConfiguration?:array{Cost:string}, InstanceRoleCredentialsProvider?:"SHARED_CREDENTIAL_FILE"}>, NextToken?:string}>
     */
    public function describeFleetAttributesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetIds?:array<string>, Limit?:int, NextToken?:string} $args
     * @return \AWS\Result<array{FleetCapacity?:array<array{FleetId?:string, FleetArn?:string, InstanceType?:"t2.micro"|"t2.small"|"t2.medium"|"t2.large"|"c3.large"|"c3.xlarge"|"c3.2xlarge"|"c3.4xlarge"|"c3.8xlarge"|"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"r3.large"|"r3.xlarge"|"r3.2xlarge"|"r3.4xlarge"|"r3.8xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"m3.medium"|"m3.large"|"m3.xlarge"|"m3.2xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"c5d.large"|"c5d.xlarge"|"c5d.2xlarge"|"c5d.4xlarge"|"c5d.9xlarge"|"c5d.12xlarge"|"c5d.18xlarge"|"c5d.24xlarge"|"c6a.large"|"c6a.xlarge"|"c6a.2xlarge"|"c6a.4xlarge"|"c6a.8xlarge"|"c6a.12xlarge"|"c6a.16xlarge"|"c6a.24xlarge"|"c6i.large"|"c6i.xlarge"|"c6i.2xlarge"|"c6i.4xlarge"|"c6i.8xlarge"|"c6i.12xlarge"|"c6i.16xlarge"|"c6i.24xlarge"|"r5d.large"|"r5d.xlarge"|"r5d.2xlarge"|"r5d.4xlarge"|"r5d.8xlarge"|"r5d.12xlarge"|"r5d.16xlarge"|"r5d.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"c6gn.medium"|"c6gn.large"|"c6gn.xlarge"|"c6gn.2xlarge"|"c6gn.4xlarge"|"c6gn.8xlarge"|"c6gn.12xlarge"|"c6gn.16xlarge"|"c7g.medium"|"c7g.large"|"c7g.xlarge"|"c7g.2xlarge"|"c7g.4xlarge"|"c7g.8xlarge"|"c7g.12xlarge"|"c7g.16xlarge"|"r7g.medium"|"r7g.large"|"r7g.xlarge"|"r7g.2xlarge"|"r7g.4xlarge"|"r7g.8xlarge"|"r7g.12xlarge"|"r7g.16xlarge"|"m7g.medium"|"m7g.large"|"m7g.xlarge"|"m7g.2xlarge"|"m7g.4xlarge"|"m7g.8xlarge"|"m7g.12xlarge"|"m7g.16xlarge"|"g5g.xlarge"|"g5g.2xlarge"|"g5g.4xlarge"|"g5g.8xlarge"|"g5g.16xlarge", InstanceCounts?:array{DESIRED?:int, MINIMUM?:int, MAXIMUM?:int, PENDING?:int, ACTIVE?:int, IDLE?:int, TERMINATING?:int}, Location?:string, GameServerContainerGroupCounts?:array{PENDING?:int, ACTIVE?:int, IDLE?:int, TERMINATING?:int}}>, NextToken?:string}>
     */
    public function describeFleetCapacity(array $args = []): \AWS\Result { }

    /**
     * @param array{FleetIds?:array<string>, Limit?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FleetCapacity?:array<array{FleetId?:string, FleetArn?:string, InstanceType?:"t2.micro"|"t2.small"|"t2.medium"|"t2.large"|"c3.large"|"c3.xlarge"|"c3.2xlarge"|"c3.4xlarge"|"c3.8xlarge"|"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"r3.large"|"r3.xlarge"|"r3.2xlarge"|"r3.4xlarge"|"r3.8xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"m3.medium"|"m3.large"|"m3.xlarge"|"m3.2xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"c5d.large"|"c5d.xlarge"|"c5d.2xlarge"|"c5d.4xlarge"|"c5d.9xlarge"|"c5d.12xlarge"|"c5d.18xlarge"|"c5d.24xlarge"|"c6a.large"|"c6a.xlarge"|"c6a.2xlarge"|"c6a.4xlarge"|"c6a.8xlarge"|"c6a.12xlarge"|"c6a.16xlarge"|"c6a.24xlarge"|"c6i.large"|"c6i.xlarge"|"c6i.2xlarge"|"c6i.4xlarge"|"c6i.8xlarge"|"c6i.12xlarge"|"c6i.16xlarge"|"c6i.24xlarge"|"r5d.large"|"r5d.xlarge"|"r5d.2xlarge"|"r5d.4xlarge"|"r5d.8xlarge"|"r5d.12xlarge"|"r5d.16xlarge"|"r5d.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"c6gn.medium"|"c6gn.large"|"c6gn.xlarge"|"c6gn.2xlarge"|"c6gn.4xlarge"|"c6gn.8xlarge"|"c6gn.12xlarge"|"c6gn.16xlarge"|"c7g.medium"|"c7g.large"|"c7g.xlarge"|"c7g.2xlarge"|"c7g.4xlarge"|"c7g.8xlarge"|"c7g.12xlarge"|"c7g.16xlarge"|"r7g.medium"|"r7g.large"|"r7g.xlarge"|"r7g.2xlarge"|"r7g.4xlarge"|"r7g.8xlarge"|"r7g.12xlarge"|"r7g.16xlarge"|"m7g.medium"|"m7g.large"|"m7g.xlarge"|"m7g.2xlarge"|"m7g.4xlarge"|"m7g.8xlarge"|"m7g.12xlarge"|"m7g.16xlarge"|"g5g.xlarge"|"g5g.2xlarge"|"g5g.4xlarge"|"g5g.8xlarge"|"g5g.16xlarge", InstanceCounts?:array{DESIRED?:int, MINIMUM?:int, MAXIMUM?:int, PENDING?:int, ACTIVE?:int, IDLE?:int, TERMINATING?:int}, Location?:string, GameServerContainerGroupCounts?:array{PENDING?:int, ACTIVE?:int, IDLE?:int, TERMINATING?:int}}>, NextToken?:string}>
     */
    public function describeFleetCapacityAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId:string, DeploymentId?:string} $args
     * @return \AWS\Result<array{FleetDeployment?:array{DeploymentId?:string, FleetId?:string, GameServerBinaryArn?:string, RollbackGameServerBinaryArn?:string, PerInstanceBinaryArn?:string, RollbackPerInstanceBinaryArn?:string, DeploymentStatus?:"IN_PROGRESS"|"IMPAIRED"|"COMPLETE"|"ROLLBACK_IN_PROGRESS"|"ROLLBACK_COMPLETE"|"CANCELLED"|"PENDING", DeploymentConfiguration?:array{ProtectionStrategy?:"WITH_PROTECTION"|"IGNORE_PROTECTION", MinimumHealthyPercentage?:int, ImpairmentStrategy?:"MAINTAIN"|"ROLLBACK"}, CreationTime?:int|string|\DateTimeInterface}, LocationalDeployments?:array<string, array{DeploymentStatus?:"IN_PROGRESS"|"IMPAIRED"|"COMPLETE"|"ROLLBACK_IN_PROGRESS"|"ROLLBACK_COMPLETE"|"CANCELLED"|"PENDING"}>}>
     */
    public function describeFleetDeployment(array $args): \AWS\Result { }

    /**
     * @param array{FleetId:string, DeploymentId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FleetDeployment?:array{DeploymentId?:string, FleetId?:string, GameServerBinaryArn?:string, RollbackGameServerBinaryArn?:string, PerInstanceBinaryArn?:string, RollbackPerInstanceBinaryArn?:string, DeploymentStatus?:"IN_PROGRESS"|"IMPAIRED"|"COMPLETE"|"ROLLBACK_IN_PROGRESS"|"ROLLBACK_COMPLETE"|"CANCELLED"|"PENDING", DeploymentConfiguration?:array{ProtectionStrategy?:"WITH_PROTECTION"|"IGNORE_PROTECTION", MinimumHealthyPercentage?:int, ImpairmentStrategy?:"MAINTAIN"|"ROLLBACK"}, CreationTime?:int|string|\DateTimeInterface}, LocationalDeployments?:array<string, array{DeploymentStatus?:"IN_PROGRESS"|"IMPAIRED"|"COMPLETE"|"ROLLBACK_IN_PROGRESS"|"ROLLBACK_COMPLETE"|"CANCELLED"|"PENDING"}>}>
     */
    public function describeFleetDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Limit?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Events?:array<array{EventId?:string, ResourceId?:string, EventCode?:"GENERIC_EVENT"|"FLEET_CREATED"|"FLEET_DELETED"|"FLEET_SCALING_EVENT"|"FLEET_STATE_DOWNLOADING"|"FLEET_STATE_VALIDATING"|"FLEET_STATE_BUILDING"|"FLEET_STATE_ACTIVATING"|"FLEET_STATE_ACTIVE"|"FLEET_STATE_ERROR"|"FLEET_STATE_PENDING"|"FLEET_STATE_CREATING"|"FLEET_STATE_CREATED"|"FLEET_STATE_UPDATING"|"FLEET_INITIALIZATION_FAILED"|"FLEET_BINARY_DOWNLOAD_FAILED"|"FLEET_VALIDATION_LAUNCH_PATH_NOT_FOUND"|"FLEET_VALIDATION_EXECUTABLE_RUNTIME_FAILURE"|"FLEET_VALIDATION_TIMED_OUT"|"FLEET_ACTIVATION_FAILED"|"FLEET_ACTIVATION_FAILED_NO_INSTANCES"|"FLEET_NEW_GAME_SESSION_PROTECTION_POLICY_UPDATED"|"SERVER_PROCESS_INVALID_PATH"|"SERVER_PROCESS_SDK_INITIALIZATION_TIMEOUT"|"SERVER_PROCESS_PROCESS_READY_TIMEOUT"|"SERVER_PROCESS_CRASHED"|"SERVER_PROCESS_TERMINATED_UNHEALTHY"|"SERVER_PROCESS_FORCE_TERMINATED"|"SERVER_PROCESS_PROCESS_EXIT_TIMEOUT"|"SERVER_PROCESS_SDK_INITIALIZATION_FAILED"|"SERVER_PROCESS_MISCONFIGURED_CONTAINER_PORT"|"GAME_SESSION_ACTIVATION_TIMEOUT"|"FLEET_CREATION_EXTRACTING_BUILD"|"FLEET_CREATION_RUNNING_INSTALLER"|"FLEET_CREATION_VALIDATING_RUNTIME_CONFIG"|"FLEET_VPC_PEERING_SUCCEEDED"|"FLEET_VPC_PEERING_FAILED"|"FLEET_VPC_PEERING_DELETED"|"INSTANCE_INTERRUPTED"|"INSTANCE_RECYCLED"|"INSTANCE_REPLACED_UNHEALTHY"|"FLEET_CREATION_COMPLETED_INSTALLER"|"FLEET_CREATION_FAILED_INSTALLER"|"COMPUTE_LOG_UPLOAD_FAILED"|"GAME_SERVER_CONTAINER_GROUP_CRASHED"|"PER_INSTANCE_CONTAINER_GROUP_CRASHED"|"GAME_SERVER_CONTAINER_GROUP_REPLACED_UNHEALTHY"|"LOCATION_STATE_PENDING"|"LOCATION_STATE_CREATING"|"LOCATION_STATE_CREATED"|"LOCATION_STATE_ACTIVATING"|"LOCATION_STATE_ACTIVE"|"LOCATION_STATE_UPDATING"|"LOCATION_STATE_ERROR"|"LOCATION_STATE_DELETING"|"LOCATION_STATE_DELETED", Message?:string, EventTime?:int|string|\DateTimeInterface, PreSignedLogUrl?:string, Count?:int}>, NextToken?:string}>
     */
    public function describeFleetEvents(array $args): \AWS\Result { }

    /**
     * @param array{FleetId:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Limit?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Events?:array<array{EventId?:string, ResourceId?:string, EventCode?:"GENERIC_EVENT"|"FLEET_CREATED"|"FLEET_DELETED"|"FLEET_SCALING_EVENT"|"FLEET_STATE_DOWNLOADING"|"FLEET_STATE_VALIDATING"|"FLEET_STATE_BUILDING"|"FLEET_STATE_ACTIVATING"|"FLEET_STATE_ACTIVE"|"FLEET_STATE_ERROR"|"FLEET_STATE_PENDING"|"FLEET_STATE_CREATING"|"FLEET_STATE_CREATED"|"FLEET_STATE_UPDATING"|"FLEET_INITIALIZATION_FAILED"|"FLEET_BINARY_DOWNLOAD_FAILED"|"FLEET_VALIDATION_LAUNCH_PATH_NOT_FOUND"|"FLEET_VALIDATION_EXECUTABLE_RUNTIME_FAILURE"|"FLEET_VALIDATION_TIMED_OUT"|"FLEET_ACTIVATION_FAILED"|"FLEET_ACTIVATION_FAILED_NO_INSTANCES"|"FLEET_NEW_GAME_SESSION_PROTECTION_POLICY_UPDATED"|"SERVER_PROCESS_INVALID_PATH"|"SERVER_PROCESS_SDK_INITIALIZATION_TIMEOUT"|"SERVER_PROCESS_PROCESS_READY_TIMEOUT"|"SERVER_PROCESS_CRASHED"|"SERVER_PROCESS_TERMINATED_UNHEALTHY"|"SERVER_PROCESS_FORCE_TERMINATED"|"SERVER_PROCESS_PROCESS_EXIT_TIMEOUT"|"SERVER_PROCESS_SDK_INITIALIZATION_FAILED"|"SERVER_PROCESS_MISCONFIGURED_CONTAINER_PORT"|"GAME_SESSION_ACTIVATION_TIMEOUT"|"FLEET_CREATION_EXTRACTING_BUILD"|"FLEET_CREATION_RUNNING_INSTALLER"|"FLEET_CREATION_VALIDATING_RUNTIME_CONFIG"|"FLEET_VPC_PEERING_SUCCEEDED"|"FLEET_VPC_PEERING_FAILED"|"FLEET_VPC_PEERING_DELETED"|"INSTANCE_INTERRUPTED"|"INSTANCE_RECYCLED"|"INSTANCE_REPLACED_UNHEALTHY"|"FLEET_CREATION_COMPLETED_INSTALLER"|"FLEET_CREATION_FAILED_INSTALLER"|"COMPUTE_LOG_UPLOAD_FAILED"|"GAME_SERVER_CONTAINER_GROUP_CRASHED"|"PER_INSTANCE_CONTAINER_GROUP_CRASHED"|"GAME_SERVER_CONTAINER_GROUP_REPLACED_UNHEALTHY"|"LOCATION_STATE_PENDING"|"LOCATION_STATE_CREATING"|"LOCATION_STATE_CREATED"|"LOCATION_STATE_ACTIVATING"|"LOCATION_STATE_ACTIVE"|"LOCATION_STATE_UPDATING"|"LOCATION_STATE_ERROR"|"LOCATION_STATE_DELETING"|"LOCATION_STATE_DELETED", Message?:string, EventTime?:int|string|\DateTimeInterface, PreSignedLogUrl?:string, Count?:int}>, NextToken?:string}>
     */
    public function describeFleetEventsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId:string, Locations?:array<string>, Limit?:int, NextToken?:string} $args
     * @return \AWS\Result<array{FleetId?:string, FleetArn?:string, LocationAttributes?:array<array{LocationState?:array{Location?:string, Status?:"NEW"|"DOWNLOADING"|"VALIDATING"|"BUILDING"|"ACTIVATING"|"ACTIVE"|"DELETING"|"ERROR"|"TERMINATED"|"NOT_FOUND"}, StoppedActions?:array<"AUTO_SCALING">, UpdateStatus?:"PENDING_UPDATE"}>, NextToken?:string}>
     */
    public function describeFleetLocationAttributes(array $args): \AWS\Result { }

    /**
     * @param array{FleetId:string, Locations?:array<string>, Limit?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FleetId?:string, FleetArn?:string, LocationAttributes?:array<array{LocationState?:array{Location?:string, Status?:"NEW"|"DOWNLOADING"|"VALIDATING"|"BUILDING"|"ACTIVATING"|"ACTIVE"|"DELETING"|"ERROR"|"TERMINATED"|"NOT_FOUND"}, StoppedActions?:array<"AUTO_SCALING">, UpdateStatus?:"PENDING_UPDATE"}>, NextToken?:string}>
     */
    public function describeFleetLocationAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId:string, Location:string} $args
     * @return \AWS\Result<array{FleetCapacity?:array{FleetId?:string, FleetArn?:string, InstanceType?:"t2.micro"|"t2.small"|"t2.medium"|"t2.large"|"c3.large"|"c3.xlarge"|"c3.2xlarge"|"c3.4xlarge"|"c3.8xlarge"|"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"r3.large"|"r3.xlarge"|"r3.2xlarge"|"r3.4xlarge"|"r3.8xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"m3.medium"|"m3.large"|"m3.xlarge"|"m3.2xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"c5d.large"|"c5d.xlarge"|"c5d.2xlarge"|"c5d.4xlarge"|"c5d.9xlarge"|"c5d.12xlarge"|"c5d.18xlarge"|"c5d.24xlarge"|"c6a.large"|"c6a.xlarge"|"c6a.2xlarge"|"c6a.4xlarge"|"c6a.8xlarge"|"c6a.12xlarge"|"c6a.16xlarge"|"c6a.24xlarge"|"c6i.large"|"c6i.xlarge"|"c6i.2xlarge"|"c6i.4xlarge"|"c6i.8xlarge"|"c6i.12xlarge"|"c6i.16xlarge"|"c6i.24xlarge"|"r5d.large"|"r5d.xlarge"|"r5d.2xlarge"|"r5d.4xlarge"|"r5d.8xlarge"|"r5d.12xlarge"|"r5d.16xlarge"|"r5d.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"c6gn.medium"|"c6gn.large"|"c6gn.xlarge"|"c6gn.2xlarge"|"c6gn.4xlarge"|"c6gn.8xlarge"|"c6gn.12xlarge"|"c6gn.16xlarge"|"c7g.medium"|"c7g.large"|"c7g.xlarge"|"c7g.2xlarge"|"c7g.4xlarge"|"c7g.8xlarge"|"c7g.12xlarge"|"c7g.16xlarge"|"r7g.medium"|"r7g.large"|"r7g.xlarge"|"r7g.2xlarge"|"r7g.4xlarge"|"r7g.8xlarge"|"r7g.12xlarge"|"r7g.16xlarge"|"m7g.medium"|"m7g.large"|"m7g.xlarge"|"m7g.2xlarge"|"m7g.4xlarge"|"m7g.8xlarge"|"m7g.12xlarge"|"m7g.16xlarge"|"g5g.xlarge"|"g5g.2xlarge"|"g5g.4xlarge"|"g5g.8xlarge"|"g5g.16xlarge", InstanceCounts?:array{DESIRED?:int, MINIMUM?:int, MAXIMUM?:int, PENDING?:int, ACTIVE?:int, IDLE?:int, TERMINATING?:int}, Location?:string, GameServerContainerGroupCounts?:array{PENDING?:int, ACTIVE?:int, IDLE?:int, TERMINATING?:int}}}>
     */
    public function describeFleetLocationCapacity(array $args): \AWS\Result { }

    /**
     * @param array{FleetId:string, Location:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FleetCapacity?:array{FleetId?:string, FleetArn?:string, InstanceType?:"t2.micro"|"t2.small"|"t2.medium"|"t2.large"|"c3.large"|"c3.xlarge"|"c3.2xlarge"|"c3.4xlarge"|"c3.8xlarge"|"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"r3.large"|"r3.xlarge"|"r3.2xlarge"|"r3.4xlarge"|"r3.8xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"m3.medium"|"m3.large"|"m3.xlarge"|"m3.2xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"c5d.large"|"c5d.xlarge"|"c5d.2xlarge"|"c5d.4xlarge"|"c5d.9xlarge"|"c5d.12xlarge"|"c5d.18xlarge"|"c5d.24xlarge"|"c6a.large"|"c6a.xlarge"|"c6a.2xlarge"|"c6a.4xlarge"|"c6a.8xlarge"|"c6a.12xlarge"|"c6a.16xlarge"|"c6a.24xlarge"|"c6i.large"|"c6i.xlarge"|"c6i.2xlarge"|"c6i.4xlarge"|"c6i.8xlarge"|"c6i.12xlarge"|"c6i.16xlarge"|"c6i.24xlarge"|"r5d.large"|"r5d.xlarge"|"r5d.2xlarge"|"r5d.4xlarge"|"r5d.8xlarge"|"r5d.12xlarge"|"r5d.16xlarge"|"r5d.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"c6gn.medium"|"c6gn.large"|"c6gn.xlarge"|"c6gn.2xlarge"|"c6gn.4xlarge"|"c6gn.8xlarge"|"c6gn.12xlarge"|"c6gn.16xlarge"|"c7g.medium"|"c7g.large"|"c7g.xlarge"|"c7g.2xlarge"|"c7g.4xlarge"|"c7g.8xlarge"|"c7g.12xlarge"|"c7g.16xlarge"|"r7g.medium"|"r7g.large"|"r7g.xlarge"|"r7g.2xlarge"|"r7g.4xlarge"|"r7g.8xlarge"|"r7g.12xlarge"|"r7g.16xlarge"|"m7g.medium"|"m7g.large"|"m7g.xlarge"|"m7g.2xlarge"|"m7g.4xlarge"|"m7g.8xlarge"|"m7g.12xlarge"|"m7g.16xlarge"|"g5g.xlarge"|"g5g.2xlarge"|"g5g.4xlarge"|"g5g.8xlarge"|"g5g.16xlarge", InstanceCounts?:array{DESIRED?:int, MINIMUM?:int, MAXIMUM?:int, PENDING?:int, ACTIVE?:int, IDLE?:int, TERMINATING?:int}, Location?:string, GameServerContainerGroupCounts?:array{PENDING?:int, ACTIVE?:int, IDLE?:int, TERMINATING?:int}}}>
     */
    public function describeFleetLocationCapacityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId:string, Location:string} $args
     * @return \AWS\Result<array{FleetUtilization?:array{FleetId?:string, FleetArn?:string, ActiveServerProcessCount?:int, ActiveGameSessionCount?:int, CurrentPlayerSessionCount?:int, MaximumPlayerSessionCount?:int, Location?:string}}>
     */
    public function describeFleetLocationUtilization(array $args): \AWS\Result { }

    /**
     * @param array{FleetId:string, Location:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FleetUtilization?:array{FleetId?:string, FleetArn?:string, ActiveServerProcessCount?:int, ActiveGameSessionCount?:int, CurrentPlayerSessionCount?:int, MaximumPlayerSessionCount?:int, Location?:string}}>
     */
    public function describeFleetLocationUtilizationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId:string, Location?:string} $args
     * @return \AWS\Result<array{FleetId?:string, FleetArn?:string, InboundPermissions?:array<array{FromPort:int, ToPort:int, IpRange:string, Protocol:"TCP"|"UDP"}>, UpdateStatus?:"PENDING_UPDATE", Location?:string}>
     */
    public function describeFleetPortSettings(array $args): \AWS\Result { }

    /**
     * @param array{FleetId:string, Location?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FleetId?:string, FleetArn?:string, InboundPermissions?:array<array{FromPort:int, ToPort:int, IpRange:string, Protocol:"TCP"|"UDP"}>, UpdateStatus?:"PENDING_UPDATE", Location?:string}>
     */
    public function describeFleetPortSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetIds?:array<string>, Limit?:int, NextToken?:string} $args
     * @return \AWS\Result<array{FleetUtilization?:array<array{FleetId?:string, FleetArn?:string, ActiveServerProcessCount?:int, ActiveGameSessionCount?:int, CurrentPlayerSessionCount?:int, MaximumPlayerSessionCount?:int, Location?:string}>, NextToken?:string}>
     */
    public function describeFleetUtilization(array $args = []): \AWS\Result { }

    /**
     * @param array{FleetIds?:array<string>, Limit?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FleetUtilization?:array<array{FleetId?:string, FleetArn?:string, ActiveServerProcessCount?:int, ActiveGameSessionCount?:int, CurrentPlayerSessionCount?:int, MaximumPlayerSessionCount?:int, Location?:string}>, NextToken?:string}>
     */
    public function describeFleetUtilizationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GameServerGroupName:string, GameServerId:string} $args
     * @return \AWS\Result<array{GameServer?:array{GameServerGroupName?:string, GameServerGroupArn?:string, GameServerId?:string, InstanceId?:string, ConnectionInfo?:string, GameServerData?:string, ClaimStatus?:"CLAIMED", UtilizationStatus?:"AVAILABLE"|"UTILIZED", RegistrationTime?:int|string|\DateTimeInterface, LastClaimTime?:int|string|\DateTimeInterface, LastHealthCheckTime?:int|string|\DateTimeInterface}}>
     */
    public function describeGameServer(array $args): \AWS\Result { }

    /**
     * @param array{GameServerGroupName:string, GameServerId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GameServer?:array{GameServerGroupName?:string, GameServerGroupArn?:string, GameServerId?:string, InstanceId?:string, ConnectionInfo?:string, GameServerData?:string, ClaimStatus?:"CLAIMED", UtilizationStatus?:"AVAILABLE"|"UTILIZED", RegistrationTime?:int|string|\DateTimeInterface, LastClaimTime?:int|string|\DateTimeInterface, LastHealthCheckTime?:int|string|\DateTimeInterface}}>
     */
    public function describeGameServerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GameServerGroupName:string} $args
     * @return \AWS\Result<array{GameServerGroup?:array{GameServerGroupName?:string, GameServerGroupArn?:string, RoleArn?:string, InstanceDefinitions?:array<array{InstanceType:"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge", WeightedCapacity?:string}>, BalancingStrategy?:"SPOT_ONLY"|"SPOT_PREFERRED"|"ON_DEMAND_ONLY", GameServerProtectionPolicy?:"NO_PROTECTION"|"FULL_PROTECTION", AutoScalingGroupArn?:string, Status?:"NEW"|"ACTIVATING"|"ACTIVE"|"DELETE_SCHEDULED"|"DELETING"|"DELETED"|"ERROR", StatusReason?:string, SuspendedActions?:array<"REPLACE_INSTANCE_TYPES">, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface}}>
     */
    public function describeGameServerGroup(array $args): \AWS\Result { }

    /**
     * @param array{GameServerGroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GameServerGroup?:array{GameServerGroupName?:string, GameServerGroupArn?:string, RoleArn?:string, InstanceDefinitions?:array<array{InstanceType:"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge", WeightedCapacity?:string}>, BalancingStrategy?:"SPOT_ONLY"|"SPOT_PREFERRED"|"ON_DEMAND_ONLY", GameServerProtectionPolicy?:"NO_PROTECTION"|"FULL_PROTECTION", AutoScalingGroupArn?:string, Status?:"NEW"|"ACTIVATING"|"ACTIVE"|"DELETE_SCHEDULED"|"DELETING"|"DELETED"|"ERROR", StatusReason?:string, SuspendedActions?:array<"REPLACE_INSTANCE_TYPES">, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface}}>
     */
    public function describeGameServerGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GameServerGroupName:string, InstanceIds?:array<string>, Limit?:int, NextToken?:string} $args
     * @return \AWS\Result<array{GameServerInstances?:array<array{GameServerGroupName?:string, GameServerGroupArn?:string, InstanceId?:string, InstanceStatus?:"ACTIVE"|"DRAINING"|"SPOT_TERMINATING"}>, NextToken?:string}>
     */
    public function describeGameServerInstances(array $args): \AWS\Result { }

    /**
     * @param array{GameServerGroupName:string, InstanceIds?:array<string>, Limit?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GameServerInstances?:array<array{GameServerGroupName?:string, GameServerGroupArn?:string, InstanceId?:string, InstanceStatus?:"ACTIVE"|"DRAINING"|"SPOT_TERMINATING"}>, NextToken?:string}>
     */
    public function describeGameServerInstancesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId?:string, GameSessionId?:string, AliasId?:string, Location?:string, StatusFilter?:string, Limit?:int, NextToken?:string} $args
     * @return \AWS\Result<array{GameSessionDetails?:array<array{GameSession?:array{GameSessionId?:string, Name?:string, FleetId?:string, FleetArn?:string, CreationTime?:int|string|\DateTimeInterface, TerminationTime?:int|string|\DateTimeInterface, CurrentPlayerSessionCount?:int, MaximumPlayerSessionCount?:int, Status?:"ACTIVE"|"ACTIVATING"|"TERMINATED"|"TERMINATING"|"ERROR", StatusReason?:"INTERRUPTED"|"TRIGGERED_ON_PROCESS_TERMINATE"|"FORCE_TERMINATED", GameProperties?:array<array{Key:string, Value:string}>, IpAddress?:string, DnsName?:string, Port?:int, PlayerSessionCreationPolicy?:"ACCEPT_ALL"|"DENY_ALL", CreatorId?:string, GameSessionData?:string, MatchmakerData?:string, Location?:string}, ProtectionPolicy?:"NoProtection"|"FullProtection"}>, NextToken?:string}>
     */
    public function describeGameSessionDetails(array $args = []): \AWS\Result { }

    /**
     * @param array{FleetId?:string, GameSessionId?:string, AliasId?:string, Location?:string, StatusFilter?:string, Limit?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GameSessionDetails?:array<array{GameSession?:array{GameSessionId?:string, Name?:string, FleetId?:string, FleetArn?:string, CreationTime?:int|string|\DateTimeInterface, TerminationTime?:int|string|\DateTimeInterface, CurrentPlayerSessionCount?:int, MaximumPlayerSessionCount?:int, Status?:"ACTIVE"|"ACTIVATING"|"TERMINATED"|"TERMINATING"|"ERROR", StatusReason?:"INTERRUPTED"|"TRIGGERED_ON_PROCESS_TERMINATE"|"FORCE_TERMINATED", GameProperties?:array<array{Key:string, Value:string}>, IpAddress?:string, DnsName?:string, Port?:int, PlayerSessionCreationPolicy?:"ACCEPT_ALL"|"DENY_ALL", CreatorId?:string, GameSessionData?:string, MatchmakerData?:string, Location?:string}, ProtectionPolicy?:"NoProtection"|"FullProtection"}>, NextToken?:string}>
     */
    public function describeGameSessionDetailsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PlacementId:string} $args
     * @return \AWS\Result<array{GameSessionPlacement?:array{PlacementId?:string, GameSessionQueueName?:string, Status?:"PENDING"|"FULFILLED"|"CANCELLED"|"TIMED_OUT"|"FAILED", GameProperties?:array<array{Key:string, Value:string}>, MaximumPlayerSessionCount?:int, GameSessionName?:string, GameSessionId?:string, GameSessionArn?:string, GameSessionRegion?:string, PlayerLatencies?:array<array{PlayerId?:string, RegionIdentifier?:string, LatencyInMilliseconds?:float}>, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, IpAddress?:string, DnsName?:string, Port?:int, PlacedPlayerSessions?:array<array{PlayerId?:string, PlayerSessionId?:string}>, GameSessionData?:string, MatchmakerData?:string, PriorityConfigurationOverride?:array{PlacementFallbackStrategy?:"DEFAULT_AFTER_SINGLE_PASS"|"NONE", LocationOrder:array<string>}}}>
     */
    public function describeGameSessionPlacement(array $args): \AWS\Result { }

    /**
     * @param array{PlacementId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GameSessionPlacement?:array{PlacementId?:string, GameSessionQueueName?:string, Status?:"PENDING"|"FULFILLED"|"CANCELLED"|"TIMED_OUT"|"FAILED", GameProperties?:array<array{Key:string, Value:string}>, MaximumPlayerSessionCount?:int, GameSessionName?:string, GameSessionId?:string, GameSessionArn?:string, GameSessionRegion?:string, PlayerLatencies?:array<array{PlayerId?:string, RegionIdentifier?:string, LatencyInMilliseconds?:float}>, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, IpAddress?:string, DnsName?:string, Port?:int, PlacedPlayerSessions?:array<array{PlayerId?:string, PlayerSessionId?:string}>, GameSessionData?:string, MatchmakerData?:string, PriorityConfigurationOverride?:array{PlacementFallbackStrategy?:"DEFAULT_AFTER_SINGLE_PASS"|"NONE", LocationOrder:array<string>}}}>
     */
    public function describeGameSessionPlacementAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Names?:array<string>, Limit?:int, NextToken?:string} $args
     * @return \AWS\Result<array{GameSessionQueues?:array<array{Name?:string, GameSessionQueueArn?:string, TimeoutInSeconds?:int, PlayerLatencyPolicies?:array<array{MaximumIndividualPlayerLatencyMilliseconds?:int, PolicyDurationSeconds?:int}>, Destinations?:array<array{DestinationArn?:string}>, FilterConfiguration?:array{AllowedLocations?:array<string>}, PriorityConfiguration?:array{PriorityOrder?:array<"LATENCY"|"COST"|"DESTINATION"|"LOCATION">, LocationOrder?:array<string>}, CustomEventData?:string, NotificationTarget?:string}>, NextToken?:string}>
     */
    public function describeGameSessionQueues(array $args = []): \AWS\Result { }

    /**
     * @param array{Names?:array<string>, Limit?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GameSessionQueues?:array<array{Name?:string, GameSessionQueueArn?:string, TimeoutInSeconds?:int, PlayerLatencyPolicies?:array<array{MaximumIndividualPlayerLatencyMilliseconds?:int, PolicyDurationSeconds?:int}>, Destinations?:array<array{DestinationArn?:string}>, FilterConfiguration?:array{AllowedLocations?:array<string>}, PriorityConfiguration?:array{PriorityOrder?:array<"LATENCY"|"COST"|"DESTINATION"|"LOCATION">, LocationOrder?:array<string>}, CustomEventData?:string, NotificationTarget?:string}>, NextToken?:string}>
     */
    public function describeGameSessionQueuesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId?:string, GameSessionId?:string, AliasId?:string, Location?:string, StatusFilter?:string, Limit?:int, NextToken?:string} $args
     * @return \AWS\Result<array{GameSessions?:array<array{GameSessionId?:string, Name?:string, FleetId?:string, FleetArn?:string, CreationTime?:int|string|\DateTimeInterface, TerminationTime?:int|string|\DateTimeInterface, CurrentPlayerSessionCount?:int, MaximumPlayerSessionCount?:int, Status?:"ACTIVE"|"ACTIVATING"|"TERMINATED"|"TERMINATING"|"ERROR", StatusReason?:"INTERRUPTED"|"TRIGGERED_ON_PROCESS_TERMINATE"|"FORCE_TERMINATED", GameProperties?:array<array{Key:string, Value:string}>, IpAddress?:string, DnsName?:string, Port?:int, PlayerSessionCreationPolicy?:"ACCEPT_ALL"|"DENY_ALL", CreatorId?:string, GameSessionData?:string, MatchmakerData?:string, Location?:string}>, NextToken?:string}>
     */
    public function describeGameSessions(array $args = []): \AWS\Result { }

    /**
     * @param array{FleetId?:string, GameSessionId?:string, AliasId?:string, Location?:string, StatusFilter?:string, Limit?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GameSessions?:array<array{GameSessionId?:string, Name?:string, FleetId?:string, FleetArn?:string, CreationTime?:int|string|\DateTimeInterface, TerminationTime?:int|string|\DateTimeInterface, CurrentPlayerSessionCount?:int, MaximumPlayerSessionCount?:int, Status?:"ACTIVE"|"ACTIVATING"|"TERMINATED"|"TERMINATING"|"ERROR", StatusReason?:"INTERRUPTED"|"TRIGGERED_ON_PROCESS_TERMINATE"|"FORCE_TERMINATED", GameProperties?:array<array{Key:string, Value:string}>, IpAddress?:string, DnsName?:string, Port?:int, PlayerSessionCreationPolicy?:"ACCEPT_ALL"|"DENY_ALL", CreatorId?:string, GameSessionData?:string, MatchmakerData?:string, Location?:string}>, NextToken?:string}>
     */
    public function describeGameSessionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId:string, InstanceId?:string, Limit?:int, NextToken?:string, Location?:string} $args
     * @return \AWS\Result<array{Instances?:array<array{FleetId?:string, FleetArn?:string, InstanceId?:string, IpAddress?:string, DnsName?:string, OperatingSystem?:"WINDOWS_2012"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"WINDOWS_2016"|"AMAZON_LINUX_2023", Type?:"t2.micro"|"t2.small"|"t2.medium"|"t2.large"|"c3.large"|"c3.xlarge"|"c3.2xlarge"|"c3.4xlarge"|"c3.8xlarge"|"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"r3.large"|"r3.xlarge"|"r3.2xlarge"|"r3.4xlarge"|"r3.8xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"m3.medium"|"m3.large"|"m3.xlarge"|"m3.2xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"c5d.large"|"c5d.xlarge"|"c5d.2xlarge"|"c5d.4xlarge"|"c5d.9xlarge"|"c5d.12xlarge"|"c5d.18xlarge"|"c5d.24xlarge"|"c6a.large"|"c6a.xlarge"|"c6a.2xlarge"|"c6a.4xlarge"|"c6a.8xlarge"|"c6a.12xlarge"|"c6a.16xlarge"|"c6a.24xlarge"|"c6i.large"|"c6i.xlarge"|"c6i.2xlarge"|"c6i.4xlarge"|"c6i.8xlarge"|"c6i.12xlarge"|"c6i.16xlarge"|"c6i.24xlarge"|"r5d.large"|"r5d.xlarge"|"r5d.2xlarge"|"r5d.4xlarge"|"r5d.8xlarge"|"r5d.12xlarge"|"r5d.16xlarge"|"r5d.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"c6gn.medium"|"c6gn.large"|"c6gn.xlarge"|"c6gn.2xlarge"|"c6gn.4xlarge"|"c6gn.8xlarge"|"c6gn.12xlarge"|"c6gn.16xlarge"|"c7g.medium"|"c7g.large"|"c7g.xlarge"|"c7g.2xlarge"|"c7g.4xlarge"|"c7g.8xlarge"|"c7g.12xlarge"|"c7g.16xlarge"|"r7g.medium"|"r7g.large"|"r7g.xlarge"|"r7g.2xlarge"|"r7g.4xlarge"|"r7g.8xlarge"|"r7g.12xlarge"|"r7g.16xlarge"|"m7g.medium"|"m7g.large"|"m7g.xlarge"|"m7g.2xlarge"|"m7g.4xlarge"|"m7g.8xlarge"|"m7g.12xlarge"|"m7g.16xlarge"|"g5g.xlarge"|"g5g.2xlarge"|"g5g.4xlarge"|"g5g.8xlarge"|"g5g.16xlarge", Status?:"PENDING"|"ACTIVE"|"TERMINATING", CreationTime?:int|string|\DateTimeInterface, Location?:string}>, NextToken?:string}>
     */
    public function describeInstances(array $args): \AWS\Result { }

    /**
     * @param array{FleetId:string, InstanceId?:string, Limit?:int, NextToken?:string, Location?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Instances?:array<array{FleetId?:string, FleetArn?:string, InstanceId?:string, IpAddress?:string, DnsName?:string, OperatingSystem?:"WINDOWS_2012"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"WINDOWS_2016"|"AMAZON_LINUX_2023", Type?:"t2.micro"|"t2.small"|"t2.medium"|"t2.large"|"c3.large"|"c3.xlarge"|"c3.2xlarge"|"c3.4xlarge"|"c3.8xlarge"|"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"r3.large"|"r3.xlarge"|"r3.2xlarge"|"r3.4xlarge"|"r3.8xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"m3.medium"|"m3.large"|"m3.xlarge"|"m3.2xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"c5d.large"|"c5d.xlarge"|"c5d.2xlarge"|"c5d.4xlarge"|"c5d.9xlarge"|"c5d.12xlarge"|"c5d.18xlarge"|"c5d.24xlarge"|"c6a.large"|"c6a.xlarge"|"c6a.2xlarge"|"c6a.4xlarge"|"c6a.8xlarge"|"c6a.12xlarge"|"c6a.16xlarge"|"c6a.24xlarge"|"c6i.large"|"c6i.xlarge"|"c6i.2xlarge"|"c6i.4xlarge"|"c6i.8xlarge"|"c6i.12xlarge"|"c6i.16xlarge"|"c6i.24xlarge"|"r5d.large"|"r5d.xlarge"|"r5d.2xlarge"|"r5d.4xlarge"|"r5d.8xlarge"|"r5d.12xlarge"|"r5d.16xlarge"|"r5d.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"c6gn.medium"|"c6gn.large"|"c6gn.xlarge"|"c6gn.2xlarge"|"c6gn.4xlarge"|"c6gn.8xlarge"|"c6gn.12xlarge"|"c6gn.16xlarge"|"c7g.medium"|"c7g.large"|"c7g.xlarge"|"c7g.2xlarge"|"c7g.4xlarge"|"c7g.8xlarge"|"c7g.12xlarge"|"c7g.16xlarge"|"r7g.medium"|"r7g.large"|"r7g.xlarge"|"r7g.2xlarge"|"r7g.4xlarge"|"r7g.8xlarge"|"r7g.12xlarge"|"r7g.16xlarge"|"m7g.medium"|"m7g.large"|"m7g.xlarge"|"m7g.2xlarge"|"m7g.4xlarge"|"m7g.8xlarge"|"m7g.12xlarge"|"m7g.16xlarge"|"g5g.xlarge"|"g5g.2xlarge"|"g5g.4xlarge"|"g5g.8xlarge"|"g5g.16xlarge", Status?:"PENDING"|"ACTIVE"|"TERMINATING", CreationTime?:int|string|\DateTimeInterface, Location?:string}>, NextToken?:string}>
     */
    public function describeInstancesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TicketIds:array<string>} $args
     * @return \AWS\Result<array{TicketList?:array<array{TicketId?:string, ConfigurationName?:string, ConfigurationArn?:string, Status?:"CANCELLED"|"COMPLETED"|"FAILED"|"PLACING"|"QUEUED"|"REQUIRES_ACCEPTANCE"|"SEARCHING"|"TIMED_OUT", StatusReason?:string, StatusMessage?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Players?:array<array{PlayerId?:string, PlayerAttributes?:array<string, array{S?:string, N?:float, SL?:array<string>, SDM?:array<string, float>}>, Team?:string, LatencyInMs?:array<string, int>}>, GameSessionConnectionInfo?:array{GameSessionArn?:string, IpAddress?:string, DnsName?:string, Port?:int, MatchedPlayerSessions?:array<array{PlayerId?:string, PlayerSessionId?:string}>}, EstimatedWaitTime?:int}>}>
     */
    public function describeMatchmaking(array $args): \AWS\Result { }

    /**
     * @param array{TicketIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{TicketList?:array<array{TicketId?:string, ConfigurationName?:string, ConfigurationArn?:string, Status?:"CANCELLED"|"COMPLETED"|"FAILED"|"PLACING"|"QUEUED"|"REQUIRES_ACCEPTANCE"|"SEARCHING"|"TIMED_OUT", StatusReason?:string, StatusMessage?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Players?:array<array{PlayerId?:string, PlayerAttributes?:array<string, array{S?:string, N?:float, SL?:array<string>, SDM?:array<string, float>}>, Team?:string, LatencyInMs?:array<string, int>}>, GameSessionConnectionInfo?:array{GameSessionArn?:string, IpAddress?:string, DnsName?:string, Port?:int, MatchedPlayerSessions?:array<array{PlayerId?:string, PlayerSessionId?:string}>}, EstimatedWaitTime?:int}>}>
     */
    public function describeMatchmakingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Names?:array<string>, RuleSetName?:string, Limit?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Configurations?:array<array{Name?:string, ConfigurationArn?:string, Description?:string, GameSessionQueueArns?:array<string>, RequestTimeoutSeconds?:int, AcceptanceTimeoutSeconds?:int, AcceptanceRequired?:bool, RuleSetName?:string, RuleSetArn?:string, NotificationTarget?:string, AdditionalPlayerCount?:int, CustomEventData?:string, CreationTime?:int|string|\DateTimeInterface, GameProperties?:array<array{Key:string, Value:string}>, GameSessionData?:string, BackfillMode?:"AUTOMATIC"|"MANUAL", FlexMatchMode?:"STANDALONE"|"WITH_QUEUE"}>, NextToken?:string}>
     */
    public function describeMatchmakingConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{Names?:array<string>, RuleSetName?:string, Limit?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Configurations?:array<array{Name?:string, ConfigurationArn?:string, Description?:string, GameSessionQueueArns?:array<string>, RequestTimeoutSeconds?:int, AcceptanceTimeoutSeconds?:int, AcceptanceRequired?:bool, RuleSetName?:string, RuleSetArn?:string, NotificationTarget?:string, AdditionalPlayerCount?:int, CustomEventData?:string, CreationTime?:int|string|\DateTimeInterface, GameProperties?:array<array{Key:string, Value:string}>, GameSessionData?:string, BackfillMode?:"AUTOMATIC"|"MANUAL", FlexMatchMode?:"STANDALONE"|"WITH_QUEUE"}>, NextToken?:string}>
     */
    public function describeMatchmakingConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Names?:array<string>, Limit?:int, NextToken?:string} $args
     * @return \AWS\Result<array{RuleSets:array<array{RuleSetName?:string, RuleSetArn?:string, RuleSetBody:string, CreationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeMatchmakingRuleSets(array $args = []): \AWS\Result { }

    /**
     * @param array{Names?:array<string>, Limit?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RuleSets:array<array{RuleSetName?:string, RuleSetArn?:string, RuleSetBody:string, CreationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeMatchmakingRuleSetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GameSessionId?:string, PlayerId?:string, PlayerSessionId?:string, PlayerSessionStatusFilter?:string, Limit?:int, NextToken?:string} $args
     * @return \AWS\Result<array{PlayerSessions?:array<array{PlayerSessionId?:string, PlayerId?:string, GameSessionId?:string, FleetId?:string, FleetArn?:string, CreationTime?:int|string|\DateTimeInterface, TerminationTime?:int|string|\DateTimeInterface, Status?:"RESERVED"|"ACTIVE"|"COMPLETED"|"TIMEDOUT", IpAddress?:string, DnsName?:string, Port?:int, PlayerData?:string}>, NextToken?:string}>
     */
    public function describePlayerSessions(array $args = []): \AWS\Result { }

    /**
     * @param array{GameSessionId?:string, PlayerId?:string, PlayerSessionId?:string, PlayerSessionStatusFilter?:string, Limit?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PlayerSessions?:array<array{PlayerSessionId?:string, PlayerId?:string, GameSessionId?:string, FleetId?:string, FleetArn?:string, CreationTime?:int|string|\DateTimeInterface, TerminationTime?:int|string|\DateTimeInterface, Status?:"RESERVED"|"ACTIVE"|"COMPLETED"|"TIMEDOUT", IpAddress?:string, DnsName?:string, Port?:int, PlayerData?:string}>, NextToken?:string}>
     */
    public function describePlayerSessionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId:string} $args
     * @return \AWS\Result<array{RuntimeConfiguration?:array{ServerProcesses?:array<array{LaunchPath:string, Parameters?:string, ConcurrentExecutions:int}>, MaxConcurrentGameSessionActivations?:int, GameSessionActivationTimeoutSeconds?:int}}>
     */
    public function describeRuntimeConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{FleetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RuntimeConfiguration?:array{ServerProcesses?:array<array{LaunchPath:string, Parameters?:string, ConcurrentExecutions:int}>, MaxConcurrentGameSessionActivations?:int, GameSessionActivationTimeoutSeconds?:int}}>
     */
    public function describeRuntimeConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId:string, StatusFilter?:"ACTIVE"|"UPDATE_REQUESTED"|"UPDATING"|"DELETE_REQUESTED"|"DELETING"|"DELETED"|"ERROR", Limit?:int, NextToken?:string, Location?:string} $args
     * @return \AWS\Result<array{ScalingPolicies?:array<array{FleetId?:string, FleetArn?:string, Name?:string, Status?:"ACTIVE"|"UPDATE_REQUESTED"|"UPDATING"|"DELETE_REQUESTED"|"DELETING"|"DELETED"|"ERROR", ScalingAdjustment?:int, ScalingAdjustmentType?:"ChangeInCapacity"|"ExactCapacity"|"PercentChangeInCapacity", ComparisonOperator?:"GreaterThanOrEqualToThreshold"|"GreaterThanThreshold"|"LessThanThreshold"|"LessThanOrEqualToThreshold", Threshold?:float, EvaluationPeriods?:int, MetricName?:"ActivatingGameSessions"|"ActiveGameSessions"|"ActiveInstances"|"AvailableGameSessions"|"AvailablePlayerSessions"|"CurrentPlayerSessions"|"IdleInstances"|"PercentAvailableGameSessions"|"PercentIdleInstances"|"QueueDepth"|"WaitTime"|"ConcurrentActivatableGameSessions", PolicyType?:"RuleBased"|"TargetBased", TargetConfiguration?:array{TargetValue:float}, UpdateStatus?:"PENDING_UPDATE", Location?:string}>, NextToken?:string}>
     */
    public function describeScalingPolicies(array $args): \AWS\Result { }

    /**
     * @param array{FleetId:string, StatusFilter?:"ACTIVE"|"UPDATE_REQUESTED"|"UPDATING"|"DELETE_REQUESTED"|"DELETING"|"DELETED"|"ERROR", Limit?:int, NextToken?:string, Location?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ScalingPolicies?:array<array{FleetId?:string, FleetArn?:string, Name?:string, Status?:"ACTIVE"|"UPDATE_REQUESTED"|"UPDATING"|"DELETE_REQUESTED"|"DELETING"|"DELETED"|"ERROR", ScalingAdjustment?:int, ScalingAdjustmentType?:"ChangeInCapacity"|"ExactCapacity"|"PercentChangeInCapacity", ComparisonOperator?:"GreaterThanOrEqualToThreshold"|"GreaterThanThreshold"|"LessThanThreshold"|"LessThanOrEqualToThreshold", Threshold?:float, EvaluationPeriods?:int, MetricName?:"ActivatingGameSessions"|"ActiveGameSessions"|"ActiveInstances"|"AvailableGameSessions"|"AvailablePlayerSessions"|"CurrentPlayerSessions"|"IdleInstances"|"PercentAvailableGameSessions"|"PercentIdleInstances"|"QueueDepth"|"WaitTime"|"ConcurrentActivatableGameSessions", PolicyType?:"RuleBased"|"TargetBased", TargetConfiguration?:array{TargetValue:float}, UpdateStatus?:"PENDING_UPDATE", Location?:string}>, NextToken?:string}>
     */
    public function describeScalingPoliciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ScriptId:string} $args
     * @return \AWS\Result<array{Script?:array{ScriptId?:string, ScriptArn?:string, Name?:string, Version?:string, SizeOnDisk?:int, CreationTime?:int|string|\DateTimeInterface, StorageLocation?:array{Bucket?:string, Key?:string, RoleArn?:string, ObjectVersion?:string}}}>
     */
    public function describeScript(array $args): \AWS\Result { }

    /**
     * @param array{ScriptId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Script?:array{ScriptId?:string, ScriptArn?:string, Name?:string, Version?:string, SizeOnDisk?:int, CreationTime?:int|string|\DateTimeInterface, StorageLocation?:array{Bucket?:string, Key?:string, RoleArn?:string, ObjectVersion?:string}}}>
     */
    public function describeScriptAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{VpcPeeringAuthorizations?:array<array{GameLiftAwsAccountId?:string, PeerVpcAwsAccountId?:string, PeerVpcId?:string, CreationTime?:int|string|\DateTimeInterface, ExpirationTime?:int|string|\DateTimeInterface}>}>
     */
    public function describeVpcPeeringAuthorizations(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{VpcPeeringAuthorizations?:array<array{GameLiftAwsAccountId?:string, PeerVpcAwsAccountId?:string, PeerVpcId?:string, CreationTime?:int|string|\DateTimeInterface, ExpirationTime?:int|string|\DateTimeInterface}>}>
     */
    public function describeVpcPeeringAuthorizationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId?:string} $args
     * @return \AWS\Result<array{VpcPeeringConnections?:array<array{FleetId?:string, FleetArn?:string, IpV4CidrBlock?:string, VpcPeeringConnectionId?:string, Status?:array{Code?:string, Message?:string}, PeerVpcId?:string, GameLiftVpcId?:string}>}>
     */
    public function describeVpcPeeringConnections(array $args = []): \AWS\Result { }

    /**
     * @param array{FleetId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VpcPeeringConnections?:array<array{FleetId?:string, FleetArn?:string, IpV4CidrBlock?:string, VpcPeeringConnectionId?:string, Status?:array{Code?:string, Message?:string}, PeerVpcId?:string, GameLiftVpcId?:string}>}>
     */
    public function describeVpcPeeringConnectionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId:string, ComputeName:string} $args
     * @return \AWS\Result<array{FleetId?:string, FleetArn?:string, ComputeName?:string, ComputeArn?:string, Credentials?:array{AccessKeyId?:string, SecretAccessKey?:string, SessionToken?:string}, Target?:string, ContainerIdentifiers?:array<array{ContainerName?:string, ContainerRuntimeId?:string}>}>
     */
    public function getComputeAccess(array $args): \AWS\Result { }

    /**
     * @param array{FleetId:string, ComputeName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FleetId?:string, FleetArn?:string, ComputeName?:string, ComputeArn?:string, Credentials?:array{AccessKeyId?:string, SecretAccessKey?:string, SessionToken?:string}, Target?:string, ContainerIdentifiers?:array<array{ContainerName?:string, ContainerRuntimeId?:string}>}>
     */
    public function getComputeAccessAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId:string, ComputeName:string} $args
     * @return \AWS\Result<array{FleetId?:string, FleetArn?:string, ComputeName?:string, ComputeArn?:string, AuthToken?:string, ExpirationTimestamp?:int|string|\DateTimeInterface}>
     */
    public function getComputeAuthToken(array $args): \AWS\Result { }

    /**
     * @param array{FleetId:string, ComputeName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FleetId?:string, FleetArn?:string, ComputeName?:string, ComputeArn?:string, AuthToken?:string, ExpirationTimestamp?:int|string|\DateTimeInterface}>
     */
    public function getComputeAuthTokenAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GameSessionId:string} $args
     * @return \AWS\Result<array{PreSignedUrl?:string}>
     */
    public function getGameSessionLogUrl(array $args): \AWS\Result { }

    /**
     * @param array{GameSessionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PreSignedUrl?:string}>
     */
    public function getGameSessionLogUrlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId:string, InstanceId:string} $args
     * @return \AWS\Result<array{InstanceAccess?:array{FleetId?:string, InstanceId?:string, IpAddress?:string, OperatingSystem?:"WINDOWS_2012"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"WINDOWS_2016"|"AMAZON_LINUX_2023", Credentials?:array{UserName?:string, Secret?:string}}}>
     */
    public function getInstanceAccess(array $args): \AWS\Result { }

    /**
     * @param array{FleetId:string, InstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{InstanceAccess?:array{FleetId?:string, InstanceId?:string, IpAddress?:string, OperatingSystem?:"WINDOWS_2012"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"WINDOWS_2016"|"AMAZON_LINUX_2023", Credentials?:array{UserName?:string, Secret?:string}}}>
     */
    public function getInstanceAccessAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RoutingStrategyType?:"SIMPLE"|"TERMINAL", Name?:string, Limit?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Aliases?:array<array{AliasId?:string, Name?:string, AliasArn?:string, Description?:string, RoutingStrategy?:array{Type?:"SIMPLE"|"TERMINAL", FleetId?:string, Message?:string}, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listAliases(array $args = []): \AWS\Result { }

    /**
     * @param array{RoutingStrategyType?:"SIMPLE"|"TERMINAL", Name?:string, Limit?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Aliases?:array<array{AliasId?:string, Name?:string, AliasArn?:string, Description?:string, RoutingStrategy?:array{Type?:"SIMPLE"|"TERMINAL", FleetId?:string, Message?:string}, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listAliasesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Status?:"INITIALIZED"|"READY"|"FAILED", Limit?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Builds?:array<array{BuildId?:string, BuildArn?:string, Name?:string, Version?:string, Status?:"INITIALIZED"|"READY"|"FAILED", SizeOnDisk?:int, OperatingSystem?:"WINDOWS_2012"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"WINDOWS_2016"|"AMAZON_LINUX_2023", CreationTime?:int|string|\DateTimeInterface, ServerSdkVersion?:string}>, NextToken?:string}>
     */
    public function listBuilds(array $args = []): \AWS\Result { }

    /**
     * @param array{Status?:"INITIALIZED"|"READY"|"FAILED", Limit?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Builds?:array<array{BuildId?:string, BuildArn?:string, Name?:string, Version?:string, Status?:"INITIALIZED"|"READY"|"FAILED", SizeOnDisk?:int, OperatingSystem?:"WINDOWS_2012"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"WINDOWS_2016"|"AMAZON_LINUX_2023", CreationTime?:int|string|\DateTimeInterface, ServerSdkVersion?:string}>, NextToken?:string}>
     */
    public function listBuildsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId:string, Location?:string, ContainerGroupDefinitionName?:string, ComputeStatus?:"ACTIVE"|"IMPAIRED", Limit?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ComputeList?:array<array{FleetId?:string, FleetArn?:string, ComputeName?:string, ComputeArn?:string, IpAddress?:string, DnsName?:string, ComputeStatus?:"PENDING"|"ACTIVE"|"TERMINATING"|"IMPAIRED", Location?:string, CreationTime?:int|string|\DateTimeInterface, OperatingSystem?:"WINDOWS_2012"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"WINDOWS_2016"|"AMAZON_LINUX_2023", Type?:"t2.micro"|"t2.small"|"t2.medium"|"t2.large"|"c3.large"|"c3.xlarge"|"c3.2xlarge"|"c3.4xlarge"|"c3.8xlarge"|"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"r3.large"|"r3.xlarge"|"r3.2xlarge"|"r3.4xlarge"|"r3.8xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"m3.medium"|"m3.large"|"m3.xlarge"|"m3.2xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"c5d.large"|"c5d.xlarge"|"c5d.2xlarge"|"c5d.4xlarge"|"c5d.9xlarge"|"c5d.12xlarge"|"c5d.18xlarge"|"c5d.24xlarge"|"c6a.large"|"c6a.xlarge"|"c6a.2xlarge"|"c6a.4xlarge"|"c6a.8xlarge"|"c6a.12xlarge"|"c6a.16xlarge"|"c6a.24xlarge"|"c6i.large"|"c6i.xlarge"|"c6i.2xlarge"|"c6i.4xlarge"|"c6i.8xlarge"|"c6i.12xlarge"|"c6i.16xlarge"|"c6i.24xlarge"|"r5d.large"|"r5d.xlarge"|"r5d.2xlarge"|"r5d.4xlarge"|"r5d.8xlarge"|"r5d.12xlarge"|"r5d.16xlarge"|"r5d.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"c6gn.medium"|"c6gn.large"|"c6gn.xlarge"|"c6gn.2xlarge"|"c6gn.4xlarge"|"c6gn.8xlarge"|"c6gn.12xlarge"|"c6gn.16xlarge"|"c7g.medium"|"c7g.large"|"c7g.xlarge"|"c7g.2xlarge"|"c7g.4xlarge"|"c7g.8xlarge"|"c7g.12xlarge"|"c7g.16xlarge"|"r7g.medium"|"r7g.large"|"r7g.xlarge"|"r7g.2xlarge"|"r7g.4xlarge"|"r7g.8xlarge"|"r7g.12xlarge"|"r7g.16xlarge"|"m7g.medium"|"m7g.large"|"m7g.xlarge"|"m7g.2xlarge"|"m7g.4xlarge"|"m7g.8xlarge"|"m7g.12xlarge"|"m7g.16xlarge"|"g5g.xlarge"|"g5g.2xlarge"|"g5g.4xlarge"|"g5g.8xlarge"|"g5g.16xlarge", GameLiftServiceSdkEndpoint?:string, GameLiftAgentEndpoint?:string, InstanceId?:string, ContainerAttributes?:array<array{ContainerName?:string, ContainerRuntimeId?:string}>, GameServerContainerGroupDefinitionArn?:string}>, NextToken?:string}>
     */
    public function listCompute(array $args): \AWS\Result { }

    /**
     * @param array{FleetId:string, Location?:string, ContainerGroupDefinitionName?:string, ComputeStatus?:"ACTIVE"|"IMPAIRED", Limit?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ComputeList?:array<array{FleetId?:string, FleetArn?:string, ComputeName?:string, ComputeArn?:string, IpAddress?:string, DnsName?:string, ComputeStatus?:"PENDING"|"ACTIVE"|"TERMINATING"|"IMPAIRED", Location?:string, CreationTime?:int|string|\DateTimeInterface, OperatingSystem?:"WINDOWS_2012"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"WINDOWS_2016"|"AMAZON_LINUX_2023", Type?:"t2.micro"|"t2.small"|"t2.medium"|"t2.large"|"c3.large"|"c3.xlarge"|"c3.2xlarge"|"c3.4xlarge"|"c3.8xlarge"|"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"r3.large"|"r3.xlarge"|"r3.2xlarge"|"r3.4xlarge"|"r3.8xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"m3.medium"|"m3.large"|"m3.xlarge"|"m3.2xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"c5d.large"|"c5d.xlarge"|"c5d.2xlarge"|"c5d.4xlarge"|"c5d.9xlarge"|"c5d.12xlarge"|"c5d.18xlarge"|"c5d.24xlarge"|"c6a.large"|"c6a.xlarge"|"c6a.2xlarge"|"c6a.4xlarge"|"c6a.8xlarge"|"c6a.12xlarge"|"c6a.16xlarge"|"c6a.24xlarge"|"c6i.large"|"c6i.xlarge"|"c6i.2xlarge"|"c6i.4xlarge"|"c6i.8xlarge"|"c6i.12xlarge"|"c6i.16xlarge"|"c6i.24xlarge"|"r5d.large"|"r5d.xlarge"|"r5d.2xlarge"|"r5d.4xlarge"|"r5d.8xlarge"|"r5d.12xlarge"|"r5d.16xlarge"|"r5d.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"c6gn.medium"|"c6gn.large"|"c6gn.xlarge"|"c6gn.2xlarge"|"c6gn.4xlarge"|"c6gn.8xlarge"|"c6gn.12xlarge"|"c6gn.16xlarge"|"c7g.medium"|"c7g.large"|"c7g.xlarge"|"c7g.2xlarge"|"c7g.4xlarge"|"c7g.8xlarge"|"c7g.12xlarge"|"c7g.16xlarge"|"r7g.medium"|"r7g.large"|"r7g.xlarge"|"r7g.2xlarge"|"r7g.4xlarge"|"r7g.8xlarge"|"r7g.12xlarge"|"r7g.16xlarge"|"m7g.medium"|"m7g.large"|"m7g.xlarge"|"m7g.2xlarge"|"m7g.4xlarge"|"m7g.8xlarge"|"m7g.12xlarge"|"m7g.16xlarge"|"g5g.xlarge"|"g5g.2xlarge"|"g5g.4xlarge"|"g5g.8xlarge"|"g5g.16xlarge", GameLiftServiceSdkEndpoint?:string, GameLiftAgentEndpoint?:string, InstanceId?:string, ContainerAttributes?:array<array{ContainerName?:string, ContainerRuntimeId?:string}>, GameServerContainerGroupDefinitionArn?:string}>, NextToken?:string}>
     */
    public function listComputeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContainerGroupDefinitionName?:string, Limit?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ContainerFleets?:array<array{FleetId?:string, FleetArn?:string, FleetRoleArn?:string, GameServerContainerGroupDefinitionName?:string, GameServerContainerGroupDefinitionArn?:string, PerInstanceContainerGroupDefinitionName?:string, PerInstanceContainerGroupDefinitionArn?:string, InstanceConnectionPortRange?:array{FromPort:int, ToPort:int}, InstanceInboundPermissions?:array<array{FromPort:int, ToPort:int, IpRange:string, Protocol:"TCP"|"UDP"}>, GameServerContainerGroupsPerInstance?:int, MaximumGameServerContainerGroupsPerInstance?:int, InstanceType?:string, BillingType?:"ON_DEMAND"|"SPOT", Description?:string, CreationTime?:int|string|\DateTimeInterface, MetricGroups?:array<string>, NewGameSessionProtectionPolicy?:"NoProtection"|"FullProtection", GameSessionCreationLimitPolicy?:array{NewGameSessionsPerCreator?:int, PolicyPeriodInMinutes?:int}, Status?:"PENDING"|"CREATING"|"CREATED"|"ACTIVATING"|"ACTIVE"|"UPDATING"|"DELETING", DeploymentDetails?:array{LatestDeploymentId?:string}, LogConfiguration?:array{LogDestination?:"NONE"|"CLOUDWATCH"|"S3", S3BucketName?:string, LogGroupArn?:string}, LocationAttributes?:array<array{Location?:string, Status?:"PENDING"|"CREATING"|"CREATED"|"ACTIVATING"|"ACTIVE"|"UPDATING"|"DELETING"}>}>, NextToken?:string}>
     */
    public function listContainerFleets(array $args = []): \AWS\Result { }

    /**
     * @param array{ContainerGroupDefinitionName?:string, Limit?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContainerFleets?:array<array{FleetId?:string, FleetArn?:string, FleetRoleArn?:string, GameServerContainerGroupDefinitionName?:string, GameServerContainerGroupDefinitionArn?:string, PerInstanceContainerGroupDefinitionName?:string, PerInstanceContainerGroupDefinitionArn?:string, InstanceConnectionPortRange?:array{FromPort:int, ToPort:int}, InstanceInboundPermissions?:array<array{FromPort:int, ToPort:int, IpRange:string, Protocol:"TCP"|"UDP"}>, GameServerContainerGroupsPerInstance?:int, MaximumGameServerContainerGroupsPerInstance?:int, InstanceType?:string, BillingType?:"ON_DEMAND"|"SPOT", Description?:string, CreationTime?:int|string|\DateTimeInterface, MetricGroups?:array<string>, NewGameSessionProtectionPolicy?:"NoProtection"|"FullProtection", GameSessionCreationLimitPolicy?:array{NewGameSessionsPerCreator?:int, PolicyPeriodInMinutes?:int}, Status?:"PENDING"|"CREATING"|"CREATED"|"ACTIVATING"|"ACTIVE"|"UPDATING"|"DELETING", DeploymentDetails?:array{LatestDeploymentId?:string}, LogConfiguration?:array{LogDestination?:"NONE"|"CLOUDWATCH"|"S3", S3BucketName?:string, LogGroupArn?:string}, LocationAttributes?:array<array{Location?:string, Status?:"PENDING"|"CREATING"|"CREATED"|"ACTIVATING"|"ACTIVE"|"UPDATING"|"DELETING"}>}>, NextToken?:string}>
     */
    public function listContainerFleetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Limit?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ContainerGroupDefinitions?:array<array{ContainerGroupDefinitionArn?:string, CreationTime?:int|string|\DateTimeInterface, OperatingSystem?:"AMAZON_LINUX_2023", Name:string, ContainerGroupType?:"GAME_SERVER"|"PER_INSTANCE", TotalMemoryLimitMebibytes?:int, TotalVcpuLimit?:float, GameServerContainerDefinition?:array{ContainerName?:string, DependsOn?:array<array{ContainerName:string, Condition:"START"|"COMPLETE"|"SUCCESS"|"HEALTHY"}>, MountPoints?:array<array{InstancePath:string, ContainerPath?:string, AccessLevel?:"READ_ONLY"|"READ_AND_WRITE"}>, EnvironmentOverride?:array<array{Name:string, Value:string}>, ImageUri?:string, PortConfiguration?:array{ContainerPortRanges:array<array{FromPort:int, ToPort:int, Protocol:"TCP"|"UDP"}>}, ResolvedImageDigest?:string, ServerSdkVersion?:string}, SupportContainerDefinitions?:array<array{ContainerName?:string, DependsOn?:array<array{ContainerName:string, Condition:"START"|"COMPLETE"|"SUCCESS"|"HEALTHY"}>, MountPoints?:array<array{InstancePath:string, ContainerPath?:string, AccessLevel?:"READ_ONLY"|"READ_AND_WRITE"}>, EnvironmentOverride?:array<array{Name:string, Value:string}>, Essential?:bool, HealthCheck?:array{Command:array<string>, Interval?:int, Retries?:int, StartPeriod?:int, Timeout?:int}, ImageUri?:string, MemoryHardLimitMebibytes?:int, PortConfiguration?:array{ContainerPortRanges:array<array{FromPort:int, ToPort:int, Protocol:"TCP"|"UDP"}>}, ResolvedImageDigest?:string, Vcpu?:float}>, VersionNumber?:int, VersionDescription?:string, Status?:"READY"|"COPYING"|"FAILED", StatusReason?:string}>, NextToken?:string}>
     */
    public function listContainerGroupDefinitionVersions(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Limit?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContainerGroupDefinitions?:array<array{ContainerGroupDefinitionArn?:string, CreationTime?:int|string|\DateTimeInterface, OperatingSystem?:"AMAZON_LINUX_2023", Name:string, ContainerGroupType?:"GAME_SERVER"|"PER_INSTANCE", TotalMemoryLimitMebibytes?:int, TotalVcpuLimit?:float, GameServerContainerDefinition?:array{ContainerName?:string, DependsOn?:array<array{ContainerName:string, Condition:"START"|"COMPLETE"|"SUCCESS"|"HEALTHY"}>, MountPoints?:array<array{InstancePath:string, ContainerPath?:string, AccessLevel?:"READ_ONLY"|"READ_AND_WRITE"}>, EnvironmentOverride?:array<array{Name:string, Value:string}>, ImageUri?:string, PortConfiguration?:array{ContainerPortRanges:array<array{FromPort:int, ToPort:int, Protocol:"TCP"|"UDP"}>}, ResolvedImageDigest?:string, ServerSdkVersion?:string}, SupportContainerDefinitions?:array<array{ContainerName?:string, DependsOn?:array<array{ContainerName:string, Condition:"START"|"COMPLETE"|"SUCCESS"|"HEALTHY"}>, MountPoints?:array<array{InstancePath:string, ContainerPath?:string, AccessLevel?:"READ_ONLY"|"READ_AND_WRITE"}>, EnvironmentOverride?:array<array{Name:string, Value:string}>, Essential?:bool, HealthCheck?:array{Command:array<string>, Interval?:int, Retries?:int, StartPeriod?:int, Timeout?:int}, ImageUri?:string, MemoryHardLimitMebibytes?:int, PortConfiguration?:array{ContainerPortRanges:array<array{FromPort:int, ToPort:int, Protocol:"TCP"|"UDP"}>}, ResolvedImageDigest?:string, Vcpu?:float}>, VersionNumber?:int, VersionDescription?:string, Status?:"READY"|"COPYING"|"FAILED", StatusReason?:string}>, NextToken?:string}>
     */
    public function listContainerGroupDefinitionVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContainerGroupType?:"GAME_SERVER"|"PER_INSTANCE", Limit?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ContainerGroupDefinitions?:array<array{ContainerGroupDefinitionArn?:string, CreationTime?:int|string|\DateTimeInterface, OperatingSystem?:"AMAZON_LINUX_2023", Name:string, ContainerGroupType?:"GAME_SERVER"|"PER_INSTANCE", TotalMemoryLimitMebibytes?:int, TotalVcpuLimit?:float, GameServerContainerDefinition?:array{ContainerName?:string, DependsOn?:array<array{ContainerName:string, Condition:"START"|"COMPLETE"|"SUCCESS"|"HEALTHY"}>, MountPoints?:array<array{InstancePath:string, ContainerPath?:string, AccessLevel?:"READ_ONLY"|"READ_AND_WRITE"}>, EnvironmentOverride?:array<array{Name:string, Value:string}>, ImageUri?:string, PortConfiguration?:array{ContainerPortRanges:array<array{FromPort:int, ToPort:int, Protocol:"TCP"|"UDP"}>}, ResolvedImageDigest?:string, ServerSdkVersion?:string}, SupportContainerDefinitions?:array<array{ContainerName?:string, DependsOn?:array<array{ContainerName:string, Condition:"START"|"COMPLETE"|"SUCCESS"|"HEALTHY"}>, MountPoints?:array<array{InstancePath:string, ContainerPath?:string, AccessLevel?:"READ_ONLY"|"READ_AND_WRITE"}>, EnvironmentOverride?:array<array{Name:string, Value:string}>, Essential?:bool, HealthCheck?:array{Command:array<string>, Interval?:int, Retries?:int, StartPeriod?:int, Timeout?:int}, ImageUri?:string, MemoryHardLimitMebibytes?:int, PortConfiguration?:array{ContainerPortRanges:array<array{FromPort:int, ToPort:int, Protocol:"TCP"|"UDP"}>}, ResolvedImageDigest?:string, Vcpu?:float}>, VersionNumber?:int, VersionDescription?:string, Status?:"READY"|"COPYING"|"FAILED", StatusReason?:string}>, NextToken?:string}>
     */
    public function listContainerGroupDefinitions(array $args = []): \AWS\Result { }

    /**
     * @param array{ContainerGroupType?:"GAME_SERVER"|"PER_INSTANCE", Limit?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContainerGroupDefinitions?:array<array{ContainerGroupDefinitionArn?:string, CreationTime?:int|string|\DateTimeInterface, OperatingSystem?:"AMAZON_LINUX_2023", Name:string, ContainerGroupType?:"GAME_SERVER"|"PER_INSTANCE", TotalMemoryLimitMebibytes?:int, TotalVcpuLimit?:float, GameServerContainerDefinition?:array{ContainerName?:string, DependsOn?:array<array{ContainerName:string, Condition:"START"|"COMPLETE"|"SUCCESS"|"HEALTHY"}>, MountPoints?:array<array{InstancePath:string, ContainerPath?:string, AccessLevel?:"READ_ONLY"|"READ_AND_WRITE"}>, EnvironmentOverride?:array<array{Name:string, Value:string}>, ImageUri?:string, PortConfiguration?:array{ContainerPortRanges:array<array{FromPort:int, ToPort:int, Protocol:"TCP"|"UDP"}>}, ResolvedImageDigest?:string, ServerSdkVersion?:string}, SupportContainerDefinitions?:array<array{ContainerName?:string, DependsOn?:array<array{ContainerName:string, Condition:"START"|"COMPLETE"|"SUCCESS"|"HEALTHY"}>, MountPoints?:array<array{InstancePath:string, ContainerPath?:string, AccessLevel?:"READ_ONLY"|"READ_AND_WRITE"}>, EnvironmentOverride?:array<array{Name:string, Value:string}>, Essential?:bool, HealthCheck?:array{Command:array<string>, Interval?:int, Retries?:int, StartPeriod?:int, Timeout?:int}, ImageUri?:string, MemoryHardLimitMebibytes?:int, PortConfiguration?:array{ContainerPortRanges:array<array{FromPort:int, ToPort:int, Protocol:"TCP"|"UDP"}>}, ResolvedImageDigest?:string, Vcpu?:float}>, VersionNumber?:int, VersionDescription?:string, Status?:"READY"|"COPYING"|"FAILED", StatusReason?:string}>, NextToken?:string}>
     */
    public function listContainerGroupDefinitionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId?:string, Limit?:int, NextToken?:string} $args
     * @return \AWS\Result<array{FleetDeployments?:array<array{DeploymentId?:string, FleetId?:string, GameServerBinaryArn?:string, RollbackGameServerBinaryArn?:string, PerInstanceBinaryArn?:string, RollbackPerInstanceBinaryArn?:string, DeploymentStatus?:"IN_PROGRESS"|"IMPAIRED"|"COMPLETE"|"ROLLBACK_IN_PROGRESS"|"ROLLBACK_COMPLETE"|"CANCELLED"|"PENDING", DeploymentConfiguration?:array{ProtectionStrategy?:"WITH_PROTECTION"|"IGNORE_PROTECTION", MinimumHealthyPercentage?:int, ImpairmentStrategy?:"MAINTAIN"|"ROLLBACK"}, CreationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listFleetDeployments(array $args = []): \AWS\Result { }

    /**
     * @param array{FleetId?:string, Limit?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FleetDeployments?:array<array{DeploymentId?:string, FleetId?:string, GameServerBinaryArn?:string, RollbackGameServerBinaryArn?:string, PerInstanceBinaryArn?:string, RollbackPerInstanceBinaryArn?:string, DeploymentStatus?:"IN_PROGRESS"|"IMPAIRED"|"COMPLETE"|"ROLLBACK_IN_PROGRESS"|"ROLLBACK_COMPLETE"|"CANCELLED"|"PENDING", DeploymentConfiguration?:array{ProtectionStrategy?:"WITH_PROTECTION"|"IGNORE_PROTECTION", MinimumHealthyPercentage?:int, ImpairmentStrategy?:"MAINTAIN"|"ROLLBACK"}, CreationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listFleetDeploymentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BuildId?:string, ScriptId?:string, Limit?:int, NextToken?:string} $args
     * @return \AWS\Result<array{FleetIds?:array<string>, NextToken?:string}>
     */
    public function listFleets(array $args = []): \AWS\Result { }

    /**
     * @param array{BuildId?:string, ScriptId?:string, Limit?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FleetIds?:array<string>, NextToken?:string}>
     */
    public function listFleetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Limit?:int, NextToken?:string} $args
     * @return \AWS\Result<array{GameServerGroups?:array<array{GameServerGroupName?:string, GameServerGroupArn?:string, RoleArn?:string, InstanceDefinitions?:array<array{InstanceType:"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge", WeightedCapacity?:string}>, BalancingStrategy?:"SPOT_ONLY"|"SPOT_PREFERRED"|"ON_DEMAND_ONLY", GameServerProtectionPolicy?:"NO_PROTECTION"|"FULL_PROTECTION", AutoScalingGroupArn?:string, Status?:"NEW"|"ACTIVATING"|"ACTIVE"|"DELETE_SCHEDULED"|"DELETING"|"DELETED"|"ERROR", StatusReason?:string, SuspendedActions?:array<"REPLACE_INSTANCE_TYPES">, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listGameServerGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{Limit?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GameServerGroups?:array<array{GameServerGroupName?:string, GameServerGroupArn?:string, RoleArn?:string, InstanceDefinitions?:array<array{InstanceType:"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge", WeightedCapacity?:string}>, BalancingStrategy?:"SPOT_ONLY"|"SPOT_PREFERRED"|"ON_DEMAND_ONLY", GameServerProtectionPolicy?:"NO_PROTECTION"|"FULL_PROTECTION", AutoScalingGroupArn?:string, Status?:"NEW"|"ACTIVATING"|"ACTIVE"|"DELETE_SCHEDULED"|"DELETING"|"DELETED"|"ERROR", StatusReason?:string, SuspendedActions?:array<"REPLACE_INSTANCE_TYPES">, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listGameServerGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GameServerGroupName:string, SortOrder?:"ASCENDING"|"DESCENDING", Limit?:int, NextToken?:string} $args
     * @return \AWS\Result<array{GameServers?:array<array{GameServerGroupName?:string, GameServerGroupArn?:string, GameServerId?:string, InstanceId?:string, ConnectionInfo?:string, GameServerData?:string, ClaimStatus?:"CLAIMED", UtilizationStatus?:"AVAILABLE"|"UTILIZED", RegistrationTime?:int|string|\DateTimeInterface, LastClaimTime?:int|string|\DateTimeInterface, LastHealthCheckTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listGameServers(array $args): \AWS\Result { }

    /**
     * @param array{GameServerGroupName:string, SortOrder?:"ASCENDING"|"DESCENDING", Limit?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GameServers?:array<array{GameServerGroupName?:string, GameServerGroupArn?:string, GameServerId?:string, InstanceId?:string, ConnectionInfo?:string, GameServerData?:string, ClaimStatus?:"CLAIMED", UtilizationStatus?:"AVAILABLE"|"UTILIZED", RegistrationTime?:int|string|\DateTimeInterface, LastClaimTime?:int|string|\DateTimeInterface, LastHealthCheckTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listGameServersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array<"AWS"|"CUSTOM">, Limit?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Locations?:array<array{LocationName?:string, LocationArn?:string}>, NextToken?:string}>
     */
    public function listLocations(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array<"AWS"|"CUSTOM">, Limit?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Locations?:array<array{LocationName?:string, LocationArn?:string}>, NextToken?:string}>
     */
    public function listLocationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Limit?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Scripts?:array<array{ScriptId?:string, ScriptArn?:string, Name?:string, Version?:string, SizeOnDisk?:int, CreationTime?:int|string|\DateTimeInterface, StorageLocation?:array{Bucket?:string, Key?:string, RoleArn?:string, ObjectVersion?:string}}>, NextToken?:string}>
     */
    public function listScripts(array $args = []): \AWS\Result { }

    /**
     * @param array{Limit?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Scripts?:array<array{ScriptId?:string, ScriptArn?:string, Name?:string, Version?:string, SizeOnDisk?:int, CreationTime?:int|string|\DateTimeInterface, StorageLocation?:array{Bucket?:string, Key?:string, RoleArn?:string, ObjectVersion?:string}}>, NextToken?:string}>
     */
    public function listScriptsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, FleetId:string, ScalingAdjustment?:int, ScalingAdjustmentType?:"ChangeInCapacity"|"ExactCapacity"|"PercentChangeInCapacity", Threshold?:float, ComparisonOperator?:"GreaterThanOrEqualToThreshold"|"GreaterThanThreshold"|"LessThanThreshold"|"LessThanOrEqualToThreshold", EvaluationPeriods?:int, MetricName:"ActivatingGameSessions"|"ActiveGameSessions"|"ActiveInstances"|"AvailableGameSessions"|"AvailablePlayerSessions"|"CurrentPlayerSessions"|"IdleInstances"|"PercentAvailableGameSessions"|"PercentIdleInstances"|"QueueDepth"|"WaitTime"|"ConcurrentActivatableGameSessions", PolicyType?:"RuleBased"|"TargetBased", TargetConfiguration?:array{TargetValue:float}} $args
     * @return \AWS\Result<array{Name?:string}>
     */
    public function putScalingPolicy(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, FleetId:string, ScalingAdjustment?:int, ScalingAdjustmentType?:"ChangeInCapacity"|"ExactCapacity"|"PercentChangeInCapacity", Threshold?:float, ComparisonOperator?:"GreaterThanOrEqualToThreshold"|"GreaterThanThreshold"|"LessThanThreshold"|"LessThanOrEqualToThreshold", EvaluationPeriods?:int, MetricName:"ActivatingGameSessions"|"ActiveGameSessions"|"ActiveInstances"|"AvailableGameSessions"|"AvailablePlayerSessions"|"CurrentPlayerSessions"|"IdleInstances"|"PercentAvailableGameSessions"|"PercentIdleInstances"|"QueueDepth"|"WaitTime"|"ConcurrentActivatableGameSessions", PolicyType?:"RuleBased"|"TargetBased", TargetConfiguration?:array{TargetValue:float}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name?:string}>
     */
    public function putScalingPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId:string, ComputeName:string, CertificatePath?:string, DnsName?:string, IpAddress?:string, Location?:string} $args
     * @return \AWS\Result<array{Compute?:array{FleetId?:string, FleetArn?:string, ComputeName?:string, ComputeArn?:string, IpAddress?:string, DnsName?:string, ComputeStatus?:"PENDING"|"ACTIVE"|"TERMINATING"|"IMPAIRED", Location?:string, CreationTime?:int|string|\DateTimeInterface, OperatingSystem?:"WINDOWS_2012"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"WINDOWS_2016"|"AMAZON_LINUX_2023", Type?:"t2.micro"|"t2.small"|"t2.medium"|"t2.large"|"c3.large"|"c3.xlarge"|"c3.2xlarge"|"c3.4xlarge"|"c3.8xlarge"|"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"r3.large"|"r3.xlarge"|"r3.2xlarge"|"r3.4xlarge"|"r3.8xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"m3.medium"|"m3.large"|"m3.xlarge"|"m3.2xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"c5d.large"|"c5d.xlarge"|"c5d.2xlarge"|"c5d.4xlarge"|"c5d.9xlarge"|"c5d.12xlarge"|"c5d.18xlarge"|"c5d.24xlarge"|"c6a.large"|"c6a.xlarge"|"c6a.2xlarge"|"c6a.4xlarge"|"c6a.8xlarge"|"c6a.12xlarge"|"c6a.16xlarge"|"c6a.24xlarge"|"c6i.large"|"c6i.xlarge"|"c6i.2xlarge"|"c6i.4xlarge"|"c6i.8xlarge"|"c6i.12xlarge"|"c6i.16xlarge"|"c6i.24xlarge"|"r5d.large"|"r5d.xlarge"|"r5d.2xlarge"|"r5d.4xlarge"|"r5d.8xlarge"|"r5d.12xlarge"|"r5d.16xlarge"|"r5d.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"c6gn.medium"|"c6gn.large"|"c6gn.xlarge"|"c6gn.2xlarge"|"c6gn.4xlarge"|"c6gn.8xlarge"|"c6gn.12xlarge"|"c6gn.16xlarge"|"c7g.medium"|"c7g.large"|"c7g.xlarge"|"c7g.2xlarge"|"c7g.4xlarge"|"c7g.8xlarge"|"c7g.12xlarge"|"c7g.16xlarge"|"r7g.medium"|"r7g.large"|"r7g.xlarge"|"r7g.2xlarge"|"r7g.4xlarge"|"r7g.8xlarge"|"r7g.12xlarge"|"r7g.16xlarge"|"m7g.medium"|"m7g.large"|"m7g.xlarge"|"m7g.2xlarge"|"m7g.4xlarge"|"m7g.8xlarge"|"m7g.12xlarge"|"m7g.16xlarge"|"g5g.xlarge"|"g5g.2xlarge"|"g5g.4xlarge"|"g5g.8xlarge"|"g5g.16xlarge", GameLiftServiceSdkEndpoint?:string, GameLiftAgentEndpoint?:string, InstanceId?:string, ContainerAttributes?:array<array{ContainerName?:string, ContainerRuntimeId?:string}>, GameServerContainerGroupDefinitionArn?:string}}>
     */
    public function registerCompute(array $args): \AWS\Result { }

    /**
     * @param array{FleetId:string, ComputeName:string, CertificatePath?:string, DnsName?:string, IpAddress?:string, Location?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Compute?:array{FleetId?:string, FleetArn?:string, ComputeName?:string, ComputeArn?:string, IpAddress?:string, DnsName?:string, ComputeStatus?:"PENDING"|"ACTIVE"|"TERMINATING"|"IMPAIRED", Location?:string, CreationTime?:int|string|\DateTimeInterface, OperatingSystem?:"WINDOWS_2012"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"WINDOWS_2016"|"AMAZON_LINUX_2023", Type?:"t2.micro"|"t2.small"|"t2.medium"|"t2.large"|"c3.large"|"c3.xlarge"|"c3.2xlarge"|"c3.4xlarge"|"c3.8xlarge"|"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"r3.large"|"r3.xlarge"|"r3.2xlarge"|"r3.4xlarge"|"r3.8xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"m3.medium"|"m3.large"|"m3.xlarge"|"m3.2xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"c5d.large"|"c5d.xlarge"|"c5d.2xlarge"|"c5d.4xlarge"|"c5d.9xlarge"|"c5d.12xlarge"|"c5d.18xlarge"|"c5d.24xlarge"|"c6a.large"|"c6a.xlarge"|"c6a.2xlarge"|"c6a.4xlarge"|"c6a.8xlarge"|"c6a.12xlarge"|"c6a.16xlarge"|"c6a.24xlarge"|"c6i.large"|"c6i.xlarge"|"c6i.2xlarge"|"c6i.4xlarge"|"c6i.8xlarge"|"c6i.12xlarge"|"c6i.16xlarge"|"c6i.24xlarge"|"r5d.large"|"r5d.xlarge"|"r5d.2xlarge"|"r5d.4xlarge"|"r5d.8xlarge"|"r5d.12xlarge"|"r5d.16xlarge"|"r5d.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"c6gn.medium"|"c6gn.large"|"c6gn.xlarge"|"c6gn.2xlarge"|"c6gn.4xlarge"|"c6gn.8xlarge"|"c6gn.12xlarge"|"c6gn.16xlarge"|"c7g.medium"|"c7g.large"|"c7g.xlarge"|"c7g.2xlarge"|"c7g.4xlarge"|"c7g.8xlarge"|"c7g.12xlarge"|"c7g.16xlarge"|"r7g.medium"|"r7g.large"|"r7g.xlarge"|"r7g.2xlarge"|"r7g.4xlarge"|"r7g.8xlarge"|"r7g.12xlarge"|"r7g.16xlarge"|"m7g.medium"|"m7g.large"|"m7g.xlarge"|"m7g.2xlarge"|"m7g.4xlarge"|"m7g.8xlarge"|"m7g.12xlarge"|"m7g.16xlarge"|"g5g.xlarge"|"g5g.2xlarge"|"g5g.4xlarge"|"g5g.8xlarge"|"g5g.16xlarge", GameLiftServiceSdkEndpoint?:string, GameLiftAgentEndpoint?:string, InstanceId?:string, ContainerAttributes?:array<array{ContainerName?:string, ContainerRuntimeId?:string}>, GameServerContainerGroupDefinitionArn?:string}}>
     */
    public function registerComputeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GameServerGroupName:string, GameServerId:string, InstanceId:string, ConnectionInfo?:string, GameServerData?:string} $args
     * @return \AWS\Result<array{GameServer?:array{GameServerGroupName?:string, GameServerGroupArn?:string, GameServerId?:string, InstanceId?:string, ConnectionInfo?:string, GameServerData?:string, ClaimStatus?:"CLAIMED", UtilizationStatus?:"AVAILABLE"|"UTILIZED", RegistrationTime?:int|string|\DateTimeInterface, LastClaimTime?:int|string|\DateTimeInterface, LastHealthCheckTime?:int|string|\DateTimeInterface}}>
     */
    public function registerGameServer(array $args): \AWS\Result { }

    /**
     * @param array{GameServerGroupName:string, GameServerId:string, InstanceId:string, ConnectionInfo?:string, GameServerData?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GameServer?:array{GameServerGroupName?:string, GameServerGroupArn?:string, GameServerId?:string, InstanceId?:string, ConnectionInfo?:string, GameServerData?:string, ClaimStatus?:"CLAIMED", UtilizationStatus?:"AVAILABLE"|"UTILIZED", RegistrationTime?:int|string|\DateTimeInterface, LastClaimTime?:int|string|\DateTimeInterface, LastHealthCheckTime?:int|string|\DateTimeInterface}}>
     */
    public function registerGameServerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BuildId:string} $args
     * @return \AWS\Result<array{UploadCredentials?:array{AccessKeyId?:string, SecretAccessKey?:string, SessionToken?:string}, StorageLocation?:array{Bucket?:string, Key?:string, RoleArn?:string, ObjectVersion?:string}}>
     */
    public function requestUploadCredentials(array $args): \AWS\Result { }

    /**
     * @param array{BuildId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UploadCredentials?:array{AccessKeyId?:string, SecretAccessKey?:string, SessionToken?:string}, StorageLocation?:array{Bucket?:string, Key?:string, RoleArn?:string, ObjectVersion?:string}}>
     */
    public function requestUploadCredentialsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AliasId:string} $args
     * @return \AWS\Result<array{FleetId?:string, FleetArn?:string}>
     */
    public function resolveAlias(array $args): \AWS\Result { }

    /**
     * @param array{AliasId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FleetId?:string, FleetArn?:string}>
     */
    public function resolveAliasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GameServerGroupName:string, ResumeActions:array<"REPLACE_INSTANCE_TYPES">} $args
     * @return \AWS\Result<array{GameServerGroup?:array{GameServerGroupName?:string, GameServerGroupArn?:string, RoleArn?:string, InstanceDefinitions?:array<array{InstanceType:"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge", WeightedCapacity?:string}>, BalancingStrategy?:"SPOT_ONLY"|"SPOT_PREFERRED"|"ON_DEMAND_ONLY", GameServerProtectionPolicy?:"NO_PROTECTION"|"FULL_PROTECTION", AutoScalingGroupArn?:string, Status?:"NEW"|"ACTIVATING"|"ACTIVE"|"DELETE_SCHEDULED"|"DELETING"|"DELETED"|"ERROR", StatusReason?:string, SuspendedActions?:array<"REPLACE_INSTANCE_TYPES">, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface}}>
     */
    public function resumeGameServerGroup(array $args): \AWS\Result { }

    /**
     * @param array{GameServerGroupName:string, ResumeActions:array<"REPLACE_INSTANCE_TYPES">} $args
     * @return \GuzzleHttp\Promise\Promise<array{GameServerGroup?:array{GameServerGroupName?:string, GameServerGroupArn?:string, RoleArn?:string, InstanceDefinitions?:array<array{InstanceType:"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge", WeightedCapacity?:string}>, BalancingStrategy?:"SPOT_ONLY"|"SPOT_PREFERRED"|"ON_DEMAND_ONLY", GameServerProtectionPolicy?:"NO_PROTECTION"|"FULL_PROTECTION", AutoScalingGroupArn?:string, Status?:"NEW"|"ACTIVATING"|"ACTIVE"|"DELETE_SCHEDULED"|"DELETING"|"DELETED"|"ERROR", StatusReason?:string, SuspendedActions?:array<"REPLACE_INSTANCE_TYPES">, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface}}>
     */
    public function resumeGameServerGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId?:string, AliasId?:string, Location?:string, FilterExpression?:string, SortExpression?:string, Limit?:int, NextToken?:string} $args
     * @return \AWS\Result<array{GameSessions?:array<array{GameSessionId?:string, Name?:string, FleetId?:string, FleetArn?:string, CreationTime?:int|string|\DateTimeInterface, TerminationTime?:int|string|\DateTimeInterface, CurrentPlayerSessionCount?:int, MaximumPlayerSessionCount?:int, Status?:"ACTIVE"|"ACTIVATING"|"TERMINATED"|"TERMINATING"|"ERROR", StatusReason?:"INTERRUPTED"|"TRIGGERED_ON_PROCESS_TERMINATE"|"FORCE_TERMINATED", GameProperties?:array<array{Key:string, Value:string}>, IpAddress?:string, DnsName?:string, Port?:int, PlayerSessionCreationPolicy?:"ACCEPT_ALL"|"DENY_ALL", CreatorId?:string, GameSessionData?:string, MatchmakerData?:string, Location?:string}>, NextToken?:string}>
     */
    public function searchGameSessions(array $args = []): \AWS\Result { }

    /**
     * @param array{FleetId?:string, AliasId?:string, Location?:string, FilterExpression?:string, SortExpression?:string, Limit?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GameSessions?:array<array{GameSessionId?:string, Name?:string, FleetId?:string, FleetArn?:string, CreationTime?:int|string|\DateTimeInterface, TerminationTime?:int|string|\DateTimeInterface, CurrentPlayerSessionCount?:int, MaximumPlayerSessionCount?:int, Status?:"ACTIVE"|"ACTIVATING"|"TERMINATED"|"TERMINATING"|"ERROR", StatusReason?:"INTERRUPTED"|"TRIGGERED_ON_PROCESS_TERMINATE"|"FORCE_TERMINATED", GameProperties?:array<array{Key:string, Value:string}>, IpAddress?:string, DnsName?:string, Port?:int, PlayerSessionCreationPolicy?:"ACCEPT_ALL"|"DENY_ALL", CreatorId?:string, GameSessionData?:string, MatchmakerData?:string, Location?:string}>, NextToken?:string}>
     */
    public function searchGameSessionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId:string, Actions:array<"AUTO_SCALING">, Location?:string} $args
     * @return \AWS\Result<array{FleetId?:string, FleetArn?:string}>
     */
    public function startFleetActions(array $args): \AWS\Result { }

    /**
     * @param array{FleetId:string, Actions:array<"AUTO_SCALING">, Location?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FleetId?:string, FleetArn?:string}>
     */
    public function startFleetActionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PlacementId:string, GameSessionQueueName:string, GameProperties?:array<array{Key:string, Value:string}>, MaximumPlayerSessionCount:int, GameSessionName?:string, PlayerLatencies?:array<array{PlayerId?:string, RegionIdentifier?:string, LatencyInMilliseconds?:float}>, DesiredPlayerSessions?:array<array{PlayerId?:string, PlayerData?:string}>, GameSessionData?:string, PriorityConfigurationOverride?:array{PlacementFallbackStrategy?:"DEFAULT_AFTER_SINGLE_PASS"|"NONE", LocationOrder:array<string>}} $args
     * @return \AWS\Result<array{GameSessionPlacement?:array{PlacementId?:string, GameSessionQueueName?:string, Status?:"PENDING"|"FULFILLED"|"CANCELLED"|"TIMED_OUT"|"FAILED", GameProperties?:array<array{Key:string, Value:string}>, MaximumPlayerSessionCount?:int, GameSessionName?:string, GameSessionId?:string, GameSessionArn?:string, GameSessionRegion?:string, PlayerLatencies?:array<array{PlayerId?:string, RegionIdentifier?:string, LatencyInMilliseconds?:float}>, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, IpAddress?:string, DnsName?:string, Port?:int, PlacedPlayerSessions?:array<array{PlayerId?:string, PlayerSessionId?:string}>, GameSessionData?:string, MatchmakerData?:string, PriorityConfigurationOverride?:array{PlacementFallbackStrategy?:"DEFAULT_AFTER_SINGLE_PASS"|"NONE", LocationOrder:array<string>}}}>
     */
    public function startGameSessionPlacement(array $args): \AWS\Result { }

    /**
     * @param array{PlacementId:string, GameSessionQueueName:string, GameProperties?:array<array{Key:string, Value:string}>, MaximumPlayerSessionCount:int, GameSessionName?:string, PlayerLatencies?:array<array{PlayerId?:string, RegionIdentifier?:string, LatencyInMilliseconds?:float}>, DesiredPlayerSessions?:array<array{PlayerId?:string, PlayerData?:string}>, GameSessionData?:string, PriorityConfigurationOverride?:array{PlacementFallbackStrategy?:"DEFAULT_AFTER_SINGLE_PASS"|"NONE", LocationOrder:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{GameSessionPlacement?:array{PlacementId?:string, GameSessionQueueName?:string, Status?:"PENDING"|"FULFILLED"|"CANCELLED"|"TIMED_OUT"|"FAILED", GameProperties?:array<array{Key:string, Value:string}>, MaximumPlayerSessionCount?:int, GameSessionName?:string, GameSessionId?:string, GameSessionArn?:string, GameSessionRegion?:string, PlayerLatencies?:array<array{PlayerId?:string, RegionIdentifier?:string, LatencyInMilliseconds?:float}>, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, IpAddress?:string, DnsName?:string, Port?:int, PlacedPlayerSessions?:array<array{PlayerId?:string, PlayerSessionId?:string}>, GameSessionData?:string, MatchmakerData?:string, PriorityConfigurationOverride?:array{PlacementFallbackStrategy?:"DEFAULT_AFTER_SINGLE_PASS"|"NONE", LocationOrder:array<string>}}}>
     */
    public function startGameSessionPlacementAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TicketId?:string, ConfigurationName:string, GameSessionArn?:string, Players:array<array{PlayerId?:string, PlayerAttributes?:array<string, array{S?:string, N?:float, SL?:array<string>, SDM?:array<string, float>}>, Team?:string, LatencyInMs?:array<string, int>}>} $args
     * @return \AWS\Result<array{MatchmakingTicket?:array{TicketId?:string, ConfigurationName?:string, ConfigurationArn?:string, Status?:"CANCELLED"|"COMPLETED"|"FAILED"|"PLACING"|"QUEUED"|"REQUIRES_ACCEPTANCE"|"SEARCHING"|"TIMED_OUT", StatusReason?:string, StatusMessage?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Players?:array<array{PlayerId?:string, PlayerAttributes?:array<string, array{S?:string, N?:float, SL?:array<string>, SDM?:array<string, float>}>, Team?:string, LatencyInMs?:array<string, int>}>, GameSessionConnectionInfo?:array{GameSessionArn?:string, IpAddress?:string, DnsName?:string, Port?:int, MatchedPlayerSessions?:array<array{PlayerId?:string, PlayerSessionId?:string}>}, EstimatedWaitTime?:int}}>
     */
    public function startMatchBackfill(array $args): \AWS\Result { }

    /**
     * @param array{TicketId?:string, ConfigurationName:string, GameSessionArn?:string, Players:array<array{PlayerId?:string, PlayerAttributes?:array<string, array{S?:string, N?:float, SL?:array<string>, SDM?:array<string, float>}>, Team?:string, LatencyInMs?:array<string, int>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{MatchmakingTicket?:array{TicketId?:string, ConfigurationName?:string, ConfigurationArn?:string, Status?:"CANCELLED"|"COMPLETED"|"FAILED"|"PLACING"|"QUEUED"|"REQUIRES_ACCEPTANCE"|"SEARCHING"|"TIMED_OUT", StatusReason?:string, StatusMessage?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Players?:array<array{PlayerId?:string, PlayerAttributes?:array<string, array{S?:string, N?:float, SL?:array<string>, SDM?:array<string, float>}>, Team?:string, LatencyInMs?:array<string, int>}>, GameSessionConnectionInfo?:array{GameSessionArn?:string, IpAddress?:string, DnsName?:string, Port?:int, MatchedPlayerSessions?:array<array{PlayerId?:string, PlayerSessionId?:string}>}, EstimatedWaitTime?:int}}>
     */
    public function startMatchBackfillAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TicketId?:string, ConfigurationName:string, Players:array<array{PlayerId?:string, PlayerAttributes?:array<string, array{S?:string, N?:float, SL?:array<string>, SDM?:array<string, float>}>, Team?:string, LatencyInMs?:array<string, int>}>} $args
     * @return \AWS\Result<array{MatchmakingTicket?:array{TicketId?:string, ConfigurationName?:string, ConfigurationArn?:string, Status?:"CANCELLED"|"COMPLETED"|"FAILED"|"PLACING"|"QUEUED"|"REQUIRES_ACCEPTANCE"|"SEARCHING"|"TIMED_OUT", StatusReason?:string, StatusMessage?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Players?:array<array{PlayerId?:string, PlayerAttributes?:array<string, array{S?:string, N?:float, SL?:array<string>, SDM?:array<string, float>}>, Team?:string, LatencyInMs?:array<string, int>}>, GameSessionConnectionInfo?:array{GameSessionArn?:string, IpAddress?:string, DnsName?:string, Port?:int, MatchedPlayerSessions?:array<array{PlayerId?:string, PlayerSessionId?:string}>}, EstimatedWaitTime?:int}}>
     */
    public function startMatchmaking(array $args): \AWS\Result { }

    /**
     * @param array{TicketId?:string, ConfigurationName:string, Players:array<array{PlayerId?:string, PlayerAttributes?:array<string, array{S?:string, N?:float, SL?:array<string>, SDM?:array<string, float>}>, Team?:string, LatencyInMs?:array<string, int>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{MatchmakingTicket?:array{TicketId?:string, ConfigurationName?:string, ConfigurationArn?:string, Status?:"CANCELLED"|"COMPLETED"|"FAILED"|"PLACING"|"QUEUED"|"REQUIRES_ACCEPTANCE"|"SEARCHING"|"TIMED_OUT", StatusReason?:string, StatusMessage?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, Players?:array<array{PlayerId?:string, PlayerAttributes?:array<string, array{S?:string, N?:float, SL?:array<string>, SDM?:array<string, float>}>, Team?:string, LatencyInMs?:array<string, int>}>, GameSessionConnectionInfo?:array{GameSessionArn?:string, IpAddress?:string, DnsName?:string, Port?:int, MatchedPlayerSessions?:array<array{PlayerId?:string, PlayerSessionId?:string}>}, EstimatedWaitTime?:int}}>
     */
    public function startMatchmakingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId:string, Actions:array<"AUTO_SCALING">, Location?:string} $args
     * @return \AWS\Result<array{FleetId?:string, FleetArn?:string}>
     */
    public function stopFleetActions(array $args): \AWS\Result { }

    /**
     * @param array{FleetId:string, Actions:array<"AUTO_SCALING">, Location?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FleetId?:string, FleetArn?:string}>
     */
    public function stopFleetActionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PlacementId:string} $args
     * @return \AWS\Result<array{GameSessionPlacement?:array{PlacementId?:string, GameSessionQueueName?:string, Status?:"PENDING"|"FULFILLED"|"CANCELLED"|"TIMED_OUT"|"FAILED", GameProperties?:array<array{Key:string, Value:string}>, MaximumPlayerSessionCount?:int, GameSessionName?:string, GameSessionId?:string, GameSessionArn?:string, GameSessionRegion?:string, PlayerLatencies?:array<array{PlayerId?:string, RegionIdentifier?:string, LatencyInMilliseconds?:float}>, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, IpAddress?:string, DnsName?:string, Port?:int, PlacedPlayerSessions?:array<array{PlayerId?:string, PlayerSessionId?:string}>, GameSessionData?:string, MatchmakerData?:string, PriorityConfigurationOverride?:array{PlacementFallbackStrategy?:"DEFAULT_AFTER_SINGLE_PASS"|"NONE", LocationOrder:array<string>}}}>
     */
    public function stopGameSessionPlacement(array $args): \AWS\Result { }

    /**
     * @param array{PlacementId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GameSessionPlacement?:array{PlacementId?:string, GameSessionQueueName?:string, Status?:"PENDING"|"FULFILLED"|"CANCELLED"|"TIMED_OUT"|"FAILED", GameProperties?:array<array{Key:string, Value:string}>, MaximumPlayerSessionCount?:int, GameSessionName?:string, GameSessionId?:string, GameSessionArn?:string, GameSessionRegion?:string, PlayerLatencies?:array<array{PlayerId?:string, RegionIdentifier?:string, LatencyInMilliseconds?:float}>, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface, IpAddress?:string, DnsName?:string, Port?:int, PlacedPlayerSessions?:array<array{PlayerId?:string, PlayerSessionId?:string}>, GameSessionData?:string, MatchmakerData?:string, PriorityConfigurationOverride?:array{PlacementFallbackStrategy?:"DEFAULT_AFTER_SINGLE_PASS"|"NONE", LocationOrder:array<string>}}}>
     */
    public function stopGameSessionPlacementAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TicketId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopMatchmaking(array $args): \AWS\Result { }

    /**
     * @param array{TicketId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopMatchmakingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GameServerGroupName:string, SuspendActions:array<"REPLACE_INSTANCE_TYPES">} $args
     * @return \AWS\Result<array{GameServerGroup?:array{GameServerGroupName?:string, GameServerGroupArn?:string, RoleArn?:string, InstanceDefinitions?:array<array{InstanceType:"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge", WeightedCapacity?:string}>, BalancingStrategy?:"SPOT_ONLY"|"SPOT_PREFERRED"|"ON_DEMAND_ONLY", GameServerProtectionPolicy?:"NO_PROTECTION"|"FULL_PROTECTION", AutoScalingGroupArn?:string, Status?:"NEW"|"ACTIVATING"|"ACTIVE"|"DELETE_SCHEDULED"|"DELETING"|"DELETED"|"ERROR", StatusReason?:string, SuspendedActions?:array<"REPLACE_INSTANCE_TYPES">, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface}}>
     */
    public function suspendGameServerGroup(array $args): \AWS\Result { }

    /**
     * @param array{GameServerGroupName:string, SuspendActions:array<"REPLACE_INSTANCE_TYPES">} $args
     * @return \GuzzleHttp\Promise\Promise<array{GameServerGroup?:array{GameServerGroupName?:string, GameServerGroupArn?:string, RoleArn?:string, InstanceDefinitions?:array<array{InstanceType:"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge", WeightedCapacity?:string}>, BalancingStrategy?:"SPOT_ONLY"|"SPOT_PREFERRED"|"ON_DEMAND_ONLY", GameServerProtectionPolicy?:"NO_PROTECTION"|"FULL_PROTECTION", AutoScalingGroupArn?:string, Status?:"NEW"|"ACTIVATING"|"ACTIVE"|"DELETE_SCHEDULED"|"DELETING"|"DELETED"|"ERROR", StatusReason?:string, SuspendedActions?:array<"REPLACE_INSTANCE_TYPES">, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface}}>
     */
    public function suspendGameServerGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GameSessionId:string, TerminationMode:"TRIGGER_ON_PROCESS_TERMINATE"|"FORCE_TERMINATE"} $args
     * @return \AWS\Result<array{GameSession?:array{GameSessionId?:string, Name?:string, FleetId?:string, FleetArn?:string, CreationTime?:int|string|\DateTimeInterface, TerminationTime?:int|string|\DateTimeInterface, CurrentPlayerSessionCount?:int, MaximumPlayerSessionCount?:int, Status?:"ACTIVE"|"ACTIVATING"|"TERMINATED"|"TERMINATING"|"ERROR", StatusReason?:"INTERRUPTED"|"TRIGGERED_ON_PROCESS_TERMINATE"|"FORCE_TERMINATED", GameProperties?:array<array{Key:string, Value:string}>, IpAddress?:string, DnsName?:string, Port?:int, PlayerSessionCreationPolicy?:"ACCEPT_ALL"|"DENY_ALL", CreatorId?:string, GameSessionData?:string, MatchmakerData?:string, Location?:string}}>
     */
    public function terminateGameSession(array $args): \AWS\Result { }

    /**
     * @param array{GameSessionId:string, TerminationMode:"TRIGGER_ON_PROCESS_TERMINATE"|"FORCE_TERMINATE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{GameSession?:array{GameSessionId?:string, Name?:string, FleetId?:string, FleetArn?:string, CreationTime?:int|string|\DateTimeInterface, TerminationTime?:int|string|\DateTimeInterface, CurrentPlayerSessionCount?:int, MaximumPlayerSessionCount?:int, Status?:"ACTIVE"|"ACTIVATING"|"TERMINATED"|"TERMINATING"|"ERROR", StatusReason?:"INTERRUPTED"|"TRIGGERED_ON_PROCESS_TERMINATE"|"FORCE_TERMINATED", GameProperties?:array<array{Key:string, Value:string}>, IpAddress?:string, DnsName?:string, Port?:int, PlayerSessionCreationPolicy?:"ACCEPT_ALL"|"DENY_ALL", CreatorId?:string, GameSessionData?:string, MatchmakerData?:string, Location?:string}}>
     */
    public function terminateGameSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AliasId:string, Name?:string, Description?:string, RoutingStrategy?:array{Type?:"SIMPLE"|"TERMINAL", FleetId?:string, Message?:string}} $args
     * @return \AWS\Result<array{Alias?:array{AliasId?:string, Name?:string, AliasArn?:string, Description?:string, RoutingStrategy?:array{Type?:"SIMPLE"|"TERMINAL", FleetId?:string, Message?:string}, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface}}>
     */
    public function updateAlias(array $args): \AWS\Result { }

    /**
     * @param array{AliasId:string, Name?:string, Description?:string, RoutingStrategy?:array{Type?:"SIMPLE"|"TERMINAL", FleetId?:string, Message?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Alias?:array{AliasId?:string, Name?:string, AliasArn?:string, Description?:string, RoutingStrategy?:array{Type?:"SIMPLE"|"TERMINAL", FleetId?:string, Message?:string}, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface}}>
     */
    public function updateAliasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BuildId:string, Name?:string, Version?:string} $args
     * @return \AWS\Result<array{Build?:array{BuildId?:string, BuildArn?:string, Name?:string, Version?:string, Status?:"INITIALIZED"|"READY"|"FAILED", SizeOnDisk?:int, OperatingSystem?:"WINDOWS_2012"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"WINDOWS_2016"|"AMAZON_LINUX_2023", CreationTime?:int|string|\DateTimeInterface, ServerSdkVersion?:string}}>
     */
    public function updateBuild(array $args): \AWS\Result { }

    /**
     * @param array{BuildId:string, Name?:string, Version?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Build?:array{BuildId?:string, BuildArn?:string, Name?:string, Version?:string, Status?:"INITIALIZED"|"READY"|"FAILED", SizeOnDisk?:int, OperatingSystem?:"WINDOWS_2012"|"AMAZON_LINUX"|"AMAZON_LINUX_2"|"WINDOWS_2016"|"AMAZON_LINUX_2023", CreationTime?:int|string|\DateTimeInterface, ServerSdkVersion?:string}}>
     */
    public function updateBuildAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId:string, GameServerContainerGroupDefinitionName?:string, PerInstanceContainerGroupDefinitionName?:string, GameServerContainerGroupsPerInstance?:int, InstanceConnectionPortRange?:array{FromPort:int, ToPort:int}, InstanceInboundPermissionAuthorizations?:array<array{FromPort:int, ToPort:int, IpRange:string, Protocol:"TCP"|"UDP"}>, InstanceInboundPermissionRevocations?:array<array{FromPort:int, ToPort:int, IpRange:string, Protocol:"TCP"|"UDP"}>, DeploymentConfiguration?:array{ProtectionStrategy?:"WITH_PROTECTION"|"IGNORE_PROTECTION", MinimumHealthyPercentage?:int, ImpairmentStrategy?:"MAINTAIN"|"ROLLBACK"}, Description?:string, MetricGroups?:array<string>, NewGameSessionProtectionPolicy?:"NoProtection"|"FullProtection", GameSessionCreationLimitPolicy?:array{NewGameSessionsPerCreator?:int, PolicyPeriodInMinutes?:int}, LogConfiguration?:array{LogDestination?:"NONE"|"CLOUDWATCH"|"S3", S3BucketName?:string, LogGroupArn?:string}, RemoveAttributes?:array<"PER_INSTANCE_CONTAINER_GROUP_DEFINITION">} $args
     * @return \AWS\Result<array{ContainerFleet?:array{FleetId?:string, FleetArn?:string, FleetRoleArn?:string, GameServerContainerGroupDefinitionName?:string, GameServerContainerGroupDefinitionArn?:string, PerInstanceContainerGroupDefinitionName?:string, PerInstanceContainerGroupDefinitionArn?:string, InstanceConnectionPortRange?:array{FromPort:int, ToPort:int}, InstanceInboundPermissions?:array<array{FromPort:int, ToPort:int, IpRange:string, Protocol:"TCP"|"UDP"}>, GameServerContainerGroupsPerInstance?:int, MaximumGameServerContainerGroupsPerInstance?:int, InstanceType?:string, BillingType?:"ON_DEMAND"|"SPOT", Description?:string, CreationTime?:int|string|\DateTimeInterface, MetricGroups?:array<string>, NewGameSessionProtectionPolicy?:"NoProtection"|"FullProtection", GameSessionCreationLimitPolicy?:array{NewGameSessionsPerCreator?:int, PolicyPeriodInMinutes?:int}, Status?:"PENDING"|"CREATING"|"CREATED"|"ACTIVATING"|"ACTIVE"|"UPDATING"|"DELETING", DeploymentDetails?:array{LatestDeploymentId?:string}, LogConfiguration?:array{LogDestination?:"NONE"|"CLOUDWATCH"|"S3", S3BucketName?:string, LogGroupArn?:string}, LocationAttributes?:array<array{Location?:string, Status?:"PENDING"|"CREATING"|"CREATED"|"ACTIVATING"|"ACTIVE"|"UPDATING"|"DELETING"}>}}>
     */
    public function updateContainerFleet(array $args): \AWS\Result { }

    /**
     * @param array{FleetId:string, GameServerContainerGroupDefinitionName?:string, PerInstanceContainerGroupDefinitionName?:string, GameServerContainerGroupsPerInstance?:int, InstanceConnectionPortRange?:array{FromPort:int, ToPort:int}, InstanceInboundPermissionAuthorizations?:array<array{FromPort:int, ToPort:int, IpRange:string, Protocol:"TCP"|"UDP"}>, InstanceInboundPermissionRevocations?:array<array{FromPort:int, ToPort:int, IpRange:string, Protocol:"TCP"|"UDP"}>, DeploymentConfiguration?:array{ProtectionStrategy?:"WITH_PROTECTION"|"IGNORE_PROTECTION", MinimumHealthyPercentage?:int, ImpairmentStrategy?:"MAINTAIN"|"ROLLBACK"}, Description?:string, MetricGroups?:array<string>, NewGameSessionProtectionPolicy?:"NoProtection"|"FullProtection", GameSessionCreationLimitPolicy?:array{NewGameSessionsPerCreator?:int, PolicyPeriodInMinutes?:int}, LogConfiguration?:array{LogDestination?:"NONE"|"CLOUDWATCH"|"S3", S3BucketName?:string, LogGroupArn?:string}, RemoveAttributes?:array<"PER_INSTANCE_CONTAINER_GROUP_DEFINITION">} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContainerFleet?:array{FleetId?:string, FleetArn?:string, FleetRoleArn?:string, GameServerContainerGroupDefinitionName?:string, GameServerContainerGroupDefinitionArn?:string, PerInstanceContainerGroupDefinitionName?:string, PerInstanceContainerGroupDefinitionArn?:string, InstanceConnectionPortRange?:array{FromPort:int, ToPort:int}, InstanceInboundPermissions?:array<array{FromPort:int, ToPort:int, IpRange:string, Protocol:"TCP"|"UDP"}>, GameServerContainerGroupsPerInstance?:int, MaximumGameServerContainerGroupsPerInstance?:int, InstanceType?:string, BillingType?:"ON_DEMAND"|"SPOT", Description?:string, CreationTime?:int|string|\DateTimeInterface, MetricGroups?:array<string>, NewGameSessionProtectionPolicy?:"NoProtection"|"FullProtection", GameSessionCreationLimitPolicy?:array{NewGameSessionsPerCreator?:int, PolicyPeriodInMinutes?:int}, Status?:"PENDING"|"CREATING"|"CREATED"|"ACTIVATING"|"ACTIVE"|"UPDATING"|"DELETING", DeploymentDetails?:array{LatestDeploymentId?:string}, LogConfiguration?:array{LogDestination?:"NONE"|"CLOUDWATCH"|"S3", S3BucketName?:string, LogGroupArn?:string}, LocationAttributes?:array<array{Location?:string, Status?:"PENDING"|"CREATING"|"CREATED"|"ACTIVATING"|"ACTIVE"|"UPDATING"|"DELETING"}>}}>
     */
    public function updateContainerFleetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, GameServerContainerDefinition?:array{ContainerName:string, DependsOn?:array<array{ContainerName:string, Condition:"START"|"COMPLETE"|"SUCCESS"|"HEALTHY"}>, MountPoints?:array<array{InstancePath:string, ContainerPath?:string, AccessLevel?:"READ_ONLY"|"READ_AND_WRITE"}>, EnvironmentOverride?:array<array{Name:string, Value:string}>, ImageUri:string, PortConfiguration:array{ContainerPortRanges:array<array{FromPort:int, ToPort:int, Protocol:"TCP"|"UDP"}>}, ServerSdkVersion:string}, SupportContainerDefinitions?:array<array{ContainerName:string, DependsOn?:array<array{ContainerName:string, Condition:"START"|"COMPLETE"|"SUCCESS"|"HEALTHY"}>, MountPoints?:array<array{InstancePath:string, ContainerPath?:string, AccessLevel?:"READ_ONLY"|"READ_AND_WRITE"}>, EnvironmentOverride?:array<array{Name:string, Value:string}>, Essential?:bool, HealthCheck?:array{Command:array<string>, Interval?:int, Retries?:int, StartPeriod?:int, Timeout?:int}, ImageUri:string, MemoryHardLimitMebibytes?:int, PortConfiguration?:array{ContainerPortRanges:array<array{FromPort:int, ToPort:int, Protocol:"TCP"|"UDP"}>}, Vcpu?:float}>, TotalMemoryLimitMebibytes?:int, TotalVcpuLimit?:float, VersionDescription?:string, SourceVersionNumber?:int, OperatingSystem?:"AMAZON_LINUX_2023"} $args
     * @return \AWS\Result<array{ContainerGroupDefinition?:array{ContainerGroupDefinitionArn?:string, CreationTime?:int|string|\DateTimeInterface, OperatingSystem?:"AMAZON_LINUX_2023", Name:string, ContainerGroupType?:"GAME_SERVER"|"PER_INSTANCE", TotalMemoryLimitMebibytes?:int, TotalVcpuLimit?:float, GameServerContainerDefinition?:array{ContainerName?:string, DependsOn?:array<array{ContainerName:string, Condition:"START"|"COMPLETE"|"SUCCESS"|"HEALTHY"}>, MountPoints?:array<array{InstancePath:string, ContainerPath?:string, AccessLevel?:"READ_ONLY"|"READ_AND_WRITE"}>, EnvironmentOverride?:array<array{Name:string, Value:string}>, ImageUri?:string, PortConfiguration?:array{ContainerPortRanges:array<array{FromPort:int, ToPort:int, Protocol:"TCP"|"UDP"}>}, ResolvedImageDigest?:string, ServerSdkVersion?:string}, SupportContainerDefinitions?:array<array{ContainerName?:string, DependsOn?:array<array{ContainerName:string, Condition:"START"|"COMPLETE"|"SUCCESS"|"HEALTHY"}>, MountPoints?:array<array{InstancePath:string, ContainerPath?:string, AccessLevel?:"READ_ONLY"|"READ_AND_WRITE"}>, EnvironmentOverride?:array<array{Name:string, Value:string}>, Essential?:bool, HealthCheck?:array{Command:array<string>, Interval?:int, Retries?:int, StartPeriod?:int, Timeout?:int}, ImageUri?:string, MemoryHardLimitMebibytes?:int, PortConfiguration?:array{ContainerPortRanges:array<array{FromPort:int, ToPort:int, Protocol:"TCP"|"UDP"}>}, ResolvedImageDigest?:string, Vcpu?:float}>, VersionNumber?:int, VersionDescription?:string, Status?:"READY"|"COPYING"|"FAILED", StatusReason?:string}}>
     */
    public function updateContainerGroupDefinition(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, GameServerContainerDefinition?:array{ContainerName:string, DependsOn?:array<array{ContainerName:string, Condition:"START"|"COMPLETE"|"SUCCESS"|"HEALTHY"}>, MountPoints?:array<array{InstancePath:string, ContainerPath?:string, AccessLevel?:"READ_ONLY"|"READ_AND_WRITE"}>, EnvironmentOverride?:array<array{Name:string, Value:string}>, ImageUri:string, PortConfiguration:array{ContainerPortRanges:array<array{FromPort:int, ToPort:int, Protocol:"TCP"|"UDP"}>}, ServerSdkVersion:string}, SupportContainerDefinitions?:array<array{ContainerName:string, DependsOn?:array<array{ContainerName:string, Condition:"START"|"COMPLETE"|"SUCCESS"|"HEALTHY"}>, MountPoints?:array<array{InstancePath:string, ContainerPath?:string, AccessLevel?:"READ_ONLY"|"READ_AND_WRITE"}>, EnvironmentOverride?:array<array{Name:string, Value:string}>, Essential?:bool, HealthCheck?:array{Command:array<string>, Interval?:int, Retries?:int, StartPeriod?:int, Timeout?:int}, ImageUri:string, MemoryHardLimitMebibytes?:int, PortConfiguration?:array{ContainerPortRanges:array<array{FromPort:int, ToPort:int, Protocol:"TCP"|"UDP"}>}, Vcpu?:float}>, TotalMemoryLimitMebibytes?:int, TotalVcpuLimit?:float, VersionDescription?:string, SourceVersionNumber?:int, OperatingSystem?:"AMAZON_LINUX_2023"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContainerGroupDefinition?:array{ContainerGroupDefinitionArn?:string, CreationTime?:int|string|\DateTimeInterface, OperatingSystem?:"AMAZON_LINUX_2023", Name:string, ContainerGroupType?:"GAME_SERVER"|"PER_INSTANCE", TotalMemoryLimitMebibytes?:int, TotalVcpuLimit?:float, GameServerContainerDefinition?:array{ContainerName?:string, DependsOn?:array<array{ContainerName:string, Condition:"START"|"COMPLETE"|"SUCCESS"|"HEALTHY"}>, MountPoints?:array<array{InstancePath:string, ContainerPath?:string, AccessLevel?:"READ_ONLY"|"READ_AND_WRITE"}>, EnvironmentOverride?:array<array{Name:string, Value:string}>, ImageUri?:string, PortConfiguration?:array{ContainerPortRanges:array<array{FromPort:int, ToPort:int, Protocol:"TCP"|"UDP"}>}, ResolvedImageDigest?:string, ServerSdkVersion?:string}, SupportContainerDefinitions?:array<array{ContainerName?:string, DependsOn?:array<array{ContainerName:string, Condition:"START"|"COMPLETE"|"SUCCESS"|"HEALTHY"}>, MountPoints?:array<array{InstancePath:string, ContainerPath?:string, AccessLevel?:"READ_ONLY"|"READ_AND_WRITE"}>, EnvironmentOverride?:array<array{Name:string, Value:string}>, Essential?:bool, HealthCheck?:array{Command:array<string>, Interval?:int, Retries?:int, StartPeriod?:int, Timeout?:int}, ImageUri?:string, MemoryHardLimitMebibytes?:int, PortConfiguration?:array{ContainerPortRanges:array<array{FromPort:int, ToPort:int, Protocol:"TCP"|"UDP"}>}, ResolvedImageDigest?:string, Vcpu?:float}>, VersionNumber?:int, VersionDescription?:string, Status?:"READY"|"COPYING"|"FAILED", StatusReason?:string}}>
     */
    public function updateContainerGroupDefinitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId:string, Name?:string, Description?:string, NewGameSessionProtectionPolicy?:"NoProtection"|"FullProtection", ResourceCreationLimitPolicy?:array{NewGameSessionsPerCreator?:int, PolicyPeriodInMinutes?:int}, MetricGroups?:array<string>, AnywhereConfiguration?:array{Cost:string}} $args
     * @return \AWS\Result<array{FleetId?:string, FleetArn?:string}>
     */
    public function updateFleetAttributes(array $args): \AWS\Result { }

    /**
     * @param array{FleetId:string, Name?:string, Description?:string, NewGameSessionProtectionPolicy?:"NoProtection"|"FullProtection", ResourceCreationLimitPolicy?:array{NewGameSessionsPerCreator?:int, PolicyPeriodInMinutes?:int}, MetricGroups?:array<string>, AnywhereConfiguration?:array{Cost:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{FleetId?:string, FleetArn?:string}>
     */
    public function updateFleetAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId:string, DesiredInstances?:int, MinSize?:int, MaxSize?:int, Location?:string} $args
     * @return \AWS\Result<array{FleetId?:string, FleetArn?:string, Location?:string}>
     */
    public function updateFleetCapacity(array $args): \AWS\Result { }

    /**
     * @param array{FleetId:string, DesiredInstances?:int, MinSize?:int, MaxSize?:int, Location?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FleetId?:string, FleetArn?:string, Location?:string}>
     */
    public function updateFleetCapacityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId:string, InboundPermissionAuthorizations?:array<array{FromPort:int, ToPort:int, IpRange:string, Protocol:"TCP"|"UDP"}>, InboundPermissionRevocations?:array<array{FromPort:int, ToPort:int, IpRange:string, Protocol:"TCP"|"UDP"}>} $args
     * @return \AWS\Result<array{FleetId?:string, FleetArn?:string}>
     */
    public function updateFleetPortSettings(array $args): \AWS\Result { }

    /**
     * @param array{FleetId:string, InboundPermissionAuthorizations?:array<array{FromPort:int, ToPort:int, IpRange:string, Protocol:"TCP"|"UDP"}>, InboundPermissionRevocations?:array<array{FromPort:int, ToPort:int, IpRange:string, Protocol:"TCP"|"UDP"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{FleetId?:string, FleetArn?:string}>
     */
    public function updateFleetPortSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GameServerGroupName:string, GameServerId:string, GameServerData?:string, UtilizationStatus?:"AVAILABLE"|"UTILIZED", HealthCheck?:"HEALTHY"} $args
     * @return \AWS\Result<array{GameServer?:array{GameServerGroupName?:string, GameServerGroupArn?:string, GameServerId?:string, InstanceId?:string, ConnectionInfo?:string, GameServerData?:string, ClaimStatus?:"CLAIMED", UtilizationStatus?:"AVAILABLE"|"UTILIZED", RegistrationTime?:int|string|\DateTimeInterface, LastClaimTime?:int|string|\DateTimeInterface, LastHealthCheckTime?:int|string|\DateTimeInterface}}>
     */
    public function updateGameServer(array $args): \AWS\Result { }

    /**
     * @param array{GameServerGroupName:string, GameServerId:string, GameServerData?:string, UtilizationStatus?:"AVAILABLE"|"UTILIZED", HealthCheck?:"HEALTHY"} $args
     * @return \GuzzleHttp\Promise\Promise<array{GameServer?:array{GameServerGroupName?:string, GameServerGroupArn?:string, GameServerId?:string, InstanceId?:string, ConnectionInfo?:string, GameServerData?:string, ClaimStatus?:"CLAIMED", UtilizationStatus?:"AVAILABLE"|"UTILIZED", RegistrationTime?:int|string|\DateTimeInterface, LastClaimTime?:int|string|\DateTimeInterface, LastHealthCheckTime?:int|string|\DateTimeInterface}}>
     */
    public function updateGameServerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GameServerGroupName:string, RoleArn?:string, InstanceDefinitions?:array<array{InstanceType:"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge", WeightedCapacity?:string}>, GameServerProtectionPolicy?:"NO_PROTECTION"|"FULL_PROTECTION", BalancingStrategy?:"SPOT_ONLY"|"SPOT_PREFERRED"|"ON_DEMAND_ONLY"} $args
     * @return \AWS\Result<array{GameServerGroup?:array{GameServerGroupName?:string, GameServerGroupArn?:string, RoleArn?:string, InstanceDefinitions?:array<array{InstanceType:"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge", WeightedCapacity?:string}>, BalancingStrategy?:"SPOT_ONLY"|"SPOT_PREFERRED"|"ON_DEMAND_ONLY", GameServerProtectionPolicy?:"NO_PROTECTION"|"FULL_PROTECTION", AutoScalingGroupArn?:string, Status?:"NEW"|"ACTIVATING"|"ACTIVE"|"DELETE_SCHEDULED"|"DELETING"|"DELETED"|"ERROR", StatusReason?:string, SuspendedActions?:array<"REPLACE_INSTANCE_TYPES">, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface}}>
     */
    public function updateGameServerGroup(array $args): \AWS\Result { }

    /**
     * @param array{GameServerGroupName:string, RoleArn?:string, InstanceDefinitions?:array<array{InstanceType:"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge", WeightedCapacity?:string}>, GameServerProtectionPolicy?:"NO_PROTECTION"|"FULL_PROTECTION", BalancingStrategy?:"SPOT_ONLY"|"SPOT_PREFERRED"|"ON_DEMAND_ONLY"} $args
     * @return \GuzzleHttp\Promise\Promise<array{GameServerGroup?:array{GameServerGroupName?:string, GameServerGroupArn?:string, RoleArn?:string, InstanceDefinitions?:array<array{InstanceType:"c4.large"|"c4.xlarge"|"c4.2xlarge"|"c4.4xlarge"|"c4.8xlarge"|"c5.large"|"c5.xlarge"|"c5.2xlarge"|"c5.4xlarge"|"c5.9xlarge"|"c5.12xlarge"|"c5.18xlarge"|"c5.24xlarge"|"c5a.large"|"c5a.xlarge"|"c5a.2xlarge"|"c5a.4xlarge"|"c5a.8xlarge"|"c5a.12xlarge"|"c5a.16xlarge"|"c5a.24xlarge"|"c6g.medium"|"c6g.large"|"c6g.xlarge"|"c6g.2xlarge"|"c6g.4xlarge"|"c6g.8xlarge"|"c6g.12xlarge"|"c6g.16xlarge"|"r4.large"|"r4.xlarge"|"r4.2xlarge"|"r4.4xlarge"|"r4.8xlarge"|"r4.16xlarge"|"r5.large"|"r5.xlarge"|"r5.2xlarge"|"r5.4xlarge"|"r5.8xlarge"|"r5.12xlarge"|"r5.16xlarge"|"r5.24xlarge"|"r5a.large"|"r5a.xlarge"|"r5a.2xlarge"|"r5a.4xlarge"|"r5a.8xlarge"|"r5a.12xlarge"|"r5a.16xlarge"|"r5a.24xlarge"|"r6g.medium"|"r6g.large"|"r6g.xlarge"|"r6g.2xlarge"|"r6g.4xlarge"|"r6g.8xlarge"|"r6g.12xlarge"|"r6g.16xlarge"|"m4.large"|"m4.xlarge"|"m4.2xlarge"|"m4.4xlarge"|"m4.10xlarge"|"m5.large"|"m5.xlarge"|"m5.2xlarge"|"m5.4xlarge"|"m5.8xlarge"|"m5.12xlarge"|"m5.16xlarge"|"m5.24xlarge"|"m5a.large"|"m5a.xlarge"|"m5a.2xlarge"|"m5a.4xlarge"|"m5a.8xlarge"|"m5a.12xlarge"|"m5a.16xlarge"|"m5a.24xlarge"|"m6g.medium"|"m6g.large"|"m6g.xlarge"|"m6g.2xlarge"|"m6g.4xlarge"|"m6g.8xlarge"|"m6g.12xlarge"|"m6g.16xlarge", WeightedCapacity?:string}>, BalancingStrategy?:"SPOT_ONLY"|"SPOT_PREFERRED"|"ON_DEMAND_ONLY", GameServerProtectionPolicy?:"NO_PROTECTION"|"FULL_PROTECTION", AutoScalingGroupArn?:string, Status?:"NEW"|"ACTIVATING"|"ACTIVE"|"DELETE_SCHEDULED"|"DELETING"|"DELETED"|"ERROR", StatusReason?:string, SuspendedActions?:array<"REPLACE_INSTANCE_TYPES">, CreationTime?:int|string|\DateTimeInterface, LastUpdatedTime?:int|string|\DateTimeInterface}}>
     */
    public function updateGameServerGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GameSessionId:string, MaximumPlayerSessionCount?:int, Name?:string, PlayerSessionCreationPolicy?:"ACCEPT_ALL"|"DENY_ALL", ProtectionPolicy?:"NoProtection"|"FullProtection", GameProperties?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{GameSession?:array{GameSessionId?:string, Name?:string, FleetId?:string, FleetArn?:string, CreationTime?:int|string|\DateTimeInterface, TerminationTime?:int|string|\DateTimeInterface, CurrentPlayerSessionCount?:int, MaximumPlayerSessionCount?:int, Status?:"ACTIVE"|"ACTIVATING"|"TERMINATED"|"TERMINATING"|"ERROR", StatusReason?:"INTERRUPTED"|"TRIGGERED_ON_PROCESS_TERMINATE"|"FORCE_TERMINATED", GameProperties?:array<array{Key:string, Value:string}>, IpAddress?:string, DnsName?:string, Port?:int, PlayerSessionCreationPolicy?:"ACCEPT_ALL"|"DENY_ALL", CreatorId?:string, GameSessionData?:string, MatchmakerData?:string, Location?:string}}>
     */
    public function updateGameSession(array $args): \AWS\Result { }

    /**
     * @param array{GameSessionId:string, MaximumPlayerSessionCount?:int, Name?:string, PlayerSessionCreationPolicy?:"ACCEPT_ALL"|"DENY_ALL", ProtectionPolicy?:"NoProtection"|"FullProtection", GameProperties?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{GameSession?:array{GameSessionId?:string, Name?:string, FleetId?:string, FleetArn?:string, CreationTime?:int|string|\DateTimeInterface, TerminationTime?:int|string|\DateTimeInterface, CurrentPlayerSessionCount?:int, MaximumPlayerSessionCount?:int, Status?:"ACTIVE"|"ACTIVATING"|"TERMINATED"|"TERMINATING"|"ERROR", StatusReason?:"INTERRUPTED"|"TRIGGERED_ON_PROCESS_TERMINATE"|"FORCE_TERMINATED", GameProperties?:array<array{Key:string, Value:string}>, IpAddress?:string, DnsName?:string, Port?:int, PlayerSessionCreationPolicy?:"ACCEPT_ALL"|"DENY_ALL", CreatorId?:string, GameSessionData?:string, MatchmakerData?:string, Location?:string}}>
     */
    public function updateGameSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, TimeoutInSeconds?:int, PlayerLatencyPolicies?:array<array{MaximumIndividualPlayerLatencyMilliseconds?:int, PolicyDurationSeconds?:int}>, Destinations?:array<array{DestinationArn?:string}>, FilterConfiguration?:array{AllowedLocations?:array<string>}, PriorityConfiguration?:array{PriorityOrder?:array<"LATENCY"|"COST"|"DESTINATION"|"LOCATION">, LocationOrder?:array<string>}, CustomEventData?:string, NotificationTarget?:string} $args
     * @return \AWS\Result<array{GameSessionQueue?:array{Name?:string, GameSessionQueueArn?:string, TimeoutInSeconds?:int, PlayerLatencyPolicies?:array<array{MaximumIndividualPlayerLatencyMilliseconds?:int, PolicyDurationSeconds?:int}>, Destinations?:array<array{DestinationArn?:string}>, FilterConfiguration?:array{AllowedLocations?:array<string>}, PriorityConfiguration?:array{PriorityOrder?:array<"LATENCY"|"COST"|"DESTINATION"|"LOCATION">, LocationOrder?:array<string>}, CustomEventData?:string, NotificationTarget?:string}}>
     */
    public function updateGameSessionQueue(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, TimeoutInSeconds?:int, PlayerLatencyPolicies?:array<array{MaximumIndividualPlayerLatencyMilliseconds?:int, PolicyDurationSeconds?:int}>, Destinations?:array<array{DestinationArn?:string}>, FilterConfiguration?:array{AllowedLocations?:array<string>}, PriorityConfiguration?:array{PriorityOrder?:array<"LATENCY"|"COST"|"DESTINATION"|"LOCATION">, LocationOrder?:array<string>}, CustomEventData?:string, NotificationTarget?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GameSessionQueue?:array{Name?:string, GameSessionQueueArn?:string, TimeoutInSeconds?:int, PlayerLatencyPolicies?:array<array{MaximumIndividualPlayerLatencyMilliseconds?:int, PolicyDurationSeconds?:int}>, Destinations?:array<array{DestinationArn?:string}>, FilterConfiguration?:array{AllowedLocations?:array<string>}, PriorityConfiguration?:array{PriorityOrder?:array<"LATENCY"|"COST"|"DESTINATION"|"LOCATION">, LocationOrder?:array<string>}, CustomEventData?:string, NotificationTarget?:string}}>
     */
    public function updateGameSessionQueueAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Description?:string, GameSessionQueueArns?:array<string>, RequestTimeoutSeconds?:int, AcceptanceTimeoutSeconds?:int, AcceptanceRequired?:bool, RuleSetName?:string, NotificationTarget?:string, AdditionalPlayerCount?:int, CustomEventData?:string, GameProperties?:array<array{Key:string, Value:string}>, GameSessionData?:string, BackfillMode?:"AUTOMATIC"|"MANUAL", FlexMatchMode?:"STANDALONE"|"WITH_QUEUE"} $args
     * @return \AWS\Result<array{Configuration?:array{Name?:string, ConfigurationArn?:string, Description?:string, GameSessionQueueArns?:array<string>, RequestTimeoutSeconds?:int, AcceptanceTimeoutSeconds?:int, AcceptanceRequired?:bool, RuleSetName?:string, RuleSetArn?:string, NotificationTarget?:string, AdditionalPlayerCount?:int, CustomEventData?:string, CreationTime?:int|string|\DateTimeInterface, GameProperties?:array<array{Key:string, Value:string}>, GameSessionData?:string, BackfillMode?:"AUTOMATIC"|"MANUAL", FlexMatchMode?:"STANDALONE"|"WITH_QUEUE"}}>
     */
    public function updateMatchmakingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, GameSessionQueueArns?:array<string>, RequestTimeoutSeconds?:int, AcceptanceTimeoutSeconds?:int, AcceptanceRequired?:bool, RuleSetName?:string, NotificationTarget?:string, AdditionalPlayerCount?:int, CustomEventData?:string, GameProperties?:array<array{Key:string, Value:string}>, GameSessionData?:string, BackfillMode?:"AUTOMATIC"|"MANUAL", FlexMatchMode?:"STANDALONE"|"WITH_QUEUE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Configuration?:array{Name?:string, ConfigurationArn?:string, Description?:string, GameSessionQueueArns?:array<string>, RequestTimeoutSeconds?:int, AcceptanceTimeoutSeconds?:int, AcceptanceRequired?:bool, RuleSetName?:string, RuleSetArn?:string, NotificationTarget?:string, AdditionalPlayerCount?:int, CustomEventData?:string, CreationTime?:int|string|\DateTimeInterface, GameProperties?:array<array{Key:string, Value:string}>, GameSessionData?:string, BackfillMode?:"AUTOMATIC"|"MANUAL", FlexMatchMode?:"STANDALONE"|"WITH_QUEUE"}}>
     */
    public function updateMatchmakingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetId:string, RuntimeConfiguration:array{ServerProcesses?:array<array{LaunchPath:string, Parameters?:string, ConcurrentExecutions:int}>, MaxConcurrentGameSessionActivations?:int, GameSessionActivationTimeoutSeconds?:int}} $args
     * @return \AWS\Result<array{RuntimeConfiguration?:array{ServerProcesses?:array<array{LaunchPath:string, Parameters?:string, ConcurrentExecutions:int}>, MaxConcurrentGameSessionActivations?:int, GameSessionActivationTimeoutSeconds?:int}}>
     */
    public function updateRuntimeConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{FleetId:string, RuntimeConfiguration:array{ServerProcesses?:array<array{LaunchPath:string, Parameters?:string, ConcurrentExecutions:int}>, MaxConcurrentGameSessionActivations?:int, GameSessionActivationTimeoutSeconds?:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{RuntimeConfiguration?:array{ServerProcesses?:array<array{LaunchPath:string, Parameters?:string, ConcurrentExecutions:int}>, MaxConcurrentGameSessionActivations?:int, GameSessionActivationTimeoutSeconds?:int}}>
     */
    public function updateRuntimeConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ScriptId:string, Name?:string, Version?:string, StorageLocation?:array{Bucket?:string, Key?:string, RoleArn?:string, ObjectVersion?:string}, ZipFile?:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \AWS\Result<array{Script?:array{ScriptId?:string, ScriptArn?:string, Name?:string, Version?:string, SizeOnDisk?:int, CreationTime?:int|string|\DateTimeInterface, StorageLocation?:array{Bucket?:string, Key?:string, RoleArn?:string, ObjectVersion?:string}}}>
     */
    public function updateScript(array $args): \AWS\Result { }

    /**
     * @param array{ScriptId:string, Name?:string, Version?:string, StorageLocation?:array{Bucket?:string, Key?:string, RoleArn?:string, ObjectVersion?:string}, ZipFile?:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{Script?:array{ScriptId?:string, ScriptArn?:string, Name?:string, Version?:string, SizeOnDisk?:int, CreationTime?:int|string|\DateTimeInterface, StorageLocation?:array{Bucket?:string, Key?:string, RoleArn?:string, ObjectVersion?:string}}}>
     */
    public function updateScriptAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleSetBody:string} $args
     * @return \AWS\Result<array{Valid?:bool}>
     */
    public function validateMatchmakingRuleSet(array $args): \AWS\Result { }

    /**
     * @param array{RuleSetBody:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Valid?:bool}>
     */
    public function validateMatchmakingRuleSetAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
