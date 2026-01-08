<?php
namespace AWS\EntityResolution;

class EntityResolutionClient
{
    /**
     * @param array{action:array<string>, arn:string, condition?:string, effect:"Allow"|"Deny", principal:array<string>, statementId:string} $args
     * @return \AWS\Result<array{arn:string, policy?:string, token:string}>
     */
    public function addPolicyStatement(array $args): \AWS\Result { }

    /**
     * @param array{action:array<string>, arn:string, condition?:string, effect:"Allow"|"Deny", principal:array<string>, statementId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, policy?:string, token:string}>
     */
    public function addPolicyStatementAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{inputSource?:string, uniqueIds:array<string>, workflowName:string} $args
     * @return \AWS\Result<array{deleted:array<array{uniqueId:string}>, disconnectedUniqueIds:array<string>, errors:array<array{errorType:"SERVICE_ERROR"|"VALIDATION_ERROR", uniqueId:string}>, status:"COMPLETED"|"ACCEPTED"}>
     */
    public function batchDeleteUniqueId(array $args): \AWS\Result { }

    /**
     * @param array{inputSource?:string, uniqueIds:array<string>, workflowName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{deleted:array<array{uniqueId:string}>, disconnectedUniqueIds:array<string>, errors:array<array{errorType:"SERVICE_ERROR"|"VALIDATION_ERROR", uniqueId:string}>, status:"COMPLETED"|"ACCEPTED"}>
     */
    public function batchDeleteUniqueIdAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, idMappingTechniques:array{idMappingType:"PROVIDER"|"RULE_BASED", providerProperties?:array{intermediateSourceConfiguration?:array{intermediateS3Path:string}, providerConfiguration?:array{}, providerServiceArn:string}, ruleBasedProperties?:array{attributeMatchingModel:"ONE_TO_ONE"|"MANY_TO_MANY", recordMatchingModel:"ONE_SOURCE_TO_ONE_TARGET"|"MANY_SOURCE_TO_ONE_TARGET", ruleDefinitionType:"SOURCE"|"TARGET", rules?:array<array{matchingKeys:array<string>, ruleName:string}>}}, inputSourceConfig:array<array{inputSourceARN:string, schemaName?:string, type?:"SOURCE"|"TARGET"}>, outputSourceConfig?:array<array{KMSArn?:string, outputS3Path:string}>, roleArn?:string, tags?:array<string, string>, workflowName:string} $args
     * @return \AWS\Result<array{description?:string, idMappingTechniques:array{idMappingType:"PROVIDER"|"RULE_BASED", providerProperties?:array{intermediateSourceConfiguration?:array{intermediateS3Path:string}, providerConfiguration?:array{}, providerServiceArn:string}, ruleBasedProperties?:array{attributeMatchingModel:"ONE_TO_ONE"|"MANY_TO_MANY", recordMatchingModel:"ONE_SOURCE_TO_ONE_TARGET"|"MANY_SOURCE_TO_ONE_TARGET", ruleDefinitionType:"SOURCE"|"TARGET", rules?:array<array{matchingKeys:array<string>, ruleName:string}>}}, inputSourceConfig:array<array{inputSourceARN:string, schemaName?:string, type?:"SOURCE"|"TARGET"}>, outputSourceConfig?:array<array{KMSArn?:string, outputS3Path:string}>, roleArn?:string, workflowArn:string, workflowName:string}>
     */
    public function createIdMappingWorkflow(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, idMappingTechniques:array{idMappingType:"PROVIDER"|"RULE_BASED", providerProperties?:array{intermediateSourceConfiguration?:array{intermediateS3Path:string}, providerConfiguration?:array{}, providerServiceArn:string}, ruleBasedProperties?:array{attributeMatchingModel:"ONE_TO_ONE"|"MANY_TO_MANY", recordMatchingModel:"ONE_SOURCE_TO_ONE_TARGET"|"MANY_SOURCE_TO_ONE_TARGET", ruleDefinitionType:"SOURCE"|"TARGET", rules?:array<array{matchingKeys:array<string>, ruleName:string}>}}, inputSourceConfig:array<array{inputSourceARN:string, schemaName?:string, type?:"SOURCE"|"TARGET"}>, outputSourceConfig?:array<array{KMSArn?:string, outputS3Path:string}>, roleArn?:string, tags?:array<string, string>, workflowName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{description?:string, idMappingTechniques:array{idMappingType:"PROVIDER"|"RULE_BASED", providerProperties?:array{intermediateSourceConfiguration?:array{intermediateS3Path:string}, providerConfiguration?:array{}, providerServiceArn:string}, ruleBasedProperties?:array{attributeMatchingModel:"ONE_TO_ONE"|"MANY_TO_MANY", recordMatchingModel:"ONE_SOURCE_TO_ONE_TARGET"|"MANY_SOURCE_TO_ONE_TARGET", ruleDefinitionType:"SOURCE"|"TARGET", rules?:array<array{matchingKeys:array<string>, ruleName:string}>}}, inputSourceConfig:array<array{inputSourceARN:string, schemaName?:string, type?:"SOURCE"|"TARGET"}>, outputSourceConfig?:array<array{KMSArn?:string, outputS3Path:string}>, roleArn?:string, workflowArn:string, workflowName:string}>
     */
    public function createIdMappingWorkflowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, idMappingWorkflowProperties?:array<array{idMappingType:"PROVIDER"|"RULE_BASED", providerProperties?:array{providerConfiguration?:array{}, providerServiceArn:string}, ruleBasedProperties?:array{attributeMatchingModel?:"ONE_TO_ONE"|"MANY_TO_MANY", recordMatchingModels?:array<"ONE_SOURCE_TO_ONE_TARGET"|"MANY_SOURCE_TO_ONE_TARGET">, ruleDefinitionTypes?:array<"SOURCE"|"TARGET">, rules?:array<array{matchingKeys:array<string>, ruleName:string}>}}>, idNamespaceName:string, inputSourceConfig?:array<array{inputSourceARN:string, schemaName?:string}>, roleArn?:string, tags?:array<string, string>, type:"SOURCE"|"TARGET"} $args
     * @return \AWS\Result<array{createdAt:int|string|\DateTimeInterface, description?:string, idMappingWorkflowProperties?:array<array{idMappingType:"PROVIDER"|"RULE_BASED", providerProperties?:array{providerConfiguration?:array{}, providerServiceArn:string}, ruleBasedProperties?:array{attributeMatchingModel?:"ONE_TO_ONE"|"MANY_TO_MANY", recordMatchingModels?:array<"ONE_SOURCE_TO_ONE_TARGET"|"MANY_SOURCE_TO_ONE_TARGET">, ruleDefinitionTypes?:array<"SOURCE"|"TARGET">, rules?:array<array{matchingKeys:array<string>, ruleName:string}>}}>, idNamespaceArn:string, idNamespaceName:string, inputSourceConfig?:array<array{inputSourceARN:string, schemaName?:string}>, roleArn?:string, tags?:array<string, string>, type:"SOURCE"|"TARGET", updatedAt:int|string|\DateTimeInterface}>
     */
    public function createIdNamespace(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, idMappingWorkflowProperties?:array<array{idMappingType:"PROVIDER"|"RULE_BASED", providerProperties?:array{providerConfiguration?:array{}, providerServiceArn:string}, ruleBasedProperties?:array{attributeMatchingModel?:"ONE_TO_ONE"|"MANY_TO_MANY", recordMatchingModels?:array<"ONE_SOURCE_TO_ONE_TARGET"|"MANY_SOURCE_TO_ONE_TARGET">, ruleDefinitionTypes?:array<"SOURCE"|"TARGET">, rules?:array<array{matchingKeys:array<string>, ruleName:string}>}}>, idNamespaceName:string, inputSourceConfig?:array<array{inputSourceARN:string, schemaName?:string}>, roleArn?:string, tags?:array<string, string>, type:"SOURCE"|"TARGET"} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt:int|string|\DateTimeInterface, description?:string, idMappingWorkflowProperties?:array<array{idMappingType:"PROVIDER"|"RULE_BASED", providerProperties?:array{providerConfiguration?:array{}, providerServiceArn:string}, ruleBasedProperties?:array{attributeMatchingModel?:"ONE_TO_ONE"|"MANY_TO_MANY", recordMatchingModels?:array<"ONE_SOURCE_TO_ONE_TARGET"|"MANY_SOURCE_TO_ONE_TARGET">, ruleDefinitionTypes?:array<"SOURCE"|"TARGET">, rules?:array<array{matchingKeys:array<string>, ruleName:string}>}}>, idNamespaceArn:string, idNamespaceName:string, inputSourceConfig?:array<array{inputSourceARN:string, schemaName?:string}>, roleArn?:string, tags?:array<string, string>, type:"SOURCE"|"TARGET", updatedAt:int|string|\DateTimeInterface}>
     */
    public function createIdNamespaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, incrementalRunConfig?:array{incrementalRunType?:"IMMEDIATE"}, inputSourceConfig:array<array{applyNormalization?:bool, inputSourceARN:string, schemaName:string}>, outputSourceConfig:array<array{KMSArn?:string, applyNormalization?:bool, output:array<array{hashed?:bool, name:string}>, outputS3Path:string}>, resolutionTechniques:array{providerProperties?:array{intermediateSourceConfiguration?:array{intermediateS3Path:string}, providerConfiguration?:array{}, providerServiceArn:string}, resolutionType:"RULE_MATCHING"|"ML_MATCHING"|"PROVIDER", ruleBasedProperties?:array{attributeMatchingModel:"ONE_TO_ONE"|"MANY_TO_MANY", matchPurpose?:"IDENTIFIER_GENERATION"|"INDEXING", rules:array<array{matchingKeys:array<string>, ruleName:string}>}}, roleArn:string, tags?:array<string, string>, workflowName:string} $args
     * @return \AWS\Result<array{description?:string, incrementalRunConfig?:array{incrementalRunType?:"IMMEDIATE"}, inputSourceConfig:array<array{applyNormalization?:bool, inputSourceARN:string, schemaName:string}>, outputSourceConfig:array<array{KMSArn?:string, applyNormalization?:bool, output:array<array{hashed?:bool, name:string}>, outputS3Path:string}>, resolutionTechniques:array{providerProperties?:array{intermediateSourceConfiguration?:array{intermediateS3Path:string}, providerConfiguration?:array{}, providerServiceArn:string}, resolutionType:"RULE_MATCHING"|"ML_MATCHING"|"PROVIDER", ruleBasedProperties?:array{attributeMatchingModel:"ONE_TO_ONE"|"MANY_TO_MANY", matchPurpose?:"IDENTIFIER_GENERATION"|"INDEXING", rules:array<array{matchingKeys:array<string>, ruleName:string}>}}, roleArn:string, workflowArn:string, workflowName:string}>
     */
    public function createMatchingWorkflow(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, incrementalRunConfig?:array{incrementalRunType?:"IMMEDIATE"}, inputSourceConfig:array<array{applyNormalization?:bool, inputSourceARN:string, schemaName:string}>, outputSourceConfig:array<array{KMSArn?:string, applyNormalization?:bool, output:array<array{hashed?:bool, name:string}>, outputS3Path:string}>, resolutionTechniques:array{providerProperties?:array{intermediateSourceConfiguration?:array{intermediateS3Path:string}, providerConfiguration?:array{}, providerServiceArn:string}, resolutionType:"RULE_MATCHING"|"ML_MATCHING"|"PROVIDER", ruleBasedProperties?:array{attributeMatchingModel:"ONE_TO_ONE"|"MANY_TO_MANY", matchPurpose?:"IDENTIFIER_GENERATION"|"INDEXING", rules:array<array{matchingKeys:array<string>, ruleName:string}>}}, roleArn:string, tags?:array<string, string>, workflowName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{description?:string, incrementalRunConfig?:array{incrementalRunType?:"IMMEDIATE"}, inputSourceConfig:array<array{applyNormalization?:bool, inputSourceARN:string, schemaName:string}>, outputSourceConfig:array<array{KMSArn?:string, applyNormalization?:bool, output:array<array{hashed?:bool, name:string}>, outputS3Path:string}>, resolutionTechniques:array{providerProperties?:array{intermediateSourceConfiguration?:array{intermediateS3Path:string}, providerConfiguration?:array{}, providerServiceArn:string}, resolutionType:"RULE_MATCHING"|"ML_MATCHING"|"PROVIDER", ruleBasedProperties?:array{attributeMatchingModel:"ONE_TO_ONE"|"MANY_TO_MANY", matchPurpose?:"IDENTIFIER_GENERATION"|"INDEXING", rules:array<array{matchingKeys:array<string>, ruleName:string}>}}, roleArn:string, workflowArn:string, workflowName:string}>
     */
    public function createMatchingWorkflowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, mappedInputFields:array<array{fieldName:string, groupName?:string, hashed?:bool, matchKey?:string, subType?:string, type:"NAME"|"NAME_FIRST"|"NAME_MIDDLE"|"NAME_LAST"|"ADDRESS"|"ADDRESS_STREET1"|"ADDRESS_STREET2"|"ADDRESS_STREET3"|"ADDRESS_CITY"|"ADDRESS_STATE"|"ADDRESS_COUNTRY"|"ADDRESS_POSTALCODE"|"PHONE"|"PHONE_NUMBER"|"PHONE_COUNTRYCODE"|"EMAIL_ADDRESS"|"UNIQUE_ID"|"DATE"|"STRING"|"PROVIDER_ID"}>, schemaName:string, tags?:array<string, string>} $args
     * @return \AWS\Result<array{description:string, mappedInputFields:array<array{fieldName:string, groupName?:string, hashed?:bool, matchKey?:string, subType?:string, type:"NAME"|"NAME_FIRST"|"NAME_MIDDLE"|"NAME_LAST"|"ADDRESS"|"ADDRESS_STREET1"|"ADDRESS_STREET2"|"ADDRESS_STREET3"|"ADDRESS_CITY"|"ADDRESS_STATE"|"ADDRESS_COUNTRY"|"ADDRESS_POSTALCODE"|"PHONE"|"PHONE_NUMBER"|"PHONE_COUNTRYCODE"|"EMAIL_ADDRESS"|"UNIQUE_ID"|"DATE"|"STRING"|"PROVIDER_ID"}>, schemaArn:string, schemaName:string}>
     */
    public function createSchemaMapping(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, mappedInputFields:array<array{fieldName:string, groupName?:string, hashed?:bool, matchKey?:string, subType?:string, type:"NAME"|"NAME_FIRST"|"NAME_MIDDLE"|"NAME_LAST"|"ADDRESS"|"ADDRESS_STREET1"|"ADDRESS_STREET2"|"ADDRESS_STREET3"|"ADDRESS_CITY"|"ADDRESS_STATE"|"ADDRESS_COUNTRY"|"ADDRESS_POSTALCODE"|"PHONE"|"PHONE_NUMBER"|"PHONE_COUNTRYCODE"|"EMAIL_ADDRESS"|"UNIQUE_ID"|"DATE"|"STRING"|"PROVIDER_ID"}>, schemaName:string, tags?:array<string, string>} $args
     * @return \GuzzleHttp\Promise\Promise<array{description:string, mappedInputFields:array<array{fieldName:string, groupName?:string, hashed?:bool, matchKey?:string, subType?:string, type:"NAME"|"NAME_FIRST"|"NAME_MIDDLE"|"NAME_LAST"|"ADDRESS"|"ADDRESS_STREET1"|"ADDRESS_STREET2"|"ADDRESS_STREET3"|"ADDRESS_CITY"|"ADDRESS_STATE"|"ADDRESS_COUNTRY"|"ADDRESS_POSTALCODE"|"PHONE"|"PHONE_NUMBER"|"PHONE_COUNTRYCODE"|"EMAIL_ADDRESS"|"UNIQUE_ID"|"DATE"|"STRING"|"PROVIDER_ID"}>, schemaArn:string, schemaName:string}>
     */
    public function createSchemaMappingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{workflowName:string} $args
     * @return \AWS\Result<array{message:string}>
     */
    public function deleteIdMappingWorkflow(array $args): \AWS\Result { }

    /**
     * @param array{workflowName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{message:string}>
     */
    public function deleteIdMappingWorkflowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{idNamespaceName:string} $args
     * @return \AWS\Result<array{message:string}>
     */
    public function deleteIdNamespace(array $args): \AWS\Result { }

    /**
     * @param array{idNamespaceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{message:string}>
     */
    public function deleteIdNamespaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{workflowName:string} $args
     * @return \AWS\Result<array{message:string}>
     */
    public function deleteMatchingWorkflow(array $args): \AWS\Result { }

    /**
     * @param array{workflowName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{message:string}>
     */
    public function deleteMatchingWorkflowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, statementId:string} $args
     * @return \AWS\Result<array{arn:string, policy?:string, token:string}>
     */
    public function deletePolicyStatement(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, statementId:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, policy?:string, token:string}>
     */
    public function deletePolicyStatementAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{schemaName:string} $args
     * @return \AWS\Result<array{message:string}>
     */
    public function deleteSchemaMapping(array $args): \AWS\Result { }

    /**
     * @param array{schemaName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{message:string}>
     */
    public function deleteSchemaMappingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string, workflowName:string} $args
     * @return \AWS\Result<array{endTime?:int|string|\DateTimeInterface, errorDetails?:array{errorMessage?:string}, jobId:string, metrics?:array{inputRecords?:int, recordsNotProcessed?:int, totalMappedRecords?:int, totalMappedSourceRecords?:int, totalMappedTargetRecords?:int, totalRecordsProcessed?:int}, outputSourceConfig?:array<array{KMSArn?:string, outputS3Path:string, roleArn:string}>, startTime:int|string|\DateTimeInterface, status:"RUNNING"|"SUCCEEDED"|"FAILED"|"QUEUED"}>
     */
    public function getIdMappingJob(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string, workflowName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{endTime?:int|string|\DateTimeInterface, errorDetails?:array{errorMessage?:string}, jobId:string, metrics?:array{inputRecords?:int, recordsNotProcessed?:int, totalMappedRecords?:int, totalMappedSourceRecords?:int, totalMappedTargetRecords?:int, totalRecordsProcessed?:int}, outputSourceConfig?:array<array{KMSArn?:string, outputS3Path:string, roleArn:string}>, startTime:int|string|\DateTimeInterface, status:"RUNNING"|"SUCCEEDED"|"FAILED"|"QUEUED"}>
     */
    public function getIdMappingJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{workflowName:string} $args
     * @return \AWS\Result<array{createdAt:int|string|\DateTimeInterface, description?:string, idMappingTechniques:array{idMappingType:"PROVIDER"|"RULE_BASED", providerProperties?:array{intermediateSourceConfiguration?:array{intermediateS3Path:string}, providerConfiguration?:array{}, providerServiceArn:string}, ruleBasedProperties?:array{attributeMatchingModel:"ONE_TO_ONE"|"MANY_TO_MANY", recordMatchingModel:"ONE_SOURCE_TO_ONE_TARGET"|"MANY_SOURCE_TO_ONE_TARGET", ruleDefinitionType:"SOURCE"|"TARGET", rules?:array<array{matchingKeys:array<string>, ruleName:string}>}}, inputSourceConfig:array<array{inputSourceARN:string, schemaName?:string, type?:"SOURCE"|"TARGET"}>, outputSourceConfig?:array<array{KMSArn?:string, outputS3Path:string}>, roleArn?:string, tags?:array<string, string>, updatedAt:int|string|\DateTimeInterface, workflowArn:string, workflowName:string}>
     */
    public function getIdMappingWorkflow(array $args): \AWS\Result { }

    /**
     * @param array{workflowName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt:int|string|\DateTimeInterface, description?:string, idMappingTechniques:array{idMappingType:"PROVIDER"|"RULE_BASED", providerProperties?:array{intermediateSourceConfiguration?:array{intermediateS3Path:string}, providerConfiguration?:array{}, providerServiceArn:string}, ruleBasedProperties?:array{attributeMatchingModel:"ONE_TO_ONE"|"MANY_TO_MANY", recordMatchingModel:"ONE_SOURCE_TO_ONE_TARGET"|"MANY_SOURCE_TO_ONE_TARGET", ruleDefinitionType:"SOURCE"|"TARGET", rules?:array<array{matchingKeys:array<string>, ruleName:string}>}}, inputSourceConfig:array<array{inputSourceARN:string, schemaName?:string, type?:"SOURCE"|"TARGET"}>, outputSourceConfig?:array<array{KMSArn?:string, outputS3Path:string}>, roleArn?:string, tags?:array<string, string>, updatedAt:int|string|\DateTimeInterface, workflowArn:string, workflowName:string}>
     */
    public function getIdMappingWorkflowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{idNamespaceName:string} $args
     * @return \AWS\Result<array{createdAt:int|string|\DateTimeInterface, description?:string, idMappingWorkflowProperties?:array<array{idMappingType:"PROVIDER"|"RULE_BASED", providerProperties?:array{providerConfiguration?:array{}, providerServiceArn:string}, ruleBasedProperties?:array{attributeMatchingModel?:"ONE_TO_ONE"|"MANY_TO_MANY", recordMatchingModels?:array<"ONE_SOURCE_TO_ONE_TARGET"|"MANY_SOURCE_TO_ONE_TARGET">, ruleDefinitionTypes?:array<"SOURCE"|"TARGET">, rules?:array<array{matchingKeys:array<string>, ruleName:string}>}}>, idNamespaceArn:string, idNamespaceName:string, inputSourceConfig?:array<array{inputSourceARN:string, schemaName?:string}>, roleArn?:string, tags?:array<string, string>, type:"SOURCE"|"TARGET", updatedAt:int|string|\DateTimeInterface}>
     */
    public function getIdNamespace(array $args): \AWS\Result { }

    /**
     * @param array{idNamespaceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt:int|string|\DateTimeInterface, description?:string, idMappingWorkflowProperties?:array<array{idMappingType:"PROVIDER"|"RULE_BASED", providerProperties?:array{providerConfiguration?:array{}, providerServiceArn:string}, ruleBasedProperties?:array{attributeMatchingModel?:"ONE_TO_ONE"|"MANY_TO_MANY", recordMatchingModels?:array<"ONE_SOURCE_TO_ONE_TARGET"|"MANY_SOURCE_TO_ONE_TARGET">, ruleDefinitionTypes?:array<"SOURCE"|"TARGET">, rules?:array<array{matchingKeys:array<string>, ruleName:string}>}}>, idNamespaceArn:string, idNamespaceName:string, inputSourceConfig?:array<array{inputSourceARN:string, schemaName?:string}>, roleArn?:string, tags?:array<string, string>, type:"SOURCE"|"TARGET", updatedAt:int|string|\DateTimeInterface}>
     */
    public function getIdNamespaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{applyNormalization?:bool, record:array<string, string>, workflowName:string} $args
     * @return \AWS\Result<array{matchId?:string, matchRule?:string}>
     */
    public function getMatchId(array $args): \AWS\Result { }

    /**
     * @param array{applyNormalization?:bool, record:array<string, string>, workflowName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{matchId?:string, matchRule?:string}>
     */
    public function getMatchIdAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{jobId:string, workflowName:string} $args
     * @return \AWS\Result<array{endTime?:int|string|\DateTimeInterface, errorDetails?:array{errorMessage?:string}, jobId:string, metrics?:array{inputRecords?:int, matchIDs?:int, recordsNotProcessed?:int, totalRecordsProcessed?:int}, outputSourceConfig?:array<array{KMSArn?:string, outputS3Path:string, roleArn:string}>, startTime:int|string|\DateTimeInterface, status:"RUNNING"|"SUCCEEDED"|"FAILED"|"QUEUED"}>
     */
    public function getMatchingJob(array $args): \AWS\Result { }

    /**
     * @param array{jobId:string, workflowName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{endTime?:int|string|\DateTimeInterface, errorDetails?:array{errorMessage?:string}, jobId:string, metrics?:array{inputRecords?:int, matchIDs?:int, recordsNotProcessed?:int, totalRecordsProcessed?:int}, outputSourceConfig?:array<array{KMSArn?:string, outputS3Path:string, roleArn:string}>, startTime:int|string|\DateTimeInterface, status:"RUNNING"|"SUCCEEDED"|"FAILED"|"QUEUED"}>
     */
    public function getMatchingJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{workflowName:string} $args
     * @return \AWS\Result<array{createdAt:int|string|\DateTimeInterface, description?:string, incrementalRunConfig?:array{incrementalRunType?:"IMMEDIATE"}, inputSourceConfig:array<array{applyNormalization?:bool, inputSourceARN:string, schemaName:string}>, outputSourceConfig:array<array{KMSArn?:string, applyNormalization?:bool, output:array<array{hashed?:bool, name:string}>, outputS3Path:string}>, resolutionTechniques:array{providerProperties?:array{intermediateSourceConfiguration?:array{intermediateS3Path:string}, providerConfiguration?:array{}, providerServiceArn:string}, resolutionType:"RULE_MATCHING"|"ML_MATCHING"|"PROVIDER", ruleBasedProperties?:array{attributeMatchingModel:"ONE_TO_ONE"|"MANY_TO_MANY", matchPurpose?:"IDENTIFIER_GENERATION"|"INDEXING", rules:array<array{matchingKeys:array<string>, ruleName:string}>}}, roleArn:string, tags?:array<string, string>, updatedAt:int|string|\DateTimeInterface, workflowArn:string, workflowName:string}>
     */
    public function getMatchingWorkflow(array $args): \AWS\Result { }

    /**
     * @param array{workflowName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt:int|string|\DateTimeInterface, description?:string, incrementalRunConfig?:array{incrementalRunType?:"IMMEDIATE"}, inputSourceConfig:array<array{applyNormalization?:bool, inputSourceARN:string, schemaName:string}>, outputSourceConfig:array<array{KMSArn?:string, applyNormalization?:bool, output:array<array{hashed?:bool, name:string}>, outputS3Path:string}>, resolutionTechniques:array{providerProperties?:array{intermediateSourceConfiguration?:array{intermediateS3Path:string}, providerConfiguration?:array{}, providerServiceArn:string}, resolutionType:"RULE_MATCHING"|"ML_MATCHING"|"PROVIDER", ruleBasedProperties?:array{attributeMatchingModel:"ONE_TO_ONE"|"MANY_TO_MANY", matchPurpose?:"IDENTIFIER_GENERATION"|"INDEXING", rules:array<array{matchingKeys:array<string>, ruleName:string}>}}, roleArn:string, tags?:array<string, string>, updatedAt:int|string|\DateTimeInterface, workflowArn:string, workflowName:string}>
     */
    public function getMatchingWorkflowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string} $args
     * @return \AWS\Result<array{arn:string, policy?:string, token:string}>
     */
    public function getPolicy(array $args): \AWS\Result { }

    /**
     * @param array{arn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, policy?:string, token:string}>
     */
    public function getPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{providerName:string, providerServiceName:string} $args
     * @return \AWS\Result<array{anonymizedOutput:bool, providerComponentSchema?:array{providerSchemaAttributes?:array<array{fieldName:string, hashing?:bool, subType?:string, type:"NAME"|"NAME_FIRST"|"NAME_MIDDLE"|"NAME_LAST"|"ADDRESS"|"ADDRESS_STREET1"|"ADDRESS_STREET2"|"ADDRESS_STREET3"|"ADDRESS_CITY"|"ADDRESS_STATE"|"ADDRESS_COUNTRY"|"ADDRESS_POSTALCODE"|"PHONE"|"PHONE_NUMBER"|"PHONE_COUNTRYCODE"|"EMAIL_ADDRESS"|"UNIQUE_ID"|"DATE"|"STRING"|"PROVIDER_ID"}>, schemas?:array<array<string>>}, providerConfigurationDefinition?:array{}, providerEndpointConfiguration:array{marketplaceConfiguration?:array{assetId:string, dataSetId:string, listingId:string, revisionId:string}}, providerEntityOutputDefinition:array{}, providerIdNameSpaceConfiguration?:array{description?:string, providerSourceConfigurationDefinition?:array{}, providerTargetConfigurationDefinition?:array{}}, providerIntermediateDataAccessConfiguration?:array{awsAccountIds?:array<string>, requiredBucketActions?:array<string>}, providerJobConfiguration?:array{}, providerName:string, providerServiceArn:string, providerServiceDisplayName:string, providerServiceName:string, providerServiceType:"ASSIGNMENT"|"ID_MAPPING"}>
     */
    public function getProviderService(array $args): \AWS\Result { }

    /**
     * @param array{providerName:string, providerServiceName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{anonymizedOutput:bool, providerComponentSchema?:array{providerSchemaAttributes?:array<array{fieldName:string, hashing?:bool, subType?:string, type:"NAME"|"NAME_FIRST"|"NAME_MIDDLE"|"NAME_LAST"|"ADDRESS"|"ADDRESS_STREET1"|"ADDRESS_STREET2"|"ADDRESS_STREET3"|"ADDRESS_CITY"|"ADDRESS_STATE"|"ADDRESS_COUNTRY"|"ADDRESS_POSTALCODE"|"PHONE"|"PHONE_NUMBER"|"PHONE_COUNTRYCODE"|"EMAIL_ADDRESS"|"UNIQUE_ID"|"DATE"|"STRING"|"PROVIDER_ID"}>, schemas?:array<array<string>>}, providerConfigurationDefinition?:array{}, providerEndpointConfiguration:array{marketplaceConfiguration?:array{assetId:string, dataSetId:string, listingId:string, revisionId:string}}, providerEntityOutputDefinition:array{}, providerIdNameSpaceConfiguration?:array{description?:string, providerSourceConfigurationDefinition?:array{}, providerTargetConfigurationDefinition?:array{}}, providerIntermediateDataAccessConfiguration?:array{awsAccountIds?:array<string>, requiredBucketActions?:array<string>}, providerJobConfiguration?:array{}, providerName:string, providerServiceArn:string, providerServiceDisplayName:string, providerServiceName:string, providerServiceType:"ASSIGNMENT"|"ID_MAPPING"}>
     */
    public function getProviderServiceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{schemaName:string} $args
     * @return \AWS\Result<array{createdAt:int|string|\DateTimeInterface, description?:string, hasWorkflows:bool, mappedInputFields:array<array{fieldName:string, groupName?:string, hashed?:bool, matchKey?:string, subType?:string, type:"NAME"|"NAME_FIRST"|"NAME_MIDDLE"|"NAME_LAST"|"ADDRESS"|"ADDRESS_STREET1"|"ADDRESS_STREET2"|"ADDRESS_STREET3"|"ADDRESS_CITY"|"ADDRESS_STATE"|"ADDRESS_COUNTRY"|"ADDRESS_POSTALCODE"|"PHONE"|"PHONE_NUMBER"|"PHONE_COUNTRYCODE"|"EMAIL_ADDRESS"|"UNIQUE_ID"|"DATE"|"STRING"|"PROVIDER_ID"}>, schemaArn:string, schemaName:string, tags?:array<string, string>, updatedAt:int|string|\DateTimeInterface}>
     */
    public function getSchemaMapping(array $args): \AWS\Result { }

    /**
     * @param array{schemaName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt:int|string|\DateTimeInterface, description?:string, hasWorkflows:bool, mappedInputFields:array<array{fieldName:string, groupName?:string, hashed?:bool, matchKey?:string, subType?:string, type:"NAME"|"NAME_FIRST"|"NAME_MIDDLE"|"NAME_LAST"|"ADDRESS"|"ADDRESS_STREET1"|"ADDRESS_STREET2"|"ADDRESS_STREET3"|"ADDRESS_CITY"|"ADDRESS_STATE"|"ADDRESS_COUNTRY"|"ADDRESS_POSTALCODE"|"PHONE"|"PHONE_NUMBER"|"PHONE_COUNTRYCODE"|"EMAIL_ADDRESS"|"UNIQUE_ID"|"DATE"|"STRING"|"PROVIDER_ID"}>, schemaArn:string, schemaName:string, tags?:array<string, string>, updatedAt:int|string|\DateTimeInterface}>
     */
    public function getSchemaMappingAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, workflowName:string} $args
     * @return \AWS\Result<array{jobs?:array<array{endTime?:int|string|\DateTimeInterface, jobId:string, startTime:int|string|\DateTimeInterface, status:"RUNNING"|"SUCCEEDED"|"FAILED"|"QUEUED"}>, nextToken?:string}>
     */
    public function listIdMappingJobs(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, workflowName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobs?:array<array{endTime?:int|string|\DateTimeInterface, jobId:string, startTime:int|string|\DateTimeInterface, status:"RUNNING"|"SUCCEEDED"|"FAILED"|"QUEUED"}>, nextToken?:string}>
     */
    public function listIdMappingJobsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, workflowSummaries?:array<array{createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, workflowArn:string, workflowName:string}>}>
     */
    public function listIdMappingWorkflows(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, workflowSummaries?:array<array{createdAt:int|string|\DateTimeInterface, updatedAt:int|string|\DateTimeInterface, workflowArn:string, workflowName:string}>}>
     */
    public function listIdMappingWorkflowsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{idNamespaceSummaries?:array<array{createdAt:int|string|\DateTimeInterface, description?:string, idMappingWorkflowProperties?:array<array{idMappingType:"PROVIDER"|"RULE_BASED"}>, idNamespaceArn:string, idNamespaceName:string, type:"SOURCE"|"TARGET", updatedAt:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listIdNamespaces(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{idNamespaceSummaries?:array<array{createdAt:int|string|\DateTimeInterface, description?:string, idMappingWorkflowProperties?:array<array{idMappingType:"PROVIDER"|"RULE_BASED"}>, idNamespaceArn:string, idNamespaceName:string, type:"SOURCE"|"TARGET", updatedAt:int|string|\DateTimeInterface}>, nextToken?:string}>
     */
    public function listIdNamespacesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, workflowName:string} $args
     * @return \AWS\Result<array{jobs?:array<array{endTime?:int|string|\DateTimeInterface, jobId:string, startTime:int|string|\DateTimeInterface, status:"RUNNING"|"SUCCEEDED"|"FAILED"|"QUEUED"}>, nextToken?:string}>
     */
    public function listMatchingJobs(array $args): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, workflowName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobs?:array<array{endTime?:int|string|\DateTimeInterface, jobId:string, startTime:int|string|\DateTimeInterface, status:"RUNNING"|"SUCCEEDED"|"FAILED"|"QUEUED"}>, nextToken?:string}>
     */
    public function listMatchingJobsAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, workflowSummaries?:array<array{createdAt:int|string|\DateTimeInterface, resolutionType:"RULE_MATCHING"|"ML_MATCHING"|"PROVIDER", updatedAt:int|string|\DateTimeInterface, workflowArn:string, workflowName:string}>}>
     */
    public function listMatchingWorkflows(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, workflowSummaries?:array<array{createdAt:int|string|\DateTimeInterface, resolutionType:"RULE_MATCHING"|"ML_MATCHING"|"PROVIDER", updatedAt:int|string|\DateTimeInterface, workflowArn:string, workflowName:string}>}>
     */
    public function listMatchingWorkflowsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string, providerName?:string} $args
     * @return \AWS\Result<array{nextToken?:string, providerServiceSummaries?:array<array{providerName:string, providerServiceArn:string, providerServiceDisplayName:string, providerServiceName:string, providerServiceType:"ASSIGNMENT"|"ID_MAPPING"}>}>
     */
    public function listProviderServices(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string, providerName?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, providerServiceSummaries?:array<array{providerName:string, providerServiceArn:string, providerServiceDisplayName:string, providerServiceName:string, providerServiceType:"ASSIGNMENT"|"ID_MAPPING"}>}>
     */
    public function listProviderServicesAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \AWS\Result<array{nextToken?:string, schemaList?:array<array{createdAt:int|string|\DateTimeInterface, hasWorkflows:bool, schemaArn:string, schemaName:string, updatedAt:int|string|\DateTimeInterface}>}>
     */
    public function listSchemaMappings(array $args = []): \AWS\Result { }

    /**
     * @param array{maxResults?:int, nextToken?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{nextToken?:string, schemaList?:array<array{createdAt:int|string|\DateTimeInterface, hasWorkflows:bool, schemaArn:string, schemaName:string, updatedAt:int|string|\DateTimeInterface}>}>
     */
    public function listSchemaMappingsAsync(array $args = []): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{resourceArn:string} $args
     * @return \AWS\Result<array{tags:array<string, string>}>
     */
    public function listTagsForResource(array $args): \AWS\Result { }

    /**
     * @param array{resourceArn:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{tags:array<string, string>}>
     */
    public function listTagsForResourceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{arn:string, policy:string, token?:string} $args
     * @return \AWS\Result<array{arn:string, policy?:string, token:string}>
     */
    public function putPolicy(array $args): \AWS\Result { }

    /**
     * @param array{arn:string, policy:string, token?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{arn:string, policy?:string, token:string}>
     */
    public function putPolicyAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{outputSourceConfig?:array<array{KMSArn?:string, outputS3Path:string, roleArn:string}>, workflowName:string} $args
     * @return \AWS\Result<array{jobId:string, outputSourceConfig?:array<array{KMSArn?:string, outputS3Path:string, roleArn:string}>}>
     */
    public function startIdMappingJob(array $args): \AWS\Result { }

    /**
     * @param array{outputSourceConfig?:array<array{KMSArn?:string, outputS3Path:string, roleArn:string}>, workflowName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobId:string, outputSourceConfig?:array<array{KMSArn?:string, outputS3Path:string, roleArn:string}>}>
     */
    public function startIdMappingJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{workflowName:string} $args
     * @return \AWS\Result<array{jobId:string}>
     */
    public function startMatchingJob(array $args): \AWS\Result { }

    /**
     * @param array{workflowName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{jobId:string}>
     */
    public function startMatchingJobAsync(array $args): \GuzzleHttp\Promise\Promise { }

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
     * @param array{description?:string, idMappingTechniques:array{idMappingType:"PROVIDER"|"RULE_BASED", providerProperties?:array{intermediateSourceConfiguration?:array{intermediateS3Path:string}, providerConfiguration?:array{}, providerServiceArn:string}, ruleBasedProperties?:array{attributeMatchingModel:"ONE_TO_ONE"|"MANY_TO_MANY", recordMatchingModel:"ONE_SOURCE_TO_ONE_TARGET"|"MANY_SOURCE_TO_ONE_TARGET", ruleDefinitionType:"SOURCE"|"TARGET", rules?:array<array{matchingKeys:array<string>, ruleName:string}>}}, inputSourceConfig:array<array{inputSourceARN:string, schemaName?:string, type?:"SOURCE"|"TARGET"}>, outputSourceConfig?:array<array{KMSArn?:string, outputS3Path:string}>, roleArn?:string, workflowName:string} $args
     * @return \AWS\Result<array{description?:string, idMappingTechniques:array{idMappingType:"PROVIDER"|"RULE_BASED", providerProperties?:array{intermediateSourceConfiguration?:array{intermediateS3Path:string}, providerConfiguration?:array{}, providerServiceArn:string}, ruleBasedProperties?:array{attributeMatchingModel:"ONE_TO_ONE"|"MANY_TO_MANY", recordMatchingModel:"ONE_SOURCE_TO_ONE_TARGET"|"MANY_SOURCE_TO_ONE_TARGET", ruleDefinitionType:"SOURCE"|"TARGET", rules?:array<array{matchingKeys:array<string>, ruleName:string}>}}, inputSourceConfig:array<array{inputSourceARN:string, schemaName?:string, type?:"SOURCE"|"TARGET"}>, outputSourceConfig?:array<array{KMSArn?:string, outputS3Path:string}>, roleArn?:string, workflowArn:string, workflowName:string}>
     */
    public function updateIdMappingWorkflow(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, idMappingTechniques:array{idMappingType:"PROVIDER"|"RULE_BASED", providerProperties?:array{intermediateSourceConfiguration?:array{intermediateS3Path:string}, providerConfiguration?:array{}, providerServiceArn:string}, ruleBasedProperties?:array{attributeMatchingModel:"ONE_TO_ONE"|"MANY_TO_MANY", recordMatchingModel:"ONE_SOURCE_TO_ONE_TARGET"|"MANY_SOURCE_TO_ONE_TARGET", ruleDefinitionType:"SOURCE"|"TARGET", rules?:array<array{matchingKeys:array<string>, ruleName:string}>}}, inputSourceConfig:array<array{inputSourceARN:string, schemaName?:string, type?:"SOURCE"|"TARGET"}>, outputSourceConfig?:array<array{KMSArn?:string, outputS3Path:string}>, roleArn?:string, workflowName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{description?:string, idMappingTechniques:array{idMappingType:"PROVIDER"|"RULE_BASED", providerProperties?:array{intermediateSourceConfiguration?:array{intermediateS3Path:string}, providerConfiguration?:array{}, providerServiceArn:string}, ruleBasedProperties?:array{attributeMatchingModel:"ONE_TO_ONE"|"MANY_TO_MANY", recordMatchingModel:"ONE_SOURCE_TO_ONE_TARGET"|"MANY_SOURCE_TO_ONE_TARGET", ruleDefinitionType:"SOURCE"|"TARGET", rules?:array<array{matchingKeys:array<string>, ruleName:string}>}}, inputSourceConfig:array<array{inputSourceARN:string, schemaName?:string, type?:"SOURCE"|"TARGET"}>, outputSourceConfig?:array<array{KMSArn?:string, outputS3Path:string}>, roleArn?:string, workflowArn:string, workflowName:string}>
     */
    public function updateIdMappingWorkflowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, idMappingWorkflowProperties?:array<array{idMappingType:"PROVIDER"|"RULE_BASED", providerProperties?:array{providerConfiguration?:array{}, providerServiceArn:string}, ruleBasedProperties?:array{attributeMatchingModel?:"ONE_TO_ONE"|"MANY_TO_MANY", recordMatchingModels?:array<"ONE_SOURCE_TO_ONE_TARGET"|"MANY_SOURCE_TO_ONE_TARGET">, ruleDefinitionTypes?:array<"SOURCE"|"TARGET">, rules?:array<array{matchingKeys:array<string>, ruleName:string}>}}>, idNamespaceName:string, inputSourceConfig?:array<array{inputSourceARN:string, schemaName?:string}>, roleArn?:string} $args
     * @return \AWS\Result<array{createdAt:int|string|\DateTimeInterface, description?:string, idMappingWorkflowProperties?:array<array{idMappingType:"PROVIDER"|"RULE_BASED", providerProperties?:array{providerConfiguration?:array{}, providerServiceArn:string}, ruleBasedProperties?:array{attributeMatchingModel?:"ONE_TO_ONE"|"MANY_TO_MANY", recordMatchingModels?:array<"ONE_SOURCE_TO_ONE_TARGET"|"MANY_SOURCE_TO_ONE_TARGET">, ruleDefinitionTypes?:array<"SOURCE"|"TARGET">, rules?:array<array{matchingKeys:array<string>, ruleName:string}>}}>, idNamespaceArn:string, idNamespaceName:string, inputSourceConfig?:array<array{inputSourceARN:string, schemaName?:string}>, roleArn?:string, type:"SOURCE"|"TARGET", updatedAt:int|string|\DateTimeInterface}>
     */
    public function updateIdNamespace(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, idMappingWorkflowProperties?:array<array{idMappingType:"PROVIDER"|"RULE_BASED", providerProperties?:array{providerConfiguration?:array{}, providerServiceArn:string}, ruleBasedProperties?:array{attributeMatchingModel?:"ONE_TO_ONE"|"MANY_TO_MANY", recordMatchingModels?:array<"ONE_SOURCE_TO_ONE_TARGET"|"MANY_SOURCE_TO_ONE_TARGET">, ruleDefinitionTypes?:array<"SOURCE"|"TARGET">, rules?:array<array{matchingKeys:array<string>, ruleName:string}>}}>, idNamespaceName:string, inputSourceConfig?:array<array{inputSourceARN:string, schemaName?:string}>, roleArn?:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{createdAt:int|string|\DateTimeInterface, description?:string, idMappingWorkflowProperties?:array<array{idMappingType:"PROVIDER"|"RULE_BASED", providerProperties?:array{providerConfiguration?:array{}, providerServiceArn:string}, ruleBasedProperties?:array{attributeMatchingModel?:"ONE_TO_ONE"|"MANY_TO_MANY", recordMatchingModels?:array<"ONE_SOURCE_TO_ONE_TARGET"|"MANY_SOURCE_TO_ONE_TARGET">, ruleDefinitionTypes?:array<"SOURCE"|"TARGET">, rules?:array<array{matchingKeys:array<string>, ruleName:string}>}}>, idNamespaceArn:string, idNamespaceName:string, inputSourceConfig?:array<array{inputSourceARN:string, schemaName?:string}>, roleArn?:string, type:"SOURCE"|"TARGET", updatedAt:int|string|\DateTimeInterface}>
     */
    public function updateIdNamespaceAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, incrementalRunConfig?:array{incrementalRunType?:"IMMEDIATE"}, inputSourceConfig:array<array{applyNormalization?:bool, inputSourceARN:string, schemaName:string}>, outputSourceConfig:array<array{KMSArn?:string, applyNormalization?:bool, output:array<array{hashed?:bool, name:string}>, outputS3Path:string}>, resolutionTechniques:array{providerProperties?:array{intermediateSourceConfiguration?:array{intermediateS3Path:string}, providerConfiguration?:array{}, providerServiceArn:string}, resolutionType:"RULE_MATCHING"|"ML_MATCHING"|"PROVIDER", ruleBasedProperties?:array{attributeMatchingModel:"ONE_TO_ONE"|"MANY_TO_MANY", matchPurpose?:"IDENTIFIER_GENERATION"|"INDEXING", rules:array<array{matchingKeys:array<string>, ruleName:string}>}}, roleArn:string, workflowName:string} $args
     * @return \AWS\Result<array{description?:string, incrementalRunConfig?:array{incrementalRunType?:"IMMEDIATE"}, inputSourceConfig:array<array{applyNormalization?:bool, inputSourceARN:string, schemaName:string}>, outputSourceConfig:array<array{KMSArn?:string, applyNormalization?:bool, output:array<array{hashed?:bool, name:string}>, outputS3Path:string}>, resolutionTechniques:array{providerProperties?:array{intermediateSourceConfiguration?:array{intermediateS3Path:string}, providerConfiguration?:array{}, providerServiceArn:string}, resolutionType:"RULE_MATCHING"|"ML_MATCHING"|"PROVIDER", ruleBasedProperties?:array{attributeMatchingModel:"ONE_TO_ONE"|"MANY_TO_MANY", matchPurpose?:"IDENTIFIER_GENERATION"|"INDEXING", rules:array<array{matchingKeys:array<string>, ruleName:string}>}}, roleArn:string, workflowName:string}>
     */
    public function updateMatchingWorkflow(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, incrementalRunConfig?:array{incrementalRunType?:"IMMEDIATE"}, inputSourceConfig:array<array{applyNormalization?:bool, inputSourceARN:string, schemaName:string}>, outputSourceConfig:array<array{KMSArn?:string, applyNormalization?:bool, output:array<array{hashed?:bool, name:string}>, outputS3Path:string}>, resolutionTechniques:array{providerProperties?:array{intermediateSourceConfiguration?:array{intermediateS3Path:string}, providerConfiguration?:array{}, providerServiceArn:string}, resolutionType:"RULE_MATCHING"|"ML_MATCHING"|"PROVIDER", ruleBasedProperties?:array{attributeMatchingModel:"ONE_TO_ONE"|"MANY_TO_MANY", matchPurpose?:"IDENTIFIER_GENERATION"|"INDEXING", rules:array<array{matchingKeys:array<string>, ruleName:string}>}}, roleArn:string, workflowName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{description?:string, incrementalRunConfig?:array{incrementalRunType?:"IMMEDIATE"}, inputSourceConfig:array<array{applyNormalization?:bool, inputSourceARN:string, schemaName:string}>, outputSourceConfig:array<array{KMSArn?:string, applyNormalization?:bool, output:array<array{hashed?:bool, name:string}>, outputS3Path:string}>, resolutionTechniques:array{providerProperties?:array{intermediateSourceConfiguration?:array{intermediateS3Path:string}, providerConfiguration?:array{}, providerServiceArn:string}, resolutionType:"RULE_MATCHING"|"ML_MATCHING"|"PROVIDER", ruleBasedProperties?:array{attributeMatchingModel:"ONE_TO_ONE"|"MANY_TO_MANY", matchPurpose?:"IDENTIFIER_GENERATION"|"INDEXING", rules:array<array{matchingKeys:array<string>, ruleName:string}>}}, roleArn:string, workflowName:string}>
     */
    public function updateMatchingWorkflowAsync(array $args): \GuzzleHttp\Promise\Promise { }

    /**
     * @param array{description?:string, mappedInputFields:array<array{fieldName:string, groupName?:string, hashed?:bool, matchKey?:string, subType?:string, type:"NAME"|"NAME_FIRST"|"NAME_MIDDLE"|"NAME_LAST"|"ADDRESS"|"ADDRESS_STREET1"|"ADDRESS_STREET2"|"ADDRESS_STREET3"|"ADDRESS_CITY"|"ADDRESS_STATE"|"ADDRESS_COUNTRY"|"ADDRESS_POSTALCODE"|"PHONE"|"PHONE_NUMBER"|"PHONE_COUNTRYCODE"|"EMAIL_ADDRESS"|"UNIQUE_ID"|"DATE"|"STRING"|"PROVIDER_ID"}>, schemaName:string} $args
     * @return \AWS\Result<array{description?:string, mappedInputFields:array<array{fieldName:string, groupName?:string, hashed?:bool, matchKey?:string, subType?:string, type:"NAME"|"NAME_FIRST"|"NAME_MIDDLE"|"NAME_LAST"|"ADDRESS"|"ADDRESS_STREET1"|"ADDRESS_STREET2"|"ADDRESS_STREET3"|"ADDRESS_CITY"|"ADDRESS_STATE"|"ADDRESS_COUNTRY"|"ADDRESS_POSTALCODE"|"PHONE"|"PHONE_NUMBER"|"PHONE_COUNTRYCODE"|"EMAIL_ADDRESS"|"UNIQUE_ID"|"DATE"|"STRING"|"PROVIDER_ID"}>, schemaArn:string, schemaName:string}>
     */
    public function updateSchemaMapping(array $args): \AWS\Result { }

    /**
     * @param array{description?:string, mappedInputFields:array<array{fieldName:string, groupName?:string, hashed?:bool, matchKey?:string, subType?:string, type:"NAME"|"NAME_FIRST"|"NAME_MIDDLE"|"NAME_LAST"|"ADDRESS"|"ADDRESS_STREET1"|"ADDRESS_STREET2"|"ADDRESS_STREET3"|"ADDRESS_CITY"|"ADDRESS_STATE"|"ADDRESS_COUNTRY"|"ADDRESS_POSTALCODE"|"PHONE"|"PHONE_NUMBER"|"PHONE_COUNTRYCODE"|"EMAIL_ADDRESS"|"UNIQUE_ID"|"DATE"|"STRING"|"PROVIDER_ID"}>, schemaName:string} $args
     * @return \GuzzleHttp\Promise\Promise<array{description?:string, mappedInputFields:array<array{fieldName:string, groupName?:string, hashed?:bool, matchKey?:string, subType?:string, type:"NAME"|"NAME_FIRST"|"NAME_MIDDLE"|"NAME_LAST"|"ADDRESS"|"ADDRESS_STREET1"|"ADDRESS_STREET2"|"ADDRESS_STREET3"|"ADDRESS_CITY"|"ADDRESS_STATE"|"ADDRESS_COUNTRY"|"ADDRESS_POSTALCODE"|"PHONE"|"PHONE_NUMBER"|"PHONE_COUNTRYCODE"|"EMAIL_ADDRESS"|"UNIQUE_ID"|"DATE"|"STRING"|"PROVIDER_ID"}>, schemaArn:string, schemaName:string}>
     */
    public function updateSchemaMappingAsync(array $args): \GuzzleHttp\Promise\Promise { }
}
