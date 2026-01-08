<?php
namespace AWS\ChimeSDKVoice;

class ChimeSDKVoiceClient
{
    /**
     * @param array{VoiceConnectorId:string, E164PhoneNumbers:array<string>, ForceAssociate?:bool} $args
     * @return \AWS\Result<array{PhoneNumberErrors?:array<array{PhoneNumberId?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist"|"Gone", ErrorMessage?:string}>}>
     */
    public function associatePhoneNumbersWithVoiceConnector(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string, E164PhoneNumbers:array<string>, ForceAssociate?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumberErrors?:array<array{PhoneNumberId?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist"|"Gone", ErrorMessage?:string}>}>
     */
    public function associatePhoneNumbersWithVoiceConnectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorGroupId:string, E164PhoneNumbers:array<string>, ForceAssociate?:bool} $args
     * @return \AWS\Result<array{PhoneNumberErrors?:array<array{PhoneNumberId?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist"|"Gone", ErrorMessage?:string}>}>
     */
    public function associatePhoneNumbersWithVoiceConnectorGroup(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorGroupId:string, E164PhoneNumbers:array<string>, ForceAssociate?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumberErrors?:array<array{PhoneNumberId?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist"|"Gone", ErrorMessage?:string}>}>
     */
    public function associatePhoneNumbersWithVoiceConnectorGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PhoneNumberIds:array<string>} $args
     * @return \AWS\Result<array{PhoneNumberErrors?:array<array{PhoneNumberId?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist"|"Gone", ErrorMessage?:string}>}>
     */
    public function batchDeletePhoneNumber(array $args): \AWS\Result { }

    /**
     * @param array{PhoneNumberIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumberErrors?:array<array{PhoneNumberId?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist"|"Gone", ErrorMessage?:string}>}>
     */
    public function batchDeletePhoneNumberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UpdatePhoneNumberRequestItems:array<array{PhoneNumberId:string, ProductType?:"VoiceConnector"|"SipMediaApplicationDialIn", CallingName?:string, Name?:string}>} $args
     * @return \AWS\Result<array{PhoneNumberErrors?:array<array{PhoneNumberId?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist"|"Gone", ErrorMessage?:string}>}>
     */
    public function batchUpdatePhoneNumber(array $args): \AWS\Result { }

    /**
     * @param array{UpdatePhoneNumberRequestItems:array<array{PhoneNumberId:string, ProductType?:"VoiceConnector"|"SipMediaApplicationDialIn", CallingName?:string, Name?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumberErrors?:array<array{PhoneNumberId?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist"|"Gone", ErrorMessage?:string}>}>
     */
    public function batchUpdatePhoneNumberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProductType:"VoiceConnector"|"SipMediaApplicationDialIn", E164PhoneNumbers:array<string>, Name?:string} $args
     * @return \AWS\Result<array{PhoneNumberOrder?:array{PhoneNumberOrderId?:string, ProductType?:"VoiceConnector"|"SipMediaApplicationDialIn", Status?:"Processing"|"Successful"|"Failed"|"Partial"|"PendingDocuments"|"Submitted"|"FOC"|"ChangeRequested"|"Exception"|"CancelRequested"|"Cancelled", OrderType?:"New"|"Porting", OrderedPhoneNumbers?:array<array{E164PhoneNumber?:string, Status?:"Processing"|"Acquired"|"Failed"}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function createPhoneNumberOrder(array $args): \AWS\Result { }

    /**
     * @param array{ProductType:"VoiceConnector"|"SipMediaApplicationDialIn", E164PhoneNumbers:array<string>, Name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumberOrder?:array{PhoneNumberOrderId?:string, ProductType?:"VoiceConnector"|"SipMediaApplicationDialIn", Status?:"Processing"|"Successful"|"Failed"|"Partial"|"PendingDocuments"|"Submitted"|"FOC"|"ChangeRequested"|"Exception"|"CancelRequested"|"Cancelled", OrderType?:"New"|"Porting", OrderedPhoneNumbers?:array<array{E164PhoneNumber?:string, Status?:"Processing"|"Acquired"|"Failed"}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function createPhoneNumberOrderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string, ParticipantPhoneNumbers:array<string>, Name?:string, ExpiryMinutes?:int, Capabilities:array<"Voice"|"SMS">, NumberSelectionBehavior?:"PreferSticky"|"AvoidSticky", GeoMatchLevel?:"Country"|"AreaCode", GeoMatchParams?:array{Country:string, AreaCode:string}} $args
     * @return \AWS\Result<array{ProxySession?:array{VoiceConnectorId?:string, ProxySessionId?:string, Name?:string, Status?:"Open"|"InProgress"|"Closed", ExpiryMinutes?:int, Capabilities?:array<"Voice"|"SMS">, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, EndedTimestamp?:int|string|\DateTimeInterface, Participants?:array<array{PhoneNumber?:string, ProxyPhoneNumber?:string}>, NumberSelectionBehavior?:"PreferSticky"|"AvoidSticky", GeoMatchLevel?:"Country"|"AreaCode", GeoMatchParams?:array{Country:string, AreaCode:string}}}>
     */
    public function createProxySession(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string, ParticipantPhoneNumbers:array<string>, Name?:string, ExpiryMinutes?:int, Capabilities:array<"Voice"|"SMS">, NumberSelectionBehavior?:"PreferSticky"|"AvoidSticky", GeoMatchLevel?:"Country"|"AreaCode", GeoMatchParams?:array{Country:string, AreaCode:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProxySession?:array{VoiceConnectorId?:string, ProxySessionId?:string, Name?:string, Status?:"Open"|"InProgress"|"Closed", ExpiryMinutes?:int, Capabilities?:array<"Voice"|"SMS">, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, EndedTimestamp?:int|string|\DateTimeInterface, Participants?:array<array{PhoneNumber?:string, ProxyPhoneNumber?:string}>, NumberSelectionBehavior?:"PreferSticky"|"AvoidSticky", GeoMatchLevel?:"Country"|"AreaCode", GeoMatchParams?:array{Country:string, AreaCode:string}}}>
     */
    public function createProxySessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AwsRegion:string, Name:string, Endpoints:array<array{LambdaArn?:string}>, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{SipMediaApplication?:array{SipMediaApplicationId?:string, AwsRegion?:string, Name?:string, Endpoints?:array<array{LambdaArn?:string}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, SipMediaApplicationArn?:string}}>
     */
    public function createSipMediaApplication(array $args): \AWS\Result { }

    /**
     * @param array{AwsRegion:string, Name:string, Endpoints:array<array{LambdaArn?:string}>, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{SipMediaApplication?:array{SipMediaApplicationId?:string, AwsRegion?:string, Name?:string, Endpoints?:array<array{LambdaArn?:string}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, SipMediaApplicationArn?:string}}>
     */
    public function createSipMediaApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FromPhoneNumber:string, ToPhoneNumber:string, SipMediaApplicationId:string, SipHeaders?:array<string, string>, ArgumentsMap?:array<string, string>} $args
     * @return \AWS\Result<array{SipMediaApplicationCall?:array{TransactionId?:string}}>
     */
    public function createSipMediaApplicationCall(array $args): \AWS\Result { }

    /**
     * @param array{FromPhoneNumber:string, ToPhoneNumber:string, SipMediaApplicationId:string, SipHeaders?:array<string, string>, ArgumentsMap?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{SipMediaApplicationCall?:array{TransactionId?:string}}>
     */
    public function createSipMediaApplicationCallAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, TriggerType:"ToPhoneNumber"|"RequestUriHostname", TriggerValue:string, Disabled?:bool, TargetApplications?:array<array{SipMediaApplicationId?:string, Priority?:int, AwsRegion?:string}>} $args
     * @return \AWS\Result<array{SipRule?:array{SipRuleId?:string, Name?:string, Disabled?:bool, TriggerType?:"ToPhoneNumber"|"RequestUriHostname", TriggerValue?:string, TargetApplications?:array<array{SipMediaApplicationId?:string, Priority?:int, AwsRegion?:string}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function createSipRule(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, TriggerType:"ToPhoneNumber"|"RequestUriHostname", TriggerValue:string, Disabled?:bool, TargetApplications?:array<array{SipMediaApplicationId?:string, Priority?:int, AwsRegion?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{SipRule?:array{SipRuleId?:string, Name?:string, Disabled?:bool, TriggerType?:"ToPhoneNumber"|"RequestUriHostname", TriggerValue?:string, TargetApplications?:array<array{SipMediaApplicationId?:string, Priority?:int, AwsRegion?:string}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function createSipRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, AwsRegion?:"us-east-1"|"us-west-2"|"ca-central-1"|"eu-central-1"|"eu-west-1"|"eu-west-2"|"ap-northeast-2"|"ap-northeast-1"|"ap-southeast-1"|"ap-southeast-2", RequireEncryption:bool, Tags?:array<array{Key:string, Value:string}>, IntegrationType?:"CONNECT_CALL_TRANSFER_CONNECTOR"|"CONNECT_ANALYTICS_CONNECTOR"} $args
     * @return \AWS\Result<array{VoiceConnector?:array{VoiceConnectorId?:string, AwsRegion?:"us-east-1"|"us-west-2"|"ca-central-1"|"eu-central-1"|"eu-west-1"|"eu-west-2"|"ap-northeast-2"|"ap-northeast-1"|"ap-southeast-1"|"ap-southeast-2", Name?:string, OutboundHostName?:string, RequireEncryption?:bool, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, VoiceConnectorArn?:string, IntegrationType?:"CONNECT_CALL_TRANSFER_CONNECTOR"|"CONNECT_ANALYTICS_CONNECTOR"}}>
     */
    public function createVoiceConnector(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, AwsRegion?:"us-east-1"|"us-west-2"|"ca-central-1"|"eu-central-1"|"eu-west-1"|"eu-west-2"|"ap-northeast-2"|"ap-northeast-1"|"ap-southeast-1"|"ap-southeast-2", RequireEncryption:bool, Tags?:array<array{Key:string, Value:string}>, IntegrationType?:"CONNECT_CALL_TRANSFER_CONNECTOR"|"CONNECT_ANALYTICS_CONNECTOR"} $args
     * @return \GuzzleHttp\Promise\Promise<array{VoiceConnector?:array{VoiceConnectorId?:string, AwsRegion?:"us-east-1"|"us-west-2"|"ca-central-1"|"eu-central-1"|"eu-west-1"|"eu-west-2"|"ap-northeast-2"|"ap-northeast-1"|"ap-southeast-1"|"ap-southeast-2", Name?:string, OutboundHostName?:string, RequireEncryption?:bool, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, VoiceConnectorArn?:string, IntegrationType?:"CONNECT_CALL_TRANSFER_CONNECTOR"|"CONNECT_ANALYTICS_CONNECTOR"}}>
     */
    public function createVoiceConnectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, VoiceConnectorItems?:array<array{VoiceConnectorId:string, Priority:int}>} $args
     * @return \AWS\Result<array{VoiceConnectorGroup?:array{VoiceConnectorGroupId?:string, Name?:string, VoiceConnectorItems?:array<array{VoiceConnectorId:string, Priority:int}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, VoiceConnectorGroupArn?:string}}>
     */
    public function createVoiceConnectorGroup(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, VoiceConnectorItems?:array<array{VoiceConnectorId:string, Priority:int}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{VoiceConnectorGroup?:array{VoiceConnectorGroupId?:string, Name?:string, VoiceConnectorItems?:array<array{VoiceConnectorId:string, Priority:int}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, VoiceConnectorGroupArn?:string}}>
     */
    public function createVoiceConnectorGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SpeakerSearchTaskId:string} $args
     * @return \AWS\Result<array{VoiceProfile?:array{VoiceProfileId?:string, VoiceProfileArn?:string, VoiceProfileDomainId?:string, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, ExpirationTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function createVoiceProfile(array $args): \AWS\Result { }

    /**
     * @param array{SpeakerSearchTaskId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VoiceProfile?:array{VoiceProfileId?:string, VoiceProfileArn?:string, VoiceProfileDomainId?:string, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, ExpirationTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function createVoiceProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Description?:string, ServerSideEncryptionConfiguration:array{KmsKeyArn:string}, ClientRequestToken?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{VoiceProfileDomain?:array{VoiceProfileDomainId?:string, VoiceProfileDomainArn?:string, Name?:string, Description?:string, ServerSideEncryptionConfiguration?:array{KmsKeyArn:string}, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function createVoiceProfileDomain(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, ServerSideEncryptionConfiguration:array{KmsKeyArn:string}, ClientRequestToken?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{VoiceProfileDomain?:array{VoiceProfileDomainId?:string, VoiceProfileDomainArn?:string, Name?:string, Description?:string, ServerSideEncryptionConfiguration?:array{KmsKeyArn:string}, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function createVoiceProfileDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PhoneNumberId:string} $args
     * @return \AWS\Result<void>
     */
    public function deletePhoneNumber(array $args): \AWS\Result { }

    /**
     * @param array{PhoneNumberId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deletePhoneNumberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string, ProxySessionId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteProxySession(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string, ProxySessionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteProxySessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SipMediaApplicationId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteSipMediaApplication(array $args): \AWS\Result { }

    /**
     * @param array{SipMediaApplicationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteSipMediaApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SipRuleId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteSipRule(array $args): \AWS\Result { }

    /**
     * @param array{SipRuleId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteSipRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteVoiceConnector(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteVoiceConnectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteVoiceConnectorEmergencyCallingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteVoiceConnectorEmergencyCallingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteVoiceConnectorExternalSystemsConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteVoiceConnectorExternalSystemsConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorGroupId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteVoiceConnectorGroup(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorGroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteVoiceConnectorGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteVoiceConnectorOrigination(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteVoiceConnectorOriginationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteVoiceConnectorProxy(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteVoiceConnectorProxyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteVoiceConnectorStreamingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteVoiceConnectorStreamingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteVoiceConnectorTermination(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteVoiceConnectorTerminationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string, Usernames:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function deleteVoiceConnectorTerminationCredentials(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string, Usernames:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteVoiceConnectorTerminationCredentialsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceProfileId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteVoiceProfile(array $args): \AWS\Result { }

    /**
     * @param array{VoiceProfileId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteVoiceProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceProfileDomainId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteVoiceProfileDomain(array $args): \AWS\Result { }

    /**
     * @param array{VoiceProfileDomainId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteVoiceProfileDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string, E164PhoneNumbers:array<string>} $args
     * @return \AWS\Result<array{PhoneNumberErrors?:array<array{PhoneNumberId?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist"|"Gone", ErrorMessage?:string}>}>
     */
    public function disassociatePhoneNumbersFromVoiceConnector(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string, E164PhoneNumbers:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumberErrors?:array<array{PhoneNumberId?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist"|"Gone", ErrorMessage?:string}>}>
     */
    public function disassociatePhoneNumbersFromVoiceConnectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorGroupId:string, E164PhoneNumbers:array<string>} $args
     * @return \AWS\Result<array{PhoneNumberErrors?:array<array{PhoneNumberId?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist"|"Gone", ErrorMessage?:string}>}>
     */
    public function disassociatePhoneNumbersFromVoiceConnectorGroup(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorGroupId:string, E164PhoneNumbers:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumberErrors?:array<array{PhoneNumberId?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist"|"Gone", ErrorMessage?:string}>}>
     */
    public function disassociatePhoneNumbersFromVoiceConnectorGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{VoiceConnector?:array{CdrBucket?:string}}>
     */
    public function getGlobalSettings(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{VoiceConnector?:array{CdrBucket?:string}}>
     */
    public function getGlobalSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PhoneNumberId:string} $args
     * @return \AWS\Result<array{PhoneNumber?:array{PhoneNumberId?:string, E164PhoneNumber?:string, Country?:string, Type?:"Local"|"TollFree", ProductType?:"VoiceConnector"|"SipMediaApplicationDialIn", Status?:"Cancelled"|"PortinCancelRequested"|"PortinInProgress"|"AcquireInProgress"|"AcquireFailed"|"Unassigned"|"Assigned"|"ReleaseInProgress"|"DeleteInProgress"|"ReleaseFailed"|"DeleteFailed", Capabilities?:array{InboundCall?:bool, OutboundCall?:bool, InboundSMS?:bool, OutboundSMS?:bool, InboundMMS?:bool, OutboundMMS?:bool}, Associations?:array<array{Value?:string, Name?:"VoiceConnectorId"|"VoiceConnectorGroupId"|"SipRuleId", AssociatedTimestamp?:int|string|\DateTimeInterface}>, CallingName?:string, CallingNameStatus?:"Unassigned"|"UpdateInProgress"|"UpdateSucceeded"|"UpdateFailed", CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, DeletionTimestamp?:int|string|\DateTimeInterface, OrderId?:string, Name?:string}}>
     */
    public function getPhoneNumber(array $args): \AWS\Result { }

    /**
     * @param array{PhoneNumberId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumber?:array{PhoneNumberId?:string, E164PhoneNumber?:string, Country?:string, Type?:"Local"|"TollFree", ProductType?:"VoiceConnector"|"SipMediaApplicationDialIn", Status?:"Cancelled"|"PortinCancelRequested"|"PortinInProgress"|"AcquireInProgress"|"AcquireFailed"|"Unassigned"|"Assigned"|"ReleaseInProgress"|"DeleteInProgress"|"ReleaseFailed"|"DeleteFailed", Capabilities?:array{InboundCall?:bool, OutboundCall?:bool, InboundSMS?:bool, OutboundSMS?:bool, InboundMMS?:bool, OutboundMMS?:bool}, Associations?:array<array{Value?:string, Name?:"VoiceConnectorId"|"VoiceConnectorGroupId"|"SipRuleId", AssociatedTimestamp?:int|string|\DateTimeInterface}>, CallingName?:string, CallingNameStatus?:"Unassigned"|"UpdateInProgress"|"UpdateSucceeded"|"UpdateFailed", CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, DeletionTimestamp?:int|string|\DateTimeInterface, OrderId?:string, Name?:string}}>
     */
    public function getPhoneNumberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PhoneNumberOrderId:string} $args
     * @return \AWS\Result<array{PhoneNumberOrder?:array{PhoneNumberOrderId?:string, ProductType?:"VoiceConnector"|"SipMediaApplicationDialIn", Status?:"Processing"|"Successful"|"Failed"|"Partial"|"PendingDocuments"|"Submitted"|"FOC"|"ChangeRequested"|"Exception"|"CancelRequested"|"Cancelled", OrderType?:"New"|"Porting", OrderedPhoneNumbers?:array<array{E164PhoneNumber?:string, Status?:"Processing"|"Acquired"|"Failed"}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function getPhoneNumberOrder(array $args): \AWS\Result { }

    /**
     * @param array{PhoneNumberOrderId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumberOrder?:array{PhoneNumberOrderId?:string, ProductType?:"VoiceConnector"|"SipMediaApplicationDialIn", Status?:"Processing"|"Successful"|"Failed"|"Partial"|"PendingDocuments"|"Submitted"|"FOC"|"ChangeRequested"|"Exception"|"CancelRequested"|"Cancelled", OrderType?:"New"|"Porting", OrderedPhoneNumbers?:array<array{E164PhoneNumber?:string, Status?:"Processing"|"Acquired"|"Failed"}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function getPhoneNumberOrderAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{CallingName?:string, CallingNameUpdatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function getPhoneNumberSettings(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{CallingName?:string, CallingNameUpdatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function getPhoneNumberSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string, ProxySessionId:string} $args
     * @return \AWS\Result<array{ProxySession?:array{VoiceConnectorId?:string, ProxySessionId?:string, Name?:string, Status?:"Open"|"InProgress"|"Closed", ExpiryMinutes?:int, Capabilities?:array<"Voice"|"SMS">, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, EndedTimestamp?:int|string|\DateTimeInterface, Participants?:array<array{PhoneNumber?:string, ProxyPhoneNumber?:string}>, NumberSelectionBehavior?:"PreferSticky"|"AvoidSticky", GeoMatchLevel?:"Country"|"AreaCode", GeoMatchParams?:array{Country:string, AreaCode:string}}}>
     */
    public function getProxySession(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string, ProxySessionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProxySession?:array{VoiceConnectorId?:string, ProxySessionId?:string, Name?:string, Status?:"Open"|"InProgress"|"Closed", ExpiryMinutes?:int, Capabilities?:array<"Voice"|"SMS">, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, EndedTimestamp?:int|string|\DateTimeInterface, Participants?:array<array{PhoneNumber?:string, ProxyPhoneNumber?:string}>, NumberSelectionBehavior?:"PreferSticky"|"AvoidSticky", GeoMatchLevel?:"Country"|"AreaCode", GeoMatchParams?:array{Country:string, AreaCode:string}}}>
     */
    public function getProxySessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SipMediaApplicationId:string} $args
     * @return \AWS\Result<array{SipMediaApplication?:array{SipMediaApplicationId?:string, AwsRegion?:string, Name?:string, Endpoints?:array<array{LambdaArn?:string}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, SipMediaApplicationArn?:string}}>
     */
    public function getSipMediaApplication(array $args): \AWS\Result { }

    /**
     * @param array{SipMediaApplicationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SipMediaApplication?:array{SipMediaApplicationId?:string, AwsRegion?:string, Name?:string, Endpoints?:array<array{LambdaArn?:string}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, SipMediaApplicationArn?:string}}>
     */
    public function getSipMediaApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SipMediaApplicationId:string} $args
     * @return \AWS\Result<array{SipMediaApplicationAlexaSkillConfiguration?:array{AlexaSkillStatus:"ACTIVE"|"INACTIVE", AlexaSkillIds:array<string>}}>
     */
    public function getSipMediaApplicationAlexaSkillConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{SipMediaApplicationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SipMediaApplicationAlexaSkillConfiguration?:array{AlexaSkillStatus:"ACTIVE"|"INACTIVE", AlexaSkillIds:array<string>}}>
     */
    public function getSipMediaApplicationAlexaSkillConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SipMediaApplicationId:string} $args
     * @return \AWS\Result<array{SipMediaApplicationLoggingConfiguration?:array{EnableSipMediaApplicationMessageLogs?:bool}}>
     */
    public function getSipMediaApplicationLoggingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{SipMediaApplicationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SipMediaApplicationLoggingConfiguration?:array{EnableSipMediaApplicationMessageLogs?:bool}}>
     */
    public function getSipMediaApplicationLoggingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SipRuleId:string} $args
     * @return \AWS\Result<array{SipRule?:array{SipRuleId?:string, Name?:string, Disabled?:bool, TriggerType?:"ToPhoneNumber"|"RequestUriHostname", TriggerValue?:string, TargetApplications?:array<array{SipMediaApplicationId?:string, Priority?:int, AwsRegion?:string}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function getSipRule(array $args): \AWS\Result { }

    /**
     * @param array{SipRuleId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SipRule?:array{SipRuleId?:string, Name?:string, Disabled?:bool, TriggerType?:"ToPhoneNumber"|"RequestUriHostname", TriggerValue?:string, TargetApplications?:array<array{SipMediaApplicationId?:string, Priority?:int, AwsRegion?:string}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function getSipRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string, SpeakerSearchTaskId:string} $args
     * @return \AWS\Result<array{SpeakerSearchTask?:array{SpeakerSearchTaskId?:string, SpeakerSearchTaskStatus?:string, CallDetails?:array{VoiceConnectorId?:string, TransactionId?:string, IsCaller?:bool}, SpeakerSearchDetails?:array{Results?:array<array{ConfidenceScore?:float, VoiceProfileId?:string}>, VoiceprintGenerationStatus?:string}, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, StartedTimestamp?:int|string|\DateTimeInterface, StatusMessage?:string}}>
     */
    public function getSpeakerSearchTask(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string, SpeakerSearchTaskId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SpeakerSearchTask?:array{SpeakerSearchTaskId?:string, SpeakerSearchTaskStatus?:string, CallDetails?:array{VoiceConnectorId?:string, TransactionId?:string, IsCaller?:bool}, SpeakerSearchDetails?:array{Results?:array<array{ConfidenceScore?:float, VoiceProfileId?:string}>, VoiceprintGenerationStatus?:string}, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, StartedTimestamp?:int|string|\DateTimeInterface, StatusMessage?:string}}>
     */
    public function getSpeakerSearchTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \AWS\Result<array{VoiceConnector?:array{VoiceConnectorId?:string, AwsRegion?:"us-east-1"|"us-west-2"|"ca-central-1"|"eu-central-1"|"eu-west-1"|"eu-west-2"|"ap-northeast-2"|"ap-northeast-1"|"ap-southeast-1"|"ap-southeast-2", Name?:string, OutboundHostName?:string, RequireEncryption?:bool, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, VoiceConnectorArn?:string, IntegrationType?:"CONNECT_CALL_TRANSFER_CONNECTOR"|"CONNECT_ANALYTICS_CONNECTOR"}}>
     */
    public function getVoiceConnector(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VoiceConnector?:array{VoiceConnectorId?:string, AwsRegion?:"us-east-1"|"us-west-2"|"ca-central-1"|"eu-central-1"|"eu-west-1"|"eu-west-2"|"ap-northeast-2"|"ap-northeast-1"|"ap-southeast-1"|"ap-southeast-2", Name?:string, OutboundHostName?:string, RequireEncryption?:bool, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, VoiceConnectorArn?:string, IntegrationType?:"CONNECT_CALL_TRANSFER_CONNECTOR"|"CONNECT_ANALYTICS_CONNECTOR"}}>
     */
    public function getVoiceConnectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \AWS\Result<array{EmergencyCallingConfiguration?:array{DNIS?:array<array{EmergencyPhoneNumber:string, TestPhoneNumber?:string, CallingCountry:string}>}}>
     */
    public function getVoiceConnectorEmergencyCallingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EmergencyCallingConfiguration?:array{DNIS?:array<array{EmergencyPhoneNumber:string, TestPhoneNumber?:string, CallingCountry:string}>}}>
     */
    public function getVoiceConnectorEmergencyCallingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \AWS\Result<array{ExternalSystemsConfiguration?:array{SessionBorderControllerTypes?:array<"RIBBON_SBC"|"ORACLE_ACME_PACKET_SBC"|"AVAYA_SBCE"|"CISCO_UNIFIED_BORDER_ELEMENT"|"AUDIOCODES_MEDIANT_SBC">, ContactCenterSystemTypes?:array<"GENESYS_ENGAGE_ON_PREMISES"|"AVAYA_AURA_CALL_CENTER_ELITE"|"AVAYA_AURA_CONTACT_CENTER"|"CISCO_UNIFIED_CONTACT_CENTER_ENTERPRISE">}}>
     */
    public function getVoiceConnectorExternalSystemsConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ExternalSystemsConfiguration?:array{SessionBorderControllerTypes?:array<"RIBBON_SBC"|"ORACLE_ACME_PACKET_SBC"|"AVAYA_SBCE"|"CISCO_UNIFIED_BORDER_ELEMENT"|"AUDIOCODES_MEDIANT_SBC">, ContactCenterSystemTypes?:array<"GENESYS_ENGAGE_ON_PREMISES"|"AVAYA_AURA_CALL_CENTER_ELITE"|"AVAYA_AURA_CONTACT_CENTER"|"CISCO_UNIFIED_CONTACT_CENTER_ENTERPRISE">}}>
     */
    public function getVoiceConnectorExternalSystemsConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorGroupId:string} $args
     * @return \AWS\Result<array{VoiceConnectorGroup?:array{VoiceConnectorGroupId?:string, Name?:string, VoiceConnectorItems?:array<array{VoiceConnectorId:string, Priority:int}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, VoiceConnectorGroupArn?:string}}>
     */
    public function getVoiceConnectorGroup(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorGroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VoiceConnectorGroup?:array{VoiceConnectorGroupId?:string, Name?:string, VoiceConnectorItems?:array<array{VoiceConnectorId:string, Priority:int}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, VoiceConnectorGroupArn?:string}}>
     */
    public function getVoiceConnectorGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \AWS\Result<array{LoggingConfiguration?:array{EnableSIPLogs?:bool, EnableMediaMetricLogs?:bool}}>
     */
    public function getVoiceConnectorLoggingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{LoggingConfiguration?:array{EnableSIPLogs?:bool, EnableMediaMetricLogs?:bool}}>
     */
    public function getVoiceConnectorLoggingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \AWS\Result<array{Origination?:array{Routes?:array<array{Host?:string, Port?:int, Protocol?:"TCP"|"UDP", Priority?:int, Weight?:int}>, Disabled?:bool}}>
     */
    public function getVoiceConnectorOrigination(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Origination?:array{Routes?:array<array{Host?:string, Port?:int, Protocol?:"TCP"|"UDP", Priority?:int, Weight?:int}>, Disabled?:bool}}>
     */
    public function getVoiceConnectorOriginationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \AWS\Result<array{Proxy?:array{DefaultSessionExpiryMinutes?:int, Disabled?:bool, FallBackPhoneNumber?:string, PhoneNumberCountries?:array<string>}}>
     */
    public function getVoiceConnectorProxy(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Proxy?:array{DefaultSessionExpiryMinutes?:int, Disabled?:bool, FallBackPhoneNumber?:string, PhoneNumberCountries?:array<string>}}>
     */
    public function getVoiceConnectorProxyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \AWS\Result<array{StreamingConfiguration?:array{DataRetentionInHours:int, Disabled:bool, StreamingNotificationTargets?:array<array{NotificationTarget?:"EventBridge"|"SNS"|"SQS"}>, MediaInsightsConfiguration?:array{Disabled?:bool, ConfigurationArn?:string}}}>
     */
    public function getVoiceConnectorStreamingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StreamingConfiguration?:array{DataRetentionInHours:int, Disabled:bool, StreamingNotificationTargets?:array<array{NotificationTarget?:"EventBridge"|"SNS"|"SQS"}>, MediaInsightsConfiguration?:array{Disabled?:bool, ConfigurationArn?:string}}}>
     */
    public function getVoiceConnectorStreamingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \AWS\Result<array{Termination?:array{CpsLimit?:int, DefaultPhoneNumber?:string, CallingRegions?:array<string>, CidrAllowedList?:array<string>, Disabled?:bool}}>
     */
    public function getVoiceConnectorTermination(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Termination?:array{CpsLimit?:int, DefaultPhoneNumber?:string, CallingRegions?:array<string>, CidrAllowedList?:array<string>, Disabled?:bool}}>
     */
    public function getVoiceConnectorTerminationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \AWS\Result<array{TerminationHealth?:array{Timestamp?:int|string|\DateTimeInterface, Source?:string}}>
     */
    public function getVoiceConnectorTerminationHealth(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TerminationHealth?:array{Timestamp?:int|string|\DateTimeInterface, Source?:string}}>
     */
    public function getVoiceConnectorTerminationHealthAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceProfileId:string} $args
     * @return \AWS\Result<array{VoiceProfile?:array{VoiceProfileId?:string, VoiceProfileArn?:string, VoiceProfileDomainId?:string, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, ExpirationTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function getVoiceProfile(array $args): \AWS\Result { }

    /**
     * @param array{VoiceProfileId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VoiceProfile?:array{VoiceProfileId?:string, VoiceProfileArn?:string, VoiceProfileDomainId?:string, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, ExpirationTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function getVoiceProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceProfileDomainId:string} $args
     * @return \AWS\Result<array{VoiceProfileDomain?:array{VoiceProfileDomainId?:string, VoiceProfileDomainArn?:string, Name?:string, Description?:string, ServerSideEncryptionConfiguration?:array{KmsKeyArn:string}, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function getVoiceProfileDomain(array $args): \AWS\Result { }

    /**
     * @param array{VoiceProfileDomainId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VoiceProfileDomain?:array{VoiceProfileDomainId?:string, VoiceProfileDomainArn?:string, Name?:string, Description?:string, ServerSideEncryptionConfiguration?:array{KmsKeyArn:string}, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function getVoiceProfileDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string, VoiceToneAnalysisTaskId:string, IsCaller:bool} $args
     * @return \AWS\Result<array{VoiceToneAnalysisTask?:array{VoiceToneAnalysisTaskId?:string, VoiceToneAnalysisTaskStatus?:string, CallDetails?:array{VoiceConnectorId?:string, TransactionId?:string, IsCaller?:bool}, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, StartedTimestamp?:int|string|\DateTimeInterface, StatusMessage?:string}}>
     */
    public function getVoiceToneAnalysisTask(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string, VoiceToneAnalysisTaskId:string, IsCaller:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{VoiceToneAnalysisTask?:array{VoiceToneAnalysisTaskId?:string, VoiceToneAnalysisTaskStatus?:string, CallDetails?:array{VoiceConnectorId?:string, TransactionId?:string, IsCaller?:bool}, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, StartedTimestamp?:int|string|\DateTimeInterface, StatusMessage?:string}}>
     */
    public function getVoiceToneAnalysisTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{VoiceConnectorRegions?:array<"us-east-1"|"us-west-2"|"ca-central-1"|"eu-central-1"|"eu-west-1"|"eu-west-2"|"ap-northeast-2"|"ap-northeast-1"|"ap-southeast-1"|"ap-southeast-2">}>
     */
    public function listAvailableVoiceConnectorRegions(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{VoiceConnectorRegions?:array<"us-east-1"|"us-west-2"|"ca-central-1"|"eu-central-1"|"eu-west-1"|"eu-west-2"|"ap-northeast-2"|"ap-northeast-1"|"ap-southeast-1"|"ap-southeast-2">}>
     */
    public function listAvailableVoiceConnectorRegionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{PhoneNumberOrders?:array<array{PhoneNumberOrderId?:string, ProductType?:"VoiceConnector"|"SipMediaApplicationDialIn", Status?:"Processing"|"Successful"|"Failed"|"Partial"|"PendingDocuments"|"Submitted"|"FOC"|"ChangeRequested"|"Exception"|"CancelRequested"|"Cancelled", OrderType?:"New"|"Porting", OrderedPhoneNumbers?:array<array{E164PhoneNumber?:string, Status?:"Processing"|"Acquired"|"Failed"}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listPhoneNumberOrders(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumberOrders?:array<array{PhoneNumberOrderId?:string, ProductType?:"VoiceConnector"|"SipMediaApplicationDialIn", Status?:"Processing"|"Successful"|"Failed"|"Partial"|"PendingDocuments"|"Submitted"|"FOC"|"ChangeRequested"|"Exception"|"CancelRequested"|"Cancelled", OrderType?:"New"|"Porting", OrderedPhoneNumbers?:array<array{E164PhoneNumber?:string, Status?:"Processing"|"Acquired"|"Failed"}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listPhoneNumberOrdersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Status?:string, ProductType?:"VoiceConnector"|"SipMediaApplicationDialIn", FilterName?:"VoiceConnectorId"|"VoiceConnectorGroupId"|"SipRuleId", FilterValue?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{PhoneNumbers?:array<array{PhoneNumberId?:string, E164PhoneNumber?:string, Country?:string, Type?:"Local"|"TollFree", ProductType?:"VoiceConnector"|"SipMediaApplicationDialIn", Status?:"Cancelled"|"PortinCancelRequested"|"PortinInProgress"|"AcquireInProgress"|"AcquireFailed"|"Unassigned"|"Assigned"|"ReleaseInProgress"|"DeleteInProgress"|"ReleaseFailed"|"DeleteFailed", Capabilities?:array{InboundCall?:bool, OutboundCall?:bool, InboundSMS?:bool, OutboundSMS?:bool, InboundMMS?:bool, OutboundMMS?:bool}, Associations?:array<array{Value?:string, Name?:"VoiceConnectorId"|"VoiceConnectorGroupId"|"SipRuleId", AssociatedTimestamp?:int|string|\DateTimeInterface}>, CallingName?:string, CallingNameStatus?:"Unassigned"|"UpdateInProgress"|"UpdateSucceeded"|"UpdateFailed", CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, DeletionTimestamp?:int|string|\DateTimeInterface, OrderId?:string, Name?:string}>, NextToken?:string}>
     */
    public function listPhoneNumbers(array $args = []): \AWS\Result { }

    /**
     * @param array{Status?:string, ProductType?:"VoiceConnector"|"SipMediaApplicationDialIn", FilterName?:"VoiceConnectorId"|"VoiceConnectorGroupId"|"SipRuleId", FilterValue?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumbers?:array<array{PhoneNumberId?:string, E164PhoneNumber?:string, Country?:string, Type?:"Local"|"TollFree", ProductType?:"VoiceConnector"|"SipMediaApplicationDialIn", Status?:"Cancelled"|"PortinCancelRequested"|"PortinInProgress"|"AcquireInProgress"|"AcquireFailed"|"Unassigned"|"Assigned"|"ReleaseInProgress"|"DeleteInProgress"|"ReleaseFailed"|"DeleteFailed", Capabilities?:array{InboundCall?:bool, OutboundCall?:bool, InboundSMS?:bool, OutboundSMS?:bool, InboundMMS?:bool, OutboundMMS?:bool}, Associations?:array<array{Value?:string, Name?:"VoiceConnectorId"|"VoiceConnectorGroupId"|"SipRuleId", AssociatedTimestamp?:int|string|\DateTimeInterface}>, CallingName?:string, CallingNameStatus?:"Unassigned"|"UpdateInProgress"|"UpdateSucceeded"|"UpdateFailed", CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, DeletionTimestamp?:int|string|\DateTimeInterface, OrderId?:string, Name?:string}>, NextToken?:string}>
     */
    public function listPhoneNumbersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string, Status?:"Open"|"InProgress"|"Closed", NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ProxySessions?:array<array{VoiceConnectorId?:string, ProxySessionId?:string, Name?:string, Status?:"Open"|"InProgress"|"Closed", ExpiryMinutes?:int, Capabilities?:array<"Voice"|"SMS">, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, EndedTimestamp?:int|string|\DateTimeInterface, Participants?:array<array{PhoneNumber?:string, ProxyPhoneNumber?:string}>, NumberSelectionBehavior?:"PreferSticky"|"AvoidSticky", GeoMatchLevel?:"Country"|"AreaCode", GeoMatchParams?:array{Country:string, AreaCode:string}}>, NextToken?:string}>
     */
    public function listProxySessions(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string, Status?:"Open"|"InProgress"|"Closed", NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProxySessions?:array<array{VoiceConnectorId?:string, ProxySessionId?:string, Name?:string, Status?:"Open"|"InProgress"|"Closed", ExpiryMinutes?:int, Capabilities?:array<"Voice"|"SMS">, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, EndedTimestamp?:int|string|\DateTimeInterface, Participants?:array<array{PhoneNumber?:string, ProxyPhoneNumber?:string}>, NumberSelectionBehavior?:"PreferSticky"|"AvoidSticky", GeoMatchLevel?:"Country"|"AreaCode", GeoMatchParams?:array{Country:string, AreaCode:string}}>, NextToken?:string}>
     */
    public function listProxySessionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{SipMediaApplications?:array<array{SipMediaApplicationId?:string, AwsRegion?:string, Name?:string, Endpoints?:array<array{LambdaArn?:string}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, SipMediaApplicationArn?:string}>, NextToken?:string}>
     */
    public function listSipMediaApplications(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SipMediaApplications?:array<array{SipMediaApplicationId?:string, AwsRegion?:string, Name?:string, Endpoints?:array<array{LambdaArn?:string}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, SipMediaApplicationArn?:string}>, NextToken?:string}>
     */
    public function listSipMediaApplicationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SipMediaApplicationId?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{SipRules?:array<array{SipRuleId?:string, Name?:string, Disabled?:bool, TriggerType?:"ToPhoneNumber"|"RequestUriHostname", TriggerValue?:string, TargetApplications?:array<array{SipMediaApplicationId?:string, Priority?:int, AwsRegion?:string}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listSipRules(array $args = []): \AWS\Result { }

    /**
     * @param array{SipMediaApplicationId?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SipRules?:array<array{SipRuleId?:string, Name?:string, Disabled?:bool, TriggerType?:"ToPhoneNumber"|"RequestUriHostname", TriggerValue?:string, TargetApplications?:array<array{SipMediaApplicationId?:string, Priority?:int, AwsRegion?:string}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listSipRulesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProductType:"VoiceConnector"|"SipMediaApplicationDialIn"} $args
     * @return \AWS\Result<array{PhoneNumberCountries?:array<array{CountryCode?:string, SupportedPhoneNumberTypes?:array<"Local"|"TollFree">}>}>
     */
    public function listSupportedPhoneNumberCountries(array $args): \AWS\Result { }

    /**
     * @param array{ProductType:"VoiceConnector"|"SipMediaApplicationDialIn"} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumberCountries?:array<array{CountryCode?:string, SupportedPhoneNumberTypes?:array<"Local"|"TollFree">}>}>
     */
    public function listSupportedPhoneNumberCountriesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{VoiceConnectorGroups?:array<array{VoiceConnectorGroupId?:string, Name?:string, VoiceConnectorItems?:array<array{VoiceConnectorId:string, Priority:int}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, VoiceConnectorGroupArn?:string}>, NextToken?:string}>
     */
    public function listVoiceConnectorGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{VoiceConnectorGroups?:array<array{VoiceConnectorGroupId?:string, Name?:string, VoiceConnectorItems?:array<array{VoiceConnectorId:string, Priority:int}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, VoiceConnectorGroupArn?:string}>, NextToken?:string}>
     */
    public function listVoiceConnectorGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \AWS\Result<array{Usernames?:array<string>}>
     */
    public function listVoiceConnectorTerminationCredentials(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Usernames?:array<string>}>
     */
    public function listVoiceConnectorTerminationCredentialsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{VoiceConnectors?:array<array{VoiceConnectorId?:string, AwsRegion?:"us-east-1"|"us-west-2"|"ca-central-1"|"eu-central-1"|"eu-west-1"|"eu-west-2"|"ap-northeast-2"|"ap-northeast-1"|"ap-southeast-1"|"ap-southeast-2", Name?:string, OutboundHostName?:string, RequireEncryption?:bool, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, VoiceConnectorArn?:string, IntegrationType?:"CONNECT_CALL_TRANSFER_CONNECTOR"|"CONNECT_ANALYTICS_CONNECTOR"}>, NextToken?:string}>
     */
    public function listVoiceConnectors(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{VoiceConnectors?:array<array{VoiceConnectorId?:string, AwsRegion?:"us-east-1"|"us-west-2"|"ca-central-1"|"eu-central-1"|"eu-west-1"|"eu-west-2"|"ap-northeast-2"|"ap-northeast-1"|"ap-southeast-1"|"ap-southeast-2", Name?:string, OutboundHostName?:string, RequireEncryption?:bool, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, VoiceConnectorArn?:string, IntegrationType?:"CONNECT_CALL_TRANSFER_CONNECTOR"|"CONNECT_ANALYTICS_CONNECTOR"}>, NextToken?:string}>
     */
    public function listVoiceConnectorsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{VoiceProfileDomains?:array<array{VoiceProfileDomainId?:string, VoiceProfileDomainArn?:string, Name?:string, Description?:string, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listVoiceProfileDomains(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{VoiceProfileDomains?:array<array{VoiceProfileDomainId?:string, VoiceProfileDomainArn?:string, Name?:string, Description?:string, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listVoiceProfileDomainsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceProfileDomainId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{VoiceProfiles?:array<array{VoiceProfileId?:string, VoiceProfileArn?:string, VoiceProfileDomainId?:string, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, ExpirationTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listVoiceProfiles(array $args): \AWS\Result { }

    /**
     * @param array{VoiceProfileDomainId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{VoiceProfiles?:array<array{VoiceProfileId?:string, VoiceProfileArn?:string, VoiceProfileDomainId?:string, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, ExpirationTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listVoiceProfilesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SipMediaApplicationId:string, SipMediaApplicationAlexaSkillConfiguration?:array{AlexaSkillStatus:"ACTIVE"|"INACTIVE", AlexaSkillIds:array<string>}} $args
     * @return \AWS\Result<array{SipMediaApplicationAlexaSkillConfiguration?:array{AlexaSkillStatus:"ACTIVE"|"INACTIVE", AlexaSkillIds:array<string>}}>
     */
    public function putSipMediaApplicationAlexaSkillConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{SipMediaApplicationId:string, SipMediaApplicationAlexaSkillConfiguration?:array{AlexaSkillStatus:"ACTIVE"|"INACTIVE", AlexaSkillIds:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{SipMediaApplicationAlexaSkillConfiguration?:array{AlexaSkillStatus:"ACTIVE"|"INACTIVE", AlexaSkillIds:array<string>}}>
     */
    public function putSipMediaApplicationAlexaSkillConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SipMediaApplicationId:string, SipMediaApplicationLoggingConfiguration?:array{EnableSipMediaApplicationMessageLogs?:bool}} $args
     * @return \AWS\Result<array{SipMediaApplicationLoggingConfiguration?:array{EnableSipMediaApplicationMessageLogs?:bool}}>
     */
    public function putSipMediaApplicationLoggingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{SipMediaApplicationId:string, SipMediaApplicationLoggingConfiguration?:array{EnableSipMediaApplicationMessageLogs?:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{SipMediaApplicationLoggingConfiguration?:array{EnableSipMediaApplicationMessageLogs?:bool}}>
     */
    public function putSipMediaApplicationLoggingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string, EmergencyCallingConfiguration:array{DNIS?:array<array{EmergencyPhoneNumber:string, TestPhoneNumber?:string, CallingCountry:string}>}} $args
     * @return \AWS\Result<array{EmergencyCallingConfiguration?:array{DNIS?:array<array{EmergencyPhoneNumber:string, TestPhoneNumber?:string, CallingCountry:string}>}}>
     */
    public function putVoiceConnectorEmergencyCallingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string, EmergencyCallingConfiguration:array{DNIS?:array<array{EmergencyPhoneNumber:string, TestPhoneNumber?:string, CallingCountry:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{EmergencyCallingConfiguration?:array{DNIS?:array<array{EmergencyPhoneNumber:string, TestPhoneNumber?:string, CallingCountry:string}>}}>
     */
    public function putVoiceConnectorEmergencyCallingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string, SessionBorderControllerTypes?:array<"RIBBON_SBC"|"ORACLE_ACME_PACKET_SBC"|"AVAYA_SBCE"|"CISCO_UNIFIED_BORDER_ELEMENT"|"AUDIOCODES_MEDIANT_SBC">, ContactCenterSystemTypes?:array<"GENESYS_ENGAGE_ON_PREMISES"|"AVAYA_AURA_CALL_CENTER_ELITE"|"AVAYA_AURA_CONTACT_CENTER"|"CISCO_UNIFIED_CONTACT_CENTER_ENTERPRISE">} $args
     * @return \AWS\Result<array{ExternalSystemsConfiguration?:array{SessionBorderControllerTypes?:array<"RIBBON_SBC"|"ORACLE_ACME_PACKET_SBC"|"AVAYA_SBCE"|"CISCO_UNIFIED_BORDER_ELEMENT"|"AUDIOCODES_MEDIANT_SBC">, ContactCenterSystemTypes?:array<"GENESYS_ENGAGE_ON_PREMISES"|"AVAYA_AURA_CALL_CENTER_ELITE"|"AVAYA_AURA_CONTACT_CENTER"|"CISCO_UNIFIED_CONTACT_CENTER_ENTERPRISE">}}>
     */
    public function putVoiceConnectorExternalSystemsConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string, SessionBorderControllerTypes?:array<"RIBBON_SBC"|"ORACLE_ACME_PACKET_SBC"|"AVAYA_SBCE"|"CISCO_UNIFIED_BORDER_ELEMENT"|"AUDIOCODES_MEDIANT_SBC">, ContactCenterSystemTypes?:array<"GENESYS_ENGAGE_ON_PREMISES"|"AVAYA_AURA_CALL_CENTER_ELITE"|"AVAYA_AURA_CONTACT_CENTER"|"CISCO_UNIFIED_CONTACT_CENTER_ENTERPRISE">} $args
     * @return \GuzzleHttp\Promise\Promise<array{ExternalSystemsConfiguration?:array{SessionBorderControllerTypes?:array<"RIBBON_SBC"|"ORACLE_ACME_PACKET_SBC"|"AVAYA_SBCE"|"CISCO_UNIFIED_BORDER_ELEMENT"|"AUDIOCODES_MEDIANT_SBC">, ContactCenterSystemTypes?:array<"GENESYS_ENGAGE_ON_PREMISES"|"AVAYA_AURA_CALL_CENTER_ELITE"|"AVAYA_AURA_CONTACT_CENTER"|"CISCO_UNIFIED_CONTACT_CENTER_ENTERPRISE">}}>
     */
    public function putVoiceConnectorExternalSystemsConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string, LoggingConfiguration:array{EnableSIPLogs?:bool, EnableMediaMetricLogs?:bool}} $args
     * @return \AWS\Result<array{LoggingConfiguration?:array{EnableSIPLogs?:bool, EnableMediaMetricLogs?:bool}}>
     */
    public function putVoiceConnectorLoggingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string, LoggingConfiguration:array{EnableSIPLogs?:bool, EnableMediaMetricLogs?:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{LoggingConfiguration?:array{EnableSIPLogs?:bool, EnableMediaMetricLogs?:bool}}>
     */
    public function putVoiceConnectorLoggingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string, Origination:array{Routes?:array<array{Host?:string, Port?:int, Protocol?:"TCP"|"UDP", Priority?:int, Weight?:int}>, Disabled?:bool}} $args
     * @return \AWS\Result<array{Origination?:array{Routes?:array<array{Host?:string, Port?:int, Protocol?:"TCP"|"UDP", Priority?:int, Weight?:int}>, Disabled?:bool}}>
     */
    public function putVoiceConnectorOrigination(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string, Origination:array{Routes?:array<array{Host?:string, Port?:int, Protocol?:"TCP"|"UDP", Priority?:int, Weight?:int}>, Disabled?:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Origination?:array{Routes?:array<array{Host?:string, Port?:int, Protocol?:"TCP"|"UDP", Priority?:int, Weight?:int}>, Disabled?:bool}}>
     */
    public function putVoiceConnectorOriginationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string, DefaultSessionExpiryMinutes:int, PhoneNumberPoolCountries:array<string>, FallBackPhoneNumber?:string, Disabled?:bool} $args
     * @return \AWS\Result<array{Proxy?:array{DefaultSessionExpiryMinutes?:int, Disabled?:bool, FallBackPhoneNumber?:string, PhoneNumberCountries?:array<string>}}>
     */
    public function putVoiceConnectorProxy(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string, DefaultSessionExpiryMinutes:int, PhoneNumberPoolCountries:array<string>, FallBackPhoneNumber?:string, Disabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Proxy?:array{DefaultSessionExpiryMinutes?:int, Disabled?:bool, FallBackPhoneNumber?:string, PhoneNumberCountries?:array<string>}}>
     */
    public function putVoiceConnectorProxyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string, StreamingConfiguration:array{DataRetentionInHours:int, Disabled:bool, StreamingNotificationTargets?:array<array{NotificationTarget?:"EventBridge"|"SNS"|"SQS"}>, MediaInsightsConfiguration?:array{Disabled?:bool, ConfigurationArn?:string}}} $args
     * @return \AWS\Result<array{StreamingConfiguration?:array{DataRetentionInHours:int, Disabled:bool, StreamingNotificationTargets?:array<array{NotificationTarget?:"EventBridge"|"SNS"|"SQS"}>, MediaInsightsConfiguration?:array{Disabled?:bool, ConfigurationArn?:string}}}>
     */
    public function putVoiceConnectorStreamingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string, StreamingConfiguration:array{DataRetentionInHours:int, Disabled:bool, StreamingNotificationTargets?:array<array{NotificationTarget?:"EventBridge"|"SNS"|"SQS"}>, MediaInsightsConfiguration?:array{Disabled?:bool, ConfigurationArn?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{StreamingConfiguration?:array{DataRetentionInHours:int, Disabled:bool, StreamingNotificationTargets?:array<array{NotificationTarget?:"EventBridge"|"SNS"|"SQS"}>, MediaInsightsConfiguration?:array{Disabled?:bool, ConfigurationArn?:string}}}>
     */
    public function putVoiceConnectorStreamingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string, Termination:array{CpsLimit?:int, DefaultPhoneNumber?:string, CallingRegions?:array<string>, CidrAllowedList?:array<string>, Disabled?:bool}} $args
     * @return \AWS\Result<array{Termination?:array{CpsLimit?:int, DefaultPhoneNumber?:string, CallingRegions?:array<string>, CidrAllowedList?:array<string>, Disabled?:bool}}>
     */
    public function putVoiceConnectorTermination(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string, Termination:array{CpsLimit?:int, DefaultPhoneNumber?:string, CallingRegions?:array<string>, CidrAllowedList?:array<string>, Disabled?:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Termination?:array{CpsLimit?:int, DefaultPhoneNumber?:string, CallingRegions?:array<string>, CidrAllowedList?:array<string>, Disabled?:bool}}>
     */
    public function putVoiceConnectorTerminationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string, Credentials?:array<array{Username?:string, Password?:string}>} $args
     * @return \AWS\Result<void>
     */
    public function putVoiceConnectorTerminationCredentials(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string, Credentials?:array<array{Username?:string, Password?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putVoiceConnectorTerminationCredentialsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PhoneNumberId:string} $args
     * @return \AWS\Result<array{PhoneNumber?:array{PhoneNumberId?:string, E164PhoneNumber?:string, Country?:string, Type?:"Local"|"TollFree", ProductType?:"VoiceConnector"|"SipMediaApplicationDialIn", Status?:"Cancelled"|"PortinCancelRequested"|"PortinInProgress"|"AcquireInProgress"|"AcquireFailed"|"Unassigned"|"Assigned"|"ReleaseInProgress"|"DeleteInProgress"|"ReleaseFailed"|"DeleteFailed", Capabilities?:array{InboundCall?:bool, OutboundCall?:bool, InboundSMS?:bool, OutboundSMS?:bool, InboundMMS?:bool, OutboundMMS?:bool}, Associations?:array<array{Value?:string, Name?:"VoiceConnectorId"|"VoiceConnectorGroupId"|"SipRuleId", AssociatedTimestamp?:int|string|\DateTimeInterface}>, CallingName?:string, CallingNameStatus?:"Unassigned"|"UpdateInProgress"|"UpdateSucceeded"|"UpdateFailed", CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, DeletionTimestamp?:int|string|\DateTimeInterface, OrderId?:string, Name?:string}}>
     */
    public function restorePhoneNumber(array $args): \AWS\Result { }

    /**
     * @param array{PhoneNumberId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumber?:array{PhoneNumberId?:string, E164PhoneNumber?:string, Country?:string, Type?:"Local"|"TollFree", ProductType?:"VoiceConnector"|"SipMediaApplicationDialIn", Status?:"Cancelled"|"PortinCancelRequested"|"PortinInProgress"|"AcquireInProgress"|"AcquireFailed"|"Unassigned"|"Assigned"|"ReleaseInProgress"|"DeleteInProgress"|"ReleaseFailed"|"DeleteFailed", Capabilities?:array{InboundCall?:bool, OutboundCall?:bool, InboundSMS?:bool, OutboundSMS?:bool, InboundMMS?:bool, OutboundMMS?:bool}, Associations?:array<array{Value?:string, Name?:"VoiceConnectorId"|"VoiceConnectorGroupId"|"SipRuleId", AssociatedTimestamp?:int|string|\DateTimeInterface}>, CallingName?:string, CallingNameStatus?:"Unassigned"|"UpdateInProgress"|"UpdateSucceeded"|"UpdateFailed", CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, DeletionTimestamp?:int|string|\DateTimeInterface, OrderId?:string, Name?:string}}>
     */
    public function restorePhoneNumberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AreaCode?:string, City?:string, Country?:string, State?:string, TollFreePrefix?:string, PhoneNumberType?:"Local"|"TollFree", MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{E164PhoneNumbers?:array<string>, NextToken?:string}>
     */
    public function searchAvailablePhoneNumbers(array $args = []): \AWS\Result { }

    /**
     * @param array{AreaCode?:string, City?:string, Country?:string, State?:string, TollFreePrefix?:string, PhoneNumberType?:"Local"|"TollFree", MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{E164PhoneNumbers?:array<string>, NextToken?:string}>
     */
    public function searchAvailablePhoneNumbersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string, TransactionId:string, VoiceProfileDomainId:string, ClientRequestToken?:string, CallLeg?:"Caller"|"Callee"} $args
     * @return \AWS\Result<array{SpeakerSearchTask?:array{SpeakerSearchTaskId?:string, SpeakerSearchTaskStatus?:string, CallDetails?:array{VoiceConnectorId?:string, TransactionId?:string, IsCaller?:bool}, SpeakerSearchDetails?:array{Results?:array<array{ConfidenceScore?:float, VoiceProfileId?:string}>, VoiceprintGenerationStatus?:string}, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, StartedTimestamp?:int|string|\DateTimeInterface, StatusMessage?:string}}>
     */
    public function startSpeakerSearchTask(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string, TransactionId:string, VoiceProfileDomainId:string, ClientRequestToken?:string, CallLeg?:"Caller"|"Callee"} $args
     * @return \GuzzleHttp\Promise\Promise<array{SpeakerSearchTask?:array{SpeakerSearchTaskId?:string, SpeakerSearchTaskStatus?:string, CallDetails?:array{VoiceConnectorId?:string, TransactionId?:string, IsCaller?:bool}, SpeakerSearchDetails?:array{Results?:array<array{ConfidenceScore?:float, VoiceProfileId?:string}>, VoiceprintGenerationStatus?:string}, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, StartedTimestamp?:int|string|\DateTimeInterface, StatusMessage?:string}}>
     */
    public function startSpeakerSearchTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string, TransactionId:string, LanguageCode:"en-US", ClientRequestToken?:string} $args
     * @return \AWS\Result<array{VoiceToneAnalysisTask?:array{VoiceToneAnalysisTaskId?:string, VoiceToneAnalysisTaskStatus?:string, CallDetails?:array{VoiceConnectorId?:string, TransactionId?:string, IsCaller?:bool}, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, StartedTimestamp?:int|string|\DateTimeInterface, StatusMessage?:string}}>
     */
    public function startVoiceToneAnalysisTask(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string, TransactionId:string, LanguageCode:"en-US", ClientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VoiceToneAnalysisTask?:array{VoiceToneAnalysisTaskId?:string, VoiceToneAnalysisTaskStatus?:string, CallDetails?:array{VoiceConnectorId?:string, TransactionId?:string, IsCaller?:bool}, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, StartedTimestamp?:int|string|\DateTimeInterface, StatusMessage?:string}}>
     */
    public function startVoiceToneAnalysisTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string, SpeakerSearchTaskId:string} $args
     * @return \AWS\Result<void>
     */
    public function stopSpeakerSearchTask(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string, SpeakerSearchTaskId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function stopSpeakerSearchTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string, VoiceToneAnalysisTaskId:string} $args
     * @return \AWS\Result<void>
     */
    public function stopVoiceToneAnalysisTask(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string, VoiceToneAnalysisTaskId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function stopVoiceToneAnalysisTaskAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<void>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, TagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnector?:array{CdrBucket?:string}} $args
     * @return \AWS\Result<void>
     */
    public function updateGlobalSettings(array $args = []): \AWS\Result { }

    /**
     * @param array{VoiceConnector?:array{CdrBucket?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateGlobalSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PhoneNumberId:string, ProductType?:"VoiceConnector"|"SipMediaApplicationDialIn", CallingName?:string, Name?:string} $args
     * @return \AWS\Result<array{PhoneNumber?:array{PhoneNumberId?:string, E164PhoneNumber?:string, Country?:string, Type?:"Local"|"TollFree", ProductType?:"VoiceConnector"|"SipMediaApplicationDialIn", Status?:"Cancelled"|"PortinCancelRequested"|"PortinInProgress"|"AcquireInProgress"|"AcquireFailed"|"Unassigned"|"Assigned"|"ReleaseInProgress"|"DeleteInProgress"|"ReleaseFailed"|"DeleteFailed", Capabilities?:array{InboundCall?:bool, OutboundCall?:bool, InboundSMS?:bool, OutboundSMS?:bool, InboundMMS?:bool, OutboundMMS?:bool}, Associations?:array<array{Value?:string, Name?:"VoiceConnectorId"|"VoiceConnectorGroupId"|"SipRuleId", AssociatedTimestamp?:int|string|\DateTimeInterface}>, CallingName?:string, CallingNameStatus?:"Unassigned"|"UpdateInProgress"|"UpdateSucceeded"|"UpdateFailed", CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, DeletionTimestamp?:int|string|\DateTimeInterface, OrderId?:string, Name?:string}}>
     */
    public function updatePhoneNumber(array $args): \AWS\Result { }

    /**
     * @param array{PhoneNumberId:string, ProductType?:"VoiceConnector"|"SipMediaApplicationDialIn", CallingName?:string, Name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumber?:array{PhoneNumberId?:string, E164PhoneNumber?:string, Country?:string, Type?:"Local"|"TollFree", ProductType?:"VoiceConnector"|"SipMediaApplicationDialIn", Status?:"Cancelled"|"PortinCancelRequested"|"PortinInProgress"|"AcquireInProgress"|"AcquireFailed"|"Unassigned"|"Assigned"|"ReleaseInProgress"|"DeleteInProgress"|"ReleaseFailed"|"DeleteFailed", Capabilities?:array{InboundCall?:bool, OutboundCall?:bool, InboundSMS?:bool, OutboundSMS?:bool, InboundMMS?:bool, OutboundMMS?:bool}, Associations?:array<array{Value?:string, Name?:"VoiceConnectorId"|"VoiceConnectorGroupId"|"SipRuleId", AssociatedTimestamp?:int|string|\DateTimeInterface}>, CallingName?:string, CallingNameStatus?:"Unassigned"|"UpdateInProgress"|"UpdateSucceeded"|"UpdateFailed", CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, DeletionTimestamp?:int|string|\DateTimeInterface, OrderId?:string, Name?:string}}>
     */
    public function updatePhoneNumberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{CallingName:string} $args
     * @return \AWS\Result<void>
     */
    public function updatePhoneNumberSettings(array $args): \AWS\Result { }

    /**
     * @param array{CallingName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updatePhoneNumberSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string, ProxySessionId:string, Capabilities:array<"Voice"|"SMS">, ExpiryMinutes?:int} $args
     * @return \AWS\Result<array{ProxySession?:array{VoiceConnectorId?:string, ProxySessionId?:string, Name?:string, Status?:"Open"|"InProgress"|"Closed", ExpiryMinutes?:int, Capabilities?:array<"Voice"|"SMS">, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, EndedTimestamp?:int|string|\DateTimeInterface, Participants?:array<array{PhoneNumber?:string, ProxyPhoneNumber?:string}>, NumberSelectionBehavior?:"PreferSticky"|"AvoidSticky", GeoMatchLevel?:"Country"|"AreaCode", GeoMatchParams?:array{Country:string, AreaCode:string}}}>
     */
    public function updateProxySession(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string, ProxySessionId:string, Capabilities:array<"Voice"|"SMS">, ExpiryMinutes?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProxySession?:array{VoiceConnectorId?:string, ProxySessionId?:string, Name?:string, Status?:"Open"|"InProgress"|"Closed", ExpiryMinutes?:int, Capabilities?:array<"Voice"|"SMS">, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, EndedTimestamp?:int|string|\DateTimeInterface, Participants?:array<array{PhoneNumber?:string, ProxyPhoneNumber?:string}>, NumberSelectionBehavior?:"PreferSticky"|"AvoidSticky", GeoMatchLevel?:"Country"|"AreaCode", GeoMatchParams?:array{Country:string, AreaCode:string}}}>
     */
    public function updateProxySessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SipMediaApplicationId:string, Name?:string, Endpoints?:array<array{LambdaArn?:string}>} $args
     * @return \AWS\Result<array{SipMediaApplication?:array{SipMediaApplicationId?:string, AwsRegion?:string, Name?:string, Endpoints?:array<array{LambdaArn?:string}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, SipMediaApplicationArn?:string}}>
     */
    public function updateSipMediaApplication(array $args): \AWS\Result { }

    /**
     * @param array{SipMediaApplicationId:string, Name?:string, Endpoints?:array<array{LambdaArn?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{SipMediaApplication?:array{SipMediaApplicationId?:string, AwsRegion?:string, Name?:string, Endpoints?:array<array{LambdaArn?:string}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, SipMediaApplicationArn?:string}}>
     */
    public function updateSipMediaApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SipMediaApplicationId:string, TransactionId:string, Arguments:array<string, string>} $args
     * @return \AWS\Result<array{SipMediaApplicationCall?:array{TransactionId?:string}}>
     */
    public function updateSipMediaApplicationCall(array $args): \AWS\Result { }

    /**
     * @param array{SipMediaApplicationId:string, TransactionId:string, Arguments:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{SipMediaApplicationCall?:array{TransactionId?:string}}>
     */
    public function updateSipMediaApplicationCallAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SipRuleId:string, Name:string, Disabled?:bool, TargetApplications?:array<array{SipMediaApplicationId?:string, Priority?:int, AwsRegion?:string}>} $args
     * @return \AWS\Result<array{SipRule?:array{SipRuleId?:string, Name?:string, Disabled?:bool, TriggerType?:"ToPhoneNumber"|"RequestUriHostname", TriggerValue?:string, TargetApplications?:array<array{SipMediaApplicationId?:string, Priority?:int, AwsRegion?:string}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function updateSipRule(array $args): \AWS\Result { }

    /**
     * @param array{SipRuleId:string, Name:string, Disabled?:bool, TargetApplications?:array<array{SipMediaApplicationId?:string, Priority?:int, AwsRegion?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{SipRule?:array{SipRuleId?:string, Name?:string, Disabled?:bool, TriggerType?:"ToPhoneNumber"|"RequestUriHostname", TriggerValue?:string, TargetApplications?:array<array{SipMediaApplicationId?:string, Priority?:int, AwsRegion?:string}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function updateSipRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string, Name:string, RequireEncryption:bool} $args
     * @return \AWS\Result<array{VoiceConnector?:array{VoiceConnectorId?:string, AwsRegion?:"us-east-1"|"us-west-2"|"ca-central-1"|"eu-central-1"|"eu-west-1"|"eu-west-2"|"ap-northeast-2"|"ap-northeast-1"|"ap-southeast-1"|"ap-southeast-2", Name?:string, OutboundHostName?:string, RequireEncryption?:bool, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, VoiceConnectorArn?:string, IntegrationType?:"CONNECT_CALL_TRANSFER_CONNECTOR"|"CONNECT_ANALYTICS_CONNECTOR"}}>
     */
    public function updateVoiceConnector(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string, Name:string, RequireEncryption:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{VoiceConnector?:array{VoiceConnectorId?:string, AwsRegion?:"us-east-1"|"us-west-2"|"ca-central-1"|"eu-central-1"|"eu-west-1"|"eu-west-2"|"ap-northeast-2"|"ap-northeast-1"|"ap-southeast-1"|"ap-southeast-2", Name?:string, OutboundHostName?:string, RequireEncryption?:bool, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, VoiceConnectorArn?:string, IntegrationType?:"CONNECT_CALL_TRANSFER_CONNECTOR"|"CONNECT_ANALYTICS_CONNECTOR"}}>
     */
    public function updateVoiceConnectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorGroupId:string, Name:string, VoiceConnectorItems:array<array{VoiceConnectorId:string, Priority:int}>} $args
     * @return \AWS\Result<array{VoiceConnectorGroup?:array{VoiceConnectorGroupId?:string, Name?:string, VoiceConnectorItems?:array<array{VoiceConnectorId:string, Priority:int}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, VoiceConnectorGroupArn?:string}}>
     */
    public function updateVoiceConnectorGroup(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorGroupId:string, Name:string, VoiceConnectorItems:array<array{VoiceConnectorId:string, Priority:int}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{VoiceConnectorGroup?:array{VoiceConnectorGroupId?:string, Name?:string, VoiceConnectorItems?:array<array{VoiceConnectorId:string, Priority:int}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, VoiceConnectorGroupArn?:string}}>
     */
    public function updateVoiceConnectorGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceProfileId:string, SpeakerSearchTaskId:string} $args
     * @return \AWS\Result<array{VoiceProfile?:array{VoiceProfileId?:string, VoiceProfileArn?:string, VoiceProfileDomainId?:string, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, ExpirationTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function updateVoiceProfile(array $args): \AWS\Result { }

    /**
     * @param array{VoiceProfileId:string, SpeakerSearchTaskId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VoiceProfile?:array{VoiceProfileId?:string, VoiceProfileArn?:string, VoiceProfileDomainId?:string, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, ExpirationTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function updateVoiceProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceProfileDomainId:string, Name?:string, Description?:string} $args
     * @return \AWS\Result<array{VoiceProfileDomain?:array{VoiceProfileDomainId?:string, VoiceProfileDomainArn?:string, Name?:string, Description?:string, ServerSideEncryptionConfiguration?:array{KmsKeyArn:string}, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function updateVoiceProfileDomain(array $args): \AWS\Result { }

    /**
     * @param array{VoiceProfileDomainId:string, Name?:string, Description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VoiceProfileDomain?:array{VoiceProfileDomainId?:string, VoiceProfileDomainArn?:string, Name?:string, Description?:string, ServerSideEncryptionConfiguration?:array{KmsKeyArn:string}, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function updateVoiceProfileDomainAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AwsAccountId:string, StreetNumber:string, StreetInfo:string, City:string, State:string, Country:string, PostalCode:string} $args
     * @return \AWS\Result<array{ValidationResult?:int, AddressExternalId?:string, Address?:array{streetName?:string, streetSuffix?:string, postDirectional?:string, preDirectional?:string, streetNumber?:string, city?:string, state?:string, postalCode?:string, postalCodePlus4?:string, country?:string}, CandidateAddressList?:array<array{streetInfo?:string, streetNumber?:string, city?:string, state?:string, postalCode?:string, postalCodePlus4?:string, country?:string}>}>
     */
    public function validateE911Address(array $args): \AWS\Result { }

    /**
     * @param array{AwsAccountId:string, StreetNumber:string, StreetInfo:string, City:string, State:string, Country:string, PostalCode:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ValidationResult?:int, AddressExternalId?:string, Address?:array{streetName?:string, streetSuffix?:string, postDirectional?:string, preDirectional?:string, streetNumber?:string, city?:string, state?:string, postalCode?:string, postalCodePlus4?:string, country?:string}, CandidateAddressList?:array<array{streetInfo?:string, streetNumber?:string, city?:string, state?:string, postalCode?:string, postalCodePlus4?:string, country?:string}>}>
     */
    public function validateE911AddressAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
