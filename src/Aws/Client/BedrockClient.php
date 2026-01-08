<?php
namespace AWS\Bedrock;

class BedrockClient
{
    /**
     * @param array{jobIdentifiers:array<string>} $args
     * @return \AWS\Result<array{errors:array<array{jobIdentifier:string, code:string, message?:string}>, evaluationJobs:array<array{jobIdentifier:string, jobStatus:"InProgress"|"Completed"|"Failed"|"Stopping"|"Stopped"|"Deleting"}>}>
     */
    public function batchDeleteEvaluationJob(array $args): \AWS\Result { }

    /**
     * @param array{jobIdentifiers:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{errors:array<array{jobIdentifier:string, code:string, message?:string}>, evaluationJobs:array<array{jobIdentifier:string, jobStatus:"InProgress"|"Completed"|"Failed"|"Stopping"|"Stopped"|"Deleting"}>}>
     */
    public function batchDeleteEvaluationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobName:string, jobDescription?:string, clientRequestToken?:string, roleArn:string, customerEncryptionKeyId?:string, jobTags?:array<array{key:string, value:string}>, applicationType?:"ModelEvaluation"|"RagEvaluation", evaluationConfig:array{automated?:array{datasetMetricConfigs:array<array{taskType:"Summarization"|"Classification"|"QuestionAndAnswer"|"Generation"|"Custom", dataset:array{name:string, datasetLocation?:array{s3Uri?:string}}, metricNames:array<string>}>, evaluatorModelConfig?:array{bedrockEvaluatorModels?:array<array{modelIdentifier:string}>}}, human?:array{humanWorkflowConfig?:array{flowDefinitionArn:string, instructions?:string}, customMetrics?:array<array{name:string, description?:string, ratingMethod:string}>, datasetMetricConfigs:array<array{taskType:"Summarization"|"Classification"|"QuestionAndAnswer"|"Generation"|"Custom", dataset:array{name:string, datasetLocation?:array{s3Uri?:string}}, metricNames:array<string>}>}}, inferenceConfig:array{models?:array<array{bedrockModel?:array{modelIdentifier:string, inferenceParams?:string, performanceConfig?:array{latency?:"standard"|"optimized"}}}>, ragConfigs?:array<array{knowledgeBaseConfig?:array{retrieveConfig?:array{knowledgeBaseId:string, knowledgeBaseRetrievalConfiguration:array{vectorSearchConfiguration:array{numberOfResults?:int, overrideSearchType?:"HYBRID"|"SEMANTIC", filter?:array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:array<array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:mixed, orAll?:array<array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:mixed, orAll?:mixed}>}>, orAll?:array<array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:array<array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:mixed, orAll?:mixed}>, orAll?:mixed}>}}}}, retrieveAndGenerateConfig?:array{type:"KNOWLEDGE_BASE"|"EXTERNAL_SOURCES", knowledgeBaseConfiguration?:array{knowledgeBaseId:string, modelArn:string, retrievalConfiguration?:array{vectorSearchConfiguration:array{numberOfResults?:int, overrideSearchType?:"HYBRID"|"SEMANTIC", filter?:array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:array<array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:mixed, orAll?:array<array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:mixed, orAll?:mixed}>}>, orAll?:array<array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:array<array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:mixed, orAll?:mixed}>, orAll?:mixed}>}}}, generationConfiguration?:array{promptTemplate?:array{textPromptTemplate?:string}, guardrailConfiguration?:array{guardrailId:string, guardrailVersion:string}, kbInferenceConfig?:array{textInferenceConfig?:array{temperature?:float, topP?:float, maxTokens?:int, stopSequences?:array<string>}}, additionalModelRequestFields?:array<string, array{}>}, orchestrationConfiguration?:array{queryTransformationConfiguration:array{type:"QUERY_DECOMPOSITION"}}}, externalSourcesConfiguration?:array{modelArn:string, sources:array<array{sourceType:"S3"|"BYTE_CONTENT", s3Location?:array{uri:string}, byteContent?:array{identifier:string, contentType:string, data:string|resource|\Psr\Http\Message\StreamInterface}}>, generationConfiguration?:array{promptTemplate?:array{textPromptTemplate?:string}, guardrailConfiguration?:array{guardrailId:string, guardrailVersion:string}, kbInferenceConfig?:array{textInferenceConfig?:array{temperature?:float, topP?:float, maxTokens?:int, stopSequences?:array<string>}}, additionalModelRequestFields?:array<string, array{}>}}}}}>}, outputDataConfig:array{s3Uri:string}} $args
     * @return \AWS\Result<array{jobArn:string}>
     */
    public function createEvaluationJob(array $args): \AWS\Result { }

    /**
     * @param array{jobName:string, jobDescription?:string, clientRequestToken?:string, roleArn:string, customerEncryptionKeyId?:string, jobTags?:array<array{key:string, value:string}>, applicationType?:"ModelEvaluation"|"RagEvaluation", evaluationConfig:array{automated?:array{datasetMetricConfigs:array<array{taskType:"Summarization"|"Classification"|"QuestionAndAnswer"|"Generation"|"Custom", dataset:array{name:string, datasetLocation?:array{s3Uri?:string}}, metricNames:array<string>}>, evaluatorModelConfig?:array{bedrockEvaluatorModels?:array<array{modelIdentifier:string}>}}, human?:array{humanWorkflowConfig?:array{flowDefinitionArn:string, instructions?:string}, customMetrics?:array<array{name:string, description?:string, ratingMethod:string}>, datasetMetricConfigs:array<array{taskType:"Summarization"|"Classification"|"QuestionAndAnswer"|"Generation"|"Custom", dataset:array{name:string, datasetLocation?:array{s3Uri?:string}}, metricNames:array<string>}>}}, inferenceConfig:array{models?:array<array{bedrockModel?:array{modelIdentifier:string, inferenceParams?:string, performanceConfig?:array{latency?:"standard"|"optimized"}}}>, ragConfigs?:array<array{knowledgeBaseConfig?:array{retrieveConfig?:array{knowledgeBaseId:string, knowledgeBaseRetrievalConfiguration:array{vectorSearchConfiguration:array{numberOfResults?:int, overrideSearchType?:"HYBRID"|"SEMANTIC", filter?:array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:array<array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:mixed, orAll?:array<array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:mixed, orAll?:mixed}>}>, orAll?:array<array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:array<array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:mixed, orAll?:mixed}>, orAll?:mixed}>}}}}, retrieveAndGenerateConfig?:array{type:"KNOWLEDGE_BASE"|"EXTERNAL_SOURCES", knowledgeBaseConfiguration?:array{knowledgeBaseId:string, modelArn:string, retrievalConfiguration?:array{vectorSearchConfiguration:array{numberOfResults?:int, overrideSearchType?:"HYBRID"|"SEMANTIC", filter?:array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:array<array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:mixed, orAll?:array<array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:mixed, orAll?:mixed}>}>, orAll?:array<array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:array<array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:mixed, orAll?:mixed}>, orAll?:mixed}>}}}, generationConfiguration?:array{promptTemplate?:array{textPromptTemplate?:string}, guardrailConfiguration?:array{guardrailId:string, guardrailVersion:string}, kbInferenceConfig?:array{textInferenceConfig?:array{temperature?:float, topP?:float, maxTokens?:int, stopSequences?:array<string>}}, additionalModelRequestFields?:array<string, array{}>}, orchestrationConfiguration?:array{queryTransformationConfiguration:array{type:"QUERY_DECOMPOSITION"}}}, externalSourcesConfiguration?:array{modelArn:string, sources:array<array{sourceType:"S3"|"BYTE_CONTENT", s3Location?:array{uri:string}, byteContent?:array{identifier:string, contentType:string, data:string|resource|\Psr\Http\Message\StreamInterface}}>, generationConfiguration?:array{promptTemplate?:array{textPromptTemplate?:string}, guardrailConfiguration?:array{guardrailId:string, guardrailVersion:string}, kbInferenceConfig?:array{textInferenceConfig?:array{temperature?:float, topP?:float, maxTokens?:int, stopSequences?:array<string>}}, additionalModelRequestFields?:array<string, array{}>}}}}}>}, outputDataConfig:array{s3Uri:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobArn:string}>
     */
    public function createEvaluationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{name:string, description?:string, topicPolicyConfig?:array{topicsConfig:array<array{name:string, definition:string, examples?:array<string>, type:"DENY"}>}, contentPolicyConfig?:array{filtersConfig:array<array{type:"SEXUAL"|"VIOLENCE"|"HATE"|"INSULTS"|"MISCONDUCT"|"PROMPT_ATTACK", inputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", outputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", inputModalities?:array<"TEXT"|"IMAGE">, outputModalities?:array<"TEXT"|"IMAGE">}>}, wordPolicyConfig?:array{wordsConfig?:array<array{text:string}>, managedWordListsConfig?:array<array{type:"PROFANITY"}>}, sensitiveInformationPolicyConfig?:array{piiEntitiesConfig?:array<array{type:"ADDRESS"|"AGE"|"AWS_ACCESS_KEY"|"AWS_SECRET_KEY"|"CA_HEALTH_NUMBER"|"CA_SOCIAL_INSURANCE_NUMBER"|"CREDIT_DEBIT_CARD_CVV"|"CREDIT_DEBIT_CARD_EXPIRY"|"CREDIT_DEBIT_CARD_NUMBER"|"DRIVER_ID"|"EMAIL"|"INTERNATIONAL_BANK_ACCOUNT_NUMBER"|"IP_ADDRESS"|"LICENSE_PLATE"|"MAC_ADDRESS"|"NAME"|"PASSWORD"|"PHONE"|"PIN"|"SWIFT_CODE"|"UK_NATIONAL_HEALTH_SERVICE_NUMBER"|"UK_NATIONAL_INSURANCE_NUMBER"|"UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER"|"URL"|"USERNAME"|"US_BANK_ACCOUNT_NUMBER"|"US_BANK_ROUTING_NUMBER"|"US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER"|"US_PASSPORT_NUMBER"|"US_SOCIAL_SECURITY_NUMBER"|"VEHICLE_IDENTIFICATION_NUMBER", action:"BLOCK"|"ANONYMIZE"}>, regexesConfig?:array<array{name:string, description?:string, pattern:string, action:"BLOCK"|"ANONYMIZE"}>}, contextualGroundingPolicyConfig?:array{filtersConfig:array<array{type:"GROUNDING"|"RELEVANCE", threshold:float}>}, blockedInputMessaging:string, blockedOutputsMessaging:string, kmsKeyId?:string, tags?:array<array{key:string, value:string}>, clientRequestToken?:string} $args
     * @return \AWS\Result<array{guardrailId:string, guardrailArn:string, version:string, createdAt:int|string|\DateTimeInterface}>
     */
    public function createGuardrail(array $args): \AWS\Result { }

    /**
     * @param array{name:string, description?:string, topicPolicyConfig?:array{topicsConfig:array<array{name:string, definition:string, examples?:array<string>, type:"DENY"}>}, contentPolicyConfig?:array{filtersConfig:array<array{type:"SEXUAL"|"VIOLENCE"|"HATE"|"INSULTS"|"MISCONDUCT"|"PROMPT_ATTACK", inputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", outputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", inputModalities?:array<"TEXT"|"IMAGE">, outputModalities?:array<"TEXT"|"IMAGE">}>}, wordPolicyConfig?:array{wordsConfig?:array<array{text:string}>, managedWordListsConfig?:array<array{type:"PROFANITY"}>}, sensitiveInformationPolicyConfig?:array{piiEntitiesConfig?:array<array{type:"ADDRESS"|"AGE"|"AWS_ACCESS_KEY"|"AWS_SECRET_KEY"|"CA_HEALTH_NUMBER"|"CA_SOCIAL_INSURANCE_NUMBER"|"CREDIT_DEBIT_CARD_CVV"|"CREDIT_DEBIT_CARD_EXPIRY"|"CREDIT_DEBIT_CARD_NUMBER"|"DRIVER_ID"|"EMAIL"|"INTERNATIONAL_BANK_ACCOUNT_NUMBER"|"IP_ADDRESS"|"LICENSE_PLATE"|"MAC_ADDRESS"|"NAME"|"PASSWORD"|"PHONE"|"PIN"|"SWIFT_CODE"|"UK_NATIONAL_HEALTH_SERVICE_NUMBER"|"UK_NATIONAL_INSURANCE_NUMBER"|"UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER"|"URL"|"USERNAME"|"US_BANK_ACCOUNT_NUMBER"|"US_BANK_ROUTING_NUMBER"|"US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER"|"US_PASSPORT_NUMBER"|"US_SOCIAL_SECURITY_NUMBER"|"VEHICLE_IDENTIFICATION_NUMBER", action:"BLOCK"|"ANONYMIZE"}>, regexesConfig?:array<array{name:string, description?:string, pattern:string, action:"BLOCK"|"ANONYMIZE"}>}, contextualGroundingPolicyConfig?:array{filtersConfig:array<array{type:"GROUNDING"|"RELEVANCE", threshold:float}>}, blockedInputMessaging:string, blockedOutputsMessaging:string, kmsKeyId?:string, tags?:array<array{key:string, value:string}>, clientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{guardrailId:string, guardrailArn:string, version:string, createdAt:int|string|\DateTimeInterface}>
     */
    public function createGuardrailAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{guardrailIdentifier:string, description?:string, clientRequestToken?:string} $args
     * @return \AWS\Result<array{guardrailId:string, version:string}>
     */
    public function createGuardrailVersion(array $args): \AWS\Result { }

    /**
     * @param array{guardrailIdentifier:string, description?:string, clientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{guardrailId:string, version:string}>
     */
    public function createGuardrailVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{inferenceProfileName:string, description?:string, clientRequestToken?:string, modelSource:array{copyFrom?:string}, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{inferenceProfileArn:string, status?:"ACTIVE"}>
     */
    public function createInferenceProfile(array $args): \AWS\Result { }

    /**
     * @param array{inferenceProfileName:string, description?:string, clientRequestToken?:string, modelSource:array{copyFrom?:string}, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{inferenceProfileArn:string, status?:"ACTIVE"}>
     */
    public function createInferenceProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{modelSourceIdentifier:string, endpointConfig:array{sageMaker?:array{initialInstanceCount:int, instanceType:string, executionRole:string, kmsEncryptionKey?:string, vpc?:array{subnetIds:array<string>, securityGroupIds:array<string>}}}, acceptEula?:bool, endpointName:string, clientRequestToken?:string, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{marketplaceModelEndpoint:array{endpointArn:string, modelSourceIdentifier:string, status?:"REGISTERED"|"INCOMPATIBLE_ENDPOINT", statusMessage?:string, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, endpointConfig:array{sageMaker?:array{initialInstanceCount:int, instanceType:string, executionRole:string, kmsEncryptionKey?:string, vpc?:array{subnetIds:array<string>, securityGroupIds:array<string>}}}, endpointStatus:string, endpointStatusMessage?:string}}>
     */
    public function createMarketplaceModelEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{modelSourceIdentifier:string, endpointConfig:array{sageMaker?:array{initialInstanceCount:int, instanceType:string, executionRole:string, kmsEncryptionKey?:string, vpc?:array{subnetIds:array<string>, securityGroupIds:array<string>}}}, acceptEula?:bool, endpointName:string, clientRequestToken?:string, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{marketplaceModelEndpoint:array{endpointArn:string, modelSourceIdentifier:string, status?:"REGISTERED"|"INCOMPATIBLE_ENDPOINT", statusMessage?:string, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, endpointConfig:array{sageMaker?:array{initialInstanceCount:int, instanceType:string, executionRole:string, kmsEncryptionKey?:string, vpc?:array{subnetIds:array<string>, securityGroupIds:array<string>}}}, endpointStatus:string, endpointStatusMessage?:string}}>
     */
    public function createMarketplaceModelEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{sourceModelArn:string, targetModelName:string, modelKmsKeyId?:string, targetModelTags?:array<array{key:string, value:string}>, clientRequestToken?:string} $args
     * @return \AWS\Result<array{jobArn:string}>
     */
    public function createModelCopyJob(array $args): \AWS\Result { }

    /**
     * @param array{sourceModelArn:string, targetModelName:string, modelKmsKeyId?:string, targetModelTags?:array<array{key:string, value:string}>, clientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobArn:string}>
     */
    public function createModelCopyJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobName:string, customModelName:string, roleArn:string, clientRequestToken?:string, baseModelIdentifier:string, customizationType?:"FINE_TUNING"|"CONTINUED_PRE_TRAINING"|"DISTILLATION", customModelKmsKeyId?:string, jobTags?:array<array{key:string, value:string}>, customModelTags?:array<array{key:string, value:string}>, trainingDataConfig:array{s3Uri?:string, invocationLogsConfig?:array{usePromptResponse?:bool, invocationLogSource:array{s3Uri?:string}, requestMetadataFilters?:array{equals?:array<string, string>, notEquals?:array<string, string>, andAll?:array<array{equals?:array<string, string>, notEquals?:array<string, string>}>, orAll?:array<array{equals?:array<string, string>, notEquals?:array<string, string>}>}}}, validationDataConfig?:array{validators:array<array{s3Uri:string}>}, outputDataConfig:array{s3Uri:string}, hyperParameters?:array<string, string>, vpcConfig?:array{subnetIds:array<string>, securityGroupIds:array<string>}, customizationConfig?:array{distillationConfig?:array{teacherModelConfig:array{teacherModelIdentifier:string, maxResponseLengthForInference?:int}}}} $args
     * @return \AWS\Result<array{jobArn:string}>
     */
    public function createModelCustomizationJob(array $args): \AWS\Result { }

    /**
     * @param array{jobName:string, customModelName:string, roleArn:string, clientRequestToken?:string, baseModelIdentifier:string, customizationType?:"FINE_TUNING"|"CONTINUED_PRE_TRAINING"|"DISTILLATION", customModelKmsKeyId?:string, jobTags?:array<array{key:string, value:string}>, customModelTags?:array<array{key:string, value:string}>, trainingDataConfig:array{s3Uri?:string, invocationLogsConfig?:array{usePromptResponse?:bool, invocationLogSource:array{s3Uri?:string}, requestMetadataFilters?:array{equals?:array<string, string>, notEquals?:array<string, string>, andAll?:array<array{equals?:array<string, string>, notEquals?:array<string, string>}>, orAll?:array<array{equals?:array<string, string>, notEquals?:array<string, string>}>}}}, validationDataConfig?:array{validators:array<array{s3Uri:string}>}, outputDataConfig:array{s3Uri:string}, hyperParameters?:array<string, string>, vpcConfig?:array{subnetIds:array<string>, securityGroupIds:array<string>}, customizationConfig?:array{distillationConfig?:array{teacherModelConfig:array{teacherModelIdentifier:string, maxResponseLengthForInference?:int}}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobArn:string}>
     */
    public function createModelCustomizationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobName:string, importedModelName:string, roleArn:string, modelDataSource:array{s3DataSource?:array{s3Uri:string}}, jobTags?:array<array{key:string, value:string}>, importedModelTags?:array<array{key:string, value:string}>, clientRequestToken?:string, vpcConfig?:array{subnetIds:array<string>, securityGroupIds:array<string>}, importedModelKmsKeyId?:string} $args
     * @return \AWS\Result<array{jobArn:string}>
     */
    public function createModelImportJob(array $args): \AWS\Result { }

    /**
     * @param array{jobName:string, importedModelName:string, roleArn:string, modelDataSource:array{s3DataSource?:array{s3Uri:string}}, jobTags?:array<array{key:string, value:string}>, importedModelTags?:array<array{key:string, value:string}>, clientRequestToken?:string, vpcConfig?:array{subnetIds:array<string>, securityGroupIds:array<string>}, importedModelKmsKeyId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobArn:string}>
     */
    public function createModelImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobName:string, roleArn:string, clientRequestToken?:string, modelId:string, inputDataConfig:array{s3InputDataConfig?:array{s3InputFormat?:"JSONL", s3Uri:string, s3BucketOwner?:string}}, outputDataConfig:array{s3OutputDataConfig?:array{s3Uri:string, s3EncryptionKeyId?:string, s3BucketOwner?:string}}, vpcConfig?:array{subnetIds:array<string>, securityGroupIds:array<string>}, timeoutDurationInHours?:int, tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{jobArn:string}>
     */
    public function createModelInvocationJob(array $args): \AWS\Result { }

    /**
     * @param array{jobName:string, roleArn:string, clientRequestToken?:string, modelId:string, inputDataConfig:array{s3InputDataConfig?:array{s3InputFormat?:"JSONL", s3Uri:string, s3BucketOwner?:string}}, outputDataConfig:array{s3OutputDataConfig?:array{s3Uri:string, s3EncryptionKeyId?:string, s3BucketOwner?:string}}, vpcConfig?:array{subnetIds:array<string>, securityGroupIds:array<string>}, timeoutDurationInHours?:int, tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobArn:string}>
     */
    public function createModelInvocationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientRequestToken?:string, modelUnits:int, provisionedModelName:string, modelId:string, commitmentDuration?:"OneMonth"|"SixMonths", tags?:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{provisionedModelArn:string}>
     */
    public function createProvisionedModelThroughput(array $args): \AWS\Result { }

    /**
     * @param array{clientRequestToken?:string, modelUnits:int, provisionedModelName:string, modelId:string, commitmentDuration?:"OneMonth"|"SixMonths", tags?:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{provisionedModelArn:string}>
     */
    public function createProvisionedModelThroughputAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{modelIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteCustomModel(array $args): \AWS\Result { }

    /**
     * @param array{modelIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteCustomModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{guardrailIdentifier:string, guardrailVersion?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteGuardrail(array $args): \AWS\Result { }

    /**
     * @param array{guardrailIdentifier:string, guardrailVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteGuardrailAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{modelIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteImportedModel(array $args): \AWS\Result { }

    /**
     * @param array{modelIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteImportedModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{inferenceProfileIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteInferenceProfile(array $args): \AWS\Result { }

    /**
     * @param array{inferenceProfileIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteInferenceProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{endpointArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteMarketplaceModelEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{endpointArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteMarketplaceModelEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteModelInvocationLoggingConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteModelInvocationLoggingConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{provisionedModelId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteProvisionedModelThroughput(array $args): \AWS\Result { }

    /**
     * @param array{provisionedModelId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteProvisionedModelThroughputAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{endpointArn:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deregisterMarketplaceModelEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{endpointArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deregisterMarketplaceModelEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{modelIdentifier:string} $args
     * @return \AWS\Result<array{modelArn:string, modelName:string, jobName?:string, jobArn:string, baseModelArn:string, customizationType?:"FINE_TUNING"|"CONTINUED_PRE_TRAINING"|"DISTILLATION", modelKmsKeyArn?:string, hyperParameters?:array<string, string>, trainingDataConfig:array{s3Uri?:string, invocationLogsConfig?:array{usePromptResponse?:bool, invocationLogSource:array{s3Uri?:string}, requestMetadataFilters?:array{equals?:array<string, string>, notEquals?:array<string, string>, andAll?:array<array{equals?:array<string, string>, notEquals?:array<string, string>}>, orAll?:array<array{equals?:array<string, string>, notEquals?:array<string, string>}>}}}, validationDataConfig?:array{validators:array<array{s3Uri:string}>}, outputDataConfig:array{s3Uri:string}, trainingMetrics?:array{trainingLoss?:float}, validationMetrics?:array<array{validationLoss?:float}>, creationTime:int|string|\DateTimeInterface, customizationConfig?:array{distillationConfig?:array{teacherModelConfig:array{teacherModelIdentifier:string, maxResponseLengthForInference?:int}}}}>
     */
    public function getCustomModel(array $args): \AWS\Result { }

    /**
     * @param array{modelIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{modelArn:string, modelName:string, jobName?:string, jobArn:string, baseModelArn:string, customizationType?:"FINE_TUNING"|"CONTINUED_PRE_TRAINING"|"DISTILLATION", modelKmsKeyArn?:string, hyperParameters?:array<string, string>, trainingDataConfig:array{s3Uri?:string, invocationLogsConfig?:array{usePromptResponse?:bool, invocationLogSource:array{s3Uri?:string}, requestMetadataFilters?:array{equals?:array<string, string>, notEquals?:array<string, string>, andAll?:array<array{equals?:array<string, string>, notEquals?:array<string, string>}>, orAll?:array<array{equals?:array<string, string>, notEquals?:array<string, string>}>}}}, validationDataConfig?:array{validators:array<array{s3Uri:string}>}, outputDataConfig:array{s3Uri:string}, trainingMetrics?:array{trainingLoss?:float}, validationMetrics?:array<array{validationLoss?:float}>, creationTime:int|string|\DateTimeInterface, customizationConfig?:array{distillationConfig?:array{teacherModelConfig:array{teacherModelIdentifier:string, maxResponseLengthForInference?:int}}}}>
     */
    public function getCustomModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobIdentifier:string} $args
     * @return \AWS\Result<array{jobName:string, status:"InProgress"|"Completed"|"Failed"|"Stopping"|"Stopped"|"Deleting", jobArn:string, jobDescription?:string, roleArn:string, customerEncryptionKeyId?:string, jobType:"Human"|"Automated", applicationType?:"ModelEvaluation"|"RagEvaluation", evaluationConfig:array{automated?:array{datasetMetricConfigs:array<array{taskType:"Summarization"|"Classification"|"QuestionAndAnswer"|"Generation"|"Custom", dataset:array{name:string, datasetLocation?:array{s3Uri?:string}}, metricNames:array<string>}>, evaluatorModelConfig?:array{bedrockEvaluatorModels?:array<array{modelIdentifier:string}>}}, human?:array{humanWorkflowConfig?:array{flowDefinitionArn:string, instructions?:string}, customMetrics?:array<array{name:string, description?:string, ratingMethod:string}>, datasetMetricConfigs:array<array{taskType:"Summarization"|"Classification"|"QuestionAndAnswer"|"Generation"|"Custom", dataset:array{name:string, datasetLocation?:array{s3Uri?:string}}, metricNames:array<string>}>}}, inferenceConfig:array{models?:array<array{bedrockModel?:array{modelIdentifier:string, inferenceParams?:string, performanceConfig?:array{latency?:"standard"|"optimized"}}}>, ragConfigs?:array<array{knowledgeBaseConfig?:array{retrieveConfig?:array{knowledgeBaseId:string, knowledgeBaseRetrievalConfiguration:array{vectorSearchConfiguration:array{numberOfResults?:int, overrideSearchType?:"HYBRID"|"SEMANTIC", filter?:array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:array<array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:mixed, orAll?:array<array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:mixed, orAll?:mixed}>}>, orAll?:array<array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:array<array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:mixed, orAll?:mixed}>, orAll?:mixed}>}}}}, retrieveAndGenerateConfig?:array{type:"KNOWLEDGE_BASE"|"EXTERNAL_SOURCES", knowledgeBaseConfiguration?:array{knowledgeBaseId:string, modelArn:string, retrievalConfiguration?:array{vectorSearchConfiguration:array{numberOfResults?:int, overrideSearchType?:"HYBRID"|"SEMANTIC", filter?:array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:array<array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:mixed, orAll?:array<array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:mixed, orAll?:mixed}>}>, orAll?:array<array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:array<array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:mixed, orAll?:mixed}>, orAll?:mixed}>}}}, generationConfiguration?:array{promptTemplate?:array{textPromptTemplate?:string}, guardrailConfiguration?:array{guardrailId:string, guardrailVersion:string}, kbInferenceConfig?:array{textInferenceConfig?:array{temperature?:float, topP?:float, maxTokens?:int, stopSequences?:array<string>}}, additionalModelRequestFields?:array<string, array{}>}, orchestrationConfiguration?:array{queryTransformationConfiguration:array{type:"QUERY_DECOMPOSITION"}}}, externalSourcesConfiguration?:array{modelArn:string, sources:array<array{sourceType:"S3"|"BYTE_CONTENT", s3Location?:array{uri:string}, byteContent?:array{identifier:string, contentType:string, data:string|resource|\Psr\Http\Message\StreamInterface}}>, generationConfiguration?:array{promptTemplate?:array{textPromptTemplate?:string}, guardrailConfiguration?:array{guardrailId:string, guardrailVersion:string}, kbInferenceConfig?:array{textInferenceConfig?:array{temperature?:float, topP?:float, maxTokens?:int, stopSequences?:array<string>}}, additionalModelRequestFields?:array<string, array{}>}}}}}>}, outputDataConfig:array{s3Uri:string}, creationTime:int|string|\DateTimeInterface, lastModifiedTime?:int|string|\DateTimeInterface, failureMessages?:array<string>}>
     */
    public function getEvaluationJob(array $args): \AWS\Result { }

    /**
     * @param array{jobIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobName:string, status:"InProgress"|"Completed"|"Failed"|"Stopping"|"Stopped"|"Deleting", jobArn:string, jobDescription?:string, roleArn:string, customerEncryptionKeyId?:string, jobType:"Human"|"Automated", applicationType?:"ModelEvaluation"|"RagEvaluation", evaluationConfig:array{automated?:array{datasetMetricConfigs:array<array{taskType:"Summarization"|"Classification"|"QuestionAndAnswer"|"Generation"|"Custom", dataset:array{name:string, datasetLocation?:array{s3Uri?:string}}, metricNames:array<string>}>, evaluatorModelConfig?:array{bedrockEvaluatorModels?:array<array{modelIdentifier:string}>}}, human?:array{humanWorkflowConfig?:array{flowDefinitionArn:string, instructions?:string}, customMetrics?:array<array{name:string, description?:string, ratingMethod:string}>, datasetMetricConfigs:array<array{taskType:"Summarization"|"Classification"|"QuestionAndAnswer"|"Generation"|"Custom", dataset:array{name:string, datasetLocation?:array{s3Uri?:string}}, metricNames:array<string>}>}}, inferenceConfig:array{models?:array<array{bedrockModel?:array{modelIdentifier:string, inferenceParams?:string, performanceConfig?:array{latency?:"standard"|"optimized"}}}>, ragConfigs?:array<array{knowledgeBaseConfig?:array{retrieveConfig?:array{knowledgeBaseId:string, knowledgeBaseRetrievalConfiguration:array{vectorSearchConfiguration:array{numberOfResults?:int, overrideSearchType?:"HYBRID"|"SEMANTIC", filter?:array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:array<array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:mixed, orAll?:array<array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:mixed, orAll?:mixed}>}>, orAll?:array<array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:array<array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:mixed, orAll?:mixed}>, orAll?:mixed}>}}}}, retrieveAndGenerateConfig?:array{type:"KNOWLEDGE_BASE"|"EXTERNAL_SOURCES", knowledgeBaseConfiguration?:array{knowledgeBaseId:string, modelArn:string, retrievalConfiguration?:array{vectorSearchConfiguration:array{numberOfResults?:int, overrideSearchType?:"HYBRID"|"SEMANTIC", filter?:array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:array<array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:mixed, orAll?:array<array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:mixed, orAll?:mixed}>}>, orAll?:array<array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:array<array{equals?:array{key:string, value:array{}}, notEquals?:array{key:string, value:array{}}, greaterThan?:array{key:string, value:array{}}, greaterThanOrEquals?:array{key:string, value:array{}}, lessThan?:array{key:string, value:array{}}, lessThanOrEquals?:array{key:string, value:array{}}, in?:array{key:string, value:array{}}, notIn?:array{key:string, value:array{}}, startsWith?:array{key:string, value:array{}}, listContains?:array{key:string, value:array{}}, stringContains?:array{key:string, value:array{}}, andAll?:mixed, orAll?:mixed}>, orAll?:mixed}>}}}, generationConfiguration?:array{promptTemplate?:array{textPromptTemplate?:string}, guardrailConfiguration?:array{guardrailId:string, guardrailVersion:string}, kbInferenceConfig?:array{textInferenceConfig?:array{temperature?:float, topP?:float, maxTokens?:int, stopSequences?:array<string>}}, additionalModelRequestFields?:array<string, array{}>}, orchestrationConfiguration?:array{queryTransformationConfiguration:array{type:"QUERY_DECOMPOSITION"}}}, externalSourcesConfiguration?:array{modelArn:string, sources:array<array{sourceType:"S3"|"BYTE_CONTENT", s3Location?:array{uri:string}, byteContent?:array{identifier:string, contentType:string, data:string|resource|\Psr\Http\Message\StreamInterface}}>, generationConfiguration?:array{promptTemplate?:array{textPromptTemplate?:string}, guardrailConfiguration?:array{guardrailId:string, guardrailVersion:string}, kbInferenceConfig?:array{textInferenceConfig?:array{temperature?:float, topP?:float, maxTokens?:int, stopSequences?:array<string>}}, additionalModelRequestFields?:array<string, array{}>}}}}}>}, outputDataConfig:array{s3Uri:string}, creationTime:int|string|\DateTimeInterface, lastModifiedTime?:int|string|\DateTimeInterface, failureMessages?:array<string>}>
     */
    public function getEvaluationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{modelIdentifier:string} $args
     * @return \AWS\Result<array{modelDetails?:array{modelArn:string, modelId:string, modelName?:string, providerName?:string, inputModalities?:array<"TEXT"|"IMAGE"|"EMBEDDING">, outputModalities?:array<"TEXT"|"IMAGE"|"EMBEDDING">, responseStreamingSupported?:bool, customizationsSupported?:array<"FINE_TUNING"|"CONTINUED_PRE_TRAINING"|"DISTILLATION">, inferenceTypesSupported?:array<"ON_DEMAND"|"PROVISIONED">, modelLifecycle?:array{status:"ACTIVE"|"LEGACY"}}}>
     */
    public function getFoundationModel(array $args): \AWS\Result { }

    /**
     * @param array{modelIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{modelDetails?:array{modelArn:string, modelId:string, modelName?:string, providerName?:string, inputModalities?:array<"TEXT"|"IMAGE"|"EMBEDDING">, outputModalities?:array<"TEXT"|"IMAGE"|"EMBEDDING">, responseStreamingSupported?:bool, customizationsSupported?:array<"FINE_TUNING"|"CONTINUED_PRE_TRAINING"|"DISTILLATION">, inferenceTypesSupported?:array<"ON_DEMAND"|"PROVISIONED">, modelLifecycle?:array{status:"ACTIVE"|"LEGACY"}}}>
     */
    public function getFoundationModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{guardrailIdentifier:string, guardrailVersion?:string} $args
     * @return \AWS\Result<array{name:string, description?:string, guardrailId:string, guardrailArn:string, version:string, status:"CREATING"|"UPDATING"|"VERSIONING"|"READY"|"FAILED"|"DELETING", topicPolicy?:array{topics:array<array{name:string, definition:string, examples?:array<string>, type?:"DENY"}>}, contentPolicy?:array{filters?:array<array{type:"SEXUAL"|"VIOLENCE"|"HATE"|"INSULTS"|"MISCONDUCT"|"PROMPT_ATTACK", inputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", outputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", inputModalities?:array<"TEXT"|"IMAGE">, outputModalities?:array<"TEXT"|"IMAGE">}>}, wordPolicy?:array{words?:array<array{text:string}>, managedWordLists?:array<array{type:"PROFANITY"}>}, sensitiveInformationPolicy?:array{piiEntities?:array<array{type:"ADDRESS"|"AGE"|"AWS_ACCESS_KEY"|"AWS_SECRET_KEY"|"CA_HEALTH_NUMBER"|"CA_SOCIAL_INSURANCE_NUMBER"|"CREDIT_DEBIT_CARD_CVV"|"CREDIT_DEBIT_CARD_EXPIRY"|"CREDIT_DEBIT_CARD_NUMBER"|"DRIVER_ID"|"EMAIL"|"INTERNATIONAL_BANK_ACCOUNT_NUMBER"|"IP_ADDRESS"|"LICENSE_PLATE"|"MAC_ADDRESS"|"NAME"|"PASSWORD"|"PHONE"|"PIN"|"SWIFT_CODE"|"UK_NATIONAL_HEALTH_SERVICE_NUMBER"|"UK_NATIONAL_INSURANCE_NUMBER"|"UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER"|"URL"|"USERNAME"|"US_BANK_ACCOUNT_NUMBER"|"US_BANK_ROUTING_NUMBER"|"US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER"|"US_PASSPORT_NUMBER"|"US_SOCIAL_SECURITY_NUMBER"|"VEHICLE_IDENTIFICATION_NUMBER", action:"BLOCK"|"ANONYMIZE"}>, regexes?:array<array{name:string, description?:string, pattern:string, action:"BLOCK"|"ANONYMIZE"}>}, contextualGroundingPolicy?:array{filters:array<array{type:"GROUNDING"|"RELEVANCE", threshold:float}>}, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, statusReasons?:array<string>, failureRecommendations?:array<string>, blockedInputMessaging:string, blockedOutputsMessaging:string, kmsKeyArn?:string}>
     */
    public function getGuardrail(array $args): \AWS\Result { }

    /**
     * @param array{guardrailIdentifier:string, guardrailVersion?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{name:string, description?:string, guardrailId:string, guardrailArn:string, version:string, status:"CREATING"|"UPDATING"|"VERSIONING"|"READY"|"FAILED"|"DELETING", topicPolicy?:array{topics:array<array{name:string, definition:string, examples?:array<string>, type?:"DENY"}>}, contentPolicy?:array{filters?:array<array{type:"SEXUAL"|"VIOLENCE"|"HATE"|"INSULTS"|"MISCONDUCT"|"PROMPT_ATTACK", inputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", outputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", inputModalities?:array<"TEXT"|"IMAGE">, outputModalities?:array<"TEXT"|"IMAGE">}>}, wordPolicy?:array{words?:array<array{text:string}>, managedWordLists?:array<array{type:"PROFANITY"}>}, sensitiveInformationPolicy?:array{piiEntities?:array<array{type:"ADDRESS"|"AGE"|"AWS_ACCESS_KEY"|"AWS_SECRET_KEY"|"CA_HEALTH_NUMBER"|"CA_SOCIAL_INSURANCE_NUMBER"|"CREDIT_DEBIT_CARD_CVV"|"CREDIT_DEBIT_CARD_EXPIRY"|"CREDIT_DEBIT_CARD_NUMBER"|"DRIVER_ID"|"EMAIL"|"INTERNATIONAL_BANK_ACCOUNT_NUMBER"|"IP_ADDRESS"|"LICENSE_PLATE"|"MAC_ADDRESS"|"NAME"|"PASSWORD"|"PHONE"|"PIN"|"SWIFT_CODE"|"UK_NATIONAL_HEALTH_SERVICE_NUMBER"|"UK_NATIONAL_INSURANCE_NUMBER"|"UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER"|"URL"|"USERNAME"|"US_BANK_ACCOUNT_NUMBER"|"US_BANK_ROUTING_NUMBER"|"US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER"|"US_PASSPORT_NUMBER"|"US_SOCIAL_SECURITY_NUMBER"|"VEHICLE_IDENTIFICATION_NUMBER", action:"BLOCK"|"ANONYMIZE"}>, regexes?:array<array{name:string, description?:string, pattern:string, action:"BLOCK"|"ANONYMIZE"}>}, contextualGroundingPolicy?:array{filters:array<array{type:"GROUNDING"|"RELEVANCE", threshold:float}>}, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, statusReasons?:array<string>, failureRecommendations?:array<string>, blockedInputMessaging:string, blockedOutputsMessaging:string, kmsKeyArn?:string}>
     */
    public function getGuardrailAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{modelIdentifier:string} $args
     * @return \AWS\Result<array{modelArn?:string, modelName?:string, jobName?:string, jobArn?:string, modelDataSource?:array{s3DataSource?:array{s3Uri:string}}, creationTime?:int|string|\DateTimeInterface, modelArchitecture?:string, modelKmsKeyArn?:string, instructSupported?:bool}>
     */
    public function getImportedModel(array $args): \AWS\Result { }

    /**
     * @param array{modelIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{modelArn?:string, modelName?:string, jobName?:string, jobArn?:string, modelDataSource?:array{s3DataSource?:array{s3Uri:string}}, creationTime?:int|string|\DateTimeInterface, modelArchitecture?:string, modelKmsKeyArn?:string, instructSupported?:bool}>
     */
    public function getImportedModelAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{inferenceProfileIdentifier:string} $args
     * @return \AWS\Result<array{inferenceProfileName:string, description?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, inferenceProfileArn:string, models:array<array{modelArn?:string}>, inferenceProfileId:string, status:"ACTIVE", type:"SYSTEM_DEFINED"|"APPLICATION"}>
     */
    public function getInferenceProfile(array $args): \AWS\Result { }

    /**
     * @param array{inferenceProfileIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{inferenceProfileName:string, description?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, inferenceProfileArn:string, models:array<array{modelArn?:string}>, inferenceProfileId:string, status:"ACTIVE", type:"SYSTEM_DEFINED"|"APPLICATION"}>
     */
    public function getInferenceProfileAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{endpointArn:string} $args
     * @return \AWS\Result<array{marketplaceModelEndpoint?:array{endpointArn:string, modelSourceIdentifier:string, status?:"REGISTERED"|"INCOMPATIBLE_ENDPOINT", statusMessage?:string, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, endpointConfig:array{sageMaker?:array{initialInstanceCount:int, instanceType:string, executionRole:string, kmsEncryptionKey?:string, vpc?:array{subnetIds:array<string>, securityGroupIds:array<string>}}}, endpointStatus:string, endpointStatusMessage?:string}}>
     */
    public function getMarketplaceModelEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{endpointArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{marketplaceModelEndpoint?:array{endpointArn:string, modelSourceIdentifier:string, status?:"REGISTERED"|"INCOMPATIBLE_ENDPOINT", statusMessage?:string, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, endpointConfig:array{sageMaker?:array{initialInstanceCount:int, instanceType:string, executionRole:string, kmsEncryptionKey?:string, vpc?:array{subnetIds:array<string>, securityGroupIds:array<string>}}}, endpointStatus:string, endpointStatusMessage?:string}}>
     */
    public function getMarketplaceModelEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobArn:string} $args
     * @return \AWS\Result<array{jobArn:string, status:"InProgress"|"Completed"|"Failed", creationTime:int|string|\DateTimeInterface, targetModelArn:string, targetModelName?:string, sourceAccountId:string, sourceModelArn:string, targetModelKmsKeyArn?:string, targetModelTags?:array<array{key:string, value:string}>, failureMessage?:string, sourceModelName?:string}>
     */
    public function getModelCopyJob(array $args): \AWS\Result { }

    /**
     * @param array{jobArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobArn:string, status:"InProgress"|"Completed"|"Failed", creationTime:int|string|\DateTimeInterface, targetModelArn:string, targetModelName?:string, sourceAccountId:string, sourceModelArn:string, targetModelKmsKeyArn?:string, targetModelTags?:array<array{key:string, value:string}>, failureMessage?:string, sourceModelName?:string}>
     */
    public function getModelCopyJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobIdentifier:string} $args
     * @return \AWS\Result<array{jobArn:string, jobName:string, outputModelName:string, outputModelArn?:string, clientRequestToken?:string, roleArn:string, status?:"InProgress"|"Completed"|"Failed"|"Stopping"|"Stopped", failureMessage?:string, creationTime:int|string|\DateTimeInterface, lastModifiedTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, baseModelArn:string, hyperParameters?:array<string, string>, trainingDataConfig:array{s3Uri?:string, invocationLogsConfig?:array{usePromptResponse?:bool, invocationLogSource:array{s3Uri?:string}, requestMetadataFilters?:array{equals?:array<string, string>, notEquals?:array<string, string>, andAll?:array<array{equals?:array<string, string>, notEquals?:array<string, string>}>, orAll?:array<array{equals?:array<string, string>, notEquals?:array<string, string>}>}}}, validationDataConfig:array{validators:array<array{s3Uri:string}>}, outputDataConfig:array{s3Uri:string}, customizationType?:"FINE_TUNING"|"CONTINUED_PRE_TRAINING"|"DISTILLATION", outputModelKmsKeyArn?:string, trainingMetrics?:array{trainingLoss?:float}, validationMetrics?:array<array{validationLoss?:float}>, vpcConfig?:array{subnetIds:array<string>, securityGroupIds:array<string>}, customizationConfig?:array{distillationConfig?:array{teacherModelConfig:array{teacherModelIdentifier:string, maxResponseLengthForInference?:int}}}}>
     */
    public function getModelCustomizationJob(array $args): \AWS\Result { }

    /**
     * @param array{jobIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobArn:string, jobName:string, outputModelName:string, outputModelArn?:string, clientRequestToken?:string, roleArn:string, status?:"InProgress"|"Completed"|"Failed"|"Stopping"|"Stopped", failureMessage?:string, creationTime:int|string|\DateTimeInterface, lastModifiedTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, baseModelArn:string, hyperParameters?:array<string, string>, trainingDataConfig:array{s3Uri?:string, invocationLogsConfig?:array{usePromptResponse?:bool, invocationLogSource:array{s3Uri?:string}, requestMetadataFilters?:array{equals?:array<string, string>, notEquals?:array<string, string>, andAll?:array<array{equals?:array<string, string>, notEquals?:array<string, string>}>, orAll?:array<array{equals?:array<string, string>, notEquals?:array<string, string>}>}}}, validationDataConfig:array{validators:array<array{s3Uri:string}>}, outputDataConfig:array{s3Uri:string}, customizationType?:"FINE_TUNING"|"CONTINUED_PRE_TRAINING"|"DISTILLATION", outputModelKmsKeyArn?:string, trainingMetrics?:array{trainingLoss?:float}, validationMetrics?:array<array{validationLoss?:float}>, vpcConfig?:array{subnetIds:array<string>, securityGroupIds:array<string>}, customizationConfig?:array{distillationConfig?:array{teacherModelConfig:array{teacherModelIdentifier:string, maxResponseLengthForInference?:int}}}}>
     */
    public function getModelCustomizationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobIdentifier:string} $args
     * @return \AWS\Result<array{jobArn?:string, jobName?:string, importedModelName?:string, importedModelArn?:string, roleArn?:string, modelDataSource?:array{s3DataSource?:array{s3Uri:string}}, status?:"InProgress"|"Completed"|"Failed", failureMessage?:string, creationTime?:int|string|\DateTimeInterface, lastModifiedTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, vpcConfig?:array{subnetIds:array<string>, securityGroupIds:array<string>}, importedModelKmsKeyArn?:string}>
     */
    public function getModelImportJob(array $args): \AWS\Result { }

    /**
     * @param array{jobIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobArn?:string, jobName?:string, importedModelName?:string, importedModelArn?:string, roleArn?:string, modelDataSource?:array{s3DataSource?:array{s3Uri:string}}, status?:"InProgress"|"Completed"|"Failed", failureMessage?:string, creationTime?:int|string|\DateTimeInterface, lastModifiedTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, vpcConfig?:array{subnetIds:array<string>, securityGroupIds:array<string>}, importedModelKmsKeyArn?:string}>
     */
    public function getModelImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobIdentifier:string} $args
     * @return \AWS\Result<array{jobArn:string, jobName?:string, modelId:string, clientRequestToken?:string, roleArn:string, status?:"Submitted"|"InProgress"|"Completed"|"Failed"|"Stopping"|"Stopped"|"PartiallyCompleted"|"Expired"|"Validating"|"Scheduled", message?:string, submitTime:int|string|\DateTimeInterface, lastModifiedTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, inputDataConfig:array{s3InputDataConfig?:array{s3InputFormat?:"JSONL", s3Uri:string, s3BucketOwner?:string}}, outputDataConfig:array{s3OutputDataConfig?:array{s3Uri:string, s3EncryptionKeyId?:string, s3BucketOwner?:string}}, vpcConfig?:array{subnetIds:array<string>, securityGroupIds:array<string>}, timeoutDurationInHours?:int, jobExpirationTime?:int|string|\DateTimeInterface}>
     */
    public function getModelInvocationJob(array $args): \AWS\Result { }

    /**
     * @param array{jobIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobArn:string, jobName?:string, modelId:string, clientRequestToken?:string, roleArn:string, status?:"Submitted"|"InProgress"|"Completed"|"Failed"|"Stopping"|"Stopped"|"PartiallyCompleted"|"Expired"|"Validating"|"Scheduled", message?:string, submitTime:int|string|\DateTimeInterface, lastModifiedTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, inputDataConfig:array{s3InputDataConfig?:array{s3InputFormat?:"JSONL", s3Uri:string, s3BucketOwner?:string}}, outputDataConfig:array{s3OutputDataConfig?:array{s3Uri:string, s3EncryptionKeyId?:string, s3BucketOwner?:string}}, vpcConfig?:array{subnetIds:array<string>, securityGroupIds:array<string>}, timeoutDurationInHours?:int, jobExpirationTime?:int|string|\DateTimeInterface}>
     */
    public function getModelInvocationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{} $args
     * @return \AWS\Result<array{loggingConfig?:array{cloudWatchConfig?:array{logGroupName:string, roleArn:string, largeDataDeliveryS3Config?:array{bucketName:string, keyPrefix?:string}}, s3Config?:array{bucketName:string, keyPrefix?:string}, textDataDeliveryEnabled?:bool, imageDataDeliveryEnabled?:bool, embeddingDataDeliveryEnabled?:bool, videoDataDeliveryEnabled?:bool}}>
     */
    public function getModelInvocationLoggingConfiguration(array $args = []): \AWS\Result { }

    /**
     * @param array{} $args
     * @return \GuzzleHttp\Promise\Promise<array{loggingConfig?:array{cloudWatchConfig?:array{logGroupName:string, roleArn:string, largeDataDeliveryS3Config?:array{bucketName:string, keyPrefix?:string}}, s3Config?:array{bucketName:string, keyPrefix?:string}, textDataDeliveryEnabled?:bool, imageDataDeliveryEnabled?:bool, embeddingDataDeliveryEnabled?:bool, videoDataDeliveryEnabled?:bool}}>
     */
    public function getModelInvocationLoggingConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{promptRouterArn:string} $args
     * @return \AWS\Result<array{promptRouterName:string, routingCriteria:array{responseQualityDifference:float}, description?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, promptRouterArn:string, models:array<array{modelArn?:string}>, fallbackModel:array{modelArn?:string}, status:"AVAILABLE", type:"custom"|"default"}>
     */
    public function getPromptRouter(array $args): \AWS\Result { }

    /**
     * @param array{promptRouterArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{promptRouterName:string, routingCriteria:array{responseQualityDifference:float}, description?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, promptRouterArn:string, models:array<array{modelArn?:string}>, fallbackModel:array{modelArn?:string}, status:"AVAILABLE", type:"custom"|"default"}>
     */
    public function getPromptRouterAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{provisionedModelId:string} $args
     * @return \AWS\Result<array{modelUnits:int, desiredModelUnits:int, provisionedModelName:string, provisionedModelArn:string, modelArn:string, desiredModelArn:string, foundationModelArn:string, status:"Creating"|"InService"|"Updating"|"Failed", creationTime:int|string|\DateTimeInterface, lastModifiedTime:int|string|\DateTimeInterface, failureMessage?:string, commitmentDuration?:"OneMonth"|"SixMonths", commitmentExpirationTime?:int|string|\DateTimeInterface}>
     */
    public function getProvisionedModelThroughput(array $args): \AWS\Result { }

    /**
     * @param array{provisionedModelId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{modelUnits:int, desiredModelUnits:int, provisionedModelName:string, provisionedModelArn:string, modelArn:string, desiredModelArn:string, foundationModelArn:string, status:"Creating"|"InService"|"Updating"|"Failed", creationTime:int|string|\DateTimeInterface, lastModifiedTime:int|string|\DateTimeInterface, failureMessage?:string, commitmentDuration?:"OneMonth"|"SixMonths", commitmentExpirationTime?:int|string|\DateTimeInterface}>
     */
    public function getProvisionedModelThroughputAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{creationTimeBefore?:int|string|\DateTimeInterface, creationTimeAfter?:int|string|\DateTimeInterface, nameContains?:string, baseModelArnEquals?:string, foundationModelArnEquals?:string, maxResults?:int, nextToken?:string, sortBy?:"CreationTime", sortOrder?:"Ascending"|"Descending", isOwned?:bool} $args
     * @return \AWS\Result<array{nextToken?:string, modelSummaries?:array<array{modelArn:string, modelName:string, creationTime:int|string|\DateTimeInterface, baseModelArn:string, baseModelName:string, customizationType?:"FINE_TUNING"|"CONTINUED_PRE_TRAINING"|"DISTILLATION", ownerAccountId?:string}>}>
     */
    public function listCustomModels(array $args = []): \AWS\Result { }

    /**
     * @param array{creationTimeBefore?:int|string|\DateTimeInterface, creationTimeAfter?:int|string|\DateTimeInterface, nameContains?:string, baseModelArnEquals?:string, foundationModelArnEquals?:string, maxResults?:int, nextToken?:string, sortBy?:"CreationTime", sortOrder?:"Ascending"|"Descending", isOwned?:bool} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, modelSummaries?:array<array{modelArn:string, modelName:string, creationTime:int|string|\DateTimeInterface, baseModelArn:string, baseModelName:string, customizationType?:"FINE_TUNING"|"CONTINUED_PRE_TRAINING"|"DISTILLATION", ownerAccountId?:string}>}>
     */
    public function listCustomModelsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{creationTimeAfter?:int|string|\DateTimeInterface, creationTimeBefore?:int|string|\DateTimeInterface, statusEquals?:"InProgress"|"Completed"|"Failed"|"Stopping"|"Stopped"|"Deleting", applicationTypeEquals?:"ModelEvaluation"|"RagEvaluation", nameContains?:string, maxResults?:int, nextToken?:string, sortBy?:"CreationTime", sortOrder?:"Ascending"|"Descending"} $args
     * @return \AWS\Result<array{nextToken?:string, jobSummaries?:array<array{jobArn:string, jobName:string, status:"InProgress"|"Completed"|"Failed"|"Stopping"|"Stopped"|"Deleting", creationTime:int|string|\DateTimeInterface, jobType:"Human"|"Automated", evaluationTaskTypes:array<"Summarization"|"Classification"|"QuestionAndAnswer"|"Generation"|"Custom">, modelIdentifiers?:array<string>, ragIdentifiers?:array<string>, evaluatorModelIdentifiers?:array<string>, applicationType?:"ModelEvaluation"|"RagEvaluation"}>}>
     */
    public function listEvaluationJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{creationTimeAfter?:int|string|\DateTimeInterface, creationTimeBefore?:int|string|\DateTimeInterface, statusEquals?:"InProgress"|"Completed"|"Failed"|"Stopping"|"Stopped"|"Deleting", applicationTypeEquals?:"ModelEvaluation"|"RagEvaluation", nameContains?:string, maxResults?:int, nextToken?:string, sortBy?:"CreationTime", sortOrder?:"Ascending"|"Descending"} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, jobSummaries?:array<array{jobArn:string, jobName:string, status:"InProgress"|"Completed"|"Failed"|"Stopping"|"Stopped"|"Deleting", creationTime:int|string|\DateTimeInterface, jobType:"Human"|"Automated", evaluationTaskTypes:array<"Summarization"|"Classification"|"QuestionAndAnswer"|"Generation"|"Custom">, modelIdentifiers?:array<string>, ragIdentifiers?:array<string>, evaluatorModelIdentifiers?:array<string>, applicationType?:"ModelEvaluation"|"RagEvaluation"}>}>
     */
    public function listEvaluationJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{byProvider?:string, byCustomizationType?:"FINE_TUNING"|"CONTINUED_PRE_TRAINING"|"DISTILLATION", byOutputModality?:"TEXT"|"IMAGE"|"EMBEDDING", byInferenceType?:"ON_DEMAND"|"PROVISIONED"} $args
     * @return \AWS\Result<array{modelSummaries?:array<array{modelArn:string, modelId:string, modelName?:string, providerName?:string, inputModalities?:array<"TEXT"|"IMAGE"|"EMBEDDING">, outputModalities?:array<"TEXT"|"IMAGE"|"EMBEDDING">, responseStreamingSupported?:bool, customizationsSupported?:array<"FINE_TUNING"|"CONTINUED_PRE_TRAINING"|"DISTILLATION">, inferenceTypesSupported?:array<"ON_DEMAND"|"PROVISIONED">, modelLifecycle?:array{status:"ACTIVE"|"LEGACY"}}>}>
     */
    public function listFoundationModels(array $args = []): \AWS\Result { }

    /**
     * @param array{byProvider?:string, byCustomizationType?:"FINE_TUNING"|"CONTINUED_PRE_TRAINING"|"DISTILLATION", byOutputModality?:"TEXT"|"IMAGE"|"EMBEDDING", byInferenceType?:"ON_DEMAND"|"PROVISIONED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{modelSummaries?:array<array{modelArn:string, modelId:string, modelName?:string, providerName?:string, inputModalities?:array<"TEXT"|"IMAGE"|"EMBEDDING">, outputModalities?:array<"TEXT"|"IMAGE"|"EMBEDDING">, responseStreamingSupported?:bool, customizationsSupported?:array<"FINE_TUNING"|"CONTINUED_PRE_TRAINING"|"DISTILLATION">, inferenceTypesSupported?:array<"ON_DEMAND"|"PROVISIONED">, modelLifecycle?:array{status:"ACTIVE"|"LEGACY"}}>}>
     */
    public function listFoundationModelsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{guardrailIdentifier?:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{guardrails:array<array{id:string, arn:string, status:"CREATING"|"UPDATING"|"VERSIONING"|"READY"|"FAILED"|"DELETING", name:string, description?:string, version:string, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listGuardrails(array $args = []): \AWS\Result { }

    /**
     * @param array{guardrailIdentifier?:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{guardrails:array<array{id:string, arn:string, status:"CREATING"|"UPDATING"|"VERSIONING"|"READY"|"FAILED"|"DELETING", name:string, description?:string, version:string, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listGuardrailsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{creationTimeBefore?:int|string|\DateTimeInterface, creationTimeAfter?:int|string|\DateTimeInterface, nameContains?:string, maxResults?:int, nextToken?:string, sortBy?:"CreationTime", sortOrder?:"Ascending"|"Descending"} $args
     * @return \AWS\Result<array{nextToken?:string, modelSummaries?:array<array{modelArn:string, modelName:string, creationTime:int|string|\DateTimeInterface, instructSupported?:bool, modelArchitecture?:string}>}>
     */
    public function listImportedModels(array $args = []): \AWS\Result { }

    /**
     * @param array{creationTimeBefore?:int|string|\DateTimeInterface, creationTimeAfter?:int|string|\DateTimeInterface, nameContains?:string, maxResults?:int, nextToken?:string, sortBy?:"CreationTime", sortOrder?:"Ascending"|"Descending"} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, modelSummaries?:array<array{modelArn:string, modelName:string, creationTime:int|string|\DateTimeInterface, instructSupported?:bool, modelArchitecture?:string}>}>
     */
    public function listImportedModelsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, typeEquals?:"SYSTEM_DEFINED"|"APPLICATION"} $args
     * @return \AWS\Result<array{inferenceProfileSummaries?:array<array{inferenceProfileName:string, description?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, inferenceProfileArn:string, models:array<array{modelArn?:string}>, inferenceProfileId:string, status:"ACTIVE", type:"SYSTEM_DEFINED"|"APPLICATION"}>, nextToken?:string}>
     */
    public function listInferenceProfiles(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, typeEquals?:"SYSTEM_DEFINED"|"APPLICATION"} $args
     * @return \GuzzleHttp\Promise\Promise<array{inferenceProfileSummaries?:array<array{inferenceProfileName:string, description?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, inferenceProfileArn:string, models:array<array{modelArn?:string}>, inferenceProfileId:string, status:"ACTIVE", type:"SYSTEM_DEFINED"|"APPLICATION"}>, nextToken?:string}>
     */
    public function listInferenceProfilesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, modelSourceEquals?:string} $args
     * @return \AWS\Result<array{marketplaceModelEndpoints?:array<array{endpointArn:string, modelSourceIdentifier:string, status?:"REGISTERED"|"INCOMPATIBLE_ENDPOINT", statusMessage?:string, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listMarketplaceModelEndpoints(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, modelSourceEquals?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{marketplaceModelEndpoints?:array<array{endpointArn:string, modelSourceIdentifier:string, status?:"REGISTERED"|"INCOMPATIBLE_ENDPOINT", statusMessage?:string, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listMarketplaceModelEndpointsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{creationTimeAfter?:int|string|\DateTimeInterface, creationTimeBefore?:int|string|\DateTimeInterface, statusEquals?:"InProgress"|"Completed"|"Failed", sourceAccountEquals?:string, sourceModelArnEquals?:string, targetModelNameContains?:string, maxResults?:int, nextToken?:string, sortBy?:"CreationTime", sortOrder?:"Ascending"|"Descending"} $args
     * @return \AWS\Result<array{nextToken?:string, modelCopyJobSummaries?:array<array{jobArn:string, status:"InProgress"|"Completed"|"Failed", creationTime:int|string|\DateTimeInterface, targetModelArn:string, targetModelName?:string, sourceAccountId:string, sourceModelArn:string, targetModelKmsKeyArn?:string, targetModelTags?:array<array{key:string, value:string}>, failureMessage?:string, sourceModelName?:string}>}>
     */
    public function listModelCopyJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{creationTimeAfter?:int|string|\DateTimeInterface, creationTimeBefore?:int|string|\DateTimeInterface, statusEquals?:"InProgress"|"Completed"|"Failed", sourceAccountEquals?:string, sourceModelArnEquals?:string, targetModelNameContains?:string, maxResults?:int, nextToken?:string, sortBy?:"CreationTime", sortOrder?:"Ascending"|"Descending"} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, modelCopyJobSummaries?:array<array{jobArn:string, status:"InProgress"|"Completed"|"Failed", creationTime:int|string|\DateTimeInterface, targetModelArn:string, targetModelName?:string, sourceAccountId:string, sourceModelArn:string, targetModelKmsKeyArn?:string, targetModelTags?:array<array{key:string, value:string}>, failureMessage?:string, sourceModelName?:string}>}>
     */
    public function listModelCopyJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{creationTimeAfter?:int|string|\DateTimeInterface, creationTimeBefore?:int|string|\DateTimeInterface, statusEquals?:"InProgress"|"Completed"|"Failed"|"Stopping"|"Stopped", nameContains?:string, maxResults?:int, nextToken?:string, sortBy?:"CreationTime", sortOrder?:"Ascending"|"Descending"} $args
     * @return \AWS\Result<array{nextToken?:string, modelCustomizationJobSummaries?:array<array{jobArn:string, baseModelArn:string, jobName:string, status:"InProgress"|"Completed"|"Failed"|"Stopping"|"Stopped", lastModifiedTime?:int|string|\DateTimeInterface, creationTime:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, customModelArn?:string, customModelName?:string, customizationType?:"FINE_TUNING"|"CONTINUED_PRE_TRAINING"|"DISTILLATION"}>}>
     */
    public function listModelCustomizationJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{creationTimeAfter?:int|string|\DateTimeInterface, creationTimeBefore?:int|string|\DateTimeInterface, statusEquals?:"InProgress"|"Completed"|"Failed"|"Stopping"|"Stopped", nameContains?:string, maxResults?:int, nextToken?:string, sortBy?:"CreationTime", sortOrder?:"Ascending"|"Descending"} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, modelCustomizationJobSummaries?:array<array{jobArn:string, baseModelArn:string, jobName:string, status:"InProgress"|"Completed"|"Failed"|"Stopping"|"Stopped", lastModifiedTime?:int|string|\DateTimeInterface, creationTime:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, customModelArn?:string, customModelName?:string, customizationType?:"FINE_TUNING"|"CONTINUED_PRE_TRAINING"|"DISTILLATION"}>}>
     */
    public function listModelCustomizationJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{creationTimeAfter?:int|string|\DateTimeInterface, creationTimeBefore?:int|string|\DateTimeInterface, statusEquals?:"InProgress"|"Completed"|"Failed", nameContains?:string, maxResults?:int, nextToken?:string, sortBy?:"CreationTime", sortOrder?:"Ascending"|"Descending"} $args
     * @return \AWS\Result<array{nextToken?:string, modelImportJobSummaries?:array<array{jobArn:string, jobName:string, status:"InProgress"|"Completed"|"Failed", lastModifiedTime?:int|string|\DateTimeInterface, creationTime:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, importedModelArn?:string, importedModelName?:string}>}>
     */
    public function listModelImportJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{creationTimeAfter?:int|string|\DateTimeInterface, creationTimeBefore?:int|string|\DateTimeInterface, statusEquals?:"InProgress"|"Completed"|"Failed", nameContains?:string, maxResults?:int, nextToken?:string, sortBy?:"CreationTime", sortOrder?:"Ascending"|"Descending"} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, modelImportJobSummaries?:array<array{jobArn:string, jobName:string, status:"InProgress"|"Completed"|"Failed", lastModifiedTime?:int|string|\DateTimeInterface, creationTime:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, importedModelArn?:string, importedModelName?:string}>}>
     */
    public function listModelImportJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{submitTimeAfter?:int|string|\DateTimeInterface, submitTimeBefore?:int|string|\DateTimeInterface, statusEquals?:"Submitted"|"InProgress"|"Completed"|"Failed"|"Stopping"|"Stopped"|"PartiallyCompleted"|"Expired"|"Validating"|"Scheduled", nameContains?:string, maxResults?:int, nextToken?:string, sortBy?:"CreationTime", sortOrder?:"Ascending"|"Descending"} $args
     * @return \AWS\Result<array{nextToken?:string, invocationJobSummaries?:array<array{jobArn:string, jobName:string, modelId:string, clientRequestToken?:string, roleArn:string, status?:"Submitted"|"InProgress"|"Completed"|"Failed"|"Stopping"|"Stopped"|"PartiallyCompleted"|"Expired"|"Validating"|"Scheduled", message?:string, submitTime:int|string|\DateTimeInterface, lastModifiedTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, inputDataConfig:array{s3InputDataConfig?:array{s3InputFormat?:"JSONL", s3Uri:string, s3BucketOwner?:string}}, outputDataConfig:array{s3OutputDataConfig?:array{s3Uri:string, s3EncryptionKeyId?:string, s3BucketOwner?:string}}, vpcConfig?:array{subnetIds:array<string>, securityGroupIds:array<string>}, timeoutDurationInHours?:int, jobExpirationTime?:int|string|\DateTimeInterface}>}>
     */
    public function listModelInvocationJobs(array $args = []): \AWS\Result { }

    /**
     * @param array{submitTimeAfter?:int|string|\DateTimeInterface, submitTimeBefore?:int|string|\DateTimeInterface, statusEquals?:"Submitted"|"InProgress"|"Completed"|"Failed"|"Stopping"|"Stopped"|"PartiallyCompleted"|"Expired"|"Validating"|"Scheduled", nameContains?:string, maxResults?:int, nextToken?:string, sortBy?:"CreationTime", sortOrder?:"Ascending"|"Descending"} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, invocationJobSummaries?:array<array{jobArn:string, jobName:string, modelId:string, clientRequestToken?:string, roleArn:string, status?:"Submitted"|"InProgress"|"Completed"|"Failed"|"Stopping"|"Stopped"|"PartiallyCompleted"|"Expired"|"Validating"|"Scheduled", message?:string, submitTime:int|string|\DateTimeInterface, lastModifiedTime?:int|string|\DateTimeInterface, endTime?:int|string|\DateTimeInterface, inputDataConfig:array{s3InputDataConfig?:array{s3InputFormat?:"JSONL", s3Uri:string, s3BucketOwner?:string}}, outputDataConfig:array{s3OutputDataConfig?:array{s3Uri:string, s3EncryptionKeyId?:string, s3BucketOwner?:string}}, vpcConfig?:array{subnetIds:array<string>, securityGroupIds:array<string>}, timeoutDurationInHours?:int, jobExpirationTime?:int|string|\DateTimeInterface}>}>
     */
    public function listModelInvocationJobsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{promptRouterSummaries?:array<array{promptRouterName:string, routingCriteria:array{responseQualityDifference:float}, description?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, promptRouterArn:string, models:array<array{modelArn?:string}>, fallbackModel:array{modelArn?:string}, status:"AVAILABLE", type:"custom"|"default"}>, nextToken?:string}>
     */
    public function listPromptRouters(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{promptRouterSummaries?:array<array{promptRouterName:string, routingCriteria:array{responseQualityDifference:float}, description?:string, createdAt?:int|string|\DateTimeInterface, updatedAt?:int|string|\DateTimeInterface, promptRouterArn:string, models:array<array{modelArn?:string}>, fallbackModel:array{modelArn?:string}, status:"AVAILABLE", type:"custom"|"default"}>, nextToken?:string}>
     */
    public function listPromptRoutersAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{creationTimeAfter?:int|string|\DateTimeInterface, creationTimeBefore?:int|string|\DateTimeInterface, statusEquals?:"Creating"|"InService"|"Updating"|"Failed", modelArnEquals?:string, nameContains?:string, maxResults?:int, nextToken?:string, sortBy?:"CreationTime", sortOrder?:"Ascending"|"Descending"} $args
     * @return \AWS\Result<array{nextToken?:string, provisionedModelSummaries?:array<array{provisionedModelName:string, provisionedModelArn:string, modelArn:string, desiredModelArn:string, foundationModelArn:string, modelUnits:int, desiredModelUnits:int, status:"Creating"|"InService"|"Updating"|"Failed", commitmentDuration?:"OneMonth"|"SixMonths", commitmentExpirationTime?:int|string|\DateTimeInterface, creationTime:int|string|\DateTimeInterface, lastModifiedTime:int|string|\DateTimeInterface}>}>
     */
    public function listProvisionedModelThroughputs(array $args = []): \AWS\Result { }

    /**
     * @param array{creationTimeAfter?:int|string|\DateTimeInterface, creationTimeBefore?:int|string|\DateTimeInterface, statusEquals?:"Creating"|"InService"|"Updating"|"Failed", modelArnEquals?:string, nameContains?:string, maxResults?:int, nextToken?:string, sortBy?:"CreationTime", sortOrder?:"Ascending"|"Descending"} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, provisionedModelSummaries?:array<array{provisionedModelName:string, provisionedModelArn:string, modelArn:string, desiredModelArn:string, foundationModelArn:string, modelUnits:int, desiredModelUnits:int, status:"Creating"|"InService"|"Updating"|"Failed", commitmentDuration?:"OneMonth"|"SixMonths", commitmentExpirationTime?:int|string|\DateTimeInterface, creationTime:int|string|\DateTimeInterface, lastModifiedTime:int|string|\DateTimeInterface}>}>
     */
    public function listProvisionedModelThroughputsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceARN:string} $args
     * @return \AWS\Result<array{tags?:array<array{key:string, value:string}>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceARN:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags?:array<array{key:string, value:string}>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{loggingConfig:array{cloudWatchConfig?:array{logGroupName:string, roleArn:string, largeDataDeliveryS3Config?:array{bucketName:string, keyPrefix?:string}}, s3Config?:array{bucketName:string, keyPrefix?:string}, textDataDeliveryEnabled?:bool, imageDataDeliveryEnabled?:bool, embeddingDataDeliveryEnabled?:bool, videoDataDeliveryEnabled?:bool}} $args
     * @return \AWS\Result<array{}>
     */
    public function putModelInvocationLoggingConfiguration(array $args): \AWS\Result { }

    /**
     * @param array{loggingConfig:array{cloudWatchConfig?:array{logGroupName:string, roleArn:string, largeDataDeliveryS3Config?:array{bucketName:string, keyPrefix?:string}}, s3Config?:array{bucketName:string, keyPrefix?:string}, textDataDeliveryEnabled?:bool, imageDataDeliveryEnabled?:bool, embeddingDataDeliveryEnabled?:bool, videoDataDeliveryEnabled?:bool}} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function putModelInvocationLoggingConfigurationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{endpointIdentifier:string, modelSourceIdentifier:string} $args
     * @return \AWS\Result<array{marketplaceModelEndpoint:array{endpointArn:string, modelSourceIdentifier:string, status?:"REGISTERED"|"INCOMPATIBLE_ENDPOINT", statusMessage?:string, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, endpointConfig:array{sageMaker?:array{initialInstanceCount:int, instanceType:string, executionRole:string, kmsEncryptionKey?:string, vpc?:array{subnetIds:array<string>, securityGroupIds:array<string>}}}, endpointStatus:string, endpointStatusMessage?:string}}>
     */
    public function registerMarketplaceModelEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{endpointIdentifier:string, modelSourceIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{marketplaceModelEndpoint:array{endpointArn:string, modelSourceIdentifier:string, status?:"REGISTERED"|"INCOMPATIBLE_ENDPOINT", statusMessage?:string, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, endpointConfig:array{sageMaker?:array{initialInstanceCount:int, instanceType:string, executionRole:string, kmsEncryptionKey?:string, vpc?:array{subnetIds:array<string>, securityGroupIds:array<string>}}}, endpointStatus:string, endpointStatusMessage?:string}}>
     */
    public function registerMarketplaceModelEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopEvaluationJob(array $args): \AWS\Result { }

    /**
     * @param array{jobIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopEvaluationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopModelCustomizationJob(array $args): \AWS\Result { }

    /**
     * @param array{jobIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopModelCustomizationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobIdentifier:string} $args
     * @return \AWS\Result<array{}>
     */
    public function stopModelInvocationJob(array $args): \AWS\Result { }

    /**
     * @param array{jobIdentifier:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function stopModelInvocationJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceARN:string, tags:array<array{key:string, value:string}>} $args
     * @return \AWS\Result<array{}>
     */
    public function tagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceARN:string, tags:array<array{key:string, value:string}>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function tagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceARN:string, tagKeys:array<string>} $args
     * @return \AWS\Result<array{}>
     */
    public function untagResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceARN:string, tagKeys:array<string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function untagResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{guardrailIdentifier:string, name:string, description?:string, topicPolicyConfig?:array{topicsConfig:array<array{name:string, definition:string, examples?:array<string>, type:"DENY"}>}, contentPolicyConfig?:array{filtersConfig:array<array{type:"SEXUAL"|"VIOLENCE"|"HATE"|"INSULTS"|"MISCONDUCT"|"PROMPT_ATTACK", inputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", outputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", inputModalities?:array<"TEXT"|"IMAGE">, outputModalities?:array<"TEXT"|"IMAGE">}>}, wordPolicyConfig?:array{wordsConfig?:array<array{text:string}>, managedWordListsConfig?:array<array{type:"PROFANITY"}>}, sensitiveInformationPolicyConfig?:array{piiEntitiesConfig?:array<array{type:"ADDRESS"|"AGE"|"AWS_ACCESS_KEY"|"AWS_SECRET_KEY"|"CA_HEALTH_NUMBER"|"CA_SOCIAL_INSURANCE_NUMBER"|"CREDIT_DEBIT_CARD_CVV"|"CREDIT_DEBIT_CARD_EXPIRY"|"CREDIT_DEBIT_CARD_NUMBER"|"DRIVER_ID"|"EMAIL"|"INTERNATIONAL_BANK_ACCOUNT_NUMBER"|"IP_ADDRESS"|"LICENSE_PLATE"|"MAC_ADDRESS"|"NAME"|"PASSWORD"|"PHONE"|"PIN"|"SWIFT_CODE"|"UK_NATIONAL_HEALTH_SERVICE_NUMBER"|"UK_NATIONAL_INSURANCE_NUMBER"|"UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER"|"URL"|"USERNAME"|"US_BANK_ACCOUNT_NUMBER"|"US_BANK_ROUTING_NUMBER"|"US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER"|"US_PASSPORT_NUMBER"|"US_SOCIAL_SECURITY_NUMBER"|"VEHICLE_IDENTIFICATION_NUMBER", action:"BLOCK"|"ANONYMIZE"}>, regexesConfig?:array<array{name:string, description?:string, pattern:string, action:"BLOCK"|"ANONYMIZE"}>}, contextualGroundingPolicyConfig?:array{filtersConfig:array<array{type:"GROUNDING"|"RELEVANCE", threshold:float}>}, blockedInputMessaging:string, blockedOutputsMessaging:string, kmsKeyId?:string} $args
     * @return \AWS\Result<array{guardrailId:string, guardrailArn:string, version:string, updatedAt:int|string|\DateTimeInterface}>
     */
    public function updateGuardrail(array $args): \AWS\Result { }

    /**
     * @param array{guardrailIdentifier:string, name:string, description?:string, topicPolicyConfig?:array{topicsConfig:array<array{name:string, definition:string, examples?:array<string>, type:"DENY"}>}, contentPolicyConfig?:array{filtersConfig:array<array{type:"SEXUAL"|"VIOLENCE"|"HATE"|"INSULTS"|"MISCONDUCT"|"PROMPT_ATTACK", inputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", outputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", inputModalities?:array<"TEXT"|"IMAGE">, outputModalities?:array<"TEXT"|"IMAGE">}>}, wordPolicyConfig?:array{wordsConfig?:array<array{text:string}>, managedWordListsConfig?:array<array{type:"PROFANITY"}>}, sensitiveInformationPolicyConfig?:array{piiEntitiesConfig?:array<array{type:"ADDRESS"|"AGE"|"AWS_ACCESS_KEY"|"AWS_SECRET_KEY"|"CA_HEALTH_NUMBER"|"CA_SOCIAL_INSURANCE_NUMBER"|"CREDIT_DEBIT_CARD_CVV"|"CREDIT_DEBIT_CARD_EXPIRY"|"CREDIT_DEBIT_CARD_NUMBER"|"DRIVER_ID"|"EMAIL"|"INTERNATIONAL_BANK_ACCOUNT_NUMBER"|"IP_ADDRESS"|"LICENSE_PLATE"|"MAC_ADDRESS"|"NAME"|"PASSWORD"|"PHONE"|"PIN"|"SWIFT_CODE"|"UK_NATIONAL_HEALTH_SERVICE_NUMBER"|"UK_NATIONAL_INSURANCE_NUMBER"|"UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER"|"URL"|"USERNAME"|"US_BANK_ACCOUNT_NUMBER"|"US_BANK_ROUTING_NUMBER"|"US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER"|"US_PASSPORT_NUMBER"|"US_SOCIAL_SECURITY_NUMBER"|"VEHICLE_IDENTIFICATION_NUMBER", action:"BLOCK"|"ANONYMIZE"}>, regexesConfig?:array<array{name:string, description?:string, pattern:string, action:"BLOCK"|"ANONYMIZE"}>}, contextualGroundingPolicyConfig?:array{filtersConfig:array<array{type:"GROUNDING"|"RELEVANCE", threshold:float}>}, blockedInputMessaging:string, blockedOutputsMessaging:string, kmsKeyId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{guardrailId:string, guardrailArn:string, version:string, updatedAt:int|string|\DateTimeInterface}>
     */
    public function updateGuardrailAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{endpointArn:string, endpointConfig:array{sageMaker?:array{initialInstanceCount:int, instanceType:string, executionRole:string, kmsEncryptionKey?:string, vpc?:array{subnetIds:array<string>, securityGroupIds:array<string>}}}, clientRequestToken?:string} $args
     * @return \AWS\Result<array{marketplaceModelEndpoint:array{endpointArn:string, modelSourceIdentifier:string, status?:"REGISTERED"|"INCOMPATIBLE_ENDPOINT", statusMessage?:string, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, endpointConfig:array{sageMaker?:array{initialInstanceCount:int, instanceType:string, executionRole:string, kmsEncryptionKey?:string, vpc?:array{subnetIds:array<string>, securityGroupIds:array<string>}}}, endpointStatus:string, endpointStatusMessage?:string}}>
     */
    public function updateMarketplaceModelEndpoint(array $args): \AWS\Result { }

    /**
     * @param array{endpointArn:string, endpointConfig:array{sageMaker?:array{initialInstanceCount:int, instanceType:string, executionRole:string, kmsEncryptionKey?:string, vpc?:array{subnetIds:array<string>, securityGroupIds:array<string>}}}, clientRequestToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{marketplaceModelEndpoint:array{endpointArn:string, modelSourceIdentifier:string, status?:"REGISTERED"|"INCOMPATIBLE_ENDPOINT", statusMessage?:string, createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, endpointConfig:array{sageMaker?:array{initialInstanceCount:int, instanceType:string, executionRole:string, kmsEncryptionKey?:string, vpc?:array{subnetIds:array<string>, securityGroupIds:array<string>}}}, endpointStatus:string, endpointStatusMessage?:string}}>
     */
    public function updateMarketplaceModelEndpointAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{provisionedModelId:string, desiredProvisionedModelName?:string, desiredModelId?:string} $args
     * @return \AWS\Result<array{}>
     */
    public function updateProvisionedModelThroughput(array $args): \AWS\Result { }

    /**
     * @param array{provisionedModelId:string, desiredProvisionedModelName?:string, desiredModelId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function updateProvisionedModelThroughputAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
