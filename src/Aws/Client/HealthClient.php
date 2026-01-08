<?php
namespace AWS\Health;

class HealthClient
{
    /**
     * @param array{eventArn:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{affectedAccounts?:array<string>, eventScopeCode?:"PUBLIC"|"ACCOUNT_SPECIFIC"|"NONE", nextToken?:string}>
     */
    public function describeAffectedAccountsForOrganization(array $args): \AWS\Result { }

    /**
     * @param array{eventArn:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{affectedAccounts?:array<string>, eventScopeCode?:"PUBLIC"|"ACCOUNT_SPECIFIC"|"NONE", nextToken?:string}>
     */
    public function describeAffectedAccountsForOrganizationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filter:array{eventArns:array<string>, entityArns?:array<string>, entityValues?:array<string>, lastUpdatedTimes?:array<array{from?:int|string|\DateTimeInterface, to?:int|string|\DateTimeInterface}>, tags?:array<array<string, string>>, statusCodes?:array<"IMPAIRED"|"UNIMPAIRED"|"UNKNOWN"|"PENDING"|"RESOLVED">}, locale?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{entities?:array<array{entityArn?:string, eventArn?:string, entityValue?:string, entityUrl?:string, awsAccountId?:string, lastUpdatedTime?:int|string|\DateTimeInterface, statusCode?:"IMPAIRED"|"UNIMPAIRED"|"UNKNOWN"|"PENDING"|"RESOLVED", tags?:array<string, string>, entityMetadata?:array<string, string>}>, nextToken?:string}>
     */
    public function describeAffectedEntities(array $args): \AWS\Result { }

    /**
     * @param array{filter:array{eventArns:array<string>, entityArns?:array<string>, entityValues?:array<string>, lastUpdatedTimes?:array<array{from?:int|string|\DateTimeInterface, to?:int|string|\DateTimeInterface}>, tags?:array<array<string, string>>, statusCodes?:array<"IMPAIRED"|"UNIMPAIRED"|"UNKNOWN"|"PENDING"|"RESOLVED">}, locale?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{entities?:array<array{entityArn?:string, eventArn?:string, entityValue?:string, entityUrl?:string, awsAccountId?:string, lastUpdatedTime?:int|string|\DateTimeInterface, statusCode?:"IMPAIRED"|"UNIMPAIRED"|"UNKNOWN"|"PENDING"|"RESOLVED", tags?:array<string, string>, entityMetadata?:array<string, string>}>, nextToken?:string}>
     */
    public function describeAffectedEntitiesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{organizationEntityFilters?:array<array{eventArn:string, awsAccountId?:string}>, locale?:string, nextToken?:string, maxResults?:int, organizationEntityAccountFilters?:array<array{eventArn:string, awsAccountId?:string, statusCodes?:array<"IMPAIRED"|"UNIMPAIRED"|"UNKNOWN"|"PENDING"|"RESOLVED">}>} $args
     * @return \AWS\Result<array{entities?:array<array{entityArn?:string, eventArn?:string, entityValue?:string, entityUrl?:string, awsAccountId?:string, lastUpdatedTime?:int|string|\DateTimeInterface, statusCode?:"IMPAIRED"|"UNIMPAIRED"|"UNKNOWN"|"PENDING"|"RESOLVED", tags?:array<string, string>, entityMetadata?:array<string, string>}>, failedSet?:array<array{awsAccountId?:string, eventArn?:string, errorName?:string, errorMessage?:string}>, nextToken?:string}>
     */
    public function describeAffectedEntitiesForOrganization(array $args = []): \AWS\Result { }

    /**
     * @param array{organizationEntityFilters?:array<array{eventArn:string, awsAccountId?:string}>, locale?:string, nextToken?:string, maxResults?:int, organizationEntityAccountFilters?:array<array{eventArn:string, awsAccountId?:string, statusCodes?:array<"IMPAIRED"|"UNIMPAIRED"|"UNKNOWN"|"PENDING"|"RESOLVED">}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{entities?:array<array{entityArn?:string, eventArn?:string, entityValue?:string, entityUrl?:string, awsAccountId?:string, lastUpdatedTime?:int|string|\DateTimeInterface, statusCode?:"IMPAIRED"|"UNIMPAIRED"|"UNKNOWN"|"PENDING"|"RESOLVED", tags?:array<string, string>, entityMetadata?:array<string, string>}>, failedSet?:array<array{awsAccountId?:string, eventArn?:string, errorName?:string, errorMessage?:string}>, nextToken?:string}>
     */
    public function describeAffectedEntitiesForOrganizationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{eventArns?:array<string>} $args
     * @return \AWS\Result<array{entityAggregates?:array<array{eventArn?:string, count?:int, statuses?:array<"IMPAIRED"|"UNIMPAIRED"|"UNKNOWN"|"PENDING"|"RESOLVED", int>}>}>
     */
    public function describeEntityAggregates(array $args = []): \AWS\Result { }

    /**
     * @param array{eventArns?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{entityAggregates?:array<array{eventArn?:string, count?:int, statuses?:array<"IMPAIRED"|"UNIMPAIRED"|"UNKNOWN"|"PENDING"|"RESOLVED", int>}>}>
     */
    public function describeEntityAggregatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{eventArns:array<string>, awsAccountIds?:array<string>} $args
     * @return \AWS\Result<array{organizationEntityAggregates?:array<array{eventArn?:string, count?:int, statuses?:array<"IMPAIRED"|"UNIMPAIRED"|"UNKNOWN"|"PENDING"|"RESOLVED", int>, accounts?:array<array{accountId?:string, count?:int, statuses?:array<"IMPAIRED"|"UNIMPAIRED"|"UNKNOWN"|"PENDING"|"RESOLVED", int>}>}>}>
     */
    public function describeEntityAggregatesForOrganization(array $args): \AWS\Result { }

    /**
     * @param array{eventArns:array<string>, awsAccountIds?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{organizationEntityAggregates?:array<array{eventArn?:string, count?:int, statuses?:array<"IMPAIRED"|"UNIMPAIRED"|"UNKNOWN"|"PENDING"|"RESOLVED", int>, accounts?:array<array{accountId?:string, count?:int, statuses?:array<"IMPAIRED"|"UNIMPAIRED"|"UNKNOWN"|"PENDING"|"RESOLVED", int>}>}>}>
     */
    public function describeEntityAggregatesForOrganizationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filter?:array{eventArns?:array<string>, eventTypeCodes?:array<string>, services?:array<string>, regions?:array<string>, availabilityZones?:array<string>, startTimes?:array<array{from?:int|string|\DateTimeInterface, to?:int|string|\DateTimeInterface}>, endTimes?:array<array{from?:int|string|\DateTimeInterface, to?:int|string|\DateTimeInterface}>, lastUpdatedTimes?:array<array{from?:int|string|\DateTimeInterface, to?:int|string|\DateTimeInterface}>, entityArns?:array<string>, entityValues?:array<string>, eventTypeCategories?:array<"issue"|"accountNotification"|"scheduledChange"|"investigation">, tags?:array<array<string, string>>, eventStatusCodes?:array<"open"|"closed"|"upcoming">}, aggregateField:"eventTypeCategory", maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{eventAggregates?:array<array{aggregateValue?:string, count?:int}>, nextToken?:string}>
     */
    public function describeEventAggregates(array $args): \AWS\Result { }

    /**
     * @param array{filter?:array{eventArns?:array<string>, eventTypeCodes?:array<string>, services?:array<string>, regions?:array<string>, availabilityZones?:array<string>, startTimes?:array<array{from?:int|string|\DateTimeInterface, to?:int|string|\DateTimeInterface}>, endTimes?:array<array{from?:int|string|\DateTimeInterface, to?:int|string|\DateTimeInterface}>, lastUpdatedTimes?:array<array{from?:int|string|\DateTimeInterface, to?:int|string|\DateTimeInterface}>, entityArns?:array<string>, entityValues?:array<string>, eventTypeCategories?:array<"issue"|"accountNotification"|"scheduledChange"|"investigation">, tags?:array<array<string, string>>, eventStatusCodes?:array<"open"|"closed"|"upcoming">}, aggregateField:"eventTypeCategory", maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{eventAggregates?:array<array{aggregateValue?:string, count?:int}>, nextToken?:string}>
     */
    public function describeEventAggregatesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{eventArns:array<string>, locale?:string} $args
     * @return \AWS\Result<array{successfulSet?:array<array{event?:array{arn?:string, service?:string, eventTypeCode?:string, eventTypeCategory?:"issue"|"accountNotification"|"scheduledChange"|"investigation", region?:string, availabilityZone?:string, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, statusCode?:"open"|"closed"|"upcoming", eventScopeCode?:"PUBLIC"|"ACCOUNT_SPECIFIC"|"NONE"}, eventDescription?:array{latestDescription?:string}, eventMetadata?:array<string, string>}>, failedSet?:array<array{eventArn?:string, errorName?:string, errorMessage?:string}>}>
     */
    public function describeEventDetails(array $args): \AWS\Result { }

    /**
     * @param array{eventArns:array<string>, locale?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{successfulSet?:array<array{event?:array{arn?:string, service?:string, eventTypeCode?:string, eventTypeCategory?:"issue"|"accountNotification"|"scheduledChange"|"investigation", region?:string, availabilityZone?:string, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, statusCode?:"open"|"closed"|"upcoming", eventScopeCode?:"PUBLIC"|"ACCOUNT_SPECIFIC"|"NONE"}, eventDescription?:array{latestDescription?:string}, eventMetadata?:array<string, string>}>, failedSet?:array<array{eventArn?:string, errorName?:string, errorMessage?:string}>}>
     */
    public function describeEventDetailsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{organizationEventDetailFilters:array<array{eventArn:string, awsAccountId?:string}>, locale?:string} $args
     * @return \AWS\Result<array{successfulSet?:array<array{awsAccountId?:string, event?:array{arn?:string, service?:string, eventTypeCode?:string, eventTypeCategory?:"issue"|"accountNotification"|"scheduledChange"|"investigation", region?:string, availabilityZone?:string, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, statusCode?:"open"|"closed"|"upcoming", eventScopeCode?:"PUBLIC"|"ACCOUNT_SPECIFIC"|"NONE"}, eventDescription?:array{latestDescription?:string}, eventMetadata?:array<string, string>}>, failedSet?:array<array{awsAccountId?:string, eventArn?:string, errorName?:string, errorMessage?:string}>}>
     */
    public function describeEventDetailsForOrganization(array $args): \AWS\Result { }

    /**
     * @param array{organizationEventDetailFilters:array<array{eventArn:string, awsAccountId?:string}>, locale?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{successfulSet?:array<array{awsAccountId?:string, event?:array{arn?:string, service?:string, eventTypeCode?:string, eventTypeCategory?:"issue"|"accountNotification"|"scheduledChange"|"investigation", region?:string, availabilityZone?:string, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, statusCode?:"open"|"closed"|"upcoming", eventScopeCode?:"PUBLIC"|"ACCOUNT_SPECIFIC"|"NONE"}, eventDescription?:array{latestDescription?:string}, eventMetadata?:array<string, string>}>, failedSet?:array<array{awsAccountId?:string, eventArn?:string, errorName?:string, errorMessage?:string}>}>
     */
    public function describeEventDetailsForOrganizationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filter?:array{eventTypeCodes?:array<string>, services?:array<string>, eventTypeCategories?:array<"issue"|"accountNotification"|"scheduledChange"|"investigation">}, locale?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{eventTypes?:array<array{service?:string, code?:string, category?:"issue"|"accountNotification"|"scheduledChange"|"investigation"}>, nextToken?:string}>
     */
    public function describeEventTypes(array $args = []): \AWS\Result { }

    /**
     * @param array{filter?:array{eventTypeCodes?:array<string>, services?:array<string>, eventTypeCategories?:array<"issue"|"accountNotification"|"scheduledChange"|"investigation">}, locale?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{eventTypes?:array<array{service?:string, code?:string, category?:"issue"|"accountNotification"|"scheduledChange"|"investigation"}>, nextToken?:string}>
     */
    public function describeEventTypesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filter?:array{eventArns?:array<string>, eventTypeCodes?:array<string>, services?:array<string>, regions?:array<string>, availabilityZones?:array<string>, startTimes?:array<array{from?:int|string|\DateTimeInterface, to?:int|string|\DateTimeInterface}>, endTimes?:array<array{from?:int|string|\DateTimeInterface, to?:int|string|\DateTimeInterface}>, lastUpdatedTimes?:array<array{from?:int|string|\DateTimeInterface, to?:int|string|\DateTimeInterface}>, entityArns?:array<string>, entityValues?:array<string>, eventTypeCategories?:array<"issue"|"accountNotification"|"scheduledChange"|"investigation">, tags?:array<array<string, string>>, eventStatusCodes?:array<"open"|"closed"|"upcoming">}, nextToken?:string, maxResults?:int, locale?:string} $args
     * @return \AWS\Result<array{events?:array<array{arn?:string, service?:string, eventTypeCode?:string, eventTypeCategory?:"issue"|"accountNotification"|"scheduledChange"|"investigation", region?:string, availabilityZone?:string, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, statusCode?:"open"|"closed"|"upcoming", eventScopeCode?:"PUBLIC"|"ACCOUNT_SPECIFIC"|"NONE"}>, nextToken?:string}>
     */
    public function describeEvents(array $args = []): \AWS\Result { }

    /**
     * @param array{filter?:array{eventArns?:array<string>, eventTypeCodes?:array<string>, services?:array<string>, regions?:array<string>, availabilityZones?:array<string>, startTimes?:array<array{from?:int|string|\DateTimeInterface, to?:int|string|\DateTimeInterface}>, endTimes?:array<array{from?:int|string|\DateTimeInterface, to?:int|string|\DateTimeInterface}>, lastUpdatedTimes?:array<array{from?:int|string|\DateTimeInterface, to?:int|string|\DateTimeInterface}>, entityArns?:array<string>, entityValues?:array<string>, eventTypeCategories?:array<"issue"|"accountNotification"|"scheduledChange"|"investigation">, tags?:array<array<string, string>>, eventStatusCodes?:array<"open"|"closed"|"upcoming">}, nextToken?:string, maxResults?:int, locale?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{events?:array<array{arn?:string, service?:string, eventTypeCode?:string, eventTypeCategory?:"issue"|"accountNotification"|"scheduledChange"|"investigation", region?:string, availabilityZone?:string, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, statusCode?:"open"|"closed"|"upcoming", eventScopeCode?:"PUBLIC"|"ACCOUNT_SPECIFIC"|"NONE"}>, nextToken?:string}>
     */
    public function describeEventsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filter?:array{eventTypeCodes?:array<string>, awsAccountIds?:array<string>, services?:array<string>, regions?:array<string>, startTime?:array{from?:int|string|\DateTimeInterface, to?:int|string|\DateTimeInterface}, endTime?:array{from?:int|string|\DateTimeInterface, to?:int|string|\DateTimeInterface}, lastUpdatedTime?:array{from?:int|string|\DateTimeInterface, to?:int|string|\DateTimeInterface}, entityArns?:array<string>, entityValues?:array<string>, eventTypeCategories?:array<"issue"|"accountNotification"|"scheduledChange"|"investigation">, eventStatusCodes?:array<"open"|"closed"|"upcoming">}, nextToken?:string, maxResults?:int, locale?:string} $args
     * @return \AWS\Result<array{events?:array<array{arn?:string, service?:string, eventTypeCode?:string, eventTypeCategory?:"issue"|"accountNotification"|"scheduledChange"|"investigation", eventScopeCode?:"PUBLIC"|"ACCOUNT_SPECIFIC"|"NONE", region?:string, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, statusCode?:"open"|"closed"|"upcoming"}>, nextToken?:string}>
     */
    public function describeEventsForOrganization(array $args = []): \AWS\Result { }

    /**
     * @param array{filter?:array{eventTypeCodes?:array<string>, awsAccountIds?:array<string>, services?:array<string>, regions?:array<string>, startTime?:array{from?:int|string|\DateTimeInterface, to?:int|string|\DateTimeInterface}, endTime?:array{from?:int|string|\DateTimeInterface, to?:int|string|\DateTimeInterface}, lastUpdatedTime?:array{from?:int|string|\DateTimeInterface, to?:int|string|\DateTimeInterface}, entityArns?:array<string>, entityValues?:array<string>, eventTypeCategories?:array<"issue"|"accountNotification"|"scheduledChange"|"investigation">, eventStatusCodes?:array<"open"|"closed"|"upcoming">}, nextToken?:string, maxResults?:int, locale?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{events?:array<array{arn?:string, service?:string, eventTypeCode?:string, eventTypeCategory?:"issue"|"accountNotification"|"scheduledChange"|"investigation", eventScopeCode?:"PUBLIC"|"ACCOUNT_SPECIFIC"|"NONE", region?:string, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, lastUpdatedTime?:int|string|\DateTimeInterface, statusCode?:"open"|"closed"|"upcoming"}>, nextToken?:string}>
     */
    public function describeEventsForOrganizationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{healthServiceAccessStatusForOrganization?:string}>
     */
    public function describeHealthServiceStatusForOrganization(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{healthServiceAccessStatusForOrganization?:string}>
     */
    public function describeHealthServiceStatusForOrganizationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<void>
     */
    public function disableHealthServiceAccessForOrganization(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disableHealthServiceAccessForOrganizationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<void>
     */
    public function enableHealthServiceAccessForOrganization(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function enableHealthServiceAccessForOrganizationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }
}
