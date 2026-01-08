<?php
namespace AWS\Iam;

class IamClient
{
    /**
     * @param array{OpenIDConnectProviderArn:string, ClientID:string} $args
     * @return \AWS\Result<void>
     */
    public function addClientIDToOpenIDConnectProvider(array $args): \AWS\Result { }

    /**
     * @param array{OpenIDConnectProviderArn:string, ClientID:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function addClientIDToOpenIDConnectProviderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceProfileName:string, RoleName:string} $args
     * @return \AWS\Result<void>
     */
    public function addRoleToInstanceProfile(array $args): \AWS\Result { }

    /**
     * @param array{InstanceProfileName:string, RoleName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function addRoleToInstanceProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupName:string, UserName:string} $args
     * @return \AWS\Result<void>
     */
    public function addUserToGroup(array $args): \AWS\Result { }

    /**
     * @param array{GroupName:string, UserName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function addUserToGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupName:string, PolicyArn:string} $args
     * @return \AWS\Result<void>
     */
    public function attachGroupPolicy(array $args): \AWS\Result { }

    /**
     * @param array{GroupName:string, PolicyArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function attachGroupPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RoleName:string, PolicyArn:string} $args
     * @return \AWS\Result<void>
     */
    public function attachRolePolicy(array $args): \AWS\Result { }

    /**
     * @param array{RoleName:string, PolicyArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function attachRolePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName:string, PolicyArn:string} $args
     * @return \AWS\Result<void>
     */
    public function attachUserPolicy(array $args): \AWS\Result { }

    /**
     * @param array{UserName:string, PolicyArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function attachUserPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OldPassword:string, NewPassword:string} $args
     * @return \AWS\Result<void>
     */
    public function changePassword(array $args): \AWS\Result { }

    /**
     * @param array{OldPassword:string, NewPassword:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function changePasswordAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName?:string} $args
     * @return \AWS\Result<array{AccessKey:array{UserName:string, AccessKeyId:string, Status:"Active"|"Inactive", SecretAccessKey:string, CreateDate?:int|string|\DateTimeInterface}}>
     */
    public function createAccessKey(array $args = []): \AWS\Result { }

    /**
     * @param array{UserName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccessKey:array{UserName:string, AccessKeyId:string, Status:"Active"|"Inactive", SecretAccessKey:string, CreateDate?:int|string|\DateTimeInterface}}>
     */
    public function createAccessKeyAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountAlias:string} $args
     * @return \AWS\Result<void>
     */
    public function createAccountAlias(array $args): \AWS\Result { }

    /**
     * @param array{AccountAlias:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function createAccountAliasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Path?:string, GroupName:string} $args
     * @return \AWS\Result<array{Group:array{Path:string, GroupName:string, GroupId:string, Arn:string, CreateDate:int|string|\DateTimeInterface}}>
     */
    public function createGroup(array $args): \AWS\Result { }

    /**
     * @param array{Path?:string, GroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Group:array{Path:string, GroupName:string, GroupId:string, Arn:string, CreateDate:int|string|\DateTimeInterface}}>
     */
    public function createGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceProfileName:string, Path?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{InstanceProfile:array{Path:string, InstanceProfileName:string, InstanceProfileId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, Roles:array<array{Path:string, RoleName:string, RoleId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, AssumeRolePolicyDocument?:string, Description?:string, MaxSessionDuration?:int, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>, RoleLastUsed?:array{LastUsedDate?:int|string|\DateTimeInterface, Region?:string}}>, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function createInstanceProfile(array $args): \AWS\Result { }

    /**
     * @param array{InstanceProfileName:string, Path?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{InstanceProfile:array{Path:string, InstanceProfileName:string, InstanceProfileId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, Roles:array<array{Path:string, RoleName:string, RoleId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, AssumeRolePolicyDocument?:string, Description?:string, MaxSessionDuration?:int, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>, RoleLastUsed?:array{LastUsedDate?:int|string|\DateTimeInterface, Region?:string}}>, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function createInstanceProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName?:string, Password?:string, PasswordResetRequired?:bool} $args
     * @return \AWS\Result<array{LoginProfile:array{UserName:string, CreateDate:int|string|\DateTimeInterface, PasswordResetRequired?:bool}}>
     */
    public function createLoginProfile(array $args = []): \AWS\Result { }

    /**
     * @param array{UserName?:string, Password?:string, PasswordResetRequired?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{LoginProfile:array{UserName:string, CreateDate:int|string|\DateTimeInterface, PasswordResetRequired?:bool}}>
     */
    public function createLoginProfileAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Url:string, ClientIDList?:array<string>, ThumbprintList?:array<string>, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{OpenIDConnectProviderArn?:string, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function createOpenIDConnectProvider(array $args): \AWS\Result { }

    /**
     * @param array{Url:string, ClientIDList?:array<string>, ThumbprintList?:array<string>, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{OpenIDConnectProviderArn?:string, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function createOpenIDConnectProviderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PolicyName:string, Path?:string, PolicyDocument:string, Description?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{Policy?:array{PolicyName?:string, PolicyId?:string, Arn?:string, Path?:string, DefaultVersionId?:string, AttachmentCount?:int, PermissionsBoundaryUsageCount?:int, IsAttachable?:bool, Description?:string, CreateDate?:int|string|\DateTimeInterface, UpdateDate?:int|string|\DateTimeInterface, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function createPolicy(array $args): \AWS\Result { }

    /**
     * @param array{PolicyName:string, Path?:string, PolicyDocument:string, Description?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:array{PolicyName?:string, PolicyId?:string, Arn?:string, Path?:string, DefaultVersionId?:string, AttachmentCount?:int, PermissionsBoundaryUsageCount?:int, IsAttachable?:bool, Description?:string, CreateDate?:int|string|\DateTimeInterface, UpdateDate?:int|string|\DateTimeInterface, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function createPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PolicyArn:string, PolicyDocument:string, SetAsDefault?:bool} $args
     * @return \AWS\Result<array{PolicyVersion?:array{Document?:string, VersionId?:string, IsDefaultVersion?:bool, CreateDate?:int|string|\DateTimeInterface}}>
     */
    public function createPolicyVersion(array $args): \AWS\Result { }

    /**
     * @param array{PolicyArn:string, PolicyDocument:string, SetAsDefault?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{PolicyVersion?:array{Document?:string, VersionId?:string, IsDefaultVersion?:bool, CreateDate?:int|string|\DateTimeInterface}}>
     */
    public function createPolicyVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Path?:string, RoleName:string, AssumeRolePolicyDocument:string, Description?:string, MaxSessionDuration?:int, PermissionsBoundary?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{Role:array{Path:string, RoleName:string, RoleId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, AssumeRolePolicyDocument?:string, Description?:string, MaxSessionDuration?:int, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>, RoleLastUsed?:array{LastUsedDate?:int|string|\DateTimeInterface, Region?:string}}}>
     */
    public function createRole(array $args): \AWS\Result { }

    /**
     * @param array{Path?:string, RoleName:string, AssumeRolePolicyDocument:string, Description?:string, MaxSessionDuration?:int, PermissionsBoundary?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Role:array{Path:string, RoleName:string, RoleId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, AssumeRolePolicyDocument?:string, Description?:string, MaxSessionDuration?:int, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>, RoleLastUsed?:array{LastUsedDate?:int|string|\DateTimeInterface, Region?:string}}}>
     */
    public function createRoleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SAMLMetadataDocument:string, Name:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{SAMLProviderArn?:string, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function createSAMLProvider(array $args): \AWS\Result { }

    /**
     * @param array{SAMLMetadataDocument:string, Name:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{SAMLProviderArn?:string, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function createSAMLProviderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AWSServiceName:string, Description?:string, CustomSuffix?:string} $args
     * @return \AWS\Result<array{Role?:array{Path:string, RoleName:string, RoleId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, AssumeRolePolicyDocument?:string, Description?:string, MaxSessionDuration?:int, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>, RoleLastUsed?:array{LastUsedDate?:int|string|\DateTimeInterface, Region?:string}}}>
     */
    public function createServiceLinkedRole(array $args): \AWS\Result { }

    /**
     * @param array{AWSServiceName:string, Description?:string, CustomSuffix?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Role?:array{Path:string, RoleName:string, RoleId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, AssumeRolePolicyDocument?:string, Description?:string, MaxSessionDuration?:int, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>, RoleLastUsed?:array{LastUsedDate?:int|string|\DateTimeInterface, Region?:string}}}>
     */
    public function createServiceLinkedRoleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName:string, ServiceName:string} $args
     * @return \AWS\Result<array{ServiceSpecificCredential?:array{CreateDate:int|string|\DateTimeInterface, ServiceName:string, ServiceUserName:string, ServicePassword:string, ServiceSpecificCredentialId:string, UserName:string, Status:"Active"|"Inactive"}}>
     */
    public function createServiceSpecificCredential(array $args): \AWS\Result { }

    /**
     * @param array{UserName:string, ServiceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServiceSpecificCredential?:array{CreateDate:int|string|\DateTimeInterface, ServiceName:string, ServiceUserName:string, ServicePassword:string, ServiceSpecificCredentialId:string, UserName:string, Status:"Active"|"Inactive"}}>
     */
    public function createServiceSpecificCredentialAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Path?:string, UserName:string, PermissionsBoundary?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{User?:array{Path:string, UserName:string, UserId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, PasswordLastUsed?:int|string|\DateTimeInterface, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function createUser(array $args): \AWS\Result { }

    /**
     * @param array{Path?:string, UserName:string, PermissionsBoundary?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{User?:array{Path:string, UserName:string, UserId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, PasswordLastUsed?:int|string|\DateTimeInterface, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function createUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Path?:string, VirtualMFADeviceName:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{VirtualMFADevice:array{SerialNumber:string, Base32StringSeed?:string|resource|\Psr\Http\Message\StreamInterface, QRCodePNG?:string|resource|\Psr\Http\Message\StreamInterface, User?:array{Path:string, UserName:string, UserId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, PasswordLastUsed?:int|string|\DateTimeInterface, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>}, EnableDate?:int|string|\DateTimeInterface, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function createVirtualMFADevice(array $args): \AWS\Result { }

    /**
     * @param array{Path?:string, VirtualMFADeviceName:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{VirtualMFADevice:array{SerialNumber:string, Base32StringSeed?:string|resource|\Psr\Http\Message\StreamInterface, QRCodePNG?:string|resource|\Psr\Http\Message\StreamInterface, User?:array{Path:string, UserName:string, UserId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, PasswordLastUsed?:int|string|\DateTimeInterface, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>}, EnableDate?:int|string|\DateTimeInterface, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function createVirtualMFADeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName?:string, SerialNumber:string} $args
     * @return \AWS\Result<void>
     */
    public function deactivateMFADevice(array $args): \AWS\Result { }

    /**
     * @param array{UserName?:string, SerialNumber:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deactivateMFADeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName?:string, AccessKeyId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAccessKey(array $args): \AWS\Result { }

    /**
     * @param array{UserName?:string, AccessKeyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAccessKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountAlias:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAccountAlias(array $args): \AWS\Result { }

    /**
     * @param array{AccountAlias:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAccountAliasAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<void>
     */
    public function deleteAccountPasswordPolicy(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAccountPasswordPolicyAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteGroup(array $args): \AWS\Result { }

    /**
     * @param array{GroupName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupName:string, PolicyName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteGroupPolicy(array $args): \AWS\Result { }

    /**
     * @param array{GroupName:string, PolicyName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteGroupPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceProfileName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteInstanceProfile(array $args): \AWS\Result { }

    /**
     * @param array{InstanceProfileName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteInstanceProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteLoginProfile(array $args = []): \AWS\Result { }

    /**
     * @param array{UserName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteLoginProfileAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OpenIDConnectProviderArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteOpenIDConnectProvider(array $args): \AWS\Result { }

    /**
     * @param array{OpenIDConnectProviderArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteOpenIDConnectProviderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PolicyArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deletePolicy(array $args): \AWS\Result { }

    /**
     * @param array{PolicyArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deletePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PolicyArn:string, VersionId:string} $args
     * @return \AWS\Result<void>
     */
    public function deletePolicyVersion(array $args): \AWS\Result { }

    /**
     * @param array{PolicyArn:string, VersionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deletePolicyVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RoleName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteRole(array $args): \AWS\Result { }

    /**
     * @param array{RoleName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteRoleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RoleName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteRolePermissionsBoundary(array $args): \AWS\Result { }

    /**
     * @param array{RoleName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteRolePermissionsBoundaryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RoleName:string, PolicyName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteRolePolicy(array $args): \AWS\Result { }

    /**
     * @param array{RoleName:string, PolicyName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteRolePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SAMLProviderArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteSAMLProvider(array $args): \AWS\Result { }

    /**
     * @param array{SAMLProviderArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteSAMLProviderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName:string, SSHPublicKeyId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteSSHPublicKey(array $args): \AWS\Result { }

    /**
     * @param array{UserName:string, SSHPublicKeyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteSSHPublicKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServerCertificateName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteServerCertificate(array $args): \AWS\Result { }

    /**
     * @param array{ServerCertificateName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteServerCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RoleName:string} $args
     * @return \AWS\Result<array{DeletionTaskId:string}>
     */
    public function deleteServiceLinkedRole(array $args): \AWS\Result { }

    /**
     * @param array{RoleName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DeletionTaskId:string}>
     */
    public function deleteServiceLinkedRoleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName?:string, ServiceSpecificCredentialId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteServiceSpecificCredential(array $args): \AWS\Result { }

    /**
     * @param array{UserName?:string, ServiceSpecificCredentialId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteServiceSpecificCredentialAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName?:string, CertificateId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteSigningCertificate(array $args): \AWS\Result { }

    /**
     * @param array{UserName?:string, CertificateId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteSigningCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteUser(array $args): \AWS\Result { }

    /**
     * @param array{UserName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteUserPermissionsBoundary(array $args): \AWS\Result { }

    /**
     * @param array{UserName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteUserPermissionsBoundaryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName:string, PolicyName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteUserPolicy(array $args): \AWS\Result { }

    /**
     * @param array{UserName:string, PolicyName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteUserPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SerialNumber:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteVirtualMFADevice(array $args): \AWS\Result { }

    /**
     * @param array{SerialNumber:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteVirtualMFADeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupName:string, PolicyArn:string} $args
     * @return \AWS\Result<void>
     */
    public function detachGroupPolicy(array $args): \AWS\Result { }

    /**
     * @param array{GroupName:string, PolicyArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function detachGroupPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RoleName:string, PolicyArn:string} $args
     * @return \AWS\Result<void>
     */
    public function detachRolePolicy(array $args): \AWS\Result { }

    /**
     * @param array{RoleName:string, PolicyArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function detachRolePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName:string, PolicyArn:string} $args
     * @return \AWS\Result<void>
     */
    public function detachUserPolicy(array $args): \AWS\Result { }

    /**
     * @param array{UserName:string, PolicyArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function detachUserPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{OrganizationId?:string, EnabledFeatures?:array<"RootCredentialsManagement"|"RootSessions">}>
     */
    public function disableOrganizationsRootCredentialsManagement(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{OrganizationId?:string, EnabledFeatures?:array<"RootCredentialsManagement"|"RootSessions">}>
     */
    public function disableOrganizationsRootCredentialsManagementAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{OrganizationId?:string, EnabledFeatures?:array<"RootCredentialsManagement"|"RootSessions">}>
     */
    public function disableOrganizationsRootSessions(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{OrganizationId?:string, EnabledFeatures?:array<"RootCredentialsManagement"|"RootSessions">}>
     */
    public function disableOrganizationsRootSessionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName:string, SerialNumber:string, AuthenticationCode1:string, AuthenticationCode2:string} $args
     * @return \AWS\Result<void>
     */
    public function enableMFADevice(array $args): \AWS\Result { }

    /**
     * @param array{UserName:string, SerialNumber:string, AuthenticationCode1:string, AuthenticationCode2:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function enableMFADeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{OrganizationId?:string, EnabledFeatures?:array<"RootCredentialsManagement"|"RootSessions">}>
     */
    public function enableOrganizationsRootCredentialsManagement(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{OrganizationId?:string, EnabledFeatures?:array<"RootCredentialsManagement"|"RootSessions">}>
     */
    public function enableOrganizationsRootCredentialsManagementAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{OrganizationId?:string, EnabledFeatures?:array<"RootCredentialsManagement"|"RootSessions">}>
     */
    public function enableOrganizationsRootSessions(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{OrganizationId?:string, EnabledFeatures?:array<"RootCredentialsManagement"|"RootSessions">}>
     */
    public function enableOrganizationsRootSessionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{State?:"STARTED"|"INPROGRESS"|"COMPLETE", Description?:string}>
     */
    public function generateCredentialReport(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{State?:"STARTED"|"INPROGRESS"|"COMPLETE", Description?:string}>
     */
    public function generateCredentialReportAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EntityPath:string, OrganizationsPolicyId?:string} $args
     * @return \AWS\Result<array{JobId?:string}>
     */
    public function generateOrganizationsAccessReport(array $args): \AWS\Result { }

    /**
     * @param array{EntityPath:string, OrganizationsPolicyId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string}>
     */
    public function generateOrganizationsAccessReportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string, Granularity?:"SERVICE_LEVEL"|"ACTION_LEVEL"} $args
     * @return \AWS\Result<array{JobId?:string}>
     */
    public function generateServiceLastAccessedDetails(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, Granularity?:"SERVICE_LEVEL"|"ACTION_LEVEL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string}>
     */
    public function generateServiceLastAccessedDetailsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccessKeyId:string} $args
     * @return \AWS\Result<array{UserName?:string, AccessKeyLastUsed?:array{LastUsedDate?:int|string|\DateTimeInterface, ServiceName:string, Region:string}}>
     */
    public function getAccessKeyLastUsed(array $args): \AWS\Result { }

    /**
     * @param array{AccessKeyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserName?:string, AccessKeyLastUsed?:array{LastUsedDate?:int|string|\DateTimeInterface, ServiceName:string, Region:string}}>
     */
    public function getAccessKeyLastUsedAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filter?:array<"User"|"Role"|"Group"|"LocalManagedPolicy"|"AWSManagedPolicy">, MaxItems?:int, Marker?:string} $args
     * @return \AWS\Result<array{UserDetailList?:array<array{Path?:string, UserName?:string, UserId?:string, Arn?:string, CreateDate?:int|string|\DateTimeInterface, UserPolicyList?:array<array{PolicyName?:string, PolicyDocument?:string}>, GroupList?:array<string>, AttachedManagedPolicies?:array<array{PolicyName?:string, PolicyArn?:string}>, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>}>, GroupDetailList?:array<array{Path?:string, GroupName?:string, GroupId?:string, Arn?:string, CreateDate?:int|string|\DateTimeInterface, GroupPolicyList?:array<array{PolicyName?:string, PolicyDocument?:string}>, AttachedManagedPolicies?:array<array{PolicyName?:string, PolicyArn?:string}>}>, RoleDetailList?:array<array{Path?:string, RoleName?:string, RoleId?:string, Arn?:string, CreateDate?:int|string|\DateTimeInterface, AssumeRolePolicyDocument?:string, InstanceProfileList?:array<array{Path:string, InstanceProfileName:string, InstanceProfileId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, Roles:array<array{Path:string, RoleName:string, RoleId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, AssumeRolePolicyDocument?:string, Description?:string, MaxSessionDuration?:int, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>, RoleLastUsed?:array{LastUsedDate?:int|string|\DateTimeInterface, Region?:string}}>, Tags?:array<array{Key:string, Value:string}>}>, RolePolicyList?:array<array{PolicyName?:string, PolicyDocument?:string}>, AttachedManagedPolicies?:array<array{PolicyName?:string, PolicyArn?:string}>, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>, RoleLastUsed?:array{LastUsedDate?:int|string|\DateTimeInterface, Region?:string}}>, Policies?:array<array{PolicyName?:string, PolicyId?:string, Arn?:string, Path?:string, DefaultVersionId?:string, AttachmentCount?:int, PermissionsBoundaryUsageCount?:int, IsAttachable?:bool, Description?:string, CreateDate?:int|string|\DateTimeInterface, UpdateDate?:int|string|\DateTimeInterface, PolicyVersionList?:array<array{Document?:string, VersionId?:string, IsDefaultVersion?:bool, CreateDate?:int|string|\DateTimeInterface}>}>, IsTruncated?:bool, Marker?:string}>
     */
    public function getAccountAuthorizationDetails(array $args = []): \AWS\Result { }

    /**
     * @param array{Filter?:array<"User"|"Role"|"Group"|"LocalManagedPolicy"|"AWSManagedPolicy">, MaxItems?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserDetailList?:array<array{Path?:string, UserName?:string, UserId?:string, Arn?:string, CreateDate?:int|string|\DateTimeInterface, UserPolicyList?:array<array{PolicyName?:string, PolicyDocument?:string}>, GroupList?:array<string>, AttachedManagedPolicies?:array<array{PolicyName?:string, PolicyArn?:string}>, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>}>, GroupDetailList?:array<array{Path?:string, GroupName?:string, GroupId?:string, Arn?:string, CreateDate?:int|string|\DateTimeInterface, GroupPolicyList?:array<array{PolicyName?:string, PolicyDocument?:string}>, AttachedManagedPolicies?:array<array{PolicyName?:string, PolicyArn?:string}>}>, RoleDetailList?:array<array{Path?:string, RoleName?:string, RoleId?:string, Arn?:string, CreateDate?:int|string|\DateTimeInterface, AssumeRolePolicyDocument?:string, InstanceProfileList?:array<array{Path:string, InstanceProfileName:string, InstanceProfileId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, Roles:array<array{Path:string, RoleName:string, RoleId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, AssumeRolePolicyDocument?:string, Description?:string, MaxSessionDuration?:int, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>, RoleLastUsed?:array{LastUsedDate?:int|string|\DateTimeInterface, Region?:string}}>, Tags?:array<array{Key:string, Value:string}>}>, RolePolicyList?:array<array{PolicyName?:string, PolicyDocument?:string}>, AttachedManagedPolicies?:array<array{PolicyName?:string, PolicyArn?:string}>, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>, RoleLastUsed?:array{LastUsedDate?:int|string|\DateTimeInterface, Region?:string}}>, Policies?:array<array{PolicyName?:string, PolicyId?:string, Arn?:string, Path?:string, DefaultVersionId?:string, AttachmentCount?:int, PermissionsBoundaryUsageCount?:int, IsAttachable?:bool, Description?:string, CreateDate?:int|string|\DateTimeInterface, UpdateDate?:int|string|\DateTimeInterface, PolicyVersionList?:array<array{Document?:string, VersionId?:string, IsDefaultVersion?:bool, CreateDate?:int|string|\DateTimeInterface}>}>, IsTruncated?:bool, Marker?:string}>
     */
    public function getAccountAuthorizationDetailsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{PasswordPolicy:array{MinimumPasswordLength?:int, RequireSymbols?:bool, RequireNumbers?:bool, RequireUppercaseCharacters?:bool, RequireLowercaseCharacters?:bool, AllowUsersToChangePassword?:bool, ExpirePasswords?:bool, MaxPasswordAge?:int, PasswordReusePrevention?:int, HardExpiry?:bool}}>
     */
    public function getAccountPasswordPolicy(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{PasswordPolicy:array{MinimumPasswordLength?:int, RequireSymbols?:bool, RequireNumbers?:bool, RequireUppercaseCharacters?:bool, RequireLowercaseCharacters?:bool, AllowUsersToChangePassword?:bool, ExpirePasswords?:bool, MaxPasswordAge?:int, PasswordReusePrevention?:int, HardExpiry?:bool}}>
     */
    public function getAccountPasswordPolicyAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{SummaryMap?:array<"Users"|"UsersQuota"|"Groups"|"GroupsQuota"|"ServerCertificates"|"ServerCertificatesQuota"|"UserPolicySizeQuota"|"GroupPolicySizeQuota"|"GroupsPerUserQuota"|"SigningCertificatesPerUserQuota"|"AccessKeysPerUserQuota"|"MFADevices"|"MFADevicesInUse"|"AccountMFAEnabled"|"AccountAccessKeysPresent"|"AccountPasswordPresent"|"AccountSigningCertificatesPresent"|"AttachedPoliciesPerGroupQuota"|"AttachedPoliciesPerRoleQuota"|"AttachedPoliciesPerUserQuota"|"Policies"|"PoliciesQuota"|"PolicySizeQuota"|"PolicyVersionsInUse"|"PolicyVersionsInUseQuota"|"VersionsPerPolicyQuota"|"GlobalEndpointTokenVersion", int>}>
     */
    public function getAccountSummary(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{SummaryMap?:array<"Users"|"UsersQuota"|"Groups"|"GroupsQuota"|"ServerCertificates"|"ServerCertificatesQuota"|"UserPolicySizeQuota"|"GroupPolicySizeQuota"|"GroupsPerUserQuota"|"SigningCertificatesPerUserQuota"|"AccessKeysPerUserQuota"|"MFADevices"|"MFADevicesInUse"|"AccountMFAEnabled"|"AccountAccessKeysPresent"|"AccountPasswordPresent"|"AccountSigningCertificatesPresent"|"AttachedPoliciesPerGroupQuota"|"AttachedPoliciesPerRoleQuota"|"AttachedPoliciesPerUserQuota"|"Policies"|"PoliciesQuota"|"PolicySizeQuota"|"PolicyVersionsInUse"|"PolicyVersionsInUseQuota"|"VersionsPerPolicyQuota"|"GlobalEndpointTokenVersion", int>}>
     */
    public function getAccountSummaryAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PolicyInputList:array<string>} $args
     * @return \AWS\Result<array{ContextKeyNames?:array<string>}>
     */
    public function getContextKeysForCustomPolicy(array $args): \AWS\Result { }

    /**
     * @param array{PolicyInputList:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContextKeyNames?:array<string>}>
     */
    public function getContextKeysForCustomPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PolicySourceArn:string, PolicyInputList?:array<string>} $args
     * @return \AWS\Result<array{ContextKeyNames?:array<string>}>
     */
    public function getContextKeysForPrincipalPolicy(array $args): \AWS\Result { }

    /**
     * @param array{PolicySourceArn:string, PolicyInputList?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContextKeyNames?:array<string>}>
     */
    public function getContextKeysForPrincipalPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{Content?:string|resource|\Psr\Http\Message\StreamInterface, ReportFormat?:"text/csv", GeneratedTime?:int|string|\DateTimeInterface}>
     */
    public function getCredentialReport(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{Content?:string|resource|\Psr\Http\Message\StreamInterface, ReportFormat?:"text/csv", GeneratedTime?:int|string|\DateTimeInterface}>
     */
    public function getCredentialReportAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupName:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{Group:array{Path:string, GroupName:string, GroupId:string, Arn:string, CreateDate:int|string|\DateTimeInterface}, Users:array<array{Path:string, UserName:string, UserId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, PasswordLastUsed?:int|string|\DateTimeInterface, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>}>, IsTruncated?:bool, Marker?:string}>
     */
    public function getGroup(array $args): \AWS\Result { }

    /**
     * @param array{GroupName:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Group:array{Path:string, GroupName:string, GroupId:string, Arn:string, CreateDate:int|string|\DateTimeInterface}, Users:array<array{Path:string, UserName:string, UserId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, PasswordLastUsed?:int|string|\DateTimeInterface, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>}>, IsTruncated?:bool, Marker?:string}>
     */
    public function getGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupName:string, PolicyName:string} $args
     * @return \AWS\Result<array{GroupName:string, PolicyName:string, PolicyDocument:string}>
     */
    public function getGroupPolicy(array $args): \AWS\Result { }

    /**
     * @param array{GroupName:string, PolicyName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{GroupName:string, PolicyName:string, PolicyDocument:string}>
     */
    public function getGroupPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceProfileName:string} $args
     * @return \AWS\Result<array{InstanceProfile:array{Path:string, InstanceProfileName:string, InstanceProfileId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, Roles:array<array{Path:string, RoleName:string, RoleId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, AssumeRolePolicyDocument?:string, Description?:string, MaxSessionDuration?:int, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>, RoleLastUsed?:array{LastUsedDate?:int|string|\DateTimeInterface, Region?:string}}>, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function getInstanceProfile(array $args): \AWS\Result { }

    /**
     * @param array{InstanceProfileName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{InstanceProfile:array{Path:string, InstanceProfileName:string, InstanceProfileId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, Roles:array<array{Path:string, RoleName:string, RoleId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, AssumeRolePolicyDocument?:string, Description?:string, MaxSessionDuration?:int, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>, RoleLastUsed?:array{LastUsedDate?:int|string|\DateTimeInterface, Region?:string}}>, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function getInstanceProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName?:string} $args
     * @return \AWS\Result<array{LoginProfile:array{UserName:string, CreateDate:int|string|\DateTimeInterface, PasswordResetRequired?:bool}}>
     */
    public function getLoginProfile(array $args = []): \AWS\Result { }

    /**
     * @param array{UserName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LoginProfile:array{UserName:string, CreateDate:int|string|\DateTimeInterface, PasswordResetRequired?:bool}}>
     */
    public function getLoginProfileAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SerialNumber:string, UserName?:string} $args
     * @return \AWS\Result<array{UserName?:string, SerialNumber:string, EnableDate?:int|string|\DateTimeInterface, Certifications?:array<string, string>}>
     */
    public function getMFADevice(array $args): \AWS\Result { }

    /**
     * @param array{SerialNumber:string, UserName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserName?:string, SerialNumber:string, EnableDate?:int|string|\DateTimeInterface, Certifications?:array<string, string>}>
     */
    public function getMFADeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OpenIDConnectProviderArn:string} $args
     * @return \AWS\Result<array{Url?:string, ClientIDList?:array<string>, ThumbprintList?:array<string>, CreateDate?:int|string|\DateTimeInterface, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function getOpenIDConnectProvider(array $args): \AWS\Result { }

    /**
     * @param array{OpenIDConnectProviderArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Url?:string, ClientIDList?:array<string>, ThumbprintList?:array<string>, CreateDate?:int|string|\DateTimeInterface, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function getOpenIDConnectProviderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string, MaxItems?:int, Marker?:string, SortKey?:"SERVICE_NAMESPACE_ASCENDING"|"SERVICE_NAMESPACE_DESCENDING"|"LAST_AUTHENTICATED_TIME_ASCENDING"|"LAST_AUTHENTICATED_TIME_DESCENDING"} $args
     * @return \AWS\Result<array{JobStatus:"IN_PROGRESS"|"COMPLETED"|"FAILED", JobCreationDate:int|string|\DateTimeInterface, JobCompletionDate?:int|string|\DateTimeInterface, NumberOfServicesAccessible?:int, NumberOfServicesNotAccessed?:int, AccessDetails?:array<array{ServiceName:string, ServiceNamespace:string, Region?:string, EntityPath?:string, LastAuthenticatedTime?:int|string|\DateTimeInterface, TotalAuthenticatedEntities?:int}>, IsTruncated?:bool, Marker?:string, ErrorDetails?:array{Message:string, Code:string}}>
     */
    public function getOrganizationsAccessReport(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string, MaxItems?:int, Marker?:string, SortKey?:"SERVICE_NAMESPACE_ASCENDING"|"SERVICE_NAMESPACE_DESCENDING"|"LAST_AUTHENTICATED_TIME_ASCENDING"|"LAST_AUTHENTICATED_TIME_DESCENDING"} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobStatus:"IN_PROGRESS"|"COMPLETED"|"FAILED", JobCreationDate:int|string|\DateTimeInterface, JobCompletionDate?:int|string|\DateTimeInterface, NumberOfServicesAccessible?:int, NumberOfServicesNotAccessed?:int, AccessDetails?:array<array{ServiceName:string, ServiceNamespace:string, Region?:string, EntityPath?:string, LastAuthenticatedTime?:int|string|\DateTimeInterface, TotalAuthenticatedEntities?:int}>, IsTruncated?:bool, Marker?:string, ErrorDetails?:array{Message:string, Code:string}}>
     */
    public function getOrganizationsAccessReportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PolicyArn:string} $args
     * @return \AWS\Result<array{Policy?:array{PolicyName?:string, PolicyId?:string, Arn?:string, Path?:string, DefaultVersionId?:string, AttachmentCount?:int, PermissionsBoundaryUsageCount?:int, IsAttachable?:bool, Description?:string, CreateDate?:int|string|\DateTimeInterface, UpdateDate?:int|string|\DateTimeInterface, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function getPolicy(array $args): \AWS\Result { }

    /**
     * @param array{PolicyArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:array{PolicyName?:string, PolicyId?:string, Arn?:string, Path?:string, DefaultVersionId?:string, AttachmentCount?:int, PermissionsBoundaryUsageCount?:int, IsAttachable?:bool, Description?:string, CreateDate?:int|string|\DateTimeInterface, UpdateDate?:int|string|\DateTimeInterface, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function getPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PolicyArn:string, VersionId:string} $args
     * @return \AWS\Result<array{PolicyVersion?:array{Document?:string, VersionId?:string, IsDefaultVersion?:bool, CreateDate?:int|string|\DateTimeInterface}}>
     */
    public function getPolicyVersion(array $args): \AWS\Result { }

    /**
     * @param array{PolicyArn:string, VersionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PolicyVersion?:array{Document?:string, VersionId?:string, IsDefaultVersion?:bool, CreateDate?:int|string|\DateTimeInterface}}>
     */
    public function getPolicyVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RoleName:string} $args
     * @return \AWS\Result<array{Role:array{Path:string, RoleName:string, RoleId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, AssumeRolePolicyDocument?:string, Description?:string, MaxSessionDuration?:int, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>, RoleLastUsed?:array{LastUsedDate?:int|string|\DateTimeInterface, Region?:string}}}>
     */
    public function getRole(array $args): \AWS\Result { }

    /**
     * @param array{RoleName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Role:array{Path:string, RoleName:string, RoleId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, AssumeRolePolicyDocument?:string, Description?:string, MaxSessionDuration?:int, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>, RoleLastUsed?:array{LastUsedDate?:int|string|\DateTimeInterface, Region?:string}}}>
     */
    public function getRoleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RoleName:string, PolicyName:string} $args
     * @return \AWS\Result<array{RoleName:string, PolicyName:string, PolicyDocument:string}>
     */
    public function getRolePolicy(array $args): \AWS\Result { }

    /**
     * @param array{RoleName:string, PolicyName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RoleName:string, PolicyName:string, PolicyDocument:string}>
     */
    public function getRolePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SAMLProviderArn:string} $args
     * @return \AWS\Result<array{SAMLMetadataDocument?:string, CreateDate?:int|string|\DateTimeInterface, ValidUntil?:int|string|\DateTimeInterface, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function getSAMLProvider(array $args): \AWS\Result { }

    /**
     * @param array{SAMLProviderArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SAMLMetadataDocument?:string, CreateDate?:int|string|\DateTimeInterface, ValidUntil?:int|string|\DateTimeInterface, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function getSAMLProviderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName:string, SSHPublicKeyId:string, Encoding:"SSH"|"PEM"} $args
     * @return \AWS\Result<array{SSHPublicKey?:array{UserName:string, SSHPublicKeyId:string, Fingerprint:string, SSHPublicKeyBody:string, Status:"Active"|"Inactive", UploadDate?:int|string|\DateTimeInterface}}>
     */
    public function getSSHPublicKey(array $args): \AWS\Result { }

    /**
     * @param array{UserName:string, SSHPublicKeyId:string, Encoding:"SSH"|"PEM"} $args
     * @return \GuzzleHttp\Promise\Promise<array{SSHPublicKey?:array{UserName:string, SSHPublicKeyId:string, Fingerprint:string, SSHPublicKeyBody:string, Status:"Active"|"Inactive", UploadDate?:int|string|\DateTimeInterface}}>
     */
    public function getSSHPublicKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServerCertificateName:string} $args
     * @return \AWS\Result<array{ServerCertificate:array{ServerCertificateMetadata:array{Path:string, ServerCertificateName:string, ServerCertificateId:string, Arn:string, UploadDate?:int|string|\DateTimeInterface, Expiration?:int|string|\DateTimeInterface}, CertificateBody:string, CertificateChain?:string, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function getServerCertificate(array $args): \AWS\Result { }

    /**
     * @param array{ServerCertificateName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServerCertificate:array{ServerCertificateMetadata:array{Path:string, ServerCertificateName:string, ServerCertificateId:string, Arn:string, UploadDate?:int|string|\DateTimeInterface, Expiration?:int|string|\DateTimeInterface}, CertificateBody:string, CertificateChain?:string, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function getServerCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string, MaxItems?:int, Marker?:string} $args
     * @return \AWS\Result<array{JobStatus:"IN_PROGRESS"|"COMPLETED"|"FAILED", JobType?:"SERVICE_LEVEL"|"ACTION_LEVEL", JobCreationDate:int|string|\DateTimeInterface, ServicesLastAccessed:array<array{ServiceName:string, LastAuthenticated?:int|string|\DateTimeInterface, ServiceNamespace:string, LastAuthenticatedEntity?:string, LastAuthenticatedRegion?:string, TotalAuthenticatedEntities?:int, TrackedActionsLastAccessed?:array<array{ActionName?:string, LastAccessedEntity?:string, LastAccessedTime?:int|string|\DateTimeInterface, LastAccessedRegion?:string}>}>, JobCompletionDate:int|string|\DateTimeInterface, IsTruncated?:bool, Marker?:string, Error?:array{Message:string, Code:string}}>
     */
    public function getServiceLastAccessedDetails(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string, MaxItems?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobStatus:"IN_PROGRESS"|"COMPLETED"|"FAILED", JobType?:"SERVICE_LEVEL"|"ACTION_LEVEL", JobCreationDate:int|string|\DateTimeInterface, ServicesLastAccessed:array<array{ServiceName:string, LastAuthenticated?:int|string|\DateTimeInterface, ServiceNamespace:string, LastAuthenticatedEntity?:string, LastAuthenticatedRegion?:string, TotalAuthenticatedEntities?:int, TrackedActionsLastAccessed?:array<array{ActionName?:string, LastAccessedEntity?:string, LastAccessedTime?:int|string|\DateTimeInterface, LastAccessedRegion?:string}>}>, JobCompletionDate:int|string|\DateTimeInterface, IsTruncated?:bool, Marker?:string, Error?:array{Message:string, Code:string}}>
     */
    public function getServiceLastAccessedDetailsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string, ServiceNamespace:string, MaxItems?:int, Marker?:string} $args
     * @return \AWS\Result<array{JobStatus:"IN_PROGRESS"|"COMPLETED"|"FAILED", JobCreationDate:int|string|\DateTimeInterface, JobCompletionDate:int|string|\DateTimeInterface, EntityDetailsList:array<array{EntityInfo:array{Arn:string, Name:string, Type:"USER"|"ROLE"|"GROUP", Id:string, Path?:string}, LastAuthenticated?:int|string|\DateTimeInterface}>, IsTruncated?:bool, Marker?:string, Error?:array{Message:string, Code:string}}>
     */
    public function getServiceLastAccessedDetailsWithEntities(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string, ServiceNamespace:string, MaxItems?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobStatus:"IN_PROGRESS"|"COMPLETED"|"FAILED", JobCreationDate:int|string|\DateTimeInterface, JobCompletionDate:int|string|\DateTimeInterface, EntityDetailsList:array<array{EntityInfo:array{Arn:string, Name:string, Type:"USER"|"ROLE"|"GROUP", Id:string, Path?:string}, LastAuthenticated?:int|string|\DateTimeInterface}>, IsTruncated?:bool, Marker?:string, Error?:array{Message:string, Code:string}}>
     */
    public function getServiceLastAccessedDetailsWithEntitiesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DeletionTaskId:string} $args
     * @return \AWS\Result<array{Status:"SUCCEEDED"|"IN_PROGRESS"|"FAILED"|"NOT_STARTED", Reason?:array{Reason?:mixed, RoleUsageList?:array<array{Region?:string, Resources?:array<string>}>}}>
     */
    public function getServiceLinkedRoleDeletionStatus(array $args): \AWS\Result { }

    /**
     * @param array{DeletionTaskId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status:"SUCCEEDED"|"IN_PROGRESS"|"FAILED"|"NOT_STARTED", Reason?:array{Reason?:mixed, RoleUsageList?:array<array{Region?:string, Resources?:array<string>}>}}>
     */
    public function getServiceLinkedRoleDeletionStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName?:string} $args
     * @return \AWS\Result<array{User:array{Path:string, UserName:string, UserId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, PasswordLastUsed?:int|string|\DateTimeInterface, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function getUser(array $args = []): \AWS\Result { }

    /**
     * @param array{UserName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{User:array{Path:string, UserName:string, UserId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, PasswordLastUsed?:int|string|\DateTimeInterface, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>}}>
     */
    public function getUserAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName:string, PolicyName:string} $args
     * @return \AWS\Result<array{UserName:string, PolicyName:string, PolicyDocument:string}>
     */
    public function getUserPolicy(array $args): \AWS\Result { }

    /**
     * @param array{UserName:string, PolicyName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserName:string, PolicyName:string, PolicyDocument:string}>
     */
    public function getUserPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName?:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{AccessKeyMetadata:array<array{UserName?:string, AccessKeyId?:string, Status?:"Active"|"Inactive", CreateDate?:int|string|\DateTimeInterface}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listAccessKeys(array $args = []): \AWS\Result { }

    /**
     * @param array{UserName?:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccessKeyMetadata:array<array{UserName?:string, AccessKeyId?:string, Status?:"Active"|"Inactive", CreateDate?:int|string|\DateTimeInterface}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listAccessKeysAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{AccountAliases:array<string>, IsTruncated?:bool, Marker?:string}>
     */
    public function listAccountAliases(array $args = []): \AWS\Result { }

    /**
     * @param array{Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountAliases:array<string>, IsTruncated?:bool, Marker?:string}>
     */
    public function listAccountAliasesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupName:string, PathPrefix?:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{AttachedPolicies?:array<array{PolicyName?:string, PolicyArn?:string}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listAttachedGroupPolicies(array $args): \AWS\Result { }

    /**
     * @param array{GroupName:string, PathPrefix?:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{AttachedPolicies?:array<array{PolicyName?:string, PolicyArn?:string}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listAttachedGroupPoliciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RoleName:string, PathPrefix?:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{AttachedPolicies?:array<array{PolicyName?:string, PolicyArn?:string}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listAttachedRolePolicies(array $args): \AWS\Result { }

    /**
     * @param array{RoleName:string, PathPrefix?:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{AttachedPolicies?:array<array{PolicyName?:string, PolicyArn?:string}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listAttachedRolePoliciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName:string, PathPrefix?:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{AttachedPolicies?:array<array{PolicyName?:string, PolicyArn?:string}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listAttachedUserPolicies(array $args): \AWS\Result { }

    /**
     * @param array{UserName:string, PathPrefix?:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{AttachedPolicies?:array<array{PolicyName?:string, PolicyArn?:string}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listAttachedUserPoliciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PolicyArn:string, EntityFilter?:"User"|"Role"|"Group"|"LocalManagedPolicy"|"AWSManagedPolicy", PathPrefix?:string, PolicyUsageFilter?:"PermissionsPolicy"|"PermissionsBoundary", Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{PolicyGroups?:array<array{GroupName?:string, GroupId?:string}>, PolicyUsers?:array<array{UserName?:string, UserId?:string}>, PolicyRoles?:array<array{RoleName?:string, RoleId?:string}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listEntitiesForPolicy(array $args): \AWS\Result { }

    /**
     * @param array{PolicyArn:string, EntityFilter?:"User"|"Role"|"Group"|"LocalManagedPolicy"|"AWSManagedPolicy", PathPrefix?:string, PolicyUsageFilter?:"PermissionsPolicy"|"PermissionsBoundary", Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{PolicyGroups?:array<array{GroupName?:string, GroupId?:string}>, PolicyUsers?:array<array{UserName?:string, UserId?:string}>, PolicyRoles?:array<array{RoleName?:string, RoleId?:string}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listEntitiesForPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupName:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{PolicyNames:array<string>, IsTruncated?:bool, Marker?:string}>
     */
    public function listGroupPolicies(array $args): \AWS\Result { }

    /**
     * @param array{GroupName:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{PolicyNames:array<string>, IsTruncated?:bool, Marker?:string}>
     */
    public function listGroupPoliciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PathPrefix?:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{Groups:array<array{Path:string, GroupName:string, GroupId:string, Arn:string, CreateDate:int|string|\DateTimeInterface}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{PathPrefix?:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Groups:array<array{Path:string, GroupName:string, GroupId:string, Arn:string, CreateDate:int|string|\DateTimeInterface}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{Groups:array<array{Path:string, GroupName:string, GroupId:string, Arn:string, CreateDate:int|string|\DateTimeInterface}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listGroupsForUser(array $args): \AWS\Result { }

    /**
     * @param array{UserName:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Groups:array<array{Path:string, GroupName:string, GroupId:string, Arn:string, CreateDate:int|string|\DateTimeInterface}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listGroupsForUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceProfileName:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{Tags:array<array{Key:string, Value:string}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listInstanceProfileTags(array $args): \AWS\Result { }

    /**
     * @param array{InstanceProfileName:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags:array<array{Key:string, Value:string}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listInstanceProfileTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PathPrefix?:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{InstanceProfiles:array<array{Path:string, InstanceProfileName:string, InstanceProfileId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, Roles:array<array{Path:string, RoleName:string, RoleId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, AssumeRolePolicyDocument?:string, Description?:string, MaxSessionDuration?:int, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>, RoleLastUsed?:array{LastUsedDate?:int|string|\DateTimeInterface, Region?:string}}>, Tags?:array<array{Key:string, Value:string}>}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listInstanceProfiles(array $args = []): \AWS\Result { }

    /**
     * @param array{PathPrefix?:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{InstanceProfiles:array<array{Path:string, InstanceProfileName:string, InstanceProfileId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, Roles:array<array{Path:string, RoleName:string, RoleId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, AssumeRolePolicyDocument?:string, Description?:string, MaxSessionDuration?:int, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>, RoleLastUsed?:array{LastUsedDate?:int|string|\DateTimeInterface, Region?:string}}>, Tags?:array<array{Key:string, Value:string}>}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listInstanceProfilesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RoleName:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{InstanceProfiles:array<array{Path:string, InstanceProfileName:string, InstanceProfileId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, Roles:array<array{Path:string, RoleName:string, RoleId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, AssumeRolePolicyDocument?:string, Description?:string, MaxSessionDuration?:int, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>, RoleLastUsed?:array{LastUsedDate?:int|string|\DateTimeInterface, Region?:string}}>, Tags?:array<array{Key:string, Value:string}>}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listInstanceProfilesForRole(array $args): \AWS\Result { }

    /**
     * @param array{RoleName:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{InstanceProfiles:array<array{Path:string, InstanceProfileName:string, InstanceProfileId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, Roles:array<array{Path:string, RoleName:string, RoleId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, AssumeRolePolicyDocument?:string, Description?:string, MaxSessionDuration?:int, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>, RoleLastUsed?:array{LastUsedDate?:int|string|\DateTimeInterface, Region?:string}}>, Tags?:array<array{Key:string, Value:string}>}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listInstanceProfilesForRoleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SerialNumber:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{Tags:array<array{Key:string, Value:string}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listMFADeviceTags(array $args): \AWS\Result { }

    /**
     * @param array{SerialNumber:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags:array<array{Key:string, Value:string}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listMFADeviceTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName?:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{MFADevices:array<array{UserName:string, SerialNumber:string, EnableDate:int|string|\DateTimeInterface}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listMFADevices(array $args = []): \AWS\Result { }

    /**
     * @param array{UserName?:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{MFADevices:array<array{UserName:string, SerialNumber:string, EnableDate:int|string|\DateTimeInterface}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listMFADevicesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OpenIDConnectProviderArn:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{Tags:array<array{Key:string, Value:string}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listOpenIDConnectProviderTags(array $args): \AWS\Result { }

    /**
     * @param array{OpenIDConnectProviderArn:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags:array<array{Key:string, Value:string}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listOpenIDConnectProviderTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{OpenIDConnectProviderList?:array<array{Arn?:string}>}>
     */
    public function listOpenIDConnectProviders(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{OpenIDConnectProviderList?:array<array{Arn?:string}>}>
     */
    public function listOpenIDConnectProvidersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{OrganizationId?:string, EnabledFeatures?:array<"RootCredentialsManagement"|"RootSessions">}>
     */
    public function listOrganizationsFeatures(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{OrganizationId?:string, EnabledFeatures?:array<"RootCredentialsManagement"|"RootSessions">}>
     */
    public function listOrganizationsFeaturesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Scope?:"All"|"AWS"|"Local", OnlyAttached?:bool, PathPrefix?:string, PolicyUsageFilter?:"PermissionsPolicy"|"PermissionsBoundary", Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{Policies?:array<array{PolicyName?:string, PolicyId?:string, Arn?:string, Path?:string, DefaultVersionId?:string, AttachmentCount?:int, PermissionsBoundaryUsageCount?:int, IsAttachable?:bool, Description?:string, CreateDate?:int|string|\DateTimeInterface, UpdateDate?:int|string|\DateTimeInterface, Tags?:array<array{Key:string, Value:string}>}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listPolicies(array $args = []): \AWS\Result { }

    /**
     * @param array{Scope?:"All"|"AWS"|"Local", OnlyAttached?:bool, PathPrefix?:string, PolicyUsageFilter?:"PermissionsPolicy"|"PermissionsBoundary", Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policies?:array<array{PolicyName?:string, PolicyId?:string, Arn?:string, Path?:string, DefaultVersionId?:string, AttachmentCount?:int, PermissionsBoundaryUsageCount?:int, IsAttachable?:bool, Description?:string, CreateDate?:int|string|\DateTimeInterface, UpdateDate?:int|string|\DateTimeInterface, Tags?:array<array{Key:string, Value:string}>}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listPoliciesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Marker?:string, Arn:string, ServiceNamespaces:array<string>} $args
     * @return \AWS\Result<array{PoliciesGrantingServiceAccess:array<array{ServiceNamespace?:string, Policies?:array<array{PolicyName:string, PolicyType:"INLINE"|"MANAGED", PolicyArn?:string, EntityType?:"USER"|"ROLE"|"GROUP", EntityName?:string}>}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listPoliciesGrantingServiceAccess(array $args): \AWS\Result { }

    /**
     * @param array{Marker?:string, Arn:string, ServiceNamespaces:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{PoliciesGrantingServiceAccess:array<array{ServiceNamespace?:string, Policies?:array<array{PolicyName:string, PolicyType:"INLINE"|"MANAGED", PolicyArn?:string, EntityType?:"USER"|"ROLE"|"GROUP", EntityName?:string}>}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listPoliciesGrantingServiceAccessAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PolicyArn:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{Tags:array<array{Key:string, Value:string}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listPolicyTags(array $args): \AWS\Result { }

    /**
     * @param array{PolicyArn:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags:array<array{Key:string, Value:string}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listPolicyTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PolicyArn:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{Versions?:array<array{Document?:string, VersionId?:string, IsDefaultVersion?:bool, CreateDate?:int|string|\DateTimeInterface}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listPolicyVersions(array $args): \AWS\Result { }

    /**
     * @param array{PolicyArn:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Versions?:array<array{Document?:string, VersionId?:string, IsDefaultVersion?:bool, CreateDate?:int|string|\DateTimeInterface}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listPolicyVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RoleName:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{PolicyNames:array<string>, IsTruncated?:bool, Marker?:string}>
     */
    public function listRolePolicies(array $args): \AWS\Result { }

    /**
     * @param array{RoleName:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{PolicyNames:array<string>, IsTruncated?:bool, Marker?:string}>
     */
    public function listRolePoliciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RoleName:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{Tags:array<array{Key:string, Value:string}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listRoleTags(array $args): \AWS\Result { }

    /**
     * @param array{RoleName:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags:array<array{Key:string, Value:string}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listRoleTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PathPrefix?:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{Roles:array<array{Path:string, RoleName:string, RoleId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, AssumeRolePolicyDocument?:string, Description?:string, MaxSessionDuration?:int, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>, RoleLastUsed?:array{LastUsedDate?:int|string|\DateTimeInterface, Region?:string}}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listRoles(array $args = []): \AWS\Result { }

    /**
     * @param array{PathPrefix?:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Roles:array<array{Path:string, RoleName:string, RoleId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, AssumeRolePolicyDocument?:string, Description?:string, MaxSessionDuration?:int, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>, RoleLastUsed?:array{LastUsedDate?:int|string|\DateTimeInterface, Region?:string}}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listRolesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SAMLProviderArn:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{Tags:array<array{Key:string, Value:string}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listSAMLProviderTags(array $args): \AWS\Result { }

    /**
     * @param array{SAMLProviderArn:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags:array<array{Key:string, Value:string}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listSAMLProviderTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{SAMLProviderList?:array<array{Arn?:string, ValidUntil?:int|string|\DateTimeInterface, CreateDate?:int|string|\DateTimeInterface}>}>
     */
    public function listSAMLProviders(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{SAMLProviderList?:array<array{Arn?:string, ValidUntil?:int|string|\DateTimeInterface, CreateDate?:int|string|\DateTimeInterface}>}>
     */
    public function listSAMLProvidersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName?:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{SSHPublicKeys?:array<array{UserName:string, SSHPublicKeyId:string, Status:"Active"|"Inactive", UploadDate:int|string|\DateTimeInterface}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listSSHPublicKeys(array $args = []): \AWS\Result { }

    /**
     * @param array{UserName?:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{SSHPublicKeys?:array<array{UserName:string, SSHPublicKeyId:string, Status:"Active"|"Inactive", UploadDate:int|string|\DateTimeInterface}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listSSHPublicKeysAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServerCertificateName:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{Tags:array<array{Key:string, Value:string}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listServerCertificateTags(array $args): \AWS\Result { }

    /**
     * @param array{ServerCertificateName:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags:array<array{Key:string, Value:string}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listServerCertificateTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PathPrefix?:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{ServerCertificateMetadataList:array<array{Path:string, ServerCertificateName:string, ServerCertificateId:string, Arn:string, UploadDate?:int|string|\DateTimeInterface, Expiration?:int|string|\DateTimeInterface}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listServerCertificates(array $args = []): \AWS\Result { }

    /**
     * @param array{PathPrefix?:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServerCertificateMetadataList:array<array{Path:string, ServerCertificateName:string, ServerCertificateId:string, Arn:string, UploadDate?:int|string|\DateTimeInterface, Expiration?:int|string|\DateTimeInterface}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listServerCertificatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName?:string, ServiceName?:string} $args
     * @return \AWS\Result<array{ServiceSpecificCredentials?:array<array{UserName:string, Status:"Active"|"Inactive", ServiceUserName:string, CreateDate:int|string|\DateTimeInterface, ServiceSpecificCredentialId:string, ServiceName:string}>}>
     */
    public function listServiceSpecificCredentials(array $args = []): \AWS\Result { }

    /**
     * @param array{UserName?:string, ServiceName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServiceSpecificCredentials?:array<array{UserName:string, Status:"Active"|"Inactive", ServiceUserName:string, CreateDate:int|string|\DateTimeInterface, ServiceSpecificCredentialId:string, ServiceName:string}>}>
     */
    public function listServiceSpecificCredentialsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName?:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{Certificates:array<array{UserName:string, CertificateId:string, CertificateBody:string, Status:"Active"|"Inactive", UploadDate?:int|string|\DateTimeInterface}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listSigningCertificates(array $args = []): \AWS\Result { }

    /**
     * @param array{UserName?:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Certificates:array<array{UserName:string, CertificateId:string, CertificateBody:string, Status:"Active"|"Inactive", UploadDate?:int|string|\DateTimeInterface}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listSigningCertificatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{PolicyNames:array<string>, IsTruncated?:bool, Marker?:string}>
     */
    public function listUserPolicies(array $args): \AWS\Result { }

    /**
     * @param array{UserName:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{PolicyNames:array<string>, IsTruncated?:bool, Marker?:string}>
     */
    public function listUserPoliciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{Tags:array<array{Key:string, Value:string}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listUserTags(array $args): \AWS\Result { }

    /**
     * @param array{UserName:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags:array<array{Key:string, Value:string}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listUserTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PathPrefix?:string, Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{Users:array<array{Path:string, UserName:string, UserId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, PasswordLastUsed?:int|string|\DateTimeInterface, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listUsers(array $args = []): \AWS\Result { }

    /**
     * @param array{PathPrefix?:string, Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Users:array<array{Path:string, UserName:string, UserId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, PasswordLastUsed?:int|string|\DateTimeInterface, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listUsersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AssignmentStatus?:"Assigned"|"Unassigned"|"Any", Marker?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{VirtualMFADevices:array<array{SerialNumber:string, Base32StringSeed?:string|resource|\Psr\Http\Message\StreamInterface, QRCodePNG?:string|resource|\Psr\Http\Message\StreamInterface, User?:array{Path:string, UserName:string, UserId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, PasswordLastUsed?:int|string|\DateTimeInterface, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>}, EnableDate?:int|string|\DateTimeInterface, Tags?:array<array{Key:string, Value:string}>}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listVirtualMFADevices(array $args = []): \AWS\Result { }

    /**
     * @param array{AssignmentStatus?:"Assigned"|"Unassigned"|"Any", Marker?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{VirtualMFADevices:array<array{SerialNumber:string, Base32StringSeed?:string|resource|\Psr\Http\Message\StreamInterface, QRCodePNG?:string|resource|\Psr\Http\Message\StreamInterface, User?:array{Path:string, UserName:string, UserId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, PasswordLastUsed?:int|string|\DateTimeInterface, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>}, EnableDate?:int|string|\DateTimeInterface, Tags?:array<array{Key:string, Value:string}>}>, IsTruncated?:bool, Marker?:string}>
     */
    public function listVirtualMFADevicesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupName:string, PolicyName:string, PolicyDocument:string} $args
     * @return \AWS\Result<void>
     */
    public function putGroupPolicy(array $args): \AWS\Result { }

    /**
     * @param array{GroupName:string, PolicyName:string, PolicyDocument:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putGroupPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RoleName:string, PermissionsBoundary:string} $args
     * @return \AWS\Result<void>
     */
    public function putRolePermissionsBoundary(array $args): \AWS\Result { }

    /**
     * @param array{RoleName:string, PermissionsBoundary:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putRolePermissionsBoundaryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RoleName:string, PolicyName:string, PolicyDocument:string} $args
     * @return \AWS\Result<void>
     */
    public function putRolePolicy(array $args): \AWS\Result { }

    /**
     * @param array{RoleName:string, PolicyName:string, PolicyDocument:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putRolePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName:string, PermissionsBoundary:string} $args
     * @return \AWS\Result<void>
     */
    public function putUserPermissionsBoundary(array $args): \AWS\Result { }

    /**
     * @param array{UserName:string, PermissionsBoundary:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putUserPermissionsBoundaryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName:string, PolicyName:string, PolicyDocument:string} $args
     * @return \AWS\Result<void>
     */
    public function putUserPolicy(array $args): \AWS\Result { }

    /**
     * @param array{UserName:string, PolicyName:string, PolicyDocument:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putUserPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OpenIDConnectProviderArn:string, ClientID:string} $args
     * @return \AWS\Result<void>
     */
    public function removeClientIDFromOpenIDConnectProvider(array $args): \AWS\Result { }

    /**
     * @param array{OpenIDConnectProviderArn:string, ClientID:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function removeClientIDFromOpenIDConnectProviderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceProfileName:string, RoleName:string} $args
     * @return \AWS\Result<void>
     */
    public function removeRoleFromInstanceProfile(array $args): \AWS\Result { }

    /**
     * @param array{InstanceProfileName:string, RoleName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function removeRoleFromInstanceProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupName:string, UserName:string} $args
     * @return \AWS\Result<void>
     */
    public function removeUserFromGroup(array $args): \AWS\Result { }

    /**
     * @param array{GroupName:string, UserName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function removeUserFromGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName?:string, ServiceSpecificCredentialId:string} $args
     * @return \AWS\Result<array{ServiceSpecificCredential?:array{CreateDate:int|string|\DateTimeInterface, ServiceName:string, ServiceUserName:string, ServicePassword:string, ServiceSpecificCredentialId:string, UserName:string, Status:"Active"|"Inactive"}}>
     */
    public function resetServiceSpecificCredential(array $args): \AWS\Result { }

    /**
     * @param array{UserName?:string, ServiceSpecificCredentialId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServiceSpecificCredential?:array{CreateDate:int|string|\DateTimeInterface, ServiceName:string, ServiceUserName:string, ServicePassword:string, ServiceSpecificCredentialId:string, UserName:string, Status:"Active"|"Inactive"}}>
     */
    public function resetServiceSpecificCredentialAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName:string, SerialNumber:string, AuthenticationCode1:string, AuthenticationCode2:string} $args
     * @return \AWS\Result<void>
     */
    public function resyncMFADevice(array $args): \AWS\Result { }

    /**
     * @param array{UserName:string, SerialNumber:string, AuthenticationCode1:string, AuthenticationCode2:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function resyncMFADeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PolicyArn:string, VersionId:string} $args
     * @return \AWS\Result<void>
     */
    public function setDefaultPolicyVersion(array $args): \AWS\Result { }

    /**
     * @param array{PolicyArn:string, VersionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function setDefaultPolicyVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GlobalEndpointTokenVersion:"v1Token"|"v2Token"} $args
     * @return \AWS\Result<void>
     */
    public function setSecurityTokenServicePreferences(array $args): \AWS\Result { }

    /**
     * @param array{GlobalEndpointTokenVersion:"v1Token"|"v2Token"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function setSecurityTokenServicePreferencesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PolicyInputList:array<string>, PermissionsBoundaryPolicyInputList?:array<string>, ActionNames:array<string>, ResourceArns?:array<string>, ResourcePolicy?:string, ResourceOwner?:string, CallerArn?:string, ContextEntries?:array<array{ContextKeyName?:string, ContextKeyValues?:array<string>, ContextKeyType?:"string"|"stringList"|"numeric"|"numericList"|"boolean"|"booleanList"|"ip"|"ipList"|"binary"|"binaryList"|"date"|"dateList"}>, ResourceHandlingOption?:string, MaxItems?:int, Marker?:string} $args
     * @return \AWS\Result<array{EvaluationResults?:array<array{EvalActionName:string, EvalResourceName?:string, EvalDecision:"allowed"|"explicitDeny"|"implicitDeny", MatchedStatements?:array<array{SourcePolicyId?:string, SourcePolicyType?:"user"|"group"|"role"|"aws-managed"|"user-managed"|"resource"|"none", StartPosition?:array{Line?:int, Column?:int}, EndPosition?:array{Line?:int, Column?:int}}>, MissingContextValues?:array<string>, OrganizationsDecisionDetail?:array{AllowedByOrganizations?:bool}, PermissionsBoundaryDecisionDetail?:array{AllowedByPermissionsBoundary?:bool}, EvalDecisionDetails?:array<string, "allowed"|"explicitDeny"|"implicitDeny">, ResourceSpecificResults?:array<array{EvalResourceName:string, EvalResourceDecision:"allowed"|"explicitDeny"|"implicitDeny", MatchedStatements?:array<array{SourcePolicyId?:string, SourcePolicyType?:"user"|"group"|"role"|"aws-managed"|"user-managed"|"resource"|"none", StartPosition?:array{Line?:int, Column?:int}, EndPosition?:array{Line?:int, Column?:int}}>, MissingContextValues?:array<string>, EvalDecisionDetails?:array<string, "allowed"|"explicitDeny"|"implicitDeny">, PermissionsBoundaryDecisionDetail?:array{AllowedByPermissionsBoundary?:bool}}>}>, IsTruncated?:bool, Marker?:string}>
     */
    public function simulateCustomPolicy(array $args): \AWS\Result { }

    /**
     * @param array{PolicyInputList:array<string>, PermissionsBoundaryPolicyInputList?:array<string>, ActionNames:array<string>, ResourceArns?:array<string>, ResourcePolicy?:string, ResourceOwner?:string, CallerArn?:string, ContextEntries?:array<array{ContextKeyName?:string, ContextKeyValues?:array<string>, ContextKeyType?:"string"|"stringList"|"numeric"|"numericList"|"boolean"|"booleanList"|"ip"|"ipList"|"binary"|"binaryList"|"date"|"dateList"}>, ResourceHandlingOption?:string, MaxItems?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EvaluationResults?:array<array{EvalActionName:string, EvalResourceName?:string, EvalDecision:"allowed"|"explicitDeny"|"implicitDeny", MatchedStatements?:array<array{SourcePolicyId?:string, SourcePolicyType?:"user"|"group"|"role"|"aws-managed"|"user-managed"|"resource"|"none", StartPosition?:array{Line?:int, Column?:int}, EndPosition?:array{Line?:int, Column?:int}}>, MissingContextValues?:array<string>, OrganizationsDecisionDetail?:array{AllowedByOrganizations?:bool}, PermissionsBoundaryDecisionDetail?:array{AllowedByPermissionsBoundary?:bool}, EvalDecisionDetails?:array<string, "allowed"|"explicitDeny"|"implicitDeny">, ResourceSpecificResults?:array<array{EvalResourceName:string, EvalResourceDecision:"allowed"|"explicitDeny"|"implicitDeny", MatchedStatements?:array<array{SourcePolicyId?:string, SourcePolicyType?:"user"|"group"|"role"|"aws-managed"|"user-managed"|"resource"|"none", StartPosition?:array{Line?:int, Column?:int}, EndPosition?:array{Line?:int, Column?:int}}>, MissingContextValues?:array<string>, EvalDecisionDetails?:array<string, "allowed"|"explicitDeny"|"implicitDeny">, PermissionsBoundaryDecisionDetail?:array{AllowedByPermissionsBoundary?:bool}}>}>, IsTruncated?:bool, Marker?:string}>
     */
    public function simulateCustomPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PolicySourceArn:string, PolicyInputList?:array<string>, PermissionsBoundaryPolicyInputList?:array<string>, ActionNames:array<string>, ResourceArns?:array<string>, ResourcePolicy?:string, ResourceOwner?:string, CallerArn?:string, ContextEntries?:array<array{ContextKeyName?:string, ContextKeyValues?:array<string>, ContextKeyType?:"string"|"stringList"|"numeric"|"numericList"|"boolean"|"booleanList"|"ip"|"ipList"|"binary"|"binaryList"|"date"|"dateList"}>, ResourceHandlingOption?:string, MaxItems?:int, Marker?:string} $args
     * @return \AWS\Result<array{EvaluationResults?:array<array{EvalActionName:string, EvalResourceName?:string, EvalDecision:"allowed"|"explicitDeny"|"implicitDeny", MatchedStatements?:array<array{SourcePolicyId?:string, SourcePolicyType?:"user"|"group"|"role"|"aws-managed"|"user-managed"|"resource"|"none", StartPosition?:array{Line?:int, Column?:int}, EndPosition?:array{Line?:int, Column?:int}}>, MissingContextValues?:array<string>, OrganizationsDecisionDetail?:array{AllowedByOrganizations?:bool}, PermissionsBoundaryDecisionDetail?:array{AllowedByPermissionsBoundary?:bool}, EvalDecisionDetails?:array<string, "allowed"|"explicitDeny"|"implicitDeny">, ResourceSpecificResults?:array<array{EvalResourceName:string, EvalResourceDecision:"allowed"|"explicitDeny"|"implicitDeny", MatchedStatements?:array<array{SourcePolicyId?:string, SourcePolicyType?:"user"|"group"|"role"|"aws-managed"|"user-managed"|"resource"|"none", StartPosition?:array{Line?:int, Column?:int}, EndPosition?:array{Line?:int, Column?:int}}>, MissingContextValues?:array<string>, EvalDecisionDetails?:array<string, "allowed"|"explicitDeny"|"implicitDeny">, PermissionsBoundaryDecisionDetail?:array{AllowedByPermissionsBoundary?:bool}}>}>, IsTruncated?:bool, Marker?:string}>
     */
    public function simulatePrincipalPolicy(array $args): \AWS\Result { }

    /**
     * @param array{PolicySourceArn:string, PolicyInputList?:array<string>, PermissionsBoundaryPolicyInputList?:array<string>, ActionNames:array<string>, ResourceArns?:array<string>, ResourcePolicy?:string, ResourceOwner?:string, CallerArn?:string, ContextEntries?:array<array{ContextKeyName?:string, ContextKeyValues?:array<string>, ContextKeyType?:"string"|"stringList"|"numeric"|"numericList"|"boolean"|"booleanList"|"ip"|"ipList"|"binary"|"binaryList"|"date"|"dateList"}>, ResourceHandlingOption?:string, MaxItems?:int, Marker?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EvaluationResults?:array<array{EvalActionName:string, EvalResourceName?:string, EvalDecision:"allowed"|"explicitDeny"|"implicitDeny", MatchedStatements?:array<array{SourcePolicyId?:string, SourcePolicyType?:"user"|"group"|"role"|"aws-managed"|"user-managed"|"resource"|"none", StartPosition?:array{Line?:int, Column?:int}, EndPosition?:array{Line?:int, Column?:int}}>, MissingContextValues?:array<string>, OrganizationsDecisionDetail?:array{AllowedByOrganizations?:bool}, PermissionsBoundaryDecisionDetail?:array{AllowedByPermissionsBoundary?:bool}, EvalDecisionDetails?:array<string, "allowed"|"explicitDeny"|"implicitDeny">, ResourceSpecificResults?:array<array{EvalResourceName:string, EvalResourceDecision:"allowed"|"explicitDeny"|"implicitDeny", MatchedStatements?:array<array{SourcePolicyId?:string, SourcePolicyType?:"user"|"group"|"role"|"aws-managed"|"user-managed"|"resource"|"none", StartPosition?:array{Line?:int, Column?:int}, EndPosition?:array{Line?:int, Column?:int}}>, MissingContextValues?:array<string>, EvalDecisionDetails?:array<string, "allowed"|"explicitDeny"|"implicitDeny">, PermissionsBoundaryDecisionDetail?:array{AllowedByPermissionsBoundary?:bool}}>}>, IsTruncated?:bool, Marker?:string}>
     */
    public function simulatePrincipalPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceProfileName:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<void>
     */
    public function tagInstanceProfile(array $args): \AWS\Result { }

    /**
     * @param array{InstanceProfileName:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagInstanceProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SerialNumber:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<void>
     */
    public function tagMFADevice(array $args): \AWS\Result { }

    /**
     * @param array{SerialNumber:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagMFADeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OpenIDConnectProviderArn:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<void>
     */
    public function tagOpenIDConnectProvider(array $args): \AWS\Result { }

    /**
     * @param array{OpenIDConnectProviderArn:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagOpenIDConnectProviderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PolicyArn:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<void>
     */
    public function tagPolicy(array $args): \AWS\Result { }

    /**
     * @param array{PolicyArn:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RoleName:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<void>
     */
    public function tagRole(array $args): \AWS\Result { }

    /**
     * @param array{RoleName:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagRoleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SAMLProviderArn:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<void>
     */
    public function tagSAMLProvider(array $args): \AWS\Result { }

    /**
     * @param array{SAMLProviderArn:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagSAMLProviderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServerCertificateName:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<void>
     */
    public function tagServerCertificate(array $args): \AWS\Result { }

    /**
     * @param array{ServerCertificateName:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagServerCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<void>
     */
    public function tagUser(array $args): \AWS\Result { }

    /**
     * @param array{UserName:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceProfileName:string, TagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagInstanceProfile(array $args): \AWS\Result { }

    /**
     * @param array{InstanceProfileName:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagInstanceProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SerialNumber:string, TagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagMFADevice(array $args): \AWS\Result { }

    /**
     * @param array{SerialNumber:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagMFADeviceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OpenIDConnectProviderArn:string, TagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagOpenIDConnectProvider(array $args): \AWS\Result { }

    /**
     * @param array{OpenIDConnectProviderArn:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagOpenIDConnectProviderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PolicyArn:string, TagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagPolicy(array $args): \AWS\Result { }

    /**
     * @param array{PolicyArn:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RoleName:string, TagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagRole(array $args): \AWS\Result { }

    /**
     * @param array{RoleName:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagRoleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SAMLProviderArn:string, TagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagSAMLProvider(array $args): \AWS\Result { }

    /**
     * @param array{SAMLProviderArn:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagSAMLProviderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServerCertificateName:string, TagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagServerCertificate(array $args): \AWS\Result { }

    /**
     * @param array{ServerCertificateName:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagServerCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName:string, TagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagUser(array $args): \AWS\Result { }

    /**
     * @param array{UserName:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName?:string, AccessKeyId:string, Status:"Active"|"Inactive"} $args
     * @return \AWS\Result<void>
     */
    public function updateAccessKey(array $args): \AWS\Result { }

    /**
     * @param array{UserName?:string, AccessKeyId:string, Status:"Active"|"Inactive"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateAccessKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MinimumPasswordLength?:int, RequireSymbols?:bool, RequireNumbers?:bool, RequireUppercaseCharacters?:bool, RequireLowercaseCharacters?:bool, AllowUsersToChangePassword?:bool, MaxPasswordAge?:int, PasswordReusePrevention?:int, HardExpiry?:bool} $args
     * @return \AWS\Result<void>
     */
    public function updateAccountPasswordPolicy(array $args = []): \AWS\Result { }

    /**
     * @param array{MinimumPasswordLength?:int, RequireSymbols?:bool, RequireNumbers?:bool, RequireUppercaseCharacters?:bool, RequireLowercaseCharacters?:bool, AllowUsersToChangePassword?:bool, MaxPasswordAge?:int, PasswordReusePrevention?:int, HardExpiry?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateAccountPasswordPolicyAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RoleName:string, PolicyDocument:string} $args
     * @return \AWS\Result<void>
     */
    public function updateAssumeRolePolicy(array $args): \AWS\Result { }

    /**
     * @param array{RoleName:string, PolicyDocument:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateAssumeRolePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupName:string, NewPath?:string, NewGroupName?:string} $args
     * @return \AWS\Result<void>
     */
    public function updateGroup(array $args): \AWS\Result { }

    /**
     * @param array{GroupName:string, NewPath?:string, NewGroupName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName:string, Password?:string, PasswordResetRequired?:bool} $args
     * @return \AWS\Result<void>
     */
    public function updateLoginProfile(array $args): \AWS\Result { }

    /**
     * @param array{UserName:string, Password?:string, PasswordResetRequired?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateLoginProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OpenIDConnectProviderArn:string, ThumbprintList:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function updateOpenIDConnectProviderThumbprint(array $args): \AWS\Result { }

    /**
     * @param array{OpenIDConnectProviderArn:string, ThumbprintList:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateOpenIDConnectProviderThumbprintAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RoleName:string, Description?:string, MaxSessionDuration?:int} $args
     * @return \AWS\Result<array{}>
     */
    public function updateRole(array $args): \AWS\Result { }

    /**
     * @param array{RoleName:string, Description?:string, MaxSessionDuration?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateRoleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RoleName:string, Description:string} $args
     * @return \AWS\Result<array{Role?:array{Path:string, RoleName:string, RoleId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, AssumeRolePolicyDocument?:string, Description?:string, MaxSessionDuration?:int, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>, RoleLastUsed?:array{LastUsedDate?:int|string|\DateTimeInterface, Region?:string}}}>
     */
    public function updateRoleDescription(array $args): \AWS\Result { }

    /**
     * @param array{RoleName:string, Description:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Role?:array{Path:string, RoleName:string, RoleId:string, Arn:string, CreateDate:int|string|\DateTimeInterface, AssumeRolePolicyDocument?:string, Description?:string, MaxSessionDuration?:int, PermissionsBoundary?:array{PermissionsBoundaryType?:"PermissionsBoundaryPolicy", PermissionsBoundaryArn?:string}, Tags?:array<array{Key:string, Value:string}>, RoleLastUsed?:array{LastUsedDate?:int|string|\DateTimeInterface, Region?:string}}}>
     */
    public function updateRoleDescriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SAMLMetadataDocument:string, SAMLProviderArn:string} $args
     * @return \AWS\Result<array{SAMLProviderArn?:string}>
     */
    public function updateSAMLProvider(array $args): \AWS\Result { }

    /**
     * @param array{SAMLMetadataDocument:string, SAMLProviderArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SAMLProviderArn?:string}>
     */
    public function updateSAMLProviderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName:string, SSHPublicKeyId:string, Status:"Active"|"Inactive"} $args
     * @return \AWS\Result<void>
     */
    public function updateSSHPublicKey(array $args): \AWS\Result { }

    /**
     * @param array{UserName:string, SSHPublicKeyId:string, Status:"Active"|"Inactive"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateSSHPublicKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServerCertificateName:string, NewPath?:string, NewServerCertificateName?:string} $args
     * @return \AWS\Result<void>
     */
    public function updateServerCertificate(array $args): \AWS\Result { }

    /**
     * @param array{ServerCertificateName:string, NewPath?:string, NewServerCertificateName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateServerCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName?:string, ServiceSpecificCredentialId:string, Status:"Active"|"Inactive"} $args
     * @return \AWS\Result<void>
     */
    public function updateServiceSpecificCredential(array $args): \AWS\Result { }

    /**
     * @param array{UserName?:string, ServiceSpecificCredentialId:string, Status:"Active"|"Inactive"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateServiceSpecificCredentialAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName?:string, CertificateId:string, Status:"Active"|"Inactive"} $args
     * @return \AWS\Result<void>
     */
    public function updateSigningCertificate(array $args): \AWS\Result { }

    /**
     * @param array{UserName?:string, CertificateId:string, Status:"Active"|"Inactive"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateSigningCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName:string, NewPath?:string, NewUserName?:string} $args
     * @return \AWS\Result<void>
     */
    public function updateUser(array $args): \AWS\Result { }

    /**
     * @param array{UserName:string, NewPath?:string, NewUserName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName:string, SSHPublicKeyBody:string} $args
     * @return \AWS\Result<array{SSHPublicKey?:array{UserName:string, SSHPublicKeyId:string, Fingerprint:string, SSHPublicKeyBody:string, Status:"Active"|"Inactive", UploadDate?:int|string|\DateTimeInterface}}>
     */
    public function uploadSSHPublicKey(array $args): \AWS\Result { }

    /**
     * @param array{UserName:string, SSHPublicKeyBody:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SSHPublicKey?:array{UserName:string, SSHPublicKeyId:string, Fingerprint:string, SSHPublicKeyBody:string, Status:"Active"|"Inactive", UploadDate?:int|string|\DateTimeInterface}}>
     */
    public function uploadSSHPublicKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Path?:string, ServerCertificateName:string, CertificateBody:string, PrivateKey:string, CertificateChain?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{ServerCertificateMetadata?:array{Path:string, ServerCertificateName:string, ServerCertificateId:string, Arn:string, UploadDate?:int|string|\DateTimeInterface, Expiration?:int|string|\DateTimeInterface}, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function uploadServerCertificate(array $args): \AWS\Result { }

    /**
     * @param array{Path?:string, ServerCertificateName:string, CertificateBody:string, PrivateKey:string, CertificateChain?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServerCertificateMetadata?:array{Path:string, ServerCertificateName:string, ServerCertificateId:string, Arn:string, UploadDate?:int|string|\DateTimeInterface, Expiration?:int|string|\DateTimeInterface}, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function uploadServerCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserName?:string, CertificateBody:string} $args
     * @return \AWS\Result<array{Certificate:array{UserName:string, CertificateId:string, CertificateBody:string, Status:"Active"|"Inactive", UploadDate?:int|string|\DateTimeInterface}}>
     */
    public function uploadSigningCertificate(array $args): \AWS\Result { }

    /**
     * @param array{UserName?:string, CertificateBody:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Certificate:array{UserName:string, CertificateId:string, CertificateBody:string, Status:"Active"|"Inactive", UploadDate?:int|string|\DateTimeInterface}}>
     */
    public function uploadSigningCertificateAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
