<?php
namespace AWS\Amplify;

class AmplifyClient
{
    /**
     * @param array{name:string, description?:string, repository?:string, platform?:"WEB"|"WEB_DYNAMIC"|"WEB_COMPUTE", iamServiceRoleArn?:string, oauthToken?:string, accessToken?:string, environmentVariables?:array<string, string>, enableBranchAutoBuild?:bool, enableBranchAutoDeletion?:bool, enableBasicAuth?:bool, basicAuthCredentials?:string, customRules?:array<array{source:string, target:string, status?:string, condition?:string}>, tags?:array<string, string>, buildSpec?:string, customHeaders?:string, enableAutoBranchCreation?:bool, autoBranchCreationPatterns?:array<string>, autoBranchCreationConfig?:array{stage?:"PRODUCTION"|"BETA"|"DEVELOPMENT"|"EXPERIMENTAL"|"PULL_REQUEST", framework?:string, enableAutoBuild?:bool, environmentVariables?:array<string, string>, basicAuthCredentials?:string, enableBasicAuth?:bool, enablePerformanceMode?:bool, buildSpec?:string, enablePullRequestPreview?:bool, pullRequestEnvironmentName?:string}, cacheConfig?:array{type:"AMPLIFY_MANAGED"|"AMPLIFY_MANAGED_NO_COOKIES"}} $args
     * @return \AWS\Result<array{app:array{appId:string, appArn:string, name:string, tags?:array<string, string>, description:string, repository:string, platform:"WEB"|"WEB_DYNAMIC"|"WEB_COMPUTE", createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, iamServiceRoleArn?:string, environmentVariables:array<string, string>, defaultDomain:string, enableBranchAutoBuild:bool, enableBranchAutoDeletion?:bool, enableBasicAuth:bool, basicAuthCredentials?:string, customRules?:array<array{source:string, target:string, status?:string, condition?:string}>, productionBranch?:array{lastDeployTime?:int|string|\DateTimeInterface, status?:string, thumbnailUrl?:string, branchName?:string}, buildSpec?:string, customHeaders?:string, enableAutoBranchCreation?:bool, autoBranchCreationPatterns?:array<string>, autoBranchCreationConfig?:array{stage?:"PRODUCTION"|"BETA"|"DEVELOPMENT"|"EXPERIMENTAL"|"PULL_REQUEST", framework?:string, enableAutoBuild?:bool, environmentVariables?:array<string, string>, basicAuthCredentials?:string, enableBasicAuth?:bool, enablePerformanceMode?:bool, buildSpec?:string, enablePullRequestPreview?:bool, pullRequestEnvironmentName?:string}, repositoryCloneMethod?:"SSH"|"TOKEN"|"SIGV4", cacheConfig?:array{type:"AMPLIFY_MANAGED"|"AMPLIFY_MANAGED_NO_COOKIES"}, webhookCreateTime?:int|string|\DateTimeInterface, wafConfiguration?:array{webAclArn?:string, wafStatus?:"ASSOCIATING"|"ASSOCIATION_FAILED"|"ASSOCIATION_SUCCESS"|"DISASSOCIATING"|"DISASSOCIATION_FAILED", statusReason?:string}}}>
     */
    public function createApp(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, repository?:string, platform?:"WEB"|"WEB_DYNAMIC"|"WEB_COMPUTE", iamServiceRoleArn?:string, oauthToken?:string, accessToken?:string, environmentVariables?:array<string, string>, enableBranchAutoBuild?:bool, enableBranchAutoDeletion?:bool, enableBasicAuth?:bool, basicAuthCredentials?:string, customRules?:array<array{source:string, target:string, status?:string, condition?:string}>, tags?:array<string, string>, buildSpec?:string, customHeaders?:string, enableAutoBranchCreation?:bool, autoBranchCreationPatterns?:array<string>, autoBranchCreationConfig?:array{stage?:"PRODUCTION"|"BETA"|"DEVELOPMENT"|"EXPERIMENTAL"|"PULL_REQUEST", framework?:string, enableAutoBuild?:bool, environmentVariables?:array<string, string>, basicAuthCredentials?:string, enableBasicAuth?:bool, enablePerformanceMode?:bool, buildSpec?:string, enablePullRequestPreview?:bool, pullRequestEnvironmentName?:string}, cacheConfig?:array{type:"AMPLIFY_MANAGED"|"AMPLIFY_MANAGED_NO_COOKIES"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{app:array{appId:string, appArn:string, name:string, tags?:array<string, string>, description:string, repository:string, platform:"WEB"|"WEB_DYNAMIC"|"WEB_COMPUTE", createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, iamServiceRoleArn?:string, environmentVariables:array<string, string>, defaultDomain:string, enableBranchAutoBuild:bool, enableBranchAutoDeletion?:bool, enableBasicAuth:bool, basicAuthCredentials?:string, customRules?:array<array{source:string, target:string, status?:string, condition?:string}>, productionBranch?:array{lastDeployTime?:int|string|\DateTimeInterface, status?:string, thumbnailUrl?:string, branchName?:string}, buildSpec?:string, customHeaders?:string, enableAutoBranchCreation?:bool, autoBranchCreationPatterns?:array<string>, autoBranchCreationConfig?:array{stage?:"PRODUCTION"|"BETA"|"DEVELOPMENT"|"EXPERIMENTAL"|"PULL_REQUEST", framework?:string, enableAutoBuild?:bool, environmentVariables?:array<string, string>, basicAuthCredentials?:string, enableBasicAuth?:bool, enablePerformanceMode?:bool, buildSpec?:string, enablePullRequestPreview?:bool, pullRequestEnvironmentName?:string}, repositoryCloneMethod?:"SSH"|"TOKEN"|"SIGV4", cacheConfig?:array{type:"AMPLIFY_MANAGED"|"AMPLIFY_MANAGED_NO_COOKIES"}, webhookCreateTime?:int|string|\DateTimeInterface, wafConfiguration?:array{webAclArn?:string, wafStatus?:"ASSOCIATING"|"ASSOCIATION_FAILED"|"ASSOCIATION_SUCCESS"|"DISASSOCIATING"|"DISASSOCIATION_FAILED", statusReason?:string}}}>
     */
    public function createAppAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId:string, environmentName:string, stackName?:string, deploymentArtifacts?:string} $args
     * @return \AWS\Result<array{backendEnvironment:array{backendEnvironmentArn:string, environmentName:string, stackName?:string, deploymentArtifacts?:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function createBackendEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{appId:string, environmentName:string, stackName?:string, deploymentArtifacts?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{backendEnvironment:array{backendEnvironmentArn:string, environmentName:string, stackName?:string, deploymentArtifacts?:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function createBackendEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId:string, branchName:string, description?:string, stage?:"PRODUCTION"|"BETA"|"DEVELOPMENT"|"EXPERIMENTAL"|"PULL_REQUEST", framework?:string, enableNotification?:bool, enableAutoBuild?:bool, environmentVariables?:array<string, string>, basicAuthCredentials?:string, enableBasicAuth?:bool, enablePerformanceMode?:bool, tags?:array<string, string>, buildSpec?:string, ttl?:string, displayName?:string, enablePullRequestPreview?:bool, pullRequestEnvironmentName?:string, backendEnvironmentArn?:string, backend?:array{stackArn?:string}} $args
     * @return \AWS\Result<array{branch:array{branchArn:string, branchName:string, description:string, tags?:array<string, string>, stage:"PRODUCTION"|"BETA"|"DEVELOPMENT"|"EXPERIMENTAL"|"PULL_REQUEST", displayName:string, enableNotification:bool, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, environmentVariables:array<string, string>, enableAutoBuild:bool, customDomains:array<string>, framework:string, activeJobId:string, totalNumberOfJobs:string, enableBasicAuth:bool, enablePerformanceMode?:bool, thumbnailUrl?:string, basicAuthCredentials?:string, buildSpec?:string, ttl:string, associatedResources?:array<string>, enablePullRequestPreview:bool, pullRequestEnvironmentName?:string, destinationBranch?:string, sourceBranch?:string, backendEnvironmentArn?:string, backend?:array{stackArn?:string}}}>
     */
    public function createBranch(array $args): \AWS\Result { }

    /**
     * @param array{appId:string, branchName:string, description?:string, stage?:"PRODUCTION"|"BETA"|"DEVELOPMENT"|"EXPERIMENTAL"|"PULL_REQUEST", framework?:string, enableNotification?:bool, enableAutoBuild?:bool, environmentVariables?:array<string, string>, basicAuthCredentials?:string, enableBasicAuth?:bool, enablePerformanceMode?:bool, tags?:array<string, string>, buildSpec?:string, ttl?:string, displayName?:string, enablePullRequestPreview?:bool, pullRequestEnvironmentName?:string, backendEnvironmentArn?:string, backend?:array{stackArn?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{branch:array{branchArn:string, branchName:string, description:string, tags?:array<string, string>, stage:"PRODUCTION"|"BETA"|"DEVELOPMENT"|"EXPERIMENTAL"|"PULL_REQUEST", displayName:string, enableNotification:bool, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, environmentVariables:array<string, string>, enableAutoBuild:bool, customDomains:array<string>, framework:string, activeJobId:string, totalNumberOfJobs:string, enableBasicAuth:bool, enablePerformanceMode?:bool, thumbnailUrl?:string, basicAuthCredentials?:string, buildSpec?:string, ttl:string, associatedResources?:array<string>, enablePullRequestPreview:bool, pullRequestEnvironmentName?:string, destinationBranch?:string, sourceBranch?:string, backendEnvironmentArn?:string, backend?:array{stackArn?:string}}}>
     */
    public function createBranchAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId:string, branchName:string, fileMap?:array<string, string>} $args
     * @return \AWS\Result<array{jobId?:string, fileUploadUrls:array<string, string>, zipUploadUrl:string}>
     */
    public function createDeployment(array $args): \AWS\Result { }

    /**
     * @param array{appId:string, branchName:string, fileMap?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobId?:string, fileUploadUrls:array<string, string>, zipUploadUrl:string}>
     */
    public function createDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId:string, domainName:string, enableAutoSubDomain?:bool, subDomainSettings:array<array{prefix:string, branchName:string}>, autoSubDomainCreationPatterns?:array<string>, autoSubDomainIAMRole?:string, certificateSettings?:array{type:"AMPLIFY_MANAGED"|"CUSTOM", customCertificateArn?:string}} $args
     * @return \AWS\Result<array{domainAssociation:array{domainAssociationArn:string, domainName:string, enableAutoSubDomain:bool, autoSubDomainCreationPatterns?:array<string>, autoSubDomainIAMRole?:string, domainStatus:"PENDING_VERIFICATION"|"IN_PROGRESS"|"AVAILABLE"|"IMPORTING_CUSTOM_CERTIFICATE"|"PENDING_DEPLOYMENT"|"AWAITING_APP_CNAME"|"FAILED"|"CREATING"|"REQUESTING_CERTIFICATE"|"UPDATING", updateStatus?:"REQUESTING_CERTIFICATE"|"PENDING_VERIFICATION"|"IMPORTING_CUSTOM_CERTIFICATE"|"PENDING_DEPLOYMENT"|"AWAITING_APP_CNAME"|"UPDATE_COMPLETE"|"UPDATE_FAILED", statusReason:string, certificateVerificationDNSRecord?:string, subDomains:array<array{subDomainSetting:array{prefix:string, branchName:string}, verified:bool, dnsRecord:string}>, certificate?:array{type:"AMPLIFY_MANAGED"|"CUSTOM", customCertificateArn?:string, certificateVerificationDNSRecord?:string}}}>
     */
    public function createDomainAssociation(array $args): \AWS\Result { }

    /**
     * @param array{appId:string, domainName:string, enableAutoSubDomain?:bool, subDomainSettings:array<array{prefix:string, branchName:string}>, autoSubDomainCreationPatterns?:array<string>, autoSubDomainIAMRole?:string, certificateSettings?:array{type:"AMPLIFY_MANAGED"|"CUSTOM", customCertificateArn?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{domainAssociation:array{domainAssociationArn:string, domainName:string, enableAutoSubDomain:bool, autoSubDomainCreationPatterns?:array<string>, autoSubDomainIAMRole?:string, domainStatus:"PENDING_VERIFICATION"|"IN_PROGRESS"|"AVAILABLE"|"IMPORTING_CUSTOM_CERTIFICATE"|"PENDING_DEPLOYMENT"|"AWAITING_APP_CNAME"|"FAILED"|"CREATING"|"REQUESTING_CERTIFICATE"|"UPDATING", updateStatus?:"REQUESTING_CERTIFICATE"|"PENDING_VERIFICATION"|"IMPORTING_CUSTOM_CERTIFICATE"|"PENDING_DEPLOYMENT"|"AWAITING_APP_CNAME"|"UPDATE_COMPLETE"|"UPDATE_FAILED", statusReason:string, certificateVerificationDNSRecord?:string, subDomains:array<array{subDomainSetting:array{prefix:string, branchName:string}, verified:bool, dnsRecord:string}>, certificate?:array{type:"AMPLIFY_MANAGED"|"CUSTOM", customCertificateArn?:string, certificateVerificationDNSRecord?:string}}}>
     */
    public function createDomainAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId:string, branchName:string, description?:string} $args
     * @return \AWS\Result<array{webhook:array{webhookArn:string, webhookId:string, webhookUrl:string, branchName:string, description:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function createWebhook(array $args): \AWS\Result { }

    /**
     * @param array{appId:string, branchName:string, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{webhook:array{webhookArn:string, webhookId:string, webhookUrl:string, branchName:string, description:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function createWebhookAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId:string} $args
     * @return \AWS\Result<array{app:array{appId:string, appArn:string, name:string, tags?:array<string, string>, description:string, repository:string, platform:"WEB"|"WEB_DYNAMIC"|"WEB_COMPUTE", createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, iamServiceRoleArn?:string, environmentVariables:array<string, string>, defaultDomain:string, enableBranchAutoBuild:bool, enableBranchAutoDeletion?:bool, enableBasicAuth:bool, basicAuthCredentials?:string, customRules?:array<array{source:string, target:string, status?:string, condition?:string}>, productionBranch?:array{lastDeployTime?:int|string|\DateTimeInterface, status?:string, thumbnailUrl?:string, branchName?:string}, buildSpec?:string, customHeaders?:string, enableAutoBranchCreation?:bool, autoBranchCreationPatterns?:array<string>, autoBranchCreationConfig?:array{stage?:"PRODUCTION"|"BETA"|"DEVELOPMENT"|"EXPERIMENTAL"|"PULL_REQUEST", framework?:string, enableAutoBuild?:bool, environmentVariables?:array<string, string>, basicAuthCredentials?:string, enableBasicAuth?:bool, enablePerformanceMode?:bool, buildSpec?:string, enablePullRequestPreview?:bool, pullRequestEnvironmentName?:string}, repositoryCloneMethod?:"SSH"|"TOKEN"|"SIGV4", cacheConfig?:array{type:"AMPLIFY_MANAGED"|"AMPLIFY_MANAGED_NO_COOKIES"}, webhookCreateTime?:int|string|\DateTimeInterface, wafConfiguration?:array{webAclArn?:string, wafStatus?:"ASSOCIATING"|"ASSOCIATION_FAILED"|"ASSOCIATION_SUCCESS"|"DISASSOCIATING"|"DISASSOCIATION_FAILED", statusReason?:string}}}>
     */
    public function deleteApp(array $args): \AWS\Result { }

    /**
     * @param array{appId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{app:array{appId:string, appArn:string, name:string, tags?:array<string, string>, description:string, repository:string, platform:"WEB"|"WEB_DYNAMIC"|"WEB_COMPUTE", createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, iamServiceRoleArn?:string, environmentVariables:array<string, string>, defaultDomain:string, enableBranchAutoBuild:bool, enableBranchAutoDeletion?:bool, enableBasicAuth:bool, basicAuthCredentials?:string, customRules?:array<array{source:string, target:string, status?:string, condition?:string}>, productionBranch?:array{lastDeployTime?:int|string|\DateTimeInterface, status?:string, thumbnailUrl?:string, branchName?:string}, buildSpec?:string, customHeaders?:string, enableAutoBranchCreation?:bool, autoBranchCreationPatterns?:array<string>, autoBranchCreationConfig?:array{stage?:"PRODUCTION"|"BETA"|"DEVELOPMENT"|"EXPERIMENTAL"|"PULL_REQUEST", framework?:string, enableAutoBuild?:bool, environmentVariables?:array<string, string>, basicAuthCredentials?:string, enableBasicAuth?:bool, enablePerformanceMode?:bool, buildSpec?:string, enablePullRequestPreview?:bool, pullRequestEnvironmentName?:string}, repositoryCloneMethod?:"SSH"|"TOKEN"|"SIGV4", cacheConfig?:array{type:"AMPLIFY_MANAGED"|"AMPLIFY_MANAGED_NO_COOKIES"}, webhookCreateTime?:int|string|\DateTimeInterface, wafConfiguration?:array{webAclArn?:string, wafStatus?:"ASSOCIATING"|"ASSOCIATION_FAILED"|"ASSOCIATION_SUCCESS"|"DISASSOCIATING"|"DISASSOCIATION_FAILED", statusReason?:string}}}>
     */
    public function deleteAppAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId:string, environmentName:string} $args
     * @return \AWS\Result<array{backendEnvironment:array{backendEnvironmentArn:string, environmentName:string, stackName?:string, deploymentArtifacts?:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function deleteBackendEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{appId:string, environmentName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{backendEnvironment:array{backendEnvironmentArn:string, environmentName:string, stackName?:string, deploymentArtifacts?:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function deleteBackendEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId:string, branchName:string} $args
     * @return \AWS\Result<array{branch:array{branchArn:string, branchName:string, description:string, tags?:array<string, string>, stage:"PRODUCTION"|"BETA"|"DEVELOPMENT"|"EXPERIMENTAL"|"PULL_REQUEST", displayName:string, enableNotification:bool, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, environmentVariables:array<string, string>, enableAutoBuild:bool, customDomains:array<string>, framework:string, activeJobId:string, totalNumberOfJobs:string, enableBasicAuth:bool, enablePerformanceMode?:bool, thumbnailUrl?:string, basicAuthCredentials?:string, buildSpec?:string, ttl:string, associatedResources?:array<string>, enablePullRequestPreview:bool, pullRequestEnvironmentName?:string, destinationBranch?:string, sourceBranch?:string, backendEnvironmentArn?:string, backend?:array{stackArn?:string}}}>
     */
    public function deleteBranch(array $args): \AWS\Result { }

    /**
     * @param array{appId:string, branchName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{branch:array{branchArn:string, branchName:string, description:string, tags?:array<string, string>, stage:"PRODUCTION"|"BETA"|"DEVELOPMENT"|"EXPERIMENTAL"|"PULL_REQUEST", displayName:string, enableNotification:bool, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, environmentVariables:array<string, string>, enableAutoBuild:bool, customDomains:array<string>, framework:string, activeJobId:string, totalNumberOfJobs:string, enableBasicAuth:bool, enablePerformanceMode?:bool, thumbnailUrl?:string, basicAuthCredentials?:string, buildSpec?:string, ttl:string, associatedResources?:array<string>, enablePullRequestPreview:bool, pullRequestEnvironmentName?:string, destinationBranch?:string, sourceBranch?:string, backendEnvironmentArn?:string, backend?:array{stackArn?:string}}}>
     */
    public function deleteBranchAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId:string, domainName:string} $args
     * @return \AWS\Result<array{domainAssociation:array{domainAssociationArn:string, domainName:string, enableAutoSubDomain:bool, autoSubDomainCreationPatterns?:array<string>, autoSubDomainIAMRole?:string, domainStatus:"PENDING_VERIFICATION"|"IN_PROGRESS"|"AVAILABLE"|"IMPORTING_CUSTOM_CERTIFICATE"|"PENDING_DEPLOYMENT"|"AWAITING_APP_CNAME"|"FAILED"|"CREATING"|"REQUESTING_CERTIFICATE"|"UPDATING", updateStatus?:"REQUESTING_CERTIFICATE"|"PENDING_VERIFICATION"|"IMPORTING_CUSTOM_CERTIFICATE"|"PENDING_DEPLOYMENT"|"AWAITING_APP_CNAME"|"UPDATE_COMPLETE"|"UPDATE_FAILED", statusReason:string, certificateVerificationDNSRecord?:string, subDomains:array<array{subDomainSetting:array{prefix:string, branchName:string}, verified:bool, dnsRecord:string}>, certificate?:array{type:"AMPLIFY_MANAGED"|"CUSTOM", customCertificateArn?:string, certificateVerificationDNSRecord?:string}}}>
     */
    public function deleteDomainAssociation(array $args): \AWS\Result { }

    /**
     * @param array{appId:string, domainName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{domainAssociation:array{domainAssociationArn:string, domainName:string, enableAutoSubDomain:bool, autoSubDomainCreationPatterns?:array<string>, autoSubDomainIAMRole?:string, domainStatus:"PENDING_VERIFICATION"|"IN_PROGRESS"|"AVAILABLE"|"IMPORTING_CUSTOM_CERTIFICATE"|"PENDING_DEPLOYMENT"|"AWAITING_APP_CNAME"|"FAILED"|"CREATING"|"REQUESTING_CERTIFICATE"|"UPDATING", updateStatus?:"REQUESTING_CERTIFICATE"|"PENDING_VERIFICATION"|"IMPORTING_CUSTOM_CERTIFICATE"|"PENDING_DEPLOYMENT"|"AWAITING_APP_CNAME"|"UPDATE_COMPLETE"|"UPDATE_FAILED", statusReason:string, certificateVerificationDNSRecord?:string, subDomains:array<array{subDomainSetting:array{prefix:string, branchName:string}, verified:bool, dnsRecord:string}>, certificate?:array{type:"AMPLIFY_MANAGED"|"CUSTOM", customCertificateArn?:string, certificateVerificationDNSRecord?:string}}}>
     */
    public function deleteDomainAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId:string, branchName:string, jobId:string} $args
     * @return \AWS\Result<array{jobSummary:array{jobArn:string, jobId:string, commitId:string, commitMessage:string, commitTime:int|string|\DateTimeInterface, startTime:int|string|\DateTimeInterface, status:"CREATED"|"PENDING"|"PROVISIONING"|"RUNNING"|"FAILED"|"SUCCEED"|"CANCELLING"|"CANCELLED", endTime?:int|string|\DateTimeInterface, jobType:"RELEASE"|"RETRY"|"MANUAL"|"WEB_HOOK", sourceUrl?:string, sourceUrlType?:"ZIP"|"BUCKET_PREFIX"}}>
     */
    public function deleteJob(array $args): \AWS\Result { }

    /**
     * @param array{appId:string, branchName:string, jobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobSummary:array{jobArn:string, jobId:string, commitId:string, commitMessage:string, commitTime:int|string|\DateTimeInterface, startTime:int|string|\DateTimeInterface, status:"CREATED"|"PENDING"|"PROVISIONING"|"RUNNING"|"FAILED"|"SUCCEED"|"CANCELLING"|"CANCELLED", endTime?:int|string|\DateTimeInterface, jobType:"RELEASE"|"RETRY"|"MANUAL"|"WEB_HOOK", sourceUrl?:string, sourceUrlType?:"ZIP"|"BUCKET_PREFIX"}}>
     */
    public function deleteJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{webhookId:string} $args
     * @return \AWS\Result<array{webhook:array{webhookArn:string, webhookId:string, webhookUrl:string, branchName:string, description:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function deleteWebhook(array $args): \AWS\Result { }

    /**
     * @param array{webhookId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{webhook:array{webhookArn:string, webhookId:string, webhookUrl:string, branchName:string, description:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function deleteWebhookAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, domainName:string, appId:string} $args
     * @return \AWS\Result<array{logUrl?:string}>
     */
    public function generateAccessLogs(array $args): \AWS\Result { }

    /**
     * @param array{startTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, domainName:string, appId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{logUrl?:string}>
     */
    public function generateAccessLogsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId:string} $args
     * @return \AWS\Result<array{app:array{appId:string, appArn:string, name:string, tags?:array<string, string>, description:string, repository:string, platform:"WEB"|"WEB_DYNAMIC"|"WEB_COMPUTE", createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, iamServiceRoleArn?:string, environmentVariables:array<string, string>, defaultDomain:string, enableBranchAutoBuild:bool, enableBranchAutoDeletion?:bool, enableBasicAuth:bool, basicAuthCredentials?:string, customRules?:array<array{source:string, target:string, status?:string, condition?:string}>, productionBranch?:array{lastDeployTime?:int|string|\DateTimeInterface, status?:string, thumbnailUrl?:string, branchName?:string}, buildSpec?:string, customHeaders?:string, enableAutoBranchCreation?:bool, autoBranchCreationPatterns?:array<string>, autoBranchCreationConfig?:array{stage?:"PRODUCTION"|"BETA"|"DEVELOPMENT"|"EXPERIMENTAL"|"PULL_REQUEST", framework?:string, enableAutoBuild?:bool, environmentVariables?:array<string, string>, basicAuthCredentials?:string, enableBasicAuth?:bool, enablePerformanceMode?:bool, buildSpec?:string, enablePullRequestPreview?:bool, pullRequestEnvironmentName?:string}, repositoryCloneMethod?:"SSH"|"TOKEN"|"SIGV4", cacheConfig?:array{type:"AMPLIFY_MANAGED"|"AMPLIFY_MANAGED_NO_COOKIES"}, webhookCreateTime?:int|string|\DateTimeInterface, wafConfiguration?:array{webAclArn?:string, wafStatus?:"ASSOCIATING"|"ASSOCIATION_FAILED"|"ASSOCIATION_SUCCESS"|"DISASSOCIATING"|"DISASSOCIATION_FAILED", statusReason?:string}}}>
     */
    public function getApp(array $args): \AWS\Result { }

    /**
     * @param array{appId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{app:array{appId:string, appArn:string, name:string, tags?:array<string, string>, description:string, repository:string, platform:"WEB"|"WEB_DYNAMIC"|"WEB_COMPUTE", createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, iamServiceRoleArn?:string, environmentVariables:array<string, string>, defaultDomain:string, enableBranchAutoBuild:bool, enableBranchAutoDeletion?:bool, enableBasicAuth:bool, basicAuthCredentials?:string, customRules?:array<array{source:string, target:string, status?:string, condition?:string}>, productionBranch?:array{lastDeployTime?:int|string|\DateTimeInterface, status?:string, thumbnailUrl?:string, branchName?:string}, buildSpec?:string, customHeaders?:string, enableAutoBranchCreation?:bool, autoBranchCreationPatterns?:array<string>, autoBranchCreationConfig?:array{stage?:"PRODUCTION"|"BETA"|"DEVELOPMENT"|"EXPERIMENTAL"|"PULL_REQUEST", framework?:string, enableAutoBuild?:bool, environmentVariables?:array<string, string>, basicAuthCredentials?:string, enableBasicAuth?:bool, enablePerformanceMode?:bool, buildSpec?:string, enablePullRequestPreview?:bool, pullRequestEnvironmentName?:string}, repositoryCloneMethod?:"SSH"|"TOKEN"|"SIGV4", cacheConfig?:array{type:"AMPLIFY_MANAGED"|"AMPLIFY_MANAGED_NO_COOKIES"}, webhookCreateTime?:int|string|\DateTimeInterface, wafConfiguration?:array{webAclArn?:string, wafStatus?:"ASSOCIATING"|"ASSOCIATION_FAILED"|"ASSOCIATION_SUCCESS"|"DISASSOCIATING"|"DISASSOCIATION_FAILED", statusReason?:string}}}>
     */
    public function getAppAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{artifactId:string} $args
     * @return \AWS\Result<array{artifactId:string, artifactUrl:string}>
     */
    public function getArtifactUrl(array $args): \AWS\Result { }

    /**
     * @param array{artifactId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{artifactId:string, artifactUrl:string}>
     */
    public function getArtifactUrlAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId:string, environmentName:string} $args
     * @return \AWS\Result<array{backendEnvironment:array{backendEnvironmentArn:string, environmentName:string, stackName?:string, deploymentArtifacts?:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function getBackendEnvironment(array $args): \AWS\Result { }

    /**
     * @param array{appId:string, environmentName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{backendEnvironment:array{backendEnvironmentArn:string, environmentName:string, stackName?:string, deploymentArtifacts?:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function getBackendEnvironmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId:string, branchName:string} $args
     * @return \AWS\Result<array{branch:array{branchArn:string, branchName:string, description:string, tags?:array<string, string>, stage:"PRODUCTION"|"BETA"|"DEVELOPMENT"|"EXPERIMENTAL"|"PULL_REQUEST", displayName:string, enableNotification:bool, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, environmentVariables:array<string, string>, enableAutoBuild:bool, customDomains:array<string>, framework:string, activeJobId:string, totalNumberOfJobs:string, enableBasicAuth:bool, enablePerformanceMode?:bool, thumbnailUrl?:string, basicAuthCredentials?:string, buildSpec?:string, ttl:string, associatedResources?:array<string>, enablePullRequestPreview:bool, pullRequestEnvironmentName?:string, destinationBranch?:string, sourceBranch?:string, backendEnvironmentArn?:string, backend?:array{stackArn?:string}}}>
     */
    public function getBranch(array $args): \AWS\Result { }

    /**
     * @param array{appId:string, branchName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{branch:array{branchArn:string, branchName:string, description:string, tags?:array<string, string>, stage:"PRODUCTION"|"BETA"|"DEVELOPMENT"|"EXPERIMENTAL"|"PULL_REQUEST", displayName:string, enableNotification:bool, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, environmentVariables:array<string, string>, enableAutoBuild:bool, customDomains:array<string>, framework:string, activeJobId:string, totalNumberOfJobs:string, enableBasicAuth:bool, enablePerformanceMode?:bool, thumbnailUrl?:string, basicAuthCredentials?:string, buildSpec?:string, ttl:string, associatedResources?:array<string>, enablePullRequestPreview:bool, pullRequestEnvironmentName?:string, destinationBranch?:string, sourceBranch?:string, backendEnvironmentArn?:string, backend?:array{stackArn?:string}}}>
     */
    public function getBranchAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId:string, domainName:string} $args
     * @return \AWS\Result<array{domainAssociation:array{domainAssociationArn:string, domainName:string, enableAutoSubDomain:bool, autoSubDomainCreationPatterns?:array<string>, autoSubDomainIAMRole?:string, domainStatus:"PENDING_VERIFICATION"|"IN_PROGRESS"|"AVAILABLE"|"IMPORTING_CUSTOM_CERTIFICATE"|"PENDING_DEPLOYMENT"|"AWAITING_APP_CNAME"|"FAILED"|"CREATING"|"REQUESTING_CERTIFICATE"|"UPDATING", updateStatus?:"REQUESTING_CERTIFICATE"|"PENDING_VERIFICATION"|"IMPORTING_CUSTOM_CERTIFICATE"|"PENDING_DEPLOYMENT"|"AWAITING_APP_CNAME"|"UPDATE_COMPLETE"|"UPDATE_FAILED", statusReason:string, certificateVerificationDNSRecord?:string, subDomains:array<array{subDomainSetting:array{prefix:string, branchName:string}, verified:bool, dnsRecord:string}>, certificate?:array{type:"AMPLIFY_MANAGED"|"CUSTOM", customCertificateArn?:string, certificateVerificationDNSRecord?:string}}}>
     */
    public function getDomainAssociation(array $args): \AWS\Result { }

    /**
     * @param array{appId:string, domainName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{domainAssociation:array{domainAssociationArn:string, domainName:string, enableAutoSubDomain:bool, autoSubDomainCreationPatterns?:array<string>, autoSubDomainIAMRole?:string, domainStatus:"PENDING_VERIFICATION"|"IN_PROGRESS"|"AVAILABLE"|"IMPORTING_CUSTOM_CERTIFICATE"|"PENDING_DEPLOYMENT"|"AWAITING_APP_CNAME"|"FAILED"|"CREATING"|"REQUESTING_CERTIFICATE"|"UPDATING", updateStatus?:"REQUESTING_CERTIFICATE"|"PENDING_VERIFICATION"|"IMPORTING_CUSTOM_CERTIFICATE"|"PENDING_DEPLOYMENT"|"AWAITING_APP_CNAME"|"UPDATE_COMPLETE"|"UPDATE_FAILED", statusReason:string, certificateVerificationDNSRecord?:string, subDomains:array<array{subDomainSetting:array{prefix:string, branchName:string}, verified:bool, dnsRecord:string}>, certificate?:array{type:"AMPLIFY_MANAGED"|"CUSTOM", customCertificateArn?:string, certificateVerificationDNSRecord?:string}}}>
     */
    public function getDomainAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId:string, branchName:string, jobId:string} $args
     * @return \AWS\Result<array{job:array{summary:array{jobArn:string, jobId:string, commitId:string, commitMessage:string, commitTime:int|string|\DateTimeInterface, startTime:int|string|\DateTimeInterface, status:"CREATED"|"PENDING"|"PROVISIONING"|"RUNNING"|"FAILED"|"SUCCEED"|"CANCELLING"|"CANCELLED", endTime?:int|string|\DateTimeInterface, jobType:"RELEASE"|"RETRY"|"MANUAL"|"WEB_HOOK", sourceUrl?:string, sourceUrlType?:"ZIP"|"BUCKET_PREFIX"}, steps:array<array{stepName:string, startTime:int|string|\DateTimeInterface, status:"CREATED"|"PENDING"|"PROVISIONING"|"RUNNING"|"FAILED"|"SUCCEED"|"CANCELLING"|"CANCELLED", endTime:int|string|\DateTimeInterface, logUrl?:string, artifactsUrl?:string, testArtifactsUrl?:string, testConfigUrl?:string, screenshots?:array<string, string>, statusReason?:string, context?:string}>}}>
     */
    public function getJob(array $args): \AWS\Result { }

    /**
     * @param array{appId:string, branchName:string, jobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{job:array{summary:array{jobArn:string, jobId:string, commitId:string, commitMessage:string, commitTime:int|string|\DateTimeInterface, startTime:int|string|\DateTimeInterface, status:"CREATED"|"PENDING"|"PROVISIONING"|"RUNNING"|"FAILED"|"SUCCEED"|"CANCELLING"|"CANCELLED", endTime?:int|string|\DateTimeInterface, jobType:"RELEASE"|"RETRY"|"MANUAL"|"WEB_HOOK", sourceUrl?:string, sourceUrlType?:"ZIP"|"BUCKET_PREFIX"}, steps:array<array{stepName:string, startTime:int|string|\DateTimeInterface, status:"CREATED"|"PENDING"|"PROVISIONING"|"RUNNING"|"FAILED"|"SUCCEED"|"CANCELLING"|"CANCELLED", endTime:int|string|\DateTimeInterface, logUrl?:string, artifactsUrl?:string, testArtifactsUrl?:string, testConfigUrl?:string, screenshots?:array<string, string>, statusReason?:string, context?:string}>}}>
     */
    public function getJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{webhookId:string} $args
     * @return \AWS\Result<array{webhook:array{webhookArn:string, webhookId:string, webhookUrl:string, branchName:string, description:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function getWebhook(array $args): \AWS\Result { }

    /**
     * @param array{webhookId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{webhook:array{webhookArn:string, webhookId:string, webhookUrl:string, branchName:string, description:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function getWebhookAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{apps:array<array{appId:string, appArn:string, name:string, tags?:array<string, string>, description:string, repository:string, platform:"WEB"|"WEB_DYNAMIC"|"WEB_COMPUTE", createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, iamServiceRoleArn?:string, environmentVariables:array<string, string>, defaultDomain:string, enableBranchAutoBuild:bool, enableBranchAutoDeletion?:bool, enableBasicAuth:bool, basicAuthCredentials?:string, customRules?:array<array{source:string, target:string, status?:string, condition?:string}>, productionBranch?:array{lastDeployTime?:int|string|\DateTimeInterface, status?:string, thumbnailUrl?:string, branchName?:string}, buildSpec?:string, customHeaders?:string, enableAutoBranchCreation?:bool, autoBranchCreationPatterns?:array<string>, autoBranchCreationConfig?:array{stage?:"PRODUCTION"|"BETA"|"DEVELOPMENT"|"EXPERIMENTAL"|"PULL_REQUEST", framework?:string, enableAutoBuild?:bool, environmentVariables?:array<string, string>, basicAuthCredentials?:string, enableBasicAuth?:bool, enablePerformanceMode?:bool, buildSpec?:string, enablePullRequestPreview?:bool, pullRequestEnvironmentName?:string}, repositoryCloneMethod?:"SSH"|"TOKEN"|"SIGV4", cacheConfig?:array{type:"AMPLIFY_MANAGED"|"AMPLIFY_MANAGED_NO_COOKIES"}, webhookCreateTime?:int|string|\DateTimeInterface, wafConfiguration?:array{webAclArn?:string, wafStatus?:"ASSOCIATING"|"ASSOCIATION_FAILED"|"ASSOCIATION_SUCCESS"|"DISASSOCIATING"|"DISASSOCIATION_FAILED", statusReason?:string}}>, nextToken?:string}>
     */
    public function listApps(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{apps:array<array{appId:string, appArn:string, name:string, tags?:array<string, string>, description:string, repository:string, platform:"WEB"|"WEB_DYNAMIC"|"WEB_COMPUTE", createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, iamServiceRoleArn?:string, environmentVariables:array<string, string>, defaultDomain:string, enableBranchAutoBuild:bool, enableBranchAutoDeletion?:bool, enableBasicAuth:bool, basicAuthCredentials?:string, customRules?:array<array{source:string, target:string, status?:string, condition?:string}>, productionBranch?:array{lastDeployTime?:int|string|\DateTimeInterface, status?:string, thumbnailUrl?:string, branchName?:string}, buildSpec?:string, customHeaders?:string, enableAutoBranchCreation?:bool, autoBranchCreationPatterns?:array<string>, autoBranchCreationConfig?:array{stage?:"PRODUCTION"|"BETA"|"DEVELOPMENT"|"EXPERIMENTAL"|"PULL_REQUEST", framework?:string, enableAutoBuild?:bool, environmentVariables?:array<string, string>, basicAuthCredentials?:string, enableBasicAuth?:bool, enablePerformanceMode?:bool, buildSpec?:string, enablePullRequestPreview?:bool, pullRequestEnvironmentName?:string}, repositoryCloneMethod?:"SSH"|"TOKEN"|"SIGV4", cacheConfig?:array{type:"AMPLIFY_MANAGED"|"AMPLIFY_MANAGED_NO_COOKIES"}, webhookCreateTime?:int|string|\DateTimeInterface, wafConfiguration?:array{webAclArn?:string, wafStatus?:"ASSOCIATING"|"ASSOCIATION_FAILED"|"ASSOCIATION_SUCCESS"|"DISASSOCIATING"|"DISASSOCIATION_FAILED", statusReason?:string}}>, nextToken?:string}>
     */
    public function listAppsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId:string, branchName:string, jobId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{artifacts:array<array{artifactFileName:string, artifactId:string}>, nextToken?:string}>
     */
    public function listArtifacts(array $args): \AWS\Result { }

    /**
     * @param array{appId:string, branchName:string, jobId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{artifacts:array<array{artifactFileName:string, artifactId:string}>, nextToken?:string}>
     */
    public function listArtifactsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId:string, environmentName?:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{backendEnvironments:array<array{backendEnvironmentArn:string, environmentName:string, stackName?:string, deploymentArtifacts?:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listBackendEnvironments(array $args): \AWS\Result { }

    /**
     * @param array{appId:string, environmentName?:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{backendEnvironments:array<array{backendEnvironmentArn:string, environmentName:string, stackName?:string, deploymentArtifacts?:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listBackendEnvironmentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{branches:array<array{branchArn:string, branchName:string, description:string, tags?:array<string, string>, stage:"PRODUCTION"|"BETA"|"DEVELOPMENT"|"EXPERIMENTAL"|"PULL_REQUEST", displayName:string, enableNotification:bool, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, environmentVariables:array<string, string>, enableAutoBuild:bool, customDomains:array<string>, framework:string, activeJobId:string, totalNumberOfJobs:string, enableBasicAuth:bool, enablePerformanceMode?:bool, thumbnailUrl?:string, basicAuthCredentials?:string, buildSpec?:string, ttl:string, associatedResources?:array<string>, enablePullRequestPreview:bool, pullRequestEnvironmentName?:string, destinationBranch?:string, sourceBranch?:string, backendEnvironmentArn?:string, backend?:array{stackArn?:string}}>, nextToken?:string}>
     */
    public function listBranches(array $args): \AWS\Result { }

    /**
     * @param array{appId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{branches:array<array{branchArn:string, branchName:string, description:string, tags?:array<string, string>, stage:"PRODUCTION"|"BETA"|"DEVELOPMENT"|"EXPERIMENTAL"|"PULL_REQUEST", displayName:string, enableNotification:bool, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, environmentVariables:array<string, string>, enableAutoBuild:bool, customDomains:array<string>, framework:string, activeJobId:string, totalNumberOfJobs:string, enableBasicAuth:bool, enablePerformanceMode?:bool, thumbnailUrl?:string, basicAuthCredentials?:string, buildSpec?:string, ttl:string, associatedResources?:array<string>, enablePullRequestPreview:bool, pullRequestEnvironmentName?:string, destinationBranch?:string, sourceBranch?:string, backendEnvironmentArn?:string, backend?:array{stackArn?:string}}>, nextToken?:string}>
     */
    public function listBranchesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{domainAssociations:array<array{domainAssociationArn:string, domainName:string, enableAutoSubDomain:bool, autoSubDomainCreationPatterns?:array<string>, autoSubDomainIAMRole?:string, domainStatus:"PENDING_VERIFICATION"|"IN_PROGRESS"|"AVAILABLE"|"IMPORTING_CUSTOM_CERTIFICATE"|"PENDING_DEPLOYMENT"|"AWAITING_APP_CNAME"|"FAILED"|"CREATING"|"REQUESTING_CERTIFICATE"|"UPDATING", updateStatus?:"REQUESTING_CERTIFICATE"|"PENDING_VERIFICATION"|"IMPORTING_CUSTOM_CERTIFICATE"|"PENDING_DEPLOYMENT"|"AWAITING_APP_CNAME"|"UPDATE_COMPLETE"|"UPDATE_FAILED", statusReason:string, certificateVerificationDNSRecord?:string, subDomains:array<array{subDomainSetting:array{prefix:string, branchName:string}, verified:bool, dnsRecord:string}>, certificate?:array{type:"AMPLIFY_MANAGED"|"CUSTOM", customCertificateArn?:string, certificateVerificationDNSRecord?:string}}>, nextToken?:string}>
     */
    public function listDomainAssociations(array $args): \AWS\Result { }

    /**
     * @param array{appId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{domainAssociations:array<array{domainAssociationArn:string, domainName:string, enableAutoSubDomain:bool, autoSubDomainCreationPatterns?:array<string>, autoSubDomainIAMRole?:string, domainStatus:"PENDING_VERIFICATION"|"IN_PROGRESS"|"AVAILABLE"|"IMPORTING_CUSTOM_CERTIFICATE"|"PENDING_DEPLOYMENT"|"AWAITING_APP_CNAME"|"FAILED"|"CREATING"|"REQUESTING_CERTIFICATE"|"UPDATING", updateStatus?:"REQUESTING_CERTIFICATE"|"PENDING_VERIFICATION"|"IMPORTING_CUSTOM_CERTIFICATE"|"PENDING_DEPLOYMENT"|"AWAITING_APP_CNAME"|"UPDATE_COMPLETE"|"UPDATE_FAILED", statusReason:string, certificateVerificationDNSRecord?:string, subDomains:array<array{subDomainSetting:array{prefix:string, branchName:string}, verified:bool, dnsRecord:string}>, certificate?:array{type:"AMPLIFY_MANAGED"|"CUSTOM", customCertificateArn?:string, certificateVerificationDNSRecord?:string}}>, nextToken?:string}>
     */
    public function listDomainAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId:string, branchName:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{jobSummaries:array<array{jobArn:string, jobId:string, commitId:string, commitMessage:string, commitTime:int|string|\DateTimeInterface, startTime:int|string|\DateTimeInterface, status:"CREATED"|"PENDING"|"PROVISIONING"|"RUNNING"|"FAILED"|"SUCCEED"|"CANCELLING"|"CANCELLED", endTime?:int|string|\DateTimeInterface, jobType:"RELEASE"|"RETRY"|"MANUAL"|"WEB_HOOK", sourceUrl?:string, sourceUrlType?:"ZIP"|"BUCKET_PREFIX"}>, nextToken?:string}>
     */
    public function listJobs(array $args): \AWS\Result { }

    /**
     * @param array{appId:string, branchName:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobSummaries:array<array{jobArn:string, jobId:string, commitId:string, commitMessage:string, commitTime:int|string|\DateTimeInterface, startTime:int|string|\DateTimeInterface, status:"CREATED"|"PENDING"|"PROVISIONING"|"RUNNING"|"FAILED"|"SUCCEED"|"CANCELLING"|"CANCELLED", endTime?:int|string|\DateTimeInterface, jobType:"RELEASE"|"RETRY"|"MANUAL"|"WEB_HOOK", sourceUrl?:string, sourceUrlType?:"ZIP"|"BUCKET_PREFIX"}>, nextToken?:string}>
     */
    public function listJobsAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{appId:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{webhooks:array<array{webhookArn:string, webhookId:string, webhookUrl:string, branchName:string, description:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listWebhooks(array $args): \AWS\Result { }

    /**
     * @param array{appId:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{webhooks:array<array{webhookArn:string, webhookId:string, webhookUrl:string, branchName:string, description:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listWebhooksAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId:string, branchName:string, jobId?:string, sourceUrl?:string, sourceUrlType?:"ZIP"|"BUCKET_PREFIX"} $args
     * @return \AWS\Result<array{jobSummary:array{jobArn:string, jobId:string, commitId:string, commitMessage:string, commitTime:int|string|\DateTimeInterface, startTime:int|string|\DateTimeInterface, status:"CREATED"|"PENDING"|"PROVISIONING"|"RUNNING"|"FAILED"|"SUCCEED"|"CANCELLING"|"CANCELLED", endTime?:int|string|\DateTimeInterface, jobType:"RELEASE"|"RETRY"|"MANUAL"|"WEB_HOOK", sourceUrl?:string, sourceUrlType?:"ZIP"|"BUCKET_PREFIX"}}>
     */
    public function startDeployment(array $args): \AWS\Result { }

    /**
     * @param array{appId:string, branchName:string, jobId?:string, sourceUrl?:string, sourceUrlType?:"ZIP"|"BUCKET_PREFIX"} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobSummary:array{jobArn:string, jobId:string, commitId:string, commitMessage:string, commitTime:int|string|\DateTimeInterface, startTime:int|string|\DateTimeInterface, status:"CREATED"|"PENDING"|"PROVISIONING"|"RUNNING"|"FAILED"|"SUCCEED"|"CANCELLING"|"CANCELLED", endTime?:int|string|\DateTimeInterface, jobType:"RELEASE"|"RETRY"|"MANUAL"|"WEB_HOOK", sourceUrl?:string, sourceUrlType?:"ZIP"|"BUCKET_PREFIX"}}>
     */
    public function startDeploymentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId:string, branchName:string, jobId?:string, jobType:"RELEASE"|"RETRY"|"MANUAL"|"WEB_HOOK", jobReason?:string, commitId?:string, commitMessage?:string, commitTime?:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{jobSummary:array{jobArn:string, jobId:string, commitId:string, commitMessage:string, commitTime:int|string|\DateTimeInterface, startTime:int|string|\DateTimeInterface, status:"CREATED"|"PENDING"|"PROVISIONING"|"RUNNING"|"FAILED"|"SUCCEED"|"CANCELLING"|"CANCELLED", endTime?:int|string|\DateTimeInterface, jobType:"RELEASE"|"RETRY"|"MANUAL"|"WEB_HOOK", sourceUrl?:string, sourceUrlType?:"ZIP"|"BUCKET_PREFIX"}}>
     */
    public function startJob(array $args): \AWS\Result { }

    /**
     * @param array{appId:string, branchName:string, jobId?:string, jobType:"RELEASE"|"RETRY"|"MANUAL"|"WEB_HOOK", jobReason?:string, commitId?:string, commitMessage?:string, commitTime?:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobSummary:array{jobArn:string, jobId:string, commitId:string, commitMessage:string, commitTime:int|string|\DateTimeInterface, startTime:int|string|\DateTimeInterface, status:"CREATED"|"PENDING"|"PROVISIONING"|"RUNNING"|"FAILED"|"SUCCEED"|"CANCELLING"|"CANCELLED", endTime?:int|string|\DateTimeInterface, jobType:"RELEASE"|"RETRY"|"MANUAL"|"WEB_HOOK", sourceUrl?:string, sourceUrlType?:"ZIP"|"BUCKET_PREFIX"}}>
     */
    public function startJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId:string, branchName:string, jobId:string} $args
     * @return \AWS\Result<array{jobSummary:array{jobArn:string, jobId:string, commitId:string, commitMessage:string, commitTime:int|string|\DateTimeInterface, startTime:int|string|\DateTimeInterface, status:"CREATED"|"PENDING"|"PROVISIONING"|"RUNNING"|"FAILED"|"SUCCEED"|"CANCELLING"|"CANCELLED", endTime?:int|string|\DateTimeInterface, jobType:"RELEASE"|"RETRY"|"MANUAL"|"WEB_HOOK", sourceUrl?:string, sourceUrlType?:"ZIP"|"BUCKET_PREFIX"}}>
     */
    public function stopJob(array $args): \AWS\Result { }

    /**
     * @param array{appId:string, branchName:string, jobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobSummary:array{jobArn:string, jobId:string, commitId:string, commitMessage:string, commitTime:int|string|\DateTimeInterface, startTime:int|string|\DateTimeInterface, status:"CREATED"|"PENDING"|"PROVISIONING"|"RUNNING"|"FAILED"|"SUCCEED"|"CANCELLING"|"CANCELLED", endTime?:int|string|\DateTimeInterface, jobType:"RELEASE"|"RETRY"|"MANUAL"|"WEB_HOOK", sourceUrl?:string, sourceUrlType?:"ZIP"|"BUCKET_PREFIX"}}>
     */
    public function stopJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{appId:string, name?:string, description?:string, platform?:"WEB"|"WEB_DYNAMIC"|"WEB_COMPUTE", iamServiceRoleArn?:string, environmentVariables?:array<string, string>, enableBranchAutoBuild?:bool, enableBranchAutoDeletion?:bool, enableBasicAuth?:bool, basicAuthCredentials?:string, customRules?:array<array{source:string, target:string, status?:string, condition?:string}>, buildSpec?:string, customHeaders?:string, enableAutoBranchCreation?:bool, autoBranchCreationPatterns?:array<string>, autoBranchCreationConfig?:array{stage?:"PRODUCTION"|"BETA"|"DEVELOPMENT"|"EXPERIMENTAL"|"PULL_REQUEST", framework?:string, enableAutoBuild?:bool, environmentVariables?:array<string, string>, basicAuthCredentials?:string, enableBasicAuth?:bool, enablePerformanceMode?:bool, buildSpec?:string, enablePullRequestPreview?:bool, pullRequestEnvironmentName?:string}, repository?:string, oauthToken?:string, accessToken?:string, cacheConfig?:array{type:"AMPLIFY_MANAGED"|"AMPLIFY_MANAGED_NO_COOKIES"}} $args
     * @return \AWS\Result<array{app:array{appId:string, appArn:string, name:string, tags?:array<string, string>, description:string, repository:string, platform:"WEB"|"WEB_DYNAMIC"|"WEB_COMPUTE", createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, iamServiceRoleArn?:string, environmentVariables:array<string, string>, defaultDomain:string, enableBranchAutoBuild:bool, enableBranchAutoDeletion?:bool, enableBasicAuth:bool, basicAuthCredentials?:string, customRules?:array<array{source:string, target:string, status?:string, condition?:string}>, productionBranch?:array{lastDeployTime?:int|string|\DateTimeInterface, status?:string, thumbnailUrl?:string, branchName?:string}, buildSpec?:string, customHeaders?:string, enableAutoBranchCreation?:bool, autoBranchCreationPatterns?:array<string>, autoBranchCreationConfig?:array{stage?:"PRODUCTION"|"BETA"|"DEVELOPMENT"|"EXPERIMENTAL"|"PULL_REQUEST", framework?:string, enableAutoBuild?:bool, environmentVariables?:array<string, string>, basicAuthCredentials?:string, enableBasicAuth?:bool, enablePerformanceMode?:bool, buildSpec?:string, enablePullRequestPreview?:bool, pullRequestEnvironmentName?:string}, repositoryCloneMethod?:"SSH"|"TOKEN"|"SIGV4", cacheConfig?:array{type:"AMPLIFY_MANAGED"|"AMPLIFY_MANAGED_NO_COOKIES"}, webhookCreateTime?:int|string|\DateTimeInterface, wafConfiguration?:array{webAclArn?:string, wafStatus?:"ASSOCIATING"|"ASSOCIATION_FAILED"|"ASSOCIATION_SUCCESS"|"DISASSOCIATING"|"DISASSOCIATION_FAILED", statusReason?:string}}}>
     */
    public function updateApp(array $args): \AWS\Result { }

    /**
     * @param array{appId:string, name?:string, description?:string, platform?:"WEB"|"WEB_DYNAMIC"|"WEB_COMPUTE", iamServiceRoleArn?:string, environmentVariables?:array<string, string>, enableBranchAutoBuild?:bool, enableBranchAutoDeletion?:bool, enableBasicAuth?:bool, basicAuthCredentials?:string, customRules?:array<array{source:string, target:string, status?:string, condition?:string}>, buildSpec?:string, customHeaders?:string, enableAutoBranchCreation?:bool, autoBranchCreationPatterns?:array<string>, autoBranchCreationConfig?:array{stage?:"PRODUCTION"|"BETA"|"DEVELOPMENT"|"EXPERIMENTAL"|"PULL_REQUEST", framework?:string, enableAutoBuild?:bool, environmentVariables?:array<string, string>, basicAuthCredentials?:string, enableBasicAuth?:bool, enablePerformanceMode?:bool, buildSpec?:string, enablePullRequestPreview?:bool, pullRequestEnvironmentName?:string}, repository?:string, oauthToken?:string, accessToken?:string, cacheConfig?:array{type:"AMPLIFY_MANAGED"|"AMPLIFY_MANAGED_NO_COOKIES"}} $args
     * @return \GuzzleHttp\Promise\Promise<array{app:array{appId:string, appArn:string, name:string, tags?:array<string, string>, description:string, repository:string, platform:"WEB"|"WEB_DYNAMIC"|"WEB_COMPUTE", createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, iamServiceRoleArn?:string, environmentVariables:array<string, string>, defaultDomain:string, enableBranchAutoBuild:bool, enableBranchAutoDeletion?:bool, enableBasicAuth:bool, basicAuthCredentials?:string, customRules?:array<array{source:string, target:string, status?:string, condition?:string}>, productionBranch?:array{lastDeployTime?:int|string|\DateTimeInterface, status?:string, thumbnailUrl?:string, branchName?:string}, buildSpec?:string, customHeaders?:string, enableAutoBranchCreation?:bool, autoBranchCreationPatterns?:array<string>, autoBranchCreationConfig?:array{stage?:"PRODUCTION"|"BETA"|"DEVELOPMENT"|"EXPERIMENTAL"|"PULL_REQUEST", framework?:string, enableAutoBuild?:bool, environmentVariables?:array<string, string>, basicAuthCredentials?:string, enableBasicAuth?:bool, enablePerformanceMode?:bool, buildSpec?:string, enablePullRequestPreview?:bool, pullRequestEnvironmentName?:string}, repositoryCloneMethod?:"SSH"|"TOKEN"|"SIGV4", cacheConfig?:array{type:"AMPLIFY_MANAGED"|"AMPLIFY_MANAGED_NO_COOKIES"}, webhookCreateTime?:int|string|\DateTimeInterface, wafConfiguration?:array{webAclArn?:string, wafStatus?:"ASSOCIATING"|"ASSOCIATION_FAILED"|"ASSOCIATION_SUCCESS"|"DISASSOCIATING"|"DISASSOCIATION_FAILED", statusReason?:string}}}>
     */
    public function updateAppAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId:string, branchName:string, description?:string, framework?:string, stage?:"PRODUCTION"|"BETA"|"DEVELOPMENT"|"EXPERIMENTAL"|"PULL_REQUEST", enableNotification?:bool, enableAutoBuild?:bool, environmentVariables?:array<string, string>, basicAuthCredentials?:string, enableBasicAuth?:bool, enablePerformanceMode?:bool, buildSpec?:string, ttl?:string, displayName?:string, enablePullRequestPreview?:bool, pullRequestEnvironmentName?:string, backendEnvironmentArn?:string, backend?:array{stackArn?:string}} $args
     * @return \AWS\Result<array{branch:array{branchArn:string, branchName:string, description:string, tags?:array<string, string>, stage:"PRODUCTION"|"BETA"|"DEVELOPMENT"|"EXPERIMENTAL"|"PULL_REQUEST", displayName:string, enableNotification:bool, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, environmentVariables:array<string, string>, enableAutoBuild:bool, customDomains:array<string>, framework:string, activeJobId:string, totalNumberOfJobs:string, enableBasicAuth:bool, enablePerformanceMode?:bool, thumbnailUrl?:string, basicAuthCredentials?:string, buildSpec?:string, ttl:string, associatedResources?:array<string>, enablePullRequestPreview:bool, pullRequestEnvironmentName?:string, destinationBranch?:string, sourceBranch?:string, backendEnvironmentArn?:string, backend?:array{stackArn?:string}}}>
     */
    public function updateBranch(array $args): \AWS\Result { }

    /**
     * @param array{appId:string, branchName:string, description?:string, framework?:string, stage?:"PRODUCTION"|"BETA"|"DEVELOPMENT"|"EXPERIMENTAL"|"PULL_REQUEST", enableNotification?:bool, enableAutoBuild?:bool, environmentVariables?:array<string, string>, basicAuthCredentials?:string, enableBasicAuth?:bool, enablePerformanceMode?:bool, buildSpec?:string, ttl?:string, displayName?:string, enablePullRequestPreview?:bool, pullRequestEnvironmentName?:string, backendEnvironmentArn?:string, backend?:array{stackArn?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{branch:array{branchArn:string, branchName:string, description:string, tags?:array<string, string>, stage:"PRODUCTION"|"BETA"|"DEVELOPMENT"|"EXPERIMENTAL"|"PULL_REQUEST", displayName:string, enableNotification:bool, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface, environmentVariables:array<string, string>, enableAutoBuild:bool, customDomains:array<string>, framework:string, activeJobId:string, totalNumberOfJobs:string, enableBasicAuth:bool, enablePerformanceMode?:bool, thumbnailUrl?:string, basicAuthCredentials?:string, buildSpec?:string, ttl:string, associatedResources?:array<string>, enablePullRequestPreview:bool, pullRequestEnvironmentName?:string, destinationBranch?:string, sourceBranch?:string, backendEnvironmentArn?:string, backend?:array{stackArn?:string}}}>
     */
    public function updateBranchAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{appId:string, domainName:string, enableAutoSubDomain?:bool, subDomainSettings?:array<array{prefix:string, branchName:string}>, autoSubDomainCreationPatterns?:array<string>, autoSubDomainIAMRole?:string, certificateSettings?:array{type:"AMPLIFY_MANAGED"|"CUSTOM", customCertificateArn?:string}} $args
     * @return \AWS\Result<array{domainAssociation:array{domainAssociationArn:string, domainName:string, enableAutoSubDomain:bool, autoSubDomainCreationPatterns?:array<string>, autoSubDomainIAMRole?:string, domainStatus:"PENDING_VERIFICATION"|"IN_PROGRESS"|"AVAILABLE"|"IMPORTING_CUSTOM_CERTIFICATE"|"PENDING_DEPLOYMENT"|"AWAITING_APP_CNAME"|"FAILED"|"CREATING"|"REQUESTING_CERTIFICATE"|"UPDATING", updateStatus?:"REQUESTING_CERTIFICATE"|"PENDING_VERIFICATION"|"IMPORTING_CUSTOM_CERTIFICATE"|"PENDING_DEPLOYMENT"|"AWAITING_APP_CNAME"|"UPDATE_COMPLETE"|"UPDATE_FAILED", statusReason:string, certificateVerificationDNSRecord?:string, subDomains:array<array{subDomainSetting:array{prefix:string, branchName:string}, verified:bool, dnsRecord:string}>, certificate?:array{type:"AMPLIFY_MANAGED"|"CUSTOM", customCertificateArn?:string, certificateVerificationDNSRecord?:string}}}>
     */
    public function updateDomainAssociation(array $args): \AWS\Result { }

    /**
     * @param array{appId:string, domainName:string, enableAutoSubDomain?:bool, subDomainSettings?:array<array{prefix:string, branchName:string}>, autoSubDomainCreationPatterns?:array<string>, autoSubDomainIAMRole?:string, certificateSettings?:array{type:"AMPLIFY_MANAGED"|"CUSTOM", customCertificateArn?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{domainAssociation:array{domainAssociationArn:string, domainName:string, enableAutoSubDomain:bool, autoSubDomainCreationPatterns?:array<string>, autoSubDomainIAMRole?:string, domainStatus:"PENDING_VERIFICATION"|"IN_PROGRESS"|"AVAILABLE"|"IMPORTING_CUSTOM_CERTIFICATE"|"PENDING_DEPLOYMENT"|"AWAITING_APP_CNAME"|"FAILED"|"CREATING"|"REQUESTING_CERTIFICATE"|"UPDATING", updateStatus?:"REQUESTING_CERTIFICATE"|"PENDING_VERIFICATION"|"IMPORTING_CUSTOM_CERTIFICATE"|"PENDING_DEPLOYMENT"|"AWAITING_APP_CNAME"|"UPDATE_COMPLETE"|"UPDATE_FAILED", statusReason:string, certificateVerificationDNSRecord?:string, subDomains:array<array{subDomainSetting:array{prefix:string, branchName:string}, verified:bool, dnsRecord:string}>, certificate?:array{type:"AMPLIFY_MANAGED"|"CUSTOM", customCertificateArn?:string, certificateVerificationDNSRecord?:string}}}>
     */
    public function updateDomainAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{webhookId:string, branchName?:string, description?:string} $args
     * @return \AWS\Result<array{webhook:array{webhookArn:string, webhookId:string, webhookUrl:string, branchName:string, description:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function updateWebhook(array $args): \AWS\Result { }

    /**
     * @param array{webhookId:string, branchName?:string, description?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{webhook:array{webhookArn:string, webhookId:string, webhookUrl:string, branchName:string, description:string, createTime:int|string|\DateTimeInterface, updateTime:int|string|\DateTimeInterface}}>
     */
    public function updateWebhookAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
