<?php
namespace AWS\SSOAdmin;

class SSOAdminClient
{
    /**
     * @param array{CustomerManagedPolicyReference:array{Name:string, Path?:string}, InstanceArn:string, PermissionSetArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function attachCustomerManagedPolicyReferenceToPermissionSet(array $args): \AWS\Result { }

    /**
     * @param array{CustomerManagedPolicyReference:array{Name:string, Path?:string}, InstanceArn:string, PermissionSetArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function attachCustomerManagedPolicyReferenceToPermissionSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceArn:string, ManagedPolicyArn:string, PermissionSetArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function attachManagedPolicyToPermissionSet(array $args): \AWS\Result { }

    /**
     * @param array{InstanceArn:string, ManagedPolicyArn:string, PermissionSetArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function attachManagedPolicyToPermissionSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceArn:string, PermissionSetArn:string, PrincipalId:string, PrincipalType:"USER"|"GROUP", TargetId:string, TargetType:"AWS_ACCOUNT"} $args
     * @return \AWS\Result<array{AccountAssignmentCreationStatus?:array{CreatedDate?:int|string|\DateTimeInterface, FailureReason?:string, PermissionSetArn?:string, PrincipalId?:string, PrincipalType?:"USER"|"GROUP", RequestId?:string, Status?:"IN_PROGRESS"|"FAILED"|"SUCCEEDED", TargetId?:string, TargetType?:"AWS_ACCOUNT"}}>
     */
    public function createAccountAssignment(array $args): \AWS\Result { }

    /**
     * @param array{InstanceArn:string, PermissionSetArn:string, PrincipalId:string, PrincipalType:"USER"|"GROUP", TargetId:string, TargetType:"AWS_ACCOUNT"} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountAssignmentCreationStatus?:array{CreatedDate?:int|string|\DateTimeInterface, FailureReason?:string, PermissionSetArn?:string, PrincipalId?:string, PrincipalType?:"USER"|"GROUP", RequestId?:string, Status?:"IN_PROGRESS"|"FAILED"|"SUCCEEDED", TargetId?:string, TargetType?:"AWS_ACCOUNT"}}>
     */
    public function createAccountAssignmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationProviderArn:string, ClientToken?:string, Description?:string, InstanceArn:string, Name:string, PortalOptions?:array{SignInOptions?:array{ApplicationUrl?:string, Origin:"IDENTITY_CENTER"|"APPLICATION"}, Visibility?:"ENABLED"|"DISABLED"}, Status?:"ENABLED"|"DISABLED", Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{ApplicationArn?:string}>
     */
    public function createApplication(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationProviderArn:string, ClientToken?:string, Description?:string, InstanceArn:string, Name:string, PortalOptions?:array{SignInOptions?:array{ApplicationUrl?:string, Origin:"IDENTITY_CENTER"|"APPLICATION"}, Visibility?:"ENABLED"|"DISABLED"}, Status?:"ENABLED"|"DISABLED", Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationArn?:string}>
     */
    public function createApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationArn:string, PrincipalId:string, PrincipalType:"USER"|"GROUP"} $args
     * @return \AWS\Result<array{}>
     */
    public function createApplicationAssignment(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationArn:string, PrincipalId:string, PrincipalType:"USER"|"GROUP"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createApplicationAssignmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, Name?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{InstanceArn?:string}>
     */
    public function createInstance(array $args = []): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, Name?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{InstanceArn?:string}>
     */
    public function createInstanceAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceAccessControlAttributeConfiguration:array{AccessControlAttributes:array<array{Key:string, Value:array{Source:array<string>}}>}, InstanceArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function createInstanceAccessControlAttributeConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{InstanceAccessControlAttributeConfiguration:array{AccessControlAttributes:array<array{Key:string, Value:array{Source:array<string>}}>}, InstanceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createInstanceAccessControlAttributeConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Description?:string, InstanceArn:string, Name:string, RelayState?:string, SessionDuration?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{PermissionSet?:array{CreatedDate?:int|string|\DateTimeInterface, Description?:string, Name?:string, PermissionSetArn?:string, RelayState?:string, SessionDuration?:string}}>
     */
    public function createPermissionSet(array $args): \AWS\Result { }

    /**
     * @param array{Description?:string, InstanceArn:string, Name:string, RelayState?:string, SessionDuration?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{PermissionSet?:array{CreatedDate?:int|string|\DateTimeInterface, Description?:string, Name?:string, PermissionSetArn?:string, RelayState?:string, SessionDuration?:string}}>
     */
    public function createPermissionSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, InstanceArn:string, Name:string, Tags?:array<array{Key:string, Value:string}>, TrustedTokenIssuerConfiguration:array{OidcJwtConfiguration?:array{ClaimAttributePath:string, IdentityStoreAttributePath:string, IssuerUrl:string, JwksRetrievalOption:"OPEN_ID_DISCOVERY"}}, TrustedTokenIssuerType:"OIDC_JWT"} $args
     * @return \AWS\Result<array{TrustedTokenIssuerArn?:string}>
     */
    public function createTrustedTokenIssuer(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, InstanceArn:string, Name:string, Tags?:array<array{Key:string, Value:string}>, TrustedTokenIssuerConfiguration:array{OidcJwtConfiguration?:array{ClaimAttributePath:string, IdentityStoreAttributePath:string, IssuerUrl:string, JwksRetrievalOption:"OPEN_ID_DISCOVERY"}}, TrustedTokenIssuerType:"OIDC_JWT"} $args
     * @return \GuzzleHttp\Promise\Promise<array{TrustedTokenIssuerArn?:string}>
     */
    public function createTrustedTokenIssuerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceArn:string, PermissionSetArn:string, PrincipalId:string, PrincipalType:"USER"|"GROUP", TargetId:string, TargetType:"AWS_ACCOUNT"} $args
     * @return \AWS\Result<array{AccountAssignmentDeletionStatus?:array{CreatedDate?:int|string|\DateTimeInterface, FailureReason?:string, PermissionSetArn?:string, PrincipalId?:string, PrincipalType?:"USER"|"GROUP", RequestId?:string, Status?:"IN_PROGRESS"|"FAILED"|"SUCCEEDED", TargetId?:string, TargetType?:"AWS_ACCOUNT"}}>
     */
    public function deleteAccountAssignment(array $args): \AWS\Result { }

    /**
     * @param array{InstanceArn:string, PermissionSetArn:string, PrincipalId:string, PrincipalType:"USER"|"GROUP", TargetId:string, TargetType:"AWS_ACCOUNT"} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountAssignmentDeletionStatus?:array{CreatedDate?:int|string|\DateTimeInterface, FailureReason?:string, PermissionSetArn?:string, PrincipalId?:string, PrincipalType?:"USER"|"GROUP", RequestId?:string, Status?:"IN_PROGRESS"|"FAILED"|"SUCCEEDED", TargetId?:string, TargetType?:"AWS_ACCOUNT"}}>
     */
    public function deleteAccountAssignmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteApplication(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationArn:string, Scope:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteApplicationAccessScope(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationArn:string, Scope:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteApplicationAccessScopeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationArn:string, PrincipalId:string, PrincipalType:"USER"|"GROUP"} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteApplicationAssignment(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationArn:string, PrincipalId:string, PrincipalType:"USER"|"GROUP"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteApplicationAssignmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationArn:string, AuthenticationMethodType:"IAM"} $args
     * @return \AWS\Result<void>
     */
    public function deleteApplicationAuthenticationMethod(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationArn:string, AuthenticationMethodType:"IAM"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteApplicationAuthenticationMethodAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationArn:string, GrantType:"authorization_code"|"refresh_token"|"urn:ietf:params:oauth:grant-type:jwt-bearer"|"urn:ietf:params:oauth:grant-type:token-exchange"} $args
     * @return \AWS\Result<void>
     */
    public function deleteApplicationGrant(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationArn:string, GrantType:"authorization_code"|"refresh_token"|"urn:ietf:params:oauth:grant-type:jwt-bearer"|"urn:ietf:params:oauth:grant-type:token-exchange"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteApplicationGrantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceArn:string, PermissionSetArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteInlinePolicyFromPermissionSet(array $args): \AWS\Result { }

    /**
     * @param array{InstanceArn:string, PermissionSetArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteInlinePolicyFromPermissionSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteInstance(array $args): \AWS\Result { }

    /**
     * @param array{InstanceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteInstanceAccessControlAttributeConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{InstanceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteInstanceAccessControlAttributeConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceArn:string, PermissionSetArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deletePermissionSet(array $args): \AWS\Result { }

    /**
     * @param array{InstanceArn:string, PermissionSetArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deletePermissionSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceArn:string, PermissionSetArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deletePermissionsBoundaryFromPermissionSet(array $args): \AWS\Result { }

    /**
     * @param array{InstanceArn:string, PermissionSetArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deletePermissionsBoundaryFromPermissionSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrustedTokenIssuerArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteTrustedTokenIssuer(array $args): \AWS\Result { }

    /**
     * @param array{TrustedTokenIssuerArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteTrustedTokenIssuerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountAssignmentCreationRequestId:string, InstanceArn:string} $args
     * @return \AWS\Result<array{AccountAssignmentCreationStatus?:array{CreatedDate?:int|string|\DateTimeInterface, FailureReason?:string, PermissionSetArn?:string, PrincipalId?:string, PrincipalType?:"USER"|"GROUP", RequestId?:string, Status?:"IN_PROGRESS"|"FAILED"|"SUCCEEDED", TargetId?:string, TargetType?:"AWS_ACCOUNT"}}>
     */
    public function describeAccountAssignmentCreationStatus(array $args): \AWS\Result { }

    /**
     * @param array{AccountAssignmentCreationRequestId:string, InstanceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountAssignmentCreationStatus?:array{CreatedDate?:int|string|\DateTimeInterface, FailureReason?:string, PermissionSetArn?:string, PrincipalId?:string, PrincipalType?:"USER"|"GROUP", RequestId?:string, Status?:"IN_PROGRESS"|"FAILED"|"SUCCEEDED", TargetId?:string, TargetType?:"AWS_ACCOUNT"}}>
     */
    public function describeAccountAssignmentCreationStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountAssignmentDeletionRequestId:string, InstanceArn:string} $args
     * @return \AWS\Result<array{AccountAssignmentDeletionStatus?:array{CreatedDate?:int|string|\DateTimeInterface, FailureReason?:string, PermissionSetArn?:string, PrincipalId?:string, PrincipalType?:"USER"|"GROUP", RequestId?:string, Status?:"IN_PROGRESS"|"FAILED"|"SUCCEEDED", TargetId?:string, TargetType?:"AWS_ACCOUNT"}}>
     */
    public function describeAccountAssignmentDeletionStatus(array $args): \AWS\Result { }

    /**
     * @param array{AccountAssignmentDeletionRequestId:string, InstanceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountAssignmentDeletionStatus?:array{CreatedDate?:int|string|\DateTimeInterface, FailureReason?:string, PermissionSetArn?:string, PrincipalId?:string, PrincipalType?:"USER"|"GROUP", RequestId?:string, Status?:"IN_PROGRESS"|"FAILED"|"SUCCEEDED", TargetId?:string, TargetType?:"AWS_ACCOUNT"}}>
     */
    public function describeAccountAssignmentDeletionStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationArn:string} $args
     * @return \AWS\Result<array{ApplicationAccount?:string, ApplicationArn?:string, ApplicationProviderArn?:string, CreatedDate?:int|string|\DateTimeInterface, Description?:string, InstanceArn?:string, Name?:string, PortalOptions?:array{SignInOptions?:array{ApplicationUrl?:string, Origin:"IDENTITY_CENTER"|"APPLICATION"}, Visibility?:"ENABLED"|"DISABLED"}, Status?:"ENABLED"|"DISABLED"}>
     */
    public function describeApplication(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationAccount?:string, ApplicationArn?:string, ApplicationProviderArn?:string, CreatedDate?:int|string|\DateTimeInterface, Description?:string, InstanceArn?:string, Name?:string, PortalOptions?:array{SignInOptions?:array{ApplicationUrl?:string, Origin:"IDENTITY_CENTER"|"APPLICATION"}, Visibility?:"ENABLED"|"DISABLED"}, Status?:"ENABLED"|"DISABLED"}>
     */
    public function describeApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationArn:string, PrincipalId:string, PrincipalType:"USER"|"GROUP"} $args
     * @return \AWS\Result<array{ApplicationArn?:string, PrincipalId?:string, PrincipalType?:"USER"|"GROUP"}>
     */
    public function describeApplicationAssignment(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationArn:string, PrincipalId:string, PrincipalType:"USER"|"GROUP"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationArn?:string, PrincipalId?:string, PrincipalType?:"USER"|"GROUP"}>
     */
    public function describeApplicationAssignmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationProviderArn:string} $args
     * @return \AWS\Result<array{ApplicationProviderArn:string, DisplayData?:array{Description?:string, DisplayName?:string, IconUrl?:string}, FederationProtocol?:"SAML"|"OAUTH", ResourceServerConfig?:array{Scopes?:array<string, array{DetailedTitle?:string, LongDescription?:string}>}}>
     */
    public function describeApplicationProvider(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationProviderArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationProviderArn:string, DisplayData?:array{Description?:string, DisplayName?:string, IconUrl?:string}, FederationProtocol?:"SAML"|"OAUTH", ResourceServerConfig?:array{Scopes?:array<string, array{DetailedTitle?:string, LongDescription?:string}>}}>
     */
    public function describeApplicationProviderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceArn:string} $args
     * @return \AWS\Result<array{CreatedDate?:int|string|\DateTimeInterface, IdentityStoreId?:string, InstanceArn?:string, Name?:string, OwnerAccountId?:string, Status?:"CREATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"ACTIVE"}>
     */
    public function describeInstance(array $args): \AWS\Result { }

    /**
     * @param array{InstanceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CreatedDate?:int|string|\DateTimeInterface, IdentityStoreId?:string, InstanceArn?:string, Name?:string, OwnerAccountId?:string, Status?:"CREATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"ACTIVE"}>
     */
    public function describeInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceArn:string} $args
     * @return \AWS\Result<array{InstanceAccessControlAttributeConfiguration?:array{AccessControlAttributes:array<array{Key:string, Value:array{Source:array<string>}}>}, Status?:"ENABLED"|"CREATION_IN_PROGRESS"|"CREATION_FAILED", StatusReason?:string}>
     */
    public function describeInstanceAccessControlAttributeConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{InstanceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{InstanceAccessControlAttributeConfiguration?:array{AccessControlAttributes:array<array{Key:string, Value:array{Source:array<string>}}>}, Status?:"ENABLED"|"CREATION_IN_PROGRESS"|"CREATION_FAILED", StatusReason?:string}>
     */
    public function describeInstanceAccessControlAttributeConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceArn:string, PermissionSetArn:string} $args
     * @return \AWS\Result<array{PermissionSet?:array{CreatedDate?:int|string|\DateTimeInterface, Description?:string, Name?:string, PermissionSetArn?:string, RelayState?:string, SessionDuration?:string}}>
     */
    public function describePermissionSet(array $args): \AWS\Result { }

    /**
     * @param array{InstanceArn:string, PermissionSetArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PermissionSet?:array{CreatedDate?:int|string|\DateTimeInterface, Description?:string, Name?:string, PermissionSetArn?:string, RelayState?:string, SessionDuration?:string}}>
     */
    public function describePermissionSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceArn:string, ProvisionPermissionSetRequestId:string} $args
     * @return \AWS\Result<array{PermissionSetProvisioningStatus?:array{AccountId?:string, CreatedDate?:int|string|\DateTimeInterface, FailureReason?:string, PermissionSetArn?:string, RequestId?:string, Status?:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"}}>
     */
    public function describePermissionSetProvisioningStatus(array $args): \AWS\Result { }

    /**
     * @param array{InstanceArn:string, ProvisionPermissionSetRequestId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PermissionSetProvisioningStatus?:array{AccountId?:string, CreatedDate?:int|string|\DateTimeInterface, FailureReason?:string, PermissionSetArn?:string, RequestId?:string, Status?:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"}}>
     */
    public function describePermissionSetProvisioningStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrustedTokenIssuerArn:string} $args
     * @return \AWS\Result<array{Name?:string, TrustedTokenIssuerArn?:string, TrustedTokenIssuerConfiguration?:array{OidcJwtConfiguration?:array{ClaimAttributePath:string, IdentityStoreAttributePath:string, IssuerUrl:string, JwksRetrievalOption:"OPEN_ID_DISCOVERY"}}, TrustedTokenIssuerType?:"OIDC_JWT"}>
     */
    public function describeTrustedTokenIssuer(array $args): \AWS\Result { }

    /**
     * @param array{TrustedTokenIssuerArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name?:string, TrustedTokenIssuerArn?:string, TrustedTokenIssuerConfiguration?:array{OidcJwtConfiguration?:array{ClaimAttributePath:string, IdentityStoreAttributePath:string, IssuerUrl:string, JwksRetrievalOption:"OPEN_ID_DISCOVERY"}}, TrustedTokenIssuerType?:"OIDC_JWT"}>
     */
    public function describeTrustedTokenIssuerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CustomerManagedPolicyReference:array{Name:string, Path?:string}, InstanceArn:string, PermissionSetArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function detachCustomerManagedPolicyReferenceFromPermissionSet(array $args): \AWS\Result { }

    /**
     * @param array{CustomerManagedPolicyReference:array{Name:string, Path?:string}, InstanceArn:string, PermissionSetArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function detachCustomerManagedPolicyReferenceFromPermissionSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceArn:string, ManagedPolicyArn:string, PermissionSetArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function detachManagedPolicyFromPermissionSet(array $args): \AWS\Result { }

    /**
     * @param array{InstanceArn:string, ManagedPolicyArn:string, PermissionSetArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function detachManagedPolicyFromPermissionSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationArn:string, Scope:string} $args
     * @return \AWS\Result<array{AuthorizedTargets?:array<string>, Scope:string}>
     */
    public function getApplicationAccessScope(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationArn:string, Scope:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AuthorizedTargets?:array<string>, Scope:string}>
     */
    public function getApplicationAccessScopeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationArn:string} $args
     * @return \AWS\Result<array{AssignmentRequired:bool}>
     */
    public function getApplicationAssignmentConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AssignmentRequired:bool}>
     */
    public function getApplicationAssignmentConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationArn:string, AuthenticationMethodType:"IAM"} $args
     * @return \AWS\Result<array{AuthenticationMethod?:array{Iam?:array{ActorPolicy:array{}}}}>
     */
    public function getApplicationAuthenticationMethod(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationArn:string, AuthenticationMethodType:"IAM"} $args
     * @return \GuzzleHttp\Promise\Promise<array{AuthenticationMethod?:array{Iam?:array{ActorPolicy:array{}}}}>
     */
    public function getApplicationAuthenticationMethodAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationArn:string, GrantType:"authorization_code"|"refresh_token"|"urn:ietf:params:oauth:grant-type:jwt-bearer"|"urn:ietf:params:oauth:grant-type:token-exchange"} $args
     * @return \AWS\Result<array{Grant:array{AuthorizationCode?:array{RedirectUris?:array<string>}, JwtBearer?:array{AuthorizedTokenIssuers?:array<array{AuthorizedAudiences?:array<string>, TrustedTokenIssuerArn?:string}>}, RefreshToken?:array{}, TokenExchange?:array{}}}>
     */
    public function getApplicationGrant(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationArn:string, GrantType:"authorization_code"|"refresh_token"|"urn:ietf:params:oauth:grant-type:jwt-bearer"|"urn:ietf:params:oauth:grant-type:token-exchange"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Grant:array{AuthorizationCode?:array{RedirectUris?:array<string>}, JwtBearer?:array{AuthorizedTokenIssuers?:array<array{AuthorizedAudiences?:array<string>, TrustedTokenIssuerArn?:string}>}, RefreshToken?:array{}, TokenExchange?:array{}}}>
     */
    public function getApplicationGrantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceArn:string, PermissionSetArn:string} $args
     * @return \AWS\Result<array{InlinePolicy?:string}>
     */
    public function getInlinePolicyForPermissionSet(array $args): \AWS\Result { }

    /**
     * @param array{InstanceArn:string, PermissionSetArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{InlinePolicy?:string}>
     */
    public function getInlinePolicyForPermissionSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceArn:string, PermissionSetArn:string} $args
     * @return \AWS\Result<array{PermissionsBoundary?:array{CustomerManagedPolicyReference?:array{Name:string, Path?:string}, ManagedPolicyArn?:string}}>
     */
    public function getPermissionsBoundaryForPermissionSet(array $args): \AWS\Result { }

    /**
     * @param array{InstanceArn:string, PermissionSetArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PermissionsBoundary?:array{CustomerManagedPolicyReference?:array{Name:string, Path?:string}, ManagedPolicyArn?:string}}>
     */
    public function getPermissionsBoundaryForPermissionSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filter?:array{Status?:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"}, InstanceArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{AccountAssignmentsCreationStatus?:array<array{CreatedDate?:int|string|\DateTimeInterface, RequestId?:string, Status?:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"}>, NextToken?:string}>
     */
    public function listAccountAssignmentCreationStatus(array $args): \AWS\Result { }

    /**
     * @param array{Filter?:array{Status?:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"}, InstanceArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountAssignmentsCreationStatus?:array<array{CreatedDate?:int|string|\DateTimeInterface, RequestId?:string, Status?:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"}>, NextToken?:string}>
     */
    public function listAccountAssignmentCreationStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filter?:array{Status?:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"}, InstanceArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{AccountAssignmentsDeletionStatus?:array<array{CreatedDate?:int|string|\DateTimeInterface, RequestId?:string, Status?:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"}>, NextToken?:string}>
     */
    public function listAccountAssignmentDeletionStatus(array $args): \AWS\Result { }

    /**
     * @param array{Filter?:array{Status?:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"}, InstanceArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountAssignmentsDeletionStatus?:array<array{CreatedDate?:int|string|\DateTimeInterface, RequestId?:string, Status?:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"}>, NextToken?:string}>
     */
    public function listAccountAssignmentDeletionStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, InstanceArn:string, MaxResults?:int, NextToken?:string, PermissionSetArn:string} $args
     * @return \AWS\Result<array{AccountAssignments?:array<array{AccountId?:string, PermissionSetArn?:string, PrincipalId?:string, PrincipalType?:"USER"|"GROUP"}>, NextToken?:string}>
     */
    public function listAccountAssignments(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, InstanceArn:string, MaxResults?:int, NextToken?:string, PermissionSetArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountAssignments?:array<array{AccountId?:string, PermissionSetArn?:string, PrincipalId?:string, PrincipalType?:"USER"|"GROUP"}>, NextToken?:string}>
     */
    public function listAccountAssignmentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filter?:array{AccountId?:string}, InstanceArn:string, MaxResults?:int, NextToken?:string, PrincipalId:string, PrincipalType:"USER"|"GROUP"} $args
     * @return \AWS\Result<array{AccountAssignments?:array<array{AccountId?:string, PermissionSetArn?:string, PrincipalId?:string, PrincipalType?:"USER"|"GROUP"}>, NextToken?:string}>
     */
    public function listAccountAssignmentsForPrincipal(array $args): \AWS\Result { }

    /**
     * @param array{Filter?:array{AccountId?:string}, InstanceArn:string, MaxResults?:int, NextToken?:string, PrincipalId:string, PrincipalType:"USER"|"GROUP"} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountAssignments?:array<array{AccountId?:string, PermissionSetArn?:string, PrincipalId?:string, PrincipalType?:"USER"|"GROUP"}>, NextToken?:string}>
     */
    public function listAccountAssignmentsForPrincipalAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceArn:string, MaxResults?:int, NextToken?:string, PermissionSetArn:string, ProvisioningStatus?:"LATEST_PERMISSION_SET_PROVISIONED"|"LATEST_PERMISSION_SET_NOT_PROVISIONED"} $args
     * @return \AWS\Result<array{AccountIds?:array<string>, NextToken?:string}>
     */
    public function listAccountsForProvisionedPermissionSet(array $args): \AWS\Result { }

    /**
     * @param array{InstanceArn:string, MaxResults?:int, NextToken?:string, PermissionSetArn:string, ProvisioningStatus?:"LATEST_PERMISSION_SET_PROVISIONED"|"LATEST_PERMISSION_SET_NOT_PROVISIONED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountIds?:array<string>, NextToken?:string}>
     */
    public function listAccountsForProvisionedPermissionSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Scopes:array<array{AuthorizedTargets?:array<string>, Scope:string}>}>
     */
    public function listApplicationAccessScopes(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Scopes:array<array{AuthorizedTargets?:array<string>, Scope:string}>}>
     */
    public function listApplicationAccessScopesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ApplicationAssignments?:array<array{ApplicationArn:string, PrincipalId:string, PrincipalType:"USER"|"GROUP"}>, NextToken?:string}>
     */
    public function listApplicationAssignments(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationAssignments?:array<array{ApplicationArn:string, PrincipalId:string, PrincipalType:"USER"|"GROUP"}>, NextToken?:string}>
     */
    public function listApplicationAssignmentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filter?:array{ApplicationArn?:string}, InstanceArn:string, MaxResults?:int, NextToken?:string, PrincipalId:string, PrincipalType:"USER"|"GROUP"} $args
     * @return \AWS\Result<array{ApplicationAssignments?:array<array{ApplicationArn?:string, PrincipalId?:string, PrincipalType?:"USER"|"GROUP"}>, NextToken?:string}>
     */
    public function listApplicationAssignmentsForPrincipal(array $args): \AWS\Result { }

    /**
     * @param array{Filter?:array{ApplicationArn?:string}, InstanceArn:string, MaxResults?:int, NextToken?:string, PrincipalId:string, PrincipalType:"USER"|"GROUP"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationAssignments?:array<array{ApplicationArn?:string, PrincipalId?:string, PrincipalType?:"USER"|"GROUP"}>, NextToken?:string}>
     */
    public function listApplicationAssignmentsForPrincipalAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationArn:string, NextToken?:string} $args
     * @return \AWS\Result<array{AuthenticationMethods?:array<array{AuthenticationMethod?:array{Iam?:array{ActorPolicy:array{}}}, AuthenticationMethodType?:"IAM"}>, NextToken?:string}>
     */
    public function listApplicationAuthenticationMethods(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationArn:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AuthenticationMethods?:array<array{AuthenticationMethod?:array{Iam?:array{ActorPolicy:array{}}}, AuthenticationMethodType?:"IAM"}>, NextToken?:string}>
     */
    public function listApplicationAuthenticationMethodsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationArn:string, NextToken?:string} $args
     * @return \AWS\Result<array{Grants:array<array{Grant:array{AuthorizationCode?:array{RedirectUris?:array<string>}, JwtBearer?:array{AuthorizedTokenIssuers?:array<array{AuthorizedAudiences?:array<string>, TrustedTokenIssuerArn?:string}>}, RefreshToken?:array{}, TokenExchange?:array{}}, GrantType:"authorization_code"|"refresh_token"|"urn:ietf:params:oauth:grant-type:jwt-bearer"|"urn:ietf:params:oauth:grant-type:token-exchange"}>, NextToken?:string}>
     */
    public function listApplicationGrants(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationArn:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Grants:array<array{Grant:array{AuthorizationCode?:array{RedirectUris?:array<string>}, JwtBearer?:array{AuthorizedTokenIssuers?:array<array{AuthorizedAudiences?:array<string>, TrustedTokenIssuerArn?:string}>}, RefreshToken?:array{}, TokenExchange?:array{}}, GrantType:"authorization_code"|"refresh_token"|"urn:ietf:params:oauth:grant-type:jwt-bearer"|"urn:ietf:params:oauth:grant-type:token-exchange"}>, NextToken?:string}>
     */
    public function listApplicationGrantsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ApplicationProviders?:array<array{ApplicationProviderArn:string, DisplayData?:array{Description?:string, DisplayName?:string, IconUrl?:string}, FederationProtocol?:"SAML"|"OAUTH", ResourceServerConfig?:array{Scopes?:array<string, array{DetailedTitle?:string, LongDescription?:string}>}}>, NextToken?:string}>
     */
    public function listApplicationProviders(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ApplicationProviders?:array<array{ApplicationProviderArn:string, DisplayData?:array{Description?:string, DisplayName?:string, IconUrl?:string}, FederationProtocol?:"SAML"|"OAUTH", ResourceServerConfig?:array{Scopes?:array<string, array{DetailedTitle?:string, LongDescription?:string}>}}>, NextToken?:string}>
     */
    public function listApplicationProvidersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filter?:array{ApplicationAccount?:string, ApplicationProvider?:string}, InstanceArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Applications?:array<array{ApplicationAccount?:string, ApplicationArn?:string, ApplicationProviderArn?:string, CreatedDate?:int|string|\DateTimeInterface, Description?:string, InstanceArn?:string, Name?:string, PortalOptions?:array{SignInOptions?:array{ApplicationUrl?:string, Origin:"IDENTITY_CENTER"|"APPLICATION"}, Visibility?:"ENABLED"|"DISABLED"}, Status?:"ENABLED"|"DISABLED"}>, NextToken?:string}>
     */
    public function listApplications(array $args): \AWS\Result { }

    /**
     * @param array{Filter?:array{ApplicationAccount?:string, ApplicationProvider?:string}, InstanceArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Applications?:array<array{ApplicationAccount?:string, ApplicationArn?:string, ApplicationProviderArn?:string, CreatedDate?:int|string|\DateTimeInterface, Description?:string, InstanceArn?:string, Name?:string, PortalOptions?:array{SignInOptions?:array{ApplicationUrl?:string, Origin:"IDENTITY_CENTER"|"APPLICATION"}, Visibility?:"ENABLED"|"DISABLED"}, Status?:"ENABLED"|"DISABLED"}>, NextToken?:string}>
     */
    public function listApplicationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceArn:string, MaxResults?:int, NextToken?:string, PermissionSetArn:string} $args
     * @return \AWS\Result<array{CustomerManagedPolicyReferences?:array<array{Name:string, Path?:string}>, NextToken?:string}>
     */
    public function listCustomerManagedPolicyReferencesInPermissionSet(array $args): \AWS\Result { }

    /**
     * @param array{InstanceArn:string, MaxResults?:int, NextToken?:string, PermissionSetArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CustomerManagedPolicyReferences?:array<array{Name:string, Path?:string}>, NextToken?:string}>
     */
    public function listCustomerManagedPolicyReferencesInPermissionSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Instances?:array<array{CreatedDate?:int|string|\DateTimeInterface, IdentityStoreId?:string, InstanceArn?:string, Name?:string, OwnerAccountId?:string, Status?:"CREATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"ACTIVE"}>, NextToken?:string}>
     */
    public function listInstances(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Instances?:array<array{CreatedDate?:int|string|\DateTimeInterface, IdentityStoreId?:string, InstanceArn?:string, Name?:string, OwnerAccountId?:string, Status?:"CREATE_IN_PROGRESS"|"DELETE_IN_PROGRESS"|"ACTIVE"}>, NextToken?:string}>
     */
    public function listInstancesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceArn:string, MaxResults?:int, NextToken?:string, PermissionSetArn:string} $args
     * @return \AWS\Result<array{AttachedManagedPolicies?:array<array{Arn?:string, Name?:string}>, NextToken?:string}>
     */
    public function listManagedPoliciesInPermissionSet(array $args): \AWS\Result { }

    /**
     * @param array{InstanceArn:string, MaxResults?:int, NextToken?:string, PermissionSetArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AttachedManagedPolicies?:array<array{Arn?:string, Name?:string}>, NextToken?:string}>
     */
    public function listManagedPoliciesInPermissionSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filter?:array{Status?:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"}, InstanceArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, PermissionSetsProvisioningStatus?:array<array{CreatedDate?:int|string|\DateTimeInterface, RequestId?:string, Status?:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"}>}>
     */
    public function listPermissionSetProvisioningStatus(array $args): \AWS\Result { }

    /**
     * @param array{Filter?:array{Status?:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"}, InstanceArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, PermissionSetsProvisioningStatus?:array<array{CreatedDate?:int|string|\DateTimeInterface, RequestId?:string, Status?:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"}>}>
     */
    public function listPermissionSetProvisioningStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, PermissionSets?:array<string>}>
     */
    public function listPermissionSets(array $args): \AWS\Result { }

    /**
     * @param array{InstanceArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, PermissionSets?:array<string>}>
     */
    public function listPermissionSetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, InstanceArn:string, MaxResults?:int, NextToken?:string, ProvisioningStatus?:"LATEST_PERMISSION_SET_PROVISIONED"|"LATEST_PERMISSION_SET_NOT_PROVISIONED"} $args
     * @return \AWS\Result<array{NextToken?:string, PermissionSets?:array<string>}>
     */
    public function listPermissionSetsProvisionedToAccount(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, InstanceArn:string, MaxResults?:int, NextToken?:string, ProvisioningStatus?:"LATEST_PERMISSION_SET_PROVISIONED"|"LATEST_PERMISSION_SET_NOT_PROVISIONED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, PermissionSets?:array<string>}>
     */
    public function listPermissionSetsProvisionedToAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceArn?:string, NextToken?:string, ResourceArn:string} $args
     * @return \AWS\Result<array{NextToken?:string, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{InstanceArn?:string, NextToken?:string, ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, TrustedTokenIssuers?:array<array{Name?:string, TrustedTokenIssuerArn?:string, TrustedTokenIssuerType?:"OIDC_JWT"}>}>
     */
    public function listTrustedTokenIssuers(array $args): \AWS\Result { }

    /**
     * @param array{InstanceArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, TrustedTokenIssuers?:array<array{Name?:string, TrustedTokenIssuerArn?:string, TrustedTokenIssuerType?:"OIDC_JWT"}>}>
     */
    public function listTrustedTokenIssuersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceArn:string, PermissionSetArn:string, TargetId?:string, TargetType:"AWS_ACCOUNT"|"ALL_PROVISIONED_ACCOUNTS"} $args
     * @return \AWS\Result<array{PermissionSetProvisioningStatus?:array{AccountId?:string, CreatedDate?:int|string|\DateTimeInterface, FailureReason?:string, PermissionSetArn?:string, RequestId?:string, Status?:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"}}>
     */
    public function provisionPermissionSet(array $args): \AWS\Result { }

    /**
     * @param array{InstanceArn:string, PermissionSetArn:string, TargetId?:string, TargetType:"AWS_ACCOUNT"|"ALL_PROVISIONED_ACCOUNTS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{PermissionSetProvisioningStatus?:array{AccountId?:string, CreatedDate?:int|string|\DateTimeInterface, FailureReason?:string, PermissionSetArn?:string, RequestId?:string, Status?:"IN_PROGRESS"|"FAILED"|"SUCCEEDED"}}>
     */
    public function provisionPermissionSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationArn:string, AuthorizedTargets?:array<string>, Scope:string} $args
     * @return \AWS\Result<void>
     */
    public function putApplicationAccessScope(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationArn:string, AuthorizedTargets?:array<string>, Scope:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putApplicationAccessScopeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationArn:string, AssignmentRequired:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function putApplicationAssignmentConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationArn:string, AssignmentRequired:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putApplicationAssignmentConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationArn:string, AuthenticationMethod:array{Iam?:array{ActorPolicy:array{}}}, AuthenticationMethodType:"IAM"} $args
     * @return \AWS\Result<void>
     */
    public function putApplicationAuthenticationMethod(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationArn:string, AuthenticationMethod:array{Iam?:array{ActorPolicy:array{}}}, AuthenticationMethodType:"IAM"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putApplicationAuthenticationMethodAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationArn:string, Grant:array{AuthorizationCode?:array{RedirectUris?:array<string>}, JwtBearer?:array{AuthorizedTokenIssuers?:array<array{AuthorizedAudiences?:array<string>, TrustedTokenIssuerArn?:string}>}, RefreshToken?:array{}, TokenExchange?:array{}}, GrantType:"authorization_code"|"refresh_token"|"urn:ietf:params:oauth:grant-type:jwt-bearer"|"urn:ietf:params:oauth:grant-type:token-exchange"} $args
     * @return \AWS\Result<void>
     */
    public function putApplicationGrant(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationArn:string, Grant:array{AuthorizationCode?:array{RedirectUris?:array<string>}, JwtBearer?:array{AuthorizedTokenIssuers?:array<array{AuthorizedAudiences?:array<string>, TrustedTokenIssuerArn?:string}>}, RefreshToken?:array{}, TokenExchange?:array{}}, GrantType:"authorization_code"|"refresh_token"|"urn:ietf:params:oauth:grant-type:jwt-bearer"|"urn:ietf:params:oauth:grant-type:token-exchange"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putApplicationGrantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InlinePolicy:string, InstanceArn:string, PermissionSetArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function putInlinePolicyToPermissionSet(array $args): \AWS\Result { }

    /**
     * @param array{InlinePolicy:string, InstanceArn:string, PermissionSetArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putInlinePolicyToPermissionSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceArn:string, PermissionSetArn:string, PermissionsBoundary:array{CustomerManagedPolicyReference?:array{Name:string, Path?:string}, ManagedPolicyArn?:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function putPermissionsBoundaryToPermissionSet(array $args): \AWS\Result { }

    /**
     * @param array{InstanceArn:string, PermissionSetArn:string, PermissionsBoundary:array{CustomerManagedPolicyReference?:array{Name:string, Path?:string}, ManagedPolicyArn?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putPermissionsBoundaryToPermissionSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceArn?:string, ResourceArn:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{InstanceArn?:string, ResourceArn:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceArn?:string, ResourceArn:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{InstanceArn?:string, ResourceArn:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ApplicationArn:string, Description?:string, Name?:string, PortalOptions?:array{SignInOptions?:array{ApplicationUrl?:string, Origin:"IDENTITY_CENTER"|"APPLICATION"}}, Status?:"ENABLED"|"DISABLED"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateApplication(array $args): \AWS\Result { }

    /**
     * @param array{ApplicationArn:string, Description?:string, Name?:string, PortalOptions?:array{SignInOptions?:array{ApplicationUrl?:string, Origin:"IDENTITY_CENTER"|"APPLICATION"}}, Status?:"ENABLED"|"DISABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceArn:string, Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateInstance(array $args): \AWS\Result { }

    /**
     * @param array{InstanceArn:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceAccessControlAttributeConfiguration:array{AccessControlAttributes:array<array{Key:string, Value:array{Source:array<string>}}>}, InstanceArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateInstanceAccessControlAttributeConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{InstanceAccessControlAttributeConfiguration:array{AccessControlAttributes:array<array{Key:string, Value:array{Source:array<string>}}>}, InstanceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateInstanceAccessControlAttributeConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Description?:string, InstanceArn:string, PermissionSetArn:string, RelayState?:string, SessionDuration?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updatePermissionSet(array $args): \AWS\Result { }

    /**
     * @param array{Description?:string, InstanceArn:string, PermissionSetArn:string, RelayState?:string, SessionDuration?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updatePermissionSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name?:string, TrustedTokenIssuerArn:string, TrustedTokenIssuerConfiguration?:array{OidcJwtConfiguration?:array{ClaimAttributePath?:string, IdentityStoreAttributePath?:string, JwksRetrievalOption?:"OPEN_ID_DISCOVERY"}}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateTrustedTokenIssuer(array $args): \AWS\Result { }

    /**
     * @param array{Name?:string, TrustedTokenIssuerArn:string, TrustedTokenIssuerConfiguration?:array{OidcJwtConfiguration?:array{ClaimAttributePath?:string, IdentityStoreAttributePath?:string, JwksRetrievalOption?:"OPEN_ID_DISCOVERY"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateTrustedTokenIssuerAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
