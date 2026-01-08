<?php
namespace AWS\ChimeSDKMeetings;

class ChimeSDKMeetingsClient
{
    /**
     * @param array{MeetingId:string, Attendees:array<array{ExternalUserId:string, Capabilities?:array{Audio:"SendReceive"|"Send"|"Receive"|"None", Video:"SendReceive"|"Send"|"Receive"|"None", Content:"SendReceive"|"Send"|"Receive"|"None"}}>} $args
     * @return \AWS\Result<array{Attendees?:array<array{ExternalUserId?:string, AttendeeId?:string, JoinToken?:string, Capabilities?:array{Audio:"SendReceive"|"Send"|"Receive"|"None", Video:"SendReceive"|"Send"|"Receive"|"None", Content:"SendReceive"|"Send"|"Receive"|"None"}}>, Errors?:array<array{ExternalUserId?:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function batchCreateAttendee(array $args): \AWS\Result { }

    /**
     * @param array{MeetingId:string, Attendees:array<array{ExternalUserId:string, Capabilities?:array{Audio:"SendReceive"|"Send"|"Receive"|"None", Video:"SendReceive"|"Send"|"Receive"|"None", Content:"SendReceive"|"Send"|"Receive"|"None"}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attendees?:array<array{ExternalUserId?:string, AttendeeId?:string, JoinToken?:string, Capabilities?:array{Audio:"SendReceive"|"Send"|"Receive"|"None", Video:"SendReceive"|"Send"|"Receive"|"None", Content:"SendReceive"|"Send"|"Receive"|"None"}}>, Errors?:array<array{ExternalUserId?:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function batchCreateAttendeeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MeetingId:string, ExcludedAttendeeIds:array<array{AttendeeId:string}>, Capabilities:array{Audio:"SendReceive"|"Send"|"Receive"|"None", Video:"SendReceive"|"Send"|"Receive"|"None", Content:"SendReceive"|"Send"|"Receive"|"None"}} $args
     * @return \AWS\Result<void>
     */
    public function batchUpdateAttendeeCapabilitiesExcept(array $args): \AWS\Result { }

    /**
     * @param array{MeetingId:string, ExcludedAttendeeIds:array<array{AttendeeId:string}>, Capabilities:array{Audio:"SendReceive"|"Send"|"Receive"|"None", Video:"SendReceive"|"Send"|"Receive"|"None", Content:"SendReceive"|"Send"|"Receive"|"None"}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function batchUpdateAttendeeCapabilitiesExceptAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MeetingId:string, ExternalUserId:string, Capabilities?:array{Audio:"SendReceive"|"Send"|"Receive"|"None", Video:"SendReceive"|"Send"|"Receive"|"None", Content:"SendReceive"|"Send"|"Receive"|"None"}} $args
     * @return \AWS\Result<array{Attendee?:array{ExternalUserId?:string, AttendeeId?:string, JoinToken?:string, Capabilities?:array{Audio:"SendReceive"|"Send"|"Receive"|"None", Video:"SendReceive"|"Send"|"Receive"|"None", Content:"SendReceive"|"Send"|"Receive"|"None"}}}>
     */
    public function createAttendee(array $args): \AWS\Result { }

    /**
     * @param array{MeetingId:string, ExternalUserId:string, Capabilities?:array{Audio:"SendReceive"|"Send"|"Receive"|"None", Video:"SendReceive"|"Send"|"Receive"|"None", Content:"SendReceive"|"Send"|"Receive"|"None"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attendee?:array{ExternalUserId?:string, AttendeeId?:string, JoinToken?:string, Capabilities?:array{Audio:"SendReceive"|"Send"|"Receive"|"None", Video:"SendReceive"|"Send"|"Receive"|"None", Content:"SendReceive"|"Send"|"Receive"|"None"}}}>
     */
    public function createAttendeeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientRequestToken:string, MediaRegion:string, MeetingHostId?:string, ExternalMeetingId:string, NotificationsConfiguration?:array{LambdaFunctionArn?:string, SnsTopicArn?:string, SqsQueueArn?:string}, MeetingFeatures?:array{Audio?:array{EchoReduction?:"AVAILABLE"|"UNAVAILABLE"}, Video?:array{MaxResolution?:"None"|"HD"|"FHD"}, Content?:array{MaxResolution?:"None"|"FHD"|"UHD"}, Attendee?:array{MaxCount?:int}}, PrimaryMeetingId?:string, TenantIds?:array<string>, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{Meeting?:array{MeetingId?:string, MeetingHostId?:string, ExternalMeetingId?:string, MediaRegion?:string, MediaPlacement?:array{AudioHostUrl?:string, AudioFallbackUrl?:string, SignalingUrl?:string, TurnControlUrl?:string, ScreenDataUrl?:string, ScreenViewingUrl?:string, ScreenSharingUrl?:string, EventIngestionUrl?:string}, MeetingFeatures?:array{Audio?:array{EchoReduction?:"AVAILABLE"|"UNAVAILABLE"}, Video?:array{MaxResolution?:"None"|"HD"|"FHD"}, Content?:array{MaxResolution?:"None"|"FHD"|"UHD"}, Attendee?:array{MaxCount?:int}}, PrimaryMeetingId?:string, TenantIds?:array<string>, MeetingArn?:string}}>
     */
    public function createMeeting(array $args): \AWS\Result { }

    /**
     * @param array{ClientRequestToken:string, MediaRegion:string, MeetingHostId?:string, ExternalMeetingId:string, NotificationsConfiguration?:array{LambdaFunctionArn?:string, SnsTopicArn?:string, SqsQueueArn?:string}, MeetingFeatures?:array{Audio?:array{EchoReduction?:"AVAILABLE"|"UNAVAILABLE"}, Video?:array{MaxResolution?:"None"|"HD"|"FHD"}, Content?:array{MaxResolution?:"None"|"FHD"|"UHD"}, Attendee?:array{MaxCount?:int}}, PrimaryMeetingId?:string, TenantIds?:array<string>, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Meeting?:array{MeetingId?:string, MeetingHostId?:string, ExternalMeetingId?:string, MediaRegion?:string, MediaPlacement?:array{AudioHostUrl?:string, AudioFallbackUrl?:string, SignalingUrl?:string, TurnControlUrl?:string, ScreenDataUrl?:string, ScreenViewingUrl?:string, ScreenSharingUrl?:string, EventIngestionUrl?:string}, MeetingFeatures?:array{Audio?:array{EchoReduction?:"AVAILABLE"|"UNAVAILABLE"}, Video?:array{MaxResolution?:"None"|"HD"|"FHD"}, Content?:array{MaxResolution?:"None"|"FHD"|"UHD"}, Attendee?:array{MaxCount?:int}}, PrimaryMeetingId?:string, TenantIds?:array<string>, MeetingArn?:string}}>
     */
    public function createMeetingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientRequestToken:string, MediaRegion:string, MeetingHostId?:string, ExternalMeetingId:string, MeetingFeatures?:array{Audio?:array{EchoReduction?:"AVAILABLE"|"UNAVAILABLE"}, Video?:array{MaxResolution?:"None"|"HD"|"FHD"}, Content?:array{MaxResolution?:"None"|"FHD"|"UHD"}, Attendee?:array{MaxCount?:int}}, NotificationsConfiguration?:array{LambdaFunctionArn?:string, SnsTopicArn?:string, SqsQueueArn?:string}, Attendees:array<array{ExternalUserId:string, Capabilities?:array{Audio:"SendReceive"|"Send"|"Receive"|"None", Video:"SendReceive"|"Send"|"Receive"|"None", Content:"SendReceive"|"Send"|"Receive"|"None"}}>, PrimaryMeetingId?:string, TenantIds?:array<string>, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{Meeting?:array{MeetingId?:string, MeetingHostId?:string, ExternalMeetingId?:string, MediaRegion?:string, MediaPlacement?:array{AudioHostUrl?:string, AudioFallbackUrl?:string, SignalingUrl?:string, TurnControlUrl?:string, ScreenDataUrl?:string, ScreenViewingUrl?:string, ScreenSharingUrl?:string, EventIngestionUrl?:string}, MeetingFeatures?:array{Audio?:array{EchoReduction?:"AVAILABLE"|"UNAVAILABLE"}, Video?:array{MaxResolution?:"None"|"HD"|"FHD"}, Content?:array{MaxResolution?:"None"|"FHD"|"UHD"}, Attendee?:array{MaxCount?:int}}, PrimaryMeetingId?:string, TenantIds?:array<string>, MeetingArn?:string}, Attendees?:array<array{ExternalUserId?:string, AttendeeId?:string, JoinToken?:string, Capabilities?:array{Audio:"SendReceive"|"Send"|"Receive"|"None", Video:"SendReceive"|"Send"|"Receive"|"None", Content:"SendReceive"|"Send"|"Receive"|"None"}}>, Errors?:array<array{ExternalUserId?:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function createMeetingWithAttendees(array $args): \AWS\Result { }

    /**
     * @param array{ClientRequestToken:string, MediaRegion:string, MeetingHostId?:string, ExternalMeetingId:string, MeetingFeatures?:array{Audio?:array{EchoReduction?:"AVAILABLE"|"UNAVAILABLE"}, Video?:array{MaxResolution?:"None"|"HD"|"FHD"}, Content?:array{MaxResolution?:"None"|"FHD"|"UHD"}, Attendee?:array{MaxCount?:int}}, NotificationsConfiguration?:array{LambdaFunctionArn?:string, SnsTopicArn?:string, SqsQueueArn?:string}, Attendees:array<array{ExternalUserId:string, Capabilities?:array{Audio:"SendReceive"|"Send"|"Receive"|"None", Video:"SendReceive"|"Send"|"Receive"|"None", Content:"SendReceive"|"Send"|"Receive"|"None"}}>, PrimaryMeetingId?:string, TenantIds?:array<string>, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Meeting?:array{MeetingId?:string, MeetingHostId?:string, ExternalMeetingId?:string, MediaRegion?:string, MediaPlacement?:array{AudioHostUrl?:string, AudioFallbackUrl?:string, SignalingUrl?:string, TurnControlUrl?:string, ScreenDataUrl?:string, ScreenViewingUrl?:string, ScreenSharingUrl?:string, EventIngestionUrl?:string}, MeetingFeatures?:array{Audio?:array{EchoReduction?:"AVAILABLE"|"UNAVAILABLE"}, Video?:array{MaxResolution?:"None"|"HD"|"FHD"}, Content?:array{MaxResolution?:"None"|"FHD"|"UHD"}, Attendee?:array{MaxCount?:int}}, PrimaryMeetingId?:string, TenantIds?:array<string>, MeetingArn?:string}, Attendees?:array<array{ExternalUserId?:string, AttendeeId?:string, JoinToken?:string, Capabilities?:array{Audio:"SendReceive"|"Send"|"Receive"|"None", Video:"SendReceive"|"Send"|"Receive"|"None", Content:"SendReceive"|"Send"|"Receive"|"None"}}>, Errors?:array<array{ExternalUserId?:string, ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function createMeetingWithAttendeesAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{MeetingId:string, AttendeeId:string} $args
     * @return \AWS\Result<array{Attendee?:array{ExternalUserId?:string, AttendeeId?:string, JoinToken?:string, Capabilities?:array{Audio:"SendReceive"|"Send"|"Receive"|"None", Video:"SendReceive"|"Send"|"Receive"|"None", Content:"SendReceive"|"Send"|"Receive"|"None"}}}>
     */
    public function getAttendee(array $args): \AWS\Result { }

    /**
     * @param array{MeetingId:string, AttendeeId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attendee?:array{ExternalUserId?:string, AttendeeId?:string, JoinToken?:string, Capabilities?:array{Audio:"SendReceive"|"Send"|"Receive"|"None", Video:"SendReceive"|"Send"|"Receive"|"None", Content:"SendReceive"|"Send"|"Receive"|"None"}}}>
     */
    public function getAttendeeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MeetingId:string} $args
     * @return \AWS\Result<array{Meeting?:array{MeetingId?:string, MeetingHostId?:string, ExternalMeetingId?:string, MediaRegion?:string, MediaPlacement?:array{AudioHostUrl?:string, AudioFallbackUrl?:string, SignalingUrl?:string, TurnControlUrl?:string, ScreenDataUrl?:string, ScreenViewingUrl?:string, ScreenSharingUrl?:string, EventIngestionUrl?:string}, MeetingFeatures?:array{Audio?:array{EchoReduction?:"AVAILABLE"|"UNAVAILABLE"}, Video?:array{MaxResolution?:"None"|"HD"|"FHD"}, Content?:array{MaxResolution?:"None"|"FHD"|"UHD"}, Attendee?:array{MaxCount?:int}}, PrimaryMeetingId?:string, TenantIds?:array<string>, MeetingArn?:string}}>
     */
    public function getMeeting(array $args): \AWS\Result { }

    /**
     * @param array{MeetingId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Meeting?:array{MeetingId?:string, MeetingHostId?:string, ExternalMeetingId?:string, MediaRegion?:string, MediaPlacement?:array{AudioHostUrl?:string, AudioFallbackUrl?:string, SignalingUrl?:string, TurnControlUrl?:string, ScreenDataUrl?:string, ScreenViewingUrl?:string, ScreenSharingUrl?:string, EventIngestionUrl?:string}, MeetingFeatures?:array{Audio?:array{EchoReduction?:"AVAILABLE"|"UNAVAILABLE"}, Video?:array{MaxResolution?:"None"|"HD"|"FHD"}, Content?:array{MaxResolution?:"None"|"FHD"|"UHD"}, Attendee?:array{MaxCount?:int}}, PrimaryMeetingId?:string, TenantIds?:array<string>, MeetingArn?:string}}>
     */
    public function getMeetingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MeetingId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Attendees?:array<array{ExternalUserId?:string, AttendeeId?:string, JoinToken?:string, Capabilities?:array{Audio:"SendReceive"|"Send"|"Receive"|"None", Video:"SendReceive"|"Send"|"Receive"|"None", Content:"SendReceive"|"Send"|"Receive"|"None"}}>, NextToken?:string}>
     */
    public function listAttendees(array $args): \AWS\Result { }

    /**
     * @param array{MeetingId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attendees?:array<array{ExternalUserId?:string, AttendeeId?:string, JoinToken?:string, Capabilities?:array{Audio:"SendReceive"|"Send"|"Receive"|"None", Video:"SendReceive"|"Send"|"Receive"|"None", Content:"SendReceive"|"Send"|"Receive"|"None"}}>, NextToken?:string}>
     */
    public function listAttendeesAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{MeetingId:string, TranscriptionConfiguration:array{EngineTranscribeSettings?:array{LanguageCode?:"en-US"|"en-GB"|"es-US"|"fr-CA"|"fr-FR"|"en-AU"|"it-IT"|"de-DE"|"pt-BR"|"ja-JP"|"ko-KR"|"zh-CN"|"th-TH"|"hi-IN", VocabularyFilterMethod?:"remove"|"mask"|"tag", VocabularyFilterName?:string, VocabularyName?:string, Region?:"us-east-2"|"us-east-1"|"us-west-2"|"ap-northeast-2"|"ap-southeast-2"|"ap-northeast-1"|"ca-central-1"|"eu-central-1"|"eu-west-1"|"eu-west-2"|"sa-east-1"|"auto"|"us-gov-west-1", EnablePartialResultsStabilization?:bool, PartialResultsStability?:"low"|"medium"|"high", ContentIdentificationType?:"PII", ContentRedactionType?:"PII", PiiEntityTypes?:string, LanguageModelName?:string, IdentifyLanguage?:bool, LanguageOptions?:string, PreferredLanguage?:"en-US"|"en-GB"|"es-US"|"fr-CA"|"fr-FR"|"en-AU"|"it-IT"|"de-DE"|"pt-BR"|"ja-JP"|"ko-KR"|"zh-CN"|"th-TH"|"hi-IN", VocabularyNames?:string, VocabularyFilterNames?:string}, EngineTranscribeMedicalSettings?:array{LanguageCode:"en-US", Specialty:"PRIMARYCARE"|"CARDIOLOGY"|"NEUROLOGY"|"ONCOLOGY"|"RADIOLOGY"|"UROLOGY", Type:"CONVERSATION"|"DICTATION", VocabularyName?:string, Region?:"us-east-1"|"us-east-2"|"us-west-2"|"ap-southeast-2"|"ca-central-1"|"eu-west-1"|"auto", ContentIdentificationType?:"PHI"}}} $args
     * @return \AWS\Result<void>
     */
    public function startMeetingTranscription(array $args): \AWS\Result { }

    /**
     * @param array{MeetingId:string, TranscriptionConfiguration:array{EngineTranscribeSettings?:array{LanguageCode?:"en-US"|"en-GB"|"es-US"|"fr-CA"|"fr-FR"|"en-AU"|"it-IT"|"de-DE"|"pt-BR"|"ja-JP"|"ko-KR"|"zh-CN"|"th-TH"|"hi-IN", VocabularyFilterMethod?:"remove"|"mask"|"tag", VocabularyFilterName?:string, VocabularyName?:string, Region?:"us-east-2"|"us-east-1"|"us-west-2"|"ap-northeast-2"|"ap-southeast-2"|"ap-northeast-1"|"ca-central-1"|"eu-central-1"|"eu-west-1"|"eu-west-2"|"sa-east-1"|"auto"|"us-gov-west-1", EnablePartialResultsStabilization?:bool, PartialResultsStability?:"low"|"medium"|"high", ContentIdentificationType?:"PII", ContentRedactionType?:"PII", PiiEntityTypes?:string, LanguageModelName?:string, IdentifyLanguage?:bool, LanguageOptions?:string, PreferredLanguage?:"en-US"|"en-GB"|"es-US"|"fr-CA"|"fr-FR"|"en-AU"|"it-IT"|"de-DE"|"pt-BR"|"ja-JP"|"ko-KR"|"zh-CN"|"th-TH"|"hi-IN", VocabularyNames?:string, VocabularyFilterNames?:string}, EngineTranscribeMedicalSettings?:array{LanguageCode:"en-US", Specialty:"PRIMARYCARE"|"CARDIOLOGY"|"NEUROLOGY"|"ONCOLOGY"|"RADIOLOGY"|"UROLOGY", Type:"CONVERSATION"|"DICTATION", VocabularyName?:string, Region?:"us-east-1"|"us-east-2"|"us-west-2"|"ap-southeast-2"|"ca-central-1"|"eu-west-1"|"auto", ContentIdentificationType?:"PHI"}}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function startMeetingTranscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MeetingId:string} $args
     * @return \AWS\Result<void>
     */
    public function stopMeetingTranscription(array $args): \AWS\Result { }

    /**
     * @param array{MeetingId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function stopMeetingTranscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceARN:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceARN:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MeetingId:string, AttendeeId:string, Capabilities:array{Audio:"SendReceive"|"Send"|"Receive"|"None", Video:"SendReceive"|"Send"|"Receive"|"None", Content:"SendReceive"|"Send"|"Receive"|"None"}} $args
     * @return \AWS\Result<array{Attendee?:array{ExternalUserId?:string, AttendeeId?:string, JoinToken?:string, Capabilities?:array{Audio:"SendReceive"|"Send"|"Receive"|"None", Video:"SendReceive"|"Send"|"Receive"|"None", Content:"SendReceive"|"Send"|"Receive"|"None"}}}>
     */
    public function updateAttendeeCapabilities(array $args): \AWS\Result { }

    /**
     * @param array{MeetingId:string, AttendeeId:string, Capabilities:array{Audio:"SendReceive"|"Send"|"Receive"|"None", Video:"SendReceive"|"Send"|"Receive"|"None", Content:"SendReceive"|"Send"|"Receive"|"None"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attendee?:array{ExternalUserId?:string, AttendeeId?:string, JoinToken?:string, Capabilities?:array{Audio:"SendReceive"|"Send"|"Receive"|"None", Video:"SendReceive"|"Send"|"Receive"|"None", Content:"SendReceive"|"Send"|"Receive"|"None"}}}>
     */
    public function updateAttendeeCapabilitiesAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
