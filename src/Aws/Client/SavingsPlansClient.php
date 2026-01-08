<?php
namespace AWS\SavingsPlans;

class SavingsPlansClient
{
    /**
     * @param array{savingsPlanOfferingId:string, commitment:string, upfrontPaymentAmount?:string, purchaseTime?:int|string|\DateTimeInterface, clientToken?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{savingsPlanId?:string}>
     */
    public function createSavingsPlan(array $args): \AWS\Result { }

    /**
     * @param array{savingsPlanOfferingId:string, commitment:string, upfrontPaymentAmount?:string, purchaseTime?:int|string|\DateTimeInterface, clientToken?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{savingsPlanId?:string}>
     */
    public function createSavingsPlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{savingsPlanId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteQueuedSavingsPlan(array $args): \AWS\Result { }

    /**
     * @param array{savingsPlanId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteQueuedSavingsPlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{savingsPlanId:string, filters?:array<array{name?:"region"|"instanceType"|"productDescription"|"tenancy"|"productType"|"serviceCode"|"usageType"|"operation", values?:array<string>}>, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{savingsPlanId?:string, searchResults?:array<array{rate?:string, currency?:"CNY"|"USD", unit?:"Hrs"|"Lambda-GB-Second"|"Request", productType?:"EC2"|"Fargate"|"Lambda"|"SageMaker", serviceCode?:"AmazonEC2"|"AmazonECS"|"AmazonEKS"|"AWSLambda"|"AmazonSageMaker", usageType?:string, operation?:string, properties?:array<array{name?:"region"|"instanceType"|"instanceFamily"|"productDescription"|"tenancy", value?:string}>}>, nextToken?:string}>
     */
    public function describeSavingsPlanRates(array $args): \AWS\Result { }

    /**
     * @param array{savingsPlanId:string, filters?:array<array{name?:"region"|"instanceType"|"productDescription"|"tenancy"|"productType"|"serviceCode"|"usageType"|"operation", values?:array<string>}>, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{savingsPlanId?:string, searchResults?:array<array{rate?:string, currency?:"CNY"|"USD", unit?:"Hrs"|"Lambda-GB-Second"|"Request", productType?:"EC2"|"Fargate"|"Lambda"|"SageMaker", serviceCode?:"AmazonEC2"|"AmazonECS"|"AmazonEKS"|"AWSLambda"|"AmazonSageMaker", usageType?:string, operation?:string, properties?:array<array{name?:"region"|"instanceType"|"instanceFamily"|"productDescription"|"tenancy", value?:string}>}>, nextToken?:string}>
     */
    public function describeSavingsPlanRatesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{savingsPlanArns?:array<string>, savingsPlanIds?:array<string>, nextToken?:string, maxResults?:int, states?:array<"payment-pending"|"payment-failed"|"active"|"retired"|"queued"|"queued-deleted"|"pending-return"|"returned">, filters?:array<array{name?:"region"|"ec2-instance-family"|"commitment"|"upfront"|"term"|"savings-plan-type"|"payment-option"|"start"|"end", values?:array<string>}>} $args
     * @return \AWS\Result<array{savingsPlans?:array<array{offeringId?:string, savingsPlanId?:string, savingsPlanArn?:string, description?:string, start?:string, end?:string, state?:"payment-pending"|"payment-failed"|"active"|"retired"|"queued"|"queued-deleted"|"pending-return"|"returned", region?:string, ec2InstanceFamily?:string, savingsPlanType?:"Compute"|"EC2Instance"|"SageMaker", paymentOption?:"All Upfront"|"Partial Upfront"|"No Upfront", productTypes?:array<"EC2"|"Fargate"|"Lambda"|"SageMaker">, currency?:"CNY"|"USD", commitment?:string, upfrontPaymentAmount?:string, recurringPaymentAmount?:string, termDurationInSeconds?:int, tags?:array<string, string>, returnableUntil?:string}>, nextToken?:string}>
     */
    public function describeSavingsPlans(array $args = []): \AWS\Result { }

    /**
     * @param array{savingsPlanArns?:array<string>, savingsPlanIds?:array<string>, nextToken?:string, maxResults?:int, states?:array<"payment-pending"|"payment-failed"|"active"|"retired"|"queued"|"queued-deleted"|"pending-return"|"returned">, filters?:array<array{name?:"region"|"ec2-instance-family"|"commitment"|"upfront"|"term"|"savings-plan-type"|"payment-option"|"start"|"end", values?:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{savingsPlans?:array<array{offeringId?:string, savingsPlanId?:string, savingsPlanArn?:string, description?:string, start?:string, end?:string, state?:"payment-pending"|"payment-failed"|"active"|"retired"|"queued"|"queued-deleted"|"pending-return"|"returned", region?:string, ec2InstanceFamily?:string, savingsPlanType?:"Compute"|"EC2Instance"|"SageMaker", paymentOption?:"All Upfront"|"Partial Upfront"|"No Upfront", productTypes?:array<"EC2"|"Fargate"|"Lambda"|"SageMaker">, currency?:"CNY"|"USD", commitment?:string, upfrontPaymentAmount?:string, recurringPaymentAmount?:string, termDurationInSeconds?:int, tags?:array<string, string>, returnableUntil?:string}>, nextToken?:string}>
     */
    public function describeSavingsPlansAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{savingsPlanOfferingIds?:array<string>, savingsPlanPaymentOptions?:array<"All Upfront"|"Partial Upfront"|"No Upfront">, savingsPlanTypes?:array<"Compute"|"EC2Instance"|"SageMaker">, products?:array<"EC2"|"Fargate"|"Lambda"|"SageMaker">, serviceCodes?:array<"AmazonEC2"|"AmazonECS"|"AmazonEKS"|"AWSLambda"|"AmazonSageMaker">, usageTypes?:array<string>, operations?:array<string>, filters?:array<array{name?:"region"|"instanceFamily"|"instanceType"|"productDescription"|"tenancy"|"productId", values?:array<string>}>, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{searchResults?:array<array{savingsPlanOffering?:array{offeringId?:string, paymentOption?:"All Upfront"|"Partial Upfront"|"No Upfront", planType?:"Compute"|"EC2Instance"|"SageMaker", durationSeconds?:int, currency?:"CNY"|"USD", planDescription?:string}, rate?:string, unit?:"Hrs"|"Lambda-GB-Second"|"Request", productType?:"EC2"|"Fargate"|"Lambda"|"SageMaker", serviceCode?:"AmazonEC2"|"AmazonECS"|"AmazonEKS"|"AWSLambda"|"AmazonSageMaker", usageType?:string, operation?:string, properties?:array<array{name?:string, value?:string}>}>, nextToken?:string}>
     */
    public function describeSavingsPlansOfferingRates(array $args = []): \AWS\Result { }

    /**
     * @param array{savingsPlanOfferingIds?:array<string>, savingsPlanPaymentOptions?:array<"All Upfront"|"Partial Upfront"|"No Upfront">, savingsPlanTypes?:array<"Compute"|"EC2Instance"|"SageMaker">, products?:array<"EC2"|"Fargate"|"Lambda"|"SageMaker">, serviceCodes?:array<"AmazonEC2"|"AmazonECS"|"AmazonEKS"|"AWSLambda"|"AmazonSageMaker">, usageTypes?:array<string>, operations?:array<string>, filters?:array<array{name?:"region"|"instanceFamily"|"instanceType"|"productDescription"|"tenancy"|"productId", values?:array<string>}>, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{searchResults?:array<array{savingsPlanOffering?:array{offeringId?:string, paymentOption?:"All Upfront"|"Partial Upfront"|"No Upfront", planType?:"Compute"|"EC2Instance"|"SageMaker", durationSeconds?:int, currency?:"CNY"|"USD", planDescription?:string}, rate?:string, unit?:"Hrs"|"Lambda-GB-Second"|"Request", productType?:"EC2"|"Fargate"|"Lambda"|"SageMaker", serviceCode?:"AmazonEC2"|"AmazonECS"|"AmazonEKS"|"AWSLambda"|"AmazonSageMaker", usageType?:string, operation?:string, properties?:array<array{name?:string, value?:string}>}>, nextToken?:string}>
     */
    public function describeSavingsPlansOfferingRatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{offeringIds?:array<string>, paymentOptions?:array<"All Upfront"|"Partial Upfront"|"No Upfront">, productType?:"EC2"|"Fargate"|"Lambda"|"SageMaker", planTypes?:array<"Compute"|"EC2Instance"|"SageMaker">, durations?:array<int>, currencies?:array<"CNY"|"USD">, descriptions?:array<string>, serviceCodes?:array<string>, usageTypes?:array<string>, operations?:array<string>, filters?:array<array{name?:"region"|"instanceFamily", values?:array<string>}>, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{searchResults?:array<array{offeringId?:string, productTypes?:array<"EC2"|"Fargate"|"Lambda"|"SageMaker">, planType?:"Compute"|"EC2Instance"|"SageMaker", description?:string, paymentOption?:"All Upfront"|"Partial Upfront"|"No Upfront", durationSeconds?:int, currency?:"CNY"|"USD", serviceCode?:string, usageType?:string, operation?:string, properties?:array<array{name?:"region"|"instanceFamily", value?:string}>}>, nextToken?:string}>
     */
    public function describeSavingsPlansOfferings(array $args = []): \AWS\Result { }

    /**
     * @param array{offeringIds?:array<string>, paymentOptions?:array<"All Upfront"|"Partial Upfront"|"No Upfront">, productType?:"EC2"|"Fargate"|"Lambda"|"SageMaker", planTypes?:array<"Compute"|"EC2Instance"|"SageMaker">, durations?:array<int>, currencies?:array<"CNY"|"USD">, descriptions?:array<string>, serviceCodes?:array<string>, usageTypes?:array<string>, operations?:array<string>, filters?:array<array{name?:"region"|"instanceFamily", values?:array<string>}>, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{searchResults?:array<array{offeringId?:string, productTypes?:array<"EC2"|"Fargate"|"Lambda"|"SageMaker">, planType?:"Compute"|"EC2Instance"|"SageMaker", description?:string, paymentOption?:"All Upfront"|"Partial Upfront"|"No Upfront", durationSeconds?:int, currency?:"CNY"|"USD", serviceCode?:string, usageType?:string, operation?:string, properties?:array<array{name?:"region"|"instanceFamily", value?:string}>}>, nextToken?:string}>
     */
    public function describeSavingsPlansOfferingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{savingsPlanId:string, clientToken?:string} $args
     * @return \AWS\Result<array{savingsPlanId?:string}>
     */
    public function returnSavingsPlan(array $args): \AWS\Result { }

    /**
     * @param array{savingsPlanId:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{savingsPlanId?:string}>
     */
    public function returnSavingsPlanAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
}
