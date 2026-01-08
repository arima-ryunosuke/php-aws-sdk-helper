<?php
namespace AWS\QConnect;

class QConnectClient
{
    /**
     * @param array{knowledgeBaseId:string, messageTemplateId:string, versionNumber:int} $args
     * @return \AWS\Result<array{messageTemplateArn:string, messageTemplateId:string, versionNumber:int}>
     */
    public function activateMessageTemplate(array $args): \AWS\Result { }

    /**
     * @param array{knowledgeBaseId:string, messageTemplateId:string, versionNumber:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{messageTemplateArn:string, messageTemplateId:string, versionNumber:int}>
     */
    public function activateMessageTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assistantId:string, clientToken?:string, configuration:array{answerRecommendationAIAgentConfiguration?:array{answerGenerationAIGuardrailId?:string, answerGenerationAIPromptId?:string, associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, intentLabelingGenerationAIPromptId?:string, locale?:string, queryReformulationAIPromptId?:string}, manualSearchAIAgentConfiguration?:array{answerGenerationAIGuardrailId?:string, answerGenerationAIPromptId?:string, associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, locale?:string}, selfServiceAIAgentConfiguration?:array{associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, selfServiceAIGuardrailId?:string, selfServiceAnswerGenerationAIPromptId?:string, selfServicePreProcessingAIPromptId?:string}}, description?:string, name:string, tags?:array<string, string>, type:"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", visibilityStatus:"SAVED"|"PUBLISHED"} $args
     * @return \AWS\Result<array{aiAgent?:array{aiAgentArn:string, aiAgentId:string, assistantArn:string, assistantId:string, configuration:array{answerRecommendationAIAgentConfiguration?:array{answerGenerationAIGuardrailId?:string, answerGenerationAIPromptId?:string, associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, intentLabelingGenerationAIPromptId?:string, locale?:string, queryReformulationAIPromptId?:string}, manualSearchAIAgentConfiguration?:array{answerGenerationAIGuardrailId?:string, answerGenerationAIPromptId?:string, associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, locale?:string}, selfServiceAIAgentConfiguration?:array{associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, selfServiceAIGuardrailId?:string, selfServiceAnswerGenerationAIPromptId?:string, selfServicePreProcessingAIPromptId?:string}}, description?:string, modifiedTime?:int|string|\DateTimeInterface, name:string, origin?:"SYSTEM"|"CUSTOMER", status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, type:"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", visibilityStatus:"SAVED"|"PUBLISHED"}}>
     */
    public function createAIAgent(array $args): \AWS\Result { }

    /**
     * @param array{assistantId:string, clientToken?:string, configuration:array{answerRecommendationAIAgentConfiguration?:array{answerGenerationAIGuardrailId?:string, answerGenerationAIPromptId?:string, associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, intentLabelingGenerationAIPromptId?:string, locale?:string, queryReformulationAIPromptId?:string}, manualSearchAIAgentConfiguration?:array{answerGenerationAIGuardrailId?:string, answerGenerationAIPromptId?:string, associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, locale?:string}, selfServiceAIAgentConfiguration?:array{associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, selfServiceAIGuardrailId?:string, selfServiceAnswerGenerationAIPromptId?:string, selfServicePreProcessingAIPromptId?:string}}, description?:string, name:string, tags?:array<string, string>, type:"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", visibilityStatus:"SAVED"|"PUBLISHED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{aiAgent?:array{aiAgentArn:string, aiAgentId:string, assistantArn:string, assistantId:string, configuration:array{answerRecommendationAIAgentConfiguration?:array{answerGenerationAIGuardrailId?:string, answerGenerationAIPromptId?:string, associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, intentLabelingGenerationAIPromptId?:string, locale?:string, queryReformulationAIPromptId?:string}, manualSearchAIAgentConfiguration?:array{answerGenerationAIGuardrailId?:string, answerGenerationAIPromptId?:string, associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, locale?:string}, selfServiceAIAgentConfiguration?:array{associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, selfServiceAIGuardrailId?:string, selfServiceAnswerGenerationAIPromptId?:string, selfServicePreProcessingAIPromptId?:string}}, description?:string, modifiedTime?:int|string|\DateTimeInterface, name:string, origin?:"SYSTEM"|"CUSTOMER", status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, type:"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", visibilityStatus:"SAVED"|"PUBLISHED"}}>
     */
    public function createAIAgentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{aiAgentId:string, assistantId:string, clientToken?:string, modifiedTime?:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{aiAgent?:array{aiAgentArn:string, aiAgentId:string, assistantArn:string, assistantId:string, configuration:array{answerRecommendationAIAgentConfiguration?:array{answerGenerationAIGuardrailId?:string, answerGenerationAIPromptId?:string, associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, intentLabelingGenerationAIPromptId?:string, locale?:string, queryReformulationAIPromptId?:string}, manualSearchAIAgentConfiguration?:array{answerGenerationAIGuardrailId?:string, answerGenerationAIPromptId?:string, associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, locale?:string}, selfServiceAIAgentConfiguration?:array{associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, selfServiceAIGuardrailId?:string, selfServiceAnswerGenerationAIPromptId?:string, selfServicePreProcessingAIPromptId?:string}}, description?:string, modifiedTime?:int|string|\DateTimeInterface, name:string, origin?:"SYSTEM"|"CUSTOMER", status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, type:"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", visibilityStatus:"SAVED"|"PUBLISHED"}, versionNumber?:int}>
     */
    public function createAIAgentVersion(array $args): \AWS\Result { }

    /**
     * @param array{aiAgentId:string, assistantId:string, clientToken?:string, modifiedTime?:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{aiAgent?:array{aiAgentArn:string, aiAgentId:string, assistantArn:string, assistantId:string, configuration:array{answerRecommendationAIAgentConfiguration?:array{answerGenerationAIGuardrailId?:string, answerGenerationAIPromptId?:string, associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, intentLabelingGenerationAIPromptId?:string, locale?:string, queryReformulationAIPromptId?:string}, manualSearchAIAgentConfiguration?:array{answerGenerationAIGuardrailId?:string, answerGenerationAIPromptId?:string, associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, locale?:string}, selfServiceAIAgentConfiguration?:array{associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, selfServiceAIGuardrailId?:string, selfServiceAnswerGenerationAIPromptId?:string, selfServicePreProcessingAIPromptId?:string}}, description?:string, modifiedTime?:int|string|\DateTimeInterface, name:string, origin?:"SYSTEM"|"CUSTOMER", status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, type:"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", visibilityStatus:"SAVED"|"PUBLISHED"}, versionNumber?:int}>
     */
    public function createAIAgentVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assistantId:string, blockedInputMessaging:string, blockedOutputsMessaging:string, clientToken?:string, contentPolicyConfig?:array{filtersConfig:array<array{inputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", outputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", type:"SEXUAL"|"VIOLENCE"|"HATE"|"INSULTS"|"MISCONDUCT"|"PROMPT_ATTACK"}>}, contextualGroundingPolicyConfig?:array{filtersConfig:array<array{threshold:float, type:"GROUNDING"|"RELEVANCE"}>}, description?:string, name:string, sensitiveInformationPolicyConfig?:array{piiEntitiesConfig?:array<array{action:"BLOCK"|"ANONYMIZE", type:"ADDRESS"|"AGE"|"AWS_ACCESS_KEY"|"AWS_SECRET_KEY"|"CA_HEALTH_NUMBER"|"CA_SOCIAL_INSURANCE_NUMBER"|"CREDIT_DEBIT_CARD_CVV"|"CREDIT_DEBIT_CARD_EXPIRY"|"CREDIT_DEBIT_CARD_NUMBER"|"DRIVER_ID"|"EMAIL"|"INTERNATIONAL_BANK_ACCOUNT_NUMBER"|"IP_ADDRESS"|"LICENSE_PLATE"|"MAC_ADDRESS"|"NAME"|"PASSWORD"|"PHONE"|"PIN"|"SWIFT_CODE"|"UK_NATIONAL_HEALTH_SERVICE_NUMBER"|"UK_NATIONAL_INSURANCE_NUMBER"|"UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER"|"URL"|"USERNAME"|"US_BANK_ACCOUNT_NUMBER"|"US_BANK_ROUTING_NUMBER"|"US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER"|"US_PASSPORT_NUMBER"|"US_SOCIAL_SECURITY_NUMBER"|"VEHICLE_IDENTIFICATION_NUMBER"}>, regexesConfig?:array<array{action:"BLOCK"|"ANONYMIZE", description?:string, name:string, pattern:string}>}, tags?:array<string, string>, topicPolicyConfig?:array{topicsConfig:array<array{definition:string, examples?:array<string>, name:string, type:"DENY"}>}, visibilityStatus:"SAVED"|"PUBLISHED", wordPolicyConfig?:array{managedWordListsConfig?:array<array{type:"PROFANITY"}>, wordsConfig?:array<array{text:string}>}} $args
     * @return \AWS\Result<array{aiGuardrail?:array{aiGuardrailArn:string, aiGuardrailId:string, assistantArn:string, assistantId:string, blockedInputMessaging:string, blockedOutputsMessaging:string, contentPolicyConfig?:array{filtersConfig:array<array{inputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", outputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", type:"SEXUAL"|"VIOLENCE"|"HATE"|"INSULTS"|"MISCONDUCT"|"PROMPT_ATTACK"}>}, contextualGroundingPolicyConfig?:array{filtersConfig:array<array{threshold:float, type:"GROUNDING"|"RELEVANCE"}>}, description?:string, modifiedTime?:int|string|\DateTimeInterface, name:string, sensitiveInformationPolicyConfig?:array{piiEntitiesConfig?:array<array{action:"BLOCK"|"ANONYMIZE", type:"ADDRESS"|"AGE"|"AWS_ACCESS_KEY"|"AWS_SECRET_KEY"|"CA_HEALTH_NUMBER"|"CA_SOCIAL_INSURANCE_NUMBER"|"CREDIT_DEBIT_CARD_CVV"|"CREDIT_DEBIT_CARD_EXPIRY"|"CREDIT_DEBIT_CARD_NUMBER"|"DRIVER_ID"|"EMAIL"|"INTERNATIONAL_BANK_ACCOUNT_NUMBER"|"IP_ADDRESS"|"LICENSE_PLATE"|"MAC_ADDRESS"|"NAME"|"PASSWORD"|"PHONE"|"PIN"|"SWIFT_CODE"|"UK_NATIONAL_HEALTH_SERVICE_NUMBER"|"UK_NATIONAL_INSURANCE_NUMBER"|"UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER"|"URL"|"USERNAME"|"US_BANK_ACCOUNT_NUMBER"|"US_BANK_ROUTING_NUMBER"|"US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER"|"US_PASSPORT_NUMBER"|"US_SOCIAL_SECURITY_NUMBER"|"VEHICLE_IDENTIFICATION_NUMBER"}>, regexesConfig?:array<array{action:"BLOCK"|"ANONYMIZE", description?:string, name:string, pattern:string}>}, status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, topicPolicyConfig?:array{topicsConfig:array<array{definition:string, examples?:array<string>, name:string, type:"DENY"}>}, visibilityStatus:"SAVED"|"PUBLISHED", wordPolicyConfig?:array{managedWordListsConfig?:array<array{type:"PROFANITY"}>, wordsConfig?:array<array{text:string}>}}}>
     */
    public function createAIGuardrail(array $args): \AWS\Result { }

    /**
     * @param array{assistantId:string, blockedInputMessaging:string, blockedOutputsMessaging:string, clientToken?:string, contentPolicyConfig?:array{filtersConfig:array<array{inputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", outputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", type:"SEXUAL"|"VIOLENCE"|"HATE"|"INSULTS"|"MISCONDUCT"|"PROMPT_ATTACK"}>}, contextualGroundingPolicyConfig?:array{filtersConfig:array<array{threshold:float, type:"GROUNDING"|"RELEVANCE"}>}, description?:string, name:string, sensitiveInformationPolicyConfig?:array{piiEntitiesConfig?:array<array{action:"BLOCK"|"ANONYMIZE", type:"ADDRESS"|"AGE"|"AWS_ACCESS_KEY"|"AWS_SECRET_KEY"|"CA_HEALTH_NUMBER"|"CA_SOCIAL_INSURANCE_NUMBER"|"CREDIT_DEBIT_CARD_CVV"|"CREDIT_DEBIT_CARD_EXPIRY"|"CREDIT_DEBIT_CARD_NUMBER"|"DRIVER_ID"|"EMAIL"|"INTERNATIONAL_BANK_ACCOUNT_NUMBER"|"IP_ADDRESS"|"LICENSE_PLATE"|"MAC_ADDRESS"|"NAME"|"PASSWORD"|"PHONE"|"PIN"|"SWIFT_CODE"|"UK_NATIONAL_HEALTH_SERVICE_NUMBER"|"UK_NATIONAL_INSURANCE_NUMBER"|"UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER"|"URL"|"USERNAME"|"US_BANK_ACCOUNT_NUMBER"|"US_BANK_ROUTING_NUMBER"|"US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER"|"US_PASSPORT_NUMBER"|"US_SOCIAL_SECURITY_NUMBER"|"VEHICLE_IDENTIFICATION_NUMBER"}>, regexesConfig?:array<array{action:"BLOCK"|"ANONYMIZE", description?:string, name:string, pattern:string}>}, tags?:array<string, string>, topicPolicyConfig?:array{topicsConfig:array<array{definition:string, examples?:array<string>, name:string, type:"DENY"}>}, visibilityStatus:"SAVED"|"PUBLISHED", wordPolicyConfig?:array{managedWordListsConfig?:array<array{type:"PROFANITY"}>, wordsConfig?:array<array{text:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{aiGuardrail?:array{aiGuardrailArn:string, aiGuardrailId:string, assistantArn:string, assistantId:string, blockedInputMessaging:string, blockedOutputsMessaging:string, contentPolicyConfig?:array{filtersConfig:array<array{inputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", outputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", type:"SEXUAL"|"VIOLENCE"|"HATE"|"INSULTS"|"MISCONDUCT"|"PROMPT_ATTACK"}>}, contextualGroundingPolicyConfig?:array{filtersConfig:array<array{threshold:float, type:"GROUNDING"|"RELEVANCE"}>}, description?:string, modifiedTime?:int|string|\DateTimeInterface, name:string, sensitiveInformationPolicyConfig?:array{piiEntitiesConfig?:array<array{action:"BLOCK"|"ANONYMIZE", type:"ADDRESS"|"AGE"|"AWS_ACCESS_KEY"|"AWS_SECRET_KEY"|"CA_HEALTH_NUMBER"|"CA_SOCIAL_INSURANCE_NUMBER"|"CREDIT_DEBIT_CARD_CVV"|"CREDIT_DEBIT_CARD_EXPIRY"|"CREDIT_DEBIT_CARD_NUMBER"|"DRIVER_ID"|"EMAIL"|"INTERNATIONAL_BANK_ACCOUNT_NUMBER"|"IP_ADDRESS"|"LICENSE_PLATE"|"MAC_ADDRESS"|"NAME"|"PASSWORD"|"PHONE"|"PIN"|"SWIFT_CODE"|"UK_NATIONAL_HEALTH_SERVICE_NUMBER"|"UK_NATIONAL_INSURANCE_NUMBER"|"UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER"|"URL"|"USERNAME"|"US_BANK_ACCOUNT_NUMBER"|"US_BANK_ROUTING_NUMBER"|"US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER"|"US_PASSPORT_NUMBER"|"US_SOCIAL_SECURITY_NUMBER"|"VEHICLE_IDENTIFICATION_NUMBER"}>, regexesConfig?:array<array{action:"BLOCK"|"ANONYMIZE", description?:string, name:string, pattern:string}>}, status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, topicPolicyConfig?:array{topicsConfig:array<array{definition:string, examples?:array<string>, name:string, type:"DENY"}>}, visibilityStatus:"SAVED"|"PUBLISHED", wordPolicyConfig?:array{managedWordListsConfig?:array<array{type:"PROFANITY"}>, wordsConfig?:array<array{text:string}>}}}>
     */
    public function createAIGuardrailAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{aiGuardrailId:string, assistantId:string, clientToken?:string, modifiedTime?:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{aiGuardrail?:array{aiGuardrailArn:string, aiGuardrailId:string, assistantArn:string, assistantId:string, blockedInputMessaging:string, blockedOutputsMessaging:string, contentPolicyConfig?:array{filtersConfig:array<array{inputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", outputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", type:"SEXUAL"|"VIOLENCE"|"HATE"|"INSULTS"|"MISCONDUCT"|"PROMPT_ATTACK"}>}, contextualGroundingPolicyConfig?:array{filtersConfig:array<array{threshold:float, type:"GROUNDING"|"RELEVANCE"}>}, description?:string, modifiedTime?:int|string|\DateTimeInterface, name:string, sensitiveInformationPolicyConfig?:array{piiEntitiesConfig?:array<array{action:"BLOCK"|"ANONYMIZE", type:"ADDRESS"|"AGE"|"AWS_ACCESS_KEY"|"AWS_SECRET_KEY"|"CA_HEALTH_NUMBER"|"CA_SOCIAL_INSURANCE_NUMBER"|"CREDIT_DEBIT_CARD_CVV"|"CREDIT_DEBIT_CARD_EXPIRY"|"CREDIT_DEBIT_CARD_NUMBER"|"DRIVER_ID"|"EMAIL"|"INTERNATIONAL_BANK_ACCOUNT_NUMBER"|"IP_ADDRESS"|"LICENSE_PLATE"|"MAC_ADDRESS"|"NAME"|"PASSWORD"|"PHONE"|"PIN"|"SWIFT_CODE"|"UK_NATIONAL_HEALTH_SERVICE_NUMBER"|"UK_NATIONAL_INSURANCE_NUMBER"|"UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER"|"URL"|"USERNAME"|"US_BANK_ACCOUNT_NUMBER"|"US_BANK_ROUTING_NUMBER"|"US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER"|"US_PASSPORT_NUMBER"|"US_SOCIAL_SECURITY_NUMBER"|"VEHICLE_IDENTIFICATION_NUMBER"}>, regexesConfig?:array<array{action:"BLOCK"|"ANONYMIZE", description?:string, name:string, pattern:string}>}, status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, topicPolicyConfig?:array{topicsConfig:array<array{definition:string, examples?:array<string>, name:string, type:"DENY"}>}, visibilityStatus:"SAVED"|"PUBLISHED", wordPolicyConfig?:array{managedWordListsConfig?:array<array{type:"PROFANITY"}>, wordsConfig?:array<array{text:string}>}}, versionNumber?:int}>
     */
    public function createAIGuardrailVersion(array $args): \AWS\Result { }

    /**
     * @param array{aiGuardrailId:string, assistantId:string, clientToken?:string, modifiedTime?:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{aiGuardrail?:array{aiGuardrailArn:string, aiGuardrailId:string, assistantArn:string, assistantId:string, blockedInputMessaging:string, blockedOutputsMessaging:string, contentPolicyConfig?:array{filtersConfig:array<array{inputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", outputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", type:"SEXUAL"|"VIOLENCE"|"HATE"|"INSULTS"|"MISCONDUCT"|"PROMPT_ATTACK"}>}, contextualGroundingPolicyConfig?:array{filtersConfig:array<array{threshold:float, type:"GROUNDING"|"RELEVANCE"}>}, description?:string, modifiedTime?:int|string|\DateTimeInterface, name:string, sensitiveInformationPolicyConfig?:array{piiEntitiesConfig?:array<array{action:"BLOCK"|"ANONYMIZE", type:"ADDRESS"|"AGE"|"AWS_ACCESS_KEY"|"AWS_SECRET_KEY"|"CA_HEALTH_NUMBER"|"CA_SOCIAL_INSURANCE_NUMBER"|"CREDIT_DEBIT_CARD_CVV"|"CREDIT_DEBIT_CARD_EXPIRY"|"CREDIT_DEBIT_CARD_NUMBER"|"DRIVER_ID"|"EMAIL"|"INTERNATIONAL_BANK_ACCOUNT_NUMBER"|"IP_ADDRESS"|"LICENSE_PLATE"|"MAC_ADDRESS"|"NAME"|"PASSWORD"|"PHONE"|"PIN"|"SWIFT_CODE"|"UK_NATIONAL_HEALTH_SERVICE_NUMBER"|"UK_NATIONAL_INSURANCE_NUMBER"|"UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER"|"URL"|"USERNAME"|"US_BANK_ACCOUNT_NUMBER"|"US_BANK_ROUTING_NUMBER"|"US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER"|"US_PASSPORT_NUMBER"|"US_SOCIAL_SECURITY_NUMBER"|"VEHICLE_IDENTIFICATION_NUMBER"}>, regexesConfig?:array<array{action:"BLOCK"|"ANONYMIZE", description?:string, name:string, pattern:string}>}, status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, topicPolicyConfig?:array{topicsConfig:array<array{definition:string, examples?:array<string>, name:string, type:"DENY"}>}, visibilityStatus:"SAVED"|"PUBLISHED", wordPolicyConfig?:array{managedWordListsConfig?:array<array{type:"PROFANITY"}>, wordsConfig?:array<array{text:string}>}}, versionNumber?:int}>
     */
    public function createAIGuardrailVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{apiFormat:"ANTHROPIC_CLAUDE_MESSAGES"|"ANTHROPIC_CLAUDE_TEXT_COMPLETIONS", assistantId:string, clientToken?:string, description?:string, modelId:string, name:string, tags?:array<string, string>, templateConfiguration:array{textFullAIPromptEditTemplateConfiguration?:array{text:string}}, templateType:"TEXT", type:"ANSWER_GENERATION"|"INTENT_LABELING_GENERATION"|"QUERY_REFORMULATION"|"SELF_SERVICE_PRE_PROCESSING"|"SELF_SERVICE_ANSWER_GENERATION", visibilityStatus:"SAVED"|"PUBLISHED"} $args
     * @return \AWS\Result<array{aiPrompt?:array{aiPromptArn:string, aiPromptId:string, apiFormat:"ANTHROPIC_CLAUDE_MESSAGES"|"ANTHROPIC_CLAUDE_TEXT_COMPLETIONS", assistantArn:string, assistantId:string, description?:string, modelId:string, modifiedTime?:int|string|\DateTimeInterface, name:string, origin?:"SYSTEM"|"CUSTOMER", status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, templateConfiguration:array{textFullAIPromptEditTemplateConfiguration?:array{text:string}}, templateType:"TEXT", type:"ANSWER_GENERATION"|"INTENT_LABELING_GENERATION"|"QUERY_REFORMULATION"|"SELF_SERVICE_PRE_PROCESSING"|"SELF_SERVICE_ANSWER_GENERATION", visibilityStatus:"SAVED"|"PUBLISHED"}}>
     */
    public function createAIPrompt(array $args): \AWS\Result { }

    /**
     * @param array{apiFormat:"ANTHROPIC_CLAUDE_MESSAGES"|"ANTHROPIC_CLAUDE_TEXT_COMPLETIONS", assistantId:string, clientToken?:string, description?:string, modelId:string, name:string, tags?:array<string, string>, templateConfiguration:array{textFullAIPromptEditTemplateConfiguration?:array{text:string}}, templateType:"TEXT", type:"ANSWER_GENERATION"|"INTENT_LABELING_GENERATION"|"QUERY_REFORMULATION"|"SELF_SERVICE_PRE_PROCESSING"|"SELF_SERVICE_ANSWER_GENERATION", visibilityStatus:"SAVED"|"PUBLISHED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{aiPrompt?:array{aiPromptArn:string, aiPromptId:string, apiFormat:"ANTHROPIC_CLAUDE_MESSAGES"|"ANTHROPIC_CLAUDE_TEXT_COMPLETIONS", assistantArn:string, assistantId:string, description?:string, modelId:string, modifiedTime?:int|string|\DateTimeInterface, name:string, origin?:"SYSTEM"|"CUSTOMER", status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, templateConfiguration:array{textFullAIPromptEditTemplateConfiguration?:array{text:string}}, templateType:"TEXT", type:"ANSWER_GENERATION"|"INTENT_LABELING_GENERATION"|"QUERY_REFORMULATION"|"SELF_SERVICE_PRE_PROCESSING"|"SELF_SERVICE_ANSWER_GENERATION", visibilityStatus:"SAVED"|"PUBLISHED"}}>
     */
    public function createAIPromptAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{aiPromptId:string, assistantId:string, clientToken?:string, modifiedTime?:int|string|\DateTimeInterface} $args
     * @return \AWS\Result<array{aiPrompt?:array{aiPromptArn:string, aiPromptId:string, apiFormat:"ANTHROPIC_CLAUDE_MESSAGES"|"ANTHROPIC_CLAUDE_TEXT_COMPLETIONS", assistantArn:string, assistantId:string, description?:string, modelId:string, modifiedTime?:int|string|\DateTimeInterface, name:string, origin?:"SYSTEM"|"CUSTOMER", status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, templateConfiguration:array{textFullAIPromptEditTemplateConfiguration?:array{text:string}}, templateType:"TEXT", type:"ANSWER_GENERATION"|"INTENT_LABELING_GENERATION"|"QUERY_REFORMULATION"|"SELF_SERVICE_PRE_PROCESSING"|"SELF_SERVICE_ANSWER_GENERATION", visibilityStatus:"SAVED"|"PUBLISHED"}, versionNumber?:int}>
     */
    public function createAIPromptVersion(array $args): \AWS\Result { }

    /**
     * @param array{aiPromptId:string, assistantId:string, clientToken?:string, modifiedTime?:int|string|\DateTimeInterface} $args
     * @return \GuzzleHttp\Promise\Promise<array{aiPrompt?:array{aiPromptArn:string, aiPromptId:string, apiFormat:"ANTHROPIC_CLAUDE_MESSAGES"|"ANTHROPIC_CLAUDE_TEXT_COMPLETIONS", assistantArn:string, assistantId:string, description?:string, modelId:string, modifiedTime?:int|string|\DateTimeInterface, name:string, origin?:"SYSTEM"|"CUSTOMER", status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, templateConfiguration:array{textFullAIPromptEditTemplateConfiguration?:array{text:string}}, templateType:"TEXT", type:"ANSWER_GENERATION"|"INTENT_LABELING_GENERATION"|"QUERY_REFORMULATION"|"SELF_SERVICE_PRE_PROCESSING"|"SELF_SERVICE_ANSWER_GENERATION", visibilityStatus:"SAVED"|"PUBLISHED"}, versionNumber?:int}>
     */
    public function createAIPromptVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, description?:string, name:string, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, tags?:array<string, string>, type:"AGENT"} $args
     * @return \AWS\Result<array{assistant?:array{aiAgentConfiguration?:array<"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", array{aiAgentId:string}>, assistantArn:string, assistantId:string, capabilityConfiguration?:array{type?:"V1"|"V2"}, description?:string, integrationConfiguration?:array{topicIntegrationArn?:string}, name:string, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, type:"AGENT"}}>
     */
    public function createAssistant(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, description?:string, name:string, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, tags?:array<string, string>, type:"AGENT"} $args
     * @return \GuzzleHttp\Promise\Promise<array{assistant?:array{aiAgentConfiguration?:array<"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", array{aiAgentId:string}>, assistantArn:string, assistantId:string, capabilityConfiguration?:array{type?:"V1"|"V2"}, description?:string, integrationConfiguration?:array{topicIntegrationArn?:string}, name:string, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, type:"AGENT"}}>
     */
    public function createAssistantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assistantId:string, association:array{knowledgeBaseId?:string}, associationType:"KNOWLEDGE_BASE", clientToken?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{assistantAssociation?:array{assistantArn:string, assistantAssociationArn:string, assistantAssociationId:string, assistantId:string, associationData:array{knowledgeBaseAssociation?:array{knowledgeBaseArn?:string, knowledgeBaseId?:string}}, associationType:"KNOWLEDGE_BASE", tags?:array<string, string>}}>
     */
    public function createAssistantAssociation(array $args): \AWS\Result { }

    /**
     * @param array{assistantId:string, association:array{knowledgeBaseId?:string}, associationType:"KNOWLEDGE_BASE", clientToken?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{assistantAssociation?:array{assistantArn:string, assistantAssociationArn:string, assistantAssociationId:string, assistantId:string, associationData:array{knowledgeBaseAssociation?:array{knowledgeBaseArn?:string, knowledgeBaseId?:string}}, associationType:"KNOWLEDGE_BASE", tags?:array<string, string>}}>
     */
    public function createAssistantAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, knowledgeBaseId:string, metadata?:array<string, string>, name:string, overrideLinkOutUri?:string, tags?:array<string, string>, title?:string, uploadId:string} $args
     * @return \AWS\Result<array{content?:array{contentArn:string, contentId:string, contentType:string, knowledgeBaseArn:string, knowledgeBaseId:string, linkOutUri?:string, metadata:array<string, string>, name:string, revisionId:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_FAILED", tags?:array<string, string>, title:string, url:string, urlExpiry:int|string|\DateTimeInterface}}>
     */
    public function createContent(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, knowledgeBaseId:string, metadata?:array<string, string>, name:string, overrideLinkOutUri?:string, tags?:array<string, string>, title?:string, uploadId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{content?:array{contentArn:string, contentId:string, contentType:string, knowledgeBaseArn:string, knowledgeBaseId:string, linkOutUri?:string, metadata:array<string, string>, name:string, revisionId:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_FAILED", tags?:array<string, string>, title:string, url:string, urlExpiry:int|string|\DateTimeInterface}}>
     */
    public function createContentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{association:array{amazonConnectGuideAssociation?:array{flowId?:string}}, associationType:"AMAZON_CONNECT_GUIDE", clientToken?:string, contentId:string, knowledgeBaseId:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{contentAssociation?:array{associationData:array{amazonConnectGuideAssociation?:array{flowId?:string}}, associationType:"AMAZON_CONNECT_GUIDE", contentArn:string, contentAssociationArn:string, contentAssociationId:string, contentId:string, knowledgeBaseArn:string, knowledgeBaseId:string, tags?:array<string, string>}}>
     */
    public function createContentAssociation(array $args): \AWS\Result { }

    /**
     * @param array{association:array{amazonConnectGuideAssociation?:array{flowId?:string}}, associationType:"AMAZON_CONNECT_GUIDE", clientToken?:string, contentId:string, knowledgeBaseId:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{contentAssociation?:array{associationData:array{amazonConnectGuideAssociation?:array{flowId?:string}}, associationType:"AMAZON_CONNECT_GUIDE", contentArn:string, contentAssociationArn:string, contentAssociationId:string, contentId:string, knowledgeBaseArn:string, knowledgeBaseId:string, tags?:array<string, string>}}>
     */
    public function createContentAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, description?:string, knowledgeBaseType:"EXTERNAL"|"CUSTOM"|"QUICK_RESPONSES"|"MESSAGE_TEMPLATES"|"MANAGED", name:string, renderingConfiguration?:array{templateUri?:string}, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, sourceConfiguration?:array{appIntegrations?:array{appIntegrationArn:string, objectFields?:array<string>}, managedSourceConfiguration?:array{webCrawlerConfiguration?:array{crawlerLimits?:array{rateLimit?:int}, exclusionFilters?:array<string>, inclusionFilters?:array<string>, scope?:"HOST_ONLY"|"SUBDOMAINS", urlConfiguration:array{seedUrls?:array<array{url?:string}>}}}}, tags?:array<string, string>, vectorIngestionConfiguration?:array{chunkingConfiguration?:array{chunkingStrategy:"FIXED_SIZE"|"NONE"|"HIERARCHICAL"|"SEMANTIC", fixedSizeChunkingConfiguration?:array{maxTokens:int, overlapPercentage:int}, hierarchicalChunkingConfiguration?:array{levelConfigurations:array<array{maxTokens:int}>, overlapTokens:int}, semanticChunkingConfiguration?:array{breakpointPercentileThreshold:int, bufferSize:int, maxTokens:int}}, parsingConfiguration?:array{bedrockFoundationModelConfiguration?:array{modelArn:string, parsingPrompt?:array{parsingPromptText:string}}, parsingStrategy:"BEDROCK_FOUNDATION_MODEL"}}} $args
     * @return \AWS\Result<array{knowledgeBase?:array{description?:string, ingestionFailureReasons?:array<string>, ingestionStatus?:"SYNC_FAILED"|"SYNCING_IN_PROGRESS"|"SYNC_SUCCESS"|"CREATE_IN_PROGRESS", knowledgeBaseArn:string, knowledgeBaseId:string, knowledgeBaseType:"EXTERNAL"|"CUSTOM"|"QUICK_RESPONSES"|"MESSAGE_TEMPLATES"|"MANAGED", lastContentModificationTime?:int|string|\DateTimeInterface, name:string, renderingConfiguration?:array{templateUri?:string}, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, sourceConfiguration?:array{appIntegrations?:array{appIntegrationArn:string, objectFields?:array<string>}, managedSourceConfiguration?:array{webCrawlerConfiguration?:array{crawlerLimits?:array{rateLimit?:int}, exclusionFilters?:array<string>, inclusionFilters?:array<string>, scope?:"HOST_ONLY"|"SUBDOMAINS", urlConfiguration:array{seedUrls?:array<array{url?:string}>}}}}, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, vectorIngestionConfiguration?:array{chunkingConfiguration?:array{chunkingStrategy:"FIXED_SIZE"|"NONE"|"HIERARCHICAL"|"SEMANTIC", fixedSizeChunkingConfiguration?:array{maxTokens:int, overlapPercentage:int}, hierarchicalChunkingConfiguration?:array{levelConfigurations:array<array{maxTokens:int}>, overlapTokens:int}, semanticChunkingConfiguration?:array{breakpointPercentileThreshold:int, bufferSize:int, maxTokens:int}}, parsingConfiguration?:array{bedrockFoundationModelConfiguration?:array{modelArn:string, parsingPrompt?:array{parsingPromptText:string}}, parsingStrategy:"BEDROCK_FOUNDATION_MODEL"}}}}>
     */
    public function createKnowledgeBase(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, description?:string, knowledgeBaseType:"EXTERNAL"|"CUSTOM"|"QUICK_RESPONSES"|"MESSAGE_TEMPLATES"|"MANAGED", name:string, renderingConfiguration?:array{templateUri?:string}, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, sourceConfiguration?:array{appIntegrations?:array{appIntegrationArn:string, objectFields?:array<string>}, managedSourceConfiguration?:array{webCrawlerConfiguration?:array{crawlerLimits?:array{rateLimit?:int}, exclusionFilters?:array<string>, inclusionFilters?:array<string>, scope?:"HOST_ONLY"|"SUBDOMAINS", urlConfiguration:array{seedUrls?:array<array{url?:string}>}}}}, tags?:array<string, string>, vectorIngestionConfiguration?:array{chunkingConfiguration?:array{chunkingStrategy:"FIXED_SIZE"|"NONE"|"HIERARCHICAL"|"SEMANTIC", fixedSizeChunkingConfiguration?:array{maxTokens:int, overlapPercentage:int}, hierarchicalChunkingConfiguration?:array{levelConfigurations:array<array{maxTokens:int}>, overlapTokens:int}, semanticChunkingConfiguration?:array{breakpointPercentileThreshold:int, bufferSize:int, maxTokens:int}}, parsingConfiguration?:array{bedrockFoundationModelConfiguration?:array{modelArn:string, parsingPrompt?:array{parsingPromptText:string}}, parsingStrategy:"BEDROCK_FOUNDATION_MODEL"}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{knowledgeBase?:array{description?:string, ingestionFailureReasons?:array<string>, ingestionStatus?:"SYNC_FAILED"|"SYNCING_IN_PROGRESS"|"SYNC_SUCCESS"|"CREATE_IN_PROGRESS", knowledgeBaseArn:string, knowledgeBaseId:string, knowledgeBaseType:"EXTERNAL"|"CUSTOM"|"QUICK_RESPONSES"|"MESSAGE_TEMPLATES"|"MANAGED", lastContentModificationTime?:int|string|\DateTimeInterface, name:string, renderingConfiguration?:array{templateUri?:string}, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, sourceConfiguration?:array{appIntegrations?:array{appIntegrationArn:string, objectFields?:array<string>}, managedSourceConfiguration?:array{webCrawlerConfiguration?:array{crawlerLimits?:array{rateLimit?:int}, exclusionFilters?:array<string>, inclusionFilters?:array<string>, scope?:"HOST_ONLY"|"SUBDOMAINS", urlConfiguration:array{seedUrls?:array<array{url?:string}>}}}}, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, vectorIngestionConfiguration?:array{chunkingConfiguration?:array{chunkingStrategy:"FIXED_SIZE"|"NONE"|"HIERARCHICAL"|"SEMANTIC", fixedSizeChunkingConfiguration?:array{maxTokens:int, overlapPercentage:int}, hierarchicalChunkingConfiguration?:array{levelConfigurations:array<array{maxTokens:int}>, overlapTokens:int}, semanticChunkingConfiguration?:array{breakpointPercentileThreshold:int, bufferSize:int, maxTokens:int}}, parsingConfiguration?:array{bedrockFoundationModelConfiguration?:array{modelArn:string, parsingPrompt?:array{parsingPromptText:string}}, parsingStrategy:"BEDROCK_FOUNDATION_MODEL"}}}}>
     */
    public function createKnowledgeBaseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{channelSubtype:"EMAIL"|"SMS", clientToken?:string, content:array{email?:array{body?:array{html?:array{content?:mixed}, plainText?:array{content?:mixed}}, headers?:array<array{name?:string, value?:string}>, subject?:string}, sms?:array{body?:array{plainText?:array{content?:mixed}}}}, defaultAttributes?:array{agentAttributes?:array{firstName?:string, lastName?:string}, customAttributes?:array<string, string>, customerProfileAttributes?:array{accountNumber?:string, additionalInformation?:string, address1?:string, address2?:string, address3?:string, address4?:string, billingAddress1?:string, billingAddress2?:string, billingAddress3?:string, billingAddress4?:string, billingCity?:string, billingCountry?:string, billingCounty?:string, billingPostalCode?:string, billingProvince?:string, billingState?:string, birthDate?:string, businessEmailAddress?:string, businessName?:string, businessPhoneNumber?:string, city?:string, country?:string, county?:string, custom?:array<string, string>, emailAddress?:string, firstName?:string, gender?:string, homePhoneNumber?:string, lastName?:string, mailingAddress1?:string, mailingAddress2?:string, mailingAddress3?:string, mailingAddress4?:string, mailingCity?:string, mailingCountry?:string, mailingCounty?:string, mailingPostalCode?:string, mailingProvince?:string, mailingState?:string, middleName?:string, mobilePhoneNumber?:string, partyType?:string, phoneNumber?:string, postalCode?:string, profileARN?:string, profileId?:string, province?:string, shippingAddress1?:string, shippingAddress2?:string, shippingAddress3?:string, shippingAddress4?:string, shippingCity?:string, shippingCountry?:string, shippingCounty?:string, shippingPostalCode?:string, shippingProvince?:string, shippingState?:string, state?:string}, systemAttributes?:array{customerEndpoint?:array{address?:string}, name?:string, systemEndpoint?:array{address?:string}}}, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, knowledgeBaseId:string, language?:string, name:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{messageTemplate?:array{attributeTypes?:array<"SYSTEM"|"AGENT"|"CUSTOMER_PROFILE"|"CUSTOM">, channelSubtype:"EMAIL"|"SMS", content:array{email?:array{body?:array{html?:array{content?:mixed}, plainText?:array{content?:mixed}}, headers?:array<array{name?:string, value?:string}>, subject?:string}, sms?:array{body?:array{plainText?:array{content?:mixed}}}}, createdTime:int|string|\DateTimeInterface, defaultAttributes?:array{agentAttributes?:array{firstName?:string, lastName?:string}, customAttributes?:array<string, string>, customerProfileAttributes?:array{accountNumber?:string, additionalInformation?:string, address1?:string, address2?:string, address3?:string, address4?:string, billingAddress1?:string, billingAddress2?:string, billingAddress3?:string, billingAddress4?:string, billingCity?:string, billingCountry?:string, billingCounty?:string, billingPostalCode?:string, billingProvince?:string, billingState?:string, birthDate?:string, businessEmailAddress?:string, businessName?:string, businessPhoneNumber?:string, city?:string, country?:string, county?:string, custom?:array<string, string>, emailAddress?:string, firstName?:string, gender?:string, homePhoneNumber?:string, lastName?:string, mailingAddress1?:string, mailingAddress2?:string, mailingAddress3?:string, mailingAddress4?:string, mailingCity?:string, mailingCountry?:string, mailingCounty?:string, mailingPostalCode?:string, mailingProvince?:string, mailingState?:string, middleName?:string, mobilePhoneNumber?:string, partyType?:string, phoneNumber?:string, postalCode?:string, profileARN?:string, profileId?:string, province?:string, shippingAddress1?:string, shippingAddress2?:string, shippingAddress3?:string, shippingAddress4?:string, shippingCity?:string, shippingCountry?:string, shippingCounty?:string, shippingPostalCode?:string, shippingProvince?:string, shippingState?:string, state?:string}, systemAttributes?:array{customerEndpoint?:array{address?:string}, name?:string, systemEndpoint?:array{address?:string}}}, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, knowledgeBaseArn:string, knowledgeBaseId:string, language?:string, lastModifiedBy:string, lastModifiedTime:int|string|\DateTimeInterface, messageTemplateArn:string, messageTemplateContentSha256:string, messageTemplateId:string, name:string, tags?:array<string, string>}}>
     */
    public function createMessageTemplate(array $args): \AWS\Result { }

    /**
     * @param array{channelSubtype:"EMAIL"|"SMS", clientToken?:string, content:array{email?:array{body?:array{html?:array{content?:mixed}, plainText?:array{content?:mixed}}, headers?:array<array{name?:string, value?:string}>, subject?:string}, sms?:array{body?:array{plainText?:array{content?:mixed}}}}, defaultAttributes?:array{agentAttributes?:array{firstName?:string, lastName?:string}, customAttributes?:array<string, string>, customerProfileAttributes?:array{accountNumber?:string, additionalInformation?:string, address1?:string, address2?:string, address3?:string, address4?:string, billingAddress1?:string, billingAddress2?:string, billingAddress3?:string, billingAddress4?:string, billingCity?:string, billingCountry?:string, billingCounty?:string, billingPostalCode?:string, billingProvince?:string, billingState?:string, birthDate?:string, businessEmailAddress?:string, businessName?:string, businessPhoneNumber?:string, city?:string, country?:string, county?:string, custom?:array<string, string>, emailAddress?:string, firstName?:string, gender?:string, homePhoneNumber?:string, lastName?:string, mailingAddress1?:string, mailingAddress2?:string, mailingAddress3?:string, mailingAddress4?:string, mailingCity?:string, mailingCountry?:string, mailingCounty?:string, mailingPostalCode?:string, mailingProvince?:string, mailingState?:string, middleName?:string, mobilePhoneNumber?:string, partyType?:string, phoneNumber?:string, postalCode?:string, profileARN?:string, profileId?:string, province?:string, shippingAddress1?:string, shippingAddress2?:string, shippingAddress3?:string, shippingAddress4?:string, shippingCity?:string, shippingCountry?:string, shippingCounty?:string, shippingPostalCode?:string, shippingProvince?:string, shippingState?:string, state?:string}, systemAttributes?:array{customerEndpoint?:array{address?:string}, name?:string, systemEndpoint?:array{address?:string}}}, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, knowledgeBaseId:string, language?:string, name:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{messageTemplate?:array{attributeTypes?:array<"SYSTEM"|"AGENT"|"CUSTOMER_PROFILE"|"CUSTOM">, channelSubtype:"EMAIL"|"SMS", content:array{email?:array{body?:array{html?:array{content?:mixed}, plainText?:array{content?:mixed}}, headers?:array<array{name?:string, value?:string}>, subject?:string}, sms?:array{body?:array{plainText?:array{content?:mixed}}}}, createdTime:int|string|\DateTimeInterface, defaultAttributes?:array{agentAttributes?:array{firstName?:string, lastName?:string}, customAttributes?:array<string, string>, customerProfileAttributes?:array{accountNumber?:string, additionalInformation?:string, address1?:string, address2?:string, address3?:string, address4?:string, billingAddress1?:string, billingAddress2?:string, billingAddress3?:string, billingAddress4?:string, billingCity?:string, billingCountry?:string, billingCounty?:string, billingPostalCode?:string, billingProvince?:string, billingState?:string, birthDate?:string, businessEmailAddress?:string, businessName?:string, businessPhoneNumber?:string, city?:string, country?:string, county?:string, custom?:array<string, string>, emailAddress?:string, firstName?:string, gender?:string, homePhoneNumber?:string, lastName?:string, mailingAddress1?:string, mailingAddress2?:string, mailingAddress3?:string, mailingAddress4?:string, mailingCity?:string, mailingCountry?:string, mailingCounty?:string, mailingPostalCode?:string, mailingProvince?:string, mailingState?:string, middleName?:string, mobilePhoneNumber?:string, partyType?:string, phoneNumber?:string, postalCode?:string, profileARN?:string, profileId?:string, province?:string, shippingAddress1?:string, shippingAddress2?:string, shippingAddress3?:string, shippingAddress4?:string, shippingCity?:string, shippingCountry?:string, shippingCounty?:string, shippingPostalCode?:string, shippingProvince?:string, shippingState?:string, state?:string}, systemAttributes?:array{customerEndpoint?:array{address?:string}, name?:string, systemEndpoint?:array{address?:string}}}, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, knowledgeBaseArn:string, knowledgeBaseId:string, language?:string, lastModifiedBy:string, lastModifiedTime:int|string|\DateTimeInterface, messageTemplateArn:string, messageTemplateContentSha256:string, messageTemplateId:string, name:string, tags?:array<string, string>}}>
     */
    public function createMessageTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{body:string, clientToken?:string, contentDisposition:"ATTACHMENT", knowledgeBaseId:string, messageTemplateId:string, name:string} $args
     * @return \AWS\Result<array{attachment?:array{attachmentId:string, contentDisposition:"ATTACHMENT", name:string, uploadedTime:int|string|\DateTimeInterface, url:string, urlExpiry:int|string|\DateTimeInterface}}>
     */
    public function createMessageTemplateAttachment(array $args): \AWS\Result { }

    /**
     * @param array{body:string, clientToken?:string, contentDisposition:"ATTACHMENT", knowledgeBaseId:string, messageTemplateId:string, name:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{attachment?:array{attachmentId:string, contentDisposition:"ATTACHMENT", name:string, uploadedTime:int|string|\DateTimeInterface, url:string, urlExpiry:int|string|\DateTimeInterface}}>
     */
    public function createMessageTemplateAttachmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{knowledgeBaseId:string, messageTemplateContentSha256?:string, messageTemplateId:string} $args
     * @return \AWS\Result<array{messageTemplate?:array{attachments?:array<array{attachmentId:string, contentDisposition:"ATTACHMENT", name:string, uploadedTime:int|string|\DateTimeInterface, url:string, urlExpiry:int|string|\DateTimeInterface}>, attributeTypes?:array<"SYSTEM"|"AGENT"|"CUSTOMER_PROFILE"|"CUSTOM">, channelSubtype:"EMAIL"|"SMS", content:array{email?:array{body?:array{html?:array{content?:mixed}, plainText?:array{content?:mixed}}, headers?:array<array{name?:string, value?:string}>, subject?:string}, sms?:array{body?:array{plainText?:array{content?:mixed}}}}, createdTime:int|string|\DateTimeInterface, defaultAttributes?:array{agentAttributes?:array{firstName?:string, lastName?:string}, customAttributes?:array<string, string>, customerProfileAttributes?:array{accountNumber?:string, additionalInformation?:string, address1?:string, address2?:string, address3?:string, address4?:string, billingAddress1?:string, billingAddress2?:string, billingAddress3?:string, billingAddress4?:string, billingCity?:string, billingCountry?:string, billingCounty?:string, billingPostalCode?:string, billingProvince?:string, billingState?:string, birthDate?:string, businessEmailAddress?:string, businessName?:string, businessPhoneNumber?:string, city?:string, country?:string, county?:string, custom?:array<string, string>, emailAddress?:string, firstName?:string, gender?:string, homePhoneNumber?:string, lastName?:string, mailingAddress1?:string, mailingAddress2?:string, mailingAddress3?:string, mailingAddress4?:string, mailingCity?:string, mailingCountry?:string, mailingCounty?:string, mailingPostalCode?:string, mailingProvince?:string, mailingState?:string, middleName?:string, mobilePhoneNumber?:string, partyType?:string, phoneNumber?:string, postalCode?:string, profileARN?:string, profileId?:string, province?:string, shippingAddress1?:string, shippingAddress2?:string, shippingAddress3?:string, shippingAddress4?:string, shippingCity?:string, shippingCountry?:string, shippingCounty?:string, shippingPostalCode?:string, shippingProvince?:string, shippingState?:string, state?:string}, systemAttributes?:array{customerEndpoint?:array{address?:string}, name?:string, systemEndpoint?:array{address?:string}}}, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, isActive?:bool, knowledgeBaseArn:string, knowledgeBaseId:string, language?:string, lastModifiedBy:string, lastModifiedTime:int|string|\DateTimeInterface, messageTemplateArn:string, messageTemplateContentSha256:string, messageTemplateId:string, name:string, tags?:array<string, string>, versionNumber?:int}}>
     */
    public function createMessageTemplateVersion(array $args): \AWS\Result { }

    /**
     * @param array{knowledgeBaseId:string, messageTemplateContentSha256?:string, messageTemplateId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{messageTemplate?:array{attachments?:array<array{attachmentId:string, contentDisposition:"ATTACHMENT", name:string, uploadedTime:int|string|\DateTimeInterface, url:string, urlExpiry:int|string|\DateTimeInterface}>, attributeTypes?:array<"SYSTEM"|"AGENT"|"CUSTOMER_PROFILE"|"CUSTOM">, channelSubtype:"EMAIL"|"SMS", content:array{email?:array{body?:array{html?:array{content?:mixed}, plainText?:array{content?:mixed}}, headers?:array<array{name?:string, value?:string}>, subject?:string}, sms?:array{body?:array{plainText?:array{content?:mixed}}}}, createdTime:int|string|\DateTimeInterface, defaultAttributes?:array{agentAttributes?:array{firstName?:string, lastName?:string}, customAttributes?:array<string, string>, customerProfileAttributes?:array{accountNumber?:string, additionalInformation?:string, address1?:string, address2?:string, address3?:string, address4?:string, billingAddress1?:string, billingAddress2?:string, billingAddress3?:string, billingAddress4?:string, billingCity?:string, billingCountry?:string, billingCounty?:string, billingPostalCode?:string, billingProvince?:string, billingState?:string, birthDate?:string, businessEmailAddress?:string, businessName?:string, businessPhoneNumber?:string, city?:string, country?:string, county?:string, custom?:array<string, string>, emailAddress?:string, firstName?:string, gender?:string, homePhoneNumber?:string, lastName?:string, mailingAddress1?:string, mailingAddress2?:string, mailingAddress3?:string, mailingAddress4?:string, mailingCity?:string, mailingCountry?:string, mailingCounty?:string, mailingPostalCode?:string, mailingProvince?:string, mailingState?:string, middleName?:string, mobilePhoneNumber?:string, partyType?:string, phoneNumber?:string, postalCode?:string, profileARN?:string, profileId?:string, province?:string, shippingAddress1?:string, shippingAddress2?:string, shippingAddress3?:string, shippingAddress4?:string, shippingCity?:string, shippingCountry?:string, shippingCounty?:string, shippingPostalCode?:string, shippingProvince?:string, shippingState?:string, state?:string}, systemAttributes?:array{customerEndpoint?:array{address?:string}, name?:string, systemEndpoint?:array{address?:string}}}, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, isActive?:bool, knowledgeBaseArn:string, knowledgeBaseId:string, language?:string, lastModifiedBy:string, lastModifiedTime:int|string|\DateTimeInterface, messageTemplateArn:string, messageTemplateContentSha256:string, messageTemplateId:string, name:string, tags?:array<string, string>, versionNumber?:int}}>
     */
    public function createMessageTemplateVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{channels?:array<string>, clientToken?:string, content:array{content?:mixed}, contentType?:string, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, isActive?:bool, knowledgeBaseId:string, language?:string, name:string, shortcutKey?:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{quickResponse?:array{channels?:array<string>, contentType:string, contents?:array{markdown?:array{content?:string}, plainText?:array{content?:string}}, createdTime:int|string|\DateTimeInterface, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, isActive?:bool, knowledgeBaseArn:string, knowledgeBaseId:string, language?:string, lastModifiedBy?:string, lastModifiedTime:int|string|\DateTimeInterface, name:string, quickResponseArn:string, quickResponseId:string, shortcutKey?:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED", tags?:array<string, string>}}>
     */
    public function createQuickResponse(array $args): \AWS\Result { }

    /**
     * @param array{channels?:array<string>, clientToken?:string, content:array{content?:mixed}, contentType?:string, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, isActive?:bool, knowledgeBaseId:string, language?:string, name:string, shortcutKey?:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{quickResponse?:array{channels?:array<string>, contentType:string, contents?:array{markdown?:array{content?:string}, plainText?:array{content?:string}}, createdTime:int|string|\DateTimeInterface, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, isActive?:bool, knowledgeBaseArn:string, knowledgeBaseId:string, language?:string, lastModifiedBy?:string, lastModifiedTime:int|string|\DateTimeInterface, name:string, quickResponseArn:string, quickResponseId:string, shortcutKey?:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED", tags?:array<string, string>}}>
     */
    public function createQuickResponseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{aiAgentConfiguration?:array<"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", array{aiAgentId:string}>, assistantId:string, clientToken?:string, description?:string, name:string, tagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, tags?:array<string, string>} $args
     * @return \AWS\Result<array{session?:array{aiAgentConfiguration?:array<"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", array{aiAgentId:string}>, description?:string, integrationConfiguration?:array{topicIntegrationArn?:string}, name:string, sessionArn:string, sessionId:string, tagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, tags?:array<string, string>}}>
     */
    public function createSession(array $args): \AWS\Result { }

    /**
     * @param array{aiAgentConfiguration?:array<"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", array{aiAgentId:string}>, assistantId:string, clientToken?:string, description?:string, name:string, tagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{session?:array{aiAgentConfiguration?:array<"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", array{aiAgentId:string}>, description?:string, integrationConfiguration?:array{topicIntegrationArn?:string}, name:string, sessionArn:string, sessionId:string, tagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, tags?:array<string, string>}}>
     */
    public function createSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{knowledgeBaseId:string, messageTemplateId:string, versionNumber:int} $args
     * @return \AWS\Result<array{messageTemplateArn:string, messageTemplateId:string, versionNumber:int}>
     */
    public function deactivateMessageTemplate(array $args): \AWS\Result { }

    /**
     * @param array{knowledgeBaseId:string, messageTemplateId:string, versionNumber:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{messageTemplateArn:string, messageTemplateId:string, versionNumber:int}>
     */
    public function deactivateMessageTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{aiAgentId:string, assistantId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAIAgent(array $args): \AWS\Result { }

    /**
     * @param array{aiAgentId:string, assistantId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAIAgentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{aiAgentId:string, assistantId:string, versionNumber:int} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAIAgentVersion(array $args): \AWS\Result { }

    /**
     * @param array{aiAgentId:string, assistantId:string, versionNumber:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAIAgentVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{aiGuardrailId:string, assistantId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAIGuardrail(array $args): \AWS\Result { }

    /**
     * @param array{aiGuardrailId:string, assistantId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAIGuardrailAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{aiGuardrailId:string, assistantId:string, versionNumber:int} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAIGuardrailVersion(array $args): \AWS\Result { }

    /**
     * @param array{aiGuardrailId:string, assistantId:string, versionNumber:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAIGuardrailVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{aiPromptId:string, assistantId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAIPrompt(array $args): \AWS\Result { }

    /**
     * @param array{aiPromptId:string, assistantId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAIPromptAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{aiPromptId:string, assistantId:string, versionNumber:int} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAIPromptVersion(array $args): \AWS\Result { }

    /**
     * @param array{aiPromptId:string, assistantId:string, versionNumber:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAIPromptVersionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assistantId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAssistant(array $args): \AWS\Result { }

    /**
     * @param array{assistantId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAssistantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assistantAssociationId:string, assistantId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteAssistantAssociation(array $args): \AWS\Result { }

    /**
     * @param array{assistantAssociationId:string, assistantId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteAssistantAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{contentId:string, knowledgeBaseId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteContent(array $args): \AWS\Result { }

    /**
     * @param array{contentId:string, knowledgeBaseId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteContentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{contentAssociationId:string, contentId:string, knowledgeBaseId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteContentAssociation(array $args): \AWS\Result { }

    /**
     * @param array{contentAssociationId:string, contentId:string, knowledgeBaseId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteContentAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{importJobId:string, knowledgeBaseId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteImportJob(array $args): \AWS\Result { }

    /**
     * @param array{importJobId:string, knowledgeBaseId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{knowledgeBaseId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteKnowledgeBase(array $args): \AWS\Result { }

    /**
     * @param array{knowledgeBaseId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteKnowledgeBaseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{knowledgeBaseId:string, messageTemplateId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteMessageTemplate(array $args): \AWS\Result { }

    /**
     * @param array{knowledgeBaseId:string, messageTemplateId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteMessageTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{attachmentId:string, knowledgeBaseId:string, messageTemplateId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteMessageTemplateAttachment(array $args): \AWS\Result { }

    /**
     * @param array{attachmentId:string, knowledgeBaseId:string, messageTemplateId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteMessageTemplateAttachmentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{knowledgeBaseId:string, quickResponseId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function deleteQuickResponse(array $args): \AWS\Result { }

    /**
     * @param array{knowledgeBaseId:string, quickResponseId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function deleteQuickResponseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{aiAgentId:string, assistantId:string} $args
     * @return \AWS\Result<array{aiAgent?:array{aiAgentArn:string, aiAgentId:string, assistantArn:string, assistantId:string, configuration:array{answerRecommendationAIAgentConfiguration?:array{answerGenerationAIGuardrailId?:string, answerGenerationAIPromptId?:string, associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, intentLabelingGenerationAIPromptId?:string, locale?:string, queryReformulationAIPromptId?:string}, manualSearchAIAgentConfiguration?:array{answerGenerationAIGuardrailId?:string, answerGenerationAIPromptId?:string, associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, locale?:string}, selfServiceAIAgentConfiguration?:array{associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, selfServiceAIGuardrailId?:string, selfServiceAnswerGenerationAIPromptId?:string, selfServicePreProcessingAIPromptId?:string}}, description?:string, modifiedTime?:int|string|\DateTimeInterface, name:string, origin?:"SYSTEM"|"CUSTOMER", status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, type:"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", visibilityStatus:"SAVED"|"PUBLISHED"}, versionNumber?:int}>
     */
    public function getAIAgent(array $args): \AWS\Result { }

    /**
     * @param array{aiAgentId:string, assistantId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{aiAgent?:array{aiAgentArn:string, aiAgentId:string, assistantArn:string, assistantId:string, configuration:array{answerRecommendationAIAgentConfiguration?:array{answerGenerationAIGuardrailId?:string, answerGenerationAIPromptId?:string, associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, intentLabelingGenerationAIPromptId?:string, locale?:string, queryReformulationAIPromptId?:string}, manualSearchAIAgentConfiguration?:array{answerGenerationAIGuardrailId?:string, answerGenerationAIPromptId?:string, associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, locale?:string}, selfServiceAIAgentConfiguration?:array{associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, selfServiceAIGuardrailId?:string, selfServiceAnswerGenerationAIPromptId?:string, selfServicePreProcessingAIPromptId?:string}}, description?:string, modifiedTime?:int|string|\DateTimeInterface, name:string, origin?:"SYSTEM"|"CUSTOMER", status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, type:"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", visibilityStatus:"SAVED"|"PUBLISHED"}, versionNumber?:int}>
     */
    public function getAIAgentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{aiGuardrailId:string, assistantId:string} $args
     * @return \AWS\Result<array{aiGuardrail?:array{aiGuardrailArn:string, aiGuardrailId:string, assistantArn:string, assistantId:string, blockedInputMessaging:string, blockedOutputsMessaging:string, contentPolicyConfig?:array{filtersConfig:array<array{inputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", outputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", type:"SEXUAL"|"VIOLENCE"|"HATE"|"INSULTS"|"MISCONDUCT"|"PROMPT_ATTACK"}>}, contextualGroundingPolicyConfig?:array{filtersConfig:array<array{threshold:float, type:"GROUNDING"|"RELEVANCE"}>}, description?:string, modifiedTime?:int|string|\DateTimeInterface, name:string, sensitiveInformationPolicyConfig?:array{piiEntitiesConfig?:array<array{action:"BLOCK"|"ANONYMIZE", type:"ADDRESS"|"AGE"|"AWS_ACCESS_KEY"|"AWS_SECRET_KEY"|"CA_HEALTH_NUMBER"|"CA_SOCIAL_INSURANCE_NUMBER"|"CREDIT_DEBIT_CARD_CVV"|"CREDIT_DEBIT_CARD_EXPIRY"|"CREDIT_DEBIT_CARD_NUMBER"|"DRIVER_ID"|"EMAIL"|"INTERNATIONAL_BANK_ACCOUNT_NUMBER"|"IP_ADDRESS"|"LICENSE_PLATE"|"MAC_ADDRESS"|"NAME"|"PASSWORD"|"PHONE"|"PIN"|"SWIFT_CODE"|"UK_NATIONAL_HEALTH_SERVICE_NUMBER"|"UK_NATIONAL_INSURANCE_NUMBER"|"UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER"|"URL"|"USERNAME"|"US_BANK_ACCOUNT_NUMBER"|"US_BANK_ROUTING_NUMBER"|"US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER"|"US_PASSPORT_NUMBER"|"US_SOCIAL_SECURITY_NUMBER"|"VEHICLE_IDENTIFICATION_NUMBER"}>, regexesConfig?:array<array{action:"BLOCK"|"ANONYMIZE", description?:string, name:string, pattern:string}>}, status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, topicPolicyConfig?:array{topicsConfig:array<array{definition:string, examples?:array<string>, name:string, type:"DENY"}>}, visibilityStatus:"SAVED"|"PUBLISHED", wordPolicyConfig?:array{managedWordListsConfig?:array<array{type:"PROFANITY"}>, wordsConfig?:array<array{text:string}>}}, versionNumber?:int}>
     */
    public function getAIGuardrail(array $args): \AWS\Result { }

    /**
     * @param array{aiGuardrailId:string, assistantId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{aiGuardrail?:array{aiGuardrailArn:string, aiGuardrailId:string, assistantArn:string, assistantId:string, blockedInputMessaging:string, blockedOutputsMessaging:string, contentPolicyConfig?:array{filtersConfig:array<array{inputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", outputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", type:"SEXUAL"|"VIOLENCE"|"HATE"|"INSULTS"|"MISCONDUCT"|"PROMPT_ATTACK"}>}, contextualGroundingPolicyConfig?:array{filtersConfig:array<array{threshold:float, type:"GROUNDING"|"RELEVANCE"}>}, description?:string, modifiedTime?:int|string|\DateTimeInterface, name:string, sensitiveInformationPolicyConfig?:array{piiEntitiesConfig?:array<array{action:"BLOCK"|"ANONYMIZE", type:"ADDRESS"|"AGE"|"AWS_ACCESS_KEY"|"AWS_SECRET_KEY"|"CA_HEALTH_NUMBER"|"CA_SOCIAL_INSURANCE_NUMBER"|"CREDIT_DEBIT_CARD_CVV"|"CREDIT_DEBIT_CARD_EXPIRY"|"CREDIT_DEBIT_CARD_NUMBER"|"DRIVER_ID"|"EMAIL"|"INTERNATIONAL_BANK_ACCOUNT_NUMBER"|"IP_ADDRESS"|"LICENSE_PLATE"|"MAC_ADDRESS"|"NAME"|"PASSWORD"|"PHONE"|"PIN"|"SWIFT_CODE"|"UK_NATIONAL_HEALTH_SERVICE_NUMBER"|"UK_NATIONAL_INSURANCE_NUMBER"|"UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER"|"URL"|"USERNAME"|"US_BANK_ACCOUNT_NUMBER"|"US_BANK_ROUTING_NUMBER"|"US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER"|"US_PASSPORT_NUMBER"|"US_SOCIAL_SECURITY_NUMBER"|"VEHICLE_IDENTIFICATION_NUMBER"}>, regexesConfig?:array<array{action:"BLOCK"|"ANONYMIZE", description?:string, name:string, pattern:string}>}, status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, topicPolicyConfig?:array{topicsConfig:array<array{definition:string, examples?:array<string>, name:string, type:"DENY"}>}, visibilityStatus:"SAVED"|"PUBLISHED", wordPolicyConfig?:array{managedWordListsConfig?:array<array{type:"PROFANITY"}>, wordsConfig?:array<array{text:string}>}}, versionNumber?:int}>
     */
    public function getAIGuardrailAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{aiPromptId:string, assistantId:string} $args
     * @return \AWS\Result<array{aiPrompt?:array{aiPromptArn:string, aiPromptId:string, apiFormat:"ANTHROPIC_CLAUDE_MESSAGES"|"ANTHROPIC_CLAUDE_TEXT_COMPLETIONS", assistantArn:string, assistantId:string, description?:string, modelId:string, modifiedTime?:int|string|\DateTimeInterface, name:string, origin?:"SYSTEM"|"CUSTOMER", status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, templateConfiguration:array{textFullAIPromptEditTemplateConfiguration?:array{text:string}}, templateType:"TEXT", type:"ANSWER_GENERATION"|"INTENT_LABELING_GENERATION"|"QUERY_REFORMULATION"|"SELF_SERVICE_PRE_PROCESSING"|"SELF_SERVICE_ANSWER_GENERATION", visibilityStatus:"SAVED"|"PUBLISHED"}, versionNumber?:int}>
     */
    public function getAIPrompt(array $args): \AWS\Result { }

    /**
     * @param array{aiPromptId:string, assistantId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{aiPrompt?:array{aiPromptArn:string, aiPromptId:string, apiFormat:"ANTHROPIC_CLAUDE_MESSAGES"|"ANTHROPIC_CLAUDE_TEXT_COMPLETIONS", assistantArn:string, assistantId:string, description?:string, modelId:string, modifiedTime?:int|string|\DateTimeInterface, name:string, origin?:"SYSTEM"|"CUSTOMER", status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, templateConfiguration:array{textFullAIPromptEditTemplateConfiguration?:array{text:string}}, templateType:"TEXT", type:"ANSWER_GENERATION"|"INTENT_LABELING_GENERATION"|"QUERY_REFORMULATION"|"SELF_SERVICE_PRE_PROCESSING"|"SELF_SERVICE_ANSWER_GENERATION", visibilityStatus:"SAVED"|"PUBLISHED"}, versionNumber?:int}>
     */
    public function getAIPromptAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assistantId:string} $args
     * @return \AWS\Result<array{assistant?:array{aiAgentConfiguration?:array<"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", array{aiAgentId:string}>, assistantArn:string, assistantId:string, capabilityConfiguration?:array{type?:"V1"|"V2"}, description?:string, integrationConfiguration?:array{topicIntegrationArn?:string}, name:string, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, type:"AGENT"}}>
     */
    public function getAssistant(array $args): \AWS\Result { }

    /**
     * @param array{assistantId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assistant?:array{aiAgentConfiguration?:array<"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", array{aiAgentId:string}>, assistantArn:string, assistantId:string, capabilityConfiguration?:array{type?:"V1"|"V2"}, description?:string, integrationConfiguration?:array{topicIntegrationArn?:string}, name:string, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, type:"AGENT"}}>
     */
    public function getAssistantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assistantAssociationId:string, assistantId:string} $args
     * @return \AWS\Result<array{assistantAssociation?:array{assistantArn:string, assistantAssociationArn:string, assistantAssociationId:string, assistantId:string, associationData:array{knowledgeBaseAssociation?:array{knowledgeBaseArn?:string, knowledgeBaseId?:string}}, associationType:"KNOWLEDGE_BASE", tags?:array<string, string>}}>
     */
    public function getAssistantAssociation(array $args): \AWS\Result { }

    /**
     * @param array{assistantAssociationId:string, assistantId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assistantAssociation?:array{assistantArn:string, assistantAssociationArn:string, assistantAssociationId:string, assistantId:string, associationData:array{knowledgeBaseAssociation?:array{knowledgeBaseArn?:string, knowledgeBaseId?:string}}, associationType:"KNOWLEDGE_BASE", tags?:array<string, string>}}>
     */
    public function getAssistantAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{contentId:string, knowledgeBaseId:string} $args
     * @return \AWS\Result<array{content?:array{contentArn:string, contentId:string, contentType:string, knowledgeBaseArn:string, knowledgeBaseId:string, linkOutUri?:string, metadata:array<string, string>, name:string, revisionId:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_FAILED", tags?:array<string, string>, title:string, url:string, urlExpiry:int|string|\DateTimeInterface}}>
     */
    public function getContent(array $args): \AWS\Result { }

    /**
     * @param array{contentId:string, knowledgeBaseId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{content?:array{contentArn:string, contentId:string, contentType:string, knowledgeBaseArn:string, knowledgeBaseId:string, linkOutUri?:string, metadata:array<string, string>, name:string, revisionId:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_FAILED", tags?:array<string, string>, title:string, url:string, urlExpiry:int|string|\DateTimeInterface}}>
     */
    public function getContentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{contentAssociationId:string, contentId:string, knowledgeBaseId:string} $args
     * @return \AWS\Result<array{contentAssociation?:array{associationData:array{amazonConnectGuideAssociation?:array{flowId?:string}}, associationType:"AMAZON_CONNECT_GUIDE", contentArn:string, contentAssociationArn:string, contentAssociationId:string, contentId:string, knowledgeBaseArn:string, knowledgeBaseId:string, tags?:array<string, string>}}>
     */
    public function getContentAssociation(array $args): \AWS\Result { }

    /**
     * @param array{contentAssociationId:string, contentId:string, knowledgeBaseId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{contentAssociation?:array{associationData:array{amazonConnectGuideAssociation?:array{flowId?:string}}, associationType:"AMAZON_CONNECT_GUIDE", contentArn:string, contentAssociationArn:string, contentAssociationId:string, contentId:string, knowledgeBaseArn:string, knowledgeBaseId:string, tags?:array<string, string>}}>
     */
    public function getContentAssociationAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{contentId:string, knowledgeBaseId:string} $args
     * @return \AWS\Result<array{contentSummary?:array{contentArn:string, contentId:string, contentType:string, knowledgeBaseArn:string, knowledgeBaseId:string, metadata:array<string, string>, name:string, revisionId:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_FAILED", tags?:array<string, string>, title:string}}>
     */
    public function getContentSummary(array $args): \AWS\Result { }

    /**
     * @param array{contentId:string, knowledgeBaseId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{contentSummary?:array{contentArn:string, contentId:string, contentType:string, knowledgeBaseArn:string, knowledgeBaseId:string, metadata:array<string, string>, name:string, revisionId:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_FAILED", tags?:array<string, string>, title:string}}>
     */
    public function getContentSummaryAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{importJobId:string, knowledgeBaseId:string} $args
     * @return \AWS\Result<array{importJob?:array{createdTime:int|string|\DateTimeInterface, externalSourceConfiguration?:array{configuration:array{connectConfiguration?:array{instanceId?:string}}, source:"AMAZON_CONNECT"}, failedRecordReport?:string, importJobId:string, importJobType:"QUICK_RESPONSES", knowledgeBaseArn:string, knowledgeBaseId:string, lastModifiedTime:int|string|\DateTimeInterface, metadata?:array<string, string>, status:"START_IN_PROGRESS"|"FAILED"|"COMPLETE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", uploadId:string, url:string, urlExpiry:int|string|\DateTimeInterface}}>
     */
    public function getImportJob(array $args): \AWS\Result { }

    /**
     * @param array{importJobId:string, knowledgeBaseId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{importJob?:array{createdTime:int|string|\DateTimeInterface, externalSourceConfiguration?:array{configuration:array{connectConfiguration?:array{instanceId?:string}}, source:"AMAZON_CONNECT"}, failedRecordReport?:string, importJobId:string, importJobType:"QUICK_RESPONSES", knowledgeBaseArn:string, knowledgeBaseId:string, lastModifiedTime:int|string|\DateTimeInterface, metadata?:array<string, string>, status:"START_IN_PROGRESS"|"FAILED"|"COMPLETE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", uploadId:string, url:string, urlExpiry:int|string|\DateTimeInterface}}>
     */
    public function getImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{knowledgeBaseId:string} $args
     * @return \AWS\Result<array{knowledgeBase?:array{description?:string, ingestionFailureReasons?:array<string>, ingestionStatus?:"SYNC_FAILED"|"SYNCING_IN_PROGRESS"|"SYNC_SUCCESS"|"CREATE_IN_PROGRESS", knowledgeBaseArn:string, knowledgeBaseId:string, knowledgeBaseType:"EXTERNAL"|"CUSTOM"|"QUICK_RESPONSES"|"MESSAGE_TEMPLATES"|"MANAGED", lastContentModificationTime?:int|string|\DateTimeInterface, name:string, renderingConfiguration?:array{templateUri?:string}, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, sourceConfiguration?:array{appIntegrations?:array{appIntegrationArn:string, objectFields?:array<string>}, managedSourceConfiguration?:array{webCrawlerConfiguration?:array{crawlerLimits?:array{rateLimit?:int}, exclusionFilters?:array<string>, inclusionFilters?:array<string>, scope?:"HOST_ONLY"|"SUBDOMAINS", urlConfiguration:array{seedUrls?:array<array{url?:string}>}}}}, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, vectorIngestionConfiguration?:array{chunkingConfiguration?:array{chunkingStrategy:"FIXED_SIZE"|"NONE"|"HIERARCHICAL"|"SEMANTIC", fixedSizeChunkingConfiguration?:array{maxTokens:int, overlapPercentage:int}, hierarchicalChunkingConfiguration?:array{levelConfigurations:array<array{maxTokens:int}>, overlapTokens:int}, semanticChunkingConfiguration?:array{breakpointPercentileThreshold:int, bufferSize:int, maxTokens:int}}, parsingConfiguration?:array{bedrockFoundationModelConfiguration?:array{modelArn:string, parsingPrompt?:array{parsingPromptText:string}}, parsingStrategy:"BEDROCK_FOUNDATION_MODEL"}}}}>
     */
    public function getKnowledgeBase(array $args): \AWS\Result { }

    /**
     * @param array{knowledgeBaseId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{knowledgeBase?:array{description?:string, ingestionFailureReasons?:array<string>, ingestionStatus?:"SYNC_FAILED"|"SYNCING_IN_PROGRESS"|"SYNC_SUCCESS"|"CREATE_IN_PROGRESS", knowledgeBaseArn:string, knowledgeBaseId:string, knowledgeBaseType:"EXTERNAL"|"CUSTOM"|"QUICK_RESPONSES"|"MESSAGE_TEMPLATES"|"MANAGED", lastContentModificationTime?:int|string|\DateTimeInterface, name:string, renderingConfiguration?:array{templateUri?:string}, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, sourceConfiguration?:array{appIntegrations?:array{appIntegrationArn:string, objectFields?:array<string>}, managedSourceConfiguration?:array{webCrawlerConfiguration?:array{crawlerLimits?:array{rateLimit?:int}, exclusionFilters?:array<string>, inclusionFilters?:array<string>, scope?:"HOST_ONLY"|"SUBDOMAINS", urlConfiguration:array{seedUrls?:array<array{url?:string}>}}}}, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, vectorIngestionConfiguration?:array{chunkingConfiguration?:array{chunkingStrategy:"FIXED_SIZE"|"NONE"|"HIERARCHICAL"|"SEMANTIC", fixedSizeChunkingConfiguration?:array{maxTokens:int, overlapPercentage:int}, hierarchicalChunkingConfiguration?:array{levelConfigurations:array<array{maxTokens:int}>, overlapTokens:int}, semanticChunkingConfiguration?:array{breakpointPercentileThreshold:int, bufferSize:int, maxTokens:int}}, parsingConfiguration?:array{bedrockFoundationModelConfiguration?:array{modelArn:string, parsingPrompt?:array{parsingPromptText:string}}, parsingStrategy:"BEDROCK_FOUNDATION_MODEL"}}}}>
     */
    public function getKnowledgeBaseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{knowledgeBaseId:string, messageTemplateId:string} $args
     * @return \AWS\Result<array{messageTemplate?:array{attachments?:array<array{attachmentId:string, contentDisposition:"ATTACHMENT", name:string, uploadedTime:int|string|\DateTimeInterface, url:string, urlExpiry:int|string|\DateTimeInterface}>, attributeTypes?:array<"SYSTEM"|"AGENT"|"CUSTOMER_PROFILE"|"CUSTOM">, channelSubtype:"EMAIL"|"SMS", content:array{email?:array{body?:array{html?:array{content?:mixed}, plainText?:array{content?:mixed}}, headers?:array<array{name?:string, value?:string}>, subject?:string}, sms?:array{body?:array{plainText?:array{content?:mixed}}}}, createdTime:int|string|\DateTimeInterface, defaultAttributes?:array{agentAttributes?:array{firstName?:string, lastName?:string}, customAttributes?:array<string, string>, customerProfileAttributes?:array{accountNumber?:string, additionalInformation?:string, address1?:string, address2?:string, address3?:string, address4?:string, billingAddress1?:string, billingAddress2?:string, billingAddress3?:string, billingAddress4?:string, billingCity?:string, billingCountry?:string, billingCounty?:string, billingPostalCode?:string, billingProvince?:string, billingState?:string, birthDate?:string, businessEmailAddress?:string, businessName?:string, businessPhoneNumber?:string, city?:string, country?:string, county?:string, custom?:array<string, string>, emailAddress?:string, firstName?:string, gender?:string, homePhoneNumber?:string, lastName?:string, mailingAddress1?:string, mailingAddress2?:string, mailingAddress3?:string, mailingAddress4?:string, mailingCity?:string, mailingCountry?:string, mailingCounty?:string, mailingPostalCode?:string, mailingProvince?:string, mailingState?:string, middleName?:string, mobilePhoneNumber?:string, partyType?:string, phoneNumber?:string, postalCode?:string, profileARN?:string, profileId?:string, province?:string, shippingAddress1?:string, shippingAddress2?:string, shippingAddress3?:string, shippingAddress4?:string, shippingCity?:string, shippingCountry?:string, shippingCounty?:string, shippingPostalCode?:string, shippingProvince?:string, shippingState?:string, state?:string}, systemAttributes?:array{customerEndpoint?:array{address?:string}, name?:string, systemEndpoint?:array{address?:string}}}, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, isActive?:bool, knowledgeBaseArn:string, knowledgeBaseId:string, language?:string, lastModifiedBy:string, lastModifiedTime:int|string|\DateTimeInterface, messageTemplateArn:string, messageTemplateContentSha256:string, messageTemplateId:string, name:string, tags?:array<string, string>, versionNumber?:int}}>
     */
    public function getMessageTemplate(array $args): \AWS\Result { }

    /**
     * @param array{knowledgeBaseId:string, messageTemplateId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{messageTemplate?:array{attachments?:array<array{attachmentId:string, contentDisposition:"ATTACHMENT", name:string, uploadedTime:int|string|\DateTimeInterface, url:string, urlExpiry:int|string|\DateTimeInterface}>, attributeTypes?:array<"SYSTEM"|"AGENT"|"CUSTOMER_PROFILE"|"CUSTOM">, channelSubtype:"EMAIL"|"SMS", content:array{email?:array{body?:array{html?:array{content?:mixed}, plainText?:array{content?:mixed}}, headers?:array<array{name?:string, value?:string}>, subject?:string}, sms?:array{body?:array{plainText?:array{content?:mixed}}}}, createdTime:int|string|\DateTimeInterface, defaultAttributes?:array{agentAttributes?:array{firstName?:string, lastName?:string}, customAttributes?:array<string, string>, customerProfileAttributes?:array{accountNumber?:string, additionalInformation?:string, address1?:string, address2?:string, address3?:string, address4?:string, billingAddress1?:string, billingAddress2?:string, billingAddress3?:string, billingAddress4?:string, billingCity?:string, billingCountry?:string, billingCounty?:string, billingPostalCode?:string, billingProvince?:string, billingState?:string, birthDate?:string, businessEmailAddress?:string, businessName?:string, businessPhoneNumber?:string, city?:string, country?:string, county?:string, custom?:array<string, string>, emailAddress?:string, firstName?:string, gender?:string, homePhoneNumber?:string, lastName?:string, mailingAddress1?:string, mailingAddress2?:string, mailingAddress3?:string, mailingAddress4?:string, mailingCity?:string, mailingCountry?:string, mailingCounty?:string, mailingPostalCode?:string, mailingProvince?:string, mailingState?:string, middleName?:string, mobilePhoneNumber?:string, partyType?:string, phoneNumber?:string, postalCode?:string, profileARN?:string, profileId?:string, province?:string, shippingAddress1?:string, shippingAddress2?:string, shippingAddress3?:string, shippingAddress4?:string, shippingCity?:string, shippingCountry?:string, shippingCounty?:string, shippingPostalCode?:string, shippingProvince?:string, shippingState?:string, state?:string}, systemAttributes?:array{customerEndpoint?:array{address?:string}, name?:string, systemEndpoint?:array{address?:string}}}, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, isActive?:bool, knowledgeBaseArn:string, knowledgeBaseId:string, language?:string, lastModifiedBy:string, lastModifiedTime:int|string|\DateTimeInterface, messageTemplateArn:string, messageTemplateContentSha256:string, messageTemplateId:string, name:string, tags?:array<string, string>, versionNumber?:int}}>
     */
    public function getMessageTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assistantId:string, nextMessageToken:string, sessionId:string} $args
     * @return \AWS\Result<array{conversationSessionData?:array<array{key:string, value:array{stringValue?:string}}>, conversationState:array{reason?:"SUCCESS"|"FAILED"|"REJECTED", status:"CLOSED"|"READY"|"PROCESSING"}, nextMessageToken?:string, requestMessageId:string, response:array{messageId:string, participant:"CUSTOMER"|"AGENT"|"BOT", timestamp:int|string|\DateTimeInterface, value:array{text?:array{value?:mixed}}}, type:"TEXT"}>
     */
    public function getNextMessage(array $args): \AWS\Result { }

    /**
     * @param array{assistantId:string, nextMessageToken:string, sessionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{conversationSessionData?:array<array{key:string, value:array{stringValue?:string}}>, conversationState:array{reason?:"SUCCESS"|"FAILED"|"REJECTED", status:"CLOSED"|"READY"|"PROCESSING"}, nextMessageToken?:string, requestMessageId:string, response:array{messageId:string, participant:"CUSTOMER"|"AGENT"|"BOT", timestamp:int|string|\DateTimeInterface, value:array{text?:array{value?:mixed}}}, type:"TEXT"}>
     */
    public function getNextMessageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{knowledgeBaseId:string, quickResponseId:string} $args
     * @return \AWS\Result<array{quickResponse?:array{channels?:array<string>, contentType:string, contents?:array{markdown?:array{content?:string}, plainText?:array{content?:string}}, createdTime:int|string|\DateTimeInterface, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, isActive?:bool, knowledgeBaseArn:string, knowledgeBaseId:string, language?:string, lastModifiedBy?:string, lastModifiedTime:int|string|\DateTimeInterface, name:string, quickResponseArn:string, quickResponseId:string, shortcutKey?:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED", tags?:array<string, string>}}>
     */
    public function getQuickResponse(array $args): \AWS\Result { }

    /**
     * @param array{knowledgeBaseId:string, quickResponseId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{quickResponse?:array{channels?:array<string>, contentType:string, contents?:array{markdown?:array{content?:string}, plainText?:array{content?:string}}, createdTime:int|string|\DateTimeInterface, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, isActive?:bool, knowledgeBaseArn:string, knowledgeBaseId:string, language?:string, lastModifiedBy?:string, lastModifiedTime:int|string|\DateTimeInterface, name:string, quickResponseArn:string, quickResponseId:string, shortcutKey?:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED", tags?:array<string, string>}}>
     */
    public function getQuickResponseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assistantId:string, maxResults?:int, sessionId:string, waitTimeSeconds?:int} $args
     * @return \AWS\Result<array{recommendations:array<array{data?:array{details:array{contentData?:array{rankingData:array{relevanceLevel?:"HIGH"|"MEDIUM"|"LOW", relevanceScore?:float}, textData:array{excerpt?:array{highlights?:array<array{beginOffsetInclusive?:int, endOffsetExclusive?:int}>, text?:string}, title?:array{highlights?:array<array{beginOffsetInclusive?:int, endOffsetExclusive?:int}>, text?:string}}}, generativeData?:array{completion:string, rankingData:array{relevanceLevel?:"HIGH"|"MEDIUM"|"LOW", relevanceScore?:float}, references:array<array{details:mixed, reference:array{contentReference?:array{contentArn?:string, contentId?:string, knowledgeBaseArn?:string, knowledgeBaseId?:string, referenceType?:"WEB_CRAWLER"|"KNOWLEDGE_BASE", sourceURL?:string}, generativeReference?:array{generationId?:string, modelId?:string}}}>}, intentDetectedData?:array{intent:string, intentId:string}, sourceContentData?:array{citationSpan?:array{beginOffsetInclusive?:int, endOffsetExclusive?:int}, id:string, rankingData:array{relevanceLevel?:"HIGH"|"MEDIUM"|"LOW", relevanceScore?:float}, textData:array{excerpt?:array{highlights?:array<array{beginOffsetInclusive?:int, endOffsetExclusive?:int}>, text?:string}, title?:array{highlights?:array<array{beginOffsetInclusive?:int, endOffsetExclusive?:int}>, text?:string}}, type:"KNOWLEDGE_CONTENT"}}, reference:array{contentReference?:array{contentArn?:string, contentId?:string, knowledgeBaseArn?:string, knowledgeBaseId?:string, referenceType?:"WEB_CRAWLER"|"KNOWLEDGE_BASE", sourceURL?:string}, generativeReference?:array{generationId?:string, modelId?:string}}}, document?:array{contentReference:array{contentArn?:string, contentId?:string, knowledgeBaseArn?:string, knowledgeBaseId?:string, referenceType?:"WEB_CRAWLER"|"KNOWLEDGE_BASE", sourceURL?:string}, excerpt?:array{highlights?:array<array{beginOffsetInclusive?:int, endOffsetExclusive?:int}>, text?:string}, title?:array{highlights?:array<array{beginOffsetInclusive?:int, endOffsetExclusive?:int}>, text?:string}}, recommendationId:string, relevanceLevel?:"HIGH"|"MEDIUM"|"LOW", relevanceScore?:float, type?:"KNOWLEDGE_CONTENT"|"GENERATIVE_RESPONSE"|"GENERATIVE_ANSWER"|"DETECTED_INTENT"}>, triggers?:array<array{data:array{query?:array{text?:string}}, id:string, recommendationIds:array<string>, source:"ISSUE_DETECTION"|"RULE_EVALUATION"|"OTHER", type:"QUERY"|"GENERATIVE"}>}>
     */
    public function getRecommendations(array $args): \AWS\Result { }

    /**
     * @param array{assistantId:string, maxResults?:int, sessionId:string, waitTimeSeconds?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{recommendations:array<array{data?:array{details:array{contentData?:array{rankingData:array{relevanceLevel?:"HIGH"|"MEDIUM"|"LOW", relevanceScore?:float}, textData:array{excerpt?:array{highlights?:array<array{beginOffsetInclusive?:int, endOffsetExclusive?:int}>, text?:string}, title?:array{highlights?:array<array{beginOffsetInclusive?:int, endOffsetExclusive?:int}>, text?:string}}}, generativeData?:array{completion:string, rankingData:array{relevanceLevel?:"HIGH"|"MEDIUM"|"LOW", relevanceScore?:float}, references:array<array{details:mixed, reference:array{contentReference?:array{contentArn?:string, contentId?:string, knowledgeBaseArn?:string, knowledgeBaseId?:string, referenceType?:"WEB_CRAWLER"|"KNOWLEDGE_BASE", sourceURL?:string}, generativeReference?:array{generationId?:string, modelId?:string}}}>}, intentDetectedData?:array{intent:string, intentId:string}, sourceContentData?:array{citationSpan?:array{beginOffsetInclusive?:int, endOffsetExclusive?:int}, id:string, rankingData:array{relevanceLevel?:"HIGH"|"MEDIUM"|"LOW", relevanceScore?:float}, textData:array{excerpt?:array{highlights?:array<array{beginOffsetInclusive?:int, endOffsetExclusive?:int}>, text?:string}, title?:array{highlights?:array<array{beginOffsetInclusive?:int, endOffsetExclusive?:int}>, text?:string}}, type:"KNOWLEDGE_CONTENT"}}, reference:array{contentReference?:array{contentArn?:string, contentId?:string, knowledgeBaseArn?:string, knowledgeBaseId?:string, referenceType?:"WEB_CRAWLER"|"KNOWLEDGE_BASE", sourceURL?:string}, generativeReference?:array{generationId?:string, modelId?:string}}}, document?:array{contentReference:array{contentArn?:string, contentId?:string, knowledgeBaseArn?:string, knowledgeBaseId?:string, referenceType?:"WEB_CRAWLER"|"KNOWLEDGE_BASE", sourceURL?:string}, excerpt?:array{highlights?:array<array{beginOffsetInclusive?:int, endOffsetExclusive?:int}>, text?:string}, title?:array{highlights?:array<array{beginOffsetInclusive?:int, endOffsetExclusive?:int}>, text?:string}}, recommendationId:string, relevanceLevel?:"HIGH"|"MEDIUM"|"LOW", relevanceScore?:float, type?:"KNOWLEDGE_CONTENT"|"GENERATIVE_RESPONSE"|"GENERATIVE_ANSWER"|"DETECTED_INTENT"}>, triggers?:array<array{data:array{query?:array{text?:string}}, id:string, recommendationIds:array<string>, source:"ISSUE_DETECTION"|"RULE_EVALUATION"|"OTHER", type:"QUERY"|"GENERATIVE"}>}>
     */
    public function getRecommendationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assistantId:string, sessionId:string} $args
     * @return \AWS\Result<array{session?:array{aiAgentConfiguration?:array<"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", array{aiAgentId:string}>, description?:string, integrationConfiguration?:array{topicIntegrationArn?:string}, name:string, sessionArn:string, sessionId:string, tagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, tags?:array<string, string>}}>
     */
    public function getSession(array $args): \AWS\Result { }

    /**
     * @param array{assistantId:string, sessionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{session?:array{aiAgentConfiguration?:array<"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", array{aiAgentId:string}>, description?:string, integrationConfiguration?:array{topicIntegrationArn?:string}, name:string, sessionArn:string, sessionId:string, tagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, tags?:array<string, string>}}>
     */
    public function getSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{aiAgentId:string, assistantId:string, maxResults?:int, nextToken?:string, origin?:"SYSTEM"|"CUSTOMER"} $args
     * @return \AWS\Result<array{aiAgentVersionSummaries:array<array{aiAgentSummary?:array{aiAgentArn:string, aiAgentId:string, assistantArn:string, assistantId:string, configuration?:array{answerRecommendationAIAgentConfiguration?:array{answerGenerationAIGuardrailId?:string, answerGenerationAIPromptId?:string, associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, intentLabelingGenerationAIPromptId?:string, locale?:string, queryReformulationAIPromptId?:string}, manualSearchAIAgentConfiguration?:array{answerGenerationAIGuardrailId?:string, answerGenerationAIPromptId?:string, associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, locale?:string}, selfServiceAIAgentConfiguration?:array{associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, selfServiceAIGuardrailId?:string, selfServiceAnswerGenerationAIPromptId?:string, selfServicePreProcessingAIPromptId?:string}}, description?:string, modifiedTime?:int|string|\DateTimeInterface, name:string, origin?:"SYSTEM"|"CUSTOMER", status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, type:"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", visibilityStatus:"SAVED"|"PUBLISHED"}, versionNumber?:int}>, nextToken?:string}>
     */
    public function listAIAgentVersions(array $args): \AWS\Result { }

    /**
     * @param array{aiAgentId:string, assistantId:string, maxResults?:int, nextToken?:string, origin?:"SYSTEM"|"CUSTOMER"} $args
     * @return \GuzzleHttp\Promise\Promise<array{aiAgentVersionSummaries:array<array{aiAgentSummary?:array{aiAgentArn:string, aiAgentId:string, assistantArn:string, assistantId:string, configuration?:array{answerRecommendationAIAgentConfiguration?:array{answerGenerationAIGuardrailId?:string, answerGenerationAIPromptId?:string, associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, intentLabelingGenerationAIPromptId?:string, locale?:string, queryReformulationAIPromptId?:string}, manualSearchAIAgentConfiguration?:array{answerGenerationAIGuardrailId?:string, answerGenerationAIPromptId?:string, associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, locale?:string}, selfServiceAIAgentConfiguration?:array{associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, selfServiceAIGuardrailId?:string, selfServiceAnswerGenerationAIPromptId?:string, selfServicePreProcessingAIPromptId?:string}}, description?:string, modifiedTime?:int|string|\DateTimeInterface, name:string, origin?:"SYSTEM"|"CUSTOMER", status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, type:"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", visibilityStatus:"SAVED"|"PUBLISHED"}, versionNumber?:int}>, nextToken?:string}>
     */
    public function listAIAgentVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assistantId:string, maxResults?:int, nextToken?:string, origin?:"SYSTEM"|"CUSTOMER"} $args
     * @return \AWS\Result<array{aiAgentSummaries:array<array{aiAgentArn:string, aiAgentId:string, assistantArn:string, assistantId:string, configuration?:array{answerRecommendationAIAgentConfiguration?:array{answerGenerationAIGuardrailId?:string, answerGenerationAIPromptId?:string, associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, intentLabelingGenerationAIPromptId?:string, locale?:string, queryReformulationAIPromptId?:string}, manualSearchAIAgentConfiguration?:array{answerGenerationAIGuardrailId?:string, answerGenerationAIPromptId?:string, associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, locale?:string}, selfServiceAIAgentConfiguration?:array{associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, selfServiceAIGuardrailId?:string, selfServiceAnswerGenerationAIPromptId?:string, selfServicePreProcessingAIPromptId?:string}}, description?:string, modifiedTime?:int|string|\DateTimeInterface, name:string, origin?:"SYSTEM"|"CUSTOMER", status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, type:"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", visibilityStatus:"SAVED"|"PUBLISHED"}>, nextToken?:string}>
     */
    public function listAIAgents(array $args): \AWS\Result { }

    /**
     * @param array{assistantId:string, maxResults?:int, nextToken?:string, origin?:"SYSTEM"|"CUSTOMER"} $args
     * @return \GuzzleHttp\Promise\Promise<array{aiAgentSummaries:array<array{aiAgentArn:string, aiAgentId:string, assistantArn:string, assistantId:string, configuration?:array{answerRecommendationAIAgentConfiguration?:array{answerGenerationAIGuardrailId?:string, answerGenerationAIPromptId?:string, associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, intentLabelingGenerationAIPromptId?:string, locale?:string, queryReformulationAIPromptId?:string}, manualSearchAIAgentConfiguration?:array{answerGenerationAIGuardrailId?:string, answerGenerationAIPromptId?:string, associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, locale?:string}, selfServiceAIAgentConfiguration?:array{associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, selfServiceAIGuardrailId?:string, selfServiceAnswerGenerationAIPromptId?:string, selfServicePreProcessingAIPromptId?:string}}, description?:string, modifiedTime?:int|string|\DateTimeInterface, name:string, origin?:"SYSTEM"|"CUSTOMER", status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, type:"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", visibilityStatus:"SAVED"|"PUBLISHED"}>, nextToken?:string}>
     */
    public function listAIAgentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{aiGuardrailId:string, assistantId:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{aiGuardrailVersionSummaries:array<array{aiGuardrailSummary?:array{aiGuardrailArn:string, aiGuardrailId:string, assistantArn:string, assistantId:string, description?:string, modifiedTime?:int|string|\DateTimeInterface, name:string, status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, visibilityStatus:"SAVED"|"PUBLISHED"}, versionNumber?:int}>, nextToken?:string}>
     */
    public function listAIGuardrailVersions(array $args): \AWS\Result { }

    /**
     * @param array{aiGuardrailId:string, assistantId:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{aiGuardrailVersionSummaries:array<array{aiGuardrailSummary?:array{aiGuardrailArn:string, aiGuardrailId:string, assistantArn:string, assistantId:string, description?:string, modifiedTime?:int|string|\DateTimeInterface, name:string, status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, visibilityStatus:"SAVED"|"PUBLISHED"}, versionNumber?:int}>, nextToken?:string}>
     */
    public function listAIGuardrailVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assistantId:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{aiGuardrailSummaries:array<array{aiGuardrailArn:string, aiGuardrailId:string, assistantArn:string, assistantId:string, description?:string, modifiedTime?:int|string|\DateTimeInterface, name:string, status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, visibilityStatus:"SAVED"|"PUBLISHED"}>, nextToken?:string}>
     */
    public function listAIGuardrails(array $args): \AWS\Result { }

    /**
     * @param array{assistantId:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{aiGuardrailSummaries:array<array{aiGuardrailArn:string, aiGuardrailId:string, assistantArn:string, assistantId:string, description?:string, modifiedTime?:int|string|\DateTimeInterface, name:string, status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, visibilityStatus:"SAVED"|"PUBLISHED"}>, nextToken?:string}>
     */
    public function listAIGuardrailsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{aiPromptId:string, assistantId:string, maxResults?:int, nextToken?:string, origin?:"SYSTEM"|"CUSTOMER"} $args
     * @return \AWS\Result<array{aiPromptVersionSummaries:array<array{aiPromptSummary?:array{aiPromptArn:string, aiPromptId:string, apiFormat:"ANTHROPIC_CLAUDE_MESSAGES"|"ANTHROPIC_CLAUDE_TEXT_COMPLETIONS", assistantArn:string, assistantId:string, description?:string, modelId:string, modifiedTime?:int|string|\DateTimeInterface, name:string, origin?:"SYSTEM"|"CUSTOMER", status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, templateType:"TEXT", type:"ANSWER_GENERATION"|"INTENT_LABELING_GENERATION"|"QUERY_REFORMULATION"|"SELF_SERVICE_PRE_PROCESSING"|"SELF_SERVICE_ANSWER_GENERATION", visibilityStatus:"SAVED"|"PUBLISHED"}, versionNumber?:int}>, nextToken?:string}>
     */
    public function listAIPromptVersions(array $args): \AWS\Result { }

    /**
     * @param array{aiPromptId:string, assistantId:string, maxResults?:int, nextToken?:string, origin?:"SYSTEM"|"CUSTOMER"} $args
     * @return \GuzzleHttp\Promise\Promise<array{aiPromptVersionSummaries:array<array{aiPromptSummary?:array{aiPromptArn:string, aiPromptId:string, apiFormat:"ANTHROPIC_CLAUDE_MESSAGES"|"ANTHROPIC_CLAUDE_TEXT_COMPLETIONS", assistantArn:string, assistantId:string, description?:string, modelId:string, modifiedTime?:int|string|\DateTimeInterface, name:string, origin?:"SYSTEM"|"CUSTOMER", status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, templateType:"TEXT", type:"ANSWER_GENERATION"|"INTENT_LABELING_GENERATION"|"QUERY_REFORMULATION"|"SELF_SERVICE_PRE_PROCESSING"|"SELF_SERVICE_ANSWER_GENERATION", visibilityStatus:"SAVED"|"PUBLISHED"}, versionNumber?:int}>, nextToken?:string}>
     */
    public function listAIPromptVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assistantId:string, maxResults?:int, nextToken?:string, origin?:"SYSTEM"|"CUSTOMER"} $args
     * @return \AWS\Result<array{aiPromptSummaries:array<array{aiPromptArn:string, aiPromptId:string, apiFormat:"ANTHROPIC_CLAUDE_MESSAGES"|"ANTHROPIC_CLAUDE_TEXT_COMPLETIONS", assistantArn:string, assistantId:string, description?:string, modelId:string, modifiedTime?:int|string|\DateTimeInterface, name:string, origin?:"SYSTEM"|"CUSTOMER", status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, templateType:"TEXT", type:"ANSWER_GENERATION"|"INTENT_LABELING_GENERATION"|"QUERY_REFORMULATION"|"SELF_SERVICE_PRE_PROCESSING"|"SELF_SERVICE_ANSWER_GENERATION", visibilityStatus:"SAVED"|"PUBLISHED"}>, nextToken?:string}>
     */
    public function listAIPrompts(array $args): \AWS\Result { }

    /**
     * @param array{assistantId:string, maxResults?:int, nextToken?:string, origin?:"SYSTEM"|"CUSTOMER"} $args
     * @return \GuzzleHttp\Promise\Promise<array{aiPromptSummaries:array<array{aiPromptArn:string, aiPromptId:string, apiFormat:"ANTHROPIC_CLAUDE_MESSAGES"|"ANTHROPIC_CLAUDE_TEXT_COMPLETIONS", assistantArn:string, assistantId:string, description?:string, modelId:string, modifiedTime?:int|string|\DateTimeInterface, name:string, origin?:"SYSTEM"|"CUSTOMER", status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, templateType:"TEXT", type:"ANSWER_GENERATION"|"INTENT_LABELING_GENERATION"|"QUERY_REFORMULATION"|"SELF_SERVICE_PRE_PROCESSING"|"SELF_SERVICE_ANSWER_GENERATION", visibilityStatus:"SAVED"|"PUBLISHED"}>, nextToken?:string}>
     */
    public function listAIPromptsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assistantId:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{assistantAssociationSummaries:array<array{assistantArn:string, assistantAssociationArn:string, assistantAssociationId:string, assistantId:string, associationData:array{knowledgeBaseAssociation?:array{knowledgeBaseArn?:string, knowledgeBaseId?:string}}, associationType:"KNOWLEDGE_BASE", tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listAssistantAssociations(array $args): \AWS\Result { }

    /**
     * @param array{assistantId:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assistantAssociationSummaries:array<array{assistantArn:string, assistantAssociationArn:string, assistantAssociationId:string, assistantId:string, associationData:array{knowledgeBaseAssociation?:array{knowledgeBaseArn?:string, knowledgeBaseId?:string}}, associationType:"KNOWLEDGE_BASE", tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listAssistantAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{assistantSummaries:array<array{aiAgentConfiguration?:array<"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", array{aiAgentId:string}>, assistantArn:string, assistantId:string, capabilityConfiguration?:array{type?:"V1"|"V2"}, description?:string, integrationConfiguration?:array{topicIntegrationArn?:string}, name:string, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, type:"AGENT"}>, nextToken?:string}>
     */
    public function listAssistants(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{assistantSummaries:array<array{aiAgentConfiguration?:array<"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", array{aiAgentId:string}>, assistantArn:string, assistantId:string, capabilityConfiguration?:array{type?:"V1"|"V2"}, description?:string, integrationConfiguration?:array{topicIntegrationArn?:string}, name:string, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, type:"AGENT"}>, nextToken?:string}>
     */
    public function listAssistantsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{contentId:string, knowledgeBaseId:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{contentAssociationSummaries:array<array{associationData:array{amazonConnectGuideAssociation?:array{flowId?:string}}, associationType:"AMAZON_CONNECT_GUIDE", contentArn:string, contentAssociationArn:string, contentAssociationId:string, contentId:string, knowledgeBaseArn:string, knowledgeBaseId:string, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listContentAssociations(array $args): \AWS\Result { }

    /**
     * @param array{contentId:string, knowledgeBaseId:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{contentAssociationSummaries:array<array{associationData:array{amazonConnectGuideAssociation?:array{flowId?:string}}, associationType:"AMAZON_CONNECT_GUIDE", contentArn:string, contentAssociationArn:string, contentAssociationId:string, contentId:string, knowledgeBaseArn:string, knowledgeBaseId:string, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listContentAssociationsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{knowledgeBaseId:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{contentSummaries:array<array{contentArn:string, contentId:string, contentType:string, knowledgeBaseArn:string, knowledgeBaseId:string, metadata:array<string, string>, name:string, revisionId:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_FAILED", tags?:array<string, string>, title:string}>, nextToken?:string}>
     */
    public function listContents(array $args): \AWS\Result { }

    /**
     * @param array{knowledgeBaseId:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{contentSummaries:array<array{contentArn:string, contentId:string, contentType:string, knowledgeBaseArn:string, knowledgeBaseId:string, metadata:array<string, string>, name:string, revisionId:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_FAILED", tags?:array<string, string>, title:string}>, nextToken?:string}>
     */
    public function listContentsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{knowledgeBaseId:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{importJobSummaries:array<array{createdTime:int|string|\DateTimeInterface, externalSourceConfiguration?:array{configuration:array{connectConfiguration?:array{instanceId?:string}}, source:"AMAZON_CONNECT"}, importJobId:string, importJobType:"QUICK_RESPONSES", knowledgeBaseArn:string, knowledgeBaseId:string, lastModifiedTime:int|string|\DateTimeInterface, metadata?:array<string, string>, status:"START_IN_PROGRESS"|"FAILED"|"COMPLETE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", uploadId:string}>, nextToken?:string}>
     */
    public function listImportJobs(array $args): \AWS\Result { }

    /**
     * @param array{knowledgeBaseId:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{importJobSummaries:array<array{createdTime:int|string|\DateTimeInterface, externalSourceConfiguration?:array{configuration:array{connectConfiguration?:array{instanceId?:string}}, source:"AMAZON_CONNECT"}, importJobId:string, importJobType:"QUICK_RESPONSES", knowledgeBaseArn:string, knowledgeBaseId:string, lastModifiedTime:int|string|\DateTimeInterface, metadata?:array<string, string>, status:"START_IN_PROGRESS"|"FAILED"|"COMPLETE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", uploadId:string}>, nextToken?:string}>
     */
    public function listImportJobsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{knowledgeBaseSummaries:array<array{description?:string, knowledgeBaseArn:string, knowledgeBaseId:string, knowledgeBaseType:"EXTERNAL"|"CUSTOM"|"QUICK_RESPONSES"|"MESSAGE_TEMPLATES"|"MANAGED", name:string, renderingConfiguration?:array{templateUri?:string}, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, sourceConfiguration?:array{appIntegrations?:array{appIntegrationArn:string, objectFields?:array<string>}, managedSourceConfiguration?:array{webCrawlerConfiguration?:array{crawlerLimits?:array{rateLimit?:int}, exclusionFilters?:array<string>, inclusionFilters?:array<string>, scope?:"HOST_ONLY"|"SUBDOMAINS", urlConfiguration:array{seedUrls?:array<array{url?:string}>}}}}, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, vectorIngestionConfiguration?:array{chunkingConfiguration?:array{chunkingStrategy:"FIXED_SIZE"|"NONE"|"HIERARCHICAL"|"SEMANTIC", fixedSizeChunkingConfiguration?:array{maxTokens:int, overlapPercentage:int}, hierarchicalChunkingConfiguration?:array{levelConfigurations:array<array{maxTokens:int}>, overlapTokens:int}, semanticChunkingConfiguration?:array{breakpointPercentileThreshold:int, bufferSize:int, maxTokens:int}}, parsingConfiguration?:array{bedrockFoundationModelConfiguration?:array{modelArn:string, parsingPrompt?:array{parsingPromptText:string}}, parsingStrategy:"BEDROCK_FOUNDATION_MODEL"}}}>, nextToken?:string}>
     */
    public function listKnowledgeBases(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{knowledgeBaseSummaries:array<array{description?:string, knowledgeBaseArn:string, knowledgeBaseId:string, knowledgeBaseType:"EXTERNAL"|"CUSTOM"|"QUICK_RESPONSES"|"MESSAGE_TEMPLATES"|"MANAGED", name:string, renderingConfiguration?:array{templateUri?:string}, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, sourceConfiguration?:array{appIntegrations?:array{appIntegrationArn:string, objectFields?:array<string>}, managedSourceConfiguration?:array{webCrawlerConfiguration?:array{crawlerLimits?:array{rateLimit?:int}, exclusionFilters?:array<string>, inclusionFilters?:array<string>, scope?:"HOST_ONLY"|"SUBDOMAINS", urlConfiguration:array{seedUrls?:array<array{url?:string}>}}}}, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, vectorIngestionConfiguration?:array{chunkingConfiguration?:array{chunkingStrategy:"FIXED_SIZE"|"NONE"|"HIERARCHICAL"|"SEMANTIC", fixedSizeChunkingConfiguration?:array{maxTokens:int, overlapPercentage:int}, hierarchicalChunkingConfiguration?:array{levelConfigurations:array<array{maxTokens:int}>, overlapTokens:int}, semanticChunkingConfiguration?:array{breakpointPercentileThreshold:int, bufferSize:int, maxTokens:int}}, parsingConfiguration?:array{bedrockFoundationModelConfiguration?:array{modelArn:string, parsingPrompt?:array{parsingPromptText:string}}, parsingStrategy:"BEDROCK_FOUNDATION_MODEL"}}}>, nextToken?:string}>
     */
    public function listKnowledgeBasesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{knowledgeBaseId:string, maxResults?:int, messageTemplateId:string, nextToken?:string} $args
     * @return \AWS\Result<array{messageTemplateVersionSummaries:array<array{channelSubtype:"EMAIL"|"SMS", isActive:bool, knowledgeBaseArn:string, knowledgeBaseId:string, messageTemplateArn:string, messageTemplateId:string, name:string, versionNumber:int}>, nextToken?:string}>
     */
    public function listMessageTemplateVersions(array $args): \AWS\Result { }

    /**
     * @param array{knowledgeBaseId:string, maxResults?:int, messageTemplateId:string, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{messageTemplateVersionSummaries:array<array{channelSubtype:"EMAIL"|"SMS", isActive:bool, knowledgeBaseArn:string, knowledgeBaseId:string, messageTemplateArn:string, messageTemplateId:string, name:string, versionNumber:int}>, nextToken?:string}>
     */
    public function listMessageTemplateVersionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{knowledgeBaseId:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{messageTemplateSummaries:array<array{activeVersionNumber?:int, channelSubtype:"EMAIL"|"SMS", createdTime:int|string|\DateTimeInterface, description?:string, knowledgeBaseArn:string, knowledgeBaseId:string, lastModifiedBy:string, lastModifiedTime:int|string|\DateTimeInterface, messageTemplateArn:string, messageTemplateId:string, name:string, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listMessageTemplates(array $args): \AWS\Result { }

    /**
     * @param array{knowledgeBaseId:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{messageTemplateSummaries:array<array{activeVersionNumber?:int, channelSubtype:"EMAIL"|"SMS", createdTime:int|string|\DateTimeInterface, description?:string, knowledgeBaseArn:string, knowledgeBaseId:string, lastModifiedBy:string, lastModifiedTime:int|string|\DateTimeInterface, messageTemplateArn:string, messageTemplateId:string, name:string, tags?:array<string, string>}>, nextToken?:string}>
     */
    public function listMessageTemplatesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assistantId:string, maxResults?:int, nextToken?:string, sessionId:string} $args
     * @return \AWS\Result<array{messages:array<array{messageId:string, participant:"CUSTOMER"|"AGENT"|"BOT", timestamp:int|string|\DateTimeInterface, value:array{text?:array{value?:mixed}}}>, nextToken?:string}>
     */
    public function listMessages(array $args): \AWS\Result { }

    /**
     * @param array{assistantId:string, maxResults?:int, nextToken?:string, sessionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{messages:array<array{messageId:string, participant:"CUSTOMER"|"AGENT"|"BOT", timestamp:int|string|\DateTimeInterface, value:array{text?:array{value?:mixed}}}>, nextToken?:string}>
     */
    public function listMessagesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{knowledgeBaseId:string, maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, quickResponseSummaries:array<array{channels?:array<string>, contentType:string, createdTime:int|string|\DateTimeInterface, description?:string, isActive?:bool, knowledgeBaseArn:string, knowledgeBaseId:string, lastModifiedBy?:string, lastModifiedTime:int|string|\DateTimeInterface, name:string, quickResponseArn:string, quickResponseId:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED", tags?:array<string, string>}>}>
     */
    public function listQuickResponses(array $args): \AWS\Result { }

    /**
     * @param array{knowledgeBaseId:string, maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, quickResponseSummaries:array<array{channels?:array<string>, contentType:string, createdTime:int|string|\DateTimeInterface, description?:string, isActive?:bool, knowledgeBaseArn:string, knowledgeBaseId:string, lastModifiedBy?:string, lastModifiedTime:int|string|\DateTimeInterface, name:string, quickResponseArn:string, quickResponseId:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED", tags?:array<string, string>}>}>
     */
    public function listQuickResponsesAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{assistantId:string, recommendationIds:array<string>, sessionId:string} $args
     * @return \AWS\Result<array{errors?:array<array{message?:string, recommendationId?:string}>, recommendationIds?:array<string>}>
     */
    public function notifyRecommendationsReceived(array $args): \AWS\Result { }

    /**
     * @param array{assistantId:string, recommendationIds:array<string>, sessionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{errors?:array<array{message?:string, recommendationId?:string}>, recommendationIds?:array<string>}>
     */
    public function notifyRecommendationsReceivedAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assistantId:string, contentFeedback:array{generativeContentFeedbackData?:array{relevance:"HELPFUL"|"NOT_HELPFUL"}}, targetId:string, targetType:"RECOMMENDATION"|"RESULT"} $args
     * @return \AWS\Result<array{assistantArn:string, assistantId:string, contentFeedback:array{generativeContentFeedbackData?:array{relevance:"HELPFUL"|"NOT_HELPFUL"}}, targetId:string, targetType:"RECOMMENDATION"|"RESULT"}>
     */
    public function putFeedback(array $args): \AWS\Result { }

    /**
     * @param array{assistantId:string, contentFeedback:array{generativeContentFeedbackData?:array{relevance:"HELPFUL"|"NOT_HELPFUL"}}, targetId:string, targetType:"RECOMMENDATION"|"RESULT"} $args
     * @return \GuzzleHttp\Promise\Promise<array{assistantArn:string, assistantId:string, contentFeedback:array{generativeContentFeedbackData?:array{relevance:"HELPFUL"|"NOT_HELPFUL"}}, targetId:string, targetType:"RECOMMENDATION"|"RESULT"}>
     */
    public function putFeedbackAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assistantId:string, maxResults?:int, nextToken?:string, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC", queryCondition?:array<array{single?:array{comparator:"EQUALS", field:"RESULT_TYPE", value:string}}>, queryInputData?:array{intentInputData?:array{intentId:string}, queryTextInputData?:array{text:string}}, queryText?:string, sessionId?:string} $args
     * @return \AWS\Result<array{nextToken?:string, results:array<array{data?:array{details:array{contentData?:array{rankingData:array{relevanceLevel?:"HIGH"|"MEDIUM"|"LOW", relevanceScore?:float}, textData:array{excerpt?:array{highlights?:array<array{beginOffsetInclusive?:int, endOffsetExclusive?:int}>, text?:string}, title?:array{highlights?:array<array{beginOffsetInclusive?:int, endOffsetExclusive?:int}>, text?:string}}}, generativeData?:array{completion:string, rankingData:array{relevanceLevel?:"HIGH"|"MEDIUM"|"LOW", relevanceScore?:float}, references:array<array{details:mixed, reference:array{contentReference?:array{contentArn?:string, contentId?:string, knowledgeBaseArn?:string, knowledgeBaseId?:string, referenceType?:"WEB_CRAWLER"|"KNOWLEDGE_BASE", sourceURL?:string}, generativeReference?:array{generationId?:string, modelId?:string}}}>}, intentDetectedData?:array{intent:string, intentId:string}, sourceContentData?:array{citationSpan?:array{beginOffsetInclusive?:int, endOffsetExclusive?:int}, id:string, rankingData:array{relevanceLevel?:"HIGH"|"MEDIUM"|"LOW", relevanceScore?:float}, textData:array{excerpt?:array{highlights?:array<array{beginOffsetInclusive?:int, endOffsetExclusive?:int}>, text?:string}, title?:array{highlights?:array<array{beginOffsetInclusive?:int, endOffsetExclusive?:int}>, text?:string}}, type:"KNOWLEDGE_CONTENT"}}, reference:array{contentReference?:array{contentArn?:string, contentId?:string, knowledgeBaseArn?:string, knowledgeBaseId?:string, referenceType?:"WEB_CRAWLER"|"KNOWLEDGE_BASE", sourceURL?:string}, generativeReference?:array{generationId?:string, modelId?:string}}}, document?:array{contentReference:array{contentArn?:string, contentId?:string, knowledgeBaseArn?:string, knowledgeBaseId?:string, referenceType?:"WEB_CRAWLER"|"KNOWLEDGE_BASE", sourceURL?:string}, excerpt?:array{highlights?:array<array{beginOffsetInclusive?:int, endOffsetExclusive?:int}>, text?:string}, title?:array{highlights?:array<array{beginOffsetInclusive?:int, endOffsetExclusive?:int}>, text?:string}}, relevanceScore?:float, resultId:string, type?:"KNOWLEDGE_CONTENT"|"INTENT_ANSWER"|"GENERATIVE_ANSWER"}>}>
     */
    public function queryAssistant(array $args): \AWS\Result { }

    /**
     * @param array{assistantId:string, maxResults?:int, nextToken?:string, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC", queryCondition?:array<array{single?:array{comparator:"EQUALS", field:"RESULT_TYPE", value:string}}>, queryInputData?:array{intentInputData?:array{intentId:string}, queryTextInputData?:array{text:string}}, queryText?:string, sessionId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, results:array<array{data?:array{details:array{contentData?:array{rankingData:array{relevanceLevel?:"HIGH"|"MEDIUM"|"LOW", relevanceScore?:float}, textData:array{excerpt?:array{highlights?:array<array{beginOffsetInclusive?:int, endOffsetExclusive?:int}>, text?:string}, title?:array{highlights?:array<array{beginOffsetInclusive?:int, endOffsetExclusive?:int}>, text?:string}}}, generativeData?:array{completion:string, rankingData:array{relevanceLevel?:"HIGH"|"MEDIUM"|"LOW", relevanceScore?:float}, references:array<array{details:mixed, reference:array{contentReference?:array{contentArn?:string, contentId?:string, knowledgeBaseArn?:string, knowledgeBaseId?:string, referenceType?:"WEB_CRAWLER"|"KNOWLEDGE_BASE", sourceURL?:string}, generativeReference?:array{generationId?:string, modelId?:string}}}>}, intentDetectedData?:array{intent:string, intentId:string}, sourceContentData?:array{citationSpan?:array{beginOffsetInclusive?:int, endOffsetExclusive?:int}, id:string, rankingData:array{relevanceLevel?:"HIGH"|"MEDIUM"|"LOW", relevanceScore?:float}, textData:array{excerpt?:array{highlights?:array<array{beginOffsetInclusive?:int, endOffsetExclusive?:int}>, text?:string}, title?:array{highlights?:array<array{beginOffsetInclusive?:int, endOffsetExclusive?:int}>, text?:string}}, type:"KNOWLEDGE_CONTENT"}}, reference:array{contentReference?:array{contentArn?:string, contentId?:string, knowledgeBaseArn?:string, knowledgeBaseId?:string, referenceType?:"WEB_CRAWLER"|"KNOWLEDGE_BASE", sourceURL?:string}, generativeReference?:array{generationId?:string, modelId?:string}}}, document?:array{contentReference:array{contentArn?:string, contentId?:string, knowledgeBaseArn?:string, knowledgeBaseId?:string, referenceType?:"WEB_CRAWLER"|"KNOWLEDGE_BASE", sourceURL?:string}, excerpt?:array{highlights?:array<array{beginOffsetInclusive?:int, endOffsetExclusive?:int}>, text?:string}, title?:array{highlights?:array<array{beginOffsetInclusive?:int, endOffsetExclusive?:int}>, text?:string}}, relevanceScore?:float, resultId:string, type?:"KNOWLEDGE_CONTENT"|"INTENT_ANSWER"|"GENERATIVE_ANSWER"}>}>
     */
    public function queryAssistantAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{aiAgentType:"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", assistantId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function removeAssistantAIAgent(array $args): \AWS\Result { }

    /**
     * @param array{aiAgentType:"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", assistantId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function removeAssistantAIAgentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{knowledgeBaseId:string} $args
     * @return \AWS\Result<array{}>
     */
    public function removeKnowledgeBaseTemplateUri(array $args): \AWS\Result { }

    /**
     * @param array{knowledgeBaseId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{}>
     */
    public function removeKnowledgeBaseTemplateUriAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{attributes:array{agentAttributes?:array{firstName?:string, lastName?:string}, customAttributes?:array<string, string>, customerProfileAttributes?:array{accountNumber?:string, additionalInformation?:string, address1?:string, address2?:string, address3?:string, address4?:string, billingAddress1?:string, billingAddress2?:string, billingAddress3?:string, billingAddress4?:string, billingCity?:string, billingCountry?:string, billingCounty?:string, billingPostalCode?:string, billingProvince?:string, billingState?:string, birthDate?:string, businessEmailAddress?:string, businessName?:string, businessPhoneNumber?:string, city?:string, country?:string, county?:string, custom?:array<string, string>, emailAddress?:string, firstName?:string, gender?:string, homePhoneNumber?:string, lastName?:string, mailingAddress1?:string, mailingAddress2?:string, mailingAddress3?:string, mailingAddress4?:string, mailingCity?:string, mailingCountry?:string, mailingCounty?:string, mailingPostalCode?:string, mailingProvince?:string, mailingState?:string, middleName?:string, mobilePhoneNumber?:string, partyType?:string, phoneNumber?:string, postalCode?:string, profileARN?:string, profileId?:string, province?:string, shippingAddress1?:string, shippingAddress2?:string, shippingAddress3?:string, shippingAddress4?:string, shippingCity?:string, shippingCountry?:string, shippingCounty?:string, shippingPostalCode?:string, shippingProvince?:string, shippingState?:string, state?:string}, systemAttributes?:array{customerEndpoint?:array{address?:string}, name?:string, systemEndpoint?:array{address?:string}}}, knowledgeBaseId:string, messageTemplateId:string} $args
     * @return \AWS\Result<array{attachments?:array<array{attachmentId:string, contentDisposition:"ATTACHMENT", name:string, uploadedTime:int|string|\DateTimeInterface, url:string, urlExpiry:int|string|\DateTimeInterface}>, attributesNotInterpolated?:array<string>, content:array{email?:array{body?:array{html?:array{content?:mixed}, plainText?:array{content?:mixed}}, headers?:array<array{name?:string, value?:string}>, subject?:string}, sms?:array{body?:array{plainText?:array{content?:mixed}}}}}>
     */
    public function renderMessageTemplate(array $args): \AWS\Result { }

    /**
     * @param array{attributes:array{agentAttributes?:array{firstName?:string, lastName?:string}, customAttributes?:array<string, string>, customerProfileAttributes?:array{accountNumber?:string, additionalInformation?:string, address1?:string, address2?:string, address3?:string, address4?:string, billingAddress1?:string, billingAddress2?:string, billingAddress3?:string, billingAddress4?:string, billingCity?:string, billingCountry?:string, billingCounty?:string, billingPostalCode?:string, billingProvince?:string, billingState?:string, birthDate?:string, businessEmailAddress?:string, businessName?:string, businessPhoneNumber?:string, city?:string, country?:string, county?:string, custom?:array<string, string>, emailAddress?:string, firstName?:string, gender?:string, homePhoneNumber?:string, lastName?:string, mailingAddress1?:string, mailingAddress2?:string, mailingAddress3?:string, mailingAddress4?:string, mailingCity?:string, mailingCountry?:string, mailingCounty?:string, mailingPostalCode?:string, mailingProvince?:string, mailingState?:string, middleName?:string, mobilePhoneNumber?:string, partyType?:string, phoneNumber?:string, postalCode?:string, profileARN?:string, profileId?:string, province?:string, shippingAddress1?:string, shippingAddress2?:string, shippingAddress3?:string, shippingAddress4?:string, shippingCity?:string, shippingCountry?:string, shippingCounty?:string, shippingPostalCode?:string, shippingProvince?:string, shippingState?:string, state?:string}, systemAttributes?:array{customerEndpoint?:array{address?:string}, name?:string, systemEndpoint?:array{address?:string}}}, knowledgeBaseId:string, messageTemplateId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{attachments?:array<array{attachmentId:string, contentDisposition:"ATTACHMENT", name:string, uploadedTime:int|string|\DateTimeInterface, url:string, urlExpiry:int|string|\DateTimeInterface}>, attributesNotInterpolated?:array<string>, content:array{email?:array{body?:array{html?:array{content?:mixed}, plainText?:array{content?:mixed}}, headers?:array<array{name?:string, value?:string}>, subject?:string}, sms?:array{body?:array{plainText?:array{content?:mixed}}}}}>
     */
    public function renderMessageTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{knowledgeBaseId:string, maxResults?:int, nextToken?:string, searchExpression:array{filters:array<array{field:"NAME", operator:"EQUALS", value:string}>}} $args
     * @return \AWS\Result<array{contentSummaries:array<array{contentArn:string, contentId:string, contentType:string, knowledgeBaseArn:string, knowledgeBaseId:string, metadata:array<string, string>, name:string, revisionId:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_FAILED", tags?:array<string, string>, title:string}>, nextToken?:string}>
     */
    public function searchContent(array $args): \AWS\Result { }

    /**
     * @param array{knowledgeBaseId:string, maxResults?:int, nextToken?:string, searchExpression:array{filters:array<array{field:"NAME", operator:"EQUALS", value:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{contentSummaries:array<array{contentArn:string, contentId:string, contentType:string, knowledgeBaseArn:string, knowledgeBaseId:string, metadata:array<string, string>, name:string, revisionId:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_FAILED", tags?:array<string, string>, title:string}>, nextToken?:string}>
     */
    public function searchContentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{knowledgeBaseId:string, maxResults?:int, nextToken?:string, searchExpression:array{filters?:array<array{includeNoExistence?:bool, name:string, operator:"EQUALS"|"PREFIX", values?:array<string>}>, orderOnField?:array{name:string, order?:"ASC"|"DESC"}, queries?:array<array{allowFuzziness?:bool, name:string, operator:"CONTAINS"|"CONTAINS_AND_PREFIX", priority?:"HIGH"|"MEDIUM"|"LOW", values:array<string>}>}} $args
     * @return \AWS\Result<array{nextToken?:string, results:array<array{channelSubtype:"EMAIL"|"SMS", createdTime:int|string|\DateTimeInterface, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, isActive?:bool, knowledgeBaseArn:string, knowledgeBaseId:string, language?:string, lastModifiedBy:string, lastModifiedTime:int|string|\DateTimeInterface, messageTemplateArn:string, messageTemplateId:string, name:string, tags?:array<string, string>, versionNumber?:int}>}>
     */
    public function searchMessageTemplates(array $args): \AWS\Result { }

    /**
     * @param array{knowledgeBaseId:string, maxResults?:int, nextToken?:string, searchExpression:array{filters?:array<array{includeNoExistence?:bool, name:string, operator:"EQUALS"|"PREFIX", values?:array<string>}>, orderOnField?:array{name:string, order?:"ASC"|"DESC"}, queries?:array<array{allowFuzziness?:bool, name:string, operator:"CONTAINS"|"CONTAINS_AND_PREFIX", priority?:"HIGH"|"MEDIUM"|"LOW", values:array<string>}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, results:array<array{channelSubtype:"EMAIL"|"SMS", createdTime:int|string|\DateTimeInterface, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, isActive?:bool, knowledgeBaseArn:string, knowledgeBaseId:string, language?:string, lastModifiedBy:string, lastModifiedTime:int|string|\DateTimeInterface, messageTemplateArn:string, messageTemplateId:string, name:string, tags?:array<string, string>, versionNumber?:int}>}>
     */
    public function searchMessageTemplatesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{attributes?:array<string, string>, knowledgeBaseId:string, maxResults?:int, nextToken?:string, searchExpression:array{filters?:array<array{includeNoExistence?:bool, name:string, operator:"EQUALS"|"PREFIX", values?:array<string>}>, orderOnField?:array{name:string, order?:"ASC"|"DESC"}, queries?:array<array{allowFuzziness?:bool, name:string, operator:"CONTAINS"|"CONTAINS_AND_PREFIX", priority?:"HIGH"|"MEDIUM"|"LOW", values:array<string>}>}} $args
     * @return \AWS\Result<array{nextToken?:string, results:array<array{attributesInterpolated?:array<string>, attributesNotInterpolated?:array<string>, channels?:array<string>, contentType:string, contents:array{markdown?:array{content?:string}, plainText?:array{content?:string}}, createdTime:int|string|\DateTimeInterface, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, isActive:bool, knowledgeBaseArn:string, knowledgeBaseId:string, language?:string, lastModifiedBy?:string, lastModifiedTime:int|string|\DateTimeInterface, name:string, quickResponseArn:string, quickResponseId:string, shortcutKey?:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED", tags?:array<string, string>}>}>
     */
    public function searchQuickResponses(array $args): \AWS\Result { }

    /**
     * @param array{attributes?:array<string, string>, knowledgeBaseId:string, maxResults?:int, nextToken?:string, searchExpression:array{filters?:array<array{includeNoExistence?:bool, name:string, operator:"EQUALS"|"PREFIX", values?:array<string>}>, orderOnField?:array{name:string, order?:"ASC"|"DESC"}, queries?:array<array{allowFuzziness?:bool, name:string, operator:"CONTAINS"|"CONTAINS_AND_PREFIX", priority?:"HIGH"|"MEDIUM"|"LOW", values:array<string>}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, results:array<array{attributesInterpolated?:array<string>, attributesNotInterpolated?:array<string>, channels?:array<string>, contentType:string, contents:array{markdown?:array{content?:string}, plainText?:array{content?:string}}, createdTime:int|string|\DateTimeInterface, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, isActive:bool, knowledgeBaseArn:string, knowledgeBaseId:string, language?:string, lastModifiedBy?:string, lastModifiedTime:int|string|\DateTimeInterface, name:string, quickResponseArn:string, quickResponseId:string, shortcutKey?:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED", tags?:array<string, string>}>}>
     */
    public function searchQuickResponsesAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assistantId:string, maxResults?:int, nextToken?:string, searchExpression:array{filters:array<array{field:"NAME", operator:"EQUALS", value:string}>}} $args
     * @return \AWS\Result<array{nextToken?:string, sessionSummaries:array<array{assistantArn:string, assistantId:string, sessionArn:string, sessionId:string}>}>
     */
    public function searchSessions(array $args): \AWS\Result { }

    /**
     * @param array{assistantId:string, maxResults?:int, nextToken?:string, searchExpression:array{filters:array<array{field:"NAME", operator:"EQUALS", value:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, sessionSummaries:array<array{assistantArn:string, assistantId:string, sessionArn:string, sessionId:string}>}>
     */
    public function searchSessionsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assistantId:string, clientToken?:string, conversationContext?:array{selfServiceConversationHistory:array<array{botResponse?:string, inputTranscript?:string, turnNumber:int}>}, message:array{value:array{text?:array{value?:mixed}}}, sessionId:string, type:"TEXT"} $args
     * @return \AWS\Result<array{nextMessageToken:string, requestMessageId:string}>
     */
    public function sendMessage(array $args): \AWS\Result { }

    /**
     * @param array{assistantId:string, clientToken?:string, conversationContext?:array{selfServiceConversationHistory:array<array{botResponse?:string, inputTranscript?:string, turnNumber:int}>}, message:array{value:array{text?:array{value?:mixed}}}, sessionId:string, type:"TEXT"} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextMessageToken:string, requestMessageId:string}>
     */
    public function sendMessageAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{contentType:string, knowledgeBaseId:string, presignedUrlTimeToLive?:int} $args
     * @return \AWS\Result<array{headersToInclude:array<string, string>, uploadId:string, url:string, urlExpiry:int|string|\DateTimeInterface}>
     */
    public function startContentUpload(array $args): \AWS\Result { }

    /**
     * @param array{contentType:string, knowledgeBaseId:string, presignedUrlTimeToLive?:int} $args
     * @return \GuzzleHttp\Promise\Promise<array{headersToInclude:array<string, string>, uploadId:string, url:string, urlExpiry:int|string|\DateTimeInterface}>
     */
    public function startContentUploadAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{clientToken?:string, externalSourceConfiguration?:array{configuration:array{connectConfiguration?:array{instanceId?:string}}, source:"AMAZON_CONNECT"}, importJobType:"QUICK_RESPONSES", knowledgeBaseId:string, metadata?:array<string, string>, uploadId:string} $args
     * @return \AWS\Result<array{importJob?:array{createdTime:int|string|\DateTimeInterface, externalSourceConfiguration?:array{configuration:array{connectConfiguration?:array{instanceId?:string}}, source:"AMAZON_CONNECT"}, failedRecordReport?:string, importJobId:string, importJobType:"QUICK_RESPONSES", knowledgeBaseArn:string, knowledgeBaseId:string, lastModifiedTime:int|string|\DateTimeInterface, metadata?:array<string, string>, status:"START_IN_PROGRESS"|"FAILED"|"COMPLETE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", uploadId:string, url:string, urlExpiry:int|string|\DateTimeInterface}}>
     */
    public function startImportJob(array $args): \AWS\Result { }

    /**
     * @param array{clientToken?:string, externalSourceConfiguration?:array{configuration:array{connectConfiguration?:array{instanceId?:string}}, source:"AMAZON_CONNECT"}, importJobType:"QUICK_RESPONSES", knowledgeBaseId:string, metadata?:array<string, string>, uploadId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{importJob?:array{createdTime:int|string|\DateTimeInterface, externalSourceConfiguration?:array{configuration:array{connectConfiguration?:array{instanceId?:string}}, source:"AMAZON_CONNECT"}, failedRecordReport?:string, importJobId:string, importJobType:"QUICK_RESPONSES", knowledgeBaseArn:string, knowledgeBaseId:string, lastModifiedTime:int|string|\DateTimeInterface, metadata?:array<string, string>, status:"START_IN_PROGRESS"|"FAILED"|"COMPLETE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", uploadId:string, url:string, urlExpiry:int|string|\DateTimeInterface}}>
     */
    public function startImportJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{aiAgentId:string, assistantId:string, clientToken?:string, configuration?:array{answerRecommendationAIAgentConfiguration?:array{answerGenerationAIGuardrailId?:string, answerGenerationAIPromptId?:string, associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, intentLabelingGenerationAIPromptId?:string, locale?:string, queryReformulationAIPromptId?:string}, manualSearchAIAgentConfiguration?:array{answerGenerationAIGuardrailId?:string, answerGenerationAIPromptId?:string, associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, locale?:string}, selfServiceAIAgentConfiguration?:array{associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, selfServiceAIGuardrailId?:string, selfServiceAnswerGenerationAIPromptId?:string, selfServicePreProcessingAIPromptId?:string}}, description?:string, visibilityStatus:"SAVED"|"PUBLISHED"} $args
     * @return \AWS\Result<array{aiAgent?:array{aiAgentArn:string, aiAgentId:string, assistantArn:string, assistantId:string, configuration:array{answerRecommendationAIAgentConfiguration?:array{answerGenerationAIGuardrailId?:string, answerGenerationAIPromptId?:string, associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, intentLabelingGenerationAIPromptId?:string, locale?:string, queryReformulationAIPromptId?:string}, manualSearchAIAgentConfiguration?:array{answerGenerationAIGuardrailId?:string, answerGenerationAIPromptId?:string, associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, locale?:string}, selfServiceAIAgentConfiguration?:array{associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, selfServiceAIGuardrailId?:string, selfServiceAnswerGenerationAIPromptId?:string, selfServicePreProcessingAIPromptId?:string}}, description?:string, modifiedTime?:int|string|\DateTimeInterface, name:string, origin?:"SYSTEM"|"CUSTOMER", status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, type:"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", visibilityStatus:"SAVED"|"PUBLISHED"}}>
     */
    public function updateAIAgent(array $args): \AWS\Result { }

    /**
     * @param array{aiAgentId:string, assistantId:string, clientToken?:string, configuration?:array{answerRecommendationAIAgentConfiguration?:array{answerGenerationAIGuardrailId?:string, answerGenerationAIPromptId?:string, associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, intentLabelingGenerationAIPromptId?:string, locale?:string, queryReformulationAIPromptId?:string}, manualSearchAIAgentConfiguration?:array{answerGenerationAIGuardrailId?:string, answerGenerationAIPromptId?:string, associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, locale?:string}, selfServiceAIAgentConfiguration?:array{associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, selfServiceAIGuardrailId?:string, selfServiceAnswerGenerationAIPromptId?:string, selfServicePreProcessingAIPromptId?:string}}, description?:string, visibilityStatus:"SAVED"|"PUBLISHED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{aiAgent?:array{aiAgentArn:string, aiAgentId:string, assistantArn:string, assistantId:string, configuration:array{answerRecommendationAIAgentConfiguration?:array{answerGenerationAIGuardrailId?:string, answerGenerationAIPromptId?:string, associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, intentLabelingGenerationAIPromptId?:string, locale?:string, queryReformulationAIPromptId?:string}, manualSearchAIAgentConfiguration?:array{answerGenerationAIGuardrailId?:string, answerGenerationAIPromptId?:string, associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, locale?:string}, selfServiceAIAgentConfiguration?:array{associationConfigurations?:array<array{associationConfigurationData?:array{knowledgeBaseAssociationConfigurationData?:array{contentTagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, maxResults?:int, overrideKnowledgeBaseSearchType?:"HYBRID"|"SEMANTIC"}}, associationId?:string, associationType?:"KNOWLEDGE_BASE"}>, selfServiceAIGuardrailId?:string, selfServiceAnswerGenerationAIPromptId?:string, selfServicePreProcessingAIPromptId?:string}}, description?:string, modifiedTime?:int|string|\DateTimeInterface, name:string, origin?:"SYSTEM"|"CUSTOMER", status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, type:"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", visibilityStatus:"SAVED"|"PUBLISHED"}}>
     */
    public function updateAIAgentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{aiGuardrailId:string, assistantId:string, blockedInputMessaging:string, blockedOutputsMessaging:string, clientToken?:string, contentPolicyConfig?:array{filtersConfig:array<array{inputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", outputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", type:"SEXUAL"|"VIOLENCE"|"HATE"|"INSULTS"|"MISCONDUCT"|"PROMPT_ATTACK"}>}, contextualGroundingPolicyConfig?:array{filtersConfig:array<array{threshold:float, type:"GROUNDING"|"RELEVANCE"}>}, description?:string, sensitiveInformationPolicyConfig?:array{piiEntitiesConfig?:array<array{action:"BLOCK"|"ANONYMIZE", type:"ADDRESS"|"AGE"|"AWS_ACCESS_KEY"|"AWS_SECRET_KEY"|"CA_HEALTH_NUMBER"|"CA_SOCIAL_INSURANCE_NUMBER"|"CREDIT_DEBIT_CARD_CVV"|"CREDIT_DEBIT_CARD_EXPIRY"|"CREDIT_DEBIT_CARD_NUMBER"|"DRIVER_ID"|"EMAIL"|"INTERNATIONAL_BANK_ACCOUNT_NUMBER"|"IP_ADDRESS"|"LICENSE_PLATE"|"MAC_ADDRESS"|"NAME"|"PASSWORD"|"PHONE"|"PIN"|"SWIFT_CODE"|"UK_NATIONAL_HEALTH_SERVICE_NUMBER"|"UK_NATIONAL_INSURANCE_NUMBER"|"UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER"|"URL"|"USERNAME"|"US_BANK_ACCOUNT_NUMBER"|"US_BANK_ROUTING_NUMBER"|"US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER"|"US_PASSPORT_NUMBER"|"US_SOCIAL_SECURITY_NUMBER"|"VEHICLE_IDENTIFICATION_NUMBER"}>, regexesConfig?:array<array{action:"BLOCK"|"ANONYMIZE", description?:string, name:string, pattern:string}>}, topicPolicyConfig?:array{topicsConfig:array<array{definition:string, examples?:array<string>, name:string, type:"DENY"}>}, visibilityStatus:"SAVED"|"PUBLISHED", wordPolicyConfig?:array{managedWordListsConfig?:array<array{type:"PROFANITY"}>, wordsConfig?:array<array{text:string}>}} $args
     * @return \AWS\Result<array{aiGuardrail?:array{aiGuardrailArn:string, aiGuardrailId:string, assistantArn:string, assistantId:string, blockedInputMessaging:string, blockedOutputsMessaging:string, contentPolicyConfig?:array{filtersConfig:array<array{inputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", outputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", type:"SEXUAL"|"VIOLENCE"|"HATE"|"INSULTS"|"MISCONDUCT"|"PROMPT_ATTACK"}>}, contextualGroundingPolicyConfig?:array{filtersConfig:array<array{threshold:float, type:"GROUNDING"|"RELEVANCE"}>}, description?:string, modifiedTime?:int|string|\DateTimeInterface, name:string, sensitiveInformationPolicyConfig?:array{piiEntitiesConfig?:array<array{action:"BLOCK"|"ANONYMIZE", type:"ADDRESS"|"AGE"|"AWS_ACCESS_KEY"|"AWS_SECRET_KEY"|"CA_HEALTH_NUMBER"|"CA_SOCIAL_INSURANCE_NUMBER"|"CREDIT_DEBIT_CARD_CVV"|"CREDIT_DEBIT_CARD_EXPIRY"|"CREDIT_DEBIT_CARD_NUMBER"|"DRIVER_ID"|"EMAIL"|"INTERNATIONAL_BANK_ACCOUNT_NUMBER"|"IP_ADDRESS"|"LICENSE_PLATE"|"MAC_ADDRESS"|"NAME"|"PASSWORD"|"PHONE"|"PIN"|"SWIFT_CODE"|"UK_NATIONAL_HEALTH_SERVICE_NUMBER"|"UK_NATIONAL_INSURANCE_NUMBER"|"UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER"|"URL"|"USERNAME"|"US_BANK_ACCOUNT_NUMBER"|"US_BANK_ROUTING_NUMBER"|"US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER"|"US_PASSPORT_NUMBER"|"US_SOCIAL_SECURITY_NUMBER"|"VEHICLE_IDENTIFICATION_NUMBER"}>, regexesConfig?:array<array{action:"BLOCK"|"ANONYMIZE", description?:string, name:string, pattern:string}>}, status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, topicPolicyConfig?:array{topicsConfig:array<array{definition:string, examples?:array<string>, name:string, type:"DENY"}>}, visibilityStatus:"SAVED"|"PUBLISHED", wordPolicyConfig?:array{managedWordListsConfig?:array<array{type:"PROFANITY"}>, wordsConfig?:array<array{text:string}>}}}>
     */
    public function updateAIGuardrail(array $args): \AWS\Result { }

    /**
     * @param array{aiGuardrailId:string, assistantId:string, blockedInputMessaging:string, blockedOutputsMessaging:string, clientToken?:string, contentPolicyConfig?:array{filtersConfig:array<array{inputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", outputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", type:"SEXUAL"|"VIOLENCE"|"HATE"|"INSULTS"|"MISCONDUCT"|"PROMPT_ATTACK"}>}, contextualGroundingPolicyConfig?:array{filtersConfig:array<array{threshold:float, type:"GROUNDING"|"RELEVANCE"}>}, description?:string, sensitiveInformationPolicyConfig?:array{piiEntitiesConfig?:array<array{action:"BLOCK"|"ANONYMIZE", type:"ADDRESS"|"AGE"|"AWS_ACCESS_KEY"|"AWS_SECRET_KEY"|"CA_HEALTH_NUMBER"|"CA_SOCIAL_INSURANCE_NUMBER"|"CREDIT_DEBIT_CARD_CVV"|"CREDIT_DEBIT_CARD_EXPIRY"|"CREDIT_DEBIT_CARD_NUMBER"|"DRIVER_ID"|"EMAIL"|"INTERNATIONAL_BANK_ACCOUNT_NUMBER"|"IP_ADDRESS"|"LICENSE_PLATE"|"MAC_ADDRESS"|"NAME"|"PASSWORD"|"PHONE"|"PIN"|"SWIFT_CODE"|"UK_NATIONAL_HEALTH_SERVICE_NUMBER"|"UK_NATIONAL_INSURANCE_NUMBER"|"UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER"|"URL"|"USERNAME"|"US_BANK_ACCOUNT_NUMBER"|"US_BANK_ROUTING_NUMBER"|"US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER"|"US_PASSPORT_NUMBER"|"US_SOCIAL_SECURITY_NUMBER"|"VEHICLE_IDENTIFICATION_NUMBER"}>, regexesConfig?:array<array{action:"BLOCK"|"ANONYMIZE", description?:string, name:string, pattern:string}>}, topicPolicyConfig?:array{topicsConfig:array<array{definition:string, examples?:array<string>, name:string, type:"DENY"}>}, visibilityStatus:"SAVED"|"PUBLISHED", wordPolicyConfig?:array{managedWordListsConfig?:array<array{type:"PROFANITY"}>, wordsConfig?:array<array{text:string}>}} $args
     * @return \GuzzleHttp\Promise\Promise<array{aiGuardrail?:array{aiGuardrailArn:string, aiGuardrailId:string, assistantArn:string, assistantId:string, blockedInputMessaging:string, blockedOutputsMessaging:string, contentPolicyConfig?:array{filtersConfig:array<array{inputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", outputStrength:"NONE"|"LOW"|"MEDIUM"|"HIGH", type:"SEXUAL"|"VIOLENCE"|"HATE"|"INSULTS"|"MISCONDUCT"|"PROMPT_ATTACK"}>}, contextualGroundingPolicyConfig?:array{filtersConfig:array<array{threshold:float, type:"GROUNDING"|"RELEVANCE"}>}, description?:string, modifiedTime?:int|string|\DateTimeInterface, name:string, sensitiveInformationPolicyConfig?:array{piiEntitiesConfig?:array<array{action:"BLOCK"|"ANONYMIZE", type:"ADDRESS"|"AGE"|"AWS_ACCESS_KEY"|"AWS_SECRET_KEY"|"CA_HEALTH_NUMBER"|"CA_SOCIAL_INSURANCE_NUMBER"|"CREDIT_DEBIT_CARD_CVV"|"CREDIT_DEBIT_CARD_EXPIRY"|"CREDIT_DEBIT_CARD_NUMBER"|"DRIVER_ID"|"EMAIL"|"INTERNATIONAL_BANK_ACCOUNT_NUMBER"|"IP_ADDRESS"|"LICENSE_PLATE"|"MAC_ADDRESS"|"NAME"|"PASSWORD"|"PHONE"|"PIN"|"SWIFT_CODE"|"UK_NATIONAL_HEALTH_SERVICE_NUMBER"|"UK_NATIONAL_INSURANCE_NUMBER"|"UK_UNIQUE_TAXPAYER_REFERENCE_NUMBER"|"URL"|"USERNAME"|"US_BANK_ACCOUNT_NUMBER"|"US_BANK_ROUTING_NUMBER"|"US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER"|"US_PASSPORT_NUMBER"|"US_SOCIAL_SECURITY_NUMBER"|"VEHICLE_IDENTIFICATION_NUMBER"}>, regexesConfig?:array<array{action:"BLOCK"|"ANONYMIZE", description?:string, name:string, pattern:string}>}, status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, topicPolicyConfig?:array{topicsConfig:array<array{definition:string, examples?:array<string>, name:string, type:"DENY"}>}, visibilityStatus:"SAVED"|"PUBLISHED", wordPolicyConfig?:array{managedWordListsConfig?:array<array{type:"PROFANITY"}>, wordsConfig?:array<array{text:string}>}}}>
     */
    public function updateAIGuardrailAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{aiPromptId:string, assistantId:string, clientToken?:string, description?:string, templateConfiguration?:array{textFullAIPromptEditTemplateConfiguration?:array{text:string}}, visibilityStatus:"SAVED"|"PUBLISHED"} $args
     * @return \AWS\Result<array{aiPrompt?:array{aiPromptArn:string, aiPromptId:string, apiFormat:"ANTHROPIC_CLAUDE_MESSAGES"|"ANTHROPIC_CLAUDE_TEXT_COMPLETIONS", assistantArn:string, assistantId:string, description?:string, modelId:string, modifiedTime?:int|string|\DateTimeInterface, name:string, origin?:"SYSTEM"|"CUSTOMER", status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, templateConfiguration:array{textFullAIPromptEditTemplateConfiguration?:array{text:string}}, templateType:"TEXT", type:"ANSWER_GENERATION"|"INTENT_LABELING_GENERATION"|"QUERY_REFORMULATION"|"SELF_SERVICE_PRE_PROCESSING"|"SELF_SERVICE_ANSWER_GENERATION", visibilityStatus:"SAVED"|"PUBLISHED"}}>
     */
    public function updateAIPrompt(array $args): \AWS\Result { }

    /**
     * @param array{aiPromptId:string, assistantId:string, clientToken?:string, description?:string, templateConfiguration?:array{textFullAIPromptEditTemplateConfiguration?:array{text:string}}, visibilityStatus:"SAVED"|"PUBLISHED"} $args
     * @return \GuzzleHttp\Promise\Promise<array{aiPrompt?:array{aiPromptArn:string, aiPromptId:string, apiFormat:"ANTHROPIC_CLAUDE_MESSAGES"|"ANTHROPIC_CLAUDE_TEXT_COMPLETIONS", assistantArn:string, assistantId:string, description?:string, modelId:string, modifiedTime?:int|string|\DateTimeInterface, name:string, origin?:"SYSTEM"|"CUSTOMER", status?:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, templateConfiguration:array{textFullAIPromptEditTemplateConfiguration?:array{text:string}}, templateType:"TEXT", type:"ANSWER_GENERATION"|"INTENT_LABELING_GENERATION"|"QUERY_REFORMULATION"|"SELF_SERVICE_PRE_PROCESSING"|"SELF_SERVICE_ANSWER_GENERATION", visibilityStatus:"SAVED"|"PUBLISHED"}}>
     */
    public function updateAIPromptAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{aiAgentType:"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", assistantId:string, configuration:array{aiAgentId:string}} $args
     * @return \AWS\Result<array{assistant?:array{aiAgentConfiguration?:array<"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", array{aiAgentId:string}>, assistantArn:string, assistantId:string, capabilityConfiguration?:array{type?:"V1"|"V2"}, description?:string, integrationConfiguration?:array{topicIntegrationArn?:string}, name:string, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, type:"AGENT"}}>
     */
    public function updateAssistantAIAgent(array $args): \AWS\Result { }

    /**
     * @param array{aiAgentType:"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", assistantId:string, configuration:array{aiAgentId:string}} $args
     * @return \GuzzleHttp\Promise\Promise<array{assistant?:array{aiAgentConfiguration?:array<"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", array{aiAgentId:string}>, assistantArn:string, assistantId:string, capabilityConfiguration?:array{type?:"V1"|"V2"}, description?:string, integrationConfiguration?:array{topicIntegrationArn?:string}, name:string, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, type:"AGENT"}}>
     */
    public function updateAssistantAIAgentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{contentId:string, knowledgeBaseId:string, metadata?:array<string, string>, overrideLinkOutUri?:string, removeOverrideLinkOutUri?:bool, revisionId?:string, title?:string, uploadId?:string} $args
     * @return \AWS\Result<array{content?:array{contentArn:string, contentId:string, contentType:string, knowledgeBaseArn:string, knowledgeBaseId:string, linkOutUri?:string, metadata:array<string, string>, name:string, revisionId:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_FAILED", tags?:array<string, string>, title:string, url:string, urlExpiry:int|string|\DateTimeInterface}}>
     */
    public function updateContent(array $args): \AWS\Result { }

    /**
     * @param array{contentId:string, knowledgeBaseId:string, metadata?:array<string, string>, overrideLinkOutUri?:string, removeOverrideLinkOutUri?:bool, revisionId?:string, title?:string, uploadId?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{content?:array{contentArn:string, contentId:string, contentType:string, knowledgeBaseArn:string, knowledgeBaseId:string, linkOutUri?:string, metadata:array<string, string>, name:string, revisionId:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_FAILED", tags?:array<string, string>, title:string, url:string, urlExpiry:int|string|\DateTimeInterface}}>
     */
    public function updateContentAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{knowledgeBaseId:string, templateUri:string} $args
     * @return \AWS\Result<array{knowledgeBase?:array{description?:string, ingestionFailureReasons?:array<string>, ingestionStatus?:"SYNC_FAILED"|"SYNCING_IN_PROGRESS"|"SYNC_SUCCESS"|"CREATE_IN_PROGRESS", knowledgeBaseArn:string, knowledgeBaseId:string, knowledgeBaseType:"EXTERNAL"|"CUSTOM"|"QUICK_RESPONSES"|"MESSAGE_TEMPLATES"|"MANAGED", lastContentModificationTime?:int|string|\DateTimeInterface, name:string, renderingConfiguration?:array{templateUri?:string}, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, sourceConfiguration?:array{appIntegrations?:array{appIntegrationArn:string, objectFields?:array<string>}, managedSourceConfiguration?:array{webCrawlerConfiguration?:array{crawlerLimits?:array{rateLimit?:int}, exclusionFilters?:array<string>, inclusionFilters?:array<string>, scope?:"HOST_ONLY"|"SUBDOMAINS", urlConfiguration:array{seedUrls?:array<array{url?:string}>}}}}, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, vectorIngestionConfiguration?:array{chunkingConfiguration?:array{chunkingStrategy:"FIXED_SIZE"|"NONE"|"HIERARCHICAL"|"SEMANTIC", fixedSizeChunkingConfiguration?:array{maxTokens:int, overlapPercentage:int}, hierarchicalChunkingConfiguration?:array{levelConfigurations:array<array{maxTokens:int}>, overlapTokens:int}, semanticChunkingConfiguration?:array{breakpointPercentileThreshold:int, bufferSize:int, maxTokens:int}}, parsingConfiguration?:array{bedrockFoundationModelConfiguration?:array{modelArn:string, parsingPrompt?:array{parsingPromptText:string}}, parsingStrategy:"BEDROCK_FOUNDATION_MODEL"}}}}>
     */
    public function updateKnowledgeBaseTemplateUri(array $args): \AWS\Result { }

    /**
     * @param array{knowledgeBaseId:string, templateUri:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{knowledgeBase?:array{description?:string, ingestionFailureReasons?:array<string>, ingestionStatus?:"SYNC_FAILED"|"SYNCING_IN_PROGRESS"|"SYNC_SUCCESS"|"CREATE_IN_PROGRESS", knowledgeBaseArn:string, knowledgeBaseId:string, knowledgeBaseType:"EXTERNAL"|"CUSTOM"|"QUICK_RESPONSES"|"MESSAGE_TEMPLATES"|"MANAGED", lastContentModificationTime?:int|string|\DateTimeInterface, name:string, renderingConfiguration?:array{templateUri?:string}, serverSideEncryptionConfiguration?:array{kmsKeyId?:string}, sourceConfiguration?:array{appIntegrations?:array{appIntegrationArn:string, objectFields?:array<string>}, managedSourceConfiguration?:array{webCrawlerConfiguration?:array{crawlerLimits?:array{rateLimit?:int}, exclusionFilters?:array<string>, inclusionFilters?:array<string>, scope?:"HOST_ONLY"|"SUBDOMAINS", urlConfiguration:array{seedUrls?:array<array{url?:string}>}}}}, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"ACTIVE"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED", tags?:array<string, string>, vectorIngestionConfiguration?:array{chunkingConfiguration?:array{chunkingStrategy:"FIXED_SIZE"|"NONE"|"HIERARCHICAL"|"SEMANTIC", fixedSizeChunkingConfiguration?:array{maxTokens:int, overlapPercentage:int}, hierarchicalChunkingConfiguration?:array{levelConfigurations:array<array{maxTokens:int}>, overlapTokens:int}, semanticChunkingConfiguration?:array{breakpointPercentileThreshold:int, bufferSize:int, maxTokens:int}}, parsingConfiguration?:array{bedrockFoundationModelConfiguration?:array{modelArn:string, parsingPrompt?:array{parsingPromptText:string}}, parsingStrategy:"BEDROCK_FOUNDATION_MODEL"}}}}>
     */
    public function updateKnowledgeBaseTemplateUriAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{content?:array{email?:array{body?:array{html?:array{content?:mixed}, plainText?:array{content?:mixed}}, headers?:array<array{name?:string, value?:string}>, subject?:string}, sms?:array{body?:array{plainText?:array{content?:mixed}}}}, defaultAttributes?:array{agentAttributes?:array{firstName?:string, lastName?:string}, customAttributes?:array<string, string>, customerProfileAttributes?:array{accountNumber?:string, additionalInformation?:string, address1?:string, address2?:string, address3?:string, address4?:string, billingAddress1?:string, billingAddress2?:string, billingAddress3?:string, billingAddress4?:string, billingCity?:string, billingCountry?:string, billingCounty?:string, billingPostalCode?:string, billingProvince?:string, billingState?:string, birthDate?:string, businessEmailAddress?:string, businessName?:string, businessPhoneNumber?:string, city?:string, country?:string, county?:string, custom?:array<string, string>, emailAddress?:string, firstName?:string, gender?:string, homePhoneNumber?:string, lastName?:string, mailingAddress1?:string, mailingAddress2?:string, mailingAddress3?:string, mailingAddress4?:string, mailingCity?:string, mailingCountry?:string, mailingCounty?:string, mailingPostalCode?:string, mailingProvince?:string, mailingState?:string, middleName?:string, mobilePhoneNumber?:string, partyType?:string, phoneNumber?:string, postalCode?:string, profileARN?:string, profileId?:string, province?:string, shippingAddress1?:string, shippingAddress2?:string, shippingAddress3?:string, shippingAddress4?:string, shippingCity?:string, shippingCountry?:string, shippingCounty?:string, shippingPostalCode?:string, shippingProvince?:string, shippingState?:string, state?:string}, systemAttributes?:array{customerEndpoint?:array{address?:string}, name?:string, systemEndpoint?:array{address?:string}}}, knowledgeBaseId:string, language?:string, messageTemplateId:string} $args
     * @return \AWS\Result<array{messageTemplate?:array{attributeTypes?:array<"SYSTEM"|"AGENT"|"CUSTOMER_PROFILE"|"CUSTOM">, channelSubtype:"EMAIL"|"SMS", content:array{email?:array{body?:array{html?:array{content?:mixed}, plainText?:array{content?:mixed}}, headers?:array<array{name?:string, value?:string}>, subject?:string}, sms?:array{body?:array{plainText?:array{content?:mixed}}}}, createdTime:int|string|\DateTimeInterface, defaultAttributes?:array{agentAttributes?:array{firstName?:string, lastName?:string}, customAttributes?:array<string, string>, customerProfileAttributes?:array{accountNumber?:string, additionalInformation?:string, address1?:string, address2?:string, address3?:string, address4?:string, billingAddress1?:string, billingAddress2?:string, billingAddress3?:string, billingAddress4?:string, billingCity?:string, billingCountry?:string, billingCounty?:string, billingPostalCode?:string, billingProvince?:string, billingState?:string, birthDate?:string, businessEmailAddress?:string, businessName?:string, businessPhoneNumber?:string, city?:string, country?:string, county?:string, custom?:array<string, string>, emailAddress?:string, firstName?:string, gender?:string, homePhoneNumber?:string, lastName?:string, mailingAddress1?:string, mailingAddress2?:string, mailingAddress3?:string, mailingAddress4?:string, mailingCity?:string, mailingCountry?:string, mailingCounty?:string, mailingPostalCode?:string, mailingProvince?:string, mailingState?:string, middleName?:string, mobilePhoneNumber?:string, partyType?:string, phoneNumber?:string, postalCode?:string, profileARN?:string, profileId?:string, province?:string, shippingAddress1?:string, shippingAddress2?:string, shippingAddress3?:string, shippingAddress4?:string, shippingCity?:string, shippingCountry?:string, shippingCounty?:string, shippingPostalCode?:string, shippingProvince?:string, shippingState?:string, state?:string}, systemAttributes?:array{customerEndpoint?:array{address?:string}, name?:string, systemEndpoint?:array{address?:string}}}, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, knowledgeBaseArn:string, knowledgeBaseId:string, language?:string, lastModifiedBy:string, lastModifiedTime:int|string|\DateTimeInterface, messageTemplateArn:string, messageTemplateContentSha256:string, messageTemplateId:string, name:string, tags?:array<string, string>}}>
     */
    public function updateMessageTemplate(array $args): \AWS\Result { }

    /**
     * @param array{content?:array{email?:array{body?:array{html?:array{content?:mixed}, plainText?:array{content?:mixed}}, headers?:array<array{name?:string, value?:string}>, subject?:string}, sms?:array{body?:array{plainText?:array{content?:mixed}}}}, defaultAttributes?:array{agentAttributes?:array{firstName?:string, lastName?:string}, customAttributes?:array<string, string>, customerProfileAttributes?:array{accountNumber?:string, additionalInformation?:string, address1?:string, address2?:string, address3?:string, address4?:string, billingAddress1?:string, billingAddress2?:string, billingAddress3?:string, billingAddress4?:string, billingCity?:string, billingCountry?:string, billingCounty?:string, billingPostalCode?:string, billingProvince?:string, billingState?:string, birthDate?:string, businessEmailAddress?:string, businessName?:string, businessPhoneNumber?:string, city?:string, country?:string, county?:string, custom?:array<string, string>, emailAddress?:string, firstName?:string, gender?:string, homePhoneNumber?:string, lastName?:string, mailingAddress1?:string, mailingAddress2?:string, mailingAddress3?:string, mailingAddress4?:string, mailingCity?:string, mailingCountry?:string, mailingCounty?:string, mailingPostalCode?:string, mailingProvince?:string, mailingState?:string, middleName?:string, mobilePhoneNumber?:string, partyType?:string, phoneNumber?:string, postalCode?:string, profileARN?:string, profileId?:string, province?:string, shippingAddress1?:string, shippingAddress2?:string, shippingAddress3?:string, shippingAddress4?:string, shippingCity?:string, shippingCountry?:string, shippingCounty?:string, shippingPostalCode?:string, shippingProvince?:string, shippingState?:string, state?:string}, systemAttributes?:array{customerEndpoint?:array{address?:string}, name?:string, systemEndpoint?:array{address?:string}}}, knowledgeBaseId:string, language?:string, messageTemplateId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{messageTemplate?:array{attributeTypes?:array<"SYSTEM"|"AGENT"|"CUSTOMER_PROFILE"|"CUSTOM">, channelSubtype:"EMAIL"|"SMS", content:array{email?:array{body?:array{html?:array{content?:mixed}, plainText?:array{content?:mixed}}, headers?:array<array{name?:string, value?:string}>, subject?:string}, sms?:array{body?:array{plainText?:array{content?:mixed}}}}, createdTime:int|string|\DateTimeInterface, defaultAttributes?:array{agentAttributes?:array{firstName?:string, lastName?:string}, customAttributes?:array<string, string>, customerProfileAttributes?:array{accountNumber?:string, additionalInformation?:string, address1?:string, address2?:string, address3?:string, address4?:string, billingAddress1?:string, billingAddress2?:string, billingAddress3?:string, billingAddress4?:string, billingCity?:string, billingCountry?:string, billingCounty?:string, billingPostalCode?:string, billingProvince?:string, billingState?:string, birthDate?:string, businessEmailAddress?:string, businessName?:string, businessPhoneNumber?:string, city?:string, country?:string, county?:string, custom?:array<string, string>, emailAddress?:string, firstName?:string, gender?:string, homePhoneNumber?:string, lastName?:string, mailingAddress1?:string, mailingAddress2?:string, mailingAddress3?:string, mailingAddress4?:string, mailingCity?:string, mailingCountry?:string, mailingCounty?:string, mailingPostalCode?:string, mailingProvince?:string, mailingState?:string, middleName?:string, mobilePhoneNumber?:string, partyType?:string, phoneNumber?:string, postalCode?:string, profileARN?:string, profileId?:string, province?:string, shippingAddress1?:string, shippingAddress2?:string, shippingAddress3?:string, shippingAddress4?:string, shippingCity?:string, shippingCountry?:string, shippingCounty?:string, shippingPostalCode?:string, shippingProvince?:string, shippingState?:string, state?:string}, systemAttributes?:array{customerEndpoint?:array{address?:string}, name?:string, systemEndpoint?:array{address?:string}}}, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, knowledgeBaseArn:string, knowledgeBaseId:string, language?:string, lastModifiedBy:string, lastModifiedTime:int|string|\DateTimeInterface, messageTemplateArn:string, messageTemplateContentSha256:string, messageTemplateId:string, name:string, tags?:array<string, string>}}>
     */
    public function updateMessageTemplateAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, knowledgeBaseId:string, messageTemplateId:string, name?:string} $args
     * @return \AWS\Result<array{messageTemplate?:array{attributeTypes?:array<"SYSTEM"|"AGENT"|"CUSTOMER_PROFILE"|"CUSTOM">, channelSubtype:"EMAIL"|"SMS", content:array{email?:array{body?:array{html?:array{content?:mixed}, plainText?:array{content?:mixed}}, headers?:array<array{name?:string, value?:string}>, subject?:string}, sms?:array{body?:array{plainText?:array{content?:mixed}}}}, createdTime:int|string|\DateTimeInterface, defaultAttributes?:array{agentAttributes?:array{firstName?:string, lastName?:string}, customAttributes?:array<string, string>, customerProfileAttributes?:array{accountNumber?:string, additionalInformation?:string, address1?:string, address2?:string, address3?:string, address4?:string, billingAddress1?:string, billingAddress2?:string, billingAddress3?:string, billingAddress4?:string, billingCity?:string, billingCountry?:string, billingCounty?:string, billingPostalCode?:string, billingProvince?:string, billingState?:string, birthDate?:string, businessEmailAddress?:string, businessName?:string, businessPhoneNumber?:string, city?:string, country?:string, county?:string, custom?:array<string, string>, emailAddress?:string, firstName?:string, gender?:string, homePhoneNumber?:string, lastName?:string, mailingAddress1?:string, mailingAddress2?:string, mailingAddress3?:string, mailingAddress4?:string, mailingCity?:string, mailingCountry?:string, mailingCounty?:string, mailingPostalCode?:string, mailingProvince?:string, mailingState?:string, middleName?:string, mobilePhoneNumber?:string, partyType?:string, phoneNumber?:string, postalCode?:string, profileARN?:string, profileId?:string, province?:string, shippingAddress1?:string, shippingAddress2?:string, shippingAddress3?:string, shippingAddress4?:string, shippingCity?:string, shippingCountry?:string, shippingCounty?:string, shippingPostalCode?:string, shippingProvince?:string, shippingState?:string, state?:string}, systemAttributes?:array{customerEndpoint?:array{address?:string}, name?:string, systemEndpoint?:array{address?:string}}}, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, knowledgeBaseArn:string, knowledgeBaseId:string, language?:string, lastModifiedBy:string, lastModifiedTime:int|string|\DateTimeInterface, messageTemplateArn:string, messageTemplateContentSha256:string, messageTemplateId:string, name:string, tags?:array<string, string>}}>
     */
    public function updateMessageTemplateMetadata(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, knowledgeBaseId:string, messageTemplateId:string, name?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{messageTemplate?:array{attributeTypes?:array<"SYSTEM"|"AGENT"|"CUSTOMER_PROFILE"|"CUSTOM">, channelSubtype:"EMAIL"|"SMS", content:array{email?:array{body?:array{html?:array{content?:mixed}, plainText?:array{content?:mixed}}, headers?:array<array{name?:string, value?:string}>, subject?:string}, sms?:array{body?:array{plainText?:array{content?:mixed}}}}, createdTime:int|string|\DateTimeInterface, defaultAttributes?:array{agentAttributes?:array{firstName?:string, lastName?:string}, customAttributes?:array<string, string>, customerProfileAttributes?:array{accountNumber?:string, additionalInformation?:string, address1?:string, address2?:string, address3?:string, address4?:string, billingAddress1?:string, billingAddress2?:string, billingAddress3?:string, billingAddress4?:string, billingCity?:string, billingCountry?:string, billingCounty?:string, billingPostalCode?:string, billingProvince?:string, billingState?:string, birthDate?:string, businessEmailAddress?:string, businessName?:string, businessPhoneNumber?:string, city?:string, country?:string, county?:string, custom?:array<string, string>, emailAddress?:string, firstName?:string, gender?:string, homePhoneNumber?:string, lastName?:string, mailingAddress1?:string, mailingAddress2?:string, mailingAddress3?:string, mailingAddress4?:string, mailingCity?:string, mailingCountry?:string, mailingCounty?:string, mailingPostalCode?:string, mailingProvince?:string, mailingState?:string, middleName?:string, mobilePhoneNumber?:string, partyType?:string, phoneNumber?:string, postalCode?:string, profileARN?:string, profileId?:string, province?:string, shippingAddress1?:string, shippingAddress2?:string, shippingAddress3?:string, shippingAddress4?:string, shippingCity?:string, shippingCountry?:string, shippingCounty?:string, shippingPostalCode?:string, shippingProvince?:string, shippingState?:string, state?:string}, systemAttributes?:array{customerEndpoint?:array{address?:string}, name?:string, systemEndpoint?:array{address?:string}}}, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, knowledgeBaseArn:string, knowledgeBaseId:string, language?:string, lastModifiedBy:string, lastModifiedTime:int|string|\DateTimeInterface, messageTemplateArn:string, messageTemplateContentSha256:string, messageTemplateId:string, name:string, tags?:array<string, string>}}>
     */
    public function updateMessageTemplateMetadataAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{channels?:array<string>, content?:array{content?:mixed}, contentType?:string, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, isActive?:bool, knowledgeBaseId:string, language?:string, name?:string, quickResponseId:string, removeDescription?:bool, removeGroupingConfiguration?:bool, removeShortcutKey?:bool, shortcutKey?:string} $args
     * @return \AWS\Result<array{quickResponse?:array{channels?:array<string>, contentType:string, contents?:array{markdown?:array{content?:string}, plainText?:array{content?:string}}, createdTime:int|string|\DateTimeInterface, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, isActive?:bool, knowledgeBaseArn:string, knowledgeBaseId:string, language?:string, lastModifiedBy?:string, lastModifiedTime:int|string|\DateTimeInterface, name:string, quickResponseArn:string, quickResponseId:string, shortcutKey?:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED", tags?:array<string, string>}}>
     */
    public function updateQuickResponse(array $args): \AWS\Result { }

    /**
     * @param array{channels?:array<string>, content?:array{content?:mixed}, contentType?:string, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, isActive?:bool, knowledgeBaseId:string, language?:string, name?:string, quickResponseId:string, removeDescription?:bool, removeGroupingConfiguration?:bool, removeShortcutKey?:bool, shortcutKey?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{quickResponse?:array{channels?:array<string>, contentType:string, contents?:array{markdown?:array{content?:string}, plainText?:array{content?:string}}, createdTime:int|string|\DateTimeInterface, description?:string, groupingConfiguration?:array{criteria?:string, values?:array<string>}, isActive?:bool, knowledgeBaseArn:string, knowledgeBaseId:string, language?:string, lastModifiedBy?:string, lastModifiedTime:int|string|\DateTimeInterface, name:string, quickResponseArn:string, quickResponseId:string, shortcutKey?:string, status:"CREATE_IN_PROGRESS"|"CREATE_FAILED"|"CREATED"|"DELETE_IN_PROGRESS"|"DELETE_FAILED"|"DELETED"|"UPDATE_IN_PROGRESS"|"UPDATE_FAILED", tags?:array<string, string>}}>
     */
    public function updateQuickResponseAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{aiAgentConfiguration?:array<"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", array{aiAgentId:string}>, assistantId:string, description?:string, sessionId:string, tagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}} $args
     * @return \AWS\Result<array{session?:array{aiAgentConfiguration?:array<"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", array{aiAgentId:string}>, description?:string, integrationConfiguration?:array{topicIntegrationArn?:string}, name:string, sessionArn:string, sessionId:string, tagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, tags?:array<string, string>}}>
     */
    public function updateSession(array $args): \AWS\Result { }

    /**
     * @param array{aiAgentConfiguration?:array<"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", array{aiAgentId:string}>, assistantId:string, description?:string, sessionId:string, tagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}} $args
     * @return \GuzzleHttp\Promise\Promise<array{session?:array{aiAgentConfiguration?:array<"MANUAL_SEARCH"|"ANSWER_RECOMMENDATION"|"SELF_SERVICE", array{aiAgentId:string}>, description?:string, integrationConfiguration?:array{topicIntegrationArn?:string}, name:string, sessionArn:string, sessionId:string, tagFilter?:array{andConditions?:array<array{key:string, value?:string}>, orConditions?:array<array{andConditions?:array<array{key:string, value?:string}>, tagCondition?:array{key:string, value?:string}}>, tagCondition?:array{key:string, value?:string}}, tags?:array<string, string>}}>
     */
    public function updateSessionAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{assistantId:string, data:array<array{key:string, value:array{stringValue?:string}}>, namespace?:"Custom", sessionId:string} $args
     * @return \AWS\Result<array{data:array<array{key:string, value:array{stringValue?:string}}>, namespace:"Custom", sessionArn:string, sessionId:string}>
     */
    public function updateSessionData(array $args): \AWS\Result { }

    /**
     * @param array{assistantId:string, data:array<array{key:string, value:array{stringValue?:string}}>, namespace?:"Custom", sessionId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{data:array<array{key:string, value:array{stringValue?:string}}>, namespace:"Custom", sessionArn:string, sessionId:string}>
     */
    public function updateSessionDataAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
