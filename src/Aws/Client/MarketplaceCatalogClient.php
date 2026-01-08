<?php
namespace AWS\MarketplaceCatalog;

class MarketplaceCatalogClient
{
    /**
     * @param array{EntityRequestList:array<array{Catalog:string, EntityId:string}>} $args
     * @return \AWS\Result<array{EntityDetails?:array<string, array{EntityType?:string, EntityArn?:string, EntityIdentifier?:string, LastModifiedDate?:string, DetailsDocument?:array{}}>, Errors?:array<string, array{ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function batchDescribeEntities(array $args): \AWS\Result { }

    /**
     * @param array{EntityRequestList:array<array{Catalog:string, EntityId:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{EntityDetails?:array<string, array{EntityType?:string, EntityArn?:string, EntityIdentifier?:string, LastModifiedDate?:string, DetailsDocument?:array{}}>, Errors?:array<string, array{ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function batchDescribeEntitiesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Catalog:string, ChangeSetId:string} $args
     * @return \AWS\Result<array{ChangeSetId?:string, ChangeSetArn?:string}>
     */
    public function cancelChangeSet(array $args): \AWS\Result { }

    /**
     * @param array{Catalog:string, ChangeSetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeSetId?:string, ChangeSetArn?:string}>
     */
    public function cancelChangeSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Catalog:string, ChangeSetId:string} $args
     * @return \AWS\Result<array{ChangeSetId?:string, ChangeSetArn?:string, ChangeSetName?:string, Intent?:"VALIDATE"|"APPLY", StartTime?:string, EndTime?:string, Status?:"PREPARING"|"APPLYING"|"SUCCEEDED"|"CANCELLED"|"FAILED", FailureCode?:"CLIENT_ERROR"|"SERVER_FAULT", FailureDescription?:string, ChangeSet?:array<array{ChangeType?:string, Entity?:array{Type:string, Identifier?:string}, Details?:string, DetailsDocument?:array{}, ErrorDetailList?:array<array{ErrorCode?:string, ErrorMessage?:string}>, ChangeName?:string}>}>
     */
    public function describeChangeSet(array $args): \AWS\Result { }

    /**
     * @param array{Catalog:string, ChangeSetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeSetId?:string, ChangeSetArn?:string, ChangeSetName?:string, Intent?:"VALIDATE"|"APPLY", StartTime?:string, EndTime?:string, Status?:"PREPARING"|"APPLYING"|"SUCCEEDED"|"CANCELLED"|"FAILED", FailureCode?:"CLIENT_ERROR"|"SERVER_FAULT", FailureDescription?:string, ChangeSet?:array<array{ChangeType?:string, Entity?:array{Type:string, Identifier?:string}, Details?:string, DetailsDocument?:array{}, ErrorDetailList?:array<array{ErrorCode?:string, ErrorMessage?:string}>, ChangeName?:string}>}>
     */
    public function describeChangeSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Catalog:string, EntityId:string} $args
     * @return \AWS\Result<array{EntityType?:string, EntityIdentifier?:string, EntityArn?:string, LastModifiedDate?:string, Details?:string, DetailsDocument?:array{}}>
     */
    public function describeEntity(array $args): \AWS\Result { }

    /**
     * @param array{Catalog:string, EntityId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EntityType?:string, EntityIdentifier?:string, EntityArn?:string, LastModifiedDate?:string, Details?:string, DetailsDocument?:array{}}>
     */
    public function describeEntityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{Policy?:string}>
     */
    public function getResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:string}>
     */
    public function getResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Catalog:string, FilterList?:array<array{Name?:string, ValueList?:array<string>}>, Sort?:array{SortBy?:string, SortOrder?:"ASCENDING"|"DESCENDING"}, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ChangeSetSummaryList?:array<array{ChangeSetId?:string, ChangeSetArn?:string, ChangeSetName?:string, StartTime?:string, EndTime?:string, Status?:"PREPARING"|"APPLYING"|"SUCCEEDED"|"CANCELLED"|"FAILED", EntityIdList?:array<string>, FailureCode?:"CLIENT_ERROR"|"SERVER_FAULT"}>, NextToken?:string}>
     */
    public function listChangeSets(array $args): \AWS\Result { }

    /**
     * @param array{Catalog:string, FilterList?:array<array{Name?:string, ValueList?:array<string>}>, Sort?:array{SortBy?:string, SortOrder?:"ASCENDING"|"DESCENDING"}, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeSetSummaryList?:array<array{ChangeSetId?:string, ChangeSetArn?:string, ChangeSetName?:string, StartTime?:string, EndTime?:string, Status?:"PREPARING"|"APPLYING"|"SUCCEEDED"|"CANCELLED"|"FAILED", EntityIdList?:array<string>, FailureCode?:"CLIENT_ERROR"|"SERVER_FAULT"}>, NextToken?:string}>
     */
    public function listChangeSetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Catalog:string, EntityType:string, FilterList?:array<array{Name?:string, ValueList?:array<string>}>, Sort?:array{SortBy?:string, SortOrder?:"ASCENDING"|"DESCENDING"}, NextToken?:string, MaxResults?:int, OwnershipType?:"SELF"|"SHARED", EntityTypeFilters?:array{DataProductFilters?:array{EntityId?:array{ValueList?:array<string>}, ProductTitle?:array{ValueList?:array<string>, WildCardValue?:string}, Visibility?:array{ValueList?:array<"Limited"|"Public"|"Restricted"|"Unavailable"|"Draft">}, LastModifiedDate?:array{DateRange?:array{AfterValue?:string, BeforeValue?:string}}}, SaaSProductFilters?:array{EntityId?:array{ValueList?:array<string>}, ProductTitle?:array{ValueList?:array<string>, WildCardValue?:string}, Visibility?:array{ValueList?:array<"Limited"|"Public"|"Restricted"|"Draft">}, LastModifiedDate?:array{DateRange?:array{AfterValue?:string, BeforeValue?:string}}}, AmiProductFilters?:array{EntityId?:array{ValueList?:array<string>}, LastModifiedDate?:array{DateRange?:array{AfterValue?:string, BeforeValue?:string}}, ProductTitle?:array{ValueList?:array<string>, WildCardValue?:string}, Visibility?:array{ValueList?:array<"Limited"|"Public"|"Restricted"|"Draft">}}, OfferFilters?:array{EntityId?:array{ValueList?:array<string>}, Name?:array{ValueList?:array<string>, WildCardValue?:string}, ProductId?:array{ValueList?:array<string>}, ResaleAuthorizationId?:array{ValueList?:array<string>}, ReleaseDate?:array{DateRange?:array{AfterValue?:string, BeforeValue?:string}}, AvailabilityEndDate?:array{DateRange?:array{AfterValue?:string, BeforeValue?:string}}, BuyerAccounts?:array{WildCardValue?:string}, State?:array{ValueList?:array<"Draft"|"Released">}, Targeting?:array{ValueList?:array<"BuyerAccounts"|"ParticipatingPrograms"|"CountryCodes"|"None">}, LastModifiedDate?:array{DateRange?:array{AfterValue?:string, BeforeValue?:string}}}, ContainerProductFilters?:array{EntityId?:array{ValueList?:array<string>}, LastModifiedDate?:array{DateRange?:array{AfterValue?:string, BeforeValue?:string}}, ProductTitle?:array{ValueList?:array<string>, WildCardValue?:string}, Visibility?:array{ValueList?:array<"Limited"|"Public"|"Restricted"|"Draft">}}, ResaleAuthorizationFilters?:array{EntityId?:array{ValueList?:array<string>}, Name?:array{ValueList?:array<string>, WildCardValue?:string}, ProductId?:array{ValueList?:array<string>, WildCardValue?:string}, CreatedDate?:array{DateRange?:array{AfterValue?:string, BeforeValue?:string}, ValueList?:array<string>}, AvailabilityEndDate?:array{DateRange?:array{AfterValue?:string, BeforeValue?:string}, ValueList?:array<string>}, ManufacturerAccountId?:array{ValueList?:array<string>, WildCardValue?:string}, ProductName?:array{ValueList?:array<string>, WildCardValue?:string}, ManufacturerLegalName?:array{ValueList?:array<string>, WildCardValue?:string}, ResellerAccountID?:array{ValueList?:array<string>, WildCardValue?:string}, ResellerLegalName?:array{ValueList?:array<string>, WildCardValue?:string}, Status?:array{ValueList?:array<"Draft"|"Active"|"Restricted">}, OfferExtendedStatus?:array{ValueList?:array<string>}, LastModifiedDate?:array{DateRange?:array{AfterValue?:string, BeforeValue?:string}}}}, EntityTypeSort?:array{DataProductSort?:array{SortBy?:"EntityId"|"ProductTitle"|"Visibility"|"LastModifiedDate", SortOrder?:"ASCENDING"|"DESCENDING"}, SaaSProductSort?:array{SortBy?:"EntityId"|"ProductTitle"|"Visibility"|"LastModifiedDate", SortOrder?:"ASCENDING"|"DESCENDING"}, AmiProductSort?:array{SortBy?:"EntityId"|"LastModifiedDate"|"ProductTitle"|"Visibility", SortOrder?:"ASCENDING"|"DESCENDING"}, OfferSort?:array{SortBy?:"EntityId"|"Name"|"ProductId"|"ResaleAuthorizationId"|"ReleaseDate"|"AvailabilityEndDate"|"BuyerAccounts"|"State"|"Targeting"|"LastModifiedDate", SortOrder?:"ASCENDING"|"DESCENDING"}, ContainerProductSort?:array{SortBy?:"EntityId"|"LastModifiedDate"|"ProductTitle"|"Visibility", SortOrder?:"ASCENDING"|"DESCENDING"}, ResaleAuthorizationSort?:array{SortBy?:"EntityId"|"Name"|"ProductId"|"ProductName"|"ManufacturerAccountId"|"ManufacturerLegalName"|"ResellerAccountID"|"ResellerLegalName"|"Status"|"OfferExtendedStatus"|"CreatedDate"|"AvailabilityEndDate"|"LastModifiedDate", SortOrder?:"ASCENDING"|"DESCENDING"}}} $args
     * @return \AWS\Result<array{EntitySummaryList?:array<array{Name?:string, EntityType?:string, EntityId?:string, EntityArn?:string, LastModifiedDate?:string, Visibility?:string, AmiProductSummary?:array{ProductTitle?:string, Visibility?:"Limited"|"Public"|"Restricted"|"Draft"}, ContainerProductSummary?:array{ProductTitle?:string, Visibility?:"Limited"|"Public"|"Restricted"|"Draft"}, DataProductSummary?:array{ProductTitle?:string, Visibility?:"Limited"|"Public"|"Restricted"|"Unavailable"|"Draft"}, SaaSProductSummary?:array{ProductTitle?:string, Visibility?:"Limited"|"Public"|"Restricted"|"Draft"}, OfferSummary?:array{Name?:string, ProductId?:string, ResaleAuthorizationId?:string, ReleaseDate?:string, AvailabilityEndDate?:string, BuyerAccounts?:array<string>, State?:"Draft"|"Released", Targeting?:array<"BuyerAccounts"|"ParticipatingPrograms"|"CountryCodes"|"None">}, ResaleAuthorizationSummary?:array{Name?:string, ProductId?:string, ProductName?:string, ManufacturerAccountId?:string, ManufacturerLegalName?:string, ResellerAccountID?:string, ResellerLegalName?:string, Status?:"Draft"|"Active"|"Restricted", OfferExtendedStatus?:string, CreatedDate?:string, AvailabilityEndDate?:string}}>, NextToken?:string}>
     */
    public function listEntities(array $args): \AWS\Result { }

    /**
     * @param array{Catalog:string, EntityType:string, FilterList?:array<array{Name?:string, ValueList?:array<string>}>, Sort?:array{SortBy?:string, SortOrder?:"ASCENDING"|"DESCENDING"}, NextToken?:string, MaxResults?:int, OwnershipType?:"SELF"|"SHARED", EntityTypeFilters?:array{DataProductFilters?:array{EntityId?:array{ValueList?:array<string>}, ProductTitle?:array{ValueList?:array<string>, WildCardValue?:string}, Visibility?:array{ValueList?:array<"Limited"|"Public"|"Restricted"|"Unavailable"|"Draft">}, LastModifiedDate?:array{DateRange?:array{AfterValue?:string, BeforeValue?:string}}}, SaaSProductFilters?:array{EntityId?:array{ValueList?:array<string>}, ProductTitle?:array{ValueList?:array<string>, WildCardValue?:string}, Visibility?:array{ValueList?:array<"Limited"|"Public"|"Restricted"|"Draft">}, LastModifiedDate?:array{DateRange?:array{AfterValue?:string, BeforeValue?:string}}}, AmiProductFilters?:array{EntityId?:array{ValueList?:array<string>}, LastModifiedDate?:array{DateRange?:array{AfterValue?:string, BeforeValue?:string}}, ProductTitle?:array{ValueList?:array<string>, WildCardValue?:string}, Visibility?:array{ValueList?:array<"Limited"|"Public"|"Restricted"|"Draft">}}, OfferFilters?:array{EntityId?:array{ValueList?:array<string>}, Name?:array{ValueList?:array<string>, WildCardValue?:string}, ProductId?:array{ValueList?:array<string>}, ResaleAuthorizationId?:array{ValueList?:array<string>}, ReleaseDate?:array{DateRange?:array{AfterValue?:string, BeforeValue?:string}}, AvailabilityEndDate?:array{DateRange?:array{AfterValue?:string, BeforeValue?:string}}, BuyerAccounts?:array{WildCardValue?:string}, State?:array{ValueList?:array<"Draft"|"Released">}, Targeting?:array{ValueList?:array<"BuyerAccounts"|"ParticipatingPrograms"|"CountryCodes"|"None">}, LastModifiedDate?:array{DateRange?:array{AfterValue?:string, BeforeValue?:string}}}, ContainerProductFilters?:array{EntityId?:array{ValueList?:array<string>}, LastModifiedDate?:array{DateRange?:array{AfterValue?:string, BeforeValue?:string}}, ProductTitle?:array{ValueList?:array<string>, WildCardValue?:string}, Visibility?:array{ValueList?:array<"Limited"|"Public"|"Restricted"|"Draft">}}, ResaleAuthorizationFilters?:array{EntityId?:array{ValueList?:array<string>}, Name?:array{ValueList?:array<string>, WildCardValue?:string}, ProductId?:array{ValueList?:array<string>, WildCardValue?:string}, CreatedDate?:array{DateRange?:array{AfterValue?:string, BeforeValue?:string}, ValueList?:array<string>}, AvailabilityEndDate?:array{DateRange?:array{AfterValue?:string, BeforeValue?:string}, ValueList?:array<string>}, ManufacturerAccountId?:array{ValueList?:array<string>, WildCardValue?:string}, ProductName?:array{ValueList?:array<string>, WildCardValue?:string}, ManufacturerLegalName?:array{ValueList?:array<string>, WildCardValue?:string}, ResellerAccountID?:array{ValueList?:array<string>, WildCardValue?:string}, ResellerLegalName?:array{ValueList?:array<string>, WildCardValue?:string}, Status?:array{ValueList?:array<"Draft"|"Active"|"Restricted">}, OfferExtendedStatus?:array{ValueList?:array<string>}, LastModifiedDate?:array{DateRange?:array{AfterValue?:string, BeforeValue?:string}}}}, EntityTypeSort?:array{DataProductSort?:array{SortBy?:"EntityId"|"ProductTitle"|"Visibility"|"LastModifiedDate", SortOrder?:"ASCENDING"|"DESCENDING"}, SaaSProductSort?:array{SortBy?:"EntityId"|"ProductTitle"|"Visibility"|"LastModifiedDate", SortOrder?:"ASCENDING"|"DESCENDING"}, AmiProductSort?:array{SortBy?:"EntityId"|"LastModifiedDate"|"ProductTitle"|"Visibility", SortOrder?:"ASCENDING"|"DESCENDING"}, OfferSort?:array{SortBy?:"EntityId"|"Name"|"ProductId"|"ResaleAuthorizationId"|"ReleaseDate"|"AvailabilityEndDate"|"BuyerAccounts"|"State"|"Targeting"|"LastModifiedDate", SortOrder?:"ASCENDING"|"DESCENDING"}, ContainerProductSort?:array{SortBy?:"EntityId"|"LastModifiedDate"|"ProductTitle"|"Visibility", SortOrder?:"ASCENDING"|"DESCENDING"}, ResaleAuthorizationSort?:array{SortBy?:"EntityId"|"Name"|"ProductId"|"ProductName"|"ManufacturerAccountId"|"ManufacturerLegalName"|"ResellerAccountID"|"ResellerLegalName"|"Status"|"OfferExtendedStatus"|"CreatedDate"|"AvailabilityEndDate"|"LastModifiedDate", SortOrder?:"ASCENDING"|"DESCENDING"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{EntitySummaryList?:array<array{Name?:string, EntityType?:string, EntityId?:string, EntityArn?:string, LastModifiedDate?:string, Visibility?:string, AmiProductSummary?:array{ProductTitle?:string, Visibility?:"Limited"|"Public"|"Restricted"|"Draft"}, ContainerProductSummary?:array{ProductTitle?:string, Visibility?:"Limited"|"Public"|"Restricted"|"Draft"}, DataProductSummary?:array{ProductTitle?:string, Visibility?:"Limited"|"Public"|"Restricted"|"Unavailable"|"Draft"}, SaaSProductSummary?:array{ProductTitle?:string, Visibility?:"Limited"|"Public"|"Restricted"|"Draft"}, OfferSummary?:array{Name?:string, ProductId?:string, ResaleAuthorizationId?:string, ReleaseDate?:string, AvailabilityEndDate?:string, BuyerAccounts?:array<string>, State?:"Draft"|"Released", Targeting?:array<"BuyerAccounts"|"ParticipatingPrograms"|"CountryCodes"|"None">}, ResaleAuthorizationSummary?:array{Name?:string, ProductId?:string, ProductName?:string, ManufacturerAccountId?:string, ManufacturerLegalName?:string, ResellerAccountID?:string, ResellerLegalName?:string, Status?:"Draft"|"Active"|"Restricted", OfferExtendedStatus?:string, CreatedDate?:string, AvailabilityEndDate?:string}}>, NextToken?:string}>
     */
    public function listEntitiesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{ResourceArn?:string, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceArn?:string, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Policy:string} $args
     * @return \AWS\Result<array{}>
     */
    public function putResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Policy:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Catalog:string, ChangeSet:array<array{ChangeType:string, Entity:array{Type:string, Identifier?:string}, EntityTags?:array<array{Key:string, Value:string}>, Details?:string, DetailsDocument?:array{}, ChangeName?:string}>, ChangeSetName?:string, ClientRequestToken?:string, ChangeSetTags?:array<array{Key:string, Value:string}>, Intent?:"VALIDATE"|"APPLY"} $args
     * @return \AWS\Result<array{ChangeSetId?:string, ChangeSetArn?:string}>
     */
    public function startChangeSet(array $args): \AWS\Result { }

    /**
     * @param array{Catalog:string, ChangeSet:array<array{ChangeType:string, Entity:array{Type:string, Identifier?:string}, EntityTags?:array<array{Key:string, Value:string}>, Details?:string, DetailsDocument?:array{}, ChangeName?:string}>, ChangeSetName?:string, ClientRequestToken?:string, ChangeSetTags?:array<array{Key:string, Value:string}>, Intent?:"VALIDATE"|"APPLY"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChangeSetId?:string, ChangeSetArn?:string}>
     */
    public function startChangeSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Tags:array<array{Key:string, Value:string}>} $args
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
}
