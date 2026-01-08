<?php
namespace AWS\MailManager;

class MailManagerClient
{
    /**
     * @param array{AddonSubscriptionId:string, ClientToken?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{AddonInstanceId:string}>
     */
    public function createAddonInstance(array $args): \AWS\Result { }

    /**
     * @param array{AddonSubscriptionId:string, ClientToken?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{AddonInstanceId:string}>
     */
    public function createAddonInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AddonName:string, ClientToken?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{AddonSubscriptionId:string}>
     */
    public function createAddonSubscription(array $args): \AWS\Result { }

    /**
     * @param array{AddonName:string, ClientToken?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{AddonSubscriptionId:string}>
     */
    public function createAddonSubscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ArchiveName:string, ClientToken?:string, KmsKeyArn?:string, Retention?:array{RetentionPeriod?:"THREE_MONTHS"|"SIX_MONTHS"|"NINE_MONTHS"|"ONE_YEAR"|"EIGHTEEN_MONTHS"|"TWO_YEARS"|"THIRTY_MONTHS"|"THREE_YEARS"|"FOUR_YEARS"|"FIVE_YEARS"|"SIX_YEARS"|"SEVEN_YEARS"|"EIGHT_YEARS"|"NINE_YEARS"|"TEN_YEARS"|"PERMANENT"}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{ArchiveId:string}>
     */
    public function createArchive(array $args): \AWS\Result { }

    /**
     * @param array{ArchiveName:string, ClientToken?:string, KmsKeyArn?:string, Retention?:array{RetentionPeriod?:"THREE_MONTHS"|"SIX_MONTHS"|"NINE_MONTHS"|"ONE_YEAR"|"EIGHTEEN_MONTHS"|"TWO_YEARS"|"THIRTY_MONTHS"|"THREE_YEARS"|"FOUR_YEARS"|"FIVE_YEARS"|"SIX_YEARS"|"SEVEN_YEARS"|"EIGHT_YEARS"|"NINE_YEARS"|"TEN_YEARS"|"PERMANENT"}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ArchiveId:string}>
     */
    public function createArchiveAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, IngressPointConfiguration?:array{SecretArn?:string, SmtpPassword?:string}, IngressPointName:string, RuleSetId:string, Tags?:array<array{Key:string, Value:string}>, TrafficPolicyId:string, Type:"OPEN"|"AUTH"} $args
     * @return \AWS\Result<array{IngressPointId:string}>
     */
    public function createIngressPoint(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, IngressPointConfiguration?:array{SecretArn?:string, SmtpPassword?:string}, IngressPointName:string, RuleSetId:string, Tags?:array<array{Key:string, Value:string}>, TrafficPolicyId:string, Type:"OPEN"|"AUTH"} $args
     * @return \GuzzleHttp\Promise\Promise<array{IngressPointId:string}>
     */
    public function createIngressPointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Authentication:array{NoAuthentication?:array{}, SecretArn?:string}, ClientToken?:string, RelayName:string, ServerName:string, ServerPort:int, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{RelayId:string}>
     */
    public function createRelay(array $args): \AWS\Result { }

    /**
     * @param array{Authentication:array{NoAuthentication?:array{}, SecretArn?:string}, ClientToken?:string, RelayName:string, ServerName:string, ServerPort:int, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{RelayId:string}>
     */
    public function createRelayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, RuleSetName:string, Rules:array<array{Actions:array<array{AddHeader?:array{HeaderName:string, HeaderValue:string}, Archive?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", TargetArchive:string}, DeliverToMailbox?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", MailboxArn:string, RoleArn:string}, DeliverToQBusiness?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", ApplicationId:string, IndexId:string, RoleArn:string}, Drop?:array{}, Relay?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", MailFrom?:"REPLACE"|"PRESERVE", Relay:mixed}, ReplaceRecipient?:array{ReplaceWith?:array<string>}, Send?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", RoleArn:string}, WriteToS3?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", RoleArn:string, S3Bucket:string, S3Prefix?:string, S3SseKmsKeyId?:string}}>, Conditions?:array<array{BooleanExpression?:array{Evaluate:array{Attribute?:"READ_RECEIPT_REQUESTED"|"TLS"|"TLS_WRAPPED"}, Operator:"IS_TRUE"|"IS_FALSE"}, DmarcExpression?:array{Operator:"EQUALS"|"NOT_EQUALS", Values:array<"NONE"|"QUARANTINE"|"REJECT">}, IpExpression?:array{Evaluate:array{Attribute?:"SOURCE_IP"}, Operator:"CIDR_MATCHES"|"NOT_CIDR_MATCHES", Values:array<string>}, NumberExpression?:array{Evaluate:array{Attribute?:"MESSAGE_SIZE"}, Operator:"EQUALS"|"NOT_EQUALS"|"LESS_THAN"|"GREATER_THAN"|"LESS_THAN_OR_EQUAL"|"GREATER_THAN_OR_EQUAL", Value:float}, StringExpression?:array{Evaluate:array{Attribute?:"MAIL_FROM"|"HELO"|"RECIPIENT"|"SENDER"|"FROM"|"SUBJECT"|"TO"|"CC", MimeHeaderAttribute?:string}, Operator:"EQUALS"|"NOT_EQUALS"|"STARTS_WITH"|"ENDS_WITH"|"CONTAINS", Values:array<string>}, VerdictExpression?:array{Evaluate:array{Analysis?:array{Analyzer:string, ResultField:string}, Attribute?:"SPF"|"DKIM"}, Operator:"EQUALS"|"NOT_EQUALS", Values:array<"PASS"|"FAIL"|"GRAY"|"PROCESSING_FAILED">}}>, Name?:string, Unless?:array<array{BooleanExpression?:array{Evaluate:array{Attribute?:"READ_RECEIPT_REQUESTED"|"TLS"|"TLS_WRAPPED"}, Operator:"IS_TRUE"|"IS_FALSE"}, DmarcExpression?:array{Operator:"EQUALS"|"NOT_EQUALS", Values:array<"NONE"|"QUARANTINE"|"REJECT">}, IpExpression?:array{Evaluate:array{Attribute?:"SOURCE_IP"}, Operator:"CIDR_MATCHES"|"NOT_CIDR_MATCHES", Values:array<string>}, NumberExpression?:array{Evaluate:array{Attribute?:"MESSAGE_SIZE"}, Operator:"EQUALS"|"NOT_EQUALS"|"LESS_THAN"|"GREATER_THAN"|"LESS_THAN_OR_EQUAL"|"GREATER_THAN_OR_EQUAL", Value:float}, StringExpression?:array{Evaluate:array{Attribute?:"MAIL_FROM"|"HELO"|"RECIPIENT"|"SENDER"|"FROM"|"SUBJECT"|"TO"|"CC", MimeHeaderAttribute?:string}, Operator:"EQUALS"|"NOT_EQUALS"|"STARTS_WITH"|"ENDS_WITH"|"CONTAINS", Values:array<string>}, VerdictExpression?:array{Evaluate:array{Analysis?:array{Analyzer:string, ResultField:string}, Attribute?:"SPF"|"DKIM"}, Operator:"EQUALS"|"NOT_EQUALS", Values:array<"PASS"|"FAIL"|"GRAY"|"PROCESSING_FAILED">}}>}>, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{RuleSetId:string}>
     */
    public function createRuleSet(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, RuleSetName:string, Rules:array<array{Actions:array<array{AddHeader?:array{HeaderName:string, HeaderValue:string}, Archive?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", TargetArchive:string}, DeliverToMailbox?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", MailboxArn:string, RoleArn:string}, DeliverToQBusiness?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", ApplicationId:string, IndexId:string, RoleArn:string}, Drop?:array{}, Relay?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", MailFrom?:"REPLACE"|"PRESERVE", Relay:mixed}, ReplaceRecipient?:array{ReplaceWith?:array<string>}, Send?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", RoleArn:string}, WriteToS3?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", RoleArn:string, S3Bucket:string, S3Prefix?:string, S3SseKmsKeyId?:string}}>, Conditions?:array<array{BooleanExpression?:array{Evaluate:array{Attribute?:"READ_RECEIPT_REQUESTED"|"TLS"|"TLS_WRAPPED"}, Operator:"IS_TRUE"|"IS_FALSE"}, DmarcExpression?:array{Operator:"EQUALS"|"NOT_EQUALS", Values:array<"NONE"|"QUARANTINE"|"REJECT">}, IpExpression?:array{Evaluate:array{Attribute?:"SOURCE_IP"}, Operator:"CIDR_MATCHES"|"NOT_CIDR_MATCHES", Values:array<string>}, NumberExpression?:array{Evaluate:array{Attribute?:"MESSAGE_SIZE"}, Operator:"EQUALS"|"NOT_EQUALS"|"LESS_THAN"|"GREATER_THAN"|"LESS_THAN_OR_EQUAL"|"GREATER_THAN_OR_EQUAL", Value:float}, StringExpression?:array{Evaluate:array{Attribute?:"MAIL_FROM"|"HELO"|"RECIPIENT"|"SENDER"|"FROM"|"SUBJECT"|"TO"|"CC", MimeHeaderAttribute?:string}, Operator:"EQUALS"|"NOT_EQUALS"|"STARTS_WITH"|"ENDS_WITH"|"CONTAINS", Values:array<string>}, VerdictExpression?:array{Evaluate:array{Analysis?:array{Analyzer:string, ResultField:string}, Attribute?:"SPF"|"DKIM"}, Operator:"EQUALS"|"NOT_EQUALS", Values:array<"PASS"|"FAIL"|"GRAY"|"PROCESSING_FAILED">}}>, Name?:string, Unless?:array<array{BooleanExpression?:array{Evaluate:array{Attribute?:"READ_RECEIPT_REQUESTED"|"TLS"|"TLS_WRAPPED"}, Operator:"IS_TRUE"|"IS_FALSE"}, DmarcExpression?:array{Operator:"EQUALS"|"NOT_EQUALS", Values:array<"NONE"|"QUARANTINE"|"REJECT">}, IpExpression?:array{Evaluate:array{Attribute?:"SOURCE_IP"}, Operator:"CIDR_MATCHES"|"NOT_CIDR_MATCHES", Values:array<string>}, NumberExpression?:array{Evaluate:array{Attribute?:"MESSAGE_SIZE"}, Operator:"EQUALS"|"NOT_EQUALS"|"LESS_THAN"|"GREATER_THAN"|"LESS_THAN_OR_EQUAL"|"GREATER_THAN_OR_EQUAL", Value:float}, StringExpression?:array{Evaluate:array{Attribute?:"MAIL_FROM"|"HELO"|"RECIPIENT"|"SENDER"|"FROM"|"SUBJECT"|"TO"|"CC", MimeHeaderAttribute?:string}, Operator:"EQUALS"|"NOT_EQUALS"|"STARTS_WITH"|"ENDS_WITH"|"CONTAINS", Values:array<string>}, VerdictExpression?:array{Evaluate:array{Analysis?:array{Analyzer:string, ResultField:string}, Attribute?:"SPF"|"DKIM"}, Operator:"EQUALS"|"NOT_EQUALS", Values:array<"PASS"|"FAIL"|"GRAY"|"PROCESSING_FAILED">}}>}>, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{RuleSetId:string}>
     */
    public function createRuleSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ClientToken?:string, DefaultAction:"ALLOW"|"DENY", MaxMessageSizeBytes?:int, PolicyStatements:array<array{Action:"ALLOW"|"DENY", Conditions:array<array{BooleanExpression?:array{Evaluate:array{Analysis?:array{Analyzer:string, ResultField:string}}, Operator:"IS_TRUE"|"IS_FALSE"}, IpExpression?:array{Evaluate:array{Attribute?:"SENDER_IP"}, Operator:"CIDR_MATCHES"|"NOT_CIDR_MATCHES", Values:array<string>}, StringExpression?:array{Evaluate:array{Attribute?:"RECIPIENT"}, Operator:"EQUALS"|"NOT_EQUALS"|"STARTS_WITH"|"ENDS_WITH"|"CONTAINS", Values:array<string>}, TlsExpression?:array{Evaluate:array{Attribute?:"TLS_PROTOCOL"}, Operator:"MINIMUM_TLS_VERSION"|"IS", Value:"TLS1_2"|"TLS1_3"}}>}>, Tags?:array<array{Key:string, Value:string}>, TrafficPolicyName:string} $args
     * @return \AWS\Result<array{TrafficPolicyId:string}>
     */
    public function createTrafficPolicy(array $args): \AWS\Result { }

    /**
     * @param array{ClientToken?:string, DefaultAction:"ALLOW"|"DENY", MaxMessageSizeBytes?:int, PolicyStatements:array<array{Action:"ALLOW"|"DENY", Conditions:array<array{BooleanExpression?:array{Evaluate:array{Analysis?:array{Analyzer:string, ResultField:string}}, Operator:"IS_TRUE"|"IS_FALSE"}, IpExpression?:array{Evaluate:array{Attribute?:"SENDER_IP"}, Operator:"CIDR_MATCHES"|"NOT_CIDR_MATCHES", Values:array<string>}, StringExpression?:array{Evaluate:array{Attribute?:"RECIPIENT"}, Operator:"EQUALS"|"NOT_EQUALS"|"STARTS_WITH"|"ENDS_WITH"|"CONTAINS", Values:array<string>}, TlsExpression?:array{Evaluate:array{Attribute?:"TLS_PROTOCOL"}, Operator:"MINIMUM_TLS_VERSION"|"IS", Value:"TLS1_2"|"TLS1_3"}}>}>, Tags?:array<array{Key:string, Value:string}>, TrafficPolicyName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TrafficPolicyId:string}>
     */
    public function createTrafficPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AddonInstanceId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAddonInstance(array $args): \AWS\Result { }

    /**
     * @param array{AddonInstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAddonInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AddonSubscriptionId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAddonSubscription(array $args): \AWS\Result { }

    /**
     * @param array{AddonSubscriptionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAddonSubscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ArchiveId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteArchive(array $args): \AWS\Result { }

    /**
     * @param array{ArchiveId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteArchiveAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IngressPointId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteIngressPoint(array $args): \AWS\Result { }

    /**
     * @param array{IngressPointId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteIngressPointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RelayId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteRelay(array $args): \AWS\Result { }

    /**
     * @param array{RelayId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteRelayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleSetId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteRuleSet(array $args): \AWS\Result { }

    /**
     * @param array{RuleSetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteRuleSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrafficPolicyId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteTrafficPolicy(array $args): \AWS\Result { }

    /**
     * @param array{TrafficPolicyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteTrafficPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AddonInstanceId:string} $args
     * @return \AWS\Result<array{AddonInstanceArn?:string, AddonName?:string, AddonSubscriptionId?:string, CreatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function getAddonInstance(array $args): \AWS\Result { }

    /**
     * @param array{AddonInstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AddonInstanceArn?:string, AddonName?:string, AddonSubscriptionId?:string, CreatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function getAddonInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AddonSubscriptionId:string} $args
     * @return \AWS\Result<array{AddonName?:string, AddonSubscriptionArn?:string, CreatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function getAddonSubscription(array $args): \AWS\Result { }

    /**
     * @param array{AddonSubscriptionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AddonName?:string, AddonSubscriptionArn?:string, CreatedTimestamp?:int|string|\DateTimeInterface}>
     */
    public function getAddonSubscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ArchiveId:string} $args
     * @return \AWS\Result<array{ArchiveArn:string, ArchiveId:string, ArchiveName:string, ArchiveState:"ACTIVE"|"PENDING_DELETION", CreatedTimestamp?:int|string|\DateTimeInterface, KmsKeyArn?:string, LastUpdatedTimestamp?:int|string|\DateTimeInterface, Retention:array{RetentionPeriod?:"THREE_MONTHS"|"SIX_MONTHS"|"NINE_MONTHS"|"ONE_YEAR"|"EIGHTEEN_MONTHS"|"TWO_YEARS"|"THIRTY_MONTHS"|"THREE_YEARS"|"FOUR_YEARS"|"FIVE_YEARS"|"SIX_YEARS"|"SEVEN_YEARS"|"EIGHT_YEARS"|"NINE_YEARS"|"TEN_YEARS"|"PERMANENT"}}>
     */
    public function getArchive(array $args): \AWS\Result { }

    /**
     * @param array{ArchiveId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ArchiveArn:string, ArchiveId:string, ArchiveName:string, ArchiveState:"ACTIVE"|"PENDING_DELETION", CreatedTimestamp?:int|string|\DateTimeInterface, KmsKeyArn?:string, LastUpdatedTimestamp?:int|string|\DateTimeInterface, Retention:array{RetentionPeriod?:"THREE_MONTHS"|"SIX_MONTHS"|"NINE_MONTHS"|"ONE_YEAR"|"EIGHTEEN_MONTHS"|"TWO_YEARS"|"THIRTY_MONTHS"|"THREE_YEARS"|"FOUR_YEARS"|"FIVE_YEARS"|"SIX_YEARS"|"SEVEN_YEARS"|"EIGHT_YEARS"|"NINE_YEARS"|"TEN_YEARS"|"PERMANENT"}}>
     */
    public function getArchiveAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ExportId:string} $args
     * @return \AWS\Result<array{ArchiveId?:string, ExportDestinationConfiguration?:array{S3?:array{S3Location?:string}}, Filters?:array{Include?:array<array{BooleanExpression?:array{Evaluate:array{Attribute?:"HAS_ATTACHMENTS"}, Operator:"IS_TRUE"|"IS_FALSE"}, StringExpression?:array{Evaluate:array{Attribute?:"TO"|"FROM"|"CC"|"SUBJECT"|"ENVELOPE_TO"|"ENVELOPE_FROM"}, Operator:"CONTAINS", Values:array<string>}}>, Unless?:array<array{BooleanExpression?:array{Evaluate:array{Attribute?:"HAS_ATTACHMENTS"}, Operator:"IS_TRUE"|"IS_FALSE"}, StringExpression?:array{Evaluate:array{Attribute?:"TO"|"FROM"|"CC"|"SUBJECT"|"ENVELOPE_TO"|"ENVELOPE_FROM"}, Operator:"CONTAINS", Values:array<string>}}>}, FromTimestamp?:int|string|\DateTimeInterface, MaxResults?:int, Status?:array{CompletionTimestamp?:int|string|\DateTimeInterface, ErrorMessage?:string, State?:"QUEUED"|"PREPROCESSING"|"PROCESSING"|"COMPLETED"|"FAILED"|"CANCELLED", SubmissionTimestamp?:int|string|\DateTimeInterface}, ToTimestamp?:int|string|\DateTimeInterface}>
     */
    public function getArchiveExport(array $args): \AWS\Result { }

    /**
     * @param array{ExportId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ArchiveId?:string, ExportDestinationConfiguration?:array{S3?:array{S3Location?:string}}, Filters?:array{Include?:array<array{BooleanExpression?:array{Evaluate:array{Attribute?:"HAS_ATTACHMENTS"}, Operator:"IS_TRUE"|"IS_FALSE"}, StringExpression?:array{Evaluate:array{Attribute?:"TO"|"FROM"|"CC"|"SUBJECT"|"ENVELOPE_TO"|"ENVELOPE_FROM"}, Operator:"CONTAINS", Values:array<string>}}>, Unless?:array<array{BooleanExpression?:array{Evaluate:array{Attribute?:"HAS_ATTACHMENTS"}, Operator:"IS_TRUE"|"IS_FALSE"}, StringExpression?:array{Evaluate:array{Attribute?:"TO"|"FROM"|"CC"|"SUBJECT"|"ENVELOPE_TO"|"ENVELOPE_FROM"}, Operator:"CONTAINS", Values:array<string>}}>}, FromTimestamp?:int|string|\DateTimeInterface, MaxResults?:int, Status?:array{CompletionTimestamp?:int|string|\DateTimeInterface, ErrorMessage?:string, State?:"QUEUED"|"PREPROCESSING"|"PROCESSING"|"COMPLETED"|"FAILED"|"CANCELLED", SubmissionTimestamp?:int|string|\DateTimeInterface}, ToTimestamp?:int|string|\DateTimeInterface}>
     */
    public function getArchiveExportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ArchivedMessageId:string} $args
     * @return \AWS\Result<array{Envelope?:array{From?:string, Helo?:string, To?:array<string>}, MessageDownloadLink?:string, Metadata?:array{IngressPointId?:string, RuleSetId?:string, SenderHostname?:string, SenderIpAddress?:string, Timestamp?:int|string|\DateTimeInterface, TlsCipherSuite?:string, TlsProtocol?:string, TrafficPolicyId?:string}}>
     */
    public function getArchiveMessage(array $args): \AWS\Result { }

    /**
     * @param array{ArchivedMessageId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Envelope?:array{From?:string, Helo?:string, To?:array<string>}, MessageDownloadLink?:string, Metadata?:array{IngressPointId?:string, RuleSetId?:string, SenderHostname?:string, SenderIpAddress?:string, Timestamp?:int|string|\DateTimeInterface, TlsCipherSuite?:string, TlsProtocol?:string, TrafficPolicyId?:string}}>
     */
    public function getArchiveMessageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ArchivedMessageId:string} $args
     * @return \AWS\Result<array{Body?:array{Html?:string, MessageMalformed?:bool, Text?:string}}>
     */
    public function getArchiveMessageContent(array $args): \AWS\Result { }

    /**
     * @param array{ArchivedMessageId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Body?:array{Html?:string, MessageMalformed?:bool, Text?:string}}>
     */
    public function getArchiveMessageContentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SearchId:string} $args
     * @return \AWS\Result<array{ArchiveId?:string, Filters?:array{Include?:array<array{BooleanExpression?:array{Evaluate:array{Attribute?:"HAS_ATTACHMENTS"}, Operator:"IS_TRUE"|"IS_FALSE"}, StringExpression?:array{Evaluate:array{Attribute?:"TO"|"FROM"|"CC"|"SUBJECT"|"ENVELOPE_TO"|"ENVELOPE_FROM"}, Operator:"CONTAINS", Values:array<string>}}>, Unless?:array<array{BooleanExpression?:array{Evaluate:array{Attribute?:"HAS_ATTACHMENTS"}, Operator:"IS_TRUE"|"IS_FALSE"}, StringExpression?:array{Evaluate:array{Attribute?:"TO"|"FROM"|"CC"|"SUBJECT"|"ENVELOPE_TO"|"ENVELOPE_FROM"}, Operator:"CONTAINS", Values:array<string>}}>}, FromTimestamp?:int|string|\DateTimeInterface, MaxResults?:int, Status?:array{CompletionTimestamp?:int|string|\DateTimeInterface, ErrorMessage?:string, State?:"QUEUED"|"RUNNING"|"COMPLETED"|"FAILED"|"CANCELLED", SubmissionTimestamp?:int|string|\DateTimeInterface}, ToTimestamp?:int|string|\DateTimeInterface}>
     */
    public function getArchiveSearch(array $args): \AWS\Result { }

    /**
     * @param array{SearchId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ArchiveId?:string, Filters?:array{Include?:array<array{BooleanExpression?:array{Evaluate:array{Attribute?:"HAS_ATTACHMENTS"}, Operator:"IS_TRUE"|"IS_FALSE"}, StringExpression?:array{Evaluate:array{Attribute?:"TO"|"FROM"|"CC"|"SUBJECT"|"ENVELOPE_TO"|"ENVELOPE_FROM"}, Operator:"CONTAINS", Values:array<string>}}>, Unless?:array<array{BooleanExpression?:array{Evaluate:array{Attribute?:"HAS_ATTACHMENTS"}, Operator:"IS_TRUE"|"IS_FALSE"}, StringExpression?:array{Evaluate:array{Attribute?:"TO"|"FROM"|"CC"|"SUBJECT"|"ENVELOPE_TO"|"ENVELOPE_FROM"}, Operator:"CONTAINS", Values:array<string>}}>}, FromTimestamp?:int|string|\DateTimeInterface, MaxResults?:int, Status?:array{CompletionTimestamp?:int|string|\DateTimeInterface, ErrorMessage?:string, State?:"QUEUED"|"RUNNING"|"COMPLETED"|"FAILED"|"CANCELLED", SubmissionTimestamp?:int|string|\DateTimeInterface}, ToTimestamp?:int|string|\DateTimeInterface}>
     */
    public function getArchiveSearchAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SearchId:string} $args
     * @return \AWS\Result<array{Rows?:array<array{ArchivedMessageId?:string, Cc?:string, Date?:string, Envelope?:array{From?:string, Helo?:string, To?:array<string>}, From?:string, HasAttachments?:bool, InReplyTo?:string, IngressPointId?:string, MessageId?:string, ReceivedHeaders?:array<string>, ReceivedTimestamp?:int|string|\DateTimeInterface, SenderHostname?:string, SenderIpAddress?:string, Subject?:string, To?:string, XMailer?:string, XOriginalMailer?:string, XPriority?:string}>}>
     */
    public function getArchiveSearchResults(array $args): \AWS\Result { }

    /**
     * @param array{SearchId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Rows?:array<array{ArchivedMessageId?:string, Cc?:string, Date?:string, Envelope?:array{From?:string, Helo?:string, To?:array<string>}, From?:string, HasAttachments?:bool, InReplyTo?:string, IngressPointId?:string, MessageId?:string, ReceivedHeaders?:array<string>, ReceivedTimestamp?:int|string|\DateTimeInterface, SenderHostname?:string, SenderIpAddress?:string, Subject?:string, To?:string, XMailer?:string, XOriginalMailer?:string, XPriority?:string}>}>
     */
    public function getArchiveSearchResultsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IngressPointId:string} $args
     * @return \AWS\Result<array{ARecord?:string, CreatedTimestamp?:int|string|\DateTimeInterface, IngressPointArn?:string, IngressPointAuthConfiguration?:array{IngressPointPasswordConfiguration?:array{PreviousSmtpPasswordExpiryTimestamp?:int|string|\DateTimeInterface, PreviousSmtpPasswordVersion?:string, SmtpPasswordVersion?:string}, SecretArn?:string}, IngressPointId:string, IngressPointName:string, LastUpdatedTimestamp?:int|string|\DateTimeInterface, RuleSetId?:string, Status?:"PROVISIONING"|"DEPROVISIONING"|"UPDATING"|"ACTIVE"|"CLOSED"|"FAILED", TrafficPolicyId?:string, Type?:"OPEN"|"AUTH"}>
     */
    public function getIngressPoint(array $args): \AWS\Result { }

    /**
     * @param array{IngressPointId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ARecord?:string, CreatedTimestamp?:int|string|\DateTimeInterface, IngressPointArn?:string, IngressPointAuthConfiguration?:array{IngressPointPasswordConfiguration?:array{PreviousSmtpPasswordExpiryTimestamp?:int|string|\DateTimeInterface, PreviousSmtpPasswordVersion?:string, SmtpPasswordVersion?:string}, SecretArn?:string}, IngressPointId:string, IngressPointName:string, LastUpdatedTimestamp?:int|string|\DateTimeInterface, RuleSetId?:string, Status?:"PROVISIONING"|"DEPROVISIONING"|"UPDATING"|"ACTIVE"|"CLOSED"|"FAILED", TrafficPolicyId?:string, Type?:"OPEN"|"AUTH"}>
     */
    public function getIngressPointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RelayId:string} $args
     * @return \AWS\Result<array{Authentication?:array{NoAuthentication?:array{}, SecretArn?:string}, CreatedTimestamp?:int|string|\DateTimeInterface, LastModifiedTimestamp?:int|string|\DateTimeInterface, RelayArn?:string, RelayId:string, RelayName?:string, ServerName?:string, ServerPort?:int}>
     */
    public function getRelay(array $args): \AWS\Result { }

    /**
     * @param array{RelayId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Authentication?:array{NoAuthentication?:array{}, SecretArn?:string}, CreatedTimestamp?:int|string|\DateTimeInterface, LastModifiedTimestamp?:int|string|\DateTimeInterface, RelayArn?:string, RelayId:string, RelayName?:string, ServerName?:string, ServerPort?:int}>
     */
    public function getRelayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleSetId:string} $args
     * @return \AWS\Result<array{CreatedDate:int|string|\DateTimeInterface, LastModificationDate:int|string|\DateTimeInterface, RuleSetArn:string, RuleSetId:string, RuleSetName:string, Rules:array<array{Actions:array<array{AddHeader?:array{HeaderName:string, HeaderValue:string}, Archive?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", TargetArchive:string}, DeliverToMailbox?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", MailboxArn:string, RoleArn:string}, DeliverToQBusiness?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", ApplicationId:string, IndexId:string, RoleArn:string}, Drop?:array{}, Relay?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", MailFrom?:"REPLACE"|"PRESERVE", Relay:mixed}, ReplaceRecipient?:array{ReplaceWith?:array<string>}, Send?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", RoleArn:string}, WriteToS3?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", RoleArn:string, S3Bucket:string, S3Prefix?:string, S3SseKmsKeyId?:string}}>, Conditions?:array<array{BooleanExpression?:array{Evaluate:array{Attribute?:"READ_RECEIPT_REQUESTED"|"TLS"|"TLS_WRAPPED"}, Operator:"IS_TRUE"|"IS_FALSE"}, DmarcExpression?:array{Operator:"EQUALS"|"NOT_EQUALS", Values:array<"NONE"|"QUARANTINE"|"REJECT">}, IpExpression?:array{Evaluate:array{Attribute?:"SOURCE_IP"}, Operator:"CIDR_MATCHES"|"NOT_CIDR_MATCHES", Values:array<string>}, NumberExpression?:array{Evaluate:array{Attribute?:"MESSAGE_SIZE"}, Operator:"EQUALS"|"NOT_EQUALS"|"LESS_THAN"|"GREATER_THAN"|"LESS_THAN_OR_EQUAL"|"GREATER_THAN_OR_EQUAL", Value:float}, StringExpression?:array{Evaluate:array{Attribute?:"MAIL_FROM"|"HELO"|"RECIPIENT"|"SENDER"|"FROM"|"SUBJECT"|"TO"|"CC", MimeHeaderAttribute?:string}, Operator:"EQUALS"|"NOT_EQUALS"|"STARTS_WITH"|"ENDS_WITH"|"CONTAINS", Values:array<string>}, VerdictExpression?:array{Evaluate:array{Analysis?:array{Analyzer:string, ResultField:string}, Attribute?:"SPF"|"DKIM"}, Operator:"EQUALS"|"NOT_EQUALS", Values:array<"PASS"|"FAIL"|"GRAY"|"PROCESSING_FAILED">}}>, Name?:string, Unless?:array<array{BooleanExpression?:array{Evaluate:array{Attribute?:"READ_RECEIPT_REQUESTED"|"TLS"|"TLS_WRAPPED"}, Operator:"IS_TRUE"|"IS_FALSE"}, DmarcExpression?:array{Operator:"EQUALS"|"NOT_EQUALS", Values:array<"NONE"|"QUARANTINE"|"REJECT">}, IpExpression?:array{Evaluate:array{Attribute?:"SOURCE_IP"}, Operator:"CIDR_MATCHES"|"NOT_CIDR_MATCHES", Values:array<string>}, NumberExpression?:array{Evaluate:array{Attribute?:"MESSAGE_SIZE"}, Operator:"EQUALS"|"NOT_EQUALS"|"LESS_THAN"|"GREATER_THAN"|"LESS_THAN_OR_EQUAL"|"GREATER_THAN_OR_EQUAL", Value:float}, StringExpression?:array{Evaluate:array{Attribute?:"MAIL_FROM"|"HELO"|"RECIPIENT"|"SENDER"|"FROM"|"SUBJECT"|"TO"|"CC", MimeHeaderAttribute?:string}, Operator:"EQUALS"|"NOT_EQUALS"|"STARTS_WITH"|"ENDS_WITH"|"CONTAINS", Values:array<string>}, VerdictExpression?:array{Evaluate:array{Analysis?:array{Analyzer:string, ResultField:string}, Attribute?:"SPF"|"DKIM"}, Operator:"EQUALS"|"NOT_EQUALS", Values:array<"PASS"|"FAIL"|"GRAY"|"PROCESSING_FAILED">}}>}>}>
     */
    public function getRuleSet(array $args): \AWS\Result { }

    /**
     * @param array{RuleSetId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CreatedDate:int|string|\DateTimeInterface, LastModificationDate:int|string|\DateTimeInterface, RuleSetArn:string, RuleSetId:string, RuleSetName:string, Rules:array<array{Actions:array<array{AddHeader?:array{HeaderName:string, HeaderValue:string}, Archive?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", TargetArchive:string}, DeliverToMailbox?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", MailboxArn:string, RoleArn:string}, DeliverToQBusiness?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", ApplicationId:string, IndexId:string, RoleArn:string}, Drop?:array{}, Relay?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", MailFrom?:"REPLACE"|"PRESERVE", Relay:mixed}, ReplaceRecipient?:array{ReplaceWith?:array<string>}, Send?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", RoleArn:string}, WriteToS3?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", RoleArn:string, S3Bucket:string, S3Prefix?:string, S3SseKmsKeyId?:string}}>, Conditions?:array<array{BooleanExpression?:array{Evaluate:array{Attribute?:"READ_RECEIPT_REQUESTED"|"TLS"|"TLS_WRAPPED"}, Operator:"IS_TRUE"|"IS_FALSE"}, DmarcExpression?:array{Operator:"EQUALS"|"NOT_EQUALS", Values:array<"NONE"|"QUARANTINE"|"REJECT">}, IpExpression?:array{Evaluate:array{Attribute?:"SOURCE_IP"}, Operator:"CIDR_MATCHES"|"NOT_CIDR_MATCHES", Values:array<string>}, NumberExpression?:array{Evaluate:array{Attribute?:"MESSAGE_SIZE"}, Operator:"EQUALS"|"NOT_EQUALS"|"LESS_THAN"|"GREATER_THAN"|"LESS_THAN_OR_EQUAL"|"GREATER_THAN_OR_EQUAL", Value:float}, StringExpression?:array{Evaluate:array{Attribute?:"MAIL_FROM"|"HELO"|"RECIPIENT"|"SENDER"|"FROM"|"SUBJECT"|"TO"|"CC", MimeHeaderAttribute?:string}, Operator:"EQUALS"|"NOT_EQUALS"|"STARTS_WITH"|"ENDS_WITH"|"CONTAINS", Values:array<string>}, VerdictExpression?:array{Evaluate:array{Analysis?:array{Analyzer:string, ResultField:string}, Attribute?:"SPF"|"DKIM"}, Operator:"EQUALS"|"NOT_EQUALS", Values:array<"PASS"|"FAIL"|"GRAY"|"PROCESSING_FAILED">}}>, Name?:string, Unless?:array<array{BooleanExpression?:array{Evaluate:array{Attribute?:"READ_RECEIPT_REQUESTED"|"TLS"|"TLS_WRAPPED"}, Operator:"IS_TRUE"|"IS_FALSE"}, DmarcExpression?:array{Operator:"EQUALS"|"NOT_EQUALS", Values:array<"NONE"|"QUARANTINE"|"REJECT">}, IpExpression?:array{Evaluate:array{Attribute?:"SOURCE_IP"}, Operator:"CIDR_MATCHES"|"NOT_CIDR_MATCHES", Values:array<string>}, NumberExpression?:array{Evaluate:array{Attribute?:"MESSAGE_SIZE"}, Operator:"EQUALS"|"NOT_EQUALS"|"LESS_THAN"|"GREATER_THAN"|"LESS_THAN_OR_EQUAL"|"GREATER_THAN_OR_EQUAL", Value:float}, StringExpression?:array{Evaluate:array{Attribute?:"MAIL_FROM"|"HELO"|"RECIPIENT"|"SENDER"|"FROM"|"SUBJECT"|"TO"|"CC", MimeHeaderAttribute?:string}, Operator:"EQUALS"|"NOT_EQUALS"|"STARTS_WITH"|"ENDS_WITH"|"CONTAINS", Values:array<string>}, VerdictExpression?:array{Evaluate:array{Analysis?:array{Analyzer:string, ResultField:string}, Attribute?:"SPF"|"DKIM"}, Operator:"EQUALS"|"NOT_EQUALS", Values:array<"PASS"|"FAIL"|"GRAY"|"PROCESSING_FAILED">}}>}>}>
     */
    public function getRuleSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{TrafficPolicyId:string} $args
     * @return \AWS\Result<array{CreatedTimestamp?:int|string|\DateTimeInterface, DefaultAction?:"ALLOW"|"DENY", LastUpdatedTimestamp?:int|string|\DateTimeInterface, MaxMessageSizeBytes?:int, PolicyStatements?:array<array{Action:"ALLOW"|"DENY", Conditions:array<array{BooleanExpression?:array{Evaluate:array{Analysis?:array{Analyzer:string, ResultField:string}}, Operator:"IS_TRUE"|"IS_FALSE"}, IpExpression?:array{Evaluate:array{Attribute?:"SENDER_IP"}, Operator:"CIDR_MATCHES"|"NOT_CIDR_MATCHES", Values:array<string>}, StringExpression?:array{Evaluate:array{Attribute?:"RECIPIENT"}, Operator:"EQUALS"|"NOT_EQUALS"|"STARTS_WITH"|"ENDS_WITH"|"CONTAINS", Values:array<string>}, TlsExpression?:array{Evaluate:array{Attribute?:"TLS_PROTOCOL"}, Operator:"MINIMUM_TLS_VERSION"|"IS", Value:"TLS1_2"|"TLS1_3"}}>}>, TrafficPolicyArn?:string, TrafficPolicyId:string, TrafficPolicyName:string}>
     */
    public function getTrafficPolicy(array $args): \AWS\Result { }

    /**
     * @param array{TrafficPolicyId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CreatedTimestamp?:int|string|\DateTimeInterface, DefaultAction?:"ALLOW"|"DENY", LastUpdatedTimestamp?:int|string|\DateTimeInterface, MaxMessageSizeBytes?:int, PolicyStatements?:array<array{Action:"ALLOW"|"DENY", Conditions:array<array{BooleanExpression?:array{Evaluate:array{Analysis?:array{Analyzer:string, ResultField:string}}, Operator:"IS_TRUE"|"IS_FALSE"}, IpExpression?:array{Evaluate:array{Attribute?:"SENDER_IP"}, Operator:"CIDR_MATCHES"|"NOT_CIDR_MATCHES", Values:array<string>}, StringExpression?:array{Evaluate:array{Attribute?:"RECIPIENT"}, Operator:"EQUALS"|"NOT_EQUALS"|"STARTS_WITH"|"ENDS_WITH"|"CONTAINS", Values:array<string>}, TlsExpression?:array{Evaluate:array{Attribute?:"TLS_PROTOCOL"}, Operator:"MINIMUM_TLS_VERSION"|"IS", Value:"TLS1_2"|"TLS1_3"}}>}>, TrafficPolicyArn?:string, TrafficPolicyId:string, TrafficPolicyName:string}>
     */
    public function getTrafficPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, PageSize?:int} $args
     * @return \AWS\Result<array{AddonInstances?:array<array{AddonInstanceArn?:string, AddonInstanceId?:string, AddonName?:string, AddonSubscriptionId?:string, CreatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listAddonInstances(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{AddonInstances?:array<array{AddonInstanceArn?:string, AddonInstanceId?:string, AddonName?:string, AddonSubscriptionId?:string, CreatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listAddonInstancesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, PageSize?:int} $args
     * @return \AWS\Result<array{AddonSubscriptions?:array<array{AddonName?:string, AddonSubscriptionArn?:string, AddonSubscriptionId?:string, CreatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listAddonSubscriptions(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{AddonSubscriptions?:array<array{AddonName?:string, AddonSubscriptionArn?:string, AddonSubscriptionId?:string, CreatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listAddonSubscriptionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ArchiveId:string, NextToken?:string, PageSize?:int} $args
     * @return \AWS\Result<array{Exports?:array<array{ExportId?:string, Status?:array{CompletionTimestamp?:int|string|\DateTimeInterface, ErrorMessage?:string, State?:"QUEUED"|"PREPROCESSING"|"PROCESSING"|"COMPLETED"|"FAILED"|"CANCELLED", SubmissionTimestamp?:int|string|\DateTimeInterface}}>, NextToken?:string}>
     */
    public function listArchiveExports(array $args): \AWS\Result { }

    /**
     * @param array{ArchiveId:string, NextToken?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Exports?:array<array{ExportId?:string, Status?:array{CompletionTimestamp?:int|string|\DateTimeInterface, ErrorMessage?:string, State?:"QUEUED"|"PREPROCESSING"|"PROCESSING"|"COMPLETED"|"FAILED"|"CANCELLED", SubmissionTimestamp?:int|string|\DateTimeInterface}}>, NextToken?:string}>
     */
    public function listArchiveExportsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ArchiveId:string, NextToken?:string, PageSize?:int} $args
     * @return \AWS\Result<array{NextToken?:string, Searches?:array<array{SearchId?:string, Status?:array{CompletionTimestamp?:int|string|\DateTimeInterface, ErrorMessage?:string, State?:"QUEUED"|"RUNNING"|"COMPLETED"|"FAILED"|"CANCELLED", SubmissionTimestamp?:int|string|\DateTimeInterface}}>}>
     */
    public function listArchiveSearches(array $args): \AWS\Result { }

    /**
     * @param array{ArchiveId:string, NextToken?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Searches?:array<array{SearchId?:string, Status?:array{CompletionTimestamp?:int|string|\DateTimeInterface, ErrorMessage?:string, State?:"QUEUED"|"RUNNING"|"COMPLETED"|"FAILED"|"CANCELLED", SubmissionTimestamp?:int|string|\DateTimeInterface}}>}>
     */
    public function listArchiveSearchesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, PageSize?:int} $args
     * @return \AWS\Result<array{Archives:array<array{ArchiveId:string, ArchiveName?:string, ArchiveState?:"ACTIVE"|"PENDING_DELETION", LastUpdatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listArchives(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Archives:array<array{ArchiveId:string, ArchiveName?:string, ArchiveState?:"ACTIVE"|"PENDING_DELETION", LastUpdatedTimestamp?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listArchivesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, PageSize?:int} $args
     * @return \AWS\Result<array{IngressPoints?:array<array{ARecord?:string, IngressPointId:string, IngressPointName:string, Status:"PROVISIONING"|"DEPROVISIONING"|"UPDATING"|"ACTIVE"|"CLOSED"|"FAILED", Type:"OPEN"|"AUTH"}>, NextToken?:string}>
     */
    public function listIngressPoints(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{IngressPoints?:array<array{ARecord?:string, IngressPointId:string, IngressPointName:string, Status:"PROVISIONING"|"DEPROVISIONING"|"UPDATING"|"ACTIVE"|"CLOSED"|"FAILED", Type:"OPEN"|"AUTH"}>, NextToken?:string}>
     */
    public function listIngressPointsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, PageSize?:int} $args
     * @return \AWS\Result<array{NextToken?:string, Relays:array<array{LastModifiedTimestamp?:int|string|\DateTimeInterface, RelayId?:string, RelayName?:string}>}>
     */
    public function listRelays(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Relays:array<array{LastModifiedTimestamp?:int|string|\DateTimeInterface, RelayId?:string, RelayName?:string}>}>
     */
    public function listRelaysAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, PageSize?:int} $args
     * @return \AWS\Result<array{NextToken?:string, RuleSets:array<array{LastModificationDate?:int|string|\DateTimeInterface, RuleSetId?:string, RuleSetName?:string}>}>
     */
    public function listRuleSets(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, RuleSets:array<array{LastModificationDate?:int|string|\DateTimeInterface, RuleSetId?:string, RuleSetName?:string}>}>
     */
    public function listRuleSetsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{NextToken?:string, PageSize?:int} $args
     * @return \AWS\Result<array{NextToken?:string, TrafficPolicies?:array<array{DefaultAction:"ALLOW"|"DENY", TrafficPolicyId:string, TrafficPolicyName:string}>}>
     */
    public function listTrafficPolicies(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, PageSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, TrafficPolicies?:array<array{DefaultAction:"ALLOW"|"DENY", TrafficPolicyId:string, TrafficPolicyName:string}>}>
     */
    public function listTrafficPoliciesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ArchiveId:string, ExportDestinationConfiguration:array{S3?:array{S3Location?:string}}, Filters?:array{Include?:array<array{BooleanExpression?:array{Evaluate:array{Attribute?:"HAS_ATTACHMENTS"}, Operator:"IS_TRUE"|"IS_FALSE"}, StringExpression?:array{Evaluate:array{Attribute?:"TO"|"FROM"|"CC"|"SUBJECT"|"ENVELOPE_TO"|"ENVELOPE_FROM"}, Operator:"CONTAINS", Values:array<string>}}>, Unless?:array<array{BooleanExpression?:array{Evaluate:array{Attribute?:"HAS_ATTACHMENTS"}, Operator:"IS_TRUE"|"IS_FALSE"}, StringExpression?:array{Evaluate:array{Attribute?:"TO"|"FROM"|"CC"|"SUBJECT"|"ENVELOPE_TO"|"ENVELOPE_FROM"}, Operator:"CONTAINS", Values:array<string>}}>}, FromTimestamp:int|string|\DateTimeInterface, IncludeMetadata?:bool, MaxResults?:int, ToTimestamp:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{ExportId?:string}>
     */
    public function startArchiveExport(array $args): \AWS\Result { }

    /**
     * @param array{ArchiveId:string, ExportDestinationConfiguration:array{S3?:array{S3Location?:string}}, Filters?:array{Include?:array<array{BooleanExpression?:array{Evaluate:array{Attribute?:"HAS_ATTACHMENTS"}, Operator:"IS_TRUE"|"IS_FALSE"}, StringExpression?:array{Evaluate:array{Attribute?:"TO"|"FROM"|"CC"|"SUBJECT"|"ENVELOPE_TO"|"ENVELOPE_FROM"}, Operator:"CONTAINS", Values:array<string>}}>, Unless?:array<array{BooleanExpression?:array{Evaluate:array{Attribute?:"HAS_ATTACHMENTS"}, Operator:"IS_TRUE"|"IS_FALSE"}, StringExpression?:array{Evaluate:array{Attribute?:"TO"|"FROM"|"CC"|"SUBJECT"|"ENVELOPE_TO"|"ENVELOPE_FROM"}, Operator:"CONTAINS", Values:array<string>}}>}, FromTimestamp:int|string|\DateTimeInterface, IncludeMetadata?:bool, MaxResults?:int, ToTimestamp:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{ExportId?:string}>
     */
    public function startArchiveExportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ArchiveId:string, Filters?:array{Include?:array<array{BooleanExpression?:array{Evaluate:array{Attribute?:"HAS_ATTACHMENTS"}, Operator:"IS_TRUE"|"IS_FALSE"}, StringExpression?:array{Evaluate:array{Attribute?:"TO"|"FROM"|"CC"|"SUBJECT"|"ENVELOPE_TO"|"ENVELOPE_FROM"}, Operator:"CONTAINS", Values:array<string>}}>, Unless?:array<array{BooleanExpression?:array{Evaluate:array{Attribute?:"HAS_ATTACHMENTS"}, Operator:"IS_TRUE"|"IS_FALSE"}, StringExpression?:array{Evaluate:array{Attribute?:"TO"|"FROM"|"CC"|"SUBJECT"|"ENVELOPE_TO"|"ENVELOPE_FROM"}, Operator:"CONTAINS", Values:array<string>}}>}, FromTimestamp:int|string|\DateTimeInterface, MaxResults:int, ToTimestamp:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{SearchId?:string}>
     */
    public function startArchiveSearch(array $args): \AWS\Result { }

    /**
     * @param array{ArchiveId:string, Filters?:array{Include?:array<array{BooleanExpression?:array{Evaluate:array{Attribute?:"HAS_ATTACHMENTS"}, Operator:"IS_TRUE"|"IS_FALSE"}, StringExpression?:array{Evaluate:array{Attribute?:"TO"|"FROM"|"CC"|"SUBJECT"|"ENVELOPE_TO"|"ENVELOPE_FROM"}, Operator:"CONTAINS", Values:array<string>}}>, Unless?:array<array{BooleanExpression?:array{Evaluate:array{Attribute?:"HAS_ATTACHMENTS"}, Operator:"IS_TRUE"|"IS_FALSE"}, StringExpression?:array{Evaluate:array{Attribute?:"TO"|"FROM"|"CC"|"SUBJECT"|"ENVELOPE_TO"|"ENVELOPE_FROM"}, Operator:"CONTAINS", Values:array<string>}}>}, FromTimestamp:int|string|\DateTimeInterface, MaxResults:int, ToTimestamp:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{SearchId?:string}>
     */
    public function startArchiveSearchAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ExportId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopArchiveExport(array $args): \AWS\Result { }

    /**
     * @param array{ExportId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopArchiveExportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SearchId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopArchiveSearch(array $args): \AWS\Result { }

    /**
     * @param array{SearchId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopArchiveSearchAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{ArchiveId:string, ArchiveName?:string, Retention?:array{RetentionPeriod?:"THREE_MONTHS"|"SIX_MONTHS"|"NINE_MONTHS"|"ONE_YEAR"|"EIGHTEEN_MONTHS"|"TWO_YEARS"|"THIRTY_MONTHS"|"THREE_YEARS"|"FOUR_YEARS"|"FIVE_YEARS"|"SIX_YEARS"|"SEVEN_YEARS"|"EIGHT_YEARS"|"NINE_YEARS"|"TEN_YEARS"|"PERMANENT"}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateArchive(array $args): \AWS\Result { }

    /**
     * @param array{ArchiveId:string, ArchiveName?:string, Retention?:array{RetentionPeriod?:"THREE_MONTHS"|"SIX_MONTHS"|"NINE_MONTHS"|"ONE_YEAR"|"EIGHTEEN_MONTHS"|"TWO_YEARS"|"THIRTY_MONTHS"|"THREE_YEARS"|"FOUR_YEARS"|"FIVE_YEARS"|"SIX_YEARS"|"SEVEN_YEARS"|"EIGHT_YEARS"|"NINE_YEARS"|"TEN_YEARS"|"PERMANENT"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateArchiveAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IngressPointConfiguration?:array{SecretArn?:string, SmtpPassword?:string}, IngressPointId:string, IngressPointName?:string, RuleSetId?:string, StatusToUpdate?:"ACTIVE"|"CLOSED", TrafficPolicyId?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateIngressPoint(array $args): \AWS\Result { }

    /**
     * @param array{IngressPointConfiguration?:array{SecretArn?:string, SmtpPassword?:string}, IngressPointId:string, IngressPointName?:string, RuleSetId?:string, StatusToUpdate?:"ACTIVE"|"CLOSED", TrafficPolicyId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateIngressPointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Authentication?:array{NoAuthentication?:array{}, SecretArn?:string}, RelayId:string, RelayName?:string, ServerName?:string, ServerPort?:int} $args
     * @return \AWS\Result<array{}>
     */
    public function updateRelay(array $args): \AWS\Result { }

    /**
     * @param array{Authentication?:array{NoAuthentication?:array{}, SecretArn?:string}, RelayId:string, RelayName?:string, ServerName?:string, ServerPort?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateRelayAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{RuleSetId:string, RuleSetName?:string, Rules?:array<array{Actions:array<array{AddHeader?:array{HeaderName:string, HeaderValue:string}, Archive?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", TargetArchive:string}, DeliverToMailbox?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", MailboxArn:string, RoleArn:string}, DeliverToQBusiness?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", ApplicationId:string, IndexId:string, RoleArn:string}, Drop?:array{}, Relay?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", MailFrom?:"REPLACE"|"PRESERVE", Relay:mixed}, ReplaceRecipient?:array{ReplaceWith?:array<string>}, Send?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", RoleArn:string}, WriteToS3?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", RoleArn:string, S3Bucket:string, S3Prefix?:string, S3SseKmsKeyId?:string}}>, Conditions?:array<array{BooleanExpression?:array{Evaluate:array{Attribute?:"READ_RECEIPT_REQUESTED"|"TLS"|"TLS_WRAPPED"}, Operator:"IS_TRUE"|"IS_FALSE"}, DmarcExpression?:array{Operator:"EQUALS"|"NOT_EQUALS", Values:array<"NONE"|"QUARANTINE"|"REJECT">}, IpExpression?:array{Evaluate:array{Attribute?:"SOURCE_IP"}, Operator:"CIDR_MATCHES"|"NOT_CIDR_MATCHES", Values:array<string>}, NumberExpression?:array{Evaluate:array{Attribute?:"MESSAGE_SIZE"}, Operator:"EQUALS"|"NOT_EQUALS"|"LESS_THAN"|"GREATER_THAN"|"LESS_THAN_OR_EQUAL"|"GREATER_THAN_OR_EQUAL", Value:float}, StringExpression?:array{Evaluate:array{Attribute?:"MAIL_FROM"|"HELO"|"RECIPIENT"|"SENDER"|"FROM"|"SUBJECT"|"TO"|"CC", MimeHeaderAttribute?:string}, Operator:"EQUALS"|"NOT_EQUALS"|"STARTS_WITH"|"ENDS_WITH"|"CONTAINS", Values:array<string>}, VerdictExpression?:array{Evaluate:array{Analysis?:array{Analyzer:string, ResultField:string}, Attribute?:"SPF"|"DKIM"}, Operator:"EQUALS"|"NOT_EQUALS", Values:array<"PASS"|"FAIL"|"GRAY"|"PROCESSING_FAILED">}}>, Name?:string, Unless?:array<array{BooleanExpression?:array{Evaluate:array{Attribute?:"READ_RECEIPT_REQUESTED"|"TLS"|"TLS_WRAPPED"}, Operator:"IS_TRUE"|"IS_FALSE"}, DmarcExpression?:array{Operator:"EQUALS"|"NOT_EQUALS", Values:array<"NONE"|"QUARANTINE"|"REJECT">}, IpExpression?:array{Evaluate:array{Attribute?:"SOURCE_IP"}, Operator:"CIDR_MATCHES"|"NOT_CIDR_MATCHES", Values:array<string>}, NumberExpression?:array{Evaluate:array{Attribute?:"MESSAGE_SIZE"}, Operator:"EQUALS"|"NOT_EQUALS"|"LESS_THAN"|"GREATER_THAN"|"LESS_THAN_OR_EQUAL"|"GREATER_THAN_OR_EQUAL", Value:float}, StringExpression?:array{Evaluate:array{Attribute?:"MAIL_FROM"|"HELO"|"RECIPIENT"|"SENDER"|"FROM"|"SUBJECT"|"TO"|"CC", MimeHeaderAttribute?:string}, Operator:"EQUALS"|"NOT_EQUALS"|"STARTS_WITH"|"ENDS_WITH"|"CONTAINS", Values:array<string>}, VerdictExpression?:array{Evaluate:array{Analysis?:array{Analyzer:string, ResultField:string}, Attribute?:"SPF"|"DKIM"}, Operator:"EQUALS"|"NOT_EQUALS", Values:array<"PASS"|"FAIL"|"GRAY"|"PROCESSING_FAILED">}}>}>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateRuleSet(array $args): \AWS\Result { }

    /**
     * @param array{RuleSetId:string, RuleSetName?:string, Rules?:array<array{Actions:array<array{AddHeader?:array{HeaderName:string, HeaderValue:string}, Archive?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", TargetArchive:string}, DeliverToMailbox?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", MailboxArn:string, RoleArn:string}, DeliverToQBusiness?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", ApplicationId:string, IndexId:string, RoleArn:string}, Drop?:array{}, Relay?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", MailFrom?:"REPLACE"|"PRESERVE", Relay:mixed}, ReplaceRecipient?:array{ReplaceWith?:array<string>}, Send?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", RoleArn:string}, WriteToS3?:array{ActionFailurePolicy?:"CONTINUE"|"DROP", RoleArn:string, S3Bucket:string, S3Prefix?:string, S3SseKmsKeyId?:string}}>, Conditions?:array<array{BooleanExpression?:array{Evaluate:array{Attribute?:"READ_RECEIPT_REQUESTED"|"TLS"|"TLS_WRAPPED"}, Operator:"IS_TRUE"|"IS_FALSE"}, DmarcExpression?:array{Operator:"EQUALS"|"NOT_EQUALS", Values:array<"NONE"|"QUARANTINE"|"REJECT">}, IpExpression?:array{Evaluate:array{Attribute?:"SOURCE_IP"}, Operator:"CIDR_MATCHES"|"NOT_CIDR_MATCHES", Values:array<string>}, NumberExpression?:array{Evaluate:array{Attribute?:"MESSAGE_SIZE"}, Operator:"EQUALS"|"NOT_EQUALS"|"LESS_THAN"|"GREATER_THAN"|"LESS_THAN_OR_EQUAL"|"GREATER_THAN_OR_EQUAL", Value:float}, StringExpression?:array{Evaluate:array{Attribute?:"MAIL_FROM"|"HELO"|"RECIPIENT"|"SENDER"|"FROM"|"SUBJECT"|"TO"|"CC", MimeHeaderAttribute?:string}, Operator:"EQUALS"|"NOT_EQUALS"|"STARTS_WITH"|"ENDS_WITH"|"CONTAINS", Values:array<string>}, VerdictExpression?:array{Evaluate:array{Analysis?:array{Analyzer:string, ResultField:string}, Attribute?:"SPF"|"DKIM"}, Operator:"EQUALS"|"NOT_EQUALS", Values:array<"PASS"|"FAIL"|"GRAY"|"PROCESSING_FAILED">}}>, Name?:string, Unless?:array<array{BooleanExpression?:array{Evaluate:array{Attribute?:"READ_RECEIPT_REQUESTED"|"TLS"|"TLS_WRAPPED"}, Operator:"IS_TRUE"|"IS_FALSE"}, DmarcExpression?:array{Operator:"EQUALS"|"NOT_EQUALS", Values:array<"NONE"|"QUARANTINE"|"REJECT">}, IpExpression?:array{Evaluate:array{Attribute?:"SOURCE_IP"}, Operator:"CIDR_MATCHES"|"NOT_CIDR_MATCHES", Values:array<string>}, NumberExpression?:array{Evaluate:array{Attribute?:"MESSAGE_SIZE"}, Operator:"EQUALS"|"NOT_EQUALS"|"LESS_THAN"|"GREATER_THAN"|"LESS_THAN_OR_EQUAL"|"GREATER_THAN_OR_EQUAL", Value:float}, StringExpression?:array{Evaluate:array{Attribute?:"MAIL_FROM"|"HELO"|"RECIPIENT"|"SENDER"|"FROM"|"SUBJECT"|"TO"|"CC", MimeHeaderAttribute?:string}, Operator:"EQUALS"|"NOT_EQUALS"|"STARTS_WITH"|"ENDS_WITH"|"CONTAINS", Values:array<string>}, VerdictExpression?:array{Evaluate:array{Analysis?:array{Analyzer:string, ResultField:string}, Attribute?:"SPF"|"DKIM"}, Operator:"EQUALS"|"NOT_EQUALS", Values:array<"PASS"|"FAIL"|"GRAY"|"PROCESSING_FAILED">}}>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateRuleSetAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{DefaultAction?:"ALLOW"|"DENY", MaxMessageSizeBytes?:int, PolicyStatements?:array<array{Action:"ALLOW"|"DENY", Conditions:array<array{BooleanExpression?:array{Evaluate:array{Analysis?:array{Analyzer:string, ResultField:string}}, Operator:"IS_TRUE"|"IS_FALSE"}, IpExpression?:array{Evaluate:array{Attribute?:"SENDER_IP"}, Operator:"CIDR_MATCHES"|"NOT_CIDR_MATCHES", Values:array<string>}, StringExpression?:array{Evaluate:array{Attribute?:"RECIPIENT"}, Operator:"EQUALS"|"NOT_EQUALS"|"STARTS_WITH"|"ENDS_WITH"|"CONTAINS", Values:array<string>}, TlsExpression?:array{Evaluate:array{Attribute?:"TLS_PROTOCOL"}, Operator:"MINIMUM_TLS_VERSION"|"IS", Value:"TLS1_2"|"TLS1_3"}}>}>, TrafficPolicyId:string, TrafficPolicyName?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateTrafficPolicy(array $args): \AWS\Result { }

    /**
     * @param array{DefaultAction?:"ALLOW"|"DENY", MaxMessageSizeBytes?:int, PolicyStatements?:array<array{Action:"ALLOW"|"DENY", Conditions:array<array{BooleanExpression?:array{Evaluate:array{Analysis?:array{Analyzer:string, ResultField:string}}, Operator:"IS_TRUE"|"IS_FALSE"}, IpExpression?:array{Evaluate:array{Attribute?:"SENDER_IP"}, Operator:"CIDR_MATCHES"|"NOT_CIDR_MATCHES", Values:array<string>}, StringExpression?:array{Evaluate:array{Attribute?:"RECIPIENT"}, Operator:"EQUALS"|"NOT_EQUALS"|"STARTS_WITH"|"ENDS_WITH"|"CONTAINS", Values:array<string>}, TlsExpression?:array{Evaluate:array{Attribute?:"TLS_PROTOCOL"}, Operator:"MINIMUM_TLS_VERSION"|"IS", Value:"TLS1_2"|"TLS1_3"}}>}>, TrafficPolicyId:string, TrafficPolicyName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateTrafficPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
