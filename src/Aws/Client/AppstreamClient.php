<?php
namespace AWS\Appstream;

class AppstreamClient
{
    /**
     * @param array{AppBlockArn:string, AppBlockBuilderName:string} $args
     * @return \AWS\Result<array{AppBlockBuilderAppBlockAssociation?:array{AppBlockArn:string, AppBlockBuilderName:string}}>
     */
    public function associateAppBlockBuilderAppBlock(array $args): \AWS\Result { }

    /**
     * @param array{AppBlockArn:string, AppBlockBuilderName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppBlockBuilderAppBlockAssociation?:array{AppBlockArn:string, AppBlockBuilderName:string}}>
     */
    public function associateAppBlockBuilderAppBlockAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetName:string, ApplicationArn:string} $args
     * @return \AWS\Result<array{ApplicationFleetAssociation?:array{FleetName:string, ApplicationArn:string}}>
     */
    public function associateApplicationFleet(array $args): \AWS\Result { }

    /**
     * @param array{FleetName:string, ApplicationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationFleetAssociation?:array{FleetName:string, ApplicationArn:string}}>
     */
    public function associateApplicationFleetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackName:string, EntitlementName:string, ApplicationIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function associateApplicationToEntitlement(array $args): \AWS\Result { }

    /**
     * @param array{StackName:string, EntitlementName:string, ApplicationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateApplicationToEntitlementAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetName:string, StackName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function associateFleet(array $args): \AWS\Result { }

    /**
     * @param array{FleetName:string, StackName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateFleetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserStackAssociations:array<array{StackName:string, UserName:string, AuthenticationType:"API"|"SAML"|"USERPOOL"|"AWS_AD", SendEmailNotification?:bool}>} $args
     * @return \AWS\Result<array{errors?:array<array{UserStackAssociation?:array{StackName:string, UserName:string, AuthenticationType:"API"|"SAML"|"USERPOOL"|"AWS_AD", SendEmailNotification?:bool}, ErrorCode?:"STACK_NOT_FOUND"|"USER_NAME_NOT_FOUND"|"DIRECTORY_NOT_FOUND"|"INTERNAL_ERROR", ErrorMessage?:string}>}>
     */
    public function batchAssociateUserStack(array $args): \AWS\Result { }

    /**
     * @param array{UserStackAssociations:array<array{StackName:string, UserName:string, AuthenticationType:"API"|"SAML"|"USERPOOL"|"AWS_AD", SendEmailNotification?:bool}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{errors?:array<array{UserStackAssociation?:array{StackName:string, UserName:string, AuthenticationType:"API"|"SAML"|"USERPOOL"|"AWS_AD", SendEmailNotification?:bool}, ErrorCode?:"STACK_NOT_FOUND"|"USER_NAME_NOT_FOUND"|"DIRECTORY_NOT_FOUND"|"INTERNAL_ERROR", ErrorMessage?:string}>}>
     */
    public function batchAssociateUserStackAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserStackAssociations:array<array{StackName:string, UserName:string, AuthenticationType:"API"|"SAML"|"USERPOOL"|"AWS_AD", SendEmailNotification?:bool}>} $args
     * @return \AWS\Result<array{errors?:array<array{UserStackAssociation?:array{StackName:string, UserName:string, AuthenticationType:"API"|"SAML"|"USERPOOL"|"AWS_AD", SendEmailNotification?:bool}, ErrorCode?:"STACK_NOT_FOUND"|"USER_NAME_NOT_FOUND"|"DIRECTORY_NOT_FOUND"|"INTERNAL_ERROR", ErrorMessage?:string}>}>
     */
    public function batchDisassociateUserStack(array $args): \AWS\Result { }

    /**
     * @param array{UserStackAssociations:array<array{StackName:string, UserName:string, AuthenticationType:"API"|"SAML"|"USERPOOL"|"AWS_AD", SendEmailNotification?:bool}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{errors?:array<array{UserStackAssociation?:array{StackName:string, UserName:string, AuthenticationType:"API"|"SAML"|"USERPOOL"|"AWS_AD", SendEmailNotification?:bool}, ErrorCode?:"STACK_NOT_FOUND"|"USER_NAME_NOT_FOUND"|"DIRECTORY_NOT_FOUND"|"INTERNAL_ERROR", ErrorMessage?:string}>}>
     */
    public function batchDisassociateUserStackAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SourceImageName:string, DestinationImageName:string, DestinationRegion:string, DestinationImageDescription?:string} $args
     * @return \AWS\Result<array{DestinationImageName?:string}>
     */
    public function copyImage(array $args): \AWS\Result { }

    /**
     * @param array{SourceImageName:string, DestinationImageName:string, DestinationRegion:string, DestinationImageDescription?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DestinationImageName?:string}>
     */
    public function copyImageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Description?:string, DisplayName?:string, SourceS3Location:array{S3Bucket:string, S3Key?:string}, SetupScriptDetails?:array{ScriptS3Location:array{S3Bucket:string, S3Key?:string}, ExecutablePath:string, ExecutableParameters?:string, TimeoutInSeconds:int}, Tags?:array<string, string>, PostSetupScriptDetails?:array{ScriptS3Location:array{S3Bucket:string, S3Key?:string}, ExecutablePath:string, ExecutableParameters?:string, TimeoutInSeconds:int}, PackagingType?:"CUSTOM"|"APPSTREAM2"} $args
     * @return \AWS\Result<array{AppBlock?:array{Name:string, Arn:string, Description?:string, DisplayName?:string, SourceS3Location?:array{S3Bucket:string, S3Key?:string}, SetupScriptDetails?:array{ScriptS3Location:array{S3Bucket:string, S3Key?:string}, ExecutablePath:string, ExecutableParameters?:string, TimeoutInSeconds:int}, CreatedTime?:int|string|\DateTimeInterface, PostSetupScriptDetails?:array{ScriptS3Location:array{S3Bucket:string, S3Key?:string}, ExecutablePath:string, ExecutableParameters?:string, TimeoutInSeconds:int}, PackagingType?:"CUSTOM"|"APPSTREAM2", State?:"INACTIVE"|"ACTIVE", AppBlockErrors?:array<array{ErrorCode?:string, ErrorMessage?:string}>}}>
     */
    public function createAppBlock(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, DisplayName?:string, SourceS3Location:array{S3Bucket:string, S3Key?:string}, SetupScriptDetails?:array{ScriptS3Location:array{S3Bucket:string, S3Key?:string}, ExecutablePath:string, ExecutableParameters?:string, TimeoutInSeconds:int}, Tags?:array<string, string>, PostSetupScriptDetails?:array{ScriptS3Location:array{S3Bucket:string, S3Key?:string}, ExecutablePath:string, ExecutableParameters?:string, TimeoutInSeconds:int}, PackagingType?:"CUSTOM"|"APPSTREAM2"} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppBlock?:array{Name:string, Arn:string, Description?:string, DisplayName?:string, SourceS3Location?:array{S3Bucket:string, S3Key?:string}, SetupScriptDetails?:array{ScriptS3Location:array{S3Bucket:string, S3Key?:string}, ExecutablePath:string, ExecutableParameters?:string, TimeoutInSeconds:int}, CreatedTime?:int|string|\DateTimeInterface, PostSetupScriptDetails?:array{ScriptS3Location:array{S3Bucket:string, S3Key?:string}, ExecutablePath:string, ExecutableParameters?:string, TimeoutInSeconds:int}, PackagingType?:"CUSTOM"|"APPSTREAM2", State?:"INACTIVE"|"ACTIVE", AppBlockErrors?:array<array{ErrorCode?:string, ErrorMessage?:string}>}}>
     */
    public function createAppBlockAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Description?:string, DisplayName?:string, Tags?:array<string, string>, Platform:"WINDOWS_SERVER_2019", InstanceType:string, VpcConfig:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, EnableDefaultInternetAccess?:bool, IamRoleArn?:string, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>} $args
     * @return \AWS\Result<array{AppBlockBuilder?:array{Arn:string, Name:string, DisplayName?:string, Description?:string, Platform:"WINDOWS_SERVER_2019", InstanceType:string, EnableDefaultInternetAccess?:bool, IamRoleArn?:string, VpcConfig:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, State:"STARTING"|"RUNNING"|"STOPPING"|"STOPPED", CreatedTime?:int|string|\DateTimeInterface, AppBlockBuilderErrors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"IAM_SERVICE_ROLE_IS_MISSING"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"FLEET_STOPPED"|"FLEET_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR", ErrorMessage?:string, ErrorTimestamp?:int|string|\DateTimeInterface}>, StateChangeReason?:array{Code?:"INTERNAL_ERROR", Message?:string}, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>}}>
     */
    public function createAppBlockBuilder(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, DisplayName?:string, Tags?:array<string, string>, Platform:"WINDOWS_SERVER_2019", InstanceType:string, VpcConfig:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, EnableDefaultInternetAccess?:bool, IamRoleArn?:string, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppBlockBuilder?:array{Arn:string, Name:string, DisplayName?:string, Description?:string, Platform:"WINDOWS_SERVER_2019", InstanceType:string, EnableDefaultInternetAccess?:bool, IamRoleArn?:string, VpcConfig:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, State:"STARTING"|"RUNNING"|"STOPPING"|"STOPPED", CreatedTime?:int|string|\DateTimeInterface, AppBlockBuilderErrors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"IAM_SERVICE_ROLE_IS_MISSING"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"FLEET_STOPPED"|"FLEET_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR", ErrorMessage?:string, ErrorTimestamp?:int|string|\DateTimeInterface}>, StateChangeReason?:array{Code?:"INTERNAL_ERROR", Message?:string}, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>}}>
     */
    public function createAppBlockBuilderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppBlockBuilderName:string, Validity?:int} $args
     * @return \AWS\Result<array{StreamingURL?:string, Expires?:int|string|\DateTimeInterface}>
     */
    public function createAppBlockBuilderStreamingURL(array $args): \AWS\Result { }

    /**
     * @param array{AppBlockBuilderName:string, Validity?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{StreamingURL?:string, Expires?:int|string|\DateTimeInterface}>
     */
    public function createAppBlockBuilderStreamingURLAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, DisplayName?:string, Description?:string, IconS3Location:array{S3Bucket:string, S3Key?:string}, LaunchPath:string, WorkingDirectory?:string, LaunchParameters?:string, Platforms:array<"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8">, InstanceFamilies:array<string>, AppBlockArn:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Application?:array{Name?:string, DisplayName?:string, IconURL?:string, LaunchPath?:string, LaunchParameters?:string, Enabled?:bool, Metadata?:array<string, string>, WorkingDirectory?:string, Description?:string, Arn?:string, AppBlockArn?:string, IconS3Location?:array{S3Bucket:string, S3Key?:string}, Platforms?:array<"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8">, InstanceFamilies?:array<string>, CreatedTime?:int|string|\DateTimeInterface}}>
     */
    public function createApplication(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, DisplayName?:string, Description?:string, IconS3Location:array{S3Bucket:string, S3Key?:string}, LaunchPath:string, WorkingDirectory?:string, LaunchParameters?:string, Platforms:array<"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8">, InstanceFamilies:array<string>, AppBlockArn:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Application?:array{Name?:string, DisplayName?:string, IconURL?:string, LaunchPath?:string, LaunchParameters?:string, Enabled?:bool, Metadata?:array<string, string>, WorkingDirectory?:string, Description?:string, Arn?:string, AppBlockArn?:string, IconS3Location?:array{S3Bucket:string, S3Key?:string}, Platforms?:array<"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8">, InstanceFamilies?:array<string>, CreatedTime?:int|string|\DateTimeInterface}}>
     */
    public function createApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryName:string, OrganizationalUnitDistinguishedNames:array<string>, ServiceAccountCredentials?:array{AccountName:string, AccountPassword:string}, CertificateBasedAuthProperties?:array{Status?:"DISABLED"|"ENABLED"|"ENABLED_NO_DIRECTORY_LOGIN_FALLBACK", CertificateAuthorityArn?:string}} $args
     * @return \AWS\Result<array{DirectoryConfig?:array{DirectoryName:string, OrganizationalUnitDistinguishedNames?:array<string>, ServiceAccountCredentials?:array{AccountName:string, AccountPassword:string}, CreatedTime?:int|string|\DateTimeInterface, CertificateBasedAuthProperties?:array{Status?:"DISABLED"|"ENABLED"|"ENABLED_NO_DIRECTORY_LOGIN_FALLBACK", CertificateAuthorityArn?:string}}}>
     */
    public function createDirectoryConfig(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryName:string, OrganizationalUnitDistinguishedNames:array<string>, ServiceAccountCredentials?:array{AccountName:string, AccountPassword:string}, CertificateBasedAuthProperties?:array{Status?:"DISABLED"|"ENABLED"|"ENABLED_NO_DIRECTORY_LOGIN_FALLBACK", CertificateAuthorityArn?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{DirectoryConfig?:array{DirectoryName:string, OrganizationalUnitDistinguishedNames?:array<string>, ServiceAccountCredentials?:array{AccountName:string, AccountPassword:string}, CreatedTime?:int|string|\DateTimeInterface, CertificateBasedAuthProperties?:array{Status?:"DISABLED"|"ENABLED"|"ENABLED_NO_DIRECTORY_LOGIN_FALLBACK", CertificateAuthorityArn?:string}}}>
     */
    public function createDirectoryConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, StackName:string, Description?:string, AppVisibility:"ALL"|"ASSOCIATED", Attributes:array<array{Name:string, Value:string}>} $args
     * @return \AWS\Result<array{Entitlement?:array{Name:string, StackName:string, Description?:string, AppVisibility:"ALL"|"ASSOCIATED", Attributes:array<array{Name:string, Value:string}>, CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}}>
     */
    public function createEntitlement(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, StackName:string, Description?:string, AppVisibility:"ALL"|"ASSOCIATED", Attributes:array<array{Name:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Entitlement?:array{Name:string, StackName:string, Description?:string, AppVisibility:"ALL"|"ASSOCIATED", Attributes:array<array{Name:string, Value:string}>, CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}}>
     */
    public function createEntitlementAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, ImageName?:string, ImageArn?:string, InstanceType:string, FleetType?:"ALWAYS_ON"|"ON_DEMAND"|"ELASTIC", ComputeCapacity?:array{DesiredInstances?:int, DesiredSessions?:int}, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, MaxUserDurationInSeconds?:int, DisconnectTimeoutInSeconds?:int, Description?:string, DisplayName?:string, EnableDefaultInternetAccess?:bool, DomainJoinInfo?:array{DirectoryName?:string, OrganizationalUnitDistinguishedName?:string}, Tags?:array<string, string>, IdleDisconnectTimeoutInSeconds?:int, IamRoleArn?:string, StreamView?:"APP"|"DESKTOP", Platform?:"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8", MaxConcurrentSessions?:int, UsbDeviceFilterStrings?:array<string>, SessionScriptS3Location?:array{S3Bucket:string, S3Key?:string}, MaxSessionsPerInstance?:int} $args
     * @return \AWS\Result<array{Fleet?:array{Arn:string, Name:string, DisplayName?:string, Description?:string, ImageName?:string, ImageArn?:string, InstanceType:string, FleetType?:"ALWAYS_ON"|"ON_DEMAND"|"ELASTIC", ComputeCapacityStatus:array{Desired:int, Running?:int, InUse?:int, Available?:int, DesiredUserSessions?:int, AvailableUserSessions?:int, ActiveUserSessions?:int, ActualUserSessions?:int}, MaxUserDurationInSeconds?:int, DisconnectTimeoutInSeconds?:int, State:"STARTING"|"RUNNING"|"STOPPING"|"STOPPED", VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, CreatedTime?:int|string|\DateTimeInterface, FleetErrors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"IAM_SERVICE_ROLE_IS_MISSING"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"FLEET_STOPPED"|"FLEET_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR", ErrorMessage?:string}>, EnableDefaultInternetAccess?:bool, DomainJoinInfo?:array{DirectoryName?:string, OrganizationalUnitDistinguishedName?:string}, IdleDisconnectTimeoutInSeconds?:int, IamRoleArn?:string, StreamView?:"APP"|"DESKTOP", Platform?:"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8", MaxConcurrentSessions?:int, UsbDeviceFilterStrings?:array<string>, SessionScriptS3Location?:array{S3Bucket:string, S3Key?:string}, MaxSessionsPerInstance?:int}}>
     */
    public function createFleet(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, ImageName?:string, ImageArn?:string, InstanceType:string, FleetType?:"ALWAYS_ON"|"ON_DEMAND"|"ELASTIC", ComputeCapacity?:array{DesiredInstances?:int, DesiredSessions?:int}, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, MaxUserDurationInSeconds?:int, DisconnectTimeoutInSeconds?:int, Description?:string, DisplayName?:string, EnableDefaultInternetAccess?:bool, DomainJoinInfo?:array{DirectoryName?:string, OrganizationalUnitDistinguishedName?:string}, Tags?:array<string, string>, IdleDisconnectTimeoutInSeconds?:int, IamRoleArn?:string, StreamView?:"APP"|"DESKTOP", Platform?:"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8", MaxConcurrentSessions?:int, UsbDeviceFilterStrings?:array<string>, SessionScriptS3Location?:array{S3Bucket:string, S3Key?:string}, MaxSessionsPerInstance?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Fleet?:array{Arn:string, Name:string, DisplayName?:string, Description?:string, ImageName?:string, ImageArn?:string, InstanceType:string, FleetType?:"ALWAYS_ON"|"ON_DEMAND"|"ELASTIC", ComputeCapacityStatus:array{Desired:int, Running?:int, InUse?:int, Available?:int, DesiredUserSessions?:int, AvailableUserSessions?:int, ActiveUserSessions?:int, ActualUserSessions?:int}, MaxUserDurationInSeconds?:int, DisconnectTimeoutInSeconds?:int, State:"STARTING"|"RUNNING"|"STOPPING"|"STOPPED", VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, CreatedTime?:int|string|\DateTimeInterface, FleetErrors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"IAM_SERVICE_ROLE_IS_MISSING"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"FLEET_STOPPED"|"FLEET_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR", ErrorMessage?:string}>, EnableDefaultInternetAccess?:bool, DomainJoinInfo?:array{DirectoryName?:string, OrganizationalUnitDistinguishedName?:string}, IdleDisconnectTimeoutInSeconds?:int, IamRoleArn?:string, StreamView?:"APP"|"DESKTOP", Platform?:"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8", MaxConcurrentSessions?:int, UsbDeviceFilterStrings?:array<string>, SessionScriptS3Location?:array{S3Bucket:string, S3Key?:string}, MaxSessionsPerInstance?:int}}>
     */
    public function createFleetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, ImageName?:string, ImageArn?:string, InstanceType:string, Description?:string, DisplayName?:string, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, IamRoleArn?:string, EnableDefaultInternetAccess?:bool, DomainJoinInfo?:array{DirectoryName?:string, OrganizationalUnitDistinguishedName?:string}, AppstreamAgentVersion?:string, Tags?:array<string, string>, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>} $args
     * @return \AWS\Result<array{ImageBuilder?:array{Name:string, Arn?:string, ImageArn?:string, Description?:string, DisplayName?:string, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, InstanceType?:string, Platform?:"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8", IamRoleArn?:string, State?:"PENDING"|"UPDATING_AGENT"|"RUNNING"|"STOPPING"|"STOPPED"|"REBOOTING"|"SNAPSHOTTING"|"DELETING"|"FAILED"|"UPDATING"|"PENDING_QUALIFICATION", StateChangeReason?:array{Code?:"INTERNAL_ERROR"|"IMAGE_UNAVAILABLE", Message?:string}, CreatedTime?:int|string|\DateTimeInterface, EnableDefaultInternetAccess?:bool, DomainJoinInfo?:array{DirectoryName?:string, OrganizationalUnitDistinguishedName?:string}, NetworkAccessConfiguration?:array{EniPrivateIpAddress?:string, EniId?:string}, ImageBuilderErrors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"IAM_SERVICE_ROLE_IS_MISSING"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"FLEET_STOPPED"|"FLEET_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR", ErrorMessage?:string, ErrorTimestamp?:int|string|\DateTimeInterface}>, AppstreamAgentVersion?:string, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>, LatestAppstreamAgentVersion?:"TRUE"|"FALSE"}}>
     */
    public function createImageBuilder(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, ImageName?:string, ImageArn?:string, InstanceType:string, Description?:string, DisplayName?:string, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, IamRoleArn?:string, EnableDefaultInternetAccess?:bool, DomainJoinInfo?:array{DirectoryName?:string, OrganizationalUnitDistinguishedName?:string}, AppstreamAgentVersion?:string, Tags?:array<string, string>, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ImageBuilder?:array{Name:string, Arn?:string, ImageArn?:string, Description?:string, DisplayName?:string, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, InstanceType?:string, Platform?:"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8", IamRoleArn?:string, State?:"PENDING"|"UPDATING_AGENT"|"RUNNING"|"STOPPING"|"STOPPED"|"REBOOTING"|"SNAPSHOTTING"|"DELETING"|"FAILED"|"UPDATING"|"PENDING_QUALIFICATION", StateChangeReason?:array{Code?:"INTERNAL_ERROR"|"IMAGE_UNAVAILABLE", Message?:string}, CreatedTime?:int|string|\DateTimeInterface, EnableDefaultInternetAccess?:bool, DomainJoinInfo?:array{DirectoryName?:string, OrganizationalUnitDistinguishedName?:string}, NetworkAccessConfiguration?:array{EniPrivateIpAddress?:string, EniId?:string}, ImageBuilderErrors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"IAM_SERVICE_ROLE_IS_MISSING"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"FLEET_STOPPED"|"FLEET_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR", ErrorMessage?:string, ErrorTimestamp?:int|string|\DateTimeInterface}>, AppstreamAgentVersion?:string, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>, LatestAppstreamAgentVersion?:"TRUE"|"FALSE"}}>
     */
    public function createImageBuilderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Validity?:int} $args
     * @return \AWS\Result<array{StreamingURL?:string, Expires?:int|string|\DateTimeInterface}>
     */
    public function createImageBuilderStreamingURL(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Validity?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{StreamingURL?:string, Expires?:int|string|\DateTimeInterface}>
     */
    public function createImageBuilderStreamingURLAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Description?:string, DisplayName?:string, StorageConnectors?:array<array{ConnectorType:"HOMEFOLDERS"|"GOOGLE_DRIVE"|"ONE_DRIVE", ResourceIdentifier?:string, Domains?:array<string>}>, RedirectURL?:string, FeedbackURL?:string, UserSettings?:array<array{Action:"CLIPBOARD_COPY_FROM_LOCAL_DEVICE"|"CLIPBOARD_COPY_TO_LOCAL_DEVICE"|"FILE_UPLOAD"|"FILE_DOWNLOAD"|"PRINTING_TO_LOCAL_DEVICE"|"DOMAIN_PASSWORD_SIGNIN"|"DOMAIN_SMART_CARD_SIGNIN"|"AUTO_TIME_ZONE_REDIRECTION", Permission:"ENABLED"|"DISABLED", MaximumLength?:int}>, ApplicationSettings?:array{Enabled:bool, SettingsGroup?:string}, Tags?:array<string, string>, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>, EmbedHostDomains?:array<string>, StreamingExperienceSettings?:array{PreferredProtocol?:"TCP"|"UDP"}} $args
     * @return \AWS\Result<array{Stack?:array{Arn?:string, Name:string, Description?:string, DisplayName?:string, CreatedTime?:int|string|\DateTimeInterface, StorageConnectors?:array<array{ConnectorType:"HOMEFOLDERS"|"GOOGLE_DRIVE"|"ONE_DRIVE", ResourceIdentifier?:string, Domains?:array<string>}>, RedirectURL?:string, FeedbackURL?:string, StackErrors?:array<array{ErrorCode?:"STORAGE_CONNECTOR_ERROR"|"INTERNAL_SERVICE_ERROR", ErrorMessage?:string}>, UserSettings?:array<array{Action:"CLIPBOARD_COPY_FROM_LOCAL_DEVICE"|"CLIPBOARD_COPY_TO_LOCAL_DEVICE"|"FILE_UPLOAD"|"FILE_DOWNLOAD"|"PRINTING_TO_LOCAL_DEVICE"|"DOMAIN_PASSWORD_SIGNIN"|"DOMAIN_SMART_CARD_SIGNIN"|"AUTO_TIME_ZONE_REDIRECTION", Permission:"ENABLED"|"DISABLED", MaximumLength?:int}>, ApplicationSettings?:array{Enabled?:bool, SettingsGroup?:string, S3BucketName?:string}, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>, EmbedHostDomains?:array<string>, StreamingExperienceSettings?:array{PreferredProtocol?:"TCP"|"UDP"}}}>
     */
    public function createStack(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, DisplayName?:string, StorageConnectors?:array<array{ConnectorType:"HOMEFOLDERS"|"GOOGLE_DRIVE"|"ONE_DRIVE", ResourceIdentifier?:string, Domains?:array<string>}>, RedirectURL?:string, FeedbackURL?:string, UserSettings?:array<array{Action:"CLIPBOARD_COPY_FROM_LOCAL_DEVICE"|"CLIPBOARD_COPY_TO_LOCAL_DEVICE"|"FILE_UPLOAD"|"FILE_DOWNLOAD"|"PRINTING_TO_LOCAL_DEVICE"|"DOMAIN_PASSWORD_SIGNIN"|"DOMAIN_SMART_CARD_SIGNIN"|"AUTO_TIME_ZONE_REDIRECTION", Permission:"ENABLED"|"DISABLED", MaximumLength?:int}>, ApplicationSettings?:array{Enabled:bool, SettingsGroup?:string}, Tags?:array<string, string>, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>, EmbedHostDomains?:array<string>, StreamingExperienceSettings?:array{PreferredProtocol?:"TCP"|"UDP"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Stack?:array{Arn?:string, Name:string, Description?:string, DisplayName?:string, CreatedTime?:int|string|\DateTimeInterface, StorageConnectors?:array<array{ConnectorType:"HOMEFOLDERS"|"GOOGLE_DRIVE"|"ONE_DRIVE", ResourceIdentifier?:string, Domains?:array<string>}>, RedirectURL?:string, FeedbackURL?:string, StackErrors?:array<array{ErrorCode?:"STORAGE_CONNECTOR_ERROR"|"INTERNAL_SERVICE_ERROR", ErrorMessage?:string}>, UserSettings?:array<array{Action:"CLIPBOARD_COPY_FROM_LOCAL_DEVICE"|"CLIPBOARD_COPY_TO_LOCAL_DEVICE"|"FILE_UPLOAD"|"FILE_DOWNLOAD"|"PRINTING_TO_LOCAL_DEVICE"|"DOMAIN_PASSWORD_SIGNIN"|"DOMAIN_SMART_CARD_SIGNIN"|"AUTO_TIME_ZONE_REDIRECTION", Permission:"ENABLED"|"DISABLED", MaximumLength?:int}>, ApplicationSettings?:array{Enabled?:bool, SettingsGroup?:string, S3BucketName?:string}, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>, EmbedHostDomains?:array<string>, StreamingExperienceSettings?:array{PreferredProtocol?:"TCP"|"UDP"}}}>
     */
    public function createStackAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackName:string, FleetName:string, UserId:string, ApplicationId?:string, Validity?:int, SessionContext?:string} $args
     * @return \AWS\Result<array{StreamingURL?:string, Expires?:int|string|\DateTimeInterface}>
     */
    public function createStreamingURL(array $args): \AWS\Result { }

    /**
     * @param array{StackName:string, FleetName:string, UserId:string, ApplicationId?:string, Validity?:int, SessionContext?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StreamingURL?:string, Expires?:int|string|\DateTimeInterface}>
     */
    public function createStreamingURLAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackName:string, FooterLinks?:array<array{DisplayName?:string, FooterLinkURL?:string}>, TitleText:string, ThemeStyling:"LIGHT_BLUE"|"BLUE"|"PINK"|"RED", OrganizationLogoS3Location:array{S3Bucket:string, S3Key?:string}, FaviconS3Location:array{S3Bucket:string, S3Key?:string}} $args
     * @return \AWS\Result<array{Theme?:array{StackName?:string, State?:"ENABLED"|"DISABLED", ThemeTitleText?:string, ThemeStyling?:"LIGHT_BLUE"|"BLUE"|"PINK"|"RED", ThemeFooterLinks?:array<array{DisplayName?:string, FooterLinkURL?:string}>, ThemeOrganizationLogoURL?:string, ThemeFaviconURL?:string, CreatedTime?:int|string|\DateTimeInterface}}>
     */
    public function createThemeForStack(array $args): \AWS\Result { }

    /**
     * @param array{StackName:string, FooterLinks?:array<array{DisplayName?:string, FooterLinkURL?:string}>, TitleText:string, ThemeStyling:"LIGHT_BLUE"|"BLUE"|"PINK"|"RED", OrganizationLogoS3Location:array{S3Bucket:string, S3Key?:string}, FaviconS3Location:array{S3Bucket:string, S3Key?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Theme?:array{StackName?:string, State?:"ENABLED"|"DISABLED", ThemeTitleText?:string, ThemeStyling?:"LIGHT_BLUE"|"BLUE"|"PINK"|"RED", ThemeFooterLinks?:array<array{DisplayName?:string, FooterLinkURL?:string}>, ThemeOrganizationLogoURL?:string, ThemeFaviconURL?:string, CreatedTime?:int|string|\DateTimeInterface}}>
     */
    public function createThemeForStackAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{existingImageName:string, newImageName:string, newImageDescription?:string, newImageDisplayName?:string, newImageTags?:array<string, string>, dryRun?:bool} $args
     * @return \AWS\Result<array{image?:array{Name:string, Arn?:string, BaseImageArn?:string, DisplayName?:string, State?:"PENDING"|"AVAILABLE"|"FAILED"|"COPYING"|"DELETING"|"CREATING"|"IMPORTING", Visibility?:"PUBLIC"|"PRIVATE"|"SHARED", ImageBuilderSupported?:bool, ImageBuilderName?:string, Platform?:"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8", Description?:string, StateChangeReason?:array{Code?:"INTERNAL_ERROR"|"IMAGE_BUILDER_NOT_AVAILABLE"|"IMAGE_COPY_FAILURE", Message?:string}, Applications?:array<array{Name?:string, DisplayName?:string, IconURL?:string, LaunchPath?:string, LaunchParameters?:string, Enabled?:bool, Metadata?:array<string, string>, WorkingDirectory?:string, Description?:string, Arn?:string, AppBlockArn?:string, IconS3Location?:array{S3Bucket:string, S3Key?:string}, Platforms?:array<"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8">, InstanceFamilies?:array<string>, CreatedTime?:int|string|\DateTimeInterface}>, CreatedTime?:int|string|\DateTimeInterface, PublicBaseImageReleasedDate?:int|string|\DateTimeInterface, AppstreamAgentVersion?:string, ImagePermissions?:array{allowFleet?:bool, allowImageBuilder?:bool}, ImageErrors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"IAM_SERVICE_ROLE_IS_MISSING"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"FLEET_STOPPED"|"FLEET_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR", ErrorMessage?:string, ErrorTimestamp?:int|string|\DateTimeInterface}>, LatestAppstreamAgentVersion?:"TRUE"|"FALSE", SupportedInstanceFamilies?:array<string>, DynamicAppProvidersEnabled?:"ENABLED"|"DISABLED", ImageSharedWithOthers?:"TRUE"|"FALSE"}, canUpdateImage?:bool}>
     */
    public function createUpdatedImage(array $args): \AWS\Result { }

    /**
     * @param array{existingImageName:string, newImageName:string, newImageDescription?:string, newImageDisplayName?:string, newImageTags?:array<string, string>, dryRun?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{image?:array{Name:string, Arn?:string, BaseImageArn?:string, DisplayName?:string, State?:"PENDING"|"AVAILABLE"|"FAILED"|"COPYING"|"DELETING"|"CREATING"|"IMPORTING", Visibility?:"PUBLIC"|"PRIVATE"|"SHARED", ImageBuilderSupported?:bool, ImageBuilderName?:string, Platform?:"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8", Description?:string, StateChangeReason?:array{Code?:"INTERNAL_ERROR"|"IMAGE_BUILDER_NOT_AVAILABLE"|"IMAGE_COPY_FAILURE", Message?:string}, Applications?:array<array{Name?:string, DisplayName?:string, IconURL?:string, LaunchPath?:string, LaunchParameters?:string, Enabled?:bool, Metadata?:array<string, string>, WorkingDirectory?:string, Description?:string, Arn?:string, AppBlockArn?:string, IconS3Location?:array{S3Bucket:string, S3Key?:string}, Platforms?:array<"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8">, InstanceFamilies?:array<string>, CreatedTime?:int|string|\DateTimeInterface}>, CreatedTime?:int|string|\DateTimeInterface, PublicBaseImageReleasedDate?:int|string|\DateTimeInterface, AppstreamAgentVersion?:string, ImagePermissions?:array{allowFleet?:bool, allowImageBuilder?:bool}, ImageErrors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"IAM_SERVICE_ROLE_IS_MISSING"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"FLEET_STOPPED"|"FLEET_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR", ErrorMessage?:string, ErrorTimestamp?:int|string|\DateTimeInterface}>, LatestAppstreamAgentVersion?:"TRUE"|"FALSE", SupportedInstanceFamilies?:array<string>, DynamicAppProvidersEnabled?:"ENABLED"|"DISABLED", ImageSharedWithOthers?:"TRUE"|"FALSE"}, canUpdateImage?:bool}>
     */
    public function createUpdatedImageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{S3BucketName?:string, Schedule?:"DAILY"}>
     */
    public function createUsageReportSubscription(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{S3BucketName?:string, Schedule?:"DAILY"}>
     */
    public function createUsageReportSubscriptionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName:string, MessageAction?:"SUPPRESS"|"RESEND", FirstName?:string, LastName?:string, AuthenticationType:"API"|"SAML"|"USERPOOL"|"AWS_AD"} $args
     * @return \AWS\Result<array{}>
     */
    public function createUser(array $args): \AWS\Result { }

    /**
     * @param array{UserName:string, MessageAction?:"SUPPRESS"|"RESEND", FirstName?:string, LastName?:string, AuthenticationType:"API"|"SAML"|"USERPOOL"|"AWS_AD"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAppBlock(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAppBlockAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAppBlockBuilder(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAppBlockBuilderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteApplication(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteDirectoryConfig(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteDirectoryConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, StackName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteEntitlement(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, StackName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteEntitlementAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteFleet(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteFleetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{Image?:array{Name:string, Arn?:string, BaseImageArn?:string, DisplayName?:string, State?:"PENDING"|"AVAILABLE"|"FAILED"|"COPYING"|"DELETING"|"CREATING"|"IMPORTING", Visibility?:"PUBLIC"|"PRIVATE"|"SHARED", ImageBuilderSupported?:bool, ImageBuilderName?:string, Platform?:"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8", Description?:string, StateChangeReason?:array{Code?:"INTERNAL_ERROR"|"IMAGE_BUILDER_NOT_AVAILABLE"|"IMAGE_COPY_FAILURE", Message?:string}, Applications?:array<array{Name?:string, DisplayName?:string, IconURL?:string, LaunchPath?:string, LaunchParameters?:string, Enabled?:bool, Metadata?:array<string, string>, WorkingDirectory?:string, Description?:string, Arn?:string, AppBlockArn?:string, IconS3Location?:array{S3Bucket:string, S3Key?:string}, Platforms?:array<"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8">, InstanceFamilies?:array<string>, CreatedTime?:int|string|\DateTimeInterface}>, CreatedTime?:int|string|\DateTimeInterface, PublicBaseImageReleasedDate?:int|string|\DateTimeInterface, AppstreamAgentVersion?:string, ImagePermissions?:array{allowFleet?:bool, allowImageBuilder?:bool}, ImageErrors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"IAM_SERVICE_ROLE_IS_MISSING"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"FLEET_STOPPED"|"FLEET_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR", ErrorMessage?:string, ErrorTimestamp?:int|string|\DateTimeInterface}>, LatestAppstreamAgentVersion?:"TRUE"|"FALSE", SupportedInstanceFamilies?:array<string>, DynamicAppProvidersEnabled?:"ENABLED"|"DISABLED", ImageSharedWithOthers?:"TRUE"|"FALSE"}}>
     */
    public function deleteImage(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Image?:array{Name:string, Arn?:string, BaseImageArn?:string, DisplayName?:string, State?:"PENDING"|"AVAILABLE"|"FAILED"|"COPYING"|"DELETING"|"CREATING"|"IMPORTING", Visibility?:"PUBLIC"|"PRIVATE"|"SHARED", ImageBuilderSupported?:bool, ImageBuilderName?:string, Platform?:"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8", Description?:string, StateChangeReason?:array{Code?:"INTERNAL_ERROR"|"IMAGE_BUILDER_NOT_AVAILABLE"|"IMAGE_COPY_FAILURE", Message?:string}, Applications?:array<array{Name?:string, DisplayName?:string, IconURL?:string, LaunchPath?:string, LaunchParameters?:string, Enabled?:bool, Metadata?:array<string, string>, WorkingDirectory?:string, Description?:string, Arn?:string, AppBlockArn?:string, IconS3Location?:array{S3Bucket:string, S3Key?:string}, Platforms?:array<"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8">, InstanceFamilies?:array<string>, CreatedTime?:int|string|\DateTimeInterface}>, CreatedTime?:int|string|\DateTimeInterface, PublicBaseImageReleasedDate?:int|string|\DateTimeInterface, AppstreamAgentVersion?:string, ImagePermissions?:array{allowFleet?:bool, allowImageBuilder?:bool}, ImageErrors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"IAM_SERVICE_ROLE_IS_MISSING"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"FLEET_STOPPED"|"FLEET_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR", ErrorMessage?:string, ErrorTimestamp?:int|string|\DateTimeInterface}>, LatestAppstreamAgentVersion?:"TRUE"|"FALSE", SupportedInstanceFamilies?:array<string>, DynamicAppProvidersEnabled?:"ENABLED"|"DISABLED", ImageSharedWithOthers?:"TRUE"|"FALSE"}}>
     */
    public function deleteImageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{ImageBuilder?:array{Name:string, Arn?:string, ImageArn?:string, Description?:string, DisplayName?:string, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, InstanceType?:string, Platform?:"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8", IamRoleArn?:string, State?:"PENDING"|"UPDATING_AGENT"|"RUNNING"|"STOPPING"|"STOPPED"|"REBOOTING"|"SNAPSHOTTING"|"DELETING"|"FAILED"|"UPDATING"|"PENDING_QUALIFICATION", StateChangeReason?:array{Code?:"INTERNAL_ERROR"|"IMAGE_UNAVAILABLE", Message?:string}, CreatedTime?:int|string|\DateTimeInterface, EnableDefaultInternetAccess?:bool, DomainJoinInfo?:array{DirectoryName?:string, OrganizationalUnitDistinguishedName?:string}, NetworkAccessConfiguration?:array{EniPrivateIpAddress?:string, EniId?:string}, ImageBuilderErrors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"IAM_SERVICE_ROLE_IS_MISSING"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"FLEET_STOPPED"|"FLEET_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR", ErrorMessage?:string, ErrorTimestamp?:int|string|\DateTimeInterface}>, AppstreamAgentVersion?:string, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>, LatestAppstreamAgentVersion?:"TRUE"|"FALSE"}}>
     */
    public function deleteImageBuilder(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ImageBuilder?:array{Name:string, Arn?:string, ImageArn?:string, Description?:string, DisplayName?:string, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, InstanceType?:string, Platform?:"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8", IamRoleArn?:string, State?:"PENDING"|"UPDATING_AGENT"|"RUNNING"|"STOPPING"|"STOPPED"|"REBOOTING"|"SNAPSHOTTING"|"DELETING"|"FAILED"|"UPDATING"|"PENDING_QUALIFICATION", StateChangeReason?:array{Code?:"INTERNAL_ERROR"|"IMAGE_UNAVAILABLE", Message?:string}, CreatedTime?:int|string|\DateTimeInterface, EnableDefaultInternetAccess?:bool, DomainJoinInfo?:array{DirectoryName?:string, OrganizationalUnitDistinguishedName?:string}, NetworkAccessConfiguration?:array{EniPrivateIpAddress?:string, EniId?:string}, ImageBuilderErrors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"IAM_SERVICE_ROLE_IS_MISSING"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"FLEET_STOPPED"|"FLEET_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR", ErrorMessage?:string, ErrorTimestamp?:int|string|\DateTimeInterface}>, AppstreamAgentVersion?:string, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>, LatestAppstreamAgentVersion?:"TRUE"|"FALSE"}}>
     */
    public function deleteImageBuilderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, SharedAccountId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteImagePermissions(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, SharedAccountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteImagePermissionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteStack(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteStackAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteThemeForStack(array $args): \AWS\Result { }

    /**
     * @param array{StackName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteThemeForStackAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteUsageReportSubscription(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteUsageReportSubscriptionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName:string, AuthenticationType:"API"|"SAML"|"USERPOOL"|"AWS_AD"} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteUser(array $args): \AWS\Result { }

    /**
     * @param array{UserName:string, AuthenticationType:"API"|"SAML"|"USERPOOL"|"AWS_AD"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppBlockArn?:string, AppBlockBuilderName?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{AppBlockBuilderAppBlockAssociations?:array<array{AppBlockArn:string, AppBlockBuilderName:string}>, NextToken?:string}>
     */
    public function describeAppBlockBuilderAppBlockAssociations(array $args = []): \AWS\Result { }

    /**
     * @param array{AppBlockArn?:string, AppBlockBuilderName?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppBlockBuilderAppBlockAssociations?:array<array{AppBlockArn:string, AppBlockBuilderName:string}>, NextToken?:string}>
     */
    public function describeAppBlockBuilderAppBlockAssociationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Names?:array<string>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{AppBlockBuilders?:array<array{Arn:string, Name:string, DisplayName?:string, Description?:string, Platform:"WINDOWS_SERVER_2019", InstanceType:string, EnableDefaultInternetAccess?:bool, IamRoleArn?:string, VpcConfig:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, State:"STARTING"|"RUNNING"|"STOPPING"|"STOPPED", CreatedTime?:int|string|\DateTimeInterface, AppBlockBuilderErrors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"IAM_SERVICE_ROLE_IS_MISSING"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"FLEET_STOPPED"|"FLEET_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR", ErrorMessage?:string, ErrorTimestamp?:int|string|\DateTimeInterface}>, StateChangeReason?:array{Code?:"INTERNAL_ERROR", Message?:string}, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>}>, NextToken?:string}>
     */
    public function describeAppBlockBuilders(array $args = []): \AWS\Result { }

    /**
     * @param array{Names?:array<string>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppBlockBuilders?:array<array{Arn:string, Name:string, DisplayName?:string, Description?:string, Platform:"WINDOWS_SERVER_2019", InstanceType:string, EnableDefaultInternetAccess?:bool, IamRoleArn?:string, VpcConfig:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, State:"STARTING"|"RUNNING"|"STOPPING"|"STOPPED", CreatedTime?:int|string|\DateTimeInterface, AppBlockBuilderErrors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"IAM_SERVICE_ROLE_IS_MISSING"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"FLEET_STOPPED"|"FLEET_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR", ErrorMessage?:string, ErrorTimestamp?:int|string|\DateTimeInterface}>, StateChangeReason?:array{Code?:"INTERNAL_ERROR", Message?:string}, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>}>, NextToken?:string}>
     */
    public function describeAppBlockBuildersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arns?:array<string>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{AppBlocks?:array<array{Name:string, Arn:string, Description?:string, DisplayName?:string, SourceS3Location?:array{S3Bucket:string, S3Key?:string}, SetupScriptDetails?:array{ScriptS3Location:array{S3Bucket:string, S3Key?:string}, ExecutablePath:string, ExecutableParameters?:string, TimeoutInSeconds:int}, CreatedTime?:int|string|\DateTimeInterface, PostSetupScriptDetails?:array{ScriptS3Location:array{S3Bucket:string, S3Key?:string}, ExecutablePath:string, ExecutableParameters?:string, TimeoutInSeconds:int}, PackagingType?:"CUSTOM"|"APPSTREAM2", State?:"INACTIVE"|"ACTIVE", AppBlockErrors?:array<array{ErrorCode?:string, ErrorMessage?:string}>}>, NextToken?:string}>
     */
    public function describeAppBlocks(array $args = []): \AWS\Result { }

    /**
     * @param array{Arns?:array<string>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppBlocks?:array<array{Name:string, Arn:string, Description?:string, DisplayName?:string, SourceS3Location?:array{S3Bucket:string, S3Key?:string}, SetupScriptDetails?:array{ScriptS3Location:array{S3Bucket:string, S3Key?:string}, ExecutablePath:string, ExecutableParameters?:string, TimeoutInSeconds:int}, CreatedTime?:int|string|\DateTimeInterface, PostSetupScriptDetails?:array{ScriptS3Location:array{S3Bucket:string, S3Key?:string}, ExecutablePath:string, ExecutableParameters?:string, TimeoutInSeconds:int}, PackagingType?:"CUSTOM"|"APPSTREAM2", State?:"INACTIVE"|"ACTIVE", AppBlockErrors?:array<array{ErrorCode?:string, ErrorMessage?:string}>}>, NextToken?:string}>
     */
    public function describeAppBlocksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetName?:string, ApplicationArn?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ApplicationFleetAssociations?:array<array{FleetName:string, ApplicationArn:string}>, NextToken?:string}>
     */
    public function describeApplicationFleetAssociations(array $args = []): \AWS\Result { }

    /**
     * @param array{FleetName?:string, ApplicationArn?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationFleetAssociations?:array<array{FleetName:string, ApplicationArn:string}>, NextToken?:string}>
     */
    public function describeApplicationFleetAssociationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arns?:array<string>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Applications?:array<array{Name?:string, DisplayName?:string, IconURL?:string, LaunchPath?:string, LaunchParameters?:string, Enabled?:bool, Metadata?:array<string, string>, WorkingDirectory?:string, Description?:string, Arn?:string, AppBlockArn?:string, IconS3Location?:array{S3Bucket:string, S3Key?:string}, Platforms?:array<"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8">, InstanceFamilies?:array<string>, CreatedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeApplications(array $args = []): \AWS\Result { }

    /**
     * @param array{Arns?:array<string>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Applications?:array<array{Name?:string, DisplayName?:string, IconURL?:string, LaunchPath?:string, LaunchParameters?:string, Enabled?:bool, Metadata?:array<string, string>, WorkingDirectory?:string, Description?:string, Arn?:string, AppBlockArn?:string, IconS3Location?:array{S3Bucket:string, S3Key?:string}, Platforms?:array<"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8">, InstanceFamilies?:array<string>, CreatedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeApplicationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryNames?:array<string>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{DirectoryConfigs?:array<array{DirectoryName:string, OrganizationalUnitDistinguishedNames?:array<string>, ServiceAccountCredentials?:array{AccountName:string, AccountPassword:string}, CreatedTime?:int|string|\DateTimeInterface, CertificateBasedAuthProperties?:array{Status?:"DISABLED"|"ENABLED"|"ENABLED_NO_DIRECTORY_LOGIN_FALLBACK", CertificateAuthorityArn?:string}}>, NextToken?:string}>
     */
    public function describeDirectoryConfigs(array $args = []): \AWS\Result { }

    /**
     * @param array{DirectoryNames?:array<string>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DirectoryConfigs?:array<array{DirectoryName:string, OrganizationalUnitDistinguishedNames?:array<string>, ServiceAccountCredentials?:array{AccountName:string, AccountPassword:string}, CreatedTime?:int|string|\DateTimeInterface, CertificateBasedAuthProperties?:array{Status?:"DISABLED"|"ENABLED"|"ENABLED_NO_DIRECTORY_LOGIN_FALLBACK", CertificateAuthorityArn?:string}}>, NextToken?:string}>
     */
    public function describeDirectoryConfigsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name?:string, StackName:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Entitlements?:array<array{Name:string, StackName:string, Description?:string, AppVisibility:"ALL"|"ASSOCIATED", Attributes:array<array{Name:string, Value:string}>, CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeEntitlements(array $args): \AWS\Result { }

    /**
     * @param array{Name?:string, StackName:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Entitlements?:array<array{Name:string, StackName:string, Description?:string, AppVisibility:"ALL"|"ASSOCIATED", Attributes:array<array{Name:string, Value:string}>, CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeEntitlementsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Names?:array<string>, NextToken?:string} $args
     * @return \AWS\Result<array{Fleets?:array<array{Arn:string, Name:string, DisplayName?:string, Description?:string, ImageName?:string, ImageArn?:string, InstanceType:string, FleetType?:"ALWAYS_ON"|"ON_DEMAND"|"ELASTIC", ComputeCapacityStatus:array{Desired:int, Running?:int, InUse?:int, Available?:int, DesiredUserSessions?:int, AvailableUserSessions?:int, ActiveUserSessions?:int, ActualUserSessions?:int}, MaxUserDurationInSeconds?:int, DisconnectTimeoutInSeconds?:int, State:"STARTING"|"RUNNING"|"STOPPING"|"STOPPED", VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, CreatedTime?:int|string|\DateTimeInterface, FleetErrors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"IAM_SERVICE_ROLE_IS_MISSING"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"FLEET_STOPPED"|"FLEET_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR", ErrorMessage?:string}>, EnableDefaultInternetAccess?:bool, DomainJoinInfo?:array{DirectoryName?:string, OrganizationalUnitDistinguishedName?:string}, IdleDisconnectTimeoutInSeconds?:int, IamRoleArn?:string, StreamView?:"APP"|"DESKTOP", Platform?:"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8", MaxConcurrentSessions?:int, UsbDeviceFilterStrings?:array<string>, SessionScriptS3Location?:array{S3Bucket:string, S3Key?:string}, MaxSessionsPerInstance?:int}>, NextToken?:string}>
     */
    public function describeFleets(array $args = []): \AWS\Result { }

    /**
     * @param array{Names?:array<string>, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Fleets?:array<array{Arn:string, Name:string, DisplayName?:string, Description?:string, ImageName?:string, ImageArn?:string, InstanceType:string, FleetType?:"ALWAYS_ON"|"ON_DEMAND"|"ELASTIC", ComputeCapacityStatus:array{Desired:int, Running?:int, InUse?:int, Available?:int, DesiredUserSessions?:int, AvailableUserSessions?:int, ActiveUserSessions?:int, ActualUserSessions?:int}, MaxUserDurationInSeconds?:int, DisconnectTimeoutInSeconds?:int, State:"STARTING"|"RUNNING"|"STOPPING"|"STOPPED", VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, CreatedTime?:int|string|\DateTimeInterface, FleetErrors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"IAM_SERVICE_ROLE_IS_MISSING"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"FLEET_STOPPED"|"FLEET_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR", ErrorMessage?:string}>, EnableDefaultInternetAccess?:bool, DomainJoinInfo?:array{DirectoryName?:string, OrganizationalUnitDistinguishedName?:string}, IdleDisconnectTimeoutInSeconds?:int, IamRoleArn?:string, StreamView?:"APP"|"DESKTOP", Platform?:"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8", MaxConcurrentSessions?:int, UsbDeviceFilterStrings?:array<string>, SessionScriptS3Location?:array{S3Bucket:string, S3Key?:string}, MaxSessionsPerInstance?:int}>, NextToken?:string}>
     */
    public function describeFleetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Names?:array<string>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ImageBuilders?:array<array{Name:string, Arn?:string, ImageArn?:string, Description?:string, DisplayName?:string, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, InstanceType?:string, Platform?:"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8", IamRoleArn?:string, State?:"PENDING"|"UPDATING_AGENT"|"RUNNING"|"STOPPING"|"STOPPED"|"REBOOTING"|"SNAPSHOTTING"|"DELETING"|"FAILED"|"UPDATING"|"PENDING_QUALIFICATION", StateChangeReason?:array{Code?:"INTERNAL_ERROR"|"IMAGE_UNAVAILABLE", Message?:string}, CreatedTime?:int|string|\DateTimeInterface, EnableDefaultInternetAccess?:bool, DomainJoinInfo?:array{DirectoryName?:string, OrganizationalUnitDistinguishedName?:string}, NetworkAccessConfiguration?:array{EniPrivateIpAddress?:string, EniId?:string}, ImageBuilderErrors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"IAM_SERVICE_ROLE_IS_MISSING"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"FLEET_STOPPED"|"FLEET_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR", ErrorMessage?:string, ErrorTimestamp?:int|string|\DateTimeInterface}>, AppstreamAgentVersion?:string, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>, LatestAppstreamAgentVersion?:"TRUE"|"FALSE"}>, NextToken?:string}>
     */
    public function describeImageBuilders(array $args = []): \AWS\Result { }

    /**
     * @param array{Names?:array<string>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ImageBuilders?:array<array{Name:string, Arn?:string, ImageArn?:string, Description?:string, DisplayName?:string, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, InstanceType?:string, Platform?:"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8", IamRoleArn?:string, State?:"PENDING"|"UPDATING_AGENT"|"RUNNING"|"STOPPING"|"STOPPED"|"REBOOTING"|"SNAPSHOTTING"|"DELETING"|"FAILED"|"UPDATING"|"PENDING_QUALIFICATION", StateChangeReason?:array{Code?:"INTERNAL_ERROR"|"IMAGE_UNAVAILABLE", Message?:string}, CreatedTime?:int|string|\DateTimeInterface, EnableDefaultInternetAccess?:bool, DomainJoinInfo?:array{DirectoryName?:string, OrganizationalUnitDistinguishedName?:string}, NetworkAccessConfiguration?:array{EniPrivateIpAddress?:string, EniId?:string}, ImageBuilderErrors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"IAM_SERVICE_ROLE_IS_MISSING"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"FLEET_STOPPED"|"FLEET_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR", ErrorMessage?:string, ErrorTimestamp?:int|string|\DateTimeInterface}>, AppstreamAgentVersion?:string, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>, LatestAppstreamAgentVersion?:"TRUE"|"FALSE"}>, NextToken?:string}>
     */
    public function describeImageBuildersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, MaxResults?:int, SharedAwsAccountIds?:array<string>, NextToken?:string} $args
     * @return \AWS\Result<array{Name?:string, SharedImagePermissionsList?:array<array{sharedAccountId:string, imagePermissions:array{allowFleet?:bool, allowImageBuilder?:bool}}>, NextToken?:string}>
     */
    public function describeImagePermissions(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, MaxResults?:int, SharedAwsAccountIds?:array<string>, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name?:string, SharedImagePermissionsList?:array<array{sharedAccountId:string, imagePermissions:array{allowFleet?:bool, allowImageBuilder?:bool}}>, NextToken?:string}>
     */
    public function describeImagePermissionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Names?:array<string>, Arns?:array<string>, Type?:"PUBLIC"|"PRIVATE"|"SHARED", NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Images?:array<array{Name:string, Arn?:string, BaseImageArn?:string, DisplayName?:string, State?:"PENDING"|"AVAILABLE"|"FAILED"|"COPYING"|"DELETING"|"CREATING"|"IMPORTING", Visibility?:"PUBLIC"|"PRIVATE"|"SHARED", ImageBuilderSupported?:bool, ImageBuilderName?:string, Platform?:"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8", Description?:string, StateChangeReason?:array{Code?:"INTERNAL_ERROR"|"IMAGE_BUILDER_NOT_AVAILABLE"|"IMAGE_COPY_FAILURE", Message?:string}, Applications?:array<array{Name?:string, DisplayName?:string, IconURL?:string, LaunchPath?:string, LaunchParameters?:string, Enabled?:bool, Metadata?:array<string, string>, WorkingDirectory?:string, Description?:string, Arn?:string, AppBlockArn?:string, IconS3Location?:array{S3Bucket:string, S3Key?:string}, Platforms?:array<"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8">, InstanceFamilies?:array<string>, CreatedTime?:int|string|\DateTimeInterface}>, CreatedTime?:int|string|\DateTimeInterface, PublicBaseImageReleasedDate?:int|string|\DateTimeInterface, AppstreamAgentVersion?:string, ImagePermissions?:array{allowFleet?:bool, allowImageBuilder?:bool}, ImageErrors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"IAM_SERVICE_ROLE_IS_MISSING"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"FLEET_STOPPED"|"FLEET_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR", ErrorMessage?:string, ErrorTimestamp?:int|string|\DateTimeInterface}>, LatestAppstreamAgentVersion?:"TRUE"|"FALSE", SupportedInstanceFamilies?:array<string>, DynamicAppProvidersEnabled?:"ENABLED"|"DISABLED", ImageSharedWithOthers?:"TRUE"|"FALSE"}>, NextToken?:string}>
     */
    public function describeImages(array $args = []): \AWS\Result { }

    /**
     * @param array{Names?:array<string>, Arns?:array<string>, Type?:"PUBLIC"|"PRIVATE"|"SHARED", NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Images?:array<array{Name:string, Arn?:string, BaseImageArn?:string, DisplayName?:string, State?:"PENDING"|"AVAILABLE"|"FAILED"|"COPYING"|"DELETING"|"CREATING"|"IMPORTING", Visibility?:"PUBLIC"|"PRIVATE"|"SHARED", ImageBuilderSupported?:bool, ImageBuilderName?:string, Platform?:"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8", Description?:string, StateChangeReason?:array{Code?:"INTERNAL_ERROR"|"IMAGE_BUILDER_NOT_AVAILABLE"|"IMAGE_COPY_FAILURE", Message?:string}, Applications?:array<array{Name?:string, DisplayName?:string, IconURL?:string, LaunchPath?:string, LaunchParameters?:string, Enabled?:bool, Metadata?:array<string, string>, WorkingDirectory?:string, Description?:string, Arn?:string, AppBlockArn?:string, IconS3Location?:array{S3Bucket:string, S3Key?:string}, Platforms?:array<"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8">, InstanceFamilies?:array<string>, CreatedTime?:int|string|\DateTimeInterface}>, CreatedTime?:int|string|\DateTimeInterface, PublicBaseImageReleasedDate?:int|string|\DateTimeInterface, AppstreamAgentVersion?:string, ImagePermissions?:array{allowFleet?:bool, allowImageBuilder?:bool}, ImageErrors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"IAM_SERVICE_ROLE_IS_MISSING"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"FLEET_STOPPED"|"FLEET_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR", ErrorMessage?:string, ErrorTimestamp?:int|string|\DateTimeInterface}>, LatestAppstreamAgentVersion?:"TRUE"|"FALSE", SupportedInstanceFamilies?:array<string>, DynamicAppProvidersEnabled?:"ENABLED"|"DISABLED", ImageSharedWithOthers?:"TRUE"|"FALSE"}>, NextToken?:string}>
     */
    public function describeImagesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackName:string, FleetName:string, UserId?:string, NextToken?:string, Limit?:int, AuthenticationType?:"API"|"SAML"|"USERPOOL"|"AWS_AD", InstanceId?:string} $args
     * @return \AWS\Result<array{Sessions?:array<array{Id:string, UserId:string, StackName:string, FleetName:string, State:"ACTIVE"|"PENDING"|"EXPIRED", ConnectionState?:"CONNECTED"|"NOT_CONNECTED", StartTime?:int|string|\DateTimeInterface, MaxExpirationTime?:int|string|\DateTimeInterface, AuthenticationType?:"API"|"SAML"|"USERPOOL"|"AWS_AD", NetworkAccessConfiguration?:array{EniPrivateIpAddress?:string, EniId?:string}, InstanceId?:string}>, NextToken?:string}>
     */
    public function describeSessions(array $args): \AWS\Result { }

    /**
     * @param array{StackName:string, FleetName:string, UserId?:string, NextToken?:string, Limit?:int, AuthenticationType?:"API"|"SAML"|"USERPOOL"|"AWS_AD", InstanceId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Sessions?:array<array{Id:string, UserId:string, StackName:string, FleetName:string, State:"ACTIVE"|"PENDING"|"EXPIRED", ConnectionState?:"CONNECTED"|"NOT_CONNECTED", StartTime?:int|string|\DateTimeInterface, MaxExpirationTime?:int|string|\DateTimeInterface, AuthenticationType?:"API"|"SAML"|"USERPOOL"|"AWS_AD", NetworkAccessConfiguration?:array{EniPrivateIpAddress?:string, EniId?:string}, InstanceId?:string}>, NextToken?:string}>
     */
    public function describeSessionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Names?:array<string>, NextToken?:string} $args
     * @return \AWS\Result<array{Stacks?:array<array{Arn?:string, Name:string, Description?:string, DisplayName?:string, CreatedTime?:int|string|\DateTimeInterface, StorageConnectors?:array<array{ConnectorType:"HOMEFOLDERS"|"GOOGLE_DRIVE"|"ONE_DRIVE", ResourceIdentifier?:string, Domains?:array<string>}>, RedirectURL?:string, FeedbackURL?:string, StackErrors?:array<array{ErrorCode?:"STORAGE_CONNECTOR_ERROR"|"INTERNAL_SERVICE_ERROR", ErrorMessage?:string}>, UserSettings?:array<array{Action:"CLIPBOARD_COPY_FROM_LOCAL_DEVICE"|"CLIPBOARD_COPY_TO_LOCAL_DEVICE"|"FILE_UPLOAD"|"FILE_DOWNLOAD"|"PRINTING_TO_LOCAL_DEVICE"|"DOMAIN_PASSWORD_SIGNIN"|"DOMAIN_SMART_CARD_SIGNIN"|"AUTO_TIME_ZONE_REDIRECTION", Permission:"ENABLED"|"DISABLED", MaximumLength?:int}>, ApplicationSettings?:array{Enabled?:bool, SettingsGroup?:string, S3BucketName?:string}, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>, EmbedHostDomains?:array<string>, StreamingExperienceSettings?:array{PreferredProtocol?:"TCP"|"UDP"}}>, NextToken?:string}>
     */
    public function describeStacks(array $args = []): \AWS\Result { }

    /**
     * @param array{Names?:array<string>, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Stacks?:array<array{Arn?:string, Name:string, Description?:string, DisplayName?:string, CreatedTime?:int|string|\DateTimeInterface, StorageConnectors?:array<array{ConnectorType:"HOMEFOLDERS"|"GOOGLE_DRIVE"|"ONE_DRIVE", ResourceIdentifier?:string, Domains?:array<string>}>, RedirectURL?:string, FeedbackURL?:string, StackErrors?:array<array{ErrorCode?:"STORAGE_CONNECTOR_ERROR"|"INTERNAL_SERVICE_ERROR", ErrorMessage?:string}>, UserSettings?:array<array{Action:"CLIPBOARD_COPY_FROM_LOCAL_DEVICE"|"CLIPBOARD_COPY_TO_LOCAL_DEVICE"|"FILE_UPLOAD"|"FILE_DOWNLOAD"|"PRINTING_TO_LOCAL_DEVICE"|"DOMAIN_PASSWORD_SIGNIN"|"DOMAIN_SMART_CARD_SIGNIN"|"AUTO_TIME_ZONE_REDIRECTION", Permission:"ENABLED"|"DISABLED", MaximumLength?:int}>, ApplicationSettings?:array{Enabled?:bool, SettingsGroup?:string, S3BucketName?:string}, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>, EmbedHostDomains?:array<string>, StreamingExperienceSettings?:array{PreferredProtocol?:"TCP"|"UDP"}}>, NextToken?:string}>
     */
    public function describeStacksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackName:string} $args
     * @return \AWS\Result<array{Theme?:array{StackName?:string, State?:"ENABLED"|"DISABLED", ThemeTitleText?:string, ThemeStyling?:"LIGHT_BLUE"|"BLUE"|"PINK"|"RED", ThemeFooterLinks?:array<array{DisplayName?:string, FooterLinkURL?:string}>, ThemeOrganizationLogoURL?:string, ThemeFaviconURL?:string, CreatedTime?:int|string|\DateTimeInterface}}>
     */
    public function describeThemeForStack(array $args): \AWS\Result { }

    /**
     * @param array{StackName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Theme?:array{StackName?:string, State?:"ENABLED"|"DISABLED", ThemeTitleText?:string, ThemeStyling?:"LIGHT_BLUE"|"BLUE"|"PINK"|"RED", ThemeFooterLinks?:array<array{DisplayName?:string, FooterLinkURL?:string}>, ThemeOrganizationLogoURL?:string, ThemeFaviconURL?:string, CreatedTime?:int|string|\DateTimeInterface}}>
     */
    public function describeThemeForStackAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{UsageReportSubscriptions?:array<array{S3BucketName?:string, Schedule?:"DAILY", LastGeneratedReportDate?:int|string|\DateTimeInterface, SubscriptionErrors?:array<array{ErrorCode?:"RESOURCE_NOT_FOUND"|"ACCESS_DENIED"|"INTERNAL_SERVICE_ERROR", ErrorMessage?:string}>}>, NextToken?:string}>
     */
    public function describeUsageReportSubscriptions(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UsageReportSubscriptions?:array<array{S3BucketName?:string, Schedule?:"DAILY", LastGeneratedReportDate?:int|string|\DateTimeInterface, SubscriptionErrors?:array<array{ErrorCode?:"RESOURCE_NOT_FOUND"|"ACCESS_DENIED"|"INTERNAL_SERVICE_ERROR", ErrorMessage?:string}>}>, NextToken?:string}>
     */
    public function describeUsageReportSubscriptionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackName?:string, UserName?:string, AuthenticationType?:"API"|"SAML"|"USERPOOL"|"AWS_AD", MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{UserStackAssociations?:array<array{StackName:string, UserName:string, AuthenticationType:"API"|"SAML"|"USERPOOL"|"AWS_AD", SendEmailNotification?:bool}>, NextToken?:string}>
     */
    public function describeUserStackAssociations(array $args = []): \AWS\Result { }

    /**
     * @param array{StackName?:string, UserName?:string, AuthenticationType?:"API"|"SAML"|"USERPOOL"|"AWS_AD", MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserStackAssociations?:array<array{StackName:string, UserName:string, AuthenticationType:"API"|"SAML"|"USERPOOL"|"AWS_AD", SendEmailNotification?:bool}>, NextToken?:string}>
     */
    public function describeUserStackAssociationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationType:"API"|"SAML"|"USERPOOL"|"AWS_AD", MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Users?:array<array{Arn?:string, UserName?:string, Enabled?:bool, Status?:string, FirstName?:string, LastName?:string, CreatedTime?:int|string|\DateTimeInterface, AuthenticationType:"API"|"SAML"|"USERPOOL"|"AWS_AD"}>, NextToken?:string}>
     */
    public function describeUsers(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationType:"API"|"SAML"|"USERPOOL"|"AWS_AD", MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Users?:array<array{Arn?:string, UserName?:string, Enabled?:bool, Status?:string, FirstName?:string, LastName?:string, CreatedTime?:int|string|\DateTimeInterface, AuthenticationType:"API"|"SAML"|"USERPOOL"|"AWS_AD"}>, NextToken?:string}>
     */
    public function describeUsersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName:string, AuthenticationType:"API"|"SAML"|"USERPOOL"|"AWS_AD"} $args
     * @return \AWS\Result<array{}>
     */
    public function disableUser(array $args): \AWS\Result { }

    /**
     * @param array{UserName:string, AuthenticationType:"API"|"SAML"|"USERPOOL"|"AWS_AD"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disableUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppBlockArn:string, AppBlockBuilderName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateAppBlockBuilderAppBlock(array $args): \AWS\Result { }

    /**
     * @param array{AppBlockArn:string, AppBlockBuilderName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateAppBlockBuilderAppBlockAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetName:string, ApplicationArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateApplicationFleet(array $args): \AWS\Result { }

    /**
     * @param array{FleetName:string, ApplicationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateApplicationFleetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackName:string, EntitlementName:string, ApplicationIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateApplicationFromEntitlement(array $args): \AWS\Result { }

    /**
     * @param array{StackName:string, EntitlementName:string, ApplicationIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateApplicationFromEntitlementAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetName:string, StackName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateFleet(array $args): \AWS\Result { }

    /**
     * @param array{FleetName:string, StackName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateFleetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName:string, AuthenticationType:"API"|"SAML"|"USERPOOL"|"AWS_AD"} $args
     * @return \AWS\Result<array{}>
     */
    public function enableUser(array $args): \AWS\Result { }

    /**
     * @param array{UserName:string, AuthenticationType:"API"|"SAML"|"USERPOOL"|"AWS_AD"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function enableUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SessionId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function expireSession(array $args): \AWS\Result { }

    /**
     * @param array{SessionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function expireSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackName:string, NextToken?:string} $args
     * @return \AWS\Result<array{Names?:array<string>, NextToken?:string}>
     */
    public function listAssociatedFleets(array $args): \AWS\Result { }

    /**
     * @param array{StackName:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Names?:array<string>, NextToken?:string}>
     */
    public function listAssociatedFleetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FleetName:string, NextToken?:string} $args
     * @return \AWS\Result<array{Names?:array<string>, NextToken?:string}>
     */
    public function listAssociatedStacks(array $args): \AWS\Result { }

    /**
     * @param array{FleetName:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Names?:array<string>, NextToken?:string}>
     */
    public function listAssociatedStacksAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackName:string, EntitlementName:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{EntitledApplications?:array<array{ApplicationIdentifier:string}>, NextToken?:string}>
     */
    public function listEntitledApplications(array $args): \AWS\Result { }

    /**
     * @param array{StackName:string, EntitlementName:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{EntitledApplications?:array<array{ApplicationIdentifier:string}>, NextToken?:string}>
     */
    public function listEntitledApplicationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{Name:string} $args
     * @return \AWS\Result<array{AppBlockBuilder?:array{Arn:string, Name:string, DisplayName?:string, Description?:string, Platform:"WINDOWS_SERVER_2019", InstanceType:string, EnableDefaultInternetAccess?:bool, IamRoleArn?:string, VpcConfig:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, State:"STARTING"|"RUNNING"|"STOPPING"|"STOPPED", CreatedTime?:int|string|\DateTimeInterface, AppBlockBuilderErrors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"IAM_SERVICE_ROLE_IS_MISSING"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"FLEET_STOPPED"|"FLEET_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR", ErrorMessage?:string, ErrorTimestamp?:int|string|\DateTimeInterface}>, StateChangeReason?:array{Code?:"INTERNAL_ERROR", Message?:string}, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>}}>
     */
    public function startAppBlockBuilder(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppBlockBuilder?:array{Arn:string, Name:string, DisplayName?:string, Description?:string, Platform:"WINDOWS_SERVER_2019", InstanceType:string, EnableDefaultInternetAccess?:bool, IamRoleArn?:string, VpcConfig:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, State:"STARTING"|"RUNNING"|"STOPPING"|"STOPPED", CreatedTime?:int|string|\DateTimeInterface, AppBlockBuilderErrors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"IAM_SERVICE_ROLE_IS_MISSING"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"FLEET_STOPPED"|"FLEET_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR", ErrorMessage?:string, ErrorTimestamp?:int|string|\DateTimeInterface}>, StateChangeReason?:array{Code?:"INTERNAL_ERROR", Message?:string}, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>}}>
     */
    public function startAppBlockBuilderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function startFleet(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function startFleetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, AppstreamAgentVersion?:string} $args
     * @return \AWS\Result<array{ImageBuilder?:array{Name:string, Arn?:string, ImageArn?:string, Description?:string, DisplayName?:string, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, InstanceType?:string, Platform?:"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8", IamRoleArn?:string, State?:"PENDING"|"UPDATING_AGENT"|"RUNNING"|"STOPPING"|"STOPPED"|"REBOOTING"|"SNAPSHOTTING"|"DELETING"|"FAILED"|"UPDATING"|"PENDING_QUALIFICATION", StateChangeReason?:array{Code?:"INTERNAL_ERROR"|"IMAGE_UNAVAILABLE", Message?:string}, CreatedTime?:int|string|\DateTimeInterface, EnableDefaultInternetAccess?:bool, DomainJoinInfo?:array{DirectoryName?:string, OrganizationalUnitDistinguishedName?:string}, NetworkAccessConfiguration?:array{EniPrivateIpAddress?:string, EniId?:string}, ImageBuilderErrors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"IAM_SERVICE_ROLE_IS_MISSING"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"FLEET_STOPPED"|"FLEET_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR", ErrorMessage?:string, ErrorTimestamp?:int|string|\DateTimeInterface}>, AppstreamAgentVersion?:string, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>, LatestAppstreamAgentVersion?:"TRUE"|"FALSE"}}>
     */
    public function startImageBuilder(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, AppstreamAgentVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ImageBuilder?:array{Name:string, Arn?:string, ImageArn?:string, Description?:string, DisplayName?:string, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, InstanceType?:string, Platform?:"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8", IamRoleArn?:string, State?:"PENDING"|"UPDATING_AGENT"|"RUNNING"|"STOPPING"|"STOPPED"|"REBOOTING"|"SNAPSHOTTING"|"DELETING"|"FAILED"|"UPDATING"|"PENDING_QUALIFICATION", StateChangeReason?:array{Code?:"INTERNAL_ERROR"|"IMAGE_UNAVAILABLE", Message?:string}, CreatedTime?:int|string|\DateTimeInterface, EnableDefaultInternetAccess?:bool, DomainJoinInfo?:array{DirectoryName?:string, OrganizationalUnitDistinguishedName?:string}, NetworkAccessConfiguration?:array{EniPrivateIpAddress?:string, EniId?:string}, ImageBuilderErrors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"IAM_SERVICE_ROLE_IS_MISSING"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"FLEET_STOPPED"|"FLEET_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR", ErrorMessage?:string, ErrorTimestamp?:int|string|\DateTimeInterface}>, AppstreamAgentVersion?:string, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>, LatestAppstreamAgentVersion?:"TRUE"|"FALSE"}}>
     */
    public function startImageBuilderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{AppBlockBuilder?:array{Arn:string, Name:string, DisplayName?:string, Description?:string, Platform:"WINDOWS_SERVER_2019", InstanceType:string, EnableDefaultInternetAccess?:bool, IamRoleArn?:string, VpcConfig:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, State:"STARTING"|"RUNNING"|"STOPPING"|"STOPPED", CreatedTime?:int|string|\DateTimeInterface, AppBlockBuilderErrors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"IAM_SERVICE_ROLE_IS_MISSING"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"FLEET_STOPPED"|"FLEET_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR", ErrorMessage?:string, ErrorTimestamp?:int|string|\DateTimeInterface}>, StateChangeReason?:array{Code?:"INTERNAL_ERROR", Message?:string}, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>}}>
     */
    public function stopAppBlockBuilder(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppBlockBuilder?:array{Arn:string, Name:string, DisplayName?:string, Description?:string, Platform:"WINDOWS_SERVER_2019", InstanceType:string, EnableDefaultInternetAccess?:bool, IamRoleArn?:string, VpcConfig:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, State:"STARTING"|"RUNNING"|"STOPPING"|"STOPPED", CreatedTime?:int|string|\DateTimeInterface, AppBlockBuilderErrors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"IAM_SERVICE_ROLE_IS_MISSING"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"FLEET_STOPPED"|"FLEET_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR", ErrorMessage?:string, ErrorTimestamp?:int|string|\DateTimeInterface}>, StateChangeReason?:array{Code?:"INTERNAL_ERROR", Message?:string}, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>}}>
     */
    public function stopAppBlockBuilderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopFleet(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopFleetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{ImageBuilder?:array{Name:string, Arn?:string, ImageArn?:string, Description?:string, DisplayName?:string, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, InstanceType?:string, Platform?:"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8", IamRoleArn?:string, State?:"PENDING"|"UPDATING_AGENT"|"RUNNING"|"STOPPING"|"STOPPED"|"REBOOTING"|"SNAPSHOTTING"|"DELETING"|"FAILED"|"UPDATING"|"PENDING_QUALIFICATION", StateChangeReason?:array{Code?:"INTERNAL_ERROR"|"IMAGE_UNAVAILABLE", Message?:string}, CreatedTime?:int|string|\DateTimeInterface, EnableDefaultInternetAccess?:bool, DomainJoinInfo?:array{DirectoryName?:string, OrganizationalUnitDistinguishedName?:string}, NetworkAccessConfiguration?:array{EniPrivateIpAddress?:string, EniId?:string}, ImageBuilderErrors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"IAM_SERVICE_ROLE_IS_MISSING"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"FLEET_STOPPED"|"FLEET_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR", ErrorMessage?:string, ErrorTimestamp?:int|string|\DateTimeInterface}>, AppstreamAgentVersion?:string, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>, LatestAppstreamAgentVersion?:"TRUE"|"FALSE"}}>
     */
    public function stopImageBuilder(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ImageBuilder?:array{Name:string, Arn?:string, ImageArn?:string, Description?:string, DisplayName?:string, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, InstanceType?:string, Platform?:"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8", IamRoleArn?:string, State?:"PENDING"|"UPDATING_AGENT"|"RUNNING"|"STOPPING"|"STOPPED"|"REBOOTING"|"SNAPSHOTTING"|"DELETING"|"FAILED"|"UPDATING"|"PENDING_QUALIFICATION", StateChangeReason?:array{Code?:"INTERNAL_ERROR"|"IMAGE_UNAVAILABLE", Message?:string}, CreatedTime?:int|string|\DateTimeInterface, EnableDefaultInternetAccess?:bool, DomainJoinInfo?:array{DirectoryName?:string, OrganizationalUnitDistinguishedName?:string}, NetworkAccessConfiguration?:array{EniPrivateIpAddress?:string, EniId?:string}, ImageBuilderErrors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"IAM_SERVICE_ROLE_IS_MISSING"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"FLEET_STOPPED"|"FLEET_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR", ErrorMessage?:string, ErrorTimestamp?:int|string|\DateTimeInterface}>, AppstreamAgentVersion?:string, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>, LatestAppstreamAgentVersion?:"TRUE"|"FALSE"}}>
     */
    public function stopImageBuilderAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{Name:string, Description?:string, DisplayName?:string, Platform?:"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8", InstanceType?:string, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, EnableDefaultInternetAccess?:bool, IamRoleArn?:string, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>, AttributesToDelete?:array<"IAM_ROLE_ARN"|"ACCESS_ENDPOINTS"|"VPC_CONFIGURATION_SECURITY_GROUP_IDS">} $args
     * @return \AWS\Result<array{AppBlockBuilder?:array{Arn:string, Name:string, DisplayName?:string, Description?:string, Platform:"WINDOWS_SERVER_2019", InstanceType:string, EnableDefaultInternetAccess?:bool, IamRoleArn?:string, VpcConfig:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, State:"STARTING"|"RUNNING"|"STOPPING"|"STOPPED", CreatedTime?:int|string|\DateTimeInterface, AppBlockBuilderErrors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"IAM_SERVICE_ROLE_IS_MISSING"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"FLEET_STOPPED"|"FLEET_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR", ErrorMessage?:string, ErrorTimestamp?:int|string|\DateTimeInterface}>, StateChangeReason?:array{Code?:"INTERNAL_ERROR", Message?:string}, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>}}>
     */
    public function updateAppBlockBuilder(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, DisplayName?:string, Platform?:"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8", InstanceType?:string, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, EnableDefaultInternetAccess?:bool, IamRoleArn?:string, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>, AttributesToDelete?:array<"IAM_ROLE_ARN"|"ACCESS_ENDPOINTS"|"VPC_CONFIGURATION_SECURITY_GROUP_IDS">} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppBlockBuilder?:array{Arn:string, Name:string, DisplayName?:string, Description?:string, Platform:"WINDOWS_SERVER_2019", InstanceType:string, EnableDefaultInternetAccess?:bool, IamRoleArn?:string, VpcConfig:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, State:"STARTING"|"RUNNING"|"STOPPING"|"STOPPED", CreatedTime?:int|string|\DateTimeInterface, AppBlockBuilderErrors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"IAM_SERVICE_ROLE_IS_MISSING"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"FLEET_STOPPED"|"FLEET_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR", ErrorMessage?:string, ErrorTimestamp?:int|string|\DateTimeInterface}>, StateChangeReason?:array{Code?:"INTERNAL_ERROR", Message?:string}, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>}}>
     */
    public function updateAppBlockBuilderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, DisplayName?:string, Description?:string, IconS3Location?:array{S3Bucket:string, S3Key?:string}, LaunchPath?:string, WorkingDirectory?:string, LaunchParameters?:string, AppBlockArn?:string, AttributesToDelete?:array<"LAUNCH_PARAMETERS"|"WORKING_DIRECTORY">} $args
     * @return \AWS\Result<array{Application?:array{Name?:string, DisplayName?:string, IconURL?:string, LaunchPath?:string, LaunchParameters?:string, Enabled?:bool, Metadata?:array<string, string>, WorkingDirectory?:string, Description?:string, Arn?:string, AppBlockArn?:string, IconS3Location?:array{S3Bucket:string, S3Key?:string}, Platforms?:array<"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8">, InstanceFamilies?:array<string>, CreatedTime?:int|string|\DateTimeInterface}}>
     */
    public function updateApplication(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, DisplayName?:string, Description?:string, IconS3Location?:array{S3Bucket:string, S3Key?:string}, LaunchPath?:string, WorkingDirectory?:string, LaunchParameters?:string, AppBlockArn?:string, AttributesToDelete?:array<"LAUNCH_PARAMETERS"|"WORKING_DIRECTORY">} $args
     * @return \GuzzleHttp\Promise\Promise<array{Application?:array{Name?:string, DisplayName?:string, IconURL?:string, LaunchPath?:string, LaunchParameters?:string, Enabled?:bool, Metadata?:array<string, string>, WorkingDirectory?:string, Description?:string, Arn?:string, AppBlockArn?:string, IconS3Location?:array{S3Bucket:string, S3Key?:string}, Platforms?:array<"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8">, InstanceFamilies?:array<string>, CreatedTime?:int|string|\DateTimeInterface}}>
     */
    public function updateApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryName:string, OrganizationalUnitDistinguishedNames?:array<string>, ServiceAccountCredentials?:array{AccountName:string, AccountPassword:string}, CertificateBasedAuthProperties?:array{Status?:"DISABLED"|"ENABLED"|"ENABLED_NO_DIRECTORY_LOGIN_FALLBACK", CertificateAuthorityArn?:string}} $args
     * @return \AWS\Result<array{DirectoryConfig?:array{DirectoryName:string, OrganizationalUnitDistinguishedNames?:array<string>, ServiceAccountCredentials?:array{AccountName:string, AccountPassword:string}, CreatedTime?:int|string|\DateTimeInterface, CertificateBasedAuthProperties?:array{Status?:"DISABLED"|"ENABLED"|"ENABLED_NO_DIRECTORY_LOGIN_FALLBACK", CertificateAuthorityArn?:string}}}>
     */
    public function updateDirectoryConfig(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryName:string, OrganizationalUnitDistinguishedNames?:array<string>, ServiceAccountCredentials?:array{AccountName:string, AccountPassword:string}, CertificateBasedAuthProperties?:array{Status?:"DISABLED"|"ENABLED"|"ENABLED_NO_DIRECTORY_LOGIN_FALLBACK", CertificateAuthorityArn?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{DirectoryConfig?:array{DirectoryName:string, OrganizationalUnitDistinguishedNames?:array<string>, ServiceAccountCredentials?:array{AccountName:string, AccountPassword:string}, CreatedTime?:int|string|\DateTimeInterface, CertificateBasedAuthProperties?:array{Status?:"DISABLED"|"ENABLED"|"ENABLED_NO_DIRECTORY_LOGIN_FALLBACK", CertificateAuthorityArn?:string}}}>
     */
    public function updateDirectoryConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, StackName:string, Description?:string, AppVisibility?:"ALL"|"ASSOCIATED", Attributes?:array<array{Name:string, Value:string}>} $args
     * @return \AWS\Result<array{Entitlement?:array{Name:string, StackName:string, Description?:string, AppVisibility:"ALL"|"ASSOCIATED", Attributes:array<array{Name:string, Value:string}>, CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}}>
     */
    public function updateEntitlement(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, StackName:string, Description?:string, AppVisibility?:"ALL"|"ASSOCIATED", Attributes?:array<array{Name:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Entitlement?:array{Name:string, StackName:string, Description?:string, AppVisibility:"ALL"|"ASSOCIATED", Attributes:array<array{Name:string, Value:string}>, CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}}>
     */
    public function updateEntitlementAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ImageName?:string, ImageArn?:string, Name?:string, InstanceType?:string, ComputeCapacity?:array{DesiredInstances?:int, DesiredSessions?:int}, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, MaxUserDurationInSeconds?:int, DisconnectTimeoutInSeconds?:int, DeleteVpcConfig?:bool, Description?:string, DisplayName?:string, EnableDefaultInternetAccess?:bool, DomainJoinInfo?:array{DirectoryName?:string, OrganizationalUnitDistinguishedName?:string}, IdleDisconnectTimeoutInSeconds?:int, AttributesToDelete?:array<"VPC_CONFIGURATION"|"VPC_CONFIGURATION_SECURITY_GROUP_IDS"|"DOMAIN_JOIN_INFO"|"IAM_ROLE_ARN"|"USB_DEVICE_FILTER_STRINGS"|"SESSION_SCRIPT_S3_LOCATION"|"MAX_SESSIONS_PER_INSTANCE">, IamRoleArn?:string, StreamView?:"APP"|"DESKTOP", Platform?:"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8", MaxConcurrentSessions?:int, UsbDeviceFilterStrings?:array<string>, SessionScriptS3Location?:array{S3Bucket:string, S3Key?:string}, MaxSessionsPerInstance?:int} $args
     * @return \AWS\Result<array{Fleet?:array{Arn:string, Name:string, DisplayName?:string, Description?:string, ImageName?:string, ImageArn?:string, InstanceType:string, FleetType?:"ALWAYS_ON"|"ON_DEMAND"|"ELASTIC", ComputeCapacityStatus:array{Desired:int, Running?:int, InUse?:int, Available?:int, DesiredUserSessions?:int, AvailableUserSessions?:int, ActiveUserSessions?:int, ActualUserSessions?:int}, MaxUserDurationInSeconds?:int, DisconnectTimeoutInSeconds?:int, State:"STARTING"|"RUNNING"|"STOPPING"|"STOPPED", VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, CreatedTime?:int|string|\DateTimeInterface, FleetErrors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"IAM_SERVICE_ROLE_IS_MISSING"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"FLEET_STOPPED"|"FLEET_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR", ErrorMessage?:string}>, EnableDefaultInternetAccess?:bool, DomainJoinInfo?:array{DirectoryName?:string, OrganizationalUnitDistinguishedName?:string}, IdleDisconnectTimeoutInSeconds?:int, IamRoleArn?:string, StreamView?:"APP"|"DESKTOP", Platform?:"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8", MaxConcurrentSessions?:int, UsbDeviceFilterStrings?:array<string>, SessionScriptS3Location?:array{S3Bucket:string, S3Key?:string}, MaxSessionsPerInstance?:int}}>
     */
    public function updateFleet(array $args = []): \AWS\Result { }

    /**
     * @param array{ImageName?:string, ImageArn?:string, Name?:string, InstanceType?:string, ComputeCapacity?:array{DesiredInstances?:int, DesiredSessions?:int}, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, MaxUserDurationInSeconds?:int, DisconnectTimeoutInSeconds?:int, DeleteVpcConfig?:bool, Description?:string, DisplayName?:string, EnableDefaultInternetAccess?:bool, DomainJoinInfo?:array{DirectoryName?:string, OrganizationalUnitDistinguishedName?:string}, IdleDisconnectTimeoutInSeconds?:int, AttributesToDelete?:array<"VPC_CONFIGURATION"|"VPC_CONFIGURATION_SECURITY_GROUP_IDS"|"DOMAIN_JOIN_INFO"|"IAM_ROLE_ARN"|"USB_DEVICE_FILTER_STRINGS"|"SESSION_SCRIPT_S3_LOCATION"|"MAX_SESSIONS_PER_INSTANCE">, IamRoleArn?:string, StreamView?:"APP"|"DESKTOP", Platform?:"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8", MaxConcurrentSessions?:int, UsbDeviceFilterStrings?:array<string>, SessionScriptS3Location?:array{S3Bucket:string, S3Key?:string}, MaxSessionsPerInstance?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Fleet?:array{Arn:string, Name:string, DisplayName?:string, Description?:string, ImageName?:string, ImageArn?:string, InstanceType:string, FleetType?:"ALWAYS_ON"|"ON_DEMAND"|"ELASTIC", ComputeCapacityStatus:array{Desired:int, Running?:int, InUse?:int, Available?:int, DesiredUserSessions?:int, AvailableUserSessions?:int, ActiveUserSessions?:int, ActualUserSessions?:int}, MaxUserDurationInSeconds?:int, DisconnectTimeoutInSeconds?:int, State:"STARTING"|"RUNNING"|"STOPPING"|"STOPPED", VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>}, CreatedTime?:int|string|\DateTimeInterface, FleetErrors?:array<array{ErrorCode?:"IAM_SERVICE_ROLE_MISSING_ENI_DESCRIBE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_CREATE_ACTION"|"IAM_SERVICE_ROLE_MISSING_ENI_DELETE_ACTION"|"NETWORK_INTERFACE_LIMIT_EXCEEDED"|"INTERNAL_SERVICE_ERROR"|"IAM_SERVICE_ROLE_IS_MISSING"|"MACHINE_ROLE_IS_MISSING"|"STS_DISABLED_IN_REGION"|"SUBNET_HAS_INSUFFICIENT_IP_ADDRESSES"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SUBNET_ACTION"|"SUBNET_NOT_FOUND"|"IMAGE_NOT_FOUND"|"INVALID_SUBNET_CONFIGURATION"|"SECURITY_GROUPS_NOT_FOUND"|"IGW_NOT_ATTACHED"|"IAM_SERVICE_ROLE_MISSING_DESCRIBE_SECURITY_GROUPS_ACTION"|"FLEET_STOPPED"|"FLEET_INSTANCE_PROVISIONING_FAILURE"|"DOMAIN_JOIN_ERROR_FILE_NOT_FOUND"|"DOMAIN_JOIN_ERROR_ACCESS_DENIED"|"DOMAIN_JOIN_ERROR_LOGON_FAILURE"|"DOMAIN_JOIN_ERROR_INVALID_PARAMETER"|"DOMAIN_JOIN_ERROR_MORE_DATA"|"DOMAIN_JOIN_ERROR_NO_SUCH_DOMAIN"|"DOMAIN_JOIN_ERROR_NOT_SUPPORTED"|"DOMAIN_JOIN_NERR_INVALID_WORKGROUP_NAME"|"DOMAIN_JOIN_NERR_WORKSTATION_NOT_STARTED"|"DOMAIN_JOIN_ERROR_DS_MACHINE_ACCOUNT_QUOTA_EXCEEDED"|"DOMAIN_JOIN_NERR_PASSWORD_EXPIRED"|"DOMAIN_JOIN_INTERNAL_SERVICE_ERROR", ErrorMessage?:string}>, EnableDefaultInternetAccess?:bool, DomainJoinInfo?:array{DirectoryName?:string, OrganizationalUnitDistinguishedName?:string}, IdleDisconnectTimeoutInSeconds?:int, IamRoleArn?:string, StreamView?:"APP"|"DESKTOP", Platform?:"WINDOWS"|"WINDOWS_SERVER_2016"|"WINDOWS_SERVER_2019"|"WINDOWS_SERVER_2022"|"AMAZON_LINUX2"|"RHEL8"|"ROCKY_LINUX8", MaxConcurrentSessions?:int, UsbDeviceFilterStrings?:array<string>, SessionScriptS3Location?:array{S3Bucket:string, S3Key?:string}, MaxSessionsPerInstance?:int}}>
     */
    public function updateFleetAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, SharedAccountId:string, ImagePermissions:array{allowFleet?:bool, allowImageBuilder?:bool}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateImagePermissions(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, SharedAccountId:string, ImagePermissions:array{allowFleet?:bool, allowImageBuilder?:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateImagePermissionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DisplayName?:string, Description?:string, Name:string, StorageConnectors?:array<array{ConnectorType:"HOMEFOLDERS"|"GOOGLE_DRIVE"|"ONE_DRIVE", ResourceIdentifier?:string, Domains?:array<string>}>, DeleteStorageConnectors?:bool, RedirectURL?:string, FeedbackURL?:string, AttributesToDelete?:array<"STORAGE_CONNECTORS"|"STORAGE_CONNECTOR_HOMEFOLDERS"|"STORAGE_CONNECTOR_GOOGLE_DRIVE"|"STORAGE_CONNECTOR_ONE_DRIVE"|"REDIRECT_URL"|"FEEDBACK_URL"|"THEME_NAME"|"USER_SETTINGS"|"EMBED_HOST_DOMAINS"|"IAM_ROLE_ARN"|"ACCESS_ENDPOINTS"|"STREAMING_EXPERIENCE_SETTINGS">, UserSettings?:array<array{Action:"CLIPBOARD_COPY_FROM_LOCAL_DEVICE"|"CLIPBOARD_COPY_TO_LOCAL_DEVICE"|"FILE_UPLOAD"|"FILE_DOWNLOAD"|"PRINTING_TO_LOCAL_DEVICE"|"DOMAIN_PASSWORD_SIGNIN"|"DOMAIN_SMART_CARD_SIGNIN"|"AUTO_TIME_ZONE_REDIRECTION", Permission:"ENABLED"|"DISABLED", MaximumLength?:int}>, ApplicationSettings?:array{Enabled:bool, SettingsGroup?:string}, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>, EmbedHostDomains?:array<string>, StreamingExperienceSettings?:array{PreferredProtocol?:"TCP"|"UDP"}} $args
     * @return \AWS\Result<array{Stack?:array{Arn?:string, Name:string, Description?:string, DisplayName?:string, CreatedTime?:int|string|\DateTimeInterface, StorageConnectors?:array<array{ConnectorType:"HOMEFOLDERS"|"GOOGLE_DRIVE"|"ONE_DRIVE", ResourceIdentifier?:string, Domains?:array<string>}>, RedirectURL?:string, FeedbackURL?:string, StackErrors?:array<array{ErrorCode?:"STORAGE_CONNECTOR_ERROR"|"INTERNAL_SERVICE_ERROR", ErrorMessage?:string}>, UserSettings?:array<array{Action:"CLIPBOARD_COPY_FROM_LOCAL_DEVICE"|"CLIPBOARD_COPY_TO_LOCAL_DEVICE"|"FILE_UPLOAD"|"FILE_DOWNLOAD"|"PRINTING_TO_LOCAL_DEVICE"|"DOMAIN_PASSWORD_SIGNIN"|"DOMAIN_SMART_CARD_SIGNIN"|"AUTO_TIME_ZONE_REDIRECTION", Permission:"ENABLED"|"DISABLED", MaximumLength?:int}>, ApplicationSettings?:array{Enabled?:bool, SettingsGroup?:string, S3BucketName?:string}, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>, EmbedHostDomains?:array<string>, StreamingExperienceSettings?:array{PreferredProtocol?:"TCP"|"UDP"}}}>
     */
    public function updateStack(array $args): \AWS\Result { }

    /**
     * @param array{DisplayName?:string, Description?:string, Name:string, StorageConnectors?:array<array{ConnectorType:"HOMEFOLDERS"|"GOOGLE_DRIVE"|"ONE_DRIVE", ResourceIdentifier?:string, Domains?:array<string>}>, DeleteStorageConnectors?:bool, RedirectURL?:string, FeedbackURL?:string, AttributesToDelete?:array<"STORAGE_CONNECTORS"|"STORAGE_CONNECTOR_HOMEFOLDERS"|"STORAGE_CONNECTOR_GOOGLE_DRIVE"|"STORAGE_CONNECTOR_ONE_DRIVE"|"REDIRECT_URL"|"FEEDBACK_URL"|"THEME_NAME"|"USER_SETTINGS"|"EMBED_HOST_DOMAINS"|"IAM_ROLE_ARN"|"ACCESS_ENDPOINTS"|"STREAMING_EXPERIENCE_SETTINGS">, UserSettings?:array<array{Action:"CLIPBOARD_COPY_FROM_LOCAL_DEVICE"|"CLIPBOARD_COPY_TO_LOCAL_DEVICE"|"FILE_UPLOAD"|"FILE_DOWNLOAD"|"PRINTING_TO_LOCAL_DEVICE"|"DOMAIN_PASSWORD_SIGNIN"|"DOMAIN_SMART_CARD_SIGNIN"|"AUTO_TIME_ZONE_REDIRECTION", Permission:"ENABLED"|"DISABLED", MaximumLength?:int}>, ApplicationSettings?:array{Enabled:bool, SettingsGroup?:string}, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>, EmbedHostDomains?:array<string>, StreamingExperienceSettings?:array{PreferredProtocol?:"TCP"|"UDP"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Stack?:array{Arn?:string, Name:string, Description?:string, DisplayName?:string, CreatedTime?:int|string|\DateTimeInterface, StorageConnectors?:array<array{ConnectorType:"HOMEFOLDERS"|"GOOGLE_DRIVE"|"ONE_DRIVE", ResourceIdentifier?:string, Domains?:array<string>}>, RedirectURL?:string, FeedbackURL?:string, StackErrors?:array<array{ErrorCode?:"STORAGE_CONNECTOR_ERROR"|"INTERNAL_SERVICE_ERROR", ErrorMessage?:string}>, UserSettings?:array<array{Action:"CLIPBOARD_COPY_FROM_LOCAL_DEVICE"|"CLIPBOARD_COPY_TO_LOCAL_DEVICE"|"FILE_UPLOAD"|"FILE_DOWNLOAD"|"PRINTING_TO_LOCAL_DEVICE"|"DOMAIN_PASSWORD_SIGNIN"|"DOMAIN_SMART_CARD_SIGNIN"|"AUTO_TIME_ZONE_REDIRECTION", Permission:"ENABLED"|"DISABLED", MaximumLength?:int}>, ApplicationSettings?:array{Enabled?:bool, SettingsGroup?:string, S3BucketName?:string}, AccessEndpoints?:array<array{EndpointType:"STREAMING", VpceId?:string}>, EmbedHostDomains?:array<string>, StreamingExperienceSettings?:array{PreferredProtocol?:"TCP"|"UDP"}}}>
     */
    public function updateStackAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StackName:string, FooterLinks?:array<array{DisplayName?:string, FooterLinkURL?:string}>, TitleText?:string, ThemeStyling?:"LIGHT_BLUE"|"BLUE"|"PINK"|"RED", OrganizationLogoS3Location?:array{S3Bucket:string, S3Key?:string}, FaviconS3Location?:array{S3Bucket:string, S3Key?:string}, State?:"ENABLED"|"DISABLED", AttributesToDelete?:array<"FOOTER_LINKS">} $args
     * @return \AWS\Result<array{Theme?:array{StackName?:string, State?:"ENABLED"|"DISABLED", ThemeTitleText?:string, ThemeStyling?:"LIGHT_BLUE"|"BLUE"|"PINK"|"RED", ThemeFooterLinks?:array<array{DisplayName?:string, FooterLinkURL?:string}>, ThemeOrganizationLogoURL?:string, ThemeFaviconURL?:string, CreatedTime?:int|string|\DateTimeInterface}}>
     */
    public function updateThemeForStack(array $args): \AWS\Result { }

    /**
     * @param array{StackName:string, FooterLinks?:array<array{DisplayName?:string, FooterLinkURL?:string}>, TitleText?:string, ThemeStyling?:"LIGHT_BLUE"|"BLUE"|"PINK"|"RED", OrganizationLogoS3Location?:array{S3Bucket:string, S3Key?:string}, FaviconS3Location?:array{S3Bucket:string, S3Key?:string}, State?:"ENABLED"|"DISABLED", AttributesToDelete?:array<"FOOTER_LINKS">} $args
     * @return \GuzzleHttp\Promise\Promise<array{Theme?:array{StackName?:string, State?:"ENABLED"|"DISABLED", ThemeTitleText?:string, ThemeStyling?:"LIGHT_BLUE"|"BLUE"|"PINK"|"RED", ThemeFooterLinks?:array<array{DisplayName?:string, FooterLinkURL?:string}>, ThemeOrganizationLogoURL?:string, ThemeFaviconURL?:string, CreatedTime?:int|string|\DateTimeInterface}}>
     */
    public function updateThemeForStackAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
