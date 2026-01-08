<?php
namespace AWS\MarketplaceAgreement;

class MarketplaceAgreementClient
{
    /**
     * @param array{agreementId:string} $args
     * @return \AWS\Result<array{acceptanceTime?:int|string|\DateTimeInterface, acceptor?:array{accountId?:string}, agreementId?:string, agreementType?:string, endTime?:int|string|\DateTimeInterface, estimatedCharges?:array{agreementValue?:string, currencyCode?:string}, proposalSummary?:array{offerId?:string, resources?:array<array{id?:string, type?:string}>}, proposer?:array{accountId?:string}, startTime?:int|string|\DateTimeInterface, status?:"ACTIVE"|"ARCHIVED"|"CANCELLED"|"EXPIRED"|"RENEWED"|"REPLACED"|"ROLLED_BACK"|"SUPERSEDED"|"TERMINATED"}>
     */
    public function describeAgreement(array $args): \AWS\Result { }

    /**
     * @param array{agreementId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{acceptanceTime?:int|string|\DateTimeInterface, acceptor?:array{accountId?:string}, agreementId?:string, agreementType?:string, endTime?:int|string|\DateTimeInterface, estimatedCharges?:array{agreementValue?:string, currencyCode?:string}, proposalSummary?:array{offerId?:string, resources?:array<array{id?:string, type?:string}>}, proposer?:array{accountId?:string}, startTime?:int|string|\DateTimeInterface, status?:"ACTIVE"|"ARCHIVED"|"CANCELLED"|"EXPIRED"|"RENEWED"|"REPLACED"|"ROLLED_BACK"|"SUPERSEDED"|"TERMINATED"}>
     */
    public function describeAgreementAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{agreementId:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{acceptedTerms?:array<array{byolPricingTerm?:array{type?:string}, configurableUpfrontPricingTerm?:array{configuration?:array{dimensions:array<array{dimensionKey:string, dimensionValue:int}>, selectorValue:string}, currencyCode?:string, rateCards?:array<array{constraints?:array{multipleDimensionSelection?:string, quantityConfiguration?:string}, rateCard?:array<array{dimensionKey?:string, price?:string}>, selector?:array{type?:string, value?:string}}>, type?:string}, fixedUpfrontPricingTerm?:array{currencyCode?:string, duration?:string, grants?:array<array{dimensionKey?:string, maxQuantity?:int}>, price?:string, type?:string}, freeTrialPricingTerm?:array{duration?:string, grants?:array<array{dimensionKey?:string, maxQuantity?:int}>, type?:string}, legalTerm?:array{documents?:array<array{type?:string, url?:string, version?:string}>, type?:string}, paymentScheduleTerm?:array{currencyCode?:string, schedule?:array<array{chargeAmount?:string, chargeDate?:int|string|\DateTimeInterface}>, type?:string}, recurringPaymentTerm?:array{billingPeriod?:string, currencyCode?:string, price?:string, type?:string}, renewalTerm?:array{configuration?:array{enableAutoRenew:bool}, type?:string}, supportTerm?:array{refundPolicy?:string, type?:string}, usageBasedPricingTerm?:array{currencyCode?:string, rateCards?:array<array{rateCard?:array<array{dimensionKey?:string, price?:string}>}>, type?:string}, validityTerm?:array{agreementDuration?:string, agreementEndDate?:int|string|\DateTimeInterface, agreementStartDate?:int|string|\DateTimeInterface, type?:string}}>, nextToken?:string}>
     */
    public function getAgreementTerms(array $args): \AWS\Result { }

    /**
     * @param array{agreementId:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{acceptedTerms?:array<array{byolPricingTerm?:array{type?:string}, configurableUpfrontPricingTerm?:array{configuration?:array{dimensions:array<array{dimensionKey:string, dimensionValue:int}>, selectorValue:string}, currencyCode?:string, rateCards?:array<array{constraints?:array{multipleDimensionSelection?:string, quantityConfiguration?:string}, rateCard?:array<array{dimensionKey?:string, price?:string}>, selector?:array{type?:string, value?:string}}>, type?:string}, fixedUpfrontPricingTerm?:array{currencyCode?:string, duration?:string, grants?:array<array{dimensionKey?:string, maxQuantity?:int}>, price?:string, type?:string}, freeTrialPricingTerm?:array{duration?:string, grants?:array<array{dimensionKey?:string, maxQuantity?:int}>, type?:string}, legalTerm?:array{documents?:array<array{type?:string, url?:string, version?:string}>, type?:string}, paymentScheduleTerm?:array{currencyCode?:string, schedule?:array<array{chargeAmount?:string, chargeDate?:int|string|\DateTimeInterface}>, type?:string}, recurringPaymentTerm?:array{billingPeriod?:string, currencyCode?:string, price?:string, type?:string}, renewalTerm?:array{configuration?:array{enableAutoRenew:bool}, type?:string}, supportTerm?:array{refundPolicy?:string, type?:string}, usageBasedPricingTerm?:array{currencyCode?:string, rateCards?:array<array{rateCard?:array<array{dimensionKey?:string, price?:string}>}>, type?:string}, validityTerm?:array{agreementDuration?:string, agreementEndDate?:int|string|\DateTimeInterface, agreementStartDate?:int|string|\DateTimeInterface, type?:string}}>, nextToken?:string}>
     */
    public function getAgreementTermsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{catalog?:string, filters?:array<array{name?:string, values?:array<string>}>, maxResults?:int, nextToken?:string, sort?:array{sortBy?:string, sortOrder?:"ASCENDING"|"DESCENDING"}} $args
     * @return \AWS\Result<array{agreementViewSummaries?:array<array{acceptanceTime?:int|string|\DateTimeInterface, acceptor?:array{accountId?:string}, agreementId?:string, agreementType?:string, endTime?:int|string|\DateTimeInterface, proposalSummary?:array{offerId?:string, resources?:array<array{id?:string, type?:string}>}, proposer?:array{accountId?:string}, startTime?:int|string|\DateTimeInterface, status?:"ACTIVE"|"ARCHIVED"|"CANCELLED"|"EXPIRED"|"RENEWED"|"REPLACED"|"ROLLED_BACK"|"SUPERSEDED"|"TERMINATED"}>, nextToken?:string}>
     */
    public function searchAgreements(array $args = []): \AWS\Result { }

    /**
     * @param array{catalog?:string, filters?:array<array{name?:string, values?:array<string>}>, maxResults?:int, nextToken?:string, sort?:array{sortBy?:string, sortOrder?:"ASCENDING"|"DESCENDING"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{agreementViewSummaries?:array<array{acceptanceTime?:int|string|\DateTimeInterface, acceptor?:array{accountId?:string}, agreementId?:string, agreementType?:string, endTime?:int|string|\DateTimeInterface, proposalSummary?:array{offerId?:string, resources?:array<array{id?:string, type?:string}>}, proposer?:array{accountId?:string}, startTime?:int|string|\DateTimeInterface, status?:"ACTIVE"|"ARCHIVED"|"CANCELLED"|"EXPIRED"|"RENEWED"|"REPLACED"|"ROLLED_BACK"|"SUPERSEDED"|"TERMINATED"}>, nextToken?:string}>
     */
    public function searchAgreementsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }
}
