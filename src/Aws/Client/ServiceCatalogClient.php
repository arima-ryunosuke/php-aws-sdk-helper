<?php
namespace AWS\ServiceCatalog;

class ServiceCatalogClient
{
    /**
     * @param array{AcceptLanguage?:string, PortfolioId:string, PortfolioShareType?:"IMPORTED"|"AWS_SERVICECATALOG"|"AWS_ORGANIZATIONS"} $args
     * @return \AWS\Result<array{}>
     */
    public function acceptPortfolioShare(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, PortfolioId:string, PortfolioShareType?:"IMPORTED"|"AWS_SERVICECATALOG"|"AWS_ORGANIZATIONS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function acceptPortfolioShareAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BudgetName:string, ResourceId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function associateBudgetWithResource(array $args): \AWS\Result { }

    /**
     * @param array{BudgetName:string, ResourceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateBudgetWithResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, PortfolioId:string, PrincipalARN:string, PrincipalType:"IAM"|"IAM_PATTERN"} $args
     * @return \AWS\Result<array{}>
     */
    public function associatePrincipalWithPortfolio(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, PortfolioId:string, PrincipalARN:string, PrincipalType:"IAM"|"IAM_PATTERN"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associatePrincipalWithPortfolioAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, ProductId:string, PortfolioId:string, SourcePortfolioId?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function associateProductWithPortfolio(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, ProductId:string, PortfolioId:string, SourcePortfolioId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateProductWithPortfolioAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProductId:string, ProvisioningArtifactId:string, ServiceActionId:string, AcceptLanguage?:string, IdempotencyToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function associateServiceActionWithProvisioningArtifact(array $args): \AWS\Result { }

    /**
     * @param array{ProductId:string, ProvisioningArtifactId:string, ServiceActionId:string, AcceptLanguage?:string, IdempotencyToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateServiceActionWithProvisioningArtifactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, TagOptionId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function associateTagOptionWithResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, TagOptionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateTagOptionWithResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceActionAssociations:array<array{ServiceActionId:string, ProductId:string, ProvisioningArtifactId:string}>, AcceptLanguage?:string} $args
     * @return \AWS\Result<array{FailedServiceActionAssociations?:array<array{ServiceActionId?:string, ProductId?:string, ProvisioningArtifactId?:string, ErrorCode?:"DUPLICATE_RESOURCE"|"INTERNAL_FAILURE"|"LIMIT_EXCEEDED"|"RESOURCE_NOT_FOUND"|"THROTTLING"|"INVALID_PARAMETER", ErrorMessage?:string}>}>
     */
    public function batchAssociateServiceActionWithProvisioningArtifact(array $args): \AWS\Result { }

    /**
     * @param array{ServiceActionAssociations:array<array{ServiceActionId:string, ProductId:string, ProvisioningArtifactId:string}>, AcceptLanguage?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FailedServiceActionAssociations?:array<array{ServiceActionId?:string, ProductId?:string, ProvisioningArtifactId?:string, ErrorCode?:"DUPLICATE_RESOURCE"|"INTERNAL_FAILURE"|"LIMIT_EXCEEDED"|"RESOURCE_NOT_FOUND"|"THROTTLING"|"INVALID_PARAMETER", ErrorMessage?:string}>}>
     */
    public function batchAssociateServiceActionWithProvisioningArtifactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceActionAssociations:array<array{ServiceActionId:string, ProductId:string, ProvisioningArtifactId:string}>, AcceptLanguage?:string} $args
     * @return \AWS\Result<array{FailedServiceActionAssociations?:array<array{ServiceActionId?:string, ProductId?:string, ProvisioningArtifactId?:string, ErrorCode?:"DUPLICATE_RESOURCE"|"INTERNAL_FAILURE"|"LIMIT_EXCEEDED"|"RESOURCE_NOT_FOUND"|"THROTTLING"|"INVALID_PARAMETER", ErrorMessage?:string}>}>
     */
    public function batchDisassociateServiceActionFromProvisioningArtifact(array $args): \AWS\Result { }

    /**
     * @param array{ServiceActionAssociations:array<array{ServiceActionId:string, ProductId:string, ProvisioningArtifactId:string}>, AcceptLanguage?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FailedServiceActionAssociations?:array<array{ServiceActionId?:string, ProductId?:string, ProvisioningArtifactId?:string, ErrorCode?:"DUPLICATE_RESOURCE"|"INTERNAL_FAILURE"|"LIMIT_EXCEEDED"|"RESOURCE_NOT_FOUND"|"THROTTLING"|"INVALID_PARAMETER", ErrorMessage?:string}>}>
     */
    public function batchDisassociateServiceActionFromProvisioningArtifactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, SourceProductArn:string, TargetProductId?:string, TargetProductName?:string, SourceProvisioningArtifactIdentifiers?:array<array<"Id", string>>, CopyOptions?:array<"CopyTags">, IdempotencyToken:string} $args
     * @return \AWS\Result<array{CopyProductToken?:string}>
     */
    public function copyProduct(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, SourceProductArn:string, TargetProductId?:string, TargetProductName?:string, SourceProvisioningArtifactIdentifiers?:array<array<"Id", string>>, CopyOptions?:array<"CopyTags">, IdempotencyToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CopyProductToken?:string}>
     */
    public function copyProductAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, PortfolioId:string, ProductId:string, Parameters:string, Type:string, Description?:string, IdempotencyToken:string} $args
     * @return \AWS\Result<array{ConstraintDetail?:array{ConstraintId?:string, Type?:string, Description?:string, Owner?:string, ProductId?:string, PortfolioId?:string}, ConstraintParameters?:string, Status?:"AVAILABLE"|"CREATING"|"FAILED"}>
     */
    public function createConstraint(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, PortfolioId:string, ProductId:string, Parameters:string, Type:string, Description?:string, IdempotencyToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConstraintDetail?:array{ConstraintId?:string, Type?:string, Description?:string, Owner?:string, ProductId?:string, PortfolioId?:string}, ConstraintParameters?:string, Status?:"AVAILABLE"|"CREATING"|"FAILED"}>
     */
    public function createConstraintAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, DisplayName:string, Description?:string, ProviderName:string, Tags?:array<array{Key:string, Value:string}>, IdempotencyToken:string} $args
     * @return \AWS\Result<array{PortfolioDetail?:array{Id?:string, ARN?:string, DisplayName?:string, Description?:string, CreatedTime?:int|string|\DateTimeInterface, ProviderName?:string}, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function createPortfolio(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, DisplayName:string, Description?:string, ProviderName:string, Tags?:array<array{Key:string, Value:string}>, IdempotencyToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PortfolioDetail?:array{Id?:string, ARN?:string, DisplayName?:string, Description?:string, CreatedTime?:int|string|\DateTimeInterface, ProviderName?:string}, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function createPortfolioAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, PortfolioId:string, AccountId?:string, OrganizationNode?:array{Type?:"ORGANIZATION"|"ORGANIZATIONAL_UNIT"|"ACCOUNT", Value?:string}, ShareTagOptions?:bool, SharePrincipals?:bool} $args
     * @return \AWS\Result<array{PortfolioShareToken?:string}>
     */
    public function createPortfolioShare(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, PortfolioId:string, AccountId?:string, OrganizationNode?:array{Type?:"ORGANIZATION"|"ORGANIZATIONAL_UNIT"|"ACCOUNT", Value?:string}, ShareTagOptions?:bool, SharePrincipals?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{PortfolioShareToken?:string}>
     */
    public function createPortfolioShareAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, Name:string, Owner:string, Description?:string, Distributor?:string, SupportDescription?:string, SupportEmail?:string, SupportUrl?:string, ProductType:"CLOUD_FORMATION_TEMPLATE"|"MARKETPLACE"|"TERRAFORM_OPEN_SOURCE"|"TERRAFORM_CLOUD"|"EXTERNAL", Tags?:array<array{Key:string, Value:string}>, ProvisioningArtifactParameters?:array{Name?:string, Description?:string, Info?:array<string, string>, Type?:"CLOUD_FORMATION_TEMPLATE"|"MARKETPLACE_AMI"|"MARKETPLACE_CAR"|"TERRAFORM_OPEN_SOURCE"|"TERRAFORM_CLOUD"|"EXTERNAL", DisableTemplateValidation?:bool}, IdempotencyToken:string, SourceConnection?:array{Type?:"CODESTAR", ConnectionParameters:array{CodeStar?:array{ConnectionArn:string, Repository:string, Branch:string, ArtifactPath:string}}}} $args
     * @return \AWS\Result<array{ProductViewDetail?:array{ProductViewSummary?:array{Id?:string, ProductId?:string, Name?:string, Owner?:string, ShortDescription?:string, Type?:"CLOUD_FORMATION_TEMPLATE"|"MARKETPLACE"|"TERRAFORM_OPEN_SOURCE"|"TERRAFORM_CLOUD"|"EXTERNAL", Distributor?:string, HasDefaultPath?:bool, SupportEmail?:string, SupportDescription?:string, SupportUrl?:string}, Status?:"AVAILABLE"|"CREATING"|"FAILED", ProductARN?:string, CreatedTime?:int|string|\DateTimeInterface, SourceConnection?:array{Type?:"CODESTAR", ConnectionParameters?:array{CodeStar?:array{ConnectionArn:string, Repository:string, Branch:string, ArtifactPath:string}}, LastSync?:array{LastSyncTime?:int|string|\DateTimeInterface, LastSyncStatus?:"SUCCEEDED"|"FAILED", LastSyncStatusMessage?:string, LastSuccessfulSyncTime?:int|string|\DateTimeInterface, LastSuccessfulSyncProvisioningArtifactId?:string}}}, ProvisioningArtifactDetail?:array{Id?:string, Name?:string, Description?:string, Type?:"CLOUD_FORMATION_TEMPLATE"|"MARKETPLACE_AMI"|"MARKETPLACE_CAR"|"TERRAFORM_OPEN_SOURCE"|"TERRAFORM_CLOUD"|"EXTERNAL", CreatedTime?:int|string|\DateTimeInterface, Active?:bool, Guidance?:"DEFAULT"|"DEPRECATED", SourceRevision?:string}, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function createProduct(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, Name:string, Owner:string, Description?:string, Distributor?:string, SupportDescription?:string, SupportEmail?:string, SupportUrl?:string, ProductType:"CLOUD_FORMATION_TEMPLATE"|"MARKETPLACE"|"TERRAFORM_OPEN_SOURCE"|"TERRAFORM_CLOUD"|"EXTERNAL", Tags?:array<array{Key:string, Value:string}>, ProvisioningArtifactParameters?:array{Name?:string, Description?:string, Info?:array<string, string>, Type?:"CLOUD_FORMATION_TEMPLATE"|"MARKETPLACE_AMI"|"MARKETPLACE_CAR"|"TERRAFORM_OPEN_SOURCE"|"TERRAFORM_CLOUD"|"EXTERNAL", DisableTemplateValidation?:bool}, IdempotencyToken:string, SourceConnection?:array{Type?:"CODESTAR", ConnectionParameters:array{CodeStar?:array{ConnectionArn:string, Repository:string, Branch:string, ArtifactPath:string}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProductViewDetail?:array{ProductViewSummary?:array{Id?:string, ProductId?:string, Name?:string, Owner?:string, ShortDescription?:string, Type?:"CLOUD_FORMATION_TEMPLATE"|"MARKETPLACE"|"TERRAFORM_OPEN_SOURCE"|"TERRAFORM_CLOUD"|"EXTERNAL", Distributor?:string, HasDefaultPath?:bool, SupportEmail?:string, SupportDescription?:string, SupportUrl?:string}, Status?:"AVAILABLE"|"CREATING"|"FAILED", ProductARN?:string, CreatedTime?:int|string|\DateTimeInterface, SourceConnection?:array{Type?:"CODESTAR", ConnectionParameters?:array{CodeStar?:array{ConnectionArn:string, Repository:string, Branch:string, ArtifactPath:string}}, LastSync?:array{LastSyncTime?:int|string|\DateTimeInterface, LastSyncStatus?:"SUCCEEDED"|"FAILED", LastSyncStatusMessage?:string, LastSuccessfulSyncTime?:int|string|\DateTimeInterface, LastSuccessfulSyncProvisioningArtifactId?:string}}}, ProvisioningArtifactDetail?:array{Id?:string, Name?:string, Description?:string, Type?:"CLOUD_FORMATION_TEMPLATE"|"MARKETPLACE_AMI"|"MARKETPLACE_CAR"|"TERRAFORM_OPEN_SOURCE"|"TERRAFORM_CLOUD"|"EXTERNAL", CreatedTime?:int|string|\DateTimeInterface, Active?:bool, Guidance?:"DEFAULT"|"DEPRECATED", SourceRevision?:string}, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function createProductAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, PlanName:string, PlanType:"CLOUDFORMATION", NotificationArns?:array<string>, PathId?:string, ProductId:string, ProvisionedProductName:string, ProvisioningArtifactId:string, ProvisioningParameters?:array<array{Key?:string, Value?:string, UsePreviousValue?:bool}>, IdempotencyToken:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{PlanName?:string, PlanId?:string, ProvisionProductId?:string, ProvisionedProductName?:string, ProvisioningArtifactId?:string}>
     */
    public function createProvisionedProductPlan(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, PlanName:string, PlanType:"CLOUDFORMATION", NotificationArns?:array<string>, PathId?:string, ProductId:string, ProvisionedProductName:string, ProvisioningArtifactId:string, ProvisioningParameters?:array<array{Key?:string, Value?:string, UsePreviousValue?:bool}>, IdempotencyToken:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{PlanName?:string, PlanId?:string, ProvisionProductId?:string, ProvisionedProductName?:string, ProvisioningArtifactId?:string}>
     */
    public function createProvisionedProductPlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, ProductId:string, Parameters:array{Name?:string, Description?:string, Info?:array<string, string>, Type?:"CLOUD_FORMATION_TEMPLATE"|"MARKETPLACE_AMI"|"MARKETPLACE_CAR"|"TERRAFORM_OPEN_SOURCE"|"TERRAFORM_CLOUD"|"EXTERNAL", DisableTemplateValidation?:bool}, IdempotencyToken:string} $args
     * @return \AWS\Result<array{ProvisioningArtifactDetail?:array{Id?:string, Name?:string, Description?:string, Type?:"CLOUD_FORMATION_TEMPLATE"|"MARKETPLACE_AMI"|"MARKETPLACE_CAR"|"TERRAFORM_OPEN_SOURCE"|"TERRAFORM_CLOUD"|"EXTERNAL", CreatedTime?:int|string|\DateTimeInterface, Active?:bool, Guidance?:"DEFAULT"|"DEPRECATED", SourceRevision?:string}, Info?:array<string, string>, Status?:"AVAILABLE"|"CREATING"|"FAILED"}>
     */
    public function createProvisioningArtifact(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, ProductId:string, Parameters:array{Name?:string, Description?:string, Info?:array<string, string>, Type?:"CLOUD_FORMATION_TEMPLATE"|"MARKETPLACE_AMI"|"MARKETPLACE_CAR"|"TERRAFORM_OPEN_SOURCE"|"TERRAFORM_CLOUD"|"EXTERNAL", DisableTemplateValidation?:bool}, IdempotencyToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProvisioningArtifactDetail?:array{Id?:string, Name?:string, Description?:string, Type?:"CLOUD_FORMATION_TEMPLATE"|"MARKETPLACE_AMI"|"MARKETPLACE_CAR"|"TERRAFORM_OPEN_SOURCE"|"TERRAFORM_CLOUD"|"EXTERNAL", CreatedTime?:int|string|\DateTimeInterface, Active?:bool, Guidance?:"DEFAULT"|"DEPRECATED", SourceRevision?:string}, Info?:array<string, string>, Status?:"AVAILABLE"|"CREATING"|"FAILED"}>
     */
    public function createProvisioningArtifactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, DefinitionType:"SSM_AUTOMATION", Definition:array<"Name"|"Version"|"AssumeRole"|"Parameters", string>, Description?:string, AcceptLanguage?:string, IdempotencyToken:string} $args
     * @return \AWS\Result<array{ServiceActionDetail?:array{ServiceActionSummary?:array{Id?:string, Name?:string, Description?:string, DefinitionType?:"SSM_AUTOMATION"}, Definition?:array<"Name"|"Version"|"AssumeRole"|"Parameters", string>}}>
     */
    public function createServiceAction(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, DefinitionType:"SSM_AUTOMATION", Definition:array<"Name"|"Version"|"AssumeRole"|"Parameters", string>, Description?:string, AcceptLanguage?:string, IdempotencyToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServiceActionDetail?:array{ServiceActionSummary?:array{Id?:string, Name?:string, Description?:string, DefinitionType?:"SSM_AUTOMATION"}, Definition?:array<"Name"|"Version"|"AssumeRole"|"Parameters", string>}}>
     */
    public function createServiceActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Key:string, Value:string} $args
     * @return \AWS\Result<array{TagOptionDetail?:array{Key?:string, Value?:string, Active?:bool, Id?:string, Owner?:string}}>
     */
    public function createTagOption(array $args): \AWS\Result { }

    /**
     * @param array{Key:string, Value:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TagOptionDetail?:array{Key?:string, Value?:string, Active?:bool, Id?:string, Owner?:string}}>
     */
    public function createTagOptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, Id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteConstraint(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteConstraintAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, Id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deletePortfolio(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deletePortfolioAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, PortfolioId:string, AccountId?:string, OrganizationNode?:array{Type?:"ORGANIZATION"|"ORGANIZATIONAL_UNIT"|"ACCOUNT", Value?:string}} $args
     * @return \AWS\Result<array{PortfolioShareToken?:string}>
     */
    public function deletePortfolioShare(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, PortfolioId:string, AccountId?:string, OrganizationNode?:array{Type?:"ORGANIZATION"|"ORGANIZATIONAL_UNIT"|"ACCOUNT", Value?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{PortfolioShareToken?:string}>
     */
    public function deletePortfolioShareAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, Id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteProduct(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteProductAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, PlanId:string, IgnoreErrors?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteProvisionedProductPlan(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, PlanId:string, IgnoreErrors?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteProvisionedProductPlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, ProductId:string, ProvisioningArtifactId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteProvisioningArtifact(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, ProductId:string, ProvisioningArtifactId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteProvisioningArtifactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, AcceptLanguage?:string, IdempotencyToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteServiceAction(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, AcceptLanguage?:string, IdempotencyToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteServiceActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteTagOption(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteTagOptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, Id:string} $args
     * @return \AWS\Result<array{ConstraintDetail?:array{ConstraintId?:string, Type?:string, Description?:string, Owner?:string, ProductId?:string, PortfolioId?:string}, ConstraintParameters?:string, Status?:"AVAILABLE"|"CREATING"|"FAILED"}>
     */
    public function describeConstraint(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConstraintDetail?:array{ConstraintId?:string, Type?:string, Description?:string, Owner?:string, ProductId?:string, PortfolioId?:string}, ConstraintParameters?:string, Status?:"AVAILABLE"|"CREATING"|"FAILED"}>
     */
    public function describeConstraintAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, CopyProductToken:string} $args
     * @return \AWS\Result<array{CopyProductStatus?:"SUCCEEDED"|"IN_PROGRESS"|"FAILED", TargetProductId?:string, StatusDetail?:string}>
     */
    public function describeCopyProductStatus(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, CopyProductToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CopyProductStatus?:"SUCCEEDED"|"IN_PROGRESS"|"FAILED", TargetProductId?:string, StatusDetail?:string}>
     */
    public function describeCopyProductStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, Id:string} $args
     * @return \AWS\Result<array{PortfolioDetail?:array{Id?:string, ARN?:string, DisplayName?:string, Description?:string, CreatedTime?:int|string|\DateTimeInterface, ProviderName?:string}, Tags?:array<array{Key:string, Value:string}>, TagOptions?:array<array{Key?:string, Value?:string, Active?:bool, Id?:string, Owner?:string}>, Budgets?:array<array{BudgetName?:string}>}>
     */
    public function describePortfolio(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PortfolioDetail?:array{Id?:string, ARN?:string, DisplayName?:string, Description?:string, CreatedTime?:int|string|\DateTimeInterface, ProviderName?:string}, Tags?:array<array{Key:string, Value:string}>, TagOptions?:array<array{Key?:string, Value?:string, Active?:bool, Id?:string, Owner?:string}>, Budgets?:array<array{BudgetName?:string}>}>
     */
    public function describePortfolioAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PortfolioShareToken:string} $args
     * @return \AWS\Result<array{PortfolioShareToken?:string, PortfolioId?:string, OrganizationNodeValue?:string, Status?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETED"|"COMPLETED_WITH_ERRORS"|"ERROR", ShareDetails?:array{SuccessfulShares?:array<string>, ShareErrors?:array<array{Accounts?:array<string>, Message?:string, Error?:string}>}}>
     */
    public function describePortfolioShareStatus(array $args): \AWS\Result { }

    /**
     * @param array{PortfolioShareToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PortfolioShareToken?:string, PortfolioId?:string, OrganizationNodeValue?:string, Status?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETED"|"COMPLETED_WITH_ERRORS"|"ERROR", ShareDetails?:array{SuccessfulShares?:array<string>, ShareErrors?:array<array{Accounts?:array<string>, Message?:string, Error?:string}>}}>
     */
    public function describePortfolioShareStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PortfolioId:string, Type:"ACCOUNT"|"ORGANIZATION"|"ORGANIZATIONAL_UNIT"|"ORGANIZATION_MEMBER_ACCOUNT", PageToken?:string, PageSize?:int} $args
     * @return \AWS\Result<array{NextPageToken?:string, PortfolioShareDetails?:array<array{PrincipalId?:string, Type?:"ACCOUNT"|"ORGANIZATION"|"ORGANIZATIONAL_UNIT"|"ORGANIZATION_MEMBER_ACCOUNT", Accepted?:bool, ShareTagOptions?:bool, SharePrincipals?:bool}>}>
     */
    public function describePortfolioShares(array $args): \AWS\Result { }

    /**
     * @param array{PortfolioId:string, Type:"ACCOUNT"|"ORGANIZATION"|"ORGANIZATIONAL_UNIT"|"ORGANIZATION_MEMBER_ACCOUNT", PageToken?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextPageToken?:string, PortfolioShareDetails?:array<array{PrincipalId?:string, Type?:"ACCOUNT"|"ORGANIZATION"|"ORGANIZATIONAL_UNIT"|"ORGANIZATION_MEMBER_ACCOUNT", Accepted?:bool, ShareTagOptions?:bool, SharePrincipals?:bool}>}>
     */
    public function describePortfolioSharesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, Id?:string, Name?:string} $args
     * @return \AWS\Result<array{ProductViewSummary?:array{Id?:string, ProductId?:string, Name?:string, Owner?:string, ShortDescription?:string, Type?:"CLOUD_FORMATION_TEMPLATE"|"MARKETPLACE"|"TERRAFORM_OPEN_SOURCE"|"TERRAFORM_CLOUD"|"EXTERNAL", Distributor?:string, HasDefaultPath?:bool, SupportEmail?:string, SupportDescription?:string, SupportUrl?:string}, ProvisioningArtifacts?:array<array{Id?:string, Name?:string, Description?:string, CreatedTime?:int|string|\DateTimeInterface, Guidance?:"DEFAULT"|"DEPRECATED"}>, Budgets?:array<array{BudgetName?:string}>, LaunchPaths?:array<array{Id?:string, Name?:string}>}>
     */
    public function describeProduct(array $args = []): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, Id?:string, Name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProductViewSummary?:array{Id?:string, ProductId?:string, Name?:string, Owner?:string, ShortDescription?:string, Type?:"CLOUD_FORMATION_TEMPLATE"|"MARKETPLACE"|"TERRAFORM_OPEN_SOURCE"|"TERRAFORM_CLOUD"|"EXTERNAL", Distributor?:string, HasDefaultPath?:bool, SupportEmail?:string, SupportDescription?:string, SupportUrl?:string}, ProvisioningArtifacts?:array<array{Id?:string, Name?:string, Description?:string, CreatedTime?:int|string|\DateTimeInterface, Guidance?:"DEFAULT"|"DEPRECATED"}>, Budgets?:array<array{BudgetName?:string}>, LaunchPaths?:array<array{Id?:string, Name?:string}>}>
     */
    public function describeProductAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, Id?:string, Name?:string, SourcePortfolioId?:string} $args
     * @return \AWS\Result<array{ProductViewDetail?:array{ProductViewSummary?:array{Id?:string, ProductId?:string, Name?:string, Owner?:string, ShortDescription?:string, Type?:"CLOUD_FORMATION_TEMPLATE"|"MARKETPLACE"|"TERRAFORM_OPEN_SOURCE"|"TERRAFORM_CLOUD"|"EXTERNAL", Distributor?:string, HasDefaultPath?:bool, SupportEmail?:string, SupportDescription?:string, SupportUrl?:string}, Status?:"AVAILABLE"|"CREATING"|"FAILED", ProductARN?:string, CreatedTime?:int|string|\DateTimeInterface, SourceConnection?:array{Type?:"CODESTAR", ConnectionParameters?:array{CodeStar?:array{ConnectionArn:string, Repository:string, Branch:string, ArtifactPath:string}}, LastSync?:array{LastSyncTime?:int|string|\DateTimeInterface, LastSyncStatus?:"SUCCEEDED"|"FAILED", LastSyncStatusMessage?:string, LastSuccessfulSyncTime?:int|string|\DateTimeInterface, LastSuccessfulSyncProvisioningArtifactId?:string}}}, ProvisioningArtifactSummaries?:array<array{Id?:string, Name?:string, Description?:string, CreatedTime?:int|string|\DateTimeInterface, ProvisioningArtifactMetadata?:array<string, string>}>, Tags?:array<array{Key:string, Value:string}>, TagOptions?:array<array{Key?:string, Value?:string, Active?:bool, Id?:string, Owner?:string}>, Budgets?:array<array{BudgetName?:string}>}>
     */
    public function describeProductAsAdmin(array $args = []): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, Id?:string, Name?:string, SourcePortfolioId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProductViewDetail?:array{ProductViewSummary?:array{Id?:string, ProductId?:string, Name?:string, Owner?:string, ShortDescription?:string, Type?:"CLOUD_FORMATION_TEMPLATE"|"MARKETPLACE"|"TERRAFORM_OPEN_SOURCE"|"TERRAFORM_CLOUD"|"EXTERNAL", Distributor?:string, HasDefaultPath?:bool, SupportEmail?:string, SupportDescription?:string, SupportUrl?:string}, Status?:"AVAILABLE"|"CREATING"|"FAILED", ProductARN?:string, CreatedTime?:int|string|\DateTimeInterface, SourceConnection?:array{Type?:"CODESTAR", ConnectionParameters?:array{CodeStar?:array{ConnectionArn:string, Repository:string, Branch:string, ArtifactPath:string}}, LastSync?:array{LastSyncTime?:int|string|\DateTimeInterface, LastSyncStatus?:"SUCCEEDED"|"FAILED", LastSyncStatusMessage?:string, LastSuccessfulSyncTime?:int|string|\DateTimeInterface, LastSuccessfulSyncProvisioningArtifactId?:string}}}, ProvisioningArtifactSummaries?:array<array{Id?:string, Name?:string, Description?:string, CreatedTime?:int|string|\DateTimeInterface, ProvisioningArtifactMetadata?:array<string, string>}>, Tags?:array<array{Key:string, Value:string}>, TagOptions?:array<array{Key?:string, Value?:string, Active?:bool, Id?:string, Owner?:string}>, Budgets?:array<array{BudgetName?:string}>}>
     */
    public function describeProductAsAdminAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, Id:string} $args
     * @return \AWS\Result<array{ProductViewSummary?:array{Id?:string, ProductId?:string, Name?:string, Owner?:string, ShortDescription?:string, Type?:"CLOUD_FORMATION_TEMPLATE"|"MARKETPLACE"|"TERRAFORM_OPEN_SOURCE"|"TERRAFORM_CLOUD"|"EXTERNAL", Distributor?:string, HasDefaultPath?:bool, SupportEmail?:string, SupportDescription?:string, SupportUrl?:string}, ProvisioningArtifacts?:array<array{Id?:string, Name?:string, Description?:string, CreatedTime?:int|string|\DateTimeInterface, Guidance?:"DEFAULT"|"DEPRECATED"}>}>
     */
    public function describeProductView(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProductViewSummary?:array{Id?:string, ProductId?:string, Name?:string, Owner?:string, ShortDescription?:string, Type?:"CLOUD_FORMATION_TEMPLATE"|"MARKETPLACE"|"TERRAFORM_OPEN_SOURCE"|"TERRAFORM_CLOUD"|"EXTERNAL", Distributor?:string, HasDefaultPath?:bool, SupportEmail?:string, SupportDescription?:string, SupportUrl?:string}, ProvisioningArtifacts?:array<array{Id?:string, Name?:string, Description?:string, CreatedTime?:int|string|\DateTimeInterface, Guidance?:"DEFAULT"|"DEPRECATED"}>}>
     */
    public function describeProductViewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, Id?:string, Name?:string} $args
     * @return \AWS\Result<array{ProvisionedProductDetail?:array{Name?:string, Arn?:string, Type?:string, Id?:string, Status?:"AVAILABLE"|"UNDER_CHANGE"|"TAINTED"|"ERROR"|"PLAN_IN_PROGRESS", StatusMessage?:string, CreatedTime?:int|string|\DateTimeInterface, IdempotencyToken?:string, LastRecordId?:string, LastProvisioningRecordId?:string, LastSuccessfulProvisioningRecordId?:string, ProductId?:string, ProvisioningArtifactId?:string, LaunchRoleArn?:string}, CloudWatchDashboards?:array<array{Name?:string}>}>
     */
    public function describeProvisionedProduct(array $args = []): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, Id?:string, Name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProvisionedProductDetail?:array{Name?:string, Arn?:string, Type?:string, Id?:string, Status?:"AVAILABLE"|"UNDER_CHANGE"|"TAINTED"|"ERROR"|"PLAN_IN_PROGRESS", StatusMessage?:string, CreatedTime?:int|string|\DateTimeInterface, IdempotencyToken?:string, LastRecordId?:string, LastProvisioningRecordId?:string, LastSuccessfulProvisioningRecordId?:string, ProductId?:string, ProvisioningArtifactId?:string, LaunchRoleArn?:string}, CloudWatchDashboards?:array<array{Name?:string}>}>
     */
    public function describeProvisionedProductAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, PlanId:string, PageSize?:int, PageToken?:string} $args
     * @return \AWS\Result<array{ProvisionedProductPlanDetails?:array{CreatedTime?:int|string|\DateTimeInterface, PathId?:string, ProductId?:string, PlanName?:string, PlanId?:string, ProvisionProductId?:string, ProvisionProductName?:string, PlanType?:"CLOUDFORMATION", ProvisioningArtifactId?:string, Status?:"CREATE_IN_PROGRESS"|"CREATE_SUCCESS"|"CREATE_FAILED"|"EXECUTE_IN_PROGRESS"|"EXECUTE_SUCCESS"|"EXECUTE_FAILED", UpdatedTime?:int|string|\DateTimeInterface, NotificationArns?:array<string>, ProvisioningParameters?:array<array{Key?:string, Value?:string, UsePreviousValue?:bool}>, Tags?:array<array{Key:string, Value:string}>, StatusMessage?:string}, ResourceChanges?:array<array{Action?:"ADD"|"MODIFY"|"REMOVE", LogicalResourceId?:string, PhysicalResourceId?:string, ResourceType?:string, Replacement?:"TRUE"|"FALSE"|"CONDITIONAL", Scope?:array<"PROPERTIES"|"METADATA"|"CREATIONPOLICY"|"UPDATEPOLICY"|"DELETIONPOLICY"|"TAGS">, Details?:array<array{Target?:array{Attribute?:"PROPERTIES"|"METADATA"|"CREATIONPOLICY"|"UPDATEPOLICY"|"DELETIONPOLICY"|"TAGS", Name?:string, RequiresRecreation?:"NEVER"|"CONDITIONALLY"|"ALWAYS"}, Evaluation?:"STATIC"|"DYNAMIC", CausingEntity?:string}>}>, NextPageToken?:string}>
     */
    public function describeProvisionedProductPlan(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, PlanId:string, PageSize?:int, PageToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProvisionedProductPlanDetails?:array{CreatedTime?:int|string|\DateTimeInterface, PathId?:string, ProductId?:string, PlanName?:string, PlanId?:string, ProvisionProductId?:string, ProvisionProductName?:string, PlanType?:"CLOUDFORMATION", ProvisioningArtifactId?:string, Status?:"CREATE_IN_PROGRESS"|"CREATE_SUCCESS"|"CREATE_FAILED"|"EXECUTE_IN_PROGRESS"|"EXECUTE_SUCCESS"|"EXECUTE_FAILED", UpdatedTime?:int|string|\DateTimeInterface, NotificationArns?:array<string>, ProvisioningParameters?:array<array{Key?:string, Value?:string, UsePreviousValue?:bool}>, Tags?:array<array{Key:string, Value:string}>, StatusMessage?:string}, ResourceChanges?:array<array{Action?:"ADD"|"MODIFY"|"REMOVE", LogicalResourceId?:string, PhysicalResourceId?:string, ResourceType?:string, Replacement?:"TRUE"|"FALSE"|"CONDITIONAL", Scope?:array<"PROPERTIES"|"METADATA"|"CREATIONPOLICY"|"UPDATEPOLICY"|"DELETIONPOLICY"|"TAGS">, Details?:array<array{Target?:array{Attribute?:"PROPERTIES"|"METADATA"|"CREATIONPOLICY"|"UPDATEPOLICY"|"DELETIONPOLICY"|"TAGS", Name?:string, RequiresRecreation?:"NEVER"|"CONDITIONALLY"|"ALWAYS"}, Evaluation?:"STATIC"|"DYNAMIC", CausingEntity?:string}>}>, NextPageToken?:string}>
     */
    public function describeProvisionedProductPlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, ProvisioningArtifactId?:string, ProductId?:string, ProvisioningArtifactName?:string, ProductName?:string, Verbose?:bool, IncludeProvisioningArtifactParameters?:bool} $args
     * @return \AWS\Result<array{ProvisioningArtifactDetail?:array{Id?:string, Name?:string, Description?:string, Type?:"CLOUD_FORMATION_TEMPLATE"|"MARKETPLACE_AMI"|"MARKETPLACE_CAR"|"TERRAFORM_OPEN_SOURCE"|"TERRAFORM_CLOUD"|"EXTERNAL", CreatedTime?:int|string|\DateTimeInterface, Active?:bool, Guidance?:"DEFAULT"|"DEPRECATED", SourceRevision?:string}, Info?:array<string, string>, Status?:"AVAILABLE"|"CREATING"|"FAILED", ProvisioningArtifactParameters?:array<array{ParameterKey?:string, DefaultValue?:string, ParameterType?:string, IsNoEcho?:bool, Description?:string, ParameterConstraints?:array{AllowedValues?:array<string>, AllowedPattern?:string, ConstraintDescription?:string, MaxLength?:string, MinLength?:string, MaxValue?:string, MinValue?:string}}>}>
     */
    public function describeProvisioningArtifact(array $args = []): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, ProvisioningArtifactId?:string, ProductId?:string, ProvisioningArtifactName?:string, ProductName?:string, Verbose?:bool, IncludeProvisioningArtifactParameters?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProvisioningArtifactDetail?:array{Id?:string, Name?:string, Description?:string, Type?:"CLOUD_FORMATION_TEMPLATE"|"MARKETPLACE_AMI"|"MARKETPLACE_CAR"|"TERRAFORM_OPEN_SOURCE"|"TERRAFORM_CLOUD"|"EXTERNAL", CreatedTime?:int|string|\DateTimeInterface, Active?:bool, Guidance?:"DEFAULT"|"DEPRECATED", SourceRevision?:string}, Info?:array<string, string>, Status?:"AVAILABLE"|"CREATING"|"FAILED", ProvisioningArtifactParameters?:array<array{ParameterKey?:string, DefaultValue?:string, ParameterType?:string, IsNoEcho?:bool, Description?:string, ParameterConstraints?:array{AllowedValues?:array<string>, AllowedPattern?:string, ConstraintDescription?:string, MaxLength?:string, MinLength?:string, MaxValue?:string, MinValue?:string}}>}>
     */
    public function describeProvisioningArtifactAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, ProductId?:string, ProductName?:string, ProvisioningArtifactId?:string, ProvisioningArtifactName?:string, PathId?:string, PathName?:string} $args
     * @return \AWS\Result<array{ProvisioningArtifactParameters?:array<array{ParameterKey?:string, DefaultValue?:string, ParameterType?:string, IsNoEcho?:bool, Description?:string, ParameterConstraints?:array{AllowedValues?:array<string>, AllowedPattern?:string, ConstraintDescription?:string, MaxLength?:string, MinLength?:string, MaxValue?:string, MinValue?:string}}>, ConstraintSummaries?:array<array{Type?:string, Description?:string}>, UsageInstructions?:array<array{Type?:string, Value?:string}>, TagOptions?:array<array{Key?:string, Values?:array<string>}>, ProvisioningArtifactPreferences?:array{StackSetAccounts?:array<string>, StackSetRegions?:array<string>}, ProvisioningArtifactOutputs?:array<array{Key?:string, Description?:string}>, ProvisioningArtifactOutputKeys?:array<array{Key?:string, Description?:string}>}>
     */
    public function describeProvisioningParameters(array $args = []): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, ProductId?:string, ProductName?:string, ProvisioningArtifactId?:string, ProvisioningArtifactName?:string, PathId?:string, PathName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProvisioningArtifactParameters?:array<array{ParameterKey?:string, DefaultValue?:string, ParameterType?:string, IsNoEcho?:bool, Description?:string, ParameterConstraints?:array{AllowedValues?:array<string>, AllowedPattern?:string, ConstraintDescription?:string, MaxLength?:string, MinLength?:string, MaxValue?:string, MinValue?:string}}>, ConstraintSummaries?:array<array{Type?:string, Description?:string}>, UsageInstructions?:array<array{Type?:string, Value?:string}>, TagOptions?:array<array{Key?:string, Values?:array<string>}>, ProvisioningArtifactPreferences?:array{StackSetAccounts?:array<string>, StackSetRegions?:array<string>}, ProvisioningArtifactOutputs?:array<array{Key?:string, Description?:string}>, ProvisioningArtifactOutputKeys?:array<array{Key?:string, Description?:string}>}>
     */
    public function describeProvisioningParametersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, Id:string, PageToken?:string, PageSize?:int} $args
     * @return \AWS\Result<array{RecordDetail?:array{RecordId?:string, ProvisionedProductName?:string, Status?:"CREATED"|"IN_PROGRESS"|"IN_PROGRESS_IN_ERROR"|"SUCCEEDED"|"FAILED", CreatedTime?:int|string|\DateTimeInterface, UpdatedTime?:int|string|\DateTimeInterface, ProvisionedProductType?:string, RecordType?:string, ProvisionedProductId?:string, ProductId?:string, ProvisioningArtifactId?:string, PathId?:string, RecordErrors?:array<array{Code?:string, Description?:string}>, RecordTags?:array<array{Key?:string, Value?:string}>, LaunchRoleArn?:string}, RecordOutputs?:array<array{OutputKey?:string, OutputValue?:string, Description?:string}>, NextPageToken?:string}>
     */
    public function describeRecord(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, Id:string, PageToken?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{RecordDetail?:array{RecordId?:string, ProvisionedProductName?:string, Status?:"CREATED"|"IN_PROGRESS"|"IN_PROGRESS_IN_ERROR"|"SUCCEEDED"|"FAILED", CreatedTime?:int|string|\DateTimeInterface, UpdatedTime?:int|string|\DateTimeInterface, ProvisionedProductType?:string, RecordType?:string, ProvisionedProductId?:string, ProductId?:string, ProvisioningArtifactId?:string, PathId?:string, RecordErrors?:array<array{Code?:string, Description?:string}>, RecordTags?:array<array{Key?:string, Value?:string}>, LaunchRoleArn?:string}, RecordOutputs?:array<array{OutputKey?:string, OutputValue?:string, Description?:string}>, NextPageToken?:string}>
     */
    public function describeRecordAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, AcceptLanguage?:string} $args
     * @return \AWS\Result<array{ServiceActionDetail?:array{ServiceActionSummary?:array{Id?:string, Name?:string, Description?:string, DefinitionType?:"SSM_AUTOMATION"}, Definition?:array<"Name"|"Version"|"AssumeRole"|"Parameters", string>}}>
     */
    public function describeServiceAction(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, AcceptLanguage?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServiceActionDetail?:array{ServiceActionSummary?:array{Id?:string, Name?:string, Description?:string, DefinitionType?:"SSM_AUTOMATION"}, Definition?:array<"Name"|"Version"|"AssumeRole"|"Parameters", string>}}>
     */
    public function describeServiceActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProvisionedProductId:string, ServiceActionId:string, AcceptLanguage?:string} $args
     * @return \AWS\Result<array{ServiceActionParameters?:array<array{Name?:string, Type?:string, DefaultValues?:array<string>}>}>
     */
    public function describeServiceActionExecutionParameters(array $args): \AWS\Result { }

    /**
     * @param array{ProvisionedProductId:string, ServiceActionId:string, AcceptLanguage?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServiceActionParameters?:array<array{Name?:string, Type?:string, DefaultValues?:array<string>}>}>
     */
    public function describeServiceActionExecutionParametersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{TagOptionDetail?:array{Key?:string, Value?:string, Active?:bool, Id?:string, Owner?:string}}>
     */
    public function describeTagOption(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TagOptionDetail?:array{Key?:string, Value?:string, Active?:bool, Id?:string, Owner?:string}}>
     */
    public function describeTagOptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{}>
     */
    public function disableAWSOrganizationsAccess(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disableAWSOrganizationsAccessAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BudgetName:string, ResourceId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateBudgetFromResource(array $args): \AWS\Result { }

    /**
     * @param array{BudgetName:string, ResourceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateBudgetFromResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, PortfolioId:string, PrincipalARN:string, PrincipalType?:"IAM"|"IAM_PATTERN"} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociatePrincipalFromPortfolio(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, PortfolioId:string, PrincipalARN:string, PrincipalType?:"IAM"|"IAM_PATTERN"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociatePrincipalFromPortfolioAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, ProductId:string, PortfolioId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateProductFromPortfolio(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, ProductId:string, PortfolioId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateProductFromPortfolioAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProductId:string, ProvisioningArtifactId:string, ServiceActionId:string, AcceptLanguage?:string, IdempotencyToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateServiceActionFromProvisioningArtifact(array $args): \AWS\Result { }

    /**
     * @param array{ProductId:string, ProvisioningArtifactId:string, ServiceActionId:string, AcceptLanguage?:string, IdempotencyToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateServiceActionFromProvisioningArtifactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceId:string, TagOptionId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateTagOptionFromResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceId:string, TagOptionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateTagOptionFromResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{}>
     */
    public function enableAWSOrganizationsAccess(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function enableAWSOrganizationsAccessAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, PlanId:string, IdempotencyToken:string} $args
     * @return \AWS\Result<array{RecordDetail?:array{RecordId?:string, ProvisionedProductName?:string, Status?:"CREATED"|"IN_PROGRESS"|"IN_PROGRESS_IN_ERROR"|"SUCCEEDED"|"FAILED", CreatedTime?:int|string|\DateTimeInterface, UpdatedTime?:int|string|\DateTimeInterface, ProvisionedProductType?:string, RecordType?:string, ProvisionedProductId?:string, ProductId?:string, ProvisioningArtifactId?:string, PathId?:string, RecordErrors?:array<array{Code?:string, Description?:string}>, RecordTags?:array<array{Key?:string, Value?:string}>, LaunchRoleArn?:string}}>
     */
    public function executeProvisionedProductPlan(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, PlanId:string, IdempotencyToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RecordDetail?:array{RecordId?:string, ProvisionedProductName?:string, Status?:"CREATED"|"IN_PROGRESS"|"IN_PROGRESS_IN_ERROR"|"SUCCEEDED"|"FAILED", CreatedTime?:int|string|\DateTimeInterface, UpdatedTime?:int|string|\DateTimeInterface, ProvisionedProductType?:string, RecordType?:string, ProvisionedProductId?:string, ProductId?:string, ProvisioningArtifactId?:string, PathId?:string, RecordErrors?:array<array{Code?:string, Description?:string}>, RecordTags?:array<array{Key?:string, Value?:string}>, LaunchRoleArn?:string}}>
     */
    public function executeProvisionedProductPlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProvisionedProductId:string, ServiceActionId:string, ExecuteToken:string, AcceptLanguage?:string, Parameters?:array<string, array<string>>} $args
     * @return \AWS\Result<array{RecordDetail?:array{RecordId?:string, ProvisionedProductName?:string, Status?:"CREATED"|"IN_PROGRESS"|"IN_PROGRESS_IN_ERROR"|"SUCCEEDED"|"FAILED", CreatedTime?:int|string|\DateTimeInterface, UpdatedTime?:int|string|\DateTimeInterface, ProvisionedProductType?:string, RecordType?:string, ProvisionedProductId?:string, ProductId?:string, ProvisioningArtifactId?:string, PathId?:string, RecordErrors?:array<array{Code?:string, Description?:string}>, RecordTags?:array<array{Key?:string, Value?:string}>, LaunchRoleArn?:string}}>
     */
    public function executeProvisionedProductServiceAction(array $args): \AWS\Result { }

    /**
     * @param array{ProvisionedProductId:string, ServiceActionId:string, ExecuteToken:string, AcceptLanguage?:string, Parameters?:array<string, array<string>>} $args
     * @return \GuzzleHttp\Promise\Promise<array{RecordDetail?:array{RecordId?:string, ProvisionedProductName?:string, Status?:"CREATED"|"IN_PROGRESS"|"IN_PROGRESS_IN_ERROR"|"SUCCEEDED"|"FAILED", CreatedTime?:int|string|\DateTimeInterface, UpdatedTime?:int|string|\DateTimeInterface, ProvisionedProductType?:string, RecordType?:string, ProvisionedProductId?:string, ProductId?:string, ProvisioningArtifactId?:string, PathId?:string, RecordErrors?:array<array{Code?:string, Description?:string}>, RecordTags?:array<array{Key?:string, Value?:string}>, LaunchRoleArn?:string}}>
     */
    public function executeProvisionedProductServiceActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{AccessStatus?:"ENABLED"|"UNDER_CHANGE"|"DISABLED"}>
     */
    public function getAWSOrganizationsAccessStatus(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccessStatus?:"ENABLED"|"UNDER_CHANGE"|"DISABLED"}>
     */
    public function getAWSOrganizationsAccessStatusAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, ProvisionedProductId?:string, ProvisionedProductName?:string, OutputKeys?:array<string>, PageSize?:int, PageToken?:string} $args
     * @return \AWS\Result<array{Outputs?:array<array{OutputKey?:string, OutputValue?:string, Description?:string}>, NextPageToken?:string}>
     */
    public function getProvisionedProductOutputs(array $args = []): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, ProvisionedProductId?:string, ProvisionedProductName?:string, OutputKeys?:array<string>, PageSize?:int, PageToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Outputs?:array<array{OutputKey?:string, OutputValue?:string, Description?:string}>, NextPageToken?:string}>
     */
    public function getProvisionedProductOutputsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, ProductId:string, ProvisioningArtifactId:string, ProvisionedProductName:string, PhysicalId:string, IdempotencyToken:string} $args
     * @return \AWS\Result<array{RecordDetail?:array{RecordId?:string, ProvisionedProductName?:string, Status?:"CREATED"|"IN_PROGRESS"|"IN_PROGRESS_IN_ERROR"|"SUCCEEDED"|"FAILED", CreatedTime?:int|string|\DateTimeInterface, UpdatedTime?:int|string|\DateTimeInterface, ProvisionedProductType?:string, RecordType?:string, ProvisionedProductId?:string, ProductId?:string, ProvisioningArtifactId?:string, PathId?:string, RecordErrors?:array<array{Code?:string, Description?:string}>, RecordTags?:array<array{Key?:string, Value?:string}>, LaunchRoleArn?:string}}>
     */
    public function importAsProvisionedProduct(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, ProductId:string, ProvisioningArtifactId:string, ProvisionedProductName:string, PhysicalId:string, IdempotencyToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RecordDetail?:array{RecordId?:string, ProvisionedProductName?:string, Status?:"CREATED"|"IN_PROGRESS"|"IN_PROGRESS_IN_ERROR"|"SUCCEEDED"|"FAILED", CreatedTime?:int|string|\DateTimeInterface, UpdatedTime?:int|string|\DateTimeInterface, ProvisionedProductType?:string, RecordType?:string, ProvisionedProductId?:string, ProductId?:string, ProvisioningArtifactId?:string, PathId?:string, RecordErrors?:array<array{Code?:string, Description?:string}>, RecordTags?:array<array{Key?:string, Value?:string}>, LaunchRoleArn?:string}}>
     */
    public function importAsProvisionedProductAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, PageToken?:string, PageSize?:int, PortfolioShareType?:"IMPORTED"|"AWS_SERVICECATALOG"|"AWS_ORGANIZATIONS"} $args
     * @return \AWS\Result<array{PortfolioDetails?:array<array{Id?:string, ARN?:string, DisplayName?:string, Description?:string, CreatedTime?:int|string|\DateTimeInterface, ProviderName?:string}>, NextPageToken?:string}>
     */
    public function listAcceptedPortfolioShares(array $args = []): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, PageToken?:string, PageSize?:int, PortfolioShareType?:"IMPORTED"|"AWS_SERVICECATALOG"|"AWS_ORGANIZATIONS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{PortfolioDetails?:array<array{Id?:string, ARN?:string, DisplayName?:string, Description?:string, CreatedTime?:int|string|\DateTimeInterface, ProviderName?:string}>, NextPageToken?:string}>
     */
    public function listAcceptedPortfolioSharesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, ResourceId:string, PageSize?:int, PageToken?:string} $args
     * @return \AWS\Result<array{Budgets?:array<array{BudgetName?:string}>, NextPageToken?:string}>
     */
    public function listBudgetsForResource(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, ResourceId:string, PageSize?:int, PageToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Budgets?:array<array{BudgetName?:string}>, NextPageToken?:string}>
     */
    public function listBudgetsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, PortfolioId:string, ProductId?:string, PageSize?:int, PageToken?:string} $args
     * @return \AWS\Result<array{ConstraintDetails?:array<array{ConstraintId?:string, Type?:string, Description?:string, Owner?:string, ProductId?:string, PortfolioId?:string}>, NextPageToken?:string}>
     */
    public function listConstraintsForPortfolio(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, PortfolioId:string, ProductId?:string, PageSize?:int, PageToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConstraintDetails?:array<array{ConstraintId?:string, Type?:string, Description?:string, Owner?:string, ProductId?:string, PortfolioId?:string}>, NextPageToken?:string}>
     */
    public function listConstraintsForPortfolioAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, ProductId:string, PageSize?:int, PageToken?:string} $args
     * @return \AWS\Result<array{LaunchPathSummaries?:array<array{Id?:string, ConstraintSummaries?:array<array{Type?:string, Description?:string}>, Tags?:array<array{Key:string, Value:string}>, Name?:string}>, NextPageToken?:string}>
     */
    public function listLaunchPaths(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, ProductId:string, PageSize?:int, PageToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LaunchPathSummaries?:array<array{Id?:string, ConstraintSummaries?:array<array{Type?:string, Description?:string}>, Tags?:array<array{Key:string, Value:string}>, Name?:string}>, NextPageToken?:string}>
     */
    public function listLaunchPathsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, PortfolioId:string, OrganizationNodeType:"ORGANIZATION"|"ORGANIZATIONAL_UNIT"|"ACCOUNT", PageToken?:string, PageSize?:int} $args
     * @return \AWS\Result<array{OrganizationNodes?:array<array{Type?:"ORGANIZATION"|"ORGANIZATIONAL_UNIT"|"ACCOUNT", Value?:string}>, NextPageToken?:string}>
     */
    public function listOrganizationPortfolioAccess(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, PortfolioId:string, OrganizationNodeType:"ORGANIZATION"|"ORGANIZATIONAL_UNIT"|"ACCOUNT", PageToken?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{OrganizationNodes?:array<array{Type?:"ORGANIZATION"|"ORGANIZATIONAL_UNIT"|"ACCOUNT", Value?:string}>, NextPageToken?:string}>
     */
    public function listOrganizationPortfolioAccessAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, PortfolioId:string, OrganizationParentId?:string, PageToken?:string, PageSize?:int} $args
     * @return \AWS\Result<array{AccountIds?:array<string>, NextPageToken?:string}>
     */
    public function listPortfolioAccess(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, PortfolioId:string, OrganizationParentId?:string, PageToken?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountIds?:array<string>, NextPageToken?:string}>
     */
    public function listPortfolioAccessAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, PageToken?:string, PageSize?:int} $args
     * @return \AWS\Result<array{PortfolioDetails?:array<array{Id?:string, ARN?:string, DisplayName?:string, Description?:string, CreatedTime?:int|string|\DateTimeInterface, ProviderName?:string}>, NextPageToken?:string}>
     */
    public function listPortfolios(array $args = []): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, PageToken?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{PortfolioDetails?:array<array{Id?:string, ARN?:string, DisplayName?:string, Description?:string, CreatedTime?:int|string|\DateTimeInterface, ProviderName?:string}>, NextPageToken?:string}>
     */
    public function listPortfoliosAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, ProductId:string, PageToken?:string, PageSize?:int} $args
     * @return \AWS\Result<array{PortfolioDetails?:array<array{Id?:string, ARN?:string, DisplayName?:string, Description?:string, CreatedTime?:int|string|\DateTimeInterface, ProviderName?:string}>, NextPageToken?:string}>
     */
    public function listPortfoliosForProduct(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, ProductId:string, PageToken?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{PortfolioDetails?:array<array{Id?:string, ARN?:string, DisplayName?:string, Description?:string, CreatedTime?:int|string|\DateTimeInterface, ProviderName?:string}>, NextPageToken?:string}>
     */
    public function listPortfoliosForProductAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, PortfolioId:string, PageSize?:int, PageToken?:string} $args
     * @return \AWS\Result<array{Principals?:array<array{PrincipalARN?:string, PrincipalType?:"IAM"|"IAM_PATTERN"}>, NextPageToken?:string}>
     */
    public function listPrincipalsForPortfolio(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, PortfolioId:string, PageSize?:int, PageToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Principals?:array<array{PrincipalARN?:string, PrincipalType?:"IAM"|"IAM_PATTERN"}>, NextPageToken?:string}>
     */
    public function listPrincipalsForPortfolioAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, ProvisionProductId?:string, PageSize?:int, PageToken?:string, AccessLevelFilter?:array{Key?:"Account"|"Role"|"User", Value?:string}} $args
     * @return \AWS\Result<array{ProvisionedProductPlans?:array<array{PlanName?:string, PlanId?:string, ProvisionProductId?:string, ProvisionProductName?:string, PlanType?:"CLOUDFORMATION", ProvisioningArtifactId?:string}>, NextPageToken?:string}>
     */
    public function listProvisionedProductPlans(array $args = []): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, ProvisionProductId?:string, PageSize?:int, PageToken?:string, AccessLevelFilter?:array{Key?:"Account"|"Role"|"User", Value?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProvisionedProductPlans?:array<array{PlanName?:string, PlanId?:string, ProvisionProductId?:string, ProvisionProductName?:string, PlanType?:"CLOUDFORMATION", ProvisioningArtifactId?:string}>, NextPageToken?:string}>
     */
    public function listProvisionedProductPlansAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, ProductId:string} $args
     * @return \AWS\Result<array{ProvisioningArtifactDetails?:array<array{Id?:string, Name?:string, Description?:string, Type?:"CLOUD_FORMATION_TEMPLATE"|"MARKETPLACE_AMI"|"MARKETPLACE_CAR"|"TERRAFORM_OPEN_SOURCE"|"TERRAFORM_CLOUD"|"EXTERNAL", CreatedTime?:int|string|\DateTimeInterface, Active?:bool, Guidance?:"DEFAULT"|"DEPRECATED", SourceRevision?:string}>, NextPageToken?:string}>
     */
    public function listProvisioningArtifacts(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, ProductId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProvisioningArtifactDetails?:array<array{Id?:string, Name?:string, Description?:string, Type?:"CLOUD_FORMATION_TEMPLATE"|"MARKETPLACE_AMI"|"MARKETPLACE_CAR"|"TERRAFORM_OPEN_SOURCE"|"TERRAFORM_CLOUD"|"EXTERNAL", CreatedTime?:int|string|\DateTimeInterface, Active?:bool, Guidance?:"DEFAULT"|"DEPRECATED", SourceRevision?:string}>, NextPageToken?:string}>
     */
    public function listProvisioningArtifactsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ServiceActionId:string, PageSize?:int, PageToken?:string, AcceptLanguage?:string} $args
     * @return \AWS\Result<array{ProvisioningArtifactViews?:array<array{ProductViewSummary?:array{Id?:string, ProductId?:string, Name?:string, Owner?:string, ShortDescription?:string, Type?:"CLOUD_FORMATION_TEMPLATE"|"MARKETPLACE"|"TERRAFORM_OPEN_SOURCE"|"TERRAFORM_CLOUD"|"EXTERNAL", Distributor?:string, HasDefaultPath?:bool, SupportEmail?:string, SupportDescription?:string, SupportUrl?:string}, ProvisioningArtifact?:array{Id?:string, Name?:string, Description?:string, CreatedTime?:int|string|\DateTimeInterface, Guidance?:"DEFAULT"|"DEPRECATED"}}>, NextPageToken?:string}>
     */
    public function listProvisioningArtifactsForServiceAction(array $args): \AWS\Result { }

    /**
     * @param array{ServiceActionId:string, PageSize?:int, PageToken?:string, AcceptLanguage?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProvisioningArtifactViews?:array<array{ProductViewSummary?:array{Id?:string, ProductId?:string, Name?:string, Owner?:string, ShortDescription?:string, Type?:"CLOUD_FORMATION_TEMPLATE"|"MARKETPLACE"|"TERRAFORM_OPEN_SOURCE"|"TERRAFORM_CLOUD"|"EXTERNAL", Distributor?:string, HasDefaultPath?:bool, SupportEmail?:string, SupportDescription?:string, SupportUrl?:string}, ProvisioningArtifact?:array{Id?:string, Name?:string, Description?:string, CreatedTime?:int|string|\DateTimeInterface, Guidance?:"DEFAULT"|"DEPRECATED"}}>, NextPageToken?:string}>
     */
    public function listProvisioningArtifactsForServiceActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, AccessLevelFilter?:array{Key?:"Account"|"Role"|"User", Value?:string}, SearchFilter?:array{Key?:string, Value?:string}, PageSize?:int, PageToken?:string} $args
     * @return \AWS\Result<array{RecordDetails?:array<array{RecordId?:string, ProvisionedProductName?:string, Status?:"CREATED"|"IN_PROGRESS"|"IN_PROGRESS_IN_ERROR"|"SUCCEEDED"|"FAILED", CreatedTime?:int|string|\DateTimeInterface, UpdatedTime?:int|string|\DateTimeInterface, ProvisionedProductType?:string, RecordType?:string, ProvisionedProductId?:string, ProductId?:string, ProvisioningArtifactId?:string, PathId?:string, RecordErrors?:array<array{Code?:string, Description?:string}>, RecordTags?:array<array{Key?:string, Value?:string}>, LaunchRoleArn?:string}>, NextPageToken?:string}>
     */
    public function listRecordHistory(array $args = []): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, AccessLevelFilter?:array{Key?:"Account"|"Role"|"User", Value?:string}, SearchFilter?:array{Key?:string, Value?:string}, PageSize?:int, PageToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RecordDetails?:array<array{RecordId?:string, ProvisionedProductName?:string, Status?:"CREATED"|"IN_PROGRESS"|"IN_PROGRESS_IN_ERROR"|"SUCCEEDED"|"FAILED", CreatedTime?:int|string|\DateTimeInterface, UpdatedTime?:int|string|\DateTimeInterface, ProvisionedProductType?:string, RecordType?:string, ProvisionedProductId?:string, ProductId?:string, ProvisioningArtifactId?:string, PathId?:string, RecordErrors?:array<array{Code?:string, Description?:string}>, RecordTags?:array<array{Key?:string, Value?:string}>, LaunchRoleArn?:string}>, NextPageToken?:string}>
     */
    public function listRecordHistoryAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TagOptionId:string, ResourceType?:string, PageSize?:int, PageToken?:string} $args
     * @return \AWS\Result<array{ResourceDetails?:array<array{Id?:string, ARN?:string, Name?:string, Description?:string, CreatedTime?:int|string|\DateTimeInterface}>, PageToken?:string}>
     */
    public function listResourcesForTagOption(array $args): \AWS\Result { }

    /**
     * @param array{TagOptionId:string, ResourceType?:string, PageSize?:int, PageToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceDetails?:array<array{Id?:string, ARN?:string, Name?:string, Description?:string, CreatedTime?:int|string|\DateTimeInterface}>, PageToken?:string}>
     */
    public function listResourcesForTagOptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, PageSize?:int, PageToken?:string} $args
     * @return \AWS\Result<array{ServiceActionSummaries?:array<array{Id?:string, Name?:string, Description?:string, DefinitionType?:"SSM_AUTOMATION"}>, NextPageToken?:string}>
     */
    public function listServiceActions(array $args = []): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, PageSize?:int, PageToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServiceActionSummaries?:array<array{Id?:string, Name?:string, Description?:string, DefinitionType?:"SSM_AUTOMATION"}>, NextPageToken?:string}>
     */
    public function listServiceActionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProductId:string, ProvisioningArtifactId:string, PageSize?:int, PageToken?:string, AcceptLanguage?:string} $args
     * @return \AWS\Result<array{ServiceActionSummaries?:array<array{Id?:string, Name?:string, Description?:string, DefinitionType?:"SSM_AUTOMATION"}>, NextPageToken?:string}>
     */
    public function listServiceActionsForProvisioningArtifact(array $args): \AWS\Result { }

    /**
     * @param array{ProductId:string, ProvisioningArtifactId:string, PageSize?:int, PageToken?:string, AcceptLanguage?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServiceActionSummaries?:array<array{Id?:string, Name?:string, Description?:string, DefinitionType?:"SSM_AUTOMATION"}>, NextPageToken?:string}>
     */
    public function listServiceActionsForProvisioningArtifactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, ProvisionedProductId:string, PageToken?:string, PageSize?:int} $args
     * @return \AWS\Result<array{StackInstances?:array<array{Account?:string, Region?:string, StackInstanceStatus?:"CURRENT"|"OUTDATED"|"INOPERABLE"}>, NextPageToken?:string}>
     */
    public function listStackInstancesForProvisionedProduct(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, ProvisionedProductId:string, PageToken?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{StackInstances?:array<array{Account?:string, Region?:string, StackInstanceStatus?:"CURRENT"|"OUTDATED"|"INOPERABLE"}>, NextPageToken?:string}>
     */
    public function listStackInstancesForProvisionedProductAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filters?:array{Key?:string, Value?:string, Active?:bool}, PageSize?:int, PageToken?:string} $args
     * @return \AWS\Result<array{TagOptionDetails?:array<array{Key?:string, Value?:string, Active?:bool, Id?:string, Owner?:string}>, PageToken?:string}>
     */
    public function listTagOptions(array $args = []): \AWS\Result { }

    /**
     * @param array{Filters?:array{Key?:string, Value?:string, Active?:bool}, PageSize?:int, PageToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TagOptionDetails?:array<array{Key?:string, Value?:string, Active?:bool, Id?:string, Owner?:string}>, PageToken?:string}>
     */
    public function listTagOptionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkflowToken:string, RecordId:string, Status:"SUCCEEDED"|"FAILED", FailureReason?:string, ResourceIdentifier?:array{UniqueTag?:array{Key?:string, Value?:string}}, Outputs?:array<array{OutputKey?:string, OutputValue?:string, Description?:string}>, IdempotencyToken:string} $args
     * @return \AWS\Result<array{}>
     */
    public function notifyProvisionProductEngineWorkflowResult(array $args): \AWS\Result { }

    /**
     * @param array{WorkflowToken:string, RecordId:string, Status:"SUCCEEDED"|"FAILED", FailureReason?:string, ResourceIdentifier?:array{UniqueTag?:array{Key?:string, Value?:string}}, Outputs?:array<array{OutputKey?:string, OutputValue?:string, Description?:string}>, IdempotencyToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function notifyProvisionProductEngineWorkflowResultAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkflowToken:string, RecordId:string, Status:"SUCCEEDED"|"FAILED", FailureReason?:string, IdempotencyToken:string} $args
     * @return \AWS\Result<array{}>
     */
    public function notifyTerminateProvisionedProductEngineWorkflowResult(array $args): \AWS\Result { }

    /**
     * @param array{WorkflowToken:string, RecordId:string, Status:"SUCCEEDED"|"FAILED", FailureReason?:string, IdempotencyToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function notifyTerminateProvisionedProductEngineWorkflowResultAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{WorkflowToken:string, RecordId:string, Status:"SUCCEEDED"|"FAILED", FailureReason?:string, Outputs?:array<array{OutputKey?:string, OutputValue?:string, Description?:string}>, IdempotencyToken:string} $args
     * @return \AWS\Result<array{}>
     */
    public function notifyUpdateProvisionedProductEngineWorkflowResult(array $args): \AWS\Result { }

    /**
     * @param array{WorkflowToken:string, RecordId:string, Status:"SUCCEEDED"|"FAILED", FailureReason?:string, Outputs?:array<array{OutputKey?:string, OutputValue?:string, Description?:string}>, IdempotencyToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function notifyUpdateProvisionedProductEngineWorkflowResultAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, ProductId?:string, ProductName?:string, ProvisioningArtifactId?:string, ProvisioningArtifactName?:string, PathId?:string, PathName?:string, ProvisionedProductName:string, ProvisioningParameters?:array<array{Key?:string, Value?:string}>, ProvisioningPreferences?:array{StackSetAccounts?:array<string>, StackSetRegions?:array<string>, StackSetFailureToleranceCount?:int, StackSetFailureTolerancePercentage?:int, StackSetMaxConcurrencyCount?:int, StackSetMaxConcurrencyPercentage?:int}, Tags?:array<array{Key:string, Value:string}>, NotificationArns?:array<string>, ProvisionToken:string} $args
     * @return \AWS\Result<array{RecordDetail?:array{RecordId?:string, ProvisionedProductName?:string, Status?:"CREATED"|"IN_PROGRESS"|"IN_PROGRESS_IN_ERROR"|"SUCCEEDED"|"FAILED", CreatedTime?:int|string|\DateTimeInterface, UpdatedTime?:int|string|\DateTimeInterface, ProvisionedProductType?:string, RecordType?:string, ProvisionedProductId?:string, ProductId?:string, ProvisioningArtifactId?:string, PathId?:string, RecordErrors?:array<array{Code?:string, Description?:string}>, RecordTags?:array<array{Key?:string, Value?:string}>, LaunchRoleArn?:string}}>
     */
    public function provisionProduct(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, ProductId?:string, ProductName?:string, ProvisioningArtifactId?:string, ProvisioningArtifactName?:string, PathId?:string, PathName?:string, ProvisionedProductName:string, ProvisioningParameters?:array<array{Key?:string, Value?:string}>, ProvisioningPreferences?:array{StackSetAccounts?:array<string>, StackSetRegions?:array<string>, StackSetFailureToleranceCount?:int, StackSetFailureTolerancePercentage?:int, StackSetMaxConcurrencyCount?:int, StackSetMaxConcurrencyPercentage?:int}, Tags?:array<array{Key:string, Value:string}>, NotificationArns?:array<string>, ProvisionToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RecordDetail?:array{RecordId?:string, ProvisionedProductName?:string, Status?:"CREATED"|"IN_PROGRESS"|"IN_PROGRESS_IN_ERROR"|"SUCCEEDED"|"FAILED", CreatedTime?:int|string|\DateTimeInterface, UpdatedTime?:int|string|\DateTimeInterface, ProvisionedProductType?:string, RecordType?:string, ProvisionedProductId?:string, ProductId?:string, ProvisioningArtifactId?:string, PathId?:string, RecordErrors?:array<array{Code?:string, Description?:string}>, RecordTags?:array<array{Key?:string, Value?:string}>, LaunchRoleArn?:string}}>
     */
    public function provisionProductAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, PortfolioId:string, PortfolioShareType?:"IMPORTED"|"AWS_SERVICECATALOG"|"AWS_ORGANIZATIONS"} $args
     * @return \AWS\Result<array{}>
     */
    public function rejectPortfolioShare(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, PortfolioId:string, PortfolioShareType?:"IMPORTED"|"AWS_SERVICECATALOG"|"AWS_ORGANIZATIONS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function rejectPortfolioShareAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, AccessLevelFilter?:array{Key?:"Account"|"Role"|"User", Value?:string}, PageSize?:int, PageToken?:string} $args
     * @return \AWS\Result<array{ProvisionedProducts?:array<array{Name?:string, Arn?:string, Type?:string, Id?:string, Status?:"AVAILABLE"|"UNDER_CHANGE"|"TAINTED"|"ERROR"|"PLAN_IN_PROGRESS", StatusMessage?:string, CreatedTime?:int|string|\DateTimeInterface, IdempotencyToken?:string, LastRecordId?:string, LastProvisioningRecordId?:string, LastSuccessfulProvisioningRecordId?:string, ProductId?:string, ProvisioningArtifactId?:string, LaunchRoleArn?:string}>, NextPageToken?:string}>
     */
    public function scanProvisionedProducts(array $args = []): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, AccessLevelFilter?:array{Key?:"Account"|"Role"|"User", Value?:string}, PageSize?:int, PageToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProvisionedProducts?:array<array{Name?:string, Arn?:string, Type?:string, Id?:string, Status?:"AVAILABLE"|"UNDER_CHANGE"|"TAINTED"|"ERROR"|"PLAN_IN_PROGRESS", StatusMessage?:string, CreatedTime?:int|string|\DateTimeInterface, IdempotencyToken?:string, LastRecordId?:string, LastProvisioningRecordId?:string, LastSuccessfulProvisioningRecordId?:string, ProductId?:string, ProvisioningArtifactId?:string, LaunchRoleArn?:string}>, NextPageToken?:string}>
     */
    public function scanProvisionedProductsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, Filters?:array<"FullTextSearch"|"Owner"|"ProductType"|"SourceProductId", array<string>>, PageSize?:int, SortBy?:"Title"|"VersionCount"|"CreationDate", SortOrder?:"ASCENDING"|"DESCENDING", PageToken?:string} $args
     * @return \AWS\Result<array{ProductViewSummaries?:array<array{Id?:string, ProductId?:string, Name?:string, Owner?:string, ShortDescription?:string, Type?:"CLOUD_FORMATION_TEMPLATE"|"MARKETPLACE"|"TERRAFORM_OPEN_SOURCE"|"TERRAFORM_CLOUD"|"EXTERNAL", Distributor?:string, HasDefaultPath?:bool, SupportEmail?:string, SupportDescription?:string, SupportUrl?:string}>, ProductViewAggregations?:array<string, array<array{Value?:string, ApproximateCount?:int}>>, NextPageToken?:string}>
     */
    public function searchProducts(array $args = []): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, Filters?:array<"FullTextSearch"|"Owner"|"ProductType"|"SourceProductId", array<string>>, PageSize?:int, SortBy?:"Title"|"VersionCount"|"CreationDate", SortOrder?:"ASCENDING"|"DESCENDING", PageToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProductViewSummaries?:array<array{Id?:string, ProductId?:string, Name?:string, Owner?:string, ShortDescription?:string, Type?:"CLOUD_FORMATION_TEMPLATE"|"MARKETPLACE"|"TERRAFORM_OPEN_SOURCE"|"TERRAFORM_CLOUD"|"EXTERNAL", Distributor?:string, HasDefaultPath?:bool, SupportEmail?:string, SupportDescription?:string, SupportUrl?:string}>, ProductViewAggregations?:array<string, array<array{Value?:string, ApproximateCount?:int}>>, NextPageToken?:string}>
     */
    public function searchProductsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, PortfolioId?:string, Filters?:array<"FullTextSearch"|"Owner"|"ProductType"|"SourceProductId", array<string>>, SortBy?:"Title"|"VersionCount"|"CreationDate", SortOrder?:"ASCENDING"|"DESCENDING", PageToken?:string, PageSize?:int, ProductSource?:"ACCOUNT"} $args
     * @return \AWS\Result<array{ProductViewDetails?:array<array{ProductViewSummary?:array{Id?:string, ProductId?:string, Name?:string, Owner?:string, ShortDescription?:string, Type?:"CLOUD_FORMATION_TEMPLATE"|"MARKETPLACE"|"TERRAFORM_OPEN_SOURCE"|"TERRAFORM_CLOUD"|"EXTERNAL", Distributor?:string, HasDefaultPath?:bool, SupportEmail?:string, SupportDescription?:string, SupportUrl?:string}, Status?:"AVAILABLE"|"CREATING"|"FAILED", ProductARN?:string, CreatedTime?:int|string|\DateTimeInterface, SourceConnection?:array{Type?:"CODESTAR", ConnectionParameters?:array{CodeStar?:array{ConnectionArn:string, Repository:string, Branch:string, ArtifactPath:string}}, LastSync?:array{LastSyncTime?:int|string|\DateTimeInterface, LastSyncStatus?:"SUCCEEDED"|"FAILED", LastSyncStatusMessage?:string, LastSuccessfulSyncTime?:int|string|\DateTimeInterface, LastSuccessfulSyncProvisioningArtifactId?:string}}}>, NextPageToken?:string}>
     */
    public function searchProductsAsAdmin(array $args = []): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, PortfolioId?:string, Filters?:array<"FullTextSearch"|"Owner"|"ProductType"|"SourceProductId", array<string>>, SortBy?:"Title"|"VersionCount"|"CreationDate", SortOrder?:"ASCENDING"|"DESCENDING", PageToken?:string, PageSize?:int, ProductSource?:"ACCOUNT"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProductViewDetails?:array<array{ProductViewSummary?:array{Id?:string, ProductId?:string, Name?:string, Owner?:string, ShortDescription?:string, Type?:"CLOUD_FORMATION_TEMPLATE"|"MARKETPLACE"|"TERRAFORM_OPEN_SOURCE"|"TERRAFORM_CLOUD"|"EXTERNAL", Distributor?:string, HasDefaultPath?:bool, SupportEmail?:string, SupportDescription?:string, SupportUrl?:string}, Status?:"AVAILABLE"|"CREATING"|"FAILED", ProductARN?:string, CreatedTime?:int|string|\DateTimeInterface, SourceConnection?:array{Type?:"CODESTAR", ConnectionParameters?:array{CodeStar?:array{ConnectionArn:string, Repository:string, Branch:string, ArtifactPath:string}}, LastSync?:array{LastSyncTime?:int|string|\DateTimeInterface, LastSyncStatus?:"SUCCEEDED"|"FAILED", LastSyncStatusMessage?:string, LastSuccessfulSyncTime?:int|string|\DateTimeInterface, LastSuccessfulSyncProvisioningArtifactId?:string}}}>, NextPageToken?:string}>
     */
    public function searchProductsAsAdminAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, AccessLevelFilter?:array{Key?:"Account"|"Role"|"User", Value?:string}, Filters?:array<"SearchQuery", array<string>>, SortBy?:string, SortOrder?:"ASCENDING"|"DESCENDING", PageSize?:int, PageToken?:string} $args
     * @return \AWS\Result<array{ProvisionedProducts?:array<array{Name?:string, Arn?:string, Type?:string, Id?:string, Status?:"AVAILABLE"|"UNDER_CHANGE"|"TAINTED"|"ERROR"|"PLAN_IN_PROGRESS", StatusMessage?:string, CreatedTime?:int|string|\DateTimeInterface, IdempotencyToken?:string, LastRecordId?:string, LastProvisioningRecordId?:string, LastSuccessfulProvisioningRecordId?:string, Tags?:array<array{Key:string, Value:string}>, PhysicalId?:string, ProductId?:string, ProductName?:string, ProvisioningArtifactId?:string, ProvisioningArtifactName?:string, UserArn?:string, UserArnSession?:string}>, TotalResultsCount?:int, NextPageToken?:string}>
     */
    public function searchProvisionedProducts(array $args = []): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, AccessLevelFilter?:array{Key?:"Account"|"Role"|"User", Value?:string}, Filters?:array<"SearchQuery", array<string>>, SortBy?:string, SortOrder?:"ASCENDING"|"DESCENDING", PageSize?:int, PageToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProvisionedProducts?:array<array{Name?:string, Arn?:string, Type?:string, Id?:string, Status?:"AVAILABLE"|"UNDER_CHANGE"|"TAINTED"|"ERROR"|"PLAN_IN_PROGRESS", StatusMessage?:string, CreatedTime?:int|string|\DateTimeInterface, IdempotencyToken?:string, LastRecordId?:string, LastProvisioningRecordId?:string, LastSuccessfulProvisioningRecordId?:string, Tags?:array<array{Key:string, Value:string}>, PhysicalId?:string, ProductId?:string, ProductName?:string, ProvisioningArtifactId?:string, ProvisioningArtifactName?:string, UserArn?:string, UserArnSession?:string}>, TotalResultsCount?:int, NextPageToken?:string}>
     */
    public function searchProvisionedProductsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProvisionedProductName?:string, ProvisionedProductId?:string, TerminateToken:string, IgnoreErrors?:bool, AcceptLanguage?:string, RetainPhysicalResources?:bool} $args
     * @return \AWS\Result<array{RecordDetail?:array{RecordId?:string, ProvisionedProductName?:string, Status?:"CREATED"|"IN_PROGRESS"|"IN_PROGRESS_IN_ERROR"|"SUCCEEDED"|"FAILED", CreatedTime?:int|string|\DateTimeInterface, UpdatedTime?:int|string|\DateTimeInterface, ProvisionedProductType?:string, RecordType?:string, ProvisionedProductId?:string, ProductId?:string, ProvisioningArtifactId?:string, PathId?:string, RecordErrors?:array<array{Code?:string, Description?:string}>, RecordTags?:array<array{Key?:string, Value?:string}>, LaunchRoleArn?:string}}>
     */
    public function terminateProvisionedProduct(array $args): \AWS\Result { }

    /**
     * @param array{ProvisionedProductName?:string, ProvisionedProductId?:string, TerminateToken:string, IgnoreErrors?:bool, AcceptLanguage?:string, RetainPhysicalResources?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{RecordDetail?:array{RecordId?:string, ProvisionedProductName?:string, Status?:"CREATED"|"IN_PROGRESS"|"IN_PROGRESS_IN_ERROR"|"SUCCEEDED"|"FAILED", CreatedTime?:int|string|\DateTimeInterface, UpdatedTime?:int|string|\DateTimeInterface, ProvisionedProductType?:string, RecordType?:string, ProvisionedProductId?:string, ProductId?:string, ProvisioningArtifactId?:string, PathId?:string, RecordErrors?:array<array{Code?:string, Description?:string}>, RecordTags?:array<array{Key?:string, Value?:string}>, LaunchRoleArn?:string}}>
     */
    public function terminateProvisionedProductAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, Id:string, Description?:string, Parameters?:string} $args
     * @return \AWS\Result<array{ConstraintDetail?:array{ConstraintId?:string, Type?:string, Description?:string, Owner?:string, ProductId?:string, PortfolioId?:string}, ConstraintParameters?:string, Status?:"AVAILABLE"|"CREATING"|"FAILED"}>
     */
    public function updateConstraint(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, Id:string, Description?:string, Parameters?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConstraintDetail?:array{ConstraintId?:string, Type?:string, Description?:string, Owner?:string, ProductId?:string, PortfolioId?:string}, ConstraintParameters?:string, Status?:"AVAILABLE"|"CREATING"|"FAILED"}>
     */
    public function updateConstraintAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, Id:string, DisplayName?:string, Description?:string, ProviderName?:string, AddTags?:array<array{Key:string, Value:string}>, RemoveTags?:array<string>} $args
     * @return \AWS\Result<array{PortfolioDetail?:array{Id?:string, ARN?:string, DisplayName?:string, Description?:string, CreatedTime?:int|string|\DateTimeInterface, ProviderName?:string}, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function updatePortfolio(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, Id:string, DisplayName?:string, Description?:string, ProviderName?:string, AddTags?:array<array{Key:string, Value:string}>, RemoveTags?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{PortfolioDetail?:array{Id?:string, ARN?:string, DisplayName?:string, Description?:string, CreatedTime?:int|string|\DateTimeInterface, ProviderName?:string}, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function updatePortfolioAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, PortfolioId:string, AccountId?:string, OrganizationNode?:array{Type?:"ORGANIZATION"|"ORGANIZATIONAL_UNIT"|"ACCOUNT", Value?:string}, ShareTagOptions?:bool, SharePrincipals?:bool} $args
     * @return \AWS\Result<array{PortfolioShareToken?:string, Status?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETED"|"COMPLETED_WITH_ERRORS"|"ERROR"}>
     */
    public function updatePortfolioShare(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, PortfolioId:string, AccountId?:string, OrganizationNode?:array{Type?:"ORGANIZATION"|"ORGANIZATIONAL_UNIT"|"ACCOUNT", Value?:string}, ShareTagOptions?:bool, SharePrincipals?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{PortfolioShareToken?:string, Status?:"NOT_STARTED"|"IN_PROGRESS"|"COMPLETED"|"COMPLETED_WITH_ERRORS"|"ERROR"}>
     */
    public function updatePortfolioShareAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, Id:string, Name?:string, Owner?:string, Description?:string, Distributor?:string, SupportDescription?:string, SupportEmail?:string, SupportUrl?:string, AddTags?:array<array{Key:string, Value:string}>, RemoveTags?:array<string>, SourceConnection?:array{Type?:"CODESTAR", ConnectionParameters:array{CodeStar?:array{ConnectionArn:string, Repository:string, Branch:string, ArtifactPath:string}}}} $args
     * @return \AWS\Result<array{ProductViewDetail?:array{ProductViewSummary?:array{Id?:string, ProductId?:string, Name?:string, Owner?:string, ShortDescription?:string, Type?:"CLOUD_FORMATION_TEMPLATE"|"MARKETPLACE"|"TERRAFORM_OPEN_SOURCE"|"TERRAFORM_CLOUD"|"EXTERNAL", Distributor?:string, HasDefaultPath?:bool, SupportEmail?:string, SupportDescription?:string, SupportUrl?:string}, Status?:"AVAILABLE"|"CREATING"|"FAILED", ProductARN?:string, CreatedTime?:int|string|\DateTimeInterface, SourceConnection?:array{Type?:"CODESTAR", ConnectionParameters?:array{CodeStar?:array{ConnectionArn:string, Repository:string, Branch:string, ArtifactPath:string}}, LastSync?:array{LastSyncTime?:int|string|\DateTimeInterface, LastSyncStatus?:"SUCCEEDED"|"FAILED", LastSyncStatusMessage?:string, LastSuccessfulSyncTime?:int|string|\DateTimeInterface, LastSuccessfulSyncProvisioningArtifactId?:string}}}, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function updateProduct(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, Id:string, Name?:string, Owner?:string, Description?:string, Distributor?:string, SupportDescription?:string, SupportEmail?:string, SupportUrl?:string, AddTags?:array<array{Key:string, Value:string}>, RemoveTags?:array<string>, SourceConnection?:array{Type?:"CODESTAR", ConnectionParameters:array{CodeStar?:array{ConnectionArn:string, Repository:string, Branch:string, ArtifactPath:string}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProductViewDetail?:array{ProductViewSummary?:array{Id?:string, ProductId?:string, Name?:string, Owner?:string, ShortDescription?:string, Type?:"CLOUD_FORMATION_TEMPLATE"|"MARKETPLACE"|"TERRAFORM_OPEN_SOURCE"|"TERRAFORM_CLOUD"|"EXTERNAL", Distributor?:string, HasDefaultPath?:bool, SupportEmail?:string, SupportDescription?:string, SupportUrl?:string}, Status?:"AVAILABLE"|"CREATING"|"FAILED", ProductARN?:string, CreatedTime?:int|string|\DateTimeInterface, SourceConnection?:array{Type?:"CODESTAR", ConnectionParameters?:array{CodeStar?:array{ConnectionArn:string, Repository:string, Branch:string, ArtifactPath:string}}, LastSync?:array{LastSyncTime?:int|string|\DateTimeInterface, LastSyncStatus?:"SUCCEEDED"|"FAILED", LastSyncStatusMessage?:string, LastSuccessfulSyncTime?:int|string|\DateTimeInterface, LastSuccessfulSyncProvisioningArtifactId?:string}}}, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function updateProductAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, ProvisionedProductName?:string, ProvisionedProductId?:string, ProductId?:string, ProductName?:string, ProvisioningArtifactId?:string, ProvisioningArtifactName?:string, PathId?:string, PathName?:string, ProvisioningParameters?:array<array{Key?:string, Value?:string, UsePreviousValue?:bool}>, ProvisioningPreferences?:array{StackSetAccounts?:array<string>, StackSetRegions?:array<string>, StackSetFailureToleranceCount?:int, StackSetFailureTolerancePercentage?:int, StackSetMaxConcurrencyCount?:int, StackSetMaxConcurrencyPercentage?:int, StackSetOperationType?:"CREATE"|"UPDATE"|"DELETE"}, Tags?:array<array{Key:string, Value:string}>, UpdateToken:string} $args
     * @return \AWS\Result<array{RecordDetail?:array{RecordId?:string, ProvisionedProductName?:string, Status?:"CREATED"|"IN_PROGRESS"|"IN_PROGRESS_IN_ERROR"|"SUCCEEDED"|"FAILED", CreatedTime?:int|string|\DateTimeInterface, UpdatedTime?:int|string|\DateTimeInterface, ProvisionedProductType?:string, RecordType?:string, ProvisionedProductId?:string, ProductId?:string, ProvisioningArtifactId?:string, PathId?:string, RecordErrors?:array<array{Code?:string, Description?:string}>, RecordTags?:array<array{Key?:string, Value?:string}>, LaunchRoleArn?:string}}>
     */
    public function updateProvisionedProduct(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, ProvisionedProductName?:string, ProvisionedProductId?:string, ProductId?:string, ProductName?:string, ProvisioningArtifactId?:string, ProvisioningArtifactName?:string, PathId?:string, PathName?:string, ProvisioningParameters?:array<array{Key?:string, Value?:string, UsePreviousValue?:bool}>, ProvisioningPreferences?:array{StackSetAccounts?:array<string>, StackSetRegions?:array<string>, StackSetFailureToleranceCount?:int, StackSetFailureTolerancePercentage?:int, StackSetMaxConcurrencyCount?:int, StackSetMaxConcurrencyPercentage?:int, StackSetOperationType?:"CREATE"|"UPDATE"|"DELETE"}, Tags?:array<array{Key:string, Value:string}>, UpdateToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RecordDetail?:array{RecordId?:string, ProvisionedProductName?:string, Status?:"CREATED"|"IN_PROGRESS"|"IN_PROGRESS_IN_ERROR"|"SUCCEEDED"|"FAILED", CreatedTime?:int|string|\DateTimeInterface, UpdatedTime?:int|string|\DateTimeInterface, ProvisionedProductType?:string, RecordType?:string, ProvisionedProductId?:string, ProductId?:string, ProvisioningArtifactId?:string, PathId?:string, RecordErrors?:array<array{Code?:string, Description?:string}>, RecordTags?:array<array{Key?:string, Value?:string}>, LaunchRoleArn?:string}}>
     */
    public function updateProvisionedProductAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, ProvisionedProductId:string, ProvisionedProductProperties:array<"OWNER"|"LAUNCH_ROLE", string>, IdempotencyToken:string} $args
     * @return \AWS\Result<array{ProvisionedProductId?:string, ProvisionedProductProperties?:array<"OWNER"|"LAUNCH_ROLE", string>, RecordId?:string, Status?:"CREATED"|"IN_PROGRESS"|"IN_PROGRESS_IN_ERROR"|"SUCCEEDED"|"FAILED"}>
     */
    public function updateProvisionedProductProperties(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, ProvisionedProductId:string, ProvisionedProductProperties:array<"OWNER"|"LAUNCH_ROLE", string>, IdempotencyToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProvisionedProductId?:string, ProvisionedProductProperties?:array<"OWNER"|"LAUNCH_ROLE", string>, RecordId?:string, Status?:"CREATED"|"IN_PROGRESS"|"IN_PROGRESS_IN_ERROR"|"SUCCEEDED"|"FAILED"}>
     */
    public function updateProvisionedProductPropertiesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AcceptLanguage?:string, ProductId:string, ProvisioningArtifactId:string, Name?:string, Description?:string, Active?:bool, Guidance?:"DEFAULT"|"DEPRECATED"} $args
     * @return \AWS\Result<array{ProvisioningArtifactDetail?:array{Id?:string, Name?:string, Description?:string, Type?:"CLOUD_FORMATION_TEMPLATE"|"MARKETPLACE_AMI"|"MARKETPLACE_CAR"|"TERRAFORM_OPEN_SOURCE"|"TERRAFORM_CLOUD"|"EXTERNAL", CreatedTime?:int|string|\DateTimeInterface, Active?:bool, Guidance?:"DEFAULT"|"DEPRECATED", SourceRevision?:string}, Info?:array<string, string>, Status?:"AVAILABLE"|"CREATING"|"FAILED"}>
     */
    public function updateProvisioningArtifact(array $args): \AWS\Result { }

    /**
     * @param array{AcceptLanguage?:string, ProductId:string, ProvisioningArtifactId:string, Name?:string, Description?:string, Active?:bool, Guidance?:"DEFAULT"|"DEPRECATED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProvisioningArtifactDetail?:array{Id?:string, Name?:string, Description?:string, Type?:"CLOUD_FORMATION_TEMPLATE"|"MARKETPLACE_AMI"|"MARKETPLACE_CAR"|"TERRAFORM_OPEN_SOURCE"|"TERRAFORM_CLOUD"|"EXTERNAL", CreatedTime?:int|string|\DateTimeInterface, Active?:bool, Guidance?:"DEFAULT"|"DEPRECATED", SourceRevision?:string}, Info?:array<string, string>, Status?:"AVAILABLE"|"CREATING"|"FAILED"}>
     */
    public function updateProvisioningArtifactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, Name?:string, Definition?:array<"Name"|"Version"|"AssumeRole"|"Parameters", string>, Description?:string, AcceptLanguage?:string} $args
     * @return \AWS\Result<array{ServiceActionDetail?:array{ServiceActionSummary?:array{Id?:string, Name?:string, Description?:string, DefinitionType?:"SSM_AUTOMATION"}, Definition?:array<"Name"|"Version"|"AssumeRole"|"Parameters", string>}}>
     */
    public function updateServiceAction(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, Name?:string, Definition?:array<"Name"|"Version"|"AssumeRole"|"Parameters", string>, Description?:string, AcceptLanguage?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ServiceActionDetail?:array{ServiceActionSummary?:array{Id?:string, Name?:string, Description?:string, DefinitionType?:"SSM_AUTOMATION"}, Definition?:array<"Name"|"Version"|"AssumeRole"|"Parameters", string>}}>
     */
    public function updateServiceActionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, Value?:string, Active?:bool} $args
     * @return \AWS\Result<array{TagOptionDetail?:array{Key?:string, Value?:string, Active?:bool, Id?:string, Owner?:string}}>
     */
    public function updateTagOption(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, Value?:string, Active?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{TagOptionDetail?:array{Key?:string, Value?:string, Active?:bool, Id?:string, Owner?:string}}>
     */
    public function updateTagOptionAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
