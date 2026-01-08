<?php
namespace AWS\Organizations;

class OrganizationsClient
{
    /**
     * @param array{HandshakeId:string} $args
     * @return \AWS\Result<array{Handshake?:array{Id?:string, Arn?:string, Parties?:array<array{Id:string, Type:"ACCOUNT"|"ORGANIZATION"|"EMAIL"}>, State?:"REQUESTED"|"OPEN"|"CANCELED"|"ACCEPTED"|"DECLINED"|"EXPIRED", RequestedTimestamp?:int|string|\DateTimeInterface, ExpirationTimestamp?:int|string|\DateTimeInterface, Action?:"INVITE"|"ENABLE_ALL_FEATURES"|"APPROVE_ALL_FEATURES"|"ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE", Resources?:array<array{Value?:string, Type?:"ACCOUNT"|"ORGANIZATION"|"ORGANIZATION_FEATURE_SET"|"EMAIL"|"MASTER_EMAIL"|"MASTER_NAME"|"NOTES"|"PARENT_HANDSHAKE", Resources?:mixed}>}}>
     */
    public function acceptHandshake(array $args): \AWS\Result { }

    /**
     * @param array{HandshakeId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Handshake?:array{Id?:string, Arn?:string, Parties?:array<array{Id:string, Type:"ACCOUNT"|"ORGANIZATION"|"EMAIL"}>, State?:"REQUESTED"|"OPEN"|"CANCELED"|"ACCEPTED"|"DECLINED"|"EXPIRED", RequestedTimestamp?:int|string|\DateTimeInterface, ExpirationTimestamp?:int|string|\DateTimeInterface, Action?:"INVITE"|"ENABLE_ALL_FEATURES"|"APPROVE_ALL_FEATURES"|"ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE", Resources?:array<array{Value?:string, Type?:"ACCOUNT"|"ORGANIZATION"|"ORGANIZATION_FEATURE_SET"|"EMAIL"|"MASTER_EMAIL"|"MASTER_NAME"|"NOTES"|"PARENT_HANDSHAKE", Resources?:mixed}>}}>
     */
    public function acceptHandshakeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PolicyId:string, TargetId:string} $args
     * @return \AWS\Result<void>
     */
    public function attachPolicy(array $args): \AWS\Result { }

    /**
     * @param array{PolicyId:string, TargetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function attachPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HandshakeId:string} $args
     * @return \AWS\Result<array{Handshake?:array{Id?:string, Arn?:string, Parties?:array<array{Id:string, Type:"ACCOUNT"|"ORGANIZATION"|"EMAIL"}>, State?:"REQUESTED"|"OPEN"|"CANCELED"|"ACCEPTED"|"DECLINED"|"EXPIRED", RequestedTimestamp?:int|string|\DateTimeInterface, ExpirationTimestamp?:int|string|\DateTimeInterface, Action?:"INVITE"|"ENABLE_ALL_FEATURES"|"APPROVE_ALL_FEATURES"|"ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE", Resources?:array<array{Value?:string, Type?:"ACCOUNT"|"ORGANIZATION"|"ORGANIZATION_FEATURE_SET"|"EMAIL"|"MASTER_EMAIL"|"MASTER_NAME"|"NOTES"|"PARENT_HANDSHAKE", Resources?:mixed}>}}>
     */
    public function cancelHandshake(array $args): \AWS\Result { }

    /**
     * @param array{HandshakeId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Handshake?:array{Id?:string, Arn?:string, Parties?:array<array{Id:string, Type:"ACCOUNT"|"ORGANIZATION"|"EMAIL"}>, State?:"REQUESTED"|"OPEN"|"CANCELED"|"ACCEPTED"|"DECLINED"|"EXPIRED", RequestedTimestamp?:int|string|\DateTimeInterface, ExpirationTimestamp?:int|string|\DateTimeInterface, Action?:"INVITE"|"ENABLE_ALL_FEATURES"|"APPROVE_ALL_FEATURES"|"ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE", Resources?:array<array{Value?:string, Type?:"ACCOUNT"|"ORGANIZATION"|"ORGANIZATION_FEATURE_SET"|"EMAIL"|"MASTER_EMAIL"|"MASTER_NAME"|"NOTES"|"PARENT_HANDSHAKE", Resources?:mixed}>}}>
     */
    public function cancelHandshakeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string} $args
     * @return \AWS\Result<void>
     */
    public function closeAccount(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function closeAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Email:string, AccountName:string, RoleName?:string, IamUserAccessToBilling?:"ALLOW"|"DENY", Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{CreateAccountStatus?:array{Id?:string, AccountName?:string, State?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", RequestedTimestamp?:int|string|\DateTimeInterface, CompletedTimestamp?:int|string|\DateTimeInterface, AccountId?:string, GovCloudAccountId?:string, FailureReason?:"ACCOUNT_LIMIT_EXCEEDED"|"EMAIL_ALREADY_EXISTS"|"INVALID_ADDRESS"|"INVALID_EMAIL"|"CONCURRENT_ACCOUNT_MODIFICATION"|"INTERNAL_FAILURE"|"GOVCLOUD_ACCOUNT_ALREADY_EXISTS"|"MISSING_BUSINESS_VALIDATION"|"FAILED_BUSINESS_VALIDATION"|"PENDING_BUSINESS_VALIDATION"|"INVALID_IDENTITY_FOR_BUSINESS_VALIDATION"|"UNKNOWN_BUSINESS_VALIDATION"|"MISSING_PAYMENT_INSTRUMENT"|"INVALID_PAYMENT_INSTRUMENT"|"UPDATE_EXISTING_RESOURCE_POLICY_WITH_TAGS_NOT_SUPPORTED"}}>
     */
    public function createAccount(array $args): \AWS\Result { }

    /**
     * @param array{Email:string, AccountName:string, RoleName?:string, IamUserAccessToBilling?:"ALLOW"|"DENY", Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{CreateAccountStatus?:array{Id?:string, AccountName?:string, State?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", RequestedTimestamp?:int|string|\DateTimeInterface, CompletedTimestamp?:int|string|\DateTimeInterface, AccountId?:string, GovCloudAccountId?:string, FailureReason?:"ACCOUNT_LIMIT_EXCEEDED"|"EMAIL_ALREADY_EXISTS"|"INVALID_ADDRESS"|"INVALID_EMAIL"|"CONCURRENT_ACCOUNT_MODIFICATION"|"INTERNAL_FAILURE"|"GOVCLOUD_ACCOUNT_ALREADY_EXISTS"|"MISSING_BUSINESS_VALIDATION"|"FAILED_BUSINESS_VALIDATION"|"PENDING_BUSINESS_VALIDATION"|"INVALID_IDENTITY_FOR_BUSINESS_VALIDATION"|"UNKNOWN_BUSINESS_VALIDATION"|"MISSING_PAYMENT_INSTRUMENT"|"INVALID_PAYMENT_INSTRUMENT"|"UPDATE_EXISTING_RESOURCE_POLICY_WITH_TAGS_NOT_SUPPORTED"}}>
     */
    public function createAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Email:string, AccountName:string, RoleName?:string, IamUserAccessToBilling?:"ALLOW"|"DENY", Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{CreateAccountStatus?:array{Id?:string, AccountName?:string, State?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", RequestedTimestamp?:int|string|\DateTimeInterface, CompletedTimestamp?:int|string|\DateTimeInterface, AccountId?:string, GovCloudAccountId?:string, FailureReason?:"ACCOUNT_LIMIT_EXCEEDED"|"EMAIL_ALREADY_EXISTS"|"INVALID_ADDRESS"|"INVALID_EMAIL"|"CONCURRENT_ACCOUNT_MODIFICATION"|"INTERNAL_FAILURE"|"GOVCLOUD_ACCOUNT_ALREADY_EXISTS"|"MISSING_BUSINESS_VALIDATION"|"FAILED_BUSINESS_VALIDATION"|"PENDING_BUSINESS_VALIDATION"|"INVALID_IDENTITY_FOR_BUSINESS_VALIDATION"|"UNKNOWN_BUSINESS_VALIDATION"|"MISSING_PAYMENT_INSTRUMENT"|"INVALID_PAYMENT_INSTRUMENT"|"UPDATE_EXISTING_RESOURCE_POLICY_WITH_TAGS_NOT_SUPPORTED"}}>
     */
    public function createGovCloudAccount(array $args): \AWS\Result { }

    /**
     * @param array{Email:string, AccountName:string, RoleName?:string, IamUserAccessToBilling?:"ALLOW"|"DENY", Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{CreateAccountStatus?:array{Id?:string, AccountName?:string, State?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", RequestedTimestamp?:int|string|\DateTimeInterface, CompletedTimestamp?:int|string|\DateTimeInterface, AccountId?:string, GovCloudAccountId?:string, FailureReason?:"ACCOUNT_LIMIT_EXCEEDED"|"EMAIL_ALREADY_EXISTS"|"INVALID_ADDRESS"|"INVALID_EMAIL"|"CONCURRENT_ACCOUNT_MODIFICATION"|"INTERNAL_FAILURE"|"GOVCLOUD_ACCOUNT_ALREADY_EXISTS"|"MISSING_BUSINESS_VALIDATION"|"FAILED_BUSINESS_VALIDATION"|"PENDING_BUSINESS_VALIDATION"|"INVALID_IDENTITY_FOR_BUSINESS_VALIDATION"|"UNKNOWN_BUSINESS_VALIDATION"|"MISSING_PAYMENT_INSTRUMENT"|"INVALID_PAYMENT_INSTRUMENT"|"UPDATE_EXISTING_RESOURCE_POLICY_WITH_TAGS_NOT_SUPPORTED"}}>
     */
    public function createGovCloudAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FeatureSet?:"ALL"|"CONSOLIDATED_BILLING"} $args
     * @return \AWS\Result<array{Organization?:array{Id?:string, Arn?:string, FeatureSet?:"ALL"|"CONSOLIDATED_BILLING", MasterAccountArn?:string, MasterAccountId?:string, MasterAccountEmail?:string, AvailablePolicyTypes?:array<array{Type?:"SERVICE_CONTROL_POLICY"|"RESOURCE_CONTROL_POLICY"|"TAG_POLICY"|"BACKUP_POLICY"|"AISERVICES_OPT_OUT_POLICY"|"CHATBOT_POLICY"|"DECLARATIVE_POLICY_EC2", Status?:"ENABLED"|"PENDING_ENABLE"|"PENDING_DISABLE"}>}}>
     */
    public function createOrganization(array $args = []): \AWS\Result { }

    /**
     * @param array{FeatureSet?:"ALL"|"CONSOLIDATED_BILLING"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Organization?:array{Id?:string, Arn?:string, FeatureSet?:"ALL"|"CONSOLIDATED_BILLING", MasterAccountArn?:string, MasterAccountId?:string, MasterAccountEmail?:string, AvailablePolicyTypes?:array<array{Type?:"SERVICE_CONTROL_POLICY"|"RESOURCE_CONTROL_POLICY"|"TAG_POLICY"|"BACKUP_POLICY"|"AISERVICES_OPT_OUT_POLICY"|"CHATBOT_POLICY"|"DECLARATIVE_POLICY_EC2", Status?:"ENABLED"|"PENDING_ENABLE"|"PENDING_DISABLE"}>}}>
     */
    public function createOrganizationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ParentId:string, Name:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{OrganizationalUnit?:array{Id?:string, Arn?:string, Name?:string}}>
     */
    public function createOrganizationalUnit(array $args): \AWS\Result { }

    /**
     * @param array{ParentId:string, Name:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{OrganizationalUnit?:array{Id?:string, Arn?:string, Name?:string}}>
     */
    public function createOrganizationalUnitAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Content:string, Description:string, Name:string, Type:"SERVICE_CONTROL_POLICY"|"RESOURCE_CONTROL_POLICY"|"TAG_POLICY"|"BACKUP_POLICY"|"AISERVICES_OPT_OUT_POLICY"|"CHATBOT_POLICY"|"DECLARATIVE_POLICY_EC2", Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{Policy?:array{PolicySummary?:array{Id?:string, Arn?:string, Name?:string, Description?:string, Type?:"SERVICE_CONTROL_POLICY"|"RESOURCE_CONTROL_POLICY"|"TAG_POLICY"|"BACKUP_POLICY"|"AISERVICES_OPT_OUT_POLICY"|"CHATBOT_POLICY"|"DECLARATIVE_POLICY_EC2", AwsManaged?:bool}, Content?:string}}>
     */
    public function createPolicy(array $args): \AWS\Result { }

    /**
     * @param array{Content:string, Description:string, Name:string, Type:"SERVICE_CONTROL_POLICY"|"RESOURCE_CONTROL_POLICY"|"TAG_POLICY"|"BACKUP_POLICY"|"AISERVICES_OPT_OUT_POLICY"|"CHATBOT_POLICY"|"DECLARATIVE_POLICY_EC2", Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:array{PolicySummary?:array{Id?:string, Arn?:string, Name?:string, Description?:string, Type?:"SERVICE_CONTROL_POLICY"|"RESOURCE_CONTROL_POLICY"|"TAG_POLICY"|"BACKUP_POLICY"|"AISERVICES_OPT_OUT_POLICY"|"CHATBOT_POLICY"|"DECLARATIVE_POLICY_EC2", AwsManaged?:bool}, Content?:string}}>
     */
    public function createPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HandshakeId:string} $args
     * @return \AWS\Result<array{Handshake?:array{Id?:string, Arn?:string, Parties?:array<array{Id:string, Type:"ACCOUNT"|"ORGANIZATION"|"EMAIL"}>, State?:"REQUESTED"|"OPEN"|"CANCELED"|"ACCEPTED"|"DECLINED"|"EXPIRED", RequestedTimestamp?:int|string|\DateTimeInterface, ExpirationTimestamp?:int|string|\DateTimeInterface, Action?:"INVITE"|"ENABLE_ALL_FEATURES"|"APPROVE_ALL_FEATURES"|"ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE", Resources?:array<array{Value?:string, Type?:"ACCOUNT"|"ORGANIZATION"|"ORGANIZATION_FEATURE_SET"|"EMAIL"|"MASTER_EMAIL"|"MASTER_NAME"|"NOTES"|"PARENT_HANDSHAKE", Resources?:mixed}>}}>
     */
    public function declineHandshake(array $args): \AWS\Result { }

    /**
     * @param array{HandshakeId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Handshake?:array{Id?:string, Arn?:string, Parties?:array<array{Id:string, Type:"ACCOUNT"|"ORGANIZATION"|"EMAIL"}>, State?:"REQUESTED"|"OPEN"|"CANCELED"|"ACCEPTED"|"DECLINED"|"EXPIRED", RequestedTimestamp?:int|string|\DateTimeInterface, ExpirationTimestamp?:int|string|\DateTimeInterface, Action?:"INVITE"|"ENABLE_ALL_FEATURES"|"APPROVE_ALL_FEATURES"|"ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE", Resources?:array<array{Value?:string, Type?:"ACCOUNT"|"ORGANIZATION"|"ORGANIZATION_FEATURE_SET"|"EMAIL"|"MASTER_EMAIL"|"MASTER_NAME"|"NOTES"|"PARENT_HANDSHAKE", Resources?:mixed}>}}>
     */
    public function declineHandshakeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<void>
     */
    public function deleteOrganization(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteOrganizationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationalUnitId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteOrganizationalUnit(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationalUnitId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteOrganizationalUnitAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PolicyId:string} $args
     * @return \AWS\Result<void>
     */
    public function deletePolicy(array $args): \AWS\Result { }

    /**
     * @param array{PolicyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deletePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<void>
     */
    public function deleteResourcePolicy(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteResourcePolicyAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, ServicePrincipal:string} $args
     * @return \AWS\Result<void>
     */
    public function deregisterDelegatedAdministrator(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, ServicePrincipal:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deregisterDelegatedAdministratorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string} $args
     * @return \AWS\Result<array{Account?:array{Id?:string, Arn?:string, Email?:string, Name?:string, Status?:"ACTIVE"|"SUSPENDED"|"PENDING_CLOSURE", JoinedMethod?:"INVITED"|"CREATED", JoinedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function describeAccount(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Account?:array{Id?:string, Arn?:string, Email?:string, Name?:string, Status?:"ACTIVE"|"SUSPENDED"|"PENDING_CLOSURE", JoinedMethod?:"INVITED"|"CREATED", JoinedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function describeAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CreateAccountRequestId:string} $args
     * @return \AWS\Result<array{CreateAccountStatus?:array{Id?:string, AccountName?:string, State?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", RequestedTimestamp?:int|string|\DateTimeInterface, CompletedTimestamp?:int|string|\DateTimeInterface, AccountId?:string, GovCloudAccountId?:string, FailureReason?:"ACCOUNT_LIMIT_EXCEEDED"|"EMAIL_ALREADY_EXISTS"|"INVALID_ADDRESS"|"INVALID_EMAIL"|"CONCURRENT_ACCOUNT_MODIFICATION"|"INTERNAL_FAILURE"|"GOVCLOUD_ACCOUNT_ALREADY_EXISTS"|"MISSING_BUSINESS_VALIDATION"|"FAILED_BUSINESS_VALIDATION"|"PENDING_BUSINESS_VALIDATION"|"INVALID_IDENTITY_FOR_BUSINESS_VALIDATION"|"UNKNOWN_BUSINESS_VALIDATION"|"MISSING_PAYMENT_INSTRUMENT"|"INVALID_PAYMENT_INSTRUMENT"|"UPDATE_EXISTING_RESOURCE_POLICY_WITH_TAGS_NOT_SUPPORTED"}}>
     */
    public function describeCreateAccountStatus(array $args): \AWS\Result { }

    /**
     * @param array{CreateAccountRequestId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CreateAccountStatus?:array{Id?:string, AccountName?:string, State?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", RequestedTimestamp?:int|string|\DateTimeInterface, CompletedTimestamp?:int|string|\DateTimeInterface, AccountId?:string, GovCloudAccountId?:string, FailureReason?:"ACCOUNT_LIMIT_EXCEEDED"|"EMAIL_ALREADY_EXISTS"|"INVALID_ADDRESS"|"INVALID_EMAIL"|"CONCURRENT_ACCOUNT_MODIFICATION"|"INTERNAL_FAILURE"|"GOVCLOUD_ACCOUNT_ALREADY_EXISTS"|"MISSING_BUSINESS_VALIDATION"|"FAILED_BUSINESS_VALIDATION"|"PENDING_BUSINESS_VALIDATION"|"INVALID_IDENTITY_FOR_BUSINESS_VALIDATION"|"UNKNOWN_BUSINESS_VALIDATION"|"MISSING_PAYMENT_INSTRUMENT"|"INVALID_PAYMENT_INSTRUMENT"|"UPDATE_EXISTING_RESOURCE_POLICY_WITH_TAGS_NOT_SUPPORTED"}}>
     */
    public function describeCreateAccountStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PolicyType:"TAG_POLICY"|"BACKUP_POLICY"|"AISERVICES_OPT_OUT_POLICY"|"CHATBOT_POLICY"|"DECLARATIVE_POLICY_EC2", TargetId?:string} $args
     * @return \AWS\Result<array{EffectivePolicy?:array{PolicyContent?:string, LastUpdatedTimestamp?:int|string|\DateTimeInterface, TargetId?:string, PolicyType?:"TAG_POLICY"|"BACKUP_POLICY"|"AISERVICES_OPT_OUT_POLICY"|"CHATBOT_POLICY"|"DECLARATIVE_POLICY_EC2"}}>
     */
    public function describeEffectivePolicy(array $args): \AWS\Result { }

    /**
     * @param array{PolicyType:"TAG_POLICY"|"BACKUP_POLICY"|"AISERVICES_OPT_OUT_POLICY"|"CHATBOT_POLICY"|"DECLARATIVE_POLICY_EC2", TargetId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EffectivePolicy?:array{PolicyContent?:string, LastUpdatedTimestamp?:int|string|\DateTimeInterface, TargetId?:string, PolicyType?:"TAG_POLICY"|"BACKUP_POLICY"|"AISERVICES_OPT_OUT_POLICY"|"CHATBOT_POLICY"|"DECLARATIVE_POLICY_EC2"}}>
     */
    public function describeEffectivePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HandshakeId:string} $args
     * @return \AWS\Result<array{Handshake?:array{Id?:string, Arn?:string, Parties?:array<array{Id:string, Type:"ACCOUNT"|"ORGANIZATION"|"EMAIL"}>, State?:"REQUESTED"|"OPEN"|"CANCELED"|"ACCEPTED"|"DECLINED"|"EXPIRED", RequestedTimestamp?:int|string|\DateTimeInterface, ExpirationTimestamp?:int|string|\DateTimeInterface, Action?:"INVITE"|"ENABLE_ALL_FEATURES"|"APPROVE_ALL_FEATURES"|"ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE", Resources?:array<array{Value?:string, Type?:"ACCOUNT"|"ORGANIZATION"|"ORGANIZATION_FEATURE_SET"|"EMAIL"|"MASTER_EMAIL"|"MASTER_NAME"|"NOTES"|"PARENT_HANDSHAKE", Resources?:mixed}>}}>
     */
    public function describeHandshake(array $args): \AWS\Result { }

    /**
     * @param array{HandshakeId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Handshake?:array{Id?:string, Arn?:string, Parties?:array<array{Id:string, Type:"ACCOUNT"|"ORGANIZATION"|"EMAIL"}>, State?:"REQUESTED"|"OPEN"|"CANCELED"|"ACCEPTED"|"DECLINED"|"EXPIRED", RequestedTimestamp?:int|string|\DateTimeInterface, ExpirationTimestamp?:int|string|\DateTimeInterface, Action?:"INVITE"|"ENABLE_ALL_FEATURES"|"APPROVE_ALL_FEATURES"|"ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE", Resources?:array<array{Value?:string, Type?:"ACCOUNT"|"ORGANIZATION"|"ORGANIZATION_FEATURE_SET"|"EMAIL"|"MASTER_EMAIL"|"MASTER_NAME"|"NOTES"|"PARENT_HANDSHAKE", Resources?:mixed}>}}>
     */
    public function describeHandshakeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{Organization?:array{Id?:string, Arn?:string, FeatureSet?:"ALL"|"CONSOLIDATED_BILLING", MasterAccountArn?:string, MasterAccountId?:string, MasterAccountEmail?:string, AvailablePolicyTypes?:array<array{Type?:"SERVICE_CONTROL_POLICY"|"RESOURCE_CONTROL_POLICY"|"TAG_POLICY"|"BACKUP_POLICY"|"AISERVICES_OPT_OUT_POLICY"|"CHATBOT_POLICY"|"DECLARATIVE_POLICY_EC2", Status?:"ENABLED"|"PENDING_ENABLE"|"PENDING_DISABLE"}>}}>
     */
    public function describeOrganization(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{Organization?:array{Id?:string, Arn?:string, FeatureSet?:"ALL"|"CONSOLIDATED_BILLING", MasterAccountArn?:string, MasterAccountId?:string, MasterAccountEmail?:string, AvailablePolicyTypes?:array<array{Type?:"SERVICE_CONTROL_POLICY"|"RESOURCE_CONTROL_POLICY"|"TAG_POLICY"|"BACKUP_POLICY"|"AISERVICES_OPT_OUT_POLICY"|"CHATBOT_POLICY"|"DECLARATIVE_POLICY_EC2", Status?:"ENABLED"|"PENDING_ENABLE"|"PENDING_DISABLE"}>}}>
     */
    public function describeOrganizationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationalUnitId:string} $args
     * @return \AWS\Result<array{OrganizationalUnit?:array{Id?:string, Arn?:string, Name?:string}}>
     */
    public function describeOrganizationalUnit(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationalUnitId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{OrganizationalUnit?:array{Id?:string, Arn?:string, Name?:string}}>
     */
    public function describeOrganizationalUnitAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PolicyId:string} $args
     * @return \AWS\Result<array{Policy?:array{PolicySummary?:array{Id?:string, Arn?:string, Name?:string, Description?:string, Type?:"SERVICE_CONTROL_POLICY"|"RESOURCE_CONTROL_POLICY"|"TAG_POLICY"|"BACKUP_POLICY"|"AISERVICES_OPT_OUT_POLICY"|"CHATBOT_POLICY"|"DECLARATIVE_POLICY_EC2", AwsManaged?:bool}, Content?:string}}>
     */
    public function describePolicy(array $args): \AWS\Result { }

    /**
     * @param array{PolicyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:array{PolicySummary?:array{Id?:string, Arn?:string, Name?:string, Description?:string, Type?:"SERVICE_CONTROL_POLICY"|"RESOURCE_CONTROL_POLICY"|"TAG_POLICY"|"BACKUP_POLICY"|"AISERVICES_OPT_OUT_POLICY"|"CHATBOT_POLICY"|"DECLARATIVE_POLICY_EC2", AwsManaged?:bool}, Content?:string}}>
     */
    public function describePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{ResourcePolicy?:array{ResourcePolicySummary?:array{Id?:string, Arn?:string}, Content?:string}}>
     */
    public function describeResourcePolicy(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourcePolicy?:array{ResourcePolicySummary?:array{Id?:string, Arn?:string}, Content?:string}}>
     */
    public function describeResourcePolicyAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PolicyId:string, TargetId:string} $args
     * @return \AWS\Result<void>
     */
    public function detachPolicy(array $args): \AWS\Result { }

    /**
     * @param array{PolicyId:string, TargetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function detachPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServicePrincipal:string} $args
     * @return \AWS\Result<void>
     */
    public function disableAWSServiceAccess(array $args): \AWS\Result { }

    /**
     * @param array{ServicePrincipal:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disableAWSServiceAccessAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RootId:string, PolicyType:"SERVICE_CONTROL_POLICY"|"RESOURCE_CONTROL_POLICY"|"TAG_POLICY"|"BACKUP_POLICY"|"AISERVICES_OPT_OUT_POLICY"|"CHATBOT_POLICY"|"DECLARATIVE_POLICY_EC2"} $args
     * @return \AWS\Result<array{Root?:array{Id?:string, Arn?:string, Name?:string, PolicyTypes?:array<array{Type?:"SERVICE_CONTROL_POLICY"|"RESOURCE_CONTROL_POLICY"|"TAG_POLICY"|"BACKUP_POLICY"|"AISERVICES_OPT_OUT_POLICY"|"CHATBOT_POLICY"|"DECLARATIVE_POLICY_EC2", Status?:"ENABLED"|"PENDING_ENABLE"|"PENDING_DISABLE"}>}}>
     */
    public function disablePolicyType(array $args): \AWS\Result { }

    /**
     * @param array{RootId:string, PolicyType:"SERVICE_CONTROL_POLICY"|"RESOURCE_CONTROL_POLICY"|"TAG_POLICY"|"BACKUP_POLICY"|"AISERVICES_OPT_OUT_POLICY"|"CHATBOT_POLICY"|"DECLARATIVE_POLICY_EC2"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Root?:array{Id?:string, Arn?:string, Name?:string, PolicyTypes?:array<array{Type?:"SERVICE_CONTROL_POLICY"|"RESOURCE_CONTROL_POLICY"|"TAG_POLICY"|"BACKUP_POLICY"|"AISERVICES_OPT_OUT_POLICY"|"CHATBOT_POLICY"|"DECLARATIVE_POLICY_EC2", Status?:"ENABLED"|"PENDING_ENABLE"|"PENDING_DISABLE"}>}}>
     */
    public function disablePolicyTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServicePrincipal:string} $args
     * @return \AWS\Result<void>
     */
    public function enableAWSServiceAccess(array $args): \AWS\Result { }

    /**
     * @param array{ServicePrincipal:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function enableAWSServiceAccessAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{Handshake?:array{Id?:string, Arn?:string, Parties?:array<array{Id:string, Type:"ACCOUNT"|"ORGANIZATION"|"EMAIL"}>, State?:"REQUESTED"|"OPEN"|"CANCELED"|"ACCEPTED"|"DECLINED"|"EXPIRED", RequestedTimestamp?:int|string|\DateTimeInterface, ExpirationTimestamp?:int|string|\DateTimeInterface, Action?:"INVITE"|"ENABLE_ALL_FEATURES"|"APPROVE_ALL_FEATURES"|"ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE", Resources?:array<array{Value?:string, Type?:"ACCOUNT"|"ORGANIZATION"|"ORGANIZATION_FEATURE_SET"|"EMAIL"|"MASTER_EMAIL"|"MASTER_NAME"|"NOTES"|"PARENT_HANDSHAKE", Resources?:mixed}>}}>
     */
    public function enableAllFeatures(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{Handshake?:array{Id?:string, Arn?:string, Parties?:array<array{Id:string, Type:"ACCOUNT"|"ORGANIZATION"|"EMAIL"}>, State?:"REQUESTED"|"OPEN"|"CANCELED"|"ACCEPTED"|"DECLINED"|"EXPIRED", RequestedTimestamp?:int|string|\DateTimeInterface, ExpirationTimestamp?:int|string|\DateTimeInterface, Action?:"INVITE"|"ENABLE_ALL_FEATURES"|"APPROVE_ALL_FEATURES"|"ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE", Resources?:array<array{Value?:string, Type?:"ACCOUNT"|"ORGANIZATION"|"ORGANIZATION_FEATURE_SET"|"EMAIL"|"MASTER_EMAIL"|"MASTER_NAME"|"NOTES"|"PARENT_HANDSHAKE", Resources?:mixed}>}}>
     */
    public function enableAllFeaturesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RootId:string, PolicyType:"SERVICE_CONTROL_POLICY"|"RESOURCE_CONTROL_POLICY"|"TAG_POLICY"|"BACKUP_POLICY"|"AISERVICES_OPT_OUT_POLICY"|"CHATBOT_POLICY"|"DECLARATIVE_POLICY_EC2"} $args
     * @return \AWS\Result<array{Root?:array{Id?:string, Arn?:string, Name?:string, PolicyTypes?:array<array{Type?:"SERVICE_CONTROL_POLICY"|"RESOURCE_CONTROL_POLICY"|"TAG_POLICY"|"BACKUP_POLICY"|"AISERVICES_OPT_OUT_POLICY"|"CHATBOT_POLICY"|"DECLARATIVE_POLICY_EC2", Status?:"ENABLED"|"PENDING_ENABLE"|"PENDING_DISABLE"}>}}>
     */
    public function enablePolicyType(array $args): \AWS\Result { }

    /**
     * @param array{RootId:string, PolicyType:"SERVICE_CONTROL_POLICY"|"RESOURCE_CONTROL_POLICY"|"TAG_POLICY"|"BACKUP_POLICY"|"AISERVICES_OPT_OUT_POLICY"|"CHATBOT_POLICY"|"DECLARATIVE_POLICY_EC2"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Root?:array{Id?:string, Arn?:string, Name?:string, PolicyTypes?:array<array{Type?:"SERVICE_CONTROL_POLICY"|"RESOURCE_CONTROL_POLICY"|"TAG_POLICY"|"BACKUP_POLICY"|"AISERVICES_OPT_OUT_POLICY"|"CHATBOT_POLICY"|"DECLARATIVE_POLICY_EC2", Status?:"ENABLED"|"PENDING_ENABLE"|"PENDING_DISABLE"}>}}>
     */
    public function enablePolicyTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Target:array{Id:string, Type:"ACCOUNT"|"ORGANIZATION"|"EMAIL"}, Notes?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{Handshake?:array{Id?:string, Arn?:string, Parties?:array<array{Id:string, Type:"ACCOUNT"|"ORGANIZATION"|"EMAIL"}>, State?:"REQUESTED"|"OPEN"|"CANCELED"|"ACCEPTED"|"DECLINED"|"EXPIRED", RequestedTimestamp?:int|string|\DateTimeInterface, ExpirationTimestamp?:int|string|\DateTimeInterface, Action?:"INVITE"|"ENABLE_ALL_FEATURES"|"APPROVE_ALL_FEATURES"|"ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE", Resources?:array<array{Value?:string, Type?:"ACCOUNT"|"ORGANIZATION"|"ORGANIZATION_FEATURE_SET"|"EMAIL"|"MASTER_EMAIL"|"MASTER_NAME"|"NOTES"|"PARENT_HANDSHAKE", Resources?:mixed}>}}>
     */
    public function inviteAccountToOrganization(array $args): \AWS\Result { }

    /**
     * @param array{Target:array{Id:string, Type:"ACCOUNT"|"ORGANIZATION"|"EMAIL"}, Notes?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Handshake?:array{Id?:string, Arn?:string, Parties?:array<array{Id:string, Type:"ACCOUNT"|"ORGANIZATION"|"EMAIL"}>, State?:"REQUESTED"|"OPEN"|"CANCELED"|"ACCEPTED"|"DECLINED"|"EXPIRED", RequestedTimestamp?:int|string|\DateTimeInterface, ExpirationTimestamp?:int|string|\DateTimeInterface, Action?:"INVITE"|"ENABLE_ALL_FEATURES"|"APPROVE_ALL_FEATURES"|"ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE", Resources?:array<array{Value?:string, Type?:"ACCOUNT"|"ORGANIZATION"|"ORGANIZATION_FEATURE_SET"|"EMAIL"|"MASTER_EMAIL"|"MASTER_NAME"|"NOTES"|"PARENT_HANDSHAKE", Resources?:mixed}>}}>
     */
    public function inviteAccountToOrganizationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<void>
     */
    public function leaveOrganization(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function leaveOrganizationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{EnabledServicePrincipals?:array<array{ServicePrincipal?:string, DateEnabled?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listAWSServiceAccessForOrganization(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{EnabledServicePrincipals?:array<array{ServicePrincipal?:string, DateEnabled?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listAWSServiceAccessForOrganizationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Accounts?:array<array{Id?:string, Arn?:string, Email?:string, Name?:string, Status?:"ACTIVE"|"SUSPENDED"|"PENDING_CLOSURE", JoinedMethod?:"INVITED"|"CREATED", JoinedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listAccounts(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Accounts?:array<array{Id?:string, Arn?:string, Email?:string, Name?:string, Status?:"ACTIVE"|"SUSPENDED"|"PENDING_CLOSURE", JoinedMethod?:"INVITED"|"CREATED", JoinedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listAccountsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ParentId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Accounts?:array<array{Id?:string, Arn?:string, Email?:string, Name?:string, Status?:"ACTIVE"|"SUSPENDED"|"PENDING_CLOSURE", JoinedMethod?:"INVITED"|"CREATED", JoinedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listAccountsForParent(array $args): \AWS\Result { }

    /**
     * @param array{ParentId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Accounts?:array<array{Id?:string, Arn?:string, Email?:string, Name?:string, Status?:"ACTIVE"|"SUSPENDED"|"PENDING_CLOSURE", JoinedMethod?:"INVITED"|"CREATED", JoinedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listAccountsForParentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ParentId:string, ChildType:"ACCOUNT"|"ORGANIZATIONAL_UNIT", NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Children?:array<array{Id?:string, Type?:"ACCOUNT"|"ORGANIZATIONAL_UNIT"}>, NextToken?:string}>
     */
    public function listChildren(array $args): \AWS\Result { }

    /**
     * @param array{ParentId:string, ChildType:"ACCOUNT"|"ORGANIZATIONAL_UNIT", NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Children?:array<array{Id?:string, Type?:"ACCOUNT"|"ORGANIZATIONAL_UNIT"}>, NextToken?:string}>
     */
    public function listChildrenAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{States?:array<"IN_PROGRESS"|"SUCCEEDED"|"FAILED">, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{CreateAccountStatuses?:array<array{Id?:string, AccountName?:string, State?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", RequestedTimestamp?:int|string|\DateTimeInterface, CompletedTimestamp?:int|string|\DateTimeInterface, AccountId?:string, GovCloudAccountId?:string, FailureReason?:"ACCOUNT_LIMIT_EXCEEDED"|"EMAIL_ALREADY_EXISTS"|"INVALID_ADDRESS"|"INVALID_EMAIL"|"CONCURRENT_ACCOUNT_MODIFICATION"|"INTERNAL_FAILURE"|"GOVCLOUD_ACCOUNT_ALREADY_EXISTS"|"MISSING_BUSINESS_VALIDATION"|"FAILED_BUSINESS_VALIDATION"|"PENDING_BUSINESS_VALIDATION"|"INVALID_IDENTITY_FOR_BUSINESS_VALIDATION"|"UNKNOWN_BUSINESS_VALIDATION"|"MISSING_PAYMENT_INSTRUMENT"|"INVALID_PAYMENT_INSTRUMENT"|"UPDATE_EXISTING_RESOURCE_POLICY_WITH_TAGS_NOT_SUPPORTED"}>, NextToken?:string}>
     */
    public function listCreateAccountStatus(array $args = []): \AWS\Result { }

    /**
     * @param array{States?:array<"IN_PROGRESS"|"SUCCEEDED"|"FAILED">, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{CreateAccountStatuses?:array<array{Id?:string, AccountName?:string, State?:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", RequestedTimestamp?:int|string|\DateTimeInterface, CompletedTimestamp?:int|string|\DateTimeInterface, AccountId?:string, GovCloudAccountId?:string, FailureReason?:"ACCOUNT_LIMIT_EXCEEDED"|"EMAIL_ALREADY_EXISTS"|"INVALID_ADDRESS"|"INVALID_EMAIL"|"CONCURRENT_ACCOUNT_MODIFICATION"|"INTERNAL_FAILURE"|"GOVCLOUD_ACCOUNT_ALREADY_EXISTS"|"MISSING_BUSINESS_VALIDATION"|"FAILED_BUSINESS_VALIDATION"|"PENDING_BUSINESS_VALIDATION"|"INVALID_IDENTITY_FOR_BUSINESS_VALIDATION"|"UNKNOWN_BUSINESS_VALIDATION"|"MISSING_PAYMENT_INSTRUMENT"|"INVALID_PAYMENT_INSTRUMENT"|"UPDATE_EXISTING_RESOURCE_POLICY_WITH_TAGS_NOT_SUPPORTED"}>, NextToken?:string}>
     */
    public function listCreateAccountStatusAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServicePrincipal?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{DelegatedAdministrators?:array<array{Id?:string, Arn?:string, Email?:string, Name?:string, Status?:"ACTIVE"|"SUSPENDED"|"PENDING_CLOSURE", JoinedMethod?:"INVITED"|"CREATED", JoinedTimestamp?:int|string|\DateTimeInterface, DelegationEnabledDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listDelegatedAdministrators(array $args = []): \AWS\Result { }

    /**
     * @param array{ServicePrincipal?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{DelegatedAdministrators?:array<array{Id?:string, Arn?:string, Email?:string, Name?:string, Status?:"ACTIVE"|"SUSPENDED"|"PENDING_CLOSURE", JoinedMethod?:"INVITED"|"CREATED", JoinedTimestamp?:int|string|\DateTimeInterface, DelegationEnabledDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listDelegatedAdministratorsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{DelegatedServices?:array<array{ServicePrincipal?:string, DelegationEnabledDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listDelegatedServicesForAccount(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{DelegatedServices?:array<array{ServicePrincipal?:string, DelegationEnabledDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listDelegatedServicesForAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filter?:array{ActionType?:"INVITE"|"ENABLE_ALL_FEATURES"|"APPROVE_ALL_FEATURES"|"ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE", ParentHandshakeId?:string}, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Handshakes?:array<array{Id?:string, Arn?:string, Parties?:array<array{Id:string, Type:"ACCOUNT"|"ORGANIZATION"|"EMAIL"}>, State?:"REQUESTED"|"OPEN"|"CANCELED"|"ACCEPTED"|"DECLINED"|"EXPIRED", RequestedTimestamp?:int|string|\DateTimeInterface, ExpirationTimestamp?:int|string|\DateTimeInterface, Action?:"INVITE"|"ENABLE_ALL_FEATURES"|"APPROVE_ALL_FEATURES"|"ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE", Resources?:array<array{Value?:string, Type?:"ACCOUNT"|"ORGANIZATION"|"ORGANIZATION_FEATURE_SET"|"EMAIL"|"MASTER_EMAIL"|"MASTER_NAME"|"NOTES"|"PARENT_HANDSHAKE", Resources?:mixed}>}>, NextToken?:string}>
     */
    public function listHandshakesForAccount(array $args = []): \AWS\Result { }

    /**
     * @param array{Filter?:array{ActionType?:"INVITE"|"ENABLE_ALL_FEATURES"|"APPROVE_ALL_FEATURES"|"ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE", ParentHandshakeId?:string}, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Handshakes?:array<array{Id?:string, Arn?:string, Parties?:array<array{Id:string, Type:"ACCOUNT"|"ORGANIZATION"|"EMAIL"}>, State?:"REQUESTED"|"OPEN"|"CANCELED"|"ACCEPTED"|"DECLINED"|"EXPIRED", RequestedTimestamp?:int|string|\DateTimeInterface, ExpirationTimestamp?:int|string|\DateTimeInterface, Action?:"INVITE"|"ENABLE_ALL_FEATURES"|"APPROVE_ALL_FEATURES"|"ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE", Resources?:array<array{Value?:string, Type?:"ACCOUNT"|"ORGANIZATION"|"ORGANIZATION_FEATURE_SET"|"EMAIL"|"MASTER_EMAIL"|"MASTER_NAME"|"NOTES"|"PARENT_HANDSHAKE", Resources?:mixed}>}>, NextToken?:string}>
     */
    public function listHandshakesForAccountAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filter?:array{ActionType?:"INVITE"|"ENABLE_ALL_FEATURES"|"APPROVE_ALL_FEATURES"|"ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE", ParentHandshakeId?:string}, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Handshakes?:array<array{Id?:string, Arn?:string, Parties?:array<array{Id:string, Type:"ACCOUNT"|"ORGANIZATION"|"EMAIL"}>, State?:"REQUESTED"|"OPEN"|"CANCELED"|"ACCEPTED"|"DECLINED"|"EXPIRED", RequestedTimestamp?:int|string|\DateTimeInterface, ExpirationTimestamp?:int|string|\DateTimeInterface, Action?:"INVITE"|"ENABLE_ALL_FEATURES"|"APPROVE_ALL_FEATURES"|"ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE", Resources?:array<array{Value?:string, Type?:"ACCOUNT"|"ORGANIZATION"|"ORGANIZATION_FEATURE_SET"|"EMAIL"|"MASTER_EMAIL"|"MASTER_NAME"|"NOTES"|"PARENT_HANDSHAKE", Resources?:mixed}>}>, NextToken?:string}>
     */
    public function listHandshakesForOrganization(array $args = []): \AWS\Result { }

    /**
     * @param array{Filter?:array{ActionType?:"INVITE"|"ENABLE_ALL_FEATURES"|"APPROVE_ALL_FEATURES"|"ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE", ParentHandshakeId?:string}, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Handshakes?:array<array{Id?:string, Arn?:string, Parties?:array<array{Id:string, Type:"ACCOUNT"|"ORGANIZATION"|"EMAIL"}>, State?:"REQUESTED"|"OPEN"|"CANCELED"|"ACCEPTED"|"DECLINED"|"EXPIRED", RequestedTimestamp?:int|string|\DateTimeInterface, ExpirationTimestamp?:int|string|\DateTimeInterface, Action?:"INVITE"|"ENABLE_ALL_FEATURES"|"APPROVE_ALL_FEATURES"|"ADD_ORGANIZATIONS_SERVICE_LINKED_ROLE", Resources?:array<array{Value?:string, Type?:"ACCOUNT"|"ORGANIZATION"|"ORGANIZATION_FEATURE_SET"|"EMAIL"|"MASTER_EMAIL"|"MASTER_NAME"|"NOTES"|"PARENT_HANDSHAKE", Resources?:mixed}>}>, NextToken?:string}>
     */
    public function listHandshakesForOrganizationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ParentId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{OrganizationalUnits?:array<array{Id?:string, Arn?:string, Name?:string}>, NextToken?:string}>
     */
    public function listOrganizationalUnitsForParent(array $args): \AWS\Result { }

    /**
     * @param array{ParentId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{OrganizationalUnits?:array<array{Id?:string, Arn?:string, Name?:string}>, NextToken?:string}>
     */
    public function listOrganizationalUnitsForParentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChildId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Parents?:array<array{Id?:string, Type?:"ROOT"|"ORGANIZATIONAL_UNIT"}>, NextToken?:string}>
     */
    public function listParents(array $args): \AWS\Result { }

    /**
     * @param array{ChildId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Parents?:array<array{Id?:string, Type?:"ROOT"|"ORGANIZATIONAL_UNIT"}>, NextToken?:string}>
     */
    public function listParentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filter:"SERVICE_CONTROL_POLICY"|"RESOURCE_CONTROL_POLICY"|"TAG_POLICY"|"BACKUP_POLICY"|"AISERVICES_OPT_OUT_POLICY"|"CHATBOT_POLICY"|"DECLARATIVE_POLICY_EC2", NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Policies?:array<array{Id?:string, Arn?:string, Name?:string, Description?:string, Type?:"SERVICE_CONTROL_POLICY"|"RESOURCE_CONTROL_POLICY"|"TAG_POLICY"|"BACKUP_POLICY"|"AISERVICES_OPT_OUT_POLICY"|"CHATBOT_POLICY"|"DECLARATIVE_POLICY_EC2", AwsManaged?:bool}>, NextToken?:string}>
     */
    public function listPolicies(array $args): \AWS\Result { }

    /**
     * @param array{Filter:"SERVICE_CONTROL_POLICY"|"RESOURCE_CONTROL_POLICY"|"TAG_POLICY"|"BACKUP_POLICY"|"AISERVICES_OPT_OUT_POLICY"|"CHATBOT_POLICY"|"DECLARATIVE_POLICY_EC2", NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policies?:array<array{Id?:string, Arn?:string, Name?:string, Description?:string, Type?:"SERVICE_CONTROL_POLICY"|"RESOURCE_CONTROL_POLICY"|"TAG_POLICY"|"BACKUP_POLICY"|"AISERVICES_OPT_OUT_POLICY"|"CHATBOT_POLICY"|"DECLARATIVE_POLICY_EC2", AwsManaged?:bool}>, NextToken?:string}>
     */
    public function listPoliciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TargetId:string, Filter:"SERVICE_CONTROL_POLICY"|"RESOURCE_CONTROL_POLICY"|"TAG_POLICY"|"BACKUP_POLICY"|"AISERVICES_OPT_OUT_POLICY"|"CHATBOT_POLICY"|"DECLARATIVE_POLICY_EC2", NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Policies?:array<array{Id?:string, Arn?:string, Name?:string, Description?:string, Type?:"SERVICE_CONTROL_POLICY"|"RESOURCE_CONTROL_POLICY"|"TAG_POLICY"|"BACKUP_POLICY"|"AISERVICES_OPT_OUT_POLICY"|"CHATBOT_POLICY"|"DECLARATIVE_POLICY_EC2", AwsManaged?:bool}>, NextToken?:string}>
     */
    public function listPoliciesForTarget(array $args): \AWS\Result { }

    /**
     * @param array{TargetId:string, Filter:"SERVICE_CONTROL_POLICY"|"RESOURCE_CONTROL_POLICY"|"TAG_POLICY"|"BACKUP_POLICY"|"AISERVICES_OPT_OUT_POLICY"|"CHATBOT_POLICY"|"DECLARATIVE_POLICY_EC2", NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policies?:array<array{Id?:string, Arn?:string, Name?:string, Description?:string, Type?:"SERVICE_CONTROL_POLICY"|"RESOURCE_CONTROL_POLICY"|"TAG_POLICY"|"BACKUP_POLICY"|"AISERVICES_OPT_OUT_POLICY"|"CHATBOT_POLICY"|"DECLARATIVE_POLICY_EC2", AwsManaged?:bool}>, NextToken?:string}>
     */
    public function listPoliciesForTargetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Roots?:array<array{Id?:string, Arn?:string, Name?:string, PolicyTypes?:array<array{Type?:"SERVICE_CONTROL_POLICY"|"RESOURCE_CONTROL_POLICY"|"TAG_POLICY"|"BACKUP_POLICY"|"AISERVICES_OPT_OUT_POLICY"|"CHATBOT_POLICY"|"DECLARATIVE_POLICY_EC2", Status?:"ENABLED"|"PENDING_ENABLE"|"PENDING_DISABLE"}>}>, NextToken?:string}>
     */
    public function listRoots(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Roots?:array<array{Id?:string, Arn?:string, Name?:string, PolicyTypes?:array<array{Type?:"SERVICE_CONTROL_POLICY"|"RESOURCE_CONTROL_POLICY"|"TAG_POLICY"|"BACKUP_POLICY"|"AISERVICES_OPT_OUT_POLICY"|"CHATBOT_POLICY"|"DECLARATIVE_POLICY_EC2", Status?:"ENABLED"|"PENDING_ENABLE"|"PENDING_DISABLE"}>}>, NextToken?:string}>
     */
    public function listRootsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, NextToken?:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value:string}>, NextToken?:string}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value:string}>, NextToken?:string}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PolicyId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Targets?:array<array{TargetId?:string, Arn?:string, Name?:string, Type?:"ACCOUNT"|"ORGANIZATIONAL_UNIT"|"ROOT"}>, NextToken?:string}>
     */
    public function listTargetsForPolicy(array $args): \AWS\Result { }

    /**
     * @param array{PolicyId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Targets?:array<array{TargetId?:string, Arn?:string, Name?:string, Type?:"ACCOUNT"|"ORGANIZATIONAL_UNIT"|"ROOT"}>, NextToken?:string}>
     */
    public function listTargetsForPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, SourceParentId:string, DestinationParentId:string} $args
     * @return \AWS\Result<void>
     */
    public function moveAccount(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, SourceParentId:string, DestinationParentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function moveAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Content:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{ResourcePolicy?:array{ResourcePolicySummary?:array{Id?:string, Arn?:string}, Content?:string}}>
     */
    public function putResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{Content:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourcePolicy?:array{ResourcePolicySummary?:array{Id?:string, Arn?:string}, Content?:string}}>
     */
    public function putResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, ServicePrincipal:string} $args
     * @return \AWS\Result<void>
     */
    public function registerDelegatedAdministrator(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, ServicePrincipal:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function registerDelegatedAdministratorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string} $args
     * @return \AWS\Result<void>
     */
    public function removeAccountFromOrganization(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function removeAccountFromOrganizationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<void>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, TagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OrganizationalUnitId:string, Name?:string} $args
     * @return \AWS\Result<array{OrganizationalUnit?:array{Id?:string, Arn?:string, Name?:string}}>
     */
    public function updateOrganizationalUnit(array $args): \AWS\Result { }

    /**
     * @param array{OrganizationalUnitId:string, Name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{OrganizationalUnit?:array{Id?:string, Arn?:string, Name?:string}}>
     */
    public function updateOrganizationalUnitAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PolicyId:string, Name?:string, Description?:string, Content?:string} $args
     * @return \AWS\Result<array{Policy?:array{PolicySummary?:array{Id?:string, Arn?:string, Name?:string, Description?:string, Type?:"SERVICE_CONTROL_POLICY"|"RESOURCE_CONTROL_POLICY"|"TAG_POLICY"|"BACKUP_POLICY"|"AISERVICES_OPT_OUT_POLICY"|"CHATBOT_POLICY"|"DECLARATIVE_POLICY_EC2", AwsManaged?:bool}, Content?:string}}>
     */
    public function updatePolicy(array $args): \AWS\Result { }

    /**
     * @param array{PolicyId:string, Name?:string, Description?:string, Content?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:array{PolicySummary?:array{Id?:string, Arn?:string, Name?:string, Description?:string, Type?:"SERVICE_CONTROL_POLICY"|"RESOURCE_CONTROL_POLICY"|"TAG_POLICY"|"BACKUP_POLICY"|"AISERVICES_OPT_OUT_POLICY"|"CHATBOT_POLICY"|"DECLARATIVE_POLICY_EC2", AwsManaged?:bool}, Content?:string}}>
     */
    public function updatePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
