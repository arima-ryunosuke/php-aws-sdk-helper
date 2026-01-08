<?php
namespace AWS\Glacier;

class GlacierClient
{
    /**
     * @param array{accountId:string, vaultName:string, uploadId:string} $args
     * @return \AWS\Result<void>
     */
    public function abortMultipartUpload(array $args): \AWS\Result { }

    /**
     * @param array{accountId:string, vaultName:string, uploadId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function abortMultipartUploadAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId:string, vaultName:string} $args
     * @return \AWS\Result<void>
     */
    public function abortVaultLock(array $args): \AWS\Result { }

    /**
     * @param array{accountId:string, vaultName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function abortVaultLockAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId:string, vaultName:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<void>
     */
    public function addTagsToVault(array $args): \AWS\Result { }

    /**
     * @param array{accountId:string, vaultName:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function addTagsToVaultAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId:string, vaultName:string, uploadId:string, archiveSize?:string, checksum?:string} $args
     * @return \AWS\Result<array{location?:string, checksum?:string, archiveId?:string}>
     */
    public function completeMultipartUpload(array $args): \AWS\Result { }

    /**
     * @param array{accountId:string, vaultName:string, uploadId:string, archiveSize?:string, checksum?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{location?:string, checksum?:string, archiveId?:string}>
     */
    public function completeMultipartUploadAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId:string, vaultName:string, lockId:string} $args
     * @return \AWS\Result<void>
     */
    public function completeVaultLock(array $args): \AWS\Result { }

    /**
     * @param array{accountId:string, vaultName:string, lockId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function completeVaultLockAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId:string, vaultName:string} $args
     * @return \AWS\Result<array{location?:string}>
     */
    public function createVault(array $args): \AWS\Result { }

    /**
     * @param array{accountId:string, vaultName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{location?:string}>
     */
    public function createVaultAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId:string, vaultName:string, archiveId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteArchive(array $args): \AWS\Result { }

    /**
     * @param array{accountId:string, vaultName:string, archiveId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteArchiveAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId:string, vaultName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteVault(array $args): \AWS\Result { }

    /**
     * @param array{accountId:string, vaultName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteVaultAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId:string, vaultName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteVaultAccessPolicy(array $args): \AWS\Result { }

    /**
     * @param array{accountId:string, vaultName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteVaultAccessPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId:string, vaultName:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteVaultNotifications(array $args): \AWS\Result { }

    /**
     * @param array{accountId:string, vaultName:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteVaultNotificationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId:string, vaultName:string, jobId:string} $args
     * @return \AWS\Result<array{JobId?:string, JobDescription?:string, Action?:"ArchiveRetrieval"|"InventoryRetrieval"|"Select", ArchiveId?:string, VaultARN?:string, CreationDate?:string, Completed?:bool, StatusCode?:"InProgress"|"Succeeded"|"Failed", StatusMessage?:string, ArchiveSizeInBytes?:int, InventorySizeInBytes?:int, SNSTopic?:string, CompletionDate?:string, SHA256TreeHash?:string, ArchiveSHA256TreeHash?:string, RetrievalByteRange?:string, Tier?:string, InventoryRetrievalParameters?:array{Format?:string, StartDate?:string, EndDate?:string, Limit?:string, Marker?:string}, JobOutputPath?:string, SelectParameters?:array{InputSerialization?:array{csv?:array{FileHeaderInfo?:"USE"|"IGNORE"|"NONE", Comments?:string, QuoteEscapeCharacter?:string, RecordDelimiter?:string, FieldDelimiter?:string, QuoteCharacter?:string}}, ExpressionType?:"SQL", Expression?:string, OutputSerialization?:array{csv?:array{QuoteFields?:"ALWAYS"|"ASNEEDED", QuoteEscapeCharacter?:string, RecordDelimiter?:string, FieldDelimiter?:string, QuoteCharacter?:string}}}, OutputLocation?:array{S3?:array{BucketName?:string, Prefix?:string, Encryption?:array{EncryptionType?:"aws:kms"|"AES256", KMSKeyId?:string, KMSContext?:string}, CannedACL?:"private"|"public-read"|"public-read-write"|"aws-exec-read"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control", AccessControlList?:array<array{Grantee?:array{Type:"AmazonCustomerByEmail"|"CanonicalUser"|"Group", DisplayName?:string, URI?:string, ID?:string, EmailAddress?:string}, Permission?:"FULL_CONTROL"|"WRITE"|"WRITE_ACP"|"READ"|"READ_ACP"}>, Tagging?:array<string, string>, UserMetadata?:array<string, string>, StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"}}}>
     */
    public function describeJob(array $args): \AWS\Result { }

    /**
     * @param array{accountId:string, vaultName:string, jobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string, JobDescription?:string, Action?:"ArchiveRetrieval"|"InventoryRetrieval"|"Select", ArchiveId?:string, VaultARN?:string, CreationDate?:string, Completed?:bool, StatusCode?:"InProgress"|"Succeeded"|"Failed", StatusMessage?:string, ArchiveSizeInBytes?:int, InventorySizeInBytes?:int, SNSTopic?:string, CompletionDate?:string, SHA256TreeHash?:string, ArchiveSHA256TreeHash?:string, RetrievalByteRange?:string, Tier?:string, InventoryRetrievalParameters?:array{Format?:string, StartDate?:string, EndDate?:string, Limit?:string, Marker?:string}, JobOutputPath?:string, SelectParameters?:array{InputSerialization?:array{csv?:array{FileHeaderInfo?:"USE"|"IGNORE"|"NONE", Comments?:string, QuoteEscapeCharacter?:string, RecordDelimiter?:string, FieldDelimiter?:string, QuoteCharacter?:string}}, ExpressionType?:"SQL", Expression?:string, OutputSerialization?:array{csv?:array{QuoteFields?:"ALWAYS"|"ASNEEDED", QuoteEscapeCharacter?:string, RecordDelimiter?:string, FieldDelimiter?:string, QuoteCharacter?:string}}}, OutputLocation?:array{S3?:array{BucketName?:string, Prefix?:string, Encryption?:array{EncryptionType?:"aws:kms"|"AES256", KMSKeyId?:string, KMSContext?:string}, CannedACL?:"private"|"public-read"|"public-read-write"|"aws-exec-read"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control", AccessControlList?:array<array{Grantee?:array{Type:"AmazonCustomerByEmail"|"CanonicalUser"|"Group", DisplayName?:string, URI?:string, ID?:string, EmailAddress?:string}, Permission?:"FULL_CONTROL"|"WRITE"|"WRITE_ACP"|"READ"|"READ_ACP"}>, Tagging?:array<string, string>, UserMetadata?:array<string, string>, StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"}}}>
     */
    public function describeJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId:string, vaultName:string} $args
     * @return \AWS\Result<array{VaultARN?:string, VaultName?:string, CreationDate?:string, LastInventoryDate?:string, NumberOfArchives?:int, SizeInBytes?:int}>
     */
    public function describeVault(array $args): \AWS\Result { }

    /**
     * @param array{accountId:string, vaultName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VaultARN?:string, VaultName?:string, CreationDate?:string, LastInventoryDate?:string, NumberOfArchives?:int, SizeInBytes?:int}>
     */
    public function describeVaultAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId:string} $args
     * @return \AWS\Result<array{Policy?:array{Rules?:array<array{Strategy?:string, BytesPerHour?:int}>}}>
     */
    public function getDataRetrievalPolicy(array $args): \AWS\Result { }

    /**
     * @param array{accountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:array{Rules?:array<array{Strategy?:string, BytesPerHour?:int}>}}>
     */
    public function getDataRetrievalPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId:string, vaultName:string, jobId:string, range?:string} $args
     * @return \AWS\Result<array{body?:string|resource|\Psr\Http\Message\StreamInterface, checksum?:string, status?:int, contentRange?:string, acceptRanges?:string, contentType?:string, archiveDescription?:string}>
     */
    public function getJobOutput(array $args): \AWS\Result { }

    /**
     * @param array{accountId:string, vaultName:string, jobId:string, range?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{body?:string|resource|\Psr\Http\Message\StreamInterface, checksum?:string, status?:int, contentRange?:string, acceptRanges?:string, contentType?:string, archiveDescription?:string}>
     */
    public function getJobOutputAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId:string, vaultName:string} $args
     * @return \AWS\Result<array{policy?:array{Policy?:string}}>
     */
    public function getVaultAccessPolicy(array $args): \AWS\Result { }

    /**
     * @param array{accountId:string, vaultName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{policy?:array{Policy?:string}}>
     */
    public function getVaultAccessPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId:string, vaultName:string} $args
     * @return \AWS\Result<array{Policy?:string, State?:string, ExpirationDate?:string, CreationDate?:string}>
     */
    public function getVaultLock(array $args): \AWS\Result { }

    /**
     * @param array{accountId:string, vaultName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:string, State?:string, ExpirationDate?:string, CreationDate?:string}>
     */
    public function getVaultLockAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId:string, vaultName:string} $args
     * @return \AWS\Result<array{vaultNotificationConfig?:array{SNSTopic?:string, Events?:array<string>}}>
     */
    public function getVaultNotifications(array $args): \AWS\Result { }

    /**
     * @param array{accountId:string, vaultName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{vaultNotificationConfig?:array{SNSTopic?:string, Events?:array<string>}}>
     */
    public function getVaultNotificationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId:string, vaultName:string, jobParameters?:array{Format?:string, Type?:string, ArchiveId?:string, Description?:string, SNSTopic?:string, RetrievalByteRange?:string, Tier?:string, InventoryRetrievalParameters?:array{StartDate?:string, EndDate?:string, Limit?:string, Marker?:string}, SelectParameters?:array{InputSerialization?:array{csv?:array{FileHeaderInfo?:"USE"|"IGNORE"|"NONE", Comments?:string, QuoteEscapeCharacter?:string, RecordDelimiter?:string, FieldDelimiter?:string, QuoteCharacter?:string}}, ExpressionType?:"SQL", Expression?:string, OutputSerialization?:array{csv?:array{QuoteFields?:"ALWAYS"|"ASNEEDED", QuoteEscapeCharacter?:string, RecordDelimiter?:string, FieldDelimiter?:string, QuoteCharacter?:string}}}, OutputLocation?:array{S3?:array{BucketName?:string, Prefix?:string, Encryption?:array{EncryptionType?:"aws:kms"|"AES256", KMSKeyId?:string, KMSContext?:string}, CannedACL?:"private"|"public-read"|"public-read-write"|"aws-exec-read"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control", AccessControlList?:array<array{Grantee?:array{Type:"AmazonCustomerByEmail"|"CanonicalUser"|"Group", DisplayName?:string, URI?:string, ID?:string, EmailAddress?:string}, Permission?:"FULL_CONTROL"|"WRITE"|"WRITE_ACP"|"READ"|"READ_ACP"}>, Tagging?:array<string, string>, UserMetadata?:array<string, string>, StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"}}}} $args
     * @return \AWS\Result<array{location?:string, jobId?:string, jobOutputPath?:string}>
     */
    public function initiateJob(array $args): \AWS\Result { }

    /**
     * @param array{accountId:string, vaultName:string, jobParameters?:array{Format?:string, Type?:string, ArchiveId?:string, Description?:string, SNSTopic?:string, RetrievalByteRange?:string, Tier?:string, InventoryRetrievalParameters?:array{StartDate?:string, EndDate?:string, Limit?:string, Marker?:string}, SelectParameters?:array{InputSerialization?:array{csv?:array{FileHeaderInfo?:"USE"|"IGNORE"|"NONE", Comments?:string, QuoteEscapeCharacter?:string, RecordDelimiter?:string, FieldDelimiter?:string, QuoteCharacter?:string}}, ExpressionType?:"SQL", Expression?:string, OutputSerialization?:array{csv?:array{QuoteFields?:"ALWAYS"|"ASNEEDED", QuoteEscapeCharacter?:string, RecordDelimiter?:string, FieldDelimiter?:string, QuoteCharacter?:string}}}, OutputLocation?:array{S3?:array{BucketName?:string, Prefix?:string, Encryption?:array{EncryptionType?:"aws:kms"|"AES256", KMSKeyId?:string, KMSContext?:string}, CannedACL?:"private"|"public-read"|"public-read-write"|"aws-exec-read"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control", AccessControlList?:array<array{Grantee?:array{Type:"AmazonCustomerByEmail"|"CanonicalUser"|"Group", DisplayName?:string, URI?:string, ID?:string, EmailAddress?:string}, Permission?:"FULL_CONTROL"|"WRITE"|"WRITE_ACP"|"READ"|"READ_ACP"}>, Tagging?:array<string, string>, UserMetadata?:array<string, string>, StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{location?:string, jobId?:string, jobOutputPath?:string}>
     */
    public function initiateJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId:string, vaultName:string, archiveDescription?:string, partSize?:string} $args
     * @return \AWS\Result<array{location?:string, uploadId?:string}>
     */
    public function initiateMultipartUpload(array $args): \AWS\Result { }

    /**
     * @param array{accountId:string, vaultName:string, archiveDescription?:string, partSize?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{location?:string, uploadId?:string}>
     */
    public function initiateMultipartUploadAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId:string, vaultName:string, policy?:array{Policy?:string}} $args
     * @return \AWS\Result<array{lockId?:string}>
     */
    public function initiateVaultLock(array $args): \AWS\Result { }

    /**
     * @param array{accountId:string, vaultName:string, policy?:array{Policy?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{lockId?:string}>
     */
    public function initiateVaultLockAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId:string, vaultName:string, limit?:string, marker?:string, statuscode?:string, completed?:string} $args
     * @return \AWS\Result<array{JobList?:array<array{JobId?:string, JobDescription?:string, Action?:"ArchiveRetrieval"|"InventoryRetrieval"|"Select", ArchiveId?:string, VaultARN?:string, CreationDate?:string, Completed?:bool, StatusCode?:"InProgress"|"Succeeded"|"Failed", StatusMessage?:string, ArchiveSizeInBytes?:int, InventorySizeInBytes?:int, SNSTopic?:string, CompletionDate?:string, SHA256TreeHash?:string, ArchiveSHA256TreeHash?:string, RetrievalByteRange?:string, Tier?:string, InventoryRetrievalParameters?:array{Format?:string, StartDate?:string, EndDate?:string, Limit?:string, Marker?:string}, JobOutputPath?:string, SelectParameters?:array{InputSerialization?:array{csv?:array{FileHeaderInfo?:"USE"|"IGNORE"|"NONE", Comments?:string, QuoteEscapeCharacter?:string, RecordDelimiter?:string, FieldDelimiter?:string, QuoteCharacter?:string}}, ExpressionType?:"SQL", Expression?:string, OutputSerialization?:array{csv?:array{QuoteFields?:"ALWAYS"|"ASNEEDED", QuoteEscapeCharacter?:string, RecordDelimiter?:string, FieldDelimiter?:string, QuoteCharacter?:string}}}, OutputLocation?:array{S3?:array{BucketName?:string, Prefix?:string, Encryption?:array{EncryptionType?:"aws:kms"|"AES256", KMSKeyId?:string, KMSContext?:string}, CannedACL?:"private"|"public-read"|"public-read-write"|"aws-exec-read"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control", AccessControlList?:array<array{Grantee?:array{Type:"AmazonCustomerByEmail"|"CanonicalUser"|"Group", DisplayName?:string, URI?:string, ID?:string, EmailAddress?:string}, Permission?:"FULL_CONTROL"|"WRITE"|"WRITE_ACP"|"READ"|"READ_ACP"}>, Tagging?:array<string, string>, UserMetadata?:array<string, string>, StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"}}}>, Marker?:string}>
     */
    public function listJobs(array $args): \AWS\Result { }

    /**
     * @param array{accountId:string, vaultName:string, limit?:string, marker?:string, statuscode?:string, completed?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobList?:array<array{JobId?:string, JobDescription?:string, Action?:"ArchiveRetrieval"|"InventoryRetrieval"|"Select", ArchiveId?:string, VaultARN?:string, CreationDate?:string, Completed?:bool, StatusCode?:"InProgress"|"Succeeded"|"Failed", StatusMessage?:string, ArchiveSizeInBytes?:int, InventorySizeInBytes?:int, SNSTopic?:string, CompletionDate?:string, SHA256TreeHash?:string, ArchiveSHA256TreeHash?:string, RetrievalByteRange?:string, Tier?:string, InventoryRetrievalParameters?:array{Format?:string, StartDate?:string, EndDate?:string, Limit?:string, Marker?:string}, JobOutputPath?:string, SelectParameters?:array{InputSerialization?:array{csv?:array{FileHeaderInfo?:"USE"|"IGNORE"|"NONE", Comments?:string, QuoteEscapeCharacter?:string, RecordDelimiter?:string, FieldDelimiter?:string, QuoteCharacter?:string}}, ExpressionType?:"SQL", Expression?:string, OutputSerialization?:array{csv?:array{QuoteFields?:"ALWAYS"|"ASNEEDED", QuoteEscapeCharacter?:string, RecordDelimiter?:string, FieldDelimiter?:string, QuoteCharacter?:string}}}, OutputLocation?:array{S3?:array{BucketName?:string, Prefix?:string, Encryption?:array{EncryptionType?:"aws:kms"|"AES256", KMSKeyId?:string, KMSContext?:string}, CannedACL?:"private"|"public-read"|"public-read-write"|"aws-exec-read"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control", AccessControlList?:array<array{Grantee?:array{Type:"AmazonCustomerByEmail"|"CanonicalUser"|"Group", DisplayName?:string, URI?:string, ID?:string, EmailAddress?:string}, Permission?:"FULL_CONTROL"|"WRITE"|"WRITE_ACP"|"READ"|"READ_ACP"}>, Tagging?:array<string, string>, UserMetadata?:array<string, string>, StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"}}}>, Marker?:string}>
     */
    public function listJobsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId:string, vaultName:string, marker?:string, limit?:string} $args
     * @return \AWS\Result<array{UploadsList?:array<array{MultipartUploadId?:string, VaultARN?:string, ArchiveDescription?:string, PartSizeInBytes?:int, CreationDate?:string}>, Marker?:string}>
     */
    public function listMultipartUploads(array $args): \AWS\Result { }

    /**
     * @param array{accountId:string, vaultName:string, marker?:string, limit?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{UploadsList?:array<array{MultipartUploadId?:string, VaultARN?:string, ArchiveDescription?:string, PartSizeInBytes?:int, CreationDate?:string}>, Marker?:string}>
     */
    public function listMultipartUploadsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId:string, vaultName:string, uploadId:string, marker?:string, limit?:string} $args
     * @return \AWS\Result<array{MultipartUploadId?:string, VaultARN?:string, ArchiveDescription?:string, PartSizeInBytes?:int, CreationDate?:string, Parts?:array<array{RangeInBytes?:string, SHA256TreeHash?:string}>, Marker?:string}>
     */
    public function listParts(array $args): \AWS\Result { }

    /**
     * @param array{accountId:string, vaultName:string, uploadId:string, marker?:string, limit?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{MultipartUploadId?:string, VaultARN?:string, ArchiveDescription?:string, PartSizeInBytes?:int, CreationDate?:string, Parts?:array<array{RangeInBytes?:string, SHA256TreeHash?:string}>, Marker?:string}>
     */
    public function listPartsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId:string} $args
     * @return \AWS\Result<array{ProvisionedCapacityList?:array<array{CapacityId?:string, StartDate?:string, ExpirationDate?:string}>}>
     */
    public function listProvisionedCapacity(array $args): \AWS\Result { }

    /**
     * @param array{accountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ProvisionedCapacityList?:array<array{CapacityId?:string, StartDate?:string, ExpirationDate?:string}>}>
     */
    public function listProvisionedCapacityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId:string, vaultName:string} $args
     * @return \AWS\Result<array{Tags?:array<string, string>}>
     */
    public function listTagsForVault(array $args): \AWS\Result { }

    /**
     * @param array{accountId:string, vaultName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<string, string>}>
     */
    public function listTagsForVaultAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId:string, marker?:string, limit?:string} $args
     * @return \AWS\Result<array{VaultList?:array<array{VaultARN?:string, VaultName?:string, CreationDate?:string, LastInventoryDate?:string, NumberOfArchives?:int, SizeInBytes?:int}>, Marker?:string}>
     */
    public function listVaults(array $args): \AWS\Result { }

    /**
     * @param array{accountId:string, marker?:string, limit?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{VaultList?:array<array{VaultARN?:string, VaultName?:string, CreationDate?:string, LastInventoryDate?:string, NumberOfArchives?:int, SizeInBytes?:int}>, Marker?:string}>
     */
    public function listVaultsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId:string} $args
     * @return \AWS\Result<array{capacityId?:string}>
     */
    public function purchaseProvisionedCapacity(array $args): \AWS\Result { }

    /**
     * @param array{accountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{capacityId?:string}>
     */
    public function purchaseProvisionedCapacityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId:string, vaultName:string, TagKeys?:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function removeTagsFromVault(array $args): \AWS\Result { }

    /**
     * @param array{accountId:string, vaultName:string, TagKeys?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function removeTagsFromVaultAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId:string, Policy?:array{Rules?:array<array{Strategy?:string, BytesPerHour?:int}>}} $args
     * @return \AWS\Result<void>
     */
    public function setDataRetrievalPolicy(array $args): \AWS\Result { }

    /**
     * @param array{accountId:string, Policy?:array{Rules?:array<array{Strategy?:string, BytesPerHour?:int}>}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function setDataRetrievalPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId:string, vaultName:string, policy?:array{Policy?:string}} $args
     * @return \AWS\Result<void>
     */
    public function setVaultAccessPolicy(array $args): \AWS\Result { }

    /**
     * @param array{accountId:string, vaultName:string, policy?:array{Policy?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function setVaultAccessPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId:string, vaultName:string, vaultNotificationConfig?:array{SNSTopic?:string, Events?:array<string>}} $args
     * @return \AWS\Result<void>
     */
    public function setVaultNotifications(array $args): \AWS\Result { }

    /**
     * @param array{accountId:string, vaultName:string, vaultNotificationConfig?:array{SNSTopic?:string, Events?:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function setVaultNotificationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{vaultName:string, accountId:string, archiveDescription?:string, checksum?:string, body?:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \AWS\Result<array{location?:string, checksum?:string, archiveId?:string}>
     */
    public function uploadArchive(array $args): \AWS\Result { }

    /**
     * @param array{vaultName:string, accountId:string, archiveDescription?:string, checksum?:string, body?:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{location?:string, checksum?:string, archiveId?:string}>
     */
    public function uploadArchiveAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId:string, vaultName:string, uploadId:string, checksum?:string, range?:string, body?:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \AWS\Result<array{checksum?:string}>
     */
    public function uploadMultipartPart(array $args): \AWS\Result { }

    /**
     * @param array{accountId:string, vaultName:string, uploadId:string, checksum?:string, range?:string, body?:string|resource|\Psr\Http\Message\StreamInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{checksum?:string}>
     */
    public function uploadMultipartPartAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
