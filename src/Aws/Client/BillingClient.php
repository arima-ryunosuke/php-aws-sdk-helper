<?php
namespace AWS\Billing;

class BillingClient
{
    /**
     * @param array{name:string, description?:string, sourceViews:array<string>, dataFilterExpression?:array{dimensions?:array{key:"LINKED_ACCOUNT", values:array<string>}, tags?:array{key:string, values:array<string>}}, clientToken?:string, resourceTags?:array<array{key:string, value?:string}>} $args
     * @return \AWS\Result<array{arn:string, createdAt?:int|string|\DateTimeInterface}>
     */
    public function createBillingView(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, sourceViews:array<string>, dataFilterExpression?:array{dimensions?:array{key:"LINKED_ACCOUNT", values:array<string>}, tags?:array{key:string, values:array<string>}}, clientToken?:string, resourceTags?:array<array{key:string, value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, createdAt?:int|string|\DateTimeInterface}>
     */
    public function createBillingViewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{arn:string}>
     */
    public function deleteBillingView(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string}>
     */
    public function deleteBillingViewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{billingView:array{arn?:string, name?:string, description?:string, billingViewType?:"PRIMARY"|"BILLING_GROUP"|"CUSTOM", ownerAccountId?:string, dataFilterExpression?:array{dimensions?:array{key:"LINKED_ACCOUNT", values:array<string>}, tags?:array{key:string, values:array<string>}}, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function getBillingView(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{billingView:array{arn?:string, name?:string, description?:string, billingViewType?:"PRIMARY"|"BILLING_GROUP"|"CUSTOM", ownerAccountId?:string, dataFilterExpression?:array{dimensions?:array{key:"LINKED_ACCOUNT", values:array<string>}, tags?:array{key:string, values:array<string>}}, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface}}>
     */
    public function getBillingViewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{resourceArn:string, policy?:string}>
     */
    public function getResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{resourceArn:string, policy?:string}>
     */
    public function getResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{activeTimeRange?:array{activeAfterInclusive:int|string|\DateTimeInterface, activeBeforeInclusive:int|string|\DateTimeInterface}, arns?:array<string>, billingViewTypes?:array<"PRIMARY"|"BILLING_GROUP"|"CUSTOM">, ownerAccountId?:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{billingViews:array<array{arn?:string, name?:string, description?:string, ownerAccountId?:string, billingViewType?:"PRIMARY"|"BILLING_GROUP"|"CUSTOM"}>, nextToken?:string}>
     */
    public function listBillingViews(array $args = []): \AWS\Result { }

    /**
     * @param array{activeTimeRange?:array{activeAfterInclusive:int|string|\DateTimeInterface, activeBeforeInclusive:int|string|\DateTimeInterface}, arns?:array<string>, billingViewTypes?:array<"PRIMARY"|"BILLING_GROUP"|"CUSTOM">, ownerAccountId?:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{billingViews:array<array{arn?:string, name?:string, description?:string, ownerAccountId?:string, billingViewType?:"PRIMARY"|"BILLING_GROUP"|"CUSTOM"}>, nextToken?:string}>
     */
    public function listBillingViewsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{sourceViews:array<string>, nextToken?:string}>
     */
    public function listSourceViewsForBillingView(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{sourceViews:array<string>, nextToken?:string}>
     */
    public function listSourceViewsForBillingViewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{resourceTags?:array<array{key:string, value?:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{resourceTags?:array<array{key:string, value?:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, resourceTags:array<array{key:string, value?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, resourceTags:array<array{key:string, value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, resourceTagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, resourceTagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, name?:string, description?:string, dataFilterExpression?:array{dimensions?:array{key:"LINKED_ACCOUNT", values:array<string>}, tags?:array{key:string, values:array<string>}}} $args
     * @return \AWS\Result<array{arn:string, updatedAt?:int|string|\DateTimeInterface}>
     */
    public function updateBillingView(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, name?:string, description?:string, dataFilterExpression?:array{dimensions?:array{key:"LINKED_ACCOUNT", values:array<string>}, tags?:array{key:string, values:array<string>}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, updatedAt?:int|string|\DateTimeInterface}>
     */
    public function updateBillingViewAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
