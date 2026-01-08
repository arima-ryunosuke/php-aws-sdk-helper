<?php
namespace AWS\ConnectCampaignsV2;

class ConnectCampaignsV2Client
{
    /**
     * @param array{name:string, connectInstanceId:string, channelSubtypeConfig:array{telephony?:array{capacity?:float, connectQueueId?:string, outboundMode:array{progressive?:array{bandwidthAllocation:float}, predictive?:array{bandwidthAllocation:float}, agentless?:array{}}, defaultOutboundConfig:array{connectContactFlowId:string, connectSourcePhoneNumber?:string, answerMachineDetectionConfig?:array{enableAnswerMachineDetection:bool, awaitAnswerMachinePrompt?:bool}}}, sms?:array{capacity?:float, outboundMode:array{agentless?:array{}}, defaultOutboundConfig:array{connectSourcePhoneNumberArn:string, wisdomTemplateArn:string}}, email?:array{capacity?:float, outboundMode:array{agentless?:array{}}, defaultOutboundConfig:array{connectSourceEmailAddress:string, sourceEmailAddressDisplayName?:string, wisdomTemplateArn:string}}}, source?:array{customerProfilesSegmentArn?:string, eventTrigger?:array{customerProfilesDomainArn?:string}}, connectCampaignFlowArn?:string, schedule?:array{startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface, refreshFrequency?:string}, communicationTimeConfig?:array{localTimeZoneConfig:array{defaultTimeZone?:string, localTimeZoneDetection?:array<"ZIP_CODE"|"AREA_CODE">}, telephony?:array{openHours:array{dailyHours?:array<"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY", array<array{startTime:string, endTime:string}>>}, restrictedPeriods?:array{restrictedPeriodList?:array<array{name?:string, startDate:string, endDate:string}>}}, sms?:array{openHours:array{dailyHours?:array<"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY", array<array{startTime:string, endTime:string}>>}, restrictedPeriods?:array{restrictedPeriodList?:array<array{name?:string, startDate:string, endDate:string}>}}, email?:array{openHours:array{dailyHours?:array<"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY", array<array{startTime:string, endTime:string}>>}, restrictedPeriods?:array{restrictedPeriodList?:array<array{name?:string, startDate:string, endDate:string}>}}}, communicationLimitsOverride?:array{allChannelSubtypes?:array{communicationLimitsList?:array<array{maxCountPerRecipient:int, frequency:int, unit:"DAY"}>}}, tags?:array<string, string>} $args
     * @return \AWS\Result<array{id?:string, arn?:string, tags?:array<string, string>}>
     */
    public function createCampaign(array $args): \AWS\Result { }

    /**
     * @param array{name:string, connectInstanceId:string, channelSubtypeConfig:array{telephony?:array{capacity?:float, connectQueueId?:string, outboundMode:array{progressive?:array{bandwidthAllocation:float}, predictive?:array{bandwidthAllocation:float}, agentless?:array{}}, defaultOutboundConfig:array{connectContactFlowId:string, connectSourcePhoneNumber?:string, answerMachineDetectionConfig?:array{enableAnswerMachineDetection:bool, awaitAnswerMachinePrompt?:bool}}}, sms?:array{capacity?:float, outboundMode:array{agentless?:array{}}, defaultOutboundConfig:array{connectSourcePhoneNumberArn:string, wisdomTemplateArn:string}}, email?:array{capacity?:float, outboundMode:array{agentless?:array{}}, defaultOutboundConfig:array{connectSourceEmailAddress:string, sourceEmailAddressDisplayName?:string, wisdomTemplateArn:string}}}, source?:array{customerProfilesSegmentArn?:string, eventTrigger?:array{customerProfilesDomainArn?:string}}, connectCampaignFlowArn?:string, schedule?:array{startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface, refreshFrequency?:string}, communicationTimeConfig?:array{localTimeZoneConfig:array{defaultTimeZone?:string, localTimeZoneDetection?:array<"ZIP_CODE"|"AREA_CODE">}, telephony?:array{openHours:array{dailyHours?:array<"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY", array<array{startTime:string, endTime:string}>>}, restrictedPeriods?:array{restrictedPeriodList?:array<array{name?:string, startDate:string, endDate:string}>}}, sms?:array{openHours:array{dailyHours?:array<"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY", array<array{startTime:string, endTime:string}>>}, restrictedPeriods?:array{restrictedPeriodList?:array<array{name?:string, startDate:string, endDate:string}>}}, email?:array{openHours:array{dailyHours?:array<"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY", array<array{startTime:string, endTime:string}>>}, restrictedPeriods?:array{restrictedPeriodList?:array<array{name?:string, startDate:string, endDate:string}>}}}, communicationLimitsOverride?:array{allChannelSubtypes?:array{communicationLimitsList?:array<array{maxCountPerRecipient:int, frequency:int, unit:"DAY"}>}}, tags?:array<string, string>} $args
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
     * @param array{id:string, channelSubtype:"TELEPHONY"|"SMS"|"EMAIL"} $args
     * @return \AWS\Result<void>
     */
    public function deleteCampaignChannelSubtypeConfig(array $args): \AWS\Result { }

    /**
     * @param array{id:string, channelSubtype:"TELEPHONY"|"SMS"|"EMAIL"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteCampaignChannelSubtypeConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, config:"ALL_CHANNEL_SUBTYPES"} $args
     * @return \AWS\Result<void>
     */
    public function deleteCampaignCommunicationLimits(array $args): \AWS\Result { }

    /**
     * @param array{id:string, config:"ALL_CHANNEL_SUBTYPES"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteCampaignCommunicationLimitsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, config:"TELEPHONY"|"SMS"|"EMAIL"} $args
     * @return \AWS\Result<void>
     */
    public function deleteCampaignCommunicationTime(array $args): \AWS\Result { }

    /**
     * @param array{id:string, config:"TELEPHONY"|"SMS"|"EMAIL"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteCampaignCommunicationTimeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectInstanceId:string, campaignDeletionPolicy?:"RETAIN_ALL"|"DELETE_ALL"} $args
     * @return \AWS\Result<void>
     */
    public function deleteConnectInstanceConfig(array $args): \AWS\Result { }

    /**
     * @param array{connectInstanceId:string, campaignDeletionPolicy?:"RETAIN_ALL"|"DELETE_ALL"} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteConnectInstanceConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectInstanceId:string, integrationIdentifier:array{customerProfiles?:array{domainArn:string}, qConnect?:array{knowledgeBaseArn:string}}} $args
     * @return \AWS\Result<void>
     */
    public function deleteConnectInstanceIntegration(array $args): \AWS\Result { }

    /**
     * @param array{connectInstanceId:string, integrationIdentifier:array{customerProfiles?:array{domainArn:string}, qConnect?:array{knowledgeBaseArn:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function deleteConnectInstanceIntegrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @return \AWS\Result<array{campaign?:array{id:string, arn:string, name:string, connectInstanceId:string, channelSubtypeConfig:array{telephony?:array{capacity?:float, connectQueueId?:string, outboundMode:array{progressive?:array{bandwidthAllocation:float}, predictive?:array{bandwidthAllocation:float}, agentless?:array{}}, defaultOutboundConfig:array{connectContactFlowId:string, connectSourcePhoneNumber?:string, answerMachineDetectionConfig?:array{enableAnswerMachineDetection:bool, awaitAnswerMachinePrompt?:bool}}}, sms?:array{capacity?:float, outboundMode:array{agentless?:array{}}, defaultOutboundConfig:array{connectSourcePhoneNumberArn:string, wisdomTemplateArn:string}}, email?:array{capacity?:float, outboundMode:array{agentless?:array{}}, defaultOutboundConfig:array{connectSourceEmailAddress:string, sourceEmailAddressDisplayName?:string, wisdomTemplateArn:string}}}, source?:array{customerProfilesSegmentArn?:string, eventTrigger?:array{customerProfilesDomainArn?:string}}, connectCampaignFlowArn?:string, schedule?:array{startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface, refreshFrequency?:string}, communicationTimeConfig?:array{localTimeZoneConfig:array{defaultTimeZone?:string, localTimeZoneDetection?:array<"ZIP_CODE"|"AREA_CODE">}, telephony?:array{openHours:array{dailyHours?:array<"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY", array<array{startTime:string, endTime:string}>>}, restrictedPeriods?:array{restrictedPeriodList?:array<array{name?:string, startDate:string, endDate:string}>}}, sms?:array{openHours:array{dailyHours?:array<"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY", array<array{startTime:string, endTime:string}>>}, restrictedPeriods?:array{restrictedPeriodList?:array<array{name?:string, startDate:string, endDate:string}>}}, email?:array{openHours:array{dailyHours?:array<"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY", array<array{startTime:string, endTime:string}>>}, restrictedPeriods?:array{restrictedPeriodList?:array<array{name?:string, startDate:string, endDate:string}>}}}, communicationLimitsOverride?:array{allChannelSubtypes?:array{communicationLimitsList?:array<array{maxCountPerRecipient:int, frequency:int, unit:"DAY"}>}}, tags?:array<string, string>}}>
     */
    public function describeCampaign(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{campaign?:array{id:string, arn:string, name:string, connectInstanceId:string, channelSubtypeConfig:array{telephony?:array{capacity?:float, connectQueueId?:string, outboundMode:array{progressive?:array{bandwidthAllocation:float}, predictive?:array{bandwidthAllocation:float}, agentless?:array{}}, defaultOutboundConfig:array{connectContactFlowId:string, connectSourcePhoneNumber?:string, answerMachineDetectionConfig?:array{enableAnswerMachineDetection:bool, awaitAnswerMachinePrompt?:bool}}}, sms?:array{capacity?:float, outboundMode:array{agentless?:array{}}, defaultOutboundConfig:array{connectSourcePhoneNumberArn:string, wisdomTemplateArn:string}}, email?:array{capacity?:float, outboundMode:array{agentless?:array{}}, defaultOutboundConfig:array{connectSourceEmailAddress:string, sourceEmailAddressDisplayName?:string, wisdomTemplateArn:string}}}, source?:array{customerProfilesSegmentArn?:string, eventTrigger?:array{customerProfilesDomainArn?:string}}, connectCampaignFlowArn?:string, schedule?:array{startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface, refreshFrequency?:string}, communicationTimeConfig?:array{localTimeZoneConfig:array{defaultTimeZone?:string, localTimeZoneDetection?:array<"ZIP_CODE"|"AREA_CODE">}, telephony?:array{openHours:array{dailyHours?:array<"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY", array<array{startTime:string, endTime:string}>>}, restrictedPeriods?:array{restrictedPeriodList?:array<array{name?:string, startDate:string, endDate:string}>}}, sms?:array{openHours:array{dailyHours?:array<"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY", array<array{startTime:string, endTime:string}>>}, restrictedPeriods?:array{restrictedPeriodList?:array<array{name?:string, startDate:string, endDate:string}>}}, email?:array{openHours:array{dailyHours?:array<"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY", array<array{startTime:string, endTime:string}>>}, restrictedPeriods?:array{restrictedPeriodList?:array<array{name?:string, startDate:string, endDate:string}>}}}, communicationLimitsOverride?:array{allChannelSubtypes?:array{communicationLimitsList?:array<array{maxCountPerRecipient:int, frequency:int, unit:"DAY"}>}}, tags?:array<string, string>}}>
     */
    public function describeCampaignAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string} $args
     * @return \AWS\Result<array{state?:"Initialized"|"Running"|"Paused"|"Stopped"|"Failed"|"Completed"}>
     */
    public function getCampaignState(array $args): \AWS\Result { }

    /**
     * @param array{id:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{state?:"Initialized"|"Running"|"Paused"|"Stopped"|"Failed"|"Completed"}>
     */
    public function getCampaignStateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{campaignIds:array<string>} $args
     * @return \AWS\Result<array{successfulRequests?:array<array{campaignId?:string, state?:"Initialized"|"Running"|"Paused"|"Stopped"|"Failed"|"Completed"}>, failedRequests?:array<array{campaignId?:string, failureCode?:"ResourceNotFound"|"UnknownError"}>}>
     */
    public function getCampaignStateBatch(array $args): \AWS\Result { }

    /**
     * @param array{campaignIds:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{successfulRequests?:array<array{campaignId?:string, state?:"Initialized"|"Running"|"Paused"|"Stopped"|"Failed"|"Completed"}>, failedRequests?:array<array{campaignId?:string, failureCode?:"ResourceNotFound"|"UnknownError"}>}>
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
     * @return \AWS\Result<array{nextToken?:string, campaignSummaryList?:array<array{id:string, arn:string, name:string, connectInstanceId:string, channelSubtypes:array<"TELEPHONY"|"SMS"|"EMAIL">, schedule?:array{startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface, refreshFrequency?:string}, connectCampaignFlowArn?:string}>}>
     */
    public function listCampaigns(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, filters?:array{instanceIdFilter?:array{value:string, operator:"Eq"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, campaignSummaryList?:array<array{id:string, arn:string, name:string, connectInstanceId:string, channelSubtypes:array<"TELEPHONY"|"SMS"|"EMAIL">, schedule?:array{startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface, refreshFrequency?:string}, connectCampaignFlowArn?:string}>}>
     */
    public function listCampaignsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{connectInstanceId:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, integrationSummaryList?:array<array{customerProfiles?:array{domainArn:string, objectTypeNames:array<"Campaign-Email"|"Campaign-SMS"|"Campaign-Telephony"|"Campaign-Orchestration", string>}, qConnect?:array{knowledgeBaseArn:string}}>}>
     */
    public function listConnectInstanceIntegrations(array $args): \AWS\Result { }

    /**
     * @param array{connectInstanceId:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, integrationSummaryList?:array<array{customerProfiles?:array{domainArn:string, objectTypeNames:array<"Campaign-Email"|"Campaign-SMS"|"Campaign-Telephony"|"Campaign-Orchestration", string>}, qConnect?:array{knowledgeBaseArn:string}}>}>
     */
    public function listConnectInstanceIntegrationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{connectInstanceId:string, integrationConfig:array{customerProfiles?:array{domainArn:string, objectTypeNames:array<"Campaign-Email"|"Campaign-SMS"|"Campaign-Telephony"|"Campaign-Orchestration", string>}, qConnect?:array{knowledgeBaseArn:string}}} $args
     * @return \AWS\Result<void>
     */
    public function putConnectInstanceIntegration(array $args): \AWS\Result { }

    /**
     * @param array{connectInstanceId:string, integrationConfig:array{customerProfiles?:array{domainArn:string, objectTypeNames:array<"Campaign-Email"|"Campaign-SMS"|"Campaign-Telephony"|"Campaign-Orchestration", string>}, qConnect?:array{knowledgeBaseArn:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function putConnectInstanceIntegrationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, outboundRequests:array<array{clientToken:string, expirationTime:int|string|\DateTimeInterface, channelSubtypeParameters:array{telephony?:array{destinationPhoneNumber:string, attributes:array<string, string>, connectSourcePhoneNumber?:string, answerMachineDetectionConfig?:array{enableAnswerMachineDetection:bool, awaitAnswerMachinePrompt?:bool}}, sms?:array{destinationPhoneNumber:string, connectSourcePhoneNumberArn?:string, templateArn?:string, templateParameters:array<string, string>}, email?:array{destinationEmailAddress:string, connectSourceEmailAddress?:string, templateArn?:string, templateParameters:array<string, string>}}}>} $args
     * @return \AWS\Result<array{successfulRequests?:array<array{clientToken?:string, id?:string}>, failedRequests?:array<array{clientToken?:string, id?:string, failureCode?:"InvalidInput"|"RequestThrottled"|"UnknownError"|"BufferLimitExceeded"}>}>
     */
    public function putOutboundRequestBatch(array $args): \AWS\Result { }

    /**
     * @param array{id:string, outboundRequests:array<array{clientToken:string, expirationTime:int|string|\DateTimeInterface, channelSubtypeParameters:array{telephony?:array{destinationPhoneNumber:string, attributes:array<string, string>, connectSourcePhoneNumber?:string, answerMachineDetectionConfig?:array{enableAnswerMachineDetection:bool, awaitAnswerMachinePrompt?:bool}}, sms?:array{destinationPhoneNumber:string, connectSourcePhoneNumberArn?:string, templateArn?:string, templateParameters:array<string, string>}, email?:array{destinationEmailAddress:string, connectSourceEmailAddress?:string, templateArn?:string, templateParameters:array<string, string>}}}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{successfulRequests?:array<array{clientToken?:string, id?:string}>, failedRequests?:array<array{clientToken?:string, id?:string, failureCode?:"InvalidInput"|"RequestThrottled"|"UnknownError"|"BufferLimitExceeded"}>}>
     */
    public function putOutboundRequestBatchAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, profileOutboundRequests:array<array{clientToken:string, profileId:string, expirationTime?:int|string|\DateTimeInterface}>} $args
     * @return \AWS\Result<array{successfulRequests?:array<array{clientToken?:string, id?:string}>, failedRequests?:array<array{clientToken?:string, id?:string, failureCode?:"UnknownError"|"ResourceNotFound"|"Conflict"|"RequestThrottled"|"InvalidInput"}>}>
     */
    public function putProfileOutboundRequestBatch(array $args): \AWS\Result { }

    /**
     * @param array{id:string, profileOutboundRequests:array<array{clientToken:string, profileId:string, expirationTime?:int|string|\DateTimeInterface}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{successfulRequests?:array<array{clientToken?:string, id?:string}>, failedRequests?:array<array{clientToken?:string, id?:string, failureCode?:"UnknownError"|"ResourceNotFound"|"Conflict"|"RequestThrottled"|"InvalidInput"}>}>
     */
    public function putProfileOutboundRequestBatchAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{id:string, channelSubtypeConfig:array{telephony?:array{capacity?:float, connectQueueId?:string, outboundMode:array{progressive?:array{bandwidthAllocation:float}, predictive?:array{bandwidthAllocation:float}, agentless?:array{}}, defaultOutboundConfig:array{connectContactFlowId:string, connectSourcePhoneNumber?:string, answerMachineDetectionConfig?:array{enableAnswerMachineDetection:bool, awaitAnswerMachinePrompt?:bool}}}, sms?:array{capacity?:float, outboundMode:array{agentless?:array{}}, defaultOutboundConfig:array{connectSourcePhoneNumberArn:string, wisdomTemplateArn:string}}, email?:array{capacity?:float, outboundMode:array{agentless?:array{}}, defaultOutboundConfig:array{connectSourceEmailAddress:string, sourceEmailAddressDisplayName?:string, wisdomTemplateArn:string}}}} $args
     * @return \AWS\Result<void>
     */
    public function updateCampaignChannelSubtypeConfig(array $args): \AWS\Result { }

    /**
     * @param array{id:string, channelSubtypeConfig:array{telephony?:array{capacity?:float, connectQueueId?:string, outboundMode:array{progressive?:array{bandwidthAllocation:float}, predictive?:array{bandwidthAllocation:float}, agentless?:array{}}, defaultOutboundConfig:array{connectContactFlowId:string, connectSourcePhoneNumber?:string, answerMachineDetectionConfig?:array{enableAnswerMachineDetection:bool, awaitAnswerMachinePrompt?:bool}}}, sms?:array{capacity?:float, outboundMode:array{agentless?:array{}}, defaultOutboundConfig:array{connectSourcePhoneNumberArn:string, wisdomTemplateArn:string}}, email?:array{capacity?:float, outboundMode:array{agentless?:array{}}, defaultOutboundConfig:array{connectSourceEmailAddress:string, sourceEmailAddressDisplayName?:string, wisdomTemplateArn:string}}}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateCampaignChannelSubtypeConfigAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, communicationLimitsOverride:array{allChannelSubtypes?:array{communicationLimitsList?:array<array{maxCountPerRecipient:int, frequency:int, unit:"DAY"}>}}} $args
     * @return \AWS\Result<void>
     */
    public function updateCampaignCommunicationLimits(array $args): \AWS\Result { }

    /**
     * @param array{id:string, communicationLimitsOverride:array{allChannelSubtypes?:array{communicationLimitsList?:array<array{maxCountPerRecipient:int, frequency:int, unit:"DAY"}>}}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateCampaignCommunicationLimitsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, communicationTimeConfig:array{localTimeZoneConfig:array{defaultTimeZone?:string, localTimeZoneDetection?:array<"ZIP_CODE"|"AREA_CODE">}, telephony?:array{openHours:array{dailyHours?:array<"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY", array<array{startTime:string, endTime:string}>>}, restrictedPeriods?:array{restrictedPeriodList?:array<array{name?:string, startDate:string, endDate:string}>}}, sms?:array{openHours:array{dailyHours?:array<"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY", array<array{startTime:string, endTime:string}>>}, restrictedPeriods?:array{restrictedPeriodList?:array<array{name?:string, startDate:string, endDate:string}>}}, email?:array{openHours:array{dailyHours?:array<"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY", array<array{startTime:string, endTime:string}>>}, restrictedPeriods?:array{restrictedPeriodList?:array<array{name?:string, startDate:string, endDate:string}>}}}} $args
     * @return \AWS\Result<void>
     */
    public function updateCampaignCommunicationTime(array $args): \AWS\Result { }

    /**
     * @param array{id:string, communicationTimeConfig:array{localTimeZoneConfig:array{defaultTimeZone?:string, localTimeZoneDetection?:array<"ZIP_CODE"|"AREA_CODE">}, telephony?:array{openHours:array{dailyHours?:array<"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY", array<array{startTime:string, endTime:string}>>}, restrictedPeriods?:array{restrictedPeriodList?:array<array{name?:string, startDate:string, endDate:string}>}}, sms?:array{openHours:array{dailyHours?:array<"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY", array<array{startTime:string, endTime:string}>>}, restrictedPeriods?:array{restrictedPeriodList?:array<array{name?:string, startDate:string, endDate:string}>}}, email?:array{openHours:array{dailyHours?:array<"MONDAY"|"TUESDAY"|"WEDNESDAY"|"THURSDAY"|"FRIDAY"|"SATURDAY"|"SUNDAY", array<array{startTime:string, endTime:string}>>}, restrictedPeriods?:array{restrictedPeriodList?:array<array{name?:string, startDate:string, endDate:string}>}}}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateCampaignCommunicationTimeAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, connectCampaignFlowArn:string} $args
     * @return \AWS\Result<void>
     */
    public function updateCampaignFlowAssociation(array $args): \AWS\Result { }

    /**
     * @param array{id:string, connectCampaignFlowArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateCampaignFlowAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{id:string, schedule:array{startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface, refreshFrequency?:string}} $args
     * @return \AWS\Result<void>
     */
    public function updateCampaignSchedule(array $args): \AWS\Result { }

    /**
     * @param array{id:string, schedule:array{startTime:int|string|\DateTimeInterface, endTime:int|string|\DateTimeInterface, refreshFrequency?:string}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateCampaignScheduleAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{id:string, source:array{customerProfilesSegmentArn?:string, eventTrigger?:array{customerProfilesDomainArn?:string}}} $args
     * @return \AWS\Result<void>
     */
    public function updateCampaignSource(array $args): \AWS\Result { }

    /**
     * @param array{id:string, source:array{customerProfilesSegmentArn?:string, eventTrigger?:array{customerProfilesDomainArn?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<void>
     */
    public function updateCampaignSourceAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
