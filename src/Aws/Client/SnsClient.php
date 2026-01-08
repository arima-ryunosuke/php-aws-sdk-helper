<?php
namespace AWS\Sns;

class SnsClient
{
    /**
     * @param array{TopicArn:string, Label:string, AWSAccountId:array<string>, ActionName:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function addPermission(array $args): \AWS\Result { }

    /**
     * @param array{TopicArn:string, Label:string, AWSAccountId:array<string>, ActionName:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function addPermissionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{phoneNumber:string} $args
     * @return \AWS\Result<array{isOptedOut?:bool}>
     */
    public function checkIfPhoneNumberIsOptedOut(array $args): \AWS\Result { }

    /**
     * @param array{phoneNumber:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{isOptedOut?:bool}>
     */
    public function checkIfPhoneNumberIsOptedOutAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TopicArn:string, Token:string, AuthenticateOnUnsubscribe?:string} $args
     * @return \AWS\Result<array{SubscriptionArn?:string}>
     */
    public function confirmSubscription(array $args): \AWS\Result { }

    /**
     * @param array{TopicArn:string, Token:string, AuthenticateOnUnsubscribe?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SubscriptionArn?:string}>
     */
    public function confirmSubscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Platform:string, Attributes:array<string, string>} $args
     * @return \AWS\Result<array{PlatformApplicationArn?:string}>
     */
    public function createPlatformApplication(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Platform:string, Attributes:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{PlatformApplicationArn?:string}>
     */
    public function createPlatformApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PlatformApplicationArn:string, Token:string, CustomUserData?:string, Attributes?:array<string, string>} $args
     * @return \AWS\Result<array{EndpointArn?:string}>
     */
    public function createPlatformEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{PlatformApplicationArn:string, Token:string, CustomUserData?:string, Attributes?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{EndpointArn?:string}>
     */
    public function createPlatformEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PhoneNumber:string, LanguageCode?:"en-US"|"en-GB"|"es-419"|"es-ES"|"de-DE"|"fr-CA"|"fr-FR"|"it-IT"|"ja-JP"|"pt-BR"|"kr-KR"|"zh-CN"|"zh-TW"} $args
     * @return \AWS\Result<array{}>
     */
    public function createSMSSandboxPhoneNumber(array $args): \AWS\Result { }

    /**
     * @param array{PhoneNumber:string, LanguageCode?:"en-US"|"en-GB"|"es-419"|"es-ES"|"de-DE"|"fr-CA"|"fr-FR"|"it-IT"|"ja-JP"|"pt-BR"|"kr-KR"|"zh-CN"|"zh-TW"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createSMSSandboxPhoneNumberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Attributes?:array<string, string>, Tags?:array<array{Key:string, Value:string}>, DataProtectionPolicy?:string} $args
     * @return \AWS\Result<array{TopicArn?:string}>
     */
    public function createTopic(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Attributes?:array<string, string>, Tags?:array<array{Key:string, Value:string}>, DataProtectionPolicy?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TopicArn?:string}>
     */
    public function createTopicAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EndpointArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{EndpointArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PlatformApplicationArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deletePlatformApplication(array $args): \AWS\Result { }

    /**
     * @param array{PlatformApplicationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deletePlatformApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PhoneNumber:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteSMSSandboxPhoneNumber(array $args): \AWS\Result { }

    /**
     * @param array{PhoneNumber:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteSMSSandboxPhoneNumberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TopicArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteTopic(array $args): \AWS\Result { }

    /**
     * @param array{TopicArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteTopicAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{DataProtectionPolicy?:string}>
     */
    public function getDataProtectionPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DataProtectionPolicy?:string}>
     */
    public function getDataProtectionPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EndpointArn:string} $args
     * @return \AWS\Result<array{Attributes?:array<string, string>}>
     */
    public function getEndpointAttributes(array $args): \AWS\Result { }

    /**
     * @param array{EndpointArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attributes?:array<string, string>}>
     */
    public function getEndpointAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PlatformApplicationArn:string} $args
     * @return \AWS\Result<array{Attributes?:array<string, string>}>
     */
    public function getPlatformApplicationAttributes(array $args): \AWS\Result { }

    /**
     * @param array{PlatformApplicationArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attributes?:array<string, string>}>
     */
    public function getPlatformApplicationAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{attributes?:array<string>} $args
     * @return \AWS\Result<array{attributes?:array<string, string>}>
     */
    public function getSMSAttributes(array $args = []): \AWS\Result { }

    /**
     * @param array{attributes?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{attributes?:array<string, string>}>
     */
    public function getSMSAttributesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{IsInSandbox:bool}>
     */
    public function getSMSSandboxAccountStatus(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{IsInSandbox:bool}>
     */
    public function getSMSSandboxAccountStatusAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SubscriptionArn:string} $args
     * @return \AWS\Result<array{Attributes?:array<string, string>}>
     */
    public function getSubscriptionAttributes(array $args): \AWS\Result { }

    /**
     * @param array{SubscriptionArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attributes?:array<string, string>}>
     */
    public function getSubscriptionAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TopicArn:string} $args
     * @return \AWS\Result<array{Attributes?:array<string, string>}>
     */
    public function getTopicAttributes(array $args): \AWS\Result { }

    /**
     * @param array{TopicArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attributes?:array<string, string>}>
     */
    public function getTopicAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PlatformApplicationArn:string, NextToken?:string} $args
     * @return \AWS\Result<array{Endpoints?:array<array{EndpointArn?:string, Attributes?:array<string, string>}>, NextToken?:string}>
     */
    public function listEndpointsByPlatformApplication(array $args): \AWS\Result { }

    /**
     * @param array{PlatformApplicationArn:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Endpoints?:array<array{EndpointArn?:string, Attributes?:array<string, string>}>, NextToken?:string}>
     */
    public function listEndpointsByPlatformApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, PhoneNumbers?:array<array{CreatedAt?:int|string|\DateTimeInterface, PhoneNumber?:string, Status?:string, Iso2CountryCode?:string, RouteType?:"Transactional"|"Promotional"|"Premium", NumberCapabilities?:array<"SMS"|"MMS"|"VOICE">}>}>
     */
    public function listOriginationNumbers(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, PhoneNumbers?:array<array{CreatedAt?:int|string|\DateTimeInterface, PhoneNumber?:string, Status?:string, Iso2CountryCode?:string, RouteType?:"Transactional"|"Promotional"|"Premium", NumberCapabilities?:array<"SMS"|"MMS"|"VOICE">}>}>
     */
    public function listOriginationNumbersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string} $args
     * @return \AWS\Result<array{phoneNumbers?:array<string>, nextToken?:string}>
     */
    public function listPhoneNumbersOptedOut(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{phoneNumbers?:array<string>, nextToken?:string}>
     */
    public function listPhoneNumbersOptedOutAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string} $args
     * @return \AWS\Result<array{PlatformApplications?:array<array{PlatformApplicationArn?:string, Attributes?:array<string, string>}>, NextToken?:string}>
     */
    public function listPlatformApplications(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PlatformApplications?:array<array{PlatformApplicationArn?:string, Attributes?:array<string, string>}>, NextToken?:string}>
     */
    public function listPlatformApplicationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{PhoneNumbers:array<array{PhoneNumber?:string, Status?:"Pending"|"Verified"}>, NextToken?:string}>
     */
    public function listSMSSandboxPhoneNumbers(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumbers:array<array{PhoneNumber?:string, Status?:"Pending"|"Verified"}>, NextToken?:string}>
     */
    public function listSMSSandboxPhoneNumbersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string} $args
     * @return \AWS\Result<array{Subscriptions?:array<array{SubscriptionArn?:string, Owner?:string, Protocol?:string, Endpoint?:string, TopicArn?:string}>, NextToken?:string}>
     */
    public function listSubscriptions(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Subscriptions?:array<array{SubscriptionArn?:string, Owner?:string, Protocol?:string, Endpoint?:string, TopicArn?:string}>, NextToken?:string}>
     */
    public function listSubscriptionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TopicArn:string, NextToken?:string} $args
     * @return \AWS\Result<array{Subscriptions?:array<array{SubscriptionArn?:string, Owner?:string, Protocol?:string, Endpoint?:string, TopicArn?:string}>, NextToken?:string}>
     */
    public function listSubscriptionsByTopic(array $args): \AWS\Result { }

    /**
     * @param array{TopicArn:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Subscriptions?:array<array{SubscriptionArn?:string, Owner?:string, Protocol?:string, Endpoint?:string, TopicArn?:string}>, NextToken?:string}>
     */
    public function listSubscriptionsByTopicAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string} $args
     * @return \AWS\Result<array{Topics?:array<array{TopicArn?:string}>, NextToken?:string}>
     */
    public function listTopics(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Topics?:array<array{TopicArn?:string}>, NextToken?:string}>
     */
    public function listTopicsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{phoneNumber:string} $args
     * @return \AWS\Result<array{}>
     */
    public function optInPhoneNumber(array $args): \AWS\Result { }

    /**
     * @param array{phoneNumber:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function optInPhoneNumberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TopicArn?:string, TargetArn?:string, PhoneNumber?:string, Message:string, Subject?:string, MessageStructure?:string, MessageAttributes?:array<string, array{DataType:string, StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface}>, MessageDeduplicationId?:string, MessageGroupId?:string} $args
     * @return \AWS\Result<array{MessageId?:string, SequenceNumber?:string}>
     */
    public function publish(array $args): \AWS\Result { }

    /**
     * @param array{TopicArn?:string, TargetArn?:string, PhoneNumber?:string, Message:string, Subject?:string, MessageStructure?:string, MessageAttributes?:array<string, array{DataType:string, StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface}>, MessageDeduplicationId?:string, MessageGroupId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MessageId?:string, SequenceNumber?:string}>
     */
    public function publishAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TopicArn:string, PublishBatchRequestEntries:array<array{Id:string, Message:string, Subject?:string, MessageStructure?:string, MessageAttributes?:array<string, array{DataType:string, StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface}>, MessageDeduplicationId?:string, MessageGroupId?:string}>} $args
     * @return \AWS\Result<array{Successful?:array<array{Id?:string, MessageId?:string, SequenceNumber?:string}>, Failed?:array<array{Id:string, Code:string, Message?:string, SenderFault:bool}>}>
     */
    public function publishBatch(array $args): \AWS\Result { }

    /**
     * @param array{TopicArn:string, PublishBatchRequestEntries:array<array{Id:string, Message:string, Subject?:string, MessageStructure?:string, MessageAttributes?:array<string, array{DataType:string, StringValue?:string, BinaryValue?:string|resource|\Psr\Http\Message\StreamInterface}>, MessageDeduplicationId?:string, MessageGroupId?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Successful?:array<array{Id?:string, MessageId?:string, SequenceNumber?:string}>, Failed?:array<array{Id:string, Code:string, Message?:string, SenderFault:bool}>}>
     */
    public function publishBatchAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, DataProtectionPolicy:string} $args
     * @return \AWS\Result<void>
     */
    public function putDataProtectionPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, DataProtectionPolicy:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putDataProtectionPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TopicArn:string, Label:string} $args
     * @return \AWS\Result<void>
     */
    public function removePermission(array $args): \AWS\Result { }

    /**
     * @param array{TopicArn:string, Label:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function removePermissionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{EndpointArn:string, Attributes:array<string, string>} $args
     * @return \AWS\Result<void>
     */
    public function setEndpointAttributes(array $args): \AWS\Result { }

    /**
     * @param array{EndpointArn:string, Attributes:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function setEndpointAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PlatformApplicationArn:string, Attributes:array<string, string>} $args
     * @return \AWS\Result<void>
     */
    public function setPlatformApplicationAttributes(array $args): \AWS\Result { }

    /**
     * @param array{PlatformApplicationArn:string, Attributes:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function setPlatformApplicationAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{attributes:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function setSMSAttributes(array $args): \AWS\Result { }

    /**
     * @param array{attributes:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function setSMSAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SubscriptionArn:string, AttributeName:string, AttributeValue?:string} $args
     * @return \AWS\Result<void>
     */
    public function setSubscriptionAttributes(array $args): \AWS\Result { }

    /**
     * @param array{SubscriptionArn:string, AttributeName:string, AttributeValue?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function setSubscriptionAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TopicArn:string, AttributeName:string, AttributeValue?:string} $args
     * @return \AWS\Result<void>
     */
    public function setTopicAttributes(array $args): \AWS\Result { }

    /**
     * @param array{TopicArn:string, AttributeName:string, AttributeValue?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function setTopicAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TopicArn:string, Protocol:string, Endpoint?:string, Attributes?:array<string, string>, ReturnSubscriptionArn?:bool} $args
     * @return \AWS\Result<array{SubscriptionArn?:string}>
     */
    public function subscribe(array $args): \AWS\Result { }

    /**
     * @param array{TopicArn:string, Protocol:string, Endpoint?:string, Attributes?:array<string, string>, ReturnSubscriptionArn?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{SubscriptionArn?:string}>
     */
    public function subscribeAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{SubscriptionArn:string} $args
     * @return \AWS\Result<void>
     */
    public function unsubscribe(array $args): \AWS\Result { }

    /**
     * @param array{SubscriptionArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function unsubscribeAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{PhoneNumber:string, OneTimePassword:string} $args
     * @return \AWS\Result<array{}>
     */
    public function verifySMSSandboxPhoneNumber(array $args): \AWS\Result { }

    /**
     * @param array{PhoneNumber:string, OneTimePassword:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function verifySMSSandboxPhoneNumberAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
