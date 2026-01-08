<?php
namespace AWS\BillingConductor;

class BillingConductorClient
{
    /**
     * @param array{Arn:string, AccountIds:array<string>} $args
     * @return \AWS\Result<array{Arn?:string}>
     */
    public function associateAccounts(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, AccountIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string}>
     */
    public function associateAccountsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string, PricingRuleArns:array<string>} $args
     * @return \AWS\Result<array{Arn?:string}>
     */
    public function associatePricingRules(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, PricingRuleArns:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string}>
     */
    public function associatePricingRulesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TargetArn:string, ResourceArns:array<string>, BillingPeriodRange?:array{InclusiveStartBillingPeriod:string, ExclusiveEndBillingPeriod?:string}} $args
     * @return \AWS\Result<array{SuccessfullyAssociatedResources?:array<array{Arn?:string, Error?:array{Message?:string, Reason?:"INVALID_ARN"|"SERVICE_LIMIT_EXCEEDED"|"ILLEGAL_CUSTOMLINEITEM"|"INTERNAL_SERVER_EXCEPTION"|"INVALID_BILLING_PERIOD_RANGE"}}>, FailedAssociatedResources?:array<array{Arn?:string, Error?:array{Message?:string, Reason?:"INVALID_ARN"|"SERVICE_LIMIT_EXCEEDED"|"ILLEGAL_CUSTOMLINEITEM"|"INTERNAL_SERVER_EXCEPTION"|"INVALID_BILLING_PERIOD_RANGE"}}>}>
     */
    public function batchAssociateResourcesToCustomLineItem(array $args): \AWS\Result { }

    /**
     * @param array{TargetArn:string, ResourceArns:array<string>, BillingPeriodRange?:array{InclusiveStartBillingPeriod:string, ExclusiveEndBillingPeriod?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{SuccessfullyAssociatedResources?:array<array{Arn?:string, Error?:array{Message?:string, Reason?:"INVALID_ARN"|"SERVICE_LIMIT_EXCEEDED"|"ILLEGAL_CUSTOMLINEITEM"|"INTERNAL_SERVER_EXCEPTION"|"INVALID_BILLING_PERIOD_RANGE"}}>, FailedAssociatedResources?:array<array{Arn?:string, Error?:array{Message?:string, Reason?:"INVALID_ARN"|"SERVICE_LIMIT_EXCEEDED"|"ILLEGAL_CUSTOMLINEITEM"|"INTERNAL_SERVER_EXCEPTION"|"INVALID_BILLING_PERIOD_RANGE"}}>}>
     */
    public function batchAssociateResourcesToCustomLineItemAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TargetArn:string, ResourceArns:array<string>, BillingPeriodRange?:array{InclusiveStartBillingPeriod:string, ExclusiveEndBillingPeriod?:string}} $args
     * @return \AWS\Result<array{SuccessfullyDisassociatedResources?:array<array{Arn?:string, Error?:array{Message?:string, Reason?:"INVALID_ARN"|"SERVICE_LIMIT_EXCEEDED"|"ILLEGAL_CUSTOMLINEITEM"|"INTERNAL_SERVER_EXCEPTION"|"INVALID_BILLING_PERIOD_RANGE"}}>, FailedDisassociatedResources?:array<array{Arn?:string, Error?:array{Message?:string, Reason?:"INVALID_ARN"|"SERVICE_LIMIT_EXCEEDED"|"ILLEGAL_CUSTOMLINEITEM"|"INTERNAL_SERVER_EXCEPTION"|"INVALID_BILLING_PERIOD_RANGE"}}>}>
     */
    public function batchDisassociateResourcesFromCustomLineItem(array $args): \AWS\Result { }

    /**
     * @param array{TargetArn:string, ResourceArns:array<string>, BillingPeriodRange?:array{InclusiveStartBillingPeriod:string, ExclusiveEndBillingPeriod?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{SuccessfullyDisassociatedResources?:array<array{Arn?:string, Error?:array{Message?:string, Reason?:"INVALID_ARN"|"SERVICE_LIMIT_EXCEEDED"|"ILLEGAL_CUSTOMLINEITEM"|"INTERNAL_SERVER_EXCEPTION"|"INVALID_BILLING_PERIOD_RANGE"}}>, FailedDisassociatedResources?:array<array{Arn?:string, Error?:array{Message?:string, Reason?:"INVALID_ARN"|"SERVICE_LIMIT_EXCEEDED"|"ILLEGAL_CUSTOMLINEITEM"|"INTERNAL_SERVER_EXCEPTION"|"INVALID_BILLING_PERIOD_RANGE"}}>}>
     */
    public function batchDisassociateResourcesFromCustomLineItemAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, Name:string, AccountGrouping:array{LinkedAccountIds:array<string>, AutoAssociate?:bool}, ComputationPreference:array{PricingPlanArn:string}, PrimaryAccountId?:string, Description?:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Arn?:string}>
     */
    public function createBillingGroup(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, Name:string, AccountGrouping:array{LinkedAccountIds:array<string>, AutoAssociate?:bool}, ComputationPreference:array{PricingPlanArn:string}, PrimaryAccountId?:string, Description?:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string}>
     */
    public function createBillingGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, Name:string, Description:string, BillingGroupArn:string, BillingPeriodRange?:array{InclusiveStartBillingPeriod:string, ExclusiveEndBillingPeriod?:string}, Tags?:array<string, string>, ChargeDetails:array{Flat?:array{ChargeValue:float}, Percentage?:array{PercentageValue:float, AssociatedValues?:array<string>}, Type:"CREDIT"|"FEE", LineItemFilters?:array<array{Attribute:"LINE_ITEM_TYPE", MatchOption:"NOT_EQUAL", Values:array<"SAVINGS_PLAN_NEGATION">}>}, AccountId?:string} $args
     * @return \AWS\Result<array{Arn?:string}>
     */
    public function createCustomLineItem(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, Name:string, Description:string, BillingGroupArn:string, BillingPeriodRange?:array{InclusiveStartBillingPeriod:string, ExclusiveEndBillingPeriod?:string}, Tags?:array<string, string>, ChargeDetails:array{Flat?:array{ChargeValue:float}, Percentage?:array{PercentageValue:float, AssociatedValues?:array<string>}, Type:"CREDIT"|"FEE", LineItemFilters?:array<array{Attribute:"LINE_ITEM_TYPE", MatchOption:"NOT_EQUAL", Values:array<"SAVINGS_PLAN_NEGATION">}>}, AccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string}>
     */
    public function createCustomLineItemAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, Name:string, Description?:string, PricingRuleArns?:array<string>, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Arn?:string}>
     */
    public function createPricingPlan(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, Name:string, Description?:string, PricingRuleArns?:array<string>, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string}>
     */
    public function createPricingPlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, Name:string, Description?:string, Scope:"GLOBAL"|"SERVICE"|"BILLING_ENTITY"|"SKU", Type:"MARKUP"|"DISCOUNT"|"TIERING", ModifierPercentage?:float, Service?:string, Tags?:array<string, string>, BillingEntity?:string, Tiering?:array{FreeTier:array{Activated:bool}}, UsageType?:string, Operation?:string} $args
     * @return \AWS\Result<array{Arn?:string}>
     */
    public function createPricingRule(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, Name:string, Description?:string, Scope:"GLOBAL"|"SERVICE"|"BILLING_ENTITY"|"SKU", Type:"MARKUP"|"DISCOUNT"|"TIERING", ModifierPercentage?:float, Service?:string, Tags?:array<string, string>, BillingEntity?:string, Tiering?:array{FreeTier:array{Activated:bool}}, UsageType?:string, Operation?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string}>
     */
    public function createPricingRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string} $args
     * @return \AWS\Result<array{Arn?:string}>
     */
    public function deleteBillingGroup(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string}>
     */
    public function deleteBillingGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string, BillingPeriodRange?:array{InclusiveStartBillingPeriod:string, ExclusiveEndBillingPeriod?:string}} $args
     * @return \AWS\Result<array{Arn?:string}>
     */
    public function deleteCustomLineItem(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, BillingPeriodRange?:array{InclusiveStartBillingPeriod:string, ExclusiveEndBillingPeriod?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string}>
     */
    public function deleteCustomLineItemAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string} $args
     * @return \AWS\Result<array{Arn?:string}>
     */
    public function deletePricingPlan(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string}>
     */
    public function deletePricingPlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string} $args
     * @return \AWS\Result<array{Arn?:string}>
     */
    public function deletePricingRule(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string}>
     */
    public function deletePricingRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string, AccountIds:array<string>} $args
     * @return \AWS\Result<array{Arn?:string}>
     */
    public function disassociateAccounts(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, AccountIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string}>
     */
    public function disassociateAccountsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string, PricingRuleArns:array<string>} $args
     * @return \AWS\Result<array{Arn?:string}>
     */
    public function disassociatePricingRules(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, PricingRuleArns:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string}>
     */
    public function disassociatePricingRulesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string, BillingPeriodRange?:array{InclusiveStartBillingPeriod:string, ExclusiveEndBillingPeriod:string}, GroupBy?:array<"PRODUCT_NAME"|"BILLING_PERIOD">, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{BillingGroupCostReportResults?:array<array{Arn?:string, AWSCost?:string, ProformaCost?:string, Margin?:string, MarginPercentage?:string, Currency?:string, Attributes?:array<array{Key?:string, Value?:string}>}>, NextToken?:string}>
     */
    public function getBillingGroupCostReport(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, BillingPeriodRange?:array{InclusiveStartBillingPeriod:string, ExclusiveEndBillingPeriod:string}, GroupBy?:array<"PRODUCT_NAME"|"BILLING_PERIOD">, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BillingGroupCostReportResults?:array<array{Arn?:string, AWSCost?:string, ProformaCost?:string, Margin?:string, MarginPercentage?:string, Currency?:string, Attributes?:array<array{Key?:string, Value?:string}>}>, NextToken?:string}>
     */
    public function getBillingGroupCostReportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BillingPeriod?:string, Filters?:array{Association?:string, AccountId?:string, AccountIds?:array<string>}, NextToken?:string} $args
     * @return \AWS\Result<array{LinkedAccounts?:array<array{AccountId?:string, BillingGroupArn?:string, AccountName?:string, AccountEmail?:string}>, NextToken?:string}>
     */
    public function listAccountAssociations(array $args = []): \AWS\Result { }

    /**
     * @param array{BillingPeriod?:string, Filters?:array{Association?:string, AccountId?:string, AccountIds?:array<string>}, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LinkedAccounts?:array<array{AccountId?:string, BillingGroupArn?:string, AccountName?:string, AccountEmail?:string}>, NextToken?:string}>
     */
    public function listAccountAssociationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BillingPeriod?:string, MaxResults?:int, NextToken?:string, Filters?:array{BillingGroupArns?:array<string>}} $args
     * @return \AWS\Result<array{BillingGroupCostReports?:array<array{Arn?:string, AWSCost?:string, ProformaCost?:string, Margin?:string, MarginPercentage?:string, Currency?:string}>, NextToken?:string}>
     */
    public function listBillingGroupCostReports(array $args = []): \AWS\Result { }

    /**
     * @param array{BillingPeriod?:string, MaxResults?:int, NextToken?:string, Filters?:array{BillingGroupArns?:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{BillingGroupCostReports?:array<array{Arn?:string, AWSCost?:string, ProformaCost?:string, Margin?:string, MarginPercentage?:string, Currency?:string}>, NextToken?:string}>
     */
    public function listBillingGroupCostReportsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BillingPeriod?:string, MaxResults?:int, NextToken?:string, Filters?:array{Arns?:array<string>, PricingPlan?:string, Statuses?:array<"ACTIVE"|"PRIMARY_ACCOUNT_MISSING">, AutoAssociate?:bool}} $args
     * @return \AWS\Result<array{BillingGroups?:array<array{Name?:string, Arn?:string, Description?:string, PrimaryAccountId?:string, ComputationPreference?:array{PricingPlanArn:string}, Size?:int, CreationTime?:int, LastModifiedTime?:int, Status?:"ACTIVE"|"PRIMARY_ACCOUNT_MISSING", StatusReason?:string, AccountGrouping?:array{AutoAssociate?:bool}}>, NextToken?:string}>
     */
    public function listBillingGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{BillingPeriod?:string, MaxResults?:int, NextToken?:string, Filters?:array{Arns?:array<string>, PricingPlan?:string, Statuses?:array<"ACTIVE"|"PRIMARY_ACCOUNT_MISSING">, AutoAssociate?:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{BillingGroups?:array<array{Name?:string, Arn?:string, Description?:string, PrimaryAccountId?:string, ComputationPreference?:array{PricingPlanArn:string}, Size?:int, CreationTime?:int, LastModifiedTime?:int, Status?:"ACTIVE"|"PRIMARY_ACCOUNT_MISSING", StatusReason?:string, AccountGrouping?:array{AutoAssociate?:bool}}>, NextToken?:string}>
     */
    public function listBillingGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string, MaxResults?:int, NextToken?:string, Filters?:array{BillingPeriodRange?:array{StartBillingPeriod?:string, EndBillingPeriod?:string}}} $args
     * @return \AWS\Result<array{CustomLineItemVersions?:array<array{Name?:string, ChargeDetails?:array{Flat?:array{ChargeValue:float}, Percentage?:array{PercentageValue:float}, Type:"CREDIT"|"FEE", LineItemFilters?:array<array{Attribute:"LINE_ITEM_TYPE", MatchOption:"NOT_EQUAL", Values:array<"SAVINGS_PLAN_NEGATION">}>}, CurrencyCode?:"USD"|"CNY", Description?:string, ProductCode?:string, BillingGroupArn?:string, CreationTime?:int, LastModifiedTime?:int, AssociationSize?:int, StartBillingPeriod?:string, EndBillingPeriod?:string, Arn?:string, StartTime?:int, AccountId?:string}>, NextToken?:string}>
     */
    public function listCustomLineItemVersions(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, MaxResults?:int, NextToken?:string, Filters?:array{BillingPeriodRange?:array{StartBillingPeriod?:string, EndBillingPeriod?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{CustomLineItemVersions?:array<array{Name?:string, ChargeDetails?:array{Flat?:array{ChargeValue:float}, Percentage?:array{PercentageValue:float}, Type:"CREDIT"|"FEE", LineItemFilters?:array<array{Attribute:"LINE_ITEM_TYPE", MatchOption:"NOT_EQUAL", Values:array<"SAVINGS_PLAN_NEGATION">}>}, CurrencyCode?:"USD"|"CNY", Description?:string, ProductCode?:string, BillingGroupArn?:string, CreationTime?:int, LastModifiedTime?:int, AssociationSize?:int, StartBillingPeriod?:string, EndBillingPeriod?:string, Arn?:string, StartTime?:int, AccountId?:string}>, NextToken?:string}>
     */
    public function listCustomLineItemVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BillingPeriod?:string, MaxResults?:int, NextToken?:string, Filters?:array{Names?:array<string>, BillingGroups?:array<string>, Arns?:array<string>, AccountIds?:array<string>}} $args
     * @return \AWS\Result<array{CustomLineItems?:array<array{Arn?:string, Name?:string, ChargeDetails?:array{Flat?:array{ChargeValue:float}, Percentage?:array{PercentageValue:float}, Type:"CREDIT"|"FEE", LineItemFilters?:array<array{Attribute:"LINE_ITEM_TYPE", MatchOption:"NOT_EQUAL", Values:array<"SAVINGS_PLAN_NEGATION">}>}, CurrencyCode?:"USD"|"CNY", Description?:string, ProductCode?:string, BillingGroupArn?:string, CreationTime?:int, LastModifiedTime?:int, AssociationSize?:int, AccountId?:string}>, NextToken?:string}>
     */
    public function listCustomLineItems(array $args = []): \AWS\Result { }

    /**
     * @param array{BillingPeriod?:string, MaxResults?:int, NextToken?:string, Filters?:array{Names?:array<string>, BillingGroups?:array<string>, Arns?:array<string>, AccountIds?:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{CustomLineItems?:array<array{Arn?:string, Name?:string, ChargeDetails?:array{Flat?:array{ChargeValue:float}, Percentage?:array{PercentageValue:float}, Type:"CREDIT"|"FEE", LineItemFilters?:array<array{Attribute:"LINE_ITEM_TYPE", MatchOption:"NOT_EQUAL", Values:array<"SAVINGS_PLAN_NEGATION">}>}, CurrencyCode?:"USD"|"CNY", Description?:string, ProductCode?:string, BillingGroupArn?:string, CreationTime?:int, LastModifiedTime?:int, AssociationSize?:int, AccountId?:string}>, NextToken?:string}>
     */
    public function listCustomLineItemsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BillingPeriod?:string, Filters?:array{Arns?:array<string>}, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{BillingPeriod?:string, PricingPlans?:array<array{Name?:string, Arn?:string, Description?:string, Size?:int, CreationTime?:int, LastModifiedTime?:int}>, NextToken?:string}>
     */
    public function listPricingPlans(array $args = []): \AWS\Result { }

    /**
     * @param array{BillingPeriod?:string, Filters?:array{Arns?:array<string>}, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BillingPeriod?:string, PricingPlans?:array<array{Name?:string, Arn?:string, Description?:string, Size?:int, CreationTime?:int, LastModifiedTime?:int}>, NextToken?:string}>
     */
    public function listPricingPlansAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BillingPeriod?:string, PricingRuleArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{BillingPeriod?:string, PricingRuleArn?:string, PricingPlanArns?:array<string>, NextToken?:string}>
     */
    public function listPricingPlansAssociatedWithPricingRule(array $args): \AWS\Result { }

    /**
     * @param array{BillingPeriod?:string, PricingRuleArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BillingPeriod?:string, PricingRuleArn?:string, PricingPlanArns?:array<string>, NextToken?:string}>
     */
    public function listPricingPlansAssociatedWithPricingRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BillingPeriod?:string, Filters?:array{Arns?:array<string>}, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{BillingPeriod?:string, PricingRules?:array<array{Name?:string, Arn?:string, Description?:string, Scope?:"GLOBAL"|"SERVICE"|"BILLING_ENTITY"|"SKU", Type?:"MARKUP"|"DISCOUNT"|"TIERING", ModifierPercentage?:float, Service?:string, AssociatedPricingPlanCount?:int, CreationTime?:int, LastModifiedTime?:int, BillingEntity?:string, Tiering?:array{FreeTier:array{Activated:bool}}, UsageType?:string, Operation?:string}>, NextToken?:string}>
     */
    public function listPricingRules(array $args = []): \AWS\Result { }

    /**
     * @param array{BillingPeriod?:string, Filters?:array{Arns?:array<string>}, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BillingPeriod?:string, PricingRules?:array<array{Name?:string, Arn?:string, Description?:string, Scope?:"GLOBAL"|"SERVICE"|"BILLING_ENTITY"|"SKU", Type?:"MARKUP"|"DISCOUNT"|"TIERING", ModifierPercentage?:float, Service?:string, AssociatedPricingPlanCount?:int, CreationTime?:int, LastModifiedTime?:int, BillingEntity?:string, Tiering?:array{FreeTier:array{Activated:bool}}, UsageType?:string, Operation?:string}>, NextToken?:string}>
     */
    public function listPricingRulesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BillingPeriod?:string, PricingPlanArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{BillingPeriod?:string, PricingPlanArn?:string, PricingRuleArns?:array<string>, NextToken?:string}>
     */
    public function listPricingRulesAssociatedToPricingPlan(array $args): \AWS\Result { }

    /**
     * @param array{BillingPeriod?:string, PricingPlanArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BillingPeriod?:string, PricingPlanArn?:string, PricingRuleArns?:array<string>, NextToken?:string}>
     */
    public function listPricingRulesAssociatedToPricingPlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BillingPeriod?:string, Arn:string, MaxResults?:int, NextToken?:string, Filters?:array{Relationship?:"PARENT"|"CHILD"}} $args
     * @return \AWS\Result<array{Arn?:string, AssociatedResources?:array<array{Arn?:string, Relationship?:"PARENT"|"CHILD", EndBillingPeriod?:string}>, NextToken?:string}>
     */
    public function listResourcesAssociatedToCustomLineItem(array $args): \AWS\Result { }

    /**
     * @param array{BillingPeriod?:string, Arn:string, MaxResults?:int, NextToken?:string, Filters?:array{Relationship?:"PARENT"|"CHILD"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, AssociatedResources?:array<array{Arn?:string, Relationship?:"PARENT"|"CHILD", EndBillingPeriod?:string}>, NextToken?:string}>
     */
    public function listResourcesAssociatedToCustomLineItemAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{Tags?:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<string, string>}>
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
     * @param array{Arn:string, Name?:string, Status?:"ACTIVE"|"PRIMARY_ACCOUNT_MISSING", ComputationPreference?:array{PricingPlanArn:string}, Description?:string, AccountGrouping?:array{AutoAssociate?:bool}} $args
     * @return \AWS\Result<array{Arn?:string, Name?:string, Description?:string, PrimaryAccountId?:string, PricingPlanArn?:string, Size?:int, LastModifiedTime?:int, Status?:"ACTIVE"|"PRIMARY_ACCOUNT_MISSING", StatusReason?:string, AccountGrouping?:array{AutoAssociate?:bool}}>
     */
    public function updateBillingGroup(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, Name?:string, Status?:"ACTIVE"|"PRIMARY_ACCOUNT_MISSING", ComputationPreference?:array{PricingPlanArn:string}, Description?:string, AccountGrouping?:array{AutoAssociate?:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Name?:string, Description?:string, PrimaryAccountId?:string, PricingPlanArn?:string, Size?:int, LastModifiedTime?:int, Status?:"ACTIVE"|"PRIMARY_ACCOUNT_MISSING", StatusReason?:string, AccountGrouping?:array{AutoAssociate?:bool}}>
     */
    public function updateBillingGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string, Name?:string, Description?:string, ChargeDetails?:array{Flat?:array{ChargeValue:float}, Percentage?:array{PercentageValue:float}, LineItemFilters?:array<array{Attribute:"LINE_ITEM_TYPE", MatchOption:"NOT_EQUAL", Values:array<"SAVINGS_PLAN_NEGATION">}>}, BillingPeriodRange?:array{InclusiveStartBillingPeriod:string, ExclusiveEndBillingPeriod?:string}} $args
     * @return \AWS\Result<array{Arn?:string, BillingGroupArn?:string, Name?:string, Description?:string, ChargeDetails?:array{Flat?:array{ChargeValue:float}, Percentage?:array{PercentageValue:float}, Type:"CREDIT"|"FEE", LineItemFilters?:array<array{Attribute:"LINE_ITEM_TYPE", MatchOption:"NOT_EQUAL", Values:array<"SAVINGS_PLAN_NEGATION">}>}, LastModifiedTime?:int, AssociationSize?:int}>
     */
    public function updateCustomLineItem(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, Name?:string, Description?:string, ChargeDetails?:array{Flat?:array{ChargeValue:float}, Percentage?:array{PercentageValue:float}, LineItemFilters?:array<array{Attribute:"LINE_ITEM_TYPE", MatchOption:"NOT_EQUAL", Values:array<"SAVINGS_PLAN_NEGATION">}>}, BillingPeriodRange?:array{InclusiveStartBillingPeriod:string, ExclusiveEndBillingPeriod?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, BillingGroupArn?:string, Name?:string, Description?:string, ChargeDetails?:array{Flat?:array{ChargeValue:float}, Percentage?:array{PercentageValue:float}, Type:"CREDIT"|"FEE", LineItemFilters?:array<array{Attribute:"LINE_ITEM_TYPE", MatchOption:"NOT_EQUAL", Values:array<"SAVINGS_PLAN_NEGATION">}>}, LastModifiedTime?:int, AssociationSize?:int}>
     */
    public function updateCustomLineItemAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string, Name?:string, Description?:string} $args
     * @return \AWS\Result<array{Arn?:string, Name?:string, Description?:string, Size?:int, LastModifiedTime?:int}>
     */
    public function updatePricingPlan(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, Name?:string, Description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Name?:string, Description?:string, Size?:int, LastModifiedTime?:int}>
     */
    public function updatePricingPlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Arn:string, Name?:string, Description?:string, Type?:"MARKUP"|"DISCOUNT"|"TIERING", ModifierPercentage?:float, Tiering?:array{FreeTier:array{Activated:bool}}} $args
     * @return \AWS\Result<array{Arn?:string, Name?:string, Description?:string, Scope?:"GLOBAL"|"SERVICE"|"BILLING_ENTITY"|"SKU", Type?:"MARKUP"|"DISCOUNT"|"TIERING", ModifierPercentage?:float, Service?:string, AssociatedPricingPlanCount?:int, LastModifiedTime?:int, BillingEntity?:string, Tiering?:array{FreeTier:array{Activated:bool}}, UsageType?:string, Operation?:string}>
     */
    public function updatePricingRule(array $args): \AWS\Result { }

    /**
     * @param array{Arn:string, Name?:string, Description?:string, Type?:"MARKUP"|"DISCOUNT"|"TIERING", ModifierPercentage?:float, Tiering?:array{FreeTier:array{Activated:bool}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Arn?:string, Name?:string, Description?:string, Scope?:"GLOBAL"|"SERVICE"|"BILLING_ENTITY"|"SKU", Type?:"MARKUP"|"DISCOUNT"|"TIERING", ModifierPercentage?:float, Service?:string, AssociatedPricingPlanCount?:int, LastModifiedTime?:int, BillingEntity?:string, Tiering?:array{FreeTier:array{Activated:bool}}, UsageType?:string, Operation?:string}>
     */
    public function updatePricingRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
