<?php
namespace AWS\Chime;

class ChimeClient
{
    /**
     * @param array{AccountId:string, UserId:string, E164PhoneNumber:string} $args
     * @return \AWS\Result<array{}>
     */
    public function associatePhoneNumberWithUser(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, UserId:string, E164PhoneNumber:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associatePhoneNumberWithUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string, E164PhoneNumbers:array<string>, ForceAssociate?:bool} $args
     * @return \AWS\Result<array{PhoneNumberErrors?:array<array{PhoneNumberId?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist", ErrorMessage?:string}>}>
     */
    public function associatePhoneNumbersWithVoiceConnector(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string, E164PhoneNumbers:array<string>, ForceAssociate?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumberErrors?:array<array{PhoneNumberId?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist", ErrorMessage?:string}>}>
     */
    public function associatePhoneNumbersWithVoiceConnectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorGroupId:string, E164PhoneNumbers:array<string>, ForceAssociate?:bool} $args
     * @return \AWS\Result<array{PhoneNumberErrors?:array<array{PhoneNumberId?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist", ErrorMessage?:string}>}>
     */
    public function associatePhoneNumbersWithVoiceConnectorGroup(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorGroupId:string, E164PhoneNumbers:array<string>, ForceAssociate?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumberErrors?:array<array{PhoneNumberId?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist", ErrorMessage?:string}>}>
     */
    public function associatePhoneNumbersWithVoiceConnectorGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, SigninDelegateGroups:array<array{GroupName?:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function associateSigninDelegateGroupsWithAccount(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, SigninDelegateGroups:array<array{GroupName?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateSigninDelegateGroupsWithAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MeetingId:string, Attendees:array<array{ExternalUserId:string, Tags?:array<array{Key:string, Value:string}>}>} $args
     * @return \AWS\Result<array{Attendees?:array<array{ExternalUserId?:string, AttendeeId?:string, JoinToken?:string}>, Errors?:array<array{ExternalUserId?:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function batchCreateAttendee(array $args): \AWS\Result { }

    /**
     * @param array{MeetingId:string, Attendees:array<array{ExternalUserId:string, Tags?:array<array{Key:string, Value:string}>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attendees?:array<array{ExternalUserId?:string, AttendeeId?:string, JoinToken?:string}>, Errors?:array<array{ExternalUserId?:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function batchCreateAttendeeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, Type?:"DEFAULT"|"HIDDEN", MemberArns:array<string>, ChimeBearer?:string} $args
     * @return \AWS\Result<array{BatchChannelMemberships?:array{InvitedBy?:array{Arn?:string, Name?:string}, Type?:"DEFAULT"|"HIDDEN", Members?:array<array{Arn?:string, Name?:string}>, ChannelArn?:string}, Errors?:array<array{MemberArn?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist", ErrorMessage?:string}>}>
     */
    public function batchCreateChannelMembership(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, Type?:"DEFAULT"|"HIDDEN", MemberArns:array<string>, ChimeBearer?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{BatchChannelMemberships?:array{InvitedBy?:array{Arn?:string, Name?:string}, Type?:"DEFAULT"|"HIDDEN", Members?:array<array{Arn?:string, Name?:string}>, ChannelArn?:string}, Errors?:array<array{MemberArn?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist", ErrorMessage?:string}>}>
     */
    public function batchCreateChannelMembershipAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, RoomId:string, MembershipItemList:array<array{MemberId?:string, Role?:"Administrator"|"Member"}>} $args
     * @return \AWS\Result<array{Errors?:array<array{MemberId?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist", ErrorMessage?:string}>}>
     */
    public function batchCreateRoomMembership(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, RoomId:string, MembershipItemList:array<array{MemberId?:string, Role?:"Administrator"|"Member"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Errors?:array<array{MemberId?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist", ErrorMessage?:string}>}>
     */
    public function batchCreateRoomMembershipAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PhoneNumberIds:array<string>} $args
     * @return \AWS\Result<array{PhoneNumberErrors?:array<array{PhoneNumberId?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist", ErrorMessage?:string}>}>
     */
    public function batchDeletePhoneNumber(array $args): \AWS\Result { }

    /**
     * @param array{PhoneNumberIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumberErrors?:array<array{PhoneNumberId?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist", ErrorMessage?:string}>}>
     */
    public function batchDeletePhoneNumberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, UserIdList:array<string>} $args
     * @return \AWS\Result<array{UserErrors?:array<array{UserId?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist", ErrorMessage?:string}>}>
     */
    public function batchSuspendUser(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, UserIdList:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserErrors?:array<array{UserId?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist", ErrorMessage?:string}>}>
     */
    public function batchSuspendUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, UserIdList:array<string>} $args
     * @return \AWS\Result<array{UserErrors?:array<array{UserId?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist", ErrorMessage?:string}>}>
     */
    public function batchUnsuspendUser(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, UserIdList:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserErrors?:array<array{UserId?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist", ErrorMessage?:string}>}>
     */
    public function batchUnsuspendUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UpdatePhoneNumberRequestItems:array<array{PhoneNumberId:string, ProductType?:"BusinessCalling"|"VoiceConnector"|"SipMediaApplicationDialIn", CallingName?:string}>} $args
     * @return \AWS\Result<array{PhoneNumberErrors?:array<array{PhoneNumberId?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist", ErrorMessage?:string}>}>
     */
    public function batchUpdatePhoneNumber(array $args): \AWS\Result { }

    /**
     * @param array{UpdatePhoneNumberRequestItems:array<array{PhoneNumberId:string, ProductType?:"BusinessCalling"|"VoiceConnector"|"SipMediaApplicationDialIn", CallingName?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumberErrors?:array<array{PhoneNumberId?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist", ErrorMessage?:string}>}>
     */
    public function batchUpdatePhoneNumberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, UpdateUserRequestItems:array<array{UserId:string, LicenseType?:"Basic"|"Plus"|"Pro"|"ProTrial", UserType?:"PrivateUser"|"SharedDevice", AlexaForBusinessMetadata?:array{IsAlexaForBusinessEnabled?:bool, AlexaForBusinessRoomArn?:string}}>} $args
     * @return \AWS\Result<array{UserErrors?:array<array{UserId?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist", ErrorMessage?:string}>}>
     */
    public function batchUpdateUser(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, UpdateUserRequestItems:array<array{UserId:string, LicenseType?:"Basic"|"Plus"|"Pro"|"ProTrial", UserType?:"PrivateUser"|"SharedDevice", AlexaForBusinessMetadata?:array{IsAlexaForBusinessEnabled?:bool, AlexaForBusinessRoomArn?:string}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserErrors?:array<array{UserId?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist", ErrorMessage?:string}>}>
     */
    public function batchUpdateUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{Account?:array{AwsAccountId:string, AccountId:string, Name:string, AccountType?:"Team"|"EnterpriseDirectory"|"EnterpriseLWA"|"EnterpriseOIDC", CreatedTimestamp?:int|string|\DateTimeInterface, DefaultLicense?:"Basic"|"Plus"|"Pro"|"ProTrial", SupportedLicenses?:array<"Basic"|"Plus"|"Pro"|"ProTrial">, AccountStatus?:"Suspended"|"Active", SigninDelegateGroups?:array<array{GroupName?:string}>}}>
     */
    public function createAccount(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Account?:array{AwsAccountId:string, AccountId:string, Name:string, AccountType?:"Team"|"EnterpriseDirectory"|"EnterpriseLWA"|"EnterpriseOIDC", CreatedTimestamp?:int|string|\DateTimeInterface, DefaultLicense?:"Basic"|"Plus"|"Pro"|"ProTrial", SupportedLicenses?:array<"Basic"|"Plus"|"Pro"|"ProTrial">, AccountStatus?:"Suspended"|"Active", SigninDelegateGroups?:array<array{GroupName?:string}>}}>
     */
    public function createAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Metadata?:string, ClientRequestToken:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{AppInstanceArn?:string}>
     */
    public function createAppInstance(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Metadata?:string, ClientRequestToken:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstanceArn?:string}>
     */
    public function createAppInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceAdminArn:string, AppInstanceArn:string} $args
     * @return \AWS\Result<array{AppInstanceAdmin?:array{Arn?:string, Name?:string}, AppInstanceArn?:string}>
     */
    public function createAppInstanceAdmin(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceAdminArn:string, AppInstanceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstanceAdmin?:array{Arn?:string, Name?:string}, AppInstanceArn?:string}>
     */
    public function createAppInstanceAdminAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceArn:string, AppInstanceUserId:string, Name:string, Metadata?:string, ClientRequestToken:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{AppInstanceUserArn?:string}>
     */
    public function createAppInstanceUser(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceArn:string, AppInstanceUserId:string, Name:string, Metadata?:string, ClientRequestToken:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstanceUserArn?:string}>
     */
    public function createAppInstanceUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MeetingId:string, ExternalUserId:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{Attendee?:array{ExternalUserId?:string, AttendeeId?:string, JoinToken?:string}}>
     */
    public function createAttendee(array $args): \AWS\Result { }

    /**
     * @param array{MeetingId:string, ExternalUserId:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attendee?:array{ExternalUserId?:string, AttendeeId?:string, JoinToken?:string}}>
     */
    public function createAttendeeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, DisplayName:string, Domain?:string} $args
     * @return \AWS\Result<array{Bot?:array{BotId?:string, UserId?:string, DisplayName?:string, BotType?:"ChatBot", Disabled?:bool, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, BotEmail?:string, SecurityToken?:string}}>
     */
    public function createBot(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, DisplayName:string, Domain?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Bot?:array{BotId?:string, UserId?:string, DisplayName?:string, BotType?:"ChatBot", Disabled?:bool, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, BotEmail?:string, SecurityToken?:string}}>
     */
    public function createBotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceArn:string, Name:string, Mode?:"UNRESTRICTED"|"RESTRICTED", Privacy?:"PUBLIC"|"PRIVATE", Metadata?:string, ClientRequestToken:string, Tags?:array<array{Key:string, Value:string}>, ChimeBearer?:string} $args
     * @return \AWS\Result<array{ChannelArn?:string}>
     */
    public function createChannel(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceArn:string, Name:string, Mode?:"UNRESTRICTED"|"RESTRICTED", Privacy?:"PUBLIC"|"PRIVATE", Metadata?:string, ClientRequestToken:string, Tags?:array<array{Key:string, Value:string}>, ChimeBearer?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelArn?:string}>
     */
    public function createChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, MemberArn:string, ChimeBearer?:string} $args
     * @return \AWS\Result<array{ChannelArn?:string, Member?:array{Arn?:string, Name?:string}}>
     */
    public function createChannelBan(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, MemberArn:string, ChimeBearer?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelArn?:string, Member?:array{Arn?:string, Name?:string}}>
     */
    public function createChannelBanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, MemberArn:string, Type:"DEFAULT"|"HIDDEN", ChimeBearer?:string} $args
     * @return \AWS\Result<array{ChannelArn?:string, Member?:array{Arn?:string, Name?:string}}>
     */
    public function createChannelMembership(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, MemberArn:string, Type:"DEFAULT"|"HIDDEN", ChimeBearer?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelArn?:string, Member?:array{Arn?:string, Name?:string}}>
     */
    public function createChannelMembershipAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, ChannelModeratorArn:string, ChimeBearer?:string} $args
     * @return \AWS\Result<array{ChannelArn?:string, ChannelModerator?:array{Arn?:string, Name?:string}}>
     */
    public function createChannelModerator(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, ChannelModeratorArn:string, ChimeBearer?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelArn?:string, ChannelModerator?:array{Arn?:string, Name?:string}}>
     */
    public function createChannelModeratorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SourceType:"ChimeSdkMeeting", SourceArn:string, SinkType:"S3Bucket", SinkArn:string, ClientRequestToken?:string, ChimeSdkMeetingConfiguration?:array{SourceConfiguration?:array{SelectedVideoStreams?:array{AttendeeIds?:array<string>, ExternalUserIds?:array<string>}}, ArtifactsConfiguration?:array{Audio:array{MuxType:"AudioOnly"|"AudioWithActiveSpeakerVideo"}, Video:array{State:"Enabled"|"Disabled", MuxType?:"VideoOnly"}, Content:array{State:"Enabled"|"Disabled", MuxType?:"ContentOnly"}}}} $args
     * @return \AWS\Result<array{MediaCapturePipeline?:array{MediaPipelineId?:string, SourceType?:"ChimeSdkMeeting", SourceArn?:string, Status?:"Initializing"|"InProgress"|"Failed"|"Stopping"|"Stopped", SinkType?:"S3Bucket", SinkArn?:string, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, ChimeSdkMeetingConfiguration?:array{SourceConfiguration?:array{SelectedVideoStreams?:array{AttendeeIds?:array<string>, ExternalUserIds?:array<string>}}, ArtifactsConfiguration?:array{Audio:array{MuxType:"AudioOnly"|"AudioWithActiveSpeakerVideo"}, Video:array{State:"Enabled"|"Disabled", MuxType?:"VideoOnly"}, Content:array{State:"Enabled"|"Disabled", MuxType?:"ContentOnly"}}}}}>
     */
    public function createMediaCapturePipeline(array $args): \AWS\Result { }

    /**
     * @param array{SourceType:"ChimeSdkMeeting", SourceArn:string, SinkType:"S3Bucket", SinkArn:string, ClientRequestToken?:string, ChimeSdkMeetingConfiguration?:array{SourceConfiguration?:array{SelectedVideoStreams?:array{AttendeeIds?:array<string>, ExternalUserIds?:array<string>}}, ArtifactsConfiguration?:array{Audio:array{MuxType:"AudioOnly"|"AudioWithActiveSpeakerVideo"}, Video:array{State:"Enabled"|"Disabled", MuxType?:"VideoOnly"}, Content:array{State:"Enabled"|"Disabled", MuxType?:"ContentOnly"}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{MediaCapturePipeline?:array{MediaPipelineId?:string, SourceType?:"ChimeSdkMeeting", SourceArn?:string, Status?:"Initializing"|"InProgress"|"Failed"|"Stopping"|"Stopped", SinkType?:"S3Bucket", SinkArn?:string, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, ChimeSdkMeetingConfiguration?:array{SourceConfiguration?:array{SelectedVideoStreams?:array{AttendeeIds?:array<string>, ExternalUserIds?:array<string>}}, ArtifactsConfiguration?:array{Audio:array{MuxType:"AudioOnly"|"AudioWithActiveSpeakerVideo"}, Video:array{State:"Enabled"|"Disabled", MuxType?:"VideoOnly"}, Content:array{State:"Enabled"|"Disabled", MuxType?:"ContentOnly"}}}}}>
     */
    public function createMediaCapturePipelineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientRequestToken:string, ExternalMeetingId?:string, MeetingHostId?:string, MediaRegion?:string, Tags?:array<array{Key:string, Value:string}>, NotificationsConfiguration?:array{SnsTopicArn?:string, SqsQueueArn?:string}} $args
     * @return \AWS\Result<array{Meeting?:array{MeetingId?:string, ExternalMeetingId?:string, MediaPlacement?:array{AudioHostUrl?:string, AudioFallbackUrl?:string, ScreenDataUrl?:string, ScreenSharingUrl?:string, ScreenViewingUrl?:string, SignalingUrl?:string, TurnControlUrl?:string, EventIngestionUrl?:string}, MediaRegion?:string}}>
     */
    public function createMeeting(array $args): \AWS\Result { }

    /**
     * @param array{ClientRequestToken:string, ExternalMeetingId?:string, MeetingHostId?:string, MediaRegion?:string, Tags?:array<array{Key:string, Value:string}>, NotificationsConfiguration?:array{SnsTopicArn?:string, SqsQueueArn?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Meeting?:array{MeetingId?:string, ExternalMeetingId?:string, MediaPlacement?:array{AudioHostUrl?:string, AudioFallbackUrl?:string, ScreenDataUrl?:string, ScreenSharingUrl?:string, ScreenViewingUrl?:string, SignalingUrl?:string, TurnControlUrl?:string, EventIngestionUrl?:string}, MediaRegion?:string}}>
     */
    public function createMeetingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MeetingId:string, FromPhoneNumber:string, ToPhoneNumber:string, JoinToken:string} $args
     * @return \AWS\Result<array{TransactionId?:string}>
     */
    public function createMeetingDialOut(array $args): \AWS\Result { }

    /**
     * @param array{MeetingId:string, FromPhoneNumber:string, ToPhoneNumber:string, JoinToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TransactionId?:string}>
     */
    public function createMeetingDialOutAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientRequestToken:string, ExternalMeetingId?:string, MeetingHostId?:string, MediaRegion?:string, Tags?:array<array{Key:string, Value:string}>, NotificationsConfiguration?:array{SnsTopicArn?:string, SqsQueueArn?:string}, Attendees?:array<array{ExternalUserId:string, Tags?:array<array{Key:string, Value:string}>}>} $args
     * @return \AWS\Result<array{Meeting?:array{MeetingId?:string, ExternalMeetingId?:string, MediaPlacement?:array{AudioHostUrl?:string, AudioFallbackUrl?:string, ScreenDataUrl?:string, ScreenSharingUrl?:string, ScreenViewingUrl?:string, SignalingUrl?:string, TurnControlUrl?:string, EventIngestionUrl?:string}, MediaRegion?:string}, Attendees?:array<array{ExternalUserId?:string, AttendeeId?:string, JoinToken?:string}>, Errors?:array<array{ExternalUserId?:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function createMeetingWithAttendees(array $args): \AWS\Result { }

    /**
     * @param array{ClientRequestToken:string, ExternalMeetingId?:string, MeetingHostId?:string, MediaRegion?:string, Tags?:array<array{Key:string, Value:string}>, NotificationsConfiguration?:array{SnsTopicArn?:string, SqsQueueArn?:string}, Attendees?:array<array{ExternalUserId:string, Tags?:array<array{Key:string, Value:string}>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Meeting?:array{MeetingId?:string, ExternalMeetingId?:string, MediaPlacement?:array{AudioHostUrl?:string, AudioFallbackUrl?:string, ScreenDataUrl?:string, ScreenSharingUrl?:string, ScreenViewingUrl?:string, SignalingUrl?:string, TurnControlUrl?:string, EventIngestionUrl?:string}, MediaRegion?:string}, Attendees?:array<array{ExternalUserId?:string, AttendeeId?:string, JoinToken?:string}>, Errors?:array<array{ExternalUserId?:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function createMeetingWithAttendeesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ProductType:"BusinessCalling"|"VoiceConnector"|"SipMediaApplicationDialIn", E164PhoneNumbers:array<string>} $args
     * @return \AWS\Result<array{PhoneNumberOrder?:array{PhoneNumberOrderId?:string, ProductType?:"BusinessCalling"|"VoiceConnector"|"SipMediaApplicationDialIn", Status?:"Processing"|"Successful"|"Failed"|"Partial", OrderedPhoneNumbers?:array<array{E164PhoneNumber?:string, Status?:"Processing"|"Acquired"|"Failed"}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function createPhoneNumberOrder(array $args): \AWS\Result { }

    /**
     * @param array{ProductType:"BusinessCalling"|"VoiceConnector"|"SipMediaApplicationDialIn", E164PhoneNumbers:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumberOrder?:array{PhoneNumberOrderId?:string, ProductType?:"BusinessCalling"|"VoiceConnector"|"SipMediaApplicationDialIn", Status?:"Processing"|"Successful"|"Failed"|"Partial", OrderedPhoneNumbers?:array<array{E164PhoneNumber?:string, Status?:"Processing"|"Acquired"|"Failed"}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
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
     * @param array{AccountId:string, Name:string, ClientRequestToken?:string} $args
     * @return \AWS\Result<array{Room?:array{RoomId?:string, Name?:string, AccountId?:string, CreatedBy?:string, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function createRoom(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Name:string, ClientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Room?:array{RoomId?:string, Name?:string, AccountId?:string, CreatedBy?:string, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function createRoomAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, RoomId:string, MemberId:string, Role?:"Administrator"|"Member"} $args
     * @return \AWS\Result<array{RoomMembership?:array{RoomId?:string, Member?:array{MemberId?:string, MemberType?:"User"|"Bot"|"Webhook", Email?:string, FullName?:string, AccountId?:string}, Role?:"Administrator"|"Member", InvitedBy?:string, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function createRoomMembership(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, RoomId:string, MemberId:string, Role?:"Administrator"|"Member"} $args
     * @return \GuzzleHttp\Promise\Promise<array{RoomMembership?:array{RoomId?:string, Member?:array{MemberId?:string, MemberType?:"User"|"Bot"|"Webhook", Email?:string, FullName?:string, AccountId?:string}, Role?:"Administrator"|"Member", InvitedBy?:string, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function createRoomMembershipAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AwsRegion:string, Name:string, Endpoints:array<array{LambdaArn?:string}>} $args
     * @return \AWS\Result<array{SipMediaApplication?:array{SipMediaApplicationId?:string, AwsRegion?:string, Name?:string, Endpoints?:array<array{LambdaArn?:string}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function createSipMediaApplication(array $args): \AWS\Result { }

    /**
     * @param array{AwsRegion:string, Name:string, Endpoints:array<array{LambdaArn?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{SipMediaApplication?:array{SipMediaApplicationId?:string, AwsRegion?:string, Name?:string, Endpoints?:array<array{LambdaArn?:string}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function createSipMediaApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FromPhoneNumber:string, ToPhoneNumber:string, SipMediaApplicationId:string, SipHeaders?:array<string, string>} $args
     * @return \AWS\Result<array{SipMediaApplicationCall?:array{TransactionId?:string}}>
     */
    public function createSipMediaApplicationCall(array $args): \AWS\Result { }

    /**
     * @param array{FromPhoneNumber:string, ToPhoneNumber:string, SipMediaApplicationId:string, SipHeaders?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{SipMediaApplicationCall?:array{TransactionId?:string}}>
     */
    public function createSipMediaApplicationCallAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, TriggerType:"ToPhoneNumber"|"RequestUriHostname", TriggerValue:string, Disabled?:bool, TargetApplications:array<array{SipMediaApplicationId?:string, Priority?:int, AwsRegion?:string}>} $args
     * @return \AWS\Result<array{SipRule?:array{SipRuleId?:string, Name?:string, Disabled?:bool, TriggerType?:"ToPhoneNumber"|"RequestUriHostname", TriggerValue?:string, TargetApplications?:array<array{SipMediaApplicationId?:string, Priority?:int, AwsRegion?:string}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function createSipRule(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, TriggerType:"ToPhoneNumber"|"RequestUriHostname", TriggerValue:string, Disabled?:bool, TargetApplications:array<array{SipMediaApplicationId?:string, Priority?:int, AwsRegion?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{SipRule?:array{SipRuleId?:string, Name?:string, Disabled?:bool, TriggerType?:"ToPhoneNumber"|"RequestUriHostname", TriggerValue?:string, TargetApplications?:array<array{SipMediaApplicationId?:string, Priority?:int, AwsRegion?:string}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function createSipRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Username?:string, Email?:string, UserType?:"PrivateUser"|"SharedDevice"} $args
     * @return \AWS\Result<array{User?:array{UserId:string, AccountId?:string, PrimaryEmail?:string, PrimaryProvisionedNumber?:string, DisplayName?:string, LicenseType?:"Basic"|"Plus"|"Pro"|"ProTrial", UserType?:"PrivateUser"|"SharedDevice", UserRegistrationStatus?:"Unregistered"|"Registered"|"Suspended", UserInvitationStatus?:"Pending"|"Accepted"|"Failed", RegisteredOn?:int|string|\DateTimeInterface, InvitedOn?:int|string|\DateTimeInterface, AlexaForBusinessMetadata?:array{IsAlexaForBusinessEnabled?:bool, AlexaForBusinessRoomArn?:string}, PersonalPIN?:string}}>
     */
    public function createUser(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Username?:string, Email?:string, UserType?:"PrivateUser"|"SharedDevice"} $args
     * @return \GuzzleHttp\Promise\Promise<array{User?:array{UserId:string, AccountId?:string, PrimaryEmail?:string, PrimaryProvisionedNumber?:string, DisplayName?:string, LicenseType?:"Basic"|"Plus"|"Pro"|"ProTrial", UserType?:"PrivateUser"|"SharedDevice", UserRegistrationStatus?:"Unregistered"|"Registered"|"Suspended", UserInvitationStatus?:"Pending"|"Accepted"|"Failed", RegisteredOn?:int|string|\DateTimeInterface, InvitedOn?:int|string|\DateTimeInterface, AlexaForBusinessMetadata?:array{IsAlexaForBusinessEnabled?:bool, AlexaForBusinessRoomArn?:string}, PersonalPIN?:string}}>
     */
    public function createUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, AwsRegion?:"us-east-1"|"us-west-2", RequireEncryption:bool} $args
     * @return \AWS\Result<array{VoiceConnector?:array{VoiceConnectorId?:string, AwsRegion?:"us-east-1"|"us-west-2", Name?:string, OutboundHostName?:string, RequireEncryption?:bool, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, VoiceConnectorArn?:string}}>
     */
    public function createVoiceConnector(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, AwsRegion?:"us-east-1"|"us-west-2", RequireEncryption:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{VoiceConnector?:array{VoiceConnectorId?:string, AwsRegion?:"us-east-1"|"us-west-2", Name?:string, OutboundHostName?:string, RequireEncryption?:bool, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, VoiceConnectorArn?:string}}>
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
     * @param array{AccountId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAccount(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAppInstance(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAppInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceAdminArn:string, AppInstanceArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAppInstanceAdmin(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceAdminArn:string, AppInstanceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAppInstanceAdminAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAppInstanceStreamingConfigurations(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAppInstanceStreamingConfigurationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceUserArn:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAppInstanceUser(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceUserArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAppInstanceUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MeetingId:string, AttendeeId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAttendee(array $args): \AWS\Result { }

    /**
     * @param array{MeetingId:string, AttendeeId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAttendeeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, ChimeBearer?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteChannel(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, ChimeBearer?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, MemberArn:string, ChimeBearer?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteChannelBan(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, MemberArn:string, ChimeBearer?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteChannelBanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, MemberArn:string, ChimeBearer?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteChannelMembership(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, MemberArn:string, ChimeBearer?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteChannelMembershipAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, MessageId:string, ChimeBearer?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteChannelMessage(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, MessageId:string, ChimeBearer?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteChannelMessageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, ChannelModeratorArn:string, ChimeBearer?:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteChannelModerator(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, ChannelModeratorArn:string, ChimeBearer?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteChannelModeratorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, BotId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteEventsConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, BotId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteEventsConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MediaPipelineId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteMediaCapturePipeline(array $args): \AWS\Result { }

    /**
     * @param array{MediaPipelineId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteMediaCapturePipelineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MeetingId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteMeeting(array $args): \AWS\Result { }

    /**
     * @param array{MeetingId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteMeetingAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{AccountId:string, RoomId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteRoom(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, RoomId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteRoomAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, RoomId:string, MemberId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteRoomMembership(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, RoomId:string, MemberId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteRoomMembershipAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{AppInstanceArn:string} $args
     * @return \AWS\Result<array{AppInstance?:array{AppInstanceArn?:string, Name?:string, Metadata?:string, CreatedTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function describeAppInstance(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstance?:array{AppInstanceArn?:string, Name?:string, Metadata?:string, CreatedTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function describeAppInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceAdminArn:string, AppInstanceArn:string} $args
     * @return \AWS\Result<array{AppInstanceAdmin?:array{Admin?:array{Arn?:string, Name?:string}, AppInstanceArn?:string, CreatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function describeAppInstanceAdmin(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceAdminArn:string, AppInstanceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstanceAdmin?:array{Admin?:array{Arn?:string, Name?:string}, AppInstanceArn?:string, CreatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function describeAppInstanceAdminAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceUserArn:string} $args
     * @return \AWS\Result<array{AppInstanceUser?:array{AppInstanceUserArn?:string, Name?:string, CreatedTimestamp?:int|string|\DateTimeInterface, Metadata?:string, LastUpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function describeAppInstanceUser(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceUserArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstanceUser?:array{AppInstanceUserArn?:string, Name?:string, CreatedTimestamp?:int|string|\DateTimeInterface, Metadata?:string, LastUpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function describeAppInstanceUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, ChimeBearer?:string} $args
     * @return \AWS\Result<array{Channel?:array{Name?:string, ChannelArn?:string, Mode?:"UNRESTRICTED"|"RESTRICTED", Privacy?:"PUBLIC"|"PRIVATE", Metadata?:string, CreatedBy?:array{Arn?:string, Name?:string}, CreatedTimestamp?:int|string|\DateTimeInterface, LastMessageTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function describeChannel(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, ChimeBearer?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Channel?:array{Name?:string, ChannelArn?:string, Mode?:"UNRESTRICTED"|"RESTRICTED", Privacy?:"PUBLIC"|"PRIVATE", Metadata?:string, CreatedBy?:array{Arn?:string, Name?:string}, CreatedTimestamp?:int|string|\DateTimeInterface, LastMessageTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function describeChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, MemberArn:string, ChimeBearer?:string} $args
     * @return \AWS\Result<array{ChannelBan?:array{Member?:array{Arn?:string, Name?:string}, ChannelArn?:string, CreatedTimestamp?:int|string|\DateTimeInterface, CreatedBy?:array{Arn?:string, Name?:string}}}>
     */
    public function describeChannelBan(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, MemberArn:string, ChimeBearer?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelBan?:array{Member?:array{Arn?:string, Name?:string}, ChannelArn?:string, CreatedTimestamp?:int|string|\DateTimeInterface, CreatedBy?:array{Arn?:string, Name?:string}}}>
     */
    public function describeChannelBanAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, MemberArn:string, ChimeBearer?:string} $args
     * @return \AWS\Result<array{ChannelMembership?:array{InvitedBy?:array{Arn?:string, Name?:string}, Type?:"DEFAULT"|"HIDDEN", Member?:array{Arn?:string, Name?:string}, ChannelArn?:string, CreatedTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function describeChannelMembership(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, MemberArn:string, ChimeBearer?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelMembership?:array{InvitedBy?:array{Arn?:string, Name?:string}, Type?:"DEFAULT"|"HIDDEN", Member?:array{Arn?:string, Name?:string}, ChannelArn?:string, CreatedTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function describeChannelMembershipAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, AppInstanceUserArn:string, ChimeBearer?:string} $args
     * @return \AWS\Result<array{ChannelMembership?:array{ChannelSummary?:array{Name?:string, ChannelArn?:string, Mode?:"UNRESTRICTED"|"RESTRICTED", Privacy?:"PUBLIC"|"PRIVATE", Metadata?:string, LastMessageTimestamp?:int|string|\DateTimeInterface}, AppInstanceUserMembershipSummary?:array{Type?:"DEFAULT"|"HIDDEN", ReadMarkerTimestamp?:int|string|\DateTimeInterface}}}>
     */
    public function describeChannelMembershipForAppInstanceUser(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, AppInstanceUserArn:string, ChimeBearer?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelMembership?:array{ChannelSummary?:array{Name?:string, ChannelArn?:string, Mode?:"UNRESTRICTED"|"RESTRICTED", Privacy?:"PUBLIC"|"PRIVATE", Metadata?:string, LastMessageTimestamp?:int|string|\DateTimeInterface}, AppInstanceUserMembershipSummary?:array{Type?:"DEFAULT"|"HIDDEN", ReadMarkerTimestamp?:int|string|\DateTimeInterface}}}>
     */
    public function describeChannelMembershipForAppInstanceUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, AppInstanceUserArn:string, ChimeBearer?:string} $args
     * @return \AWS\Result<array{Channel?:array{ChannelSummary?:array{Name?:string, ChannelArn?:string, Mode?:"UNRESTRICTED"|"RESTRICTED", Privacy?:"PUBLIC"|"PRIVATE", Metadata?:string, LastMessageTimestamp?:int|string|\DateTimeInterface}}}>
     */
    public function describeChannelModeratedByAppInstanceUser(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, AppInstanceUserArn:string, ChimeBearer?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Channel?:array{ChannelSummary?:array{Name?:string, ChannelArn?:string, Mode?:"UNRESTRICTED"|"RESTRICTED", Privacy?:"PUBLIC"|"PRIVATE", Metadata?:string, LastMessageTimestamp?:int|string|\DateTimeInterface}}}>
     */
    public function describeChannelModeratedByAppInstanceUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, ChannelModeratorArn:string, ChimeBearer?:string} $args
     * @return \AWS\Result<array{ChannelModerator?:array{Moderator?:array{Arn?:string, Name?:string}, ChannelArn?:string, CreatedTimestamp?:int|string|\DateTimeInterface, CreatedBy?:array{Arn?:string, Name?:string}}}>
     */
    public function describeChannelModerator(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, ChannelModeratorArn:string, ChimeBearer?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelModerator?:array{Moderator?:array{Arn?:string, Name?:string}, ChannelArn?:string, CreatedTimestamp?:int|string|\DateTimeInterface, CreatedBy?:array{Arn?:string, Name?:string}}}>
     */
    public function describeChannelModeratorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, UserId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociatePhoneNumberFromUser(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, UserId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociatePhoneNumberFromUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string, E164PhoneNumbers:array<string>} $args
     * @return \AWS\Result<array{PhoneNumberErrors?:array<array{PhoneNumberId?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist", ErrorMessage?:string}>}>
     */
    public function disassociatePhoneNumbersFromVoiceConnector(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string, E164PhoneNumbers:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumberErrors?:array<array{PhoneNumberId?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist", ErrorMessage?:string}>}>
     */
    public function disassociatePhoneNumbersFromVoiceConnectorAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorGroupId:string, E164PhoneNumbers:array<string>} $args
     * @return \AWS\Result<array{PhoneNumberErrors?:array<array{PhoneNumberId?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist", ErrorMessage?:string}>}>
     */
    public function disassociatePhoneNumbersFromVoiceConnectorGroup(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorGroupId:string, E164PhoneNumbers:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumberErrors?:array<array{PhoneNumberId?:string, ErrorCode?:"BadRequest"|"Conflict"|"Forbidden"|"NotFound"|"PreconditionFailed"|"ResourceLimitExceeded"|"ServiceFailure"|"AccessDenied"|"ServiceUnavailable"|"Throttled"|"Throttling"|"Unauthorized"|"Unprocessable"|"VoiceConnectorGroupAssociationsExist"|"PhoneNumberAssociationsExist", ErrorMessage?:string}>}>
     */
    public function disassociatePhoneNumbersFromVoiceConnectorGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, GroupNames:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateSigninDelegateGroupsFromAccount(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, GroupNames:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateSigninDelegateGroupsFromAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string} $args
     * @return \AWS\Result<array{Account?:array{AwsAccountId:string, AccountId:string, Name:string, AccountType?:"Team"|"EnterpriseDirectory"|"EnterpriseLWA"|"EnterpriseOIDC", CreatedTimestamp?:int|string|\DateTimeInterface, DefaultLicense?:"Basic"|"Plus"|"Pro"|"ProTrial", SupportedLicenses?:array<"Basic"|"Plus"|"Pro"|"ProTrial">, AccountStatus?:"Suspended"|"Active", SigninDelegateGroups?:array<array{GroupName?:string}>}}>
     */
    public function getAccount(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Account?:array{AwsAccountId:string, AccountId:string, Name:string, AccountType?:"Team"|"EnterpriseDirectory"|"EnterpriseLWA"|"EnterpriseOIDC", CreatedTimestamp?:int|string|\DateTimeInterface, DefaultLicense?:"Basic"|"Plus"|"Pro"|"ProTrial", SupportedLicenses?:array<"Basic"|"Plus"|"Pro"|"ProTrial">, AccountStatus?:"Suspended"|"Active", SigninDelegateGroups?:array<array{GroupName?:string}>}}>
     */
    public function getAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string} $args
     * @return \AWS\Result<array{AccountSettings?:array{DisableRemoteControl?:bool, EnableDialOut?:bool}}>
     */
    public function getAccountSettings(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccountSettings?:array{DisableRemoteControl?:bool, EnableDialOut?:bool}}>
     */
    public function getAccountSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceArn:string} $args
     * @return \AWS\Result<array{AppInstanceRetentionSettings?:array{ChannelRetentionSettings?:array{RetentionDays?:int}}, InitiateDeletionTimestamp?:int|string|\DateTimeInterface}>
     */
    public function getAppInstanceRetentionSettings(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstanceRetentionSettings?:array{ChannelRetentionSettings?:array{RetentionDays?:int}}, InitiateDeletionTimestamp?:int|string|\DateTimeInterface}>
     */
    public function getAppInstanceRetentionSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceArn:string} $args
     * @return \AWS\Result<array{AppInstanceStreamingConfigurations?:array<array{AppInstanceDataType:"Channel"|"ChannelMessage", ResourceArn:string}>}>
     */
    public function getAppInstanceStreamingConfigurations(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstanceStreamingConfigurations?:array<array{AppInstanceDataType:"Channel"|"ChannelMessage", ResourceArn:string}>}>
     */
    public function getAppInstanceStreamingConfigurationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MeetingId:string, AttendeeId:string} $args
     * @return \AWS\Result<array{Attendee?:array{ExternalUserId?:string, AttendeeId?:string, JoinToken?:string}}>
     */
    public function getAttendee(array $args): \AWS\Result { }

    /**
     * @param array{MeetingId:string, AttendeeId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attendee?:array{ExternalUserId?:string, AttendeeId?:string, JoinToken?:string}}>
     */
    public function getAttendeeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, BotId:string} $args
     * @return \AWS\Result<array{Bot?:array{BotId?:string, UserId?:string, DisplayName?:string, BotType?:"ChatBot", Disabled?:bool, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, BotEmail?:string, SecurityToken?:string}}>
     */
    public function getBot(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, BotId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Bot?:array{BotId?:string, UserId?:string, DisplayName?:string, BotType?:"ChatBot", Disabled?:bool, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, BotEmail?:string, SecurityToken?:string}}>
     */
    public function getBotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, MessageId:string, ChimeBearer?:string} $args
     * @return \AWS\Result<array{ChannelMessage?:array{ChannelArn?:string, MessageId?:string, Content?:string, Metadata?:string, Type?:"STANDARD"|"CONTROL", CreatedTimestamp?:int|string|\DateTimeInterface, LastEditedTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface, Sender?:array{Arn?:string, Name?:string}, Redacted?:bool, Persistence?:"PERSISTENT"|"NON_PERSISTENT"}}>
     */
    public function getChannelMessage(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, MessageId:string, ChimeBearer?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelMessage?:array{ChannelArn?:string, MessageId?:string, Content?:string, Metadata?:string, Type?:"STANDARD"|"CONTROL", CreatedTimestamp?:int|string|\DateTimeInterface, LastEditedTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface, Sender?:array{Arn?:string, Name?:string}, Redacted?:bool, Persistence?:"PERSISTENT"|"NON_PERSISTENT"}}>
     */
    public function getChannelMessageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, BotId:string} $args
     * @return \AWS\Result<array{EventsConfiguration?:array{BotId?:string, OutboundEventsHTTPSEndpoint?:string, LambdaFunctionArn?:string}}>
     */
    public function getEventsConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, BotId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventsConfiguration?:array{BotId?:string, OutboundEventsHTTPSEndpoint?:string, LambdaFunctionArn?:string}}>
     */
    public function getEventsConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{BusinessCalling?:array{CdrBucket?:string}, VoiceConnector?:array{CdrBucket?:string}}>
     */
    public function getGlobalSettings(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{BusinessCalling?:array{CdrBucket?:string}, VoiceConnector?:array{CdrBucket?:string}}>
     */
    public function getGlobalSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MediaPipelineId:string} $args
     * @return \AWS\Result<array{MediaCapturePipeline?:array{MediaPipelineId?:string, SourceType?:"ChimeSdkMeeting", SourceArn?:string, Status?:"Initializing"|"InProgress"|"Failed"|"Stopping"|"Stopped", SinkType?:"S3Bucket", SinkArn?:string, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, ChimeSdkMeetingConfiguration?:array{SourceConfiguration?:array{SelectedVideoStreams?:array{AttendeeIds?:array<string>, ExternalUserIds?:array<string>}}, ArtifactsConfiguration?:array{Audio:array{MuxType:"AudioOnly"|"AudioWithActiveSpeakerVideo"}, Video:array{State:"Enabled"|"Disabled", MuxType?:"VideoOnly"}, Content:array{State:"Enabled"|"Disabled", MuxType?:"ContentOnly"}}}}}>
     */
    public function getMediaCapturePipeline(array $args): \AWS\Result { }

    /**
     * @param array{MediaPipelineId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MediaCapturePipeline?:array{MediaPipelineId?:string, SourceType?:"ChimeSdkMeeting", SourceArn?:string, Status?:"Initializing"|"InProgress"|"Failed"|"Stopping"|"Stopped", SinkType?:"S3Bucket", SinkArn?:string, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, ChimeSdkMeetingConfiguration?:array{SourceConfiguration?:array{SelectedVideoStreams?:array{AttendeeIds?:array<string>, ExternalUserIds?:array<string>}}, ArtifactsConfiguration?:array{Audio:array{MuxType:"AudioOnly"|"AudioWithActiveSpeakerVideo"}, Video:array{State:"Enabled"|"Disabled", MuxType?:"VideoOnly"}, Content:array{State:"Enabled"|"Disabled", MuxType?:"ContentOnly"}}}}}>
     */
    public function getMediaCapturePipelineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MeetingId:string} $args
     * @return \AWS\Result<array{Meeting?:array{MeetingId?:string, ExternalMeetingId?:string, MediaPlacement?:array{AudioHostUrl?:string, AudioFallbackUrl?:string, ScreenDataUrl?:string, ScreenSharingUrl?:string, ScreenViewingUrl?:string, SignalingUrl?:string, TurnControlUrl?:string, EventIngestionUrl?:string}, MediaRegion?:string}}>
     */
    public function getMeeting(array $args): \AWS\Result { }

    /**
     * @param array{MeetingId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Meeting?:array{MeetingId?:string, ExternalMeetingId?:string, MediaPlacement?:array{AudioHostUrl?:string, AudioFallbackUrl?:string, ScreenDataUrl?:string, ScreenSharingUrl?:string, ScreenViewingUrl?:string, SignalingUrl?:string, TurnControlUrl?:string, EventIngestionUrl?:string}, MediaRegion?:string}}>
     */
    public function getMeetingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{Endpoint?:array{Url?:string}}>
     */
    public function getMessagingSessionEndpoint(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{Endpoint?:array{Url?:string}}>
     */
    public function getMessagingSessionEndpointAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PhoneNumberId:string} $args
     * @return \AWS\Result<array{PhoneNumber?:array{PhoneNumberId?:string, E164PhoneNumber?:string, Country?:string, Type?:"Local"|"TollFree", ProductType?:"BusinessCalling"|"VoiceConnector"|"SipMediaApplicationDialIn", Status?:"AcquireInProgress"|"AcquireFailed"|"Unassigned"|"Assigned"|"ReleaseInProgress"|"DeleteInProgress"|"ReleaseFailed"|"DeleteFailed", Capabilities?:array{InboundCall?:bool, OutboundCall?:bool, InboundSMS?:bool, OutboundSMS?:bool, InboundMMS?:bool, OutboundMMS?:bool}, Associations?:array<array{Value?:string, Name?:"AccountId"|"UserId"|"VoiceConnectorId"|"VoiceConnectorGroupId"|"SipRuleId", AssociatedTimestamp?:int|string|\DateTimeInterface}>, CallingName?:string, CallingNameStatus?:"Unassigned"|"UpdateInProgress"|"UpdateSucceeded"|"UpdateFailed", CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, DeletionTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function getPhoneNumber(array $args): \AWS\Result { }

    /**
     * @param array{PhoneNumberId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumber?:array{PhoneNumberId?:string, E164PhoneNumber?:string, Country?:string, Type?:"Local"|"TollFree", ProductType?:"BusinessCalling"|"VoiceConnector"|"SipMediaApplicationDialIn", Status?:"AcquireInProgress"|"AcquireFailed"|"Unassigned"|"Assigned"|"ReleaseInProgress"|"DeleteInProgress"|"ReleaseFailed"|"DeleteFailed", Capabilities?:array{InboundCall?:bool, OutboundCall?:bool, InboundSMS?:bool, OutboundSMS?:bool, InboundMMS?:bool, OutboundMMS?:bool}, Associations?:array<array{Value?:string, Name?:"AccountId"|"UserId"|"VoiceConnectorId"|"VoiceConnectorGroupId"|"SipRuleId", AssociatedTimestamp?:int|string|\DateTimeInterface}>, CallingName?:string, CallingNameStatus?:"Unassigned"|"UpdateInProgress"|"UpdateSucceeded"|"UpdateFailed", CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, DeletionTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function getPhoneNumberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PhoneNumberOrderId:string} $args
     * @return \AWS\Result<array{PhoneNumberOrder?:array{PhoneNumberOrderId?:string, ProductType?:"BusinessCalling"|"VoiceConnector"|"SipMediaApplicationDialIn", Status?:"Processing"|"Successful"|"Failed"|"Partial", OrderedPhoneNumbers?:array<array{E164PhoneNumber?:string, Status?:"Processing"|"Acquired"|"Failed"}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function getPhoneNumberOrder(array $args): \AWS\Result { }

    /**
     * @param array{PhoneNumberOrderId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumberOrder?:array{PhoneNumberOrderId?:string, ProductType?:"BusinessCalling"|"VoiceConnector"|"SipMediaApplicationDialIn", Status?:"Processing"|"Successful"|"Failed"|"Partial", OrderedPhoneNumbers?:array<array{E164PhoneNumber?:string, Status?:"Processing"|"Acquired"|"Failed"}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
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
     * @param array{AccountId:string} $args
     * @return \AWS\Result<array{RetentionSettings?:array{RoomRetentionSettings?:array{RetentionDays?:int}, ConversationRetentionSettings?:array{RetentionDays?:int}}, InitiateDeletionTimestamp?:int|string|\DateTimeInterface}>
     */
    public function getRetentionSettings(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RetentionSettings?:array{RoomRetentionSettings?:array{RetentionDays?:int}, ConversationRetentionSettings?:array{RetentionDays?:int}}, InitiateDeletionTimestamp?:int|string|\DateTimeInterface}>
     */
    public function getRetentionSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, RoomId:string} $args
     * @return \AWS\Result<array{Room?:array{RoomId?:string, Name?:string, AccountId?:string, CreatedBy?:string, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function getRoom(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, RoomId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Room?:array{RoomId?:string, Name?:string, AccountId?:string, CreatedBy?:string, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function getRoomAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SipMediaApplicationId:string} $args
     * @return \AWS\Result<array{SipMediaApplication?:array{SipMediaApplicationId?:string, AwsRegion?:string, Name?:string, Endpoints?:array<array{LambdaArn?:string}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function getSipMediaApplication(array $args): \AWS\Result { }

    /**
     * @param array{SipMediaApplicationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SipMediaApplication?:array{SipMediaApplicationId?:string, AwsRegion?:string, Name?:string, Endpoints?:array<array{LambdaArn?:string}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function getSipMediaApplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{AccountId:string, UserId:string} $args
     * @return \AWS\Result<array{User?:array{UserId:string, AccountId?:string, PrimaryEmail?:string, PrimaryProvisionedNumber?:string, DisplayName?:string, LicenseType?:"Basic"|"Plus"|"Pro"|"ProTrial", UserType?:"PrivateUser"|"SharedDevice", UserRegistrationStatus?:"Unregistered"|"Registered"|"Suspended", UserInvitationStatus?:"Pending"|"Accepted"|"Failed", RegisteredOn?:int|string|\DateTimeInterface, InvitedOn?:int|string|\DateTimeInterface, AlexaForBusinessMetadata?:array{IsAlexaForBusinessEnabled?:bool, AlexaForBusinessRoomArn?:string}, PersonalPIN?:string}}>
     */
    public function getUser(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, UserId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{User?:array{UserId:string, AccountId?:string, PrimaryEmail?:string, PrimaryProvisionedNumber?:string, DisplayName?:string, LicenseType?:"Basic"|"Plus"|"Pro"|"ProTrial", UserType?:"PrivateUser"|"SharedDevice", UserRegistrationStatus?:"Unregistered"|"Registered"|"Suspended", UserInvitationStatus?:"Pending"|"Accepted"|"Failed", RegisteredOn?:int|string|\DateTimeInterface, InvitedOn?:int|string|\DateTimeInterface, AlexaForBusinessMetadata?:array{IsAlexaForBusinessEnabled?:bool, AlexaForBusinessRoomArn?:string}, PersonalPIN?:string}}>
     */
    public function getUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, UserId:string} $args
     * @return \AWS\Result<array{UserSettings?:array{Telephony:array{InboundCalling:bool, OutboundCalling:bool, SMS:bool}}}>
     */
    public function getUserSettings(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, UserId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserSettings?:array{Telephony:array{InboundCalling:bool, OutboundCalling:bool, SMS:bool}}}>
     */
    public function getUserSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \AWS\Result<array{VoiceConnector?:array{VoiceConnectorId?:string, AwsRegion?:"us-east-1"|"us-west-2", Name?:string, OutboundHostName?:string, RequireEncryption?:bool, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, VoiceConnectorArn?:string}}>
     */
    public function getVoiceConnector(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VoiceConnector?:array{VoiceConnectorId?:string, AwsRegion?:"us-east-1"|"us-west-2", Name?:string, OutboundHostName?:string, RequireEncryption?:bool, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, VoiceConnectorArn?:string}}>
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
     * @return \AWS\Result<array{StreamingConfiguration?:array{DataRetentionInHours:int, Disabled?:bool, StreamingNotificationTargets?:array<array{NotificationTarget:"EventBridge"|"SNS"|"SQS"}>}}>
     */
    public function getVoiceConnectorStreamingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StreamingConfiguration?:array{DataRetentionInHours:int, Disabled?:bool, StreamingNotificationTargets?:array<array{NotificationTarget:"EventBridge"|"SNS"|"SQS"}>}}>
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
     * @param array{AccountId:string, UserEmailList:array<string>, UserType?:"PrivateUser"|"SharedDevice"} $args
     * @return \AWS\Result<array{Invites?:array<array{InviteId?:string, Status?:"Pending"|"Accepted"|"Failed", EmailAddress?:string, EmailStatus?:"NotSent"|"Sent"|"Failed"}>}>
     */
    public function inviteUsers(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, UserEmailList:array<string>, UserType?:"PrivateUser"|"SharedDevice"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Invites?:array<array{InviteId?:string, Status?:"Pending"|"Accepted"|"Failed", EmailAddress?:string, EmailStatus?:"NotSent"|"Sent"|"Failed"}>}>
     */
    public function inviteUsersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name?:string, UserEmail?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Accounts?:array<array{AwsAccountId:string, AccountId:string, Name:string, AccountType?:"Team"|"EnterpriseDirectory"|"EnterpriseLWA"|"EnterpriseOIDC", CreatedTimestamp?:int|string|\DateTimeInterface, DefaultLicense?:"Basic"|"Plus"|"Pro"|"ProTrial", SupportedLicenses?:array<"Basic"|"Plus"|"Pro"|"ProTrial">, AccountStatus?:"Suspended"|"Active", SigninDelegateGroups?:array<array{GroupName?:string}>}>, NextToken?:string}>
     */
    public function listAccounts(array $args = []): \AWS\Result { }

    /**
     * @param array{Name?:string, UserEmail?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Accounts?:array<array{AwsAccountId:string, AccountId:string, Name:string, AccountType?:"Team"|"EnterpriseDirectory"|"EnterpriseLWA"|"EnterpriseOIDC", CreatedTimestamp?:int|string|\DateTimeInterface, DefaultLicense?:"Basic"|"Plus"|"Pro"|"ProTrial", SupportedLicenses?:array<"Basic"|"Plus"|"Pro"|"ProTrial">, AccountStatus?:"Suspended"|"Active", SigninDelegateGroups?:array<array{GroupName?:string}>}>, NextToken?:string}>
     */
    public function listAccountsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{AppInstanceArn?:string, AppInstanceAdmins?:array<array{Admin?:array{Arn?:string, Name?:string}}>, NextToken?:string}>
     */
    public function listAppInstanceAdmins(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstanceArn?:string, AppInstanceAdmins?:array<array{Admin?:array{Arn?:string, Name?:string}}>, NextToken?:string}>
     */
    public function listAppInstanceAdminsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{AppInstanceArn?:string, AppInstanceUsers?:array<array{AppInstanceUserArn?:string, Name?:string, Metadata?:string}>, NextToken?:string}>
     */
    public function listAppInstanceUsers(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceArn:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstanceArn?:string, AppInstanceUsers?:array<array{AppInstanceUserArn?:string, Name?:string, Metadata?:string}>, NextToken?:string}>
     */
    public function listAppInstanceUsersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{AppInstances?:array<array{AppInstanceArn?:string, Name?:string, Metadata?:string}>, NextToken?:string}>
     */
    public function listAppInstances(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstances?:array<array{AppInstanceArn?:string, Name?:string, Metadata?:string}>, NextToken?:string}>
     */
    public function listAppInstancesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MeetingId:string, AttendeeId:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listAttendeeTags(array $args): \AWS\Result { }

    /**
     * @param array{MeetingId:string, AttendeeId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listAttendeeTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MeetingId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Attendees?:array<array{ExternalUserId?:string, AttendeeId?:string, JoinToken?:string}>, NextToken?:string}>
     */
    public function listAttendees(array $args): \AWS\Result { }

    /**
     * @param array{MeetingId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attendees?:array<array{ExternalUserId?:string, AttendeeId?:string, JoinToken?:string}>, NextToken?:string}>
     */
    public function listAttendeesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Bots?:array<array{BotId?:string, UserId?:string, DisplayName?:string, BotType?:"ChatBot", Disabled?:bool, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, BotEmail?:string, SecurityToken?:string}>, NextToken?:string}>
     */
    public function listBots(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Bots?:array<array{BotId?:string, UserId?:string, DisplayName?:string, BotType?:"ChatBot", Disabled?:bool, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, BotEmail?:string, SecurityToken?:string}>, NextToken?:string}>
     */
    public function listBotsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, MaxResults?:int, NextToken?:string, ChimeBearer?:string} $args
     * @return \AWS\Result<array{ChannelArn?:string, NextToken?:string, ChannelBans?:array<array{Member?:array{Arn?:string, Name?:string}}>}>
     */
    public function listChannelBans(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, MaxResults?:int, NextToken?:string, ChimeBearer?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelArn?:string, NextToken?:string, ChannelBans?:array<array{Member?:array{Arn?:string, Name?:string}}>}>
     */
    public function listChannelBansAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, Type?:"DEFAULT"|"HIDDEN", MaxResults?:int, NextToken?:string, ChimeBearer?:string} $args
     * @return \AWS\Result<array{ChannelArn?:string, ChannelMemberships?:array<array{Member?:array{Arn?:string, Name?:string}}>, NextToken?:string}>
     */
    public function listChannelMemberships(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, Type?:"DEFAULT"|"HIDDEN", MaxResults?:int, NextToken?:string, ChimeBearer?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelArn?:string, ChannelMemberships?:array<array{Member?:array{Arn?:string, Name?:string}}>, NextToken?:string}>
     */
    public function listChannelMembershipsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceUserArn?:string, MaxResults?:int, NextToken?:string, ChimeBearer?:string} $args
     * @return \AWS\Result<array{ChannelMemberships?:array<array{ChannelSummary?:array{Name?:string, ChannelArn?:string, Mode?:"UNRESTRICTED"|"RESTRICTED", Privacy?:"PUBLIC"|"PRIVATE", Metadata?:string, LastMessageTimestamp?:int|string|\DateTimeInterface}, AppInstanceUserMembershipSummary?:array{Type?:"DEFAULT"|"HIDDEN", ReadMarkerTimestamp?:int|string|\DateTimeInterface}}>, NextToken?:string}>
     */
    public function listChannelMembershipsForAppInstanceUser(array $args = []): \AWS\Result { }

    /**
     * @param array{AppInstanceUserArn?:string, MaxResults?:int, NextToken?:string, ChimeBearer?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelMemberships?:array<array{ChannelSummary?:array{Name?:string, ChannelArn?:string, Mode?:"UNRESTRICTED"|"RESTRICTED", Privacy?:"PUBLIC"|"PRIVATE", Metadata?:string, LastMessageTimestamp?:int|string|\DateTimeInterface}, AppInstanceUserMembershipSummary?:array{Type?:"DEFAULT"|"HIDDEN", ReadMarkerTimestamp?:int|string|\DateTimeInterface}}>, NextToken?:string}>
     */
    public function listChannelMembershipsForAppInstanceUserAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, SortOrder?:"ASCENDING"|"DESCENDING", NotBefore?:int|string|\DateTimeInterface, NotAfter?:int|string|\DateTimeInterface, MaxResults?:int, NextToken?:string, ChimeBearer?:string} $args
     * @return \AWS\Result<array{ChannelArn?:string, NextToken?:string, ChannelMessages?:array<array{MessageId?:string, Content?:string, Metadata?:string, Type?:"STANDARD"|"CONTROL", CreatedTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface, LastEditedTimestamp?:int|string|\DateTimeInterface, Sender?:array{Arn?:string, Name?:string}, Redacted?:bool}>}>
     */
    public function listChannelMessages(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, SortOrder?:"ASCENDING"|"DESCENDING", NotBefore?:int|string|\DateTimeInterface, NotAfter?:int|string|\DateTimeInterface, MaxResults?:int, NextToken?:string, ChimeBearer?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelArn?:string, NextToken?:string, ChannelMessages?:array<array{MessageId?:string, Content?:string, Metadata?:string, Type?:"STANDARD"|"CONTROL", CreatedTimestamp?:int|string|\DateTimeInterface, LastUpdatedTimestamp?:int|string|\DateTimeInterface, LastEditedTimestamp?:int|string|\DateTimeInterface, Sender?:array{Arn?:string, Name?:string}, Redacted?:bool}>}>
     */
    public function listChannelMessagesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, MaxResults?:int, NextToken?:string, ChimeBearer?:string} $args
     * @return \AWS\Result<array{ChannelArn?:string, NextToken?:string, ChannelModerators?:array<array{Moderator?:array{Arn?:string, Name?:string}}>}>
     */
    public function listChannelModerators(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, MaxResults?:int, NextToken?:string, ChimeBearer?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelArn?:string, NextToken?:string, ChannelModerators?:array<array{Moderator?:array{Arn?:string, Name?:string}}>}>
     */
    public function listChannelModeratorsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceArn:string, Privacy?:"PUBLIC"|"PRIVATE", MaxResults?:int, NextToken?:string, ChimeBearer?:string} $args
     * @return \AWS\Result<array{Channels?:array<array{Name?:string, ChannelArn?:string, Mode?:"UNRESTRICTED"|"RESTRICTED", Privacy?:"PUBLIC"|"PRIVATE", Metadata?:string, LastMessageTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listChannels(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceArn:string, Privacy?:"PUBLIC"|"PRIVATE", MaxResults?:int, NextToken?:string, ChimeBearer?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Channels?:array<array{Name?:string, ChannelArn?:string, Mode?:"UNRESTRICTED"|"RESTRICTED", Privacy?:"PUBLIC"|"PRIVATE", Metadata?:string, LastMessageTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listChannelsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceUserArn?:string, MaxResults?:int, NextToken?:string, ChimeBearer?:string} $args
     * @return \AWS\Result<array{Channels?:array<array{ChannelSummary?:array{Name?:string, ChannelArn?:string, Mode?:"UNRESTRICTED"|"RESTRICTED", Privacy?:"PUBLIC"|"PRIVATE", Metadata?:string, LastMessageTimestamp?:int|string|\DateTimeInterface}}>, NextToken?:string}>
     */
    public function listChannelsModeratedByAppInstanceUser(array $args = []): \AWS\Result { }

    /**
     * @param array{AppInstanceUserArn?:string, MaxResults?:int, NextToken?:string, ChimeBearer?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Channels?:array<array{ChannelSummary?:array{Name?:string, ChannelArn?:string, Mode?:"UNRESTRICTED"|"RESTRICTED", Privacy?:"PUBLIC"|"PRIVATE", Metadata?:string, LastMessageTimestamp?:int|string|\DateTimeInterface}}>, NextToken?:string}>
     */
    public function listChannelsModeratedByAppInstanceUserAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{MediaCapturePipelines?:array<array{MediaPipelineId?:string, SourceType?:"ChimeSdkMeeting", SourceArn?:string, Status?:"Initializing"|"InProgress"|"Failed"|"Stopping"|"Stopped", SinkType?:"S3Bucket", SinkArn?:string, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, ChimeSdkMeetingConfiguration?:array{SourceConfiguration?:array{SelectedVideoStreams?:array{AttendeeIds?:array<string>, ExternalUserIds?:array<string>}}, ArtifactsConfiguration?:array{Audio:array{MuxType:"AudioOnly"|"AudioWithActiveSpeakerVideo"}, Video:array{State:"Enabled"|"Disabled", MuxType?:"VideoOnly"}, Content:array{State:"Enabled"|"Disabled", MuxType?:"ContentOnly"}}}}>, NextToken?:string}>
     */
    public function listMediaCapturePipelines(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{MediaCapturePipelines?:array<array{MediaPipelineId?:string, SourceType?:"ChimeSdkMeeting", SourceArn?:string, Status?:"Initializing"|"InProgress"|"Failed"|"Stopping"|"Stopped", SinkType?:"S3Bucket", SinkArn?:string, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, ChimeSdkMeetingConfiguration?:array{SourceConfiguration?:array{SelectedVideoStreams?:array{AttendeeIds?:array<string>, ExternalUserIds?:array<string>}}, ArtifactsConfiguration?:array{Audio:array{MuxType:"AudioOnly"|"AudioWithActiveSpeakerVideo"}, Video:array{State:"Enabled"|"Disabled", MuxType?:"VideoOnly"}, Content:array{State:"Enabled"|"Disabled", MuxType?:"ContentOnly"}}}}>, NextToken?:string}>
     */
    public function listMediaCapturePipelinesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MeetingId:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listMeetingTags(array $args): \AWS\Result { }

    /**
     * @param array{MeetingId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listMeetingTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Meetings?:array<array{MeetingId?:string, ExternalMeetingId?:string, MediaPlacement?:array{AudioHostUrl?:string, AudioFallbackUrl?:string, ScreenDataUrl?:string, ScreenSharingUrl?:string, ScreenViewingUrl?:string, SignalingUrl?:string, TurnControlUrl?:string, EventIngestionUrl?:string}, MediaRegion?:string}>, NextToken?:string}>
     */
    public function listMeetings(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Meetings?:array<array{MeetingId?:string, ExternalMeetingId?:string, MediaPlacement?:array{AudioHostUrl?:string, AudioFallbackUrl?:string, ScreenDataUrl?:string, ScreenSharingUrl?:string, ScreenViewingUrl?:string, SignalingUrl?:string, TurnControlUrl?:string, EventIngestionUrl?:string}, MediaRegion?:string}>, NextToken?:string}>
     */
    public function listMeetingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{PhoneNumberOrders?:array<array{PhoneNumberOrderId?:string, ProductType?:"BusinessCalling"|"VoiceConnector"|"SipMediaApplicationDialIn", Status?:"Processing"|"Successful"|"Failed"|"Partial", OrderedPhoneNumbers?:array<array{E164PhoneNumber?:string, Status?:"Processing"|"Acquired"|"Failed"}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listPhoneNumberOrders(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumberOrders?:array<array{PhoneNumberOrderId?:string, ProductType?:"BusinessCalling"|"VoiceConnector"|"SipMediaApplicationDialIn", Status?:"Processing"|"Successful"|"Failed"|"Partial", OrderedPhoneNumbers?:array<array{E164PhoneNumber?:string, Status?:"Processing"|"Acquired"|"Failed"}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listPhoneNumberOrdersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Status?:"AcquireInProgress"|"AcquireFailed"|"Unassigned"|"Assigned"|"ReleaseInProgress"|"DeleteInProgress"|"ReleaseFailed"|"DeleteFailed", ProductType?:"BusinessCalling"|"VoiceConnector"|"SipMediaApplicationDialIn", FilterName?:"AccountId"|"UserId"|"VoiceConnectorId"|"VoiceConnectorGroupId"|"SipRuleId", FilterValue?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{PhoneNumbers?:array<array{PhoneNumberId?:string, E164PhoneNumber?:string, Country?:string, Type?:"Local"|"TollFree", ProductType?:"BusinessCalling"|"VoiceConnector"|"SipMediaApplicationDialIn", Status?:"AcquireInProgress"|"AcquireFailed"|"Unassigned"|"Assigned"|"ReleaseInProgress"|"DeleteInProgress"|"ReleaseFailed"|"DeleteFailed", Capabilities?:array{InboundCall?:bool, OutboundCall?:bool, InboundSMS?:bool, OutboundSMS?:bool, InboundMMS?:bool, OutboundMMS?:bool}, Associations?:array<array{Value?:string, Name?:"AccountId"|"UserId"|"VoiceConnectorId"|"VoiceConnectorGroupId"|"SipRuleId", AssociatedTimestamp?:int|string|\DateTimeInterface}>, CallingName?:string, CallingNameStatus?:"Unassigned"|"UpdateInProgress"|"UpdateSucceeded"|"UpdateFailed", CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, DeletionTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listPhoneNumbers(array $args = []): \AWS\Result { }

    /**
     * @param array{Status?:"AcquireInProgress"|"AcquireFailed"|"Unassigned"|"Assigned"|"ReleaseInProgress"|"DeleteInProgress"|"ReleaseFailed"|"DeleteFailed", ProductType?:"BusinessCalling"|"VoiceConnector"|"SipMediaApplicationDialIn", FilterName?:"AccountId"|"UserId"|"VoiceConnectorId"|"VoiceConnectorGroupId"|"SipRuleId", FilterValue?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumbers?:array<array{PhoneNumberId?:string, E164PhoneNumber?:string, Country?:string, Type?:"Local"|"TollFree", ProductType?:"BusinessCalling"|"VoiceConnector"|"SipMediaApplicationDialIn", Status?:"AcquireInProgress"|"AcquireFailed"|"Unassigned"|"Assigned"|"ReleaseInProgress"|"DeleteInProgress"|"ReleaseFailed"|"DeleteFailed", Capabilities?:array{InboundCall?:bool, OutboundCall?:bool, InboundSMS?:bool, OutboundSMS?:bool, InboundMMS?:bool, OutboundMMS?:bool}, Associations?:array<array{Value?:string, Name?:"AccountId"|"UserId"|"VoiceConnectorId"|"VoiceConnectorGroupId"|"SipRuleId", AssociatedTimestamp?:int|string|\DateTimeInterface}>, CallingName?:string, CallingNameStatus?:"Unassigned"|"UpdateInProgress"|"UpdateSucceeded"|"UpdateFailed", CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, DeletionTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
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
     * @param array{AccountId:string, RoomId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{RoomMemberships?:array<array{RoomId?:string, Member?:array{MemberId?:string, MemberType?:"User"|"Bot"|"Webhook", Email?:string, FullName?:string, AccountId?:string}, Role?:"Administrator"|"Member", InvitedBy?:string, UpdatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listRoomMemberships(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, RoomId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RoomMemberships?:array<array{RoomId?:string, Member?:array{MemberId?:string, MemberType?:"User"|"Bot"|"Webhook", Email?:string, FullName?:string, AccountId?:string}, Role?:"Administrator"|"Member", InvitedBy?:string, UpdatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listRoomMembershipsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, MemberId?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Rooms?:array<array{RoomId?:string, Name?:string, AccountId?:string, CreatedBy?:string, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listRooms(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, MemberId?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Rooms?:array<array{RoomId?:string, Name?:string, AccountId?:string, CreatedBy?:string, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listRoomsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{SipMediaApplications?:array<array{SipMediaApplicationId?:string, AwsRegion?:string, Name?:string, Endpoints?:array<array{LambdaArn?:string}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listSipMediaApplications(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SipMediaApplications?:array<array{SipMediaApplicationId?:string, AwsRegion?:string, Name?:string, Endpoints?:array<array{LambdaArn?:string}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
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
     * @param array{ProductType:"BusinessCalling"|"VoiceConnector"|"SipMediaApplicationDialIn"} $args
     * @return \AWS\Result<array{PhoneNumberCountries?:array<array{CountryCode?:string, SupportedPhoneNumberTypes?:array<"Local"|"TollFree">}>}>
     */
    public function listSupportedPhoneNumberCountries(array $args): \AWS\Result { }

    /**
     * @param array{ProductType:"BusinessCalling"|"VoiceConnector"|"SipMediaApplicationDialIn"} $args
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
     * @param array{AccountId:string, UserEmail?:string, UserType?:"PrivateUser"|"SharedDevice", MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Users?:array<array{UserId:string, AccountId?:string, PrimaryEmail?:string, PrimaryProvisionedNumber?:string, DisplayName?:string, LicenseType?:"Basic"|"Plus"|"Pro"|"ProTrial", UserType?:"PrivateUser"|"SharedDevice", UserRegistrationStatus?:"Unregistered"|"Registered"|"Suspended", UserInvitationStatus?:"Pending"|"Accepted"|"Failed", RegisteredOn?:int|string|\DateTimeInterface, InvitedOn?:int|string|\DateTimeInterface, AlexaForBusinessMetadata?:array{IsAlexaForBusinessEnabled?:bool, AlexaForBusinessRoomArn?:string}, PersonalPIN?:string}>, NextToken?:string}>
     */
    public function listUsers(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, UserEmail?:string, UserType?:"PrivateUser"|"SharedDevice", MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Users?:array<array{UserId:string, AccountId?:string, PrimaryEmail?:string, PrimaryProvisionedNumber?:string, DisplayName?:string, LicenseType?:"Basic"|"Plus"|"Pro"|"ProTrial", UserType?:"PrivateUser"|"SharedDevice", UserRegistrationStatus?:"Unregistered"|"Registered"|"Suspended", UserInvitationStatus?:"Pending"|"Accepted"|"Failed", RegisteredOn?:int|string|\DateTimeInterface, InvitedOn?:int|string|\DateTimeInterface, AlexaForBusinessMetadata?:array{IsAlexaForBusinessEnabled?:bool, AlexaForBusinessRoomArn?:string}, PersonalPIN?:string}>, NextToken?:string}>
     */
    public function listUsersAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @return \AWS\Result<array{VoiceConnectors?:array<array{VoiceConnectorId?:string, AwsRegion?:"us-east-1"|"us-west-2", Name?:string, OutboundHostName?:string, RequireEncryption?:bool, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, VoiceConnectorArn?:string}>, NextToken?:string}>
     */
    public function listVoiceConnectors(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{VoiceConnectors?:array<array{VoiceConnectorId?:string, AwsRegion?:"us-east-1"|"us-west-2", Name?:string, OutboundHostName?:string, RequireEncryption?:bool, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, VoiceConnectorArn?:string}>, NextToken?:string}>
     */
    public function listVoiceConnectorsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, UserId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function logoutUser(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, UserId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function logoutUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceArn:string, AppInstanceRetentionSettings:array{ChannelRetentionSettings?:array{RetentionDays?:int}}} $args
     * @return \AWS\Result<array{AppInstanceRetentionSettings?:array{ChannelRetentionSettings?:array{RetentionDays?:int}}, InitiateDeletionTimestamp?:int|string|\DateTimeInterface}>
     */
    public function putAppInstanceRetentionSettings(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceArn:string, AppInstanceRetentionSettings:array{ChannelRetentionSettings?:array{RetentionDays?:int}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstanceRetentionSettings?:array{ChannelRetentionSettings?:array{RetentionDays?:int}}, InitiateDeletionTimestamp?:int|string|\DateTimeInterface}>
     */
    public function putAppInstanceRetentionSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceArn:string, AppInstanceStreamingConfigurations:array<array{AppInstanceDataType:"Channel"|"ChannelMessage", ResourceArn:string}>} $args
     * @return \AWS\Result<array{AppInstanceStreamingConfigurations?:array<array{AppInstanceDataType:"Channel"|"ChannelMessage", ResourceArn:string}>}>
     */
    public function putAppInstanceStreamingConfigurations(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceArn:string, AppInstanceStreamingConfigurations:array<array{AppInstanceDataType:"Channel"|"ChannelMessage", ResourceArn:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstanceStreamingConfigurations?:array<array{AppInstanceDataType:"Channel"|"ChannelMessage", ResourceArn:string}>}>
     */
    public function putAppInstanceStreamingConfigurationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, BotId:string, OutboundEventsHTTPSEndpoint?:string, LambdaFunctionArn?:string} $args
     * @return \AWS\Result<array{EventsConfiguration?:array{BotId?:string, OutboundEventsHTTPSEndpoint?:string, LambdaFunctionArn?:string}}>
     */
    public function putEventsConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, BotId:string, OutboundEventsHTTPSEndpoint?:string, LambdaFunctionArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EventsConfiguration?:array{BotId?:string, OutboundEventsHTTPSEndpoint?:string, LambdaFunctionArn?:string}}>
     */
    public function putEventsConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, RetentionSettings:array{RoomRetentionSettings?:array{RetentionDays?:int}, ConversationRetentionSettings?:array{RetentionDays?:int}}} $args
     * @return \AWS\Result<array{RetentionSettings?:array{RoomRetentionSettings?:array{RetentionDays?:int}, ConversationRetentionSettings?:array{RetentionDays?:int}}, InitiateDeletionTimestamp?:int|string|\DateTimeInterface}>
     */
    public function putRetentionSettings(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, RetentionSettings:array{RoomRetentionSettings?:array{RetentionDays?:int}, ConversationRetentionSettings?:array{RetentionDays?:int}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{RetentionSettings?:array{RoomRetentionSettings?:array{RetentionDays?:int}, ConversationRetentionSettings?:array{RetentionDays?:int}}, InitiateDeletionTimestamp?:int|string|\DateTimeInterface}>
     */
    public function putRetentionSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{VoiceConnectorId:string, StreamingConfiguration:array{DataRetentionInHours:int, Disabled?:bool, StreamingNotificationTargets?:array<array{NotificationTarget:"EventBridge"|"SNS"|"SQS"}>}} $args
     * @return \AWS\Result<array{StreamingConfiguration?:array{DataRetentionInHours:int, Disabled?:bool, StreamingNotificationTargets?:array<array{NotificationTarget:"EventBridge"|"SNS"|"SQS"}>}}>
     */
    public function putVoiceConnectorStreamingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string, StreamingConfiguration:array{DataRetentionInHours:int, Disabled?:bool, StreamingNotificationTargets?:array<array{NotificationTarget:"EventBridge"|"SNS"|"SQS"}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{StreamingConfiguration?:array{DataRetentionInHours:int, Disabled?:bool, StreamingNotificationTargets?:array<array{NotificationTarget:"EventBridge"|"SNS"|"SQS"}>}}>
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
     * @param array{ChannelArn:string, MessageId:string, ChimeBearer?:string} $args
     * @return \AWS\Result<array{ChannelArn?:string, MessageId?:string}>
     */
    public function redactChannelMessage(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, MessageId:string, ChimeBearer?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelArn?:string, MessageId?:string}>
     */
    public function redactChannelMessageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, ConversationId:string, MessageId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function redactConversationMessage(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, ConversationId:string, MessageId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function redactConversationMessageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, RoomId:string, MessageId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function redactRoomMessage(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, RoomId:string, MessageId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function redactRoomMessageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, BotId:string} $args
     * @return \AWS\Result<array{Bot?:array{BotId?:string, UserId?:string, DisplayName?:string, BotType?:"ChatBot", Disabled?:bool, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, BotEmail?:string, SecurityToken?:string}}>
     */
    public function regenerateSecurityToken(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, BotId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Bot?:array{BotId?:string, UserId?:string, DisplayName?:string, BotType?:"ChatBot", Disabled?:bool, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, BotEmail?:string, SecurityToken?:string}}>
     */
    public function regenerateSecurityTokenAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, UserId:string} $args
     * @return \AWS\Result<array{User?:array{UserId:string, AccountId?:string, PrimaryEmail?:string, PrimaryProvisionedNumber?:string, DisplayName?:string, LicenseType?:"Basic"|"Plus"|"Pro"|"ProTrial", UserType?:"PrivateUser"|"SharedDevice", UserRegistrationStatus?:"Unregistered"|"Registered"|"Suspended", UserInvitationStatus?:"Pending"|"Accepted"|"Failed", RegisteredOn?:int|string|\DateTimeInterface, InvitedOn?:int|string|\DateTimeInterface, AlexaForBusinessMetadata?:array{IsAlexaForBusinessEnabled?:bool, AlexaForBusinessRoomArn?:string}, PersonalPIN?:string}}>
     */
    public function resetPersonalPIN(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, UserId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{User?:array{UserId:string, AccountId?:string, PrimaryEmail?:string, PrimaryProvisionedNumber?:string, DisplayName?:string, LicenseType?:"Basic"|"Plus"|"Pro"|"ProTrial", UserType?:"PrivateUser"|"SharedDevice", UserRegistrationStatus?:"Unregistered"|"Registered"|"Suspended", UserInvitationStatus?:"Pending"|"Accepted"|"Failed", RegisteredOn?:int|string|\DateTimeInterface, InvitedOn?:int|string|\DateTimeInterface, AlexaForBusinessMetadata?:array{IsAlexaForBusinessEnabled?:bool, AlexaForBusinessRoomArn?:string}, PersonalPIN?:string}}>
     */
    public function resetPersonalPINAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PhoneNumberId:string} $args
     * @return \AWS\Result<array{PhoneNumber?:array{PhoneNumberId?:string, E164PhoneNumber?:string, Country?:string, Type?:"Local"|"TollFree", ProductType?:"BusinessCalling"|"VoiceConnector"|"SipMediaApplicationDialIn", Status?:"AcquireInProgress"|"AcquireFailed"|"Unassigned"|"Assigned"|"ReleaseInProgress"|"DeleteInProgress"|"ReleaseFailed"|"DeleteFailed", Capabilities?:array{InboundCall?:bool, OutboundCall?:bool, InboundSMS?:bool, OutboundSMS?:bool, InboundMMS?:bool, OutboundMMS?:bool}, Associations?:array<array{Value?:string, Name?:"AccountId"|"UserId"|"VoiceConnectorId"|"VoiceConnectorGroupId"|"SipRuleId", AssociatedTimestamp?:int|string|\DateTimeInterface}>, CallingName?:string, CallingNameStatus?:"Unassigned"|"UpdateInProgress"|"UpdateSucceeded"|"UpdateFailed", CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, DeletionTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function restorePhoneNumber(array $args): \AWS\Result { }

    /**
     * @param array{PhoneNumberId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumber?:array{PhoneNumberId?:string, E164PhoneNumber?:string, Country?:string, Type?:"Local"|"TollFree", ProductType?:"BusinessCalling"|"VoiceConnector"|"SipMediaApplicationDialIn", Status?:"AcquireInProgress"|"AcquireFailed"|"Unassigned"|"Assigned"|"ReleaseInProgress"|"DeleteInProgress"|"ReleaseFailed"|"DeleteFailed", Capabilities?:array{InboundCall?:bool, OutboundCall?:bool, InboundSMS?:bool, OutboundSMS?:bool, InboundMMS?:bool, OutboundMMS?:bool}, Associations?:array<array{Value?:string, Name?:"AccountId"|"UserId"|"VoiceConnectorId"|"VoiceConnectorGroupId"|"SipRuleId", AssociatedTimestamp?:int|string|\DateTimeInterface}>, CallingName?:string, CallingNameStatus?:"Unassigned"|"UpdateInProgress"|"UpdateSucceeded"|"UpdateFailed", CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, DeletionTimestamp?:int|string|\DateTimeInterface}}>
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
     * @param array{ChannelArn:string, Content:string, Type:"STANDARD"|"CONTROL", Persistence:"PERSISTENT"|"NON_PERSISTENT", Metadata?:string, ClientRequestToken:string, ChimeBearer?:string} $args
     * @return \AWS\Result<array{ChannelArn?:string, MessageId?:string}>
     */
    public function sendChannelMessage(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, Content:string, Type:"STANDARD"|"CONTROL", Persistence:"PERSISTENT"|"NON_PERSISTENT", Metadata?:string, ClientRequestToken:string, ChimeBearer?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelArn?:string, MessageId?:string}>
     */
    public function sendChannelMessageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MeetingId:string, TranscriptionConfiguration:array{EngineTranscribeSettings?:array{LanguageCode?:"en-US"|"en-GB"|"es-US"|"fr-CA"|"fr-FR"|"en-AU"|"it-IT"|"de-DE"|"pt-BR"|"ja-JP"|"ko-KR"|"zh-CN"|"th-TH"|"hi-IN", VocabularyFilterMethod?:"remove"|"mask"|"tag", VocabularyFilterName?:string, VocabularyName?:string, Region?:"us-east-2"|"us-east-1"|"us-west-2"|"ap-northeast-2"|"ap-southeast-2"|"ap-northeast-1"|"ca-central-1"|"eu-central-1"|"eu-west-1"|"eu-west-2"|"sa-east-1"|"auto", EnablePartialResultsStabilization?:bool, PartialResultsStability?:"low"|"medium"|"high", ContentIdentificationType?:"PII", ContentRedactionType?:"PII", PiiEntityTypes?:string, LanguageModelName?:string, IdentifyLanguage?:bool, LanguageOptions?:string, PreferredLanguage?:"en-US"|"en-GB"|"es-US"|"fr-CA"|"fr-FR"|"en-AU"|"it-IT"|"de-DE"|"pt-BR"|"ja-JP"|"ko-KR"|"zh-CN"|"th-TH"|"hi-IN", VocabularyNames?:string, VocabularyFilterNames?:string}, EngineTranscribeMedicalSettings?:array{LanguageCode:"en-US", Specialty:"PRIMARYCARE"|"CARDIOLOGY"|"NEUROLOGY"|"ONCOLOGY"|"RADIOLOGY"|"UROLOGY", Type:"CONVERSATION"|"DICTATION", VocabularyName?:string, Region?:"us-east-1"|"us-east-2"|"us-west-2"|"ap-southeast-2"|"ca-central-1"|"eu-west-1"|"auto", ContentIdentificationType?:"PHI"}}} $args
     * @return \AWS\Result<array{}>
     */
    public function startMeetingTranscription(array $args): \AWS\Result { }

    /**
     * @param array{MeetingId:string, TranscriptionConfiguration:array{EngineTranscribeSettings?:array{LanguageCode?:"en-US"|"en-GB"|"es-US"|"fr-CA"|"fr-FR"|"en-AU"|"it-IT"|"de-DE"|"pt-BR"|"ja-JP"|"ko-KR"|"zh-CN"|"th-TH"|"hi-IN", VocabularyFilterMethod?:"remove"|"mask"|"tag", VocabularyFilterName?:string, VocabularyName?:string, Region?:"us-east-2"|"us-east-1"|"us-west-2"|"ap-northeast-2"|"ap-southeast-2"|"ap-northeast-1"|"ca-central-1"|"eu-central-1"|"eu-west-1"|"eu-west-2"|"sa-east-1"|"auto", EnablePartialResultsStabilization?:bool, PartialResultsStability?:"low"|"medium"|"high", ContentIdentificationType?:"PII", ContentRedactionType?:"PII", PiiEntityTypes?:string, LanguageModelName?:string, IdentifyLanguage?:bool, LanguageOptions?:string, PreferredLanguage?:"en-US"|"en-GB"|"es-US"|"fr-CA"|"fr-FR"|"en-AU"|"it-IT"|"de-DE"|"pt-BR"|"ja-JP"|"ko-KR"|"zh-CN"|"th-TH"|"hi-IN", VocabularyNames?:string, VocabularyFilterNames?:string}, EngineTranscribeMedicalSettings?:array{LanguageCode:"en-US", Specialty:"PRIMARYCARE"|"CARDIOLOGY"|"NEUROLOGY"|"ONCOLOGY"|"RADIOLOGY"|"UROLOGY", Type:"CONVERSATION"|"DICTATION", VocabularyName?:string, Region?:"us-east-1"|"us-east-2"|"us-west-2"|"ap-southeast-2"|"ca-central-1"|"eu-west-1"|"auto", ContentIdentificationType?:"PHI"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function startMeetingTranscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MeetingId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopMeetingTranscription(array $args): \AWS\Result { }

    /**
     * @param array{MeetingId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopMeetingTranscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MeetingId:string, AttendeeId:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<void>
     */
    public function tagAttendee(array $args): \AWS\Result { }

    /**
     * @param array{MeetingId:string, AttendeeId:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagAttendeeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MeetingId:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<void>
     */
    public function tagMeeting(array $args): \AWS\Result { }

    /**
     * @param array{MeetingId:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagMeetingAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{MeetingId:string, AttendeeId:string, TagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagAttendee(array $args): \AWS\Result { }

    /**
     * @param array{MeetingId:string, AttendeeId:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagAttendeeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MeetingId:string, TagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagMeeting(array $args): \AWS\Result { }

    /**
     * @param array{MeetingId:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagMeetingAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{AccountId:string, Name?:string, DefaultLicense?:"Basic"|"Plus"|"Pro"|"ProTrial"} $args
     * @return \AWS\Result<array{Account?:array{AwsAccountId:string, AccountId:string, Name:string, AccountType?:"Team"|"EnterpriseDirectory"|"EnterpriseLWA"|"EnterpriseOIDC", CreatedTimestamp?:int|string|\DateTimeInterface, DefaultLicense?:"Basic"|"Plus"|"Pro"|"ProTrial", SupportedLicenses?:array<"Basic"|"Plus"|"Pro"|"ProTrial">, AccountStatus?:"Suspended"|"Active", SigninDelegateGroups?:array<array{GroupName?:string}>}}>
     */
    public function updateAccount(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Name?:string, DefaultLicense?:"Basic"|"Plus"|"Pro"|"ProTrial"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Account?:array{AwsAccountId:string, AccountId:string, Name:string, AccountType?:"Team"|"EnterpriseDirectory"|"EnterpriseLWA"|"EnterpriseOIDC", CreatedTimestamp?:int|string|\DateTimeInterface, DefaultLicense?:"Basic"|"Plus"|"Pro"|"ProTrial", SupportedLicenses?:array<"Basic"|"Plus"|"Pro"|"ProTrial">, AccountStatus?:"Suspended"|"Active", SigninDelegateGroups?:array<array{GroupName?:string}>}}>
     */
    public function updateAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, AccountSettings:array{DisableRemoteControl?:bool, EnableDialOut?:bool}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateAccountSettings(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, AccountSettings:array{DisableRemoteControl?:bool, EnableDialOut?:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateAccountSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceArn:string, Name:string, Metadata?:string} $args
     * @return \AWS\Result<array{AppInstanceArn?:string}>
     */
    public function updateAppInstance(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceArn:string, Name:string, Metadata?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstanceArn?:string}>
     */
    public function updateAppInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AppInstanceUserArn:string, Name:string, Metadata?:string} $args
     * @return \AWS\Result<array{AppInstanceUserArn?:string}>
     */
    public function updateAppInstanceUser(array $args): \AWS\Result { }

    /**
     * @param array{AppInstanceUserArn:string, Name:string, Metadata?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AppInstanceUserArn?:string}>
     */
    public function updateAppInstanceUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, BotId:string, Disabled?:bool} $args
     * @return \AWS\Result<array{Bot?:array{BotId?:string, UserId?:string, DisplayName?:string, BotType?:"ChatBot", Disabled?:bool, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, BotEmail?:string, SecurityToken?:string}}>
     */
    public function updateBot(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, BotId:string, Disabled?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Bot?:array{BotId?:string, UserId?:string, DisplayName?:string, BotType?:"ChatBot", Disabled?:bool, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, BotEmail?:string, SecurityToken?:string}}>
     */
    public function updateBotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, Name:string, Mode:"UNRESTRICTED"|"RESTRICTED", Metadata?:string, ChimeBearer?:string} $args
     * @return \AWS\Result<array{ChannelArn?:string}>
     */
    public function updateChannel(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, Name:string, Mode:"UNRESTRICTED"|"RESTRICTED", Metadata?:string, ChimeBearer?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelArn?:string}>
     */
    public function updateChannelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, MessageId:string, Content?:string, Metadata?:string, ChimeBearer?:string} $args
     * @return \AWS\Result<array{ChannelArn?:string, MessageId?:string}>
     */
    public function updateChannelMessage(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, MessageId:string, Content?:string, Metadata?:string, ChimeBearer?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelArn?:string, MessageId?:string}>
     */
    public function updateChannelMessageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ChannelArn:string, ChimeBearer?:string} $args
     * @return \AWS\Result<array{ChannelArn?:string}>
     */
    public function updateChannelReadMarker(array $args): \AWS\Result { }

    /**
     * @param array{ChannelArn:string, ChimeBearer?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ChannelArn?:string}>
     */
    public function updateChannelReadMarkerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{BusinessCalling?:array{CdrBucket?:string}, VoiceConnector?:array{CdrBucket?:string}} $args
     * @return \AWS\Result<void>
     */
    public function updateGlobalSettings(array $args = []): \AWS\Result { }

    /**
     * @param array{BusinessCalling?:array{CdrBucket?:string}, VoiceConnector?:array{CdrBucket?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateGlobalSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PhoneNumberId:string, ProductType?:"BusinessCalling"|"VoiceConnector"|"SipMediaApplicationDialIn", CallingName?:string} $args
     * @return \AWS\Result<array{PhoneNumber?:array{PhoneNumberId?:string, E164PhoneNumber?:string, Country?:string, Type?:"Local"|"TollFree", ProductType?:"BusinessCalling"|"VoiceConnector"|"SipMediaApplicationDialIn", Status?:"AcquireInProgress"|"AcquireFailed"|"Unassigned"|"Assigned"|"ReleaseInProgress"|"DeleteInProgress"|"ReleaseFailed"|"DeleteFailed", Capabilities?:array{InboundCall?:bool, OutboundCall?:bool, InboundSMS?:bool, OutboundSMS?:bool, InboundMMS?:bool, OutboundMMS?:bool}, Associations?:array<array{Value?:string, Name?:"AccountId"|"UserId"|"VoiceConnectorId"|"VoiceConnectorGroupId"|"SipRuleId", AssociatedTimestamp?:int|string|\DateTimeInterface}>, CallingName?:string, CallingNameStatus?:"Unassigned"|"UpdateInProgress"|"UpdateSucceeded"|"UpdateFailed", CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, DeletionTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function updatePhoneNumber(array $args): \AWS\Result { }

    /**
     * @param array{PhoneNumberId:string, ProductType?:"BusinessCalling"|"VoiceConnector"|"SipMediaApplicationDialIn", CallingName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumber?:array{PhoneNumberId?:string, E164PhoneNumber?:string, Country?:string, Type?:"Local"|"TollFree", ProductType?:"BusinessCalling"|"VoiceConnector"|"SipMediaApplicationDialIn", Status?:"AcquireInProgress"|"AcquireFailed"|"Unassigned"|"Assigned"|"ReleaseInProgress"|"DeleteInProgress"|"ReleaseFailed"|"DeleteFailed", Capabilities?:array{InboundCall?:bool, OutboundCall?:bool, InboundSMS?:bool, OutboundSMS?:bool, InboundMMS?:bool, OutboundMMS?:bool}, Associations?:array<array{Value?:string, Name?:"AccountId"|"UserId"|"VoiceConnectorId"|"VoiceConnectorGroupId"|"SipRuleId", AssociatedTimestamp?:int|string|\DateTimeInterface}>, CallingName?:string, CallingNameStatus?:"Unassigned"|"UpdateInProgress"|"UpdateSucceeded"|"UpdateFailed", CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, DeletionTimestamp?:int|string|\DateTimeInterface}}>
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
     * @param array{AccountId:string, RoomId:string, Name?:string} $args
     * @return \AWS\Result<array{Room?:array{RoomId?:string, Name?:string, AccountId?:string, CreatedBy?:string, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function updateRoom(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, RoomId:string, Name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Room?:array{RoomId?:string, Name?:string, AccountId?:string, CreatedBy?:string, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function updateRoomAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, RoomId:string, MemberId:string, Role?:"Administrator"|"Member"} $args
     * @return \AWS\Result<array{RoomMembership?:array{RoomId?:string, Member?:array{MemberId?:string, MemberType?:"User"|"Bot"|"Webhook", Email?:string, FullName?:string, AccountId?:string}, Role?:"Administrator"|"Member", InvitedBy?:string, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function updateRoomMembership(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, RoomId:string, MemberId:string, Role?:"Administrator"|"Member"} $args
     * @return \GuzzleHttp\Promise\Promise<array{RoomMembership?:array{RoomId?:string, Member?:array{MemberId?:string, MemberType?:"User"|"Bot"|"Webhook", Email?:string, FullName?:string, AccountId?:string}, Role?:"Administrator"|"Member", InvitedBy?:string, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function updateRoomMembershipAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SipMediaApplicationId:string, Name?:string, Endpoints?:array<array{LambdaArn?:string}>} $args
     * @return \AWS\Result<array{SipMediaApplication?:array{SipMediaApplicationId?:string, AwsRegion?:string, Name?:string, Endpoints?:array<array{LambdaArn?:string}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
     */
    public function updateSipMediaApplication(array $args): \AWS\Result { }

    /**
     * @param array{SipMediaApplicationId:string, Name?:string, Endpoints?:array<array{LambdaArn?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{SipMediaApplication?:array{SipMediaApplicationId?:string, AwsRegion?:string, Name?:string, Endpoints?:array<array{LambdaArn?:string}>, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface}}>
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
     * @param array{AccountId:string, UserId:string, LicenseType?:"Basic"|"Plus"|"Pro"|"ProTrial", UserType?:"PrivateUser"|"SharedDevice", AlexaForBusinessMetadata?:array{IsAlexaForBusinessEnabled?:bool, AlexaForBusinessRoomArn?:string}} $args
     * @return \AWS\Result<array{User?:array{UserId:string, AccountId?:string, PrimaryEmail?:string, PrimaryProvisionedNumber?:string, DisplayName?:string, LicenseType?:"Basic"|"Plus"|"Pro"|"ProTrial", UserType?:"PrivateUser"|"SharedDevice", UserRegistrationStatus?:"Unregistered"|"Registered"|"Suspended", UserInvitationStatus?:"Pending"|"Accepted"|"Failed", RegisteredOn?:int|string|\DateTimeInterface, InvitedOn?:int|string|\DateTimeInterface, AlexaForBusinessMetadata?:array{IsAlexaForBusinessEnabled?:bool, AlexaForBusinessRoomArn?:string}, PersonalPIN?:string}}>
     */
    public function updateUser(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, UserId:string, LicenseType?:"Basic"|"Plus"|"Pro"|"ProTrial", UserType?:"PrivateUser"|"SharedDevice", AlexaForBusinessMetadata?:array{IsAlexaForBusinessEnabled?:bool, AlexaForBusinessRoomArn?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{User?:array{UserId:string, AccountId?:string, PrimaryEmail?:string, PrimaryProvisionedNumber?:string, DisplayName?:string, LicenseType?:"Basic"|"Plus"|"Pro"|"ProTrial", UserType?:"PrivateUser"|"SharedDevice", UserRegistrationStatus?:"Unregistered"|"Registered"|"Suspended", UserInvitationStatus?:"Pending"|"Accepted"|"Failed", RegisteredOn?:int|string|\DateTimeInterface, InvitedOn?:int|string|\DateTimeInterface, AlexaForBusinessMetadata?:array{IsAlexaForBusinessEnabled?:bool, AlexaForBusinessRoomArn?:string}, PersonalPIN?:string}}>
     */
    public function updateUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, UserId:string, UserSettings:array{Telephony:array{InboundCalling:bool, OutboundCalling:bool, SMS:bool}}} $args
     * @return \AWS\Result<void>
     */
    public function updateUserSettings(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, UserId:string, UserSettings:array{Telephony:array{InboundCalling:bool, OutboundCalling:bool, SMS:bool}}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateUserSettingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{VoiceConnectorId:string, Name:string, RequireEncryption:bool} $args
     * @return \AWS\Result<array{VoiceConnector?:array{VoiceConnectorId?:string, AwsRegion?:"us-east-1"|"us-west-2", Name?:string, OutboundHostName?:string, RequireEncryption?:bool, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, VoiceConnectorArn?:string}}>
     */
    public function updateVoiceConnector(array $args): \AWS\Result { }

    /**
     * @param array{VoiceConnectorId:string, Name:string, RequireEncryption:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{VoiceConnector?:array{VoiceConnectorId?:string, AwsRegion?:"us-east-1"|"us-west-2", Name?:string, OutboundHostName?:string, RequireEncryption?:bool, CreatedTimestamp?:int|string|\DateTimeInterface, UpdatedTimestamp?:int|string|\DateTimeInterface, VoiceConnectorArn?:string}}>
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
