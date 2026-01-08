<?php
namespace AWS\Ses;

class SesClient
{
    /**
     * @param array{RuleSetName:string, OriginalRuleSetName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function cloneReceiptRuleSet(array $args): \AWS\Result { }

    /**
     * @param array{RuleSetName:string, OriginalRuleSetName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function cloneReceiptRuleSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSet:array{Name:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function createConfigurationSet(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSet:array{Name:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createConfigurationSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string, EventDestination:array{Name:string, Enabled?:bool, MatchingEventTypes:array<"send"|"reject"|"bounce"|"complaint"|"delivery"|"open"|"click"|"renderingFailure">, KinesisFirehoseDestination?:array{IAMRoleARN:string, DeliveryStreamARN:string}, CloudWatchDestination?:array{DimensionConfigurations:array<array{DimensionName:string, DimensionValueSource:"messageTag"|"emailHeader"|"linkTag", DefaultDimensionValue:string}>}, SNSDestination?:array{TopicARN:string}}} $args
     * @return \AWS\Result<array{}>
     */
    public function createConfigurationSetEventDestination(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string, EventDestination:array{Name:string, Enabled?:bool, MatchingEventTypes:array<"send"|"reject"|"bounce"|"complaint"|"delivery"|"open"|"click"|"renderingFailure">, KinesisFirehoseDestination?:array{IAMRoleARN:string, DeliveryStreamARN:string}, CloudWatchDestination?:array{DimensionConfigurations:array<array{DimensionName:string, DimensionValueSource:"messageTag"|"emailHeader"|"linkTag", DefaultDimensionValue:string}>}, SNSDestination?:array{TopicARN:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createConfigurationSetEventDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string, TrackingOptions:array{CustomRedirectDomain?:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function createConfigurationSetTrackingOptions(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string, TrackingOptions:array{CustomRedirectDomain?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createConfigurationSetTrackingOptionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TemplateName:string, FromEmailAddress:string, TemplateSubject:string, TemplateContent:string, SuccessRedirectionURL:string, FailureRedirectionURL:string} $args
     * @return \AWS\Result<void>
     */
    public function createCustomVerificationEmailTemplate(array $args): \AWS\Result { }

    /**
     * @param array{TemplateName:string, FromEmailAddress:string, TemplateSubject:string, TemplateContent:string, SuccessRedirectionURL:string, FailureRedirectionURL:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function createCustomVerificationEmailTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Filter:array{Name:string, IpFilter:array{Policy:"Block"|"Allow", Cidr:string}}} $args
     * @return \AWS\Result<array{}>
     */
    public function createReceiptFilter(array $args): \AWS\Result { }

    /**
     * @param array{Filter:array{Name:string, IpFilter:array{Policy:"Block"|"Allow", Cidr:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createReceiptFilterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleSetName:string, After?:string, Rule:array{Name:string, Enabled?:bool, TlsPolicy?:"Require"|"Optional", Recipients?:array<string>, Actions?:array<array{S3Action?:array{TopicArn?:string, BucketName:string, ObjectKeyPrefix?:string, KmsKeyArn?:string, IamRoleArn?:string}, BounceAction?:array{TopicArn?:string, SmtpReplyCode:string, StatusCode?:string, Message:string, Sender:string}, WorkmailAction?:array{TopicArn?:string, OrganizationArn:string}, LambdaAction?:array{TopicArn?:string, FunctionArn:string, InvocationType?:"Event"|"RequestResponse"}, StopAction?:array{Scope:"RuleSet", TopicArn?:string}, AddHeaderAction?:array{HeaderName:string, HeaderValue:string}, SNSAction?:array{TopicArn:string, Encoding?:"UTF-8"|"Base64"}, ConnectAction?:array{InstanceARN:string, IAMRoleARN:string}}>, ScanEnabled?:bool}} $args
     * @return \AWS\Result<array{}>
     */
    public function createReceiptRule(array $args): \AWS\Result { }

    /**
     * @param array{RuleSetName:string, After?:string, Rule:array{Name:string, Enabled?:bool, TlsPolicy?:"Require"|"Optional", Recipients?:array<string>, Actions?:array<array{S3Action?:array{TopicArn?:string, BucketName:string, ObjectKeyPrefix?:string, KmsKeyArn?:string, IamRoleArn?:string}, BounceAction?:array{TopicArn?:string, SmtpReplyCode:string, StatusCode?:string, Message:string, Sender:string}, WorkmailAction?:array{TopicArn?:string, OrganizationArn:string}, LambdaAction?:array{TopicArn?:string, FunctionArn:string, InvocationType?:"Event"|"RequestResponse"}, StopAction?:array{Scope:"RuleSet", TopicArn?:string}, AddHeaderAction?:array{HeaderName:string, HeaderValue:string}, SNSAction?:array{TopicArn:string, Encoding?:"UTF-8"|"Base64"}, ConnectAction?:array{InstanceARN:string, IAMRoleARN:string}}>, ScanEnabled?:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createReceiptRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleSetName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function createReceiptRuleSet(array $args): \AWS\Result { }

    /**
     * @param array{RuleSetName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createReceiptRuleSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Template:array{TemplateName:string, SubjectPart?:string, TextPart?:string, HtmlPart?:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function createTemplate(array $args): \AWS\Result { }

    /**
     * @param array{Template:array{TemplateName:string, SubjectPart?:string, TextPart?:string, HtmlPart?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{ConfigurationSetName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteConfigurationSetTrackingOptions(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteConfigurationSetTrackingOptionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TemplateName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteCustomVerificationEmailTemplate(array $args): \AWS\Result { }

    /**
     * @param array{TemplateName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteCustomVerificationEmailTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Identity:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteIdentity(array $args): \AWS\Result { }

    /**
     * @param array{Identity:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteIdentityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Identity:string, PolicyName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteIdentityPolicy(array $args): \AWS\Result { }

    /**
     * @param array{Identity:string, PolicyName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteIdentityPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FilterName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteReceiptFilter(array $args): \AWS\Result { }

    /**
     * @param array{FilterName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteReceiptFilterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleSetName:string, RuleName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteReceiptRule(array $args): \AWS\Result { }

    /**
     * @param array{RuleSetName:string, RuleName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteReceiptRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleSetName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteReceiptRuleSet(array $args): \AWS\Result { }

    /**
     * @param array{RuleSetName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteReceiptRuleSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TemplateName:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteTemplate(array $args): \AWS\Result { }

    /**
     * @param array{TemplateName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EmailAddress:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteVerifiedEmailAddress(array $args): \AWS\Result { }

    /**
     * @param array{EmailAddress:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteVerifiedEmailAddressAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{Metadata?:array{Name?:string, CreatedTimestamp?:int|string|\DateTimeInterface}, Rules?:array<array{Name:string, Enabled?:bool, TlsPolicy?:"Require"|"Optional", Recipients?:array<string>, Actions?:array<array{S3Action?:array{TopicArn?:string, BucketName:string, ObjectKeyPrefix?:string, KmsKeyArn?:string, IamRoleArn?:string}, BounceAction?:array{TopicArn?:string, SmtpReplyCode:string, StatusCode?:string, Message:string, Sender:string}, WorkmailAction?:array{TopicArn?:string, OrganizationArn:string}, LambdaAction?:array{TopicArn?:string, FunctionArn:string, InvocationType?:"Event"|"RequestResponse"}, StopAction?:array{Scope:"RuleSet", TopicArn?:string}, AddHeaderAction?:array{HeaderName:string, HeaderValue:string}, SNSAction?:array{TopicArn:string, Encoding?:"UTF-8"|"Base64"}, ConnectAction?:array{InstanceARN:string, IAMRoleARN:string}}>, ScanEnabled?:bool}>}>
     */
    public function describeActiveReceiptRuleSet(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{Metadata?:array{Name?:string, CreatedTimestamp?:int|string|\DateTimeInterface}, Rules?:array<array{Name:string, Enabled?:bool, TlsPolicy?:"Require"|"Optional", Recipients?:array<string>, Actions?:array<array{S3Action?:array{TopicArn?:string, BucketName:string, ObjectKeyPrefix?:string, KmsKeyArn?:string, IamRoleArn?:string}, BounceAction?:array{TopicArn?:string, SmtpReplyCode:string, StatusCode?:string, Message:string, Sender:string}, WorkmailAction?:array{TopicArn?:string, OrganizationArn:string}, LambdaAction?:array{TopicArn?:string, FunctionArn:string, InvocationType?:"Event"|"RequestResponse"}, StopAction?:array{Scope:"RuleSet", TopicArn?:string}, AddHeaderAction?:array{HeaderName:string, HeaderValue:string}, SNSAction?:array{TopicArn:string, Encoding?:"UTF-8"|"Base64"}, ConnectAction?:array{InstanceARN:string, IAMRoleARN:string}}>, ScanEnabled?:bool}>}>
     */
    public function describeActiveReceiptRuleSetAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string, ConfigurationSetAttributeNames?:array<"eventDestinations"|"trackingOptions"|"deliveryOptions"|"reputationOptions">} $args
     * @return \AWS\Result<array{ConfigurationSet?:array{Name:string}, EventDestinations?:array<array{Name:string, Enabled?:bool, MatchingEventTypes:array<"send"|"reject"|"bounce"|"complaint"|"delivery"|"open"|"click"|"renderingFailure">, KinesisFirehoseDestination?:array{IAMRoleARN:string, DeliveryStreamARN:string}, CloudWatchDestination?:array{DimensionConfigurations:array<array{DimensionName:string, DimensionValueSource:"messageTag"|"emailHeader"|"linkTag", DefaultDimensionValue:string}>}, SNSDestination?:array{TopicARN:string}}>, TrackingOptions?:array{CustomRedirectDomain?:string}, DeliveryOptions?:array{TlsPolicy?:"Require"|"Optional"}, ReputationOptions?:array{SendingEnabled?:bool, ReputationMetricsEnabled?:bool, LastFreshStart?:int|string|\DateTimeInterface}}>
     */
    public function describeConfigurationSet(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string, ConfigurationSetAttributeNames?:array<"eventDestinations"|"trackingOptions"|"deliveryOptions"|"reputationOptions">} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConfigurationSet?:array{Name:string}, EventDestinations?:array<array{Name:string, Enabled?:bool, MatchingEventTypes:array<"send"|"reject"|"bounce"|"complaint"|"delivery"|"open"|"click"|"renderingFailure">, KinesisFirehoseDestination?:array{IAMRoleARN:string, DeliveryStreamARN:string}, CloudWatchDestination?:array{DimensionConfigurations:array<array{DimensionName:string, DimensionValueSource:"messageTag"|"emailHeader"|"linkTag", DefaultDimensionValue:string}>}, SNSDestination?:array{TopicARN:string}}>, TrackingOptions?:array{CustomRedirectDomain?:string}, DeliveryOptions?:array{TlsPolicy?:"Require"|"Optional"}, ReputationOptions?:array{SendingEnabled?:bool, ReputationMetricsEnabled?:bool, LastFreshStart?:int|string|\DateTimeInterface}}>
     */
    public function describeConfigurationSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleSetName:string, RuleName:string} $args
     * @return \AWS\Result<array{Rule?:array{Name:string, Enabled?:bool, TlsPolicy?:"Require"|"Optional", Recipients?:array<string>, Actions?:array<array{S3Action?:array{TopicArn?:string, BucketName:string, ObjectKeyPrefix?:string, KmsKeyArn?:string, IamRoleArn?:string}, BounceAction?:array{TopicArn?:string, SmtpReplyCode:string, StatusCode?:string, Message:string, Sender:string}, WorkmailAction?:array{TopicArn?:string, OrganizationArn:string}, LambdaAction?:array{TopicArn?:string, FunctionArn:string, InvocationType?:"Event"|"RequestResponse"}, StopAction?:array{Scope:"RuleSet", TopicArn?:string}, AddHeaderAction?:array{HeaderName:string, HeaderValue:string}, SNSAction?:array{TopicArn:string, Encoding?:"UTF-8"|"Base64"}, ConnectAction?:array{InstanceARN:string, IAMRoleARN:string}}>, ScanEnabled?:bool}}>
     */
    public function describeReceiptRule(array $args): \AWS\Result { }

    /**
     * @param array{RuleSetName:string, RuleName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Rule?:array{Name:string, Enabled?:bool, TlsPolicy?:"Require"|"Optional", Recipients?:array<string>, Actions?:array<array{S3Action?:array{TopicArn?:string, BucketName:string, ObjectKeyPrefix?:string, KmsKeyArn?:string, IamRoleArn?:string}, BounceAction?:array{TopicArn?:string, SmtpReplyCode:string, StatusCode?:string, Message:string, Sender:string}, WorkmailAction?:array{TopicArn?:string, OrganizationArn:string}, LambdaAction?:array{TopicArn?:string, FunctionArn:string, InvocationType?:"Event"|"RequestResponse"}, StopAction?:array{Scope:"RuleSet", TopicArn?:string}, AddHeaderAction?:array{HeaderName:string, HeaderValue:string}, SNSAction?:array{TopicArn:string, Encoding?:"UTF-8"|"Base64"}, ConnectAction?:array{InstanceARN:string, IAMRoleARN:string}}>, ScanEnabled?:bool}}>
     */
    public function describeReceiptRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleSetName:string} $args
     * @return \AWS\Result<array{Metadata?:array{Name?:string, CreatedTimestamp?:int|string|\DateTimeInterface}, Rules?:array<array{Name:string, Enabled?:bool, TlsPolicy?:"Require"|"Optional", Recipients?:array<string>, Actions?:array<array{S3Action?:array{TopicArn?:string, BucketName:string, ObjectKeyPrefix?:string, KmsKeyArn?:string, IamRoleArn?:string}, BounceAction?:array{TopicArn?:string, SmtpReplyCode:string, StatusCode?:string, Message:string, Sender:string}, WorkmailAction?:array{TopicArn?:string, OrganizationArn:string}, LambdaAction?:array{TopicArn?:string, FunctionArn:string, InvocationType?:"Event"|"RequestResponse"}, StopAction?:array{Scope:"RuleSet", TopicArn?:string}, AddHeaderAction?:array{HeaderName:string, HeaderValue:string}, SNSAction?:array{TopicArn:string, Encoding?:"UTF-8"|"Base64"}, ConnectAction?:array{InstanceARN:string, IAMRoleARN:string}}>, ScanEnabled?:bool}>}>
     */
    public function describeReceiptRuleSet(array $args): \AWS\Result { }

    /**
     * @param array{RuleSetName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Metadata?:array{Name?:string, CreatedTimestamp?:int|string|\DateTimeInterface}, Rules?:array<array{Name:string, Enabled?:bool, TlsPolicy?:"Require"|"Optional", Recipients?:array<string>, Actions?:array<array{S3Action?:array{TopicArn?:string, BucketName:string, ObjectKeyPrefix?:string, KmsKeyArn?:string, IamRoleArn?:string}, BounceAction?:array{TopicArn?:string, SmtpReplyCode:string, StatusCode?:string, Message:string, Sender:string}, WorkmailAction?:array{TopicArn?:string, OrganizationArn:string}, LambdaAction?:array{TopicArn?:string, FunctionArn:string, InvocationType?:"Event"|"RequestResponse"}, StopAction?:array{Scope:"RuleSet", TopicArn?:string}, AddHeaderAction?:array{HeaderName:string, HeaderValue:string}, SNSAction?:array{TopicArn:string, Encoding?:"UTF-8"|"Base64"}, ConnectAction?:array{InstanceARN:string, IAMRoleARN:string}}>, ScanEnabled?:bool}>}>
     */
    public function describeReceiptRuleSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{Enabled?:bool}>
     */
    public function getAccountSendingEnabled(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{Enabled?:bool}>
     */
    public function getAccountSendingEnabledAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{Identities:array<string>} $args
     * @return \AWS\Result<array{DkimAttributes:array<string, array{DkimEnabled:bool, DkimVerificationStatus:"Pending"|"Success"|"Failed"|"TemporaryFailure"|"NotStarted", DkimTokens?:array<string>}>}>
     */
    public function getIdentityDkimAttributes(array $args): \AWS\Result { }

    /**
     * @param array{Identities:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{DkimAttributes:array<string, array{DkimEnabled:bool, DkimVerificationStatus:"Pending"|"Success"|"Failed"|"TemporaryFailure"|"NotStarted", DkimTokens?:array<string>}>}>
     */
    public function getIdentityDkimAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Identities:array<string>} $args
     * @return \AWS\Result<array{MailFromDomainAttributes:array<string, array{MailFromDomain:string, MailFromDomainStatus:"Pending"|"Success"|"Failed"|"TemporaryFailure", BehaviorOnMXFailure:"UseDefaultValue"|"RejectMessage"}>}>
     */
    public function getIdentityMailFromDomainAttributes(array $args): \AWS\Result { }

    /**
     * @param array{Identities:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{MailFromDomainAttributes:array<string, array{MailFromDomain:string, MailFromDomainStatus:"Pending"|"Success"|"Failed"|"TemporaryFailure", BehaviorOnMXFailure:"UseDefaultValue"|"RejectMessage"}>}>
     */
    public function getIdentityMailFromDomainAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Identities:array<string>} $args
     * @return \AWS\Result<array{NotificationAttributes:array<string, array{BounceTopic:string, ComplaintTopic:string, DeliveryTopic:string, ForwardingEnabled:bool, HeadersInBounceNotificationsEnabled?:bool, HeadersInComplaintNotificationsEnabled?:bool, HeadersInDeliveryNotificationsEnabled?:bool}>}>
     */
    public function getIdentityNotificationAttributes(array $args): \AWS\Result { }

    /**
     * @param array{Identities:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{NotificationAttributes:array<string, array{BounceTopic:string, ComplaintTopic:string, DeliveryTopic:string, ForwardingEnabled:bool, HeadersInBounceNotificationsEnabled?:bool, HeadersInComplaintNotificationsEnabled?:bool, HeadersInDeliveryNotificationsEnabled?:bool}>}>
     */
    public function getIdentityNotificationAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Identity:string, PolicyNames:array<string>} $args
     * @return \AWS\Result<array{Policies:array<string, string>}>
     */
    public function getIdentityPolicies(array $args): \AWS\Result { }

    /**
     * @param array{Identity:string, PolicyNames:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policies:array<string, string>}>
     */
    public function getIdentityPoliciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Identities:array<string>} $args
     * @return \AWS\Result<array{VerificationAttributes:array<string, array{VerificationStatus:"Pending"|"Success"|"Failed"|"TemporaryFailure"|"NotStarted", VerificationToken?:string}>}>
     */
    public function getIdentityVerificationAttributes(array $args): \AWS\Result { }

    /**
     * @param array{Identities:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{VerificationAttributes:array<string, array{VerificationStatus:"Pending"|"Success"|"Failed"|"TemporaryFailure"|"NotStarted", VerificationToken?:string}>}>
     */
    public function getIdentityVerificationAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{Max24HourSend?:float, MaxSendRate?:float, SentLast24Hours?:float}>
     */
    public function getSendQuota(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{Max24HourSend?:float, MaxSendRate?:float, SentLast24Hours?:float}>
     */
    public function getSendQuotaAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{SendDataPoints?:array<array{Timestamp?:int|string|\DateTimeInterface, DeliveryAttempts?:int, Bounces?:int, Complaints?:int, Rejects?:int}>}>
     */
    public function getSendStatistics(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{SendDataPoints?:array<array{Timestamp?:int|string|\DateTimeInterface, DeliveryAttempts?:int, Bounces?:int, Complaints?:int, Rejects?:int}>}>
     */
    public function getSendStatisticsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TemplateName:string} $args
     * @return \AWS\Result<array{Template?:array{TemplateName:string, SubjectPart?:string, TextPart?:string, HtmlPart?:string}}>
     */
    public function getTemplate(array $args): \AWS\Result { }

    /**
     * @param array{TemplateName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Template?:array{TemplateName:string, SubjectPart?:string, TextPart?:string, HtmlPart?:string}}>
     */
    public function getTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{ConfigurationSets?:array<array{Name:string}>, NextToken?:string}>
     */
    public function listConfigurationSets(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConfigurationSets?:array<array{Name:string}>, NextToken?:string}>
     */
    public function listConfigurationSetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{CustomVerificationEmailTemplates?:array<array{TemplateName?:string, FromEmailAddress?:string, TemplateSubject?:string, SuccessRedirectionURL?:string, FailureRedirectionURL?:string}>, NextToken?:string}>
     */
    public function listCustomVerificationEmailTemplates(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{CustomVerificationEmailTemplates?:array<array{TemplateName?:string, FromEmailAddress?:string, TemplateSubject?:string, SuccessRedirectionURL?:string, FailureRedirectionURL?:string}>, NextToken?:string}>
     */
    public function listCustomVerificationEmailTemplatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityType?:"EmailAddress"|"Domain", NextToken?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{Identities:array<string>, NextToken?:string}>
     */
    public function listIdentities(array $args = []): \AWS\Result { }

    /**
     * @param array{IdentityType?:"EmailAddress"|"Domain", NextToken?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Identities:array<string>, NextToken?:string}>
     */
    public function listIdentitiesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Identity:string} $args
     * @return \AWS\Result<array{PolicyNames:array<string>}>
     */
    public function listIdentityPolicies(array $args): \AWS\Result { }

    /**
     * @param array{Identity:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PolicyNames:array<string>}>
     */
    public function listIdentityPoliciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{Filters?:array<array{Name:string, IpFilter:array{Policy:"Block"|"Allow", Cidr:string}}>}>
     */
    public function listReceiptFilters(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{Filters?:array<array{Name:string, IpFilter:array{Policy:"Block"|"Allow", Cidr:string}}>}>
     */
    public function listReceiptFiltersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string} $args
     * @return \AWS\Result<array{RuleSets?:array<array{Name?:string, CreatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listReceiptRuleSets(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RuleSets?:array<array{Name?:string, CreatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listReceiptRuleSetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxItems?:int} $args
     * @return \AWS\Result<array{TemplatesMetadata?:array<array{Name?:string, CreatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listTemplates(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxItems?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{TemplatesMetadata?:array<array{Name?:string, CreatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listTemplatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{VerifiedEmailAddresses?:array<string>}>
     */
    public function listVerifiedEmailAddresses(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{VerifiedEmailAddresses?:array<string>}>
     */
    public function listVerifiedEmailAddressesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string, DeliveryOptions?:array{TlsPolicy?:"Require"|"Optional"}} $args
     * @return \AWS\Result<array{}>
     */
    public function putConfigurationSetDeliveryOptions(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string, DeliveryOptions?:array{TlsPolicy?:"Require"|"Optional"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putConfigurationSetDeliveryOptionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Identity:string, PolicyName:string, Policy:string} $args
     * @return \AWS\Result<array{}>
     */
    public function putIdentityPolicy(array $args): \AWS\Result { }

    /**
     * @param array{Identity:string, PolicyName:string, Policy:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putIdentityPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleSetName:string, RuleNames:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function reorderReceiptRuleSet(array $args): \AWS\Result { }

    /**
     * @param array{RuleSetName:string, RuleNames:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function reorderReceiptRuleSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OriginalMessageId:string, BounceSender:string, Explanation?:string, MessageDsn?:array{ReportingMta:string, ArrivalDate?:int|string|\DateTimeInterface, ExtensionFields?:array<array{Name:string, Value:string}>}, BouncedRecipientInfoList:array<array{Recipient:string, RecipientArn?:string, BounceType?:"DoesNotExist"|"MessageTooLarge"|"ExceededQuota"|"ContentRejected"|"Undefined"|"TemporaryFailure", RecipientDsnFields?:array{FinalRecipient?:string, Action:"failed"|"delayed"|"delivered"|"relayed"|"expanded", RemoteMta?:string, Status:string, DiagnosticCode?:string, LastAttemptDate?:int|string|\DateTimeInterface, ExtensionFields?:array<array{Name:string, Value:string}>}}>, BounceSenderArn?:string} $args
     * @return \AWS\Result<array{MessageId?:string}>
     */
    public function sendBounce(array $args): \AWS\Result { }

    /**
     * @param array{OriginalMessageId:string, BounceSender:string, Explanation?:string, MessageDsn?:array{ReportingMta:string, ArrivalDate?:int|string|\DateTimeInterface, ExtensionFields?:array<array{Name:string, Value:string}>}, BouncedRecipientInfoList:array<array{Recipient:string, RecipientArn?:string, BounceType?:"DoesNotExist"|"MessageTooLarge"|"ExceededQuota"|"ContentRejected"|"Undefined"|"TemporaryFailure", RecipientDsnFields?:array{FinalRecipient?:string, Action:"failed"|"delayed"|"delivered"|"relayed"|"expanded", RemoteMta?:string, Status:string, DiagnosticCode?:string, LastAttemptDate?:int|string|\DateTimeInterface, ExtensionFields?:array<array{Name:string, Value:string}>}}>, BounceSenderArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MessageId?:string}>
     */
    public function sendBounceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Source:string, SourceArn?:string, ReplyToAddresses?:array<string>, ReturnPath?:string, ReturnPathArn?:string, ConfigurationSetName?:string, DefaultTags?:array<array{Name:string, Value:string}>, Template:string, TemplateArn?:string, DefaultTemplateData:string, Destinations:array<array{Destination:array{ToAddresses?:array<string>, CcAddresses?:array<string>, BccAddresses?:array<string>}, ReplacementTags?:array<array{Name:string, Value:string}>, ReplacementTemplateData?:string}>} $args
     * @return \AWS\Result<array{Status:array<array{Status?:mixed, Error?:string, MessageId?:string}>}>
     */
    public function sendBulkTemplatedEmail(array $args): \AWS\Result { }

    /**
     * @param array{Source:string, SourceArn?:string, ReplyToAddresses?:array<string>, ReturnPath?:string, ReturnPathArn?:string, ConfigurationSetName?:string, DefaultTags?:array<array{Name:string, Value:string}>, Template:string, TemplateArn?:string, DefaultTemplateData:string, Destinations:array<array{Destination:array{ToAddresses?:array<string>, CcAddresses?:array<string>, BccAddresses?:array<string>}, ReplacementTags?:array<array{Name:string, Value:string}>, ReplacementTemplateData?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status:array<array{Status?:mixed, Error?:string, MessageId?:string}>}>
     */
    public function sendBulkTemplatedEmailAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{Source:string, Destination:array{ToAddresses?:array<string>, CcAddresses?:array<string>, BccAddresses?:array<string>}, Message:array{Subject:array{Data:string, Charset?:string}, Body:array{Text?:array{Data:string, Charset?:string}, Html?:array{Data:string, Charset?:string}}}, ReplyToAddresses?:array<string>, ReturnPath?:string, SourceArn?:string, ReturnPathArn?:string, Tags?:array<array{Name:string, Value:string}>, ConfigurationSetName?:string} $args
     * @return \AWS\Result<array{MessageId:string}>
     */
    public function sendEmail(array $args): \AWS\Result { }

    /**
     * @param array{Source:string, Destination:array{ToAddresses?:array<string>, CcAddresses?:array<string>, BccAddresses?:array<string>}, Message:array{Subject:array{Data:string, Charset?:string}, Body:array{Text?:array{Data:string, Charset?:string}, Html?:array{Data:string, Charset?:string}}}, ReplyToAddresses?:array<string>, ReturnPath?:string, SourceArn?:string, ReturnPathArn?:string, Tags?:array<array{Name:string, Value:string}>, ConfigurationSetName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MessageId:string}>
     */
    public function sendEmailAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Source?:string, Destinations?:array<string>, RawMessage:array{Data:string|resource|\Psr\Http\Message\StreamInterface}, FromArn?:string, SourceArn?:string, ReturnPathArn?:string, Tags?:array<array{Name:string, Value:string}>, ConfigurationSetName?:string} $args
     * @return \AWS\Result<array{MessageId:string}>
     */
    public function sendRawEmail(array $args): \AWS\Result { }

    /**
     * @param array{Source?:string, Destinations?:array<string>, RawMessage:array{Data:string|resource|\Psr\Http\Message\StreamInterface}, FromArn?:string, SourceArn?:string, ReturnPathArn?:string, Tags?:array<array{Name:string, Value:string}>, ConfigurationSetName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MessageId:string}>
     */
    public function sendRawEmailAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Source:string, Destination:array{ToAddresses?:array<string>, CcAddresses?:array<string>, BccAddresses?:array<string>}, ReplyToAddresses?:array<string>, ReturnPath?:string, SourceArn?:string, ReturnPathArn?:string, Tags?:array<array{Name:string, Value:string}>, ConfigurationSetName?:string, Template:string, TemplateArn?:string, TemplateData:string} $args
     * @return \AWS\Result<array{MessageId:string}>
     */
    public function sendTemplatedEmail(array $args): \AWS\Result { }

    /**
     * @param array{Source:string, Destination:array{ToAddresses?:array<string>, CcAddresses?:array<string>, BccAddresses?:array<string>}, ReplyToAddresses?:array<string>, ReturnPath?:string, SourceArn?:string, ReturnPathArn?:string, Tags?:array<array{Name:string, Value:string}>, ConfigurationSetName?:string, Template:string, TemplateArn?:string, TemplateData:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MessageId:string}>
     */
    public function sendTemplatedEmailAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleSetName?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function setActiveReceiptRuleSet(array $args = []): \AWS\Result { }

    /**
     * @param array{RuleSetName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function setActiveReceiptRuleSetAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Identity:string, DkimEnabled:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function setIdentityDkimEnabled(array $args): \AWS\Result { }

    /**
     * @param array{Identity:string, DkimEnabled:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function setIdentityDkimEnabledAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Identity:string, ForwardingEnabled:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function setIdentityFeedbackForwardingEnabled(array $args): \AWS\Result { }

    /**
     * @param array{Identity:string, ForwardingEnabled:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function setIdentityFeedbackForwardingEnabledAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Identity:string, NotificationType:"Bounce"|"Complaint"|"Delivery", Enabled:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function setIdentityHeadersInNotificationsEnabled(array $args): \AWS\Result { }

    /**
     * @param array{Identity:string, NotificationType:"Bounce"|"Complaint"|"Delivery", Enabled:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function setIdentityHeadersInNotificationsEnabledAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Identity:string, MailFromDomain?:string, BehaviorOnMXFailure?:"UseDefaultValue"|"RejectMessage"} $args
     * @return \AWS\Result<array{}>
     */
    public function setIdentityMailFromDomain(array $args): \AWS\Result { }

    /**
     * @param array{Identity:string, MailFromDomain?:string, BehaviorOnMXFailure?:"UseDefaultValue"|"RejectMessage"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function setIdentityMailFromDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Identity:string, NotificationType:"Bounce"|"Complaint"|"Delivery", SnsTopic?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function setIdentityNotificationTopic(array $args): \AWS\Result { }

    /**
     * @param array{Identity:string, NotificationType:"Bounce"|"Complaint"|"Delivery", SnsTopic?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function setIdentityNotificationTopicAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleSetName:string, RuleName:string, After?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function setReceiptRulePosition(array $args): \AWS\Result { }

    /**
     * @param array{RuleSetName:string, RuleName:string, After?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function setReceiptRulePositionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TemplateName:string, TemplateData:string} $args
     * @return \AWS\Result<array{RenderedTemplate?:string}>
     */
    public function testRenderTemplate(array $args): \AWS\Result { }

    /**
     * @param array{TemplateName:string, TemplateData:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RenderedTemplate?:string}>
     */
    public function testRenderTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Enabled?:bool} $args
     * @return \AWS\Result<void>
     */
    public function updateAccountSendingEnabled(array $args = []): \AWS\Result { }

    /**
     * @param array{Enabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateAccountSendingEnabledAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string, EventDestination:array{Name:string, Enabled?:bool, MatchingEventTypes:array<"send"|"reject"|"bounce"|"complaint"|"delivery"|"open"|"click"|"renderingFailure">, KinesisFirehoseDestination?:array{IAMRoleARN:string, DeliveryStreamARN:string}, CloudWatchDestination?:array{DimensionConfigurations:array<array{DimensionName:string, DimensionValueSource:"messageTag"|"emailHeader"|"linkTag", DefaultDimensionValue:string}>}, SNSDestination?:array{TopicARN:string}}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateConfigurationSetEventDestination(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string, EventDestination:array{Name:string, Enabled?:bool, MatchingEventTypes:array<"send"|"reject"|"bounce"|"complaint"|"delivery"|"open"|"click"|"renderingFailure">, KinesisFirehoseDestination?:array{IAMRoleARN:string, DeliveryStreamARN:string}, CloudWatchDestination?:array{DimensionConfigurations:array<array{DimensionName:string, DimensionValueSource:"messageTag"|"emailHeader"|"linkTag", DefaultDimensionValue:string}>}, SNSDestination?:array{TopicARN:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateConfigurationSetEventDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string, Enabled:bool} $args
     * @return \AWS\Result<void>
     */
    public function updateConfigurationSetReputationMetricsEnabled(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string, Enabled:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateConfigurationSetReputationMetricsEnabledAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string, Enabled:bool} $args
     * @return \AWS\Result<void>
     */
    public function updateConfigurationSetSendingEnabled(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string, Enabled:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateConfigurationSetSendingEnabledAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string, TrackingOptions:array{CustomRedirectDomain?:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateConfigurationSetTrackingOptions(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string, TrackingOptions:array{CustomRedirectDomain?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateConfigurationSetTrackingOptionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TemplateName:string, FromEmailAddress?:string, TemplateSubject?:string, TemplateContent?:string, SuccessRedirectionURL?:string, FailureRedirectionURL?:string} $args
     * @return \AWS\Result<void>
     */
    public function updateCustomVerificationEmailTemplate(array $args): \AWS\Result { }

    /**
     * @param array{TemplateName:string, FromEmailAddress?:string, TemplateSubject?:string, TemplateContent?:string, SuccessRedirectionURL?:string, FailureRedirectionURL?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateCustomVerificationEmailTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleSetName:string, Rule:array{Name:string, Enabled?:bool, TlsPolicy?:"Require"|"Optional", Recipients?:array<string>, Actions?:array<array{S3Action?:array{TopicArn?:string, BucketName:string, ObjectKeyPrefix?:string, KmsKeyArn?:string, IamRoleArn?:string}, BounceAction?:array{TopicArn?:string, SmtpReplyCode:string, StatusCode?:string, Message:string, Sender:string}, WorkmailAction?:array{TopicArn?:string, OrganizationArn:string}, LambdaAction?:array{TopicArn?:string, FunctionArn:string, InvocationType?:"Event"|"RequestResponse"}, StopAction?:array{Scope:"RuleSet", TopicArn?:string}, AddHeaderAction?:array{HeaderName:string, HeaderValue:string}, SNSAction?:array{TopicArn:string, Encoding?:"UTF-8"|"Base64"}, ConnectAction?:array{InstanceARN:string, IAMRoleARN:string}}>, ScanEnabled?:bool}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateReceiptRule(array $args): \AWS\Result { }

    /**
     * @param array{RuleSetName:string, Rule:array{Name:string, Enabled?:bool, TlsPolicy?:"Require"|"Optional", Recipients?:array<string>, Actions?:array<array{S3Action?:array{TopicArn?:string, BucketName:string, ObjectKeyPrefix?:string, KmsKeyArn?:string, IamRoleArn?:string}, BounceAction?:array{TopicArn?:string, SmtpReplyCode:string, StatusCode?:string, Message:string, Sender:string}, WorkmailAction?:array{TopicArn?:string, OrganizationArn:string}, LambdaAction?:array{TopicArn?:string, FunctionArn:string, InvocationType?:"Event"|"RequestResponse"}, StopAction?:array{Scope:"RuleSet", TopicArn?:string}, AddHeaderAction?:array{HeaderName:string, HeaderValue:string}, SNSAction?:array{TopicArn:string, Encoding?:"UTF-8"|"Base64"}, ConnectAction?:array{InstanceARN:string, IAMRoleARN:string}}>, ScanEnabled?:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateReceiptRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Template:array{TemplateName:string, SubjectPart?:string, TextPart?:string, HtmlPart?:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateTemplate(array $args): \AWS\Result { }

    /**
     * @param array{Template:array{TemplateName:string, SubjectPart?:string, TextPart?:string, HtmlPart?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Domain:string} $args
     * @return \AWS\Result<array{DkimTokens:array<string>}>
     */
    public function verifyDomainDkim(array $args): \AWS\Result { }

    /**
     * @param array{Domain:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DkimTokens:array<string>}>
     */
    public function verifyDomainDkimAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Domain:string} $args
     * @return \AWS\Result<array{VerificationToken:string}>
     */
    public function verifyDomainIdentity(array $args): \AWS\Result { }

    /**
     * @param array{Domain:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VerificationToken:string}>
     */
    public function verifyDomainIdentityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EmailAddress:string} $args
     * @return \AWS\Result<void>
     */
    public function verifyEmailAddress(array $args): \AWS\Result { }

    /**
     * @param array{EmailAddress:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function verifyEmailAddressAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EmailAddress:string} $args
     * @return \AWS\Result<array{}>
     */
    public function verifyEmailIdentity(array $args): \AWS\Result { }

    /**
     * @param array{EmailAddress:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function verifyEmailIdentityAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
