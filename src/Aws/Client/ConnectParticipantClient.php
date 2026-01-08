<?php
namespace AWS\ConnectParticipant;

class ConnectParticipantClient
{
    /**
     * @param array{SessionId:string, ConnectionToken:string} $args
     * @return \AWS\Result<array{}>
     */
    public function cancelParticipantAuthentication(array $args): \AWS\Result { }

    /**
     * @param array{SessionId:string, ConnectionToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function cancelParticipantAuthenticationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AttachmentIds:array<string>, ClientToken:string, ConnectionToken:string} $args
     * @return \AWS\Result<array{}>
     */
    public function completeAttachmentUpload(array $args): \AWS\Result { }

    /**
     * @param array{AttachmentIds:array<string>, ClientToken:string, ConnectionToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function completeAttachmentUploadAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Type?:array<"WEBSOCKET"|"CONNECTION_CREDENTIALS">, ParticipantToken:string, ConnectParticipant?:bool} $args
     * @return \AWS\Result<array{Websocket?:array{Url?:string, ConnectionExpiry?:string}, ConnectionCredentials?:array{ConnectionToken?:string, Expiry?:string}}>
     */
    public function createParticipantConnection(array $args): \AWS\Result { }

    /**
     * @param array{Type?:array<"WEBSOCKET"|"CONNECTION_CREDENTIALS">, ParticipantToken:string, ConnectParticipant?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Websocket?:array{Url?:string, ConnectionExpiry?:string}, ConnectionCredentials?:array{ConnectionToken?:string, Expiry?:string}}>
     */
    public function createParticipantConnectionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ViewToken:string, ConnectionToken:string} $args
     * @return \AWS\Result<array{View?:array{Id?:string, Arn?:string, Name?:string, Version?:int, Content?:array{InputSchema?:string, Template?:string, Actions?:array<string>}}}>
     */
    public function describeView(array $args): \AWS\Result { }

    /**
     * @param array{ViewToken:string, ConnectionToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{View?:array{Id?:string, Arn?:string, Name?:string, Version?:int, Content?:array{InputSchema?:string, Template?:string, Actions?:array<string>}}}>
     */
    public function describeViewAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, ConnectionToken:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disconnectParticipant(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, ConnectionToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disconnectParticipantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AttachmentId:string, ConnectionToken:string, UrlExpiryInSeconds?:int} $args
     * @return \AWS\Result<array{Url?:string, UrlExpiry?:string, AttachmentSizeInBytes:int}>
     */
    public function getAttachment(array $args): \AWS\Result { }

    /**
     * @param array{AttachmentId:string, ConnectionToken:string, UrlExpiryInSeconds?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Url?:string, UrlExpiry?:string, AttachmentSizeInBytes:int}>
     */
    public function getAttachmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SessionId:string, RedirectUri:string, ConnectionToken:string} $args
     * @return \AWS\Result<array{AuthenticationUrl?:string}>
     */
    public function getAuthenticationUrl(array $args): \AWS\Result { }

    /**
     * @param array{SessionId:string, RedirectUri:string, ConnectionToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AuthenticationUrl?:string}>
     */
    public function getAuthenticationUrlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContactId?:string, MaxResults?:int, NextToken?:string, ScanDirection?:"FORWARD"|"BACKWARD", SortOrder?:"DESCENDING"|"ASCENDING", StartPosition?:array{Id?:string, AbsoluteTime?:string, MostRecent?:int}, ConnectionToken:string} $args
     * @return \AWS\Result<array{InitialContactId?:string, Transcript?:array<array{AbsoluteTime?:string, Content?:string, ContentType?:string, Id?:string, Type?:"TYPING"|"PARTICIPANT_JOINED"|"PARTICIPANT_LEFT"|"CHAT_ENDED"|"TRANSFER_SUCCEEDED"|"TRANSFER_FAILED"|"MESSAGE"|"EVENT"|"ATTACHMENT"|"CONNECTION_ACK"|"MESSAGE_DELIVERED"|"MESSAGE_READ", ParticipantId?:string, DisplayName?:string, ParticipantRole?:"AGENT"|"CUSTOMER"|"SYSTEM"|"CUSTOM_BOT"|"SUPERVISOR", Attachments?:array<array{ContentType?:string, AttachmentId?:string, AttachmentName?:string, Status?:"APPROVED"|"REJECTED"|"IN_PROGRESS"}>, MessageMetadata?:array{MessageId?:string, Receipts?:array<array{DeliveredTimestamp?:string, ReadTimestamp?:string, RecipientParticipantId?:string}>}, RelatedContactId?:string, ContactId?:string}>, NextToken?:string}>
     */
    public function getTranscript(array $args): \AWS\Result { }

    /**
     * @param array{ContactId?:string, MaxResults?:int, NextToken?:string, ScanDirection?:"FORWARD"|"BACKWARD", SortOrder?:"DESCENDING"|"ASCENDING", StartPosition?:array{Id?:string, AbsoluteTime?:string, MostRecent?:int}, ConnectionToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{InitialContactId?:string, Transcript?:array<array{AbsoluteTime?:string, Content?:string, ContentType?:string, Id?:string, Type?:"TYPING"|"PARTICIPANT_JOINED"|"PARTICIPANT_LEFT"|"CHAT_ENDED"|"TRANSFER_SUCCEEDED"|"TRANSFER_FAILED"|"MESSAGE"|"EVENT"|"ATTACHMENT"|"CONNECTION_ACK"|"MESSAGE_DELIVERED"|"MESSAGE_READ", ParticipantId?:string, DisplayName?:string, ParticipantRole?:"AGENT"|"CUSTOMER"|"SYSTEM"|"CUSTOM_BOT"|"SUPERVISOR", Attachments?:array<array{ContentType?:string, AttachmentId?:string, AttachmentName?:string, Status?:"APPROVED"|"REJECTED"|"IN_PROGRESS"}>, MessageMetadata?:array{MessageId?:string, Receipts?:array<array{DeliveredTimestamp?:string, ReadTimestamp?:string, RecipientParticipantId?:string}>}, RelatedContactId?:string, ContactId?:string}>, NextToken?:string}>
     */
    public function getTranscriptAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContentType:string, Content?:string, ClientToken?:string, ConnectionToken:string} $args
     * @return \AWS\Result<array{Id?:string, AbsoluteTime?:string}>
     */
    public function sendEvent(array $args): \AWS\Result { }

    /**
     * @param array{ContentType:string, Content?:string, ClientToken?:string, ConnectionToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Id?:string, AbsoluteTime?:string}>
     */
    public function sendEventAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContentType:string, Content:string, ClientToken?:string, ConnectionToken:string} $args
     * @return \AWS\Result<array{Id?:string, AbsoluteTime?:string}>
     */
    public function sendMessage(array $args): \AWS\Result { }

    /**
     * @param array{ContentType:string, Content:string, ClientToken?:string, ConnectionToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Id?:string, AbsoluteTime?:string}>
     */
    public function sendMessageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ContentType:string, AttachmentSizeInBytes:int, AttachmentName:string, ClientToken:string, ConnectionToken:string} $args
     * @return \AWS\Result<array{AttachmentId?:string, UploadMetadata?:array{Url?:string, UrlExpiry?:string, HeadersToInclude?:array<string, string>}}>
     */
    public function startAttachmentUpload(array $args): \AWS\Result { }

    /**
     * @param array{ContentType:string, AttachmentSizeInBytes:int, AttachmentName:string, ClientToken:string, ConnectionToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AttachmentId?:string, UploadMetadata?:array{Url?:string, UrlExpiry?:string, HeadersToInclude?:array<string, string>}}>
     */
    public function startAttachmentUploadAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
