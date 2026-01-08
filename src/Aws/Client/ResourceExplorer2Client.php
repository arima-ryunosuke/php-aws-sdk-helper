<?php
namespace AWS\ResourceExplorer2;

class ResourceExplorer2Client
{
    /**
     * @param array{ViewArn:string} $args
     * @return \AWS\Result<array{ViewArn?:string}>
     */
    public function associateDefaultView(array $args): \AWS\Result { }

    /**
     * @param array{ViewArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ViewArn?:string}>
     */
    public function associateDefaultViewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ViewArns?:array<string>} $args
     * @return \AWS\Result<array{Errors?:array<array{ErrorMessage:string, ViewArn:string}>, Views?:array<array{Filters?:array{FilterString:string}, IncludedProperties?:array<array{Name:string}>, LastUpdatedAt?:int|string|\DateTimeInterface, Owner?:string, Scope?:string, ViewArn?:string}>}>
     */
    public function batchGetView(array $args = []): \AWS\Result { }

    /**
     * @param array{ViewArns?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Errors?:array<array{ErrorMessage:string, ViewArn:string}>, Views?:array<array{Filters?:array{FilterString:string}, IncludedProperties?:array<array{Name:string}>, LastUpdatedAt?:int|string|\DateTimeInterface, Owner?:string, Scope?:string, ViewArn?:string}>}>
     */
    public function batchGetViewAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Arn?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"CREATING"|"ACTIVE"|"DELETING"|"DELETED"|"UPDATING"}>
     */
    public function createIndex(array $args = []): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreatedAt?:int|string|\DateTimeInterface, State?:"CREATING"|"ACTIVE"|"DELETING"|"DELETED"|"UPDATING"}>
     */
    public function createIndexAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, Filters?:array{FilterString:string}, IncludedProperties?:array<array{Name:string}>, Scope?:string, Tags?:array<string, string>, ViewName:string} $args
     * @return \AWS\Result<array{View?:array{Filters?:array{FilterString:string}, IncludedProperties?:array<array{Name:string}>, LastUpdatedAt?:int|string|\DateTimeInterface, Owner?:string, Scope?:string, ViewArn?:string}}>
     */
    public function createView(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, Filters?:array{FilterString:string}, IncludedProperties?:array<array{Name:string}>, Scope?:string, Tags?:array<string, string>, ViewName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{View?:array{Filters?:array{FilterString:string}, IncludedProperties?:array<array{Name:string}>, LastUpdatedAt?:int|string|\DateTimeInterface, Owner?:string, Scope?:string, ViewArn?:string}}>
     */
    public function createViewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string} $args
     * @return \AWS\Result<array{Arn?:string, LastUpdatedAt?:int|string|\DateTimeInterface, State?:"CREATING"|"ACTIVE"|"DELETING"|"DELETED"|"UPDATING"}>
     */
    public function deleteIndex(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, LastUpdatedAt?:int|string|\DateTimeInterface, State?:"CREATING"|"ACTIVE"|"DELETING"|"DELETED"|"UPDATING"}>
     */
    public function deleteIndexAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ViewArn:string} $args
     * @return \AWS\Result<array{ViewArn?:string}>
     */
    public function deleteView(array $args): \AWS\Result { }

    /**
     * @param array{ViewArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ViewArn?:string}>
     */
    public function deleteViewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<void>
     */
    public function disassociateDefaultView(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disassociateDefaultViewAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{OrgConfiguration?:array{AWSServiceAccessStatus:"ENABLED"|"DISABLED", ServiceLinkedRole?:string}}>
     */
    public function getAccountLevelServiceConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{OrgConfiguration?:array{AWSServiceAccessStatus:"ENABLED"|"DISABLED", ServiceLinkedRole?:string}}>
     */
    public function getAccountLevelServiceConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{ViewArn?:string}>
     */
    public function getDefaultView(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{ViewArn?:string}>
     */
    public function getDefaultViewAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{Arn?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, ReplicatingFrom?:array<string>, ReplicatingTo?:array<string>, State?:"CREATING"|"ACTIVE"|"DELETING"|"DELETED"|"UPDATING", Tags?:array<string, string>, Type?:"LOCAL"|"AGGREGATOR"}>
     */
    public function getIndex(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, CreatedAt?:int|string|\DateTimeInterface, LastUpdatedAt?:int|string|\DateTimeInterface, ReplicatingFrom?:array<string>, ReplicatingTo?:array<string>, State?:"CREATING"|"ACTIVE"|"DELETING"|"DELETED"|"UPDATING", Tags?:array<string, string>, Type?:"LOCAL"|"AGGREGATOR"}>
     */
    public function getIndexAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ManagedViewArn:string} $args
     * @return \AWS\Result<array{ManagedView?:array{Filters?:array{FilterString:string}, IncludedProperties?:array<array{Name:string}>, LastUpdatedAt?:int|string|\DateTimeInterface, ManagedViewArn?:string, ManagedViewName?:string, Owner?:string, ResourcePolicy?:string, Scope?:string, TrustedService?:string, Version?:string}}>
     */
    public function getManagedView(array $args): \AWS\Result { }

    /**
     * @param array{ManagedViewArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ManagedView?:array{Filters?:array{FilterString:string}, IncludedProperties?:array<array{Name:string}>, LastUpdatedAt?:int|string|\DateTimeInterface, ManagedViewArn?:string, ManagedViewName?:string, Owner?:string, ResourcePolicy?:string, Scope?:string, TrustedService?:string, Version?:string}}>
     */
    public function getManagedViewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ViewArn:string} $args
     * @return \AWS\Result<array{Tags?:array<string, string>, View?:array{Filters?:array{FilterString:string}, IncludedProperties?:array<array{Name:string}>, LastUpdatedAt?:int|string|\DateTimeInterface, Owner?:string, Scope?:string, ViewArn?:string}}>
     */
    public function getView(array $args): \AWS\Result { }

    /**
     * @param array{ViewArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<string, string>, View?:array{Filters?:array{FilterString:string}, IncludedProperties?:array<array{Name:string}>, LastUpdatedAt?:int|string|\DateTimeInterface, Owner?:string, Scope?:string, ViewArn?:string}}>
     */
    public function getViewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, Regions?:array<string>, Type?:"LOCAL"|"AGGREGATOR"} $args
     * @return \AWS\Result<array{Indexes?:array<array{Arn?:string, Region?:string, Type?:"LOCAL"|"AGGREGATOR"}>, NextToken?:string}>
     */
    public function listIndexes(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, Regions?:array<string>, Type?:"LOCAL"|"AGGREGATOR"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Indexes?:array<array{Arn?:string, Region?:string, Type?:"LOCAL"|"AGGREGATOR"}>, NextToken?:string}>
     */
    public function listIndexesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountIdList:array<string>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Indexes?:array<array{AccountId?:string, Arn?:string, Region?:string, Type?:"LOCAL"|"AGGREGATOR"}>, NextToken?:string}>
     */
    public function listIndexesForMembers(array $args): \AWS\Result { }

    /**
     * @param array{AccountIdList:array<string>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Indexes?:array<array{AccountId?:string, Arn?:string, Region?:string, Type?:"LOCAL"|"AGGREGATOR"}>, NextToken?:string}>
     */
    public function listIndexesForMembersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ServicePrincipal?:string} $args
     * @return \AWS\Result<array{ManagedViews?:array<string>, NextToken?:string}>
     */
    public function listManagedViews(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, ServicePrincipal?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ManagedViews?:array<string>, NextToken?:string}>
     */
    public function listManagedViewsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array{FilterString:string}, MaxResults?:int, NextToken?:string, ViewArn?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Resources?:array<array{Arn?:string, LastReportedAt?:int|string|\DateTimeInterface, OwningAccountId?:string, Properties?:array<array{Data?:array{}, LastReportedAt?:int|string|\DateTimeInterface, Name?:string}>, Region?:string, ResourceType?:string, Service?:string}>, ViewArn?:string}>
     */
    public function listResources(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array{FilterString:string}, MaxResults?:int, NextToken?:string, ViewArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Resources?:array<array{Arn?:string, LastReportedAt?:int|string|\DateTimeInterface, OwningAccountId?:string, Properties?:array<array{Data?:array{}, LastReportedAt?:int|string|\DateTimeInterface, Name?:string}>, Region?:string, ResourceType?:string, Service?:string}>, ViewArn?:string}>
     */
    public function listResourcesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, ResourceTypes?:array<array{ResourceType?:string, Service?:string}>}>
     */
    public function listSupportedResourceTypes(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, ResourceTypes?:array<array{ResourceType?:string, Service?:string}>}>
     */
    public function listSupportedResourceTypesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{Tags?:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, Views?:array<string>}>
     */
    public function listViews(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Views?:array<string>}>
     */
    public function listViewsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, QueryString:string, ViewArn?:string} $args
     * @return \AWS\Result<array{Count?:array{Complete?:bool, TotalResources?:int}, NextToken?:string, Resources?:array<array{Arn?:string, LastReportedAt?:int|string|\DateTimeInterface, OwningAccountId?:string, Properties?:array<array{Data?:array{}, LastReportedAt?:int|string|\DateTimeInterface, Name?:string}>, Region?:string, ResourceType?:string, Service?:string}>, ViewArn?:string}>
     */
    public function search(array $args): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, QueryString:string, ViewArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Count?:array{Complete?:bool, TotalResources?:int}, NextToken?:string, Resources?:array<array{Arn?:string, LastReportedAt?:int|string|\DateTimeInterface, OwningAccountId?:string, Properties?:array<array{Data?:array{}, LastReportedAt?:int|string|\DateTimeInterface, Name?:string}>, Region?:string, ResourceType?:string, Service?:string}>, ViewArn?:string}>
     */
    public function searchAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Tags?:array<string, string>, resourceArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{Tags?:array<string, string>, resourceArn:string} $args
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
     * @param array{Arn:string, Type:"LOCAL"|"AGGREGATOR"} $args
     * @return \AWS\Result<array{Arn?:string, LastUpdatedAt?:int|string|\DateTimeInterface, State?:"CREATING"|"ACTIVE"|"DELETING"|"DELETED"|"UPDATING", Type?:"LOCAL"|"AGGREGATOR"}>
     */
    public function updateIndexType(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, Type:"LOCAL"|"AGGREGATOR"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, LastUpdatedAt?:int|string|\DateTimeInterface, State?:"CREATING"|"ACTIVE"|"DELETING"|"DELETED"|"UPDATING", Type?:"LOCAL"|"AGGREGATOR"}>
     */
    public function updateIndexTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array{FilterString:string}, IncludedProperties?:array<array{Name:string}>, ViewArn:string} $args
     * @return \AWS\Result<array{View?:array{Filters?:array{FilterString:string}, IncludedProperties?:array<array{Name:string}>, LastUpdatedAt?:int|string|\DateTimeInterface, Owner?:string, Scope?:string, ViewArn?:string}}>
     */
    public function updateView(array $args): \AWS\Result { }

    /**
     * @param array{Filters?:array{FilterString:string}, IncludedProperties?:array<array{Name:string}>, ViewArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{View?:array{Filters?:array{FilterString:string}, IncludedProperties?:array<array{Name:string}>, LastUpdatedAt?:int|string|\DateTimeInterface, Owner?:string, Scope?:string, ViewArn?:string}}>
     */
    public function updateViewAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
