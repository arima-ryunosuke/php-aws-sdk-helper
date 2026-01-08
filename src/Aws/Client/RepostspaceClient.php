<?php
namespace AWS\Repostspace;

class RepostspaceClient
{
    /**
     * @param array{accessorIds:array<string>, role:"EXPERT"|"MODERATOR"|"ADMINISTRATOR"|"SUPPORTREQUESTOR", spaceId:string} $args
     * @return \AWS\Result<array{addedAccessorIds:array<string>, errors:array<array{accessorId:string, error:int, message:string}>}>
     */
    public function batchAddRole(array $args): \AWS\Result { }

    /**
     * @param array{accessorIds:array<string>, role:"EXPERT"|"MODERATOR"|"ADMINISTRATOR"|"SUPPORTREQUESTOR", spaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{addedAccessorIds:array<string>, errors:array<array{accessorId:string, error:int, message:string}>}>
     */
    public function batchAddRoleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accessorIds:array<string>, role:"EXPERT"|"MODERATOR"|"ADMINISTRATOR"|"SUPPORTREQUESTOR", spaceId:string} $args
     * @return \AWS\Result<array{errors:array<array{accessorId:string, error:int, message:string}>, removedAccessorIds:array<string>}>
     */
    public function batchRemoveRole(array $args): \AWS\Result { }

    /**
     * @param array{accessorIds:array<string>, role:"EXPERT"|"MODERATOR"|"ADMINISTRATOR"|"SUPPORTREQUESTOR", spaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{errors:array<array{accessorId:string, error:int, message:string}>, removedAccessorIds:array<string>}>
     */
    public function batchRemoveRoleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, name:string, roleArn?:string, subdomain:string, tags?:array<string, string>, tier:"BASIC"|"STANDARD", userKMSKey?:string} $args
     * @return \AWS\Result<array{spaceId:string}>
     */
    public function createSpace(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, name:string, roleArn?:string, subdomain:string, tags?:array<string, string>, tier:"BASIC"|"STANDARD", userKMSKey?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{spaceId:string}>
     */
    public function createSpaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{spaceId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteSpace(array $args): \AWS\Result { }

    /**
     * @param array{spaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteSpaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{adminId:string, spaceId:string} $args
     * @return \AWS\Result<void>
     */
    public function deregisterAdmin(array $args): \AWS\Result { }

    /**
     * @param array{adminId:string, spaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deregisterAdminAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{spaceId:string} $args
     * @return \AWS\Result<array{arn:string, clientId:string, configurationStatus:"CONFIGURED"|"UNCONFIGURED", contentSize?:int, createDateTime:int|string|\DateTimeInterface, customerRoleArn?:string, deleteDateTime?:int|string|\DateTimeInterface, description?:string, groupAdmins?:array<string>, name:string, randomDomain:string, roles?:array<string, array<"EXPERT"|"MODERATOR"|"ADMINISTRATOR"|"SUPPORTREQUESTOR">>, spaceId:string, status:string, storageLimit:int, tier:"BASIC"|"STANDARD", userAdmins?:array<string>, userCount?:int, userKMSKey?:string, vanityDomain:string, vanityDomainStatus:"PENDING"|"APPROVED"|"UNAPPROVED"}>
     */
    public function getSpace(array $args): \AWS\Result { }

    /**
     * @param array{spaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, clientId:string, configurationStatus:"CONFIGURED"|"UNCONFIGURED", contentSize?:int, createDateTime:int|string|\DateTimeInterface, customerRoleArn?:string, deleteDateTime?:int|string|\DateTimeInterface, description?:string, groupAdmins?:array<string>, name:string, randomDomain:string, roles?:array<string, array<"EXPERT"|"MODERATOR"|"ADMINISTRATOR"|"SUPPORTREQUESTOR">>, spaceId:string, status:string, storageLimit:int, tier:"BASIC"|"STANDARD", userAdmins?:array<string>, userCount?:int, userKMSKey?:string, vanityDomain:string, vanityDomainStatus:"PENDING"|"APPROVED"|"UNAPPROVED"}>
     */
    public function getSpaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, spaces:array<array{arn:string, configurationStatus:"CONFIGURED"|"UNCONFIGURED", contentSize?:int, createDateTime:int|string|\DateTimeInterface, deleteDateTime?:int|string|\DateTimeInterface, description?:string, name:string, randomDomain:string, spaceId:string, status:string, storageLimit:int, tier:"BASIC"|"STANDARD", userCount?:int, userKMSKey?:string, vanityDomain:string, vanityDomainStatus:"PENDING"|"APPROVED"|"UNAPPROVED"}>}>
     */
    public function listSpaces(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, spaces:array<array{arn:string, configurationStatus:"CONFIGURED"|"UNCONFIGURED", contentSize?:int, createDateTime:int|string|\DateTimeInterface, deleteDateTime?:int|string|\DateTimeInterface, description?:string, name:string, randomDomain:string, spaceId:string, status:string, storageLimit:int, tier:"BASIC"|"STANDARD", userCount?:int, userKMSKey?:string, vanityDomain:string, vanityDomainStatus:"PENDING"|"APPROVED"|"UNAPPROVED"}>}>
     */
    public function listSpacesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{tags?:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{adminId:string, spaceId:string} $args
     * @return \AWS\Result<void>
     */
    public function registerAdmin(array $args): \AWS\Result { }

    /**
     * @param array{adminId:string, spaceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function registerAdminAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accessorIds:array<string>, body:string, spaceId:string, title:string} $args
     * @return \AWS\Result<void>
     */
    public function sendInvites(array $args): \AWS\Result { }

    /**
     * @param array{accessorIds:array<string>, body:string, spaceId:string, title:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function sendInvitesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, roleArn?:string, spaceId:string, tier?:"BASIC"|"STANDARD"} $args
     * @return \AWS\Result<void>
     */
    public function updateSpace(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, roleArn?:string, spaceId:string, tier?:"BASIC"|"STANDARD"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateSpaceAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
