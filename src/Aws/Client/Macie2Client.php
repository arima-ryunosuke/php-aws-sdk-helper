<?php
namespace AWS\Macie2;

class Macie2Client
{
    /**
     * @param array{administratorAccountId?:string, invitationId:string, masterAccount?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function acceptInvitation(array $args): \AWS\Result { }

    /**
     * @param array{administratorAccountId?:string, invitationId:string, masterAccount?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function acceptInvitationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ids?:array<string>} $args
     * @return \AWS\Result<array{customDataIdentifiers?:array<array{arn?:string, createdAt?:int|string|\DateTimeInterface, deleted?:bool, description?:string, id?:string, name?:string}>, notFoundIdentifierIds?:array<string>}>
     */
    public function batchGetCustomDataIdentifiers(array $args = []): \AWS\Result { }

    /**
     * @param array{ids?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{customDataIdentifiers?:array<array{arn?:string, createdAt?:int|string|\DateTimeInterface, deleted?:bool, description?:string, id?:string, name?:string}>, notFoundIdentifierIds?:array<string>}>
     */
    public function batchGetCustomDataIdentifiersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accounts?:array<array{accountId?:string, status?:"ENABLED"|"DISABLED"}>} $args
     * @return \AWS\Result<array{errors?:array<array{accountId?:string, errorCode?:"ACCOUNT_PAUSED"|"ACCOUNT_NOT_FOUND"}>}>
     */
    public function batchUpdateAutomatedDiscoveryAccounts(array $args = []): \AWS\Result { }

    /**
     * @param array{accounts?:array<array{accountId?:string, status?:"ENABLED"|"DISABLED"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{errors?:array<array{accountId?:string, errorCode?:"ACCOUNT_PAUSED"|"ACCOUNT_NOT_FOUND"}>}>
     */
    public function batchUpdateAutomatedDiscoveryAccountsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken:string, criteria:array{regex?:string, s3WordsList?:array{bucketName:string, objectKey:string}}, description?:string, name:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{arn?:string, id?:string}>
     */
    public function createAllowList(array $args): \AWS\Result { }

    /**
     * @param array{clientToken:string, criteria:array{regex?:string, s3WordsList?:array{bucketName:string, objectKey:string}}, description?:string, name:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, id?:string}>
     */
    public function createAllowListAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{allowListIds?:array<string>, clientToken:string, customDataIdentifierIds?:array<string>, description?:string, initialRun?:bool, jobType:"ONE_TIME"|"SCHEDULED", managedDataIdentifierIds?:array<string>, managedDataIdentifierSelector?:"ALL"|"EXCLUDE"|"INCLUDE"|"NONE"|"RECOMMENDED", name:string, s3JobDefinition:array{bucketCriteria?:array{excludes?:array{and?:array<array{simpleCriterion?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", key?:"ACCOUNT_ID"|"S3_BUCKET_NAME"|"S3_BUCKET_EFFECTIVE_PERMISSION"|"S3_BUCKET_SHARED_ACCESS", values?:array<string>}, tagCriterion?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", tagValues?:array<array{key?:string, value?:string}>}}>}, includes?:array{and?:array<array{simpleCriterion?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", key?:"ACCOUNT_ID"|"S3_BUCKET_NAME"|"S3_BUCKET_EFFECTIVE_PERMISSION"|"S3_BUCKET_SHARED_ACCESS", values?:array<string>}, tagCriterion?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", tagValues?:array<array{key?:string, value?:string}>}}>}}, bucketDefinitions?:array<array{accountId:string, buckets:array<string>}>, scoping?:array{excludes?:array{and?:array<array{simpleScopeTerm?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", key?:"OBJECT_EXTENSION"|"OBJECT_LAST_MODIFIED_DATE"|"OBJECT_SIZE"|"OBJECT_KEY", values?:array<string>}, tagScopeTerm?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", key?:string, tagValues?:array<array{key?:string, value?:string}>, target?:"S3_OBJECT"}}>}, includes?:array{and?:array<array{simpleScopeTerm?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", key?:"OBJECT_EXTENSION"|"OBJECT_LAST_MODIFIED_DATE"|"OBJECT_SIZE"|"OBJECT_KEY", values?:array<string>}, tagScopeTerm?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", key?:string, tagValues?:array<array{key?:string, value?:string}>, target?:"S3_OBJECT"}}>}}}, samplingPercentage?:int, scheduleFrequency?:array{dailySchedule?:array{}, monthlySchedule?:array{dayOfMonth?:int}, weeklySchedule?:array{dayOfWeek?:"SUNDAY"|"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"}}, tags?:array<string, string>} $args
     * @return \AWS\Result<array{jobArn?:string, jobId?:string}>
     */
    public function createClassificationJob(array $args): \AWS\Result { }

    /**
     * @param array{allowListIds?:array<string>, clientToken:string, customDataIdentifierIds?:array<string>, description?:string, initialRun?:bool, jobType:"ONE_TIME"|"SCHEDULED", managedDataIdentifierIds?:array<string>, managedDataIdentifierSelector?:"ALL"|"EXCLUDE"|"INCLUDE"|"NONE"|"RECOMMENDED", name:string, s3JobDefinition:array{bucketCriteria?:array{excludes?:array{and?:array<array{simpleCriterion?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", key?:"ACCOUNT_ID"|"S3_BUCKET_NAME"|"S3_BUCKET_EFFECTIVE_PERMISSION"|"S3_BUCKET_SHARED_ACCESS", values?:array<string>}, tagCriterion?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", tagValues?:array<array{key?:string, value?:string}>}}>}, includes?:array{and?:array<array{simpleCriterion?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", key?:"ACCOUNT_ID"|"S3_BUCKET_NAME"|"S3_BUCKET_EFFECTIVE_PERMISSION"|"S3_BUCKET_SHARED_ACCESS", values?:array<string>}, tagCriterion?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", tagValues?:array<array{key?:string, value?:string}>}}>}}, bucketDefinitions?:array<array{accountId:string, buckets:array<string>}>, scoping?:array{excludes?:array{and?:array<array{simpleScopeTerm?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", key?:"OBJECT_EXTENSION"|"OBJECT_LAST_MODIFIED_DATE"|"OBJECT_SIZE"|"OBJECT_KEY", values?:array<string>}, tagScopeTerm?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", key?:string, tagValues?:array<array{key?:string, value?:string}>, target?:"S3_OBJECT"}}>}, includes?:array{and?:array<array{simpleScopeTerm?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", key?:"OBJECT_EXTENSION"|"OBJECT_LAST_MODIFIED_DATE"|"OBJECT_SIZE"|"OBJECT_KEY", values?:array<string>}, tagScopeTerm?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", key?:string, tagValues?:array<array{key?:string, value?:string}>, target?:"S3_OBJECT"}}>}}}, samplingPercentage?:int, scheduleFrequency?:array{dailySchedule?:array{}, monthlySchedule?:array{dayOfMonth?:int}, weeklySchedule?:array{dayOfWeek?:"SUNDAY"|"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"}}, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobArn?:string, jobId?:string}>
     */
    public function createClassificationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, description?:string, ignoreWords?:array<string>, keywords?:array<string>, maximumMatchDistance?:int, name:string, regex:string, severityLevels?:array<array{occurrencesThreshold:int, severity:"LOW"|"MEDIUM"|"HIGH"}>, tags?:array<string, string>} $args
     * @return \AWS\Result<array{customDataIdentifierId?:string}>
     */
    public function createCustomDataIdentifier(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, description?:string, ignoreWords?:array<string>, keywords?:array<string>, maximumMatchDistance?:int, name:string, regex:string, severityLevels?:array<array{occurrencesThreshold:int, severity:"LOW"|"MEDIUM"|"HIGH"}>, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{customDataIdentifierId?:string}>
     */
    public function createCustomDataIdentifierAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{action:"ARCHIVE"|"NOOP", clientToken?:string, description?:string, findingCriteria:array{criterion?:array<string, array{eq?:array<string>, eqExactMatch?:array<string>, gt?:int, gte?:int, lt?:int, lte?:int, neq?:array<string>}>}, name:string, position?:int, tags?:array<string, string>} $args
     * @return \AWS\Result<array{arn?:string, id?:string}>
     */
    public function createFindingsFilter(array $args): \AWS\Result { }

    /**
     * @param array{action:"ARCHIVE"|"NOOP", clientToken?:string, description?:string, findingCriteria:array{criterion?:array<string, array{eq?:array<string>, eqExactMatch?:array<string>, gt?:int, gte?:int, lt?:int, lte?:int, neq?:array<string>}>}, name:string, position?:int, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, id?:string}>
     */
    public function createFindingsFilterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountIds:array<string>, disableEmailNotification?:bool, message?:string} $args
     * @return \AWS\Result<array{unprocessedAccounts?:array<array{accountId?:string, errorCode?:"ClientError"|"InternalError", errorMessage?:string}>}>
     */
    public function createInvitations(array $args): \AWS\Result { }

    /**
     * @param array{accountIds:array<string>, disableEmailNotification?:bool, message?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{unprocessedAccounts?:array<array{accountId?:string, errorCode?:"ClientError"|"InternalError", errorMessage?:string}>}>
     */
    public function createInvitationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{account:array{accountId:string, email:string}, tags?:array<string, string>} $args
     * @return \AWS\Result<array{arn?:string}>
     */
    public function createMember(array $args): \AWS\Result { }

    /**
     * @param array{account:array{accountId:string, email:string}, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string}>
     */
    public function createMemberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{findingTypes?:array<"SensitiveData:S3Object/Multiple"|"SensitiveData:S3Object/Financial"|"SensitiveData:S3Object/Personal"|"SensitiveData:S3Object/Credentials"|"SensitiveData:S3Object/CustomIdentifier"|"Policy:IAMUser/S3BucketPublic"|"Policy:IAMUser/S3BucketSharedExternally"|"Policy:IAMUser/S3BucketReplicatedExternally"|"Policy:IAMUser/S3BucketEncryptionDisabled"|"Policy:IAMUser/S3BlockPublicAccessDisabled"|"Policy:IAMUser/S3BucketSharedWithCloudFront">} $args
     * @return \AWS\Result<array{}>
     */
    public function createSampleFindings(array $args = []): \AWS\Result { }

    /**
     * @param array{findingTypes?:array<"SensitiveData:S3Object/Multiple"|"SensitiveData:S3Object/Financial"|"SensitiveData:S3Object/Personal"|"SensitiveData:S3Object/Credentials"|"SensitiveData:S3Object/CustomIdentifier"|"Policy:IAMUser/S3BucketPublic"|"Policy:IAMUser/S3BucketSharedExternally"|"Policy:IAMUser/S3BucketReplicatedExternally"|"Policy:IAMUser/S3BucketEncryptionDisabled"|"Policy:IAMUser/S3BlockPublicAccessDisabled"|"Policy:IAMUser/S3BucketSharedWithCloudFront">} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function createSampleFindingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountIds:array<string>} $args
     * @return \AWS\Result<array{unprocessedAccounts?:array<array{accountId?:string, errorCode?:"ClientError"|"InternalError", errorMessage?:string}>}>
     */
    public function declineInvitations(array $args): \AWS\Result { }

    /**
     * @param array{accountIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{unprocessedAccounts?:array<array{accountId?:string, errorCode?:"ClientError"|"InternalError", errorMessage?:string}>}>
     */
    public function declineInvitationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, ignoreJobChecks?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAllowList(array $args): \AWS\Result { }

    /**
     * @param array{id:string, ignoreJobChecks?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAllowListAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteCustomDataIdentifier(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteCustomDataIdentifierAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteFindingsFilter(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteFindingsFilterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountIds:array<string>} $args
     * @return \AWS\Result<array{unprocessedAccounts?:array<array{accountId?:string, errorCode?:"ClientError"|"InternalError", errorMessage?:string}>}>
     */
    public function deleteInvitations(array $args): \AWS\Result { }

    /**
     * @param array{accountIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{unprocessedAccounts?:array<array{accountId?:string, errorCode?:"ClientError"|"InternalError", errorMessage?:string}>}>
     */
    public function deleteInvitationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteMember(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteMemberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{criteria?:array<string, array{eq?:array<string>, gt?:int, gte?:int, lt?:int, lte?:int, neq?:array<string>, prefix?:string}>, maxResults?:int, nextToken?:string, sortCriteria?:array{attributeName?:string, orderBy?:"ASC"|"DESC"}} $args
     * @return \AWS\Result<array{buckets?:array<array{accountId?:string, allowsUnencryptedObjectUploads?:"TRUE"|"FALSE"|"UNKNOWN", automatedDiscoveryMonitoringStatus?:"MONITORED"|"NOT_MONITORED", bucketArn?:string, bucketCreatedAt?:int|string|\DateTimeInterface, bucketName?:string, classifiableObjectCount?:int, classifiableSizeInBytes?:int, errorCode?:"ACCESS_DENIED"|"BUCKET_COUNT_EXCEEDS_QUOTA", errorMessage?:string, jobDetails?:array{isDefinedInJob?:"TRUE"|"FALSE"|"UNKNOWN", isMonitoredByJob?:"TRUE"|"FALSE"|"UNKNOWN", lastJobId?:string, lastJobRunTime?:int|string|\DateTimeInterface}, lastAutomatedDiscoveryTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface, objectCount?:int, objectCountByEncryptionType?:array{customerManaged?:int, kmsManaged?:int, s3Managed?:int, unencrypted?:int, unknown?:int}, publicAccess?:array{effectivePermission?:"PUBLIC"|"NOT_PUBLIC"|"UNKNOWN", permissionConfiguration?:array{accountLevelPermissions?:array{blockPublicAccess?:array{blockPublicAcls?:bool, blockPublicPolicy?:bool, ignorePublicAcls?:bool, restrictPublicBuckets?:bool}}, bucketLevelPermissions?:array{accessControlList?:array{allowsPublicReadAccess?:bool, allowsPublicWriteAccess?:bool}, blockPublicAccess?:array{blockPublicAcls?:bool, blockPublicPolicy?:bool, ignorePublicAcls?:bool, restrictPublicBuckets?:bool}, bucketPolicy?:array{allowsPublicReadAccess?:bool, allowsPublicWriteAccess?:bool}}}}, region?:string, replicationDetails?:array{replicated?:bool, replicatedExternally?:bool, replicationAccounts?:array<string>}, sensitivityScore?:int, serverSideEncryption?:array{kmsMasterKeyId?:string, type?:"NONE"|"AES256"|"aws:kms"|"aws:kms:dsse"}, sharedAccess?:"EXTERNAL"|"INTERNAL"|"NOT_SHARED"|"UNKNOWN", sizeInBytes?:int, sizeInBytesCompressed?:int, tags?:array<array{key?:string, value?:string}>, unclassifiableObjectCount?:array{fileType?:int, storageClass?:int, total?:int}, unclassifiableObjectSizeInBytes?:array{fileType?:int, storageClass?:int, total?:int}, versioning?:bool}>, nextToken?:string}>
     */
    public function describeBuckets(array $args = []): \AWS\Result { }

    /**
     * @param array{criteria?:array<string, array{eq?:array<string>, gt?:int, gte?:int, lt?:int, lte?:int, neq?:array<string>, prefix?:string}>, maxResults?:int, nextToken?:string, sortCriteria?:array{attributeName?:string, orderBy?:"ASC"|"DESC"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{buckets?:array<array{accountId?:string, allowsUnencryptedObjectUploads?:"TRUE"|"FALSE"|"UNKNOWN", automatedDiscoveryMonitoringStatus?:"MONITORED"|"NOT_MONITORED", bucketArn?:string, bucketCreatedAt?:int|string|\DateTimeInterface, bucketName?:string, classifiableObjectCount?:int, classifiableSizeInBytes?:int, errorCode?:"ACCESS_DENIED"|"BUCKET_COUNT_EXCEEDS_QUOTA", errorMessage?:string, jobDetails?:array{isDefinedInJob?:"TRUE"|"FALSE"|"UNKNOWN", isMonitoredByJob?:"TRUE"|"FALSE"|"UNKNOWN", lastJobId?:string, lastJobRunTime?:int|string|\DateTimeInterface}, lastAutomatedDiscoveryTime?:int|string|\DateTimeInterface, lastUpdated?:int|string|\DateTimeInterface, objectCount?:int, objectCountByEncryptionType?:array{customerManaged?:int, kmsManaged?:int, s3Managed?:int, unencrypted?:int, unknown?:int}, publicAccess?:array{effectivePermission?:"PUBLIC"|"NOT_PUBLIC"|"UNKNOWN", permissionConfiguration?:array{accountLevelPermissions?:array{blockPublicAccess?:array{blockPublicAcls?:bool, blockPublicPolicy?:bool, ignorePublicAcls?:bool, restrictPublicBuckets?:bool}}, bucketLevelPermissions?:array{accessControlList?:array{allowsPublicReadAccess?:bool, allowsPublicWriteAccess?:bool}, blockPublicAccess?:array{blockPublicAcls?:bool, blockPublicPolicy?:bool, ignorePublicAcls?:bool, restrictPublicBuckets?:bool}, bucketPolicy?:array{allowsPublicReadAccess?:bool, allowsPublicWriteAccess?:bool}}}}, region?:string, replicationDetails?:array{replicated?:bool, replicatedExternally?:bool, replicationAccounts?:array<string>}, sensitivityScore?:int, serverSideEncryption?:array{kmsMasterKeyId?:string, type?:"NONE"|"AES256"|"aws:kms"|"aws:kms:dsse"}, sharedAccess?:"EXTERNAL"|"INTERNAL"|"NOT_SHARED"|"UNKNOWN", sizeInBytes?:int, sizeInBytesCompressed?:int, tags?:array<array{key?:string, value?:string}>, unclassifiableObjectCount?:array{fileType?:int, storageClass?:int, total?:int}, unclassifiableObjectSizeInBytes?:array{fileType?:int, storageClass?:int, total?:int}, versioning?:bool}>, nextToken?:string}>
     */
    public function describeBucketsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string} $args
     * @return \AWS\Result<array{allowListIds?:array<string>, clientToken?:string, createdAt?:int|string|\DateTimeInterface, customDataIdentifierIds?:array<string>, description?:string, initialRun?:bool, jobArn?:string, jobId?:string, jobStatus?:"RUNNING"|"PAUSED"|"CANCELLED"|"COMPLETE"|"IDLE"|"USER_PAUSED", jobType?:"ONE_TIME"|"SCHEDULED", lastRunErrorStatus?:array{code?:"NONE"|"ERROR"}, lastRunTime?:int|string|\DateTimeInterface, managedDataIdentifierIds?:array<string>, managedDataIdentifierSelector?:"ALL"|"EXCLUDE"|"INCLUDE"|"NONE"|"RECOMMENDED", name?:string, s3JobDefinition?:array{bucketCriteria?:array{excludes?:array{and?:array<array{simpleCriterion?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", key?:"ACCOUNT_ID"|"S3_BUCKET_NAME"|"S3_BUCKET_EFFECTIVE_PERMISSION"|"S3_BUCKET_SHARED_ACCESS", values?:array<string>}, tagCriterion?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", tagValues?:array<array{key?:string, value?:string}>}}>}, includes?:array{and?:array<array{simpleCriterion?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", key?:"ACCOUNT_ID"|"S3_BUCKET_NAME"|"S3_BUCKET_EFFECTIVE_PERMISSION"|"S3_BUCKET_SHARED_ACCESS", values?:array<string>}, tagCriterion?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", tagValues?:array<array{key?:string, value?:string}>}}>}}, bucketDefinitions?:array<array{accountId:string, buckets:array<string>}>, scoping?:array{excludes?:array{and?:array<array{simpleScopeTerm?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", key?:"OBJECT_EXTENSION"|"OBJECT_LAST_MODIFIED_DATE"|"OBJECT_SIZE"|"OBJECT_KEY", values?:array<string>}, tagScopeTerm?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", key?:string, tagValues?:array<array{key?:string, value?:string}>, target?:"S3_OBJECT"}}>}, includes?:array{and?:array<array{simpleScopeTerm?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", key?:"OBJECT_EXTENSION"|"OBJECT_LAST_MODIFIED_DATE"|"OBJECT_SIZE"|"OBJECT_KEY", values?:array<string>}, tagScopeTerm?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", key?:string, tagValues?:array<array{key?:string, value?:string}>, target?:"S3_OBJECT"}}>}}}, samplingPercentage?:int, scheduleFrequency?:array{dailySchedule?:array{}, monthlySchedule?:array{dayOfMonth?:int}, weeklySchedule?:array{dayOfWeek?:"SUNDAY"|"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"}}, statistics?:array{approximateNumberOfObjectsToProcess?:float, numberOfRuns?:float}, tags?:array<string, string>, userPausedDetails?:array{jobExpiresAt?:int|string|\DateTimeInterface, jobImminentExpirationHealthEventArn?:string, jobPausedAt?:int|string|\DateTimeInterface}}>
     */
    public function describeClassificationJob(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{allowListIds?:array<string>, clientToken?:string, createdAt?:int|string|\DateTimeInterface, customDataIdentifierIds?:array<string>, description?:string, initialRun?:bool, jobArn?:string, jobId?:string, jobStatus?:"RUNNING"|"PAUSED"|"CANCELLED"|"COMPLETE"|"IDLE"|"USER_PAUSED", jobType?:"ONE_TIME"|"SCHEDULED", lastRunErrorStatus?:array{code?:"NONE"|"ERROR"}, lastRunTime?:int|string|\DateTimeInterface, managedDataIdentifierIds?:array<string>, managedDataIdentifierSelector?:"ALL"|"EXCLUDE"|"INCLUDE"|"NONE"|"RECOMMENDED", name?:string, s3JobDefinition?:array{bucketCriteria?:array{excludes?:array{and?:array<array{simpleCriterion?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", key?:"ACCOUNT_ID"|"S3_BUCKET_NAME"|"S3_BUCKET_EFFECTIVE_PERMISSION"|"S3_BUCKET_SHARED_ACCESS", values?:array<string>}, tagCriterion?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", tagValues?:array<array{key?:string, value?:string}>}}>}, includes?:array{and?:array<array{simpleCriterion?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", key?:"ACCOUNT_ID"|"S3_BUCKET_NAME"|"S3_BUCKET_EFFECTIVE_PERMISSION"|"S3_BUCKET_SHARED_ACCESS", values?:array<string>}, tagCriterion?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", tagValues?:array<array{key?:string, value?:string}>}}>}}, bucketDefinitions?:array<array{accountId:string, buckets:array<string>}>, scoping?:array{excludes?:array{and?:array<array{simpleScopeTerm?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", key?:"OBJECT_EXTENSION"|"OBJECT_LAST_MODIFIED_DATE"|"OBJECT_SIZE"|"OBJECT_KEY", values?:array<string>}, tagScopeTerm?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", key?:string, tagValues?:array<array{key?:string, value?:string}>, target?:"S3_OBJECT"}}>}, includes?:array{and?:array<array{simpleScopeTerm?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", key?:"OBJECT_EXTENSION"|"OBJECT_LAST_MODIFIED_DATE"|"OBJECT_SIZE"|"OBJECT_KEY", values?:array<string>}, tagScopeTerm?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", key?:string, tagValues?:array<array{key?:string, value?:string}>, target?:"S3_OBJECT"}}>}}}, samplingPercentage?:int, scheduleFrequency?:array{dailySchedule?:array{}, monthlySchedule?:array{dayOfMonth?:int}, weeklySchedule?:array{dayOfWeek?:"SUNDAY"|"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"}}, statistics?:array{approximateNumberOfObjectsToProcess?:float, numberOfRuns?:float}, tags?:array<string, string>, userPausedDetails?:array{jobExpiresAt?:int|string|\DateTimeInterface, jobImminentExpirationHealthEventArn?:string, jobPausedAt?:int|string|\DateTimeInterface}}>
     */
    public function describeClassificationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{autoEnable?:bool, maxAccountLimitReached?:bool}>
     */
    public function describeOrganizationConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{autoEnable?:bool, maxAccountLimitReached?:bool}>
     */
    public function describeOrganizationConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{}>
     */
    public function disableMacie(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disableMacieAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{adminAccountId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disableOrganizationAdminAccount(array $args): \AWS\Result { }

    /**
     * @param array{adminAccountId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disableOrganizationAdminAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateFromAdministratorAccount(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateFromAdministratorAccountAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateFromMasterAccount(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateFromMasterAccountAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateMember(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateMemberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, findingPublishingFrequency?:"FIFTEEN_MINUTES"|"ONE_HOUR"|"SIX_HOURS", status?:"PAUSED"|"ENABLED"} $args
     * @return \AWS\Result<array{}>
     */
    public function enableMacie(array $args = []): \AWS\Result { }

    /**
     * @param array{clientToken?:string, findingPublishingFrequency?:"FIFTEEN_MINUTES"|"ONE_HOUR"|"SIX_HOURS", status?:"PAUSED"|"ENABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function enableMacieAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{adminAccountId:string, clientToken?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function enableOrganizationAdminAccount(array $args): \AWS\Result { }

    /**
     * @param array{adminAccountId:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function enableOrganizationAdminAccountAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{administrator?:array{accountId?:string, invitationId?:string, invitedAt?:int|string|\DateTimeInterface, relationshipStatus?:"Enabled"|"Paused"|"Invited"|"Created"|"Removed"|"Resigned"|"EmailVerificationInProgress"|"EmailVerificationFailed"|"RegionDisabled"|"AccountSuspended"}}>
     */
    public function getAdministratorAccount(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{administrator?:array{accountId?:string, invitationId?:string, invitedAt?:int|string|\DateTimeInterface, relationshipStatus?:"Enabled"|"Paused"|"Invited"|"Created"|"Removed"|"Resigned"|"EmailVerificationInProgress"|"EmailVerificationFailed"|"RegionDisabled"|"AccountSuspended"}}>
     */
    public function getAdministratorAccountAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{arn?:string, createdAt?:int|string|\DateTimeInterface, criteria?:array{regex?:string, s3WordsList?:array{bucketName:string, objectKey:string}}, description?:string, id?:string, name?:string, status?:array{code:"OK"|"S3_OBJECT_NOT_FOUND"|"S3_USER_ACCESS_DENIED"|"S3_OBJECT_ACCESS_DENIED"|"S3_THROTTLED"|"S3_OBJECT_OVERSIZE"|"S3_OBJECT_EMPTY"|"UNKNOWN_ERROR", description?:string}, tags?:array<string, string>, updatedAt?:int|string|\DateTimeInterface}>
     */
    public function getAllowList(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, createdAt?:int|string|\DateTimeInterface, criteria?:array{regex?:string, s3WordsList?:array{bucketName:string, objectKey:string}}, description?:string, id?:string, name?:string, status?:array{code:"OK"|"S3_OBJECT_NOT_FOUND"|"S3_USER_ACCESS_DENIED"|"S3_OBJECT_ACCESS_DENIED"|"S3_THROTTLED"|"S3_OBJECT_OVERSIZE"|"S3_OBJECT_EMPTY"|"UNKNOWN_ERROR", description?:string}, tags?:array<string, string>, updatedAt?:int|string|\DateTimeInterface}>
     */
    public function getAllowListAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{autoEnableOrganizationMembers?:"ALL"|"NEW"|"NONE", classificationScopeId?:string, disabledAt?:int|string|\DateTimeInterface, firstEnabledAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, sensitivityInspectionTemplateId?:string, status?:"ENABLED"|"DISABLED"}>
     */
    public function getAutomatedDiscoveryConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{autoEnableOrganizationMembers?:"ALL"|"NEW"|"NONE", classificationScopeId?:string, disabledAt?:int|string|\DateTimeInterface, firstEnabledAt?:int|string|\DateTimeInterface, lastUpdatedAt?:int|string|\DateTimeInterface, sensitivityInspectionTemplateId?:string, status?:"ENABLED"|"DISABLED"}>
     */
    public function getAutomatedDiscoveryConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountId?:string} $args
     * @return \AWS\Result<array{bucketCount?:int, bucketCountByEffectivePermission?:array{publiclyAccessible?:int, publiclyReadable?:int, publiclyWritable?:int, unknown?:int}, bucketCountByEncryptionType?:array{kmsManaged?:int, s3Managed?:int, unencrypted?:int, unknown?:int}, bucketCountByObjectEncryptionRequirement?:array{allowsUnencryptedObjectUploads?:int, deniesUnencryptedObjectUploads?:int, unknown?:int}, bucketCountBySharedAccessType?:array{external?:int, internal?:int, notShared?:int, unknown?:int}, bucketStatisticsBySensitivity?:array{classificationError?:array{classifiableSizeInBytes?:int, publiclyAccessibleCount?:int, totalCount?:int, totalSizeInBytes?:int}, notClassified?:array{classifiableSizeInBytes?:int, publiclyAccessibleCount?:int, totalCount?:int, totalSizeInBytes?:int}, notSensitive?:array{classifiableSizeInBytes?:int, publiclyAccessibleCount?:int, totalCount?:int, totalSizeInBytes?:int}, sensitive?:array{classifiableSizeInBytes?:int, publiclyAccessibleCount?:int, totalCount?:int, totalSizeInBytes?:int}}, classifiableObjectCount?:int, classifiableSizeInBytes?:int, lastUpdated?:int|string|\DateTimeInterface, objectCount?:int, sizeInBytes?:int, sizeInBytesCompressed?:int, unclassifiableObjectCount?:array{fileType?:int, storageClass?:int, total?:int}, unclassifiableObjectSizeInBytes?:array{fileType?:int, storageClass?:int, total?:int}}>
     */
    public function getBucketStatistics(array $args = []): \AWS\Result { }

    /**
     * @param array{accountId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{bucketCount?:int, bucketCountByEffectivePermission?:array{publiclyAccessible?:int, publiclyReadable?:int, publiclyWritable?:int, unknown?:int}, bucketCountByEncryptionType?:array{kmsManaged?:int, s3Managed?:int, unencrypted?:int, unknown?:int}, bucketCountByObjectEncryptionRequirement?:array{allowsUnencryptedObjectUploads?:int, deniesUnencryptedObjectUploads?:int, unknown?:int}, bucketCountBySharedAccessType?:array{external?:int, internal?:int, notShared?:int, unknown?:int}, bucketStatisticsBySensitivity?:array{classificationError?:array{classifiableSizeInBytes?:int, publiclyAccessibleCount?:int, totalCount?:int, totalSizeInBytes?:int}, notClassified?:array{classifiableSizeInBytes?:int, publiclyAccessibleCount?:int, totalCount?:int, totalSizeInBytes?:int}, notSensitive?:array{classifiableSizeInBytes?:int, publiclyAccessibleCount?:int, totalCount?:int, totalSizeInBytes?:int}, sensitive?:array{classifiableSizeInBytes?:int, publiclyAccessibleCount?:int, totalCount?:int, totalSizeInBytes?:int}}, classifiableObjectCount?:int, classifiableSizeInBytes?:int, lastUpdated?:int|string|\DateTimeInterface, objectCount?:int, sizeInBytes?:int, sizeInBytesCompressed?:int, unclassifiableObjectCount?:array{fileType?:int, storageClass?:int, total?:int}, unclassifiableObjectSizeInBytes?:array{fileType?:int, storageClass?:int, total?:int}}>
     */
    public function getBucketStatisticsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{configuration?:array{s3Destination?:array{bucketName:string, keyPrefix?:string, kmsKeyArn:string}}}>
     */
    public function getClassificationExportConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{configuration?:array{s3Destination?:array{bucketName:string, keyPrefix?:string, kmsKeyArn:string}}}>
     */
    public function getClassificationExportConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{id?:string, name?:string, s3?:array{excludes:array{bucketNames:array<string>}}}>
     */
    public function getClassificationScope(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, name?:string, s3?:array{excludes:array{bucketNames:array<string>}}}>
     */
    public function getClassificationScopeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{arn?:string, createdAt?:int|string|\DateTimeInterface, deleted?:bool, description?:string, id?:string, ignoreWords?:array<string>, keywords?:array<string>, maximumMatchDistance?:int, name?:string, regex?:string, severityLevels?:array<array{occurrencesThreshold:int, severity:"LOW"|"MEDIUM"|"HIGH"}>, tags?:array<string, string>}>
     */
    public function getCustomDataIdentifier(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, createdAt?:int|string|\DateTimeInterface, deleted?:bool, description?:string, id?:string, ignoreWords?:array<string>, keywords?:array<string>, maximumMatchDistance?:int, name?:string, regex?:string, severityLevels?:array<array{occurrencesThreshold:int, severity:"LOW"|"MEDIUM"|"HIGH"}>, tags?:array<string, string>}>
     */
    public function getCustomDataIdentifierAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{findingCriteria?:array{criterion?:array<string, array{eq?:array<string>, eqExactMatch?:array<string>, gt?:int, gte?:int, lt?:int, lte?:int, neq?:array<string>}>}, groupBy:"resourcesAffected.s3Bucket.name"|"type"|"classificationDetails.jobId"|"severity.description", size?:int, sortCriteria?:array{attributeName?:"groupKey"|"count", orderBy?:"ASC"|"DESC"}} $args
     * @return \AWS\Result<array{countsByGroup?:array<array{count?:int, groupKey?:string}>}>
     */
    public function getFindingStatistics(array $args): \AWS\Result { }

    /**
     * @param array{findingCriteria?:array{criterion?:array<string, array{eq?:array<string>, eqExactMatch?:array<string>, gt?:int, gte?:int, lt?:int, lte?:int, neq?:array<string>}>}, groupBy:"resourcesAffected.s3Bucket.name"|"type"|"classificationDetails.jobId"|"severity.description", size?:int, sortCriteria?:array{attributeName?:"groupKey"|"count", orderBy?:"ASC"|"DESC"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{countsByGroup?:array<array{count?:int, groupKey?:string}>}>
     */
    public function getFindingStatisticsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{findingIds:array<string>, sortCriteria?:array{attributeName?:string, orderBy?:"ASC"|"DESC"}} $args
     * @return \AWS\Result<array{findings?:array<array{accountId?:string, archived?:bool, category?:"CLASSIFICATION"|"POLICY", classificationDetails?:array{detailedResultsLocation?:string, jobArn?:string, jobId?:string, originType?:"SENSITIVE_DATA_DISCOVERY_JOB"|"AUTOMATED_SENSITIVE_DATA_DISCOVERY", result?:array{additionalOccurrences?:bool, customDataIdentifiers?:array{detections?:array<array{arn?:string, count?:int, name?:string, occurrences?:array{cells?:array<array{cellReference?:string, column?:int, columnName?:string, row?:int}>, lineRanges?:array<array{end?:int, start?:int, startColumn?:int}>, offsetRanges?:array<array{end?:int, start?:int, startColumn?:int}>, pages?:array<array{lineRange?:array{end?:int, start?:int, startColumn?:int}, offsetRange?:array{end?:int, start?:int, startColumn?:int}, pageNumber?:int}>, records?:array<array{jsonPath?:string, recordIndex?:int}>}}>, totalCount?:int}, mimeType?:string, sensitiveData?:array<array{category?:"FINANCIAL_INFORMATION"|"PERSONAL_INFORMATION"|"CREDENTIALS"|"CUSTOM_IDENTIFIER", detections?:array<array{count?:int, occurrences?:array{cells?:array<array{cellReference?:string, column?:int, columnName?:string, row?:int}>, lineRanges?:array<array{end?:int, start?:int, startColumn?:int}>, offsetRanges?:array<array{end?:int, start?:int, startColumn?:int}>, pages?:array<array{lineRange?:array{end?:int, start?:int, startColumn?:int}, offsetRange?:array{end?:int, start?:int, startColumn?:int}, pageNumber?:int}>, records?:array<array{jsonPath?:string, recordIndex?:int}>}, type?:string}>, totalCount?:int}>, sizeClassified?:int, status?:array{code?:string, reason?:string}}}, count?:int, createdAt?:int|string|\DateTimeInterface, description?:string, id?:string, partition?:string, policyDetails?:array{action?:array{actionType?:"AWS_API_CALL", apiCallDetails?:array{api?:string, apiServiceName?:string, firstSeen?:int|string|\DateTimeInterface, lastSeen?:int|string|\DateTimeInterface}}, actor?:array{domainDetails?:array{domainName?:string}, ipAddressDetails?:array{ipAddressV4?:string, ipCity?:array{name?:string}, ipCountry?:array{code?:string, name?:string}, ipGeoLocation?:array{lat?:float, lon?:float}, ipOwner?:array{asn?:string, asnOrg?:string, isp?:string, org?:string}}, userIdentity?:array{assumedRole?:array{accessKeyId?:string, accountId?:string, arn?:string, principalId?:string, sessionContext?:array{attributes?:array{creationDate?:int|string|\DateTimeInterface, mfaAuthenticated?:bool}, sessionIssuer?:array{accountId?:string, arn?:string, principalId?:string, type?:string, userName?:string}}}, awsAccount?:array{accountId?:string, principalId?:string}, awsService?:array{invokedBy?:string}, federatedUser?:array{accessKeyId?:string, accountId?:string, arn?:string, principalId?:string, sessionContext?:array{attributes?:array{creationDate?:int|string|\DateTimeInterface, mfaAuthenticated?:bool}, sessionIssuer?:array{accountId?:string, arn?:string, principalId?:string, type?:string, userName?:string}}}, iamUser?:array{accountId?:string, arn?:string, principalId?:string, userName?:string}, root?:array{accountId?:string, arn?:string, principalId?:string}, type?:"AssumedRole"|"IAMUser"|"FederatedUser"|"Root"|"AWSAccount"|"AWSService"}}}, region?:string, resourcesAffected?:array{s3Bucket?:array{allowsUnencryptedObjectUploads?:"TRUE"|"FALSE"|"UNKNOWN", arn?:string, createdAt?:int|string|\DateTimeInterface, defaultServerSideEncryption?:array{encryptionType?:"NONE"|"AES256"|"aws:kms"|"UNKNOWN"|"aws:kms:dsse", kmsMasterKeyId?:string}, name?:string, owner?:array{displayName?:string, id?:string}, publicAccess?:array{effectivePermission?:"PUBLIC"|"NOT_PUBLIC"|"UNKNOWN", permissionConfiguration?:array{accountLevelPermissions?:array{blockPublicAccess?:array{blockPublicAcls?:bool, blockPublicPolicy?:bool, ignorePublicAcls?:bool, restrictPublicBuckets?:bool}}, bucketLevelPermissions?:array{accessControlList?:array{allowsPublicReadAccess?:bool, allowsPublicWriteAccess?:bool}, blockPublicAccess?:array{blockPublicAcls?:bool, blockPublicPolicy?:bool, ignorePublicAcls?:bool, restrictPublicBuckets?:bool}, bucketPolicy?:array{allowsPublicReadAccess?:bool, allowsPublicWriteAccess?:bool}}}}, tags?:array<array{key?:string, value?:string}>}, s3Object?:array{bucketArn?:string, eTag?:string, extension?:string, key?:string, lastModified?:int|string|\DateTimeInterface, path?:string, publicAccess?:bool, serverSideEncryption?:array{encryptionType?:"NONE"|"AES256"|"aws:kms"|"UNKNOWN"|"aws:kms:dsse", kmsMasterKeyId?:string}, size?:int, storageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"|"ONEZONE_IA"|"GLACIER"|"GLACIER_IR"|"OUTPOSTS", tags?:array<array{key?:string, value?:string}>, versionId?:string}}, sample?:bool, schemaVersion?:string, severity?:array{description?:"Low"|"Medium"|"High", score?:int}, title?:string, type?:"SensitiveData:S3Object/Multiple"|"SensitiveData:S3Object/Financial"|"SensitiveData:S3Object/Personal"|"SensitiveData:S3Object/Credentials"|"SensitiveData:S3Object/CustomIdentifier"|"Policy:IAMUser/S3BucketPublic"|"Policy:IAMUser/S3BucketSharedExternally"|"Policy:IAMUser/S3BucketReplicatedExternally"|"Policy:IAMUser/S3BucketEncryptionDisabled"|"Policy:IAMUser/S3BlockPublicAccessDisabled"|"Policy:IAMUser/S3BucketSharedWithCloudFront", updatedAt?:int|string|\DateTimeInterface}>}>
     */
    public function getFindings(array $args): \AWS\Result { }

    /**
     * @param array{findingIds:array<string>, sortCriteria?:array{attributeName?:string, orderBy?:"ASC"|"DESC"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{findings?:array<array{accountId?:string, archived?:bool, category?:"CLASSIFICATION"|"POLICY", classificationDetails?:array{detailedResultsLocation?:string, jobArn?:string, jobId?:string, originType?:"SENSITIVE_DATA_DISCOVERY_JOB"|"AUTOMATED_SENSITIVE_DATA_DISCOVERY", result?:array{additionalOccurrences?:bool, customDataIdentifiers?:array{detections?:array<array{arn?:string, count?:int, name?:string, occurrences?:array{cells?:array<array{cellReference?:string, column?:int, columnName?:string, row?:int}>, lineRanges?:array<array{end?:int, start?:int, startColumn?:int}>, offsetRanges?:array<array{end?:int, start?:int, startColumn?:int}>, pages?:array<array{lineRange?:array{end?:int, start?:int, startColumn?:int}, offsetRange?:array{end?:int, start?:int, startColumn?:int}, pageNumber?:int}>, records?:array<array{jsonPath?:string, recordIndex?:int}>}}>, totalCount?:int}, mimeType?:string, sensitiveData?:array<array{category?:"FINANCIAL_INFORMATION"|"PERSONAL_INFORMATION"|"CREDENTIALS"|"CUSTOM_IDENTIFIER", detections?:array<array{count?:int, occurrences?:array{cells?:array<array{cellReference?:string, column?:int, columnName?:string, row?:int}>, lineRanges?:array<array{end?:int, start?:int, startColumn?:int}>, offsetRanges?:array<array{end?:int, start?:int, startColumn?:int}>, pages?:array<array{lineRange?:array{end?:int, start?:int, startColumn?:int}, offsetRange?:array{end?:int, start?:int, startColumn?:int}, pageNumber?:int}>, records?:array<array{jsonPath?:string, recordIndex?:int}>}, type?:string}>, totalCount?:int}>, sizeClassified?:int, status?:array{code?:string, reason?:string}}}, count?:int, createdAt?:int|string|\DateTimeInterface, description?:string, id?:string, partition?:string, policyDetails?:array{action?:array{actionType?:"AWS_API_CALL", apiCallDetails?:array{api?:string, apiServiceName?:string, firstSeen?:int|string|\DateTimeInterface, lastSeen?:int|string|\DateTimeInterface}}, actor?:array{domainDetails?:array{domainName?:string}, ipAddressDetails?:array{ipAddressV4?:string, ipCity?:array{name?:string}, ipCountry?:array{code?:string, name?:string}, ipGeoLocation?:array{lat?:float, lon?:float}, ipOwner?:array{asn?:string, asnOrg?:string, isp?:string, org?:string}}, userIdentity?:array{assumedRole?:array{accessKeyId?:string, accountId?:string, arn?:string, principalId?:string, sessionContext?:array{attributes?:array{creationDate?:int|string|\DateTimeInterface, mfaAuthenticated?:bool}, sessionIssuer?:array{accountId?:string, arn?:string, principalId?:string, type?:string, userName?:string}}}, awsAccount?:array{accountId?:string, principalId?:string}, awsService?:array{invokedBy?:string}, federatedUser?:array{accessKeyId?:string, accountId?:string, arn?:string, principalId?:string, sessionContext?:array{attributes?:array{creationDate?:int|string|\DateTimeInterface, mfaAuthenticated?:bool}, sessionIssuer?:array{accountId?:string, arn?:string, principalId?:string, type?:string, userName?:string}}}, iamUser?:array{accountId?:string, arn?:string, principalId?:string, userName?:string}, root?:array{accountId?:string, arn?:string, principalId?:string}, type?:"AssumedRole"|"IAMUser"|"FederatedUser"|"Root"|"AWSAccount"|"AWSService"}}}, region?:string, resourcesAffected?:array{s3Bucket?:array{allowsUnencryptedObjectUploads?:"TRUE"|"FALSE"|"UNKNOWN", arn?:string, createdAt?:int|string|\DateTimeInterface, defaultServerSideEncryption?:array{encryptionType?:"NONE"|"AES256"|"aws:kms"|"UNKNOWN"|"aws:kms:dsse", kmsMasterKeyId?:string}, name?:string, owner?:array{displayName?:string, id?:string}, publicAccess?:array{effectivePermission?:"PUBLIC"|"NOT_PUBLIC"|"UNKNOWN", permissionConfiguration?:array{accountLevelPermissions?:array{blockPublicAccess?:array{blockPublicAcls?:bool, blockPublicPolicy?:bool, ignorePublicAcls?:bool, restrictPublicBuckets?:bool}}, bucketLevelPermissions?:array{accessControlList?:array{allowsPublicReadAccess?:bool, allowsPublicWriteAccess?:bool}, blockPublicAccess?:array{blockPublicAcls?:bool, blockPublicPolicy?:bool, ignorePublicAcls?:bool, restrictPublicBuckets?:bool}, bucketPolicy?:array{allowsPublicReadAccess?:bool, allowsPublicWriteAccess?:bool}}}}, tags?:array<array{key?:string, value?:string}>}, s3Object?:array{bucketArn?:string, eTag?:string, extension?:string, key?:string, lastModified?:int|string|\DateTimeInterface, path?:string, publicAccess?:bool, serverSideEncryption?:array{encryptionType?:"NONE"|"AES256"|"aws:kms"|"UNKNOWN"|"aws:kms:dsse", kmsMasterKeyId?:string}, size?:int, storageClass?:"STANDARD"|"REDUCED_REDUNDANCY"|"STANDARD_IA"|"INTELLIGENT_TIERING"|"DEEP_ARCHIVE"|"ONEZONE_IA"|"GLACIER"|"GLACIER_IR"|"OUTPOSTS", tags?:array<array{key?:string, value?:string}>, versionId?:string}}, sample?:bool, schemaVersion?:string, severity?:array{description?:"Low"|"Medium"|"High", score?:int}, title?:string, type?:"SensitiveData:S3Object/Multiple"|"SensitiveData:S3Object/Financial"|"SensitiveData:S3Object/Personal"|"SensitiveData:S3Object/Credentials"|"SensitiveData:S3Object/CustomIdentifier"|"Policy:IAMUser/S3BucketPublic"|"Policy:IAMUser/S3BucketSharedExternally"|"Policy:IAMUser/S3BucketReplicatedExternally"|"Policy:IAMUser/S3BucketEncryptionDisabled"|"Policy:IAMUser/S3BlockPublicAccessDisabled"|"Policy:IAMUser/S3BucketSharedWithCloudFront", updatedAt?:int|string|\DateTimeInterface}>}>
     */
    public function getFindingsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{action?:"ARCHIVE"|"NOOP", arn?:string, description?:string, findingCriteria?:array{criterion?:array<string, array{eq?:array<string>, eqExactMatch?:array<string>, gt?:int, gte?:int, lt?:int, lte?:int, neq?:array<string>}>}, id?:string, name?:string, position?:int, tags?:array<string, string>}>
     */
    public function getFindingsFilter(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{action?:"ARCHIVE"|"NOOP", arn?:string, description?:string, findingCriteria?:array{criterion?:array<string, array{eq?:array<string>, eqExactMatch?:array<string>, gt?:int, gte?:int, lt?:int, lte?:int, neq?:array<string>}>}, id?:string, name?:string, position?:int, tags?:array<string, string>}>
     */
    public function getFindingsFilterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{securityHubConfiguration?:array{publishClassificationFindings:bool, publishPolicyFindings:bool}}>
     */
    public function getFindingsPublicationConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{securityHubConfiguration?:array{publishClassificationFindings:bool, publishPolicyFindings:bool}}>
     */
    public function getFindingsPublicationConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{invitationsCount?:int}>
     */
    public function getInvitationsCount(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{invitationsCount?:int}>
     */
    public function getInvitationsCountAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{createdAt?:int|string|\DateTimeInterface, findingPublishingFrequency?:"FIFTEEN_MINUTES"|"ONE_HOUR"|"SIX_HOURS", serviceRole?:string, status?:"PAUSED"|"ENABLED", updatedAt?:int|string|\DateTimeInterface}>
     */
    public function getMacieSession(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt?:int|string|\DateTimeInterface, findingPublishingFrequency?:"FIFTEEN_MINUTES"|"ONE_HOUR"|"SIX_HOURS", serviceRole?:string, status?:"PAUSED"|"ENABLED", updatedAt?:int|string|\DateTimeInterface}>
     */
    public function getMacieSessionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{master?:array{accountId?:string, invitationId?:string, invitedAt?:int|string|\DateTimeInterface, relationshipStatus?:"Enabled"|"Paused"|"Invited"|"Created"|"Removed"|"Resigned"|"EmailVerificationInProgress"|"EmailVerificationFailed"|"RegionDisabled"|"AccountSuspended"}}>
     */
    public function getMasterAccount(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{master?:array{accountId?:string, invitationId?:string, invitedAt?:int|string|\DateTimeInterface, relationshipStatus?:"Enabled"|"Paused"|"Invited"|"Created"|"Removed"|"Resigned"|"EmailVerificationInProgress"|"EmailVerificationFailed"|"RegionDisabled"|"AccountSuspended"}}>
     */
    public function getMasterAccountAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{accountId?:string, administratorAccountId?:string, arn?:string, email?:string, invitedAt?:int|string|\DateTimeInterface, masterAccountId?:string, relationshipStatus?:"Enabled"|"Paused"|"Invited"|"Created"|"Removed"|"Resigned"|"EmailVerificationInProgress"|"EmailVerificationFailed"|"RegionDisabled"|"AccountSuspended", tags?:array<string, string>, updatedAt?:int|string|\DateTimeInterface}>
     */
    public function getMember(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{accountId?:string, administratorAccountId?:string, arn?:string, email?:string, invitedAt?:int|string|\DateTimeInterface, masterAccountId?:string, relationshipStatus?:"Enabled"|"Paused"|"Invited"|"Created"|"Removed"|"Resigned"|"EmailVerificationInProgress"|"EmailVerificationFailed"|"RegionDisabled"|"AccountSuspended", tags?:array<string, string>, updatedAt?:int|string|\DateTimeInterface}>
     */
    public function getMemberAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{profileUpdatedAt?:int|string|\DateTimeInterface, sensitivityScore?:int, sensitivityScoreOverridden?:bool, statistics?:array{totalBytesClassified?:int, totalDetections?:int, totalDetectionsSuppressed?:int, totalItemsClassified?:int, totalItemsSensitive?:int, totalItemsSkipped?:int, totalItemsSkippedInvalidEncryption?:int, totalItemsSkippedInvalidKms?:int, totalItemsSkippedPermissionDenied?:int}}>
     */
    public function getResourceProfile(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{profileUpdatedAt?:int|string|\DateTimeInterface, sensitivityScore?:int, sensitivityScoreOverridden?:bool, statistics?:array{totalBytesClassified?:int, totalDetections?:int, totalDetectionsSuppressed?:int, totalItemsClassified?:int, totalItemsSensitive?:int, totalItemsSkipped?:int, totalItemsSkippedInvalidEncryption?:int, totalItemsSkippedInvalidKms?:int, totalItemsSkippedPermissionDenied?:int}}>
     */
    public function getResourceProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{configuration?:array{kmsKeyId?:string, status:"ENABLED"|"DISABLED"}, retrievalConfiguration?:array{externalId?:string, retrievalMode:"CALLER_CREDENTIALS"|"ASSUME_ROLE", roleName?:string}}>
     */
    public function getRevealConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{configuration?:array{kmsKeyId?:string, status:"ENABLED"|"DISABLED"}, retrievalConfiguration?:array{externalId?:string, retrievalMode:"CALLER_CREDENTIALS"|"ASSUME_ROLE", roleName?:string}}>
     */
    public function getRevealConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{findingId:string} $args
     * @return \AWS\Result<array{error?:string, sensitiveDataOccurrences?:array<string, array<array{value:string}>>, status?:"SUCCESS"|"PROCESSING"|"ERROR"}>
     */
    public function getSensitiveDataOccurrences(array $args): \AWS\Result { }

    /**
     * @param array{findingId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{error?:string, sensitiveDataOccurrences?:array<string, array<array{value:string}>>, status?:"SUCCESS"|"PROCESSING"|"ERROR"}>
     */
    public function getSensitiveDataOccurrencesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{findingId:string} $args
     * @return \AWS\Result<array{code?:"AVAILABLE"|"UNAVAILABLE", reasons?:array<"OBJECT_EXCEEDS_SIZE_QUOTA"|"UNSUPPORTED_OBJECT_TYPE"|"UNSUPPORTED_FINDING_TYPE"|"INVALID_CLASSIFICATION_RESULT"|"OBJECT_UNAVAILABLE"|"ACCOUNT_NOT_IN_ORGANIZATION"|"MISSING_GET_MEMBER_PERMISSION"|"ROLE_TOO_PERMISSIVE"|"MEMBER_ROLE_TOO_PERMISSIVE"|"INVALID_RESULT_SIGNATURE"|"RESULT_NOT_SIGNED">}>
     */
    public function getSensitiveDataOccurrencesAvailability(array $args): \AWS\Result { }

    /**
     * @param array{findingId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{code?:"AVAILABLE"|"UNAVAILABLE", reasons?:array<"OBJECT_EXCEEDS_SIZE_QUOTA"|"UNSUPPORTED_OBJECT_TYPE"|"UNSUPPORTED_FINDING_TYPE"|"INVALID_CLASSIFICATION_RESULT"|"OBJECT_UNAVAILABLE"|"ACCOUNT_NOT_IN_ORGANIZATION"|"MISSING_GET_MEMBER_PERMISSION"|"ROLE_TOO_PERMISSIVE"|"MEMBER_ROLE_TOO_PERMISSIVE"|"INVALID_RESULT_SIGNATURE"|"RESULT_NOT_SIGNED">}>
     */
    public function getSensitiveDataOccurrencesAvailabilityAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{description?:string, excludes?:array{managedDataIdentifierIds?:array<string>}, includes?:array{allowListIds?:array<string>, customDataIdentifierIds?:array<string>, managedDataIdentifierIds?:array<string>}, name?:string, sensitivityInspectionTemplateId?:string}>
     */
    public function getSensitivityInspectionTemplate(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{description?:string, excludes?:array{managedDataIdentifierIds?:array<string>}, includes?:array{allowListIds?:array<string>, customDataIdentifierIds?:array<string>, managedDataIdentifierIds?:array<string>}, name?:string, sensitivityInspectionTemplateId?:string}>
     */
    public function getSensitivityInspectionTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filterBy?:array<array{comparator?:"GT"|"GTE"|"LT"|"LTE"|"EQ"|"NE"|"CONTAINS", key?:"accountId"|"serviceLimit"|"freeTrialStartDate"|"total", values?:array<string>}>, maxResults?:int, nextToken?:string, sortBy?:array{key?:"accountId"|"total"|"serviceLimitValue"|"freeTrialStartDate", orderBy?:"ASC"|"DESC"}, timeRange?:"MONTH_TO_DATE"|"PAST_30_DAYS"} $args
     * @return \AWS\Result<array{nextToken?:string, records?:array<array{accountId?:string, automatedDiscoveryFreeTrialStartDate?:int|string|\DateTimeInterface, freeTrialStartDate?:int|string|\DateTimeInterface, usage?:array<array{currency?:"USD", estimatedCost?:string, serviceLimit?:array{isServiceLimited?:bool, unit?:"TERABYTES", value?:int}, type?:"DATA_INVENTORY_EVALUATION"|"SENSITIVE_DATA_DISCOVERY"|"AUTOMATED_SENSITIVE_DATA_DISCOVERY"|"AUTOMATED_OBJECT_MONITORING"}>}>, timeRange?:"MONTH_TO_DATE"|"PAST_30_DAYS"}>
     */
    public function getUsageStatistics(array $args = []): \AWS\Result { }

    /**
     * @param array{filterBy?:array<array{comparator?:"GT"|"GTE"|"LT"|"LTE"|"EQ"|"NE"|"CONTAINS", key?:"accountId"|"serviceLimit"|"freeTrialStartDate"|"total", values?:array<string>}>, maxResults?:int, nextToken?:string, sortBy?:array{key?:"accountId"|"total"|"serviceLimitValue"|"freeTrialStartDate", orderBy?:"ASC"|"DESC"}, timeRange?:"MONTH_TO_DATE"|"PAST_30_DAYS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, records?:array<array{accountId?:string, automatedDiscoveryFreeTrialStartDate?:int|string|\DateTimeInterface, freeTrialStartDate?:int|string|\DateTimeInterface, usage?:array<array{currency?:"USD", estimatedCost?:string, serviceLimit?:array{isServiceLimited?:bool, unit?:"TERABYTES", value?:int}, type?:"DATA_INVENTORY_EVALUATION"|"SENSITIVE_DATA_DISCOVERY"|"AUTOMATED_SENSITIVE_DATA_DISCOVERY"|"AUTOMATED_OBJECT_MONITORING"}>}>, timeRange?:"MONTH_TO_DATE"|"PAST_30_DAYS"}>
     */
    public function getUsageStatisticsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{timeRange?:string} $args
     * @return \AWS\Result<array{timeRange?:"MONTH_TO_DATE"|"PAST_30_DAYS", usageTotals?:array<array{currency?:"USD", estimatedCost?:string, type?:"DATA_INVENTORY_EVALUATION"|"SENSITIVE_DATA_DISCOVERY"|"AUTOMATED_SENSITIVE_DATA_DISCOVERY"|"AUTOMATED_OBJECT_MONITORING"}>}>
     */
    public function getUsageTotals(array $args = []): \AWS\Result { }

    /**
     * @param array{timeRange?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{timeRange?:"MONTH_TO_DATE"|"PAST_30_DAYS", usageTotals?:array<array{currency?:"USD", estimatedCost?:string, type?:"DATA_INVENTORY_EVALUATION"|"SENSITIVE_DATA_DISCOVERY"|"AUTOMATED_SENSITIVE_DATA_DISCOVERY"|"AUTOMATED_OBJECT_MONITORING"}>}>
     */
    public function getUsageTotalsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{allowLists?:array<array{arn?:string, createdAt?:int|string|\DateTimeInterface, description?:string, id?:string, name?:string, updatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listAllowLists(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{allowLists?:array<array{arn?:string, createdAt?:int|string|\DateTimeInterface, description?:string, id?:string, name?:string, updatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listAllowListsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{accountIds?:array<string>, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{items?:array<array{accountId?:string, status?:"ENABLED"|"DISABLED"}>, nextToken?:string}>
     */
    public function listAutomatedDiscoveryAccounts(array $args = []): \AWS\Result { }

    /**
     * @param array{accountIds?:array<string>, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{accountId?:string, status?:"ENABLED"|"DISABLED"}>, nextToken?:string}>
     */
    public function listAutomatedDiscoveryAccountsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{filterCriteria?:array{excludes?:array<array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", key?:"jobType"|"jobStatus"|"createdAt"|"name", values?:array<string>}>, includes?:array<array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", key?:"jobType"|"jobStatus"|"createdAt"|"name", values?:array<string>}>}, maxResults?:int, nextToken?:string, sortCriteria?:array{attributeName?:"createdAt"|"jobStatus"|"name"|"jobType", orderBy?:"ASC"|"DESC"}} $args
     * @return \AWS\Result<array{items?:array<array{bucketCriteria?:array{excludes?:array{and?:array<array{simpleCriterion?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", key?:"ACCOUNT_ID"|"S3_BUCKET_NAME"|"S3_BUCKET_EFFECTIVE_PERMISSION"|"S3_BUCKET_SHARED_ACCESS", values?:array<string>}, tagCriterion?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", tagValues?:array<array{key?:string, value?:string}>}}>}, includes?:array{and?:array<array{simpleCriterion?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", key?:"ACCOUNT_ID"|"S3_BUCKET_NAME"|"S3_BUCKET_EFFECTIVE_PERMISSION"|"S3_BUCKET_SHARED_ACCESS", values?:array<string>}, tagCriterion?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", tagValues?:array<array{key?:string, value?:string}>}}>}}, bucketDefinitions?:array<array{accountId:string, buckets:array<string>}>, createdAt?:int|string|\DateTimeInterface, jobId?:string, jobStatus?:"RUNNING"|"PAUSED"|"CANCELLED"|"COMPLETE"|"IDLE"|"USER_PAUSED", jobType?:"ONE_TIME"|"SCHEDULED", lastRunErrorStatus?:array{code?:"NONE"|"ERROR"}, name?:string, userPausedDetails?:array{jobExpiresAt?:int|string|\DateTimeInterface, jobImminentExpirationHealthEventArn?:string, jobPausedAt?:int|string|\DateTimeInterface}}>, nextToken?:string}>
     */
    public function listClassificationJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{filterCriteria?:array{excludes?:array<array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", key?:"jobType"|"jobStatus"|"createdAt"|"name", values?:array<string>}>, includes?:array<array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", key?:"jobType"|"jobStatus"|"createdAt"|"name", values?:array<string>}>}, maxResults?:int, nextToken?:string, sortCriteria?:array{attributeName?:"createdAt"|"jobStatus"|"name"|"jobType", orderBy?:"ASC"|"DESC"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{bucketCriteria?:array{excludes?:array{and?:array<array{simpleCriterion?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", key?:"ACCOUNT_ID"|"S3_BUCKET_NAME"|"S3_BUCKET_EFFECTIVE_PERMISSION"|"S3_BUCKET_SHARED_ACCESS", values?:array<string>}, tagCriterion?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", tagValues?:array<array{key?:string, value?:string}>}}>}, includes?:array{and?:array<array{simpleCriterion?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", key?:"ACCOUNT_ID"|"S3_BUCKET_NAME"|"S3_BUCKET_EFFECTIVE_PERMISSION"|"S3_BUCKET_SHARED_ACCESS", values?:array<string>}, tagCriterion?:array{comparator?:"EQ"|"GT"|"GTE"|"LT"|"LTE"|"NE"|"CONTAINS"|"STARTS_WITH", tagValues?:array<array{key?:string, value?:string}>}}>}}, bucketDefinitions?:array<array{accountId:string, buckets:array<string>}>, createdAt?:int|string|\DateTimeInterface, jobId?:string, jobStatus?:"RUNNING"|"PAUSED"|"CANCELLED"|"COMPLETE"|"IDLE"|"USER_PAUSED", jobType?:"ONE_TIME"|"SCHEDULED", lastRunErrorStatus?:array{code?:"NONE"|"ERROR"}, name?:string, userPausedDetails?:array{jobExpiresAt?:int|string|\DateTimeInterface, jobImminentExpirationHealthEventArn?:string, jobPausedAt?:int|string|\DateTimeInterface}}>, nextToken?:string}>
     */
    public function listClassificationJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name?:string, nextToken?:string} $args
     * @return \AWS\Result<array{classificationScopes?:array<array{id?:string, name?:string}>, nextToken?:string}>
     */
    public function listClassificationScopes(array $args = []): \AWS\Result { }

    /**
     * @param array{name?:string, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{classificationScopes?:array<array{id?:string, name?:string}>, nextToken?:string}>
     */
    public function listClassificationScopesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{items?:array<array{arn?:string, createdAt?:int|string|\DateTimeInterface, description?:string, id?:string, name?:string}>, nextToken?:string}>
     */
    public function listCustomDataIdentifiers(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{arn?:string, createdAt?:int|string|\DateTimeInterface, description?:string, id?:string, name?:string}>, nextToken?:string}>
     */
    public function listCustomDataIdentifiersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{findingCriteria?:array{criterion?:array<string, array{eq?:array<string>, eqExactMatch?:array<string>, gt?:int, gte?:int, lt?:int, lte?:int, neq?:array<string>}>}, maxResults?:int, nextToken?:string, sortCriteria?:array{attributeName?:string, orderBy?:"ASC"|"DESC"}} $args
     * @return \AWS\Result<array{findingIds?:array<string>, nextToken?:string}>
     */
    public function listFindings(array $args = []): \AWS\Result { }

    /**
     * @param array{findingCriteria?:array{criterion?:array<string, array{eq?:array<string>, eqExactMatch?:array<string>, gt?:int, gte?:int, lt?:int, lte?:int, neq?:array<string>}>}, maxResults?:int, nextToken?:string, sortCriteria?:array{attributeName?:string, orderBy?:"ASC"|"DESC"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{findingIds?:array<string>, nextToken?:string}>
     */
    public function listFindingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{findingsFilterListItems?:array<array{action?:"ARCHIVE"|"NOOP", arn?:string, id?:string, name?:string, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listFindingsFilters(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{findingsFilterListItems?:array<array{action?:"ARCHIVE"|"NOOP", arn?:string, id?:string, name?:string, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listFindingsFiltersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{invitations?:array<array{accountId?:string, invitationId?:string, invitedAt?:int|string|\DateTimeInterface, relationshipStatus?:"Enabled"|"Paused"|"Invited"|"Created"|"Removed"|"Resigned"|"EmailVerificationInProgress"|"EmailVerificationFailed"|"RegionDisabled"|"AccountSuspended"}>, nextToken?:string}>
     */
    public function listInvitations(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{invitations?:array<array{accountId?:string, invitationId?:string, invitedAt?:int|string|\DateTimeInterface, relationshipStatus?:"Enabled"|"Paused"|"Invited"|"Created"|"Removed"|"Resigned"|"EmailVerificationInProgress"|"EmailVerificationFailed"|"RegionDisabled"|"AccountSuspended"}>, nextToken?:string}>
     */
    public function listInvitationsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string} $args
     * @return \AWS\Result<array{items?:array<array{category?:"FINANCIAL_INFORMATION"|"PERSONAL_INFORMATION"|"CREDENTIALS"|"CUSTOM_IDENTIFIER", id?:string}>, nextToken?:string}>
     */
    public function listManagedDataIdentifiers(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{category?:"FINANCIAL_INFORMATION"|"PERSONAL_INFORMATION"|"CREDENTIALS"|"CUSTOM_IDENTIFIER", id?:string}>, nextToken?:string}>
     */
    public function listManagedDataIdentifiersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, onlyAssociated?:string} $args
     * @return \AWS\Result<array{members?:array<array{accountId?:string, administratorAccountId?:string, arn?:string, email?:string, invitedAt?:int|string|\DateTimeInterface, masterAccountId?:string, relationshipStatus?:"Enabled"|"Paused"|"Invited"|"Created"|"Removed"|"Resigned"|"EmailVerificationInProgress"|"EmailVerificationFailed"|"RegionDisabled"|"AccountSuspended", tags?:array<string, string>, updatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listMembers(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, onlyAssociated?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{members?:array<array{accountId?:string, administratorAccountId?:string, arn?:string, email?:string, invitedAt?:int|string|\DateTimeInterface, masterAccountId?:string, relationshipStatus?:"Enabled"|"Paused"|"Invited"|"Created"|"Removed"|"Resigned"|"EmailVerificationInProgress"|"EmailVerificationFailed"|"RegionDisabled"|"AccountSuspended", tags?:array<string, string>, updatedAt?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listMembersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{adminAccounts?:array<array{accountId?:string, status?:"ENABLED"|"DISABLING_IN_PROGRESS"}>, nextToken?:string}>
     */
    public function listOrganizationAdminAccounts(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{adminAccounts?:array<array{accountId?:string, status?:"ENABLED"|"DISABLING_IN_PROGRESS"}>, nextToken?:string}>
     */
    public function listOrganizationAdminAccountsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, resourceArn:string} $args
     * @return \AWS\Result<array{artifacts?:array<array{arn:string, classificationResultStatus:string, sensitive?:bool}>, nextToken?:string}>
     */
    public function listResourceProfileArtifacts(array $args): \AWS\Result { }

    /**
     * @param array{nextToken?:string, resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{artifacts?:array<array{arn:string, classificationResultStatus:string, sensitive?:bool}>, nextToken?:string}>
     */
    public function listResourceProfileArtifactsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, resourceArn:string} $args
     * @return \AWS\Result<array{detections?:array<array{arn?:string, count?:int, id?:string, name?:string, suppressed?:bool, type?:"CUSTOM"|"MANAGED"}>, nextToken?:string}>
     */
    public function listResourceProfileDetections(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{detections?:array<array{arn?:string, count?:int, id?:string, name?:string, suppressed?:bool, type?:"CUSTOM"|"MANAGED"}>, nextToken?:string}>
     */
    public function listResourceProfileDetectionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, sensitivityInspectionTemplates?:array<array{id?:string, name?:string}>}>
     */
    public function listSensitivityInspectionTemplates(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, sensitivityInspectionTemplates?:array<array{id?:string, name?:string}>}>
     */
    public function listSensitivityInspectionTemplatesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{configuration:array{s3Destination?:array{bucketName:string, keyPrefix?:string, kmsKeyArn:string}}} $args
     * @return \AWS\Result<array{configuration?:array{s3Destination?:array{bucketName:string, keyPrefix?:string, kmsKeyArn:string}}}>
     */
    public function putClassificationExportConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{configuration:array{s3Destination?:array{bucketName:string, keyPrefix?:string, kmsKeyArn:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{configuration?:array{s3Destination?:array{bucketName:string, keyPrefix?:string, kmsKeyArn:string}}}>
     */
    public function putClassificationExportConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, securityHubConfiguration?:array{publishClassificationFindings:bool, publishPolicyFindings:bool}} $args
     * @return \AWS\Result<array{}>
     */
    public function putFindingsPublicationConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{clientToken?:string, securityHubConfiguration?:array{publishClassificationFindings:bool, publishPolicyFindings:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putFindingsPublicationConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{bucketCriteria?:array{excludes?:array{and?:array<array{simpleCriterion?:array{comparator?:"EQ"|"NE", key?:"ACCOUNT_ID"|"S3_BUCKET_NAME"|"S3_BUCKET_EFFECTIVE_PERMISSION"|"S3_BUCKET_SHARED_ACCESS"|"AUTOMATED_DISCOVERY_MONITORING_STATUS", values?:array<string>}, tagCriterion?:array{comparator?:"EQ"|"NE", tagValues?:array<array{key?:string, value?:string}>}}>}, includes?:array{and?:array<array{simpleCriterion?:array{comparator?:"EQ"|"NE", key?:"ACCOUNT_ID"|"S3_BUCKET_NAME"|"S3_BUCKET_EFFECTIVE_PERMISSION"|"S3_BUCKET_SHARED_ACCESS"|"AUTOMATED_DISCOVERY_MONITORING_STATUS", values?:array<string>}, tagCriterion?:array{comparator?:"EQ"|"NE", tagValues?:array<array{key?:string, value?:string}>}}>}}, maxResults?:int, nextToken?:string, sortCriteria?:array{attributeName?:"ACCOUNT_ID"|"RESOURCE_NAME"|"S3_CLASSIFIABLE_OBJECT_COUNT"|"S3_CLASSIFIABLE_SIZE_IN_BYTES", orderBy?:"ASC"|"DESC"}} $args
     * @return \AWS\Result<array{matchingResources?:array<array{matchingBucket?:array{accountId?:string, automatedDiscoveryMonitoringStatus?:"MONITORED"|"NOT_MONITORED", bucketName?:string, classifiableObjectCount?:int, classifiableSizeInBytes?:int, errorCode?:"ACCESS_DENIED"|"BUCKET_COUNT_EXCEEDS_QUOTA", errorMessage?:string, jobDetails?:array{isDefinedInJob?:"TRUE"|"FALSE"|"UNKNOWN", isMonitoredByJob?:"TRUE"|"FALSE"|"UNKNOWN", lastJobId?:string, lastJobRunTime?:int|string|\DateTimeInterface}, lastAutomatedDiscoveryTime?:int|string|\DateTimeInterface, objectCount?:int, objectCountByEncryptionType?:array{customerManaged?:int, kmsManaged?:int, s3Managed?:int, unencrypted?:int, unknown?:int}, sensitivityScore?:int, sizeInBytes?:int, sizeInBytesCompressed?:int, unclassifiableObjectCount?:array{fileType?:int, storageClass?:int, total?:int}, unclassifiableObjectSizeInBytes?:array{fileType?:int, storageClass?:int, total?:int}}}>, nextToken?:string}>
     */
    public function searchResources(array $args = []): \AWS\Result { }

    /**
     * @param array{bucketCriteria?:array{excludes?:array{and?:array<array{simpleCriterion?:array{comparator?:"EQ"|"NE", key?:"ACCOUNT_ID"|"S3_BUCKET_NAME"|"S3_BUCKET_EFFECTIVE_PERMISSION"|"S3_BUCKET_SHARED_ACCESS"|"AUTOMATED_DISCOVERY_MONITORING_STATUS", values?:array<string>}, tagCriterion?:array{comparator?:"EQ"|"NE", tagValues?:array<array{key?:string, value?:string}>}}>}, includes?:array{and?:array<array{simpleCriterion?:array{comparator?:"EQ"|"NE", key?:"ACCOUNT_ID"|"S3_BUCKET_NAME"|"S3_BUCKET_EFFECTIVE_PERMISSION"|"S3_BUCKET_SHARED_ACCESS"|"AUTOMATED_DISCOVERY_MONITORING_STATUS", values?:array<string>}, tagCriterion?:array{comparator?:"EQ"|"NE", tagValues?:array<array{key?:string, value?:string}>}}>}}, maxResults?:int, nextToken?:string, sortCriteria?:array{attributeName?:"ACCOUNT_ID"|"RESOURCE_NAME"|"S3_CLASSIFIABLE_OBJECT_COUNT"|"S3_CLASSIFIABLE_SIZE_IN_BYTES", orderBy?:"ASC"|"DESC"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{matchingResources?:array<array{matchingBucket?:array{accountId?:string, automatedDiscoveryMonitoringStatus?:"MONITORED"|"NOT_MONITORED", bucketName?:string, classifiableObjectCount?:int, classifiableSizeInBytes?:int, errorCode?:"ACCESS_DENIED"|"BUCKET_COUNT_EXCEEDS_QUOTA", errorMessage?:string, jobDetails?:array{isDefinedInJob?:"TRUE"|"FALSE"|"UNKNOWN", isMonitoredByJob?:"TRUE"|"FALSE"|"UNKNOWN", lastJobId?:string, lastJobRunTime?:int|string|\DateTimeInterface}, lastAutomatedDiscoveryTime?:int|string|\DateTimeInterface, objectCount?:int, objectCountByEncryptionType?:array{customerManaged?:int, kmsManaged?:int, s3Managed?:int, unencrypted?:int, unknown?:int}, sensitivityScore?:int, sizeInBytes?:int, sizeInBytesCompressed?:int, unclassifiableObjectCount?:array{fileType?:int, storageClass?:int, total?:int}, unclassifiableObjectSizeInBytes?:array{fileType?:int, storageClass?:int, total?:int}}}>, nextToken?:string}>
     */
    public function searchResourcesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags:array<string, string>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ignoreWords?:array<string>, keywords?:array<string>, maximumMatchDistance?:int, regex:string, sampleText:string} $args
     * @return \AWS\Result<array{matchCount?:int}>
     */
    public function testCustomDataIdentifier(array $args): \AWS\Result { }

    /**
     * @param array{ignoreWords?:array<string>, keywords?:array<string>, maximumMatchDistance?:int, regex:string, sampleText:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{matchCount?:int}>
     */
    public function testCustomDataIdentifierAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{criteria:array{regex?:string, s3WordsList?:array{bucketName:string, objectKey:string}}, description?:string, id:string, name:string} $args
     * @return \AWS\Result<array{arn?:string, id?:string}>
     */
    public function updateAllowList(array $args): \AWS\Result { }

    /**
     * @param array{criteria:array{regex?:string, s3WordsList?:array{bucketName:string, objectKey:string}}, description?:string, id:string, name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, id?:string}>
     */
    public function updateAllowListAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{autoEnableOrganizationMembers?:"ALL"|"NEW"|"NONE", status:"ENABLED"|"DISABLED"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateAutomatedDiscoveryConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{autoEnableOrganizationMembers?:"ALL"|"NEW"|"NONE", status:"ENABLED"|"DISABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateAutomatedDiscoveryConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string, jobStatus:"RUNNING"|"PAUSED"|"CANCELLED"|"COMPLETE"|"IDLE"|"USER_PAUSED"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateClassificationJob(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string, jobStatus:"RUNNING"|"PAUSED"|"CANCELLED"|"COMPLETE"|"IDLE"|"USER_PAUSED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateClassificationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, s3?:array{excludes:array{bucketNames:array<string>, operation:"ADD"|"REPLACE"|"REMOVE"}}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateClassificationScope(array $args): \AWS\Result { }

    /**
     * @param array{id:string, s3?:array{excludes:array{bucketNames:array<string>, operation:"ADD"|"REPLACE"|"REMOVE"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateClassificationScopeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{action?:"ARCHIVE"|"NOOP", clientToken?:string, description?:string, findingCriteria?:array{criterion?:array<string, array{eq?:array<string>, eqExactMatch?:array<string>, gt?:int, gte?:int, lt?:int, lte?:int, neq?:array<string>}>}, id:string, name?:string, position?:int} $args
     * @return \AWS\Result<array{arn?:string, id?:string}>
     */
    public function updateFindingsFilter(array $args): \AWS\Result { }

    /**
     * @param array{action?:"ARCHIVE"|"NOOP", clientToken?:string, description?:string, findingCriteria?:array{criterion?:array<string, array{eq?:array<string>, eqExactMatch?:array<string>, gt?:int, gte?:int, lt?:int, lte?:int, neq?:array<string>}>}, id:string, name?:string, position?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn?:string, id?:string}>
     */
    public function updateFindingsFilterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{findingPublishingFrequency?:"FIFTEEN_MINUTES"|"ONE_HOUR"|"SIX_HOURS", status?:"PAUSED"|"ENABLED"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateMacieSession(array $args = []): \AWS\Result { }

    /**
     * @param array{findingPublishingFrequency?:"FIFTEEN_MINUTES"|"ONE_HOUR"|"SIX_HOURS", status?:"PAUSED"|"ENABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateMacieSessionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, status:"PAUSED"|"ENABLED"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateMemberSession(array $args): \AWS\Result { }

    /**
     * @param array{id:string, status:"PAUSED"|"ENABLED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateMemberSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{autoEnable:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function updateOrganizationConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{autoEnable:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateOrganizationConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, sensitivityScoreOverride?:int} $args
     * @return \AWS\Result<array{}>
     */
    public function updateResourceProfile(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, sensitivityScoreOverride?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateResourceProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, suppressDataIdentifiers?:array<array{id?:string, type?:"CUSTOM"|"MANAGED"}>} $args
     * @return \AWS\Result<array{}>
     */
    public function updateResourceProfileDetections(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, suppressDataIdentifiers?:array<array{id?:string, type?:"CUSTOM"|"MANAGED"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateResourceProfileDetectionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{configuration:array{kmsKeyId?:string, status:"ENABLED"|"DISABLED"}, retrievalConfiguration?:array{retrievalMode:"CALLER_CREDENTIALS"|"ASSUME_ROLE", roleName?:string}} $args
     * @return \AWS\Result<array{configuration?:array{kmsKeyId?:string, status:"ENABLED"|"DISABLED"}, retrievalConfiguration?:array{externalId?:string, retrievalMode:"CALLER_CREDENTIALS"|"ASSUME_ROLE", roleName?:string}}>
     */
    public function updateRevealConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{configuration:array{kmsKeyId?:string, status:"ENABLED"|"DISABLED"}, retrievalConfiguration?:array{retrievalMode:"CALLER_CREDENTIALS"|"ASSUME_ROLE", roleName?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{configuration?:array{kmsKeyId?:string, status:"ENABLED"|"DISABLED"}, retrievalConfiguration?:array{externalId?:string, retrievalMode:"CALLER_CREDENTIALS"|"ASSUME_ROLE", roleName?:string}}>
     */
    public function updateRevealConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, excludes?:array{managedDataIdentifierIds?:array<string>}, id:string, includes?:array{allowListIds?:array<string>, customDataIdentifierIds?:array<string>, managedDataIdentifierIds?:array<string>}} $args
     * @return \AWS\Result<array{}>
     */
    public function updateSensitivityInspectionTemplate(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, excludes?:array{managedDataIdentifierIds?:array<string>}, id:string, includes?:array{allowListIds?:array<string>, customDataIdentifierIds?:array<string>, managedDataIdentifierIds?:array<string>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateSensitivityInspectionTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
