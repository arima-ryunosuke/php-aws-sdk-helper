<?php
namespace AWS\DataZone;

class DataZoneClient
{
    /**
     * @param array{acceptChoices?:array<array{editedValue?:string, predictionChoice?:int, predictionTarget:string}>, acceptRule?:array{rule?:"ALL"|"NONE", threshold?:float}, clientToken?:string, domainIdentifier:string, identifier:string, revision?:string} $args
     * @return \AWS\Result<array{assetId:string, domainId:string, revision:string}>
     */
    public function acceptPredictions(array $args): \AWS\Result { }

    /**
     * @param array{acceptChoices?:array<array{editedValue?:string, predictionChoice?:int, predictionTarget:string}>, acceptRule?:array{rule?:"ALL"|"NONE", threshold?:float}, clientToken?:string, domainIdentifier:string, identifier:string, revision?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assetId:string, domainId:string, revision:string}>
     */
    public function acceptPredictionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetScopes?:array<array{assetId:string, filterIds:array<string>}>, decisionComment?:string, domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<array{createdAt:int|string|\DateTimeInterface, createdBy:string, decisionComment?:string, domainId:string, existingSubscriptionId?:string, id:string, metadataForms?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, requestReason:string, reviewerId?:string, status:"PENDING"|"ACCEPTED"|"REJECTED", subscribedListings:array<array{description:string, id:string, item:array{assetListing?:array{assetScope?:array{assetId:string, errorMessage?:string, filterIds:array<string>, status:string}, entityId?:string, entityRevision?:string, entityType?:string, forms?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>}, productListing?:array{assetListings?:array<array{entityId?:string, entityRevision?:string, entityType?:string}>, description?:string, entityId?:string, entityRevision?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>, name?:string}}, name:string, ownerProjectId:string, ownerProjectName?:string, revision?:string}>, subscribedPrincipals:array<array{project?:array{id?:string, name?:string}}>, updatedAt:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function acceptSubscriptionRequest(array $args): \AWS\Result { }

    /**
     * @param array{assetScopes?:array<array{assetId:string, filterIds:array<string>}>, decisionComment?:string, domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt:int|string|\DateTimeInterface, createdBy:string, decisionComment?:string, domainId:string, existingSubscriptionId?:string, id:string, metadataForms?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, requestReason:string, reviewerId?:string, status:"PENDING"|"ACCEPTED"|"REJECTED", subscribedListings:array<array{description:string, id:string, item:array{assetListing?:array{assetScope?:array{assetId:string, errorMessage?:string, filterIds:array<string>, status:string}, entityId?:string, entityRevision?:string, entityType?:string, forms?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>}, productListing?:array{assetListings?:array<array{entityId?:string, entityRevision?:string, entityType?:string}>, description?:string, entityId?:string, entityRevision?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>, name?:string}}, name:string, ownerProjectId:string, ownerProjectName?:string, revision?:string}>, subscribedPrincipals:array<array{project?:array{id?:string, name?:string}}>, updatedAt:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function acceptSubscriptionRequestAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, domainIdentifier:string, entityIdentifier:string, entityType:"DOMAIN_UNIT", owner:array{group?:array{groupIdentifier:string}, user?:array{userIdentifier:string}}} $args
     * @return \AWS\Result<array{}>
     */
    public function addEntityOwner(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, domainIdentifier:string, entityIdentifier:string, entityType:"DOMAIN_UNIT", owner:array{group?:array{groupIdentifier:string}, user?:array{userIdentifier:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function addEntityOwnerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, detail:array{addToProjectMemberPool?:array{includeChildDomainUnits?:bool}, createAssetType?:array{includeChildDomainUnits?:bool}, createDomainUnit?:array{includeChildDomainUnits?:bool}, createEnvironment?:array{}, createEnvironmentFromBlueprint?:array{}, createEnvironmentProfile?:array{domainUnitId?:string}, createFormType?:array{includeChildDomainUnits?:bool}, createGlossary?:array{includeChildDomainUnits?:bool}, createProject?:array{includeChildDomainUnits?:bool}, createProjectFromProjectProfile?:array{includeChildDomainUnits?:bool, projectProfiles?:array<string>}, delegateCreateEnvironmentProfile?:array{}, overrideDomainUnitOwners?:array{includeChildDomainUnits?:bool}, overrideProjectOwners?:array{includeChildDomainUnits?:bool}}, domainIdentifier:string, entityIdentifier:string, entityType:"DOMAIN_UNIT"|"ENVIRONMENT_BLUEPRINT_CONFIGURATION"|"ENVIRONMENT_PROFILE", policyType:"CREATE_DOMAIN_UNIT"|"OVERRIDE_DOMAIN_UNIT_OWNERS"|"ADD_TO_PROJECT_MEMBER_POOL"|"OVERRIDE_PROJECT_OWNERS"|"CREATE_GLOSSARY"|"CREATE_FORM_TYPE"|"CREATE_ASSET_TYPE"|"CREATE_PROJECT"|"CREATE_ENVIRONMENT_PROFILE"|"DELEGATE_CREATE_ENVIRONMENT_PROFILE"|"CREATE_ENVIRONMENT"|"CREATE_ENVIRONMENT_FROM_BLUEPRINT"|"CREATE_PROJECT_FROM_PROJECT_PROFILE", principal:array{domainUnit?:array{domainUnitDesignation:"OWNER", domainUnitGrantFilter?:array{allDomainUnitsGrantFilter?:array{}}, domainUnitIdentifier?:string}, group?:array{groupIdentifier?:string}, project?:array{projectDesignation:"OWNER"|"CONTRIBUTOR"|"PROJECT_CATALOG_STEWARD", projectGrantFilter?:array{domainUnitFilter?:array{domainUnit:string, includeChildDomainUnits?:bool}}, projectIdentifier?:string}, user?:array{allUsersGrantFilter?:array{}, userIdentifier?:string}}} $args
     * @return \AWS\Result<array{}>
     */
    public function addPolicyGrant(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, detail:array{addToProjectMemberPool?:array{includeChildDomainUnits?:bool}, createAssetType?:array{includeChildDomainUnits?:bool}, createDomainUnit?:array{includeChildDomainUnits?:bool}, createEnvironment?:array{}, createEnvironmentFromBlueprint?:array{}, createEnvironmentProfile?:array{domainUnitId?:string}, createFormType?:array{includeChildDomainUnits?:bool}, createGlossary?:array{includeChildDomainUnits?:bool}, createProject?:array{includeChildDomainUnits?:bool}, createProjectFromProjectProfile?:array{includeChildDomainUnits?:bool, projectProfiles?:array<string>}, delegateCreateEnvironmentProfile?:array{}, overrideDomainUnitOwners?:array{includeChildDomainUnits?:bool}, overrideProjectOwners?:array{includeChildDomainUnits?:bool}}, domainIdentifier:string, entityIdentifier:string, entityType:"DOMAIN_UNIT"|"ENVIRONMENT_BLUEPRINT_CONFIGURATION"|"ENVIRONMENT_PROFILE", policyType:"CREATE_DOMAIN_UNIT"|"OVERRIDE_DOMAIN_UNIT_OWNERS"|"ADD_TO_PROJECT_MEMBER_POOL"|"OVERRIDE_PROJECT_OWNERS"|"CREATE_GLOSSARY"|"CREATE_FORM_TYPE"|"CREATE_ASSET_TYPE"|"CREATE_PROJECT"|"CREATE_ENVIRONMENT_PROFILE"|"DELEGATE_CREATE_ENVIRONMENT_PROFILE"|"CREATE_ENVIRONMENT"|"CREATE_ENVIRONMENT_FROM_BLUEPRINT"|"CREATE_PROJECT_FROM_PROJECT_PROFILE", principal:array{domainUnit?:array{domainUnitDesignation:"OWNER", domainUnitGrantFilter?:array{allDomainUnitsGrantFilter?:array{}}, domainUnitIdentifier?:string}, group?:array{groupIdentifier?:string}, project?:array{projectDesignation:"OWNER"|"CONTRIBUTOR"|"PROJECT_CATALOG_STEWARD", projectGrantFilter?:array{domainUnitFilter?:array{domainUnit:string, includeChildDomainUnits?:bool}}, projectIdentifier?:string}, user?:array{allUsersGrantFilter?:array{}, userIdentifier?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function addPolicyGrantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, environmentIdentifier:string, environmentRoleArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function associateEnvironmentRole(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, environmentIdentifier:string, environmentRoleArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateEnvironmentRoleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function cancelMetadataGenerationRun(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function cancelMetadataGenerationRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<array{createdAt:int|string|\DateTimeInterface, createdBy:string, domainId:string, id:string, retainPermissions?:bool, status:"APPROVED"|"REVOKED"|"CANCELLED", subscribedListing:array{description:string, id:string, item:array{assetListing?:array{assetScope?:array{assetId:string, errorMessage?:string, filterIds:array<string>, status:string}, entityId?:string, entityRevision?:string, entityType?:string, forms?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>}, productListing?:array{assetListings?:array<array{entityId?:string, entityRevision?:string, entityType?:string}>, description?:string, entityId?:string, entityRevision?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>, name?:string}}, name:string, ownerProjectId:string, ownerProjectName?:string, revision?:string}, subscribedPrincipal:array{project?:array{id?:string, name?:string}}, subscriptionRequestId?:string, updatedAt:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function cancelSubscription(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt:int|string|\DateTimeInterface, createdBy:string, domainId:string, id:string, retainPermissions?:bool, status:"APPROVED"|"REVOKED"|"CANCELLED", subscribedListing:array{description:string, id:string, item:array{assetListing?:array{assetScope?:array{assetId:string, errorMessage?:string, filterIds:array<string>, status:string}, entityId?:string, entityRevision?:string, entityType?:string, forms?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>}, productListing?:array{assetListings?:array<array{entityId?:string, entityRevision?:string, entityType?:string}>, description?:string, entityId?:string, entityRevision?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>, name?:string}}, name:string, ownerProjectId:string, ownerProjectName?:string, revision?:string}, subscribedPrincipal:array{project?:array{id?:string, name?:string}}, subscriptionRequestId?:string, updatedAt:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function cancelSubscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, description?:string, domainIdentifier:string, externalIdentifier?:string, formsInput?:array<array{content?:string, formName:string, typeIdentifier?:string, typeRevision?:string}>, glossaryTerms?:array<string>, name:string, owningProjectIdentifier:string, predictionConfiguration?:array{businessNameGeneration?:array{enabled?:bool}}, typeIdentifier:string, typeRevision?:string} $args
     * @return \AWS\Result<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, externalIdentifier?:string, firstRevisionCreatedAt?:int|string|\DateTimeInterface, firstRevisionCreatedBy?:string, formsOutput:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, glossaryTerms?:array<string>, id:string, latestTimeSeriesDataPointFormsOutput?:array<array{contentSummary?:string, formName:string, id?:string, timestamp:int|string|\DateTimeInterface, typeIdentifier:string, typeRevision?:string}>, listing?:array{listingId:string, listingStatus:"CREATING"|"ACTIVE"|"INACTIVE"}, name:string, owningProjectId:string, predictionConfiguration?:array{businessNameGeneration?:array{enabled?:bool}}, readOnlyFormsOutput?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, revision:string, typeIdentifier:string, typeRevision:string}>
     */
    public function createAsset(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, description?:string, domainIdentifier:string, externalIdentifier?:string, formsInput?:array<array{content?:string, formName:string, typeIdentifier?:string, typeRevision?:string}>, glossaryTerms?:array<string>, name:string, owningProjectIdentifier:string, predictionConfiguration?:array{businessNameGeneration?:array{enabled?:bool}}, typeIdentifier:string, typeRevision?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, externalIdentifier?:string, firstRevisionCreatedAt?:int|string|\DateTimeInterface, firstRevisionCreatedBy?:string, formsOutput:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, glossaryTerms?:array<string>, id:string, latestTimeSeriesDataPointFormsOutput?:array<array{contentSummary?:string, formName:string, id?:string, timestamp:int|string|\DateTimeInterface, typeIdentifier:string, typeRevision?:string}>, listing?:array{listingId:string, listingStatus:"CREATING"|"ACTIVE"|"INACTIVE"}, name:string, owningProjectId:string, predictionConfiguration?:array{businessNameGeneration?:array{enabled?:bool}}, readOnlyFormsOutput?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, revision:string, typeIdentifier:string, typeRevision:string}>
     */
    public function createAssetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetIdentifier:string, clientToken?:string, configuration:array{columnConfiguration?:array{includedColumnNames?:array<string>}, rowConfiguration?:array{rowFilter:array{and?:array<array{and?:mixed, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:array<array{and?:mixed, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:mixed}>}>, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:array<array{and?:array<array{and?:mixed, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:mixed}>, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:mixed}>}, sensitive?:bool}}, description?:string, domainIdentifier:string, name:string} $args
     * @return \AWS\Result<array{assetId:string, configuration:array{columnConfiguration?:array{includedColumnNames?:array<string>}, rowConfiguration?:array{rowFilter:array{and?:array<array{and?:mixed, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:array<array{and?:mixed, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:mixed}>}>, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:array<array{and?:array<array{and?:mixed, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:mixed}>, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:mixed}>}, sensitive?:bool}}, createdAt?:int|string|\DateTimeInterface, description?:string, domainId:string, effectiveColumnNames?:array<string>, effectiveRowFilter?:string, errorMessage?:string, id:string, name:string, status?:"VALID"|"INVALID"}>
     */
    public function createAssetFilter(array $args): \AWS\Result { }

    /**
     * @param array{assetIdentifier:string, clientToken?:string, configuration:array{columnConfiguration?:array{includedColumnNames?:array<string>}, rowConfiguration?:array{rowFilter:array{and?:array<array{and?:mixed, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:array<array{and?:mixed, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:mixed}>}>, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:array<array{and?:array<array{and?:mixed, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:mixed}>, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:mixed}>}, sensitive?:bool}}, description?:string, domainIdentifier:string, name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assetId:string, configuration:array{columnConfiguration?:array{includedColumnNames?:array<string>}, rowConfiguration?:array{rowFilter:array{and?:array<array{and?:mixed, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:array<array{and?:mixed, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:mixed}>}>, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:array<array{and?:array<array{and?:mixed, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:mixed}>, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:mixed}>}, sensitive?:bool}}, createdAt?:int|string|\DateTimeInterface, description?:string, domainId:string, effectiveColumnNames?:array<string>, effectiveRowFilter?:string, errorMessage?:string, id:string, name:string, status?:"VALID"|"INVALID"}>
     */
    public function createAssetFilterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, description?:string, domainIdentifier:string, formsInput?:array<array{content?:string, formName:string, typeIdentifier?:string, typeRevision?:string}>, glossaryTerms?:array<string>, identifier:string, name:string, predictionConfiguration?:array{businessNameGeneration?:array{enabled?:bool}}, typeRevision?:string} $args
     * @return \AWS\Result<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, externalIdentifier?:string, firstRevisionCreatedAt?:int|string|\DateTimeInterface, firstRevisionCreatedBy?:string, formsOutput:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, glossaryTerms?:array<string>, id:string, latestTimeSeriesDataPointFormsOutput?:array<array{contentSummary?:string, formName:string, id?:string, timestamp:int|string|\DateTimeInterface, typeIdentifier:string, typeRevision?:string}>, listing?:array{listingId:string, listingStatus:"CREATING"|"ACTIVE"|"INACTIVE"}, name:string, owningProjectId:string, predictionConfiguration?:array{businessNameGeneration?:array{enabled?:bool}}, readOnlyFormsOutput?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, revision:string, typeIdentifier:string, typeRevision:string}>
     */
    public function createAssetRevision(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, description?:string, domainIdentifier:string, formsInput?:array<array{content?:string, formName:string, typeIdentifier?:string, typeRevision?:string}>, glossaryTerms?:array<string>, identifier:string, name:string, predictionConfiguration?:array{businessNameGeneration?:array{enabled?:bool}}, typeRevision?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, externalIdentifier?:string, firstRevisionCreatedAt?:int|string|\DateTimeInterface, firstRevisionCreatedBy?:string, formsOutput:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, glossaryTerms?:array<string>, id:string, latestTimeSeriesDataPointFormsOutput?:array<array{contentSummary?:string, formName:string, id?:string, timestamp:int|string|\DateTimeInterface, typeIdentifier:string, typeRevision?:string}>, listing?:array{listingId:string, listingStatus:"CREATING"|"ACTIVE"|"INACTIVE"}, name:string, owningProjectId:string, predictionConfiguration?:array{businessNameGeneration?:array{enabled?:bool}}, readOnlyFormsOutput?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, revision:string, typeIdentifier:string, typeRevision:string}>
     */
    public function createAssetRevisionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, domainIdentifier:string, formsInput:array<string, array{required?:bool, typeIdentifier:string, typeRevision:string}>, name:string, owningProjectIdentifier:string} $args
     * @return \AWS\Result<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, formsOutput:array<string, array{required?:bool, typeName:string, typeRevision:string}>, name:string, originDomainId?:string, originProjectId?:string, owningProjectId?:string, revision:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function createAssetType(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, domainIdentifier:string, formsInput:array<string, array{required?:bool, typeIdentifier:string, typeRevision:string}>, name:string, owningProjectIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, formsOutput:array<string, array{required?:bool, typeName:string, typeRevision:string}>, name:string, originDomainId?:string, originProjectId?:string, owningProjectId?:string, revision:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function createAssetTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{awsLocation?:array{accessRole?:string, awsAccountId?:string, awsRegion?:string, iamConnectionId?:string}, clientToken?:string, description?:string, domainIdentifier:string, environmentIdentifier:string, name:string, props?:array{athenaProperties?:array{workgroupName?:string}, glueProperties?:array{glueConnectionInput?:array{athenaProperties?:array<string, string>, authenticationConfiguration?:array{authenticationType?:"BASIC"|"OAUTH2"|"CUSTOM", basicAuthenticationCredentials?:array{password?:string, userName?:string}, customAuthenticationCredentials?:array<string, string>, kmsKeyArn?:string, oAuth2Properties?:array{authorizationCodeProperties?:array{authorizationCode?:string, redirectUri?:string}, oAuth2ClientApplication?:array{aWSManagedClientApplicationReference?:string, userManagedClientApplicationClientId?:string}, oAuth2Credentials?:array{accessToken?:string, jwtToken?:string, refreshToken?:string, userManagedClientApplicationClientSecret?:string}, oAuth2GrantType?:"AUTHORIZATION_CODE"|"CLIENT_CREDENTIALS"|"JWT_BEARER", tokenUrl?:string, tokenUrlParametersMap?:array<string, string>}, secretArn?:string}, connectionProperties?:array<string, string>, connectionType?:"SNOWFLAKE"|"BIGQUERY"|"DOCUMENTDB"|"DYNAMODB"|"MYSQL"|"OPENSEARCH"|"ORACLE"|"POSTGRESQL"|"REDSHIFT"|"SAPHANA"|"SQLSERVER"|"TERADATA"|"VERTICA", description?:string, matchCriteria?:string, name?:string, physicalConnectionRequirements?:array{availabilityZone?:string, securityGroupIdList?:array<string>, subnetId?:string, subnetIdList?:array<string>}, pythonProperties?:array<string, string>, sparkProperties?:array<string, string>, validateCredentials?:bool, validateForComputeEnvironments?:array<"SPARK"|"ATHENA"|"PYTHON">}}, hyperPodProperties?:array{clusterName:string}, iamProperties?:array{glueLineageSyncEnabled?:bool}, redshiftProperties?:array{credentials?:array{secretArn?:string, usernamePassword?:array{password:string, username:string}}, databaseName?:string, host?:string, lineageSync?:array{enabled?:bool, schedule?:array{schedule?:mixed}}, port?:int, storage?:array{clusterName?:string, workgroupName?:string}}, sparkEmrProperties?:array{computeArn?:string, instanceProfileArn?:string, javaVirtualEnv?:string, logUri?:string, pythonVirtualEnv?:string, runtimeRole?:string, trustedCertificatesS3Uri?:string}, sparkGlueProperties?:array{additionalArgs?:array{connection?:string}, glueConnectionName?:string, glueVersion?:string, idleTimeout?:int, javaVirtualEnv?:string, numberOfWorkers?:int, pythonVirtualEnv?:string, workerType?:string}}} $args
     * @return \AWS\Result<array{connectionId:string, description?:string, domainId:string, domainUnitId:string, environmentId?:string, name:string, physicalEndpoints:array<array{awsLocation?:array{accessRole?:string, awsAccountId?:string, awsRegion?:string, iamConnectionId?:string}, glueConnection?:array{athenaProperties?:array<string, string>, authenticationConfiguration?:array{authenticationType?:"BASIC"|"OAUTH2"|"CUSTOM", oAuth2Properties?:array{authorizationCodeProperties?:array{authorizationCode?:string, redirectUri?:string}, oAuth2ClientApplication?:array{aWSManagedClientApplicationReference?:string, userManagedClientApplicationClientId?:string}, oAuth2Credentials?:array{accessToken?:string, jwtToken?:string, refreshToken?:string, userManagedClientApplicationClientSecret?:string}, oAuth2GrantType?:"AUTHORIZATION_CODE"|"CLIENT_CREDENTIALS"|"JWT_BEARER", tokenUrl?:string, tokenUrlParametersMap?:array<string, string>}, secretArn?:string}, compatibleComputeEnvironments?:array<"SPARK"|"ATHENA"|"PYTHON">, connectionProperties?:array<string, string>, connectionSchemaVersion?:int, connectionType?:"ATHENA"|"BIGQUERY"|"DATABRICKS"|"DOCUMENTDB"|"DYNAMODB"|"HYPERPOD"|"IAM"|"MYSQL"|"OPENSEARCH"|"ORACLE"|"POSTGRESQL"|"REDSHIFT"|"SAPHANA"|"SNOWFLAKE"|"SPARK"|"SQLSERVER"|"TERADATA"|"VERTICA"|"WORKFLOWS_MWAA", creationTime?:int|string|\DateTimeInterface, description?:string, lastConnectionValidationTime?:int|string|\DateTimeInterface, lastUpdatedBy?:string, lastUpdatedTime?:int|string|\DateTimeInterface, matchCriteria?:array<string>, name?:string, physicalConnectionRequirements?:array{availabilityZone?:string, securityGroupIdList?:array<string>, subnetId?:string, subnetIdList?:array<string>}, pythonProperties?:array<string, string>, sparkProperties?:array<string, string>, status?:"CREATING"|"CREATE_FAILED"|"DELETING"|"DELETE_FAILED"|"READY"|"UPDATING"|"UPDATE_FAILED"|"DELETED", statusReason?:string}, glueConnectionName?:string, host?:string, port?:int, protocol?:"ATHENA"|"GLUE_INTERACTIVE_SESSION"|"HTTPS"|"JDBC"|"LIVY"|"ODBC"|"PRISM", stage?:string}>, projectId?:string, props?:array{athenaProperties?:array{workgroupName?:string}, glueProperties?:array{errorMessage?:string, status?:"CREATING"|"CREATE_FAILED"|"DELETING"|"DELETE_FAILED"|"READY"|"UPDATING"|"UPDATE_FAILED"|"DELETED"}, hyperPodProperties?:array{clusterArn?:string, clusterName:string, orchestrator?:"EKS"|"SLURM"}, iamProperties?:array{environmentId?:string, glueLineageSyncEnabled?:bool}, redshiftProperties?:array{credentials?:array{secretArn?:string, usernamePassword?:array{password:string, username:string}}, databaseName?:string, isProvisionedSecret?:bool, jdbcIamUrl?:string, jdbcUrl?:string, lineageSync?:array{enabled?:bool, lineageJobId?:string, schedule?:array{schedule?:mixed}}, redshiftTempDir?:string, status?:"CREATING"|"CREATE_FAILED"|"DELETING"|"DELETE_FAILED"|"READY"|"UPDATING"|"UPDATE_FAILED"|"DELETED", storage?:array{clusterName?:string, workgroupName?:string}}, sparkEmrProperties?:array{computeArn?:string, credentials?:array{password:string, username:string}, credentialsExpiration?:int|string|\DateTimeInterface, governanceType?:"AWS_MANAGED"|"USER_MANAGED", instanceProfileArn?:string, javaVirtualEnv?:string, livyEndpoint?:string, logUri?:string, pythonVirtualEnv?:string, runtimeRole?:string, trustedCertificatesS3Uri?:string}, sparkGlueProperties?:array{additionalArgs?:array{connection?:string}, glueConnectionName?:string, glueVersion?:string, idleTimeout?:int, javaVirtualEnv?:string, numberOfWorkers?:int, pythonVirtualEnv?:string, workerType?:string}}, type:"ATHENA"|"BIGQUERY"|"DATABRICKS"|"DOCUMENTDB"|"DYNAMODB"|"HYPERPOD"|"IAM"|"MYSQL"|"OPENSEARCH"|"ORACLE"|"POSTGRESQL"|"REDSHIFT"|"SAPHANA"|"SNOWFLAKE"|"SPARK"|"SQLSERVER"|"TERADATA"|"VERTICA"|"WORKFLOWS_MWAA"}>
     */
    public function createConnection(array $args): \AWS\Result { }

    /**
     * @param array{awsLocation?:array{accessRole?:string, awsAccountId?:string, awsRegion?:string, iamConnectionId?:string}, clientToken?:string, description?:string, domainIdentifier:string, environmentIdentifier:string, name:string, props?:array{athenaProperties?:array{workgroupName?:string}, glueProperties?:array{glueConnectionInput?:array{athenaProperties?:array<string, string>, authenticationConfiguration?:array{authenticationType?:"BASIC"|"OAUTH2"|"CUSTOM", basicAuthenticationCredentials?:array{password?:string, userName?:string}, customAuthenticationCredentials?:array<string, string>, kmsKeyArn?:string, oAuth2Properties?:array{authorizationCodeProperties?:array{authorizationCode?:string, redirectUri?:string}, oAuth2ClientApplication?:array{aWSManagedClientApplicationReference?:string, userManagedClientApplicationClientId?:string}, oAuth2Credentials?:array{accessToken?:string, jwtToken?:string, refreshToken?:string, userManagedClientApplicationClientSecret?:string}, oAuth2GrantType?:"AUTHORIZATION_CODE"|"CLIENT_CREDENTIALS"|"JWT_BEARER", tokenUrl?:string, tokenUrlParametersMap?:array<string, string>}, secretArn?:string}, connectionProperties?:array<string, string>, connectionType?:"SNOWFLAKE"|"BIGQUERY"|"DOCUMENTDB"|"DYNAMODB"|"MYSQL"|"OPENSEARCH"|"ORACLE"|"POSTGRESQL"|"REDSHIFT"|"SAPHANA"|"SQLSERVER"|"TERADATA"|"VERTICA", description?:string, matchCriteria?:string, name?:string, physicalConnectionRequirements?:array{availabilityZone?:string, securityGroupIdList?:array<string>, subnetId?:string, subnetIdList?:array<string>}, pythonProperties?:array<string, string>, sparkProperties?:array<string, string>, validateCredentials?:bool, validateForComputeEnvironments?:array<"SPARK"|"ATHENA"|"PYTHON">}}, hyperPodProperties?:array{clusterName:string}, iamProperties?:array{glueLineageSyncEnabled?:bool}, redshiftProperties?:array{credentials?:array{secretArn?:string, usernamePassword?:array{password:string, username:string}}, databaseName?:string, host?:string, lineageSync?:array{enabled?:bool, schedule?:array{schedule?:mixed}}, port?:int, storage?:array{clusterName?:string, workgroupName?:string}}, sparkEmrProperties?:array{computeArn?:string, instanceProfileArn?:string, javaVirtualEnv?:string, logUri?:string, pythonVirtualEnv?:string, runtimeRole?:string, trustedCertificatesS3Uri?:string}, sparkGlueProperties?:array{additionalArgs?:array{connection?:string}, glueConnectionName?:string, glueVersion?:string, idleTimeout?:int, javaVirtualEnv?:string, numberOfWorkers?:int, pythonVirtualEnv?:string, workerType?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{connectionId:string, description?:string, domainId:string, domainUnitId:string, environmentId?:string, name:string, physicalEndpoints:array<array{awsLocation?:array{accessRole?:string, awsAccountId?:string, awsRegion?:string, iamConnectionId?:string}, glueConnection?:array{athenaProperties?:array<string, string>, authenticationConfiguration?:array{authenticationType?:"BASIC"|"OAUTH2"|"CUSTOM", oAuth2Properties?:array{authorizationCodeProperties?:array{authorizationCode?:string, redirectUri?:string}, oAuth2ClientApplication?:array{aWSManagedClientApplicationReference?:string, userManagedClientApplicationClientId?:string}, oAuth2Credentials?:array{accessToken?:string, jwtToken?:string, refreshToken?:string, userManagedClientApplicationClientSecret?:string}, oAuth2GrantType?:"AUTHORIZATION_CODE"|"CLIENT_CREDENTIALS"|"JWT_BEARER", tokenUrl?:string, tokenUrlParametersMap?:array<string, string>}, secretArn?:string}, compatibleComputeEnvironments?:array<"SPARK"|"ATHENA"|"PYTHON">, connectionProperties?:array<string, string>, connectionSchemaVersion?:int, connectionType?:"ATHENA"|"BIGQUERY"|"DATABRICKS"|"DOCUMENTDB"|"DYNAMODB"|"HYPERPOD"|"IAM"|"MYSQL"|"OPENSEARCH"|"ORACLE"|"POSTGRESQL"|"REDSHIFT"|"SAPHANA"|"SNOWFLAKE"|"SPARK"|"SQLSERVER"|"TERADATA"|"VERTICA"|"WORKFLOWS_MWAA", creationTime?:int|string|\DateTimeInterface, description?:string, lastConnectionValidationTime?:int|string|\DateTimeInterface, lastUpdatedBy?:string, lastUpdatedTime?:int|string|\DateTimeInterface, matchCriteria?:array<string>, name?:string, physicalConnectionRequirements?:array{availabilityZone?:string, securityGroupIdList?:array<string>, subnetId?:string, subnetIdList?:array<string>}, pythonProperties?:array<string, string>, sparkProperties?:array<string, string>, status?:"CREATING"|"CREATE_FAILED"|"DELETING"|"DELETE_FAILED"|"READY"|"UPDATING"|"UPDATE_FAILED"|"DELETED", statusReason?:string}, glueConnectionName?:string, host?:string, port?:int, protocol?:"ATHENA"|"GLUE_INTERACTIVE_SESSION"|"HTTPS"|"JDBC"|"LIVY"|"ODBC"|"PRISM", stage?:string}>, projectId?:string, props?:array{athenaProperties?:array{workgroupName?:string}, glueProperties?:array{errorMessage?:string, status?:"CREATING"|"CREATE_FAILED"|"DELETING"|"DELETE_FAILED"|"READY"|"UPDATING"|"UPDATE_FAILED"|"DELETED"}, hyperPodProperties?:array{clusterArn?:string, clusterName:string, orchestrator?:"EKS"|"SLURM"}, iamProperties?:array{environmentId?:string, glueLineageSyncEnabled?:bool}, redshiftProperties?:array{credentials?:array{secretArn?:string, usernamePassword?:array{password:string, username:string}}, databaseName?:string, isProvisionedSecret?:bool, jdbcIamUrl?:string, jdbcUrl?:string, lineageSync?:array{enabled?:bool, lineageJobId?:string, schedule?:array{schedule?:mixed}}, redshiftTempDir?:string, status?:"CREATING"|"CREATE_FAILED"|"DELETING"|"DELETE_FAILED"|"READY"|"UPDATING"|"UPDATE_FAILED"|"DELETED", storage?:array{clusterName?:string, workgroupName?:string}}, sparkEmrProperties?:array{computeArn?:string, credentials?:array{password:string, username:string}, credentialsExpiration?:int|string|\DateTimeInterface, governanceType?:"AWS_MANAGED"|"USER_MANAGED", instanceProfileArn?:string, javaVirtualEnv?:string, livyEndpoint?:string, logUri?:string, pythonVirtualEnv?:string, runtimeRole?:string, trustedCertificatesS3Uri?:string}, sparkGlueProperties?:array{additionalArgs?:array{connection?:string}, glueConnectionName?:string, glueVersion?:string, idleTimeout?:int, javaVirtualEnv?:string, numberOfWorkers?:int, pythonVirtualEnv?:string, workerType?:string}}, type:"ATHENA"|"BIGQUERY"|"DATABRICKS"|"DOCUMENTDB"|"DYNAMODB"|"HYPERPOD"|"IAM"|"MYSQL"|"OPENSEARCH"|"ORACLE"|"POSTGRESQL"|"REDSHIFT"|"SAPHANA"|"SNOWFLAKE"|"SPARK"|"SQLSERVER"|"TERADATA"|"VERTICA"|"WORKFLOWS_MWAA"}>
     */
    public function createConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, description?:string, domainIdentifier:string, formsInput?:array<array{content?:string, formName:string, typeIdentifier?:string, typeRevision?:string}>, glossaryTerms?:array<string>, items?:array<array{glossaryTerms?:array<string>, identifier:string, itemType:"ASSET", revision?:string}>, name:string, owningProjectIdentifier:string} $args
     * @return \AWS\Result<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, firstRevisionCreatedAt?:int|string|\DateTimeInterface, firstRevisionCreatedBy?:string, formsOutput?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, glossaryTerms?:array<string>, id:string, items?:array<array{glossaryTerms?:array<string>, identifier:string, itemType:"ASSET", revision?:string}>, name:string, owningProjectId:string, revision:string, status:"CREATED"|"CREATING"|"CREATE_FAILED"}>
     */
    public function createDataProduct(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, description?:string, domainIdentifier:string, formsInput?:array<array{content?:string, formName:string, typeIdentifier?:string, typeRevision?:string}>, glossaryTerms?:array<string>, items?:array<array{glossaryTerms?:array<string>, identifier:string, itemType:"ASSET", revision?:string}>, name:string, owningProjectIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, firstRevisionCreatedAt?:int|string|\DateTimeInterface, firstRevisionCreatedBy?:string, formsOutput?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, glossaryTerms?:array<string>, id:string, items?:array<array{glossaryTerms?:array<string>, identifier:string, itemType:"ASSET", revision?:string}>, name:string, owningProjectId:string, revision:string, status:"CREATED"|"CREATING"|"CREATE_FAILED"}>
     */
    public function createDataProductAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, description?:string, domainIdentifier:string, formsInput?:array<array{content?:string, formName:string, typeIdentifier?:string, typeRevision?:string}>, glossaryTerms?:array<string>, identifier:string, items?:array<array{glossaryTerms?:array<string>, identifier:string, itemType:"ASSET", revision?:string}>, name:string} $args
     * @return \AWS\Result<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, firstRevisionCreatedAt?:int|string|\DateTimeInterface, firstRevisionCreatedBy?:string, formsOutput?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, glossaryTerms?:array<string>, id:string, items?:array<array{glossaryTerms?:array<string>, identifier:string, itemType:"ASSET", revision?:string}>, name:string, owningProjectId:string, revision:string, status:"CREATED"|"CREATING"|"CREATE_FAILED"}>
     */
    public function createDataProductRevision(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, description?:string, domainIdentifier:string, formsInput?:array<array{content?:string, formName:string, typeIdentifier?:string, typeRevision?:string}>, glossaryTerms?:array<string>, identifier:string, items?:array<array{glossaryTerms?:array<string>, identifier:string, itemType:"ASSET", revision?:string}>, name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, firstRevisionCreatedAt?:int|string|\DateTimeInterface, firstRevisionCreatedBy?:string, formsOutput?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, glossaryTerms?:array<string>, id:string, items?:array<array{glossaryTerms?:array<string>, identifier:string, itemType:"ASSET", revision?:string}>, name:string, owningProjectId:string, revision:string, status:"CREATED"|"CREATING"|"CREATE_FAILED"}>
     */
    public function createDataProductRevisionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetFormsInput?:array<array{content?:string, formName:string, typeIdentifier?:string, typeRevision?:string}>, clientToken?:string, configuration?:array{glueRunConfiguration?:array{autoImportDataQualityResult?:bool, catalogName?:string, dataAccessRole?:string, relationalFilterConfigurations:array<array{databaseName:string, filterExpressions?:array<array{expression:string, type:"INCLUDE"|"EXCLUDE"}>, schemaName?:string}>}, redshiftRunConfiguration?:array{dataAccessRole?:string, redshiftCredentialConfiguration?:array{secretManagerArn:string}, redshiftStorage?:array{redshiftClusterSource?:array{clusterName:string}, redshiftServerlessSource?:array{workgroupName:string}}, relationalFilterConfigurations:array<array{databaseName:string, filterExpressions?:array<array{expression:string, type:"INCLUDE"|"EXCLUDE"}>, schemaName?:string}>}, sageMakerRunConfiguration?:array{trackingAssets:array<string, array<string>>}}, connectionIdentifier?:string, description?:string, domainIdentifier:string, enableSetting?:"ENABLED"|"DISABLED", environmentIdentifier?:string, name:string, projectIdentifier:string, publishOnImport?:bool, recommendation?:array{enableBusinessNameGeneration?:bool}, schedule?:array{schedule?:mixed, timezone?:"UTC"|"AFRICA_JOHANNESBURG"|"AMERICA_MONTREAL"|"AMERICA_SAO_PAULO"|"ASIA_BAHRAIN"|"ASIA_BANGKOK"|"ASIA_CALCUTTA"|"ASIA_DUBAI"|"ASIA_HONG_KONG"|"ASIA_JAKARTA"|"ASIA_KUALA_LUMPUR"|"ASIA_SEOUL"|"ASIA_SHANGHAI"|"ASIA_SINGAPORE"|"ASIA_TAIPEI"|"ASIA_TOKYO"|"AUSTRALIA_MELBOURNE"|"AUSTRALIA_SYDNEY"|"CANADA_CENTRAL"|"CET"|"CST6CDT"|"ETC_GMT"|"ETC_GMT0"|"ETC_GMT_ADD_0"|"ETC_GMT_ADD_1"|"ETC_GMT_ADD_10"|"ETC_GMT_ADD_11"|"ETC_GMT_ADD_12"|"ETC_GMT_ADD_2"|"ETC_GMT_ADD_3"|"ETC_GMT_ADD_4"|"ETC_GMT_ADD_5"|"ETC_GMT_ADD_6"|"ETC_GMT_ADD_7"|"ETC_GMT_ADD_8"|"ETC_GMT_ADD_9"|"ETC_GMT_NEG_0"|"ETC_GMT_NEG_1"|"ETC_GMT_NEG_10"|"ETC_GMT_NEG_11"|"ETC_GMT_NEG_12"|"ETC_GMT_NEG_13"|"ETC_GMT_NEG_14"|"ETC_GMT_NEG_2"|"ETC_GMT_NEG_3"|"ETC_GMT_NEG_4"|"ETC_GMT_NEG_5"|"ETC_GMT_NEG_6"|"ETC_GMT_NEG_7"|"ETC_GMT_NEG_8"|"ETC_GMT_NEG_9"|"EUROPE_DUBLIN"|"EUROPE_LONDON"|"EUROPE_PARIS"|"EUROPE_STOCKHOLM"|"EUROPE_ZURICH"|"ISRAEL"|"MEXICO_GENERAL"|"MST7MDT"|"PACIFIC_AUCKLAND"|"US_CENTRAL"|"US_EASTERN"|"US_MOUNTAIN"|"US_PACIFIC"}, type:string} $args
     * @return \AWS\Result<array{assetFormsOutput?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, configuration?:array{glueRunConfiguration?:array{accountId?:string, autoImportDataQualityResult?:bool, catalogName?:string, dataAccessRole?:string, region?:string, relationalFilterConfigurations:array<array{databaseName:string, filterExpressions?:array<array{expression:string, type:"INCLUDE"|"EXCLUDE"}>, schemaName?:string}>}, redshiftRunConfiguration?:array{accountId?:string, dataAccessRole?:string, redshiftCredentialConfiguration?:array{secretManagerArn:string}, redshiftStorage:array{redshiftClusterSource?:array{clusterName:string}, redshiftServerlessSource?:array{workgroupName:string}}, region?:string, relationalFilterConfigurations:array<array{databaseName:string, filterExpressions?:array<array{expression:string, type:"INCLUDE"|"EXCLUDE"}>, schemaName?:string}>}, sageMakerRunConfiguration?:array{accountId?:string, region?:string, trackingAssets:array<string, array<string>>}}, connectionId?:string, createdAt?:int|string|\DateTimeInterface, description?:string, domainId:string, enableSetting?:"ENABLED"|"DISABLED", environmentId?:string, errorMessage?:array{errorDetail?:string, errorType:"ACCESS_DENIED_EXCEPTION"|"CONFLICT_EXCEPTION"|"INTERNAL_SERVER_EXCEPTION"|"RESOURCE_NOT_FOUND_EXCEPTION"|"SERVICE_QUOTA_EXCEEDED_EXCEPTION"|"THROTTLING_EXCEPTION"|"VALIDATION_EXCEPTION"}, id:string, lastRunAt?:int|string|\DateTimeInterface, lastRunErrorMessage?:array{errorDetail?:string, errorType:"ACCESS_DENIED_EXCEPTION"|"CONFLICT_EXCEPTION"|"INTERNAL_SERVER_EXCEPTION"|"RESOURCE_NOT_FOUND_EXCEPTION"|"SERVICE_QUOTA_EXCEEDED_EXCEPTION"|"THROTTLING_EXCEPTION"|"VALIDATION_EXCEPTION"}, lastRunStatus?:"REQUESTED"|"RUNNING"|"FAILED"|"PARTIALLY_SUCCEEDED"|"SUCCESS", name:string, projectId:string, publishOnImport?:bool, recommendation?:array{enableBusinessNameGeneration?:bool}, schedule?:array{schedule?:mixed, timezone?:"UTC"|"AFRICA_JOHANNESBURG"|"AMERICA_MONTREAL"|"AMERICA_SAO_PAULO"|"ASIA_BAHRAIN"|"ASIA_BANGKOK"|"ASIA_CALCUTTA"|"ASIA_DUBAI"|"ASIA_HONG_KONG"|"ASIA_JAKARTA"|"ASIA_KUALA_LUMPUR"|"ASIA_SEOUL"|"ASIA_SHANGHAI"|"ASIA_SINGAPORE"|"ASIA_TAIPEI"|"ASIA_TOKYO"|"AUSTRALIA_MELBOURNE"|"AUSTRALIA_SYDNEY"|"CANADA_CENTRAL"|"CET"|"CST6CDT"|"ETC_GMT"|"ETC_GMT0"|"ETC_GMT_ADD_0"|"ETC_GMT_ADD_1"|"ETC_GMT_ADD_10"|"ETC_GMT_ADD_11"|"ETC_GMT_ADD_12"|"ETC_GMT_ADD_2"|"ETC_GMT_ADD_3"|"ETC_GMT_ADD_4"|"ETC_GMT_ADD_5"|"ETC_GMT_ADD_6"|"ETC_GMT_ADD_7"|"ETC_GMT_ADD_8"|"ETC_GMT_ADD_9"|"ETC_GMT_NEG_0"|"ETC_GMT_NEG_1"|"ETC_GMT_NEG_10"|"ETC_GMT_NEG_11"|"ETC_GMT_NEG_12"|"ETC_GMT_NEG_13"|"ETC_GMT_NEG_14"|"ETC_GMT_NEG_2"|"ETC_GMT_NEG_3"|"ETC_GMT_NEG_4"|"ETC_GMT_NEG_5"|"ETC_GMT_NEG_6"|"ETC_GMT_NEG_7"|"ETC_GMT_NEG_8"|"ETC_GMT_NEG_9"|"EUROPE_DUBLIN"|"EUROPE_LONDON"|"EUROPE_PARIS"|"EUROPE_STOCKHOLM"|"EUROPE_ZURICH"|"ISRAEL"|"MEXICO_GENERAL"|"MST7MDT"|"PACIFIC_AUCKLAND"|"US_CENTRAL"|"US_EASTERN"|"US_MOUNTAIN"|"US_PACIFIC"}, status?:"CREATING"|"FAILED_CREATION"|"READY"|"UPDATING"|"FAILED_UPDATE"|"RUNNING"|"DELETING"|"FAILED_DELETION", type?:string, updatedAt?:int|string|\DateTimeInterface}>
     */
    public function createDataSource(array $args): \AWS\Result { }

    /**
     * @param array{assetFormsInput?:array<array{content?:string, formName:string, typeIdentifier?:string, typeRevision?:string}>, clientToken?:string, configuration?:array{glueRunConfiguration?:array{autoImportDataQualityResult?:bool, catalogName?:string, dataAccessRole?:string, relationalFilterConfigurations:array<array{databaseName:string, filterExpressions?:array<array{expression:string, type:"INCLUDE"|"EXCLUDE"}>, schemaName?:string}>}, redshiftRunConfiguration?:array{dataAccessRole?:string, redshiftCredentialConfiguration?:array{secretManagerArn:string}, redshiftStorage?:array{redshiftClusterSource?:array{clusterName:string}, redshiftServerlessSource?:array{workgroupName:string}}, relationalFilterConfigurations:array<array{databaseName:string, filterExpressions?:array<array{expression:string, type:"INCLUDE"|"EXCLUDE"}>, schemaName?:string}>}, sageMakerRunConfiguration?:array{trackingAssets:array<string, array<string>>}}, connectionIdentifier?:string, description?:string, domainIdentifier:string, enableSetting?:"ENABLED"|"DISABLED", environmentIdentifier?:string, name:string, projectIdentifier:string, publishOnImport?:bool, recommendation?:array{enableBusinessNameGeneration?:bool}, schedule?:array{schedule?:mixed, timezone?:"UTC"|"AFRICA_JOHANNESBURG"|"AMERICA_MONTREAL"|"AMERICA_SAO_PAULO"|"ASIA_BAHRAIN"|"ASIA_BANGKOK"|"ASIA_CALCUTTA"|"ASIA_DUBAI"|"ASIA_HONG_KONG"|"ASIA_JAKARTA"|"ASIA_KUALA_LUMPUR"|"ASIA_SEOUL"|"ASIA_SHANGHAI"|"ASIA_SINGAPORE"|"ASIA_TAIPEI"|"ASIA_TOKYO"|"AUSTRALIA_MELBOURNE"|"AUSTRALIA_SYDNEY"|"CANADA_CENTRAL"|"CET"|"CST6CDT"|"ETC_GMT"|"ETC_GMT0"|"ETC_GMT_ADD_0"|"ETC_GMT_ADD_1"|"ETC_GMT_ADD_10"|"ETC_GMT_ADD_11"|"ETC_GMT_ADD_12"|"ETC_GMT_ADD_2"|"ETC_GMT_ADD_3"|"ETC_GMT_ADD_4"|"ETC_GMT_ADD_5"|"ETC_GMT_ADD_6"|"ETC_GMT_ADD_7"|"ETC_GMT_ADD_8"|"ETC_GMT_ADD_9"|"ETC_GMT_NEG_0"|"ETC_GMT_NEG_1"|"ETC_GMT_NEG_10"|"ETC_GMT_NEG_11"|"ETC_GMT_NEG_12"|"ETC_GMT_NEG_13"|"ETC_GMT_NEG_14"|"ETC_GMT_NEG_2"|"ETC_GMT_NEG_3"|"ETC_GMT_NEG_4"|"ETC_GMT_NEG_5"|"ETC_GMT_NEG_6"|"ETC_GMT_NEG_7"|"ETC_GMT_NEG_8"|"ETC_GMT_NEG_9"|"EUROPE_DUBLIN"|"EUROPE_LONDON"|"EUROPE_PARIS"|"EUROPE_STOCKHOLM"|"EUROPE_ZURICH"|"ISRAEL"|"MEXICO_GENERAL"|"MST7MDT"|"PACIFIC_AUCKLAND"|"US_CENTRAL"|"US_EASTERN"|"US_MOUNTAIN"|"US_PACIFIC"}, type:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assetFormsOutput?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, configuration?:array{glueRunConfiguration?:array{accountId?:string, autoImportDataQualityResult?:bool, catalogName?:string, dataAccessRole?:string, region?:string, relationalFilterConfigurations:array<array{databaseName:string, filterExpressions?:array<array{expression:string, type:"INCLUDE"|"EXCLUDE"}>, schemaName?:string}>}, redshiftRunConfiguration?:array{accountId?:string, dataAccessRole?:string, redshiftCredentialConfiguration?:array{secretManagerArn:string}, redshiftStorage:array{redshiftClusterSource?:array{clusterName:string}, redshiftServerlessSource?:array{workgroupName:string}}, region?:string, relationalFilterConfigurations:array<array{databaseName:string, filterExpressions?:array<array{expression:string, type:"INCLUDE"|"EXCLUDE"}>, schemaName?:string}>}, sageMakerRunConfiguration?:array{accountId?:string, region?:string, trackingAssets:array<string, array<string>>}}, connectionId?:string, createdAt?:int|string|\DateTimeInterface, description?:string, domainId:string, enableSetting?:"ENABLED"|"DISABLED", environmentId?:string, errorMessage?:array{errorDetail?:string, errorType:"ACCESS_DENIED_EXCEPTION"|"CONFLICT_EXCEPTION"|"INTERNAL_SERVER_EXCEPTION"|"RESOURCE_NOT_FOUND_EXCEPTION"|"SERVICE_QUOTA_EXCEEDED_EXCEPTION"|"THROTTLING_EXCEPTION"|"VALIDATION_EXCEPTION"}, id:string, lastRunAt?:int|string|\DateTimeInterface, lastRunErrorMessage?:array{errorDetail?:string, errorType:"ACCESS_DENIED_EXCEPTION"|"CONFLICT_EXCEPTION"|"INTERNAL_SERVER_EXCEPTION"|"RESOURCE_NOT_FOUND_EXCEPTION"|"SERVICE_QUOTA_EXCEEDED_EXCEPTION"|"THROTTLING_EXCEPTION"|"VALIDATION_EXCEPTION"}, lastRunStatus?:"REQUESTED"|"RUNNING"|"FAILED"|"PARTIALLY_SUCCEEDED"|"SUCCESS", name:string, projectId:string, publishOnImport?:bool, recommendation?:array{enableBusinessNameGeneration?:bool}, schedule?:array{schedule?:mixed, timezone?:"UTC"|"AFRICA_JOHANNESBURG"|"AMERICA_MONTREAL"|"AMERICA_SAO_PAULO"|"ASIA_BAHRAIN"|"ASIA_BANGKOK"|"ASIA_CALCUTTA"|"ASIA_DUBAI"|"ASIA_HONG_KONG"|"ASIA_JAKARTA"|"ASIA_KUALA_LUMPUR"|"ASIA_SEOUL"|"ASIA_SHANGHAI"|"ASIA_SINGAPORE"|"ASIA_TAIPEI"|"ASIA_TOKYO"|"AUSTRALIA_MELBOURNE"|"AUSTRALIA_SYDNEY"|"CANADA_CENTRAL"|"CET"|"CST6CDT"|"ETC_GMT"|"ETC_GMT0"|"ETC_GMT_ADD_0"|"ETC_GMT_ADD_1"|"ETC_GMT_ADD_10"|"ETC_GMT_ADD_11"|"ETC_GMT_ADD_12"|"ETC_GMT_ADD_2"|"ETC_GMT_ADD_3"|"ETC_GMT_ADD_4"|"ETC_GMT_ADD_5"|"ETC_GMT_ADD_6"|"ETC_GMT_ADD_7"|"ETC_GMT_ADD_8"|"ETC_GMT_ADD_9"|"ETC_GMT_NEG_0"|"ETC_GMT_NEG_1"|"ETC_GMT_NEG_10"|"ETC_GMT_NEG_11"|"ETC_GMT_NEG_12"|"ETC_GMT_NEG_13"|"ETC_GMT_NEG_14"|"ETC_GMT_NEG_2"|"ETC_GMT_NEG_3"|"ETC_GMT_NEG_4"|"ETC_GMT_NEG_5"|"ETC_GMT_NEG_6"|"ETC_GMT_NEG_7"|"ETC_GMT_NEG_8"|"ETC_GMT_NEG_9"|"EUROPE_DUBLIN"|"EUROPE_LONDON"|"EUROPE_PARIS"|"EUROPE_STOCKHOLM"|"EUROPE_ZURICH"|"ISRAEL"|"MEXICO_GENERAL"|"MST7MDT"|"PACIFIC_AUCKLAND"|"US_CENTRAL"|"US_EASTERN"|"US_MOUNTAIN"|"US_PACIFIC"}, status?:"CREATING"|"FAILED_CREATION"|"READY"|"UPDATING"|"FAILED_UPDATE"|"RUNNING"|"DELETING"|"FAILED_DELETION", type?:string, updatedAt?:int|string|\DateTimeInterface}>
     */
    public function createDataSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, description?:string, domainExecutionRole:string, domainVersion?:"V1"|"V2", kmsKeyIdentifier?:string, name:string, serviceRole?:string, singleSignOn?:array{type?:"IAM_IDC"|"DISABLED", userAssignment?:"AUTOMATIC"|"MANUAL"}, tags?:array<string, string>} $args
     * @return \AWS\Result<array{arn?:string, description?:string, domainExecutionRole?:string, domainVersion?:"V1"|"V2", id:string, kmsKeyIdentifier?:string, name?:string, portalUrl?:string, rootDomainUnitId?:string, serviceRole?:string, singleSignOn?:array{type?:"IAM_IDC"|"DISABLED", userAssignment?:"AUTOMATIC"|"MANUAL"}, status?:"CREATING"|"AVAILABLE"|"CREATION_FAILED"|"DELETING"|"DELETED"|"DELETION_FAILED", tags?:array<string, string>}>
     */
    public function createDomain(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, description?:string, domainExecutionRole:string, domainVersion?:"V1"|"V2", kmsKeyIdentifier?:string, name:string, serviceRole?:string, singleSignOn?:array{type?:"IAM_IDC"|"DISABLED", userAssignment?:"AUTOMATIC"|"MANUAL"}, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, description?:string, domainExecutionRole?:string, domainVersion?:"V1"|"V2", id:string, kmsKeyIdentifier?:string, name?:string, portalUrl?:string, rootDomainUnitId?:string, serviceRole?:string, singleSignOn?:array{type?:"IAM_IDC"|"DISABLED", userAssignment?:"AUTOMATIC"|"MANUAL"}, status?:"CREATING"|"AVAILABLE"|"CREATION_FAILED"|"DELETING"|"DELETED"|"DELETION_FAILED", tags?:array<string, string>}>
     */
    public function createDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, description?:string, domainIdentifier:string, name:string, parentDomainUnitIdentifier:string} $args
     * @return \AWS\Result<array{ancestorDomainUnitIds:array<string>, createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, id:string, name:string, owners:array<array{group?:array{groupId?:string}, user?:array{userId?:string}}>, parentDomainUnitId?:string}>
     */
    public function createDomainUnit(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, description?:string, domainIdentifier:string, name:string, parentDomainUnitIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ancestorDomainUnitIds:array<string>, createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, id:string, name:string, owners:array<array{group?:array{groupId?:string}, user?:array{userId?:string}}>, parentDomainUnitId?:string}>
     */
    public function createDomainUnitAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{deploymentOrder?:int, description?:string, domainIdentifier:string, environmentAccountIdentifier?:string, environmentAccountRegion?:string, environmentBlueprintIdentifier?:string, environmentConfigurationId?:string, environmentProfileIdentifier:string, glossaryTerms?:array<string>, name:string, projectIdentifier:string, userParameters?:array<array{name?:string, value?:string}>} $args
     * @return \AWS\Result<array{awsAccountId?:string, awsAccountRegion?:string, createdAt?:int|string|\DateTimeInterface, createdBy:string, deploymentProperties?:array{endTimeoutMinutes?:int, startTimeoutMinutes?:int}, description?:string, domainId:string, environmentActions?:array<array{auth?:"IAM"|"HTTPS", parameters:array<array{key?:string, value?:string}>, type:string}>, environmentBlueprintId?:string, environmentProfileId?:string, glossaryTerms?:array<string>, id?:string, lastDeployment?:array{deploymentId?:string, deploymentStatus?:"IN_PROGRESS"|"SUCCESSFUL"|"FAILED"|"PENDING_DEPLOYMENT", deploymentType?:"CREATE"|"UPDATE"|"DELETE", failureReason?:array{code?:string, message:string}, isDeploymentComplete?:bool, messages?:array<string>}, name:string, projectId:string, provider:string, provisionedResources?:array<array{name?:string, provider?:string, type:string, value:string}>, provisioningProperties?:array{cloudFormation?:array{templateUrl:string}}, status?:"ACTIVE"|"CREATING"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"UPDATE_FAILED"|"DELETE_FAILED"|"VALIDATION_FAILED"|"SUSPENDED"|"DISABLED"|"EXPIRED"|"DELETED"|"INACCESSIBLE", updatedAt?:int|string|\DateTimeInterface, userParameters?:array<array{defaultValue?:string, description?:string, fieldType:string, isEditable?:bool, isOptional?:bool, keyName:string}>}>
     */
    public function createEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{deploymentOrder?:int, description?:string, domainIdentifier:string, environmentAccountIdentifier?:string, environmentAccountRegion?:string, environmentBlueprintIdentifier?:string, environmentConfigurationId?:string, environmentProfileIdentifier:string, glossaryTerms?:array<string>, name:string, projectIdentifier:string, userParameters?:array<array{name?:string, value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{awsAccountId?:string, awsAccountRegion?:string, createdAt?:int|string|\DateTimeInterface, createdBy:string, deploymentProperties?:array{endTimeoutMinutes?:int, startTimeoutMinutes?:int}, description?:string, domainId:string, environmentActions?:array<array{auth?:"IAM"|"HTTPS", parameters:array<array{key?:string, value?:string}>, type:string}>, environmentBlueprintId?:string, environmentProfileId?:string, glossaryTerms?:array<string>, id?:string, lastDeployment?:array{deploymentId?:string, deploymentStatus?:"IN_PROGRESS"|"SUCCESSFUL"|"FAILED"|"PENDING_DEPLOYMENT", deploymentType?:"CREATE"|"UPDATE"|"DELETE", failureReason?:array{code?:string, message:string}, isDeploymentComplete?:bool, messages?:array<string>}, name:string, projectId:string, provider:string, provisionedResources?:array<array{name?:string, provider?:string, type:string, value:string}>, provisioningProperties?:array{cloudFormation?:array{templateUrl:string}}, status?:"ACTIVE"|"CREATING"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"UPDATE_FAILED"|"DELETE_FAILED"|"VALIDATION_FAILED"|"SUSPENDED"|"DISABLED"|"EXPIRED"|"DELETED"|"INACCESSIBLE", updatedAt?:int|string|\DateTimeInterface, userParameters?:array<array{defaultValue?:string, description?:string, fieldType:string, isEditable?:bool, isOptional?:bool, keyName:string}>}>
     */
    public function createEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, domainIdentifier:string, environmentIdentifier:string, name:string, parameters:array{awsConsoleLink?:array{uri?:string}}} $args
     * @return \AWS\Result<array{description?:string, domainId:string, environmentId:string, id:string, name:string, parameters:array{awsConsoleLink?:array{uri?:string}}}>
     */
    public function createEnvironmentAction(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, domainIdentifier:string, environmentIdentifier:string, name:string, parameters:array{awsConsoleLink?:array{uri?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{description?:string, domainId:string, environmentId:string, id:string, name:string, parameters:array{awsConsoleLink?:array{uri?:string}}}>
     */
    public function createEnvironmentActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{awsAccountId?:string, awsAccountRegion?:string, description?:string, domainIdentifier:string, environmentBlueprintIdentifier:string, name:string, projectIdentifier:string, userParameters?:array<array{name?:string, value?:string}>} $args
     * @return \AWS\Result<array{awsAccountId?:string, awsAccountRegion?:string, createdAt?:int|string|\DateTimeInterface, createdBy:string, description?:string, domainId:string, environmentBlueprintId:string, id:string, name:string, projectId?:string, updatedAt?:int|string|\DateTimeInterface, userParameters?:array<array{defaultValue?:string, description?:string, fieldType:string, isEditable?:bool, isOptional?:bool, keyName:string}>}>
     */
    public function createEnvironmentProfile(array $args): \AWS\Result { }

    /**
     * @param array{awsAccountId?:string, awsAccountRegion?:string, description?:string, domainIdentifier:string, environmentBlueprintIdentifier:string, name:string, projectIdentifier:string, userParameters?:array<array{name?:string, value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{awsAccountId?:string, awsAccountRegion?:string, createdAt?:int|string|\DateTimeInterface, createdBy:string, description?:string, domainId:string, environmentBlueprintId:string, id:string, name:string, projectId?:string, updatedAt?:int|string|\DateTimeInterface, userParameters?:array<array{defaultValue?:string, description?:string, fieldType:string, isEditable?:bool, isOptional?:bool, keyName:string}>}>
     */
    public function createEnvironmentProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, domainIdentifier:string, model:array{smithy?:string}, name:string, owningProjectIdentifier:string, status?:"ENABLED"|"DISABLED"} $args
     * @return \AWS\Result<array{description?:string, domainId:string, name:string, originDomainId?:string, originProjectId?:string, owningProjectId?:string, revision:string}>
     */
    public function createFormType(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, domainIdentifier:string, model:array{smithy?:string}, name:string, owningProjectIdentifier:string, status?:"ENABLED"|"DISABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{description?:string, domainId:string, name:string, originDomainId?:string, originProjectId?:string, owningProjectId?:string, revision:string}>
     */
    public function createFormTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, description?:string, domainIdentifier:string, name:string, owningProjectIdentifier:string, status?:"DISABLED"|"ENABLED"} $args
     * @return \AWS\Result<array{description?:string, domainId:string, id:string, name:string, owningProjectId:string, status?:"DISABLED"|"ENABLED"}>
     */
    public function createGlossary(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, description?:string, domainIdentifier:string, name:string, owningProjectIdentifier:string, status?:"DISABLED"|"ENABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{description?:string, domainId:string, id:string, name:string, owningProjectId:string, status?:"DISABLED"|"ENABLED"}>
     */
    public function createGlossaryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, domainIdentifier:string, glossaryIdentifier:string, longDescription?:string, name:string, shortDescription?:string, status?:"ENABLED"|"DISABLED", termRelations?:array{classifies?:array<string>, isA?:array<string>}} $args
     * @return \AWS\Result<array{domainId:string, glossaryId:string, id:string, longDescription?:string, name:string, shortDescription?:string, status:"ENABLED"|"DISABLED", termRelations?:array{classifies?:array<string>, isA?:array<string>}}>
     */
    public function createGlossaryTerm(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, domainIdentifier:string, glossaryIdentifier:string, longDescription?:string, name:string, shortDescription?:string, status?:"ENABLED"|"DISABLED", termRelations?:array{classifies?:array<string>, isA?:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{domainId:string, glossaryId:string, id:string, longDescription?:string, name:string, shortDescription?:string, status:"ENABLED"|"DISABLED", termRelations?:array{classifies?:array<string>, isA?:array<string>}}>
     */
    public function createGlossaryTermAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, domainIdentifier:string, groupIdentifier:string} $args
     * @return \AWS\Result<array{domainId?:string, groupName?:string, id?:string, status?:"ASSIGNED"|"NOT_ASSIGNED"}>
     */
    public function createGroupProfile(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, domainIdentifier:string, groupIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{domainId?:string, groupName?:string, id?:string, status?:"ASSIGNED"|"NOT_ASSIGNED"}>
     */
    public function createGroupProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{action:"PUBLISH"|"UNPUBLISH", clientToken?:string, domainIdentifier:string, entityIdentifier:string, entityRevision?:string, entityType:"ASSET"|"DATA_PRODUCT"} $args
     * @return \AWS\Result<array{listingId:string, listingRevision:string, status:"CREATING"|"ACTIVE"|"INACTIVE"}>
     */
    public function createListingChangeSet(array $args): \AWS\Result { }

    /**
     * @param array{action:"PUBLISH"|"UNPUBLISH", clientToken?:string, domainIdentifier:string, entityIdentifier:string, entityRevision?:string, entityType:"ASSET"|"DATA_PRODUCT"} $args
     * @return \GuzzleHttp\Promise\Promise<array{listingId:string, listingRevision:string, status:"CREATING"|"ACTIVE"|"INACTIVE"}>
     */
    public function createListingChangeSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, domainIdentifier:string, domainUnitId?:string, glossaryTerms?:array<string>, name:string, projectProfileId?:string, userParameters?:array<array{environmentConfigurationName?:string, environmentParameters?:array<array{name?:string, value?:string}>}>} $args
     * @return \AWS\Result<array{createdAt?:int|string|\DateTimeInterface, createdBy:string, description?:string, domainId:string, domainUnitId?:string, environmentDeploymentDetails?:array{environmentFailureReasons?:array<string, array<array{code?:string, message:string}>>, overallDeploymentStatus?:"PENDING_DEPLOYMENT"|"IN_PROGRESS"|"SUCCESSFUL"|"FAILED_VALIDATION"|"FAILED_DEPLOYMENT"}, failureReasons?:array<array{code?:string, message?:string}>, glossaryTerms?:array<string>, id:string, lastUpdatedAt?:int|string|\DateTimeInterface, name:string, projectProfileId?:string, projectStatus?:"ACTIVE"|"DELETING"|"DELETE_FAILED", userParameters?:array<array{environmentConfigurationName?:string, environmentParameters?:array<array{name?:string, value?:string}>}>}>
     */
    public function createProject(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, domainIdentifier:string, domainUnitId?:string, glossaryTerms?:array<string>, name:string, projectProfileId?:string, userParameters?:array<array{environmentConfigurationName?:string, environmentParameters?:array<array{name?:string, value?:string}>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt?:int|string|\DateTimeInterface, createdBy:string, description?:string, domainId:string, domainUnitId?:string, environmentDeploymentDetails?:array{environmentFailureReasons?:array<string, array<array{code?:string, message:string}>>, overallDeploymentStatus?:"PENDING_DEPLOYMENT"|"IN_PROGRESS"|"SUCCESSFUL"|"FAILED_VALIDATION"|"FAILED_DEPLOYMENT"}, failureReasons?:array<array{code?:string, message?:string}>, glossaryTerms?:array<string>, id:string, lastUpdatedAt?:int|string|\DateTimeInterface, name:string, projectProfileId?:string, projectStatus?:"ACTIVE"|"DELETING"|"DELETE_FAILED", userParameters?:array<array{environmentConfigurationName?:string, environmentParameters?:array<array{name?:string, value?:string}>}>}>
     */
    public function createProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{designation:"PROJECT_OWNER"|"PROJECT_CONTRIBUTOR"|"PROJECT_CATALOG_VIEWER"|"PROJECT_CATALOG_CONSUMER"|"PROJECT_CATALOG_STEWARD", domainIdentifier:string, member:array{groupIdentifier?:string, userIdentifier?:string}, projectIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function createProjectMembership(array $args): \AWS\Result { }

    /**
     * @param array{designation:"PROJECT_OWNER"|"PROJECT_CONTRIBUTOR"|"PROJECT_CATALOG_VIEWER"|"PROJECT_CATALOG_CONSUMER"|"PROJECT_CATALOG_STEWARD", domainIdentifier:string, member:array{groupIdentifier?:string, userIdentifier?:string}, projectIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createProjectMembershipAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, domainIdentifier:string, domainUnitIdentifier?:string, environmentConfigurations?:array<array{awsAccount:array{awsAccountId?:string, awsAccountIdPath?:string}, awsRegion:array{regionName?:string, regionNamePath?:string}, configurationParameters?:array{parameterOverrides?:array<array{isEditable?:bool, name?:string, value?:string}>, resolvedParameters?:array<array{isEditable?:bool, name?:string, value?:string}>, ssmPath?:string}, deploymentMode?:"ON_CREATE"|"ON_DEMAND", deploymentOrder?:int, description?:string, environmentBlueprintId:string, id?:string, name:string}>, name:string, status?:"ENABLED"|"DISABLED"} $args
     * @return \AWS\Result<array{createdAt?:int|string|\DateTimeInterface, createdBy:string, description?:string, domainId:string, domainUnitId?:string, environmentConfigurations?:array<array{awsAccount:array{awsAccountId?:string, awsAccountIdPath?:string}, awsRegion:array{regionName?:string, regionNamePath?:string}, configurationParameters?:array{parameterOverrides?:array<array{isEditable?:bool, name?:string, value?:string}>, resolvedParameters?:array<array{isEditable?:bool, name?:string, value?:string}>, ssmPath?:string}, deploymentMode?:"ON_CREATE"|"ON_DEMAND", deploymentOrder?:int, description?:string, environmentBlueprintId:string, id?:string, name:string}>, id:string, lastUpdatedAt?:int|string|\DateTimeInterface, name:string, status?:"ENABLED"|"DISABLED"}>
     */
    public function createProjectProfile(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, domainIdentifier:string, domainUnitIdentifier?:string, environmentConfigurations?:array<array{awsAccount:array{awsAccountId?:string, awsAccountIdPath?:string}, awsRegion:array{regionName?:string, regionNamePath?:string}, configurationParameters?:array{parameterOverrides?:array<array{isEditable?:bool, name?:string, value?:string}>, resolvedParameters?:array<array{isEditable?:bool, name?:string, value?:string}>, ssmPath?:string}, deploymentMode?:"ON_CREATE"|"ON_DEMAND", deploymentOrder?:int, description?:string, environmentBlueprintId:string, id?:string, name:string}>, name:string, status?:"ENABLED"|"DISABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt?:int|string|\DateTimeInterface, createdBy:string, description?:string, domainId:string, domainUnitId?:string, environmentConfigurations?:array<array{awsAccount:array{awsAccountId?:string, awsAccountIdPath?:string}, awsRegion:array{regionName?:string, regionNamePath?:string}, configurationParameters?:array{parameterOverrides?:array<array{isEditable?:bool, name?:string, value?:string}>, resolvedParameters?:array<array{isEditable?:bool, name?:string, value?:string}>, ssmPath?:string}, deploymentMode?:"ON_CREATE"|"ON_DEMAND", deploymentOrder?:int, description?:string, environmentBlueprintId:string, id?:string, name:string}>, id:string, lastUpdatedAt?:int|string|\DateTimeInterface, name:string, status?:"ENABLED"|"DISABLED"}>
     */
    public function createProjectProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{action:"CREATE_SUBSCRIPTION_REQUEST", clientToken?:string, description?:string, detail:array{metadataFormEnforcementDetail?:array{requiredMetadataForms?:array<array{typeIdentifier:string, typeRevision:string}>}}, domainIdentifier:string, name:string, scope:array{assetType?:array{selectionMode:"ALL"|"SPECIFIC", specificAssetTypes?:array<string>}, dataProduct?:bool, project?:array{selectionMode:"ALL"|"SPECIFIC", specificProjects?:array<string>}}, target:array{domainUnitTarget?:array{domainUnitId:string, includeChildDomainUnits?:bool}}} $args
     * @return \AWS\Result<array{action:"CREATE_SUBSCRIPTION_REQUEST", createdAt:int|string|\DateTimeInterface, createdBy:string, description?:string, detail:array{metadataFormEnforcementDetail?:array{requiredMetadataForms?:array<array{typeIdentifier:string, typeRevision:string}>}}, identifier:string, name:string, ruleType:"METADATA_FORM_ENFORCEMENT", scope:array{assetType?:array{selectionMode:"ALL"|"SPECIFIC", specificAssetTypes?:array<string>}, dataProduct?:bool, project?:array{selectionMode:"ALL"|"SPECIFIC", specificProjects?:array<string>}}, target:array{domainUnitTarget?:array{domainUnitId:string, includeChildDomainUnits?:bool}}, targetType?:"DOMAIN_UNIT"}>
     */
    public function createRule(array $args): \AWS\Result { }

    /**
     * @param array{action:"CREATE_SUBSCRIPTION_REQUEST", clientToken?:string, description?:string, detail:array{metadataFormEnforcementDetail?:array{requiredMetadataForms?:array<array{typeIdentifier:string, typeRevision:string}>}}, domainIdentifier:string, name:string, scope:array{assetType?:array{selectionMode:"ALL"|"SPECIFIC", specificAssetTypes?:array<string>}, dataProduct?:bool, project?:array{selectionMode:"ALL"|"SPECIFIC", specificProjects?:array<string>}}, target:array{domainUnitTarget?:array{domainUnitId:string, includeChildDomainUnits?:bool}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{action:"CREATE_SUBSCRIPTION_REQUEST", createdAt:int|string|\DateTimeInterface, createdBy:string, description?:string, detail:array{metadataFormEnforcementDetail?:array{requiredMetadataForms?:array<array{typeIdentifier:string, typeRevision:string}>}}, identifier:string, name:string, ruleType:"METADATA_FORM_ENFORCEMENT", scope:array{assetType?:array{selectionMode:"ALL"|"SPECIFIC", specificAssetTypes?:array<string>}, dataProduct?:bool, project?:array{selectionMode:"ALL"|"SPECIFIC", specificProjects?:array<string>}}, target:array{domainUnitTarget?:array{domainUnitId:string, includeChildDomainUnits?:bool}}, targetType?:"DOMAIN_UNIT"}>
     */
    public function createRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetTargetNames?:array<array{assetId:string, targetName:string}>, clientToken?:string, domainIdentifier:string, environmentIdentifier:string, grantedEntity:array{listing?:array{identifier:string, revision:string}}, subscriptionTargetIdentifier?:string} $args
     * @return \AWS\Result<array{assets?:array<array{assetId:string, assetRevision:string, assetScope?:array{assetId:string, errorMessage?:string, filterIds:array<string>, status:string}, failureCause?:array{message?:string}, failureTimestamp?:int|string|\DateTimeInterface, grantedTimestamp?:int|string|\DateTimeInterface, status:"GRANT_PENDING"|"REVOKE_PENDING"|"GRANT_IN_PROGRESS"|"REVOKE_IN_PROGRESS"|"GRANTED"|"REVOKED"|"GRANT_FAILED"|"REVOKE_FAILED", targetName?:string}>, createdAt:int|string|\DateTimeInterface, createdBy:string, domainId:string, grantedEntity:array{listing?:array{id:string, revision:string}}, id:string, status:"PENDING"|"IN_PROGRESS"|"GRANT_FAILED"|"REVOKE_FAILED"|"GRANT_AND_REVOKE_FAILED"|"COMPLETED"|"INACCESSIBLE", subscriptionId?:string, subscriptionTargetId:string, updatedAt:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function createSubscriptionGrant(array $args): \AWS\Result { }

    /**
     * @param array{assetTargetNames?:array<array{assetId:string, targetName:string}>, clientToken?:string, domainIdentifier:string, environmentIdentifier:string, grantedEntity:array{listing?:array{identifier:string, revision:string}}, subscriptionTargetIdentifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assets?:array<array{assetId:string, assetRevision:string, assetScope?:array{assetId:string, errorMessage?:string, filterIds:array<string>, status:string}, failureCause?:array{message?:string}, failureTimestamp?:int|string|\DateTimeInterface, grantedTimestamp?:int|string|\DateTimeInterface, status:"GRANT_PENDING"|"REVOKE_PENDING"|"GRANT_IN_PROGRESS"|"REVOKE_IN_PROGRESS"|"GRANTED"|"REVOKED"|"GRANT_FAILED"|"REVOKE_FAILED", targetName?:string}>, createdAt:int|string|\DateTimeInterface, createdBy:string, domainId:string, grantedEntity:array{listing?:array{id:string, revision:string}}, id:string, status:"PENDING"|"IN_PROGRESS"|"GRANT_FAILED"|"REVOKE_FAILED"|"GRANT_AND_REVOKE_FAILED"|"COMPLETED"|"INACCESSIBLE", subscriptionId?:string, subscriptionTargetId:string, updatedAt:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function createSubscriptionGrantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, domainIdentifier:string, metadataForms?:array<array{content?:string, formName:string, typeIdentifier?:string, typeRevision?:string}>, requestReason:string, subscribedListings:array<array{identifier:string}>, subscribedPrincipals:array<array{project?:array{identifier?:string}}>} $args
     * @return \AWS\Result<array{createdAt:int|string|\DateTimeInterface, createdBy:string, decisionComment?:string, domainId:string, existingSubscriptionId?:string, id:string, metadataForms?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, requestReason:string, reviewerId?:string, status:"PENDING"|"ACCEPTED"|"REJECTED", subscribedListings:array<array{description:string, id:string, item:array{assetListing?:array{assetScope?:array{assetId:string, errorMessage?:string, filterIds:array<string>, status:string}, entityId?:string, entityRevision?:string, entityType?:string, forms?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>}, productListing?:array{assetListings?:array<array{entityId?:string, entityRevision?:string, entityType?:string}>, description?:string, entityId?:string, entityRevision?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>, name?:string}}, name:string, ownerProjectId:string, ownerProjectName?:string, revision?:string}>, subscribedPrincipals:array<array{project?:array{id?:string, name?:string}}>, updatedAt:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function createSubscriptionRequest(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, domainIdentifier:string, metadataForms?:array<array{content?:string, formName:string, typeIdentifier?:string, typeRevision?:string}>, requestReason:string, subscribedListings:array<array{identifier:string}>, subscribedPrincipals:array<array{project?:array{identifier?:string}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt:int|string|\DateTimeInterface, createdBy:string, decisionComment?:string, domainId:string, existingSubscriptionId?:string, id:string, metadataForms?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, requestReason:string, reviewerId?:string, status:"PENDING"|"ACCEPTED"|"REJECTED", subscribedListings:array<array{description:string, id:string, item:array{assetListing?:array{assetScope?:array{assetId:string, errorMessage?:string, filterIds:array<string>, status:string}, entityId?:string, entityRevision?:string, entityType?:string, forms?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>}, productListing?:array{assetListings?:array<array{entityId?:string, entityRevision?:string, entityType?:string}>, description?:string, entityId?:string, entityRevision?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>, name?:string}}, name:string, ownerProjectId:string, ownerProjectName?:string, revision?:string}>, subscribedPrincipals:array<array{project?:array{id?:string, name?:string}}>, updatedAt:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function createSubscriptionRequestAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicableAssetTypes:array<string>, authorizedPrincipals:array<string>, clientToken?:string, domainIdentifier:string, environmentIdentifier:string, manageAccessRole:string, name:string, provider?:string, subscriptionTargetConfig:array<array{content:string, formName:string}>, type:string} $args
     * @return \AWS\Result<array{applicableAssetTypes:array<string>, authorizedPrincipals:array<string>, createdAt:int|string|\DateTimeInterface, createdBy:string, domainId:string, environmentId:string, id:string, manageAccessRole?:string, name:string, projectId:string, provider:string, subscriptionTargetConfig:array<array{content:string, formName:string}>, type:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function createSubscriptionTarget(array $args): \AWS\Result { }

    /**
     * @param array{applicableAssetTypes:array<string>, authorizedPrincipals:array<string>, clientToken?:string, domainIdentifier:string, environmentIdentifier:string, manageAccessRole:string, name:string, provider?:string, subscriptionTargetConfig:array<array{content:string, formName:string}>, type:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicableAssetTypes:array<string>, authorizedPrincipals:array<string>, createdAt:int|string|\DateTimeInterface, createdBy:string, domainId:string, environmentId:string, id:string, manageAccessRole?:string, name:string, projectId:string, provider:string, subscriptionTargetConfig:array<array{content:string, formName:string}>, type:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function createSubscriptionTargetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, domainIdentifier:string, userIdentifier:string, userType?:"IAM_USER"|"IAM_ROLE"|"SSO_USER"} $args
     * @return \AWS\Result<array{details?:array{iam?:array{arn?:string}, sso?:array{firstName?:string, lastName?:string, username?:string}}, domainId?:string, id?:string, status?:"ASSIGNED"|"NOT_ASSIGNED"|"ACTIVATED"|"DEACTIVATED", type?:"IAM"|"SSO"}>
     */
    public function createUserProfile(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, domainIdentifier:string, userIdentifier:string, userType?:"IAM_USER"|"IAM_ROLE"|"SSO_USER"} $args
     * @return \GuzzleHttp\Promise\Promise<array{details?:array{iam?:array{arn?:string}, sso?:array{firstName?:string, lastName?:string, username?:string}}, domainId?:string, id?:string, status?:"ASSIGNED"|"NOT_ASSIGNED"|"ACTIVATED"|"DEACTIVATED", type?:"IAM"|"SSO"}>
     */
    public function createUserProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAsset(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAssetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetIdentifier:string, domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAssetFilter(array $args): \AWS\Result { }

    /**
     * @param array{assetIdentifier:string, domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAssetFilterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAssetType(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAssetTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<array{status?:string}>
     */
    public function deleteConnection(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{status?:string}>
     */
    public function deleteConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteDataProduct(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteDataProductAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, domainIdentifier:string, identifier:string, retainPermissionsOnRevokeFailure?:bool} $args
     * @return \AWS\Result<array{assetFormsOutput?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, configuration?:array{glueRunConfiguration?:array{accountId?:string, autoImportDataQualityResult?:bool, catalogName?:string, dataAccessRole?:string, region?:string, relationalFilterConfigurations:array<array{databaseName:string, filterExpressions?:array<array{expression:string, type:"INCLUDE"|"EXCLUDE"}>, schemaName?:string}>}, redshiftRunConfiguration?:array{accountId?:string, dataAccessRole?:string, redshiftCredentialConfiguration?:array{secretManagerArn:string}, redshiftStorage:array{redshiftClusterSource?:array{clusterName:string}, redshiftServerlessSource?:array{workgroupName:string}}, region?:string, relationalFilterConfigurations:array<array{databaseName:string, filterExpressions?:array<array{expression:string, type:"INCLUDE"|"EXCLUDE"}>, schemaName?:string}>}, sageMakerRunConfiguration?:array{accountId?:string, region?:string, trackingAssets:array<string, array<string>>}}, connectionId?:string, createdAt?:int|string|\DateTimeInterface, description?:string, domainId:string, enableSetting?:"ENABLED"|"DISABLED", environmentId?:string, errorMessage?:array{errorDetail?:string, errorType:"ACCESS_DENIED_EXCEPTION"|"CONFLICT_EXCEPTION"|"INTERNAL_SERVER_EXCEPTION"|"RESOURCE_NOT_FOUND_EXCEPTION"|"SERVICE_QUOTA_EXCEEDED_EXCEPTION"|"THROTTLING_EXCEPTION"|"VALIDATION_EXCEPTION"}, id:string, lastRunAt?:int|string|\DateTimeInterface, lastRunErrorMessage?:array{errorDetail?:string, errorType:"ACCESS_DENIED_EXCEPTION"|"CONFLICT_EXCEPTION"|"INTERNAL_SERVER_EXCEPTION"|"RESOURCE_NOT_FOUND_EXCEPTION"|"SERVICE_QUOTA_EXCEEDED_EXCEPTION"|"THROTTLING_EXCEPTION"|"VALIDATION_EXCEPTION"}, lastRunStatus?:"REQUESTED"|"RUNNING"|"FAILED"|"PARTIALLY_SUCCEEDED"|"SUCCESS", name:string, projectId:string, publishOnImport?:bool, retainPermissionsOnRevokeFailure?:bool, schedule?:array{schedule?:mixed, timezone?:"UTC"|"AFRICA_JOHANNESBURG"|"AMERICA_MONTREAL"|"AMERICA_SAO_PAULO"|"ASIA_BAHRAIN"|"ASIA_BANGKOK"|"ASIA_CALCUTTA"|"ASIA_DUBAI"|"ASIA_HONG_KONG"|"ASIA_JAKARTA"|"ASIA_KUALA_LUMPUR"|"ASIA_SEOUL"|"ASIA_SHANGHAI"|"ASIA_SINGAPORE"|"ASIA_TAIPEI"|"ASIA_TOKYO"|"AUSTRALIA_MELBOURNE"|"AUSTRALIA_SYDNEY"|"CANADA_CENTRAL"|"CET"|"CST6CDT"|"ETC_GMT"|"ETC_GMT0"|"ETC_GMT_ADD_0"|"ETC_GMT_ADD_1"|"ETC_GMT_ADD_10"|"ETC_GMT_ADD_11"|"ETC_GMT_ADD_12"|"ETC_GMT_ADD_2"|"ETC_GMT_ADD_3"|"ETC_GMT_ADD_4"|"ETC_GMT_ADD_5"|"ETC_GMT_ADD_6"|"ETC_GMT_ADD_7"|"ETC_GMT_ADD_8"|"ETC_GMT_ADD_9"|"ETC_GMT_NEG_0"|"ETC_GMT_NEG_1"|"ETC_GMT_NEG_10"|"ETC_GMT_NEG_11"|"ETC_GMT_NEG_12"|"ETC_GMT_NEG_13"|"ETC_GMT_NEG_14"|"ETC_GMT_NEG_2"|"ETC_GMT_NEG_3"|"ETC_GMT_NEG_4"|"ETC_GMT_NEG_5"|"ETC_GMT_NEG_6"|"ETC_GMT_NEG_7"|"ETC_GMT_NEG_8"|"ETC_GMT_NEG_9"|"EUROPE_DUBLIN"|"EUROPE_LONDON"|"EUROPE_PARIS"|"EUROPE_STOCKHOLM"|"EUROPE_ZURICH"|"ISRAEL"|"MEXICO_GENERAL"|"MST7MDT"|"PACIFIC_AUCKLAND"|"US_CENTRAL"|"US_EASTERN"|"US_MOUNTAIN"|"US_PACIFIC"}, selfGrantStatus?:array{glueSelfGrantStatus?:array{selfGrantStatusDetails:array<array{databaseName:string, failureCause?:string, schemaName?:string, status:"GRANT_PENDING"|"REVOKE_PENDING"|"GRANT_IN_PROGRESS"|"REVOKE_IN_PROGRESS"|"GRANTED"|"GRANT_FAILED"|"REVOKE_FAILED"}>}, redshiftSelfGrantStatus?:array{selfGrantStatusDetails:array<array{databaseName:string, failureCause?:string, schemaName?:string, status:"GRANT_PENDING"|"REVOKE_PENDING"|"GRANT_IN_PROGRESS"|"REVOKE_IN_PROGRESS"|"GRANTED"|"GRANT_FAILED"|"REVOKE_FAILED"}>}}, status?:"CREATING"|"FAILED_CREATION"|"READY"|"UPDATING"|"FAILED_UPDATE"|"RUNNING"|"DELETING"|"FAILED_DELETION", type?:string, updatedAt?:int|string|\DateTimeInterface}>
     */
    public function deleteDataSource(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, domainIdentifier:string, identifier:string, retainPermissionsOnRevokeFailure?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{assetFormsOutput?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, configuration?:array{glueRunConfiguration?:array{accountId?:string, autoImportDataQualityResult?:bool, catalogName?:string, dataAccessRole?:string, region?:string, relationalFilterConfigurations:array<array{databaseName:string, filterExpressions?:array<array{expression:string, type:"INCLUDE"|"EXCLUDE"}>, schemaName?:string}>}, redshiftRunConfiguration?:array{accountId?:string, dataAccessRole?:string, redshiftCredentialConfiguration?:array{secretManagerArn:string}, redshiftStorage:array{redshiftClusterSource?:array{clusterName:string}, redshiftServerlessSource?:array{workgroupName:string}}, region?:string, relationalFilterConfigurations:array<array{databaseName:string, filterExpressions?:array<array{expression:string, type:"INCLUDE"|"EXCLUDE"}>, schemaName?:string}>}, sageMakerRunConfiguration?:array{accountId?:string, region?:string, trackingAssets:array<string, array<string>>}}, connectionId?:string, createdAt?:int|string|\DateTimeInterface, description?:string, domainId:string, enableSetting?:"ENABLED"|"DISABLED", environmentId?:string, errorMessage?:array{errorDetail?:string, errorType:"ACCESS_DENIED_EXCEPTION"|"CONFLICT_EXCEPTION"|"INTERNAL_SERVER_EXCEPTION"|"RESOURCE_NOT_FOUND_EXCEPTION"|"SERVICE_QUOTA_EXCEEDED_EXCEPTION"|"THROTTLING_EXCEPTION"|"VALIDATION_EXCEPTION"}, id:string, lastRunAt?:int|string|\DateTimeInterface, lastRunErrorMessage?:array{errorDetail?:string, errorType:"ACCESS_DENIED_EXCEPTION"|"CONFLICT_EXCEPTION"|"INTERNAL_SERVER_EXCEPTION"|"RESOURCE_NOT_FOUND_EXCEPTION"|"SERVICE_QUOTA_EXCEEDED_EXCEPTION"|"THROTTLING_EXCEPTION"|"VALIDATION_EXCEPTION"}, lastRunStatus?:"REQUESTED"|"RUNNING"|"FAILED"|"PARTIALLY_SUCCEEDED"|"SUCCESS", name:string, projectId:string, publishOnImport?:bool, retainPermissionsOnRevokeFailure?:bool, schedule?:array{schedule?:mixed, timezone?:"UTC"|"AFRICA_JOHANNESBURG"|"AMERICA_MONTREAL"|"AMERICA_SAO_PAULO"|"ASIA_BAHRAIN"|"ASIA_BANGKOK"|"ASIA_CALCUTTA"|"ASIA_DUBAI"|"ASIA_HONG_KONG"|"ASIA_JAKARTA"|"ASIA_KUALA_LUMPUR"|"ASIA_SEOUL"|"ASIA_SHANGHAI"|"ASIA_SINGAPORE"|"ASIA_TAIPEI"|"ASIA_TOKYO"|"AUSTRALIA_MELBOURNE"|"AUSTRALIA_SYDNEY"|"CANADA_CENTRAL"|"CET"|"CST6CDT"|"ETC_GMT"|"ETC_GMT0"|"ETC_GMT_ADD_0"|"ETC_GMT_ADD_1"|"ETC_GMT_ADD_10"|"ETC_GMT_ADD_11"|"ETC_GMT_ADD_12"|"ETC_GMT_ADD_2"|"ETC_GMT_ADD_3"|"ETC_GMT_ADD_4"|"ETC_GMT_ADD_5"|"ETC_GMT_ADD_6"|"ETC_GMT_ADD_7"|"ETC_GMT_ADD_8"|"ETC_GMT_ADD_9"|"ETC_GMT_NEG_0"|"ETC_GMT_NEG_1"|"ETC_GMT_NEG_10"|"ETC_GMT_NEG_11"|"ETC_GMT_NEG_12"|"ETC_GMT_NEG_13"|"ETC_GMT_NEG_14"|"ETC_GMT_NEG_2"|"ETC_GMT_NEG_3"|"ETC_GMT_NEG_4"|"ETC_GMT_NEG_5"|"ETC_GMT_NEG_6"|"ETC_GMT_NEG_7"|"ETC_GMT_NEG_8"|"ETC_GMT_NEG_9"|"EUROPE_DUBLIN"|"EUROPE_LONDON"|"EUROPE_PARIS"|"EUROPE_STOCKHOLM"|"EUROPE_ZURICH"|"ISRAEL"|"MEXICO_GENERAL"|"MST7MDT"|"PACIFIC_AUCKLAND"|"US_CENTRAL"|"US_EASTERN"|"US_MOUNTAIN"|"US_PACIFIC"}, selfGrantStatus?:array{glueSelfGrantStatus?:array{selfGrantStatusDetails:array<array{databaseName:string, failureCause?:string, schemaName?:string, status:"GRANT_PENDING"|"REVOKE_PENDING"|"GRANT_IN_PROGRESS"|"REVOKE_IN_PROGRESS"|"GRANTED"|"GRANT_FAILED"|"REVOKE_FAILED"}>}, redshiftSelfGrantStatus?:array{selfGrantStatusDetails:array<array{databaseName:string, failureCause?:string, schemaName?:string, status:"GRANT_PENDING"|"REVOKE_PENDING"|"GRANT_IN_PROGRESS"|"REVOKE_IN_PROGRESS"|"GRANTED"|"GRANT_FAILED"|"REVOKE_FAILED"}>}}, status?:"CREATING"|"FAILED_CREATION"|"READY"|"UPDATING"|"FAILED_UPDATE"|"RUNNING"|"DELETING"|"FAILED_DELETION", type?:string, updatedAt?:int|string|\DateTimeInterface}>
     */
    public function deleteDataSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, identifier:string, skipDeletionCheck?:bool} $args
     * @return \AWS\Result<array{status:"CREATING"|"AVAILABLE"|"CREATION_FAILED"|"DELETING"|"DELETED"|"DELETION_FAILED"}>
     */
    public function deleteDomain(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, identifier:string, skipDeletionCheck?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{status:"CREATING"|"AVAILABLE"|"CREATION_FAILED"|"DELETING"|"DELETED"|"DELETION_FAILED"}>
     */
    public function deleteDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteDomainUnit(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteDomainUnitAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, environmentIdentifier:string, identifier:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteEnvironmentAction(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, environmentIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteEnvironmentActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, environmentBlueprintIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteEnvironmentBlueprintConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, environmentBlueprintIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteEnvironmentBlueprintConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteEnvironmentProfile(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteEnvironmentProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, formTypeIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteFormType(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, formTypeIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteFormTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteGlossary(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteGlossaryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteGlossaryTerm(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteGlossaryTermAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteListing(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteListingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string, skipDeletionCheck?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteProject(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string, skipDeletionCheck?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, member:array{groupIdentifier?:string, userIdentifier?:string}, projectIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteProjectMembership(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, member:array{groupIdentifier?:string, userIdentifier?:string}, projectIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteProjectMembershipAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteProjectProfile(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteProjectProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteRule(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<array{assets?:array<array{assetId:string, assetRevision:string, assetScope?:array{assetId:string, errorMessage?:string, filterIds:array<string>, status:string}, failureCause?:array{message?:string}, failureTimestamp?:int|string|\DateTimeInterface, grantedTimestamp?:int|string|\DateTimeInterface, status:"GRANT_PENDING"|"REVOKE_PENDING"|"GRANT_IN_PROGRESS"|"REVOKE_IN_PROGRESS"|"GRANTED"|"REVOKED"|"GRANT_FAILED"|"REVOKE_FAILED", targetName?:string}>, createdAt:int|string|\DateTimeInterface, createdBy:string, domainId:string, grantedEntity:array{listing?:array{id:string, revision:string}}, id:string, status:"PENDING"|"IN_PROGRESS"|"GRANT_FAILED"|"REVOKE_FAILED"|"GRANT_AND_REVOKE_FAILED"|"COMPLETED"|"INACCESSIBLE", subscriptionId?:string, subscriptionTargetId:string, updatedAt:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function deleteSubscriptionGrant(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assets?:array<array{assetId:string, assetRevision:string, assetScope?:array{assetId:string, errorMessage?:string, filterIds:array<string>, status:string}, failureCause?:array{message?:string}, failureTimestamp?:int|string|\DateTimeInterface, grantedTimestamp?:int|string|\DateTimeInterface, status:"GRANT_PENDING"|"REVOKE_PENDING"|"GRANT_IN_PROGRESS"|"REVOKE_IN_PROGRESS"|"GRANTED"|"REVOKED"|"GRANT_FAILED"|"REVOKE_FAILED", targetName?:string}>, createdAt:int|string|\DateTimeInterface, createdBy:string, domainId:string, grantedEntity:array{listing?:array{id:string, revision:string}}, id:string, status:"PENDING"|"IN_PROGRESS"|"GRANT_FAILED"|"REVOKE_FAILED"|"GRANT_AND_REVOKE_FAILED"|"COMPLETED"|"INACCESSIBLE", subscriptionId?:string, subscriptionTargetId:string, updatedAt:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function deleteSubscriptionGrantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteSubscriptionRequest(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteSubscriptionRequestAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, environmentIdentifier:string, identifier:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteSubscriptionTarget(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, environmentIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteSubscriptionTargetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, domainIdentifier:string, entityIdentifier:string, entityType:"ASSET"|"LISTING", formName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteTimeSeriesDataPoints(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, domainIdentifier:string, entityIdentifier:string, entityType:"ASSET"|"LISTING", formName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteTimeSeriesDataPointsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, environmentIdentifier:string, environmentRoleArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateEnvironmentRole(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, environmentIdentifier:string, environmentRoleArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateEnvironmentRoleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string, revision?:string} $args
     * @return \AWS\Result<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, externalIdentifier?:string, firstRevisionCreatedAt?:int|string|\DateTimeInterface, firstRevisionCreatedBy?:string, formsOutput:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, glossaryTerms?:array<string>, id:string, latestTimeSeriesDataPointFormsOutput?:array<array{contentSummary?:string, formName:string, id?:string, timestamp:int|string|\DateTimeInterface, typeIdentifier:string, typeRevision?:string}>, listing?:array{listingId:string, listingStatus:"CREATING"|"ACTIVE"|"INACTIVE"}, name:string, owningProjectId:string, readOnlyFormsOutput?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, revision:string, typeIdentifier:string, typeRevision:string}>
     */
    public function getAsset(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string, revision?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, externalIdentifier?:string, firstRevisionCreatedAt?:int|string|\DateTimeInterface, firstRevisionCreatedBy?:string, formsOutput:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, glossaryTerms?:array<string>, id:string, latestTimeSeriesDataPointFormsOutput?:array<array{contentSummary?:string, formName:string, id?:string, timestamp:int|string|\DateTimeInterface, typeIdentifier:string, typeRevision?:string}>, listing?:array{listingId:string, listingStatus:"CREATING"|"ACTIVE"|"INACTIVE"}, name:string, owningProjectId:string, readOnlyFormsOutput?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, revision:string, typeIdentifier:string, typeRevision:string}>
     */
    public function getAssetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetIdentifier:string, domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<array{assetId:string, configuration:array{columnConfiguration?:array{includedColumnNames?:array<string>}, rowConfiguration?:array{rowFilter:array{and?:array<array{and?:mixed, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:array<array{and?:mixed, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:mixed}>}>, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:array<array{and?:array<array{and?:mixed, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:mixed}>, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:mixed}>}, sensitive?:bool}}, createdAt?:int|string|\DateTimeInterface, description?:string, domainId:string, effectiveColumnNames?:array<string>, effectiveRowFilter?:string, errorMessage?:string, id:string, name:string, status?:"VALID"|"INVALID"}>
     */
    public function getAssetFilter(array $args): \AWS\Result { }

    /**
     * @param array{assetIdentifier:string, domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assetId:string, configuration:array{columnConfiguration?:array{includedColumnNames?:array<string>}, rowConfiguration?:array{rowFilter:array{and?:array<array{and?:mixed, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:array<array{and?:mixed, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:mixed}>}>, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:array<array{and?:array<array{and?:mixed, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:mixed}>, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:mixed}>}, sensitive?:bool}}, createdAt?:int|string|\DateTimeInterface, description?:string, domainId:string, effectiveColumnNames?:array<string>, effectiveRowFilter?:string, errorMessage?:string, id:string, name:string, status?:"VALID"|"INVALID"}>
     */
    public function getAssetFilterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string, revision?:string} $args
     * @return \AWS\Result<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, formsOutput:array<string, array{required?:bool, typeName:string, typeRevision:string}>, name:string, originDomainId?:string, originProjectId?:string, owningProjectId:string, revision:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function getAssetType(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string, revision?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, formsOutput:array<string, array{required?:bool, typeName:string, typeRevision:string}>, name:string, originDomainId?:string, originProjectId?:string, owningProjectId:string, revision:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function getAssetTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string, withSecret?:bool} $args
     * @return \AWS\Result<array{connectionCredentials?:array{accessKeyId?:string, expiration?:int|string|\DateTimeInterface, secretAccessKey?:string, sessionToken?:string}, connectionId:string, description?:string, domainId:string, domainUnitId:string, environmentId?:string, environmentUserRole?:string, name:string, physicalEndpoints:array<array{awsLocation?:array{accessRole?:string, awsAccountId?:string, awsRegion?:string, iamConnectionId?:string}, glueConnection?:array{athenaProperties?:array<string, string>, authenticationConfiguration?:array{authenticationType?:"BASIC"|"OAUTH2"|"CUSTOM", oAuth2Properties?:array{authorizationCodeProperties?:array{authorizationCode?:string, redirectUri?:string}, oAuth2ClientApplication?:array{aWSManagedClientApplicationReference?:string, userManagedClientApplicationClientId?:string}, oAuth2Credentials?:array{accessToken?:string, jwtToken?:string, refreshToken?:string, userManagedClientApplicationClientSecret?:string}, oAuth2GrantType?:"AUTHORIZATION_CODE"|"CLIENT_CREDENTIALS"|"JWT_BEARER", tokenUrl?:string, tokenUrlParametersMap?:array<string, string>}, secretArn?:string}, compatibleComputeEnvironments?:array<"SPARK"|"ATHENA"|"PYTHON">, connectionProperties?:array<string, string>, connectionSchemaVersion?:int, connectionType?:"ATHENA"|"BIGQUERY"|"DATABRICKS"|"DOCUMENTDB"|"DYNAMODB"|"HYPERPOD"|"IAM"|"MYSQL"|"OPENSEARCH"|"ORACLE"|"POSTGRESQL"|"REDSHIFT"|"SAPHANA"|"SNOWFLAKE"|"SPARK"|"SQLSERVER"|"TERADATA"|"VERTICA"|"WORKFLOWS_MWAA", creationTime?:int|string|\DateTimeInterface, description?:string, lastConnectionValidationTime?:int|string|\DateTimeInterface, lastUpdatedBy?:string, lastUpdatedTime?:int|string|\DateTimeInterface, matchCriteria?:array<string>, name?:string, physicalConnectionRequirements?:array{availabilityZone?:string, securityGroupIdList?:array<string>, subnetId?:string, subnetIdList?:array<string>}, pythonProperties?:array<string, string>, sparkProperties?:array<string, string>, status?:"CREATING"|"CREATE_FAILED"|"DELETING"|"DELETE_FAILED"|"READY"|"UPDATING"|"UPDATE_FAILED"|"DELETED", statusReason?:string}, glueConnectionName?:string, host?:string, port?:int, protocol?:"ATHENA"|"GLUE_INTERACTIVE_SESSION"|"HTTPS"|"JDBC"|"LIVY"|"ODBC"|"PRISM", stage?:string}>, projectId?:string, props?:array{athenaProperties?:array{workgroupName?:string}, glueProperties?:array{errorMessage?:string, status?:"CREATING"|"CREATE_FAILED"|"DELETING"|"DELETE_FAILED"|"READY"|"UPDATING"|"UPDATE_FAILED"|"DELETED"}, hyperPodProperties?:array{clusterArn?:string, clusterName:string, orchestrator?:"EKS"|"SLURM"}, iamProperties?:array{environmentId?:string, glueLineageSyncEnabled?:bool}, redshiftProperties?:array{credentials?:array{secretArn?:string, usernamePassword?:array{password:string, username:string}}, databaseName?:string, isProvisionedSecret?:bool, jdbcIamUrl?:string, jdbcUrl?:string, lineageSync?:array{enabled?:bool, lineageJobId?:string, schedule?:array{schedule?:mixed}}, redshiftTempDir?:string, status?:"CREATING"|"CREATE_FAILED"|"DELETING"|"DELETE_FAILED"|"READY"|"UPDATING"|"UPDATE_FAILED"|"DELETED", storage?:array{clusterName?:string, workgroupName?:string}}, sparkEmrProperties?:array{computeArn?:string, credentials?:array{password:string, username:string}, credentialsExpiration?:int|string|\DateTimeInterface, governanceType?:"AWS_MANAGED"|"USER_MANAGED", instanceProfileArn?:string, javaVirtualEnv?:string, livyEndpoint?:string, logUri?:string, pythonVirtualEnv?:string, runtimeRole?:string, trustedCertificatesS3Uri?:string}, sparkGlueProperties?:array{additionalArgs?:array{connection?:string}, glueConnectionName?:string, glueVersion?:string, idleTimeout?:int, javaVirtualEnv?:string, numberOfWorkers?:int, pythonVirtualEnv?:string, workerType?:string}}, type:"ATHENA"|"BIGQUERY"|"DATABRICKS"|"DOCUMENTDB"|"DYNAMODB"|"HYPERPOD"|"IAM"|"MYSQL"|"OPENSEARCH"|"ORACLE"|"POSTGRESQL"|"REDSHIFT"|"SAPHANA"|"SNOWFLAKE"|"SPARK"|"SQLSERVER"|"TERADATA"|"VERTICA"|"WORKFLOWS_MWAA"}>
     */
    public function getConnection(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string, withSecret?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{connectionCredentials?:array{accessKeyId?:string, expiration?:int|string|\DateTimeInterface, secretAccessKey?:string, sessionToken?:string}, connectionId:string, description?:string, domainId:string, domainUnitId:string, environmentId?:string, environmentUserRole?:string, name:string, physicalEndpoints:array<array{awsLocation?:array{accessRole?:string, awsAccountId?:string, awsRegion?:string, iamConnectionId?:string}, glueConnection?:array{athenaProperties?:array<string, string>, authenticationConfiguration?:array{authenticationType?:"BASIC"|"OAUTH2"|"CUSTOM", oAuth2Properties?:array{authorizationCodeProperties?:array{authorizationCode?:string, redirectUri?:string}, oAuth2ClientApplication?:array{aWSManagedClientApplicationReference?:string, userManagedClientApplicationClientId?:string}, oAuth2Credentials?:array{accessToken?:string, jwtToken?:string, refreshToken?:string, userManagedClientApplicationClientSecret?:string}, oAuth2GrantType?:"AUTHORIZATION_CODE"|"CLIENT_CREDENTIALS"|"JWT_BEARER", tokenUrl?:string, tokenUrlParametersMap?:array<string, string>}, secretArn?:string}, compatibleComputeEnvironments?:array<"SPARK"|"ATHENA"|"PYTHON">, connectionProperties?:array<string, string>, connectionSchemaVersion?:int, connectionType?:"ATHENA"|"BIGQUERY"|"DATABRICKS"|"DOCUMENTDB"|"DYNAMODB"|"HYPERPOD"|"IAM"|"MYSQL"|"OPENSEARCH"|"ORACLE"|"POSTGRESQL"|"REDSHIFT"|"SAPHANA"|"SNOWFLAKE"|"SPARK"|"SQLSERVER"|"TERADATA"|"VERTICA"|"WORKFLOWS_MWAA", creationTime?:int|string|\DateTimeInterface, description?:string, lastConnectionValidationTime?:int|string|\DateTimeInterface, lastUpdatedBy?:string, lastUpdatedTime?:int|string|\DateTimeInterface, matchCriteria?:array<string>, name?:string, physicalConnectionRequirements?:array{availabilityZone?:string, securityGroupIdList?:array<string>, subnetId?:string, subnetIdList?:array<string>}, pythonProperties?:array<string, string>, sparkProperties?:array<string, string>, status?:"CREATING"|"CREATE_FAILED"|"DELETING"|"DELETE_FAILED"|"READY"|"UPDATING"|"UPDATE_FAILED"|"DELETED", statusReason?:string}, glueConnectionName?:string, host?:string, port?:int, protocol?:"ATHENA"|"GLUE_INTERACTIVE_SESSION"|"HTTPS"|"JDBC"|"LIVY"|"ODBC"|"PRISM", stage?:string}>, projectId?:string, props?:array{athenaProperties?:array{workgroupName?:string}, glueProperties?:array{errorMessage?:string, status?:"CREATING"|"CREATE_FAILED"|"DELETING"|"DELETE_FAILED"|"READY"|"UPDATING"|"UPDATE_FAILED"|"DELETED"}, hyperPodProperties?:array{clusterArn?:string, clusterName:string, orchestrator?:"EKS"|"SLURM"}, iamProperties?:array{environmentId?:string, glueLineageSyncEnabled?:bool}, redshiftProperties?:array{credentials?:array{secretArn?:string, usernamePassword?:array{password:string, username:string}}, databaseName?:string, isProvisionedSecret?:bool, jdbcIamUrl?:string, jdbcUrl?:string, lineageSync?:array{enabled?:bool, lineageJobId?:string, schedule?:array{schedule?:mixed}}, redshiftTempDir?:string, status?:"CREATING"|"CREATE_FAILED"|"DELETING"|"DELETE_FAILED"|"READY"|"UPDATING"|"UPDATE_FAILED"|"DELETED", storage?:array{clusterName?:string, workgroupName?:string}}, sparkEmrProperties?:array{computeArn?:string, credentials?:array{password:string, username:string}, credentialsExpiration?:int|string|\DateTimeInterface, governanceType?:"AWS_MANAGED"|"USER_MANAGED", instanceProfileArn?:string, javaVirtualEnv?:string, livyEndpoint?:string, logUri?:string, pythonVirtualEnv?:string, runtimeRole?:string, trustedCertificatesS3Uri?:string}, sparkGlueProperties?:array{additionalArgs?:array{connection?:string}, glueConnectionName?:string, glueVersion?:string, idleTimeout?:int, javaVirtualEnv?:string, numberOfWorkers?:int, pythonVirtualEnv?:string, workerType?:string}}, type:"ATHENA"|"BIGQUERY"|"DATABRICKS"|"DOCUMENTDB"|"DYNAMODB"|"HYPERPOD"|"IAM"|"MYSQL"|"OPENSEARCH"|"ORACLE"|"POSTGRESQL"|"REDSHIFT"|"SAPHANA"|"SNOWFLAKE"|"SPARK"|"SQLSERVER"|"TERADATA"|"VERTICA"|"WORKFLOWS_MWAA"}>
     */
    public function getConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string, revision?:string} $args
     * @return \AWS\Result<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, firstRevisionCreatedAt?:int|string|\DateTimeInterface, firstRevisionCreatedBy?:string, formsOutput?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, glossaryTerms?:array<string>, id:string, items?:array<array{glossaryTerms?:array<string>, identifier:string, itemType:"ASSET", revision?:string}>, name:string, owningProjectId:string, revision:string, status:"CREATED"|"CREATING"|"CREATE_FAILED"}>
     */
    public function getDataProduct(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string, revision?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, firstRevisionCreatedAt?:int|string|\DateTimeInterface, firstRevisionCreatedBy?:string, formsOutput?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, glossaryTerms?:array<string>, id:string, items?:array<array{glossaryTerms?:array<string>, identifier:string, itemType:"ASSET", revision?:string}>, name:string, owningProjectId:string, revision:string, status:"CREATED"|"CREATING"|"CREATE_FAILED"}>
     */
    public function getDataProductAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<array{assetFormsOutput?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, configuration?:array{glueRunConfiguration?:array{accountId?:string, autoImportDataQualityResult?:bool, catalogName?:string, dataAccessRole?:string, region?:string, relationalFilterConfigurations:array<array{databaseName:string, filterExpressions?:array<array{expression:string, type:"INCLUDE"|"EXCLUDE"}>, schemaName?:string}>}, redshiftRunConfiguration?:array{accountId?:string, dataAccessRole?:string, redshiftCredentialConfiguration?:array{secretManagerArn:string}, redshiftStorage:array{redshiftClusterSource?:array{clusterName:string}, redshiftServerlessSource?:array{workgroupName:string}}, region?:string, relationalFilterConfigurations:array<array{databaseName:string, filterExpressions?:array<array{expression:string, type:"INCLUDE"|"EXCLUDE"}>, schemaName?:string}>}, sageMakerRunConfiguration?:array{accountId?:string, region?:string, trackingAssets:array<string, array<string>>}}, connectionId?:string, createdAt?:int|string|\DateTimeInterface, description?:string, domainId:string, enableSetting?:"ENABLED"|"DISABLED", environmentId?:string, errorMessage?:array{errorDetail?:string, errorType:"ACCESS_DENIED_EXCEPTION"|"CONFLICT_EXCEPTION"|"INTERNAL_SERVER_EXCEPTION"|"RESOURCE_NOT_FOUND_EXCEPTION"|"SERVICE_QUOTA_EXCEEDED_EXCEPTION"|"THROTTLING_EXCEPTION"|"VALIDATION_EXCEPTION"}, id:string, lastRunAssetCount?:int, lastRunAt?:int|string|\DateTimeInterface, lastRunErrorMessage?:array{errorDetail?:string, errorType:"ACCESS_DENIED_EXCEPTION"|"CONFLICT_EXCEPTION"|"INTERNAL_SERVER_EXCEPTION"|"RESOURCE_NOT_FOUND_EXCEPTION"|"SERVICE_QUOTA_EXCEEDED_EXCEPTION"|"THROTTLING_EXCEPTION"|"VALIDATION_EXCEPTION"}, lastRunStatus?:"REQUESTED"|"RUNNING"|"FAILED"|"PARTIALLY_SUCCEEDED"|"SUCCESS", name:string, projectId:string, publishOnImport?:bool, recommendation?:array{enableBusinessNameGeneration?:bool}, schedule?:array{schedule?:mixed, timezone?:"UTC"|"AFRICA_JOHANNESBURG"|"AMERICA_MONTREAL"|"AMERICA_SAO_PAULO"|"ASIA_BAHRAIN"|"ASIA_BANGKOK"|"ASIA_CALCUTTA"|"ASIA_DUBAI"|"ASIA_HONG_KONG"|"ASIA_JAKARTA"|"ASIA_KUALA_LUMPUR"|"ASIA_SEOUL"|"ASIA_SHANGHAI"|"ASIA_SINGAPORE"|"ASIA_TAIPEI"|"ASIA_TOKYO"|"AUSTRALIA_MELBOURNE"|"AUSTRALIA_SYDNEY"|"CANADA_CENTRAL"|"CET"|"CST6CDT"|"ETC_GMT"|"ETC_GMT0"|"ETC_GMT_ADD_0"|"ETC_GMT_ADD_1"|"ETC_GMT_ADD_10"|"ETC_GMT_ADD_11"|"ETC_GMT_ADD_12"|"ETC_GMT_ADD_2"|"ETC_GMT_ADD_3"|"ETC_GMT_ADD_4"|"ETC_GMT_ADD_5"|"ETC_GMT_ADD_6"|"ETC_GMT_ADD_7"|"ETC_GMT_ADD_8"|"ETC_GMT_ADD_9"|"ETC_GMT_NEG_0"|"ETC_GMT_NEG_1"|"ETC_GMT_NEG_10"|"ETC_GMT_NEG_11"|"ETC_GMT_NEG_12"|"ETC_GMT_NEG_13"|"ETC_GMT_NEG_14"|"ETC_GMT_NEG_2"|"ETC_GMT_NEG_3"|"ETC_GMT_NEG_4"|"ETC_GMT_NEG_5"|"ETC_GMT_NEG_6"|"ETC_GMT_NEG_7"|"ETC_GMT_NEG_8"|"ETC_GMT_NEG_9"|"EUROPE_DUBLIN"|"EUROPE_LONDON"|"EUROPE_PARIS"|"EUROPE_STOCKHOLM"|"EUROPE_ZURICH"|"ISRAEL"|"MEXICO_GENERAL"|"MST7MDT"|"PACIFIC_AUCKLAND"|"US_CENTRAL"|"US_EASTERN"|"US_MOUNTAIN"|"US_PACIFIC"}, selfGrantStatus?:array{glueSelfGrantStatus?:array{selfGrantStatusDetails:array<array{databaseName:string, failureCause?:string, schemaName?:string, status:"GRANT_PENDING"|"REVOKE_PENDING"|"GRANT_IN_PROGRESS"|"REVOKE_IN_PROGRESS"|"GRANTED"|"GRANT_FAILED"|"REVOKE_FAILED"}>}, redshiftSelfGrantStatus?:array{selfGrantStatusDetails:array<array{databaseName:string, failureCause?:string, schemaName?:string, status:"GRANT_PENDING"|"REVOKE_PENDING"|"GRANT_IN_PROGRESS"|"REVOKE_IN_PROGRESS"|"GRANTED"|"GRANT_FAILED"|"REVOKE_FAILED"}>}}, status?:"CREATING"|"FAILED_CREATION"|"READY"|"UPDATING"|"FAILED_UPDATE"|"RUNNING"|"DELETING"|"FAILED_DELETION", type?:string, updatedAt?:int|string|\DateTimeInterface}>
     */
    public function getDataSource(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assetFormsOutput?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, configuration?:array{glueRunConfiguration?:array{accountId?:string, autoImportDataQualityResult?:bool, catalogName?:string, dataAccessRole?:string, region?:string, relationalFilterConfigurations:array<array{databaseName:string, filterExpressions?:array<array{expression:string, type:"INCLUDE"|"EXCLUDE"}>, schemaName?:string}>}, redshiftRunConfiguration?:array{accountId?:string, dataAccessRole?:string, redshiftCredentialConfiguration?:array{secretManagerArn:string}, redshiftStorage:array{redshiftClusterSource?:array{clusterName:string}, redshiftServerlessSource?:array{workgroupName:string}}, region?:string, relationalFilterConfigurations:array<array{databaseName:string, filterExpressions?:array<array{expression:string, type:"INCLUDE"|"EXCLUDE"}>, schemaName?:string}>}, sageMakerRunConfiguration?:array{accountId?:string, region?:string, trackingAssets:array<string, array<string>>}}, connectionId?:string, createdAt?:int|string|\DateTimeInterface, description?:string, domainId:string, enableSetting?:"ENABLED"|"DISABLED", environmentId?:string, errorMessage?:array{errorDetail?:string, errorType:"ACCESS_DENIED_EXCEPTION"|"CONFLICT_EXCEPTION"|"INTERNAL_SERVER_EXCEPTION"|"RESOURCE_NOT_FOUND_EXCEPTION"|"SERVICE_QUOTA_EXCEEDED_EXCEPTION"|"THROTTLING_EXCEPTION"|"VALIDATION_EXCEPTION"}, id:string, lastRunAssetCount?:int, lastRunAt?:int|string|\DateTimeInterface, lastRunErrorMessage?:array{errorDetail?:string, errorType:"ACCESS_DENIED_EXCEPTION"|"CONFLICT_EXCEPTION"|"INTERNAL_SERVER_EXCEPTION"|"RESOURCE_NOT_FOUND_EXCEPTION"|"SERVICE_QUOTA_EXCEEDED_EXCEPTION"|"THROTTLING_EXCEPTION"|"VALIDATION_EXCEPTION"}, lastRunStatus?:"REQUESTED"|"RUNNING"|"FAILED"|"PARTIALLY_SUCCEEDED"|"SUCCESS", name:string, projectId:string, publishOnImport?:bool, recommendation?:array{enableBusinessNameGeneration?:bool}, schedule?:array{schedule?:mixed, timezone?:"UTC"|"AFRICA_JOHANNESBURG"|"AMERICA_MONTREAL"|"AMERICA_SAO_PAULO"|"ASIA_BAHRAIN"|"ASIA_BANGKOK"|"ASIA_CALCUTTA"|"ASIA_DUBAI"|"ASIA_HONG_KONG"|"ASIA_JAKARTA"|"ASIA_KUALA_LUMPUR"|"ASIA_SEOUL"|"ASIA_SHANGHAI"|"ASIA_SINGAPORE"|"ASIA_TAIPEI"|"ASIA_TOKYO"|"AUSTRALIA_MELBOURNE"|"AUSTRALIA_SYDNEY"|"CANADA_CENTRAL"|"CET"|"CST6CDT"|"ETC_GMT"|"ETC_GMT0"|"ETC_GMT_ADD_0"|"ETC_GMT_ADD_1"|"ETC_GMT_ADD_10"|"ETC_GMT_ADD_11"|"ETC_GMT_ADD_12"|"ETC_GMT_ADD_2"|"ETC_GMT_ADD_3"|"ETC_GMT_ADD_4"|"ETC_GMT_ADD_5"|"ETC_GMT_ADD_6"|"ETC_GMT_ADD_7"|"ETC_GMT_ADD_8"|"ETC_GMT_ADD_9"|"ETC_GMT_NEG_0"|"ETC_GMT_NEG_1"|"ETC_GMT_NEG_10"|"ETC_GMT_NEG_11"|"ETC_GMT_NEG_12"|"ETC_GMT_NEG_13"|"ETC_GMT_NEG_14"|"ETC_GMT_NEG_2"|"ETC_GMT_NEG_3"|"ETC_GMT_NEG_4"|"ETC_GMT_NEG_5"|"ETC_GMT_NEG_6"|"ETC_GMT_NEG_7"|"ETC_GMT_NEG_8"|"ETC_GMT_NEG_9"|"EUROPE_DUBLIN"|"EUROPE_LONDON"|"EUROPE_PARIS"|"EUROPE_STOCKHOLM"|"EUROPE_ZURICH"|"ISRAEL"|"MEXICO_GENERAL"|"MST7MDT"|"PACIFIC_AUCKLAND"|"US_CENTRAL"|"US_EASTERN"|"US_MOUNTAIN"|"US_PACIFIC"}, selfGrantStatus?:array{glueSelfGrantStatus?:array{selfGrantStatusDetails:array<array{databaseName:string, failureCause?:string, schemaName?:string, status:"GRANT_PENDING"|"REVOKE_PENDING"|"GRANT_IN_PROGRESS"|"REVOKE_IN_PROGRESS"|"GRANTED"|"GRANT_FAILED"|"REVOKE_FAILED"}>}, redshiftSelfGrantStatus?:array{selfGrantStatusDetails:array<array{databaseName:string, failureCause?:string, schemaName?:string, status:"GRANT_PENDING"|"REVOKE_PENDING"|"GRANT_IN_PROGRESS"|"REVOKE_IN_PROGRESS"|"GRANTED"|"GRANT_FAILED"|"REVOKE_FAILED"}>}}, status?:"CREATING"|"FAILED_CREATION"|"READY"|"UPDATING"|"FAILED_UPDATE"|"RUNNING"|"DELETING"|"FAILED_DELETION", type?:string, updatedAt?:int|string|\DateTimeInterface}>
     */
    public function getDataSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<array{createdAt:int|string|\DateTimeInterface, dataSourceConfigurationSnapshot?:string, dataSourceId:string, domainId:string, errorMessage?:array{errorDetail?:string, errorType:"ACCESS_DENIED_EXCEPTION"|"CONFLICT_EXCEPTION"|"INTERNAL_SERVER_EXCEPTION"|"RESOURCE_NOT_FOUND_EXCEPTION"|"SERVICE_QUOTA_EXCEEDED_EXCEPTION"|"THROTTLING_EXCEPTION"|"VALIDATION_EXCEPTION"}, id:string, lineageSummary?:array{importStatus?:"IN_PROGRESS"|"SUCCESS"|"FAILED"|"PARTIALLY_SUCCEEDED"}, projectId:string, runStatisticsForAssets?:array{added?:int, failed?:int, skipped?:int, unchanged?:int, updated?:int}, startedAt?:int|string|\DateTimeInterface, status:"REQUESTED"|"RUNNING"|"FAILED"|"PARTIALLY_SUCCEEDED"|"SUCCESS", stoppedAt?:int|string|\DateTimeInterface, type:"PRIORITIZED"|"SCHEDULED", updatedAt:int|string|\DateTimeInterface}>
     */
    public function getDataSourceRun(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt:int|string|\DateTimeInterface, dataSourceConfigurationSnapshot?:string, dataSourceId:string, domainId:string, errorMessage?:array{errorDetail?:string, errorType:"ACCESS_DENIED_EXCEPTION"|"CONFLICT_EXCEPTION"|"INTERNAL_SERVER_EXCEPTION"|"RESOURCE_NOT_FOUND_EXCEPTION"|"SERVICE_QUOTA_EXCEEDED_EXCEPTION"|"THROTTLING_EXCEPTION"|"VALIDATION_EXCEPTION"}, id:string, lineageSummary?:array{importStatus?:"IN_PROGRESS"|"SUCCESS"|"FAILED"|"PARTIALLY_SUCCEEDED"}, projectId:string, runStatisticsForAssets?:array{added?:int, failed?:int, skipped?:int, unchanged?:int, updated?:int}, startedAt?:int|string|\DateTimeInterface, status:"REQUESTED"|"RUNNING"|"FAILED"|"PARTIALLY_SUCCEEDED"|"SUCCESS", stoppedAt?:int|string|\DateTimeInterface, type:"PRIORITIZED"|"SCHEDULED", updatedAt:int|string|\DateTimeInterface}>
     */
    public function getDataSourceRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{identifier:string} $args
     * @return \AWS\Result<array{arn?:string, createdAt?:int|string|\DateTimeInterface, description?:string, domainExecutionRole:string, domainVersion?:"V1"|"V2", id:string, kmsKeyIdentifier?:string, lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, portalUrl?:string, rootDomainUnitId?:string, serviceRole?:string, singleSignOn?:array{type?:"IAM_IDC"|"DISABLED", userAssignment?:"AUTOMATIC"|"MANUAL"}, status:"CREATING"|"AVAILABLE"|"CREATION_FAILED"|"DELETING"|"DELETED"|"DELETION_FAILED", tags?:array<string, string>}>
     */
    public function getDomain(array $args): \AWS\Result { }

    /**
     * @param array{identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, createdAt?:int|string|\DateTimeInterface, description?:string, domainExecutionRole:string, domainVersion?:"V1"|"V2", id:string, kmsKeyIdentifier?:string, lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, portalUrl?:string, rootDomainUnitId?:string, serviceRole?:string, singleSignOn?:array{type?:"IAM_IDC"|"DISABLED", userAssignment?:"AUTOMATIC"|"MANUAL"}, status:"CREATING"|"AVAILABLE"|"CREATION_FAILED"|"DELETING"|"DELETED"|"DELETION_FAILED", tags?:array<string, string>}>
     */
    public function getDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, id:string, lastUpdatedAt?:int|string|\DateTimeInterface, lastUpdatedBy?:string, name:string, owners:array<array{group?:array{groupId?:string}, user?:array{userId?:string}}>, parentDomainUnitId?:string}>
     */
    public function getDomainUnit(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, id:string, lastUpdatedAt?:int|string|\DateTimeInterface, lastUpdatedBy?:string, name:string, owners:array<array{group?:array{groupId?:string}, user?:array{userId?:string}}>, parentDomainUnitId?:string}>
     */
    public function getDomainUnitAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<array{awsAccountId?:string, awsAccountRegion?:string, createdAt?:int|string|\DateTimeInterface, createdBy:string, deploymentProperties?:array{endTimeoutMinutes?:int, startTimeoutMinutes?:int}, description?:string, domainId:string, environmentActions?:array<array{auth?:"IAM"|"HTTPS", parameters:array<array{key?:string, value?:string}>, type:string}>, environmentBlueprintId?:string, environmentProfileId?:string, glossaryTerms?:array<string>, id?:string, lastDeployment?:array{deploymentId?:string, deploymentStatus?:"IN_PROGRESS"|"SUCCESSFUL"|"FAILED"|"PENDING_DEPLOYMENT", deploymentType?:"CREATE"|"UPDATE"|"DELETE", failureReason?:array{code?:string, message:string}, isDeploymentComplete?:bool, messages?:array<string>}, name:string, projectId:string, provider:string, provisionedResources?:array<array{name?:string, provider?:string, type:string, value:string}>, provisioningProperties?:array{cloudFormation?:array{templateUrl:string}}, status?:"ACTIVE"|"CREATING"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"UPDATE_FAILED"|"DELETE_FAILED"|"VALIDATION_FAILED"|"SUSPENDED"|"DISABLED"|"EXPIRED"|"DELETED"|"INACCESSIBLE", updatedAt?:int|string|\DateTimeInterface, userParameters?:array<array{defaultValue?:string, description?:string, fieldType:string, isEditable?:bool, isOptional?:bool, keyName:string}>}>
     */
    public function getEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{awsAccountId?:string, awsAccountRegion?:string, createdAt?:int|string|\DateTimeInterface, createdBy:string, deploymentProperties?:array{endTimeoutMinutes?:int, startTimeoutMinutes?:int}, description?:string, domainId:string, environmentActions?:array<array{auth?:"IAM"|"HTTPS", parameters:array<array{key?:string, value?:string}>, type:string}>, environmentBlueprintId?:string, environmentProfileId?:string, glossaryTerms?:array<string>, id?:string, lastDeployment?:array{deploymentId?:string, deploymentStatus?:"IN_PROGRESS"|"SUCCESSFUL"|"FAILED"|"PENDING_DEPLOYMENT", deploymentType?:"CREATE"|"UPDATE"|"DELETE", failureReason?:array{code?:string, message:string}, isDeploymentComplete?:bool, messages?:array<string>}, name:string, projectId:string, provider:string, provisionedResources?:array<array{name?:string, provider?:string, type:string, value:string}>, provisioningProperties?:array{cloudFormation?:array{templateUrl:string}}, status?:"ACTIVE"|"CREATING"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"UPDATE_FAILED"|"DELETE_FAILED"|"VALIDATION_FAILED"|"SUSPENDED"|"DISABLED"|"EXPIRED"|"DELETED"|"INACCESSIBLE", updatedAt?:int|string|\DateTimeInterface, userParameters?:array<array{defaultValue?:string, description?:string, fieldType:string, isEditable?:bool, isOptional?:bool, keyName:string}>}>
     */
    public function getEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, environmentIdentifier:string, identifier:string} $args
     * @return \AWS\Result<array{description?:string, domainId:string, environmentId:string, id:string, name:string, parameters:array{awsConsoleLink?:array{uri?:string}}}>
     */
    public function getEnvironmentAction(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, environmentIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{description?:string, domainId:string, environmentId:string, id:string, name:string, parameters:array{awsConsoleLink?:array{uri?:string}}}>
     */
    public function getEnvironmentActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<array{createdAt?:int|string|\DateTimeInterface, deploymentProperties?:array{endTimeoutMinutes?:int, startTimeoutMinutes?:int}, description?:string, glossaryTerms?:array<string>, id:string, name:string, provider:string, provisioningProperties:array{cloudFormation?:array{templateUrl:string}}, updatedAt?:int|string|\DateTimeInterface, userParameters?:array<array{defaultValue?:string, description?:string, fieldType:string, isEditable?:bool, isOptional?:bool, keyName:string}>}>
     */
    public function getEnvironmentBlueprint(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt?:int|string|\DateTimeInterface, deploymentProperties?:array{endTimeoutMinutes?:int, startTimeoutMinutes?:int}, description?:string, glossaryTerms?:array<string>, id:string, name:string, provider:string, provisioningProperties:array{cloudFormation?:array{templateUrl:string}}, updatedAt?:int|string|\DateTimeInterface, userParameters?:array<array{defaultValue?:string, description?:string, fieldType:string, isEditable?:bool, isOptional?:bool, keyName:string}>}>
     */
    public function getEnvironmentBlueprintAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, environmentBlueprintIdentifier:string} $args
     * @return \AWS\Result<array{createdAt?:int|string|\DateTimeInterface, domainId:string, enabledRegions?:array<string>, environmentBlueprintId:string, environmentRolePermissionBoundary?:string, manageAccessRoleArn?:string, provisioningConfigurations?:array<array{lakeFormationConfiguration?:array{locationRegistrationExcludeS3Locations?:array<string>, locationRegistrationRole?:string}}>, provisioningRoleArn?:string, regionalParameters?:array<string, array<string, string>>, updatedAt?:int|string|\DateTimeInterface}>
     */
    public function getEnvironmentBlueprintConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, environmentBlueprintIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt?:int|string|\DateTimeInterface, domainId:string, enabledRegions?:array<string>, environmentBlueprintId:string, environmentRolePermissionBoundary?:string, manageAccessRoleArn?:string, provisioningConfigurations?:array<array{lakeFormationConfiguration?:array{locationRegistrationExcludeS3Locations?:array<string>, locationRegistrationRole?:string}}>, provisioningRoleArn?:string, regionalParameters?:array<string, array<string, string>>, updatedAt?:int|string|\DateTimeInterface}>
     */
    public function getEnvironmentBlueprintConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, environmentIdentifier:string} $args
     * @return \AWS\Result<array{accessKeyId?:string, expiration?:int|string|\DateTimeInterface, secretAccessKey?:string, sessionToken?:string}>
     */
    public function getEnvironmentCredentials(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, environmentIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{accessKeyId?:string, expiration?:int|string|\DateTimeInterface, secretAccessKey?:string, sessionToken?:string}>
     */
    public function getEnvironmentCredentialsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<array{awsAccountId?:string, awsAccountRegion?:string, createdAt?:int|string|\DateTimeInterface, createdBy:string, description?:string, domainId:string, environmentBlueprintId:string, id:string, name:string, projectId?:string, updatedAt?:int|string|\DateTimeInterface, userParameters?:array<array{defaultValue?:string, description?:string, fieldType:string, isEditable?:bool, isOptional?:bool, keyName:string}>}>
     */
    public function getEnvironmentProfile(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{awsAccountId?:string, awsAccountRegion?:string, createdAt?:int|string|\DateTimeInterface, createdBy:string, description?:string, domainId:string, environmentBlueprintId:string, id:string, name:string, projectId?:string, updatedAt?:int|string|\DateTimeInterface, userParameters?:array<array{defaultValue?:string, description?:string, fieldType:string, isEditable?:bool, isOptional?:bool, keyName:string}>}>
     */
    public function getEnvironmentProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, formTypeIdentifier:string, revision?:string} $args
     * @return \AWS\Result<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, imports?:array<array{name:string, revision:string}>, model:array{smithy?:string}, name:string, originDomainId?:string, originProjectId?:string, owningProjectId?:string, revision:string, status?:"ENABLED"|"DISABLED"}>
     */
    public function getFormType(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, formTypeIdentifier:string, revision?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, imports?:array<array{name:string, revision:string}>, model:array{smithy?:string}, name:string, originDomainId?:string, originProjectId?:string, owningProjectId?:string, revision:string, status?:"ENABLED"|"DISABLED"}>
     */
    public function getFormTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, id:string, name:string, owningProjectId:string, status:"DISABLED"|"ENABLED", updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function getGlossary(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, id:string, name:string, owningProjectId:string, status:"DISABLED"|"ENABLED", updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function getGlossaryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, domainId:string, glossaryId:string, id:string, longDescription?:string, name:string, shortDescription?:string, status:"ENABLED"|"DISABLED", termRelations?:array{classifies?:array<string>, isA?:array<string>}, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function getGlossaryTerm(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, domainId:string, glossaryId:string, id:string, longDescription?:string, name:string, shortDescription?:string, status:"ENABLED"|"DISABLED", termRelations?:array{classifies?:array<string>, isA?:array<string>}, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function getGlossaryTermAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, groupIdentifier:string} $args
     * @return \AWS\Result<array{domainId?:string, groupName?:string, id?:string, status?:"ASSIGNED"|"NOT_ASSIGNED"}>
     */
    public function getGroupProfile(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, groupIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{domainId?:string, groupName?:string, id?:string, status?:"ASSIGNED"|"NOT_ASSIGNED"}>
     */
    public function getGroupProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string} $args
     * @return \AWS\Result<array{authCodeUrl?:string, userProfileId:string}>
     */
    public function getIamPortalLoginUrl(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{authCodeUrl?:string, userProfileId:string}>
     */
    public function getIamPortalLoginUrlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, details?:array{lineageRunDetails?:array{sqlQueryRunDetails?:array{errorMessages?:array<string>, numQueriesFailed?:int, queryEndTime?:int|string|\DateTimeInterface, queryStartTime?:int|string|\DateTimeInterface, totalQueriesProcessed?:int}}}, domainId?:string, endTime?:int|string|\DateTimeInterface, error?:array{message:string}, id?:string, jobId?:string, jobType?:"LINEAGE", runMode?:"SCHEDULED"|"ON_DEMAND", startTime?:int|string|\DateTimeInterface, status?:"SCHEDULED"|"IN_PROGRESS"|"SUCCESS"|"PARTIALLY_SUCCEEDED"|"FAILED"|"ABORTED"|"TIMED_OUT"|"CANCELED"}>
     */
    public function getJobRun(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, details?:array{lineageRunDetails?:array{sqlQueryRunDetails?:array{errorMessages?:array<string>, numQueriesFailed?:int, queryEndTime?:int|string|\DateTimeInterface, queryStartTime?:int|string|\DateTimeInterface, totalQueriesProcessed?:int}}}, domainId?:string, endTime?:int|string|\DateTimeInterface, error?:array{message:string}, id?:string, jobId?:string, jobType?:"LINEAGE", runMode?:"SCHEDULED"|"ON_DEMAND", startTime?:int|string|\DateTimeInterface, status?:"SCHEDULED"|"IN_PROGRESS"|"SUCCESS"|"PARTIALLY_SUCCEEDED"|"FAILED"|"ABORTED"|"TIMED_OUT"|"CANCELED"}>
     */
    public function getJobRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, domainId?:string, event?:string|resource|\Psr\Http\Message\StreamInterface, eventTime?:int|string|\DateTimeInterface, id?:string, processingStatus?:"REQUESTED"|"PROCESSING"|"SUCCESS"|"FAILED"}>
     */
    public function getLineageEvent(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, domainId?:string, event?:string|resource|\Psr\Http\Message\StreamInterface, eventTime?:int|string|\DateTimeInterface, id?:string, processingStatus?:"REQUESTED"|"PROCESSING"|"SUCCESS"|"FAILED"}>
     */
    public function getLineageEventAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, eventTimestamp?:int|string|\DateTimeInterface, identifier:string} $args
     * @return \AWS\Result<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, downstreamNodes?:array<array{eventTimestamp?:int|string|\DateTimeInterface, id?:string}>, eventTimestamp?:int|string|\DateTimeInterface, formsOutput?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, id:string, name?:string, sourceIdentifier?:string, typeName:string, typeRevision?:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string, upstreamNodes?:array<array{eventTimestamp?:int|string|\DateTimeInterface, id?:string}>}>
     */
    public function getLineageNode(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, eventTimestamp?:int|string|\DateTimeInterface, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, downstreamNodes?:array<array{eventTimestamp?:int|string|\DateTimeInterface, id?:string}>, eventTimestamp?:int|string|\DateTimeInterface, formsOutput?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, id:string, name?:string, sourceIdentifier?:string, typeName:string, typeRevision?:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string, upstreamNodes?:array<array{eventTimestamp?:int|string|\DateTimeInterface, id?:string}>}>
     */
    public function getLineageNodeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string, listingRevision?:string} $args
     * @return \AWS\Result<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, id:string, item?:array{assetListing?:array{assetId?:string, assetRevision?:string, assetType?:string, createdAt?:int|string|\DateTimeInterface, forms?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>, latestTimeSeriesDataPointForms?:array<array{contentSummary?:string, formName:string, id?:string, timestamp:int|string|\DateTimeInterface, typeIdentifier:string, typeRevision?:string}>, owningProjectId?:string}, dataProductListing?:array{createdAt?:int|string|\DateTimeInterface, dataProductId?:string, dataProductRevision?:string, forms?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>, items?:array<array{glossaryTerms?:array<array{name?:string, shortDescription?:string}>, listingId?:string, listingRevision?:string}>, owningProjectId?:string}}, listingRevision:string, name?:string, status?:"CREATING"|"ACTIVE"|"INACTIVE", updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function getListing(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string, listingRevision?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, id:string, item?:array{assetListing?:array{assetId?:string, assetRevision?:string, assetType?:string, createdAt?:int|string|\DateTimeInterface, forms?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>, latestTimeSeriesDataPointForms?:array<array{contentSummary?:string, formName:string, id?:string, timestamp:int|string|\DateTimeInterface, typeIdentifier:string, typeRevision?:string}>, owningProjectId?:string}, dataProductListing?:array{createdAt?:int|string|\DateTimeInterface, dataProductId?:string, dataProductRevision?:string, forms?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>, items?:array<array{glossaryTerms?:array<array{name?:string, shortDescription?:string}>, listingId?:string, listingRevision?:string}>, owningProjectId?:string}}, listingRevision:string, name?:string, status?:"CREATING"|"ACTIVE"|"INACTIVE", updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function getListingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, domainId:string, id:string, owningProjectId:string, status?:"SUBMITTED"|"IN_PROGRESS"|"CANCELED"|"SUCCEEDED"|"FAILED", target?:array{identifier:string, revision?:string, type:"ASSET"}, type?:"BUSINESS_DESCRIPTIONS"}>
     */
    public function getMetadataGenerationRun(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, domainId:string, id:string, owningProjectId:string, status?:"SUBMITTED"|"IN_PROGRESS"|"CANCELED"|"SUCCEEDED"|"FAILED", target?:array{identifier:string, revision?:string, type:"ASSET"}, type?:"BUSINESS_DESCRIPTIONS"}>
     */
    public function getMetadataGenerationRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<array{createdAt?:int|string|\DateTimeInterface, createdBy:string, description?:string, domainId:string, domainUnitId?:string, environmentDeploymentDetails?:array{environmentFailureReasons?:array<string, array<array{code?:string, message:string}>>, overallDeploymentStatus?:"PENDING_DEPLOYMENT"|"IN_PROGRESS"|"SUCCESSFUL"|"FAILED_VALIDATION"|"FAILED_DEPLOYMENT"}, failureReasons?:array<array{code?:string, message?:string}>, glossaryTerms?:array<string>, id:string, lastUpdatedAt?:int|string|\DateTimeInterface, name:string, projectProfileId?:string, projectStatus?:"ACTIVE"|"DELETING"|"DELETE_FAILED", userParameters?:array<array{environmentConfigurationName?:string, environmentParameters?:array<array{name?:string, value?:string}>}>}>
     */
    public function getProject(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt?:int|string|\DateTimeInterface, createdBy:string, description?:string, domainId:string, domainUnitId?:string, environmentDeploymentDetails?:array{environmentFailureReasons?:array<string, array<array{code?:string, message:string}>>, overallDeploymentStatus?:"PENDING_DEPLOYMENT"|"IN_PROGRESS"|"SUCCESSFUL"|"FAILED_VALIDATION"|"FAILED_DEPLOYMENT"}, failureReasons?:array<array{code?:string, message?:string}>, glossaryTerms?:array<string>, id:string, lastUpdatedAt?:int|string|\DateTimeInterface, name:string, projectProfileId?:string, projectStatus?:"ACTIVE"|"DELETING"|"DELETE_FAILED", userParameters?:array<array{environmentConfigurationName?:string, environmentParameters?:array<array{name?:string, value?:string}>}>}>
     */
    public function getProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<array{createdAt?:int|string|\DateTimeInterface, createdBy:string, description?:string, domainId:string, domainUnitId?:string, environmentConfigurations?:array<array{awsAccount:array{awsAccountId?:string, awsAccountIdPath?:string}, awsRegion:array{regionName?:string, regionNamePath?:string}, configurationParameters?:array{parameterOverrides?:array<array{isEditable?:bool, name?:string, value?:string}>, resolvedParameters?:array<array{isEditable?:bool, name?:string, value?:string}>, ssmPath?:string}, deploymentMode?:"ON_CREATE"|"ON_DEMAND", deploymentOrder?:int, description?:string, environmentBlueprintId:string, id?:string, name:string}>, id:string, lastUpdatedAt?:int|string|\DateTimeInterface, name:string, status?:"ENABLED"|"DISABLED"}>
     */
    public function getProjectProfile(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt?:int|string|\DateTimeInterface, createdBy:string, description?:string, domainId:string, domainUnitId?:string, environmentConfigurations?:array<array{awsAccount:array{awsAccountId?:string, awsAccountIdPath?:string}, awsRegion:array{regionName?:string, regionNamePath?:string}, configurationParameters?:array{parameterOverrides?:array<array{isEditable?:bool, name?:string, value?:string}>, resolvedParameters?:array<array{isEditable?:bool, name?:string, value?:string}>, ssmPath?:string}, deploymentMode?:"ON_CREATE"|"ON_DEMAND", deploymentOrder?:int, description?:string, environmentBlueprintId:string, id?:string, name:string}>, id:string, lastUpdatedAt?:int|string|\DateTimeInterface, name:string, status?:"ENABLED"|"DISABLED"}>
     */
    public function getProjectProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string, revision?:string} $args
     * @return \AWS\Result<array{action:"CREATE_SUBSCRIPTION_REQUEST", createdAt:int|string|\DateTimeInterface, createdBy:string, description?:string, detail:array{metadataFormEnforcementDetail?:array{requiredMetadataForms?:array<array{typeIdentifier:string, typeRevision:string}>}}, identifier:string, lastUpdatedBy:string, name:string, revision:string, ruleType:"METADATA_FORM_ENFORCEMENT", scope:array{assetType?:array{selectionMode:"ALL"|"SPECIFIC", specificAssetTypes?:array<string>}, dataProduct?:bool, project?:array{selectionMode:"ALL"|"SPECIFIC", specificProjects?:array<string>}}, target:array{domainUnitTarget?:array{domainUnitId:string, includeChildDomainUnits?:bool}}, targetType?:"DOMAIN_UNIT", updatedAt:int|string|\DateTimeInterface}>
     */
    public function getRule(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string, revision?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{action:"CREATE_SUBSCRIPTION_REQUEST", createdAt:int|string|\DateTimeInterface, createdBy:string, description?:string, detail:array{metadataFormEnforcementDetail?:array{requiredMetadataForms?:array<array{typeIdentifier:string, typeRevision:string}>}}, identifier:string, lastUpdatedBy:string, name:string, revision:string, ruleType:"METADATA_FORM_ENFORCEMENT", scope:array{assetType?:array{selectionMode:"ALL"|"SPECIFIC", specificAssetTypes?:array<string>}, dataProduct?:bool, project?:array{selectionMode:"ALL"|"SPECIFIC", specificProjects?:array<string>}}, target:array{domainUnitTarget?:array{domainUnitId:string, includeChildDomainUnits?:bool}}, targetType?:"DOMAIN_UNIT", updatedAt:int|string|\DateTimeInterface}>
     */
    public function getRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<array{createdAt:int|string|\DateTimeInterface, createdBy:string, domainId:string, id:string, retainPermissions?:bool, status:"APPROVED"|"REVOKED"|"CANCELLED", subscribedListing:array{description:string, id:string, item:array{assetListing?:array{assetScope?:array{assetId:string, errorMessage?:string, filterIds:array<string>, status:string}, entityId?:string, entityRevision?:string, entityType?:string, forms?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>}, productListing?:array{assetListings?:array<array{entityId?:string, entityRevision?:string, entityType?:string}>, description?:string, entityId?:string, entityRevision?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>, name?:string}}, name:string, ownerProjectId:string, ownerProjectName?:string, revision?:string}, subscribedPrincipal:array{project?:array{id?:string, name?:string}}, subscriptionRequestId?:string, updatedAt:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function getSubscription(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt:int|string|\DateTimeInterface, createdBy:string, domainId:string, id:string, retainPermissions?:bool, status:"APPROVED"|"REVOKED"|"CANCELLED", subscribedListing:array{description:string, id:string, item:array{assetListing?:array{assetScope?:array{assetId:string, errorMessage?:string, filterIds:array<string>, status:string}, entityId?:string, entityRevision?:string, entityType?:string, forms?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>}, productListing?:array{assetListings?:array<array{entityId?:string, entityRevision?:string, entityType?:string}>, description?:string, entityId?:string, entityRevision?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>, name?:string}}, name:string, ownerProjectId:string, ownerProjectName?:string, revision?:string}, subscribedPrincipal:array{project?:array{id?:string, name?:string}}, subscriptionRequestId?:string, updatedAt:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function getSubscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<array{assets?:array<array{assetId:string, assetRevision:string, assetScope?:array{assetId:string, errorMessage?:string, filterIds:array<string>, status:string}, failureCause?:array{message?:string}, failureTimestamp?:int|string|\DateTimeInterface, grantedTimestamp?:int|string|\DateTimeInterface, status:"GRANT_PENDING"|"REVOKE_PENDING"|"GRANT_IN_PROGRESS"|"REVOKE_IN_PROGRESS"|"GRANTED"|"REVOKED"|"GRANT_FAILED"|"REVOKE_FAILED", targetName?:string}>, createdAt:int|string|\DateTimeInterface, createdBy:string, domainId:string, grantedEntity:array{listing?:array{id:string, revision:string}}, id:string, status:"PENDING"|"IN_PROGRESS"|"GRANT_FAILED"|"REVOKE_FAILED"|"GRANT_AND_REVOKE_FAILED"|"COMPLETED"|"INACCESSIBLE", subscriptionId?:string, subscriptionTargetId:string, updatedAt:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function getSubscriptionGrant(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assets?:array<array{assetId:string, assetRevision:string, assetScope?:array{assetId:string, errorMessage?:string, filterIds:array<string>, status:string}, failureCause?:array{message?:string}, failureTimestamp?:int|string|\DateTimeInterface, grantedTimestamp?:int|string|\DateTimeInterface, status:"GRANT_PENDING"|"REVOKE_PENDING"|"GRANT_IN_PROGRESS"|"REVOKE_IN_PROGRESS"|"GRANTED"|"REVOKED"|"GRANT_FAILED"|"REVOKE_FAILED", targetName?:string}>, createdAt:int|string|\DateTimeInterface, createdBy:string, domainId:string, grantedEntity:array{listing?:array{id:string, revision:string}}, id:string, status:"PENDING"|"IN_PROGRESS"|"GRANT_FAILED"|"REVOKE_FAILED"|"GRANT_AND_REVOKE_FAILED"|"COMPLETED"|"INACCESSIBLE", subscriptionId?:string, subscriptionTargetId:string, updatedAt:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function getSubscriptionGrantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<array{createdAt:int|string|\DateTimeInterface, createdBy:string, decisionComment?:string, domainId:string, existingSubscriptionId?:string, id:string, metadataForms?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, requestReason:string, reviewerId?:string, status:"PENDING"|"ACCEPTED"|"REJECTED", subscribedListings:array<array{description:string, id:string, item:array{assetListing?:array{assetScope?:array{assetId:string, errorMessage?:string, filterIds:array<string>, status:string}, entityId?:string, entityRevision?:string, entityType?:string, forms?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>}, productListing?:array{assetListings?:array<array{entityId?:string, entityRevision?:string, entityType?:string}>, description?:string, entityId?:string, entityRevision?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>, name?:string}}, name:string, ownerProjectId:string, ownerProjectName?:string, revision?:string}>, subscribedPrincipals:array<array{project?:array{id?:string, name?:string}}>, updatedAt:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function getSubscriptionRequestDetails(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt:int|string|\DateTimeInterface, createdBy:string, decisionComment?:string, domainId:string, existingSubscriptionId?:string, id:string, metadataForms?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, requestReason:string, reviewerId?:string, status:"PENDING"|"ACCEPTED"|"REJECTED", subscribedListings:array<array{description:string, id:string, item:array{assetListing?:array{assetScope?:array{assetId:string, errorMessage?:string, filterIds:array<string>, status:string}, entityId?:string, entityRevision?:string, entityType?:string, forms?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>}, productListing?:array{assetListings?:array<array{entityId?:string, entityRevision?:string, entityType?:string}>, description?:string, entityId?:string, entityRevision?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>, name?:string}}, name:string, ownerProjectId:string, ownerProjectName?:string, revision?:string}>, subscribedPrincipals:array<array{project?:array{id?:string, name?:string}}>, updatedAt:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function getSubscriptionRequestDetailsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, environmentIdentifier:string, identifier:string} $args
     * @return \AWS\Result<array{applicableAssetTypes:array<string>, authorizedPrincipals:array<string>, createdAt:int|string|\DateTimeInterface, createdBy:string, domainId:string, environmentId:string, id:string, manageAccessRole?:string, name:string, projectId:string, provider:string, subscriptionTargetConfig:array<array{content:string, formName:string}>, type:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function getSubscriptionTarget(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, environmentIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicableAssetTypes:array<string>, authorizedPrincipals:array<string>, createdAt:int|string|\DateTimeInterface, createdBy:string, domainId:string, environmentId:string, id:string, manageAccessRole?:string, name:string, projectId:string, provider:string, subscriptionTargetConfig:array<array{content:string, formName:string}>, type:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function getSubscriptionTargetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, entityIdentifier:string, entityType:"ASSET"|"LISTING", formName:string, identifier:string} $args
     * @return \AWS\Result<array{domainId?:string, entityId?:string, entityType?:"ASSET"|"LISTING", form?:array{content?:string, formName:string, id?:string, timestamp:int|string|\DateTimeInterface, typeIdentifier:string, typeRevision?:string}, formName?:string}>
     */
    public function getTimeSeriesDataPoint(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, entityIdentifier:string, entityType:"ASSET"|"LISTING", formName:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{domainId?:string, entityId?:string, entityType?:"ASSET"|"LISTING", form?:array{content?:string, formName:string, id?:string, timestamp:int|string|\DateTimeInterface, typeIdentifier:string, typeRevision?:string}, formName?:string}>
     */
    public function getTimeSeriesDataPointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, type?:"IAM"|"SSO", userIdentifier:string} $args
     * @return \AWS\Result<array{details?:array{iam?:array{arn?:string}, sso?:array{firstName?:string, lastName?:string, username?:string}}, domainId?:string, id?:string, status?:"ASSIGNED"|"NOT_ASSIGNED"|"ACTIVATED"|"DEACTIVATED", type?:"IAM"|"SSO"}>
     */
    public function getUserProfile(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, type?:"IAM"|"SSO", userIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{details?:array{iam?:array{arn?:string}, sso?:array{firstName?:string, lastName?:string, username?:string}}, domainId?:string, id?:string, status?:"ASSIGNED"|"NOT_ASSIGNED"|"ACTIVATED"|"DEACTIVATED", type?:"IAM"|"SSO"}>
     */
    public function getUserProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetIdentifier:string, domainIdentifier:string, maxResults?:int, nextToken?:string, status?:"VALID"|"INVALID"} $args
     * @return \AWS\Result<array{items:array<array{assetId:string, createdAt?:int|string|\DateTimeInterface, description?:string, domainId:string, effectiveColumnNames?:array<string>, effectiveRowFilter?:string, errorMessage?:string, id:string, name:string, status?:"VALID"|"INVALID"}>, nextToken?:string}>
     */
    public function listAssetFilters(array $args): \AWS\Result { }

    /**
     * @param array{assetIdentifier:string, domainIdentifier:string, maxResults?:int, nextToken?:string, status?:"VALID"|"INVALID"} $args
     * @return \GuzzleHttp\Promise\Promise<array{items:array<array{assetId:string, createdAt?:int|string|\DateTimeInterface, description?:string, domainId:string, effectiveColumnNames?:array<string>, effectiveRowFilter?:string, errorMessage?:string, id:string, name:string, status?:"VALID"|"INVALID"}>, nextToken?:string}>
     */
    public function listAssetFiltersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{items?:array<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, domainId?:string, id?:string, revision?:string}>, nextToken?:string}>
     */
    public function listAssetRevisions(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, domainId?:string, id?:string, revision?:string}>, nextToken?:string}>
     */
    public function listAssetRevisionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, environmentIdentifier?:string, maxResults?:int, name?:string, nextToken?:string, projectIdentifier:string, sortBy?:"NAME", sortOrder?:"ASCENDING"|"DESCENDING", type?:"ATHENA"|"BIGQUERY"|"DATABRICKS"|"DOCUMENTDB"|"DYNAMODB"|"HYPERPOD"|"IAM"|"MYSQL"|"OPENSEARCH"|"ORACLE"|"POSTGRESQL"|"REDSHIFT"|"SAPHANA"|"SNOWFLAKE"|"SPARK"|"SQLSERVER"|"TERADATA"|"VERTICA"|"WORKFLOWS_MWAA"} $args
     * @return \AWS\Result<array{items:array<array{connectionId:string, domainId:string, domainUnitId:string, environmentId?:string, name:string, physicalEndpoints:array<array{awsLocation?:array{accessRole?:string, awsAccountId?:string, awsRegion?:string, iamConnectionId?:string}, glueConnection?:array{athenaProperties?:array<string, string>, authenticationConfiguration?:array{authenticationType?:"BASIC"|"OAUTH2"|"CUSTOM", oAuth2Properties?:array{authorizationCodeProperties?:array{authorizationCode?:string, redirectUri?:string}, oAuth2ClientApplication?:array{aWSManagedClientApplicationReference?:string, userManagedClientApplicationClientId?:string}, oAuth2Credentials?:array{accessToken?:string, jwtToken?:string, refreshToken?:string, userManagedClientApplicationClientSecret?:string}, oAuth2GrantType?:"AUTHORIZATION_CODE"|"CLIENT_CREDENTIALS"|"JWT_BEARER", tokenUrl?:string, tokenUrlParametersMap?:array<string, string>}, secretArn?:string}, compatibleComputeEnvironments?:array<"SPARK"|"ATHENA"|"PYTHON">, connectionProperties?:array<string, string>, connectionSchemaVersion?:int, connectionType?:"ATHENA"|"BIGQUERY"|"DATABRICKS"|"DOCUMENTDB"|"DYNAMODB"|"HYPERPOD"|"IAM"|"MYSQL"|"OPENSEARCH"|"ORACLE"|"POSTGRESQL"|"REDSHIFT"|"SAPHANA"|"SNOWFLAKE"|"SPARK"|"SQLSERVER"|"TERADATA"|"VERTICA"|"WORKFLOWS_MWAA", creationTime?:int|string|\DateTimeInterface, description?:string, lastConnectionValidationTime?:int|string|\DateTimeInterface, lastUpdatedBy?:string, lastUpdatedTime?:int|string|\DateTimeInterface, matchCriteria?:array<string>, name?:string, physicalConnectionRequirements?:array{availabilityZone?:string, securityGroupIdList?:array<string>, subnetId?:string, subnetIdList?:array<string>}, pythonProperties?:array<string, string>, sparkProperties?:array<string, string>, status?:"CREATING"|"CREATE_FAILED"|"DELETING"|"DELETE_FAILED"|"READY"|"UPDATING"|"UPDATE_FAILED"|"DELETED", statusReason?:string}, glueConnectionName?:string, host?:string, port?:int, protocol?:"ATHENA"|"GLUE_INTERACTIVE_SESSION"|"HTTPS"|"JDBC"|"LIVY"|"ODBC"|"PRISM", stage?:string}>, projectId?:string, props?:array{athenaProperties?:array{workgroupName?:string}, glueProperties?:array{errorMessage?:string, status?:"CREATING"|"CREATE_FAILED"|"DELETING"|"DELETE_FAILED"|"READY"|"UPDATING"|"UPDATE_FAILED"|"DELETED"}, hyperPodProperties?:array{clusterArn?:string, clusterName:string, orchestrator?:"EKS"|"SLURM"}, iamProperties?:array{environmentId?:string, glueLineageSyncEnabled?:bool}, redshiftProperties?:array{credentials?:array{secretArn?:string, usernamePassword?:array{password:string, username:string}}, databaseName?:string, isProvisionedSecret?:bool, jdbcIamUrl?:string, jdbcUrl?:string, lineageSync?:array{enabled?:bool, lineageJobId?:string, schedule?:array{schedule?:mixed}}, redshiftTempDir?:string, status?:"CREATING"|"CREATE_FAILED"|"DELETING"|"DELETE_FAILED"|"READY"|"UPDATING"|"UPDATE_FAILED"|"DELETED", storage?:array{clusterName?:string, workgroupName?:string}}, sparkEmrProperties?:array{computeArn?:string, credentials?:array{password:string, username:string}, credentialsExpiration?:int|string|\DateTimeInterface, governanceType?:"AWS_MANAGED"|"USER_MANAGED", instanceProfileArn?:string, javaVirtualEnv?:string, livyEndpoint?:string, logUri?:string, pythonVirtualEnv?:string, runtimeRole?:string, trustedCertificatesS3Uri?:string}, sparkGlueProperties?:array{additionalArgs?:array{connection?:string}, glueConnectionName?:string, glueVersion?:string, idleTimeout?:int, javaVirtualEnv?:string, numberOfWorkers?:int, pythonVirtualEnv?:string, workerType?:string}}, type:"ATHENA"|"BIGQUERY"|"DATABRICKS"|"DOCUMENTDB"|"DYNAMODB"|"HYPERPOD"|"IAM"|"MYSQL"|"OPENSEARCH"|"ORACLE"|"POSTGRESQL"|"REDSHIFT"|"SAPHANA"|"SNOWFLAKE"|"SPARK"|"SQLSERVER"|"TERADATA"|"VERTICA"|"WORKFLOWS_MWAA"}>, nextToken?:string}>
     */
    public function listConnections(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, environmentIdentifier?:string, maxResults?:int, name?:string, nextToken?:string, projectIdentifier:string, sortBy?:"NAME", sortOrder?:"ASCENDING"|"DESCENDING", type?:"ATHENA"|"BIGQUERY"|"DATABRICKS"|"DOCUMENTDB"|"DYNAMODB"|"HYPERPOD"|"IAM"|"MYSQL"|"OPENSEARCH"|"ORACLE"|"POSTGRESQL"|"REDSHIFT"|"SAPHANA"|"SNOWFLAKE"|"SPARK"|"SQLSERVER"|"TERADATA"|"VERTICA"|"WORKFLOWS_MWAA"} $args
     * @return \GuzzleHttp\Promise\Promise<array{items:array<array{connectionId:string, domainId:string, domainUnitId:string, environmentId?:string, name:string, physicalEndpoints:array<array{awsLocation?:array{accessRole?:string, awsAccountId?:string, awsRegion?:string, iamConnectionId?:string}, glueConnection?:array{athenaProperties?:array<string, string>, authenticationConfiguration?:array{authenticationType?:"BASIC"|"OAUTH2"|"CUSTOM", oAuth2Properties?:array{authorizationCodeProperties?:array{authorizationCode?:string, redirectUri?:string}, oAuth2ClientApplication?:array{aWSManagedClientApplicationReference?:string, userManagedClientApplicationClientId?:string}, oAuth2Credentials?:array{accessToken?:string, jwtToken?:string, refreshToken?:string, userManagedClientApplicationClientSecret?:string}, oAuth2GrantType?:"AUTHORIZATION_CODE"|"CLIENT_CREDENTIALS"|"JWT_BEARER", tokenUrl?:string, tokenUrlParametersMap?:array<string, string>}, secretArn?:string}, compatibleComputeEnvironments?:array<"SPARK"|"ATHENA"|"PYTHON">, connectionProperties?:array<string, string>, connectionSchemaVersion?:int, connectionType?:"ATHENA"|"BIGQUERY"|"DATABRICKS"|"DOCUMENTDB"|"DYNAMODB"|"HYPERPOD"|"IAM"|"MYSQL"|"OPENSEARCH"|"ORACLE"|"POSTGRESQL"|"REDSHIFT"|"SAPHANA"|"SNOWFLAKE"|"SPARK"|"SQLSERVER"|"TERADATA"|"VERTICA"|"WORKFLOWS_MWAA", creationTime?:int|string|\DateTimeInterface, description?:string, lastConnectionValidationTime?:int|string|\DateTimeInterface, lastUpdatedBy?:string, lastUpdatedTime?:int|string|\DateTimeInterface, matchCriteria?:array<string>, name?:string, physicalConnectionRequirements?:array{availabilityZone?:string, securityGroupIdList?:array<string>, subnetId?:string, subnetIdList?:array<string>}, pythonProperties?:array<string, string>, sparkProperties?:array<string, string>, status?:"CREATING"|"CREATE_FAILED"|"DELETING"|"DELETE_FAILED"|"READY"|"UPDATING"|"UPDATE_FAILED"|"DELETED", statusReason?:string}, glueConnectionName?:string, host?:string, port?:int, protocol?:"ATHENA"|"GLUE_INTERACTIVE_SESSION"|"HTTPS"|"JDBC"|"LIVY"|"ODBC"|"PRISM", stage?:string}>, projectId?:string, props?:array{athenaProperties?:array{workgroupName?:string}, glueProperties?:array{errorMessage?:string, status?:"CREATING"|"CREATE_FAILED"|"DELETING"|"DELETE_FAILED"|"READY"|"UPDATING"|"UPDATE_FAILED"|"DELETED"}, hyperPodProperties?:array{clusterArn?:string, clusterName:string, orchestrator?:"EKS"|"SLURM"}, iamProperties?:array{environmentId?:string, glueLineageSyncEnabled?:bool}, redshiftProperties?:array{credentials?:array{secretArn?:string, usernamePassword?:array{password:string, username:string}}, databaseName?:string, isProvisionedSecret?:bool, jdbcIamUrl?:string, jdbcUrl?:string, lineageSync?:array{enabled?:bool, lineageJobId?:string, schedule?:array{schedule?:mixed}}, redshiftTempDir?:string, status?:"CREATING"|"CREATE_FAILED"|"DELETING"|"DELETE_FAILED"|"READY"|"UPDATING"|"UPDATE_FAILED"|"DELETED", storage?:array{clusterName?:string, workgroupName?:string}}, sparkEmrProperties?:array{computeArn?:string, credentials?:array{password:string, username:string}, credentialsExpiration?:int|string|\DateTimeInterface, governanceType?:"AWS_MANAGED"|"USER_MANAGED", instanceProfileArn?:string, javaVirtualEnv?:string, livyEndpoint?:string, logUri?:string, pythonVirtualEnv?:string, runtimeRole?:string, trustedCertificatesS3Uri?:string}, sparkGlueProperties?:array{additionalArgs?:array{connection?:string}, glueConnectionName?:string, glueVersion?:string, idleTimeout?:int, javaVirtualEnv?:string, numberOfWorkers?:int, pythonVirtualEnv?:string, workerType?:string}}, type:"ATHENA"|"BIGQUERY"|"DATABRICKS"|"DOCUMENTDB"|"DYNAMODB"|"HYPERPOD"|"IAM"|"MYSQL"|"OPENSEARCH"|"ORACLE"|"POSTGRESQL"|"REDSHIFT"|"SAPHANA"|"SNOWFLAKE"|"SPARK"|"SQLSERVER"|"TERADATA"|"VERTICA"|"WORKFLOWS_MWAA"}>, nextToken?:string}>
     */
    public function listConnectionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{items:array<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, domainId?:string, id?:string, revision?:string}>, nextToken?:string}>
     */
    public function listDataProductRevisions(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items:array<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, domainId?:string, id?:string, revision?:string}>, nextToken?:string}>
     */
    public function listDataProductRevisionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string, maxResults?:int, nextToken?:string, status?:"FAILED"|"PUBLISHING_FAILED"|"SUCCEEDED_CREATED"|"SUCCEEDED_UPDATED"|"SKIPPED_ALREADY_IMPORTED"|"SKIPPED_ARCHIVED"|"SKIPPED_NO_ACCESS"|"UNCHANGED"} $args
     * @return \AWS\Result<array{items:array<array{createdAt:int|string|\DateTimeInterface, dataAssetId?:string, dataAssetStatus:"FAILED"|"PUBLISHING_FAILED"|"SUCCEEDED_CREATED"|"SUCCEEDED_UPDATED"|"SKIPPED_ALREADY_IMPORTED"|"SKIPPED_ARCHIVED"|"SKIPPED_NO_ACCESS"|"UNCHANGED", dataSourceRunId:string, database:string, errorMessage?:array{errorDetail?:string, errorType:"ACCESS_DENIED_EXCEPTION"|"CONFLICT_EXCEPTION"|"INTERNAL_SERVER_EXCEPTION"|"RESOURCE_NOT_FOUND_EXCEPTION"|"SERVICE_QUOTA_EXCEEDED_EXCEPTION"|"THROTTLING_EXCEPTION"|"VALIDATION_EXCEPTION"}, lineageSummary?:array{errorMessage?:string, eventId?:string, eventStatus?:"REQUESTED"|"PROCESSING"|"SUCCESS"|"FAILED"}, projectId:string, technicalDescription?:string, technicalName:string, updatedAt:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listDataSourceRunActivities(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string, maxResults?:int, nextToken?:string, status?:"FAILED"|"PUBLISHING_FAILED"|"SUCCEEDED_CREATED"|"SUCCEEDED_UPDATED"|"SKIPPED_ALREADY_IMPORTED"|"SKIPPED_ARCHIVED"|"SKIPPED_NO_ACCESS"|"UNCHANGED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{items:array<array{createdAt:int|string|\DateTimeInterface, dataAssetId?:string, dataAssetStatus:"FAILED"|"PUBLISHING_FAILED"|"SUCCEEDED_CREATED"|"SUCCEEDED_UPDATED"|"SKIPPED_ALREADY_IMPORTED"|"SKIPPED_ARCHIVED"|"SKIPPED_NO_ACCESS"|"UNCHANGED", dataSourceRunId:string, database:string, errorMessage?:array{errorDetail?:string, errorType:"ACCESS_DENIED_EXCEPTION"|"CONFLICT_EXCEPTION"|"INTERNAL_SERVER_EXCEPTION"|"RESOURCE_NOT_FOUND_EXCEPTION"|"SERVICE_QUOTA_EXCEEDED_EXCEPTION"|"THROTTLING_EXCEPTION"|"VALIDATION_EXCEPTION"}, lineageSummary?:array{errorMessage?:string, eventId?:string, eventStatus?:"REQUESTED"|"PROCESSING"|"SUCCESS"|"FAILED"}, projectId:string, technicalDescription?:string, technicalName:string, updatedAt:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listDataSourceRunActivitiesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{dataSourceIdentifier:string, domainIdentifier:string, maxResults?:int, nextToken?:string, status?:"REQUESTED"|"RUNNING"|"FAILED"|"PARTIALLY_SUCCEEDED"|"SUCCESS"} $args
     * @return \AWS\Result<array{items:array<array{createdAt:int|string|\DateTimeInterface, dataSourceId:string, errorMessage?:array{errorDetail?:string, errorType:"ACCESS_DENIED_EXCEPTION"|"CONFLICT_EXCEPTION"|"INTERNAL_SERVER_EXCEPTION"|"RESOURCE_NOT_FOUND_EXCEPTION"|"SERVICE_QUOTA_EXCEEDED_EXCEPTION"|"THROTTLING_EXCEPTION"|"VALIDATION_EXCEPTION"}, id:string, lineageSummary?:array{importStatus?:"IN_PROGRESS"|"SUCCESS"|"FAILED"|"PARTIALLY_SUCCEEDED"}, projectId:string, runStatisticsForAssets?:array{added?:int, failed?:int, skipped?:int, unchanged?:int, updated?:int}, startedAt?:int|string|\DateTimeInterface, status:"REQUESTED"|"RUNNING"|"FAILED"|"PARTIALLY_SUCCEEDED"|"SUCCESS", stoppedAt?:int|string|\DateTimeInterface, type:"PRIORITIZED"|"SCHEDULED", updatedAt:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listDataSourceRuns(array $args): \AWS\Result { }

    /**
     * @param array{dataSourceIdentifier:string, domainIdentifier:string, maxResults?:int, nextToken?:string, status?:"REQUESTED"|"RUNNING"|"FAILED"|"PARTIALLY_SUCCEEDED"|"SUCCESS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{items:array<array{createdAt:int|string|\DateTimeInterface, dataSourceId:string, errorMessage?:array{errorDetail?:string, errorType:"ACCESS_DENIED_EXCEPTION"|"CONFLICT_EXCEPTION"|"INTERNAL_SERVER_EXCEPTION"|"RESOURCE_NOT_FOUND_EXCEPTION"|"SERVICE_QUOTA_EXCEEDED_EXCEPTION"|"THROTTLING_EXCEPTION"|"VALIDATION_EXCEPTION"}, id:string, lineageSummary?:array{importStatus?:"IN_PROGRESS"|"SUCCESS"|"FAILED"|"PARTIALLY_SUCCEEDED"}, projectId:string, runStatisticsForAssets?:array{added?:int, failed?:int, skipped?:int, unchanged?:int, updated?:int}, startedAt?:int|string|\DateTimeInterface, status:"REQUESTED"|"RUNNING"|"FAILED"|"PARTIALLY_SUCCEEDED"|"SUCCESS", stoppedAt?:int|string|\DateTimeInterface, type:"PRIORITIZED"|"SCHEDULED", updatedAt:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listDataSourceRunsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectionIdentifier?:string, domainIdentifier:string, environmentIdentifier?:string, maxResults?:int, name?:string, nextToken?:string, projectIdentifier:string, status?:"CREATING"|"FAILED_CREATION"|"READY"|"UPDATING"|"FAILED_UPDATE"|"RUNNING"|"DELETING"|"FAILED_DELETION", type?:string} $args
     * @return \AWS\Result<array{items:array<array{connectionId?:string, createdAt?:int|string|\DateTimeInterface, dataSourceId:string, description?:string, domainId:string, enableSetting?:"ENABLED"|"DISABLED", environmentId?:string, lastRunAssetCount?:int, lastRunAt?:int|string|\DateTimeInterface, lastRunErrorMessage?:array{errorDetail?:string, errorType:"ACCESS_DENIED_EXCEPTION"|"CONFLICT_EXCEPTION"|"INTERNAL_SERVER_EXCEPTION"|"RESOURCE_NOT_FOUND_EXCEPTION"|"SERVICE_QUOTA_EXCEEDED_EXCEPTION"|"THROTTLING_EXCEPTION"|"VALIDATION_EXCEPTION"}, lastRunStatus?:"REQUESTED"|"RUNNING"|"FAILED"|"PARTIALLY_SUCCEEDED"|"SUCCESS", name:string, schedule?:array{schedule?:mixed, timezone?:"UTC"|"AFRICA_JOHANNESBURG"|"AMERICA_MONTREAL"|"AMERICA_SAO_PAULO"|"ASIA_BAHRAIN"|"ASIA_BANGKOK"|"ASIA_CALCUTTA"|"ASIA_DUBAI"|"ASIA_HONG_KONG"|"ASIA_JAKARTA"|"ASIA_KUALA_LUMPUR"|"ASIA_SEOUL"|"ASIA_SHANGHAI"|"ASIA_SINGAPORE"|"ASIA_TAIPEI"|"ASIA_TOKYO"|"AUSTRALIA_MELBOURNE"|"AUSTRALIA_SYDNEY"|"CANADA_CENTRAL"|"CET"|"CST6CDT"|"ETC_GMT"|"ETC_GMT0"|"ETC_GMT_ADD_0"|"ETC_GMT_ADD_1"|"ETC_GMT_ADD_10"|"ETC_GMT_ADD_11"|"ETC_GMT_ADD_12"|"ETC_GMT_ADD_2"|"ETC_GMT_ADD_3"|"ETC_GMT_ADD_4"|"ETC_GMT_ADD_5"|"ETC_GMT_ADD_6"|"ETC_GMT_ADD_7"|"ETC_GMT_ADD_8"|"ETC_GMT_ADD_9"|"ETC_GMT_NEG_0"|"ETC_GMT_NEG_1"|"ETC_GMT_NEG_10"|"ETC_GMT_NEG_11"|"ETC_GMT_NEG_12"|"ETC_GMT_NEG_13"|"ETC_GMT_NEG_14"|"ETC_GMT_NEG_2"|"ETC_GMT_NEG_3"|"ETC_GMT_NEG_4"|"ETC_GMT_NEG_5"|"ETC_GMT_NEG_6"|"ETC_GMT_NEG_7"|"ETC_GMT_NEG_8"|"ETC_GMT_NEG_9"|"EUROPE_DUBLIN"|"EUROPE_LONDON"|"EUROPE_PARIS"|"EUROPE_STOCKHOLM"|"EUROPE_ZURICH"|"ISRAEL"|"MEXICO_GENERAL"|"MST7MDT"|"PACIFIC_AUCKLAND"|"US_CENTRAL"|"US_EASTERN"|"US_MOUNTAIN"|"US_PACIFIC"}, status:"CREATING"|"FAILED_CREATION"|"READY"|"UPDATING"|"FAILED_UPDATE"|"RUNNING"|"DELETING"|"FAILED_DELETION", type:string, updatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listDataSources(array $args): \AWS\Result { }

    /**
     * @param array{connectionIdentifier?:string, domainIdentifier:string, environmentIdentifier?:string, maxResults?:int, name?:string, nextToken?:string, projectIdentifier:string, status?:"CREATING"|"FAILED_CREATION"|"READY"|"UPDATING"|"FAILED_UPDATE"|"RUNNING"|"DELETING"|"FAILED_DELETION", type?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items:array<array{connectionId?:string, createdAt?:int|string|\DateTimeInterface, dataSourceId:string, description?:string, domainId:string, enableSetting?:"ENABLED"|"DISABLED", environmentId?:string, lastRunAssetCount?:int, lastRunAt?:int|string|\DateTimeInterface, lastRunErrorMessage?:array{errorDetail?:string, errorType:"ACCESS_DENIED_EXCEPTION"|"CONFLICT_EXCEPTION"|"INTERNAL_SERVER_EXCEPTION"|"RESOURCE_NOT_FOUND_EXCEPTION"|"SERVICE_QUOTA_EXCEEDED_EXCEPTION"|"THROTTLING_EXCEPTION"|"VALIDATION_EXCEPTION"}, lastRunStatus?:"REQUESTED"|"RUNNING"|"FAILED"|"PARTIALLY_SUCCEEDED"|"SUCCESS", name:string, schedule?:array{schedule?:mixed, timezone?:"UTC"|"AFRICA_JOHANNESBURG"|"AMERICA_MONTREAL"|"AMERICA_SAO_PAULO"|"ASIA_BAHRAIN"|"ASIA_BANGKOK"|"ASIA_CALCUTTA"|"ASIA_DUBAI"|"ASIA_HONG_KONG"|"ASIA_JAKARTA"|"ASIA_KUALA_LUMPUR"|"ASIA_SEOUL"|"ASIA_SHANGHAI"|"ASIA_SINGAPORE"|"ASIA_TAIPEI"|"ASIA_TOKYO"|"AUSTRALIA_MELBOURNE"|"AUSTRALIA_SYDNEY"|"CANADA_CENTRAL"|"CET"|"CST6CDT"|"ETC_GMT"|"ETC_GMT0"|"ETC_GMT_ADD_0"|"ETC_GMT_ADD_1"|"ETC_GMT_ADD_10"|"ETC_GMT_ADD_11"|"ETC_GMT_ADD_12"|"ETC_GMT_ADD_2"|"ETC_GMT_ADD_3"|"ETC_GMT_ADD_4"|"ETC_GMT_ADD_5"|"ETC_GMT_ADD_6"|"ETC_GMT_ADD_7"|"ETC_GMT_ADD_8"|"ETC_GMT_ADD_9"|"ETC_GMT_NEG_0"|"ETC_GMT_NEG_1"|"ETC_GMT_NEG_10"|"ETC_GMT_NEG_11"|"ETC_GMT_NEG_12"|"ETC_GMT_NEG_13"|"ETC_GMT_NEG_14"|"ETC_GMT_NEG_2"|"ETC_GMT_NEG_3"|"ETC_GMT_NEG_4"|"ETC_GMT_NEG_5"|"ETC_GMT_NEG_6"|"ETC_GMT_NEG_7"|"ETC_GMT_NEG_8"|"ETC_GMT_NEG_9"|"EUROPE_DUBLIN"|"EUROPE_LONDON"|"EUROPE_PARIS"|"EUROPE_STOCKHOLM"|"EUROPE_ZURICH"|"ISRAEL"|"MEXICO_GENERAL"|"MST7MDT"|"PACIFIC_AUCKLAND"|"US_CENTRAL"|"US_EASTERN"|"US_MOUNTAIN"|"US_PACIFIC"}, status:"CREATING"|"FAILED_CREATION"|"READY"|"UPDATING"|"FAILED_UPDATE"|"RUNNING"|"DELETING"|"FAILED_DELETION", type:string, updatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listDataSourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, maxResults?:int, nextToken?:string, parentDomainUnitIdentifier:string} $args
     * @return \AWS\Result<array{items:array<array{id:string, name:string}>, nextToken?:string}>
     */
    public function listDomainUnitsForParent(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, maxResults?:int, nextToken?:string, parentDomainUnitIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items:array<array{id:string, name:string}>, nextToken?:string}>
     */
    public function listDomainUnitsForParentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, status?:"CREATING"|"AVAILABLE"|"CREATION_FAILED"|"DELETING"|"DELETED"|"DELETION_FAILED"} $args
     * @return \AWS\Result<array{items:array<array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, domainVersion?:"V1"|"V2", id:string, lastUpdatedAt?:int|string|\DateTimeInterface, managedAccountId:string, name:string, portalUrl?:string, status:"CREATING"|"AVAILABLE"|"CREATION_FAILED"|"DELETING"|"DELETED"|"DELETION_FAILED"}>, nextToken?:string}>
     */
    public function listDomains(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, status?:"CREATING"|"AVAILABLE"|"CREATION_FAILED"|"DELETING"|"DELETED"|"DELETION_FAILED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{items:array<array{arn:string, createdAt:int|string|\DateTimeInterface, description?:string, domainVersion?:"V1"|"V2", id:string, lastUpdatedAt?:int|string|\DateTimeInterface, managedAccountId:string, name:string, portalUrl?:string, status:"CREATING"|"AVAILABLE"|"CREATION_FAILED"|"DELETING"|"DELETED"|"DELETION_FAILED"}>, nextToken?:string}>
     */
    public function listDomainsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, entityIdentifier:string, entityType:"DOMAIN_UNIT", maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, owners:array<array{group?:array{groupId?:string}, user?:array{userId?:string}}>}>
     */
    public function listEntityOwners(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, entityIdentifier:string, entityType:"DOMAIN_UNIT", maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, owners:array<array{group?:array{groupId?:string}, user?:array{userId?:string}}>}>
     */
    public function listEntityOwnersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, environmentIdentifier:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{items?:array<array{description?:string, domainId:string, environmentId:string, id:string, name:string, parameters:array{awsConsoleLink?:array{uri?:string}}}>, nextToken?:string}>
     */
    public function listEnvironmentActions(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, environmentIdentifier:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{description?:string, domainId:string, environmentId:string, id:string, name:string, parameters:array{awsConsoleLink?:array{uri?:string}}}>, nextToken?:string}>
     */
    public function listEnvironmentActionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{items?:array<array{createdAt?:int|string|\DateTimeInterface, domainId:string, enabledRegions?:array<string>, environmentBlueprintId:string, environmentRolePermissionBoundary?:string, manageAccessRoleArn?:string, provisioningConfigurations?:array<array{lakeFormationConfiguration?:array{locationRegistrationExcludeS3Locations?:array<string>, locationRegistrationRole?:string}}>, provisioningRoleArn?:string, regionalParameters?:array<string, array<string, string>>, updatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listEnvironmentBlueprintConfigurations(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{createdAt?:int|string|\DateTimeInterface, domainId:string, enabledRegions?:array<string>, environmentBlueprintId:string, environmentRolePermissionBoundary?:string, manageAccessRoleArn?:string, provisioningConfigurations?:array<array{lakeFormationConfiguration?:array{locationRegistrationExcludeS3Locations?:array<string>, locationRegistrationRole?:string}}>, provisioningRoleArn?:string, regionalParameters?:array<string, array<string, string>>, updatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listEnvironmentBlueprintConfigurationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, managed?:bool, maxResults?:int, name?:string, nextToken?:string} $args
     * @return \AWS\Result<array{items:array<array{createdAt?:int|string|\DateTimeInterface, description?:string, id:string, name:string, provider:string, provisioningProperties:array{cloudFormation?:array{templateUrl:string}}, updatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listEnvironmentBlueprints(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, managed?:bool, maxResults?:int, name?:string, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items:array<array{createdAt?:int|string|\DateTimeInterface, description?:string, id:string, name:string, provider:string, provisioningProperties:array{cloudFormation?:array{templateUrl:string}}, updatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listEnvironmentBlueprintsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{awsAccountId?:string, awsAccountRegion?:string, domainIdentifier:string, environmentBlueprintIdentifier?:string, maxResults?:int, name?:string, nextToken?:string, projectIdentifier?:string} $args
     * @return \AWS\Result<array{items:array<array{awsAccountId?:string, awsAccountRegion?:string, createdAt?:int|string|\DateTimeInterface, createdBy:string, description?:string, domainId:string, environmentBlueprintId:string, id:string, name:string, projectId?:string, updatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listEnvironmentProfiles(array $args): \AWS\Result { }

    /**
     * @param array{awsAccountId?:string, awsAccountRegion?:string, domainIdentifier:string, environmentBlueprintIdentifier?:string, maxResults?:int, name?:string, nextToken?:string, projectIdentifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items:array<array{awsAccountId?:string, awsAccountRegion?:string, createdAt?:int|string|\DateTimeInterface, createdBy:string, description?:string, domainId:string, environmentBlueprintId:string, id:string, name:string, projectId?:string, updatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listEnvironmentProfilesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{awsAccountId?:string, awsAccountRegion?:string, domainIdentifier:string, environmentBlueprintIdentifier?:string, environmentProfileIdentifier?:string, maxResults?:int, name?:string, nextToken?:string, projectIdentifier:string, provider?:string, status?:"ACTIVE"|"CREATING"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"UPDATE_FAILED"|"DELETE_FAILED"|"VALIDATION_FAILED"|"SUSPENDED"|"DISABLED"|"EXPIRED"|"DELETED"|"INACCESSIBLE"} $args
     * @return \AWS\Result<array{items:array<array{awsAccountId?:string, awsAccountRegion?:string, createdAt?:int|string|\DateTimeInterface, createdBy:string, description?:string, domainId:string, environmentProfileId?:string, id?:string, name:string, projectId:string, provider:string, status?:"ACTIVE"|"CREATING"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"UPDATE_FAILED"|"DELETE_FAILED"|"VALIDATION_FAILED"|"SUSPENDED"|"DISABLED"|"EXPIRED"|"DELETED"|"INACCESSIBLE", updatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listEnvironments(array $args): \AWS\Result { }

    /**
     * @param array{awsAccountId?:string, awsAccountRegion?:string, domainIdentifier:string, environmentBlueprintIdentifier?:string, environmentProfileIdentifier?:string, maxResults?:int, name?:string, nextToken?:string, projectIdentifier:string, provider?:string, status?:"ACTIVE"|"CREATING"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"UPDATE_FAILED"|"DELETE_FAILED"|"VALIDATION_FAILED"|"SUSPENDED"|"DISABLED"|"EXPIRED"|"DELETED"|"INACCESSIBLE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{items:array<array{awsAccountId?:string, awsAccountRegion?:string, createdAt?:int|string|\DateTimeInterface, createdBy:string, description?:string, domainId:string, environmentProfileId?:string, id?:string, name:string, projectId:string, provider:string, status?:"ACTIVE"|"CREATING"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"UPDATE_FAILED"|"DELETE_FAILED"|"VALIDATION_FAILED"|"SUSPENDED"|"DISABLED"|"EXPIRED"|"DELETED"|"INACCESSIBLE", updatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listEnvironmentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, jobIdentifier:string, maxResults?:int, nextToken?:string, sortOrder?:"ASCENDING"|"DESCENDING", status?:"SCHEDULED"|"IN_PROGRESS"|"SUCCESS"|"PARTIALLY_SUCCEEDED"|"FAILED"|"ABORTED"|"TIMED_OUT"|"CANCELED"} $args
     * @return \AWS\Result<array{items?:array<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, domainId?:string, endTime?:int|string|\DateTimeInterface, error?:array{message:string}, jobId?:string, jobType?:"LINEAGE", runId?:string, runMode?:"SCHEDULED"|"ON_DEMAND", startTime?:int|string|\DateTimeInterface, status?:"SCHEDULED"|"IN_PROGRESS"|"SUCCESS"|"PARTIALLY_SUCCEEDED"|"FAILED"|"ABORTED"|"TIMED_OUT"|"CANCELED"}>, nextToken?:string}>
     */
    public function listJobRuns(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, jobIdentifier:string, maxResults?:int, nextToken?:string, sortOrder?:"ASCENDING"|"DESCENDING", status?:"SCHEDULED"|"IN_PROGRESS"|"SUCCESS"|"PARTIALLY_SUCCEEDED"|"FAILED"|"ABORTED"|"TIMED_OUT"|"CANCELED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, domainId?:string, endTime?:int|string|\DateTimeInterface, error?:array{message:string}, jobId?:string, jobType?:"LINEAGE", runId?:string, runMode?:"SCHEDULED"|"ON_DEMAND", startTime?:int|string|\DateTimeInterface, status?:"SCHEDULED"|"IN_PROGRESS"|"SUCCESS"|"PARTIALLY_SUCCEEDED"|"FAILED"|"ABORTED"|"TIMED_OUT"|"CANCELED"}>, nextToken?:string}>
     */
    public function listJobRunsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, maxResults?:int, nextToken?:string, processingStatus?:"REQUESTED"|"PROCESSING"|"SUCCESS"|"FAILED", sortOrder?:"ASCENDING"|"DESCENDING", timestampAfter?:int|string|\DateTimeInterface, timestampBefore?:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{items?:array<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, domainId?:string, eventSummary?:array{openLineageRunEventSummary?:array{eventType?:"START"|"RUNNING"|"COMPLETE"|"ABORT"|"FAIL"|"OTHER", inputs?:array<array{name?:string, namespace?:string}>, job?:array{name?:string, namespace?:string}, outputs?:array<array{name?:string, namespace?:string}>, runId?:string}}, eventTime?:int|string|\DateTimeInterface, id?:string, processingStatus?:"REQUESTED"|"PROCESSING"|"SUCCESS"|"FAILED"}>, nextToken?:string}>
     */
    public function listLineageEvents(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, maxResults?:int, nextToken?:string, processingStatus?:"REQUESTED"|"PROCESSING"|"SUCCESS"|"FAILED", sortOrder?:"ASCENDING"|"DESCENDING", timestampAfter?:int|string|\DateTimeInterface, timestampBefore?:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, domainId?:string, eventSummary?:array{openLineageRunEventSummary?:array{eventType?:"START"|"RUNNING"|"COMPLETE"|"ABORT"|"FAIL"|"OTHER", inputs?:array<array{name?:string, namespace?:string}>, job?:array{name?:string, namespace?:string}, outputs?:array<array{name?:string, namespace?:string}>, runId?:string}}, eventTime?:int|string|\DateTimeInterface, id?:string, processingStatus?:"REQUESTED"|"PROCESSING"|"SUCCESS"|"FAILED"}>, nextToken?:string}>
     */
    public function listLineageEventsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{direction?:"UPSTREAM"|"DOWNSTREAM", domainIdentifier:string, eventTimestampGTE?:int|string|\DateTimeInterface, eventTimestampLTE?:int|string|\DateTimeInterface, identifier:string, maxResults?:int, nextToken?:string, sortOrder?:"ASCENDING"|"DESCENDING"} $args
     * @return \AWS\Result<array{nextToken?:string, nodes?:array<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, eventTimestamp?:int|string|\DateTimeInterface, id:string, name?:string, sourceIdentifier?:string, typeName:string, typeRevision?:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>}>
     */
    public function listLineageNodeHistory(array $args): \AWS\Result { }

    /**
     * @param array{direction?:"UPSTREAM"|"DOWNSTREAM", domainIdentifier:string, eventTimestampGTE?:int|string|\DateTimeInterface, eventTimestampLTE?:int|string|\DateTimeInterface, identifier:string, maxResults?:int, nextToken?:string, sortOrder?:"ASCENDING"|"DESCENDING"} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, nodes?:array<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, eventTimestamp?:int|string|\DateTimeInterface, id:string, name?:string, sourceIdentifier?:string, typeName:string, typeRevision?:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>}>
     */
    public function listLineageNodeHistoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, maxResults?:int, nextToken?:string, status?:"SUBMITTED"|"IN_PROGRESS"|"CANCELED"|"SUCCEEDED"|"FAILED", type?:"BUSINESS_DESCRIPTIONS"} $args
     * @return \AWS\Result<array{items?:array<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, domainId:string, id:string, owningProjectId:string, status?:"SUBMITTED"|"IN_PROGRESS"|"CANCELED"|"SUCCEEDED"|"FAILED", target?:array{identifier:string, revision?:string, type:"ASSET"}, type?:"BUSINESS_DESCRIPTIONS"}>, nextToken?:string}>
     */
    public function listMetadataGenerationRuns(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, maxResults?:int, nextToken?:string, status?:"SUBMITTED"|"IN_PROGRESS"|"CANCELED"|"SUCCEEDED"|"FAILED", type?:"BUSINESS_DESCRIPTIONS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, domainId:string, id:string, owningProjectId:string, status?:"SUBMITTED"|"IN_PROGRESS"|"CANCELED"|"SUCCEEDED"|"FAILED", target?:array{identifier:string, revision?:string, type:"ASSET"}, type?:"BUSINESS_DESCRIPTIONS"}>, nextToken?:string}>
     */
    public function listMetadataGenerationRunsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{afterTimestamp?:int|string|\DateTimeInterface, beforeTimestamp?:int|string|\DateTimeInterface, domainIdentifier:string, maxResults?:int, nextToken?:string, subjects?:array<string>, taskStatus?:"ACTIVE"|"INACTIVE", type:"TASK"|"EVENT"} $args
     * @return \AWS\Result<array{nextToken?:string, notifications?:array<array{actionLink:string, creationTimestamp:int|string|\DateTimeInterface, domainIdentifier:string, identifier:string, lastUpdatedTimestamp:int|string|\DateTimeInterface, message:string, metadata?:array<string, string>, status?:"ACTIVE"|"INACTIVE", title:string, topic:array{resource:array{id:string, name?:string, type:"PROJECT"}, role:"PROJECT_OWNER"|"PROJECT_CONTRIBUTOR"|"PROJECT_VIEWER"|"DOMAIN_OWNER"|"PROJECT_SUBSCRIBER", subject:string}, type:"TASK"|"EVENT"}>}>
     */
    public function listNotifications(array $args): \AWS\Result { }

    /**
     * @param array{afterTimestamp?:int|string|\DateTimeInterface, beforeTimestamp?:int|string|\DateTimeInterface, domainIdentifier:string, maxResults?:int, nextToken?:string, subjects?:array<string>, taskStatus?:"ACTIVE"|"INACTIVE", type:"TASK"|"EVENT"} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, notifications?:array<array{actionLink:string, creationTimestamp:int|string|\DateTimeInterface, domainIdentifier:string, identifier:string, lastUpdatedTimestamp:int|string|\DateTimeInterface, message:string, metadata?:array<string, string>, status?:"ACTIVE"|"INACTIVE", title:string, topic:array{resource:array{id:string, name?:string, type:"PROJECT"}, role:"PROJECT_OWNER"|"PROJECT_CONTRIBUTOR"|"PROJECT_VIEWER"|"DOMAIN_OWNER"|"PROJECT_SUBSCRIBER", subject:string}, type:"TASK"|"EVENT"}>}>
     */
    public function listNotificationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, entityIdentifier:string, entityType:"DOMAIN_UNIT"|"ENVIRONMENT_BLUEPRINT_CONFIGURATION"|"ENVIRONMENT_PROFILE", maxResults?:int, nextToken?:string, policyType:"CREATE_DOMAIN_UNIT"|"OVERRIDE_DOMAIN_UNIT_OWNERS"|"ADD_TO_PROJECT_MEMBER_POOL"|"OVERRIDE_PROJECT_OWNERS"|"CREATE_GLOSSARY"|"CREATE_FORM_TYPE"|"CREATE_ASSET_TYPE"|"CREATE_PROJECT"|"CREATE_ENVIRONMENT_PROFILE"|"DELEGATE_CREATE_ENVIRONMENT_PROFILE"|"CREATE_ENVIRONMENT"|"CREATE_ENVIRONMENT_FROM_BLUEPRINT"|"CREATE_PROJECT_FROM_PROJECT_PROFILE"} $args
     * @return \AWS\Result<array{grantList:array<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, detail?:array{addToProjectMemberPool?:array{includeChildDomainUnits?:bool}, createAssetType?:array{includeChildDomainUnits?:bool}, createDomainUnit?:array{includeChildDomainUnits?:bool}, createEnvironment?:array{}, createEnvironmentFromBlueprint?:array{}, createEnvironmentProfile?:array{domainUnitId?:string}, createFormType?:array{includeChildDomainUnits?:bool}, createGlossary?:array{includeChildDomainUnits?:bool}, createProject?:array{includeChildDomainUnits?:bool}, createProjectFromProjectProfile?:array{includeChildDomainUnits?:bool, projectProfiles?:array<string>}, delegateCreateEnvironmentProfile?:array{}, overrideDomainUnitOwners?:array{includeChildDomainUnits?:bool}, overrideProjectOwners?:array{includeChildDomainUnits?:bool}}, principal?:array{domainUnit?:array{domainUnitDesignation:"OWNER", domainUnitGrantFilter?:array{allDomainUnitsGrantFilter?:array{}}, domainUnitIdentifier?:string}, group?:array{groupIdentifier?:string}, project?:array{projectDesignation:"OWNER"|"CONTRIBUTOR"|"PROJECT_CATALOG_STEWARD", projectGrantFilter?:array{domainUnitFilter?:array{domainUnit:string, includeChildDomainUnits?:bool}}, projectIdentifier?:string}, user?:array{allUsersGrantFilter?:array{}, userIdentifier?:string}}}>, nextToken?:string}>
     */
    public function listPolicyGrants(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, entityIdentifier:string, entityType:"DOMAIN_UNIT"|"ENVIRONMENT_BLUEPRINT_CONFIGURATION"|"ENVIRONMENT_PROFILE", maxResults?:int, nextToken?:string, policyType:"CREATE_DOMAIN_UNIT"|"OVERRIDE_DOMAIN_UNIT_OWNERS"|"ADD_TO_PROJECT_MEMBER_POOL"|"OVERRIDE_PROJECT_OWNERS"|"CREATE_GLOSSARY"|"CREATE_FORM_TYPE"|"CREATE_ASSET_TYPE"|"CREATE_PROJECT"|"CREATE_ENVIRONMENT_PROFILE"|"DELEGATE_CREATE_ENVIRONMENT_PROFILE"|"CREATE_ENVIRONMENT"|"CREATE_ENVIRONMENT_FROM_BLUEPRINT"|"CREATE_PROJECT_FROM_PROJECT_PROFILE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{grantList:array<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, detail?:array{addToProjectMemberPool?:array{includeChildDomainUnits?:bool}, createAssetType?:array{includeChildDomainUnits?:bool}, createDomainUnit?:array{includeChildDomainUnits?:bool}, createEnvironment?:array{}, createEnvironmentFromBlueprint?:array{}, createEnvironmentProfile?:array{domainUnitId?:string}, createFormType?:array{includeChildDomainUnits?:bool}, createGlossary?:array{includeChildDomainUnits?:bool}, createProject?:array{includeChildDomainUnits?:bool}, createProjectFromProjectProfile?:array{includeChildDomainUnits?:bool, projectProfiles?:array<string>}, delegateCreateEnvironmentProfile?:array{}, overrideDomainUnitOwners?:array{includeChildDomainUnits?:bool}, overrideProjectOwners?:array{includeChildDomainUnits?:bool}}, principal?:array{domainUnit?:array{domainUnitDesignation:"OWNER", domainUnitGrantFilter?:array{allDomainUnitsGrantFilter?:array{}}, domainUnitIdentifier?:string}, group?:array{groupIdentifier?:string}, project?:array{projectDesignation:"OWNER"|"CONTRIBUTOR"|"PROJECT_CATALOG_STEWARD", projectGrantFilter?:array{domainUnitFilter?:array{domainUnit:string, includeChildDomainUnits?:bool}}, projectIdentifier?:string}, user?:array{allUsersGrantFilter?:array{}, userIdentifier?:string}}}>, nextToken?:string}>
     */
    public function listPolicyGrantsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, maxResults?:int, nextToken?:string, projectIdentifier:string, sortBy?:"NAME", sortOrder?:"ASCENDING"|"DESCENDING"} $args
     * @return \AWS\Result<array{members:array<array{designation:"PROJECT_OWNER"|"PROJECT_CONTRIBUTOR"|"PROJECT_CATALOG_VIEWER"|"PROJECT_CATALOG_CONSUMER"|"PROJECT_CATALOG_STEWARD", memberDetails:array{group?:array{groupId:string}, user?:array{userId:string}}}>, nextToken?:string}>
     */
    public function listProjectMemberships(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, maxResults?:int, nextToken?:string, projectIdentifier:string, sortBy?:"NAME", sortOrder?:"ASCENDING"|"DESCENDING"} $args
     * @return \GuzzleHttp\Promise\Promise<array{members:array<array{designation:"PROJECT_OWNER"|"PROJECT_CONTRIBUTOR"|"PROJECT_CATALOG_VIEWER"|"PROJECT_CATALOG_CONSUMER"|"PROJECT_CATALOG_STEWARD", memberDetails:array{group?:array{groupId:string}, user?:array{userId:string}}}>, nextToken?:string}>
     */
    public function listProjectMembershipsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, maxResults?:int, name?:string, nextToken?:string, sortBy?:"NAME", sortOrder?:"ASCENDING"|"DESCENDING"} $args
     * @return \AWS\Result<array{items?:array<array{createdAt?:int|string|\DateTimeInterface, createdBy:string, description?:string, domainId:string, domainUnitId?:string, id:string, lastUpdatedAt?:int|string|\DateTimeInterface, name:string, status?:"ENABLED"|"DISABLED"}>, nextToken?:string}>
     */
    public function listProjectProfiles(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, maxResults?:int, name?:string, nextToken?:string, sortBy?:"NAME", sortOrder?:"ASCENDING"|"DESCENDING"} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{createdAt?:int|string|\DateTimeInterface, createdBy:string, description?:string, domainId:string, domainUnitId?:string, id:string, lastUpdatedAt?:int|string|\DateTimeInterface, name:string, status?:"ENABLED"|"DISABLED"}>, nextToken?:string}>
     */
    public function listProjectProfilesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, groupIdentifier?:string, maxResults?:int, name?:string, nextToken?:string, userIdentifier?:string} $args
     * @return \AWS\Result<array{items?:array<array{createdAt?:int|string|\DateTimeInterface, createdBy:string, description?:string, domainId:string, domainUnitId?:string, failureReasons?:array<array{code?:string, message?:string}>, id:string, name:string, projectStatus?:"ACTIVE"|"DELETING"|"DELETE_FAILED", updatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listProjects(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, groupIdentifier?:string, maxResults?:int, name?:string, nextToken?:string, userIdentifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{createdAt?:int|string|\DateTimeInterface, createdBy:string, description?:string, domainId:string, domainUnitId?:string, failureReasons?:array<array{code?:string, message?:string}>, id:string, name:string, projectStatus?:"ACTIVE"|"DELETING"|"DELETE_FAILED", updatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listProjectsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{action?:"CREATE_SUBSCRIPTION_REQUEST", assetTypes?:array<string>, dataProduct?:bool, domainIdentifier:string, includeCascaded?:bool, maxResults?:int, nextToken?:string, projectIds?:array<string>, ruleType?:"METADATA_FORM_ENFORCEMENT", targetIdentifier:string, targetType:"DOMAIN_UNIT"} $args
     * @return \AWS\Result<array{items:array<array{action?:"CREATE_SUBSCRIPTION_REQUEST", identifier?:string, lastUpdatedBy?:string, name?:string, revision?:string, ruleType?:"METADATA_FORM_ENFORCEMENT", scope?:array{assetType?:array{selectionMode:"ALL"|"SPECIFIC", specificAssetTypes?:array<string>}, dataProduct?:bool, project?:array{selectionMode:"ALL"|"SPECIFIC", specificProjects?:array<string>}}, target?:array{domainUnitTarget?:array{domainUnitId:string, includeChildDomainUnits?:bool}}, targetType?:"DOMAIN_UNIT", updatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listRules(array $args): \AWS\Result { }

    /**
     * @param array{action?:"CREATE_SUBSCRIPTION_REQUEST", assetTypes?:array<string>, dataProduct?:bool, domainIdentifier:string, includeCascaded?:bool, maxResults?:int, nextToken?:string, projectIds?:array<string>, ruleType?:"METADATA_FORM_ENFORCEMENT", targetIdentifier:string, targetType:"DOMAIN_UNIT"} $args
     * @return \GuzzleHttp\Promise\Promise<array{items:array<array{action?:"CREATE_SUBSCRIPTION_REQUEST", identifier?:string, lastUpdatedBy?:string, name?:string, revision?:string, ruleType?:"METADATA_FORM_ENFORCEMENT", scope?:array{assetType?:array{selectionMode:"ALL"|"SPECIFIC", specificAssetTypes?:array<string>}, dataProduct?:bool, project?:array{selectionMode:"ALL"|"SPECIFIC", specificProjects?:array<string>}}, target?:array{domainUnitTarget?:array{domainUnitId:string, includeChildDomainUnits?:bool}}, targetType?:"DOMAIN_UNIT", updatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listRulesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, environmentId?:string, maxResults?:int, nextToken?:string, owningProjectId?:string, sortBy?:"CREATED_AT"|"UPDATED_AT", sortOrder?:"ASCENDING"|"DESCENDING", subscribedListingId?:string, subscriptionId?:string, subscriptionTargetId?:string} $args
     * @return \AWS\Result<array{items:array<array{assets?:array<array{assetId:string, assetRevision:string, assetScope?:array{assetId:string, errorMessage?:string, filterIds:array<string>, status:string}, failureCause?:array{message?:string}, failureTimestamp?:int|string|\DateTimeInterface, grantedTimestamp?:int|string|\DateTimeInterface, status:"GRANT_PENDING"|"REVOKE_PENDING"|"GRANT_IN_PROGRESS"|"REVOKE_IN_PROGRESS"|"GRANTED"|"REVOKED"|"GRANT_FAILED"|"REVOKE_FAILED", targetName?:string}>, createdAt:int|string|\DateTimeInterface, createdBy:string, domainId:string, grantedEntity:array{listing?:array{id:string, revision:string}}, id:string, status:"PENDING"|"IN_PROGRESS"|"GRANT_FAILED"|"REVOKE_FAILED"|"GRANT_AND_REVOKE_FAILED"|"COMPLETED"|"INACCESSIBLE", subscriptionId?:string, subscriptionTargetId:string, updatedAt:int|string|\DateTimeInterface, updatedBy?:string}>, nextToken?:string}>
     */
    public function listSubscriptionGrants(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, environmentId?:string, maxResults?:int, nextToken?:string, owningProjectId?:string, sortBy?:"CREATED_AT"|"UPDATED_AT", sortOrder?:"ASCENDING"|"DESCENDING", subscribedListingId?:string, subscriptionId?:string, subscriptionTargetId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items:array<array{assets?:array<array{assetId:string, assetRevision:string, assetScope?:array{assetId:string, errorMessage?:string, filterIds:array<string>, status:string}, failureCause?:array{message?:string}, failureTimestamp?:int|string|\DateTimeInterface, grantedTimestamp?:int|string|\DateTimeInterface, status:"GRANT_PENDING"|"REVOKE_PENDING"|"GRANT_IN_PROGRESS"|"REVOKE_IN_PROGRESS"|"GRANTED"|"REVOKED"|"GRANT_FAILED"|"REVOKE_FAILED", targetName?:string}>, createdAt:int|string|\DateTimeInterface, createdBy:string, domainId:string, grantedEntity:array{listing?:array{id:string, revision:string}}, id:string, status:"PENDING"|"IN_PROGRESS"|"GRANT_FAILED"|"REVOKE_FAILED"|"GRANT_AND_REVOKE_FAILED"|"COMPLETED"|"INACCESSIBLE", subscriptionId?:string, subscriptionTargetId:string, updatedAt:int|string|\DateTimeInterface, updatedBy?:string}>, nextToken?:string}>
     */
    public function listSubscriptionGrantsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{approverProjectId?:string, domainIdentifier:string, maxResults?:int, nextToken?:string, owningProjectId?:string, sortBy?:"CREATED_AT"|"UPDATED_AT", sortOrder?:"ASCENDING"|"DESCENDING", status?:"PENDING"|"ACCEPTED"|"REJECTED", subscribedListingId?:string} $args
     * @return \AWS\Result<array{items:array<array{createdAt:int|string|\DateTimeInterface, createdBy:string, decisionComment?:string, domainId:string, existingSubscriptionId?:string, id:string, metadataFormsSummary?:array<array{formName?:string, typeName:string, typeRevision:string}>, requestReason:string, reviewerId?:string, status:"PENDING"|"ACCEPTED"|"REJECTED", subscribedListings:array<array{description:string, id:string, item:array{assetListing?:array{assetScope?:array{assetId:string, errorMessage?:string, filterIds:array<string>, status:string}, entityId?:string, entityRevision?:string, entityType?:string, forms?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>}, productListing?:array{assetListings?:array<array{entityId?:string, entityRevision?:string, entityType?:string}>, description?:string, entityId?:string, entityRevision?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>, name?:string}}, name:string, ownerProjectId:string, ownerProjectName?:string, revision?:string}>, subscribedPrincipals:array<array{project?:array{id?:string, name?:string}}>, updatedAt:int|string|\DateTimeInterface, updatedBy?:string}>, nextToken?:string}>
     */
    public function listSubscriptionRequests(array $args): \AWS\Result { }

    /**
     * @param array{approverProjectId?:string, domainIdentifier:string, maxResults?:int, nextToken?:string, owningProjectId?:string, sortBy?:"CREATED_AT"|"UPDATED_AT", sortOrder?:"ASCENDING"|"DESCENDING", status?:"PENDING"|"ACCEPTED"|"REJECTED", subscribedListingId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items:array<array{createdAt:int|string|\DateTimeInterface, createdBy:string, decisionComment?:string, domainId:string, existingSubscriptionId?:string, id:string, metadataFormsSummary?:array<array{formName?:string, typeName:string, typeRevision:string}>, requestReason:string, reviewerId?:string, status:"PENDING"|"ACCEPTED"|"REJECTED", subscribedListings:array<array{description:string, id:string, item:array{assetListing?:array{assetScope?:array{assetId:string, errorMessage?:string, filterIds:array<string>, status:string}, entityId?:string, entityRevision?:string, entityType?:string, forms?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>}, productListing?:array{assetListings?:array<array{entityId?:string, entityRevision?:string, entityType?:string}>, description?:string, entityId?:string, entityRevision?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>, name?:string}}, name:string, ownerProjectId:string, ownerProjectName?:string, revision?:string}>, subscribedPrincipals:array<array{project?:array{id?:string, name?:string}}>, updatedAt:int|string|\DateTimeInterface, updatedBy?:string}>, nextToken?:string}>
     */
    public function listSubscriptionRequestsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, environmentIdentifier:string, maxResults?:int, nextToken?:string, sortBy?:"CREATED_AT"|"UPDATED_AT", sortOrder?:"ASCENDING"|"DESCENDING"} $args
     * @return \AWS\Result<array{items:array<array{applicableAssetTypes:array<string>, authorizedPrincipals:array<string>, createdAt:int|string|\DateTimeInterface, createdBy:string, domainId:string, environmentId:string, id:string, manageAccessRole?:string, name:string, projectId:string, provider:string, subscriptionTargetConfig:array<array{content:string, formName:string}>, type:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>, nextToken?:string}>
     */
    public function listSubscriptionTargets(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, environmentIdentifier:string, maxResults?:int, nextToken?:string, sortBy?:"CREATED_AT"|"UPDATED_AT", sortOrder?:"ASCENDING"|"DESCENDING"} $args
     * @return \GuzzleHttp\Promise\Promise<array{items:array<array{applicableAssetTypes:array<string>, authorizedPrincipals:array<string>, createdAt:int|string|\DateTimeInterface, createdBy:string, domainId:string, environmentId:string, id:string, manageAccessRole?:string, name:string, projectId:string, provider:string, subscriptionTargetConfig:array<array{content:string, formName:string}>, type:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>, nextToken?:string}>
     */
    public function listSubscriptionTargetsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{approverProjectId?:string, domainIdentifier:string, maxResults?:int, nextToken?:string, owningProjectId?:string, sortBy?:"CREATED_AT"|"UPDATED_AT", sortOrder?:"ASCENDING"|"DESCENDING", status?:"APPROVED"|"REVOKED"|"CANCELLED", subscribedListingId?:string, subscriptionRequestIdentifier?:string} $args
     * @return \AWS\Result<array{items:array<array{createdAt:int|string|\DateTimeInterface, createdBy:string, domainId:string, id:string, retainPermissions?:bool, status:"APPROVED"|"REVOKED"|"CANCELLED", subscribedListing:array{description:string, id:string, item:array{assetListing?:array{assetScope?:array{assetId:string, errorMessage?:string, filterIds:array<string>, status:string}, entityId?:string, entityRevision?:string, entityType?:string, forms?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>}, productListing?:array{assetListings?:array<array{entityId?:string, entityRevision?:string, entityType?:string}>, description?:string, entityId?:string, entityRevision?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>, name?:string}}, name:string, ownerProjectId:string, ownerProjectName?:string, revision?:string}, subscribedPrincipal:array{project?:array{id?:string, name?:string}}, subscriptionRequestId?:string, updatedAt:int|string|\DateTimeInterface, updatedBy?:string}>, nextToken?:string}>
     */
    public function listSubscriptions(array $args): \AWS\Result { }

    /**
     * @param array{approverProjectId?:string, domainIdentifier:string, maxResults?:int, nextToken?:string, owningProjectId?:string, sortBy?:"CREATED_AT"|"UPDATED_AT", sortOrder?:"ASCENDING"|"DESCENDING", status?:"APPROVED"|"REVOKED"|"CANCELLED", subscribedListingId?:string, subscriptionRequestIdentifier?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items:array<array{createdAt:int|string|\DateTimeInterface, createdBy:string, domainId:string, id:string, retainPermissions?:bool, status:"APPROVED"|"REVOKED"|"CANCELLED", subscribedListing:array{description:string, id:string, item:array{assetListing?:array{assetScope?:array{assetId:string, errorMessage?:string, filterIds:array<string>, status:string}, entityId?:string, entityRevision?:string, entityType?:string, forms?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>}, productListing?:array{assetListings?:array<array{entityId?:string, entityRevision?:string, entityType?:string}>, description?:string, entityId?:string, entityRevision?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>, name?:string}}, name:string, ownerProjectId:string, ownerProjectName?:string, revision?:string}, subscribedPrincipal:array{project?:array{id?:string, name?:string}}, subscriptionRequestId?:string, updatedAt:int|string|\DateTimeInterface, updatedBy?:string}>, nextToken?:string}>
     */
    public function listSubscriptionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{domainIdentifier:string, endedAt?:int|string|\DateTimeInterface, entityIdentifier:string, entityType:"ASSET"|"LISTING", formName:string, maxResults?:int, nextToken?:string, startedAt?:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{items?:array<array{contentSummary?:string, formName:string, id?:string, timestamp:int|string|\DateTimeInterface, typeIdentifier:string, typeRevision?:string}>, nextToken?:string}>
     */
    public function listTimeSeriesDataPoints(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, endedAt?:int|string|\DateTimeInterface, entityIdentifier:string, entityType:"ASSET"|"LISTING", formName:string, maxResults?:int, nextToken?:string, startedAt?:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{contentSummary?:string, formName:string, id?:string, timestamp:int|string|\DateTimeInterface, typeIdentifier:string, typeRevision?:string}>, nextToken?:string}>
     */
    public function listTimeSeriesDataPointsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, domainIdentifier:string, event:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \AWS\Result<array{domainId?:string, id?:string}>
     */
    public function postLineageEvent(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, domainIdentifier:string, event:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{domainId?:string, id?:string}>
     */
    public function postLineageEventAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, domainIdentifier:string, entityIdentifier:string, entityType:"ASSET"|"LISTING", forms:array<array{content?:string, formName:string, timestamp:int|string|\DateTimeInterface, typeIdentifier:string, typeRevision?:string}>} $args
     * @return \AWS\Result<array{domainId?:string, entityId?:string, entityType?:"ASSET"|"LISTING", forms?:array<array{content?:string, formName:string, id?:string, timestamp:int|string|\DateTimeInterface, typeIdentifier:string, typeRevision?:string}>}>
     */
    public function postTimeSeriesDataPoints(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, domainIdentifier:string, entityIdentifier:string, entityType:"ASSET"|"LISTING", forms:array<array{content?:string, formName:string, timestamp:int|string|\DateTimeInterface, typeIdentifier:string, typeRevision?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{domainId?:string, entityId?:string, entityType?:"ASSET"|"LISTING", forms?:array<array{content?:string, formName:string, id?:string, timestamp:int|string|\DateTimeInterface, typeIdentifier:string, typeRevision?:string}>}>
     */
    public function postTimeSeriesDataPointsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, enabledRegions:array<string>, environmentBlueprintIdentifier:string, environmentRolePermissionBoundary?:string, manageAccessRoleArn?:string, provisioningConfigurations?:array<array{lakeFormationConfiguration?:array{locationRegistrationExcludeS3Locations?:array<string>, locationRegistrationRole?:string}}>, provisioningRoleArn?:string, regionalParameters?:array<string, array<string, string>>} $args
     * @return \AWS\Result<array{createdAt?:int|string|\DateTimeInterface, domainId:string, enabledRegions?:array<string>, environmentBlueprintId:string, environmentRolePermissionBoundary?:string, manageAccessRoleArn?:string, provisioningConfigurations?:array<array{lakeFormationConfiguration?:array{locationRegistrationExcludeS3Locations?:array<string>, locationRegistrationRole?:string}}>, provisioningRoleArn?:string, regionalParameters?:array<string, array<string, string>>, updatedAt?:int|string|\DateTimeInterface}>
     */
    public function putEnvironmentBlueprintConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, enabledRegions:array<string>, environmentBlueprintIdentifier:string, environmentRolePermissionBoundary?:string, manageAccessRoleArn?:string, provisioningConfigurations?:array<array{lakeFormationConfiguration?:array{locationRegistrationExcludeS3Locations?:array<string>, locationRegistrationRole?:string}}>, provisioningRoleArn?:string, regionalParameters?:array<string, array<string, string>>} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt?:int|string|\DateTimeInterface, domainId:string, enabledRegions?:array<string>, environmentBlueprintId:string, environmentRolePermissionBoundary?:string, manageAccessRoleArn?:string, provisioningConfigurations?:array<array{lakeFormationConfiguration?:array{locationRegistrationExcludeS3Locations?:array<string>, locationRegistrationRole?:string}}>, provisioningRoleArn?:string, regionalParameters?:array<string, array<string, string>>, updatedAt?:int|string|\DateTimeInterface}>
     */
    public function putEnvironmentBlueprintConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, domainIdentifier:string, identifier:string, rejectChoices?:array<array{predictionChoices?:array<int>, predictionTarget:string}>, rejectRule?:array{rule?:"ALL"|"NONE", threshold?:float}, revision?:string} $args
     * @return \AWS\Result<array{assetId:string, assetRevision:string, domainId:string}>
     */
    public function rejectPredictions(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, domainIdentifier:string, identifier:string, rejectChoices?:array<array{predictionChoices?:array<int>, predictionTarget:string}>, rejectRule?:array{rule?:"ALL"|"NONE", threshold?:float}, revision?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assetId:string, assetRevision:string, domainId:string}>
     */
    public function rejectPredictionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{decisionComment?:string, domainIdentifier:string, identifier:string} $args
     * @return \AWS\Result<array{createdAt:int|string|\DateTimeInterface, createdBy:string, decisionComment?:string, domainId:string, existingSubscriptionId?:string, id:string, metadataForms?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, requestReason:string, reviewerId?:string, status:"PENDING"|"ACCEPTED"|"REJECTED", subscribedListings:array<array{description:string, id:string, item:array{assetListing?:array{assetScope?:array{assetId:string, errorMessage?:string, filterIds:array<string>, status:string}, entityId?:string, entityRevision?:string, entityType?:string, forms?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>}, productListing?:array{assetListings?:array<array{entityId?:string, entityRevision?:string, entityType?:string}>, description?:string, entityId?:string, entityRevision?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>, name?:string}}, name:string, ownerProjectId:string, ownerProjectName?:string, revision?:string}>, subscribedPrincipals:array<array{project?:array{id?:string, name?:string}}>, updatedAt:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function rejectSubscriptionRequest(array $args): \AWS\Result { }

    /**
     * @param array{decisionComment?:string, domainIdentifier:string, identifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt:int|string|\DateTimeInterface, createdBy:string, decisionComment?:string, domainId:string, existingSubscriptionId?:string, id:string, metadataForms?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, requestReason:string, reviewerId?:string, status:"PENDING"|"ACCEPTED"|"REJECTED", subscribedListings:array<array{description:string, id:string, item:array{assetListing?:array{assetScope?:array{assetId:string, errorMessage?:string, filterIds:array<string>, status:string}, entityId?:string, entityRevision?:string, entityType?:string, forms?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>}, productListing?:array{assetListings?:array<array{entityId?:string, entityRevision?:string, entityType?:string}>, description?:string, entityId?:string, entityRevision?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>, name?:string}}, name:string, ownerProjectId:string, ownerProjectName?:string, revision?:string}>, subscribedPrincipals:array<array{project?:array{id?:string, name?:string}}>, updatedAt:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function rejectSubscriptionRequestAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, domainIdentifier:string, entityIdentifier:string, entityType:"DOMAIN_UNIT", owner:array{group?:array{groupIdentifier:string}, user?:array{userIdentifier:string}}} $args
     * @return \AWS\Result<array{}>
     */
    public function removeEntityOwner(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, domainIdentifier:string, entityIdentifier:string, entityType:"DOMAIN_UNIT", owner:array{group?:array{groupIdentifier:string}, user?:array{userIdentifier:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function removeEntityOwnerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, domainIdentifier:string, entityIdentifier:string, entityType:"DOMAIN_UNIT"|"ENVIRONMENT_BLUEPRINT_CONFIGURATION"|"ENVIRONMENT_PROFILE", policyType:"CREATE_DOMAIN_UNIT"|"OVERRIDE_DOMAIN_UNIT_OWNERS"|"ADD_TO_PROJECT_MEMBER_POOL"|"OVERRIDE_PROJECT_OWNERS"|"CREATE_GLOSSARY"|"CREATE_FORM_TYPE"|"CREATE_ASSET_TYPE"|"CREATE_PROJECT"|"CREATE_ENVIRONMENT_PROFILE"|"DELEGATE_CREATE_ENVIRONMENT_PROFILE"|"CREATE_ENVIRONMENT"|"CREATE_ENVIRONMENT_FROM_BLUEPRINT"|"CREATE_PROJECT_FROM_PROJECT_PROFILE", principal:array{domainUnit?:array{domainUnitDesignation:"OWNER", domainUnitGrantFilter?:array{allDomainUnitsGrantFilter?:array{}}, domainUnitIdentifier?:string}, group?:array{groupIdentifier?:string}, project?:array{projectDesignation:"OWNER"|"CONTRIBUTOR"|"PROJECT_CATALOG_STEWARD", projectGrantFilter?:array{domainUnitFilter?:array{domainUnit:string, includeChildDomainUnits?:bool}}, projectIdentifier?:string}, user?:array{allUsersGrantFilter?:array{}, userIdentifier?:string}}} $args
     * @return \AWS\Result<array{}>
     */
    public function removePolicyGrant(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, domainIdentifier:string, entityIdentifier:string, entityType:"DOMAIN_UNIT"|"ENVIRONMENT_BLUEPRINT_CONFIGURATION"|"ENVIRONMENT_PROFILE", policyType:"CREATE_DOMAIN_UNIT"|"OVERRIDE_DOMAIN_UNIT_OWNERS"|"ADD_TO_PROJECT_MEMBER_POOL"|"OVERRIDE_PROJECT_OWNERS"|"CREATE_GLOSSARY"|"CREATE_FORM_TYPE"|"CREATE_ASSET_TYPE"|"CREATE_PROJECT"|"CREATE_ENVIRONMENT_PROFILE"|"DELEGATE_CREATE_ENVIRONMENT_PROFILE"|"CREATE_ENVIRONMENT"|"CREATE_ENVIRONMENT_FROM_BLUEPRINT"|"CREATE_PROJECT_FROM_PROJECT_PROFILE", principal:array{domainUnit?:array{domainUnitDesignation:"OWNER", domainUnitGrantFilter?:array{allDomainUnitsGrantFilter?:array{}}, domainUnitIdentifier?:string}, group?:array{groupIdentifier?:string}, project?:array{projectDesignation:"OWNER"|"CONTRIBUTOR"|"PROJECT_CATALOG_STEWARD", projectGrantFilter?:array{domainUnitFilter?:array{domainUnit:string, includeChildDomainUnits?:bool}}, projectIdentifier?:string}, user?:array{allUsersGrantFilter?:array{}, userIdentifier?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function removePolicyGrantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string, retainPermissions?:bool} $args
     * @return \AWS\Result<array{createdAt:int|string|\DateTimeInterface, createdBy:string, domainId:string, id:string, retainPermissions?:bool, status:"APPROVED"|"REVOKED"|"CANCELLED", subscribedListing:array{description:string, id:string, item:array{assetListing?:array{assetScope?:array{assetId:string, errorMessage?:string, filterIds:array<string>, status:string}, entityId?:string, entityRevision?:string, entityType?:string, forms?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>}, productListing?:array{assetListings?:array<array{entityId?:string, entityRevision?:string, entityType?:string}>, description?:string, entityId?:string, entityRevision?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>, name?:string}}, name:string, ownerProjectId:string, ownerProjectName?:string, revision?:string}, subscribedPrincipal:array{project?:array{id?:string, name?:string}}, subscriptionRequestId?:string, updatedAt:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function revokeSubscription(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string, retainPermissions?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt:int|string|\DateTimeInterface, createdBy:string, domainId:string, id:string, retainPermissions?:bool, status:"APPROVED"|"REVOKED"|"CANCELLED", subscribedListing:array{description:string, id:string, item:array{assetListing?:array{assetScope?:array{assetId:string, errorMessage?:string, filterIds:array<string>, status:string}, entityId?:string, entityRevision?:string, entityType?:string, forms?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>}, productListing?:array{assetListings?:array<array{entityId?:string, entityRevision?:string, entityType?:string}>, description?:string, entityId?:string, entityRevision?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>, name?:string}}, name:string, ownerProjectId:string, ownerProjectName?:string, revision?:string}, subscribedPrincipal:array{project?:array{id?:string, name?:string}}, subscriptionRequestId?:string, updatedAt:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function revokeSubscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{additionalAttributes?:array<"FORMS"|"TIME_SERIES_DATA_POINT_FORMS">, domainIdentifier:string, filters?:array{and?:array<array{and?:mixed, filter?:array{attribute:string, value:string}, or?:array<array{and?:mixed, filter?:array{attribute:string, value:string}, or?:mixed}>}>, filter?:array{attribute:string, value:string}, or?:array<array{and?:array<array{and?:mixed, filter?:array{attribute:string, value:string}, or?:mixed}>, filter?:array{attribute:string, value:string}, or?:mixed}>}, maxResults?:int, nextToken?:string, owningProjectIdentifier?:string, searchIn?:array<array{attribute:string}>, searchScope:"ASSET"|"GLOSSARY"|"GLOSSARY_TERM"|"DATA_PRODUCT", searchText?:string, sort?:array{attribute:string, order?:"ASCENDING"|"DESCENDING"}} $args
     * @return \AWS\Result<array{items?:array<array{assetItem?:array{additionalAttributes?:array{formsOutput?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, latestTimeSeriesDataPointFormsOutput?:array<array{contentSummary?:string, formName:string, id?:string, timestamp:int|string|\DateTimeInterface, typeIdentifier:string, typeRevision?:string}>, readOnlyFormsOutput?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>}, createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, externalIdentifier?:string, firstRevisionCreatedAt?:int|string|\DateTimeInterface, firstRevisionCreatedBy?:string, glossaryTerms?:array<string>, identifier:string, name:string, owningProjectId:string, typeIdentifier:string, typeRevision:string}, dataProductItem?:array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, firstRevisionCreatedAt?:int|string|\DateTimeInterface, firstRevisionCreatedBy?:string, glossaryTerms?:array<string>, id:string, name:string, owningProjectId:string}, glossaryItem?:array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, id:string, name:string, owningProjectId:string, status:"DISABLED"|"ENABLED", updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}, glossaryTermItem?:array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, domainId:string, glossaryId:string, id:string, longDescription?:string, name:string, shortDescription?:string, status:"ENABLED"|"DISABLED", termRelations?:array{classifies?:array<string>, isA?:array<string>}, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}}>, nextToken?:string, totalMatchCount?:int}>
     */
    public function search(array $args): \AWS\Result { }

    /**
     * @param array{additionalAttributes?:array<"FORMS"|"TIME_SERIES_DATA_POINT_FORMS">, domainIdentifier:string, filters?:array{and?:array<array{and?:mixed, filter?:array{attribute:string, value:string}, or?:array<array{and?:mixed, filter?:array{attribute:string, value:string}, or?:mixed}>}>, filter?:array{attribute:string, value:string}, or?:array<array{and?:array<array{and?:mixed, filter?:array{attribute:string, value:string}, or?:mixed}>, filter?:array{attribute:string, value:string}, or?:mixed}>}, maxResults?:int, nextToken?:string, owningProjectIdentifier?:string, searchIn?:array<array{attribute:string}>, searchScope:"ASSET"|"GLOSSARY"|"GLOSSARY_TERM"|"DATA_PRODUCT", searchText?:string, sort?:array{attribute:string, order?:"ASCENDING"|"DESCENDING"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{assetItem?:array{additionalAttributes?:array{formsOutput?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, latestTimeSeriesDataPointFormsOutput?:array<array{contentSummary?:string, formName:string, id?:string, timestamp:int|string|\DateTimeInterface, typeIdentifier:string, typeRevision?:string}>, readOnlyFormsOutput?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>}, createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, externalIdentifier?:string, firstRevisionCreatedAt?:int|string|\DateTimeInterface, firstRevisionCreatedBy?:string, glossaryTerms?:array<string>, identifier:string, name:string, owningProjectId:string, typeIdentifier:string, typeRevision:string}, dataProductItem?:array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, firstRevisionCreatedAt?:int|string|\DateTimeInterface, firstRevisionCreatedBy?:string, glossaryTerms?:array<string>, id:string, name:string, owningProjectId:string}, glossaryItem?:array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, id:string, name:string, owningProjectId:string, status:"DISABLED"|"ENABLED", updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}, glossaryTermItem?:array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, domainId:string, glossaryId:string, id:string, longDescription?:string, name:string, shortDescription?:string, status:"ENABLED"|"DISABLED", termRelations?:array{classifies?:array<string>, isA?:array<string>}, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}}>, nextToken?:string, totalMatchCount?:int}>
     */
    public function searchAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, groupType:"SSO_GROUP"|"DATAZONE_SSO_GROUP", maxResults?:int, nextToken?:string, searchText?:string} $args
     * @return \AWS\Result<array{items?:array<array{domainId?:string, groupName?:string, id?:string, status?:"ASSIGNED"|"NOT_ASSIGNED"}>, nextToken?:string}>
     */
    public function searchGroupProfiles(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, groupType:"SSO_GROUP"|"DATAZONE_SSO_GROUP", maxResults?:int, nextToken?:string, searchText?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{domainId?:string, groupName?:string, id?:string, status?:"ASSIGNED"|"NOT_ASSIGNED"}>, nextToken?:string}>
     */
    public function searchGroupProfilesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{additionalAttributes?:array<"FORMS"|"TIME_SERIES_DATA_POINT_FORMS">, domainIdentifier:string, filters?:array{and?:array<array{and?:mixed, filter?:array{attribute:string, value:string}, or?:array<array{and?:mixed, filter?:array{attribute:string, value:string}, or?:mixed}>}>, filter?:array{attribute:string, value:string}, or?:array<array{and?:array<array{and?:mixed, filter?:array{attribute:string, value:string}, or?:mixed}>, filter?:array{attribute:string, value:string}, or?:mixed}>}, maxResults?:int, nextToken?:string, searchIn?:array<array{attribute:string}>, searchText?:string, sort?:array{attribute:string, order?:"ASCENDING"|"DESCENDING"}} $args
     * @return \AWS\Result<array{items?:array<array{assetListing?:array{additionalAttributes?:array{forms?:string, latestTimeSeriesDataPointForms?:array<array{contentSummary?:string, formName:string, id?:string, timestamp:int|string|\DateTimeInterface, typeIdentifier:string, typeRevision?:string}>}, createdAt?:int|string|\DateTimeInterface, description?:string, entityId?:string, entityRevision?:string, entityType?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>, listingCreatedBy?:string, listingId?:string, listingRevision?:string, listingUpdatedBy?:string, name?:string, owningProjectId?:string}, dataProductListing?:array{additionalAttributes?:array{forms?:string}, createdAt?:int|string|\DateTimeInterface, description?:string, entityId?:string, entityRevision?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>, items?:mixed, listingCreatedBy?:string, listingId?:string, listingRevision?:string, listingUpdatedBy?:string, name?:string, owningProjectId?:string}}>, nextToken?:string, totalMatchCount?:int}>
     */
    public function searchListings(array $args): \AWS\Result { }

    /**
     * @param array{additionalAttributes?:array<"FORMS"|"TIME_SERIES_DATA_POINT_FORMS">, domainIdentifier:string, filters?:array{and?:array<array{and?:mixed, filter?:array{attribute:string, value:string}, or?:array<array{and?:mixed, filter?:array{attribute:string, value:string}, or?:mixed}>}>, filter?:array{attribute:string, value:string}, or?:array<array{and?:array<array{and?:mixed, filter?:array{attribute:string, value:string}, or?:mixed}>, filter?:array{attribute:string, value:string}, or?:mixed}>}, maxResults?:int, nextToken?:string, searchIn?:array<array{attribute:string}>, searchText?:string, sort?:array{attribute:string, order?:"ASCENDING"|"DESCENDING"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{assetListing?:array{additionalAttributes?:array{forms?:string, latestTimeSeriesDataPointForms?:array<array{contentSummary?:string, formName:string, id?:string, timestamp:int|string|\DateTimeInterface, typeIdentifier:string, typeRevision?:string}>}, createdAt?:int|string|\DateTimeInterface, description?:string, entityId?:string, entityRevision?:string, entityType?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>, listingCreatedBy?:string, listingId?:string, listingRevision?:string, listingUpdatedBy?:string, name?:string, owningProjectId?:string}, dataProductListing?:array{additionalAttributes?:array{forms?:string}, createdAt?:int|string|\DateTimeInterface, description?:string, entityId?:string, entityRevision?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>, items?:mixed, listingCreatedBy?:string, listingId?:string, listingRevision?:string, listingUpdatedBy?:string, name?:string, owningProjectId?:string}}>, nextToken?:string, totalMatchCount?:int}>
     */
    public function searchListingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, filters?:array{and?:array<array{and?:mixed, filter?:array{attribute:string, value:string}, or?:array<array{and?:mixed, filter?:array{attribute:string, value:string}, or?:mixed}>}>, filter?:array{attribute:string, value:string}, or?:array<array{and?:array<array{and?:mixed, filter?:array{attribute:string, value:string}, or?:mixed}>, filter?:array{attribute:string, value:string}, or?:mixed}>}, managed:bool, maxResults?:int, nextToken?:string, searchIn?:array<array{attribute:string}>, searchScope:"ASSET_TYPE"|"FORM_TYPE"|"LINEAGE_NODE_TYPE", searchText?:string, sort?:array{attribute:string, order?:"ASCENDING"|"DESCENDING"}} $args
     * @return \AWS\Result<array{items?:array<array{assetTypeItem?:array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, formsOutput:array<string, array{required?:bool, typeName:string, typeRevision:string}>, name:string, originDomainId?:string, originProjectId?:string, owningProjectId:string, revision:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}, formTypeItem?:array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, imports?:array<array{name:string, revision:string}>, model?:array{smithy?:string}, name:string, originDomainId?:string, originProjectId?:string, owningProjectId?:string, revision:string, status?:"ENABLED"|"DISABLED"}, lineageNodeTypeItem?:array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, formsOutput:array<string, array{required?:bool, typeName:string, typeRevision:string}>, name?:string, revision:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}}>, nextToken?:string, totalMatchCount?:int}>
     */
    public function searchTypes(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, filters?:array{and?:array<array{and?:mixed, filter?:array{attribute:string, value:string}, or?:array<array{and?:mixed, filter?:array{attribute:string, value:string}, or?:mixed}>}>, filter?:array{attribute:string, value:string}, or?:array<array{and?:array<array{and?:mixed, filter?:array{attribute:string, value:string}, or?:mixed}>, filter?:array{attribute:string, value:string}, or?:mixed}>}, managed:bool, maxResults?:int, nextToken?:string, searchIn?:array<array{attribute:string}>, searchScope:"ASSET_TYPE"|"FORM_TYPE"|"LINEAGE_NODE_TYPE", searchText?:string, sort?:array{attribute:string, order?:"ASCENDING"|"DESCENDING"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{assetTypeItem?:array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, formsOutput:array<string, array{required?:bool, typeName:string, typeRevision:string}>, name:string, originDomainId?:string, originProjectId?:string, owningProjectId:string, revision:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}, formTypeItem?:array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, imports?:array<array{name:string, revision:string}>, model?:array{smithy?:string}, name:string, originDomainId?:string, originProjectId?:string, owningProjectId?:string, revision:string, status?:"ENABLED"|"DISABLED"}, lineageNodeTypeItem?:array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, formsOutput:array<string, array{required?:bool, typeName:string, typeRevision:string}>, name?:string, revision:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}}>, nextToken?:string, totalMatchCount?:int}>
     */
    public function searchTypesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, maxResults?:int, nextToken?:string, searchText?:string, userType:"SSO_USER"|"DATAZONE_USER"|"DATAZONE_SSO_USER"|"DATAZONE_IAM_USER"} $args
     * @return \AWS\Result<array{items?:array<array{details?:array{iam?:array{arn?:string}, sso?:array{firstName?:string, lastName?:string, username?:string}}, domainId?:string, id?:string, status?:"ASSIGNED"|"NOT_ASSIGNED"|"ACTIVATED"|"DEACTIVATED", type?:"IAM"|"SSO"}>, nextToken?:string}>
     */
    public function searchUserProfiles(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, maxResults?:int, nextToken?:string, searchText?:string, userType:"SSO_USER"|"DATAZONE_USER"|"DATAZONE_SSO_USER"|"DATAZONE_IAM_USER"} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{details?:array{iam?:array{arn?:string}, sso?:array{firstName?:string, lastName?:string, username?:string}}, domainId?:string, id?:string, status?:"ASSIGNED"|"NOT_ASSIGNED"|"ACTIVATED"|"DEACTIVATED", type?:"IAM"|"SSO"}>, nextToken?:string}>
     */
    public function searchUserProfilesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, dataSourceIdentifier:string, domainIdentifier:string} $args
     * @return \AWS\Result<array{createdAt:int|string|\DateTimeInterface, dataSourceConfigurationSnapshot?:string, dataSourceId:string, domainId:string, errorMessage?:array{errorDetail?:string, errorType:"ACCESS_DENIED_EXCEPTION"|"CONFLICT_EXCEPTION"|"INTERNAL_SERVER_EXCEPTION"|"RESOURCE_NOT_FOUND_EXCEPTION"|"SERVICE_QUOTA_EXCEEDED_EXCEPTION"|"THROTTLING_EXCEPTION"|"VALIDATION_EXCEPTION"}, id:string, projectId:string, runStatisticsForAssets?:array{added?:int, failed?:int, skipped?:int, unchanged?:int, updated?:int}, startedAt?:int|string|\DateTimeInterface, status:"REQUESTED"|"RUNNING"|"FAILED"|"PARTIALLY_SUCCEEDED"|"SUCCESS", stoppedAt?:int|string|\DateTimeInterface, type:"PRIORITIZED"|"SCHEDULED", updatedAt:int|string|\DateTimeInterface}>
     */
    public function startDataSourceRun(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, dataSourceIdentifier:string, domainIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt:int|string|\DateTimeInterface, dataSourceConfigurationSnapshot?:string, dataSourceId:string, domainId:string, errorMessage?:array{errorDetail?:string, errorType:"ACCESS_DENIED_EXCEPTION"|"CONFLICT_EXCEPTION"|"INTERNAL_SERVER_EXCEPTION"|"RESOURCE_NOT_FOUND_EXCEPTION"|"SERVICE_QUOTA_EXCEEDED_EXCEPTION"|"THROTTLING_EXCEPTION"|"VALIDATION_EXCEPTION"}, id:string, projectId:string, runStatisticsForAssets?:array{added?:int, failed?:int, skipped?:int, unchanged?:int, updated?:int}, startedAt?:int|string|\DateTimeInterface, status:"REQUESTED"|"RUNNING"|"FAILED"|"PARTIALLY_SUCCEEDED"|"SUCCESS", stoppedAt?:int|string|\DateTimeInterface, type:"PRIORITIZED"|"SCHEDULED", updatedAt:int|string|\DateTimeInterface}>
     */
    public function startDataSourceRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, domainIdentifier:string, owningProjectIdentifier:string, target:array{identifier:string, revision?:string, type:"ASSET"}, type:"BUSINESS_DESCRIPTIONS"} $args
     * @return \AWS\Result<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, domainId:string, id:string, owningProjectId?:string, status?:"SUBMITTED"|"IN_PROGRESS"|"CANCELED"|"SUCCEEDED"|"FAILED", type?:"BUSINESS_DESCRIPTIONS"}>
     */
    public function startMetadataGenerationRun(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, domainIdentifier:string, owningProjectIdentifier:string, target:array{identifier:string, revision?:string, type:"ASSET"}, type:"BUSINESS_DESCRIPTIONS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, domainId:string, id:string, owningProjectId?:string, status?:"SUBMITTED"|"IN_PROGRESS"|"CANCELED"|"SUCCEEDED"|"FAILED", type?:"BUSINESS_DESCRIPTIONS"}>
     */
    public function startMetadataGenerationRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{assetIdentifier:string, configuration?:array{columnConfiguration?:array{includedColumnNames?:array<string>}, rowConfiguration?:array{rowFilter:array{and?:array<array{and?:mixed, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:array<array{and?:mixed, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:mixed}>}>, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:array<array{and?:array<array{and?:mixed, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:mixed}>, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:mixed}>}, sensitive?:bool}}, description?:string, domainIdentifier:string, identifier:string, name?:string} $args
     * @return \AWS\Result<array{assetId:string, configuration:array{columnConfiguration?:array{includedColumnNames?:array<string>}, rowConfiguration?:array{rowFilter:array{and?:array<array{and?:mixed, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:array<array{and?:mixed, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:mixed}>}>, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:array<array{and?:array<array{and?:mixed, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:mixed}>, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:mixed}>}, sensitive?:bool}}, createdAt?:int|string|\DateTimeInterface, description?:string, domainId:string, effectiveColumnNames?:array<string>, effectiveRowFilter?:string, errorMessage?:string, id:string, name:string, status?:"VALID"|"INVALID"}>
     */
    public function updateAssetFilter(array $args): \AWS\Result { }

    /**
     * @param array{assetIdentifier:string, configuration?:array{columnConfiguration?:array{includedColumnNames?:array<string>}, rowConfiguration?:array{rowFilter:array{and?:array<array{and?:mixed, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:array<array{and?:mixed, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:mixed}>}>, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:array<array{and?:array<array{and?:mixed, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:mixed}>, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:mixed}>}, sensitive?:bool}}, description?:string, domainIdentifier:string, identifier:string, name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assetId:string, configuration:array{columnConfiguration?:array{includedColumnNames?:array<string>}, rowConfiguration?:array{rowFilter:array{and?:array<array{and?:mixed, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:array<array{and?:mixed, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:mixed}>}>, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:array<array{and?:array<array{and?:mixed, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:mixed}>, expression?:array{equalTo?:array{columnName:string, value:string}, greaterThan?:array{columnName:string, value:string}, greaterThanOrEqualTo?:array{columnName:string, value:string}, in?:array{columnName:string, values:array<string>}, isNotNull?:array{columnName:string}, isNull?:array{columnName:string}, lessThan?:array{columnName:string, value:string}, lessThanOrEqualTo?:array{columnName:string, value:string}, like?:array{columnName:string, value:string}, notEqualTo?:array{columnName:string, value:string}, notIn?:array{columnName:string, values:array<string>}, notLike?:array{columnName:string, value:string}}, or?:mixed}>}, sensitive?:bool}}, createdAt?:int|string|\DateTimeInterface, description?:string, domainId:string, effectiveColumnNames?:array<string>, effectiveRowFilter?:string, errorMessage?:string, id:string, name:string, status?:"VALID"|"INVALID"}>
     */
    public function updateAssetFilterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{awsLocation?:array{accessRole?:string, awsAccountId?:string, awsRegion?:string, iamConnectionId?:string}, description?:string, domainIdentifier:string, identifier:string, props?:array{athenaProperties?:array{workgroupName?:string}, glueProperties?:array{glueConnectionInput?:array{authenticationConfiguration?:array{basicAuthenticationCredentials?:array{password?:string, userName?:string}, secretArn?:string}, connectionProperties?:array<string, string>, description?:string}}, iamProperties?:array{glueLineageSyncEnabled?:bool}, redshiftProperties?:array{credentials?:array{secretArn?:string, usernamePassword?:array{password:string, username:string}}, databaseName?:string, host?:string, lineageSync?:array{enabled?:bool, schedule?:array{schedule?:mixed}}, port?:int, storage?:array{clusterName?:string, workgroupName?:string}}, sparkEmrProperties?:array{computeArn?:string, instanceProfileArn?:string, javaVirtualEnv?:string, logUri?:string, pythonVirtualEnv?:string, runtimeRole?:string, trustedCertificatesS3Uri?:string}}} $args
     * @return \AWS\Result<array{connectionId:string, description?:string, domainId:string, domainUnitId:string, environmentId?:string, name:string, physicalEndpoints:array<array{awsLocation?:array{accessRole?:string, awsAccountId?:string, awsRegion?:string, iamConnectionId?:string}, glueConnection?:array{athenaProperties?:array<string, string>, authenticationConfiguration?:array{authenticationType?:"BASIC"|"OAUTH2"|"CUSTOM", oAuth2Properties?:array{authorizationCodeProperties?:array{authorizationCode?:string, redirectUri?:string}, oAuth2ClientApplication?:array{aWSManagedClientApplicationReference?:string, userManagedClientApplicationClientId?:string}, oAuth2Credentials?:array{accessToken?:string, jwtToken?:string, refreshToken?:string, userManagedClientApplicationClientSecret?:string}, oAuth2GrantType?:"AUTHORIZATION_CODE"|"CLIENT_CREDENTIALS"|"JWT_BEARER", tokenUrl?:string, tokenUrlParametersMap?:array<string, string>}, secretArn?:string}, compatibleComputeEnvironments?:array<"SPARK"|"ATHENA"|"PYTHON">, connectionProperties?:array<string, string>, connectionSchemaVersion?:int, connectionType?:"ATHENA"|"BIGQUERY"|"DATABRICKS"|"DOCUMENTDB"|"DYNAMODB"|"HYPERPOD"|"IAM"|"MYSQL"|"OPENSEARCH"|"ORACLE"|"POSTGRESQL"|"REDSHIFT"|"SAPHANA"|"SNOWFLAKE"|"SPARK"|"SQLSERVER"|"TERADATA"|"VERTICA"|"WORKFLOWS_MWAA", creationTime?:int|string|\DateTimeInterface, description?:string, lastConnectionValidationTime?:int|string|\DateTimeInterface, lastUpdatedBy?:string, lastUpdatedTime?:int|string|\DateTimeInterface, matchCriteria?:array<string>, name?:string, physicalConnectionRequirements?:array{availabilityZone?:string, securityGroupIdList?:array<string>, subnetId?:string, subnetIdList?:array<string>}, pythonProperties?:array<string, string>, sparkProperties?:array<string, string>, status?:"CREATING"|"CREATE_FAILED"|"DELETING"|"DELETE_FAILED"|"READY"|"UPDATING"|"UPDATE_FAILED"|"DELETED", statusReason?:string}, glueConnectionName?:string, host?:string, port?:int, protocol?:"ATHENA"|"GLUE_INTERACTIVE_SESSION"|"HTTPS"|"JDBC"|"LIVY"|"ODBC"|"PRISM", stage?:string}>, projectId?:string, props?:array{athenaProperties?:array{workgroupName?:string}, glueProperties?:array{errorMessage?:string, status?:"CREATING"|"CREATE_FAILED"|"DELETING"|"DELETE_FAILED"|"READY"|"UPDATING"|"UPDATE_FAILED"|"DELETED"}, hyperPodProperties?:array{clusterArn?:string, clusterName:string, orchestrator?:"EKS"|"SLURM"}, iamProperties?:array{environmentId?:string, glueLineageSyncEnabled?:bool}, redshiftProperties?:array{credentials?:array{secretArn?:string, usernamePassword?:array{password:string, username:string}}, databaseName?:string, isProvisionedSecret?:bool, jdbcIamUrl?:string, jdbcUrl?:string, lineageSync?:array{enabled?:bool, lineageJobId?:string, schedule?:array{schedule?:mixed}}, redshiftTempDir?:string, status?:"CREATING"|"CREATE_FAILED"|"DELETING"|"DELETE_FAILED"|"READY"|"UPDATING"|"UPDATE_FAILED"|"DELETED", storage?:array{clusterName?:string, workgroupName?:string}}, sparkEmrProperties?:array{computeArn?:string, credentials?:array{password:string, username:string}, credentialsExpiration?:int|string|\DateTimeInterface, governanceType?:"AWS_MANAGED"|"USER_MANAGED", instanceProfileArn?:string, javaVirtualEnv?:string, livyEndpoint?:string, logUri?:string, pythonVirtualEnv?:string, runtimeRole?:string, trustedCertificatesS3Uri?:string}, sparkGlueProperties?:array{additionalArgs?:array{connection?:string}, glueConnectionName?:string, glueVersion?:string, idleTimeout?:int, javaVirtualEnv?:string, numberOfWorkers?:int, pythonVirtualEnv?:string, workerType?:string}}, type:"ATHENA"|"BIGQUERY"|"DATABRICKS"|"DOCUMENTDB"|"DYNAMODB"|"HYPERPOD"|"IAM"|"MYSQL"|"OPENSEARCH"|"ORACLE"|"POSTGRESQL"|"REDSHIFT"|"SAPHANA"|"SNOWFLAKE"|"SPARK"|"SQLSERVER"|"TERADATA"|"VERTICA"|"WORKFLOWS_MWAA"}>
     */
    public function updateConnection(array $args): \AWS\Result { }

    /**
     * @param array{awsLocation?:array{accessRole?:string, awsAccountId?:string, awsRegion?:string, iamConnectionId?:string}, description?:string, domainIdentifier:string, identifier:string, props?:array{athenaProperties?:array{workgroupName?:string}, glueProperties?:array{glueConnectionInput?:array{authenticationConfiguration?:array{basicAuthenticationCredentials?:array{password?:string, userName?:string}, secretArn?:string}, connectionProperties?:array<string, string>, description?:string}}, iamProperties?:array{glueLineageSyncEnabled?:bool}, redshiftProperties?:array{credentials?:array{secretArn?:string, usernamePassword?:array{password:string, username:string}}, databaseName?:string, host?:string, lineageSync?:array{enabled?:bool, schedule?:array{schedule?:mixed}}, port?:int, storage?:array{clusterName?:string, workgroupName?:string}}, sparkEmrProperties?:array{computeArn?:string, instanceProfileArn?:string, javaVirtualEnv?:string, logUri?:string, pythonVirtualEnv?:string, runtimeRole?:string, trustedCertificatesS3Uri?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{connectionId:string, description?:string, domainId:string, domainUnitId:string, environmentId?:string, name:string, physicalEndpoints:array<array{awsLocation?:array{accessRole?:string, awsAccountId?:string, awsRegion?:string, iamConnectionId?:string}, glueConnection?:array{athenaProperties?:array<string, string>, authenticationConfiguration?:array{authenticationType?:"BASIC"|"OAUTH2"|"CUSTOM", oAuth2Properties?:array{authorizationCodeProperties?:array{authorizationCode?:string, redirectUri?:string}, oAuth2ClientApplication?:array{aWSManagedClientApplicationReference?:string, userManagedClientApplicationClientId?:string}, oAuth2Credentials?:array{accessToken?:string, jwtToken?:string, refreshToken?:string, userManagedClientApplicationClientSecret?:string}, oAuth2GrantType?:"AUTHORIZATION_CODE"|"CLIENT_CREDENTIALS"|"JWT_BEARER", tokenUrl?:string, tokenUrlParametersMap?:array<string, string>}, secretArn?:string}, compatibleComputeEnvironments?:array<"SPARK"|"ATHENA"|"PYTHON">, connectionProperties?:array<string, string>, connectionSchemaVersion?:int, connectionType?:"ATHENA"|"BIGQUERY"|"DATABRICKS"|"DOCUMENTDB"|"DYNAMODB"|"HYPERPOD"|"IAM"|"MYSQL"|"OPENSEARCH"|"ORACLE"|"POSTGRESQL"|"REDSHIFT"|"SAPHANA"|"SNOWFLAKE"|"SPARK"|"SQLSERVER"|"TERADATA"|"VERTICA"|"WORKFLOWS_MWAA", creationTime?:int|string|\DateTimeInterface, description?:string, lastConnectionValidationTime?:int|string|\DateTimeInterface, lastUpdatedBy?:string, lastUpdatedTime?:int|string|\DateTimeInterface, matchCriteria?:array<string>, name?:string, physicalConnectionRequirements?:array{availabilityZone?:string, securityGroupIdList?:array<string>, subnetId?:string, subnetIdList?:array<string>}, pythonProperties?:array<string, string>, sparkProperties?:array<string, string>, status?:"CREATING"|"CREATE_FAILED"|"DELETING"|"DELETE_FAILED"|"READY"|"UPDATING"|"UPDATE_FAILED"|"DELETED", statusReason?:string}, glueConnectionName?:string, host?:string, port?:int, protocol?:"ATHENA"|"GLUE_INTERACTIVE_SESSION"|"HTTPS"|"JDBC"|"LIVY"|"ODBC"|"PRISM", stage?:string}>, projectId?:string, props?:array{athenaProperties?:array{workgroupName?:string}, glueProperties?:array{errorMessage?:string, status?:"CREATING"|"CREATE_FAILED"|"DELETING"|"DELETE_FAILED"|"READY"|"UPDATING"|"UPDATE_FAILED"|"DELETED"}, hyperPodProperties?:array{clusterArn?:string, clusterName:string, orchestrator?:"EKS"|"SLURM"}, iamProperties?:array{environmentId?:string, glueLineageSyncEnabled?:bool}, redshiftProperties?:array{credentials?:array{secretArn?:string, usernamePassword?:array{password:string, username:string}}, databaseName?:string, isProvisionedSecret?:bool, jdbcIamUrl?:string, jdbcUrl?:string, lineageSync?:array{enabled?:bool, lineageJobId?:string, schedule?:array{schedule?:mixed}}, redshiftTempDir?:string, status?:"CREATING"|"CREATE_FAILED"|"DELETING"|"DELETE_FAILED"|"READY"|"UPDATING"|"UPDATE_FAILED"|"DELETED", storage?:array{clusterName?:string, workgroupName?:string}}, sparkEmrProperties?:array{computeArn?:string, credentials?:array{password:string, username:string}, credentialsExpiration?:int|string|\DateTimeInterface, governanceType?:"AWS_MANAGED"|"USER_MANAGED", instanceProfileArn?:string, javaVirtualEnv?:string, livyEndpoint?:string, logUri?:string, pythonVirtualEnv?:string, runtimeRole?:string, trustedCertificatesS3Uri?:string}, sparkGlueProperties?:array{additionalArgs?:array{connection?:string}, glueConnectionName?:string, glueVersion?:string, idleTimeout?:int, javaVirtualEnv?:string, numberOfWorkers?:int, pythonVirtualEnv?:string, workerType?:string}}, type:"ATHENA"|"BIGQUERY"|"DATABRICKS"|"DOCUMENTDB"|"DYNAMODB"|"HYPERPOD"|"IAM"|"MYSQL"|"OPENSEARCH"|"ORACLE"|"POSTGRESQL"|"REDSHIFT"|"SAPHANA"|"SNOWFLAKE"|"SPARK"|"SQLSERVER"|"TERADATA"|"VERTICA"|"WORKFLOWS_MWAA"}>
     */
    public function updateConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetFormsInput?:array<array{content?:string, formName:string, typeIdentifier?:string, typeRevision?:string}>, configuration?:array{glueRunConfiguration?:array{autoImportDataQualityResult?:bool, catalogName?:string, dataAccessRole?:string, relationalFilterConfigurations:array<array{databaseName:string, filterExpressions?:array<array{expression:string, type:"INCLUDE"|"EXCLUDE"}>, schemaName?:string}>}, redshiftRunConfiguration?:array{dataAccessRole?:string, redshiftCredentialConfiguration?:array{secretManagerArn:string}, redshiftStorage?:array{redshiftClusterSource?:array{clusterName:string}, redshiftServerlessSource?:array{workgroupName:string}}, relationalFilterConfigurations:array<array{databaseName:string, filterExpressions?:array<array{expression:string, type:"INCLUDE"|"EXCLUDE"}>, schemaName?:string}>}, sageMakerRunConfiguration?:array{trackingAssets:array<string, array<string>>}}, description?:string, domainIdentifier:string, enableSetting?:"ENABLED"|"DISABLED", identifier:string, name?:string, publishOnImport?:bool, recommendation?:array{enableBusinessNameGeneration?:bool}, retainPermissionsOnRevokeFailure?:bool, schedule?:array{schedule?:mixed, timezone?:"UTC"|"AFRICA_JOHANNESBURG"|"AMERICA_MONTREAL"|"AMERICA_SAO_PAULO"|"ASIA_BAHRAIN"|"ASIA_BANGKOK"|"ASIA_CALCUTTA"|"ASIA_DUBAI"|"ASIA_HONG_KONG"|"ASIA_JAKARTA"|"ASIA_KUALA_LUMPUR"|"ASIA_SEOUL"|"ASIA_SHANGHAI"|"ASIA_SINGAPORE"|"ASIA_TAIPEI"|"ASIA_TOKYO"|"AUSTRALIA_MELBOURNE"|"AUSTRALIA_SYDNEY"|"CANADA_CENTRAL"|"CET"|"CST6CDT"|"ETC_GMT"|"ETC_GMT0"|"ETC_GMT_ADD_0"|"ETC_GMT_ADD_1"|"ETC_GMT_ADD_10"|"ETC_GMT_ADD_11"|"ETC_GMT_ADD_12"|"ETC_GMT_ADD_2"|"ETC_GMT_ADD_3"|"ETC_GMT_ADD_4"|"ETC_GMT_ADD_5"|"ETC_GMT_ADD_6"|"ETC_GMT_ADD_7"|"ETC_GMT_ADD_8"|"ETC_GMT_ADD_9"|"ETC_GMT_NEG_0"|"ETC_GMT_NEG_1"|"ETC_GMT_NEG_10"|"ETC_GMT_NEG_11"|"ETC_GMT_NEG_12"|"ETC_GMT_NEG_13"|"ETC_GMT_NEG_14"|"ETC_GMT_NEG_2"|"ETC_GMT_NEG_3"|"ETC_GMT_NEG_4"|"ETC_GMT_NEG_5"|"ETC_GMT_NEG_6"|"ETC_GMT_NEG_7"|"ETC_GMT_NEG_8"|"ETC_GMT_NEG_9"|"EUROPE_DUBLIN"|"EUROPE_LONDON"|"EUROPE_PARIS"|"EUROPE_STOCKHOLM"|"EUROPE_ZURICH"|"ISRAEL"|"MEXICO_GENERAL"|"MST7MDT"|"PACIFIC_AUCKLAND"|"US_CENTRAL"|"US_EASTERN"|"US_MOUNTAIN"|"US_PACIFIC"}} $args
     * @return \AWS\Result<array{assetFormsOutput?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, configuration?:array{glueRunConfiguration?:array{accountId?:string, autoImportDataQualityResult?:bool, catalogName?:string, dataAccessRole?:string, region?:string, relationalFilterConfigurations:array<array{databaseName:string, filterExpressions?:array<array{expression:string, type:"INCLUDE"|"EXCLUDE"}>, schemaName?:string}>}, redshiftRunConfiguration?:array{accountId?:string, dataAccessRole?:string, redshiftCredentialConfiguration?:array{secretManagerArn:string}, redshiftStorage:array{redshiftClusterSource?:array{clusterName:string}, redshiftServerlessSource?:array{workgroupName:string}}, region?:string, relationalFilterConfigurations:array<array{databaseName:string, filterExpressions?:array<array{expression:string, type:"INCLUDE"|"EXCLUDE"}>, schemaName?:string}>}, sageMakerRunConfiguration?:array{accountId?:string, region?:string, trackingAssets:array<string, array<string>>}}, connectionId?:string, createdAt?:int|string|\DateTimeInterface, description?:string, domainId:string, enableSetting?:"ENABLED"|"DISABLED", environmentId?:string, errorMessage?:array{errorDetail?:string, errorType:"ACCESS_DENIED_EXCEPTION"|"CONFLICT_EXCEPTION"|"INTERNAL_SERVER_EXCEPTION"|"RESOURCE_NOT_FOUND_EXCEPTION"|"SERVICE_QUOTA_EXCEEDED_EXCEPTION"|"THROTTLING_EXCEPTION"|"VALIDATION_EXCEPTION"}, id:string, lastRunAt?:int|string|\DateTimeInterface, lastRunErrorMessage?:array{errorDetail?:string, errorType:"ACCESS_DENIED_EXCEPTION"|"CONFLICT_EXCEPTION"|"INTERNAL_SERVER_EXCEPTION"|"RESOURCE_NOT_FOUND_EXCEPTION"|"SERVICE_QUOTA_EXCEEDED_EXCEPTION"|"THROTTLING_EXCEPTION"|"VALIDATION_EXCEPTION"}, lastRunStatus?:"REQUESTED"|"RUNNING"|"FAILED"|"PARTIALLY_SUCCEEDED"|"SUCCESS", name:string, projectId:string, publishOnImport?:bool, recommendation?:array{enableBusinessNameGeneration?:bool}, retainPermissionsOnRevokeFailure?:bool, schedule?:array{schedule?:mixed, timezone?:"UTC"|"AFRICA_JOHANNESBURG"|"AMERICA_MONTREAL"|"AMERICA_SAO_PAULO"|"ASIA_BAHRAIN"|"ASIA_BANGKOK"|"ASIA_CALCUTTA"|"ASIA_DUBAI"|"ASIA_HONG_KONG"|"ASIA_JAKARTA"|"ASIA_KUALA_LUMPUR"|"ASIA_SEOUL"|"ASIA_SHANGHAI"|"ASIA_SINGAPORE"|"ASIA_TAIPEI"|"ASIA_TOKYO"|"AUSTRALIA_MELBOURNE"|"AUSTRALIA_SYDNEY"|"CANADA_CENTRAL"|"CET"|"CST6CDT"|"ETC_GMT"|"ETC_GMT0"|"ETC_GMT_ADD_0"|"ETC_GMT_ADD_1"|"ETC_GMT_ADD_10"|"ETC_GMT_ADD_11"|"ETC_GMT_ADD_12"|"ETC_GMT_ADD_2"|"ETC_GMT_ADD_3"|"ETC_GMT_ADD_4"|"ETC_GMT_ADD_5"|"ETC_GMT_ADD_6"|"ETC_GMT_ADD_7"|"ETC_GMT_ADD_8"|"ETC_GMT_ADD_9"|"ETC_GMT_NEG_0"|"ETC_GMT_NEG_1"|"ETC_GMT_NEG_10"|"ETC_GMT_NEG_11"|"ETC_GMT_NEG_12"|"ETC_GMT_NEG_13"|"ETC_GMT_NEG_14"|"ETC_GMT_NEG_2"|"ETC_GMT_NEG_3"|"ETC_GMT_NEG_4"|"ETC_GMT_NEG_5"|"ETC_GMT_NEG_6"|"ETC_GMT_NEG_7"|"ETC_GMT_NEG_8"|"ETC_GMT_NEG_9"|"EUROPE_DUBLIN"|"EUROPE_LONDON"|"EUROPE_PARIS"|"EUROPE_STOCKHOLM"|"EUROPE_ZURICH"|"ISRAEL"|"MEXICO_GENERAL"|"MST7MDT"|"PACIFIC_AUCKLAND"|"US_CENTRAL"|"US_EASTERN"|"US_MOUNTAIN"|"US_PACIFIC"}, selfGrantStatus?:array{glueSelfGrantStatus?:array{selfGrantStatusDetails:array<array{databaseName:string, failureCause?:string, schemaName?:string, status:"GRANT_PENDING"|"REVOKE_PENDING"|"GRANT_IN_PROGRESS"|"REVOKE_IN_PROGRESS"|"GRANTED"|"GRANT_FAILED"|"REVOKE_FAILED"}>}, redshiftSelfGrantStatus?:array{selfGrantStatusDetails:array<array{databaseName:string, failureCause?:string, schemaName?:string, status:"GRANT_PENDING"|"REVOKE_PENDING"|"GRANT_IN_PROGRESS"|"REVOKE_IN_PROGRESS"|"GRANTED"|"GRANT_FAILED"|"REVOKE_FAILED"}>}}, status?:"CREATING"|"FAILED_CREATION"|"READY"|"UPDATING"|"FAILED_UPDATE"|"RUNNING"|"DELETING"|"FAILED_DELETION", type?:string, updatedAt?:int|string|\DateTimeInterface}>
     */
    public function updateDataSource(array $args): \AWS\Result { }

    /**
     * @param array{assetFormsInput?:array<array{content?:string, formName:string, typeIdentifier?:string, typeRevision?:string}>, configuration?:array{glueRunConfiguration?:array{autoImportDataQualityResult?:bool, catalogName?:string, dataAccessRole?:string, relationalFilterConfigurations:array<array{databaseName:string, filterExpressions?:array<array{expression:string, type:"INCLUDE"|"EXCLUDE"}>, schemaName?:string}>}, redshiftRunConfiguration?:array{dataAccessRole?:string, redshiftCredentialConfiguration?:array{secretManagerArn:string}, redshiftStorage?:array{redshiftClusterSource?:array{clusterName:string}, redshiftServerlessSource?:array{workgroupName:string}}, relationalFilterConfigurations:array<array{databaseName:string, filterExpressions?:array<array{expression:string, type:"INCLUDE"|"EXCLUDE"}>, schemaName?:string}>}, sageMakerRunConfiguration?:array{trackingAssets:array<string, array<string>>}}, description?:string, domainIdentifier:string, enableSetting?:"ENABLED"|"DISABLED", identifier:string, name?:string, publishOnImport?:bool, recommendation?:array{enableBusinessNameGeneration?:bool}, retainPermissionsOnRevokeFailure?:bool, schedule?:array{schedule?:mixed, timezone?:"UTC"|"AFRICA_JOHANNESBURG"|"AMERICA_MONTREAL"|"AMERICA_SAO_PAULO"|"ASIA_BAHRAIN"|"ASIA_BANGKOK"|"ASIA_CALCUTTA"|"ASIA_DUBAI"|"ASIA_HONG_KONG"|"ASIA_JAKARTA"|"ASIA_KUALA_LUMPUR"|"ASIA_SEOUL"|"ASIA_SHANGHAI"|"ASIA_SINGAPORE"|"ASIA_TAIPEI"|"ASIA_TOKYO"|"AUSTRALIA_MELBOURNE"|"AUSTRALIA_SYDNEY"|"CANADA_CENTRAL"|"CET"|"CST6CDT"|"ETC_GMT"|"ETC_GMT0"|"ETC_GMT_ADD_0"|"ETC_GMT_ADD_1"|"ETC_GMT_ADD_10"|"ETC_GMT_ADD_11"|"ETC_GMT_ADD_12"|"ETC_GMT_ADD_2"|"ETC_GMT_ADD_3"|"ETC_GMT_ADD_4"|"ETC_GMT_ADD_5"|"ETC_GMT_ADD_6"|"ETC_GMT_ADD_7"|"ETC_GMT_ADD_8"|"ETC_GMT_ADD_9"|"ETC_GMT_NEG_0"|"ETC_GMT_NEG_1"|"ETC_GMT_NEG_10"|"ETC_GMT_NEG_11"|"ETC_GMT_NEG_12"|"ETC_GMT_NEG_13"|"ETC_GMT_NEG_14"|"ETC_GMT_NEG_2"|"ETC_GMT_NEG_3"|"ETC_GMT_NEG_4"|"ETC_GMT_NEG_5"|"ETC_GMT_NEG_6"|"ETC_GMT_NEG_7"|"ETC_GMT_NEG_8"|"ETC_GMT_NEG_9"|"EUROPE_DUBLIN"|"EUROPE_LONDON"|"EUROPE_PARIS"|"EUROPE_STOCKHOLM"|"EUROPE_ZURICH"|"ISRAEL"|"MEXICO_GENERAL"|"MST7MDT"|"PACIFIC_AUCKLAND"|"US_CENTRAL"|"US_EASTERN"|"US_MOUNTAIN"|"US_PACIFIC"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{assetFormsOutput?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, configuration?:array{glueRunConfiguration?:array{accountId?:string, autoImportDataQualityResult?:bool, catalogName?:string, dataAccessRole?:string, region?:string, relationalFilterConfigurations:array<array{databaseName:string, filterExpressions?:array<array{expression:string, type:"INCLUDE"|"EXCLUDE"}>, schemaName?:string}>}, redshiftRunConfiguration?:array{accountId?:string, dataAccessRole?:string, redshiftCredentialConfiguration?:array{secretManagerArn:string}, redshiftStorage:array{redshiftClusterSource?:array{clusterName:string}, redshiftServerlessSource?:array{workgroupName:string}}, region?:string, relationalFilterConfigurations:array<array{databaseName:string, filterExpressions?:array<array{expression:string, type:"INCLUDE"|"EXCLUDE"}>, schemaName?:string}>}, sageMakerRunConfiguration?:array{accountId?:string, region?:string, trackingAssets:array<string, array<string>>}}, connectionId?:string, createdAt?:int|string|\DateTimeInterface, description?:string, domainId:string, enableSetting?:"ENABLED"|"DISABLED", environmentId?:string, errorMessage?:array{errorDetail?:string, errorType:"ACCESS_DENIED_EXCEPTION"|"CONFLICT_EXCEPTION"|"INTERNAL_SERVER_EXCEPTION"|"RESOURCE_NOT_FOUND_EXCEPTION"|"SERVICE_QUOTA_EXCEEDED_EXCEPTION"|"THROTTLING_EXCEPTION"|"VALIDATION_EXCEPTION"}, id:string, lastRunAt?:int|string|\DateTimeInterface, lastRunErrorMessage?:array{errorDetail?:string, errorType:"ACCESS_DENIED_EXCEPTION"|"CONFLICT_EXCEPTION"|"INTERNAL_SERVER_EXCEPTION"|"RESOURCE_NOT_FOUND_EXCEPTION"|"SERVICE_QUOTA_EXCEEDED_EXCEPTION"|"THROTTLING_EXCEPTION"|"VALIDATION_EXCEPTION"}, lastRunStatus?:"REQUESTED"|"RUNNING"|"FAILED"|"PARTIALLY_SUCCEEDED"|"SUCCESS", name:string, projectId:string, publishOnImport?:bool, recommendation?:array{enableBusinessNameGeneration?:bool}, retainPermissionsOnRevokeFailure?:bool, schedule?:array{schedule?:mixed, timezone?:"UTC"|"AFRICA_JOHANNESBURG"|"AMERICA_MONTREAL"|"AMERICA_SAO_PAULO"|"ASIA_BAHRAIN"|"ASIA_BANGKOK"|"ASIA_CALCUTTA"|"ASIA_DUBAI"|"ASIA_HONG_KONG"|"ASIA_JAKARTA"|"ASIA_KUALA_LUMPUR"|"ASIA_SEOUL"|"ASIA_SHANGHAI"|"ASIA_SINGAPORE"|"ASIA_TAIPEI"|"ASIA_TOKYO"|"AUSTRALIA_MELBOURNE"|"AUSTRALIA_SYDNEY"|"CANADA_CENTRAL"|"CET"|"CST6CDT"|"ETC_GMT"|"ETC_GMT0"|"ETC_GMT_ADD_0"|"ETC_GMT_ADD_1"|"ETC_GMT_ADD_10"|"ETC_GMT_ADD_11"|"ETC_GMT_ADD_12"|"ETC_GMT_ADD_2"|"ETC_GMT_ADD_3"|"ETC_GMT_ADD_4"|"ETC_GMT_ADD_5"|"ETC_GMT_ADD_6"|"ETC_GMT_ADD_7"|"ETC_GMT_ADD_8"|"ETC_GMT_ADD_9"|"ETC_GMT_NEG_0"|"ETC_GMT_NEG_1"|"ETC_GMT_NEG_10"|"ETC_GMT_NEG_11"|"ETC_GMT_NEG_12"|"ETC_GMT_NEG_13"|"ETC_GMT_NEG_14"|"ETC_GMT_NEG_2"|"ETC_GMT_NEG_3"|"ETC_GMT_NEG_4"|"ETC_GMT_NEG_5"|"ETC_GMT_NEG_6"|"ETC_GMT_NEG_7"|"ETC_GMT_NEG_8"|"ETC_GMT_NEG_9"|"EUROPE_DUBLIN"|"EUROPE_LONDON"|"EUROPE_PARIS"|"EUROPE_STOCKHOLM"|"EUROPE_ZURICH"|"ISRAEL"|"MEXICO_GENERAL"|"MST7MDT"|"PACIFIC_AUCKLAND"|"US_CENTRAL"|"US_EASTERN"|"US_MOUNTAIN"|"US_PACIFIC"}, selfGrantStatus?:array{glueSelfGrantStatus?:array{selfGrantStatusDetails:array<array{databaseName:string, failureCause?:string, schemaName?:string, status:"GRANT_PENDING"|"REVOKE_PENDING"|"GRANT_IN_PROGRESS"|"REVOKE_IN_PROGRESS"|"GRANTED"|"GRANT_FAILED"|"REVOKE_FAILED"}>}, redshiftSelfGrantStatus?:array{selfGrantStatusDetails:array<array{databaseName:string, failureCause?:string, schemaName?:string, status:"GRANT_PENDING"|"REVOKE_PENDING"|"GRANT_IN_PROGRESS"|"REVOKE_IN_PROGRESS"|"GRANTED"|"GRANT_FAILED"|"REVOKE_FAILED"}>}}, status?:"CREATING"|"FAILED_CREATION"|"READY"|"UPDATING"|"FAILED_UPDATE"|"RUNNING"|"DELETING"|"FAILED_DELETION", type?:string, updatedAt?:int|string|\DateTimeInterface}>
     */
    public function updateDataSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, description?:string, domainExecutionRole?:string, identifier:string, name?:string, serviceRole?:string, singleSignOn?:array{type?:"IAM_IDC"|"DISABLED", userAssignment?:"AUTOMATIC"|"MANUAL"}} $args
     * @return \AWS\Result<array{description?:string, domainExecutionRole?:string, id:string, lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, rootDomainUnitId?:string, serviceRole?:string, singleSignOn?:array{type?:"IAM_IDC"|"DISABLED", userAssignment?:"AUTOMATIC"|"MANUAL"}}>
     */
    public function updateDomain(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, description?:string, domainExecutionRole?:string, identifier:string, name?:string, serviceRole?:string, singleSignOn?:array{type?:"IAM_IDC"|"DISABLED", userAssignment?:"AUTOMATIC"|"MANUAL"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{description?:string, domainExecutionRole?:string, id:string, lastUpdatedAt?:int|string|\DateTimeInterface, name?:string, rootDomainUnitId?:string, serviceRole?:string, singleSignOn?:array{type?:"IAM_IDC"|"DISABLED", userAssignment?:"AUTOMATIC"|"MANUAL"}}>
     */
    public function updateDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, domainIdentifier:string, identifier:string, name?:string} $args
     * @return \AWS\Result<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, id:string, lastUpdatedAt?:int|string|\DateTimeInterface, lastUpdatedBy?:string, name:string, owners:array<array{group?:array{groupId?:string}, user?:array{userId?:string}}>, parentDomainUnitId?:string}>
     */
    public function updateDomainUnit(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, domainIdentifier:string, identifier:string, name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt?:int|string|\DateTimeInterface, createdBy?:string, description?:string, domainId:string, id:string, lastUpdatedAt?:int|string|\DateTimeInterface, lastUpdatedBy?:string, name:string, owners:array<array{group?:array{groupId?:string}, user?:array{userId?:string}}>, parentDomainUnitId?:string}>
     */
    public function updateDomainUnitAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, domainIdentifier:string, glossaryTerms?:array<string>, identifier:string, name?:string} $args
     * @return \AWS\Result<array{awsAccountId?:string, awsAccountRegion?:string, createdAt?:int|string|\DateTimeInterface, createdBy:string, deploymentProperties?:array{endTimeoutMinutes?:int, startTimeoutMinutes?:int}, description?:string, domainId:string, environmentActions?:array<array{auth?:"IAM"|"HTTPS", parameters:array<array{key?:string, value?:string}>, type:string}>, environmentBlueprintId?:string, environmentProfileId?:string, glossaryTerms?:array<string>, id?:string, lastDeployment?:array{deploymentId?:string, deploymentStatus?:"IN_PROGRESS"|"SUCCESSFUL"|"FAILED"|"PENDING_DEPLOYMENT", deploymentType?:"CREATE"|"UPDATE"|"DELETE", failureReason?:array{code?:string, message:string}, isDeploymentComplete?:bool, messages?:array<string>}, name:string, projectId:string, provider:string, provisionedResources?:array<array{name?:string, provider?:string, type:string, value:string}>, provisioningProperties?:array{cloudFormation?:array{templateUrl:string}}, status?:"ACTIVE"|"CREATING"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"UPDATE_FAILED"|"DELETE_FAILED"|"VALIDATION_FAILED"|"SUSPENDED"|"DISABLED"|"EXPIRED"|"DELETED"|"INACCESSIBLE", updatedAt?:int|string|\DateTimeInterface, userParameters?:array<array{defaultValue?:string, description?:string, fieldType:string, isEditable?:bool, isOptional?:bool, keyName:string}>}>
     */
    public function updateEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, domainIdentifier:string, glossaryTerms?:array<string>, identifier:string, name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{awsAccountId?:string, awsAccountRegion?:string, createdAt?:int|string|\DateTimeInterface, createdBy:string, deploymentProperties?:array{endTimeoutMinutes?:int, startTimeoutMinutes?:int}, description?:string, domainId:string, environmentActions?:array<array{auth?:"IAM"|"HTTPS", parameters:array<array{key?:string, value?:string}>, type:string}>, environmentBlueprintId?:string, environmentProfileId?:string, glossaryTerms?:array<string>, id?:string, lastDeployment?:array{deploymentId?:string, deploymentStatus?:"IN_PROGRESS"|"SUCCESSFUL"|"FAILED"|"PENDING_DEPLOYMENT", deploymentType?:"CREATE"|"UPDATE"|"DELETE", failureReason?:array{code?:string, message:string}, isDeploymentComplete?:bool, messages?:array<string>}, name:string, projectId:string, provider:string, provisionedResources?:array<array{name?:string, provider?:string, type:string, value:string}>, provisioningProperties?:array{cloudFormation?:array{templateUrl:string}}, status?:"ACTIVE"|"CREATING"|"UPDATING"|"DELETING"|"CREATE_FAILED"|"UPDATE_FAILED"|"DELETE_FAILED"|"VALIDATION_FAILED"|"SUSPENDED"|"DISABLED"|"EXPIRED"|"DELETED"|"INACCESSIBLE", updatedAt?:int|string|\DateTimeInterface, userParameters?:array<array{defaultValue?:string, description?:string, fieldType:string, isEditable?:bool, isOptional?:bool, keyName:string}>}>
     */
    public function updateEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, domainIdentifier:string, environmentIdentifier:string, identifier:string, name?:string, parameters?:array{awsConsoleLink?:array{uri?:string}}} $args
     * @return \AWS\Result<array{description?:string, domainId:string, environmentId:string, id:string, name:string, parameters:array{awsConsoleLink?:array{uri?:string}}}>
     */
    public function updateEnvironmentAction(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, domainIdentifier:string, environmentIdentifier:string, identifier:string, name?:string, parameters?:array{awsConsoleLink?:array{uri?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{description?:string, domainId:string, environmentId:string, id:string, name:string, parameters:array{awsConsoleLink?:array{uri?:string}}}>
     */
    public function updateEnvironmentActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{awsAccountId?:string, awsAccountRegion?:string, description?:string, domainIdentifier:string, identifier:string, name?:string, userParameters?:array<array{name?:string, value?:string}>} $args
     * @return \AWS\Result<array{awsAccountId?:string, awsAccountRegion?:string, createdAt?:int|string|\DateTimeInterface, createdBy:string, description?:string, domainId:string, environmentBlueprintId:string, id:string, name:string, projectId?:string, updatedAt?:int|string|\DateTimeInterface, userParameters?:array<array{defaultValue?:string, description?:string, fieldType:string, isEditable?:bool, isOptional?:bool, keyName:string}>}>
     */
    public function updateEnvironmentProfile(array $args): \AWS\Result { }

    /**
     * @param array{awsAccountId?:string, awsAccountRegion?:string, description?:string, domainIdentifier:string, identifier:string, name?:string, userParameters?:array<array{name?:string, value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{awsAccountId?:string, awsAccountRegion?:string, createdAt?:int|string|\DateTimeInterface, createdBy:string, description?:string, domainId:string, environmentBlueprintId:string, id:string, name:string, projectId?:string, updatedAt?:int|string|\DateTimeInterface, userParameters?:array<array{defaultValue?:string, description?:string, fieldType:string, isEditable?:bool, isOptional?:bool, keyName:string}>}>
     */
    public function updateEnvironmentProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, description?:string, domainIdentifier:string, identifier:string, name?:string, status?:"DISABLED"|"ENABLED"} $args
     * @return \AWS\Result<array{description?:string, domainId:string, id:string, name:string, owningProjectId:string, status?:"DISABLED"|"ENABLED"}>
     */
    public function updateGlossary(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, description?:string, domainIdentifier:string, identifier:string, name?:string, status?:"DISABLED"|"ENABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{description?:string, domainId:string, id:string, name:string, owningProjectId:string, status?:"DISABLED"|"ENABLED"}>
     */
    public function updateGlossaryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, glossaryIdentifier?:string, identifier:string, longDescription?:string, name?:string, shortDescription?:string, status?:"ENABLED"|"DISABLED", termRelations?:array{classifies?:array<string>, isA?:array<string>}} $args
     * @return \AWS\Result<array{domainId:string, glossaryId:string, id:string, longDescription?:string, name:string, shortDescription?:string, status:"ENABLED"|"DISABLED", termRelations?:array{classifies?:array<string>, isA?:array<string>}}>
     */
    public function updateGlossaryTerm(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, glossaryIdentifier?:string, identifier:string, longDescription?:string, name?:string, shortDescription?:string, status?:"ENABLED"|"DISABLED", termRelations?:array{classifies?:array<string>, isA?:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{domainId:string, glossaryId:string, id:string, longDescription?:string, name:string, shortDescription?:string, status:"ENABLED"|"DISABLED", termRelations?:array{classifies?:array<string>, isA?:array<string>}}>
     */
    public function updateGlossaryTermAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, groupIdentifier:string, status:"ASSIGNED"|"NOT_ASSIGNED"} $args
     * @return \AWS\Result<array{domainId?:string, groupName?:string, id?:string, status?:"ASSIGNED"|"NOT_ASSIGNED"}>
     */
    public function updateGroupProfile(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, groupIdentifier:string, status:"ASSIGNED"|"NOT_ASSIGNED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{domainId?:string, groupName?:string, id?:string, status?:"ASSIGNED"|"NOT_ASSIGNED"}>
     */
    public function updateGroupProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, domainIdentifier:string, environmentDeploymentDetails?:array{environmentFailureReasons?:array<string, array<array{code?:string, message:string}>>, overallDeploymentStatus?:"PENDING_DEPLOYMENT"|"IN_PROGRESS"|"SUCCESSFUL"|"FAILED_VALIDATION"|"FAILED_DEPLOYMENT"}, glossaryTerms?:array<string>, identifier:string, name?:string} $args
     * @return \AWS\Result<array{createdAt?:int|string|\DateTimeInterface, createdBy:string, description?:string, domainId:string, domainUnitId?:string, environmentDeploymentDetails?:array{environmentFailureReasons?:array<string, array<array{code?:string, message:string}>>, overallDeploymentStatus?:"PENDING_DEPLOYMENT"|"IN_PROGRESS"|"SUCCESSFUL"|"FAILED_VALIDATION"|"FAILED_DEPLOYMENT"}, failureReasons?:array<array{code?:string, message?:string}>, glossaryTerms?:array<string>, id:string, lastUpdatedAt?:int|string|\DateTimeInterface, name:string, projectProfileId?:string, projectStatus?:"ACTIVE"|"DELETING"|"DELETE_FAILED", userParameters?:array<array{environmentConfigurationName?:string, environmentParameters?:array<array{name?:string, value?:string}>}>}>
     */
    public function updateProject(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, domainIdentifier:string, environmentDeploymentDetails?:array{environmentFailureReasons?:array<string, array<array{code?:string, message:string}>>, overallDeploymentStatus?:"PENDING_DEPLOYMENT"|"IN_PROGRESS"|"SUCCESSFUL"|"FAILED_VALIDATION"|"FAILED_DEPLOYMENT"}, glossaryTerms?:array<string>, identifier:string, name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt?:int|string|\DateTimeInterface, createdBy:string, description?:string, domainId:string, domainUnitId?:string, environmentDeploymentDetails?:array{environmentFailureReasons?:array<string, array<array{code?:string, message:string}>>, overallDeploymentStatus?:"PENDING_DEPLOYMENT"|"IN_PROGRESS"|"SUCCESSFUL"|"FAILED_VALIDATION"|"FAILED_DEPLOYMENT"}, failureReasons?:array<array{code?:string, message?:string}>, glossaryTerms?:array<string>, id:string, lastUpdatedAt?:int|string|\DateTimeInterface, name:string, projectProfileId?:string, projectStatus?:"ACTIVE"|"DELETING"|"DELETE_FAILED", userParameters?:array<array{environmentConfigurationName?:string, environmentParameters?:array<array{name?:string, value?:string}>}>}>
     */
    public function updateProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, domainIdentifier:string, domainUnitIdentifier?:string, environmentConfigurations?:array<array{awsAccount:array{awsAccountId?:string, awsAccountIdPath?:string}, awsRegion:array{regionName?:string, regionNamePath?:string}, configurationParameters?:array{parameterOverrides?:array<array{isEditable?:bool, name?:string, value?:string}>, resolvedParameters?:array<array{isEditable?:bool, name?:string, value?:string}>, ssmPath?:string}, deploymentMode?:"ON_CREATE"|"ON_DEMAND", deploymentOrder?:int, description?:string, environmentBlueprintId:string, id?:string, name:string}>, identifier:string, name?:string, status?:"ENABLED"|"DISABLED"} $args
     * @return \AWS\Result<array{createdAt?:int|string|\DateTimeInterface, createdBy:string, description?:string, domainId:string, domainUnitId?:string, environmentConfigurations?:array<array{awsAccount:array{awsAccountId?:string, awsAccountIdPath?:string}, awsRegion:array{regionName?:string, regionNamePath?:string}, configurationParameters?:array{parameterOverrides?:array<array{isEditable?:bool, name?:string, value?:string}>, resolvedParameters?:array<array{isEditable?:bool, name?:string, value?:string}>, ssmPath?:string}, deploymentMode?:"ON_CREATE"|"ON_DEMAND", deploymentOrder?:int, description?:string, environmentBlueprintId:string, id?:string, name:string}>, id:string, lastUpdatedAt?:int|string|\DateTimeInterface, name:string, status?:"ENABLED"|"DISABLED"}>
     */
    public function updateProjectProfile(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, domainIdentifier:string, domainUnitIdentifier?:string, environmentConfigurations?:array<array{awsAccount:array{awsAccountId?:string, awsAccountIdPath?:string}, awsRegion:array{regionName?:string, regionNamePath?:string}, configurationParameters?:array{parameterOverrides?:array<array{isEditable?:bool, name?:string, value?:string}>, resolvedParameters?:array<array{isEditable?:bool, name?:string, value?:string}>, ssmPath?:string}, deploymentMode?:"ON_CREATE"|"ON_DEMAND", deploymentOrder?:int, description?:string, environmentBlueprintId:string, id?:string, name:string}>, identifier:string, name?:string, status?:"ENABLED"|"DISABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt?:int|string|\DateTimeInterface, createdBy:string, description?:string, domainId:string, domainUnitId?:string, environmentConfigurations?:array<array{awsAccount:array{awsAccountId?:string, awsAccountIdPath?:string}, awsRegion:array{regionName?:string, regionNamePath?:string}, configurationParameters?:array{parameterOverrides?:array<array{isEditable?:bool, name?:string, value?:string}>, resolvedParameters?:array<array{isEditable?:bool, name?:string, value?:string}>, ssmPath?:string}, deploymentMode?:"ON_CREATE"|"ON_DEMAND", deploymentOrder?:int, description?:string, environmentBlueprintId:string, id?:string, name:string}>, id:string, lastUpdatedAt?:int|string|\DateTimeInterface, name:string, status?:"ENABLED"|"DISABLED"}>
     */
    public function updateProjectProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, detail?:array{metadataFormEnforcementDetail?:array{requiredMetadataForms?:array<array{typeIdentifier:string, typeRevision:string}>}}, domainIdentifier:string, identifier:string, includeChildDomainUnits?:bool, name?:string, scope?:array{assetType?:array{selectionMode:"ALL"|"SPECIFIC", specificAssetTypes?:array<string>}, dataProduct?:bool, project?:array{selectionMode:"ALL"|"SPECIFIC", specificProjects?:array<string>}}} $args
     * @return \AWS\Result<array{action:"CREATE_SUBSCRIPTION_REQUEST", createdAt:int|string|\DateTimeInterface, createdBy:string, description?:string, detail:array{metadataFormEnforcementDetail?:array{requiredMetadataForms?:array<array{typeIdentifier:string, typeRevision:string}>}}, identifier:string, lastUpdatedBy:string, name:string, revision:string, ruleType:"METADATA_FORM_ENFORCEMENT", scope:array{assetType?:array{selectionMode:"ALL"|"SPECIFIC", specificAssetTypes?:array<string>}, dataProduct?:bool, project?:array{selectionMode:"ALL"|"SPECIFIC", specificProjects?:array<string>}}, target:array{domainUnitTarget?:array{domainUnitId:string, includeChildDomainUnits?:bool}}, updatedAt:int|string|\DateTimeInterface}>
     */
    public function updateRule(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, detail?:array{metadataFormEnforcementDetail?:array{requiredMetadataForms?:array<array{typeIdentifier:string, typeRevision:string}>}}, domainIdentifier:string, identifier:string, includeChildDomainUnits?:bool, name?:string, scope?:array{assetType?:array{selectionMode:"ALL"|"SPECIFIC", specificAssetTypes?:array<string>}, dataProduct?:bool, project?:array{selectionMode:"ALL"|"SPECIFIC", specificProjects?:array<string>}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{action:"CREATE_SUBSCRIPTION_REQUEST", createdAt:int|string|\DateTimeInterface, createdBy:string, description?:string, detail:array{metadataFormEnforcementDetail?:array{requiredMetadataForms?:array<array{typeIdentifier:string, typeRevision:string}>}}, identifier:string, lastUpdatedBy:string, name:string, revision:string, ruleType:"METADATA_FORM_ENFORCEMENT", scope:array{assetType?:array{selectionMode:"ALL"|"SPECIFIC", specificAssetTypes?:array<string>}, dataProduct?:bool, project?:array{selectionMode:"ALL"|"SPECIFIC", specificProjects?:array<string>}}, target:array{domainUnitTarget?:array{domainUnitId:string, includeChildDomainUnits?:bool}}, updatedAt:int|string|\DateTimeInterface}>
     */
    public function updateRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assetIdentifier:string, domainIdentifier:string, failureCause?:array{message?:string}, identifier:string, status:"GRANT_PENDING"|"REVOKE_PENDING"|"GRANT_IN_PROGRESS"|"REVOKE_IN_PROGRESS"|"GRANTED"|"REVOKED"|"GRANT_FAILED"|"REVOKE_FAILED", targetName?:string} $args
     * @return \AWS\Result<array{assets?:array<array{assetId:string, assetRevision:string, assetScope?:array{assetId:string, errorMessage?:string, filterIds:array<string>, status:string}, failureCause?:array{message?:string}, failureTimestamp?:int|string|\DateTimeInterface, grantedTimestamp?:int|string|\DateTimeInterface, status:"GRANT_PENDING"|"REVOKE_PENDING"|"GRANT_IN_PROGRESS"|"REVOKE_IN_PROGRESS"|"GRANTED"|"REVOKED"|"GRANT_FAILED"|"REVOKE_FAILED", targetName?:string}>, createdAt:int|string|\DateTimeInterface, createdBy:string, domainId:string, grantedEntity:array{listing?:array{id:string, revision:string}}, id:string, status:"PENDING"|"IN_PROGRESS"|"GRANT_FAILED"|"REVOKE_FAILED"|"GRANT_AND_REVOKE_FAILED"|"COMPLETED"|"INACCESSIBLE", subscriptionId?:string, subscriptionTargetId:string, updatedAt:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function updateSubscriptionGrantStatus(array $args): \AWS\Result { }

    /**
     * @param array{assetIdentifier:string, domainIdentifier:string, failureCause?:array{message?:string}, identifier:string, status:"GRANT_PENDING"|"REVOKE_PENDING"|"GRANT_IN_PROGRESS"|"REVOKE_IN_PROGRESS"|"GRANTED"|"REVOKED"|"GRANT_FAILED"|"REVOKE_FAILED", targetName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assets?:array<array{assetId:string, assetRevision:string, assetScope?:array{assetId:string, errorMessage?:string, filterIds:array<string>, status:string}, failureCause?:array{message?:string}, failureTimestamp?:int|string|\DateTimeInterface, grantedTimestamp?:int|string|\DateTimeInterface, status:"GRANT_PENDING"|"REVOKE_PENDING"|"GRANT_IN_PROGRESS"|"REVOKE_IN_PROGRESS"|"GRANTED"|"REVOKED"|"GRANT_FAILED"|"REVOKE_FAILED", targetName?:string}>, createdAt:int|string|\DateTimeInterface, createdBy:string, domainId:string, grantedEntity:array{listing?:array{id:string, revision:string}}, id:string, status:"PENDING"|"IN_PROGRESS"|"GRANT_FAILED"|"REVOKE_FAILED"|"GRANT_AND_REVOKE_FAILED"|"COMPLETED"|"INACCESSIBLE", subscriptionId?:string, subscriptionTargetId:string, updatedAt:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function updateSubscriptionGrantStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, identifier:string, requestReason:string} $args
     * @return \AWS\Result<array{createdAt:int|string|\DateTimeInterface, createdBy:string, decisionComment?:string, domainId:string, existingSubscriptionId?:string, id:string, metadataForms?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, requestReason:string, reviewerId?:string, status:"PENDING"|"ACCEPTED"|"REJECTED", subscribedListings:array<array{description:string, id:string, item:array{assetListing?:array{assetScope?:array{assetId:string, errorMessage?:string, filterIds:array<string>, status:string}, entityId?:string, entityRevision?:string, entityType?:string, forms?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>}, productListing?:array{assetListings?:array<array{entityId?:string, entityRevision?:string, entityType?:string}>, description?:string, entityId?:string, entityRevision?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>, name?:string}}, name:string, ownerProjectId:string, ownerProjectName?:string, revision?:string}>, subscribedPrincipals:array<array{project?:array{id?:string, name?:string}}>, updatedAt:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function updateSubscriptionRequest(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, identifier:string, requestReason:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt:int|string|\DateTimeInterface, createdBy:string, decisionComment?:string, domainId:string, existingSubscriptionId?:string, id:string, metadataForms?:array<array{content?:string, formName:string, typeName?:string, typeRevision?:string}>, requestReason:string, reviewerId?:string, status:"PENDING"|"ACCEPTED"|"REJECTED", subscribedListings:array<array{description:string, id:string, item:array{assetListing?:array{assetScope?:array{assetId:string, errorMessage?:string, filterIds:array<string>, status:string}, entityId?:string, entityRevision?:string, entityType?:string, forms?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>}, productListing?:array{assetListings?:array<array{entityId?:string, entityRevision?:string, entityType?:string}>, description?:string, entityId?:string, entityRevision?:string, glossaryTerms?:array<array{name?:string, shortDescription?:string}>, name?:string}}, name:string, ownerProjectId:string, ownerProjectName?:string, revision?:string}>, subscribedPrincipals:array<array{project?:array{id?:string, name?:string}}>, updatedAt:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function updateSubscriptionRequestAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applicableAssetTypes?:array<string>, authorizedPrincipals?:array<string>, domainIdentifier:string, environmentIdentifier:string, identifier:string, manageAccessRole?:string, name?:string, provider?:string, subscriptionTargetConfig?:array<array{content:string, formName:string}>} $args
     * @return \AWS\Result<array{applicableAssetTypes:array<string>, authorizedPrincipals:array<string>, createdAt:int|string|\DateTimeInterface, createdBy:string, domainId:string, environmentId:string, id:string, manageAccessRole?:string, name:string, projectId:string, provider:string, subscriptionTargetConfig:array<array{content:string, formName:string}>, type:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function updateSubscriptionTarget(array $args): \AWS\Result { }

    /**
     * @param array{applicableAssetTypes?:array<string>, authorizedPrincipals?:array<string>, domainIdentifier:string, environmentIdentifier:string, identifier:string, manageAccessRole?:string, name?:string, provider?:string, subscriptionTargetConfig?:array<array{content:string, formName:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{applicableAssetTypes:array<string>, authorizedPrincipals:array<string>, createdAt:int|string|\DateTimeInterface, createdBy:string, domainId:string, environmentId:string, id:string, manageAccessRole?:string, name:string, projectId:string, provider:string, subscriptionTargetConfig:array<array{content:string, formName:string}>, type:string, updatedAt?:int|string|\DateTimeInterface, updatedBy?:string}>
     */
    public function updateSubscriptionTargetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{domainIdentifier:string, status:"ASSIGNED"|"NOT_ASSIGNED"|"ACTIVATED"|"DEACTIVATED", type?:"IAM"|"SSO", userIdentifier:string} $args
     * @return \AWS\Result<array{details?:array{iam?:array{arn?:string}, sso?:array{firstName?:string, lastName?:string, username?:string}}, domainId?:string, id?:string, status?:"ASSIGNED"|"NOT_ASSIGNED"|"ACTIVATED"|"DEACTIVATED", type?:"IAM"|"SSO"}>
     */
    public function updateUserProfile(array $args): \AWS\Result { }

    /**
     * @param array{domainIdentifier:string, status:"ASSIGNED"|"NOT_ASSIGNED"|"ACTIVATED"|"DEACTIVATED", type?:"IAM"|"SSO", userIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{details?:array{iam?:array{arn?:string}, sso?:array{firstName?:string, lastName?:string, username?:string}}, domainId?:string, id?:string, status?:"ASSIGNED"|"NOT_ASSIGNED"|"ACTIVATED"|"DEACTIVATED", type?:"IAM"|"SSO"}>
     */
    public function updateUserProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
