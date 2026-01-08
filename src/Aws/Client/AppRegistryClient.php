<?php
namespace AWS\AppRegistry;

class AppRegistryClient
{
    /**
     * @param array{application:string, attributeGroup:string} $args
     * @return \AWS\Result<array{applicationArn?:string, attributeGroupArn?:string}>
     */
    public function associateAttributeGroup(array $args): \AWS\Result { }

    /**
     * @param array{application:string, attributeGroup:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationArn?:string, attributeGroupArn?:string}>
     */
    public function associateAttributeGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{application:string, resourceType:"CFN_STACK"|"RESOURCE_TAG_VALUE", resource:string, options?:array<"APPLY_APPLICATION_TAG"|"SKIP_APPLICATION_TAG">} $args
     * @return \AWS\Result<array{applicationArn?:string, resourceArn?:string, options?:array<"APPLY_APPLICATION_TAG"|"SKIP_APPLICATION_TAG">}>
     */
    public function associateResource(array $args): \AWS\Result { }

    /**
     * @param array{application:string, resourceType:"CFN_STACK"|"RESOURCE_TAG_VALUE", resource:string, options?:array<"APPLY_APPLICATION_TAG"|"SKIP_APPLICATION_TAG">} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationArn?:string, resourceArn?:string, options?:array<"APPLY_APPLICATION_TAG"|"SKIP_APPLICATION_TAG">}>
     */
    public function associateResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, tags?:array<string, string>, clientToken:string} $args
     * @return \AWS\Result<array{application?:array{id?:string, arn?:string, name?:string, description?:string, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, tags?:array<string, string>, applicationTag?:array<string, string>}}>
     */
    public function createApplication(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, tags?:array<string, string>, clientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{application?:array{id?:string, arn?:string, name?:string, description?:string, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, tags?:array<string, string>, applicationTag?:array<string, string>}}>
     */
    public function createApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, attributes:string, tags?:array<string, string>, clientToken:string} $args
     * @return \AWS\Result<array{attributeGroup?:array{id?:string, arn?:string, name?:string, description?:string, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, tags?:array<string, string>}}>
     */
    public function createAttributeGroup(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, attributes:string, tags?:array<string, string>, clientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{attributeGroup?:array{id?:string, arn?:string, name?:string, description?:string, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, tags?:array<string, string>}}>
     */
    public function createAttributeGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{application:string} $args
     * @return \AWS\Result<array{application?:array{id?:string, arn?:string, name?:string, description?:string, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface}}>
     */
    public function deleteApplication(array $args): \AWS\Result { }

    /**
     * @param array{application:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{application?:array{id?:string, arn?:string, name?:string, description?:string, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface}}>
     */
    public function deleteApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{attributeGroup:string} $args
     * @return \AWS\Result<array{attributeGroup?:array{id?:string, arn?:string, name?:string, description?:string, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, createdBy?:string}}>
     */
    public function deleteAttributeGroup(array $args): \AWS\Result { }

    /**
     * @param array{attributeGroup:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{attributeGroup?:array{id?:string, arn?:string, name?:string, description?:string, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, createdBy?:string}}>
     */
    public function deleteAttributeGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{application:string, attributeGroup:string} $args
     * @return \AWS\Result<array{applicationArn?:string, attributeGroupArn?:string}>
     */
    public function disassociateAttributeGroup(array $args): \AWS\Result { }

    /**
     * @param array{application:string, attributeGroup:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationArn?:string, attributeGroupArn?:string}>
     */
    public function disassociateAttributeGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{application:string, resourceType:"CFN_STACK"|"RESOURCE_TAG_VALUE", resource:string} $args
     * @return \AWS\Result<array{applicationArn?:string, resourceArn?:string}>
     */
    public function disassociateResource(array $args): \AWS\Result { }

    /**
     * @param array{application:string, resourceType:"CFN_STACK"|"RESOURCE_TAG_VALUE", resource:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationArn?:string, resourceArn?:string}>
     */
    public function disassociateResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{application:string} $args
     * @return \AWS\Result<array{id?:string, arn?:string, name?:string, description?:string, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, associatedResourceCount?:int, tags?:array<string, string>, integrations?:array{resourceGroup?:array{state?:"CREATING"|"CREATE_COMPLETE"|"CREATE_FAILED"|"UPDATING"|"UPDATE_COMPLETE"|"UPDATE_FAILED", arn?:string, errorMessage?:string}, applicationTagResourceGroup?:array{state?:"CREATING"|"CREATE_COMPLETE"|"CREATE_FAILED"|"UPDATING"|"UPDATE_COMPLETE"|"UPDATE_FAILED", arn?:string, errorMessage?:string}}, applicationTag?:array<string, string>}>
     */
    public function getApplication(array $args): \AWS\Result { }

    /**
     * @param array{application:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, arn?:string, name?:string, description?:string, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, associatedResourceCount?:int, tags?:array<string, string>, integrations?:array{resourceGroup?:array{state?:"CREATING"|"CREATE_COMPLETE"|"CREATE_FAILED"|"UPDATING"|"UPDATE_COMPLETE"|"UPDATE_FAILED", arn?:string, errorMessage?:string}, applicationTagResourceGroup?:array{state?:"CREATING"|"CREATE_COMPLETE"|"CREATE_FAILED"|"UPDATING"|"UPDATE_COMPLETE"|"UPDATE_FAILED", arn?:string, errorMessage?:string}}, applicationTag?:array<string, string>}>
     */
    public function getApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{application:string, resourceType:"CFN_STACK"|"RESOURCE_TAG_VALUE", resource:string, nextToken?:string, resourceTagStatus?:array<"SUCCESS"|"FAILED"|"IN_PROGRESS"|"SKIPPED">, maxResults?:int} $args
     * @return \AWS\Result<array{resource?:array{name?:string, arn?:string, associationTime?:int|string|\DateTimeInterface, integrations?:array{resourceGroup?:array{state?:"CREATING"|"CREATE_COMPLETE"|"CREATE_FAILED"|"UPDATING"|"UPDATE_COMPLETE"|"UPDATE_FAILED", arn?:string, errorMessage?:string}}}, options?:array<"APPLY_APPLICATION_TAG"|"SKIP_APPLICATION_TAG">, applicationTagResult?:array{applicationTagStatus?:"IN_PROGRESS"|"SUCCESS"|"FAILURE", errorMessage?:string, resources?:array<array{resourceArn?:string, errorMessage?:string, status?:string, resourceType?:string}>, nextToken?:string}}>
     */
    public function getAssociatedResource(array $args): \AWS\Result { }

    /**
     * @param array{application:string, resourceType:"CFN_STACK"|"RESOURCE_TAG_VALUE", resource:string, nextToken?:string, resourceTagStatus?:array<"SUCCESS"|"FAILED"|"IN_PROGRESS"|"SKIPPED">, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{resource?:array{name?:string, arn?:string, associationTime?:int|string|\DateTimeInterface, integrations?:array{resourceGroup?:array{state?:"CREATING"|"CREATE_COMPLETE"|"CREATE_FAILED"|"UPDATING"|"UPDATE_COMPLETE"|"UPDATE_FAILED", arn?:string, errorMessage?:string}}}, options?:array<"APPLY_APPLICATION_TAG"|"SKIP_APPLICATION_TAG">, applicationTagResult?:array{applicationTagStatus?:"IN_PROGRESS"|"SUCCESS"|"FAILURE", errorMessage?:string, resources?:array<array{resourceArn?:string, errorMessage?:string, status?:string, resourceType?:string}>, nextToken?:string}}>
     */
    public function getAssociatedResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{attributeGroup:string} $args
     * @return \AWS\Result<array{id?:string, arn?:string, name?:string, description?:string, attributes?:string, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, tags?:array<string, string>, createdBy?:string}>
     */
    public function getAttributeGroup(array $args): \AWS\Result { }

    /**
     * @param array{attributeGroup:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, arn?:string, name?:string, description?:string, attributes?:string, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, tags?:array<string, string>, createdBy?:string}>
     */
    public function getAttributeGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{configuration?:array{tagQueryConfiguration?:array{tagKey?:string}}}>
     */
    public function getConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{configuration?:array{tagQueryConfiguration?:array{tagKey?:string}}}>
     */
    public function getConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{applications?:array<array{id?:string, arn?:string, name?:string, description?:string, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listApplications(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{applications?:array<array{id?:string, arn?:string, name?:string, description?:string, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listApplicationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{application:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{attributeGroups?:array<string>, nextToken?:string}>
     */
    public function listAssociatedAttributeGroups(array $args): \AWS\Result { }

    /**
     * @param array{application:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{attributeGroups?:array<string>, nextToken?:string}>
     */
    public function listAssociatedAttributeGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{application:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{resources?:array<array{name?:string, arn?:string, resourceType?:"CFN_STACK"|"RESOURCE_TAG_VALUE", resourceDetails?:array{tagValue?:string}, options?:array<"APPLY_APPLICATION_TAG"|"SKIP_APPLICATION_TAG">}>, nextToken?:string}>
     */
    public function listAssociatedResources(array $args): \AWS\Result { }

    /**
     * @param array{application:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{resources?:array<array{name?:string, arn?:string, resourceType?:"CFN_STACK"|"RESOURCE_TAG_VALUE", resourceDetails?:array{tagValue?:string}, options?:array<"APPLY_APPLICATION_TAG"|"SKIP_APPLICATION_TAG">}>, nextToken?:string}>
     */
    public function listAssociatedResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{attributeGroups?:array<array{id?:string, arn?:string, name?:string, description?:string, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, createdBy?:string}>, nextToken?:string}>
     */
    public function listAttributeGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{attributeGroups?:array<array{id?:string, arn?:string, name?:string, description?:string, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, createdBy?:string}>, nextToken?:string}>
     */
    public function listAttributeGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{application:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{attributeGroupsDetails?:array<array{id?:string, arn?:string, name?:string, createdBy?:string}>, nextToken?:string}>
     */
    public function listAttributeGroupsForApplication(array $args): \AWS\Result { }

    /**
     * @param array{application:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{attributeGroupsDetails?:array<array{id?:string, arn?:string, name?:string, createdBy?:string}>, nextToken?:string}>
     */
    public function listAttributeGroupsForApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{configuration:array{tagQueryConfiguration?:array{tagKey?:string}}} $args
     * @return \AWS\Result<void>
     */
    public function putConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{configuration:array{tagQueryConfiguration?:array{tagKey?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceType:"CFN_STACK"|"RESOURCE_TAG_VALUE", resource:string} $args
     * @return \AWS\Result<array{applicationArn?:string, resourceArn?:string, actionTaken?:"START_SYNC"|"NO_ACTION"}>
     */
    public function syncResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceType:"CFN_STACK"|"RESOURCE_TAG_VALUE", resource:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicationArn?:string, resourceArn?:string, actionTaken?:"START_SYNC"|"NO_ACTION"}>
     */
    public function syncResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{application:string, name?:string, description?:string} $args
     * @return \AWS\Result<array{application?:array{id?:string, arn?:string, name?:string, description?:string, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, tags?:array<string, string>, applicationTag?:array<string, string>}}>
     */
    public function updateApplication(array $args): \AWS\Result { }

    /**
     * @param array{application:string, name?:string, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{application?:array{id?:string, arn?:string, name?:string, description?:string, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, tags?:array<string, string>, applicationTag?:array<string, string>}}>
     */
    public function updateApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{attributeGroup:string, name?:string, description?:string, attributes?:string} $args
     * @return \AWS\Result<array{attributeGroup?:array{id?:string, arn?:string, name?:string, description?:string, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, tags?:array<string, string>}}>
     */
    public function updateAttributeGroup(array $args): \AWS\Result { }

    /**
     * @param array{attributeGroup:string, name?:string, description?:string, attributes?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{attributeGroup?:array{id?:string, arn?:string, name?:string, description?:string, creationTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, tags?:array<string, string>}}>
     */
    public function updateAttributeGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
