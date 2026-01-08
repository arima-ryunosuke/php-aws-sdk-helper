<?php
namespace AWS\S3Control;

class S3ControlClient
{
    /**
     * @param array{AccountId:string, IdentityCenterArn:string} $args
     * @return \AWS\Result<void>
     */
    public function associateAccessGrantsIdentityCenter(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, IdentityCenterArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function associateAccessGrantsIdentityCenterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, AccessGrantsLocationId:string, AccessGrantsLocationConfiguration?:array{S3SubPrefix?:string}, Grantee:array{GranteeType?:"DIRECTORY_USER"|"DIRECTORY_GROUP"|"IAM", GranteeIdentifier?:string}, Permission:"READ"|"WRITE"|"READWRITE", ApplicationArn?:string, S3PrefixType?:"Object", Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{CreatedAt?:int|string|\DateTimeInterface, AccessGrantId?:string, AccessGrantArn?:string, Grantee?:array{GranteeType?:"DIRECTORY_USER"|"DIRECTORY_GROUP"|"IAM", GranteeIdentifier?:string}, AccessGrantsLocationId?:string, AccessGrantsLocationConfiguration?:array{S3SubPrefix?:string}, Permission?:"READ"|"WRITE"|"READWRITE", ApplicationArn?:string, GrantScope?:string}>
     */
    public function createAccessGrant(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, AccessGrantsLocationId:string, AccessGrantsLocationConfiguration?:array{S3SubPrefix?:string}, Grantee:array{GranteeType?:"DIRECTORY_USER"|"DIRECTORY_GROUP"|"IAM", GranteeIdentifier?:string}, Permission:"READ"|"WRITE"|"READWRITE", ApplicationArn?:string, S3PrefixType?:"Object", Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{CreatedAt?:int|string|\DateTimeInterface, AccessGrantId?:string, AccessGrantArn?:string, Grantee?:array{GranteeType?:"DIRECTORY_USER"|"DIRECTORY_GROUP"|"IAM", GranteeIdentifier?:string}, AccessGrantsLocationId?:string, AccessGrantsLocationConfiguration?:array{S3SubPrefix?:string}, Permission?:"READ"|"WRITE"|"READWRITE", ApplicationArn?:string, GrantScope?:string}>
     */
    public function createAccessGrantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, IdentityCenterArn?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{CreatedAt?:int|string|\DateTimeInterface, AccessGrantsInstanceId?:string, AccessGrantsInstanceArn?:string, IdentityCenterArn?:string, IdentityCenterInstanceArn?:string, IdentityCenterApplicationArn?:string}>
     */
    public function createAccessGrantsInstance(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, IdentityCenterArn?:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{CreatedAt?:int|string|\DateTimeInterface, AccessGrantsInstanceId?:string, AccessGrantsInstanceArn?:string, IdentityCenterArn?:string, IdentityCenterInstanceArn?:string, IdentityCenterApplicationArn?:string}>
     */
    public function createAccessGrantsInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, LocationScope:string, IAMRoleArn:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{CreatedAt?:int|string|\DateTimeInterface, AccessGrantsLocationId?:string, AccessGrantsLocationArn?:string, LocationScope?:string, IAMRoleArn?:string}>
     */
    public function createAccessGrantsLocation(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, LocationScope:string, IAMRoleArn:string, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{CreatedAt?:int|string|\DateTimeInterface, AccessGrantsLocationId?:string, AccessGrantsLocationArn?:string, LocationScope?:string, IAMRoleArn?:string}>
     */
    public function createAccessGrantsLocationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Name:string, Bucket:string, VpcConfiguration?:array{VpcId:string}, PublicAccessBlockConfiguration?:array{BlockPublicAcls?:bool, IgnorePublicAcls?:bool, BlockPublicPolicy?:bool, RestrictPublicBuckets?:bool}, BucketAccountId?:string} $args
     * @return \AWS\Result<array{AccessPointArn?:string, Alias?:string}>
     */
    public function createAccessPoint(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Name:string, Bucket:string, VpcConfiguration?:array{VpcId:string}, PublicAccessBlockConfiguration?:array{BlockPublicAcls?:bool, IgnorePublicAcls?:bool, BlockPublicPolicy?:bool, RestrictPublicBuckets?:bool}, BucketAccountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccessPointArn?:string, Alias?:string}>
     */
    public function createAccessPointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Name:string, Configuration:array{SupportingAccessPoint:string, CloudWatchMetricsEnabled?:bool, AllowedFeatures?:array<"GetObject-Range"|"GetObject-PartNumber"|"HeadObject-Range"|"HeadObject-PartNumber">, TransformationConfigurations:array<array{Actions:array<"GetObject"|"HeadObject"|"ListObjects"|"ListObjectsV2">, ContentTransformation:array{AwsLambda?:array{FunctionArn:string, FunctionPayload?:string}}}>}} $args
     * @return \AWS\Result<array{ObjectLambdaAccessPointArn?:string, Alias?:array{Value?:string, Status?:"PROVISIONING"|"READY"}}>
     */
    public function createAccessPointForObjectLambda(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Name:string, Configuration:array{SupportingAccessPoint:string, CloudWatchMetricsEnabled?:bool, AllowedFeatures?:array<"GetObject-Range"|"GetObject-PartNumber"|"HeadObject-Range"|"HeadObject-PartNumber">, TransformationConfigurations:array<array{Actions:array<"GetObject"|"HeadObject"|"ListObjects"|"ListObjectsV2">, ContentTransformation:array{AwsLambda?:array{FunctionArn:string, FunctionPayload?:string}}}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{ObjectLambdaAccessPointArn?:string, Alias?:array{Value?:string, Status?:"PROVISIONING"|"READY"}}>
     */
    public function createAccessPointForObjectLambdaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ACL?:"private"|"public-read"|"public-read-write"|"authenticated-read", Bucket:string, CreateBucketConfiguration?:array{LocationConstraint?:"EU"|"eu-west-1"|"us-west-1"|"us-west-2"|"ap-south-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-northeast-1"|"sa-east-1"|"cn-north-1"|"eu-central-1"}, GrantFullControl?:string, GrantRead?:string, GrantReadACP?:string, GrantWrite?:string, GrantWriteACP?:string, ObjectLockEnabledForBucket?:bool, OutpostId?:string} $args
     * @return \AWS\Result<array{Location?:string, BucketArn?:string}>
     */
    public function createBucket(array $args): \AWS\Result { }

    /**
     * @param array{ACL?:"private"|"public-read"|"public-read-write"|"authenticated-read", Bucket:string, CreateBucketConfiguration?:array{LocationConstraint?:"EU"|"eu-west-1"|"us-west-1"|"us-west-2"|"ap-south-1"|"ap-southeast-1"|"ap-southeast-2"|"ap-northeast-1"|"sa-east-1"|"cn-north-1"|"eu-central-1"}, GrantFullControl?:string, GrantRead?:string, GrantReadACP?:string, GrantWrite?:string, GrantWriteACP?:string, ObjectLockEnabledForBucket?:bool, OutpostId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Location?:string, BucketArn?:string}>
     */
    public function createBucketAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, ConfirmationRequired?:bool, Operation:array{LambdaInvoke?:array{FunctionArn?:string, InvocationSchemaVersion?:string, UserArguments?:array<string, string>}, S3PutObjectCopy?:array{TargetResource?:string, CannedAccessControlList?:"private"|"public-read"|"public-read-write"|"aws-exec-read"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control", AccessControlGrants?:array<array{Grantee?:array{TypeIdentifier?:"id"|"emailAddress"|"uri", Identifier?:string, DisplayName?:string}, Permission?:"FULL_CONTROL"|"READ"|"WRITE"|"READ_ACP"|"WRITE_ACP"}>, MetadataDirective?:"COPY"|"REPLACE", ModifiedSinceConstraint?:int|string|\DateTimeInterface, NewObjectMetadata?:array{CacheControl?:string, ContentDisposition?:string, ContentEncoding?:string, ContentLanguage?:string, UserMetadata?:array<string, string>, ContentLength?:int, ContentMD5?:string, ContentType?:string, HttpExpiresDate?:int|string|\DateTimeInterface, RequesterCharged?:bool, SSEAlgorithm?:"AES256"|"KMS"}, NewObjectTagging?:array<array{Key:string, Value:string}>, RedirectLocation?:string, RequesterPays?:bool, StorageClass?:"STANDARD"|"STANDARD_IA"|"ONEZONE_IA"|"GLACIER"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"|"GLACIER_IR", UnModifiedSinceConstraint?:int|string|\DateTimeInterface, SSEAwsKmsKeyId?:string, TargetKeyPrefix?:string, ObjectLockLegalHoldStatus?:"OFF"|"ON", ObjectLockMode?:"COMPLIANCE"|"GOVERNANCE", ObjectLockRetainUntilDate?:int|string|\DateTimeInterface, BucketKeyEnabled?:bool, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME"}, S3PutObjectAcl?:array{AccessControlPolicy?:array{AccessControlList?:array{Owner:array{ID?:string, DisplayName?:string}, Grants?:array<array{Grantee?:array{TypeIdentifier?:"id"|"emailAddress"|"uri", Identifier?:string, DisplayName?:string}, Permission?:"FULL_CONTROL"|"READ"|"WRITE"|"READ_ACP"|"WRITE_ACP"}>}, CannedAccessControlList?:"private"|"public-read"|"public-read-write"|"aws-exec-read"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control"}}, S3PutObjectTagging?:array{TagSet?:array<array{Key:string, Value:string}>}, S3DeleteObjectTagging?:array{}, S3InitiateRestoreObject?:array{ExpirationInDays?:int, GlacierJobTier?:"BULK"|"STANDARD"}, S3PutObjectLegalHold?:array{LegalHold:array{Status:"OFF"|"ON"}}, S3PutObjectRetention?:array{BypassGovernanceRetention?:bool, Retention:array{RetainUntilDate?:int|string|\DateTimeInterface, Mode?:"COMPLIANCE"|"GOVERNANCE"}}, S3ReplicateObject?:array{}}, Report:array{Bucket?:string, Format?:"Report_CSV_20180820", Enabled:bool, Prefix?:string, ReportScope?:"AllTasks"|"FailedTasksOnly"}, ClientRequestToken:string, Manifest?:array{Spec:array{Format:"S3BatchOperations_CSV_20180820"|"S3InventoryReport_CSV_20161130", Fields?:array<"Ignore"|"Bucket"|"Key"|"VersionId">}, Location:array{ObjectArn:string, ObjectVersionId?:string, ETag:string}}, Description?:string, Priority:int, RoleArn:string, Tags?:array<array{Key:string, Value:string}>, ManifestGenerator?:array{S3JobManifestGenerator?:array{ExpectedBucketOwner?:string, SourceBucket:string, ManifestOutputLocation?:array{ExpectedManifestBucketOwner?:string, Bucket:string, ManifestPrefix?:string, ManifestEncryption?:array{SSES3?:array{}, SSEKMS?:array{KeyId:string}}, ManifestFormat:"S3InventoryReport_CSV_20211130"}, Filter?:array{EligibleForReplication?:bool, CreatedAfter?:int|string|\DateTimeInterface, CreatedBefore?:int|string|\DateTimeInterface, ObjectReplicationStatuses?:array<"COMPLETED"|"FAILED"|"REPLICA"|"NONE">, KeyNameConstraint?:array{MatchAnyPrefix?:array<string>, MatchAnySuffix?:array<string>, MatchAnySubstring?:array<string>}, ObjectSizeGreaterThanBytes?:int, ObjectSizeLessThanBytes?:int, MatchAnyStorageClass?:array<"STANDARD"|"STANDARD_IA"|"ONEZONE_IA"|"GLACIER"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"|"GLACIER_IR">}, EnableManifestOutput:bool}}} $args
     * @return \AWS\Result<array{JobId?:string}>
     */
    public function createJob(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, ConfirmationRequired?:bool, Operation:array{LambdaInvoke?:array{FunctionArn?:string, InvocationSchemaVersion?:string, UserArguments?:array<string, string>}, S3PutObjectCopy?:array{TargetResource?:string, CannedAccessControlList?:"private"|"public-read"|"public-read-write"|"aws-exec-read"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control", AccessControlGrants?:array<array{Grantee?:array{TypeIdentifier?:"id"|"emailAddress"|"uri", Identifier?:string, DisplayName?:string}, Permission?:"FULL_CONTROL"|"READ"|"WRITE"|"READ_ACP"|"WRITE_ACP"}>, MetadataDirective?:"COPY"|"REPLACE", ModifiedSinceConstraint?:int|string|\DateTimeInterface, NewObjectMetadata?:array{CacheControl?:string, ContentDisposition?:string, ContentEncoding?:string, ContentLanguage?:string, UserMetadata?:array<string, string>, ContentLength?:int, ContentMD5?:string, ContentType?:string, HttpExpiresDate?:int|string|\DateTimeInterface, RequesterCharged?:bool, SSEAlgorithm?:"AES256"|"KMS"}, NewObjectTagging?:array<array{Key:string, Value:string}>, RedirectLocation?:string, RequesterPays?:bool, StorageClass?:"STANDARD"|"STANDARD_IA"|"ONEZONE_IA"|"GLACIER"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"|"GLACIER_IR", UnModifiedSinceConstraint?:int|string|\DateTimeInterface, SSEAwsKmsKeyId?:string, TargetKeyPrefix?:string, ObjectLockLegalHoldStatus?:"OFF"|"ON", ObjectLockMode?:"COMPLIANCE"|"GOVERNANCE", ObjectLockRetainUntilDate?:int|string|\DateTimeInterface, BucketKeyEnabled?:bool, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME"}, S3PutObjectAcl?:array{AccessControlPolicy?:array{AccessControlList?:array{Owner:array{ID?:string, DisplayName?:string}, Grants?:array<array{Grantee?:array{TypeIdentifier?:"id"|"emailAddress"|"uri", Identifier?:string, DisplayName?:string}, Permission?:"FULL_CONTROL"|"READ"|"WRITE"|"READ_ACP"|"WRITE_ACP"}>}, CannedAccessControlList?:"private"|"public-read"|"public-read-write"|"aws-exec-read"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control"}}, S3PutObjectTagging?:array{TagSet?:array<array{Key:string, Value:string}>}, S3DeleteObjectTagging?:array{}, S3InitiateRestoreObject?:array{ExpirationInDays?:int, GlacierJobTier?:"BULK"|"STANDARD"}, S3PutObjectLegalHold?:array{LegalHold:array{Status:"OFF"|"ON"}}, S3PutObjectRetention?:array{BypassGovernanceRetention?:bool, Retention:array{RetainUntilDate?:int|string|\DateTimeInterface, Mode?:"COMPLIANCE"|"GOVERNANCE"}}, S3ReplicateObject?:array{}}, Report:array{Bucket?:string, Format?:"Report_CSV_20180820", Enabled:bool, Prefix?:string, ReportScope?:"AllTasks"|"FailedTasksOnly"}, ClientRequestToken:string, Manifest?:array{Spec:array{Format:"S3BatchOperations_CSV_20180820"|"S3InventoryReport_CSV_20161130", Fields?:array<"Ignore"|"Bucket"|"Key"|"VersionId">}, Location:array{ObjectArn:string, ObjectVersionId?:string, ETag:string}}, Description?:string, Priority:int, RoleArn:string, Tags?:array<array{Key:string, Value:string}>, ManifestGenerator?:array{S3JobManifestGenerator?:array{ExpectedBucketOwner?:string, SourceBucket:string, ManifestOutputLocation?:array{ExpectedManifestBucketOwner?:string, Bucket:string, ManifestPrefix?:string, ManifestEncryption?:array{SSES3?:array{}, SSEKMS?:array{KeyId:string}}, ManifestFormat:"S3InventoryReport_CSV_20211130"}, Filter?:array{EligibleForReplication?:bool, CreatedAfter?:int|string|\DateTimeInterface, CreatedBefore?:int|string|\DateTimeInterface, ObjectReplicationStatuses?:array<"COMPLETED"|"FAILED"|"REPLICA"|"NONE">, KeyNameConstraint?:array{MatchAnyPrefix?:array<string>, MatchAnySuffix?:array<string>, MatchAnySubstring?:array<string>}, ObjectSizeGreaterThanBytes?:int, ObjectSizeLessThanBytes?:int, MatchAnyStorageClass?:array<"STANDARD"|"STANDARD_IA"|"ONEZONE_IA"|"GLACIER"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"|"GLACIER_IR">}, EnableManifestOutput:bool}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string}>
     */
    public function createJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, ClientToken:string, Details:array{Name:string, PublicAccessBlock?:array{BlockPublicAcls?:bool, IgnorePublicAcls?:bool, BlockPublicPolicy?:bool, RestrictPublicBuckets?:bool}, Regions:array<array{Bucket:string, BucketAccountId?:string}>}} $args
     * @return \AWS\Result<array{RequestTokenARN?:string}>
     */
    public function createMultiRegionAccessPoint(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, ClientToken:string, Details:array{Name:string, PublicAccessBlock?:array{BlockPublicAcls?:bool, IgnorePublicAcls?:bool, BlockPublicPolicy?:bool, RestrictPublicBuckets?:bool}, Regions:array<array{Bucket:string, BucketAccountId?:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{RequestTokenARN?:string}>
     */
    public function createMultiRegionAccessPointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, StorageLensGroup:array{Name:string, Filter:array{MatchAnyPrefix?:array<string>, MatchAnySuffix?:array<string>, MatchAnyTag?:array<array{Key:string, Value:string}>, MatchObjectAge?:array{DaysGreaterThan?:int, DaysLessThan?:int}, MatchObjectSize?:array{BytesGreaterThan?:int, BytesLessThan?:int}, And?:array{MatchAnyPrefix?:array<string>, MatchAnySuffix?:array<string>, MatchAnyTag?:array<array{Key:string, Value:string}>, MatchObjectAge?:array{DaysGreaterThan?:int, DaysLessThan?:int}, MatchObjectSize?:array{BytesGreaterThan?:int, BytesLessThan?:int}}, Or?:array{MatchAnyPrefix?:array<string>, MatchAnySuffix?:array<string>, MatchAnyTag?:array<array{Key:string, Value:string}>, MatchObjectAge?:array{DaysGreaterThan?:int, DaysLessThan?:int}, MatchObjectSize?:array{BytesGreaterThan?:int, BytesLessThan?:int}}}, StorageLensGroupArn?:string}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<void>
     */
    public function createStorageLensGroup(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, StorageLensGroup:array{Name:string, Filter:array{MatchAnyPrefix?:array<string>, MatchAnySuffix?:array<string>, MatchAnyTag?:array<array{Key:string, Value:string}>, MatchObjectAge?:array{DaysGreaterThan?:int, DaysLessThan?:int}, MatchObjectSize?:array{BytesGreaterThan?:int, BytesLessThan?:int}, And?:array{MatchAnyPrefix?:array<string>, MatchAnySuffix?:array<string>, MatchAnyTag?:array<array{Key:string, Value:string}>, MatchObjectAge?:array{DaysGreaterThan?:int, DaysLessThan?:int}, MatchObjectSize?:array{BytesGreaterThan?:int, BytesLessThan?:int}}, Or?:array{MatchAnyPrefix?:array<string>, MatchAnySuffix?:array<string>, MatchAnyTag?:array<array{Key:string, Value:string}>, MatchObjectAge?:array{DaysGreaterThan?:int, DaysLessThan?:int}, MatchObjectSize?:array{BytesGreaterThan?:int, BytesLessThan?:int}}}, StorageLensGroupArn?:string}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function createStorageLensGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, AccessGrantId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAccessGrant(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, AccessGrantId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAccessGrantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAccessGrantsInstance(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAccessGrantsInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAccessGrantsInstanceResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAccessGrantsInstanceResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, AccessGrantsLocationId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAccessGrantsLocation(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, AccessGrantsLocationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAccessGrantsLocationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Name:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAccessPoint(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAccessPointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Name:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAccessPointForObjectLambda(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAccessPointForObjectLambdaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Name:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAccessPointPolicy(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAccessPointPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Name:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteAccessPointPolicyForObjectLambda(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteAccessPointPolicyForObjectLambdaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Bucket:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteBucket(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Bucket:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteBucketAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Bucket:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteBucketLifecycleConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Bucket:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteBucketLifecycleConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Bucket:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteBucketPolicy(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Bucket:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteBucketPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Bucket:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteBucketReplication(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Bucket:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteBucketReplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Bucket:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteBucketTagging(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Bucket:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteBucketTaggingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, JobId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteJobTagging(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteJobTaggingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, ClientToken:string, Details:array{Name:string}} $args
     * @return \AWS\Result<array{RequestTokenARN?:string}>
     */
    public function deleteMultiRegionAccessPoint(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, ClientToken:string, Details:array{Name:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{RequestTokenARN?:string}>
     */
    public function deleteMultiRegionAccessPointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string} $args
     * @return \AWS\Result<void>
     */
    public function deletePublicAccessBlock(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deletePublicAccessBlockAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigId:string, AccountId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteStorageLensConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ConfigId:string, AccountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteStorageLensConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigId:string, AccountId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteStorageLensConfigurationTagging(array $args): \AWS\Result { }

    /**
     * @param array{ConfigId:string, AccountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteStorageLensConfigurationTaggingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, AccountId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteStorageLensGroup(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, AccountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteStorageLensGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, JobId:string} $args
     * @return \AWS\Result<array{Job?:array{JobId?:string, ConfirmationRequired?:bool, Description?:string, JobArn?:string, Status?:"Active"|"Cancelled"|"Cancelling"|"Complete"|"Completing"|"Failed"|"Failing"|"New"|"Paused"|"Pausing"|"Preparing"|"Ready"|"Suspended", Manifest?:array{Spec:array{Format:"S3BatchOperations_CSV_20180820"|"S3InventoryReport_CSV_20161130", Fields?:array<"Ignore"|"Bucket"|"Key"|"VersionId">}, Location:array{ObjectArn:string, ObjectVersionId?:string, ETag:string}}, Operation?:array{LambdaInvoke?:array{FunctionArn?:string, InvocationSchemaVersion?:string, UserArguments?:array<string, string>}, S3PutObjectCopy?:array{TargetResource?:string, CannedAccessControlList?:"private"|"public-read"|"public-read-write"|"aws-exec-read"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control", AccessControlGrants?:array<array{Grantee?:array{TypeIdentifier?:"id"|"emailAddress"|"uri", Identifier?:string, DisplayName?:string}, Permission?:"FULL_CONTROL"|"READ"|"WRITE"|"READ_ACP"|"WRITE_ACP"}>, MetadataDirective?:"COPY"|"REPLACE", ModifiedSinceConstraint?:int|string|\DateTimeInterface, NewObjectMetadata?:array{CacheControl?:string, ContentDisposition?:string, ContentEncoding?:string, ContentLanguage?:string, UserMetadata?:array<string, string>, ContentLength?:int, ContentMD5?:string, ContentType?:string, HttpExpiresDate?:int|string|\DateTimeInterface, RequesterCharged?:bool, SSEAlgorithm?:"AES256"|"KMS"}, NewObjectTagging?:array<array{Key:string, Value:string}>, RedirectLocation?:string, RequesterPays?:bool, StorageClass?:"STANDARD"|"STANDARD_IA"|"ONEZONE_IA"|"GLACIER"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"|"GLACIER_IR", UnModifiedSinceConstraint?:int|string|\DateTimeInterface, SSEAwsKmsKeyId?:string, TargetKeyPrefix?:string, ObjectLockLegalHoldStatus?:"OFF"|"ON", ObjectLockMode?:"COMPLIANCE"|"GOVERNANCE", ObjectLockRetainUntilDate?:int|string|\DateTimeInterface, BucketKeyEnabled?:bool, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME"}, S3PutObjectAcl?:array{AccessControlPolicy?:array{AccessControlList?:array{Owner:array{ID?:string, DisplayName?:string}, Grants?:array<array{Grantee?:array{TypeIdentifier?:"id"|"emailAddress"|"uri", Identifier?:string, DisplayName?:string}, Permission?:"FULL_CONTROL"|"READ"|"WRITE"|"READ_ACP"|"WRITE_ACP"}>}, CannedAccessControlList?:"private"|"public-read"|"public-read-write"|"aws-exec-read"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control"}}, S3PutObjectTagging?:array{TagSet?:array<array{Key:string, Value:string}>}, S3DeleteObjectTagging?:array{}, S3InitiateRestoreObject?:array{ExpirationInDays?:int, GlacierJobTier?:"BULK"|"STANDARD"}, S3PutObjectLegalHold?:array{LegalHold:array{Status:"OFF"|"ON"}}, S3PutObjectRetention?:array{BypassGovernanceRetention?:bool, Retention:array{RetainUntilDate?:int|string|\DateTimeInterface, Mode?:"COMPLIANCE"|"GOVERNANCE"}}, S3ReplicateObject?:array{}}, Priority?:int, ProgressSummary?:array{TotalNumberOfTasks?:int, NumberOfTasksSucceeded?:int, NumberOfTasksFailed?:int, Timers?:array{ElapsedTimeInActiveSeconds?:int}}, StatusUpdateReason?:string, FailureReasons?:array<array{FailureCode?:string, FailureReason?:string}>, Report?:array{Bucket?:string, Format?:"Report_CSV_20180820", Enabled:bool, Prefix?:string, ReportScope?:"AllTasks"|"FailedTasksOnly"}, CreationTime?:int|string|\DateTimeInterface, TerminationDate?:int|string|\DateTimeInterface, RoleArn?:string, SuspendedDate?:int|string|\DateTimeInterface, SuspendedCause?:string, ManifestGenerator?:array{S3JobManifestGenerator?:array{ExpectedBucketOwner?:string, SourceBucket:string, ManifestOutputLocation?:array{ExpectedManifestBucketOwner?:string, Bucket:string, ManifestPrefix?:string, ManifestEncryption?:array{SSES3?:array{}, SSEKMS?:array{KeyId:string}}, ManifestFormat:"S3InventoryReport_CSV_20211130"}, Filter?:array{EligibleForReplication?:bool, CreatedAfter?:int|string|\DateTimeInterface, CreatedBefore?:int|string|\DateTimeInterface, ObjectReplicationStatuses?:array<"COMPLETED"|"FAILED"|"REPLICA"|"NONE">, KeyNameConstraint?:array{MatchAnyPrefix?:array<string>, MatchAnySuffix?:array<string>, MatchAnySubstring?:array<string>}, ObjectSizeGreaterThanBytes?:int, ObjectSizeLessThanBytes?:int, MatchAnyStorageClass?:array<"STANDARD"|"STANDARD_IA"|"ONEZONE_IA"|"GLACIER"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"|"GLACIER_IR">}, EnableManifestOutput:bool}}, GeneratedManifestDescriptor?:array{Format?:"S3InventoryReport_CSV_20211130", Location?:array{ObjectArn:string, ObjectVersionId?:string, ETag:string}}}}>
     */
    public function describeJob(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Job?:array{JobId?:string, ConfirmationRequired?:bool, Description?:string, JobArn?:string, Status?:"Active"|"Cancelled"|"Cancelling"|"Complete"|"Completing"|"Failed"|"Failing"|"New"|"Paused"|"Pausing"|"Preparing"|"Ready"|"Suspended", Manifest?:array{Spec:array{Format:"S3BatchOperations_CSV_20180820"|"S3InventoryReport_CSV_20161130", Fields?:array<"Ignore"|"Bucket"|"Key"|"VersionId">}, Location:array{ObjectArn:string, ObjectVersionId?:string, ETag:string}}, Operation?:array{LambdaInvoke?:array{FunctionArn?:string, InvocationSchemaVersion?:string, UserArguments?:array<string, string>}, S3PutObjectCopy?:array{TargetResource?:string, CannedAccessControlList?:"private"|"public-read"|"public-read-write"|"aws-exec-read"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control", AccessControlGrants?:array<array{Grantee?:array{TypeIdentifier?:"id"|"emailAddress"|"uri", Identifier?:string, DisplayName?:string}, Permission?:"FULL_CONTROL"|"READ"|"WRITE"|"READ_ACP"|"WRITE_ACP"}>, MetadataDirective?:"COPY"|"REPLACE", ModifiedSinceConstraint?:int|string|\DateTimeInterface, NewObjectMetadata?:array{CacheControl?:string, ContentDisposition?:string, ContentEncoding?:string, ContentLanguage?:string, UserMetadata?:array<string, string>, ContentLength?:int, ContentMD5?:string, ContentType?:string, HttpExpiresDate?:int|string|\DateTimeInterface, RequesterCharged?:bool, SSEAlgorithm?:"AES256"|"KMS"}, NewObjectTagging?:array<array{Key:string, Value:string}>, RedirectLocation?:string, RequesterPays?:bool, StorageClass?:"STANDARD"|"STANDARD_IA"|"ONEZONE_IA"|"GLACIER"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"|"GLACIER_IR", UnModifiedSinceConstraint?:int|string|\DateTimeInterface, SSEAwsKmsKeyId?:string, TargetKeyPrefix?:string, ObjectLockLegalHoldStatus?:"OFF"|"ON", ObjectLockMode?:"COMPLIANCE"|"GOVERNANCE", ObjectLockRetainUntilDate?:int|string|\DateTimeInterface, BucketKeyEnabled?:bool, ChecksumAlgorithm?:"CRC32"|"CRC32C"|"SHA1"|"SHA256"|"CRC64NVME"}, S3PutObjectAcl?:array{AccessControlPolicy?:array{AccessControlList?:array{Owner:array{ID?:string, DisplayName?:string}, Grants?:array<array{Grantee?:array{TypeIdentifier?:"id"|"emailAddress"|"uri", Identifier?:string, DisplayName?:string}, Permission?:"FULL_CONTROL"|"READ"|"WRITE"|"READ_ACP"|"WRITE_ACP"}>}, CannedAccessControlList?:"private"|"public-read"|"public-read-write"|"aws-exec-read"|"authenticated-read"|"bucket-owner-read"|"bucket-owner-full-control"}}, S3PutObjectTagging?:array{TagSet?:array<array{Key:string, Value:string}>}, S3DeleteObjectTagging?:array{}, S3InitiateRestoreObject?:array{ExpirationInDays?:int, GlacierJobTier?:"BULK"|"STANDARD"}, S3PutObjectLegalHold?:array{LegalHold:array{Status:"OFF"|"ON"}}, S3PutObjectRetention?:array{BypassGovernanceRetention?:bool, Retention:array{RetainUntilDate?:int|string|\DateTimeInterface, Mode?:"COMPLIANCE"|"GOVERNANCE"}}, S3ReplicateObject?:array{}}, Priority?:int, ProgressSummary?:array{TotalNumberOfTasks?:int, NumberOfTasksSucceeded?:int, NumberOfTasksFailed?:int, Timers?:array{ElapsedTimeInActiveSeconds?:int}}, StatusUpdateReason?:string, FailureReasons?:array<array{FailureCode?:string, FailureReason?:string}>, Report?:array{Bucket?:string, Format?:"Report_CSV_20180820", Enabled:bool, Prefix?:string, ReportScope?:"AllTasks"|"FailedTasksOnly"}, CreationTime?:int|string|\DateTimeInterface, TerminationDate?:int|string|\DateTimeInterface, RoleArn?:string, SuspendedDate?:int|string|\DateTimeInterface, SuspendedCause?:string, ManifestGenerator?:array{S3JobManifestGenerator?:array{ExpectedBucketOwner?:string, SourceBucket:string, ManifestOutputLocation?:array{ExpectedManifestBucketOwner?:string, Bucket:string, ManifestPrefix?:string, ManifestEncryption?:array{SSES3?:array{}, SSEKMS?:array{KeyId:string}}, ManifestFormat:"S3InventoryReport_CSV_20211130"}, Filter?:array{EligibleForReplication?:bool, CreatedAfter?:int|string|\DateTimeInterface, CreatedBefore?:int|string|\DateTimeInterface, ObjectReplicationStatuses?:array<"COMPLETED"|"FAILED"|"REPLICA"|"NONE">, KeyNameConstraint?:array{MatchAnyPrefix?:array<string>, MatchAnySuffix?:array<string>, MatchAnySubstring?:array<string>}, ObjectSizeGreaterThanBytes?:int, ObjectSizeLessThanBytes?:int, MatchAnyStorageClass?:array<"STANDARD"|"STANDARD_IA"|"ONEZONE_IA"|"GLACIER"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"|"GLACIER_IR">}, EnableManifestOutput:bool}}, GeneratedManifestDescriptor?:array{Format?:"S3InventoryReport_CSV_20211130", Location?:array{ObjectArn:string, ObjectVersionId?:string, ETag:string}}}}>
     */
    public function describeJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, RequestTokenARN:string} $args
     * @return \AWS\Result<array{AsyncOperation?:array{CreationTime?:int|string|\DateTimeInterface, Operation?:"CreateMultiRegionAccessPoint"|"DeleteMultiRegionAccessPoint"|"PutMultiRegionAccessPointPolicy", RequestTokenARN?:string, RequestParameters?:array{CreateMultiRegionAccessPointRequest?:array{Name:string, PublicAccessBlock?:array{BlockPublicAcls?:bool, IgnorePublicAcls?:bool, BlockPublicPolicy?:bool, RestrictPublicBuckets?:bool}, Regions:array<array{Bucket:string, BucketAccountId?:string}>}, DeleteMultiRegionAccessPointRequest?:array{Name:string}, PutMultiRegionAccessPointPolicyRequest?:array{Name:string, Policy:string}}, RequestStatus?:string, ResponseDetails?:array{MultiRegionAccessPointDetails?:array{Regions?:array<array{Name?:string, RequestStatus?:string}>}, ErrorDetails?:array{Code?:string, Message?:string, Resource?:string, RequestId?:string}}}}>
     */
    public function describeMultiRegionAccessPointOperation(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, RequestTokenARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AsyncOperation?:array{CreationTime?:int|string|\DateTimeInterface, Operation?:"CreateMultiRegionAccessPoint"|"DeleteMultiRegionAccessPoint"|"PutMultiRegionAccessPointPolicy", RequestTokenARN?:string, RequestParameters?:array{CreateMultiRegionAccessPointRequest?:array{Name:string, PublicAccessBlock?:array{BlockPublicAcls?:bool, IgnorePublicAcls?:bool, BlockPublicPolicy?:bool, RestrictPublicBuckets?:bool}, Regions:array<array{Bucket:string, BucketAccountId?:string}>}, DeleteMultiRegionAccessPointRequest?:array{Name:string}, PutMultiRegionAccessPointPolicyRequest?:array{Name:string, Policy:string}}, RequestStatus?:string, ResponseDetails?:array{MultiRegionAccessPointDetails?:array{Regions?:array<array{Name?:string, RequestStatus?:string}>}, ErrorDetails?:array{Code?:string, Message?:string, Resource?:string, RequestId?:string}}}}>
     */
    public function describeMultiRegionAccessPointOperationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string} $args
     * @return \AWS\Result<void>
     */
    public function dissociateAccessGrantsIdentityCenter(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function dissociateAccessGrantsIdentityCenterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, AccessGrantId:string} $args
     * @return \AWS\Result<array{CreatedAt?:int|string|\DateTimeInterface, AccessGrantId?:string, AccessGrantArn?:string, Grantee?:array{GranteeType?:"DIRECTORY_USER"|"DIRECTORY_GROUP"|"IAM", GranteeIdentifier?:string}, Permission?:"READ"|"WRITE"|"READWRITE", AccessGrantsLocationId?:string, AccessGrantsLocationConfiguration?:array{S3SubPrefix?:string}, GrantScope?:string, ApplicationArn?:string}>
     */
    public function getAccessGrant(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, AccessGrantId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CreatedAt?:int|string|\DateTimeInterface, AccessGrantId?:string, AccessGrantArn?:string, Grantee?:array{GranteeType?:"DIRECTORY_USER"|"DIRECTORY_GROUP"|"IAM", GranteeIdentifier?:string}, Permission?:"READ"|"WRITE"|"READWRITE", AccessGrantsLocationId?:string, AccessGrantsLocationConfiguration?:array{S3SubPrefix?:string}, GrantScope?:string, ApplicationArn?:string}>
     */
    public function getAccessGrantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string} $args
     * @return \AWS\Result<array{AccessGrantsInstanceArn?:string, AccessGrantsInstanceId?:string, IdentityCenterArn?:string, IdentityCenterInstanceArn?:string, IdentityCenterApplicationArn?:string, CreatedAt?:int|string|\DateTimeInterface}>
     */
    public function getAccessGrantsInstance(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccessGrantsInstanceArn?:string, AccessGrantsInstanceId?:string, IdentityCenterArn?:string, IdentityCenterInstanceArn?:string, IdentityCenterApplicationArn?:string, CreatedAt?:int|string|\DateTimeInterface}>
     */
    public function getAccessGrantsInstanceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, S3Prefix:string} $args
     * @return \AWS\Result<array{AccessGrantsInstanceArn?:string, AccessGrantsInstanceId?:string}>
     */
    public function getAccessGrantsInstanceForPrefix(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, S3Prefix:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccessGrantsInstanceArn?:string, AccessGrantsInstanceId?:string}>
     */
    public function getAccessGrantsInstanceForPrefixAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string} $args
     * @return \AWS\Result<array{Policy?:string, Organization?:string, CreatedAt?:int|string|\DateTimeInterface}>
     */
    public function getAccessGrantsInstanceResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:string, Organization?:string, CreatedAt?:int|string|\DateTimeInterface}>
     */
    public function getAccessGrantsInstanceResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, AccessGrantsLocationId:string} $args
     * @return \AWS\Result<array{CreatedAt?:int|string|\DateTimeInterface, AccessGrantsLocationId?:string, AccessGrantsLocationArn?:string, LocationScope?:string, IAMRoleArn?:string}>
     */
    public function getAccessGrantsLocation(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, AccessGrantsLocationId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CreatedAt?:int|string|\DateTimeInterface, AccessGrantsLocationId?:string, AccessGrantsLocationArn?:string, LocationScope?:string, IAMRoleArn?:string}>
     */
    public function getAccessGrantsLocationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Name:string} $args
     * @return \AWS\Result<array{Name?:string, Bucket?:string, NetworkOrigin?:"Internet"|"VPC", VpcConfiguration?:array{VpcId:string}, PublicAccessBlockConfiguration?:array{BlockPublicAcls?:bool, IgnorePublicAcls?:bool, BlockPublicPolicy?:bool, RestrictPublicBuckets?:bool}, CreationDate?:int|string|\DateTimeInterface, Alias?:string, AccessPointArn?:string, Endpoints?:array<string, string>, BucketAccountId?:string}>
     */
    public function getAccessPoint(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name?:string, Bucket?:string, NetworkOrigin?:"Internet"|"VPC", VpcConfiguration?:array{VpcId:string}, PublicAccessBlockConfiguration?:array{BlockPublicAcls?:bool, IgnorePublicAcls?:bool, BlockPublicPolicy?:bool, RestrictPublicBuckets?:bool}, CreationDate?:int|string|\DateTimeInterface, Alias?:string, AccessPointArn?:string, Endpoints?:array<string, string>, BucketAccountId?:string}>
     */
    public function getAccessPointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Name:string} $args
     * @return \AWS\Result<array{Configuration?:array{SupportingAccessPoint:string, CloudWatchMetricsEnabled?:bool, AllowedFeatures?:array<"GetObject-Range"|"GetObject-PartNumber"|"HeadObject-Range"|"HeadObject-PartNumber">, TransformationConfigurations:array<array{Actions:array<"GetObject"|"HeadObject"|"ListObjects"|"ListObjectsV2">, ContentTransformation:array{AwsLambda?:array{FunctionArn:string, FunctionPayload?:string}}}>}}>
     */
    public function getAccessPointConfigurationForObjectLambda(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Configuration?:array{SupportingAccessPoint:string, CloudWatchMetricsEnabled?:bool, AllowedFeatures?:array<"GetObject-Range"|"GetObject-PartNumber"|"HeadObject-Range"|"HeadObject-PartNumber">, TransformationConfigurations:array<array{Actions:array<"GetObject"|"HeadObject"|"ListObjects"|"ListObjectsV2">, ContentTransformation:array{AwsLambda?:array{FunctionArn:string, FunctionPayload?:string}}}>}}>
     */
    public function getAccessPointConfigurationForObjectLambdaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Name:string} $args
     * @return \AWS\Result<array{Name?:string, PublicAccessBlockConfiguration?:array{BlockPublicAcls?:bool, IgnorePublicAcls?:bool, BlockPublicPolicy?:bool, RestrictPublicBuckets?:bool}, CreationDate?:int|string|\DateTimeInterface, Alias?:array{Value?:string, Status?:"PROVISIONING"|"READY"}}>
     */
    public function getAccessPointForObjectLambda(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Name?:string, PublicAccessBlockConfiguration?:array{BlockPublicAcls?:bool, IgnorePublicAcls?:bool, BlockPublicPolicy?:bool, RestrictPublicBuckets?:bool}, CreationDate?:int|string|\DateTimeInterface, Alias?:array{Value?:string, Status?:"PROVISIONING"|"READY"}}>
     */
    public function getAccessPointForObjectLambdaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Name:string} $args
     * @return \AWS\Result<array{Policy?:string}>
     */
    public function getAccessPointPolicy(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:string}>
     */
    public function getAccessPointPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Name:string} $args
     * @return \AWS\Result<array{Policy?:string}>
     */
    public function getAccessPointPolicyForObjectLambda(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:string}>
     */
    public function getAccessPointPolicyForObjectLambdaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Name:string} $args
     * @return \AWS\Result<array{PolicyStatus?:array{IsPublic?:bool}}>
     */
    public function getAccessPointPolicyStatus(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PolicyStatus?:array{IsPublic?:bool}}>
     */
    public function getAccessPointPolicyStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Name:string} $args
     * @return \AWS\Result<array{PolicyStatus?:array{IsPublic?:bool}}>
     */
    public function getAccessPointPolicyStatusForObjectLambda(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PolicyStatus?:array{IsPublic?:bool}}>
     */
    public function getAccessPointPolicyStatusForObjectLambdaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Bucket:string} $args
     * @return \AWS\Result<array{Bucket?:string, PublicAccessBlockEnabled?:bool, CreationDate?:int|string|\DateTimeInterface}>
     */
    public function getBucket(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Bucket:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Bucket?:string, PublicAccessBlockEnabled?:bool, CreationDate?:int|string|\DateTimeInterface}>
     */
    public function getBucketAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Bucket:string} $args
     * @return \AWS\Result<array{Rules?:array<array{Expiration?:array{Date?:int|string|\DateTimeInterface, Days?:int, ExpiredObjectDeleteMarker?:bool}, ID?:string, Filter?:array{Prefix?:string, Tag?:array{Key:string, Value:string}, And?:array{Prefix?:string, Tags?:array<array{Key:string, Value:string}>, ObjectSizeGreaterThan?:int, ObjectSizeLessThan?:int}, ObjectSizeGreaterThan?:int, ObjectSizeLessThan?:int}, Status:"Enabled"|"Disabled", Transitions?:array<array{Date?:int|string|\DateTimeInterface, Days?:int, StorageClass?:"GLACIER"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"}>, NoncurrentVersionTransitions?:array<array{NoncurrentDays?:int, StorageClass?:"GLACIER"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"}>, NoncurrentVersionExpiration?:array{NoncurrentDays?:int, NewerNoncurrentVersions?:int}, AbortIncompleteMultipartUpload?:array{DaysAfterInitiation?:int}}>}>
     */
    public function getBucketLifecycleConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Bucket:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Rules?:array<array{Expiration?:array{Date?:int|string|\DateTimeInterface, Days?:int, ExpiredObjectDeleteMarker?:bool}, ID?:string, Filter?:array{Prefix?:string, Tag?:array{Key:string, Value:string}, And?:array{Prefix?:string, Tags?:array<array{Key:string, Value:string}>, ObjectSizeGreaterThan?:int, ObjectSizeLessThan?:int}, ObjectSizeGreaterThan?:int, ObjectSizeLessThan?:int}, Status:"Enabled"|"Disabled", Transitions?:array<array{Date?:int|string|\DateTimeInterface, Days?:int, StorageClass?:"GLACIER"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"}>, NoncurrentVersionTransitions?:array<array{NoncurrentDays?:int, StorageClass?:"GLACIER"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"}>, NoncurrentVersionExpiration?:array{NoncurrentDays?:int, NewerNoncurrentVersions?:int}, AbortIncompleteMultipartUpload?:array{DaysAfterInitiation?:int}}>}>
     */
    public function getBucketLifecycleConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Bucket:string} $args
     * @return \AWS\Result<array{Policy?:string}>
     */
    public function getBucketPolicy(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Bucket:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:string}>
     */
    public function getBucketPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Bucket:string} $args
     * @return \AWS\Result<array{ReplicationConfiguration?:array{Role:string, Rules:array<array{ID?:string, Priority?:int, Prefix?:string, Filter?:array{Prefix?:string, Tag?:array{Key:string, Value:string}, And?:array{Prefix?:string, Tags?:array<array{Key:string, Value:string}>}}, Status:"Enabled"|"Disabled", SourceSelectionCriteria?:array{SseKmsEncryptedObjects?:array{Status:"Enabled"|"Disabled"}, ReplicaModifications?:array{Status:"Enabled"|"Disabled"}}, ExistingObjectReplication?:array{Status:"Enabled"|"Disabled"}, Destination:array{Account?:string, Bucket:string, ReplicationTime?:array{Status:"Enabled"|"Disabled", Time:array{Minutes?:int}}, AccessControlTranslation?:array{Owner:"Destination"}, EncryptionConfiguration?:array{ReplicaKmsKeyID?:string}, Metrics?:array{Status:"Enabled"|"Disabled", EventThreshold?:array{Minutes?:int}}, StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"}, DeleteMarkerReplication?:array{Status:"Enabled"|"Disabled"}, Bucket:string}>}}>
     */
    public function getBucketReplication(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Bucket:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ReplicationConfiguration?:array{Role:string, Rules:array<array{ID?:string, Priority?:int, Prefix?:string, Filter?:array{Prefix?:string, Tag?:array{Key:string, Value:string}, And?:array{Prefix?:string, Tags?:array<array{Key:string, Value:string}>}}, Status:"Enabled"|"Disabled", SourceSelectionCriteria?:array{SseKmsEncryptedObjects?:array{Status:"Enabled"|"Disabled"}, ReplicaModifications?:array{Status:"Enabled"|"Disabled"}}, ExistingObjectReplication?:array{Status:"Enabled"|"Disabled"}, Destination:array{Account?:string, Bucket:string, ReplicationTime?:array{Status:"Enabled"|"Disabled", Time:array{Minutes?:int}}, AccessControlTranslation?:array{Owner:"Destination"}, EncryptionConfiguration?:array{ReplicaKmsKeyID?:string}, Metrics?:array{Status:"Enabled"|"Disabled", EventThreshold?:array{Minutes?:int}}, StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"}, DeleteMarkerReplication?:array{Status:"Enabled"|"Disabled"}, Bucket:string}>}}>
     */
    public function getBucketReplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Bucket:string} $args
     * @return \AWS\Result<array{TagSet:array<array{Key:string, Value:string}>}>
     */
    public function getBucketTagging(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Bucket:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{TagSet:array<array{Key:string, Value:string}>}>
     */
    public function getBucketTaggingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Bucket:string} $args
     * @return \AWS\Result<array{Status?:"Enabled"|"Suspended", MFADelete?:"Enabled"|"Disabled"}>
     */
    public function getBucketVersioning(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Bucket:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Status?:"Enabled"|"Suspended", MFADelete?:"Enabled"|"Disabled"}>
     */
    public function getBucketVersioningAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Target:string, Permission:"READ"|"WRITE"|"READWRITE", DurationSeconds?:int, Privilege?:"Minimal"|"Default", TargetType?:"Object"} $args
     * @return \AWS\Result<array{Credentials?:array{AccessKeyId?:string, SecretAccessKey?:string, SessionToken?:string, Expiration?:int|string|\DateTimeInterface}, MatchedGrantTarget?:string}>
     */
    public function getDataAccess(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Target:string, Permission:"READ"|"WRITE"|"READWRITE", DurationSeconds?:int, Privilege?:"Minimal"|"Default", TargetType?:"Object"} $args
     * @return \GuzzleHttp\Promise\Promise<array{Credentials?:array{AccessKeyId?:string, SecretAccessKey?:string, SessionToken?:string, Expiration?:int|string|\DateTimeInterface}, MatchedGrantTarget?:string}>
     */
    public function getDataAccessAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, JobId:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function getJobTagging(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, JobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function getJobTaggingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Name:string} $args
     * @return \AWS\Result<array{AccessPoint?:array{Name?:string, Alias?:string, CreatedAt?:int|string|\DateTimeInterface, PublicAccessBlock?:array{BlockPublicAcls?:bool, IgnorePublicAcls?:bool, BlockPublicPolicy?:bool, RestrictPublicBuckets?:bool}, Status?:"READY"|"INCONSISTENT_ACROSS_REGIONS"|"CREATING"|"PARTIALLY_CREATED"|"PARTIALLY_DELETED"|"DELETING", Regions?:array<array{Bucket?:string, Region?:string, BucketAccountId?:string}>}}>
     */
    public function getMultiRegionAccessPoint(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccessPoint?:array{Name?:string, Alias?:string, CreatedAt?:int|string|\DateTimeInterface, PublicAccessBlock?:array{BlockPublicAcls?:bool, IgnorePublicAcls?:bool, BlockPublicPolicy?:bool, RestrictPublicBuckets?:bool}, Status?:"READY"|"INCONSISTENT_ACROSS_REGIONS"|"CREATING"|"PARTIALLY_CREATED"|"PARTIALLY_DELETED"|"DELETING", Regions?:array<array{Bucket?:string, Region?:string, BucketAccountId?:string}>}}>
     */
    public function getMultiRegionAccessPointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Name:string} $args
     * @return \AWS\Result<array{Policy?:array{Established?:array{Policy?:mixed}, Proposed?:array{Policy?:mixed}}}>
     */
    public function getMultiRegionAccessPointPolicy(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:array{Established?:array{Policy?:mixed}, Proposed?:array{Policy?:mixed}}}>
     */
    public function getMultiRegionAccessPointPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Name:string} $args
     * @return \AWS\Result<array{Established?:array{IsPublic?:bool}}>
     */
    public function getMultiRegionAccessPointPolicyStatus(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Established?:array{IsPublic?:bool}}>
     */
    public function getMultiRegionAccessPointPolicyStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Mrap:string} $args
     * @return \AWS\Result<array{Mrap?:string, Routes?:array<array{Bucket?:string, Region?:string, TrafficDialPercentage:int}>}>
     */
    public function getMultiRegionAccessPointRoutes(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Mrap:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Mrap?:string, Routes?:array<array{Bucket?:string, Region?:string, TrafficDialPercentage:int}>}>
     */
    public function getMultiRegionAccessPointRoutesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string} $args
     * @return \AWS\Result<array{PublicAccessBlockConfiguration?:array{BlockPublicAcls?:bool, IgnorePublicAcls?:bool, BlockPublicPolicy?:bool, RestrictPublicBuckets?:bool}}>
     */
    public function getPublicAccessBlock(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PublicAccessBlockConfiguration?:array{BlockPublicAcls?:bool, IgnorePublicAcls?:bool, BlockPublicPolicy?:bool, RestrictPublicBuckets?:bool}}>
     */
    public function getPublicAccessBlockAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigId:string, AccountId:string} $args
     * @return \AWS\Result<array{StorageLensConfiguration?:array{Id:string, AccountLevel:array{ActivityMetrics?:array{IsEnabled?:bool}, BucketLevel:array{ActivityMetrics?:array{IsEnabled?:bool}, PrefixLevel?:array{StorageMetrics:array{IsEnabled?:bool, SelectionCriteria?:array{Delimiter?:string, MaxDepth?:int, MinStorageBytesPercentage?:float}}}, AdvancedCostOptimizationMetrics?:array{IsEnabled?:bool}, AdvancedDataProtectionMetrics?:array{IsEnabled?:bool}, DetailedStatusCodesMetrics?:array{IsEnabled?:bool}}, AdvancedCostOptimizationMetrics?:array{IsEnabled?:bool}, AdvancedDataProtectionMetrics?:array{IsEnabled?:bool}, DetailedStatusCodesMetrics?:array{IsEnabled?:bool}, StorageLensGroupLevel?:array{SelectionCriteria?:array{Include?:array<string>, Exclude?:array<string>}}}, Include?:array{Buckets?:array<string>, Regions?:array<string>}, Exclude?:array{Buckets?:array<string>, Regions?:array<string>}, DataExport?:array{S3BucketDestination?:array{Format:"CSV"|"Parquet", OutputSchemaVersion:"V_1", AccountId:string, Arn:string, Prefix?:string, Encryption?:array{SSES3?:array{}, SSEKMS?:array{KeyId:string}}}, CloudWatchMetrics?:array{IsEnabled:bool}}, IsEnabled:bool, AwsOrg?:array{Arn:string}, StorageLensArn?:string}}>
     */
    public function getStorageLensConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ConfigId:string, AccountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StorageLensConfiguration?:array{Id:string, AccountLevel:array{ActivityMetrics?:array{IsEnabled?:bool}, BucketLevel:array{ActivityMetrics?:array{IsEnabled?:bool}, PrefixLevel?:array{StorageMetrics:array{IsEnabled?:bool, SelectionCriteria?:array{Delimiter?:string, MaxDepth?:int, MinStorageBytesPercentage?:float}}}, AdvancedCostOptimizationMetrics?:array{IsEnabled?:bool}, AdvancedDataProtectionMetrics?:array{IsEnabled?:bool}, DetailedStatusCodesMetrics?:array{IsEnabled?:bool}}, AdvancedCostOptimizationMetrics?:array{IsEnabled?:bool}, AdvancedDataProtectionMetrics?:array{IsEnabled?:bool}, DetailedStatusCodesMetrics?:array{IsEnabled?:bool}, StorageLensGroupLevel?:array{SelectionCriteria?:array{Include?:array<string>, Exclude?:array<string>}}}, Include?:array{Buckets?:array<string>, Regions?:array<string>}, Exclude?:array{Buckets?:array<string>, Regions?:array<string>}, DataExport?:array{S3BucketDestination?:array{Format:"CSV"|"Parquet", OutputSchemaVersion:"V_1", AccountId:string, Arn:string, Prefix?:string, Encryption?:array{SSES3?:array{}, SSEKMS?:array{KeyId:string}}}, CloudWatchMetrics?:array{IsEnabled:bool}}, IsEnabled:bool, AwsOrg?:array{Arn:string}, StorageLensArn?:string}}>
     */
    public function getStorageLensConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigId:string, AccountId:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function getStorageLensConfigurationTagging(array $args): \AWS\Result { }

    /**
     * @param array{ConfigId:string, AccountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function getStorageLensConfigurationTaggingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, AccountId:string} $args
     * @return \AWS\Result<array{StorageLensGroup?:array{Name:string, Filter:array{MatchAnyPrefix?:array<string>, MatchAnySuffix?:array<string>, MatchAnyTag?:array<array{Key:string, Value:string}>, MatchObjectAge?:array{DaysGreaterThan?:int, DaysLessThan?:int}, MatchObjectSize?:array{BytesGreaterThan?:int, BytesLessThan?:int}, And?:array{MatchAnyPrefix?:array<string>, MatchAnySuffix?:array<string>, MatchAnyTag?:array<array{Key:string, Value:string}>, MatchObjectAge?:array{DaysGreaterThan?:int, DaysLessThan?:int}, MatchObjectSize?:array{BytesGreaterThan?:int, BytesLessThan?:int}}, Or?:array{MatchAnyPrefix?:array<string>, MatchAnySuffix?:array<string>, MatchAnyTag?:array<array{Key:string, Value:string}>, MatchObjectAge?:array{DaysGreaterThan?:int, DaysLessThan?:int}, MatchObjectSize?:array{BytesGreaterThan?:int, BytesLessThan?:int}}}, StorageLensGroupArn?:string}}>
     */
    public function getStorageLensGroup(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, AccountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{StorageLensGroup?:array{Name:string, Filter:array{MatchAnyPrefix?:array<string>, MatchAnySuffix?:array<string>, MatchAnyTag?:array<array{Key:string, Value:string}>, MatchObjectAge?:array{DaysGreaterThan?:int, DaysLessThan?:int}, MatchObjectSize?:array{BytesGreaterThan?:int, BytesLessThan?:int}, And?:array{MatchAnyPrefix?:array<string>, MatchAnySuffix?:array<string>, MatchAnyTag?:array<array{Key:string, Value:string}>, MatchObjectAge?:array{DaysGreaterThan?:int, DaysLessThan?:int}, MatchObjectSize?:array{BytesGreaterThan?:int, BytesLessThan?:int}}, Or?:array{MatchAnyPrefix?:array<string>, MatchAnySuffix?:array<string>, MatchAnyTag?:array<array{Key:string, Value:string}>, MatchObjectAge?:array{DaysGreaterThan?:int, DaysLessThan?:int}, MatchObjectSize?:array{BytesGreaterThan?:int, BytesLessThan?:int}}}, StorageLensGroupArn?:string}}>
     */
    public function getStorageLensGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, NextToken?:string, MaxResults?:int, GranteeType?:"DIRECTORY_USER"|"DIRECTORY_GROUP"|"IAM", GranteeIdentifier?:string, Permission?:"READ"|"WRITE"|"READWRITE", GrantScope?:string, ApplicationArn?:string} $args
     * @return \AWS\Result<array{NextToken?:string, AccessGrantsList?:array<array{CreatedAt?:int|string|\DateTimeInterface, AccessGrantId?:string, AccessGrantArn?:string, Grantee?:array{GranteeType?:"DIRECTORY_USER"|"DIRECTORY_GROUP"|"IAM", GranteeIdentifier?:string}, Permission?:"READ"|"WRITE"|"READWRITE", AccessGrantsLocationId?:string, AccessGrantsLocationConfiguration?:array{S3SubPrefix?:string}, GrantScope?:string, ApplicationArn?:string}>}>
     */
    public function listAccessGrants(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, NextToken?:string, MaxResults?:int, GranteeType?:"DIRECTORY_USER"|"DIRECTORY_GROUP"|"IAM", GranteeIdentifier?:string, Permission?:"READ"|"WRITE"|"READWRITE", GrantScope?:string, ApplicationArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, AccessGrantsList?:array<array{CreatedAt?:int|string|\DateTimeInterface, AccessGrantId?:string, AccessGrantArn?:string, Grantee?:array{GranteeType?:"DIRECTORY_USER"|"DIRECTORY_GROUP"|"IAM", GranteeIdentifier?:string}, Permission?:"READ"|"WRITE"|"READWRITE", AccessGrantsLocationId?:string, AccessGrantsLocationConfiguration?:array{S3SubPrefix?:string}, GrantScope?:string, ApplicationArn?:string}>}>
     */
    public function listAccessGrantsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, AccessGrantsInstancesList?:array<array{AccessGrantsInstanceId?:string, AccessGrantsInstanceArn?:string, CreatedAt?:int|string|\DateTimeInterface, IdentityCenterArn?:string, IdentityCenterInstanceArn?:string, IdentityCenterApplicationArn?:string}>}>
     */
    public function listAccessGrantsInstances(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, AccessGrantsInstancesList?:array<array{AccessGrantsInstanceId?:string, AccessGrantsInstanceArn?:string, CreatedAt?:int|string|\DateTimeInterface, IdentityCenterArn?:string, IdentityCenterInstanceArn?:string, IdentityCenterApplicationArn?:string}>}>
     */
    public function listAccessGrantsInstancesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, NextToken?:string, MaxResults?:int, LocationScope?:string} $args
     * @return \AWS\Result<array{NextToken?:string, AccessGrantsLocationsList?:array<array{CreatedAt?:int|string|\DateTimeInterface, AccessGrantsLocationId?:string, AccessGrantsLocationArn?:string, LocationScope?:string, IAMRoleArn?:string}>}>
     */
    public function listAccessGrantsLocations(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, NextToken?:string, MaxResults?:int, LocationScope?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, AccessGrantsLocationsList?:array<array{CreatedAt?:int|string|\DateTimeInterface, AccessGrantsLocationId?:string, AccessGrantsLocationArn?:string, LocationScope?:string, IAMRoleArn?:string}>}>
     */
    public function listAccessGrantsLocationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Bucket?:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{AccessPointList?:array<array{Name:string, NetworkOrigin:"Internet"|"VPC", VpcConfiguration?:array{VpcId:string}, Bucket:string, AccessPointArn?:string, Alias?:string, BucketAccountId?:string}>, NextToken?:string}>
     */
    public function listAccessPoints(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Bucket?:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccessPointList?:array<array{Name:string, NetworkOrigin:"Internet"|"VPC", VpcConfiguration?:array{VpcId:string}, Bucket:string, AccessPointArn?:string, Alias?:string, BucketAccountId?:string}>, NextToken?:string}>
     */
    public function listAccessPointsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{ObjectLambdaAccessPointList?:array<array{Name:string, ObjectLambdaAccessPointArn?:string, Alias?:array{Value?:string, Status?:"PROVISIONING"|"READY"}}>, NextToken?:string}>
     */
    public function listAccessPointsForObjectLambda(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{ObjectLambdaAccessPointList?:array<array{Name:string, ObjectLambdaAccessPointArn?:string, Alias?:array{Value?:string, Status?:"PROVISIONING"|"READY"}}>, NextToken?:string}>
     */
    public function listAccessPointsForObjectLambdaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, GrantScope?:string, NextToken?:string, MaxResults?:int, AllowedByApplication?:bool} $args
     * @return \AWS\Result<array{NextToken?:string, CallerAccessGrantsList?:array<array{Permission?:"READ"|"WRITE"|"READWRITE", GrantScope?:string, ApplicationArn?:string}>}>
     */
    public function listCallerAccessGrants(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, GrantScope?:string, NextToken?:string, MaxResults?:int, AllowedByApplication?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, CallerAccessGrantsList?:array<array{Permission?:"READ"|"WRITE"|"READWRITE", GrantScope?:string, ApplicationArn?:string}>}>
     */
    public function listCallerAccessGrantsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, JobStatuses?:array<"Active"|"Cancelled"|"Cancelling"|"Complete"|"Completing"|"Failed"|"Failing"|"New"|"Paused"|"Pausing"|"Preparing"|"Ready"|"Suspended">, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{NextToken?:string, Jobs?:array<array{JobId?:string, Description?:string, Operation?:"LambdaInvoke"|"S3PutObjectCopy"|"S3PutObjectAcl"|"S3PutObjectTagging"|"S3DeleteObjectTagging"|"S3InitiateRestoreObject"|"S3PutObjectLegalHold"|"S3PutObjectRetention"|"S3ReplicateObject", Priority?:int, Status?:"Active"|"Cancelled"|"Cancelling"|"Complete"|"Completing"|"Failed"|"Failing"|"New"|"Paused"|"Pausing"|"Preparing"|"Ready"|"Suspended", CreationTime?:int|string|\DateTimeInterface, TerminationDate?:int|string|\DateTimeInterface, ProgressSummary?:array{TotalNumberOfTasks?:int, NumberOfTasksSucceeded?:int, NumberOfTasksFailed?:int, Timers?:array{ElapsedTimeInActiveSeconds?:int}}}>}>
     */
    public function listJobs(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, JobStatuses?:array<"Active"|"Cancelled"|"Cancelling"|"Complete"|"Completing"|"Failed"|"Failing"|"New"|"Paused"|"Pausing"|"Preparing"|"Ready"|"Suspended">, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, Jobs?:array<array{JobId?:string, Description?:string, Operation?:"LambdaInvoke"|"S3PutObjectCopy"|"S3PutObjectAcl"|"S3PutObjectTagging"|"S3DeleteObjectTagging"|"S3InitiateRestoreObject"|"S3PutObjectLegalHold"|"S3PutObjectRetention"|"S3ReplicateObject", Priority?:int, Status?:"Active"|"Cancelled"|"Cancelling"|"Complete"|"Completing"|"Failed"|"Failing"|"New"|"Paused"|"Pausing"|"Preparing"|"Ready"|"Suspended", CreationTime?:int|string|\DateTimeInterface, TerminationDate?:int|string|\DateTimeInterface, ProgressSummary?:array{TotalNumberOfTasks?:int, NumberOfTasksSucceeded?:int, NumberOfTasksFailed?:int, Timers?:array{ElapsedTimeInActiveSeconds?:int}}}>}>
     */
    public function listJobsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{AccessPoints?:array<array{Name?:string, Alias?:string, CreatedAt?:int|string|\DateTimeInterface, PublicAccessBlock?:array{BlockPublicAcls?:bool, IgnorePublicAcls?:bool, BlockPublicPolicy?:bool, RestrictPublicBuckets?:bool}, Status?:"READY"|"INCONSISTENT_ACROSS_REGIONS"|"CREATING"|"PARTIALLY_CREATED"|"PARTIALLY_DELETED"|"DELETING", Regions?:array<array{Bucket?:string, Region?:string, BucketAccountId?:string}>}>, NextToken?:string}>
     */
    public function listMultiRegionAccessPoints(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{AccessPoints?:array<array{Name?:string, Alias?:string, CreatedAt?:int|string|\DateTimeInterface, PublicAccessBlock?:array{BlockPublicAcls?:bool, IgnorePublicAcls?:bool, BlockPublicPolicy?:bool, RestrictPublicBuckets?:bool}, Status?:"READY"|"INCONSISTENT_ACROSS_REGIONS"|"CREATING"|"PARTIALLY_CREATED"|"PARTIALLY_DELETED"|"DELETING", Regions?:array<array{Bucket?:string, Region?:string, BucketAccountId?:string}>}>, NextToken?:string}>
     */
    public function listMultiRegionAccessPointsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, NextToken?:string, MaxResults?:int, OutpostId?:string} $args
     * @return \AWS\Result<array{RegionalBucketList?:array<array{Bucket:string, BucketArn?:string, PublicAccessBlockEnabled:bool, CreationDate:int|string|\DateTimeInterface, OutpostId?:string}>, NextToken?:string}>
     */
    public function listRegionalBuckets(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, NextToken?:string, MaxResults?:int, OutpostId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{RegionalBucketList?:array<array{Bucket:string, BucketArn?:string, PublicAccessBlockEnabled:bool, CreationDate:int|string|\DateTimeInterface, OutpostId?:string}>, NextToken?:string}>
     */
    public function listRegionalBucketsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, StorageLensConfigurationList?:array<array{Id:string, StorageLensArn:string, HomeRegion:string, IsEnabled?:bool}>}>
     */
    public function listStorageLensConfigurations(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, StorageLensConfigurationList?:array<array{Id:string, StorageLensArn:string, HomeRegion:string, IsEnabled?:bool}>}>
     */
    public function listStorageLensConfigurationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, NextToken?:string} $args
     * @return \AWS\Result<array{NextToken?:string, StorageLensGroupList?:array<array{Name:string, StorageLensGroupArn:string, HomeRegion:string}>}>
     */
    public function listStorageLensGroups(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{NextToken?:string, StorageLensGroupList?:array<array{Name:string, StorageLensGroupArn:string, HomeRegion:string}>}>
     */
    public function listStorageLensGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, ResourceArn:string} $args
     * @return \AWS\Result<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Tags?:array<array{Key:string, Value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Policy:string, Organization?:string} $args
     * @return \AWS\Result<array{Policy?:string, Organization?:string, CreatedAt?:int|string|\DateTimeInterface}>
     */
    public function putAccessGrantsInstanceResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Policy:string, Organization?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Policy?:string, Organization?:string, CreatedAt?:int|string|\DateTimeInterface}>
     */
    public function putAccessGrantsInstanceResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Name:string, Configuration:array{SupportingAccessPoint:string, CloudWatchMetricsEnabled?:bool, AllowedFeatures?:array<"GetObject-Range"|"GetObject-PartNumber"|"HeadObject-Range"|"HeadObject-PartNumber">, TransformationConfigurations:array<array{Actions:array<"GetObject"|"HeadObject"|"ListObjects"|"ListObjectsV2">, ContentTransformation:array{AwsLambda?:array{FunctionArn:string, FunctionPayload?:string}}}>}} $args
     * @return \AWS\Result<void>
     */
    public function putAccessPointConfigurationForObjectLambda(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Name:string, Configuration:array{SupportingAccessPoint:string, CloudWatchMetricsEnabled?:bool, AllowedFeatures?:array<"GetObject-Range"|"GetObject-PartNumber"|"HeadObject-Range"|"HeadObject-PartNumber">, TransformationConfigurations:array<array{Actions:array<"GetObject"|"HeadObject"|"ListObjects"|"ListObjectsV2">, ContentTransformation:array{AwsLambda?:array{FunctionArn:string, FunctionPayload?:string}}}>}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putAccessPointConfigurationForObjectLambdaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Name:string, Policy:string} $args
     * @return \AWS\Result<void>
     */
    public function putAccessPointPolicy(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Name:string, Policy:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putAccessPointPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Name:string, Policy:string} $args
     * @return \AWS\Result<void>
     */
    public function putAccessPointPolicyForObjectLambda(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Name:string, Policy:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putAccessPointPolicyForObjectLambdaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Bucket:string, LifecycleConfiguration?:array{Rules?:array<array{Expiration?:array{Date?:int|string|\DateTimeInterface, Days?:int, ExpiredObjectDeleteMarker?:bool}, ID?:string, Filter?:array{Prefix?:string, Tag?:array{Key:string, Value:string}, And?:array{Prefix?:string, Tags?:array<array{Key:string, Value:string}>, ObjectSizeGreaterThan?:int, ObjectSizeLessThan?:int}, ObjectSizeGreaterThan?:int, ObjectSizeLessThan?:int}, Status:"Enabled"|"Disabled", Transitions?:array<array{Date?:int|string|\DateTimeInterface, Days?:int, StorageClass?:"GLACIER"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"}>, NoncurrentVersionTransitions?:array<array{NoncurrentDays?:int, StorageClass?:"GLACIER"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"}>, NoncurrentVersionExpiration?:array{NoncurrentDays?:int, NewerNoncurrentVersions?:int}, AbortIncompleteMultipartUpload?:array{DaysAfterInitiation?:int}}>}} $args
     * @return \AWS\Result<void>
     */
    public function putBucketLifecycleConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Bucket:string, LifecycleConfiguration?:array{Rules?:array<array{Expiration?:array{Date?:int|string|\DateTimeInterface, Days?:int, ExpiredObjectDeleteMarker?:bool}, ID?:string, Filter?:array{Prefix?:string, Tag?:array{Key:string, Value:string}, And?:array{Prefix?:string, Tags?:array<array{Key:string, Value:string}>, ObjectSizeGreaterThan?:int, ObjectSizeLessThan?:int}, ObjectSizeGreaterThan?:int, ObjectSizeLessThan?:int}, Status:"Enabled"|"Disabled", Transitions?:array<array{Date?:int|string|\DateTimeInterface, Days?:int, StorageClass?:"GLACIER"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"}>, NoncurrentVersionTransitions?:array<array{NoncurrentDays?:int, StorageClass?:"GLACIER"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"}>, NoncurrentVersionExpiration?:array{NoncurrentDays?:int, NewerNoncurrentVersions?:int}, AbortIncompleteMultipartUpload?:array{DaysAfterInitiation?:int}}>}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putBucketLifecycleConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Bucket:string, ConfirmRemoveSelfBucketAccess?:bool, Policy:string} $args
     * @return \AWS\Result<void>
     */
    public function putBucketPolicy(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Bucket:string, ConfirmRemoveSelfBucketAccess?:bool, Policy:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putBucketPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Bucket:string, ReplicationConfiguration:array{Role:string, Rules:array<array{ID?:string, Priority?:int, Prefix?:string, Filter?:array{Prefix?:string, Tag?:array{Key:string, Value:string}, And?:array{Prefix?:string, Tags?:array<array{Key:string, Value:string}>}}, Status:"Enabled"|"Disabled", SourceSelectionCriteria?:array{SseKmsEncryptedObjects?:array{Status:"Enabled"|"Disabled"}, ReplicaModifications?:array{Status:"Enabled"|"Disabled"}}, ExistingObjectReplication?:array{Status:"Enabled"|"Disabled"}, Destination:array{Account?:string, Bucket:string, ReplicationTime?:array{Status:"Enabled"|"Disabled", Time:array{Minutes?:int}}, AccessControlTranslation?:array{Owner:"Destination"}, EncryptionConfiguration?:array{ReplicaKmsKeyID?:string}, Metrics?:array{Status:"Enabled"|"Disabled", EventThreshold?:array{Minutes?:int}}, StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"}, DeleteMarkerReplication?:array{Status:"Enabled"|"Disabled"}, Bucket:string}>}} $args
     * @return \AWS\Result<void>
     */
    public function putBucketReplication(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Bucket:string, ReplicationConfiguration:array{Role:string, Rules:array<array{ID?:string, Priority?:int, Prefix?:string, Filter?:array{Prefix?:string, Tag?:array{Key:string, Value:string}, And?:array{Prefix?:string, Tags?:array<array{Key:string, Value:string}>}}, Status:"Enabled"|"Disabled", SourceSelectionCriteria?:array{SseKmsEncryptedObjects?:array{Status:"Enabled"|"Disabled"}, ReplicaModifications?:array{Status:"Enabled"|"Disabled"}}, ExistingObjectReplication?:array{Status:"Enabled"|"Disabled"}, Destination:array{Account?:string, Bucket:string, ReplicationTime?:array{Status:"Enabled"|"Disabled", Time:array{Minutes?:int}}, AccessControlTranslation?:array{Owner:"Destination"}, EncryptionConfiguration?:array{ReplicaKmsKeyID?:string}, Metrics?:array{Status:"Enabled"|"Disabled", EventThreshold?:array{Minutes?:int}}, StorageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"|"ONEZONE_IA"|"INTELLIGENT_TIERING"|"GLACIER"|"DEEP_ARCHIVE"|"OUTPOSTS"|"GLACIER_IR"}, DeleteMarkerReplication?:array{Status:"Enabled"|"Disabled"}, Bucket:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putBucketReplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Bucket:string, Tagging:array{TagSet:array<array{Key:string, Value:string}>}} $args
     * @return \AWS\Result<void>
     */
    public function putBucketTagging(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Bucket:string, Tagging:array{TagSet:array<array{Key:string, Value:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putBucketTaggingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Bucket:string, MFA?:string, VersioningConfiguration:array{MFADelete?:"Enabled"|"Disabled", Status?:"Enabled"|"Suspended"}} $args
     * @return \AWS\Result<void>
     */
    public function putBucketVersioning(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Bucket:string, MFA?:string, VersioningConfiguration:array{MFADelete?:"Enabled"|"Disabled", Status?:"Enabled"|"Suspended"}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putBucketVersioningAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, JobId:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function putJobTagging(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, JobId:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putJobTaggingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, ClientToken:string, Details:array{Name:string, Policy:string}} $args
     * @return \AWS\Result<array{RequestTokenARN?:string}>
     */
    public function putMultiRegionAccessPointPolicy(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, ClientToken:string, Details:array{Name:string, Policy:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{RequestTokenARN?:string}>
     */
    public function putMultiRegionAccessPointPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PublicAccessBlockConfiguration:array{BlockPublicAcls?:bool, IgnorePublicAcls?:bool, BlockPublicPolicy?:bool, RestrictPublicBuckets?:bool}, AccountId:string} $args
     * @return \AWS\Result<void>
     */
    public function putPublicAccessBlock(array $args): \AWS\Result { }

    /**
     * @param array{PublicAccessBlockConfiguration:array{BlockPublicAcls?:bool, IgnorePublicAcls?:bool, BlockPublicPolicy?:bool, RestrictPublicBuckets?:bool}, AccountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putPublicAccessBlockAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigId:string, AccountId:string, StorageLensConfiguration:array{Id:string, AccountLevel:array{ActivityMetrics?:array{IsEnabled?:bool}, BucketLevel:array{ActivityMetrics?:array{IsEnabled?:bool}, PrefixLevel?:array{StorageMetrics:array{IsEnabled?:bool, SelectionCriteria?:array{Delimiter?:string, MaxDepth?:int, MinStorageBytesPercentage?:float}}}, AdvancedCostOptimizationMetrics?:array{IsEnabled?:bool}, AdvancedDataProtectionMetrics?:array{IsEnabled?:bool}, DetailedStatusCodesMetrics?:array{IsEnabled?:bool}}, AdvancedCostOptimizationMetrics?:array{IsEnabled?:bool}, AdvancedDataProtectionMetrics?:array{IsEnabled?:bool}, DetailedStatusCodesMetrics?:array{IsEnabled?:bool}, StorageLensGroupLevel?:array{SelectionCriteria?:array{Include?:array<string>, Exclude?:array<string>}}}, Include?:array{Buckets?:array<string>, Regions?:array<string>}, Exclude?:array{Buckets?:array<string>, Regions?:array<string>}, DataExport?:array{S3BucketDestination?:array{Format:"CSV"|"Parquet", OutputSchemaVersion:"V_1", AccountId:string, Arn:string, Prefix?:string, Encryption?:array{SSES3?:array{}, SSEKMS?:array{KeyId:string}}}, CloudWatchMetrics?:array{IsEnabled:bool}}, IsEnabled:bool, AwsOrg?:array{Arn:string}, StorageLensArn?:string}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<void>
     */
    public function putStorageLensConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{ConfigId:string, AccountId:string, StorageLensConfiguration:array{Id:string, AccountLevel:array{ActivityMetrics?:array{IsEnabled?:bool}, BucketLevel:array{ActivityMetrics?:array{IsEnabled?:bool}, PrefixLevel?:array{StorageMetrics:array{IsEnabled?:bool, SelectionCriteria?:array{Delimiter?:string, MaxDepth?:int, MinStorageBytesPercentage?:float}}}, AdvancedCostOptimizationMetrics?:array{IsEnabled?:bool}, AdvancedDataProtectionMetrics?:array{IsEnabled?:bool}, DetailedStatusCodesMetrics?:array{IsEnabled?:bool}}, AdvancedCostOptimizationMetrics?:array{IsEnabled?:bool}, AdvancedDataProtectionMetrics?:array{IsEnabled?:bool}, DetailedStatusCodesMetrics?:array{IsEnabled?:bool}, StorageLensGroupLevel?:array{SelectionCriteria?:array{Include?:array<string>, Exclude?:array<string>}}}, Include?:array{Buckets?:array<string>, Regions?:array<string>}, Exclude?:array{Buckets?:array<string>, Regions?:array<string>}, DataExport?:array{S3BucketDestination?:array{Format:"CSV"|"Parquet", OutputSchemaVersion:"V_1", AccountId:string, Arn:string, Prefix?:string, Encryption?:array{SSES3?:array{}, SSEKMS?:array{KeyId:string}}}, CloudWatchMetrics?:array{IsEnabled:bool}}, IsEnabled:bool, AwsOrg?:array{Arn:string}, StorageLensArn?:string}, Tags?:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putStorageLensConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ConfigId:string, AccountId:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function putStorageLensConfigurationTagging(array $args): \AWS\Result { }

    /**
     * @param array{ConfigId:string, AccountId:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putStorageLensConfigurationTaggingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, Mrap:string, RouteUpdates:array<array{Bucket?:string, Region?:string, TrafficDialPercentage:int}>} $args
     * @return \AWS\Result<array{}>
     */
    public function submitMultiRegionAccessPointRoutes(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, Mrap:string, RouteUpdates:array<array{Bucket?:string, Region?:string, TrafficDialPercentage:int}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function submitMultiRegionAccessPointRoutesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, ResourceArn:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, ResourceArn:string, Tags:array<array{Key:string, Value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, ResourceArn:string, TagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, ResourceArn:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, AccessGrantsLocationId:string, IAMRoleArn:string} $args
     * @return \AWS\Result<array{CreatedAt?:int|string|\DateTimeInterface, AccessGrantsLocationId?:string, AccessGrantsLocationArn?:string, LocationScope?:string, IAMRoleArn?:string}>
     */
    public function updateAccessGrantsLocation(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, AccessGrantsLocationId:string, IAMRoleArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{CreatedAt?:int|string|\DateTimeInterface, AccessGrantsLocationId?:string, AccessGrantsLocationArn?:string, LocationScope?:string, IAMRoleArn?:string}>
     */
    public function updateAccessGrantsLocationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, JobId:string, Priority:int} $args
     * @return \AWS\Result<array{JobId:string, Priority:int}>
     */
    public function updateJobPriority(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, JobId:string, Priority:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId:string, Priority:int}>
     */
    public function updateJobPriorityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{AccountId:string, JobId:string, RequestedJobStatus:"Cancelled"|"Ready", StatusUpdateReason?:string} $args
     * @return \AWS\Result<array{JobId?:string, Status?:"Active"|"Cancelled"|"Cancelling"|"Complete"|"Completing"|"Failed"|"Failing"|"New"|"Paused"|"Pausing"|"Preparing"|"Ready"|"Suspended", StatusUpdateReason?:string}>
     */
    public function updateJobStatus(array $args): \AWS\Result { }

    /**
     * @param array{AccountId:string, JobId:string, RequestedJobStatus:"Cancelled"|"Ready", StatusUpdateReason?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{JobId?:string, Status?:"Active"|"Cancelled"|"Cancelling"|"Complete"|"Completing"|"Failed"|"Failing"|"New"|"Paused"|"Pausing"|"Preparing"|"Ready"|"Suspended", StatusUpdateReason?:string}>
     */
    public function updateJobStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, AccountId:string, StorageLensGroup:array{Name:string, Filter:array{MatchAnyPrefix?:array<string>, MatchAnySuffix?:array<string>, MatchAnyTag?:array<array{Key:string, Value:string}>, MatchObjectAge?:array{DaysGreaterThan?:int, DaysLessThan?:int}, MatchObjectSize?:array{BytesGreaterThan?:int, BytesLessThan?:int}, And?:array{MatchAnyPrefix?:array<string>, MatchAnySuffix?:array<string>, MatchAnyTag?:array<array{Key:string, Value:string}>, MatchObjectAge?:array{DaysGreaterThan?:int, DaysLessThan?:int}, MatchObjectSize?:array{BytesGreaterThan?:int, BytesLessThan?:int}}, Or?:array{MatchAnyPrefix?:array<string>, MatchAnySuffix?:array<string>, MatchAnyTag?:array<array{Key:string, Value:string}>, MatchObjectAge?:array{DaysGreaterThan?:int, DaysLessThan?:int}, MatchObjectSize?:array{BytesGreaterThan?:int, BytesLessThan?:int}}}, StorageLensGroupArn?:string}} $args
     * @return \AWS\Result<void>
     */
    public function updateStorageLensGroup(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, AccountId:string, StorageLensGroup:array{Name:string, Filter:array{MatchAnyPrefix?:array<string>, MatchAnySuffix?:array<string>, MatchAnyTag?:array<array{Key:string, Value:string}>, MatchObjectAge?:array{DaysGreaterThan?:int, DaysLessThan?:int}, MatchObjectSize?:array{BytesGreaterThan?:int, BytesLessThan?:int}, And?:array{MatchAnyPrefix?:array<string>, MatchAnySuffix?:array<string>, MatchAnyTag?:array<array{Key:string, Value:string}>, MatchObjectAge?:array{DaysGreaterThan?:int, DaysLessThan?:int}, MatchObjectSize?:array{BytesGreaterThan?:int, BytesLessThan?:int}}, Or?:array{MatchAnyPrefix?:array<string>, MatchAnySuffix?:array<string>, MatchAnyTag?:array<array{Key:string, Value:string}>, MatchObjectAge?:array{DaysGreaterThan?:int, DaysLessThan?:int}, MatchObjectSize?:array{BytesGreaterThan?:int, BytesLessThan?:int}}}, StorageLensGroupArn?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateStorageLensGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
