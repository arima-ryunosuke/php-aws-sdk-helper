<?php
namespace AWS\SesV2;

class SesV2Client
{
    /**
     * @param array{Queries:array<array{Id:string, Namespace:"VDM", Metric:"SEND"|"COMPLAINT"|"PERMANENT_BOUNCE"|"TRANSIENT_BOUNCE"|"OPEN"|"CLICK"|"DELIVERY"|"DELIVERY_OPEN"|"DELIVERY_CLICK"|"DELIVERY_COMPLAINT", Dimensions?:array<"EMAIL_IDENTITY"|"CONFIGURATION_SET"|"ISP", string>, StartDate:int|string|\DateTimeInterface, EndDate:int|string|\DateTimeInterface}>} $args
     * @return \AWS\Result<array{Results?:array<array{Id?:string, Timestamps?:array<int|string|\DateTimeInterface>, Values?:array<int>}>, Errors?:array<array{Id?:string, Code?:"INTERNAL_FAILURE"|"ACCESS_DENIED", Message?:string}>}>
     */
    public function batchGetMetricData(array $args): \AWS\Result { }

    /**
     * @param array{Queries:array<array{Id:string, Namespace:"VDM", Metric:"SEND"|"COMPLAINT"|"PERMANENT_BOUNCE"|"TRANSIENT_BOUNCE"|"OPEN"|"CLICK"|"DELIVERY"|"DELIVERY_OPEN"|"DELIVERY_CLICK"|"DELIVERY_COMPLAINT", Dimensions?:array<"EMAIL_IDENTITY"|"CONFIGURATION_SET"|"ISP", string>, StartDate:int|string|\DateTimeInterface, EndDate:int|string|\DateTimeInterface}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Results?:array<array{Id?:string, Timestamps?:array<int|string|\DateTimeInterface>, Values?:array<int>}>, Errors?:array<array{Id?:string, Code?:"INTERNAL_FAILURE"|"ACCESS_DENIED", Message?:string}>}>
     */
    public function batchGetMetricDataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function cancelExportJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function cancelExportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string, TrackingOptions?:array{CustomRedirectDomain:string, HttpsPolicy?:"REQUIRE"|"REQUIRE_OPEN_ONLY"|"OPTIONAL"}, DeliveryOptions?:array{TlsPolicy?:"REQUIRE"|"OPTIONAL", SendingPoolName?:string, MaxDeliverySeconds?:int}, ReputationOptions?:array{ReputationMetricsEnabled?:bool, LastFreshStart?:int|string|\DateTimeInterface}, SendingOptions?:array{SendingEnabled?:bool}, Tags?:array<array{Key:string, Value:string}>, SuppressionOptions?:array{SuppressedReasons?:array<"BOUNCE"|"COMPLAINT">}, VdmOptions?:array{DashboardOptions?:array{EngagementMetrics?:"ENABLED"|"DISABLED"}, GuardianOptions?:array{OptimizedSharedDelivery?:"ENABLED"|"DISABLED"}}} $args
     * @return \AWS\Result<array{}>
     */
    public function createConfigurationSet(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string, TrackingOptions?:array{CustomRedirectDomain:string, HttpsPolicy?:"REQUIRE"|"REQUIRE_OPEN_ONLY"|"OPTIONAL"}, DeliveryOptions?:array{TlsPolicy?:"REQUIRE"|"OPTIONAL", SendingPoolName?:string, MaxDeliverySeconds?:int}, ReputationOptions?:array{ReputationMetricsEnabled?:bool, LastFreshStart?:int|string|\DateTimeInterface}, SendingOptions?:array{SendingEnabled?:bool}, Tags?:array<array{Key:string, Value:string}>, SuppressionOptions?:array{SuppressedReasons?:array<"BOUNCE"|"COMPLAINT">}, VdmOptions?:array{DashboardOptions?:array{EngagementMetrics?:"ENABLED"|"DISABLED"}, GuardianOptions?:array{OptimizedSharedDelivery?:"ENABLED"|"DISABLED"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createConfigurationSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string, EventDestinationName:string, EventDestination:array{Enabled?:bool, MatchingEventTypes?:array<"SEND"|"REJECT"|"BOUNCE"|"COMPLAINT"|"DELIVERY"|"OPEN"|"CLICK"|"RENDERING_FAILURE"|"DELIVERY_DELAY"|"SUBSCRIPTION">, KinesisFirehoseDestination?:array{IamRoleArn:string, DeliveryStreamArn:string}, CloudWatchDestination?:array{DimensionConfigurations:array<array{DimensionName:string, DimensionValueSource:"MESSAGE_TAG"|"EMAIL_HEADER"|"LINK_TAG", DefaultDimensionValue:string}>}, SnsDestination?:array{TopicArn:string}, EventBridgeDestination?:array{EventBusArn:string}, PinpointDestination?:array{ApplicationArn?:string}}} $args
     * @return \AWS\Result<array{}>
     */
    public function createConfigurationSetEventDestination(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string, EventDestinationName:string, EventDestination:array{Enabled?:bool, MatchingEventTypes?:array<"SEND"|"REJECT"|"BOUNCE"|"COMPLAINT"|"DELIVERY"|"OPEN"|"CLICK"|"RENDERING_FAILURE"|"DELIVERY_DELAY"|"SUBSCRIPTION">, KinesisFirehoseDestination?:array{IamRoleArn:string, DeliveryStreamArn:string}, CloudWatchDestination?:array{DimensionConfigurations:array<array{DimensionName:string, DimensionValueSource:"MESSAGE_TAG"|"EMAIL_HEADER"|"LINK_TAG", DefaultDimensionValue:string}>}, SnsDestination?:array{TopicArn:string}, EventBridgeDestination?:array{EventBusArn:string}, PinpointDestination?:array{ApplicationArn?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createConfigurationSetEventDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContactListName:string, EmailAddress:string, TopicPreferences?:array<array{TopicName:string, SubscriptionStatus:"OPT_IN"|"OPT_OUT"}>, UnsubscribeAll?:bool, AttributesData?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function createContact(array $args): \AWS\Result { }

    /**
     * @param array{ContactListName:string, EmailAddress:string, TopicPreferences?:array<array{TopicName:string, SubscriptionStatus:"OPT_IN"|"OPT_OUT"}>, UnsubscribeAll?:bool, AttributesData?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContactListName:string, Topics?:array<array{TopicName:string, DisplayName:string, Description?:string, DefaultSubscriptionStatus:"OPT_IN"|"OPT_OUT"}>, Description?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function createContactList(array $args): \AWS\Result { }

    /**
     * @param array{ContactListName:string, Topics?:array<array{TopicName:string, DisplayName:string, Description?:string, DefaultSubscriptionStatus:"OPT_IN"|"OPT_OUT"}>, Description?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createContactListAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TemplateName:string, FromEmailAddress:string, TemplateSubject:string, TemplateContent:string, SuccessRedirectionURL:string, FailureRedirectionURL:string} $args
     * @return \AWS\Result<array{}>
     */
    public function createCustomVerificationEmailTemplate(array $args): \AWS\Result { }

    /**
     * @param array{TemplateName:string, FromEmailAddress:string, TemplateSubject:string, TemplateContent:string, SuccessRedirectionURL:string, FailureRedirectionURL:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createCustomVerificationEmailTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PoolName:string, Tags?:array<array{Key:string, Value:string}>, ScalingMode?:"STANDARD"|"MANAGED"} $args
     * @return \AWS\Result<array{}>
     */
    public function createDedicatedIpPool(array $args): \AWS\Result { }

    /**
     * @param array{PoolName:string, Tags?:array<array{Key:string, Value:string}>, ScalingMode?:"STANDARD"|"MANAGED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createDedicatedIpPoolAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ReportName?:string, FromEmailAddress:string, Content:array{Simple?:array{Subject:array{Data:string, Charset?:string}, Body:array{Text?:array{Data:string, Charset?:string}, Html?:array{Data:string, Charset?:string}}, Headers?:array<array{Name:string, Value:string}>}, Raw?:array{Data:string|resource|\Psr\Http\Message\StreamInterface}, Template?:array{TemplateName?:string, TemplateArn?:string, TemplateContent?:array{Subject?:string, Text?:string, Html?:string}, TemplateData?:string, Headers?:array<array{Name:string, Value:string}>}}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{ReportId:string, DeliverabilityTestStatus:"IN_PROGRESS"|"COMPLETED"}>
     */
    public function createDeliverabilityTestReport(array $args): \AWS\Result { }

    /**
     * @param array{ReportName?:string, FromEmailAddress:string, Content:array{Simple?:array{Subject:array{Data:string, Charset?:string}, Body:array{Text?:array{Data:string, Charset?:string}, Html?:array{Data:string, Charset?:string}}, Headers?:array<array{Name:string, Value:string}>}, Raw?:array{Data:string|resource|\Psr\Http\Message\StreamInterface}, Template?:array{TemplateName?:string, TemplateArn?:string, TemplateContent?:array{Subject?:string, Text?:string, Html?:string}, TemplateData?:string, Headers?:array<array{Name:string, Value:string}>}}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReportId:string, DeliverabilityTestStatus:"IN_PROGRESS"|"COMPLETED"}>
     */
    public function createDeliverabilityTestReportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EmailIdentity:string, Tags?:array<array{Key:string, Value:string}>, DkimSigningAttributes?:array{DomainSigningSelector?:string, DomainSigningPrivateKey?:string, NextSigningKeyLength?:"RSA_1024_BIT"|"RSA_2048_BIT", DomainSigningAttributesOrigin?:"AWS_SES"|"EXTERNAL"|"AWS_SES_AF_SOUTH_1"|"AWS_SES_EU_NORTH_1"|"AWS_SES_AP_SOUTH_1"|"AWS_SES_EU_WEST_3"|"AWS_SES_EU_WEST_2"|"AWS_SES_EU_SOUTH_1"|"AWS_SES_EU_WEST_1"|"AWS_SES_AP_NORTHEAST_3"|"AWS_SES_AP_NORTHEAST_2"|"AWS_SES_ME_SOUTH_1"|"AWS_SES_AP_NORTHEAST_1"|"AWS_SES_IL_CENTRAL_1"|"AWS_SES_SA_EAST_1"|"AWS_SES_CA_CENTRAL_1"|"AWS_SES_AP_SOUTHEAST_1"|"AWS_SES_AP_SOUTHEAST_2"|"AWS_SES_AP_SOUTHEAST_3"|"AWS_SES_EU_CENTRAL_1"|"AWS_SES_US_EAST_1"|"AWS_SES_US_EAST_2"|"AWS_SES_US_WEST_1"|"AWS_SES_US_WEST_2"}, ConfigurationSetName?:string} $args
     * @return \AWS\Result<array{IdentityType?:"EMAIL_ADDRESS"|"DOMAIN"|"MANAGED_DOMAIN", VerifiedForSendingStatus?:bool, DkimAttributes?:array{SigningEnabled?:bool, Status?:"PENDING"|"SUCCESS"|"FAILED"|"TEMPORARY_FAILURE"|"NOT_STARTED", Tokens?:array<string>, SigningAttributesOrigin?:"AWS_SES"|"EXTERNAL"|"AWS_SES_AF_SOUTH_1"|"AWS_SES_EU_NORTH_1"|"AWS_SES_AP_SOUTH_1"|"AWS_SES_EU_WEST_3"|"AWS_SES_EU_WEST_2"|"AWS_SES_EU_SOUTH_1"|"AWS_SES_EU_WEST_1"|"AWS_SES_AP_NORTHEAST_3"|"AWS_SES_AP_NORTHEAST_2"|"AWS_SES_ME_SOUTH_1"|"AWS_SES_AP_NORTHEAST_1"|"AWS_SES_IL_CENTRAL_1"|"AWS_SES_SA_EAST_1"|"AWS_SES_CA_CENTRAL_1"|"AWS_SES_AP_SOUTHEAST_1"|"AWS_SES_AP_SOUTHEAST_2"|"AWS_SES_AP_SOUTHEAST_3"|"AWS_SES_EU_CENTRAL_1"|"AWS_SES_US_EAST_1"|"AWS_SES_US_EAST_2"|"AWS_SES_US_WEST_1"|"AWS_SES_US_WEST_2", NextSigningKeyLength?:"RSA_1024_BIT"|"RSA_2048_BIT", CurrentSigningKeyLength?:"RSA_1024_BIT"|"RSA_2048_BIT", LastKeyGenerationTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function createEmailIdentity(array $args): \AWS\Result { }

    /**
     * @param array{EmailIdentity:string, Tags?:array<array{Key:string, Value:string}>, DkimSigningAttributes?:array{DomainSigningSelector?:string, DomainSigningPrivateKey?:string, NextSigningKeyLength?:"RSA_1024_BIT"|"RSA_2048_BIT", DomainSigningAttributesOrigin?:"AWS_SES"|"EXTERNAL"|"AWS_SES_AF_SOUTH_1"|"AWS_SES_EU_NORTH_1"|"AWS_SES_AP_SOUTH_1"|"AWS_SES_EU_WEST_3"|"AWS_SES_EU_WEST_2"|"AWS_SES_EU_SOUTH_1"|"AWS_SES_EU_WEST_1"|"AWS_SES_AP_NORTHEAST_3"|"AWS_SES_AP_NORTHEAST_2"|"AWS_SES_ME_SOUTH_1"|"AWS_SES_AP_NORTHEAST_1"|"AWS_SES_IL_CENTRAL_1"|"AWS_SES_SA_EAST_1"|"AWS_SES_CA_CENTRAL_1"|"AWS_SES_AP_SOUTHEAST_1"|"AWS_SES_AP_SOUTHEAST_2"|"AWS_SES_AP_SOUTHEAST_3"|"AWS_SES_EU_CENTRAL_1"|"AWS_SES_US_EAST_1"|"AWS_SES_US_EAST_2"|"AWS_SES_US_WEST_1"|"AWS_SES_US_WEST_2"}, ConfigurationSetName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityType?:"EMAIL_ADDRESS"|"DOMAIN"|"MANAGED_DOMAIN", VerifiedForSendingStatus?:bool, DkimAttributes?:array{SigningEnabled?:bool, Status?:"PENDING"|"SUCCESS"|"FAILED"|"TEMPORARY_FAILURE"|"NOT_STARTED", Tokens?:array<string>, SigningAttributesOrigin?:"AWS_SES"|"EXTERNAL"|"AWS_SES_AF_SOUTH_1"|"AWS_SES_EU_NORTH_1"|"AWS_SES_AP_SOUTH_1"|"AWS_SES_EU_WEST_3"|"AWS_SES_EU_WEST_2"|"AWS_SES_EU_SOUTH_1"|"AWS_SES_EU_WEST_1"|"AWS_SES_AP_NORTHEAST_3"|"AWS_SES_AP_NORTHEAST_2"|"AWS_SES_ME_SOUTH_1"|"AWS_SES_AP_NORTHEAST_1"|"AWS_SES_IL_CENTRAL_1"|"AWS_SES_SA_EAST_1"|"AWS_SES_CA_CENTRAL_1"|"AWS_SES_AP_SOUTHEAST_1"|"AWS_SES_AP_SOUTHEAST_2"|"AWS_SES_AP_SOUTHEAST_3"|"AWS_SES_EU_CENTRAL_1"|"AWS_SES_US_EAST_1"|"AWS_SES_US_EAST_2"|"AWS_SES_US_WEST_1"|"AWS_SES_US_WEST_2", NextSigningKeyLength?:"RSA_1024_BIT"|"RSA_2048_BIT", CurrentSigningKeyLength?:"RSA_1024_BIT"|"RSA_2048_BIT", LastKeyGenerationTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function createEmailIdentityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EmailIdentity:string, PolicyName:string, Policy:string} $args
     * @return \AWS\Result<array{}>
     */
    public function createEmailIdentityPolicy(array $args): \AWS\Result { }

    /**
     * @param array{EmailIdentity:string, PolicyName:string, Policy:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createEmailIdentityPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TemplateName:string, TemplateContent:array{Subject?:string, Text?:string, Html?:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function createEmailTemplate(array $args): \AWS\Result { }

    /**
     * @param array{TemplateName:string, TemplateContent:array{Subject?:string, Text?:string, Html?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createEmailTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ExportDataSource:array{MetricsDataSource?:array{Dimensions:array<"EMAIL_IDENTITY"|"CONFIGURATION_SET"|"ISP", array<string>>, Namespace:"VDM", Metrics:array<array{Name?:"SEND"|"COMPLAINT"|"PERMANENT_BOUNCE"|"TRANSIENT_BOUNCE"|"OPEN"|"CLICK"|"DELIVERY"|"DELIVERY_OPEN"|"DELIVERY_CLICK"|"DELIVERY_COMPLAINT", Aggregation?:"RATE"|"VOLUME"}>, StartDate:int|string|\DateTimeInterface, EndDate:int|string|\DateTimeInterface}, MessageInsightsDataSource?:array{StartDate:int|string|\DateTimeInterface, EndDate:int|string|\DateTimeInterface, Include?:array{FromEmailAddress?:array<string>, Destination?:array<string>, Subject?:array<string>, Isp?:array<string>, LastDeliveryEvent?:array<"SEND"|"DELIVERY"|"TRANSIENT_BOUNCE"|"PERMANENT_BOUNCE"|"UNDETERMINED_BOUNCE"|"COMPLAINT">, LastEngagementEvent?:array<"OPEN"|"CLICK">}, Exclude?:array{FromEmailAddress?:array<string>, Destination?:array<string>, Subject?:array<string>, Isp?:array<string>, LastDeliveryEvent?:array<"SEND"|"DELIVERY"|"TRANSIENT_BOUNCE"|"PERMANENT_BOUNCE"|"UNDETERMINED_BOUNCE"|"COMPLAINT">, LastEngagementEvent?:array<"OPEN"|"CLICK">}, MaxResults?:int}}, ExportDestination:array{DataFormat:"CSV"|"JSON", S3Url?:string}} $args
     * @return \AWS\Result<array{JobId?:string}>
     */
    public function createExportJob(array $args): \AWS\Result { }

    /**
     * @param array{ExportDataSource:array{MetricsDataSource?:array{Dimensions:array<"EMAIL_IDENTITY"|"CONFIGURATION_SET"|"ISP", array<string>>, Namespace:"VDM", Metrics:array<array{Name?:"SEND"|"COMPLAINT"|"PERMANENT_BOUNCE"|"TRANSIENT_BOUNCE"|"OPEN"|"CLICK"|"DELIVERY"|"DELIVERY_OPEN"|"DELIVERY_CLICK"|"DELIVERY_COMPLAINT", Aggregation?:"RATE"|"VOLUME"}>, StartDate:int|string|\DateTimeInterface, EndDate:int|string|\DateTimeInterface}, MessageInsightsDataSource?:array{StartDate:int|string|\DateTimeInterface, EndDate:int|string|\DateTimeInterface, Include?:array{FromEmailAddress?:array<string>, Destination?:array<string>, Subject?:array<string>, Isp?:array<string>, LastDeliveryEvent?:array<"SEND"|"DELIVERY"|"TRANSIENT_BOUNCE"|"PERMANENT_BOUNCE"|"UNDETERMINED_BOUNCE"|"COMPLAINT">, LastEngagementEvent?:array<"OPEN"|"CLICK">}, Exclude?:array{FromEmailAddress?:array<string>, Destination?:array<string>, Subject?:array<string>, Isp?:array<string>, LastDeliveryEvent?:array<"SEND"|"DELIVERY"|"TRANSIENT_BOUNCE"|"PERMANENT_BOUNCE"|"UNDETERMINED_BOUNCE"|"COMPLAINT">, LastEngagementEvent?:array<"OPEN"|"CLICK">}, MaxResults?:int}}, ExportDestination:array{DataFormat:"CSV"|"JSON", S3Url?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string}>
     */
    public function createExportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ImportDestination:array{SuppressionListDestination?:array{SuppressionListImportAction:"DELETE"|"PUT"}, ContactListDestination?:array{ContactListName:string, ContactListImportAction:"DELETE"|"PUT"}}, ImportDataSource:array{S3Url:string, DataFormat:"CSV"|"JSON"}} $args
     * @return \AWS\Result<array{JobId?:string}>
     */
    public function createImportJob(array $args): \AWS\Result { }

    /**
     * @param array{ImportDestination:array{SuppressionListDestination?:array{SuppressionListImportAction:"DELETE"|"PUT"}, ContactListDestination?:array{ContactListName:string, ContactListImportAction:"DELETE"|"PUT"}}, ImportDataSource:array{S3Url:string, DataFormat:"CSV"|"JSON"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string}>
     */
    public function createImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EndpointName:string, Details:array{RoutesDetails:array<array{Region:string}>}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{Status?:"CREATING"|"READY"|"FAILED"|"DELETING", EndpointId?:string}>
     */
    public function createMultiRegionEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{EndpointName:string, Details:array{RoutesDetails:array<array{Region:string}>}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status?:"CREATING"|"READY"|"FAILED"|"DELETING", EndpointId?:string}>
     */
    public function createMultiRegionEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{ContactListName:string, EmailAddress:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteContact(array $args): \AWS\Result { }

    /**
     * @param array{ContactListName:string, EmailAddress:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContactListName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteContactList(array $args): \AWS\Result { }

    /**
     * @param array{ContactListName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteContactListAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TemplateName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteCustomVerificationEmailTemplate(array $args): \AWS\Result { }

    /**
     * @param array{TemplateName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteCustomVerificationEmailTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{EmailIdentity:string, PolicyName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteEmailIdentityPolicy(array $args): \AWS\Result { }

    /**
     * @param array{EmailIdentity:string, PolicyName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteEmailIdentityPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TemplateName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteEmailTemplate(array $args): \AWS\Result { }

    /**
     * @param array{TemplateName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteEmailTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EndpointName:string} $args
     * @return \AWS\Result<array{Status?:"CREATING"|"READY"|"FAILED"|"DELETING"}>
     */
    public function deleteMultiRegionEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{EndpointName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status?:"CREATING"|"READY"|"FAILED"|"DELETING"}>
     */
    public function deleteMultiRegionEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EmailAddress:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSuppressedDestination(array $args): \AWS\Result { }

    /**
     * @param array{EmailAddress:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteSuppressedDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{DedicatedIpAutoWarmupEnabled?:bool, EnforcementStatus?:string, ProductionAccessEnabled?:bool, SendQuota?:array{Max24HourSend?:float, MaxSendRate?:float, SentLast24Hours?:float}, SendingEnabled?:bool, SuppressionAttributes?:array{SuppressedReasons?:array<"BOUNCE"|"COMPLAINT">}, Details?:array{MailType?:"MARKETING"|"TRANSACTIONAL", WebsiteURL?:string, ContactLanguage?:"EN"|"JA", UseCaseDescription?:string, AdditionalContactEmailAddresses?:array<string>, ReviewDetails?:array{Status?:"PENDING"|"FAILED"|"GRANTED"|"DENIED", CaseId?:string}}, VdmAttributes?:array{VdmEnabled:"ENABLED"|"DISABLED", DashboardAttributes?:array{EngagementMetrics?:"ENABLED"|"DISABLED"}, GuardianAttributes?:array{OptimizedSharedDelivery?:"ENABLED"|"DISABLED"}}}>
     */
    public function getAccount(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{DedicatedIpAutoWarmupEnabled?:bool, EnforcementStatus?:string, ProductionAccessEnabled?:bool, SendQuota?:array{Max24HourSend?:float, MaxSendRate?:float, SentLast24Hours?:float}, SendingEnabled?:bool, SuppressionAttributes?:array{SuppressedReasons?:array<"BOUNCE"|"COMPLAINT">}, Details?:array{MailType?:"MARKETING"|"TRANSACTIONAL", WebsiteURL?:string, ContactLanguage?:"EN"|"JA", UseCaseDescription?:string, AdditionalContactEmailAddresses?:array<string>, ReviewDetails?:array{Status?:"PENDING"|"FAILED"|"GRANTED"|"DENIED", CaseId?:string}}, VdmAttributes?:array{VdmEnabled:"ENABLED"|"DISABLED", DashboardAttributes?:array{EngagementMetrics?:"ENABLED"|"DISABLED"}, GuardianAttributes?:array{OptimizedSharedDelivery?:"ENABLED"|"DISABLED"}}}>
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
     * @return \AWS\Result<array{ConfigurationSetName?:string, TrackingOptions?:array{CustomRedirectDomain:string, HttpsPolicy?:"REQUIRE"|"REQUIRE_OPEN_ONLY"|"OPTIONAL"}, DeliveryOptions?:array{TlsPolicy?:"REQUIRE"|"OPTIONAL", SendingPoolName?:string, MaxDeliverySeconds?:int}, ReputationOptions?:array{ReputationMetricsEnabled?:bool, LastFreshStart?:int|string|\DateTimeInterface}, SendingOptions?:array{SendingEnabled?:bool}, Tags?:array<array{Key:string, Value:string}>, SuppressionOptions?:array{SuppressedReasons?:array<"BOUNCE"|"COMPLAINT">}, VdmOptions?:array{DashboardOptions?:array{EngagementMetrics?:"ENABLED"|"DISABLED"}, GuardianOptions?:array{OptimizedSharedDelivery?:"ENABLED"|"DISABLED"}}}>
     */
    public function getConfigurationSet(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConfigurationSetName?:string, TrackingOptions?:array{CustomRedirectDomain:string, HttpsPolicy?:"REQUIRE"|"REQUIRE_OPEN_ONLY"|"OPTIONAL"}, DeliveryOptions?:array{TlsPolicy?:"REQUIRE"|"OPTIONAL", SendingPoolName?:string, MaxDeliverySeconds?:int}, ReputationOptions?:array{ReputationMetricsEnabled?:bool, LastFreshStart?:int|string|\DateTimeInterface}, SendingOptions?:array{SendingEnabled?:bool}, Tags?:array<array{Key:string, Value:string}>, SuppressionOptions?:array{SuppressedReasons?:array<"BOUNCE"|"COMPLAINT">}, VdmOptions?:array{DashboardOptions?:array{EngagementMetrics?:"ENABLED"|"DISABLED"}, GuardianOptions?:array{OptimizedSharedDelivery?:"ENABLED"|"DISABLED"}}}>
     */
    public function getConfigurationSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string} $args
     * @return \AWS\Result<array{EventDestinations?:array<array{Name:string, Enabled?:bool, MatchingEventTypes:array<"SEND"|"REJECT"|"BOUNCE"|"COMPLAINT"|"DELIVERY"|"OPEN"|"CLICK"|"RENDERING_FAILURE"|"DELIVERY_DELAY"|"SUBSCRIPTION">, KinesisFirehoseDestination?:array{IamRoleArn:string, DeliveryStreamArn:string}, CloudWatchDestination?:array{DimensionConfigurations:array<array{DimensionName:string, DimensionValueSource:"MESSAGE_TAG"|"EMAIL_HEADER"|"LINK_TAG", DefaultDimensionValue:string}>}, SnsDestination?:array{TopicArn:string}, EventBridgeDestination?:array{EventBusArn:string}, PinpointDestination?:array{ApplicationArn?:string}}>}>
     */
    public function getConfigurationSetEventDestinations(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventDestinations?:array<array{Name:string, Enabled?:bool, MatchingEventTypes:array<"SEND"|"REJECT"|"BOUNCE"|"COMPLAINT"|"DELIVERY"|"OPEN"|"CLICK"|"RENDERING_FAILURE"|"DELIVERY_DELAY"|"SUBSCRIPTION">, KinesisFirehoseDestination?:array{IamRoleArn:string, DeliveryStreamArn:string}, CloudWatchDestination?:array{DimensionConfigurations:array<array{DimensionName:string, DimensionValueSource:"MESSAGE_TAG"|"EMAIL_HEADER"|"LINK_TAG", DefaultDimensionValue:string}>}, SnsDestination?:array{TopicArn:string}, EventBridgeDestination?:array{EventBusArn:string}, PinpointDestination?:array{ApplicationArn?:string}}>}>
     */
    public function getConfigurationSetEventDestinationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContactListName:string, EmailAddress:string} $args
     * @return \AWS\Result<array{ContactListName?:string, EmailAddress?:string, TopicPreferences?:array<array{TopicName:string, SubscriptionStatus:"OPT_IN"|"OPT_OUT"}>, TopicDefaultPreferences?:array<array{TopicName:string, SubscriptionStatus:"OPT_IN"|"OPT_OUT"}>, UnsubscribeAll?:bool, AttributesData?:string, CreatedTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function getContact(array $args): \AWS\Result { }

    /**
     * @param array{ContactListName:string, EmailAddress:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContactListName?:string, EmailAddress?:string, TopicPreferences?:array<array{TopicName:string, SubscriptionStatus:"OPT_IN"|"OPT_OUT"}>, TopicDefaultPreferences?:array<array{TopicName:string, SubscriptionStatus:"OPT_IN"|"OPT_OUT"}>, UnsubscribeAll?:bool, AttributesData?:string, CreatedTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function getContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContactListName:string} $args
     * @return \AWS\Result<array{ContactListName?:string, Topics?:array<array{TopicName:string, DisplayName:string, Description?:string, DefaultSubscriptionStatus:"OPT_IN"|"OPT_OUT"}>, Description?:string, CreatedTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function getContactList(array $args): \AWS\Result { }

    /**
     * @param array{ContactListName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContactListName?:string, Topics?:array<array{TopicName:string, DisplayName:string, Description?:string, DefaultSubscriptionStatus:"OPT_IN"|"OPT_OUT"}>, Description?:string, CreatedTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function getContactListAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TemplateName:string} $args
     * @return \AWS\Result<array{TemplateName?:string, FromEmailAddress?:string, TemplateSubject?:string, TemplateContent?:string, SuccessRedirectionURL?:string, FailureRedirectionURL?:string}>
     */
    public function getCustomVerificationEmailTemplate(array $args): \AWS\Result { }

    /**
     * @param array{TemplateName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TemplateName?:string, FromEmailAddress?:string, TemplateSubject?:string, TemplateContent?:string, SuccessRedirectionURL?:string, FailureRedirectionURL?:string}>
     */
    public function getCustomVerificationEmailTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{PoolName:string} $args
     * @return \AWS\Result<array{DedicatedIpPool?:array{PoolName:string, ScalingMode:"STANDARD"|"MANAGED"}}>
     */
    public function getDedicatedIpPool(array $args): \AWS\Result { }

    /**
     * @param array{PoolName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DedicatedIpPool?:array{PoolName:string, ScalingMode:"STANDARD"|"MANAGED"}}>
     */
    public function getDedicatedIpPoolAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @return \AWS\Result<array{IdentityType?:"EMAIL_ADDRESS"|"DOMAIN"|"MANAGED_DOMAIN", FeedbackForwardingStatus?:bool, VerifiedForSendingStatus?:bool, DkimAttributes?:array{SigningEnabled?:bool, Status?:"PENDING"|"SUCCESS"|"FAILED"|"TEMPORARY_FAILURE"|"NOT_STARTED", Tokens?:array<string>, SigningAttributesOrigin?:"AWS_SES"|"EXTERNAL"|"AWS_SES_AF_SOUTH_1"|"AWS_SES_EU_NORTH_1"|"AWS_SES_AP_SOUTH_1"|"AWS_SES_EU_WEST_3"|"AWS_SES_EU_WEST_2"|"AWS_SES_EU_SOUTH_1"|"AWS_SES_EU_WEST_1"|"AWS_SES_AP_NORTHEAST_3"|"AWS_SES_AP_NORTHEAST_2"|"AWS_SES_ME_SOUTH_1"|"AWS_SES_AP_NORTHEAST_1"|"AWS_SES_IL_CENTRAL_1"|"AWS_SES_SA_EAST_1"|"AWS_SES_CA_CENTRAL_1"|"AWS_SES_AP_SOUTHEAST_1"|"AWS_SES_AP_SOUTHEAST_2"|"AWS_SES_AP_SOUTHEAST_3"|"AWS_SES_EU_CENTRAL_1"|"AWS_SES_US_EAST_1"|"AWS_SES_US_EAST_2"|"AWS_SES_US_WEST_1"|"AWS_SES_US_WEST_2", NextSigningKeyLength?:"RSA_1024_BIT"|"RSA_2048_BIT", CurrentSigningKeyLength?:"RSA_1024_BIT"|"RSA_2048_BIT", LastKeyGenerationTimestamp?:int|string|\DateTimeInterface}, MailFromAttributes?:array{MailFromDomain:string, MailFromDomainStatus:"PENDING"|"SUCCESS"|"FAILED"|"TEMPORARY_FAILURE", BehaviorOnMxFailure:"USE_DEFAULT_VALUE"|"REJECT_MESSAGE"}, Policies?:array<string, string>, Tags?:array<array{Key:string, Value:string}>, ConfigurationSetName?:string, VerificationStatus?:"PENDING"|"SUCCESS"|"FAILED"|"TEMPORARY_FAILURE"|"NOT_STARTED", VerificationInfo?:array{LastCheckedTimestamp?:int|string|\DateTimeInterface, LastSuccessTimestamp?:int|string|\DateTimeInterface, ErrorType?:"SERVICE_ERROR"|"DNS_SERVER_ERROR"|"HOST_NOT_FOUND"|"TYPE_NOT_FOUND"|"INVALID_VALUE"|"REPLICATION_ACCESS_DENIED"|"REPLICATION_PRIMARY_NOT_FOUND"|"REPLICATION_PRIMARY_BYO_DKIM_NOT_SUPPORTED"|"REPLICATION_REPLICA_AS_PRIMARY_NOT_SUPPORTED"|"REPLICATION_PRIMARY_INVALID_REGION", SOARecord?:array{PrimaryNameServer?:string, AdminEmail?:string, SerialNumber?:int}}}>
     */
    public function getEmailIdentity(array $args): \AWS\Result { }

    /**
     * @param array{EmailIdentity:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IdentityType?:"EMAIL_ADDRESS"|"DOMAIN"|"MANAGED_DOMAIN", FeedbackForwardingStatus?:bool, VerifiedForSendingStatus?:bool, DkimAttributes?:array{SigningEnabled?:bool, Status?:"PENDING"|"SUCCESS"|"FAILED"|"TEMPORARY_FAILURE"|"NOT_STARTED", Tokens?:array<string>, SigningAttributesOrigin?:"AWS_SES"|"EXTERNAL"|"AWS_SES_AF_SOUTH_1"|"AWS_SES_EU_NORTH_1"|"AWS_SES_AP_SOUTH_1"|"AWS_SES_EU_WEST_3"|"AWS_SES_EU_WEST_2"|"AWS_SES_EU_SOUTH_1"|"AWS_SES_EU_WEST_1"|"AWS_SES_AP_NORTHEAST_3"|"AWS_SES_AP_NORTHEAST_2"|"AWS_SES_ME_SOUTH_1"|"AWS_SES_AP_NORTHEAST_1"|"AWS_SES_IL_CENTRAL_1"|"AWS_SES_SA_EAST_1"|"AWS_SES_CA_CENTRAL_1"|"AWS_SES_AP_SOUTHEAST_1"|"AWS_SES_AP_SOUTHEAST_2"|"AWS_SES_AP_SOUTHEAST_3"|"AWS_SES_EU_CENTRAL_1"|"AWS_SES_US_EAST_1"|"AWS_SES_US_EAST_2"|"AWS_SES_US_WEST_1"|"AWS_SES_US_WEST_2", NextSigningKeyLength?:"RSA_1024_BIT"|"RSA_2048_BIT", CurrentSigningKeyLength?:"RSA_1024_BIT"|"RSA_2048_BIT", LastKeyGenerationTimestamp?:int|string|\DateTimeInterface}, MailFromAttributes?:array{MailFromDomain:string, MailFromDomainStatus:"PENDING"|"SUCCESS"|"FAILED"|"TEMPORARY_FAILURE", BehaviorOnMxFailure:"USE_DEFAULT_VALUE"|"REJECT_MESSAGE"}, Policies?:array<string, string>, Tags?:array<array{Key:string, Value:string}>, ConfigurationSetName?:string, VerificationStatus?:"PENDING"|"SUCCESS"|"FAILED"|"TEMPORARY_FAILURE"|"NOT_STARTED", VerificationInfo?:array{LastCheckedTimestamp?:int|string|\DateTimeInterface, LastSuccessTimestamp?:int|string|\DateTimeInterface, ErrorType?:"SERVICE_ERROR"|"DNS_SERVER_ERROR"|"HOST_NOT_FOUND"|"TYPE_NOT_FOUND"|"INVALID_VALUE"|"REPLICATION_ACCESS_DENIED"|"REPLICATION_PRIMARY_NOT_FOUND"|"REPLICATION_PRIMARY_BYO_DKIM_NOT_SUPPORTED"|"REPLICATION_REPLICA_AS_PRIMARY_NOT_SUPPORTED"|"REPLICATION_PRIMARY_INVALID_REGION", SOARecord?:array{PrimaryNameServer?:string, AdminEmail?:string, SerialNumber?:int}}}>
     */
    public function getEmailIdentityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EmailIdentity:string} $args
     * @return \AWS\Result<array{Policies?:array<string, string>}>
     */
    public function getEmailIdentityPolicies(array $args): \AWS\Result { }

    /**
     * @param array{EmailIdentity:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policies?:array<string, string>}>
     */
    public function getEmailIdentityPoliciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TemplateName:string} $args
     * @return \AWS\Result<array{TemplateName:string, TemplateContent:array{Subject?:string, Text?:string, Html?:string}}>
     */
    public function getEmailTemplate(array $args): \AWS\Result { }

    /**
     * @param array{TemplateName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TemplateName:string, TemplateContent:array{Subject?:string, Text?:string, Html?:string}}>
     */
    public function getEmailTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{JobId?:string, ExportSourceType?:"METRICS_DATA"|"MESSAGE_INSIGHTS", JobStatus?:"CREATED"|"PROCESSING"|"COMPLETED"|"FAILED"|"CANCELLED", ExportDestination?:array{DataFormat:"CSV"|"JSON", S3Url?:string}, ExportDataSource?:array{MetricsDataSource?:array{Dimensions:array<"EMAIL_IDENTITY"|"CONFIGURATION_SET"|"ISP", array<string>>, Namespace:"VDM", Metrics:array<array{Name?:"SEND"|"COMPLAINT"|"PERMANENT_BOUNCE"|"TRANSIENT_BOUNCE"|"OPEN"|"CLICK"|"DELIVERY"|"DELIVERY_OPEN"|"DELIVERY_CLICK"|"DELIVERY_COMPLAINT", Aggregation?:"RATE"|"VOLUME"}>, StartDate:int|string|\DateTimeInterface, EndDate:int|string|\DateTimeInterface}, MessageInsightsDataSource?:array{StartDate:int|string|\DateTimeInterface, EndDate:int|string|\DateTimeInterface, Include?:array{FromEmailAddress?:array<string>, Destination?:array<string>, Subject?:array<string>, Isp?:array<string>, LastDeliveryEvent?:array<"SEND"|"DELIVERY"|"TRANSIENT_BOUNCE"|"PERMANENT_BOUNCE"|"UNDETERMINED_BOUNCE"|"COMPLAINT">, LastEngagementEvent?:array<"OPEN"|"CLICK">}, Exclude?:array{FromEmailAddress?:array<string>, Destination?:array<string>, Subject?:array<string>, Isp?:array<string>, LastDeliveryEvent?:array<"SEND"|"DELIVERY"|"TRANSIENT_BOUNCE"|"PERMANENT_BOUNCE"|"UNDETERMINED_BOUNCE"|"COMPLAINT">, LastEngagementEvent?:array<"OPEN"|"CLICK">}, MaxResults?:int}}, CreatedTimestamp?:int|string|\DateTimeInterface, CompletedTimestamp?:int|string|\DateTimeInterface, FailureInfo?:array{FailedRecordsS3Url?:string, ErrorMessage?:string}, Statistics?:array{ProcessedRecordsCount?:int, ExportedRecordsCount?:int}}>
     */
    public function getExportJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string, ExportSourceType?:"METRICS_DATA"|"MESSAGE_INSIGHTS", JobStatus?:"CREATED"|"PROCESSING"|"COMPLETED"|"FAILED"|"CANCELLED", ExportDestination?:array{DataFormat:"CSV"|"JSON", S3Url?:string}, ExportDataSource?:array{MetricsDataSource?:array{Dimensions:array<"EMAIL_IDENTITY"|"CONFIGURATION_SET"|"ISP", array<string>>, Namespace:"VDM", Metrics:array<array{Name?:"SEND"|"COMPLAINT"|"PERMANENT_BOUNCE"|"TRANSIENT_BOUNCE"|"OPEN"|"CLICK"|"DELIVERY"|"DELIVERY_OPEN"|"DELIVERY_CLICK"|"DELIVERY_COMPLAINT", Aggregation?:"RATE"|"VOLUME"}>, StartDate:int|string|\DateTimeInterface, EndDate:int|string|\DateTimeInterface}, MessageInsightsDataSource?:array{StartDate:int|string|\DateTimeInterface, EndDate:int|string|\DateTimeInterface, Include?:array{FromEmailAddress?:array<string>, Destination?:array<string>, Subject?:array<string>, Isp?:array<string>, LastDeliveryEvent?:array<"SEND"|"DELIVERY"|"TRANSIENT_BOUNCE"|"PERMANENT_BOUNCE"|"UNDETERMINED_BOUNCE"|"COMPLAINT">, LastEngagementEvent?:array<"OPEN"|"CLICK">}, Exclude?:array{FromEmailAddress?:array<string>, Destination?:array<string>, Subject?:array<string>, Isp?:array<string>, LastDeliveryEvent?:array<"SEND"|"DELIVERY"|"TRANSIENT_BOUNCE"|"PERMANENT_BOUNCE"|"UNDETERMINED_BOUNCE"|"COMPLAINT">, LastEngagementEvent?:array<"OPEN"|"CLICK">}, MaxResults?:int}}, CreatedTimestamp?:int|string|\DateTimeInterface, CompletedTimestamp?:int|string|\DateTimeInterface, FailureInfo?:array{FailedRecordsS3Url?:string, ErrorMessage?:string}, Statistics?:array{ProcessedRecordsCount?:int, ExportedRecordsCount?:int}}>
     */
    public function getExportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{JobId:string} $args
     * @return \AWS\Result<array{JobId?:string, ImportDestination?:array{SuppressionListDestination?:array{SuppressionListImportAction:"DELETE"|"PUT"}, ContactListDestination?:array{ContactListName:string, ContactListImportAction:"DELETE"|"PUT"}}, ImportDataSource?:array{S3Url:string, DataFormat:"CSV"|"JSON"}, FailureInfo?:array{FailedRecordsS3Url?:string, ErrorMessage?:string}, JobStatus?:"CREATED"|"PROCESSING"|"COMPLETED"|"FAILED"|"CANCELLED", CreatedTimestamp?:int|string|\DateTimeInterface, CompletedTimestamp?:int|string|\DateTimeInterface, ProcessedRecordsCount?:int, FailedRecordsCount?:int}>
     */
    public function getImportJob(array $args): \AWS\Result { }

    /**
     * @param array{JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string, ImportDestination?:array{SuppressionListDestination?:array{SuppressionListImportAction:"DELETE"|"PUT"}, ContactListDestination?:array{ContactListName:string, ContactListImportAction:"DELETE"|"PUT"}}, ImportDataSource?:array{S3Url:string, DataFormat:"CSV"|"JSON"}, FailureInfo?:array{FailedRecordsS3Url?:string, ErrorMessage?:string}, JobStatus?:"CREATED"|"PROCESSING"|"COMPLETED"|"FAILED"|"CANCELLED", CreatedTimestamp?:int|string|\DateTimeInterface, CompletedTimestamp?:int|string|\DateTimeInterface, ProcessedRecordsCount?:int, FailedRecordsCount?:int}>
     */
    public function getImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MessageId:string} $args
     * @return \AWS\Result<array{MessageId?:string, FromEmailAddress?:string, Subject?:string, EmailTags?:array<array{Name:string, Value:string}>, Insights?:array<array{Destination?:string, Isp?:string, Events?:array<array{Timestamp?:int|string|\DateTimeInterface, Type?:"SEND"|"REJECT"|"BOUNCE"|"COMPLAINT"|"DELIVERY"|"OPEN"|"CLICK"|"RENDERING_FAILURE"|"DELIVERY_DELAY"|"SUBSCRIPTION", Details?:array{Bounce?:array{BounceType?:"UNDETERMINED"|"TRANSIENT"|"PERMANENT", BounceSubType?:string, DiagnosticCode?:string}, Complaint?:array{ComplaintSubType?:string, ComplaintFeedbackType?:string}}}>}>}>
     */
    public function getMessageInsights(array $args): \AWS\Result { }

    /**
     * @param array{MessageId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MessageId?:string, FromEmailAddress?:string, Subject?:string, EmailTags?:array<array{Name:string, Value:string}>, Insights?:array<array{Destination?:string, Isp?:string, Events?:array<array{Timestamp?:int|string|\DateTimeInterface, Type?:"SEND"|"REJECT"|"BOUNCE"|"COMPLAINT"|"DELIVERY"|"OPEN"|"CLICK"|"RENDERING_FAILURE"|"DELIVERY_DELAY"|"SUBSCRIPTION", Details?:array{Bounce?:array{BounceType?:"UNDETERMINED"|"TRANSIENT"|"PERMANENT", BounceSubType?:string, DiagnosticCode?:string}, Complaint?:array{ComplaintSubType?:string, ComplaintFeedbackType?:string}}}>}>}>
     */
    public function getMessageInsightsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EndpointName:string} $args
     * @return \AWS\Result<array{EndpointName?:string, EndpointId?:string, Routes?:array<array{Region:string}>, Status?:"CREATING"|"READY"|"FAILED"|"DELETING", CreatedTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function getMultiRegionEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{EndpointName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EndpointName?:string, EndpointId?:string, Routes?:array<array{Region:string}>, Status?:"CREATING"|"READY"|"FAILED"|"DELETING", CreatedTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function getMultiRegionEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EmailAddress:string} $args
     * @return \AWS\Result<array{SuppressedDestination:array{EmailAddress:string, Reason:"BOUNCE"|"COMPLAINT", LastUpdateTime:int|string|\DateTimeInterface, Attributes?:array{MessageId?:string, FeedbackId?:string}}}>
     */
    public function getSuppressedDestination(array $args): \AWS\Result { }

    /**
     * @param array{EmailAddress:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SuppressedDestination:array{EmailAddress:string, Reason:"BOUNCE"|"COMPLAINT", LastUpdateTime:int|string|\DateTimeInterface, Attributes?:array{MessageId?:string, FeedbackId?:string}}}>
     */
    public function getSuppressedDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{PageSize?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ContactLists?:array<array{ContactListName?:string, LastUpdatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listContactLists(array $args = []): \AWS\Result { }

    /**
     * @param array{PageSize?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContactLists?:array<array{ContactListName?:string, LastUpdatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listContactListsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContactListName:string, Filter?:array{FilteredStatus?:"OPT_IN"|"OPT_OUT", TopicFilter?:array{TopicName?:string, UseDefaultIfPreferenceUnavailable?:bool}}, PageSize?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Contacts?:array<array{EmailAddress?:string, TopicPreferences?:array<array{TopicName:string, SubscriptionStatus:"OPT_IN"|"OPT_OUT"}>, TopicDefaultPreferences?:array<array{TopicName:string, SubscriptionStatus:"OPT_IN"|"OPT_OUT"}>, UnsubscribeAll?:bool, LastUpdatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listContacts(array $args): \AWS\Result { }

    /**
     * @param array{ContactListName:string, Filter?:array{FilteredStatus?:"OPT_IN"|"OPT_OUT", TopicFilter?:array{TopicName?:string, UseDefaultIfPreferenceUnavailable?:bool}}, PageSize?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Contacts?:array<array{EmailAddress?:string, TopicPreferences?:array<array{TopicName:string, SubscriptionStatus:"OPT_IN"|"OPT_OUT"}>, TopicDefaultPreferences?:array<array{TopicName:string, SubscriptionStatus:"OPT_IN"|"OPT_OUT"}>, UnsubscribeAll?:bool, LastUpdatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listContactsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, PageSize?:int} $args
     * @return \AWS\Result<array{CustomVerificationEmailTemplates?:array<array{TemplateName?:string, FromEmailAddress?:string, TemplateSubject?:string, SuccessRedirectionURL?:string, FailureRedirectionURL?:string}>, NextToken?:string}>
     */
    public function listCustomVerificationEmailTemplates(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{CustomVerificationEmailTemplates?:array<array{TemplateName?:string, FromEmailAddress?:string, TemplateSubject?:string, SuccessRedirectionURL?:string, FailureRedirectionURL?:string}>, NextToken?:string}>
     */
    public function listCustomVerificationEmailTemplatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @return \AWS\Result<array{EmailIdentities?:array<array{IdentityType?:"EMAIL_ADDRESS"|"DOMAIN"|"MANAGED_DOMAIN", IdentityName?:string, SendingEnabled?:bool, VerificationStatus?:"PENDING"|"SUCCESS"|"FAILED"|"TEMPORARY_FAILURE"|"NOT_STARTED"}>, NextToken?:string}>
     */
    public function listEmailIdentities(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{EmailIdentities?:array<array{IdentityType?:"EMAIL_ADDRESS"|"DOMAIN"|"MANAGED_DOMAIN", IdentityName?:string, SendingEnabled?:bool, VerificationStatus?:"PENDING"|"SUCCESS"|"FAILED"|"TEMPORARY_FAILURE"|"NOT_STARTED"}>, NextToken?:string}>
     */
    public function listEmailIdentitiesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, PageSize?:int} $args
     * @return \AWS\Result<array{TemplatesMetadata?:array<array{TemplateName?:string, CreatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listEmailTemplates(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{TemplatesMetadata?:array<array{TemplateName?:string, CreatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listEmailTemplatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, PageSize?:int, ExportSourceType?:"METRICS_DATA"|"MESSAGE_INSIGHTS", JobStatus?:"CREATED"|"PROCESSING"|"COMPLETED"|"FAILED"|"CANCELLED"} $args
     * @return \AWS\Result<array{ExportJobs?:array<array{JobId?:string, ExportSourceType?:"METRICS_DATA"|"MESSAGE_INSIGHTS", JobStatus?:"CREATED"|"PROCESSING"|"COMPLETED"|"FAILED"|"CANCELLED", CreatedTimestamp?:int|string|\DateTimeInterface, CompletedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listExportJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, PageSize?:int, ExportSourceType?:"METRICS_DATA"|"MESSAGE_INSIGHTS", JobStatus?:"CREATED"|"PROCESSING"|"COMPLETED"|"FAILED"|"CANCELLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ExportJobs?:array<array{JobId?:string, ExportSourceType?:"METRICS_DATA"|"MESSAGE_INSIGHTS", JobStatus?:"CREATED"|"PROCESSING"|"COMPLETED"|"FAILED"|"CANCELLED", CreatedTimestamp?:int|string|\DateTimeInterface, CompletedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listExportJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ImportDestinationType?:"SUPPRESSION_LIST"|"CONTACT_LIST", NextToken?:string, PageSize?:int} $args
     * @return \AWS\Result<array{ImportJobs?:array<array{JobId?:string, ImportDestination?:array{SuppressionListDestination?:array{SuppressionListImportAction:"DELETE"|"PUT"}, ContactListDestination?:array{ContactListName:string, ContactListImportAction:"DELETE"|"PUT"}}, JobStatus?:"CREATED"|"PROCESSING"|"COMPLETED"|"FAILED"|"CANCELLED", CreatedTimestamp?:int|string|\DateTimeInterface, ProcessedRecordsCount?:int, FailedRecordsCount?:int}>, NextToken?:string}>
     */
    public function listImportJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{ImportDestinationType?:"SUPPRESSION_LIST"|"CONTACT_LIST", NextToken?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ImportJobs?:array<array{JobId?:string, ImportDestination?:array{SuppressionListDestination?:array{SuppressionListImportAction:"DELETE"|"PUT"}, ContactListDestination?:array{ContactListName:string, ContactListImportAction:"DELETE"|"PUT"}}, JobStatus?:"CREATED"|"PROCESSING"|"COMPLETED"|"FAILED"|"CANCELLED", CreatedTimestamp?:int|string|\DateTimeInterface, ProcessedRecordsCount?:int, FailedRecordsCount?:int}>, NextToken?:string}>
     */
    public function listImportJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, PageSize?:int} $args
     * @return \AWS\Result<array{MultiRegionEndpoints?:array<array{EndpointName?:string, Status?:"CREATING"|"READY"|"FAILED"|"DELETING", EndpointId?:string, Regions?:array<string>, CreatedTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listMultiRegionEndpoints(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{MultiRegionEndpoints?:array<array{EndpointName?:string, Status?:"CREATING"|"READY"|"FAILED"|"DELETING", EndpointId?:string, Regions?:array<string>, CreatedTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listMultiRegionEndpointsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filter?:array<"TYPE"|"IMPACT"|"STATUS"|"RESOURCE_ARN", string>, NextToken?:string, PageSize?:int} $args
     * @return \AWS\Result<array{Recommendations?:array<array{ResourceArn?:string, Type?:"DKIM"|"DMARC"|"SPF"|"BIMI"|"COMPLAINT", Description?:string, Status?:"OPEN"|"FIXED", CreatedTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface, Impact?:"LOW"|"HIGH"}>, NextToken?:string}>
     */
    public function listRecommendations(array $args = []): \AWS\Result { }

    /**
     * @param array{Filter?:array<"TYPE"|"IMPACT"|"STATUS"|"RESOURCE_ARN", string>, NextToken?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Recommendations?:array<array{ResourceArn?:string, Type?:"DKIM"|"DMARC"|"SPF"|"BIMI"|"COMPLAINT", Description?:string, Status?:"OPEN"|"FIXED", CreatedTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface, Impact?:"LOW"|"HIGH"}>, NextToken?:string}>
     */
    public function listRecommendationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Reasons?:array<"BOUNCE"|"COMPLAINT">, StartDate?:int|string|\DateTimeInterface, EndDate?:int|string|\DateTimeInterface, NextToken?:string, PageSize?:int} $args
     * @return \AWS\Result<array{SuppressedDestinationSummaries?:array<array{EmailAddress:string, Reason:"BOUNCE"|"COMPLAINT", LastUpdateTime:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listSuppressedDestinations(array $args = []): \AWS\Result { }

    /**
     * @param array{Reasons?:array<"BOUNCE"|"COMPLAINT">, StartDate?:int|string|\DateTimeInterface, EndDate?:int|string|\DateTimeInterface, NextToken?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{SuppressedDestinationSummaries?:array<array{EmailAddress:string, Reason:"BOUNCE"|"COMPLAINT", LastUpdateTime:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listSuppressedDestinationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{MailType:"MARKETING"|"TRANSACTIONAL", WebsiteURL:string, ContactLanguage?:"EN"|"JA", UseCaseDescription?:string, AdditionalContactEmailAddresses?:array<string>, ProductionAccessEnabled?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function putAccountDetails(array $args): \AWS\Result { }

    /**
     * @param array{MailType:"MARKETING"|"TRANSACTIONAL", WebsiteURL:string, ContactLanguage?:"EN"|"JA", UseCaseDescription?:string, AdditionalContactEmailAddresses?:array<string>, ProductionAccessEnabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putAccountDetailsAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{SuppressedReasons?:array<"BOUNCE"|"COMPLAINT">} $args
     * @return \AWS\Result<array{}>
     */
    public function putAccountSuppressionAttributes(array $args = []): \AWS\Result { }

    /**
     * @param array{SuppressedReasons?:array<"BOUNCE"|"COMPLAINT">} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putAccountSuppressionAttributesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VdmAttributes:array{VdmEnabled:"ENABLED"|"DISABLED", DashboardAttributes?:array{EngagementMetrics?:"ENABLED"|"DISABLED"}, GuardianAttributes?:array{OptimizedSharedDelivery?:"ENABLED"|"DISABLED"}}} $args
     * @return \AWS\Result<array{}>
     */
    public function putAccountVdmAttributes(array $args): \AWS\Result { }

    /**
     * @param array{VdmAttributes:array{VdmEnabled:"ENABLED"|"DISABLED", DashboardAttributes?:array{EngagementMetrics?:"ENABLED"|"DISABLED"}, GuardianAttributes?:array{OptimizedSharedDelivery?:"ENABLED"|"DISABLED"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putAccountVdmAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string, TlsPolicy?:"REQUIRE"|"OPTIONAL", SendingPoolName?:string, MaxDeliverySeconds?:int} $args
     * @return \AWS\Result<array{}>
     */
    public function putConfigurationSetDeliveryOptions(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string, TlsPolicy?:"REQUIRE"|"OPTIONAL", SendingPoolName?:string, MaxDeliverySeconds?:int} $args
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
     * @param array{ConfigurationSetName:string, SuppressedReasons?:array<"BOUNCE"|"COMPLAINT">} $args
     * @return \AWS\Result<array{}>
     */
    public function putConfigurationSetSuppressionOptions(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string, SuppressedReasons?:array<"BOUNCE"|"COMPLAINT">} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putConfigurationSetSuppressionOptionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string, CustomRedirectDomain?:string, HttpsPolicy?:"REQUIRE"|"REQUIRE_OPEN_ONLY"|"OPTIONAL"} $args
     * @return \AWS\Result<array{}>
     */
    public function putConfigurationSetTrackingOptions(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string, CustomRedirectDomain?:string, HttpsPolicy?:"REQUIRE"|"REQUIRE_OPEN_ONLY"|"OPTIONAL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putConfigurationSetTrackingOptionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string, VdmOptions?:array{DashboardOptions?:array{EngagementMetrics?:"ENABLED"|"DISABLED"}, GuardianOptions?:array{OptimizedSharedDelivery?:"ENABLED"|"DISABLED"}}} $args
     * @return \AWS\Result<array{}>
     */
    public function putConfigurationSetVdmOptions(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string, VdmOptions?:array{DashboardOptions?:array{EngagementMetrics?:"ENABLED"|"DISABLED"}, GuardianOptions?:array{OptimizedSharedDelivery?:"ENABLED"|"DISABLED"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putConfigurationSetVdmOptionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{PoolName:string, ScalingMode:"STANDARD"|"MANAGED"} $args
     * @return \AWS\Result<array{}>
     */
    public function putDedicatedIpPoolScalingAttributes(array $args): \AWS\Result { }

    /**
     * @param array{PoolName:string, ScalingMode:"STANDARD"|"MANAGED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putDedicatedIpPoolScalingAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{EmailIdentity:string, ConfigurationSetName?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function putEmailIdentityConfigurationSetAttributes(array $args): \AWS\Result { }

    /**
     * @param array{EmailIdentity:string, ConfigurationSetName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putEmailIdentityConfigurationSetAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{EmailIdentity:string, SigningAttributesOrigin:"AWS_SES"|"EXTERNAL"|"AWS_SES_AF_SOUTH_1"|"AWS_SES_EU_NORTH_1"|"AWS_SES_AP_SOUTH_1"|"AWS_SES_EU_WEST_3"|"AWS_SES_EU_WEST_2"|"AWS_SES_EU_SOUTH_1"|"AWS_SES_EU_WEST_1"|"AWS_SES_AP_NORTHEAST_3"|"AWS_SES_AP_NORTHEAST_2"|"AWS_SES_ME_SOUTH_1"|"AWS_SES_AP_NORTHEAST_1"|"AWS_SES_IL_CENTRAL_1"|"AWS_SES_SA_EAST_1"|"AWS_SES_CA_CENTRAL_1"|"AWS_SES_AP_SOUTHEAST_1"|"AWS_SES_AP_SOUTHEAST_2"|"AWS_SES_AP_SOUTHEAST_3"|"AWS_SES_EU_CENTRAL_1"|"AWS_SES_US_EAST_1"|"AWS_SES_US_EAST_2"|"AWS_SES_US_WEST_1"|"AWS_SES_US_WEST_2", SigningAttributes?:array{DomainSigningSelector?:string, DomainSigningPrivateKey?:string, NextSigningKeyLength?:"RSA_1024_BIT"|"RSA_2048_BIT", DomainSigningAttributesOrigin?:"AWS_SES"|"EXTERNAL"|"AWS_SES_AF_SOUTH_1"|"AWS_SES_EU_NORTH_1"|"AWS_SES_AP_SOUTH_1"|"AWS_SES_EU_WEST_3"|"AWS_SES_EU_WEST_2"|"AWS_SES_EU_SOUTH_1"|"AWS_SES_EU_WEST_1"|"AWS_SES_AP_NORTHEAST_3"|"AWS_SES_AP_NORTHEAST_2"|"AWS_SES_ME_SOUTH_1"|"AWS_SES_AP_NORTHEAST_1"|"AWS_SES_IL_CENTRAL_1"|"AWS_SES_SA_EAST_1"|"AWS_SES_CA_CENTRAL_1"|"AWS_SES_AP_SOUTHEAST_1"|"AWS_SES_AP_SOUTHEAST_2"|"AWS_SES_AP_SOUTHEAST_3"|"AWS_SES_EU_CENTRAL_1"|"AWS_SES_US_EAST_1"|"AWS_SES_US_EAST_2"|"AWS_SES_US_WEST_1"|"AWS_SES_US_WEST_2"}} $args
     * @return \AWS\Result<array{DkimStatus?:"PENDING"|"SUCCESS"|"FAILED"|"TEMPORARY_FAILURE"|"NOT_STARTED", DkimTokens?:array<string>}>
     */
    public function putEmailIdentityDkimSigningAttributes(array $args): \AWS\Result { }

    /**
     * @param array{EmailIdentity:string, SigningAttributesOrigin:"AWS_SES"|"EXTERNAL"|"AWS_SES_AF_SOUTH_1"|"AWS_SES_EU_NORTH_1"|"AWS_SES_AP_SOUTH_1"|"AWS_SES_EU_WEST_3"|"AWS_SES_EU_WEST_2"|"AWS_SES_EU_SOUTH_1"|"AWS_SES_EU_WEST_1"|"AWS_SES_AP_NORTHEAST_3"|"AWS_SES_AP_NORTHEAST_2"|"AWS_SES_ME_SOUTH_1"|"AWS_SES_AP_NORTHEAST_1"|"AWS_SES_IL_CENTRAL_1"|"AWS_SES_SA_EAST_1"|"AWS_SES_CA_CENTRAL_1"|"AWS_SES_AP_SOUTHEAST_1"|"AWS_SES_AP_SOUTHEAST_2"|"AWS_SES_AP_SOUTHEAST_3"|"AWS_SES_EU_CENTRAL_1"|"AWS_SES_US_EAST_1"|"AWS_SES_US_EAST_2"|"AWS_SES_US_WEST_1"|"AWS_SES_US_WEST_2", SigningAttributes?:array{DomainSigningSelector?:string, DomainSigningPrivateKey?:string, NextSigningKeyLength?:"RSA_1024_BIT"|"RSA_2048_BIT", DomainSigningAttributesOrigin?:"AWS_SES"|"EXTERNAL"|"AWS_SES_AF_SOUTH_1"|"AWS_SES_EU_NORTH_1"|"AWS_SES_AP_SOUTH_1"|"AWS_SES_EU_WEST_3"|"AWS_SES_EU_WEST_2"|"AWS_SES_EU_SOUTH_1"|"AWS_SES_EU_WEST_1"|"AWS_SES_AP_NORTHEAST_3"|"AWS_SES_AP_NORTHEAST_2"|"AWS_SES_ME_SOUTH_1"|"AWS_SES_AP_NORTHEAST_1"|"AWS_SES_IL_CENTRAL_1"|"AWS_SES_SA_EAST_1"|"AWS_SES_CA_CENTRAL_1"|"AWS_SES_AP_SOUTHEAST_1"|"AWS_SES_AP_SOUTHEAST_2"|"AWS_SES_AP_SOUTHEAST_3"|"AWS_SES_EU_CENTRAL_1"|"AWS_SES_US_EAST_1"|"AWS_SES_US_EAST_2"|"AWS_SES_US_WEST_1"|"AWS_SES_US_WEST_2"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{DkimStatus?:"PENDING"|"SUCCESS"|"FAILED"|"TEMPORARY_FAILURE"|"NOT_STARTED", DkimTokens?:array<string>}>
     */
    public function putEmailIdentityDkimSigningAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{EmailAddress:string, Reason:"BOUNCE"|"COMPLAINT"} $args
     * @return \AWS\Result<array{}>
     */
    public function putSuppressedDestination(array $args): \AWS\Result { }

    /**
     * @param array{EmailAddress:string, Reason:"BOUNCE"|"COMPLAINT"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putSuppressedDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FromEmailAddress?:string, FromEmailAddressIdentityArn?:string, ReplyToAddresses?:array<string>, FeedbackForwardingEmailAddress?:string, FeedbackForwardingEmailAddressIdentityArn?:string, DefaultEmailTags?:array<array{Name:string, Value:string}>, DefaultContent:array{Template?:array{TemplateName?:string, TemplateArn?:string, TemplateContent?:array{Subject?:string, Text?:string, Html?:string}, TemplateData?:string, Headers?:array<array{Name:string, Value:string}>}}, BulkEmailEntries:array<array{Destination:array{ToAddresses?:array<string>, CcAddresses?:array<string>, BccAddresses?:array<string>}, ReplacementTags?:array<array{Name:string, Value:string}>, ReplacementEmailContent?:array{ReplacementTemplate?:array{ReplacementTemplateData?:string}}, ReplacementHeaders?:array<array{Name:string, Value:string}>}>, ConfigurationSetName?:string, EndpointId?:string} $args
     * @return \AWS\Result<array{BulkEmailEntryResults:array<array{Status?:"SUCCESS"|"MESSAGE_REJECTED"|"MAIL_FROM_DOMAIN_NOT_VERIFIED"|"CONFIGURATION_SET_NOT_FOUND"|"TEMPLATE_NOT_FOUND"|"ACCOUNT_SUSPENDED"|"ACCOUNT_THROTTLED"|"ACCOUNT_DAILY_QUOTA_EXCEEDED"|"INVALID_SENDING_POOL_NAME"|"ACCOUNT_SENDING_PAUSED"|"CONFIGURATION_SET_SENDING_PAUSED"|"INVALID_PARAMETER"|"TRANSIENT_FAILURE"|"FAILED", Error?:string, MessageId?:string}>}>
     */
    public function sendBulkEmail(array $args): \AWS\Result { }

    /**
     * @param array{FromEmailAddress?:string, FromEmailAddressIdentityArn?:string, ReplyToAddresses?:array<string>, FeedbackForwardingEmailAddress?:string, FeedbackForwardingEmailAddressIdentityArn?:string, DefaultEmailTags?:array<array{Name:string, Value:string}>, DefaultContent:array{Template?:array{TemplateName?:string, TemplateArn?:string, TemplateContent?:array{Subject?:string, Text?:string, Html?:string}, TemplateData?:string, Headers?:array<array{Name:string, Value:string}>}}, BulkEmailEntries:array<array{Destination:array{ToAddresses?:array<string>, CcAddresses?:array<string>, BccAddresses?:array<string>}, ReplacementTags?:array<array{Name:string, Value:string}>, ReplacementEmailContent?:array{ReplacementTemplate?:array{ReplacementTemplateData?:string}}, ReplacementHeaders?:array<array{Name:string, Value:string}>}>, ConfigurationSetName?:string, EndpointId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BulkEmailEntryResults:array<array{Status?:"SUCCESS"|"MESSAGE_REJECTED"|"MAIL_FROM_DOMAIN_NOT_VERIFIED"|"CONFIGURATION_SET_NOT_FOUND"|"TEMPLATE_NOT_FOUND"|"ACCOUNT_SUSPENDED"|"ACCOUNT_THROTTLED"|"ACCOUNT_DAILY_QUOTA_EXCEEDED"|"INVALID_SENDING_POOL_NAME"|"ACCOUNT_SENDING_PAUSED"|"CONFIGURATION_SET_SENDING_PAUSED"|"INVALID_PARAMETER"|"TRANSIENT_FAILURE"|"FAILED", Error?:string, MessageId?:string}>}>
     */
    public function sendBulkEmailAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EmailAddress:string, TemplateName:string, ConfigurationSetName?:string} $args
     * @return \AWS\Result<array{MessageId?:string}>
     */
    public function sendCustomVerificationEmail(array $args): \AWS\Result { }

    /**
     * @param array{EmailAddress:string, TemplateName:string, ConfigurationSetName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MessageId?:string}>
     */
    public function sendCustomVerificationEmailAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FromEmailAddress?:string, FromEmailAddressIdentityArn?:string, Destination?:array{ToAddresses?:array<string>, CcAddresses?:array<string>, BccAddresses?:array<string>}, ReplyToAddresses?:array<string>, FeedbackForwardingEmailAddress?:string, FeedbackForwardingEmailAddressIdentityArn?:string, Content:array{Simple?:array{Subject:array{Data:string, Charset?:string}, Body:array{Text?:array{Data:string, Charset?:string}, Html?:array{Data:string, Charset?:string}}, Headers?:array<array{Name:string, Value:string}>}, Raw?:array{Data:string|resource|\Psr\Http\Message\StreamInterface}, Template?:array{TemplateName?:string, TemplateArn?:string, TemplateContent?:array{Subject?:string, Text?:string, Html?:string}, TemplateData?:string, Headers?:array<array{Name:string, Value:string}>}}, EmailTags?:array<array{Name:string, Value:string}>, ConfigurationSetName?:string, EndpointId?:string, ListManagementOptions?:array{ContactListName:string, TopicName?:string}} $args
     * @return \AWS\Result<array{MessageId?:string}>
     */
    public function sendEmail(array $args): \AWS\Result { }

    /**
     * @param array{FromEmailAddress?:string, FromEmailAddressIdentityArn?:string, Destination?:array{ToAddresses?:array<string>, CcAddresses?:array<string>, BccAddresses?:array<string>}, ReplyToAddresses?:array<string>, FeedbackForwardingEmailAddress?:string, FeedbackForwardingEmailAddressIdentityArn?:string, Content:array{Simple?:array{Subject:array{Data:string, Charset?:string}, Body:array{Text?:array{Data:string, Charset?:string}, Html?:array{Data:string, Charset?:string}}, Headers?:array<array{Name:string, Value:string}>}, Raw?:array{Data:string|resource|\Psr\Http\Message\StreamInterface}, Template?:array{TemplateName?:string, TemplateArn?:string, TemplateContent?:array{Subject?:string, Text?:string, Html?:string}, TemplateData?:string, Headers?:array<array{Name:string, Value:string}>}}, EmailTags?:array<array{Name:string, Value:string}>, ConfigurationSetName?:string, EndpointId?:string, ListManagementOptions?:array{ContactListName:string, TopicName?:string}} $args
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
     * @param array{TemplateName:string, TemplateData:string} $args
     * @return \AWS\Result<array{RenderedTemplate:string}>
     */
    public function testRenderEmailTemplate(array $args): \AWS\Result { }

    /**
     * @param array{TemplateName:string, TemplateData:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RenderedTemplate:string}>
     */
    public function testRenderEmailTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{ConfigurationSetName:string, EventDestinationName:string, EventDestination:array{Enabled?:bool, MatchingEventTypes?:array<"SEND"|"REJECT"|"BOUNCE"|"COMPLAINT"|"DELIVERY"|"OPEN"|"CLICK"|"RENDERING_FAILURE"|"DELIVERY_DELAY"|"SUBSCRIPTION">, KinesisFirehoseDestination?:array{IamRoleArn:string, DeliveryStreamArn:string}, CloudWatchDestination?:array{DimensionConfigurations:array<array{DimensionName:string, DimensionValueSource:"MESSAGE_TAG"|"EMAIL_HEADER"|"LINK_TAG", DefaultDimensionValue:string}>}, SnsDestination?:array{TopicArn:string}, EventBridgeDestination?:array{EventBusArn:string}, PinpointDestination?:array{ApplicationArn?:string}}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateConfigurationSetEventDestination(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string, EventDestinationName:string, EventDestination:array{Enabled?:bool, MatchingEventTypes?:array<"SEND"|"REJECT"|"BOUNCE"|"COMPLAINT"|"DELIVERY"|"OPEN"|"CLICK"|"RENDERING_FAILURE"|"DELIVERY_DELAY"|"SUBSCRIPTION">, KinesisFirehoseDestination?:array{IamRoleArn:string, DeliveryStreamArn:string}, CloudWatchDestination?:array{DimensionConfigurations:array<array{DimensionName:string, DimensionValueSource:"MESSAGE_TAG"|"EMAIL_HEADER"|"LINK_TAG", DefaultDimensionValue:string}>}, SnsDestination?:array{TopicArn:string}, EventBridgeDestination?:array{EventBusArn:string}, PinpointDestination?:array{ApplicationArn?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateConfigurationSetEventDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContactListName:string, EmailAddress:string, TopicPreferences?:array<array{TopicName:string, SubscriptionStatus:"OPT_IN"|"OPT_OUT"}>, UnsubscribeAll?:bool, AttributesData?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateContact(array $args): \AWS\Result { }

    /**
     * @param array{ContactListName:string, EmailAddress:string, TopicPreferences?:array<array{TopicName:string, SubscriptionStatus:"OPT_IN"|"OPT_OUT"}>, UnsubscribeAll?:bool, AttributesData?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContactListName:string, Topics?:array<array{TopicName:string, DisplayName:string, Description?:string, DefaultSubscriptionStatus:"OPT_IN"|"OPT_OUT"}>, Description?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateContactList(array $args): \AWS\Result { }

    /**
     * @param array{ContactListName:string, Topics?:array<array{TopicName:string, DisplayName:string, Description?:string, DefaultSubscriptionStatus:"OPT_IN"|"OPT_OUT"}>, Description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateContactListAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TemplateName:string, FromEmailAddress:string, TemplateSubject:string, TemplateContent:string, SuccessRedirectionURL:string, FailureRedirectionURL:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateCustomVerificationEmailTemplate(array $args): \AWS\Result { }

    /**
     * @param array{TemplateName:string, FromEmailAddress:string, TemplateSubject:string, TemplateContent:string, SuccessRedirectionURL:string, FailureRedirectionURL:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateCustomVerificationEmailTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EmailIdentity:string, PolicyName:string, Policy:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateEmailIdentityPolicy(array $args): \AWS\Result { }

    /**
     * @param array{EmailIdentity:string, PolicyName:string, Policy:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateEmailIdentityPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TemplateName:string, TemplateContent:array{Subject?:string, Text?:string, Html?:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateEmailTemplate(array $args): \AWS\Result { }

    /**
     * @param array{TemplateName:string, TemplateContent:array{Subject?:string, Text?:string, Html?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateEmailTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
