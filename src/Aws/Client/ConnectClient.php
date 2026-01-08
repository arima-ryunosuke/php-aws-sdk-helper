<?php
namespace AWS\Connect;

class ConnectClient
{
    /**
     * @param array{InstanceId:string, EvaluationFormId:string, EvaluationFormVersion:int} $args
     * @return \AWS\Result<array{EvaluationFormId:string, EvaluationFormArn:string, EvaluationFormVersion:int}>
     */
    public function activateEvaluationForm(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, EvaluationFormId:string, EvaluationFormVersion:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{EvaluationFormId:string, EvaluationFormArn:string, EvaluationFormVersion:int}>
     */
    public function activateEvaluationFormAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, DataSetId:string, TargetAccountId?:string} $args
     * @return \AWS\Result<array{DataSetId?:string, TargetAccountId?:string, ResourceShareId?:string, ResourceShareArn?:string}>
     */
    public function associateAnalyticsDataSet(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, DataSetId:string, TargetAccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DataSetId?:string, TargetAccountId?:string, ResourceShareId?:string, ResourceShareArn?:string}>
     */
    public function associateAnalyticsDataSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, Origin:string} $args
     * @return \AWS\Result<void>
     */
    public function associateApprovedOrigin(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, Origin:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function associateApprovedOriginAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, LexBot?:array{Name:string, LexRegion:string}, LexV2Bot?:array{AliasArn?:string}} $args
     * @return \AWS\Result<void>
     */
    public function associateBot(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, LexBot?:array{Name:string, LexRegion:string}, LexV2Bot?:array{AliasArn?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function associateBotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, LanguageCode:"ar-AE"|"de-CH"|"de-DE"|"en-AB"|"en-AU"|"en-GB"|"en-IE"|"en-IN"|"en-US"|"en-WL"|"es-ES"|"es-US"|"fr-CA"|"fr-FR"|"hi-IN"|"it-IT"|"ja-JP"|"ko-KR"|"pt-BR"|"pt-PT"|"zh-CN"|"en-NZ"|"en-ZA"|"ca-ES"|"da-DK"|"fi-FI"|"id-ID"|"ms-MY"|"nl-NL"|"no-NO"|"pl-PL"|"sv-SE"|"tl-PH", VocabularyId?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function associateDefaultVocabulary(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, LanguageCode:"ar-AE"|"de-CH"|"de-DE"|"en-AB"|"en-AU"|"en-GB"|"en-IE"|"en-IN"|"en-US"|"en-WL"|"es-ES"|"es-US"|"fr-CA"|"fr-FR"|"hi-IN"|"it-IT"|"ja-JP"|"ko-KR"|"pt-BR"|"pt-PT"|"zh-CN"|"en-NZ"|"en-ZA"|"ca-ES"|"da-DK"|"fi-FI"|"id-ID"|"ms-MY"|"nl-NL"|"no-NO"|"pl-PL"|"sv-SE"|"tl-PH", VocabularyId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateDefaultVocabularyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ResourceId:string, FlowId:string, ResourceType:"SMS_PHONE_NUMBER"|"INBOUND_EMAIL"|"OUTBOUND_EMAIL"|"ANALYTICS_CONNECTOR"|"WHATSAPP_MESSAGING_PHONE_NUMBER"} $args
     * @return \AWS\Result<array{}>
     */
    public function associateFlow(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ResourceId:string, FlowId:string, ResourceType:"SMS_PHONE_NUMBER"|"INBOUND_EMAIL"|"OUTBOUND_EMAIL"|"ANALYTICS_CONNECTOR"|"WHATSAPP_MESSAGING_PHONE_NUMBER"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateFlowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ResourceType:"CHAT_TRANSCRIPTS"|"CALL_RECORDINGS"|"SCHEDULED_REPORTS"|"MEDIA_STREAMS"|"CONTACT_TRACE_RECORDS"|"AGENT_EVENTS"|"REAL_TIME_CONTACT_ANALYSIS_SEGMENTS"|"ATTACHMENTS"|"CONTACT_EVALUATIONS"|"SCREEN_RECORDINGS"|"REAL_TIME_CONTACT_ANALYSIS_CHAT_SEGMENTS"|"REAL_TIME_CONTACT_ANALYSIS_VOICE_SEGMENTS"|"EMAIL_MESSAGES", StorageConfig:array{AssociationId?:string, StorageType:"S3"|"KINESIS_VIDEO_STREAM"|"KINESIS_STREAM"|"KINESIS_FIREHOSE", S3Config?:array{BucketName:string, BucketPrefix:string, EncryptionConfig?:array{EncryptionType:"KMS", KeyId:string}}, KinesisVideoStreamConfig?:array{Prefix:string, RetentionPeriodHours:int, EncryptionConfig:array{EncryptionType:"KMS", KeyId:string}}, KinesisStreamConfig?:array{StreamArn:string}, KinesisFirehoseConfig?:array{FirehoseArn:string}}} $args
     * @return \AWS\Result<array{AssociationId?:string}>
     */
    public function associateInstanceStorageConfig(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ResourceType:"CHAT_TRANSCRIPTS"|"CALL_RECORDINGS"|"SCHEDULED_REPORTS"|"MEDIA_STREAMS"|"CONTACT_TRACE_RECORDS"|"AGENT_EVENTS"|"REAL_TIME_CONTACT_ANALYSIS_SEGMENTS"|"ATTACHMENTS"|"CONTACT_EVALUATIONS"|"SCREEN_RECORDINGS"|"REAL_TIME_CONTACT_ANALYSIS_CHAT_SEGMENTS"|"REAL_TIME_CONTACT_ANALYSIS_VOICE_SEGMENTS"|"EMAIL_MESSAGES", StorageConfig:array{AssociationId?:string, StorageType:"S3"|"KINESIS_VIDEO_STREAM"|"KINESIS_STREAM"|"KINESIS_FIREHOSE", S3Config?:array{BucketName:string, BucketPrefix:string, EncryptionConfig?:array{EncryptionType:"KMS", KeyId:string}}, KinesisVideoStreamConfig?:array{Prefix:string, RetentionPeriodHours:int, EncryptionConfig:array{EncryptionType:"KMS", KeyId:string}}, KinesisStreamConfig?:array{StreamArn:string}, KinesisFirehoseConfig?:array{FirehoseArn:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{AssociationId?:string}>
     */
    public function associateInstanceStorageConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, FunctionArn:string} $args
     * @return \AWS\Result<void>
     */
    public function associateLambdaFunction(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, FunctionArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function associateLambdaFunctionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, LexBot:array{Name:string, LexRegion:string}} $args
     * @return \AWS\Result<void>
     */
    public function associateLexBot(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, LexBot:array{Name:string, LexRegion:string}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function associateLexBotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PhoneNumberId:string, InstanceId:string, ContactFlowId:string} $args
     * @return \AWS\Result<void>
     */
    public function associatePhoneNumberContactFlow(array $args): \AWS\Result { }

    /**
     * @param array{PhoneNumberId:string, InstanceId:string, ContactFlowId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function associatePhoneNumberContactFlowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, QueueId:string, QuickConnectIds:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function associateQueueQuickConnects(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, QueueId:string, QuickConnectIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function associateQueueQuickConnectsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, RoutingProfileId:string, QueueConfigs:array<array{QueueReference:array{QueueId:string, Channel:"VOICE"|"CHAT"|"TASK"|"EMAIL"}, Priority:int, Delay:int}>} $args
     * @return \AWS\Result<void>
     */
    public function associateRoutingProfileQueues(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, RoutingProfileId:string, QueueConfigs:array<array{QueueReference:array{QueueId:string, Channel:"VOICE"|"CHAT"|"TASK"|"EMAIL"}, Priority:int, Delay:int}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function associateRoutingProfileQueuesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, Key:string} $args
     * @return \AWS\Result<array{AssociationId?:string}>
     */
    public function associateSecurityKey(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, Key:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AssociationId?:string}>
     */
    public function associateSecurityKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrafficDistributionGroupId:string, UserId:string, InstanceId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function associateTrafficDistributionGroupUser(array $args): \AWS\Result { }

    /**
     * @param array{TrafficDistributionGroupId:string, UserId:string, InstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateTrafficDistributionGroupUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, UserId:string, UserProficiencies:array<array{AttributeName:string, AttributeValue:string, Level:float}>} $args
     * @return \AWS\Result<void>
     */
    public function associateUserProficiencies(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, UserId:string, UserProficiencies:array<array{AttributeName:string, AttributeValue:string, Level:float}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function associateUserProficienciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, DataSetIds:array<string>, TargetAccountId?:string} $args
     * @return \AWS\Result<array{Created?:array<array{DataSetId?:string, TargetAccountId?:string, ResourceShareId?:string, ResourceShareArn?:string}>, Errors?:array<array{ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function batchAssociateAnalyticsDataSet(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, DataSetIds:array<string>, TargetAccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Created?:array<array{DataSetId?:string, TargetAccountId?:string, ResourceShareId?:string, ResourceShareArn?:string}>, Errors?:array<array{ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function batchAssociateAnalyticsDataSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, DataSetIds:array<string>, TargetAccountId?:string} $args
     * @return \AWS\Result<array{Deleted?:array<string>, Errors?:array<array{ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function batchDisassociateAnalyticsDataSet(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, DataSetIds:array<string>, TargetAccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Deleted?:array<string>, Errors?:array<array{ErrorCode?:string, ErrorMessage?:string}>}>
     */
    public function batchDisassociateAnalyticsDataSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{FileIds:array<string>, InstanceId:string, AssociatedResourceArn:string} $args
     * @return \AWS\Result<array{Files?:array<array{CreationTime:string, FileArn:string, FileId:string, FileName:string, FileSizeInBytes:int, FileStatus:"APPROVED"|"REJECTED"|"PROCESSING"|"FAILED", CreatedBy?:array{ConnectUserArn?:string, AWSIdentityArn?:string}, FileUseCaseType?:"EMAIL_MESSAGE"|"ATTACHMENT", AssociatedResourceArn?:string, Tags?:array<string, string>}>, Errors?:array<array{ErrorCode?:string, ErrorMessage?:string, FileId?:string}>}>
     */
    public function batchGetAttachedFileMetadata(array $args): \AWS\Result { }

    /**
     * @param array{FileIds:array<string>, InstanceId:string, AssociatedResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Files?:array<array{CreationTime:string, FileArn:string, FileId:string, FileName:string, FileSizeInBytes:int, FileStatus:"APPROVED"|"REJECTED"|"PROCESSING"|"FAILED", CreatedBy?:array{ConnectUserArn?:string, AWSIdentityArn?:string}, FileUseCaseType?:"EMAIL_MESSAGE"|"ATTACHMENT", AssociatedResourceArn?:string, Tags?:array<string, string>}>, Errors?:array<array{ErrorCode?:string, ErrorMessage?:string, FileId?:string}>}>
     */
    public function batchGetAttachedFileMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ResourceIds:array<string>, ResourceType?:"WHATSAPP_MESSAGING_PHONE_NUMBER"|"VOICE_PHONE_NUMBER"|"INBOUND_EMAIL"|"OUTBOUND_EMAIL"|"ANALYTICS_CONNECTOR"} $args
     * @return \AWS\Result<array{FlowAssociationSummaryList?:array<array{ResourceId?:string, FlowId?:string, ResourceType?:"WHATSAPP_MESSAGING_PHONE_NUMBER"|"VOICE_PHONE_NUMBER"|"INBOUND_EMAIL"|"OUTBOUND_EMAIL"|"ANALYTICS_CONNECTOR"}>}>
     */
    public function batchGetFlowAssociation(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ResourceIds:array<string>, ResourceType?:"WHATSAPP_MESSAGING_PHONE_NUMBER"|"VOICE_PHONE_NUMBER"|"INBOUND_EMAIL"|"OUTBOUND_EMAIL"|"ANALYTICS_CONNECTOR"} $args
     * @return \GuzzleHttp\Promise\Promise<array{FlowAssociationSummaryList?:array<array{ResourceId?:string, FlowId?:string, ResourceType?:"WHATSAPP_MESSAGING_PHONE_NUMBER"|"VOICE_PHONE_NUMBER"|"INBOUND_EMAIL"|"OUTBOUND_EMAIL"|"ANALYTICS_CONNECTOR"}>}>
     */
    public function batchGetFlowAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, InstanceId:string, ContactDataRequestList:array<array{SystemEndpoint?:array{Type?:"TELEPHONE_NUMBER"|"VOIP"|"CONTACT_FLOW"|"CONNECT_PHONENUMBER_ARN"|"EMAIL_ADDRESS", Address?:string}, CustomerEndpoint?:array{Type?:"TELEPHONE_NUMBER"|"VOIP"|"CONTACT_FLOW"|"CONNECT_PHONENUMBER_ARN"|"EMAIL_ADDRESS", Address?:string}, RequestIdentifier?:string, QueueId?:string, Attributes?:array<string, string>, Campaign?:array{CampaignId?:string}}>} $args
     * @return \AWS\Result<array{SuccessfulRequestList?:array<array{RequestIdentifier?:string, ContactId?:string}>, FailedRequestList?:array<array{RequestIdentifier?:string, FailureReasonCode?:"INVALID_ATTRIBUTE_KEY"|"INVALID_CUSTOMER_ENDPOINT"|"INVALID_SYSTEM_ENDPOINT"|"INVALID_QUEUE"|"MISSING_CAMPAIGN"|"MISSING_CUSTOMER_ENDPOINT"|"MISSING_QUEUE_ID_AND_SYSTEM_ENDPOINT"|"REQUEST_THROTTLED"|"IDEMPOTENCY_EXCEPTION"|"INTERNAL_ERROR", FailureReasonMessage?:string}>}>
     */
    public function batchPutContact(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, InstanceId:string, ContactDataRequestList:array<array{SystemEndpoint?:array{Type?:"TELEPHONE_NUMBER"|"VOIP"|"CONTACT_FLOW"|"CONNECT_PHONENUMBER_ARN"|"EMAIL_ADDRESS", Address?:string}, CustomerEndpoint?:array{Type?:"TELEPHONE_NUMBER"|"VOIP"|"CONTACT_FLOW"|"CONNECT_PHONENUMBER_ARN"|"EMAIL_ADDRESS", Address?:string}, RequestIdentifier?:string, QueueId?:string, Attributes?:array<string, string>, Campaign?:array{CampaignId?:string}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{SuccessfulRequestList?:array<array{RequestIdentifier?:string, ContactId?:string}>, FailedRequestList?:array<array{RequestIdentifier?:string, FailureReasonCode?:"INVALID_ATTRIBUTE_KEY"|"INVALID_CUSTOMER_ENDPOINT"|"INVALID_SYSTEM_ENDPOINT"|"INVALID_QUEUE"|"MISSING_CAMPAIGN"|"MISSING_CUSTOMER_ENDPOINT"|"MISSING_QUEUE_ID_AND_SYSTEM_ENDPOINT"|"REQUEST_THROTTLED"|"IDEMPOTENCY_EXCEPTION"|"INTERNAL_ERROR", FailureReasonMessage?:string}>}>
     */
    public function batchPutContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TargetArn?:string, InstanceId?:string, PhoneNumber:string, PhoneNumberDescription?:string, Tags?:array<string, string>, ClientToken?:string} $args
     * @return \AWS\Result<array{PhoneNumberId?:string, PhoneNumberArn?:string}>
     */
    public function claimPhoneNumber(array $args): \AWS\Result { }

    /**
     * @param array{TargetArn?:string, InstanceId?:string, PhoneNumber:string, PhoneNumberDescription?:string, Tags?:array<string, string>, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumberId?:string, PhoneNumberArn?:string}>
     */
    public function claimPhoneNumberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, FileId:string, AssociatedResourceArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function completeAttachedFileUpload(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, FileId:string, AssociatedResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function completeAttachedFileUploadAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, Name:string, Description?:string, State:"ENABLED"|"DISABLED", DisplayOrder?:int, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{AgentStatusARN?:string, AgentStatusId?:string}>
     */
    public function createAgentStatus(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, Name:string, Description?:string, State:"ENABLED"|"DISABLED", DisplayOrder?:int, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{AgentStatusARN?:string, AgentStatusId?:string}>
     */
    public function createAgentStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ClientToken?:string, RelatedContactId?:string, Attributes?:array<string, string>, References?:array<string, array{Value?:string, Type:"URL"|"ATTACHMENT"|"CONTACT_ANALYSIS"|"NUMBER"|"STRING"|"DATE"|"EMAIL"|"EMAIL_MESSAGE", Status?:"AVAILABLE"|"DELETED"|"APPROVED"|"REJECTED"|"PROCESSING"|"FAILED", Arn?:string, StatusReason?:string}>, Channel:"VOICE"|"CHAT"|"TASK"|"EMAIL", InitiationMethod:"INBOUND"|"OUTBOUND"|"TRANSFER"|"QUEUE_TRANSFER"|"CALLBACK"|"API"|"DISCONNECT"|"MONITOR"|"EXTERNAL_OUTBOUND"|"WEBRTC_API"|"AGENT_REPLY"|"FLOW", ExpiryDurationInMinutes?:int, UserInfo?:array{UserId?:string}, InitiateAs?:"CONNECTED_TO_USER", Name?:string, Description?:string, SegmentAttributes?:array<string, array{ValueString?:string, ValueMap?:array<string, array{ValueString?:string, ValueMap?:mixed, ValueInteger?:int}>, ValueInteger?:int}>} $args
     * @return \AWS\Result<array{ContactId?:string, ContactArn?:string}>
     */
    public function createContact(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ClientToken?:string, RelatedContactId?:string, Attributes?:array<string, string>, References?:array<string, array{Value?:string, Type:"URL"|"ATTACHMENT"|"CONTACT_ANALYSIS"|"NUMBER"|"STRING"|"DATE"|"EMAIL"|"EMAIL_MESSAGE", Status?:"AVAILABLE"|"DELETED"|"APPROVED"|"REJECTED"|"PROCESSING"|"FAILED", Arn?:string, StatusReason?:string}>, Channel:"VOICE"|"CHAT"|"TASK"|"EMAIL", InitiationMethod:"INBOUND"|"OUTBOUND"|"TRANSFER"|"QUEUE_TRANSFER"|"CALLBACK"|"API"|"DISCONNECT"|"MONITOR"|"EXTERNAL_OUTBOUND"|"WEBRTC_API"|"AGENT_REPLY"|"FLOW", ExpiryDurationInMinutes?:int, UserInfo?:array{UserId?:string}, InitiateAs?:"CONNECTED_TO_USER", Name?:string, Description?:string, SegmentAttributes?:array<string, array{ValueString?:string, ValueMap?:array<string, array{ValueString?:string, ValueMap?:mixed, ValueInteger?:int}>, ValueInteger?:int}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContactId?:string, ContactArn?:string}>
     */
    public function createContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, Name:string, Type:"CONTACT_FLOW"|"CUSTOMER_QUEUE"|"CUSTOMER_HOLD"|"CUSTOMER_WHISPER"|"AGENT_HOLD"|"AGENT_WHISPER"|"OUTBOUND_WHISPER"|"AGENT_TRANSFER"|"QUEUE_TRANSFER"|"CAMPAIGN", Description?:string, Content:string, Status?:"PUBLISHED"|"SAVED", Tags?:array<string, string>} $args
     * @return \AWS\Result<array{ContactFlowId?:string, ContactFlowArn?:string, FlowContentSha256?:string}>
     */
    public function createContactFlow(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, Name:string, Type:"CONTACT_FLOW"|"CUSTOMER_QUEUE"|"CUSTOMER_HOLD"|"CUSTOMER_WHISPER"|"AGENT_HOLD"|"AGENT_WHISPER"|"OUTBOUND_WHISPER"|"AGENT_TRANSFER"|"QUEUE_TRANSFER"|"CAMPAIGN", Description?:string, Content:string, Status?:"PUBLISHED"|"SAVED", Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContactFlowId?:string, ContactFlowArn?:string, FlowContentSha256?:string}>
     */
    public function createContactFlowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, Name:string, Description?:string, Content:string, Tags?:array<string, string>, ClientToken?:string} $args
     * @return \AWS\Result<array{Id?:string, Arn?:string}>
     */
    public function createContactFlowModule(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, Name:string, Description?:string, Content:string, Tags?:array<string, string>, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Id?:string, Arn?:string}>
     */
    public function createContactFlowModuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, Description?:string, ContactFlowId:string, FlowContentSha256?:string, ContactFlowVersion?:int, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string} $args
     * @return \AWS\Result<array{ContactFlowArn?:string, Version?:int}>
     */
    public function createContactFlowVersion(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, Description?:string, ContactFlowId:string, FlowContentSha256?:string, ContactFlowVersion?:int, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContactFlowArn?:string, Version?:int}>
     */
    public function createContactFlowVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Description?:string, InstanceId:string, EmailAddress:string, DisplayName?:string, Tags?:array<string, string>, ClientToken?:string} $args
     * @return \AWS\Result<array{EmailAddressId?:string, EmailAddressArn?:string}>
     */
    public function createEmailAddress(array $args): \AWS\Result { }

    /**
     * @param array{Description?:string, InstanceId:string, EmailAddress:string, DisplayName?:string, Tags?:array<string, string>, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EmailAddressId?:string, EmailAddressArn?:string}>
     */
    public function createEmailAddressAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, Title:string, Description?:string, Items:array<array{Section?:array{Title:string, RefId:string, Instructions?:string, Items:mixed, Weight?:float}, Question?:array{Title:string, Instructions?:string, RefId:string, NotApplicableEnabled?:bool, QuestionType:"TEXT"|"SINGLESELECT"|"NUMERIC", QuestionTypeProperties?:array{Numeric?:array{MinValue:int, MaxValue:int, Options?:array<array{MinValue:int, MaxValue:int, Score?:int, AutomaticFail?:bool}>, Automation?:array{PropertyValue?:array{Label:"OVERALL_CUSTOMER_SENTIMENT_SCORE"|"OVERALL_AGENT_SENTIMENT_SCORE"|"NON_TALK_TIME"|"NON_TALK_TIME_PERCENTAGE"|"NUMBER_OF_INTERRUPTIONS"|"CONTACT_DURATION"|"AGENT_INTERACTION_DURATION"|"CUSTOMER_HOLD_TIME"}}}, SingleSelect?:array{Options:array<array{RefId:string, Text:string, Score?:int, AutomaticFail?:bool}>, DisplayAs?:"DROPDOWN"|"RADIO", Automation?:array{Options:array<array{RuleCategory?:array{Category:string, Condition:"PRESENT"|"NOT_PRESENT", OptionRefId:string}}>, DefaultOptionRefId?:string}}}, Weight?:float}}>, ScoringStrategy?:array{Mode:"QUESTION_ONLY"|"SECTION_ONLY", Status:"ENABLED"|"DISABLED"}, ClientToken?:string} $args
     * @return \AWS\Result<array{EvaluationFormId:string, EvaluationFormArn:string}>
     */
    public function createEvaluationForm(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, Title:string, Description?:string, Items:array<array{Section?:array{Title:string, RefId:string, Instructions?:string, Items:mixed, Weight?:float}, Question?:array{Title:string, Instructions?:string, RefId:string, NotApplicableEnabled?:bool, QuestionType:"TEXT"|"SINGLESELECT"|"NUMERIC", QuestionTypeProperties?:array{Numeric?:array{MinValue:int, MaxValue:int, Options?:array<array{MinValue:int, MaxValue:int, Score?:int, AutomaticFail?:bool}>, Automation?:array{PropertyValue?:array{Label:"OVERALL_CUSTOMER_SENTIMENT_SCORE"|"OVERALL_AGENT_SENTIMENT_SCORE"|"NON_TALK_TIME"|"NON_TALK_TIME_PERCENTAGE"|"NUMBER_OF_INTERRUPTIONS"|"CONTACT_DURATION"|"AGENT_INTERACTION_DURATION"|"CUSTOMER_HOLD_TIME"}}}, SingleSelect?:array{Options:array<array{RefId:string, Text:string, Score?:int, AutomaticFail?:bool}>, DisplayAs?:"DROPDOWN"|"RADIO", Automation?:array{Options:array<array{RuleCategory?:array{Category:string, Condition:"PRESENT"|"NOT_PRESENT", OptionRefId:string}}>, DefaultOptionRefId?:string}}}, Weight?:float}}>, ScoringStrategy?:array{Mode:"QUESTION_ONLY"|"SECTION_ONLY", Status:"ENABLED"|"DISABLED"}, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EvaluationFormId:string, EvaluationFormArn:string}>
     */
    public function createEvaluationFormAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, Name:string, Description?:string, TimeZone:string, Config:array<array{Day:"SUNDAY"|"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY", StartTime:array{Hours:int, Minutes:int}, EndTime:array{Hours:int, Minutes:int}}>, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{HoursOfOperationId?:string, HoursOfOperationArn?:string}>
     */
    public function createHoursOfOperation(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, Name:string, Description?:string, TimeZone:string, Config:array<array{Day:"SUNDAY"|"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY", StartTime:array{Hours:int, Minutes:int}, EndTime:array{Hours:int, Minutes:int}}>, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{HoursOfOperationId?:string, HoursOfOperationArn?:string}>
     */
    public function createHoursOfOperationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, HoursOfOperationId:string, Name:string, Description?:string, Config:array<array{Day?:"SUNDAY"|"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY", StartTime?:array{Hours:int, Minutes:int}, EndTime?:array{Hours:int, Minutes:int}}>, EffectiveFrom:string, EffectiveTill:string} $args
     * @return \AWS\Result<array{HoursOfOperationOverrideId?:string}>
     */
    public function createHoursOfOperationOverride(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, HoursOfOperationId:string, Name:string, Description?:string, Config:array<array{Day?:"SUNDAY"|"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY", StartTime?:array{Hours:int, Minutes:int}, EndTime?:array{Hours:int, Minutes:int}}>, EffectiveFrom:string, EffectiveTill:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{HoursOfOperationOverrideId?:string}>
     */
    public function createHoursOfOperationOverrideAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, IdentityManagementType:"SAML"|"CONNECT_MANAGED"|"EXISTING_DIRECTORY", InstanceAlias?:string, DirectoryId?:string, InboundCallsEnabled:bool, OutboundCallsEnabled:bool, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Id?:string, Arn?:string}>
     */
    public function createInstance(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, IdentityManagementType:"SAML"|"CONNECT_MANAGED"|"EXISTING_DIRECTORY", InstanceAlias?:string, DirectoryId?:string, InboundCallsEnabled:bool, OutboundCallsEnabled:bool, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Id?:string, Arn?:string}>
     */
    public function createInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, IntegrationType:"EVENT"|"VOICE_ID"|"PINPOINT_APP"|"WISDOM_ASSISTANT"|"WISDOM_KNOWLEDGE_BASE"|"WISDOM_QUICK_RESPONSES"|"Q_MESSAGE_TEMPLATES"|"CASES_DOMAIN"|"APPLICATION"|"FILE_SCANNER"|"SES_IDENTITY"|"ANALYTICS_CONNECTOR"|"CALL_TRANSFER_CONNECTOR"|"COGNITO_USER_POOL", IntegrationArn:string, SourceApplicationUrl?:string, SourceApplicationName?:string, SourceType?:"SALESFORCE"|"ZENDESK"|"CASES", Tags?:array<string, string>} $args
     * @return \AWS\Result<array{IntegrationAssociationId?:string, IntegrationAssociationArn?:string}>
     */
    public function createIntegrationAssociation(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, IntegrationType:"EVENT"|"VOICE_ID"|"PINPOINT_APP"|"WISDOM_ASSISTANT"|"WISDOM_KNOWLEDGE_BASE"|"WISDOM_QUICK_RESPONSES"|"Q_MESSAGE_TEMPLATES"|"CASES_DOMAIN"|"APPLICATION"|"FILE_SCANNER"|"SES_IDENTITY"|"ANALYTICS_CONNECTOR"|"CALL_TRANSFER_CONNECTOR"|"COGNITO_USER_POOL", IntegrationArn:string, SourceApplicationUrl?:string, SourceApplicationName?:string, SourceType?:"SALESFORCE"|"ZENDESK"|"CASES", Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{IntegrationAssociationId?:string, IntegrationAssociationArn?:string}>
     */
    public function createIntegrationAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ContactId:string, ClientToken?:string, ParticipantDetails:array{ParticipantRole?:"AGENT"|"CUSTOMER"|"SYSTEM"|"CUSTOM_BOT"|"SUPERVISOR", DisplayName?:string}} $args
     * @return \AWS\Result<array{ParticipantCredentials?:array{ParticipantToken?:string, Expiry?:string}, ParticipantId?:string}>
     */
    public function createParticipant(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ContactId:string, ClientToken?:string, ParticipantDetails:array{ParticipantRole?:"AGENT"|"CUSTOMER"|"SYSTEM"|"CUSTOM_BOT"|"SUPERVISOR", DisplayName?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ParticipantCredentials?:array{ParticipantToken?:string, Expiry?:string}, ParticipantId?:string}>
     */
    public function createParticipantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, InitialContactId:string, RehydrationType:"ENTIRE_PAST_SESSION"|"FROM_SEGMENT", SourceContactId:string, ClientToken?:string} $args
     * @return \AWS\Result<array{ContinuedFromContactId?:string}>
     */
    public function createPersistentContactAssociation(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, InitialContactId:string, RehydrationType:"ENTIRE_PAST_SESSION"|"FROM_SEGMENT", SourceContactId:string, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContinuedFromContactId?:string}>
     */
    public function createPersistentContactAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, Name:string, Values:array{StringList?:array<string>}} $args
     * @return \AWS\Result<void>
     */
    public function createPredefinedAttribute(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, Name:string, Values:array{StringList?:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function createPredefinedAttributeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, Name:string, Description?:string, S3Uri:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{PromptARN?:string, PromptId?:string}>
     */
    public function createPrompt(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, Name:string, Description?:string, S3Uri:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{PromptARN?:string, PromptId?:string}>
     */
    public function createPromptAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ClientToken?:string, PinpointAppArn:string, DeviceToken:string, DeviceType:"GCM"|"APNS"|"APNS_SANDBOX", ContactConfiguration:array{ContactId:string, ParticipantRole?:"AGENT"|"CUSTOMER"|"SYSTEM"|"CUSTOM_BOT"|"SUPERVISOR", IncludeRawMessage?:bool}} $args
     * @return \AWS\Result<array{RegistrationId:string}>
     */
    public function createPushNotificationRegistration(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ClientToken?:string, PinpointAppArn:string, DeviceToken:string, DeviceType:"GCM"|"APNS"|"APNS_SANDBOX", ContactConfiguration:array{ContactId:string, ParticipantRole?:"AGENT"|"CUSTOMER"|"SYSTEM"|"CUSTOM_BOT"|"SUPERVISOR", IncludeRawMessage?:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{RegistrationId:string}>
     */
    public function createPushNotificationRegistrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, Name:string, Description?:string, OutboundCallerConfig?:array{OutboundCallerIdName?:string, OutboundCallerIdNumberId?:string, OutboundFlowId?:string}, OutboundEmailConfig?:array{OutboundEmailAddressId?:string}, HoursOfOperationId:string, MaxContacts?:int, QuickConnectIds?:array<string>, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{QueueArn?:string, QueueId?:string}>
     */
    public function createQueue(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, Name:string, Description?:string, OutboundCallerConfig?:array{OutboundCallerIdName?:string, OutboundCallerIdNumberId?:string, OutboundFlowId?:string}, OutboundEmailConfig?:array{OutboundEmailAddressId?:string}, HoursOfOperationId:string, MaxContacts?:int, QuickConnectIds?:array<string>, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{QueueArn?:string, QueueId?:string}>
     */
    public function createQueueAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, Name:string, Description?:string, QuickConnectConfig:array{QuickConnectType:"USER"|"QUEUE"|"PHONE_NUMBER", UserConfig?:array{UserId:string, ContactFlowId:string}, QueueConfig?:array{QueueId:string, ContactFlowId:string}, PhoneConfig?:array{PhoneNumber:string}}, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{QuickConnectARN?:string, QuickConnectId?:string}>
     */
    public function createQuickConnect(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, Name:string, Description?:string, QuickConnectConfig:array{QuickConnectType:"USER"|"QUEUE"|"PHONE_NUMBER", UserConfig?:array{UserId:string, ContactFlowId:string}, QueueConfig?:array{QueueId:string, ContactFlowId:string}, PhoneConfig?:array{PhoneNumber:string}}, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{QuickConnectARN?:string, QuickConnectId?:string}>
     */
    public function createQuickConnectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, Name:string, Description:string, DefaultOutboundQueueId:string, QueueConfigs?:array<array{QueueReference:array{QueueId:string, Channel:"VOICE"|"CHAT"|"TASK"|"EMAIL"}, Priority:int, Delay:int}>, MediaConcurrencies:array<array{Channel:"VOICE"|"CHAT"|"TASK"|"EMAIL", Concurrency:int, CrossChannelBehavior?:array{BehaviorType:"ROUTE_CURRENT_CHANNEL_ONLY"|"ROUTE_ANY_CHANNEL"}}>, Tags?:array<string, string>, AgentAvailabilityTimer?:"TIME_SINCE_LAST_ACTIVITY"|"TIME_SINCE_LAST_INBOUND"} $args
     * @return \AWS\Result<array{RoutingProfileArn?:string, RoutingProfileId?:string}>
     */
    public function createRoutingProfile(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, Name:string, Description:string, DefaultOutboundQueueId:string, QueueConfigs?:array<array{QueueReference:array{QueueId:string, Channel:"VOICE"|"CHAT"|"TASK"|"EMAIL"}, Priority:int, Delay:int}>, MediaConcurrencies:array<array{Channel:"VOICE"|"CHAT"|"TASK"|"EMAIL", Concurrency:int, CrossChannelBehavior?:array{BehaviorType:"ROUTE_CURRENT_CHANNEL_ONLY"|"ROUTE_ANY_CHANNEL"}}>, Tags?:array<string, string>, AgentAvailabilityTimer?:"TIME_SINCE_LAST_ACTIVITY"|"TIME_SINCE_LAST_INBOUND"} $args
     * @return \GuzzleHttp\Promise\Promise<array{RoutingProfileArn?:string, RoutingProfileId?:string}>
     */
    public function createRoutingProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, Name:string, TriggerEventSource:array{EventSourceName:"OnPostCallAnalysisAvailable"|"OnRealTimeCallAnalysisAvailable"|"OnRealTimeChatAnalysisAvailable"|"OnPostChatAnalysisAvailable"|"OnZendeskTicketCreate"|"OnZendeskTicketStatusUpdate"|"OnSalesforceCaseCreate"|"OnContactEvaluationSubmit"|"OnMetricDataUpdate"|"OnCaseCreate"|"OnCaseUpdate", IntegrationAssociationId?:string}, Function:string, Actions:array<array{ActionType:"CREATE_TASK"|"ASSIGN_CONTACT_CATEGORY"|"GENERATE_EVENTBRIDGE_EVENT"|"SEND_NOTIFICATION"|"CREATE_CASE"|"UPDATE_CASE"|"END_ASSOCIATED_TASKS"|"SUBMIT_AUTO_EVALUATION", TaskAction?:array{Name:string, Description?:string, ContactFlowId:string, References?:array<string, array{Value?:string, Type:"URL"|"ATTACHMENT"|"CONTACT_ANALYSIS"|"NUMBER"|"STRING"|"DATE"|"EMAIL"|"EMAIL_MESSAGE", Status?:"AVAILABLE"|"DELETED"|"APPROVED"|"REJECTED"|"PROCESSING"|"FAILED", Arn?:string, StatusReason?:string}>}, EventBridgeAction?:array{Name:string}, AssignContactCategoryAction?:array{}, SendNotificationAction?:array{DeliveryMethod:"EMAIL", Subject?:string, Content:string, ContentType:"PLAIN_TEXT", Recipient:array{UserTags?:array<string, string>, UserIds?:array<string>}}, CreateCaseAction?:array{Fields:array<array{Id:string, Value:array{BooleanValue?:bool, DoubleValue?:float, EmptyValue?:array{}, StringValue?:string}}>, TemplateId:string}, UpdateCaseAction?:array{Fields:array<array{Id:string, Value:array{BooleanValue?:bool, DoubleValue?:float, EmptyValue?:array{}, StringValue?:string}}>}, EndAssociatedTasksAction?:array{}, SubmitAutoEvaluationAction?:array{EvaluationFormId:string}}>, PublishStatus:"DRAFT"|"PUBLISHED", ClientToken?:string} $args
     * @return \AWS\Result<array{RuleArn:string, RuleId:string}>
     */
    public function createRule(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, Name:string, TriggerEventSource:array{EventSourceName:"OnPostCallAnalysisAvailable"|"OnRealTimeCallAnalysisAvailable"|"OnRealTimeChatAnalysisAvailable"|"OnPostChatAnalysisAvailable"|"OnZendeskTicketCreate"|"OnZendeskTicketStatusUpdate"|"OnSalesforceCaseCreate"|"OnContactEvaluationSubmit"|"OnMetricDataUpdate"|"OnCaseCreate"|"OnCaseUpdate", IntegrationAssociationId?:string}, Function:string, Actions:array<array{ActionType:"CREATE_TASK"|"ASSIGN_CONTACT_CATEGORY"|"GENERATE_EVENTBRIDGE_EVENT"|"SEND_NOTIFICATION"|"CREATE_CASE"|"UPDATE_CASE"|"END_ASSOCIATED_TASKS"|"SUBMIT_AUTO_EVALUATION", TaskAction?:array{Name:string, Description?:string, ContactFlowId:string, References?:array<string, array{Value?:string, Type:"URL"|"ATTACHMENT"|"CONTACT_ANALYSIS"|"NUMBER"|"STRING"|"DATE"|"EMAIL"|"EMAIL_MESSAGE", Status?:"AVAILABLE"|"DELETED"|"APPROVED"|"REJECTED"|"PROCESSING"|"FAILED", Arn?:string, StatusReason?:string}>}, EventBridgeAction?:array{Name:string}, AssignContactCategoryAction?:array{}, SendNotificationAction?:array{DeliveryMethod:"EMAIL", Subject?:string, Content:string, ContentType:"PLAIN_TEXT", Recipient:array{UserTags?:array<string, string>, UserIds?:array<string>}}, CreateCaseAction?:array{Fields:array<array{Id:string, Value:array{BooleanValue?:bool, DoubleValue?:float, EmptyValue?:array{}, StringValue?:string}}>, TemplateId:string}, UpdateCaseAction?:array{Fields:array<array{Id:string, Value:array{BooleanValue?:bool, DoubleValue?:float, EmptyValue?:array{}, StringValue?:string}}>}, EndAssociatedTasksAction?:array{}, SubmitAutoEvaluationAction?:array{EvaluationFormId:string}}>, PublishStatus:"DRAFT"|"PUBLISHED", ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RuleArn:string, RuleId:string}>
     */
    public function createRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SecurityProfileName:string, Description?:string, Permissions?:array<string>, InstanceId:string, Tags?:array<string, string>, AllowedAccessControlTags?:array<string, string>, TagRestrictedResources?:array<string>, Applications?:array<array{Namespace?:string, ApplicationPermissions?:array<string>}>, HierarchyRestrictedResources?:array<string>, AllowedAccessControlHierarchyGroupId?:string} $args
     * @return \AWS\Result<array{SecurityProfileId?:string, SecurityProfileArn?:string}>
     */
    public function createSecurityProfile(array $args): \AWS\Result { }

    /**
     * @param array{SecurityProfileName:string, Description?:string, Permissions?:array<string>, InstanceId:string, Tags?:array<string, string>, AllowedAccessControlTags?:array<string, string>, TagRestrictedResources?:array<string>, Applications?:array<array{Namespace?:string, ApplicationPermissions?:array<string>}>, HierarchyRestrictedResources?:array<string>, AllowedAccessControlHierarchyGroupId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SecurityProfileId?:string, SecurityProfileArn?:string}>
     */
    public function createSecurityProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, Name:string, Description?:string, ContactFlowId?:string, SelfAssignFlowId?:string, Constraints?:array{RequiredFields?:array<array{Id?:array{Name?:string}}>, ReadOnlyFields?:array<array{Id?:array{Name?:string}}>, InvisibleFields?:array<array{Id?:array{Name?:string}}>}, Defaults?:array{DefaultFieldValues?:array<array{Id?:array{Name?:string}, DefaultValue?:string}>}, Status?:"ACTIVE"|"INACTIVE", Fields:array<array{Id:array{Name?:string}, Description?:string, Type?:"NAME"|"DESCRIPTION"|"SCHEDULED_TIME"|"QUICK_CONNECT"|"URL"|"NUMBER"|"TEXT"|"TEXT_AREA"|"DATE_TIME"|"BOOLEAN"|"SINGLE_SELECT"|"EMAIL"|"SELF_ASSIGN"|"EXPIRY_DURATION", SingleSelectOptions?:array<string>}>, ClientToken?:string} $args
     * @return \AWS\Result<array{Id:string, Arn:string}>
     */
    public function createTaskTemplate(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, Name:string, Description?:string, ContactFlowId?:string, SelfAssignFlowId?:string, Constraints?:array{RequiredFields?:array<array{Id?:array{Name?:string}}>, ReadOnlyFields?:array<array{Id?:array{Name?:string}}>, InvisibleFields?:array<array{Id?:array{Name?:string}}>}, Defaults?:array{DefaultFieldValues?:array<array{Id?:array{Name?:string}, DefaultValue?:string}>}, Status?:"ACTIVE"|"INACTIVE", Fields:array<array{Id:array{Name?:string}, Description?:string, Type?:"NAME"|"DESCRIPTION"|"SCHEDULED_TIME"|"QUICK_CONNECT"|"URL"|"NUMBER"|"TEXT"|"TEXT_AREA"|"DATE_TIME"|"BOOLEAN"|"SINGLE_SELECT"|"EMAIL"|"SELF_ASSIGN"|"EXPIRY_DURATION", SingleSelectOptions?:array<string>}>, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Id:string, Arn:string}>
     */
    public function createTaskTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Description?:string, InstanceId:string, ClientToken?:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Id?:string, Arn?:string}>
     */
    public function createTrafficDistributionGroup(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Description?:string, InstanceId:string, ClientToken?:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Id?:string, Arn?:string}>
     */
    public function createTrafficDistributionGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, IntegrationAssociationId:string, UseCaseType:"RULES_EVALUATION"|"CONNECT_CAMPAIGNS", Tags?:array<string, string>} $args
     * @return \AWS\Result<array{UseCaseId?:string, UseCaseArn?:string}>
     */
    public function createUseCase(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, IntegrationAssociationId:string, UseCaseType:"RULES_EVALUATION"|"CONNECT_CAMPAIGNS", Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{UseCaseId?:string, UseCaseArn?:string}>
     */
    public function createUseCaseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Username:string, Password?:string, IdentityInfo?:array{FirstName?:string, LastName?:string, Email?:string, SecondaryEmail?:string, Mobile?:string}, PhoneConfig:array{PhoneType:"SOFT_PHONE"|"DESK_PHONE", AutoAccept?:bool, AfterContactWorkTimeLimit?:int, DeskPhoneNumber?:string}, DirectoryUserId?:string, SecurityProfileIds:array<string>, RoutingProfileId:string, HierarchyGroupId?:string, InstanceId:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{UserId?:string, UserArn?:string}>
     */
    public function createUser(array $args): \AWS\Result { }

    /**
     * @param array{Username:string, Password?:string, IdentityInfo?:array{FirstName?:string, LastName?:string, Email?:string, SecondaryEmail?:string, Mobile?:string}, PhoneConfig:array{PhoneType:"SOFT_PHONE"|"DESK_PHONE", AutoAccept?:bool, AfterContactWorkTimeLimit?:int, DeskPhoneNumber?:string}, DirectoryUserId?:string, SecurityProfileIds:array<string>, RoutingProfileId:string, HierarchyGroupId?:string, InstanceId:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserId?:string, UserArn?:string}>
     */
    public function createUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, ParentGroupId?:string, InstanceId:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{HierarchyGroupId?:string, HierarchyGroupArn?:string}>
     */
    public function createUserHierarchyGroup(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, ParentGroupId?:string, InstanceId:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{HierarchyGroupId?:string, HierarchyGroupArn?:string}>
     */
    public function createUserHierarchyGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ClientToken?:string, Status:"PUBLISHED"|"SAVED", Content:array{Template?:string, Actions?:array<string>}, Description?:string, Name:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{View?:array{Id?:string, Arn?:string, Name?:string, Status?:"PUBLISHED"|"SAVED", Type?:"CUSTOMER_MANAGED"|"AWS_MANAGED", Description?:string, Version?:int, VersionDescription?:string, Content?:array{InputSchema?:string, Template?:string, Actions?:array<string>}, Tags?:array<string, string>, CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, ViewContentSha256?:string}}>
     */
    public function createView(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ClientToken?:string, Status:"PUBLISHED"|"SAVED", Content:array{Template?:string, Actions?:array<string>}, Description?:string, Name:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{View?:array{Id?:string, Arn?:string, Name?:string, Status?:"PUBLISHED"|"SAVED", Type?:"CUSTOMER_MANAGED"|"AWS_MANAGED", Description?:string, Version?:int, VersionDescription?:string, Content?:array{InputSchema?:string, Template?:string, Actions?:array<string>}, Tags?:array<string, string>, CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, ViewContentSha256?:string}}>
     */
    public function createViewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ViewId:string, VersionDescription?:string, ViewContentSha256?:string} $args
     * @return \AWS\Result<array{View?:array{Id?:string, Arn?:string, Name?:string, Status?:"PUBLISHED"|"SAVED", Type?:"CUSTOMER_MANAGED"|"AWS_MANAGED", Description?:string, Version?:int, VersionDescription?:string, Content?:array{InputSchema?:string, Template?:string, Actions?:array<string>}, Tags?:array<string, string>, CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, ViewContentSha256?:string}}>
     */
    public function createViewVersion(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ViewId:string, VersionDescription?:string, ViewContentSha256?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{View?:array{Id?:string, Arn?:string, Name?:string, Status?:"PUBLISHED"|"SAVED", Type?:"CUSTOMER_MANAGED"|"AWS_MANAGED", Description?:string, Version?:int, VersionDescription?:string, Content?:array{InputSchema?:string, Template?:string, Actions?:array<string>}, Tags?:array<string, string>, CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, ViewContentSha256?:string}}>
     */
    public function createViewVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, InstanceId:string, VocabularyName:string, LanguageCode:"ar-AE"|"de-CH"|"de-DE"|"en-AB"|"en-AU"|"en-GB"|"en-IE"|"en-IN"|"en-US"|"en-WL"|"es-ES"|"es-US"|"fr-CA"|"fr-FR"|"hi-IN"|"it-IT"|"ja-JP"|"ko-KR"|"pt-BR"|"pt-PT"|"zh-CN"|"en-NZ"|"en-ZA"|"ca-ES"|"da-DK"|"fi-FI"|"id-ID"|"ms-MY"|"nl-NL"|"no-NO"|"pl-PL"|"sv-SE"|"tl-PH", Content:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{VocabularyArn:string, VocabularyId:string, State:"CREATION_IN_PROGRESS"|"ACTIVE"|"CREATION_FAILED"|"DELETE_IN_PROGRESS"}>
     */
    public function createVocabulary(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, InstanceId:string, VocabularyName:string, LanguageCode:"ar-AE"|"de-CH"|"de-DE"|"en-AB"|"en-AU"|"en-GB"|"en-IE"|"en-IN"|"en-US"|"en-WL"|"es-ES"|"es-US"|"fr-CA"|"fr-FR"|"hi-IN"|"it-IT"|"ja-JP"|"ko-KR"|"pt-BR"|"pt-PT"|"zh-CN"|"en-NZ"|"en-ZA"|"ca-ES"|"da-DK"|"fi-FI"|"id-ID"|"ms-MY"|"nl-NL"|"no-NO"|"pl-PL"|"sv-SE"|"tl-PH", Content:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{VocabularyArn:string, VocabularyId:string, State:"CREATION_IN_PROGRESS"|"ACTIVE"|"CREATION_FAILED"|"DELETE_IN_PROGRESS"}>
     */
    public function createVocabularyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, EvaluationFormId:string, EvaluationFormVersion:int} $args
     * @return \AWS\Result<array{EvaluationFormId:string, EvaluationFormArn:string, EvaluationFormVersion:int}>
     */
    public function deactivateEvaluationForm(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, EvaluationFormId:string, EvaluationFormVersion:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{EvaluationFormId:string, EvaluationFormArn:string, EvaluationFormVersion:int}>
     */
    public function deactivateEvaluationFormAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, FileId:string, AssociatedResourceArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAttachedFile(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, FileId:string, AssociatedResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAttachedFileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, EvaluationId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteContactEvaluation(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, EvaluationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteContactEvaluationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ContactFlowId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteContactFlow(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ContactFlowId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteContactFlowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ContactFlowModuleId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteContactFlowModule(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ContactFlowModuleId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteContactFlowModuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ContactFlowId:string, ContactFlowVersion:int} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteContactFlowVersion(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ContactFlowId:string, ContactFlowVersion:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteContactFlowVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, EmailAddressId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteEmailAddress(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, EmailAddressId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteEmailAddressAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, EvaluationFormId:string, EvaluationFormVersion?:int} $args
     * @return \AWS\Result<void>
     */
    public function deleteEvaluationForm(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, EvaluationFormId:string, EvaluationFormVersion?:int} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteEvaluationFormAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, HoursOfOperationId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteHoursOfOperation(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, HoursOfOperationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteHoursOfOperationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, HoursOfOperationId:string, HoursOfOperationOverrideId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteHoursOfOperationOverride(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, HoursOfOperationId:string, HoursOfOperationOverrideId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteHoursOfOperationOverrideAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteInstance(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, IntegrationAssociationId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteIntegrationAssociation(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, IntegrationAssociationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteIntegrationAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, Name:string} $args
     * @return \AWS\Result<void>
     */
    public function deletePredefinedAttribute(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deletePredefinedAttributeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, PromptId:string} $args
     * @return \AWS\Result<void>
     */
    public function deletePrompt(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, PromptId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deletePromptAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, RegistrationId:string, ContactId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deletePushNotificationRegistration(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, RegistrationId:string, ContactId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deletePushNotificationRegistrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, QueueId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteQueue(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, QueueId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteQueueAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, QuickConnectId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteQuickConnect(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, QuickConnectId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteQuickConnectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, RoutingProfileId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteRoutingProfile(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, RoutingProfileId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteRoutingProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, RuleId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteRule(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, RuleId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, SecurityProfileId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteSecurityProfile(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, SecurityProfileId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteSecurityProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, TaskTemplateId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteTaskTemplate(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, TaskTemplateId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteTaskTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrafficDistributionGroupId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteTrafficDistributionGroup(array $args): \AWS\Result { }

    /**
     * @param array{TrafficDistributionGroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteTrafficDistributionGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, IntegrationAssociationId:string, UseCaseId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteUseCase(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, IntegrationAssociationId:string, UseCaseId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteUseCaseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, UserId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteUser(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, UserId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HierarchyGroupId:string, InstanceId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteUserHierarchyGroup(array $args): \AWS\Result { }

    /**
     * @param array{HierarchyGroupId:string, InstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteUserHierarchyGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ViewId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteView(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ViewId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteViewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ViewId:string, ViewVersion:int} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteViewVersion(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ViewId:string, ViewVersion:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteViewVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, VocabularyId:string} $args
     * @return \AWS\Result<array{VocabularyArn:string, VocabularyId:string, State:"CREATION_IN_PROGRESS"|"ACTIVE"|"CREATION_FAILED"|"DELETE_IN_PROGRESS"}>
     */
    public function deleteVocabulary(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, VocabularyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VocabularyArn:string, VocabularyId:string, State:"CREATION_IN_PROGRESS"|"ACTIVE"|"CREATION_FAILED"|"DELETE_IN_PROGRESS"}>
     */
    public function deleteVocabularyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, AgentStatusId:string} $args
     * @return \AWS\Result<array{AgentStatus?:array{AgentStatusARN?:string, AgentStatusId?:string, Name?:string, Description?:string, Type?:"ROUTABLE"|"CUSTOM"|"OFFLINE", DisplayOrder?:int, State?:"ENABLED"|"DISABLED", Tags?:array<string, string>, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}}>
     */
    public function describeAgentStatus(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, AgentStatusId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AgentStatus?:array{AgentStatusARN?:string, AgentStatusId?:string, Name?:string, Description?:string, Type?:"ROUTABLE"|"CUSTOM"|"OFFLINE", DisplayOrder?:int, State?:"ENABLED"|"DISABLED", Tags?:array<string, string>, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}}>
     */
    public function describeAgentStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationProfileId:string, InstanceId:string} $args
     * @return \AWS\Result<array{AuthenticationProfile?:array{Id?:string, Arn?:string, Name?:string, Description?:string, AllowedIps?:array<string>, BlockedIps?:array<string>, IsDefault?:bool, CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string, PeriodicSessionDuration?:int, MaxSessionDuration?:int}}>
     */
    public function describeAuthenticationProfile(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationProfileId:string, InstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AuthenticationProfile?:array{Id?:string, Arn?:string, Name?:string, Description?:string, AllowedIps?:array<string>, BlockedIps?:array<string>, IsDefault?:bool, CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string, PeriodicSessionDuration?:int, MaxSessionDuration?:int}}>
     */
    public function describeAuthenticationProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ContactId:string} $args
     * @return \AWS\Result<array{Contact?:array{Arn?:string, Id?:string, InitialContactId?:string, PreviousContactId?:string, ContactAssociationId?:string, InitiationMethod?:"INBOUND"|"OUTBOUND"|"TRANSFER"|"QUEUE_TRANSFER"|"CALLBACK"|"API"|"DISCONNECT"|"MONITOR"|"EXTERNAL_OUTBOUND"|"WEBRTC_API"|"AGENT_REPLY"|"FLOW", Name?:string, Description?:string, Channel?:"VOICE"|"CHAT"|"TASK"|"EMAIL", QueueInfo?:array{Id?:string, EnqueueTimestamp?:int|string|\DateTimeInterface}, AgentInfo?:array{Id?:string, ConnectedToAgentTimestamp?:int|string|\DateTimeInterface, AgentPauseDurationInSeconds?:int, HierarchyGroups?:array{Level1?:array{Arn?:string}, Level2?:array{Arn?:string}, Level3?:array{Arn?:string}, Level4?:array{Arn?:string}, Level5?:array{Arn?:string}}, DeviceInfo?:array{PlatformName?:string, PlatformVersion?:string, OperatingSystem?:string}, Capabilities?:array{Video?:"SEND", ScreenShare?:"SEND"}}, InitiationTimestamp?:int|string|\DateTimeInterface, DisconnectTimestamp?:int|string|\DateTimeInterface, LastUpdateTimestamp?:int|string|\DateTimeInterface, LastPausedTimestamp?:int|string|\DateTimeInterface, LastResumedTimestamp?:int|string|\DateTimeInterface, TotalPauseCount?:int, TotalPauseDurationInSeconds?:int, ScheduledTimestamp?:int|string|\DateTimeInterface, RelatedContactId?:string, WisdomInfo?:array{SessionArn?:string}, CustomerId?:string, CustomerEndpoint?:array{Type?:"TELEPHONE_NUMBER"|"VOIP"|"CONTACT_FLOW"|"CONNECT_PHONENUMBER_ARN"|"EMAIL_ADDRESS", Address?:string, DisplayName?:string}, SystemEndpoint?:array{Type?:"TELEPHONE_NUMBER"|"VOIP"|"CONTACT_FLOW"|"CONNECT_PHONENUMBER_ARN"|"EMAIL_ADDRESS", Address?:string, DisplayName?:string}, QueueTimeAdjustmentSeconds?:int, QueuePriority?:int, Tags?:array<string, string>, ConnectedToSystemTimestamp?:int|string|\DateTimeInterface, RoutingCriteria?:array{Steps?:array<array{Expiry?:array{DurationInSeconds?:int, ExpiryTimestamp?:int|string|\DateTimeInterface}, Expression?:array{AttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}, AndExpression?:array<array{AttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}, AndExpression?:mixed, OrExpression?:array<array{AttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}, AndExpression?:mixed, OrExpression?:mixed, NotAttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}}>, NotAttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}}>, OrExpression?:array<array{AttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}, AndExpression?:array<array{AttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}, AndExpression?:mixed, OrExpression?:mixed, NotAttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}}>, OrExpression?:mixed, NotAttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}}>, NotAttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}}, Status?:"ACTIVE"|"INACTIVE"|"JOINED"|"EXPIRED"}>, ActivationTimestamp?:int|string|\DateTimeInterface, Index?:int}, Customer?:array{DeviceInfo?:array{PlatformName?:string, PlatformVersion?:string, OperatingSystem?:string}, Capabilities?:array{Video?:"SEND", ScreenShare?:"SEND"}}, Campaign?:array{CampaignId?:string}, AnsweringMachineDetectionStatus?:"ANSWERED"|"UNDETECTED"|"ERROR"|"HUMAN_ANSWERED"|"SIT_TONE_DETECTED"|"SIT_TONE_BUSY"|"SIT_TONE_INVALID_NUMBER"|"FAX_MACHINE_DETECTED"|"VOICEMAIL_BEEP"|"VOICEMAIL_NO_BEEP"|"AMD_UNRESOLVED"|"AMD_UNANSWERED"|"AMD_ERROR"|"AMD_NOT_APPLICABLE", CustomerVoiceActivity?:array{GreetingStartTimestamp?:int|string|\DateTimeInterface, GreetingEndTimestamp?:int|string|\DateTimeInterface}, QualityMetrics?:array{Agent?:array{Audio?:array{QualityScore?:float, PotentialQualityIssues?:array<string>}}, Customer?:array{Audio?:array{QualityScore?:float, PotentialQualityIssues?:array<string>}}}, DisconnectDetails?:array{PotentialDisconnectIssue?:string}, AdditionalEmailRecipients?:array{ToList?:array<array{Address?:string, DisplayName?:string}>, CcList?:array<array{Address?:string, DisplayName?:string}>}, SegmentAttributes?:array<string, array{ValueString?:string, ValueMap?:array<string, array{ValueString?:string, ValueMap?:mixed, ValueInteger?:int}>, ValueInteger?:int}>}}>
     */
    public function describeContact(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ContactId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Contact?:array{Arn?:string, Id?:string, InitialContactId?:string, PreviousContactId?:string, ContactAssociationId?:string, InitiationMethod?:"INBOUND"|"OUTBOUND"|"TRANSFER"|"QUEUE_TRANSFER"|"CALLBACK"|"API"|"DISCONNECT"|"MONITOR"|"EXTERNAL_OUTBOUND"|"WEBRTC_API"|"AGENT_REPLY"|"FLOW", Name?:string, Description?:string, Channel?:"VOICE"|"CHAT"|"TASK"|"EMAIL", QueueInfo?:array{Id?:string, EnqueueTimestamp?:int|string|\DateTimeInterface}, AgentInfo?:array{Id?:string, ConnectedToAgentTimestamp?:int|string|\DateTimeInterface, AgentPauseDurationInSeconds?:int, HierarchyGroups?:array{Level1?:array{Arn?:string}, Level2?:array{Arn?:string}, Level3?:array{Arn?:string}, Level4?:array{Arn?:string}, Level5?:array{Arn?:string}}, DeviceInfo?:array{PlatformName?:string, PlatformVersion?:string, OperatingSystem?:string}, Capabilities?:array{Video?:"SEND", ScreenShare?:"SEND"}}, InitiationTimestamp?:int|string|\DateTimeInterface, DisconnectTimestamp?:int|string|\DateTimeInterface, LastUpdateTimestamp?:int|string|\DateTimeInterface, LastPausedTimestamp?:int|string|\DateTimeInterface, LastResumedTimestamp?:int|string|\DateTimeInterface, TotalPauseCount?:int, TotalPauseDurationInSeconds?:int, ScheduledTimestamp?:int|string|\DateTimeInterface, RelatedContactId?:string, WisdomInfo?:array{SessionArn?:string}, CustomerId?:string, CustomerEndpoint?:array{Type?:"TELEPHONE_NUMBER"|"VOIP"|"CONTACT_FLOW"|"CONNECT_PHONENUMBER_ARN"|"EMAIL_ADDRESS", Address?:string, DisplayName?:string}, SystemEndpoint?:array{Type?:"TELEPHONE_NUMBER"|"VOIP"|"CONTACT_FLOW"|"CONNECT_PHONENUMBER_ARN"|"EMAIL_ADDRESS", Address?:string, DisplayName?:string}, QueueTimeAdjustmentSeconds?:int, QueuePriority?:int, Tags?:array<string, string>, ConnectedToSystemTimestamp?:int|string|\DateTimeInterface, RoutingCriteria?:array{Steps?:array<array{Expiry?:array{DurationInSeconds?:int, ExpiryTimestamp?:int|string|\DateTimeInterface}, Expression?:array{AttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}, AndExpression?:array<array{AttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}, AndExpression?:mixed, OrExpression?:array<array{AttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}, AndExpression?:mixed, OrExpression?:mixed, NotAttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}}>, NotAttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}}>, OrExpression?:array<array{AttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}, AndExpression?:array<array{AttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}, AndExpression?:mixed, OrExpression?:mixed, NotAttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}}>, OrExpression?:mixed, NotAttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}}>, NotAttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}}, Status?:"ACTIVE"|"INACTIVE"|"JOINED"|"EXPIRED"}>, ActivationTimestamp?:int|string|\DateTimeInterface, Index?:int}, Customer?:array{DeviceInfo?:array{PlatformName?:string, PlatformVersion?:string, OperatingSystem?:string}, Capabilities?:array{Video?:"SEND", ScreenShare?:"SEND"}}, Campaign?:array{CampaignId?:string}, AnsweringMachineDetectionStatus?:"ANSWERED"|"UNDETECTED"|"ERROR"|"HUMAN_ANSWERED"|"SIT_TONE_DETECTED"|"SIT_TONE_BUSY"|"SIT_TONE_INVALID_NUMBER"|"FAX_MACHINE_DETECTED"|"VOICEMAIL_BEEP"|"VOICEMAIL_NO_BEEP"|"AMD_UNRESOLVED"|"AMD_UNANSWERED"|"AMD_ERROR"|"AMD_NOT_APPLICABLE", CustomerVoiceActivity?:array{GreetingStartTimestamp?:int|string|\DateTimeInterface, GreetingEndTimestamp?:int|string|\DateTimeInterface}, QualityMetrics?:array{Agent?:array{Audio?:array{QualityScore?:float, PotentialQualityIssues?:array<string>}}, Customer?:array{Audio?:array{QualityScore?:float, PotentialQualityIssues?:array<string>}}}, DisconnectDetails?:array{PotentialDisconnectIssue?:string}, AdditionalEmailRecipients?:array{ToList?:array<array{Address?:string, DisplayName?:string}>, CcList?:array<array{Address?:string, DisplayName?:string}>}, SegmentAttributes?:array<string, array{ValueString?:string, ValueMap?:array<string, array{ValueString?:string, ValueMap?:mixed, ValueInteger?:int}>, ValueInteger?:int}>}}>
     */
    public function describeContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, EvaluationId:string} $args
     * @return \AWS\Result<array{Evaluation:array{EvaluationId:string, EvaluationArn:string, Metadata:array{ContactId:string, EvaluatorArn:string, ContactAgentId?:string, Score?:array{Percentage?:float, NotApplicable?:bool, AutomaticFail?:bool}}, Answers:array<string, array{Value?:array{StringValue?:string, NumericValue?:float, NotApplicable?:bool}, SystemSuggestedValue?:array{StringValue?:string, NumericValue?:float, NotApplicable?:bool}}>, Notes:array<string, array{Value?:string}>, Status:"DRAFT"|"SUBMITTED", Scores?:array<string, array{Percentage?:float, NotApplicable?:bool, AutomaticFail?:bool}>, CreatedTime:int|string|\DateTimeInterface, LastModifiedTime:int|string|\DateTimeInterface, Tags?:array<string, string>}, EvaluationForm:array{EvaluationFormVersion:int, EvaluationFormId:string, EvaluationFormArn:string, Title:string, Description?:string, Items:array<array{Section?:array{Title:string, RefId:string, Instructions?:string, Items:mixed, Weight?:float}, Question?:array{Title:string, Instructions?:string, RefId:string, NotApplicableEnabled?:bool, QuestionType:"TEXT"|"SINGLESELECT"|"NUMERIC", QuestionTypeProperties?:array{Numeric?:array{MinValue:int, MaxValue:int, Options?:array<array{MinValue:int, MaxValue:int, Score?:int, AutomaticFail?:bool}>, Automation?:array{PropertyValue?:array{Label:"OVERALL_CUSTOMER_SENTIMENT_SCORE"|"OVERALL_AGENT_SENTIMENT_SCORE"|"NON_TALK_TIME"|"NON_TALK_TIME_PERCENTAGE"|"NUMBER_OF_INTERRUPTIONS"|"CONTACT_DURATION"|"AGENT_INTERACTION_DURATION"|"CUSTOMER_HOLD_TIME"}}}, SingleSelect?:array{Options:array<array{RefId:string, Text:string, Score?:int, AutomaticFail?:bool}>, DisplayAs?:"DROPDOWN"|"RADIO", Automation?:array{Options:array<array{RuleCategory?:array{Category:string, Condition:"PRESENT"|"NOT_PRESENT", OptionRefId:string}}>, DefaultOptionRefId?:string}}}, Weight?:float}}>, ScoringStrategy?:array{Mode:"QUESTION_ONLY"|"SECTION_ONLY", Status:"ENABLED"|"DISABLED"}}}>
     */
    public function describeContactEvaluation(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, EvaluationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Evaluation:array{EvaluationId:string, EvaluationArn:string, Metadata:array{ContactId:string, EvaluatorArn:string, ContactAgentId?:string, Score?:array{Percentage?:float, NotApplicable?:bool, AutomaticFail?:bool}}, Answers:array<string, array{Value?:array{StringValue?:string, NumericValue?:float, NotApplicable?:bool}, SystemSuggestedValue?:array{StringValue?:string, NumericValue?:float, NotApplicable?:bool}}>, Notes:array<string, array{Value?:string}>, Status:"DRAFT"|"SUBMITTED", Scores?:array<string, array{Percentage?:float, NotApplicable?:bool, AutomaticFail?:bool}>, CreatedTime:int|string|\DateTimeInterface, LastModifiedTime:int|string|\DateTimeInterface, Tags?:array<string, string>}, EvaluationForm:array{EvaluationFormVersion:int, EvaluationFormId:string, EvaluationFormArn:string, Title:string, Description?:string, Items:array<array{Section?:array{Title:string, RefId:string, Instructions?:string, Items:mixed, Weight?:float}, Question?:array{Title:string, Instructions?:string, RefId:string, NotApplicableEnabled?:bool, QuestionType:"TEXT"|"SINGLESELECT"|"NUMERIC", QuestionTypeProperties?:array{Numeric?:array{MinValue:int, MaxValue:int, Options?:array<array{MinValue:int, MaxValue:int, Score?:int, AutomaticFail?:bool}>, Automation?:array{PropertyValue?:array{Label:"OVERALL_CUSTOMER_SENTIMENT_SCORE"|"OVERALL_AGENT_SENTIMENT_SCORE"|"NON_TALK_TIME"|"NON_TALK_TIME_PERCENTAGE"|"NUMBER_OF_INTERRUPTIONS"|"CONTACT_DURATION"|"AGENT_INTERACTION_DURATION"|"CUSTOMER_HOLD_TIME"}}}, SingleSelect?:array{Options:array<array{RefId:string, Text:string, Score?:int, AutomaticFail?:bool}>, DisplayAs?:"DROPDOWN"|"RADIO", Automation?:array{Options:array<array{RuleCategory?:array{Category:string, Condition:"PRESENT"|"NOT_PRESENT", OptionRefId:string}}>, DefaultOptionRefId?:string}}}, Weight?:float}}>, ScoringStrategy?:array{Mode:"QUESTION_ONLY"|"SECTION_ONLY", Status:"ENABLED"|"DISABLED"}}}>
     */
    public function describeContactEvaluationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ContactFlowId:string} $args
     * @return \AWS\Result<array{ContactFlow?:array{Arn?:string, Id?:string, Name?:string, Type?:"CONTACT_FLOW"|"CUSTOMER_QUEUE"|"CUSTOMER_HOLD"|"CUSTOMER_WHISPER"|"AGENT_HOLD"|"AGENT_WHISPER"|"OUTBOUND_WHISPER"|"AGENT_TRANSFER"|"QUEUE_TRANSFER"|"CAMPAIGN", State?:"ACTIVE"|"ARCHIVED", Status?:"PUBLISHED"|"SAVED", Description?:string, Content?:string, Tags?:array<string, string>, FlowContentSha256?:string, Version?:int, VersionDescription?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}}>
     */
    public function describeContactFlow(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ContactFlowId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContactFlow?:array{Arn?:string, Id?:string, Name?:string, Type?:"CONTACT_FLOW"|"CUSTOMER_QUEUE"|"CUSTOMER_HOLD"|"CUSTOMER_WHISPER"|"AGENT_HOLD"|"AGENT_WHISPER"|"OUTBOUND_WHISPER"|"AGENT_TRANSFER"|"QUEUE_TRANSFER"|"CAMPAIGN", State?:"ACTIVE"|"ARCHIVED", Status?:"PUBLISHED"|"SAVED", Description?:string, Content?:string, Tags?:array<string, string>, FlowContentSha256?:string, Version?:int, VersionDescription?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}}>
     */
    public function describeContactFlowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ContactFlowModuleId:string} $args
     * @return \AWS\Result<array{ContactFlowModule?:array{Arn?:string, Id?:string, Name?:string, Content?:string, Description?:string, State?:"ACTIVE"|"ARCHIVED", Status?:"PUBLISHED"|"SAVED", Tags?:array<string, string>}}>
     */
    public function describeContactFlowModule(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ContactFlowModuleId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContactFlowModule?:array{Arn?:string, Id?:string, Name?:string, Content?:string, Description?:string, State?:"ACTIVE"|"ARCHIVED", Status?:"PUBLISHED"|"SAVED", Tags?:array<string, string>}}>
     */
    public function describeContactFlowModuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, EmailAddressId:string} $args
     * @return \AWS\Result<array{EmailAddressId?:string, EmailAddressArn?:string, EmailAddress?:string, DisplayName?:string, Description?:string, CreateTimestamp?:string, ModifiedTimestamp?:string, Tags?:array<string, string>}>
     */
    public function describeEmailAddress(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, EmailAddressId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EmailAddressId?:string, EmailAddressArn?:string, EmailAddress?:string, DisplayName?:string, Description?:string, CreateTimestamp?:string, ModifiedTimestamp?:string, Tags?:array<string, string>}>
     */
    public function describeEmailAddressAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, EvaluationFormId:string, EvaluationFormVersion?:int} $args
     * @return \AWS\Result<array{EvaluationForm:array{EvaluationFormId:string, EvaluationFormVersion:int, Locked:bool, EvaluationFormArn:string, Title:string, Description?:string, Status:"DRAFT"|"ACTIVE", Items:array<array{Section?:array{Title:string, RefId:string, Instructions?:string, Items:mixed, Weight?:float}, Question?:array{Title:string, Instructions?:string, RefId:string, NotApplicableEnabled?:bool, QuestionType:"TEXT"|"SINGLESELECT"|"NUMERIC", QuestionTypeProperties?:array{Numeric?:array{MinValue:int, MaxValue:int, Options?:array<array{MinValue:int, MaxValue:int, Score?:int, AutomaticFail?:bool}>, Automation?:array{PropertyValue?:array{Label:"OVERALL_CUSTOMER_SENTIMENT_SCORE"|"OVERALL_AGENT_SENTIMENT_SCORE"|"NON_TALK_TIME"|"NON_TALK_TIME_PERCENTAGE"|"NUMBER_OF_INTERRUPTIONS"|"CONTACT_DURATION"|"AGENT_INTERACTION_DURATION"|"CUSTOMER_HOLD_TIME"}}}, SingleSelect?:array{Options:array<array{RefId:string, Text:string, Score?:int, AutomaticFail?:bool}>, DisplayAs?:"DROPDOWN"|"RADIO", Automation?:array{Options:array<array{RuleCategory?:array{Category:string, Condition:"PRESENT"|"NOT_PRESENT", OptionRefId:string}}>, DefaultOptionRefId?:string}}}, Weight?:float}}>, ScoringStrategy?:array{Mode:"QUESTION_ONLY"|"SECTION_ONLY", Status:"ENABLED"|"DISABLED"}, CreatedTime:int|string|\DateTimeInterface, CreatedBy:string, LastModifiedTime:int|string|\DateTimeInterface, LastModifiedBy:string, Tags?:array<string, string>}}>
     */
    public function describeEvaluationForm(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, EvaluationFormId:string, EvaluationFormVersion?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{EvaluationForm:array{EvaluationFormId:string, EvaluationFormVersion:int, Locked:bool, EvaluationFormArn:string, Title:string, Description?:string, Status:"DRAFT"|"ACTIVE", Items:array<array{Section?:array{Title:string, RefId:string, Instructions?:string, Items:mixed, Weight?:float}, Question?:array{Title:string, Instructions?:string, RefId:string, NotApplicableEnabled?:bool, QuestionType:"TEXT"|"SINGLESELECT"|"NUMERIC", QuestionTypeProperties?:array{Numeric?:array{MinValue:int, MaxValue:int, Options?:array<array{MinValue:int, MaxValue:int, Score?:int, AutomaticFail?:bool}>, Automation?:array{PropertyValue?:array{Label:"OVERALL_CUSTOMER_SENTIMENT_SCORE"|"OVERALL_AGENT_SENTIMENT_SCORE"|"NON_TALK_TIME"|"NON_TALK_TIME_PERCENTAGE"|"NUMBER_OF_INTERRUPTIONS"|"CONTACT_DURATION"|"AGENT_INTERACTION_DURATION"|"CUSTOMER_HOLD_TIME"}}}, SingleSelect?:array{Options:array<array{RefId:string, Text:string, Score?:int, AutomaticFail?:bool}>, DisplayAs?:"DROPDOWN"|"RADIO", Automation?:array{Options:array<array{RuleCategory?:array{Category:string, Condition:"PRESENT"|"NOT_PRESENT", OptionRefId:string}}>, DefaultOptionRefId?:string}}}, Weight?:float}}>, ScoringStrategy?:array{Mode:"QUESTION_ONLY"|"SECTION_ONLY", Status:"ENABLED"|"DISABLED"}, CreatedTime:int|string|\DateTimeInterface, CreatedBy:string, LastModifiedTime:int|string|\DateTimeInterface, LastModifiedBy:string, Tags?:array<string, string>}}>
     */
    public function describeEvaluationFormAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, HoursOfOperationId:string} $args
     * @return \AWS\Result<array{HoursOfOperation?:array{HoursOfOperationId?:string, HoursOfOperationArn?:string, Name?:string, Description?:string, TimeZone?:string, Config?:array<array{Day:"SUNDAY"|"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY", StartTime:array{Hours:int, Minutes:int}, EndTime:array{Hours:int, Minutes:int}}>, Tags?:array<string, string>, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}}>
     */
    public function describeHoursOfOperation(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, HoursOfOperationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{HoursOfOperation?:array{HoursOfOperationId?:string, HoursOfOperationArn?:string, Name?:string, Description?:string, TimeZone?:string, Config?:array<array{Day:"SUNDAY"|"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY", StartTime:array{Hours:int, Minutes:int}, EndTime:array{Hours:int, Minutes:int}}>, Tags?:array<string, string>, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}}>
     */
    public function describeHoursOfOperationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, HoursOfOperationId:string, HoursOfOperationOverrideId:string} $args
     * @return \AWS\Result<array{HoursOfOperationOverride?:array{HoursOfOperationOverrideId?:string, HoursOfOperationId?:string, HoursOfOperationArn?:string, Name?:string, Description?:string, Config?:array<array{Day?:"SUNDAY"|"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY", StartTime?:array{Hours:int, Minutes:int}, EndTime?:array{Hours:int, Minutes:int}}>, EffectiveFrom?:string, EffectiveTill?:string}}>
     */
    public function describeHoursOfOperationOverride(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, HoursOfOperationId:string, HoursOfOperationOverrideId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{HoursOfOperationOverride?:array{HoursOfOperationOverrideId?:string, HoursOfOperationId?:string, HoursOfOperationArn?:string, Name?:string, Description?:string, Config?:array<array{Day?:"SUNDAY"|"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY", StartTime?:array{Hours:int, Minutes:int}, EndTime?:array{Hours:int, Minutes:int}}>, EffectiveFrom?:string, EffectiveTill?:string}}>
     */
    public function describeHoursOfOperationOverrideAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string} $args
     * @return \AWS\Result<array{Instance?:array{Id?:string, Arn?:string, IdentityManagementType?:"SAML"|"CONNECT_MANAGED"|"EXISTING_DIRECTORY", InstanceAlias?:string, CreatedTime?:int|string|\DateTimeInterface, ServiceRole?:string, InstanceStatus?:"CREATION_IN_PROGRESS"|"ACTIVE"|"CREATION_FAILED", StatusReason?:array{Message?:string}, InboundCallsEnabled?:bool, OutboundCallsEnabled?:bool, InstanceAccessUrl?:string, Tags?:array<string, string>}, ReplicationConfiguration?:array{ReplicationStatusSummaryList?:array<array{Region?:string, ReplicationStatus?:"INSTANCE_REPLICATION_COMPLETE"|"INSTANCE_REPLICATION_IN_PROGRESS"|"INSTANCE_REPLICATION_FAILED"|"INSTANCE_REPLICA_DELETING"|"INSTANCE_REPLICATION_DELETION_FAILED"|"RESOURCE_REPLICATION_NOT_STARTED", ReplicationStatusReason?:string}>, SourceRegion?:string, GlobalSignInEndpoint?:string}}>
     */
    public function describeInstance(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Instance?:array{Id?:string, Arn?:string, IdentityManagementType?:"SAML"|"CONNECT_MANAGED"|"EXISTING_DIRECTORY", InstanceAlias?:string, CreatedTime?:int|string|\DateTimeInterface, ServiceRole?:string, InstanceStatus?:"CREATION_IN_PROGRESS"|"ACTIVE"|"CREATION_FAILED", StatusReason?:array{Message?:string}, InboundCallsEnabled?:bool, OutboundCallsEnabled?:bool, InstanceAccessUrl?:string, Tags?:array<string, string>}, ReplicationConfiguration?:array{ReplicationStatusSummaryList?:array<array{Region?:string, ReplicationStatus?:"INSTANCE_REPLICATION_COMPLETE"|"INSTANCE_REPLICATION_IN_PROGRESS"|"INSTANCE_REPLICATION_FAILED"|"INSTANCE_REPLICA_DELETING"|"INSTANCE_REPLICATION_DELETION_FAILED"|"RESOURCE_REPLICATION_NOT_STARTED", ReplicationStatusReason?:string}>, SourceRegion?:string, GlobalSignInEndpoint?:string}}>
     */
    public function describeInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, AttributeType:"INBOUND_CALLS"|"OUTBOUND_CALLS"|"CONTACTFLOW_LOGS"|"CONTACT_LENS"|"AUTO_RESOLVE_BEST_VOICES"|"USE_CUSTOM_TTS_VOICES"|"EARLY_MEDIA"|"MULTI_PARTY_CONFERENCE"|"HIGH_VOLUME_OUTBOUND"|"ENHANCED_CONTACT_MONITORING"|"ENHANCED_CHAT_MONITORING"|"MULTI_PARTY_CHAT_CONFERENCE"} $args
     * @return \AWS\Result<array{Attribute?:array{AttributeType?:"INBOUND_CALLS"|"OUTBOUND_CALLS"|"CONTACTFLOW_LOGS"|"CONTACT_LENS"|"AUTO_RESOLVE_BEST_VOICES"|"USE_CUSTOM_TTS_VOICES"|"EARLY_MEDIA"|"MULTI_PARTY_CONFERENCE"|"HIGH_VOLUME_OUTBOUND"|"ENHANCED_CONTACT_MONITORING"|"ENHANCED_CHAT_MONITORING"|"MULTI_PARTY_CHAT_CONFERENCE", Value?:string}}>
     */
    public function describeInstanceAttribute(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, AttributeType:"INBOUND_CALLS"|"OUTBOUND_CALLS"|"CONTACTFLOW_LOGS"|"CONTACT_LENS"|"AUTO_RESOLVE_BEST_VOICES"|"USE_CUSTOM_TTS_VOICES"|"EARLY_MEDIA"|"MULTI_PARTY_CONFERENCE"|"HIGH_VOLUME_OUTBOUND"|"ENHANCED_CONTACT_MONITORING"|"ENHANCED_CHAT_MONITORING"|"MULTI_PARTY_CHAT_CONFERENCE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attribute?:array{AttributeType?:"INBOUND_CALLS"|"OUTBOUND_CALLS"|"CONTACTFLOW_LOGS"|"CONTACT_LENS"|"AUTO_RESOLVE_BEST_VOICES"|"USE_CUSTOM_TTS_VOICES"|"EARLY_MEDIA"|"MULTI_PARTY_CONFERENCE"|"HIGH_VOLUME_OUTBOUND"|"ENHANCED_CONTACT_MONITORING"|"ENHANCED_CHAT_MONITORING"|"MULTI_PARTY_CHAT_CONFERENCE", Value?:string}}>
     */
    public function describeInstanceAttributeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, AssociationId:string, ResourceType:"CHAT_TRANSCRIPTS"|"CALL_RECORDINGS"|"SCHEDULED_REPORTS"|"MEDIA_STREAMS"|"CONTACT_TRACE_RECORDS"|"AGENT_EVENTS"|"REAL_TIME_CONTACT_ANALYSIS_SEGMENTS"|"ATTACHMENTS"|"CONTACT_EVALUATIONS"|"SCREEN_RECORDINGS"|"REAL_TIME_CONTACT_ANALYSIS_CHAT_SEGMENTS"|"REAL_TIME_CONTACT_ANALYSIS_VOICE_SEGMENTS"|"EMAIL_MESSAGES"} $args
     * @return \AWS\Result<array{StorageConfig?:array{AssociationId?:string, StorageType:"S3"|"KINESIS_VIDEO_STREAM"|"KINESIS_STREAM"|"KINESIS_FIREHOSE", S3Config?:array{BucketName:string, BucketPrefix:string, EncryptionConfig?:array{EncryptionType:"KMS", KeyId:string}}, KinesisVideoStreamConfig?:array{Prefix:string, RetentionPeriodHours:int, EncryptionConfig:array{EncryptionType:"KMS", KeyId:string}}, KinesisStreamConfig?:array{StreamArn:string}, KinesisFirehoseConfig?:array{FirehoseArn:string}}}>
     */
    public function describeInstanceStorageConfig(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, AssociationId:string, ResourceType:"CHAT_TRANSCRIPTS"|"CALL_RECORDINGS"|"SCHEDULED_REPORTS"|"MEDIA_STREAMS"|"CONTACT_TRACE_RECORDS"|"AGENT_EVENTS"|"REAL_TIME_CONTACT_ANALYSIS_SEGMENTS"|"ATTACHMENTS"|"CONTACT_EVALUATIONS"|"SCREEN_RECORDINGS"|"REAL_TIME_CONTACT_ANALYSIS_CHAT_SEGMENTS"|"REAL_TIME_CONTACT_ANALYSIS_VOICE_SEGMENTS"|"EMAIL_MESSAGES"} $args
     * @return \GuzzleHttp\Promise\Promise<array{StorageConfig?:array{AssociationId?:string, StorageType:"S3"|"KINESIS_VIDEO_STREAM"|"KINESIS_STREAM"|"KINESIS_FIREHOSE", S3Config?:array{BucketName:string, BucketPrefix:string, EncryptionConfig?:array{EncryptionType:"KMS", KeyId:string}}, KinesisVideoStreamConfig?:array{Prefix:string, RetentionPeriodHours:int, EncryptionConfig:array{EncryptionType:"KMS", KeyId:string}}, KinesisStreamConfig?:array{StreamArn:string}, KinesisFirehoseConfig?:array{FirehoseArn:string}}}>
     */
    public function describeInstanceStorageConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PhoneNumberId:string} $args
     * @return \AWS\Result<array{ClaimedPhoneNumberSummary?:array{PhoneNumberId?:string, PhoneNumberArn?:string, PhoneNumber?:string, PhoneNumberCountryCode?:"AF"|"AL"|"DZ"|"AS"|"AD"|"AO"|"AI"|"AQ"|"AG"|"AR"|"AM"|"AW"|"AU"|"AT"|"AZ"|"BS"|"BH"|"BD"|"BB"|"BY"|"BE"|"BZ"|"BJ"|"BM"|"BT"|"BO"|"BA"|"BW"|"BR"|"IO"|"VG"|"BN"|"BG"|"BF"|"BI"|"KH"|"CM"|"CA"|"CV"|"KY"|"CF"|"TD"|"CL"|"CN"|"CX"|"CC"|"CO"|"KM"|"CK"|"CR"|"HR"|"CU"|"CW"|"CY"|"CZ"|"CD"|"DK"|"DJ"|"DM"|"DO"|"TL"|"EC"|"EG"|"SV"|"GQ"|"ER"|"EE"|"ET"|"FK"|"FO"|"FJ"|"FI"|"FR"|"PF"|"GA"|"GM"|"GE"|"DE"|"GH"|"GI"|"GR"|"GL"|"GD"|"GU"|"GT"|"GG"|"GN"|"GW"|"GY"|"HT"|"HN"|"HK"|"HU"|"IS"|"IN"|"ID"|"IR"|"IQ"|"IE"|"IM"|"IL"|"IT"|"CI"|"JM"|"JP"|"JE"|"JO"|"KZ"|"KE"|"KI"|"KW"|"KG"|"LA"|"LV"|"LB"|"LS"|"LR"|"LY"|"LI"|"LT"|"LU"|"MO"|"MK"|"MG"|"MW"|"MY"|"MV"|"ML"|"MT"|"MH"|"MR"|"MU"|"YT"|"MX"|"FM"|"MD"|"MC"|"MN"|"ME"|"MS"|"MA"|"MZ"|"MM"|"NA"|"NR"|"NP"|"NL"|"AN"|"NC"|"NZ"|"NI"|"NE"|"NG"|"NU"|"KP"|"MP"|"NO"|"OM"|"PK"|"PW"|"PA"|"PG"|"PY"|"PE"|"PH"|"PN"|"PL"|"PT"|"PR"|"QA"|"CG"|"RE"|"RO"|"RU"|"RW"|"BL"|"SH"|"KN"|"LC"|"MF"|"PM"|"VC"|"WS"|"SM"|"ST"|"SA"|"SN"|"RS"|"SC"|"SL"|"SG"|"SX"|"SK"|"SI"|"SB"|"SO"|"ZA"|"KR"|"ES"|"LK"|"SD"|"SR"|"SJ"|"SZ"|"SE"|"CH"|"SY"|"TW"|"TJ"|"TZ"|"TH"|"TG"|"TK"|"TO"|"TT"|"TN"|"TR"|"TM"|"TC"|"TV"|"VI"|"UG"|"UA"|"AE"|"GB"|"US"|"UY"|"UZ"|"VU"|"VA"|"VE"|"VN"|"WF"|"EH"|"YE"|"ZM"|"ZW", PhoneNumberType?:"TOLL_FREE"|"DID"|"UIFN"|"SHARED"|"THIRD_PARTY_TF"|"THIRD_PARTY_DID"|"SHORT_CODE", PhoneNumberDescription?:string, TargetArn?:string, InstanceId?:string, Tags?:array<string, string>, PhoneNumberStatus?:array{Status?:"CLAIMED"|"IN_PROGRESS"|"FAILED", Message?:string}, SourcePhoneNumberArn?:string}}>
     */
    public function describePhoneNumber(array $args): \AWS\Result { }

    /**
     * @param array{PhoneNumberId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ClaimedPhoneNumberSummary?:array{PhoneNumberId?:string, PhoneNumberArn?:string, PhoneNumber?:string, PhoneNumberCountryCode?:"AF"|"AL"|"DZ"|"AS"|"AD"|"AO"|"AI"|"AQ"|"AG"|"AR"|"AM"|"AW"|"AU"|"AT"|"AZ"|"BS"|"BH"|"BD"|"BB"|"BY"|"BE"|"BZ"|"BJ"|"BM"|"BT"|"BO"|"BA"|"BW"|"BR"|"IO"|"VG"|"BN"|"BG"|"BF"|"BI"|"KH"|"CM"|"CA"|"CV"|"KY"|"CF"|"TD"|"CL"|"CN"|"CX"|"CC"|"CO"|"KM"|"CK"|"CR"|"HR"|"CU"|"CW"|"CY"|"CZ"|"CD"|"DK"|"DJ"|"DM"|"DO"|"TL"|"EC"|"EG"|"SV"|"GQ"|"ER"|"EE"|"ET"|"FK"|"FO"|"FJ"|"FI"|"FR"|"PF"|"GA"|"GM"|"GE"|"DE"|"GH"|"GI"|"GR"|"GL"|"GD"|"GU"|"GT"|"GG"|"GN"|"GW"|"GY"|"HT"|"HN"|"HK"|"HU"|"IS"|"IN"|"ID"|"IR"|"IQ"|"IE"|"IM"|"IL"|"IT"|"CI"|"JM"|"JP"|"JE"|"JO"|"KZ"|"KE"|"KI"|"KW"|"KG"|"LA"|"LV"|"LB"|"LS"|"LR"|"LY"|"LI"|"LT"|"LU"|"MO"|"MK"|"MG"|"MW"|"MY"|"MV"|"ML"|"MT"|"MH"|"MR"|"MU"|"YT"|"MX"|"FM"|"MD"|"MC"|"MN"|"ME"|"MS"|"MA"|"MZ"|"MM"|"NA"|"NR"|"NP"|"NL"|"AN"|"NC"|"NZ"|"NI"|"NE"|"NG"|"NU"|"KP"|"MP"|"NO"|"OM"|"PK"|"PW"|"PA"|"PG"|"PY"|"PE"|"PH"|"PN"|"PL"|"PT"|"PR"|"QA"|"CG"|"RE"|"RO"|"RU"|"RW"|"BL"|"SH"|"KN"|"LC"|"MF"|"PM"|"VC"|"WS"|"SM"|"ST"|"SA"|"SN"|"RS"|"SC"|"SL"|"SG"|"SX"|"SK"|"SI"|"SB"|"SO"|"ZA"|"KR"|"ES"|"LK"|"SD"|"SR"|"SJ"|"SZ"|"SE"|"CH"|"SY"|"TW"|"TJ"|"TZ"|"TH"|"TG"|"TK"|"TO"|"TT"|"TN"|"TR"|"TM"|"TC"|"TV"|"VI"|"UG"|"UA"|"AE"|"GB"|"US"|"UY"|"UZ"|"VU"|"VA"|"VE"|"VN"|"WF"|"EH"|"YE"|"ZM"|"ZW", PhoneNumberType?:"TOLL_FREE"|"DID"|"UIFN"|"SHARED"|"THIRD_PARTY_TF"|"THIRD_PARTY_DID"|"SHORT_CODE", PhoneNumberDescription?:string, TargetArn?:string, InstanceId?:string, Tags?:array<string, string>, PhoneNumberStatus?:array{Status?:"CLAIMED"|"IN_PROGRESS"|"FAILED", Message?:string}, SourcePhoneNumberArn?:string}}>
     */
    public function describePhoneNumberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, Name:string} $args
     * @return \AWS\Result<array{PredefinedAttribute?:array{Name?:string, Values?:array{StringList?:array<string>}, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}}>
     */
    public function describePredefinedAttribute(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PredefinedAttribute?:array{Name?:string, Values?:array{StringList?:array<string>}, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}}>
     */
    public function describePredefinedAttributeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, PromptId:string} $args
     * @return \AWS\Result<array{Prompt?:array{PromptARN?:string, PromptId?:string, Name?:string, Description?:string, Tags?:array<string, string>, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}}>
     */
    public function describePrompt(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, PromptId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Prompt?:array{PromptARN?:string, PromptId?:string, Name?:string, Description?:string, Tags?:array<string, string>, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}}>
     */
    public function describePromptAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, QueueId:string} $args
     * @return \AWS\Result<array{Queue?:array{Name?:string, QueueArn?:string, QueueId?:string, Description?:string, OutboundCallerConfig?:array{OutboundCallerIdName?:string, OutboundCallerIdNumberId?:string, OutboundFlowId?:string}, OutboundEmailConfig?:array{OutboundEmailAddressId?:string}, HoursOfOperationId?:string, MaxContacts?:int, Status?:"ENABLED"|"DISABLED", Tags?:array<string, string>, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}}>
     */
    public function describeQueue(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, QueueId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Queue?:array{Name?:string, QueueArn?:string, QueueId?:string, Description?:string, OutboundCallerConfig?:array{OutboundCallerIdName?:string, OutboundCallerIdNumberId?:string, OutboundFlowId?:string}, OutboundEmailConfig?:array{OutboundEmailAddressId?:string}, HoursOfOperationId?:string, MaxContacts?:int, Status?:"ENABLED"|"DISABLED", Tags?:array<string, string>, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}}>
     */
    public function describeQueueAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, QuickConnectId:string} $args
     * @return \AWS\Result<array{QuickConnect?:array{QuickConnectARN?:string, QuickConnectId?:string, Name?:string, Description?:string, QuickConnectConfig?:array{QuickConnectType:"USER"|"QUEUE"|"PHONE_NUMBER", UserConfig?:array{UserId:string, ContactFlowId:string}, QueueConfig?:array{QueueId:string, ContactFlowId:string}, PhoneConfig?:array{PhoneNumber:string}}, Tags?:array<string, string>, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}}>
     */
    public function describeQuickConnect(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, QuickConnectId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{QuickConnect?:array{QuickConnectARN?:string, QuickConnectId?:string, Name?:string, Description?:string, QuickConnectConfig?:array{QuickConnectType:"USER"|"QUEUE"|"PHONE_NUMBER", UserConfig?:array{UserId:string, ContactFlowId:string}, QueueConfig?:array{QueueId:string, ContactFlowId:string}, PhoneConfig?:array{PhoneNumber:string}}, Tags?:array<string, string>, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}}>
     */
    public function describeQuickConnectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, RoutingProfileId:string} $args
     * @return \AWS\Result<array{RoutingProfile?:array{InstanceId?:string, Name?:string, RoutingProfileArn?:string, RoutingProfileId?:string, Description?:string, MediaConcurrencies?:array<array{Channel:"VOICE"|"CHAT"|"TASK"|"EMAIL", Concurrency:int, CrossChannelBehavior?:array{BehaviorType:"ROUTE_CURRENT_CHANNEL_ONLY"|"ROUTE_ANY_CHANNEL"}}>, DefaultOutboundQueueId?:string, Tags?:array<string, string>, NumberOfAssociatedQueues?:int, NumberOfAssociatedUsers?:int, AgentAvailabilityTimer?:"TIME_SINCE_LAST_ACTIVITY"|"TIME_SINCE_LAST_INBOUND", LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string, IsDefault?:bool, AssociatedQueueIds?:array<string>}}>
     */
    public function describeRoutingProfile(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, RoutingProfileId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RoutingProfile?:array{InstanceId?:string, Name?:string, RoutingProfileArn?:string, RoutingProfileId?:string, Description?:string, MediaConcurrencies?:array<array{Channel:"VOICE"|"CHAT"|"TASK"|"EMAIL", Concurrency:int, CrossChannelBehavior?:array{BehaviorType:"ROUTE_CURRENT_CHANNEL_ONLY"|"ROUTE_ANY_CHANNEL"}}>, DefaultOutboundQueueId?:string, Tags?:array<string, string>, NumberOfAssociatedQueues?:int, NumberOfAssociatedUsers?:int, AgentAvailabilityTimer?:"TIME_SINCE_LAST_ACTIVITY"|"TIME_SINCE_LAST_INBOUND", LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string, IsDefault?:bool, AssociatedQueueIds?:array<string>}}>
     */
    public function describeRoutingProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, RuleId:string} $args
     * @return \AWS\Result<array{Rule:array{Name:string, RuleId:string, RuleArn:string, TriggerEventSource:array{EventSourceName:"OnPostCallAnalysisAvailable"|"OnRealTimeCallAnalysisAvailable"|"OnRealTimeChatAnalysisAvailable"|"OnPostChatAnalysisAvailable"|"OnZendeskTicketCreate"|"OnZendeskTicketStatusUpdate"|"OnSalesforceCaseCreate"|"OnContactEvaluationSubmit"|"OnMetricDataUpdate"|"OnCaseCreate"|"OnCaseUpdate", IntegrationAssociationId?:string}, Function:string, Actions:array<array{ActionType:"CREATE_TASK"|"ASSIGN_CONTACT_CATEGORY"|"GENERATE_EVENTBRIDGE_EVENT"|"SEND_NOTIFICATION"|"CREATE_CASE"|"UPDATE_CASE"|"END_ASSOCIATED_TASKS"|"SUBMIT_AUTO_EVALUATION", TaskAction?:array{Name:string, Description?:string, ContactFlowId:string, References?:array<string, array{Value?:string, Type:"URL"|"ATTACHMENT"|"CONTACT_ANALYSIS"|"NUMBER"|"STRING"|"DATE"|"EMAIL"|"EMAIL_MESSAGE", Status?:"AVAILABLE"|"DELETED"|"APPROVED"|"REJECTED"|"PROCESSING"|"FAILED", Arn?:string, StatusReason?:string}>}, EventBridgeAction?:array{Name:string}, AssignContactCategoryAction?:array{}, SendNotificationAction?:array{DeliveryMethod:"EMAIL", Subject?:string, Content:string, ContentType:"PLAIN_TEXT", Recipient:array{UserTags?:array<string, string>, UserIds?:array<string>}}, CreateCaseAction?:array{Fields:array<array{Id:string, Value:array{BooleanValue?:bool, DoubleValue?:float, EmptyValue?:array{}, StringValue?:string}}>, TemplateId:string}, UpdateCaseAction?:array{Fields:array<array{Id:string, Value:array{BooleanValue?:bool, DoubleValue?:float, EmptyValue?:array{}, StringValue?:string}}>}, EndAssociatedTasksAction?:array{}, SubmitAutoEvaluationAction?:array{EvaluationFormId:string}}>, PublishStatus:"DRAFT"|"PUBLISHED", CreatedTime:int|string|\DateTimeInterface, LastUpdatedTime:int|string|\DateTimeInterface, LastUpdatedBy:string, Tags?:array<string, string>}}>
     */
    public function describeRule(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, RuleId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Rule:array{Name:string, RuleId:string, RuleArn:string, TriggerEventSource:array{EventSourceName:"OnPostCallAnalysisAvailable"|"OnRealTimeCallAnalysisAvailable"|"OnRealTimeChatAnalysisAvailable"|"OnPostChatAnalysisAvailable"|"OnZendeskTicketCreate"|"OnZendeskTicketStatusUpdate"|"OnSalesforceCaseCreate"|"OnContactEvaluationSubmit"|"OnMetricDataUpdate"|"OnCaseCreate"|"OnCaseUpdate", IntegrationAssociationId?:string}, Function:string, Actions:array<array{ActionType:"CREATE_TASK"|"ASSIGN_CONTACT_CATEGORY"|"GENERATE_EVENTBRIDGE_EVENT"|"SEND_NOTIFICATION"|"CREATE_CASE"|"UPDATE_CASE"|"END_ASSOCIATED_TASKS"|"SUBMIT_AUTO_EVALUATION", TaskAction?:array{Name:string, Description?:string, ContactFlowId:string, References?:array<string, array{Value?:string, Type:"URL"|"ATTACHMENT"|"CONTACT_ANALYSIS"|"NUMBER"|"STRING"|"DATE"|"EMAIL"|"EMAIL_MESSAGE", Status?:"AVAILABLE"|"DELETED"|"APPROVED"|"REJECTED"|"PROCESSING"|"FAILED", Arn?:string, StatusReason?:string}>}, EventBridgeAction?:array{Name:string}, AssignContactCategoryAction?:array{}, SendNotificationAction?:array{DeliveryMethod:"EMAIL", Subject?:string, Content:string, ContentType:"PLAIN_TEXT", Recipient:array{UserTags?:array<string, string>, UserIds?:array<string>}}, CreateCaseAction?:array{Fields:array<array{Id:string, Value:array{BooleanValue?:bool, DoubleValue?:float, EmptyValue?:array{}, StringValue?:string}}>, TemplateId:string}, UpdateCaseAction?:array{Fields:array<array{Id:string, Value:array{BooleanValue?:bool, DoubleValue?:float, EmptyValue?:array{}, StringValue?:string}}>}, EndAssociatedTasksAction?:array{}, SubmitAutoEvaluationAction?:array{EvaluationFormId:string}}>, PublishStatus:"DRAFT"|"PUBLISHED", CreatedTime:int|string|\DateTimeInterface, LastUpdatedTime:int|string|\DateTimeInterface, LastUpdatedBy:string, Tags?:array<string, string>}}>
     */
    public function describeRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SecurityProfileId:string, InstanceId:string} $args
     * @return \AWS\Result<array{SecurityProfile?:array{Id?:string, OrganizationResourceId?:string, Arn?:string, SecurityProfileName?:string, Description?:string, Tags?:array<string, string>, AllowedAccessControlTags?:array<string, string>, TagRestrictedResources?:array<string>, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string, HierarchyRestrictedResources?:array<string>, AllowedAccessControlHierarchyGroupId?:string}}>
     */
    public function describeSecurityProfile(array $args): \AWS\Result { }

    /**
     * @param array{SecurityProfileId:string, InstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SecurityProfile?:array{Id?:string, OrganizationResourceId?:string, Arn?:string, SecurityProfileName?:string, Description?:string, Tags?:array<string, string>, AllowedAccessControlTags?:array<string, string>, TagRestrictedResources?:array<string>, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string, HierarchyRestrictedResources?:array<string>, AllowedAccessControlHierarchyGroupId?:string}}>
     */
    public function describeSecurityProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrafficDistributionGroupId:string} $args
     * @return \AWS\Result<array{TrafficDistributionGroup?:array{Id?:string, Arn?:string, Name?:string, Description?:string, InstanceArn?:string, Status?:"CREATION_IN_PROGRESS"|"ACTIVE"|"CREATION_FAILED"|"PENDING_DELETION"|"DELETION_FAILED"|"UPDATE_IN_PROGRESS", Tags?:array<string, string>, IsDefault?:bool}}>
     */
    public function describeTrafficDistributionGroup(array $args): \AWS\Result { }

    /**
     * @param array{TrafficDistributionGroupId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TrafficDistributionGroup?:array{Id?:string, Arn?:string, Name?:string, Description?:string, InstanceArn?:string, Status?:"CREATION_IN_PROGRESS"|"ACTIVE"|"CREATION_FAILED"|"PENDING_DELETION"|"DELETION_FAILED"|"UPDATE_IN_PROGRESS", Tags?:array<string, string>, IsDefault?:bool}}>
     */
    public function describeTrafficDistributionGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserId:string, InstanceId:string} $args
     * @return \AWS\Result<array{User?:array{Id?:string, Arn?:string, Username?:string, IdentityInfo?:array{FirstName?:string, LastName?:string, Email?:string, SecondaryEmail?:string, Mobile?:string}, PhoneConfig?:array{PhoneType:"SOFT_PHONE"|"DESK_PHONE", AutoAccept?:bool, AfterContactWorkTimeLimit?:int, DeskPhoneNumber?:string}, DirectoryUserId?:string, SecurityProfileIds?:array<string>, RoutingProfileId?:string, HierarchyGroupId?:string, Tags?:array<string, string>, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}}>
     */
    public function describeUser(array $args): \AWS\Result { }

    /**
     * @param array{UserId:string, InstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{User?:array{Id?:string, Arn?:string, Username?:string, IdentityInfo?:array{FirstName?:string, LastName?:string, Email?:string, SecondaryEmail?:string, Mobile?:string}, PhoneConfig?:array{PhoneType:"SOFT_PHONE"|"DESK_PHONE", AutoAccept?:bool, AfterContactWorkTimeLimit?:int, DeskPhoneNumber?:string}, DirectoryUserId?:string, SecurityProfileIds?:array<string>, RoutingProfileId?:string, HierarchyGroupId?:string, Tags?:array<string, string>, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}}>
     */
    public function describeUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HierarchyGroupId:string, InstanceId:string} $args
     * @return \AWS\Result<array{HierarchyGroup?:array{Id?:string, Arn?:string, Name?:string, LevelId?:string, HierarchyPath?:array{LevelOne?:array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}, LevelTwo?:array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}, LevelThree?:array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}, LevelFour?:array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}, LevelFive?:array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}}, Tags?:array<string, string>, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}}>
     */
    public function describeUserHierarchyGroup(array $args): \AWS\Result { }

    /**
     * @param array{HierarchyGroupId:string, InstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{HierarchyGroup?:array{Id?:string, Arn?:string, Name?:string, LevelId?:string, HierarchyPath?:array{LevelOne?:array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}, LevelTwo?:array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}, LevelThree?:array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}, LevelFour?:array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}, LevelFive?:array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}}, Tags?:array<string, string>, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}}>
     */
    public function describeUserHierarchyGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string} $args
     * @return \AWS\Result<array{HierarchyStructure?:array{LevelOne?:array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}, LevelTwo?:array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}, LevelThree?:array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}, LevelFour?:array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}, LevelFive?:array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}}}>
     */
    public function describeUserHierarchyStructure(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{HierarchyStructure?:array{LevelOne?:array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}, LevelTwo?:array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}, LevelThree?:array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}, LevelFour?:array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}, LevelFive?:array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}}}>
     */
    public function describeUserHierarchyStructureAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ViewId:string} $args
     * @return \AWS\Result<array{View?:array{Id?:string, Arn?:string, Name?:string, Status?:"PUBLISHED"|"SAVED", Type?:"CUSTOMER_MANAGED"|"AWS_MANAGED", Description?:string, Version?:int, VersionDescription?:string, Content?:array{InputSchema?:string, Template?:string, Actions?:array<string>}, Tags?:array<string, string>, CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, ViewContentSha256?:string}}>
     */
    public function describeView(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ViewId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{View?:array{Id?:string, Arn?:string, Name?:string, Status?:"PUBLISHED"|"SAVED", Type?:"CUSTOMER_MANAGED"|"AWS_MANAGED", Description?:string, Version?:int, VersionDescription?:string, Content?:array{InputSchema?:string, Template?:string, Actions?:array<string>}, Tags?:array<string, string>, CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, ViewContentSha256?:string}}>
     */
    public function describeViewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, VocabularyId:string} $args
     * @return \AWS\Result<array{Vocabulary:array{Name:string, Id:string, Arn:string, LanguageCode:"ar-AE"|"de-CH"|"de-DE"|"en-AB"|"en-AU"|"en-GB"|"en-IE"|"en-IN"|"en-US"|"en-WL"|"es-ES"|"es-US"|"fr-CA"|"fr-FR"|"hi-IN"|"it-IT"|"ja-JP"|"ko-KR"|"pt-BR"|"pt-PT"|"zh-CN"|"en-NZ"|"en-ZA"|"ca-ES"|"da-DK"|"fi-FI"|"id-ID"|"ms-MY"|"nl-NL"|"no-NO"|"pl-PL"|"sv-SE"|"tl-PH", State:"CREATION_IN_PROGRESS"|"ACTIVE"|"CREATION_FAILED"|"DELETE_IN_PROGRESS", LastModifiedTime:int|string|\DateTimeInterface, FailureReason?:string, Content?:string, Tags?:array<string, string>}}>
     */
    public function describeVocabulary(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, VocabularyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Vocabulary:array{Name:string, Id:string, Arn:string, LanguageCode:"ar-AE"|"de-CH"|"de-DE"|"en-AB"|"en-AU"|"en-GB"|"en-IE"|"en-IN"|"en-US"|"en-WL"|"es-ES"|"es-US"|"fr-CA"|"fr-FR"|"hi-IN"|"it-IT"|"ja-JP"|"ko-KR"|"pt-BR"|"pt-PT"|"zh-CN"|"en-NZ"|"en-ZA"|"ca-ES"|"da-DK"|"fi-FI"|"id-ID"|"ms-MY"|"nl-NL"|"no-NO"|"pl-PL"|"sv-SE"|"tl-PH", State:"CREATION_IN_PROGRESS"|"ACTIVE"|"CREATION_FAILED"|"DELETE_IN_PROGRESS", LastModifiedTime:int|string|\DateTimeInterface, FailureReason?:string, Content?:string, Tags?:array<string, string>}}>
     */
    public function describeVocabularyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, DataSetId:string, TargetAccountId?:string} $args
     * @return \AWS\Result<void>
     */
    public function disassociateAnalyticsDataSet(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, DataSetId:string, TargetAccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disassociateAnalyticsDataSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, Origin:string} $args
     * @return \AWS\Result<void>
     */
    public function disassociateApprovedOrigin(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, Origin:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disassociateApprovedOriginAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, LexBot?:array{Name:string, LexRegion:string}, LexV2Bot?:array{AliasArn?:string}} $args
     * @return \AWS\Result<void>
     */
    public function disassociateBot(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, LexBot?:array{Name:string, LexRegion:string}, LexV2Bot?:array{AliasArn?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disassociateBotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ResourceId:string, ResourceType:"SMS_PHONE_NUMBER"|"INBOUND_EMAIL"|"OUTBOUND_EMAIL"|"ANALYTICS_CONNECTOR"|"WHATSAPP_MESSAGING_PHONE_NUMBER"} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateFlow(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ResourceId:string, ResourceType:"SMS_PHONE_NUMBER"|"INBOUND_EMAIL"|"OUTBOUND_EMAIL"|"ANALYTICS_CONNECTOR"|"WHATSAPP_MESSAGING_PHONE_NUMBER"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateFlowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, AssociationId:string, ResourceType:"CHAT_TRANSCRIPTS"|"CALL_RECORDINGS"|"SCHEDULED_REPORTS"|"MEDIA_STREAMS"|"CONTACT_TRACE_RECORDS"|"AGENT_EVENTS"|"REAL_TIME_CONTACT_ANALYSIS_SEGMENTS"|"ATTACHMENTS"|"CONTACT_EVALUATIONS"|"SCREEN_RECORDINGS"|"REAL_TIME_CONTACT_ANALYSIS_CHAT_SEGMENTS"|"REAL_TIME_CONTACT_ANALYSIS_VOICE_SEGMENTS"|"EMAIL_MESSAGES"} $args
     * @return \AWS\Result<void>
     */
    public function disassociateInstanceStorageConfig(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, AssociationId:string, ResourceType:"CHAT_TRANSCRIPTS"|"CALL_RECORDINGS"|"SCHEDULED_REPORTS"|"MEDIA_STREAMS"|"CONTACT_TRACE_RECORDS"|"AGENT_EVENTS"|"REAL_TIME_CONTACT_ANALYSIS_SEGMENTS"|"ATTACHMENTS"|"CONTACT_EVALUATIONS"|"SCREEN_RECORDINGS"|"REAL_TIME_CONTACT_ANALYSIS_CHAT_SEGMENTS"|"REAL_TIME_CONTACT_ANALYSIS_VOICE_SEGMENTS"|"EMAIL_MESSAGES"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disassociateInstanceStorageConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, FunctionArn:string} $args
     * @return \AWS\Result<void>
     */
    public function disassociateLambdaFunction(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, FunctionArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disassociateLambdaFunctionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, BotName:string, LexRegion:string} $args
     * @return \AWS\Result<void>
     */
    public function disassociateLexBot(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, BotName:string, LexRegion:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disassociateLexBotAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PhoneNumberId:string, InstanceId:string} $args
     * @return \AWS\Result<void>
     */
    public function disassociatePhoneNumberContactFlow(array $args): \AWS\Result { }

    /**
     * @param array{PhoneNumberId:string, InstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disassociatePhoneNumberContactFlowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, QueueId:string, QuickConnectIds:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function disassociateQueueQuickConnects(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, QueueId:string, QuickConnectIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disassociateQueueQuickConnectsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, RoutingProfileId:string, QueueReferences:array<array{QueueId:string, Channel:"VOICE"|"CHAT"|"TASK"|"EMAIL"}>} $args
     * @return \AWS\Result<void>
     */
    public function disassociateRoutingProfileQueues(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, RoutingProfileId:string, QueueReferences:array<array{QueueId:string, Channel:"VOICE"|"CHAT"|"TASK"|"EMAIL"}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disassociateRoutingProfileQueuesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, AssociationId:string} $args
     * @return \AWS\Result<void>
     */
    public function disassociateSecurityKey(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, AssociationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disassociateSecurityKeyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrafficDistributionGroupId:string, UserId:string, InstanceId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateTrafficDistributionGroupUser(array $args): \AWS\Result { }

    /**
     * @param array{TrafficDistributionGroupId:string, UserId:string, InstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateTrafficDistributionGroupUserAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, UserId:string, UserProficiencies:array<array{AttributeName:string, AttributeValue:string}>} $args
     * @return \AWS\Result<void>
     */
    public function disassociateUserProficiencies(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, UserId:string, UserProficiencies:array<array{AttributeName:string, AttributeValue:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disassociateUserProficienciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserId:string, InstanceId:string, ContactId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function dismissUserContact(array $args): \AWS\Result { }

    /**
     * @param array{UserId:string, InstanceId:string, ContactId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function dismissUserContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, FileId:string, UrlExpiryInSeconds?:int, AssociatedResourceArn:string} $args
     * @return \AWS\Result<array{FileArn?:string, FileId?:string, CreationTime?:string, FileStatus?:"APPROVED"|"REJECTED"|"PROCESSING"|"FAILED", FileName?:string, FileSizeInBytes:int, AssociatedResourceArn?:string, FileUseCaseType?:"EMAIL_MESSAGE"|"ATTACHMENT", CreatedBy?:array{ConnectUserArn?:string, AWSIdentityArn?:string}, DownloadUrlMetadata?:array{Url?:string, UrlExpiry?:string}, Tags?:array<string, string>}>
     */
    public function getAttachedFile(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, FileId:string, UrlExpiryInSeconds?:int, AssociatedResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{FileArn?:string, FileId?:string, CreationTime?:string, FileStatus?:"APPROVED"|"REJECTED"|"PROCESSING"|"FAILED", FileName?:string, FileSizeInBytes:int, AssociatedResourceArn?:string, FileUseCaseType?:"EMAIL_MESSAGE"|"ATTACHMENT", CreatedBy?:array{ConnectUserArn?:string, AWSIdentityArn?:string}, DownloadUrlMetadata?:array{Url?:string, UrlExpiry?:string}, Tags?:array<string, string>}>
     */
    public function getAttachedFileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, InitialContactId:string} $args
     * @return \AWS\Result<array{Attributes?:array<string, string>}>
     */
    public function getContactAttributes(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, InitialContactId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attributes?:array<string, string>}>
     */
    public function getContactAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, Filters:array{Queues?:array<string>, Channels?:array<"VOICE"|"CHAT"|"TASK"|"EMAIL">, RoutingProfiles?:array<string>, RoutingStepExpressions?:array<string>}, Groupings?:array<"QUEUE"|"CHANNEL"|"ROUTING_PROFILE"|"ROUTING_STEP_EXPRESSION">, CurrentMetrics:array<array{Name?:"AGENTS_ONLINE"|"AGENTS_AVAILABLE"|"AGENTS_ON_CALL"|"AGENTS_NON_PRODUCTIVE"|"AGENTS_AFTER_CONTACT_WORK"|"AGENTS_ERROR"|"AGENTS_STAFFED"|"CONTACTS_IN_QUEUE"|"OLDEST_CONTACT_AGE"|"CONTACTS_SCHEDULED"|"AGENTS_ON_CONTACT"|"SLOTS_ACTIVE"|"SLOTS_AVAILABLE", Unit?:"SECONDS"|"COUNT"|"PERCENT"}>, NextToken?:string, MaxResults?:int, SortCriteria?:array<array{SortByMetric?:"AGENTS_ONLINE"|"AGENTS_AVAILABLE"|"AGENTS_ON_CALL"|"AGENTS_NON_PRODUCTIVE"|"AGENTS_AFTER_CONTACT_WORK"|"AGENTS_ERROR"|"AGENTS_STAFFED"|"CONTACTS_IN_QUEUE"|"OLDEST_CONTACT_AGE"|"CONTACTS_SCHEDULED"|"AGENTS_ON_CONTACT"|"SLOTS_ACTIVE"|"SLOTS_AVAILABLE", SortOrder?:"ASCENDING"|"DESCENDING"}>} $args
     * @return \AWS\Result<array{NextToken?:string, MetricResults?:array<array{Dimensions?:array{Queue?:array{Id?:string, Arn?:string}, Channel?:"VOICE"|"CHAT"|"TASK"|"EMAIL", RoutingProfile?:array{Id?:string, Arn?:string}, RoutingStepExpression?:string}, Collections?:array<array{Metric?:array{Name?:"AGENTS_ONLINE"|"AGENTS_AVAILABLE"|"AGENTS_ON_CALL"|"AGENTS_NON_PRODUCTIVE"|"AGENTS_AFTER_CONTACT_WORK"|"AGENTS_ERROR"|"AGENTS_STAFFED"|"CONTACTS_IN_QUEUE"|"OLDEST_CONTACT_AGE"|"CONTACTS_SCHEDULED"|"AGENTS_ON_CONTACT"|"SLOTS_ACTIVE"|"SLOTS_AVAILABLE", Unit?:"SECONDS"|"COUNT"|"PERCENT"}, Value?:float}>}>, DataSnapshotTime?:int|string|\DateTimeInterface, ApproximateTotalCount?:int}>
     */
    public function getCurrentMetricData(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, Filters:array{Queues?:array<string>, Channels?:array<"VOICE"|"CHAT"|"TASK"|"EMAIL">, RoutingProfiles?:array<string>, RoutingStepExpressions?:array<string>}, Groupings?:array<"QUEUE"|"CHANNEL"|"ROUTING_PROFILE"|"ROUTING_STEP_EXPRESSION">, CurrentMetrics:array<array{Name?:"AGENTS_ONLINE"|"AGENTS_AVAILABLE"|"AGENTS_ON_CALL"|"AGENTS_NON_PRODUCTIVE"|"AGENTS_AFTER_CONTACT_WORK"|"AGENTS_ERROR"|"AGENTS_STAFFED"|"CONTACTS_IN_QUEUE"|"OLDEST_CONTACT_AGE"|"CONTACTS_SCHEDULED"|"AGENTS_ON_CONTACT"|"SLOTS_ACTIVE"|"SLOTS_AVAILABLE", Unit?:"SECONDS"|"COUNT"|"PERCENT"}>, NextToken?:string, MaxResults?:int, SortCriteria?:array<array{SortByMetric?:"AGENTS_ONLINE"|"AGENTS_AVAILABLE"|"AGENTS_ON_CALL"|"AGENTS_NON_PRODUCTIVE"|"AGENTS_AFTER_CONTACT_WORK"|"AGENTS_ERROR"|"AGENTS_STAFFED"|"CONTACTS_IN_QUEUE"|"OLDEST_CONTACT_AGE"|"CONTACTS_SCHEDULED"|"AGENTS_ON_CONTACT"|"SLOTS_ACTIVE"|"SLOTS_AVAILABLE", SortOrder?:"ASCENDING"|"DESCENDING"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, MetricResults?:array<array{Dimensions?:array{Queue?:array{Id?:string, Arn?:string}, Channel?:"VOICE"|"CHAT"|"TASK"|"EMAIL", RoutingProfile?:array{Id?:string, Arn?:string}, RoutingStepExpression?:string}, Collections?:array<array{Metric?:array{Name?:"AGENTS_ONLINE"|"AGENTS_AVAILABLE"|"AGENTS_ON_CALL"|"AGENTS_NON_PRODUCTIVE"|"AGENTS_AFTER_CONTACT_WORK"|"AGENTS_ERROR"|"AGENTS_STAFFED"|"CONTACTS_IN_QUEUE"|"OLDEST_CONTACT_AGE"|"CONTACTS_SCHEDULED"|"AGENTS_ON_CONTACT"|"SLOTS_ACTIVE"|"SLOTS_AVAILABLE", Unit?:"SECONDS"|"COUNT"|"PERCENT"}, Value?:float}>}>, DataSnapshotTime?:int|string|\DateTimeInterface, ApproximateTotalCount?:int}>
     */
    public function getCurrentMetricDataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, Filters:array{Queues?:array<string>, ContactFilter?:array{ContactStates?:array<"INCOMING"|"PENDING"|"CONNECTING"|"CONNECTED"|"CONNECTED_ONHOLD"|"MISSED"|"ERROR"|"ENDED"|"REJECTED">}, RoutingProfiles?:array<string>, Agents?:array<string>, UserHierarchyGroups?:array<string>}, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, UserDataList?:array<array{User?:array{Id?:string, Arn?:string}, RoutingProfile?:array{Id?:string, Arn?:string}, HierarchyPath?:array{LevelOne?:array{Id?:string, Arn?:string}, LevelTwo?:array{Id?:string, Arn?:string}, LevelThree?:array{Id?:string, Arn?:string}, LevelFour?:array{Id?:string, Arn?:string}, LevelFive?:array{Id?:string, Arn?:string}}, Status?:array{StatusStartTimestamp?:int|string|\DateTimeInterface, StatusArn?:string, StatusName?:string}, AvailableSlotsByChannel?:array<"VOICE"|"CHAT"|"TASK"|"EMAIL", int>, MaxSlotsByChannel?:array<"VOICE"|"CHAT"|"TASK"|"EMAIL", int>, ActiveSlotsByChannel?:array<"VOICE"|"CHAT"|"TASK"|"EMAIL", int>, Contacts?:array<array{ContactId?:string, Channel?:"VOICE"|"CHAT"|"TASK"|"EMAIL", InitiationMethod?:"INBOUND"|"OUTBOUND"|"TRANSFER"|"QUEUE_TRANSFER"|"CALLBACK"|"API"|"DISCONNECT"|"MONITOR"|"EXTERNAL_OUTBOUND"|"WEBRTC_API"|"AGENT_REPLY"|"FLOW", AgentContactState?:"INCOMING"|"PENDING"|"CONNECTING"|"CONNECTED"|"CONNECTED_ONHOLD"|"MISSED"|"ERROR"|"ENDED"|"REJECTED", StateStartTimestamp?:int|string|\DateTimeInterface, ConnectedToAgentTimestamp?:int|string|\DateTimeInterface, Queue?:array{Id?:string, Arn?:string}}>, NextStatus?:string}>, ApproximateTotalCount?:int}>
     */
    public function getCurrentUserData(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, Filters:array{Queues?:array<string>, ContactFilter?:array{ContactStates?:array<"INCOMING"|"PENDING"|"CONNECTING"|"CONNECTED"|"CONNECTED_ONHOLD"|"MISSED"|"ERROR"|"ENDED"|"REJECTED">}, RoutingProfiles?:array<string>, Agents?:array<string>, UserHierarchyGroups?:array<string>}, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, UserDataList?:array<array{User?:array{Id?:string, Arn?:string}, RoutingProfile?:array{Id?:string, Arn?:string}, HierarchyPath?:array{LevelOne?:array{Id?:string, Arn?:string}, LevelTwo?:array{Id?:string, Arn?:string}, LevelThree?:array{Id?:string, Arn?:string}, LevelFour?:array{Id?:string, Arn?:string}, LevelFive?:array{Id?:string, Arn?:string}}, Status?:array{StatusStartTimestamp?:int|string|\DateTimeInterface, StatusArn?:string, StatusName?:string}, AvailableSlotsByChannel?:array<"VOICE"|"CHAT"|"TASK"|"EMAIL", int>, MaxSlotsByChannel?:array<"VOICE"|"CHAT"|"TASK"|"EMAIL", int>, ActiveSlotsByChannel?:array<"VOICE"|"CHAT"|"TASK"|"EMAIL", int>, Contacts?:array<array{ContactId?:string, Channel?:"VOICE"|"CHAT"|"TASK"|"EMAIL", InitiationMethod?:"INBOUND"|"OUTBOUND"|"TRANSFER"|"QUEUE_TRANSFER"|"CALLBACK"|"API"|"DISCONNECT"|"MONITOR"|"EXTERNAL_OUTBOUND"|"WEBRTC_API"|"AGENT_REPLY"|"FLOW", AgentContactState?:"INCOMING"|"PENDING"|"CONNECTING"|"CONNECTED"|"CONNECTED_ONHOLD"|"MISSED"|"ERROR"|"ENDED"|"REJECTED", StateStartTimestamp?:int|string|\DateTimeInterface, ConnectedToAgentTimestamp?:int|string|\DateTimeInterface, Queue?:array{Id?:string, Arn?:string}}>, NextStatus?:string}>, ApproximateTotalCount?:int}>
     */
    public function getCurrentUserDataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, HoursOfOperationId:string, FromDate:string, ToDate:string} $args
     * @return \AWS\Result<array{EffectiveHoursOfOperationList?:array<array{Date?:string, OperationalHours?:array<array{Start?:array{Hours:int, Minutes:int}, End?:array{Hours:int, Minutes:int}}>}>, TimeZone?:string}>
     */
    public function getEffectiveHoursOfOperations(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, HoursOfOperationId:string, FromDate:string, ToDate:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EffectiveHoursOfOperationList?:array<array{Date?:string, OperationalHours?:array<array{Start?:array{Hours:int, Minutes:int}, End?:array{Hours:int, Minutes:int}}>}>, TimeZone?:string}>
     */
    public function getEffectiveHoursOfOperationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string} $args
     * @return \AWS\Result<array{Credentials?:array{AccessToken?:string, AccessTokenExpiration?:int|string|\DateTimeInterface, RefreshToken?:string, RefreshTokenExpiration?:int|string|\DateTimeInterface}, SignInUrl?:string, UserArn?:string, UserId?:string}>
     */
    public function getFederationToken(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Credentials?:array{AccessToken?:string, AccessTokenExpiration?:int|string|\DateTimeInterface, RefreshToken?:string, RefreshTokenExpiration?:int|string|\DateTimeInterface}, SignInUrl?:string, UserArn?:string, UserId?:string}>
     */
    public function getFederationTokenAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ResourceId:string, ResourceType:"SMS_PHONE_NUMBER"|"INBOUND_EMAIL"|"OUTBOUND_EMAIL"|"ANALYTICS_CONNECTOR"|"WHATSAPP_MESSAGING_PHONE_NUMBER"} $args
     * @return \AWS\Result<array{ResourceId?:string, FlowId?:string, ResourceType?:"SMS_PHONE_NUMBER"|"INBOUND_EMAIL"|"OUTBOUND_EMAIL"|"ANALYTICS_CONNECTOR"|"WHATSAPP_MESSAGING_PHONE_NUMBER"}>
     */
    public function getFlowAssociation(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ResourceId:string, ResourceType:"SMS_PHONE_NUMBER"|"INBOUND_EMAIL"|"OUTBOUND_EMAIL"|"ANALYTICS_CONNECTOR"|"WHATSAPP_MESSAGING_PHONE_NUMBER"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ResourceId?:string, FlowId?:string, ResourceType?:"SMS_PHONE_NUMBER"|"INBOUND_EMAIL"|"OUTBOUND_EMAIL"|"ANALYTICS_CONNECTOR"|"WHATSAPP_MESSAGING_PHONE_NUMBER"}>
     */
    public function getFlowAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, Filters:array{Queues?:array<string>, Channels?:array<"VOICE"|"CHAT"|"TASK"|"EMAIL">, RoutingProfiles?:array<string>, RoutingStepExpressions?:array<string>}, Groupings?:array<"QUEUE"|"CHANNEL"|"ROUTING_PROFILE"|"ROUTING_STEP_EXPRESSION">, HistoricalMetrics:array<array{Name?:"CONTACTS_QUEUED"|"CONTACTS_HANDLED"|"CONTACTS_ABANDONED"|"CONTACTS_CONSULTED"|"CONTACTS_AGENT_HUNG_UP_FIRST"|"CONTACTS_HANDLED_INCOMING"|"CONTACTS_HANDLED_OUTBOUND"|"CONTACTS_HOLD_ABANDONS"|"CONTACTS_TRANSFERRED_IN"|"CONTACTS_TRANSFERRED_OUT"|"CONTACTS_TRANSFERRED_IN_FROM_QUEUE"|"CONTACTS_TRANSFERRED_OUT_FROM_QUEUE"|"CONTACTS_MISSED"|"CALLBACK_CONTACTS_HANDLED"|"API_CONTACTS_HANDLED"|"OCCUPANCY"|"HANDLE_TIME"|"AFTER_CONTACT_WORK_TIME"|"QUEUED_TIME"|"ABANDON_TIME"|"QUEUE_ANSWER_TIME"|"HOLD_TIME"|"INTERACTION_TIME"|"INTERACTION_AND_HOLD_TIME"|"SERVICE_LEVEL", Threshold?:array{Comparison?:"LT", ThresholdValue?:float}, Statistic?:"SUM"|"MAX"|"AVG", Unit?:"SECONDS"|"COUNT"|"PERCENT"}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, MetricResults?:array<array{Dimensions?:array{Queue?:array{Id?:string, Arn?:string}, Channel?:"VOICE"|"CHAT"|"TASK"|"EMAIL", RoutingProfile?:array{Id?:string, Arn?:string}, RoutingStepExpression?:string}, Collections?:array<array{Metric?:array{Name?:"CONTACTS_QUEUED"|"CONTACTS_HANDLED"|"CONTACTS_ABANDONED"|"CONTACTS_CONSULTED"|"CONTACTS_AGENT_HUNG_UP_FIRST"|"CONTACTS_HANDLED_INCOMING"|"CONTACTS_HANDLED_OUTBOUND"|"CONTACTS_HOLD_ABANDONS"|"CONTACTS_TRANSFERRED_IN"|"CONTACTS_TRANSFERRED_OUT"|"CONTACTS_TRANSFERRED_IN_FROM_QUEUE"|"CONTACTS_TRANSFERRED_OUT_FROM_QUEUE"|"CONTACTS_MISSED"|"CALLBACK_CONTACTS_HANDLED"|"API_CONTACTS_HANDLED"|"OCCUPANCY"|"HANDLE_TIME"|"AFTER_CONTACT_WORK_TIME"|"QUEUED_TIME"|"ABANDON_TIME"|"QUEUE_ANSWER_TIME"|"HOLD_TIME"|"INTERACTION_TIME"|"INTERACTION_AND_HOLD_TIME"|"SERVICE_LEVEL", Threshold?:array{Comparison?:"LT", ThresholdValue?:float}, Statistic?:"SUM"|"MAX"|"AVG", Unit?:"SECONDS"|"COUNT"|"PERCENT"}, Value?:float}>}>}>
     */
    public function getMetricData(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, Filters:array{Queues?:array<string>, Channels?:array<"VOICE"|"CHAT"|"TASK"|"EMAIL">, RoutingProfiles?:array<string>, RoutingStepExpressions?:array<string>}, Groupings?:array<"QUEUE"|"CHANNEL"|"ROUTING_PROFILE"|"ROUTING_STEP_EXPRESSION">, HistoricalMetrics:array<array{Name?:"CONTACTS_QUEUED"|"CONTACTS_HANDLED"|"CONTACTS_ABANDONED"|"CONTACTS_CONSULTED"|"CONTACTS_AGENT_HUNG_UP_FIRST"|"CONTACTS_HANDLED_INCOMING"|"CONTACTS_HANDLED_OUTBOUND"|"CONTACTS_HOLD_ABANDONS"|"CONTACTS_TRANSFERRED_IN"|"CONTACTS_TRANSFERRED_OUT"|"CONTACTS_TRANSFERRED_IN_FROM_QUEUE"|"CONTACTS_TRANSFERRED_OUT_FROM_QUEUE"|"CONTACTS_MISSED"|"CALLBACK_CONTACTS_HANDLED"|"API_CONTACTS_HANDLED"|"OCCUPANCY"|"HANDLE_TIME"|"AFTER_CONTACT_WORK_TIME"|"QUEUED_TIME"|"ABANDON_TIME"|"QUEUE_ANSWER_TIME"|"HOLD_TIME"|"INTERACTION_TIME"|"INTERACTION_AND_HOLD_TIME"|"SERVICE_LEVEL", Threshold?:array{Comparison?:"LT", ThresholdValue?:float}, Statistic?:"SUM"|"MAX"|"AVG", Unit?:"SECONDS"|"COUNT"|"PERCENT"}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, MetricResults?:array<array{Dimensions?:array{Queue?:array{Id?:string, Arn?:string}, Channel?:"VOICE"|"CHAT"|"TASK"|"EMAIL", RoutingProfile?:array{Id?:string, Arn?:string}, RoutingStepExpression?:string}, Collections?:array<array{Metric?:array{Name?:"CONTACTS_QUEUED"|"CONTACTS_HANDLED"|"CONTACTS_ABANDONED"|"CONTACTS_CONSULTED"|"CONTACTS_AGENT_HUNG_UP_FIRST"|"CONTACTS_HANDLED_INCOMING"|"CONTACTS_HANDLED_OUTBOUND"|"CONTACTS_HOLD_ABANDONS"|"CONTACTS_TRANSFERRED_IN"|"CONTACTS_TRANSFERRED_OUT"|"CONTACTS_TRANSFERRED_IN_FROM_QUEUE"|"CONTACTS_TRANSFERRED_OUT_FROM_QUEUE"|"CONTACTS_MISSED"|"CALLBACK_CONTACTS_HANDLED"|"API_CONTACTS_HANDLED"|"OCCUPANCY"|"HANDLE_TIME"|"AFTER_CONTACT_WORK_TIME"|"QUEUED_TIME"|"ABANDON_TIME"|"QUEUE_ANSWER_TIME"|"HOLD_TIME"|"INTERACTION_TIME"|"INTERACTION_AND_HOLD_TIME"|"SERVICE_LEVEL", Threshold?:array{Comparison?:"LT", ThresholdValue?:float}, Statistic?:"SUM"|"MAX"|"AVG", Unit?:"SECONDS"|"COUNT"|"PERCENT"}, Value?:float}>}>}>
     */
    public function getMetricDataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, Interval?:array{TimeZone?:string, IntervalPeriod?:"FIFTEEN_MIN"|"THIRTY_MIN"|"HOUR"|"DAY"|"WEEK"|"TOTAL"}, Filters:array<array{FilterKey?:string, FilterValues?:array<string>}>, Groupings?:array<string>, Metrics:array<array{Name?:string, Threshold?:array<array{Comparison?:string, ThresholdValue?:float}>, MetricFilters?:array<array{MetricFilterKey?:string, MetricFilterValues?:array<string>, Negate?:bool}>}>, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, MetricResults?:array<array{Dimensions?:array<string, string>, MetricInterval?:array{Interval?:"FIFTEEN_MIN"|"THIRTY_MIN"|"HOUR"|"DAY"|"WEEK"|"TOTAL", StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, Collections?:array<array{Metric?:array{Name?:string, Threshold?:array<array{Comparison?:string, ThresholdValue?:float}>, MetricFilters?:array<array{MetricFilterKey?:string, MetricFilterValues?:array<string>, Negate?:bool}>}, Value?:float}>}>}>
     */
    public function getMetricDataV2(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface, Interval?:array{TimeZone?:string, IntervalPeriod?:"FIFTEEN_MIN"|"THIRTY_MIN"|"HOUR"|"DAY"|"WEEK"|"TOTAL"}, Filters:array<array{FilterKey?:string, FilterValues?:array<string>}>, Groupings?:array<string>, Metrics:array<array{Name?:string, Threshold?:array<array{Comparison?:string, ThresholdValue?:float}>, MetricFilters?:array<array{MetricFilterKey?:string, MetricFilterValues?:array<string>, Negate?:bool}>}>, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, MetricResults?:array<array{Dimensions?:array<string, string>, MetricInterval?:array{Interval?:"FIFTEEN_MIN"|"THIRTY_MIN"|"HOUR"|"DAY"|"WEEK"|"TOTAL", StartTime?:int|string|\DateTimeInterface, EndTime?:int|string|\DateTimeInterface}, Collections?:array<array{Metric?:array{Name?:string, Threshold?:array<array{Comparison?:string, ThresholdValue?:float}>, MetricFilters?:array<array{MetricFilterKey?:string, MetricFilterValues?:array<string>, Negate?:bool}>}, Value?:float}>}>}>
     */
    public function getMetricDataV2Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, PromptId:string} $args
     * @return \AWS\Result<array{PromptPresignedUrl?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>
     */
    public function getPromptFile(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, PromptId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PromptPresignedUrl?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>
     */
    public function getPromptFileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, TaskTemplateId:string, SnapshotVersion?:string} $args
     * @return \AWS\Result<array{InstanceId?:string, Id:string, Arn:string, Name:string, Description?:string, ContactFlowId?:string, SelfAssignFlowId?:string, Constraints?:array{RequiredFields?:array<array{Id?:array{Name?:string}}>, ReadOnlyFields?:array<array{Id?:array{Name?:string}}>, InvisibleFields?:array<array{Id?:array{Name?:string}}>}, Defaults?:array{DefaultFieldValues?:array<array{Id?:array{Name?:string}, DefaultValue?:string}>}, Fields?:array<array{Id:array{Name?:string}, Description?:string, Type?:"NAME"|"DESCRIPTION"|"SCHEDULED_TIME"|"QUICK_CONNECT"|"URL"|"NUMBER"|"TEXT"|"TEXT_AREA"|"DATE_TIME"|"BOOLEAN"|"SINGLE_SELECT"|"EMAIL"|"SELF_ASSIGN"|"EXPIRY_DURATION", SingleSelectOptions?:array<string>}>, Status?:"ACTIVE"|"INACTIVE", LastModifiedTime?:int|string|\DateTimeInterface, CreatedTime?:int|string|\DateTimeInterface, Tags?:array<string, string>}>
     */
    public function getTaskTemplate(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, TaskTemplateId:string, SnapshotVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{InstanceId?:string, Id:string, Arn:string, Name:string, Description?:string, ContactFlowId?:string, SelfAssignFlowId?:string, Constraints?:array{RequiredFields?:array<array{Id?:array{Name?:string}}>, ReadOnlyFields?:array<array{Id?:array{Name?:string}}>, InvisibleFields?:array<array{Id?:array{Name?:string}}>}, Defaults?:array{DefaultFieldValues?:array<array{Id?:array{Name?:string}, DefaultValue?:string}>}, Fields?:array<array{Id:array{Name?:string}, Description?:string, Type?:"NAME"|"DESCRIPTION"|"SCHEDULED_TIME"|"QUICK_CONNECT"|"URL"|"NUMBER"|"TEXT"|"TEXT_AREA"|"DATE_TIME"|"BOOLEAN"|"SINGLE_SELECT"|"EMAIL"|"SELF_ASSIGN"|"EXPIRY_DURATION", SingleSelectOptions?:array<string>}>, Status?:"ACTIVE"|"INACTIVE", LastModifiedTime?:int|string|\DateTimeInterface, CreatedTime?:int|string|\DateTimeInterface, Tags?:array<string, string>}>
     */
    public function getTaskTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string} $args
     * @return \AWS\Result<array{TelephonyConfig?:array{Distributions:array<array{Region:string, Percentage:int}>}, Id?:string, Arn?:string, SignInConfig?:array{Distributions:array<array{Region:string, Enabled:bool}>}, AgentConfig?:array{Distributions:array<array{Region:string, Percentage:int}>}}>
     */
    public function getTrafficDistribution(array $args): \AWS\Result { }

    /**
     * @param array{Id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TelephonyConfig?:array{Distributions:array<array{Region:string, Percentage:int}>}, Id?:string, Arn?:string, SignInConfig?:array{Distributions:array<array{Region:string, Enabled:bool}>}, AgentConfig?:array{Distributions:array<array{Region:string, Percentage:int}>}}>
     */
    public function getTrafficDistributionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, SourcePhoneNumberArn:string, PhoneNumberDescription?:string, Tags?:array<string, string>, ClientToken?:string} $args
     * @return \AWS\Result<array{PhoneNumberId?:string, PhoneNumberArn?:string}>
     */
    public function importPhoneNumber(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, SourcePhoneNumberArn:string, PhoneNumberDescription?:string, Tags?:array<string, string>, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumberId?:string, PhoneNumberArn?:string}>
     */
    public function importPhoneNumberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, AgentStatusTypes?:array<"ROUTABLE"|"CUSTOM"|"OFFLINE">} $args
     * @return \AWS\Result<array{NextToken?:string, AgentStatusSummaryList?:array<array{Id?:string, Arn?:string, Name?:string, Type?:"ROUTABLE"|"CUSTOM"|"OFFLINE", LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>}>
     */
    public function listAgentStatuses(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, AgentStatusTypes?:array<"ROUTABLE"|"CUSTOM"|"OFFLINE">} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, AgentStatusSummaryList?:array<array{Id?:string, Arn?:string, Name?:string, Type?:"ROUTABLE"|"CUSTOM"|"OFFLINE", LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>}>
     */
    public function listAgentStatusesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, DataSetId?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Results?:array<array{DataSetId?:string, TargetAccountId?:string, ResourceShareId?:string, ResourceShareArn?:string}>, NextToken?:string}>
     */
    public function listAnalyticsDataAssociations(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, DataSetId?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Results?:array<array{DataSetId?:string, TargetAccountId?:string, ResourceShareId?:string, ResourceShareArn?:string}>, NextToken?:string}>
     */
    public function listAnalyticsDataAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Origins?:array<string>, NextToken?:string}>
     */
    public function listApprovedOrigins(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Origins?:array<string>, NextToken?:string}>
     */
    public function listApprovedOriginsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ContactId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{ContactSummaryList?:array<array{ContactId?:string, ContactArn?:string, InitiationTimestamp?:int|string|\DateTimeInterface, DisconnectTimestamp?:int|string|\DateTimeInterface, InitialContactId?:string, PreviousContactId?:string, RelatedContactId?:string, InitiationMethod?:"INBOUND"|"OUTBOUND"|"TRANSFER"|"QUEUE_TRANSFER"|"CALLBACK"|"API"|"DISCONNECT"|"MONITOR"|"EXTERNAL_OUTBOUND"|"WEBRTC_API"|"AGENT_REPLY"|"FLOW", Channel?:"VOICE"|"CHAT"|"TASK"|"EMAIL"}>, NextToken?:string}>
     */
    public function listAssociatedContacts(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ContactId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContactSummaryList?:array<array{ContactId?:string, ContactArn?:string, InitiationTimestamp?:int|string|\DateTimeInterface, DisconnectTimestamp?:int|string|\DateTimeInterface, InitialContactId?:string, PreviousContactId?:string, RelatedContactId?:string, InitiationMethod?:"INBOUND"|"OUTBOUND"|"TRANSFER"|"QUEUE_TRANSFER"|"CALLBACK"|"API"|"DISCONNECT"|"MONITOR"|"EXTERNAL_OUTBOUND"|"WEBRTC_API"|"AGENT_REPLY"|"FLOW", Channel?:"VOICE"|"CHAT"|"TASK"|"EMAIL"}>, NextToken?:string}>
     */
    public function listAssociatedContactsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{AuthenticationProfileSummaryList?:array<array{Id?:string, Arn?:string, Name?:string, IsDefault?:bool, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, NextToken?:string}>
     */
    public function listAuthenticationProfiles(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AuthenticationProfileSummaryList?:array<array{Id?:string, Arn?:string, Name?:string, IsDefault?:bool, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, NextToken?:string}>
     */
    public function listAuthenticationProfilesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, LexVersion:"V1"|"V2"} $args
     * @return \AWS\Result<array{LexBots?:array<array{LexBot?:array{Name:string, LexRegion:string}, LexV2Bot?:array{AliasArn?:string}}>, NextToken?:string}>
     */
    public function listBots(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, LexVersion:"V1"|"V2"} $args
     * @return \GuzzleHttp\Promise\Promise<array{LexBots?:array<array{LexBot?:array{Name:string, LexRegion:string}, LexV2Bot?:array{AliasArn?:string}}>, NextToken?:string}>
     */
    public function listBotsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ContactId:string, NextToken?:string} $args
     * @return \AWS\Result<array{EvaluationSummaryList:array<array{EvaluationId:string, EvaluationArn:string, EvaluationFormTitle:string, EvaluationFormId:string, Status:"DRAFT"|"SUBMITTED", EvaluatorArn:string, Score?:array{Percentage?:float, NotApplicable?:bool, AutomaticFail?:bool}, CreatedTime:int|string|\DateTimeInterface, LastModifiedTime:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listContactEvaluations(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ContactId:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EvaluationSummaryList:array<array{EvaluationId:string, EvaluationArn:string, EvaluationFormTitle:string, EvaluationFormId:string, Status:"DRAFT"|"SUBMITTED", EvaluatorArn:string, Score?:array{Percentage?:float, NotApplicable?:bool, AutomaticFail?:bool}, CreatedTime:int|string|\DateTimeInterface, LastModifiedTime:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listContactEvaluationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, ContactFlowModuleState?:"ACTIVE"|"ARCHIVED"} $args
     * @return \AWS\Result<array{ContactFlowModulesSummaryList?:array<array{Id?:string, Arn?:string, Name?:string, State?:"ACTIVE"|"ARCHIVED"}>, NextToken?:string}>
     */
    public function listContactFlowModules(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, ContactFlowModuleState?:"ACTIVE"|"ARCHIVED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContactFlowModulesSummaryList?:array<array{Id?:string, Arn?:string, Name?:string, State?:"ACTIVE"|"ARCHIVED"}>, NextToken?:string}>
     */
    public function listContactFlowModulesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ContactFlowId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ContactFlowVersionSummaryList?:array<array{Arn?:string, VersionDescription?:string, Version?:int}>, NextToken?:string}>
     */
    public function listContactFlowVersions(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ContactFlowId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContactFlowVersionSummaryList?:array<array{Arn?:string, VersionDescription?:string, Version?:int}>, NextToken?:string}>
     */
    public function listContactFlowVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ContactFlowTypes?:array<"CONTACT_FLOW"|"CUSTOMER_QUEUE"|"CUSTOMER_HOLD"|"CUSTOMER_WHISPER"|"AGENT_HOLD"|"AGENT_WHISPER"|"OUTBOUND_WHISPER"|"AGENT_TRANSFER"|"QUEUE_TRANSFER"|"CAMPAIGN">, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ContactFlowSummaryList?:array<array{Id?:string, Arn?:string, Name?:string, ContactFlowType?:"CONTACT_FLOW"|"CUSTOMER_QUEUE"|"CUSTOMER_HOLD"|"CUSTOMER_WHISPER"|"AGENT_HOLD"|"AGENT_WHISPER"|"OUTBOUND_WHISPER"|"AGENT_TRANSFER"|"QUEUE_TRANSFER"|"CAMPAIGN", ContactFlowState?:"ACTIVE"|"ARCHIVED", ContactFlowStatus?:"PUBLISHED"|"SAVED"}>, NextToken?:string}>
     */
    public function listContactFlows(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ContactFlowTypes?:array<"CONTACT_FLOW"|"CUSTOMER_QUEUE"|"CUSTOMER_HOLD"|"CUSTOMER_WHISPER"|"AGENT_HOLD"|"AGENT_WHISPER"|"OUTBOUND_WHISPER"|"AGENT_TRANSFER"|"QUEUE_TRANSFER"|"CAMPAIGN">, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContactFlowSummaryList?:array<array{Id?:string, Arn?:string, Name?:string, ContactFlowType?:"CONTACT_FLOW"|"CUSTOMER_QUEUE"|"CUSTOMER_HOLD"|"CUSTOMER_WHISPER"|"AGENT_HOLD"|"AGENT_WHISPER"|"OUTBOUND_WHISPER"|"AGENT_TRANSFER"|"QUEUE_TRANSFER"|"CAMPAIGN", ContactFlowState?:"ACTIVE"|"ARCHIVED", ContactFlowStatus?:"PUBLISHED"|"SAVED"}>, NextToken?:string}>
     */
    public function listContactFlowsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ContactId:string, ReferenceTypes:array<"URL"|"ATTACHMENT"|"CONTACT_ANALYSIS"|"NUMBER"|"STRING"|"DATE"|"EMAIL"|"EMAIL_MESSAGE">, NextToken?:string} $args
     * @return \AWS\Result<array{ReferenceSummaryList?:array<array{Url?:array{Name?:string, Value?:string}, Attachment?:array{Name?:string, Value?:string, Status?:"AVAILABLE"|"DELETED"|"APPROVED"|"REJECTED"|"PROCESSING"|"FAILED", Arn?:string}, EmailMessage?:array{Name?:string, Arn?:string}, String?:array{Name?:string, Value?:string}, Number?:array{Name?:string, Value?:string}, Date?:array{Name?:string, Value?:string}, Email?:array{Name?:string, Value?:string}}>, NextToken?:string}>
     */
    public function listContactReferences(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ContactId:string, ReferenceTypes:array<"URL"|"ATTACHMENT"|"CONTACT_ANALYSIS"|"NUMBER"|"STRING"|"DATE"|"EMAIL"|"EMAIL_MESSAGE">, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReferenceSummaryList?:array<array{Url?:array{Name?:string, Value?:string}, Attachment?:array{Name?:string, Value?:string, Status?:"AVAILABLE"|"DELETED"|"APPROVED"|"REJECTED"|"PROCESSING"|"FAILED", Arn?:string}, EmailMessage?:array{Name?:string, Arn?:string}, String?:array{Name?:string, Value?:string}, Number?:array{Name?:string, Value?:string}, Date?:array{Name?:string, Value?:string}, Email?:array{Name?:string, Value?:string}}>, NextToken?:string}>
     */
    public function listContactReferencesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, LanguageCode?:"ar-AE"|"de-CH"|"de-DE"|"en-AB"|"en-AU"|"en-GB"|"en-IE"|"en-IN"|"en-US"|"en-WL"|"es-ES"|"es-US"|"fr-CA"|"fr-FR"|"hi-IN"|"it-IT"|"ja-JP"|"ko-KR"|"pt-BR"|"pt-PT"|"zh-CN"|"en-NZ"|"en-ZA"|"ca-ES"|"da-DK"|"fi-FI"|"id-ID"|"ms-MY"|"nl-NL"|"no-NO"|"pl-PL"|"sv-SE"|"tl-PH", MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{DefaultVocabularyList:array<array{InstanceId:string, LanguageCode:"ar-AE"|"de-CH"|"de-DE"|"en-AB"|"en-AU"|"en-GB"|"en-IE"|"en-IN"|"en-US"|"en-WL"|"es-ES"|"es-US"|"fr-CA"|"fr-FR"|"hi-IN"|"it-IT"|"ja-JP"|"ko-KR"|"pt-BR"|"pt-PT"|"zh-CN"|"en-NZ"|"en-ZA"|"ca-ES"|"da-DK"|"fi-FI"|"id-ID"|"ms-MY"|"nl-NL"|"no-NO"|"pl-PL"|"sv-SE"|"tl-PH", VocabularyId:string, VocabularyName:string}>, NextToken?:string}>
     */
    public function listDefaultVocabularies(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, LanguageCode?:"ar-AE"|"de-CH"|"de-DE"|"en-AB"|"en-AU"|"en-GB"|"en-IE"|"en-IN"|"en-US"|"en-WL"|"es-ES"|"es-US"|"fr-CA"|"fr-FR"|"hi-IN"|"it-IT"|"ja-JP"|"ko-KR"|"pt-BR"|"pt-PT"|"zh-CN"|"en-NZ"|"en-ZA"|"ca-ES"|"da-DK"|"fi-FI"|"id-ID"|"ms-MY"|"nl-NL"|"no-NO"|"pl-PL"|"sv-SE"|"tl-PH", MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{DefaultVocabularyList:array<array{InstanceId:string, LanguageCode:"ar-AE"|"de-CH"|"de-DE"|"en-AB"|"en-AU"|"en-GB"|"en-IE"|"en-IN"|"en-US"|"en-WL"|"es-ES"|"es-US"|"fr-CA"|"fr-FR"|"hi-IN"|"it-IT"|"ja-JP"|"ko-KR"|"pt-BR"|"pt-PT"|"zh-CN"|"en-NZ"|"en-ZA"|"ca-ES"|"da-DK"|"fi-FI"|"id-ID"|"ms-MY"|"nl-NL"|"no-NO"|"pl-PL"|"sv-SE"|"tl-PH", VocabularyId:string, VocabularyName:string}>, NextToken?:string}>
     */
    public function listDefaultVocabulariesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, EvaluationFormId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{EvaluationFormVersionSummaryList:array<array{EvaluationFormArn:string, EvaluationFormId:string, EvaluationFormVersion:int, Locked:bool, Status:"DRAFT"|"ACTIVE", CreatedTime:int|string|\DateTimeInterface, CreatedBy:string, LastModifiedTime:int|string|\DateTimeInterface, LastModifiedBy:string}>, NextToken?:string}>
     */
    public function listEvaluationFormVersions(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, EvaluationFormId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EvaluationFormVersionSummaryList:array<array{EvaluationFormArn:string, EvaluationFormId:string, EvaluationFormVersion:int, Locked:bool, Status:"DRAFT"|"ACTIVE", CreatedTime:int|string|\DateTimeInterface, CreatedBy:string, LastModifiedTime:int|string|\DateTimeInterface, LastModifiedBy:string}>, NextToken?:string}>
     */
    public function listEvaluationFormVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{EvaluationFormSummaryList:array<array{EvaluationFormId:string, EvaluationFormArn:string, Title:string, CreatedTime:int|string|\DateTimeInterface, CreatedBy:string, LastModifiedTime:int|string|\DateTimeInterface, LastModifiedBy:string, LastActivatedTime?:int|string|\DateTimeInterface, LastActivatedBy?:string, LatestVersion:int, ActiveVersion?:int}>, NextToken?:string}>
     */
    public function listEvaluationForms(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EvaluationFormSummaryList:array<array{EvaluationFormId:string, EvaluationFormArn:string, Title:string, CreatedTime:int|string|\DateTimeInterface, CreatedBy:string, LastModifiedTime:int|string|\DateTimeInterface, LastModifiedBy:string, LastActivatedTime?:int|string|\DateTimeInterface, LastActivatedBy?:string, LatestVersion:int, ActiveVersion?:int}>, NextToken?:string}>
     */
    public function listEvaluationFormsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ResourceType?:"WHATSAPP_MESSAGING_PHONE_NUMBER"|"VOICE_PHONE_NUMBER"|"INBOUND_EMAIL"|"OUTBOUND_EMAIL"|"ANALYTICS_CONNECTOR", NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{FlowAssociationSummaryList?:array<array{ResourceId?:string, FlowId?:string, ResourceType?:"WHATSAPP_MESSAGING_PHONE_NUMBER"|"VOICE_PHONE_NUMBER"|"INBOUND_EMAIL"|"OUTBOUND_EMAIL"|"ANALYTICS_CONNECTOR"}>, NextToken?:string}>
     */
    public function listFlowAssociations(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ResourceType?:"WHATSAPP_MESSAGING_PHONE_NUMBER"|"VOICE_PHONE_NUMBER"|"INBOUND_EMAIL"|"OUTBOUND_EMAIL"|"ANALYTICS_CONNECTOR", NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{FlowAssociationSummaryList?:array<array{ResourceId?:string, FlowId?:string, ResourceType?:"WHATSAPP_MESSAGING_PHONE_NUMBER"|"VOICE_PHONE_NUMBER"|"INBOUND_EMAIL"|"OUTBOUND_EMAIL"|"ANALYTICS_CONNECTOR"}>, NextToken?:string}>
     */
    public function listFlowAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, HoursOfOperationId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, HoursOfOperationOverrideList?:array<array{HoursOfOperationOverrideId?:string, HoursOfOperationId?:string, HoursOfOperationArn?:string, Name?:string, Description?:string, Config?:array<array{Day?:"SUNDAY"|"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY", StartTime?:array{Hours:int, Minutes:int}, EndTime?:array{Hours:int, Minutes:int}}>, EffectiveFrom?:string, EffectiveTill?:string}>, LastModifiedRegion?:string, LastModifiedTime?:int|string|\DateTimeInterface}>
     */
    public function listHoursOfOperationOverrides(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, HoursOfOperationId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, HoursOfOperationOverrideList?:array<array{HoursOfOperationOverrideId?:string, HoursOfOperationId?:string, HoursOfOperationArn?:string, Name?:string, Description?:string, Config?:array<array{Day?:"SUNDAY"|"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY", StartTime?:array{Hours:int, Minutes:int}, EndTime?:array{Hours:int, Minutes:int}}>, EffectiveFrom?:string, EffectiveTill?:string}>, LastModifiedRegion?:string, LastModifiedTime?:int|string|\DateTimeInterface}>
     */
    public function listHoursOfOperationOverridesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{HoursOfOperationSummaryList?:array<array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, NextToken?:string}>
     */
    public function listHoursOfOperations(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{HoursOfOperationSummaryList?:array<array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, NextToken?:string}>
     */
    public function listHoursOfOperationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Attributes?:array<array{AttributeType?:"INBOUND_CALLS"|"OUTBOUND_CALLS"|"CONTACTFLOW_LOGS"|"CONTACT_LENS"|"AUTO_RESOLVE_BEST_VOICES"|"USE_CUSTOM_TTS_VOICES"|"EARLY_MEDIA"|"MULTI_PARTY_CONFERENCE"|"HIGH_VOLUME_OUTBOUND"|"ENHANCED_CONTACT_MONITORING"|"ENHANCED_CHAT_MONITORING"|"MULTI_PARTY_CHAT_CONFERENCE", Value?:string}>, NextToken?:string}>
     */
    public function listInstanceAttributes(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Attributes?:array<array{AttributeType?:"INBOUND_CALLS"|"OUTBOUND_CALLS"|"CONTACTFLOW_LOGS"|"CONTACT_LENS"|"AUTO_RESOLVE_BEST_VOICES"|"USE_CUSTOM_TTS_VOICES"|"EARLY_MEDIA"|"MULTI_PARTY_CONFERENCE"|"HIGH_VOLUME_OUTBOUND"|"ENHANCED_CONTACT_MONITORING"|"ENHANCED_CHAT_MONITORING"|"MULTI_PARTY_CHAT_CONFERENCE", Value?:string}>, NextToken?:string}>
     */
    public function listInstanceAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ResourceType:"CHAT_TRANSCRIPTS"|"CALL_RECORDINGS"|"SCHEDULED_REPORTS"|"MEDIA_STREAMS"|"CONTACT_TRACE_RECORDS"|"AGENT_EVENTS"|"REAL_TIME_CONTACT_ANALYSIS_SEGMENTS"|"ATTACHMENTS"|"CONTACT_EVALUATIONS"|"SCREEN_RECORDINGS"|"REAL_TIME_CONTACT_ANALYSIS_CHAT_SEGMENTS"|"REAL_TIME_CONTACT_ANALYSIS_VOICE_SEGMENTS"|"EMAIL_MESSAGES", NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{StorageConfigs?:array<array{AssociationId?:string, StorageType:"S3"|"KINESIS_VIDEO_STREAM"|"KINESIS_STREAM"|"KINESIS_FIREHOSE", S3Config?:array{BucketName:string, BucketPrefix:string, EncryptionConfig?:array{EncryptionType:"KMS", KeyId:string}}, KinesisVideoStreamConfig?:array{Prefix:string, RetentionPeriodHours:int, EncryptionConfig:array{EncryptionType:"KMS", KeyId:string}}, KinesisStreamConfig?:array{StreamArn:string}, KinesisFirehoseConfig?:array{FirehoseArn:string}}>, NextToken?:string}>
     */
    public function listInstanceStorageConfigs(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ResourceType:"CHAT_TRANSCRIPTS"|"CALL_RECORDINGS"|"SCHEDULED_REPORTS"|"MEDIA_STREAMS"|"CONTACT_TRACE_RECORDS"|"AGENT_EVENTS"|"REAL_TIME_CONTACT_ANALYSIS_SEGMENTS"|"ATTACHMENTS"|"CONTACT_EVALUATIONS"|"SCREEN_RECORDINGS"|"REAL_TIME_CONTACT_ANALYSIS_CHAT_SEGMENTS"|"REAL_TIME_CONTACT_ANALYSIS_VOICE_SEGMENTS"|"EMAIL_MESSAGES", NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{StorageConfigs?:array<array{AssociationId?:string, StorageType:"S3"|"KINESIS_VIDEO_STREAM"|"KINESIS_STREAM"|"KINESIS_FIREHOSE", S3Config?:array{BucketName:string, BucketPrefix:string, EncryptionConfig?:array{EncryptionType:"KMS", KeyId:string}}, KinesisVideoStreamConfig?:array{Prefix:string, RetentionPeriodHours:int, EncryptionConfig:array{EncryptionType:"KMS", KeyId:string}}, KinesisStreamConfig?:array{StreamArn:string}, KinesisFirehoseConfig?:array{FirehoseArn:string}}>, NextToken?:string}>
     */
    public function listInstanceStorageConfigsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{InstanceSummaryList?:array<array{Id?:string, Arn?:string, IdentityManagementType?:"SAML"|"CONNECT_MANAGED"|"EXISTING_DIRECTORY", InstanceAlias?:string, CreatedTime?:int|string|\DateTimeInterface, ServiceRole?:string, InstanceStatus?:"CREATION_IN_PROGRESS"|"ACTIVE"|"CREATION_FAILED", InboundCallsEnabled?:bool, OutboundCallsEnabled?:bool, InstanceAccessUrl?:string}>, NextToken?:string}>
     */
    public function listInstances(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{InstanceSummaryList?:array<array{Id?:string, Arn?:string, IdentityManagementType?:"SAML"|"CONNECT_MANAGED"|"EXISTING_DIRECTORY", InstanceAlias?:string, CreatedTime?:int|string|\DateTimeInterface, ServiceRole?:string, InstanceStatus?:"CREATION_IN_PROGRESS"|"ACTIVE"|"CREATION_FAILED", InboundCallsEnabled?:bool, OutboundCallsEnabled?:bool, InstanceAccessUrl?:string}>, NextToken?:string}>
     */
    public function listInstancesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, IntegrationType?:"EVENT"|"VOICE_ID"|"PINPOINT_APP"|"WISDOM_ASSISTANT"|"WISDOM_KNOWLEDGE_BASE"|"WISDOM_QUICK_RESPONSES"|"Q_MESSAGE_TEMPLATES"|"CASES_DOMAIN"|"APPLICATION"|"FILE_SCANNER"|"SES_IDENTITY"|"ANALYTICS_CONNECTOR"|"CALL_TRANSFER_CONNECTOR"|"COGNITO_USER_POOL", NextToken?:string, MaxResults?:int, IntegrationArn?:string} $args
     * @return \AWS\Result<array{IntegrationAssociationSummaryList?:array<array{IntegrationAssociationId?:string, IntegrationAssociationArn?:string, InstanceId?:string, IntegrationType?:"EVENT"|"VOICE_ID"|"PINPOINT_APP"|"WISDOM_ASSISTANT"|"WISDOM_KNOWLEDGE_BASE"|"WISDOM_QUICK_RESPONSES"|"Q_MESSAGE_TEMPLATES"|"CASES_DOMAIN"|"APPLICATION"|"FILE_SCANNER"|"SES_IDENTITY"|"ANALYTICS_CONNECTOR"|"CALL_TRANSFER_CONNECTOR"|"COGNITO_USER_POOL", IntegrationArn?:string, SourceApplicationUrl?:string, SourceApplicationName?:string, SourceType?:"SALESFORCE"|"ZENDESK"|"CASES"}>, NextToken?:string}>
     */
    public function listIntegrationAssociations(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, IntegrationType?:"EVENT"|"VOICE_ID"|"PINPOINT_APP"|"WISDOM_ASSISTANT"|"WISDOM_KNOWLEDGE_BASE"|"WISDOM_QUICK_RESPONSES"|"Q_MESSAGE_TEMPLATES"|"CASES_DOMAIN"|"APPLICATION"|"FILE_SCANNER"|"SES_IDENTITY"|"ANALYTICS_CONNECTOR"|"CALL_TRANSFER_CONNECTOR"|"COGNITO_USER_POOL", NextToken?:string, MaxResults?:int, IntegrationArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{IntegrationAssociationSummaryList?:array<array{IntegrationAssociationId?:string, IntegrationAssociationArn?:string, InstanceId?:string, IntegrationType?:"EVENT"|"VOICE_ID"|"PINPOINT_APP"|"WISDOM_ASSISTANT"|"WISDOM_KNOWLEDGE_BASE"|"WISDOM_QUICK_RESPONSES"|"Q_MESSAGE_TEMPLATES"|"CASES_DOMAIN"|"APPLICATION"|"FILE_SCANNER"|"SES_IDENTITY"|"ANALYTICS_CONNECTOR"|"CALL_TRANSFER_CONNECTOR"|"COGNITO_USER_POOL", IntegrationArn?:string, SourceApplicationUrl?:string, SourceApplicationName?:string, SourceType?:"SALESFORCE"|"ZENDESK"|"CASES"}>, NextToken?:string}>
     */
    public function listIntegrationAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{LambdaFunctions?:array<string>, NextToken?:string}>
     */
    public function listLambdaFunctions(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{LambdaFunctions?:array<string>, NextToken?:string}>
     */
    public function listLambdaFunctionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{LexBots?:array<array{Name:string, LexRegion:string}>, NextToken?:string}>
     */
    public function listLexBots(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{LexBots?:array<array{Name:string, LexRegion:string}>, NextToken?:string}>
     */
    public function listLexBotsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, PhoneNumberTypes?:array<"TOLL_FREE"|"DID"|"UIFN"|"SHARED"|"THIRD_PARTY_TF"|"THIRD_PARTY_DID"|"SHORT_CODE">, PhoneNumberCountryCodes?:array<"AF"|"AL"|"DZ"|"AS"|"AD"|"AO"|"AI"|"AQ"|"AG"|"AR"|"AM"|"AW"|"AU"|"AT"|"AZ"|"BS"|"BH"|"BD"|"BB"|"BY"|"BE"|"BZ"|"BJ"|"BM"|"BT"|"BO"|"BA"|"BW"|"BR"|"IO"|"VG"|"BN"|"BG"|"BF"|"BI"|"KH"|"CM"|"CA"|"CV"|"KY"|"CF"|"TD"|"CL"|"CN"|"CX"|"CC"|"CO"|"KM"|"CK"|"CR"|"HR"|"CU"|"CW"|"CY"|"CZ"|"CD"|"DK"|"DJ"|"DM"|"DO"|"TL"|"EC"|"EG"|"SV"|"GQ"|"ER"|"EE"|"ET"|"FK"|"FO"|"FJ"|"FI"|"FR"|"PF"|"GA"|"GM"|"GE"|"DE"|"GH"|"GI"|"GR"|"GL"|"GD"|"GU"|"GT"|"GG"|"GN"|"GW"|"GY"|"HT"|"HN"|"HK"|"HU"|"IS"|"IN"|"ID"|"IR"|"IQ"|"IE"|"IM"|"IL"|"IT"|"CI"|"JM"|"JP"|"JE"|"JO"|"KZ"|"KE"|"KI"|"KW"|"KG"|"LA"|"LV"|"LB"|"LS"|"LR"|"LY"|"LI"|"LT"|"LU"|"MO"|"MK"|"MG"|"MW"|"MY"|"MV"|"ML"|"MT"|"MH"|"MR"|"MU"|"YT"|"MX"|"FM"|"MD"|"MC"|"MN"|"ME"|"MS"|"MA"|"MZ"|"MM"|"NA"|"NR"|"NP"|"NL"|"AN"|"NC"|"NZ"|"NI"|"NE"|"NG"|"NU"|"KP"|"MP"|"NO"|"OM"|"PK"|"PW"|"PA"|"PG"|"PY"|"PE"|"PH"|"PN"|"PL"|"PT"|"PR"|"QA"|"CG"|"RE"|"RO"|"RU"|"RW"|"BL"|"SH"|"KN"|"LC"|"MF"|"PM"|"VC"|"WS"|"SM"|"ST"|"SA"|"SN"|"RS"|"SC"|"SL"|"SG"|"SX"|"SK"|"SI"|"SB"|"SO"|"ZA"|"KR"|"ES"|"LK"|"SD"|"SR"|"SJ"|"SZ"|"SE"|"CH"|"SY"|"TW"|"TJ"|"TZ"|"TH"|"TG"|"TK"|"TO"|"TT"|"TN"|"TR"|"TM"|"TC"|"TV"|"VI"|"UG"|"UA"|"AE"|"GB"|"US"|"UY"|"UZ"|"VU"|"VA"|"VE"|"VN"|"WF"|"EH"|"YE"|"ZM"|"ZW">, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{PhoneNumberSummaryList?:array<array{Id?:string, Arn?:string, PhoneNumber?:string, PhoneNumberType?:"TOLL_FREE"|"DID"|"UIFN"|"SHARED"|"THIRD_PARTY_TF"|"THIRD_PARTY_DID"|"SHORT_CODE", PhoneNumberCountryCode?:"AF"|"AL"|"DZ"|"AS"|"AD"|"AO"|"AI"|"AQ"|"AG"|"AR"|"AM"|"AW"|"AU"|"AT"|"AZ"|"BS"|"BH"|"BD"|"BB"|"BY"|"BE"|"BZ"|"BJ"|"BM"|"BT"|"BO"|"BA"|"BW"|"BR"|"IO"|"VG"|"BN"|"BG"|"BF"|"BI"|"KH"|"CM"|"CA"|"CV"|"KY"|"CF"|"TD"|"CL"|"CN"|"CX"|"CC"|"CO"|"KM"|"CK"|"CR"|"HR"|"CU"|"CW"|"CY"|"CZ"|"CD"|"DK"|"DJ"|"DM"|"DO"|"TL"|"EC"|"EG"|"SV"|"GQ"|"ER"|"EE"|"ET"|"FK"|"FO"|"FJ"|"FI"|"FR"|"PF"|"GA"|"GM"|"GE"|"DE"|"GH"|"GI"|"GR"|"GL"|"GD"|"GU"|"GT"|"GG"|"GN"|"GW"|"GY"|"HT"|"HN"|"HK"|"HU"|"IS"|"IN"|"ID"|"IR"|"IQ"|"IE"|"IM"|"IL"|"IT"|"CI"|"JM"|"JP"|"JE"|"JO"|"KZ"|"KE"|"KI"|"KW"|"KG"|"LA"|"LV"|"LB"|"LS"|"LR"|"LY"|"LI"|"LT"|"LU"|"MO"|"MK"|"MG"|"MW"|"MY"|"MV"|"ML"|"MT"|"MH"|"MR"|"MU"|"YT"|"MX"|"FM"|"MD"|"MC"|"MN"|"ME"|"MS"|"MA"|"MZ"|"MM"|"NA"|"NR"|"NP"|"NL"|"AN"|"NC"|"NZ"|"NI"|"NE"|"NG"|"NU"|"KP"|"MP"|"NO"|"OM"|"PK"|"PW"|"PA"|"PG"|"PY"|"PE"|"PH"|"PN"|"PL"|"PT"|"PR"|"QA"|"CG"|"RE"|"RO"|"RU"|"RW"|"BL"|"SH"|"KN"|"LC"|"MF"|"PM"|"VC"|"WS"|"SM"|"ST"|"SA"|"SN"|"RS"|"SC"|"SL"|"SG"|"SX"|"SK"|"SI"|"SB"|"SO"|"ZA"|"KR"|"ES"|"LK"|"SD"|"SR"|"SJ"|"SZ"|"SE"|"CH"|"SY"|"TW"|"TJ"|"TZ"|"TH"|"TG"|"TK"|"TO"|"TT"|"TN"|"TR"|"TM"|"TC"|"TV"|"VI"|"UG"|"UA"|"AE"|"GB"|"US"|"UY"|"UZ"|"VU"|"VA"|"VE"|"VN"|"WF"|"EH"|"YE"|"ZM"|"ZW"}>, NextToken?:string}>
     */
    public function listPhoneNumbers(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, PhoneNumberTypes?:array<"TOLL_FREE"|"DID"|"UIFN"|"SHARED"|"THIRD_PARTY_TF"|"THIRD_PARTY_DID"|"SHORT_CODE">, PhoneNumberCountryCodes?:array<"AF"|"AL"|"DZ"|"AS"|"AD"|"AO"|"AI"|"AQ"|"AG"|"AR"|"AM"|"AW"|"AU"|"AT"|"AZ"|"BS"|"BH"|"BD"|"BB"|"BY"|"BE"|"BZ"|"BJ"|"BM"|"BT"|"BO"|"BA"|"BW"|"BR"|"IO"|"VG"|"BN"|"BG"|"BF"|"BI"|"KH"|"CM"|"CA"|"CV"|"KY"|"CF"|"TD"|"CL"|"CN"|"CX"|"CC"|"CO"|"KM"|"CK"|"CR"|"HR"|"CU"|"CW"|"CY"|"CZ"|"CD"|"DK"|"DJ"|"DM"|"DO"|"TL"|"EC"|"EG"|"SV"|"GQ"|"ER"|"EE"|"ET"|"FK"|"FO"|"FJ"|"FI"|"FR"|"PF"|"GA"|"GM"|"GE"|"DE"|"GH"|"GI"|"GR"|"GL"|"GD"|"GU"|"GT"|"GG"|"GN"|"GW"|"GY"|"HT"|"HN"|"HK"|"HU"|"IS"|"IN"|"ID"|"IR"|"IQ"|"IE"|"IM"|"IL"|"IT"|"CI"|"JM"|"JP"|"JE"|"JO"|"KZ"|"KE"|"KI"|"KW"|"KG"|"LA"|"LV"|"LB"|"LS"|"LR"|"LY"|"LI"|"LT"|"LU"|"MO"|"MK"|"MG"|"MW"|"MY"|"MV"|"ML"|"MT"|"MH"|"MR"|"MU"|"YT"|"MX"|"FM"|"MD"|"MC"|"MN"|"ME"|"MS"|"MA"|"MZ"|"MM"|"NA"|"NR"|"NP"|"NL"|"AN"|"NC"|"NZ"|"NI"|"NE"|"NG"|"NU"|"KP"|"MP"|"NO"|"OM"|"PK"|"PW"|"PA"|"PG"|"PY"|"PE"|"PH"|"PN"|"PL"|"PT"|"PR"|"QA"|"CG"|"RE"|"RO"|"RU"|"RW"|"BL"|"SH"|"KN"|"LC"|"MF"|"PM"|"VC"|"WS"|"SM"|"ST"|"SA"|"SN"|"RS"|"SC"|"SL"|"SG"|"SX"|"SK"|"SI"|"SB"|"SO"|"ZA"|"KR"|"ES"|"LK"|"SD"|"SR"|"SJ"|"SZ"|"SE"|"CH"|"SY"|"TW"|"TJ"|"TZ"|"TH"|"TG"|"TK"|"TO"|"TT"|"TN"|"TR"|"TM"|"TC"|"TV"|"VI"|"UG"|"UA"|"AE"|"GB"|"US"|"UY"|"UZ"|"VU"|"VA"|"VE"|"VN"|"WF"|"EH"|"YE"|"ZM"|"ZW">, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumberSummaryList?:array<array{Id?:string, Arn?:string, PhoneNumber?:string, PhoneNumberType?:"TOLL_FREE"|"DID"|"UIFN"|"SHARED"|"THIRD_PARTY_TF"|"THIRD_PARTY_DID"|"SHORT_CODE", PhoneNumberCountryCode?:"AF"|"AL"|"DZ"|"AS"|"AD"|"AO"|"AI"|"AQ"|"AG"|"AR"|"AM"|"AW"|"AU"|"AT"|"AZ"|"BS"|"BH"|"BD"|"BB"|"BY"|"BE"|"BZ"|"BJ"|"BM"|"BT"|"BO"|"BA"|"BW"|"BR"|"IO"|"VG"|"BN"|"BG"|"BF"|"BI"|"KH"|"CM"|"CA"|"CV"|"KY"|"CF"|"TD"|"CL"|"CN"|"CX"|"CC"|"CO"|"KM"|"CK"|"CR"|"HR"|"CU"|"CW"|"CY"|"CZ"|"CD"|"DK"|"DJ"|"DM"|"DO"|"TL"|"EC"|"EG"|"SV"|"GQ"|"ER"|"EE"|"ET"|"FK"|"FO"|"FJ"|"FI"|"FR"|"PF"|"GA"|"GM"|"GE"|"DE"|"GH"|"GI"|"GR"|"GL"|"GD"|"GU"|"GT"|"GG"|"GN"|"GW"|"GY"|"HT"|"HN"|"HK"|"HU"|"IS"|"IN"|"ID"|"IR"|"IQ"|"IE"|"IM"|"IL"|"IT"|"CI"|"JM"|"JP"|"JE"|"JO"|"KZ"|"KE"|"KI"|"KW"|"KG"|"LA"|"LV"|"LB"|"LS"|"LR"|"LY"|"LI"|"LT"|"LU"|"MO"|"MK"|"MG"|"MW"|"MY"|"MV"|"ML"|"MT"|"MH"|"MR"|"MU"|"YT"|"MX"|"FM"|"MD"|"MC"|"MN"|"ME"|"MS"|"MA"|"MZ"|"MM"|"NA"|"NR"|"NP"|"NL"|"AN"|"NC"|"NZ"|"NI"|"NE"|"NG"|"NU"|"KP"|"MP"|"NO"|"OM"|"PK"|"PW"|"PA"|"PG"|"PY"|"PE"|"PH"|"PN"|"PL"|"PT"|"PR"|"QA"|"CG"|"RE"|"RO"|"RU"|"RW"|"BL"|"SH"|"KN"|"LC"|"MF"|"PM"|"VC"|"WS"|"SM"|"ST"|"SA"|"SN"|"RS"|"SC"|"SL"|"SG"|"SX"|"SK"|"SI"|"SB"|"SO"|"ZA"|"KR"|"ES"|"LK"|"SD"|"SR"|"SJ"|"SZ"|"SE"|"CH"|"SY"|"TW"|"TJ"|"TZ"|"TH"|"TG"|"TK"|"TO"|"TT"|"TN"|"TR"|"TM"|"TC"|"TV"|"VI"|"UG"|"UA"|"AE"|"GB"|"US"|"UY"|"UZ"|"VU"|"VA"|"VE"|"VN"|"WF"|"EH"|"YE"|"ZM"|"ZW"}>, NextToken?:string}>
     */
    public function listPhoneNumbersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TargetArn?:string, InstanceId?:string, MaxResults?:int, NextToken?:string, PhoneNumberCountryCodes?:array<"AF"|"AL"|"DZ"|"AS"|"AD"|"AO"|"AI"|"AQ"|"AG"|"AR"|"AM"|"AW"|"AU"|"AT"|"AZ"|"BS"|"BH"|"BD"|"BB"|"BY"|"BE"|"BZ"|"BJ"|"BM"|"BT"|"BO"|"BA"|"BW"|"BR"|"IO"|"VG"|"BN"|"BG"|"BF"|"BI"|"KH"|"CM"|"CA"|"CV"|"KY"|"CF"|"TD"|"CL"|"CN"|"CX"|"CC"|"CO"|"KM"|"CK"|"CR"|"HR"|"CU"|"CW"|"CY"|"CZ"|"CD"|"DK"|"DJ"|"DM"|"DO"|"TL"|"EC"|"EG"|"SV"|"GQ"|"ER"|"EE"|"ET"|"FK"|"FO"|"FJ"|"FI"|"FR"|"PF"|"GA"|"GM"|"GE"|"DE"|"GH"|"GI"|"GR"|"GL"|"GD"|"GU"|"GT"|"GG"|"GN"|"GW"|"GY"|"HT"|"HN"|"HK"|"HU"|"IS"|"IN"|"ID"|"IR"|"IQ"|"IE"|"IM"|"IL"|"IT"|"CI"|"JM"|"JP"|"JE"|"JO"|"KZ"|"KE"|"KI"|"KW"|"KG"|"LA"|"LV"|"LB"|"LS"|"LR"|"LY"|"LI"|"LT"|"LU"|"MO"|"MK"|"MG"|"MW"|"MY"|"MV"|"ML"|"MT"|"MH"|"MR"|"MU"|"YT"|"MX"|"FM"|"MD"|"MC"|"MN"|"ME"|"MS"|"MA"|"MZ"|"MM"|"NA"|"NR"|"NP"|"NL"|"AN"|"NC"|"NZ"|"NI"|"NE"|"NG"|"NU"|"KP"|"MP"|"NO"|"OM"|"PK"|"PW"|"PA"|"PG"|"PY"|"PE"|"PH"|"PN"|"PL"|"PT"|"PR"|"QA"|"CG"|"RE"|"RO"|"RU"|"RW"|"BL"|"SH"|"KN"|"LC"|"MF"|"PM"|"VC"|"WS"|"SM"|"ST"|"SA"|"SN"|"RS"|"SC"|"SL"|"SG"|"SX"|"SK"|"SI"|"SB"|"SO"|"ZA"|"KR"|"ES"|"LK"|"SD"|"SR"|"SJ"|"SZ"|"SE"|"CH"|"SY"|"TW"|"TJ"|"TZ"|"TH"|"TG"|"TK"|"TO"|"TT"|"TN"|"TR"|"TM"|"TC"|"TV"|"VI"|"UG"|"UA"|"AE"|"GB"|"US"|"UY"|"UZ"|"VU"|"VA"|"VE"|"VN"|"WF"|"EH"|"YE"|"ZM"|"ZW">, PhoneNumberTypes?:array<"TOLL_FREE"|"DID"|"UIFN"|"SHARED"|"THIRD_PARTY_TF"|"THIRD_PARTY_DID"|"SHORT_CODE">, PhoneNumberPrefix?:string} $args
     * @return \AWS\Result<array{NextToken?:string, ListPhoneNumbersSummaryList?:array<array{PhoneNumberId?:string, PhoneNumberArn?:string, PhoneNumber?:string, PhoneNumberCountryCode?:"AF"|"AL"|"DZ"|"AS"|"AD"|"AO"|"AI"|"AQ"|"AG"|"AR"|"AM"|"AW"|"AU"|"AT"|"AZ"|"BS"|"BH"|"BD"|"BB"|"BY"|"BE"|"BZ"|"BJ"|"BM"|"BT"|"BO"|"BA"|"BW"|"BR"|"IO"|"VG"|"BN"|"BG"|"BF"|"BI"|"KH"|"CM"|"CA"|"CV"|"KY"|"CF"|"TD"|"CL"|"CN"|"CX"|"CC"|"CO"|"KM"|"CK"|"CR"|"HR"|"CU"|"CW"|"CY"|"CZ"|"CD"|"DK"|"DJ"|"DM"|"DO"|"TL"|"EC"|"EG"|"SV"|"GQ"|"ER"|"EE"|"ET"|"FK"|"FO"|"FJ"|"FI"|"FR"|"PF"|"GA"|"GM"|"GE"|"DE"|"GH"|"GI"|"GR"|"GL"|"GD"|"GU"|"GT"|"GG"|"GN"|"GW"|"GY"|"HT"|"HN"|"HK"|"HU"|"IS"|"IN"|"ID"|"IR"|"IQ"|"IE"|"IM"|"IL"|"IT"|"CI"|"JM"|"JP"|"JE"|"JO"|"KZ"|"KE"|"KI"|"KW"|"KG"|"LA"|"LV"|"LB"|"LS"|"LR"|"LY"|"LI"|"LT"|"LU"|"MO"|"MK"|"MG"|"MW"|"MY"|"MV"|"ML"|"MT"|"MH"|"MR"|"MU"|"YT"|"MX"|"FM"|"MD"|"MC"|"MN"|"ME"|"MS"|"MA"|"MZ"|"MM"|"NA"|"NR"|"NP"|"NL"|"AN"|"NC"|"NZ"|"NI"|"NE"|"NG"|"NU"|"KP"|"MP"|"NO"|"OM"|"PK"|"PW"|"PA"|"PG"|"PY"|"PE"|"PH"|"PN"|"PL"|"PT"|"PR"|"QA"|"CG"|"RE"|"RO"|"RU"|"RW"|"BL"|"SH"|"KN"|"LC"|"MF"|"PM"|"VC"|"WS"|"SM"|"ST"|"SA"|"SN"|"RS"|"SC"|"SL"|"SG"|"SX"|"SK"|"SI"|"SB"|"SO"|"ZA"|"KR"|"ES"|"LK"|"SD"|"SR"|"SJ"|"SZ"|"SE"|"CH"|"SY"|"TW"|"TJ"|"TZ"|"TH"|"TG"|"TK"|"TO"|"TT"|"TN"|"TR"|"TM"|"TC"|"TV"|"VI"|"UG"|"UA"|"AE"|"GB"|"US"|"UY"|"UZ"|"VU"|"VA"|"VE"|"VN"|"WF"|"EH"|"YE"|"ZM"|"ZW", PhoneNumberType?:"TOLL_FREE"|"DID"|"UIFN"|"SHARED"|"THIRD_PARTY_TF"|"THIRD_PARTY_DID"|"SHORT_CODE", TargetArn?:string, InstanceId?:string, PhoneNumberDescription?:string, SourcePhoneNumberArn?:string}>}>
     */
    public function listPhoneNumbersV2(array $args = []): \AWS\Result { }

    /**
     * @param array{TargetArn?:string, InstanceId?:string, MaxResults?:int, NextToken?:string, PhoneNumberCountryCodes?:array<"AF"|"AL"|"DZ"|"AS"|"AD"|"AO"|"AI"|"AQ"|"AG"|"AR"|"AM"|"AW"|"AU"|"AT"|"AZ"|"BS"|"BH"|"BD"|"BB"|"BY"|"BE"|"BZ"|"BJ"|"BM"|"BT"|"BO"|"BA"|"BW"|"BR"|"IO"|"VG"|"BN"|"BG"|"BF"|"BI"|"KH"|"CM"|"CA"|"CV"|"KY"|"CF"|"TD"|"CL"|"CN"|"CX"|"CC"|"CO"|"KM"|"CK"|"CR"|"HR"|"CU"|"CW"|"CY"|"CZ"|"CD"|"DK"|"DJ"|"DM"|"DO"|"TL"|"EC"|"EG"|"SV"|"GQ"|"ER"|"EE"|"ET"|"FK"|"FO"|"FJ"|"FI"|"FR"|"PF"|"GA"|"GM"|"GE"|"DE"|"GH"|"GI"|"GR"|"GL"|"GD"|"GU"|"GT"|"GG"|"GN"|"GW"|"GY"|"HT"|"HN"|"HK"|"HU"|"IS"|"IN"|"ID"|"IR"|"IQ"|"IE"|"IM"|"IL"|"IT"|"CI"|"JM"|"JP"|"JE"|"JO"|"KZ"|"KE"|"KI"|"KW"|"KG"|"LA"|"LV"|"LB"|"LS"|"LR"|"LY"|"LI"|"LT"|"LU"|"MO"|"MK"|"MG"|"MW"|"MY"|"MV"|"ML"|"MT"|"MH"|"MR"|"MU"|"YT"|"MX"|"FM"|"MD"|"MC"|"MN"|"ME"|"MS"|"MA"|"MZ"|"MM"|"NA"|"NR"|"NP"|"NL"|"AN"|"NC"|"NZ"|"NI"|"NE"|"NG"|"NU"|"KP"|"MP"|"NO"|"OM"|"PK"|"PW"|"PA"|"PG"|"PY"|"PE"|"PH"|"PN"|"PL"|"PT"|"PR"|"QA"|"CG"|"RE"|"RO"|"RU"|"RW"|"BL"|"SH"|"KN"|"LC"|"MF"|"PM"|"VC"|"WS"|"SM"|"ST"|"SA"|"SN"|"RS"|"SC"|"SL"|"SG"|"SX"|"SK"|"SI"|"SB"|"SO"|"ZA"|"KR"|"ES"|"LK"|"SD"|"SR"|"SJ"|"SZ"|"SE"|"CH"|"SY"|"TW"|"TJ"|"TZ"|"TH"|"TG"|"TK"|"TO"|"TT"|"TN"|"TR"|"TM"|"TC"|"TV"|"VI"|"UG"|"UA"|"AE"|"GB"|"US"|"UY"|"UZ"|"VU"|"VA"|"VE"|"VN"|"WF"|"EH"|"YE"|"ZM"|"ZW">, PhoneNumberTypes?:array<"TOLL_FREE"|"DID"|"UIFN"|"SHARED"|"THIRD_PARTY_TF"|"THIRD_PARTY_DID"|"SHORT_CODE">, PhoneNumberPrefix?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, ListPhoneNumbersSummaryList?:array<array{PhoneNumberId?:string, PhoneNumberArn?:string, PhoneNumber?:string, PhoneNumberCountryCode?:"AF"|"AL"|"DZ"|"AS"|"AD"|"AO"|"AI"|"AQ"|"AG"|"AR"|"AM"|"AW"|"AU"|"AT"|"AZ"|"BS"|"BH"|"BD"|"BB"|"BY"|"BE"|"BZ"|"BJ"|"BM"|"BT"|"BO"|"BA"|"BW"|"BR"|"IO"|"VG"|"BN"|"BG"|"BF"|"BI"|"KH"|"CM"|"CA"|"CV"|"KY"|"CF"|"TD"|"CL"|"CN"|"CX"|"CC"|"CO"|"KM"|"CK"|"CR"|"HR"|"CU"|"CW"|"CY"|"CZ"|"CD"|"DK"|"DJ"|"DM"|"DO"|"TL"|"EC"|"EG"|"SV"|"GQ"|"ER"|"EE"|"ET"|"FK"|"FO"|"FJ"|"FI"|"FR"|"PF"|"GA"|"GM"|"GE"|"DE"|"GH"|"GI"|"GR"|"GL"|"GD"|"GU"|"GT"|"GG"|"GN"|"GW"|"GY"|"HT"|"HN"|"HK"|"HU"|"IS"|"IN"|"ID"|"IR"|"IQ"|"IE"|"IM"|"IL"|"IT"|"CI"|"JM"|"JP"|"JE"|"JO"|"KZ"|"KE"|"KI"|"KW"|"KG"|"LA"|"LV"|"LB"|"LS"|"LR"|"LY"|"LI"|"LT"|"LU"|"MO"|"MK"|"MG"|"MW"|"MY"|"MV"|"ML"|"MT"|"MH"|"MR"|"MU"|"YT"|"MX"|"FM"|"MD"|"MC"|"MN"|"ME"|"MS"|"MA"|"MZ"|"MM"|"NA"|"NR"|"NP"|"NL"|"AN"|"NC"|"NZ"|"NI"|"NE"|"NG"|"NU"|"KP"|"MP"|"NO"|"OM"|"PK"|"PW"|"PA"|"PG"|"PY"|"PE"|"PH"|"PN"|"PL"|"PT"|"PR"|"QA"|"CG"|"RE"|"RO"|"RU"|"RW"|"BL"|"SH"|"KN"|"LC"|"MF"|"PM"|"VC"|"WS"|"SM"|"ST"|"SA"|"SN"|"RS"|"SC"|"SL"|"SG"|"SX"|"SK"|"SI"|"SB"|"SO"|"ZA"|"KR"|"ES"|"LK"|"SD"|"SR"|"SJ"|"SZ"|"SE"|"CH"|"SY"|"TW"|"TJ"|"TZ"|"TH"|"TG"|"TK"|"TO"|"TT"|"TN"|"TR"|"TM"|"TC"|"TV"|"VI"|"UG"|"UA"|"AE"|"GB"|"US"|"UY"|"UZ"|"VU"|"VA"|"VE"|"VN"|"WF"|"EH"|"YE"|"ZM"|"ZW", PhoneNumberType?:"TOLL_FREE"|"DID"|"UIFN"|"SHARED"|"THIRD_PARTY_TF"|"THIRD_PARTY_DID"|"SHORT_CODE", TargetArn?:string, InstanceId?:string, PhoneNumberDescription?:string, SourcePhoneNumberArn?:string}>}>
     */
    public function listPhoneNumbersV2Async(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, PredefinedAttributeSummaryList?:array<array{Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>}>
     */
    public function listPredefinedAttributes(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, PredefinedAttributeSummaryList?:array<array{Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>}>
     */
    public function listPredefinedAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{PromptSummaryList?:array<array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, NextToken?:string}>
     */
    public function listPrompts(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{PromptSummaryList?:array<array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, NextToken?:string}>
     */
    public function listPromptsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, QueueId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, QuickConnectSummaryList?:array<array{Id?:string, Arn?:string, Name?:string, QuickConnectType?:"USER"|"QUEUE"|"PHONE_NUMBER", LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>
     */
    public function listQueueQuickConnects(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, QueueId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, QuickConnectSummaryList?:array<array{Id?:string, Arn?:string, Name?:string, QuickConnectType?:"USER"|"QUEUE"|"PHONE_NUMBER", LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>
     */
    public function listQueueQuickConnectsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, QueueTypes?:array<"STANDARD"|"AGENT">, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{QueueSummaryList?:array<array{Id?:string, Arn?:string, Name?:string, QueueType?:"STANDARD"|"AGENT", LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, NextToken?:string}>
     */
    public function listQueues(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, QueueTypes?:array<"STANDARD"|"AGENT">, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{QueueSummaryList?:array<array{Id?:string, Arn?:string, Name?:string, QueueType?:"STANDARD"|"AGENT", LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, NextToken?:string}>
     */
    public function listQueuesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, QuickConnectTypes?:array<"USER"|"QUEUE"|"PHONE_NUMBER">} $args
     * @return \AWS\Result<array{QuickConnectSummaryList?:array<array{Id?:string, Arn?:string, Name?:string, QuickConnectType?:"USER"|"QUEUE"|"PHONE_NUMBER", LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, NextToken?:string}>
     */
    public function listQuickConnects(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, QuickConnectTypes?:array<"USER"|"QUEUE"|"PHONE_NUMBER">} $args
     * @return \GuzzleHttp\Promise\Promise<array{QuickConnectSummaryList?:array<array{Id?:string, Arn?:string, Name?:string, QuickConnectType?:"USER"|"QUEUE"|"PHONE_NUMBER", LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, NextToken?:string}>
     */
    public function listQuickConnectsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ContactId:string, MaxResults?:int, NextToken?:string, OutputType:"Raw"|"Redacted", SegmentTypes:array<"Transcript"|"Categories"|"Issues"|"Event"|"Attachments"|"PostContactSummary">} $args
     * @return \AWS\Result<array{Channel:"VOICE"|"CHAT", Status:"IN_PROGRESS"|"FAILED"|"COMPLETED", Segments:array<array{Transcript?:array{Id:string, ParticipantId:string, ParticipantRole:"AGENT"|"CUSTOMER"|"SYSTEM"|"CUSTOM_BOT"|"SUPERVISOR", DisplayName?:string, Content:string, ContentType?:string, Time:array{AbsoluteTime?:int|string|\DateTimeInterface}, Redaction?:array{CharacterOffsets?:array<array{BeginOffsetChar:int, EndOffsetChar:int}>}, Sentiment?:"POSITIVE"|"NEGATIVE"|"NEUTRAL"}, Categories?:array{MatchedDetails:array<string, array{PointsOfInterest:array<array{TranscriptItems?:array<array{Id:string, CharacterOffsets?:array{BeginOffsetChar:int, EndOffsetChar:int}}>}>}>}, Issues?:array{IssuesDetected:array<array{TranscriptItems:array<array{Content?:string, Id:string, CharacterOffsets?:array{BeginOffsetChar:int, EndOffsetChar:int}}>}>}, Event?:array{Id:string, ParticipantId?:string, ParticipantRole?:"AGENT"|"CUSTOMER"|"SYSTEM"|"CUSTOM_BOT"|"SUPERVISOR", DisplayName?:string, EventType:string, Time:array{AbsoluteTime?:int|string|\DateTimeInterface}}, Attachments?:array{Id:string, ParticipantId:string, ParticipantRole:"AGENT"|"CUSTOMER"|"SYSTEM"|"CUSTOM_BOT"|"SUPERVISOR", DisplayName?:string, Attachments:mixed, Time:array{AbsoluteTime?:int|string|\DateTimeInterface}}, PostContactSummary?:array{Content?:string, Status:"FAILED"|"COMPLETED", FailureCode?:"QUOTA_EXCEEDED"|"INSUFFICIENT_CONVERSATION_CONTENT"|"FAILED_SAFETY_GUIDELINES"|"INVALID_ANALYSIS_CONFIGURATION"|"INTERNAL_ERROR"}}>, NextToken?:string}>
     */
    public function listRealtimeContactAnalysisSegmentsV2(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ContactId:string, MaxResults?:int, NextToken?:string, OutputType:"Raw"|"Redacted", SegmentTypes:array<"Transcript"|"Categories"|"Issues"|"Event"|"Attachments"|"PostContactSummary">} $args
     * @return \GuzzleHttp\Promise\Promise<array{Channel:"VOICE"|"CHAT", Status:"IN_PROGRESS"|"FAILED"|"COMPLETED", Segments:array<array{Transcript?:array{Id:string, ParticipantId:string, ParticipantRole:"AGENT"|"CUSTOMER"|"SYSTEM"|"CUSTOM_BOT"|"SUPERVISOR", DisplayName?:string, Content:string, ContentType?:string, Time:array{AbsoluteTime?:int|string|\DateTimeInterface}, Redaction?:array{CharacterOffsets?:array<array{BeginOffsetChar:int, EndOffsetChar:int}>}, Sentiment?:"POSITIVE"|"NEGATIVE"|"NEUTRAL"}, Categories?:array{MatchedDetails:array<string, array{PointsOfInterest:array<array{TranscriptItems?:array<array{Id:string, CharacterOffsets?:array{BeginOffsetChar:int, EndOffsetChar:int}}>}>}>}, Issues?:array{IssuesDetected:array<array{TranscriptItems:array<array{Content?:string, Id:string, CharacterOffsets?:array{BeginOffsetChar:int, EndOffsetChar:int}}>}>}, Event?:array{Id:string, ParticipantId?:string, ParticipantRole?:"AGENT"|"CUSTOMER"|"SYSTEM"|"CUSTOM_BOT"|"SUPERVISOR", DisplayName?:string, EventType:string, Time:array{AbsoluteTime?:int|string|\DateTimeInterface}}, Attachments?:array{Id:string, ParticipantId:string, ParticipantRole:"AGENT"|"CUSTOMER"|"SYSTEM"|"CUSTOM_BOT"|"SUPERVISOR", DisplayName?:string, Attachments:mixed, Time:array{AbsoluteTime?:int|string|\DateTimeInterface}}, PostContactSummary?:array{Content?:string, Status:"FAILED"|"COMPLETED", FailureCode?:"QUOTA_EXCEEDED"|"INSUFFICIENT_CONVERSATION_CONTENT"|"FAILED_SAFETY_GUIDELINES"|"INVALID_ANALYSIS_CONFIGURATION"|"INTERNAL_ERROR"}}>, NextToken?:string}>
     */
    public function listRealtimeContactAnalysisSegmentsV2Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, RoutingProfileId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, RoutingProfileQueueConfigSummaryList?:array<array{QueueId:string, QueueArn:string, QueueName:string, Priority:int, Delay:int, Channel:"VOICE"|"CHAT"|"TASK"|"EMAIL"}>, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>
     */
    public function listRoutingProfileQueues(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, RoutingProfileId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, RoutingProfileQueueConfigSummaryList?:array<array{QueueId:string, QueueArn:string, QueueName:string, Priority:int, Delay:int, Channel:"VOICE"|"CHAT"|"TASK"|"EMAIL"}>, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>
     */
    public function listRoutingProfileQueuesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{RoutingProfileSummaryList?:array<array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, NextToken?:string}>
     */
    public function listRoutingProfiles(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{RoutingProfileSummaryList?:array<array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, NextToken?:string}>
     */
    public function listRoutingProfilesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, PublishStatus?:"DRAFT"|"PUBLISHED", EventSourceName?:"OnPostCallAnalysisAvailable"|"OnRealTimeCallAnalysisAvailable"|"OnRealTimeChatAnalysisAvailable"|"OnPostChatAnalysisAvailable"|"OnZendeskTicketCreate"|"OnZendeskTicketStatusUpdate"|"OnSalesforceCaseCreate"|"OnContactEvaluationSubmit"|"OnMetricDataUpdate"|"OnCaseCreate"|"OnCaseUpdate", MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{RuleSummaryList:array<array{Name:string, RuleId:string, RuleArn:string, EventSourceName:"OnPostCallAnalysisAvailable"|"OnRealTimeCallAnalysisAvailable"|"OnRealTimeChatAnalysisAvailable"|"OnPostChatAnalysisAvailable"|"OnZendeskTicketCreate"|"OnZendeskTicketStatusUpdate"|"OnSalesforceCaseCreate"|"OnContactEvaluationSubmit"|"OnMetricDataUpdate"|"OnCaseCreate"|"OnCaseUpdate", PublishStatus:"DRAFT"|"PUBLISHED", ActionSummaries:array<array{ActionType:"CREATE_TASK"|"ASSIGN_CONTACT_CATEGORY"|"GENERATE_EVENTBRIDGE_EVENT"|"SEND_NOTIFICATION"|"CREATE_CASE"|"UPDATE_CASE"|"END_ASSOCIATED_TASKS"|"SUBMIT_AUTO_EVALUATION"}>, CreatedTime:int|string|\DateTimeInterface, LastUpdatedTime:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listRules(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, PublishStatus?:"DRAFT"|"PUBLISHED", EventSourceName?:"OnPostCallAnalysisAvailable"|"OnRealTimeCallAnalysisAvailable"|"OnRealTimeChatAnalysisAvailable"|"OnPostChatAnalysisAvailable"|"OnZendeskTicketCreate"|"OnZendeskTicketStatusUpdate"|"OnSalesforceCaseCreate"|"OnContactEvaluationSubmit"|"OnMetricDataUpdate"|"OnCaseCreate"|"OnCaseUpdate", MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RuleSummaryList:array<array{Name:string, RuleId:string, RuleArn:string, EventSourceName:"OnPostCallAnalysisAvailable"|"OnRealTimeCallAnalysisAvailable"|"OnRealTimeChatAnalysisAvailable"|"OnPostChatAnalysisAvailable"|"OnZendeskTicketCreate"|"OnZendeskTicketStatusUpdate"|"OnSalesforceCaseCreate"|"OnContactEvaluationSubmit"|"OnMetricDataUpdate"|"OnCaseCreate"|"OnCaseUpdate", PublishStatus:"DRAFT"|"PUBLISHED", ActionSummaries:array<array{ActionType:"CREATE_TASK"|"ASSIGN_CONTACT_CATEGORY"|"GENERATE_EVENTBRIDGE_EVENT"|"SEND_NOTIFICATION"|"CREATE_CASE"|"UPDATE_CASE"|"END_ASSOCIATED_TASKS"|"SUBMIT_AUTO_EVALUATION"}>, CreatedTime:int|string|\DateTimeInterface, LastUpdatedTime:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listRulesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{SecurityKeys?:array<array{AssociationId?:string, Key?:string, CreationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listSecurityKeys(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{SecurityKeys?:array<array{AssociationId?:string, Key?:string, CreationTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listSecurityKeysAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SecurityProfileId:string, InstanceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Applications?:array<array{Namespace?:string, ApplicationPermissions?:array<string>}>, NextToken?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>
     */
    public function listSecurityProfileApplications(array $args): \AWS\Result { }

    /**
     * @param array{SecurityProfileId:string, InstanceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Applications?:array<array{Namespace?:string, ApplicationPermissions?:array<string>}>, NextToken?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>
     */
    public function listSecurityProfileApplicationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SecurityProfileId:string, InstanceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Permissions?:array<string>, NextToken?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>
     */
    public function listSecurityProfilePermissions(array $args): \AWS\Result { }

    /**
     * @param array{SecurityProfileId:string, InstanceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Permissions?:array<string>, NextToken?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>
     */
    public function listSecurityProfilePermissionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{SecurityProfileSummaryList?:array<array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, NextToken?:string}>
     */
    public function listSecurityProfiles(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{SecurityProfileSummaryList?:array<array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, NextToken?:string}>
     */
    public function listSecurityProfilesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{tags?:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, Status?:"ACTIVE"|"INACTIVE", Name?:string} $args
     * @return \AWS\Result<array{TaskTemplates?:array<array{Id?:string, Arn?:string, Name?:string, Description?:string, Status?:"ACTIVE"|"INACTIVE", LastModifiedTime?:int|string|\DateTimeInterface, CreatedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listTaskTemplates(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, Status?:"ACTIVE"|"INACTIVE", Name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TaskTemplates?:array<array{Id?:string, Arn?:string, Name?:string, Description?:string, Status?:"ACTIVE"|"INACTIVE", LastModifiedTime?:int|string|\DateTimeInterface, CreatedTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listTaskTemplatesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrafficDistributionGroupId:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, TrafficDistributionGroupUserSummaryList?:array<array{UserId?:string}>}>
     */
    public function listTrafficDistributionGroupUsers(array $args): \AWS\Result { }

    /**
     * @param array{TrafficDistributionGroupId:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, TrafficDistributionGroupUserSummaryList?:array<array{UserId?:string}>}>
     */
    public function listTrafficDistributionGroupUsersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, InstanceId?:string} $args
     * @return \AWS\Result<array{NextToken?:string, TrafficDistributionGroupSummaryList?:array<array{Id?:string, Arn?:string, Name?:string, InstanceArn?:string, Status?:"CREATION_IN_PROGRESS"|"ACTIVE"|"CREATION_FAILED"|"PENDING_DELETION"|"DELETION_FAILED"|"UPDATE_IN_PROGRESS", IsDefault?:bool}>}>
     */
    public function listTrafficDistributionGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string, InstanceId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, TrafficDistributionGroupSummaryList?:array<array{Id?:string, Arn?:string, Name?:string, InstanceArn?:string, Status?:"CREATION_IN_PROGRESS"|"ACTIVE"|"CREATION_FAILED"|"PENDING_DELETION"|"DELETION_FAILED"|"UPDATE_IN_PROGRESS", IsDefault?:bool}>}>
     */
    public function listTrafficDistributionGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, IntegrationAssociationId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{UseCaseSummaryList?:array<array{UseCaseId?:string, UseCaseArn?:string, UseCaseType?:"RULES_EVALUATION"|"CONNECT_CAMPAIGNS"}>, NextToken?:string}>
     */
    public function listUseCases(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, IntegrationAssociationId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{UseCaseSummaryList?:array<array{UseCaseId?:string, UseCaseArn?:string, UseCaseType?:"RULES_EVALUATION"|"CONNECT_CAMPAIGNS"}>, NextToken?:string}>
     */
    public function listUseCasesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{UserHierarchyGroupSummaryList?:array<array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, NextToken?:string}>
     */
    public function listUserHierarchyGroups(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserHierarchyGroupSummaryList?:array<array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, NextToken?:string}>
     */
    public function listUserHierarchyGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, UserId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, UserProficiencyList?:array<array{AttributeName:string, AttributeValue:string, Level:float}>, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>
     */
    public function listUserProficiencies(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, UserId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, UserProficiencyList?:array<array{AttributeName:string, AttributeValue:string, Level:float}>, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>
     */
    public function listUserProficienciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{UserSummaryList?:array<array{Id?:string, Arn?:string, Username?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, NextToken?:string}>
     */
    public function listUsers(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserSummaryList?:array<array{Id?:string, Arn?:string, Username?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, NextToken?:string}>
     */
    public function listUsersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ViewId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ViewVersionSummaryList?:array<array{Id?:string, Arn?:string, Description?:string, Name?:string, Type?:"CUSTOMER_MANAGED"|"AWS_MANAGED", Version?:int, VersionDescription?:string}>, NextToken?:string}>
     */
    public function listViewVersions(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ViewId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ViewVersionSummaryList?:array<array{Id?:string, Arn?:string, Description?:string, Name?:string, Type?:"CUSTOMER_MANAGED"|"AWS_MANAGED", Version?:int, VersionDescription?:string}>, NextToken?:string}>
     */
    public function listViewVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, Type?:"CUSTOMER_MANAGED"|"AWS_MANAGED", NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ViewsSummaryList?:array<array{Id?:string, Arn?:string, Name?:string, Type?:"CUSTOMER_MANAGED"|"AWS_MANAGED", Status?:"PUBLISHED"|"SAVED", Description?:string}>, NextToken?:string}>
     */
    public function listViews(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, Type?:"CUSTOMER_MANAGED"|"AWS_MANAGED", NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ViewsSummaryList?:array<array{Id?:string, Arn?:string, Name?:string, Type?:"CUSTOMER_MANAGED"|"AWS_MANAGED", Status?:"PUBLISHED"|"SAVED", Description?:string}>, NextToken?:string}>
     */
    public function listViewsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ContactId:string, UserId:string, AllowedMonitorCapabilities?:array<"SILENT_MONITOR"|"BARGE">, ClientToken?:string} $args
     * @return \AWS\Result<array{ContactId?:string, ContactArn?:string}>
     */
    public function monitorContact(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ContactId:string, UserId:string, AllowedMonitorCapabilities?:array<"SILENT_MONITOR"|"BARGE">, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContactId?:string, ContactArn?:string}>
     */
    public function monitorContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContactId:string, InstanceId:string, ContactFlowId?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function pauseContact(array $args): \AWS\Result { }

    /**
     * @param array{ContactId:string, InstanceId:string, ContactFlowId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function pauseContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{UserId:string, InstanceId:string, AgentStatusId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function putUserStatus(array $args): \AWS\Result { }

    /**
     * @param array{UserId:string, InstanceId:string, AgentStatusId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putUserStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PhoneNumberId:string, ClientToken?:string} $args
     * @return \AWS\Result<void>
     */
    public function releasePhoneNumber(array $args): \AWS\Result { }

    /**
     * @param array{PhoneNumberId:string, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function releasePhoneNumberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ReplicaRegion:string, ClientToken?:string, ReplicaAlias:string} $args
     * @return \AWS\Result<array{Id?:string, Arn?:string}>
     */
    public function replicateInstance(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ReplicaRegion:string, ClientToken?:string, ReplicaAlias:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Id?:string, Arn?:string}>
     */
    public function replicateInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContactId:string, InstanceId:string, ContactFlowId?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function resumeContact(array $args): \AWS\Result { }

    /**
     * @param array{ContactId:string, InstanceId:string, ContactFlowId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function resumeContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ContactId:string, InitialContactId:string, ContactRecordingType?:"AGENT"|"IVR"|"SCREEN"} $args
     * @return \AWS\Result<array{}>
     */
    public function resumeContactRecording(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ContactId:string, InitialContactId:string, ContactRecordingType?:"AGENT"|"IVR"|"SCREEN"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function resumeContactRecordingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, SearchFilter?:array{AttributeFilter?:array{OrConditions?:array<array{TagConditions?:array<array{TagKey?:string, TagValue?:string}>}>, AndCondition?:array{TagConditions?:array<array{TagKey?:string, TagValue?:string}>}, TagCondition?:array{TagKey?:string, TagValue?:string}}}, SearchCriteria?:array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:array<array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}} $args
     * @return \AWS\Result<array{AgentStatuses?:array<array{AgentStatusARN?:string, AgentStatusId?:string, Name?:string, Description?:string, Type?:"ROUTABLE"|"CUSTOM"|"OFFLINE", DisplayOrder?:int, State?:"ENABLED"|"DISABLED", Tags?:array<string, string>, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, NextToken?:string, ApproximateTotalCount?:int}>
     */
    public function searchAgentStatuses(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, SearchFilter?:array{AttributeFilter?:array{OrConditions?:array<array{TagConditions?:array<array{TagKey?:string, TagValue?:string}>}>, AndCondition?:array{TagConditions?:array<array{TagKey?:string, TagValue?:string}>}, TagCondition?:array{TagKey?:string, TagValue?:string}}}, SearchCriteria?:array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:array<array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{AgentStatuses?:array<array{AgentStatusARN?:string, AgentStatusId?:string, Name?:string, Description?:string, Type?:"ROUTABLE"|"CUSTOM"|"OFFLINE", DisplayOrder?:int, State?:"ENABLED"|"DISABLED", Tags?:array<string, string>, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, NextToken?:string, ApproximateTotalCount?:int}>
     */
    public function searchAgentStatusesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TargetArn?:string, InstanceId?:string, PhoneNumberCountryCode:"AF"|"AL"|"DZ"|"AS"|"AD"|"AO"|"AI"|"AQ"|"AG"|"AR"|"AM"|"AW"|"AU"|"AT"|"AZ"|"BS"|"BH"|"BD"|"BB"|"BY"|"BE"|"BZ"|"BJ"|"BM"|"BT"|"BO"|"BA"|"BW"|"BR"|"IO"|"VG"|"BN"|"BG"|"BF"|"BI"|"KH"|"CM"|"CA"|"CV"|"KY"|"CF"|"TD"|"CL"|"CN"|"CX"|"CC"|"CO"|"KM"|"CK"|"CR"|"HR"|"CU"|"CW"|"CY"|"CZ"|"CD"|"DK"|"DJ"|"DM"|"DO"|"TL"|"EC"|"EG"|"SV"|"GQ"|"ER"|"EE"|"ET"|"FK"|"FO"|"FJ"|"FI"|"FR"|"PF"|"GA"|"GM"|"GE"|"DE"|"GH"|"GI"|"GR"|"GL"|"GD"|"GU"|"GT"|"GG"|"GN"|"GW"|"GY"|"HT"|"HN"|"HK"|"HU"|"IS"|"IN"|"ID"|"IR"|"IQ"|"IE"|"IM"|"IL"|"IT"|"CI"|"JM"|"JP"|"JE"|"JO"|"KZ"|"KE"|"KI"|"KW"|"KG"|"LA"|"LV"|"LB"|"LS"|"LR"|"LY"|"LI"|"LT"|"LU"|"MO"|"MK"|"MG"|"MW"|"MY"|"MV"|"ML"|"MT"|"MH"|"MR"|"MU"|"YT"|"MX"|"FM"|"MD"|"MC"|"MN"|"ME"|"MS"|"MA"|"MZ"|"MM"|"NA"|"NR"|"NP"|"NL"|"AN"|"NC"|"NZ"|"NI"|"NE"|"NG"|"NU"|"KP"|"MP"|"NO"|"OM"|"PK"|"PW"|"PA"|"PG"|"PY"|"PE"|"PH"|"PN"|"PL"|"PT"|"PR"|"QA"|"CG"|"RE"|"RO"|"RU"|"RW"|"BL"|"SH"|"KN"|"LC"|"MF"|"PM"|"VC"|"WS"|"SM"|"ST"|"SA"|"SN"|"RS"|"SC"|"SL"|"SG"|"SX"|"SK"|"SI"|"SB"|"SO"|"ZA"|"KR"|"ES"|"LK"|"SD"|"SR"|"SJ"|"SZ"|"SE"|"CH"|"SY"|"TW"|"TJ"|"TZ"|"TH"|"TG"|"TK"|"TO"|"TT"|"TN"|"TR"|"TM"|"TC"|"TV"|"VI"|"UG"|"UA"|"AE"|"GB"|"US"|"UY"|"UZ"|"VU"|"VA"|"VE"|"VN"|"WF"|"EH"|"YE"|"ZM"|"ZW", PhoneNumberType:"TOLL_FREE"|"DID"|"UIFN"|"SHARED"|"THIRD_PARTY_TF"|"THIRD_PARTY_DID"|"SHORT_CODE", PhoneNumberPrefix?:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, AvailableNumbersList?:array<array{PhoneNumber?:string, PhoneNumberCountryCode?:"AF"|"AL"|"DZ"|"AS"|"AD"|"AO"|"AI"|"AQ"|"AG"|"AR"|"AM"|"AW"|"AU"|"AT"|"AZ"|"BS"|"BH"|"BD"|"BB"|"BY"|"BE"|"BZ"|"BJ"|"BM"|"BT"|"BO"|"BA"|"BW"|"BR"|"IO"|"VG"|"BN"|"BG"|"BF"|"BI"|"KH"|"CM"|"CA"|"CV"|"KY"|"CF"|"TD"|"CL"|"CN"|"CX"|"CC"|"CO"|"KM"|"CK"|"CR"|"HR"|"CU"|"CW"|"CY"|"CZ"|"CD"|"DK"|"DJ"|"DM"|"DO"|"TL"|"EC"|"EG"|"SV"|"GQ"|"ER"|"EE"|"ET"|"FK"|"FO"|"FJ"|"FI"|"FR"|"PF"|"GA"|"GM"|"GE"|"DE"|"GH"|"GI"|"GR"|"GL"|"GD"|"GU"|"GT"|"GG"|"GN"|"GW"|"GY"|"HT"|"HN"|"HK"|"HU"|"IS"|"IN"|"ID"|"IR"|"IQ"|"IE"|"IM"|"IL"|"IT"|"CI"|"JM"|"JP"|"JE"|"JO"|"KZ"|"KE"|"KI"|"KW"|"KG"|"LA"|"LV"|"LB"|"LS"|"LR"|"LY"|"LI"|"LT"|"LU"|"MO"|"MK"|"MG"|"MW"|"MY"|"MV"|"ML"|"MT"|"MH"|"MR"|"MU"|"YT"|"MX"|"FM"|"MD"|"MC"|"MN"|"ME"|"MS"|"MA"|"MZ"|"MM"|"NA"|"NR"|"NP"|"NL"|"AN"|"NC"|"NZ"|"NI"|"NE"|"NG"|"NU"|"KP"|"MP"|"NO"|"OM"|"PK"|"PW"|"PA"|"PG"|"PY"|"PE"|"PH"|"PN"|"PL"|"PT"|"PR"|"QA"|"CG"|"RE"|"RO"|"RU"|"RW"|"BL"|"SH"|"KN"|"LC"|"MF"|"PM"|"VC"|"WS"|"SM"|"ST"|"SA"|"SN"|"RS"|"SC"|"SL"|"SG"|"SX"|"SK"|"SI"|"SB"|"SO"|"ZA"|"KR"|"ES"|"LK"|"SD"|"SR"|"SJ"|"SZ"|"SE"|"CH"|"SY"|"TW"|"TJ"|"TZ"|"TH"|"TG"|"TK"|"TO"|"TT"|"TN"|"TR"|"TM"|"TC"|"TV"|"VI"|"UG"|"UA"|"AE"|"GB"|"US"|"UY"|"UZ"|"VU"|"VA"|"VE"|"VN"|"WF"|"EH"|"YE"|"ZM"|"ZW", PhoneNumberType?:"TOLL_FREE"|"DID"|"UIFN"|"SHARED"|"THIRD_PARTY_TF"|"THIRD_PARTY_DID"|"SHORT_CODE"}>}>
     */
    public function searchAvailablePhoneNumbers(array $args): \AWS\Result { }

    /**
     * @param array{TargetArn?:string, InstanceId?:string, PhoneNumberCountryCode:"AF"|"AL"|"DZ"|"AS"|"AD"|"AO"|"AI"|"AQ"|"AG"|"AR"|"AM"|"AW"|"AU"|"AT"|"AZ"|"BS"|"BH"|"BD"|"BB"|"BY"|"BE"|"BZ"|"BJ"|"BM"|"BT"|"BO"|"BA"|"BW"|"BR"|"IO"|"VG"|"BN"|"BG"|"BF"|"BI"|"KH"|"CM"|"CA"|"CV"|"KY"|"CF"|"TD"|"CL"|"CN"|"CX"|"CC"|"CO"|"KM"|"CK"|"CR"|"HR"|"CU"|"CW"|"CY"|"CZ"|"CD"|"DK"|"DJ"|"DM"|"DO"|"TL"|"EC"|"EG"|"SV"|"GQ"|"ER"|"EE"|"ET"|"FK"|"FO"|"FJ"|"FI"|"FR"|"PF"|"GA"|"GM"|"GE"|"DE"|"GH"|"GI"|"GR"|"GL"|"GD"|"GU"|"GT"|"GG"|"GN"|"GW"|"GY"|"HT"|"HN"|"HK"|"HU"|"IS"|"IN"|"ID"|"IR"|"IQ"|"IE"|"IM"|"IL"|"IT"|"CI"|"JM"|"JP"|"JE"|"JO"|"KZ"|"KE"|"KI"|"KW"|"KG"|"LA"|"LV"|"LB"|"LS"|"LR"|"LY"|"LI"|"LT"|"LU"|"MO"|"MK"|"MG"|"MW"|"MY"|"MV"|"ML"|"MT"|"MH"|"MR"|"MU"|"YT"|"MX"|"FM"|"MD"|"MC"|"MN"|"ME"|"MS"|"MA"|"MZ"|"MM"|"NA"|"NR"|"NP"|"NL"|"AN"|"NC"|"NZ"|"NI"|"NE"|"NG"|"NU"|"KP"|"MP"|"NO"|"OM"|"PK"|"PW"|"PA"|"PG"|"PY"|"PE"|"PH"|"PN"|"PL"|"PT"|"PR"|"QA"|"CG"|"RE"|"RO"|"RU"|"RW"|"BL"|"SH"|"KN"|"LC"|"MF"|"PM"|"VC"|"WS"|"SM"|"ST"|"SA"|"SN"|"RS"|"SC"|"SL"|"SG"|"SX"|"SK"|"SI"|"SB"|"SO"|"ZA"|"KR"|"ES"|"LK"|"SD"|"SR"|"SJ"|"SZ"|"SE"|"CH"|"SY"|"TW"|"TJ"|"TZ"|"TH"|"TG"|"TK"|"TO"|"TT"|"TN"|"TR"|"TM"|"TC"|"TV"|"VI"|"UG"|"UA"|"AE"|"GB"|"US"|"UY"|"UZ"|"VU"|"VA"|"VE"|"VN"|"WF"|"EH"|"YE"|"ZM"|"ZW", PhoneNumberType:"TOLL_FREE"|"DID"|"UIFN"|"SHARED"|"THIRD_PARTY_TF"|"THIRD_PARTY_DID"|"SHORT_CODE", PhoneNumberPrefix?:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, AvailableNumbersList?:array<array{PhoneNumber?:string, PhoneNumberCountryCode?:"AF"|"AL"|"DZ"|"AS"|"AD"|"AO"|"AI"|"AQ"|"AG"|"AR"|"AM"|"AW"|"AU"|"AT"|"AZ"|"BS"|"BH"|"BD"|"BB"|"BY"|"BE"|"BZ"|"BJ"|"BM"|"BT"|"BO"|"BA"|"BW"|"BR"|"IO"|"VG"|"BN"|"BG"|"BF"|"BI"|"KH"|"CM"|"CA"|"CV"|"KY"|"CF"|"TD"|"CL"|"CN"|"CX"|"CC"|"CO"|"KM"|"CK"|"CR"|"HR"|"CU"|"CW"|"CY"|"CZ"|"CD"|"DK"|"DJ"|"DM"|"DO"|"TL"|"EC"|"EG"|"SV"|"GQ"|"ER"|"EE"|"ET"|"FK"|"FO"|"FJ"|"FI"|"FR"|"PF"|"GA"|"GM"|"GE"|"DE"|"GH"|"GI"|"GR"|"GL"|"GD"|"GU"|"GT"|"GG"|"GN"|"GW"|"GY"|"HT"|"HN"|"HK"|"HU"|"IS"|"IN"|"ID"|"IR"|"IQ"|"IE"|"IM"|"IL"|"IT"|"CI"|"JM"|"JP"|"JE"|"JO"|"KZ"|"KE"|"KI"|"KW"|"KG"|"LA"|"LV"|"LB"|"LS"|"LR"|"LY"|"LI"|"LT"|"LU"|"MO"|"MK"|"MG"|"MW"|"MY"|"MV"|"ML"|"MT"|"MH"|"MR"|"MU"|"YT"|"MX"|"FM"|"MD"|"MC"|"MN"|"ME"|"MS"|"MA"|"MZ"|"MM"|"NA"|"NR"|"NP"|"NL"|"AN"|"NC"|"NZ"|"NI"|"NE"|"NG"|"NU"|"KP"|"MP"|"NO"|"OM"|"PK"|"PW"|"PA"|"PG"|"PY"|"PE"|"PH"|"PN"|"PL"|"PT"|"PR"|"QA"|"CG"|"RE"|"RO"|"RU"|"RW"|"BL"|"SH"|"KN"|"LC"|"MF"|"PM"|"VC"|"WS"|"SM"|"ST"|"SA"|"SN"|"RS"|"SC"|"SL"|"SG"|"SX"|"SK"|"SI"|"SB"|"SO"|"ZA"|"KR"|"ES"|"LK"|"SD"|"SR"|"SJ"|"SZ"|"SE"|"CH"|"SY"|"TW"|"TJ"|"TZ"|"TH"|"TG"|"TK"|"TO"|"TT"|"TN"|"TR"|"TM"|"TC"|"TV"|"VI"|"UG"|"UA"|"AE"|"GB"|"US"|"UY"|"UZ"|"VU"|"VA"|"VE"|"VN"|"WF"|"EH"|"YE"|"ZM"|"ZW", PhoneNumberType?:"TOLL_FREE"|"DID"|"UIFN"|"SHARED"|"THIRD_PARTY_TF"|"THIRD_PARTY_DID"|"SHORT_CODE"}>}>
     */
    public function searchAvailablePhoneNumbersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, SearchFilter?:array{TagFilter?:array{OrConditions?:array<array<array{TagKey?:string, TagValue?:string}>>, AndConditions?:array<array{TagKey?:string, TagValue?:string}>, TagCondition?:array{TagKey?:string, TagValue?:string}}}, SearchCriteria?:array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, StateCondition?:"ACTIVE"|"ARCHIVED", StatusCondition?:"PUBLISHED"|"SAVED"}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, StateCondition?:"ACTIVE"|"ARCHIVED", StatusCondition?:"PUBLISHED"|"SAVED"}>, AndConditions?:array<array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, StateCondition?:"ACTIVE"|"ARCHIVED", StatusCondition?:"PUBLISHED"|"SAVED"}>, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, StateCondition?:"ACTIVE"|"ARCHIVED", StatusCondition?:"PUBLISHED"|"SAVED"}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, StateCondition?:"ACTIVE"|"ARCHIVED", StatusCondition?:"PUBLISHED"|"SAVED"}} $args
     * @return \AWS\Result<array{ContactFlowModules?:array<array{Arn?:string, Id?:string, Name?:string, Content?:string, Description?:string, State?:"ACTIVE"|"ARCHIVED", Status?:"PUBLISHED"|"SAVED", Tags?:array<string, string>}>, NextToken?:string, ApproximateTotalCount?:int}>
     */
    public function searchContactFlowModules(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, SearchFilter?:array{TagFilter?:array{OrConditions?:array<array<array{TagKey?:string, TagValue?:string}>>, AndConditions?:array<array{TagKey?:string, TagValue?:string}>, TagCondition?:array{TagKey?:string, TagValue?:string}}}, SearchCriteria?:array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, StateCondition?:"ACTIVE"|"ARCHIVED", StatusCondition?:"PUBLISHED"|"SAVED"}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, StateCondition?:"ACTIVE"|"ARCHIVED", StatusCondition?:"PUBLISHED"|"SAVED"}>, AndConditions?:array<array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, StateCondition?:"ACTIVE"|"ARCHIVED", StatusCondition?:"PUBLISHED"|"SAVED"}>, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, StateCondition?:"ACTIVE"|"ARCHIVED", StatusCondition?:"PUBLISHED"|"SAVED"}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, StateCondition?:"ACTIVE"|"ARCHIVED", StatusCondition?:"PUBLISHED"|"SAVED"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContactFlowModules?:array<array{Arn?:string, Id?:string, Name?:string, Content?:string, Description?:string, State?:"ACTIVE"|"ARCHIVED", Status?:"PUBLISHED"|"SAVED", Tags?:array<string, string>}>, NextToken?:string, ApproximateTotalCount?:int}>
     */
    public function searchContactFlowModulesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, SearchFilter?:array{TagFilter?:array{OrConditions?:array<array<array{TagKey?:string, TagValue?:string}>>, AndConditions?:array<array{TagKey?:string, TagValue?:string}>, TagCondition?:array{TagKey?:string, TagValue?:string}}}, SearchCriteria?:array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, TypeCondition?:"CONTACT_FLOW"|"CUSTOMER_QUEUE"|"CUSTOMER_HOLD"|"CUSTOMER_WHISPER"|"AGENT_HOLD"|"AGENT_WHISPER"|"OUTBOUND_WHISPER"|"AGENT_TRANSFER"|"QUEUE_TRANSFER"|"CAMPAIGN", StateCondition?:"ACTIVE"|"ARCHIVED", StatusCondition?:"PUBLISHED"|"SAVED"}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, TypeCondition?:"CONTACT_FLOW"|"CUSTOMER_QUEUE"|"CUSTOMER_HOLD"|"CUSTOMER_WHISPER"|"AGENT_HOLD"|"AGENT_WHISPER"|"OUTBOUND_WHISPER"|"AGENT_TRANSFER"|"QUEUE_TRANSFER"|"CAMPAIGN", StateCondition?:"ACTIVE"|"ARCHIVED", StatusCondition?:"PUBLISHED"|"SAVED"}>, AndConditions?:array<array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, TypeCondition?:"CONTACT_FLOW"|"CUSTOMER_QUEUE"|"CUSTOMER_HOLD"|"CUSTOMER_WHISPER"|"AGENT_HOLD"|"AGENT_WHISPER"|"OUTBOUND_WHISPER"|"AGENT_TRANSFER"|"QUEUE_TRANSFER"|"CAMPAIGN", StateCondition?:"ACTIVE"|"ARCHIVED", StatusCondition?:"PUBLISHED"|"SAVED"}>, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, TypeCondition?:"CONTACT_FLOW"|"CUSTOMER_QUEUE"|"CUSTOMER_HOLD"|"CUSTOMER_WHISPER"|"AGENT_HOLD"|"AGENT_WHISPER"|"OUTBOUND_WHISPER"|"AGENT_TRANSFER"|"QUEUE_TRANSFER"|"CAMPAIGN", StateCondition?:"ACTIVE"|"ARCHIVED", StatusCondition?:"PUBLISHED"|"SAVED"}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, TypeCondition?:"CONTACT_FLOW"|"CUSTOMER_QUEUE"|"CUSTOMER_HOLD"|"CUSTOMER_WHISPER"|"AGENT_HOLD"|"AGENT_WHISPER"|"OUTBOUND_WHISPER"|"AGENT_TRANSFER"|"QUEUE_TRANSFER"|"CAMPAIGN", StateCondition?:"ACTIVE"|"ARCHIVED", StatusCondition?:"PUBLISHED"|"SAVED"}} $args
     * @return \AWS\Result<array{ContactFlows?:array<array{Arn?:string, Id?:string, Name?:string, Type?:"CONTACT_FLOW"|"CUSTOMER_QUEUE"|"CUSTOMER_HOLD"|"CUSTOMER_WHISPER"|"AGENT_HOLD"|"AGENT_WHISPER"|"OUTBOUND_WHISPER"|"AGENT_TRANSFER"|"QUEUE_TRANSFER"|"CAMPAIGN", State?:"ACTIVE"|"ARCHIVED", Status?:"PUBLISHED"|"SAVED", Description?:string, Content?:string, Tags?:array<string, string>, FlowContentSha256?:string, Version?:int, VersionDescription?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, NextToken?:string, ApproximateTotalCount?:int}>
     */
    public function searchContactFlows(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, SearchFilter?:array{TagFilter?:array{OrConditions?:array<array<array{TagKey?:string, TagValue?:string}>>, AndConditions?:array<array{TagKey?:string, TagValue?:string}>, TagCondition?:array{TagKey?:string, TagValue?:string}}}, SearchCriteria?:array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, TypeCondition?:"CONTACT_FLOW"|"CUSTOMER_QUEUE"|"CUSTOMER_HOLD"|"CUSTOMER_WHISPER"|"AGENT_HOLD"|"AGENT_WHISPER"|"OUTBOUND_WHISPER"|"AGENT_TRANSFER"|"QUEUE_TRANSFER"|"CAMPAIGN", StateCondition?:"ACTIVE"|"ARCHIVED", StatusCondition?:"PUBLISHED"|"SAVED"}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, TypeCondition?:"CONTACT_FLOW"|"CUSTOMER_QUEUE"|"CUSTOMER_HOLD"|"CUSTOMER_WHISPER"|"AGENT_HOLD"|"AGENT_WHISPER"|"OUTBOUND_WHISPER"|"AGENT_TRANSFER"|"QUEUE_TRANSFER"|"CAMPAIGN", StateCondition?:"ACTIVE"|"ARCHIVED", StatusCondition?:"PUBLISHED"|"SAVED"}>, AndConditions?:array<array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, TypeCondition?:"CONTACT_FLOW"|"CUSTOMER_QUEUE"|"CUSTOMER_HOLD"|"CUSTOMER_WHISPER"|"AGENT_HOLD"|"AGENT_WHISPER"|"OUTBOUND_WHISPER"|"AGENT_TRANSFER"|"QUEUE_TRANSFER"|"CAMPAIGN", StateCondition?:"ACTIVE"|"ARCHIVED", StatusCondition?:"PUBLISHED"|"SAVED"}>, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, TypeCondition?:"CONTACT_FLOW"|"CUSTOMER_QUEUE"|"CUSTOMER_HOLD"|"CUSTOMER_WHISPER"|"AGENT_HOLD"|"AGENT_WHISPER"|"OUTBOUND_WHISPER"|"AGENT_TRANSFER"|"QUEUE_TRANSFER"|"CAMPAIGN", StateCondition?:"ACTIVE"|"ARCHIVED", StatusCondition?:"PUBLISHED"|"SAVED"}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, TypeCondition?:"CONTACT_FLOW"|"CUSTOMER_QUEUE"|"CUSTOMER_HOLD"|"CUSTOMER_WHISPER"|"AGENT_HOLD"|"AGENT_WHISPER"|"OUTBOUND_WHISPER"|"AGENT_TRANSFER"|"QUEUE_TRANSFER"|"CAMPAIGN", StateCondition?:"ACTIVE"|"ARCHIVED", StatusCondition?:"PUBLISHED"|"SAVED"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContactFlows?:array<array{Arn?:string, Id?:string, Name?:string, Type?:"CONTACT_FLOW"|"CUSTOMER_QUEUE"|"CUSTOMER_HOLD"|"CUSTOMER_WHISPER"|"AGENT_HOLD"|"AGENT_WHISPER"|"OUTBOUND_WHISPER"|"AGENT_TRANSFER"|"QUEUE_TRANSFER"|"CAMPAIGN", State?:"ACTIVE"|"ARCHIVED", Status?:"PUBLISHED"|"SAVED", Description?:string, Content?:string, Tags?:array<string, string>, FlowContentSha256?:string, Version?:int, VersionDescription?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, NextToken?:string, ApproximateTotalCount?:int}>
     */
    public function searchContactFlowsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, TimeRange:array{Type:"INITIATION_TIMESTAMP"|"SCHEDULED_TIMESTAMP"|"CONNECTED_TO_AGENT_TIMESTAMP"|"DISCONNECT_TIMESTAMP", StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface}, SearchCriteria?:array{AgentIds?:array<string>, AgentHierarchyGroups?:array{L1Ids?:array<string>, L2Ids?:array<string>, L3Ids?:array<string>, L4Ids?:array<string>, L5Ids?:array<string>}, Channels?:array<"VOICE"|"CHAT"|"TASK"|"EMAIL">, ContactAnalysis?:array{Transcript?:array{Criteria:array<array{ParticipantRole:"AGENT"|"CUSTOMER"|"SYSTEM"|"CUSTOM_BOT"|"SUPERVISOR", SearchText:array<string>, MatchType:"MATCH_ALL"|"MATCH_ANY"}>, MatchType?:"MATCH_ALL"|"MATCH_ANY"}}, InitiationMethods?:array<"INBOUND"|"OUTBOUND"|"TRANSFER"|"QUEUE_TRANSFER"|"CALLBACK"|"API"|"DISCONNECT"|"MONITOR"|"EXTERNAL_OUTBOUND"|"WEBRTC_API"|"AGENT_REPLY"|"FLOW">, QueueIds?:array<string>, SearchableContactAttributes?:array{Criteria:array<array{Key:string, Values:array<string>}>, MatchType?:"MATCH_ALL"|"MATCH_ANY"}, SearchableSegmentAttributes?:array{Criteria:array<array{Key:string, Values:array<string>}>, MatchType?:"MATCH_ALL"|"MATCH_ANY"}}, MaxResults?:int, NextToken?:string, Sort?:array{FieldName:"INITIATION_TIMESTAMP"|"SCHEDULED_TIMESTAMP"|"CONNECTED_TO_AGENT_TIMESTAMP"|"DISCONNECT_TIMESTAMP"|"INITIATION_METHOD"|"CHANNEL", Order:"ASCENDING"|"DESCENDING"}} $args
     * @return \AWS\Result<array{Contacts:array<array{Arn?:string, Id?:string, InitialContactId?:string, PreviousContactId?:string, InitiationMethod?:"INBOUND"|"OUTBOUND"|"TRANSFER"|"QUEUE_TRANSFER"|"CALLBACK"|"API"|"DISCONNECT"|"MONITOR"|"EXTERNAL_OUTBOUND"|"WEBRTC_API"|"AGENT_REPLY"|"FLOW", Channel?:"VOICE"|"CHAT"|"TASK"|"EMAIL", QueueInfo?:array{Id?:string, EnqueueTimestamp?:int|string|\DateTimeInterface}, AgentInfo?:array{Id?:string, ConnectedToAgentTimestamp?:int|string|\DateTimeInterface}, InitiationTimestamp?:int|string|\DateTimeInterface, DisconnectTimestamp?:int|string|\DateTimeInterface, ScheduledTimestamp?:int|string|\DateTimeInterface, SegmentAttributes?:array<string, array{ValueString?:string}>}>, NextToken?:string, TotalCount?:int}>
     */
    public function searchContacts(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, TimeRange:array{Type:"INITIATION_TIMESTAMP"|"SCHEDULED_TIMESTAMP"|"CONNECTED_TO_AGENT_TIMESTAMP"|"DISCONNECT_TIMESTAMP", StartTime:int|string|\DateTimeInterface, EndTime:int|string|\DateTimeInterface}, SearchCriteria?:array{AgentIds?:array<string>, AgentHierarchyGroups?:array{L1Ids?:array<string>, L2Ids?:array<string>, L3Ids?:array<string>, L4Ids?:array<string>, L5Ids?:array<string>}, Channels?:array<"VOICE"|"CHAT"|"TASK"|"EMAIL">, ContactAnalysis?:array{Transcript?:array{Criteria:array<array{ParticipantRole:"AGENT"|"CUSTOMER"|"SYSTEM"|"CUSTOM_BOT"|"SUPERVISOR", SearchText:array<string>, MatchType:"MATCH_ALL"|"MATCH_ANY"}>, MatchType?:"MATCH_ALL"|"MATCH_ANY"}}, InitiationMethods?:array<"INBOUND"|"OUTBOUND"|"TRANSFER"|"QUEUE_TRANSFER"|"CALLBACK"|"API"|"DISCONNECT"|"MONITOR"|"EXTERNAL_OUTBOUND"|"WEBRTC_API"|"AGENT_REPLY"|"FLOW">, QueueIds?:array<string>, SearchableContactAttributes?:array{Criteria:array<array{Key:string, Values:array<string>}>, MatchType?:"MATCH_ALL"|"MATCH_ANY"}, SearchableSegmentAttributes?:array{Criteria:array<array{Key:string, Values:array<string>}>, MatchType?:"MATCH_ALL"|"MATCH_ANY"}}, MaxResults?:int, NextToken?:string, Sort?:array{FieldName:"INITIATION_TIMESTAMP"|"SCHEDULED_TIMESTAMP"|"CONNECTED_TO_AGENT_TIMESTAMP"|"DISCONNECT_TIMESTAMP"|"INITIATION_METHOD"|"CHANNEL", Order:"ASCENDING"|"DESCENDING"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Contacts:array<array{Arn?:string, Id?:string, InitialContactId?:string, PreviousContactId?:string, InitiationMethod?:"INBOUND"|"OUTBOUND"|"TRANSFER"|"QUEUE_TRANSFER"|"CALLBACK"|"API"|"DISCONNECT"|"MONITOR"|"EXTERNAL_OUTBOUND"|"WEBRTC_API"|"AGENT_REPLY"|"FLOW", Channel?:"VOICE"|"CHAT"|"TASK"|"EMAIL", QueueInfo?:array{Id?:string, EnqueueTimestamp?:int|string|\DateTimeInterface}, AgentInfo?:array{Id?:string, ConnectedToAgentTimestamp?:int|string|\DateTimeInterface}, InitiationTimestamp?:int|string|\DateTimeInterface, DisconnectTimestamp?:int|string|\DateTimeInterface, ScheduledTimestamp?:int|string|\DateTimeInterface, SegmentAttributes?:array<string, array{ValueString?:string}>}>, NextToken?:string, TotalCount?:int}>
     */
    public function searchContactsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, MaxResults?:int, NextToken?:string, SearchCriteria?:array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:array<array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}, SearchFilter?:array{TagFilter?:array{OrConditions?:array<array<array{TagKey?:string, TagValue?:string}>>, AndConditions?:array<array{TagKey?:string, TagValue?:string}>, TagCondition?:array{TagKey?:string, TagValue?:string}}}} $args
     * @return \AWS\Result<array{NextToken?:string, EmailAddresses?:array<array{EmailAddressId?:string, EmailAddressArn?:string, EmailAddress?:string, Description?:string, DisplayName?:string}>, ApproximateTotalCount?:int}>
     */
    public function searchEmailAddresses(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, MaxResults?:int, NextToken?:string, SearchCriteria?:array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:array<array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}, SearchFilter?:array{TagFilter?:array{OrConditions?:array<array<array{TagKey?:string, TagValue?:string}>>, AndConditions?:array<array{TagKey?:string, TagValue?:string}>, TagCondition?:array{TagKey?:string, TagValue?:string}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, EmailAddresses?:array<array{EmailAddressId?:string, EmailAddressArn?:string, EmailAddress?:string, Description?:string, DisplayName?:string}>, ApproximateTotalCount?:int}>
     */
    public function searchEmailAddressesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, SearchFilter?:array{TagFilter?:array{OrConditions?:array<array<array{TagKey?:string, TagValue?:string}>>, AndConditions?:array<array{TagKey?:string, TagValue?:string}>, TagCondition?:array{TagKey?:string, TagValue?:string}}}, SearchCriteria?:array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, DateCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL_TO"|"LESS_THAN_OR_EQUAL_TO"|"EQUAL_TO"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, DateCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL_TO"|"LESS_THAN_OR_EQUAL_TO"|"EQUAL_TO"}}>, AndConditions?:array<array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, DateCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL_TO"|"LESS_THAN_OR_EQUAL_TO"|"EQUAL_TO"}}>, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, DateCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL_TO"|"LESS_THAN_OR_EQUAL_TO"|"EQUAL_TO"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, DateCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL_TO"|"LESS_THAN_OR_EQUAL_TO"|"EQUAL_TO"}}} $args
     * @return \AWS\Result<array{HoursOfOperationOverrides?:array<array{HoursOfOperationOverrideId?:string, HoursOfOperationId?:string, HoursOfOperationArn?:string, Name?:string, Description?:string, Config?:array<array{Day?:"SUNDAY"|"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY", StartTime?:array{Hours:int, Minutes:int}, EndTime?:array{Hours:int, Minutes:int}}>, EffectiveFrom?:string, EffectiveTill?:string}>, NextToken?:string, ApproximateTotalCount?:int}>
     */
    public function searchHoursOfOperationOverrides(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, SearchFilter?:array{TagFilter?:array{OrConditions?:array<array<array{TagKey?:string, TagValue?:string}>>, AndConditions?:array<array{TagKey?:string, TagValue?:string}>, TagCondition?:array{TagKey?:string, TagValue?:string}}}, SearchCriteria?:array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, DateCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL_TO"|"LESS_THAN_OR_EQUAL_TO"|"EQUAL_TO"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, DateCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL_TO"|"LESS_THAN_OR_EQUAL_TO"|"EQUAL_TO"}}>, AndConditions?:array<array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, DateCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL_TO"|"LESS_THAN_OR_EQUAL_TO"|"EQUAL_TO"}}>, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, DateCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL_TO"|"LESS_THAN_OR_EQUAL_TO"|"EQUAL_TO"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, DateCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"GREATER_THAN"|"LESS_THAN"|"GREATER_THAN_OR_EQUAL_TO"|"LESS_THAN_OR_EQUAL_TO"|"EQUAL_TO"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{HoursOfOperationOverrides?:array<array{HoursOfOperationOverrideId?:string, HoursOfOperationId?:string, HoursOfOperationArn?:string, Name?:string, Description?:string, Config?:array<array{Day?:"SUNDAY"|"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY", StartTime?:array{Hours:int, Minutes:int}, EndTime?:array{Hours:int, Minutes:int}}>, EffectiveFrom?:string, EffectiveTill?:string}>, NextToken?:string, ApproximateTotalCount?:int}>
     */
    public function searchHoursOfOperationOverridesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, SearchFilter?:array{TagFilter?:array{OrConditions?:array<array<array{TagKey?:string, TagValue?:string}>>, AndConditions?:array<array{TagKey?:string, TagValue?:string}>, TagCondition?:array{TagKey?:string, TagValue?:string}}}, SearchCriteria?:array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:array<array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}} $args
     * @return \AWS\Result<array{HoursOfOperations?:array<array{HoursOfOperationId?:string, HoursOfOperationArn?:string, Name?:string, Description?:string, TimeZone?:string, Config?:array<array{Day:"SUNDAY"|"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY", StartTime:array{Hours:int, Minutes:int}, EndTime:array{Hours:int, Minutes:int}}>, Tags?:array<string, string>, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, NextToken?:string, ApproximateTotalCount?:int}>
     */
    public function searchHoursOfOperations(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, SearchFilter?:array{TagFilter?:array{OrConditions?:array<array<array{TagKey?:string, TagValue?:string}>>, AndConditions?:array<array{TagKey?:string, TagValue?:string}>, TagCondition?:array{TagKey?:string, TagValue?:string}}}, SearchCriteria?:array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:array<array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{HoursOfOperations?:array<array{HoursOfOperationId?:string, HoursOfOperationArn?:string, Name?:string, Description?:string, TimeZone?:string, Config?:array<array{Day:"SUNDAY"|"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY", StartTime:array{Hours:int, Minutes:int}, EndTime:array{Hours:int, Minutes:int}}>, Tags?:array<string, string>, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, NextToken?:string, ApproximateTotalCount?:int}>
     */
    public function searchHoursOfOperationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, SearchCriteria?:array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:array<array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}} $args
     * @return \AWS\Result<array{PredefinedAttributes?:array<array{Name?:string, Values?:array{StringList?:array<string>}, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, NextToken?:string, ApproximateTotalCount?:int}>
     */
    public function searchPredefinedAttributes(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, SearchCriteria?:array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:array<array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{PredefinedAttributes?:array<array{Name?:string, Values?:array{StringList?:array<string>}, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, NextToken?:string, ApproximateTotalCount?:int}>
     */
    public function searchPredefinedAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, SearchFilter?:array{TagFilter?:array{OrConditions?:array<array<array{TagKey?:string, TagValue?:string}>>, AndConditions?:array<array{TagKey?:string, TagValue?:string}>, TagCondition?:array{TagKey?:string, TagValue?:string}}}, SearchCriteria?:array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:array<array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}} $args
     * @return \AWS\Result<array{Prompts?:array<array{PromptARN?:string, PromptId?:string, Name?:string, Description?:string, Tags?:array<string, string>, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, NextToken?:string, ApproximateTotalCount?:int}>
     */
    public function searchPrompts(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, SearchFilter?:array{TagFilter?:array{OrConditions?:array<array<array{TagKey?:string, TagValue?:string}>>, AndConditions?:array<array{TagKey?:string, TagValue?:string}>, TagCondition?:array{TagKey?:string, TagValue?:string}}}, SearchCriteria?:array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:array<array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Prompts?:array<array{PromptARN?:string, PromptId?:string, Name?:string, Description?:string, Tags?:array<string, string>, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, NextToken?:string, ApproximateTotalCount?:int}>
     */
    public function searchPromptsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, SearchFilter?:array{TagFilter?:array{OrConditions?:array<array<array{TagKey?:string, TagValue?:string}>>, AndConditions?:array<array{TagKey?:string, TagValue?:string}>, TagCondition?:array{TagKey?:string, TagValue?:string}}}, SearchCriteria?:array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, QueueTypeCondition?:"STANDARD"}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, QueueTypeCondition?:"STANDARD"}>, AndConditions?:array<array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, QueueTypeCondition?:"STANDARD"}>, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, QueueTypeCondition?:"STANDARD"}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, QueueTypeCondition?:"STANDARD"}} $args
     * @return \AWS\Result<array{Queues?:array<array{Name?:string, QueueArn?:string, QueueId?:string, Description?:string, OutboundCallerConfig?:array{OutboundCallerIdName?:string, OutboundCallerIdNumberId?:string, OutboundFlowId?:string}, OutboundEmailConfig?:array{OutboundEmailAddressId?:string}, HoursOfOperationId?:string, MaxContacts?:int, Status?:"ENABLED"|"DISABLED", Tags?:array<string, string>, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, NextToken?:string, ApproximateTotalCount?:int}>
     */
    public function searchQueues(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, SearchFilter?:array{TagFilter?:array{OrConditions?:array<array<array{TagKey?:string, TagValue?:string}>>, AndConditions?:array<array{TagKey?:string, TagValue?:string}>, TagCondition?:array{TagKey?:string, TagValue?:string}}}, SearchCriteria?:array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, QueueTypeCondition?:"STANDARD"}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, QueueTypeCondition?:"STANDARD"}>, AndConditions?:array<array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, QueueTypeCondition?:"STANDARD"}>, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, QueueTypeCondition?:"STANDARD"}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, QueueTypeCondition?:"STANDARD"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Queues?:array<array{Name?:string, QueueArn?:string, QueueId?:string, Description?:string, OutboundCallerConfig?:array{OutboundCallerIdName?:string, OutboundCallerIdNumberId?:string, OutboundFlowId?:string}, OutboundEmailConfig?:array{OutboundEmailAddressId?:string}, HoursOfOperationId?:string, MaxContacts?:int, Status?:"ENABLED"|"DISABLED", Tags?:array<string, string>, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, NextToken?:string, ApproximateTotalCount?:int}>
     */
    public function searchQueuesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, SearchFilter?:array{TagFilter?:array{OrConditions?:array<array<array{TagKey?:string, TagValue?:string}>>, AndConditions?:array<array{TagKey?:string, TagValue?:string}>, TagCondition?:array{TagKey?:string, TagValue?:string}}}, SearchCriteria?:array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:array<array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}} $args
     * @return \AWS\Result<array{QuickConnects?:array<array{QuickConnectARN?:string, QuickConnectId?:string, Name?:string, Description?:string, QuickConnectConfig?:array{QuickConnectType:"USER"|"QUEUE"|"PHONE_NUMBER", UserConfig?:array{UserId:string, ContactFlowId:string}, QueueConfig?:array{QueueId:string, ContactFlowId:string}, PhoneConfig?:array{PhoneNumber:string}}, Tags?:array<string, string>, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, NextToken?:string, ApproximateTotalCount?:int}>
     */
    public function searchQuickConnects(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, SearchFilter?:array{TagFilter?:array{OrConditions?:array<array<array{TagKey?:string, TagValue?:string}>>, AndConditions?:array<array{TagKey?:string, TagValue?:string}>, TagCondition?:array{TagKey?:string, TagValue?:string}}}, SearchCriteria?:array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:array<array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{QuickConnects?:array<array{QuickConnectARN?:string, QuickConnectId?:string, Name?:string, Description?:string, QuickConnectConfig?:array{QuickConnectType:"USER"|"QUEUE"|"PHONE_NUMBER", UserConfig?:array{UserId:string, ContactFlowId:string}, QueueConfig?:array{QueueId:string, ContactFlowId:string}, PhoneConfig?:array{PhoneNumber:string}}, Tags?:array<string, string>, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, NextToken?:string, ApproximateTotalCount?:int}>
     */
    public function searchQuickConnectsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ResourceTypes?:array<string>, NextToken?:string, MaxResults?:int, SearchCriteria?:array{TagSearchCondition?:array{tagKey?:string, tagValue?:string, tagKeyComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT", tagValueComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}} $args
     * @return \AWS\Result<array{Tags?:array<array{key?:string, value?:string}>, NextToken?:string}>
     */
    public function searchResourceTags(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ResourceTypes?:array<string>, NextToken?:string, MaxResults?:int, SearchCriteria?:array{TagSearchCondition?:array{tagKey?:string, tagValue?:string, tagKeyComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT", tagValueComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{key?:string, value?:string}>, NextToken?:string}>
     */
    public function searchResourceTagsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, SearchFilter?:array{TagFilter?:array{OrConditions?:array<array<array{TagKey?:string, TagValue?:string}>>, AndConditions?:array<array{TagKey?:string, TagValue?:string}>, TagCondition?:array{TagKey?:string, TagValue?:string}}}, SearchCriteria?:array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:array<array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}} $args
     * @return \AWS\Result<array{RoutingProfiles?:array<array{InstanceId?:string, Name?:string, RoutingProfileArn?:string, RoutingProfileId?:string, Description?:string, MediaConcurrencies?:array<array{Channel:"VOICE"|"CHAT"|"TASK"|"EMAIL", Concurrency:int, CrossChannelBehavior?:array{BehaviorType:"ROUTE_CURRENT_CHANNEL_ONLY"|"ROUTE_ANY_CHANNEL"}}>, DefaultOutboundQueueId?:string, Tags?:array<string, string>, NumberOfAssociatedQueues?:int, NumberOfAssociatedUsers?:int, AgentAvailabilityTimer?:"TIME_SINCE_LAST_ACTIVITY"|"TIME_SINCE_LAST_INBOUND", LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string, IsDefault?:bool, AssociatedQueueIds?:array<string>}>, NextToken?:string, ApproximateTotalCount?:int}>
     */
    public function searchRoutingProfiles(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, SearchFilter?:array{TagFilter?:array{OrConditions?:array<array<array{TagKey?:string, TagValue?:string}>>, AndConditions?:array<array{TagKey?:string, TagValue?:string}>, TagCondition?:array{TagKey?:string, TagValue?:string}}}, SearchCriteria?:array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:array<array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{RoutingProfiles?:array<array{InstanceId?:string, Name?:string, RoutingProfileArn?:string, RoutingProfileId?:string, Description?:string, MediaConcurrencies?:array<array{Channel:"VOICE"|"CHAT"|"TASK"|"EMAIL", Concurrency:int, CrossChannelBehavior?:array{BehaviorType:"ROUTE_CURRENT_CHANNEL_ONLY"|"ROUTE_ANY_CHANNEL"}}>, DefaultOutboundQueueId?:string, Tags?:array<string, string>, NumberOfAssociatedQueues?:int, NumberOfAssociatedUsers?:int, AgentAvailabilityTimer?:"TIME_SINCE_LAST_ACTIVITY"|"TIME_SINCE_LAST_INBOUND", LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string, IsDefault?:bool, AssociatedQueueIds?:array<string>}>, NextToken?:string, ApproximateTotalCount?:int}>
     */
    public function searchRoutingProfilesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, SearchCriteria?:array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:array<array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}, SearchFilter?:array{TagFilter?:array{OrConditions?:array<array<array{TagKey?:string, TagValue?:string}>>, AndConditions?:array<array{TagKey?:string, TagValue?:string}>, TagCondition?:array{TagKey?:string, TagValue?:string}}}} $args
     * @return \AWS\Result<array{SecurityProfiles?:array<array{Id?:string, OrganizationResourceId?:string, Arn?:string, SecurityProfileName?:string, Description?:string, Tags?:array<string, string>}>, NextToken?:string, ApproximateTotalCount?:int}>
     */
    public function searchSecurityProfiles(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, SearchCriteria?:array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:array<array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}, SearchFilter?:array{TagFilter?:array{OrConditions?:array<array<array{TagKey?:string, TagValue?:string}>>, AndConditions?:array<array{TagKey?:string, TagValue?:string}>, TagCondition?:array{TagKey?:string, TagValue?:string}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{SecurityProfiles?:array<array{Id?:string, OrganizationResourceId?:string, Arn?:string, SecurityProfileName?:string, Description?:string, Tags?:array<string, string>}>, NextToken?:string, ApproximateTotalCount?:int}>
     */
    public function searchSecurityProfilesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, SearchFilter?:array{AttributeFilter?:array{OrConditions?:array<array{TagConditions?:array<array{TagKey?:string, TagValue?:string}>}>, AndCondition?:array{TagConditions?:array<array{TagKey?:string, TagValue?:string}>}, TagCondition?:array{TagKey?:string, TagValue?:string}}}, SearchCriteria?:array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:array<array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}} $args
     * @return \AWS\Result<array{UserHierarchyGroups?:array<array{Id?:string, Arn?:string, Name?:string, LevelId?:string, HierarchyPath?:array{LevelOne?:array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}, LevelTwo?:array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}, LevelThree?:array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}, LevelFour?:array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}, LevelFive?:array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}}, Tags?:array<string, string>, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, NextToken?:string, ApproximateTotalCount?:int}>
     */
    public function searchUserHierarchyGroups(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, SearchFilter?:array{AttributeFilter?:array{OrConditions?:array<array{TagConditions?:array<array{TagKey?:string, TagValue?:string}>}>, AndCondition?:array{TagConditions?:array<array{TagKey?:string, TagValue?:string}>}, TagCondition?:array{TagKey?:string, TagValue?:string}}}, SearchCriteria?:array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:array<array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{UserHierarchyGroups?:array<array{Id?:string, Arn?:string, Name?:string, LevelId?:string, HierarchyPath?:array{LevelOne?:array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}, LevelTwo?:array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}, LevelThree?:array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}, LevelFour?:array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}, LevelFive?:array{Id?:string, Arn?:string, Name?:string, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}}, Tags?:array<string, string>, LastModifiedTime?:int|string|\DateTimeInterface, LastModifiedRegion?:string}>, NextToken?:string, ApproximateTotalCount?:int}>
     */
    public function searchUserHierarchyGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, SearchFilter?:array{TagFilter?:array{OrConditions?:array<array<array{TagKey?:string, TagValue?:string}>>, AndConditions?:array<array{TagKey?:string, TagValue?:string}>, TagCondition?:array{TagKey?:string, TagValue?:string}}, UserAttributeFilter?:array{OrConditions?:array<array{TagConditions?:array<array{TagKey?:string, TagValue?:string}>, HierarchyGroupCondition?:array{Value?:string, HierarchyGroupMatchType?:"EXACT"|"WITH_CHILD_GROUPS"}}>, AndCondition?:array{TagConditions?:array<array{TagKey?:string, TagValue?:string}>, HierarchyGroupCondition?:array{Value?:string, HierarchyGroupMatchType?:"EXACT"|"WITH_CHILD_GROUPS"}}, TagCondition?:array{TagKey?:string, TagValue?:string}, HierarchyGroupCondition?:array{Value?:string, HierarchyGroupMatchType?:"EXACT"|"WITH_CHILD_GROUPS"}}}, SearchCriteria?:array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, ListCondition?:array{TargetListType?:"PROFICIENCIES", Conditions?:array<array{StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, NumberCondition?:array{FieldName?:string, MinValue?:int, MaxValue?:int, ComparisonType?:"GREATER_OR_EQUAL"|"GREATER"|"LESSER_OR_EQUAL"|"LESSER"|"EQUAL"|"NOT_EQUAL"|"RANGE"}}>}, HierarchyGroupCondition?:array{Value?:string, HierarchyGroupMatchType?:"EXACT"|"WITH_CHILD_GROUPS"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, ListCondition?:array{TargetListType?:"PROFICIENCIES", Conditions?:array<array{StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, NumberCondition?:array{FieldName?:string, MinValue?:int, MaxValue?:int, ComparisonType?:"GREATER_OR_EQUAL"|"GREATER"|"LESSER_OR_EQUAL"|"LESSER"|"EQUAL"|"NOT_EQUAL"|"RANGE"}}>}, HierarchyGroupCondition?:array{Value?:string, HierarchyGroupMatchType?:"EXACT"|"WITH_CHILD_GROUPS"}}>, AndConditions?:array<array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, ListCondition?:array{TargetListType?:"PROFICIENCIES", Conditions?:array<array{StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, NumberCondition?:array{FieldName?:string, MinValue?:int, MaxValue?:int, ComparisonType?:"GREATER_OR_EQUAL"|"GREATER"|"LESSER_OR_EQUAL"|"LESSER"|"EQUAL"|"NOT_EQUAL"|"RANGE"}}>}, HierarchyGroupCondition?:array{Value?:string, HierarchyGroupMatchType?:"EXACT"|"WITH_CHILD_GROUPS"}}>, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, ListCondition?:array{TargetListType?:"PROFICIENCIES", Conditions?:array<array{StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, NumberCondition?:array{FieldName?:string, MinValue?:int, MaxValue?:int, ComparisonType?:"GREATER_OR_EQUAL"|"GREATER"|"LESSER_OR_EQUAL"|"LESSER"|"EQUAL"|"NOT_EQUAL"|"RANGE"}}>}, HierarchyGroupCondition?:array{Value?:string, HierarchyGroupMatchType?:"EXACT"|"WITH_CHILD_GROUPS"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, ListCondition?:array{TargetListType?:"PROFICIENCIES", Conditions?:array<array{StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, NumberCondition?:array{FieldName?:string, MinValue?:int, MaxValue?:int, ComparisonType?:"GREATER_OR_EQUAL"|"GREATER"|"LESSER_OR_EQUAL"|"LESSER"|"EQUAL"|"NOT_EQUAL"|"RANGE"}}>}, HierarchyGroupCondition?:array{Value?:string, HierarchyGroupMatchType?:"EXACT"|"WITH_CHILD_GROUPS"}}} $args
     * @return \AWS\Result<array{Users?:array<array{Arn?:string, DirectoryUserId?:string, HierarchyGroupId?:string, Id?:string, IdentityInfo?:array{FirstName?:string, LastName?:string}, PhoneConfig?:array{PhoneType:"SOFT_PHONE"|"DESK_PHONE", AutoAccept?:bool, AfterContactWorkTimeLimit?:int, DeskPhoneNumber?:string}, RoutingProfileId?:string, SecurityProfileIds?:array<string>, Tags?:array<string, string>, Username?:string}>, NextToken?:string, ApproximateTotalCount?:int}>
     */
    public function searchUsers(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, NextToken?:string, MaxResults?:int, SearchFilter?:array{TagFilter?:array{OrConditions?:array<array<array{TagKey?:string, TagValue?:string}>>, AndConditions?:array<array{TagKey?:string, TagValue?:string}>, TagCondition?:array{TagKey?:string, TagValue?:string}}, UserAttributeFilter?:array{OrConditions?:array<array{TagConditions?:array<array{TagKey?:string, TagValue?:string}>, HierarchyGroupCondition?:array{Value?:string, HierarchyGroupMatchType?:"EXACT"|"WITH_CHILD_GROUPS"}}>, AndCondition?:array{TagConditions?:array<array{TagKey?:string, TagValue?:string}>, HierarchyGroupCondition?:array{Value?:string, HierarchyGroupMatchType?:"EXACT"|"WITH_CHILD_GROUPS"}}, TagCondition?:array{TagKey?:string, TagValue?:string}, HierarchyGroupCondition?:array{Value?:string, HierarchyGroupMatchType?:"EXACT"|"WITH_CHILD_GROUPS"}}}, SearchCriteria?:array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, ListCondition?:array{TargetListType?:"PROFICIENCIES", Conditions?:array<array{StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, NumberCondition?:array{FieldName?:string, MinValue?:int, MaxValue?:int, ComparisonType?:"GREATER_OR_EQUAL"|"GREATER"|"LESSER_OR_EQUAL"|"LESSER"|"EQUAL"|"NOT_EQUAL"|"RANGE"}}>}, HierarchyGroupCondition?:array{Value?:string, HierarchyGroupMatchType?:"EXACT"|"WITH_CHILD_GROUPS"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, ListCondition?:array{TargetListType?:"PROFICIENCIES", Conditions?:array<array{StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, NumberCondition?:array{FieldName?:string, MinValue?:int, MaxValue?:int, ComparisonType?:"GREATER_OR_EQUAL"|"GREATER"|"LESSER_OR_EQUAL"|"LESSER"|"EQUAL"|"NOT_EQUAL"|"RANGE"}}>}, HierarchyGroupCondition?:array{Value?:string, HierarchyGroupMatchType?:"EXACT"|"WITH_CHILD_GROUPS"}}>, AndConditions?:array<array{OrConditions?:array<array{OrConditions?:mixed, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, ListCondition?:array{TargetListType?:"PROFICIENCIES", Conditions?:array<array{StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, NumberCondition?:array{FieldName?:string, MinValue?:int, MaxValue?:int, ComparisonType?:"GREATER_OR_EQUAL"|"GREATER"|"LESSER_OR_EQUAL"|"LESSER"|"EQUAL"|"NOT_EQUAL"|"RANGE"}}>}, HierarchyGroupCondition?:array{Value?:string, HierarchyGroupMatchType?:"EXACT"|"WITH_CHILD_GROUPS"}}>, AndConditions?:mixed, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, ListCondition?:array{TargetListType?:"PROFICIENCIES", Conditions?:array<array{StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, NumberCondition?:array{FieldName?:string, MinValue?:int, MaxValue?:int, ComparisonType?:"GREATER_OR_EQUAL"|"GREATER"|"LESSER_OR_EQUAL"|"LESSER"|"EQUAL"|"NOT_EQUAL"|"RANGE"}}>}, HierarchyGroupCondition?:array{Value?:string, HierarchyGroupMatchType?:"EXACT"|"WITH_CHILD_GROUPS"}}>, StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, ListCondition?:array{TargetListType?:"PROFICIENCIES", Conditions?:array<array{StringCondition?:array{FieldName?:string, Value?:string, ComparisonType?:"STARTS_WITH"|"CONTAINS"|"EXACT"}, NumberCondition?:array{FieldName?:string, MinValue?:int, MaxValue?:int, ComparisonType?:"GREATER_OR_EQUAL"|"GREATER"|"LESSER_OR_EQUAL"|"LESSER"|"EQUAL"|"NOT_EQUAL"|"RANGE"}}>}, HierarchyGroupCondition?:array{Value?:string, HierarchyGroupMatchType?:"EXACT"|"WITH_CHILD_GROUPS"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Users?:array<array{Arn?:string, DirectoryUserId?:string, HierarchyGroupId?:string, Id?:string, IdentityInfo?:array{FirstName?:string, LastName?:string}, PhoneConfig?:array{PhoneType:"SOFT_PHONE"|"DESK_PHONE", AutoAccept?:bool, AfterContactWorkTimeLimit?:int, DeskPhoneNumber?:string}, RoutingProfileId?:string, SecurityProfileIds?:array<string>, Tags?:array<string, string>, Username?:string}>, NextToken?:string, ApproximateTotalCount?:int}>
     */
    public function searchUsersAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, MaxResults?:int, NextToken?:string, State?:"CREATION_IN_PROGRESS"|"ACTIVE"|"CREATION_FAILED"|"DELETE_IN_PROGRESS", NameStartsWith?:string, LanguageCode?:"ar-AE"|"de-CH"|"de-DE"|"en-AB"|"en-AU"|"en-GB"|"en-IE"|"en-IN"|"en-US"|"en-WL"|"es-ES"|"es-US"|"fr-CA"|"fr-FR"|"hi-IN"|"it-IT"|"ja-JP"|"ko-KR"|"pt-BR"|"pt-PT"|"zh-CN"|"en-NZ"|"en-ZA"|"ca-ES"|"da-DK"|"fi-FI"|"id-ID"|"ms-MY"|"nl-NL"|"no-NO"|"pl-PL"|"sv-SE"|"tl-PH"} $args
     * @return \AWS\Result<array{VocabularySummaryList?:array<array{Name:string, Id:string, Arn:string, LanguageCode:"ar-AE"|"de-CH"|"de-DE"|"en-AB"|"en-AU"|"en-GB"|"en-IE"|"en-IN"|"en-US"|"en-WL"|"es-ES"|"es-US"|"fr-CA"|"fr-FR"|"hi-IN"|"it-IT"|"ja-JP"|"ko-KR"|"pt-BR"|"pt-PT"|"zh-CN"|"en-NZ"|"en-ZA"|"ca-ES"|"da-DK"|"fi-FI"|"id-ID"|"ms-MY"|"nl-NL"|"no-NO"|"pl-PL"|"sv-SE"|"tl-PH", State:"CREATION_IN_PROGRESS"|"ACTIVE"|"CREATION_FAILED"|"DELETE_IN_PROGRESS", LastModifiedTime:int|string|\DateTimeInterface, FailureReason?:string}>, NextToken?:string}>
     */
    public function searchVocabularies(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, MaxResults?:int, NextToken?:string, State?:"CREATION_IN_PROGRESS"|"ACTIVE"|"CREATION_FAILED"|"DELETE_IN_PROGRESS", NameStartsWith?:string, LanguageCode?:"ar-AE"|"de-CH"|"de-DE"|"en-AB"|"en-AU"|"en-GB"|"en-IE"|"en-IN"|"en-US"|"en-WL"|"es-ES"|"es-US"|"fr-CA"|"fr-FR"|"hi-IN"|"it-IT"|"ja-JP"|"ko-KR"|"pt-BR"|"pt-PT"|"zh-CN"|"en-NZ"|"en-ZA"|"ca-ES"|"da-DK"|"fi-FI"|"id-ID"|"ms-MY"|"nl-NL"|"no-NO"|"pl-PL"|"sv-SE"|"tl-PH"} $args
     * @return \GuzzleHttp\Promise\Promise<array{VocabularySummaryList?:array<array{Name:string, Id:string, Arn:string, LanguageCode:"ar-AE"|"de-CH"|"de-DE"|"en-AB"|"en-AU"|"en-GB"|"en-IE"|"en-IN"|"en-US"|"en-WL"|"es-ES"|"es-US"|"fr-CA"|"fr-FR"|"hi-IN"|"it-IT"|"ja-JP"|"ko-KR"|"pt-BR"|"pt-PT"|"zh-CN"|"en-NZ"|"en-ZA"|"ca-ES"|"da-DK"|"fi-FI"|"id-ID"|"ms-MY"|"nl-NL"|"no-NO"|"pl-PL"|"sv-SE"|"tl-PH", State:"CREATION_IN_PROGRESS"|"ACTIVE"|"CREATION_FAILED"|"DELETE_IN_PROGRESS", LastModifiedTime:int|string|\DateTimeInterface, FailureReason?:string}>, NextToken?:string}>
     */
    public function searchVocabulariesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SourceId:string, DestinationId:string, Subtype?:string, Event:array{Type:"DISCONNECT"|"MESSAGE"|"EVENT", ContentType?:string, Content?:string}, NewSessionDetails?:array{SupportedMessagingContentTypes?:array<string>, ParticipantDetails?:array{DisplayName:string}, Attributes?:array<string, string>, StreamingConfiguration?:array{StreamingEndpointArn:string}}} $args
     * @return \AWS\Result<array{InitialContactId?:string, NewChatCreated?:bool}>
     */
    public function sendChatIntegrationEvent(array $args): \AWS\Result { }

    /**
     * @param array{SourceId:string, DestinationId:string, Subtype?:string, Event:array{Type:"DISCONNECT"|"MESSAGE"|"EVENT", ContentType?:string, Content?:string}, NewSessionDetails?:array{SupportedMessagingContentTypes?:array<string>, ParticipantDetails?:array{DisplayName:string}, Attributes?:array<string, string>, StreamingConfiguration?:array{StreamingEndpointArn:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{InitialContactId?:string, NewChatCreated?:bool}>
     */
    public function sendChatIntegrationEventAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, FromEmailAddress:array{EmailAddress:string, DisplayName?:string}, DestinationEmailAddress:array{EmailAddress:string, DisplayName?:string}, AdditionalRecipients?:array{CcEmailAddresses?:array<array{EmailAddress:string, DisplayName?:string}>}, EmailMessage:array{MessageSourceType:"TEMPLATE"|"RAW", TemplatedMessageConfig?:array{KnowledgeBaseId:string, MessageTemplateId:string, TemplateAttributes:array{CustomAttributes?:array<string, string>, CustomerProfileAttributes?:string}}, RawMessage?:array{Subject:string, Body:string, ContentType:string}}, TrafficType:"GENERAL"|"CAMPAIGN", SourceCampaign?:array{CampaignId?:string, OutboundRequestId?:string}, ClientToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function sendOutboundEmail(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, FromEmailAddress:array{EmailAddress:string, DisplayName?:string}, DestinationEmailAddress:array{EmailAddress:string, DisplayName?:string}, AdditionalRecipients?:array{CcEmailAddresses?:array<array{EmailAddress:string, DisplayName?:string}>}, EmailMessage:array{MessageSourceType:"TEMPLATE"|"RAW", TemplatedMessageConfig?:array{KnowledgeBaseId:string, MessageTemplateId:string, TemplateAttributes:array{CustomAttributes?:array<string, string>, CustomerProfileAttributes?:string}}, RawMessage?:array{Subject:string, Body:string, ContentType:string}}, TrafficType:"GENERAL"|"CAMPAIGN", SourceCampaign?:array{CampaignId?:string, OutboundRequestId?:string}, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function sendOutboundEmailAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, InstanceId:string, FileName:string, FileSizeInBytes:int, UrlExpiryInSeconds?:int, FileUseCaseType:"EMAIL_MESSAGE"|"ATTACHMENT", AssociatedResourceArn:string, CreatedBy?:array{ConnectUserArn?:string, AWSIdentityArn?:string}, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{FileArn?:string, FileId?:string, CreationTime?:string, FileStatus?:"APPROVED"|"REJECTED"|"PROCESSING"|"FAILED", CreatedBy?:array{ConnectUserArn?:string, AWSIdentityArn?:string}, UploadUrlMetadata?:array{Url?:string, UrlExpiry?:string, HeadersToInclude?:array<string, string>}}>
     */
    public function startAttachedFileUpload(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, InstanceId:string, FileName:string, FileSizeInBytes:int, UrlExpiryInSeconds?:int, FileUseCaseType:"EMAIL_MESSAGE"|"ATTACHMENT", AssociatedResourceArn:string, CreatedBy?:array{ConnectUserArn?:string, AWSIdentityArn?:string}, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{FileArn?:string, FileId?:string, CreationTime?:string, FileStatus?:"APPROVED"|"REJECTED"|"PROCESSING"|"FAILED", CreatedBy?:array{ConnectUserArn?:string, AWSIdentityArn?:string}, UploadUrlMetadata?:array{Url?:string, UrlExpiry?:string, HeadersToInclude?:array<string, string>}}>
     */
    public function startAttachedFileUploadAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ContactFlowId:string, Attributes?:array<string, string>, ParticipantDetails:array{DisplayName:string}, InitialMessage?:array{ContentType:string, Content:string}, ClientToken?:string, ChatDurationInMinutes?:int, SupportedMessagingContentTypes?:array<string>, PersistentChat?:array{RehydrationType?:"ENTIRE_PAST_SESSION"|"FROM_SEGMENT", SourceContactId?:string}, RelatedContactId?:string, SegmentAttributes?:array<string, array{ValueString?:string, ValueMap?:array<string, array{ValueString?:string, ValueMap?:mixed, ValueInteger?:int}>, ValueInteger?:int}>, CustomerId?:string} $args
     * @return \AWS\Result<array{ContactId?:string, ParticipantId?:string, ParticipantToken?:string, ContinuedFromContactId?:string}>
     */
    public function startChatContact(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ContactFlowId:string, Attributes?:array<string, string>, ParticipantDetails:array{DisplayName:string}, InitialMessage?:array{ContentType:string, Content:string}, ClientToken?:string, ChatDurationInMinutes?:int, SupportedMessagingContentTypes?:array<string>, PersistentChat?:array{RehydrationType?:"ENTIRE_PAST_SESSION"|"FROM_SEGMENT", SourceContactId?:string}, RelatedContactId?:string, SegmentAttributes?:array<string, array{ValueString?:string, ValueMap?:array<string, array{ValueString?:string, ValueMap?:mixed, ValueInteger?:int}>, ValueInteger?:int}>, CustomerId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContactId?:string, ParticipantId?:string, ParticipantToken?:string, ContinuedFromContactId?:string}>
     */
    public function startChatContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ContactId:string, EvaluationFormId:string, ClientToken?:string} $args
     * @return \AWS\Result<array{EvaluationId:string, EvaluationArn:string}>
     */
    public function startContactEvaluation(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ContactId:string, EvaluationFormId:string, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EvaluationId:string, EvaluationArn:string}>
     */
    public function startContactEvaluationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ContactId:string, InitialContactId:string, VoiceRecordingConfiguration:array{VoiceRecordingTrack?:"FROM_AGENT"|"TO_AGENT"|"ALL", IvrRecordingTrack?:"ALL"}} $args
     * @return \AWS\Result<array{}>
     */
    public function startContactRecording(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ContactId:string, InitialContactId:string, VoiceRecordingConfiguration:array{VoiceRecordingTrack?:"FROM_AGENT"|"TO_AGENT"|"ALL", IvrRecordingTrack?:"ALL"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function startContactRecordingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ContactId:string, ChatStreamingConfiguration:array{StreamingEndpointArn:string}, ClientToken:string} $args
     * @return \AWS\Result<array{StreamingId:string}>
     */
    public function startContactStreaming(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ContactId:string, ChatStreamingConfiguration:array{StreamingEndpointArn:string}, ClientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StreamingId:string}>
     */
    public function startContactStreamingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, FromEmailAddress:array{EmailAddress:string, DisplayName?:string}, DestinationEmailAddress:string, Description?:string, References?:array<string, array{Value?:string, Type:"URL"|"ATTACHMENT"|"CONTACT_ANALYSIS"|"NUMBER"|"STRING"|"DATE"|"EMAIL"|"EMAIL_MESSAGE", Status?:"AVAILABLE"|"DELETED"|"APPROVED"|"REJECTED"|"PROCESSING"|"FAILED", Arn?:string, StatusReason?:string}>, Name?:string, EmailMessage:array{MessageSourceType:"RAW", RawMessage?:array{Subject:string, Body:string, ContentType:string, Headers?:array<"REFERENCES"|"MESSAGE_ID"|"IN_REPLY_TO"|"X_SES_SPAM_VERDICT"|"X_SES_VIRUS_VERDICT", string>}}, AdditionalRecipients?:array{ToAddresses?:array<array{EmailAddress:string, DisplayName?:string}>, CcAddresses?:array<array{EmailAddress:string, DisplayName?:string}>}, Attachments?:array<array{FileName:string, S3Url:string}>, ContactFlowId?:string, RelatedContactId?:string, Attributes?:array<string, string>, SegmentAttributes?:array<string, array{ValueString?:string, ValueMap?:array<string, array{ValueString?:string, ValueMap?:mixed, ValueInteger?:int}>, ValueInteger?:int}>, ClientToken?:string} $args
     * @return \AWS\Result<array{ContactId?:string}>
     */
    public function startEmailContact(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, FromEmailAddress:array{EmailAddress:string, DisplayName?:string}, DestinationEmailAddress:string, Description?:string, References?:array<string, array{Value?:string, Type:"URL"|"ATTACHMENT"|"CONTACT_ANALYSIS"|"NUMBER"|"STRING"|"DATE"|"EMAIL"|"EMAIL_MESSAGE", Status?:"AVAILABLE"|"DELETED"|"APPROVED"|"REJECTED"|"PROCESSING"|"FAILED", Arn?:string, StatusReason?:string}>, Name?:string, EmailMessage:array{MessageSourceType:"RAW", RawMessage?:array{Subject:string, Body:string, ContentType:string, Headers?:array<"REFERENCES"|"MESSAGE_ID"|"IN_REPLY_TO"|"X_SES_SPAM_VERDICT"|"X_SES_VIRUS_VERDICT", string>}}, AdditionalRecipients?:array{ToAddresses?:array<array{EmailAddress:string, DisplayName?:string}>, CcAddresses?:array<array{EmailAddress:string, DisplayName?:string}>}, Attachments?:array<array{FileName:string, S3Url:string}>, ContactFlowId?:string, RelatedContactId?:string, Attributes?:array<string, string>, SegmentAttributes?:array<string, array{ValueString?:string, ValueMap?:array<string, array{ValueString?:string, ValueMap?:mixed, ValueInteger?:int}>, ValueInteger?:int}>, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContactId?:string}>
     */
    public function startEmailContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SourceEndpoint:array{Type?:"TELEPHONE_NUMBER"|"VOIP"|"CONTACT_FLOW"|"CONNECT_PHONENUMBER_ARN"|"EMAIL_ADDRESS", Address?:string}, DestinationEndpoint:array{Type?:"TELEPHONE_NUMBER"|"VOIP"|"CONTACT_FLOW"|"CONNECT_PHONENUMBER_ARN"|"EMAIL_ADDRESS", Address?:string}, InstanceId:string, SegmentAttributes:array<string, array{ValueString?:string, ValueMap?:array<string, array{ValueString?:string, ValueMap?:mixed, ValueInteger?:int}>, ValueInteger?:int}>, Attributes?:array<string, string>, ContactFlowId:string, ChatDurationInMinutes?:int, ParticipantDetails?:array{DisplayName:string}, InitialSystemMessage?:array{ContentType:string, Content:string}, RelatedContactId?:string, SupportedMessagingContentTypes?:array<string>, ClientToken?:string} $args
     * @return \AWS\Result<array{ContactId?:string}>
     */
    public function startOutboundChatContact(array $args): \AWS\Result { }

    /**
     * @param array{SourceEndpoint:array{Type?:"TELEPHONE_NUMBER"|"VOIP"|"CONTACT_FLOW"|"CONNECT_PHONENUMBER_ARN"|"EMAIL_ADDRESS", Address?:string}, DestinationEndpoint:array{Type?:"TELEPHONE_NUMBER"|"VOIP"|"CONTACT_FLOW"|"CONNECT_PHONENUMBER_ARN"|"EMAIL_ADDRESS", Address?:string}, InstanceId:string, SegmentAttributes:array<string, array{ValueString?:string, ValueMap?:array<string, array{ValueString?:string, ValueMap?:mixed, ValueInteger?:int}>, ValueInteger?:int}>, Attributes?:array<string, string>, ContactFlowId:string, ChatDurationInMinutes?:int, ParticipantDetails?:array{DisplayName:string}, InitialSystemMessage?:array{ContentType:string, Content:string}, RelatedContactId?:string, SupportedMessagingContentTypes?:array<string>, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContactId?:string}>
     */
    public function startOutboundChatContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ContactId:string, FromEmailAddress?:array{EmailAddress:string, DisplayName?:string}, DestinationEmailAddress:array{EmailAddress:string, DisplayName?:string}, AdditionalRecipients?:array{CcEmailAddresses?:array<array{EmailAddress:string, DisplayName?:string}>}, EmailMessage:array{MessageSourceType:"TEMPLATE"|"RAW", TemplatedMessageConfig?:array{KnowledgeBaseId:string, MessageTemplateId:string, TemplateAttributes:array{CustomAttributes?:array<string, string>, CustomerProfileAttributes?:string}}, RawMessage?:array{Subject:string, Body:string, ContentType:string}}, ClientToken?:string} $args
     * @return \AWS\Result<array{ContactId?:string}>
     */
    public function startOutboundEmailContact(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ContactId:string, FromEmailAddress?:array{EmailAddress:string, DisplayName?:string}, DestinationEmailAddress:array{EmailAddress:string, DisplayName?:string}, AdditionalRecipients?:array{CcEmailAddresses?:array<array{EmailAddress:string, DisplayName?:string}>}, EmailMessage:array{MessageSourceType:"TEMPLATE"|"RAW", TemplatedMessageConfig?:array{KnowledgeBaseId:string, MessageTemplateId:string, TemplateAttributes:array{CustomAttributes?:array<string, string>, CustomerProfileAttributes?:string}}, RawMessage?:array{Subject:string, Body:string, ContentType:string}}, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContactId?:string}>
     */
    public function startOutboundEmailContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name?:string, Description?:string, References?:array<string, array{Value?:string, Type:"URL"|"ATTACHMENT"|"CONTACT_ANALYSIS"|"NUMBER"|"STRING"|"DATE"|"EMAIL"|"EMAIL_MESSAGE", Status?:"AVAILABLE"|"DELETED"|"APPROVED"|"REJECTED"|"PROCESSING"|"FAILED", Arn?:string, StatusReason?:string}>, RelatedContactId?:string, DestinationPhoneNumber:string, ContactFlowId:string, InstanceId:string, ClientToken?:string, SourcePhoneNumber?:string, QueueId?:string, Attributes?:array<string, string>, AnswerMachineDetectionConfig?:array{EnableAnswerMachineDetection?:bool, AwaitAnswerMachinePrompt?:bool}, CampaignId?:string, TrafficType?:"GENERAL"|"CAMPAIGN"} $args
     * @return \AWS\Result<array{ContactId?:string}>
     */
    public function startOutboundVoiceContact(array $args): \AWS\Result { }

    /**
     * @param array{Name?:string, Description?:string, References?:array<string, array{Value?:string, Type:"URL"|"ATTACHMENT"|"CONTACT_ANALYSIS"|"NUMBER"|"STRING"|"DATE"|"EMAIL"|"EMAIL_MESSAGE", Status?:"AVAILABLE"|"DELETED"|"APPROVED"|"REJECTED"|"PROCESSING"|"FAILED", Arn?:string, StatusReason?:string}>, RelatedContactId?:string, DestinationPhoneNumber:string, ContactFlowId:string, InstanceId:string, ClientToken?:string, SourcePhoneNumber?:string, QueueId?:string, Attributes?:array<string, string>, AnswerMachineDetectionConfig?:array{EnableAnswerMachineDetection?:bool, AwaitAnswerMachinePrompt?:bool}, CampaignId?:string, TrafficType?:"GENERAL"|"CAMPAIGN"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContactId?:string}>
     */
    public function startOutboundVoiceContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, InstanceId:string, ContactId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function startScreenSharing(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, InstanceId:string, ContactId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function startScreenSharingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, PreviousContactId?:string, ContactFlowId?:string, Attributes?:array<string, string>, Name:string, References?:array<string, array{Value?:string, Type:"URL"|"ATTACHMENT"|"CONTACT_ANALYSIS"|"NUMBER"|"STRING"|"DATE"|"EMAIL"|"EMAIL_MESSAGE", Status?:"AVAILABLE"|"DELETED"|"APPROVED"|"REJECTED"|"PROCESSING"|"FAILED", Arn?:string, StatusReason?:string}>, Description?:string, ClientToken?:string, ScheduledTime?:int|string|\DateTimeInterface, TaskTemplateId?:string, QuickConnectId?:string, RelatedContactId?:string, SegmentAttributes?:array<string, array{ValueString?:string, ValueMap?:array<string, array{ValueString?:string, ValueMap?:mixed, ValueInteger?:int}>, ValueInteger?:int}>} $args
     * @return \AWS\Result<array{ContactId?:string}>
     */
    public function startTaskContact(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, PreviousContactId?:string, ContactFlowId?:string, Attributes?:array<string, string>, Name:string, References?:array<string, array{Value?:string, Type:"URL"|"ATTACHMENT"|"CONTACT_ANALYSIS"|"NUMBER"|"STRING"|"DATE"|"EMAIL"|"EMAIL_MESSAGE", Status?:"AVAILABLE"|"DELETED"|"APPROVED"|"REJECTED"|"PROCESSING"|"FAILED", Arn?:string, StatusReason?:string}>, Description?:string, ClientToken?:string, ScheduledTime?:int|string|\DateTimeInterface, TaskTemplateId?:string, QuickConnectId?:string, RelatedContactId?:string, SegmentAttributes?:array<string, array{ValueString?:string, ValueMap?:array<string, array{ValueString?:string, ValueMap?:mixed, ValueInteger?:int}>, ValueInteger?:int}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContactId?:string}>
     */
    public function startTaskContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Attributes?:array<string, string>, ClientToken?:string, ContactFlowId:string, InstanceId:string, AllowedCapabilities?:array{Customer?:array{Video?:"SEND", ScreenShare?:"SEND"}, Agent?:array{Video?:"SEND", ScreenShare?:"SEND"}}, ParticipantDetails:array{DisplayName:string}, RelatedContactId?:string, References?:array<string, array{Value?:string, Type:"URL"|"ATTACHMENT"|"CONTACT_ANALYSIS"|"NUMBER"|"STRING"|"DATE"|"EMAIL"|"EMAIL_MESSAGE", Status?:"AVAILABLE"|"DELETED"|"APPROVED"|"REJECTED"|"PROCESSING"|"FAILED", Arn?:string, StatusReason?:string}>, Description?:string} $args
     * @return \AWS\Result<array{ConnectionData?:array{Attendee?:array{AttendeeId?:string, JoinToken?:string}, Meeting?:array{MediaRegion?:string, MediaPlacement?:array{AudioHostUrl?:string, AudioFallbackUrl?:string, SignalingUrl?:string, TurnControlUrl?:string, EventIngestionUrl?:string}, MeetingFeatures?:array{Audio?:array{EchoReduction?:"AVAILABLE"|"UNAVAILABLE"}}, MeetingId?:string}}, ContactId?:string, ParticipantId?:string, ParticipantToken?:string}>
     */
    public function startWebRTCContact(array $args): \AWS\Result { }

    /**
     * @param array{Attributes?:array<string, string>, ClientToken?:string, ContactFlowId:string, InstanceId:string, AllowedCapabilities?:array{Customer?:array{Video?:"SEND", ScreenShare?:"SEND"}, Agent?:array{Video?:"SEND", ScreenShare?:"SEND"}}, ParticipantDetails:array{DisplayName:string}, RelatedContactId?:string, References?:array<string, array{Value?:string, Type:"URL"|"ATTACHMENT"|"CONTACT_ANALYSIS"|"NUMBER"|"STRING"|"DATE"|"EMAIL"|"EMAIL_MESSAGE", Status?:"AVAILABLE"|"DELETED"|"APPROVED"|"REJECTED"|"PROCESSING"|"FAILED", Arn?:string, StatusReason?:string}>, Description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ConnectionData?:array{Attendee?:array{AttendeeId?:string, JoinToken?:string}, Meeting?:array{MediaRegion?:string, MediaPlacement?:array{AudioHostUrl?:string, AudioFallbackUrl?:string, SignalingUrl?:string, TurnControlUrl?:string, EventIngestionUrl?:string}, MeetingFeatures?:array{Audio?:array{EchoReduction?:"AVAILABLE"|"UNAVAILABLE"}}, MeetingId?:string}}, ContactId?:string, ParticipantId?:string, ParticipantToken?:string}>
     */
    public function startWebRTCContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContactId:string, InstanceId:string, DisconnectReason?:array{Code?:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function stopContact(array $args): \AWS\Result { }

    /**
     * @param array{ContactId:string, InstanceId:string, DisconnectReason?:array{Code?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ContactId:string, InitialContactId:string, ContactRecordingType?:"AGENT"|"IVR"|"SCREEN"} $args
     * @return \AWS\Result<array{}>
     */
    public function stopContactRecording(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ContactId:string, InitialContactId:string, ContactRecordingType?:"AGENT"|"IVR"|"SCREEN"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopContactRecordingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ContactId:string, StreamingId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopContactStreaming(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ContactId:string, StreamingId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopContactStreamingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, EvaluationId:string, Answers?:array<string, array{Value?:array{StringValue?:string, NumericValue?:float, NotApplicable?:bool}}>, Notes?:array<string, array{Value?:string}>} $args
     * @return \AWS\Result<array{EvaluationId:string, EvaluationArn:string}>
     */
    public function submitContactEvaluation(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, EvaluationId:string, Answers?:array<string, array{Value?:array{StringValue?:string, NumericValue?:float, NotApplicable?:bool}}>, Notes?:array<string, array{Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{EvaluationId:string, EvaluationArn:string}>
     */
    public function submitContactEvaluationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ContactId:string, InitialContactId:string, ContactRecordingType?:"AGENT"|"IVR"|"SCREEN"} $args
     * @return \AWS\Result<array{}>
     */
    public function suspendContactRecording(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ContactId:string, InitialContactId:string, ContactRecordingType?:"AGENT"|"IVR"|"SCREEN"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function suspendContactRecordingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContactId:string, InstanceId:string, Tags:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagContact(array $args): \AWS\Result { }

    /**
     * @param array{ContactId:string, InstanceId:string, Tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags:array<string, string>} $args
     * @return \AWS\Result<void>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ContactId:string, QueueId?:string, UserId?:string, ContactFlowId:string, ClientToken?:string} $args
     * @return \AWS\Result<array{ContactId?:string, ContactArn?:string}>
     */
    public function transferContact(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ContactId:string, QueueId?:string, UserId?:string, ContactFlowId:string, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ContactId?:string, ContactArn?:string}>
     */
    public function transferContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContactId:string, InstanceId:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagContact(array $args): \AWS\Result { }

    /**
     * @param array{ContactId:string, InstanceId:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, AgentStatusId:string, Name?:string, Description?:string, State?:"ENABLED"|"DISABLED", DisplayOrder?:int, ResetOrderNumber?:bool} $args
     * @return \AWS\Result<void>
     */
    public function updateAgentStatus(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, AgentStatusId:string, Name?:string, Description?:string, State?:"ENABLED"|"DISABLED", DisplayOrder?:int, ResetOrderNumber?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateAgentStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AuthenticationProfileId:string, InstanceId:string, Name?:string, Description?:string, AllowedIps?:array<string>, BlockedIps?:array<string>, PeriodicSessionDuration?:int} $args
     * @return \AWS\Result<void>
     */
    public function updateAuthenticationProfile(array $args): \AWS\Result { }

    /**
     * @param array{AuthenticationProfileId:string, InstanceId:string, Name?:string, Description?:string, AllowedIps?:array<string>, BlockedIps?:array<string>, PeriodicSessionDuration?:int} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateAuthenticationProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ContactId:string, Name?:string, Description?:string, References?:array<string, array{Value?:string, Type:"URL"|"ATTACHMENT"|"CONTACT_ANALYSIS"|"NUMBER"|"STRING"|"DATE"|"EMAIL"|"EMAIL_MESSAGE", Status?:"AVAILABLE"|"DELETED"|"APPROVED"|"REJECTED"|"PROCESSING"|"FAILED", Arn?:string, StatusReason?:string}>, SegmentAttributes?:array<string, array{ValueString?:string, ValueMap?:array<string, array{ValueString?:string, ValueMap?:mixed, ValueInteger?:int}>, ValueInteger?:int}>, QueueInfo?:array{Id?:string}, UserInfo?:array{UserId?:string}, CustomerEndpoint?:array{Type?:"TELEPHONE_NUMBER"|"VOIP"|"CONTACT_FLOW"|"CONNECT_PHONENUMBER_ARN"|"EMAIL_ADDRESS", Address?:string}, SystemEndpoint?:array{Type?:"TELEPHONE_NUMBER"|"VOIP"|"CONTACT_FLOW"|"CONNECT_PHONENUMBER_ARN"|"EMAIL_ADDRESS", Address?:string}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateContact(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ContactId:string, Name?:string, Description?:string, References?:array<string, array{Value?:string, Type:"URL"|"ATTACHMENT"|"CONTACT_ANALYSIS"|"NUMBER"|"STRING"|"DATE"|"EMAIL"|"EMAIL_MESSAGE", Status?:"AVAILABLE"|"DELETED"|"APPROVED"|"REJECTED"|"PROCESSING"|"FAILED", Arn?:string, StatusReason?:string}>, SegmentAttributes?:array<string, array{ValueString?:string, ValueMap?:array<string, array{ValueString?:string, ValueMap?:mixed, ValueInteger?:int}>, ValueInteger?:int}>, QueueInfo?:array{Id?:string}, UserInfo?:array{UserId?:string}, CustomerEndpoint?:array{Type?:"TELEPHONE_NUMBER"|"VOIP"|"CONTACT_FLOW"|"CONNECT_PHONENUMBER_ARN"|"EMAIL_ADDRESS", Address?:string}, SystemEndpoint?:array{Type?:"TELEPHONE_NUMBER"|"VOIP"|"CONTACT_FLOW"|"CONNECT_PHONENUMBER_ARN"|"EMAIL_ADDRESS", Address?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateContactAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InitialContactId:string, InstanceId:string, Attributes:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateContactAttributes(array $args): \AWS\Result { }

    /**
     * @param array{InitialContactId:string, InstanceId:string, Attributes:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateContactAttributesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, EvaluationId:string, Answers?:array<string, array{Value?:array{StringValue?:string, NumericValue?:float, NotApplicable?:bool}}>, Notes?:array<string, array{Value?:string}>} $args
     * @return \AWS\Result<array{EvaluationId:string, EvaluationArn:string}>
     */
    public function updateContactEvaluation(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, EvaluationId:string, Answers?:array<string, array{Value?:array{StringValue?:string, NumericValue?:float, NotApplicable?:bool}}>, Notes?:array<string, array{Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{EvaluationId:string, EvaluationArn:string}>
     */
    public function updateContactEvaluationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ContactFlowId:string, Content:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateContactFlowContent(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ContactFlowId:string, Content:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateContactFlowContentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ContactFlowId:string, Name?:string, Description?:string, ContactFlowState?:"ACTIVE"|"ARCHIVED"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateContactFlowMetadata(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ContactFlowId:string, Name?:string, Description?:string, ContactFlowState?:"ACTIVE"|"ARCHIVED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateContactFlowMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ContactFlowModuleId:string, Content:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateContactFlowModuleContent(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ContactFlowModuleId:string, Content:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateContactFlowModuleContentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ContactFlowModuleId:string, Name?:string, Description?:string, State?:"ACTIVE"|"ARCHIVED"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateContactFlowModuleMetadata(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ContactFlowModuleId:string, Name?:string, Description?:string, State?:"ACTIVE"|"ARCHIVED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateContactFlowModuleMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ContactFlowId:string, Name?:string, Description?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateContactFlowName(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ContactFlowId:string, Name?:string, Description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateContactFlowNameAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ContactId:string, QueueTimeAdjustmentSeconds?:int, QueuePriority?:int, RoutingCriteria?:array{Steps?:array<array{Expiry?:array{DurationInSeconds?:int}, Expression?:array{AttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}, AndExpression?:array<array{AttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}, AndExpression?:mixed, OrExpression?:array<array{AttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}, AndExpression?:mixed, OrExpression?:mixed, NotAttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}}>, NotAttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}}>, OrExpression?:array<array{AttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}, AndExpression?:array<array{AttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}, AndExpression?:mixed, OrExpression?:mixed, NotAttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}}>, OrExpression?:mixed, NotAttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}}>, NotAttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}}}>}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateContactRoutingData(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ContactId:string, QueueTimeAdjustmentSeconds?:int, QueuePriority?:int, RoutingCriteria?:array{Steps?:array<array{Expiry?:array{DurationInSeconds?:int}, Expression?:array{AttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}, AndExpression?:array<array{AttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}, AndExpression?:mixed, OrExpression?:array<array{AttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}, AndExpression?:mixed, OrExpression?:mixed, NotAttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}}>, NotAttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}}>, OrExpression?:array<array{AttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}, AndExpression?:array<array{AttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}, AndExpression?:mixed, OrExpression?:mixed, NotAttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}}>, OrExpression?:mixed, NotAttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}}>, NotAttributeCondition?:array{Name?:string, Value?:string, ProficiencyLevel?:float, Range?:array{MinProficiencyLevel?:float, MaxProficiencyLevel?:float}, MatchCriteria?:array{AgentsCriteria?:array{AgentIds?:array<string>}}, ComparisonOperator?:string}}}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateContactRoutingDataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ContactId:string, ScheduledTime:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{}>
     */
    public function updateContactSchedule(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ContactId:string, ScheduledTime:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateContactScheduleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, EmailAddressId:string, Description?:string, DisplayName?:string, ClientToken?:string} $args
     * @return \AWS\Result<array{EmailAddressId?:string, EmailAddressArn?:string}>
     */
    public function updateEmailAddressMetadata(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, EmailAddressId:string, Description?:string, DisplayName?:string, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EmailAddressId?:string, EmailAddressArn?:string}>
     */
    public function updateEmailAddressMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, EvaluationFormId:string, EvaluationFormVersion:int, CreateNewVersion?:bool, Title:string, Description?:string, Items:array<array{Section?:array{Title:string, RefId:string, Instructions?:string, Items:mixed, Weight?:float}, Question?:array{Title:string, Instructions?:string, RefId:string, NotApplicableEnabled?:bool, QuestionType:"TEXT"|"SINGLESELECT"|"NUMERIC", QuestionTypeProperties?:array{Numeric?:array{MinValue:int, MaxValue:int, Options?:array<array{MinValue:int, MaxValue:int, Score?:int, AutomaticFail?:bool}>, Automation?:array{PropertyValue?:array{Label:"OVERALL_CUSTOMER_SENTIMENT_SCORE"|"OVERALL_AGENT_SENTIMENT_SCORE"|"NON_TALK_TIME"|"NON_TALK_TIME_PERCENTAGE"|"NUMBER_OF_INTERRUPTIONS"|"CONTACT_DURATION"|"AGENT_INTERACTION_DURATION"|"CUSTOMER_HOLD_TIME"}}}, SingleSelect?:array{Options:array<array{RefId:string, Text:string, Score?:int, AutomaticFail?:bool}>, DisplayAs?:"DROPDOWN"|"RADIO", Automation?:array{Options:array<array{RuleCategory?:array{Category:string, Condition:"PRESENT"|"NOT_PRESENT", OptionRefId:string}}>, DefaultOptionRefId?:string}}}, Weight?:float}}>, ScoringStrategy?:array{Mode:"QUESTION_ONLY"|"SECTION_ONLY", Status:"ENABLED"|"DISABLED"}, ClientToken?:string} $args
     * @return \AWS\Result<array{EvaluationFormId:string, EvaluationFormArn:string, EvaluationFormVersion:int}>
     */
    public function updateEvaluationForm(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, EvaluationFormId:string, EvaluationFormVersion:int, CreateNewVersion?:bool, Title:string, Description?:string, Items:array<array{Section?:array{Title:string, RefId:string, Instructions?:string, Items:mixed, Weight?:float}, Question?:array{Title:string, Instructions?:string, RefId:string, NotApplicableEnabled?:bool, QuestionType:"TEXT"|"SINGLESELECT"|"NUMERIC", QuestionTypeProperties?:array{Numeric?:array{MinValue:int, MaxValue:int, Options?:array<array{MinValue:int, MaxValue:int, Score?:int, AutomaticFail?:bool}>, Automation?:array{PropertyValue?:array{Label:"OVERALL_CUSTOMER_SENTIMENT_SCORE"|"OVERALL_AGENT_SENTIMENT_SCORE"|"NON_TALK_TIME"|"NON_TALK_TIME_PERCENTAGE"|"NUMBER_OF_INTERRUPTIONS"|"CONTACT_DURATION"|"AGENT_INTERACTION_DURATION"|"CUSTOMER_HOLD_TIME"}}}, SingleSelect?:array{Options:array<array{RefId:string, Text:string, Score?:int, AutomaticFail?:bool}>, DisplayAs?:"DROPDOWN"|"RADIO", Automation?:array{Options:array<array{RuleCategory?:array{Category:string, Condition:"PRESENT"|"NOT_PRESENT", OptionRefId:string}}>, DefaultOptionRefId?:string}}}, Weight?:float}}>, ScoringStrategy?:array{Mode:"QUESTION_ONLY"|"SECTION_ONLY", Status:"ENABLED"|"DISABLED"}, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{EvaluationFormId:string, EvaluationFormArn:string, EvaluationFormVersion:int}>
     */
    public function updateEvaluationFormAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, HoursOfOperationId:string, Name?:string, Description?:string, TimeZone?:string, Config?:array<array{Day:"SUNDAY"|"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY", StartTime:array{Hours:int, Minutes:int}, EndTime:array{Hours:int, Minutes:int}}>} $args
     * @return \AWS\Result<void>
     */
    public function updateHoursOfOperation(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, HoursOfOperationId:string, Name?:string, Description?:string, TimeZone?:string, Config?:array<array{Day:"SUNDAY"|"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY", StartTime:array{Hours:int, Minutes:int}, EndTime:array{Hours:int, Minutes:int}}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateHoursOfOperationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, HoursOfOperationId:string, HoursOfOperationOverrideId:string, Name?:string, Description?:string, Config?:array<array{Day?:"SUNDAY"|"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY", StartTime?:array{Hours:int, Minutes:int}, EndTime?:array{Hours:int, Minutes:int}}>, EffectiveFrom?:string, EffectiveTill?:string} $args
     * @return \AWS\Result<void>
     */
    public function updateHoursOfOperationOverride(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, HoursOfOperationId:string, HoursOfOperationOverrideId:string, Name?:string, Description?:string, Config?:array<array{Day?:"SUNDAY"|"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY", StartTime?:array{Hours:int, Minutes:int}, EndTime?:array{Hours:int, Minutes:int}}>, EffectiveFrom?:string, EffectiveTill?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateHoursOfOperationOverrideAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, AttributeType:"INBOUND_CALLS"|"OUTBOUND_CALLS"|"CONTACTFLOW_LOGS"|"CONTACT_LENS"|"AUTO_RESOLVE_BEST_VOICES"|"USE_CUSTOM_TTS_VOICES"|"EARLY_MEDIA"|"MULTI_PARTY_CONFERENCE"|"HIGH_VOLUME_OUTBOUND"|"ENHANCED_CONTACT_MONITORING"|"ENHANCED_CHAT_MONITORING"|"MULTI_PARTY_CHAT_CONFERENCE", Value:string} $args
     * @return \AWS\Result<void>
     */
    public function updateInstanceAttribute(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, AttributeType:"INBOUND_CALLS"|"OUTBOUND_CALLS"|"CONTACTFLOW_LOGS"|"CONTACT_LENS"|"AUTO_RESOLVE_BEST_VOICES"|"USE_CUSTOM_TTS_VOICES"|"EARLY_MEDIA"|"MULTI_PARTY_CONFERENCE"|"HIGH_VOLUME_OUTBOUND"|"ENHANCED_CONTACT_MONITORING"|"ENHANCED_CHAT_MONITORING"|"MULTI_PARTY_CHAT_CONFERENCE", Value:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateInstanceAttributeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, AssociationId:string, ResourceType:"CHAT_TRANSCRIPTS"|"CALL_RECORDINGS"|"SCHEDULED_REPORTS"|"MEDIA_STREAMS"|"CONTACT_TRACE_RECORDS"|"AGENT_EVENTS"|"REAL_TIME_CONTACT_ANALYSIS_SEGMENTS"|"ATTACHMENTS"|"CONTACT_EVALUATIONS"|"SCREEN_RECORDINGS"|"REAL_TIME_CONTACT_ANALYSIS_CHAT_SEGMENTS"|"REAL_TIME_CONTACT_ANALYSIS_VOICE_SEGMENTS"|"EMAIL_MESSAGES", StorageConfig:array{AssociationId?:string, StorageType:"S3"|"KINESIS_VIDEO_STREAM"|"KINESIS_STREAM"|"KINESIS_FIREHOSE", S3Config?:array{BucketName:string, BucketPrefix:string, EncryptionConfig?:array{EncryptionType:"KMS", KeyId:string}}, KinesisVideoStreamConfig?:array{Prefix:string, RetentionPeriodHours:int, EncryptionConfig:array{EncryptionType:"KMS", KeyId:string}}, KinesisStreamConfig?:array{StreamArn:string}, KinesisFirehoseConfig?:array{FirehoseArn:string}}} $args
     * @return \AWS\Result<void>
     */
    public function updateInstanceStorageConfig(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, AssociationId:string, ResourceType:"CHAT_TRANSCRIPTS"|"CALL_RECORDINGS"|"SCHEDULED_REPORTS"|"MEDIA_STREAMS"|"CONTACT_TRACE_RECORDS"|"AGENT_EVENTS"|"REAL_TIME_CONTACT_ANALYSIS_SEGMENTS"|"ATTACHMENTS"|"CONTACT_EVALUATIONS"|"SCREEN_RECORDINGS"|"REAL_TIME_CONTACT_ANALYSIS_CHAT_SEGMENTS"|"REAL_TIME_CONTACT_ANALYSIS_VOICE_SEGMENTS"|"EMAIL_MESSAGES", StorageConfig:array{AssociationId?:string, StorageType:"S3"|"KINESIS_VIDEO_STREAM"|"KINESIS_STREAM"|"KINESIS_FIREHOSE", S3Config?:array{BucketName:string, BucketPrefix:string, EncryptionConfig?:array{EncryptionType:"KMS", KeyId:string}}, KinesisVideoStreamConfig?:array{Prefix:string, RetentionPeriodHours:int, EncryptionConfig:array{EncryptionType:"KMS", KeyId:string}}, KinesisStreamConfig?:array{StreamArn:string}, KinesisFirehoseConfig?:array{FirehoseArn:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateInstanceStorageConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{State:string, InstanceId:string, Code?:string, Error?:string, ErrorDescription?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateParticipantAuthentication(array $args): \AWS\Result { }

    /**
     * @param array{State:string, InstanceId:string, Code?:string, Error?:string, ErrorDescription?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateParticipantAuthenticationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ContactId:string, ChannelConfiguration:array{Chat?:array{ParticipantTimerConfigList:array<array{ParticipantRole:"CUSTOMER"|"AGENT", TimerType:"IDLE"|"DISCONNECT_NONCUSTOMER", TimerValue:array{ParticipantTimerAction?:"Unset", ParticipantTimerDurationInMinutes?:int}}>}}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateParticipantRoleConfig(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ContactId:string, ChannelConfiguration:array{Chat?:array{ParticipantTimerConfigList:array<array{ParticipantRole:"CUSTOMER"|"AGENT", TimerType:"IDLE"|"DISCONNECT_NONCUSTOMER", TimerValue:array{ParticipantTimerAction?:"Unset", ParticipantTimerDurationInMinutes?:int}}>}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateParticipantRoleConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PhoneNumberId:string, TargetArn?:string, InstanceId?:string, ClientToken?:string} $args
     * @return \AWS\Result<array{PhoneNumberId?:string, PhoneNumberArn?:string}>
     */
    public function updatePhoneNumber(array $args): \AWS\Result { }

    /**
     * @param array{PhoneNumberId:string, TargetArn?:string, InstanceId?:string, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PhoneNumberId?:string, PhoneNumberArn?:string}>
     */
    public function updatePhoneNumberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PhoneNumberId:string, PhoneNumberDescription?:string, ClientToken?:string} $args
     * @return \AWS\Result<void>
     */
    public function updatePhoneNumberMetadata(array $args): \AWS\Result { }

    /**
     * @param array{PhoneNumberId:string, PhoneNumberDescription?:string, ClientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updatePhoneNumberMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, Name:string, Values?:array{StringList?:array<string>}} $args
     * @return \AWS\Result<void>
     */
    public function updatePredefinedAttribute(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, Name:string, Values?:array{StringList?:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updatePredefinedAttributeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, PromptId:string, Name?:string, Description?:string, S3Uri?:string} $args
     * @return \AWS\Result<array{PromptARN?:string, PromptId?:string}>
     */
    public function updatePrompt(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, PromptId:string, Name?:string, Description?:string, S3Uri?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PromptARN?:string, PromptId?:string}>
     */
    public function updatePromptAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, QueueId:string, HoursOfOperationId:string} $args
     * @return \AWS\Result<void>
     */
    public function updateQueueHoursOfOperation(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, QueueId:string, HoursOfOperationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateQueueHoursOfOperationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, QueueId:string, MaxContacts?:int} $args
     * @return \AWS\Result<void>
     */
    public function updateQueueMaxContacts(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, QueueId:string, MaxContacts?:int} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateQueueMaxContactsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, QueueId:string, Name?:string, Description?:string} $args
     * @return \AWS\Result<void>
     */
    public function updateQueueName(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, QueueId:string, Name?:string, Description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateQueueNameAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, QueueId:string, OutboundCallerConfig:array{OutboundCallerIdName?:string, OutboundCallerIdNumberId?:string, OutboundFlowId?:string}} $args
     * @return \AWS\Result<void>
     */
    public function updateQueueOutboundCallerConfig(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, QueueId:string, OutboundCallerConfig:array{OutboundCallerIdName?:string, OutboundCallerIdNumberId?:string, OutboundFlowId?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateQueueOutboundCallerConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, QueueId:string, OutboundEmailConfig:array{OutboundEmailAddressId?:string}} $args
     * @return \AWS\Result<void>
     */
    public function updateQueueOutboundEmailConfig(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, QueueId:string, OutboundEmailConfig:array{OutboundEmailAddressId?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateQueueOutboundEmailConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, QueueId:string, Status:"ENABLED"|"DISABLED"} $args
     * @return \AWS\Result<void>
     */
    public function updateQueueStatus(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, QueueId:string, Status:"ENABLED"|"DISABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateQueueStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, QuickConnectId:string, QuickConnectConfig:array{QuickConnectType:"USER"|"QUEUE"|"PHONE_NUMBER", UserConfig?:array{UserId:string, ContactFlowId:string}, QueueConfig?:array{QueueId:string, ContactFlowId:string}, PhoneConfig?:array{PhoneNumber:string}}} $args
     * @return \AWS\Result<void>
     */
    public function updateQuickConnectConfig(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, QuickConnectId:string, QuickConnectConfig:array{QuickConnectType:"USER"|"QUEUE"|"PHONE_NUMBER", UserConfig?:array{UserId:string, ContactFlowId:string}, QueueConfig?:array{QueueId:string, ContactFlowId:string}, PhoneConfig?:array{PhoneNumber:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateQuickConnectConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, QuickConnectId:string, Name?:string, Description?:string} $args
     * @return \AWS\Result<void>
     */
    public function updateQuickConnectName(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, QuickConnectId:string, Name?:string, Description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateQuickConnectNameAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, RoutingProfileId:string, AgentAvailabilityTimer:"TIME_SINCE_LAST_ACTIVITY"|"TIME_SINCE_LAST_INBOUND"} $args
     * @return \AWS\Result<void>
     */
    public function updateRoutingProfileAgentAvailabilityTimer(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, RoutingProfileId:string, AgentAvailabilityTimer:"TIME_SINCE_LAST_ACTIVITY"|"TIME_SINCE_LAST_INBOUND"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateRoutingProfileAgentAvailabilityTimerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, RoutingProfileId:string, MediaConcurrencies:array<array{Channel:"VOICE"|"CHAT"|"TASK"|"EMAIL", Concurrency:int, CrossChannelBehavior?:array{BehaviorType:"ROUTE_CURRENT_CHANNEL_ONLY"|"ROUTE_ANY_CHANNEL"}}>} $args
     * @return \AWS\Result<void>
     */
    public function updateRoutingProfileConcurrency(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, RoutingProfileId:string, MediaConcurrencies:array<array{Channel:"VOICE"|"CHAT"|"TASK"|"EMAIL", Concurrency:int, CrossChannelBehavior?:array{BehaviorType:"ROUTE_CURRENT_CHANNEL_ONLY"|"ROUTE_ANY_CHANNEL"}}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateRoutingProfileConcurrencyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, RoutingProfileId:string, DefaultOutboundQueueId:string} $args
     * @return \AWS\Result<void>
     */
    public function updateRoutingProfileDefaultOutboundQueue(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, RoutingProfileId:string, DefaultOutboundQueueId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateRoutingProfileDefaultOutboundQueueAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, RoutingProfileId:string, Name?:string, Description?:string} $args
     * @return \AWS\Result<void>
     */
    public function updateRoutingProfileName(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, RoutingProfileId:string, Name?:string, Description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateRoutingProfileNameAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, RoutingProfileId:string, QueueConfigs:array<array{QueueReference:array{QueueId:string, Channel:"VOICE"|"CHAT"|"TASK"|"EMAIL"}, Priority:int, Delay:int}>} $args
     * @return \AWS\Result<void>
     */
    public function updateRoutingProfileQueues(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, RoutingProfileId:string, QueueConfigs:array<array{QueueReference:array{QueueId:string, Channel:"VOICE"|"CHAT"|"TASK"|"EMAIL"}, Priority:int, Delay:int}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateRoutingProfileQueuesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleId:string, InstanceId:string, Name:string, Function:string, Actions:array<array{ActionType:"CREATE_TASK"|"ASSIGN_CONTACT_CATEGORY"|"GENERATE_EVENTBRIDGE_EVENT"|"SEND_NOTIFICATION"|"CREATE_CASE"|"UPDATE_CASE"|"END_ASSOCIATED_TASKS"|"SUBMIT_AUTO_EVALUATION", TaskAction?:array{Name:string, Description?:string, ContactFlowId:string, References?:array<string, array{Value?:string, Type:"URL"|"ATTACHMENT"|"CONTACT_ANALYSIS"|"NUMBER"|"STRING"|"DATE"|"EMAIL"|"EMAIL_MESSAGE", Status?:"AVAILABLE"|"DELETED"|"APPROVED"|"REJECTED"|"PROCESSING"|"FAILED", Arn?:string, StatusReason?:string}>}, EventBridgeAction?:array{Name:string}, AssignContactCategoryAction?:array{}, SendNotificationAction?:array{DeliveryMethod:"EMAIL", Subject?:string, Content:string, ContentType:"PLAIN_TEXT", Recipient:array{UserTags?:array<string, string>, UserIds?:array<string>}}, CreateCaseAction?:array{Fields:array<array{Id:string, Value:array{BooleanValue?:bool, DoubleValue?:float, EmptyValue?:array{}, StringValue?:string}}>, TemplateId:string}, UpdateCaseAction?:array{Fields:array<array{Id:string, Value:array{BooleanValue?:bool, DoubleValue?:float, EmptyValue?:array{}, StringValue?:string}}>}, EndAssociatedTasksAction?:array{}, SubmitAutoEvaluationAction?:array{EvaluationFormId:string}}>, PublishStatus:"DRAFT"|"PUBLISHED"} $args
     * @return \AWS\Result<void>
     */
    public function updateRule(array $args): \AWS\Result { }

    /**
     * @param array{RuleId:string, InstanceId:string, Name:string, Function:string, Actions:array<array{ActionType:"CREATE_TASK"|"ASSIGN_CONTACT_CATEGORY"|"GENERATE_EVENTBRIDGE_EVENT"|"SEND_NOTIFICATION"|"CREATE_CASE"|"UPDATE_CASE"|"END_ASSOCIATED_TASKS"|"SUBMIT_AUTO_EVALUATION", TaskAction?:array{Name:string, Description?:string, ContactFlowId:string, References?:array<string, array{Value?:string, Type:"URL"|"ATTACHMENT"|"CONTACT_ANALYSIS"|"NUMBER"|"STRING"|"DATE"|"EMAIL"|"EMAIL_MESSAGE", Status?:"AVAILABLE"|"DELETED"|"APPROVED"|"REJECTED"|"PROCESSING"|"FAILED", Arn?:string, StatusReason?:string}>}, EventBridgeAction?:array{Name:string}, AssignContactCategoryAction?:array{}, SendNotificationAction?:array{DeliveryMethod:"EMAIL", Subject?:string, Content:string, ContentType:"PLAIN_TEXT", Recipient:array{UserTags?:array<string, string>, UserIds?:array<string>}}, CreateCaseAction?:array{Fields:array<array{Id:string, Value:array{BooleanValue?:bool, DoubleValue?:float, EmptyValue?:array{}, StringValue?:string}}>, TemplateId:string}, UpdateCaseAction?:array{Fields:array<array{Id:string, Value:array{BooleanValue?:bool, DoubleValue?:float, EmptyValue?:array{}, StringValue?:string}}>}, EndAssociatedTasksAction?:array{}, SubmitAutoEvaluationAction?:array{EvaluationFormId:string}}>, PublishStatus:"DRAFT"|"PUBLISHED"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateRuleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Description?:string, Permissions?:array<string>, SecurityProfileId:string, InstanceId:string, AllowedAccessControlTags?:array<string, string>, TagRestrictedResources?:array<string>, Applications?:array<array{Namespace?:string, ApplicationPermissions?:array<string>}>, HierarchyRestrictedResources?:array<string>, AllowedAccessControlHierarchyGroupId?:string} $args
     * @return \AWS\Result<void>
     */
    public function updateSecurityProfile(array $args): \AWS\Result { }

    /**
     * @param array{Description?:string, Permissions?:array<string>, SecurityProfileId:string, InstanceId:string, AllowedAccessControlTags?:array<string, string>, TagRestrictedResources?:array<string>, Applications?:array<array{Namespace?:string, ApplicationPermissions?:array<string>}>, HierarchyRestrictedResources?:array<string>, AllowedAccessControlHierarchyGroupId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateSecurityProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TaskTemplateId:string, InstanceId:string, Name?:string, Description?:string, ContactFlowId?:string, SelfAssignFlowId?:string, Constraints?:array{RequiredFields?:array<array{Id?:array{Name?:string}}>, ReadOnlyFields?:array<array{Id?:array{Name?:string}}>, InvisibleFields?:array<array{Id?:array{Name?:string}}>}, Defaults?:array{DefaultFieldValues?:array<array{Id?:array{Name?:string}, DefaultValue?:string}>}, Status?:"ACTIVE"|"INACTIVE", Fields?:array<array{Id:array{Name?:string}, Description?:string, Type?:"NAME"|"DESCRIPTION"|"SCHEDULED_TIME"|"QUICK_CONNECT"|"URL"|"NUMBER"|"TEXT"|"TEXT_AREA"|"DATE_TIME"|"BOOLEAN"|"SINGLE_SELECT"|"EMAIL"|"SELF_ASSIGN"|"EXPIRY_DURATION", SingleSelectOptions?:array<string>}>} $args
     * @return \AWS\Result<array{InstanceId?:string, Id?:string, Arn?:string, Name?:string, Description?:string, ContactFlowId?:string, SelfAssignFlowId?:string, Constraints?:array{RequiredFields?:array<array{Id?:array{Name?:string}}>, ReadOnlyFields?:array<array{Id?:array{Name?:string}}>, InvisibleFields?:array<array{Id?:array{Name?:string}}>}, Defaults?:array{DefaultFieldValues?:array<array{Id?:array{Name?:string}, DefaultValue?:string}>}, Fields?:array<array{Id:array{Name?:string}, Description?:string, Type?:"NAME"|"DESCRIPTION"|"SCHEDULED_TIME"|"QUICK_CONNECT"|"URL"|"NUMBER"|"TEXT"|"TEXT_AREA"|"DATE_TIME"|"BOOLEAN"|"SINGLE_SELECT"|"EMAIL"|"SELF_ASSIGN"|"EXPIRY_DURATION", SingleSelectOptions?:array<string>}>, Status?:"ACTIVE"|"INACTIVE", LastModifiedTime?:int|string|\DateTimeInterface, CreatedTime?:int|string|\DateTimeInterface}>
     */
    public function updateTaskTemplate(array $args): \AWS\Result { }

    /**
     * @param array{TaskTemplateId:string, InstanceId:string, Name?:string, Description?:string, ContactFlowId?:string, SelfAssignFlowId?:string, Constraints?:array{RequiredFields?:array<array{Id?:array{Name?:string}}>, ReadOnlyFields?:array<array{Id?:array{Name?:string}}>, InvisibleFields?:array<array{Id?:array{Name?:string}}>}, Defaults?:array{DefaultFieldValues?:array<array{Id?:array{Name?:string}, DefaultValue?:string}>}, Status?:"ACTIVE"|"INACTIVE", Fields?:array<array{Id:array{Name?:string}, Description?:string, Type?:"NAME"|"DESCRIPTION"|"SCHEDULED_TIME"|"QUICK_CONNECT"|"URL"|"NUMBER"|"TEXT"|"TEXT_AREA"|"DATE_TIME"|"BOOLEAN"|"SINGLE_SELECT"|"EMAIL"|"SELF_ASSIGN"|"EXPIRY_DURATION", SingleSelectOptions?:array<string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{InstanceId?:string, Id?:string, Arn?:string, Name?:string, Description?:string, ContactFlowId?:string, SelfAssignFlowId?:string, Constraints?:array{RequiredFields?:array<array{Id?:array{Name?:string}}>, ReadOnlyFields?:array<array{Id?:array{Name?:string}}>, InvisibleFields?:array<array{Id?:array{Name?:string}}>}, Defaults?:array{DefaultFieldValues?:array<array{Id?:array{Name?:string}, DefaultValue?:string}>}, Fields?:array<array{Id:array{Name?:string}, Description?:string, Type?:"NAME"|"DESCRIPTION"|"SCHEDULED_TIME"|"QUICK_CONNECT"|"URL"|"NUMBER"|"TEXT"|"TEXT_AREA"|"DATE_TIME"|"BOOLEAN"|"SINGLE_SELECT"|"EMAIL"|"SELF_ASSIGN"|"EXPIRY_DURATION", SingleSelectOptions?:array<string>}>, Status?:"ACTIVE"|"INACTIVE", LastModifiedTime?:int|string|\DateTimeInterface, CreatedTime?:int|string|\DateTimeInterface}>
     */
    public function updateTaskTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Id:string, TelephonyConfig?:array{Distributions:array<array{Region:string, Percentage:int}>}, SignInConfig?:array{Distributions:array<array{Region:string, Enabled:bool}>}, AgentConfig?:array{Distributions:array<array{Region:string, Percentage:int}>}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateTrafficDistribution(array $args): \AWS\Result { }

    /**
     * @param array{Id:string, TelephonyConfig?:array{Distributions:array<array{Region:string, Percentage:int}>}, SignInConfig?:array{Distributions:array<array{Region:string, Enabled:bool}>}, AgentConfig?:array{Distributions:array<array{Region:string, Percentage:int}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateTrafficDistributionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HierarchyGroupId?:string, UserId:string, InstanceId:string} $args
     * @return \AWS\Result<void>
     */
    public function updateUserHierarchy(array $args): \AWS\Result { }

    /**
     * @param array{HierarchyGroupId?:string, UserId:string, InstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateUserHierarchyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, HierarchyGroupId:string, InstanceId:string} $args
     * @return \AWS\Result<void>
     */
    public function updateUserHierarchyGroupName(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, HierarchyGroupId:string, InstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateUserHierarchyGroupNameAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{HierarchyStructure:array{LevelOne?:array{Name:string}, LevelTwo?:array{Name:string}, LevelThree?:array{Name:string}, LevelFour?:array{Name:string}, LevelFive?:array{Name:string}}, InstanceId:string} $args
     * @return \AWS\Result<void>
     */
    public function updateUserHierarchyStructure(array $args): \AWS\Result { }

    /**
     * @param array{HierarchyStructure:array{LevelOne?:array{Name:string}, LevelTwo?:array{Name:string}, LevelThree?:array{Name:string}, LevelFour?:array{Name:string}, LevelFive?:array{Name:string}}, InstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateUserHierarchyStructureAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IdentityInfo:array{FirstName?:string, LastName?:string, Email?:string, SecondaryEmail?:string, Mobile?:string}, UserId:string, InstanceId:string} $args
     * @return \AWS\Result<void>
     */
    public function updateUserIdentityInfo(array $args): \AWS\Result { }

    /**
     * @param array{IdentityInfo:array{FirstName?:string, LastName?:string, Email?:string, SecondaryEmail?:string, Mobile?:string}, UserId:string, InstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateUserIdentityInfoAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PhoneConfig:array{PhoneType:"SOFT_PHONE"|"DESK_PHONE", AutoAccept?:bool, AfterContactWorkTimeLimit?:int, DeskPhoneNumber?:string}, UserId:string, InstanceId:string} $args
     * @return \AWS\Result<void>
     */
    public function updateUserPhoneConfig(array $args): \AWS\Result { }

    /**
     * @param array{PhoneConfig:array{PhoneType:"SOFT_PHONE"|"DESK_PHONE", AutoAccept?:bool, AfterContactWorkTimeLimit?:int, DeskPhoneNumber?:string}, UserId:string, InstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateUserPhoneConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, UserId:string, UserProficiencies:array<array{AttributeName:string, AttributeValue:string, Level:float}>} $args
     * @return \AWS\Result<void>
     */
    public function updateUserProficiencies(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, UserId:string, UserProficiencies:array<array{AttributeName:string, AttributeValue:string, Level:float}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateUserProficienciesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RoutingProfileId:string, UserId:string, InstanceId:string} $args
     * @return \AWS\Result<void>
     */
    public function updateUserRoutingProfile(array $args): \AWS\Result { }

    /**
     * @param array{RoutingProfileId:string, UserId:string, InstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateUserRoutingProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SecurityProfileIds:array<string>, UserId:string, InstanceId:string} $args
     * @return \AWS\Result<void>
     */
    public function updateUserSecurityProfiles(array $args): \AWS\Result { }

    /**
     * @param array{SecurityProfileIds:array<string>, UserId:string, InstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateUserSecurityProfilesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ViewId:string, Status:"PUBLISHED"|"SAVED", Content:array{Template?:string, Actions?:array<string>}} $args
     * @return \AWS\Result<array{View?:array{Id?:string, Arn?:string, Name?:string, Status?:"PUBLISHED"|"SAVED", Type?:"CUSTOMER_MANAGED"|"AWS_MANAGED", Description?:string, Version?:int, VersionDescription?:string, Content?:array{InputSchema?:string, Template?:string, Actions?:array<string>}, Tags?:array<string, string>, CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, ViewContentSha256?:string}}>
     */
    public function updateViewContent(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ViewId:string, Status:"PUBLISHED"|"SAVED", Content:array{Template?:string, Actions?:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{View?:array{Id?:string, Arn?:string, Name?:string, Status?:"PUBLISHED"|"SAVED", Type?:"CUSTOMER_MANAGED"|"AWS_MANAGED", Description?:string, Version?:int, VersionDescription?:string, Content?:array{InputSchema?:string, Template?:string, Actions?:array<string>}, Tags?:array<string, string>, CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface, ViewContentSha256?:string}}>
     */
    public function updateViewContentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{InstanceId:string, ViewId:string, Name?:string, Description?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateViewMetadata(array $args): \AWS\Result { }

    /**
     * @param array{InstanceId:string, ViewId:string, Name?:string, Description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateViewMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
