<?php
namespace AWS\Cloud9;

class Cloud9Client
{
    /**
     * @param array{name:string, description?:string, clientRequestToken?:string, instanceType:string, subnetId?:string, imageId:string, automaticStopTimeMinutes?:int, ownerArn?:string, tags?:array<array{Key:string, Value:string}>, connectionType?:"CONNECT_SSH"|"CONNECT_SSM", dryRun?:bool} $args
     * @return \AWS\Result<array{environmentId?:string}>
     */
    public function createEnvironmentEC2(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, clientRequestToken?:string, instanceType:string, subnetId?:string, imageId:string, automaticStopTimeMinutes?:int, ownerArn?:string, tags?:array<array{Key:string, Value:string}>, connectionType?:"CONNECT_SSH"|"CONNECT_SSM", dryRun?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{environmentId?:string}>
     */
    public function createEnvironmentEC2Async(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, userArn:string, permissions:"read-write"|"read-only"} $args
     * @return \AWS\Result<array{membership:array{permissions:"owner"|"read-write"|"read-only", userId:string, userArn:string, environmentId:string, lastAccess?:int|string|\DateTimeInterface}}>
     */
    public function createEnvironmentMembership(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, userArn:string, permissions:"read-write"|"read-only"} $args
     * @return \GuzzleHttp\Promise\Promise<array{membership:array{permissions:"owner"|"read-write"|"read-only", userId:string, userArn:string, environmentId:string, lastAccess?:int|string|\DateTimeInterface}}>
     */
    public function createEnvironmentMembershipAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, userArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteEnvironmentMembership(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, userArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteEnvironmentMembershipAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{userArn?:string, environmentId?:string, permissions?:array<"owner"|"read-write"|"read-only">, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{memberships?:array<array{permissions:"owner"|"read-write"|"read-only", userId:string, userArn:string, environmentId:string, lastAccess?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function describeEnvironmentMemberships(array $args = []): \AWS\Result { }

    /**
     * @param array{userArn?:string, environmentId?:string, permissions?:array<"owner"|"read-write"|"read-only">, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{memberships?:array<array{permissions:"owner"|"read-write"|"read-only", userId:string, userArn:string, environmentId:string, lastAccess?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function describeEnvironmentMembershipsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string} $args
     * @return \AWS\Result<array{status:"error"|"creating"|"connecting"|"ready"|"stopping"|"stopped"|"deleting", message:string}>
     */
    public function describeEnvironmentStatus(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{status:"error"|"creating"|"connecting"|"ready"|"stopping"|"stopped"|"deleting", message:string}>
     */
    public function describeEnvironmentStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentIds:array<string>} $args
     * @return \AWS\Result<array{environments?:array<array{id?:string, name?:string, description?:string, type:"ssh"|"ec2", connectionType?:"CONNECT_SSH"|"CONNECT_SSM", arn:string, ownerArn:string, lifecycle?:array{status?:"CREATING"|"CREATED"|"CREATE_FAILED"|"DELETING"|"DELETE_FAILED", reason?:string, failureResource?:string}, managedCredentialsStatus?:"ENABLED_ON_CREATE"|"ENABLED_BY_OWNER"|"DISABLED_BY_DEFAULT"|"DISABLED_BY_OWNER"|"DISABLED_BY_COLLABORATOR"|"PENDING_REMOVAL_BY_COLLABORATOR"|"PENDING_START_REMOVAL_BY_COLLABORATOR"|"PENDING_REMOVAL_BY_OWNER"|"PENDING_START_REMOVAL_BY_OWNER"|"FAILED_REMOVAL_BY_COLLABORATOR"|"FAILED_REMOVAL_BY_OWNER"}>}>
     */
    public function describeEnvironments(array $args): \AWS\Result { }

    /**
     * @param array{environmentIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{environments?:array<array{id?:string, name?:string, description?:string, type:"ssh"|"ec2", connectionType?:"CONNECT_SSH"|"CONNECT_SSM", arn:string, ownerArn:string, lifecycle?:array{status?:"CREATING"|"CREATED"|"CREATE_FAILED"|"DELETING"|"DELETE_FAILED", reason?:string, failureResource?:string}, managedCredentialsStatus?:"ENABLED_ON_CREATE"|"ENABLED_BY_OWNER"|"DISABLED_BY_DEFAULT"|"DISABLED_BY_OWNER"|"DISABLED_BY_COLLABORATOR"|"PENDING_REMOVAL_BY_COLLABORATOR"|"PENDING_START_REMOVAL_BY_COLLABORATOR"|"PENDING_REMOVAL_BY_OWNER"|"PENDING_START_REMOVAL_BY_OWNER"|"FAILED_REMOVAL_BY_COLLABORATOR"|"FAILED_REMOVAL_BY_OWNER"}>}>
     */
    public function describeEnvironmentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{nextToken?:string, environmentIds?:array<string>}>
     */
    public function listEnvironments(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, environmentIds?:array<string>}>
     */
    public function listEnvironmentsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

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
     * @param array{environmentId:string, name?:string, description?:string, managedCredentialsAction?:"ENABLE"|"DISABLE"} $args
     * @return \AWS\Result<array{}>
     */
    public function updateEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, name?:string, description?:string, managedCredentialsAction?:"ENABLE"|"DISABLE"} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{environmentId:string, userArn:string, permissions:"read-write"|"read-only"} $args
     * @return \AWS\Result<array{membership?:array{permissions:"owner"|"read-write"|"read-only", userId:string, userArn:string, environmentId:string, lastAccess?:int|string|\DateTimeInterface}}>
     */
    public function updateEnvironmentMembership(array $args): \AWS\Result { }

    /**
     * @param array{environmentId:string, userArn:string, permissions:"read-write"|"read-only"} $args
     * @return \GuzzleHttp\Promise\Promise<array{membership?:array{permissions:"owner"|"read-write"|"read-only", userId:string, userArn:string, environmentId:string, lastAccess?:int|string|\DateTimeInterface}}>
     */
    public function updateEnvironmentMembershipAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
