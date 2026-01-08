<?php
namespace AWS\SecretsManager;

class SecretsManagerClient
{
    /**
     * @param array{SecretIdList?:array<string>, Filters?:array<array{Key?:"description"|"name"|"tag-key"|"tag-value"|"primary-region"|"owning-service"|"all", Values?:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \AWS\Result<array{SecretValues?:array<array{ARN?:string, Name?:string, VersionId?:string, SecretBinary?:string|resource|\Psr\Http\Message\StreamInterface, SecretString?:string, VersionStages?:array<string>, CreatedDate?:int|string|\DateTimeInterface}>, NextToken?:string, Errors?:array<array{SecretId?:string, ErrorCode?:string, Message?:string}>}>
     */
    public function batchGetSecretValue(array $args = []): \AWS\Result { }

    /**
     * @param array{SecretIdList?:array<string>, Filters?:array<array{Key?:"description"|"name"|"tag-key"|"tag-value"|"primary-region"|"owning-service"|"all", Values?:array<string>}>, MaxResults?:int, NextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{SecretValues?:array<array{ARN?:string, Name?:string, VersionId?:string, SecretBinary?:string|resource|\Psr\Http\Message\StreamInterface, SecretString?:string, VersionStages?:array<string>, CreatedDate?:int|string|\DateTimeInterface}>, NextToken?:string, Errors?:array<array{SecretId?:string, ErrorCode?:string, Message?:string}>}>
     */
    public function batchGetSecretValueAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SecretId:string} $args
     * @return \AWS\Result<array{ARN?:string, Name?:string, VersionId?:string}>
     */
    public function cancelRotateSecret(array $args): \AWS\Result { }

    /**
     * @param array{SecretId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ARN?:string, Name?:string, VersionId?:string}>
     */
    public function cancelRotateSecretAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, ClientRequestToken?:string, Description?:string, KmsKeyId?:string, SecretBinary?:string|resource|\Psr\Http\Message\StreamInterface, SecretString?:string, Tags?:array<array{Key?:string, Value?:string}>, AddReplicaRegions?:array<array{Region?:string, KmsKeyId?:string}>, ForceOverwriteReplicaSecret?:bool} $args
     * @return \AWS\Result<array{ARN?:string, Name?:string, VersionId?:string, ReplicationStatus?:array<array{Region?:string, KmsKeyId?:string, Status?:"InSync"|"Failed"|"InProgress", StatusMessage?:string, LastAccessedDate?:int|string|\DateTimeInterface}>}>
     */
    public function createSecret(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, ClientRequestToken?:string, Description?:string, KmsKeyId?:string, SecretBinary?:string|resource|\Psr\Http\Message\StreamInterface, SecretString?:string, Tags?:array<array{Key?:string, Value?:string}>, AddReplicaRegions?:array<array{Region?:string, KmsKeyId?:string}>, ForceOverwriteReplicaSecret?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{ARN?:string, Name?:string, VersionId?:string, ReplicationStatus?:array<array{Region?:string, KmsKeyId?:string, Status?:"InSync"|"Failed"|"InProgress", StatusMessage?:string, LastAccessedDate?:int|string|\DateTimeInterface}>}>
     */
    public function createSecretAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SecretId:string} $args
     * @return \AWS\Result<array{ARN?:string, Name?:string}>
     */
    public function deleteResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{SecretId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ARN?:string, Name?:string}>
     */
    public function deleteResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SecretId:string, RecoveryWindowInDays?:int, ForceDeleteWithoutRecovery?:bool} $args
     * @return \AWS\Result<array{ARN?:string, Name?:string, DeletionDate?:int|string|\DateTimeInterface}>
     */
    public function deleteSecret(array $args): \AWS\Result { }

    /**
     * @param array{SecretId:string, RecoveryWindowInDays?:int, ForceDeleteWithoutRecovery?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{ARN?:string, Name?:string, DeletionDate?:int|string|\DateTimeInterface}>
     */
    public function deleteSecretAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SecretId:string} $args
     * @return \AWS\Result<array{ARN?:string, Name?:string, Description?:string, KmsKeyId?:string, RotationEnabled?:bool, RotationLambdaARN?:string, RotationRules?:array{AutomaticallyAfterDays?:int, Duration?:string, ScheduleExpression?:string}, LastRotatedDate?:int|string|\DateTimeInterface, LastChangedDate?:int|string|\DateTimeInterface, LastAccessedDate?:int|string|\DateTimeInterface, DeletedDate?:int|string|\DateTimeInterface, NextRotationDate?:int|string|\DateTimeInterface, Tags?:array<array{Key?:string, Value?:string}>, VersionIdsToStages?:array<string, array<string>>, OwningService?:string, CreatedDate?:int|string|\DateTimeInterface, PrimaryRegion?:string, ReplicationStatus?:array<array{Region?:string, KmsKeyId?:string, Status?:"InSync"|"Failed"|"InProgress", StatusMessage?:string, LastAccessedDate?:int|string|\DateTimeInterface}>}>
     */
    public function describeSecret(array $args): \AWS\Result { }

    /**
     * @param array{SecretId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ARN?:string, Name?:string, Description?:string, KmsKeyId?:string, RotationEnabled?:bool, RotationLambdaARN?:string, RotationRules?:array{AutomaticallyAfterDays?:int, Duration?:string, ScheduleExpression?:string}, LastRotatedDate?:int|string|\DateTimeInterface, LastChangedDate?:int|string|\DateTimeInterface, LastAccessedDate?:int|string|\DateTimeInterface, DeletedDate?:int|string|\DateTimeInterface, NextRotationDate?:int|string|\DateTimeInterface, Tags?:array<array{Key?:string, Value?:string}>, VersionIdsToStages?:array<string, array<string>>, OwningService?:string, CreatedDate?:int|string|\DateTimeInterface, PrimaryRegion?:string, ReplicationStatus?:array<array{Region?:string, KmsKeyId?:string, Status?:"InSync"|"Failed"|"InProgress", StatusMessage?:string, LastAccessedDate?:int|string|\DateTimeInterface}>}>
     */
    public function describeSecretAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{PasswordLength?:int, ExcludeCharacters?:string, ExcludeNumbers?:bool, ExcludePunctuation?:bool, ExcludeUppercase?:bool, ExcludeLowercase?:bool, IncludeSpace?:bool, RequireEachIncludedType?:bool} $args
     * @return \AWS\Result<array{RandomPassword?:string}>
     */
    public function getRandomPassword(array $args = []): \AWS\Result { }

    /**
     * @param array{PasswordLength?:int, ExcludeCharacters?:string, ExcludeNumbers?:bool, ExcludePunctuation?:bool, ExcludeUppercase?:bool, ExcludeLowercase?:bool, IncludeSpace?:bool, RequireEachIncludedType?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{RandomPassword?:string}>
     */
    public function getRandomPasswordAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SecretId:string} $args
     * @return \AWS\Result<array{ARN?:string, Name?:string, ResourcePolicy?:string}>
     */
    public function getResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{SecretId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ARN?:string, Name?:string, ResourcePolicy?:string}>
     */
    public function getResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SecretId:string, VersionId?:string, VersionStage?:string} $args
     * @return \AWS\Result<array{ARN?:string, Name?:string, VersionId?:string, SecretBinary?:string|resource|\Psr\Http\Message\StreamInterface, SecretString?:string, VersionStages?:array<string>, CreatedDate?:int|string|\DateTimeInterface}>
     */
    public function getSecretValue(array $args): \AWS\Result { }

    /**
     * @param array{SecretId:string, VersionId?:string, VersionStage?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ARN?:string, Name?:string, VersionId?:string, SecretBinary?:string|resource|\Psr\Http\Message\StreamInterface, SecretString?:string, VersionStages?:array<string>, CreatedDate?:int|string|\DateTimeInterface}>
     */
    public function getSecretValueAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SecretId:string, MaxResults?:int, NextToken?:string, IncludeDeprecated?:bool} $args
     * @return \AWS\Result<array{Versions?:array<array{VersionId?:string, VersionStages?:array<string>, LastAccessedDate?:int|string|\DateTimeInterface, CreatedDate?:int|string|\DateTimeInterface, KmsKeyIds?:array<string>}>, NextToken?:string, ARN?:string, Name?:string}>
     */
    public function listSecretVersionIds(array $args): \AWS\Result { }

    /**
     * @param array{SecretId:string, MaxResults?:int, NextToken?:string, IncludeDeprecated?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{Versions?:array<array{VersionId?:string, VersionStages?:array<string>, LastAccessedDate?:int|string|\DateTimeInterface, CreatedDate?:int|string|\DateTimeInterface, KmsKeyIds?:array<string>}>, NextToken?:string, ARN?:string, Name?:string}>
     */
    public function listSecretVersionIdsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{IncludePlannedDeletion?:bool, MaxResults?:int, NextToken?:string, Filters?:array<array{Key?:"description"|"name"|"tag-key"|"tag-value"|"primary-region"|"owning-service"|"all", Values?:array<string>}>, SortOrder?:"asc"|"desc"} $args
     * @return \AWS\Result<array{SecretList?:array<array{ARN?:string, Name?:string, Description?:string, KmsKeyId?:string, RotationEnabled?:bool, RotationLambdaARN?:string, RotationRules?:array{AutomaticallyAfterDays?:int, Duration?:string, ScheduleExpression?:string}, LastRotatedDate?:int|string|\DateTimeInterface, LastChangedDate?:int|string|\DateTimeInterface, LastAccessedDate?:int|string|\DateTimeInterface, DeletedDate?:int|string|\DateTimeInterface, NextRotationDate?:int|string|\DateTimeInterface, Tags?:array<array{Key?:string, Value?:string}>, SecretVersionsToStages?:array<string, array<string>>, OwningService?:string, CreatedDate?:int|string|\DateTimeInterface, PrimaryRegion?:string}>, NextToken?:string}>
     */
    public function listSecrets(array $args = []): \AWS\Result { }

    /**
     * @param array{IncludePlannedDeletion?:bool, MaxResults?:int, NextToken?:string, Filters?:array<array{Key?:"description"|"name"|"tag-key"|"tag-value"|"primary-region"|"owning-service"|"all", Values?:array<string>}>, SortOrder?:"asc"|"desc"} $args
     * @return \GuzzleHttp\Promise\Promise<array{SecretList?:array<array{ARN?:string, Name?:string, Description?:string, KmsKeyId?:string, RotationEnabled?:bool, RotationLambdaARN?:string, RotationRules?:array{AutomaticallyAfterDays?:int, Duration?:string, ScheduleExpression?:string}, LastRotatedDate?:int|string|\DateTimeInterface, LastChangedDate?:int|string|\DateTimeInterface, LastAccessedDate?:int|string|\DateTimeInterface, DeletedDate?:int|string|\DateTimeInterface, NextRotationDate?:int|string|\DateTimeInterface, Tags?:array<array{Key?:string, Value?:string}>, SecretVersionsToStages?:array<string, array<string>>, OwningService?:string, CreatedDate?:int|string|\DateTimeInterface, PrimaryRegion?:string}>, NextToken?:string}>
     */
    public function listSecretsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SecretId:string, ResourcePolicy:string, BlockPublicPolicy?:bool} $args
     * @return \AWS\Result<array{ARN?:string, Name?:string}>
     */
    public function putResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{SecretId:string, ResourcePolicy:string, BlockPublicPolicy?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{ARN?:string, Name?:string}>
     */
    public function putResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SecretId:string, ClientRequestToken?:string, SecretBinary?:string|resource|\Psr\Http\Message\StreamInterface, SecretString?:string, VersionStages?:array<string>, RotationToken?:string} $args
     * @return \AWS\Result<array{ARN?:string, Name?:string, VersionId?:string, VersionStages?:array<string>}>
     */
    public function putSecretValue(array $args): \AWS\Result { }

    /**
     * @param array{SecretId:string, ClientRequestToken?:string, SecretBinary?:string|resource|\Psr\Http\Message\StreamInterface, SecretString?:string, VersionStages?:array<string>, RotationToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ARN?:string, Name?:string, VersionId?:string, VersionStages?:array<string>}>
     */
    public function putSecretValueAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SecretId:string, RemoveReplicaRegions:array<string>} $args
     * @return \AWS\Result<array{ARN?:string, ReplicationStatus?:array<array{Region?:string, KmsKeyId?:string, Status?:"InSync"|"Failed"|"InProgress", StatusMessage?:string, LastAccessedDate?:int|string|\DateTimeInterface}>}>
     */
    public function removeRegionsFromReplication(array $args): \AWS\Result { }

    /**
     * @param array{SecretId:string, RemoveReplicaRegions:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{ARN?:string, ReplicationStatus?:array<array{Region?:string, KmsKeyId?:string, Status?:"InSync"|"Failed"|"InProgress", StatusMessage?:string, LastAccessedDate?:int|string|\DateTimeInterface}>}>
     */
    public function removeRegionsFromReplicationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SecretId:string, AddReplicaRegions:array<array{Region?:string, KmsKeyId?:string}>, ForceOverwriteReplicaSecret?:bool} $args
     * @return \AWS\Result<array{ARN?:string, ReplicationStatus?:array<array{Region?:string, KmsKeyId?:string, Status?:"InSync"|"Failed"|"InProgress", StatusMessage?:string, LastAccessedDate?:int|string|\DateTimeInterface}>}>
     */
    public function replicateSecretToRegions(array $args): \AWS\Result { }

    /**
     * @param array{SecretId:string, AddReplicaRegions:array<array{Region?:string, KmsKeyId?:string}>, ForceOverwriteReplicaSecret?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{ARN?:string, ReplicationStatus?:array<array{Region?:string, KmsKeyId?:string, Status?:"InSync"|"Failed"|"InProgress", StatusMessage?:string, LastAccessedDate?:int|string|\DateTimeInterface}>}>
     */
    public function replicateSecretToRegionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SecretId:string} $args
     * @return \AWS\Result<array{ARN?:string, Name?:string}>
     */
    public function restoreSecret(array $args): \AWS\Result { }

    /**
     * @param array{SecretId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ARN?:string, Name?:string}>
     */
    public function restoreSecretAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SecretId:string, ClientRequestToken?:string, RotationLambdaARN?:string, RotationRules?:array{AutomaticallyAfterDays?:int, Duration?:string, ScheduleExpression?:string}, RotateImmediately?:bool} $args
     * @return \AWS\Result<array{ARN?:string, Name?:string, VersionId?:string}>
     */
    public function rotateSecret(array $args): \AWS\Result { }

    /**
     * @param array{SecretId:string, ClientRequestToken?:string, RotationLambdaARN?:string, RotationRules?:array{AutomaticallyAfterDays?:int, Duration?:string, ScheduleExpression?:string}, RotateImmediately?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{ARN?:string, Name?:string, VersionId?:string}>
     */
    public function rotateSecretAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SecretId:string} $args
     * @return \AWS\Result<array{ARN?:string}>
     */
    public function stopReplicationToReplica(array $args): \AWS\Result { }

    /**
     * @param array{SecretId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ARN?:string}>
     */
    public function stopReplicationToReplicaAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SecretId:string, Tags:array<array{Key?:string, Value?:string}>} $args
     * @return \AWS\Result<void>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{SecretId:string, Tags:array<array{Key?:string, Value?:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SecretId:string, TagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{SecretId:string, TagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SecretId:string, ClientRequestToken?:string, Description?:string, KmsKeyId?:string, SecretBinary?:string|resource|\Psr\Http\Message\StreamInterface, SecretString?:string} $args
     * @return \AWS\Result<array{ARN?:string, Name?:string, VersionId?:string}>
     */
    public function updateSecret(array $args): \AWS\Result { }

    /**
     * @param array{SecretId:string, ClientRequestToken?:string, Description?:string, KmsKeyId?:string, SecretBinary?:string|resource|\Psr\Http\Message\StreamInterface, SecretString?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ARN?:string, Name?:string, VersionId?:string}>
     */
    public function updateSecretAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SecretId:string, VersionStage:string, RemoveFromVersionId?:string, MoveToVersionId?:string} $args
     * @return \AWS\Result<array{ARN?:string, Name?:string}>
     */
    public function updateSecretVersionStage(array $args): \AWS\Result { }

    /**
     * @param array{SecretId:string, VersionStage:string, RemoveFromVersionId?:string, MoveToVersionId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ARN?:string, Name?:string}>
     */
    public function updateSecretVersionStageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{SecretId?:string, ResourcePolicy:string} $args
     * @return \AWS\Result<array{PolicyValidationPassed?:bool, ValidationErrors?:array<array{CheckName?:string, ErrorMessage?:string}>}>
     */
    public function validateResourcePolicy(array $args): \AWS\Result { }

    /**
     * @param array{SecretId?:string, ResourcePolicy:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{PolicyValidationPassed?:bool, ValidationErrors?:array<array{CheckName?:string, ErrorMessage?:string}>}>
     */
    public function validateResourcePolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
