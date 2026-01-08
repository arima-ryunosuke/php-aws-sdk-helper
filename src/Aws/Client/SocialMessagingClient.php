<?php
namespace AWS\SocialMessaging;

class SocialMessagingClient
{
    /**
     * @param array{signupCallback?:array{accessToken:string}, setupFinalization?:array{associateInProgressToken:string, phoneNumbers:array<array{id:string, twoFactorPin:string, dataLocalizationRegion?:string, tags?:array<array{key:string, value?:string}>}>, phoneNumberParent?:string, waba?:array{id?:string, eventDestinations?:array<array{eventDestinationArn:string, roleArn?:string}>, tags?:array<array{key:string, value?:string}>}}} $args
     * @return \AWS\Result<array{signupCallbackResult?:array{associateInProgressToken?:string, linkedAccountsWithIncompleteSetup?:array<string, array{accountName?:string, registrationStatus?:"COMPLETE"|"INCOMPLETE", unregisteredWhatsAppPhoneNumbers?:array<array{arn:string, phoneNumber:string, phoneNumberId:string, metaPhoneNumberId:string, displayPhoneNumberName:string, displayPhoneNumber:string, qualityRating:string}>, wabaId?:string}>}, statusCode?:int}>
     */
    public function associateWhatsAppBusinessAccount(array $args = []): \AWS\Result { }

    /**
     * @param array{signupCallback?:array{accessToken:string}, setupFinalization?:array{associateInProgressToken:string, phoneNumbers:array<array{id:string, twoFactorPin:string, dataLocalizationRegion?:string, tags?:array<array{key:string, value?:string}>}>, phoneNumberParent?:string, waba?:array{id?:string, eventDestinations?:array<array{eventDestinationArn:string, roleArn?:string}>, tags?:array<array{key:string, value?:string}>}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{signupCallbackResult?:array{associateInProgressToken?:string, linkedAccountsWithIncompleteSetup?:array<string, array{accountName?:string, registrationStatus?:"COMPLETE"|"INCOMPLETE", unregisteredWhatsAppPhoneNumbers?:array<array{arn:string, phoneNumber:string, phoneNumberId:string, metaPhoneNumberId:string, displayPhoneNumberName:string, displayPhoneNumber:string, qualityRating:string}>, wabaId?:string}>}, statusCode?:int}>
     */
    public function associateWhatsAppBusinessAccountAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{mediaId:string, originationPhoneNumberId:string} $args
     * @return \AWS\Result<array{success?:bool}>
     */
    public function deleteWhatsAppMessageMedia(array $args): \AWS\Result { }

    /**
     * @param array{mediaId:string, originationPhoneNumberId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{success?:bool}>
     */
    public function deleteWhatsAppMessageMediaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateWhatsAppBusinessAccount(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateWhatsAppBusinessAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{account?:array{arn:string, id:string, wabaId:string, registrationStatus:"COMPLETE"|"INCOMPLETE", linkDate:int|string|\DateTimeInterface, wabaName:string, eventDestinations:array<array{eventDestinationArn:string, roleArn?:string}>, phoneNumbers:array<array{arn:string, phoneNumber:string, phoneNumberId:string, metaPhoneNumberId:string, displayPhoneNumberName:string, displayPhoneNumber:string, qualityRating:string}>}}>
     */
    public function getLinkedWhatsAppBusinessAccount(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{account?:array{arn:string, id:string, wabaId:string, registrationStatus:"COMPLETE"|"INCOMPLETE", linkDate:int|string|\DateTimeInterface, wabaName:string, eventDestinations:array<array{eventDestinationArn:string, roleArn?:string}>, phoneNumbers:array<array{arn:string, phoneNumber:string, phoneNumberId:string, metaPhoneNumberId:string, displayPhoneNumberName:string, displayPhoneNumber:string, qualityRating:string}>}}>
     */
    public function getLinkedWhatsAppBusinessAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{phoneNumber?:array{arn:string, phoneNumber:mixed, phoneNumberId:string, metaPhoneNumberId:string, displayPhoneNumberName:string, displayPhoneNumber:string, qualityRating:string}, linkedWhatsAppBusinessAccountId?:string}>
     */
    public function getLinkedWhatsAppBusinessAccountPhoneNumber(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{phoneNumber?:array{arn:string, phoneNumber:mixed, phoneNumberId:string, metaPhoneNumberId:string, displayPhoneNumberName:string, displayPhoneNumber:string, qualityRating:string}, linkedWhatsAppBusinessAccountId?:string}>
     */
    public function getLinkedWhatsAppBusinessAccountPhoneNumberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{mediaId:string, originationPhoneNumberId:string, metadataOnly?:bool, destinationS3PresignedUrl?:array{url:string, headers:array<string, string>}, destinationS3File?:array{bucketName:string, key:string}} $args
     * @return \AWS\Result<array{mimeType?:string, fileSize?:int}>
     */
    public function getWhatsAppMessageMedia(array $args): \AWS\Result { }

    /**
     * @param array{mediaId:string, originationPhoneNumberId:string, metadataOnly?:bool, destinationS3PresignedUrl?:array{url:string, headers:array<string, string>}, destinationS3File?:array{bucketName:string, key:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{mimeType?:string, fileSize?:int}>
     */
    public function getWhatsAppMessageMediaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{linkedAccounts?:array<array{arn:string, id:string, wabaId:string, registrationStatus:"COMPLETE"|"INCOMPLETE", linkDate:int|string|\DateTimeInterface, wabaName:string, eventDestinations:array<array{eventDestinationArn:string, roleArn?:string}>}>, nextToken?:string}>
     */
    public function listLinkedWhatsAppBusinessAccounts(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{linkedAccounts?:array<array{arn:string, id:string, wabaId:string, registrationStatus:"COMPLETE"|"INCOMPLETE", linkDate:int|string|\DateTimeInterface, wabaName:string, eventDestinations:array<array{eventDestinationArn:string, roleArn?:string}>}>, nextToken?:string}>
     */
    public function listLinkedWhatsAppBusinessAccountsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{statusCode?:int, tags?:array<array{key:string, value?:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{statusCode?:int, tags?:array<array{key:string, value?:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{originationPhoneNumberId:string, sourceS3PresignedUrl?:array{url:string, headers:array<string, string>}, sourceS3File?:array{bucketName:string, key:string}} $args
     * @return \AWS\Result<array{mediaId?:string}>
     */
    public function postWhatsAppMessageMedia(array $args): \AWS\Result { }

    /**
     * @param array{originationPhoneNumberId:string, sourceS3PresignedUrl?:array{url:string, headers:array<string, string>}, sourceS3File?:array{bucketName:string, key:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{mediaId?:string}>
     */
    public function postWhatsAppMessageMediaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, eventDestinations:array<array{eventDestinationArn:string, roleArn?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function putWhatsAppBusinessAccountEventDestinations(array $args): \AWS\Result { }

    /**
     * @param array{id:string, eventDestinations:array<array{eventDestinationArn:string, roleArn?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putWhatsAppBusinessAccountEventDestinationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{originationPhoneNumberId:string, message:string|resource|\Psr\Http\Message\StreamInterface, metaApiVersion:string} $args
     * @return \AWS\Result<array{messageId?:string}>
     */
    public function sendWhatsAppMessage(array $args): \AWS\Result { }

    /**
     * @param array{originationPhoneNumberId:string, message:string|resource|\Psr\Http\Message\StreamInterface, metaApiVersion:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{messageId?:string}>
     */
    public function sendWhatsAppMessageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags:array<array{key:string, value?:string}>} $args
     * @return \AWS\Result<array{statusCode?:int}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags:array<array{key:string, value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{statusCode?:int}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \AWS\Result<array{statusCode?:int}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{statusCode?:int}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
