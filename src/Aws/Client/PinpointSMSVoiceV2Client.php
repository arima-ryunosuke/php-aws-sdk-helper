<?php
namespace AWS\PinpointSMSVoiceV2;

class PinpointSMSVoiceV2Client
{
    /**
     * @param array{PoolId:string, OriginationIdentity:string, IsoCountryCode:string, ClientToken?:string} $args
     * @return \AWS\Result<array{PoolArn?:string, PoolId?:string, OriginationIdentityArn?:string, OriginationIdentity?:string, IsoCountryCode?:string}>
     */
    public function associateOriginationIdentity(array $args): \AWS\Result { }

    /**
     * @param array{PoolId:string, OriginationIdentity:string, IsoCountryCode:string, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PoolArn?:string, PoolId?:string, OriginationIdentityArn?:string, OriginationIdentity?:string, IsoCountryCode?:string}>
     */
    public function associateOriginationIdentityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProtectConfigurationId:string, ConfigurationSetName:string} $args
     * @return \AWS\Result<array{ConfigurationSetArn:string, ConfigurationSetName:string, ProtectConfigurationArn:string, ProtectConfigurationId:string}>
     */
    public function associateProtectConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ProtectConfigurationId:string, ConfigurationSetName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConfigurationSetArn:string, ConfigurationSetName:string, ProtectConfigurationArn:string, ProtectConfigurationId:string}>
     */
    public function associateProtectConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string, Tags?:array<array{Key:string, Value:string}>, ClientToken?:string} $args
     * @return \AWS\Result<array{ConfigurationSetArn?:string, ConfigurationSetName?:string, Tags?:array<array{Key:string, Value:string}>, CreatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function createConfigurationSet(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string, Tags?:array<array{Key:string, Value:string}>, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConfigurationSetArn?:string, ConfigurationSetName?:string, Tags?:array<array{Key:string, Value:string}>, CreatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function createConfigurationSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string, EventDestinationName:string, MatchingEventTypes:array<"ALL"|"TEXT_ALL"|"TEXT_SENT"|"TEXT_PENDING"|"TEXT_QUEUED"|"TEXT_SUCCESSFUL"|"TEXT_DELIVERED"|"TEXT_INVALID"|"TEXT_INVALID_MESSAGE"|"TEXT_UNREACHABLE"|"TEXT_CARRIER_UNREACHABLE"|"TEXT_BLOCKED"|"TEXT_CARRIER_BLOCKED"|"TEXT_SPAM"|"TEXT_UNKNOWN"|"TEXT_TTL_EXPIRED"|"TEXT_PROTECT_BLOCKED"|"VOICE_ALL"|"VOICE_INITIATED"|"VOICE_RINGING"|"VOICE_ANSWERED"|"VOICE_COMPLETED"|"VOICE_BUSY"|"VOICE_NO_ANSWER"|"VOICE_FAILED"|"VOICE_TTL_EXPIRED"|"MEDIA_ALL"|"MEDIA_PENDING"|"MEDIA_QUEUED"|"MEDIA_SUCCESSFUL"|"MEDIA_DELIVERED"|"MEDIA_INVALID"|"MEDIA_INVALID_MESSAGE"|"MEDIA_UNREACHABLE"|"MEDIA_CARRIER_UNREACHABLE"|"MEDIA_BLOCKED"|"MEDIA_CARRIER_BLOCKED"|"MEDIA_SPAM"|"MEDIA_UNKNOWN"|"MEDIA_TTL_EXPIRED"|"MEDIA_FILE_INACCESSIBLE"|"MEDIA_FILE_TYPE_UNSUPPORTED"|"MEDIA_FILE_SIZE_EXCEEDED">, CloudWatchLogsDestination?:array{IamRoleArn:string, LogGroupArn:string}, KinesisFirehoseDestination?:array{IamRoleArn:string, DeliveryStreamArn:string}, SnsDestination?:array{TopicArn:string}, ClientToken?:string} $args
     * @return \AWS\Result<array{ConfigurationSetArn?:string, ConfigurationSetName?:string, EventDestination?:array{EventDestinationName:string, Enabled:bool, MatchingEventTypes:array<"ALL"|"TEXT_ALL"|"TEXT_SENT"|"TEXT_PENDING"|"TEXT_QUEUED"|"TEXT_SUCCESSFUL"|"TEXT_DELIVERED"|"TEXT_INVALID"|"TEXT_INVALID_MESSAGE"|"TEXT_UNREACHABLE"|"TEXT_CARRIER_UNREACHABLE"|"TEXT_BLOCKED"|"TEXT_CARRIER_BLOCKED"|"TEXT_SPAM"|"TEXT_UNKNOWN"|"TEXT_TTL_EXPIRED"|"TEXT_PROTECT_BLOCKED"|"VOICE_ALL"|"VOICE_INITIATED"|"VOICE_RINGING"|"VOICE_ANSWERED"|"VOICE_COMPLETED"|"VOICE_BUSY"|"VOICE_NO_ANSWER"|"VOICE_FAILED"|"VOICE_TTL_EXPIRED"|"MEDIA_ALL"|"MEDIA_PENDING"|"MEDIA_QUEUED"|"MEDIA_SUCCESSFUL"|"MEDIA_DELIVERED"|"MEDIA_INVALID"|"MEDIA_INVALID_MESSAGE"|"MEDIA_UNREACHABLE"|"MEDIA_CARRIER_UNREACHABLE"|"MEDIA_BLOCKED"|"MEDIA_CARRIER_BLOCKED"|"MEDIA_SPAM"|"MEDIA_UNKNOWN"|"MEDIA_TTL_EXPIRED"|"MEDIA_FILE_INACCESSIBLE"|"MEDIA_FILE_TYPE_UNSUPPORTED"|"MEDIA_FILE_SIZE_EXCEEDED">, CloudWatchLogsDestination?:array{IamRoleArn:string, LogGroupArn:string}, KinesisFirehoseDestination?:array{IamRoleArn:string, DeliveryStreamArn:string}, SnsDestination?:array{TopicArn:string}}}>
     */
    public function createEventDestination(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string, EventDestinationName:string, MatchingEventTypes:array<"ALL"|"TEXT_ALL"|"TEXT_SENT"|"TEXT_PENDING"|"TEXT_QUEUED"|"TEXT_SUCCESSFUL"|"TEXT_DELIVERED"|"TEXT_INVALID"|"TEXT_INVALID_MESSAGE"|"TEXT_UNREACHABLE"|"TEXT_CARRIER_UNREACHABLE"|"TEXT_BLOCKED"|"TEXT_CARRIER_BLOCKED"|"TEXT_SPAM"|"TEXT_UNKNOWN"|"TEXT_TTL_EXPIRED"|"TEXT_PROTECT_BLOCKED"|"VOICE_ALL"|"VOICE_INITIATED"|"VOICE_RINGING"|"VOICE_ANSWERED"|"VOICE_COMPLETED"|"VOICE_BUSY"|"VOICE_NO_ANSWER"|"VOICE_FAILED"|"VOICE_TTL_EXPIRED"|"MEDIA_ALL"|"MEDIA_PENDING"|"MEDIA_QUEUED"|"MEDIA_SUCCESSFUL"|"MEDIA_DELIVERED"|"MEDIA_INVALID"|"MEDIA_INVALID_MESSAGE"|"MEDIA_UNREACHABLE"|"MEDIA_CARRIER_UNREACHABLE"|"MEDIA_BLOCKED"|"MEDIA_CARRIER_BLOCKED"|"MEDIA_SPAM"|"MEDIA_UNKNOWN"|"MEDIA_TTL_EXPIRED"|"MEDIA_FILE_INACCESSIBLE"|"MEDIA_FILE_TYPE_UNSUPPORTED"|"MEDIA_FILE_SIZE_EXCEEDED">, CloudWatchLogsDestination?:array{IamRoleArn:string, LogGroupArn:string}, KinesisFirehoseDestination?:array{IamRoleArn:string, DeliveryStreamArn:string}, SnsDestination?:array{TopicArn:string}, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConfigurationSetArn?:string, ConfigurationSetName?:string, EventDestination?:array{EventDestinationName:string, Enabled:bool, MatchingEventTypes:array<"ALL"|"TEXT_ALL"|"TEXT_SENT"|"TEXT_PENDING"|"TEXT_QUEUED"|"TEXT_SUCCESSFUL"|"TEXT_DELIVERED"|"TEXT_INVALID"|"TEXT_INVALID_MESSAGE"|"TEXT_UNREACHABLE"|"TEXT_CARRIER_UNREACHABLE"|"TEXT_BLOCKED"|"TEXT_CARRIER_BLOCKED"|"TEXT_SPAM"|"TEXT_UNKNOWN"|"TEXT_TTL_EXPIRED"|"TEXT_PROTECT_BLOCKED"|"VOICE_ALL"|"VOICE_INITIATED"|"VOICE_RINGING"|"VOICE_ANSWERED"|"VOICE_COMPLETED"|"VOICE_BUSY"|"VOICE_NO_ANSWER"|"VOICE_FAILED"|"VOICE_TTL_EXPIRED"|"MEDIA_ALL"|"MEDIA_PENDING"|"MEDIA_QUEUED"|"MEDIA_SUCCESSFUL"|"MEDIA_DELIVERED"|"MEDIA_INVALID"|"MEDIA_INVALID_MESSAGE"|"MEDIA_UNREACHABLE"|"MEDIA_CARRIER_UNREACHABLE"|"MEDIA_BLOCKED"|"MEDIA_CARRIER_BLOCKED"|"MEDIA_SPAM"|"MEDIA_UNKNOWN"|"MEDIA_TTL_EXPIRED"|"MEDIA_FILE_INACCESSIBLE"|"MEDIA_FILE_TYPE_UNSUPPORTED"|"MEDIA_FILE_SIZE_EXCEEDED">, CloudWatchLogsDestination?:array{IamRoleArn:string, LogGroupArn:string}, KinesisFirehoseDestination?:array{IamRoleArn:string, DeliveryStreamArn:string}, SnsDestination?:array{TopicArn:string}}}>
     */
    public function createEventDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OptOutListName:string, Tags?:array<array{Key:string, Value:string}>, ClientToken?:string} $args
     * @return \AWS\Result<array{OptOutListArn?:string, OptOutListName?:string, Tags?:array<array{Key:string, Value:string}>, CreatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function createOptOutList(array $args): \AWS\Result { }

    /**
     * @param array{OptOutListName:string, Tags?:array<array{Key:string, Value:string}>, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{OptOutListArn?:string, OptOutListName?:string, Tags?:array<array{Key:string, Value:string}>, CreatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function createOptOutListAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OriginationIdentity:string, IsoCountryCode:string, MessageType:"TRANSACTIONAL"|"PROMOTIONAL", DeletionProtectionEnabled?:bool, Tags?:array<array{Key:string, Value:string}>, ClientToken?:string} $args
     * @return \AWS\Result<array{PoolArn?:string, PoolId?:string, Status?:"CREATING"|"ACTIVE"|"DELETING", MessageType?:"TRANSACTIONAL"|"PROMOTIONAL", TwoWayEnabled?:bool, TwoWayChannelArn?:string, TwoWayChannelRole?:string, SelfManagedOptOutsEnabled?:bool, OptOutListName?:string, SharedRoutesEnabled?:bool, DeletionProtectionEnabled?:bool, Tags?:array<array{Key:string, Value:string}>, CreatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function createPool(array $args): \AWS\Result { }

    /**
     * @param array{OriginationIdentity:string, IsoCountryCode:string, MessageType:"TRANSACTIONAL"|"PROMOTIONAL", DeletionProtectionEnabled?:bool, Tags?:array<array{Key:string, Value:string}>, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PoolArn?:string, PoolId?:string, Status?:"CREATING"|"ACTIVE"|"DELETING", MessageType?:"TRANSACTIONAL"|"PROMOTIONAL", TwoWayEnabled?:bool, TwoWayChannelArn?:string, TwoWayChannelRole?:string, SelfManagedOptOutsEnabled?:bool, OptOutListName?:string, SharedRoutesEnabled?:bool, DeletionProtectionEnabled?:bool, Tags?:array<array{Key:string, Value:string}>, CreatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function createPoolAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, DeletionProtectionEnabled?:bool, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{ProtectConfigurationArn:string, ProtectConfigurationId:string, CreatedTimestamp:int|string|\DateTimeInterface, AccountDefault:bool, DeletionProtectionEnabled:bool, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function createProtectConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, DeletionProtectionEnabled?:bool, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProtectConfigurationArn:string, ProtectConfigurationId:string, CreatedTimestamp:int|string|\DateTimeInterface, AccountDefault:bool, DeletionProtectionEnabled:bool, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function createProtectConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RegistrationType:string, Tags?:array<array{Key:string, Value:string}>, ClientToken?:string} $args
     * @return \AWS\Result<array{RegistrationArn:string, RegistrationId:string, RegistrationType:string, RegistrationStatus:"CREATED"|"SUBMITTED"|"REVIEWING"|"REQUIRES_AUTHENTICATION"|"PROVISIONING"|"COMPLETE"|"REQUIRES_UPDATES"|"CLOSED"|"DELETED", CurrentVersionNumber:int, AdditionalAttributes?:array<string, string>, Tags?:array<array{Key:string, Value:string}>, CreatedTimestamp:int|string|\DateTimeInterface}>
     */
    public function createRegistration(array $args): \AWS\Result { }

    /**
     * @param array{RegistrationType:string, Tags?:array<array{Key:string, Value:string}>, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RegistrationArn:string, RegistrationId:string, RegistrationType:string, RegistrationStatus:"CREATED"|"SUBMITTED"|"REVIEWING"|"REQUIRES_AUTHENTICATION"|"PROVISIONING"|"COMPLETE"|"REQUIRES_UPDATES"|"CLOSED"|"DELETED", CurrentVersionNumber:int, AdditionalAttributes?:array<string, string>, Tags?:array<array{Key:string, Value:string}>, CreatedTimestamp:int|string|\DateTimeInterface}>
     */
    public function createRegistrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RegistrationId:string, ResourceId:string} $args
     * @return \AWS\Result<array{RegistrationArn:string, RegistrationId:string, RegistrationType:string, ResourceArn:string, ResourceId:string, ResourceType:string, IsoCountryCode?:string, PhoneNumber?:string}>
     */
    public function createRegistrationAssociation(array $args): \AWS\Result { }

    /**
     * @param array{RegistrationId:string, ResourceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RegistrationArn:string, RegistrationId:string, RegistrationType:string, ResourceArn:string, ResourceId:string, ResourceType:string, IsoCountryCode?:string, PhoneNumber?:string}>
     */
    public function createRegistrationAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AttachmentBody?:string|resource|\Psr\Http\Message\StreamInterface, AttachmentUrl?:string, Tags?:array<array{Key:string, Value:string}>, ClientToken?:string} $args
     * @return \AWS\Result<array{RegistrationAttachmentArn:string, RegistrationAttachmentId:string, AttachmentStatus:"UPLOAD_IN_PROGRESS"|"UPLOAD_COMPLETE"|"UPLOAD_FAILED"|"DELETED", Tags?:array<array{Key:string, Value:string}>, CreatedTimestamp:int|string|\DateTimeInterface}>
     */
    public function createRegistrationAttachment(array $args = []): \AWS\Result { }

    /**
     * @param array{AttachmentBody?:string|resource|\Psr\Http\Message\StreamInterface, AttachmentUrl?:string, Tags?:array<array{Key:string, Value:string}>, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RegistrationAttachmentArn:string, RegistrationAttachmentId:string, AttachmentStatus:"UPLOAD_IN_PROGRESS"|"UPLOAD_COMPLETE"|"UPLOAD_FAILED"|"DELETED", Tags?:array<array{Key:string, Value:string}>, CreatedTimestamp:int|string|\DateTimeInterface}>
     */
    public function createRegistrationAttachmentAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RegistrationId:string} $args
     * @return \AWS\Result<array{RegistrationArn:string, RegistrationId:string, VersionNumber:int, RegistrationVersionStatus:"DRAFT"|"SUBMITTED"|"REVIEWING"|"REQUIRES_AUTHENTICATION"|"APPROVED"|"DISCARDED"|"DENIED"|"REVOKED"|"ARCHIVED", RegistrationVersionStatusHistory:array{DraftTimestamp:int|string|\DateTimeInterface, SubmittedTimestamp?:int|string|\DateTimeInterface, ReviewingTimestamp?:int|string|\DateTimeInterface, RequiresAuthenticationTimestamp?:int|string|\DateTimeInterface, ApprovedTimestamp?:int|string|\DateTimeInterface, DiscardedTimestamp?:int|string|\DateTimeInterface, DeniedTimestamp?:int|string|\DateTimeInterface, RevokedTimestamp?:int|string|\DateTimeInterface, ArchivedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function createRegistrationVersion(array $args): \AWS\Result { }

    /**
     * @param array{RegistrationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RegistrationArn:string, RegistrationId:string, VersionNumber:int, RegistrationVersionStatus:"DRAFT"|"SUBMITTED"|"REVIEWING"|"REQUIRES_AUTHENTICATION"|"APPROVED"|"DISCARDED"|"DENIED"|"REVOKED"|"ARCHIVED", RegistrationVersionStatusHistory:array{DraftTimestamp:int|string|\DateTimeInterface, SubmittedTimestamp?:int|string|\DateTimeInterface, ReviewingTimestamp?:int|string|\DateTimeInterface, RequiresAuthenticationTimestamp?:int|string|\DateTimeInterface, ApprovedTimestamp?:int|string|\DateTimeInterface, DiscardedTimestamp?:int|string|\DateTimeInterface, DeniedTimestamp?:int|string|\DateTimeInterface, RevokedTimestamp?:int|string|\DateTimeInterface, ArchivedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function createRegistrationVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DestinationPhoneNumber:string, Tags?:array<array{Key:string, Value:string}>, ClientToken?:string} $args
     * @return \AWS\Result<array{VerifiedDestinationNumberArn:string, VerifiedDestinationNumberId:string, DestinationPhoneNumber:string, Status:"PENDING"|"VERIFIED", Tags?:array<array{Key:string, Value:string}>, CreatedTimestamp:int|string|\DateTimeInterface}>
     */
    public function createVerifiedDestinationNumber(array $args): \AWS\Result { }

    /**
     * @param array{DestinationPhoneNumber:string, Tags?:array<array{Key:string, Value:string}>, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VerifiedDestinationNumberArn:string, VerifiedDestinationNumberId:string, DestinationPhoneNumber:string, Status:"PENDING"|"VERIFIED", Tags?:array<array{Key:string, Value:string}>, CreatedTimestamp:int|string|\DateTimeInterface}>
     */
    public function createVerifiedDestinationNumberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{DefaultProtectConfigurationArn:string, DefaultProtectConfigurationId:string}>
     */
    public function deleteAccountDefaultProtectConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{DefaultProtectConfigurationArn:string, DefaultProtectConfigurationId:string}>
     */
    public function deleteAccountDefaultProtectConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string} $args
     * @return \AWS\Result<array{ConfigurationSetArn?:string, ConfigurationSetName?:string, EventDestinations?:array<array{EventDestinationName:string, Enabled:bool, MatchingEventTypes:array<"ALL"|"TEXT_ALL"|"TEXT_SENT"|"TEXT_PENDING"|"TEXT_QUEUED"|"TEXT_SUCCESSFUL"|"TEXT_DELIVERED"|"TEXT_INVALID"|"TEXT_INVALID_MESSAGE"|"TEXT_UNREACHABLE"|"TEXT_CARRIER_UNREACHABLE"|"TEXT_BLOCKED"|"TEXT_CARRIER_BLOCKED"|"TEXT_SPAM"|"TEXT_UNKNOWN"|"TEXT_TTL_EXPIRED"|"TEXT_PROTECT_BLOCKED"|"VOICE_ALL"|"VOICE_INITIATED"|"VOICE_RINGING"|"VOICE_ANSWERED"|"VOICE_COMPLETED"|"VOICE_BUSY"|"VOICE_NO_ANSWER"|"VOICE_FAILED"|"VOICE_TTL_EXPIRED"|"MEDIA_ALL"|"MEDIA_PENDING"|"MEDIA_QUEUED"|"MEDIA_SUCCESSFUL"|"MEDIA_DELIVERED"|"MEDIA_INVALID"|"MEDIA_INVALID_MESSAGE"|"MEDIA_UNREACHABLE"|"MEDIA_CARRIER_UNREACHABLE"|"MEDIA_BLOCKED"|"MEDIA_CARRIER_BLOCKED"|"MEDIA_SPAM"|"MEDIA_UNKNOWN"|"MEDIA_TTL_EXPIRED"|"MEDIA_FILE_INACCESSIBLE"|"MEDIA_FILE_TYPE_UNSUPPORTED"|"MEDIA_FILE_SIZE_EXCEEDED">, CloudWatchLogsDestination?:array{IamRoleArn:string, LogGroupArn:string}, KinesisFirehoseDestination?:array{IamRoleArn:string, DeliveryStreamArn:string}, SnsDestination?:array{TopicArn:string}}>, DefaultMessageType?:"TRANSACTIONAL"|"PROMOTIONAL", DefaultSenderId?:string, DefaultMessageFeedbackEnabled?:bool, CreatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function deleteConfigurationSet(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConfigurationSetArn?:string, ConfigurationSetName?:string, EventDestinations?:array<array{EventDestinationName:string, Enabled:bool, MatchingEventTypes:array<"ALL"|"TEXT_ALL"|"TEXT_SENT"|"TEXT_PENDING"|"TEXT_QUEUED"|"TEXT_SUCCESSFUL"|"TEXT_DELIVERED"|"TEXT_INVALID"|"TEXT_INVALID_MESSAGE"|"TEXT_UNREACHABLE"|"TEXT_CARRIER_UNREACHABLE"|"TEXT_BLOCKED"|"TEXT_CARRIER_BLOCKED"|"TEXT_SPAM"|"TEXT_UNKNOWN"|"TEXT_TTL_EXPIRED"|"TEXT_PROTECT_BLOCKED"|"VOICE_ALL"|"VOICE_INITIATED"|"VOICE_RINGING"|"VOICE_ANSWERED"|"VOICE_COMPLETED"|"VOICE_BUSY"|"VOICE_NO_ANSWER"|"VOICE_FAILED"|"VOICE_TTL_EXPIRED"|"MEDIA_ALL"|"MEDIA_PENDING"|"MEDIA_QUEUED"|"MEDIA_SUCCESSFUL"|"MEDIA_DELIVERED"|"MEDIA_INVALID"|"MEDIA_INVALID_MESSAGE"|"MEDIA_UNREACHABLE"|"MEDIA_CARRIER_UNREACHABLE"|"MEDIA_BLOCKED"|"MEDIA_CARRIER_BLOCKED"|"MEDIA_SPAM"|"MEDIA_UNKNOWN"|"MEDIA_TTL_EXPIRED"|"MEDIA_FILE_INACCESSIBLE"|"MEDIA_FILE_TYPE_UNSUPPORTED"|"MEDIA_FILE_SIZE_EXCEEDED">, CloudWatchLogsDestination?:array{IamRoleArn:string, LogGroupArn:string}, KinesisFirehoseDestination?:array{IamRoleArn:string, DeliveryStreamArn:string}, SnsDestination?:array{TopicArn:string}}>, DefaultMessageType?:"TRANSACTIONAL"|"PROMOTIONAL", DefaultSenderId?:string, DefaultMessageFeedbackEnabled?:bool, CreatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function deleteConfigurationSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string} $args
     * @return \AWS\Result<array{ConfigurationSetArn?:string, ConfigurationSetName?:string, MessageType?:"TRANSACTIONAL"|"PROMOTIONAL"}>
     */
    public function deleteDefaultMessageType(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConfigurationSetArn?:string, ConfigurationSetName?:string, MessageType?:"TRANSACTIONAL"|"PROMOTIONAL"}>
     */
    public function deleteDefaultMessageTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string} $args
     * @return \AWS\Result<array{ConfigurationSetArn?:string, ConfigurationSetName?:string, SenderId?:string}>
     */
    public function deleteDefaultSenderId(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConfigurationSetArn?:string, ConfigurationSetName?:string, SenderId?:string}>
     */
    public function deleteDefaultSenderIdAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string, EventDestinationName:string} $args
     * @return \AWS\Result<array{ConfigurationSetArn?:string, ConfigurationSetName?:string, EventDestination?:array{EventDestinationName:string, Enabled:bool, MatchingEventTypes:array<"ALL"|"TEXT_ALL"|"TEXT_SENT"|"TEXT_PENDING"|"TEXT_QUEUED"|"TEXT_SUCCESSFUL"|"TEXT_DELIVERED"|"TEXT_INVALID"|"TEXT_INVALID_MESSAGE"|"TEXT_UNREACHABLE"|"TEXT_CARRIER_UNREACHABLE"|"TEXT_BLOCKED"|"TEXT_CARRIER_BLOCKED"|"TEXT_SPAM"|"TEXT_UNKNOWN"|"TEXT_TTL_EXPIRED"|"TEXT_PROTECT_BLOCKED"|"VOICE_ALL"|"VOICE_INITIATED"|"VOICE_RINGING"|"VOICE_ANSWERED"|"VOICE_COMPLETED"|"VOICE_BUSY"|"VOICE_NO_ANSWER"|"VOICE_FAILED"|"VOICE_TTL_EXPIRED"|"MEDIA_ALL"|"MEDIA_PENDING"|"MEDIA_QUEUED"|"MEDIA_SUCCESSFUL"|"MEDIA_DELIVERED"|"MEDIA_INVALID"|"MEDIA_INVALID_MESSAGE"|"MEDIA_UNREACHABLE"|"MEDIA_CARRIER_UNREACHABLE"|"MEDIA_BLOCKED"|"MEDIA_CARRIER_BLOCKED"|"MEDIA_SPAM"|"MEDIA_UNKNOWN"|"MEDIA_TTL_EXPIRED"|"MEDIA_FILE_INACCESSIBLE"|"MEDIA_FILE_TYPE_UNSUPPORTED"|"MEDIA_FILE_SIZE_EXCEEDED">, CloudWatchLogsDestination?:array{IamRoleArn:string, LogGroupArn:string}, KinesisFirehoseDestination?:array{IamRoleArn:string, DeliveryStreamArn:string}, SnsDestination?:array{TopicArn:string}}}>
     */
    public function deleteEventDestination(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string, EventDestinationName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConfigurationSetArn?:string, ConfigurationSetName?:string, EventDestination?:array{EventDestinationName:string, Enabled:bool, MatchingEventTypes:array<"ALL"|"TEXT_ALL"|"TEXT_SENT"|"TEXT_PENDING"|"TEXT_QUEUED"|"TEXT_SUCCESSFUL"|"TEXT_DELIVERED"|"TEXT_INVALID"|"TEXT_INVALID_MESSAGE"|"TEXT_UNREACHABLE"|"TEXT_CARRIER_UNREACHABLE"|"TEXT_BLOCKED"|"TEXT_CARRIER_BLOCKED"|"TEXT_SPAM"|"TEXT_UNKNOWN"|"TEXT_TTL_EXPIRED"|"TEXT_PROTECT_BLOCKED"|"VOICE_ALL"|"VOICE_INITIATED"|"VOICE_RINGING"|"VOICE_ANSWERED"|"VOICE_COMPLETED"|"VOICE_BUSY"|"VOICE_NO_ANSWER"|"VOICE_FAILED"|"VOICE_TTL_EXPIRED"|"MEDIA_ALL"|"MEDIA_PENDING"|"MEDIA_QUEUED"|"MEDIA_SUCCESSFUL"|"MEDIA_DELIVERED"|"MEDIA_INVALID"|"MEDIA_INVALID_MESSAGE"|"MEDIA_UNREACHABLE"|"MEDIA_CARRIER_UNREACHABLE"|"MEDIA_BLOCKED"|"MEDIA_CARRIER_BLOCKED"|"MEDIA_SPAM"|"MEDIA_UNKNOWN"|"MEDIA_TTL_EXPIRED"|"MEDIA_FILE_INACCESSIBLE"|"MEDIA_FILE_TYPE_UNSUPPORTED"|"MEDIA_FILE_SIZE_EXCEEDED">, CloudWatchLogsDestination?:array{IamRoleArn:string, LogGroupArn:string}, KinesisFirehoseDestination?:array{IamRoleArn:string, DeliveryStreamArn:string}, SnsDestination?:array{TopicArn:string}}}>
     */
    public function deleteEventDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OriginationIdentity:string, Keyword:string} $args
     * @return \AWS\Result<array{OriginationIdentityArn?:string, OriginationIdentity?:string, Keyword?:string, KeywordMessage?:string, KeywordAction?:"AUTOMATIC_RESPONSE"|"OPT_OUT"|"OPT_IN"}>
     */
    public function deleteKeyword(array $args): \AWS\Result { }

    /**
     * @param array{OriginationIdentity:string, Keyword:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{OriginationIdentityArn?:string, OriginationIdentity?:string, Keyword?:string, KeywordMessage?:string, KeywordAction?:"AUTOMATIC_RESPONSE"|"OPT_OUT"|"OPT_IN"}>
     */
    public function deleteKeywordAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{MonthlyLimit?:int}>
     */
    public function deleteMediaMessageSpendLimitOverride(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{MonthlyLimit?:int}>
     */
    public function deleteMediaMessageSpendLimitOverrideAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OptOutListName:string} $args
     * @return \AWS\Result<array{OptOutListArn?:string, OptOutListName?:string, CreatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function deleteOptOutList(array $args): \AWS\Result { }

    /**
     * @param array{OptOutListName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{OptOutListArn?:string, OptOutListName?:string, CreatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function deleteOptOutListAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OptOutListName:string, OptedOutNumber:string} $args
     * @return \AWS\Result<array{OptOutListArn?:string, OptOutListName?:string, OptedOutNumber?:string, OptedOutTimestamp?:int|string|\DateTimeInterface, EndUserOptedOut?:bool}>
     */
    public function deleteOptedOutNumber(array $args): \AWS\Result { }

    /**
     * @param array{OptOutListName:string, OptedOutNumber:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{OptOutListArn?:string, OptOutListName?:string, OptedOutNumber?:string, OptedOutTimestamp?:int|string|\DateTimeInterface, EndUserOptedOut?:bool}>
     */
    public function deleteOptedOutNumberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PoolId:string} $args
     * @return \AWS\Result<array{PoolArn?:string, PoolId?:string, Status?:"CREATING"|"ACTIVE"|"DELETING", MessageType?:"TRANSACTIONAL"|"PROMOTIONAL", TwoWayEnabled?:bool, TwoWayChannelArn?:string, TwoWayChannelRole?:string, SelfManagedOptOutsEnabled?:bool, OptOutListName?:string, SharedRoutesEnabled?:bool, CreatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function deletePool(array $args): \AWS\Result { }

    /**
     * @param array{PoolId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PoolArn?:string, PoolId?:string, Status?:"CREATING"|"ACTIVE"|"DELETING", MessageType?:"TRANSACTIONAL"|"PROMOTIONAL", TwoWayEnabled?:bool, TwoWayChannelArn?:string, TwoWayChannelRole?:string, SelfManagedOptOutsEnabled?:bool, OptOutListName?:string, SharedRoutesEnabled?:bool, CreatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function deletePoolAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProtectConfigurationId:string} $args
     * @return \AWS\Result<array{ProtectConfigurationArn:string, ProtectConfigurationId:string, CreatedTimestamp:int|string|\DateTimeInterface, AccountDefault:bool, DeletionProtectionEnabled:bool}>
     */
    public function deleteProtectConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ProtectConfigurationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProtectConfigurationArn:string, ProtectConfigurationId:string, CreatedTimestamp:int|string|\DateTimeInterface, AccountDefault:bool, DeletionProtectionEnabled:bool}>
     */
    public function deleteProtectConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProtectConfigurationId:string, DestinationPhoneNumber:string} $args
     * @return \AWS\Result<array{ProtectConfigurationArn:string, ProtectConfigurationId:string, DestinationPhoneNumber:string, CreatedTimestamp:int|string|\DateTimeInterface, Action:"ALLOW"|"BLOCK", IsoCountryCode?:string, ExpirationTimestamp?:int|string|\DateTimeInterface}>
     */
    public function deleteProtectConfigurationRuleSetNumberOverride(array $args): \AWS\Result { }

    /**
     * @param array{ProtectConfigurationId:string, DestinationPhoneNumber:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProtectConfigurationArn:string, ProtectConfigurationId:string, DestinationPhoneNumber:string, CreatedTimestamp:int|string|\DateTimeInterface, Action:"ALLOW"|"BLOCK", IsoCountryCode?:string, ExpirationTimestamp?:int|string|\DateTimeInterface}>
     */
    public function deleteProtectConfigurationRuleSetNumberOverrideAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RegistrationId:string} $args
     * @return \AWS\Result<array{RegistrationArn:string, RegistrationId:string, RegistrationType:string, RegistrationStatus:"CREATED"|"SUBMITTED"|"REVIEWING"|"REQUIRES_AUTHENTICATION"|"PROVISIONING"|"COMPLETE"|"REQUIRES_UPDATES"|"CLOSED"|"DELETED", CurrentVersionNumber:int, ApprovedVersionNumber?:int, LatestDeniedVersionNumber?:int, AdditionalAttributes?:array<string, string>, CreatedTimestamp:int|string|\DateTimeInterface}>
     */
    public function deleteRegistration(array $args): \AWS\Result { }

    /**
     * @param array{RegistrationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RegistrationArn:string, RegistrationId:string, RegistrationType:string, RegistrationStatus:"CREATED"|"SUBMITTED"|"REVIEWING"|"REQUIRES_AUTHENTICATION"|"PROVISIONING"|"COMPLETE"|"REQUIRES_UPDATES"|"CLOSED"|"DELETED", CurrentVersionNumber:int, ApprovedVersionNumber?:int, LatestDeniedVersionNumber?:int, AdditionalAttributes?:array<string, string>, CreatedTimestamp:int|string|\DateTimeInterface}>
     */
    public function deleteRegistrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RegistrationAttachmentId:string} $args
     * @return \AWS\Result<array{RegistrationAttachmentArn:string, RegistrationAttachmentId:string, AttachmentStatus:"UPLOAD_IN_PROGRESS"|"UPLOAD_COMPLETE"|"UPLOAD_FAILED"|"DELETED", AttachmentUploadErrorReason?:"INTERNAL_ERROR", CreatedTimestamp:int|string|\DateTimeInterface}>
     */
    public function deleteRegistrationAttachment(array $args): \AWS\Result { }

    /**
     * @param array{RegistrationAttachmentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RegistrationAttachmentArn:string, RegistrationAttachmentId:string, AttachmentStatus:"UPLOAD_IN_PROGRESS"|"UPLOAD_COMPLETE"|"UPLOAD_FAILED"|"DELETED", AttachmentUploadErrorReason?:"INTERNAL_ERROR", CreatedTimestamp:int|string|\DateTimeInterface}>
     */
    public function deleteRegistrationAttachmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RegistrationId:string, FieldPath:string} $args
     * @return \AWS\Result<array{RegistrationArn:string, RegistrationId:string, VersionNumber:int, FieldPath:string, SelectChoices?:array<string>, TextValue?:string, RegistrationAttachmentId?:string}>
     */
    public function deleteRegistrationFieldValue(array $args): \AWS\Result { }

    /**
     * @param array{RegistrationId:string, FieldPath:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RegistrationArn:string, RegistrationId:string, VersionNumber:int, FieldPath:string, SelectChoices?:array<string>, TextValue?:string, RegistrationAttachmentId?:string}>
     */
    public function deleteRegistrationFieldValueAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{ResourceArn?:string, Policy?:string, CreatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function deleteResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceArn?:string, Policy?:string, CreatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function deleteResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{MonthlyLimit?:int}>
     */
    public function deleteTextMessageSpendLimitOverride(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{MonthlyLimit?:int}>
     */
    public function deleteTextMessageSpendLimitOverrideAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VerifiedDestinationNumberId:string} $args
     * @return \AWS\Result<array{VerifiedDestinationNumberArn:string, VerifiedDestinationNumberId:string, DestinationPhoneNumber:string, CreatedTimestamp:int|string|\DateTimeInterface}>
     */
    public function deleteVerifiedDestinationNumber(array $args): \AWS\Result { }

    /**
     * @param array{VerifiedDestinationNumberId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VerifiedDestinationNumberArn:string, VerifiedDestinationNumberId:string, DestinationPhoneNumber:string, CreatedTimestamp:int|string|\DateTimeInterface}>
     */
    public function deleteVerifiedDestinationNumberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{MonthlyLimit?:int}>
     */
    public function deleteVoiceMessageSpendLimitOverride(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{MonthlyLimit?:int}>
     */
    public function deleteVoiceMessageSpendLimitOverrideAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{AccountAttributes?:array<array{Name:"ACCOUNT_TIER"|"DEFAULT_PROTECT_CONFIGURATION_ID", Value:string}>, NextToken?:string}>
     */
    public function describeAccountAttributes(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountAttributes?:array<array{Name:"ACCOUNT_TIER"|"DEFAULT_PROTECT_CONFIGURATION_ID", Value:string}>, NextToken?:string}>
     */
    public function describeAccountAttributesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{AccountLimits?:array<array{Name:"PHONE_NUMBERS"|"POOLS"|"CONFIGURATION_SETS"|"OPT_OUT_LISTS"|"SENDER_IDS"|"REGISTRATIONS"|"REGISTRATION_ATTACHMENTS"|"VERIFIED_DESTINATION_NUMBERS", Used:int, Max:int}>, NextToken?:string}>
     */
    public function describeAccountLimits(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountLimits?:array<array{Name:"PHONE_NUMBERS"|"POOLS"|"CONFIGURATION_SETS"|"OPT_OUT_LISTS"|"SENDER_IDS"|"REGISTRATIONS"|"REGISTRATION_ATTACHMENTS"|"VERIFIED_DESTINATION_NUMBERS", Used:int, Max:int}>, NextToken?:string}>
     */
    public function describeAccountLimitsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetNames?:array<string>, Filters?:array<array{Name:"event-destination-name"|"matching-event-types"|"default-message-type"|"default-sender-id"|"default-message-feedback-enabled"|"protect-configuration-id", Values:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ConfigurationSets?:array<array{ConfigurationSetArn:string, ConfigurationSetName:string, EventDestinations:array<array{EventDestinationName:string, Enabled:bool, MatchingEventTypes:array<"ALL"|"TEXT_ALL"|"TEXT_SENT"|"TEXT_PENDING"|"TEXT_QUEUED"|"TEXT_SUCCESSFUL"|"TEXT_DELIVERED"|"TEXT_INVALID"|"TEXT_INVALID_MESSAGE"|"TEXT_UNREACHABLE"|"TEXT_CARRIER_UNREACHABLE"|"TEXT_BLOCKED"|"TEXT_CARRIER_BLOCKED"|"TEXT_SPAM"|"TEXT_UNKNOWN"|"TEXT_TTL_EXPIRED"|"TEXT_PROTECT_BLOCKED"|"VOICE_ALL"|"VOICE_INITIATED"|"VOICE_RINGING"|"VOICE_ANSWERED"|"VOICE_COMPLETED"|"VOICE_BUSY"|"VOICE_NO_ANSWER"|"VOICE_FAILED"|"VOICE_TTL_EXPIRED"|"MEDIA_ALL"|"MEDIA_PENDING"|"MEDIA_QUEUED"|"MEDIA_SUCCESSFUL"|"MEDIA_DELIVERED"|"MEDIA_INVALID"|"MEDIA_INVALID_MESSAGE"|"MEDIA_UNREACHABLE"|"MEDIA_CARRIER_UNREACHABLE"|"MEDIA_BLOCKED"|"MEDIA_CARRIER_BLOCKED"|"MEDIA_SPAM"|"MEDIA_UNKNOWN"|"MEDIA_TTL_EXPIRED"|"MEDIA_FILE_INACCESSIBLE"|"MEDIA_FILE_TYPE_UNSUPPORTED"|"MEDIA_FILE_SIZE_EXCEEDED">, CloudWatchLogsDestination?:array{IamRoleArn:string, LogGroupArn:string}, KinesisFirehoseDestination?:array{IamRoleArn:string, DeliveryStreamArn:string}, SnsDestination?:array{TopicArn:string}}>, DefaultMessageType?:"TRANSACTIONAL"|"PROMOTIONAL", DefaultSenderId?:string, DefaultMessageFeedbackEnabled?:bool, CreatedTimestamp:int|string|\DateTimeInterface, ProtectConfigurationId?:string}>, NextToken?:string}>
     */
    public function describeConfigurationSets(array $args = []): \AWS\Result { }

    /**
     * @param array{ConfigurationSetNames?:array<string>, Filters?:array<array{Name:"event-destination-name"|"matching-event-types"|"default-message-type"|"default-sender-id"|"default-message-feedback-enabled"|"protect-configuration-id", Values:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConfigurationSets?:array<array{ConfigurationSetArn:string, ConfigurationSetName:string, EventDestinations:array<array{EventDestinationName:string, Enabled:bool, MatchingEventTypes:array<"ALL"|"TEXT_ALL"|"TEXT_SENT"|"TEXT_PENDING"|"TEXT_QUEUED"|"TEXT_SUCCESSFUL"|"TEXT_DELIVERED"|"TEXT_INVALID"|"TEXT_INVALID_MESSAGE"|"TEXT_UNREACHABLE"|"TEXT_CARRIER_UNREACHABLE"|"TEXT_BLOCKED"|"TEXT_CARRIER_BLOCKED"|"TEXT_SPAM"|"TEXT_UNKNOWN"|"TEXT_TTL_EXPIRED"|"TEXT_PROTECT_BLOCKED"|"VOICE_ALL"|"VOICE_INITIATED"|"VOICE_RINGING"|"VOICE_ANSWERED"|"VOICE_COMPLETED"|"VOICE_BUSY"|"VOICE_NO_ANSWER"|"VOICE_FAILED"|"VOICE_TTL_EXPIRED"|"MEDIA_ALL"|"MEDIA_PENDING"|"MEDIA_QUEUED"|"MEDIA_SUCCESSFUL"|"MEDIA_DELIVERED"|"MEDIA_INVALID"|"MEDIA_INVALID_MESSAGE"|"MEDIA_UNREACHABLE"|"MEDIA_CARRIER_UNREACHABLE"|"MEDIA_BLOCKED"|"MEDIA_CARRIER_BLOCKED"|"MEDIA_SPAM"|"MEDIA_UNKNOWN"|"MEDIA_TTL_EXPIRED"|"MEDIA_FILE_INACCESSIBLE"|"MEDIA_FILE_TYPE_UNSUPPORTED"|"MEDIA_FILE_SIZE_EXCEEDED">, CloudWatchLogsDestination?:array{IamRoleArn:string, LogGroupArn:string}, KinesisFirehoseDestination?:array{IamRoleArn:string, DeliveryStreamArn:string}, SnsDestination?:array{TopicArn:string}}>, DefaultMessageType?:"TRANSACTIONAL"|"PROMOTIONAL", DefaultSenderId?:string, DefaultMessageFeedbackEnabled?:bool, CreatedTimestamp:int|string|\DateTimeInterface, ProtectConfigurationId?:string}>, NextToken?:string}>
     */
    public function describeConfigurationSetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OriginationIdentity:string, Keywords?:array<string>, Filters?:array<array{Name:"keyword-action", Values:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{OriginationIdentityArn?:string, OriginationIdentity?:string, Keywords?:array<array{Keyword:string, KeywordMessage:string, KeywordAction:"AUTOMATIC_RESPONSE"|"OPT_OUT"|"OPT_IN"}>, NextToken?:string}>
     */
    public function describeKeywords(array $args): \AWS\Result { }

    /**
     * @param array{OriginationIdentity:string, Keywords?:array<string>, Filters?:array<array{Name:"keyword-action", Values:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{OriginationIdentityArn?:string, OriginationIdentity?:string, Keywords?:array<array{Keyword:string, KeywordMessage:string, KeywordAction:"AUTOMATIC_RESPONSE"|"OPT_OUT"|"OPT_IN"}>, NextToken?:string}>
     */
    public function describeKeywordsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OptOutListNames?:array<string>, NextToken?:string, MaxResults?:int, Owner?:"SELF"|"SHARED"} $args
     * @return \AWS\Result<array{OptOutLists?:array<array{OptOutListArn:string, OptOutListName:string, CreatedTimestamp:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeOptOutLists(array $args = []): \AWS\Result { }

    /**
     * @param array{OptOutListNames?:array<string>, NextToken?:string, MaxResults?:int, Owner?:"SELF"|"SHARED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{OptOutLists?:array<array{OptOutListArn:string, OptOutListName:string, CreatedTimestamp:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeOptOutListsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OptOutListName:string, OptedOutNumbers?:array<string>, Filters?:array<array{Name:"end-user-opted-out", Values:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{OptOutListArn?:string, OptOutListName?:string, OptedOutNumbers?:array<array{OptedOutNumber:string, OptedOutTimestamp:int|string|\DateTimeInterface, EndUserOptedOut:bool}>, NextToken?:string}>
     */
    public function describeOptedOutNumbers(array $args): \AWS\Result { }

    /**
     * @param array{OptOutListName:string, OptedOutNumbers?:array<string>, Filters?:array<array{Name:"end-user-opted-out", Values:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{OptOutListArn?:string, OptOutListName?:string, OptedOutNumbers?:array<array{OptedOutNumber:string, OptedOutTimestamp:int|string|\DateTimeInterface, EndUserOptedOut:bool}>, NextToken?:string}>
     */
    public function describeOptedOutNumbersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PhoneNumberIds?:array<string>, Filters?:array<array{Name:"status"|"iso-country-code"|"message-type"|"number-capability"|"number-type"|"two-way-enabled"|"self-managed-opt-outs-enabled"|"opt-out-list-name"|"deletion-protection-enabled"|"two-way-channel-arn", Values:array<string>}>, NextToken?:string, MaxResults?:int, Owner?:"SELF"|"SHARED"} $args
     * @return \AWS\Result<array{PhoneNumbers?:array<array{PhoneNumberArn:string, PhoneNumberId?:string, PhoneNumber:string, Status:"PENDING"|"ACTIVE"|"ASSOCIATING"|"DISASSOCIATING"|"DELETED", IsoCountryCode:string, MessageType:"TRANSACTIONAL"|"PROMOTIONAL", NumberCapabilities:array<"SMS"|"VOICE"|"MMS">, NumberType:"SHORT_CODE"|"LONG_CODE"|"TOLL_FREE"|"TEN_DLC"|"SIMULATOR", MonthlyLeasingPrice:string, TwoWayEnabled:bool, TwoWayChannelArn?:string, TwoWayChannelRole?:string, SelfManagedOptOutsEnabled:bool, OptOutListName:string, DeletionProtectionEnabled:bool, PoolId?:string, RegistrationId?:string, CreatedTimestamp:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describePhoneNumbers(array $args = []): \AWS\Result { }

    /**
     * @param array{PhoneNumberIds?:array<string>, Filters?:array<array{Name:"status"|"iso-country-code"|"message-type"|"number-capability"|"number-type"|"two-way-enabled"|"self-managed-opt-outs-enabled"|"opt-out-list-name"|"deletion-protection-enabled"|"two-way-channel-arn", Values:array<string>}>, NextToken?:string, MaxResults?:int, Owner?:"SELF"|"SHARED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumbers?:array<array{PhoneNumberArn:string, PhoneNumberId?:string, PhoneNumber:string, Status:"PENDING"|"ACTIVE"|"ASSOCIATING"|"DISASSOCIATING"|"DELETED", IsoCountryCode:string, MessageType:"TRANSACTIONAL"|"PROMOTIONAL", NumberCapabilities:array<"SMS"|"VOICE"|"MMS">, NumberType:"SHORT_CODE"|"LONG_CODE"|"TOLL_FREE"|"TEN_DLC"|"SIMULATOR", MonthlyLeasingPrice:string, TwoWayEnabled:bool, TwoWayChannelArn?:string, TwoWayChannelRole?:string, SelfManagedOptOutsEnabled:bool, OptOutListName:string, DeletionProtectionEnabled:bool, PoolId?:string, RegistrationId?:string, CreatedTimestamp:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describePhoneNumbersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PoolIds?:array<string>, Filters?:array<array{Name:"status"|"message-type"|"two-way-enabled"|"self-managed-opt-outs-enabled"|"opt-out-list-name"|"shared-routes-enabled"|"deletion-protection-enabled"|"two-way-channel-arn", Values:array<string>}>, NextToken?:string, MaxResults?:int, Owner?:"SELF"|"SHARED"} $args
     * @return \AWS\Result<array{Pools?:array<array{PoolArn:string, PoolId:string, Status:"CREATING"|"ACTIVE"|"DELETING", MessageType:"TRANSACTIONAL"|"PROMOTIONAL", TwoWayEnabled:bool, TwoWayChannelArn?:string, TwoWayChannelRole?:string, SelfManagedOptOutsEnabled:bool, OptOutListName:string, SharedRoutesEnabled:bool, DeletionProtectionEnabled:bool, CreatedTimestamp:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describePools(array $args = []): \AWS\Result { }

    /**
     * @param array{PoolIds?:array<string>, Filters?:array<array{Name:"status"|"message-type"|"two-way-enabled"|"self-managed-opt-outs-enabled"|"opt-out-list-name"|"shared-routes-enabled"|"deletion-protection-enabled"|"two-way-channel-arn", Values:array<string>}>, NextToken?:string, MaxResults?:int, Owner?:"SELF"|"SHARED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Pools?:array<array{PoolArn:string, PoolId:string, Status:"CREATING"|"ACTIVE"|"DELETING", MessageType:"TRANSACTIONAL"|"PROMOTIONAL", TwoWayEnabled:bool, TwoWayChannelArn?:string, TwoWayChannelRole?:string, SelfManagedOptOutsEnabled:bool, OptOutListName:string, SharedRoutesEnabled:bool, DeletionProtectionEnabled:bool, CreatedTimestamp:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describePoolsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProtectConfigurationIds?:array<string>, Filters?:array<array{Name:"account-default"|"deletion-protection-enabled", Values:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ProtectConfigurations?:array<array{ProtectConfigurationArn:string, ProtectConfigurationId:string, CreatedTimestamp:int|string|\DateTimeInterface, AccountDefault:bool, DeletionProtectionEnabled:bool}>, NextToken?:string}>
     */
    public function describeProtectConfigurations(array $args = []): \AWS\Result { }

    /**
     * @param array{ProtectConfigurationIds?:array<string>, Filters?:array<array{Name:"account-default"|"deletion-protection-enabled", Values:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProtectConfigurations?:array<array{ProtectConfigurationArn:string, ProtectConfigurationId:string, CreatedTimestamp:int|string|\DateTimeInterface, AccountDefault:bool, DeletionProtectionEnabled:bool}>, NextToken?:string}>
     */
    public function describeProtectConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RegistrationAttachmentIds?:array<string>, Filters?:array<array{Name:"attachment-status", Values:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{RegistrationAttachments:array<array{RegistrationAttachmentArn:string, RegistrationAttachmentId:string, AttachmentStatus:"UPLOAD_IN_PROGRESS"|"UPLOAD_COMPLETE"|"UPLOAD_FAILED"|"DELETED", AttachmentUploadErrorReason?:"INTERNAL_ERROR", CreatedTimestamp:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeRegistrationAttachments(array $args = []): \AWS\Result { }

    /**
     * @param array{RegistrationAttachmentIds?:array<string>, Filters?:array<array{Name:"attachment-status", Values:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{RegistrationAttachments:array<array{RegistrationAttachmentArn:string, RegistrationAttachmentId:string, AttachmentStatus:"UPLOAD_IN_PROGRESS"|"UPLOAD_COMPLETE"|"UPLOAD_FAILED"|"DELETED", AttachmentUploadErrorReason?:"INTERNAL_ERROR", CreatedTimestamp:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeRegistrationAttachmentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RegistrationType:string, SectionPath?:string, FieldPaths?:array<string>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{RegistrationType:string, RegistrationFieldDefinitions:array<array{SectionPath:string, FieldPath:string, FieldType:"SELECT"|"TEXT"|"ATTACHMENT", FieldRequirement:"REQUIRED"|"CONDITIONAL"|"OPTIONAL", SelectValidation?:array{MinChoices:int, MaxChoices:int, Options:array<string>}, TextValidation?:array{MinLength:int, MaxLength:int, Pattern:string}, DisplayHints:array{Title:string, ShortDescription:string, LongDescription?:string, DocumentationTitle?:string, DocumentationLink?:string, SelectOptionDescriptions?:array<array{Option:string, Title?:string, Description?:string}>, TextValidationDescription?:string, ExampleTextValue?:string}}>, NextToken?:string}>
     */
    public function describeRegistrationFieldDefinitions(array $args): \AWS\Result { }

    /**
     * @param array{RegistrationType:string, SectionPath?:string, FieldPaths?:array<string>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{RegistrationType:string, RegistrationFieldDefinitions:array<array{SectionPath:string, FieldPath:string, FieldType:"SELECT"|"TEXT"|"ATTACHMENT", FieldRequirement:"REQUIRED"|"CONDITIONAL"|"OPTIONAL", SelectValidation?:array{MinChoices:int, MaxChoices:int, Options:array<string>}, TextValidation?:array{MinLength:int, MaxLength:int, Pattern:string}, DisplayHints:array{Title:string, ShortDescription:string, LongDescription?:string, DocumentationTitle?:string, DocumentationLink?:string, SelectOptionDescriptions?:array<array{Option:string, Title?:string, Description?:string}>, TextValidationDescription?:string, ExampleTextValue?:string}}>, NextToken?:string}>
     */
    public function describeRegistrationFieldDefinitionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RegistrationId:string, VersionNumber?:int, SectionPath?:string, FieldPaths?:array<string>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{RegistrationArn:string, RegistrationId:string, VersionNumber:int, RegistrationFieldValues:array<array{FieldPath:string, SelectChoices?:array<string>, TextValue?:string, RegistrationAttachmentId?:string, DeniedReason?:string}>, NextToken?:string}>
     */
    public function describeRegistrationFieldValues(array $args): \AWS\Result { }

    /**
     * @param array{RegistrationId:string, VersionNumber?:int, SectionPath?:string, FieldPaths?:array<string>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{RegistrationArn:string, RegistrationId:string, VersionNumber:int, RegistrationFieldValues:array<array{FieldPath:string, SelectChoices?:array<string>, TextValue?:string, RegistrationAttachmentId?:string, DeniedReason?:string}>, NextToken?:string}>
     */
    public function describeRegistrationFieldValuesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RegistrationType:string, SectionPaths?:array<string>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{RegistrationType:string, RegistrationSectionDefinitions:array<array{SectionPath:string, DisplayHints:array{Title:string, ShortDescription:string, LongDescription?:string, DocumentationTitle?:string, DocumentationLink?:string}}>, NextToken?:string}>
     */
    public function describeRegistrationSectionDefinitions(array $args): \AWS\Result { }

    /**
     * @param array{RegistrationType:string, SectionPaths?:array<string>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{RegistrationType:string, RegistrationSectionDefinitions:array<array{SectionPath:string, DisplayHints:array{Title:string, ShortDescription:string, LongDescription?:string, DocumentationTitle?:string, DocumentationLink?:string}}>, NextToken?:string}>
     */
    public function describeRegistrationSectionDefinitionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RegistrationTypes?:array<string>, Filters?:array<array{Name:"supported-association-resource-type"|"supported-association-iso-country-code", Values:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{RegistrationTypeDefinitions:array<array{RegistrationType:string, SupportedAssociations?:array<array{ResourceType:string, IsoCountryCode?:string, AssociationBehavior:"ASSOCIATE_BEFORE_SUBMIT"|"ASSOCIATE_ON_APPROVAL"|"ASSOCIATE_AFTER_COMPLETE", DisassociationBehavior:"DISASSOCIATE_ALL_CLOSES_REGISTRATION"|"DISASSOCIATE_ALL_ALLOWS_DELETE_REGISTRATION"|"DELETE_REGISTRATION_DISASSOCIATES"}>, DisplayHints:array{Title:string, ShortDescription?:string, LongDescription?:string, DocumentationTitle?:string, DocumentationLink?:string}}>, NextToken?:string}>
     */
    public function describeRegistrationTypeDefinitions(array $args = []): \AWS\Result { }

    /**
     * @param array{RegistrationTypes?:array<string>, Filters?:array<array{Name:"supported-association-resource-type"|"supported-association-iso-country-code", Values:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{RegistrationTypeDefinitions:array<array{RegistrationType:string, SupportedAssociations?:array<array{ResourceType:string, IsoCountryCode?:string, AssociationBehavior:"ASSOCIATE_BEFORE_SUBMIT"|"ASSOCIATE_ON_APPROVAL"|"ASSOCIATE_AFTER_COMPLETE", DisassociationBehavior:"DISASSOCIATE_ALL_CLOSES_REGISTRATION"|"DISASSOCIATE_ALL_ALLOWS_DELETE_REGISTRATION"|"DELETE_REGISTRATION_DISASSOCIATES"}>, DisplayHints:array{Title:string, ShortDescription?:string, LongDescription?:string, DocumentationTitle?:string, DocumentationLink?:string}}>, NextToken?:string}>
     */
    public function describeRegistrationTypeDefinitionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RegistrationId:string, VersionNumbers?:array<int>, Filters?:array<array{Name:"registration-version-status", Values:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{RegistrationArn:string, RegistrationId:string, RegistrationVersions:array<array{VersionNumber:int, RegistrationVersionStatus:"DRAFT"|"SUBMITTED"|"REVIEWING"|"REQUIRES_AUTHENTICATION"|"APPROVED"|"DISCARDED"|"DENIED"|"REVOKED"|"ARCHIVED", RegistrationVersionStatusHistory:array{DraftTimestamp:int|string|\DateTimeInterface, SubmittedTimestamp?:int|string|\DateTimeInterface, ReviewingTimestamp?:int|string|\DateTimeInterface, RequiresAuthenticationTimestamp?:int|string|\DateTimeInterface, ApprovedTimestamp?:int|string|\DateTimeInterface, DiscardedTimestamp?:int|string|\DateTimeInterface, DeniedTimestamp?:int|string|\DateTimeInterface, RevokedTimestamp?:int|string|\DateTimeInterface, ArchivedTimestamp?:int|string|\DateTimeInterface}, DeniedReasons?:array<array{Reason:string, ShortDescription:string, LongDescription?:string, DocumentationTitle?:string, DocumentationLink?:string}>}>, NextToken?:string}>
     */
    public function describeRegistrationVersions(array $args): \AWS\Result { }

    /**
     * @param array{RegistrationId:string, VersionNumbers?:array<int>, Filters?:array<array{Name:"registration-version-status", Values:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{RegistrationArn:string, RegistrationId:string, RegistrationVersions:array<array{VersionNumber:int, RegistrationVersionStatus:"DRAFT"|"SUBMITTED"|"REVIEWING"|"REQUIRES_AUTHENTICATION"|"APPROVED"|"DISCARDED"|"DENIED"|"REVOKED"|"ARCHIVED", RegistrationVersionStatusHistory:array{DraftTimestamp:int|string|\DateTimeInterface, SubmittedTimestamp?:int|string|\DateTimeInterface, ReviewingTimestamp?:int|string|\DateTimeInterface, RequiresAuthenticationTimestamp?:int|string|\DateTimeInterface, ApprovedTimestamp?:int|string|\DateTimeInterface, DiscardedTimestamp?:int|string|\DateTimeInterface, DeniedTimestamp?:int|string|\DateTimeInterface, RevokedTimestamp?:int|string|\DateTimeInterface, ArchivedTimestamp?:int|string|\DateTimeInterface}, DeniedReasons?:array<array{Reason:string, ShortDescription:string, LongDescription?:string, DocumentationTitle?:string, DocumentationLink?:string}>}>, NextToken?:string}>
     */
    public function describeRegistrationVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RegistrationIds?:array<string>, Filters?:array<array{Name:"registration-type"|"registration-status", Values:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Registrations:array<array{RegistrationArn:string, RegistrationId:string, RegistrationType:string, RegistrationStatus:"CREATED"|"SUBMITTED"|"REVIEWING"|"REQUIRES_AUTHENTICATION"|"PROVISIONING"|"COMPLETE"|"REQUIRES_UPDATES"|"CLOSED"|"DELETED", CurrentVersionNumber:int, ApprovedVersionNumber?:int, LatestDeniedVersionNumber?:int, AdditionalAttributes?:array<string, string>, CreatedTimestamp:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeRegistrations(array $args = []): \AWS\Result { }

    /**
     * @param array{RegistrationIds?:array<string>, Filters?:array<array{Name:"registration-type"|"registration-status", Values:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Registrations:array<array{RegistrationArn:string, RegistrationId:string, RegistrationType:string, RegistrationStatus:"CREATED"|"SUBMITTED"|"REVIEWING"|"REQUIRES_AUTHENTICATION"|"PROVISIONING"|"COMPLETE"|"REQUIRES_UPDATES"|"CLOSED"|"DELETED", CurrentVersionNumber:int, ApprovedVersionNumber?:int, LatestDeniedVersionNumber?:int, AdditionalAttributes?:array<string, string>, CreatedTimestamp:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeRegistrationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SenderIds?:array<array{SenderId:string, IsoCountryCode:string}>, Filters?:array<array{Name:"sender-id"|"iso-country-code"|"message-type"|"deletion-protection-enabled"|"registered", Values:array<string>}>, NextToken?:string, MaxResults?:int, Owner?:"SELF"|"SHARED"} $args
     * @return \AWS\Result<array{SenderIds?:array<array{SenderIdArn:string, SenderId:string, IsoCountryCode:string, MessageTypes:array<"TRANSACTIONAL"|"PROMOTIONAL">, MonthlyLeasingPrice:string, DeletionProtectionEnabled:bool, Registered:bool, RegistrationId?:string}>, NextToken?:string}>
     */
    public function describeSenderIds(array $args = []): \AWS\Result { }

    /**
     * @param array{SenderIds?:array<array{SenderId:string, IsoCountryCode:string}>, Filters?:array<array{Name:"sender-id"|"iso-country-code"|"message-type"|"deletion-protection-enabled"|"registered", Values:array<string>}>, NextToken?:string, MaxResults?:int, Owner?:"SELF"|"SHARED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{SenderIds?:array<array{SenderIdArn:string, SenderId:string, IsoCountryCode:string, MessageTypes:array<"TRANSACTIONAL"|"PROMOTIONAL">, MonthlyLeasingPrice:string, DeletionProtectionEnabled:bool, Registered:bool, RegistrationId?:string}>, NextToken?:string}>
     */
    public function describeSenderIdsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{SpendLimits?:array<array{Name:"TEXT_MESSAGE_MONTHLY_SPEND_LIMIT"|"VOICE_MESSAGE_MONTHLY_SPEND_LIMIT"|"MEDIA_MESSAGE_MONTHLY_SPEND_LIMIT", EnforcedLimit:int, MaxLimit:int, Overridden:bool}>, NextToken?:string}>
     */
    public function describeSpendLimits(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{SpendLimits?:array<array{Name:"TEXT_MESSAGE_MONTHLY_SPEND_LIMIT"|"VOICE_MESSAGE_MONTHLY_SPEND_LIMIT"|"MEDIA_MESSAGE_MONTHLY_SPEND_LIMIT", EnforcedLimit:int, MaxLimit:int, Overridden:bool}>, NextToken?:string}>
     */
    public function describeSpendLimitsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VerifiedDestinationNumberIds?:array<string>, DestinationPhoneNumbers?:array<string>, Filters?:array<array{Name:"status", Values:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{VerifiedDestinationNumbers:array<array{VerifiedDestinationNumberArn:string, VerifiedDestinationNumberId:string, DestinationPhoneNumber:string, Status:"PENDING"|"VERIFIED", CreatedTimestamp:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeVerifiedDestinationNumbers(array $args = []): \AWS\Result { }

    /**
     * @param array{VerifiedDestinationNumberIds?:array<string>, DestinationPhoneNumbers?:array<string>, Filters?:array<array{Name:"status", Values:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{VerifiedDestinationNumbers:array<array{VerifiedDestinationNumberArn:string, VerifiedDestinationNumberId:string, DestinationPhoneNumber:string, Status:"PENDING"|"VERIFIED", CreatedTimestamp:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeVerifiedDestinationNumbersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PoolId:string, OriginationIdentity:string, IsoCountryCode:string, ClientToken?:string} $args
     * @return \AWS\Result<array{PoolArn?:string, PoolId?:string, OriginationIdentityArn?:string, OriginationIdentity?:string, IsoCountryCode?:string}>
     */
    public function disassociateOriginationIdentity(array $args): \AWS\Result { }

    /**
     * @param array{PoolId:string, OriginationIdentity:string, IsoCountryCode:string, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PoolArn?:string, PoolId?:string, OriginationIdentityArn?:string, OriginationIdentity?:string, IsoCountryCode?:string}>
     */
    public function disassociateOriginationIdentityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProtectConfigurationId:string, ConfigurationSetName:string} $args
     * @return \AWS\Result<array{ConfigurationSetArn:string, ConfigurationSetName:string, ProtectConfigurationArn:string, ProtectConfigurationId:string}>
     */
    public function disassociateProtectConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ProtectConfigurationId:string, ConfigurationSetName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConfigurationSetArn:string, ConfigurationSetName:string, ProtectConfigurationArn:string, ProtectConfigurationId:string}>
     */
    public function disassociateProtectConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RegistrationId:string} $args
     * @return \AWS\Result<array{RegistrationArn:string, RegistrationId:string, VersionNumber:int, RegistrationVersionStatus:"DRAFT"|"SUBMITTED"|"REVIEWING"|"REQUIRES_AUTHENTICATION"|"APPROVED"|"DISCARDED"|"DENIED"|"REVOKED"|"ARCHIVED", RegistrationVersionStatusHistory:array{DraftTimestamp:int|string|\DateTimeInterface, SubmittedTimestamp?:int|string|\DateTimeInterface, ReviewingTimestamp?:int|string|\DateTimeInterface, RequiresAuthenticationTimestamp?:int|string|\DateTimeInterface, ApprovedTimestamp?:int|string|\DateTimeInterface, DiscardedTimestamp?:int|string|\DateTimeInterface, DeniedTimestamp?:int|string|\DateTimeInterface, RevokedTimestamp?:int|string|\DateTimeInterface, ArchivedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function discardRegistrationVersion(array $args): \AWS\Result { }

    /**
     * @param array{RegistrationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RegistrationArn:string, RegistrationId:string, VersionNumber:int, RegistrationVersionStatus:"DRAFT"|"SUBMITTED"|"REVIEWING"|"REQUIRES_AUTHENTICATION"|"APPROVED"|"DISCARDED"|"DENIED"|"REVOKED"|"ARCHIVED", RegistrationVersionStatusHistory:array{DraftTimestamp:int|string|\DateTimeInterface, SubmittedTimestamp?:int|string|\DateTimeInterface, ReviewingTimestamp?:int|string|\DateTimeInterface, RequiresAuthenticationTimestamp?:int|string|\DateTimeInterface, ApprovedTimestamp?:int|string|\DateTimeInterface, DiscardedTimestamp?:int|string|\DateTimeInterface, DeniedTimestamp?:int|string|\DateTimeInterface, RevokedTimestamp?:int|string|\DateTimeInterface, ArchivedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function discardRegistrationVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProtectConfigurationId:string, NumberCapability:"SMS"|"VOICE"|"MMS"} $args
     * @return \AWS\Result<array{ProtectConfigurationArn:string, ProtectConfigurationId:string, NumberCapability:"SMS"|"VOICE"|"MMS", CountryRuleSet:array<string, array{ProtectStatus:"ALLOW"|"BLOCK"}>}>
     */
    public function getProtectConfigurationCountryRuleSet(array $args): \AWS\Result { }

    /**
     * @param array{ProtectConfigurationId:string, NumberCapability:"SMS"|"VOICE"|"MMS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProtectConfigurationArn:string, ProtectConfigurationId:string, NumberCapability:"SMS"|"VOICE"|"MMS", CountryRuleSet:array<string, array{ProtectStatus:"ALLOW"|"BLOCK"}>}>
     */
    public function getProtectConfigurationCountryRuleSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{ResourceArn?:string, Policy?:string, CreatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function getResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceArn?:string, Policy?:string, CreatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function getResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PoolId:string, Filters?:array<array{Name:"iso-country-code"|"number-capability", Values:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{PoolArn?:string, PoolId?:string, OriginationIdentities?:array<array{OriginationIdentityArn:string, OriginationIdentity:string, IsoCountryCode:string, NumberCapabilities:array<"SMS"|"VOICE"|"MMS">, PhoneNumber?:string}>, NextToken?:string}>
     */
    public function listPoolOriginationIdentities(array $args): \AWS\Result { }

    /**
     * @param array{PoolId:string, Filters?:array<array{Name:"iso-country-code"|"number-capability", Values:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{PoolArn?:string, PoolId?:string, OriginationIdentities?:array<array{OriginationIdentityArn:string, OriginationIdentity:string, IsoCountryCode:string, NumberCapabilities:array<"SMS"|"VOICE"|"MMS">, PhoneNumber?:string}>, NextToken?:string}>
     */
    public function listPoolOriginationIdentitiesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProtectConfigurationId:string, Filters?:array<array{Name:"iso-country-code"|"destination-phone-number-begins-with"|"action"|"expires-before"|"expires-after"|"created-before"|"created-after", Values:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ProtectConfigurationArn:string, ProtectConfigurationId:string, RuleSetNumberOverrides?:array<array{DestinationPhoneNumber:string, CreatedTimestamp:int|string|\DateTimeInterface, Action:"ALLOW"|"BLOCK", IsoCountryCode?:string, ExpirationTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listProtectConfigurationRuleSetNumberOverrides(array $args): \AWS\Result { }

    /**
     * @param array{ProtectConfigurationId:string, Filters?:array<array{Name:"iso-country-code"|"destination-phone-number-begins-with"|"action"|"expires-before"|"expires-after"|"created-before"|"created-after", Values:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProtectConfigurationArn:string, ProtectConfigurationId:string, RuleSetNumberOverrides?:array<array{DestinationPhoneNumber:string, CreatedTimestamp:int|string|\DateTimeInterface, Action:"ALLOW"|"BLOCK", IsoCountryCode?:string, ExpirationTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listProtectConfigurationRuleSetNumberOverridesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RegistrationId:string, Filters?:array<array{Name:"resource-type"|"iso-country-code", Values:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{RegistrationArn:string, RegistrationId:string, RegistrationType:string, RegistrationAssociations:array<array{ResourceArn:string, ResourceId:string, ResourceType:string, IsoCountryCode?:string, PhoneNumber?:string}>, NextToken?:string}>
     */
    public function listRegistrationAssociations(array $args): \AWS\Result { }

    /**
     * @param array{RegistrationId:string, Filters?:array<array{Name:"resource-type"|"iso-country-code", Values:array<string>}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{RegistrationArn:string, RegistrationId:string, RegistrationType:string, RegistrationAssociations:array<array{ResourceArn:string, ResourceId:string, ResourceType:string, IsoCountryCode?:string, PhoneNumber?:string}>, NextToken?:string}>
     */
    public function listRegistrationAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{ResourceArn?:string, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceArn?:string, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OriginationIdentity:string, Keyword:string, KeywordMessage:string, KeywordAction?:"AUTOMATIC_RESPONSE"|"OPT_OUT"|"OPT_IN"} $args
     * @return \AWS\Result<array{OriginationIdentityArn?:string, OriginationIdentity?:string, Keyword?:string, KeywordMessage?:string, KeywordAction?:"AUTOMATIC_RESPONSE"|"OPT_OUT"|"OPT_IN"}>
     */
    public function putKeyword(array $args): \AWS\Result { }

    /**
     * @param array{OriginationIdentity:string, Keyword:string, KeywordMessage:string, KeywordAction?:"AUTOMATIC_RESPONSE"|"OPT_OUT"|"OPT_IN"} $args
     * @return \GuzzleHttp\Promise\Promise<array{OriginationIdentityArn?:string, OriginationIdentity?:string, Keyword?:string, KeywordMessage?:string, KeywordAction?:"AUTOMATIC_RESPONSE"|"OPT_OUT"|"OPT_IN"}>
     */
    public function putKeywordAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MessageId:string, MessageFeedbackStatus:"RECEIVED"|"FAILED"} $args
     * @return \AWS\Result<array{MessageId:string, MessageFeedbackStatus:"RECEIVED"|"FAILED"}>
     */
    public function putMessageFeedback(array $args): \AWS\Result { }

    /**
     * @param array{MessageId:string, MessageFeedbackStatus:"RECEIVED"|"FAILED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{MessageId:string, MessageFeedbackStatus:"RECEIVED"|"FAILED"}>
     */
    public function putMessageFeedbackAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{OptOutListName:string, OptedOutNumber:string} $args
     * @return \AWS\Result<array{OptOutListArn?:string, OptOutListName?:string, OptedOutNumber?:string, OptedOutTimestamp?:int|string|\DateTimeInterface, EndUserOptedOut?:bool}>
     */
    public function putOptedOutNumber(array $args): \AWS\Result { }

    /**
     * @param array{OptOutListName:string, OptedOutNumber:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{OptOutListArn?:string, OptOutListName?:string, OptedOutNumber?:string, OptedOutTimestamp?:int|string|\DateTimeInterface, EndUserOptedOut?:bool}>
     */
    public function putOptedOutNumberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, ProtectConfigurationId:string, DestinationPhoneNumber:string, Action:"ALLOW"|"BLOCK", ExpirationTimestamp?:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{ProtectConfigurationArn:string, ProtectConfigurationId:string, DestinationPhoneNumber:string, CreatedTimestamp:int|string|\DateTimeInterface, Action:"ALLOW"|"BLOCK", IsoCountryCode?:string, ExpirationTimestamp?:int|string|\DateTimeInterface}>
     */
    public function putProtectConfigurationRuleSetNumberOverride(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, ProtectConfigurationId:string, DestinationPhoneNumber:string, Action:"ALLOW"|"BLOCK", ExpirationTimestamp?:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProtectConfigurationArn:string, ProtectConfigurationId:string, DestinationPhoneNumber:string, CreatedTimestamp:int|string|\DateTimeInterface, Action:"ALLOW"|"BLOCK", IsoCountryCode?:string, ExpirationTimestamp?:int|string|\DateTimeInterface}>
     */
    public function putProtectConfigurationRuleSetNumberOverrideAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RegistrationId:string, FieldPath:string, SelectChoices?:array<string>, TextValue?:string, RegistrationAttachmentId?:string} $args
     * @return \AWS\Result<array{RegistrationArn:string, RegistrationId:string, VersionNumber:int, FieldPath:string, SelectChoices?:array<string>, TextValue?:string, RegistrationAttachmentId?:string}>
     */
    public function putRegistrationFieldValue(array $args): \AWS\Result { }

    /**
     * @param array{RegistrationId:string, FieldPath:string, SelectChoices?:array<string>, TextValue?:string, RegistrationAttachmentId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RegistrationArn:string, RegistrationId:string, VersionNumber:int, FieldPath:string, SelectChoices?:array<string>, TextValue?:string, RegistrationAttachmentId?:string}>
     */
    public function putRegistrationFieldValueAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Policy:string} $args
     * @return \AWS\Result<array{ResourceArn?:string, Policy?:string, CreatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function putResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Policy:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceArn?:string, Policy?:string, CreatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function putResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PhoneNumberId:string} $args
     * @return \AWS\Result<array{PhoneNumberArn?:string, PhoneNumberId?:string, PhoneNumber?:string, Status?:"PENDING"|"ACTIVE"|"ASSOCIATING"|"DISASSOCIATING"|"DELETED", IsoCountryCode?:string, MessageType?:"TRANSACTIONAL"|"PROMOTIONAL", NumberCapabilities?:array<"SMS"|"VOICE"|"MMS">, NumberType?:"SHORT_CODE"|"LONG_CODE"|"TOLL_FREE"|"TEN_DLC"|"SIMULATOR", MonthlyLeasingPrice?:string, TwoWayEnabled?:bool, TwoWayChannelArn?:string, TwoWayChannelRole?:string, SelfManagedOptOutsEnabled?:bool, OptOutListName?:string, RegistrationId?:string, CreatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function releasePhoneNumber(array $args): \AWS\Result { }

    /**
     * @param array{PhoneNumberId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumberArn?:string, PhoneNumberId?:string, PhoneNumber?:string, Status?:"PENDING"|"ACTIVE"|"ASSOCIATING"|"DISASSOCIATING"|"DELETED", IsoCountryCode?:string, MessageType?:"TRANSACTIONAL"|"PROMOTIONAL", NumberCapabilities?:array<"SMS"|"VOICE"|"MMS">, NumberType?:"SHORT_CODE"|"LONG_CODE"|"TOLL_FREE"|"TEN_DLC"|"SIMULATOR", MonthlyLeasingPrice?:string, TwoWayEnabled?:bool, TwoWayChannelArn?:string, TwoWayChannelRole?:string, SelfManagedOptOutsEnabled?:bool, OptOutListName?:string, RegistrationId?:string, CreatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function releasePhoneNumberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SenderId:string, IsoCountryCode:string} $args
     * @return \AWS\Result<array{SenderIdArn:string, SenderId:string, IsoCountryCode:string, MessageTypes:array<"TRANSACTIONAL"|"PROMOTIONAL">, MonthlyLeasingPrice:string, Registered:bool, RegistrationId?:string}>
     */
    public function releaseSenderId(array $args): \AWS\Result { }

    /**
     * @param array{SenderId:string, IsoCountryCode:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SenderIdArn:string, SenderId:string, IsoCountryCode:string, MessageTypes:array<"TRANSACTIONAL"|"PROMOTIONAL">, MonthlyLeasingPrice:string, Registered:bool, RegistrationId?:string}>
     */
    public function releaseSenderIdAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IsoCountryCode:string, MessageType:"TRANSACTIONAL"|"PROMOTIONAL", NumberCapabilities:array<"SMS"|"VOICE"|"MMS">, NumberType:"LONG_CODE"|"TOLL_FREE"|"TEN_DLC"|"SIMULATOR", OptOutListName?:string, PoolId?:string, RegistrationId?:string, DeletionProtectionEnabled?:bool, Tags?:array<array{Key:string, Value:string}>, ClientToken?:string} $args
     * @return \AWS\Result<array{PhoneNumberArn?:string, PhoneNumberId?:string, PhoneNumber?:string, Status?:"PENDING"|"ACTIVE"|"ASSOCIATING"|"DISASSOCIATING"|"DELETED", IsoCountryCode?:string, MessageType?:"TRANSACTIONAL"|"PROMOTIONAL", NumberCapabilities?:array<"SMS"|"VOICE"|"MMS">, NumberType?:"LONG_CODE"|"TOLL_FREE"|"TEN_DLC"|"SIMULATOR", MonthlyLeasingPrice?:string, TwoWayEnabled?:bool, TwoWayChannelArn?:string, TwoWayChannelRole?:string, SelfManagedOptOutsEnabled?:bool, OptOutListName?:string, DeletionProtectionEnabled?:bool, PoolId?:string, RegistrationId?:string, Tags?:array<array{Key:string, Value:string}>, CreatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function requestPhoneNumber(array $args): \AWS\Result { }

    /**
     * @param array{IsoCountryCode:string, MessageType:"TRANSACTIONAL"|"PROMOTIONAL", NumberCapabilities:array<"SMS"|"VOICE"|"MMS">, NumberType:"LONG_CODE"|"TOLL_FREE"|"TEN_DLC"|"SIMULATOR", OptOutListName?:string, PoolId?:string, RegistrationId?:string, DeletionProtectionEnabled?:bool, Tags?:array<array{Key:string, Value:string}>, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumberArn?:string, PhoneNumberId?:string, PhoneNumber?:string, Status?:"PENDING"|"ACTIVE"|"ASSOCIATING"|"DISASSOCIATING"|"DELETED", IsoCountryCode?:string, MessageType?:"TRANSACTIONAL"|"PROMOTIONAL", NumberCapabilities?:array<"SMS"|"VOICE"|"MMS">, NumberType?:"LONG_CODE"|"TOLL_FREE"|"TEN_DLC"|"SIMULATOR", MonthlyLeasingPrice?:string, TwoWayEnabled?:bool, TwoWayChannelArn?:string, TwoWayChannelRole?:string, SelfManagedOptOutsEnabled?:bool, OptOutListName?:string, DeletionProtectionEnabled?:bool, PoolId?:string, RegistrationId?:string, Tags?:array<array{Key:string, Value:string}>, CreatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function requestPhoneNumberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SenderId:string, IsoCountryCode:string, MessageTypes?:array<"TRANSACTIONAL"|"PROMOTIONAL">, DeletionProtectionEnabled?:bool, Tags?:array<array{Key:string, Value:string}>, ClientToken?:string} $args
     * @return \AWS\Result<array{SenderIdArn:string, SenderId:string, IsoCountryCode:string, MessageTypes:array<"TRANSACTIONAL"|"PROMOTIONAL">, MonthlyLeasingPrice:string, DeletionProtectionEnabled:bool, Registered:bool, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function requestSenderId(array $args): \AWS\Result { }

    /**
     * @param array{SenderId:string, IsoCountryCode:string, MessageTypes?:array<"TRANSACTIONAL"|"PROMOTIONAL">, DeletionProtectionEnabled?:bool, Tags?:array<array{Key:string, Value:string}>, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SenderIdArn:string, SenderId:string, IsoCountryCode:string, MessageTypes:array<"TRANSACTIONAL"|"PROMOTIONAL">, MonthlyLeasingPrice:string, DeletionProtectionEnabled:bool, Registered:bool, Tags?:array<array{Key:string, Value:string}>}>
     */
    public function requestSenderIdAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VerifiedDestinationNumberId:string, VerificationChannel:"TEXT"|"VOICE", LanguageCode?:"DE_DE"|"EN_GB"|"EN_US"|"ES_419"|"ES_ES"|"FR_CA"|"FR_FR"|"IT_IT"|"JA_JP"|"KO_KR"|"PT_BR"|"ZH_CN"|"ZH_TW", OriginationIdentity?:string, ConfigurationSetName?:string, Context?:array<string, string>, DestinationCountryParameters?:array<"IN_TEMPLATE_ID"|"IN_ENTITY_ID", string>} $args
     * @return \AWS\Result<array{MessageId:string}>
     */
    public function sendDestinationNumberVerificationCode(array $args): \AWS\Result { }

    /**
     * @param array{VerifiedDestinationNumberId:string, VerificationChannel:"TEXT"|"VOICE", LanguageCode?:"DE_DE"|"EN_GB"|"EN_US"|"ES_419"|"ES_ES"|"FR_CA"|"FR_FR"|"IT_IT"|"JA_JP"|"KO_KR"|"PT_BR"|"ZH_CN"|"ZH_TW", OriginationIdentity?:string, ConfigurationSetName?:string, Context?:array<string, string>, DestinationCountryParameters?:array<"IN_TEMPLATE_ID"|"IN_ENTITY_ID", string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{MessageId:string}>
     */
    public function sendDestinationNumberVerificationCodeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DestinationPhoneNumber:string, OriginationIdentity:string, MessageBody?:string, MediaUrls?:array<string>, ConfigurationSetName?:string, MaxPrice?:string, TimeToLive?:int, Context?:array<string, string>, DryRun?:bool, ProtectConfigurationId?:string, MessageFeedbackEnabled?:bool} $args
     * @return \AWS\Result<array{MessageId?:string}>
     */
    public function sendMediaMessage(array $args): \AWS\Result { }

    /**
     * @param array{DestinationPhoneNumber:string, OriginationIdentity:string, MessageBody?:string, MediaUrls?:array<string>, ConfigurationSetName?:string, MaxPrice?:string, TimeToLive?:int, Context?:array<string, string>, DryRun?:bool, ProtectConfigurationId?:string, MessageFeedbackEnabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{MessageId?:string}>
     */
    public function sendMediaMessageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DestinationPhoneNumber:string, OriginationIdentity?:string, MessageBody?:string, MessageType?:"TRANSACTIONAL"|"PROMOTIONAL", Keyword?:string, ConfigurationSetName?:string, MaxPrice?:string, TimeToLive?:int, Context?:array<string, string>, DestinationCountryParameters?:array<"IN_TEMPLATE_ID"|"IN_ENTITY_ID", string>, DryRun?:bool, ProtectConfigurationId?:string, MessageFeedbackEnabled?:bool} $args
     * @return \AWS\Result<array{MessageId?:string}>
     */
    public function sendTextMessage(array $args): \AWS\Result { }

    /**
     * @param array{DestinationPhoneNumber:string, OriginationIdentity?:string, MessageBody?:string, MessageType?:"TRANSACTIONAL"|"PROMOTIONAL", Keyword?:string, ConfigurationSetName?:string, MaxPrice?:string, TimeToLive?:int, Context?:array<string, string>, DestinationCountryParameters?:array<"IN_TEMPLATE_ID"|"IN_ENTITY_ID", string>, DryRun?:bool, ProtectConfigurationId?:string, MessageFeedbackEnabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{MessageId?:string}>
     */
    public function sendTextMessageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DestinationPhoneNumber:string, OriginationIdentity:string, MessageBody?:string, MessageBodyTextType?:"TEXT"|"SSML", VoiceId?:"AMY"|"ASTRID"|"BIANCA"|"BRIAN"|"CAMILA"|"CARLA"|"CARMEN"|"CELINE"|"CHANTAL"|"CONCHITA"|"CRISTIANO"|"DORA"|"EMMA"|"ENRIQUE"|"EWA"|"FILIZ"|"GERAINT"|"GIORGIO"|"GWYNETH"|"HANS"|"INES"|"IVY"|"JACEK"|"JAN"|"JOANNA"|"JOEY"|"JUSTIN"|"KARL"|"KENDRA"|"KIMBERLY"|"LEA"|"LIV"|"LOTTE"|"LUCIA"|"LUPE"|"MADS"|"MAJA"|"MARLENE"|"MATHIEU"|"MATTHEW"|"MAXIM"|"MIA"|"MIGUEL"|"MIZUKI"|"NAJA"|"NICOLE"|"PENELOPE"|"RAVEENA"|"RICARDO"|"RUBEN"|"RUSSELL"|"SALLI"|"SEOYEON"|"TAKUMI"|"TATYANA"|"VICKI"|"VITORIA"|"ZEINA"|"ZHIYU", ConfigurationSetName?:string, MaxPricePerMinute?:string, TimeToLive?:int, Context?:array<string, string>, DryRun?:bool, ProtectConfigurationId?:string, MessageFeedbackEnabled?:bool} $args
     * @return \AWS\Result<array{MessageId?:string}>
     */
    public function sendVoiceMessage(array $args): \AWS\Result { }

    /**
     * @param array{DestinationPhoneNumber:string, OriginationIdentity:string, MessageBody?:string, MessageBodyTextType?:"TEXT"|"SSML", VoiceId?:"AMY"|"ASTRID"|"BIANCA"|"BRIAN"|"CAMILA"|"CARLA"|"CARMEN"|"CELINE"|"CHANTAL"|"CONCHITA"|"CRISTIANO"|"DORA"|"EMMA"|"ENRIQUE"|"EWA"|"FILIZ"|"GERAINT"|"GIORGIO"|"GWYNETH"|"HANS"|"INES"|"IVY"|"JACEK"|"JAN"|"JOANNA"|"JOEY"|"JUSTIN"|"KARL"|"KENDRA"|"KIMBERLY"|"LEA"|"LIV"|"LOTTE"|"LUCIA"|"LUPE"|"MADS"|"MAJA"|"MARLENE"|"MATHIEU"|"MATTHEW"|"MAXIM"|"MIA"|"MIGUEL"|"MIZUKI"|"NAJA"|"NICOLE"|"PENELOPE"|"RAVEENA"|"RICARDO"|"RUBEN"|"RUSSELL"|"SALLI"|"SEOYEON"|"TAKUMI"|"TATYANA"|"VICKI"|"VITORIA"|"ZEINA"|"ZHIYU", ConfigurationSetName?:string, MaxPricePerMinute?:string, TimeToLive?:int, Context?:array<string, string>, DryRun?:bool, ProtectConfigurationId?:string, MessageFeedbackEnabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{MessageId?:string}>
     */
    public function sendVoiceMessageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProtectConfigurationId:string} $args
     * @return \AWS\Result<array{DefaultProtectConfigurationArn:string, DefaultProtectConfigurationId:string}>
     */
    public function setAccountDefaultProtectConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ProtectConfigurationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DefaultProtectConfigurationArn:string, DefaultProtectConfigurationId:string}>
     */
    public function setAccountDefaultProtectConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string, MessageFeedbackEnabled:bool} $args
     * @return \AWS\Result<array{ConfigurationSetArn?:string, ConfigurationSetName?:string, MessageFeedbackEnabled?:bool}>
     */
    public function setDefaultMessageFeedbackEnabled(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string, MessageFeedbackEnabled:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConfigurationSetArn?:string, ConfigurationSetName?:string, MessageFeedbackEnabled?:bool}>
     */
    public function setDefaultMessageFeedbackEnabledAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string, MessageType:"TRANSACTIONAL"|"PROMOTIONAL"} $args
     * @return \AWS\Result<array{ConfigurationSetArn?:string, ConfigurationSetName?:string, MessageType?:"TRANSACTIONAL"|"PROMOTIONAL"}>
     */
    public function setDefaultMessageType(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string, MessageType:"TRANSACTIONAL"|"PROMOTIONAL"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConfigurationSetArn?:string, ConfigurationSetName?:string, MessageType?:"TRANSACTIONAL"|"PROMOTIONAL"}>
     */
    public function setDefaultMessageTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigurationSetName:string, SenderId:string} $args
     * @return \AWS\Result<array{ConfigurationSetArn?:string, ConfigurationSetName?:string, SenderId?:string}>
     */
    public function setDefaultSenderId(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string, SenderId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConfigurationSetArn?:string, ConfigurationSetName?:string, SenderId?:string}>
     */
    public function setDefaultSenderIdAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MonthlyLimit:int} $args
     * @return \AWS\Result<array{MonthlyLimit?:int}>
     */
    public function setMediaMessageSpendLimitOverride(array $args): \AWS\Result { }

    /**
     * @param array{MonthlyLimit:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{MonthlyLimit?:int}>
     */
    public function setMediaMessageSpendLimitOverrideAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MonthlyLimit:int} $args
     * @return \AWS\Result<array{MonthlyLimit?:int}>
     */
    public function setTextMessageSpendLimitOverride(array $args): \AWS\Result { }

    /**
     * @param array{MonthlyLimit:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{MonthlyLimit?:int}>
     */
    public function setTextMessageSpendLimitOverrideAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MonthlyLimit:int} $args
     * @return \AWS\Result<array{MonthlyLimit?:int}>
     */
    public function setVoiceMessageSpendLimitOverride(array $args): \AWS\Result { }

    /**
     * @param array{MonthlyLimit:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{MonthlyLimit?:int}>
     */
    public function setVoiceMessageSpendLimitOverrideAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RegistrationId:string} $args
     * @return \AWS\Result<array{RegistrationArn:string, RegistrationId:string, VersionNumber:int, RegistrationVersionStatus:"DRAFT"|"SUBMITTED"|"REVIEWING"|"REQUIRES_AUTHENTICATION"|"APPROVED"|"DISCARDED"|"DENIED"|"REVOKED"|"ARCHIVED", RegistrationVersionStatusHistory:array{DraftTimestamp:int|string|\DateTimeInterface, SubmittedTimestamp?:int|string|\DateTimeInterface, ReviewingTimestamp?:int|string|\DateTimeInterface, RequiresAuthenticationTimestamp?:int|string|\DateTimeInterface, ApprovedTimestamp?:int|string|\DateTimeInterface, DiscardedTimestamp?:int|string|\DateTimeInterface, DeniedTimestamp?:int|string|\DateTimeInterface, RevokedTimestamp?:int|string|\DateTimeInterface, ArchivedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function submitRegistrationVersion(array $args): \AWS\Result { }

    /**
     * @param array{RegistrationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RegistrationArn:string, RegistrationId:string, VersionNumber:int, RegistrationVersionStatus:"DRAFT"|"SUBMITTED"|"REVIEWING"|"REQUIRES_AUTHENTICATION"|"APPROVED"|"DISCARDED"|"DENIED"|"REVOKED"|"ARCHIVED", RegistrationVersionStatusHistory:array{DraftTimestamp:int|string|\DateTimeInterface, SubmittedTimestamp?:int|string|\DateTimeInterface, ReviewingTimestamp?:int|string|\DateTimeInterface, RequiresAuthenticationTimestamp?:int|string|\DateTimeInterface, ApprovedTimestamp?:int|string|\DateTimeInterface, DiscardedTimestamp?:int|string|\DateTimeInterface, DeniedTimestamp?:int|string|\DateTimeInterface, RevokedTimestamp?:int|string|\DateTimeInterface, ArchivedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function submitRegistrationVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{ConfigurationSetName:string, EventDestinationName:string, Enabled?:bool, MatchingEventTypes?:array<"ALL"|"TEXT_ALL"|"TEXT_SENT"|"TEXT_PENDING"|"TEXT_QUEUED"|"TEXT_SUCCESSFUL"|"TEXT_DELIVERED"|"TEXT_INVALID"|"TEXT_INVALID_MESSAGE"|"TEXT_UNREACHABLE"|"TEXT_CARRIER_UNREACHABLE"|"TEXT_BLOCKED"|"TEXT_CARRIER_BLOCKED"|"TEXT_SPAM"|"TEXT_UNKNOWN"|"TEXT_TTL_EXPIRED"|"TEXT_PROTECT_BLOCKED"|"VOICE_ALL"|"VOICE_INITIATED"|"VOICE_RINGING"|"VOICE_ANSWERED"|"VOICE_COMPLETED"|"VOICE_BUSY"|"VOICE_NO_ANSWER"|"VOICE_FAILED"|"VOICE_TTL_EXPIRED"|"MEDIA_ALL"|"MEDIA_PENDING"|"MEDIA_QUEUED"|"MEDIA_SUCCESSFUL"|"MEDIA_DELIVERED"|"MEDIA_INVALID"|"MEDIA_INVALID_MESSAGE"|"MEDIA_UNREACHABLE"|"MEDIA_CARRIER_UNREACHABLE"|"MEDIA_BLOCKED"|"MEDIA_CARRIER_BLOCKED"|"MEDIA_SPAM"|"MEDIA_UNKNOWN"|"MEDIA_TTL_EXPIRED"|"MEDIA_FILE_INACCESSIBLE"|"MEDIA_FILE_TYPE_UNSUPPORTED"|"MEDIA_FILE_SIZE_EXCEEDED">, CloudWatchLogsDestination?:array{IamRoleArn:string, LogGroupArn:string}, KinesisFirehoseDestination?:array{IamRoleArn:string, DeliveryStreamArn:string}, SnsDestination?:array{TopicArn:string}} $args
     * @return \AWS\Result<array{ConfigurationSetArn?:string, ConfigurationSetName?:string, EventDestination?:array{EventDestinationName:string, Enabled:bool, MatchingEventTypes:array<"ALL"|"TEXT_ALL"|"TEXT_SENT"|"TEXT_PENDING"|"TEXT_QUEUED"|"TEXT_SUCCESSFUL"|"TEXT_DELIVERED"|"TEXT_INVALID"|"TEXT_INVALID_MESSAGE"|"TEXT_UNREACHABLE"|"TEXT_CARRIER_UNREACHABLE"|"TEXT_BLOCKED"|"TEXT_CARRIER_BLOCKED"|"TEXT_SPAM"|"TEXT_UNKNOWN"|"TEXT_TTL_EXPIRED"|"TEXT_PROTECT_BLOCKED"|"VOICE_ALL"|"VOICE_INITIATED"|"VOICE_RINGING"|"VOICE_ANSWERED"|"VOICE_COMPLETED"|"VOICE_BUSY"|"VOICE_NO_ANSWER"|"VOICE_FAILED"|"VOICE_TTL_EXPIRED"|"MEDIA_ALL"|"MEDIA_PENDING"|"MEDIA_QUEUED"|"MEDIA_SUCCESSFUL"|"MEDIA_DELIVERED"|"MEDIA_INVALID"|"MEDIA_INVALID_MESSAGE"|"MEDIA_UNREACHABLE"|"MEDIA_CARRIER_UNREACHABLE"|"MEDIA_BLOCKED"|"MEDIA_CARRIER_BLOCKED"|"MEDIA_SPAM"|"MEDIA_UNKNOWN"|"MEDIA_TTL_EXPIRED"|"MEDIA_FILE_INACCESSIBLE"|"MEDIA_FILE_TYPE_UNSUPPORTED"|"MEDIA_FILE_SIZE_EXCEEDED">, CloudWatchLogsDestination?:array{IamRoleArn:string, LogGroupArn:string}, KinesisFirehoseDestination?:array{IamRoleArn:string, DeliveryStreamArn:string}, SnsDestination?:array{TopicArn:string}}}>
     */
    public function updateEventDestination(array $args): \AWS\Result { }

    /**
     * @param array{ConfigurationSetName:string, EventDestinationName:string, Enabled?:bool, MatchingEventTypes?:array<"ALL"|"TEXT_ALL"|"TEXT_SENT"|"TEXT_PENDING"|"TEXT_QUEUED"|"TEXT_SUCCESSFUL"|"TEXT_DELIVERED"|"TEXT_INVALID"|"TEXT_INVALID_MESSAGE"|"TEXT_UNREACHABLE"|"TEXT_CARRIER_UNREACHABLE"|"TEXT_BLOCKED"|"TEXT_CARRIER_BLOCKED"|"TEXT_SPAM"|"TEXT_UNKNOWN"|"TEXT_TTL_EXPIRED"|"TEXT_PROTECT_BLOCKED"|"VOICE_ALL"|"VOICE_INITIATED"|"VOICE_RINGING"|"VOICE_ANSWERED"|"VOICE_COMPLETED"|"VOICE_BUSY"|"VOICE_NO_ANSWER"|"VOICE_FAILED"|"VOICE_TTL_EXPIRED"|"MEDIA_ALL"|"MEDIA_PENDING"|"MEDIA_QUEUED"|"MEDIA_SUCCESSFUL"|"MEDIA_DELIVERED"|"MEDIA_INVALID"|"MEDIA_INVALID_MESSAGE"|"MEDIA_UNREACHABLE"|"MEDIA_CARRIER_UNREACHABLE"|"MEDIA_BLOCKED"|"MEDIA_CARRIER_BLOCKED"|"MEDIA_SPAM"|"MEDIA_UNKNOWN"|"MEDIA_TTL_EXPIRED"|"MEDIA_FILE_INACCESSIBLE"|"MEDIA_FILE_TYPE_UNSUPPORTED"|"MEDIA_FILE_SIZE_EXCEEDED">, CloudWatchLogsDestination?:array{IamRoleArn:string, LogGroupArn:string}, KinesisFirehoseDestination?:array{IamRoleArn:string, DeliveryStreamArn:string}, SnsDestination?:array{TopicArn:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConfigurationSetArn?:string, ConfigurationSetName?:string, EventDestination?:array{EventDestinationName:string, Enabled:bool, MatchingEventTypes:array<"ALL"|"TEXT_ALL"|"TEXT_SENT"|"TEXT_PENDING"|"TEXT_QUEUED"|"TEXT_SUCCESSFUL"|"TEXT_DELIVERED"|"TEXT_INVALID"|"TEXT_INVALID_MESSAGE"|"TEXT_UNREACHABLE"|"TEXT_CARRIER_UNREACHABLE"|"TEXT_BLOCKED"|"TEXT_CARRIER_BLOCKED"|"TEXT_SPAM"|"TEXT_UNKNOWN"|"TEXT_TTL_EXPIRED"|"TEXT_PROTECT_BLOCKED"|"VOICE_ALL"|"VOICE_INITIATED"|"VOICE_RINGING"|"VOICE_ANSWERED"|"VOICE_COMPLETED"|"VOICE_BUSY"|"VOICE_NO_ANSWER"|"VOICE_FAILED"|"VOICE_TTL_EXPIRED"|"MEDIA_ALL"|"MEDIA_PENDING"|"MEDIA_QUEUED"|"MEDIA_SUCCESSFUL"|"MEDIA_DELIVERED"|"MEDIA_INVALID"|"MEDIA_INVALID_MESSAGE"|"MEDIA_UNREACHABLE"|"MEDIA_CARRIER_UNREACHABLE"|"MEDIA_BLOCKED"|"MEDIA_CARRIER_BLOCKED"|"MEDIA_SPAM"|"MEDIA_UNKNOWN"|"MEDIA_TTL_EXPIRED"|"MEDIA_FILE_INACCESSIBLE"|"MEDIA_FILE_TYPE_UNSUPPORTED"|"MEDIA_FILE_SIZE_EXCEEDED">, CloudWatchLogsDestination?:array{IamRoleArn:string, LogGroupArn:string}, KinesisFirehoseDestination?:array{IamRoleArn:string, DeliveryStreamArn:string}, SnsDestination?:array{TopicArn:string}}}>
     */
    public function updateEventDestinationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PhoneNumberId:string, TwoWayEnabled?:bool, TwoWayChannelArn?:string, TwoWayChannelRole?:string, SelfManagedOptOutsEnabled?:bool, OptOutListName?:string, DeletionProtectionEnabled?:bool} $args
     * @return \AWS\Result<array{PhoneNumberArn?:string, PhoneNumberId?:string, PhoneNumber?:string, Status?:"PENDING"|"ACTIVE"|"ASSOCIATING"|"DISASSOCIATING"|"DELETED", IsoCountryCode?:string, MessageType?:"TRANSACTIONAL"|"PROMOTIONAL", NumberCapabilities?:array<"SMS"|"VOICE"|"MMS">, NumberType?:"SHORT_CODE"|"LONG_CODE"|"TOLL_FREE"|"TEN_DLC"|"SIMULATOR", MonthlyLeasingPrice?:string, TwoWayEnabled?:bool, TwoWayChannelArn?:string, TwoWayChannelRole?:string, SelfManagedOptOutsEnabled?:bool, OptOutListName?:string, DeletionProtectionEnabled?:bool, RegistrationId?:string, CreatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function updatePhoneNumber(array $args): \AWS\Result { }

    /**
     * @param array{PhoneNumberId:string, TwoWayEnabled?:bool, TwoWayChannelArn?:string, TwoWayChannelRole?:string, SelfManagedOptOutsEnabled?:bool, OptOutListName?:string, DeletionProtectionEnabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumberArn?:string, PhoneNumberId?:string, PhoneNumber?:string, Status?:"PENDING"|"ACTIVE"|"ASSOCIATING"|"DISASSOCIATING"|"DELETED", IsoCountryCode?:string, MessageType?:"TRANSACTIONAL"|"PROMOTIONAL", NumberCapabilities?:array<"SMS"|"VOICE"|"MMS">, NumberType?:"SHORT_CODE"|"LONG_CODE"|"TOLL_FREE"|"TEN_DLC"|"SIMULATOR", MonthlyLeasingPrice?:string, TwoWayEnabled?:bool, TwoWayChannelArn?:string, TwoWayChannelRole?:string, SelfManagedOptOutsEnabled?:bool, OptOutListName?:string, DeletionProtectionEnabled?:bool, RegistrationId?:string, CreatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function updatePhoneNumberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PoolId:string, TwoWayEnabled?:bool, TwoWayChannelArn?:string, TwoWayChannelRole?:string, SelfManagedOptOutsEnabled?:bool, OptOutListName?:string, SharedRoutesEnabled?:bool, DeletionProtectionEnabled?:bool} $args
     * @return \AWS\Result<array{PoolArn?:string, PoolId?:string, Status?:"CREATING"|"ACTIVE"|"DELETING", MessageType?:"TRANSACTIONAL"|"PROMOTIONAL", TwoWayEnabled?:bool, TwoWayChannelArn?:string, TwoWayChannelRole?:string, SelfManagedOptOutsEnabled?:bool, OptOutListName?:string, SharedRoutesEnabled?:bool, DeletionProtectionEnabled?:bool, CreatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function updatePool(array $args): \AWS\Result { }

    /**
     * @param array{PoolId:string, TwoWayEnabled?:bool, TwoWayChannelArn?:string, TwoWayChannelRole?:string, SelfManagedOptOutsEnabled?:bool, OptOutListName?:string, SharedRoutesEnabled?:bool, DeletionProtectionEnabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{PoolArn?:string, PoolId?:string, Status?:"CREATING"|"ACTIVE"|"DELETING", MessageType?:"TRANSACTIONAL"|"PROMOTIONAL", TwoWayEnabled?:bool, TwoWayChannelArn?:string, TwoWayChannelRole?:string, SelfManagedOptOutsEnabled?:bool, OptOutListName?:string, SharedRoutesEnabled?:bool, DeletionProtectionEnabled?:bool, CreatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function updatePoolAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProtectConfigurationId:string, DeletionProtectionEnabled?:bool} $args
     * @return \AWS\Result<array{ProtectConfigurationArn:string, ProtectConfigurationId:string, CreatedTimestamp:int|string|\DateTimeInterface, AccountDefault:bool, DeletionProtectionEnabled:bool}>
     */
    public function updateProtectConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ProtectConfigurationId:string, DeletionProtectionEnabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProtectConfigurationArn:string, ProtectConfigurationId:string, CreatedTimestamp:int|string|\DateTimeInterface, AccountDefault:bool, DeletionProtectionEnabled:bool}>
     */
    public function updateProtectConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProtectConfigurationId:string, NumberCapability:"SMS"|"VOICE"|"MMS", CountryRuleSetUpdates:array<string, array{ProtectStatus:"ALLOW"|"BLOCK"}>} $args
     * @return \AWS\Result<array{ProtectConfigurationArn:string, ProtectConfigurationId:string, NumberCapability:"SMS"|"VOICE"|"MMS", CountryRuleSet:array<string, array{ProtectStatus:"ALLOW"|"BLOCK"}>}>
     */
    public function updateProtectConfigurationCountryRuleSet(array $args): \AWS\Result { }

    /**
     * @param array{ProtectConfigurationId:string, NumberCapability:"SMS"|"VOICE"|"MMS", CountryRuleSetUpdates:array<string, array{ProtectStatus:"ALLOW"|"BLOCK"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProtectConfigurationArn:string, ProtectConfigurationId:string, NumberCapability:"SMS"|"VOICE"|"MMS", CountryRuleSet:array<string, array{ProtectStatus:"ALLOW"|"BLOCK"}>}>
     */
    public function updateProtectConfigurationCountryRuleSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SenderId:string, IsoCountryCode:string, DeletionProtectionEnabled?:bool} $args
     * @return \AWS\Result<array{SenderIdArn:string, SenderId:string, IsoCountryCode:string, MessageTypes:array<"TRANSACTIONAL"|"PROMOTIONAL">, MonthlyLeasingPrice:string, DeletionProtectionEnabled:bool, Registered:bool, RegistrationId?:string}>
     */
    public function updateSenderId(array $args): \AWS\Result { }

    /**
     * @param array{SenderId:string, IsoCountryCode:string, DeletionProtectionEnabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{SenderIdArn:string, SenderId:string, IsoCountryCode:string, MessageTypes:array<"TRANSACTIONAL"|"PROMOTIONAL">, MonthlyLeasingPrice:string, DeletionProtectionEnabled:bool, Registered:bool, RegistrationId?:string}>
     */
    public function updateSenderIdAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VerifiedDestinationNumberId:string, VerificationCode:string} $args
     * @return \AWS\Result<array{VerifiedDestinationNumberArn:string, VerifiedDestinationNumberId:string, DestinationPhoneNumber:string, Status:"PENDING"|"VERIFIED", CreatedTimestamp:int|string|\DateTimeInterface}>
     */
    public function verifyDestinationNumber(array $args): \AWS\Result { }

    /**
     * @param array{VerifiedDestinationNumberId:string, VerificationCode:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VerifiedDestinationNumberArn:string, VerifiedDestinationNumberId:string, DestinationPhoneNumber:string, Status:"PENDING"|"VERIFIED", CreatedTimestamp:int|string|\DateTimeInterface}>
     */
    public function verifyDestinationNumberAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
