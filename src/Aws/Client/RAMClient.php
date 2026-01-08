<?php
namespace AWS\RAM;

class RAMClient
{
    /**
     * @param array{resourceShareInvitationArn:string, clientToken?:string} $args
     * @return \AWS\Result<array{resourceShareInvitation?:array{resourceShareInvitationArn?:string, resourceShareName?:string, resourceShareArn?:string, senderAccountId?:string, receiverAccountId?:string, invitationTimestamp?:int|string|\DateTimeInterface, status?:"PENDING"|"ACCEPTED"|"REJECTED"|"EXPIRED", resourceShareAssociations?:array<array{resourceShareArn?:string, resourceShareName?:string, associatedEntity?:string, associationType?:"PRINCIPAL"|"RESOURCE", status?:"ASSOCIATING"|"ASSOCIATED"|"FAILED"|"DISASSOCIATING"|"DISASSOCIATED", statusMessage?:string, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, external?:bool}>, receiverArn?:string}, clientToken?:string}>
     */
    public function acceptResourceShareInvitation(array $args): \AWS\Result { }

    /**
     * @param array{resourceShareInvitationArn:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{resourceShareInvitation?:array{resourceShareInvitationArn?:string, resourceShareName?:string, resourceShareArn?:string, senderAccountId?:string, receiverAccountId?:string, invitationTimestamp?:int|string|\DateTimeInterface, status?:"PENDING"|"ACCEPTED"|"REJECTED"|"EXPIRED", resourceShareAssociations?:array<array{resourceShareArn?:string, resourceShareName?:string, associatedEntity?:string, associationType?:"PRINCIPAL"|"RESOURCE", status?:"ASSOCIATING"|"ASSOCIATED"|"FAILED"|"DISASSOCIATING"|"DISASSOCIATED", statusMessage?:string, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, external?:bool}>, receiverArn?:string}, clientToken?:string}>
     */
    public function acceptResourceShareInvitationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceShareArn:string, resourceArns?:array<string>, principals?:array<string>, clientToken?:string, sources?:array<string>} $args
     * @return \AWS\Result<array{resourceShareAssociations?:array<array{resourceShareArn?:string, resourceShareName?:string, associatedEntity?:string, associationType?:"PRINCIPAL"|"RESOURCE", status?:"ASSOCIATING"|"ASSOCIATED"|"FAILED"|"DISASSOCIATING"|"DISASSOCIATED", statusMessage?:string, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, external?:bool}>, clientToken?:string}>
     */
    public function associateResourceShare(array $args): \AWS\Result { }

    /**
     * @param array{resourceShareArn:string, resourceArns?:array<string>, principals?:array<string>, clientToken?:string, sources?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{resourceShareAssociations?:array<array{resourceShareArn?:string, resourceShareName?:string, associatedEntity?:string, associationType?:"PRINCIPAL"|"RESOURCE", status?:"ASSOCIATING"|"ASSOCIATED"|"FAILED"|"DISASSOCIATING"|"DISASSOCIATED", statusMessage?:string, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, external?:bool}>, clientToken?:string}>
     */
    public function associateResourceShareAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceShareArn:string, permissionArn:string, replace?:bool, clientToken?:string, permissionVersion?:int} $args
     * @return \AWS\Result<array{returnValue?:bool, clientToken?:string}>
     */
    public function associateResourceSharePermission(array $args): \AWS\Result { }

    /**
     * @param array{resourceShareArn:string, permissionArn:string, replace?:bool, clientToken?:string, permissionVersion?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{returnValue?:bool, clientToken?:string}>
     */
    public function associateResourceSharePermissionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, resourceType:string, policyTemplate:string, clientToken?:string, tags?:array<array{key?:string, value?:string}>} $args
     * @return \AWS\Result<array{permission?:array{arn?:string, version?:string, defaultVersion?:bool, name?:string, resourceType?:string, status?:string, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, isResourceTypeDefault?:bool, permissionType?:"CUSTOMER_MANAGED"|"AWS_MANAGED", featureSet?:"CREATED_FROM_POLICY"|"PROMOTING_TO_STANDARD"|"STANDARD", tags?:array<array{key?:string, value?:string}>}, clientToken?:string}>
     */
    public function createPermission(array $args): \AWS\Result { }

    /**
     * @param array{name:string, resourceType:string, policyTemplate:string, clientToken?:string, tags?:array<array{key?:string, value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{permission?:array{arn?:string, version?:string, defaultVersion?:bool, name?:string, resourceType?:string, status?:string, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, isResourceTypeDefault?:bool, permissionType?:"CUSTOMER_MANAGED"|"AWS_MANAGED", featureSet?:"CREATED_FROM_POLICY"|"PROMOTING_TO_STANDARD"|"STANDARD", tags?:array<array{key?:string, value?:string}>}, clientToken?:string}>
     */
    public function createPermissionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{permissionArn:string, policyTemplate:string, clientToken?:string} $args
     * @return \AWS\Result<array{permission?:array{arn?:string, version?:string, defaultVersion?:bool, name?:string, resourceType?:string, permission?:mixed, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, isResourceTypeDefault?:bool, permissionType?:"CUSTOMER_MANAGED"|"AWS_MANAGED", featureSet?:"CREATED_FROM_POLICY"|"PROMOTING_TO_STANDARD"|"STANDARD", status?:"ATTACHABLE"|"UNATTACHABLE"|"DELETING"|"DELETED", tags?:array<array{key?:string, value?:string}>}, clientToken?:string}>
     */
    public function createPermissionVersion(array $args): \AWS\Result { }

    /**
     * @param array{permissionArn:string, policyTemplate:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{permission?:array{arn?:string, version?:string, defaultVersion?:bool, name?:string, resourceType?:string, permission?:mixed, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, isResourceTypeDefault?:bool, permissionType?:"CUSTOMER_MANAGED"|"AWS_MANAGED", featureSet?:"CREATED_FROM_POLICY"|"PROMOTING_TO_STANDARD"|"STANDARD", status?:"ATTACHABLE"|"UNATTACHABLE"|"DELETING"|"DELETED", tags?:array<array{key?:string, value?:string}>}, clientToken?:string}>
     */
    public function createPermissionVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, resourceArns?:array<string>, principals?:array<string>, tags?:array<array{key?:string, value?:string}>, allowExternalPrincipals?:bool, clientToken?:string, permissionArns?:array<string>, sources?:array<string>} $args
     * @return \AWS\Result<array{resourceShare?:array{resourceShareArn?:string, name?:string, owningAccountId?:string, allowExternalPrincipals?:bool, status?:"PENDING"|"ACTIVE"|"FAILED"|"DELETING"|"DELETED", statusMessage?:string, tags?:array<array{key?:string, value?:string}>, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, featureSet?:"CREATED_FROM_POLICY"|"PROMOTING_TO_STANDARD"|"STANDARD"}, clientToken?:string}>
     */
    public function createResourceShare(array $args): \AWS\Result { }

    /**
     * @param array{name:string, resourceArns?:array<string>, principals?:array<string>, tags?:array<array{key?:string, value?:string}>, allowExternalPrincipals?:bool, clientToken?:string, permissionArns?:array<string>, sources?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{resourceShare?:array{resourceShareArn?:string, name?:string, owningAccountId?:string, allowExternalPrincipals?:bool, status?:"PENDING"|"ACTIVE"|"FAILED"|"DELETING"|"DELETED", statusMessage?:string, tags?:array<array{key?:string, value?:string}>, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, featureSet?:"CREATED_FROM_POLICY"|"PROMOTING_TO_STANDARD"|"STANDARD"}, clientToken?:string}>
     */
    public function createResourceShareAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{permissionArn:string, clientToken?:string} $args
     * @return \AWS\Result<array{returnValue?:bool, clientToken?:string, permissionStatus?:"ATTACHABLE"|"UNATTACHABLE"|"DELETING"|"DELETED"}>
     */
    public function deletePermission(array $args): \AWS\Result { }

    /**
     * @param array{permissionArn:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{returnValue?:bool, clientToken?:string, permissionStatus?:"ATTACHABLE"|"UNATTACHABLE"|"DELETING"|"DELETED"}>
     */
    public function deletePermissionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{permissionArn:string, permissionVersion:int, clientToken?:string} $args
     * @return \AWS\Result<array{returnValue?:bool, clientToken?:string, permissionStatus?:"ATTACHABLE"|"UNATTACHABLE"|"DELETING"|"DELETED"}>
     */
    public function deletePermissionVersion(array $args): \AWS\Result { }

    /**
     * @param array{permissionArn:string, permissionVersion:int, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{returnValue?:bool, clientToken?:string, permissionStatus?:"ATTACHABLE"|"UNATTACHABLE"|"DELETING"|"DELETED"}>
     */
    public function deletePermissionVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceShareArn:string, clientToken?:string} $args
     * @return \AWS\Result<array{returnValue?:bool, clientToken?:string}>
     */
    public function deleteResourceShare(array $args): \AWS\Result { }

    /**
     * @param array{resourceShareArn:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{returnValue?:bool, clientToken?:string}>
     */
    public function deleteResourceShareAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceShareArn:string, resourceArns?:array<string>, principals?:array<string>, clientToken?:string, sources?:array<string>} $args
     * @return \AWS\Result<array{resourceShareAssociations?:array<array{resourceShareArn?:string, resourceShareName?:string, associatedEntity?:string, associationType?:"PRINCIPAL"|"RESOURCE", status?:"ASSOCIATING"|"ASSOCIATED"|"FAILED"|"DISASSOCIATING"|"DISASSOCIATED", statusMessage?:string, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, external?:bool}>, clientToken?:string}>
     */
    public function disassociateResourceShare(array $args): \AWS\Result { }

    /**
     * @param array{resourceShareArn:string, resourceArns?:array<string>, principals?:array<string>, clientToken?:string, sources?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{resourceShareAssociations?:array<array{resourceShareArn?:string, resourceShareName?:string, associatedEntity?:string, associationType?:"PRINCIPAL"|"RESOURCE", status?:"ASSOCIATING"|"ASSOCIATED"|"FAILED"|"DISASSOCIATING"|"DISASSOCIATED", statusMessage?:string, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, external?:bool}>, clientToken?:string}>
     */
    public function disassociateResourceShareAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceShareArn:string, permissionArn:string, clientToken?:string} $args
     * @return \AWS\Result<array{returnValue?:bool, clientToken?:string}>
     */
    public function disassociateResourceSharePermission(array $args): \AWS\Result { }

    /**
     * @param array{resourceShareArn:string, permissionArn:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{returnValue?:bool, clientToken?:string}>
     */
    public function disassociateResourceSharePermissionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{returnValue?:bool}>
     */
    public function enableSharingWithAwsOrganization(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{returnValue?:bool}>
     */
    public function enableSharingWithAwsOrganizationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{permissionArn:string, permissionVersion?:int} $args
     * @return \AWS\Result<array{permission?:array{arn?:string, version?:string, defaultVersion?:bool, name?:string, resourceType?:string, permission?:mixed, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, isResourceTypeDefault?:bool, permissionType?:"CUSTOMER_MANAGED"|"AWS_MANAGED", featureSet?:"CREATED_FROM_POLICY"|"PROMOTING_TO_STANDARD"|"STANDARD", status?:"ATTACHABLE"|"UNATTACHABLE"|"DELETING"|"DELETED", tags?:array<array{key?:string, value?:string}>}}>
     */
    public function getPermission(array $args): \AWS\Result { }

    /**
     * @param array{permissionArn:string, permissionVersion?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{permission?:array{arn?:string, version?:string, defaultVersion?:bool, name?:string, resourceType?:string, permission?:mixed, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, isResourceTypeDefault?:bool, permissionType?:"CUSTOMER_MANAGED"|"AWS_MANAGED", featureSet?:"CREATED_FROM_POLICY"|"PROMOTING_TO_STANDARD"|"STANDARD", status?:"ATTACHABLE"|"UNATTACHABLE"|"DELETING"|"DELETED", tags?:array<array{key?:string, value?:string}>}}>
     */
    public function getPermissionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArns:array<string>, principal?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{policies?:array<string>, nextToken?:string}>
     */
    public function getResourcePolicies(array $args): \AWS\Result { }

    /**
     * @param array{resourceArns:array<string>, principal?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{policies?:array<string>, nextToken?:string}>
     */
    public function getResourcePoliciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{associationType:"PRINCIPAL"|"RESOURCE", resourceShareArns?:array<string>, resourceArn?:string, principal?:string, associationStatus?:"ASSOCIATING"|"ASSOCIATED"|"FAILED"|"DISASSOCIATING"|"DISASSOCIATED", nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{resourceShareAssociations?:array<array{resourceShareArn?:string, resourceShareName?:string, associatedEntity?:string, associationType?:"PRINCIPAL"|"RESOURCE", status?:"ASSOCIATING"|"ASSOCIATED"|"FAILED"|"DISASSOCIATING"|"DISASSOCIATED", statusMessage?:string, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, external?:bool}>, nextToken?:string}>
     */
    public function getResourceShareAssociations(array $args): \AWS\Result { }

    /**
     * @param array{associationType:"PRINCIPAL"|"RESOURCE", resourceShareArns?:array<string>, resourceArn?:string, principal?:string, associationStatus?:"ASSOCIATING"|"ASSOCIATED"|"FAILED"|"DISASSOCIATING"|"DISASSOCIATED", nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{resourceShareAssociations?:array<array{resourceShareArn?:string, resourceShareName?:string, associatedEntity?:string, associationType?:"PRINCIPAL"|"RESOURCE", status?:"ASSOCIATING"|"ASSOCIATED"|"FAILED"|"DISASSOCIATING"|"DISASSOCIATED", statusMessage?:string, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, external?:bool}>, nextToken?:string}>
     */
    public function getResourceShareAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceShareInvitationArns?:array<string>, resourceShareArns?:array<string>, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{resourceShareInvitations?:array<array{resourceShareInvitationArn?:string, resourceShareName?:string, resourceShareArn?:string, senderAccountId?:string, receiverAccountId?:string, invitationTimestamp?:int|string|\DateTimeInterface, status?:"PENDING"|"ACCEPTED"|"REJECTED"|"EXPIRED", resourceShareAssociations?:array<array{resourceShareArn?:string, resourceShareName?:string, associatedEntity?:string, associationType?:"PRINCIPAL"|"RESOURCE", status?:"ASSOCIATING"|"ASSOCIATED"|"FAILED"|"DISASSOCIATING"|"DISASSOCIATED", statusMessage?:string, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, external?:bool}>, receiverArn?:string}>, nextToken?:string}>
     */
    public function getResourceShareInvitations(array $args = []): \AWS\Result { }

    /**
     * @param array{resourceShareInvitationArns?:array<string>, resourceShareArns?:array<string>, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{resourceShareInvitations?:array<array{resourceShareInvitationArn?:string, resourceShareName?:string, resourceShareArn?:string, senderAccountId?:string, receiverAccountId?:string, invitationTimestamp?:int|string|\DateTimeInterface, status?:"PENDING"|"ACCEPTED"|"REJECTED"|"EXPIRED", resourceShareAssociations?:array<array{resourceShareArn?:string, resourceShareName?:string, associatedEntity?:string, associationType?:"PRINCIPAL"|"RESOURCE", status?:"ASSOCIATING"|"ASSOCIATED"|"FAILED"|"DISASSOCIATING"|"DISASSOCIATED", statusMessage?:string, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, external?:bool}>, receiverArn?:string}>, nextToken?:string}>
     */
    public function getResourceShareInvitationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceShareArns?:array<string>, resourceShareStatus?:"PENDING"|"ACTIVE"|"FAILED"|"DELETING"|"DELETED", resourceOwner:"SELF"|"OTHER-ACCOUNTS", name?:string, tagFilters?:array<array{tagKey?:string, tagValues?:array<string>}>, nextToken?:string, maxResults?:int, permissionArn?:string, permissionVersion?:int} $args
     * @return \AWS\Result<array{resourceShares?:array<array{resourceShareArn?:string, name?:string, owningAccountId?:string, allowExternalPrincipals?:bool, status?:"PENDING"|"ACTIVE"|"FAILED"|"DELETING"|"DELETED", statusMessage?:string, tags?:array<array{key?:string, value?:string}>, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, featureSet?:"CREATED_FROM_POLICY"|"PROMOTING_TO_STANDARD"|"STANDARD"}>, nextToken?:string}>
     */
    public function getResourceShares(array $args): \AWS\Result { }

    /**
     * @param array{resourceShareArns?:array<string>, resourceShareStatus?:"PENDING"|"ACTIVE"|"FAILED"|"DELETING"|"DELETED", resourceOwner:"SELF"|"OTHER-ACCOUNTS", name?:string, tagFilters?:array<array{tagKey?:string, tagValues?:array<string>}>, nextToken?:string, maxResults?:int, permissionArn?:string, permissionVersion?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{resourceShares?:array<array{resourceShareArn?:string, name?:string, owningAccountId?:string, allowExternalPrincipals?:bool, status?:"PENDING"|"ACTIVE"|"FAILED"|"DELETING"|"DELETED", statusMessage?:string, tags?:array<array{key?:string, value?:string}>, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, featureSet?:"CREATED_FROM_POLICY"|"PROMOTING_TO_STANDARD"|"STANDARD"}>, nextToken?:string}>
     */
    public function getResourceSharesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceShareInvitationArn:string, nextToken?:string, maxResults?:int, resourceRegionScope?:"ALL"|"REGIONAL"|"GLOBAL"} $args
     * @return \AWS\Result<array{resources?:array<array{arn?:string, type?:string, resourceShareArn?:string, resourceGroupArn?:string, status?:"AVAILABLE"|"ZONAL_RESOURCE_INACCESSIBLE"|"LIMIT_EXCEEDED"|"UNAVAILABLE"|"PENDING", statusMessage?:string, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, resourceRegionScope?:"REGIONAL"|"GLOBAL"}>, nextToken?:string}>
     */
    public function listPendingInvitationResources(array $args): \AWS\Result { }

    /**
     * @param array{resourceShareInvitationArn:string, nextToken?:string, maxResults?:int, resourceRegionScope?:"ALL"|"REGIONAL"|"GLOBAL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{resources?:array<array{arn?:string, type?:string, resourceShareArn?:string, resourceGroupArn?:string, status?:"AVAILABLE"|"ZONAL_RESOURCE_INACCESSIBLE"|"LIMIT_EXCEEDED"|"UNAVAILABLE"|"PENDING", statusMessage?:string, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, resourceRegionScope?:"REGIONAL"|"GLOBAL"}>, nextToken?:string}>
     */
    public function listPendingInvitationResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{permissionArn?:string, permissionVersion?:int, associationStatus?:"ASSOCIATING"|"ASSOCIATED"|"FAILED"|"DISASSOCIATING"|"DISASSOCIATED", resourceType?:string, featureSet?:"CREATED_FROM_POLICY"|"PROMOTING_TO_STANDARD"|"STANDARD", defaultVersion?:bool, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{permissions?:array<array{arn?:string, permissionVersion?:string, defaultVersion?:bool, resourceType?:string, status?:string, featureSet?:"CREATED_FROM_POLICY"|"PROMOTING_TO_STANDARD"|"STANDARD", lastUpdatedTime?:int|string|\DateTimeInterface, resourceShareArn?:string}>, nextToken?:string}>
     */
    public function listPermissionAssociations(array $args = []): \AWS\Result { }

    /**
     * @param array{permissionArn?:string, permissionVersion?:int, associationStatus?:"ASSOCIATING"|"ASSOCIATED"|"FAILED"|"DISASSOCIATING"|"DISASSOCIATED", resourceType?:string, featureSet?:"CREATED_FROM_POLICY"|"PROMOTING_TO_STANDARD"|"STANDARD", defaultVersion?:bool, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{permissions?:array<array{arn?:string, permissionVersion?:string, defaultVersion?:bool, resourceType?:string, status?:string, featureSet?:"CREATED_FROM_POLICY"|"PROMOTING_TO_STANDARD"|"STANDARD", lastUpdatedTime?:int|string|\DateTimeInterface, resourceShareArn?:string}>, nextToken?:string}>
     */
    public function listPermissionAssociationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{permissionArn:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{permissions?:array<array{arn?:string, version?:string, defaultVersion?:bool, name?:string, resourceType?:string, status?:string, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, isResourceTypeDefault?:bool, permissionType?:"CUSTOMER_MANAGED"|"AWS_MANAGED", featureSet?:"CREATED_FROM_POLICY"|"PROMOTING_TO_STANDARD"|"STANDARD", tags?:array<array{key?:string, value?:string}>}>, nextToken?:string}>
     */
    public function listPermissionVersions(array $args): \AWS\Result { }

    /**
     * @param array{permissionArn:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{permissions?:array<array{arn?:string, version?:string, defaultVersion?:bool, name?:string, resourceType?:string, status?:string, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, isResourceTypeDefault?:bool, permissionType?:"CUSTOMER_MANAGED"|"AWS_MANAGED", featureSet?:"CREATED_FROM_POLICY"|"PROMOTING_TO_STANDARD"|"STANDARD", tags?:array<array{key?:string, value?:string}>}>, nextToken?:string}>
     */
    public function listPermissionVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceType?:string, nextToken?:string, maxResults?:int, permissionType?:"ALL"|"AWS_MANAGED"|"CUSTOMER_MANAGED"} $args
     * @return \AWS\Result<array{permissions?:array<array{arn?:string, version?:string, defaultVersion?:bool, name?:string, resourceType?:string, status?:string, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, isResourceTypeDefault?:bool, permissionType?:"CUSTOMER_MANAGED"|"AWS_MANAGED", featureSet?:"CREATED_FROM_POLICY"|"PROMOTING_TO_STANDARD"|"STANDARD", tags?:array<array{key?:string, value?:string}>}>, nextToken?:string}>
     */
    public function listPermissions(array $args = []): \AWS\Result { }

    /**
     * @param array{resourceType?:string, nextToken?:string, maxResults?:int, permissionType?:"ALL"|"AWS_MANAGED"|"CUSTOMER_MANAGED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{permissions?:array<array{arn?:string, version?:string, defaultVersion?:bool, name?:string, resourceType?:string, status?:string, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, isResourceTypeDefault?:bool, permissionType?:"CUSTOMER_MANAGED"|"AWS_MANAGED", featureSet?:"CREATED_FROM_POLICY"|"PROMOTING_TO_STANDARD"|"STANDARD", tags?:array<array{key?:string, value?:string}>}>, nextToken?:string}>
     */
    public function listPermissionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceOwner:"SELF"|"OTHER-ACCOUNTS", resourceArn?:string, principals?:array<string>, resourceType?:string, resourceShareArns?:array<string>, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{principals?:array<array{id?:string, resourceShareArn?:string, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, external?:bool}>, nextToken?:string}>
     */
    public function listPrincipals(array $args): \AWS\Result { }

    /**
     * @param array{resourceOwner:"SELF"|"OTHER-ACCOUNTS", resourceArn?:string, principals?:array<string>, resourceType?:string, resourceShareArns?:array<string>, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{principals?:array<array{id?:string, resourceShareArn?:string, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, external?:bool}>, nextToken?:string}>
     */
    public function listPrincipalsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{workIds?:array<string>, status?:"IN_PROGRESS"|"COMPLETED"|"FAILED", nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{replacePermissionAssociationsWorks?:array<array{id?:string, fromPermissionArn?:string, fromPermissionVersion?:string, toPermissionArn?:string, toPermissionVersion?:string, status?:"IN_PROGRESS"|"COMPLETED"|"FAILED", statusMessage?:string, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listReplacePermissionAssociationsWork(array $args = []): \AWS\Result { }

    /**
     * @param array{workIds?:array<string>, status?:"IN_PROGRESS"|"COMPLETED"|"FAILED", nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{replacePermissionAssociationsWorks?:array<array{id?:string, fromPermissionArn?:string, fromPermissionVersion?:string, toPermissionArn?:string, toPermissionVersion?:string, status?:"IN_PROGRESS"|"COMPLETED"|"FAILED", statusMessage?:string, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listReplacePermissionAssociationsWorkAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceShareArn:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{permissions?:array<array{arn?:string, version?:string, defaultVersion?:bool, name?:string, resourceType?:string, status?:string, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, isResourceTypeDefault?:bool, permissionType?:"CUSTOMER_MANAGED"|"AWS_MANAGED", featureSet?:"CREATED_FROM_POLICY"|"PROMOTING_TO_STANDARD"|"STANDARD", tags?:array<array{key?:string, value?:string}>}>, nextToken?:string}>
     */
    public function listResourceSharePermissions(array $args): \AWS\Result { }

    /**
     * @param array{resourceShareArn:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{permissions?:array<array{arn?:string, version?:string, defaultVersion?:bool, name?:string, resourceType?:string, status?:string, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, isResourceTypeDefault?:bool, permissionType?:"CUSTOMER_MANAGED"|"AWS_MANAGED", featureSet?:"CREATED_FROM_POLICY"|"PROMOTING_TO_STANDARD"|"STANDARD", tags?:array<array{key?:string, value?:string}>}>, nextToken?:string}>
     */
    public function listResourceSharePermissionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int, resourceRegionScope?:"ALL"|"REGIONAL"|"GLOBAL"} $args
     * @return \AWS\Result<array{resourceTypes?:array<array{resourceType?:string, serviceName?:string, resourceRegionScope?:"REGIONAL"|"GLOBAL"}>, nextToken?:string}>
     */
    public function listResourceTypes(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int, resourceRegionScope?:"ALL"|"REGIONAL"|"GLOBAL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{resourceTypes?:array<array{resourceType?:string, serviceName?:string, resourceRegionScope?:"REGIONAL"|"GLOBAL"}>, nextToken?:string}>
     */
    public function listResourceTypesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceOwner:"SELF"|"OTHER-ACCOUNTS", principal?:string, resourceType?:string, resourceArns?:array<string>, resourceShareArns?:array<string>, nextToken?:string, maxResults?:int, resourceRegionScope?:"ALL"|"REGIONAL"|"GLOBAL"} $args
     * @return \AWS\Result<array{resources?:array<array{arn?:string, type?:string, resourceShareArn?:string, resourceGroupArn?:string, status?:"AVAILABLE"|"ZONAL_RESOURCE_INACCESSIBLE"|"LIMIT_EXCEEDED"|"UNAVAILABLE"|"PENDING", statusMessage?:string, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, resourceRegionScope?:"REGIONAL"|"GLOBAL"}>, nextToken?:string}>
     */
    public function listResources(array $args): \AWS\Result { }

    /**
     * @param array{resourceOwner:"SELF"|"OTHER-ACCOUNTS", principal?:string, resourceType?:string, resourceArns?:array<string>, resourceShareArns?:array<string>, nextToken?:string, maxResults?:int, resourceRegionScope?:"ALL"|"REGIONAL"|"GLOBAL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{resources?:array<array{arn?:string, type?:string, resourceShareArn?:string, resourceGroupArn?:string, status?:"AVAILABLE"|"ZONAL_RESOURCE_INACCESSIBLE"|"LIMIT_EXCEEDED"|"UNAVAILABLE"|"PENDING", statusMessage?:string, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, resourceRegionScope?:"REGIONAL"|"GLOBAL"}>, nextToken?:string}>
     */
    public function listResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{permissionArn:string, name:string, clientToken?:string} $args
     * @return \AWS\Result<array{permission?:array{arn?:string, version?:string, defaultVersion?:bool, name?:string, resourceType?:string, status?:string, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, isResourceTypeDefault?:bool, permissionType?:"CUSTOMER_MANAGED"|"AWS_MANAGED", featureSet?:"CREATED_FROM_POLICY"|"PROMOTING_TO_STANDARD"|"STANDARD", tags?:array<array{key?:string, value?:string}>}, clientToken?:string}>
     */
    public function promotePermissionCreatedFromPolicy(array $args): \AWS\Result { }

    /**
     * @param array{permissionArn:string, name:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{permission?:array{arn?:string, version?:string, defaultVersion?:bool, name?:string, resourceType?:string, status?:string, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, isResourceTypeDefault?:bool, permissionType?:"CUSTOMER_MANAGED"|"AWS_MANAGED", featureSet?:"CREATED_FROM_POLICY"|"PROMOTING_TO_STANDARD"|"STANDARD", tags?:array<array{key?:string, value?:string}>}, clientToken?:string}>
     */
    public function promotePermissionCreatedFromPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceShareArn:string} $args
     * @return \AWS\Result<array{returnValue?:bool}>
     */
    public function promoteResourceShareCreatedFromPolicy(array $args): \AWS\Result { }

    /**
     * @param array{resourceShareArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{returnValue?:bool}>
     */
    public function promoteResourceShareCreatedFromPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceShareInvitationArn:string, clientToken?:string} $args
     * @return \AWS\Result<array{resourceShareInvitation?:array{resourceShareInvitationArn?:string, resourceShareName?:string, resourceShareArn?:string, senderAccountId?:string, receiverAccountId?:string, invitationTimestamp?:int|string|\DateTimeInterface, status?:"PENDING"|"ACCEPTED"|"REJECTED"|"EXPIRED", resourceShareAssociations?:array<array{resourceShareArn?:string, resourceShareName?:string, associatedEntity?:string, associationType?:"PRINCIPAL"|"RESOURCE", status?:"ASSOCIATING"|"ASSOCIATED"|"FAILED"|"DISASSOCIATING"|"DISASSOCIATED", statusMessage?:string, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, external?:bool}>, receiverArn?:string}, clientToken?:string}>
     */
    public function rejectResourceShareInvitation(array $args): \AWS\Result { }

    /**
     * @param array{resourceShareInvitationArn:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{resourceShareInvitation?:array{resourceShareInvitationArn?:string, resourceShareName?:string, resourceShareArn?:string, senderAccountId?:string, receiverAccountId?:string, invitationTimestamp?:int|string|\DateTimeInterface, status?:"PENDING"|"ACCEPTED"|"REJECTED"|"EXPIRED", resourceShareAssociations?:array<array{resourceShareArn?:string, resourceShareName?:string, associatedEntity?:string, associationType?:"PRINCIPAL"|"RESOURCE", status?:"ASSOCIATING"|"ASSOCIATED"|"FAILED"|"DISASSOCIATING"|"DISASSOCIATED", statusMessage?:string, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, external?:bool}>, receiverArn?:string}, clientToken?:string}>
     */
    public function rejectResourceShareInvitationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{fromPermissionArn:string, fromPermissionVersion?:int, toPermissionArn:string, clientToken?:string} $args
     * @return \AWS\Result<array{replacePermissionAssociationsWork?:array{id?:string, fromPermissionArn?:string, fromPermissionVersion?:string, toPermissionArn?:string, toPermissionVersion?:string, status?:"IN_PROGRESS"|"COMPLETED"|"FAILED", statusMessage?:string, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface}, clientToken?:string}>
     */
    public function replacePermissionAssociations(array $args): \AWS\Result { }

    /**
     * @param array{fromPermissionArn:string, fromPermissionVersion?:int, toPermissionArn:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{replacePermissionAssociationsWork?:array{id?:string, fromPermissionArn?:string, fromPermissionVersion?:string, toPermissionArn?:string, toPermissionVersion?:string, status?:"IN_PROGRESS"|"COMPLETED"|"FAILED", statusMessage?:string, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface}, clientToken?:string}>
     */
    public function replacePermissionAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{permissionArn:string, permissionVersion:int, clientToken?:string} $args
     * @return \AWS\Result<array{returnValue?:bool, clientToken?:string}>
     */
    public function setDefaultPermissionVersion(array $args): \AWS\Result { }

    /**
     * @param array{permissionArn:string, permissionVersion:int, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{returnValue?:bool, clientToken?:string}>
     */
    public function setDefaultPermissionVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceShareArn?:string, tags:array<array{key?:string, value?:string}>, resourceArn?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceShareArn?:string, tags:array<array{key?:string, value?:string}>, resourceArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceShareArn?:string, tagKeys:array<string>, resourceArn?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceShareArn?:string, tagKeys:array<string>, resourceArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceShareArn:string, name?:string, allowExternalPrincipals?:bool, clientToken?:string} $args
     * @return \AWS\Result<array{resourceShare?:array{resourceShareArn?:string, name?:string, owningAccountId?:string, allowExternalPrincipals?:bool, status?:"PENDING"|"ACTIVE"|"FAILED"|"DELETING"|"DELETED", statusMessage?:string, tags?:array<array{key?:string, value?:string}>, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, featureSet?:"CREATED_FROM_POLICY"|"PROMOTING_TO_STANDARD"|"STANDARD"}, clientToken?:string}>
     */
    public function updateResourceShare(array $args): \AWS\Result { }

    /**
     * @param array{resourceShareArn:string, name?:string, allowExternalPrincipals?:bool, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{resourceShare?:array{resourceShareArn?:string, name?:string, owningAccountId?:string, allowExternalPrincipals?:bool, status?:"PENDING"|"ACTIVE"|"FAILED"|"DELETING"|"DELETED", statusMessage?:string, tags?:array<array{key?:string, value?:string}>, creationTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, featureSet?:"CREATED_FROM_POLICY"|"PROMOTING_TO_STANDARD"|"STANDARD"}, clientToken?:string}>
     */
    public function updateResourceShareAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
