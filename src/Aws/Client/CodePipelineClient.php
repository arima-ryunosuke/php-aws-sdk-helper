<?php
namespace AWS\CodePipeline;

class CodePipelineClient
{
    /**
     * @param array{jobId:string, nonce:string} $args
     * @return \AWS\Result<array{status?:"Created"|"Queued"|"Dispatched"|"InProgress"|"TimedOut"|"Succeeded"|"Failed"}>
     */
    public function acknowledgeJob(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string, nonce:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{status?:"Created"|"Queued"|"Dispatched"|"InProgress"|"TimedOut"|"Succeeded"|"Failed"}>
     */
    public function acknowledgeJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string, nonce:string, clientToken:string} $args
     * @return \AWS\Result<array{status?:"Created"|"Queued"|"Dispatched"|"InProgress"|"TimedOut"|"Succeeded"|"Failed"}>
     */
    public function acknowledgeThirdPartyJob(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string, nonce:string, clientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{status?:"Created"|"Queued"|"Dispatched"|"InProgress"|"TimedOut"|"Succeeded"|"Failed"}>
     */
    public function acknowledgeThirdPartyJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", provider:string, version:string, settings?:array{thirdPartyConfigurationUrl?:string, entityUrlTemplate?:string, executionUrlTemplate?:string, revisionUrlTemplate?:string}, configurationProperties?:array<array{name:string, required:bool, key:bool, secret:bool, queryable?:bool, description?:string, type?:"String"|"Number"|"Boolean"}>, inputArtifactDetails:array{minimumCount:int, maximumCount:int}, outputArtifactDetails:array{minimumCount:int, maximumCount:int}, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{actionType:array{id:array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", owner:"AWS"|"ThirdParty"|"Custom", provider:string, version:string}, settings?:array{thirdPartyConfigurationUrl?:string, entityUrlTemplate?:string, executionUrlTemplate?:string, revisionUrlTemplate?:string}, actionConfigurationProperties?:array<array{name:string, required:bool, key:bool, secret:bool, queryable?:bool, description?:string, type?:"String"|"Number"|"Boolean"}>, inputArtifactDetails:array{minimumCount:int, maximumCount:int}, outputArtifactDetails:array{minimumCount:int, maximumCount:int}}, tags?:array<array{key:string, value:string}>}>
     */
    public function createCustomActionType(array $args): \AWS\Result { }

    /**
     * @param array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", provider:string, version:string, settings?:array{thirdPartyConfigurationUrl?:string, entityUrlTemplate?:string, executionUrlTemplate?:string, revisionUrlTemplate?:string}, configurationProperties?:array<array{name:string, required:bool, key:bool, secret:bool, queryable?:bool, description?:string, type?:"String"|"Number"|"Boolean"}>, inputArtifactDetails:array{minimumCount:int, maximumCount:int}, outputArtifactDetails:array{minimumCount:int, maximumCount:int}, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{actionType:array{id:array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", owner:"AWS"|"ThirdParty"|"Custom", provider:string, version:string}, settings?:array{thirdPartyConfigurationUrl?:string, entityUrlTemplate?:string, executionUrlTemplate?:string, revisionUrlTemplate?:string}, actionConfigurationProperties?:array<array{name:string, required:bool, key:bool, secret:bool, queryable?:bool, description?:string, type?:"String"|"Number"|"Boolean"}>, inputArtifactDetails:array{minimumCount:int, maximumCount:int}, outputArtifactDetails:array{minimumCount:int, maximumCount:int}}, tags?:array<array{key:string, value:string}>}>
     */
    public function createCustomActionTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pipeline:array{name:string, roleArn:string, artifactStore?:array{type:"S3", location:string, encryptionKey?:array{id:string, type:"KMS"}}, artifactStores?:array<string, array{type:"S3", location:string, encryptionKey?:array{id:string, type:"KMS"}}>, stages:array<array{name:string, blockers?:array<array{name:string, type:"Schedule"}>, actions:array<array{name:string, actionTypeId:array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", owner:"AWS"|"ThirdParty"|"Custom", provider:string, version:string}, runOrder?:int, configuration?:array<string, string>, commands?:array<string>, outputArtifacts?:array<array{name:string, files?:array<string>}>, inputArtifacts?:array<array{name:string}>, outputVariables?:array<string>, roleArn?:string, region?:string, namespace?:string, timeoutInMinutes?:int}>, onFailure?:array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", retryConfiguration?:array{retryMode?:"FAILED_ACTIONS"|"ALL_ACTIONS"}, conditions?:array<array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", rules?:array<array{name:string, ruleTypeId:array{category:"Rule", owner?:"AWS", provider:string, version?:string}, configuration?:array<string, string>, commands?:array<string>, inputArtifacts?:array<array{name:string}>, roleArn?:string, region?:string, timeoutInMinutes?:int}>}>}, onSuccess?:array{conditions:array<array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", rules?:array<array{name:string, ruleTypeId:array{category:"Rule", owner?:"AWS", provider:string, version?:string}, configuration?:array<string, string>, commands?:array<string>, inputArtifacts?:array<array{name:string}>, roleArn?:string, region?:string, timeoutInMinutes?:int}>}>}, beforeEntry?:array{conditions:array<array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", rules?:array<array{name:string, ruleTypeId:array{category:"Rule", owner?:"AWS", provider:string, version?:string}, configuration?:array<string, string>, commands?:array<string>, inputArtifacts?:array<array{name:string}>, roleArn?:string, region?:string, timeoutInMinutes?:int}>}>}}>, version?:int, executionMode?:"QUEUED"|"SUPERSEDED"|"PARALLEL", pipelineType?:"V1"|"V2", variables?:array<array{name:string, defaultValue?:string, description?:string}>, triggers?:array<array{providerType:"CodeStarSourceConnection", gitConfiguration:array{sourceActionName:string, push?:array<array{tags?:array{includes?:array<string>, excludes?:array<string>}, branches?:array{includes?:array<string>, excludes?:array<string>}, filePaths?:array{includes?:array<string>, excludes?:array<string>}}>, pullRequest?:array<array{events?:array<"OPEN"|"UPDATED"|"CLOSED">, branches?:array{includes?:array<string>, excludes?:array<string>}, filePaths?:array{includes?:array<string>, excludes?:array<string>}}>}}>}, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{pipeline?:array{name:string, roleArn:string, artifactStore?:array{type:"S3", location:string, encryptionKey?:array{id:string, type:"KMS"}}, artifactStores?:array<string, array{type:"S3", location:string, encryptionKey?:array{id:string, type:"KMS"}}>, stages:array<array{name:string, blockers?:array<array{name:string, type:"Schedule"}>, actions:array<array{name:string, actionTypeId:array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", owner:"AWS"|"ThirdParty"|"Custom", provider:string, version:string}, runOrder?:int, configuration?:array<string, string>, commands?:array<string>, outputArtifacts?:array<array{name:string, files?:array<string>}>, inputArtifacts?:array<array{name:string}>, outputVariables?:array<string>, roleArn?:string, region?:string, namespace?:string, timeoutInMinutes?:int}>, onFailure?:array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", retryConfiguration?:array{retryMode?:"FAILED_ACTIONS"|"ALL_ACTIONS"}, conditions?:array<array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", rules?:array<array{name:string, ruleTypeId:array{category:"Rule", owner?:"AWS", provider:string, version?:string}, configuration?:array<string, string>, commands?:array<string>, inputArtifacts?:array<array{name:string}>, roleArn?:string, region?:string, timeoutInMinutes?:int}>}>}, onSuccess?:array{conditions:array<array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", rules?:array<array{name:string, ruleTypeId:array{category:"Rule", owner?:"AWS", provider:string, version?:string}, configuration?:array<string, string>, commands?:array<string>, inputArtifacts?:array<array{name:string}>, roleArn?:string, region?:string, timeoutInMinutes?:int}>}>}, beforeEntry?:array{conditions:array<array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", rules?:array<array{name:string, ruleTypeId:array{category:"Rule", owner?:"AWS", provider:string, version?:string}, configuration?:array<string, string>, commands?:array<string>, inputArtifacts?:array<array{name:string}>, roleArn?:string, region?:string, timeoutInMinutes?:int}>}>}}>, version?:int, executionMode?:"QUEUED"|"SUPERSEDED"|"PARALLEL", pipelineType?:"V1"|"V2", variables?:array<array{name:string, defaultValue?:string, description?:string}>, triggers?:array<array{providerType:"CodeStarSourceConnection", gitConfiguration:array{sourceActionName:string, push?:array<array{tags?:array{includes?:array<string>, excludes?:array<string>}, branches?:array{includes?:array<string>, excludes?:array<string>}, filePaths?:array{includes?:array<string>, excludes?:array<string>}}>, pullRequest?:array<array{events?:array<"OPEN"|"UPDATED"|"CLOSED">, branches?:array{includes?:array<string>, excludes?:array<string>}, filePaths?:array{includes?:array<string>, excludes?:array<string>}}>}}>}, tags?:array<array{key:string, value:string}>}>
     */
    public function createPipeline(array $args): \AWS\Result { }

    /**
     * @param array{pipeline:array{name:string, roleArn:string, artifactStore?:array{type:"S3", location:string, encryptionKey?:array{id:string, type:"KMS"}}, artifactStores?:array<string, array{type:"S3", location:string, encryptionKey?:array{id:string, type:"KMS"}}>, stages:array<array{name:string, blockers?:array<array{name:string, type:"Schedule"}>, actions:array<array{name:string, actionTypeId:array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", owner:"AWS"|"ThirdParty"|"Custom", provider:string, version:string}, runOrder?:int, configuration?:array<string, string>, commands?:array<string>, outputArtifacts?:array<array{name:string, files?:array<string>}>, inputArtifacts?:array<array{name:string}>, outputVariables?:array<string>, roleArn?:string, region?:string, namespace?:string, timeoutInMinutes?:int}>, onFailure?:array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", retryConfiguration?:array{retryMode?:"FAILED_ACTIONS"|"ALL_ACTIONS"}, conditions?:array<array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", rules?:array<array{name:string, ruleTypeId:array{category:"Rule", owner?:"AWS", provider:string, version?:string}, configuration?:array<string, string>, commands?:array<string>, inputArtifacts?:array<array{name:string}>, roleArn?:string, region?:string, timeoutInMinutes?:int}>}>}, onSuccess?:array{conditions:array<array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", rules?:array<array{name:string, ruleTypeId:array{category:"Rule", owner?:"AWS", provider:string, version?:string}, configuration?:array<string, string>, commands?:array<string>, inputArtifacts?:array<array{name:string}>, roleArn?:string, region?:string, timeoutInMinutes?:int}>}>}, beforeEntry?:array{conditions:array<array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", rules?:array<array{name:string, ruleTypeId:array{category:"Rule", owner?:"AWS", provider:string, version?:string}, configuration?:array<string, string>, commands?:array<string>, inputArtifacts?:array<array{name:string}>, roleArn?:string, region?:string, timeoutInMinutes?:int}>}>}}>, version?:int, executionMode?:"QUEUED"|"SUPERSEDED"|"PARALLEL", pipelineType?:"V1"|"V2", variables?:array<array{name:string, defaultValue?:string, description?:string}>, triggers?:array<array{providerType:"CodeStarSourceConnection", gitConfiguration:array{sourceActionName:string, push?:array<array{tags?:array{includes?:array<string>, excludes?:array<string>}, branches?:array{includes?:array<string>, excludes?:array<string>}, filePaths?:array{includes?:array<string>, excludes?:array<string>}}>, pullRequest?:array<array{events?:array<"OPEN"|"UPDATED"|"CLOSED">, branches?:array{includes?:array<string>, excludes?:array<string>}, filePaths?:array{includes?:array<string>, excludes?:array<string>}}>}}>}, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{pipeline?:array{name:string, roleArn:string, artifactStore?:array{type:"S3", location:string, encryptionKey?:array{id:string, type:"KMS"}}, artifactStores?:array<string, array{type:"S3", location:string, encryptionKey?:array{id:string, type:"KMS"}}>, stages:array<array{name:string, blockers?:array<array{name:string, type:"Schedule"}>, actions:array<array{name:string, actionTypeId:array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", owner:"AWS"|"ThirdParty"|"Custom", provider:string, version:string}, runOrder?:int, configuration?:array<string, string>, commands?:array<string>, outputArtifacts?:array<array{name:string, files?:array<string>}>, inputArtifacts?:array<array{name:string}>, outputVariables?:array<string>, roleArn?:string, region?:string, namespace?:string, timeoutInMinutes?:int}>, onFailure?:array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", retryConfiguration?:array{retryMode?:"FAILED_ACTIONS"|"ALL_ACTIONS"}, conditions?:array<array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", rules?:array<array{name:string, ruleTypeId:array{category:"Rule", owner?:"AWS", provider:string, version?:string}, configuration?:array<string, string>, commands?:array<string>, inputArtifacts?:array<array{name:string}>, roleArn?:string, region?:string, timeoutInMinutes?:int}>}>}, onSuccess?:array{conditions:array<array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", rules?:array<array{name:string, ruleTypeId:array{category:"Rule", owner?:"AWS", provider:string, version?:string}, configuration?:array<string, string>, commands?:array<string>, inputArtifacts?:array<array{name:string}>, roleArn?:string, region?:string, timeoutInMinutes?:int}>}>}, beforeEntry?:array{conditions:array<array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", rules?:array<array{name:string, ruleTypeId:array{category:"Rule", owner?:"AWS", provider:string, version?:string}, configuration?:array<string, string>, commands?:array<string>, inputArtifacts?:array<array{name:string}>, roleArn?:string, region?:string, timeoutInMinutes?:int}>}>}}>, version?:int, executionMode?:"QUEUED"|"SUPERSEDED"|"PARALLEL", pipelineType?:"V1"|"V2", variables?:array<array{name:string, defaultValue?:string, description?:string}>, triggers?:array<array{providerType:"CodeStarSourceConnection", gitConfiguration:array{sourceActionName:string, push?:array<array{tags?:array{includes?:array<string>, excludes?:array<string>}, branches?:array{includes?:array<string>, excludes?:array<string>}, filePaths?:array{includes?:array<string>, excludes?:array<string>}}>, pullRequest?:array<array{events?:array<"OPEN"|"UPDATED"|"CLOSED">, branches?:array{includes?:array<string>, excludes?:array<string>}, filePaths?:array{includes?:array<string>, excludes?:array<string>}}>}}>}, tags?:array<array{key:string, value:string}>}>
     */
    public function createPipelineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", provider:string, version:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteCustomActionType(array $args): \AWS\Result { }

    /**
     * @param array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", provider:string, version:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteCustomActionTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<void>
     */
    public function deletePipeline(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deletePipelineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteWebhook(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteWebhookAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{webhookName?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deregisterWebhookWithThirdParty(array $args = []): \AWS\Result { }

    /**
     * @param array{webhookName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deregisterWebhookWithThirdPartyAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pipelineName:string, stageName:string, transitionType:"Inbound"|"Outbound", reason:string} $args
     * @return \AWS\Result<void>
     */
    public function disableStageTransition(array $args): \AWS\Result { }

    /**
     * @param array{pipelineName:string, stageName:string, transitionType:"Inbound"|"Outbound", reason:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function disableStageTransitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pipelineName:string, stageName:string, transitionType:"Inbound"|"Outbound"} $args
     * @return \AWS\Result<void>
     */
    public function enableStageTransition(array $args): \AWS\Result { }

    /**
     * @param array{pipelineName:string, stageName:string, transitionType:"Inbound"|"Outbound"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function enableStageTransitionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", owner:string, provider:string, version:string} $args
     * @return \AWS\Result<array{actionType?:array{description?:string, executor:array{configuration:array{lambdaExecutorConfiguration?:array{lambdaFunctionArn:string}, jobWorkerExecutorConfiguration?:array{pollingAccounts?:array<string>, pollingServicePrincipals?:array<string>}}, type:"JobWorker"|"Lambda", policyStatementsTemplate?:string, jobTimeout?:int}, id:array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", owner:string, provider:string, version:string}, inputArtifactDetails:array{minimumCount:int, maximumCount:int}, outputArtifactDetails:array{minimumCount:int, maximumCount:int}, permissions?:array{allowedAccounts:array<string>}, properties?:array<array{name:string, optional:bool, key:bool, noEcho:bool, queryable?:bool, description?:string}>, urls?:array{configurationUrl?:string, entityUrlTemplate?:string, executionUrlTemplate?:string, revisionUrlTemplate?:string}}}>
     */
    public function getActionType(array $args): \AWS\Result { }

    /**
     * @param array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", owner:string, provider:string, version:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{actionType?:array{description?:string, executor:array{configuration:array{lambdaExecutorConfiguration?:array{lambdaFunctionArn:string}, jobWorkerExecutorConfiguration?:array{pollingAccounts?:array<string>, pollingServicePrincipals?:array<string>}}, type:"JobWorker"|"Lambda", policyStatementsTemplate?:string, jobTimeout?:int}, id:array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", owner:string, provider:string, version:string}, inputArtifactDetails:array{minimumCount:int, maximumCount:int}, outputArtifactDetails:array{minimumCount:int, maximumCount:int}, permissions?:array{allowedAccounts:array<string>}, properties?:array<array{name:string, optional:bool, key:bool, noEcho:bool, queryable?:bool, description?:string}>, urls?:array{configurationUrl?:string, entityUrlTemplate?:string, executionUrlTemplate?:string, revisionUrlTemplate?:string}}}>
     */
    public function getActionTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string} $args
     * @return \AWS\Result<array{jobDetails?:array{id?:string, data?:array{actionTypeId?:array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", owner:"AWS"|"ThirdParty"|"Custom", provider:string, version:string}, actionConfiguration?:array{configuration?:array<string, string>}, pipelineContext?:array{pipelineName?:string, stage?:array{name?:string}, action?:array{name?:string, actionExecutionId?:string}, pipelineArn?:string, pipelineExecutionId?:string}, inputArtifacts?:array<array{name?:string, revision?:string, location?:array{type?:"S3", s3Location?:array{bucketName:string, objectKey:string}}}>, outputArtifacts?:array<array{name?:string, revision?:string, location?:array{type?:"S3", s3Location?:array{bucketName:string, objectKey:string}}}>, artifactCredentials?:array{accessKeyId:string, secretAccessKey:string, sessionToken:string}, continuationToken?:string, encryptionKey?:array{id:string, type:"KMS"}}, accountId?:string}}>
     */
    public function getJobDetails(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobDetails?:array{id?:string, data?:array{actionTypeId?:array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", owner:"AWS"|"ThirdParty"|"Custom", provider:string, version:string}, actionConfiguration?:array{configuration?:array<string, string>}, pipelineContext?:array{pipelineName?:string, stage?:array{name?:string}, action?:array{name?:string, actionExecutionId?:string}, pipelineArn?:string, pipelineExecutionId?:string}, inputArtifacts?:array<array{name?:string, revision?:string, location?:array{type?:"S3", s3Location?:array{bucketName:string, objectKey:string}}}>, outputArtifacts?:array<array{name?:string, revision?:string, location?:array{type?:"S3", s3Location?:array{bucketName:string, objectKey:string}}}>, artifactCredentials?:array{accessKeyId:string, secretAccessKey:string, sessionToken:string}, continuationToken?:string, encryptionKey?:array{id:string, type:"KMS"}}, accountId?:string}}>
     */
    public function getJobDetailsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, version?:int} $args
     * @return \AWS\Result<array{pipeline?:array{name:string, roleArn:string, artifactStore?:array{type:"S3", location:string, encryptionKey?:array{id:string, type:"KMS"}}, artifactStores?:array<string, array{type:"S3", location:string, encryptionKey?:array{id:string, type:"KMS"}}>, stages:array<array{name:string, blockers?:array<array{name:string, type:"Schedule"}>, actions:array<array{name:string, actionTypeId:array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", owner:"AWS"|"ThirdParty"|"Custom", provider:string, version:string}, runOrder?:int, configuration?:array<string, string>, commands?:array<string>, outputArtifacts?:array<array{name:string, files?:array<string>}>, inputArtifacts?:array<array{name:string}>, outputVariables?:array<string>, roleArn?:string, region?:string, namespace?:string, timeoutInMinutes?:int}>, onFailure?:array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", retryConfiguration?:array{retryMode?:"FAILED_ACTIONS"|"ALL_ACTIONS"}, conditions?:array<array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", rules?:array<array{name:string, ruleTypeId:array{category:"Rule", owner?:"AWS", provider:string, version?:string}, configuration?:array<string, string>, commands?:array<string>, inputArtifacts?:array<array{name:string}>, roleArn?:string, region?:string, timeoutInMinutes?:int}>}>}, onSuccess?:array{conditions:array<array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", rules?:array<array{name:string, ruleTypeId:array{category:"Rule", owner?:"AWS", provider:string, version?:string}, configuration?:array<string, string>, commands?:array<string>, inputArtifacts?:array<array{name:string}>, roleArn?:string, region?:string, timeoutInMinutes?:int}>}>}, beforeEntry?:array{conditions:array<array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", rules?:array<array{name:string, ruleTypeId:array{category:"Rule", owner?:"AWS", provider:string, version?:string}, configuration?:array<string, string>, commands?:array<string>, inputArtifacts?:array<array{name:string}>, roleArn?:string, region?:string, timeoutInMinutes?:int}>}>}}>, version?:int, executionMode?:"QUEUED"|"SUPERSEDED"|"PARALLEL", pipelineType?:"V1"|"V2", variables?:array<array{name:string, defaultValue?:string, description?:string}>, triggers?:array<array{providerType:"CodeStarSourceConnection", gitConfiguration:array{sourceActionName:string, push?:array<array{tags?:array{includes?:array<string>, excludes?:array<string>}, branches?:array{includes?:array<string>, excludes?:array<string>}, filePaths?:array{includes?:array<string>, excludes?:array<string>}}>, pullRequest?:array<array{events?:array<"OPEN"|"UPDATED"|"CLOSED">, branches?:array{includes?:array<string>, excludes?:array<string>}, filePaths?:array{includes?:array<string>, excludes?:array<string>}}>}}>}, metadata?:array{pipelineArn?:string, created?:int|string|\DateTimeInterface, updated?:int|string|\DateTimeInterface, pollingDisabledAt?:int|string|\DateTimeInterface}}>
     */
    public function getPipeline(array $args): \AWS\Result { }

    /**
     * @param array{name:string, version?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{pipeline?:array{name:string, roleArn:string, artifactStore?:array{type:"S3", location:string, encryptionKey?:array{id:string, type:"KMS"}}, artifactStores?:array<string, array{type:"S3", location:string, encryptionKey?:array{id:string, type:"KMS"}}>, stages:array<array{name:string, blockers?:array<array{name:string, type:"Schedule"}>, actions:array<array{name:string, actionTypeId:array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", owner:"AWS"|"ThirdParty"|"Custom", provider:string, version:string}, runOrder?:int, configuration?:array<string, string>, commands?:array<string>, outputArtifacts?:array<array{name:string, files?:array<string>}>, inputArtifacts?:array<array{name:string}>, outputVariables?:array<string>, roleArn?:string, region?:string, namespace?:string, timeoutInMinutes?:int}>, onFailure?:array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", retryConfiguration?:array{retryMode?:"FAILED_ACTIONS"|"ALL_ACTIONS"}, conditions?:array<array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", rules?:array<array{name:string, ruleTypeId:array{category:"Rule", owner?:"AWS", provider:string, version?:string}, configuration?:array<string, string>, commands?:array<string>, inputArtifacts?:array<array{name:string}>, roleArn?:string, region?:string, timeoutInMinutes?:int}>}>}, onSuccess?:array{conditions:array<array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", rules?:array<array{name:string, ruleTypeId:array{category:"Rule", owner?:"AWS", provider:string, version?:string}, configuration?:array<string, string>, commands?:array<string>, inputArtifacts?:array<array{name:string}>, roleArn?:string, region?:string, timeoutInMinutes?:int}>}>}, beforeEntry?:array{conditions:array<array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", rules?:array<array{name:string, ruleTypeId:array{category:"Rule", owner?:"AWS", provider:string, version?:string}, configuration?:array<string, string>, commands?:array<string>, inputArtifacts?:array<array{name:string}>, roleArn?:string, region?:string, timeoutInMinutes?:int}>}>}}>, version?:int, executionMode?:"QUEUED"|"SUPERSEDED"|"PARALLEL", pipelineType?:"V1"|"V2", variables?:array<array{name:string, defaultValue?:string, description?:string}>, triggers?:array<array{providerType:"CodeStarSourceConnection", gitConfiguration:array{sourceActionName:string, push?:array<array{tags?:array{includes?:array<string>, excludes?:array<string>}, branches?:array{includes?:array<string>, excludes?:array<string>}, filePaths?:array{includes?:array<string>, excludes?:array<string>}}>, pullRequest?:array<array{events?:array<"OPEN"|"UPDATED"|"CLOSED">, branches?:array{includes?:array<string>, excludes?:array<string>}, filePaths?:array{includes?:array<string>, excludes?:array<string>}}>}}>}, metadata?:array{pipelineArn?:string, created?:int|string|\DateTimeInterface, updated?:int|string|\DateTimeInterface, pollingDisabledAt?:int|string|\DateTimeInterface}}>
     */
    public function getPipelineAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pipelineName:string, pipelineExecutionId:string} $args
     * @return \AWS\Result<array{pipelineExecution?:array{pipelineName?:string, pipelineVersion?:int, pipelineExecutionId?:string, status?:"Cancelled"|"InProgress"|"Stopped"|"Stopping"|"Succeeded"|"Superseded"|"Failed", statusSummary?:string, artifactRevisions?:array<array{name?:string, revisionId?:string, revisionChangeIdentifier?:string, revisionSummary?:string, created?:int|string|\DateTimeInterface, revisionUrl?:string}>, variables?:array<array{name?:string, resolvedValue?:string}>, trigger?:array{triggerType?:"CreatePipeline"|"StartPipelineExecution"|"PollForSourceChanges"|"Webhook"|"CloudWatchEvent"|"PutActionRevision"|"WebhookV2"|"ManualRollback"|"AutomatedRollback", triggerDetail?:string}, executionMode?:"QUEUED"|"SUPERSEDED"|"PARALLEL", executionType?:"STANDARD"|"ROLLBACK", rollbackMetadata?:array{rollbackTargetPipelineExecutionId?:string}}}>
     */
    public function getPipelineExecution(array $args): \AWS\Result { }

    /**
     * @param array{pipelineName:string, pipelineExecutionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{pipelineExecution?:array{pipelineName?:string, pipelineVersion?:int, pipelineExecutionId?:string, status?:"Cancelled"|"InProgress"|"Stopped"|"Stopping"|"Succeeded"|"Superseded"|"Failed", statusSummary?:string, artifactRevisions?:array<array{name?:string, revisionId?:string, revisionChangeIdentifier?:string, revisionSummary?:string, created?:int|string|\DateTimeInterface, revisionUrl?:string}>, variables?:array<array{name?:string, resolvedValue?:string}>, trigger?:array{triggerType?:"CreatePipeline"|"StartPipelineExecution"|"PollForSourceChanges"|"Webhook"|"CloudWatchEvent"|"PutActionRevision"|"WebhookV2"|"ManualRollback"|"AutomatedRollback", triggerDetail?:string}, executionMode?:"QUEUED"|"SUPERSEDED"|"PARALLEL", executionType?:"STANDARD"|"ROLLBACK", rollbackMetadata?:array{rollbackTargetPipelineExecutionId?:string}}}>
     */
    public function getPipelineExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string} $args
     * @return \AWS\Result<array{pipelineName?:string, pipelineVersion?:int, stageStates?:array<array{stageName?:string, inboundExecution?:array{pipelineExecutionId:string, status:"Cancelled"|"InProgress"|"Failed"|"Stopped"|"Stopping"|"Succeeded"|"Skipped", type?:"STANDARD"|"ROLLBACK"}, inboundExecutions?:array<array{pipelineExecutionId:string, status:"Cancelled"|"InProgress"|"Failed"|"Stopped"|"Stopping"|"Succeeded"|"Skipped", type?:"STANDARD"|"ROLLBACK"}>, inboundTransitionState?:array{enabled?:bool, lastChangedBy?:string, lastChangedAt?:int|string|\DateTimeInterface, disabledReason?:string}, actionStates?:array<array{actionName?:string, currentRevision?:array{revisionId:string, revisionChangeId:string, created:int|string|\DateTimeInterface}, latestExecution?:array{actionExecutionId?:string, status?:"InProgress"|"Abandoned"|"Succeeded"|"Failed", summary?:string, lastStatusChange?:int|string|\DateTimeInterface, token?:string, lastUpdatedBy?:string, externalExecutionId?:string, externalExecutionUrl?:string, percentComplete?:int, errorDetails?:array{code?:string, message?:string}, logStreamARN?:string}, entityUrl?:string, revisionUrl?:string}>, latestExecution?:array{pipelineExecutionId:string, status:"Cancelled"|"InProgress"|"Failed"|"Stopped"|"Stopping"|"Succeeded"|"Skipped", type?:"STANDARD"|"ROLLBACK"}, beforeEntryConditionState?:array{latestExecution?:array{status?:"InProgress"|"Failed"|"Errored"|"Succeeded"|"Cancelled"|"Abandoned"|"Overridden", summary?:string}, conditionStates?:array<array{latestExecution?:array{status?:"InProgress"|"Failed"|"Errored"|"Succeeded"|"Cancelled"|"Abandoned"|"Overridden", summary?:string, lastStatusChange?:int|string|\DateTimeInterface}, ruleStates?:array<array{ruleName?:string, currentRevision?:array{revisionId:string, revisionChangeId:string, created:int|string|\DateTimeInterface}, latestExecution?:array{ruleExecutionId?:string, status?:"InProgress"|"Abandoned"|"Succeeded"|"Failed", summary?:string, lastStatusChange?:int|string|\DateTimeInterface, token?:string, lastUpdatedBy?:string, externalExecutionId?:string, externalExecutionUrl?:string, errorDetails?:array{code?:string, message?:string}}, entityUrl?:string, revisionUrl?:string}>}>}, onSuccessConditionState?:array{latestExecution?:array{status?:"InProgress"|"Failed"|"Errored"|"Succeeded"|"Cancelled"|"Abandoned"|"Overridden", summary?:string}, conditionStates?:array<array{latestExecution?:array{status?:"InProgress"|"Failed"|"Errored"|"Succeeded"|"Cancelled"|"Abandoned"|"Overridden", summary?:string, lastStatusChange?:int|string|\DateTimeInterface}, ruleStates?:array<array{ruleName?:string, currentRevision?:array{revisionId:string, revisionChangeId:string, created:int|string|\DateTimeInterface}, latestExecution?:array{ruleExecutionId?:string, status?:"InProgress"|"Abandoned"|"Succeeded"|"Failed", summary?:string, lastStatusChange?:int|string|\DateTimeInterface, token?:string, lastUpdatedBy?:string, externalExecutionId?:string, externalExecutionUrl?:string, errorDetails?:array{code?:string, message?:string}}, entityUrl?:string, revisionUrl?:string}>}>}, onFailureConditionState?:array{latestExecution?:array{status?:"InProgress"|"Failed"|"Errored"|"Succeeded"|"Cancelled"|"Abandoned"|"Overridden", summary?:string}, conditionStates?:array<array{latestExecution?:array{status?:"InProgress"|"Failed"|"Errored"|"Succeeded"|"Cancelled"|"Abandoned"|"Overridden", summary?:string, lastStatusChange?:int|string|\DateTimeInterface}, ruleStates?:array<array{ruleName?:string, currentRevision?:array{revisionId:string, revisionChangeId:string, created:int|string|\DateTimeInterface}, latestExecution?:array{ruleExecutionId?:string, status?:"InProgress"|"Abandoned"|"Succeeded"|"Failed", summary?:string, lastStatusChange?:int|string|\DateTimeInterface, token?:string, lastUpdatedBy?:string, externalExecutionId?:string, externalExecutionUrl?:string, errorDetails?:array{code?:string, message?:string}}, entityUrl?:string, revisionUrl?:string}>}>}, retryStageMetadata?:array{autoStageRetryAttempt?:int, manualStageRetryAttempt?:int, latestRetryTrigger?:"AutomatedStageRetry"|"ManualStageRetry"}}>, created?:int|string|\DateTimeInterface, updated?:int|string|\DateTimeInterface}>
     */
    public function getPipelineState(array $args): \AWS\Result { }

    /**
     * @param array{name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{pipelineName?:string, pipelineVersion?:int, stageStates?:array<array{stageName?:string, inboundExecution?:array{pipelineExecutionId:string, status:"Cancelled"|"InProgress"|"Failed"|"Stopped"|"Stopping"|"Succeeded"|"Skipped", type?:"STANDARD"|"ROLLBACK"}, inboundExecutions?:array<array{pipelineExecutionId:string, status:"Cancelled"|"InProgress"|"Failed"|"Stopped"|"Stopping"|"Succeeded"|"Skipped", type?:"STANDARD"|"ROLLBACK"}>, inboundTransitionState?:array{enabled?:bool, lastChangedBy?:string, lastChangedAt?:int|string|\DateTimeInterface, disabledReason?:string}, actionStates?:array<array{actionName?:string, currentRevision?:array{revisionId:string, revisionChangeId:string, created:int|string|\DateTimeInterface}, latestExecution?:array{actionExecutionId?:string, status?:"InProgress"|"Abandoned"|"Succeeded"|"Failed", summary?:string, lastStatusChange?:int|string|\DateTimeInterface, token?:string, lastUpdatedBy?:string, externalExecutionId?:string, externalExecutionUrl?:string, percentComplete?:int, errorDetails?:array{code?:string, message?:string}, logStreamARN?:string}, entityUrl?:string, revisionUrl?:string}>, latestExecution?:array{pipelineExecutionId:string, status:"Cancelled"|"InProgress"|"Failed"|"Stopped"|"Stopping"|"Succeeded"|"Skipped", type?:"STANDARD"|"ROLLBACK"}, beforeEntryConditionState?:array{latestExecution?:array{status?:"InProgress"|"Failed"|"Errored"|"Succeeded"|"Cancelled"|"Abandoned"|"Overridden", summary?:string}, conditionStates?:array<array{latestExecution?:array{status?:"InProgress"|"Failed"|"Errored"|"Succeeded"|"Cancelled"|"Abandoned"|"Overridden", summary?:string, lastStatusChange?:int|string|\DateTimeInterface}, ruleStates?:array<array{ruleName?:string, currentRevision?:array{revisionId:string, revisionChangeId:string, created:int|string|\DateTimeInterface}, latestExecution?:array{ruleExecutionId?:string, status?:"InProgress"|"Abandoned"|"Succeeded"|"Failed", summary?:string, lastStatusChange?:int|string|\DateTimeInterface, token?:string, lastUpdatedBy?:string, externalExecutionId?:string, externalExecutionUrl?:string, errorDetails?:array{code?:string, message?:string}}, entityUrl?:string, revisionUrl?:string}>}>}, onSuccessConditionState?:array{latestExecution?:array{status?:"InProgress"|"Failed"|"Errored"|"Succeeded"|"Cancelled"|"Abandoned"|"Overridden", summary?:string}, conditionStates?:array<array{latestExecution?:array{status?:"InProgress"|"Failed"|"Errored"|"Succeeded"|"Cancelled"|"Abandoned"|"Overridden", summary?:string, lastStatusChange?:int|string|\DateTimeInterface}, ruleStates?:array<array{ruleName?:string, currentRevision?:array{revisionId:string, revisionChangeId:string, created:int|string|\DateTimeInterface}, latestExecution?:array{ruleExecutionId?:string, status?:"InProgress"|"Abandoned"|"Succeeded"|"Failed", summary?:string, lastStatusChange?:int|string|\DateTimeInterface, token?:string, lastUpdatedBy?:string, externalExecutionId?:string, externalExecutionUrl?:string, errorDetails?:array{code?:string, message?:string}}, entityUrl?:string, revisionUrl?:string}>}>}, onFailureConditionState?:array{latestExecution?:array{status?:"InProgress"|"Failed"|"Errored"|"Succeeded"|"Cancelled"|"Abandoned"|"Overridden", summary?:string}, conditionStates?:array<array{latestExecution?:array{status?:"InProgress"|"Failed"|"Errored"|"Succeeded"|"Cancelled"|"Abandoned"|"Overridden", summary?:string, lastStatusChange?:int|string|\DateTimeInterface}, ruleStates?:array<array{ruleName?:string, currentRevision?:array{revisionId:string, revisionChangeId:string, created:int|string|\DateTimeInterface}, latestExecution?:array{ruleExecutionId?:string, status?:"InProgress"|"Abandoned"|"Succeeded"|"Failed", summary?:string, lastStatusChange?:int|string|\DateTimeInterface, token?:string, lastUpdatedBy?:string, externalExecutionId?:string, externalExecutionUrl?:string, errorDetails?:array{code?:string, message?:string}}, entityUrl?:string, revisionUrl?:string}>}>}, retryStageMetadata?:array{autoStageRetryAttempt?:int, manualStageRetryAttempt?:int, latestRetryTrigger?:"AutomatedStageRetry"|"ManualStageRetry"}}>, created?:int|string|\DateTimeInterface, updated?:int|string|\DateTimeInterface}>
     */
    public function getPipelineStateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string, clientToken:string} $args
     * @return \AWS\Result<array{jobDetails?:array{id?:string, data?:array{actionTypeId?:array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", owner:"AWS"|"ThirdParty"|"Custom", provider:string, version:string}, actionConfiguration?:array{configuration?:array<string, string>}, pipelineContext?:array{pipelineName?:string, stage?:array{name?:string}, action?:array{name?:string, actionExecutionId?:string}, pipelineArn?:string, pipelineExecutionId?:string}, inputArtifacts?:array<array{name?:string, revision?:string, location?:array{type?:"S3", s3Location?:array{bucketName:string, objectKey:string}}}>, outputArtifacts?:array<array{name?:string, revision?:string, location?:array{type?:"S3", s3Location?:array{bucketName:string, objectKey:string}}}>, artifactCredentials?:array{accessKeyId:string, secretAccessKey:string, sessionToken:string}, continuationToken?:string, encryptionKey?:array{id:string, type:"KMS"}}, nonce?:string}}>
     */
    public function getThirdPartyJobDetails(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string, clientToken:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobDetails?:array{id?:string, data?:array{actionTypeId?:array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", owner:"AWS"|"ThirdParty"|"Custom", provider:string, version:string}, actionConfiguration?:array{configuration?:array<string, string>}, pipelineContext?:array{pipelineName?:string, stage?:array{name?:string}, action?:array{name?:string, actionExecutionId?:string}, pipelineArn?:string, pipelineExecutionId?:string}, inputArtifacts?:array<array{name?:string, revision?:string, location?:array{type?:"S3", s3Location?:array{bucketName:string, objectKey:string}}}>, outputArtifacts?:array<array{name?:string, revision?:string, location?:array{type?:"S3", s3Location?:array{bucketName:string, objectKey:string}}}>, artifactCredentials?:array{accessKeyId:string, secretAccessKey:string, sessionToken:string}, continuationToken?:string, encryptionKey?:array{id:string, type:"KMS"}}, nonce?:string}}>
     */
    public function getThirdPartyJobDetailsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pipelineName:string, filter?:array{pipelineExecutionId?:string, latestInPipelineExecution?:array{pipelineExecutionId:string, startTimeRange:"Latest"|"All"}}, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{actionExecutionDetails?:array<array{pipelineExecutionId?:string, actionExecutionId?:string, pipelineVersion?:int, stageName?:string, actionName?:string, startTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, updatedBy?:string, status?:"InProgress"|"Abandoned"|"Succeeded"|"Failed", input?:array{actionTypeId?:array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", owner:"AWS"|"ThirdParty"|"Custom", provider:string, version:string}, configuration?:array<string, string>, resolvedConfiguration?:array<string, string>, roleArn?:string, region?:string, inputArtifacts?:array<array{name?:string, s3location?:array{bucket?:string, key?:string}}>, namespace?:string}, output?:array{outputArtifacts?:array<array{name?:string, s3location?:array{bucket?:string, key?:string}}>, executionResult?:array{externalExecutionId?:string, externalExecutionSummary?:string, externalExecutionUrl?:string, errorDetails?:array{code?:string, message?:string}, logStreamARN?:string}, outputVariables?:array<string, string>}}>, nextToken?:string}>
     */
    public function listActionExecutions(array $args): \AWS\Result { }

    /**
     * @param array{pipelineName:string, filter?:array{pipelineExecutionId?:string, latestInPipelineExecution?:array{pipelineExecutionId:string, startTimeRange:"Latest"|"All"}}, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{actionExecutionDetails?:array<array{pipelineExecutionId?:string, actionExecutionId?:string, pipelineVersion?:int, stageName?:string, actionName?:string, startTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, updatedBy?:string, status?:"InProgress"|"Abandoned"|"Succeeded"|"Failed", input?:array{actionTypeId?:array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", owner:"AWS"|"ThirdParty"|"Custom", provider:string, version:string}, configuration?:array<string, string>, resolvedConfiguration?:array<string, string>, roleArn?:string, region?:string, inputArtifacts?:array<array{name?:string, s3location?:array{bucket?:string, key?:string}}>, namespace?:string}, output?:array{outputArtifacts?:array<array{name?:string, s3location?:array{bucket?:string, key?:string}}>, executionResult?:array{externalExecutionId?:string, externalExecutionSummary?:string, externalExecutionUrl?:string, errorDetails?:array{code?:string, message?:string}, logStreamARN?:string}, outputVariables?:array<string, string>}}>, nextToken?:string}>
     */
    public function listActionExecutionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{actionOwnerFilter?:"AWS"|"ThirdParty"|"Custom", nextToken?:string, regionFilter?:string} $args
     * @return \AWS\Result<array{actionTypes:array<array{id:array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", owner:"AWS"|"ThirdParty"|"Custom", provider:string, version:string}, settings?:array{thirdPartyConfigurationUrl?:string, entityUrlTemplate?:string, executionUrlTemplate?:string, revisionUrlTemplate?:string}, actionConfigurationProperties?:array<array{name:string, required:bool, key:bool, secret:bool, queryable?:bool, description?:string, type?:"String"|"Number"|"Boolean"}>, inputArtifactDetails:array{minimumCount:int, maximumCount:int}, outputArtifactDetails:array{minimumCount:int, maximumCount:int}}>, nextToken?:string}>
     */
    public function listActionTypes(array $args = []): \AWS\Result { }

    /**
     * @param array{actionOwnerFilter?:"AWS"|"ThirdParty"|"Custom", nextToken?:string, regionFilter?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{actionTypes:array<array{id:array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", owner:"AWS"|"ThirdParty"|"Custom", provider:string, version:string}, settings?:array{thirdPartyConfigurationUrl?:string, entityUrlTemplate?:string, executionUrlTemplate?:string, revisionUrlTemplate?:string}, actionConfigurationProperties?:array<array{name:string, required:bool, key:bool, secret:bool, queryable?:bool, description?:string, type?:"String"|"Number"|"Boolean"}>, inputArtifactDetails:array{minimumCount:int, maximumCount:int}, outputArtifactDetails:array{minimumCount:int, maximumCount:int}}>, nextToken?:string}>
     */
    public function listActionTypesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pipelineName:string, maxResults?:int, filter?:array{succeededInStage?:array{stageName?:string}}, nextToken?:string} $args
     * @return \AWS\Result<array{pipelineExecutionSummaries?:array<array{pipelineExecutionId?:string, status?:"Cancelled"|"InProgress"|"Stopped"|"Stopping"|"Succeeded"|"Superseded"|"Failed", statusSummary?:string, startTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, sourceRevisions?:array<array{actionName:string, revisionId?:string, revisionSummary?:string, revisionUrl?:string}>, trigger?:array{triggerType?:"CreatePipeline"|"StartPipelineExecution"|"PollForSourceChanges"|"Webhook"|"CloudWatchEvent"|"PutActionRevision"|"WebhookV2"|"ManualRollback"|"AutomatedRollback", triggerDetail?:string}, stopTrigger?:array{reason?:string}, executionMode?:"QUEUED"|"SUPERSEDED"|"PARALLEL", executionType?:"STANDARD"|"ROLLBACK", rollbackMetadata?:array{rollbackTargetPipelineExecutionId?:string}}>, nextToken?:string}>
     */
    public function listPipelineExecutions(array $args): \AWS\Result { }

    /**
     * @param array{pipelineName:string, maxResults?:int, filter?:array{succeededInStage?:array{stageName?:string}}, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{pipelineExecutionSummaries?:array<array{pipelineExecutionId?:string, status?:"Cancelled"|"InProgress"|"Stopped"|"Stopping"|"Succeeded"|"Superseded"|"Failed", statusSummary?:string, startTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, sourceRevisions?:array<array{actionName:string, revisionId?:string, revisionSummary?:string, revisionUrl?:string}>, trigger?:array{triggerType?:"CreatePipeline"|"StartPipelineExecution"|"PollForSourceChanges"|"Webhook"|"CloudWatchEvent"|"PutActionRevision"|"WebhookV2"|"ManualRollback"|"AutomatedRollback", triggerDetail?:string}, stopTrigger?:array{reason?:string}, executionMode?:"QUEUED"|"SUPERSEDED"|"PARALLEL", executionType?:"STANDARD"|"ROLLBACK", rollbackMetadata?:array{rollbackTargetPipelineExecutionId?:string}}>, nextToken?:string}>
     */
    public function listPipelineExecutionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{pipelines?:array<array{name?:string, version?:int, pipelineType?:"V1"|"V2", executionMode?:"QUEUED"|"SUPERSEDED"|"PARALLEL", created?:int|string|\DateTimeInterface, updated?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listPipelines(array $args = []): \AWS\Result { }

    /**
     * @param array{nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{pipelines?:array<array{name?:string, version?:int, pipelineType?:"V1"|"V2", executionMode?:"QUEUED"|"SUPERSEDED"|"PARALLEL", created?:int|string|\DateTimeInterface, updated?:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listPipelinesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pipelineName:string, filter?:array{pipelineExecutionId?:string, latestInPipelineExecution?:array{pipelineExecutionId:string, startTimeRange:"Latest"|"All"}}, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{ruleExecutionDetails?:array<array{pipelineExecutionId?:string, ruleExecutionId?:string, pipelineVersion?:int, stageName?:string, ruleName?:string, startTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, updatedBy?:string, status?:"InProgress"|"Abandoned"|"Succeeded"|"Failed", input?:array{ruleTypeId?:array{category:"Rule", owner?:"AWS", provider:string, version?:string}, configuration?:array<string, string>, resolvedConfiguration?:array<string, string>, roleArn?:string, region?:string, inputArtifacts?:array<array{name?:string, s3location?:array{bucket?:string, key?:string}}>}, output?:array{executionResult?:array{externalExecutionId?:string, externalExecutionSummary?:string, externalExecutionUrl?:string, errorDetails?:array{code?:string, message?:string}}}}>, nextToken?:string}>
     */
    public function listRuleExecutions(array $args): \AWS\Result { }

    /**
     * @param array{pipelineName:string, filter?:array{pipelineExecutionId?:string, latestInPipelineExecution?:array{pipelineExecutionId:string, startTimeRange:"Latest"|"All"}}, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ruleExecutionDetails?:array<array{pipelineExecutionId?:string, ruleExecutionId?:string, pipelineVersion?:int, stageName?:string, ruleName?:string, startTime?:int|string|\DateTimeInterface, lastUpdateTime?:int|string|\DateTimeInterface, updatedBy?:string, status?:"InProgress"|"Abandoned"|"Succeeded"|"Failed", input?:array{ruleTypeId?:array{category:"Rule", owner?:"AWS", provider:string, version?:string}, configuration?:array<string, string>, resolvedConfiguration?:array<string, string>, roleArn?:string, region?:string, inputArtifacts?:array<array{name?:string, s3location?:array{bucket?:string, key?:string}}>}, output?:array{executionResult?:array{externalExecutionId?:string, externalExecutionSummary?:string, externalExecutionUrl?:string, errorDetails?:array{code?:string, message?:string}}}}>, nextToken?:string}>
     */
    public function listRuleExecutionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{ruleOwnerFilter?:"AWS", regionFilter?:string} $args
     * @return \AWS\Result<array{ruleTypes:array<array{id:array{category:"Rule", owner?:"AWS", provider:string, version?:string}, settings?:array{thirdPartyConfigurationUrl?:string, entityUrlTemplate?:string, executionUrlTemplate?:string, revisionUrlTemplate?:string}, ruleConfigurationProperties?:array<array{name:string, required:bool, key:bool, secret:bool, queryable?:bool, description?:string, type?:"String"|"Number"|"Boolean"}>, inputArtifactDetails:array{minimumCount:int, maximumCount:int}}>}>
     */
    public function listRuleTypes(array $args = []): \AWS\Result { }

    /**
     * @param array{ruleOwnerFilter?:"AWS", regionFilter?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{ruleTypes:array<array{id:array{category:"Rule", owner?:"AWS", provider:string, version?:string}, settings?:array{thirdPartyConfigurationUrl?:string, entityUrlTemplate?:string, executionUrlTemplate?:string, revisionUrlTemplate?:string}, ruleConfigurationProperties?:array<array{name:string, required:bool, key:bool, secret:bool, queryable?:bool, description?:string, type?:"String"|"Number"|"Boolean"}>, inputArtifactDetails:array{minimumCount:int, maximumCount:int}}>}>
     */
    public function listRuleTypesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, nextToken?:string, maxResults?:int} $args
     * @return \AWS\Result<array{tags?:array<array{key:string, value:string}>, nextToken?:string}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, nextToken?:string, maxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<array{key:string, value:string}>, nextToken?:string}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \AWS\Result<array{webhooks?:array<array{definition:array{name:string, targetPipeline:string, targetAction:string, filters:array<array{jsonPath:string, matchEquals?:string}>, authentication:"GITHUB_HMAC"|"IP"|"UNAUTHENTICATED", authenticationConfiguration:array{AllowedIPRange?:string, SecretToken?:string}}, url:string, errorMessage?:string, errorCode?:string, lastTriggered?:int|string|\DateTimeInterface, arn?:string, tags?:array<array{key:string, value:string}>}>, NextToken?:string}>
     */
    public function listWebhooks(array $args = []): \AWS\Result { }

    /**
     * @param array{NextToken?:string, MaxResults?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{webhooks?:array<array{definition:array{name:string, targetPipeline:string, targetAction:string, filters:array<array{jsonPath:string, matchEquals?:string}>, authentication:"GITHUB_HMAC"|"IP"|"UNAUTHENTICATED", authenticationConfiguration:array{AllowedIPRange?:string, SecretToken?:string}}, url:string, errorMessage?:string, errorCode?:string, lastTriggered?:int|string|\DateTimeInterface, arn?:string, tags?:array<array{key:string, value:string}>}>, NextToken?:string}>
     */
    public function listWebhooksAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pipelineName:string, stageName:string, pipelineExecutionId:string, conditionType:"BEFORE_ENTRY"|"ON_SUCCESS"} $args
     * @return \AWS\Result<void>
     */
    public function overrideStageCondition(array $args): \AWS\Result { }

    /**
     * @param array{pipelineName:string, stageName:string, pipelineExecutionId:string, conditionType:"BEFORE_ENTRY"|"ON_SUCCESS"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function overrideStageConditionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{actionTypeId:array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", owner:"AWS"|"ThirdParty"|"Custom", provider:string, version:string}, maxBatchSize?:int, queryParam?:array<string, string>} $args
     * @return \AWS\Result<array{jobs?:array<array{id?:string, data?:array{actionTypeId?:array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", owner:"AWS"|"ThirdParty"|"Custom", provider:string, version:string}, actionConfiguration?:array{configuration?:array<string, string>}, pipelineContext?:array{pipelineName?:string, stage?:array{name?:string}, action?:array{name?:string, actionExecutionId?:string}, pipelineArn?:string, pipelineExecutionId?:string}, inputArtifacts?:array<array{name?:string, revision?:string, location?:array{type?:"S3", s3Location?:array{bucketName:string, objectKey:string}}}>, outputArtifacts?:array<array{name?:string, revision?:string, location?:array{type?:"S3", s3Location?:array{bucketName:string, objectKey:string}}}>, artifactCredentials?:array{accessKeyId:string, secretAccessKey:string, sessionToken:string}, continuationToken?:string, encryptionKey?:array{id:string, type:"KMS"}}, nonce?:string, accountId?:string}>}>
     */
    public function pollForJobs(array $args): \AWS\Result { }

    /**
     * @param array{actionTypeId:array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", owner:"AWS"|"ThirdParty"|"Custom", provider:string, version:string}, maxBatchSize?:int, queryParam?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobs?:array<array{id?:string, data?:array{actionTypeId?:array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", owner:"AWS"|"ThirdParty"|"Custom", provider:string, version:string}, actionConfiguration?:array{configuration?:array<string, string>}, pipelineContext?:array{pipelineName?:string, stage?:array{name?:string}, action?:array{name?:string, actionExecutionId?:string}, pipelineArn?:string, pipelineExecutionId?:string}, inputArtifacts?:array<array{name?:string, revision?:string, location?:array{type?:"S3", s3Location?:array{bucketName:string, objectKey:string}}}>, outputArtifacts?:array<array{name?:string, revision?:string, location?:array{type?:"S3", s3Location?:array{bucketName:string, objectKey:string}}}>, artifactCredentials?:array{accessKeyId:string, secretAccessKey:string, sessionToken:string}, continuationToken?:string, encryptionKey?:array{id:string, type:"KMS"}}, nonce?:string, accountId?:string}>}>
     */
    public function pollForJobsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{actionTypeId:array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", owner:"AWS"|"ThirdParty"|"Custom", provider:string, version:string}, maxBatchSize?:int} $args
     * @return \AWS\Result<array{jobs?:array<array{clientId?:string, jobId?:string}>}>
     */
    public function pollForThirdPartyJobs(array $args): \AWS\Result { }

    /**
     * @param array{actionTypeId:array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", owner:"AWS"|"ThirdParty"|"Custom", provider:string, version:string}, maxBatchSize?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobs?:array<array{clientId?:string, jobId?:string}>}>
     */
    public function pollForThirdPartyJobsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pipelineName:string, stageName:string, actionName:string, actionRevision:array{revisionId:string, revisionChangeId:string, created:int|string|\DateTimeInterface}} $args
     * @return \AWS\Result<array{newRevision?:bool, pipelineExecutionId?:string}>
     */
    public function putActionRevision(array $args): \AWS\Result { }

    /**
     * @param array{pipelineName:string, stageName:string, actionName:string, actionRevision:array{revisionId:string, revisionChangeId:string, created:int|string|\DateTimeInterface}} $args
     * @return \GuzzleHttp\Promise\Promise<array{newRevision?:bool, pipelineExecutionId?:string}>
     */
    public function putActionRevisionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pipelineName:string, stageName:string, actionName:string, result:array{summary:string, status:"Approved"|"Rejected"}, token:string} $args
     * @return \AWS\Result<array{approvedAt?:int|string|\DateTimeInterface}>
     */
    public function putApprovalResult(array $args): \AWS\Result { }

    /**
     * @param array{pipelineName:string, stageName:string, actionName:string, result:array{summary:string, status:"Approved"|"Rejected"}, token:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{approvedAt?:int|string|\DateTimeInterface}>
     */
    public function putApprovalResultAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string, failureDetails:array{type:"JobFailed"|"ConfigurationError"|"PermissionError"|"RevisionOutOfSync"|"RevisionUnavailable"|"SystemUnavailable", message:string, externalExecutionId?:string}} $args
     * @return \AWS\Result<void>
     */
    public function putJobFailureResult(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string, failureDetails:array{type:"JobFailed"|"ConfigurationError"|"PermissionError"|"RevisionOutOfSync"|"RevisionUnavailable"|"SystemUnavailable", message:string, externalExecutionId?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putJobFailureResultAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string, currentRevision?:array{revision:string, changeIdentifier:string, created?:int|string|\DateTimeInterface, revisionSummary?:string}, continuationToken?:string, executionDetails?:array{summary?:string, externalExecutionId?:string, percentComplete?:int}, outputVariables?:array<string, string>} $args
     * @return \AWS\Result<void>
     */
    public function putJobSuccessResult(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string, currentRevision?:array{revision:string, changeIdentifier:string, created?:int|string|\DateTimeInterface, revisionSummary?:string}, continuationToken?:string, executionDetails?:array{summary?:string, externalExecutionId?:string, percentComplete?:int}, outputVariables?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putJobSuccessResultAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string, clientToken:string, failureDetails:array{type:"JobFailed"|"ConfigurationError"|"PermissionError"|"RevisionOutOfSync"|"RevisionUnavailable"|"SystemUnavailable", message:string, externalExecutionId?:string}} $args
     * @return \AWS\Result<void>
     */
    public function putThirdPartyJobFailureResult(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string, clientToken:string, failureDetails:array{type:"JobFailed"|"ConfigurationError"|"PermissionError"|"RevisionOutOfSync"|"RevisionUnavailable"|"SystemUnavailable", message:string, externalExecutionId?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putThirdPartyJobFailureResultAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string, clientToken:string, currentRevision?:array{revision:string, changeIdentifier:string, created?:int|string|\DateTimeInterface, revisionSummary?:string}, continuationToken?:string, executionDetails?:array{summary?:string, externalExecutionId?:string, percentComplete?:int}} $args
     * @return \AWS\Result<void>
     */
    public function putThirdPartyJobSuccessResult(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string, clientToken:string, currentRevision?:array{revision:string, changeIdentifier:string, created?:int|string|\DateTimeInterface, revisionSummary?:string}, continuationToken?:string, executionDetails?:array{summary?:string, externalExecutionId?:string, percentComplete?:int}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putThirdPartyJobSuccessResultAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{webhook:array{name:string, targetPipeline:string, targetAction:string, filters:array<array{jsonPath:string, matchEquals?:string}>, authentication:"GITHUB_HMAC"|"IP"|"UNAUTHENTICATED", authenticationConfiguration:array{AllowedIPRange?:string, SecretToken?:string}}, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{webhook?:array{definition:array{name:string, targetPipeline:string, targetAction:string, filters:array<array{jsonPath:string, matchEquals?:string}>, authentication:"GITHUB_HMAC"|"IP"|"UNAUTHENTICATED", authenticationConfiguration:array{AllowedIPRange?:string, SecretToken?:string}}, url:string, errorMessage?:string, errorCode?:string, lastTriggered?:int|string|\DateTimeInterface, arn?:string, tags?:array<array{key:string, value:string}>}}>
     */
    public function putWebhook(array $args): \AWS\Result { }

    /**
     * @param array{webhook:array{name:string, targetPipeline:string, targetAction:string, filters:array<array{jsonPath:string, matchEquals?:string}>, authentication:"GITHUB_HMAC"|"IP"|"UNAUTHENTICATED", authenticationConfiguration:array{AllowedIPRange?:string, SecretToken?:string}}, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{webhook?:array{definition:array{name:string, targetPipeline:string, targetAction:string, filters:array<array{jsonPath:string, matchEquals?:string}>, authentication:"GITHUB_HMAC"|"IP"|"UNAUTHENTICATED", authenticationConfiguration:array{AllowedIPRange?:string, SecretToken?:string}}, url:string, errorMessage?:string, errorCode?:string, lastTriggered?:int|string|\DateTimeInterface, arn?:string, tags?:array<array{key:string, value:string}>}}>
     */
    public function putWebhookAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{webhookName?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function registerWebhookWithThirdParty(array $args = []): \AWS\Result { }

    /**
     * @param array{webhookName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function registerWebhookWithThirdPartyAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pipelineName:string, stageName:string, pipelineExecutionId:string, retryMode:"FAILED_ACTIONS"|"ALL_ACTIONS"} $args
     * @return \AWS\Result<array{pipelineExecutionId?:string}>
     */
    public function retryStageExecution(array $args): \AWS\Result { }

    /**
     * @param array{pipelineName:string, stageName:string, pipelineExecutionId:string, retryMode:"FAILED_ACTIONS"|"ALL_ACTIONS"} $args
     * @return \GuzzleHttp\Promise\Promise<array{pipelineExecutionId?:string}>
     */
    public function retryStageExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pipelineName:string, stageName:string, targetPipelineExecutionId:string} $args
     * @return \AWS\Result<array{pipelineExecutionId:string}>
     */
    public function rollbackStage(array $args): \AWS\Result { }

    /**
     * @param array{pipelineName:string, stageName:string, targetPipelineExecutionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{pipelineExecutionId:string}>
     */
    public function rollbackStageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, variables?:array<array{name:string, value:string}>, clientRequestToken?:string, sourceRevisions?:array<array{actionName:string, revisionType:"COMMIT_ID"|"IMAGE_DIGEST"|"S3_OBJECT_VERSION_ID"|"S3_OBJECT_KEY", revisionValue:string}>} $args
     * @return \AWS\Result<array{pipelineExecutionId?:string}>
     */
    public function startPipelineExecution(array $args): \AWS\Result { }

    /**
     * @param array{name:string, variables?:array<array{name:string, value:string}>, clientRequestToken?:string, sourceRevisions?:array<array{actionName:string, revisionType:"COMMIT_ID"|"IMAGE_DIGEST"|"S3_OBJECT_VERSION_ID"|"S3_OBJECT_KEY", revisionValue:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{pipelineExecutionId?:string}>
     */
    public function startPipelineExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pipelineName:string, pipelineExecutionId:string, abandon?:bool, reason?:string} $args
     * @return \AWS\Result<array{pipelineExecutionId?:string}>
     */
    public function stopPipelineExecution(array $args): \AWS\Result { }

    /**
     * @param array{pipelineName:string, pipelineExecutionId:string, abandon?:bool, reason?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{pipelineExecutionId?:string}>
     */
    public function stopPipelineExecutionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string, tags:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string, tags:array<array{key:string, value:string}>} $args
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
     * @param array{actionType:array{description?:string, executor:array{configuration:array{lambdaExecutorConfiguration?:array{lambdaFunctionArn:string}, jobWorkerExecutorConfiguration?:array{pollingAccounts?:array<string>, pollingServicePrincipals?:array<string>}}, type:"JobWorker"|"Lambda", policyStatementsTemplate?:string, jobTimeout?:int}, id:array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", owner:string, provider:string, version:string}, inputArtifactDetails:array{minimumCount:int, maximumCount:int}, outputArtifactDetails:array{minimumCount:int, maximumCount:int}, permissions?:array{allowedAccounts:array<string>}, properties?:array<array{name:string, optional:bool, key:bool, noEcho:bool, queryable?:bool, description?:string}>, urls?:array{configurationUrl?:string, entityUrlTemplate?:string, executionUrlTemplate?:string, revisionUrlTemplate?:string}}} $args
     * @return \AWS\Result<void>
     */
    public function updateActionType(array $args): \AWS\Result { }

    /**
     * @param array{actionType:array{description?:string, executor:array{configuration:array{lambdaExecutorConfiguration?:array{lambdaFunctionArn:string}, jobWorkerExecutorConfiguration?:array{pollingAccounts?:array<string>, pollingServicePrincipals?:array<string>}}, type:"JobWorker"|"Lambda", policyStatementsTemplate?:string, jobTimeout?:int}, id:array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", owner:string, provider:string, version:string}, inputArtifactDetails:array{minimumCount:int, maximumCount:int}, outputArtifactDetails:array{minimumCount:int, maximumCount:int}, permissions?:array{allowedAccounts:array<string>}, properties?:array<array{name:string, optional:bool, key:bool, noEcho:bool, queryable?:bool, description?:string}>, urls?:array{configurationUrl?:string, entityUrlTemplate?:string, executionUrlTemplate?:string, revisionUrlTemplate?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateActionTypeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{pipeline:array{name:string, roleArn:string, artifactStore?:array{type:"S3", location:string, encryptionKey?:array{id:string, type:"KMS"}}, artifactStores?:array<string, array{type:"S3", location:string, encryptionKey?:array{id:string, type:"KMS"}}>, stages:array<array{name:string, blockers?:array<array{name:string, type:"Schedule"}>, actions:array<array{name:string, actionTypeId:array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", owner:"AWS"|"ThirdParty"|"Custom", provider:string, version:string}, runOrder?:int, configuration?:array<string, string>, commands?:array<string>, outputArtifacts?:array<array{name:string, files?:array<string>}>, inputArtifacts?:array<array{name:string}>, outputVariables?:array<string>, roleArn?:string, region?:string, namespace?:string, timeoutInMinutes?:int}>, onFailure?:array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", retryConfiguration?:array{retryMode?:"FAILED_ACTIONS"|"ALL_ACTIONS"}, conditions?:array<array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", rules?:array<array{name:string, ruleTypeId:array{category:"Rule", owner?:"AWS", provider:string, version?:string}, configuration?:array<string, string>, commands?:array<string>, inputArtifacts?:array<array{name:string}>, roleArn?:string, region?:string, timeoutInMinutes?:int}>}>}, onSuccess?:array{conditions:array<array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", rules?:array<array{name:string, ruleTypeId:array{category:"Rule", owner?:"AWS", provider:string, version?:string}, configuration?:array<string, string>, commands?:array<string>, inputArtifacts?:array<array{name:string}>, roleArn?:string, region?:string, timeoutInMinutes?:int}>}>}, beforeEntry?:array{conditions:array<array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", rules?:array<array{name:string, ruleTypeId:array{category:"Rule", owner?:"AWS", provider:string, version?:string}, configuration?:array<string, string>, commands?:array<string>, inputArtifacts?:array<array{name:string}>, roleArn?:string, region?:string, timeoutInMinutes?:int}>}>}}>, version?:int, executionMode?:"QUEUED"|"SUPERSEDED"|"PARALLEL", pipelineType?:"V1"|"V2", variables?:array<array{name:string, defaultValue?:string, description?:string}>, triggers?:array<array{providerType:"CodeStarSourceConnection", gitConfiguration:array{sourceActionName:string, push?:array<array{tags?:array{includes?:array<string>, excludes?:array<string>}, branches?:array{includes?:array<string>, excludes?:array<string>}, filePaths?:array{includes?:array<string>, excludes?:array<string>}}>, pullRequest?:array<array{events?:array<"OPEN"|"UPDATED"|"CLOSED">, branches?:array{includes?:array<string>, excludes?:array<string>}, filePaths?:array{includes?:array<string>, excludes?:array<string>}}>}}>}} $args
     * @return \AWS\Result<array{pipeline?:array{name:string, roleArn:string, artifactStore?:array{type:"S3", location:string, encryptionKey?:array{id:string, type:"KMS"}}, artifactStores?:array<string, array{type:"S3", location:string, encryptionKey?:array{id:string, type:"KMS"}}>, stages:array<array{name:string, blockers?:array<array{name:string, type:"Schedule"}>, actions:array<array{name:string, actionTypeId:array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", owner:"AWS"|"ThirdParty"|"Custom", provider:string, version:string}, runOrder?:int, configuration?:array<string, string>, commands?:array<string>, outputArtifacts?:array<array{name:string, files?:array<string>}>, inputArtifacts?:array<array{name:string}>, outputVariables?:array<string>, roleArn?:string, region?:string, namespace?:string, timeoutInMinutes?:int}>, onFailure?:array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", retryConfiguration?:array{retryMode?:"FAILED_ACTIONS"|"ALL_ACTIONS"}, conditions?:array<array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", rules?:array<array{name:string, ruleTypeId:array{category:"Rule", owner?:"AWS", provider:string, version?:string}, configuration?:array<string, string>, commands?:array<string>, inputArtifacts?:array<array{name:string}>, roleArn?:string, region?:string, timeoutInMinutes?:int}>}>}, onSuccess?:array{conditions:array<array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", rules?:array<array{name:string, ruleTypeId:array{category:"Rule", owner?:"AWS", provider:string, version?:string}, configuration?:array<string, string>, commands?:array<string>, inputArtifacts?:array<array{name:string}>, roleArn?:string, region?:string, timeoutInMinutes?:int}>}>}, beforeEntry?:array{conditions:array<array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", rules?:array<array{name:string, ruleTypeId:array{category:"Rule", owner?:"AWS", provider:string, version?:string}, configuration?:array<string, string>, commands?:array<string>, inputArtifacts?:array<array{name:string}>, roleArn?:string, region?:string, timeoutInMinutes?:int}>}>}}>, version?:int, executionMode?:"QUEUED"|"SUPERSEDED"|"PARALLEL", pipelineType?:"V1"|"V2", variables?:array<array{name:string, defaultValue?:string, description?:string}>, triggers?:array<array{providerType:"CodeStarSourceConnection", gitConfiguration:array{sourceActionName:string, push?:array<array{tags?:array{includes?:array<string>, excludes?:array<string>}, branches?:array{includes?:array<string>, excludes?:array<string>}, filePaths?:array{includes?:array<string>, excludes?:array<string>}}>, pullRequest?:array<array{events?:array<"OPEN"|"UPDATED"|"CLOSED">, branches?:array{includes?:array<string>, excludes?:array<string>}, filePaths?:array{includes?:array<string>, excludes?:array<string>}}>}}>}}>
     */
    public function updatePipeline(array $args): \AWS\Result { }

    /**
     * @param array{pipeline:array{name:string, roleArn:string, artifactStore?:array{type:"S3", location:string, encryptionKey?:array{id:string, type:"KMS"}}, artifactStores?:array<string, array{type:"S3", location:string, encryptionKey?:array{id:string, type:"KMS"}}>, stages:array<array{name:string, blockers?:array<array{name:string, type:"Schedule"}>, actions:array<array{name:string, actionTypeId:array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", owner:"AWS"|"ThirdParty"|"Custom", provider:string, version:string}, runOrder?:int, configuration?:array<string, string>, commands?:array<string>, outputArtifacts?:array<array{name:string, files?:array<string>}>, inputArtifacts?:array<array{name:string}>, outputVariables?:array<string>, roleArn?:string, region?:string, namespace?:string, timeoutInMinutes?:int}>, onFailure?:array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", retryConfiguration?:array{retryMode?:"FAILED_ACTIONS"|"ALL_ACTIONS"}, conditions?:array<array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", rules?:array<array{name:string, ruleTypeId:array{category:"Rule", owner?:"AWS", provider:string, version?:string}, configuration?:array<string, string>, commands?:array<string>, inputArtifacts?:array<array{name:string}>, roleArn?:string, region?:string, timeoutInMinutes?:int}>}>}, onSuccess?:array{conditions:array<array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", rules?:array<array{name:string, ruleTypeId:array{category:"Rule", owner?:"AWS", provider:string, version?:string}, configuration?:array<string, string>, commands?:array<string>, inputArtifacts?:array<array{name:string}>, roleArn?:string, region?:string, timeoutInMinutes?:int}>}>}, beforeEntry?:array{conditions:array<array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", rules?:array<array{name:string, ruleTypeId:array{category:"Rule", owner?:"AWS", provider:string, version?:string}, configuration?:array<string, string>, commands?:array<string>, inputArtifacts?:array<array{name:string}>, roleArn?:string, region?:string, timeoutInMinutes?:int}>}>}}>, version?:int, executionMode?:"QUEUED"|"SUPERSEDED"|"PARALLEL", pipelineType?:"V1"|"V2", variables?:array<array{name:string, defaultValue?:string, description?:string}>, triggers?:array<array{providerType:"CodeStarSourceConnection", gitConfiguration:array{sourceActionName:string, push?:array<array{tags?:array{includes?:array<string>, excludes?:array<string>}, branches?:array{includes?:array<string>, excludes?:array<string>}, filePaths?:array{includes?:array<string>, excludes?:array<string>}}>, pullRequest?:array<array{events?:array<"OPEN"|"UPDATED"|"CLOSED">, branches?:array{includes?:array<string>, excludes?:array<string>}, filePaths?:array{includes?:array<string>, excludes?:array<string>}}>}}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{pipeline?:array{name:string, roleArn:string, artifactStore?:array{type:"S3", location:string, encryptionKey?:array{id:string, type:"KMS"}}, artifactStores?:array<string, array{type:"S3", location:string, encryptionKey?:array{id:string, type:"KMS"}}>, stages:array<array{name:string, blockers?:array<array{name:string, type:"Schedule"}>, actions:array<array{name:string, actionTypeId:array{category:"Source"|"Build"|"Deploy"|"Test"|"Invoke"|"Approval"|"Compute", owner:"AWS"|"ThirdParty"|"Custom", provider:string, version:string}, runOrder?:int, configuration?:array<string, string>, commands?:array<string>, outputArtifacts?:array<array{name:string, files?:array<string>}>, inputArtifacts?:array<array{name:string}>, outputVariables?:array<string>, roleArn?:string, region?:string, namespace?:string, timeoutInMinutes?:int}>, onFailure?:array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", retryConfiguration?:array{retryMode?:"FAILED_ACTIONS"|"ALL_ACTIONS"}, conditions?:array<array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", rules?:array<array{name:string, ruleTypeId:array{category:"Rule", owner?:"AWS", provider:string, version?:string}, configuration?:array<string, string>, commands?:array<string>, inputArtifacts?:array<array{name:string}>, roleArn?:string, region?:string, timeoutInMinutes?:int}>}>}, onSuccess?:array{conditions:array<array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", rules?:array<array{name:string, ruleTypeId:array{category:"Rule", owner?:"AWS", provider:string, version?:string}, configuration?:array<string, string>, commands?:array<string>, inputArtifacts?:array<array{name:string}>, roleArn?:string, region?:string, timeoutInMinutes?:int}>}>}, beforeEntry?:array{conditions:array<array{result?:"ROLLBACK"|"FAIL"|"RETRY"|"SKIP", rules?:array<array{name:string, ruleTypeId:array{category:"Rule", owner?:"AWS", provider:string, version?:string}, configuration?:array<string, string>, commands?:array<string>, inputArtifacts?:array<array{name:string}>, roleArn?:string, region?:string, timeoutInMinutes?:int}>}>}}>, version?:int, executionMode?:"QUEUED"|"SUPERSEDED"|"PARALLEL", pipelineType?:"V1"|"V2", variables?:array<array{name:string, defaultValue?:string, description?:string}>, triggers?:array<array{providerType:"CodeStarSourceConnection", gitConfiguration:array{sourceActionName:string, push?:array<array{tags?:array{includes?:array<string>, excludes?:array<string>}, branches?:array{includes?:array<string>, excludes?:array<string>}, filePaths?:array{includes?:array<string>, excludes?:array<string>}}>, pullRequest?:array<array{events?:array<"OPEN"|"UPDATED"|"CLOSED">, branches?:array{includes?:array<string>, excludes?:array<string>}, filePaths?:array{includes?:array<string>, excludes?:array<string>}}>}}>}}>
     */
    public function updatePipelineAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
