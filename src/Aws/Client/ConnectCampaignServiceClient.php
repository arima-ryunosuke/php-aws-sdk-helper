<?php
namespace AWS\ConnectCampaignService;

class ConnectCampaignServiceClient
{
    /**
     * @param array{name:string, connectInstanceId:string, dialerConfig:array{progressiveDialerConfig?:array{bandwidthAllocation:float, dialingCapacity?:float}, predictiveDialerConfig?:array{bandwidthAllocation:float, dialingCapacity?:float}, agentlessDialerConfig?:array{dialingCapacity?:float}}, outboundCallConfig:array{connectContactFlowId:string, connectSourcePhoneNumber?:string, connectQueueId?:string, answerMachineDetectionConfig?:array{enableAnswerMachineDetection:bool, awaitAnswerMachinePrompt?:bool}}, tags?:array<string, string>} $args
     * @return \AWS\Result<array{id?:string, arn?:string, tags?:array<string, string>}>
     */
    public function createCampaign(array $args): \AWS\Result { }

    /**
     * @param array{name:string, connectInstanceId:string, dialerConfig:array{progressiveDialerConfig?:array{bandwidthAllocation:float, dialingCapacity?:float}, predictiveDialerConfig?:array{bandwidthAllocation:float, dialingCapacity?:float}, agentlessDialerConfig?:array{dialingCapacity?:float}}, outboundCallConfig:array{connectContactFlowId:string, connectSourcePhoneNumber?:string, connectQueueId?:string, answerMachineDetectionConfig?:array{enableAnswerMachineDetection:bool, awaitAnswerMachinePrompt?:bool}}, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{id?:string, arn?:string, tags?:array<string, string>}>
     */
    public function createCampaignAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteCampaign(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteCampaignAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectInstanceId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteConnectInstanceConfig(array $args): \AWS\Result { }

    /**
     * @param array{connectInstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteConnectInstanceConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectInstanceId:string} $args
     * @return \AWS\Result<void>
     */
    public function deleteInstanceOnboardingJob(array $args): \AWS\Result { }

    /**
     * @param array{connectInstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteInstanceOnboardingJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{campaign?:array{id:string, arn:string, name:string, connectInstanceId:string, dialerConfig:array{progressiveDialerConfig?:array{bandwidthAllocation:float, dialingCapacity?:float}, predictiveDialerConfig?:array{bandwidthAllocation:float, dialingCapacity?:float}, agentlessDialerConfig?:array{dialingCapacity?:float}}, outboundCallConfig:array{connectContactFlowId:string, connectSourcePhoneNumber?:string, connectQueueId?:string, answerMachineDetectionConfig?:array{enableAnswerMachineDetection:bool, awaitAnswerMachinePrompt?:bool}}, tags?:array<string, string>}}>
     */
    public function describeCampaign(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{campaign?:array{id:string, arn:string, name:string, connectInstanceId:string, dialerConfig:array{progressiveDialerConfig?:array{bandwidthAllocation:float, dialingCapacity?:float}, predictiveDialerConfig?:array{bandwidthAllocation:float, dialingCapacity?:float}, agentlessDialerConfig?:array{dialingCapacity?:float}}, outboundCallConfig:array{connectContactFlowId:string, connectSourcePhoneNumber?:string, connectQueueId?:string, answerMachineDetectionConfig?:array{enableAnswerMachineDetection:bool, awaitAnswerMachinePrompt?:bool}}, tags?:array<string, string>}}>
     */
    public function describeCampaignAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{state?:"Initialized"|"Running"|"Paused"|"Stopped"|"Failed"}>
     */
    public function getCampaignState(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{state?:"Initialized"|"Running"|"Paused"|"Stopped"|"Failed"}>
     */
    public function getCampaignStateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{campaignIds:array<string>} $args
     * @return \AWS\Result<array{successfulRequests?:array<array{campaignId?:string, state?:"Initialized"|"Running"|"Paused"|"Stopped"|"Failed"}>, failedRequests?:array<array{campaignId?:string, failureCode?:"ResourceNotFound"|"UnknownError"}>}>
     */
    public function getCampaignStateBatch(array $args): \AWS\Result { }

    /**
     * @param array{campaignIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{successfulRequests?:array<array{campaignId?:string, state?:"Initialized"|"Running"|"Paused"|"Stopped"|"Failed"}>, failedRequests?:array<array{campaignId?:string, failureCode?:"ResourceNotFound"|"UnknownError"}>}>
     */
    public function getCampaignStateBatchAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectInstanceId:string} $args
     * @return \AWS\Result<array{connectInstanceConfig?:array{connectInstanceId:string, serviceLinkedRoleArn:string, encryptionConfig:array{enabled:bool, encryptionType?:"KMS", keyArn?:string}}}>
     */
    public function getConnectInstanceConfig(array $args): \AWS\Result { }

    /**
     * @param array{connectInstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{connectInstanceConfig?:array{connectInstanceId:string, serviceLinkedRoleArn:string, encryptionConfig:array{enabled:bool, encryptionType?:"KMS", keyArn?:string}}}>
     */
    public function getConnectInstanceConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectInstanceId:string} $args
     * @return \AWS\Result<array{connectInstanceOnboardingJobStatus?:array{connectInstanceId:string, status:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", failureCode?:"EVENT_BRIDGE_ACCESS_DENIED"|"EVENT_BRIDGE_MANAGED_RULE_LIMIT_EXCEEDED"|"IAM_ACCESS_DENIED"|"KMS_ACCESS_DENIED"|"KMS_KEY_NOT_FOUND"|"INTERNAL_FAILURE"}}>
     */
    public function getInstanceOnboardingJobStatus(array $args): \AWS\Result { }

    /**
     * @param array{connectInstanceId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{connectInstanceOnboardingJobStatus?:array{connectInstanceId:string, status:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", failureCode?:"EVENT_BRIDGE_ACCESS_DENIED"|"EVENT_BRIDGE_MANAGED_RULE_LIMIT_EXCEEDED"|"IAM_ACCESS_DENIED"|"KMS_ACCESS_DENIED"|"KMS_KEY_NOT_FOUND"|"INTERNAL_FAILURE"}}>
     */
    public function getInstanceOnboardingJobStatusAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, filters?:array{instanceIdFilter?:array{value:string, operator:"Eq"}}} $args
     * @return \AWS\Result<array{nextToken?:string, campaignSummaryList?:array<array{id:string, arn:string, name:string, connectInstanceId:string}>}>
     */
    public function listCampaigns(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, filters?:array{instanceIdFilter?:array{value:string, operator:"Eq"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, campaignSummaryList?:array<array{id:string, arn:string, name:string, connectInstanceId:string}>}>
     */
    public function listCampaignsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{tags?:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<void>
     */
    public function pauseCampaign(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function pauseCampaignAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, dialRequests:array<array{clientToken:string, phoneNumber:string, expirationTime:int|string|\DateTimeInterface, attributes:array<string, string>}>} $args
     * @return \AWS\Result<array{successfulRequests?:array<array{clientToken?:string, id?:string}>, failedRequests?:array<array{clientToken?:string, id?:string, failureCode?:"InvalidInput"|"RequestThrottled"|"UnknownError"}>}>
     */
    public function putDialRequestBatch(array $args): \AWS\Result { }

    /**
     * @param array{id:string, dialRequests:array<array{clientToken:string, phoneNumber:string, expirationTime:int|string|\DateTimeInterface, attributes:array<string, string>}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{successfulRequests?:array<array{clientToken?:string, id?:string}>, failedRequests?:array<array{clientToken?:string, id?:string, failureCode?:"InvalidInput"|"RequestThrottled"|"UnknownError"}>}>
     */
    public function putDialRequestBatchAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<void>
     */
    public function resumeCampaign(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function resumeCampaignAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<void>
     */
    public function startCampaign(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function startCampaignAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectInstanceId:string, encryptionConfig:array{enabled:bool, encryptionType?:"KMS", keyArn?:string}} $args
     * @return \AWS\Result<array{connectInstanceOnboardingJobStatus?:array{connectInstanceId:string, status:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", failureCode?:"EVENT_BRIDGE_ACCESS_DENIED"|"EVENT_BRIDGE_MANAGED_RULE_LIMIT_EXCEEDED"|"IAM_ACCESS_DENIED"|"KMS_ACCESS_DENIED"|"KMS_KEY_NOT_FOUND"|"INTERNAL_FAILURE"}}>
     */
    public function startInstanceOnboardingJob(array $args): \AWS\Result { }

    /**
     * @param array{connectInstanceId:string, encryptionConfig:array{enabled:bool, encryptionType?:"KMS", keyArn?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{connectInstanceOnboardingJobStatus?:array{connectInstanceId:string, status:"IN_PROGRESS"|"SUCCEEDED"|"FAILED", failureCode?:"EVENT_BRIDGE_ACCESS_DENIED"|"EVENT_BRIDGE_MANAGED_RULE_LIMIT_EXCEEDED"|"IAM_ACCESS_DENIED"|"KMS_ACCESS_DENIED"|"KMS_KEY_NOT_FOUND"|"INTERNAL_FAILURE"}}>
     */
    public function startInstanceOnboardingJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<void>
     */
    public function stopCampaign(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function stopCampaignAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, tags:array<string, string>} $args
     * @return \AWS\Result<void>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, tags:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, tagKeys:array<string>} $args
     * @return \AWS\Result<void>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, tagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, dialerConfig:array{progressiveDialerConfig?:array{bandwidthAllocation:float, dialingCapacity?:float}, predictiveDialerConfig?:array{bandwidthAllocation:float, dialingCapacity?:float}, agentlessDialerConfig?:array{dialingCapacity?:float}}} $args
     * @return \AWS\Result<void>
     */
    public function updateCampaignDialerConfig(array $args): \AWS\Result { }

    /**
     * @param array{id:string, dialerConfig:array{progressiveDialerConfig?:array{bandwidthAllocation:float, dialingCapacity?:float}, predictiveDialerConfig?:array{bandwidthAllocation:float, dialingCapacity?:float}, agentlessDialerConfig?:array{dialingCapacity?:float}}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateCampaignDialerConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, name:string} $args
     * @return \AWS\Result<void>
     */
    public function updateCampaignName(array $args): \AWS\Result { }

    /**
     * @param array{id:string, name:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateCampaignNameAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, connectContactFlowId?:string, connectSourcePhoneNumber?:string, answerMachineDetectionConfig?:array{enableAnswerMachineDetection:bool, awaitAnswerMachinePrompt?:bool}} $args
     * @return \AWS\Result<void>
     */
    public function updateCampaignOutboundCallConfig(array $args): \AWS\Result { }

    /**
     * @param array{id:string, connectContactFlowId?:string, connectSourcePhoneNumber?:string, answerMachineDetectionConfig?:array{enableAnswerMachineDetection:bool, awaitAnswerMachinePrompt?:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateCampaignOutboundCallConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
