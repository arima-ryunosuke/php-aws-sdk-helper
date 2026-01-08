<?php
namespace AWS\PinpointEmail;

class PinpointEmailClient
{
    /**
     * @param array{ConfigurationSetName:string, TrackingOptions?:array{CustomRedirectDomain:string}, DeliveryOptions?:array{TlsPolicy?:"REQUIRE"|"OPTIONAL", SendingPoolName?:string}, ReputationOptions?:array{ReputationMetricsEnabled?:bool, LastFreshStart?:int|string|\DateTimeInterface}, SendingOptions?:array{SendingEnabled?:bool}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function createConfigurationSet(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string, TrackingOptions?:array{CustomRedirectDomain:string}, DeliveryOptions?:array{TlsPolicy?:"REQUIRE"|"OPTIONAL", SendingPoolName?:string}, ReputationOptions?:array{ReputationMetricsEnabled?:bool, LastFreshStart?:int|string|\DateTimeInterface}, SendingOptions?:array{SendingEnabled?:bool}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createConfigurationSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string, EventDestinationName:string, EventDestination:array{Enabled?:bool, MatchingEventTypes?:array<"SEND"|"REJECT"|"BOUNCE"|"COMPLAINT"|"DELIVERY"|"OPEN"|"CLICK"|"RENDERING_FAILURE">, KinesisFirehoseDestination?:array{IamRoleArn:string, DeliveryStreamArn:string}, CloudWatchDestination?:array{DimensionConfigurations:array<array{DimensionName:string, DimensionValueSource:"MESSAGE_TAG"|"EMAIL_HEADER"|"LINK_TAG", DefaultDimensionValue:string}>}, SnsDestination?:array{TopicArn:string}, PinpointDestination?:array{ApplicationArn?:string}}} $args
     * @return \AWS\Result<array{}>
     */
    public function createConfigurationSetEventDestination(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string, EventDestinationName:string, EventDestination:array{Enabled?:bool, MatchingEventTypes?:array<"SEND"|"REJECT"|"BOUNCE"|"COMPLAINT"|"DELIVERY"|"OPEN"|"CLICK"|"RENDERING_FAILURE">, KinesisFirehoseDestination?:array{IamRoleArn:string, DeliveryStreamArn:string}, CloudWatchDestination?:array{DimensionConfigurations:array<array{DimensionName:string, DimensionValueSource:"MESSAGE_TAG"|"EMAIL_HEADER"|"LINK_TAG", DefaultDimensionValue:string}>}, SnsDestination?:array{TopicArn:string}, PinpointDestination?:array{ApplicationArn?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createConfigurationSetEventDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PoolName:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function createDedicatedIpPool(array $args): \AWS\Result { }

    /**
     * @param array{PoolName:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createDedicatedIpPoolAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ReportName?:string, FromEmailAddress:string, Content:array{Simple?:array{Subject:array{Data:string, Charset?:string}, Body:array{Text?:array{Data:string, Charset?:string}, Html?:array{Data:string, Charset?:string}}}, Raw?:array{Data:string|resource|\Psr\Http\Message\StreamInterface}, Template?:array{TemplateArn?:string, TemplateData?:string}}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{ReportId:string, DeliverabilityTestStatus:"IN_PROGRESS"|"COMPLETED"}>
     */
    public function createDeliverabilityTestReport(array $args): \AWS\Result { }

    /**
     * @param array{ReportName?:string, FromEmailAddress:string, Content:array{Simple?:array{Subject:array{Data:string, Charset?:string}, Body:array{Text?:array{Data:string, Charset?:string}, Html?:array{Data:string, Charset?:string}}}, Raw?:array{Data:string|resource|\Psr\Http\Message\StreamInterface}, Template?:array{TemplateArn?:string, TemplateData?:string}}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReportId:string, DeliverabilityTestStatus:"IN_PROGRESS"|"COMPLETED"}>
     */
    public function createDeliverabilityTestReportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EmailIdentity:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{IdentityType?:"EMAIL_ADDRESS"|"DOMAIN"|"MANAGED_DOMAIN", VerifiedForSendingStatus?:bool, DkimAttributes?:array{SigningEnabled?:bool, Status?:"PENDING"|"SUCCESS"|"FAILED"|"TEMPORARY_FAILURE"|"NOT_STARTED", Tokens?:array<string>}}>
     */
    public function createEmailIdentity(array $args): \AWS\Result { }

    /**
     * @param array{EmailIdentity:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityType?:"EMAIL_ADDRESS"|"DOMAIN"|"MANAGED_DOMAIN", VerifiedForSendingStatus?:bool, DkimAttributes?:array{SigningEnabled?:bool, Status?:"PENDING"|"SUCCESS"|"FAILED"|"TEMPORARY_FAILURE"|"NOT_STARTED", Tokens?:array<string>}}>
     */
    public function createEmailIdentityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteConfigurationSet(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteConfigurationSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string, EventDestinationName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteConfigurationSetEventDestination(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string, EventDestinationName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteConfigurationSetEventDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PoolName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteDedicatedIpPool(array $args): \AWS\Result { }

    /**
     * @param array{PoolName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteDedicatedIpPoolAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EmailIdentity:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteEmailIdentity(array $args): \AWS\Result { }

    /**
     * @param array{EmailIdentity:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteEmailIdentityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{SendQuota?:array{Max24HourSend?:float, MaxSendRate?:float, SentLast24Hours?:float}, SendingEnabled?:bool, DedicatedIpAutoWarmupEnabled?:bool, EnforcementStatus?:string, ProductionAccessEnabled?:bool}>
     */
    public function getAccount(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{SendQuota?:array{Max24HourSend?:float, MaxSendRate?:float, SentLast24Hours?:float}, SendingEnabled?:bool, DedicatedIpAutoWarmupEnabled?:bool, EnforcementStatus?:string, ProductionAccessEnabled?:bool}>
     */
    public function getAccountAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BlacklistItemNames:array<string>} $args
     * @return \AWS\Result<array{BlacklistReport:array<string, array<array{RblName?:string, ListingTime?:int|string|\DateTimeInterface, Description?:string}>>}>
     */
    public function getBlacklistReports(array $args): \AWS\Result { }

    /**
     * @param array{BlacklistItemNames:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{BlacklistReport:array<string, array<array{RblName?:string, ListingTime?:int|string|\DateTimeInterface, Description?:string}>>}>
     */
    public function getBlacklistReportsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string} $args
     * @return \AWS\Result<array{ConfigurationSetName?:string, TrackingOptions?:array{CustomRedirectDomain:string}, DeliveryOptions?:array{TlsPolicy?:"REQUIRE"|"OPTIONAL", SendingPoolName?:string}, ReputationOptions?:array{ReputationMetricsEnabled?:bool, LastFreshStart?:int|string|\DateTimeInterface}, SendingOptions?:array{SendingEnabled?:bool}, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function getConfigurationSet(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConfigurationSetName?:string, TrackingOptions?:array{CustomRedirectDomain:string}, DeliveryOptions?:array{TlsPolicy?:"REQUIRE"|"OPTIONAL", SendingPoolName?:string}, ReputationOptions?:array{ReputationMetricsEnabled?:bool, LastFreshStart?:int|string|\DateTimeInterface}, SendingOptions?:array{SendingEnabled?:bool}, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function getConfigurationSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string} $args
     * @return \AWS\Result<array{EventDestinations?:array<array{Name:string, Enabled?:bool, MatchingEventTypes:array<"SEND"|"REJECT"|"BOUNCE"|"COMPLAINT"|"DELIVERY"|"OPEN"|"CLICK"|"RENDERING_FAILURE">, KinesisFirehoseDestination?:array{IamRoleArn:string, DeliveryStreamArn:string}, CloudWatchDestination?:array{DimensionConfigurations:array<array{DimensionName:string, DimensionValueSource:"MESSAGE_TAG"|"EMAIL_HEADER"|"LINK_TAG", DefaultDimensionValue:string}>}, SnsDestination?:array{TopicArn:string}, PinpointDestination?:array{ApplicationArn?:string}}>}>
     */
    public function getConfigurationSetEventDestinations(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventDestinations?:array<array{Name:string, Enabled?:bool, MatchingEventTypes:array<"SEND"|"REJECT"|"BOUNCE"|"COMPLAINT"|"DELIVERY"|"OPEN"|"CLICK"|"RENDERING_FAILURE">, KinesisFirehoseDestination?:array{IamRoleArn:string, DeliveryStreamArn:string}, CloudWatchDestination?:array{DimensionConfigurations:array<array{DimensionName:string, DimensionValueSource:"MESSAGE_TAG"|"EMAIL_HEADER"|"LINK_TAG", DefaultDimensionValue:string}>}, SnsDestination?:array{TopicArn:string}, PinpointDestination?:array{ApplicationArn?:string}}>}>
     */
    public function getConfigurationSetEventDestinationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Ip:string} $args
     * @return \AWS\Result<array{DedicatedIp?:array{Ip:string, WarmupStatus:"IN_PROGRESS"|"DONE", WarmupPercentage:int, PoolName?:string}}>
     */
    public function getDedicatedIp(array $args): \AWS\Result { }

    /**
     * @param array{Ip:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DedicatedIp?:array{Ip:string, WarmupStatus:"IN_PROGRESS"|"DONE", WarmupPercentage:int, PoolName?:string}}>
     */
    public function getDedicatedIpAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PoolName?:string, NextToken?:string, PageSize?:int} $args
     * @return \AWS\Result<array{DedicatedIps?:array<array{Ip:string, WarmupStatus:"IN_PROGRESS"|"DONE", WarmupPercentage:int, PoolName?:string}>, NextToken?:string}>
     */
    public function getDedicatedIps(array $args = []): \AWS\Result { }

    /**
     * @param array{PoolName?:string, NextToken?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{DedicatedIps?:array<array{Ip:string, WarmupStatus:"IN_PROGRESS"|"DONE", WarmupPercentage:int, PoolName?:string}>, NextToken?:string}>
     */
    public function getDedicatedIpsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{DashboardEnabled:bool, SubscriptionExpiryDate?:int|string|\DateTimeInterface, AccountStatus?:"ACTIVE"|"PENDING_EXPIRATION"|"DISABLED", ActiveSubscribedDomains?:array<array{Domain?:string, SubscriptionStartDate?:int|string|\DateTimeInterface, InboxPlacementTrackingOption?:array{Global?:bool, TrackedIsps?:array<string>}}>, PendingExpirationSubscribedDomains?:array<array{Domain?:string, SubscriptionStartDate?:int|string|\DateTimeInterface, InboxPlacementTrackingOption?:array{Global?:bool, TrackedIsps?:array<string>}}>}>
     */
    public function getDeliverabilityDashboardOptions(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{DashboardEnabled:bool, SubscriptionExpiryDate?:int|string|\DateTimeInterface, AccountStatus?:"ACTIVE"|"PENDING_EXPIRATION"|"DISABLED", ActiveSubscribedDomains?:array<array{Domain?:string, SubscriptionStartDate?:int|string|\DateTimeInterface, InboxPlacementTrackingOption?:array{Global?:bool, TrackedIsps?:array<string>}}>, PendingExpirationSubscribedDomains?:array<array{Domain?:string, SubscriptionStartDate?:int|string|\DateTimeInterface, InboxPlacementTrackingOption?:array{Global?:bool, TrackedIsps?:array<string>}}>}>
     */
    public function getDeliverabilityDashboardOptionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ReportId:string} $args
     * @return \AWS\Result<array{DeliverabilityTestReport:array{ReportId?:string, ReportName?:string, Subject?:string, FromEmailAddress?:string, CreateDate?:int|string|\DateTimeInterface, DeliverabilityTestStatus?:"IN_PROGRESS"|"COMPLETED"}, OverallPlacement:array{InboxPercentage?:float, SpamPercentage?:float, MissingPercentage?:float, SpfPercentage?:float, DkimPercentage?:float}, IspPlacements:array<array{IspName?:string, PlacementStatistics?:array{InboxPercentage?:float, SpamPercentage?:float, MissingPercentage?:float, SpfPercentage?:float, DkimPercentage?:float}}>, Message?:string, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function getDeliverabilityTestReport(array $args): \AWS\Result { }

    /**
     * @param array{ReportId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DeliverabilityTestReport:array{ReportId?:string, ReportName?:string, Subject?:string, FromEmailAddress?:string, CreateDate?:int|string|\DateTimeInterface, DeliverabilityTestStatus?:"IN_PROGRESS"|"COMPLETED"}, OverallPlacement:array{InboxPercentage?:float, SpamPercentage?:float, MissingPercentage?:float, SpfPercentage?:float, DkimPercentage?:float}, IspPlacements:array<array{IspName?:string, PlacementStatistics?:array{InboxPercentage?:float, SpamPercentage?:float, MissingPercentage?:float, SpfPercentage?:float, DkimPercentage?:float}}>, Message?:string, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function getDeliverabilityTestReportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CampaignId:string} $args
     * @return \AWS\Result<array{DomainDeliverabilityCampaign:array{CampaignId?:string, ImageUrl?:string, Subject?:string, FromAddress?:string, SendingIps?:array<string>, FirstSeenDateTime?:int|string|\DateTimeInterface, LastSeenDateTime?:int|string|\DateTimeInterface, InboxCount?:int, SpamCount?:int, ReadRate?:float, DeleteRate?:float, ReadDeleteRate?:float, ProjectedVolume?:int, Esps?:array<string>}}>
     */
    public function getDomainDeliverabilityCampaign(array $args): \AWS\Result { }

    /**
     * @param array{CampaignId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DomainDeliverabilityCampaign:array{CampaignId?:string, ImageUrl?:string, Subject?:string, FromAddress?:string, SendingIps?:array<string>, FirstSeenDateTime?:int|string|\DateTimeInterface, LastSeenDateTime?:int|string|\DateTimeInterface, InboxCount?:int, SpamCount?:int, ReadRate?:float, DeleteRate?:float, ReadDeleteRate?:float, ProjectedVolume?:int, Esps?:array<string>}}>
     */
    public function getDomainDeliverabilityCampaignAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Domain:string, StartDate:int|string|\DateTimeInterface, EndDate:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{OverallVolume:array{VolumeStatistics?:array{InboxRawCount?:int, SpamRawCount?:int, ProjectedInbox?:int, ProjectedSpam?:int}, ReadRatePercent?:float, DomainIspPlacements?:array<array{IspName?:string, InboxRawCount?:int, SpamRawCount?:int, InboxPercentage?:float, SpamPercentage?:float}>}, DailyVolumes:array<array{StartDate?:int|string|\DateTimeInterface, VolumeStatistics?:array{InboxRawCount?:int, SpamRawCount?:int, ProjectedInbox?:int, ProjectedSpam?:int}, DomainIspPlacements?:array<array{IspName?:string, InboxRawCount?:int, SpamRawCount?:int, InboxPercentage?:float, SpamPercentage?:float}>}>}>
     */
    public function getDomainStatisticsReport(array $args): \AWS\Result { }

    /**
     * @param array{Domain:string, StartDate:int|string|\DateTimeInterface, EndDate:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{OverallVolume:array{VolumeStatistics?:array{InboxRawCount?:int, SpamRawCount?:int, ProjectedInbox?:int, ProjectedSpam?:int}, ReadRatePercent?:float, DomainIspPlacements?:array<array{IspName?:string, InboxRawCount?:int, SpamRawCount?:int, InboxPercentage?:float, SpamPercentage?:float}>}, DailyVolumes:array<array{StartDate?:int|string|\DateTimeInterface, VolumeStatistics?:array{InboxRawCount?:int, SpamRawCount?:int, ProjectedInbox?:int, ProjectedSpam?:int}, DomainIspPlacements?:array<array{IspName?:string, InboxRawCount?:int, SpamRawCount?:int, InboxPercentage?:float, SpamPercentage?:float}>}>}>
     */
    public function getDomainStatisticsReportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EmailIdentity:string} $args
     * @return \AWS\Result<array{IdentityType?:"EMAIL_ADDRESS"|"DOMAIN"|"MANAGED_DOMAIN", FeedbackForwardingStatus?:bool, VerifiedForSendingStatus?:bool, DkimAttributes?:array{SigningEnabled?:bool, Status?:"PENDING"|"SUCCESS"|"FAILED"|"TEMPORARY_FAILURE"|"NOT_STARTED", Tokens?:array<string>}, MailFromAttributes?:array{MailFromDomain:string, MailFromDomainStatus:"PENDING"|"SUCCESS"|"FAILED"|"TEMPORARY_FAILURE", BehaviorOnMxFailure:"USE_DEFAULT_VALUE"|"REJECT_MESSAGE"}, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function getEmailIdentity(array $args): \AWS\Result { }

    /**
     * @param array{EmailIdentity:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityType?:"EMAIL_ADDRESS"|"DOMAIN"|"MANAGED_DOMAIN", FeedbackForwardingStatus?:bool, VerifiedForSendingStatus?:bool, DkimAttributes?:array{SigningEnabled?:bool, Status?:"PENDING"|"SUCCESS"|"FAILED"|"TEMPORARY_FAILURE"|"NOT_STARTED", Tokens?:array<string>}, MailFromAttributes?:array{MailFromDomain:string, MailFromDomainStatus:"PENDING"|"SUCCESS"|"FAILED"|"TEMPORARY_FAILURE", BehaviorOnMxFailure:"USE_DEFAULT_VALUE"|"REJECT_MESSAGE"}, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function getEmailIdentityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, PageSize?:int} $args
     * @return \AWS\Result<array{ConfigurationSets?:array<string>, NextToken?:string}>
     */
    public function listConfigurationSets(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConfigurationSets?:array<string>, NextToken?:string}>
     */
    public function listConfigurationSetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, PageSize?:int} $args
     * @return \AWS\Result<array{DedicatedIpPools?:array<string>, NextToken?:string}>
     */
    public function listDedicatedIpPools(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{DedicatedIpPools?:array<string>, NextToken?:string}>
     */
    public function listDedicatedIpPoolsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, PageSize?:int} $args
     * @return \AWS\Result<array{DeliverabilityTestReports:array<array{ReportId?:string, ReportName?:string, Subject?:string, FromEmailAddress?:string, CreateDate?:int|string|\DateTimeInterface, DeliverabilityTestStatus?:"IN_PROGRESS"|"COMPLETED"}>, NextToken?:string}>
     */
    public function listDeliverabilityTestReports(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{DeliverabilityTestReports:array<array{ReportId?:string, ReportName?:string, Subject?:string, FromEmailAddress?:string, CreateDate?:int|string|\DateTimeInterface, DeliverabilityTestStatus?:"IN_PROGRESS"|"COMPLETED"}>, NextToken?:string}>
     */
    public function listDeliverabilityTestReportsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{StartDate:int|string|\DateTimeInterface, EndDate:int|string|\DateTimeInterface, SubscribedDomain:string, NextToken?:string, PageSize?:int} $args
     * @return \AWS\Result<array{DomainDeliverabilityCampaigns:array<array{CampaignId?:string, ImageUrl?:string, Subject?:string, FromAddress?:string, SendingIps?:array<string>, FirstSeenDateTime?:int|string|\DateTimeInterface, LastSeenDateTime?:int|string|\DateTimeInterface, InboxCount?:int, SpamCount?:int, ReadRate?:float, DeleteRate?:float, ReadDeleteRate?:float, ProjectedVolume?:int, Esps?:array<string>}>, NextToken?:string}>
     */
    public function listDomainDeliverabilityCampaigns(array $args): \AWS\Result { }

    /**
     * @param array{StartDate:int|string|\DateTimeInterface, EndDate:int|string|\DateTimeInterface, SubscribedDomain:string, NextToken?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{DomainDeliverabilityCampaigns:array<array{CampaignId?:string, ImageUrl?:string, Subject?:string, FromAddress?:string, SendingIps?:array<string>, FirstSeenDateTime?:int|string|\DateTimeInterface, LastSeenDateTime?:int|string|\DateTimeInterface, InboxCount?:int, SpamCount?:int, ReadRate?:float, DeleteRate?:float, ReadDeleteRate?:float, ProjectedVolume?:int, Esps?:array<string>}>, NextToken?:string}>
     */
    public function listDomainDeliverabilityCampaignsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, PageSize?:int} $args
     * @return \AWS\Result<array{EmailIdentities?:array<array{IdentityType?:"EMAIL_ADDRESS"|"DOMAIN"|"MANAGED_DOMAIN", IdentityName?:string, SendingEnabled?:bool}>, NextToken?:string}>
     */
    public function listEmailIdentities(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{EmailIdentities?:array<array{IdentityType?:"EMAIL_ADDRESS"|"DOMAIN"|"MANAGED_DOMAIN", IdentityName?:string, SendingEnabled?:bool}>, NextToken?:string}>
     */
    public function listEmailIdentitiesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{Tags:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AutoWarmupEnabled?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function putAccountDedicatedIpWarmupAttributes(array $args = []): \AWS\Result { }

    /**
     * @param array{AutoWarmupEnabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putAccountDedicatedIpWarmupAttributesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SendingEnabled?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function putAccountSendingAttributes(array $args = []): \AWS\Result { }

    /**
     * @param array{SendingEnabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putAccountSendingAttributesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string, TlsPolicy?:"REQUIRE"|"OPTIONAL", SendingPoolName?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function putConfigurationSetDeliveryOptions(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string, TlsPolicy?:"REQUIRE"|"OPTIONAL", SendingPoolName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putConfigurationSetDeliveryOptionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string, ReputationMetricsEnabled?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function putConfigurationSetReputationOptions(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string, ReputationMetricsEnabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putConfigurationSetReputationOptionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string, SendingEnabled?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function putConfigurationSetSendingOptions(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string, SendingEnabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putConfigurationSetSendingOptionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string, CustomRedirectDomain?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function putConfigurationSetTrackingOptions(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string, CustomRedirectDomain?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putConfigurationSetTrackingOptionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Ip:string, DestinationPoolName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function putDedicatedIpInPool(array $args): \AWS\Result { }

    /**
     * @param array{Ip:string, DestinationPoolName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putDedicatedIpInPoolAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Ip:string, WarmupPercentage:int} $args
     * @return \AWS\Result<array{}>
     */
    public function putDedicatedIpWarmupAttributes(array $args): \AWS\Result { }

    /**
     * @param array{Ip:string, WarmupPercentage:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putDedicatedIpWarmupAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DashboardEnabled:bool, SubscribedDomains?:array<array{Domain?:string, SubscriptionStartDate?:int|string|\DateTimeInterface, InboxPlacementTrackingOption?:array{Global?:bool, TrackedIsps?:array<string>}}>} $args
     * @return \AWS\Result<array{}>
     */
    public function putDeliverabilityDashboardOption(array $args): \AWS\Result { }

    /**
     * @param array{DashboardEnabled:bool, SubscribedDomains?:array<array{Domain?:string, SubscriptionStartDate?:int|string|\DateTimeInterface, InboxPlacementTrackingOption?:array{Global?:bool, TrackedIsps?:array<string>}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putDeliverabilityDashboardOptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EmailIdentity:string, SigningEnabled?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function putEmailIdentityDkimAttributes(array $args): \AWS\Result { }

    /**
     * @param array{EmailIdentity:string, SigningEnabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putEmailIdentityDkimAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EmailIdentity:string, EmailForwardingEnabled?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function putEmailIdentityFeedbackAttributes(array $args): \AWS\Result { }

    /**
     * @param array{EmailIdentity:string, EmailForwardingEnabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putEmailIdentityFeedbackAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EmailIdentity:string, MailFromDomain?:string, BehaviorOnMxFailure?:"USE_DEFAULT_VALUE"|"REJECT_MESSAGE"} $args
     * @return \AWS\Result<array{}>
     */
    public function putEmailIdentityMailFromAttributes(array $args): \AWS\Result { }

    /**
     * @param array{EmailIdentity:string, MailFromDomain?:string, BehaviorOnMxFailure?:"USE_DEFAULT_VALUE"|"REJECT_MESSAGE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putEmailIdentityMailFromAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FromEmailAddress?:string, Destination:array{ToAddresses?:array<string>, CcAddresses?:array<string>, BccAddresses?:array<string>}, ReplyToAddresses?:array<string>, FeedbackForwardingEmailAddress?:string, Content:array{Simple?:array{Subject:array{Data:string, Charset?:string}, Body:array{Text?:array{Data:string, Charset?:string}, Html?:array{Data:string, Charset?:string}}}, Raw?:array{Data:string|resource|\Psr\Http\Message\StreamInterface}, Template?:array{TemplateArn?:string, TemplateData?:string}}, EmailTags?:array<array{Name:string, Value:string}>, ConfigurationSetName?:string} $args
     * @return \AWS\Result<array{MessageId?:string}>
     */
    public function sendEmail(array $args): \AWS\Result { }

    /**
     * @param array{FromEmailAddress?:string, Destination:array{ToAddresses?:array<string>, CcAddresses?:array<string>, BccAddresses?:array<string>}, ReplyToAddresses?:array<string>, FeedbackForwardingEmailAddress?:string, Content:array{Simple?:array{Subject:array{Data:string, Charset?:string}, Body:array{Text?:array{Data:string, Charset?:string}, Html?:array{Data:string, Charset?:string}}}, Raw?:array{Data:string|resource|\Psr\Http\Message\StreamInterface}, Template?:array{TemplateArn?:string, TemplateData?:string}}, EmailTags?:array<array{Name:string, Value:string}>, ConfigurationSetName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MessageId?:string}>
     */
    public function sendEmailAsync(array $args): \GuzzleHttp\Promise\Promise { }

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

    /**
     * @param array{ConfigurationSetName:string, EventDestinationName:string, EventDestination:array{Enabled?:bool, MatchingEventTypes?:array<"SEND"|"REJECT"|"BOUNCE"|"COMPLAINT"|"DELIVERY"|"OPEN"|"CLICK"|"RENDERING_FAILURE">, KinesisFirehoseDestination?:array{IamRoleArn:string, DeliveryStreamArn:string}, CloudWatchDestination?:array{DimensionConfigurations:array<array{DimensionName:string, DimensionValueSource:"MESSAGE_TAG"|"EMAIL_HEADER"|"LINK_TAG", DefaultDimensionValue:string}>}, SnsDestination?:array{TopicArn:string}, PinpointDestination?:array{ApplicationArn?:string}}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateConfigurationSetEventDestination(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string, EventDestinationName:string, EventDestination:array{Enabled?:bool, MatchingEventTypes?:array<"SEND"|"REJECT"|"BOUNCE"|"COMPLAINT"|"DELIVERY"|"OPEN"|"CLICK"|"RENDERING_FAILURE">, KinesisFirehoseDestination?:array{IamRoleArn:string, DeliveryStreamArn:string}, CloudWatchDestination?:array{DimensionConfigurations:array<array{DimensionName:string, DimensionValueSource:"MESSAGE_TAG"|"EMAIL_HEADER"|"LINK_TAG", DefaultDimensionValue:string}>}, SnsDestination?:array{TopicArn:string}, PinpointDestination?:array{ApplicationArn?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateConfigurationSetEventDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
