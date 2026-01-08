<?php
namespace AWS\QLDB;

class QLDBClient
{
    /**
     * @param array{LedgerName:string, StreamId:string} $args
     * @return \AWS\Result<array{StreamId?:string}>
     */
    public function cancelJournalKinesisStream(array $args): \AWS\Result { }

    /**
     * @param array{LedgerName:string, StreamId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StreamId?:string}>
     */
    public function cancelJournalKinesisStreamAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Tags?:array<string, string>, PermissionsMode:"ALLOW_ALL"|"STANDARD", DeletionProtection?:bool, KmsKey?:string} $args
     * @return \AWS\Result<array{Name?:string, Arn?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"DELETED", CreationDateTime?:int|string|\DateTimeInterface, PermissionsMode?:"ALLOW_ALL"|"STANDARD", DeletionProtection?:bool, KmsKeyArn?:string}>
     */
    public function createLedger(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Tags?:array<string, string>, PermissionsMode:"ALLOW_ALL"|"STANDARD", DeletionProtection?:bool, KmsKey?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name?:string, Arn?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"DELETED", CreationDateTime?:int|string|\DateTimeInterface, PermissionsMode?:"ALLOW_ALL"|"STANDARD", DeletionProtection?:bool, KmsKeyArn?:string}>
     */
    public function createLedgerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteLedger(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteLedgerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LedgerName:string, StreamId:string} $args
     * @return \AWS\Result<array{Stream?:array{LedgerName:string, CreationTime?:int|string|\DateTimeInterface, InclusiveStartTime?:int|string|\DateTimeInterface, ExclusiveEndTime?:int|string|\DateTimeInterface, RoleArn:string, StreamId:string, Arn?:string, Status:"ACTIVE"|"COMPLETED"|"CANCELED"|"FAILED"|"IMPAIRED", KinesisConfiguration:array{StreamArn:string, AggregationEnabled?:bool}, ErrorCause?:"KINESIS_STREAM_NOT_FOUND"|"IAM_PERMISSION_REVOKED", StreamName:string}}>
     */
    public function describeJournalKinesisStream(array $args): \AWS\Result { }

    /**
     * @param array{LedgerName:string, StreamId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Stream?:array{LedgerName:string, CreationTime?:int|string|\DateTimeInterface, InclusiveStartTime?:int|string|\DateTimeInterface, ExclusiveEndTime?:int|string|\DateTimeInterface, RoleArn:string, StreamId:string, Arn?:string, Status:"ACTIVE"|"COMPLETED"|"CANCELED"|"FAILED"|"IMPAIRED", KinesisConfiguration:array{StreamArn:string, AggregationEnabled?:bool}, ErrorCause?:"KINESIS_STREAM_NOT_FOUND"|"IAM_PERMISSION_REVOKED", StreamName:string}}>
     */
    public function describeJournalKinesisStreamAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, ExportId:string} $args
     * @return \AWS\Result<array{ExportDescription:array{LedgerName:string, ExportId:string, ExportCreationTime:int|string|\DateTimeInterface, Status:"IN_PROGRESS"|"COMPLETED"|"CANCELLED", InclusiveStartTime:int|string|\DateTimeInterface, ExclusiveEndTime:int|string|\DateTimeInterface, S3ExportConfiguration:array{Bucket:string, Prefix:string, EncryptionConfiguration:array{ObjectEncryptionType:"SSE_KMS"|"SSE_S3"|"NO_ENCRYPTION", KmsKeyArn?:string}}, RoleArn:string, OutputFormat?:"ION_BINARY"|"ION_TEXT"|"JSON"}}>
     */
    public function describeJournalS3Export(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, ExportId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ExportDescription:array{LedgerName:string, ExportId:string, ExportCreationTime:int|string|\DateTimeInterface, Status:"IN_PROGRESS"|"COMPLETED"|"CANCELLED", InclusiveStartTime:int|string|\DateTimeInterface, ExclusiveEndTime:int|string|\DateTimeInterface, S3ExportConfiguration:array{Bucket:string, Prefix:string, EncryptionConfiguration:array{ObjectEncryptionType:"SSE_KMS"|"SSE_S3"|"NO_ENCRYPTION", KmsKeyArn?:string}}, RoleArn:string, OutputFormat?:"ION_BINARY"|"ION_TEXT"|"JSON"}}>
     */
    public function describeJournalS3ExportAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{Name?:string, Arn?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"DELETED", CreationDateTime?:int|string|\DateTimeInterface, PermissionsMode?:"ALLOW_ALL"|"STANDARD", DeletionProtection?:bool, EncryptionDescription?:array{KmsKeyArn:string, EncryptionStatus:"ENABLED"|"UPDATING"|"KMS_KEY_INACCESSIBLE", InaccessibleKmsKeyDateTime?:int|string|\DateTimeInterface}}>
     */
    public function describeLedger(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name?:string, Arn?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"DELETED", CreationDateTime?:int|string|\DateTimeInterface, PermissionsMode?:"ALLOW_ALL"|"STANDARD", DeletionProtection?:bool, EncryptionDescription?:array{KmsKeyArn:string, EncryptionStatus:"ENABLED"|"UPDATING"|"KMS_KEY_INACCESSIBLE", InaccessibleKmsKeyDateTime?:int|string|\DateTimeInterface}}>
     */
    public function describeLedgerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, InclusiveStartTime:int|string|\DateTimeInterface, ExclusiveEndTime:int|string|\DateTimeInterface, S3ExportConfiguration:array{Bucket:string, Prefix:string, EncryptionConfiguration:array{ObjectEncryptionType:"SSE_KMS"|"SSE_S3"|"NO_ENCRYPTION", KmsKeyArn?:string}}, RoleArn:string, OutputFormat?:"ION_BINARY"|"ION_TEXT"|"JSON"} $args
     * @return \AWS\Result<array{ExportId:string}>
     */
    public function exportJournalToS3(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, InclusiveStartTime:int|string|\DateTimeInterface, ExclusiveEndTime:int|string|\DateTimeInterface, S3ExportConfiguration:array{Bucket:string, Prefix:string, EncryptionConfiguration:array{ObjectEncryptionType:"SSE_KMS"|"SSE_S3"|"NO_ENCRYPTION", KmsKeyArn?:string}}, RoleArn:string, OutputFormat?:"ION_BINARY"|"ION_TEXT"|"JSON"} $args
     * @return \GuzzleHttp\Promise\Promise<array{ExportId:string}>
     */
    public function exportJournalToS3Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, BlockAddress:array{IonText?:string}, DigestTipAddress?:array{IonText?:string}} $args
     * @return \AWS\Result<array{Block:array{IonText?:string}, Proof?:array{IonText?:string}}>
     */
    public function getBlock(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, BlockAddress:array{IonText?:string}, DigestTipAddress?:array{IonText?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Block:array{IonText?:string}, Proof?:array{IonText?:string}}>
     */
    public function getBlockAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{Digest:string|resource|\Psr\Http\Message\StreamInterface, DigestTipAddress:array{IonText?:string}}>
     */
    public function getDigest(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Digest:string|resource|\Psr\Http\Message\StreamInterface, DigestTipAddress:array{IonText?:string}}>
     */
    public function getDigestAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, BlockAddress:array{IonText?:string}, DocumentId:string, DigestTipAddress?:array{IonText?:string}} $args
     * @return \AWS\Result<array{Proof?:array{IonText?:string}, Revision:array{IonText?:string}}>
     */
    public function getRevision(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, BlockAddress:array{IonText?:string}, DocumentId:string, DigestTipAddress?:array{IonText?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Proof?:array{IonText?:string}, Revision:array{IonText?:string}}>
     */
    public function getRevisionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LedgerName:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Streams?:array<array{LedgerName:string, CreationTime?:int|string|\DateTimeInterface, InclusiveStartTime?:int|string|\DateTimeInterface, ExclusiveEndTime?:int|string|\DateTimeInterface, RoleArn:string, StreamId:string, Arn?:string, Status:"ACTIVE"|"COMPLETED"|"CANCELED"|"FAILED"|"IMPAIRED", KinesisConfiguration:array{StreamArn:string, AggregationEnabled?:bool}, ErrorCause?:"KINESIS_STREAM_NOT_FOUND"|"IAM_PERMISSION_REVOKED", StreamName:string}>, NextToken?:string}>
     */
    public function listJournalKinesisStreamsForLedger(array $args): \AWS\Result { }

    /**
     * @param array{LedgerName:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Streams?:array<array{LedgerName:string, CreationTime?:int|string|\DateTimeInterface, InclusiveStartTime?:int|string|\DateTimeInterface, ExclusiveEndTime?:int|string|\DateTimeInterface, RoleArn:string, StreamId:string, Arn?:string, Status:"ACTIVE"|"COMPLETED"|"CANCELED"|"FAILED"|"IMPAIRED", KinesisConfiguration:array{StreamArn:string, AggregationEnabled?:bool}, ErrorCause?:"KINESIS_STREAM_NOT_FOUND"|"IAM_PERMISSION_REVOKED", StreamName:string}>, NextToken?:string}>
     */
    public function listJournalKinesisStreamsForLedgerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{JournalS3Exports?:array<array{LedgerName:string, ExportId:string, ExportCreationTime:int|string|\DateTimeInterface, Status:"IN_PROGRESS"|"COMPLETED"|"CANCELLED", InclusiveStartTime:int|string|\DateTimeInterface, ExclusiveEndTime:int|string|\DateTimeInterface, S3ExportConfiguration:array{Bucket:string, Prefix:string, EncryptionConfiguration:array{ObjectEncryptionType:"SSE_KMS"|"SSE_S3"|"NO_ENCRYPTION", KmsKeyArn?:string}}, RoleArn:string, OutputFormat?:"ION_BINARY"|"ION_TEXT"|"JSON"}>, NextToken?:string}>
     */
    public function listJournalS3Exports(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JournalS3Exports?:array<array{LedgerName:string, ExportId:string, ExportCreationTime:int|string|\DateTimeInterface, Status:"IN_PROGRESS"|"COMPLETED"|"CANCELLED", InclusiveStartTime:int|string|\DateTimeInterface, ExclusiveEndTime:int|string|\DateTimeInterface, S3ExportConfiguration:array{Bucket:string, Prefix:string, EncryptionConfiguration:array{ObjectEncryptionType:"SSE_KMS"|"SSE_S3"|"NO_ENCRYPTION", KmsKeyArn?:string}}, RoleArn:string, OutputFormat?:"ION_BINARY"|"ION_TEXT"|"JSON"}>, NextToken?:string}>
     */
    public function listJournalS3ExportsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{JournalS3Exports?:array<array{LedgerName:string, ExportId:string, ExportCreationTime:int|string|\DateTimeInterface, Status:"IN_PROGRESS"|"COMPLETED"|"CANCELLED", InclusiveStartTime:int|string|\DateTimeInterface, ExclusiveEndTime:int|string|\DateTimeInterface, S3ExportConfiguration:array{Bucket:string, Prefix:string, EncryptionConfiguration:array{ObjectEncryptionType:"SSE_KMS"|"SSE_S3"|"NO_ENCRYPTION", KmsKeyArn?:string}}, RoleArn:string, OutputFormat?:"ION_BINARY"|"ION_TEXT"|"JSON"}>, NextToken?:string}>
     */
    public function listJournalS3ExportsForLedger(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JournalS3Exports?:array<array{LedgerName:string, ExportId:string, ExportCreationTime:int|string|\DateTimeInterface, Status:"IN_PROGRESS"|"COMPLETED"|"CANCELLED", InclusiveStartTime:int|string|\DateTimeInterface, ExclusiveEndTime:int|string|\DateTimeInterface, S3ExportConfiguration:array{Bucket:string, Prefix:string, EncryptionConfiguration:array{ObjectEncryptionType:"SSE_KMS"|"SSE_S3"|"NO_ENCRYPTION", KmsKeyArn?:string}}, RoleArn:string, OutputFormat?:"ION_BINARY"|"ION_TEXT"|"JSON"}>, NextToken?:string}>
     */
    public function listJournalS3ExportsForLedgerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{Ledgers?:array<array{Name?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"DELETED", CreationDateTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listLedgers(array $args = []): \AWS\Result { }

    /**
     * @param array{MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Ledgers?:array<array{Name?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"DELETED", CreationDateTime?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function listLedgersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \AWS\Result<array{Tags?:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{LedgerName:string, RoleArn:string, Tags?:array<string, string>, InclusiveStartTime:int|string|\DateTimeInterface, ExclusiveEndTime?:int|string|\DateTimeInterface, KinesisConfiguration:array{StreamArn:string, AggregationEnabled?:bool}, StreamName:string} $args
     * @return \AWS\Result<array{StreamId?:string}>
     */
    public function streamJournalToKinesis(array $args): \AWS\Result { }

    /**
     * @param array{LedgerName:string, RoleArn:string, Tags?:array<string, string>, InclusiveStartTime:int|string|\DateTimeInterface, ExclusiveEndTime?:int|string|\DateTimeInterface, KinesisConfiguration:array{StreamArn:string, AggregationEnabled?:bool}, StreamName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StreamId?:string}>
     */
    public function streamJournalToKinesisAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ResourceArn:string, Tags:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{ResourceArn:string, Tags:array<string, string>} $args
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
     * @param array{Name:string, DeletionProtection?:bool, KmsKey?:string} $args
     * @return \AWS\Result<array{Name?:string, Arn?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"DELETED", CreationDateTime?:int|string|\DateTimeInterface, DeletionProtection?:bool, EncryptionDescription?:array{KmsKeyArn:string, EncryptionStatus:"ENABLED"|"UPDATING"|"KMS_KEY_INACCESSIBLE", InaccessibleKmsKeyDateTime?:int|string|\DateTimeInterface}}>
     */
    public function updateLedger(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, DeletionProtection?:bool, KmsKey?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name?:string, Arn?:string, State?:"CREATING"|"ACTIVE"|"DELETING"|"DELETED", CreationDateTime?:int|string|\DateTimeInterface, DeletionProtection?:bool, EncryptionDescription?:array{KmsKeyArn:string, EncryptionStatus:"ENABLED"|"UPDATING"|"KMS_KEY_INACCESSIBLE", InaccessibleKmsKeyDateTime?:int|string|\DateTimeInterface}}>
     */
    public function updateLedgerAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, PermissionsMode:"ALLOW_ALL"|"STANDARD"} $args
     * @return \AWS\Result<array{Name?:string, Arn?:string, PermissionsMode?:"ALLOW_ALL"|"STANDARD"}>
     */
    public function updateLedgerPermissionsMode(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, PermissionsMode:"ALLOW_ALL"|"STANDARD"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name?:string, Arn?:string, PermissionsMode?:"ALLOW_ALL"|"STANDARD"}>
     */
    public function updateLedgerPermissionsModeAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
