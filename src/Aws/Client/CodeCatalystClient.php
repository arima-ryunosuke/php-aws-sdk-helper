<?php
namespace AWS\CodeCatalyst;

class CodeCatalystClient
{
    /**
     * @param array{name:string, expiresTime?:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{secret:string, name:string, expiresTime:int|string|\DateTimeInterface, accessTokenId:string}>
     */
    public function createAccessToken(array $args): \AWS\Result { }

    /**
     * @param array{name:string, expiresTime?:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{secret:string, name:string, expiresTime:int|string|\DateTimeInterface, accessTokenId:string}>
     */
    public function createAccessTokenAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{spaceName:string, projectName:string, repositories?:array<array{repositoryName:string, branchName?:string}>, clientToken?:string, alias?:string, ides?:array<array{runtime?:string, name?:string}>, instanceType:"dev.standard1.small"|"dev.standard1.medium"|"dev.standard1.large"|"dev.standard1.xlarge", inactivityTimeoutMinutes?:int, persistentStorage:array{sizeInGiB:int}, vpcConnectionName?:string} $args
     * @return \AWS\Result<array{spaceName:string, projectName:string, id:string, vpcConnectionName?:string}>
     */
    public function createDevEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{spaceName:string, projectName:string, repositories?:array<array{repositoryName:string, branchName?:string}>, clientToken?:string, alias?:string, ides?:array<array{runtime?:string, name?:string}>, instanceType:"dev.standard1.small"|"dev.standard1.medium"|"dev.standard1.large"|"dev.standard1.xlarge", inactivityTimeoutMinutes?:int, persistentStorage:array{sizeInGiB:int}, vpcConnectionName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{spaceName:string, projectName:string, id:string, vpcConnectionName?:string}>
     */
    public function createDevEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{spaceName:string, displayName:string, description?:string} $args
     * @return \AWS\Result<array{spaceName?:string, name:string, displayName?:string, description?:string}>
     */
    public function createProject(array $args): \AWS\Result { }

    /**
     * @param array{spaceName:string, displayName:string, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{spaceName?:string, name:string, displayName?:string, description?:string}>
     */
    public function createProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{spaceName:string, projectName:string, name:string, description?:string} $args
     * @return \AWS\Result<array{spaceName:string, projectName:string, name:string, description?:string}>
     */
    public function createSourceRepository(array $args): \AWS\Result { }

    /**
     * @param array{spaceName:string, projectName:string, name:string, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{spaceName:string, projectName:string, name:string, description?:string}>
     */
    public function createSourceRepositoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{spaceName:string, projectName:string, sourceRepositoryName:string, name:string, headCommitId?:string} $args
     * @return \AWS\Result<array{ref?:string, name?:string, lastUpdatedTime?:int|string|\DateTimeInterface, headCommitId?:string}>
     */
    public function createSourceRepositoryBranch(array $args): \AWS\Result { }

    /**
     * @param array{spaceName:string, projectName:string, sourceRepositoryName:string, name:string, headCommitId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ref?:string, name?:string, lastUpdatedTime?:int|string|\DateTimeInterface, headCommitId?:string}>
     */
    public function createSourceRepositoryBranchAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAccessToken(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAccessTokenAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{spaceName:string, projectName:string, id:string} $args
     * @return \AWS\Result<array{spaceName:string, projectName:string, id:string}>
     */
    public function deleteDevEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{spaceName:string, projectName:string, id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{spaceName:string, projectName:string, id:string}>
     */
    public function deleteDevEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{spaceName:string, name:string} $args
     * @return \AWS\Result<array{spaceName:string, name:string, displayName?:string}>
     */
    public function deleteProject(array $args): \AWS\Result { }

    /**
     * @param array{spaceName:string, name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{spaceName:string, name:string, displayName?:string}>
     */
    public function deleteProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{spaceName:string, projectName:string, name:string} $args
     * @return \AWS\Result<array{spaceName:string, projectName:string, name:string}>
     */
    public function deleteSourceRepository(array $args): \AWS\Result { }

    /**
     * @param array{spaceName:string, projectName:string, name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{spaceName:string, projectName:string, name:string}>
     */
    public function deleteSourceRepositoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{name:string, displayName?:string}>
     */
    public function deleteSpace(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name:string, displayName?:string}>
     */
    public function deleteSpaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{spaceName:string, projectName:string, id:string} $args
     * @return \AWS\Result<array{spaceName:string, projectName:string, id:string, lastUpdatedTime:int|string|\DateTimeInterface, creatorId:string, status:"PENDING"|"RUNNING"|"STARTING"|"STOPPING"|"STOPPED"|"FAILED"|"DELETING"|"DELETED", statusReason?:string, repositories:array<array{repositoryName:string, branchName?:string}>, alias?:string, ides?:array<array{runtime?:string, name?:string}>, instanceType:"dev.standard1.small"|"dev.standard1.medium"|"dev.standard1.large"|"dev.standard1.xlarge", inactivityTimeoutMinutes:int, persistentStorage:array{sizeInGiB:int}, vpcConnectionName?:string}>
     */
    public function getDevEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{spaceName:string, projectName:string, id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{spaceName:string, projectName:string, id:string, lastUpdatedTime:int|string|\DateTimeInterface, creatorId:string, status:"PENDING"|"RUNNING"|"STARTING"|"STOPPING"|"STOPPED"|"FAILED"|"DELETING"|"DELETED", statusReason?:string, repositories:array<array{repositoryName:string, branchName?:string}>, alias?:string, ides?:array<array{runtime?:string, name?:string}>, instanceType:"dev.standard1.small"|"dev.standard1.medium"|"dev.standard1.large"|"dev.standard1.xlarge", inactivityTimeoutMinutes:int, persistentStorage:array{sizeInGiB:int}, vpcConnectionName?:string}>
     */
    public function getDevEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{spaceName:string, name:string} $args
     * @return \AWS\Result<array{spaceName?:string, name:string, displayName?:string, description?:string}>
     */
    public function getProject(array $args): \AWS\Result { }

    /**
     * @param array{spaceName:string, name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{spaceName?:string, name:string, displayName?:string, description?:string}>
     */
    public function getProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{spaceName:string, projectName:string, name:string} $args
     * @return \AWS\Result<array{spaceName:string, projectName:string, name:string, description?:string, lastUpdatedTime:int|string|\DateTimeInterface, createdTime:int|string|\DateTimeInterface}>
     */
    public function getSourceRepository(array $args): \AWS\Result { }

    /**
     * @param array{spaceName:string, projectName:string, name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{spaceName:string, projectName:string, name:string, description?:string, lastUpdatedTime:int|string|\DateTimeInterface, createdTime:int|string|\DateTimeInterface}>
     */
    public function getSourceRepositoryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{spaceName:string, projectName:string, sourceRepositoryName:string} $args
     * @return \AWS\Result<array{https:string}>
     */
    public function getSourceRepositoryCloneUrls(array $args): \AWS\Result { }

    /**
     * @param array{spaceName:string, projectName:string, sourceRepositoryName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{https:string}>
     */
    public function getSourceRepositoryCloneUrlsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{name:string, regionName:string, displayName?:string, description?:string}>
     */
    public function getSpace(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name:string, regionName:string, displayName?:string, description?:string}>
     */
    public function getSpaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{spaceName:string} $args
     * @return \AWS\Result<array{subscriptionType?:string, awsAccountName?:string, pendingSubscriptionType?:string, pendingSubscriptionStartTime?:int|string|\DateTimeInterface}>
     */
    public function getSubscription(array $args): \AWS\Result { }

    /**
     * @param array{spaceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{subscriptionType?:string, awsAccountName?:string, pendingSubscriptionType?:string, pendingSubscriptionStartTime?:int|string|\DateTimeInterface}>
     */
    public function getSubscriptionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id?:string, userName?:string} $args
     * @return \AWS\Result<array{userId?:string, userName?:string, displayName?:string, primaryEmail?:array{email?:string, verified?:bool}, version?:string}>
     */
    public function getUserDetails(array $args = []): \AWS\Result { }

    /**
     * @param array{id?:string, userName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{userId?:string, userName?:string, displayName?:string, primaryEmail?:array{email?:string, verified?:bool}, version?:string}>
     */
    public function getUserDetailsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{spaceName:string, id:string, projectName:string} $args
     * @return \AWS\Result<array{spaceName:string, projectName:string, id:string, name:string, sourceRepositoryName?:string, sourceBranchName?:string, definition:array{path:string}, createdTime:int|string|\DateTimeInterface, lastUpdatedTime:int|string|\DateTimeInterface, runMode:"QUEUED"|"PARALLEL"|"SUPERSEDED", status:"INVALID"|"ACTIVE"}>
     */
    public function getWorkflow(array $args): \AWS\Result { }

    /**
     * @param array{spaceName:string, id:string, projectName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{spaceName:string, projectName:string, id:string, name:string, sourceRepositoryName?:string, sourceBranchName?:string, definition:array{path:string}, createdTime:int|string|\DateTimeInterface, lastUpdatedTime:int|string|\DateTimeInterface, runMode:"QUEUED"|"PARALLEL"|"SUPERSEDED", status:"INVALID"|"ACTIVE"}>
     */
    public function getWorkflowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{spaceName:string, id:string, projectName:string} $args
     * @return \AWS\Result<array{spaceName:string, projectName:string, id:string, workflowId:string, status:"SUCCEEDED"|"FAILED"|"STOPPED"|"SUPERSEDED"|"CANCELLED"|"NOT_RUN"|"VALIDATING"|"PROVISIONING"|"IN_PROGRESS"|"STOPPING"|"ABANDONED", statusReasons?:array<array{}>, startTime:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, lastUpdatedTime:int|string|\DateTimeInterface}>
     */
    public function getWorkflowRun(array $args): \AWS\Result { }

    /**
     * @param array{spaceName:string, id:string, projectName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{spaceName:string, projectName:string, id:string, workflowId:string, status:"SUCCEEDED"|"FAILED"|"STOPPED"|"SUPERSEDED"|"CANCELLED"|"NOT_RUN"|"VALIDATING"|"PROVISIONING"|"IN_PROGRESS"|"STOPPING"|"ABANDONED", statusReasons?:array<array{}>, startTime:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, lastUpdatedTime:int|string|\DateTimeInterface}>
     */
    public function getWorkflowRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{items:array<array{id:string, name:string, expiresTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listAccessTokens(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{items:array<array{id:string, name:string, expiresTime?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listAccessTokensAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{spaceName:string, projectName:string, devEnvironmentId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{items:array<array{spaceName:string, projectName:string, devEnvironmentId:string, startedTime:int|string|\DateTimeInterface, id:string}>, nextToken?:string}>
     */
    public function listDevEnvironmentSessions(array $args): \AWS\Result { }

    /**
     * @param array{spaceName:string, projectName:string, devEnvironmentId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{items:array<array{spaceName:string, projectName:string, devEnvironmentId:string, startedTime:int|string|\DateTimeInterface, id:string}>, nextToken?:string}>
     */
    public function listDevEnvironmentSessionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{spaceName:string, projectName?:string, filters?:array<array{key:string, values:array<string>, comparisonOperator?:string}>, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{items:array<array{spaceName?:string, projectName?:string, id:string, lastUpdatedTime:int|string|\DateTimeInterface, creatorId:string, status:"PENDING"|"RUNNING"|"STARTING"|"STOPPING"|"STOPPED"|"FAILED"|"DELETING"|"DELETED", statusReason?:string, repositories:array<array{repositoryName:string, branchName?:string}>, alias?:string, ides?:array<array{runtime?:string, name?:string}>, instanceType:"dev.standard1.small"|"dev.standard1.medium"|"dev.standard1.large"|"dev.standard1.xlarge", inactivityTimeoutMinutes:int, persistentStorage:array{sizeInGiB:int}, vpcConnectionName?:string}>, nextToken?:string}>
     */
    public function listDevEnvironments(array $args): \AWS\Result { }

    /**
     * @param array{spaceName:string, projectName?:string, filters?:array<array{key:string, values:array<string>, comparisonOperator?:string}>, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{items:array<array{spaceName?:string, projectName?:string, id:string, lastUpdatedTime:int|string|\DateTimeInterface, creatorId:string, status:"PENDING"|"RUNNING"|"STARTING"|"STOPPING"|"STOPPED"|"FAILED"|"DELETING"|"DELETED", statusReason?:string, repositories:array<array{repositoryName:string, branchName?:string}>, alias?:string, ides?:array<array{runtime?:string, name?:string}>, instanceType:"dev.standard1.small"|"dev.standard1.medium"|"dev.standard1.large"|"dev.standard1.xlarge", inactivityTimeoutMinutes:int, persistentStorage:array{sizeInGiB:int}, vpcConnectionName?:string}>, nextToken?:string}>
     */
    public function listDevEnvironmentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{spaceName:string, startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface, eventName?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{nextToken?:string, items:array<array{id:string, eventName:string, eventType:string, eventCategory:string, eventSource:string, eventTime:int|string|\DateTimeInterface, operationType:"READONLY"|"MUTATION", userIdentity:array{userType:"USER"|"AWS_ACCOUNT"|"UNKNOWN", principalId:string, userName?:string, awsAccountId?:string}, projectInformation?:array{name?:string, projectId?:string}, requestId?:string, requestPayload?:array{contentType?:string, data?:string}, responsePayload?:array{contentType?:string, data?:string}, errorCode?:string, sourceIpAddress?:string, userAgent?:string}>}>
     */
    public function listEventLogs(array $args): \AWS\Result { }

    /**
     * @param array{spaceName:string, startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface, eventName?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, items:array<array{id:string, eventName:string, eventType:string, eventCategory:string, eventSource:string, eventTime:int|string|\DateTimeInterface, operationType:"READONLY"|"MUTATION", userIdentity:array{userType:"USER"|"AWS_ACCOUNT"|"UNKNOWN", principalId:string, userName?:string, awsAccountId?:string}, projectInformation?:array{name?:string, projectId?:string}, requestId?:string, requestPayload?:array{contentType?:string, data?:string}, responsePayload?:array{contentType?:string, data?:string}, errorCode?:string, sourceIpAddress?:string, userAgent?:string}>}>
     */
    public function listEventLogsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{spaceName:string, nextToken?:string, maxResults?:int, filters?:array<array{key:"hasAccessTo"|"name", values:array<string>, comparisonOperator?:"EQ"|"GT"|"GE"|"LT"|"LE"|"BEGINS_WITH"}>} $args
     * @return \AWS\Result<array{nextToken?:string, items?:array<array{name:string, displayName?:string, description?:string}>}>
     */
    public function listProjects(array $args): \AWS\Result { }

    /**
     * @param array{spaceName:string, nextToken?:string, maxResults?:int, filters?:array<array{key:"hasAccessTo"|"name", values:array<string>, comparisonOperator?:"EQ"|"GT"|"GE"|"LT"|"LE"|"BEGINS_WITH"}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, items?:array<array{name:string, displayName?:string, description?:string}>}>
     */
    public function listProjectsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{spaceName:string, projectName:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{items?:array<array{id:string, name:string, description?:string, lastUpdatedTime:int|string|\DateTimeInterface, createdTime:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listSourceRepositories(array $args): \AWS\Result { }

    /**
     * @param array{spaceName:string, projectName:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{items?:array<array{id:string, name:string, description?:string, lastUpdatedTime:int|string|\DateTimeInterface, createdTime:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listSourceRepositoriesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{spaceName:string, projectName:string, sourceRepositoryName:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{nextToken?:string, items:array<array{ref?:string, name?:string, lastUpdatedTime?:int|string|\DateTimeInterface, headCommitId?:string}>}>
     */
    public function listSourceRepositoryBranches(array $args): \AWS\Result { }

    /**
     * @param array{spaceName:string, projectName:string, sourceRepositoryName:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, items:array<array{ref?:string, name?:string, lastUpdatedTime?:int|string|\DateTimeInterface, headCommitId?:string}>}>
     */
    public function listSourceRepositoryBranchesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, items?:array<array{name:string, regionName:string, displayName?:string, description?:string}>}>
     */
    public function listSpaces(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, items?:array<array{name:string, regionName:string, displayName?:string, description?:string}>}>
     */
    public function listSpacesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{spaceName:string, workflowId?:string, projectName:string, nextToken?:string, maxResults?:int, sortBy?:array<array{}>} $args
     * @return \AWS\Result<array{nextToken?:string, items?:array<array{id:string, workflowId:string, workflowName:string, status:"SUCCEEDED"|"FAILED"|"STOPPED"|"SUPERSEDED"|"CANCELLED"|"NOT_RUN"|"VALIDATING"|"PROVISIONING"|"IN_PROGRESS"|"STOPPING"|"ABANDONED", statusReasons?:array<array{}>, startTime:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, lastUpdatedTime:int|string|\DateTimeInterface}>}>
     */
    public function listWorkflowRuns(array $args): \AWS\Result { }

    /**
     * @param array{spaceName:string, workflowId?:string, projectName:string, nextToken?:string, maxResults?:int, sortBy?:array<array{}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, items?:array<array{id:string, workflowId:string, workflowName:string, status:"SUCCEEDED"|"FAILED"|"STOPPED"|"SUPERSEDED"|"CANCELLED"|"NOT_RUN"|"VALIDATING"|"PROVISIONING"|"IN_PROGRESS"|"STOPPING"|"ABANDONED", statusReasons?:array<array{}>, startTime:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, lastUpdatedTime:int|string|\DateTimeInterface}>}>
     */
    public function listWorkflowRunsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{spaceName:string, projectName:string, nextToken?:string, maxResults?:int, sortBy?:array<array{}>} $args
     * @return \AWS\Result<array{nextToken?:string, items?:array<array{id:string, name:string, sourceRepositoryName:string, sourceBranchName:string, definition:array{path:string}, createdTime:int|string|\DateTimeInterface, lastUpdatedTime:int|string|\DateTimeInterface, runMode:"QUEUED"|"PARALLEL"|"SUPERSEDED", status:"INVALID"|"ACTIVE"}>}>
     */
    public function listWorkflows(array $args): \AWS\Result { }

    /**
     * @param array{spaceName:string, projectName:string, nextToken?:string, maxResults?:int, sortBy?:array<array{}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, items?:array<array{id:string, name:string, sourceRepositoryName:string, sourceBranchName:string, definition:array{path:string}, createdTime:int|string|\DateTimeInterface, lastUpdatedTime:int|string|\DateTimeInterface, runMode:"QUEUED"|"PARALLEL"|"SUPERSEDED", status:"INVALID"|"ACTIVE"}>}>
     */
    public function listWorkflowsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{spaceName:string, projectName:string, id:string, ides?:array<array{runtime?:string, name?:string}>, instanceType?:"dev.standard1.small"|"dev.standard1.medium"|"dev.standard1.large"|"dev.standard1.xlarge", inactivityTimeoutMinutes?:int} $args
     * @return \AWS\Result<array{spaceName:string, projectName:string, id:string, status:"PENDING"|"RUNNING"|"STARTING"|"STOPPING"|"STOPPED"|"FAILED"|"DELETING"|"DELETED"}>
     */
    public function startDevEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{spaceName:string, projectName:string, id:string, ides?:array<array{runtime?:string, name?:string}>, instanceType?:"dev.standard1.small"|"dev.standard1.medium"|"dev.standard1.large"|"dev.standard1.xlarge", inactivityTimeoutMinutes?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{spaceName:string, projectName:string, id:string, status:"PENDING"|"RUNNING"|"STARTING"|"STOPPING"|"STOPPED"|"FAILED"|"DELETING"|"DELETED"}>
     */
    public function startDevEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{spaceName:string, projectName:string, id:string, sessionConfiguration:array{sessionType:"SSM"|"SSH", executeCommandSessionConfiguration?:array{command:string, arguments?:array<string>}}} $args
     * @return \AWS\Result<array{accessDetails:array{streamUrl:string, tokenValue:string}, sessionId?:string, spaceName:string, projectName:string, id:string}>
     */
    public function startDevEnvironmentSession(array $args): \AWS\Result { }

    /**
     * @param array{spaceName:string, projectName:string, id:string, sessionConfiguration:array{sessionType:"SSM"|"SSH", executeCommandSessionConfiguration?:array{command:string, arguments?:array<string>}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{accessDetails:array{streamUrl:string, tokenValue:string}, sessionId?:string, spaceName:string, projectName:string, id:string}>
     */
    public function startDevEnvironmentSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{spaceName:string, projectName:string, workflowId:string, clientToken?:string} $args
     * @return \AWS\Result<array{spaceName:string, projectName:string, id:string, workflowId:string}>
     */
    public function startWorkflowRun(array $args): \AWS\Result { }

    /**
     * @param array{spaceName:string, projectName:string, workflowId:string, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{spaceName:string, projectName:string, id:string, workflowId:string}>
     */
    public function startWorkflowRunAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{spaceName:string, projectName:string, id:string} $args
     * @return \AWS\Result<array{spaceName:string, projectName:string, id:string, status:"PENDING"|"RUNNING"|"STARTING"|"STOPPING"|"STOPPED"|"FAILED"|"DELETING"|"DELETED"}>
     */
    public function stopDevEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{spaceName:string, projectName:string, id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{spaceName:string, projectName:string, id:string, status:"PENDING"|"RUNNING"|"STARTING"|"STOPPING"|"STOPPED"|"FAILED"|"DELETING"|"DELETED"}>
     */
    public function stopDevEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{spaceName:string, projectName:string, id:string, sessionId:string} $args
     * @return \AWS\Result<array{spaceName:string, projectName:string, id:string, sessionId:string}>
     */
    public function stopDevEnvironmentSession(array $args): \AWS\Result { }

    /**
     * @param array{spaceName:string, projectName:string, id:string, sessionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{spaceName:string, projectName:string, id:string, sessionId:string}>
     */
    public function stopDevEnvironmentSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{spaceName:string, projectName:string, id:string, alias?:string, ides?:array<array{runtime?:string, name?:string}>, instanceType?:"dev.standard1.small"|"dev.standard1.medium"|"dev.standard1.large"|"dev.standard1.xlarge", inactivityTimeoutMinutes?:int, clientToken?:string} $args
     * @return \AWS\Result<array{id:string, spaceName:string, projectName:string, alias?:string, ides?:array<array{runtime?:string, name?:string}>, instanceType?:"dev.standard1.small"|"dev.standard1.medium"|"dev.standard1.large"|"dev.standard1.xlarge", inactivityTimeoutMinutes?:int, clientToken?:string}>
     */
    public function updateDevEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{spaceName:string, projectName:string, id:string, alias?:string, ides?:array<array{runtime?:string, name?:string}>, instanceType?:"dev.standard1.small"|"dev.standard1.medium"|"dev.standard1.large"|"dev.standard1.xlarge", inactivityTimeoutMinutes?:int, clientToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{id:string, spaceName:string, projectName:string, alias?:string, ides?:array<array{runtime?:string, name?:string}>, instanceType?:"dev.standard1.small"|"dev.standard1.medium"|"dev.standard1.large"|"dev.standard1.xlarge", inactivityTimeoutMinutes?:int, clientToken?:string}>
     */
    public function updateDevEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{spaceName:string, name:string, description?:string} $args
     * @return \AWS\Result<array{spaceName?:string, name?:string, displayName?:string, description?:string}>
     */
    public function updateProject(array $args): \AWS\Result { }

    /**
     * @param array{spaceName:string, name:string, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{spaceName?:string, name?:string, displayName?:string, description?:string}>
     */
    public function updateProjectAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string} $args
     * @return \AWS\Result<array{name?:string, displayName?:string, description?:string}>
     */
    public function updateSpace(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name?:string, displayName?:string, description?:string}>
     */
    public function updateSpaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array $args
     * @return \AWS\Result<array{identity?:string}>
     */
    public function verifySession(array $args = []): \AWS\Result { }

    /**
     * @param array $args
     * @return \GuzzleHttp\Promise\Promise<array{identity?:string}>
     */
    public function verifySessionAsync(array $args = []): \GuzzleHttp\Promise\Promise { }
}
