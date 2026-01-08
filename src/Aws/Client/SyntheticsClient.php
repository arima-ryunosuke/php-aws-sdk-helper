<?php
namespace AWS\Synthetics;

class SyntheticsClient
{
    /**
     * @param array{GroupIdentifier:string, ResourceArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function associateResource(array $args): \AWS\Result { }

    /**
     * @param array{GroupIdentifier:string, ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function associateResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Code:array{S3Bucket?:string, S3Key?:string, S3Version?:string, ZipFile?:string|resource|\Psr\Http\Message\StreamInterface, Handler:string}, ArtifactS3Location:string, ExecutionRoleArn:string, Schedule:array{Expression:string, DurationInSeconds?:int}, RunConfig?:array{TimeoutInSeconds?:int, MemoryInMB?:int, ActiveTracing?:bool, EnvironmentVariables?:array<string, string>}, SuccessRetentionPeriodInDays?:int, FailureRetentionPeriodInDays?:int, RuntimeVersion:string, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>, Ipv6AllowedForDualStack?:bool}, ResourcesToReplicateTags?:array<"lambda-function">, ProvisionedResourceCleanup?:"AUTOMATIC"|"OFF", Tags?:array<string, string>, ArtifactConfig?:array{S3Encryption?:array{EncryptionMode?:"SSE_S3"|"SSE_KMS", KmsKeyArn?:string}}} $args
     * @return \AWS\Result<array{Canary?:array{Id?:string, Name?:string, Code?:array{SourceLocationArn?:string, Handler?:string}, ExecutionRoleArn?:string, Schedule?:array{Expression?:string, DurationInSeconds?:int}, RunConfig?:array{TimeoutInSeconds?:int, MemoryInMB?:int, ActiveTracing?:bool}, SuccessRetentionPeriodInDays?:int, FailureRetentionPeriodInDays?:int, Status?:array{State?:"CREATING"|"READY"|"STARTING"|"RUNNING"|"UPDATING"|"STOPPING"|"STOPPED"|"ERROR"|"DELETING", StateReason?:string, StateReasonCode?:"INVALID_PERMISSIONS"|"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"UPDATE_PENDING"|"UPDATE_IN_PROGRESS"|"UPDATE_COMPLETE"|"ROLLBACK_COMPLETE"|"ROLLBACK_FAILED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"SYNC_DELETE_IN_PROGRESS"}, Timeline?:array{Created?:int|string|\DateTimeInterface, LastModified?:int|string|\DateTimeInterface, LastStarted?:int|string|\DateTimeInterface, LastStopped?:int|string|\DateTimeInterface}, ArtifactS3Location?:string, EngineArn?:string, RuntimeVersion?:string, VpcConfig?:array{VpcId?:string, SubnetIds?:array<string>, SecurityGroupIds?:array<string>, Ipv6AllowedForDualStack?:bool}, VisualReference?:array{BaseScreenshots?:array<array{ScreenshotName:string, IgnoreCoordinates?:array<string>}>, BaseCanaryRunId?:string}, ProvisionedResourceCleanup?:"AUTOMATIC"|"OFF", Tags?:array<string, string>, ArtifactConfig?:array{S3Encryption?:array{EncryptionMode?:"SSE_S3"|"SSE_KMS", KmsKeyArn?:string}}}}>
     */
    public function createCanary(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Code:array{S3Bucket?:string, S3Key?:string, S3Version?:string, ZipFile?:string|resource|\Psr\Http\Message\StreamInterface, Handler:string}, ArtifactS3Location:string, ExecutionRoleArn:string, Schedule:array{Expression:string, DurationInSeconds?:int}, RunConfig?:array{TimeoutInSeconds?:int, MemoryInMB?:int, ActiveTracing?:bool, EnvironmentVariables?:array<string, string>}, SuccessRetentionPeriodInDays?:int, FailureRetentionPeriodInDays?:int, RuntimeVersion:string, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>, Ipv6AllowedForDualStack?:bool}, ResourcesToReplicateTags?:array<"lambda-function">, ProvisionedResourceCleanup?:"AUTOMATIC"|"OFF", Tags?:array<string, string>, ArtifactConfig?:array{S3Encryption?:array{EncryptionMode?:"SSE_S3"|"SSE_KMS", KmsKeyArn?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{Canary?:array{Id?:string, Name?:string, Code?:array{SourceLocationArn?:string, Handler?:string}, ExecutionRoleArn?:string, Schedule?:array{Expression?:string, DurationInSeconds?:int}, RunConfig?:array{TimeoutInSeconds?:int, MemoryInMB?:int, ActiveTracing?:bool}, SuccessRetentionPeriodInDays?:int, FailureRetentionPeriodInDays?:int, Status?:array{State?:"CREATING"|"READY"|"STARTING"|"RUNNING"|"UPDATING"|"STOPPING"|"STOPPED"|"ERROR"|"DELETING", StateReason?:string, StateReasonCode?:"INVALID_PERMISSIONS"|"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"UPDATE_PENDING"|"UPDATE_IN_PROGRESS"|"UPDATE_COMPLETE"|"ROLLBACK_COMPLETE"|"ROLLBACK_FAILED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"SYNC_DELETE_IN_PROGRESS"}, Timeline?:array{Created?:int|string|\DateTimeInterface, LastModified?:int|string|\DateTimeInterface, LastStarted?:int|string|\DateTimeInterface, LastStopped?:int|string|\DateTimeInterface}, ArtifactS3Location?:string, EngineArn?:string, RuntimeVersion?:string, VpcConfig?:array{VpcId?:string, SubnetIds?:array<string>, SecurityGroupIds?:array<string>, Ipv6AllowedForDualStack?:bool}, VisualReference?:array{BaseScreenshots?:array<array{ScreenshotName:string, IgnoreCoordinates?:array<string>}>, BaseCanaryRunId?:string}, ProvisionedResourceCleanup?:"AUTOMATIC"|"OFF", Tags?:array<string, string>, ArtifactConfig?:array{S3Encryption?:array{EncryptionMode?:"SSE_S3"|"SSE_KMS", KmsKeyArn?:string}}}}>
     */
    public function createCanaryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, Tags?:array<string, string>} $args
     * @return \AWS\Result<array{Group?:array{Id?:string, Name?:string, Arn?:string, Tags?:array<string, string>, CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}}>
     */
    public function createGroup(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Group?:array{Id?:string, Name?:string, Arn?:string, Tags?:array<string, string>, CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}}>
     */
    public function createGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, DeleteLambda?:bool} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteCanary(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, DeleteLambda?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteCanaryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteGroup(array $args): \AWS\Result { }

    /**
     * @param array{GroupIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Names?:array<string>} $args
     * @return \AWS\Result<array{Canaries?:array<array{Id?:string, Name?:string, Code?:array{SourceLocationArn?:string, Handler?:string}, ExecutionRoleArn?:string, Schedule?:array{Expression?:string, DurationInSeconds?:int}, RunConfig?:array{TimeoutInSeconds?:int, MemoryInMB?:int, ActiveTracing?:bool}, SuccessRetentionPeriodInDays?:int, FailureRetentionPeriodInDays?:int, Status?:array{State?:"CREATING"|"READY"|"STARTING"|"RUNNING"|"UPDATING"|"STOPPING"|"STOPPED"|"ERROR"|"DELETING", StateReason?:string, StateReasonCode?:"INVALID_PERMISSIONS"|"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"UPDATE_PENDING"|"UPDATE_IN_PROGRESS"|"UPDATE_COMPLETE"|"ROLLBACK_COMPLETE"|"ROLLBACK_FAILED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"SYNC_DELETE_IN_PROGRESS"}, Timeline?:array{Created?:int|string|\DateTimeInterface, LastModified?:int|string|\DateTimeInterface, LastStarted?:int|string|\DateTimeInterface, LastStopped?:int|string|\DateTimeInterface}, ArtifactS3Location?:string, EngineArn?:string, RuntimeVersion?:string, VpcConfig?:array{VpcId?:string, SubnetIds?:array<string>, SecurityGroupIds?:array<string>, Ipv6AllowedForDualStack?:bool}, VisualReference?:array{BaseScreenshots?:array<array{ScreenshotName:string, IgnoreCoordinates?:array<string>}>, BaseCanaryRunId?:string}, ProvisionedResourceCleanup?:"AUTOMATIC"|"OFF", Tags?:array<string, string>, ArtifactConfig?:array{S3Encryption?:array{EncryptionMode?:"SSE_S3"|"SSE_KMS", KmsKeyArn?:string}}}>, NextToken?:string}>
     */
    public function describeCanaries(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Names?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{Canaries?:array<array{Id?:string, Name?:string, Code?:array{SourceLocationArn?:string, Handler?:string}, ExecutionRoleArn?:string, Schedule?:array{Expression?:string, DurationInSeconds?:int}, RunConfig?:array{TimeoutInSeconds?:int, MemoryInMB?:int, ActiveTracing?:bool}, SuccessRetentionPeriodInDays?:int, FailureRetentionPeriodInDays?:int, Status?:array{State?:"CREATING"|"READY"|"STARTING"|"RUNNING"|"UPDATING"|"STOPPING"|"STOPPED"|"ERROR"|"DELETING", StateReason?:string, StateReasonCode?:"INVALID_PERMISSIONS"|"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"UPDATE_PENDING"|"UPDATE_IN_PROGRESS"|"UPDATE_COMPLETE"|"ROLLBACK_COMPLETE"|"ROLLBACK_FAILED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"SYNC_DELETE_IN_PROGRESS"}, Timeline?:array{Created?:int|string|\DateTimeInterface, LastModified?:int|string|\DateTimeInterface, LastStarted?:int|string|\DateTimeInterface, LastStopped?:int|string|\DateTimeInterface}, ArtifactS3Location?:string, EngineArn?:string, RuntimeVersion?:string, VpcConfig?:array{VpcId?:string, SubnetIds?:array<string>, SecurityGroupIds?:array<string>, Ipv6AllowedForDualStack?:bool}, VisualReference?:array{BaseScreenshots?:array<array{ScreenshotName:string, IgnoreCoordinates?:array<string>}>, BaseCanaryRunId?:string}, ProvisionedResourceCleanup?:"AUTOMATIC"|"OFF", Tags?:array<string, string>, ArtifactConfig?:array{S3Encryption?:array{EncryptionMode?:"SSE_S3"|"SSE_KMS", KmsKeyArn?:string}}}>, NextToken?:string}>
     */
    public function describeCanariesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Names?:array<string>} $args
     * @return \AWS\Result<array{CanariesLastRun?:array<array{CanaryName?:string, LastRun?:array{Id?:string, Name?:string, Status?:array{State?:"RUNNING"|"PASSED"|"FAILED", StateReason?:string, StateReasonCode?:"CANARY_FAILURE"|"EXECUTION_FAILURE"}, Timeline?:array{Started?:int|string|\DateTimeInterface, Completed?:int|string|\DateTimeInterface}, ArtifactS3Location?:string}}>, NextToken?:string}>
     */
    public function describeCanariesLastRun(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, Names?:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{CanariesLastRun?:array<array{CanaryName?:string, LastRun?:array{Id?:string, Name?:string, Status?:array{State?:"RUNNING"|"PASSED"|"FAILED", StateReason?:string, StateReasonCode?:"CANARY_FAILURE"|"EXECUTION_FAILURE"}, Timeline?:array{Started?:int|string|\DateTimeInterface, Completed?:int|string|\DateTimeInterface}, ArtifactS3Location?:string}}>, NextToken?:string}>
     */
    public function describeCanariesLastRunAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{RuntimeVersions?:array<array{VersionName?:string, Description?:string, ReleaseDate?:int|string|\DateTimeInterface, DeprecationDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeRuntimeVersions(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{RuntimeVersions?:array<array{VersionName?:string, Description?:string, ReleaseDate?:int|string|\DateTimeInterface, DeprecationDate?:int|string|\DateTimeInterface}>, NextToken?:string}>
     */
    public function describeRuntimeVersionsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupIdentifier:string, ResourceArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function disassociateResource(array $args): \AWS\Result { }

    /**
     * @param array{GroupIdentifier:string, ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function disassociateResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{Canary?:array{Id?:string, Name?:string, Code?:array{SourceLocationArn?:string, Handler?:string}, ExecutionRoleArn?:string, Schedule?:array{Expression?:string, DurationInSeconds?:int}, RunConfig?:array{TimeoutInSeconds?:int, MemoryInMB?:int, ActiveTracing?:bool}, SuccessRetentionPeriodInDays?:int, FailureRetentionPeriodInDays?:int, Status?:array{State?:"CREATING"|"READY"|"STARTING"|"RUNNING"|"UPDATING"|"STOPPING"|"STOPPED"|"ERROR"|"DELETING", StateReason?:string, StateReasonCode?:"INVALID_PERMISSIONS"|"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"UPDATE_PENDING"|"UPDATE_IN_PROGRESS"|"UPDATE_COMPLETE"|"ROLLBACK_COMPLETE"|"ROLLBACK_FAILED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"SYNC_DELETE_IN_PROGRESS"}, Timeline?:array{Created?:int|string|\DateTimeInterface, LastModified?:int|string|\DateTimeInterface, LastStarted?:int|string|\DateTimeInterface, LastStopped?:int|string|\DateTimeInterface}, ArtifactS3Location?:string, EngineArn?:string, RuntimeVersion?:string, VpcConfig?:array{VpcId?:string, SubnetIds?:array<string>, SecurityGroupIds?:array<string>, Ipv6AllowedForDualStack?:bool}, VisualReference?:array{BaseScreenshots?:array<array{ScreenshotName:string, IgnoreCoordinates?:array<string>}>, BaseCanaryRunId?:string}, ProvisionedResourceCleanup?:"AUTOMATIC"|"OFF", Tags?:array<string, string>, ArtifactConfig?:array{S3Encryption?:array{EncryptionMode?:"SSE_S3"|"SSE_KMS", KmsKeyArn?:string}}}}>
     */
    public function getCanary(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Canary?:array{Id?:string, Name?:string, Code?:array{SourceLocationArn?:string, Handler?:string}, ExecutionRoleArn?:string, Schedule?:array{Expression?:string, DurationInSeconds?:int}, RunConfig?:array{TimeoutInSeconds?:int, MemoryInMB?:int, ActiveTracing?:bool}, SuccessRetentionPeriodInDays?:int, FailureRetentionPeriodInDays?:int, Status?:array{State?:"CREATING"|"READY"|"STARTING"|"RUNNING"|"UPDATING"|"STOPPING"|"STOPPED"|"ERROR"|"DELETING", StateReason?:string, StateReasonCode?:"INVALID_PERMISSIONS"|"CREATE_PENDING"|"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"UPDATE_PENDING"|"UPDATE_IN_PROGRESS"|"UPDATE_COMPLETE"|"ROLLBACK_COMPLETE"|"ROLLBACK_FAILED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"SYNC_DELETE_IN_PROGRESS"}, Timeline?:array{Created?:int|string|\DateTimeInterface, LastModified?:int|string|\DateTimeInterface, LastStarted?:int|string|\DateTimeInterface, LastStopped?:int|string|\DateTimeInterface}, ArtifactS3Location?:string, EngineArn?:string, RuntimeVersion?:string, VpcConfig?:array{VpcId?:string, SubnetIds?:array<string>, SecurityGroupIds?:array<string>, Ipv6AllowedForDualStack?:bool}, VisualReference?:array{BaseScreenshots?:array<array{ScreenshotName:string, IgnoreCoordinates?:array<string>}>, BaseCanaryRunId?:string}, ProvisionedResourceCleanup?:"AUTOMATIC"|"OFF", Tags?:array<string, string>, ArtifactConfig?:array{S3Encryption?:array{EncryptionMode?:"SSE_S3"|"SSE_KMS", KmsKeyArn?:string}}}}>
     */
    public function getCanaryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string, NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{CanaryRuns?:array<array{Id?:string, Name?:string, Status?:array{State?:"RUNNING"|"PASSED"|"FAILED", StateReason?:string, StateReasonCode?:"CANARY_FAILURE"|"EXECUTION_FAILURE"}, Timeline?:array{Started?:int|string|\DateTimeInterface, Completed?:int|string|\DateTimeInterface}, ArtifactS3Location?:string}>, NextToken?:string}>
     */
    public function getCanaryRuns(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{CanaryRuns?:array<array{Id?:string, Name?:string, Status?:array{State?:"RUNNING"|"PASSED"|"FAILED", StateReason?:string, StateReasonCode?:"CANARY_FAILURE"|"EXECUTION_FAILURE"}, Timeline?:array{Started?:int|string|\DateTimeInterface, Completed?:int|string|\DateTimeInterface}, ArtifactS3Location?:string}>, NextToken?:string}>
     */
    public function getCanaryRunsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{GroupIdentifier:string} $args
     * @return \AWS\Result<array{Group?:array{Id?:string, Name?:string, Arn?:string, Tags?:array<string, string>, CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}}>
     */
    public function getGroup(array $args): \AWS\Result { }

    /**
     * @param array{GroupIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Group?:array{Id?:string, Name?:string, Arn?:string, Tags?:array<string, string>, CreatedTime?:int|string|\DateTimeInterface, LastModifiedTime?:int|string|\DateTimeInterface}}>
     */
    public function getGroupAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, ResourceArn:string} $args
     * @return \AWS\Result<array{Groups?:array<array{Id?:string, Name?:string, Arn?:string}>, NextToken?:string}>
     */
    public function listAssociatedGroups(array $args): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, ResourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Groups?:array<array{Id?:string, Name?:string, Arn?:string}>, NextToken?:string}>
     */
    public function listAssociatedGroupsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, GroupIdentifier:string} $args
     * @return \AWS\Result<array{Resources?:array<string>, NextToken?:string}>
     */
    public function listGroupResources(array $args): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int, GroupIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{Resources?:array<string>, NextToken?:string}>
     */
    public function listGroupResourcesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{Groups?:array<array{Id?:string, Name?:string, Arn?:string}>, NextToken?:string}>
     */
    public function listGroups(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{Groups?:array<array{Id?:string, Name?:string, Arn?:string}>, NextToken?:string}>
     */
    public function listGroupsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function startCanary(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function startCanaryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{Name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopCanary(array $args): \AWS\Result { }

    /**
     * @param array{Name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopCanaryAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{Name:string, Code?:array{S3Bucket?:string, S3Key?:string, S3Version?:string, ZipFile?:string|resource|\Psr\Http\Message\StreamInterface, Handler:string}, ExecutionRoleArn?:string, RuntimeVersion?:string, Schedule?:array{Expression:string, DurationInSeconds?:int}, RunConfig?:array{TimeoutInSeconds?:int, MemoryInMB?:int, ActiveTracing?:bool, EnvironmentVariables?:array<string, string>}, SuccessRetentionPeriodInDays?:int, FailureRetentionPeriodInDays?:int, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>, Ipv6AllowedForDualStack?:bool}, VisualReference?:array{BaseScreenshots?:array<array{ScreenshotName:string, IgnoreCoordinates?:array<string>}>, BaseCanaryRunId:string}, ArtifactS3Location?:string, ArtifactConfig?:array{S3Encryption?:array{EncryptionMode?:"SSE_S3"|"SSE_KMS", KmsKeyArn?:string}}, ProvisionedResourceCleanup?:"AUTOMATIC"|"OFF"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateCanary(array $args): \AWS\Result { }

    /**
     * @param array{Name:string, Code?:array{S3Bucket?:string, S3Key?:string, S3Version?:string, ZipFile?:string|resource|\Psr\Http\Message\StreamInterface, Handler:string}, ExecutionRoleArn?:string, RuntimeVersion?:string, Schedule?:array{Expression:string, DurationInSeconds?:int}, RunConfig?:array{TimeoutInSeconds?:int, MemoryInMB?:int, ActiveTracing?:bool, EnvironmentVariables?:array<string, string>}, SuccessRetentionPeriodInDays?:int, FailureRetentionPeriodInDays?:int, VpcConfig?:array{SubnetIds?:array<string>, SecurityGroupIds?:array<string>, Ipv6AllowedForDualStack?:bool}, VisualReference?:array{BaseScreenshots?:array<array{ScreenshotName:string, IgnoreCoordinates?:array<string>}>, BaseCanaryRunId:string}, ArtifactS3Location?:string, ArtifactConfig?:array{S3Encryption?:array{EncryptionMode?:"SSE_S3"|"SSE_KMS", KmsKeyArn?:string}}, ProvisionedResourceCleanup?:"AUTOMATIC"|"OFF"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateCanaryAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
