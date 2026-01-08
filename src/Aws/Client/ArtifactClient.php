<?php
namespace AWS\Artifact;

class ArtifactClient
{
    /**
     * @param array{} $args
     * @return \AWS\Result<array{accountSettings?:array{notificationSubscriptionStatus?:"SUBSCRIBED"|"NOT_SUBSCRIBED"}}>
     */
    public function getAccountSettings(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{accountSettings?:array{notificationSubscriptionStatus?:"SUBSCRIBED"|"NOT_SUBSCRIBED"}}>
     */
    public function getAccountSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{reportId:string, reportVersion?:int, termToken:string} $args
     * @return \AWS\Result<array{documentPresignedUrl?:string}>
     */
    public function getReport(array $args): \AWS\Result { }

    /**
     * @param array{reportId:string, reportVersion?:int, termToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{documentPresignedUrl?:string}>
     */
    public function getReportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{reportId:string, reportVersion?:int} $args
     * @return \AWS\Result<array{reportDetails?:array{id?:string, name?:string, description?:string, periodStart?:int|string|\DateTimeInterface, periodEnd?:int|string|\DateTimeInterface, createdAt?:int|string|\DateTimeInterface, lastModifiedAt?:int|string|\DateTimeInterface, deletedAt?:int|string|\DateTimeInterface, state?:"PUBLISHED"|"UNPUBLISHED", arn?:string, series?:string, category?:string, companyName?:string, productName?:string, termArn?:string, version?:int, acceptanceType?:"PASSTHROUGH"|"EXPLICIT", sequenceNumber?:int, uploadState?:"PROCESSING"|"COMPLETE"|"FAILED"|"FAULT", statusMessage?:string}}>
     */
    public function getReportMetadata(array $args): \AWS\Result { }

    /**
     * @param array{reportId:string, reportVersion?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{reportDetails?:array{id?:string, name?:string, description?:string, periodStart?:int|string|\DateTimeInterface, periodEnd?:int|string|\DateTimeInterface, createdAt?:int|string|\DateTimeInterface, lastModifiedAt?:int|string|\DateTimeInterface, deletedAt?:int|string|\DateTimeInterface, state?:"PUBLISHED"|"UNPUBLISHED", arn?:string, series?:string, category?:string, companyName?:string, productName?:string, termArn?:string, version?:int, acceptanceType?:"PASSTHROUGH"|"EXPLICIT", sequenceNumber?:int, uploadState?:"PROCESSING"|"COMPLETE"|"FAILED"|"FAULT", statusMessage?:string}}>
     */
    public function getReportMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{reportId:string, reportVersion?:int} $args
     * @return \AWS\Result<array{documentPresignedUrl?:string, termToken?:string}>
     */
    public function getTermForReport(array $args): \AWS\Result { }

    /**
     * @param array{reportId:string, reportVersion?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{documentPresignedUrl?:string, termToken?:string}>
     */
    public function getTermForReportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{customerAgreements:array<array{name?:string, arn?:string, id?:string, agreementArn?:string, awsAccountId?:string, organizationArn?:string, effectiveStart?:int|string|\DateTimeInterface, effectiveEnd?:int|string|\DateTimeInterface, state?:"ACTIVE"|"CUSTOMER_TERMINATED"|"AWS_TERMINATED", description?:string, acceptanceTerms?:array<string>, terminateTerms?:array<string>, type?:"CUSTOM"|"DEFAULT"|"MODIFIED"}>, nextToken?:string}>
     */
    public function listCustomerAgreements(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{customerAgreements:array<array{name?:string, arn?:string, id?:string, agreementArn?:string, awsAccountId?:string, organizationArn?:string, effectiveStart?:int|string|\DateTimeInterface, effectiveEnd?:int|string|\DateTimeInterface, state?:"ACTIVE"|"CUSTOMER_TERMINATED"|"AWS_TERMINATED", description?:string, acceptanceTerms?:array<string>, terminateTerms?:array<string>, type?:"CUSTOM"|"DEFAULT"|"MODIFIED"}>, nextToken?:string}>
     */
    public function listCustomerAgreementsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{reports?:array<array{id?:string, name?:string, state?:"PUBLISHED"|"UNPUBLISHED", arn?:string, version?:int, uploadState?:"PROCESSING"|"COMPLETE"|"FAILED"|"FAULT", description?:string, periodStart?:int|string|\DateTimeInterface, periodEnd?:int|string|\DateTimeInterface, series?:string, category?:string, companyName?:string, productName?:string, statusMessage?:string, acceptanceType?:"PASSTHROUGH"|"EXPLICIT"}>, nextToken?:string}>
     */
    public function listReports(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{reports?:array<array{id?:string, name?:string, state?:"PUBLISHED"|"UNPUBLISHED", arn?:string, version?:int, uploadState?:"PROCESSING"|"COMPLETE"|"FAILED"|"FAULT", description?:string, periodStart?:int|string|\DateTimeInterface, periodEnd?:int|string|\DateTimeInterface, series?:string, category?:string, companyName?:string, productName?:string, statusMessage?:string, acceptanceType?:"PASSTHROUGH"|"EXPLICIT"}>, nextToken?:string}>
     */
    public function listReportsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{notificationSubscriptionStatus?:"SUBSCRIBED"|"NOT_SUBSCRIBED"} $args
     * @return \AWS\Result<array{accountSettings?:array{notificationSubscriptionStatus?:"SUBSCRIBED"|"NOT_SUBSCRIBED"}}>
     */
    public function putAccountSettings(array $args = []): \AWS\Result { }

    /**
     * @param array{notificationSubscriptionStatus?:"SUBSCRIBED"|"NOT_SUBSCRIBED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{accountSettings?:array{notificationSubscriptionStatus?:"SUBSCRIBED"|"NOT_SUBSCRIBED"}}>
     */
    public function putAccountSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }
}
