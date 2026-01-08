<?php
namespace AWS\WorkMail;

class WorkMailClient
{
    /**
     * @param array{OrganizationId:string, ResourceId:string, EntityId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function associateDelegateToResource(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, ResourceId:string, EntityId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateDelegateToResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, GroupId:string, MemberId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function associateMemberToGroup(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, GroupId:string, MemberId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateMemberToGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, ImpersonationRoleId:string} $args
     * @return \AWS\Result<array{Token?:string, ExpiresIn?:int}>
     */
    public function assumeImpersonationRole(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, ImpersonationRoleId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Token?:string, ExpiresIn?:int}>
     */
    public function assumeImpersonationRoleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken:string, JobId:string, OrganizationId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function cancelMailboxExportJob(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken:string, JobId:string, OrganizationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function cancelMailboxExportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, EntityId:string, Alias:string} $args
     * @return \AWS\Result<array{}>
     */
    public function createAlias(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, EntityId:string, Alias:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createAliasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, OrganizationId:string, DomainName:string, EwsProvider?:array{EwsEndpoint:string, EwsUsername:string, EwsPassword:string}, LambdaProvider?:array{LambdaArn:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function createAvailabilityConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, OrganizationId:string, DomainName:string, EwsProvider?:array{EwsEndpoint:string, EwsUsername:string, EwsPassword:string}, LambdaProvider?:array{LambdaArn:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createAvailabilityConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, Name:string, HiddenFromGlobalAddressList?:bool} $args
     * @return \AWS\Result<array{GroupId?:string}>
     */
    public function createGroup(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, Name:string, HiddenFromGlobalAddressList?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{GroupId?:string}>
     */
    public function createGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, InstanceArn:string, ClientToken?:string} $args
     * @return \AWS\Result<array{ApplicationArn?:string}>
     */
    public function createIdentityCenterApplication(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, InstanceArn:string, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationArn?:string}>
     */
    public function createIdentityCenterApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, OrganizationId:string, Name:string, Type:"FULL_ACCESS"|"READ_ONLY", Description?:string, Rules:array<array{ImpersonationRuleId:string, Name?:string, Description?:string, Effect:"ALLOW"|"DENY", TargetUsers?:array<string>, NotTargetUsers?:array<string>}>} $args
     * @return \AWS\Result<array{ImpersonationRoleId?:string}>
     */
    public function createImpersonationRole(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, OrganizationId:string, Name:string, Type:"FULL_ACCESS"|"READ_ONLY", Description?:string, Rules:array<array{ImpersonationRuleId:string, Name?:string, Description?:string, Effect:"ALLOW"|"DENY", TargetUsers?:array<string>, NotTargetUsers?:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ImpersonationRoleId?:string}>
     */
    public function createImpersonationRoleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, ClientToken?:string, Name:string, Description?:string, Effect:"ALLOW"|"DENY", DeviceTypes?:array<string>, NotDeviceTypes?:array<string>, DeviceModels?:array<string>, NotDeviceModels?:array<string>, DeviceOperatingSystems?:array<string>, NotDeviceOperatingSystems?:array<string>, DeviceUserAgents?:array<string>, NotDeviceUserAgents?:array<string>} $args
     * @return \AWS\Result<array{MobileDeviceAccessRuleId?:string}>
     */
    public function createMobileDeviceAccessRule(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, ClientToken?:string, Name:string, Description?:string, Effect:"ALLOW"|"DENY", DeviceTypes?:array<string>, NotDeviceTypes?:array<string>, DeviceModels?:array<string>, NotDeviceModels?:array<string>, DeviceOperatingSystems?:array<string>, NotDeviceOperatingSystems?:array<string>, DeviceUserAgents?:array<string>, NotDeviceUserAgents?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{MobileDeviceAccessRuleId?:string}>
     */
    public function createMobileDeviceAccessRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DirectoryId?:string, Alias:string, ClientToken?:string, Domains?:array<array{DomainName:string, HostedZoneId?:string}>, KmsKeyArn?:string, EnableInteroperability?:bool} $args
     * @return \AWS\Result<array{OrganizationId?:string}>
     */
    public function createOrganization(array $args): \AWS\Result { }

    /**
     * @param array{DirectoryId?:string, Alias:string, ClientToken?:string, Domains?:array<array{DomainName:string, HostedZoneId?:string}>, KmsKeyArn?:string, EnableInteroperability?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{OrganizationId?:string}>
     */
    public function createOrganizationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, Name:string, Type:"ROOM"|"EQUIPMENT", Description?:string, HiddenFromGlobalAddressList?:bool} $args
     * @return \AWS\Result<array{ResourceId?:string}>
     */
    public function createResource(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, Name:string, Type:"ROOM"|"EQUIPMENT", Description?:string, HiddenFromGlobalAddressList?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceId?:string}>
     */
    public function createResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, Name:string, DisplayName:string, Password?:string, Role?:"USER"|"RESOURCE"|"SYSTEM_USER"|"REMOTE_USER", FirstName?:string, LastName?:string, HiddenFromGlobalAddressList?:bool, IdentityProviderUserId?:string} $args
     * @return \AWS\Result<array{UserId?:string}>
     */
    public function createUser(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, Name:string, DisplayName:string, Password?:string, Role?:"USER"|"RESOURCE"|"SYSTEM_USER"|"REMOTE_USER", FirstName?:string, LastName?:string, HiddenFromGlobalAddressList?:bool, IdentityProviderUserId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserId?:string}>
     */
    public function createUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAccessControlRule(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAccessControlRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, EntityId:string, Alias:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAlias(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, EntityId:string, Alias:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAliasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, DomainName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAvailabilityConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, DomainName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAvailabilityConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteEmailMonitoringConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteEmailMonitoringConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, GroupId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteGroup(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, GroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteIdentityCenterApplication(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteIdentityCenterApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteIdentityProviderConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteIdentityProviderConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, ImpersonationRoleId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteImpersonationRole(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, ImpersonationRoleId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteImpersonationRoleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, EntityId:string, GranteeId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteMailboxPermissions(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, EntityId:string, GranteeId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteMailboxPermissionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, UserId:string, DeviceId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteMobileDeviceAccessOverride(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, UserId:string, DeviceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteMobileDeviceAccessOverrideAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, MobileDeviceAccessRuleId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteMobileDeviceAccessRule(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, MobileDeviceAccessRuleId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteMobileDeviceAccessRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, OrganizationId:string, DeleteDirectory:bool, ForceDelete?:bool, DeleteIdentityCenterApplication?:bool} $args
     * @return \AWS\Result<array{OrganizationId?:string, State?:string}>
     */
    public function deleteOrganization(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, OrganizationId:string, DeleteDirectory:bool, ForceDelete?:bool, DeleteIdentityCenterApplication?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{OrganizationId?:string, State?:string}>
     */
    public function deleteOrganizationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, PersonalAccessTokenId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deletePersonalAccessToken(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, PersonalAccessTokenId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deletePersonalAccessTokenAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, ResourceId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteResource(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, ResourceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, Id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteRetentionPolicy(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteRetentionPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, UserId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteUser(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, UserId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, EntityId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deregisterFromWorkMail(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, EntityId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deregisterFromWorkMailAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, DomainName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deregisterMailDomain(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, DomainName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deregisterMailDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string} $args
     * @return \AWS\Result<array{RoleArn?:string, LogGroupArn?:string}>
     */
    public function describeEmailMonitoringConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RoleArn?:string, LogGroupArn?:string}>
     */
    public function describeEmailMonitoringConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, Email:string} $args
     * @return \AWS\Result<array{EntityId?:string, Name?:string, Type?:"GROUP"|"USER"|"RESOURCE"}>
     */
    public function describeEntity(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, Email:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EntityId?:string, Name?:string, Type?:"GROUP"|"USER"|"RESOURCE"}>
     */
    public function describeEntityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, GroupId:string} $args
     * @return \AWS\Result<array{GroupId?:string, Name?:string, Email?:string, State?:"ENABLED"|"DISABLED"|"DELETED", EnabledDate?:int|string|\DateTimeInterface, DisabledDate?:int|string|\DateTimeInterface, HiddenFromGlobalAddressList?:bool}>
     */
    public function describeGroup(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, GroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GroupId?:string, Name?:string, Email?:string, State?:"ENABLED"|"DISABLED"|"DELETED", EnabledDate?:int|string|\DateTimeInterface, DisabledDate?:int|string|\DateTimeInterface, HiddenFromGlobalAddressList?:bool}>
     */
    public function describeGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string} $args
     * @return \AWS\Result<array{AuthenticationMode?:"IDENTITY_PROVIDER_ONLY"|"IDENTITY_PROVIDER_AND_DIRECTORY", IdentityCenterConfiguration?:array{InstanceArn:string, ApplicationArn:string}, PersonalAccessTokenConfiguration?:array{Status:"ACTIVE"|"INACTIVE", LifetimeInDays?:int}}>
     */
    public function describeIdentityProviderConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AuthenticationMode?:"IDENTITY_PROVIDER_ONLY"|"IDENTITY_PROVIDER_AND_DIRECTORY", IdentityCenterConfiguration?:array{InstanceArn:string, ApplicationArn:string}, PersonalAccessTokenConfiguration?:array{Status:"ACTIVE"|"INACTIVE", LifetimeInDays?:int}}>
     */
    public function describeIdentityProviderConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string} $args
     * @return \AWS\Result<array{Enforced?:bool}>
     */
    public function describeInboundDmarcSettings(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Enforced?:bool}>
     */
    public function describeInboundDmarcSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string, OrganizationId:string} $args
     * @return \AWS\Result<array{EntityId?:string, Description?:string, RoleArn?:string, KmsKeyArn?:string, S3BucketName?:string, S3Prefix?:string, S3Path?:string, EstimatedProgress?:int, State?:"RUNNING"|"COMPLETED"|"FAILED"|"CANCELLED", ErrorInfo?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}>
     */
    public function describeMailboxExportJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string, OrganizationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EntityId?:string, Description?:string, RoleArn?:string, KmsKeyArn?:string, S3BucketName?:string, S3Prefix?:string, S3Path?:string, EstimatedProgress?:int, State?:"RUNNING"|"COMPLETED"|"FAILED"|"CANCELLED", ErrorInfo?:string, StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}>
     */
    public function describeMailboxExportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string} $args
     * @return \AWS\Result<array{OrganizationId?:string, Alias?:string, State?:string, DirectoryId?:string, DirectoryType?:string, DefaultMailDomain?:string, CompletedDate?:int|string|\DateTimeInterface, ErrorMessage?:string, ARN?:string, MigrationAdmin?:string, InteroperabilityEnabled?:bool}>
     */
    public function describeOrganization(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{OrganizationId?:string, Alias?:string, State?:string, DirectoryId?:string, DirectoryType?:string, DefaultMailDomain?:string, CompletedDate?:int|string|\DateTimeInterface, ErrorMessage?:string, ARN?:string, MigrationAdmin?:string, InteroperabilityEnabled?:bool}>
     */
    public function describeOrganizationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, ResourceId:string} $args
     * @return \AWS\Result<array{ResourceId?:string, Email?:string, Name?:string, Type?:"ROOM"|"EQUIPMENT", BookingOptions?:array{AutoAcceptRequests?:bool, AutoDeclineRecurringRequests?:bool, AutoDeclineConflictingRequests?:bool}, State?:"ENABLED"|"DISABLED"|"DELETED", EnabledDate?:int|string|\DateTimeInterface, DisabledDate?:int|string|\DateTimeInterface, Description?:string, HiddenFromGlobalAddressList?:bool}>
     */
    public function describeResource(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, ResourceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceId?:string, Email?:string, Name?:string, Type?:"ROOM"|"EQUIPMENT", BookingOptions?:array{AutoAcceptRequests?:bool, AutoDeclineRecurringRequests?:bool, AutoDeclineConflictingRequests?:bool}, State?:"ENABLED"|"DISABLED"|"DELETED", EnabledDate?:int|string|\DateTimeInterface, DisabledDate?:int|string|\DateTimeInterface, Description?:string, HiddenFromGlobalAddressList?:bool}>
     */
    public function describeResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, UserId:string} $args
     * @return \AWS\Result<array{UserId?:string, Name?:string, Email?:string, DisplayName?:string, State?:"ENABLED"|"DISABLED"|"DELETED", UserRole?:"USER"|"RESOURCE"|"SYSTEM_USER"|"REMOTE_USER", EnabledDate?:int|string|\DateTimeInterface, DisabledDate?:int|string|\DateTimeInterface, MailboxProvisionedDate?:int|string|\DateTimeInterface, MailboxDeprovisionedDate?:int|string|\DateTimeInterface, FirstName?:string, LastName?:string, HiddenFromGlobalAddressList?:bool, Initials?:string, Telephone?:string, Street?:string, JobTitle?:string, City?:string, Company?:string, ZipCode?:string, Department?:string, Country?:string, Office?:string, IdentityProviderUserId?:string, IdentityProviderIdentityStoreId?:string}>
     */
    public function describeUser(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, UserId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserId?:string, Name?:string, Email?:string, DisplayName?:string, State?:"ENABLED"|"DISABLED"|"DELETED", UserRole?:"USER"|"RESOURCE"|"SYSTEM_USER"|"REMOTE_USER", EnabledDate?:int|string|\DateTimeInterface, DisabledDate?:int|string|\DateTimeInterface, MailboxProvisionedDate?:int|string|\DateTimeInterface, MailboxDeprovisionedDate?:int|string|\DateTimeInterface, FirstName?:string, LastName?:string, HiddenFromGlobalAddressList?:bool, Initials?:string, Telephone?:string, Street?:string, JobTitle?:string, City?:string, Company?:string, ZipCode?:string, Department?:string, Country?:string, Office?:string, IdentityProviderUserId?:string, IdentityProviderIdentityStoreId?:string}>
     */
    public function describeUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, ResourceId:string, EntityId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateDelegateFromResource(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, ResourceId:string, EntityId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateDelegateFromResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, GroupId:string, MemberId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateMemberFromGroup(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, GroupId:string, MemberId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateMemberFromGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, IpAddress:string, Action:string, UserId?:string, ImpersonationRoleId?:string} $args
     * @return \AWS\Result<array{Effect?:"ALLOW"|"DENY", MatchedRules?:array<string>}>
     */
    public function getAccessControlEffect(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, IpAddress:string, Action:string, UserId?:string, ImpersonationRoleId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Effect?:"ALLOW"|"DENY", MatchedRules?:array<string>}>
     */
    public function getAccessControlEffectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string} $args
     * @return \AWS\Result<array{Id?:string, Name?:string, Description?:string, FolderConfigurations?:array<array{Name:"INBOX"|"DELETED_ITEMS"|"SENT_ITEMS"|"DRAFTS"|"JUNK_EMAIL", Action:"NONE"|"DELETE"|"PERMANENTLY_DELETE", Period?:int}>}>
     */
    public function getDefaultRetentionPolicy(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Id?:string, Name?:string, Description?:string, FolderConfigurations?:array<array{Name:"INBOX"|"DELETED_ITEMS"|"SENT_ITEMS"|"DRAFTS"|"JUNK_EMAIL", Action:"NONE"|"DELETE"|"PERMANENTLY_DELETE", Period?:int}>}>
     */
    public function getDefaultRetentionPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, ImpersonationRoleId:string} $args
     * @return \AWS\Result<array{ImpersonationRoleId?:string, Name?:string, Type?:"FULL_ACCESS"|"READ_ONLY", Description?:string, Rules?:array<array{ImpersonationRuleId:string, Name?:string, Description?:string, Effect:"ALLOW"|"DENY", TargetUsers?:array<string>, NotTargetUsers?:array<string>}>, DateCreated?:int|string|\DateTimeInterface, DateModified?:int|string|\DateTimeInterface}>
     */
    public function getImpersonationRole(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, ImpersonationRoleId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ImpersonationRoleId?:string, Name?:string, Type?:"FULL_ACCESS"|"READ_ONLY", Description?:string, Rules?:array<array{ImpersonationRuleId:string, Name?:string, Description?:string, Effect:"ALLOW"|"DENY", TargetUsers?:array<string>, NotTargetUsers?:array<string>}>, DateCreated?:int|string|\DateTimeInterface, DateModified?:int|string|\DateTimeInterface}>
     */
    public function getImpersonationRoleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, ImpersonationRoleId:string, TargetUser:string} $args
     * @return \AWS\Result<array{Type?:"FULL_ACCESS"|"READ_ONLY", Effect?:"ALLOW"|"DENY", MatchedRules?:array<array{ImpersonationRuleId?:string, Name?:string}>}>
     */
    public function getImpersonationRoleEffect(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, ImpersonationRoleId:string, TargetUser:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Type?:"FULL_ACCESS"|"READ_ONLY", Effect?:"ALLOW"|"DENY", MatchedRules?:array<array{ImpersonationRuleId?:string, Name?:string}>}>
     */
    public function getImpersonationRoleEffectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, DomainName:string} $args
     * @return \AWS\Result<array{Records?:array<array{Type?:string, Hostname?:string, Value?:string}>, IsTestDomain?:bool, IsDefault?:bool, OwnershipVerificationStatus?:"PENDING"|"VERIFIED"|"FAILED", DkimVerificationStatus?:"PENDING"|"VERIFIED"|"FAILED"}>
     */
    public function getMailDomain(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, DomainName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Records?:array<array{Type?:string, Hostname?:string, Value?:string}>, IsTestDomain?:bool, IsDefault?:bool, OwnershipVerificationStatus?:"PENDING"|"VERIFIED"|"FAILED", DkimVerificationStatus?:"PENDING"|"VERIFIED"|"FAILED"}>
     */
    public function getMailDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, UserId:string} $args
     * @return \AWS\Result<array{MailboxQuota?:int, MailboxSize?:float}>
     */
    public function getMailboxDetails(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, UserId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MailboxQuota?:int, MailboxSize?:float}>
     */
    public function getMailboxDetailsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, DeviceType?:string, DeviceModel?:string, DeviceOperatingSystem?:string, DeviceUserAgent?:string} $args
     * @return \AWS\Result<array{Effect?:"ALLOW"|"DENY", MatchedRules?:array<array{MobileDeviceAccessRuleId?:string, Name?:string}>}>
     */
    public function getMobileDeviceAccessEffect(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, DeviceType?:string, DeviceModel?:string, DeviceOperatingSystem?:string, DeviceUserAgent?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Effect?:"ALLOW"|"DENY", MatchedRules?:array<array{MobileDeviceAccessRuleId?:string, Name?:string}>}>
     */
    public function getMobileDeviceAccessEffectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, UserId:string, DeviceId:string} $args
     * @return \AWS\Result<array{UserId?:string, DeviceId?:string, Effect?:"ALLOW"|"DENY", Description?:string, DateCreated?:int|string|\DateTimeInterface, DateModified?:int|string|\DateTimeInterface}>
     */
    public function getMobileDeviceAccessOverride(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, UserId:string, DeviceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserId?:string, DeviceId?:string, Effect?:"ALLOW"|"DENY", Description?:string, DateCreated?:int|string|\DateTimeInterface, DateModified?:int|string|\DateTimeInterface}>
     */
    public function getMobileDeviceAccessOverrideAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, PersonalAccessTokenId:string} $args
     * @return \AWS\Result<array{PersonalAccessTokenId?:string, UserId?:string, Name?:string, DateCreated?:int|string|\DateTimeInterface, DateLastUsed?:int|string|\DateTimeInterface, ExpiresTime?:int|string|\DateTimeInterface, Scopes?:array<string>}>
     */
    public function getPersonalAccessTokenMetadata(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, PersonalAccessTokenId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PersonalAccessTokenId?:string, UserId?:string, Name?:string, DateCreated?:int|string|\DateTimeInterface, DateLastUsed?:int|string|\DateTimeInterface, ExpiresTime?:int|string|\DateTimeInterface, Scopes?:array<string>}>
     */
    public function getPersonalAccessTokenMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string} $args
     * @return \AWS\Result<array{Rules?:array<array{Name?:string, Effect?:"ALLOW"|"DENY", Description?:string, IpRanges?:array<string>, NotIpRanges?:array<string>, Actions?:array<string>, NotActions?:array<string>, UserIds?:array<string>, NotUserIds?:array<string>, DateCreated?:int|string|\DateTimeInterface, DateModified?:int|string|\DateTimeInterface, ImpersonationRoleIds?:array<string>, NotImpersonationRoleIds?:array<string>}>}>
     */
    public function listAccessControlRules(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Rules?:array<array{Name?:string, Effect?:"ALLOW"|"DENY", Description?:string, IpRanges?:array<string>, NotIpRanges?:array<string>, Actions?:array<string>, NotActions?:array<string>, UserIds?:array<string>, NotUserIds?:array<string>, DateCreated?:int|string|\DateTimeInterface, DateModified?:int|string|\DateTimeInterface, ImpersonationRoleIds?:array<string>, NotImpersonationRoleIds?:array<string>}>}>
     */
    public function listAccessControlRulesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, EntityId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Aliases?:array<string>, NextToken?:string}>
     */
    public function listAliases(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, EntityId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Aliases?:array<string>, NextToken?:string}>
     */
    public function listAliasesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{AvailabilityConfigurations?:array<array{DomainName?:string, ProviderType?:"EWS"|"LAMBDA", EwsProvider?:array{EwsEndpoint?:string, EwsUsername?:string}, LambdaProvider?:array{LambdaArn:string}, DateCreated?:int|string|\DateTimeInterface, DateModified?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listAvailabilityConfigurations(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AvailabilityConfigurations?:array<array{DomainName?:string, ProviderType?:"EWS"|"LAMBDA", EwsProvider?:array{EwsEndpoint?:string, EwsUsername?:string}, LambdaProvider?:array{LambdaArn:string}, DateCreated?:int|string|\DateTimeInterface, DateModified?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listAvailabilityConfigurationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, GroupId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Members?:array<array{Id?:string, Name?:string, Type?:"GROUP"|"USER", State?:"ENABLED"|"DISABLED"|"DELETED", EnabledDate?:int|string|\DateTimeInterface, DisabledDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listGroupMembers(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, GroupId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Members?:array<array{Id?:string, Name?:string, Type?:"GROUP"|"USER", State?:"ENABLED"|"DISABLED"|"DELETED", EnabledDate?:int|string|\DateTimeInterface, DisabledDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listGroupMembersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, NextToken?:string, MaxResults?:int, Filters?:array{NamePrefix?:string, PrimaryEmailPrefix?:string, State?:"ENABLED"|"DISABLED"|"DELETED"}} $args
     * @return \AWS\Result<array{Groups?:array<array{Id?:string, Email?:string, Name?:string, State?:"ENABLED"|"DISABLED"|"DELETED", EnabledDate?:int|string|\DateTimeInterface, DisabledDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listGroups(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, NextToken?:string, MaxResults?:int, Filters?:array{NamePrefix?:string, PrimaryEmailPrefix?:string, State?:"ENABLED"|"DISABLED"|"DELETED"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Groups?:array<array{Id?:string, Email?:string, Name?:string, State?:"ENABLED"|"DISABLED"|"DELETED", EnabledDate?:int|string|\DateTimeInterface, DisabledDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, EntityId:string, Filters?:array{GroupNamePrefix?:string}, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Groups?:array<array{GroupId?:string, GroupName?:string}>, NextToken?:string}>
     */
    public function listGroupsForEntity(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, EntityId:string, Filters?:array{GroupNamePrefix?:string}, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Groups?:array<array{GroupId?:string, GroupName?:string}>, NextToken?:string}>
     */
    public function listGroupsForEntityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Roles?:array<array{ImpersonationRoleId?:string, Name?:string, Type?:"FULL_ACCESS"|"READ_ONLY", DateCreated?:int|string|\DateTimeInterface, DateModified?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listImpersonationRoles(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Roles?:array<array{ImpersonationRoleId?:string, Name?:string, Type?:"FULL_ACCESS"|"READ_ONLY", DateCreated?:int|string|\DateTimeInterface, DateModified?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listImpersonationRolesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{MailDomains?:array<array{DomainName?:string, DefaultDomain?:bool}>, NextToken?:string}>
     */
    public function listMailDomains(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MailDomains?:array<array{DomainName?:string, DefaultDomain?:bool}>, NextToken?:string}>
     */
    public function listMailDomainsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Jobs?:array<array{JobId?:string, EntityId?:string, Description?:string, S3BucketName?:string, S3Path?:string, EstimatedProgress?:int, State?:"RUNNING"|"COMPLETED"|"FAILED"|"CANCELLED", StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listMailboxExportJobs(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Jobs?:array<array{JobId?:string, EntityId?:string, Description?:string, S3BucketName?:string, S3Path?:string, EstimatedProgress?:int, State?:"RUNNING"|"COMPLETED"|"FAILED"|"CANCELLED", StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listMailboxExportJobsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, EntityId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Permissions?:array<array{GranteeId:string, GranteeType:"GROUP"|"USER", PermissionValues:array<"FULL_ACCESS"|"SEND_AS"|"SEND_ON_BEHALF">}>, NextToken?:string}>
     */
    public function listMailboxPermissions(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, EntityId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Permissions?:array<array{GranteeId:string, GranteeType:"GROUP"|"USER", PermissionValues:array<"FULL_ACCESS"|"SEND_AS"|"SEND_ON_BEHALF">}>, NextToken?:string}>
     */
    public function listMailboxPermissionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, UserId?:string, DeviceId?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Overrides?:array<array{UserId?:string, DeviceId?:string, Effect?:"ALLOW"|"DENY", Description?:string, DateCreated?:int|string|\DateTimeInterface, DateModified?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listMobileDeviceAccessOverrides(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, UserId?:string, DeviceId?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Overrides?:array<array{UserId?:string, DeviceId?:string, Effect?:"ALLOW"|"DENY", Description?:string, DateCreated?:int|string|\DateTimeInterface, DateModified?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listMobileDeviceAccessOverridesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string} $args
     * @return \AWS\Result<array{Rules?:array<array{MobileDeviceAccessRuleId?:string, Name?:string, Description?:string, Effect?:"ALLOW"|"DENY", DeviceTypes?:array<string>, NotDeviceTypes?:array<string>, DeviceModels?:array<string>, NotDeviceModels?:array<string>, DeviceOperatingSystems?:array<string>, NotDeviceOperatingSystems?:array<string>, DeviceUserAgents?:array<string>, NotDeviceUserAgents?:array<string>, DateCreated?:int|string|\DateTimeInterface, DateModified?:int|string|\DateTimeInterface}>}>
     */
    public function listMobileDeviceAccessRules(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Rules?:array<array{MobileDeviceAccessRuleId?:string, Name?:string, Description?:string, Effect?:"ALLOW"|"DENY", DeviceTypes?:array<string>, NotDeviceTypes?:array<string>, DeviceModels?:array<string>, NotDeviceModels?:array<string>, DeviceOperatingSystems?:array<string>, NotDeviceOperatingSystems?:array<string>, DeviceUserAgents?:array<string>, NotDeviceUserAgents?:array<string>, DateCreated?:int|string|\DateTimeInterface, DateModified?:int|string|\DateTimeInterface}>}>
     */
    public function listMobileDeviceAccessRulesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{OrganizationSummaries?:array<array{OrganizationId?:string, Alias?:string, DefaultMailDomain?:string, ErrorMessage?:string, State?:string}>, NextToken?:string}>
     */
    public function listOrganizations(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{OrganizationSummaries?:array<array{OrganizationId?:string, Alias?:string, DefaultMailDomain?:string, ErrorMessage?:string, State?:string}>, NextToken?:string}>
     */
    public function listOrganizationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, UserId?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, PersonalAccessTokenSummaries?:array<array{PersonalAccessTokenId?:string, UserId?:string, Name?:string, DateCreated?:int|string|\DateTimeInterface, DateLastUsed?:int|string|\DateTimeInterface, ExpiresTime?:int|string|\DateTimeInterface, Scopes?:array<string>}>}>
     */
    public function listPersonalAccessTokens(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, UserId?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, PersonalAccessTokenSummaries?:array<array{PersonalAccessTokenId?:string, UserId?:string, Name?:string, DateCreated?:int|string|\DateTimeInterface, DateLastUsed?:int|string|\DateTimeInterface, ExpiresTime?:int|string|\DateTimeInterface, Scopes?:array<string>}>}>
     */
    public function listPersonalAccessTokensAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, ResourceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Delegates?:array<array{Id:string, Type:"GROUP"|"USER"}>, NextToken?:string}>
     */
    public function listResourceDelegates(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, ResourceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Delegates?:array<array{Id:string, Type:"GROUP"|"USER"}>, NextToken?:string}>
     */
    public function listResourceDelegatesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, NextToken?:string, MaxResults?:int, Filters?:array{NamePrefix?:string, PrimaryEmailPrefix?:string, State?:"ENABLED"|"DISABLED"|"DELETED"}} $args
     * @return \AWS\Result<array{Resources?:array<array{Id?:string, Email?:string, Name?:string, Type?:"ROOM"|"EQUIPMENT", State?:"ENABLED"|"DISABLED"|"DELETED", EnabledDate?:int|string|\DateTimeInterface, DisabledDate?:int|string|\DateTimeInterface, Description?:string}>, NextToken?:string}>
     */
    public function listResources(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, NextToken?:string, MaxResults?:int, Filters?:array{NamePrefix?:string, PrimaryEmailPrefix?:string, State?:"ENABLED"|"DISABLED"|"DELETED"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Resources?:array<array{Id?:string, Email?:string, Name?:string, Type?:"ROOM"|"EQUIPMENT", State?:"ENABLED"|"DISABLED"|"DELETED", EnabledDate?:int|string|\DateTimeInterface, DisabledDate?:int|string|\DateTimeInterface, Description?:string}>, NextToken?:string}>
     */
    public function listResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{OrganizationId:string, NextToken?:string, MaxResults?:int, Filters?:array{UsernamePrefix?:string, DisplayNamePrefix?:string, PrimaryEmailPrefix?:string, State?:"ENABLED"|"DISABLED"|"DELETED", IdentityProviderUserIdPrefix?:string}} $args
     * @return \AWS\Result<array{Users?:array<array{Id?:string, Email?:string, Name?:string, DisplayName?:string, State?:"ENABLED"|"DISABLED"|"DELETED", UserRole?:"USER"|"RESOURCE"|"SYSTEM_USER"|"REMOTE_USER", EnabledDate?:int|string|\DateTimeInterface, DisabledDate?:int|string|\DateTimeInterface, IdentityProviderUserId?:string, IdentityProviderIdentityStoreId?:string}>, NextToken?:string}>
     */
    public function listUsers(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, NextToken?:string, MaxResults?:int, Filters?:array{UsernamePrefix?:string, DisplayNamePrefix?:string, PrimaryEmailPrefix?:string, State?:"ENABLED"|"DISABLED"|"DELETED", IdentityProviderUserIdPrefix?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Users?:array<array{Id?:string, Email?:string, Name?:string, DisplayName?:string, State?:"ENABLED"|"DISABLED"|"DELETED", UserRole?:"USER"|"RESOURCE"|"SYSTEM_USER"|"REMOTE_USER", EnabledDate?:int|string|\DateTimeInterface, DisabledDate?:int|string|\DateTimeInterface, IdentityProviderUserId?:string, IdentityProviderIdentityStoreId?:string}>, NextToken?:string}>
     */
    public function listUsersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Effect:"ALLOW"|"DENY", Description:string, IpRanges?:array<string>, NotIpRanges?:array<string>, Actions?:array<string>, NotActions?:array<string>, UserIds?:array<string>, NotUserIds?:array<string>, OrganizationId:string, ImpersonationRoleIds?:array<string>, NotImpersonationRoleIds?:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function putAccessControlRule(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Effect:"ALLOW"|"DENY", Description:string, IpRanges?:array<string>, NotIpRanges?:array<string>, Actions?:array<string>, NotActions?:array<string>, UserIds?:array<string>, NotUserIds?:array<string>, OrganizationId:string, ImpersonationRoleIds?:array<string>, NotImpersonationRoleIds?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putAccessControlRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, RoleArn:string, LogGroupArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function putEmailMonitoringConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, RoleArn:string, LogGroupArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putEmailMonitoringConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, AuthenticationMode:"IDENTITY_PROVIDER_ONLY"|"IDENTITY_PROVIDER_AND_DIRECTORY", IdentityCenterConfiguration:array{InstanceArn:string, ApplicationArn:string}, PersonalAccessTokenConfiguration:array{Status:"ACTIVE"|"INACTIVE", LifetimeInDays?:int}} $args
     * @return \AWS\Result<array{}>
     */
    public function putIdentityProviderConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, AuthenticationMode:"IDENTITY_PROVIDER_ONLY"|"IDENTITY_PROVIDER_AND_DIRECTORY", IdentityCenterConfiguration:array{InstanceArn:string, ApplicationArn:string}, PersonalAccessTokenConfiguration:array{Status:"ACTIVE"|"INACTIVE", LifetimeInDays?:int}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putIdentityProviderConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, Enforced:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function putInboundDmarcSettings(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, Enforced:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putInboundDmarcSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, EntityId:string, GranteeId:string, PermissionValues:array<"FULL_ACCESS"|"SEND_AS"|"SEND_ON_BEHALF">} $args
     * @return \AWS\Result<array{}>
     */
    public function putMailboxPermissions(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, EntityId:string, GranteeId:string, PermissionValues:array<"FULL_ACCESS"|"SEND_AS"|"SEND_ON_BEHALF">} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putMailboxPermissionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, UserId:string, DeviceId:string, Effect:"ALLOW"|"DENY", Description?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function putMobileDeviceAccessOverride(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, UserId:string, DeviceId:string, Effect:"ALLOW"|"DENY", Description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putMobileDeviceAccessOverrideAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, Id?:string, Name:string, Description?:string, FolderConfigurations:array<array{Name:"INBOX"|"DELETED_ITEMS"|"SENT_ITEMS"|"DRAFTS"|"JUNK_EMAIL", Action:"NONE"|"DELETE"|"PERMANENTLY_DELETE", Period?:int}>} $args
     * @return \AWS\Result<array{}>
     */
    public function putRetentionPolicy(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, Id?:string, Name:string, Description?:string, FolderConfigurations:array<array{Name:"INBOX"|"DELETED_ITEMS"|"SENT_ITEMS"|"DRAFTS"|"JUNK_EMAIL", Action:"NONE"|"DELETE"|"PERMANENTLY_DELETE", Period?:int}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putRetentionPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, OrganizationId:string, DomainName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function registerMailDomain(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, OrganizationId:string, DomainName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function registerMailDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, EntityId:string, Email:string} $args
     * @return \AWS\Result<array{}>
     */
    public function registerToWorkMail(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, EntityId:string, Email:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function registerToWorkMailAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, UserId:string, Password:string} $args
     * @return \AWS\Result<array{}>
     */
    public function resetPassword(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, UserId:string, Password:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function resetPasswordAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken:string, OrganizationId:string, EntityId:string, Description?:string, RoleArn:string, KmsKeyArn:string, S3BucketName:string, S3Prefix:string} $args
     * @return \AWS\Result<array{JobId?:string}>
     */
    public function startMailboxExportJob(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken:string, OrganizationId:string, EntityId:string, Description?:string, RoleArn:string, KmsKeyArn:string, S3BucketName:string, S3Prefix:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string}>
     */
    public function startMailboxExportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{OrganizationId:string, DomainName?:string, EwsProvider?:array{EwsEndpoint:string, EwsUsername:string, EwsPassword:string}, LambdaProvider?:array{LambdaArn:string}} $args
     * @return \AWS\Result<array{TestPassed?:bool, FailureReason?:string}>
     */
    public function testAvailabilityConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, DomainName?:string, EwsProvider?:array{EwsEndpoint:string, EwsUsername:string, EwsPassword:string}, LambdaProvider?:array{LambdaArn:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{TestPassed?:bool, FailureReason?:string}>
     */
    public function testAvailabilityConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{OrganizationId:string, DomainName:string, EwsProvider?:array{EwsEndpoint:string, EwsUsername:string, EwsPassword:string}, LambdaProvider?:array{LambdaArn:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateAvailabilityConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, DomainName:string, EwsProvider?:array{EwsEndpoint:string, EwsUsername:string, EwsPassword:string}, LambdaProvider?:array{LambdaArn:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateAvailabilityConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, DomainName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateDefaultMailDomain(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, DomainName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateDefaultMailDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, GroupId:string, HiddenFromGlobalAddressList?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function updateGroup(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, GroupId:string, HiddenFromGlobalAddressList?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, ImpersonationRoleId:string, Name:string, Type:"FULL_ACCESS"|"READ_ONLY", Description?:string, Rules:array<array{ImpersonationRuleId:string, Name?:string, Description?:string, Effect:"ALLOW"|"DENY", TargetUsers?:array<string>, NotTargetUsers?:array<string>}>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateImpersonationRole(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, ImpersonationRoleId:string, Name:string, Type:"FULL_ACCESS"|"READ_ONLY", Description?:string, Rules:array<array{ImpersonationRuleId:string, Name?:string, Description?:string, Effect:"ALLOW"|"DENY", TargetUsers?:array<string>, NotTargetUsers?:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateImpersonationRoleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, UserId:string, MailboxQuota:int} $args
     * @return \AWS\Result<array{}>
     */
    public function updateMailboxQuota(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, UserId:string, MailboxQuota:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateMailboxQuotaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, MobileDeviceAccessRuleId:string, Name:string, Description?:string, Effect:"ALLOW"|"DENY", DeviceTypes?:array<string>, NotDeviceTypes?:array<string>, DeviceModels?:array<string>, NotDeviceModels?:array<string>, DeviceOperatingSystems?:array<string>, NotDeviceOperatingSystems?:array<string>, DeviceUserAgents?:array<string>, NotDeviceUserAgents?:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateMobileDeviceAccessRule(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, MobileDeviceAccessRuleId:string, Name:string, Description?:string, Effect:"ALLOW"|"DENY", DeviceTypes?:array<string>, NotDeviceTypes?:array<string>, DeviceModels?:array<string>, NotDeviceModels?:array<string>, DeviceOperatingSystems?:array<string>, NotDeviceOperatingSystems?:array<string>, DeviceUserAgents?:array<string>, NotDeviceUserAgents?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateMobileDeviceAccessRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, EntityId:string, Email:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updatePrimaryEmailAddress(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, EntityId:string, Email:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updatePrimaryEmailAddressAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, ResourceId:string, Name?:string, BookingOptions?:array{AutoAcceptRequests?:bool, AutoDeclineRecurringRequests?:bool, AutoDeclineConflictingRequests?:bool}, Description?:string, Type?:"ROOM"|"EQUIPMENT", HiddenFromGlobalAddressList?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function updateResource(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, ResourceId:string, Name?:string, BookingOptions?:array{AutoAcceptRequests?:bool, AutoDeclineRecurringRequests?:bool, AutoDeclineConflictingRequests?:bool}, Description?:string, Type?:"ROOM"|"EQUIPMENT", HiddenFromGlobalAddressList?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationId:string, UserId:string, Role?:"USER"|"RESOURCE"|"SYSTEM_USER"|"REMOTE_USER", DisplayName?:string, FirstName?:string, LastName?:string, HiddenFromGlobalAddressList?:bool, Initials?:string, Telephone?:string, Street?:string, JobTitle?:string, City?:string, Company?:string, ZipCode?:string, Department?:string, Country?:string, Office?:string, IdentityProviderUserId?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateUser(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationId:string, UserId:string, Role?:"USER"|"RESOURCE"|"SYSTEM_USER"|"REMOTE_USER", DisplayName?:string, FirstName?:string, LastName?:string, HiddenFromGlobalAddressList?:bool, Initials?:string, Telephone?:string, Street?:string, JobTitle?:string, City?:string, Company?:string, ZipCode?:string, Department?:string, Country?:string, Office?:string, IdentityProviderUserId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateUserAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
