<?php
namespace AWS\Route53Profiles;

class Route53ProfilesClient
{
    /**
     * @param array{Name:string, ProfileId:string, ResourceId:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{ProfileAssociation?:array{CreationTime?:int|string|\DateTimeInterface, Id?:string, ModificationTime?:int|string|\DateTimeInterface, Name?:string, OwnerId?:string, ProfileId?:string, ResourceId?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING"|"CREATING"|"DELETED"|"FAILED", StatusMessage?:string}}>
     */
    public function associateProfile(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, ProfileId:string, ResourceId:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProfileAssociation?:array{CreationTime?:int|string|\DateTimeInterface, Id?:string, ModificationTime?:int|string|\DateTimeInterface, Name?:string, OwnerId?:string, ProfileId?:string, ResourceId?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING"|"CREATING"|"DELETED"|"FAILED", StatusMessage?:string}}>
     */
    public function associateProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, ProfileId:string, ResourceArn:string, ResourceProperties?:string} $args
     * @return \AWS\Result<array{ProfileResourceAssociation?:array{CreationTime?:int|string|\DateTimeInterface, Id?:string, ModificationTime?:int|string|\DateTimeInterface, Name?:string, OwnerId?:string, ProfileId?:string, ResourceArn?:string, ResourceProperties?:string, ResourceType?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING"|"CREATING"|"DELETED"|"FAILED", StatusMessage?:string}}>
     */
    public function associateResourceToProfile(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, ProfileId:string, ResourceArn:string, ResourceProperties?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProfileResourceAssociation?:array{CreationTime?:int|string|\DateTimeInterface, Id?:string, ModificationTime?:int|string|\DateTimeInterface, Name?:string, OwnerId?:string, ProfileId?:string, ResourceArn?:string, ResourceProperties?:string, ResourceType?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING"|"CREATING"|"DELETED"|"FAILED", StatusMessage?:string}}>
     */
    public function associateResourceToProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken:string, Name:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{Profile?:array{Arn?:string, ClientToken?:string, CreationTime?:int|string|\DateTimeInterface, Id?:string, ModificationTime?:int|string|\DateTimeInterface, Name?:string, OwnerId?:string, ShareStatus?:"NOT_SHARED"|"SHARED_WITH_ME"|"SHARED_BY_ME", Status?:"COMPLETE"|"DELETING"|"UPDATING"|"CREATING"|"DELETED"|"FAILED", StatusMessage?:string}}>
     */
    public function createProfile(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken:string, Name:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Profile?:array{Arn?:string, ClientToken?:string, CreationTime?:int|string|\DateTimeInterface, Id?:string, ModificationTime?:int|string|\DateTimeInterface, Name?:string, OwnerId?:string, ShareStatus?:"NOT_SHARED"|"SHARED_WITH_ME"|"SHARED_BY_ME", Status?:"COMPLETE"|"DELETING"|"UPDATING"|"CREATING"|"DELETED"|"FAILED", StatusMessage?:string}}>
     */
    public function createProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProfileId:string} $args
     * @return \AWS\Result<array{Profile?:array{Arn?:string, ClientToken?:string, CreationTime?:int|string|\DateTimeInterface, Id?:string, ModificationTime?:int|string|\DateTimeInterface, Name?:string, OwnerId?:string, ShareStatus?:"NOT_SHARED"|"SHARED_WITH_ME"|"SHARED_BY_ME", Status?:"COMPLETE"|"DELETING"|"UPDATING"|"CREATING"|"DELETED"|"FAILED", StatusMessage?:string}}>
     */
    public function deleteProfile(array $args): \AWS\Result { }

    /**
     * @param array{ProfileId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Profile?:array{Arn?:string, ClientToken?:string, CreationTime?:int|string|\DateTimeInterface, Id?:string, ModificationTime?:int|string|\DateTimeInterface, Name?:string, OwnerId?:string, ShareStatus?:"NOT_SHARED"|"SHARED_WITH_ME"|"SHARED_BY_ME", Status?:"COMPLETE"|"DELETING"|"UPDATING"|"CREATING"|"DELETED"|"FAILED", StatusMessage?:string}}>
     */
    public function deleteProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProfileId:string, ResourceId:string} $args
     * @return \AWS\Result<array{ProfileAssociation?:array{CreationTime?:int|string|\DateTimeInterface, Id?:string, ModificationTime?:int|string|\DateTimeInterface, Name?:string, OwnerId?:string, ProfileId?:string, ResourceId?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING"|"CREATING"|"DELETED"|"FAILED", StatusMessage?:string}}>
     */
    public function disassociateProfile(array $args): \AWS\Result { }

    /**
     * @param array{ProfileId:string, ResourceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProfileAssociation?:array{CreationTime?:int|string|\DateTimeInterface, Id?:string, ModificationTime?:int|string|\DateTimeInterface, Name?:string, OwnerId?:string, ProfileId?:string, ResourceId?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING"|"CREATING"|"DELETED"|"FAILED", StatusMessage?:string}}>
     */
    public function disassociateProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProfileId:string, ResourceArn:string} $args
     * @return \AWS\Result<array{ProfileResourceAssociation?:array{CreationTime?:int|string|\DateTimeInterface, Id?:string, ModificationTime?:int|string|\DateTimeInterface, Name?:string, OwnerId?:string, ProfileId?:string, ResourceArn?:string, ResourceProperties?:string, ResourceType?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING"|"CREATING"|"DELETED"|"FAILED", StatusMessage?:string}}>
     */
    public function disassociateResourceFromProfile(array $args): \AWS\Result { }

    /**
     * @param array{ProfileId:string, ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProfileResourceAssociation?:array{CreationTime?:int|string|\DateTimeInterface, Id?:string, ModificationTime?:int|string|\DateTimeInterface, Name?:string, OwnerId?:string, ProfileId?:string, ResourceArn?:string, ResourceProperties?:string, ResourceType?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING"|"CREATING"|"DELETED"|"FAILED", StatusMessage?:string}}>
     */
    public function disassociateResourceFromProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProfileId:string} $args
     * @return \AWS\Result<array{Profile?:array{Arn?:string, ClientToken?:string, CreationTime?:int|string|\DateTimeInterface, Id?:string, ModificationTime?:int|string|\DateTimeInterface, Name?:string, OwnerId?:string, ShareStatus?:"NOT_SHARED"|"SHARED_WITH_ME"|"SHARED_BY_ME", Status?:"COMPLETE"|"DELETING"|"UPDATING"|"CREATING"|"DELETED"|"FAILED", StatusMessage?:string}}>
     */
    public function getProfile(array $args): \AWS\Result { }

    /**
     * @param array{ProfileId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Profile?:array{Arn?:string, ClientToken?:string, CreationTime?:int|string|\DateTimeInterface, Id?:string, ModificationTime?:int|string|\DateTimeInterface, Name?:string, OwnerId?:string, ShareStatus?:"NOT_SHARED"|"SHARED_WITH_ME"|"SHARED_BY_ME", Status?:"COMPLETE"|"DELETING"|"UPDATING"|"CREATING"|"DELETED"|"FAILED", StatusMessage?:string}}>
     */
    public function getProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProfileAssociationId:string} $args
     * @return \AWS\Result<array{ProfileAssociation?:array{CreationTime?:int|string|\DateTimeInterface, Id?:string, ModificationTime?:int|string|\DateTimeInterface, Name?:string, OwnerId?:string, ProfileId?:string, ResourceId?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING"|"CREATING"|"DELETED"|"FAILED", StatusMessage?:string}}>
     */
    public function getProfileAssociation(array $args): \AWS\Result { }

    /**
     * @param array{ProfileAssociationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProfileAssociation?:array{CreationTime?:int|string|\DateTimeInterface, Id?:string, ModificationTime?:int|string|\DateTimeInterface, Name?:string, OwnerId?:string, ProfileId?:string, ResourceId?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING"|"CREATING"|"DELETED"|"FAILED", StatusMessage?:string}}>
     */
    public function getProfileAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProfileResourceAssociationId:string} $args
     * @return \AWS\Result<array{ProfileResourceAssociation?:array{CreationTime?:int|string|\DateTimeInterface, Id?:string, ModificationTime?:int|string|\DateTimeInterface, Name?:string, OwnerId?:string, ProfileId?:string, ResourceArn?:string, ResourceProperties?:string, ResourceType?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING"|"CREATING"|"DELETED"|"FAILED", StatusMessage?:string}}>
     */
    public function getProfileResourceAssociation(array $args): \AWS\Result { }

    /**
     * @param array{ProfileResourceAssociationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProfileResourceAssociation?:array{CreationTime?:int|string|\DateTimeInterface, Id?:string, ModificationTime?:int|string|\DateTimeInterface, Name?:string, OwnerId?:string, ProfileId?:string, ResourceArn?:string, ResourceProperties?:string, ResourceType?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING"|"CREATING"|"DELETED"|"FAILED", StatusMessage?:string}}>
     */
    public function getProfileResourceAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ProfileId?:string, ResourceId?:string} $args
     * @return \AWS\Result<array{NextToken?:string, ProfileAssociations?:array<array{CreationTime?:int|string|\DateTimeInterface, Id?:string, ModificationTime?:int|string|\DateTimeInterface, Name?:string, OwnerId?:string, ProfileId?:string, ResourceId?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING"|"CREATING"|"DELETED"|"FAILED", StatusMessage?:string}>}>
     */
    public function listProfileAssociations(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ProfileId?:string, ResourceId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, ProfileAssociations?:array<array{CreationTime?:int|string|\DateTimeInterface, Id?:string, ModificationTime?:int|string|\DateTimeInterface, Name?:string, OwnerId?:string, ProfileId?:string, ResourceId?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING"|"CREATING"|"DELETED"|"FAILED", StatusMessage?:string}>}>
     */
    public function listProfileAssociationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ProfileId:string, ResourceType?:string} $args
     * @return \AWS\Result<array{NextToken?:string, ProfileResourceAssociations?:array<array{CreationTime?:int|string|\DateTimeInterface, Id?:string, ModificationTime?:int|string|\DateTimeInterface, Name?:string, OwnerId?:string, ProfileId?:string, ResourceArn?:string, ResourceProperties?:string, ResourceType?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING"|"CREATING"|"DELETED"|"FAILED", StatusMessage?:string}>}>
     */
    public function listProfileResourceAssociations(array $args): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ProfileId:string, ResourceType?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, ProfileResourceAssociations?:array<array{CreationTime?:int|string|\DateTimeInterface, Id?:string, ModificationTime?:int|string|\DateTimeInterface, Name?:string, OwnerId?:string, ProfileId?:string, ResourceArn?:string, ResourceProperties?:string, ResourceType?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING"|"CREATING"|"DELETED"|"FAILED", StatusMessage?:string}>}>
     */
    public function listProfileResourceAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, ProfileSummaries?:array<array{Arn?:string, Id?:string, Name?:string, ShareStatus?:"NOT_SHARED"|"SHARED_WITH_ME"|"SHARED_BY_ME"}>}>
     */
    public function listProfiles(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, ProfileSummaries?:array<array{Arn?:string, Id?:string, Name?:string, ShareStatus?:"NOT_SHARED"|"SHARED_WITH_ME"|"SHARED_BY_ME"}>}>
     */
    public function listProfilesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{Tags:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{Name?:string, ProfileResourceAssociationId:string, ResourceProperties?:string} $args
     * @return \AWS\Result<array{ProfileResourceAssociation?:array{CreationTime?:int|string|\DateTimeInterface, Id?:string, ModificationTime?:int|string|\DateTimeInterface, Name?:string, OwnerId?:string, ProfileId?:string, ResourceArn?:string, ResourceProperties?:string, ResourceType?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING"|"CREATING"|"DELETED"|"FAILED", StatusMessage?:string}}>
     */
    public function updateProfileResourceAssociation(array $args): \AWS\Result { }

    /**
     * @param array{Name?:string, ProfileResourceAssociationId:string, ResourceProperties?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProfileResourceAssociation?:array{CreationTime?:int|string|\DateTimeInterface, Id?:string, ModificationTime?:int|string|\DateTimeInterface, Name?:string, OwnerId?:string, ProfileId?:string, ResourceArn?:string, ResourceProperties?:string, ResourceType?:string, Status?:"COMPLETE"|"DELETING"|"UPDATING"|"CREATING"|"DELETED"|"FAILED", StatusMessage?:string}}>
     */
    public function updateProfileResourceAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
