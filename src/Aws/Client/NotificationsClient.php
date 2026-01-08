<?php
namespace AWS\Notifications;

class NotificationsClient
{
    /**
     * @param array{arn:string, notificationConfigurationArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function associateChannel(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, notificationConfigurationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{contactIdentifier:"ACCOUNT_PRIMARY"|"ACCOUNT_ALTERNATE_BILLING"|"ACCOUNT_ALTERNATE_OPERATIONS"|"ACCOUNT_ALTERNATE_SECURITY", managedNotificationConfigurationArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function associateManagedNotificationAccountContact(array $args): \AWS\Result { }

    /**
     * @param array{contactIdentifier:"ACCOUNT_PRIMARY"|"ACCOUNT_ALTERNATE_BILLING"|"ACCOUNT_ALTERNATE_OPERATIONS"|"ACCOUNT_ALTERNATE_SECURITY", managedNotificationConfigurationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateManagedNotificationAccountContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{channelArn:string, managedNotificationConfigurationArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function associateManagedNotificationAdditionalChannel(array $args): \AWS\Result { }

    /**
     * @param array{channelArn:string, managedNotificationConfigurationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateManagedNotificationAdditionalChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{notificationConfigurationArn:string, source:string, eventType:string, eventPattern?:string, regions:array<string>} $args
     * @return \AWS\Result<array{arn:string, notificationConfigurationArn:string, statusSummaryByRegion:array<string, array{status:"ACTIVE"|"INACTIVE"|"CREATING"|"UPDATING"|"DELETING", reason:string}>}>
     */
    public function createEventRule(array $args): \AWS\Result { }

    /**
     * @param array{notificationConfigurationArn:string, source:string, eventType:string, eventPattern?:string, regions:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, notificationConfigurationArn:string, statusSummaryByRegion:array<string, array{status:"ACTIVE"|"INACTIVE"|"CREATING"|"UPDATING"|"DELETING", reason:string}>}>
     */
    public function createEventRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description:string, aggregationDuration?:"LONG"|"SHORT"|"NONE", tags?:array<string, string>} $args
     * @return \AWS\Result<array{arn:string, status:"ACTIVE"|"PARTIALLY_ACTIVE"|"INACTIVE"|"DELETING"}>
     */
    public function createNotificationConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description:string, aggregationDuration?:"LONG"|"SHORT"|"NONE", tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, status:"ACTIVE"|"PARTIALLY_ACTIVE"|"INACTIVE"|"DELETING"}>
     */
    public function createNotificationConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteEventRule(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteEventRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteNotificationConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteNotificationConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{notificationHubRegion:string} $args
     * @return \AWS\Result<array{notificationHubRegion:string, statusSummary:array{status:"ACTIVE"|"REGISTERING"|"DEREGISTERING"|"INACTIVE", reason:string}}>
     */
    public function deregisterNotificationHub(array $args): \AWS\Result { }

    /**
     * @param array{notificationHubRegion:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{notificationHubRegion:string, statusSummary:array{status:"ACTIVE"|"REGISTERING"|"DEREGISTERING"|"INACTIVE", reason:string}}>
     */
    public function deregisterNotificationHubAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{}>
     */
    public function disableNotificationsAccessForOrganization(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disableNotificationsAccessForOrganizationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, notificationConfigurationArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateChannel(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, notificationConfigurationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{contactIdentifier:"ACCOUNT_PRIMARY"|"ACCOUNT_ALTERNATE_BILLING"|"ACCOUNT_ALTERNATE_OPERATIONS"|"ACCOUNT_ALTERNATE_SECURITY", managedNotificationConfigurationArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateManagedNotificationAccountContact(array $args): \AWS\Result { }

    /**
     * @param array{contactIdentifier:"ACCOUNT_PRIMARY"|"ACCOUNT_ALTERNATE_BILLING"|"ACCOUNT_ALTERNATE_OPERATIONS"|"ACCOUNT_ALTERNATE_SECURITY", managedNotificationConfigurationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateManagedNotificationAccountContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{channelArn:string, managedNotificationConfigurationArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateManagedNotificationAdditionalChannel(array $args): \AWS\Result { }

    /**
     * @param array{channelArn:string, managedNotificationConfigurationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateManagedNotificationAdditionalChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{}>
     */
    public function enableNotificationsAccessForOrganization(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function enableNotificationsAccessForOrganizationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{arn:string, notificationConfigurationArn:string, creationTime:int|string|\DateTimeInterface, source:string, eventType:string, eventPattern:string, regions:array<string>, managedRules:array<string>, statusSummaryByRegion:array<string, array{status:"ACTIVE"|"INACTIVE"|"CREATING"|"UPDATING"|"DELETING", reason:string}>}>
     */
    public function getEventRule(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, notificationConfigurationArn:string, creationTime:int|string|\DateTimeInterface, source:string, eventType:string, eventPattern:string, regions:array<string>, managedRules:array<string>, statusSummaryByRegion:array<string, array{status:"ACTIVE"|"INACTIVE"|"CREATING"|"UPDATING"|"DELETING", reason:string}>}>
     */
    public function getEventRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, locale?:"de_DE"|"en_CA"|"en_US"|"en_UK"|"es_ES"|"fr_CA"|"fr_FR"|"id_ID"|"it_IT"|"ja_JP"|"ko_KR"|"pt_BR"|"tr_TR"|"zh_CN"|"zh_TW"} $args
     * @return \AWS\Result<array{arn:string, managedNotificationConfigurationArn:string, creationTime:int|string|\DateTimeInterface, content:array{schemaVersion:"v1.0", id:string, messageComponents:array{headline?:string, paragraphSummary?:string, completeDescription?:string, dimensions?:array<array{name:string, value:string}>}, sourceEventDetailUrl?:string, sourceEventDetailUrlDisplayText?:string, notificationType:"ALERT"|"WARNING"|"ANNOUNCEMENT"|"INFORMATIONAL", eventStatus?:"HEALTHY"|"UNHEALTHY", aggregateManagedNotificationEventArn:string, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, textParts:array<string, array{type:"LOCALIZED_TEXT"|"PLAIN_TEXT"|"URL", displayText?:string, textByLocale?:array<"de_DE"|"en_CA"|"en_US"|"en_UK"|"es_ES"|"fr_CA"|"fr_FR"|"id_ID"|"it_IT"|"ja_JP"|"ko_KR"|"pt_BR"|"tr_TR"|"zh_CN"|"zh_TW", string>, url?:string}>, organizationalUnitId?:string, aggregationDetail?:array{summarizationDimensions?:array<array{name:string, value:string}>}}}>
     */
    public function getManagedNotificationChildEvent(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, locale?:"de_DE"|"en_CA"|"en_US"|"en_UK"|"es_ES"|"fr_CA"|"fr_FR"|"id_ID"|"it_IT"|"ja_JP"|"ko_KR"|"pt_BR"|"tr_TR"|"zh_CN"|"zh_TW"} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, managedNotificationConfigurationArn:string, creationTime:int|string|\DateTimeInterface, content:array{schemaVersion:"v1.0", id:string, messageComponents:array{headline?:string, paragraphSummary?:string, completeDescription?:string, dimensions?:array<array{name:string, value:string}>}, sourceEventDetailUrl?:string, sourceEventDetailUrlDisplayText?:string, notificationType:"ALERT"|"WARNING"|"ANNOUNCEMENT"|"INFORMATIONAL", eventStatus?:"HEALTHY"|"UNHEALTHY", aggregateManagedNotificationEventArn:string, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, textParts:array<string, array{type:"LOCALIZED_TEXT"|"PLAIN_TEXT"|"URL", displayText?:string, textByLocale?:array<"de_DE"|"en_CA"|"en_US"|"en_UK"|"es_ES"|"fr_CA"|"fr_FR"|"id_ID"|"it_IT"|"ja_JP"|"ko_KR"|"pt_BR"|"tr_TR"|"zh_CN"|"zh_TW", string>, url?:string}>, organizationalUnitId?:string, aggregationDetail?:array{summarizationDimensions?:array<array{name:string, value:string}>}}}>
     */
    public function getManagedNotificationChildEventAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{arn:string, name:string, description:string, category:string, subCategory:string}>
     */
    public function getManagedNotificationConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, name:string, description:string, category:string, subCategory:string}>
     */
    public function getManagedNotificationConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, locale?:"de_DE"|"en_CA"|"en_US"|"en_UK"|"es_ES"|"fr_CA"|"fr_FR"|"id_ID"|"it_IT"|"ja_JP"|"ko_KR"|"pt_BR"|"tr_TR"|"zh_CN"|"zh_TW"} $args
     * @return \AWS\Result<array{arn:string, managedNotificationConfigurationArn:string, creationTime:int|string|\DateTimeInterface, content:array{schemaVersion:"v1.0", id:string, messageComponents:array{headline?:string, paragraphSummary?:string, completeDescription?:string, dimensions?:array<array{name:string, value:string}>}, sourceEventDetailUrl?:string, sourceEventDetailUrlDisplayText?:string, notificationType:"ALERT"|"WARNING"|"ANNOUNCEMENT"|"INFORMATIONAL", eventStatus?:"HEALTHY"|"UNHEALTHY", aggregationEventType?:"AGGREGATE"|"CHILD"|"NONE", aggregationSummary?:array{eventCount:int, aggregatedBy:array<array{name:string, value:string}>, aggregatedAccounts:array{name:string, count:int, sampleValues?:array<string>}, aggregatedRegions:array{name:string, count:int, sampleValues?:array<string>}, aggregatedOrganizationalUnits?:array{name:string, count:int, sampleValues?:array<string>}, additionalSummarizationDimensions?:array<array{name:string, count:int, sampleValues?:array<string>}>}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, textParts:array<string, array{type:"LOCALIZED_TEXT"|"PLAIN_TEXT"|"URL", displayText?:string, textByLocale?:array<"de_DE"|"en_CA"|"en_US"|"en_UK"|"es_ES"|"fr_CA"|"fr_FR"|"id_ID"|"it_IT"|"ja_JP"|"ko_KR"|"pt_BR"|"tr_TR"|"zh_CN"|"zh_TW", string>, url?:string}>, organizationalUnitId?:string}}>
     */
    public function getManagedNotificationEvent(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, locale?:"de_DE"|"en_CA"|"en_US"|"en_UK"|"es_ES"|"fr_CA"|"fr_FR"|"id_ID"|"it_IT"|"ja_JP"|"ko_KR"|"pt_BR"|"tr_TR"|"zh_CN"|"zh_TW"} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, managedNotificationConfigurationArn:string, creationTime:int|string|\DateTimeInterface, content:array{schemaVersion:"v1.0", id:string, messageComponents:array{headline?:string, paragraphSummary?:string, completeDescription?:string, dimensions?:array<array{name:string, value:string}>}, sourceEventDetailUrl?:string, sourceEventDetailUrlDisplayText?:string, notificationType:"ALERT"|"WARNING"|"ANNOUNCEMENT"|"INFORMATIONAL", eventStatus?:"HEALTHY"|"UNHEALTHY", aggregationEventType?:"AGGREGATE"|"CHILD"|"NONE", aggregationSummary?:array{eventCount:int, aggregatedBy:array<array{name:string, value:string}>, aggregatedAccounts:array{name:string, count:int, sampleValues?:array<string>}, aggregatedRegions:array{name:string, count:int, sampleValues?:array<string>}, aggregatedOrganizationalUnits?:array{name:string, count:int, sampleValues?:array<string>}, additionalSummarizationDimensions?:array<array{name:string, count:int, sampleValues?:array<string>}>}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, textParts:array<string, array{type:"LOCALIZED_TEXT"|"PLAIN_TEXT"|"URL", displayText?:string, textByLocale?:array<"de_DE"|"en_CA"|"en_US"|"en_UK"|"es_ES"|"fr_CA"|"fr_FR"|"id_ID"|"it_IT"|"ja_JP"|"ko_KR"|"pt_BR"|"tr_TR"|"zh_CN"|"zh_TW", string>, url?:string}>, organizationalUnitId?:string}}>
     */
    public function getManagedNotificationEventAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{arn:string, name:string, description:string, status:"ACTIVE"|"PARTIALLY_ACTIVE"|"INACTIVE"|"DELETING", creationTime:int|string|\DateTimeInterface, aggregationDuration?:"LONG"|"SHORT"|"NONE"}>
     */
    public function getNotificationConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, name:string, description:string, status:"ACTIVE"|"PARTIALLY_ACTIVE"|"INACTIVE"|"DELETING", creationTime:int|string|\DateTimeInterface, aggregationDuration?:"LONG"|"SHORT"|"NONE"}>
     */
    public function getNotificationConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, locale?:"de_DE"|"en_CA"|"en_US"|"en_UK"|"es_ES"|"fr_CA"|"fr_FR"|"id_ID"|"it_IT"|"ja_JP"|"ko_KR"|"pt_BR"|"tr_TR"|"zh_CN"|"zh_TW"} $args
     * @return \AWS\Result<array{arn:string, notificationConfigurationArn:string, creationTime:int|string|\DateTimeInterface, content:array{schemaVersion:"v1.0", id:string, sourceEventMetadata:array{eventTypeVersion:string, sourceEventId:string, eventOriginRegion?:string, relatedAccount:string, source:string, eventOccurrenceTime:int|string|\DateTimeInterface, eventType:string, relatedResources:array<array{id?:string, arn?:string, detailUrl?:string, tags?:array<string>}>}, messageComponents:array{headline?:string, paragraphSummary?:string, completeDescription?:string, dimensions?:array<array{name:string, value:string}>}, sourceEventDetailUrl?:string, sourceEventDetailUrlDisplayText?:string, notificationType:"ALERT"|"WARNING"|"ANNOUNCEMENT"|"INFORMATIONAL", eventStatus?:"HEALTHY"|"UNHEALTHY", aggregationEventType?:"AGGREGATE"|"CHILD"|"NONE", aggregateNotificationEventArn?:string, aggregationSummary?:array{eventCount:int, aggregatedBy:array<array{name:string, value:string}>, aggregatedAccounts:array{name:string, count:int, sampleValues?:array<string>}, aggregatedRegions:array{name:string, count:int, sampleValues?:array<string>}, aggregatedOrganizationalUnits?:array{name:string, count:int, sampleValues?:array<string>}, additionalSummarizationDimensions?:array<array{name:string, count:int, sampleValues?:array<string>}>}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, textParts:array<string, array{type:"LOCALIZED_TEXT"|"PLAIN_TEXT"|"URL", displayText?:string, textByLocale?:array<"de_DE"|"en_CA"|"en_US"|"en_UK"|"es_ES"|"fr_CA"|"fr_FR"|"id_ID"|"it_IT"|"ja_JP"|"ko_KR"|"pt_BR"|"tr_TR"|"zh_CN"|"zh_TW", string>, url?:string}>, media:array<array{mediaId:string, type:"IMAGE", url:string, caption:string}>}}>
     */
    public function getNotificationEvent(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, locale?:"de_DE"|"en_CA"|"en_US"|"en_UK"|"es_ES"|"fr_CA"|"fr_FR"|"id_ID"|"it_IT"|"ja_JP"|"ko_KR"|"pt_BR"|"tr_TR"|"zh_CN"|"zh_TW"} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, notificationConfigurationArn:string, creationTime:int|string|\DateTimeInterface, content:array{schemaVersion:"v1.0", id:string, sourceEventMetadata:array{eventTypeVersion:string, sourceEventId:string, eventOriginRegion?:string, relatedAccount:string, source:string, eventOccurrenceTime:int|string|\DateTimeInterface, eventType:string, relatedResources:array<array{id?:string, arn?:string, detailUrl?:string, tags?:array<string>}>}, messageComponents:array{headline?:string, paragraphSummary?:string, completeDescription?:string, dimensions?:array<array{name:string, value:string}>}, sourceEventDetailUrl?:string, sourceEventDetailUrlDisplayText?:string, notificationType:"ALERT"|"WARNING"|"ANNOUNCEMENT"|"INFORMATIONAL", eventStatus?:"HEALTHY"|"UNHEALTHY", aggregationEventType?:"AGGREGATE"|"CHILD"|"NONE", aggregateNotificationEventArn?:string, aggregationSummary?:array{eventCount:int, aggregatedBy:array<array{name:string, value:string}>, aggregatedAccounts:array{name:string, count:int, sampleValues?:array<string>}, aggregatedRegions:array{name:string, count:int, sampleValues?:array<string>}, aggregatedOrganizationalUnits?:array{name:string, count:int, sampleValues?:array<string>}, additionalSummarizationDimensions?:array<array{name:string, count:int, sampleValues?:array<string>}>}, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, textParts:array<string, array{type:"LOCALIZED_TEXT"|"PLAIN_TEXT"|"URL", displayText?:string, textByLocale?:array<"de_DE"|"en_CA"|"en_US"|"en_UK"|"es_ES"|"fr_CA"|"fr_FR"|"id_ID"|"it_IT"|"ja_JP"|"ko_KR"|"pt_BR"|"tr_TR"|"zh_CN"|"zh_TW", string>, url?:string}>, media:array<array{mediaId:string, type:"IMAGE", url:string, caption:string}>}}>
     */
    public function getNotificationEventAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{notificationsAccessForOrganization:array{accessStatus:"ENABLED"|"DISABLED"|"PENDING"}}>
     */
    public function getNotificationsAccessForOrganization(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{notificationsAccessForOrganization:array{accessStatus:"ENABLED"|"DISABLED"|"PENDING"}}>
     */
    public function getNotificationsAccessForOrganizationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{notificationConfigurationArn:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, channels:array<string>}>
     */
    public function listChannels(array $args): \AWS\Result { }

    /**
     * @param array{notificationConfigurationArn:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, channels:array<string>}>
     */
    public function listChannelsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{notificationConfigurationArn:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, eventRules:array<array{arn:string, notificationConfigurationArn:string, creationTime:int|string|\DateTimeInterface, source:string, eventType:string, eventPattern:string, regions:array<string>, managedRules:array<string>, statusSummaryByRegion:array<string, array{status:"ACTIVE"|"INACTIVE"|"CREATING"|"UPDATING"|"DELETING", reason:string}>}>}>
     */
    public function listEventRules(array $args): \AWS\Result { }

    /**
     * @param array{notificationConfigurationArn:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, eventRules:array<array{arn:string, notificationConfigurationArn:string, creationTime:int|string|\DateTimeInterface, source:string, eventType:string, eventPattern:string, regions:array<string>, managedRules:array<string>, statusSummaryByRegion:array<string, array{status:"ACTIVE"|"INACTIVE"|"CREATING"|"UPDATING"|"DELETING", reason:string}>}>}>
     */
    public function listEventRulesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{managedNotificationConfigurationArn:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, channelAssociations:array<array{channelIdentifier:string, channelType:"MOBILE"|"CHATBOT"|"EMAIL"|"ACCOUNT_CONTACT", overrideOption?:"ENABLED"|"DISABLED"}>}>
     */
    public function listManagedNotificationChannelAssociations(array $args): \AWS\Result { }

    /**
     * @param array{managedNotificationConfigurationArn:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, channelAssociations:array<array{channelIdentifier:string, channelType:"MOBILE"|"CHATBOT"|"EMAIL"|"ACCOUNT_CONTACT", overrideOption?:"ENABLED"|"DISABLED"}>}>
     */
    public function listManagedNotificationChannelAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{aggregateManagedNotificationEventArn:string, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, locale?:"de_DE"|"en_CA"|"en_US"|"en_UK"|"es_ES"|"fr_CA"|"fr_FR"|"id_ID"|"it_IT"|"ja_JP"|"ko_KR"|"pt_BR"|"tr_TR"|"zh_CN"|"zh_TW", maxResults?:int, relatedAccount?:string, organizationalUnitId?:string, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, managedNotificationChildEvents:array<array{arn:string, managedNotificationConfigurationArn:string, relatedAccount:string, creationTime:int|string|\DateTimeInterface, childEvent:array{schemaVersion:"v1.0", sourceEventMetadata:array{eventOriginRegion?:string, source:string, eventType:string}, messageComponents:array{headline:string}, aggregationDetail:array{summarizationDimensions?:array<array{name:string, value:string}>}, eventStatus:"HEALTHY"|"UNHEALTHY", notificationType:"ALERT"|"WARNING"|"ANNOUNCEMENT"|"INFORMATIONAL"}, aggregateManagedNotificationEventArn:string, organizationalUnitId?:string}>}>
     */
    public function listManagedNotificationChildEvents(array $args): \AWS\Result { }

    /**
     * @param array{aggregateManagedNotificationEventArn:string, startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, locale?:"de_DE"|"en_CA"|"en_US"|"en_UK"|"es_ES"|"fr_CA"|"fr_FR"|"id_ID"|"it_IT"|"ja_JP"|"ko_KR"|"pt_BR"|"tr_TR"|"zh_CN"|"zh_TW", maxResults?:int, relatedAccount?:string, organizationalUnitId?:string, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, managedNotificationChildEvents:array<array{arn:string, managedNotificationConfigurationArn:string, relatedAccount:string, creationTime:int|string|\DateTimeInterface, childEvent:array{schemaVersion:"v1.0", sourceEventMetadata:array{eventOriginRegion?:string, source:string, eventType:string}, messageComponents:array{headline:string}, aggregationDetail:array{summarizationDimensions?:array<array{name:string, value:string}>}, eventStatus:"HEALTHY"|"UNHEALTHY", notificationType:"ALERT"|"WARNING"|"ANNOUNCEMENT"|"INFORMATIONAL"}, aggregateManagedNotificationEventArn:string, organizationalUnitId?:string}>}>
     */
    public function listManagedNotificationChildEventsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{channelIdentifier?:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, managedNotificationConfigurations:array<array{arn:string, name:string, description:string}>}>
     */
    public function listManagedNotificationConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{channelIdentifier?:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, managedNotificationConfigurations:array<array{arn:string, name:string, description:string}>}>
     */
    public function listManagedNotificationConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, locale?:"de_DE"|"en_CA"|"en_US"|"en_UK"|"es_ES"|"fr_CA"|"fr_FR"|"id_ID"|"it_IT"|"ja_JP"|"ko_KR"|"pt_BR"|"tr_TR"|"zh_CN"|"zh_TW", source?:string, maxResults?:int, nextToken?:string, organizationalUnitId?:string, relatedAccount?:string} $args
     * @return \AWS\Result<array{nextToken?:string, managedNotificationEvents:array<array{arn:string, managedNotificationConfigurationArn:string, relatedAccount:string, creationTime:int|string|\DateTimeInterface, notificationEvent:array{schemaVersion:"v1.0", sourceEventMetadata:array{eventOriginRegion?:string, source:string, eventType:string}, messageComponents:array{headline:string}, eventStatus:"HEALTHY"|"UNHEALTHY", notificationType:"ALERT"|"WARNING"|"ANNOUNCEMENT"|"INFORMATIONAL"}, aggregationEventType?:"AGGREGATE"|"CHILD"|"NONE", organizationalUnitId?:string, aggregationSummary?:array{eventCount:int, aggregatedBy:array<array{name:string, value:string}>, aggregatedAccounts:array{name:string, count:int, sampleValues?:array<string>}, aggregatedRegions:array{name:string, count:int, sampleValues?:array<string>}, aggregatedOrganizationalUnits?:array{name:string, count:int, sampleValues?:array<string>}, additionalSummarizationDimensions?:array<array{name:string, count:int, sampleValues?:array<string>}>}, aggregatedNotificationRegions?:array<string>}>}>
     */
    public function listManagedNotificationEvents(array $args = []): \AWS\Result { }

    /**
     * @param array{startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, locale?:"de_DE"|"en_CA"|"en_US"|"en_UK"|"es_ES"|"fr_CA"|"fr_FR"|"id_ID"|"it_IT"|"ja_JP"|"ko_KR"|"pt_BR"|"tr_TR"|"zh_CN"|"zh_TW", source?:string, maxResults?:int, nextToken?:string, organizationalUnitId?:string, relatedAccount?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, managedNotificationEvents:array<array{arn:string, managedNotificationConfigurationArn:string, relatedAccount:string, creationTime:int|string|\DateTimeInterface, notificationEvent:array{schemaVersion:"v1.0", sourceEventMetadata:array{eventOriginRegion?:string, source:string, eventType:string}, messageComponents:array{headline:string}, eventStatus:"HEALTHY"|"UNHEALTHY", notificationType:"ALERT"|"WARNING"|"ANNOUNCEMENT"|"INFORMATIONAL"}, aggregationEventType?:"AGGREGATE"|"CHILD"|"NONE", organizationalUnitId?:string, aggregationSummary?:array{eventCount:int, aggregatedBy:array<array{name:string, value:string}>, aggregatedAccounts:array{name:string, count:int, sampleValues?:array<string>}, aggregatedRegions:array{name:string, count:int, sampleValues?:array<string>}, aggregatedOrganizationalUnits?:array{name:string, count:int, sampleValues?:array<string>}, additionalSummarizationDimensions?:array<array{name:string, count:int, sampleValues?:array<string>}>}, aggregatedNotificationRegions?:array<string>}>}>
     */
    public function listManagedNotificationEventsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{eventRuleSource?:string, channelArn?:string, status?:"ACTIVE"|"PARTIALLY_ACTIVE"|"INACTIVE"|"DELETING", maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, notificationConfigurations:array<array{arn:string, name:string, description:string, status:"ACTIVE"|"PARTIALLY_ACTIVE"|"INACTIVE"|"DELETING", creationTime:int|string|\DateTimeInterface, aggregationDuration?:"LONG"|"SHORT"|"NONE"}>}>
     */
    public function listNotificationConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{eventRuleSource?:string, channelArn?:string, status?:"ACTIVE"|"PARTIALLY_ACTIVE"|"INACTIVE"|"DELETING", maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, notificationConfigurations:array<array{arn:string, name:string, description:string, status:"ACTIVE"|"PARTIALLY_ACTIVE"|"INACTIVE"|"DELETING", creationTime:int|string|\DateTimeInterface, aggregationDuration?:"LONG"|"SHORT"|"NONE"}>}>
     */
    public function listNotificationConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, locale?:"de_DE"|"en_CA"|"en_US"|"en_UK"|"es_ES"|"fr_CA"|"fr_FR"|"id_ID"|"it_IT"|"ja_JP"|"ko_KR"|"pt_BR"|"tr_TR"|"zh_CN"|"zh_TW", source?:string, includeChildEvents?:bool, aggregateNotificationEventArn?:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, notificationEvents:array<array{arn:string, notificationConfigurationArn:string, relatedAccount:string, creationTime:int|string|\DateTimeInterface, notificationEvent:array{schemaVersion:"v1.0", sourceEventMetadata:array{eventOriginRegion?:string, source:string, eventType:string}, messageComponents:array{headline:string}, eventStatus:"HEALTHY"|"UNHEALTHY", notificationType:"ALERT"|"WARNING"|"ANNOUNCEMENT"|"INFORMATIONAL"}, aggregationEventType?:"AGGREGATE"|"CHILD"|"NONE", aggregateNotificationEventArn?:string, aggregationSummary?:array{eventCount:int, aggregatedBy:array<array{name:string, value:string}>, aggregatedAccounts:array{name:string, count:int, sampleValues?:array<string>}, aggregatedRegions:array{name:string, count:int, sampleValues?:array<string>}, aggregatedOrganizationalUnits?:array{name:string, count:int, sampleValues?:array<string>}, additionalSummarizationDimensions?:array<array{name:string, count:int, sampleValues?:array<string>}>}}>}>
     */
    public function listNotificationEvents(array $args = []): \AWS\Result { }

    /**
     * @param array{startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, locale?:"de_DE"|"en_CA"|"en_US"|"en_UK"|"es_ES"|"fr_CA"|"fr_FR"|"id_ID"|"it_IT"|"ja_JP"|"ko_KR"|"pt_BR"|"tr_TR"|"zh_CN"|"zh_TW", source?:string, includeChildEvents?:bool, aggregateNotificationEventArn?:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, notificationEvents:array<array{arn:string, notificationConfigurationArn:string, relatedAccount:string, creationTime:int|string|\DateTimeInterface, notificationEvent:array{schemaVersion:"v1.0", sourceEventMetadata:array{eventOriginRegion?:string, source:string, eventType:string}, messageComponents:array{headline:string}, eventStatus:"HEALTHY"|"UNHEALTHY", notificationType:"ALERT"|"WARNING"|"ANNOUNCEMENT"|"INFORMATIONAL"}, aggregationEventType?:"AGGREGATE"|"CHILD"|"NONE", aggregateNotificationEventArn?:string, aggregationSummary?:array{eventCount:int, aggregatedBy:array<array{name:string, value:string}>, aggregatedAccounts:array{name:string, count:int, sampleValues?:array<string>}, aggregatedRegions:array{name:string, count:int, sampleValues?:array<string>}, aggregatedOrganizationalUnits?:array{name:string, count:int, sampleValues?:array<string>}, additionalSummarizationDimensions?:array<array{name:string, count:int, sampleValues?:array<string>}>}}>}>
     */
    public function listNotificationEventsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{notificationHubs:array<array{notificationHubRegion:string, statusSummary:array{status:"ACTIVE"|"REGISTERING"|"DEREGISTERING"|"INACTIVE", reason:string}, creationTime:int|string|\DateTimeInterface, lastActivationTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listNotificationHubs(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{notificationHubs:array<array{notificationHubRegion:string, statusSummary:array{status:"ACTIVE"|"REGISTERING"|"DEREGISTERING"|"INACTIVE", reason:string}, creationTime:int|string|\DateTimeInterface, lastActivationTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listNotificationHubsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{tags?:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{notificationHubRegion:string} $args
     * @return \AWS\Result<array{notificationHubRegion:string, statusSummary:array{status:"ACTIVE"|"REGISTERING"|"DEREGISTERING"|"INACTIVE", reason:string}, creationTime:int|string|\DateTimeInterface, lastActivationTime?:int|string|\DateTimeInterface}>
     */
    public function registerNotificationHub(array $args): \AWS\Result { }

    /**
     * @param array{notificationHubRegion:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{notificationHubRegion:string, statusSummary:array{status:"ACTIVE"|"REGISTERING"|"DEREGISTERING"|"INACTIVE", reason:string}, creationTime:int|string|\DateTimeInterface, lastActivationTime?:int|string|\DateTimeInterface}>
     */
    public function registerNotificationHubAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, tags:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, tagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, tagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, eventPattern?:string, regions?:array<string>} $args
     * @return \AWS\Result<array{arn:string, notificationConfigurationArn:string, statusSummaryByRegion:array<string, array{status:"ACTIVE"|"INACTIVE"|"CREATING"|"UPDATING"|"DELETING", reason:string}>}>
     */
    public function updateEventRule(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, eventPattern?:string, regions?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, notificationConfigurationArn:string, statusSummaryByRegion:array<string, array{status:"ACTIVE"|"INACTIVE"|"CREATING"|"UPDATING"|"DELETING", reason:string}>}>
     */
    public function updateEventRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, name?:string, description?:string, aggregationDuration?:"LONG"|"SHORT"|"NONE"} $args
     * @return \AWS\Result<array{arn:string}>
     */
    public function updateNotificationConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, name?:string, description?:string, aggregationDuration?:"LONG"|"SHORT"|"NONE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string}>
     */
    public function updateNotificationConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
